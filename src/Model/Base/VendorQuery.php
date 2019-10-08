<?php

namespace Base;

use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \Exception;
use \PDO;
use Map\VendorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_vend_mast' table.
 *
 *
 *
 * @method     ChildVendorQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildVendorQuery orderByApvename($order = Criteria::ASC) Order by the ApveName column
 * @method     ChildVendorQuery orderByApveadr1($order = Criteria::ASC) Order by the ApveAdr1 column
 * @method     ChildVendorQuery orderByApveadr2($order = Criteria::ASC) Order by the ApveAdr2 column
 * @method     ChildVendorQuery orderByApveadr3($order = Criteria::ASC) Order by the ApveAdr3 column
 * @method     ChildVendorQuery orderByApvectry($order = Criteria::ASC) Order by the ApveCtry column
 * @method     ChildVendorQuery orderByApvecity($order = Criteria::ASC) Order by the ApveCity column
 * @method     ChildVendorQuery orderByApvestat($order = Criteria::ASC) Order by the ApveStat column
 * @method     ChildVendorQuery orderByApvezipcode($order = Criteria::ASC) Order by the ApveZipCode column
 * @method     ChildVendorQuery orderByApvepayname($order = Criteria::ASC) Order by the ApvePayName column
 * @method     ChildVendorQuery orderByApvepayadr1($order = Criteria::ASC) Order by the ApvePayAdr1 column
 * @method     ChildVendorQuery orderByApvepayadr2($order = Criteria::ASC) Order by the ApvePayAdr2 column
 * @method     ChildVendorQuery orderByApvepayadr3($order = Criteria::ASC) Order by the ApvePayAdr3 column
 * @method     ChildVendorQuery orderByApvepayctry($order = Criteria::ASC) Order by the ApvePayCtry column
 * @method     ChildVendorQuery orderByApvepaycity($order = Criteria::ASC) Order by the ApvePayCity column
 * @method     ChildVendorQuery orderByApvepaystat($order = Criteria::ASC) Order by the ApvePayStat column
 * @method     ChildVendorQuery orderByApvepayzipcode($order = Criteria::ASC) Order by the ApvePayZipCode column
 * @method     ChildVendorQuery orderByApvestatus($order = Criteria::ASC) Order by the ApveStatus column
 * @method     ChildVendorQuery orderByApvetakeexpireddisc($order = Criteria::ASC) Order by the ApveTakeExpiredDisc column
 * @method     ChildVendorQuery orderByApveprinthts($order = Criteria::ASC) Order by the ApvePrintHts column
 * @method     ChildVendorQuery orderByApvefabbin($order = Criteria::ASC) Order by the ApveFabBin column
 * @method     ChildVendorQuery orderByApvelmprntbulk($order = Criteria::ASC) Order by the ApveLmPrntBulk column
 * @method     ChildVendorQuery orderByApveallowdropship($order = Criteria::ASC) Order by the ApveAllowDropShip column
 * @method     ChildVendorQuery orderByAptbtypecode($order = Criteria::ASC) Order by the AptbTypeCode column
 * @method     ChildVendorQuery orderByAptmtermcode($order = Criteria::ASC) Order by the AptmTermCode column
 * @method     ChildVendorQuery orderByApvesviacode($order = Criteria::ASC) Order by the ApveSviaCode column
 * @method     ChildVendorQuery orderByApveoldfob($order = Criteria::ASC) Order by the ApveOldFob column
 * @method     ChildVendorQuery orderByApveleaddays($order = Criteria::ASC) Order by the ApveLeadDays column
 * @method     ChildVendorQuery orderByApveglacct($order = Criteria::ASC) Order by the ApveGlAcct column
 * @method     ChildVendorQuery orderByApve1099ssnbr($order = Criteria::ASC) Order by the Apve1099SsNbr column
 * @method     ChildVendorQuery orderByApveminordrcode($order = Criteria::ASC) Order by the ApveMinOrdrCode column
 * @method     ChildVendorQuery orderByApveminordrvalue($order = Criteria::ASC) Order by the ApveMinOrdrValue column
 * @method     ChildVendorQuery orderByApvepurmtd($order = Criteria::ASC) Order by the ApvePurMtd column
 * @method     ChildVendorQuery orderByApvepomtd($order = Criteria::ASC) Order by the ApvePoMtd column
 * @method     ChildVendorQuery orderByApveinvcmtd($order = Criteria::ASC) Order by the ApveInvcMtd column
 * @method     ChildVendorQuery orderByApveicntmtd($order = Criteria::ASC) Order by the ApveIcntMtd column
 * @method     ChildVendorQuery orderByApvedateopen($order = Criteria::ASC) Order by the ApveDateOpen column
 * @method     ChildVendorQuery orderByApvelastpurdate($order = Criteria::ASC) Order by the ApveLastPurDate column
 * @method     ChildVendorQuery orderByApvepur24mo01($order = Criteria::ASC) Order by the ApvePur24mo01 column
 * @method     ChildVendorQuery orderByApvepo24mo01($order = Criteria::ASC) Order by the ApvePo24mo01 column
 * @method     ChildVendorQuery orderByApveinvc24mo01($order = Criteria::ASC) Order by the ApveInvc24mo01 column
 * @method     ChildVendorQuery orderByApveicnt24mo01($order = Criteria::ASC) Order by the ApveIcnt24mo01 column
 * @method     ChildVendorQuery orderByApvepur24mo02($order = Criteria::ASC) Order by the ApvePur24mo02 column
 * @method     ChildVendorQuery orderByApvepo24mo02($order = Criteria::ASC) Order by the ApvePo24mo02 column
 * @method     ChildVendorQuery orderByApveinvc24mo02($order = Criteria::ASC) Order by the ApveInvc24mo02 column
 * @method     ChildVendorQuery orderByApveicnt24mo02($order = Criteria::ASC) Order by the ApveIcnt24mo02 column
 * @method     ChildVendorQuery orderByApvepur24mo03($order = Criteria::ASC) Order by the ApvePur24mo03 column
 * @method     ChildVendorQuery orderByApvepo24mo03($order = Criteria::ASC) Order by the ApvePo24mo03 column
 * @method     ChildVendorQuery orderByApveinvc24mo03($order = Criteria::ASC) Order by the ApveInvc24mo03 column
 * @method     ChildVendorQuery orderByApveicnt24mo03($order = Criteria::ASC) Order by the ApveIcnt24mo03 column
 * @method     ChildVendorQuery orderByApvepur24mo04($order = Criteria::ASC) Order by the ApvePur24mo04 column
 * @method     ChildVendorQuery orderByApvepo24mo04($order = Criteria::ASC) Order by the ApvePo24mo04 column
 * @method     ChildVendorQuery orderByApveinvc24mo04($order = Criteria::ASC) Order by the ApveInvc24mo04 column
 * @method     ChildVendorQuery orderByApveicnt24mo04($order = Criteria::ASC) Order by the ApveIcnt24mo04 column
 * @method     ChildVendorQuery orderByApvepur24mo05($order = Criteria::ASC) Order by the ApvePur24mo05 column
 * @method     ChildVendorQuery orderByApvepo24mo05($order = Criteria::ASC) Order by the ApvePo24mo05 column
 * @method     ChildVendorQuery orderByApveinvc24mo05($order = Criteria::ASC) Order by the ApveInvc24mo05 column
 * @method     ChildVendorQuery orderByApveicnt24mo05($order = Criteria::ASC) Order by the ApveIcnt24mo05 column
 * @method     ChildVendorQuery orderByApvepur24mo06($order = Criteria::ASC) Order by the ApvePur24mo06 column
 * @method     ChildVendorQuery orderByApvepo24mo06($order = Criteria::ASC) Order by the ApvePo24mo06 column
 * @method     ChildVendorQuery orderByApveinvc24mo06($order = Criteria::ASC) Order by the ApveInvc24mo06 column
 * @method     ChildVendorQuery orderByApveicnt24mo06($order = Criteria::ASC) Order by the ApveIcnt24mo06 column
 * @method     ChildVendorQuery orderByApvepur24mo07($order = Criteria::ASC) Order by the ApvePur24mo07 column
 * @method     ChildVendorQuery orderByApvepo24mo07($order = Criteria::ASC) Order by the ApvePo24mo07 column
 * @method     ChildVendorQuery orderByApveinvc24mo07($order = Criteria::ASC) Order by the ApveInvc24mo07 column
 * @method     ChildVendorQuery orderByApveicnt24mo07($order = Criteria::ASC) Order by the ApveIcnt24mo07 column
 * @method     ChildVendorQuery orderByApvepur24mo08($order = Criteria::ASC) Order by the ApvePur24mo08 column
 * @method     ChildVendorQuery orderByApvepo24mo08($order = Criteria::ASC) Order by the ApvePo24mo08 column
 * @method     ChildVendorQuery orderByApveinvc24mo08($order = Criteria::ASC) Order by the ApveInvc24mo08 column
 * @method     ChildVendorQuery orderByApveicnt24mo08($order = Criteria::ASC) Order by the ApveIcnt24mo08 column
 * @method     ChildVendorQuery orderByApvepur24mo09($order = Criteria::ASC) Order by the ApvePur24mo09 column
 * @method     ChildVendorQuery orderByApvepo24mo09($order = Criteria::ASC) Order by the ApvePo24mo09 column
 * @method     ChildVendorQuery orderByApveinvc24mo09($order = Criteria::ASC) Order by the ApveInvc24mo09 column
 * @method     ChildVendorQuery orderByApveicnt24mo09($order = Criteria::ASC) Order by the ApveIcnt24mo09 column
 * @method     ChildVendorQuery orderByApvepur24mo10($order = Criteria::ASC) Order by the ApvePur24mo10 column
 * @method     ChildVendorQuery orderByApvepo24mo10($order = Criteria::ASC) Order by the ApvePo24mo10 column
 * @method     ChildVendorQuery orderByApveinvc24mo10($order = Criteria::ASC) Order by the ApveInvc24mo10 column
 * @method     ChildVendorQuery orderByApveicnt24mo10($order = Criteria::ASC) Order by the ApveIcnt24mo10 column
 * @method     ChildVendorQuery orderByApvepur24mo11($order = Criteria::ASC) Order by the ApvePur24mo11 column
 * @method     ChildVendorQuery orderByApvepo24mo11($order = Criteria::ASC) Order by the ApvePo24mo11 column
 * @method     ChildVendorQuery orderByApveinvc24mo11($order = Criteria::ASC) Order by the ApveInvc24mo11 column
 * @method     ChildVendorQuery orderByApveicnt24mo11($order = Criteria::ASC) Order by the ApveIcnt24mo11 column
 * @method     ChildVendorQuery orderByApvepur24mo12($order = Criteria::ASC) Order by the ApvePur24mo12 column
 * @method     ChildVendorQuery orderByApvepo24mo12($order = Criteria::ASC) Order by the ApvePo24mo12 column
 * @method     ChildVendorQuery orderByApveinvc24mo12($order = Criteria::ASC) Order by the ApveInvc24mo12 column
 * @method     ChildVendorQuery orderByApveicnt24mo12($order = Criteria::ASC) Order by the ApveIcnt24mo12 column
 * @method     ChildVendorQuery orderByApvepur24mo13($order = Criteria::ASC) Order by the ApvePur24mo13 column
 * @method     ChildVendorQuery orderByApvepo24mo13($order = Criteria::ASC) Order by the ApvePo24mo13 column
 * @method     ChildVendorQuery orderByApveinvc24mo13($order = Criteria::ASC) Order by the ApveInvc24mo13 column
 * @method     ChildVendorQuery orderByApveicnt24mo13($order = Criteria::ASC) Order by the ApveIcnt24mo13 column
 * @method     ChildVendorQuery orderByApvepur24mo14($order = Criteria::ASC) Order by the ApvePur24mo14 column
 * @method     ChildVendorQuery orderByApvepo24mo14($order = Criteria::ASC) Order by the ApvePo24mo14 column
 * @method     ChildVendorQuery orderByApveinvc24mo14($order = Criteria::ASC) Order by the ApveInvc24mo14 column
 * @method     ChildVendorQuery orderByApveicnt24mo14($order = Criteria::ASC) Order by the ApveIcnt24mo14 column
 * @method     ChildVendorQuery orderByApvepur24mo15($order = Criteria::ASC) Order by the ApvePur24mo15 column
 * @method     ChildVendorQuery orderByApvepo24mo15($order = Criteria::ASC) Order by the ApvePo24mo15 column
 * @method     ChildVendorQuery orderByApveinvc24mo15($order = Criteria::ASC) Order by the ApveInvc24mo15 column
 * @method     ChildVendorQuery orderByApveicnt24mo15($order = Criteria::ASC) Order by the ApveIcnt24mo15 column
 * @method     ChildVendorQuery orderByApvepur24mo16($order = Criteria::ASC) Order by the ApvePur24mo16 column
 * @method     ChildVendorQuery orderByApvepo24mo16($order = Criteria::ASC) Order by the ApvePo24mo16 column
 * @method     ChildVendorQuery orderByApveinvc24mo16($order = Criteria::ASC) Order by the ApveInvc24mo16 column
 * @method     ChildVendorQuery orderByApveicnt24mo16($order = Criteria::ASC) Order by the ApveIcnt24mo16 column
 * @method     ChildVendorQuery orderByApvepur24mo17($order = Criteria::ASC) Order by the ApvePur24mo17 column
 * @method     ChildVendorQuery orderByApvepo24mo17($order = Criteria::ASC) Order by the ApvePo24mo17 column
 * @method     ChildVendorQuery orderByApveinvc24mo17($order = Criteria::ASC) Order by the ApveInvc24mo17 column
 * @method     ChildVendorQuery orderByApveicnt24mo17($order = Criteria::ASC) Order by the ApveIcnt24mo17 column
 * @method     ChildVendorQuery orderByApvepur24mo18($order = Criteria::ASC) Order by the ApvePur24mo18 column
 * @method     ChildVendorQuery orderByApvepo24mo18($order = Criteria::ASC) Order by the ApvePo24mo18 column
 * @method     ChildVendorQuery orderByApveinvc24mo18($order = Criteria::ASC) Order by the ApveInvc24mo18 column
 * @method     ChildVendorQuery orderByApveicnt24mo18($order = Criteria::ASC) Order by the ApveIcnt24mo18 column
 * @method     ChildVendorQuery orderByApvepur24mo19($order = Criteria::ASC) Order by the ApvePur24mo19 column
 * @method     ChildVendorQuery orderByApvepo24mo19($order = Criteria::ASC) Order by the ApvePo24mo19 column
 * @method     ChildVendorQuery orderByApveinvc24mo19($order = Criteria::ASC) Order by the ApveInvc24mo19 column
 * @method     ChildVendorQuery orderByApveicnt24mo19($order = Criteria::ASC) Order by the ApveIcnt24mo19 column
 * @method     ChildVendorQuery orderByApvepur24mo20($order = Criteria::ASC) Order by the ApvePur24mo20 column
 * @method     ChildVendorQuery orderByApvepo24mo20($order = Criteria::ASC) Order by the ApvePo24mo20 column
 * @method     ChildVendorQuery orderByApveinvc24mo20($order = Criteria::ASC) Order by the ApveInvc24mo20 column
 * @method     ChildVendorQuery orderByApveicnt24mo20($order = Criteria::ASC) Order by the ApveIcnt24mo20 column
 * @method     ChildVendorQuery orderByApvepur24mo21($order = Criteria::ASC) Order by the ApvePur24mo21 column
 * @method     ChildVendorQuery orderByApvepo24mo21($order = Criteria::ASC) Order by the ApvePo24mo21 column
 * @method     ChildVendorQuery orderByApveinvc24mo21($order = Criteria::ASC) Order by the ApveInvc24mo21 column
 * @method     ChildVendorQuery orderByApveicnt24mo21($order = Criteria::ASC) Order by the ApveIcnt24mo21 column
 * @method     ChildVendorQuery orderByApvepur24mo22($order = Criteria::ASC) Order by the ApvePur24mo22 column
 * @method     ChildVendorQuery orderByApvepo24mo22($order = Criteria::ASC) Order by the ApvePo24mo22 column
 * @method     ChildVendorQuery orderByApveinvc24mo22($order = Criteria::ASC) Order by the ApveInvc24mo22 column
 * @method     ChildVendorQuery orderByApveicnt24mo22($order = Criteria::ASC) Order by the ApveIcnt24mo22 column
 * @method     ChildVendorQuery orderByApvepur24mo23($order = Criteria::ASC) Order by the ApvePur24mo23 column
 * @method     ChildVendorQuery orderByApvepo24mo23($order = Criteria::ASC) Order by the ApvePo24mo23 column
 * @method     ChildVendorQuery orderByApveinvc24mo23($order = Criteria::ASC) Order by the ApveInvc24mo23 column
 * @method     ChildVendorQuery orderByApveicnt24mo23($order = Criteria::ASC) Order by the ApveIcnt24mo23 column
 * @method     ChildVendorQuery orderByApvepur24mo24($order = Criteria::ASC) Order by the ApvePur24mo24 column
 * @method     ChildVendorQuery orderByApvepo24mo24($order = Criteria::ASC) Order by the ApvePo24mo24 column
 * @method     ChildVendorQuery orderByApveinvc24mo24($order = Criteria::ASC) Order by the ApveInvc24mo24 column
 * @method     ChildVendorQuery orderByApveicnt24mo24($order = Criteria::ASC) Order by the ApveIcnt24mo24 column
 * @method     ChildVendorQuery orderByApvecrncy($order = Criteria::ASC) Order by the ApveCrncy column
 * @method     ChildVendorQuery orderByApvefrtinamt($order = Criteria::ASC) Order by the ApveFrtInAmt column
 * @method     ChildVendorQuery orderByApveouracctnbr($order = Criteria::ASC) Order by the ApveOurAcctNbr column
 * @method     ChildVendorQuery orderByApvevenddisc($order = Criteria::ASC) Order by the ApveVendDisc column
 * @method     ChildVendorQuery orderByApvefob($order = Criteria::ASC) Order by the ApveFob column
 * @method     ChildVendorQuery orderByApveroylpct($order = Criteria::ASC) Order by the ApveRoylPct column
 * @method     ChildVendorQuery orderByApveprtpoeoru($order = Criteria::ASC) Order by the ApvePrtPoEOrU column
 * @method     ChildVendorQuery orderByApvecomrate($order = Criteria::ASC) Order by the ApveComRate column
 * @method     ChildVendorQuery orderByApveuselandonrcpt($order = Criteria::ASC) Order by the ApveUseLandOnRcpt column
 * @method     ChildVendorQuery orderByApvebuyrwhse1($order = Criteria::ASC) Order by the ApveBuyrWhse1 column
 * @method     ChildVendorQuery orderByApvebuyrcode1($order = Criteria::ASC) Order by the ApveBuyrCode1 column
 * @method     ChildVendorQuery orderByApvebuyrwhse2($order = Criteria::ASC) Order by the ApveBuyrWhse2 column
 * @method     ChildVendorQuery orderByApvebuyrcode2($order = Criteria::ASC) Order by the ApveBuyrCode2 column
 * @method     ChildVendorQuery orderByApvebuyrwhse3($order = Criteria::ASC) Order by the ApveBuyrWhse3 column
 * @method     ChildVendorQuery orderByApvebuyrcode3($order = Criteria::ASC) Order by the ApveBuyrCode3 column
 * @method     ChildVendorQuery orderByApvebuyrwhse4($order = Criteria::ASC) Order by the ApveBuyrWhse4 column
 * @method     ChildVendorQuery orderByApvebuyrcode4($order = Criteria::ASC) Order by the ApveBuyrCode4 column
 * @method     ChildVendorQuery orderByApvebuyrwhse5($order = Criteria::ASC) Order by the ApveBuyrWhse5 column
 * @method     ChildVendorQuery orderByApvebuyrcode5($order = Criteria::ASC) Order by the ApveBuyrCode5 column
 * @method     ChildVendorQuery orderByApvebuyrwhse6($order = Criteria::ASC) Order by the ApveBuyrWhse6 column
 * @method     ChildVendorQuery orderByApvebuyrcode6($order = Criteria::ASC) Order by the ApveBuyrCode6 column
 * @method     ChildVendorQuery orderByApvebuyrwhse7($order = Criteria::ASC) Order by the ApveBuyrWhse7 column
 * @method     ChildVendorQuery orderByApvebuyrcode7($order = Criteria::ASC) Order by the ApveBuyrCode7 column
 * @method     ChildVendorQuery orderByApvebuyrwhse8($order = Criteria::ASC) Order by the ApveBuyrWhse8 column
 * @method     ChildVendorQuery orderByApvebuyrcode8($order = Criteria::ASC) Order by the ApveBuyrCode8 column
 * @method     ChildVendorQuery orderByApvebuyrwhse9($order = Criteria::ASC) Order by the ApveBuyrWhse9 column
 * @method     ChildVendorQuery orderByApvebuyrcode9($order = Criteria::ASC) Order by the ApveBuyrCode9 column
 * @method     ChildVendorQuery orderByApvebuyrwhse10($order = Criteria::ASC) Order by the ApveBuyrWhse10 column
 * @method     ChildVendorQuery orderByApvebuyrcode10($order = Criteria::ASC) Order by the ApveBuyrCode10 column
 * @method     ChildVendorQuery orderByApvelandcost($order = Criteria::ASC) Order by the ApveLandCost column
 * @method     ChildVendorQuery orderByApvereleasenbr($order = Criteria::ASC) Order by the ApveReleaseNbr column
 * @method     ChildVendorQuery orderByApvescanstartpos($order = Criteria::ASC) Order by the ApveScanStartPos column
 * @method     ChildVendorQuery orderByApvescanlength($order = Criteria::ASC) Order by the ApveScanLength column
 * @method     ChildVendorQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildVendorQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildVendorQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildVendorQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildVendorQuery groupByApvename() Group by the ApveName column
 * @method     ChildVendorQuery groupByApveadr1() Group by the ApveAdr1 column
 * @method     ChildVendorQuery groupByApveadr2() Group by the ApveAdr2 column
 * @method     ChildVendorQuery groupByApveadr3() Group by the ApveAdr3 column
 * @method     ChildVendorQuery groupByApvectry() Group by the ApveCtry column
 * @method     ChildVendorQuery groupByApvecity() Group by the ApveCity column
 * @method     ChildVendorQuery groupByApvestat() Group by the ApveStat column
 * @method     ChildVendorQuery groupByApvezipcode() Group by the ApveZipCode column
 * @method     ChildVendorQuery groupByApvepayname() Group by the ApvePayName column
 * @method     ChildVendorQuery groupByApvepayadr1() Group by the ApvePayAdr1 column
 * @method     ChildVendorQuery groupByApvepayadr2() Group by the ApvePayAdr2 column
 * @method     ChildVendorQuery groupByApvepayadr3() Group by the ApvePayAdr3 column
 * @method     ChildVendorQuery groupByApvepayctry() Group by the ApvePayCtry column
 * @method     ChildVendorQuery groupByApvepaycity() Group by the ApvePayCity column
 * @method     ChildVendorQuery groupByApvepaystat() Group by the ApvePayStat column
 * @method     ChildVendorQuery groupByApvepayzipcode() Group by the ApvePayZipCode column
 * @method     ChildVendorQuery groupByApvestatus() Group by the ApveStatus column
 * @method     ChildVendorQuery groupByApvetakeexpireddisc() Group by the ApveTakeExpiredDisc column
 * @method     ChildVendorQuery groupByApveprinthts() Group by the ApvePrintHts column
 * @method     ChildVendorQuery groupByApvefabbin() Group by the ApveFabBin column
 * @method     ChildVendorQuery groupByApvelmprntbulk() Group by the ApveLmPrntBulk column
 * @method     ChildVendorQuery groupByApveallowdropship() Group by the ApveAllowDropShip column
 * @method     ChildVendorQuery groupByAptbtypecode() Group by the AptbTypeCode column
 * @method     ChildVendorQuery groupByAptmtermcode() Group by the AptmTermCode column
 * @method     ChildVendorQuery groupByApvesviacode() Group by the ApveSviaCode column
 * @method     ChildVendorQuery groupByApveoldfob() Group by the ApveOldFob column
 * @method     ChildVendorQuery groupByApveleaddays() Group by the ApveLeadDays column
 * @method     ChildVendorQuery groupByApveglacct() Group by the ApveGlAcct column
 * @method     ChildVendorQuery groupByApve1099ssnbr() Group by the Apve1099SsNbr column
 * @method     ChildVendorQuery groupByApveminordrcode() Group by the ApveMinOrdrCode column
 * @method     ChildVendorQuery groupByApveminordrvalue() Group by the ApveMinOrdrValue column
 * @method     ChildVendorQuery groupByApvepurmtd() Group by the ApvePurMtd column
 * @method     ChildVendorQuery groupByApvepomtd() Group by the ApvePoMtd column
 * @method     ChildVendorQuery groupByApveinvcmtd() Group by the ApveInvcMtd column
 * @method     ChildVendorQuery groupByApveicntmtd() Group by the ApveIcntMtd column
 * @method     ChildVendorQuery groupByApvedateopen() Group by the ApveDateOpen column
 * @method     ChildVendorQuery groupByApvelastpurdate() Group by the ApveLastPurDate column
 * @method     ChildVendorQuery groupByApvepur24mo01() Group by the ApvePur24mo01 column
 * @method     ChildVendorQuery groupByApvepo24mo01() Group by the ApvePo24mo01 column
 * @method     ChildVendorQuery groupByApveinvc24mo01() Group by the ApveInvc24mo01 column
 * @method     ChildVendorQuery groupByApveicnt24mo01() Group by the ApveIcnt24mo01 column
 * @method     ChildVendorQuery groupByApvepur24mo02() Group by the ApvePur24mo02 column
 * @method     ChildVendorQuery groupByApvepo24mo02() Group by the ApvePo24mo02 column
 * @method     ChildVendorQuery groupByApveinvc24mo02() Group by the ApveInvc24mo02 column
 * @method     ChildVendorQuery groupByApveicnt24mo02() Group by the ApveIcnt24mo02 column
 * @method     ChildVendorQuery groupByApvepur24mo03() Group by the ApvePur24mo03 column
 * @method     ChildVendorQuery groupByApvepo24mo03() Group by the ApvePo24mo03 column
 * @method     ChildVendorQuery groupByApveinvc24mo03() Group by the ApveInvc24mo03 column
 * @method     ChildVendorQuery groupByApveicnt24mo03() Group by the ApveIcnt24mo03 column
 * @method     ChildVendorQuery groupByApvepur24mo04() Group by the ApvePur24mo04 column
 * @method     ChildVendorQuery groupByApvepo24mo04() Group by the ApvePo24mo04 column
 * @method     ChildVendorQuery groupByApveinvc24mo04() Group by the ApveInvc24mo04 column
 * @method     ChildVendorQuery groupByApveicnt24mo04() Group by the ApveIcnt24mo04 column
 * @method     ChildVendorQuery groupByApvepur24mo05() Group by the ApvePur24mo05 column
 * @method     ChildVendorQuery groupByApvepo24mo05() Group by the ApvePo24mo05 column
 * @method     ChildVendorQuery groupByApveinvc24mo05() Group by the ApveInvc24mo05 column
 * @method     ChildVendorQuery groupByApveicnt24mo05() Group by the ApveIcnt24mo05 column
 * @method     ChildVendorQuery groupByApvepur24mo06() Group by the ApvePur24mo06 column
 * @method     ChildVendorQuery groupByApvepo24mo06() Group by the ApvePo24mo06 column
 * @method     ChildVendorQuery groupByApveinvc24mo06() Group by the ApveInvc24mo06 column
 * @method     ChildVendorQuery groupByApveicnt24mo06() Group by the ApveIcnt24mo06 column
 * @method     ChildVendorQuery groupByApvepur24mo07() Group by the ApvePur24mo07 column
 * @method     ChildVendorQuery groupByApvepo24mo07() Group by the ApvePo24mo07 column
 * @method     ChildVendorQuery groupByApveinvc24mo07() Group by the ApveInvc24mo07 column
 * @method     ChildVendorQuery groupByApveicnt24mo07() Group by the ApveIcnt24mo07 column
 * @method     ChildVendorQuery groupByApvepur24mo08() Group by the ApvePur24mo08 column
 * @method     ChildVendorQuery groupByApvepo24mo08() Group by the ApvePo24mo08 column
 * @method     ChildVendorQuery groupByApveinvc24mo08() Group by the ApveInvc24mo08 column
 * @method     ChildVendorQuery groupByApveicnt24mo08() Group by the ApveIcnt24mo08 column
 * @method     ChildVendorQuery groupByApvepur24mo09() Group by the ApvePur24mo09 column
 * @method     ChildVendorQuery groupByApvepo24mo09() Group by the ApvePo24mo09 column
 * @method     ChildVendorQuery groupByApveinvc24mo09() Group by the ApveInvc24mo09 column
 * @method     ChildVendorQuery groupByApveicnt24mo09() Group by the ApveIcnt24mo09 column
 * @method     ChildVendorQuery groupByApvepur24mo10() Group by the ApvePur24mo10 column
 * @method     ChildVendorQuery groupByApvepo24mo10() Group by the ApvePo24mo10 column
 * @method     ChildVendorQuery groupByApveinvc24mo10() Group by the ApveInvc24mo10 column
 * @method     ChildVendorQuery groupByApveicnt24mo10() Group by the ApveIcnt24mo10 column
 * @method     ChildVendorQuery groupByApvepur24mo11() Group by the ApvePur24mo11 column
 * @method     ChildVendorQuery groupByApvepo24mo11() Group by the ApvePo24mo11 column
 * @method     ChildVendorQuery groupByApveinvc24mo11() Group by the ApveInvc24mo11 column
 * @method     ChildVendorQuery groupByApveicnt24mo11() Group by the ApveIcnt24mo11 column
 * @method     ChildVendorQuery groupByApvepur24mo12() Group by the ApvePur24mo12 column
 * @method     ChildVendorQuery groupByApvepo24mo12() Group by the ApvePo24mo12 column
 * @method     ChildVendorQuery groupByApveinvc24mo12() Group by the ApveInvc24mo12 column
 * @method     ChildVendorQuery groupByApveicnt24mo12() Group by the ApveIcnt24mo12 column
 * @method     ChildVendorQuery groupByApvepur24mo13() Group by the ApvePur24mo13 column
 * @method     ChildVendorQuery groupByApvepo24mo13() Group by the ApvePo24mo13 column
 * @method     ChildVendorQuery groupByApveinvc24mo13() Group by the ApveInvc24mo13 column
 * @method     ChildVendorQuery groupByApveicnt24mo13() Group by the ApveIcnt24mo13 column
 * @method     ChildVendorQuery groupByApvepur24mo14() Group by the ApvePur24mo14 column
 * @method     ChildVendorQuery groupByApvepo24mo14() Group by the ApvePo24mo14 column
 * @method     ChildVendorQuery groupByApveinvc24mo14() Group by the ApveInvc24mo14 column
 * @method     ChildVendorQuery groupByApveicnt24mo14() Group by the ApveIcnt24mo14 column
 * @method     ChildVendorQuery groupByApvepur24mo15() Group by the ApvePur24mo15 column
 * @method     ChildVendorQuery groupByApvepo24mo15() Group by the ApvePo24mo15 column
 * @method     ChildVendorQuery groupByApveinvc24mo15() Group by the ApveInvc24mo15 column
 * @method     ChildVendorQuery groupByApveicnt24mo15() Group by the ApveIcnt24mo15 column
 * @method     ChildVendorQuery groupByApvepur24mo16() Group by the ApvePur24mo16 column
 * @method     ChildVendorQuery groupByApvepo24mo16() Group by the ApvePo24mo16 column
 * @method     ChildVendorQuery groupByApveinvc24mo16() Group by the ApveInvc24mo16 column
 * @method     ChildVendorQuery groupByApveicnt24mo16() Group by the ApveIcnt24mo16 column
 * @method     ChildVendorQuery groupByApvepur24mo17() Group by the ApvePur24mo17 column
 * @method     ChildVendorQuery groupByApvepo24mo17() Group by the ApvePo24mo17 column
 * @method     ChildVendorQuery groupByApveinvc24mo17() Group by the ApveInvc24mo17 column
 * @method     ChildVendorQuery groupByApveicnt24mo17() Group by the ApveIcnt24mo17 column
 * @method     ChildVendorQuery groupByApvepur24mo18() Group by the ApvePur24mo18 column
 * @method     ChildVendorQuery groupByApvepo24mo18() Group by the ApvePo24mo18 column
 * @method     ChildVendorQuery groupByApveinvc24mo18() Group by the ApveInvc24mo18 column
 * @method     ChildVendorQuery groupByApveicnt24mo18() Group by the ApveIcnt24mo18 column
 * @method     ChildVendorQuery groupByApvepur24mo19() Group by the ApvePur24mo19 column
 * @method     ChildVendorQuery groupByApvepo24mo19() Group by the ApvePo24mo19 column
 * @method     ChildVendorQuery groupByApveinvc24mo19() Group by the ApveInvc24mo19 column
 * @method     ChildVendorQuery groupByApveicnt24mo19() Group by the ApveIcnt24mo19 column
 * @method     ChildVendorQuery groupByApvepur24mo20() Group by the ApvePur24mo20 column
 * @method     ChildVendorQuery groupByApvepo24mo20() Group by the ApvePo24mo20 column
 * @method     ChildVendorQuery groupByApveinvc24mo20() Group by the ApveInvc24mo20 column
 * @method     ChildVendorQuery groupByApveicnt24mo20() Group by the ApveIcnt24mo20 column
 * @method     ChildVendorQuery groupByApvepur24mo21() Group by the ApvePur24mo21 column
 * @method     ChildVendorQuery groupByApvepo24mo21() Group by the ApvePo24mo21 column
 * @method     ChildVendorQuery groupByApveinvc24mo21() Group by the ApveInvc24mo21 column
 * @method     ChildVendorQuery groupByApveicnt24mo21() Group by the ApveIcnt24mo21 column
 * @method     ChildVendorQuery groupByApvepur24mo22() Group by the ApvePur24mo22 column
 * @method     ChildVendorQuery groupByApvepo24mo22() Group by the ApvePo24mo22 column
 * @method     ChildVendorQuery groupByApveinvc24mo22() Group by the ApveInvc24mo22 column
 * @method     ChildVendorQuery groupByApveicnt24mo22() Group by the ApveIcnt24mo22 column
 * @method     ChildVendorQuery groupByApvepur24mo23() Group by the ApvePur24mo23 column
 * @method     ChildVendorQuery groupByApvepo24mo23() Group by the ApvePo24mo23 column
 * @method     ChildVendorQuery groupByApveinvc24mo23() Group by the ApveInvc24mo23 column
 * @method     ChildVendorQuery groupByApveicnt24mo23() Group by the ApveIcnt24mo23 column
 * @method     ChildVendorQuery groupByApvepur24mo24() Group by the ApvePur24mo24 column
 * @method     ChildVendorQuery groupByApvepo24mo24() Group by the ApvePo24mo24 column
 * @method     ChildVendorQuery groupByApveinvc24mo24() Group by the ApveInvc24mo24 column
 * @method     ChildVendorQuery groupByApveicnt24mo24() Group by the ApveIcnt24mo24 column
 * @method     ChildVendorQuery groupByApvecrncy() Group by the ApveCrncy column
 * @method     ChildVendorQuery groupByApvefrtinamt() Group by the ApveFrtInAmt column
 * @method     ChildVendorQuery groupByApveouracctnbr() Group by the ApveOurAcctNbr column
 * @method     ChildVendorQuery groupByApvevenddisc() Group by the ApveVendDisc column
 * @method     ChildVendorQuery groupByApvefob() Group by the ApveFob column
 * @method     ChildVendorQuery groupByApveroylpct() Group by the ApveRoylPct column
 * @method     ChildVendorQuery groupByApveprtpoeoru() Group by the ApvePrtPoEOrU column
 * @method     ChildVendorQuery groupByApvecomrate() Group by the ApveComRate column
 * @method     ChildVendorQuery groupByApveuselandonrcpt() Group by the ApveUseLandOnRcpt column
 * @method     ChildVendorQuery groupByApvebuyrwhse1() Group by the ApveBuyrWhse1 column
 * @method     ChildVendorQuery groupByApvebuyrcode1() Group by the ApveBuyrCode1 column
 * @method     ChildVendorQuery groupByApvebuyrwhse2() Group by the ApveBuyrWhse2 column
 * @method     ChildVendorQuery groupByApvebuyrcode2() Group by the ApveBuyrCode2 column
 * @method     ChildVendorQuery groupByApvebuyrwhse3() Group by the ApveBuyrWhse3 column
 * @method     ChildVendorQuery groupByApvebuyrcode3() Group by the ApveBuyrCode3 column
 * @method     ChildVendorQuery groupByApvebuyrwhse4() Group by the ApveBuyrWhse4 column
 * @method     ChildVendorQuery groupByApvebuyrcode4() Group by the ApveBuyrCode4 column
 * @method     ChildVendorQuery groupByApvebuyrwhse5() Group by the ApveBuyrWhse5 column
 * @method     ChildVendorQuery groupByApvebuyrcode5() Group by the ApveBuyrCode5 column
 * @method     ChildVendorQuery groupByApvebuyrwhse6() Group by the ApveBuyrWhse6 column
 * @method     ChildVendorQuery groupByApvebuyrcode6() Group by the ApveBuyrCode6 column
 * @method     ChildVendorQuery groupByApvebuyrwhse7() Group by the ApveBuyrWhse7 column
 * @method     ChildVendorQuery groupByApvebuyrcode7() Group by the ApveBuyrCode7 column
 * @method     ChildVendorQuery groupByApvebuyrwhse8() Group by the ApveBuyrWhse8 column
 * @method     ChildVendorQuery groupByApvebuyrcode8() Group by the ApveBuyrCode8 column
 * @method     ChildVendorQuery groupByApvebuyrwhse9() Group by the ApveBuyrWhse9 column
 * @method     ChildVendorQuery groupByApvebuyrcode9() Group by the ApveBuyrCode9 column
 * @method     ChildVendorQuery groupByApvebuyrwhse10() Group by the ApveBuyrWhse10 column
 * @method     ChildVendorQuery groupByApvebuyrcode10() Group by the ApveBuyrCode10 column
 * @method     ChildVendorQuery groupByApvelandcost() Group by the ApveLandCost column
 * @method     ChildVendorQuery groupByApvereleasenbr() Group by the ApveReleaseNbr column
 * @method     ChildVendorQuery groupByApvescanstartpos() Group by the ApveScanStartPos column
 * @method     ChildVendorQuery groupByApvescanlength() Group by the ApveScanLength column
 * @method     ChildVendorQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildVendorQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildVendorQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildVendorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildVendorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildVendorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildVendorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildVendorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildVendorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildVendor findOne(ConnectionInterface $con = null) Return the first ChildVendor matching the query
 * @method     ChildVendor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildVendor matching the query, or a new ChildVendor object populated from the query conditions when no match is found
 *
 * @method     ChildVendor findOneByApvevendid(string $ApveVendId) Return the first ChildVendor filtered by the ApveVendId column
 * @method     ChildVendor findOneByApvename(string $ApveName) Return the first ChildVendor filtered by the ApveName column
 * @method     ChildVendor findOneByApveadr1(string $ApveAdr1) Return the first ChildVendor filtered by the ApveAdr1 column
 * @method     ChildVendor findOneByApveadr2(string $ApveAdr2) Return the first ChildVendor filtered by the ApveAdr2 column
 * @method     ChildVendor findOneByApveadr3(string $ApveAdr3) Return the first ChildVendor filtered by the ApveAdr3 column
 * @method     ChildVendor findOneByApvectry(string $ApveCtry) Return the first ChildVendor filtered by the ApveCtry column
 * @method     ChildVendor findOneByApvecity(string $ApveCity) Return the first ChildVendor filtered by the ApveCity column
 * @method     ChildVendor findOneByApvestat(string $ApveStat) Return the first ChildVendor filtered by the ApveStat column
 * @method     ChildVendor findOneByApvezipcode(string $ApveZipCode) Return the first ChildVendor filtered by the ApveZipCode column
 * @method     ChildVendor findOneByApvepayname(string $ApvePayName) Return the first ChildVendor filtered by the ApvePayName column
 * @method     ChildVendor findOneByApvepayadr1(string $ApvePayAdr1) Return the first ChildVendor filtered by the ApvePayAdr1 column
 * @method     ChildVendor findOneByApvepayadr2(string $ApvePayAdr2) Return the first ChildVendor filtered by the ApvePayAdr2 column
 * @method     ChildVendor findOneByApvepayadr3(string $ApvePayAdr3) Return the first ChildVendor filtered by the ApvePayAdr3 column
 * @method     ChildVendor findOneByApvepayctry(string $ApvePayCtry) Return the first ChildVendor filtered by the ApvePayCtry column
 * @method     ChildVendor findOneByApvepaycity(string $ApvePayCity) Return the first ChildVendor filtered by the ApvePayCity column
 * @method     ChildVendor findOneByApvepaystat(string $ApvePayStat) Return the first ChildVendor filtered by the ApvePayStat column
 * @method     ChildVendor findOneByApvepayzipcode(string $ApvePayZipCode) Return the first ChildVendor filtered by the ApvePayZipCode column
 * @method     ChildVendor findOneByApvestatus(string $ApveStatus) Return the first ChildVendor filtered by the ApveStatus column
 * @method     ChildVendor findOneByApvetakeexpireddisc(string $ApveTakeExpiredDisc) Return the first ChildVendor filtered by the ApveTakeExpiredDisc column
 * @method     ChildVendor findOneByApveprinthts(string $ApvePrintHts) Return the first ChildVendor filtered by the ApvePrintHts column
 * @method     ChildVendor findOneByApvefabbin(string $ApveFabBin) Return the first ChildVendor filtered by the ApveFabBin column
 * @method     ChildVendor findOneByApvelmprntbulk(string $ApveLmPrntBulk) Return the first ChildVendor filtered by the ApveLmPrntBulk column
 * @method     ChildVendor findOneByApveallowdropship(string $ApveAllowDropShip) Return the first ChildVendor filtered by the ApveAllowDropShip column
 * @method     ChildVendor findOneByAptbtypecode(string $AptbTypeCode) Return the first ChildVendor filtered by the AptbTypeCode column
 * @method     ChildVendor findOneByAptmtermcode(string $AptmTermCode) Return the first ChildVendor filtered by the AptmTermCode column
 * @method     ChildVendor findOneByApvesviacode(string $ApveSviaCode) Return the first ChildVendor filtered by the ApveSviaCode column
 * @method     ChildVendor findOneByApveoldfob(string $ApveOldFob) Return the first ChildVendor filtered by the ApveOldFob column
 * @method     ChildVendor findOneByApveleaddays(int $ApveLeadDays) Return the first ChildVendor filtered by the ApveLeadDays column
 * @method     ChildVendor findOneByApveglacct(string $ApveGlAcct) Return the first ChildVendor filtered by the ApveGlAcct column
 * @method     ChildVendor findOneByApve1099ssnbr(string $Apve1099SsNbr) Return the first ChildVendor filtered by the Apve1099SsNbr column
 * @method     ChildVendor findOneByApveminordrcode(string $ApveMinOrdrCode) Return the first ChildVendor filtered by the ApveMinOrdrCode column
 * @method     ChildVendor findOneByApveminordrvalue(int $ApveMinOrdrValue) Return the first ChildVendor filtered by the ApveMinOrdrValue column
 * @method     ChildVendor findOneByApvepurmtd(string $ApvePurMtd) Return the first ChildVendor filtered by the ApvePurMtd column
 * @method     ChildVendor findOneByApvepomtd(int $ApvePoMtd) Return the first ChildVendor filtered by the ApvePoMtd column
 * @method     ChildVendor findOneByApveinvcmtd(string $ApveInvcMtd) Return the first ChildVendor filtered by the ApveInvcMtd column
 * @method     ChildVendor findOneByApveicntmtd(int $ApveIcntMtd) Return the first ChildVendor filtered by the ApveIcntMtd column
 * @method     ChildVendor findOneByApvedateopen(string $ApveDateOpen) Return the first ChildVendor filtered by the ApveDateOpen column
 * @method     ChildVendor findOneByApvelastpurdate(string $ApveLastPurDate) Return the first ChildVendor filtered by the ApveLastPurDate column
 * @method     ChildVendor findOneByApvepur24mo01(string $ApvePur24mo01) Return the first ChildVendor filtered by the ApvePur24mo01 column
 * @method     ChildVendor findOneByApvepo24mo01(int $ApvePo24mo01) Return the first ChildVendor filtered by the ApvePo24mo01 column
 * @method     ChildVendor findOneByApveinvc24mo01(string $ApveInvc24mo01) Return the first ChildVendor filtered by the ApveInvc24mo01 column
 * @method     ChildVendor findOneByApveicnt24mo01(int $ApveIcnt24mo01) Return the first ChildVendor filtered by the ApveIcnt24mo01 column
 * @method     ChildVendor findOneByApvepur24mo02(string $ApvePur24mo02) Return the first ChildVendor filtered by the ApvePur24mo02 column
 * @method     ChildVendor findOneByApvepo24mo02(int $ApvePo24mo02) Return the first ChildVendor filtered by the ApvePo24mo02 column
 * @method     ChildVendor findOneByApveinvc24mo02(string $ApveInvc24mo02) Return the first ChildVendor filtered by the ApveInvc24mo02 column
 * @method     ChildVendor findOneByApveicnt24mo02(int $ApveIcnt24mo02) Return the first ChildVendor filtered by the ApveIcnt24mo02 column
 * @method     ChildVendor findOneByApvepur24mo03(string $ApvePur24mo03) Return the first ChildVendor filtered by the ApvePur24mo03 column
 * @method     ChildVendor findOneByApvepo24mo03(int $ApvePo24mo03) Return the first ChildVendor filtered by the ApvePo24mo03 column
 * @method     ChildVendor findOneByApveinvc24mo03(string $ApveInvc24mo03) Return the first ChildVendor filtered by the ApveInvc24mo03 column
 * @method     ChildVendor findOneByApveicnt24mo03(int $ApveIcnt24mo03) Return the first ChildVendor filtered by the ApveIcnt24mo03 column
 * @method     ChildVendor findOneByApvepur24mo04(string $ApvePur24mo04) Return the first ChildVendor filtered by the ApvePur24mo04 column
 * @method     ChildVendor findOneByApvepo24mo04(int $ApvePo24mo04) Return the first ChildVendor filtered by the ApvePo24mo04 column
 * @method     ChildVendor findOneByApveinvc24mo04(string $ApveInvc24mo04) Return the first ChildVendor filtered by the ApveInvc24mo04 column
 * @method     ChildVendor findOneByApveicnt24mo04(int $ApveIcnt24mo04) Return the first ChildVendor filtered by the ApveIcnt24mo04 column
 * @method     ChildVendor findOneByApvepur24mo05(string $ApvePur24mo05) Return the first ChildVendor filtered by the ApvePur24mo05 column
 * @method     ChildVendor findOneByApvepo24mo05(int $ApvePo24mo05) Return the first ChildVendor filtered by the ApvePo24mo05 column
 * @method     ChildVendor findOneByApveinvc24mo05(string $ApveInvc24mo05) Return the first ChildVendor filtered by the ApveInvc24mo05 column
 * @method     ChildVendor findOneByApveicnt24mo05(int $ApveIcnt24mo05) Return the first ChildVendor filtered by the ApveIcnt24mo05 column
 * @method     ChildVendor findOneByApvepur24mo06(string $ApvePur24mo06) Return the first ChildVendor filtered by the ApvePur24mo06 column
 * @method     ChildVendor findOneByApvepo24mo06(int $ApvePo24mo06) Return the first ChildVendor filtered by the ApvePo24mo06 column
 * @method     ChildVendor findOneByApveinvc24mo06(string $ApveInvc24mo06) Return the first ChildVendor filtered by the ApveInvc24mo06 column
 * @method     ChildVendor findOneByApveicnt24mo06(int $ApveIcnt24mo06) Return the first ChildVendor filtered by the ApveIcnt24mo06 column
 * @method     ChildVendor findOneByApvepur24mo07(string $ApvePur24mo07) Return the first ChildVendor filtered by the ApvePur24mo07 column
 * @method     ChildVendor findOneByApvepo24mo07(int $ApvePo24mo07) Return the first ChildVendor filtered by the ApvePo24mo07 column
 * @method     ChildVendor findOneByApveinvc24mo07(string $ApveInvc24mo07) Return the first ChildVendor filtered by the ApveInvc24mo07 column
 * @method     ChildVendor findOneByApveicnt24mo07(int $ApveIcnt24mo07) Return the first ChildVendor filtered by the ApveIcnt24mo07 column
 * @method     ChildVendor findOneByApvepur24mo08(string $ApvePur24mo08) Return the first ChildVendor filtered by the ApvePur24mo08 column
 * @method     ChildVendor findOneByApvepo24mo08(int $ApvePo24mo08) Return the first ChildVendor filtered by the ApvePo24mo08 column
 * @method     ChildVendor findOneByApveinvc24mo08(string $ApveInvc24mo08) Return the first ChildVendor filtered by the ApveInvc24mo08 column
 * @method     ChildVendor findOneByApveicnt24mo08(int $ApveIcnt24mo08) Return the first ChildVendor filtered by the ApveIcnt24mo08 column
 * @method     ChildVendor findOneByApvepur24mo09(string $ApvePur24mo09) Return the first ChildVendor filtered by the ApvePur24mo09 column
 * @method     ChildVendor findOneByApvepo24mo09(int $ApvePo24mo09) Return the first ChildVendor filtered by the ApvePo24mo09 column
 * @method     ChildVendor findOneByApveinvc24mo09(string $ApveInvc24mo09) Return the first ChildVendor filtered by the ApveInvc24mo09 column
 * @method     ChildVendor findOneByApveicnt24mo09(int $ApveIcnt24mo09) Return the first ChildVendor filtered by the ApveIcnt24mo09 column
 * @method     ChildVendor findOneByApvepur24mo10(string $ApvePur24mo10) Return the first ChildVendor filtered by the ApvePur24mo10 column
 * @method     ChildVendor findOneByApvepo24mo10(int $ApvePo24mo10) Return the first ChildVendor filtered by the ApvePo24mo10 column
 * @method     ChildVendor findOneByApveinvc24mo10(string $ApveInvc24mo10) Return the first ChildVendor filtered by the ApveInvc24mo10 column
 * @method     ChildVendor findOneByApveicnt24mo10(int $ApveIcnt24mo10) Return the first ChildVendor filtered by the ApveIcnt24mo10 column
 * @method     ChildVendor findOneByApvepur24mo11(string $ApvePur24mo11) Return the first ChildVendor filtered by the ApvePur24mo11 column
 * @method     ChildVendor findOneByApvepo24mo11(int $ApvePo24mo11) Return the first ChildVendor filtered by the ApvePo24mo11 column
 * @method     ChildVendor findOneByApveinvc24mo11(string $ApveInvc24mo11) Return the first ChildVendor filtered by the ApveInvc24mo11 column
 * @method     ChildVendor findOneByApveicnt24mo11(int $ApveIcnt24mo11) Return the first ChildVendor filtered by the ApveIcnt24mo11 column
 * @method     ChildVendor findOneByApvepur24mo12(string $ApvePur24mo12) Return the first ChildVendor filtered by the ApvePur24mo12 column
 * @method     ChildVendor findOneByApvepo24mo12(int $ApvePo24mo12) Return the first ChildVendor filtered by the ApvePo24mo12 column
 * @method     ChildVendor findOneByApveinvc24mo12(string $ApveInvc24mo12) Return the first ChildVendor filtered by the ApveInvc24mo12 column
 * @method     ChildVendor findOneByApveicnt24mo12(int $ApveIcnt24mo12) Return the first ChildVendor filtered by the ApveIcnt24mo12 column
 * @method     ChildVendor findOneByApvepur24mo13(string $ApvePur24mo13) Return the first ChildVendor filtered by the ApvePur24mo13 column
 * @method     ChildVendor findOneByApvepo24mo13(int $ApvePo24mo13) Return the first ChildVendor filtered by the ApvePo24mo13 column
 * @method     ChildVendor findOneByApveinvc24mo13(string $ApveInvc24mo13) Return the first ChildVendor filtered by the ApveInvc24mo13 column
 * @method     ChildVendor findOneByApveicnt24mo13(int $ApveIcnt24mo13) Return the first ChildVendor filtered by the ApveIcnt24mo13 column
 * @method     ChildVendor findOneByApvepur24mo14(string $ApvePur24mo14) Return the first ChildVendor filtered by the ApvePur24mo14 column
 * @method     ChildVendor findOneByApvepo24mo14(int $ApvePo24mo14) Return the first ChildVendor filtered by the ApvePo24mo14 column
 * @method     ChildVendor findOneByApveinvc24mo14(string $ApveInvc24mo14) Return the first ChildVendor filtered by the ApveInvc24mo14 column
 * @method     ChildVendor findOneByApveicnt24mo14(int $ApveIcnt24mo14) Return the first ChildVendor filtered by the ApveIcnt24mo14 column
 * @method     ChildVendor findOneByApvepur24mo15(string $ApvePur24mo15) Return the first ChildVendor filtered by the ApvePur24mo15 column
 * @method     ChildVendor findOneByApvepo24mo15(int $ApvePo24mo15) Return the first ChildVendor filtered by the ApvePo24mo15 column
 * @method     ChildVendor findOneByApveinvc24mo15(string $ApveInvc24mo15) Return the first ChildVendor filtered by the ApveInvc24mo15 column
 * @method     ChildVendor findOneByApveicnt24mo15(int $ApveIcnt24mo15) Return the first ChildVendor filtered by the ApveIcnt24mo15 column
 * @method     ChildVendor findOneByApvepur24mo16(string $ApvePur24mo16) Return the first ChildVendor filtered by the ApvePur24mo16 column
 * @method     ChildVendor findOneByApvepo24mo16(int $ApvePo24mo16) Return the first ChildVendor filtered by the ApvePo24mo16 column
 * @method     ChildVendor findOneByApveinvc24mo16(string $ApveInvc24mo16) Return the first ChildVendor filtered by the ApveInvc24mo16 column
 * @method     ChildVendor findOneByApveicnt24mo16(int $ApveIcnt24mo16) Return the first ChildVendor filtered by the ApveIcnt24mo16 column
 * @method     ChildVendor findOneByApvepur24mo17(string $ApvePur24mo17) Return the first ChildVendor filtered by the ApvePur24mo17 column
 * @method     ChildVendor findOneByApvepo24mo17(int $ApvePo24mo17) Return the first ChildVendor filtered by the ApvePo24mo17 column
 * @method     ChildVendor findOneByApveinvc24mo17(string $ApveInvc24mo17) Return the first ChildVendor filtered by the ApveInvc24mo17 column
 * @method     ChildVendor findOneByApveicnt24mo17(int $ApveIcnt24mo17) Return the first ChildVendor filtered by the ApveIcnt24mo17 column
 * @method     ChildVendor findOneByApvepur24mo18(string $ApvePur24mo18) Return the first ChildVendor filtered by the ApvePur24mo18 column
 * @method     ChildVendor findOneByApvepo24mo18(int $ApvePo24mo18) Return the first ChildVendor filtered by the ApvePo24mo18 column
 * @method     ChildVendor findOneByApveinvc24mo18(string $ApveInvc24mo18) Return the first ChildVendor filtered by the ApveInvc24mo18 column
 * @method     ChildVendor findOneByApveicnt24mo18(int $ApveIcnt24mo18) Return the first ChildVendor filtered by the ApveIcnt24mo18 column
 * @method     ChildVendor findOneByApvepur24mo19(string $ApvePur24mo19) Return the first ChildVendor filtered by the ApvePur24mo19 column
 * @method     ChildVendor findOneByApvepo24mo19(int $ApvePo24mo19) Return the first ChildVendor filtered by the ApvePo24mo19 column
 * @method     ChildVendor findOneByApveinvc24mo19(string $ApveInvc24mo19) Return the first ChildVendor filtered by the ApveInvc24mo19 column
 * @method     ChildVendor findOneByApveicnt24mo19(int $ApveIcnt24mo19) Return the first ChildVendor filtered by the ApveIcnt24mo19 column
 * @method     ChildVendor findOneByApvepur24mo20(string $ApvePur24mo20) Return the first ChildVendor filtered by the ApvePur24mo20 column
 * @method     ChildVendor findOneByApvepo24mo20(int $ApvePo24mo20) Return the first ChildVendor filtered by the ApvePo24mo20 column
 * @method     ChildVendor findOneByApveinvc24mo20(string $ApveInvc24mo20) Return the first ChildVendor filtered by the ApveInvc24mo20 column
 * @method     ChildVendor findOneByApveicnt24mo20(int $ApveIcnt24mo20) Return the first ChildVendor filtered by the ApveIcnt24mo20 column
 * @method     ChildVendor findOneByApvepur24mo21(string $ApvePur24mo21) Return the first ChildVendor filtered by the ApvePur24mo21 column
 * @method     ChildVendor findOneByApvepo24mo21(int $ApvePo24mo21) Return the first ChildVendor filtered by the ApvePo24mo21 column
 * @method     ChildVendor findOneByApveinvc24mo21(string $ApveInvc24mo21) Return the first ChildVendor filtered by the ApveInvc24mo21 column
 * @method     ChildVendor findOneByApveicnt24mo21(int $ApveIcnt24mo21) Return the first ChildVendor filtered by the ApveIcnt24mo21 column
 * @method     ChildVendor findOneByApvepur24mo22(string $ApvePur24mo22) Return the first ChildVendor filtered by the ApvePur24mo22 column
 * @method     ChildVendor findOneByApvepo24mo22(int $ApvePo24mo22) Return the first ChildVendor filtered by the ApvePo24mo22 column
 * @method     ChildVendor findOneByApveinvc24mo22(string $ApveInvc24mo22) Return the first ChildVendor filtered by the ApveInvc24mo22 column
 * @method     ChildVendor findOneByApveicnt24mo22(int $ApveIcnt24mo22) Return the first ChildVendor filtered by the ApveIcnt24mo22 column
 * @method     ChildVendor findOneByApvepur24mo23(string $ApvePur24mo23) Return the first ChildVendor filtered by the ApvePur24mo23 column
 * @method     ChildVendor findOneByApvepo24mo23(int $ApvePo24mo23) Return the first ChildVendor filtered by the ApvePo24mo23 column
 * @method     ChildVendor findOneByApveinvc24mo23(string $ApveInvc24mo23) Return the first ChildVendor filtered by the ApveInvc24mo23 column
 * @method     ChildVendor findOneByApveicnt24mo23(int $ApveIcnt24mo23) Return the first ChildVendor filtered by the ApveIcnt24mo23 column
 * @method     ChildVendor findOneByApvepur24mo24(string $ApvePur24mo24) Return the first ChildVendor filtered by the ApvePur24mo24 column
 * @method     ChildVendor findOneByApvepo24mo24(int $ApvePo24mo24) Return the first ChildVendor filtered by the ApvePo24mo24 column
 * @method     ChildVendor findOneByApveinvc24mo24(string $ApveInvc24mo24) Return the first ChildVendor filtered by the ApveInvc24mo24 column
 * @method     ChildVendor findOneByApveicnt24mo24(int $ApveIcnt24mo24) Return the first ChildVendor filtered by the ApveIcnt24mo24 column
 * @method     ChildVendor findOneByApvecrncy(string $ApveCrncy) Return the first ChildVendor filtered by the ApveCrncy column
 * @method     ChildVendor findOneByApvefrtinamt(string $ApveFrtInAmt) Return the first ChildVendor filtered by the ApveFrtInAmt column
 * @method     ChildVendor findOneByApveouracctnbr(string $ApveOurAcctNbr) Return the first ChildVendor filtered by the ApveOurAcctNbr column
 * @method     ChildVendor findOneByApvevenddisc(string $ApveVendDisc) Return the first ChildVendor filtered by the ApveVendDisc column
 * @method     ChildVendor findOneByApvefob(string $ApveFob) Return the first ChildVendor filtered by the ApveFob column
 * @method     ChildVendor findOneByApveroylpct(string $ApveRoylPct) Return the first ChildVendor filtered by the ApveRoylPct column
 * @method     ChildVendor findOneByApveprtpoeoru(string $ApvePrtPoEOrU) Return the first ChildVendor filtered by the ApvePrtPoEOrU column
 * @method     ChildVendor findOneByApvecomrate(string $ApveComRate) Return the first ChildVendor filtered by the ApveComRate column
 * @method     ChildVendor findOneByApveuselandonrcpt(string $ApveUseLandOnRcpt) Return the first ChildVendor filtered by the ApveUseLandOnRcpt column
 * @method     ChildVendor findOneByApvebuyrwhse1(string $ApveBuyrWhse1) Return the first ChildVendor filtered by the ApveBuyrWhse1 column
 * @method     ChildVendor findOneByApvebuyrcode1(string $ApveBuyrCode1) Return the first ChildVendor filtered by the ApveBuyrCode1 column
 * @method     ChildVendor findOneByApvebuyrwhse2(string $ApveBuyrWhse2) Return the first ChildVendor filtered by the ApveBuyrWhse2 column
 * @method     ChildVendor findOneByApvebuyrcode2(string $ApveBuyrCode2) Return the first ChildVendor filtered by the ApveBuyrCode2 column
 * @method     ChildVendor findOneByApvebuyrwhse3(string $ApveBuyrWhse3) Return the first ChildVendor filtered by the ApveBuyrWhse3 column
 * @method     ChildVendor findOneByApvebuyrcode3(string $ApveBuyrCode3) Return the first ChildVendor filtered by the ApveBuyrCode3 column
 * @method     ChildVendor findOneByApvebuyrwhse4(string $ApveBuyrWhse4) Return the first ChildVendor filtered by the ApveBuyrWhse4 column
 * @method     ChildVendor findOneByApvebuyrcode4(string $ApveBuyrCode4) Return the first ChildVendor filtered by the ApveBuyrCode4 column
 * @method     ChildVendor findOneByApvebuyrwhse5(string $ApveBuyrWhse5) Return the first ChildVendor filtered by the ApveBuyrWhse5 column
 * @method     ChildVendor findOneByApvebuyrcode5(string $ApveBuyrCode5) Return the first ChildVendor filtered by the ApveBuyrCode5 column
 * @method     ChildVendor findOneByApvebuyrwhse6(string $ApveBuyrWhse6) Return the first ChildVendor filtered by the ApveBuyrWhse6 column
 * @method     ChildVendor findOneByApvebuyrcode6(string $ApveBuyrCode6) Return the first ChildVendor filtered by the ApveBuyrCode6 column
 * @method     ChildVendor findOneByApvebuyrwhse7(string $ApveBuyrWhse7) Return the first ChildVendor filtered by the ApveBuyrWhse7 column
 * @method     ChildVendor findOneByApvebuyrcode7(string $ApveBuyrCode7) Return the first ChildVendor filtered by the ApveBuyrCode7 column
 * @method     ChildVendor findOneByApvebuyrwhse8(string $ApveBuyrWhse8) Return the first ChildVendor filtered by the ApveBuyrWhse8 column
 * @method     ChildVendor findOneByApvebuyrcode8(string $ApveBuyrCode8) Return the first ChildVendor filtered by the ApveBuyrCode8 column
 * @method     ChildVendor findOneByApvebuyrwhse9(string $ApveBuyrWhse9) Return the first ChildVendor filtered by the ApveBuyrWhse9 column
 * @method     ChildVendor findOneByApvebuyrcode9(string $ApveBuyrCode9) Return the first ChildVendor filtered by the ApveBuyrCode9 column
 * @method     ChildVendor findOneByApvebuyrwhse10(string $ApveBuyrWhse10) Return the first ChildVendor filtered by the ApveBuyrWhse10 column
 * @method     ChildVendor findOneByApvebuyrcode10(string $ApveBuyrCode10) Return the first ChildVendor filtered by the ApveBuyrCode10 column
 * @method     ChildVendor findOneByApvelandcost(string $ApveLandCost) Return the first ChildVendor filtered by the ApveLandCost column
 * @method     ChildVendor findOneByApvereleasenbr(int $ApveReleaseNbr) Return the first ChildVendor filtered by the ApveReleaseNbr column
 * @method     ChildVendor findOneByApvescanstartpos(int $ApveScanStartPos) Return the first ChildVendor filtered by the ApveScanStartPos column
 * @method     ChildVendor findOneByApvescanlength(int $ApveScanLength) Return the first ChildVendor filtered by the ApveScanLength column
 * @method     ChildVendor findOneByDateupdtd(string $DateUpdtd) Return the first ChildVendor filtered by the DateUpdtd column
 * @method     ChildVendor findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildVendor filtered by the TimeUpdtd column
 * @method     ChildVendor findOneByDummy(string $dummy) Return the first ChildVendor filtered by the dummy column *

 * @method     ChildVendor requirePk($key, ConnectionInterface $con = null) Return the ChildVendor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOne(ConnectionInterface $con = null) Return the first ChildVendor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildVendor requireOneByApvevendid(string $ApveVendId) Return the first ChildVendor filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvename(string $ApveName) Return the first ChildVendor filtered by the ApveName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveadr1(string $ApveAdr1) Return the first ChildVendor filtered by the ApveAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveadr2(string $ApveAdr2) Return the first ChildVendor filtered by the ApveAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveadr3(string $ApveAdr3) Return the first ChildVendor filtered by the ApveAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvectry(string $ApveCtry) Return the first ChildVendor filtered by the ApveCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvecity(string $ApveCity) Return the first ChildVendor filtered by the ApveCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvestat(string $ApveStat) Return the first ChildVendor filtered by the ApveStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvezipcode(string $ApveZipCode) Return the first ChildVendor filtered by the ApveZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepayname(string $ApvePayName) Return the first ChildVendor filtered by the ApvePayName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepayadr1(string $ApvePayAdr1) Return the first ChildVendor filtered by the ApvePayAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepayadr2(string $ApvePayAdr2) Return the first ChildVendor filtered by the ApvePayAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepayadr3(string $ApvePayAdr3) Return the first ChildVendor filtered by the ApvePayAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepayctry(string $ApvePayCtry) Return the first ChildVendor filtered by the ApvePayCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepaycity(string $ApvePayCity) Return the first ChildVendor filtered by the ApvePayCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepaystat(string $ApvePayStat) Return the first ChildVendor filtered by the ApvePayStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepayzipcode(string $ApvePayZipCode) Return the first ChildVendor filtered by the ApvePayZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvestatus(string $ApveStatus) Return the first ChildVendor filtered by the ApveStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvetakeexpireddisc(string $ApveTakeExpiredDisc) Return the first ChildVendor filtered by the ApveTakeExpiredDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveprinthts(string $ApvePrintHts) Return the first ChildVendor filtered by the ApvePrintHts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvefabbin(string $ApveFabBin) Return the first ChildVendor filtered by the ApveFabBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvelmprntbulk(string $ApveLmPrntBulk) Return the first ChildVendor filtered by the ApveLmPrntBulk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveallowdropship(string $ApveAllowDropShip) Return the first ChildVendor filtered by the ApveAllowDropShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByAptbtypecode(string $AptbTypeCode) Return the first ChildVendor filtered by the AptbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByAptmtermcode(string $AptmTermCode) Return the first ChildVendor filtered by the AptmTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvesviacode(string $ApveSviaCode) Return the first ChildVendor filtered by the ApveSviaCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveoldfob(string $ApveOldFob) Return the first ChildVendor filtered by the ApveOldFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveleaddays(int $ApveLeadDays) Return the first ChildVendor filtered by the ApveLeadDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveglacct(string $ApveGlAcct) Return the first ChildVendor filtered by the ApveGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApve1099ssnbr(string $Apve1099SsNbr) Return the first ChildVendor filtered by the Apve1099SsNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveminordrcode(string $ApveMinOrdrCode) Return the first ChildVendor filtered by the ApveMinOrdrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveminordrvalue(int $ApveMinOrdrValue) Return the first ChildVendor filtered by the ApveMinOrdrValue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepurmtd(string $ApvePurMtd) Return the first ChildVendor filtered by the ApvePurMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepomtd(int $ApvePoMtd) Return the first ChildVendor filtered by the ApvePoMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvcmtd(string $ApveInvcMtd) Return the first ChildVendor filtered by the ApveInvcMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicntmtd(int $ApveIcntMtd) Return the first ChildVendor filtered by the ApveIcntMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvedateopen(string $ApveDateOpen) Return the first ChildVendor filtered by the ApveDateOpen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvelastpurdate(string $ApveLastPurDate) Return the first ChildVendor filtered by the ApveLastPurDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo01(string $ApvePur24mo01) Return the first ChildVendor filtered by the ApvePur24mo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo01(int $ApvePo24mo01) Return the first ChildVendor filtered by the ApvePo24mo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo01(string $ApveInvc24mo01) Return the first ChildVendor filtered by the ApveInvc24mo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo01(int $ApveIcnt24mo01) Return the first ChildVendor filtered by the ApveIcnt24mo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo02(string $ApvePur24mo02) Return the first ChildVendor filtered by the ApvePur24mo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo02(int $ApvePo24mo02) Return the first ChildVendor filtered by the ApvePo24mo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo02(string $ApveInvc24mo02) Return the first ChildVendor filtered by the ApveInvc24mo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo02(int $ApveIcnt24mo02) Return the first ChildVendor filtered by the ApveIcnt24mo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo03(string $ApvePur24mo03) Return the first ChildVendor filtered by the ApvePur24mo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo03(int $ApvePo24mo03) Return the first ChildVendor filtered by the ApvePo24mo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo03(string $ApveInvc24mo03) Return the first ChildVendor filtered by the ApveInvc24mo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo03(int $ApveIcnt24mo03) Return the first ChildVendor filtered by the ApveIcnt24mo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo04(string $ApvePur24mo04) Return the first ChildVendor filtered by the ApvePur24mo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo04(int $ApvePo24mo04) Return the first ChildVendor filtered by the ApvePo24mo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo04(string $ApveInvc24mo04) Return the first ChildVendor filtered by the ApveInvc24mo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo04(int $ApveIcnt24mo04) Return the first ChildVendor filtered by the ApveIcnt24mo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo05(string $ApvePur24mo05) Return the first ChildVendor filtered by the ApvePur24mo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo05(int $ApvePo24mo05) Return the first ChildVendor filtered by the ApvePo24mo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo05(string $ApveInvc24mo05) Return the first ChildVendor filtered by the ApveInvc24mo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo05(int $ApveIcnt24mo05) Return the first ChildVendor filtered by the ApveIcnt24mo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo06(string $ApvePur24mo06) Return the first ChildVendor filtered by the ApvePur24mo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo06(int $ApvePo24mo06) Return the first ChildVendor filtered by the ApvePo24mo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo06(string $ApveInvc24mo06) Return the first ChildVendor filtered by the ApveInvc24mo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo06(int $ApveIcnt24mo06) Return the first ChildVendor filtered by the ApveIcnt24mo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo07(string $ApvePur24mo07) Return the first ChildVendor filtered by the ApvePur24mo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo07(int $ApvePo24mo07) Return the first ChildVendor filtered by the ApvePo24mo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo07(string $ApveInvc24mo07) Return the first ChildVendor filtered by the ApveInvc24mo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo07(int $ApveIcnt24mo07) Return the first ChildVendor filtered by the ApveIcnt24mo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo08(string $ApvePur24mo08) Return the first ChildVendor filtered by the ApvePur24mo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo08(int $ApvePo24mo08) Return the first ChildVendor filtered by the ApvePo24mo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo08(string $ApveInvc24mo08) Return the first ChildVendor filtered by the ApveInvc24mo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo08(int $ApveIcnt24mo08) Return the first ChildVendor filtered by the ApveIcnt24mo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo09(string $ApvePur24mo09) Return the first ChildVendor filtered by the ApvePur24mo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo09(int $ApvePo24mo09) Return the first ChildVendor filtered by the ApvePo24mo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo09(string $ApveInvc24mo09) Return the first ChildVendor filtered by the ApveInvc24mo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo09(int $ApveIcnt24mo09) Return the first ChildVendor filtered by the ApveIcnt24mo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo10(string $ApvePur24mo10) Return the first ChildVendor filtered by the ApvePur24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo10(int $ApvePo24mo10) Return the first ChildVendor filtered by the ApvePo24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo10(string $ApveInvc24mo10) Return the first ChildVendor filtered by the ApveInvc24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo10(int $ApveIcnt24mo10) Return the first ChildVendor filtered by the ApveIcnt24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo11(string $ApvePur24mo11) Return the first ChildVendor filtered by the ApvePur24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo11(int $ApvePo24mo11) Return the first ChildVendor filtered by the ApvePo24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo11(string $ApveInvc24mo11) Return the first ChildVendor filtered by the ApveInvc24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo11(int $ApveIcnt24mo11) Return the first ChildVendor filtered by the ApveIcnt24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo12(string $ApvePur24mo12) Return the first ChildVendor filtered by the ApvePur24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo12(int $ApvePo24mo12) Return the first ChildVendor filtered by the ApvePo24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo12(string $ApveInvc24mo12) Return the first ChildVendor filtered by the ApveInvc24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo12(int $ApveIcnt24mo12) Return the first ChildVendor filtered by the ApveIcnt24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo13(string $ApvePur24mo13) Return the first ChildVendor filtered by the ApvePur24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo13(int $ApvePo24mo13) Return the first ChildVendor filtered by the ApvePo24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo13(string $ApveInvc24mo13) Return the first ChildVendor filtered by the ApveInvc24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo13(int $ApveIcnt24mo13) Return the first ChildVendor filtered by the ApveIcnt24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo14(string $ApvePur24mo14) Return the first ChildVendor filtered by the ApvePur24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo14(int $ApvePo24mo14) Return the first ChildVendor filtered by the ApvePo24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo14(string $ApveInvc24mo14) Return the first ChildVendor filtered by the ApveInvc24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo14(int $ApveIcnt24mo14) Return the first ChildVendor filtered by the ApveIcnt24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo15(string $ApvePur24mo15) Return the first ChildVendor filtered by the ApvePur24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo15(int $ApvePo24mo15) Return the first ChildVendor filtered by the ApvePo24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo15(string $ApveInvc24mo15) Return the first ChildVendor filtered by the ApveInvc24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo15(int $ApveIcnt24mo15) Return the first ChildVendor filtered by the ApveIcnt24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo16(string $ApvePur24mo16) Return the first ChildVendor filtered by the ApvePur24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo16(int $ApvePo24mo16) Return the first ChildVendor filtered by the ApvePo24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo16(string $ApveInvc24mo16) Return the first ChildVendor filtered by the ApveInvc24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo16(int $ApveIcnt24mo16) Return the first ChildVendor filtered by the ApveIcnt24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo17(string $ApvePur24mo17) Return the first ChildVendor filtered by the ApvePur24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo17(int $ApvePo24mo17) Return the first ChildVendor filtered by the ApvePo24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo17(string $ApveInvc24mo17) Return the first ChildVendor filtered by the ApveInvc24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo17(int $ApveIcnt24mo17) Return the first ChildVendor filtered by the ApveIcnt24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo18(string $ApvePur24mo18) Return the first ChildVendor filtered by the ApvePur24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo18(int $ApvePo24mo18) Return the first ChildVendor filtered by the ApvePo24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo18(string $ApveInvc24mo18) Return the first ChildVendor filtered by the ApveInvc24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo18(int $ApveIcnt24mo18) Return the first ChildVendor filtered by the ApveIcnt24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo19(string $ApvePur24mo19) Return the first ChildVendor filtered by the ApvePur24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo19(int $ApvePo24mo19) Return the first ChildVendor filtered by the ApvePo24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo19(string $ApveInvc24mo19) Return the first ChildVendor filtered by the ApveInvc24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo19(int $ApveIcnt24mo19) Return the first ChildVendor filtered by the ApveIcnt24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo20(string $ApvePur24mo20) Return the first ChildVendor filtered by the ApvePur24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo20(int $ApvePo24mo20) Return the first ChildVendor filtered by the ApvePo24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo20(string $ApveInvc24mo20) Return the first ChildVendor filtered by the ApveInvc24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo20(int $ApveIcnt24mo20) Return the first ChildVendor filtered by the ApveIcnt24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo21(string $ApvePur24mo21) Return the first ChildVendor filtered by the ApvePur24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo21(int $ApvePo24mo21) Return the first ChildVendor filtered by the ApvePo24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo21(string $ApveInvc24mo21) Return the first ChildVendor filtered by the ApveInvc24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo21(int $ApveIcnt24mo21) Return the first ChildVendor filtered by the ApveIcnt24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo22(string $ApvePur24mo22) Return the first ChildVendor filtered by the ApvePur24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo22(int $ApvePo24mo22) Return the first ChildVendor filtered by the ApvePo24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo22(string $ApveInvc24mo22) Return the first ChildVendor filtered by the ApveInvc24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo22(int $ApveIcnt24mo22) Return the first ChildVendor filtered by the ApveIcnt24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo23(string $ApvePur24mo23) Return the first ChildVendor filtered by the ApvePur24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo23(int $ApvePo24mo23) Return the first ChildVendor filtered by the ApvePo24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo23(string $ApveInvc24mo23) Return the first ChildVendor filtered by the ApveInvc24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo23(int $ApveIcnt24mo23) Return the first ChildVendor filtered by the ApveIcnt24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepur24mo24(string $ApvePur24mo24) Return the first ChildVendor filtered by the ApvePur24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvepo24mo24(int $ApvePo24mo24) Return the first ChildVendor filtered by the ApvePo24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveinvc24mo24(string $ApveInvc24mo24) Return the first ChildVendor filtered by the ApveInvc24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveicnt24mo24(int $ApveIcnt24mo24) Return the first ChildVendor filtered by the ApveIcnt24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvecrncy(string $ApveCrncy) Return the first ChildVendor filtered by the ApveCrncy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvefrtinamt(string $ApveFrtInAmt) Return the first ChildVendor filtered by the ApveFrtInAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveouracctnbr(string $ApveOurAcctNbr) Return the first ChildVendor filtered by the ApveOurAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvevenddisc(string $ApveVendDisc) Return the first ChildVendor filtered by the ApveVendDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvefob(string $ApveFob) Return the first ChildVendor filtered by the ApveFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveroylpct(string $ApveRoylPct) Return the first ChildVendor filtered by the ApveRoylPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveprtpoeoru(string $ApvePrtPoEOrU) Return the first ChildVendor filtered by the ApvePrtPoEOrU column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvecomrate(string $ApveComRate) Return the first ChildVendor filtered by the ApveComRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApveuselandonrcpt(string $ApveUseLandOnRcpt) Return the first ChildVendor filtered by the ApveUseLandOnRcpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse1(string $ApveBuyrWhse1) Return the first ChildVendor filtered by the ApveBuyrWhse1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode1(string $ApveBuyrCode1) Return the first ChildVendor filtered by the ApveBuyrCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse2(string $ApveBuyrWhse2) Return the first ChildVendor filtered by the ApveBuyrWhse2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode2(string $ApveBuyrCode2) Return the first ChildVendor filtered by the ApveBuyrCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse3(string $ApveBuyrWhse3) Return the first ChildVendor filtered by the ApveBuyrWhse3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode3(string $ApveBuyrCode3) Return the first ChildVendor filtered by the ApveBuyrCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse4(string $ApveBuyrWhse4) Return the first ChildVendor filtered by the ApveBuyrWhse4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode4(string $ApveBuyrCode4) Return the first ChildVendor filtered by the ApveBuyrCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse5(string $ApveBuyrWhse5) Return the first ChildVendor filtered by the ApveBuyrWhse5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode5(string $ApveBuyrCode5) Return the first ChildVendor filtered by the ApveBuyrCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse6(string $ApveBuyrWhse6) Return the first ChildVendor filtered by the ApveBuyrWhse6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode6(string $ApveBuyrCode6) Return the first ChildVendor filtered by the ApveBuyrCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse7(string $ApveBuyrWhse7) Return the first ChildVendor filtered by the ApveBuyrWhse7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode7(string $ApveBuyrCode7) Return the first ChildVendor filtered by the ApveBuyrCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse8(string $ApveBuyrWhse8) Return the first ChildVendor filtered by the ApveBuyrWhse8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode8(string $ApveBuyrCode8) Return the first ChildVendor filtered by the ApveBuyrCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse9(string $ApveBuyrWhse9) Return the first ChildVendor filtered by the ApveBuyrWhse9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode9(string $ApveBuyrCode9) Return the first ChildVendor filtered by the ApveBuyrCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrwhse10(string $ApveBuyrWhse10) Return the first ChildVendor filtered by the ApveBuyrWhse10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvebuyrcode10(string $ApveBuyrCode10) Return the first ChildVendor filtered by the ApveBuyrCode10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvelandcost(string $ApveLandCost) Return the first ChildVendor filtered by the ApveLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvereleasenbr(int $ApveReleaseNbr) Return the first ChildVendor filtered by the ApveReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvescanstartpos(int $ApveScanStartPos) Return the first ChildVendor filtered by the ApveScanStartPos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByApvescanlength(int $ApveScanLength) Return the first ChildVendor filtered by the ApveScanLength column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByDateupdtd(string $DateUpdtd) Return the first ChildVendor filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildVendor filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendor requireOneByDummy(string $dummy) Return the first ChildVendor filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildVendor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildVendor objects based on current ModelCriteria
 * @method     ChildVendor[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildVendor objects filtered by the ApveVendId column
 * @method     ChildVendor[]|ObjectCollection findByApvename(string $ApveName) Return ChildVendor objects filtered by the ApveName column
 * @method     ChildVendor[]|ObjectCollection findByApveadr1(string $ApveAdr1) Return ChildVendor objects filtered by the ApveAdr1 column
 * @method     ChildVendor[]|ObjectCollection findByApveadr2(string $ApveAdr2) Return ChildVendor objects filtered by the ApveAdr2 column
 * @method     ChildVendor[]|ObjectCollection findByApveadr3(string $ApveAdr3) Return ChildVendor objects filtered by the ApveAdr3 column
 * @method     ChildVendor[]|ObjectCollection findByApvectry(string $ApveCtry) Return ChildVendor objects filtered by the ApveCtry column
 * @method     ChildVendor[]|ObjectCollection findByApvecity(string $ApveCity) Return ChildVendor objects filtered by the ApveCity column
 * @method     ChildVendor[]|ObjectCollection findByApvestat(string $ApveStat) Return ChildVendor objects filtered by the ApveStat column
 * @method     ChildVendor[]|ObjectCollection findByApvezipcode(string $ApveZipCode) Return ChildVendor objects filtered by the ApveZipCode column
 * @method     ChildVendor[]|ObjectCollection findByApvepayname(string $ApvePayName) Return ChildVendor objects filtered by the ApvePayName column
 * @method     ChildVendor[]|ObjectCollection findByApvepayadr1(string $ApvePayAdr1) Return ChildVendor objects filtered by the ApvePayAdr1 column
 * @method     ChildVendor[]|ObjectCollection findByApvepayadr2(string $ApvePayAdr2) Return ChildVendor objects filtered by the ApvePayAdr2 column
 * @method     ChildVendor[]|ObjectCollection findByApvepayadr3(string $ApvePayAdr3) Return ChildVendor objects filtered by the ApvePayAdr3 column
 * @method     ChildVendor[]|ObjectCollection findByApvepayctry(string $ApvePayCtry) Return ChildVendor objects filtered by the ApvePayCtry column
 * @method     ChildVendor[]|ObjectCollection findByApvepaycity(string $ApvePayCity) Return ChildVendor objects filtered by the ApvePayCity column
 * @method     ChildVendor[]|ObjectCollection findByApvepaystat(string $ApvePayStat) Return ChildVendor objects filtered by the ApvePayStat column
 * @method     ChildVendor[]|ObjectCollection findByApvepayzipcode(string $ApvePayZipCode) Return ChildVendor objects filtered by the ApvePayZipCode column
 * @method     ChildVendor[]|ObjectCollection findByApvestatus(string $ApveStatus) Return ChildVendor objects filtered by the ApveStatus column
 * @method     ChildVendor[]|ObjectCollection findByApvetakeexpireddisc(string $ApveTakeExpiredDisc) Return ChildVendor objects filtered by the ApveTakeExpiredDisc column
 * @method     ChildVendor[]|ObjectCollection findByApveprinthts(string $ApvePrintHts) Return ChildVendor objects filtered by the ApvePrintHts column
 * @method     ChildVendor[]|ObjectCollection findByApvefabbin(string $ApveFabBin) Return ChildVendor objects filtered by the ApveFabBin column
 * @method     ChildVendor[]|ObjectCollection findByApvelmprntbulk(string $ApveLmPrntBulk) Return ChildVendor objects filtered by the ApveLmPrntBulk column
 * @method     ChildVendor[]|ObjectCollection findByApveallowdropship(string $ApveAllowDropShip) Return ChildVendor objects filtered by the ApveAllowDropShip column
 * @method     ChildVendor[]|ObjectCollection findByAptbtypecode(string $AptbTypeCode) Return ChildVendor objects filtered by the AptbTypeCode column
 * @method     ChildVendor[]|ObjectCollection findByAptmtermcode(string $AptmTermCode) Return ChildVendor objects filtered by the AptmTermCode column
 * @method     ChildVendor[]|ObjectCollection findByApvesviacode(string $ApveSviaCode) Return ChildVendor objects filtered by the ApveSviaCode column
 * @method     ChildVendor[]|ObjectCollection findByApveoldfob(string $ApveOldFob) Return ChildVendor objects filtered by the ApveOldFob column
 * @method     ChildVendor[]|ObjectCollection findByApveleaddays(int $ApveLeadDays) Return ChildVendor objects filtered by the ApveLeadDays column
 * @method     ChildVendor[]|ObjectCollection findByApveglacct(string $ApveGlAcct) Return ChildVendor objects filtered by the ApveGlAcct column
 * @method     ChildVendor[]|ObjectCollection findByApve1099ssnbr(string $Apve1099SsNbr) Return ChildVendor objects filtered by the Apve1099SsNbr column
 * @method     ChildVendor[]|ObjectCollection findByApveminordrcode(string $ApveMinOrdrCode) Return ChildVendor objects filtered by the ApveMinOrdrCode column
 * @method     ChildVendor[]|ObjectCollection findByApveminordrvalue(int $ApveMinOrdrValue) Return ChildVendor objects filtered by the ApveMinOrdrValue column
 * @method     ChildVendor[]|ObjectCollection findByApvepurmtd(string $ApvePurMtd) Return ChildVendor objects filtered by the ApvePurMtd column
 * @method     ChildVendor[]|ObjectCollection findByApvepomtd(int $ApvePoMtd) Return ChildVendor objects filtered by the ApvePoMtd column
 * @method     ChildVendor[]|ObjectCollection findByApveinvcmtd(string $ApveInvcMtd) Return ChildVendor objects filtered by the ApveInvcMtd column
 * @method     ChildVendor[]|ObjectCollection findByApveicntmtd(int $ApveIcntMtd) Return ChildVendor objects filtered by the ApveIcntMtd column
 * @method     ChildVendor[]|ObjectCollection findByApvedateopen(string $ApveDateOpen) Return ChildVendor objects filtered by the ApveDateOpen column
 * @method     ChildVendor[]|ObjectCollection findByApvelastpurdate(string $ApveLastPurDate) Return ChildVendor objects filtered by the ApveLastPurDate column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo01(string $ApvePur24mo01) Return ChildVendor objects filtered by the ApvePur24mo01 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo01(int $ApvePo24mo01) Return ChildVendor objects filtered by the ApvePo24mo01 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo01(string $ApveInvc24mo01) Return ChildVendor objects filtered by the ApveInvc24mo01 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo01(int $ApveIcnt24mo01) Return ChildVendor objects filtered by the ApveIcnt24mo01 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo02(string $ApvePur24mo02) Return ChildVendor objects filtered by the ApvePur24mo02 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo02(int $ApvePo24mo02) Return ChildVendor objects filtered by the ApvePo24mo02 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo02(string $ApveInvc24mo02) Return ChildVendor objects filtered by the ApveInvc24mo02 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo02(int $ApveIcnt24mo02) Return ChildVendor objects filtered by the ApveIcnt24mo02 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo03(string $ApvePur24mo03) Return ChildVendor objects filtered by the ApvePur24mo03 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo03(int $ApvePo24mo03) Return ChildVendor objects filtered by the ApvePo24mo03 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo03(string $ApveInvc24mo03) Return ChildVendor objects filtered by the ApveInvc24mo03 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo03(int $ApveIcnt24mo03) Return ChildVendor objects filtered by the ApveIcnt24mo03 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo04(string $ApvePur24mo04) Return ChildVendor objects filtered by the ApvePur24mo04 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo04(int $ApvePo24mo04) Return ChildVendor objects filtered by the ApvePo24mo04 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo04(string $ApveInvc24mo04) Return ChildVendor objects filtered by the ApveInvc24mo04 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo04(int $ApveIcnt24mo04) Return ChildVendor objects filtered by the ApveIcnt24mo04 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo05(string $ApvePur24mo05) Return ChildVendor objects filtered by the ApvePur24mo05 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo05(int $ApvePo24mo05) Return ChildVendor objects filtered by the ApvePo24mo05 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo05(string $ApveInvc24mo05) Return ChildVendor objects filtered by the ApveInvc24mo05 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo05(int $ApveIcnt24mo05) Return ChildVendor objects filtered by the ApveIcnt24mo05 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo06(string $ApvePur24mo06) Return ChildVendor objects filtered by the ApvePur24mo06 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo06(int $ApvePo24mo06) Return ChildVendor objects filtered by the ApvePo24mo06 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo06(string $ApveInvc24mo06) Return ChildVendor objects filtered by the ApveInvc24mo06 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo06(int $ApveIcnt24mo06) Return ChildVendor objects filtered by the ApveIcnt24mo06 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo07(string $ApvePur24mo07) Return ChildVendor objects filtered by the ApvePur24mo07 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo07(int $ApvePo24mo07) Return ChildVendor objects filtered by the ApvePo24mo07 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo07(string $ApveInvc24mo07) Return ChildVendor objects filtered by the ApveInvc24mo07 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo07(int $ApveIcnt24mo07) Return ChildVendor objects filtered by the ApveIcnt24mo07 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo08(string $ApvePur24mo08) Return ChildVendor objects filtered by the ApvePur24mo08 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo08(int $ApvePo24mo08) Return ChildVendor objects filtered by the ApvePo24mo08 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo08(string $ApveInvc24mo08) Return ChildVendor objects filtered by the ApveInvc24mo08 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo08(int $ApveIcnt24mo08) Return ChildVendor objects filtered by the ApveIcnt24mo08 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo09(string $ApvePur24mo09) Return ChildVendor objects filtered by the ApvePur24mo09 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo09(int $ApvePo24mo09) Return ChildVendor objects filtered by the ApvePo24mo09 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo09(string $ApveInvc24mo09) Return ChildVendor objects filtered by the ApveInvc24mo09 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo09(int $ApveIcnt24mo09) Return ChildVendor objects filtered by the ApveIcnt24mo09 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo10(string $ApvePur24mo10) Return ChildVendor objects filtered by the ApvePur24mo10 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo10(int $ApvePo24mo10) Return ChildVendor objects filtered by the ApvePo24mo10 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo10(string $ApveInvc24mo10) Return ChildVendor objects filtered by the ApveInvc24mo10 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo10(int $ApveIcnt24mo10) Return ChildVendor objects filtered by the ApveIcnt24mo10 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo11(string $ApvePur24mo11) Return ChildVendor objects filtered by the ApvePur24mo11 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo11(int $ApvePo24mo11) Return ChildVendor objects filtered by the ApvePo24mo11 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo11(string $ApveInvc24mo11) Return ChildVendor objects filtered by the ApveInvc24mo11 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo11(int $ApveIcnt24mo11) Return ChildVendor objects filtered by the ApveIcnt24mo11 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo12(string $ApvePur24mo12) Return ChildVendor objects filtered by the ApvePur24mo12 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo12(int $ApvePo24mo12) Return ChildVendor objects filtered by the ApvePo24mo12 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo12(string $ApveInvc24mo12) Return ChildVendor objects filtered by the ApveInvc24mo12 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo12(int $ApveIcnt24mo12) Return ChildVendor objects filtered by the ApveIcnt24mo12 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo13(string $ApvePur24mo13) Return ChildVendor objects filtered by the ApvePur24mo13 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo13(int $ApvePo24mo13) Return ChildVendor objects filtered by the ApvePo24mo13 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo13(string $ApveInvc24mo13) Return ChildVendor objects filtered by the ApveInvc24mo13 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo13(int $ApveIcnt24mo13) Return ChildVendor objects filtered by the ApveIcnt24mo13 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo14(string $ApvePur24mo14) Return ChildVendor objects filtered by the ApvePur24mo14 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo14(int $ApvePo24mo14) Return ChildVendor objects filtered by the ApvePo24mo14 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo14(string $ApveInvc24mo14) Return ChildVendor objects filtered by the ApveInvc24mo14 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo14(int $ApveIcnt24mo14) Return ChildVendor objects filtered by the ApveIcnt24mo14 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo15(string $ApvePur24mo15) Return ChildVendor objects filtered by the ApvePur24mo15 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo15(int $ApvePo24mo15) Return ChildVendor objects filtered by the ApvePo24mo15 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo15(string $ApveInvc24mo15) Return ChildVendor objects filtered by the ApveInvc24mo15 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo15(int $ApveIcnt24mo15) Return ChildVendor objects filtered by the ApveIcnt24mo15 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo16(string $ApvePur24mo16) Return ChildVendor objects filtered by the ApvePur24mo16 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo16(int $ApvePo24mo16) Return ChildVendor objects filtered by the ApvePo24mo16 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo16(string $ApveInvc24mo16) Return ChildVendor objects filtered by the ApveInvc24mo16 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo16(int $ApveIcnt24mo16) Return ChildVendor objects filtered by the ApveIcnt24mo16 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo17(string $ApvePur24mo17) Return ChildVendor objects filtered by the ApvePur24mo17 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo17(int $ApvePo24mo17) Return ChildVendor objects filtered by the ApvePo24mo17 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo17(string $ApveInvc24mo17) Return ChildVendor objects filtered by the ApveInvc24mo17 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo17(int $ApveIcnt24mo17) Return ChildVendor objects filtered by the ApveIcnt24mo17 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo18(string $ApvePur24mo18) Return ChildVendor objects filtered by the ApvePur24mo18 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo18(int $ApvePo24mo18) Return ChildVendor objects filtered by the ApvePo24mo18 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo18(string $ApveInvc24mo18) Return ChildVendor objects filtered by the ApveInvc24mo18 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo18(int $ApveIcnt24mo18) Return ChildVendor objects filtered by the ApveIcnt24mo18 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo19(string $ApvePur24mo19) Return ChildVendor objects filtered by the ApvePur24mo19 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo19(int $ApvePo24mo19) Return ChildVendor objects filtered by the ApvePo24mo19 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo19(string $ApveInvc24mo19) Return ChildVendor objects filtered by the ApveInvc24mo19 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo19(int $ApveIcnt24mo19) Return ChildVendor objects filtered by the ApveIcnt24mo19 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo20(string $ApvePur24mo20) Return ChildVendor objects filtered by the ApvePur24mo20 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo20(int $ApvePo24mo20) Return ChildVendor objects filtered by the ApvePo24mo20 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo20(string $ApveInvc24mo20) Return ChildVendor objects filtered by the ApveInvc24mo20 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo20(int $ApveIcnt24mo20) Return ChildVendor objects filtered by the ApveIcnt24mo20 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo21(string $ApvePur24mo21) Return ChildVendor objects filtered by the ApvePur24mo21 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo21(int $ApvePo24mo21) Return ChildVendor objects filtered by the ApvePo24mo21 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo21(string $ApveInvc24mo21) Return ChildVendor objects filtered by the ApveInvc24mo21 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo21(int $ApveIcnt24mo21) Return ChildVendor objects filtered by the ApveIcnt24mo21 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo22(string $ApvePur24mo22) Return ChildVendor objects filtered by the ApvePur24mo22 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo22(int $ApvePo24mo22) Return ChildVendor objects filtered by the ApvePo24mo22 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo22(string $ApveInvc24mo22) Return ChildVendor objects filtered by the ApveInvc24mo22 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo22(int $ApveIcnt24mo22) Return ChildVendor objects filtered by the ApveIcnt24mo22 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo23(string $ApvePur24mo23) Return ChildVendor objects filtered by the ApvePur24mo23 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo23(int $ApvePo24mo23) Return ChildVendor objects filtered by the ApvePo24mo23 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo23(string $ApveInvc24mo23) Return ChildVendor objects filtered by the ApveInvc24mo23 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo23(int $ApveIcnt24mo23) Return ChildVendor objects filtered by the ApveIcnt24mo23 column
 * @method     ChildVendor[]|ObjectCollection findByApvepur24mo24(string $ApvePur24mo24) Return ChildVendor objects filtered by the ApvePur24mo24 column
 * @method     ChildVendor[]|ObjectCollection findByApvepo24mo24(int $ApvePo24mo24) Return ChildVendor objects filtered by the ApvePo24mo24 column
 * @method     ChildVendor[]|ObjectCollection findByApveinvc24mo24(string $ApveInvc24mo24) Return ChildVendor objects filtered by the ApveInvc24mo24 column
 * @method     ChildVendor[]|ObjectCollection findByApveicnt24mo24(int $ApveIcnt24mo24) Return ChildVendor objects filtered by the ApveIcnt24mo24 column
 * @method     ChildVendor[]|ObjectCollection findByApvecrncy(string $ApveCrncy) Return ChildVendor objects filtered by the ApveCrncy column
 * @method     ChildVendor[]|ObjectCollection findByApvefrtinamt(string $ApveFrtInAmt) Return ChildVendor objects filtered by the ApveFrtInAmt column
 * @method     ChildVendor[]|ObjectCollection findByApveouracctnbr(string $ApveOurAcctNbr) Return ChildVendor objects filtered by the ApveOurAcctNbr column
 * @method     ChildVendor[]|ObjectCollection findByApvevenddisc(string $ApveVendDisc) Return ChildVendor objects filtered by the ApveVendDisc column
 * @method     ChildVendor[]|ObjectCollection findByApvefob(string $ApveFob) Return ChildVendor objects filtered by the ApveFob column
 * @method     ChildVendor[]|ObjectCollection findByApveroylpct(string $ApveRoylPct) Return ChildVendor objects filtered by the ApveRoylPct column
 * @method     ChildVendor[]|ObjectCollection findByApveprtpoeoru(string $ApvePrtPoEOrU) Return ChildVendor objects filtered by the ApvePrtPoEOrU column
 * @method     ChildVendor[]|ObjectCollection findByApvecomrate(string $ApveComRate) Return ChildVendor objects filtered by the ApveComRate column
 * @method     ChildVendor[]|ObjectCollection findByApveuselandonrcpt(string $ApveUseLandOnRcpt) Return ChildVendor objects filtered by the ApveUseLandOnRcpt column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse1(string $ApveBuyrWhse1) Return ChildVendor objects filtered by the ApveBuyrWhse1 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode1(string $ApveBuyrCode1) Return ChildVendor objects filtered by the ApveBuyrCode1 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse2(string $ApveBuyrWhse2) Return ChildVendor objects filtered by the ApveBuyrWhse2 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode2(string $ApveBuyrCode2) Return ChildVendor objects filtered by the ApveBuyrCode2 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse3(string $ApveBuyrWhse3) Return ChildVendor objects filtered by the ApveBuyrWhse3 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode3(string $ApveBuyrCode3) Return ChildVendor objects filtered by the ApveBuyrCode3 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse4(string $ApveBuyrWhse4) Return ChildVendor objects filtered by the ApveBuyrWhse4 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode4(string $ApveBuyrCode4) Return ChildVendor objects filtered by the ApveBuyrCode4 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse5(string $ApveBuyrWhse5) Return ChildVendor objects filtered by the ApveBuyrWhse5 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode5(string $ApveBuyrCode5) Return ChildVendor objects filtered by the ApveBuyrCode5 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse6(string $ApveBuyrWhse6) Return ChildVendor objects filtered by the ApveBuyrWhse6 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode6(string $ApveBuyrCode6) Return ChildVendor objects filtered by the ApveBuyrCode6 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse7(string $ApveBuyrWhse7) Return ChildVendor objects filtered by the ApveBuyrWhse7 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode7(string $ApveBuyrCode7) Return ChildVendor objects filtered by the ApveBuyrCode7 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse8(string $ApveBuyrWhse8) Return ChildVendor objects filtered by the ApveBuyrWhse8 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode8(string $ApveBuyrCode8) Return ChildVendor objects filtered by the ApveBuyrCode8 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse9(string $ApveBuyrWhse9) Return ChildVendor objects filtered by the ApveBuyrWhse9 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode9(string $ApveBuyrCode9) Return ChildVendor objects filtered by the ApveBuyrCode9 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrwhse10(string $ApveBuyrWhse10) Return ChildVendor objects filtered by the ApveBuyrWhse10 column
 * @method     ChildVendor[]|ObjectCollection findByApvebuyrcode10(string $ApveBuyrCode10) Return ChildVendor objects filtered by the ApveBuyrCode10 column
 * @method     ChildVendor[]|ObjectCollection findByApvelandcost(string $ApveLandCost) Return ChildVendor objects filtered by the ApveLandCost column
 * @method     ChildVendor[]|ObjectCollection findByApvereleasenbr(int $ApveReleaseNbr) Return ChildVendor objects filtered by the ApveReleaseNbr column
 * @method     ChildVendor[]|ObjectCollection findByApvescanstartpos(int $ApveScanStartPos) Return ChildVendor objects filtered by the ApveScanStartPos column
 * @method     ChildVendor[]|ObjectCollection findByApvescanlength(int $ApveScanLength) Return ChildVendor objects filtered by the ApveScanLength column
 * @method     ChildVendor[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildVendor objects filtered by the DateUpdtd column
 * @method     ChildVendor[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildVendor objects filtered by the TimeUpdtd column
 * @method     ChildVendor[]|ObjectCollection findByDummy(string $dummy) Return ChildVendor objects filtered by the dummy column
 * @method     ChildVendor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class VendorQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\VendorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Vendor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildVendorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildVendorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildVendorQuery) {
            return $criteria;
        }
        $query = new ChildVendorQuery();
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
     * @return ChildVendor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(VendorTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = VendorTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildVendor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, ApveName, ApveAdr1, ApveAdr2, ApveAdr3, ApveCtry, ApveCity, ApveStat, ApveZipCode, ApvePayName, ApvePayAdr1, ApvePayAdr2, ApvePayAdr3, ApvePayCtry, ApvePayCity, ApvePayStat, ApvePayZipCode, ApveStatus, ApveTakeExpiredDisc, ApvePrintHts, ApveFabBin, ApveLmPrntBulk, ApveAllowDropShip, AptbTypeCode, AptmTermCode, ApveSviaCode, ApveOldFob, ApveLeadDays, ApveGlAcct, Apve1099SsNbr, ApveMinOrdrCode, ApveMinOrdrValue, ApvePurMtd, ApvePoMtd, ApveInvcMtd, ApveIcntMtd, ApveDateOpen, ApveLastPurDate, ApvePur24mo01, ApvePo24mo01, ApveInvc24mo01, ApveIcnt24mo01, ApvePur24mo02, ApvePo24mo02, ApveInvc24mo02, ApveIcnt24mo02, ApvePur24mo03, ApvePo24mo03, ApveInvc24mo03, ApveIcnt24mo03, ApvePur24mo04, ApvePo24mo04, ApveInvc24mo04, ApveIcnt24mo04, ApvePur24mo05, ApvePo24mo05, ApveInvc24mo05, ApveIcnt24mo05, ApvePur24mo06, ApvePo24mo06, ApveInvc24mo06, ApveIcnt24mo06, ApvePur24mo07, ApvePo24mo07, ApveInvc24mo07, ApveIcnt24mo07, ApvePur24mo08, ApvePo24mo08, ApveInvc24mo08, ApveIcnt24mo08, ApvePur24mo09, ApvePo24mo09, ApveInvc24mo09, ApveIcnt24mo09, ApvePur24mo10, ApvePo24mo10, ApveInvc24mo10, ApveIcnt24mo10, ApvePur24mo11, ApvePo24mo11, ApveInvc24mo11, ApveIcnt24mo11, ApvePur24mo12, ApvePo24mo12, ApveInvc24mo12, ApveIcnt24mo12, ApvePur24mo13, ApvePo24mo13, ApveInvc24mo13, ApveIcnt24mo13, ApvePur24mo14, ApvePo24mo14, ApveInvc24mo14, ApveIcnt24mo14, ApvePur24mo15, ApvePo24mo15, ApveInvc24mo15, ApveIcnt24mo15, ApvePur24mo16, ApvePo24mo16, ApveInvc24mo16, ApveIcnt24mo16, ApvePur24mo17, ApvePo24mo17, ApveInvc24mo17, ApveIcnt24mo17, ApvePur24mo18, ApvePo24mo18, ApveInvc24mo18, ApveIcnt24mo18, ApvePur24mo19, ApvePo24mo19, ApveInvc24mo19, ApveIcnt24mo19, ApvePur24mo20, ApvePo24mo20, ApveInvc24mo20, ApveIcnt24mo20, ApvePur24mo21, ApvePo24mo21, ApveInvc24mo21, ApveIcnt24mo21, ApvePur24mo22, ApvePo24mo22, ApveInvc24mo22, ApveIcnt24mo22, ApvePur24mo23, ApvePo24mo23, ApveInvc24mo23, ApveIcnt24mo23, ApvePur24mo24, ApvePo24mo24, ApveInvc24mo24, ApveIcnt24mo24, ApveCrncy, ApveFrtInAmt, ApveOurAcctNbr, ApveVendDisc, ApveFob, ApveRoylPct, ApvePrtPoEOrU, ApveComRate, ApveUseLandOnRcpt, ApveBuyrWhse1, ApveBuyrCode1, ApveBuyrWhse2, ApveBuyrCode2, ApveBuyrWhse3, ApveBuyrCode3, ApveBuyrWhse4, ApveBuyrCode4, ApveBuyrWhse5, ApveBuyrCode5, ApveBuyrWhse6, ApveBuyrCode6, ApveBuyrWhse7, ApveBuyrCode7, ApveBuyrWhse8, ApveBuyrCode8, ApveBuyrWhse9, ApveBuyrCode9, ApveBuyrWhse10, ApveBuyrCode10, ApveLandCost, ApveReleaseNbr, ApveScanStartPos, ApveScanLength, DateUpdtd, TimeUpdtd, dummy FROM ap_vend_mast WHERE ApveVendId = :p0';
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
            /** @var ChildVendor $obj */
            $obj = new ChildVendor();
            $obj->hydrate($row);
            VendorTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildVendor|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VendorTableMap::COL_APVEVENDID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VendorTableMap::COL_APVEVENDID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the ApveName column
     *
     * Example usage:
     * <code>
     * $query->filterByApvename('fooValue');   // WHERE ApveName = 'fooValue'
     * $query->filterByApvename('%fooValue%', Criteria::LIKE); // WHERE ApveName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvename($apvename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVENAME, $apvename, $comparison);
    }

    /**
     * Filter the query on the ApveAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveadr1('fooValue');   // WHERE ApveAdr1 = 'fooValue'
     * $query->filterByApveadr1('%fooValue%', Criteria::LIKE); // WHERE ApveAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveadr1($apveadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEADR1, $apveadr1, $comparison);
    }

    /**
     * Filter the query on the ApveAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveadr2('fooValue');   // WHERE ApveAdr2 = 'fooValue'
     * $query->filterByApveadr2('%fooValue%', Criteria::LIKE); // WHERE ApveAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveadr2($apveadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEADR2, $apveadr2, $comparison);
    }

    /**
     * Filter the query on the ApveAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveadr3('fooValue');   // WHERE ApveAdr3 = 'fooValue'
     * $query->filterByApveadr3('%fooValue%', Criteria::LIKE); // WHERE ApveAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveadr3($apveadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEADR3, $apveadr3, $comparison);
    }

    /**
     * Filter the query on the ApveCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApvectry('fooValue');   // WHERE ApveCtry = 'fooValue'
     * $query->filterByApvectry('%fooValue%', Criteria::LIKE); // WHERE ApveCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvectry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvectry($apvectry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvectry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVECTRY, $apvectry, $comparison);
    }

    /**
     * Filter the query on the ApveCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApvecity('fooValue');   // WHERE ApveCity = 'fooValue'
     * $query->filterByApvecity('%fooValue%', Criteria::LIKE); // WHERE ApveCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvecity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvecity($apvecity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvecity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVECITY, $apvecity, $comparison);
    }

    /**
     * Filter the query on the ApveStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApvestat('fooValue');   // WHERE ApveStat = 'fooValue'
     * $query->filterByApvestat('%fooValue%', Criteria::LIKE); // WHERE ApveStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvestat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvestat($apvestat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvestat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVESTAT, $apvestat, $comparison);
    }

    /**
     * Filter the query on the ApveZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApvezipcode('fooValue');   // WHERE ApveZipCode = 'fooValue'
     * $query->filterByApvezipcode('%fooValue%', Criteria::LIKE); // WHERE ApveZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvezipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvezipcode($apvezipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvezipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEZIPCODE, $apvezipcode, $comparison);
    }

    /**
     * Filter the query on the ApvePayName column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepayname('fooValue');   // WHERE ApvePayName = 'fooValue'
     * $query->filterByApvepayname('%fooValue%', Criteria::LIKE); // WHERE ApvePayName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepayname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepayname($apvepayname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepayname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYNAME, $apvepayname, $comparison);
    }

    /**
     * Filter the query on the ApvePayAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepayadr1('fooValue');   // WHERE ApvePayAdr1 = 'fooValue'
     * $query->filterByApvepayadr1('%fooValue%', Criteria::LIKE); // WHERE ApvePayAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepayadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepayadr1($apvepayadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepayadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYADR1, $apvepayadr1, $comparison);
    }

    /**
     * Filter the query on the ApvePayAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepayadr2('fooValue');   // WHERE ApvePayAdr2 = 'fooValue'
     * $query->filterByApvepayadr2('%fooValue%', Criteria::LIKE); // WHERE ApvePayAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepayadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepayadr2($apvepayadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepayadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYADR2, $apvepayadr2, $comparison);
    }

    /**
     * Filter the query on the ApvePayAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepayadr3('fooValue');   // WHERE ApvePayAdr3 = 'fooValue'
     * $query->filterByApvepayadr3('%fooValue%', Criteria::LIKE); // WHERE ApvePayAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepayadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepayadr3($apvepayadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepayadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYADR3, $apvepayadr3, $comparison);
    }

    /**
     * Filter the query on the ApvePayCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepayctry('fooValue');   // WHERE ApvePayCtry = 'fooValue'
     * $query->filterByApvepayctry('%fooValue%', Criteria::LIKE); // WHERE ApvePayCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepayctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepayctry($apvepayctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepayctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYCTRY, $apvepayctry, $comparison);
    }

    /**
     * Filter the query on the ApvePayCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepaycity('fooValue');   // WHERE ApvePayCity = 'fooValue'
     * $query->filterByApvepaycity('%fooValue%', Criteria::LIKE); // WHERE ApvePayCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepaycity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepaycity($apvepaycity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepaycity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYCITY, $apvepaycity, $comparison);
    }

    /**
     * Filter the query on the ApvePayStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepaystat('fooValue');   // WHERE ApvePayStat = 'fooValue'
     * $query->filterByApvepaystat('%fooValue%', Criteria::LIKE); // WHERE ApvePayStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepaystat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepaystat($apvepaystat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepaystat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYSTAT, $apvepaystat, $comparison);
    }

    /**
     * Filter the query on the ApvePayZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepayzipcode('fooValue');   // WHERE ApvePayZipCode = 'fooValue'
     * $query->filterByApvepayzipcode('%fooValue%', Criteria::LIKE); // WHERE ApvePayZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvepayzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepayzipcode($apvepayzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvepayzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPAYZIPCODE, $apvepayzipcode, $comparison);
    }

    /**
     * Filter the query on the ApveStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByApvestatus('fooValue');   // WHERE ApveStatus = 'fooValue'
     * $query->filterByApvestatus('%fooValue%', Criteria::LIKE); // WHERE ApveStatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvestatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvestatus($apvestatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvestatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVESTATUS, $apvestatus, $comparison);
    }

    /**
     * Filter the query on the ApveTakeExpiredDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByApvetakeexpireddisc('fooValue');   // WHERE ApveTakeExpiredDisc = 'fooValue'
     * $query->filterByApvetakeexpireddisc('%fooValue%', Criteria::LIKE); // WHERE ApveTakeExpiredDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvetakeexpireddisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvetakeexpireddisc($apvetakeexpireddisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvetakeexpireddisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVETAKEEXPIREDDISC, $apvetakeexpireddisc, $comparison);
    }

    /**
     * Filter the query on the ApvePrintHts column
     *
     * Example usage:
     * <code>
     * $query->filterByApveprinthts('fooValue');   // WHERE ApvePrintHts = 'fooValue'
     * $query->filterByApveprinthts('%fooValue%', Criteria::LIKE); // WHERE ApvePrintHts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveprinthts The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveprinthts($apveprinthts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveprinthts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPRINTHTS, $apveprinthts, $comparison);
    }

    /**
     * Filter the query on the ApveFabBin column
     *
     * Example usage:
     * <code>
     * $query->filterByApvefabbin('fooValue');   // WHERE ApveFabBin = 'fooValue'
     * $query->filterByApvefabbin('%fooValue%', Criteria::LIKE); // WHERE ApveFabBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvefabbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvefabbin($apvefabbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvefabbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEFABBIN, $apvefabbin, $comparison);
    }

    /**
     * Filter the query on the ApveLmPrntBulk column
     *
     * Example usage:
     * <code>
     * $query->filterByApvelmprntbulk('fooValue');   // WHERE ApveLmPrntBulk = 'fooValue'
     * $query->filterByApvelmprntbulk('%fooValue%', Criteria::LIKE); // WHERE ApveLmPrntBulk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvelmprntbulk The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvelmprntbulk($apvelmprntbulk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvelmprntbulk)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVELMPRNTBULK, $apvelmprntbulk, $comparison);
    }

    /**
     * Filter the query on the ApveAllowDropShip column
     *
     * Example usage:
     * <code>
     * $query->filterByApveallowdropship('fooValue');   // WHERE ApveAllowDropShip = 'fooValue'
     * $query->filterByApveallowdropship('%fooValue%', Criteria::LIKE); // WHERE ApveAllowDropShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveallowdropship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveallowdropship($apveallowdropship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveallowdropship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEALLOWDROPSHIP, $apveallowdropship, $comparison);
    }

    /**
     * Filter the query on the AptbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypecode('fooValue');   // WHERE AptbTypeCode = 'fooValue'
     * $query->filterByAptbtypecode('%fooValue%', Criteria::LIKE); // WHERE AptbTypeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbtypecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByAptbtypecode($aptbtypecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APTBTYPECODE, $aptbtypecode, $comparison);
    }

    /**
     * Filter the query on the AptmTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmtermcode('fooValue');   // WHERE AptmTermCode = 'fooValue'
     * $query->filterByAptmtermcode('%fooValue%', Criteria::LIKE); // WHERE AptmTermCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptmtermcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByAptmtermcode($aptmtermcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APTMTERMCODE, $aptmtermcode, $comparison);
    }

    /**
     * Filter the query on the ApveSviaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApvesviacode('fooValue');   // WHERE ApveSviaCode = 'fooValue'
     * $query->filterByApvesviacode('%fooValue%', Criteria::LIKE); // WHERE ApveSviaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvesviacode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvesviacode($apvesviacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvesviacode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVESVIACODE, $apvesviacode, $comparison);
    }

    /**
     * Filter the query on the ApveOldFob column
     *
     * Example usage:
     * <code>
     * $query->filterByApveoldfob('fooValue');   // WHERE ApveOldFob = 'fooValue'
     * $query->filterByApveoldfob('%fooValue%', Criteria::LIKE); // WHERE ApveOldFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveoldfob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveoldfob($apveoldfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveoldfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEOLDFOB, $apveoldfob, $comparison);
    }

    /**
     * Filter the query on the ApveLeadDays column
     *
     * Example usage:
     * <code>
     * $query->filterByApveleaddays(1234); // WHERE ApveLeadDays = 1234
     * $query->filterByApveleaddays(array(12, 34)); // WHERE ApveLeadDays IN (12, 34)
     * $query->filterByApveleaddays(array('min' => 12)); // WHERE ApveLeadDays > 12
     * </code>
     *
     * @param     mixed $apveleaddays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveleaddays($apveleaddays = null, $comparison = null)
    {
        if (is_array($apveleaddays)) {
            $useMinMax = false;
            if (isset($apveleaddays['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVELEADDAYS, $apveleaddays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveleaddays['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVELEADDAYS, $apveleaddays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVELEADDAYS, $apveleaddays, $comparison);
    }

    /**
     * Filter the query on the ApveGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByApveglacct('fooValue');   // WHERE ApveGlAcct = 'fooValue'
     * $query->filterByApveglacct('%fooValue%', Criteria::LIKE); // WHERE ApveGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveglacct($apveglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEGLACCT, $apveglacct, $comparison);
    }

    /**
     * Filter the query on the Apve1099SsNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApve1099ssnbr('fooValue');   // WHERE Apve1099SsNbr = 'fooValue'
     * $query->filterByApve1099ssnbr('%fooValue%', Criteria::LIKE); // WHERE Apve1099SsNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apve1099ssnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApve1099ssnbr($apve1099ssnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apve1099ssnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVE1099SSNBR, $apve1099ssnbr, $comparison);
    }

    /**
     * Filter the query on the ApveMinOrdrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApveminordrcode('fooValue');   // WHERE ApveMinOrdrCode = 'fooValue'
     * $query->filterByApveminordrcode('%fooValue%', Criteria::LIKE); // WHERE ApveMinOrdrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveminordrcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveminordrcode($apveminordrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveminordrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEMINORDRCODE, $apveminordrcode, $comparison);
    }

    /**
     * Filter the query on the ApveMinOrdrValue column
     *
     * Example usage:
     * <code>
     * $query->filterByApveminordrvalue(1234); // WHERE ApveMinOrdrValue = 1234
     * $query->filterByApveminordrvalue(array(12, 34)); // WHERE ApveMinOrdrValue IN (12, 34)
     * $query->filterByApveminordrvalue(array('min' => 12)); // WHERE ApveMinOrdrValue > 12
     * </code>
     *
     * @param     mixed $apveminordrvalue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveminordrvalue($apveminordrvalue = null, $comparison = null)
    {
        if (is_array($apveminordrvalue)) {
            $useMinMax = false;
            if (isset($apveminordrvalue['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEMINORDRVALUE, $apveminordrvalue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveminordrvalue['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEMINORDRVALUE, $apveminordrvalue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEMINORDRVALUE, $apveminordrvalue, $comparison);
    }

    /**
     * Filter the query on the ApvePurMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepurmtd(1234); // WHERE ApvePurMtd = 1234
     * $query->filterByApvepurmtd(array(12, 34)); // WHERE ApvePurMtd IN (12, 34)
     * $query->filterByApvepurmtd(array('min' => 12)); // WHERE ApvePurMtd > 12
     * </code>
     *
     * @param     mixed $apvepurmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepurmtd($apvepurmtd = null, $comparison = null)
    {
        if (is_array($apvepurmtd)) {
            $useMinMax = false;
            if (isset($apvepurmtd['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPURMTD, $apvepurmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepurmtd['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPURMTD, $apvepurmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPURMTD, $apvepurmtd, $comparison);
    }

    /**
     * Filter the query on the ApvePoMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepomtd(1234); // WHERE ApvePoMtd = 1234
     * $query->filterByApvepomtd(array(12, 34)); // WHERE ApvePoMtd IN (12, 34)
     * $query->filterByApvepomtd(array('min' => 12)); // WHERE ApvePoMtd > 12
     * </code>
     *
     * @param     mixed $apvepomtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepomtd($apvepomtd = null, $comparison = null)
    {
        if (is_array($apvepomtd)) {
            $useMinMax = false;
            if (isset($apvepomtd['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPOMTD, $apvepomtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepomtd['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPOMTD, $apvepomtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPOMTD, $apvepomtd, $comparison);
    }

    /**
     * Filter the query on the ApveInvcMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvcmtd(1234); // WHERE ApveInvcMtd = 1234
     * $query->filterByApveinvcmtd(array(12, 34)); // WHERE ApveInvcMtd IN (12, 34)
     * $query->filterByApveinvcmtd(array('min' => 12)); // WHERE ApveInvcMtd > 12
     * </code>
     *
     * @param     mixed $apveinvcmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvcmtd($apveinvcmtd = null, $comparison = null)
    {
        if (is_array($apveinvcmtd)) {
            $useMinMax = false;
            if (isset($apveinvcmtd['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVCMTD, $apveinvcmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvcmtd['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVCMTD, $apveinvcmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVCMTD, $apveinvcmtd, $comparison);
    }

    /**
     * Filter the query on the ApveIcntMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicntmtd(1234); // WHERE ApveIcntMtd = 1234
     * $query->filterByApveicntmtd(array(12, 34)); // WHERE ApveIcntMtd IN (12, 34)
     * $query->filterByApveicntmtd(array('min' => 12)); // WHERE ApveIcntMtd > 12
     * </code>
     *
     * @param     mixed $apveicntmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicntmtd($apveicntmtd = null, $comparison = null)
    {
        if (is_array($apveicntmtd)) {
            $useMinMax = false;
            if (isset($apveicntmtd['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNTMTD, $apveicntmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicntmtd['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNTMTD, $apveicntmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNTMTD, $apveicntmtd, $comparison);
    }

    /**
     * Filter the query on the ApveDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByApvedateopen('fooValue');   // WHERE ApveDateOpen = 'fooValue'
     * $query->filterByApvedateopen('%fooValue%', Criteria::LIKE); // WHERE ApveDateOpen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvedateopen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvedateopen($apvedateopen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvedateopen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEDATEOPEN, $apvedateopen, $comparison);
    }

    /**
     * Filter the query on the ApveLastPurDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApvelastpurdate('fooValue');   // WHERE ApveLastPurDate = 'fooValue'
     * $query->filterByApvelastpurdate('%fooValue%', Criteria::LIKE); // WHERE ApveLastPurDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvelastpurdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvelastpurdate($apvelastpurdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvelastpurdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVELASTPURDATE, $apvelastpurdate, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo01(1234); // WHERE ApvePur24mo01 = 1234
     * $query->filterByApvepur24mo01(array(12, 34)); // WHERE ApvePur24mo01 IN (12, 34)
     * $query->filterByApvepur24mo01(array('min' => 12)); // WHERE ApvePur24mo01 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo01($apvepur24mo01 = null, $comparison = null)
    {
        if (is_array($apvepur24mo01)) {
            $useMinMax = false;
            if (isset($apvepur24mo01['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO01, $apvepur24mo01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo01['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO01, $apvepur24mo01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO01, $apvepur24mo01, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo01(1234); // WHERE ApvePo24mo01 = 1234
     * $query->filterByApvepo24mo01(array(12, 34)); // WHERE ApvePo24mo01 IN (12, 34)
     * $query->filterByApvepo24mo01(array('min' => 12)); // WHERE ApvePo24mo01 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo01($apvepo24mo01 = null, $comparison = null)
    {
        if (is_array($apvepo24mo01)) {
            $useMinMax = false;
            if (isset($apvepo24mo01['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO01, $apvepo24mo01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo01['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO01, $apvepo24mo01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO01, $apvepo24mo01, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo01(1234); // WHERE ApveInvc24mo01 = 1234
     * $query->filterByApveinvc24mo01(array(12, 34)); // WHERE ApveInvc24mo01 IN (12, 34)
     * $query->filterByApveinvc24mo01(array('min' => 12)); // WHERE ApveInvc24mo01 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo01($apveinvc24mo01 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo01)) {
            $useMinMax = false;
            if (isset($apveinvc24mo01['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO01, $apveinvc24mo01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo01['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO01, $apveinvc24mo01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO01, $apveinvc24mo01, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo01(1234); // WHERE ApveIcnt24mo01 = 1234
     * $query->filterByApveicnt24mo01(array(12, 34)); // WHERE ApveIcnt24mo01 IN (12, 34)
     * $query->filterByApveicnt24mo01(array('min' => 12)); // WHERE ApveIcnt24mo01 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo01($apveicnt24mo01 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo01)) {
            $useMinMax = false;
            if (isset($apveicnt24mo01['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO01, $apveicnt24mo01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo01['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO01, $apveicnt24mo01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO01, $apveicnt24mo01, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo02(1234); // WHERE ApvePur24mo02 = 1234
     * $query->filterByApvepur24mo02(array(12, 34)); // WHERE ApvePur24mo02 IN (12, 34)
     * $query->filterByApvepur24mo02(array('min' => 12)); // WHERE ApvePur24mo02 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo02($apvepur24mo02 = null, $comparison = null)
    {
        if (is_array($apvepur24mo02)) {
            $useMinMax = false;
            if (isset($apvepur24mo02['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO02, $apvepur24mo02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo02['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO02, $apvepur24mo02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO02, $apvepur24mo02, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo02(1234); // WHERE ApvePo24mo02 = 1234
     * $query->filterByApvepo24mo02(array(12, 34)); // WHERE ApvePo24mo02 IN (12, 34)
     * $query->filterByApvepo24mo02(array('min' => 12)); // WHERE ApvePo24mo02 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo02($apvepo24mo02 = null, $comparison = null)
    {
        if (is_array($apvepo24mo02)) {
            $useMinMax = false;
            if (isset($apvepo24mo02['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO02, $apvepo24mo02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo02['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO02, $apvepo24mo02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO02, $apvepo24mo02, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo02(1234); // WHERE ApveInvc24mo02 = 1234
     * $query->filterByApveinvc24mo02(array(12, 34)); // WHERE ApveInvc24mo02 IN (12, 34)
     * $query->filterByApveinvc24mo02(array('min' => 12)); // WHERE ApveInvc24mo02 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo02($apveinvc24mo02 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo02)) {
            $useMinMax = false;
            if (isset($apveinvc24mo02['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO02, $apveinvc24mo02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo02['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO02, $apveinvc24mo02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO02, $apveinvc24mo02, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo02(1234); // WHERE ApveIcnt24mo02 = 1234
     * $query->filterByApveicnt24mo02(array(12, 34)); // WHERE ApveIcnt24mo02 IN (12, 34)
     * $query->filterByApveicnt24mo02(array('min' => 12)); // WHERE ApveIcnt24mo02 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo02($apveicnt24mo02 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo02)) {
            $useMinMax = false;
            if (isset($apveicnt24mo02['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO02, $apveicnt24mo02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo02['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO02, $apveicnt24mo02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO02, $apveicnt24mo02, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo03(1234); // WHERE ApvePur24mo03 = 1234
     * $query->filterByApvepur24mo03(array(12, 34)); // WHERE ApvePur24mo03 IN (12, 34)
     * $query->filterByApvepur24mo03(array('min' => 12)); // WHERE ApvePur24mo03 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo03($apvepur24mo03 = null, $comparison = null)
    {
        if (is_array($apvepur24mo03)) {
            $useMinMax = false;
            if (isset($apvepur24mo03['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO03, $apvepur24mo03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo03['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO03, $apvepur24mo03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO03, $apvepur24mo03, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo03(1234); // WHERE ApvePo24mo03 = 1234
     * $query->filterByApvepo24mo03(array(12, 34)); // WHERE ApvePo24mo03 IN (12, 34)
     * $query->filterByApvepo24mo03(array('min' => 12)); // WHERE ApvePo24mo03 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo03($apvepo24mo03 = null, $comparison = null)
    {
        if (is_array($apvepo24mo03)) {
            $useMinMax = false;
            if (isset($apvepo24mo03['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO03, $apvepo24mo03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo03['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO03, $apvepo24mo03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO03, $apvepo24mo03, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo03(1234); // WHERE ApveInvc24mo03 = 1234
     * $query->filterByApveinvc24mo03(array(12, 34)); // WHERE ApveInvc24mo03 IN (12, 34)
     * $query->filterByApveinvc24mo03(array('min' => 12)); // WHERE ApveInvc24mo03 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo03($apveinvc24mo03 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo03)) {
            $useMinMax = false;
            if (isset($apveinvc24mo03['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO03, $apveinvc24mo03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo03['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO03, $apveinvc24mo03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO03, $apveinvc24mo03, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo03(1234); // WHERE ApveIcnt24mo03 = 1234
     * $query->filterByApveicnt24mo03(array(12, 34)); // WHERE ApveIcnt24mo03 IN (12, 34)
     * $query->filterByApveicnt24mo03(array('min' => 12)); // WHERE ApveIcnt24mo03 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo03($apveicnt24mo03 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo03)) {
            $useMinMax = false;
            if (isset($apveicnt24mo03['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO03, $apveicnt24mo03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo03['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO03, $apveicnt24mo03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO03, $apveicnt24mo03, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo04(1234); // WHERE ApvePur24mo04 = 1234
     * $query->filterByApvepur24mo04(array(12, 34)); // WHERE ApvePur24mo04 IN (12, 34)
     * $query->filterByApvepur24mo04(array('min' => 12)); // WHERE ApvePur24mo04 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo04($apvepur24mo04 = null, $comparison = null)
    {
        if (is_array($apvepur24mo04)) {
            $useMinMax = false;
            if (isset($apvepur24mo04['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO04, $apvepur24mo04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo04['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO04, $apvepur24mo04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO04, $apvepur24mo04, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo04(1234); // WHERE ApvePo24mo04 = 1234
     * $query->filterByApvepo24mo04(array(12, 34)); // WHERE ApvePo24mo04 IN (12, 34)
     * $query->filterByApvepo24mo04(array('min' => 12)); // WHERE ApvePo24mo04 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo04($apvepo24mo04 = null, $comparison = null)
    {
        if (is_array($apvepo24mo04)) {
            $useMinMax = false;
            if (isset($apvepo24mo04['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO04, $apvepo24mo04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo04['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO04, $apvepo24mo04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO04, $apvepo24mo04, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo04(1234); // WHERE ApveInvc24mo04 = 1234
     * $query->filterByApveinvc24mo04(array(12, 34)); // WHERE ApveInvc24mo04 IN (12, 34)
     * $query->filterByApveinvc24mo04(array('min' => 12)); // WHERE ApveInvc24mo04 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo04($apveinvc24mo04 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo04)) {
            $useMinMax = false;
            if (isset($apveinvc24mo04['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO04, $apveinvc24mo04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo04['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO04, $apveinvc24mo04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO04, $apveinvc24mo04, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo04(1234); // WHERE ApveIcnt24mo04 = 1234
     * $query->filterByApveicnt24mo04(array(12, 34)); // WHERE ApveIcnt24mo04 IN (12, 34)
     * $query->filterByApveicnt24mo04(array('min' => 12)); // WHERE ApveIcnt24mo04 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo04($apveicnt24mo04 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo04)) {
            $useMinMax = false;
            if (isset($apveicnt24mo04['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO04, $apveicnt24mo04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo04['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO04, $apveicnt24mo04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO04, $apveicnt24mo04, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo05(1234); // WHERE ApvePur24mo05 = 1234
     * $query->filterByApvepur24mo05(array(12, 34)); // WHERE ApvePur24mo05 IN (12, 34)
     * $query->filterByApvepur24mo05(array('min' => 12)); // WHERE ApvePur24mo05 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo05($apvepur24mo05 = null, $comparison = null)
    {
        if (is_array($apvepur24mo05)) {
            $useMinMax = false;
            if (isset($apvepur24mo05['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO05, $apvepur24mo05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo05['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO05, $apvepur24mo05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO05, $apvepur24mo05, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo05(1234); // WHERE ApvePo24mo05 = 1234
     * $query->filterByApvepo24mo05(array(12, 34)); // WHERE ApvePo24mo05 IN (12, 34)
     * $query->filterByApvepo24mo05(array('min' => 12)); // WHERE ApvePo24mo05 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo05($apvepo24mo05 = null, $comparison = null)
    {
        if (is_array($apvepo24mo05)) {
            $useMinMax = false;
            if (isset($apvepo24mo05['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO05, $apvepo24mo05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo05['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO05, $apvepo24mo05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO05, $apvepo24mo05, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo05(1234); // WHERE ApveInvc24mo05 = 1234
     * $query->filterByApveinvc24mo05(array(12, 34)); // WHERE ApveInvc24mo05 IN (12, 34)
     * $query->filterByApveinvc24mo05(array('min' => 12)); // WHERE ApveInvc24mo05 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo05($apveinvc24mo05 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo05)) {
            $useMinMax = false;
            if (isset($apveinvc24mo05['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO05, $apveinvc24mo05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo05['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO05, $apveinvc24mo05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO05, $apveinvc24mo05, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo05(1234); // WHERE ApveIcnt24mo05 = 1234
     * $query->filterByApveicnt24mo05(array(12, 34)); // WHERE ApveIcnt24mo05 IN (12, 34)
     * $query->filterByApveicnt24mo05(array('min' => 12)); // WHERE ApveIcnt24mo05 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo05($apveicnt24mo05 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo05)) {
            $useMinMax = false;
            if (isset($apveicnt24mo05['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO05, $apveicnt24mo05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo05['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO05, $apveicnt24mo05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO05, $apveicnt24mo05, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo06(1234); // WHERE ApvePur24mo06 = 1234
     * $query->filterByApvepur24mo06(array(12, 34)); // WHERE ApvePur24mo06 IN (12, 34)
     * $query->filterByApvepur24mo06(array('min' => 12)); // WHERE ApvePur24mo06 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo06($apvepur24mo06 = null, $comparison = null)
    {
        if (is_array($apvepur24mo06)) {
            $useMinMax = false;
            if (isset($apvepur24mo06['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO06, $apvepur24mo06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo06['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO06, $apvepur24mo06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO06, $apvepur24mo06, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo06(1234); // WHERE ApvePo24mo06 = 1234
     * $query->filterByApvepo24mo06(array(12, 34)); // WHERE ApvePo24mo06 IN (12, 34)
     * $query->filterByApvepo24mo06(array('min' => 12)); // WHERE ApvePo24mo06 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo06($apvepo24mo06 = null, $comparison = null)
    {
        if (is_array($apvepo24mo06)) {
            $useMinMax = false;
            if (isset($apvepo24mo06['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO06, $apvepo24mo06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo06['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO06, $apvepo24mo06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO06, $apvepo24mo06, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo06(1234); // WHERE ApveInvc24mo06 = 1234
     * $query->filterByApveinvc24mo06(array(12, 34)); // WHERE ApveInvc24mo06 IN (12, 34)
     * $query->filterByApveinvc24mo06(array('min' => 12)); // WHERE ApveInvc24mo06 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo06($apveinvc24mo06 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo06)) {
            $useMinMax = false;
            if (isset($apveinvc24mo06['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO06, $apveinvc24mo06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo06['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO06, $apveinvc24mo06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO06, $apveinvc24mo06, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo06(1234); // WHERE ApveIcnt24mo06 = 1234
     * $query->filterByApveicnt24mo06(array(12, 34)); // WHERE ApveIcnt24mo06 IN (12, 34)
     * $query->filterByApveicnt24mo06(array('min' => 12)); // WHERE ApveIcnt24mo06 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo06($apveicnt24mo06 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo06)) {
            $useMinMax = false;
            if (isset($apveicnt24mo06['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO06, $apveicnt24mo06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo06['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO06, $apveicnt24mo06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO06, $apveicnt24mo06, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo07(1234); // WHERE ApvePur24mo07 = 1234
     * $query->filterByApvepur24mo07(array(12, 34)); // WHERE ApvePur24mo07 IN (12, 34)
     * $query->filterByApvepur24mo07(array('min' => 12)); // WHERE ApvePur24mo07 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo07($apvepur24mo07 = null, $comparison = null)
    {
        if (is_array($apvepur24mo07)) {
            $useMinMax = false;
            if (isset($apvepur24mo07['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO07, $apvepur24mo07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo07['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO07, $apvepur24mo07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO07, $apvepur24mo07, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo07(1234); // WHERE ApvePo24mo07 = 1234
     * $query->filterByApvepo24mo07(array(12, 34)); // WHERE ApvePo24mo07 IN (12, 34)
     * $query->filterByApvepo24mo07(array('min' => 12)); // WHERE ApvePo24mo07 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo07($apvepo24mo07 = null, $comparison = null)
    {
        if (is_array($apvepo24mo07)) {
            $useMinMax = false;
            if (isset($apvepo24mo07['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO07, $apvepo24mo07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo07['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO07, $apvepo24mo07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO07, $apvepo24mo07, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo07(1234); // WHERE ApveInvc24mo07 = 1234
     * $query->filterByApveinvc24mo07(array(12, 34)); // WHERE ApveInvc24mo07 IN (12, 34)
     * $query->filterByApveinvc24mo07(array('min' => 12)); // WHERE ApveInvc24mo07 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo07($apveinvc24mo07 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo07)) {
            $useMinMax = false;
            if (isset($apveinvc24mo07['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO07, $apveinvc24mo07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo07['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO07, $apveinvc24mo07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO07, $apveinvc24mo07, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo07(1234); // WHERE ApveIcnt24mo07 = 1234
     * $query->filterByApveicnt24mo07(array(12, 34)); // WHERE ApveIcnt24mo07 IN (12, 34)
     * $query->filterByApveicnt24mo07(array('min' => 12)); // WHERE ApveIcnt24mo07 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo07($apveicnt24mo07 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo07)) {
            $useMinMax = false;
            if (isset($apveicnt24mo07['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO07, $apveicnt24mo07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo07['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO07, $apveicnt24mo07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO07, $apveicnt24mo07, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo08(1234); // WHERE ApvePur24mo08 = 1234
     * $query->filterByApvepur24mo08(array(12, 34)); // WHERE ApvePur24mo08 IN (12, 34)
     * $query->filterByApvepur24mo08(array('min' => 12)); // WHERE ApvePur24mo08 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo08($apvepur24mo08 = null, $comparison = null)
    {
        if (is_array($apvepur24mo08)) {
            $useMinMax = false;
            if (isset($apvepur24mo08['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO08, $apvepur24mo08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo08['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO08, $apvepur24mo08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO08, $apvepur24mo08, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo08(1234); // WHERE ApvePo24mo08 = 1234
     * $query->filterByApvepo24mo08(array(12, 34)); // WHERE ApvePo24mo08 IN (12, 34)
     * $query->filterByApvepo24mo08(array('min' => 12)); // WHERE ApvePo24mo08 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo08($apvepo24mo08 = null, $comparison = null)
    {
        if (is_array($apvepo24mo08)) {
            $useMinMax = false;
            if (isset($apvepo24mo08['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO08, $apvepo24mo08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo08['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO08, $apvepo24mo08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO08, $apvepo24mo08, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo08(1234); // WHERE ApveInvc24mo08 = 1234
     * $query->filterByApveinvc24mo08(array(12, 34)); // WHERE ApveInvc24mo08 IN (12, 34)
     * $query->filterByApveinvc24mo08(array('min' => 12)); // WHERE ApveInvc24mo08 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo08($apveinvc24mo08 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo08)) {
            $useMinMax = false;
            if (isset($apveinvc24mo08['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO08, $apveinvc24mo08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo08['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO08, $apveinvc24mo08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO08, $apveinvc24mo08, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo08(1234); // WHERE ApveIcnt24mo08 = 1234
     * $query->filterByApveicnt24mo08(array(12, 34)); // WHERE ApveIcnt24mo08 IN (12, 34)
     * $query->filterByApveicnt24mo08(array('min' => 12)); // WHERE ApveIcnt24mo08 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo08($apveicnt24mo08 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo08)) {
            $useMinMax = false;
            if (isset($apveicnt24mo08['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO08, $apveicnt24mo08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo08['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO08, $apveicnt24mo08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO08, $apveicnt24mo08, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo09(1234); // WHERE ApvePur24mo09 = 1234
     * $query->filterByApvepur24mo09(array(12, 34)); // WHERE ApvePur24mo09 IN (12, 34)
     * $query->filterByApvepur24mo09(array('min' => 12)); // WHERE ApvePur24mo09 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo09($apvepur24mo09 = null, $comparison = null)
    {
        if (is_array($apvepur24mo09)) {
            $useMinMax = false;
            if (isset($apvepur24mo09['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO09, $apvepur24mo09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo09['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO09, $apvepur24mo09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO09, $apvepur24mo09, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo09(1234); // WHERE ApvePo24mo09 = 1234
     * $query->filterByApvepo24mo09(array(12, 34)); // WHERE ApvePo24mo09 IN (12, 34)
     * $query->filterByApvepo24mo09(array('min' => 12)); // WHERE ApvePo24mo09 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo09($apvepo24mo09 = null, $comparison = null)
    {
        if (is_array($apvepo24mo09)) {
            $useMinMax = false;
            if (isset($apvepo24mo09['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO09, $apvepo24mo09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo09['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO09, $apvepo24mo09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO09, $apvepo24mo09, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo09(1234); // WHERE ApveInvc24mo09 = 1234
     * $query->filterByApveinvc24mo09(array(12, 34)); // WHERE ApveInvc24mo09 IN (12, 34)
     * $query->filterByApveinvc24mo09(array('min' => 12)); // WHERE ApveInvc24mo09 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo09($apveinvc24mo09 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo09)) {
            $useMinMax = false;
            if (isset($apveinvc24mo09['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO09, $apveinvc24mo09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo09['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO09, $apveinvc24mo09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO09, $apveinvc24mo09, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo09(1234); // WHERE ApveIcnt24mo09 = 1234
     * $query->filterByApveicnt24mo09(array(12, 34)); // WHERE ApveIcnt24mo09 IN (12, 34)
     * $query->filterByApveicnt24mo09(array('min' => 12)); // WHERE ApveIcnt24mo09 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo09($apveicnt24mo09 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo09)) {
            $useMinMax = false;
            if (isset($apveicnt24mo09['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO09, $apveicnt24mo09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo09['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO09, $apveicnt24mo09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO09, $apveicnt24mo09, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo10(1234); // WHERE ApvePur24mo10 = 1234
     * $query->filterByApvepur24mo10(array(12, 34)); // WHERE ApvePur24mo10 IN (12, 34)
     * $query->filterByApvepur24mo10(array('min' => 12)); // WHERE ApvePur24mo10 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo10($apvepur24mo10 = null, $comparison = null)
    {
        if (is_array($apvepur24mo10)) {
            $useMinMax = false;
            if (isset($apvepur24mo10['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO10, $apvepur24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo10['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO10, $apvepur24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO10, $apvepur24mo10, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo10(1234); // WHERE ApvePo24mo10 = 1234
     * $query->filterByApvepo24mo10(array(12, 34)); // WHERE ApvePo24mo10 IN (12, 34)
     * $query->filterByApvepo24mo10(array('min' => 12)); // WHERE ApvePo24mo10 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo10($apvepo24mo10 = null, $comparison = null)
    {
        if (is_array($apvepo24mo10)) {
            $useMinMax = false;
            if (isset($apvepo24mo10['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO10, $apvepo24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo10['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO10, $apvepo24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO10, $apvepo24mo10, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo10(1234); // WHERE ApveInvc24mo10 = 1234
     * $query->filterByApveinvc24mo10(array(12, 34)); // WHERE ApveInvc24mo10 IN (12, 34)
     * $query->filterByApveinvc24mo10(array('min' => 12)); // WHERE ApveInvc24mo10 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo10($apveinvc24mo10 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo10)) {
            $useMinMax = false;
            if (isset($apveinvc24mo10['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO10, $apveinvc24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo10['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO10, $apveinvc24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO10, $apveinvc24mo10, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo10(1234); // WHERE ApveIcnt24mo10 = 1234
     * $query->filterByApveicnt24mo10(array(12, 34)); // WHERE ApveIcnt24mo10 IN (12, 34)
     * $query->filterByApveicnt24mo10(array('min' => 12)); // WHERE ApveIcnt24mo10 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo10($apveicnt24mo10 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo10)) {
            $useMinMax = false;
            if (isset($apveicnt24mo10['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO10, $apveicnt24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo10['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO10, $apveicnt24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO10, $apveicnt24mo10, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo11(1234); // WHERE ApvePur24mo11 = 1234
     * $query->filterByApvepur24mo11(array(12, 34)); // WHERE ApvePur24mo11 IN (12, 34)
     * $query->filterByApvepur24mo11(array('min' => 12)); // WHERE ApvePur24mo11 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo11($apvepur24mo11 = null, $comparison = null)
    {
        if (is_array($apvepur24mo11)) {
            $useMinMax = false;
            if (isset($apvepur24mo11['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO11, $apvepur24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo11['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO11, $apvepur24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO11, $apvepur24mo11, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo11(1234); // WHERE ApvePo24mo11 = 1234
     * $query->filterByApvepo24mo11(array(12, 34)); // WHERE ApvePo24mo11 IN (12, 34)
     * $query->filterByApvepo24mo11(array('min' => 12)); // WHERE ApvePo24mo11 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo11($apvepo24mo11 = null, $comparison = null)
    {
        if (is_array($apvepo24mo11)) {
            $useMinMax = false;
            if (isset($apvepo24mo11['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO11, $apvepo24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo11['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO11, $apvepo24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO11, $apvepo24mo11, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo11(1234); // WHERE ApveInvc24mo11 = 1234
     * $query->filterByApveinvc24mo11(array(12, 34)); // WHERE ApveInvc24mo11 IN (12, 34)
     * $query->filterByApveinvc24mo11(array('min' => 12)); // WHERE ApveInvc24mo11 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo11($apveinvc24mo11 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo11)) {
            $useMinMax = false;
            if (isset($apveinvc24mo11['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO11, $apveinvc24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo11['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO11, $apveinvc24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO11, $apveinvc24mo11, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo11(1234); // WHERE ApveIcnt24mo11 = 1234
     * $query->filterByApveicnt24mo11(array(12, 34)); // WHERE ApveIcnt24mo11 IN (12, 34)
     * $query->filterByApveicnt24mo11(array('min' => 12)); // WHERE ApveIcnt24mo11 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo11($apveicnt24mo11 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo11)) {
            $useMinMax = false;
            if (isset($apveicnt24mo11['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO11, $apveicnt24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo11['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO11, $apveicnt24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO11, $apveicnt24mo11, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo12(1234); // WHERE ApvePur24mo12 = 1234
     * $query->filterByApvepur24mo12(array(12, 34)); // WHERE ApvePur24mo12 IN (12, 34)
     * $query->filterByApvepur24mo12(array('min' => 12)); // WHERE ApvePur24mo12 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo12($apvepur24mo12 = null, $comparison = null)
    {
        if (is_array($apvepur24mo12)) {
            $useMinMax = false;
            if (isset($apvepur24mo12['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO12, $apvepur24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo12['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO12, $apvepur24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO12, $apvepur24mo12, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo12(1234); // WHERE ApvePo24mo12 = 1234
     * $query->filterByApvepo24mo12(array(12, 34)); // WHERE ApvePo24mo12 IN (12, 34)
     * $query->filterByApvepo24mo12(array('min' => 12)); // WHERE ApvePo24mo12 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo12($apvepo24mo12 = null, $comparison = null)
    {
        if (is_array($apvepo24mo12)) {
            $useMinMax = false;
            if (isset($apvepo24mo12['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO12, $apvepo24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo12['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO12, $apvepo24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO12, $apvepo24mo12, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo12(1234); // WHERE ApveInvc24mo12 = 1234
     * $query->filterByApveinvc24mo12(array(12, 34)); // WHERE ApveInvc24mo12 IN (12, 34)
     * $query->filterByApveinvc24mo12(array('min' => 12)); // WHERE ApveInvc24mo12 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo12($apveinvc24mo12 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo12)) {
            $useMinMax = false;
            if (isset($apveinvc24mo12['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO12, $apveinvc24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo12['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO12, $apveinvc24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO12, $apveinvc24mo12, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo12(1234); // WHERE ApveIcnt24mo12 = 1234
     * $query->filterByApveicnt24mo12(array(12, 34)); // WHERE ApveIcnt24mo12 IN (12, 34)
     * $query->filterByApveicnt24mo12(array('min' => 12)); // WHERE ApveIcnt24mo12 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo12($apveicnt24mo12 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo12)) {
            $useMinMax = false;
            if (isset($apveicnt24mo12['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO12, $apveicnt24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo12['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO12, $apveicnt24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO12, $apveicnt24mo12, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo13(1234); // WHERE ApvePur24mo13 = 1234
     * $query->filterByApvepur24mo13(array(12, 34)); // WHERE ApvePur24mo13 IN (12, 34)
     * $query->filterByApvepur24mo13(array('min' => 12)); // WHERE ApvePur24mo13 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo13($apvepur24mo13 = null, $comparison = null)
    {
        if (is_array($apvepur24mo13)) {
            $useMinMax = false;
            if (isset($apvepur24mo13['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO13, $apvepur24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo13['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO13, $apvepur24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO13, $apvepur24mo13, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo13(1234); // WHERE ApvePo24mo13 = 1234
     * $query->filterByApvepo24mo13(array(12, 34)); // WHERE ApvePo24mo13 IN (12, 34)
     * $query->filterByApvepo24mo13(array('min' => 12)); // WHERE ApvePo24mo13 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo13($apvepo24mo13 = null, $comparison = null)
    {
        if (is_array($apvepo24mo13)) {
            $useMinMax = false;
            if (isset($apvepo24mo13['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO13, $apvepo24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo13['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO13, $apvepo24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO13, $apvepo24mo13, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo13(1234); // WHERE ApveInvc24mo13 = 1234
     * $query->filterByApveinvc24mo13(array(12, 34)); // WHERE ApveInvc24mo13 IN (12, 34)
     * $query->filterByApveinvc24mo13(array('min' => 12)); // WHERE ApveInvc24mo13 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo13($apveinvc24mo13 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo13)) {
            $useMinMax = false;
            if (isset($apveinvc24mo13['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO13, $apveinvc24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo13['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO13, $apveinvc24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO13, $apveinvc24mo13, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo13(1234); // WHERE ApveIcnt24mo13 = 1234
     * $query->filterByApveicnt24mo13(array(12, 34)); // WHERE ApveIcnt24mo13 IN (12, 34)
     * $query->filterByApveicnt24mo13(array('min' => 12)); // WHERE ApveIcnt24mo13 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo13($apveicnt24mo13 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo13)) {
            $useMinMax = false;
            if (isset($apveicnt24mo13['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO13, $apveicnt24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo13['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO13, $apveicnt24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO13, $apveicnt24mo13, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo14(1234); // WHERE ApvePur24mo14 = 1234
     * $query->filterByApvepur24mo14(array(12, 34)); // WHERE ApvePur24mo14 IN (12, 34)
     * $query->filterByApvepur24mo14(array('min' => 12)); // WHERE ApvePur24mo14 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo14($apvepur24mo14 = null, $comparison = null)
    {
        if (is_array($apvepur24mo14)) {
            $useMinMax = false;
            if (isset($apvepur24mo14['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO14, $apvepur24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo14['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO14, $apvepur24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO14, $apvepur24mo14, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo14(1234); // WHERE ApvePo24mo14 = 1234
     * $query->filterByApvepo24mo14(array(12, 34)); // WHERE ApvePo24mo14 IN (12, 34)
     * $query->filterByApvepo24mo14(array('min' => 12)); // WHERE ApvePo24mo14 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo14($apvepo24mo14 = null, $comparison = null)
    {
        if (is_array($apvepo24mo14)) {
            $useMinMax = false;
            if (isset($apvepo24mo14['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO14, $apvepo24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo14['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO14, $apvepo24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO14, $apvepo24mo14, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo14(1234); // WHERE ApveInvc24mo14 = 1234
     * $query->filterByApveinvc24mo14(array(12, 34)); // WHERE ApveInvc24mo14 IN (12, 34)
     * $query->filterByApveinvc24mo14(array('min' => 12)); // WHERE ApveInvc24mo14 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo14($apveinvc24mo14 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo14)) {
            $useMinMax = false;
            if (isset($apveinvc24mo14['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO14, $apveinvc24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo14['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO14, $apveinvc24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO14, $apveinvc24mo14, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo14(1234); // WHERE ApveIcnt24mo14 = 1234
     * $query->filterByApveicnt24mo14(array(12, 34)); // WHERE ApveIcnt24mo14 IN (12, 34)
     * $query->filterByApveicnt24mo14(array('min' => 12)); // WHERE ApveIcnt24mo14 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo14($apveicnt24mo14 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo14)) {
            $useMinMax = false;
            if (isset($apveicnt24mo14['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO14, $apveicnt24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo14['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO14, $apveicnt24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO14, $apveicnt24mo14, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo15(1234); // WHERE ApvePur24mo15 = 1234
     * $query->filterByApvepur24mo15(array(12, 34)); // WHERE ApvePur24mo15 IN (12, 34)
     * $query->filterByApvepur24mo15(array('min' => 12)); // WHERE ApvePur24mo15 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo15($apvepur24mo15 = null, $comparison = null)
    {
        if (is_array($apvepur24mo15)) {
            $useMinMax = false;
            if (isset($apvepur24mo15['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO15, $apvepur24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo15['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO15, $apvepur24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO15, $apvepur24mo15, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo15(1234); // WHERE ApvePo24mo15 = 1234
     * $query->filterByApvepo24mo15(array(12, 34)); // WHERE ApvePo24mo15 IN (12, 34)
     * $query->filterByApvepo24mo15(array('min' => 12)); // WHERE ApvePo24mo15 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo15($apvepo24mo15 = null, $comparison = null)
    {
        if (is_array($apvepo24mo15)) {
            $useMinMax = false;
            if (isset($apvepo24mo15['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO15, $apvepo24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo15['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO15, $apvepo24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO15, $apvepo24mo15, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo15(1234); // WHERE ApveInvc24mo15 = 1234
     * $query->filterByApveinvc24mo15(array(12, 34)); // WHERE ApveInvc24mo15 IN (12, 34)
     * $query->filterByApveinvc24mo15(array('min' => 12)); // WHERE ApveInvc24mo15 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo15($apveinvc24mo15 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo15)) {
            $useMinMax = false;
            if (isset($apveinvc24mo15['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO15, $apveinvc24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo15['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO15, $apveinvc24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO15, $apveinvc24mo15, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo15(1234); // WHERE ApveIcnt24mo15 = 1234
     * $query->filterByApveicnt24mo15(array(12, 34)); // WHERE ApveIcnt24mo15 IN (12, 34)
     * $query->filterByApveicnt24mo15(array('min' => 12)); // WHERE ApveIcnt24mo15 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo15($apveicnt24mo15 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo15)) {
            $useMinMax = false;
            if (isset($apveicnt24mo15['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO15, $apveicnt24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo15['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO15, $apveicnt24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO15, $apveicnt24mo15, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo16(1234); // WHERE ApvePur24mo16 = 1234
     * $query->filterByApvepur24mo16(array(12, 34)); // WHERE ApvePur24mo16 IN (12, 34)
     * $query->filterByApvepur24mo16(array('min' => 12)); // WHERE ApvePur24mo16 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo16($apvepur24mo16 = null, $comparison = null)
    {
        if (is_array($apvepur24mo16)) {
            $useMinMax = false;
            if (isset($apvepur24mo16['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO16, $apvepur24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo16['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO16, $apvepur24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO16, $apvepur24mo16, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo16(1234); // WHERE ApvePo24mo16 = 1234
     * $query->filterByApvepo24mo16(array(12, 34)); // WHERE ApvePo24mo16 IN (12, 34)
     * $query->filterByApvepo24mo16(array('min' => 12)); // WHERE ApvePo24mo16 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo16($apvepo24mo16 = null, $comparison = null)
    {
        if (is_array($apvepo24mo16)) {
            $useMinMax = false;
            if (isset($apvepo24mo16['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO16, $apvepo24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo16['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO16, $apvepo24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO16, $apvepo24mo16, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo16(1234); // WHERE ApveInvc24mo16 = 1234
     * $query->filterByApveinvc24mo16(array(12, 34)); // WHERE ApveInvc24mo16 IN (12, 34)
     * $query->filterByApveinvc24mo16(array('min' => 12)); // WHERE ApveInvc24mo16 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo16($apveinvc24mo16 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo16)) {
            $useMinMax = false;
            if (isset($apveinvc24mo16['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO16, $apveinvc24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo16['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO16, $apveinvc24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO16, $apveinvc24mo16, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo16(1234); // WHERE ApveIcnt24mo16 = 1234
     * $query->filterByApveicnt24mo16(array(12, 34)); // WHERE ApveIcnt24mo16 IN (12, 34)
     * $query->filterByApveicnt24mo16(array('min' => 12)); // WHERE ApveIcnt24mo16 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo16($apveicnt24mo16 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo16)) {
            $useMinMax = false;
            if (isset($apveicnt24mo16['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO16, $apveicnt24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo16['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO16, $apveicnt24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO16, $apveicnt24mo16, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo17(1234); // WHERE ApvePur24mo17 = 1234
     * $query->filterByApvepur24mo17(array(12, 34)); // WHERE ApvePur24mo17 IN (12, 34)
     * $query->filterByApvepur24mo17(array('min' => 12)); // WHERE ApvePur24mo17 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo17($apvepur24mo17 = null, $comparison = null)
    {
        if (is_array($apvepur24mo17)) {
            $useMinMax = false;
            if (isset($apvepur24mo17['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO17, $apvepur24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo17['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO17, $apvepur24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO17, $apvepur24mo17, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo17(1234); // WHERE ApvePo24mo17 = 1234
     * $query->filterByApvepo24mo17(array(12, 34)); // WHERE ApvePo24mo17 IN (12, 34)
     * $query->filterByApvepo24mo17(array('min' => 12)); // WHERE ApvePo24mo17 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo17($apvepo24mo17 = null, $comparison = null)
    {
        if (is_array($apvepo24mo17)) {
            $useMinMax = false;
            if (isset($apvepo24mo17['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO17, $apvepo24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo17['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO17, $apvepo24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO17, $apvepo24mo17, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo17(1234); // WHERE ApveInvc24mo17 = 1234
     * $query->filterByApveinvc24mo17(array(12, 34)); // WHERE ApveInvc24mo17 IN (12, 34)
     * $query->filterByApveinvc24mo17(array('min' => 12)); // WHERE ApveInvc24mo17 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo17($apveinvc24mo17 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo17)) {
            $useMinMax = false;
            if (isset($apveinvc24mo17['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO17, $apveinvc24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo17['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO17, $apveinvc24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO17, $apveinvc24mo17, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo17(1234); // WHERE ApveIcnt24mo17 = 1234
     * $query->filterByApveicnt24mo17(array(12, 34)); // WHERE ApveIcnt24mo17 IN (12, 34)
     * $query->filterByApveicnt24mo17(array('min' => 12)); // WHERE ApveIcnt24mo17 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo17($apveicnt24mo17 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo17)) {
            $useMinMax = false;
            if (isset($apveicnt24mo17['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO17, $apveicnt24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo17['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO17, $apveicnt24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO17, $apveicnt24mo17, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo18(1234); // WHERE ApvePur24mo18 = 1234
     * $query->filterByApvepur24mo18(array(12, 34)); // WHERE ApvePur24mo18 IN (12, 34)
     * $query->filterByApvepur24mo18(array('min' => 12)); // WHERE ApvePur24mo18 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo18($apvepur24mo18 = null, $comparison = null)
    {
        if (is_array($apvepur24mo18)) {
            $useMinMax = false;
            if (isset($apvepur24mo18['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO18, $apvepur24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo18['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO18, $apvepur24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO18, $apvepur24mo18, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo18(1234); // WHERE ApvePo24mo18 = 1234
     * $query->filterByApvepo24mo18(array(12, 34)); // WHERE ApvePo24mo18 IN (12, 34)
     * $query->filterByApvepo24mo18(array('min' => 12)); // WHERE ApvePo24mo18 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo18($apvepo24mo18 = null, $comparison = null)
    {
        if (is_array($apvepo24mo18)) {
            $useMinMax = false;
            if (isset($apvepo24mo18['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO18, $apvepo24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo18['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO18, $apvepo24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO18, $apvepo24mo18, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo18(1234); // WHERE ApveInvc24mo18 = 1234
     * $query->filterByApveinvc24mo18(array(12, 34)); // WHERE ApveInvc24mo18 IN (12, 34)
     * $query->filterByApveinvc24mo18(array('min' => 12)); // WHERE ApveInvc24mo18 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo18($apveinvc24mo18 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo18)) {
            $useMinMax = false;
            if (isset($apveinvc24mo18['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO18, $apveinvc24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo18['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO18, $apveinvc24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO18, $apveinvc24mo18, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo18(1234); // WHERE ApveIcnt24mo18 = 1234
     * $query->filterByApveicnt24mo18(array(12, 34)); // WHERE ApveIcnt24mo18 IN (12, 34)
     * $query->filterByApveicnt24mo18(array('min' => 12)); // WHERE ApveIcnt24mo18 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo18($apveicnt24mo18 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo18)) {
            $useMinMax = false;
            if (isset($apveicnt24mo18['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO18, $apveicnt24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo18['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO18, $apveicnt24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO18, $apveicnt24mo18, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo19(1234); // WHERE ApvePur24mo19 = 1234
     * $query->filterByApvepur24mo19(array(12, 34)); // WHERE ApvePur24mo19 IN (12, 34)
     * $query->filterByApvepur24mo19(array('min' => 12)); // WHERE ApvePur24mo19 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo19($apvepur24mo19 = null, $comparison = null)
    {
        if (is_array($apvepur24mo19)) {
            $useMinMax = false;
            if (isset($apvepur24mo19['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO19, $apvepur24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo19['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO19, $apvepur24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO19, $apvepur24mo19, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo19(1234); // WHERE ApvePo24mo19 = 1234
     * $query->filterByApvepo24mo19(array(12, 34)); // WHERE ApvePo24mo19 IN (12, 34)
     * $query->filterByApvepo24mo19(array('min' => 12)); // WHERE ApvePo24mo19 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo19($apvepo24mo19 = null, $comparison = null)
    {
        if (is_array($apvepo24mo19)) {
            $useMinMax = false;
            if (isset($apvepo24mo19['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO19, $apvepo24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo19['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO19, $apvepo24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO19, $apvepo24mo19, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo19(1234); // WHERE ApveInvc24mo19 = 1234
     * $query->filterByApveinvc24mo19(array(12, 34)); // WHERE ApveInvc24mo19 IN (12, 34)
     * $query->filterByApveinvc24mo19(array('min' => 12)); // WHERE ApveInvc24mo19 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo19($apveinvc24mo19 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo19)) {
            $useMinMax = false;
            if (isset($apveinvc24mo19['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO19, $apveinvc24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo19['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO19, $apveinvc24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO19, $apveinvc24mo19, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo19(1234); // WHERE ApveIcnt24mo19 = 1234
     * $query->filterByApveicnt24mo19(array(12, 34)); // WHERE ApveIcnt24mo19 IN (12, 34)
     * $query->filterByApveicnt24mo19(array('min' => 12)); // WHERE ApveIcnt24mo19 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo19($apveicnt24mo19 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo19)) {
            $useMinMax = false;
            if (isset($apveicnt24mo19['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO19, $apveicnt24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo19['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO19, $apveicnt24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO19, $apveicnt24mo19, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo20(1234); // WHERE ApvePur24mo20 = 1234
     * $query->filterByApvepur24mo20(array(12, 34)); // WHERE ApvePur24mo20 IN (12, 34)
     * $query->filterByApvepur24mo20(array('min' => 12)); // WHERE ApvePur24mo20 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo20($apvepur24mo20 = null, $comparison = null)
    {
        if (is_array($apvepur24mo20)) {
            $useMinMax = false;
            if (isset($apvepur24mo20['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO20, $apvepur24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo20['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO20, $apvepur24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO20, $apvepur24mo20, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo20(1234); // WHERE ApvePo24mo20 = 1234
     * $query->filterByApvepo24mo20(array(12, 34)); // WHERE ApvePo24mo20 IN (12, 34)
     * $query->filterByApvepo24mo20(array('min' => 12)); // WHERE ApvePo24mo20 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo20($apvepo24mo20 = null, $comparison = null)
    {
        if (is_array($apvepo24mo20)) {
            $useMinMax = false;
            if (isset($apvepo24mo20['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO20, $apvepo24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo20['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO20, $apvepo24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO20, $apvepo24mo20, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo20(1234); // WHERE ApveInvc24mo20 = 1234
     * $query->filterByApveinvc24mo20(array(12, 34)); // WHERE ApveInvc24mo20 IN (12, 34)
     * $query->filterByApveinvc24mo20(array('min' => 12)); // WHERE ApveInvc24mo20 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo20($apveinvc24mo20 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo20)) {
            $useMinMax = false;
            if (isset($apveinvc24mo20['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO20, $apveinvc24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo20['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO20, $apveinvc24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO20, $apveinvc24mo20, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo20(1234); // WHERE ApveIcnt24mo20 = 1234
     * $query->filterByApveicnt24mo20(array(12, 34)); // WHERE ApveIcnt24mo20 IN (12, 34)
     * $query->filterByApveicnt24mo20(array('min' => 12)); // WHERE ApveIcnt24mo20 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo20($apveicnt24mo20 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo20)) {
            $useMinMax = false;
            if (isset($apveicnt24mo20['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO20, $apveicnt24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo20['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO20, $apveicnt24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO20, $apveicnt24mo20, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo21(1234); // WHERE ApvePur24mo21 = 1234
     * $query->filterByApvepur24mo21(array(12, 34)); // WHERE ApvePur24mo21 IN (12, 34)
     * $query->filterByApvepur24mo21(array('min' => 12)); // WHERE ApvePur24mo21 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo21($apvepur24mo21 = null, $comparison = null)
    {
        if (is_array($apvepur24mo21)) {
            $useMinMax = false;
            if (isset($apvepur24mo21['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO21, $apvepur24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo21['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO21, $apvepur24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO21, $apvepur24mo21, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo21(1234); // WHERE ApvePo24mo21 = 1234
     * $query->filterByApvepo24mo21(array(12, 34)); // WHERE ApvePo24mo21 IN (12, 34)
     * $query->filterByApvepo24mo21(array('min' => 12)); // WHERE ApvePo24mo21 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo21($apvepo24mo21 = null, $comparison = null)
    {
        if (is_array($apvepo24mo21)) {
            $useMinMax = false;
            if (isset($apvepo24mo21['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO21, $apvepo24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo21['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO21, $apvepo24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO21, $apvepo24mo21, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo21(1234); // WHERE ApveInvc24mo21 = 1234
     * $query->filterByApveinvc24mo21(array(12, 34)); // WHERE ApveInvc24mo21 IN (12, 34)
     * $query->filterByApveinvc24mo21(array('min' => 12)); // WHERE ApveInvc24mo21 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo21($apveinvc24mo21 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo21)) {
            $useMinMax = false;
            if (isset($apveinvc24mo21['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO21, $apveinvc24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo21['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO21, $apveinvc24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO21, $apveinvc24mo21, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo21(1234); // WHERE ApveIcnt24mo21 = 1234
     * $query->filterByApveicnt24mo21(array(12, 34)); // WHERE ApveIcnt24mo21 IN (12, 34)
     * $query->filterByApveicnt24mo21(array('min' => 12)); // WHERE ApveIcnt24mo21 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo21($apveicnt24mo21 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo21)) {
            $useMinMax = false;
            if (isset($apveicnt24mo21['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO21, $apveicnt24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo21['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO21, $apveicnt24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO21, $apveicnt24mo21, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo22(1234); // WHERE ApvePur24mo22 = 1234
     * $query->filterByApvepur24mo22(array(12, 34)); // WHERE ApvePur24mo22 IN (12, 34)
     * $query->filterByApvepur24mo22(array('min' => 12)); // WHERE ApvePur24mo22 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo22($apvepur24mo22 = null, $comparison = null)
    {
        if (is_array($apvepur24mo22)) {
            $useMinMax = false;
            if (isset($apvepur24mo22['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO22, $apvepur24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo22['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO22, $apvepur24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO22, $apvepur24mo22, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo22(1234); // WHERE ApvePo24mo22 = 1234
     * $query->filterByApvepo24mo22(array(12, 34)); // WHERE ApvePo24mo22 IN (12, 34)
     * $query->filterByApvepo24mo22(array('min' => 12)); // WHERE ApvePo24mo22 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo22($apvepo24mo22 = null, $comparison = null)
    {
        if (is_array($apvepo24mo22)) {
            $useMinMax = false;
            if (isset($apvepo24mo22['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO22, $apvepo24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo22['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO22, $apvepo24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO22, $apvepo24mo22, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo22(1234); // WHERE ApveInvc24mo22 = 1234
     * $query->filterByApveinvc24mo22(array(12, 34)); // WHERE ApveInvc24mo22 IN (12, 34)
     * $query->filterByApveinvc24mo22(array('min' => 12)); // WHERE ApveInvc24mo22 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo22($apveinvc24mo22 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo22)) {
            $useMinMax = false;
            if (isset($apveinvc24mo22['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO22, $apveinvc24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo22['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO22, $apveinvc24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO22, $apveinvc24mo22, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo22(1234); // WHERE ApveIcnt24mo22 = 1234
     * $query->filterByApveicnt24mo22(array(12, 34)); // WHERE ApveIcnt24mo22 IN (12, 34)
     * $query->filterByApveicnt24mo22(array('min' => 12)); // WHERE ApveIcnt24mo22 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo22($apveicnt24mo22 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo22)) {
            $useMinMax = false;
            if (isset($apveicnt24mo22['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO22, $apveicnt24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo22['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO22, $apveicnt24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO22, $apveicnt24mo22, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo23(1234); // WHERE ApvePur24mo23 = 1234
     * $query->filterByApvepur24mo23(array(12, 34)); // WHERE ApvePur24mo23 IN (12, 34)
     * $query->filterByApvepur24mo23(array('min' => 12)); // WHERE ApvePur24mo23 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo23($apvepur24mo23 = null, $comparison = null)
    {
        if (is_array($apvepur24mo23)) {
            $useMinMax = false;
            if (isset($apvepur24mo23['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO23, $apvepur24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo23['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO23, $apvepur24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO23, $apvepur24mo23, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo23(1234); // WHERE ApvePo24mo23 = 1234
     * $query->filterByApvepo24mo23(array(12, 34)); // WHERE ApvePo24mo23 IN (12, 34)
     * $query->filterByApvepo24mo23(array('min' => 12)); // WHERE ApvePo24mo23 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo23($apvepo24mo23 = null, $comparison = null)
    {
        if (is_array($apvepo24mo23)) {
            $useMinMax = false;
            if (isset($apvepo24mo23['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO23, $apvepo24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo23['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO23, $apvepo24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO23, $apvepo24mo23, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo23(1234); // WHERE ApveInvc24mo23 = 1234
     * $query->filterByApveinvc24mo23(array(12, 34)); // WHERE ApveInvc24mo23 IN (12, 34)
     * $query->filterByApveinvc24mo23(array('min' => 12)); // WHERE ApveInvc24mo23 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo23($apveinvc24mo23 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo23)) {
            $useMinMax = false;
            if (isset($apveinvc24mo23['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO23, $apveinvc24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo23['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO23, $apveinvc24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO23, $apveinvc24mo23, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo23(1234); // WHERE ApveIcnt24mo23 = 1234
     * $query->filterByApveicnt24mo23(array(12, 34)); // WHERE ApveIcnt24mo23 IN (12, 34)
     * $query->filterByApveicnt24mo23(array('min' => 12)); // WHERE ApveIcnt24mo23 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo23($apveicnt24mo23 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo23)) {
            $useMinMax = false;
            if (isset($apveicnt24mo23['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO23, $apveicnt24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo23['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO23, $apveicnt24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO23, $apveicnt24mo23, $comparison);
    }

    /**
     * Filter the query on the ApvePur24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepur24mo24(1234); // WHERE ApvePur24mo24 = 1234
     * $query->filterByApvepur24mo24(array(12, 34)); // WHERE ApvePur24mo24 IN (12, 34)
     * $query->filterByApvepur24mo24(array('min' => 12)); // WHERE ApvePur24mo24 > 12
     * </code>
     *
     * @param     mixed $apvepur24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepur24mo24($apvepur24mo24 = null, $comparison = null)
    {
        if (is_array($apvepur24mo24)) {
            $useMinMax = false;
            if (isset($apvepur24mo24['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO24, $apvepur24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepur24mo24['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO24, $apvepur24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPUR24MO24, $apvepur24mo24, $comparison);
    }

    /**
     * Filter the query on the ApvePo24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvepo24mo24(1234); // WHERE ApvePo24mo24 = 1234
     * $query->filterByApvepo24mo24(array(12, 34)); // WHERE ApvePo24mo24 IN (12, 34)
     * $query->filterByApvepo24mo24(array('min' => 12)); // WHERE ApvePo24mo24 > 12
     * </code>
     *
     * @param     mixed $apvepo24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvepo24mo24($apvepo24mo24 = null, $comparison = null)
    {
        if (is_array($apvepo24mo24)) {
            $useMinMax = false;
            if (isset($apvepo24mo24['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO24, $apvepo24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvepo24mo24['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO24, $apvepo24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPO24MO24, $apvepo24mo24, $comparison);
    }

    /**
     * Filter the query on the ApveInvc24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveinvc24mo24(1234); // WHERE ApveInvc24mo24 = 1234
     * $query->filterByApveinvc24mo24(array(12, 34)); // WHERE ApveInvc24mo24 IN (12, 34)
     * $query->filterByApveinvc24mo24(array('min' => 12)); // WHERE ApveInvc24mo24 > 12
     * </code>
     *
     * @param     mixed $apveinvc24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveinvc24mo24($apveinvc24mo24 = null, $comparison = null)
    {
        if (is_array($apveinvc24mo24)) {
            $useMinMax = false;
            if (isset($apveinvc24mo24['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO24, $apveinvc24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveinvc24mo24['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO24, $apveinvc24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEINVC24MO24, $apveinvc24mo24, $comparison);
    }

    /**
     * Filter the query on the ApveIcnt24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByApveicnt24mo24(1234); // WHERE ApveIcnt24mo24 = 1234
     * $query->filterByApveicnt24mo24(array(12, 34)); // WHERE ApveIcnt24mo24 IN (12, 34)
     * $query->filterByApveicnt24mo24(array('min' => 12)); // WHERE ApveIcnt24mo24 > 12
     * </code>
     *
     * @param     mixed $apveicnt24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveicnt24mo24($apveicnt24mo24 = null, $comparison = null)
    {
        if (is_array($apveicnt24mo24)) {
            $useMinMax = false;
            if (isset($apveicnt24mo24['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO24, $apveicnt24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveicnt24mo24['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO24, $apveicnt24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEICNT24MO24, $apveicnt24mo24, $comparison);
    }

    /**
     * Filter the query on the ApveCrncy column
     *
     * Example usage:
     * <code>
     * $query->filterByApvecrncy('fooValue');   // WHERE ApveCrncy = 'fooValue'
     * $query->filterByApvecrncy('%fooValue%', Criteria::LIKE); // WHERE ApveCrncy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvecrncy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvecrncy($apvecrncy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvecrncy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVECRNCY, $apvecrncy, $comparison);
    }

    /**
     * Filter the query on the ApveFrtInAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByApvefrtinamt(1234); // WHERE ApveFrtInAmt = 1234
     * $query->filterByApvefrtinamt(array(12, 34)); // WHERE ApveFrtInAmt IN (12, 34)
     * $query->filterByApvefrtinamt(array('min' => 12)); // WHERE ApveFrtInAmt > 12
     * </code>
     *
     * @param     mixed $apvefrtinamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvefrtinamt($apvefrtinamt = null, $comparison = null)
    {
        if (is_array($apvefrtinamt)) {
            $useMinMax = false;
            if (isset($apvefrtinamt['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEFRTINAMT, $apvefrtinamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvefrtinamt['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEFRTINAMT, $apvefrtinamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEFRTINAMT, $apvefrtinamt, $comparison);
    }

    /**
     * Filter the query on the ApveOurAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApveouracctnbr('fooValue');   // WHERE ApveOurAcctNbr = 'fooValue'
     * $query->filterByApveouracctnbr('%fooValue%', Criteria::LIKE); // WHERE ApveOurAcctNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveouracctnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveouracctnbr($apveouracctnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveouracctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEOURACCTNBR, $apveouracctnbr, $comparison);
    }

    /**
     * Filter the query on the ApveVendDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevenddisc(1234); // WHERE ApveVendDisc = 1234
     * $query->filterByApvevenddisc(array(12, 34)); // WHERE ApveVendDisc IN (12, 34)
     * $query->filterByApvevenddisc(array('min' => 12)); // WHERE ApveVendDisc > 12
     * </code>
     *
     * @param     mixed $apvevenddisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvevenddisc($apvevenddisc = null, $comparison = null)
    {
        if (is_array($apvevenddisc)) {
            $useMinMax = false;
            if (isset($apvevenddisc['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEVENDDISC, $apvevenddisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvevenddisc['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEVENDDISC, $apvevenddisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEVENDDISC, $apvevenddisc, $comparison);
    }

    /**
     * Filter the query on the ApveFob column
     *
     * Example usage:
     * <code>
     * $query->filterByApvefob('fooValue');   // WHERE ApveFob = 'fooValue'
     * $query->filterByApvefob('%fooValue%', Criteria::LIKE); // WHERE ApveFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvefob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvefob($apvefob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvefob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEFOB, $apvefob, $comparison);
    }

    /**
     * Filter the query on the ApveRoylPct column
     *
     * Example usage:
     * <code>
     * $query->filterByApveroylpct(1234); // WHERE ApveRoylPct = 1234
     * $query->filterByApveroylpct(array(12, 34)); // WHERE ApveRoylPct IN (12, 34)
     * $query->filterByApveroylpct(array('min' => 12)); // WHERE ApveRoylPct > 12
     * </code>
     *
     * @param     mixed $apveroylpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveroylpct($apveroylpct = null, $comparison = null)
    {
        if (is_array($apveroylpct)) {
            $useMinMax = false;
            if (isset($apveroylpct['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEROYLPCT, $apveroylpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apveroylpct['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVEROYLPCT, $apveroylpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEROYLPCT, $apveroylpct, $comparison);
    }

    /**
     * Filter the query on the ApvePrtPoEOrU column
     *
     * Example usage:
     * <code>
     * $query->filterByApveprtpoeoru('fooValue');   // WHERE ApvePrtPoEOrU = 'fooValue'
     * $query->filterByApveprtpoeoru('%fooValue%', Criteria::LIKE); // WHERE ApvePrtPoEOrU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveprtpoeoru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveprtpoeoru($apveprtpoeoru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveprtpoeoru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEPRTPOEORU, $apveprtpoeoru, $comparison);
    }

    /**
     * Filter the query on the ApveComRate column
     *
     * Example usage:
     * <code>
     * $query->filterByApvecomrate(1234); // WHERE ApveComRate = 1234
     * $query->filterByApvecomrate(array(12, 34)); // WHERE ApveComRate IN (12, 34)
     * $query->filterByApvecomrate(array('min' => 12)); // WHERE ApveComRate > 12
     * </code>
     *
     * @param     mixed $apvecomrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvecomrate($apvecomrate = null, $comparison = null)
    {
        if (is_array($apvecomrate)) {
            $useMinMax = false;
            if (isset($apvecomrate['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVECOMRATE, $apvecomrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvecomrate['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVECOMRATE, $apvecomrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVECOMRATE, $apvecomrate, $comparison);
    }

    /**
     * Filter the query on the ApveUseLandOnRcpt column
     *
     * Example usage:
     * <code>
     * $query->filterByApveuselandonrcpt('fooValue');   // WHERE ApveUseLandOnRcpt = 'fooValue'
     * $query->filterByApveuselandonrcpt('%fooValue%', Criteria::LIKE); // WHERE ApveUseLandOnRcpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apveuselandonrcpt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApveuselandonrcpt($apveuselandonrcpt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apveuselandonrcpt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEUSELANDONRCPT, $apveuselandonrcpt, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse1('fooValue');   // WHERE ApveBuyrWhse1 = 'fooValue'
     * $query->filterByApvebuyrwhse1('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse1($apvebuyrwhse1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE1, $apvebuyrwhse1, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode1('fooValue');   // WHERE ApveBuyrCode1 = 'fooValue'
     * $query->filterByApvebuyrcode1('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode1($apvebuyrcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE1, $apvebuyrcode1, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse2('fooValue');   // WHERE ApveBuyrWhse2 = 'fooValue'
     * $query->filterByApvebuyrwhse2('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse2($apvebuyrwhse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE2, $apvebuyrwhse2, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode2('fooValue');   // WHERE ApveBuyrCode2 = 'fooValue'
     * $query->filterByApvebuyrcode2('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode2($apvebuyrcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE2, $apvebuyrcode2, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse3('fooValue');   // WHERE ApveBuyrWhse3 = 'fooValue'
     * $query->filterByApvebuyrwhse3('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse3($apvebuyrwhse3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE3, $apvebuyrwhse3, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode3('fooValue');   // WHERE ApveBuyrCode3 = 'fooValue'
     * $query->filterByApvebuyrcode3('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode3($apvebuyrcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE3, $apvebuyrcode3, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse4 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse4('fooValue');   // WHERE ApveBuyrWhse4 = 'fooValue'
     * $query->filterByApvebuyrwhse4('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse4($apvebuyrwhse4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE4, $apvebuyrwhse4, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode4('fooValue');   // WHERE ApveBuyrCode4 = 'fooValue'
     * $query->filterByApvebuyrcode4('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode4($apvebuyrcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE4, $apvebuyrcode4, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse5 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse5('fooValue');   // WHERE ApveBuyrWhse5 = 'fooValue'
     * $query->filterByApvebuyrwhse5('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse5($apvebuyrwhse5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE5, $apvebuyrwhse5, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode5('fooValue');   // WHERE ApveBuyrCode5 = 'fooValue'
     * $query->filterByApvebuyrcode5('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode5($apvebuyrcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE5, $apvebuyrcode5, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse6 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse6('fooValue');   // WHERE ApveBuyrWhse6 = 'fooValue'
     * $query->filterByApvebuyrwhse6('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse6($apvebuyrwhse6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE6, $apvebuyrwhse6, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode6('fooValue');   // WHERE ApveBuyrCode6 = 'fooValue'
     * $query->filterByApvebuyrcode6('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode6($apvebuyrcode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE6, $apvebuyrcode6, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse7 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse7('fooValue');   // WHERE ApveBuyrWhse7 = 'fooValue'
     * $query->filterByApvebuyrwhse7('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse7($apvebuyrwhse7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE7, $apvebuyrwhse7, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode7('fooValue');   // WHERE ApveBuyrCode7 = 'fooValue'
     * $query->filterByApvebuyrcode7('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode7($apvebuyrcode7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE7, $apvebuyrcode7, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse8 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse8('fooValue');   // WHERE ApveBuyrWhse8 = 'fooValue'
     * $query->filterByApvebuyrwhse8('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse8($apvebuyrwhse8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE8, $apvebuyrwhse8, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode8('fooValue');   // WHERE ApveBuyrCode8 = 'fooValue'
     * $query->filterByApvebuyrcode8('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode8($apvebuyrcode8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE8, $apvebuyrcode8, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse9 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse9('fooValue');   // WHERE ApveBuyrWhse9 = 'fooValue'
     * $query->filterByApvebuyrwhse9('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse9($apvebuyrwhse9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE9, $apvebuyrwhse9, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode9('fooValue');   // WHERE ApveBuyrCode9 = 'fooValue'
     * $query->filterByApvebuyrcode9('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode9($apvebuyrcode9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE9, $apvebuyrcode9, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrWhse10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrwhse10('fooValue');   // WHERE ApveBuyrWhse10 = 'fooValue'
     * $query->filterByApvebuyrwhse10('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrWhse10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrwhse10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrwhse10($apvebuyrwhse10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrwhse10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRWHSE10, $apvebuyrwhse10, $comparison);
    }

    /**
     * Filter the query on the ApveBuyrCode10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApvebuyrcode10('fooValue');   // WHERE ApveBuyrCode10 = 'fooValue'
     * $query->filterByApvebuyrcode10('%fooValue%', Criteria::LIKE); // WHERE ApveBuyrCode10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvebuyrcode10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvebuyrcode10($apvebuyrcode10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvebuyrcode10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVEBUYRCODE10, $apvebuyrcode10, $comparison);
    }

    /**
     * Filter the query on the ApveLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByApvelandcost(1234); // WHERE ApveLandCost = 1234
     * $query->filterByApvelandcost(array(12, 34)); // WHERE ApveLandCost IN (12, 34)
     * $query->filterByApvelandcost(array('min' => 12)); // WHERE ApveLandCost > 12
     * </code>
     *
     * @param     mixed $apvelandcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvelandcost($apvelandcost = null, $comparison = null)
    {
        if (is_array($apvelandcost)) {
            $useMinMax = false;
            if (isset($apvelandcost['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVELANDCOST, $apvelandcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvelandcost['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVELANDCOST, $apvelandcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVELANDCOST, $apvelandcost, $comparison);
    }

    /**
     * Filter the query on the ApveReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApvereleasenbr(1234); // WHERE ApveReleaseNbr = 1234
     * $query->filterByApvereleasenbr(array(12, 34)); // WHERE ApveReleaseNbr IN (12, 34)
     * $query->filterByApvereleasenbr(array('min' => 12)); // WHERE ApveReleaseNbr > 12
     * </code>
     *
     * @param     mixed $apvereleasenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvereleasenbr($apvereleasenbr = null, $comparison = null)
    {
        if (is_array($apvereleasenbr)) {
            $useMinMax = false;
            if (isset($apvereleasenbr['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVERELEASENBR, $apvereleasenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvereleasenbr['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVERELEASENBR, $apvereleasenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVERELEASENBR, $apvereleasenbr, $comparison);
    }

    /**
     * Filter the query on the ApveScanStartPos column
     *
     * Example usage:
     * <code>
     * $query->filterByApvescanstartpos(1234); // WHERE ApveScanStartPos = 1234
     * $query->filterByApvescanstartpos(array(12, 34)); // WHERE ApveScanStartPos IN (12, 34)
     * $query->filterByApvescanstartpos(array('min' => 12)); // WHERE ApveScanStartPos > 12
     * </code>
     *
     * @param     mixed $apvescanstartpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvescanstartpos($apvescanstartpos = null, $comparison = null)
    {
        if (is_array($apvescanstartpos)) {
            $useMinMax = false;
            if (isset($apvescanstartpos['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVESCANSTARTPOS, $apvescanstartpos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvescanstartpos['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVESCANSTARTPOS, $apvescanstartpos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVESCANSTARTPOS, $apvescanstartpos, $comparison);
    }

    /**
     * Filter the query on the ApveScanLength column
     *
     * Example usage:
     * <code>
     * $query->filterByApvescanlength(1234); // WHERE ApveScanLength = 1234
     * $query->filterByApvescanlength(array(12, 34)); // WHERE ApveScanLength IN (12, 34)
     * $query->filterByApvescanlength(array('min' => 12)); // WHERE ApveScanLength > 12
     * </code>
     *
     * @param     mixed $apvescanlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByApvescanlength($apvescanlength = null, $comparison = null)
    {
        if (is_array($apvescanlength)) {
            $useMinMax = false;
            if (isset($apvescanlength['min'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVESCANLENGTH, $apvescanlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apvescanlength['max'])) {
                $this->addUsingAlias(VendorTableMap::COL_APVESCANLENGTH, $apvescanlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_APVESCANLENGTH, $apvescanlength, $comparison);
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
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildVendor $vendor Object to remove from the list of results
     *
     * @return $this|ChildVendorQuery The current query, for fluid interface
     */
    public function prune($vendor = null)
    {
        if ($vendor) {
            $this->addUsingAlias(VendorTableMap::COL_APVEVENDID, $vendor->getApvevendid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_vend_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VendorTableMap::clearInstancePool();
            VendorTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(VendorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(VendorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            VendorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            VendorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // VendorQuery
