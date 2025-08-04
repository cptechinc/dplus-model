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
 */
class SalesHistoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.SalesHistoryTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_head_hist';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SalesHistory';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\SalesHistory';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'SalesHistory';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 190;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 190;

    /**
     * the column name for the OehhNbr field
     */
    public const COL_OEHHNBR = 'so_head_hist.OehhNbr';

    /**
     * the column name for the OehhYear field
     */
    public const COL_OEHHYEAR = 'so_head_hist.OehhYear';

    /**
     * the column name for the OehhStat field
     */
    public const COL_OEHHSTAT = 'so_head_hist.OehhStat';

    /**
     * the column name for the OehhHold field
     */
    public const COL_OEHHHOLD = 'so_head_hist.OehhHold';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'so_head_hist.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    public const COL_ARSTSHIPID = 'so_head_hist.ArstShipId';

    /**
     * the column name for the OehhStName field
     */
    public const COL_OEHHSTNAME = 'so_head_hist.OehhStName';

    /**
     * the column name for the OehhStLastName field
     */
    public const COL_OEHHSTLASTNAME = 'so_head_hist.OehhStLastName';

    /**
     * the column name for the OehhStFirstName field
     */
    public const COL_OEHHSTFIRSTNAME = 'so_head_hist.OehhStFirstName';

    /**
     * the column name for the OehhStAdr1 field
     */
    public const COL_OEHHSTADR1 = 'so_head_hist.OehhStAdr1';

    /**
     * the column name for the OehhStAdr2 field
     */
    public const COL_OEHHSTADR2 = 'so_head_hist.OehhStAdr2';

    /**
     * the column name for the OehhStAdr3 field
     */
    public const COL_OEHHSTADR3 = 'so_head_hist.OehhStAdr3';

    /**
     * the column name for the OehhStCtry field
     */
    public const COL_OEHHSTCTRY = 'so_head_hist.OehhStCtry';

    /**
     * the column name for the OehhStCity field
     */
    public const COL_OEHHSTCITY = 'so_head_hist.OehhStCity';

    /**
     * the column name for the OehhStStat field
     */
    public const COL_OEHHSTSTAT = 'so_head_hist.OehhStStat';

    /**
     * the column name for the OehhStZipCode field
     */
    public const COL_OEHHSTZIPCODE = 'so_head_hist.OehhStZipCode';

    /**
     * the column name for the OehhCustPo field
     */
    public const COL_OEHHCUSTPO = 'so_head_hist.OehhCustPo';

    /**
     * the column name for the OehhOrdrDate field
     */
    public const COL_OEHHORDRDATE = 'so_head_hist.OehhOrdrDate';

    /**
     * the column name for the ArtmTermCd field
     */
    public const COL_ARTMTERMCD = 'so_head_hist.ArtmTermCd';

    /**
     * the column name for the ArtbShipVia field
     */
    public const COL_ARTBSHIPVIA = 'so_head_hist.ArtbShipVia';

    /**
     * the column name for the ArinInvNbr field
     */
    public const COL_ARININVNBR = 'so_head_hist.ArinInvNbr';

    /**
     * the column name for the OehhInvDate field
     */
    public const COL_OEHHINVDATE = 'so_head_hist.OehhInvDate';

    /**
     * the column name for the OehhGLPd field
     */
    public const COL_OEHHGLPD = 'so_head_hist.OehhGLPd';

    /**
     * the column name for the ArspSalePer1 field
     */
    public const COL_ARSPSALEPER1 = 'so_head_hist.ArspSalePer1';

    /**
     * the column name for the OehhSp1Pct field
     */
    public const COL_OEHHSP1PCT = 'so_head_hist.OehhSp1Pct';

    /**
     * the column name for the ArspSalePer2 field
     */
    public const COL_ARSPSALEPER2 = 'so_head_hist.ArspSalePer2';

    /**
     * the column name for the OehhSp2Pct field
     */
    public const COL_OEHHSP2PCT = 'so_head_hist.OehhSp2Pct';

    /**
     * the column name for the ArspSalePer3 field
     */
    public const COL_ARSPSALEPER3 = 'so_head_hist.ArspSalePer3';

    /**
     * the column name for the OehhSp3Pct field
     */
    public const COL_OEHHSP3PCT = 'so_head_hist.OehhSp3Pct';

    /**
     * the column name for the OehhCntrNbr field
     */
    public const COL_OEHHCNTRNBR = 'so_head_hist.OehhCntrNbr';

    /**
     * the column name for the OehhWiBatch field
     */
    public const COL_OEHHWIBATCH = 'so_head_hist.OehhWiBatch';

    /**
     * the column name for the OehhDropRelHold field
     */
    public const COL_OEHHDROPRELHOLD = 'so_head_hist.OehhDropRelHold';

    /**
     * the column name for the OehhTaxSub field
     */
    public const COL_OEHHTAXSUB = 'so_head_hist.OehhTaxSub';

    /**
     * the column name for the OehhNonTaxSub field
     */
    public const COL_OEHHNONTAXSUB = 'so_head_hist.OehhNonTaxSub';

    /**
     * the column name for the OehhTaxTot field
     */
    public const COL_OEHHTAXTOT = 'so_head_hist.OehhTaxTot';

    /**
     * the column name for the OehhFrtTot field
     */
    public const COL_OEHHFRTTOT = 'so_head_hist.OehhFrtTot';

    /**
     * the column name for the OehhMiscTot field
     */
    public const COL_OEHHMISCTOT = 'so_head_hist.OehhMiscTot';

    /**
     * the column name for the OehhOrdrTot field
     */
    public const COL_OEHHORDRTOT = 'so_head_hist.OehhOrdrTot';

    /**
     * the column name for the OehhCostTot field
     */
    public const COL_OEHHCOSTTOT = 'so_head_hist.OehhCostTot';

    /**
     * the column name for the OehhSpCommLock field
     */
    public const COL_OEHHSPCOMMLOCK = 'so_head_hist.OehhSpCommLock';

    /**
     * the column name for the OehhTakenDate field
     */
    public const COL_OEHHTAKENDATE = 'so_head_hist.OehhTakenDate';

    /**
     * the column name for the OehhTakenTime field
     */
    public const COL_OEHHTAKENTIME = 'so_head_hist.OehhTakenTime';

    /**
     * the column name for the OehhPickDate field
     */
    public const COL_OEHHPICKDATE = 'so_head_hist.OehhPickDate';

    /**
     * the column name for the OehhPickTime field
     */
    public const COL_OEHHPICKTIME = 'so_head_hist.OehhPickTime';

    /**
     * the column name for the OehhPackDate field
     */
    public const COL_OEHHPACKDATE = 'so_head_hist.OehhPackDate';

    /**
     * the column name for the OehhPackTime field
     */
    public const COL_OEHHPACKTIME = 'so_head_hist.OehhPackTime';

    /**
     * the column name for the OehhVerifyDate field
     */
    public const COL_OEHHVERIFYDATE = 'so_head_hist.OehhVerifyDate';

    /**
     * the column name for the OehhVerifyTime field
     */
    public const COL_OEHHVERIFYTIME = 'so_head_hist.OehhVerifyTime';

    /**
     * the column name for the OehhCreditMemo field
     */
    public const COL_OEHHCREDITMEMO = 'so_head_hist.OehhCreditMemo';

    /**
     * the column name for the OehhBookedYn field
     */
    public const COL_OEHHBOOKEDYN = 'so_head_hist.OehhBookedYn';

    /**
     * the column name for the IntbWhseOrig field
     */
    public const COL_INTBWHSEORIG = 'so_head_hist.IntbWhseOrig';

    /**
     * the column name for the OehhBtStat field
     */
    public const COL_OEHHBTSTAT = 'so_head_hist.OehhBtStat';

    /**
     * the column name for the OehhShipComp field
     */
    public const COL_OEHHSHIPCOMP = 'so_head_hist.OehhShipComp';

    /**
     * the column name for the OehhCwoFlag field
     */
    public const COL_OEHHCWOFLAG = 'so_head_hist.OehhCwoFlag';

    /**
     * the column name for the OehhDivision field
     */
    public const COL_OEHHDIVISION = 'so_head_hist.OehhDivision';

    /**
     * the column name for the OehhTakenCode field
     */
    public const COL_OEHHTAKENCODE = 'so_head_hist.OehhTakenCode';

    /**
     * the column name for the OehhPickCode field
     */
    public const COL_OEHHPICKCODE = 'so_head_hist.OehhPickCode';

    /**
     * the column name for the OehhPackCode field
     */
    public const COL_OEHHPACKCODE = 'so_head_hist.OehhPackCode';

    /**
     * the column name for the OehhVerifyCode field
     */
    public const COL_OEHHVERIFYCODE = 'so_head_hist.OehhVerifyCode';

    /**
     * the column name for the OehhTotDisc field
     */
    public const COL_OEHHTOTDISC = 'so_head_hist.OehhTotDisc';

    /**
     * the column name for the OehhEdiRefNbrQual field
     */
    public const COL_OEHHEDIREFNBRQUAL = 'so_head_hist.OehhEdiRefNbrQual';

    /**
     * the column name for the OehhUserCode1 field
     */
    public const COL_OEHHUSERCODE1 = 'so_head_hist.OehhUserCode1';

    /**
     * the column name for the OehhUserCode2 field
     */
    public const COL_OEHHUSERCODE2 = 'so_head_hist.OehhUserCode2';

    /**
     * the column name for the OehhUserCode3 field
     */
    public const COL_OEHHUSERCODE3 = 'so_head_hist.OehhUserCode3';

    /**
     * the column name for the OehhUserCode4 field
     */
    public const COL_OEHHUSERCODE4 = 'so_head_hist.OehhUserCode4';

    /**
     * the column name for the OehhExchCtry field
     */
    public const COL_OEHHEXCHCTRY = 'so_head_hist.OehhExchCtry';

    /**
     * the column name for the OehhExchRate field
     */
    public const COL_OEHHEXCHRATE = 'so_head_hist.OehhExchRate';

    /**
     * the column name for the OehhWghtTot field
     */
    public const COL_OEHHWGHTTOT = 'so_head_hist.OehhWghtTot';

    /**
     * the column name for the OehhWghtOride field
     */
    public const COL_OEHHWGHTORIDE = 'so_head_hist.OehhWghtOride';

    /**
     * the column name for the OehhCcInfo field
     */
    public const COL_OEHHCCINFO = 'so_head_hist.OehhCcInfo';

    /**
     * the column name for the OehhBoxCount field
     */
    public const COL_OEHHBOXCOUNT = 'so_head_hist.OehhBoxCount';

    /**
     * the column name for the OehhRqstDate field
     */
    public const COL_OEHHRQSTDATE = 'so_head_hist.OehhRqstDate';

    /**
     * the column name for the OehhCancDate field
     */
    public const COL_OEHHCANCDATE = 'so_head_hist.OehhCancDate';

    /**
     * the column name for the OehhCrntUser field
     */
    public const COL_OEHHCRNTUSER = 'so_head_hist.OehhCrntUser';

    /**
     * the column name for the OehhReleaseNbr field
     */
    public const COL_OEHHRELEASENBR = 'so_head_hist.OehhReleaseNbr';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'so_head_hist.IntbWhse';

    /**
     * the column name for the OehhBordBuildDate field
     */
    public const COL_OEHHBORDBUILDDATE = 'so_head_hist.OehhBordBuildDate';

    /**
     * the column name for the OehhDeptCode field
     */
    public const COL_OEHHDEPTCODE = 'so_head_hist.OehhDeptCode';

    /**
     * the column name for the OehhFrtInEntered field
     */
    public const COL_OEHHFRTINENTERED = 'so_head_hist.OehhFrtInEntered';

    /**
     * the column name for the OehhDropShipEntered field
     */
    public const COL_OEHHDROPSHIPENTERED = 'so_head_hist.OehhDropShipEntered';

    /**
     * the column name for the OehhErFlag field
     */
    public const COL_OEHHERFLAG = 'so_head_hist.OehhErFlag';

    /**
     * the column name for the OehhFrtIn field
     */
    public const COL_OEHHFRTIN = 'so_head_hist.OehhFrtIn';

    /**
     * the column name for the OehhDropShip field
     */
    public const COL_OEHHDROPSHIP = 'so_head_hist.OehhDropShip';

    /**
     * the column name for the OehhMinOrder field
     */
    public const COL_OEHHMINORDER = 'so_head_hist.OehhMinOrder';

    /**
     * the column name for the OehhContractTerms field
     */
    public const COL_OEHHCONTRACTTERMS = 'so_head_hist.OehhContractTerms';

    /**
     * the column name for the OehhDropShipBilled field
     */
    public const COL_OEHHDROPSHIPBILLED = 'so_head_hist.OehhDropShipBilled';

    /**
     * the column name for the OehhOrdTyp field
     */
    public const COL_OEHHORDTYP = 'so_head_hist.OehhOrdTyp';

    /**
     * the column name for the OehhTrackNbr field
     */
    public const COL_OEHHTRACKNBR = 'so_head_hist.OehhTrackNbr';

    /**
     * the column name for the OehhSource field
     */
    public const COL_OEHHSOURCE = 'so_head_hist.OehhSource';

    /**
     * the column name for the OehhCcAprv field
     */
    public const COL_OEHHCCAPRV = 'so_head_hist.OehhCcAprv';

    /**
     * the column name for the OehhPickFmatType field
     */
    public const COL_OEHHPICKFMATTYPE = 'so_head_hist.OehhPickFmatType';

    /**
     * the column name for the OehhInvcFmatType field
     */
    public const COL_OEHHINVCFMATTYPE = 'so_head_hist.OehhInvcFmatType';

    /**
     * the column name for the OehhCashAmt field
     */
    public const COL_OEHHCASHAMT = 'so_head_hist.OehhCashAmt';

    /**
     * the column name for the OehhCheckAmt field
     */
    public const COL_OEHHCHECKAMT = 'so_head_hist.OehhCheckAmt';

    /**
     * the column name for the OehhCheckNbr field
     */
    public const COL_OEHHCHECKNBR = 'so_head_hist.OehhCheckNbr';

    /**
     * the column name for the OehhDepositAmt field
     */
    public const COL_OEHHDEPOSITAMT = 'so_head_hist.OehhDepositAmt';

    /**
     * the column name for the OehhDepositNbr field
     */
    public const COL_OEHHDEPOSITNBR = 'so_head_hist.OehhDepositNbr';

    /**
     * the column name for the OehhCcAmt field
     */
    public const COL_OEHHCCAMT = 'so_head_hist.OehhCcAmt';

    /**
     * the column name for the OehhOTaxSub field
     */
    public const COL_OEHHOTAXSUB = 'so_head_hist.OehhOTaxSub';

    /**
     * the column name for the OehhONonTaxSub field
     */
    public const COL_OEHHONONTAXSUB = 'so_head_hist.OehhONonTaxSub';

    /**
     * the column name for the OehhOTaxTot field
     */
    public const COL_OEHHOTAXTOT = 'so_head_hist.OehhOTaxTot';

    /**
     * the column name for the OehhOOrdrTot field
     */
    public const COL_OEHHOORDRTOT = 'so_head_hist.OehhOOrdrTot';

    /**
     * the column name for the OehhPickPrintDate field
     */
    public const COL_OEHHPICKPRINTDATE = 'so_head_hist.OehhPickPrintDate';

    /**
     * the column name for the OehhPickPrintTime field
     */
    public const COL_OEHHPICKPRINTTIME = 'so_head_hist.OehhPickPrintTime';

    /**
     * the column name for the OehhCont field
     */
    public const COL_OEHHCONT = 'so_head_hist.OehhCont';

    /**
     * the column name for the OehhContTeleIntl field
     */
    public const COL_OEHHCONTTELEINTL = 'so_head_hist.OehhContTeleIntl';

    /**
     * the column name for the OehhContTeleNbr field
     */
    public const COL_OEHHCONTTELENBR = 'so_head_hist.OehhContTeleNbr';

    /**
     * the column name for the OehhContTeleExt field
     */
    public const COL_OEHHCONTTELEEXT = 'so_head_hist.OehhContTeleExt';

    /**
     * the column name for the OehhContFaxIntl field
     */
    public const COL_OEHHCONTFAXINTL = 'so_head_hist.OehhContFaxIntl';

    /**
     * the column name for the OehhContFaxNbr field
     */
    public const COL_OEHHCONTFAXNBR = 'so_head_hist.OehhContFaxNbr';

    /**
     * the column name for the OehhShipAcct field
     */
    public const COL_OEHHSHIPACCT = 'so_head_hist.OehhShipAcct';

    /**
     * the column name for the OehhChgDue field
     */
    public const COL_OEHHCHGDUE = 'so_head_hist.OehhChgDue';

    /**
     * the column name for the OehhAddlPricDisc field
     */
    public const COL_OEHHADDLPRICDISC = 'so_head_hist.OehhAddlPricDisc';

    /**
     * the column name for the OehhAllShip field
     */
    public const COL_OEHHALLSHIP = 'so_head_hist.OehhAllShip';

    /**
     * the column name for the OehhQtyOrderAmt field
     */
    public const COL_OEHHQTYORDERAMT = 'so_head_hist.OehhQtyOrderAmt';

    /**
     * the column name for the OehhCreditApplied field
     */
    public const COL_OEHHCREDITAPPLIED = 'so_head_hist.OehhCreditApplied';

    /**
     * the column name for the OehhInvcPrintDate field
     */
    public const COL_OEHHINVCPRINTDATE = 'so_head_hist.OehhInvcPrintDate';

    /**
     * the column name for the OehhInvcPrintTime field
     */
    public const COL_OEHHINVCPRINTTIME = 'so_head_hist.OehhInvcPrintTime';

    /**
     * the column name for the OehhDiscFrt field
     */
    public const COL_OEHHDISCFRT = 'so_head_hist.OehhDiscFrt';

    /**
     * the column name for the OehhOrideShipComp field
     */
    public const COL_OEHHORIDESHIPCOMP = 'so_head_hist.OehhOrideShipComp';

    /**
     * the column name for the OehhContEmail field
     */
    public const COL_OEHHCONTEMAIL = 'so_head_hist.OehhContEmail';

    /**
     * the column name for the OehhManualFrt field
     */
    public const COL_OEHHMANUALFRT = 'so_head_hist.OehhManualFrt';

    /**
     * the column name for the OehhInternalFrt field
     */
    public const COL_OEHHINTERNALFRT = 'so_head_hist.OehhInternalFrt';

    /**
     * the column name for the OehhFrtCost field
     */
    public const COL_OEHHFRTCOST = 'so_head_hist.OehhFrtCost';

    /**
     * the column name for the OehhRoute field
     */
    public const COL_OEHHROUTE = 'so_head_hist.OehhRoute';

    /**
     * the column name for the OehhRouteSeq field
     */
    public const COL_OEHHROUTESEQ = 'so_head_hist.OehhRouteSeq';

    /**
     * the column name for the OehhFrtTaxCode1 field
     */
    public const COL_OEHHFRTTAXCODE1 = 'so_head_hist.OehhFrtTaxCode1';

    /**
     * the column name for the OehhFrtTaxAmt1 field
     */
    public const COL_OEHHFRTTAXAMT1 = 'so_head_hist.OehhFrtTaxAmt1';

    /**
     * the column name for the OehhFrtTaxCode2 field
     */
    public const COL_OEHHFRTTAXCODE2 = 'so_head_hist.OehhFrtTaxCode2';

    /**
     * the column name for the OehhFrtTaxAmt2 field
     */
    public const COL_OEHHFRTTAXAMT2 = 'so_head_hist.OehhFrtTaxAmt2';

    /**
     * the column name for the OehhFrtTaxCode3 field
     */
    public const COL_OEHHFRTTAXCODE3 = 'so_head_hist.OehhFrtTaxCode3';

    /**
     * the column name for the OehhFrtTaxAmt3 field
     */
    public const COL_OEHHFRTTAXAMT3 = 'so_head_hist.OehhFrtTaxAmt3';

    /**
     * the column name for the OehhFrtTaxCode4 field
     */
    public const COL_OEHHFRTTAXCODE4 = 'so_head_hist.OehhFrtTaxCode4';

    /**
     * the column name for the OehhFrtTaxAmt4 field
     */
    public const COL_OEHHFRTTAXAMT4 = 'so_head_hist.OehhFrtTaxAmt4';

    /**
     * the column name for the OehhFrtTaxCode5 field
     */
    public const COL_OEHHFRTTAXCODE5 = 'so_head_hist.OehhFrtTaxCode5';

    /**
     * the column name for the OehhFrtTaxAmt5 field
     */
    public const COL_OEHHFRTTAXAMT5 = 'so_head_hist.OehhFrtTaxAmt5';

    /**
     * the column name for the OehhEdi855Sent field
     */
    public const COL_OEHHEDI855SENT = 'so_head_hist.OehhEdi855Sent';

    /**
     * the column name for the OehhFrt3rdParty field
     */
    public const COL_OEHHFRT3RDPARTY = 'so_head_hist.OehhFrt3rdParty';

    /**
     * the column name for the OehhFob field
     */
    public const COL_OEHHFOB = 'so_head_hist.OehhFob';

    /**
     * the column name for the OehhConfirmImagYn field
     */
    public const COL_OEHHCONFIRMIMAGYN = 'so_head_hist.OehhConfirmImagYn';

    /**
     * the column name for the OehhIndustConform field
     */
    public const COL_OEHHINDUSTCONFORM = 'so_head_hist.OehhIndustConform';

    /**
     * the column name for the OehhCstkConsign field
     */
    public const COL_OEHHCSTKCONSIGN = 'so_head_hist.OehhCstkConsign';

    /**
     * the column name for the OehhLmDelayCapSent field
     */
    public const COL_OEHHLMDELAYCAPSENT = 'so_head_hist.OehhLmDelayCapSent';

    /**
     * the column name for the OehhMfgId field
     */
    public const COL_OEHHMFGID = 'so_head_hist.OehhMfgId';

    /**
     * the column name for the OehhStoreId field
     */
    public const COL_OEHHSTOREID = 'so_head_hist.OehhStoreId';

    /**
     * the column name for the OehhPickQueue field
     */
    public const COL_OEHHPICKQUEUE = 'so_head_hist.OehhPickQueue';

    /**
     * the column name for the OehhArrvDate field
     */
    public const COL_OEHHARRVDATE = 'so_head_hist.OehhArrvDate';

    /**
     * the column name for the OehhSurchgStat field
     */
    public const COL_OEHHSURCHGSTAT = 'so_head_hist.OehhSurchgStat';

    /**
     * the column name for the OehhFrtGrup field
     */
    public const COL_OEHHFRTGRUP = 'so_head_hist.OehhFrtGrup';

    /**
     * the column name for the OehhCommOride field
     */
    public const COL_OEHHCOMMORIDE = 'so_head_hist.OehhCommOride';

    /**
     * the column name for the OehhChrgSplt field
     */
    public const COL_OEHHCHRGSPLT = 'so_head_hist.OehhChrgSplt';

    /**
     * the column name for the OehhAcCcAprv field
     */
    public const COL_OEHHACCCAPRV = 'so_head_hist.OehhAcCcAprv';

    /**
     * the column name for the OehhOrigOrdrNbr field
     */
    public const COL_OEHHORIGORDRNBR = 'so_head_hist.OehhOrigOrdrNbr';

    /**
     * the column name for the OehhPostDate field
     */
    public const COL_OEHHPOSTDATE = 'so_head_hist.OehhPostDate';

    /**
     * the column name for the OehhDiscDate1 field
     */
    public const COL_OEHHDISCDATE1 = 'so_head_hist.OehhDiscDate1';

    /**
     * the column name for the OehhDiscPct1 field
     */
    public const COL_OEHHDISCPCT1 = 'so_head_hist.OehhDiscPct1';

    /**
     * the column name for the OehhDueDate1 field
     */
    public const COL_OEHHDUEDATE1 = 'so_head_hist.OehhDueDate1';

    /**
     * the column name for the OehhDueAmt1 field
     */
    public const COL_OEHHDUEAMT1 = 'so_head_hist.OehhDueAmt1';

    /**
     * the column name for the OehhDuePct1 field
     */
    public const COL_OEHHDUEPCT1 = 'so_head_hist.OehhDuePct1';

    /**
     * the column name for the OehhDiscDate2 field
     */
    public const COL_OEHHDISCDATE2 = 'so_head_hist.OehhDiscDate2';

    /**
     * the column name for the OehhDiscPct2 field
     */
    public const COL_OEHHDISCPCT2 = 'so_head_hist.OehhDiscPct2';

    /**
     * the column name for the OehhDueDate2 field
     */
    public const COL_OEHHDUEDATE2 = 'so_head_hist.OehhDueDate2';

    /**
     * the column name for the OehhDueAmt2 field
     */
    public const COL_OEHHDUEAMT2 = 'so_head_hist.OehhDueAmt2';

    /**
     * the column name for the OehhDuePct2 field
     */
    public const COL_OEHHDUEPCT2 = 'so_head_hist.OehhDuePct2';

    /**
     * the column name for the OehhDiscDate3 field
     */
    public const COL_OEHHDISCDATE3 = 'so_head_hist.OehhDiscDate3';

    /**
     * the column name for the OehhDiscPct3 field
     */
    public const COL_OEHHDISCPCT3 = 'so_head_hist.OehhDiscPct3';

    /**
     * the column name for the OehhDueDate3 field
     */
    public const COL_OEHHDUEDATE3 = 'so_head_hist.OehhDueDate3';

    /**
     * the column name for the OehhDueAmt3 field
     */
    public const COL_OEHHDUEAMT3 = 'so_head_hist.OehhDueAmt3';

    /**
     * the column name for the OehhDuePct3 field
     */
    public const COL_OEHHDUEPCT3 = 'so_head_hist.OehhDuePct3';

    /**
     * the column name for the OehhDiscDate4 field
     */
    public const COL_OEHHDISCDATE4 = 'so_head_hist.OehhDiscDate4';

    /**
     * the column name for the OehhDiscPct4 field
     */
    public const COL_OEHHDISCPCT4 = 'so_head_hist.OehhDiscPct4';

    /**
     * the column name for the OehhDueDate4 field
     */
    public const COL_OEHHDUEDATE4 = 'so_head_hist.OehhDueDate4';

    /**
     * the column name for the OehhDueAmt4 field
     */
    public const COL_OEHHDUEAMT4 = 'so_head_hist.OehhDueAmt4';

    /**
     * the column name for the OehhDuePct4 field
     */
    public const COL_OEHHDUEPCT4 = 'so_head_hist.OehhDuePct4';

    /**
     * the column name for the OehhDiscDate5 field
     */
    public const COL_OEHHDISCDATE5 = 'so_head_hist.OehhDiscDate5';

    /**
     * the column name for the OehhDiscPct5 field
     */
    public const COL_OEHHDISCPCT5 = 'so_head_hist.OehhDiscPct5';

    /**
     * the column name for the OehhDueDate5 field
     */
    public const COL_OEHHDUEDATE5 = 'so_head_hist.OehhDueDate5';

    /**
     * the column name for the OehhDueAmt5 field
     */
    public const COL_OEHHDUEAMT5 = 'so_head_hist.OehhDueAmt5';

    /**
     * the column name for the OehhDuePct5 field
     */
    public const COL_OEHHDUEPCT5 = 'so_head_hist.OehhDuePct5';

    /**
     * the column name for the OehhDiscDate6 field
     */
    public const COL_OEHHDISCDATE6 = 'so_head_hist.OehhDiscDate6';

    /**
     * the column name for the OehhDiscPct6 field
     */
    public const COL_OEHHDISCPCT6 = 'so_head_hist.OehhDiscPct6';

    /**
     * the column name for the OehhDueDate6 field
     */
    public const COL_OEHHDUEDATE6 = 'so_head_hist.OehhDueDate6';

    /**
     * the column name for the OehhDueAmt6 field
     */
    public const COL_OEHHDUEAMT6 = 'so_head_hist.OehhDueAmt6';

    /**
     * the column name for the OehhDuePct6 field
     */
    public const COL_OEHHDUEPCT6 = 'so_head_hist.OehhDuePct6';

    /**
     * the column name for the OehhRefNbr field
     */
    public const COL_OEHHREFNBR = 'so_head_hist.OehhRefNbr';

    /**
     * the column name for the OehhAcProgNbr field
     */
    public const COL_OEHHACPROGNBR = 'so_head_hist.OehhAcProgNbr';

    /**
     * the column name for the OehhAcProgExpDate field
     */
    public const COL_OEHHACPROGEXPDATE = 'so_head_hist.OehhAcProgExpDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_head_hist.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_head_hist.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_head_hist.dummy';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Oehhnbr', 'Oehhyear', 'Oehhstat', 'Oehhhold', 'Arcucustid', 'Arstshipid', 'Oehhstname', 'Oehhstlastname', 'Oehhstfirstname', 'Oehhstadr1', 'Oehhstadr2', 'Oehhstadr3', 'Oehhstctry', 'Oehhstcity', 'Oehhststat', 'Oehhstzipcode', 'Oehhcustpo', 'Oehhordrdate', 'Artmtermcd', 'Artbshipvia', 'Arininvnbr', 'Oehhinvdate', 'Oehhglpd', 'Arspsaleper1', 'Oehhsp1pct', 'Arspsaleper2', 'Oehhsp2pct', 'Arspsaleper3', 'Oehhsp3pct', 'Oehhcntrnbr', 'Oehhwibatch', 'Oehhdroprelhold', 'Oehhtaxsub', 'Oehhnontaxsub', 'Oehhtaxtot', 'Oehhfrttot', 'Oehhmisctot', 'Oehhordrtot', 'Oehhcosttot', 'Oehhspcommlock', 'Oehhtakendate', 'Oehhtakentime', 'Oehhpickdate', 'Oehhpicktime', 'Oehhpackdate', 'Oehhpacktime', 'Oehhverifydate', 'Oehhverifytime', 'Oehhcreditmemo', 'Oehhbookedyn', 'Intbwhseorig', 'Oehhbtstat', 'Oehhshipcomp', 'Oehhcwoflag', 'Oehhdivision', 'Oehhtakencode', 'Oehhpickcode', 'Oehhpackcode', 'Oehhverifycode', 'Oehhtotdisc', 'Oehhedirefnbrqual', 'Oehhusercode1', 'Oehhusercode2', 'Oehhusercode3', 'Oehhusercode4', 'Oehhexchctry', 'Oehhexchrate', 'Oehhwghttot', 'Oehhwghtoride', 'Oehhccinfo', 'Oehhboxcount', 'Oehhrqstdate', 'Oehhcancdate', 'Oehhcrntuser', 'Oehhreleasenbr', 'Intbwhse', 'Oehhbordbuilddate', 'Oehhdeptcode', 'Oehhfrtinentered', 'Oehhdropshipentered', 'Oehherflag', 'Oehhfrtin', 'Oehhdropship', 'Oehhminorder', 'Oehhcontractterms', 'Oehhdropshipbilled', 'Oehhordtyp', 'Oehhtracknbr', 'Oehhsource', 'Oehhccaprv', 'Oehhpickfmattype', 'Oehhinvcfmattype', 'Oehhcashamt', 'Oehhcheckamt', 'Oehhchecknbr', 'Oehhdepositamt', 'Oehhdepositnbr', 'Oehhccamt', 'Oehhotaxsub', 'Oehhonontaxsub', 'Oehhotaxtot', 'Oehhoordrtot', 'Oehhpickprintdate', 'Oehhpickprinttime', 'Oehhcont', 'Oehhcontteleintl', 'Oehhconttelenbr', 'Oehhcontteleext', 'Oehhcontfaxintl', 'Oehhcontfaxnbr', 'Oehhshipacct', 'Oehhchgdue', 'Oehhaddlpricdisc', 'Oehhallship', 'Oehhqtyorderamt', 'Oehhcreditapplied', 'Oehhinvcprintdate', 'Oehhinvcprinttime', 'Oehhdiscfrt', 'Oehhorideshipcomp', 'Oehhcontemail', 'Oehhmanualfrt', 'Oehhinternalfrt', 'Oehhfrtcost', 'Oehhroute', 'Oehhrouteseq', 'Oehhfrttaxcode1', 'Oehhfrttaxamt1', 'Oehhfrttaxcode2', 'Oehhfrttaxamt2', 'Oehhfrttaxcode3', 'Oehhfrttaxamt3', 'Oehhfrttaxcode4', 'Oehhfrttaxamt4', 'Oehhfrttaxcode5', 'Oehhfrttaxamt5', 'Oehhedi855sent', 'Oehhfrt3rdparty', 'Oehhfob', 'Oehhconfirmimagyn', 'Oehhindustconform', 'Oehhcstkconsign', 'Oehhlmdelaycapsent', 'Oehhmfgid', 'Oehhstoreid', 'Oehhpickqueue', 'Oehharrvdate', 'Oehhsurchgstat', 'Oehhfrtgrup', 'Oehhcommoride', 'Oehhchrgsplt', 'Oehhacccaprv', 'Oehhorigordrnbr', 'Oehhpostdate', 'Oehhdiscdate1', 'Oehhdiscpct1', 'Oehhduedate1', 'Oehhdueamt1', 'Oehhduepct1', 'Oehhdiscdate2', 'Oehhdiscpct2', 'Oehhduedate2', 'Oehhdueamt2', 'Oehhduepct2', 'Oehhdiscdate3', 'Oehhdiscpct3', 'Oehhduedate3', 'Oehhdueamt3', 'Oehhduepct3', 'Oehhdiscdate4', 'Oehhdiscpct4', 'Oehhduedate4', 'Oehhdueamt4', 'Oehhduepct4', 'Oehhdiscdate5', 'Oehhdiscpct5', 'Oehhduedate5', 'Oehhdueamt5', 'Oehhduepct5', 'Oehhdiscdate6', 'Oehhdiscpct6', 'Oehhduedate6', 'Oehhdueamt6', 'Oehhduepct6', 'Oehhrefnbr', 'Oehhacprognbr', 'Oehhacprogexpdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['oehhnbr', 'oehhyear', 'oehhstat', 'oehhhold', 'arcucustid', 'arstshipid', 'oehhstname', 'oehhstlastname', 'oehhstfirstname', 'oehhstadr1', 'oehhstadr2', 'oehhstadr3', 'oehhstctry', 'oehhstcity', 'oehhststat', 'oehhstzipcode', 'oehhcustpo', 'oehhordrdate', 'artmtermcd', 'artbshipvia', 'arininvnbr', 'oehhinvdate', 'oehhglpd', 'arspsaleper1', 'oehhsp1pct', 'arspsaleper2', 'oehhsp2pct', 'arspsaleper3', 'oehhsp3pct', 'oehhcntrnbr', 'oehhwibatch', 'oehhdroprelhold', 'oehhtaxsub', 'oehhnontaxsub', 'oehhtaxtot', 'oehhfrttot', 'oehhmisctot', 'oehhordrtot', 'oehhcosttot', 'oehhspcommlock', 'oehhtakendate', 'oehhtakentime', 'oehhpickdate', 'oehhpicktime', 'oehhpackdate', 'oehhpacktime', 'oehhverifydate', 'oehhverifytime', 'oehhcreditmemo', 'oehhbookedyn', 'intbwhseorig', 'oehhbtstat', 'oehhshipcomp', 'oehhcwoflag', 'oehhdivision', 'oehhtakencode', 'oehhpickcode', 'oehhpackcode', 'oehhverifycode', 'oehhtotdisc', 'oehhedirefnbrqual', 'oehhusercode1', 'oehhusercode2', 'oehhusercode3', 'oehhusercode4', 'oehhexchctry', 'oehhexchrate', 'oehhwghttot', 'oehhwghtoride', 'oehhccinfo', 'oehhboxcount', 'oehhrqstdate', 'oehhcancdate', 'oehhcrntuser', 'oehhreleasenbr', 'intbwhse', 'oehhbordbuilddate', 'oehhdeptcode', 'oehhfrtinentered', 'oehhdropshipentered', 'oehherflag', 'oehhfrtin', 'oehhdropship', 'oehhminorder', 'oehhcontractterms', 'oehhdropshipbilled', 'oehhordtyp', 'oehhtracknbr', 'oehhsource', 'oehhccaprv', 'oehhpickfmattype', 'oehhinvcfmattype', 'oehhcashamt', 'oehhcheckamt', 'oehhchecknbr', 'oehhdepositamt', 'oehhdepositnbr', 'oehhccamt', 'oehhotaxsub', 'oehhonontaxsub', 'oehhotaxtot', 'oehhoordrtot', 'oehhpickprintdate', 'oehhpickprinttime', 'oehhcont', 'oehhcontteleintl', 'oehhconttelenbr', 'oehhcontteleext', 'oehhcontfaxintl', 'oehhcontfaxnbr', 'oehhshipacct', 'oehhchgdue', 'oehhaddlpricdisc', 'oehhallship', 'oehhqtyorderamt', 'oehhcreditapplied', 'oehhinvcprintdate', 'oehhinvcprinttime', 'oehhdiscfrt', 'oehhorideshipcomp', 'oehhcontemail', 'oehhmanualfrt', 'oehhinternalfrt', 'oehhfrtcost', 'oehhroute', 'oehhrouteseq', 'oehhfrttaxcode1', 'oehhfrttaxamt1', 'oehhfrttaxcode2', 'oehhfrttaxamt2', 'oehhfrttaxcode3', 'oehhfrttaxamt3', 'oehhfrttaxcode4', 'oehhfrttaxamt4', 'oehhfrttaxcode5', 'oehhfrttaxamt5', 'oehhedi855sent', 'oehhfrt3rdparty', 'oehhfob', 'oehhconfirmimagyn', 'oehhindustconform', 'oehhcstkconsign', 'oehhlmdelaycapsent', 'oehhmfgid', 'oehhstoreid', 'oehhpickqueue', 'oehharrvdate', 'oehhsurchgstat', 'oehhfrtgrup', 'oehhcommoride', 'oehhchrgsplt', 'oehhacccaprv', 'oehhorigordrnbr', 'oehhpostdate', 'oehhdiscdate1', 'oehhdiscpct1', 'oehhduedate1', 'oehhdueamt1', 'oehhduepct1', 'oehhdiscdate2', 'oehhdiscpct2', 'oehhduedate2', 'oehhdueamt2', 'oehhduepct2', 'oehhdiscdate3', 'oehhdiscpct3', 'oehhduedate3', 'oehhdueamt3', 'oehhduepct3', 'oehhdiscdate4', 'oehhdiscpct4', 'oehhduedate4', 'oehhdueamt4', 'oehhduepct4', 'oehhdiscdate5', 'oehhdiscpct5', 'oehhduedate5', 'oehhdueamt5', 'oehhduepct5', 'oehhdiscdate6', 'oehhdiscpct6', 'oehhduedate6', 'oehhdueamt6', 'oehhduepct6', 'oehhrefnbr', 'oehhacprognbr', 'oehhacprogexpdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [SalesHistoryTableMap::COL_OEHHNBR, SalesHistoryTableMap::COL_OEHHYEAR, SalesHistoryTableMap::COL_OEHHSTAT, SalesHistoryTableMap::COL_OEHHHOLD, SalesHistoryTableMap::COL_ARCUCUSTID, SalesHistoryTableMap::COL_ARSTSHIPID, SalesHistoryTableMap::COL_OEHHSTNAME, SalesHistoryTableMap::COL_OEHHSTLASTNAME, SalesHistoryTableMap::COL_OEHHSTFIRSTNAME, SalesHistoryTableMap::COL_OEHHSTADR1, SalesHistoryTableMap::COL_OEHHSTADR2, SalesHistoryTableMap::COL_OEHHSTADR3, SalesHistoryTableMap::COL_OEHHSTCTRY, SalesHistoryTableMap::COL_OEHHSTCITY, SalesHistoryTableMap::COL_OEHHSTSTAT, SalesHistoryTableMap::COL_OEHHSTZIPCODE, SalesHistoryTableMap::COL_OEHHCUSTPO, SalesHistoryTableMap::COL_OEHHORDRDATE, SalesHistoryTableMap::COL_ARTMTERMCD, SalesHistoryTableMap::COL_ARTBSHIPVIA, SalesHistoryTableMap::COL_ARININVNBR, SalesHistoryTableMap::COL_OEHHINVDATE, SalesHistoryTableMap::COL_OEHHGLPD, SalesHistoryTableMap::COL_ARSPSALEPER1, SalesHistoryTableMap::COL_OEHHSP1PCT, SalesHistoryTableMap::COL_ARSPSALEPER2, SalesHistoryTableMap::COL_OEHHSP2PCT, SalesHistoryTableMap::COL_ARSPSALEPER3, SalesHistoryTableMap::COL_OEHHSP3PCT, SalesHistoryTableMap::COL_OEHHCNTRNBR, SalesHistoryTableMap::COL_OEHHWIBATCH, SalesHistoryTableMap::COL_OEHHDROPRELHOLD, SalesHistoryTableMap::COL_OEHHTAXSUB, SalesHistoryTableMap::COL_OEHHNONTAXSUB, SalesHistoryTableMap::COL_OEHHTAXTOT, SalesHistoryTableMap::COL_OEHHFRTTOT, SalesHistoryTableMap::COL_OEHHMISCTOT, SalesHistoryTableMap::COL_OEHHORDRTOT, SalesHistoryTableMap::COL_OEHHCOSTTOT, SalesHistoryTableMap::COL_OEHHSPCOMMLOCK, SalesHistoryTableMap::COL_OEHHTAKENDATE, SalesHistoryTableMap::COL_OEHHTAKENTIME, SalesHistoryTableMap::COL_OEHHPICKDATE, SalesHistoryTableMap::COL_OEHHPICKTIME, SalesHistoryTableMap::COL_OEHHPACKDATE, SalesHistoryTableMap::COL_OEHHPACKTIME, SalesHistoryTableMap::COL_OEHHVERIFYDATE, SalesHistoryTableMap::COL_OEHHVERIFYTIME, SalesHistoryTableMap::COL_OEHHCREDITMEMO, SalesHistoryTableMap::COL_OEHHBOOKEDYN, SalesHistoryTableMap::COL_INTBWHSEORIG, SalesHistoryTableMap::COL_OEHHBTSTAT, SalesHistoryTableMap::COL_OEHHSHIPCOMP, SalesHistoryTableMap::COL_OEHHCWOFLAG, SalesHistoryTableMap::COL_OEHHDIVISION, SalesHistoryTableMap::COL_OEHHTAKENCODE, SalesHistoryTableMap::COL_OEHHPICKCODE, SalesHistoryTableMap::COL_OEHHPACKCODE, SalesHistoryTableMap::COL_OEHHVERIFYCODE, SalesHistoryTableMap::COL_OEHHTOTDISC, SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL, SalesHistoryTableMap::COL_OEHHUSERCODE1, SalesHistoryTableMap::COL_OEHHUSERCODE2, SalesHistoryTableMap::COL_OEHHUSERCODE3, SalesHistoryTableMap::COL_OEHHUSERCODE4, SalesHistoryTableMap::COL_OEHHEXCHCTRY, SalesHistoryTableMap::COL_OEHHEXCHRATE, SalesHistoryTableMap::COL_OEHHWGHTTOT, SalesHistoryTableMap::COL_OEHHWGHTORIDE, SalesHistoryTableMap::COL_OEHHCCINFO, SalesHistoryTableMap::COL_OEHHBOXCOUNT, SalesHistoryTableMap::COL_OEHHRQSTDATE, SalesHistoryTableMap::COL_OEHHCANCDATE, SalesHistoryTableMap::COL_OEHHCRNTUSER, SalesHistoryTableMap::COL_OEHHRELEASENBR, SalesHistoryTableMap::COL_INTBWHSE, SalesHistoryTableMap::COL_OEHHBORDBUILDDATE, SalesHistoryTableMap::COL_OEHHDEPTCODE, SalesHistoryTableMap::COL_OEHHFRTINENTERED, SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED, SalesHistoryTableMap::COL_OEHHERFLAG, SalesHistoryTableMap::COL_OEHHFRTIN, SalesHistoryTableMap::COL_OEHHDROPSHIP, SalesHistoryTableMap::COL_OEHHMINORDER, SalesHistoryTableMap::COL_OEHHCONTRACTTERMS, SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED, SalesHistoryTableMap::COL_OEHHORDTYP, SalesHistoryTableMap::COL_OEHHTRACKNBR, SalesHistoryTableMap::COL_OEHHSOURCE, SalesHistoryTableMap::COL_OEHHCCAPRV, SalesHistoryTableMap::COL_OEHHPICKFMATTYPE, SalesHistoryTableMap::COL_OEHHINVCFMATTYPE, SalesHistoryTableMap::COL_OEHHCASHAMT, SalesHistoryTableMap::COL_OEHHCHECKAMT, SalesHistoryTableMap::COL_OEHHCHECKNBR, SalesHistoryTableMap::COL_OEHHDEPOSITAMT, SalesHistoryTableMap::COL_OEHHDEPOSITNBR, SalesHistoryTableMap::COL_OEHHCCAMT, SalesHistoryTableMap::COL_OEHHOTAXSUB, SalesHistoryTableMap::COL_OEHHONONTAXSUB, SalesHistoryTableMap::COL_OEHHOTAXTOT, SalesHistoryTableMap::COL_OEHHOORDRTOT, SalesHistoryTableMap::COL_OEHHPICKPRINTDATE, SalesHistoryTableMap::COL_OEHHPICKPRINTTIME, SalesHistoryTableMap::COL_OEHHCONT, SalesHistoryTableMap::COL_OEHHCONTTELEINTL, SalesHistoryTableMap::COL_OEHHCONTTELENBR, SalesHistoryTableMap::COL_OEHHCONTTELEEXT, SalesHistoryTableMap::COL_OEHHCONTFAXINTL, SalesHistoryTableMap::COL_OEHHCONTFAXNBR, SalesHistoryTableMap::COL_OEHHSHIPACCT, SalesHistoryTableMap::COL_OEHHCHGDUE, SalesHistoryTableMap::COL_OEHHADDLPRICDISC, SalesHistoryTableMap::COL_OEHHALLSHIP, SalesHistoryTableMap::COL_OEHHQTYORDERAMT, SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, SalesHistoryTableMap::COL_OEHHINVCPRINTDATE, SalesHistoryTableMap::COL_OEHHINVCPRINTTIME, SalesHistoryTableMap::COL_OEHHDISCFRT, SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP, SalesHistoryTableMap::COL_OEHHCONTEMAIL, SalesHistoryTableMap::COL_OEHHMANUALFRT, SalesHistoryTableMap::COL_OEHHINTERNALFRT, SalesHistoryTableMap::COL_OEHHFRTCOST, SalesHistoryTableMap::COL_OEHHROUTE, SalesHistoryTableMap::COL_OEHHROUTESEQ, SalesHistoryTableMap::COL_OEHHFRTTAXCODE1, SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, SalesHistoryTableMap::COL_OEHHFRTTAXCODE2, SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, SalesHistoryTableMap::COL_OEHHFRTTAXCODE3, SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, SalesHistoryTableMap::COL_OEHHFRTTAXCODE4, SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, SalesHistoryTableMap::COL_OEHHFRTTAXCODE5, SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, SalesHistoryTableMap::COL_OEHHEDI855SENT, SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, SalesHistoryTableMap::COL_OEHHFOB, SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN, SalesHistoryTableMap::COL_OEHHINDUSTCONFORM, SalesHistoryTableMap::COL_OEHHCSTKCONSIGN, SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT, SalesHistoryTableMap::COL_OEHHMFGID, SalesHistoryTableMap::COL_OEHHSTOREID, SalesHistoryTableMap::COL_OEHHPICKQUEUE, SalesHistoryTableMap::COL_OEHHARRVDATE, SalesHistoryTableMap::COL_OEHHSURCHGSTAT, SalesHistoryTableMap::COL_OEHHFRTGRUP, SalesHistoryTableMap::COL_OEHHCOMMORIDE, SalesHistoryTableMap::COL_OEHHCHRGSPLT, SalesHistoryTableMap::COL_OEHHACCCAPRV, SalesHistoryTableMap::COL_OEHHORIGORDRNBR, SalesHistoryTableMap::COL_OEHHPOSTDATE, SalesHistoryTableMap::COL_OEHHDISCDATE1, SalesHistoryTableMap::COL_OEHHDISCPCT1, SalesHistoryTableMap::COL_OEHHDUEDATE1, SalesHistoryTableMap::COL_OEHHDUEAMT1, SalesHistoryTableMap::COL_OEHHDUEPCT1, SalesHistoryTableMap::COL_OEHHDISCDATE2, SalesHistoryTableMap::COL_OEHHDISCPCT2, SalesHistoryTableMap::COL_OEHHDUEDATE2, SalesHistoryTableMap::COL_OEHHDUEAMT2, SalesHistoryTableMap::COL_OEHHDUEPCT2, SalesHistoryTableMap::COL_OEHHDISCDATE3, SalesHistoryTableMap::COL_OEHHDISCPCT3, SalesHistoryTableMap::COL_OEHHDUEDATE3, SalesHistoryTableMap::COL_OEHHDUEAMT3, SalesHistoryTableMap::COL_OEHHDUEPCT3, SalesHistoryTableMap::COL_OEHHDISCDATE4, SalesHistoryTableMap::COL_OEHHDISCPCT4, SalesHistoryTableMap::COL_OEHHDUEDATE4, SalesHistoryTableMap::COL_OEHHDUEAMT4, SalesHistoryTableMap::COL_OEHHDUEPCT4, SalesHistoryTableMap::COL_OEHHDISCDATE5, SalesHistoryTableMap::COL_OEHHDISCPCT5, SalesHistoryTableMap::COL_OEHHDUEDATE5, SalesHistoryTableMap::COL_OEHHDUEAMT5, SalesHistoryTableMap::COL_OEHHDUEPCT5, SalesHistoryTableMap::COL_OEHHDISCDATE6, SalesHistoryTableMap::COL_OEHHDISCPCT6, SalesHistoryTableMap::COL_OEHHDUEDATE6, SalesHistoryTableMap::COL_OEHHDUEAMT6, SalesHistoryTableMap::COL_OEHHDUEPCT6, SalesHistoryTableMap::COL_OEHHREFNBR, SalesHistoryTableMap::COL_OEHHACPROGNBR, SalesHistoryTableMap::COL_OEHHACPROGEXPDATE, SalesHistoryTableMap::COL_DATEUPDTD, SalesHistoryTableMap::COL_TIMEUPDTD, SalesHistoryTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['OehhNbr', 'OehhYear', 'OehhStat', 'OehhHold', 'ArcuCustId', 'ArstShipId', 'OehhStName', 'OehhStLastName', 'OehhStFirstName', 'OehhStAdr1', 'OehhStAdr2', 'OehhStAdr3', 'OehhStCtry', 'OehhStCity', 'OehhStStat', 'OehhStZipCode', 'OehhCustPo', 'OehhOrdrDate', 'ArtmTermCd', 'ArtbShipVia', 'ArinInvNbr', 'OehhInvDate', 'OehhGLPd', 'ArspSalePer1', 'OehhSp1Pct', 'ArspSalePer2', 'OehhSp2Pct', 'ArspSalePer3', 'OehhSp3Pct', 'OehhCntrNbr', 'OehhWiBatch', 'OehhDropRelHold', 'OehhTaxSub', 'OehhNonTaxSub', 'OehhTaxTot', 'OehhFrtTot', 'OehhMiscTot', 'OehhOrdrTot', 'OehhCostTot', 'OehhSpCommLock', 'OehhTakenDate', 'OehhTakenTime', 'OehhPickDate', 'OehhPickTime', 'OehhPackDate', 'OehhPackTime', 'OehhVerifyDate', 'OehhVerifyTime', 'OehhCreditMemo', 'OehhBookedYn', 'IntbWhseOrig', 'OehhBtStat', 'OehhShipComp', 'OehhCwoFlag', 'OehhDivision', 'OehhTakenCode', 'OehhPickCode', 'OehhPackCode', 'OehhVerifyCode', 'OehhTotDisc', 'OehhEdiRefNbrQual', 'OehhUserCode1', 'OehhUserCode2', 'OehhUserCode3', 'OehhUserCode4', 'OehhExchCtry', 'OehhExchRate', 'OehhWghtTot', 'OehhWghtOride', 'OehhCcInfo', 'OehhBoxCount', 'OehhRqstDate', 'OehhCancDate', 'OehhCrntUser', 'OehhReleaseNbr', 'IntbWhse', 'OehhBordBuildDate', 'OehhDeptCode', 'OehhFrtInEntered', 'OehhDropShipEntered', 'OehhErFlag', 'OehhFrtIn', 'OehhDropShip', 'OehhMinOrder', 'OehhContractTerms', 'OehhDropShipBilled', 'OehhOrdTyp', 'OehhTrackNbr', 'OehhSource', 'OehhCcAprv', 'OehhPickFmatType', 'OehhInvcFmatType', 'OehhCashAmt', 'OehhCheckAmt', 'OehhCheckNbr', 'OehhDepositAmt', 'OehhDepositNbr', 'OehhCcAmt', 'OehhOTaxSub', 'OehhONonTaxSub', 'OehhOTaxTot', 'OehhOOrdrTot', 'OehhPickPrintDate', 'OehhPickPrintTime', 'OehhCont', 'OehhContTeleIntl', 'OehhContTeleNbr', 'OehhContTeleExt', 'OehhContFaxIntl', 'OehhContFaxNbr', 'OehhShipAcct', 'OehhChgDue', 'OehhAddlPricDisc', 'OehhAllShip', 'OehhQtyOrderAmt', 'OehhCreditApplied', 'OehhInvcPrintDate', 'OehhInvcPrintTime', 'OehhDiscFrt', 'OehhOrideShipComp', 'OehhContEmail', 'OehhManualFrt', 'OehhInternalFrt', 'OehhFrtCost', 'OehhRoute', 'OehhRouteSeq', 'OehhFrtTaxCode1', 'OehhFrtTaxAmt1', 'OehhFrtTaxCode2', 'OehhFrtTaxAmt2', 'OehhFrtTaxCode3', 'OehhFrtTaxAmt3', 'OehhFrtTaxCode4', 'OehhFrtTaxAmt4', 'OehhFrtTaxCode5', 'OehhFrtTaxAmt5', 'OehhEdi855Sent', 'OehhFrt3rdParty', 'OehhFob', 'OehhConfirmImagYn', 'OehhIndustConform', 'OehhCstkConsign', 'OehhLmDelayCapSent', 'OehhMfgId', 'OehhStoreId', 'OehhPickQueue', 'OehhArrvDate', 'OehhSurchgStat', 'OehhFrtGrup', 'OehhCommOride', 'OehhChrgSplt', 'OehhAcCcAprv', 'OehhOrigOrdrNbr', 'OehhPostDate', 'OehhDiscDate1', 'OehhDiscPct1', 'OehhDueDate1', 'OehhDueAmt1', 'OehhDuePct1', 'OehhDiscDate2', 'OehhDiscPct2', 'OehhDueDate2', 'OehhDueAmt2', 'OehhDuePct2', 'OehhDiscDate3', 'OehhDiscPct3', 'OehhDueDate3', 'OehhDueAmt3', 'OehhDuePct3', 'OehhDiscDate4', 'OehhDiscPct4', 'OehhDueDate4', 'OehhDueAmt4', 'OehhDuePct4', 'OehhDiscDate5', 'OehhDiscPct5', 'OehhDueDate5', 'OehhDueAmt5', 'OehhDuePct5', 'OehhDiscDate6', 'OehhDiscPct6', 'OehhDueDate6', 'OehhDueAmt6', 'OehhDuePct6', 'OehhRefNbr', 'OehhAcProgNbr', 'OehhAcProgExpDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Oehhnbr' => 0, 'Oehhyear' => 1, 'Oehhstat' => 2, 'Oehhhold' => 3, 'Arcucustid' => 4, 'Arstshipid' => 5, 'Oehhstname' => 6, 'Oehhstlastname' => 7, 'Oehhstfirstname' => 8, 'Oehhstadr1' => 9, 'Oehhstadr2' => 10, 'Oehhstadr3' => 11, 'Oehhstctry' => 12, 'Oehhstcity' => 13, 'Oehhststat' => 14, 'Oehhstzipcode' => 15, 'Oehhcustpo' => 16, 'Oehhordrdate' => 17, 'Artmtermcd' => 18, 'Artbshipvia' => 19, 'Arininvnbr' => 20, 'Oehhinvdate' => 21, 'Oehhglpd' => 22, 'Arspsaleper1' => 23, 'Oehhsp1pct' => 24, 'Arspsaleper2' => 25, 'Oehhsp2pct' => 26, 'Arspsaleper3' => 27, 'Oehhsp3pct' => 28, 'Oehhcntrnbr' => 29, 'Oehhwibatch' => 30, 'Oehhdroprelhold' => 31, 'Oehhtaxsub' => 32, 'Oehhnontaxsub' => 33, 'Oehhtaxtot' => 34, 'Oehhfrttot' => 35, 'Oehhmisctot' => 36, 'Oehhordrtot' => 37, 'Oehhcosttot' => 38, 'Oehhspcommlock' => 39, 'Oehhtakendate' => 40, 'Oehhtakentime' => 41, 'Oehhpickdate' => 42, 'Oehhpicktime' => 43, 'Oehhpackdate' => 44, 'Oehhpacktime' => 45, 'Oehhverifydate' => 46, 'Oehhverifytime' => 47, 'Oehhcreditmemo' => 48, 'Oehhbookedyn' => 49, 'Intbwhseorig' => 50, 'Oehhbtstat' => 51, 'Oehhshipcomp' => 52, 'Oehhcwoflag' => 53, 'Oehhdivision' => 54, 'Oehhtakencode' => 55, 'Oehhpickcode' => 56, 'Oehhpackcode' => 57, 'Oehhverifycode' => 58, 'Oehhtotdisc' => 59, 'Oehhedirefnbrqual' => 60, 'Oehhusercode1' => 61, 'Oehhusercode2' => 62, 'Oehhusercode3' => 63, 'Oehhusercode4' => 64, 'Oehhexchctry' => 65, 'Oehhexchrate' => 66, 'Oehhwghttot' => 67, 'Oehhwghtoride' => 68, 'Oehhccinfo' => 69, 'Oehhboxcount' => 70, 'Oehhrqstdate' => 71, 'Oehhcancdate' => 72, 'Oehhcrntuser' => 73, 'Oehhreleasenbr' => 74, 'Intbwhse' => 75, 'Oehhbordbuilddate' => 76, 'Oehhdeptcode' => 77, 'Oehhfrtinentered' => 78, 'Oehhdropshipentered' => 79, 'Oehherflag' => 80, 'Oehhfrtin' => 81, 'Oehhdropship' => 82, 'Oehhminorder' => 83, 'Oehhcontractterms' => 84, 'Oehhdropshipbilled' => 85, 'Oehhordtyp' => 86, 'Oehhtracknbr' => 87, 'Oehhsource' => 88, 'Oehhccaprv' => 89, 'Oehhpickfmattype' => 90, 'Oehhinvcfmattype' => 91, 'Oehhcashamt' => 92, 'Oehhcheckamt' => 93, 'Oehhchecknbr' => 94, 'Oehhdepositamt' => 95, 'Oehhdepositnbr' => 96, 'Oehhccamt' => 97, 'Oehhotaxsub' => 98, 'Oehhonontaxsub' => 99, 'Oehhotaxtot' => 100, 'Oehhoordrtot' => 101, 'Oehhpickprintdate' => 102, 'Oehhpickprinttime' => 103, 'Oehhcont' => 104, 'Oehhcontteleintl' => 105, 'Oehhconttelenbr' => 106, 'Oehhcontteleext' => 107, 'Oehhcontfaxintl' => 108, 'Oehhcontfaxnbr' => 109, 'Oehhshipacct' => 110, 'Oehhchgdue' => 111, 'Oehhaddlpricdisc' => 112, 'Oehhallship' => 113, 'Oehhqtyorderamt' => 114, 'Oehhcreditapplied' => 115, 'Oehhinvcprintdate' => 116, 'Oehhinvcprinttime' => 117, 'Oehhdiscfrt' => 118, 'Oehhorideshipcomp' => 119, 'Oehhcontemail' => 120, 'Oehhmanualfrt' => 121, 'Oehhinternalfrt' => 122, 'Oehhfrtcost' => 123, 'Oehhroute' => 124, 'Oehhrouteseq' => 125, 'Oehhfrttaxcode1' => 126, 'Oehhfrttaxamt1' => 127, 'Oehhfrttaxcode2' => 128, 'Oehhfrttaxamt2' => 129, 'Oehhfrttaxcode3' => 130, 'Oehhfrttaxamt3' => 131, 'Oehhfrttaxcode4' => 132, 'Oehhfrttaxamt4' => 133, 'Oehhfrttaxcode5' => 134, 'Oehhfrttaxamt5' => 135, 'Oehhedi855sent' => 136, 'Oehhfrt3rdparty' => 137, 'Oehhfob' => 138, 'Oehhconfirmimagyn' => 139, 'Oehhindustconform' => 140, 'Oehhcstkconsign' => 141, 'Oehhlmdelaycapsent' => 142, 'Oehhmfgid' => 143, 'Oehhstoreid' => 144, 'Oehhpickqueue' => 145, 'Oehharrvdate' => 146, 'Oehhsurchgstat' => 147, 'Oehhfrtgrup' => 148, 'Oehhcommoride' => 149, 'Oehhchrgsplt' => 150, 'Oehhacccaprv' => 151, 'Oehhorigordrnbr' => 152, 'Oehhpostdate' => 153, 'Oehhdiscdate1' => 154, 'Oehhdiscpct1' => 155, 'Oehhduedate1' => 156, 'Oehhdueamt1' => 157, 'Oehhduepct1' => 158, 'Oehhdiscdate2' => 159, 'Oehhdiscpct2' => 160, 'Oehhduedate2' => 161, 'Oehhdueamt2' => 162, 'Oehhduepct2' => 163, 'Oehhdiscdate3' => 164, 'Oehhdiscpct3' => 165, 'Oehhduedate3' => 166, 'Oehhdueamt3' => 167, 'Oehhduepct3' => 168, 'Oehhdiscdate4' => 169, 'Oehhdiscpct4' => 170, 'Oehhduedate4' => 171, 'Oehhdueamt4' => 172, 'Oehhduepct4' => 173, 'Oehhdiscdate5' => 174, 'Oehhdiscpct5' => 175, 'Oehhduedate5' => 176, 'Oehhdueamt5' => 177, 'Oehhduepct5' => 178, 'Oehhdiscdate6' => 179, 'Oehhdiscpct6' => 180, 'Oehhduedate6' => 181, 'Oehhdueamt6' => 182, 'Oehhduepct6' => 183, 'Oehhrefnbr' => 184, 'Oehhacprognbr' => 185, 'Oehhacprogexpdate' => 186, 'Dateupdtd' => 187, 'Timeupdtd' => 188, 'Dummy' => 189, ],
        self::TYPE_CAMELNAME     => ['oehhnbr' => 0, 'oehhyear' => 1, 'oehhstat' => 2, 'oehhhold' => 3, 'arcucustid' => 4, 'arstshipid' => 5, 'oehhstname' => 6, 'oehhstlastname' => 7, 'oehhstfirstname' => 8, 'oehhstadr1' => 9, 'oehhstadr2' => 10, 'oehhstadr3' => 11, 'oehhstctry' => 12, 'oehhstcity' => 13, 'oehhststat' => 14, 'oehhstzipcode' => 15, 'oehhcustpo' => 16, 'oehhordrdate' => 17, 'artmtermcd' => 18, 'artbshipvia' => 19, 'arininvnbr' => 20, 'oehhinvdate' => 21, 'oehhglpd' => 22, 'arspsaleper1' => 23, 'oehhsp1pct' => 24, 'arspsaleper2' => 25, 'oehhsp2pct' => 26, 'arspsaleper3' => 27, 'oehhsp3pct' => 28, 'oehhcntrnbr' => 29, 'oehhwibatch' => 30, 'oehhdroprelhold' => 31, 'oehhtaxsub' => 32, 'oehhnontaxsub' => 33, 'oehhtaxtot' => 34, 'oehhfrttot' => 35, 'oehhmisctot' => 36, 'oehhordrtot' => 37, 'oehhcosttot' => 38, 'oehhspcommlock' => 39, 'oehhtakendate' => 40, 'oehhtakentime' => 41, 'oehhpickdate' => 42, 'oehhpicktime' => 43, 'oehhpackdate' => 44, 'oehhpacktime' => 45, 'oehhverifydate' => 46, 'oehhverifytime' => 47, 'oehhcreditmemo' => 48, 'oehhbookedyn' => 49, 'intbwhseorig' => 50, 'oehhbtstat' => 51, 'oehhshipcomp' => 52, 'oehhcwoflag' => 53, 'oehhdivision' => 54, 'oehhtakencode' => 55, 'oehhpickcode' => 56, 'oehhpackcode' => 57, 'oehhverifycode' => 58, 'oehhtotdisc' => 59, 'oehhedirefnbrqual' => 60, 'oehhusercode1' => 61, 'oehhusercode2' => 62, 'oehhusercode3' => 63, 'oehhusercode4' => 64, 'oehhexchctry' => 65, 'oehhexchrate' => 66, 'oehhwghttot' => 67, 'oehhwghtoride' => 68, 'oehhccinfo' => 69, 'oehhboxcount' => 70, 'oehhrqstdate' => 71, 'oehhcancdate' => 72, 'oehhcrntuser' => 73, 'oehhreleasenbr' => 74, 'intbwhse' => 75, 'oehhbordbuilddate' => 76, 'oehhdeptcode' => 77, 'oehhfrtinentered' => 78, 'oehhdropshipentered' => 79, 'oehherflag' => 80, 'oehhfrtin' => 81, 'oehhdropship' => 82, 'oehhminorder' => 83, 'oehhcontractterms' => 84, 'oehhdropshipbilled' => 85, 'oehhordtyp' => 86, 'oehhtracknbr' => 87, 'oehhsource' => 88, 'oehhccaprv' => 89, 'oehhpickfmattype' => 90, 'oehhinvcfmattype' => 91, 'oehhcashamt' => 92, 'oehhcheckamt' => 93, 'oehhchecknbr' => 94, 'oehhdepositamt' => 95, 'oehhdepositnbr' => 96, 'oehhccamt' => 97, 'oehhotaxsub' => 98, 'oehhonontaxsub' => 99, 'oehhotaxtot' => 100, 'oehhoordrtot' => 101, 'oehhpickprintdate' => 102, 'oehhpickprinttime' => 103, 'oehhcont' => 104, 'oehhcontteleintl' => 105, 'oehhconttelenbr' => 106, 'oehhcontteleext' => 107, 'oehhcontfaxintl' => 108, 'oehhcontfaxnbr' => 109, 'oehhshipacct' => 110, 'oehhchgdue' => 111, 'oehhaddlpricdisc' => 112, 'oehhallship' => 113, 'oehhqtyorderamt' => 114, 'oehhcreditapplied' => 115, 'oehhinvcprintdate' => 116, 'oehhinvcprinttime' => 117, 'oehhdiscfrt' => 118, 'oehhorideshipcomp' => 119, 'oehhcontemail' => 120, 'oehhmanualfrt' => 121, 'oehhinternalfrt' => 122, 'oehhfrtcost' => 123, 'oehhroute' => 124, 'oehhrouteseq' => 125, 'oehhfrttaxcode1' => 126, 'oehhfrttaxamt1' => 127, 'oehhfrttaxcode2' => 128, 'oehhfrttaxamt2' => 129, 'oehhfrttaxcode3' => 130, 'oehhfrttaxamt3' => 131, 'oehhfrttaxcode4' => 132, 'oehhfrttaxamt4' => 133, 'oehhfrttaxcode5' => 134, 'oehhfrttaxamt5' => 135, 'oehhedi855sent' => 136, 'oehhfrt3rdparty' => 137, 'oehhfob' => 138, 'oehhconfirmimagyn' => 139, 'oehhindustconform' => 140, 'oehhcstkconsign' => 141, 'oehhlmdelaycapsent' => 142, 'oehhmfgid' => 143, 'oehhstoreid' => 144, 'oehhpickqueue' => 145, 'oehharrvdate' => 146, 'oehhsurchgstat' => 147, 'oehhfrtgrup' => 148, 'oehhcommoride' => 149, 'oehhchrgsplt' => 150, 'oehhacccaprv' => 151, 'oehhorigordrnbr' => 152, 'oehhpostdate' => 153, 'oehhdiscdate1' => 154, 'oehhdiscpct1' => 155, 'oehhduedate1' => 156, 'oehhdueamt1' => 157, 'oehhduepct1' => 158, 'oehhdiscdate2' => 159, 'oehhdiscpct2' => 160, 'oehhduedate2' => 161, 'oehhdueamt2' => 162, 'oehhduepct2' => 163, 'oehhdiscdate3' => 164, 'oehhdiscpct3' => 165, 'oehhduedate3' => 166, 'oehhdueamt3' => 167, 'oehhduepct3' => 168, 'oehhdiscdate4' => 169, 'oehhdiscpct4' => 170, 'oehhduedate4' => 171, 'oehhdueamt4' => 172, 'oehhduepct4' => 173, 'oehhdiscdate5' => 174, 'oehhdiscpct5' => 175, 'oehhduedate5' => 176, 'oehhdueamt5' => 177, 'oehhduepct5' => 178, 'oehhdiscdate6' => 179, 'oehhdiscpct6' => 180, 'oehhduedate6' => 181, 'oehhdueamt6' => 182, 'oehhduepct6' => 183, 'oehhrefnbr' => 184, 'oehhacprognbr' => 185, 'oehhacprogexpdate' => 186, 'dateupdtd' => 187, 'timeupdtd' => 188, 'dummy' => 189, ],
        self::TYPE_COLNAME       => [SalesHistoryTableMap::COL_OEHHNBR => 0, SalesHistoryTableMap::COL_OEHHYEAR => 1, SalesHistoryTableMap::COL_OEHHSTAT => 2, SalesHistoryTableMap::COL_OEHHHOLD => 3, SalesHistoryTableMap::COL_ARCUCUSTID => 4, SalesHistoryTableMap::COL_ARSTSHIPID => 5, SalesHistoryTableMap::COL_OEHHSTNAME => 6, SalesHistoryTableMap::COL_OEHHSTLASTNAME => 7, SalesHistoryTableMap::COL_OEHHSTFIRSTNAME => 8, SalesHistoryTableMap::COL_OEHHSTADR1 => 9, SalesHistoryTableMap::COL_OEHHSTADR2 => 10, SalesHistoryTableMap::COL_OEHHSTADR3 => 11, SalesHistoryTableMap::COL_OEHHSTCTRY => 12, SalesHistoryTableMap::COL_OEHHSTCITY => 13, SalesHistoryTableMap::COL_OEHHSTSTAT => 14, SalesHistoryTableMap::COL_OEHHSTZIPCODE => 15, SalesHistoryTableMap::COL_OEHHCUSTPO => 16, SalesHistoryTableMap::COL_OEHHORDRDATE => 17, SalesHistoryTableMap::COL_ARTMTERMCD => 18, SalesHistoryTableMap::COL_ARTBSHIPVIA => 19, SalesHistoryTableMap::COL_ARININVNBR => 20, SalesHistoryTableMap::COL_OEHHINVDATE => 21, SalesHistoryTableMap::COL_OEHHGLPD => 22, SalesHistoryTableMap::COL_ARSPSALEPER1 => 23, SalesHistoryTableMap::COL_OEHHSP1PCT => 24, SalesHistoryTableMap::COL_ARSPSALEPER2 => 25, SalesHistoryTableMap::COL_OEHHSP2PCT => 26, SalesHistoryTableMap::COL_ARSPSALEPER3 => 27, SalesHistoryTableMap::COL_OEHHSP3PCT => 28, SalesHistoryTableMap::COL_OEHHCNTRNBR => 29, SalesHistoryTableMap::COL_OEHHWIBATCH => 30, SalesHistoryTableMap::COL_OEHHDROPRELHOLD => 31, SalesHistoryTableMap::COL_OEHHTAXSUB => 32, SalesHistoryTableMap::COL_OEHHNONTAXSUB => 33, SalesHistoryTableMap::COL_OEHHTAXTOT => 34, SalesHistoryTableMap::COL_OEHHFRTTOT => 35, SalesHistoryTableMap::COL_OEHHMISCTOT => 36, SalesHistoryTableMap::COL_OEHHORDRTOT => 37, SalesHistoryTableMap::COL_OEHHCOSTTOT => 38, SalesHistoryTableMap::COL_OEHHSPCOMMLOCK => 39, SalesHistoryTableMap::COL_OEHHTAKENDATE => 40, SalesHistoryTableMap::COL_OEHHTAKENTIME => 41, SalesHistoryTableMap::COL_OEHHPICKDATE => 42, SalesHistoryTableMap::COL_OEHHPICKTIME => 43, SalesHistoryTableMap::COL_OEHHPACKDATE => 44, SalesHistoryTableMap::COL_OEHHPACKTIME => 45, SalesHistoryTableMap::COL_OEHHVERIFYDATE => 46, SalesHistoryTableMap::COL_OEHHVERIFYTIME => 47, SalesHistoryTableMap::COL_OEHHCREDITMEMO => 48, SalesHistoryTableMap::COL_OEHHBOOKEDYN => 49, SalesHistoryTableMap::COL_INTBWHSEORIG => 50, SalesHistoryTableMap::COL_OEHHBTSTAT => 51, SalesHistoryTableMap::COL_OEHHSHIPCOMP => 52, SalesHistoryTableMap::COL_OEHHCWOFLAG => 53, SalesHistoryTableMap::COL_OEHHDIVISION => 54, SalesHistoryTableMap::COL_OEHHTAKENCODE => 55, SalesHistoryTableMap::COL_OEHHPICKCODE => 56, SalesHistoryTableMap::COL_OEHHPACKCODE => 57, SalesHistoryTableMap::COL_OEHHVERIFYCODE => 58, SalesHistoryTableMap::COL_OEHHTOTDISC => 59, SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL => 60, SalesHistoryTableMap::COL_OEHHUSERCODE1 => 61, SalesHistoryTableMap::COL_OEHHUSERCODE2 => 62, SalesHistoryTableMap::COL_OEHHUSERCODE3 => 63, SalesHistoryTableMap::COL_OEHHUSERCODE4 => 64, SalesHistoryTableMap::COL_OEHHEXCHCTRY => 65, SalesHistoryTableMap::COL_OEHHEXCHRATE => 66, SalesHistoryTableMap::COL_OEHHWGHTTOT => 67, SalesHistoryTableMap::COL_OEHHWGHTORIDE => 68, SalesHistoryTableMap::COL_OEHHCCINFO => 69, SalesHistoryTableMap::COL_OEHHBOXCOUNT => 70, SalesHistoryTableMap::COL_OEHHRQSTDATE => 71, SalesHistoryTableMap::COL_OEHHCANCDATE => 72, SalesHistoryTableMap::COL_OEHHCRNTUSER => 73, SalesHistoryTableMap::COL_OEHHRELEASENBR => 74, SalesHistoryTableMap::COL_INTBWHSE => 75, SalesHistoryTableMap::COL_OEHHBORDBUILDDATE => 76, SalesHistoryTableMap::COL_OEHHDEPTCODE => 77, SalesHistoryTableMap::COL_OEHHFRTINENTERED => 78, SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED => 79, SalesHistoryTableMap::COL_OEHHERFLAG => 80, SalesHistoryTableMap::COL_OEHHFRTIN => 81, SalesHistoryTableMap::COL_OEHHDROPSHIP => 82, SalesHistoryTableMap::COL_OEHHMINORDER => 83, SalesHistoryTableMap::COL_OEHHCONTRACTTERMS => 84, SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED => 85, SalesHistoryTableMap::COL_OEHHORDTYP => 86, SalesHistoryTableMap::COL_OEHHTRACKNBR => 87, SalesHistoryTableMap::COL_OEHHSOURCE => 88, SalesHistoryTableMap::COL_OEHHCCAPRV => 89, SalesHistoryTableMap::COL_OEHHPICKFMATTYPE => 90, SalesHistoryTableMap::COL_OEHHINVCFMATTYPE => 91, SalesHistoryTableMap::COL_OEHHCASHAMT => 92, SalesHistoryTableMap::COL_OEHHCHECKAMT => 93, SalesHistoryTableMap::COL_OEHHCHECKNBR => 94, SalesHistoryTableMap::COL_OEHHDEPOSITAMT => 95, SalesHistoryTableMap::COL_OEHHDEPOSITNBR => 96, SalesHistoryTableMap::COL_OEHHCCAMT => 97, SalesHistoryTableMap::COL_OEHHOTAXSUB => 98, SalesHistoryTableMap::COL_OEHHONONTAXSUB => 99, SalesHistoryTableMap::COL_OEHHOTAXTOT => 100, SalesHistoryTableMap::COL_OEHHOORDRTOT => 101, SalesHistoryTableMap::COL_OEHHPICKPRINTDATE => 102, SalesHistoryTableMap::COL_OEHHPICKPRINTTIME => 103, SalesHistoryTableMap::COL_OEHHCONT => 104, SalesHistoryTableMap::COL_OEHHCONTTELEINTL => 105, SalesHistoryTableMap::COL_OEHHCONTTELENBR => 106, SalesHistoryTableMap::COL_OEHHCONTTELEEXT => 107, SalesHistoryTableMap::COL_OEHHCONTFAXINTL => 108, SalesHistoryTableMap::COL_OEHHCONTFAXNBR => 109, SalesHistoryTableMap::COL_OEHHSHIPACCT => 110, SalesHistoryTableMap::COL_OEHHCHGDUE => 111, SalesHistoryTableMap::COL_OEHHADDLPRICDISC => 112, SalesHistoryTableMap::COL_OEHHALLSHIP => 113, SalesHistoryTableMap::COL_OEHHQTYORDERAMT => 114, SalesHistoryTableMap::COL_OEHHCREDITAPPLIED => 115, SalesHistoryTableMap::COL_OEHHINVCPRINTDATE => 116, SalesHistoryTableMap::COL_OEHHINVCPRINTTIME => 117, SalesHistoryTableMap::COL_OEHHDISCFRT => 118, SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP => 119, SalesHistoryTableMap::COL_OEHHCONTEMAIL => 120, SalesHistoryTableMap::COL_OEHHMANUALFRT => 121, SalesHistoryTableMap::COL_OEHHINTERNALFRT => 122, SalesHistoryTableMap::COL_OEHHFRTCOST => 123, SalesHistoryTableMap::COL_OEHHROUTE => 124, SalesHistoryTableMap::COL_OEHHROUTESEQ => 125, SalesHistoryTableMap::COL_OEHHFRTTAXCODE1 => 126, SalesHistoryTableMap::COL_OEHHFRTTAXAMT1 => 127, SalesHistoryTableMap::COL_OEHHFRTTAXCODE2 => 128, SalesHistoryTableMap::COL_OEHHFRTTAXAMT2 => 129, SalesHistoryTableMap::COL_OEHHFRTTAXCODE3 => 130, SalesHistoryTableMap::COL_OEHHFRTTAXAMT3 => 131, SalesHistoryTableMap::COL_OEHHFRTTAXCODE4 => 132, SalesHistoryTableMap::COL_OEHHFRTTAXAMT4 => 133, SalesHistoryTableMap::COL_OEHHFRTTAXCODE5 => 134, SalesHistoryTableMap::COL_OEHHFRTTAXAMT5 => 135, SalesHistoryTableMap::COL_OEHHEDI855SENT => 136, SalesHistoryTableMap::COL_OEHHFRT3RDPARTY => 137, SalesHistoryTableMap::COL_OEHHFOB => 138, SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN => 139, SalesHistoryTableMap::COL_OEHHINDUSTCONFORM => 140, SalesHistoryTableMap::COL_OEHHCSTKCONSIGN => 141, SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT => 142, SalesHistoryTableMap::COL_OEHHMFGID => 143, SalesHistoryTableMap::COL_OEHHSTOREID => 144, SalesHistoryTableMap::COL_OEHHPICKQUEUE => 145, SalesHistoryTableMap::COL_OEHHARRVDATE => 146, SalesHistoryTableMap::COL_OEHHSURCHGSTAT => 147, SalesHistoryTableMap::COL_OEHHFRTGRUP => 148, SalesHistoryTableMap::COL_OEHHCOMMORIDE => 149, SalesHistoryTableMap::COL_OEHHCHRGSPLT => 150, SalesHistoryTableMap::COL_OEHHACCCAPRV => 151, SalesHistoryTableMap::COL_OEHHORIGORDRNBR => 152, SalesHistoryTableMap::COL_OEHHPOSTDATE => 153, SalesHistoryTableMap::COL_OEHHDISCDATE1 => 154, SalesHistoryTableMap::COL_OEHHDISCPCT1 => 155, SalesHistoryTableMap::COL_OEHHDUEDATE1 => 156, SalesHistoryTableMap::COL_OEHHDUEAMT1 => 157, SalesHistoryTableMap::COL_OEHHDUEPCT1 => 158, SalesHistoryTableMap::COL_OEHHDISCDATE2 => 159, SalesHistoryTableMap::COL_OEHHDISCPCT2 => 160, SalesHistoryTableMap::COL_OEHHDUEDATE2 => 161, SalesHistoryTableMap::COL_OEHHDUEAMT2 => 162, SalesHistoryTableMap::COL_OEHHDUEPCT2 => 163, SalesHistoryTableMap::COL_OEHHDISCDATE3 => 164, SalesHistoryTableMap::COL_OEHHDISCPCT3 => 165, SalesHistoryTableMap::COL_OEHHDUEDATE3 => 166, SalesHistoryTableMap::COL_OEHHDUEAMT3 => 167, SalesHistoryTableMap::COL_OEHHDUEPCT3 => 168, SalesHistoryTableMap::COL_OEHHDISCDATE4 => 169, SalesHistoryTableMap::COL_OEHHDISCPCT4 => 170, SalesHistoryTableMap::COL_OEHHDUEDATE4 => 171, SalesHistoryTableMap::COL_OEHHDUEAMT4 => 172, SalesHistoryTableMap::COL_OEHHDUEPCT4 => 173, SalesHistoryTableMap::COL_OEHHDISCDATE5 => 174, SalesHistoryTableMap::COL_OEHHDISCPCT5 => 175, SalesHistoryTableMap::COL_OEHHDUEDATE5 => 176, SalesHistoryTableMap::COL_OEHHDUEAMT5 => 177, SalesHistoryTableMap::COL_OEHHDUEPCT5 => 178, SalesHistoryTableMap::COL_OEHHDISCDATE6 => 179, SalesHistoryTableMap::COL_OEHHDISCPCT6 => 180, SalesHistoryTableMap::COL_OEHHDUEDATE6 => 181, SalesHistoryTableMap::COL_OEHHDUEAMT6 => 182, SalesHistoryTableMap::COL_OEHHDUEPCT6 => 183, SalesHistoryTableMap::COL_OEHHREFNBR => 184, SalesHistoryTableMap::COL_OEHHACPROGNBR => 185, SalesHistoryTableMap::COL_OEHHACPROGEXPDATE => 186, SalesHistoryTableMap::COL_DATEUPDTD => 187, SalesHistoryTableMap::COL_TIMEUPDTD => 188, SalesHistoryTableMap::COL_DUMMY => 189, ],
        self::TYPE_FIELDNAME     => ['OehhNbr' => 0, 'OehhYear' => 1, 'OehhStat' => 2, 'OehhHold' => 3, 'ArcuCustId' => 4, 'ArstShipId' => 5, 'OehhStName' => 6, 'OehhStLastName' => 7, 'OehhStFirstName' => 8, 'OehhStAdr1' => 9, 'OehhStAdr2' => 10, 'OehhStAdr3' => 11, 'OehhStCtry' => 12, 'OehhStCity' => 13, 'OehhStStat' => 14, 'OehhStZipCode' => 15, 'OehhCustPo' => 16, 'OehhOrdrDate' => 17, 'ArtmTermCd' => 18, 'ArtbShipVia' => 19, 'ArinInvNbr' => 20, 'OehhInvDate' => 21, 'OehhGLPd' => 22, 'ArspSalePer1' => 23, 'OehhSp1Pct' => 24, 'ArspSalePer2' => 25, 'OehhSp2Pct' => 26, 'ArspSalePer3' => 27, 'OehhSp3Pct' => 28, 'OehhCntrNbr' => 29, 'OehhWiBatch' => 30, 'OehhDropRelHold' => 31, 'OehhTaxSub' => 32, 'OehhNonTaxSub' => 33, 'OehhTaxTot' => 34, 'OehhFrtTot' => 35, 'OehhMiscTot' => 36, 'OehhOrdrTot' => 37, 'OehhCostTot' => 38, 'OehhSpCommLock' => 39, 'OehhTakenDate' => 40, 'OehhTakenTime' => 41, 'OehhPickDate' => 42, 'OehhPickTime' => 43, 'OehhPackDate' => 44, 'OehhPackTime' => 45, 'OehhVerifyDate' => 46, 'OehhVerifyTime' => 47, 'OehhCreditMemo' => 48, 'OehhBookedYn' => 49, 'IntbWhseOrig' => 50, 'OehhBtStat' => 51, 'OehhShipComp' => 52, 'OehhCwoFlag' => 53, 'OehhDivision' => 54, 'OehhTakenCode' => 55, 'OehhPickCode' => 56, 'OehhPackCode' => 57, 'OehhVerifyCode' => 58, 'OehhTotDisc' => 59, 'OehhEdiRefNbrQual' => 60, 'OehhUserCode1' => 61, 'OehhUserCode2' => 62, 'OehhUserCode3' => 63, 'OehhUserCode4' => 64, 'OehhExchCtry' => 65, 'OehhExchRate' => 66, 'OehhWghtTot' => 67, 'OehhWghtOride' => 68, 'OehhCcInfo' => 69, 'OehhBoxCount' => 70, 'OehhRqstDate' => 71, 'OehhCancDate' => 72, 'OehhCrntUser' => 73, 'OehhReleaseNbr' => 74, 'IntbWhse' => 75, 'OehhBordBuildDate' => 76, 'OehhDeptCode' => 77, 'OehhFrtInEntered' => 78, 'OehhDropShipEntered' => 79, 'OehhErFlag' => 80, 'OehhFrtIn' => 81, 'OehhDropShip' => 82, 'OehhMinOrder' => 83, 'OehhContractTerms' => 84, 'OehhDropShipBilled' => 85, 'OehhOrdTyp' => 86, 'OehhTrackNbr' => 87, 'OehhSource' => 88, 'OehhCcAprv' => 89, 'OehhPickFmatType' => 90, 'OehhInvcFmatType' => 91, 'OehhCashAmt' => 92, 'OehhCheckAmt' => 93, 'OehhCheckNbr' => 94, 'OehhDepositAmt' => 95, 'OehhDepositNbr' => 96, 'OehhCcAmt' => 97, 'OehhOTaxSub' => 98, 'OehhONonTaxSub' => 99, 'OehhOTaxTot' => 100, 'OehhOOrdrTot' => 101, 'OehhPickPrintDate' => 102, 'OehhPickPrintTime' => 103, 'OehhCont' => 104, 'OehhContTeleIntl' => 105, 'OehhContTeleNbr' => 106, 'OehhContTeleExt' => 107, 'OehhContFaxIntl' => 108, 'OehhContFaxNbr' => 109, 'OehhShipAcct' => 110, 'OehhChgDue' => 111, 'OehhAddlPricDisc' => 112, 'OehhAllShip' => 113, 'OehhQtyOrderAmt' => 114, 'OehhCreditApplied' => 115, 'OehhInvcPrintDate' => 116, 'OehhInvcPrintTime' => 117, 'OehhDiscFrt' => 118, 'OehhOrideShipComp' => 119, 'OehhContEmail' => 120, 'OehhManualFrt' => 121, 'OehhInternalFrt' => 122, 'OehhFrtCost' => 123, 'OehhRoute' => 124, 'OehhRouteSeq' => 125, 'OehhFrtTaxCode1' => 126, 'OehhFrtTaxAmt1' => 127, 'OehhFrtTaxCode2' => 128, 'OehhFrtTaxAmt2' => 129, 'OehhFrtTaxCode3' => 130, 'OehhFrtTaxAmt3' => 131, 'OehhFrtTaxCode4' => 132, 'OehhFrtTaxAmt4' => 133, 'OehhFrtTaxCode5' => 134, 'OehhFrtTaxAmt5' => 135, 'OehhEdi855Sent' => 136, 'OehhFrt3rdParty' => 137, 'OehhFob' => 138, 'OehhConfirmImagYn' => 139, 'OehhIndustConform' => 140, 'OehhCstkConsign' => 141, 'OehhLmDelayCapSent' => 142, 'OehhMfgId' => 143, 'OehhStoreId' => 144, 'OehhPickQueue' => 145, 'OehhArrvDate' => 146, 'OehhSurchgStat' => 147, 'OehhFrtGrup' => 148, 'OehhCommOride' => 149, 'OehhChrgSplt' => 150, 'OehhAcCcAprv' => 151, 'OehhOrigOrdrNbr' => 152, 'OehhPostDate' => 153, 'OehhDiscDate1' => 154, 'OehhDiscPct1' => 155, 'OehhDueDate1' => 156, 'OehhDueAmt1' => 157, 'OehhDuePct1' => 158, 'OehhDiscDate2' => 159, 'OehhDiscPct2' => 160, 'OehhDueDate2' => 161, 'OehhDueAmt2' => 162, 'OehhDuePct2' => 163, 'OehhDiscDate3' => 164, 'OehhDiscPct3' => 165, 'OehhDueDate3' => 166, 'OehhDueAmt3' => 167, 'OehhDuePct3' => 168, 'OehhDiscDate4' => 169, 'OehhDiscPct4' => 170, 'OehhDueDate4' => 171, 'OehhDueAmt4' => 172, 'OehhDuePct4' => 173, 'OehhDiscDate5' => 174, 'OehhDiscPct5' => 175, 'OehhDueDate5' => 176, 'OehhDueAmt5' => 177, 'OehhDuePct5' => 178, 'OehhDiscDate6' => 179, 'OehhDiscPct6' => 180, 'OehhDueDate6' => 181, 'OehhDueAmt6' => 182, 'OehhDuePct6' => 183, 'OehhRefNbr' => 184, 'OehhAcProgNbr' => 185, 'OehhAcProgExpDate' => 186, 'DateUpdtd' => 187, 'TimeUpdtd' => 188, 'dummy' => 189, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Oehhnbr' => 'OEHHNBR',
        'SalesHistory.Oehhnbr' => 'OEHHNBR',
        'oehhnbr' => 'OEHHNBR',
        'salesHistory.oehhnbr' => 'OEHHNBR',
        'SalesHistoryTableMap::COL_OEHHNBR' => 'OEHHNBR',
        'COL_OEHHNBR' => 'OEHHNBR',
        'OehhNbr' => 'OEHHNBR',
        'so_head_hist.OehhNbr' => 'OEHHNBR',
        'Oehhyear' => 'OEHHYEAR',
        'SalesHistory.Oehhyear' => 'OEHHYEAR',
        'oehhyear' => 'OEHHYEAR',
        'salesHistory.oehhyear' => 'OEHHYEAR',
        'SalesHistoryTableMap::COL_OEHHYEAR' => 'OEHHYEAR',
        'COL_OEHHYEAR' => 'OEHHYEAR',
        'OehhYear' => 'OEHHYEAR',
        'so_head_hist.OehhYear' => 'OEHHYEAR',
        'Oehhstat' => 'OEHHSTAT',
        'SalesHistory.Oehhstat' => 'OEHHSTAT',
        'oehhstat' => 'OEHHSTAT',
        'salesHistory.oehhstat' => 'OEHHSTAT',
        'SalesHistoryTableMap::COL_OEHHSTAT' => 'OEHHSTAT',
        'COL_OEHHSTAT' => 'OEHHSTAT',
        'OehhStat' => 'OEHHSTAT',
        'so_head_hist.OehhStat' => 'OEHHSTAT',
        'Oehhhold' => 'OEHHHOLD',
        'SalesHistory.Oehhhold' => 'OEHHHOLD',
        'oehhhold' => 'OEHHHOLD',
        'salesHistory.oehhhold' => 'OEHHHOLD',
        'SalesHistoryTableMap::COL_OEHHHOLD' => 'OEHHHOLD',
        'COL_OEHHHOLD' => 'OEHHHOLD',
        'OehhHold' => 'OEHHHOLD',
        'so_head_hist.OehhHold' => 'OEHHHOLD',
        'Arcucustid' => 'ARCUCUSTID',
        'SalesHistory.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'salesHistory.arcucustid' => 'ARCUCUSTID',
        'SalesHistoryTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'so_head_hist.ArcuCustId' => 'ARCUCUSTID',
        'Arstshipid' => 'ARSTSHIPID',
        'SalesHistory.Arstshipid' => 'ARSTSHIPID',
        'arstshipid' => 'ARSTSHIPID',
        'salesHistory.arstshipid' => 'ARSTSHIPID',
        'SalesHistoryTableMap::COL_ARSTSHIPID' => 'ARSTSHIPID',
        'COL_ARSTSHIPID' => 'ARSTSHIPID',
        'ArstShipId' => 'ARSTSHIPID',
        'so_head_hist.ArstShipId' => 'ARSTSHIPID',
        'Oehhstname' => 'OEHHSTNAME',
        'SalesHistory.Oehhstname' => 'OEHHSTNAME',
        'oehhstname' => 'OEHHSTNAME',
        'salesHistory.oehhstname' => 'OEHHSTNAME',
        'SalesHistoryTableMap::COL_OEHHSTNAME' => 'OEHHSTNAME',
        'COL_OEHHSTNAME' => 'OEHHSTNAME',
        'OehhStName' => 'OEHHSTNAME',
        'so_head_hist.OehhStName' => 'OEHHSTNAME',
        'Oehhstlastname' => 'OEHHSTLASTNAME',
        'SalesHistory.Oehhstlastname' => 'OEHHSTLASTNAME',
        'oehhstlastname' => 'OEHHSTLASTNAME',
        'salesHistory.oehhstlastname' => 'OEHHSTLASTNAME',
        'SalesHistoryTableMap::COL_OEHHSTLASTNAME' => 'OEHHSTLASTNAME',
        'COL_OEHHSTLASTNAME' => 'OEHHSTLASTNAME',
        'OehhStLastName' => 'OEHHSTLASTNAME',
        'so_head_hist.OehhStLastName' => 'OEHHSTLASTNAME',
        'Oehhstfirstname' => 'OEHHSTFIRSTNAME',
        'SalesHistory.Oehhstfirstname' => 'OEHHSTFIRSTNAME',
        'oehhstfirstname' => 'OEHHSTFIRSTNAME',
        'salesHistory.oehhstfirstname' => 'OEHHSTFIRSTNAME',
        'SalesHistoryTableMap::COL_OEHHSTFIRSTNAME' => 'OEHHSTFIRSTNAME',
        'COL_OEHHSTFIRSTNAME' => 'OEHHSTFIRSTNAME',
        'OehhStFirstName' => 'OEHHSTFIRSTNAME',
        'so_head_hist.OehhStFirstName' => 'OEHHSTFIRSTNAME',
        'Oehhstadr1' => 'OEHHSTADR1',
        'SalesHistory.Oehhstadr1' => 'OEHHSTADR1',
        'oehhstadr1' => 'OEHHSTADR1',
        'salesHistory.oehhstadr1' => 'OEHHSTADR1',
        'SalesHistoryTableMap::COL_OEHHSTADR1' => 'OEHHSTADR1',
        'COL_OEHHSTADR1' => 'OEHHSTADR1',
        'OehhStAdr1' => 'OEHHSTADR1',
        'so_head_hist.OehhStAdr1' => 'OEHHSTADR1',
        'Oehhstadr2' => 'OEHHSTADR2',
        'SalesHistory.Oehhstadr2' => 'OEHHSTADR2',
        'oehhstadr2' => 'OEHHSTADR2',
        'salesHistory.oehhstadr2' => 'OEHHSTADR2',
        'SalesHistoryTableMap::COL_OEHHSTADR2' => 'OEHHSTADR2',
        'COL_OEHHSTADR2' => 'OEHHSTADR2',
        'OehhStAdr2' => 'OEHHSTADR2',
        'so_head_hist.OehhStAdr2' => 'OEHHSTADR2',
        'Oehhstadr3' => 'OEHHSTADR3',
        'SalesHistory.Oehhstadr3' => 'OEHHSTADR3',
        'oehhstadr3' => 'OEHHSTADR3',
        'salesHistory.oehhstadr3' => 'OEHHSTADR3',
        'SalesHistoryTableMap::COL_OEHHSTADR3' => 'OEHHSTADR3',
        'COL_OEHHSTADR3' => 'OEHHSTADR3',
        'OehhStAdr3' => 'OEHHSTADR3',
        'so_head_hist.OehhStAdr3' => 'OEHHSTADR3',
        'Oehhstctry' => 'OEHHSTCTRY',
        'SalesHistory.Oehhstctry' => 'OEHHSTCTRY',
        'oehhstctry' => 'OEHHSTCTRY',
        'salesHistory.oehhstctry' => 'OEHHSTCTRY',
        'SalesHistoryTableMap::COL_OEHHSTCTRY' => 'OEHHSTCTRY',
        'COL_OEHHSTCTRY' => 'OEHHSTCTRY',
        'OehhStCtry' => 'OEHHSTCTRY',
        'so_head_hist.OehhStCtry' => 'OEHHSTCTRY',
        'Oehhstcity' => 'OEHHSTCITY',
        'SalesHistory.Oehhstcity' => 'OEHHSTCITY',
        'oehhstcity' => 'OEHHSTCITY',
        'salesHistory.oehhstcity' => 'OEHHSTCITY',
        'SalesHistoryTableMap::COL_OEHHSTCITY' => 'OEHHSTCITY',
        'COL_OEHHSTCITY' => 'OEHHSTCITY',
        'OehhStCity' => 'OEHHSTCITY',
        'so_head_hist.OehhStCity' => 'OEHHSTCITY',
        'Oehhststat' => 'OEHHSTSTAT',
        'SalesHistory.Oehhststat' => 'OEHHSTSTAT',
        'oehhststat' => 'OEHHSTSTAT',
        'salesHistory.oehhststat' => 'OEHHSTSTAT',
        'SalesHistoryTableMap::COL_OEHHSTSTAT' => 'OEHHSTSTAT',
        'COL_OEHHSTSTAT' => 'OEHHSTSTAT',
        'OehhStStat' => 'OEHHSTSTAT',
        'so_head_hist.OehhStStat' => 'OEHHSTSTAT',
        'Oehhstzipcode' => 'OEHHSTZIPCODE',
        'SalesHistory.Oehhstzipcode' => 'OEHHSTZIPCODE',
        'oehhstzipcode' => 'OEHHSTZIPCODE',
        'salesHistory.oehhstzipcode' => 'OEHHSTZIPCODE',
        'SalesHistoryTableMap::COL_OEHHSTZIPCODE' => 'OEHHSTZIPCODE',
        'COL_OEHHSTZIPCODE' => 'OEHHSTZIPCODE',
        'OehhStZipCode' => 'OEHHSTZIPCODE',
        'so_head_hist.OehhStZipCode' => 'OEHHSTZIPCODE',
        'Oehhcustpo' => 'OEHHCUSTPO',
        'SalesHistory.Oehhcustpo' => 'OEHHCUSTPO',
        'oehhcustpo' => 'OEHHCUSTPO',
        'salesHistory.oehhcustpo' => 'OEHHCUSTPO',
        'SalesHistoryTableMap::COL_OEHHCUSTPO' => 'OEHHCUSTPO',
        'COL_OEHHCUSTPO' => 'OEHHCUSTPO',
        'OehhCustPo' => 'OEHHCUSTPO',
        'so_head_hist.OehhCustPo' => 'OEHHCUSTPO',
        'Oehhordrdate' => 'OEHHORDRDATE',
        'SalesHistory.Oehhordrdate' => 'OEHHORDRDATE',
        'oehhordrdate' => 'OEHHORDRDATE',
        'salesHistory.oehhordrdate' => 'OEHHORDRDATE',
        'SalesHistoryTableMap::COL_OEHHORDRDATE' => 'OEHHORDRDATE',
        'COL_OEHHORDRDATE' => 'OEHHORDRDATE',
        'OehhOrdrDate' => 'OEHHORDRDATE',
        'so_head_hist.OehhOrdrDate' => 'OEHHORDRDATE',
        'Artmtermcd' => 'ARTMTERMCD',
        'SalesHistory.Artmtermcd' => 'ARTMTERMCD',
        'artmtermcd' => 'ARTMTERMCD',
        'salesHistory.artmtermcd' => 'ARTMTERMCD',
        'SalesHistoryTableMap::COL_ARTMTERMCD' => 'ARTMTERMCD',
        'COL_ARTMTERMCD' => 'ARTMTERMCD',
        'ArtmTermCd' => 'ARTMTERMCD',
        'so_head_hist.ArtmTermCd' => 'ARTMTERMCD',
        'Artbshipvia' => 'ARTBSHIPVIA',
        'SalesHistory.Artbshipvia' => 'ARTBSHIPVIA',
        'artbshipvia' => 'ARTBSHIPVIA',
        'salesHistory.artbshipvia' => 'ARTBSHIPVIA',
        'SalesHistoryTableMap::COL_ARTBSHIPVIA' => 'ARTBSHIPVIA',
        'COL_ARTBSHIPVIA' => 'ARTBSHIPVIA',
        'ArtbShipVia' => 'ARTBSHIPVIA',
        'so_head_hist.ArtbShipVia' => 'ARTBSHIPVIA',
        'Arininvnbr' => 'ARININVNBR',
        'SalesHistory.Arininvnbr' => 'ARININVNBR',
        'arininvnbr' => 'ARININVNBR',
        'salesHistory.arininvnbr' => 'ARININVNBR',
        'SalesHistoryTableMap::COL_ARININVNBR' => 'ARININVNBR',
        'COL_ARININVNBR' => 'ARININVNBR',
        'ArinInvNbr' => 'ARININVNBR',
        'so_head_hist.ArinInvNbr' => 'ARININVNBR',
        'Oehhinvdate' => 'OEHHINVDATE',
        'SalesHistory.Oehhinvdate' => 'OEHHINVDATE',
        'oehhinvdate' => 'OEHHINVDATE',
        'salesHistory.oehhinvdate' => 'OEHHINVDATE',
        'SalesHistoryTableMap::COL_OEHHINVDATE' => 'OEHHINVDATE',
        'COL_OEHHINVDATE' => 'OEHHINVDATE',
        'OehhInvDate' => 'OEHHINVDATE',
        'so_head_hist.OehhInvDate' => 'OEHHINVDATE',
        'Oehhglpd' => 'OEHHGLPD',
        'SalesHistory.Oehhglpd' => 'OEHHGLPD',
        'oehhglpd' => 'OEHHGLPD',
        'salesHistory.oehhglpd' => 'OEHHGLPD',
        'SalesHistoryTableMap::COL_OEHHGLPD' => 'OEHHGLPD',
        'COL_OEHHGLPD' => 'OEHHGLPD',
        'OehhGLPd' => 'OEHHGLPD',
        'so_head_hist.OehhGLPd' => 'OEHHGLPD',
        'Arspsaleper1' => 'ARSPSALEPER1',
        'SalesHistory.Arspsaleper1' => 'ARSPSALEPER1',
        'arspsaleper1' => 'ARSPSALEPER1',
        'salesHistory.arspsaleper1' => 'ARSPSALEPER1',
        'SalesHistoryTableMap::COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'ArspSalePer1' => 'ARSPSALEPER1',
        'so_head_hist.ArspSalePer1' => 'ARSPSALEPER1',
        'Oehhsp1pct' => 'OEHHSP1PCT',
        'SalesHistory.Oehhsp1pct' => 'OEHHSP1PCT',
        'oehhsp1pct' => 'OEHHSP1PCT',
        'salesHistory.oehhsp1pct' => 'OEHHSP1PCT',
        'SalesHistoryTableMap::COL_OEHHSP1PCT' => 'OEHHSP1PCT',
        'COL_OEHHSP1PCT' => 'OEHHSP1PCT',
        'OehhSp1Pct' => 'OEHHSP1PCT',
        'so_head_hist.OehhSp1Pct' => 'OEHHSP1PCT',
        'Arspsaleper2' => 'ARSPSALEPER2',
        'SalesHistory.Arspsaleper2' => 'ARSPSALEPER2',
        'arspsaleper2' => 'ARSPSALEPER2',
        'salesHistory.arspsaleper2' => 'ARSPSALEPER2',
        'SalesHistoryTableMap::COL_ARSPSALEPER2' => 'ARSPSALEPER2',
        'COL_ARSPSALEPER2' => 'ARSPSALEPER2',
        'ArspSalePer2' => 'ARSPSALEPER2',
        'so_head_hist.ArspSalePer2' => 'ARSPSALEPER2',
        'Oehhsp2pct' => 'OEHHSP2PCT',
        'SalesHistory.Oehhsp2pct' => 'OEHHSP2PCT',
        'oehhsp2pct' => 'OEHHSP2PCT',
        'salesHistory.oehhsp2pct' => 'OEHHSP2PCT',
        'SalesHistoryTableMap::COL_OEHHSP2PCT' => 'OEHHSP2PCT',
        'COL_OEHHSP2PCT' => 'OEHHSP2PCT',
        'OehhSp2Pct' => 'OEHHSP2PCT',
        'so_head_hist.OehhSp2Pct' => 'OEHHSP2PCT',
        'Arspsaleper3' => 'ARSPSALEPER3',
        'SalesHistory.Arspsaleper3' => 'ARSPSALEPER3',
        'arspsaleper3' => 'ARSPSALEPER3',
        'salesHistory.arspsaleper3' => 'ARSPSALEPER3',
        'SalesHistoryTableMap::COL_ARSPSALEPER3' => 'ARSPSALEPER3',
        'COL_ARSPSALEPER3' => 'ARSPSALEPER3',
        'ArspSalePer3' => 'ARSPSALEPER3',
        'so_head_hist.ArspSalePer3' => 'ARSPSALEPER3',
        'Oehhsp3pct' => 'OEHHSP3PCT',
        'SalesHistory.Oehhsp3pct' => 'OEHHSP3PCT',
        'oehhsp3pct' => 'OEHHSP3PCT',
        'salesHistory.oehhsp3pct' => 'OEHHSP3PCT',
        'SalesHistoryTableMap::COL_OEHHSP3PCT' => 'OEHHSP3PCT',
        'COL_OEHHSP3PCT' => 'OEHHSP3PCT',
        'OehhSp3Pct' => 'OEHHSP3PCT',
        'so_head_hist.OehhSp3Pct' => 'OEHHSP3PCT',
        'Oehhcntrnbr' => 'OEHHCNTRNBR',
        'SalesHistory.Oehhcntrnbr' => 'OEHHCNTRNBR',
        'oehhcntrnbr' => 'OEHHCNTRNBR',
        'salesHistory.oehhcntrnbr' => 'OEHHCNTRNBR',
        'SalesHistoryTableMap::COL_OEHHCNTRNBR' => 'OEHHCNTRNBR',
        'COL_OEHHCNTRNBR' => 'OEHHCNTRNBR',
        'OehhCntrNbr' => 'OEHHCNTRNBR',
        'so_head_hist.OehhCntrNbr' => 'OEHHCNTRNBR',
        'Oehhwibatch' => 'OEHHWIBATCH',
        'SalesHistory.Oehhwibatch' => 'OEHHWIBATCH',
        'oehhwibatch' => 'OEHHWIBATCH',
        'salesHistory.oehhwibatch' => 'OEHHWIBATCH',
        'SalesHistoryTableMap::COL_OEHHWIBATCH' => 'OEHHWIBATCH',
        'COL_OEHHWIBATCH' => 'OEHHWIBATCH',
        'OehhWiBatch' => 'OEHHWIBATCH',
        'so_head_hist.OehhWiBatch' => 'OEHHWIBATCH',
        'Oehhdroprelhold' => 'OEHHDROPRELHOLD',
        'SalesHistory.Oehhdroprelhold' => 'OEHHDROPRELHOLD',
        'oehhdroprelhold' => 'OEHHDROPRELHOLD',
        'salesHistory.oehhdroprelhold' => 'OEHHDROPRELHOLD',
        'SalesHistoryTableMap::COL_OEHHDROPRELHOLD' => 'OEHHDROPRELHOLD',
        'COL_OEHHDROPRELHOLD' => 'OEHHDROPRELHOLD',
        'OehhDropRelHold' => 'OEHHDROPRELHOLD',
        'so_head_hist.OehhDropRelHold' => 'OEHHDROPRELHOLD',
        'Oehhtaxsub' => 'OEHHTAXSUB',
        'SalesHistory.Oehhtaxsub' => 'OEHHTAXSUB',
        'oehhtaxsub' => 'OEHHTAXSUB',
        'salesHistory.oehhtaxsub' => 'OEHHTAXSUB',
        'SalesHistoryTableMap::COL_OEHHTAXSUB' => 'OEHHTAXSUB',
        'COL_OEHHTAXSUB' => 'OEHHTAXSUB',
        'OehhTaxSub' => 'OEHHTAXSUB',
        'so_head_hist.OehhTaxSub' => 'OEHHTAXSUB',
        'Oehhnontaxsub' => 'OEHHNONTAXSUB',
        'SalesHistory.Oehhnontaxsub' => 'OEHHNONTAXSUB',
        'oehhnontaxsub' => 'OEHHNONTAXSUB',
        'salesHistory.oehhnontaxsub' => 'OEHHNONTAXSUB',
        'SalesHistoryTableMap::COL_OEHHNONTAXSUB' => 'OEHHNONTAXSUB',
        'COL_OEHHNONTAXSUB' => 'OEHHNONTAXSUB',
        'OehhNonTaxSub' => 'OEHHNONTAXSUB',
        'so_head_hist.OehhNonTaxSub' => 'OEHHNONTAXSUB',
        'Oehhtaxtot' => 'OEHHTAXTOT',
        'SalesHistory.Oehhtaxtot' => 'OEHHTAXTOT',
        'oehhtaxtot' => 'OEHHTAXTOT',
        'salesHistory.oehhtaxtot' => 'OEHHTAXTOT',
        'SalesHistoryTableMap::COL_OEHHTAXTOT' => 'OEHHTAXTOT',
        'COL_OEHHTAXTOT' => 'OEHHTAXTOT',
        'OehhTaxTot' => 'OEHHTAXTOT',
        'so_head_hist.OehhTaxTot' => 'OEHHTAXTOT',
        'Oehhfrttot' => 'OEHHFRTTOT',
        'SalesHistory.Oehhfrttot' => 'OEHHFRTTOT',
        'oehhfrttot' => 'OEHHFRTTOT',
        'salesHistory.oehhfrttot' => 'OEHHFRTTOT',
        'SalesHistoryTableMap::COL_OEHHFRTTOT' => 'OEHHFRTTOT',
        'COL_OEHHFRTTOT' => 'OEHHFRTTOT',
        'OehhFrtTot' => 'OEHHFRTTOT',
        'so_head_hist.OehhFrtTot' => 'OEHHFRTTOT',
        'Oehhmisctot' => 'OEHHMISCTOT',
        'SalesHistory.Oehhmisctot' => 'OEHHMISCTOT',
        'oehhmisctot' => 'OEHHMISCTOT',
        'salesHistory.oehhmisctot' => 'OEHHMISCTOT',
        'SalesHistoryTableMap::COL_OEHHMISCTOT' => 'OEHHMISCTOT',
        'COL_OEHHMISCTOT' => 'OEHHMISCTOT',
        'OehhMiscTot' => 'OEHHMISCTOT',
        'so_head_hist.OehhMiscTot' => 'OEHHMISCTOT',
        'Oehhordrtot' => 'OEHHORDRTOT',
        'SalesHistory.Oehhordrtot' => 'OEHHORDRTOT',
        'oehhordrtot' => 'OEHHORDRTOT',
        'salesHistory.oehhordrtot' => 'OEHHORDRTOT',
        'SalesHistoryTableMap::COL_OEHHORDRTOT' => 'OEHHORDRTOT',
        'COL_OEHHORDRTOT' => 'OEHHORDRTOT',
        'OehhOrdrTot' => 'OEHHORDRTOT',
        'so_head_hist.OehhOrdrTot' => 'OEHHORDRTOT',
        'Oehhcosttot' => 'OEHHCOSTTOT',
        'SalesHistory.Oehhcosttot' => 'OEHHCOSTTOT',
        'oehhcosttot' => 'OEHHCOSTTOT',
        'salesHistory.oehhcosttot' => 'OEHHCOSTTOT',
        'SalesHistoryTableMap::COL_OEHHCOSTTOT' => 'OEHHCOSTTOT',
        'COL_OEHHCOSTTOT' => 'OEHHCOSTTOT',
        'OehhCostTot' => 'OEHHCOSTTOT',
        'so_head_hist.OehhCostTot' => 'OEHHCOSTTOT',
        'Oehhspcommlock' => 'OEHHSPCOMMLOCK',
        'SalesHistory.Oehhspcommlock' => 'OEHHSPCOMMLOCK',
        'oehhspcommlock' => 'OEHHSPCOMMLOCK',
        'salesHistory.oehhspcommlock' => 'OEHHSPCOMMLOCK',
        'SalesHistoryTableMap::COL_OEHHSPCOMMLOCK' => 'OEHHSPCOMMLOCK',
        'COL_OEHHSPCOMMLOCK' => 'OEHHSPCOMMLOCK',
        'OehhSpCommLock' => 'OEHHSPCOMMLOCK',
        'so_head_hist.OehhSpCommLock' => 'OEHHSPCOMMLOCK',
        'Oehhtakendate' => 'OEHHTAKENDATE',
        'SalesHistory.Oehhtakendate' => 'OEHHTAKENDATE',
        'oehhtakendate' => 'OEHHTAKENDATE',
        'salesHistory.oehhtakendate' => 'OEHHTAKENDATE',
        'SalesHistoryTableMap::COL_OEHHTAKENDATE' => 'OEHHTAKENDATE',
        'COL_OEHHTAKENDATE' => 'OEHHTAKENDATE',
        'OehhTakenDate' => 'OEHHTAKENDATE',
        'so_head_hist.OehhTakenDate' => 'OEHHTAKENDATE',
        'Oehhtakentime' => 'OEHHTAKENTIME',
        'SalesHistory.Oehhtakentime' => 'OEHHTAKENTIME',
        'oehhtakentime' => 'OEHHTAKENTIME',
        'salesHistory.oehhtakentime' => 'OEHHTAKENTIME',
        'SalesHistoryTableMap::COL_OEHHTAKENTIME' => 'OEHHTAKENTIME',
        'COL_OEHHTAKENTIME' => 'OEHHTAKENTIME',
        'OehhTakenTime' => 'OEHHTAKENTIME',
        'so_head_hist.OehhTakenTime' => 'OEHHTAKENTIME',
        'Oehhpickdate' => 'OEHHPICKDATE',
        'SalesHistory.Oehhpickdate' => 'OEHHPICKDATE',
        'oehhpickdate' => 'OEHHPICKDATE',
        'salesHistory.oehhpickdate' => 'OEHHPICKDATE',
        'SalesHistoryTableMap::COL_OEHHPICKDATE' => 'OEHHPICKDATE',
        'COL_OEHHPICKDATE' => 'OEHHPICKDATE',
        'OehhPickDate' => 'OEHHPICKDATE',
        'so_head_hist.OehhPickDate' => 'OEHHPICKDATE',
        'Oehhpicktime' => 'OEHHPICKTIME',
        'SalesHistory.Oehhpicktime' => 'OEHHPICKTIME',
        'oehhpicktime' => 'OEHHPICKTIME',
        'salesHistory.oehhpicktime' => 'OEHHPICKTIME',
        'SalesHistoryTableMap::COL_OEHHPICKTIME' => 'OEHHPICKTIME',
        'COL_OEHHPICKTIME' => 'OEHHPICKTIME',
        'OehhPickTime' => 'OEHHPICKTIME',
        'so_head_hist.OehhPickTime' => 'OEHHPICKTIME',
        'Oehhpackdate' => 'OEHHPACKDATE',
        'SalesHistory.Oehhpackdate' => 'OEHHPACKDATE',
        'oehhpackdate' => 'OEHHPACKDATE',
        'salesHistory.oehhpackdate' => 'OEHHPACKDATE',
        'SalesHistoryTableMap::COL_OEHHPACKDATE' => 'OEHHPACKDATE',
        'COL_OEHHPACKDATE' => 'OEHHPACKDATE',
        'OehhPackDate' => 'OEHHPACKDATE',
        'so_head_hist.OehhPackDate' => 'OEHHPACKDATE',
        'Oehhpacktime' => 'OEHHPACKTIME',
        'SalesHistory.Oehhpacktime' => 'OEHHPACKTIME',
        'oehhpacktime' => 'OEHHPACKTIME',
        'salesHistory.oehhpacktime' => 'OEHHPACKTIME',
        'SalesHistoryTableMap::COL_OEHHPACKTIME' => 'OEHHPACKTIME',
        'COL_OEHHPACKTIME' => 'OEHHPACKTIME',
        'OehhPackTime' => 'OEHHPACKTIME',
        'so_head_hist.OehhPackTime' => 'OEHHPACKTIME',
        'Oehhverifydate' => 'OEHHVERIFYDATE',
        'SalesHistory.Oehhverifydate' => 'OEHHVERIFYDATE',
        'oehhverifydate' => 'OEHHVERIFYDATE',
        'salesHistory.oehhverifydate' => 'OEHHVERIFYDATE',
        'SalesHistoryTableMap::COL_OEHHVERIFYDATE' => 'OEHHVERIFYDATE',
        'COL_OEHHVERIFYDATE' => 'OEHHVERIFYDATE',
        'OehhVerifyDate' => 'OEHHVERIFYDATE',
        'so_head_hist.OehhVerifyDate' => 'OEHHVERIFYDATE',
        'Oehhverifytime' => 'OEHHVERIFYTIME',
        'SalesHistory.Oehhverifytime' => 'OEHHVERIFYTIME',
        'oehhverifytime' => 'OEHHVERIFYTIME',
        'salesHistory.oehhverifytime' => 'OEHHVERIFYTIME',
        'SalesHistoryTableMap::COL_OEHHVERIFYTIME' => 'OEHHVERIFYTIME',
        'COL_OEHHVERIFYTIME' => 'OEHHVERIFYTIME',
        'OehhVerifyTime' => 'OEHHVERIFYTIME',
        'so_head_hist.OehhVerifyTime' => 'OEHHVERIFYTIME',
        'Oehhcreditmemo' => 'OEHHCREDITMEMO',
        'SalesHistory.Oehhcreditmemo' => 'OEHHCREDITMEMO',
        'oehhcreditmemo' => 'OEHHCREDITMEMO',
        'salesHistory.oehhcreditmemo' => 'OEHHCREDITMEMO',
        'SalesHistoryTableMap::COL_OEHHCREDITMEMO' => 'OEHHCREDITMEMO',
        'COL_OEHHCREDITMEMO' => 'OEHHCREDITMEMO',
        'OehhCreditMemo' => 'OEHHCREDITMEMO',
        'so_head_hist.OehhCreditMemo' => 'OEHHCREDITMEMO',
        'Oehhbookedyn' => 'OEHHBOOKEDYN',
        'SalesHistory.Oehhbookedyn' => 'OEHHBOOKEDYN',
        'oehhbookedyn' => 'OEHHBOOKEDYN',
        'salesHistory.oehhbookedyn' => 'OEHHBOOKEDYN',
        'SalesHistoryTableMap::COL_OEHHBOOKEDYN' => 'OEHHBOOKEDYN',
        'COL_OEHHBOOKEDYN' => 'OEHHBOOKEDYN',
        'OehhBookedYn' => 'OEHHBOOKEDYN',
        'so_head_hist.OehhBookedYn' => 'OEHHBOOKEDYN',
        'Intbwhseorig' => 'INTBWHSEORIG',
        'SalesHistory.Intbwhseorig' => 'INTBWHSEORIG',
        'intbwhseorig' => 'INTBWHSEORIG',
        'salesHistory.intbwhseorig' => 'INTBWHSEORIG',
        'SalesHistoryTableMap::COL_INTBWHSEORIG' => 'INTBWHSEORIG',
        'COL_INTBWHSEORIG' => 'INTBWHSEORIG',
        'IntbWhseOrig' => 'INTBWHSEORIG',
        'so_head_hist.IntbWhseOrig' => 'INTBWHSEORIG',
        'Oehhbtstat' => 'OEHHBTSTAT',
        'SalesHistory.Oehhbtstat' => 'OEHHBTSTAT',
        'oehhbtstat' => 'OEHHBTSTAT',
        'salesHistory.oehhbtstat' => 'OEHHBTSTAT',
        'SalesHistoryTableMap::COL_OEHHBTSTAT' => 'OEHHBTSTAT',
        'COL_OEHHBTSTAT' => 'OEHHBTSTAT',
        'OehhBtStat' => 'OEHHBTSTAT',
        'so_head_hist.OehhBtStat' => 'OEHHBTSTAT',
        'Oehhshipcomp' => 'OEHHSHIPCOMP',
        'SalesHistory.Oehhshipcomp' => 'OEHHSHIPCOMP',
        'oehhshipcomp' => 'OEHHSHIPCOMP',
        'salesHistory.oehhshipcomp' => 'OEHHSHIPCOMP',
        'SalesHistoryTableMap::COL_OEHHSHIPCOMP' => 'OEHHSHIPCOMP',
        'COL_OEHHSHIPCOMP' => 'OEHHSHIPCOMP',
        'OehhShipComp' => 'OEHHSHIPCOMP',
        'so_head_hist.OehhShipComp' => 'OEHHSHIPCOMP',
        'Oehhcwoflag' => 'OEHHCWOFLAG',
        'SalesHistory.Oehhcwoflag' => 'OEHHCWOFLAG',
        'oehhcwoflag' => 'OEHHCWOFLAG',
        'salesHistory.oehhcwoflag' => 'OEHHCWOFLAG',
        'SalesHistoryTableMap::COL_OEHHCWOFLAG' => 'OEHHCWOFLAG',
        'COL_OEHHCWOFLAG' => 'OEHHCWOFLAG',
        'OehhCwoFlag' => 'OEHHCWOFLAG',
        'so_head_hist.OehhCwoFlag' => 'OEHHCWOFLAG',
        'Oehhdivision' => 'OEHHDIVISION',
        'SalesHistory.Oehhdivision' => 'OEHHDIVISION',
        'oehhdivision' => 'OEHHDIVISION',
        'salesHistory.oehhdivision' => 'OEHHDIVISION',
        'SalesHistoryTableMap::COL_OEHHDIVISION' => 'OEHHDIVISION',
        'COL_OEHHDIVISION' => 'OEHHDIVISION',
        'OehhDivision' => 'OEHHDIVISION',
        'so_head_hist.OehhDivision' => 'OEHHDIVISION',
        'Oehhtakencode' => 'OEHHTAKENCODE',
        'SalesHistory.Oehhtakencode' => 'OEHHTAKENCODE',
        'oehhtakencode' => 'OEHHTAKENCODE',
        'salesHistory.oehhtakencode' => 'OEHHTAKENCODE',
        'SalesHistoryTableMap::COL_OEHHTAKENCODE' => 'OEHHTAKENCODE',
        'COL_OEHHTAKENCODE' => 'OEHHTAKENCODE',
        'OehhTakenCode' => 'OEHHTAKENCODE',
        'so_head_hist.OehhTakenCode' => 'OEHHTAKENCODE',
        'Oehhpickcode' => 'OEHHPICKCODE',
        'SalesHistory.Oehhpickcode' => 'OEHHPICKCODE',
        'oehhpickcode' => 'OEHHPICKCODE',
        'salesHistory.oehhpickcode' => 'OEHHPICKCODE',
        'SalesHistoryTableMap::COL_OEHHPICKCODE' => 'OEHHPICKCODE',
        'COL_OEHHPICKCODE' => 'OEHHPICKCODE',
        'OehhPickCode' => 'OEHHPICKCODE',
        'so_head_hist.OehhPickCode' => 'OEHHPICKCODE',
        'Oehhpackcode' => 'OEHHPACKCODE',
        'SalesHistory.Oehhpackcode' => 'OEHHPACKCODE',
        'oehhpackcode' => 'OEHHPACKCODE',
        'salesHistory.oehhpackcode' => 'OEHHPACKCODE',
        'SalesHistoryTableMap::COL_OEHHPACKCODE' => 'OEHHPACKCODE',
        'COL_OEHHPACKCODE' => 'OEHHPACKCODE',
        'OehhPackCode' => 'OEHHPACKCODE',
        'so_head_hist.OehhPackCode' => 'OEHHPACKCODE',
        'Oehhverifycode' => 'OEHHVERIFYCODE',
        'SalesHistory.Oehhverifycode' => 'OEHHVERIFYCODE',
        'oehhverifycode' => 'OEHHVERIFYCODE',
        'salesHistory.oehhverifycode' => 'OEHHVERIFYCODE',
        'SalesHistoryTableMap::COL_OEHHVERIFYCODE' => 'OEHHVERIFYCODE',
        'COL_OEHHVERIFYCODE' => 'OEHHVERIFYCODE',
        'OehhVerifyCode' => 'OEHHVERIFYCODE',
        'so_head_hist.OehhVerifyCode' => 'OEHHVERIFYCODE',
        'Oehhtotdisc' => 'OEHHTOTDISC',
        'SalesHistory.Oehhtotdisc' => 'OEHHTOTDISC',
        'oehhtotdisc' => 'OEHHTOTDISC',
        'salesHistory.oehhtotdisc' => 'OEHHTOTDISC',
        'SalesHistoryTableMap::COL_OEHHTOTDISC' => 'OEHHTOTDISC',
        'COL_OEHHTOTDISC' => 'OEHHTOTDISC',
        'OehhTotDisc' => 'OEHHTOTDISC',
        'so_head_hist.OehhTotDisc' => 'OEHHTOTDISC',
        'Oehhedirefnbrqual' => 'OEHHEDIREFNBRQUAL',
        'SalesHistory.Oehhedirefnbrqual' => 'OEHHEDIREFNBRQUAL',
        'oehhedirefnbrqual' => 'OEHHEDIREFNBRQUAL',
        'salesHistory.oehhedirefnbrqual' => 'OEHHEDIREFNBRQUAL',
        'SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL' => 'OEHHEDIREFNBRQUAL',
        'COL_OEHHEDIREFNBRQUAL' => 'OEHHEDIREFNBRQUAL',
        'OehhEdiRefNbrQual' => 'OEHHEDIREFNBRQUAL',
        'so_head_hist.OehhEdiRefNbrQual' => 'OEHHEDIREFNBRQUAL',
        'Oehhusercode1' => 'OEHHUSERCODE1',
        'SalesHistory.Oehhusercode1' => 'OEHHUSERCODE1',
        'oehhusercode1' => 'OEHHUSERCODE1',
        'salesHistory.oehhusercode1' => 'OEHHUSERCODE1',
        'SalesHistoryTableMap::COL_OEHHUSERCODE1' => 'OEHHUSERCODE1',
        'COL_OEHHUSERCODE1' => 'OEHHUSERCODE1',
        'OehhUserCode1' => 'OEHHUSERCODE1',
        'so_head_hist.OehhUserCode1' => 'OEHHUSERCODE1',
        'Oehhusercode2' => 'OEHHUSERCODE2',
        'SalesHistory.Oehhusercode2' => 'OEHHUSERCODE2',
        'oehhusercode2' => 'OEHHUSERCODE2',
        'salesHistory.oehhusercode2' => 'OEHHUSERCODE2',
        'SalesHistoryTableMap::COL_OEHHUSERCODE2' => 'OEHHUSERCODE2',
        'COL_OEHHUSERCODE2' => 'OEHHUSERCODE2',
        'OehhUserCode2' => 'OEHHUSERCODE2',
        'so_head_hist.OehhUserCode2' => 'OEHHUSERCODE2',
        'Oehhusercode3' => 'OEHHUSERCODE3',
        'SalesHistory.Oehhusercode3' => 'OEHHUSERCODE3',
        'oehhusercode3' => 'OEHHUSERCODE3',
        'salesHistory.oehhusercode3' => 'OEHHUSERCODE3',
        'SalesHistoryTableMap::COL_OEHHUSERCODE3' => 'OEHHUSERCODE3',
        'COL_OEHHUSERCODE3' => 'OEHHUSERCODE3',
        'OehhUserCode3' => 'OEHHUSERCODE3',
        'so_head_hist.OehhUserCode3' => 'OEHHUSERCODE3',
        'Oehhusercode4' => 'OEHHUSERCODE4',
        'SalesHistory.Oehhusercode4' => 'OEHHUSERCODE4',
        'oehhusercode4' => 'OEHHUSERCODE4',
        'salesHistory.oehhusercode4' => 'OEHHUSERCODE4',
        'SalesHistoryTableMap::COL_OEHHUSERCODE4' => 'OEHHUSERCODE4',
        'COL_OEHHUSERCODE4' => 'OEHHUSERCODE4',
        'OehhUserCode4' => 'OEHHUSERCODE4',
        'so_head_hist.OehhUserCode4' => 'OEHHUSERCODE4',
        'Oehhexchctry' => 'OEHHEXCHCTRY',
        'SalesHistory.Oehhexchctry' => 'OEHHEXCHCTRY',
        'oehhexchctry' => 'OEHHEXCHCTRY',
        'salesHistory.oehhexchctry' => 'OEHHEXCHCTRY',
        'SalesHistoryTableMap::COL_OEHHEXCHCTRY' => 'OEHHEXCHCTRY',
        'COL_OEHHEXCHCTRY' => 'OEHHEXCHCTRY',
        'OehhExchCtry' => 'OEHHEXCHCTRY',
        'so_head_hist.OehhExchCtry' => 'OEHHEXCHCTRY',
        'Oehhexchrate' => 'OEHHEXCHRATE',
        'SalesHistory.Oehhexchrate' => 'OEHHEXCHRATE',
        'oehhexchrate' => 'OEHHEXCHRATE',
        'salesHistory.oehhexchrate' => 'OEHHEXCHRATE',
        'SalesHistoryTableMap::COL_OEHHEXCHRATE' => 'OEHHEXCHRATE',
        'COL_OEHHEXCHRATE' => 'OEHHEXCHRATE',
        'OehhExchRate' => 'OEHHEXCHRATE',
        'so_head_hist.OehhExchRate' => 'OEHHEXCHRATE',
        'Oehhwghttot' => 'OEHHWGHTTOT',
        'SalesHistory.Oehhwghttot' => 'OEHHWGHTTOT',
        'oehhwghttot' => 'OEHHWGHTTOT',
        'salesHistory.oehhwghttot' => 'OEHHWGHTTOT',
        'SalesHistoryTableMap::COL_OEHHWGHTTOT' => 'OEHHWGHTTOT',
        'COL_OEHHWGHTTOT' => 'OEHHWGHTTOT',
        'OehhWghtTot' => 'OEHHWGHTTOT',
        'so_head_hist.OehhWghtTot' => 'OEHHWGHTTOT',
        'Oehhwghtoride' => 'OEHHWGHTORIDE',
        'SalesHistory.Oehhwghtoride' => 'OEHHWGHTORIDE',
        'oehhwghtoride' => 'OEHHWGHTORIDE',
        'salesHistory.oehhwghtoride' => 'OEHHWGHTORIDE',
        'SalesHistoryTableMap::COL_OEHHWGHTORIDE' => 'OEHHWGHTORIDE',
        'COL_OEHHWGHTORIDE' => 'OEHHWGHTORIDE',
        'OehhWghtOride' => 'OEHHWGHTORIDE',
        'so_head_hist.OehhWghtOride' => 'OEHHWGHTORIDE',
        'Oehhccinfo' => 'OEHHCCINFO',
        'SalesHistory.Oehhccinfo' => 'OEHHCCINFO',
        'oehhccinfo' => 'OEHHCCINFO',
        'salesHistory.oehhccinfo' => 'OEHHCCINFO',
        'SalesHistoryTableMap::COL_OEHHCCINFO' => 'OEHHCCINFO',
        'COL_OEHHCCINFO' => 'OEHHCCINFO',
        'OehhCcInfo' => 'OEHHCCINFO',
        'so_head_hist.OehhCcInfo' => 'OEHHCCINFO',
        'Oehhboxcount' => 'OEHHBOXCOUNT',
        'SalesHistory.Oehhboxcount' => 'OEHHBOXCOUNT',
        'oehhboxcount' => 'OEHHBOXCOUNT',
        'salesHistory.oehhboxcount' => 'OEHHBOXCOUNT',
        'SalesHistoryTableMap::COL_OEHHBOXCOUNT' => 'OEHHBOXCOUNT',
        'COL_OEHHBOXCOUNT' => 'OEHHBOXCOUNT',
        'OehhBoxCount' => 'OEHHBOXCOUNT',
        'so_head_hist.OehhBoxCount' => 'OEHHBOXCOUNT',
        'Oehhrqstdate' => 'OEHHRQSTDATE',
        'SalesHistory.Oehhrqstdate' => 'OEHHRQSTDATE',
        'oehhrqstdate' => 'OEHHRQSTDATE',
        'salesHistory.oehhrqstdate' => 'OEHHRQSTDATE',
        'SalesHistoryTableMap::COL_OEHHRQSTDATE' => 'OEHHRQSTDATE',
        'COL_OEHHRQSTDATE' => 'OEHHRQSTDATE',
        'OehhRqstDate' => 'OEHHRQSTDATE',
        'so_head_hist.OehhRqstDate' => 'OEHHRQSTDATE',
        'Oehhcancdate' => 'OEHHCANCDATE',
        'SalesHistory.Oehhcancdate' => 'OEHHCANCDATE',
        'oehhcancdate' => 'OEHHCANCDATE',
        'salesHistory.oehhcancdate' => 'OEHHCANCDATE',
        'SalesHistoryTableMap::COL_OEHHCANCDATE' => 'OEHHCANCDATE',
        'COL_OEHHCANCDATE' => 'OEHHCANCDATE',
        'OehhCancDate' => 'OEHHCANCDATE',
        'so_head_hist.OehhCancDate' => 'OEHHCANCDATE',
        'Oehhcrntuser' => 'OEHHCRNTUSER',
        'SalesHistory.Oehhcrntuser' => 'OEHHCRNTUSER',
        'oehhcrntuser' => 'OEHHCRNTUSER',
        'salesHistory.oehhcrntuser' => 'OEHHCRNTUSER',
        'SalesHistoryTableMap::COL_OEHHCRNTUSER' => 'OEHHCRNTUSER',
        'COL_OEHHCRNTUSER' => 'OEHHCRNTUSER',
        'OehhCrntUser' => 'OEHHCRNTUSER',
        'so_head_hist.OehhCrntUser' => 'OEHHCRNTUSER',
        'Oehhreleasenbr' => 'OEHHRELEASENBR',
        'SalesHistory.Oehhreleasenbr' => 'OEHHRELEASENBR',
        'oehhreleasenbr' => 'OEHHRELEASENBR',
        'salesHistory.oehhreleasenbr' => 'OEHHRELEASENBR',
        'SalesHistoryTableMap::COL_OEHHRELEASENBR' => 'OEHHRELEASENBR',
        'COL_OEHHRELEASENBR' => 'OEHHRELEASENBR',
        'OehhReleaseNbr' => 'OEHHRELEASENBR',
        'so_head_hist.OehhReleaseNbr' => 'OEHHRELEASENBR',
        'Intbwhse' => 'INTBWHSE',
        'SalesHistory.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'salesHistory.intbwhse' => 'INTBWHSE',
        'SalesHistoryTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'so_head_hist.IntbWhse' => 'INTBWHSE',
        'Oehhbordbuilddate' => 'OEHHBORDBUILDDATE',
        'SalesHistory.Oehhbordbuilddate' => 'OEHHBORDBUILDDATE',
        'oehhbordbuilddate' => 'OEHHBORDBUILDDATE',
        'salesHistory.oehhbordbuilddate' => 'OEHHBORDBUILDDATE',
        'SalesHistoryTableMap::COL_OEHHBORDBUILDDATE' => 'OEHHBORDBUILDDATE',
        'COL_OEHHBORDBUILDDATE' => 'OEHHBORDBUILDDATE',
        'OehhBordBuildDate' => 'OEHHBORDBUILDDATE',
        'so_head_hist.OehhBordBuildDate' => 'OEHHBORDBUILDDATE',
        'Oehhdeptcode' => 'OEHHDEPTCODE',
        'SalesHistory.Oehhdeptcode' => 'OEHHDEPTCODE',
        'oehhdeptcode' => 'OEHHDEPTCODE',
        'salesHistory.oehhdeptcode' => 'OEHHDEPTCODE',
        'SalesHistoryTableMap::COL_OEHHDEPTCODE' => 'OEHHDEPTCODE',
        'COL_OEHHDEPTCODE' => 'OEHHDEPTCODE',
        'OehhDeptCode' => 'OEHHDEPTCODE',
        'so_head_hist.OehhDeptCode' => 'OEHHDEPTCODE',
        'Oehhfrtinentered' => 'OEHHFRTINENTERED',
        'SalesHistory.Oehhfrtinentered' => 'OEHHFRTINENTERED',
        'oehhfrtinentered' => 'OEHHFRTINENTERED',
        'salesHistory.oehhfrtinentered' => 'OEHHFRTINENTERED',
        'SalesHistoryTableMap::COL_OEHHFRTINENTERED' => 'OEHHFRTINENTERED',
        'COL_OEHHFRTINENTERED' => 'OEHHFRTINENTERED',
        'OehhFrtInEntered' => 'OEHHFRTINENTERED',
        'so_head_hist.OehhFrtInEntered' => 'OEHHFRTINENTERED',
        'Oehhdropshipentered' => 'OEHHDROPSHIPENTERED',
        'SalesHistory.Oehhdropshipentered' => 'OEHHDROPSHIPENTERED',
        'oehhdropshipentered' => 'OEHHDROPSHIPENTERED',
        'salesHistory.oehhdropshipentered' => 'OEHHDROPSHIPENTERED',
        'SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED' => 'OEHHDROPSHIPENTERED',
        'COL_OEHHDROPSHIPENTERED' => 'OEHHDROPSHIPENTERED',
        'OehhDropShipEntered' => 'OEHHDROPSHIPENTERED',
        'so_head_hist.OehhDropShipEntered' => 'OEHHDROPSHIPENTERED',
        'Oehherflag' => 'OEHHERFLAG',
        'SalesHistory.Oehherflag' => 'OEHHERFLAG',
        'oehherflag' => 'OEHHERFLAG',
        'salesHistory.oehherflag' => 'OEHHERFLAG',
        'SalesHistoryTableMap::COL_OEHHERFLAG' => 'OEHHERFLAG',
        'COL_OEHHERFLAG' => 'OEHHERFLAG',
        'OehhErFlag' => 'OEHHERFLAG',
        'so_head_hist.OehhErFlag' => 'OEHHERFLAG',
        'Oehhfrtin' => 'OEHHFRTIN',
        'SalesHistory.Oehhfrtin' => 'OEHHFRTIN',
        'oehhfrtin' => 'OEHHFRTIN',
        'salesHistory.oehhfrtin' => 'OEHHFRTIN',
        'SalesHistoryTableMap::COL_OEHHFRTIN' => 'OEHHFRTIN',
        'COL_OEHHFRTIN' => 'OEHHFRTIN',
        'OehhFrtIn' => 'OEHHFRTIN',
        'so_head_hist.OehhFrtIn' => 'OEHHFRTIN',
        'Oehhdropship' => 'OEHHDROPSHIP',
        'SalesHistory.Oehhdropship' => 'OEHHDROPSHIP',
        'oehhdropship' => 'OEHHDROPSHIP',
        'salesHistory.oehhdropship' => 'OEHHDROPSHIP',
        'SalesHistoryTableMap::COL_OEHHDROPSHIP' => 'OEHHDROPSHIP',
        'COL_OEHHDROPSHIP' => 'OEHHDROPSHIP',
        'OehhDropShip' => 'OEHHDROPSHIP',
        'so_head_hist.OehhDropShip' => 'OEHHDROPSHIP',
        'Oehhminorder' => 'OEHHMINORDER',
        'SalesHistory.Oehhminorder' => 'OEHHMINORDER',
        'oehhminorder' => 'OEHHMINORDER',
        'salesHistory.oehhminorder' => 'OEHHMINORDER',
        'SalesHistoryTableMap::COL_OEHHMINORDER' => 'OEHHMINORDER',
        'COL_OEHHMINORDER' => 'OEHHMINORDER',
        'OehhMinOrder' => 'OEHHMINORDER',
        'so_head_hist.OehhMinOrder' => 'OEHHMINORDER',
        'Oehhcontractterms' => 'OEHHCONTRACTTERMS',
        'SalesHistory.Oehhcontractterms' => 'OEHHCONTRACTTERMS',
        'oehhcontractterms' => 'OEHHCONTRACTTERMS',
        'salesHistory.oehhcontractterms' => 'OEHHCONTRACTTERMS',
        'SalesHistoryTableMap::COL_OEHHCONTRACTTERMS' => 'OEHHCONTRACTTERMS',
        'COL_OEHHCONTRACTTERMS' => 'OEHHCONTRACTTERMS',
        'OehhContractTerms' => 'OEHHCONTRACTTERMS',
        'so_head_hist.OehhContractTerms' => 'OEHHCONTRACTTERMS',
        'Oehhdropshipbilled' => 'OEHHDROPSHIPBILLED',
        'SalesHistory.Oehhdropshipbilled' => 'OEHHDROPSHIPBILLED',
        'oehhdropshipbilled' => 'OEHHDROPSHIPBILLED',
        'salesHistory.oehhdropshipbilled' => 'OEHHDROPSHIPBILLED',
        'SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED' => 'OEHHDROPSHIPBILLED',
        'COL_OEHHDROPSHIPBILLED' => 'OEHHDROPSHIPBILLED',
        'OehhDropShipBilled' => 'OEHHDROPSHIPBILLED',
        'so_head_hist.OehhDropShipBilled' => 'OEHHDROPSHIPBILLED',
        'Oehhordtyp' => 'OEHHORDTYP',
        'SalesHistory.Oehhordtyp' => 'OEHHORDTYP',
        'oehhordtyp' => 'OEHHORDTYP',
        'salesHistory.oehhordtyp' => 'OEHHORDTYP',
        'SalesHistoryTableMap::COL_OEHHORDTYP' => 'OEHHORDTYP',
        'COL_OEHHORDTYP' => 'OEHHORDTYP',
        'OehhOrdTyp' => 'OEHHORDTYP',
        'so_head_hist.OehhOrdTyp' => 'OEHHORDTYP',
        'Oehhtracknbr' => 'OEHHTRACKNBR',
        'SalesHistory.Oehhtracknbr' => 'OEHHTRACKNBR',
        'oehhtracknbr' => 'OEHHTRACKNBR',
        'salesHistory.oehhtracknbr' => 'OEHHTRACKNBR',
        'SalesHistoryTableMap::COL_OEHHTRACKNBR' => 'OEHHTRACKNBR',
        'COL_OEHHTRACKNBR' => 'OEHHTRACKNBR',
        'OehhTrackNbr' => 'OEHHTRACKNBR',
        'so_head_hist.OehhTrackNbr' => 'OEHHTRACKNBR',
        'Oehhsource' => 'OEHHSOURCE',
        'SalesHistory.Oehhsource' => 'OEHHSOURCE',
        'oehhsource' => 'OEHHSOURCE',
        'salesHistory.oehhsource' => 'OEHHSOURCE',
        'SalesHistoryTableMap::COL_OEHHSOURCE' => 'OEHHSOURCE',
        'COL_OEHHSOURCE' => 'OEHHSOURCE',
        'OehhSource' => 'OEHHSOURCE',
        'so_head_hist.OehhSource' => 'OEHHSOURCE',
        'Oehhccaprv' => 'OEHHCCAPRV',
        'SalesHistory.Oehhccaprv' => 'OEHHCCAPRV',
        'oehhccaprv' => 'OEHHCCAPRV',
        'salesHistory.oehhccaprv' => 'OEHHCCAPRV',
        'SalesHistoryTableMap::COL_OEHHCCAPRV' => 'OEHHCCAPRV',
        'COL_OEHHCCAPRV' => 'OEHHCCAPRV',
        'OehhCcAprv' => 'OEHHCCAPRV',
        'so_head_hist.OehhCcAprv' => 'OEHHCCAPRV',
        'Oehhpickfmattype' => 'OEHHPICKFMATTYPE',
        'SalesHistory.Oehhpickfmattype' => 'OEHHPICKFMATTYPE',
        'oehhpickfmattype' => 'OEHHPICKFMATTYPE',
        'salesHistory.oehhpickfmattype' => 'OEHHPICKFMATTYPE',
        'SalesHistoryTableMap::COL_OEHHPICKFMATTYPE' => 'OEHHPICKFMATTYPE',
        'COL_OEHHPICKFMATTYPE' => 'OEHHPICKFMATTYPE',
        'OehhPickFmatType' => 'OEHHPICKFMATTYPE',
        'so_head_hist.OehhPickFmatType' => 'OEHHPICKFMATTYPE',
        'Oehhinvcfmattype' => 'OEHHINVCFMATTYPE',
        'SalesHistory.Oehhinvcfmattype' => 'OEHHINVCFMATTYPE',
        'oehhinvcfmattype' => 'OEHHINVCFMATTYPE',
        'salesHistory.oehhinvcfmattype' => 'OEHHINVCFMATTYPE',
        'SalesHistoryTableMap::COL_OEHHINVCFMATTYPE' => 'OEHHINVCFMATTYPE',
        'COL_OEHHINVCFMATTYPE' => 'OEHHINVCFMATTYPE',
        'OehhInvcFmatType' => 'OEHHINVCFMATTYPE',
        'so_head_hist.OehhInvcFmatType' => 'OEHHINVCFMATTYPE',
        'Oehhcashamt' => 'OEHHCASHAMT',
        'SalesHistory.Oehhcashamt' => 'OEHHCASHAMT',
        'oehhcashamt' => 'OEHHCASHAMT',
        'salesHistory.oehhcashamt' => 'OEHHCASHAMT',
        'SalesHistoryTableMap::COL_OEHHCASHAMT' => 'OEHHCASHAMT',
        'COL_OEHHCASHAMT' => 'OEHHCASHAMT',
        'OehhCashAmt' => 'OEHHCASHAMT',
        'so_head_hist.OehhCashAmt' => 'OEHHCASHAMT',
        'Oehhcheckamt' => 'OEHHCHECKAMT',
        'SalesHistory.Oehhcheckamt' => 'OEHHCHECKAMT',
        'oehhcheckamt' => 'OEHHCHECKAMT',
        'salesHistory.oehhcheckamt' => 'OEHHCHECKAMT',
        'SalesHistoryTableMap::COL_OEHHCHECKAMT' => 'OEHHCHECKAMT',
        'COL_OEHHCHECKAMT' => 'OEHHCHECKAMT',
        'OehhCheckAmt' => 'OEHHCHECKAMT',
        'so_head_hist.OehhCheckAmt' => 'OEHHCHECKAMT',
        'Oehhchecknbr' => 'OEHHCHECKNBR',
        'SalesHistory.Oehhchecknbr' => 'OEHHCHECKNBR',
        'oehhchecknbr' => 'OEHHCHECKNBR',
        'salesHistory.oehhchecknbr' => 'OEHHCHECKNBR',
        'SalesHistoryTableMap::COL_OEHHCHECKNBR' => 'OEHHCHECKNBR',
        'COL_OEHHCHECKNBR' => 'OEHHCHECKNBR',
        'OehhCheckNbr' => 'OEHHCHECKNBR',
        'so_head_hist.OehhCheckNbr' => 'OEHHCHECKNBR',
        'Oehhdepositamt' => 'OEHHDEPOSITAMT',
        'SalesHistory.Oehhdepositamt' => 'OEHHDEPOSITAMT',
        'oehhdepositamt' => 'OEHHDEPOSITAMT',
        'salesHistory.oehhdepositamt' => 'OEHHDEPOSITAMT',
        'SalesHistoryTableMap::COL_OEHHDEPOSITAMT' => 'OEHHDEPOSITAMT',
        'COL_OEHHDEPOSITAMT' => 'OEHHDEPOSITAMT',
        'OehhDepositAmt' => 'OEHHDEPOSITAMT',
        'so_head_hist.OehhDepositAmt' => 'OEHHDEPOSITAMT',
        'Oehhdepositnbr' => 'OEHHDEPOSITNBR',
        'SalesHistory.Oehhdepositnbr' => 'OEHHDEPOSITNBR',
        'oehhdepositnbr' => 'OEHHDEPOSITNBR',
        'salesHistory.oehhdepositnbr' => 'OEHHDEPOSITNBR',
        'SalesHistoryTableMap::COL_OEHHDEPOSITNBR' => 'OEHHDEPOSITNBR',
        'COL_OEHHDEPOSITNBR' => 'OEHHDEPOSITNBR',
        'OehhDepositNbr' => 'OEHHDEPOSITNBR',
        'so_head_hist.OehhDepositNbr' => 'OEHHDEPOSITNBR',
        'Oehhccamt' => 'OEHHCCAMT',
        'SalesHistory.Oehhccamt' => 'OEHHCCAMT',
        'oehhccamt' => 'OEHHCCAMT',
        'salesHistory.oehhccamt' => 'OEHHCCAMT',
        'SalesHistoryTableMap::COL_OEHHCCAMT' => 'OEHHCCAMT',
        'COL_OEHHCCAMT' => 'OEHHCCAMT',
        'OehhCcAmt' => 'OEHHCCAMT',
        'so_head_hist.OehhCcAmt' => 'OEHHCCAMT',
        'Oehhotaxsub' => 'OEHHOTAXSUB',
        'SalesHistory.Oehhotaxsub' => 'OEHHOTAXSUB',
        'oehhotaxsub' => 'OEHHOTAXSUB',
        'salesHistory.oehhotaxsub' => 'OEHHOTAXSUB',
        'SalesHistoryTableMap::COL_OEHHOTAXSUB' => 'OEHHOTAXSUB',
        'COL_OEHHOTAXSUB' => 'OEHHOTAXSUB',
        'OehhOTaxSub' => 'OEHHOTAXSUB',
        'so_head_hist.OehhOTaxSub' => 'OEHHOTAXSUB',
        'Oehhonontaxsub' => 'OEHHONONTAXSUB',
        'SalesHistory.Oehhonontaxsub' => 'OEHHONONTAXSUB',
        'oehhonontaxsub' => 'OEHHONONTAXSUB',
        'salesHistory.oehhonontaxsub' => 'OEHHONONTAXSUB',
        'SalesHistoryTableMap::COL_OEHHONONTAXSUB' => 'OEHHONONTAXSUB',
        'COL_OEHHONONTAXSUB' => 'OEHHONONTAXSUB',
        'OehhONonTaxSub' => 'OEHHONONTAXSUB',
        'so_head_hist.OehhONonTaxSub' => 'OEHHONONTAXSUB',
        'Oehhotaxtot' => 'OEHHOTAXTOT',
        'SalesHistory.Oehhotaxtot' => 'OEHHOTAXTOT',
        'oehhotaxtot' => 'OEHHOTAXTOT',
        'salesHistory.oehhotaxtot' => 'OEHHOTAXTOT',
        'SalesHistoryTableMap::COL_OEHHOTAXTOT' => 'OEHHOTAXTOT',
        'COL_OEHHOTAXTOT' => 'OEHHOTAXTOT',
        'OehhOTaxTot' => 'OEHHOTAXTOT',
        'so_head_hist.OehhOTaxTot' => 'OEHHOTAXTOT',
        'Oehhoordrtot' => 'OEHHOORDRTOT',
        'SalesHistory.Oehhoordrtot' => 'OEHHOORDRTOT',
        'oehhoordrtot' => 'OEHHOORDRTOT',
        'salesHistory.oehhoordrtot' => 'OEHHOORDRTOT',
        'SalesHistoryTableMap::COL_OEHHOORDRTOT' => 'OEHHOORDRTOT',
        'COL_OEHHOORDRTOT' => 'OEHHOORDRTOT',
        'OehhOOrdrTot' => 'OEHHOORDRTOT',
        'so_head_hist.OehhOOrdrTot' => 'OEHHOORDRTOT',
        'Oehhpickprintdate' => 'OEHHPICKPRINTDATE',
        'SalesHistory.Oehhpickprintdate' => 'OEHHPICKPRINTDATE',
        'oehhpickprintdate' => 'OEHHPICKPRINTDATE',
        'salesHistory.oehhpickprintdate' => 'OEHHPICKPRINTDATE',
        'SalesHistoryTableMap::COL_OEHHPICKPRINTDATE' => 'OEHHPICKPRINTDATE',
        'COL_OEHHPICKPRINTDATE' => 'OEHHPICKPRINTDATE',
        'OehhPickPrintDate' => 'OEHHPICKPRINTDATE',
        'so_head_hist.OehhPickPrintDate' => 'OEHHPICKPRINTDATE',
        'Oehhpickprinttime' => 'OEHHPICKPRINTTIME',
        'SalesHistory.Oehhpickprinttime' => 'OEHHPICKPRINTTIME',
        'oehhpickprinttime' => 'OEHHPICKPRINTTIME',
        'salesHistory.oehhpickprinttime' => 'OEHHPICKPRINTTIME',
        'SalesHistoryTableMap::COL_OEHHPICKPRINTTIME' => 'OEHHPICKPRINTTIME',
        'COL_OEHHPICKPRINTTIME' => 'OEHHPICKPRINTTIME',
        'OehhPickPrintTime' => 'OEHHPICKPRINTTIME',
        'so_head_hist.OehhPickPrintTime' => 'OEHHPICKPRINTTIME',
        'Oehhcont' => 'OEHHCONT',
        'SalesHistory.Oehhcont' => 'OEHHCONT',
        'oehhcont' => 'OEHHCONT',
        'salesHistory.oehhcont' => 'OEHHCONT',
        'SalesHistoryTableMap::COL_OEHHCONT' => 'OEHHCONT',
        'COL_OEHHCONT' => 'OEHHCONT',
        'OehhCont' => 'OEHHCONT',
        'so_head_hist.OehhCont' => 'OEHHCONT',
        'Oehhcontteleintl' => 'OEHHCONTTELEINTL',
        'SalesHistory.Oehhcontteleintl' => 'OEHHCONTTELEINTL',
        'oehhcontteleintl' => 'OEHHCONTTELEINTL',
        'salesHistory.oehhcontteleintl' => 'OEHHCONTTELEINTL',
        'SalesHistoryTableMap::COL_OEHHCONTTELEINTL' => 'OEHHCONTTELEINTL',
        'COL_OEHHCONTTELEINTL' => 'OEHHCONTTELEINTL',
        'OehhContTeleIntl' => 'OEHHCONTTELEINTL',
        'so_head_hist.OehhContTeleIntl' => 'OEHHCONTTELEINTL',
        'Oehhconttelenbr' => 'OEHHCONTTELENBR',
        'SalesHistory.Oehhconttelenbr' => 'OEHHCONTTELENBR',
        'oehhconttelenbr' => 'OEHHCONTTELENBR',
        'salesHistory.oehhconttelenbr' => 'OEHHCONTTELENBR',
        'SalesHistoryTableMap::COL_OEHHCONTTELENBR' => 'OEHHCONTTELENBR',
        'COL_OEHHCONTTELENBR' => 'OEHHCONTTELENBR',
        'OehhContTeleNbr' => 'OEHHCONTTELENBR',
        'so_head_hist.OehhContTeleNbr' => 'OEHHCONTTELENBR',
        'Oehhcontteleext' => 'OEHHCONTTELEEXT',
        'SalesHistory.Oehhcontteleext' => 'OEHHCONTTELEEXT',
        'oehhcontteleext' => 'OEHHCONTTELEEXT',
        'salesHistory.oehhcontteleext' => 'OEHHCONTTELEEXT',
        'SalesHistoryTableMap::COL_OEHHCONTTELEEXT' => 'OEHHCONTTELEEXT',
        'COL_OEHHCONTTELEEXT' => 'OEHHCONTTELEEXT',
        'OehhContTeleExt' => 'OEHHCONTTELEEXT',
        'so_head_hist.OehhContTeleExt' => 'OEHHCONTTELEEXT',
        'Oehhcontfaxintl' => 'OEHHCONTFAXINTL',
        'SalesHistory.Oehhcontfaxintl' => 'OEHHCONTFAXINTL',
        'oehhcontfaxintl' => 'OEHHCONTFAXINTL',
        'salesHistory.oehhcontfaxintl' => 'OEHHCONTFAXINTL',
        'SalesHistoryTableMap::COL_OEHHCONTFAXINTL' => 'OEHHCONTFAXINTL',
        'COL_OEHHCONTFAXINTL' => 'OEHHCONTFAXINTL',
        'OehhContFaxIntl' => 'OEHHCONTFAXINTL',
        'so_head_hist.OehhContFaxIntl' => 'OEHHCONTFAXINTL',
        'Oehhcontfaxnbr' => 'OEHHCONTFAXNBR',
        'SalesHistory.Oehhcontfaxnbr' => 'OEHHCONTFAXNBR',
        'oehhcontfaxnbr' => 'OEHHCONTFAXNBR',
        'salesHistory.oehhcontfaxnbr' => 'OEHHCONTFAXNBR',
        'SalesHistoryTableMap::COL_OEHHCONTFAXNBR' => 'OEHHCONTFAXNBR',
        'COL_OEHHCONTFAXNBR' => 'OEHHCONTFAXNBR',
        'OehhContFaxNbr' => 'OEHHCONTFAXNBR',
        'so_head_hist.OehhContFaxNbr' => 'OEHHCONTFAXNBR',
        'Oehhshipacct' => 'OEHHSHIPACCT',
        'SalesHistory.Oehhshipacct' => 'OEHHSHIPACCT',
        'oehhshipacct' => 'OEHHSHIPACCT',
        'salesHistory.oehhshipacct' => 'OEHHSHIPACCT',
        'SalesHistoryTableMap::COL_OEHHSHIPACCT' => 'OEHHSHIPACCT',
        'COL_OEHHSHIPACCT' => 'OEHHSHIPACCT',
        'OehhShipAcct' => 'OEHHSHIPACCT',
        'so_head_hist.OehhShipAcct' => 'OEHHSHIPACCT',
        'Oehhchgdue' => 'OEHHCHGDUE',
        'SalesHistory.Oehhchgdue' => 'OEHHCHGDUE',
        'oehhchgdue' => 'OEHHCHGDUE',
        'salesHistory.oehhchgdue' => 'OEHHCHGDUE',
        'SalesHistoryTableMap::COL_OEHHCHGDUE' => 'OEHHCHGDUE',
        'COL_OEHHCHGDUE' => 'OEHHCHGDUE',
        'OehhChgDue' => 'OEHHCHGDUE',
        'so_head_hist.OehhChgDue' => 'OEHHCHGDUE',
        'Oehhaddlpricdisc' => 'OEHHADDLPRICDISC',
        'SalesHistory.Oehhaddlpricdisc' => 'OEHHADDLPRICDISC',
        'oehhaddlpricdisc' => 'OEHHADDLPRICDISC',
        'salesHistory.oehhaddlpricdisc' => 'OEHHADDLPRICDISC',
        'SalesHistoryTableMap::COL_OEHHADDLPRICDISC' => 'OEHHADDLPRICDISC',
        'COL_OEHHADDLPRICDISC' => 'OEHHADDLPRICDISC',
        'OehhAddlPricDisc' => 'OEHHADDLPRICDISC',
        'so_head_hist.OehhAddlPricDisc' => 'OEHHADDLPRICDISC',
        'Oehhallship' => 'OEHHALLSHIP',
        'SalesHistory.Oehhallship' => 'OEHHALLSHIP',
        'oehhallship' => 'OEHHALLSHIP',
        'salesHistory.oehhallship' => 'OEHHALLSHIP',
        'SalesHistoryTableMap::COL_OEHHALLSHIP' => 'OEHHALLSHIP',
        'COL_OEHHALLSHIP' => 'OEHHALLSHIP',
        'OehhAllShip' => 'OEHHALLSHIP',
        'so_head_hist.OehhAllShip' => 'OEHHALLSHIP',
        'Oehhqtyorderamt' => 'OEHHQTYORDERAMT',
        'SalesHistory.Oehhqtyorderamt' => 'OEHHQTYORDERAMT',
        'oehhqtyorderamt' => 'OEHHQTYORDERAMT',
        'salesHistory.oehhqtyorderamt' => 'OEHHQTYORDERAMT',
        'SalesHistoryTableMap::COL_OEHHQTYORDERAMT' => 'OEHHQTYORDERAMT',
        'COL_OEHHQTYORDERAMT' => 'OEHHQTYORDERAMT',
        'OehhQtyOrderAmt' => 'OEHHQTYORDERAMT',
        'so_head_hist.OehhQtyOrderAmt' => 'OEHHQTYORDERAMT',
        'Oehhcreditapplied' => 'OEHHCREDITAPPLIED',
        'SalesHistory.Oehhcreditapplied' => 'OEHHCREDITAPPLIED',
        'oehhcreditapplied' => 'OEHHCREDITAPPLIED',
        'salesHistory.oehhcreditapplied' => 'OEHHCREDITAPPLIED',
        'SalesHistoryTableMap::COL_OEHHCREDITAPPLIED' => 'OEHHCREDITAPPLIED',
        'COL_OEHHCREDITAPPLIED' => 'OEHHCREDITAPPLIED',
        'OehhCreditApplied' => 'OEHHCREDITAPPLIED',
        'so_head_hist.OehhCreditApplied' => 'OEHHCREDITAPPLIED',
        'Oehhinvcprintdate' => 'OEHHINVCPRINTDATE',
        'SalesHistory.Oehhinvcprintdate' => 'OEHHINVCPRINTDATE',
        'oehhinvcprintdate' => 'OEHHINVCPRINTDATE',
        'salesHistory.oehhinvcprintdate' => 'OEHHINVCPRINTDATE',
        'SalesHistoryTableMap::COL_OEHHINVCPRINTDATE' => 'OEHHINVCPRINTDATE',
        'COL_OEHHINVCPRINTDATE' => 'OEHHINVCPRINTDATE',
        'OehhInvcPrintDate' => 'OEHHINVCPRINTDATE',
        'so_head_hist.OehhInvcPrintDate' => 'OEHHINVCPRINTDATE',
        'Oehhinvcprinttime' => 'OEHHINVCPRINTTIME',
        'SalesHistory.Oehhinvcprinttime' => 'OEHHINVCPRINTTIME',
        'oehhinvcprinttime' => 'OEHHINVCPRINTTIME',
        'salesHistory.oehhinvcprinttime' => 'OEHHINVCPRINTTIME',
        'SalesHistoryTableMap::COL_OEHHINVCPRINTTIME' => 'OEHHINVCPRINTTIME',
        'COL_OEHHINVCPRINTTIME' => 'OEHHINVCPRINTTIME',
        'OehhInvcPrintTime' => 'OEHHINVCPRINTTIME',
        'so_head_hist.OehhInvcPrintTime' => 'OEHHINVCPRINTTIME',
        'Oehhdiscfrt' => 'OEHHDISCFRT',
        'SalesHistory.Oehhdiscfrt' => 'OEHHDISCFRT',
        'oehhdiscfrt' => 'OEHHDISCFRT',
        'salesHistory.oehhdiscfrt' => 'OEHHDISCFRT',
        'SalesHistoryTableMap::COL_OEHHDISCFRT' => 'OEHHDISCFRT',
        'COL_OEHHDISCFRT' => 'OEHHDISCFRT',
        'OehhDiscFrt' => 'OEHHDISCFRT',
        'so_head_hist.OehhDiscFrt' => 'OEHHDISCFRT',
        'Oehhorideshipcomp' => 'OEHHORIDESHIPCOMP',
        'SalesHistory.Oehhorideshipcomp' => 'OEHHORIDESHIPCOMP',
        'oehhorideshipcomp' => 'OEHHORIDESHIPCOMP',
        'salesHistory.oehhorideshipcomp' => 'OEHHORIDESHIPCOMP',
        'SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP' => 'OEHHORIDESHIPCOMP',
        'COL_OEHHORIDESHIPCOMP' => 'OEHHORIDESHIPCOMP',
        'OehhOrideShipComp' => 'OEHHORIDESHIPCOMP',
        'so_head_hist.OehhOrideShipComp' => 'OEHHORIDESHIPCOMP',
        'Oehhcontemail' => 'OEHHCONTEMAIL',
        'SalesHistory.Oehhcontemail' => 'OEHHCONTEMAIL',
        'oehhcontemail' => 'OEHHCONTEMAIL',
        'salesHistory.oehhcontemail' => 'OEHHCONTEMAIL',
        'SalesHistoryTableMap::COL_OEHHCONTEMAIL' => 'OEHHCONTEMAIL',
        'COL_OEHHCONTEMAIL' => 'OEHHCONTEMAIL',
        'OehhContEmail' => 'OEHHCONTEMAIL',
        'so_head_hist.OehhContEmail' => 'OEHHCONTEMAIL',
        'Oehhmanualfrt' => 'OEHHMANUALFRT',
        'SalesHistory.Oehhmanualfrt' => 'OEHHMANUALFRT',
        'oehhmanualfrt' => 'OEHHMANUALFRT',
        'salesHistory.oehhmanualfrt' => 'OEHHMANUALFRT',
        'SalesHistoryTableMap::COL_OEHHMANUALFRT' => 'OEHHMANUALFRT',
        'COL_OEHHMANUALFRT' => 'OEHHMANUALFRT',
        'OehhManualFrt' => 'OEHHMANUALFRT',
        'so_head_hist.OehhManualFrt' => 'OEHHMANUALFRT',
        'Oehhinternalfrt' => 'OEHHINTERNALFRT',
        'SalesHistory.Oehhinternalfrt' => 'OEHHINTERNALFRT',
        'oehhinternalfrt' => 'OEHHINTERNALFRT',
        'salesHistory.oehhinternalfrt' => 'OEHHINTERNALFRT',
        'SalesHistoryTableMap::COL_OEHHINTERNALFRT' => 'OEHHINTERNALFRT',
        'COL_OEHHINTERNALFRT' => 'OEHHINTERNALFRT',
        'OehhInternalFrt' => 'OEHHINTERNALFRT',
        'so_head_hist.OehhInternalFrt' => 'OEHHINTERNALFRT',
        'Oehhfrtcost' => 'OEHHFRTCOST',
        'SalesHistory.Oehhfrtcost' => 'OEHHFRTCOST',
        'oehhfrtcost' => 'OEHHFRTCOST',
        'salesHistory.oehhfrtcost' => 'OEHHFRTCOST',
        'SalesHistoryTableMap::COL_OEHHFRTCOST' => 'OEHHFRTCOST',
        'COL_OEHHFRTCOST' => 'OEHHFRTCOST',
        'OehhFrtCost' => 'OEHHFRTCOST',
        'so_head_hist.OehhFrtCost' => 'OEHHFRTCOST',
        'Oehhroute' => 'OEHHROUTE',
        'SalesHistory.Oehhroute' => 'OEHHROUTE',
        'oehhroute' => 'OEHHROUTE',
        'salesHistory.oehhroute' => 'OEHHROUTE',
        'SalesHistoryTableMap::COL_OEHHROUTE' => 'OEHHROUTE',
        'COL_OEHHROUTE' => 'OEHHROUTE',
        'OehhRoute' => 'OEHHROUTE',
        'so_head_hist.OehhRoute' => 'OEHHROUTE',
        'Oehhrouteseq' => 'OEHHROUTESEQ',
        'SalesHistory.Oehhrouteseq' => 'OEHHROUTESEQ',
        'oehhrouteseq' => 'OEHHROUTESEQ',
        'salesHistory.oehhrouteseq' => 'OEHHROUTESEQ',
        'SalesHistoryTableMap::COL_OEHHROUTESEQ' => 'OEHHROUTESEQ',
        'COL_OEHHROUTESEQ' => 'OEHHROUTESEQ',
        'OehhRouteSeq' => 'OEHHROUTESEQ',
        'so_head_hist.OehhRouteSeq' => 'OEHHROUTESEQ',
        'Oehhfrttaxcode1' => 'OEHHFRTTAXCODE1',
        'SalesHistory.Oehhfrttaxcode1' => 'OEHHFRTTAXCODE1',
        'oehhfrttaxcode1' => 'OEHHFRTTAXCODE1',
        'salesHistory.oehhfrttaxcode1' => 'OEHHFRTTAXCODE1',
        'SalesHistoryTableMap::COL_OEHHFRTTAXCODE1' => 'OEHHFRTTAXCODE1',
        'COL_OEHHFRTTAXCODE1' => 'OEHHFRTTAXCODE1',
        'OehhFrtTaxCode1' => 'OEHHFRTTAXCODE1',
        'so_head_hist.OehhFrtTaxCode1' => 'OEHHFRTTAXCODE1',
        'Oehhfrttaxamt1' => 'OEHHFRTTAXAMT1',
        'SalesHistory.Oehhfrttaxamt1' => 'OEHHFRTTAXAMT1',
        'oehhfrttaxamt1' => 'OEHHFRTTAXAMT1',
        'salesHistory.oehhfrttaxamt1' => 'OEHHFRTTAXAMT1',
        'SalesHistoryTableMap::COL_OEHHFRTTAXAMT1' => 'OEHHFRTTAXAMT1',
        'COL_OEHHFRTTAXAMT1' => 'OEHHFRTTAXAMT1',
        'OehhFrtTaxAmt1' => 'OEHHFRTTAXAMT1',
        'so_head_hist.OehhFrtTaxAmt1' => 'OEHHFRTTAXAMT1',
        'Oehhfrttaxcode2' => 'OEHHFRTTAXCODE2',
        'SalesHistory.Oehhfrttaxcode2' => 'OEHHFRTTAXCODE2',
        'oehhfrttaxcode2' => 'OEHHFRTTAXCODE2',
        'salesHistory.oehhfrttaxcode2' => 'OEHHFRTTAXCODE2',
        'SalesHistoryTableMap::COL_OEHHFRTTAXCODE2' => 'OEHHFRTTAXCODE2',
        'COL_OEHHFRTTAXCODE2' => 'OEHHFRTTAXCODE2',
        'OehhFrtTaxCode2' => 'OEHHFRTTAXCODE2',
        'so_head_hist.OehhFrtTaxCode2' => 'OEHHFRTTAXCODE2',
        'Oehhfrttaxamt2' => 'OEHHFRTTAXAMT2',
        'SalesHistory.Oehhfrttaxamt2' => 'OEHHFRTTAXAMT2',
        'oehhfrttaxamt2' => 'OEHHFRTTAXAMT2',
        'salesHistory.oehhfrttaxamt2' => 'OEHHFRTTAXAMT2',
        'SalesHistoryTableMap::COL_OEHHFRTTAXAMT2' => 'OEHHFRTTAXAMT2',
        'COL_OEHHFRTTAXAMT2' => 'OEHHFRTTAXAMT2',
        'OehhFrtTaxAmt2' => 'OEHHFRTTAXAMT2',
        'so_head_hist.OehhFrtTaxAmt2' => 'OEHHFRTTAXAMT2',
        'Oehhfrttaxcode3' => 'OEHHFRTTAXCODE3',
        'SalesHistory.Oehhfrttaxcode3' => 'OEHHFRTTAXCODE3',
        'oehhfrttaxcode3' => 'OEHHFRTTAXCODE3',
        'salesHistory.oehhfrttaxcode3' => 'OEHHFRTTAXCODE3',
        'SalesHistoryTableMap::COL_OEHHFRTTAXCODE3' => 'OEHHFRTTAXCODE3',
        'COL_OEHHFRTTAXCODE3' => 'OEHHFRTTAXCODE3',
        'OehhFrtTaxCode3' => 'OEHHFRTTAXCODE3',
        'so_head_hist.OehhFrtTaxCode3' => 'OEHHFRTTAXCODE3',
        'Oehhfrttaxamt3' => 'OEHHFRTTAXAMT3',
        'SalesHistory.Oehhfrttaxamt3' => 'OEHHFRTTAXAMT3',
        'oehhfrttaxamt3' => 'OEHHFRTTAXAMT3',
        'salesHistory.oehhfrttaxamt3' => 'OEHHFRTTAXAMT3',
        'SalesHistoryTableMap::COL_OEHHFRTTAXAMT3' => 'OEHHFRTTAXAMT3',
        'COL_OEHHFRTTAXAMT3' => 'OEHHFRTTAXAMT3',
        'OehhFrtTaxAmt3' => 'OEHHFRTTAXAMT3',
        'so_head_hist.OehhFrtTaxAmt3' => 'OEHHFRTTAXAMT3',
        'Oehhfrttaxcode4' => 'OEHHFRTTAXCODE4',
        'SalesHistory.Oehhfrttaxcode4' => 'OEHHFRTTAXCODE4',
        'oehhfrttaxcode4' => 'OEHHFRTTAXCODE4',
        'salesHistory.oehhfrttaxcode4' => 'OEHHFRTTAXCODE4',
        'SalesHistoryTableMap::COL_OEHHFRTTAXCODE4' => 'OEHHFRTTAXCODE4',
        'COL_OEHHFRTTAXCODE4' => 'OEHHFRTTAXCODE4',
        'OehhFrtTaxCode4' => 'OEHHFRTTAXCODE4',
        'so_head_hist.OehhFrtTaxCode4' => 'OEHHFRTTAXCODE4',
        'Oehhfrttaxamt4' => 'OEHHFRTTAXAMT4',
        'SalesHistory.Oehhfrttaxamt4' => 'OEHHFRTTAXAMT4',
        'oehhfrttaxamt4' => 'OEHHFRTTAXAMT4',
        'salesHistory.oehhfrttaxamt4' => 'OEHHFRTTAXAMT4',
        'SalesHistoryTableMap::COL_OEHHFRTTAXAMT4' => 'OEHHFRTTAXAMT4',
        'COL_OEHHFRTTAXAMT4' => 'OEHHFRTTAXAMT4',
        'OehhFrtTaxAmt4' => 'OEHHFRTTAXAMT4',
        'so_head_hist.OehhFrtTaxAmt4' => 'OEHHFRTTAXAMT4',
        'Oehhfrttaxcode5' => 'OEHHFRTTAXCODE5',
        'SalesHistory.Oehhfrttaxcode5' => 'OEHHFRTTAXCODE5',
        'oehhfrttaxcode5' => 'OEHHFRTTAXCODE5',
        'salesHistory.oehhfrttaxcode5' => 'OEHHFRTTAXCODE5',
        'SalesHistoryTableMap::COL_OEHHFRTTAXCODE5' => 'OEHHFRTTAXCODE5',
        'COL_OEHHFRTTAXCODE5' => 'OEHHFRTTAXCODE5',
        'OehhFrtTaxCode5' => 'OEHHFRTTAXCODE5',
        'so_head_hist.OehhFrtTaxCode5' => 'OEHHFRTTAXCODE5',
        'Oehhfrttaxamt5' => 'OEHHFRTTAXAMT5',
        'SalesHistory.Oehhfrttaxamt5' => 'OEHHFRTTAXAMT5',
        'oehhfrttaxamt5' => 'OEHHFRTTAXAMT5',
        'salesHistory.oehhfrttaxamt5' => 'OEHHFRTTAXAMT5',
        'SalesHistoryTableMap::COL_OEHHFRTTAXAMT5' => 'OEHHFRTTAXAMT5',
        'COL_OEHHFRTTAXAMT5' => 'OEHHFRTTAXAMT5',
        'OehhFrtTaxAmt5' => 'OEHHFRTTAXAMT5',
        'so_head_hist.OehhFrtTaxAmt5' => 'OEHHFRTTAXAMT5',
        'Oehhedi855sent' => 'OEHHEDI855SENT',
        'SalesHistory.Oehhedi855sent' => 'OEHHEDI855SENT',
        'oehhedi855sent' => 'OEHHEDI855SENT',
        'salesHistory.oehhedi855sent' => 'OEHHEDI855SENT',
        'SalesHistoryTableMap::COL_OEHHEDI855SENT' => 'OEHHEDI855SENT',
        'COL_OEHHEDI855SENT' => 'OEHHEDI855SENT',
        'OehhEdi855Sent' => 'OEHHEDI855SENT',
        'so_head_hist.OehhEdi855Sent' => 'OEHHEDI855SENT',
        'Oehhfrt3rdparty' => 'OEHHFRT3RDPARTY',
        'SalesHistory.Oehhfrt3rdparty' => 'OEHHFRT3RDPARTY',
        'oehhfrt3rdparty' => 'OEHHFRT3RDPARTY',
        'salesHistory.oehhfrt3rdparty' => 'OEHHFRT3RDPARTY',
        'SalesHistoryTableMap::COL_OEHHFRT3RDPARTY' => 'OEHHFRT3RDPARTY',
        'COL_OEHHFRT3RDPARTY' => 'OEHHFRT3RDPARTY',
        'OehhFrt3rdParty' => 'OEHHFRT3RDPARTY',
        'so_head_hist.OehhFrt3rdParty' => 'OEHHFRT3RDPARTY',
        'Oehhfob' => 'OEHHFOB',
        'SalesHistory.Oehhfob' => 'OEHHFOB',
        'oehhfob' => 'OEHHFOB',
        'salesHistory.oehhfob' => 'OEHHFOB',
        'SalesHistoryTableMap::COL_OEHHFOB' => 'OEHHFOB',
        'COL_OEHHFOB' => 'OEHHFOB',
        'OehhFob' => 'OEHHFOB',
        'so_head_hist.OehhFob' => 'OEHHFOB',
        'Oehhconfirmimagyn' => 'OEHHCONFIRMIMAGYN',
        'SalesHistory.Oehhconfirmimagyn' => 'OEHHCONFIRMIMAGYN',
        'oehhconfirmimagyn' => 'OEHHCONFIRMIMAGYN',
        'salesHistory.oehhconfirmimagyn' => 'OEHHCONFIRMIMAGYN',
        'SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN' => 'OEHHCONFIRMIMAGYN',
        'COL_OEHHCONFIRMIMAGYN' => 'OEHHCONFIRMIMAGYN',
        'OehhConfirmImagYn' => 'OEHHCONFIRMIMAGYN',
        'so_head_hist.OehhConfirmImagYn' => 'OEHHCONFIRMIMAGYN',
        'Oehhindustconform' => 'OEHHINDUSTCONFORM',
        'SalesHistory.Oehhindustconform' => 'OEHHINDUSTCONFORM',
        'oehhindustconform' => 'OEHHINDUSTCONFORM',
        'salesHistory.oehhindustconform' => 'OEHHINDUSTCONFORM',
        'SalesHistoryTableMap::COL_OEHHINDUSTCONFORM' => 'OEHHINDUSTCONFORM',
        'COL_OEHHINDUSTCONFORM' => 'OEHHINDUSTCONFORM',
        'OehhIndustConform' => 'OEHHINDUSTCONFORM',
        'so_head_hist.OehhIndustConform' => 'OEHHINDUSTCONFORM',
        'Oehhcstkconsign' => 'OEHHCSTKCONSIGN',
        'SalesHistory.Oehhcstkconsign' => 'OEHHCSTKCONSIGN',
        'oehhcstkconsign' => 'OEHHCSTKCONSIGN',
        'salesHistory.oehhcstkconsign' => 'OEHHCSTKCONSIGN',
        'SalesHistoryTableMap::COL_OEHHCSTKCONSIGN' => 'OEHHCSTKCONSIGN',
        'COL_OEHHCSTKCONSIGN' => 'OEHHCSTKCONSIGN',
        'OehhCstkConsign' => 'OEHHCSTKCONSIGN',
        'so_head_hist.OehhCstkConsign' => 'OEHHCSTKCONSIGN',
        'Oehhlmdelaycapsent' => 'OEHHLMDELAYCAPSENT',
        'SalesHistory.Oehhlmdelaycapsent' => 'OEHHLMDELAYCAPSENT',
        'oehhlmdelaycapsent' => 'OEHHLMDELAYCAPSENT',
        'salesHistory.oehhlmdelaycapsent' => 'OEHHLMDELAYCAPSENT',
        'SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT' => 'OEHHLMDELAYCAPSENT',
        'COL_OEHHLMDELAYCAPSENT' => 'OEHHLMDELAYCAPSENT',
        'OehhLmDelayCapSent' => 'OEHHLMDELAYCAPSENT',
        'so_head_hist.OehhLmDelayCapSent' => 'OEHHLMDELAYCAPSENT',
        'Oehhmfgid' => 'OEHHMFGID',
        'SalesHistory.Oehhmfgid' => 'OEHHMFGID',
        'oehhmfgid' => 'OEHHMFGID',
        'salesHistory.oehhmfgid' => 'OEHHMFGID',
        'SalesHistoryTableMap::COL_OEHHMFGID' => 'OEHHMFGID',
        'COL_OEHHMFGID' => 'OEHHMFGID',
        'OehhMfgId' => 'OEHHMFGID',
        'so_head_hist.OehhMfgId' => 'OEHHMFGID',
        'Oehhstoreid' => 'OEHHSTOREID',
        'SalesHistory.Oehhstoreid' => 'OEHHSTOREID',
        'oehhstoreid' => 'OEHHSTOREID',
        'salesHistory.oehhstoreid' => 'OEHHSTOREID',
        'SalesHistoryTableMap::COL_OEHHSTOREID' => 'OEHHSTOREID',
        'COL_OEHHSTOREID' => 'OEHHSTOREID',
        'OehhStoreId' => 'OEHHSTOREID',
        'so_head_hist.OehhStoreId' => 'OEHHSTOREID',
        'Oehhpickqueue' => 'OEHHPICKQUEUE',
        'SalesHistory.Oehhpickqueue' => 'OEHHPICKQUEUE',
        'oehhpickqueue' => 'OEHHPICKQUEUE',
        'salesHistory.oehhpickqueue' => 'OEHHPICKQUEUE',
        'SalesHistoryTableMap::COL_OEHHPICKQUEUE' => 'OEHHPICKQUEUE',
        'COL_OEHHPICKQUEUE' => 'OEHHPICKQUEUE',
        'OehhPickQueue' => 'OEHHPICKQUEUE',
        'so_head_hist.OehhPickQueue' => 'OEHHPICKQUEUE',
        'Oehharrvdate' => 'OEHHARRVDATE',
        'SalesHistory.Oehharrvdate' => 'OEHHARRVDATE',
        'oehharrvdate' => 'OEHHARRVDATE',
        'salesHistory.oehharrvdate' => 'OEHHARRVDATE',
        'SalesHistoryTableMap::COL_OEHHARRVDATE' => 'OEHHARRVDATE',
        'COL_OEHHARRVDATE' => 'OEHHARRVDATE',
        'OehhArrvDate' => 'OEHHARRVDATE',
        'so_head_hist.OehhArrvDate' => 'OEHHARRVDATE',
        'Oehhsurchgstat' => 'OEHHSURCHGSTAT',
        'SalesHistory.Oehhsurchgstat' => 'OEHHSURCHGSTAT',
        'oehhsurchgstat' => 'OEHHSURCHGSTAT',
        'salesHistory.oehhsurchgstat' => 'OEHHSURCHGSTAT',
        'SalesHistoryTableMap::COL_OEHHSURCHGSTAT' => 'OEHHSURCHGSTAT',
        'COL_OEHHSURCHGSTAT' => 'OEHHSURCHGSTAT',
        'OehhSurchgStat' => 'OEHHSURCHGSTAT',
        'so_head_hist.OehhSurchgStat' => 'OEHHSURCHGSTAT',
        'Oehhfrtgrup' => 'OEHHFRTGRUP',
        'SalesHistory.Oehhfrtgrup' => 'OEHHFRTGRUP',
        'oehhfrtgrup' => 'OEHHFRTGRUP',
        'salesHistory.oehhfrtgrup' => 'OEHHFRTGRUP',
        'SalesHistoryTableMap::COL_OEHHFRTGRUP' => 'OEHHFRTGRUP',
        'COL_OEHHFRTGRUP' => 'OEHHFRTGRUP',
        'OehhFrtGrup' => 'OEHHFRTGRUP',
        'so_head_hist.OehhFrtGrup' => 'OEHHFRTGRUP',
        'Oehhcommoride' => 'OEHHCOMMORIDE',
        'SalesHistory.Oehhcommoride' => 'OEHHCOMMORIDE',
        'oehhcommoride' => 'OEHHCOMMORIDE',
        'salesHistory.oehhcommoride' => 'OEHHCOMMORIDE',
        'SalesHistoryTableMap::COL_OEHHCOMMORIDE' => 'OEHHCOMMORIDE',
        'COL_OEHHCOMMORIDE' => 'OEHHCOMMORIDE',
        'OehhCommOride' => 'OEHHCOMMORIDE',
        'so_head_hist.OehhCommOride' => 'OEHHCOMMORIDE',
        'Oehhchrgsplt' => 'OEHHCHRGSPLT',
        'SalesHistory.Oehhchrgsplt' => 'OEHHCHRGSPLT',
        'oehhchrgsplt' => 'OEHHCHRGSPLT',
        'salesHistory.oehhchrgsplt' => 'OEHHCHRGSPLT',
        'SalesHistoryTableMap::COL_OEHHCHRGSPLT' => 'OEHHCHRGSPLT',
        'COL_OEHHCHRGSPLT' => 'OEHHCHRGSPLT',
        'OehhChrgSplt' => 'OEHHCHRGSPLT',
        'so_head_hist.OehhChrgSplt' => 'OEHHCHRGSPLT',
        'Oehhacccaprv' => 'OEHHACCCAPRV',
        'SalesHistory.Oehhacccaprv' => 'OEHHACCCAPRV',
        'oehhacccaprv' => 'OEHHACCCAPRV',
        'salesHistory.oehhacccaprv' => 'OEHHACCCAPRV',
        'SalesHistoryTableMap::COL_OEHHACCCAPRV' => 'OEHHACCCAPRV',
        'COL_OEHHACCCAPRV' => 'OEHHACCCAPRV',
        'OehhAcCcAprv' => 'OEHHACCCAPRV',
        'so_head_hist.OehhAcCcAprv' => 'OEHHACCCAPRV',
        'Oehhorigordrnbr' => 'OEHHORIGORDRNBR',
        'SalesHistory.Oehhorigordrnbr' => 'OEHHORIGORDRNBR',
        'oehhorigordrnbr' => 'OEHHORIGORDRNBR',
        'salesHistory.oehhorigordrnbr' => 'OEHHORIGORDRNBR',
        'SalesHistoryTableMap::COL_OEHHORIGORDRNBR' => 'OEHHORIGORDRNBR',
        'COL_OEHHORIGORDRNBR' => 'OEHHORIGORDRNBR',
        'OehhOrigOrdrNbr' => 'OEHHORIGORDRNBR',
        'so_head_hist.OehhOrigOrdrNbr' => 'OEHHORIGORDRNBR',
        'Oehhpostdate' => 'OEHHPOSTDATE',
        'SalesHistory.Oehhpostdate' => 'OEHHPOSTDATE',
        'oehhpostdate' => 'OEHHPOSTDATE',
        'salesHistory.oehhpostdate' => 'OEHHPOSTDATE',
        'SalesHistoryTableMap::COL_OEHHPOSTDATE' => 'OEHHPOSTDATE',
        'COL_OEHHPOSTDATE' => 'OEHHPOSTDATE',
        'OehhPostDate' => 'OEHHPOSTDATE',
        'so_head_hist.OehhPostDate' => 'OEHHPOSTDATE',
        'Oehhdiscdate1' => 'OEHHDISCDATE1',
        'SalesHistory.Oehhdiscdate1' => 'OEHHDISCDATE1',
        'oehhdiscdate1' => 'OEHHDISCDATE1',
        'salesHistory.oehhdiscdate1' => 'OEHHDISCDATE1',
        'SalesHistoryTableMap::COL_OEHHDISCDATE1' => 'OEHHDISCDATE1',
        'COL_OEHHDISCDATE1' => 'OEHHDISCDATE1',
        'OehhDiscDate1' => 'OEHHDISCDATE1',
        'so_head_hist.OehhDiscDate1' => 'OEHHDISCDATE1',
        'Oehhdiscpct1' => 'OEHHDISCPCT1',
        'SalesHistory.Oehhdiscpct1' => 'OEHHDISCPCT1',
        'oehhdiscpct1' => 'OEHHDISCPCT1',
        'salesHistory.oehhdiscpct1' => 'OEHHDISCPCT1',
        'SalesHistoryTableMap::COL_OEHHDISCPCT1' => 'OEHHDISCPCT1',
        'COL_OEHHDISCPCT1' => 'OEHHDISCPCT1',
        'OehhDiscPct1' => 'OEHHDISCPCT1',
        'so_head_hist.OehhDiscPct1' => 'OEHHDISCPCT1',
        'Oehhduedate1' => 'OEHHDUEDATE1',
        'SalesHistory.Oehhduedate1' => 'OEHHDUEDATE1',
        'oehhduedate1' => 'OEHHDUEDATE1',
        'salesHistory.oehhduedate1' => 'OEHHDUEDATE1',
        'SalesHistoryTableMap::COL_OEHHDUEDATE1' => 'OEHHDUEDATE1',
        'COL_OEHHDUEDATE1' => 'OEHHDUEDATE1',
        'OehhDueDate1' => 'OEHHDUEDATE1',
        'so_head_hist.OehhDueDate1' => 'OEHHDUEDATE1',
        'Oehhdueamt1' => 'OEHHDUEAMT1',
        'SalesHistory.Oehhdueamt1' => 'OEHHDUEAMT1',
        'oehhdueamt1' => 'OEHHDUEAMT1',
        'salesHistory.oehhdueamt1' => 'OEHHDUEAMT1',
        'SalesHistoryTableMap::COL_OEHHDUEAMT1' => 'OEHHDUEAMT1',
        'COL_OEHHDUEAMT1' => 'OEHHDUEAMT1',
        'OehhDueAmt1' => 'OEHHDUEAMT1',
        'so_head_hist.OehhDueAmt1' => 'OEHHDUEAMT1',
        'Oehhduepct1' => 'OEHHDUEPCT1',
        'SalesHistory.Oehhduepct1' => 'OEHHDUEPCT1',
        'oehhduepct1' => 'OEHHDUEPCT1',
        'salesHistory.oehhduepct1' => 'OEHHDUEPCT1',
        'SalesHistoryTableMap::COL_OEHHDUEPCT1' => 'OEHHDUEPCT1',
        'COL_OEHHDUEPCT1' => 'OEHHDUEPCT1',
        'OehhDuePct1' => 'OEHHDUEPCT1',
        'so_head_hist.OehhDuePct1' => 'OEHHDUEPCT1',
        'Oehhdiscdate2' => 'OEHHDISCDATE2',
        'SalesHistory.Oehhdiscdate2' => 'OEHHDISCDATE2',
        'oehhdiscdate2' => 'OEHHDISCDATE2',
        'salesHistory.oehhdiscdate2' => 'OEHHDISCDATE2',
        'SalesHistoryTableMap::COL_OEHHDISCDATE2' => 'OEHHDISCDATE2',
        'COL_OEHHDISCDATE2' => 'OEHHDISCDATE2',
        'OehhDiscDate2' => 'OEHHDISCDATE2',
        'so_head_hist.OehhDiscDate2' => 'OEHHDISCDATE2',
        'Oehhdiscpct2' => 'OEHHDISCPCT2',
        'SalesHistory.Oehhdiscpct2' => 'OEHHDISCPCT2',
        'oehhdiscpct2' => 'OEHHDISCPCT2',
        'salesHistory.oehhdiscpct2' => 'OEHHDISCPCT2',
        'SalesHistoryTableMap::COL_OEHHDISCPCT2' => 'OEHHDISCPCT2',
        'COL_OEHHDISCPCT2' => 'OEHHDISCPCT2',
        'OehhDiscPct2' => 'OEHHDISCPCT2',
        'so_head_hist.OehhDiscPct2' => 'OEHHDISCPCT2',
        'Oehhduedate2' => 'OEHHDUEDATE2',
        'SalesHistory.Oehhduedate2' => 'OEHHDUEDATE2',
        'oehhduedate2' => 'OEHHDUEDATE2',
        'salesHistory.oehhduedate2' => 'OEHHDUEDATE2',
        'SalesHistoryTableMap::COL_OEHHDUEDATE2' => 'OEHHDUEDATE2',
        'COL_OEHHDUEDATE2' => 'OEHHDUEDATE2',
        'OehhDueDate2' => 'OEHHDUEDATE2',
        'so_head_hist.OehhDueDate2' => 'OEHHDUEDATE2',
        'Oehhdueamt2' => 'OEHHDUEAMT2',
        'SalesHistory.Oehhdueamt2' => 'OEHHDUEAMT2',
        'oehhdueamt2' => 'OEHHDUEAMT2',
        'salesHistory.oehhdueamt2' => 'OEHHDUEAMT2',
        'SalesHistoryTableMap::COL_OEHHDUEAMT2' => 'OEHHDUEAMT2',
        'COL_OEHHDUEAMT2' => 'OEHHDUEAMT2',
        'OehhDueAmt2' => 'OEHHDUEAMT2',
        'so_head_hist.OehhDueAmt2' => 'OEHHDUEAMT2',
        'Oehhduepct2' => 'OEHHDUEPCT2',
        'SalesHistory.Oehhduepct2' => 'OEHHDUEPCT2',
        'oehhduepct2' => 'OEHHDUEPCT2',
        'salesHistory.oehhduepct2' => 'OEHHDUEPCT2',
        'SalesHistoryTableMap::COL_OEHHDUEPCT2' => 'OEHHDUEPCT2',
        'COL_OEHHDUEPCT2' => 'OEHHDUEPCT2',
        'OehhDuePct2' => 'OEHHDUEPCT2',
        'so_head_hist.OehhDuePct2' => 'OEHHDUEPCT2',
        'Oehhdiscdate3' => 'OEHHDISCDATE3',
        'SalesHistory.Oehhdiscdate3' => 'OEHHDISCDATE3',
        'oehhdiscdate3' => 'OEHHDISCDATE3',
        'salesHistory.oehhdiscdate3' => 'OEHHDISCDATE3',
        'SalesHistoryTableMap::COL_OEHHDISCDATE3' => 'OEHHDISCDATE3',
        'COL_OEHHDISCDATE3' => 'OEHHDISCDATE3',
        'OehhDiscDate3' => 'OEHHDISCDATE3',
        'so_head_hist.OehhDiscDate3' => 'OEHHDISCDATE3',
        'Oehhdiscpct3' => 'OEHHDISCPCT3',
        'SalesHistory.Oehhdiscpct3' => 'OEHHDISCPCT3',
        'oehhdiscpct3' => 'OEHHDISCPCT3',
        'salesHistory.oehhdiscpct3' => 'OEHHDISCPCT3',
        'SalesHistoryTableMap::COL_OEHHDISCPCT3' => 'OEHHDISCPCT3',
        'COL_OEHHDISCPCT3' => 'OEHHDISCPCT3',
        'OehhDiscPct3' => 'OEHHDISCPCT3',
        'so_head_hist.OehhDiscPct3' => 'OEHHDISCPCT3',
        'Oehhduedate3' => 'OEHHDUEDATE3',
        'SalesHistory.Oehhduedate3' => 'OEHHDUEDATE3',
        'oehhduedate3' => 'OEHHDUEDATE3',
        'salesHistory.oehhduedate3' => 'OEHHDUEDATE3',
        'SalesHistoryTableMap::COL_OEHHDUEDATE3' => 'OEHHDUEDATE3',
        'COL_OEHHDUEDATE3' => 'OEHHDUEDATE3',
        'OehhDueDate3' => 'OEHHDUEDATE3',
        'so_head_hist.OehhDueDate3' => 'OEHHDUEDATE3',
        'Oehhdueamt3' => 'OEHHDUEAMT3',
        'SalesHistory.Oehhdueamt3' => 'OEHHDUEAMT3',
        'oehhdueamt3' => 'OEHHDUEAMT3',
        'salesHistory.oehhdueamt3' => 'OEHHDUEAMT3',
        'SalesHistoryTableMap::COL_OEHHDUEAMT3' => 'OEHHDUEAMT3',
        'COL_OEHHDUEAMT3' => 'OEHHDUEAMT3',
        'OehhDueAmt3' => 'OEHHDUEAMT3',
        'so_head_hist.OehhDueAmt3' => 'OEHHDUEAMT3',
        'Oehhduepct3' => 'OEHHDUEPCT3',
        'SalesHistory.Oehhduepct3' => 'OEHHDUEPCT3',
        'oehhduepct3' => 'OEHHDUEPCT3',
        'salesHistory.oehhduepct3' => 'OEHHDUEPCT3',
        'SalesHistoryTableMap::COL_OEHHDUEPCT3' => 'OEHHDUEPCT3',
        'COL_OEHHDUEPCT3' => 'OEHHDUEPCT3',
        'OehhDuePct3' => 'OEHHDUEPCT3',
        'so_head_hist.OehhDuePct3' => 'OEHHDUEPCT3',
        'Oehhdiscdate4' => 'OEHHDISCDATE4',
        'SalesHistory.Oehhdiscdate4' => 'OEHHDISCDATE4',
        'oehhdiscdate4' => 'OEHHDISCDATE4',
        'salesHistory.oehhdiscdate4' => 'OEHHDISCDATE4',
        'SalesHistoryTableMap::COL_OEHHDISCDATE4' => 'OEHHDISCDATE4',
        'COL_OEHHDISCDATE4' => 'OEHHDISCDATE4',
        'OehhDiscDate4' => 'OEHHDISCDATE4',
        'so_head_hist.OehhDiscDate4' => 'OEHHDISCDATE4',
        'Oehhdiscpct4' => 'OEHHDISCPCT4',
        'SalesHistory.Oehhdiscpct4' => 'OEHHDISCPCT4',
        'oehhdiscpct4' => 'OEHHDISCPCT4',
        'salesHistory.oehhdiscpct4' => 'OEHHDISCPCT4',
        'SalesHistoryTableMap::COL_OEHHDISCPCT4' => 'OEHHDISCPCT4',
        'COL_OEHHDISCPCT4' => 'OEHHDISCPCT4',
        'OehhDiscPct4' => 'OEHHDISCPCT4',
        'so_head_hist.OehhDiscPct4' => 'OEHHDISCPCT4',
        'Oehhduedate4' => 'OEHHDUEDATE4',
        'SalesHistory.Oehhduedate4' => 'OEHHDUEDATE4',
        'oehhduedate4' => 'OEHHDUEDATE4',
        'salesHistory.oehhduedate4' => 'OEHHDUEDATE4',
        'SalesHistoryTableMap::COL_OEHHDUEDATE4' => 'OEHHDUEDATE4',
        'COL_OEHHDUEDATE4' => 'OEHHDUEDATE4',
        'OehhDueDate4' => 'OEHHDUEDATE4',
        'so_head_hist.OehhDueDate4' => 'OEHHDUEDATE4',
        'Oehhdueamt4' => 'OEHHDUEAMT4',
        'SalesHistory.Oehhdueamt4' => 'OEHHDUEAMT4',
        'oehhdueamt4' => 'OEHHDUEAMT4',
        'salesHistory.oehhdueamt4' => 'OEHHDUEAMT4',
        'SalesHistoryTableMap::COL_OEHHDUEAMT4' => 'OEHHDUEAMT4',
        'COL_OEHHDUEAMT4' => 'OEHHDUEAMT4',
        'OehhDueAmt4' => 'OEHHDUEAMT4',
        'so_head_hist.OehhDueAmt4' => 'OEHHDUEAMT4',
        'Oehhduepct4' => 'OEHHDUEPCT4',
        'SalesHistory.Oehhduepct4' => 'OEHHDUEPCT4',
        'oehhduepct4' => 'OEHHDUEPCT4',
        'salesHistory.oehhduepct4' => 'OEHHDUEPCT4',
        'SalesHistoryTableMap::COL_OEHHDUEPCT4' => 'OEHHDUEPCT4',
        'COL_OEHHDUEPCT4' => 'OEHHDUEPCT4',
        'OehhDuePct4' => 'OEHHDUEPCT4',
        'so_head_hist.OehhDuePct4' => 'OEHHDUEPCT4',
        'Oehhdiscdate5' => 'OEHHDISCDATE5',
        'SalesHistory.Oehhdiscdate5' => 'OEHHDISCDATE5',
        'oehhdiscdate5' => 'OEHHDISCDATE5',
        'salesHistory.oehhdiscdate5' => 'OEHHDISCDATE5',
        'SalesHistoryTableMap::COL_OEHHDISCDATE5' => 'OEHHDISCDATE5',
        'COL_OEHHDISCDATE5' => 'OEHHDISCDATE5',
        'OehhDiscDate5' => 'OEHHDISCDATE5',
        'so_head_hist.OehhDiscDate5' => 'OEHHDISCDATE5',
        'Oehhdiscpct5' => 'OEHHDISCPCT5',
        'SalesHistory.Oehhdiscpct5' => 'OEHHDISCPCT5',
        'oehhdiscpct5' => 'OEHHDISCPCT5',
        'salesHistory.oehhdiscpct5' => 'OEHHDISCPCT5',
        'SalesHistoryTableMap::COL_OEHHDISCPCT5' => 'OEHHDISCPCT5',
        'COL_OEHHDISCPCT5' => 'OEHHDISCPCT5',
        'OehhDiscPct5' => 'OEHHDISCPCT5',
        'so_head_hist.OehhDiscPct5' => 'OEHHDISCPCT5',
        'Oehhduedate5' => 'OEHHDUEDATE5',
        'SalesHistory.Oehhduedate5' => 'OEHHDUEDATE5',
        'oehhduedate5' => 'OEHHDUEDATE5',
        'salesHistory.oehhduedate5' => 'OEHHDUEDATE5',
        'SalesHistoryTableMap::COL_OEHHDUEDATE5' => 'OEHHDUEDATE5',
        'COL_OEHHDUEDATE5' => 'OEHHDUEDATE5',
        'OehhDueDate5' => 'OEHHDUEDATE5',
        'so_head_hist.OehhDueDate5' => 'OEHHDUEDATE5',
        'Oehhdueamt5' => 'OEHHDUEAMT5',
        'SalesHistory.Oehhdueamt5' => 'OEHHDUEAMT5',
        'oehhdueamt5' => 'OEHHDUEAMT5',
        'salesHistory.oehhdueamt5' => 'OEHHDUEAMT5',
        'SalesHistoryTableMap::COL_OEHHDUEAMT5' => 'OEHHDUEAMT5',
        'COL_OEHHDUEAMT5' => 'OEHHDUEAMT5',
        'OehhDueAmt5' => 'OEHHDUEAMT5',
        'so_head_hist.OehhDueAmt5' => 'OEHHDUEAMT5',
        'Oehhduepct5' => 'OEHHDUEPCT5',
        'SalesHistory.Oehhduepct5' => 'OEHHDUEPCT5',
        'oehhduepct5' => 'OEHHDUEPCT5',
        'salesHistory.oehhduepct5' => 'OEHHDUEPCT5',
        'SalesHistoryTableMap::COL_OEHHDUEPCT5' => 'OEHHDUEPCT5',
        'COL_OEHHDUEPCT5' => 'OEHHDUEPCT5',
        'OehhDuePct5' => 'OEHHDUEPCT5',
        'so_head_hist.OehhDuePct5' => 'OEHHDUEPCT5',
        'Oehhdiscdate6' => 'OEHHDISCDATE6',
        'SalesHistory.Oehhdiscdate6' => 'OEHHDISCDATE6',
        'oehhdiscdate6' => 'OEHHDISCDATE6',
        'salesHistory.oehhdiscdate6' => 'OEHHDISCDATE6',
        'SalesHistoryTableMap::COL_OEHHDISCDATE6' => 'OEHHDISCDATE6',
        'COL_OEHHDISCDATE6' => 'OEHHDISCDATE6',
        'OehhDiscDate6' => 'OEHHDISCDATE6',
        'so_head_hist.OehhDiscDate6' => 'OEHHDISCDATE6',
        'Oehhdiscpct6' => 'OEHHDISCPCT6',
        'SalesHistory.Oehhdiscpct6' => 'OEHHDISCPCT6',
        'oehhdiscpct6' => 'OEHHDISCPCT6',
        'salesHistory.oehhdiscpct6' => 'OEHHDISCPCT6',
        'SalesHistoryTableMap::COL_OEHHDISCPCT6' => 'OEHHDISCPCT6',
        'COL_OEHHDISCPCT6' => 'OEHHDISCPCT6',
        'OehhDiscPct6' => 'OEHHDISCPCT6',
        'so_head_hist.OehhDiscPct6' => 'OEHHDISCPCT6',
        'Oehhduedate6' => 'OEHHDUEDATE6',
        'SalesHistory.Oehhduedate6' => 'OEHHDUEDATE6',
        'oehhduedate6' => 'OEHHDUEDATE6',
        'salesHistory.oehhduedate6' => 'OEHHDUEDATE6',
        'SalesHistoryTableMap::COL_OEHHDUEDATE6' => 'OEHHDUEDATE6',
        'COL_OEHHDUEDATE6' => 'OEHHDUEDATE6',
        'OehhDueDate6' => 'OEHHDUEDATE6',
        'so_head_hist.OehhDueDate6' => 'OEHHDUEDATE6',
        'Oehhdueamt6' => 'OEHHDUEAMT6',
        'SalesHistory.Oehhdueamt6' => 'OEHHDUEAMT6',
        'oehhdueamt6' => 'OEHHDUEAMT6',
        'salesHistory.oehhdueamt6' => 'OEHHDUEAMT6',
        'SalesHistoryTableMap::COL_OEHHDUEAMT6' => 'OEHHDUEAMT6',
        'COL_OEHHDUEAMT6' => 'OEHHDUEAMT6',
        'OehhDueAmt6' => 'OEHHDUEAMT6',
        'so_head_hist.OehhDueAmt6' => 'OEHHDUEAMT6',
        'Oehhduepct6' => 'OEHHDUEPCT6',
        'SalesHistory.Oehhduepct6' => 'OEHHDUEPCT6',
        'oehhduepct6' => 'OEHHDUEPCT6',
        'salesHistory.oehhduepct6' => 'OEHHDUEPCT6',
        'SalesHistoryTableMap::COL_OEHHDUEPCT6' => 'OEHHDUEPCT6',
        'COL_OEHHDUEPCT6' => 'OEHHDUEPCT6',
        'OehhDuePct6' => 'OEHHDUEPCT6',
        'so_head_hist.OehhDuePct6' => 'OEHHDUEPCT6',
        'Oehhrefnbr' => 'OEHHREFNBR',
        'SalesHistory.Oehhrefnbr' => 'OEHHREFNBR',
        'oehhrefnbr' => 'OEHHREFNBR',
        'salesHistory.oehhrefnbr' => 'OEHHREFNBR',
        'SalesHistoryTableMap::COL_OEHHREFNBR' => 'OEHHREFNBR',
        'COL_OEHHREFNBR' => 'OEHHREFNBR',
        'OehhRefNbr' => 'OEHHREFNBR',
        'so_head_hist.OehhRefNbr' => 'OEHHREFNBR',
        'Oehhacprognbr' => 'OEHHACPROGNBR',
        'SalesHistory.Oehhacprognbr' => 'OEHHACPROGNBR',
        'oehhacprognbr' => 'OEHHACPROGNBR',
        'salesHistory.oehhacprognbr' => 'OEHHACPROGNBR',
        'SalesHistoryTableMap::COL_OEHHACPROGNBR' => 'OEHHACPROGNBR',
        'COL_OEHHACPROGNBR' => 'OEHHACPROGNBR',
        'OehhAcProgNbr' => 'OEHHACPROGNBR',
        'so_head_hist.OehhAcProgNbr' => 'OEHHACPROGNBR',
        'Oehhacprogexpdate' => 'OEHHACPROGEXPDATE',
        'SalesHistory.Oehhacprogexpdate' => 'OEHHACPROGEXPDATE',
        'oehhacprogexpdate' => 'OEHHACPROGEXPDATE',
        'salesHistory.oehhacprogexpdate' => 'OEHHACPROGEXPDATE',
        'SalesHistoryTableMap::COL_OEHHACPROGEXPDATE' => 'OEHHACPROGEXPDATE',
        'COL_OEHHACPROGEXPDATE' => 'OEHHACPROGEXPDATE',
        'OehhAcProgExpDate' => 'OEHHACPROGEXPDATE',
        'so_head_hist.OehhAcProgExpDate' => 'OEHHACPROGEXPDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'SalesHistory.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'salesHistory.dateupdtd' => 'DATEUPDTD',
        'SalesHistoryTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_head_hist.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'SalesHistory.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'salesHistory.timeupdtd' => 'TIMEUPDTD',
        'SalesHistoryTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_head_hist.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'SalesHistory.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'salesHistory.dummy' => 'DUMMY',
        'SalesHistoryTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_head_hist.dummy' => 'DUMMY',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
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
        $this->addColumn('OehhSp1Pct', 'Oehhsp1pct', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhSp2Pct', 'Oehhsp2pct', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhSp3Pct', 'Oehhsp3pct', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhCntrNbr', 'Oehhcntrnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('OehhWiBatch', 'Oehhwibatch', 'INTEGER', true, 8, 0);
        $this->addColumn('OehhDropRelHold', 'Oehhdroprelhold', 'CHAR', true, null, '');
        $this->addColumn('OehhTaxSub', 'Oehhtaxsub', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhNonTaxSub', 'Oehhnontaxsub', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhTaxTot', 'Oehhtaxtot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhFrtTot', 'Oehhfrttot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhMiscTot', 'Oehhmisctot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhOrdrTot', 'Oehhordrtot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhCostTot', 'Oehhcosttot', 'DECIMAL', true, 20, 0.0000000);
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
        $this->addColumn('OehhTotDisc', 'Oehhtotdisc', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhEdiRefNbrQual', 'Oehhedirefnbrqual', 'VARCHAR', true, 3, '');
        $this->addColumn('OehhUserCode1', 'Oehhusercode1', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhUserCode2', 'Oehhusercode2', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhUserCode3', 'Oehhusercode3', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhUserCode4', 'Oehhusercode4', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhExchCtry', 'Oehhexchctry', 'VARCHAR', true, 4, '');
        $this->addColumn('OehhExchRate', 'Oehhexchrate', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhWghtTot', 'Oehhwghttot', 'DECIMAL', true, 20, 0.0000000);
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
        $this->addColumn('OehhFrtIn', 'Oehhfrtin', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDropShip', 'Oehhdropship', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhMinOrder', 'Oehhminorder', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhContractTerms', 'Oehhcontractterms', 'CHAR', true, null, 'N');
        $this->addColumn('OehhDropShipBilled', 'Oehhdropshipbilled', 'CHAR', true, null, 'N');
        $this->addColumn('OehhOrdTyp', 'Oehhordtyp', 'CHAR', true, null, 'N');
        $this->addColumn('OehhTrackNbr', 'Oehhtracknbr', 'VARCHAR', true, 15, '');
        $this->addColumn('OehhSource', 'Oehhsource', 'CHAR', true, null, '');
        $this->addColumn('OehhCcAprv', 'Oehhccaprv', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhPickFmatType', 'Oehhpickfmattype', 'CHAR', true, null, '');
        $this->addColumn('OehhInvcFmatType', 'Oehhinvcfmattype', 'CHAR', true, null, '');
        $this->addColumn('OehhCashAmt', 'Oehhcashamt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhCheckAmt', 'Oehhcheckamt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhCheckNbr', 'Oehhchecknbr', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhDepositAmt', 'Oehhdepositamt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDepositNbr', 'Oehhdepositnbr', 'VARCHAR', true, 8, '');
        $this->addColumn('OehhCcAmt', 'Oehhccamt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhOTaxSub', 'Oehhotaxsub', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhONonTaxSub', 'Oehhonontaxsub', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhOTaxTot', 'Oehhotaxtot', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhOOrdrTot', 'Oehhoordrtot', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhPickPrintDate', 'Oehhpickprintdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhPickPrintTime', 'Oehhpickprinttime', 'CHAR', true, 4, '');
        $this->addColumn('OehhCont', 'Oehhcont', 'VARCHAR', true, 20, '');
        $this->addColumn('OehhContTeleIntl', 'Oehhcontteleintl', 'CHAR', true, null, 'N');
        $this->addColumn('OehhContTeleNbr', 'Oehhconttelenbr', 'VARCHAR', true, 22, '');
        $this->addColumn('OehhContTeleExt', 'Oehhcontteleext', 'VARCHAR', true, 7, '');
        $this->addColumn('OehhContFaxIntl', 'Oehhcontfaxintl', 'CHAR', true, null, 'N');
        $this->addColumn('OehhContFaxNbr', 'Oehhcontfaxnbr', 'VARCHAR', true, 22, '');
        $this->addColumn('OehhShipAcct', 'Oehhshipacct', 'VARCHAR', true, 10, '');
        $this->addColumn('OehhChgDue', 'Oehhchgdue', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhAddlPricDisc', 'Oehhaddlpricdisc', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhAllShip', 'Oehhallship', 'VARCHAR', true, 2, '');
        $this->addColumn('OehhQtyOrderAmt', 'Oehhqtyorderamt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhCreditApplied', 'Oehhcreditapplied', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhInvcPrintDate', 'Oehhinvcprintdate', 'CHAR', true, 8, '');
        $this->addColumn('OehhInvcPrintTime', 'Oehhinvcprinttime', 'CHAR', true, 4, '');
        $this->addColumn('OehhDiscFrt', 'Oehhdiscfrt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhOrideShipComp', 'Oehhorideshipcomp', 'CHAR', true, null, 'N');
        $this->addColumn('OehhContEmail', 'Oehhcontemail', 'VARCHAR', true, 50, '');
        $this->addColumn('OehhManualFrt', 'Oehhmanualfrt', 'CHAR', true, null, 'N');
        $this->addColumn('OehhInternalFrt', 'Oehhinternalfrt', 'CHAR', true, null, 'N');
        $this->addColumn('OehhFrtCost', 'Oehhfrtcost', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhRoute', 'Oehhroute', 'VARCHAR', true, 4, '');
        $this->addColumn('OehhRouteSeq', 'Oehhrouteseq', 'INTEGER', true, 4, 0);
        $this->addColumn('OehhFrtTaxCode1', 'Oehhfrttaxcode1', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt1', 'Oehhfrttaxamt1', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhFrtTaxCode2', 'Oehhfrttaxcode2', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt2', 'Oehhfrttaxamt2', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhFrtTaxCode3', 'Oehhfrttaxcode3', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt3', 'Oehhfrttaxamt3', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhFrtTaxCode4', 'Oehhfrttaxcode4', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt4', 'Oehhfrttaxamt4', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhFrtTaxCode5', 'Oehhfrttaxcode5', 'VARCHAR', true, 6, '');
        $this->addColumn('OehhFrtTaxAmt5', 'Oehhfrttaxamt5', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhEdi855Sent', 'Oehhedi855sent', 'CHAR', true, null, '');
        $this->addColumn('OehhFrt3rdParty', 'Oehhfrt3rdparty', 'DECIMAL', true, 20, 0.00);
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
        $this->addColumn('OehhDiscPct1', 'Oehhdiscpct1', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDueDate1', 'Oehhduedate1', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt1', 'Oehhdueamt1', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDuePct1', 'Oehhduepct1', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhDiscDate2', 'Oehhdiscdate2', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct2', 'Oehhdiscpct2', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDueDate2', 'Oehhduedate2', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt2', 'Oehhdueamt2', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDuePct2', 'Oehhduepct2', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhDiscDate3', 'Oehhdiscdate3', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct3', 'Oehhdiscpct3', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDueDate3', 'Oehhduedate3', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt3', 'Oehhdueamt3', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDuePct3', 'Oehhduepct3', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhDiscDate4', 'Oehhdiscdate4', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct4', 'Oehhdiscpct4', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDueDate4', 'Oehhduedate4', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt4', 'Oehhdueamt4', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDuePct4', 'Oehhduepct4', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhDiscDate5', 'Oehhdiscdate5', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct5', 'Oehhdiscpct5', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDueDate5', 'Oehhduedate5', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt5', 'Oehhdueamt5', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDuePct5', 'Oehhduepct5', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhDiscDate6', 'Oehhdiscdate6', 'CHAR', true, 8, '');
        $this->addColumn('OehhDiscPct6', 'Oehhdiscpct6', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDueDate6', 'Oehhduedate6', 'CHAR', true, 8, '');
        $this->addColumn('OehhDueAmt6', 'Oehhdueamt6', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OehhDuePct6', 'Oehhduepct6', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OehhRefNbr', 'Oehhrefnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('OehhAcProgNbr', 'Oehhacprognbr', 'VARCHAR', true, 16, '');
        $this->addColumn('OehhAcProgExpDate', 'Oehhacprogexpdate', 'VARCHAR', true, 6, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
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
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
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
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? SalesHistoryTableMap::CLASS_DEFAULT : SalesHistoryTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (SalesHistory object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
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

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

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
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
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
            $criteria->addSelectColumn($alias . '.OehhAcProgNbr');
            $criteria->addSelectColumn($alias . '.OehhAcProgExpDate');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHYEAR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTAT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHHOLD);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARSTSHIPID);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTNAME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTLASTNAME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTADR1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTADR2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTADR3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTCTRY);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTCITY);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTSTAT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTZIPCODE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCUSTPO);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHORDRDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARTMTERMCD);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARTBSHIPVIA);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARININVNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHINVDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHGLPD);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARSPSALEPER1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSP1PCT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARSPSALEPER2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSP2PCT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_ARSPSALEPER3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSP3PCT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCNTRNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHWIBATCH);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDROPRELHOLD);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTAXSUB);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHNONTAXSUB);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTAXTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHMISCTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHORDRTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCOSTTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTAKENDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTAKENTIME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKTIME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPACKDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPACKTIME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHVERIFYDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHVERIFYTIME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCREDITMEMO);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHBOOKEDYN);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_INTBWHSEORIG);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHBTSTAT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSHIPCOMP);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCWOFLAG);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDIVISION);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTAKENCODE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKCODE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPACKCODE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHVERIFYCODE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTOTDISC);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHUSERCODE4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHEXCHCTRY);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHEXCHRATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHWGHTTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHWGHTORIDE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCCINFO);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHBOXCOUNT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHRQSTDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCANCDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCRNTUSER);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHRELEASENBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDEPTCODE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTINENTERED);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHERFLAG);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTIN);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDROPSHIP);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHMINORDER);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHORDTYP);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHTRACKNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSOURCE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCCAPRV);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCASHAMT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCHECKAMT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCHECKNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDEPOSITAMT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDEPOSITNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCCAMT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHOTAXSUB);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHONONTAXSUB);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHOTAXTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHOORDRTOT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTTELEINTL);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTTELENBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTTELEEXT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTFAXINTL);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTFAXNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSHIPACCT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCHGDUE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHADDLPRICDISC);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHALLSHIP);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHQTYORDERAMT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCFRT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONTEMAIL);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHMANUALFRT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHINTERNALFRT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTCOST);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHROUTE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHROUTESEQ);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHEDI855SENT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFOB);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHMFGID);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSTOREID);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPICKQUEUE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHARRVDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHSURCHGSTAT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHFRTGRUP);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCOMMORIDE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHCHRGSPLT);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHACCCAPRV);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHORIGORDRNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHPOSTDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT1);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT2);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT3);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT4);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT5);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCDATE6);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDISCPCT6);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEDATE6);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEAMT6);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHDUEPCT6);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHREFNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHACPROGNBR);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(SalesHistoryTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.OehhNbr');
            $criteria->removeSelectColumn($alias . '.OehhYear');
            $criteria->removeSelectColumn($alias . '.OehhStat');
            $criteria->removeSelectColumn($alias . '.OehhHold');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.ArstShipId');
            $criteria->removeSelectColumn($alias . '.OehhStName');
            $criteria->removeSelectColumn($alias . '.OehhStLastName');
            $criteria->removeSelectColumn($alias . '.OehhStFirstName');
            $criteria->removeSelectColumn($alias . '.OehhStAdr1');
            $criteria->removeSelectColumn($alias . '.OehhStAdr2');
            $criteria->removeSelectColumn($alias . '.OehhStAdr3');
            $criteria->removeSelectColumn($alias . '.OehhStCtry');
            $criteria->removeSelectColumn($alias . '.OehhStCity');
            $criteria->removeSelectColumn($alias . '.OehhStStat');
            $criteria->removeSelectColumn($alias . '.OehhStZipCode');
            $criteria->removeSelectColumn($alias . '.OehhCustPo');
            $criteria->removeSelectColumn($alias . '.OehhOrdrDate');
            $criteria->removeSelectColumn($alias . '.ArtmTermCd');
            $criteria->removeSelectColumn($alias . '.ArtbShipVia');
            $criteria->removeSelectColumn($alias . '.ArinInvNbr');
            $criteria->removeSelectColumn($alias . '.OehhInvDate');
            $criteria->removeSelectColumn($alias . '.OehhGLPd');
            $criteria->removeSelectColumn($alias . '.ArspSalePer1');
            $criteria->removeSelectColumn($alias . '.OehhSp1Pct');
            $criteria->removeSelectColumn($alias . '.ArspSalePer2');
            $criteria->removeSelectColumn($alias . '.OehhSp2Pct');
            $criteria->removeSelectColumn($alias . '.ArspSalePer3');
            $criteria->removeSelectColumn($alias . '.OehhSp3Pct');
            $criteria->removeSelectColumn($alias . '.OehhCntrNbr');
            $criteria->removeSelectColumn($alias . '.OehhWiBatch');
            $criteria->removeSelectColumn($alias . '.OehhDropRelHold');
            $criteria->removeSelectColumn($alias . '.OehhTaxSub');
            $criteria->removeSelectColumn($alias . '.OehhNonTaxSub');
            $criteria->removeSelectColumn($alias . '.OehhTaxTot');
            $criteria->removeSelectColumn($alias . '.OehhFrtTot');
            $criteria->removeSelectColumn($alias . '.OehhMiscTot');
            $criteria->removeSelectColumn($alias . '.OehhOrdrTot');
            $criteria->removeSelectColumn($alias . '.OehhCostTot');
            $criteria->removeSelectColumn($alias . '.OehhSpCommLock');
            $criteria->removeSelectColumn($alias . '.OehhTakenDate');
            $criteria->removeSelectColumn($alias . '.OehhTakenTime');
            $criteria->removeSelectColumn($alias . '.OehhPickDate');
            $criteria->removeSelectColumn($alias . '.OehhPickTime');
            $criteria->removeSelectColumn($alias . '.OehhPackDate');
            $criteria->removeSelectColumn($alias . '.OehhPackTime');
            $criteria->removeSelectColumn($alias . '.OehhVerifyDate');
            $criteria->removeSelectColumn($alias . '.OehhVerifyTime');
            $criteria->removeSelectColumn($alias . '.OehhCreditMemo');
            $criteria->removeSelectColumn($alias . '.OehhBookedYn');
            $criteria->removeSelectColumn($alias . '.IntbWhseOrig');
            $criteria->removeSelectColumn($alias . '.OehhBtStat');
            $criteria->removeSelectColumn($alias . '.OehhShipComp');
            $criteria->removeSelectColumn($alias . '.OehhCwoFlag');
            $criteria->removeSelectColumn($alias . '.OehhDivision');
            $criteria->removeSelectColumn($alias . '.OehhTakenCode');
            $criteria->removeSelectColumn($alias . '.OehhPickCode');
            $criteria->removeSelectColumn($alias . '.OehhPackCode');
            $criteria->removeSelectColumn($alias . '.OehhVerifyCode');
            $criteria->removeSelectColumn($alias . '.OehhTotDisc');
            $criteria->removeSelectColumn($alias . '.OehhEdiRefNbrQual');
            $criteria->removeSelectColumn($alias . '.OehhUserCode1');
            $criteria->removeSelectColumn($alias . '.OehhUserCode2');
            $criteria->removeSelectColumn($alias . '.OehhUserCode3');
            $criteria->removeSelectColumn($alias . '.OehhUserCode4');
            $criteria->removeSelectColumn($alias . '.OehhExchCtry');
            $criteria->removeSelectColumn($alias . '.OehhExchRate');
            $criteria->removeSelectColumn($alias . '.OehhWghtTot');
            $criteria->removeSelectColumn($alias . '.OehhWghtOride');
            $criteria->removeSelectColumn($alias . '.OehhCcInfo');
            $criteria->removeSelectColumn($alias . '.OehhBoxCount');
            $criteria->removeSelectColumn($alias . '.OehhRqstDate');
            $criteria->removeSelectColumn($alias . '.OehhCancDate');
            $criteria->removeSelectColumn($alias . '.OehhCrntUser');
            $criteria->removeSelectColumn($alias . '.OehhReleaseNbr');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.OehhBordBuildDate');
            $criteria->removeSelectColumn($alias . '.OehhDeptCode');
            $criteria->removeSelectColumn($alias . '.OehhFrtInEntered');
            $criteria->removeSelectColumn($alias . '.OehhDropShipEntered');
            $criteria->removeSelectColumn($alias . '.OehhErFlag');
            $criteria->removeSelectColumn($alias . '.OehhFrtIn');
            $criteria->removeSelectColumn($alias . '.OehhDropShip');
            $criteria->removeSelectColumn($alias . '.OehhMinOrder');
            $criteria->removeSelectColumn($alias . '.OehhContractTerms');
            $criteria->removeSelectColumn($alias . '.OehhDropShipBilled');
            $criteria->removeSelectColumn($alias . '.OehhOrdTyp');
            $criteria->removeSelectColumn($alias . '.OehhTrackNbr');
            $criteria->removeSelectColumn($alias . '.OehhSource');
            $criteria->removeSelectColumn($alias . '.OehhCcAprv');
            $criteria->removeSelectColumn($alias . '.OehhPickFmatType');
            $criteria->removeSelectColumn($alias . '.OehhInvcFmatType');
            $criteria->removeSelectColumn($alias . '.OehhCashAmt');
            $criteria->removeSelectColumn($alias . '.OehhCheckAmt');
            $criteria->removeSelectColumn($alias . '.OehhCheckNbr');
            $criteria->removeSelectColumn($alias . '.OehhDepositAmt');
            $criteria->removeSelectColumn($alias . '.OehhDepositNbr');
            $criteria->removeSelectColumn($alias . '.OehhCcAmt');
            $criteria->removeSelectColumn($alias . '.OehhOTaxSub');
            $criteria->removeSelectColumn($alias . '.OehhONonTaxSub');
            $criteria->removeSelectColumn($alias . '.OehhOTaxTot');
            $criteria->removeSelectColumn($alias . '.OehhOOrdrTot');
            $criteria->removeSelectColumn($alias . '.OehhPickPrintDate');
            $criteria->removeSelectColumn($alias . '.OehhPickPrintTime');
            $criteria->removeSelectColumn($alias . '.OehhCont');
            $criteria->removeSelectColumn($alias . '.OehhContTeleIntl');
            $criteria->removeSelectColumn($alias . '.OehhContTeleNbr');
            $criteria->removeSelectColumn($alias . '.OehhContTeleExt');
            $criteria->removeSelectColumn($alias . '.OehhContFaxIntl');
            $criteria->removeSelectColumn($alias . '.OehhContFaxNbr');
            $criteria->removeSelectColumn($alias . '.OehhShipAcct');
            $criteria->removeSelectColumn($alias . '.OehhChgDue');
            $criteria->removeSelectColumn($alias . '.OehhAddlPricDisc');
            $criteria->removeSelectColumn($alias . '.OehhAllShip');
            $criteria->removeSelectColumn($alias . '.OehhQtyOrderAmt');
            $criteria->removeSelectColumn($alias . '.OehhCreditApplied');
            $criteria->removeSelectColumn($alias . '.OehhInvcPrintDate');
            $criteria->removeSelectColumn($alias . '.OehhInvcPrintTime');
            $criteria->removeSelectColumn($alias . '.OehhDiscFrt');
            $criteria->removeSelectColumn($alias . '.OehhOrideShipComp');
            $criteria->removeSelectColumn($alias . '.OehhContEmail');
            $criteria->removeSelectColumn($alias . '.OehhManualFrt');
            $criteria->removeSelectColumn($alias . '.OehhInternalFrt');
            $criteria->removeSelectColumn($alias . '.OehhFrtCost');
            $criteria->removeSelectColumn($alias . '.OehhRoute');
            $criteria->removeSelectColumn($alias . '.OehhRouteSeq');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxCode1');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxAmt1');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxCode2');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxAmt2');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxCode3');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxAmt3');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxCode4');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxAmt4');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxCode5');
            $criteria->removeSelectColumn($alias . '.OehhFrtTaxAmt5');
            $criteria->removeSelectColumn($alias . '.OehhEdi855Sent');
            $criteria->removeSelectColumn($alias . '.OehhFrt3rdParty');
            $criteria->removeSelectColumn($alias . '.OehhFob');
            $criteria->removeSelectColumn($alias . '.OehhConfirmImagYn');
            $criteria->removeSelectColumn($alias . '.OehhIndustConform');
            $criteria->removeSelectColumn($alias . '.OehhCstkConsign');
            $criteria->removeSelectColumn($alias . '.OehhLmDelayCapSent');
            $criteria->removeSelectColumn($alias . '.OehhMfgId');
            $criteria->removeSelectColumn($alias . '.OehhStoreId');
            $criteria->removeSelectColumn($alias . '.OehhPickQueue');
            $criteria->removeSelectColumn($alias . '.OehhArrvDate');
            $criteria->removeSelectColumn($alias . '.OehhSurchgStat');
            $criteria->removeSelectColumn($alias . '.OehhFrtGrup');
            $criteria->removeSelectColumn($alias . '.OehhCommOride');
            $criteria->removeSelectColumn($alias . '.OehhChrgSplt');
            $criteria->removeSelectColumn($alias . '.OehhAcCcAprv');
            $criteria->removeSelectColumn($alias . '.OehhOrigOrdrNbr');
            $criteria->removeSelectColumn($alias . '.OehhPostDate');
            $criteria->removeSelectColumn($alias . '.OehhDiscDate1');
            $criteria->removeSelectColumn($alias . '.OehhDiscPct1');
            $criteria->removeSelectColumn($alias . '.OehhDueDate1');
            $criteria->removeSelectColumn($alias . '.OehhDueAmt1');
            $criteria->removeSelectColumn($alias . '.OehhDuePct1');
            $criteria->removeSelectColumn($alias . '.OehhDiscDate2');
            $criteria->removeSelectColumn($alias . '.OehhDiscPct2');
            $criteria->removeSelectColumn($alias . '.OehhDueDate2');
            $criteria->removeSelectColumn($alias . '.OehhDueAmt2');
            $criteria->removeSelectColumn($alias . '.OehhDuePct2');
            $criteria->removeSelectColumn($alias . '.OehhDiscDate3');
            $criteria->removeSelectColumn($alias . '.OehhDiscPct3');
            $criteria->removeSelectColumn($alias . '.OehhDueDate3');
            $criteria->removeSelectColumn($alias . '.OehhDueAmt3');
            $criteria->removeSelectColumn($alias . '.OehhDuePct3');
            $criteria->removeSelectColumn($alias . '.OehhDiscDate4');
            $criteria->removeSelectColumn($alias . '.OehhDiscPct4');
            $criteria->removeSelectColumn($alias . '.OehhDueDate4');
            $criteria->removeSelectColumn($alias . '.OehhDueAmt4');
            $criteria->removeSelectColumn($alias . '.OehhDuePct4');
            $criteria->removeSelectColumn($alias . '.OehhDiscDate5');
            $criteria->removeSelectColumn($alias . '.OehhDiscPct5');
            $criteria->removeSelectColumn($alias . '.OehhDueDate5');
            $criteria->removeSelectColumn($alias . '.OehhDueAmt5');
            $criteria->removeSelectColumn($alias . '.OehhDuePct5');
            $criteria->removeSelectColumn($alias . '.OehhDiscDate6');
            $criteria->removeSelectColumn($alias . '.OehhDiscPct6');
            $criteria->removeSelectColumn($alias . '.OehhDueDate6');
            $criteria->removeSelectColumn($alias . '.OehhDueAmt6');
            $criteria->removeSelectColumn($alias . '.OehhDuePct6');
            $criteria->removeSelectColumn($alias . '.OehhRefNbr');
            $criteria->removeSelectColumn($alias . '.OehhAcProgNbr');
            $criteria->removeSelectColumn($alias . '.OehhAcProgExpDate');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.TimeUpdtd');
            $criteria->removeSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(SalesHistoryTableMap::DATABASE_NAME)->getTable(SalesHistoryTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SalesHistory or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SalesHistory object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
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
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SalesHistoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesHistory or Criteria object.
     *
     * @param mixed $criteria Criteria or SalesHistory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
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

}
