<?php

namespace Base;

use \SalesOrder as ChildSalesOrder;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \Exception;
use \PDO;
use Map\SalesOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_header' table.
 *
 *
 *
 * @method     ChildSalesOrderQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSalesOrderQuery orderByOehdstat($order = Criteria::ASC) Order by the OehdStat column
 * @method     ChildSalesOrderQuery orderByOehdhold($order = Criteria::ASC) Order by the OehdHold column
 * @method     ChildSalesOrderQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildSalesOrderQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildSalesOrderQuery orderByOehdstname($order = Criteria::ASC) Order by the OehdStName column
 * @method     ChildSalesOrderQuery orderByOehdstlastname($order = Criteria::ASC) Order by the OehdStLastName column
 * @method     ChildSalesOrderQuery orderByOehdstfirstname($order = Criteria::ASC) Order by the OehdStFirstName column
 * @method     ChildSalesOrderQuery orderByOehdstadr1($order = Criteria::ASC) Order by the OehdStAdr1 column
 * @method     ChildSalesOrderQuery orderByOehdstadr2($order = Criteria::ASC) Order by the OehdStAdr2 column
 * @method     ChildSalesOrderQuery orderByOehdstadr3($order = Criteria::ASC) Order by the OehdStAdr3 column
 * @method     ChildSalesOrderQuery orderByOehdstctry($order = Criteria::ASC) Order by the OehdStCtry column
 * @method     ChildSalesOrderQuery orderByOehdstcity($order = Criteria::ASC) Order by the OehdStCity column
 * @method     ChildSalesOrderQuery orderByOehdststat($order = Criteria::ASC) Order by the OehdStStat column
 * @method     ChildSalesOrderQuery orderByOehdstzipcode($order = Criteria::ASC) Order by the OehdStZipCode column
 * @method     ChildSalesOrderQuery orderByOehdcustpo($order = Criteria::ASC) Order by the OehdCustPo column
 * @method     ChildSalesOrderQuery orderByOehdordrdate($order = Criteria::ASC) Order by the OehdOrdrDate column
 * @method     ChildSalesOrderQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildSalesOrderQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildSalesOrderQuery orderByArininvnbr($order = Criteria::ASC) Order by the ArinInvNbr column
 * @method     ChildSalesOrderQuery orderByOehdinvdate($order = Criteria::ASC) Order by the OehdInvDate column
 * @method     ChildSalesOrderQuery orderByOehdglpd($order = Criteria::ASC) Order by the OehdGLPd column
 * @method     ChildSalesOrderQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildSalesOrderQuery orderByOehdsp1pct($order = Criteria::ASC) Order by the OehdSp1Pct column
 * @method     ChildSalesOrderQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildSalesOrderQuery orderByOehdsp2pct($order = Criteria::ASC) Order by the OehdSp2Pct column
 * @method     ChildSalesOrderQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildSalesOrderQuery orderByOehdsp3pct($order = Criteria::ASC) Order by the OehdSp3Pct column
 * @method     ChildSalesOrderQuery orderByOehdcntrnbr($order = Criteria::ASC) Order by the OehdCntrNbr column
 * @method     ChildSalesOrderQuery orderByOehdwibatch($order = Criteria::ASC) Order by the OehdWiBatch column
 * @method     ChildSalesOrderQuery orderByOehddroprelhold($order = Criteria::ASC) Order by the OehdDropRelHold column
 * @method     ChildSalesOrderQuery orderByOehdtaxsub($order = Criteria::ASC) Order by the OehdTaxSub column
 * @method     ChildSalesOrderQuery orderByOehdnontaxsub($order = Criteria::ASC) Order by the OehdNonTaxSub column
 * @method     ChildSalesOrderQuery orderByOehdtaxtot($order = Criteria::ASC) Order by the OehdTaxTot column
 * @method     ChildSalesOrderQuery orderByOehdfrttot($order = Criteria::ASC) Order by the OehdFrtTot column
 * @method     ChildSalesOrderQuery orderByOehdmisctot($order = Criteria::ASC) Order by the OehdMiscTot column
 * @method     ChildSalesOrderQuery orderByOehdordrtot($order = Criteria::ASC) Order by the OehdOrdrTot column
 * @method     ChildSalesOrderQuery orderByOehdcosttot($order = Criteria::ASC) Order by the OehdCostTot column
 * @method     ChildSalesOrderQuery orderByOehdspcommlock($order = Criteria::ASC) Order by the OehdSpCommLock column
 * @method     ChildSalesOrderQuery orderByOehdtakendate($order = Criteria::ASC) Order by the OehdTakenDate column
 * @method     ChildSalesOrderQuery orderByOehdtakentime($order = Criteria::ASC) Order by the OehdTakenTime column
 * @method     ChildSalesOrderQuery orderByOehdpickdate($order = Criteria::ASC) Order by the OehdPickDate column
 * @method     ChildSalesOrderQuery orderByOehdpicktime($order = Criteria::ASC) Order by the OehdPickTime column
 * @method     ChildSalesOrderQuery orderByOehdpackdate($order = Criteria::ASC) Order by the OehdPackDate column
 * @method     ChildSalesOrderQuery orderByOehdpacktime($order = Criteria::ASC) Order by the OehdPackTime column
 * @method     ChildSalesOrderQuery orderByOehdverifydate($order = Criteria::ASC) Order by the OehdVerifyDate column
 * @method     ChildSalesOrderQuery orderByOehdverifytime($order = Criteria::ASC) Order by the OehdVerifyTime column
 * @method     ChildSalesOrderQuery orderByOehdcreditmemo($order = Criteria::ASC) Order by the OehdCreditMemo column
 * @method     ChildSalesOrderQuery orderByOehdbookedyn($order = Criteria::ASC) Order by the OehdBookedYn column
 * @method     ChildSalesOrderQuery orderByIntbwhseorig($order = Criteria::ASC) Order by the IntbWhseOrig column
 * @method     ChildSalesOrderQuery orderByOehdbtstat($order = Criteria::ASC) Order by the OehdBtStat column
 * @method     ChildSalesOrderQuery orderByOehdshipcomp($order = Criteria::ASC) Order by the OehdShipComp column
 * @method     ChildSalesOrderQuery orderByOehdcwoflag($order = Criteria::ASC) Order by the OehdCwoFlag column
 * @method     ChildSalesOrderQuery orderByOehddivision($order = Criteria::ASC) Order by the OehdDivision column
 * @method     ChildSalesOrderQuery orderByOehdtakencode($order = Criteria::ASC) Order by the OehdTakenCode column
 * @method     ChildSalesOrderQuery orderByOehdpickcode($order = Criteria::ASC) Order by the OehdPickCode column
 * @method     ChildSalesOrderQuery orderByOehdpackcode($order = Criteria::ASC) Order by the OehdPackCode column
 * @method     ChildSalesOrderQuery orderByOehdverifycode($order = Criteria::ASC) Order by the OehdVerifyCode column
 * @method     ChildSalesOrderQuery orderByOehdtotdisc($order = Criteria::ASC) Order by the OehdTotDisc column
 * @method     ChildSalesOrderQuery orderByOehdedirefnbrqual($order = Criteria::ASC) Order by the OehdEdiRefNbrQual column
 * @method     ChildSalesOrderQuery orderByOehdusercode1($order = Criteria::ASC) Order by the OehdUserCode1 column
 * @method     ChildSalesOrderQuery orderByOehdusercode2($order = Criteria::ASC) Order by the OehdUserCode2 column
 * @method     ChildSalesOrderQuery orderByOehdusercode3($order = Criteria::ASC) Order by the OehdUserCode3 column
 * @method     ChildSalesOrderQuery orderByOehdusercode4($order = Criteria::ASC) Order by the OehdUserCode4 column
 * @method     ChildSalesOrderQuery orderByOehdexchctry($order = Criteria::ASC) Order by the OehdExchCtry column
 * @method     ChildSalesOrderQuery orderByOehdexchrate($order = Criteria::ASC) Order by the OehdExchRate column
 * @method     ChildSalesOrderQuery orderByOehdwghttot($order = Criteria::ASC) Order by the OehdWghtTot column
 * @method     ChildSalesOrderQuery orderByOehdwghtoride($order = Criteria::ASC) Order by the OehdWghtOride column
 * @method     ChildSalesOrderQuery orderByOehdccinfo($order = Criteria::ASC) Order by the OehdCcInfo column
 * @method     ChildSalesOrderQuery orderByOehdboxcount($order = Criteria::ASC) Order by the OehdBoxCount column
 * @method     ChildSalesOrderQuery orderByOehdrqstdate($order = Criteria::ASC) Order by the OehdRqstDate column
 * @method     ChildSalesOrderQuery orderByOehdcancdate($order = Criteria::ASC) Order by the OehdCancDate column
 * @method     ChildSalesOrderQuery orderByOehdcrntuser($order = Criteria::ASC) Order by the OehdCrntUser column
 * @method     ChildSalesOrderQuery orderByOehdreleasenbr($order = Criteria::ASC) Order by the OehdReleaseNbr column
 * @method     ChildSalesOrderQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSalesOrderQuery orderByOehdbordbuilddate($order = Criteria::ASC) Order by the OehdBordBuildDate column
 * @method     ChildSalesOrderQuery orderByOehddeptcode($order = Criteria::ASC) Order by the OehdDeptCode column
 * @method     ChildSalesOrderQuery orderByOehdfrtinentered($order = Criteria::ASC) Order by the OehdFrtInEntered column
 * @method     ChildSalesOrderQuery orderByOehddropshipentered($order = Criteria::ASC) Order by the OehdDropShipEntered column
 * @method     ChildSalesOrderQuery orderByOehderflag($order = Criteria::ASC) Order by the OehdErFlag column
 * @method     ChildSalesOrderQuery orderByOehdfrtin($order = Criteria::ASC) Order by the OehdFrtIn column
 * @method     ChildSalesOrderQuery orderByOehddropship($order = Criteria::ASC) Order by the OehdDropShip column
 * @method     ChildSalesOrderQuery orderByOehdminorder($order = Criteria::ASC) Order by the OehdMinOrder column
 * @method     ChildSalesOrderQuery orderByOehdcontractterms($order = Criteria::ASC) Order by the OehdContractTerms column
 * @method     ChildSalesOrderQuery orderByOehddropshipbilled($order = Criteria::ASC) Order by the OehdDropShipBilled column
 * @method     ChildSalesOrderQuery orderByOehdordtyp($order = Criteria::ASC) Order by the OehdOrdTyp column
 * @method     ChildSalesOrderQuery orderByOehdtracknbr($order = Criteria::ASC) Order by the OehdTrackNbr column
 * @method     ChildSalesOrderQuery orderByOehdsource($order = Criteria::ASC) Order by the OehdSource column
 * @method     ChildSalesOrderQuery orderByOehdccaprv($order = Criteria::ASC) Order by the OehdCcAprv column
 * @method     ChildSalesOrderQuery orderByOehdpickfmattype($order = Criteria::ASC) Order by the OehdPickFmatType column
 * @method     ChildSalesOrderQuery orderByOehdinvcfmattype($order = Criteria::ASC) Order by the OehdInvcFmatType column
 * @method     ChildSalesOrderQuery orderByOehdcashamt($order = Criteria::ASC) Order by the OehdCashAmt column
 * @method     ChildSalesOrderQuery orderByOehdcheckamt($order = Criteria::ASC) Order by the OehdCheckAmt column
 * @method     ChildSalesOrderQuery orderByOehdchecknbr($order = Criteria::ASC) Order by the OehdCheckNbr column
 * @method     ChildSalesOrderQuery orderByOehddepositamt($order = Criteria::ASC) Order by the OehdDepositAmt column
 * @method     ChildSalesOrderQuery orderByOehddepositnbr($order = Criteria::ASC) Order by the OehdDepositNbr column
 * @method     ChildSalesOrderQuery orderByOehdccamt($order = Criteria::ASC) Order by the OehdCcAmt column
 * @method     ChildSalesOrderQuery orderByOehdotaxsub($order = Criteria::ASC) Order by the OehdOTaxSub column
 * @method     ChildSalesOrderQuery orderByOehdonontaxsub($order = Criteria::ASC) Order by the OehdONonTaxSub column
 * @method     ChildSalesOrderQuery orderByOehdotaxtot($order = Criteria::ASC) Order by the OehdOTaxTot column
 * @method     ChildSalesOrderQuery orderByOehdoordrtot($order = Criteria::ASC) Order by the OehdOOrdrTot column
 * @method     ChildSalesOrderQuery orderByOehdpickprintdate($order = Criteria::ASC) Order by the OehdPickPrintDate column
 * @method     ChildSalesOrderQuery orderByOehdpickprinttime($order = Criteria::ASC) Order by the OehdPickPrintTime column
 * @method     ChildSalesOrderQuery orderByOehdcont($order = Criteria::ASC) Order by the OehdCont column
 * @method     ChildSalesOrderQuery orderByOehdcontteleintl($order = Criteria::ASC) Order by the OehdContTeleIntl column
 * @method     ChildSalesOrderQuery orderByOehdconttelenbr($order = Criteria::ASC) Order by the OehdContTeleNbr column
 * @method     ChildSalesOrderQuery orderByOehdcontteleext($order = Criteria::ASC) Order by the OehdContTeleExt column
 * @method     ChildSalesOrderQuery orderByOehdcontfaxintl($order = Criteria::ASC) Order by the OehdContFaxIntl column
 * @method     ChildSalesOrderQuery orderByOehdcontfaxnbr($order = Criteria::ASC) Order by the OehdContFaxNbr column
 * @method     ChildSalesOrderQuery orderByOehdshipacct($order = Criteria::ASC) Order by the OehdShipAcct column
 * @method     ChildSalesOrderQuery orderByOehdchgdue($order = Criteria::ASC) Order by the OehdChgDue column
 * @method     ChildSalesOrderQuery orderByOehdaddlpricdisc($order = Criteria::ASC) Order by the OehdAddlPricDisc column
 * @method     ChildSalesOrderQuery orderByOehdallship($order = Criteria::ASC) Order by the OehdAllShip column
 * @method     ChildSalesOrderQuery orderByOehdqtyorderamt($order = Criteria::ASC) Order by the OehdQtyOrderAmt column
 * @method     ChildSalesOrderQuery orderByOehdcreditapplied($order = Criteria::ASC) Order by the OehdCreditApplied column
 * @method     ChildSalesOrderQuery orderByOehdinvcprintdate($order = Criteria::ASC) Order by the OehdInvcPrintDate column
 * @method     ChildSalesOrderQuery orderByOehdinvcprinttime($order = Criteria::ASC) Order by the OehdInvcPrintTime column
 * @method     ChildSalesOrderQuery orderByOehddiscfrt($order = Criteria::ASC) Order by the OehdDiscFrt column
 * @method     ChildSalesOrderQuery orderByOehdorideshipcomp($order = Criteria::ASC) Order by the OehdOrideShipComp column
 * @method     ChildSalesOrderQuery orderByOehdcontemail($order = Criteria::ASC) Order by the OehdContEmail column
 * @method     ChildSalesOrderQuery orderByOehdmanualfrt($order = Criteria::ASC) Order by the OehdManualFrt column
 * @method     ChildSalesOrderQuery orderByOehdinternalfrt($order = Criteria::ASC) Order by the OehdInternalFrt column
 * @method     ChildSalesOrderQuery orderByOehdfrtcost($order = Criteria::ASC) Order by the OehdFrtCost column
 * @method     ChildSalesOrderQuery orderByOehdroute($order = Criteria::ASC) Order by the OehdRoute column
 * @method     ChildSalesOrderQuery orderByOehdrouteseq($order = Criteria::ASC) Order by the OehdRouteSeq column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxcode1($order = Criteria::ASC) Order by the OehdFrtTaxCode1 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxamt1($order = Criteria::ASC) Order by the OehdFrtTaxAmt1 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxcode2($order = Criteria::ASC) Order by the OehdFrtTaxCode2 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxamt2($order = Criteria::ASC) Order by the OehdFrtTaxAmt2 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxcode3($order = Criteria::ASC) Order by the OehdFrtTaxCode3 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxamt3($order = Criteria::ASC) Order by the OehdFrtTaxAmt3 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxcode4($order = Criteria::ASC) Order by the OehdFrtTaxCode4 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxamt4($order = Criteria::ASC) Order by the OehdFrtTaxAmt4 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxcode5($order = Criteria::ASC) Order by the OehdFrtTaxCode5 column
 * @method     ChildSalesOrderQuery orderByOehdfrttaxamt5($order = Criteria::ASC) Order by the OehdFrtTaxAmt5 column
 * @method     ChildSalesOrderQuery orderByOehdedi855sent($order = Criteria::ASC) Order by the OehdEdi855Sent column
 * @method     ChildSalesOrderQuery orderByOehdfrt3rdparty($order = Criteria::ASC) Order by the OehdFrt3rdParty column
 * @method     ChildSalesOrderQuery orderByOehdfob($order = Criteria::ASC) Order by the OehdFob column
 * @method     ChildSalesOrderQuery orderByOehdconfirmimagyn($order = Criteria::ASC) Order by the OehdConfirmImagYn column
 * @method     ChildSalesOrderQuery orderByOehdindustconform($order = Criteria::ASC) Order by the OehdIndustConform column
 * @method     ChildSalesOrderQuery orderByOehdcstkconsign($order = Criteria::ASC) Order by the OehdCstkConsign column
 * @method     ChildSalesOrderQuery orderByOehdlmdelaycapsent($order = Criteria::ASC) Order by the OehdLmDelayCapSent column
 * @method     ChildSalesOrderQuery orderByOehdmfgid($order = Criteria::ASC) Order by the OehdMfgId column
 * @method     ChildSalesOrderQuery orderByOehdstoreid($order = Criteria::ASC) Order by the OehdStoreId column
 * @method     ChildSalesOrderQuery orderByOehdpickqueue($order = Criteria::ASC) Order by the OehdPickQueue column
 * @method     ChildSalesOrderQuery orderByOehdarrvdate($order = Criteria::ASC) Order by the OehdArrvDate column
 * @method     ChildSalesOrderQuery orderByOehdsurchgstat($order = Criteria::ASC) Order by the OehdSurchgStat column
 * @method     ChildSalesOrderQuery orderByOehdfrtgrup($order = Criteria::ASC) Order by the OehdFrtGrup column
 * @method     ChildSalesOrderQuery orderByOehdcommoride($order = Criteria::ASC) Order by the OehdCommOride column
 * @method     ChildSalesOrderQuery orderByOehdchrgsplt($order = Criteria::ASC) Order by the OehdChrgSplt column
 * @method     ChildSalesOrderQuery orderByOehdacccaprv($order = Criteria::ASC) Order by the OehdAcCcAprv column
 * @method     ChildSalesOrderQuery orderByOehdorigordrnbr($order = Criteria::ASC) Order by the OehdOrigOrdrNbr column
 * @method     ChildSalesOrderQuery orderByOehdpostdate($order = Criteria::ASC) Order by the OehdPostDate column
 * @method     ChildSalesOrderQuery orderByOehddiscdate1($order = Criteria::ASC) Order by the OehdDiscDate1 column
 * @method     ChildSalesOrderQuery orderByOehddiscpct1($order = Criteria::ASC) Order by the OehdDiscPct1 column
 * @method     ChildSalesOrderQuery orderByOehdduedate1($order = Criteria::ASC) Order by the OehdDueDate1 column
 * @method     ChildSalesOrderQuery orderByOehddueamt1($order = Criteria::ASC) Order by the OehdDueAmt1 column
 * @method     ChildSalesOrderQuery orderByOehdduepct1($order = Criteria::ASC) Order by the OehdDuePct1 column
 * @method     ChildSalesOrderQuery orderByOehddiscdate2($order = Criteria::ASC) Order by the OehdDiscDate2 column
 * @method     ChildSalesOrderQuery orderByOehddiscpct2($order = Criteria::ASC) Order by the OehdDiscPct2 column
 * @method     ChildSalesOrderQuery orderByOehdduedate2($order = Criteria::ASC) Order by the OehdDueDate2 column
 * @method     ChildSalesOrderQuery orderByOehddueamt2($order = Criteria::ASC) Order by the OehdDueAmt2 column
 * @method     ChildSalesOrderQuery orderByOehdduepct2($order = Criteria::ASC) Order by the OehdDuePct2 column
 * @method     ChildSalesOrderQuery orderByOehddiscdate3($order = Criteria::ASC) Order by the OehdDiscDate3 column
 * @method     ChildSalesOrderQuery orderByOehddiscpct3($order = Criteria::ASC) Order by the OehdDiscPct3 column
 * @method     ChildSalesOrderQuery orderByOehdduedate3($order = Criteria::ASC) Order by the OehdDueDate3 column
 * @method     ChildSalesOrderQuery orderByOehddueamt3($order = Criteria::ASC) Order by the OehdDueAmt3 column
 * @method     ChildSalesOrderQuery orderByOehdduepct3($order = Criteria::ASC) Order by the OehdDuePct3 column
 * @method     ChildSalesOrderQuery orderByOehddiscdate4($order = Criteria::ASC) Order by the OehdDiscDate4 column
 * @method     ChildSalesOrderQuery orderByOehddiscpct4($order = Criteria::ASC) Order by the OehdDiscPct4 column
 * @method     ChildSalesOrderQuery orderByOehdduedate4($order = Criteria::ASC) Order by the OehdDueDate4 column
 * @method     ChildSalesOrderQuery orderByOehddueamt4($order = Criteria::ASC) Order by the OehdDueAmt4 column
 * @method     ChildSalesOrderQuery orderByOehdduepct4($order = Criteria::ASC) Order by the OehdDuePct4 column
 * @method     ChildSalesOrderQuery orderByOehddiscdate5($order = Criteria::ASC) Order by the OehdDiscDate5 column
 * @method     ChildSalesOrderQuery orderByOehddiscpct5($order = Criteria::ASC) Order by the OehdDiscPct5 column
 * @method     ChildSalesOrderQuery orderByOehdduedate5($order = Criteria::ASC) Order by the OehdDueDate5 column
 * @method     ChildSalesOrderQuery orderByOehddueamt5($order = Criteria::ASC) Order by the OehdDueAmt5 column
 * @method     ChildSalesOrderQuery orderByOehdduepct5($order = Criteria::ASC) Order by the OehdDuePct5 column
 * @method     ChildSalesOrderQuery orderByOehddiscdate6($order = Criteria::ASC) Order by the OehdDiscDate6 column
 * @method     ChildSalesOrderQuery orderByOehddiscpct6($order = Criteria::ASC) Order by the OehdDiscPct6 column
 * @method     ChildSalesOrderQuery orderByOehdduedate6($order = Criteria::ASC) Order by the OehdDueDate6 column
 * @method     ChildSalesOrderQuery orderByOehddueamt6($order = Criteria::ASC) Order by the OehdDueAmt6 column
 * @method     ChildSalesOrderQuery orderByOehdduepct6($order = Criteria::ASC) Order by the OehdDuePct6 column
 * @method     ChildSalesOrderQuery orderByOehdrefnbr($order = Criteria::ASC) Order by the OehdRefNbr column
 * @method     ChildSalesOrderQuery orderByOehdacprognbr($order = Criteria::ASC) Order by the OehdAcProgNbr column
 * @method     ChildSalesOrderQuery orderByOehdacprogexpdate($order = Criteria::ASC) Order by the OehdAcProgExpDate column
 * @method     ChildSalesOrderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesOrderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSalesOrderQuery groupByOehdstat() Group by the OehdStat column
 * @method     ChildSalesOrderQuery groupByOehdhold() Group by the OehdHold column
 * @method     ChildSalesOrderQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildSalesOrderQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildSalesOrderQuery groupByOehdstname() Group by the OehdStName column
 * @method     ChildSalesOrderQuery groupByOehdstlastname() Group by the OehdStLastName column
 * @method     ChildSalesOrderQuery groupByOehdstfirstname() Group by the OehdStFirstName column
 * @method     ChildSalesOrderQuery groupByOehdstadr1() Group by the OehdStAdr1 column
 * @method     ChildSalesOrderQuery groupByOehdstadr2() Group by the OehdStAdr2 column
 * @method     ChildSalesOrderQuery groupByOehdstadr3() Group by the OehdStAdr3 column
 * @method     ChildSalesOrderQuery groupByOehdstctry() Group by the OehdStCtry column
 * @method     ChildSalesOrderQuery groupByOehdstcity() Group by the OehdStCity column
 * @method     ChildSalesOrderQuery groupByOehdststat() Group by the OehdStStat column
 * @method     ChildSalesOrderQuery groupByOehdstzipcode() Group by the OehdStZipCode column
 * @method     ChildSalesOrderQuery groupByOehdcustpo() Group by the OehdCustPo column
 * @method     ChildSalesOrderQuery groupByOehdordrdate() Group by the OehdOrdrDate column
 * @method     ChildSalesOrderQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildSalesOrderQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildSalesOrderQuery groupByArininvnbr() Group by the ArinInvNbr column
 * @method     ChildSalesOrderQuery groupByOehdinvdate() Group by the OehdInvDate column
 * @method     ChildSalesOrderQuery groupByOehdglpd() Group by the OehdGLPd column
 * @method     ChildSalesOrderQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildSalesOrderQuery groupByOehdsp1pct() Group by the OehdSp1Pct column
 * @method     ChildSalesOrderQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildSalesOrderQuery groupByOehdsp2pct() Group by the OehdSp2Pct column
 * @method     ChildSalesOrderQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildSalesOrderQuery groupByOehdsp3pct() Group by the OehdSp3Pct column
 * @method     ChildSalesOrderQuery groupByOehdcntrnbr() Group by the OehdCntrNbr column
 * @method     ChildSalesOrderQuery groupByOehdwibatch() Group by the OehdWiBatch column
 * @method     ChildSalesOrderQuery groupByOehddroprelhold() Group by the OehdDropRelHold column
 * @method     ChildSalesOrderQuery groupByOehdtaxsub() Group by the OehdTaxSub column
 * @method     ChildSalesOrderQuery groupByOehdnontaxsub() Group by the OehdNonTaxSub column
 * @method     ChildSalesOrderQuery groupByOehdtaxtot() Group by the OehdTaxTot column
 * @method     ChildSalesOrderQuery groupByOehdfrttot() Group by the OehdFrtTot column
 * @method     ChildSalesOrderQuery groupByOehdmisctot() Group by the OehdMiscTot column
 * @method     ChildSalesOrderQuery groupByOehdordrtot() Group by the OehdOrdrTot column
 * @method     ChildSalesOrderQuery groupByOehdcosttot() Group by the OehdCostTot column
 * @method     ChildSalesOrderQuery groupByOehdspcommlock() Group by the OehdSpCommLock column
 * @method     ChildSalesOrderQuery groupByOehdtakendate() Group by the OehdTakenDate column
 * @method     ChildSalesOrderQuery groupByOehdtakentime() Group by the OehdTakenTime column
 * @method     ChildSalesOrderQuery groupByOehdpickdate() Group by the OehdPickDate column
 * @method     ChildSalesOrderQuery groupByOehdpicktime() Group by the OehdPickTime column
 * @method     ChildSalesOrderQuery groupByOehdpackdate() Group by the OehdPackDate column
 * @method     ChildSalesOrderQuery groupByOehdpacktime() Group by the OehdPackTime column
 * @method     ChildSalesOrderQuery groupByOehdverifydate() Group by the OehdVerifyDate column
 * @method     ChildSalesOrderQuery groupByOehdverifytime() Group by the OehdVerifyTime column
 * @method     ChildSalesOrderQuery groupByOehdcreditmemo() Group by the OehdCreditMemo column
 * @method     ChildSalesOrderQuery groupByOehdbookedyn() Group by the OehdBookedYn column
 * @method     ChildSalesOrderQuery groupByIntbwhseorig() Group by the IntbWhseOrig column
 * @method     ChildSalesOrderQuery groupByOehdbtstat() Group by the OehdBtStat column
 * @method     ChildSalesOrderQuery groupByOehdshipcomp() Group by the OehdShipComp column
 * @method     ChildSalesOrderQuery groupByOehdcwoflag() Group by the OehdCwoFlag column
 * @method     ChildSalesOrderQuery groupByOehddivision() Group by the OehdDivision column
 * @method     ChildSalesOrderQuery groupByOehdtakencode() Group by the OehdTakenCode column
 * @method     ChildSalesOrderQuery groupByOehdpickcode() Group by the OehdPickCode column
 * @method     ChildSalesOrderQuery groupByOehdpackcode() Group by the OehdPackCode column
 * @method     ChildSalesOrderQuery groupByOehdverifycode() Group by the OehdVerifyCode column
 * @method     ChildSalesOrderQuery groupByOehdtotdisc() Group by the OehdTotDisc column
 * @method     ChildSalesOrderQuery groupByOehdedirefnbrqual() Group by the OehdEdiRefNbrQual column
 * @method     ChildSalesOrderQuery groupByOehdusercode1() Group by the OehdUserCode1 column
 * @method     ChildSalesOrderQuery groupByOehdusercode2() Group by the OehdUserCode2 column
 * @method     ChildSalesOrderQuery groupByOehdusercode3() Group by the OehdUserCode3 column
 * @method     ChildSalesOrderQuery groupByOehdusercode4() Group by the OehdUserCode4 column
 * @method     ChildSalesOrderQuery groupByOehdexchctry() Group by the OehdExchCtry column
 * @method     ChildSalesOrderQuery groupByOehdexchrate() Group by the OehdExchRate column
 * @method     ChildSalesOrderQuery groupByOehdwghttot() Group by the OehdWghtTot column
 * @method     ChildSalesOrderQuery groupByOehdwghtoride() Group by the OehdWghtOride column
 * @method     ChildSalesOrderQuery groupByOehdccinfo() Group by the OehdCcInfo column
 * @method     ChildSalesOrderQuery groupByOehdboxcount() Group by the OehdBoxCount column
 * @method     ChildSalesOrderQuery groupByOehdrqstdate() Group by the OehdRqstDate column
 * @method     ChildSalesOrderQuery groupByOehdcancdate() Group by the OehdCancDate column
 * @method     ChildSalesOrderQuery groupByOehdcrntuser() Group by the OehdCrntUser column
 * @method     ChildSalesOrderQuery groupByOehdreleasenbr() Group by the OehdReleaseNbr column
 * @method     ChildSalesOrderQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSalesOrderQuery groupByOehdbordbuilddate() Group by the OehdBordBuildDate column
 * @method     ChildSalesOrderQuery groupByOehddeptcode() Group by the OehdDeptCode column
 * @method     ChildSalesOrderQuery groupByOehdfrtinentered() Group by the OehdFrtInEntered column
 * @method     ChildSalesOrderQuery groupByOehddropshipentered() Group by the OehdDropShipEntered column
 * @method     ChildSalesOrderQuery groupByOehderflag() Group by the OehdErFlag column
 * @method     ChildSalesOrderQuery groupByOehdfrtin() Group by the OehdFrtIn column
 * @method     ChildSalesOrderQuery groupByOehddropship() Group by the OehdDropShip column
 * @method     ChildSalesOrderQuery groupByOehdminorder() Group by the OehdMinOrder column
 * @method     ChildSalesOrderQuery groupByOehdcontractterms() Group by the OehdContractTerms column
 * @method     ChildSalesOrderQuery groupByOehddropshipbilled() Group by the OehdDropShipBilled column
 * @method     ChildSalesOrderQuery groupByOehdordtyp() Group by the OehdOrdTyp column
 * @method     ChildSalesOrderQuery groupByOehdtracknbr() Group by the OehdTrackNbr column
 * @method     ChildSalesOrderQuery groupByOehdsource() Group by the OehdSource column
 * @method     ChildSalesOrderQuery groupByOehdccaprv() Group by the OehdCcAprv column
 * @method     ChildSalesOrderQuery groupByOehdpickfmattype() Group by the OehdPickFmatType column
 * @method     ChildSalesOrderQuery groupByOehdinvcfmattype() Group by the OehdInvcFmatType column
 * @method     ChildSalesOrderQuery groupByOehdcashamt() Group by the OehdCashAmt column
 * @method     ChildSalesOrderQuery groupByOehdcheckamt() Group by the OehdCheckAmt column
 * @method     ChildSalesOrderQuery groupByOehdchecknbr() Group by the OehdCheckNbr column
 * @method     ChildSalesOrderQuery groupByOehddepositamt() Group by the OehdDepositAmt column
 * @method     ChildSalesOrderQuery groupByOehddepositnbr() Group by the OehdDepositNbr column
 * @method     ChildSalesOrderQuery groupByOehdccamt() Group by the OehdCcAmt column
 * @method     ChildSalesOrderQuery groupByOehdotaxsub() Group by the OehdOTaxSub column
 * @method     ChildSalesOrderQuery groupByOehdonontaxsub() Group by the OehdONonTaxSub column
 * @method     ChildSalesOrderQuery groupByOehdotaxtot() Group by the OehdOTaxTot column
 * @method     ChildSalesOrderQuery groupByOehdoordrtot() Group by the OehdOOrdrTot column
 * @method     ChildSalesOrderQuery groupByOehdpickprintdate() Group by the OehdPickPrintDate column
 * @method     ChildSalesOrderQuery groupByOehdpickprinttime() Group by the OehdPickPrintTime column
 * @method     ChildSalesOrderQuery groupByOehdcont() Group by the OehdCont column
 * @method     ChildSalesOrderQuery groupByOehdcontteleintl() Group by the OehdContTeleIntl column
 * @method     ChildSalesOrderQuery groupByOehdconttelenbr() Group by the OehdContTeleNbr column
 * @method     ChildSalesOrderQuery groupByOehdcontteleext() Group by the OehdContTeleExt column
 * @method     ChildSalesOrderQuery groupByOehdcontfaxintl() Group by the OehdContFaxIntl column
 * @method     ChildSalesOrderQuery groupByOehdcontfaxnbr() Group by the OehdContFaxNbr column
 * @method     ChildSalesOrderQuery groupByOehdshipacct() Group by the OehdShipAcct column
 * @method     ChildSalesOrderQuery groupByOehdchgdue() Group by the OehdChgDue column
 * @method     ChildSalesOrderQuery groupByOehdaddlpricdisc() Group by the OehdAddlPricDisc column
 * @method     ChildSalesOrderQuery groupByOehdallship() Group by the OehdAllShip column
 * @method     ChildSalesOrderQuery groupByOehdqtyorderamt() Group by the OehdQtyOrderAmt column
 * @method     ChildSalesOrderQuery groupByOehdcreditapplied() Group by the OehdCreditApplied column
 * @method     ChildSalesOrderQuery groupByOehdinvcprintdate() Group by the OehdInvcPrintDate column
 * @method     ChildSalesOrderQuery groupByOehdinvcprinttime() Group by the OehdInvcPrintTime column
 * @method     ChildSalesOrderQuery groupByOehddiscfrt() Group by the OehdDiscFrt column
 * @method     ChildSalesOrderQuery groupByOehdorideshipcomp() Group by the OehdOrideShipComp column
 * @method     ChildSalesOrderQuery groupByOehdcontemail() Group by the OehdContEmail column
 * @method     ChildSalesOrderQuery groupByOehdmanualfrt() Group by the OehdManualFrt column
 * @method     ChildSalesOrderQuery groupByOehdinternalfrt() Group by the OehdInternalFrt column
 * @method     ChildSalesOrderQuery groupByOehdfrtcost() Group by the OehdFrtCost column
 * @method     ChildSalesOrderQuery groupByOehdroute() Group by the OehdRoute column
 * @method     ChildSalesOrderQuery groupByOehdrouteseq() Group by the OehdRouteSeq column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxcode1() Group by the OehdFrtTaxCode1 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxamt1() Group by the OehdFrtTaxAmt1 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxcode2() Group by the OehdFrtTaxCode2 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxamt2() Group by the OehdFrtTaxAmt2 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxcode3() Group by the OehdFrtTaxCode3 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxamt3() Group by the OehdFrtTaxAmt3 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxcode4() Group by the OehdFrtTaxCode4 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxamt4() Group by the OehdFrtTaxAmt4 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxcode5() Group by the OehdFrtTaxCode5 column
 * @method     ChildSalesOrderQuery groupByOehdfrttaxamt5() Group by the OehdFrtTaxAmt5 column
 * @method     ChildSalesOrderQuery groupByOehdedi855sent() Group by the OehdEdi855Sent column
 * @method     ChildSalesOrderQuery groupByOehdfrt3rdparty() Group by the OehdFrt3rdParty column
 * @method     ChildSalesOrderQuery groupByOehdfob() Group by the OehdFob column
 * @method     ChildSalesOrderQuery groupByOehdconfirmimagyn() Group by the OehdConfirmImagYn column
 * @method     ChildSalesOrderQuery groupByOehdindustconform() Group by the OehdIndustConform column
 * @method     ChildSalesOrderQuery groupByOehdcstkconsign() Group by the OehdCstkConsign column
 * @method     ChildSalesOrderQuery groupByOehdlmdelaycapsent() Group by the OehdLmDelayCapSent column
 * @method     ChildSalesOrderQuery groupByOehdmfgid() Group by the OehdMfgId column
 * @method     ChildSalesOrderQuery groupByOehdstoreid() Group by the OehdStoreId column
 * @method     ChildSalesOrderQuery groupByOehdpickqueue() Group by the OehdPickQueue column
 * @method     ChildSalesOrderQuery groupByOehdarrvdate() Group by the OehdArrvDate column
 * @method     ChildSalesOrderQuery groupByOehdsurchgstat() Group by the OehdSurchgStat column
 * @method     ChildSalesOrderQuery groupByOehdfrtgrup() Group by the OehdFrtGrup column
 * @method     ChildSalesOrderQuery groupByOehdcommoride() Group by the OehdCommOride column
 * @method     ChildSalesOrderQuery groupByOehdchrgsplt() Group by the OehdChrgSplt column
 * @method     ChildSalesOrderQuery groupByOehdacccaprv() Group by the OehdAcCcAprv column
 * @method     ChildSalesOrderQuery groupByOehdorigordrnbr() Group by the OehdOrigOrdrNbr column
 * @method     ChildSalesOrderQuery groupByOehdpostdate() Group by the OehdPostDate column
 * @method     ChildSalesOrderQuery groupByOehddiscdate1() Group by the OehdDiscDate1 column
 * @method     ChildSalesOrderQuery groupByOehddiscpct1() Group by the OehdDiscPct1 column
 * @method     ChildSalesOrderQuery groupByOehdduedate1() Group by the OehdDueDate1 column
 * @method     ChildSalesOrderQuery groupByOehddueamt1() Group by the OehdDueAmt1 column
 * @method     ChildSalesOrderQuery groupByOehdduepct1() Group by the OehdDuePct1 column
 * @method     ChildSalesOrderQuery groupByOehddiscdate2() Group by the OehdDiscDate2 column
 * @method     ChildSalesOrderQuery groupByOehddiscpct2() Group by the OehdDiscPct2 column
 * @method     ChildSalesOrderQuery groupByOehdduedate2() Group by the OehdDueDate2 column
 * @method     ChildSalesOrderQuery groupByOehddueamt2() Group by the OehdDueAmt2 column
 * @method     ChildSalesOrderQuery groupByOehdduepct2() Group by the OehdDuePct2 column
 * @method     ChildSalesOrderQuery groupByOehddiscdate3() Group by the OehdDiscDate3 column
 * @method     ChildSalesOrderQuery groupByOehddiscpct3() Group by the OehdDiscPct3 column
 * @method     ChildSalesOrderQuery groupByOehdduedate3() Group by the OehdDueDate3 column
 * @method     ChildSalesOrderQuery groupByOehddueamt3() Group by the OehdDueAmt3 column
 * @method     ChildSalesOrderQuery groupByOehdduepct3() Group by the OehdDuePct3 column
 * @method     ChildSalesOrderQuery groupByOehddiscdate4() Group by the OehdDiscDate4 column
 * @method     ChildSalesOrderQuery groupByOehddiscpct4() Group by the OehdDiscPct4 column
 * @method     ChildSalesOrderQuery groupByOehdduedate4() Group by the OehdDueDate4 column
 * @method     ChildSalesOrderQuery groupByOehddueamt4() Group by the OehdDueAmt4 column
 * @method     ChildSalesOrderQuery groupByOehdduepct4() Group by the OehdDuePct4 column
 * @method     ChildSalesOrderQuery groupByOehddiscdate5() Group by the OehdDiscDate5 column
 * @method     ChildSalesOrderQuery groupByOehddiscpct5() Group by the OehdDiscPct5 column
 * @method     ChildSalesOrderQuery groupByOehdduedate5() Group by the OehdDueDate5 column
 * @method     ChildSalesOrderQuery groupByOehddueamt5() Group by the OehdDueAmt5 column
 * @method     ChildSalesOrderQuery groupByOehdduepct5() Group by the OehdDuePct5 column
 * @method     ChildSalesOrderQuery groupByOehddiscdate6() Group by the OehdDiscDate6 column
 * @method     ChildSalesOrderQuery groupByOehddiscpct6() Group by the OehdDiscPct6 column
 * @method     ChildSalesOrderQuery groupByOehdduedate6() Group by the OehdDueDate6 column
 * @method     ChildSalesOrderQuery groupByOehddueamt6() Group by the OehdDueAmt6 column
 * @method     ChildSalesOrderQuery groupByOehdduepct6() Group by the OehdDuePct6 column
 * @method     ChildSalesOrderQuery groupByOehdrefnbr() Group by the OehdRefNbr column
 * @method     ChildSalesOrderQuery groupByOehdacprognbr() Group by the OehdAcProgNbr column
 * @method     ChildSalesOrderQuery groupByOehdacprogexpdate() Group by the OehdAcProgExpDate column
 * @method     ChildSalesOrderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesOrderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildSalesOrderQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildSalesOrderQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildSalesOrderQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildSalesOrderQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildSalesOrderQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildSalesOrderQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildSalesOrderQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildSalesOrderQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildSalesOrderQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildSalesOrderQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildSalesOrderQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildSalesOrderQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildSalesOrderQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildSalesOrderQuery leftJoinSalesOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderQuery rightJoinSalesOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderQuery innerJoinSalesOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderDetail relation
 *
 * @method     ChildSalesOrderQuery joinWithSalesOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSalesOrderQuery leftJoinWithSalesOrderDetail() Adds a LEFT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderQuery rightJoinWithSalesOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderQuery innerJoinWithSalesOrderDetail() Adds a INNER JOIN clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSalesOrderQuery leftJoinSalesOrderShipment($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderShipment relation
 * @method     ChildSalesOrderQuery rightJoinSalesOrderShipment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderShipment relation
 * @method     ChildSalesOrderQuery innerJoinSalesOrderShipment($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderShipment relation
 *
 * @method     ChildSalesOrderQuery joinWithSalesOrderShipment($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderShipment relation
 *
 * @method     ChildSalesOrderQuery leftJoinWithSalesOrderShipment() Adds a LEFT JOIN clause and with to the query using the SalesOrderShipment relation
 * @method     ChildSalesOrderQuery rightJoinWithSalesOrderShipment() Adds a RIGHT JOIN clause and with to the query using the SalesOrderShipment relation
 * @method     ChildSalesOrderQuery innerJoinWithSalesOrderShipment() Adds a INNER JOIN clause and with to the query using the SalesOrderShipment relation
 *
 * @method     ChildSalesOrderQuery leftJoinSalesOrderLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderQuery rightJoinSalesOrderLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderQuery innerJoinSalesOrderLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderLotserial relation
 *
 * @method     ChildSalesOrderQuery joinWithSalesOrderLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderLotserial relation
 *
 * @method     ChildSalesOrderQuery leftJoinWithSalesOrderLotserial() Adds a LEFT JOIN clause and with to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderQuery rightJoinWithSalesOrderLotserial() Adds a RIGHT JOIN clause and with to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderQuery innerJoinWithSalesOrderLotserial() Adds a INNER JOIN clause and with to the query using the SalesOrderLotserial relation
 *
 * @method     ChildSalesOrderQuery leftJoinSoAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderQuery rightJoinSoAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderQuery innerJoinSoAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildSalesOrderQuery joinWithSoAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildSalesOrderQuery leftJoinWithSoAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderQuery rightJoinWithSoAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderQuery innerJoinWithSoAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\SalesOrderDetailQuery|\SalesOrderShipmentQuery|\SalesOrderLotserialQuery|\SoAllocatedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesOrder findOne(ConnectionInterface $con = null) Return the first ChildSalesOrder matching the query
 * @method     ChildSalesOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesOrder matching the query, or a new ChildSalesOrder object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrder findOneByOehdnbr(int $OehdNbr) Return the first ChildSalesOrder filtered by the OehdNbr column
 * @method     ChildSalesOrder findOneByOehdstat(string $OehdStat) Return the first ChildSalesOrder filtered by the OehdStat column
 * @method     ChildSalesOrder findOneByOehdhold(string $OehdHold) Return the first ChildSalesOrder filtered by the OehdHold column
 * @method     ChildSalesOrder findOneByArcucustid(string $ArcuCustId) Return the first ChildSalesOrder filtered by the ArcuCustId column
 * @method     ChildSalesOrder findOneByArstshipid(string $ArstShipId) Return the first ChildSalesOrder filtered by the ArstShipId column
 * @method     ChildSalesOrder findOneByOehdstname(string $OehdStName) Return the first ChildSalesOrder filtered by the OehdStName column
 * @method     ChildSalesOrder findOneByOehdstlastname(string $OehdStLastName) Return the first ChildSalesOrder filtered by the OehdStLastName column
 * @method     ChildSalesOrder findOneByOehdstfirstname(string $OehdStFirstName) Return the first ChildSalesOrder filtered by the OehdStFirstName column
 * @method     ChildSalesOrder findOneByOehdstadr1(string $OehdStAdr1) Return the first ChildSalesOrder filtered by the OehdStAdr1 column
 * @method     ChildSalesOrder findOneByOehdstadr2(string $OehdStAdr2) Return the first ChildSalesOrder filtered by the OehdStAdr2 column
 * @method     ChildSalesOrder findOneByOehdstadr3(string $OehdStAdr3) Return the first ChildSalesOrder filtered by the OehdStAdr3 column
 * @method     ChildSalesOrder findOneByOehdstctry(string $OehdStCtry) Return the first ChildSalesOrder filtered by the OehdStCtry column
 * @method     ChildSalesOrder findOneByOehdstcity(string $OehdStCity) Return the first ChildSalesOrder filtered by the OehdStCity column
 * @method     ChildSalesOrder findOneByOehdststat(string $OehdStStat) Return the first ChildSalesOrder filtered by the OehdStStat column
 * @method     ChildSalesOrder findOneByOehdstzipcode(string $OehdStZipCode) Return the first ChildSalesOrder filtered by the OehdStZipCode column
 * @method     ChildSalesOrder findOneByOehdcustpo(string $OehdCustPo) Return the first ChildSalesOrder filtered by the OehdCustPo column
 * @method     ChildSalesOrder findOneByOehdordrdate(string $OehdOrdrDate) Return the first ChildSalesOrder filtered by the OehdOrdrDate column
 * @method     ChildSalesOrder findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSalesOrder filtered by the ArtmTermCd column
 * @method     ChildSalesOrder findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSalesOrder filtered by the ArtbShipVia column
 * @method     ChildSalesOrder findOneByArininvnbr(string $ArinInvNbr) Return the first ChildSalesOrder filtered by the ArinInvNbr column
 * @method     ChildSalesOrder findOneByOehdinvdate(string $OehdInvDate) Return the first ChildSalesOrder filtered by the OehdInvDate column
 * @method     ChildSalesOrder findOneByOehdglpd(int $OehdGLPd) Return the first ChildSalesOrder filtered by the OehdGLPd column
 * @method     ChildSalesOrder findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesOrder filtered by the ArspSalePer1 column
 * @method     ChildSalesOrder findOneByOehdsp1pct(string $OehdSp1Pct) Return the first ChildSalesOrder filtered by the OehdSp1Pct column
 * @method     ChildSalesOrder findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSalesOrder filtered by the ArspSalePer2 column
 * @method     ChildSalesOrder findOneByOehdsp2pct(string $OehdSp2Pct) Return the first ChildSalesOrder filtered by the OehdSp2Pct column
 * @method     ChildSalesOrder findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSalesOrder filtered by the ArspSalePer3 column
 * @method     ChildSalesOrder findOneByOehdsp3pct(string $OehdSp3Pct) Return the first ChildSalesOrder filtered by the OehdSp3Pct column
 * @method     ChildSalesOrder findOneByOehdcntrnbr(int $OehdCntrNbr) Return the first ChildSalesOrder filtered by the OehdCntrNbr column
 * @method     ChildSalesOrder findOneByOehdwibatch(int $OehdWiBatch) Return the first ChildSalesOrder filtered by the OehdWiBatch column
 * @method     ChildSalesOrder findOneByOehddroprelhold(string $OehdDropRelHold) Return the first ChildSalesOrder filtered by the OehdDropRelHold column
 * @method     ChildSalesOrder findOneByOehdtaxsub(string $OehdTaxSub) Return the first ChildSalesOrder filtered by the OehdTaxSub column
 * @method     ChildSalesOrder findOneByOehdnontaxsub(string $OehdNonTaxSub) Return the first ChildSalesOrder filtered by the OehdNonTaxSub column
 * @method     ChildSalesOrder findOneByOehdtaxtot(string $OehdTaxTot) Return the first ChildSalesOrder filtered by the OehdTaxTot column
 * @method     ChildSalesOrder findOneByOehdfrttot(string $OehdFrtTot) Return the first ChildSalesOrder filtered by the OehdFrtTot column
 * @method     ChildSalesOrder findOneByOehdmisctot(string $OehdMiscTot) Return the first ChildSalesOrder filtered by the OehdMiscTot column
 * @method     ChildSalesOrder findOneByOehdordrtot(string $OehdOrdrTot) Return the first ChildSalesOrder filtered by the OehdOrdrTot column
 * @method     ChildSalesOrder findOneByOehdcosttot(string $OehdCostTot) Return the first ChildSalesOrder filtered by the OehdCostTot column
 * @method     ChildSalesOrder findOneByOehdspcommlock(string $OehdSpCommLock) Return the first ChildSalesOrder filtered by the OehdSpCommLock column
 * @method     ChildSalesOrder findOneByOehdtakendate(string $OehdTakenDate) Return the first ChildSalesOrder filtered by the OehdTakenDate column
 * @method     ChildSalesOrder findOneByOehdtakentime(string $OehdTakenTime) Return the first ChildSalesOrder filtered by the OehdTakenTime column
 * @method     ChildSalesOrder findOneByOehdpickdate(string $OehdPickDate) Return the first ChildSalesOrder filtered by the OehdPickDate column
 * @method     ChildSalesOrder findOneByOehdpicktime(string $OehdPickTime) Return the first ChildSalesOrder filtered by the OehdPickTime column
 * @method     ChildSalesOrder findOneByOehdpackdate(string $OehdPackDate) Return the first ChildSalesOrder filtered by the OehdPackDate column
 * @method     ChildSalesOrder findOneByOehdpacktime(string $OehdPackTime) Return the first ChildSalesOrder filtered by the OehdPackTime column
 * @method     ChildSalesOrder findOneByOehdverifydate(string $OehdVerifyDate) Return the first ChildSalesOrder filtered by the OehdVerifyDate column
 * @method     ChildSalesOrder findOneByOehdverifytime(string $OehdVerifyTime) Return the first ChildSalesOrder filtered by the OehdVerifyTime column
 * @method     ChildSalesOrder findOneByOehdcreditmemo(string $OehdCreditMemo) Return the first ChildSalesOrder filtered by the OehdCreditMemo column
 * @method     ChildSalesOrder findOneByOehdbookedyn(string $OehdBookedYn) Return the first ChildSalesOrder filtered by the OehdBookedYn column
 * @method     ChildSalesOrder findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSalesOrder filtered by the IntbWhseOrig column
 * @method     ChildSalesOrder findOneByOehdbtstat(string $OehdBtStat) Return the first ChildSalesOrder filtered by the OehdBtStat column
 * @method     ChildSalesOrder findOneByOehdshipcomp(string $OehdShipComp) Return the first ChildSalesOrder filtered by the OehdShipComp column
 * @method     ChildSalesOrder findOneByOehdcwoflag(string $OehdCwoFlag) Return the first ChildSalesOrder filtered by the OehdCwoFlag column
 * @method     ChildSalesOrder findOneByOehddivision(string $OehdDivision) Return the first ChildSalesOrder filtered by the OehdDivision column
 * @method     ChildSalesOrder findOneByOehdtakencode(string $OehdTakenCode) Return the first ChildSalesOrder filtered by the OehdTakenCode column
 * @method     ChildSalesOrder findOneByOehdpickcode(string $OehdPickCode) Return the first ChildSalesOrder filtered by the OehdPickCode column
 * @method     ChildSalesOrder findOneByOehdpackcode(string $OehdPackCode) Return the first ChildSalesOrder filtered by the OehdPackCode column
 * @method     ChildSalesOrder findOneByOehdverifycode(string $OehdVerifyCode) Return the first ChildSalesOrder filtered by the OehdVerifyCode column
 * @method     ChildSalesOrder findOneByOehdtotdisc(string $OehdTotDisc) Return the first ChildSalesOrder filtered by the OehdTotDisc column
 * @method     ChildSalesOrder findOneByOehdedirefnbrqual(string $OehdEdiRefNbrQual) Return the first ChildSalesOrder filtered by the OehdEdiRefNbrQual column
 * @method     ChildSalesOrder findOneByOehdusercode1(string $OehdUserCode1) Return the first ChildSalesOrder filtered by the OehdUserCode1 column
 * @method     ChildSalesOrder findOneByOehdusercode2(string $OehdUserCode2) Return the first ChildSalesOrder filtered by the OehdUserCode2 column
 * @method     ChildSalesOrder findOneByOehdusercode3(string $OehdUserCode3) Return the first ChildSalesOrder filtered by the OehdUserCode3 column
 * @method     ChildSalesOrder findOneByOehdusercode4(string $OehdUserCode4) Return the first ChildSalesOrder filtered by the OehdUserCode4 column
 * @method     ChildSalesOrder findOneByOehdexchctry(string $OehdExchCtry) Return the first ChildSalesOrder filtered by the OehdExchCtry column
 * @method     ChildSalesOrder findOneByOehdexchrate(string $OehdExchRate) Return the first ChildSalesOrder filtered by the OehdExchRate column
 * @method     ChildSalesOrder findOneByOehdwghttot(string $OehdWghtTot) Return the first ChildSalesOrder filtered by the OehdWghtTot column
 * @method     ChildSalesOrder findOneByOehdwghtoride(string $OehdWghtOride) Return the first ChildSalesOrder filtered by the OehdWghtOride column
 * @method     ChildSalesOrder findOneByOehdccinfo(string $OehdCcInfo) Return the first ChildSalesOrder filtered by the OehdCcInfo column
 * @method     ChildSalesOrder findOneByOehdboxcount(int $OehdBoxCount) Return the first ChildSalesOrder filtered by the OehdBoxCount column
 * @method     ChildSalesOrder findOneByOehdrqstdate(string $OehdRqstDate) Return the first ChildSalesOrder filtered by the OehdRqstDate column
 * @method     ChildSalesOrder findOneByOehdcancdate(string $OehdCancDate) Return the first ChildSalesOrder filtered by the OehdCancDate column
 * @method     ChildSalesOrder findOneByOehdcrntuser(string $OehdCrntUser) Return the first ChildSalesOrder filtered by the OehdCrntUser column
 * @method     ChildSalesOrder findOneByOehdreleasenbr(string $OehdReleaseNbr) Return the first ChildSalesOrder filtered by the OehdReleaseNbr column
 * @method     ChildSalesOrder findOneByIntbwhse(string $IntbWhse) Return the first ChildSalesOrder filtered by the IntbWhse column
 * @method     ChildSalesOrder findOneByOehdbordbuilddate(string $OehdBordBuildDate) Return the first ChildSalesOrder filtered by the OehdBordBuildDate column
 * @method     ChildSalesOrder findOneByOehddeptcode(string $OehdDeptCode) Return the first ChildSalesOrder filtered by the OehdDeptCode column
 * @method     ChildSalesOrder findOneByOehdfrtinentered(string $OehdFrtInEntered) Return the first ChildSalesOrder filtered by the OehdFrtInEntered column
 * @method     ChildSalesOrder findOneByOehddropshipentered(string $OehdDropShipEntered) Return the first ChildSalesOrder filtered by the OehdDropShipEntered column
 * @method     ChildSalesOrder findOneByOehderflag(string $OehdErFlag) Return the first ChildSalesOrder filtered by the OehdErFlag column
 * @method     ChildSalesOrder findOneByOehdfrtin(string $OehdFrtIn) Return the first ChildSalesOrder filtered by the OehdFrtIn column
 * @method     ChildSalesOrder findOneByOehddropship(string $OehdDropShip) Return the first ChildSalesOrder filtered by the OehdDropShip column
 * @method     ChildSalesOrder findOneByOehdminorder(string $OehdMinOrder) Return the first ChildSalesOrder filtered by the OehdMinOrder column
 * @method     ChildSalesOrder findOneByOehdcontractterms(string $OehdContractTerms) Return the first ChildSalesOrder filtered by the OehdContractTerms column
 * @method     ChildSalesOrder findOneByOehddropshipbilled(string $OehdDropShipBilled) Return the first ChildSalesOrder filtered by the OehdDropShipBilled column
 * @method     ChildSalesOrder findOneByOehdordtyp(string $OehdOrdTyp) Return the first ChildSalesOrder filtered by the OehdOrdTyp column
 * @method     ChildSalesOrder findOneByOehdtracknbr(string $OehdTrackNbr) Return the first ChildSalesOrder filtered by the OehdTrackNbr column
 * @method     ChildSalesOrder findOneByOehdsource(string $OehdSource) Return the first ChildSalesOrder filtered by the OehdSource column
 * @method     ChildSalesOrder findOneByOehdccaprv(string $OehdCcAprv) Return the first ChildSalesOrder filtered by the OehdCcAprv column
 * @method     ChildSalesOrder findOneByOehdpickfmattype(string $OehdPickFmatType) Return the first ChildSalesOrder filtered by the OehdPickFmatType column
 * @method     ChildSalesOrder findOneByOehdinvcfmattype(string $OehdInvcFmatType) Return the first ChildSalesOrder filtered by the OehdInvcFmatType column
 * @method     ChildSalesOrder findOneByOehdcashamt(string $OehdCashAmt) Return the first ChildSalesOrder filtered by the OehdCashAmt column
 * @method     ChildSalesOrder findOneByOehdcheckamt(string $OehdCheckAmt) Return the first ChildSalesOrder filtered by the OehdCheckAmt column
 * @method     ChildSalesOrder findOneByOehdchecknbr(string $OehdCheckNbr) Return the first ChildSalesOrder filtered by the OehdCheckNbr column
 * @method     ChildSalesOrder findOneByOehddepositamt(string $OehdDepositAmt) Return the first ChildSalesOrder filtered by the OehdDepositAmt column
 * @method     ChildSalesOrder findOneByOehddepositnbr(string $OehdDepositNbr) Return the first ChildSalesOrder filtered by the OehdDepositNbr column
 * @method     ChildSalesOrder findOneByOehdccamt(string $OehdCcAmt) Return the first ChildSalesOrder filtered by the OehdCcAmt column
 * @method     ChildSalesOrder findOneByOehdotaxsub(string $OehdOTaxSub) Return the first ChildSalesOrder filtered by the OehdOTaxSub column
 * @method     ChildSalesOrder findOneByOehdonontaxsub(string $OehdONonTaxSub) Return the first ChildSalesOrder filtered by the OehdONonTaxSub column
 * @method     ChildSalesOrder findOneByOehdotaxtot(string $OehdOTaxTot) Return the first ChildSalesOrder filtered by the OehdOTaxTot column
 * @method     ChildSalesOrder findOneByOehdoordrtot(string $OehdOOrdrTot) Return the first ChildSalesOrder filtered by the OehdOOrdrTot column
 * @method     ChildSalesOrder findOneByOehdpickprintdate(string $OehdPickPrintDate) Return the first ChildSalesOrder filtered by the OehdPickPrintDate column
 * @method     ChildSalesOrder findOneByOehdpickprinttime(string $OehdPickPrintTime) Return the first ChildSalesOrder filtered by the OehdPickPrintTime column
 * @method     ChildSalesOrder findOneByOehdcont(string $OehdCont) Return the first ChildSalesOrder filtered by the OehdCont column
 * @method     ChildSalesOrder findOneByOehdcontteleintl(string $OehdContTeleIntl) Return the first ChildSalesOrder filtered by the OehdContTeleIntl column
 * @method     ChildSalesOrder findOneByOehdconttelenbr(string $OehdContTeleNbr) Return the first ChildSalesOrder filtered by the OehdContTeleNbr column
 * @method     ChildSalesOrder findOneByOehdcontteleext(string $OehdContTeleExt) Return the first ChildSalesOrder filtered by the OehdContTeleExt column
 * @method     ChildSalesOrder findOneByOehdcontfaxintl(string $OehdContFaxIntl) Return the first ChildSalesOrder filtered by the OehdContFaxIntl column
 * @method     ChildSalesOrder findOneByOehdcontfaxnbr(string $OehdContFaxNbr) Return the first ChildSalesOrder filtered by the OehdContFaxNbr column
 * @method     ChildSalesOrder findOneByOehdshipacct(string $OehdShipAcct) Return the first ChildSalesOrder filtered by the OehdShipAcct column
 * @method     ChildSalesOrder findOneByOehdchgdue(string $OehdChgDue) Return the first ChildSalesOrder filtered by the OehdChgDue column
 * @method     ChildSalesOrder findOneByOehdaddlpricdisc(string $OehdAddlPricDisc) Return the first ChildSalesOrder filtered by the OehdAddlPricDisc column
 * @method     ChildSalesOrder findOneByOehdallship(string $OehdAllShip) Return the first ChildSalesOrder filtered by the OehdAllShip column
 * @method     ChildSalesOrder findOneByOehdqtyorderamt(string $OehdQtyOrderAmt) Return the first ChildSalesOrder filtered by the OehdQtyOrderAmt column
 * @method     ChildSalesOrder findOneByOehdcreditapplied(string $OehdCreditApplied) Return the first ChildSalesOrder filtered by the OehdCreditApplied column
 * @method     ChildSalesOrder findOneByOehdinvcprintdate(string $OehdInvcPrintDate) Return the first ChildSalesOrder filtered by the OehdInvcPrintDate column
 * @method     ChildSalesOrder findOneByOehdinvcprinttime(string $OehdInvcPrintTime) Return the first ChildSalesOrder filtered by the OehdInvcPrintTime column
 * @method     ChildSalesOrder findOneByOehddiscfrt(string $OehdDiscFrt) Return the first ChildSalesOrder filtered by the OehdDiscFrt column
 * @method     ChildSalesOrder findOneByOehdorideshipcomp(string $OehdOrideShipComp) Return the first ChildSalesOrder filtered by the OehdOrideShipComp column
 * @method     ChildSalesOrder findOneByOehdcontemail(string $OehdContEmail) Return the first ChildSalesOrder filtered by the OehdContEmail column
 * @method     ChildSalesOrder findOneByOehdmanualfrt(string $OehdManualFrt) Return the first ChildSalesOrder filtered by the OehdManualFrt column
 * @method     ChildSalesOrder findOneByOehdinternalfrt(string $OehdInternalFrt) Return the first ChildSalesOrder filtered by the OehdInternalFrt column
 * @method     ChildSalesOrder findOneByOehdfrtcost(string $OehdFrtCost) Return the first ChildSalesOrder filtered by the OehdFrtCost column
 * @method     ChildSalesOrder findOneByOehdroute(string $OehdRoute) Return the first ChildSalesOrder filtered by the OehdRoute column
 * @method     ChildSalesOrder findOneByOehdrouteseq(int $OehdRouteSeq) Return the first ChildSalesOrder filtered by the OehdRouteSeq column
 * @method     ChildSalesOrder findOneByOehdfrttaxcode1(string $OehdFrtTaxCode1) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode1 column
 * @method     ChildSalesOrder findOneByOehdfrttaxamt1(string $OehdFrtTaxAmt1) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt1 column
 * @method     ChildSalesOrder findOneByOehdfrttaxcode2(string $OehdFrtTaxCode2) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode2 column
 * @method     ChildSalesOrder findOneByOehdfrttaxamt2(string $OehdFrtTaxAmt2) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt2 column
 * @method     ChildSalesOrder findOneByOehdfrttaxcode3(string $OehdFrtTaxCode3) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode3 column
 * @method     ChildSalesOrder findOneByOehdfrttaxamt3(string $OehdFrtTaxAmt3) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt3 column
 * @method     ChildSalesOrder findOneByOehdfrttaxcode4(string $OehdFrtTaxCode4) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode4 column
 * @method     ChildSalesOrder findOneByOehdfrttaxamt4(string $OehdFrtTaxAmt4) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt4 column
 * @method     ChildSalesOrder findOneByOehdfrttaxcode5(string $OehdFrtTaxCode5) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode5 column
 * @method     ChildSalesOrder findOneByOehdfrttaxamt5(string $OehdFrtTaxAmt5) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt5 column
 * @method     ChildSalesOrder findOneByOehdedi855sent(string $OehdEdi855Sent) Return the first ChildSalesOrder filtered by the OehdEdi855Sent column
 * @method     ChildSalesOrder findOneByOehdfrt3rdparty(string $OehdFrt3rdParty) Return the first ChildSalesOrder filtered by the OehdFrt3rdParty column
 * @method     ChildSalesOrder findOneByOehdfob(string $OehdFob) Return the first ChildSalesOrder filtered by the OehdFob column
 * @method     ChildSalesOrder findOneByOehdconfirmimagyn(string $OehdConfirmImagYn) Return the first ChildSalesOrder filtered by the OehdConfirmImagYn column
 * @method     ChildSalesOrder findOneByOehdindustconform(string $OehdIndustConform) Return the first ChildSalesOrder filtered by the OehdIndustConform column
 * @method     ChildSalesOrder findOneByOehdcstkconsign(string $OehdCstkConsign) Return the first ChildSalesOrder filtered by the OehdCstkConsign column
 * @method     ChildSalesOrder findOneByOehdlmdelaycapsent(string $OehdLmDelayCapSent) Return the first ChildSalesOrder filtered by the OehdLmDelayCapSent column
 * @method     ChildSalesOrder findOneByOehdmfgid(string $OehdMfgId) Return the first ChildSalesOrder filtered by the OehdMfgId column
 * @method     ChildSalesOrder findOneByOehdstoreid(string $OehdStoreId) Return the first ChildSalesOrder filtered by the OehdStoreId column
 * @method     ChildSalesOrder findOneByOehdpickqueue(string $OehdPickQueue) Return the first ChildSalesOrder filtered by the OehdPickQueue column
 * @method     ChildSalesOrder findOneByOehdarrvdate(string $OehdArrvDate) Return the first ChildSalesOrder filtered by the OehdArrvDate column
 * @method     ChildSalesOrder findOneByOehdsurchgstat(string $OehdSurchgStat) Return the first ChildSalesOrder filtered by the OehdSurchgStat column
 * @method     ChildSalesOrder findOneByOehdfrtgrup(string $OehdFrtGrup) Return the first ChildSalesOrder filtered by the OehdFrtGrup column
 * @method     ChildSalesOrder findOneByOehdcommoride(string $OehdCommOride) Return the first ChildSalesOrder filtered by the OehdCommOride column
 * @method     ChildSalesOrder findOneByOehdchrgsplt(string $OehdChrgSplt) Return the first ChildSalesOrder filtered by the OehdChrgSplt column
 * @method     ChildSalesOrder findOneByOehdacccaprv(string $OehdAcCcAprv) Return the first ChildSalesOrder filtered by the OehdAcCcAprv column
 * @method     ChildSalesOrder findOneByOehdorigordrnbr(string $OehdOrigOrdrNbr) Return the first ChildSalesOrder filtered by the OehdOrigOrdrNbr column
 * @method     ChildSalesOrder findOneByOehdpostdate(string $OehdPostDate) Return the first ChildSalesOrder filtered by the OehdPostDate column
 * @method     ChildSalesOrder findOneByOehddiscdate1(string $OehdDiscDate1) Return the first ChildSalesOrder filtered by the OehdDiscDate1 column
 * @method     ChildSalesOrder findOneByOehddiscpct1(string $OehdDiscPct1) Return the first ChildSalesOrder filtered by the OehdDiscPct1 column
 * @method     ChildSalesOrder findOneByOehdduedate1(string $OehdDueDate1) Return the first ChildSalesOrder filtered by the OehdDueDate1 column
 * @method     ChildSalesOrder findOneByOehddueamt1(string $OehdDueAmt1) Return the first ChildSalesOrder filtered by the OehdDueAmt1 column
 * @method     ChildSalesOrder findOneByOehdduepct1(string $OehdDuePct1) Return the first ChildSalesOrder filtered by the OehdDuePct1 column
 * @method     ChildSalesOrder findOneByOehddiscdate2(string $OehdDiscDate2) Return the first ChildSalesOrder filtered by the OehdDiscDate2 column
 * @method     ChildSalesOrder findOneByOehddiscpct2(string $OehdDiscPct2) Return the first ChildSalesOrder filtered by the OehdDiscPct2 column
 * @method     ChildSalesOrder findOneByOehdduedate2(string $OehdDueDate2) Return the first ChildSalesOrder filtered by the OehdDueDate2 column
 * @method     ChildSalesOrder findOneByOehddueamt2(string $OehdDueAmt2) Return the first ChildSalesOrder filtered by the OehdDueAmt2 column
 * @method     ChildSalesOrder findOneByOehdduepct2(string $OehdDuePct2) Return the first ChildSalesOrder filtered by the OehdDuePct2 column
 * @method     ChildSalesOrder findOneByOehddiscdate3(string $OehdDiscDate3) Return the first ChildSalesOrder filtered by the OehdDiscDate3 column
 * @method     ChildSalesOrder findOneByOehddiscpct3(string $OehdDiscPct3) Return the first ChildSalesOrder filtered by the OehdDiscPct3 column
 * @method     ChildSalesOrder findOneByOehdduedate3(string $OehdDueDate3) Return the first ChildSalesOrder filtered by the OehdDueDate3 column
 * @method     ChildSalesOrder findOneByOehddueamt3(string $OehdDueAmt3) Return the first ChildSalesOrder filtered by the OehdDueAmt3 column
 * @method     ChildSalesOrder findOneByOehdduepct3(string $OehdDuePct3) Return the first ChildSalesOrder filtered by the OehdDuePct3 column
 * @method     ChildSalesOrder findOneByOehddiscdate4(string $OehdDiscDate4) Return the first ChildSalesOrder filtered by the OehdDiscDate4 column
 * @method     ChildSalesOrder findOneByOehddiscpct4(string $OehdDiscPct4) Return the first ChildSalesOrder filtered by the OehdDiscPct4 column
 * @method     ChildSalesOrder findOneByOehdduedate4(string $OehdDueDate4) Return the first ChildSalesOrder filtered by the OehdDueDate4 column
 * @method     ChildSalesOrder findOneByOehddueamt4(string $OehdDueAmt4) Return the first ChildSalesOrder filtered by the OehdDueAmt4 column
 * @method     ChildSalesOrder findOneByOehdduepct4(string $OehdDuePct4) Return the first ChildSalesOrder filtered by the OehdDuePct4 column
 * @method     ChildSalesOrder findOneByOehddiscdate5(string $OehdDiscDate5) Return the first ChildSalesOrder filtered by the OehdDiscDate5 column
 * @method     ChildSalesOrder findOneByOehddiscpct5(string $OehdDiscPct5) Return the first ChildSalesOrder filtered by the OehdDiscPct5 column
 * @method     ChildSalesOrder findOneByOehdduedate5(string $OehdDueDate5) Return the first ChildSalesOrder filtered by the OehdDueDate5 column
 * @method     ChildSalesOrder findOneByOehddueamt5(string $OehdDueAmt5) Return the first ChildSalesOrder filtered by the OehdDueAmt5 column
 * @method     ChildSalesOrder findOneByOehdduepct5(string $OehdDuePct5) Return the first ChildSalesOrder filtered by the OehdDuePct5 column
 * @method     ChildSalesOrder findOneByOehddiscdate6(string $OehdDiscDate6) Return the first ChildSalesOrder filtered by the OehdDiscDate6 column
 * @method     ChildSalesOrder findOneByOehddiscpct6(string $OehdDiscPct6) Return the first ChildSalesOrder filtered by the OehdDiscPct6 column
 * @method     ChildSalesOrder findOneByOehdduedate6(string $OehdDueDate6) Return the first ChildSalesOrder filtered by the OehdDueDate6 column
 * @method     ChildSalesOrder findOneByOehddueamt6(string $OehdDueAmt6) Return the first ChildSalesOrder filtered by the OehdDueAmt6 column
 * @method     ChildSalesOrder findOneByOehdduepct6(string $OehdDuePct6) Return the first ChildSalesOrder filtered by the OehdDuePct6 column
 * @method     ChildSalesOrder findOneByOehdrefnbr(string $OehdRefNbr) Return the first ChildSalesOrder filtered by the OehdRefNbr column
 * @method     ChildSalesOrder findOneByOehdacprognbr(string $OehdAcProgNbr) Return the first ChildSalesOrder filtered by the OehdAcProgNbr column
 * @method     ChildSalesOrder findOneByOehdacprogexpdate(string $OehdAcProgExpDate) Return the first ChildSalesOrder filtered by the OehdAcProgExpDate column
 * @method     ChildSalesOrder findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrder filtered by the DateUpdtd column
 * @method     ChildSalesOrder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrder filtered by the TimeUpdtd column
 * @method     ChildSalesOrder findOneByDummy(string $dummy) Return the first ChildSalesOrder filtered by the dummy column *

 * @method     ChildSalesOrder requirePk($key, ConnectionInterface $con = null) Return the ChildSalesOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOne(ConnectionInterface $con = null) Return the first ChildSalesOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrder requireOneByOehdnbr(int $OehdNbr) Return the first ChildSalesOrder filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstat(string $OehdStat) Return the first ChildSalesOrder filtered by the OehdStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdhold(string $OehdHold) Return the first ChildSalesOrder filtered by the OehdHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArcucustid(string $ArcuCustId) Return the first ChildSalesOrder filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArstshipid(string $ArstShipId) Return the first ChildSalesOrder filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstname(string $OehdStName) Return the first ChildSalesOrder filtered by the OehdStName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstlastname(string $OehdStLastName) Return the first ChildSalesOrder filtered by the OehdStLastName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstfirstname(string $OehdStFirstName) Return the first ChildSalesOrder filtered by the OehdStFirstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstadr1(string $OehdStAdr1) Return the first ChildSalesOrder filtered by the OehdStAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstadr2(string $OehdStAdr2) Return the first ChildSalesOrder filtered by the OehdStAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstadr3(string $OehdStAdr3) Return the first ChildSalesOrder filtered by the OehdStAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstctry(string $OehdStCtry) Return the first ChildSalesOrder filtered by the OehdStCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstcity(string $OehdStCity) Return the first ChildSalesOrder filtered by the OehdStCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdststat(string $OehdStStat) Return the first ChildSalesOrder filtered by the OehdStStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstzipcode(string $OehdStZipCode) Return the first ChildSalesOrder filtered by the OehdStZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcustpo(string $OehdCustPo) Return the first ChildSalesOrder filtered by the OehdCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdordrdate(string $OehdOrdrDate) Return the first ChildSalesOrder filtered by the OehdOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildSalesOrder filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildSalesOrder filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArininvnbr(string $ArinInvNbr) Return the first ChildSalesOrder filtered by the ArinInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdinvdate(string $OehdInvDate) Return the first ChildSalesOrder filtered by the OehdInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdglpd(int $OehdGLPd) Return the first ChildSalesOrder filtered by the OehdGLPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesOrder filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdsp1pct(string $OehdSp1Pct) Return the first ChildSalesOrder filtered by the OehdSp1Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildSalesOrder filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdsp2pct(string $OehdSp2Pct) Return the first ChildSalesOrder filtered by the OehdSp2Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildSalesOrder filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdsp3pct(string $OehdSp3Pct) Return the first ChildSalesOrder filtered by the OehdSp3Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcntrnbr(int $OehdCntrNbr) Return the first ChildSalesOrder filtered by the OehdCntrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdwibatch(int $OehdWiBatch) Return the first ChildSalesOrder filtered by the OehdWiBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddroprelhold(string $OehdDropRelHold) Return the first ChildSalesOrder filtered by the OehdDropRelHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtaxsub(string $OehdTaxSub) Return the first ChildSalesOrder filtered by the OehdTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdnontaxsub(string $OehdNonTaxSub) Return the first ChildSalesOrder filtered by the OehdNonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtaxtot(string $OehdTaxTot) Return the first ChildSalesOrder filtered by the OehdTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttot(string $OehdFrtTot) Return the first ChildSalesOrder filtered by the OehdFrtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdmisctot(string $OehdMiscTot) Return the first ChildSalesOrder filtered by the OehdMiscTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdordrtot(string $OehdOrdrTot) Return the first ChildSalesOrder filtered by the OehdOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcosttot(string $OehdCostTot) Return the first ChildSalesOrder filtered by the OehdCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdspcommlock(string $OehdSpCommLock) Return the first ChildSalesOrder filtered by the OehdSpCommLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtakendate(string $OehdTakenDate) Return the first ChildSalesOrder filtered by the OehdTakenDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtakentime(string $OehdTakenTime) Return the first ChildSalesOrder filtered by the OehdTakenTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpickdate(string $OehdPickDate) Return the first ChildSalesOrder filtered by the OehdPickDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpicktime(string $OehdPickTime) Return the first ChildSalesOrder filtered by the OehdPickTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpackdate(string $OehdPackDate) Return the first ChildSalesOrder filtered by the OehdPackDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpacktime(string $OehdPackTime) Return the first ChildSalesOrder filtered by the OehdPackTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdverifydate(string $OehdVerifyDate) Return the first ChildSalesOrder filtered by the OehdVerifyDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdverifytime(string $OehdVerifyTime) Return the first ChildSalesOrder filtered by the OehdVerifyTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcreditmemo(string $OehdCreditMemo) Return the first ChildSalesOrder filtered by the OehdCreditMemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdbookedyn(string $OehdBookedYn) Return the first ChildSalesOrder filtered by the OehdBookedYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildSalesOrder filtered by the IntbWhseOrig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdbtstat(string $OehdBtStat) Return the first ChildSalesOrder filtered by the OehdBtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdshipcomp(string $OehdShipComp) Return the first ChildSalesOrder filtered by the OehdShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcwoflag(string $OehdCwoFlag) Return the first ChildSalesOrder filtered by the OehdCwoFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddivision(string $OehdDivision) Return the first ChildSalesOrder filtered by the OehdDivision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtakencode(string $OehdTakenCode) Return the first ChildSalesOrder filtered by the OehdTakenCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpickcode(string $OehdPickCode) Return the first ChildSalesOrder filtered by the OehdPickCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpackcode(string $OehdPackCode) Return the first ChildSalesOrder filtered by the OehdPackCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdverifycode(string $OehdVerifyCode) Return the first ChildSalesOrder filtered by the OehdVerifyCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtotdisc(string $OehdTotDisc) Return the first ChildSalesOrder filtered by the OehdTotDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdedirefnbrqual(string $OehdEdiRefNbrQual) Return the first ChildSalesOrder filtered by the OehdEdiRefNbrQual column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdusercode1(string $OehdUserCode1) Return the first ChildSalesOrder filtered by the OehdUserCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdusercode2(string $OehdUserCode2) Return the first ChildSalesOrder filtered by the OehdUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdusercode3(string $OehdUserCode3) Return the first ChildSalesOrder filtered by the OehdUserCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdusercode4(string $OehdUserCode4) Return the first ChildSalesOrder filtered by the OehdUserCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdexchctry(string $OehdExchCtry) Return the first ChildSalesOrder filtered by the OehdExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdexchrate(string $OehdExchRate) Return the first ChildSalesOrder filtered by the OehdExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdwghttot(string $OehdWghtTot) Return the first ChildSalesOrder filtered by the OehdWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdwghtoride(string $OehdWghtOride) Return the first ChildSalesOrder filtered by the OehdWghtOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdccinfo(string $OehdCcInfo) Return the first ChildSalesOrder filtered by the OehdCcInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdboxcount(int $OehdBoxCount) Return the first ChildSalesOrder filtered by the OehdBoxCount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdrqstdate(string $OehdRqstDate) Return the first ChildSalesOrder filtered by the OehdRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcancdate(string $OehdCancDate) Return the first ChildSalesOrder filtered by the OehdCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcrntuser(string $OehdCrntUser) Return the first ChildSalesOrder filtered by the OehdCrntUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdreleasenbr(string $OehdReleaseNbr) Return the first ChildSalesOrder filtered by the OehdReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByIntbwhse(string $IntbWhse) Return the first ChildSalesOrder filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdbordbuilddate(string $OehdBordBuildDate) Return the first ChildSalesOrder filtered by the OehdBordBuildDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddeptcode(string $OehdDeptCode) Return the first ChildSalesOrder filtered by the OehdDeptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrtinentered(string $OehdFrtInEntered) Return the first ChildSalesOrder filtered by the OehdFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddropshipentered(string $OehdDropShipEntered) Return the first ChildSalesOrder filtered by the OehdDropShipEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehderflag(string $OehdErFlag) Return the first ChildSalesOrder filtered by the OehdErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrtin(string $OehdFrtIn) Return the first ChildSalesOrder filtered by the OehdFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddropship(string $OehdDropShip) Return the first ChildSalesOrder filtered by the OehdDropShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdminorder(string $OehdMinOrder) Return the first ChildSalesOrder filtered by the OehdMinOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcontractterms(string $OehdContractTerms) Return the first ChildSalesOrder filtered by the OehdContractTerms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddropshipbilled(string $OehdDropShipBilled) Return the first ChildSalesOrder filtered by the OehdDropShipBilled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdordtyp(string $OehdOrdTyp) Return the first ChildSalesOrder filtered by the OehdOrdTyp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdtracknbr(string $OehdTrackNbr) Return the first ChildSalesOrder filtered by the OehdTrackNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdsource(string $OehdSource) Return the first ChildSalesOrder filtered by the OehdSource column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdccaprv(string $OehdCcAprv) Return the first ChildSalesOrder filtered by the OehdCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpickfmattype(string $OehdPickFmatType) Return the first ChildSalesOrder filtered by the OehdPickFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdinvcfmattype(string $OehdInvcFmatType) Return the first ChildSalesOrder filtered by the OehdInvcFmatType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcashamt(string $OehdCashAmt) Return the first ChildSalesOrder filtered by the OehdCashAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcheckamt(string $OehdCheckAmt) Return the first ChildSalesOrder filtered by the OehdCheckAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdchecknbr(string $OehdCheckNbr) Return the first ChildSalesOrder filtered by the OehdCheckNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddepositamt(string $OehdDepositAmt) Return the first ChildSalesOrder filtered by the OehdDepositAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddepositnbr(string $OehdDepositNbr) Return the first ChildSalesOrder filtered by the OehdDepositNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdccamt(string $OehdCcAmt) Return the first ChildSalesOrder filtered by the OehdCcAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdotaxsub(string $OehdOTaxSub) Return the first ChildSalesOrder filtered by the OehdOTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdonontaxsub(string $OehdONonTaxSub) Return the first ChildSalesOrder filtered by the OehdONonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdotaxtot(string $OehdOTaxTot) Return the first ChildSalesOrder filtered by the OehdOTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdoordrtot(string $OehdOOrdrTot) Return the first ChildSalesOrder filtered by the OehdOOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpickprintdate(string $OehdPickPrintDate) Return the first ChildSalesOrder filtered by the OehdPickPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpickprinttime(string $OehdPickPrintTime) Return the first ChildSalesOrder filtered by the OehdPickPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcont(string $OehdCont) Return the first ChildSalesOrder filtered by the OehdCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcontteleintl(string $OehdContTeleIntl) Return the first ChildSalesOrder filtered by the OehdContTeleIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdconttelenbr(string $OehdContTeleNbr) Return the first ChildSalesOrder filtered by the OehdContTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcontteleext(string $OehdContTeleExt) Return the first ChildSalesOrder filtered by the OehdContTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcontfaxintl(string $OehdContFaxIntl) Return the first ChildSalesOrder filtered by the OehdContFaxIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcontfaxnbr(string $OehdContFaxNbr) Return the first ChildSalesOrder filtered by the OehdContFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdshipacct(string $OehdShipAcct) Return the first ChildSalesOrder filtered by the OehdShipAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdchgdue(string $OehdChgDue) Return the first ChildSalesOrder filtered by the OehdChgDue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdaddlpricdisc(string $OehdAddlPricDisc) Return the first ChildSalesOrder filtered by the OehdAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdallship(string $OehdAllShip) Return the first ChildSalesOrder filtered by the OehdAllShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdqtyorderamt(string $OehdQtyOrderAmt) Return the first ChildSalesOrder filtered by the OehdQtyOrderAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcreditapplied(string $OehdCreditApplied) Return the first ChildSalesOrder filtered by the OehdCreditApplied column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdinvcprintdate(string $OehdInvcPrintDate) Return the first ChildSalesOrder filtered by the OehdInvcPrintDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdinvcprinttime(string $OehdInvcPrintTime) Return the first ChildSalesOrder filtered by the OehdInvcPrintTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscfrt(string $OehdDiscFrt) Return the first ChildSalesOrder filtered by the OehdDiscFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdorideshipcomp(string $OehdOrideShipComp) Return the first ChildSalesOrder filtered by the OehdOrideShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcontemail(string $OehdContEmail) Return the first ChildSalesOrder filtered by the OehdContEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdmanualfrt(string $OehdManualFrt) Return the first ChildSalesOrder filtered by the OehdManualFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdinternalfrt(string $OehdInternalFrt) Return the first ChildSalesOrder filtered by the OehdInternalFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrtcost(string $OehdFrtCost) Return the first ChildSalesOrder filtered by the OehdFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdroute(string $OehdRoute) Return the first ChildSalesOrder filtered by the OehdRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdrouteseq(int $OehdRouteSeq) Return the first ChildSalesOrder filtered by the OehdRouteSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxcode1(string $OehdFrtTaxCode1) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxamt1(string $OehdFrtTaxAmt1) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxcode2(string $OehdFrtTaxCode2) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxamt2(string $OehdFrtTaxAmt2) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxcode3(string $OehdFrtTaxCode3) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxamt3(string $OehdFrtTaxAmt3) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxcode4(string $OehdFrtTaxCode4) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxamt4(string $OehdFrtTaxAmt4) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxcode5(string $OehdFrtTaxCode5) Return the first ChildSalesOrder filtered by the OehdFrtTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrttaxamt5(string $OehdFrtTaxAmt5) Return the first ChildSalesOrder filtered by the OehdFrtTaxAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdedi855sent(string $OehdEdi855Sent) Return the first ChildSalesOrder filtered by the OehdEdi855Sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrt3rdparty(string $OehdFrt3rdParty) Return the first ChildSalesOrder filtered by the OehdFrt3rdParty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfob(string $OehdFob) Return the first ChildSalesOrder filtered by the OehdFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdconfirmimagyn(string $OehdConfirmImagYn) Return the first ChildSalesOrder filtered by the OehdConfirmImagYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdindustconform(string $OehdIndustConform) Return the first ChildSalesOrder filtered by the OehdIndustConform column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcstkconsign(string $OehdCstkConsign) Return the first ChildSalesOrder filtered by the OehdCstkConsign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdlmdelaycapsent(string $OehdLmDelayCapSent) Return the first ChildSalesOrder filtered by the OehdLmDelayCapSent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdmfgid(string $OehdMfgId) Return the first ChildSalesOrder filtered by the OehdMfgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdstoreid(string $OehdStoreId) Return the first ChildSalesOrder filtered by the OehdStoreId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpickqueue(string $OehdPickQueue) Return the first ChildSalesOrder filtered by the OehdPickQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdarrvdate(string $OehdArrvDate) Return the first ChildSalesOrder filtered by the OehdArrvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdsurchgstat(string $OehdSurchgStat) Return the first ChildSalesOrder filtered by the OehdSurchgStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdfrtgrup(string $OehdFrtGrup) Return the first ChildSalesOrder filtered by the OehdFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdcommoride(string $OehdCommOride) Return the first ChildSalesOrder filtered by the OehdCommOride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdchrgsplt(string $OehdChrgSplt) Return the first ChildSalesOrder filtered by the OehdChrgSplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdacccaprv(string $OehdAcCcAprv) Return the first ChildSalesOrder filtered by the OehdAcCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdorigordrnbr(string $OehdOrigOrdrNbr) Return the first ChildSalesOrder filtered by the OehdOrigOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdpostdate(string $OehdPostDate) Return the first ChildSalesOrder filtered by the OehdPostDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscdate1(string $OehdDiscDate1) Return the first ChildSalesOrder filtered by the OehdDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscpct1(string $OehdDiscPct1) Return the first ChildSalesOrder filtered by the OehdDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduedate1(string $OehdDueDate1) Return the first ChildSalesOrder filtered by the OehdDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddueamt1(string $OehdDueAmt1) Return the first ChildSalesOrder filtered by the OehdDueAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduepct1(string $OehdDuePct1) Return the first ChildSalesOrder filtered by the OehdDuePct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscdate2(string $OehdDiscDate2) Return the first ChildSalesOrder filtered by the OehdDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscpct2(string $OehdDiscPct2) Return the first ChildSalesOrder filtered by the OehdDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduedate2(string $OehdDueDate2) Return the first ChildSalesOrder filtered by the OehdDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddueamt2(string $OehdDueAmt2) Return the first ChildSalesOrder filtered by the OehdDueAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduepct2(string $OehdDuePct2) Return the first ChildSalesOrder filtered by the OehdDuePct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscdate3(string $OehdDiscDate3) Return the first ChildSalesOrder filtered by the OehdDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscpct3(string $OehdDiscPct3) Return the first ChildSalesOrder filtered by the OehdDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduedate3(string $OehdDueDate3) Return the first ChildSalesOrder filtered by the OehdDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddueamt3(string $OehdDueAmt3) Return the first ChildSalesOrder filtered by the OehdDueAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduepct3(string $OehdDuePct3) Return the first ChildSalesOrder filtered by the OehdDuePct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscdate4(string $OehdDiscDate4) Return the first ChildSalesOrder filtered by the OehdDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscpct4(string $OehdDiscPct4) Return the first ChildSalesOrder filtered by the OehdDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduedate4(string $OehdDueDate4) Return the first ChildSalesOrder filtered by the OehdDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddueamt4(string $OehdDueAmt4) Return the first ChildSalesOrder filtered by the OehdDueAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduepct4(string $OehdDuePct4) Return the first ChildSalesOrder filtered by the OehdDuePct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscdate5(string $OehdDiscDate5) Return the first ChildSalesOrder filtered by the OehdDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscpct5(string $OehdDiscPct5) Return the first ChildSalesOrder filtered by the OehdDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduedate5(string $OehdDueDate5) Return the first ChildSalesOrder filtered by the OehdDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddueamt5(string $OehdDueAmt5) Return the first ChildSalesOrder filtered by the OehdDueAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduepct5(string $OehdDuePct5) Return the first ChildSalesOrder filtered by the OehdDuePct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscdate6(string $OehdDiscDate6) Return the first ChildSalesOrder filtered by the OehdDiscDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddiscpct6(string $OehdDiscPct6) Return the first ChildSalesOrder filtered by the OehdDiscPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduedate6(string $OehdDueDate6) Return the first ChildSalesOrder filtered by the OehdDueDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehddueamt6(string $OehdDueAmt6) Return the first ChildSalesOrder filtered by the OehdDueAmt6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdduepct6(string $OehdDuePct6) Return the first ChildSalesOrder filtered by the OehdDuePct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdrefnbr(string $OehdRefNbr) Return the first ChildSalesOrder filtered by the OehdRefNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdacprognbr(string $OehdAcProgNbr) Return the first ChildSalesOrder filtered by the OehdAcProgNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOehdacprogexpdate(string $OehdAcProgExpDate) Return the first ChildSalesOrder filtered by the OehdAcProgExpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDummy(string $dummy) Return the first ChildSalesOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesOrder objects based on current ModelCriteria
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdnbr(int $OehdNbr) Return ChildSalesOrder objects filtered by the OehdNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstat(string $OehdStat) Return ChildSalesOrder objects filtered by the OehdStat column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdhold(string $OehdHold) Return ChildSalesOrder objects filtered by the OehdHold column
 * @method     ChildSalesOrder[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildSalesOrder objects filtered by the ArcuCustId column
 * @method     ChildSalesOrder[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildSalesOrder objects filtered by the ArstShipId column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstname(string $OehdStName) Return ChildSalesOrder objects filtered by the OehdStName column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstlastname(string $OehdStLastName) Return ChildSalesOrder objects filtered by the OehdStLastName column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstfirstname(string $OehdStFirstName) Return ChildSalesOrder objects filtered by the OehdStFirstName column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstadr1(string $OehdStAdr1) Return ChildSalesOrder objects filtered by the OehdStAdr1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstadr2(string $OehdStAdr2) Return ChildSalesOrder objects filtered by the OehdStAdr2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstadr3(string $OehdStAdr3) Return ChildSalesOrder objects filtered by the OehdStAdr3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstctry(string $OehdStCtry) Return ChildSalesOrder objects filtered by the OehdStCtry column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstcity(string $OehdStCity) Return ChildSalesOrder objects filtered by the OehdStCity column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdststat(string $OehdStStat) Return ChildSalesOrder objects filtered by the OehdStStat column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstzipcode(string $OehdStZipCode) Return ChildSalesOrder objects filtered by the OehdStZipCode column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcustpo(string $OehdCustPo) Return ChildSalesOrder objects filtered by the OehdCustPo column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdordrdate(string $OehdOrdrDate) Return ChildSalesOrder objects filtered by the OehdOrdrDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildSalesOrder objects filtered by the ArtmTermCd column
 * @method     ChildSalesOrder[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildSalesOrder objects filtered by the ArtbShipVia column
 * @method     ChildSalesOrder[]|ObjectCollection findByArininvnbr(string $ArinInvNbr) Return ChildSalesOrder objects filtered by the ArinInvNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdinvdate(string $OehdInvDate) Return ChildSalesOrder objects filtered by the OehdInvDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdglpd(int $OehdGLPd) Return ChildSalesOrder objects filtered by the OehdGLPd column
 * @method     ChildSalesOrder[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildSalesOrder objects filtered by the ArspSalePer1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdsp1pct(string $OehdSp1Pct) Return ChildSalesOrder objects filtered by the OehdSp1Pct column
 * @method     ChildSalesOrder[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildSalesOrder objects filtered by the ArspSalePer2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdsp2pct(string $OehdSp2Pct) Return ChildSalesOrder objects filtered by the OehdSp2Pct column
 * @method     ChildSalesOrder[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildSalesOrder objects filtered by the ArspSalePer3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdsp3pct(string $OehdSp3Pct) Return ChildSalesOrder objects filtered by the OehdSp3Pct column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcntrnbr(int $OehdCntrNbr) Return ChildSalesOrder objects filtered by the OehdCntrNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdwibatch(int $OehdWiBatch) Return ChildSalesOrder objects filtered by the OehdWiBatch column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddroprelhold(string $OehdDropRelHold) Return ChildSalesOrder objects filtered by the OehdDropRelHold column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtaxsub(string $OehdTaxSub) Return ChildSalesOrder objects filtered by the OehdTaxSub column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdnontaxsub(string $OehdNonTaxSub) Return ChildSalesOrder objects filtered by the OehdNonTaxSub column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtaxtot(string $OehdTaxTot) Return ChildSalesOrder objects filtered by the OehdTaxTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttot(string $OehdFrtTot) Return ChildSalesOrder objects filtered by the OehdFrtTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdmisctot(string $OehdMiscTot) Return ChildSalesOrder objects filtered by the OehdMiscTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdordrtot(string $OehdOrdrTot) Return ChildSalesOrder objects filtered by the OehdOrdrTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcosttot(string $OehdCostTot) Return ChildSalesOrder objects filtered by the OehdCostTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdspcommlock(string $OehdSpCommLock) Return ChildSalesOrder objects filtered by the OehdSpCommLock column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtakendate(string $OehdTakenDate) Return ChildSalesOrder objects filtered by the OehdTakenDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtakentime(string $OehdTakenTime) Return ChildSalesOrder objects filtered by the OehdTakenTime column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpickdate(string $OehdPickDate) Return ChildSalesOrder objects filtered by the OehdPickDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpicktime(string $OehdPickTime) Return ChildSalesOrder objects filtered by the OehdPickTime column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpackdate(string $OehdPackDate) Return ChildSalesOrder objects filtered by the OehdPackDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpacktime(string $OehdPackTime) Return ChildSalesOrder objects filtered by the OehdPackTime column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdverifydate(string $OehdVerifyDate) Return ChildSalesOrder objects filtered by the OehdVerifyDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdverifytime(string $OehdVerifyTime) Return ChildSalesOrder objects filtered by the OehdVerifyTime column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcreditmemo(string $OehdCreditMemo) Return ChildSalesOrder objects filtered by the OehdCreditMemo column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdbookedyn(string $OehdBookedYn) Return ChildSalesOrder objects filtered by the OehdBookedYn column
 * @method     ChildSalesOrder[]|ObjectCollection findByIntbwhseorig(string $IntbWhseOrig) Return ChildSalesOrder objects filtered by the IntbWhseOrig column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdbtstat(string $OehdBtStat) Return ChildSalesOrder objects filtered by the OehdBtStat column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdshipcomp(string $OehdShipComp) Return ChildSalesOrder objects filtered by the OehdShipComp column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcwoflag(string $OehdCwoFlag) Return ChildSalesOrder objects filtered by the OehdCwoFlag column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddivision(string $OehdDivision) Return ChildSalesOrder objects filtered by the OehdDivision column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtakencode(string $OehdTakenCode) Return ChildSalesOrder objects filtered by the OehdTakenCode column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpickcode(string $OehdPickCode) Return ChildSalesOrder objects filtered by the OehdPickCode column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpackcode(string $OehdPackCode) Return ChildSalesOrder objects filtered by the OehdPackCode column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdverifycode(string $OehdVerifyCode) Return ChildSalesOrder objects filtered by the OehdVerifyCode column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtotdisc(string $OehdTotDisc) Return ChildSalesOrder objects filtered by the OehdTotDisc column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdedirefnbrqual(string $OehdEdiRefNbrQual) Return ChildSalesOrder objects filtered by the OehdEdiRefNbrQual column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdusercode1(string $OehdUserCode1) Return ChildSalesOrder objects filtered by the OehdUserCode1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdusercode2(string $OehdUserCode2) Return ChildSalesOrder objects filtered by the OehdUserCode2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdusercode3(string $OehdUserCode3) Return ChildSalesOrder objects filtered by the OehdUserCode3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdusercode4(string $OehdUserCode4) Return ChildSalesOrder objects filtered by the OehdUserCode4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdexchctry(string $OehdExchCtry) Return ChildSalesOrder objects filtered by the OehdExchCtry column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdexchrate(string $OehdExchRate) Return ChildSalesOrder objects filtered by the OehdExchRate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdwghttot(string $OehdWghtTot) Return ChildSalesOrder objects filtered by the OehdWghtTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdwghtoride(string $OehdWghtOride) Return ChildSalesOrder objects filtered by the OehdWghtOride column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdccinfo(string $OehdCcInfo) Return ChildSalesOrder objects filtered by the OehdCcInfo column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdboxcount(int $OehdBoxCount) Return ChildSalesOrder objects filtered by the OehdBoxCount column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdrqstdate(string $OehdRqstDate) Return ChildSalesOrder objects filtered by the OehdRqstDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcancdate(string $OehdCancDate) Return ChildSalesOrder objects filtered by the OehdCancDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcrntuser(string $OehdCrntUser) Return ChildSalesOrder objects filtered by the OehdCrntUser column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdreleasenbr(string $OehdReleaseNbr) Return ChildSalesOrder objects filtered by the OehdReleaseNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildSalesOrder objects filtered by the IntbWhse column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdbordbuilddate(string $OehdBordBuildDate) Return ChildSalesOrder objects filtered by the OehdBordBuildDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddeptcode(string $OehdDeptCode) Return ChildSalesOrder objects filtered by the OehdDeptCode column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrtinentered(string $OehdFrtInEntered) Return ChildSalesOrder objects filtered by the OehdFrtInEntered column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddropshipentered(string $OehdDropShipEntered) Return ChildSalesOrder objects filtered by the OehdDropShipEntered column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehderflag(string $OehdErFlag) Return ChildSalesOrder objects filtered by the OehdErFlag column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrtin(string $OehdFrtIn) Return ChildSalesOrder objects filtered by the OehdFrtIn column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddropship(string $OehdDropShip) Return ChildSalesOrder objects filtered by the OehdDropShip column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdminorder(string $OehdMinOrder) Return ChildSalesOrder objects filtered by the OehdMinOrder column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcontractterms(string $OehdContractTerms) Return ChildSalesOrder objects filtered by the OehdContractTerms column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddropshipbilled(string $OehdDropShipBilled) Return ChildSalesOrder objects filtered by the OehdDropShipBilled column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdordtyp(string $OehdOrdTyp) Return ChildSalesOrder objects filtered by the OehdOrdTyp column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdtracknbr(string $OehdTrackNbr) Return ChildSalesOrder objects filtered by the OehdTrackNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdsource(string $OehdSource) Return ChildSalesOrder objects filtered by the OehdSource column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdccaprv(string $OehdCcAprv) Return ChildSalesOrder objects filtered by the OehdCcAprv column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpickfmattype(string $OehdPickFmatType) Return ChildSalesOrder objects filtered by the OehdPickFmatType column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdinvcfmattype(string $OehdInvcFmatType) Return ChildSalesOrder objects filtered by the OehdInvcFmatType column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcashamt(string $OehdCashAmt) Return ChildSalesOrder objects filtered by the OehdCashAmt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcheckamt(string $OehdCheckAmt) Return ChildSalesOrder objects filtered by the OehdCheckAmt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdchecknbr(string $OehdCheckNbr) Return ChildSalesOrder objects filtered by the OehdCheckNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddepositamt(string $OehdDepositAmt) Return ChildSalesOrder objects filtered by the OehdDepositAmt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddepositnbr(string $OehdDepositNbr) Return ChildSalesOrder objects filtered by the OehdDepositNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdccamt(string $OehdCcAmt) Return ChildSalesOrder objects filtered by the OehdCcAmt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdotaxsub(string $OehdOTaxSub) Return ChildSalesOrder objects filtered by the OehdOTaxSub column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdonontaxsub(string $OehdONonTaxSub) Return ChildSalesOrder objects filtered by the OehdONonTaxSub column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdotaxtot(string $OehdOTaxTot) Return ChildSalesOrder objects filtered by the OehdOTaxTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdoordrtot(string $OehdOOrdrTot) Return ChildSalesOrder objects filtered by the OehdOOrdrTot column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpickprintdate(string $OehdPickPrintDate) Return ChildSalesOrder objects filtered by the OehdPickPrintDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpickprinttime(string $OehdPickPrintTime) Return ChildSalesOrder objects filtered by the OehdPickPrintTime column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcont(string $OehdCont) Return ChildSalesOrder objects filtered by the OehdCont column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcontteleintl(string $OehdContTeleIntl) Return ChildSalesOrder objects filtered by the OehdContTeleIntl column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdconttelenbr(string $OehdContTeleNbr) Return ChildSalesOrder objects filtered by the OehdContTeleNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcontteleext(string $OehdContTeleExt) Return ChildSalesOrder objects filtered by the OehdContTeleExt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcontfaxintl(string $OehdContFaxIntl) Return ChildSalesOrder objects filtered by the OehdContFaxIntl column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcontfaxnbr(string $OehdContFaxNbr) Return ChildSalesOrder objects filtered by the OehdContFaxNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdshipacct(string $OehdShipAcct) Return ChildSalesOrder objects filtered by the OehdShipAcct column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdchgdue(string $OehdChgDue) Return ChildSalesOrder objects filtered by the OehdChgDue column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdaddlpricdisc(string $OehdAddlPricDisc) Return ChildSalesOrder objects filtered by the OehdAddlPricDisc column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdallship(string $OehdAllShip) Return ChildSalesOrder objects filtered by the OehdAllShip column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdqtyorderamt(string $OehdQtyOrderAmt) Return ChildSalesOrder objects filtered by the OehdQtyOrderAmt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcreditapplied(string $OehdCreditApplied) Return ChildSalesOrder objects filtered by the OehdCreditApplied column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdinvcprintdate(string $OehdInvcPrintDate) Return ChildSalesOrder objects filtered by the OehdInvcPrintDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdinvcprinttime(string $OehdInvcPrintTime) Return ChildSalesOrder objects filtered by the OehdInvcPrintTime column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscfrt(string $OehdDiscFrt) Return ChildSalesOrder objects filtered by the OehdDiscFrt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdorideshipcomp(string $OehdOrideShipComp) Return ChildSalesOrder objects filtered by the OehdOrideShipComp column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcontemail(string $OehdContEmail) Return ChildSalesOrder objects filtered by the OehdContEmail column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdmanualfrt(string $OehdManualFrt) Return ChildSalesOrder objects filtered by the OehdManualFrt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdinternalfrt(string $OehdInternalFrt) Return ChildSalesOrder objects filtered by the OehdInternalFrt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrtcost(string $OehdFrtCost) Return ChildSalesOrder objects filtered by the OehdFrtCost column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdroute(string $OehdRoute) Return ChildSalesOrder objects filtered by the OehdRoute column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdrouteseq(int $OehdRouteSeq) Return ChildSalesOrder objects filtered by the OehdRouteSeq column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxcode1(string $OehdFrtTaxCode1) Return ChildSalesOrder objects filtered by the OehdFrtTaxCode1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxamt1(string $OehdFrtTaxAmt1) Return ChildSalesOrder objects filtered by the OehdFrtTaxAmt1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxcode2(string $OehdFrtTaxCode2) Return ChildSalesOrder objects filtered by the OehdFrtTaxCode2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxamt2(string $OehdFrtTaxAmt2) Return ChildSalesOrder objects filtered by the OehdFrtTaxAmt2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxcode3(string $OehdFrtTaxCode3) Return ChildSalesOrder objects filtered by the OehdFrtTaxCode3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxamt3(string $OehdFrtTaxAmt3) Return ChildSalesOrder objects filtered by the OehdFrtTaxAmt3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxcode4(string $OehdFrtTaxCode4) Return ChildSalesOrder objects filtered by the OehdFrtTaxCode4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxamt4(string $OehdFrtTaxAmt4) Return ChildSalesOrder objects filtered by the OehdFrtTaxAmt4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxcode5(string $OehdFrtTaxCode5) Return ChildSalesOrder objects filtered by the OehdFrtTaxCode5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrttaxamt5(string $OehdFrtTaxAmt5) Return ChildSalesOrder objects filtered by the OehdFrtTaxAmt5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdedi855sent(string $OehdEdi855Sent) Return ChildSalesOrder objects filtered by the OehdEdi855Sent column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrt3rdparty(string $OehdFrt3rdParty) Return ChildSalesOrder objects filtered by the OehdFrt3rdParty column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfob(string $OehdFob) Return ChildSalesOrder objects filtered by the OehdFob column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdconfirmimagyn(string $OehdConfirmImagYn) Return ChildSalesOrder objects filtered by the OehdConfirmImagYn column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdindustconform(string $OehdIndustConform) Return ChildSalesOrder objects filtered by the OehdIndustConform column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcstkconsign(string $OehdCstkConsign) Return ChildSalesOrder objects filtered by the OehdCstkConsign column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdlmdelaycapsent(string $OehdLmDelayCapSent) Return ChildSalesOrder objects filtered by the OehdLmDelayCapSent column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdmfgid(string $OehdMfgId) Return ChildSalesOrder objects filtered by the OehdMfgId column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdstoreid(string $OehdStoreId) Return ChildSalesOrder objects filtered by the OehdStoreId column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpickqueue(string $OehdPickQueue) Return ChildSalesOrder objects filtered by the OehdPickQueue column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdarrvdate(string $OehdArrvDate) Return ChildSalesOrder objects filtered by the OehdArrvDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdsurchgstat(string $OehdSurchgStat) Return ChildSalesOrder objects filtered by the OehdSurchgStat column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdfrtgrup(string $OehdFrtGrup) Return ChildSalesOrder objects filtered by the OehdFrtGrup column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdcommoride(string $OehdCommOride) Return ChildSalesOrder objects filtered by the OehdCommOride column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdchrgsplt(string $OehdChrgSplt) Return ChildSalesOrder objects filtered by the OehdChrgSplt column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdacccaprv(string $OehdAcCcAprv) Return ChildSalesOrder objects filtered by the OehdAcCcAprv column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdorigordrnbr(string $OehdOrigOrdrNbr) Return ChildSalesOrder objects filtered by the OehdOrigOrdrNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdpostdate(string $OehdPostDate) Return ChildSalesOrder objects filtered by the OehdPostDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscdate1(string $OehdDiscDate1) Return ChildSalesOrder objects filtered by the OehdDiscDate1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscpct1(string $OehdDiscPct1) Return ChildSalesOrder objects filtered by the OehdDiscPct1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduedate1(string $OehdDueDate1) Return ChildSalesOrder objects filtered by the OehdDueDate1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddueamt1(string $OehdDueAmt1) Return ChildSalesOrder objects filtered by the OehdDueAmt1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduepct1(string $OehdDuePct1) Return ChildSalesOrder objects filtered by the OehdDuePct1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscdate2(string $OehdDiscDate2) Return ChildSalesOrder objects filtered by the OehdDiscDate2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscpct2(string $OehdDiscPct2) Return ChildSalesOrder objects filtered by the OehdDiscPct2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduedate2(string $OehdDueDate2) Return ChildSalesOrder objects filtered by the OehdDueDate2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddueamt2(string $OehdDueAmt2) Return ChildSalesOrder objects filtered by the OehdDueAmt2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduepct2(string $OehdDuePct2) Return ChildSalesOrder objects filtered by the OehdDuePct2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscdate3(string $OehdDiscDate3) Return ChildSalesOrder objects filtered by the OehdDiscDate3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscpct3(string $OehdDiscPct3) Return ChildSalesOrder objects filtered by the OehdDiscPct3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduedate3(string $OehdDueDate3) Return ChildSalesOrder objects filtered by the OehdDueDate3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddueamt3(string $OehdDueAmt3) Return ChildSalesOrder objects filtered by the OehdDueAmt3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduepct3(string $OehdDuePct3) Return ChildSalesOrder objects filtered by the OehdDuePct3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscdate4(string $OehdDiscDate4) Return ChildSalesOrder objects filtered by the OehdDiscDate4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscpct4(string $OehdDiscPct4) Return ChildSalesOrder objects filtered by the OehdDiscPct4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduedate4(string $OehdDueDate4) Return ChildSalesOrder objects filtered by the OehdDueDate4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddueamt4(string $OehdDueAmt4) Return ChildSalesOrder objects filtered by the OehdDueAmt4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduepct4(string $OehdDuePct4) Return ChildSalesOrder objects filtered by the OehdDuePct4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscdate5(string $OehdDiscDate5) Return ChildSalesOrder objects filtered by the OehdDiscDate5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscpct5(string $OehdDiscPct5) Return ChildSalesOrder objects filtered by the OehdDiscPct5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduedate5(string $OehdDueDate5) Return ChildSalesOrder objects filtered by the OehdDueDate5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddueamt5(string $OehdDueAmt5) Return ChildSalesOrder objects filtered by the OehdDueAmt5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduepct5(string $OehdDuePct5) Return ChildSalesOrder objects filtered by the OehdDuePct5 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscdate6(string $OehdDiscDate6) Return ChildSalesOrder objects filtered by the OehdDiscDate6 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddiscpct6(string $OehdDiscPct6) Return ChildSalesOrder objects filtered by the OehdDiscPct6 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduedate6(string $OehdDueDate6) Return ChildSalesOrder objects filtered by the OehdDueDate6 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehddueamt6(string $OehdDueAmt6) Return ChildSalesOrder objects filtered by the OehdDueAmt6 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdduepct6(string $OehdDuePct6) Return ChildSalesOrder objects filtered by the OehdDuePct6 column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdrefnbr(string $OehdRefNbr) Return ChildSalesOrder objects filtered by the OehdRefNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdacprognbr(string $OehdAcProgNbr) Return ChildSalesOrder objects filtered by the OehdAcProgNbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByOehdacprogexpdate(string $OehdAcProgExpDate) Return ChildSalesOrder objects filtered by the OehdAcProgExpDate column
 * @method     ChildSalesOrder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesOrder objects filtered by the DateUpdtd column
 * @method     ChildSalesOrder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesOrder objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesOrder objects filtered by the dummy column
 * @method     ChildSalesOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesOrderQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderQuery();
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
     * @return ChildSalesOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSalesOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OehdStat, OehdHold, ArcuCustId, ArstShipId, OehdStName, OehdStLastName, OehdStFirstName, OehdStAdr1, OehdStAdr2, OehdStAdr3, OehdStCtry, OehdStCity, OehdStStat, OehdStZipCode, OehdCustPo, OehdOrdrDate, ArtmTermCd, ArtbShipVia, ArinInvNbr, OehdInvDate, OehdGLPd, ArspSalePer1, OehdSp1Pct, ArspSalePer2, OehdSp2Pct, ArspSalePer3, OehdSp3Pct, OehdCntrNbr, OehdWiBatch, OehdDropRelHold, OehdTaxSub, OehdNonTaxSub, OehdTaxTot, OehdFrtTot, OehdMiscTot, OehdOrdrTot, OehdCostTot, OehdSpCommLock, OehdTakenDate, OehdTakenTime, OehdPickDate, OehdPickTime, OehdPackDate, OehdPackTime, OehdVerifyDate, OehdVerifyTime, OehdCreditMemo, OehdBookedYn, IntbWhseOrig, OehdBtStat, OehdShipComp, OehdCwoFlag, OehdDivision, OehdTakenCode, OehdPickCode, OehdPackCode, OehdVerifyCode, OehdTotDisc, OehdEdiRefNbrQual, OehdUserCode1, OehdUserCode2, OehdUserCode3, OehdUserCode4, OehdExchCtry, OehdExchRate, OehdWghtTot, OehdWghtOride, OehdCcInfo, OehdBoxCount, OehdRqstDate, OehdCancDate, OehdCrntUser, OehdReleaseNbr, IntbWhse, OehdBordBuildDate, OehdDeptCode, OehdFrtInEntered, OehdDropShipEntered, OehdErFlag, OehdFrtIn, OehdDropShip, OehdMinOrder, OehdContractTerms, OehdDropShipBilled, OehdOrdTyp, OehdTrackNbr, OehdSource, OehdCcAprv, OehdPickFmatType, OehdInvcFmatType, OehdCashAmt, OehdCheckAmt, OehdCheckNbr, OehdDepositAmt, OehdDepositNbr, OehdCcAmt, OehdOTaxSub, OehdONonTaxSub, OehdOTaxTot, OehdOOrdrTot, OehdPickPrintDate, OehdPickPrintTime, OehdCont, OehdContTeleIntl, OehdContTeleNbr, OehdContTeleExt, OehdContFaxIntl, OehdContFaxNbr, OehdShipAcct, OehdChgDue, OehdAddlPricDisc, OehdAllShip, OehdQtyOrderAmt, OehdCreditApplied, OehdInvcPrintDate, OehdInvcPrintTime, OehdDiscFrt, OehdOrideShipComp, OehdContEmail, OehdManualFrt, OehdInternalFrt, OehdFrtCost, OehdRoute, OehdRouteSeq, OehdFrtTaxCode1, OehdFrtTaxAmt1, OehdFrtTaxCode2, OehdFrtTaxAmt2, OehdFrtTaxCode3, OehdFrtTaxAmt3, OehdFrtTaxCode4, OehdFrtTaxAmt4, OehdFrtTaxCode5, OehdFrtTaxAmt5, OehdEdi855Sent, OehdFrt3rdParty, OehdFob, OehdConfirmImagYn, OehdIndustConform, OehdCstkConsign, OehdLmDelayCapSent, OehdMfgId, OehdStoreId, OehdPickQueue, OehdArrvDate, OehdSurchgStat, OehdFrtGrup, OehdCommOride, OehdChrgSplt, OehdAcCcAprv, OehdOrigOrdrNbr, OehdPostDate, OehdDiscDate1, OehdDiscPct1, OehdDueDate1, OehdDueAmt1, OehdDuePct1, OehdDiscDate2, OehdDiscPct2, OehdDueDate2, OehdDueAmt2, OehdDuePct2, OehdDiscDate3, OehdDiscPct3, OehdDueDate3, OehdDueAmt3, OehdDuePct3, OehdDiscDate4, OehdDiscPct4, OehdDueDate4, OehdDueAmt4, OehdDuePct4, OehdDiscDate5, OehdDiscPct5, OehdDueDate5, OehdDueAmt5, OehdDuePct5, OehdDiscDate6, OehdDiscPct6, OehdDueDate6, OehdDueAmt6, OehdDuePct6, OehdRefNbr, OehdAcProgNbr, OehdAcProgExpDate, DateUpdtd, TimeUpdtd, dummy FROM so_header WHERE OehdNbr = :p0';
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
            /** @var ChildSalesOrder $obj */
            $obj = new ChildSalesOrder();
            $obj->hydrate($row);
            SalesOrderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSalesOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr(1234); // WHERE OehdNbr = 1234
     * $query->filterByOehdnbr(array(12, 34)); // WHERE OehdNbr IN (12, 34)
     * $query->filterByOehdnbr(array('min' => 12)); // WHERE OehdNbr > 12
     * </code>
     *
     * @param     mixed $oehdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, $comparison = null)
    {
        if (is_array($oehdnbr)) {
            $useMinMax = false;
            if (isset($oehdnbr['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $oehdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnbr['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $oehdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $oehdnbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstat($oehdstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTAT, $oehdstat, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdhold($oehdhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDHOLD, $oehdhold, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstname($oehdstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTNAME, $oehdstname, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstlastname($oehdstlastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstlastname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTLASTNAME, $oehdstlastname, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstfirstname($oehdstfirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstfirstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTFIRSTNAME, $oehdstfirstname, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstadr1($oehdstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTADR1, $oehdstadr1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstadr2($oehdstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTADR2, $oehdstadr2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstadr3($oehdstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTADR3, $oehdstadr3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstctry($oehdstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTCTRY, $oehdstctry, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstcity($oehdstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTCITY, $oehdstcity, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdststat($oehdststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTSTAT, $oehdststat, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstzipcode($oehdstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTZIPCODE, $oehdstzipcode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcustpo($oehdcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCUSTPO, $oehdcustpo, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdordrdate($oehdordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORDRDATE, $oehdordrdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArininvnbr($arininvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARININVNBR, $arininvnbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdinvdate($oehdinvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDINVDATE, $oehdinvdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdglpd($oehdglpd = null, $comparison = null)
    {
        if (is_array($oehdglpd)) {
            $useMinMax = false;
            if (isset($oehdglpd['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDGLPD, $oehdglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdglpd['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDGLPD, $oehdglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDGLPD, $oehdglpd, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdsp1pct($oehdsp1pct = null, $comparison = null)
    {
        if (is_array($oehdsp1pct)) {
            $useMinMax = false;
            if (isset($oehdsp1pct['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP1PCT, $oehdsp1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdsp1pct['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP1PCT, $oehdsp1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP1PCT, $oehdsp1pct, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdsp2pct($oehdsp2pct = null, $comparison = null)
    {
        if (is_array($oehdsp2pct)) {
            $useMinMax = false;
            if (isset($oehdsp2pct['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP2PCT, $oehdsp2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdsp2pct['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP2PCT, $oehdsp2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP2PCT, $oehdsp2pct, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdsp3pct($oehdsp3pct = null, $comparison = null)
    {
        if (is_array($oehdsp3pct)) {
            $useMinMax = false;
            if (isset($oehdsp3pct['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP3PCT, $oehdsp3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdsp3pct['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP3PCT, $oehdsp3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSP3PCT, $oehdsp3pct, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcntrnbr($oehdcntrnbr = null, $comparison = null)
    {
        if (is_array($oehdcntrnbr)) {
            $useMinMax = false;
            if (isset($oehdcntrnbr['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCNTRNBR, $oehdcntrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcntrnbr['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCNTRNBR, $oehdcntrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCNTRNBR, $oehdcntrnbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdwibatch($oehdwibatch = null, $comparison = null)
    {
        if (is_array($oehdwibatch)) {
            $useMinMax = false;
            if (isset($oehdwibatch['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWIBATCH, $oehdwibatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdwibatch['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWIBATCH, $oehdwibatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWIBATCH, $oehdwibatch, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddroprelhold($oehddroprelhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddroprelhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDROPRELHOLD, $oehddroprelhold, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtaxsub($oehdtaxsub = null, $comparison = null)
    {
        if (is_array($oehdtaxsub)) {
            $useMinMax = false;
            if (isset($oehdtaxsub['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAXSUB, $oehdtaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdtaxsub['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAXSUB, $oehdtaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAXSUB, $oehdtaxsub, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdnontaxsub($oehdnontaxsub = null, $comparison = null)
    {
        if (is_array($oehdnontaxsub)) {
            $useMinMax = false;
            if (isset($oehdnontaxsub['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNONTAXSUB, $oehdnontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnontaxsub['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNONTAXSUB, $oehdnontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNONTAXSUB, $oehdnontaxsub, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtaxtot($oehdtaxtot = null, $comparison = null)
    {
        if (is_array($oehdtaxtot)) {
            $useMinMax = false;
            if (isset($oehdtaxtot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAXTOT, $oehdtaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdtaxtot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAXTOT, $oehdtaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAXTOT, $oehdtaxtot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttot($oehdfrttot = null, $comparison = null)
    {
        if (is_array($oehdfrttot)) {
            $useMinMax = false;
            if (isset($oehdfrttot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTOT, $oehdfrttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTOT, $oehdfrttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTOT, $oehdfrttot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdmisctot($oehdmisctot = null, $comparison = null)
    {
        if (is_array($oehdmisctot)) {
            $useMinMax = false;
            if (isset($oehdmisctot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMISCTOT, $oehdmisctot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdmisctot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMISCTOT, $oehdmisctot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMISCTOT, $oehdmisctot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdordrtot($oehdordrtot = null, $comparison = null)
    {
        if (is_array($oehdordrtot)) {
            $useMinMax = false;
            if (isset($oehdordrtot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORDRTOT, $oehdordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdordrtot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORDRTOT, $oehdordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORDRTOT, $oehdordrtot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcosttot($oehdcosttot = null, $comparison = null)
    {
        if (is_array($oehdcosttot)) {
            $useMinMax = false;
            if (isset($oehdcosttot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCOSTTOT, $oehdcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcosttot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCOSTTOT, $oehdcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCOSTTOT, $oehdcosttot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdspcommlock($oehdspcommlock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdspcommlock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSPCOMMLOCK, $oehdspcommlock, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtakendate($oehdtakendate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtakendate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAKENDATE, $oehdtakendate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtakentime($oehdtakentime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtakentime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAKENTIME, $oehdtakentime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpickdate($oehdpickdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKDATE, $oehdpickdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpicktime($oehdpicktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKTIME, $oehdpicktime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpackdate($oehdpackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPACKDATE, $oehdpackdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpacktime($oehdpacktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpacktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPACKTIME, $oehdpacktime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdverifydate($oehdverifydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdverifydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDVERIFYDATE, $oehdverifydate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdverifytime($oehdverifytime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdverifytime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDVERIFYTIME, $oehdverifytime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcreditmemo($oehdcreditmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcreditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCREDITMEMO, $oehdcreditmemo, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdbookedyn($oehdbookedyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdbookedyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDBOOKEDYN, $oehdbookedyn, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdbtstat($oehdbtstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdbtstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDBTSTAT, $oehdbtstat, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdshipcomp($oehdshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSHIPCOMP, $oehdshipcomp, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcwoflag($oehdcwoflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcwoflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCWOFLAG, $oehdcwoflag, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddivision($oehddivision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddivision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDIVISION, $oehddivision, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtakencode($oehdtakencode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtakencode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTAKENCODE, $oehdtakencode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpickcode($oehdpickcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKCODE, $oehdpickcode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpackcode($oehdpackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPACKCODE, $oehdpackcode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdverifycode($oehdverifycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdverifycode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDVERIFYCODE, $oehdverifycode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtotdisc($oehdtotdisc = null, $comparison = null)
    {
        if (is_array($oehdtotdisc)) {
            $useMinMax = false;
            if (isset($oehdtotdisc['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTOTDISC, $oehdtotdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdtotdisc['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTOTDISC, $oehdtotdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTOTDISC, $oehdtotdisc, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdedirefnbrqual($oehdedirefnbrqual = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdedirefnbrqual)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL, $oehdedirefnbrqual, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode1($oehdusercode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDUSERCODE1, $oehdusercode1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode2($oehdusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDUSERCODE2, $oehdusercode2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode3($oehdusercode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDUSERCODE3, $oehdusercode3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdusercode4($oehdusercode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDUSERCODE4, $oehdusercode4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdexchctry($oehdexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDEXCHCTRY, $oehdexchctry, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdexchrate($oehdexchrate = null, $comparison = null)
    {
        if (is_array($oehdexchrate)) {
            $useMinMax = false;
            if (isset($oehdexchrate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDEXCHRATE, $oehdexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdexchrate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDEXCHRATE, $oehdexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDEXCHRATE, $oehdexchrate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdwghttot($oehdwghttot = null, $comparison = null)
    {
        if (is_array($oehdwghttot)) {
            $useMinMax = false;
            if (isset($oehdwghttot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWGHTTOT, $oehdwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdwghttot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWGHTTOT, $oehdwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWGHTTOT, $oehdwghttot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdwghtoride($oehdwghtoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdwghtoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDWGHTORIDE, $oehdwghtoride, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdccinfo($oehdccinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdccinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCCINFO, $oehdccinfo, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdboxcount($oehdboxcount = null, $comparison = null)
    {
        if (is_array($oehdboxcount)) {
            $useMinMax = false;
            if (isset($oehdboxcount['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDBOXCOUNT, $oehdboxcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdboxcount['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDBOXCOUNT, $oehdboxcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDBOXCOUNT, $oehdboxcount, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdrqstdate($oehdrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDRQSTDATE, $oehdrqstdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcancdate($oehdcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCANCDATE, $oehdcancdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcrntuser($oehdcrntuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCRNTUSER, $oehdcrntuser, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdreleasenbr($oehdreleasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDRELEASENBR, $oehdreleasenbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INTBWHSE, $intbwhse, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdbordbuilddate($oehdbordbuilddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdbordbuilddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDBORDBUILDDATE, $oehdbordbuilddate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddeptcode($oehddeptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddeptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDEPTCODE, $oehddeptcode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtinentered($oehdfrtinentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTINENTERED, $oehdfrtinentered, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddropshipentered($oehddropshipentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddropshipentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDROPSHIPENTERED, $oehddropshipentered, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehderflag($oehderflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehderflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDERFLAG, $oehderflag, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtin($oehdfrtin = null, $comparison = null)
    {
        if (is_array($oehdfrtin)) {
            $useMinMax = false;
            if (isset($oehdfrtin['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTIN, $oehdfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrtin['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTIN, $oehdfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTIN, $oehdfrtin, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddropship($oehddropship = null, $comparison = null)
    {
        if (is_array($oehddropship)) {
            $useMinMax = false;
            if (isset($oehddropship['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDROPSHIP, $oehddropship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddropship['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDROPSHIP, $oehddropship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDROPSHIP, $oehddropship, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdminorder($oehdminorder = null, $comparison = null)
    {
        if (is_array($oehdminorder)) {
            $useMinMax = false;
            if (isset($oehdminorder['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMINORDER, $oehdminorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdminorder['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMINORDER, $oehdminorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMINORDER, $oehdminorder, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcontractterms($oehdcontractterms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontractterms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTRACTTERMS, $oehdcontractterms, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddropshipbilled($oehddropshipbilled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddropshipbilled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDROPSHIPBILLED, $oehddropshipbilled, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdordtyp($oehdordtyp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORDTYP, $oehdordtyp, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdtracknbr($oehdtracknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDTRACKNBR, $oehdtracknbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdsource($oehdsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdsource)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSOURCE, $oehdsource, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdccaprv($oehdccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCCAPRV, $oehdccaprv, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpickfmattype($oehdpickfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKFMATTYPE, $oehdpickfmattype, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdinvcfmattype($oehdinvcfmattype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvcfmattype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDINVCFMATTYPE, $oehdinvcfmattype, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcashamt($oehdcashamt = null, $comparison = null)
    {
        if (is_array($oehdcashamt)) {
            $useMinMax = false;
            if (isset($oehdcashamt['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCASHAMT, $oehdcashamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcashamt['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCASHAMT, $oehdcashamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCASHAMT, $oehdcashamt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcheckamt($oehdcheckamt = null, $comparison = null)
    {
        if (is_array($oehdcheckamt)) {
            $useMinMax = false;
            if (isset($oehdcheckamt['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHECKAMT, $oehdcheckamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcheckamt['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHECKAMT, $oehdcheckamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHECKAMT, $oehdcheckamt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdchecknbr($oehdchecknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdchecknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHECKNBR, $oehdchecknbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddepositamt($oehddepositamt = null, $comparison = null)
    {
        if (is_array($oehddepositamt)) {
            $useMinMax = false;
            if (isset($oehddepositamt['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDEPOSITAMT, $oehddepositamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddepositamt['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDEPOSITAMT, $oehddepositamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDEPOSITAMT, $oehddepositamt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddepositnbr($oehddepositnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddepositnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDEPOSITNBR, $oehddepositnbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdccamt($oehdccamt = null, $comparison = null)
    {
        if (is_array($oehdccamt)) {
            $useMinMax = false;
            if (isset($oehdccamt['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCCAMT, $oehdccamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdccamt['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCCAMT, $oehdccamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCCAMT, $oehdccamt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdotaxsub($oehdotaxsub = null, $comparison = null)
    {
        if (is_array($oehdotaxsub)) {
            $useMinMax = false;
            if (isset($oehdotaxsub['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOTAXSUB, $oehdotaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdotaxsub['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOTAXSUB, $oehdotaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOTAXSUB, $oehdotaxsub, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdonontaxsub($oehdonontaxsub = null, $comparison = null)
    {
        if (is_array($oehdonontaxsub)) {
            $useMinMax = false;
            if (isset($oehdonontaxsub['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDONONTAXSUB, $oehdonontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdonontaxsub['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDONONTAXSUB, $oehdonontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDONONTAXSUB, $oehdonontaxsub, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdotaxtot($oehdotaxtot = null, $comparison = null)
    {
        if (is_array($oehdotaxtot)) {
            $useMinMax = false;
            if (isset($oehdotaxtot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOTAXTOT, $oehdotaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdotaxtot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOTAXTOT, $oehdotaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOTAXTOT, $oehdotaxtot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdoordrtot($oehdoordrtot = null, $comparison = null)
    {
        if (is_array($oehdoordrtot)) {
            $useMinMax = false;
            if (isset($oehdoordrtot['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOORDRTOT, $oehdoordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdoordrtot['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOORDRTOT, $oehdoordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDOORDRTOT, $oehdoordrtot, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpickprintdate($oehdpickprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKPRINTDATE, $oehdpickprintdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpickprinttime($oehdpickprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKPRINTTIME, $oehdpickprinttime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcont($oehdcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONT, $oehdcont, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcontteleintl($oehdcontteleintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTTELEINTL, $oehdcontteleintl, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdconttelenbr($oehdconttelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdconttelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTTELENBR, $oehdconttelenbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcontteleext($oehdcontteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTTELEEXT, $oehdcontteleext, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcontfaxintl($oehdcontfaxintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTFAXINTL, $oehdcontfaxintl, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcontfaxnbr($oehdcontfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTFAXNBR, $oehdcontfaxnbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdshipacct($oehdshipacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdshipacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSHIPACCT, $oehdshipacct, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdchgdue($oehdchgdue = null, $comparison = null)
    {
        if (is_array($oehdchgdue)) {
            $useMinMax = false;
            if (isset($oehdchgdue['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHGDUE, $oehdchgdue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdchgdue['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHGDUE, $oehdchgdue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHGDUE, $oehdchgdue, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdaddlpricdisc($oehdaddlpricdisc = null, $comparison = null)
    {
        if (is_array($oehdaddlpricdisc)) {
            $useMinMax = false;
            if (isset($oehdaddlpricdisc['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDADDLPRICDISC, $oehdaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdaddlpricdisc['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDADDLPRICDISC, $oehdaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDADDLPRICDISC, $oehdaddlpricdisc, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdallship($oehdallship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdallship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDALLSHIP, $oehdallship, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdqtyorderamt($oehdqtyorderamt = null, $comparison = null)
    {
        if (is_array($oehdqtyorderamt)) {
            $useMinMax = false;
            if (isset($oehdqtyorderamt['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDQTYORDERAMT, $oehdqtyorderamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdqtyorderamt['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDQTYORDERAMT, $oehdqtyorderamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDQTYORDERAMT, $oehdqtyorderamt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcreditapplied($oehdcreditapplied = null, $comparison = null)
    {
        if (is_array($oehdcreditapplied)) {
            $useMinMax = false;
            if (isset($oehdcreditapplied['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCREDITAPPLIED, $oehdcreditapplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdcreditapplied['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCREDITAPPLIED, $oehdcreditapplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCREDITAPPLIED, $oehdcreditapplied, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdinvcprintdate($oehdinvcprintdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvcprintdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDINVCPRINTDATE, $oehdinvcprintdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdinvcprinttime($oehdinvcprinttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinvcprinttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDINVCPRINTTIME, $oehdinvcprinttime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscfrt($oehddiscfrt = null, $comparison = null)
    {
        if (is_array($oehddiscfrt)) {
            $useMinMax = false;
            if (isset($oehddiscfrt['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCFRT, $oehddiscfrt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscfrt['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCFRT, $oehddiscfrt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCFRT, $oehddiscfrt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdorideshipcomp($oehdorideshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdorideshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORIDESHIPCOMP, $oehdorideshipcomp, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcontemail($oehdcontemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcontemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONTEMAIL, $oehdcontemail, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdmanualfrt($oehdmanualfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdmanualfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMANUALFRT, $oehdmanualfrt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdinternalfrt($oehdinternalfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdinternalfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDINTERNALFRT, $oehdinternalfrt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtcost($oehdfrtcost = null, $comparison = null)
    {
        if (is_array($oehdfrtcost)) {
            $useMinMax = false;
            if (isset($oehdfrtcost['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTCOST, $oehdfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrtcost['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTCOST, $oehdfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTCOST, $oehdfrtcost, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdroute($oehdroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDROUTE, $oehdroute, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdrouteseq($oehdrouteseq = null, $comparison = null)
    {
        if (is_array($oehdrouteseq)) {
            $useMinMax = false;
            if (isset($oehdrouteseq['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDROUTESEQ, $oehdrouteseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdrouteseq['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDROUTESEQ, $oehdrouteseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDROUTESEQ, $oehdrouteseq, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode1($oehdfrttaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXCODE1, $oehdfrttaxcode1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt1($oehdfrttaxamt1 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt1)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt1['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT1, $oehdfrttaxamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt1['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT1, $oehdfrttaxamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT1, $oehdfrttaxamt1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode2($oehdfrttaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXCODE2, $oehdfrttaxcode2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt2($oehdfrttaxamt2 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt2)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt2['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT2, $oehdfrttaxamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt2['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT2, $oehdfrttaxamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT2, $oehdfrttaxamt2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode3($oehdfrttaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXCODE3, $oehdfrttaxcode3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt3($oehdfrttaxamt3 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt3)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt3['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT3, $oehdfrttaxamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt3['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT3, $oehdfrttaxamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT3, $oehdfrttaxamt3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode4($oehdfrttaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXCODE4, $oehdfrttaxcode4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt4($oehdfrttaxamt4 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt4)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt4['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT4, $oehdfrttaxamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt4['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT4, $oehdfrttaxamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT4, $oehdfrttaxamt4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxcode5($oehdfrttaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrttaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXCODE5, $oehdfrttaxcode5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrttaxamt5($oehdfrttaxamt5 = null, $comparison = null)
    {
        if (is_array($oehdfrttaxamt5)) {
            $useMinMax = false;
            if (isset($oehdfrttaxamt5['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT5, $oehdfrttaxamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrttaxamt5['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT5, $oehdfrttaxamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTTAXAMT5, $oehdfrttaxamt5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdedi855sent($oehdedi855sent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdedi855sent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDEDI855SENT, $oehdedi855sent, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrt3rdparty($oehdfrt3rdparty = null, $comparison = null)
    {
        if (is_array($oehdfrt3rdparty)) {
            $useMinMax = false;
            if (isset($oehdfrt3rdparty['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRT3RDPARTY, $oehdfrt3rdparty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdfrt3rdparty['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRT3RDPARTY, $oehdfrt3rdparty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRT3RDPARTY, $oehdfrt3rdparty, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfob($oehdfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFOB, $oehdfob, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdconfirmimagyn($oehdconfirmimagyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdconfirmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN, $oehdconfirmimagyn, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdindustconform($oehdindustconform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdindustconform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDINDUSTCONFORM, $oehdindustconform, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcstkconsign($oehdcstkconsign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcstkconsign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCSTKCONSIGN, $oehdcstkconsign, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdlmdelaycapsent($oehdlmdelaycapsent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdlmdelaycapsent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT, $oehdlmdelaycapsent, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdmfgid($oehdmfgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdmfgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDMFGID, $oehdmfgid, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdstoreid($oehdstoreid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdstoreid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSTOREID, $oehdstoreid, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpickqueue($oehdpickqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPICKQUEUE, $oehdpickqueue, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdarrvdate($oehdarrvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdarrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDARRVDATE, $oehdarrvdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdsurchgstat($oehdsurchgstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdsurchgstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDSURCHGSTAT, $oehdsurchgstat, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdfrtgrup($oehdfrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDFRTGRUP, $oehdfrtgrup, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdcommoride($oehdcommoride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdcommoride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCOMMORIDE, $oehdcommoride, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdchrgsplt($oehdchrgsplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdchrgsplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDCHRGSPLT, $oehdchrgsplt, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdacccaprv($oehdacccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdacccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDACCCAPRV, $oehdacccaprv, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdorigordrnbr($oehdorigordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdorigordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDORIGORDRNBR, $oehdorigordrnbr, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdpostdate($oehdpostdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdpostdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDPOSTDATE, $oehdpostdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate1($oehddiscdate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCDATE1, $oehddiscdate1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct1($oehddiscpct1 = null, $comparison = null)
    {
        if (is_array($oehddiscpct1)) {
            $useMinMax = false;
            if (isset($oehddiscpct1['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT1, $oehddiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct1['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT1, $oehddiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT1, $oehddiscpct1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate1($oehdduedate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEDATE1, $oehdduedate1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt1($oehddueamt1 = null, $comparison = null)
    {
        if (is_array($oehddueamt1)) {
            $useMinMax = false;
            if (isset($oehddueamt1['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT1, $oehddueamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt1['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT1, $oehddueamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT1, $oehddueamt1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct1($oehdduepct1 = null, $comparison = null)
    {
        if (is_array($oehdduepct1)) {
            $useMinMax = false;
            if (isset($oehdduepct1['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT1, $oehdduepct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct1['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT1, $oehdduepct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT1, $oehdduepct1, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate2($oehddiscdate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCDATE2, $oehddiscdate2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct2($oehddiscpct2 = null, $comparison = null)
    {
        if (is_array($oehddiscpct2)) {
            $useMinMax = false;
            if (isset($oehddiscpct2['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT2, $oehddiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct2['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT2, $oehddiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT2, $oehddiscpct2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate2($oehdduedate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEDATE2, $oehdduedate2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt2($oehddueamt2 = null, $comparison = null)
    {
        if (is_array($oehddueamt2)) {
            $useMinMax = false;
            if (isset($oehddueamt2['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT2, $oehddueamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt2['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT2, $oehddueamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT2, $oehddueamt2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct2($oehdduepct2 = null, $comparison = null)
    {
        if (is_array($oehdduepct2)) {
            $useMinMax = false;
            if (isset($oehdduepct2['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT2, $oehdduepct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct2['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT2, $oehdduepct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT2, $oehdduepct2, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate3($oehddiscdate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCDATE3, $oehddiscdate3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct3($oehddiscpct3 = null, $comparison = null)
    {
        if (is_array($oehddiscpct3)) {
            $useMinMax = false;
            if (isset($oehddiscpct3['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT3, $oehddiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct3['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT3, $oehddiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT3, $oehddiscpct3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate3($oehdduedate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEDATE3, $oehdduedate3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt3($oehddueamt3 = null, $comparison = null)
    {
        if (is_array($oehddueamt3)) {
            $useMinMax = false;
            if (isset($oehddueamt3['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT3, $oehddueamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt3['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT3, $oehddueamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT3, $oehddueamt3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct3($oehdduepct3 = null, $comparison = null)
    {
        if (is_array($oehdduepct3)) {
            $useMinMax = false;
            if (isset($oehdduepct3['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT3, $oehdduepct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct3['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT3, $oehdduepct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT3, $oehdduepct3, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate4($oehddiscdate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCDATE4, $oehddiscdate4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct4($oehddiscpct4 = null, $comparison = null)
    {
        if (is_array($oehddiscpct4)) {
            $useMinMax = false;
            if (isset($oehddiscpct4['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT4, $oehddiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct4['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT4, $oehddiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT4, $oehddiscpct4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate4($oehdduedate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEDATE4, $oehdduedate4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt4($oehddueamt4 = null, $comparison = null)
    {
        if (is_array($oehddueamt4)) {
            $useMinMax = false;
            if (isset($oehddueamt4['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT4, $oehddueamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt4['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT4, $oehddueamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT4, $oehddueamt4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct4($oehdduepct4 = null, $comparison = null)
    {
        if (is_array($oehdduepct4)) {
            $useMinMax = false;
            if (isset($oehdduepct4['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT4, $oehdduepct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct4['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT4, $oehdduepct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT4, $oehdduepct4, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate5($oehddiscdate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCDATE5, $oehddiscdate5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct5($oehddiscpct5 = null, $comparison = null)
    {
        if (is_array($oehddiscpct5)) {
            $useMinMax = false;
            if (isset($oehddiscpct5['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT5, $oehddiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct5['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT5, $oehddiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT5, $oehddiscpct5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate5($oehdduedate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEDATE5, $oehdduedate5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt5($oehddueamt5 = null, $comparison = null)
    {
        if (is_array($oehddueamt5)) {
            $useMinMax = false;
            if (isset($oehddueamt5['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT5, $oehddueamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt5['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT5, $oehddueamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT5, $oehddueamt5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct5($oehdduepct5 = null, $comparison = null)
    {
        if (is_array($oehdduepct5)) {
            $useMinMax = false;
            if (isset($oehdduepct5['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT5, $oehdduepct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct5['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT5, $oehdduepct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT5, $oehdduepct5, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscdate6($oehddiscdate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehddiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCDATE6, $oehddiscdate6, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddiscpct6($oehddiscpct6 = null, $comparison = null)
    {
        if (is_array($oehddiscpct6)) {
            $useMinMax = false;
            if (isset($oehddiscpct6['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT6, $oehddiscpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddiscpct6['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT6, $oehddiscpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDISCPCT6, $oehddiscpct6, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduedate6($oehdduedate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEDATE6, $oehdduedate6, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehddueamt6($oehddueamt6 = null, $comparison = null)
    {
        if (is_array($oehddueamt6)) {
            $useMinMax = false;
            if (isset($oehddueamt6['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT6, $oehddueamt6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehddueamt6['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT6, $oehddueamt6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEAMT6, $oehddueamt6, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdduepct6($oehdduepct6 = null, $comparison = null)
    {
        if (is_array($oehdduepct6)) {
            $useMinMax = false;
            if (isset($oehdduepct6['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT6, $oehdduepct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdduepct6['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT6, $oehdduepct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDDUEPCT6, $oehdduepct6, $comparison);
    }

    /**
     * Filter the query on the OehdRefNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdrefnbr('fooValue');   // WHERE OehdRefNbr = 'fooValue'
     * $query->filterByOehdrefnbr('%fooValue%', Criteria::LIKE); // WHERE OehdRefNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdrefnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdrefnbr($oehdrefnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdrefnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDREFNBR, $oehdrefnbr, $comparison);
    }

    /**
     * Filter the query on the OehdAcProgNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdacprognbr('fooValue');   // WHERE OehdAcProgNbr = 'fooValue'
     * $query->filterByOehdacprognbr('%fooValue%', Criteria::LIKE); // WHERE OehdAcProgNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdacprognbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdacprognbr($oehdacprognbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdacprognbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDACPROGNBR, $oehdacprognbr, $comparison);
    }

    /**
     * Filter the query on the OehdAcProgExpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdacprogexpdate('fooValue');   // WHERE OehdAcProgExpDate = 'fooValue'
     * $query->filterByOehdacprogexpdate('%fooValue%', Criteria::LIKE); // WHERE OehdAcProgExpDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdacprogexpdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOehdacprogexpdate($oehdacprogexpdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdacprogexpdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_OEHDACPROGEXPDATE, $oehdacprogexpdate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
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
     * @return ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(SalesOrderTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
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
     * Filter the query by a related \SalesOrderDetail object
     *
     * @param \SalesOrderDetail|ObjectCollection $salesOrderDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesOrderDetail($salesOrderDetail, $comparison = null)
    {
        if ($salesOrderDetail instanceof \SalesOrderDetail) {
            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $salesOrderDetail->getOehdnbr(), $comparison);
        } elseif ($salesOrderDetail instanceof ObjectCollection) {
            return $this
                ->useSalesOrderDetailQuery()
                ->filterByPrimaryKeys($salesOrderDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesOrderDetail() only accepts arguments of type \SalesOrderDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function joinSalesOrderDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderDetail');

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
            $this->addJoinObject($join, 'SalesOrderDetail');
        }

        return $this;
    }

    /**
     * Use the SalesOrderDetail relation SalesOrderDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderDetail', '\SalesOrderDetailQuery');
    }

    /**
     * Filter the query by a related \SalesOrderShipment object
     *
     * @param \SalesOrderShipment|ObjectCollection $salesOrderShipment the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesOrderShipment($salesOrderShipment, $comparison = null)
    {
        if ($salesOrderShipment instanceof \SalesOrderShipment) {
            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $salesOrderShipment->getOehshnbr(), $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
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
     * Filter the query by a related \SalesOrderLotserial object
     *
     * @param \SalesOrderLotserial|ObjectCollection $salesOrderLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesOrderLotserial($salesOrderLotserial, $comparison = null)
    {
        if ($salesOrderLotserial instanceof \SalesOrderLotserial) {
            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $salesOrderLotserial->getOehdnbr(), $comparison);
        } elseif ($salesOrderLotserial instanceof ObjectCollection) {
            return $this
                ->useSalesOrderLotserialQuery()
                ->filterByPrimaryKeys($salesOrderLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesOrderLotserial() only accepts arguments of type \SalesOrderLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function joinSalesOrderLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderLotserial');

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
            $this->addJoinObject($join, 'SalesOrderLotserial');
        }

        return $this;
    }

    /**
     * Use the SalesOrderLotserial relation SalesOrderLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderLotserial', '\SalesOrderLotserialQuery');
    }

    /**
     * Filter the query by a related \SoAllocatedLotserial object
     *
     * @param \SoAllocatedLotserial|ObjectCollection $soAllocatedLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySoAllocatedLotserial($soAllocatedLotserial, $comparison = null)
    {
        if ($soAllocatedLotserial instanceof \SoAllocatedLotserial) {
            return $this
                ->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $soAllocatedLotserial->getOehdnbr(), $comparison);
        } elseif ($soAllocatedLotserial instanceof ObjectCollection) {
            return $this
                ->useSoAllocatedLotserialQuery()
                ->filterByPrimaryKeys($soAllocatedLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySoAllocatedLotserial() only accepts arguments of type \SoAllocatedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoAllocatedLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function joinSoAllocatedLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoAllocatedLotserial');

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
            $this->addJoinObject($join, 'SoAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoAllocatedLotserial', '\SoAllocatedLotserialQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesOrder $salesOrder Object to remove from the list of results
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function prune($salesOrder = null)
    {
        if ($salesOrder) {
            $this->addUsingAlias(SalesOrderTableMap::COL_OEHDNBR, $salesOrder->getOehdnbr(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderTableMap::clearInstancePool();
            SalesOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesOrderQuery
