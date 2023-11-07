<?php

namespace Map;

use \SalesHistory;
use \SalesHistoryQuery;
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
 * This class defines the structure of the 'so_head_hist' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesHistoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesHistoryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_head_hist';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesHistory';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesHistory';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 198;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 198;

    /**
     * the column name for the OehhNbr field
     */
    const COL_OEHHNBR = 'so_head_hist.OehhNbr';

    /**
     * the column name for the OehhYear field
     */
    const COL_OEHHYEAR = 'so_head_hist.OehhYear';

    /**
     * the column name for the OehhStat field
     */
    const COL_OEHHSTAT = 'so_head_hist.OehhStat';

    /**
     * the column name for the OehhHold field
     */
    const COL_OEHHHOLD = 'so_head_hist.OehhHold';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'so_head_hist.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'so_head_hist.ArstShipId';

    /**
     * the column name for the OehhStName field
     */
    const COL_OEHHSTNAME = 'so_head_hist.OehhStName';

    /**
     * the column name for the OehhStLastName field
     */
    const COL_OEHHSTLASTNAME = 'so_head_hist.OehhStLastName';

    /**
     * the column name for the OehhStFirstName field
     */
    const COL_OEHHSTFIRSTNAME = 'so_head_hist.OehhStFirstName';

    /**
     * the column name for the OehhStAdr1 field
     */
    const COL_OEHHSTADR1 = 'so_head_hist.OehhStAdr1';

    /**
     * the column name for the OehhStAdr2 field
     */
    const COL_OEHHSTADR2 = 'so_head_hist.OehhStAdr2';

    /**
     * the column name for the OehhStAdr3 field
     */
    const COL_OEHHSTADR3 = 'so_head_hist.OehhStAdr3';

    /**
     * the column name for the OehhStCtry field
     */
    const COL_OEHHSTCTRY = 'so_head_hist.OehhStCtry';

    /**
     * the column name for the OehhStCity field
     */
    const COL_OEHHSTCITY = 'so_head_hist.OehhStCity';

    /**
     * the column name for the OehhStStat field
     */
    const COL_OEHHSTSTAT = 'so_head_hist.OehhStStat';

    /**
     * the column name for the OehhStZipCode field
     */
    const COL_OEHHSTZIPCODE = 'so_head_hist.OehhStZipCode';

    /**
     * the column name for the OehhCustPo field
     */
    const COL_OEHHCUSTPO = 'so_head_hist.OehhCustPo';

    /**
     * the column name for the OehhOrdrDate field
     */
    const COL_OEHHORDRDATE = 'so_head_hist.OehhOrdrDate';

    /**
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'so_head_hist.ArtmTermCd';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'so_head_hist.ArtbShipVia';

    /**
     * the column name for the ArinInvNbr field
     */
    const COL_ARININVNBR = 'so_head_hist.ArinInvNbr';

    /**
     * the column name for the OehhInvDate field
     */
    const COL_OEHHINVDATE = 'so_head_hist.OehhInvDate';

    /**
     * the column name for the OehhGLPd field
     */
    const COL_OEHHGLPD = 'so_head_hist.OehhGLPd';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'so_head_hist.ArspSalePer1';

    /**
     * the column name for the OehhSp1Pct field
     */
    const COL_OEHHSP1PCT = 'so_head_hist.OehhSp1Pct';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'so_head_hist.ArspSalePer2';

    /**
     * the column name for the OehhSp2Pct field
     */
    const COL_OEHHSP2PCT = 'so_head_hist.OehhSp2Pct';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'so_head_hist.ArspSalePer3';

    /**
     * the column name for the OehhSp3Pct field
     */
    const COL_OEHHSP3PCT = 'so_head_hist.OehhSp3Pct';

    /**
     * the column name for the OehhCntrNbr field
     */
    const COL_OEHHCNTRNBR = 'so_head_hist.OehhCntrNbr';

    /**
     * the column name for the OehhWiBatch field
     */
    const COL_OEHHWIBATCH = 'so_head_hist.OehhWiBatch';

    /**
     * the column name for the OehhDropRelHold field
     */
    const COL_OEHHDROPRELHOLD = 'so_head_hist.OehhDropRelHold';

    /**
     * the column name for the OehhTaxSub field
     */
    const COL_OEHHTAXSUB = 'so_head_hist.OehhTaxSub';

    /**
     * the column name for the OehhNonTaxSub field
     */
    const COL_OEHHNONTAXSUB = 'so_head_hist.OehhNonTaxSub';

    /**
     * the column name for the OehhTaxTot field
     */
    const COL_OEHHTAXTOT = 'so_head_hist.OehhTaxTot';

    /**
     * the column name for the OehhFrtTot field
     */
    const COL_OEHHFRTTOT = 'so_head_hist.OehhFrtTot';

    /**
     * the column name for the OehhMiscTot field
     */
    const COL_OEHHMISCTOT = 'so_head_hist.OehhMiscTot';

    /**
     * the column name for the OehhOrdrTot field
     */
    const COL_OEHHORDRTOT = 'so_head_hist.OehhOrdrTot';

    /**
     * the column name for the OehhCostTot field
     */
    const COL_OEHHCOSTTOT = 'so_head_hist.OehhCostTot';

    /**
     * the column name for the OehhSpCommLock field
     */
    const COL_OEHHSPCOMMLOCK = 'so_head_hist.OehhSpCommLock';

    /**
     * the column name for the OehhTakenDate field
     */
    const COL_OEHHTAKENDATE = 'so_head_hist.OehhTakenDate';

    /**
     * the column name for the OehhTakenTime field
     */
    const COL_OEHHTAKENTIME = 'so_head_hist.OehhTakenTime';

    /**
     * the column name for the OehhPickDate field
     */
    const COL_OEHHPICKDATE = 'so_head_hist.OehhPickDate';

    /**
     * the column name for the OehhPickTime field
     */
    const COL_OEHHPICKTIME = 'so_head_hist.OehhPickTime';

    /**
     * the column name for the OehhPackDate field
     */
    const COL_OEHHPACKDATE = 'so_head_hist.OehhPackDate';

    /**
     * the column name for the OehhPackTime field
     */
    const COL_OEHHPACKTIME = 'so_head_hist.OehhPackTime';

    /**
     * the column name for the OehhVerifyDate field
     */
    const COL_OEHHVERIFYDATE = 'so_head_hist.OehhVerifyDate';

    /**
     * the column name for the OehhVerifyTime field
     */
    const COL_OEHHVERIFYTIME = 'so_head_hist.OehhVerifyTime';

    /**
     * the column name for the OehhCreditMemo field
     */
    const COL_OEHHCREDITMEMO = 'so_head_hist.OehhCreditMemo';

    /**
     * the column name for the OehhBookedYn field
     */
    const COL_OEHHBOOKEDYN = 'so_head_hist.OehhBookedYn';

    /**
     * the column name for the IntbWhseOrig field
     */
    const COL_INTBWHSEORIG = 'so_head_hist.IntbWhseOrig';

    /**
     * the column name for the OehhBtStat field
     */
    const COL_OEHHBTSTAT = 'so_head_hist.OehhBtStat';

    /**
     * the column name for the OehhShipComp field
     */
    const COL_OEHHSHIPCOMP = 'so_head_hist.OehhShipComp';

    /**
     * the column name for the OehhCwoFlag field
     */
    const COL_OEHHCWOFLAG = 'so_head_hist.OehhCwoFlag';

    /**
     * the column name for the OehhDivision field
     */
    const COL_OEHHDIVISION = 'so_head_hist.OehhDivision';

    /**
     * the column name for the OehhTakenCode field
     */
    const COL_OEHHTAKENCODE = 'so_head_hist.OehhTakenCode';

    /**
     * the column name for the OehhPickCode field
     */
    const COL_OEHHPICKCODE = 'so_head_hist.OehhPickCode';

    /**
     * the column name for the OehhPackCode field
     */
    const COL_OEHHPACKCODE = 'so_head_hist.OehhPackCode';

    /**
     * the column name for the OehhVerifyCode field
     */
    const COL_OEHHVERIFYCODE = 'so_head_hist.OehhVerifyCode';

    /**
     * the column name for the OehhTotDisc field
     */
    const COL_OEHHTOTDISC = 'so_head_hist.OehhTotDisc';

    /**
     * the column name for the OehhEdiRefNbrQual field
     */
    const COL_OEHHEDIREFNBRQUAL = 'so_head_hist.OehhEdiRefNbrQual';

    /**
     * the column name for the OehhUserCode1 field
     */
    const COL_OEHHUSERCODE1 = 'so_head_hist.OehhUserCode1';

    /**
     * the column name for the OehhUserCode2 field
     */
    const COL_OEHHUSERCODE2 = 'so_head_hist.OehhUserCode2';

    /**
     * the column name for the OehhUserCode3 field
     */
    const COL_OEHHUSERCODE3 = 'so_head_hist.OehhUserCode3';

    /**
     * the column name for the OehhUserCode4 field
     */
    const COL_OEHHUSERCODE4 = 'so_head_hist.OehhUserCode4';

    /**
     * the column name for the OehhExchCtry field
     */
    const COL_OEHHEXCHCTRY = 'so_head_hist.OehhExchCtry';

    /**
     * the column name for the OehhExchRate field
     */
    const COL_OEHHEXCHRATE = 'so_head_hist.OehhExchRate';

    /**
     * the column name for the OehhWghtTot field
     */
    const COL_OEHHWGHTTOT = 'so_head_hist.OehhWghtTot';

    /**
     * the column name for the OehhWghtOride field
     */
    const COL_OEHHWGHTORIDE = 'so_head_hist.OehhWghtOride';

    /**
     * the column name for the OehhCcInfo field
     */
    const COL_OEHHCCINFO = 'so_head_hist.OehhCcInfo';

    /**
     * the column name for the OehhBoxCount field
     */
    const COL_OEHHBOXCOUNT = 'so_head_hist.OehhBoxCount';

    /**
     * the column name for the OehhRqstDate field
     */
    const COL_OEHHRQSTDATE = 'so_head_hist.OehhRqstDate';

    /**
     * the column name for the OehhCancDate field
     */
    const COL_OEHHCANCDATE = 'so_head_hist.OehhCancDate';

    /**
     * the column name for the OehhCrntUser field
     */
    const COL_OEHHCRNTUSER = 'so_head_hist.OehhCrntUser';

    /**
     * the column name for the OehhReleaseNbr field
     */
    const COL_OEHHRELEASENBR = 'so_head_hist.OehhReleaseNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'so_head_hist.IntbWhse';

    /**
     * the column name for the OehhBordBuildDate field
     */
    const COL_OEHHBORDBUILDDATE = 'so_head_hist.OehhBordBuildDate';

    /**
     * the column name for the OehhDeptCode field
     */
    const COL_OEHHDEPTCODE = 'so_head_hist.OehhDeptCode';

    /**
     * the column name for the OehhFrtInEntered field
     */
    const COL_OEHHFRTINENTERED = 'so_head_hist.OehhFrtInEntered';

    /**
     * the column name for the OehhDropShipEntered field
     */
    const COL_OEHHDROPSHIPENTERED = 'so_head_hist.OehhDropShipEntered';

    /**
     * the column name for the OehhErFlag field
     */
    const COL_OEHHERFLAG = 'so_head_hist.OehhErFlag';

    /**
     * the column name for the OehhFrtIn field
     */
    const COL_OEHHFRTIN = 'so_head_hist.OehhFrtIn';

    /**
     * the column name for the OehhDropShip field
     */
    const COL_OEHHDROPSHIP = 'so_head_hist.OehhDropShip';

    /**
     * the column name for the OehhMinOrder field
     */
    const COL_OEHHMINORDER = 'so_head_hist.OehhMinOrder';

    /**
     * the column name for the OehhContractTerms field
     */
    const COL_OEHHCONTRACTTERMS = 'so_head_hist.OehhContractTerms';

    /**
     * the column name for the OehhDropShipBilled field
     */
    const COL_OEHHDROPSHIPBILLED = 'so_head_hist.OehhDropShipBilled';

    /**
     * the column name for the OehhOrdTyp field
     */
    const COL_OEHHORDTYP = 'so_head_hist.OehhOrdTyp';

    /**
     * the column name for the OehhTrackNbr field
     */
    const COL_OEHHTRACKNBR = 'so_head_hist.OehhTrackNbr';

    /**
     * the column name for the OehhSource field
     */
    const COL_OEHHSOURCE = 'so_head_hist.OehhSource';

    /**
     * the column name for the OehhCcAprv field
     */
    const COL_OEHHCCAPRV = 'so_head_hist.OehhCcAprv';

    /**
     * the column name for the OehhPickFmatType field
     */
    const COL_OEHHPICKFMATTYPE = 'so_head_hist.OehhPickFmatType';

    /**
     * the column name for the OehhInvcFmatType field
     */
    const COL_OEHHINVCFMATTYPE = 'so_head_hist.OehhInvcFmatType';

    /**
     * the column name for the OehhCashAmt field
     */
    const COL_OEHHCASHAMT = 'so_head_hist.OehhCashAmt';

    /**
     * the column name for the OehhCheckAmt field
     */
    const COL_OEHHCHECKAMT = 'so_head_hist.OehhCheckAmt';

    /**
     * the column name for the OehhCheckNbr field
     */
    const COL_OEHHCHECKNBR = 'so_head_hist.OehhCheckNbr';

    /**
     * the column name for the OehhDepositAmt field
     */
    const COL_OEHHDEPOSITAMT = 'so_head_hist.OehhDepositAmt';

    /**
     * the column name for the OehhDepositNbr field
     */
    const COL_OEHHDEPOSITNBR = 'so_head_hist.OehhDepositNbr';

    /**
     * the column name for the OehhCcAmt field
     */
    const COL_OEHHCCAMT = 'so_head_hist.OehhCcAmt';

    /**
     * the column name for the OehhOTaxSub field
     */
    const COL_OEHHOTAXSUB = 'so_head_hist.OehhOTaxSub';

    /**
     * the column name for the OehhONonTaxSub field
     */
    const COL_OEHHONONTAXSUB = 'so_head_hist.OehhONonTaxSub';

    /**
     * the column name for the OehhOTaxTot field
     */
    const COL_OEHHOTAXTOT = 'so_head_hist.OehhOTaxTot';

    /**
     * the column name for the OehhOOrdrTot field
     */
    const COL_OEHHOORDRTOT = 'so_head_hist.OehhOOrdrTot';

    /**
     * the column name for the OehhPickPrintDate field
     */
    const COL_OEHHPICKPRINTDATE = 'so_head_hist.OehhPickPrintDate';

    /**
     * the column name for the OehhPickPrintTime field
     */
    const COL_OEHHPICKPRINTTIME = 'so_head_hist.OehhPickPrintTime';

    /**
     * the column name for the OehhCont field
     */
    const COL_OEHHCONT = 'so_head_hist.OehhCont';

    /**
     * the column name for the OehhContTeleIntl field
     */
    const COL_OEHHCONTTELEINTL = 'so_head_hist.OehhContTeleIntl';

    /**
     * the column name for the OehhContTeleNbr field
     */
    const COL_OEHHCONTTELENBR = 'so_head_hist.OehhContTeleNbr';

    /**
     * the column name for the OehhContTeleExt field
     */
    const COL_OEHHCONTTELEEXT = 'so_head_hist.OehhContTeleExt';

    /**
     * the column name for the OehhContFaxIntl field
     */
    const COL_OEHHCONTFAXINTL = 'so_head_hist.OehhContFaxIntl';

    /**
     * the column name for the OehhContFaxNbr field
     */
    const COL_OEHHCONTFAXNBR = 'so_head_hist.OehhContFaxNbr';

    /**
     * the column name for the OehhShipAcct field
     */
    const COL_OEHHSHIPACCT = 'so_head_hist.OehhShipAcct';

    /**
     * the column name for the OehhChgDue field
     */
    const COL_OEHHCHGDUE = 'so_head_hist.OehhChgDue';

    /**
     * the column name for the OehhAddlPricDisc field
     */
    const COL_OEHHADDLPRICDISC = 'so_head_hist.OehhAddlPricDisc';

    /**
     * the column name for the OehhAllShip field
     */
    const COL_OEHHALLSHIP = 'so_head_hist.OehhAllShip';

    /**
     * the column name for the OehhQtyOrderAmt field
     */
    const COL_OEHHQTYORDERAMT = 'so_head_hist.OehhQtyOrderAmt';

    /**
     * the column name for the OehhCreditApplied field
     */
    const COL_OEHHCREDITAPPLIED = 'so_head_hist.OehhCreditApplied';

    /**
     * the column name for the OehhInvcPrintDate field
     */
    const COL_OEHHINVCPRINTDATE = 'so_head_hist.OehhInvcPrintDate';

    /**
     * the column name for the OehhInvcPrintTime field
     */
    const COL_OEHHINVCPRINTTIME = 'so_head_hist.OehhInvcPrintTime';

    /**
     * the column name for the OehhDiscFrt field
     */
    const COL_OEHHDISCFRT = 'so_head_hist.OehhDiscFrt';

    /**
     * the column name for the OehhOrideShipComp field
     */
    const COL_OEHHORIDESHIPCOMP = 'so_head_hist.OehhOrideShipComp';

    /**
     * the column name for the OehhContEmail field
     */
    const COL_OEHHCONTEMAIL = 'so_head_hist.OehhContEmail';

    /**
     * the column name for the OehhManualFrt field
     */
    const COL_OEHHMANUALFRT = 'so_head_hist.OehhManualFrt';

    /**
     * the column name for the OehhInternalFrt field
     */
    const COL_OEHHINTERNALFRT = 'so_head_hist.OehhInternalFrt';

    /**
     * the column name for the OehhFrtCost field
     */
    const COL_OEHHFRTCOST = 'so_head_hist.OehhFrtCost';

    /**
     * the column name for the OehhRoute field
     */
    const COL_OEHHROUTE = 'so_head_hist.OehhRoute';

    /**
     * the column name for the OehhRouteSeq field
     */
    const COL_OEHHROUTESEQ = 'so_head_hist.OehhRouteSeq';

    /**
     * the column name for the OehhEdi855Sent field
     */
    const COL_OEHHEDI855SENT = 'so_head_hist.OehhEdi855Sent';

    /**
     * the column name for the OehhFrt3rdParty field
     */
    const COL_OEHHFRT3RDPARTY = 'so_head_hist.OehhFrt3rdParty';

    /**
     * the column name for the OehhFob field
     */
    const COL_OEHHFOB = 'so_head_hist.OehhFob';

    /**
     * the column name for the OehhConfirmImagYn field
     */
    const COL_OEHHCONFIRMIMAGYN = 'so_head_hist.OehhConfirmImagYn';

    /**
     * the column name for the OehhIndustConform field
     */
    const COL_OEHHINDUSTCONFORM = 'so_head_hist.OehhIndustConform';

    /**
     * the column name for the OehhCstkConsign field
     */
    const COL_OEHHCSTKCONSIGN = 'so_head_hist.OehhCstkConsign';

    /**
     * the column name for the OehhLmDelayCapSent field
     */
    const COL_OEHHLMDELAYCAPSENT = 'so_head_hist.OehhLmDelayCapSent';

    /**
     * the column name for the OehhMfgId field
     */
    const COL_OEHHMFGID = 'so_head_hist.OehhMfgId';

    /**
     * the column name for the OehhStoreId field
     */
    const COL_OEHHSTOREID = 'so_head_hist.OehhStoreId';

    /**
     * the column name for the OehhPickQueue field
     */
    const COL_OEHHPICKQUEUE = 'so_head_hist.OehhPickQueue';

    /**
     * the column name for the OehhArrvDate field
     */
    const COL_OEHHARRVDATE = 'so_head_hist.OehhArrvDate';

    /**
     * the column name for the OehhSurchgStat field
     */
    const COL_OEHHSURCHGSTAT = 'so_head_hist.OehhSurchgStat';

    /**
     * the column name for the OehhFrtGrup field
     */
    const COL_OEHHFRTGRUP = 'so_head_hist.OehhFrtGrup';

    /**
     * the column name for the OehhCommOride field
     */
    const COL_OEHHCOMMORIDE = 'so_head_hist.OehhCommOride';

    /**
     * the column name for the OehhChrgSplt field
     */
    const COL_OEHHCHRGSPLT = 'so_head_hist.OehhChrgSplt';

    /**
     * the column name for the OehhAcCcAprv field
     */
    const COL_OEHHACCCAPRV = 'so_head_hist.OehhAcCcAprv';

    /**
     * the column name for the OehhOrigOrdrNbr field
     */
    const COL_OEHHORIGORDRNBR = 'so_head_hist.OehhOrigOrdrNbr';

    /**
     * the column name for the OehhPostDate field
     */
    const COL_OEHHPOSTDATE = 'so_head_hist.OehhPostDate';

    /**
     * the column name for the OehhDiscDate1 field
     */
    const COL_OEHHDISCDATE1 = 'so_head_hist.OehhDiscDate1';

    /**
     * the column name for the OehhDiscPct1 field
     */
    const COL_OEHHDISCPCT1 = 'so_head_hist.OehhDiscPct1';

    /**
     * the column name for the OehhDueDate1 field
     */
    const COL_OEHHDUEDATE1 = 'so_head_hist.OehhDueDate1';

    /**
     * the column name for the OehhDueAmt1 field
     */
    const COL_OEHHDUEAMT1 = 'so_head_hist.OehhDueAmt1';

    /**
     * the column name for the OehhDuePct1 field
     */
    const COL_OEHHDUEPCT1 = 'so_head_hist.OehhDuePct1';

    /**
     * the column name for the OehhDiscDate2 field
     */
    const COL_OEHHDISCDATE2 = 'so_head_hist.OehhDiscDate2';

    /**
     * the column name for the OehhDiscPct2 field
     */
    const COL_OEHHDISCPCT2 = 'so_head_hist.OehhDiscPct2';

    /**
     * the column name for the OehhDueDate2 field
     */
    const COL_OEHHDUEDATE2 = 'so_head_hist.OehhDueDate2';

    /**
     * the column name for the OehhDueAmt2 field
     */
    const COL_OEHHDUEAMT2 = 'so_head_hist.OehhDueAmt2';

    /**
     * the column name for the OehhDuePct2 field
     */
    const COL_OEHHDUEPCT2 = 'so_head_hist.OehhDuePct2';

    /**
     * the column name for the OehhDiscDate3 field
     */
    const COL_OEHHDISCDATE3 = 'so_head_hist.OehhDiscDate3';

    /**
     * the column name for the OehhDiscPct3 field
     */
    const COL_OEHHDISCPCT3 = 'so_head_hist.OehhDiscPct3';

    /**
     * the column name for the OehhDueDate3 field
     */
    const COL_OEHHDUEDATE3 = 'so_head_hist.OehhDueDate3';

    /**
     * the column name for the OehhDueAmt3 field
     */
    const COL_OEHHDUEAMT3 = 'so_head_hist.OehhDueAmt3';

    /**
     * the column name for the OehhDuePct3 field
     */
    const COL_OEHHDUEPCT3 = 'so_head_hist.OehhDuePct3';

    /**
     * the column name for the OehhDiscDate4 field
     */
    const COL_OEHHDISCDATE4 = 'so_head_hist.OehhDiscDate4';

    /**
     * the column name for the OehhDiscPct4 field
     */
    const COL_OEHHDISCPCT4 = 'so_head_hist.OehhDiscPct4';

    /**
     * the column name for the OehhDueDate4 field
     */
    const COL_OEHHDUEDATE4 = 'so_head_hist.OehhDueDate4';

    /**
     * the column name for the OehhDueAmt4 field
     */
    const COL_OEHHDUEAMT4 = 'so_head_hist.OehhDueAmt4';

    /**
     * the column name for the OehhDuePct4 field
     */
    const COL_OEHHDUEPCT4 = 'so_head_hist.OehhDuePct4';

    /**
     * the column name for the OehhDiscDate5 field
     */
    const COL_OEHHDISCDATE5 = 'so_head_hist.OehhDiscDate5';

    /**
     * the column name for the OehhDiscPct5 field
     */
    const COL_OEHHDISCPCT5 = 'so_head_hist.OehhDiscPct5';

    /**
     * the column name for the OehhDueDate5 field
     */
    const COL_OEHHDUEDATE5 = 'so_head_hist.OehhDueDate5';

    /**
     * the column name for the OehhDueAmt5 field
     */
    const COL_OEHHDUEAMT5 = 'so_head_hist.OehhDueAmt5';

    /**
     * the column name for the OehhDuePct5 field
     */
    const COL_OEHHDUEPCT5 = 'so_head_hist.OehhDuePct5';

    /**
     * the column name for the OehhDiscDate6 field
     */
    const COL_OEHHDISCDATE6 = 'so_head_hist.OehhDiscDate6';

    /**
     * the column name for the OehhDiscPct6 field
     */
    const COL_OEHHDISCPCT6 = 'so_head_hist.OehhDiscPct6';

    /**
     * the column name for the OehhDueDate6 field
     */
    const COL_OEHHDUEDATE6 = 'so_head_hist.OehhDueDate6';

    /**
     * the column name for the OehhDueAmt6 field
     */
    const COL_OEHHDUEAMT6 = 'so_head_hist.OehhDueAmt6';

    /**
     * the column name for the OehhDuePct6 field
     */
    const COL_OEHHDUEPCT6 = 'so_head_hist.OehhDuePct6';

    /**
     * the column name for the OehhRefNbr field
     */
    const COL_OEHHREFNBR = 'so_head_hist.OehhRefNbr';

    /**
     * the column name for the OehhFrtTaxCode1 field
     */
    const COL_OEHHFRTTAXCODE1 = 'so_head_hist.OehhFrtTaxCode1';

    /**
     * the column name for the OehhFrtTaxAmt1 field
     */
    const COL_OEHHFRTTAXAMT1 = 'so_head_hist.OehhFrtTaxAmt1';

    /**
     * the column name for the OehhFrtTaxCode2 field
     */
    const COL_OEHHFRTTAXCODE2 = 'so_head_hist.OehhFrtTaxCode2';

    /**
     * the column name for the OehhFrtTaxAmt2 field
     */
    const COL_OEHHFRTTAXAMT2 = 'so_head_hist.OehhFrtTaxAmt2';

    /**
     * the column name for the OehhFrtTaxCode3 field
     */
    const COL_OEHHFRTTAXCODE3 = 'so_head_hist.OehhFrtTaxCode3';

    /**
     * the column name for the OehhFrtTaxAmt3 field
     */
    const COL_OEHHFRTTAXAMT3 = 'so_head_hist.OehhFrtTaxAmt3';

    /**
     * the column name for the OehhFrtTaxCode4 field
     */
    const COL_OEHHFRTTAXCODE4 = 'so_head_hist.OehhFrtTaxCode4';

    /**
     * the column name for the OehhFrtTaxAmt4 field
     */
    const COL_OEHHFRTTAXAMT4 = 'so_head_hist.OehhFrtTaxAmt4';

    /**
     * the column name for the OehhFrtTaxCode5 field
     */
    const COL_OEHHFRTTAXCODE5 = 'so_head_hist.OehhFrtTaxCode5';

    /**
     * the column name for the OehhFrtTaxAmt5 field
     */
    const COL_OEHHFRTTAXAMT5 = 'so_head_hist.OehhFrtTaxAmt5';

    /**
     * the column name for the OehhFrtTaxCode6 field
     */
    const COL_OEHHFRTTAXCODE6 = 'so_head_hist.OehhFrtTaxCode6';

    /**
     * the column name for the OehhFrtTaxAmt6 field
     */
    const COL_OEHHFRTTAXAMT6 = 'so_head_hist.OehhFrtTaxAmt6';

    /**
     * the column name for the OehhFrtTaxCode7 field
     */
    const COL_OEHHFRTTAXCODE7 = 'so_head_hist.OehhFrtTaxCode7';

    /**
     * the column name for the OehhFrtTaxAmt7 field
     */
    const COL_OEHHFRTTAXAMT7 = 'so_head_hist.OehhFrtTaxAmt7';

    /**
     * the column name for the OehhFrtTaxCode8 field
     */
    const COL_OEHHFRTTAXCODE8 = 'so_head_hist.OehhFrtTaxCode8';

    /**
     * the column name for the OehhFrtTaxAmt8 field
     */
    const COL_OEHHFRTTAXAMT8 = 'so_head_hist.OehhFrtTaxAmt8';

    /**
     * the column name for the OehhFrtTaxCode9 field
     */
    const COL_OEHHFRTTAXCODE9 = 'so_head_hist.OehhFrtTaxCode9';

    /**
     * the column name for the OehhFrtTaxAmt9 field
     */
    const COL_OEHHFRTTAXAMT9 = 'so_head_hist.OehhFrtTaxAmt9';

    /**
     * the column name for the OehhAcProgNbr field
     */
    const COL_OEHHACPROGNBR = 'so_head_hist.OehhAcProgNbr';

    /**
     * the column name for the OehhAcProgExpDate field
     */
    const COL_OEHHACPROGEXPDATE = 'so_head_hist.OehhAcProgExpDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_head_hist.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_head_hist.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_head_hist.dummy';

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
        self::TYPE_PHPNAME       => array('Oehhnbr', 'Oehhyear', 'Oehhstat', 'Oehhhold', 'Arcucustid', 'Arstshipid', 'Oehhstname', 'Oehhstlastname', 'Oehhstfirstname', 'Oehhstadr1', 'Oehhstadr2', 'Oehhstadr3', 'Oehhstctry', 'Oehhstcity', 'Oehhststat', 'Oehhstzipcode', 'Oehhcustpo', 'Oehhordrdate', 'Artmtermcd', 'Artbshipvia', 'Arininvnbr', 'Oehhinvdate', 'Oehhglpd', 'Arspsaleper1', 'Oehhsp1pct', 'Arspsaleper2', 'Oehhsp2pct', 'Arspsaleper3', 'Oehhsp3pct', 'Oehhcntrnbr', 'Oehhwibatch', 'Oehhdroprelhold', 'Oehhtaxsub', 'Oehhnontaxsub', 'Oehhtaxtot', 'Oehhfrttot', 'Oehhmisctot', 'Oehhordrtot', 'Oehhcosttot', 'Oehhspcommlock', 'Oehhtakendate', 'Oehhtakentime', 'Oehhpickdate', 'Oehhpicktime', 'Oehhpackdate', 'Oehhpacktime', 'Oehhverifydate', 'Oehhverifytime', 'Oehhcreditmemo', 'Oehhbookedyn', 'Intbwhseorig', 'Oehhbtstat', 'Oehhshipcomp', 'Oehhcwoflag', 'Oehhdivision', 'Oehhtakencode', 'Oehhpickcode', 'Oehhpackcode', 'Oehhverifycode', 'Oehhtotdisc', 'Oehhedirefnbrqual', 'Oehhusercode1', 'Oehhusercode2', 'Oehhusercode3', 'Oehhusercode4', 'Oehhexchctry', 'Oehhexchrate', 'Oehhwghttot', 'Oehhwghtoride', 'Oehhccinfo', 'Oehhboxcount', 'Oehhrqstdate', 'Oehhcancdate', 'Oehhcrntuser', 'Oehhreleasenbr', 'Intbwhse', 'Oehhbordbuilddate', 'Oehhdeptcode', 'Oehhfrtinentered', 'Oehhdropshipentered', 'Oehherflag', 'Oehhfrtin', 'Oehhdropship', 'Oehhminorder', 'Oehhcontractterms', 'Oehhdropshipbilled', 'Oehhordtyp', 'Oehhtracknbr', 'Oehhsource', 'Oehhccaprv', 'Oehhpickfmattype', 'Oehhinvcfmattype', 'Oehhcashamt', 'Oehhcheckamt', 'Oehhchecknbr', 'Oehhdepositamt', 'Oehhdepositnbr', 'Oehhccamt', 'Oehhotaxsub', 'Oehhonontaxsub', 'Oehhotaxtot', 'Oehhoordrtot', 'Oehhpickprintdate', 'Oehhpickprinttime', 'Oehhcont', 'Oehhcontteleintl', 'Oehhconttelenbr', 'Oehhcontteleext', 'Oehhcontfaxintl', 'Oehhcontfaxnbr', 'Oehhshipacct', 'Oehhchgdue', 'Oehhaddlpricdisc', 'Oehhallship', 'Oehhqtyorderamt', 'Oehhcreditapplied', 'Oehhinvcprintdate', 'Oehhinvcprinttime', 'Oehhdiscfrt', 'Oehhorideshipcomp', 'Oehhcontemail', 'Oehhmanualfrt', 'Oehhinternalfrt', 'Oehhfrtcost', 'Oehhroute', 'Oehhrouteseq', 'Oehhedi855sent', 'Oehhfrt3rdparty', 'Oehhfob', 'Oehhconfirmimagyn', 'Oehhindustconform', 'Oehhcstkconsign', 'Oehhlmdelaycapsent', 'Oehhmfgid', 'Oehhstoreid', 'Oehhpickqueue', 'Oehharrvdate', 'Oehhsurchgstat', 'Oehhfrtgrup', 'Oehhcommoride', 'Oehhchrgsplt', 'Oehhacccaprv', 'Oehhorigordrnbr', 'Oehhpostdate', 'Oehhdiscdate1', 'Oehhdiscpct1', 'Oehhduedate1', 'Oehhdueamt1', 'Oehhduepct1', 'Oehhdiscdate2', 'Oehhdiscpct2', 'Oehhduedate2', 'Oehhdueamt2', 'Oehhduepct2', 'Oehhdiscdate3', 'Oehhdiscpct3', 'Oehhduedate3', 'Oehhdueamt3', 'Oehhduepct3', 'Oehhdiscdate4', 'Oehhdiscpct4', 'Oehhduedate4', 'Oehhdueamt4', 'Oehhduepct4', 'Oehhdiscdate5', 'Oehhdiscpct5', 'Oehhduedate5', 'Oehhdueamt5', 'Oehhduepct5', 'Oehhdiscdate6', 'Oehhdiscpct6', 'Oehhduedate6', 'Oehhdueamt6', 'Oehhduepct6', 'Oehhrefnbr', 'Oehhfrttaxcode1', 'Oehhfrttaxamt1', 'Oehhfrttaxcode2', 'Oehhfrttaxamt2', 'Oehhfrttaxcode3', 'Oehhfrttaxamt3', 'Oehhfrttaxcode4', 'Oehhfrttaxamt4', 'Oehhfrttaxcode5', 'Oehhfrttaxamt5', 'Oehhfrttaxcode6', 'Oehhfrttaxamt6', 'Oehhfrttaxcode7', 'Oehhfrttaxamt7', 'Oehhfrttaxcode8', 'Oehhfrttaxamt8', 'Oehhfrttaxcode9', 'Oehhfrttaxamt9', 'Oehhacprognbr', 'Oehhacprogexpdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehhnbr', 'oehhyear', 'oehhstat', 'oehhhold', 'arcucustid', 'arstshipid', 'oehhstname', 'oehhstlastname', 'oehhstfirstname', 'oehhstadr1', 'oehhstadr2', 'oehhstadr3', 'oehhstctry', 'oehhstcity', 'oehhststat', 'oehhstzipcode', 'oehhcustpo', 'oehhordrdate', 'artmtermcd', 'artbshipvia', 'arininvnbr', 'oehhinvdate', 'oehhglpd', 'arspsaleper1', 'oehhsp1pct', 'arspsaleper2', 'oehhsp2pct', 'arspsaleper3', 'oehhsp3pct', 'oehhcntrnbr', 'oehhwibatch', 'oehhdroprelhold', 'oehhtaxsub', 'oehhnontaxsub', 'oehhtaxtot', 'oehhfrttot', 'oehhmisctot', 'oehhordrtot', 'oehhcosttot', 'oehhspcommlock', 'oehhtakendate', 'oehhtakentime', 'oehhpickdate', 'oehhpicktime', 'oehhpackdate', 'oehhpacktime', 'oehhverifydate', 'oehhverifytime', 'oehhcreditmemo', 'oehhbookedyn', 'intbwhseorig', 'oehhbtstat', 'oehhshipcomp', 'oehhcwoflag', 'oehhdivision', 'oehhtakencode', 'oehhpickcode', 'oehhpackcode', 'oehhverifycode', 'oehhtotdisc', 'oehhedirefnbrqual', 'oehhusercode1', 'oehhusercode2', 'oehhusercode3', 'oehhusercode4', 'oehhexchctry', 'oehhexchrate', 'oehhwghttot', 'oehhwghtoride', 'oehhccinfo', 'oehhboxcount', 'oehhrqstdate', 'oehhcancdate', 'oehhcrntuser', 'oehhreleasenbr', 'intbwhse', 'oehhbordbuilddate', 'oehhdeptcode', 'oehhfrtinentered', 'oehhdropshipentered', 'oehherflag', 'oehhfrtin', 'oehhdropship', 'oehhminorder', 'oehhcontractterms', 'oehhdropshipbilled', 'oehhordtyp', 'oehhtracknbr', 'oehhsource', 'oehhccaprv', 'oehhpickfmattype', 'oehhinvcfmattype', 'oehhcashamt', 'oehhcheckamt', 'oehhchecknbr', 'oehhdepositamt', 'oehhdepositnbr', 'oehhccamt', 'oehhotaxsub', 'oehhonontaxsub', 'oehhotaxtot', 'oehhoordrtot', 'oehhpickprintdate', 'oehhpickprinttime', 'oehhcont', 'oehhcontteleintl', 'oehhconttelenbr', 'oehhcontteleext', 'oehhcontfaxintl', 'oehhcontfaxnbr', 'oehhshipacct', 'oehhchgdue', 'oehhaddlpricdisc', 'oehhallship', 'oehhqtyorderamt', 'oehhcreditapplied', 'oehhinvcprintdate', 'oehhinvcprinttime', 'oehhdiscfrt', 'oehhorideshipcomp', 'oehhcontemail', 'oehhmanualfrt', 'oehhinternalfrt', 'oehhfrtcost', 'oehhroute', 'oehhrouteseq', 'oehhedi855sent', 'oehhfrt3rdparty', 'oehhfob', 'oehhconfirmimagyn', 'oehhindustconform', 'oehhcstkconsign', 'oehhlmdelaycapsent', 'oehhmfgid', 'oehhstoreid', 'oehhpickqueue', 'oehharrvdate', 'oehhsurchgstat', 'oehhfrtgrup', 'oehhcommoride', 'oehhchrgsplt', 'oehhacccaprv', 'oehhorigordrnbr', 'oehhpostdate', 'oehhdiscdate1', 'oehhdiscpct1', 'oehhduedate1', 'oehhdueamt1', 'oehhduepct1', 'oehhdiscdate2', 'oehhdiscpct2', 'oehhduedate2', 'oehhdueamt2', 'oehhduepct2', 'oehhdiscdate3', 'oehhdiscpct3', 'oehhduedate3', 'oehhdueamt3', 'oehhduepct3', 'oehhdiscdate4', 'oehhdiscpct4', 'oehhduedate4', 'oehhdueamt4', 'oehhduepct4', 'oehhdiscdate5', 'oehhdiscpct5', 'oehhduedate5', 'oehhdueamt5', 'oehhduepct5', 'oehhdiscdate6', 'oehhdiscpct6', 'oehhduedate6', 'oehhdueamt6', 'oehhduepct6', 'oehhrefnbr', 'oehhfrttaxcode1', 'oehhfrttaxamt1', 'oehhfrttaxcode2', 'oehhfrttaxamt2', 'oehhfrttaxcode3', 'oehhfrttaxamt3', 'oehhfrttaxcode4', 'oehhfrttaxamt4', 'oehhfrttaxcode5', 'oehhfrttaxamt5', 'oehhfrttaxcode6', 'oehhfrttaxamt6', 'oehhfrttaxcode7', 'oehhfrttaxamt7', 'oehhfrttaxcode8', 'oehhfrttaxamt8', 'oehhfrttaxcode9', 'oehhfrttaxamt9', 'oehhacprognbr', 'oehhacprogexpdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesHistoryTableMap::COL_OEHHNBR, SalesHistoryTableMap::COL_OEHHYEAR, SalesHistoryTableMap::COL_OEHHSTAT, SalesHistoryTableMap::COL_OEHHHOLD, SalesHistoryTableMap::COL_ARCUCUSTID, SalesHistoryTableMap::COL_ARSTSHIPID, SalesHistoryTableMap::COL_OEHHSTNAME, SalesHistoryTableMap::COL_OEHHSTLASTNAME, SalesHistoryTableMap::COL_OEHHSTFIRSTNAME, SalesHistoryTableMap::COL_OEHHSTADR1, SalesHistoryTableMap::COL_OEHHSTADR2, SalesHistoryTableMap::COL_OEHHSTADR3, SalesHistoryTableMap::COL_OEHHSTCTRY, SalesHistoryTableMap::COL_OEHHSTCITY, SalesHistoryTableMap::COL_OEHHSTSTAT, SalesHistoryTableMap::COL_OEHHSTZIPCODE, SalesHistoryTableMap::COL_OEHHCUSTPO, SalesHistoryTableMap::COL_OEHHORDRDATE, SalesHistoryTableMap::COL_ARTMTERMCD, SalesHistoryTableMap::COL_ARTBSHIPVIA, SalesHistoryTableMap::COL_ARININVNBR, SalesHistoryTableMap::COL_OEHHINVDATE, SalesHistoryTableMap::COL_OEHHGLPD, SalesHistoryTableMap::COL_ARSPSALEPER1, SalesHistoryTableMap::COL_OEHHSP1PCT, SalesHistoryTableMap::COL_ARSPSALEPER2, SalesHistoryTableMap::COL_OEHHSP2PCT, SalesHistoryTableMap::COL_ARSPSALEPER3, SalesHistoryTableMap::COL_OEHHSP3PCT, SalesHistoryTableMap::COL_OEHHCNTRNBR, SalesHistoryTableMap::COL_OEHHWIBATCH, SalesHistoryTableMap::COL_OEHHDROPRELHOLD, SalesHistoryTableMap::COL_OEHHTAXSUB, SalesHistoryTableMap::COL_OEHHNONTAXSUB, SalesHistoryTableMap::COL_OEHHTAXTOT, SalesHistoryTableMap::COL_OEHHFRTTOT, SalesHistoryTableMap::COL_OEHHMISCTOT, SalesHistoryTableMap::COL_OEHHORDRTOT, SalesHistoryTableMap::COL_OEHHCOSTTOT, SalesHistoryTableMap::COL_OEHHSPCOMMLOCK, SalesHistoryTableMap::COL_OEHHTAKENDATE, SalesHistoryTableMap::COL_OEHHTAKENTIME, SalesHistoryTableMap::COL_OEHHPICKDATE, SalesHistoryTableMap::COL_OEHHPICKTIME, SalesHistoryTableMap::COL_OEHHPACKDATE, SalesHistoryTableMap::COL_OEHHPACKTIME, SalesHistoryTableMap::COL_OEHHVERIFYDATE, SalesHistoryTableMap::COL_OEHHVERIFYTIME, SalesHistoryTableMap::COL_OEHHCREDITMEMO, SalesHistoryTableMap::COL_OEHHBOOKEDYN, SalesHistoryTableMap::COL_INTBWHSEORIG, SalesHistoryTableMap::COL_OEHHBTSTAT, SalesHistoryTableMap::COL_OEHHSHIPCOMP, SalesHistoryTableMap::COL_OEHHCWOFLAG, SalesHistoryTableMap::COL_OEHHDIVISION, SalesHistoryTableMap::COL_OEHHTAKENCODE, SalesHistoryTableMap::COL_OEHHPICKCODE, SalesHistoryTableMap::COL_OEHHPACKCODE, SalesHistoryTableMap::COL_OEHHVERIFYCODE, SalesHistoryTableMap::COL_OEHHTOTDISC, SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL, SalesHistoryTableMap::COL_OEHHUSERCODE1, SalesHistoryTableMap::COL_OEHHUSERCODE2, SalesHistoryTableMap::COL_OEHHUSERCODE3, SalesHistoryTableMap::COL_OEHHUSERCODE4, SalesHistoryTableMap::COL_OEHHEXCHCTRY, SalesHistoryTableMap::COL_OEHHEXCHRATE, SalesHistoryTableMap::COL_OEHHWGHTTOT, SalesHistoryTableMap::COL_OEHHWGHTORIDE, SalesHistoryTableMap::COL_OEHHCCINFO, SalesHistoryTableMap::COL_OEHHBOXCOUNT, SalesHistoryTableMap::COL_OEHHRQSTDATE, SalesHistoryTableMap::COL_OEHHCANCDATE, SalesHistoryTableMap::COL_OEHHCRNTUSER, SalesHistoryTableMap::COL_OEHHRELEASENBR, SalesHistoryTableMap::COL_INTBWHSE, SalesHistoryTableMap::COL_OEHHBORDBUILDDATE, SalesHistoryTableMap::COL_OEHHDEPTCODE, SalesHistoryTableMap::COL_OEHHFRTINENTERED, SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED, SalesHistoryTableMap::COL_OEHHERFLAG, SalesHistoryTableMap::COL_OEHHFRTIN, SalesHistoryTableMap::COL_OEHHDROPSHIP, SalesHistoryTableMap::COL_OEHHMINORDER, SalesHistoryTableMap::COL_OEHHCONTRACTTERMS, SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED, SalesHistoryTableMap::COL_OEHHORDTYP, SalesHistoryTableMap::COL_OEHHTRACKNBR, SalesHistoryTableMap::COL_OEHHSOURCE, SalesHistoryTableMap::COL_OEHHCCAPRV, SalesHistoryTableMap::COL_OEHHPICKFMATTYPE, SalesHistoryTableMap::COL_OEHHINVCFMATTYPE, SalesHistoryTableMap::COL_OEHHCASHAMT, SalesHistoryTableMap::COL_OEHHCHECKAMT, SalesHistoryTableMap::COL_OEHHCHECKNBR, SalesHistoryTableMap::COL_OEHHDEPOSITAMT, SalesHistoryTableMap::COL_OEHHDEPOSITNBR, SalesHistoryTableMap::COL_OEHHCCAMT, SalesHistoryTableMap::COL_OEHHOTAXSUB, SalesHistoryTableMap::COL_OEHHONONTAXSUB, SalesHistoryTableMap::COL_OEHHOTAXTOT, SalesHistoryTableMap::COL_OEHHOORDRTOT, SalesHistoryTableMap::COL_OEHHPICKPRINTDATE, SalesHistoryTableMap::COL_OEHHPICKPRINTTIME, SalesHistoryTableMap::COL_OEHHCONT, SalesHistoryTableMap::COL_OEHHCONTTELEINTL, SalesHistoryTableMap::COL_OEHHCONTTELENBR, SalesHistoryTableMap::COL_OEHHCONTTELEEXT, SalesHistoryTableMap::COL_OEHHCONTFAXINTL, SalesHistoryTableMap::COL_OEHHCONTFAXNBR, SalesHistoryTableMap::COL_OEHHSHIPACCT, SalesHistoryTableMap::COL_OEHHCHGDUE, SalesHistoryTableMap::COL_OEHHADDLPRICDISC, SalesHistoryTableMap::COL_OEHHALLSHIP, SalesHistoryTableMap::COL_OEHHQTYORDERAMT, SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, SalesHistoryTableMap::COL_OEHHINVCPRINTDATE, SalesHistoryTableMap::COL_OEHHINVCPRINTTIME, SalesHistoryTableMap::COL_OEHHDISCFRT, SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP, SalesHistoryTableMap::COL_OEHHCONTEMAIL, SalesHistoryTableMap::COL_OEHHMANUALFRT, SalesHistoryTableMap::COL_OEHHINTERNALFRT, SalesHistoryTableMap::COL_OEHHFRTCOST, SalesHistoryTableMap::COL_OEHHROUTE, SalesHistoryTableMap::COL_OEHHROUTESEQ, SalesHistoryTableMap::COL_OEHHEDI855SENT, SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, SalesHistoryTableMap::COL_OEHHFOB, SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN, SalesHistoryTableMap::COL_OEHHINDUSTCONFORM, SalesHistoryTableMap::COL_OEHHCSTKCONSIGN, SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT, SalesHistoryTableMap::COL_OEHHMFGID, SalesHistoryTableMap::COL_OEHHSTOREID, SalesHistoryTableMap::COL_OEHHPICKQUEUE, SalesHistoryTableMap::COL_OEHHARRVDATE, SalesHistoryTableMap::COL_OEHHSURCHGSTAT, SalesHistoryTableMap::COL_OEHHFRTGRUP, SalesHistoryTableMap::COL_OEHHCOMMORIDE, SalesHistoryTableMap::COL_OEHHCHRGSPLT, SalesHistoryTableMap::COL_OEHHACCCAPRV, SalesHistoryTableMap::COL_OEHHORIGORDRNBR, SalesHistoryTableMap::COL_OEHHPOSTDATE, SalesHistoryTableMap::COL_OEHHDISCDATE1, SalesHistoryTableMap::COL_OEHHDISCPCT1, SalesHistoryTableMap::COL_OEHHDUEDATE1, SalesHistoryTableMap::COL_OEHHDUEAMT1, SalesHistoryTableMap::COL_OEHHDUEPCT1, SalesHistoryTableMap::COL_OEHHDISCDATE2, SalesHistoryTableMap::COL_OEHHDISCPCT2, SalesHistoryTableMap::COL_OEHHDUEDATE2, SalesHistoryTableMap::COL_OEHHDUEAMT2, SalesHistoryTableMap::COL_OEHHDUEPCT2, SalesHistoryTableMap::COL_OEHHDISCDATE3, SalesHistoryTableMap::COL_OEHHDISCPCT3, SalesHistoryTableMap::COL_OEHHDUEDATE3, SalesHistoryTableMap::COL_OEHHDUEAMT3, SalesHistoryTableMap::COL_OEHHDUEPCT3, SalesHistoryTableMap::COL_OEHHDISCDATE4, SalesHistoryTableMap::COL_OEHHDISCPCT4, SalesHistoryTableMap::COL_OEHHDUEDATE4, SalesHistoryTableMap::COL_OEHHDUEAMT4, SalesHistoryTableMap::COL_OEHHDUEPCT4, SalesHistoryTableMap::COL_OEHHDISCDATE5, SalesHistoryTableMap::COL_OEHHDISCPCT5, SalesHistoryTableMap::COL_OEHHDUEDATE5, SalesHistoryTableMap::COL_OEHHDUEAMT5, SalesHistoryTableMap::COL_OEHHDUEPCT5, SalesHistoryTableMap::COL_OEHHDISCDATE6, SalesHistoryTableMap::COL_OEHHDISCPCT6, SalesHistoryTableMap::COL_OEHHDUEDATE6, SalesHistoryTableMap::COL_OEHHDUEAMT6, SalesHistoryTableMap::COL_OEHHDUEPCT6, SalesHistoryTableMap::COL_OEHHREFNBR, SalesHistoryTableMap::COL_OEHHFRTTAXCODE1, SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, SalesHistoryTableMap::COL_OEHHFRTTAXCODE2, SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, SalesHistoryTableMap::COL_OEHHFRTTAXCODE3, SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, SalesHistoryTableMap::COL_OEHHFRTTAXCODE4, SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, SalesHistoryTableMap::COL_OEHHFRTTAXCODE5, SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, SalesHistoryTableMap::COL_OEHHFRTTAXCODE6, SalesHistoryTableMap::COL_OEHHFRTTAXAMT6, SalesHistoryTableMap::COL_OEHHFRTTAXCODE7, SalesHistoryTableMap::COL_OEHHFRTTAXAMT7, SalesHistoryTableMap::COL_OEHHFRTTAXCODE8, SalesHistoryTableMap::COL_OEHHFRTTAXAMT8, SalesHistoryTableMap::COL_OEHHFRTTAXCODE9, SalesHistoryTableMap::COL_OEHHFRTTAXAMT9, SalesHistoryTableMap::COL_OEHHACPROGNBR, SalesHistoryTableMap::COL_OEHHACPROGEXPDATE, SalesHistoryTableMap::COL_DATEUPDTD, SalesHistoryTableMap::COL_TIMEUPDTD, SalesHistoryTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehhNbr', 'OehhYear', 'OehhStat', 'OehhHold', 'ArcuCustId', 'ArstShipId', 'OehhStName', 'OehhStLastName', 'OehhStFirstName', 'OehhStAdr1', 'OehhStAdr2', 'OehhStAdr3', 'OehhStCtry', 'OehhStCity', 'OehhStStat', 'OehhStZipCode', 'OehhCustPo', 'OehhOrdrDate', 'ArtmTermCd', 'ArtbShipVia', 'ArinInvNbr', 'OehhInvDate', 'OehhGLPd', 'ArspSalePer1', 'OehhSp1Pct', 'ArspSalePer2', 'OehhSp2Pct', 'ArspSalePer3', 'OehhSp3Pct', 'OehhCntrNbr', 'OehhWiBatch', 'OehhDropRelHold', 'OehhTaxSub', 'OehhNonTaxSub', 'OehhTaxTot', 'OehhFrtTot', 'OehhMiscTot', 'OehhOrdrTot', 'OehhCostTot', 'OehhSpCommLock', 'OehhTakenDate', 'OehhTakenTime', 'OehhPickDate', 'OehhPickTime', 'OehhPackDate', 'OehhPackTime', 'OehhVerifyDate', 'OehhVerifyTime', 'OehhCreditMemo', 'OehhBookedYn', 'IntbWhseOrig', 'OehhBtStat', 'OehhShipComp', 'OehhCwoFlag', 'OehhDivision', 'OehhTakenCode', 'OehhPickCode', 'OehhPackCode', 'OehhVerifyCode', 'OehhTotDisc', 'OehhEdiRefNbrQual', 'OehhUserCode1', 'OehhUserCode2', 'OehhUserCode3', 'OehhUserCode4', 'OehhExchCtry', 'OehhExchRate', 'OehhWghtTot', 'OehhWghtOride', 'OehhCcInfo', 'OehhBoxCount', 'OehhRqstDate', 'OehhCancDate', 'OehhCrntUser', 'OehhReleaseNbr', 'IntbWhse', 'OehhBordBuildDate', 'OehhDeptCode', 'OehhFrtInEntered', 'OehhDropShipEntered', 'OehhErFlag', 'OehhFrtIn', 'OehhDropShip', 'OehhMinOrder', 'OehhContractTerms', 'OehhDropShipBilled', 'OehhOrdTyp', 'OehhTrackNbr', 'OehhSource', 'OehhCcAprv', 'OehhPickFmatType', 'OehhInvcFmatType', 'OehhCashAmt', 'OehhCheckAmt', 'OehhCheckNbr', 'OehhDepositAmt', 'OehhDepositNbr', 'OehhCcAmt', 'OehhOTaxSub', 'OehhONonTaxSub', 'OehhOTaxTot', 'OehhOOrdrTot', 'OehhPickPrintDate', 'OehhPickPrintTime', 'OehhCont', 'OehhContTeleIntl', 'OehhContTeleNbr', 'OehhContTeleExt', 'OehhContFaxIntl', 'OehhContFaxNbr', 'OehhShipAcct', 'OehhChgDue', 'OehhAddlPricDisc', 'OehhAllShip', 'OehhQtyOrderAmt', 'OehhCreditApplied', 'OehhInvcPrintDate', 'OehhInvcPrintTime', 'OehhDiscFrt', 'OehhOrideShipComp', 'OehhContEmail', 'OehhManualFrt', 'OehhInternalFrt', 'OehhFrtCost', 'OehhRoute', 'OehhRouteSeq', 'OehhEdi855Sent', 'OehhFrt3rdParty', 'OehhFob', 'OehhConfirmImagYn', 'OehhIndustConform', 'OehhCstkConsign', 'OehhLmDelayCapSent', 'OehhMfgId', 'OehhStoreId', 'OehhPickQueue', 'OehhArrvDate', 'OehhSurchgStat', 'OehhFrtGrup', 'OehhCommOride', 'OehhChrgSplt', 'OehhAcCcAprv', 'OehhOrigOrdrNbr', 'OehhPostDate', 'OehhDiscDate1', 'OehhDiscPct1', 'OehhDueDate1', 'OehhDueAmt1', 'OehhDuePct1', 'OehhDiscDate2', 'OehhDiscPct2', 'OehhDueDate2', 'OehhDueAmt2', 'OehhDuePct2', 'OehhDiscDate3', 'OehhDiscPct3', 'OehhDueDate3', 'OehhDueAmt3', 'OehhDuePct3', 'OehhDiscDate4', 'OehhDiscPct4', 'OehhDueDate4', 'OehhDueAmt4', 'OehhDuePct4', 'OehhDiscDate5', 'OehhDiscPct5', 'OehhDueDate5', 'OehhDueAmt5', 'OehhDuePct5', 'OehhDiscDate6', 'OehhDiscPct6', 'OehhDueDate6', 'OehhDueAmt6', 'OehhDuePct6', 'OehhRefNbr', 'OehhFrtTaxCode1', 'OehhFrtTaxAmt1', 'OehhFrtTaxCode2', 'OehhFrtTaxAmt2', 'OehhFrtTaxCode3', 'OehhFrtTaxAmt3', 'OehhFrtTaxCode4', 'OehhFrtTaxAmt4', 'OehhFrtTaxCode5', 'OehhFrtTaxAmt5', 'OehhFrtTaxCode6', 'OehhFrtTaxAmt6', 'OehhFrtTaxCode7', 'OehhFrtTaxAmt7', 'OehhFrtTaxCode8', 'OehhFrtTaxAmt8', 'OehhFrtTaxCode9', 'OehhFrtTaxAmt9', 'OehhAcProgNbr', 'OehhAcProgExpDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehhnbr' => 0, 'Oehhyear' => 1, 'Oehhstat' => 2, 'Oehhhold' => 3, 'Arcucustid' => 4, 'Arstshipid' => 5, 'Oehhstname' => 6, 'Oehhstlastname' => 7, 'Oehhstfirstname' => 8, 'Oehhstadr1' => 9, 'Oehhstadr2' => 10, 'Oehhstadr3' => 11, 'Oehhstctry' => 12, 'Oehhstcity' => 13, 'Oehhststat' => 14, 'Oehhstzipcode' => 15, 'Oehhcustpo' => 16, 'Oehhordrdate' => 17, 'Artmtermcd' => 18, 'Artbshipvia' => 19, 'Arininvnbr' => 20, 'Oehhinvdate' => 21, 'Oehhglpd' => 22, 'Arspsaleper1' => 23, 'Oehhsp1pct' => 24, 'Arspsaleper2' => 25, 'Oehhsp2pct' => 26, 'Arspsaleper3' => 27, 'Oehhsp3pct' => 28, 'Oehhcntrnbr' => 29, 'Oehhwibatch' => 30, 'Oehhdroprelhold' => 31, 'Oehhtaxsub' => 32, 'Oehhnontaxsub' => 33, 'Oehhtaxtot' => 34, 'Oehhfrttot' => 35, 'Oehhmisctot' => 36, 'Oehhordrtot' => 37, 'Oehhcosttot' => 38, 'Oehhspcommlock' => 39, 'Oehhtakendate' => 40, 'Oehhtakentime' => 41, 'Oehhpickdate' => 42, 'Oehhpicktime' => 43, 'Oehhpackdate' => 44, 'Oehhpacktime' => 45, 'Oehhverifydate' => 46, 'Oehhverifytime' => 47, 'Oehhcreditmemo' => 48, 'Oehhbookedyn' => 49, 'Intbwhseorig' => 50, 'Oehhbtstat' => 51, 'Oehhshipcomp' => 52, 'Oehhcwoflag' => 53, 'Oehhdivision' => 54, 'Oehhtakencode' => 55, 'Oehhpickcode' => 56, 'Oehhpackcode' => 57, 'Oehhverifycode' => 58, 'Oehhtotdisc' => 59, 'Oehhedirefnbrqual' => 60, 'Oehhusercode1' => 61, 'Oehhusercode2' => 62, 'Oehhusercode3' => 63, 'Oehhusercode4' => 64, 'Oehhexchctry' => 65, 'Oehhexchrate' => 66, 'Oehhwghttot' => 67, 'Oehhwghtoride' => 68, 'Oehhccinfo' => 69, 'Oehhboxcount' => 70, 'Oehhrqstdate' => 71, 'Oehhcancdate' => 72, 'Oehhcrntuser' => 73, 'Oehhreleasenbr' => 74, 'Intbwhse' => 75, 'Oehhbordbuilddate' => 76, 'Oehhdeptcode' => 77, 'Oehhfrtinentered' => 78, 'Oehhdropshipentered' => 79, 'Oehherflag' => 80, 'Oehhfrtin' => 81, 'Oehhdropship' => 82, 'Oehhminorder' => 83, 'Oehhcontractterms' => 84, 'Oehhdropshipbilled' => 85, 'Oehhordtyp' => 86, 'Oehhtracknbr' => 87, 'Oehhsource' => 88, 'Oehhccaprv' => 89, 'Oehhpickfmattype' => 90, 'Oehhinvcfmattype' => 91, 'Oehhcashamt' => 92, 'Oehhcheckamt' => 93, 'Oehhchecknbr' => 94, 'Oehhdepositamt' => 95, 'Oehhdepositnbr' => 96, 'Oehhccamt' => 97, 'Oehhotaxsub' => 98, 'Oehhonontaxsub' => 99, 'Oehhotaxtot' => 100, 'Oehhoordrtot' => 101, 'Oehhpickprintdate' => 102, 'Oehhpickprinttime' => 103, 'Oehhcont' => 104, 'Oehhcontteleintl' => 105, 'Oehhconttelenbr' => 106, 'Oehhcontteleext' => 107, 'Oehhcontfaxintl' => 108, 'Oehhcontfaxnbr' => 109, 'Oehhshipacct' => 110, 'Oehhchgdue' => 111, 'Oehhaddlpricdisc' => 112, 'Oehhallship' => 113, 'Oehhqtyorderamt' => 114, 'Oehhcreditapplied' => 115, 'Oehhinvcprintdate' => 116, 'Oehhinvcprinttime' => 117, 'Oehhdiscfrt' => 118, 'Oehhorideshipcomp' => 119, 'Oehhcontemail' => 120, 'Oehhmanualfrt' => 121, 'Oehhinternalfrt' => 122, 'Oehhfrtcost' => 123, 'Oehhroute' => 124, 'Oehhrouteseq' => 125, 'Oehhedi855sent' => 126, 'Oehhfrt3rdparty' => 127, 'Oehhfob' => 128, 'Oehhconfirmimagyn' => 129, 'Oehhindustconform' => 130, 'Oehhcstkconsign' => 131, 'Oehhlmdelaycapsent' => 132, 'Oehhmfgid' => 133, 'Oehhstoreid' => 134, 'Oehhpickqueue' => 135, 'Oehharrvdate' => 136, 'Oehhsurchgstat' => 137, 'Oehhfrtgrup' => 138, 'Oehhcommoride' => 139, 'Oehhchrgsplt' => 140, 'Oehhacccaprv' => 141, 'Oehhorigordrnbr' => 142, 'Oehhpostdate' => 143, 'Oehhdiscdate1' => 144, 'Oehhdiscpct1' => 145, 'Oehhduedate1' => 146, 'Oehhdueamt1' => 147, 'Oehhduepct1' => 148, 'Oehhdiscdate2' => 149, 'Oehhdiscpct2' => 150, 'Oehhduedate2' => 151, 'Oehhdueamt2' => 152, 'Oehhduepct2' => 153, 'Oehhdiscdate3' => 154, 'Oehhdiscpct3' => 155, 'Oehhduedate3' => 156, 'Oehhdueamt3' => 157, 'Oehhduepct3' => 158, 'Oehhdiscdate4' => 159, 'Oehhdiscpct4' => 160, 'Oehhduedate4' => 161, 'Oehhdueamt4' => 162, 'Oehhduepct4' => 163, 'Oehhdiscdate5' => 164, 'Oehhdiscpct5' => 165, 'Oehhduedate5' => 166, 'Oehhdueamt5' => 167, 'Oehhduepct5' => 168, 'Oehhdiscdate6' => 169, 'Oehhdiscpct6' => 170, 'Oehhduedate6' => 171, 'Oehhdueamt6' => 172, 'Oehhduepct6' => 173, 'Oehhrefnbr' => 174, 'Oehhfrttaxcode1' => 175, 'Oehhfrttaxamt1' => 176, 'Oehhfrttaxcode2' => 177, 'Oehhfrttaxamt2' => 178, 'Oehhfrttaxcode3' => 179, 'Oehhfrttaxamt3' => 180, 'Oehhfrttaxcode4' => 181, 'Oehhfrttaxamt4' => 182, 'Oehhfrttaxcode5' => 183, 'Oehhfrttaxamt5' => 184, 'Oehhfrttaxcode6' => 185, 'Oehhfrttaxamt6' => 186, 'Oehhfrttaxcode7' => 187, 'Oehhfrttaxamt7' => 188, 'Oehhfrttaxcode8' => 189, 'Oehhfrttaxamt8' => 190, 'Oehhfrttaxcode9' => 191, 'Oehhfrttaxamt9' => 192, 'Oehhacprognbr' => 193, 'Oehhacprogexpdate' => 194, 'Dateupdtd' => 195, 'Timeupdtd' => 196, 'Dummy' => 197, ),
        self::TYPE_CAMELNAME     => array('oehhnbr' => 0, 'oehhyear' => 1, 'oehhstat' => 2, 'oehhhold' => 3, 'arcucustid' => 4, 'arstshipid' => 5, 'oehhstname' => 6, 'oehhstlastname' => 7, 'oehhstfirstname' => 8, 'oehhstadr1' => 9, 'oehhstadr2' => 10, 'oehhstadr3' => 11, 'oehhstctry' => 12, 'oehhstcity' => 13, 'oehhststat' => 14, 'oehhstzipcode' => 15, 'oehhcustpo' => 16, 'oehhordrdate' => 17, 'artmtermcd' => 18, 'artbshipvia' => 19, 'arininvnbr' => 20, 'oehhinvdate' => 21, 'oehhglpd' => 22, 'arspsaleper1' => 23, 'oehhsp1pct' => 24, 'arspsaleper2' => 25, 'oehhsp2pct' => 26, 'arspsaleper3' => 27, 'oehhsp3pct' => 28, 'oehhcntrnbr' => 29, 'oehhwibatch' => 30, 'oehhdroprelhold' => 31, 'oehhtaxsub' => 32, 'oehhnontaxsub' => 33, 'oehhtaxtot' => 34, 'oehhfrttot' => 35, 'oehhmisctot' => 36, 'oehhordrtot' => 37, 'oehhcosttot' => 38, 'oehhspcommlock' => 39, 'oehhtakendate' => 40, 'oehhtakentime' => 41, 'oehhpickdate' => 42, 'oehhpicktime' => 43, 'oehhpackdate' => 44, 'oehhpacktime' => 45, 'oehhverifydate' => 46, 'oehhverifytime' => 47, 'oehhcreditmemo' => 48, 'oehhbookedyn' => 49, 'intbwhseorig' => 50, 'oehhbtstat' => 51, 'oehhshipcomp' => 52, 'oehhcwoflag' => 53, 'oehhdivision' => 54, 'oehhtakencode' => 55, 'oehhpickcode' => 56, 'oehhpackcode' => 57, 'oehhverifycode' => 58, 'oehhtotdisc' => 59, 'oehhedirefnbrqual' => 60, 'oehhusercode1' => 61, 'oehhusercode2' => 62, 'oehhusercode3' => 63, 'oehhusercode4' => 64, 'oehhexchctry' => 65, 'oehhexchrate' => 66, 'oehhwghttot' => 67, 'oehhwghtoride' => 68, 'oehhccinfo' => 69, 'oehhboxcount' => 70, 'oehhrqstdate' => 71, 'oehhcancdate' => 72, 'oehhcrntuser' => 73, 'oehhreleasenbr' => 74, 'intbwhse' => 75, 'oehhbordbuilddate' => 76, 'oehhdeptcode' => 77, 'oehhfrtinentered' => 78, 'oehhdropshipentered' => 79, 'oehherflag' => 80, 'oehhfrtin' => 81, 'oehhdropship' => 82, 'oehhminorder' => 83, 'oehhcontractterms' => 84, 'oehhdropshipbilled' => 85, 'oehhordtyp' => 86, 'oehhtracknbr' => 87, 'oehhsource' => 88, 'oehhccaprv' => 89, 'oehhpickfmattype' => 90, 'oehhinvcfmattype' => 91, 'oehhcashamt' => 92, 'oehhcheckamt' => 93, 'oehhchecknbr' => 94, 'oehhdepositamt' => 95, 'oehhdepositnbr' => 96, 'oehhccamt' => 97, 'oehhotaxsub' => 98, 'oehhonontaxsub' => 99, 'oehhotaxtot' => 100, 'oehhoordrtot' => 101, 'oehhpickprintdate' => 102, 'oehhpickprinttime' => 103, 'oehhcont' => 104, 'oehhcontteleintl' => 105, 'oehhconttelenbr' => 106, 'oehhcontteleext' => 107, 'oehhcontfaxintl' => 108, 'oehhcontfaxnbr' => 109, 'oehhshipacct' => 110, 'oehhchgdue' => 111, 'oehhaddlpricdisc' => 112, 'oehhallship' => 113, 'oehhqtyorderamt' => 114, 'oehhcreditapplied' => 115, 'oehhinvcprintdate' => 116, 'oehhinvcprinttime' => 117, 'oehhdiscfrt' => 118, 'oehhorideshipcomp' => 119, 'oehhcontemail' => 120, 'oehhmanualfrt' => 121, 'oehhinternalfrt' => 122, 'oehhfrtcost' => 123, 'oehhroute' => 124, 'oehhrouteseq' => 125, 'oehhedi855sent' => 126, 'oehhfrt3rdparty' => 127, 'oehhfob' => 128, 'oehhconfirmimagyn' => 129, 'oehhindustconform' => 130, 'oehhcstkconsign' => 131, 'oehhlmdelaycapsent' => 132, 'oehhmfgid' => 133, 'oehhstoreid' => 134, 'oehhpickqueue' => 135, 'oehharrvdate' => 136, 'oehhsurchgstat' => 137, 'oehhfrtgrup' => 138, 'oehhcommoride' => 139, 'oehhchrgsplt' => 140, 'oehhacccaprv' => 141, 'oehhorigordrnbr' => 142, 'oehhpostdate' => 143, 'oehhdiscdate1' => 144, 'oehhdiscpct1' => 145, 'oehhduedate1' => 146, 'oehhdueamt1' => 147, 'oehhduepct1' => 148, 'oehhdiscdate2' => 149, 'oehhdiscpct2' => 150, 'oehhduedate2' => 151, 'oehhdueamt2' => 152, 'oehhduepct2' => 153, 'oehhdiscdate3' => 154, 'oehhdiscpct3' => 155, 'oehhduedate3' => 156, 'oehhdueamt3' => 157, 'oehhduepct3' => 158, 'oehhdiscdate4' => 159, 'oehhdiscpct4' => 160, 'oehhduedate4' => 161, 'oehhdueamt4' => 162, 'oehhduepct4' => 163, 'oehhdiscdate5' => 164, 'oehhdiscpct5' => 165, 'oehhduedate5' => 166, 'oehhdueamt5' => 167, 'oehhduepct5' => 168, 'oehhdiscdate6' => 169, 'oehhdiscpct6' => 170, 'oehhduedate6' => 171, 'oehhdueamt6' => 172, 'oehhduepct6' => 173, 'oehhrefnbr' => 174, 'oehhfrttaxcode1' => 175, 'oehhfrttaxamt1' => 176, 'oehhfrttaxcode2' => 177, 'oehhfrttaxamt2' => 178, 'oehhfrttaxcode3' => 179, 'oehhfrttaxamt3' => 180, 'oehhfrttaxcode4' => 181, 'oehhfrttaxamt4' => 182, 'oehhfrttaxcode5' => 183, 'oehhfrttaxamt5' => 184, 'oehhfrttaxcode6' => 185, 'oehhfrttaxamt6' => 186, 'oehhfrttaxcode7' => 187, 'oehhfrttaxamt7' => 188, 'oehhfrttaxcode8' => 189, 'oehhfrttaxamt8' => 190, 'oehhfrttaxcode9' => 191, 'oehhfrttaxamt9' => 192, 'oehhacprognbr' => 193, 'oehhacprogexpdate' => 194, 'dateupdtd' => 195, 'timeupdtd' => 196, 'dummy' => 197, ),
        self::TYPE_COLNAME       => array(SalesHistoryTableMap::COL_OEHHNBR => 0, SalesHistoryTableMap::COL_OEHHYEAR => 1, SalesHistoryTableMap::COL_OEHHSTAT => 2, SalesHistoryTableMap::COL_OEHHHOLD => 3, SalesHistoryTableMap::COL_ARCUCUSTID => 4, SalesHistoryTableMap::COL_ARSTSHIPID => 5, SalesHistoryTableMap::COL_OEHHSTNAME => 6, SalesHistoryTableMap::COL_OEHHSTLASTNAME => 7, SalesHistoryTableMap::COL_OEHHSTFIRSTNAME => 8, SalesHistoryTableMap::COL_OEHHSTADR1 => 9, SalesHistoryTableMap::COL_OEHHSTADR2 => 10, SalesHistoryTableMap::COL_OEHHSTADR3 => 11, SalesHistoryTableMap::COL_OEHHSTCTRY => 12, SalesHistoryTableMap::COL_OEHHSTCITY => 13, SalesHistoryTableMap::COL_OEHHSTSTAT => 14, SalesHistoryTableMap::COL_OEHHSTZIPCODE => 15, SalesHistoryTableMap::COL_OEHHCUSTPO => 16, SalesHistoryTableMap::COL_OEHHORDRDATE => 17, SalesHistoryTableMap::COL_ARTMTERMCD => 18, SalesHistoryTableMap::COL_ARTBSHIPVIA => 19, SalesHistoryTableMap::COL_ARININVNBR => 20, SalesHistoryTableMap::COL_OEHHINVDATE => 21, SalesHistoryTableMap::COL_OEHHGLPD => 22, SalesHistoryTableMap::COL_ARSPSALEPER1 => 23, SalesHistoryTableMap::COL_OEHHSP1PCT => 24, SalesHistoryTableMap::COL_ARSPSALEPER2 => 25, SalesHistoryTableMap::COL_OEHHSP2PCT => 26, SalesHistoryTableMap::COL_ARSPSALEPER3 => 27, SalesHistoryTableMap::COL_OEHHSP3PCT => 28, SalesHistoryTableMap::COL_OEHHCNTRNBR => 29, SalesHistoryTableMap::COL_OEHHWIBATCH => 30, SalesHistoryTableMap::COL_OEHHDROPRELHOLD => 31, SalesHistoryTableMap::COL_OEHHTAXSUB => 32, SalesHistoryTableMap::COL_OEHHNONTAXSUB => 33, SalesHistoryTableMap::COL_OEHHTAXTOT => 34, SalesHistoryTableMap::COL_OEHHFRTTOT => 35, SalesHistoryTableMap::COL_OEHHMISCTOT => 36, SalesHistoryTableMap::COL_OEHHORDRTOT => 37, SalesHistoryTableMap::COL_OEHHCOSTTOT => 38, SalesHistoryTableMap::COL_OEHHSPCOMMLOCK => 39, SalesHistoryTableMap::COL_OEHHTAKENDATE => 40, SalesHistoryTableMap::COL_OEHHTAKENTIME => 41, SalesHistoryTableMap::COL_OEHHPICKDATE => 42, SalesHistoryTableMap::COL_OEHHPICKTIME => 43, SalesHistoryTableMap::COL_OEHHPACKDATE => 44, SalesHistoryTableMap::COL_OEHHPACKTIME => 45, SalesHistoryTableMap::COL_OEHHVERIFYDATE => 46, SalesHistoryTableMap::COL_OEHHVERIFYTIME => 47, SalesHistoryTableMap::COL_OEHHCREDITMEMO => 48, SalesHistoryTableMap::COL_OEHHBOOKEDYN => 49, SalesHistoryTableMap::COL_INTBWHSEORIG => 50, SalesHistoryTableMap::COL_OEHHBTSTAT => 51, SalesHistoryTableMap::COL_OEHHSHIPCOMP => 52, SalesHistoryTableMap::COL_OEHHCWOFLAG => 53, SalesHistoryTableMap::COL_OEHHDIVISION => 54, SalesHistoryTableMap::COL_OEHHTAKENCODE => 55, SalesHistoryTableMap::COL_OEHHPICKCODE => 56, SalesHistoryTableMap::COL_OEHHPACKCODE => 57, SalesHistoryTableMap::COL_OEHHVERIFYCODE => 58, SalesHistoryTableMap::COL_OEHHTOTDISC => 59, SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL => 60, SalesHistoryTableMap::COL_OEHHUSERCODE1 => 61, SalesHistoryTableMap::COL_OEHHUSERCODE2 => 62, SalesHistoryTableMap::COL_OEHHUSERCODE3 => 63, SalesHistoryTableMap::COL_OEHHUSERCODE4 => 64, SalesHistoryTableMap::COL_OEHHEXCHCTRY => 65, SalesHistoryTableMap::COL_OEHHEXCHRATE => 66, SalesHistoryTableMap::COL_OEHHWGHTTOT => 67, SalesHistoryTableMap::COL_OEHHWGHTORIDE => 68, SalesHistoryTableMap::COL_OEHHCCINFO => 69, SalesHistoryTableMap::COL_OEHHBOXCOUNT => 70, SalesHistoryTableMap::COL_OEHHRQSTDATE => 71, SalesHistoryTableMap::COL_OEHHCANCDATE => 72, SalesHistoryTableMap::COL_OEHHCRNTUSER => 73, SalesHistoryTableMap::COL_OEHHRELEASENBR => 74, SalesHistoryTableMap::COL_INTBWHSE => 75, SalesHistoryTableMap::COL_OEHHBORDBUILDDATE => 76, SalesHistoryTableMap::COL_OEHHDEPTCODE => 77, SalesHistoryTableMap::COL_OEHHFRTINENTERED => 78, SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED => 79, SalesHistoryTableMap::COL_OEHHERFLAG => 80, SalesHistoryTableMap::COL_OEHHFRTIN => 81, SalesHistoryTableMap::COL_OEHHDROPSHIP => 82, SalesHistoryTableMap::COL_OEHHMINORDER => 83, SalesHistoryTableMap::COL_OEHHCONTRACTTERMS => 84, SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED => 85, SalesHistoryTableMap::COL_OEHHORDTYP => 86, SalesHistoryTableMap::COL_OEHHTRACKNBR => 87, SalesHistoryTableMap::COL_OEHHSOURCE => 88, SalesHistoryTableMap::COL_OEHHCCAPRV => 89, SalesHistoryTableMap::COL_OEHHPICKFMATTYPE => 90, SalesHistoryTableMap::COL_OEHHINVCFMATTYPE => 91, SalesHistoryTableMap::COL_OEHHCASHAMT => 92, SalesHistoryTableMap::COL_OEHHCHECKAMT => 93, SalesHistoryTableMap::COL_OEHHCHECKNBR => 94, SalesHistoryTableMap::COL_OEHHDEPOSITAMT => 95, SalesHistoryTableMap::COL_OEHHDEPOSITNBR => 96, SalesHistoryTableMap::COL_OEHHCCAMT => 97, SalesHistoryTableMap::COL_OEHHOTAXSUB => 98, SalesHistoryTableMap::COL_OEHHONONTAXSUB => 99, SalesHistoryTableMap::COL_OEHHOTAXTOT => 100, SalesHistoryTableMap::COL_OEHHOORDRTOT => 101, SalesHistoryTableMap::COL_OEHHPICKPRINTDATE => 102, SalesHistoryTableMap::COL_OEHHPICKPRINTTIME => 103, SalesHistoryTableMap::COL_OEHHCONT => 104, SalesHistoryTableMap::COL_OEHHCONTTELEINTL => 105, SalesHistoryTableMap::COL_OEHHCONTTELENBR => 106, SalesHistoryTableMap::COL_OEHHCONTTELEEXT => 107, SalesHistoryTableMap::COL_OEHHCONTFAXINTL => 108, SalesHistoryTableMap::COL_OEHHCONTFAXNBR => 109, SalesHistoryTableMap::COL_OEHHSHIPACCT => 110, SalesHistoryTableMap::COL_OEHHCHGDUE => 111, SalesHistoryTableMap::COL_OEHHADDLPRICDISC => 112, SalesHistoryTableMap::COL_OEHHALLSHIP => 113, SalesHistoryTableMap::COL_OEHHQTYORDERAMT => 114, SalesHistoryTableMap::COL_OEHHCREDITAPPLIED => 115, SalesHistoryTableMap::COL_OEHHINVCPRINTDATE => 116, SalesHistoryTableMap::COL_OEHHINVCPRINTTIME => 117, SalesHistoryTableMap::COL_OEHHDISCFRT => 118, SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP => 119, SalesHistoryTableMap::COL_OEHHCONTEMAIL => 120, SalesHistoryTableMap::COL_OEHHMANUALFRT => 121, SalesHistoryTableMap::COL_OEHHINTERNALFRT => 122, SalesHistoryTableMap::COL_OEHHFRTCOST => 123, SalesHistoryTableMap::COL_OEHHROUTE => 124, SalesHistoryTableMap::COL_OEHHROUTESEQ => 125, SalesHistoryTableMap::COL_OEHHEDI855SENT => 126, SalesHistoryTableMap::COL_OEHHFRT3RDPARTY => 127, SalesHistoryTableMap::COL_OEHHFOB => 128, SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN => 129, SalesHistoryTableMap::COL_OEHHINDUSTCONFORM => 130, SalesHistoryTableMap::COL_OEHHCSTKCONSIGN => 131, SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT => 132, SalesHistoryTableMap::COL_OEHHMFGID => 133, SalesHistoryTableMap::COL_OEHHSTOREID => 134, SalesHistoryTableMap::COL_OEHHPICKQUEUE => 135, SalesHistoryTableMap::COL_OEHHARRVDATE => 136, SalesHistoryTableMap::COL_OEHHSURCHGSTAT => 137, SalesHistoryTableMap::COL_OEHHFRTGRUP => 138, SalesHistoryTableMap::COL_OEHHCOMMORIDE => 139, SalesHistoryTableMap::COL_OEHHCHRGSPLT => 140, SalesHistoryTableMap::COL_OEHHACCCAPRV => 141, SalesHistoryTableMap::COL_OEHHORIGORDRNBR => 142, SalesHistoryTableMap::COL_OEHHPOSTDATE => 143, SalesHistoryTableMap::COL_OEHHDISCDATE1 => 144, SalesHistoryTableMap::COL_OEHHDISCPCT1 => 145, SalesHistoryTableMap::COL_OEHHDUEDATE1 => 146, SalesHistoryTableMap::COL_OEHHDUEAMT1 => 147, SalesHistoryTableMap::COL_OEHHDUEPCT1 => 148, SalesHistoryTableMap::COL_OEHHDISCDATE2 => 149, SalesHistoryTableMap::COL_OEHHDISCPCT2 => 150, SalesHistoryTableMap::COL_OEHHDUEDATE2 => 151, SalesHistoryTableMap::COL_OEHHDUEAMT2 => 152, SalesHistoryTableMap::COL_OEHHDUEPCT2 => 153, SalesHistoryTableMap::COL_OEHHDISCDATE3 => 154, SalesHistoryTableMap::COL_OEHHDISCPCT3 => 155, SalesHistoryTableMap::COL_OEHHDUEDATE3 => 156, SalesHistoryTableMap::COL_OEHHDUEAMT3 => 157, SalesHistoryTableMap::COL_OEHHDUEPCT3 => 158, SalesHistoryTableMap::COL_OEHHDISCDATE4 => 159, SalesHistoryTableMap::COL_OEHHDISCPCT4 => 160, SalesHistoryTableMap::COL_OEHHDUEDATE4 => 161, SalesHistoryTableMap::COL_OEHHDUEAMT4 => 162, SalesHistoryTableMap::COL_OEHHDUEPCT4 => 163, SalesHistoryTableMap::COL_OEHHDISCDATE5 => 164, SalesHistoryTableMap::COL_OEHHDISCPCT5 => 165, SalesHistoryTableMap::COL_OEHHDUEDATE5 => 166, SalesHistoryTableMap::COL_OEHHDUEAMT5 => 167, SalesHistoryTableMap::COL_OEHHDUEPCT5 => 168, SalesHistoryTableMap::COL_OEHHDISCDATE6 => 169, SalesHistoryTableMap::COL_OEHHDISCPCT6 => 170, SalesHistoryTableMap::COL_OEHHDUEDATE6 => 171, SalesHistoryTableMap::COL_OEHHDUEAMT6 => 172, SalesHistoryTableMap::COL_OEHHDUEPCT6 => 173, SalesHistoryTableMap::COL_OEHHREFNBR => 174, SalesHistoryTableMap::COL_OEHHFRTTAXCODE1 => 175, SalesHistoryTableMap::COL_OEHHFRTTAXAMT1 => 176, SalesHistoryTableMap::COL_OEHHFRTTAXCODE2 => 177, SalesHistoryTableMap::COL_OEHHFRTTAXAMT2 => 178, SalesHistoryTableMap::COL_OEHHFRTTAXCODE3 => 179, SalesHistoryTableMap::COL_OEHHFRTTAXAMT3 => 180, SalesHistoryTableMap::COL_OEHHFRTTAXCODE4 => 181, SalesHistoryTableMap::COL_OEHHFRTTAXAMT4 => 182, SalesHistoryTableMap::COL_OEHHFRTTAXCODE5 => 183, SalesHistoryTableMap::COL_OEHHFRTTAXAMT5 => 184, SalesHistoryTableMap::COL_OEHHFRTTAXCODE6 => 185, SalesHistoryTableMap::COL_OEHHFRTTAXAMT6 => 186, SalesHistoryTableMap::COL_OEHHFRTTAXCODE7 => 187, SalesHistoryTableMap::COL_OEHHFRTTAXAMT7 => 188, SalesHistoryTableMap::COL_OEHHFRTTAXCODE8 => 189, SalesHistoryTableMap::COL_OEHHFRTTAXAMT8 => 190, SalesHistoryTableMap::COL_OEHHFRTTAXCODE9 => 191, SalesHistoryTableMap::COL_OEHHFRTTAXAMT9 => 192, SalesHistoryTableMap::COL_OEHHACPROGNBR => 193, SalesHistoryTableMap::COL_OEHHACPROGEXPDATE => 194, SalesHistoryTableMap::COL_DATEUPDTD => 195, SalesHistoryTableMap::COL_TIMEUPDTD => 196, SalesHistoryTableMap::COL_DUMMY => 197, ),
        self::TYPE_FIELDNAME     => array('OehhNbr' => 0, 'OehhYear' => 1, 'OehhStat' => 2, 'OehhHold' => 3, 'ArcuCustId' => 4, 'ArstShipId' => 5, 'OehhStName' => 6, 'OehhStLastName' => 7, 'OehhStFirstName' => 8, 'OehhStAdr1' => 9, 'OehhStAdr2' => 10, 'OehhStAdr3' => 11, 'OehhStCtry' => 12, 'OehhStCity' => 13, 'OehhStStat' => 14, 'OehhStZipCode' => 15, 'OehhCustPo' => 16, 'OehhOrdrDate' => 17, 'ArtmTermCd' => 18, 'ArtbShipVia' => 19, 'ArinInvNbr' => 20, 'OehhInvDate' => 21, 'OehhGLPd' => 22, 'ArspSalePer1' => 23, 'OehhSp1Pct' => 24, 'ArspSalePer2' => 25, 'OehhSp2Pct' => 26, 'ArspSalePer3' => 27, 'OehhSp3Pct' => 28, 'OehhCntrNbr' => 29, 'OehhWiBatch' => 30, 'OehhDropRelHold' => 31, 'OehhTaxSub' => 32, 'OehhNonTaxSub' => 33, 'OehhTaxTot' => 34, 'OehhFrtTot' => 35, 'OehhMiscTot' => 36, 'OehhOrdrTot' => 37, 'OehhCostTot' => 38, 'OehhSpCommLock' => 39, 'OehhTakenDate' => 40, 'OehhTakenTime' => 41, 'OehhPickDate' => 42, 'OehhPickTime' => 43, 'OehhPackDate' => 44, 'OehhPackTime' => 45, 'OehhVerifyDate' => 46, 'OehhVerifyTime' => 47, 'OehhCreditMemo' => 48, 'OehhBookedYn' => 49, 'IntbWhseOrig' => 50, 'OehhBtStat' => 51, 'OehhShipComp' => 52, 'OehhCwoFlag' => 53, 'OehhDivision' => 54, 'OehhTakenCode' => 55, 'OehhPickCode' => 56, 'OehhPackCode' => 57, 'OehhVerifyCode' => 58, 'OehhTotDisc' => 59, 'OehhEdiRefNbrQual' => 60, 'OehhUserCode1' => 61, 'OehhUserCode2' => 62, 'OehhUserCode3' => 63, 'OehhUserCode4' => 64, 'OehhExchCtry' => 65, 'OehhExchRate' => 66, 'OehhWghtTot' => 67, 'OehhWghtOride' => 68, 'OehhCcInfo' => 69, 'OehhBoxCount' => 70, 'OehhRqstDate' => 71, 'OehhCancDate' => 72, 'OehhCrntUser' => 73, 'OehhReleaseNbr' => 74, 'IntbWhse' => 75, 'OehhBordBuildDate' => 76, 'OehhDeptCode' => 77, 'OehhFrtInEntered' => 78, 'OehhDropShipEntered' => 79, 'OehhErFlag' => 80, 'OehhFrtIn' => 81, 'OehhDropShip' => 82, 'OehhMinOrder' => 83, 'OehhContractTerms' => 84, 'OehhDropShipBilled' => 85, 'OehhOrdTyp' => 86, 'OehhTrackNbr' => 87, 'OehhSource' => 88, 'OehhCcAprv' => 89, 'OehhPickFmatType' => 90, 'OehhInvcFmatType' => 91, 'OehhCashAmt' => 92, 'OehhCheckAmt' => 93, 'OehhCheckNbr' => 94, 'OehhDepositAmt' => 95, 'OehhDepositNbr' => 96, 'OehhCcAmt' => 97, 'OehhOTaxSub' => 98, 'OehhONonTaxSub' => 99, 'OehhOTaxTot' => 100, 'OehhOOrdrTot' => 101, 'OehhPickPrintDate' => 102, 'OehhPickPrintTime' => 103, 'OehhCont' => 104, 'OehhContTeleIntl' => 105, 'OehhContTeleNbr' => 106, 'OehhContTeleExt' => 107, 'OehhContFaxIntl' => 108, 'OehhContFaxNbr' => 109, 'OehhShipAcct' => 110, 'OehhChgDue' => 111, 'OehhAddlPricDisc' => 112, 'OehhAllShip' => 113, 'OehhQtyOrderAmt' => 114, 'OehhCreditApplied' => 115, 'OehhInvcPrintDate' => 116, 'OehhInvcPrintTime' => 117, 'OehhDiscFrt' => 118, 'OehhOrideShipComp' => 119, 'OehhContEmail' => 120, 'OehhManualFrt' => 121, 'OehhInternalFrt' => 122, 'OehhFrtCost' => 123, 'OehhRoute' => 124, 'OehhRouteSeq' => 125, 'OehhEdi855Sent' => 126, 'OehhFrt3rdParty' => 127, 'OehhFob' => 128, 'OehhConfirmImagYn' => 129, 'OehhIndustConform' => 130, 'OehhCstkConsign' => 131, 'OehhLmDelayCapSent' => 132, 'OehhMfgId' => 133, 'OehhStoreId' => 134, 'OehhPickQueue' => 135, 'OehhArrvDate' => 136, 'OehhSurchgStat' => 137, 'OehhFrtGrup' => 138, 'OehhCommOride' => 139, 'OehhChrgSplt' => 140, 'OehhAcCcAprv' => 141, 'OehhOrigOrdrNbr' => 142, 'OehhPostDate' => 143, 'OehhDiscDate1' => 144, 'OehhDiscPct1' => 145, 'OehhDueDate1' => 146, 'OehhDueAmt1' => 147, 'OehhDuePct1' => 148, 'OehhDiscDate2' => 149, 'OehhDiscPct2' => 150, 'OehhDueDate2' => 151, 'OehhDueAmt2' => 152, 'OehhDuePct2' => 153, 'OehhDiscDate3' => 154, 'OehhDiscPct3' => 155, 'OehhDueDate3' => 156, 'OehhDueAmt3' => 157, 'OehhDuePct3' => 158, 'OehhDiscDate4' => 159, 'OehhDiscPct4' => 160, 'OehhDueDate4' => 161, 'OehhDueAmt4' => 162, 'OehhDuePct4' => 163, 'OehhDiscDate5' => 164, 'OehhDiscPct5' => 165, 'OehhDueDate5' => 166, 'OehhDueAmt5' => 167, 'OehhDuePct5' => 168, 'OehhDiscDate6' => 169, 'OehhDiscPct6' => 170, 'OehhDueDate6' => 171, 'OehhDueAmt6' => 172, 'OehhDuePct6' => 173, 'OehhRefNbr' => 174, 'OehhFrtTaxCode1' => 175, 'OehhFrtTaxAmt1' => 176, 'OehhFrtTaxCode2' => 177, 'OehhFrtTaxAmt2' => 178, 'OehhFrtTaxCode3' => 179, 'OehhFrtTaxAmt3' => 180, 'OehhFrtTaxCode4' => 181, 'OehhFrtTaxAmt4' => 182, 'OehhFrtTaxCode5' => 183, 'OehhFrtTaxAmt5' => 184, 'OehhFrtTaxCode6' => 185, 'OehhFrtTaxAmt6' => 186, 'OehhFrtTaxCode7' => 187, 'OehhFrtTaxAmt7' => 188, 'OehhFrtTaxCode8' => 189, 'OehhFrtTaxAmt8' => 190, 'OehhFrtTaxCode9' => 191, 'OehhFrtTaxAmt9' => 192, 'OehhAcProgNbr' => 193, 'OehhAcProgExpDate' => 194, 'DateUpdtd' => 195, 'TimeUpdtd' => 196, 'dummy' => 197, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, )
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
        $this->setName('so_head_hist');
        $this->setPhpName('SalesHistory');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesHistory');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OehhNbr', 'Oehhnbr', 'INTEGER', true, 10, 0);
        $this->addColumn('OehhYear', 'Oehhyear', 'CHAR', true, 4, '');
        $this->addColumn('OehhStat', 'Oehhstat', 'CHAR', true, null, 'N');
        $this->addColumn('OehhHold', 'Oehhhold', 'CHAR', true, null, 'N');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArstShipId', 'Arstshipid', 'VARCHAR', 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addColumn('OehhStName', 'Oehhstname', 'VARCHAR', true, 30, '');
        $this->addColumn('OehhStLastName', 'Oehhstlastname', 'VARCHAR', true, 15, '');
        $this->addColumn('OehhStFirstName', 'Oehhstfirstname', 'VARCHAR', true, 14, '');
        $this->addColumn('OehhStAdr1', 'Oehhstadr1', 'VARCHAR', true, 30, '');
        $this->addColumn('OehhStAdr2', 'Oehhstadr2', 'VARCHAR', true, 30, '');
        $this->addColumn('OehhStAdr3', 'Oehhstadr3', 'VARCHAR', true, 30, '');
        $this->addColumn('OehhStCtry', 'Oehhstctry', 'VARCHAR', true, 4, '');
        $this->addColumn('OehhStCity', 'Oehhstcity', 'VARCHAR', true, 16, '');
        $this->addColumn('OehhStStat', 'Oehhststat', 'CHAR', true, 2, '');
        $this->addColumn('OehhStZipCode', 'Oehhstzipcode', 'VARCHAR', true, 10, '');
        $this->addColumn('OehhCustPo', 'Oehhcustpo', 'VARCHAR', true, 20, '');
        $this->addColumn('OehhOrdrDate', 'Oehhordrdate', 'CHAR', true, 8, '');
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', true, 4, '');
        $this->addColumn('ArinInvNbr', 'Arininvnbr', 'CHAR', true, 10, '');
        $this->addColumn('OehhInvDate', 'Oehhinvdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhGLPd', 'Oehhglpd', 'INTEGER', true, 2, 0);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhSp1Pct', 'Oehhsp1pct', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhSp2Pct', 'Oehhsp2pct', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhSp3Pct', 'Oehhsp3pct', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhCntrNbr', 'Oehhcntrnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('OehhWiBatch', 'Oehhwibatch', 'INTEGER', true, 8, 0);
        $this->addColumn('OehhDropRelHold', 'Oehhdroprelhold', 'CHAR', true, null, '');
        $this->addColumn('OehhTaxSub', 'Oehhtaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhNonTaxSub', 'Oehhnontaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhTaxTot', 'Oehhtaxtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTot', 'Oehhfrttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhMiscTot', 'Oehhmisctot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhOrdrTot', 'Oehhordrtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhCostTot', 'Oehhcosttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhSpCommLock', 'Oehhspcommlock', 'CHAR', true, null, 'N');
        $this->addColumn('OehhTakenDate', 'Oehhtakendate', 'CHAR', true, 8, '');
        $this->addColumn('OehhTakenTime', 'Oehhtakentime', 'CHAR', true, 4, '');
        $this->addColumn('OehhPickDate', 'Oehhpickdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhPickTime', 'Oehhpicktime', 'CHAR', true, 4, '');
        $this->addColumn('OehhPackDate', 'Oehhpackdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhPackTime', 'Oehhpacktime', 'CHAR', true, 4, '');
        $this->addColumn('OehhVerifyDate', 'Oehhverifydate', 'CHAR', true, 8, '');
        $this->addColumn('OehhVerifyTime', 'Oehhverifytime', 'CHAR', true, 4, '');
        $this->addColumn('OehhCreditMemo', 'Oehhcreditmemo', 'CHAR', true, null, '');
        $this->addColumn('OehhBookedYn', 'Oehhbookedyn', 'CHAR', true, null, '');
        $this->addColumn('IntbWhseOrig', 'Intbwhseorig', 'VARCHAR', true, 2, '');
        $this->addColumn('OehhBtStat', 'Oehhbtstat', 'CHAR', true, 2, '');
        $this->addColumn('OehhShipComp', 'Oehhshipcomp', 'CHAR', true, null, 'N');
        $this->addColumn('OehhCwoFlag', 'Oehhcwoflag', 'CHAR', true, null, '');
        $this->addColumn('OehhDivision', 'Oehhdivision', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhTakenCode', 'Oehhtakencode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhPickCode', 'Oehhpickcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhPackCode', 'Oehhpackcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhVerifyCode', 'Oehhverifycode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhTotDisc', 'Oehhtotdisc', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhEdiRefNbrQual', 'Oehhedirefnbrqual', 'VARCHAR', true, 3, '');
        $this->addColumn('OehhUserCode1', 'Oehhusercode1', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhUserCode2', 'Oehhusercode2', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhUserCode3', 'Oehhusercode3', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhUserCode4', 'Oehhusercode4', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhExchCtry', 'Oehhexchctry', 'VARCHAR', true, 4, '');
        $this->addColumn('OehhExchRate', 'Oehhexchrate', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhWghtTot', 'Oehhwghttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhWghtOride', 'Oehhwghtoride', 'CHAR', true, null, 'N');
        $this->addColumn('OehhCcInfo', 'Oehhccinfo', 'CHAR', true, null, 'B');
        $this->addColumn('OehhBoxCount', 'Oehhboxcount', 'INTEGER', true, 5, 0);
        $this->addColumn('OehhRqstDate', 'Oehhrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhCancDate', 'Oehhcancdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhCrntUser', 'Oehhcrntuser', 'VARCHAR', true, 12, '');
        $this->addColumn('OehhReleaseNbr', 'Oehhreleasenbr', 'VARCHAR', true, 20, '');
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('OehhBordBuildDate', 'Oehhbordbuilddate', 'CHAR', true, 8, '');
        $this->addColumn('OehhDeptCode', 'Oehhdeptcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhFrtInEntered', 'Oehhfrtinentered', 'CHAR', true, null, 'N');
        $this->addColumn('OehhDropShipEntered', 'Oehhdropshipentered', 'CHAR', true, null, 'N');
        $this->addColumn('OehhErFlag', 'Oehherflag', 'CHAR', true, null, 'N');
        $this->addColumn('OehhFrtIn', 'Oehhfrtin', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDropShip', 'Oehhdropship', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhMinOrder', 'Oehhminorder', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhContractTerms', 'Oehhcontractterms', 'CHAR', true, null, 'N');
        $this->addColumn('OehhDropShipBilled', 'Oehhdropshipbilled', 'CHAR', true, null, 'N');
        $this->addColumn('OehhOrdTyp', 'Oehhordtyp', 'CHAR', true, null, 'N');
        $this->addColumn('OehhTrackNbr', 'Oehhtracknbr', 'VARCHAR', true, 15, '');
        $this->addColumn('OehhSource', 'Oehhsource', 'CHAR', true, null, '');
        $this->addColumn('OehhCcAprv', 'Oehhccaprv', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhPickFmatType', 'Oehhpickfmattype', 'CHAR', true, null, '');
        $this->addColumn('OehhInvcFmatType', 'Oehhinvcfmattype', 'CHAR', true, null, '');
        $this->addColumn('OehhCashAmt', 'Oehhcashamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhCheckAmt', 'Oehhcheckamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhCheckNbr', 'Oehhchecknbr', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhDepositAmt', 'Oehhdepositamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDepositNbr', 'Oehhdepositnbr', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhCcAmt', 'Oehhccamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhOTaxSub', 'Oehhotaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhONonTaxSub', 'Oehhonontaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhOTaxTot', 'Oehhotaxtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhOOrdrTot', 'Oehhoordrtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhPickPrintDate', 'Oehhpickprintdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhPickPrintTime', 'Oehhpickprinttime', 'CHAR', true, 4, '');
        $this->addColumn('OehhCont', 'Oehhcont', 'VARCHAR', true, 20, '');
        $this->addColumn('OehhContTeleIntl', 'Oehhcontteleintl', 'CHAR', true, null, 'N');
        $this->addColumn('OehhContTeleNbr', 'Oehhconttelenbr', 'VARCHAR', true, 22, '');
        $this->addColumn('OehhContTeleExt', 'Oehhcontteleext', 'VARCHAR', true, 7, '');
        $this->addColumn('OehhContFaxIntl', 'Oehhcontfaxintl', 'CHAR', true, null, 'N');
        $this->addColumn('OehhContFaxNbr', 'Oehhcontfaxnbr', 'VARCHAR', true, 22, '');
        $this->addColumn('OehhShipAcct', 'Oehhshipacct', 'VARCHAR', true, 10, '');
        $this->addColumn('OehhChgDue', 'Oehhchgdue', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhAddlPricDisc', 'Oehhaddlpricdisc', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhAllShip', 'Oehhallship', 'VARCHAR', true, 2, '');
        $this->addColumn('OehhQtyOrderAmt', 'Oehhqtyorderamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhCreditApplied', 'Oehhcreditapplied', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhInvcPrintDate', 'Oehhinvcprintdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhInvcPrintTime', 'Oehhinvcprinttime', 'CHAR', true, 4, '');
        $this->addColumn('OehhDiscFrt', 'Oehhdiscfrt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhOrideShipComp', 'Oehhorideshipcomp', 'CHAR', true, null, 'N');
        $this->addColumn('OehhContEmail', 'Oehhcontemail', 'VARCHAR', true, 50, '');
        $this->addColumn('OehhManualFrt', 'Oehhmanualfrt', 'CHAR', true, null, 'N');
        $this->addColumn('OehhInternalFrt', 'Oehhinternalfrt', 'CHAR', true, null, 'N');
        $this->addColumn('OehhFrtCost', 'Oehhfrtcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhRoute', 'Oehhroute', 'VARCHAR', true, 4, '');
        $this->addColumn('OehhRouteSeq', 'Oehhrouteseq', 'INTEGER', true, 4, 0);
        $this->addColumn('OehhEdi855Sent', 'Oehhedi855sent', 'CHAR', true, null, '');
        $this->addColumn('OehhFrt3rdParty', 'Oehhfrt3rdparty', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFob', 'Oehhfob', 'VARCHAR', true, 15, '');
        $this->addColumn('OehhConfirmImagYn', 'Oehhconfirmimagyn', 'CHAR', true, null, 'N');
        $this->addColumn('OehhIndustConform', 'Oehhindustconform', 'CHAR', true, null, '');
        $this->addColumn('OehhCstkConsign', 'Oehhcstkconsign', 'CHAR', true, null, '');
        $this->addColumn('OehhLmDelayCapSent', 'Oehhlmdelaycapsent', 'CHAR', true, null, '');
        $this->addColumn('OehhMfgId', 'Oehhmfgid', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhStoreId', 'Oehhstoreid', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhPickQueue', 'Oehhpickqueue', 'CHAR', true, null, 'N');
        $this->addColumn('OehhArrvDate', 'Oehharrvdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhSurchgStat', 'Oehhsurchgstat', 'CHAR', true, null, 'C');
        $this->addColumn('OehhFrtGrup', 'Oehhfrtgrup', 'VARCHAR', true, 2, '');
        $this->addColumn('OehhCommOride', 'Oehhcommoride', 'CHAR', true, null, '');
        $this->addColumn('OehhChrgSplt', 'Oehhchrgsplt', 'CHAR', true, null, '');
        $this->addColumn('OehhAcCcAprv', 'Oehhacccaprv', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhOrigOrdrNbr', 'Oehhorigordrnbr', 'CHAR', true, 10, '');
        $this->addColumn('OehhPostDate', 'Oehhpostdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscDate1', 'Oehhdiscdate1', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct1', 'Oehhdiscpct1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDueDate1', 'Oehhduedate1', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt1', 'Oehhdueamt1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDuePct1', 'Oehhduepct1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDiscDate2', 'Oehhdiscdate2', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct2', 'Oehhdiscpct2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDueDate2', 'Oehhduedate2', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt2', 'Oehhdueamt2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDuePct2', 'Oehhduepct2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDiscDate3', 'Oehhdiscdate3', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct3', 'Oehhdiscpct3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDueDate3', 'Oehhduedate3', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt3', 'Oehhdueamt3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDuePct3', 'Oehhduepct3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDiscDate4', 'Oehhdiscdate4', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct4', 'Oehhdiscpct4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDueDate4', 'Oehhduedate4', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt4', 'Oehhdueamt4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDuePct4', 'Oehhduepct4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDiscDate5', 'Oehhdiscdate5', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct5', 'Oehhdiscpct5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDueDate5', 'Oehhduedate5', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt5', 'Oehhdueamt5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDuePct5', 'Oehhduepct5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDiscDate6', 'Oehhdiscdate6', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct6', 'Oehhdiscpct6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDueDate6', 'Oehhduedate6', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt6', 'Oehhdueamt6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhDuePct6', 'Oehhduepct6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhRefNbr', 'Oehhrefnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('OehhFrtTaxCode1', 'Oehhfrttaxcode1', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt1', 'Oehhfrttaxamt1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode2', 'Oehhfrttaxcode2', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt2', 'Oehhfrttaxamt2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode3', 'Oehhfrttaxcode3', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt3', 'Oehhfrttaxamt3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode4', 'Oehhfrttaxcode4', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt4', 'Oehhfrttaxamt4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode5', 'Oehhfrttaxcode5', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt5', 'Oehhfrttaxamt5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode6', 'Oehhfrttaxcode6', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt6', 'Oehhfrttaxamt6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode7', 'Oehhfrttaxcode7', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt7', 'Oehhfrttaxamt7', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode8', 'Oehhfrttaxcode8', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt8', 'Oehhfrttaxamt8', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhFrtTaxCode9', 'Oehhfrttaxcode9', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt9', 'Oehhfrttaxamt9', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehhAcProgNbr', 'Oehhacprognbr', 'VARCHAR', true, 16, '');
        $this->addColumn('OehhAcProgExpDate', 'Oehhacprogexpdate', 'VARCHAR', true, 6, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('CustomerShipto', '\\CustomerShipto', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
  1 =>
  array (
    0 => ':ArstShipId',
    1 => ':ArstShipId',
  ),
), null, null, null, false);
        $this->addRelation('SalesHistoryDetail', '\\SalesHistoryDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehhNbr',
    1 => ':OehhNbr',
  ),
), null, null, 'SalesHistoryDetails', false);
        $this->addRelation('SalesOrderShipment', '\\SalesOrderShipment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehshNbr',
    1 => ':OehhNbr',
  ),
), null, null, 'SalesOrderShipments', false);
        $this->addRelation('SalesHistoryLotserial', '\\SalesHistoryLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehhNbr',
    1 => ':OehhNbr',
  ),
), null, null, 'SalesHistoryLotserials', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesHistoryTableMap::CLASS_DEFAULT : SalesHistoryTableMap::OM_CLASS;
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
     * @return array           (SalesHistory object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesHistoryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesHistoryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesHistoryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesHistoryTableMap::OM_CLASS;
            /** @var SalesHistory $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesHistoryTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesHistoryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesHistoryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesHistory $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesHistoryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHYEAR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTAT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHHOLD);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTNAME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTLASTNAME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTADR1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTADR2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTADR3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTCTRY);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTCITY);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTSTAT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTZIPCODE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCUSTPO);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHORDRDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARININVNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHINVDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHGLPD);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSP1PCT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSP2PCT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSP3PCT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCNTRNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHWIBATCH);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDROPRELHOLD);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTAXSUB);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHNONTAXSUB);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTAXTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHMISCTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHORDRTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCOSTTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTAKENDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTAKENTIME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKTIME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPACKDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPACKTIME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHVERIFYDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHVERIFYTIME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCREDITMEMO);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHBOOKEDYN);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_INTBWHSEORIG);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHBTSTAT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSHIPCOMP);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCWOFLAG);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDIVISION);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTAKENCODE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKCODE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPACKCODE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHVERIFYCODE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTOTDISC);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHEXCHCTRY);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHEXCHRATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHWGHTTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHWGHTORIDE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCCINFO);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHBOXCOUNT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHRQSTDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCANCDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCRNTUSER);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHRELEASENBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDEPTCODE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTINENTERED);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHERFLAG);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTIN);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDROPSHIP);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHMINORDER);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHORDTYP);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHTRACKNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSOURCE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCCAPRV);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCASHAMT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCHECKAMT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCHECKNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDEPOSITAMT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDEPOSITNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCCAMT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHOTAXSUB);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHONONTAXSUB);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHOTAXTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHOORDRTOT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTTELEINTL);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTTELENBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTTELEEXT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTFAXINTL);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTFAXNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSHIPACCT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCHGDUE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHADDLPRICDISC);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHALLSHIP);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHQTYORDERAMT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCFRT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONTEMAIL);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHMANUALFRT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHINTERNALFRT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTCOST);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHROUTE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHROUTESEQ);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHEDI855SENT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFOB);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHMFGID);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSTOREID);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPICKQUEUE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHARRVDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHSURCHGSTAT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTGRUP);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCOMMORIDE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHCHRGSPLT);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHACCCAPRV);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHORIGORDRNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHPOSTDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHREFNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT6);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE7);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT7);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE8);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT8);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE9);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT9);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHACPROGNBR);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesHistoryTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehhNbr');
            $criteria->addSelectColumn($alias . '.OehhYear');
            $criteria->addSelectColumn($alias . '.OehhStat');
            $criteria->addSelectColumn($alias . '.OehhHold');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.OehhStName');
            $criteria->addSelectColumn($alias . '.OehhStLastName');
            $criteria->addSelectColumn($alias . '.OehhStFirstName');
            $criteria->addSelectColumn($alias . '.OehhStAdr1');
            $criteria->addSelectColumn($alias . '.OehhStAdr2');
            $criteria->addSelectColumn($alias . '.OehhStAdr3');
            $criteria->addSelectColumn($alias . '.OehhStCtry');
            $criteria->addSelectColumn($alias . '.OehhStCity');
            $criteria->addSelectColumn($alias . '.OehhStStat');
            $criteria->addSelectColumn($alias . '.OehhStZipCode');
            $criteria->addSelectColumn($alias . '.OehhCustPo');
            $criteria->addSelectColumn($alias . '.OehhOrdrDate');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArinInvNbr');
            $criteria->addSelectColumn($alias . '.OehhInvDate');
            $criteria->addSelectColumn($alias . '.OehhGLPd');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.OehhSp1Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.OehhSp2Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.OehhSp3Pct');
            $criteria->addSelectColumn($alias . '.OehhCntrNbr');
            $criteria->addSelectColumn($alias . '.OehhWiBatch');
            $criteria->addSelectColumn($alias . '.OehhDropRelHold');
            $criteria->addSelectColumn($alias . '.OehhTaxSub');
            $criteria->addSelectColumn($alias . '.OehhNonTaxSub');
            $criteria->addSelectColumn($alias . '.OehhTaxTot');
            $criteria->addSelectColumn($alias . '.OehhFrtTot');
            $criteria->addSelectColumn($alias . '.OehhMiscTot');
            $criteria->addSelectColumn($alias . '.OehhOrdrTot');
            $criteria->addSelectColumn($alias . '.OehhCostTot');
            $criteria->addSelectColumn($alias . '.OehhSpCommLock');
            $criteria->addSelectColumn($alias . '.OehhTakenDate');
            $criteria->addSelectColumn($alias . '.OehhTakenTime');
            $criteria->addSelectColumn($alias . '.OehhPickDate');
            $criteria->addSelectColumn($alias . '.OehhPickTime');
            $criteria->addSelectColumn($alias . '.OehhPackDate');
            $criteria->addSelectColumn($alias . '.OehhPackTime');
            $criteria->addSelectColumn($alias . '.OehhVerifyDate');
            $criteria->addSelectColumn($alias . '.OehhVerifyTime');
            $criteria->addSelectColumn($alias . '.OehhCreditMemo');
            $criteria->addSelectColumn($alias . '.OehhBookedYn');
            $criteria->addSelectColumn($alias . '.IntbWhseOrig');
            $criteria->addSelectColumn($alias . '.OehhBtStat');
            $criteria->addSelectColumn($alias . '.OehhShipComp');
            $criteria->addSelectColumn($alias . '.OehhCwoFlag');
            $criteria->addSelectColumn($alias . '.OehhDivision');
            $criteria->addSelectColumn($alias . '.OehhTakenCode');
            $criteria->addSelectColumn($alias . '.OehhPickCode');
            $criteria->addSelectColumn($alias . '.OehhPackCode');
            $criteria->addSelectColumn($alias . '.OehhVerifyCode');
            $criteria->addSelectColumn($alias . '.OehhTotDisc');
            $criteria->addSelectColumn($alias . '.OehhEdiRefNbrQual');
            $criteria->addSelectColumn($alias . '.OehhUserCode1');
            $criteria->addSelectColumn($alias . '.OehhUserCode2');
            $criteria->addSelectColumn($alias . '.OehhUserCode3');
            $criteria->addSelectColumn($alias . '.OehhUserCode4');
            $criteria->addSelectColumn($alias . '.OehhExchCtry');
            $criteria->addSelectColumn($alias . '.OehhExchRate');
            $criteria->addSelectColumn($alias . '.OehhWghtTot');
            $criteria->addSelectColumn($alias . '.OehhWghtOride');
            $criteria->addSelectColumn($alias . '.OehhCcInfo');
            $criteria->addSelectColumn($alias . '.OehhBoxCount');
            $criteria->addSelectColumn($alias . '.OehhRqstDate');
            $criteria->addSelectColumn($alias . '.OehhCancDate');
            $criteria->addSelectColumn($alias . '.OehhCrntUser');
            $criteria->addSelectColumn($alias . '.OehhReleaseNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.OehhBordBuildDate');
            $criteria->addSelectColumn($alias . '.OehhDeptCode');
            $criteria->addSelectColumn($alias . '.OehhFrtInEntered');
            $criteria->addSelectColumn($alias . '.OehhDropShipEntered');
            $criteria->addSelectColumn($alias . '.OehhErFlag');
            $criteria->addSelectColumn($alias . '.OehhFrtIn');
            $criteria->addSelectColumn($alias . '.OehhDropShip');
            $criteria->addSelectColumn($alias . '.OehhMinOrder');
            $criteria->addSelectColumn($alias . '.OehhContractTerms');
            $criteria->addSelectColumn($alias . '.OehhDropShipBilled');
            $criteria->addSelectColumn($alias . '.OehhOrdTyp');
            $criteria->addSelectColumn($alias . '.OehhTrackNbr');
            $criteria->addSelectColumn($alias . '.OehhSource');
            $criteria->addSelectColumn($alias . '.OehhCcAprv');
            $criteria->addSelectColumn($alias . '.OehhPickFmatType');
            $criteria->addSelectColumn($alias . '.OehhInvcFmatType');
            $criteria->addSelectColumn($alias . '.OehhCashAmt');
            $criteria->addSelectColumn($alias . '.OehhCheckAmt');
            $criteria->addSelectColumn($alias . '.OehhCheckNbr');
            $criteria->addSelectColumn($alias . '.OehhDepositAmt');
            $criteria->addSelectColumn($alias . '.OehhDepositNbr');
            $criteria->addSelectColumn($alias . '.OehhCcAmt');
            $criteria->addSelectColumn($alias . '.OehhOTaxSub');
            $criteria->addSelectColumn($alias . '.OehhONonTaxSub');
            $criteria->addSelectColumn($alias . '.OehhOTaxTot');
            $criteria->addSelectColumn($alias . '.OehhOOrdrTot');
            $criteria->addSelectColumn($alias . '.OehhPickPrintDate');
            $criteria->addSelectColumn($alias . '.OehhPickPrintTime');
            $criteria->addSelectColumn($alias . '.OehhCont');
            $criteria->addSelectColumn($alias . '.OehhContTeleIntl');
            $criteria->addSelectColumn($alias . '.OehhContTeleNbr');
            $criteria->addSelectColumn($alias . '.OehhContTeleExt');
            $criteria->addSelectColumn($alias . '.OehhContFaxIntl');
            $criteria->addSelectColumn($alias . '.OehhContFaxNbr');
            $criteria->addSelectColumn($alias . '.OehhShipAcct');
            $criteria->addSelectColumn($alias . '.OehhChgDue');
            $criteria->addSelectColumn($alias . '.OehhAddlPricDisc');
            $criteria->addSelectColumn($alias . '.OehhAllShip');
            $criteria->addSelectColumn($alias . '.OehhQtyOrderAmt');
            $criteria->addSelectColumn($alias . '.OehhCreditApplied');
            $criteria->addSelectColumn($alias . '.OehhInvcPrintDate');
            $criteria->addSelectColumn($alias . '.OehhInvcPrintTime');
            $criteria->addSelectColumn($alias . '.OehhDiscFrt');
            $criteria->addSelectColumn($alias . '.OehhOrideShipComp');
            $criteria->addSelectColumn($alias . '.OehhContEmail');
            $criteria->addSelectColumn($alias . '.OehhManualFrt');
            $criteria->addSelectColumn($alias . '.OehhInternalFrt');
            $criteria->addSelectColumn($alias . '.OehhFrtCost');
            $criteria->addSelectColumn($alias . '.OehhRoute');
            $criteria->addSelectColumn($alias . '.OehhRouteSeq');
            $criteria->addSelectColumn($alias . '.OehhEdi855Sent');
            $criteria->addSelectColumn($alias . '.OehhFrt3rdParty');
            $criteria->addSelectColumn($alias . '.OehhFob');
            $criteria->addSelectColumn($alias . '.OehhConfirmImagYn');
            $criteria->addSelectColumn($alias . '.OehhIndustConform');
            $criteria->addSelectColumn($alias . '.OehhCstkConsign');
            $criteria->addSelectColumn($alias . '.OehhLmDelayCapSent');
            $criteria->addSelectColumn($alias . '.OehhMfgId');
            $criteria->addSelectColumn($alias . '.OehhStoreId');
            $criteria->addSelectColumn($alias . '.OehhPickQueue');
            $criteria->addSelectColumn($alias . '.OehhArrvDate');
            $criteria->addSelectColumn($alias . '.OehhSurchgStat');
            $criteria->addSelectColumn($alias . '.OehhFrtGrup');
            $criteria->addSelectColumn($alias . '.OehhCommOride');
            $criteria->addSelectColumn($alias . '.OehhChrgSplt');
            $criteria->addSelectColumn($alias . '.OehhAcCcAprv');
            $criteria->addSelectColumn($alias . '.OehhOrigOrdrNbr');
            $criteria->addSelectColumn($alias . '.OehhPostDate');
            $criteria->addSelectColumn($alias . '.OehhDiscDate1');
            $criteria->addSelectColumn($alias . '.OehhDiscPct1');
            $criteria->addSelectColumn($alias . '.OehhDueDate1');
            $criteria->addSelectColumn($alias . '.OehhDueAmt1');
            $criteria->addSelectColumn($alias . '.OehhDuePct1');
            $criteria->addSelectColumn($alias . '.OehhDiscDate2');
            $criteria->addSelectColumn($alias . '.OehhDiscPct2');
            $criteria->addSelectColumn($alias . '.OehhDueDate2');
            $criteria->addSelectColumn($alias . '.OehhDueAmt2');
            $criteria->addSelectColumn($alias . '.OehhDuePct2');
            $criteria->addSelectColumn($alias . '.OehhDiscDate3');
            $criteria->addSelectColumn($alias . '.OehhDiscPct3');
            $criteria->addSelectColumn($alias . '.OehhDueDate3');
            $criteria->addSelectColumn($alias . '.OehhDueAmt3');
            $criteria->addSelectColumn($alias . '.OehhDuePct3');
            $criteria->addSelectColumn($alias . '.OehhDiscDate4');
            $criteria->addSelectColumn($alias . '.OehhDiscPct4');
            $criteria->addSelectColumn($alias . '.OehhDueDate4');
            $criteria->addSelectColumn($alias . '.OehhDueAmt4');
            $criteria->addSelectColumn($alias . '.OehhDuePct4');
            $criteria->addSelectColumn($alias . '.OehhDiscDate5');
            $criteria->addSelectColumn($alias . '.OehhDiscPct5');
            $criteria->addSelectColumn($alias . '.OehhDueDate5');
            $criteria->addSelectColumn($alias . '.OehhDueAmt5');
            $criteria->addSelectColumn($alias . '.OehhDuePct5');
            $criteria->addSelectColumn($alias . '.OehhDiscDate6');
            $criteria->addSelectColumn($alias . '.OehhDiscPct6');
            $criteria->addSelectColumn($alias . '.OehhDueDate6');
            $criteria->addSelectColumn($alias . '.OehhDueAmt6');
            $criteria->addSelectColumn($alias . '.OehhDuePct6');
            $criteria->addSelectColumn($alias . '.OehhRefNbr');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode1');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt1');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode2');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt2');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode3');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt3');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode4');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt4');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode5');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt5');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode6');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt6');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode7');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt7');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode8');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt8');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxCode9');
            $criteria->addSelectColumn($alias . '.OehhFrtTaxAmt9');
            $criteria->addSelectColumn($alias . '.OehhAcProgNbr');
            $criteria->addSelectColumn($alias . '.OehhAcProgExpDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesHistoryTableMap::DATABASE_NAME)->getTable(SalesHistoryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesHistoryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesHistoryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesHistoryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesHistory or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesHistory object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesHistory) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesHistoryTableMap::DATABASE_NAME);
            $criteria->add(SalesHistoryTableMap::COL_OEHHNBR, (array) $values, Criteria::IN);
        }

        $query = SalesHistoryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesHistoryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesHistoryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_head_hist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesHistoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesHistory or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesHistory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesHistory object
        }


        // Set the correct dbName
        $query = SalesHistoryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesHistoryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesHistoryTableMap::buildTableMap();
