<?php

namespace Map;

use \SalesOrder;
use \SalesOrderQuery;
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
 * This class defines the structure of the 'so_header' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesOrderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_header';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesOrder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesOrder';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 189;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 189;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'so_header.OehdNbr';

    /**
     * the column name for the OehdStat field
     */
    const COL_OEHDSTAT = 'so_header.OehdStat';

    /**
     * the column name for the OehdHold field
     */
    const COL_OEHDHOLD = 'so_header.OehdHold';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'so_header.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'so_header.ArstShipId';

    /**
     * the column name for the OehdStName field
     */
    const COL_OEHDSTNAME = 'so_header.OehdStName';

    /**
     * the column name for the OehdStLastName field
     */
    const COL_OEHDSTLASTNAME = 'so_header.OehdStLastName';

    /**
     * the column name for the OehdStFirstName field
     */
    const COL_OEHDSTFIRSTNAME = 'so_header.OehdStFirstName';

    /**
     * the column name for the OehdStAdr1 field
     */
    const COL_OEHDSTADR1 = 'so_header.OehdStAdr1';

    /**
     * the column name for the OehdStAdr2 field
     */
    const COL_OEHDSTADR2 = 'so_header.OehdStAdr2';

    /**
     * the column name for the OehdStAdr3 field
     */
    const COL_OEHDSTADR3 = 'so_header.OehdStAdr3';

    /**
     * the column name for the OehdStCtry field
     */
    const COL_OEHDSTCTRY = 'so_header.OehdStCtry';

    /**
     * the column name for the OehdStCity field
     */
    const COL_OEHDSTCITY = 'so_header.OehdStCity';

    /**
     * the column name for the OehdStStat field
     */
    const COL_OEHDSTSTAT = 'so_header.OehdStStat';

    /**
     * the column name for the OehdStZipCode field
     */
    const COL_OEHDSTZIPCODE = 'so_header.OehdStZipCode';

    /**
     * the column name for the OehdCustPo field
     */
    const COL_OEHDCUSTPO = 'so_header.OehdCustPo';

    /**
     * the column name for the OehdOrdrDate field
     */
    const COL_OEHDORDRDATE = 'so_header.OehdOrdrDate';

    /**
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'so_header.ArtmTermCd';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'so_header.ArtbShipVia';

    /**
     * the column name for the ArinInvNbr field
     */
    const COL_ARININVNBR = 'so_header.ArinInvNbr';

    /**
     * the column name for the OehdInvDate field
     */
    const COL_OEHDINVDATE = 'so_header.OehdInvDate';

    /**
     * the column name for the OehdGLPd field
     */
    const COL_OEHDGLPD = 'so_header.OehdGLPd';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'so_header.ArspSalePer1';

    /**
     * the column name for the OehdSp1Pct field
     */
    const COL_OEHDSP1PCT = 'so_header.OehdSp1Pct';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'so_header.ArspSalePer2';

    /**
     * the column name for the OehdSp2Pct field
     */
    const COL_OEHDSP2PCT = 'so_header.OehdSp2Pct';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'so_header.ArspSalePer3';

    /**
     * the column name for the OehdSp3Pct field
     */
    const COL_OEHDSP3PCT = 'so_header.OehdSp3Pct';

    /**
     * the column name for the OehdCntrNbr field
     */
    const COL_OEHDCNTRNBR = 'so_header.OehdCntrNbr';

    /**
     * the column name for the OehdWiBatch field
     */
    const COL_OEHDWIBATCH = 'so_header.OehdWiBatch';

    /**
     * the column name for the OehdDropRelHold field
     */
    const COL_OEHDDROPRELHOLD = 'so_header.OehdDropRelHold';

    /**
     * the column name for the OehdTaxSub field
     */
    const COL_OEHDTAXSUB = 'so_header.OehdTaxSub';

    /**
     * the column name for the OehdNonTaxSub field
     */
    const COL_OEHDNONTAXSUB = 'so_header.OehdNonTaxSub';

    /**
     * the column name for the OehdTaxTot field
     */
    const COL_OEHDTAXTOT = 'so_header.OehdTaxTot';

    /**
     * the column name for the OehdFrtTot field
     */
    const COL_OEHDFRTTOT = 'so_header.OehdFrtTot';

    /**
     * the column name for the OehdMiscTot field
     */
    const COL_OEHDMISCTOT = 'so_header.OehdMiscTot';

    /**
     * the column name for the OehdOrdrTot field
     */
    const COL_OEHDORDRTOT = 'so_header.OehdOrdrTot';

    /**
     * the column name for the OehdCostTot field
     */
    const COL_OEHDCOSTTOT = 'so_header.OehdCostTot';

    /**
     * the column name for the OehdSpCommLock field
     */
    const COL_OEHDSPCOMMLOCK = 'so_header.OehdSpCommLock';

    /**
     * the column name for the OehdTakenDate field
     */
    const COL_OEHDTAKENDATE = 'so_header.OehdTakenDate';

    /**
     * the column name for the OehdTakenTime field
     */
    const COL_OEHDTAKENTIME = 'so_header.OehdTakenTime';

    /**
     * the column name for the OehdPickDate field
     */
    const COL_OEHDPICKDATE = 'so_header.OehdPickDate';

    /**
     * the column name for the OehdPickTime field
     */
    const COL_OEHDPICKTIME = 'so_header.OehdPickTime';

    /**
     * the column name for the OehdPackDate field
     */
    const COL_OEHDPACKDATE = 'so_header.OehdPackDate';

    /**
     * the column name for the OehdPackTime field
     */
    const COL_OEHDPACKTIME = 'so_header.OehdPackTime';

    /**
     * the column name for the OehdVerifyDate field
     */
    const COL_OEHDVERIFYDATE = 'so_header.OehdVerifyDate';

    /**
     * the column name for the OehdVerifyTime field
     */
    const COL_OEHDVERIFYTIME = 'so_header.OehdVerifyTime';

    /**
     * the column name for the OehdCreditMemo field
     */
    const COL_OEHDCREDITMEMO = 'so_header.OehdCreditMemo';

    /**
     * the column name for the OehdBookedYn field
     */
    const COL_OEHDBOOKEDYN = 'so_header.OehdBookedYn';

    /**
     * the column name for the IntbWhseOrig field
     */
    const COL_INTBWHSEORIG = 'so_header.IntbWhseOrig';

    /**
     * the column name for the OehdBtStat field
     */
    const COL_OEHDBTSTAT = 'so_header.OehdBtStat';

    /**
     * the column name for the OehdShipComp field
     */
    const COL_OEHDSHIPCOMP = 'so_header.OehdShipComp';

    /**
     * the column name for the OehdCwoFlag field
     */
    const COL_OEHDCWOFLAG = 'so_header.OehdCwoFlag';

    /**
     * the column name for the OehdDivision field
     */
    const COL_OEHDDIVISION = 'so_header.OehdDivision';

    /**
     * the column name for the OehdTakenCode field
     */
    const COL_OEHDTAKENCODE = 'so_header.OehdTakenCode';

    /**
     * the column name for the OehdPickCode field
     */
    const COL_OEHDPICKCODE = 'so_header.OehdPickCode';

    /**
     * the column name for the OehdPackCode field
     */
    const COL_OEHDPACKCODE = 'so_header.OehdPackCode';

    /**
     * the column name for the OehdVerifyCode field
     */
    const COL_OEHDVERIFYCODE = 'so_header.OehdVerifyCode';

    /**
     * the column name for the OehdTotDisc field
     */
    const COL_OEHDTOTDISC = 'so_header.OehdTotDisc';

    /**
     * the column name for the OehdEdiRefNbrQual field
     */
    const COL_OEHDEDIREFNBRQUAL = 'so_header.OehdEdiRefNbrQual';

    /**
     * the column name for the OehdUserCode1 field
     */
    const COL_OEHDUSERCODE1 = 'so_header.OehdUserCode1';

    /**
     * the column name for the OehdUserCode2 field
     */
    const COL_OEHDUSERCODE2 = 'so_header.OehdUserCode2';

    /**
     * the column name for the OehdUserCode3 field
     */
    const COL_OEHDUSERCODE3 = 'so_header.OehdUserCode3';

    /**
     * the column name for the OehdUserCode4 field
     */
    const COL_OEHDUSERCODE4 = 'so_header.OehdUserCode4';

    /**
     * the column name for the OehdExchCtry field
     */
    const COL_OEHDEXCHCTRY = 'so_header.OehdExchCtry';

    /**
     * the column name for the OehdExchRate field
     */
    const COL_OEHDEXCHRATE = 'so_header.OehdExchRate';

    /**
     * the column name for the OehdWghtTot field
     */
    const COL_OEHDWGHTTOT = 'so_header.OehdWghtTot';

    /**
     * the column name for the OehdWghtOride field
     */
    const COL_OEHDWGHTORIDE = 'so_header.OehdWghtOride';

    /**
     * the column name for the OehdCcInfo field
     */
    const COL_OEHDCCINFO = 'so_header.OehdCcInfo';

    /**
     * the column name for the OehdBoxCount field
     */
    const COL_OEHDBOXCOUNT = 'so_header.OehdBoxCount';

    /**
     * the column name for the OehdRqstDate field
     */
    const COL_OEHDRQSTDATE = 'so_header.OehdRqstDate';

    /**
     * the column name for the OehdCancDate field
     */
    const COL_OEHDCANCDATE = 'so_header.OehdCancDate';

    /**
     * the column name for the OehdCrntUser field
     */
    const COL_OEHDCRNTUSER = 'so_header.OehdCrntUser';

    /**
     * the column name for the OehdReleaseNbr field
     */
    const COL_OEHDRELEASENBR = 'so_header.OehdReleaseNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'so_header.IntbWhse';

    /**
     * the column name for the OehdBordBuildDate field
     */
    const COL_OEHDBORDBUILDDATE = 'so_header.OehdBordBuildDate';

    /**
     * the column name for the OehdDeptCode field
     */
    const COL_OEHDDEPTCODE = 'so_header.OehdDeptCode';

    /**
     * the column name for the OehdFrtInEntered field
     */
    const COL_OEHDFRTINENTERED = 'so_header.OehdFrtInEntered';

    /**
     * the column name for the OehdDropShipEntered field
     */
    const COL_OEHDDROPSHIPENTERED = 'so_header.OehdDropShipEntered';

    /**
     * the column name for the OehdErFlag field
     */
    const COL_OEHDERFLAG = 'so_header.OehdErFlag';

    /**
     * the column name for the OehdFrtIn field
     */
    const COL_OEHDFRTIN = 'so_header.OehdFrtIn';

    /**
     * the column name for the OehdDropShip field
     */
    const COL_OEHDDROPSHIP = 'so_header.OehdDropShip';

    /**
     * the column name for the OehdMinOrder field
     */
    const COL_OEHDMINORDER = 'so_header.OehdMinOrder';

    /**
     * the column name for the OehdContractTerms field
     */
    const COL_OEHDCONTRACTTERMS = 'so_header.OehdContractTerms';

    /**
     * the column name for the OehdDropShipBilled field
     */
    const COL_OEHDDROPSHIPBILLED = 'so_header.OehdDropShipBilled';

    /**
     * the column name for the OehdOrdTyp field
     */
    const COL_OEHDORDTYP = 'so_header.OehdOrdTyp';

    /**
     * the column name for the OehdTrackNbr field
     */
    const COL_OEHDTRACKNBR = 'so_header.OehdTrackNbr';

    /**
     * the column name for the OehdSource field
     */
    const COL_OEHDSOURCE = 'so_header.OehdSource';

    /**
     * the column name for the OehdCcAprv field
     */
    const COL_OEHDCCAPRV = 'so_header.OehdCcAprv';

    /**
     * the column name for the OehdPickFmatType field
     */
    const COL_OEHDPICKFMATTYPE = 'so_header.OehdPickFmatType';

    /**
     * the column name for the OehdInvcFmatType field
     */
    const COL_OEHDINVCFMATTYPE = 'so_header.OehdInvcFmatType';

    /**
     * the column name for the OehdCashAmt field
     */
    const COL_OEHDCASHAMT = 'so_header.OehdCashAmt';

    /**
     * the column name for the OehdCheckAmt field
     */
    const COL_OEHDCHECKAMT = 'so_header.OehdCheckAmt';

    /**
     * the column name for the OehdCheckNbr field
     */
    const COL_OEHDCHECKNBR = 'so_header.OehdCheckNbr';

    /**
     * the column name for the OehdDepositAmt field
     */
    const COL_OEHDDEPOSITAMT = 'so_header.OehdDepositAmt';

    /**
     * the column name for the OehdDepositNbr field
     */
    const COL_OEHDDEPOSITNBR = 'so_header.OehdDepositNbr';

    /**
     * the column name for the OehdCcAmt field
     */
    const COL_OEHDCCAMT = 'so_header.OehdCcAmt';

    /**
     * the column name for the OehdOTaxSub field
     */
    const COL_OEHDOTAXSUB = 'so_header.OehdOTaxSub';

    /**
     * the column name for the OehdONonTaxSub field
     */
    const COL_OEHDONONTAXSUB = 'so_header.OehdONonTaxSub';

    /**
     * the column name for the OehdOTaxTot field
     */
    const COL_OEHDOTAXTOT = 'so_header.OehdOTaxTot';

    /**
     * the column name for the OehdOOrdrTot field
     */
    const COL_OEHDOORDRTOT = 'so_header.OehdOOrdrTot';

    /**
     * the column name for the OehdPickPrintDate field
     */
    const COL_OEHDPICKPRINTDATE = 'so_header.OehdPickPrintDate';

    /**
     * the column name for the OehdPickPrintTime field
     */
    const COL_OEHDPICKPRINTTIME = 'so_header.OehdPickPrintTime';

    /**
     * the column name for the OehdCont field
     */
    const COL_OEHDCONT = 'so_header.OehdCont';

    /**
     * the column name for the OehdContTeleIntl field
     */
    const COL_OEHDCONTTELEINTL = 'so_header.OehdContTeleIntl';

    /**
     * the column name for the OehdContTeleNbr field
     */
    const COL_OEHDCONTTELENBR = 'so_header.OehdContTeleNbr';

    /**
     * the column name for the OehdContTeleExt field
     */
    const COL_OEHDCONTTELEEXT = 'so_header.OehdContTeleExt';

    /**
     * the column name for the OehdContFaxIntl field
     */
    const COL_OEHDCONTFAXINTL = 'so_header.OehdContFaxIntl';

    /**
     * the column name for the OehdContFaxNbr field
     */
    const COL_OEHDCONTFAXNBR = 'so_header.OehdContFaxNbr';

    /**
     * the column name for the OehdShipAcct field
     */
    const COL_OEHDSHIPACCT = 'so_header.OehdShipAcct';

    /**
     * the column name for the OehdChgDue field
     */
    const COL_OEHDCHGDUE = 'so_header.OehdChgDue';

    /**
     * the column name for the OehdAddlPricDisc field
     */
    const COL_OEHDADDLPRICDISC = 'so_header.OehdAddlPricDisc';

    /**
     * the column name for the OehdAllShip field
     */
    const COL_OEHDALLSHIP = 'so_header.OehdAllShip';

    /**
     * the column name for the OehdQtyOrderAmt field
     */
    const COL_OEHDQTYORDERAMT = 'so_header.OehdQtyOrderAmt';

    /**
     * the column name for the OehdCreditApplied field
     */
    const COL_OEHDCREDITAPPLIED = 'so_header.OehdCreditApplied';

    /**
     * the column name for the OehdInvcPrintDate field
     */
    const COL_OEHDINVCPRINTDATE = 'so_header.OehdInvcPrintDate';

    /**
     * the column name for the OehdInvcPrintTime field
     */
    const COL_OEHDINVCPRINTTIME = 'so_header.OehdInvcPrintTime';

    /**
     * the column name for the OehdDiscFrt field
     */
    const COL_OEHDDISCFRT = 'so_header.OehdDiscFrt';

    /**
     * the column name for the OehdOrideShipComp field
     */
    const COL_OEHDORIDESHIPCOMP = 'so_header.OehdOrideShipComp';

    /**
     * the column name for the OehdContEmail field
     */
    const COL_OEHDCONTEMAIL = 'so_header.OehdContEmail';

    /**
     * the column name for the OehdManualFrt field
     */
    const COL_OEHDMANUALFRT = 'so_header.OehdManualFrt';

    /**
     * the column name for the OehdInternalFrt field
     */
    const COL_OEHDINTERNALFRT = 'so_header.OehdInternalFrt';

    /**
     * the column name for the OehdFrtCost field
     */
    const COL_OEHDFRTCOST = 'so_header.OehdFrtCost';

    /**
     * the column name for the OehdRoute field
     */
    const COL_OEHDROUTE = 'so_header.OehdRoute';

    /**
     * the column name for the OehdRouteSeq field
     */
    const COL_OEHDROUTESEQ = 'so_header.OehdRouteSeq';

    /**
     * the column name for the OehdFrtTaxCode1 field
     */
    const COL_OEHDFRTTAXCODE1 = 'so_header.OehdFrtTaxCode1';

    /**
     * the column name for the OehdFrtTaxAmt1 field
     */
    const COL_OEHDFRTTAXAMT1 = 'so_header.OehdFrtTaxAmt1';

    /**
     * the column name for the OehdFrtTaxCode2 field
     */
    const COL_OEHDFRTTAXCODE2 = 'so_header.OehdFrtTaxCode2';

    /**
     * the column name for the OehdFrtTaxAmt2 field
     */
    const COL_OEHDFRTTAXAMT2 = 'so_header.OehdFrtTaxAmt2';

    /**
     * the column name for the OehdFrtTaxCode3 field
     */
    const COL_OEHDFRTTAXCODE3 = 'so_header.OehdFrtTaxCode3';

    /**
     * the column name for the OehdFrtTaxAmt3 field
     */
    const COL_OEHDFRTTAXAMT3 = 'so_header.OehdFrtTaxAmt3';

    /**
     * the column name for the OehdFrtTaxCode4 field
     */
    const COL_OEHDFRTTAXCODE4 = 'so_header.OehdFrtTaxCode4';

    /**
     * the column name for the OehdFrtTaxAmt4 field
     */
    const COL_OEHDFRTTAXAMT4 = 'so_header.OehdFrtTaxAmt4';

    /**
     * the column name for the OehdFrtTaxCode5 field
     */
    const COL_OEHDFRTTAXCODE5 = 'so_header.OehdFrtTaxCode5';

    /**
     * the column name for the OehdFrtTaxAmt5 field
     */
    const COL_OEHDFRTTAXAMT5 = 'so_header.OehdFrtTaxAmt5';

    /**
     * the column name for the OehdEdi855Sent field
     */
    const COL_OEHDEDI855SENT = 'so_header.OehdEdi855Sent';

    /**
     * the column name for the OehdFrt3rdParty field
     */
    const COL_OEHDFRT3RDPARTY = 'so_header.OehdFrt3rdParty';

    /**
     * the column name for the OehdFob field
     */
    const COL_OEHDFOB = 'so_header.OehdFob';

    /**
     * the column name for the OehdConfirmImagYn field
     */
    const COL_OEHDCONFIRMIMAGYN = 'so_header.OehdConfirmImagYn';

    /**
     * the column name for the OehdIndustConform field
     */
    const COL_OEHDINDUSTCONFORM = 'so_header.OehdIndustConform';

    /**
     * the column name for the OehdCstkConsign field
     */
    const COL_OEHDCSTKCONSIGN = 'so_header.OehdCstkConsign';

    /**
     * the column name for the OehdLmDelayCapSent field
     */
    const COL_OEHDLMDELAYCAPSENT = 'so_header.OehdLmDelayCapSent';

    /**
     * the column name for the OehdMfgId field
     */
    const COL_OEHDMFGID = 'so_header.OehdMfgId';

    /**
     * the column name for the OehdStoreId field
     */
    const COL_OEHDSTOREID = 'so_header.OehdStoreId';

    /**
     * the column name for the OehdPickQueue field
     */
    const COL_OEHDPICKQUEUE = 'so_header.OehdPickQueue';

    /**
     * the column name for the OehdArrvDate field
     */
    const COL_OEHDARRVDATE = 'so_header.OehdArrvDate';

    /**
     * the column name for the OehdSurchgStat field
     */
    const COL_OEHDSURCHGSTAT = 'so_header.OehdSurchgStat';

    /**
     * the column name for the OehdFrtGrup field
     */
    const COL_OEHDFRTGRUP = 'so_header.OehdFrtGrup';

    /**
     * the column name for the OehdCommOride field
     */
    const COL_OEHDCOMMORIDE = 'so_header.OehdCommOride';

    /**
     * the column name for the OehdChrgSplt field
     */
    const COL_OEHDCHRGSPLT = 'so_header.OehdChrgSplt';

    /**
     * the column name for the OehdAcCcAprv field
     */
    const COL_OEHDACCCAPRV = 'so_header.OehdAcCcAprv';

    /**
     * the column name for the OehdOrigOrdrNbr field
     */
    const COL_OEHDORIGORDRNBR = 'so_header.OehdOrigOrdrNbr';

    /**
     * the column name for the OehdPostDate field
     */
    const COL_OEHDPOSTDATE = 'so_header.OehdPostDate';

    /**
     * the column name for the OehdDiscDate1 field
     */
    const COL_OEHDDISCDATE1 = 'so_header.OehdDiscDate1';

    /**
     * the column name for the OehdDiscPct1 field
     */
    const COL_OEHDDISCPCT1 = 'so_header.OehdDiscPct1';

    /**
     * the column name for the OehdDueDate1 field
     */
    const COL_OEHDDUEDATE1 = 'so_header.OehdDueDate1';

    /**
     * the column name for the OehdDueAmt1 field
     */
    const COL_OEHDDUEAMT1 = 'so_header.OehdDueAmt1';

    /**
     * the column name for the OehdDuePct1 field
     */
    const COL_OEHDDUEPCT1 = 'so_header.OehdDuePct1';

    /**
     * the column name for the OehdDiscDate2 field
     */
    const COL_OEHDDISCDATE2 = 'so_header.OehdDiscDate2';

    /**
     * the column name for the OehdDiscPct2 field
     */
    const COL_OEHDDISCPCT2 = 'so_header.OehdDiscPct2';

    /**
     * the column name for the OehdDueDate2 field
     */
    const COL_OEHDDUEDATE2 = 'so_header.OehdDueDate2';

    /**
     * the column name for the OehdDueAmt2 field
     */
    const COL_OEHDDUEAMT2 = 'so_header.OehdDueAmt2';

    /**
     * the column name for the OehdDuePct2 field
     */
    const COL_OEHDDUEPCT2 = 'so_header.OehdDuePct2';

    /**
     * the column name for the OehdDiscDate3 field
     */
    const COL_OEHDDISCDATE3 = 'so_header.OehdDiscDate3';

    /**
     * the column name for the OehdDiscPct3 field
     */
    const COL_OEHDDISCPCT3 = 'so_header.OehdDiscPct3';

    /**
     * the column name for the OehdDueDate3 field
     */
    const COL_OEHDDUEDATE3 = 'so_header.OehdDueDate3';

    /**
     * the column name for the OehdDueAmt3 field
     */
    const COL_OEHDDUEAMT3 = 'so_header.OehdDueAmt3';

    /**
     * the column name for the OehdDuePct3 field
     */
    const COL_OEHDDUEPCT3 = 'so_header.OehdDuePct3';

    /**
     * the column name for the OehdDiscDate4 field
     */
    const COL_OEHDDISCDATE4 = 'so_header.OehdDiscDate4';

    /**
     * the column name for the OehdDiscPct4 field
     */
    const COL_OEHDDISCPCT4 = 'so_header.OehdDiscPct4';

    /**
     * the column name for the OehdDueDate4 field
     */
    const COL_OEHDDUEDATE4 = 'so_header.OehdDueDate4';

    /**
     * the column name for the OehdDueAmt4 field
     */
    const COL_OEHDDUEAMT4 = 'so_header.OehdDueAmt4';

    /**
     * the column name for the OehdDuePct4 field
     */
    const COL_OEHDDUEPCT4 = 'so_header.OehdDuePct4';

    /**
     * the column name for the OehdDiscDate5 field
     */
    const COL_OEHDDISCDATE5 = 'so_header.OehdDiscDate5';

    /**
     * the column name for the OehdDiscPct5 field
     */
    const COL_OEHDDISCPCT5 = 'so_header.OehdDiscPct5';

    /**
     * the column name for the OehdDueDate5 field
     */
    const COL_OEHDDUEDATE5 = 'so_header.OehdDueDate5';

    /**
     * the column name for the OehdDueAmt5 field
     */
    const COL_OEHDDUEAMT5 = 'so_header.OehdDueAmt5';

    /**
     * the column name for the OehdDuePct5 field
     */
    const COL_OEHDDUEPCT5 = 'so_header.OehdDuePct5';

    /**
     * the column name for the OehdDiscDate6 field
     */
    const COL_OEHDDISCDATE6 = 'so_header.OehdDiscDate6';

    /**
     * the column name for the OehdDiscPct6 field
     */
    const COL_OEHDDISCPCT6 = 'so_header.OehdDiscPct6';

    /**
     * the column name for the OehdDueDate6 field
     */
    const COL_OEHDDUEDATE6 = 'so_header.OehdDueDate6';

    /**
     * the column name for the OehdDueAmt6 field
     */
    const COL_OEHDDUEAMT6 = 'so_header.OehdDueAmt6';

    /**
     * the column name for the OehdDuePct6 field
     */
    const COL_OEHDDUEPCT6 = 'so_header.OehdDuePct6';

    /**
     * the column name for the OehdRefNbr field
     */
    const COL_OEHDREFNBR = 'so_header.OehdRefNbr';

    /**
     * the column name for the OehdAcProgNbr field
     */
    const COL_OEHDACPROGNBR = 'so_header.OehdAcProgNbr';

    /**
     * the column name for the OehdAcProgExpDate field
     */
    const COL_OEHDACPROGEXPDATE = 'so_header.OehdAcProgExpDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_header.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_header.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_header.dummy';

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oehdstat', 'Oehdhold', 'Arcucustid', 'Arstshipid', 'Oehdstname', 'Oehdstlastname', 'Oehdstfirstname', 'Oehdstadr1', 'Oehdstadr2', 'Oehdstadr3', 'Oehdstctry', 'Oehdstcity', 'Oehdststat', 'Oehdstzipcode', 'Oehdcustpo', 'Oehdordrdate', 'Artmtermcd', 'Artbshipvia', 'Arininvnbr', 'Oehdinvdate', 'Oehdglpd', 'Arspsaleper1', 'Oehdsp1pct', 'Arspsaleper2', 'Oehdsp2pct', 'Arspsaleper3', 'Oehdsp3pct', 'Oehdcntrnbr', 'Oehdwibatch', 'Oehddroprelhold', 'Oehdtaxsub', 'Oehdnontaxsub', 'Oehdtaxtot', 'Oehdfrttot', 'Oehdmisctot', 'Oehdordrtot', 'Oehdcosttot', 'Oehdspcommlock', 'Oehdtakendate', 'Oehdtakentime', 'Oehdpickdate', 'Oehdpicktime', 'Oehdpackdate', 'Oehdpacktime', 'Oehdverifydate', 'Oehdverifytime', 'Oehdcreditmemo', 'Oehdbookedyn', 'Intbwhseorig', 'Oehdbtstat', 'Oehdshipcomp', 'Oehdcwoflag', 'Oehddivision', 'Oehdtakencode', 'Oehdpickcode', 'Oehdpackcode', 'Oehdverifycode', 'Oehdtotdisc', 'Oehdedirefnbrqual', 'Oehdusercode1', 'Oehdusercode2', 'Oehdusercode3', 'Oehdusercode4', 'Oehdexchctry', 'Oehdexchrate', 'Oehdwghttot', 'Oehdwghtoride', 'Oehdccinfo', 'Oehdboxcount', 'Oehdrqstdate', 'Oehdcancdate', 'Oehdcrntuser', 'Oehdreleasenbr', 'Intbwhse', 'Oehdbordbuilddate', 'Oehddeptcode', 'Oehdfrtinentered', 'Oehddropshipentered', 'Oehderflag', 'Oehdfrtin', 'Oehddropship', 'Oehdminorder', 'Oehdcontractterms', 'Oehddropshipbilled', 'Oehdordtyp', 'Oehdtracknbr', 'Oehdsource', 'Oehdccaprv', 'Oehdpickfmattype', 'Oehdinvcfmattype', 'Oehdcashamt', 'Oehdcheckamt', 'Oehdchecknbr', 'Oehddepositamt', 'Oehddepositnbr', 'Oehdccamt', 'Oehdotaxsub', 'Oehdonontaxsub', 'Oehdotaxtot', 'Oehdoordrtot', 'Oehdpickprintdate', 'Oehdpickprinttime', 'Oehdcont', 'Oehdcontteleintl', 'Oehdconttelenbr', 'Oehdcontteleext', 'Oehdcontfaxintl', 'Oehdcontfaxnbr', 'Oehdshipacct', 'Oehdchgdue', 'Oehdaddlpricdisc', 'Oehdallship', 'Oehdqtyorderamt', 'Oehdcreditapplied', 'Oehdinvcprintdate', 'Oehdinvcprinttime', 'Oehddiscfrt', 'Oehdorideshipcomp', 'Oehdcontemail', 'Oehdmanualfrt', 'Oehdinternalfrt', 'Oehdfrtcost', 'Oehdroute', 'Oehdrouteseq', 'Oehdfrttaxcode1', 'Oehdfrttaxamt1', 'Oehdfrttaxcode2', 'Oehdfrttaxamt2', 'Oehdfrttaxcode3', 'Oehdfrttaxamt3', 'Oehdfrttaxcode4', 'Oehdfrttaxamt4', 'Oehdfrttaxcode5', 'Oehdfrttaxamt5', 'Oehdedi855sent', 'Oehdfrt3rdparty', 'Oehdfob', 'Oehdconfirmimagyn', 'Oehdindustconform', 'Oehdcstkconsign', 'Oehdlmdelaycapsent', 'Oehdmfgid', 'Oehdstoreid', 'Oehdpickqueue', 'Oehdarrvdate', 'Oehdsurchgstat', 'Oehdfrtgrup', 'Oehdcommoride', 'Oehdchrgsplt', 'Oehdacccaprv', 'Oehdorigordrnbr', 'Oehdpostdate', 'Oehddiscdate1', 'Oehddiscpct1', 'Oehdduedate1', 'Oehddueamt1', 'Oehdduepct1', 'Oehddiscdate2', 'Oehddiscpct2', 'Oehdduedate2', 'Oehddueamt2', 'Oehdduepct2', 'Oehddiscdate3', 'Oehddiscpct3', 'Oehdduedate3', 'Oehddueamt3', 'Oehdduepct3', 'Oehddiscdate4', 'Oehddiscpct4', 'Oehdduedate4', 'Oehddueamt4', 'Oehdduepct4', 'Oehddiscdate5', 'Oehddiscpct5', 'Oehdduedate5', 'Oehddueamt5', 'Oehdduepct5', 'Oehddiscdate6', 'Oehddiscpct6', 'Oehdduedate6', 'Oehddueamt6', 'Oehdduepct6', 'Oehdrefnbr', 'Oehdacprognbr', 'Oehdacprogexpdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oehdstat', 'oehdhold', 'arcucustid', 'arstshipid', 'oehdstname', 'oehdstlastname', 'oehdstfirstname', 'oehdstadr1', 'oehdstadr2', 'oehdstadr3', 'oehdstctry', 'oehdstcity', 'oehdststat', 'oehdstzipcode', 'oehdcustpo', 'oehdordrdate', 'artmtermcd', 'artbshipvia', 'arininvnbr', 'oehdinvdate', 'oehdglpd', 'arspsaleper1', 'oehdsp1pct', 'arspsaleper2', 'oehdsp2pct', 'arspsaleper3', 'oehdsp3pct', 'oehdcntrnbr', 'oehdwibatch', 'oehddroprelhold', 'oehdtaxsub', 'oehdnontaxsub', 'oehdtaxtot', 'oehdfrttot', 'oehdmisctot', 'oehdordrtot', 'oehdcosttot', 'oehdspcommlock', 'oehdtakendate', 'oehdtakentime', 'oehdpickdate', 'oehdpicktime', 'oehdpackdate', 'oehdpacktime', 'oehdverifydate', 'oehdverifytime', 'oehdcreditmemo', 'oehdbookedyn', 'intbwhseorig', 'oehdbtstat', 'oehdshipcomp', 'oehdcwoflag', 'oehddivision', 'oehdtakencode', 'oehdpickcode', 'oehdpackcode', 'oehdverifycode', 'oehdtotdisc', 'oehdedirefnbrqual', 'oehdusercode1', 'oehdusercode2', 'oehdusercode3', 'oehdusercode4', 'oehdexchctry', 'oehdexchrate', 'oehdwghttot', 'oehdwghtoride', 'oehdccinfo', 'oehdboxcount', 'oehdrqstdate', 'oehdcancdate', 'oehdcrntuser', 'oehdreleasenbr', 'intbwhse', 'oehdbordbuilddate', 'oehddeptcode', 'oehdfrtinentered', 'oehddropshipentered', 'oehderflag', 'oehdfrtin', 'oehddropship', 'oehdminorder', 'oehdcontractterms', 'oehddropshipbilled', 'oehdordtyp', 'oehdtracknbr', 'oehdsource', 'oehdccaprv', 'oehdpickfmattype', 'oehdinvcfmattype', 'oehdcashamt', 'oehdcheckamt', 'oehdchecknbr', 'oehddepositamt', 'oehddepositnbr', 'oehdccamt', 'oehdotaxsub', 'oehdonontaxsub', 'oehdotaxtot', 'oehdoordrtot', 'oehdpickprintdate', 'oehdpickprinttime', 'oehdcont', 'oehdcontteleintl', 'oehdconttelenbr', 'oehdcontteleext', 'oehdcontfaxintl', 'oehdcontfaxnbr', 'oehdshipacct', 'oehdchgdue', 'oehdaddlpricdisc', 'oehdallship', 'oehdqtyorderamt', 'oehdcreditapplied', 'oehdinvcprintdate', 'oehdinvcprinttime', 'oehddiscfrt', 'oehdorideshipcomp', 'oehdcontemail', 'oehdmanualfrt', 'oehdinternalfrt', 'oehdfrtcost', 'oehdroute', 'oehdrouteseq', 'oehdfrttaxcode1', 'oehdfrttaxamt1', 'oehdfrttaxcode2', 'oehdfrttaxamt2', 'oehdfrttaxcode3', 'oehdfrttaxamt3', 'oehdfrttaxcode4', 'oehdfrttaxamt4', 'oehdfrttaxcode5', 'oehdfrttaxamt5', 'oehdedi855sent', 'oehdfrt3rdparty', 'oehdfob', 'oehdconfirmimagyn', 'oehdindustconform', 'oehdcstkconsign', 'oehdlmdelaycapsent', 'oehdmfgid', 'oehdstoreid', 'oehdpickqueue', 'oehdarrvdate', 'oehdsurchgstat', 'oehdfrtgrup', 'oehdcommoride', 'oehdchrgsplt', 'oehdacccaprv', 'oehdorigordrnbr', 'oehdpostdate', 'oehddiscdate1', 'oehddiscpct1', 'oehdduedate1', 'oehddueamt1', 'oehdduepct1', 'oehddiscdate2', 'oehddiscpct2', 'oehdduedate2', 'oehddueamt2', 'oehdduepct2', 'oehddiscdate3', 'oehddiscpct3', 'oehdduedate3', 'oehddueamt3', 'oehdduepct3', 'oehddiscdate4', 'oehddiscpct4', 'oehdduedate4', 'oehddueamt4', 'oehdduepct4', 'oehddiscdate5', 'oehddiscpct5', 'oehdduedate5', 'oehddueamt5', 'oehdduepct5', 'oehddiscdate6', 'oehddiscpct6', 'oehdduedate6', 'oehddueamt6', 'oehdduepct6', 'oehdrefnbr', 'oehdacprognbr', 'oehdacprogexpdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesOrderTableMap::COL_OEHDNBR, SalesOrderTableMap::COL_OEHDSTAT, SalesOrderTableMap::COL_OEHDHOLD, SalesOrderTableMap::COL_ARCUCUSTID, SalesOrderTableMap::COL_ARSTSHIPID, SalesOrderTableMap::COL_OEHDSTNAME, SalesOrderTableMap::COL_OEHDSTLASTNAME, SalesOrderTableMap::COL_OEHDSTFIRSTNAME, SalesOrderTableMap::COL_OEHDSTADR1, SalesOrderTableMap::COL_OEHDSTADR2, SalesOrderTableMap::COL_OEHDSTADR3, SalesOrderTableMap::COL_OEHDSTCTRY, SalesOrderTableMap::COL_OEHDSTCITY, SalesOrderTableMap::COL_OEHDSTSTAT, SalesOrderTableMap::COL_OEHDSTZIPCODE, SalesOrderTableMap::COL_OEHDCUSTPO, SalesOrderTableMap::COL_OEHDORDRDATE, SalesOrderTableMap::COL_ARTMTERMCD, SalesOrderTableMap::COL_ARTBSHIPVIA, SalesOrderTableMap::COL_ARININVNBR, SalesOrderTableMap::COL_OEHDINVDATE, SalesOrderTableMap::COL_OEHDGLPD, SalesOrderTableMap::COL_ARSPSALEPER1, SalesOrderTableMap::COL_OEHDSP1PCT, SalesOrderTableMap::COL_ARSPSALEPER2, SalesOrderTableMap::COL_OEHDSP2PCT, SalesOrderTableMap::COL_ARSPSALEPER3, SalesOrderTableMap::COL_OEHDSP3PCT, SalesOrderTableMap::COL_OEHDCNTRNBR, SalesOrderTableMap::COL_OEHDWIBATCH, SalesOrderTableMap::COL_OEHDDROPRELHOLD, SalesOrderTableMap::COL_OEHDTAXSUB, SalesOrderTableMap::COL_OEHDNONTAXSUB, SalesOrderTableMap::COL_OEHDTAXTOT, SalesOrderTableMap::COL_OEHDFRTTOT, SalesOrderTableMap::COL_OEHDMISCTOT, SalesOrderTableMap::COL_OEHDORDRTOT, SalesOrderTableMap::COL_OEHDCOSTTOT, SalesOrderTableMap::COL_OEHDSPCOMMLOCK, SalesOrderTableMap::COL_OEHDTAKENDATE, SalesOrderTableMap::COL_OEHDTAKENTIME, SalesOrderTableMap::COL_OEHDPICKDATE, SalesOrderTableMap::COL_OEHDPICKTIME, SalesOrderTableMap::COL_OEHDPACKDATE, SalesOrderTableMap::COL_OEHDPACKTIME, SalesOrderTableMap::COL_OEHDVERIFYDATE, SalesOrderTableMap::COL_OEHDVERIFYTIME, SalesOrderTableMap::COL_OEHDCREDITMEMO, SalesOrderTableMap::COL_OEHDBOOKEDYN, SalesOrderTableMap::COL_INTBWHSEORIG, SalesOrderTableMap::COL_OEHDBTSTAT, SalesOrderTableMap::COL_OEHDSHIPCOMP, SalesOrderTableMap::COL_OEHDCWOFLAG, SalesOrderTableMap::COL_OEHDDIVISION, SalesOrderTableMap::COL_OEHDTAKENCODE, SalesOrderTableMap::COL_OEHDPICKCODE, SalesOrderTableMap::COL_OEHDPACKCODE, SalesOrderTableMap::COL_OEHDVERIFYCODE, SalesOrderTableMap::COL_OEHDTOTDISC, SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL, SalesOrderTableMap::COL_OEHDUSERCODE1, SalesOrderTableMap::COL_OEHDUSERCODE2, SalesOrderTableMap::COL_OEHDUSERCODE3, SalesOrderTableMap::COL_OEHDUSERCODE4, SalesOrderTableMap::COL_OEHDEXCHCTRY, SalesOrderTableMap::COL_OEHDEXCHRATE, SalesOrderTableMap::COL_OEHDWGHTTOT, SalesOrderTableMap::COL_OEHDWGHTORIDE, SalesOrderTableMap::COL_OEHDCCINFO, SalesOrderTableMap::COL_OEHDBOXCOUNT, SalesOrderTableMap::COL_OEHDRQSTDATE, SalesOrderTableMap::COL_OEHDCANCDATE, SalesOrderTableMap::COL_OEHDCRNTUSER, SalesOrderTableMap::COL_OEHDRELEASENBR, SalesOrderTableMap::COL_INTBWHSE, SalesOrderTableMap::COL_OEHDBORDBUILDDATE, SalesOrderTableMap::COL_OEHDDEPTCODE, SalesOrderTableMap::COL_OEHDFRTINENTERED, SalesOrderTableMap::COL_OEHDDROPSHIPENTERED, SalesOrderTableMap::COL_OEHDERFLAG, SalesOrderTableMap::COL_OEHDFRTIN, SalesOrderTableMap::COL_OEHDDROPSHIP, SalesOrderTableMap::COL_OEHDMINORDER, SalesOrderTableMap::COL_OEHDCONTRACTTERMS, SalesOrderTableMap::COL_OEHDDROPSHIPBILLED, SalesOrderTableMap::COL_OEHDORDTYP, SalesOrderTableMap::COL_OEHDTRACKNBR, SalesOrderTableMap::COL_OEHDSOURCE, SalesOrderTableMap::COL_OEHDCCAPRV, SalesOrderTableMap::COL_OEHDPICKFMATTYPE, SalesOrderTableMap::COL_OEHDINVCFMATTYPE, SalesOrderTableMap::COL_OEHDCASHAMT, SalesOrderTableMap::COL_OEHDCHECKAMT, SalesOrderTableMap::COL_OEHDCHECKNBR, SalesOrderTableMap::COL_OEHDDEPOSITAMT, SalesOrderTableMap::COL_OEHDDEPOSITNBR, SalesOrderTableMap::COL_OEHDCCAMT, SalesOrderTableMap::COL_OEHDOTAXSUB, SalesOrderTableMap::COL_OEHDONONTAXSUB, SalesOrderTableMap::COL_OEHDOTAXTOT, SalesOrderTableMap::COL_OEHDOORDRTOT, SalesOrderTableMap::COL_OEHDPICKPRINTDATE, SalesOrderTableMap::COL_OEHDPICKPRINTTIME, SalesOrderTableMap::COL_OEHDCONT, SalesOrderTableMap::COL_OEHDCONTTELEINTL, SalesOrderTableMap::COL_OEHDCONTTELENBR, SalesOrderTableMap::COL_OEHDCONTTELEEXT, SalesOrderTableMap::COL_OEHDCONTFAXINTL, SalesOrderTableMap::COL_OEHDCONTFAXNBR, SalesOrderTableMap::COL_OEHDSHIPACCT, SalesOrderTableMap::COL_OEHDCHGDUE, SalesOrderTableMap::COL_OEHDADDLPRICDISC, SalesOrderTableMap::COL_OEHDALLSHIP, SalesOrderTableMap::COL_OEHDQTYORDERAMT, SalesOrderTableMap::COL_OEHDCREDITAPPLIED, SalesOrderTableMap::COL_OEHDINVCPRINTDATE, SalesOrderTableMap::COL_OEHDINVCPRINTTIME, SalesOrderTableMap::COL_OEHDDISCFRT, SalesOrderTableMap::COL_OEHDORIDESHIPCOMP, SalesOrderTableMap::COL_OEHDCONTEMAIL, SalesOrderTableMap::COL_OEHDMANUALFRT, SalesOrderTableMap::COL_OEHDINTERNALFRT, SalesOrderTableMap::COL_OEHDFRTCOST, SalesOrderTableMap::COL_OEHDROUTE, SalesOrderTableMap::COL_OEHDROUTESEQ, SalesOrderTableMap::COL_OEHDFRTTAXCODE1, SalesOrderTableMap::COL_OEHDFRTTAXAMT1, SalesOrderTableMap::COL_OEHDFRTTAXCODE2, SalesOrderTableMap::COL_OEHDFRTTAXAMT2, SalesOrderTableMap::COL_OEHDFRTTAXCODE3, SalesOrderTableMap::COL_OEHDFRTTAXAMT3, SalesOrderTableMap::COL_OEHDFRTTAXCODE4, SalesOrderTableMap::COL_OEHDFRTTAXAMT4, SalesOrderTableMap::COL_OEHDFRTTAXCODE5, SalesOrderTableMap::COL_OEHDFRTTAXAMT5, SalesOrderTableMap::COL_OEHDEDI855SENT, SalesOrderTableMap::COL_OEHDFRT3RDPARTY, SalesOrderTableMap::COL_OEHDFOB, SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN, SalesOrderTableMap::COL_OEHDINDUSTCONFORM, SalesOrderTableMap::COL_OEHDCSTKCONSIGN, SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT, SalesOrderTableMap::COL_OEHDMFGID, SalesOrderTableMap::COL_OEHDSTOREID, SalesOrderTableMap::COL_OEHDPICKQUEUE, SalesOrderTableMap::COL_OEHDARRVDATE, SalesOrderTableMap::COL_OEHDSURCHGSTAT, SalesOrderTableMap::COL_OEHDFRTGRUP, SalesOrderTableMap::COL_OEHDCOMMORIDE, SalesOrderTableMap::COL_OEHDCHRGSPLT, SalesOrderTableMap::COL_OEHDACCCAPRV, SalesOrderTableMap::COL_OEHDORIGORDRNBR, SalesOrderTableMap::COL_OEHDPOSTDATE, SalesOrderTableMap::COL_OEHDDISCDATE1, SalesOrderTableMap::COL_OEHDDISCPCT1, SalesOrderTableMap::COL_OEHDDUEDATE1, SalesOrderTableMap::COL_OEHDDUEAMT1, SalesOrderTableMap::COL_OEHDDUEPCT1, SalesOrderTableMap::COL_OEHDDISCDATE2, SalesOrderTableMap::COL_OEHDDISCPCT2, SalesOrderTableMap::COL_OEHDDUEDATE2, SalesOrderTableMap::COL_OEHDDUEAMT2, SalesOrderTableMap::COL_OEHDDUEPCT2, SalesOrderTableMap::COL_OEHDDISCDATE3, SalesOrderTableMap::COL_OEHDDISCPCT3, SalesOrderTableMap::COL_OEHDDUEDATE3, SalesOrderTableMap::COL_OEHDDUEAMT3, SalesOrderTableMap::COL_OEHDDUEPCT3, SalesOrderTableMap::COL_OEHDDISCDATE4, SalesOrderTableMap::COL_OEHDDISCPCT4, SalesOrderTableMap::COL_OEHDDUEDATE4, SalesOrderTableMap::COL_OEHDDUEAMT4, SalesOrderTableMap::COL_OEHDDUEPCT4, SalesOrderTableMap::COL_OEHDDISCDATE5, SalesOrderTableMap::COL_OEHDDISCPCT5, SalesOrderTableMap::COL_OEHDDUEDATE5, SalesOrderTableMap::COL_OEHDDUEAMT5, SalesOrderTableMap::COL_OEHDDUEPCT5, SalesOrderTableMap::COL_OEHDDISCDATE6, SalesOrderTableMap::COL_OEHDDISCPCT6, SalesOrderTableMap::COL_OEHDDUEDATE6, SalesOrderTableMap::COL_OEHDDUEAMT6, SalesOrderTableMap::COL_OEHDDUEPCT6, SalesOrderTableMap::COL_OEHDREFNBR, SalesOrderTableMap::COL_OEHDACPROGNBR, SalesOrderTableMap::COL_OEHDACPROGEXPDATE, SalesOrderTableMap::COL_DATEUPDTD, SalesOrderTableMap::COL_TIMEUPDTD, SalesOrderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OehdStat', 'OehdHold', 'ArcuCustId', 'ArstShipId', 'OehdStName', 'OehdStLastName', 'OehdStFirstName', 'OehdStAdr1', 'OehdStAdr2', 'OehdStAdr3', 'OehdStCtry', 'OehdStCity', 'OehdStStat', 'OehdStZipCode', 'OehdCustPo', 'OehdOrdrDate', 'ArtmTermCd', 'ArtbShipVia', 'ArinInvNbr', 'OehdInvDate', 'OehdGLPd', 'ArspSalePer1', 'OehdSp1Pct', 'ArspSalePer2', 'OehdSp2Pct', 'ArspSalePer3', 'OehdSp3Pct', 'OehdCntrNbr', 'OehdWiBatch', 'OehdDropRelHold', 'OehdTaxSub', 'OehdNonTaxSub', 'OehdTaxTot', 'OehdFrtTot', 'OehdMiscTot', 'OehdOrdrTot', 'OehdCostTot', 'OehdSpCommLock', 'OehdTakenDate', 'OehdTakenTime', 'OehdPickDate', 'OehdPickTime', 'OehdPackDate', 'OehdPackTime', 'OehdVerifyDate', 'OehdVerifyTime', 'OehdCreditMemo', 'OehdBookedYn', 'IntbWhseOrig', 'OehdBtStat', 'OehdShipComp', 'OehdCwoFlag', 'OehdDivision', 'OehdTakenCode', 'OehdPickCode', 'OehdPackCode', 'OehdVerifyCode', 'OehdTotDisc', 'OehdEdiRefNbrQual', 'OehdUserCode1', 'OehdUserCode2', 'OehdUserCode3', 'OehdUserCode4', 'OehdExchCtry', 'OehdExchRate', 'OehdWghtTot', 'OehdWghtOride', 'OehdCcInfo', 'OehdBoxCount', 'OehdRqstDate', 'OehdCancDate', 'OehdCrntUser', 'OehdReleaseNbr', 'IntbWhse', 'OehdBordBuildDate', 'OehdDeptCode', 'OehdFrtInEntered', 'OehdDropShipEntered', 'OehdErFlag', 'OehdFrtIn', 'OehdDropShip', 'OehdMinOrder', 'OehdContractTerms', 'OehdDropShipBilled', 'OehdOrdTyp', 'OehdTrackNbr', 'OehdSource', 'OehdCcAprv', 'OehdPickFmatType', 'OehdInvcFmatType', 'OehdCashAmt', 'OehdCheckAmt', 'OehdCheckNbr', 'OehdDepositAmt', 'OehdDepositNbr', 'OehdCcAmt', 'OehdOTaxSub', 'OehdONonTaxSub', 'OehdOTaxTot', 'OehdOOrdrTot', 'OehdPickPrintDate', 'OehdPickPrintTime', 'OehdCont', 'OehdContTeleIntl', 'OehdContTeleNbr', 'OehdContTeleExt', 'OehdContFaxIntl', 'OehdContFaxNbr', 'OehdShipAcct', 'OehdChgDue', 'OehdAddlPricDisc', 'OehdAllShip', 'OehdQtyOrderAmt', 'OehdCreditApplied', 'OehdInvcPrintDate', 'OehdInvcPrintTime', 'OehdDiscFrt', 'OehdOrideShipComp', 'OehdContEmail', 'OehdManualFrt', 'OehdInternalFrt', 'OehdFrtCost', 'OehdRoute', 'OehdRouteSeq', 'OehdFrtTaxCode1', 'OehdFrtTaxAmt1', 'OehdFrtTaxCode2', 'OehdFrtTaxAmt2', 'OehdFrtTaxCode3', 'OehdFrtTaxAmt3', 'OehdFrtTaxCode4', 'OehdFrtTaxAmt4', 'OehdFrtTaxCode5', 'OehdFrtTaxAmt5', 'OehdEdi855Sent', 'OehdFrt3rdParty', 'OehdFob', 'OehdConfirmImagYn', 'OehdIndustConform', 'OehdCstkConsign', 'OehdLmDelayCapSent', 'OehdMfgId', 'OehdStoreId', 'OehdPickQueue', 'OehdArrvDate', 'OehdSurchgStat', 'OehdFrtGrup', 'OehdCommOride', 'OehdChrgSplt', 'OehdAcCcAprv', 'OehdOrigOrdrNbr', 'OehdPostDate', 'OehdDiscDate1', 'OehdDiscPct1', 'OehdDueDate1', 'OehdDueAmt1', 'OehdDuePct1', 'OehdDiscDate2', 'OehdDiscPct2', 'OehdDueDate2', 'OehdDueAmt2', 'OehdDuePct2', 'OehdDiscDate3', 'OehdDiscPct3', 'OehdDueDate3', 'OehdDueAmt3', 'OehdDuePct3', 'OehdDiscDate4', 'OehdDiscPct4', 'OehdDueDate4', 'OehdDueAmt4', 'OehdDuePct4', 'OehdDiscDate5', 'OehdDiscPct5', 'OehdDueDate5', 'OehdDueAmt5', 'OehdDuePct5', 'OehdDiscDate6', 'OehdDiscPct6', 'OehdDueDate6', 'OehdDueAmt6', 'OehdDuePct6', 'OehdRefNbr', 'OehdAcProgNbr', 'OehdAcProgExpDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oehdstat' => 1, 'Oehdhold' => 2, 'Arcucustid' => 3, 'Arstshipid' => 4, 'Oehdstname' => 5, 'Oehdstlastname' => 6, 'Oehdstfirstname' => 7, 'Oehdstadr1' => 8, 'Oehdstadr2' => 9, 'Oehdstadr3' => 10, 'Oehdstctry' => 11, 'Oehdstcity' => 12, 'Oehdststat' => 13, 'Oehdstzipcode' => 14, 'Oehdcustpo' => 15, 'Oehdordrdate' => 16, 'Artmtermcd' => 17, 'Artbshipvia' => 18, 'Arininvnbr' => 19, 'Oehdinvdate' => 20, 'Oehdglpd' => 21, 'Arspsaleper1' => 22, 'Oehdsp1pct' => 23, 'Arspsaleper2' => 24, 'Oehdsp2pct' => 25, 'Arspsaleper3' => 26, 'Oehdsp3pct' => 27, 'Oehdcntrnbr' => 28, 'Oehdwibatch' => 29, 'Oehddroprelhold' => 30, 'Oehdtaxsub' => 31, 'Oehdnontaxsub' => 32, 'Oehdtaxtot' => 33, 'Oehdfrttot' => 34, 'Oehdmisctot' => 35, 'Oehdordrtot' => 36, 'Oehdcosttot' => 37, 'Oehdspcommlock' => 38, 'Oehdtakendate' => 39, 'Oehdtakentime' => 40, 'Oehdpickdate' => 41, 'Oehdpicktime' => 42, 'Oehdpackdate' => 43, 'Oehdpacktime' => 44, 'Oehdverifydate' => 45, 'Oehdverifytime' => 46, 'Oehdcreditmemo' => 47, 'Oehdbookedyn' => 48, 'Intbwhseorig' => 49, 'Oehdbtstat' => 50, 'Oehdshipcomp' => 51, 'Oehdcwoflag' => 52, 'Oehddivision' => 53, 'Oehdtakencode' => 54, 'Oehdpickcode' => 55, 'Oehdpackcode' => 56, 'Oehdverifycode' => 57, 'Oehdtotdisc' => 58, 'Oehdedirefnbrqual' => 59, 'Oehdusercode1' => 60, 'Oehdusercode2' => 61, 'Oehdusercode3' => 62, 'Oehdusercode4' => 63, 'Oehdexchctry' => 64, 'Oehdexchrate' => 65, 'Oehdwghttot' => 66, 'Oehdwghtoride' => 67, 'Oehdccinfo' => 68, 'Oehdboxcount' => 69, 'Oehdrqstdate' => 70, 'Oehdcancdate' => 71, 'Oehdcrntuser' => 72, 'Oehdreleasenbr' => 73, 'Intbwhse' => 74, 'Oehdbordbuilddate' => 75, 'Oehddeptcode' => 76, 'Oehdfrtinentered' => 77, 'Oehddropshipentered' => 78, 'Oehderflag' => 79, 'Oehdfrtin' => 80, 'Oehddropship' => 81, 'Oehdminorder' => 82, 'Oehdcontractterms' => 83, 'Oehddropshipbilled' => 84, 'Oehdordtyp' => 85, 'Oehdtracknbr' => 86, 'Oehdsource' => 87, 'Oehdccaprv' => 88, 'Oehdpickfmattype' => 89, 'Oehdinvcfmattype' => 90, 'Oehdcashamt' => 91, 'Oehdcheckamt' => 92, 'Oehdchecknbr' => 93, 'Oehddepositamt' => 94, 'Oehddepositnbr' => 95, 'Oehdccamt' => 96, 'Oehdotaxsub' => 97, 'Oehdonontaxsub' => 98, 'Oehdotaxtot' => 99, 'Oehdoordrtot' => 100, 'Oehdpickprintdate' => 101, 'Oehdpickprinttime' => 102, 'Oehdcont' => 103, 'Oehdcontteleintl' => 104, 'Oehdconttelenbr' => 105, 'Oehdcontteleext' => 106, 'Oehdcontfaxintl' => 107, 'Oehdcontfaxnbr' => 108, 'Oehdshipacct' => 109, 'Oehdchgdue' => 110, 'Oehdaddlpricdisc' => 111, 'Oehdallship' => 112, 'Oehdqtyorderamt' => 113, 'Oehdcreditapplied' => 114, 'Oehdinvcprintdate' => 115, 'Oehdinvcprinttime' => 116, 'Oehddiscfrt' => 117, 'Oehdorideshipcomp' => 118, 'Oehdcontemail' => 119, 'Oehdmanualfrt' => 120, 'Oehdinternalfrt' => 121, 'Oehdfrtcost' => 122, 'Oehdroute' => 123, 'Oehdrouteseq' => 124, 'Oehdfrttaxcode1' => 125, 'Oehdfrttaxamt1' => 126, 'Oehdfrttaxcode2' => 127, 'Oehdfrttaxamt2' => 128, 'Oehdfrttaxcode3' => 129, 'Oehdfrttaxamt3' => 130, 'Oehdfrttaxcode4' => 131, 'Oehdfrttaxamt4' => 132, 'Oehdfrttaxcode5' => 133, 'Oehdfrttaxamt5' => 134, 'Oehdedi855sent' => 135, 'Oehdfrt3rdparty' => 136, 'Oehdfob' => 137, 'Oehdconfirmimagyn' => 138, 'Oehdindustconform' => 139, 'Oehdcstkconsign' => 140, 'Oehdlmdelaycapsent' => 141, 'Oehdmfgid' => 142, 'Oehdstoreid' => 143, 'Oehdpickqueue' => 144, 'Oehdarrvdate' => 145, 'Oehdsurchgstat' => 146, 'Oehdfrtgrup' => 147, 'Oehdcommoride' => 148, 'Oehdchrgsplt' => 149, 'Oehdacccaprv' => 150, 'Oehdorigordrnbr' => 151, 'Oehdpostdate' => 152, 'Oehddiscdate1' => 153, 'Oehddiscpct1' => 154, 'Oehdduedate1' => 155, 'Oehddueamt1' => 156, 'Oehdduepct1' => 157, 'Oehddiscdate2' => 158, 'Oehddiscpct2' => 159, 'Oehdduedate2' => 160, 'Oehddueamt2' => 161, 'Oehdduepct2' => 162, 'Oehddiscdate3' => 163, 'Oehddiscpct3' => 164, 'Oehdduedate3' => 165, 'Oehddueamt3' => 166, 'Oehdduepct3' => 167, 'Oehddiscdate4' => 168, 'Oehddiscpct4' => 169, 'Oehdduedate4' => 170, 'Oehddueamt4' => 171, 'Oehdduepct4' => 172, 'Oehddiscdate5' => 173, 'Oehddiscpct5' => 174, 'Oehdduedate5' => 175, 'Oehddueamt5' => 176, 'Oehdduepct5' => 177, 'Oehddiscdate6' => 178, 'Oehddiscpct6' => 179, 'Oehdduedate6' => 180, 'Oehddueamt6' => 181, 'Oehdduepct6' => 182, 'Oehdrefnbr' => 183, 'Oehdacprognbr' => 184, 'Oehdacprogexpdate' => 185, 'Dateupdtd' => 186, 'Timeupdtd' => 187, 'Dummy' => 188, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oehdstat' => 1, 'oehdhold' => 2, 'arcucustid' => 3, 'arstshipid' => 4, 'oehdstname' => 5, 'oehdstlastname' => 6, 'oehdstfirstname' => 7, 'oehdstadr1' => 8, 'oehdstadr2' => 9, 'oehdstadr3' => 10, 'oehdstctry' => 11, 'oehdstcity' => 12, 'oehdststat' => 13, 'oehdstzipcode' => 14, 'oehdcustpo' => 15, 'oehdordrdate' => 16, 'artmtermcd' => 17, 'artbshipvia' => 18, 'arininvnbr' => 19, 'oehdinvdate' => 20, 'oehdglpd' => 21, 'arspsaleper1' => 22, 'oehdsp1pct' => 23, 'arspsaleper2' => 24, 'oehdsp2pct' => 25, 'arspsaleper3' => 26, 'oehdsp3pct' => 27, 'oehdcntrnbr' => 28, 'oehdwibatch' => 29, 'oehddroprelhold' => 30, 'oehdtaxsub' => 31, 'oehdnontaxsub' => 32, 'oehdtaxtot' => 33, 'oehdfrttot' => 34, 'oehdmisctot' => 35, 'oehdordrtot' => 36, 'oehdcosttot' => 37, 'oehdspcommlock' => 38, 'oehdtakendate' => 39, 'oehdtakentime' => 40, 'oehdpickdate' => 41, 'oehdpicktime' => 42, 'oehdpackdate' => 43, 'oehdpacktime' => 44, 'oehdverifydate' => 45, 'oehdverifytime' => 46, 'oehdcreditmemo' => 47, 'oehdbookedyn' => 48, 'intbwhseorig' => 49, 'oehdbtstat' => 50, 'oehdshipcomp' => 51, 'oehdcwoflag' => 52, 'oehddivision' => 53, 'oehdtakencode' => 54, 'oehdpickcode' => 55, 'oehdpackcode' => 56, 'oehdverifycode' => 57, 'oehdtotdisc' => 58, 'oehdedirefnbrqual' => 59, 'oehdusercode1' => 60, 'oehdusercode2' => 61, 'oehdusercode3' => 62, 'oehdusercode4' => 63, 'oehdexchctry' => 64, 'oehdexchrate' => 65, 'oehdwghttot' => 66, 'oehdwghtoride' => 67, 'oehdccinfo' => 68, 'oehdboxcount' => 69, 'oehdrqstdate' => 70, 'oehdcancdate' => 71, 'oehdcrntuser' => 72, 'oehdreleasenbr' => 73, 'intbwhse' => 74, 'oehdbordbuilddate' => 75, 'oehddeptcode' => 76, 'oehdfrtinentered' => 77, 'oehddropshipentered' => 78, 'oehderflag' => 79, 'oehdfrtin' => 80, 'oehddropship' => 81, 'oehdminorder' => 82, 'oehdcontractterms' => 83, 'oehddropshipbilled' => 84, 'oehdordtyp' => 85, 'oehdtracknbr' => 86, 'oehdsource' => 87, 'oehdccaprv' => 88, 'oehdpickfmattype' => 89, 'oehdinvcfmattype' => 90, 'oehdcashamt' => 91, 'oehdcheckamt' => 92, 'oehdchecknbr' => 93, 'oehddepositamt' => 94, 'oehddepositnbr' => 95, 'oehdccamt' => 96, 'oehdotaxsub' => 97, 'oehdonontaxsub' => 98, 'oehdotaxtot' => 99, 'oehdoordrtot' => 100, 'oehdpickprintdate' => 101, 'oehdpickprinttime' => 102, 'oehdcont' => 103, 'oehdcontteleintl' => 104, 'oehdconttelenbr' => 105, 'oehdcontteleext' => 106, 'oehdcontfaxintl' => 107, 'oehdcontfaxnbr' => 108, 'oehdshipacct' => 109, 'oehdchgdue' => 110, 'oehdaddlpricdisc' => 111, 'oehdallship' => 112, 'oehdqtyorderamt' => 113, 'oehdcreditapplied' => 114, 'oehdinvcprintdate' => 115, 'oehdinvcprinttime' => 116, 'oehddiscfrt' => 117, 'oehdorideshipcomp' => 118, 'oehdcontemail' => 119, 'oehdmanualfrt' => 120, 'oehdinternalfrt' => 121, 'oehdfrtcost' => 122, 'oehdroute' => 123, 'oehdrouteseq' => 124, 'oehdfrttaxcode1' => 125, 'oehdfrttaxamt1' => 126, 'oehdfrttaxcode2' => 127, 'oehdfrttaxamt2' => 128, 'oehdfrttaxcode3' => 129, 'oehdfrttaxamt3' => 130, 'oehdfrttaxcode4' => 131, 'oehdfrttaxamt4' => 132, 'oehdfrttaxcode5' => 133, 'oehdfrttaxamt5' => 134, 'oehdedi855sent' => 135, 'oehdfrt3rdparty' => 136, 'oehdfob' => 137, 'oehdconfirmimagyn' => 138, 'oehdindustconform' => 139, 'oehdcstkconsign' => 140, 'oehdlmdelaycapsent' => 141, 'oehdmfgid' => 142, 'oehdstoreid' => 143, 'oehdpickqueue' => 144, 'oehdarrvdate' => 145, 'oehdsurchgstat' => 146, 'oehdfrtgrup' => 147, 'oehdcommoride' => 148, 'oehdchrgsplt' => 149, 'oehdacccaprv' => 150, 'oehdorigordrnbr' => 151, 'oehdpostdate' => 152, 'oehddiscdate1' => 153, 'oehddiscpct1' => 154, 'oehdduedate1' => 155, 'oehddueamt1' => 156, 'oehdduepct1' => 157, 'oehddiscdate2' => 158, 'oehddiscpct2' => 159, 'oehdduedate2' => 160, 'oehddueamt2' => 161, 'oehdduepct2' => 162, 'oehddiscdate3' => 163, 'oehddiscpct3' => 164, 'oehdduedate3' => 165, 'oehddueamt3' => 166, 'oehdduepct3' => 167, 'oehddiscdate4' => 168, 'oehddiscpct4' => 169, 'oehdduedate4' => 170, 'oehddueamt4' => 171, 'oehdduepct4' => 172, 'oehddiscdate5' => 173, 'oehddiscpct5' => 174, 'oehdduedate5' => 175, 'oehddueamt5' => 176, 'oehdduepct5' => 177, 'oehddiscdate6' => 178, 'oehddiscpct6' => 179, 'oehdduedate6' => 180, 'oehddueamt6' => 181, 'oehdduepct6' => 182, 'oehdrefnbr' => 183, 'oehdacprognbr' => 184, 'oehdacprogexpdate' => 185, 'dateupdtd' => 186, 'timeupdtd' => 187, 'dummy' => 188, ),
        self::TYPE_COLNAME       => array(SalesOrderTableMap::COL_OEHDNBR => 0, SalesOrderTableMap::COL_OEHDSTAT => 1, SalesOrderTableMap::COL_OEHDHOLD => 2, SalesOrderTableMap::COL_ARCUCUSTID => 3, SalesOrderTableMap::COL_ARSTSHIPID => 4, SalesOrderTableMap::COL_OEHDSTNAME => 5, SalesOrderTableMap::COL_OEHDSTLASTNAME => 6, SalesOrderTableMap::COL_OEHDSTFIRSTNAME => 7, SalesOrderTableMap::COL_OEHDSTADR1 => 8, SalesOrderTableMap::COL_OEHDSTADR2 => 9, SalesOrderTableMap::COL_OEHDSTADR3 => 10, SalesOrderTableMap::COL_OEHDSTCTRY => 11, SalesOrderTableMap::COL_OEHDSTCITY => 12, SalesOrderTableMap::COL_OEHDSTSTAT => 13, SalesOrderTableMap::COL_OEHDSTZIPCODE => 14, SalesOrderTableMap::COL_OEHDCUSTPO => 15, SalesOrderTableMap::COL_OEHDORDRDATE => 16, SalesOrderTableMap::COL_ARTMTERMCD => 17, SalesOrderTableMap::COL_ARTBSHIPVIA => 18, SalesOrderTableMap::COL_ARININVNBR => 19, SalesOrderTableMap::COL_OEHDINVDATE => 20, SalesOrderTableMap::COL_OEHDGLPD => 21, SalesOrderTableMap::COL_ARSPSALEPER1 => 22, SalesOrderTableMap::COL_OEHDSP1PCT => 23, SalesOrderTableMap::COL_ARSPSALEPER2 => 24, SalesOrderTableMap::COL_OEHDSP2PCT => 25, SalesOrderTableMap::COL_ARSPSALEPER3 => 26, SalesOrderTableMap::COL_OEHDSP3PCT => 27, SalesOrderTableMap::COL_OEHDCNTRNBR => 28, SalesOrderTableMap::COL_OEHDWIBATCH => 29, SalesOrderTableMap::COL_OEHDDROPRELHOLD => 30, SalesOrderTableMap::COL_OEHDTAXSUB => 31, SalesOrderTableMap::COL_OEHDNONTAXSUB => 32, SalesOrderTableMap::COL_OEHDTAXTOT => 33, SalesOrderTableMap::COL_OEHDFRTTOT => 34, SalesOrderTableMap::COL_OEHDMISCTOT => 35, SalesOrderTableMap::COL_OEHDORDRTOT => 36, SalesOrderTableMap::COL_OEHDCOSTTOT => 37, SalesOrderTableMap::COL_OEHDSPCOMMLOCK => 38, SalesOrderTableMap::COL_OEHDTAKENDATE => 39, SalesOrderTableMap::COL_OEHDTAKENTIME => 40, SalesOrderTableMap::COL_OEHDPICKDATE => 41, SalesOrderTableMap::COL_OEHDPICKTIME => 42, SalesOrderTableMap::COL_OEHDPACKDATE => 43, SalesOrderTableMap::COL_OEHDPACKTIME => 44, SalesOrderTableMap::COL_OEHDVERIFYDATE => 45, SalesOrderTableMap::COL_OEHDVERIFYTIME => 46, SalesOrderTableMap::COL_OEHDCREDITMEMO => 47, SalesOrderTableMap::COL_OEHDBOOKEDYN => 48, SalesOrderTableMap::COL_INTBWHSEORIG => 49, SalesOrderTableMap::COL_OEHDBTSTAT => 50, SalesOrderTableMap::COL_OEHDSHIPCOMP => 51, SalesOrderTableMap::COL_OEHDCWOFLAG => 52, SalesOrderTableMap::COL_OEHDDIVISION => 53, SalesOrderTableMap::COL_OEHDTAKENCODE => 54, SalesOrderTableMap::COL_OEHDPICKCODE => 55, SalesOrderTableMap::COL_OEHDPACKCODE => 56, SalesOrderTableMap::COL_OEHDVERIFYCODE => 57, SalesOrderTableMap::COL_OEHDTOTDISC => 58, SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL => 59, SalesOrderTableMap::COL_OEHDUSERCODE1 => 60, SalesOrderTableMap::COL_OEHDUSERCODE2 => 61, SalesOrderTableMap::COL_OEHDUSERCODE3 => 62, SalesOrderTableMap::COL_OEHDUSERCODE4 => 63, SalesOrderTableMap::COL_OEHDEXCHCTRY => 64, SalesOrderTableMap::COL_OEHDEXCHRATE => 65, SalesOrderTableMap::COL_OEHDWGHTTOT => 66, SalesOrderTableMap::COL_OEHDWGHTORIDE => 67, SalesOrderTableMap::COL_OEHDCCINFO => 68, SalesOrderTableMap::COL_OEHDBOXCOUNT => 69, SalesOrderTableMap::COL_OEHDRQSTDATE => 70, SalesOrderTableMap::COL_OEHDCANCDATE => 71, SalesOrderTableMap::COL_OEHDCRNTUSER => 72, SalesOrderTableMap::COL_OEHDRELEASENBR => 73, SalesOrderTableMap::COL_INTBWHSE => 74, SalesOrderTableMap::COL_OEHDBORDBUILDDATE => 75, SalesOrderTableMap::COL_OEHDDEPTCODE => 76, SalesOrderTableMap::COL_OEHDFRTINENTERED => 77, SalesOrderTableMap::COL_OEHDDROPSHIPENTERED => 78, SalesOrderTableMap::COL_OEHDERFLAG => 79, SalesOrderTableMap::COL_OEHDFRTIN => 80, SalesOrderTableMap::COL_OEHDDROPSHIP => 81, SalesOrderTableMap::COL_OEHDMINORDER => 82, SalesOrderTableMap::COL_OEHDCONTRACTTERMS => 83, SalesOrderTableMap::COL_OEHDDROPSHIPBILLED => 84, SalesOrderTableMap::COL_OEHDORDTYP => 85, SalesOrderTableMap::COL_OEHDTRACKNBR => 86, SalesOrderTableMap::COL_OEHDSOURCE => 87, SalesOrderTableMap::COL_OEHDCCAPRV => 88, SalesOrderTableMap::COL_OEHDPICKFMATTYPE => 89, SalesOrderTableMap::COL_OEHDINVCFMATTYPE => 90, SalesOrderTableMap::COL_OEHDCASHAMT => 91, SalesOrderTableMap::COL_OEHDCHECKAMT => 92, SalesOrderTableMap::COL_OEHDCHECKNBR => 93, SalesOrderTableMap::COL_OEHDDEPOSITAMT => 94, SalesOrderTableMap::COL_OEHDDEPOSITNBR => 95, SalesOrderTableMap::COL_OEHDCCAMT => 96, SalesOrderTableMap::COL_OEHDOTAXSUB => 97, SalesOrderTableMap::COL_OEHDONONTAXSUB => 98, SalesOrderTableMap::COL_OEHDOTAXTOT => 99, SalesOrderTableMap::COL_OEHDOORDRTOT => 100, SalesOrderTableMap::COL_OEHDPICKPRINTDATE => 101, SalesOrderTableMap::COL_OEHDPICKPRINTTIME => 102, SalesOrderTableMap::COL_OEHDCONT => 103, SalesOrderTableMap::COL_OEHDCONTTELEINTL => 104, SalesOrderTableMap::COL_OEHDCONTTELENBR => 105, SalesOrderTableMap::COL_OEHDCONTTELEEXT => 106, SalesOrderTableMap::COL_OEHDCONTFAXINTL => 107, SalesOrderTableMap::COL_OEHDCONTFAXNBR => 108, SalesOrderTableMap::COL_OEHDSHIPACCT => 109, SalesOrderTableMap::COL_OEHDCHGDUE => 110, SalesOrderTableMap::COL_OEHDADDLPRICDISC => 111, SalesOrderTableMap::COL_OEHDALLSHIP => 112, SalesOrderTableMap::COL_OEHDQTYORDERAMT => 113, SalesOrderTableMap::COL_OEHDCREDITAPPLIED => 114, SalesOrderTableMap::COL_OEHDINVCPRINTDATE => 115, SalesOrderTableMap::COL_OEHDINVCPRINTTIME => 116, SalesOrderTableMap::COL_OEHDDISCFRT => 117, SalesOrderTableMap::COL_OEHDORIDESHIPCOMP => 118, SalesOrderTableMap::COL_OEHDCONTEMAIL => 119, SalesOrderTableMap::COL_OEHDMANUALFRT => 120, SalesOrderTableMap::COL_OEHDINTERNALFRT => 121, SalesOrderTableMap::COL_OEHDFRTCOST => 122, SalesOrderTableMap::COL_OEHDROUTE => 123, SalesOrderTableMap::COL_OEHDROUTESEQ => 124, SalesOrderTableMap::COL_OEHDFRTTAXCODE1 => 125, SalesOrderTableMap::COL_OEHDFRTTAXAMT1 => 126, SalesOrderTableMap::COL_OEHDFRTTAXCODE2 => 127, SalesOrderTableMap::COL_OEHDFRTTAXAMT2 => 128, SalesOrderTableMap::COL_OEHDFRTTAXCODE3 => 129, SalesOrderTableMap::COL_OEHDFRTTAXAMT3 => 130, SalesOrderTableMap::COL_OEHDFRTTAXCODE4 => 131, SalesOrderTableMap::COL_OEHDFRTTAXAMT4 => 132, SalesOrderTableMap::COL_OEHDFRTTAXCODE5 => 133, SalesOrderTableMap::COL_OEHDFRTTAXAMT5 => 134, SalesOrderTableMap::COL_OEHDEDI855SENT => 135, SalesOrderTableMap::COL_OEHDFRT3RDPARTY => 136, SalesOrderTableMap::COL_OEHDFOB => 137, SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN => 138, SalesOrderTableMap::COL_OEHDINDUSTCONFORM => 139, SalesOrderTableMap::COL_OEHDCSTKCONSIGN => 140, SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT => 141, SalesOrderTableMap::COL_OEHDMFGID => 142, SalesOrderTableMap::COL_OEHDSTOREID => 143, SalesOrderTableMap::COL_OEHDPICKQUEUE => 144, SalesOrderTableMap::COL_OEHDARRVDATE => 145, SalesOrderTableMap::COL_OEHDSURCHGSTAT => 146, SalesOrderTableMap::COL_OEHDFRTGRUP => 147, SalesOrderTableMap::COL_OEHDCOMMORIDE => 148, SalesOrderTableMap::COL_OEHDCHRGSPLT => 149, SalesOrderTableMap::COL_OEHDACCCAPRV => 150, SalesOrderTableMap::COL_OEHDORIGORDRNBR => 151, SalesOrderTableMap::COL_OEHDPOSTDATE => 152, SalesOrderTableMap::COL_OEHDDISCDATE1 => 153, SalesOrderTableMap::COL_OEHDDISCPCT1 => 154, SalesOrderTableMap::COL_OEHDDUEDATE1 => 155, SalesOrderTableMap::COL_OEHDDUEAMT1 => 156, SalesOrderTableMap::COL_OEHDDUEPCT1 => 157, SalesOrderTableMap::COL_OEHDDISCDATE2 => 158, SalesOrderTableMap::COL_OEHDDISCPCT2 => 159, SalesOrderTableMap::COL_OEHDDUEDATE2 => 160, SalesOrderTableMap::COL_OEHDDUEAMT2 => 161, SalesOrderTableMap::COL_OEHDDUEPCT2 => 162, SalesOrderTableMap::COL_OEHDDISCDATE3 => 163, SalesOrderTableMap::COL_OEHDDISCPCT3 => 164, SalesOrderTableMap::COL_OEHDDUEDATE3 => 165, SalesOrderTableMap::COL_OEHDDUEAMT3 => 166, SalesOrderTableMap::COL_OEHDDUEPCT3 => 167, SalesOrderTableMap::COL_OEHDDISCDATE4 => 168, SalesOrderTableMap::COL_OEHDDISCPCT4 => 169, SalesOrderTableMap::COL_OEHDDUEDATE4 => 170, SalesOrderTableMap::COL_OEHDDUEAMT4 => 171, SalesOrderTableMap::COL_OEHDDUEPCT4 => 172, SalesOrderTableMap::COL_OEHDDISCDATE5 => 173, SalesOrderTableMap::COL_OEHDDISCPCT5 => 174, SalesOrderTableMap::COL_OEHDDUEDATE5 => 175, SalesOrderTableMap::COL_OEHDDUEAMT5 => 176, SalesOrderTableMap::COL_OEHDDUEPCT5 => 177, SalesOrderTableMap::COL_OEHDDISCDATE6 => 178, SalesOrderTableMap::COL_OEHDDISCPCT6 => 179, SalesOrderTableMap::COL_OEHDDUEDATE6 => 180, SalesOrderTableMap::COL_OEHDDUEAMT6 => 181, SalesOrderTableMap::COL_OEHDDUEPCT6 => 182, SalesOrderTableMap::COL_OEHDREFNBR => 183, SalesOrderTableMap::COL_OEHDACPROGNBR => 184, SalesOrderTableMap::COL_OEHDACPROGEXPDATE => 185, SalesOrderTableMap::COL_DATEUPDTD => 186, SalesOrderTableMap::COL_TIMEUPDTD => 187, SalesOrderTableMap::COL_DUMMY => 188, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OehdStat' => 1, 'OehdHold' => 2, 'ArcuCustId' => 3, 'ArstShipId' => 4, 'OehdStName' => 5, 'OehdStLastName' => 6, 'OehdStFirstName' => 7, 'OehdStAdr1' => 8, 'OehdStAdr2' => 9, 'OehdStAdr3' => 10, 'OehdStCtry' => 11, 'OehdStCity' => 12, 'OehdStStat' => 13, 'OehdStZipCode' => 14, 'OehdCustPo' => 15, 'OehdOrdrDate' => 16, 'ArtmTermCd' => 17, 'ArtbShipVia' => 18, 'ArinInvNbr' => 19, 'OehdInvDate' => 20, 'OehdGLPd' => 21, 'ArspSalePer1' => 22, 'OehdSp1Pct' => 23, 'ArspSalePer2' => 24, 'OehdSp2Pct' => 25, 'ArspSalePer3' => 26, 'OehdSp3Pct' => 27, 'OehdCntrNbr' => 28, 'OehdWiBatch' => 29, 'OehdDropRelHold' => 30, 'OehdTaxSub' => 31, 'OehdNonTaxSub' => 32, 'OehdTaxTot' => 33, 'OehdFrtTot' => 34, 'OehdMiscTot' => 35, 'OehdOrdrTot' => 36, 'OehdCostTot' => 37, 'OehdSpCommLock' => 38, 'OehdTakenDate' => 39, 'OehdTakenTime' => 40, 'OehdPickDate' => 41, 'OehdPickTime' => 42, 'OehdPackDate' => 43, 'OehdPackTime' => 44, 'OehdVerifyDate' => 45, 'OehdVerifyTime' => 46, 'OehdCreditMemo' => 47, 'OehdBookedYn' => 48, 'IntbWhseOrig' => 49, 'OehdBtStat' => 50, 'OehdShipComp' => 51, 'OehdCwoFlag' => 52, 'OehdDivision' => 53, 'OehdTakenCode' => 54, 'OehdPickCode' => 55, 'OehdPackCode' => 56, 'OehdVerifyCode' => 57, 'OehdTotDisc' => 58, 'OehdEdiRefNbrQual' => 59, 'OehdUserCode1' => 60, 'OehdUserCode2' => 61, 'OehdUserCode3' => 62, 'OehdUserCode4' => 63, 'OehdExchCtry' => 64, 'OehdExchRate' => 65, 'OehdWghtTot' => 66, 'OehdWghtOride' => 67, 'OehdCcInfo' => 68, 'OehdBoxCount' => 69, 'OehdRqstDate' => 70, 'OehdCancDate' => 71, 'OehdCrntUser' => 72, 'OehdReleaseNbr' => 73, 'IntbWhse' => 74, 'OehdBordBuildDate' => 75, 'OehdDeptCode' => 76, 'OehdFrtInEntered' => 77, 'OehdDropShipEntered' => 78, 'OehdErFlag' => 79, 'OehdFrtIn' => 80, 'OehdDropShip' => 81, 'OehdMinOrder' => 82, 'OehdContractTerms' => 83, 'OehdDropShipBilled' => 84, 'OehdOrdTyp' => 85, 'OehdTrackNbr' => 86, 'OehdSource' => 87, 'OehdCcAprv' => 88, 'OehdPickFmatType' => 89, 'OehdInvcFmatType' => 90, 'OehdCashAmt' => 91, 'OehdCheckAmt' => 92, 'OehdCheckNbr' => 93, 'OehdDepositAmt' => 94, 'OehdDepositNbr' => 95, 'OehdCcAmt' => 96, 'OehdOTaxSub' => 97, 'OehdONonTaxSub' => 98, 'OehdOTaxTot' => 99, 'OehdOOrdrTot' => 100, 'OehdPickPrintDate' => 101, 'OehdPickPrintTime' => 102, 'OehdCont' => 103, 'OehdContTeleIntl' => 104, 'OehdContTeleNbr' => 105, 'OehdContTeleExt' => 106, 'OehdContFaxIntl' => 107, 'OehdContFaxNbr' => 108, 'OehdShipAcct' => 109, 'OehdChgDue' => 110, 'OehdAddlPricDisc' => 111, 'OehdAllShip' => 112, 'OehdQtyOrderAmt' => 113, 'OehdCreditApplied' => 114, 'OehdInvcPrintDate' => 115, 'OehdInvcPrintTime' => 116, 'OehdDiscFrt' => 117, 'OehdOrideShipComp' => 118, 'OehdContEmail' => 119, 'OehdManualFrt' => 120, 'OehdInternalFrt' => 121, 'OehdFrtCost' => 122, 'OehdRoute' => 123, 'OehdRouteSeq' => 124, 'OehdFrtTaxCode1' => 125, 'OehdFrtTaxAmt1' => 126, 'OehdFrtTaxCode2' => 127, 'OehdFrtTaxAmt2' => 128, 'OehdFrtTaxCode3' => 129, 'OehdFrtTaxAmt3' => 130, 'OehdFrtTaxCode4' => 131, 'OehdFrtTaxAmt4' => 132, 'OehdFrtTaxCode5' => 133, 'OehdFrtTaxAmt5' => 134, 'OehdEdi855Sent' => 135, 'OehdFrt3rdParty' => 136, 'OehdFob' => 137, 'OehdConfirmImagYn' => 138, 'OehdIndustConform' => 139, 'OehdCstkConsign' => 140, 'OehdLmDelayCapSent' => 141, 'OehdMfgId' => 142, 'OehdStoreId' => 143, 'OehdPickQueue' => 144, 'OehdArrvDate' => 145, 'OehdSurchgStat' => 146, 'OehdFrtGrup' => 147, 'OehdCommOride' => 148, 'OehdChrgSplt' => 149, 'OehdAcCcAprv' => 150, 'OehdOrigOrdrNbr' => 151, 'OehdPostDate' => 152, 'OehdDiscDate1' => 153, 'OehdDiscPct1' => 154, 'OehdDueDate1' => 155, 'OehdDueAmt1' => 156, 'OehdDuePct1' => 157, 'OehdDiscDate2' => 158, 'OehdDiscPct2' => 159, 'OehdDueDate2' => 160, 'OehdDueAmt2' => 161, 'OehdDuePct2' => 162, 'OehdDiscDate3' => 163, 'OehdDiscPct3' => 164, 'OehdDueDate3' => 165, 'OehdDueAmt3' => 166, 'OehdDuePct3' => 167, 'OehdDiscDate4' => 168, 'OehdDiscPct4' => 169, 'OehdDueDate4' => 170, 'OehdDueAmt4' => 171, 'OehdDuePct4' => 172, 'OehdDiscDate5' => 173, 'OehdDiscPct5' => 174, 'OehdDueDate5' => 175, 'OehdDueAmt5' => 176, 'OehdDuePct5' => 177, 'OehdDiscDate6' => 178, 'OehdDiscPct6' => 179, 'OehdDueDate6' => 180, 'OehdDueAmt6' => 181, 'OehdDuePct6' => 182, 'OehdRefNbr' => 183, 'OehdAcProgNbr' => 184, 'OehdAcProgExpDate' => 185, 'DateUpdtd' => 186, 'TimeUpdtd' => 187, 'dummy' => 188, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, )
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
        $this->setName('so_header');
        $this->setPhpName('SalesOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesOrder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER', true, 10, 0);
        $this->addColumn('OehdStat', 'Oehdstat', 'CHAR', true, null, 'N');
        $this->addColumn('OehdHold', 'Oehdhold', 'CHAR', true, null, 'N');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArstShipId', 'Arstshipid', 'VARCHAR', 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addColumn('OehdStName', 'Oehdstname', 'VARCHAR', true, 30, '');
        $this->addColumn('OehdStLastName', 'Oehdstlastname', 'VARCHAR', true, 15, '');
        $this->addColumn('OehdStFirstName', 'Oehdstfirstname', 'VARCHAR', true, 14, '');
        $this->addColumn('OehdStAdr1', 'Oehdstadr1', 'VARCHAR', true, 30, '');
        $this->addColumn('OehdStAdr2', 'Oehdstadr2', 'VARCHAR', true, 30, '');
        $this->addColumn('OehdStAdr3', 'Oehdstadr3', 'VARCHAR', true, 30, '');
        $this->addColumn('OehdStCtry', 'Oehdstctry', 'VARCHAR', true, 4, '');
        $this->addColumn('OehdStCity', 'Oehdstcity', 'VARCHAR', true, 16, '');
        $this->addColumn('OehdStStat', 'Oehdststat', 'CHAR', true, 2, '');
        $this->addColumn('OehdStZipCode', 'Oehdstzipcode', 'VARCHAR', true, 10, '');
        $this->addColumn('OehdCustPo', 'Oehdcustpo', 'VARCHAR', true, 20, '');
        $this->addColumn('OehdOrdrDate', 'Oehdordrdate', 'CHAR', true, 8, '');
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', true, 4, '');
        $this->addColumn('ArinInvNbr', 'Arininvnbr', 'CHAR', true, 10, '');
        $this->addColumn('OehdInvDate', 'Oehdinvdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdGLPd', 'Oehdglpd', 'INTEGER', true, 2, 0);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdSp1Pct', 'Oehdsp1pct', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdSp2Pct', 'Oehdsp2pct', 'DECIMAL', true, 20, 0);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdSp3Pct', 'Oehdsp3pct', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdCntrNbr', 'Oehdcntrnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('OehdWiBatch', 'Oehdwibatch', 'INTEGER', true, 8, 0);
        $this->addColumn('OehdDropRelHold', 'Oehddroprelhold', 'CHAR', true, null, '');
        $this->addColumn('OehdTaxSub', 'Oehdtaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdNonTaxSub', 'Oehdnontaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdTaxTot', 'Oehdtaxtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdFrtTot', 'Oehdfrttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdMiscTot', 'Oehdmisctot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdOrdrTot', 'Oehdordrtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdCostTot', 'Oehdcosttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdSpCommLock', 'Oehdspcommlock', 'CHAR', true, null, 'N');
        $this->addColumn('OehdTakenDate', 'Oehdtakendate', 'CHAR', true, 8, '');
        $this->addColumn('OehdTakenTime', 'Oehdtakentime', 'CHAR', true, 4, '');
        $this->addColumn('OehdPickDate', 'Oehdpickdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdPickTime', 'Oehdpicktime', 'CHAR', true, 4, '');
        $this->addColumn('OehdPackDate', 'Oehdpackdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdPackTime', 'Oehdpacktime', 'CHAR', true, 4, '');
        $this->addColumn('OehdVerifyDate', 'Oehdverifydate', 'CHAR', true, 8, '');
        $this->addColumn('OehdVerifyTime', 'Oehdverifytime', 'CHAR', true, 4, '');
        $this->addColumn('OehdCreditMemo', 'Oehdcreditmemo', 'CHAR', true, null, '');
        $this->addColumn('OehdBookedYn', 'Oehdbookedyn', 'CHAR', true, null, '');
        $this->addColumn('IntbWhseOrig', 'Intbwhseorig', 'VARCHAR', true, 2, '');
        $this->addColumn('OehdBtStat', 'Oehdbtstat', 'CHAR', true, 2, '');
        $this->addColumn('OehdShipComp', 'Oehdshipcomp', 'CHAR', true, null, 'N');
        $this->addColumn('OehdCwoFlag', 'Oehdcwoflag', 'CHAR', true, null, '');
        $this->addColumn('OehdDivision', 'Oehddivision', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdTakenCode', 'Oehdtakencode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdPickCode', 'Oehdpickcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdPackCode', 'Oehdpackcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdVerifyCode', 'Oehdverifycode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdTotDisc', 'Oehdtotdisc', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdEdiRefNbrQual', 'Oehdedirefnbrqual', 'VARCHAR', true, 3, '');
        $this->addColumn('OehdUserCode1', 'Oehdusercode1', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdUserCode2', 'Oehdusercode2', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdUserCode3', 'Oehdusercode3', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdUserCode4', 'Oehdusercode4', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdExchCtry', 'Oehdexchctry', 'VARCHAR', true, 4, '');
        $this->addColumn('OehdExchRate', 'Oehdexchrate', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdWghtTot', 'Oehdwghttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdWghtOride', 'Oehdwghtoride', 'CHAR', true, null, 'N');
        $this->addColumn('OehdCcInfo', 'Oehdccinfo', 'CHAR', true, null, 'B');
        $this->addColumn('OehdBoxCount', 'Oehdboxcount', 'INTEGER', true, 5, 0);
        $this->addColumn('OehdRqstDate', 'Oehdrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdCancDate', 'Oehdcancdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdCrntUser', 'Oehdcrntuser', 'VARCHAR', true, 12, '');
        $this->addColumn('OehdReleaseNbr', 'Oehdreleasenbr', 'VARCHAR', true, 20, '');
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('OehdBordBuildDate', 'Oehdbordbuilddate', 'CHAR', true, 8, '');
        $this->addColumn('OehdDeptCode', 'Oehddeptcode', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdFrtInEntered', 'Oehdfrtinentered', 'CHAR', true, null, 'N');
        $this->addColumn('OehdDropShipEntered', 'Oehddropshipentered', 'CHAR', true, null, 'N');
        $this->addColumn('OehdErFlag', 'Oehderflag', 'CHAR', true, null, 'N');
        $this->addColumn('OehdFrtIn', 'Oehdfrtin', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDropShip', 'Oehddropship', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdMinOrder', 'Oehdminorder', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdContractTerms', 'Oehdcontractterms', 'CHAR', true, null, 'N');
        $this->addColumn('OehdDropShipBilled', 'Oehddropshipbilled', 'CHAR', true, null, 'N');
        $this->addColumn('OehdOrdTyp', 'Oehdordtyp', 'CHAR', true, null, 'N');
        $this->addColumn('OehdTrackNbr', 'Oehdtracknbr', 'VARCHAR', true, 15, '');
        $this->addColumn('OehdSource', 'Oehdsource', 'CHAR', true, null, '');
        $this->addColumn('OehdCcAprv', 'Oehdccaprv', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdPickFmatType', 'Oehdpickfmattype', 'CHAR', true, null, '');
        $this->addColumn('OehdInvcFmatType', 'Oehdinvcfmattype', 'CHAR', true, null, '');
        $this->addColumn('OehdCashAmt', 'Oehdcashamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdCheckAmt', 'Oehdcheckamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdCheckNbr', 'Oehdchecknbr', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdDepositAmt', 'Oehddepositamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDepositNbr', 'Oehddepositnbr', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdCcAmt', 'Oehdccamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdOTaxSub', 'Oehdotaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdONonTaxSub', 'Oehdonontaxsub', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdOTaxTot', 'Oehdotaxtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdOOrdrTot', 'Oehdoordrtot', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdPickPrintDate', 'Oehdpickprintdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdPickPrintTime', 'Oehdpickprinttime', 'CHAR', true, 4, '');
        $this->addColumn('OehdCont', 'Oehdcont', 'VARCHAR', true, 20, '');
        $this->addColumn('OehdContTeleIntl', 'Oehdcontteleintl', 'CHAR', true, null, 'N');
        $this->addColumn('OehdContTeleNbr', 'Oehdconttelenbr', 'VARCHAR', true, 22, '');
        $this->addColumn('OehdContTeleExt', 'Oehdcontteleext', 'VARCHAR', true, 7, '');
        $this->addColumn('OehdContFaxIntl', 'Oehdcontfaxintl', 'CHAR', true, null, 'N');
        $this->addColumn('OehdContFaxNbr', 'Oehdcontfaxnbr', 'VARCHAR', true, 22, '');
        $this->addColumn('OehdShipAcct', 'Oehdshipacct', 'VARCHAR', true, 10, '');
        $this->addColumn('OehdChgDue', 'Oehdchgdue', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdAddlPricDisc', 'Oehdaddlpricdisc', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdAllShip', 'Oehdallship', 'VARCHAR', true, 2, '');
        $this->addColumn('OehdQtyOrderAmt', 'Oehdqtyorderamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdCreditApplied', 'Oehdcreditapplied', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdInvcPrintDate', 'Oehdinvcprintdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdInvcPrintTime', 'Oehdinvcprinttime', 'CHAR', true, 4, '');
        $this->addColumn('OehdDiscFrt', 'Oehddiscfrt', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdOrideShipComp', 'Oehdorideshipcomp', 'CHAR', true, null, 'N');
        $this->addColumn('OehdContEmail', 'Oehdcontemail', 'VARCHAR', true, 50, '');
        $this->addColumn('OehdManualFrt', 'Oehdmanualfrt', 'CHAR', true, null, 'N');
        $this->addColumn('OehdInternalFrt', 'Oehdinternalfrt', 'CHAR', true, null, 'N');
        $this->addColumn('OehdFrtCost', 'Oehdfrtcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdRoute', 'Oehdroute', 'VARCHAR', true, 4, '');
        $this->addColumn('OehdRouteSeq', 'Oehdrouteseq', 'INTEGER', true, 4, 0);
        $this->addColumn('OehdFrtTaxCode1', 'Oehdfrttaxcode1', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdFrtTaxAmt1', 'Oehdfrttaxamt1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdFrtTaxCode2', 'Oehdfrttaxcode2', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdFrtTaxAmt2', 'Oehdfrttaxamt2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdFrtTaxCode3', 'Oehdfrttaxcode3', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdFrtTaxAmt3', 'Oehdfrttaxamt3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdFrtTaxCode4', 'Oehdfrttaxcode4', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdFrtTaxAmt4', 'Oehdfrttaxamt4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdFrtTaxCode5', 'Oehdfrttaxcode5', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdFrtTaxAmt5', 'Oehdfrttaxamt5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdEdi855Sent', 'Oehdedi855sent', 'CHAR', true, null, '');
        $this->addColumn('OehdFrt3rdParty', 'Oehdfrt3rdparty', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdFob', 'Oehdfob', 'VARCHAR', true, 15, '');
        $this->addColumn('OehdConfirmImagYn', 'Oehdconfirmimagyn', 'CHAR', true, null, 'N');
        $this->addColumn('OehdIndustConform', 'Oehdindustconform', 'CHAR', true, null, '');
        $this->addColumn('OehdCstkConsign', 'Oehdcstkconsign', 'CHAR', true, null, '');
        $this->addColumn('OehdLmDelayCapSent', 'Oehdlmdelaycapsent', 'CHAR', true, null, '');
        $this->addColumn('OehdMfgId', 'Oehdmfgid', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdStoreId', 'Oehdstoreid', 'VARCHAR', true, 6, '');
        $this->addColumn('OehdPickQueue', 'Oehdpickqueue', 'CHAR', true, null, 'N');
        $this->addColumn('OehdArrvDate', 'Oehdarrvdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdSurchgStat', 'Oehdsurchgstat', 'CHAR', true, null, 'C');
        $this->addColumn('OehdFrtGrup', 'Oehdfrtgrup', 'VARCHAR', true, 2, '');
        $this->addColumn('OehdCommOride', 'Oehdcommoride', 'CHAR', true, null, '');
        $this->addColumn('OehdChrgSplt', 'Oehdchrgsplt', 'CHAR', true, null, '');
        $this->addColumn('OehdAcCcAprv', 'Oehdacccaprv', 'VARCHAR', true, 8, '');
        $this->addColumn('OehdOrigOrdrNbr', 'Oehdorigordrnbr', 'CHAR', true, 10, '');
        $this->addColumn('OehdPostDate', 'Oehdpostdate', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscDate1', 'Oehddiscdate1', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscPct1', 'Oehddiscpct1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDueDate1', 'Oehdduedate1', 'CHAR', true, 8, '');
        $this->addColumn('OehdDueAmt1', 'Oehddueamt1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDuePct1', 'Oehdduepct1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDiscDate2', 'Oehddiscdate2', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscPct2', 'Oehddiscpct2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDueDate2', 'Oehdduedate2', 'CHAR', true, 8, '');
        $this->addColumn('OehdDueAmt2', 'Oehddueamt2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDuePct2', 'Oehdduepct2', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDiscDate3', 'Oehddiscdate3', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscPct3', 'Oehddiscpct3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDueDate3', 'Oehdduedate3', 'CHAR', true, 8, '');
        $this->addColumn('OehdDueAmt3', 'Oehddueamt3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDuePct3', 'Oehdduepct3', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDiscDate4', 'Oehddiscdate4', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscPct4', 'Oehddiscpct4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDueDate4', 'Oehdduedate4', 'CHAR', true, 8, '');
        $this->addColumn('OehdDueAmt4', 'Oehddueamt4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDuePct4', 'Oehdduepct4', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDiscDate5', 'Oehddiscdate5', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscPct5', 'Oehddiscpct5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDueDate5', 'Oehdduedate5', 'CHAR', true, 8, '');
        $this->addColumn('OehdDueAmt5', 'Oehddueamt5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDuePct5', 'Oehdduepct5', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDiscDate6', 'Oehddiscdate6', 'CHAR', true, 8, '');
        $this->addColumn('OehdDiscPct6', 'Oehddiscpct6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDueDate6', 'Oehdduedate6', 'CHAR', true, 8, '');
        $this->addColumn('OehdDueAmt6', 'Oehddueamt6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdDuePct6', 'Oehdduepct6', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehdRefNbr', 'Oehdrefnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('OehdAcProgNbr', 'Oehdacprognbr', 'VARCHAR', true, 16, '');
        $this->addColumn('OehdAcProgExpDate', 'Oehdacprogexpdate', 'VARCHAR', true, 6, '');
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
        $this->addRelation('SalesOrderDetail', '\\SalesOrderDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, 'SalesOrderDetails', false);
        $this->addRelation('SalesOrderShipment', '\\SalesOrderShipment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehshNbr',
    1 => ':OehdNbr',
  ),
), null, null, 'SalesOrderShipments', false);
        $this->addRelation('SalesOrderLotserial', '\\SalesOrderLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, 'SalesOrderLotserials', false);
        $this->addRelation('SoAllocatedLotserial', '\\SoAllocatedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, 'SoAllocatedLotserials', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesOrderTableMap::CLASS_DEFAULT : SalesOrderTableMap::OM_CLASS;
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
     * @return array           (SalesOrder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesOrderTableMap::OM_CLASS;
            /** @var SalesOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesOrderTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesOrderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTAT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDHOLD);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTNAME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTLASTNAME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTFIRSTNAME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTADR1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTADR2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTADR3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTCTRY);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTCITY);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTSTAT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTZIPCODE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCUSTPO);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDORDRDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARININVNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDINVDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDGLPD);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSP1PCT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSP2PCT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSP3PCT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCNTRNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDWIBATCH);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDROPRELHOLD);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTAXSUB);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDNONTAXSUB);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTAXTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDMISCTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDORDRTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCOSTTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSPCOMMLOCK);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTAKENDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTAKENTIME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKTIME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPACKDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPACKTIME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDVERIFYDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDVERIFYTIME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCREDITMEMO);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDBOOKEDYN);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_INTBWHSEORIG);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDBTSTAT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSHIPCOMP);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCWOFLAG);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDIVISION);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTAKENCODE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKCODE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPACKCODE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDVERIFYCODE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTOTDISC);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDUSERCODE1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDUSERCODE2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDUSERCODE3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDUSERCODE4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDEXCHCTRY);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDEXCHRATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDWGHTTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDWGHTORIDE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCCINFO);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDBOXCOUNT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDRQSTDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCANCDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCRNTUSER);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDRELEASENBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDBORDBUILDDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDEPTCODE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTINENTERED);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDROPSHIPENTERED);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDERFLAG);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTIN);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDROPSHIP);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDMINORDER);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTRACTTERMS);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDROPSHIPBILLED);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDORDTYP);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDTRACKNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSOURCE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCCAPRV);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKFMATTYPE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDINVCFMATTYPE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCASHAMT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCHECKAMT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCHECKNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDEPOSITAMT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDEPOSITNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCCAMT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDOTAXSUB);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDONONTAXSUB);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDOTAXTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDOORDRTOT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKPRINTDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKPRINTTIME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTTELEINTL);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTTELENBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTTELEEXT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTFAXINTL);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTFAXNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSHIPACCT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCHGDUE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDADDLPRICDISC);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDALLSHIP);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDQTYORDERAMT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCREDITAPPLIED);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDINVCPRINTDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDINVCPRINTTIME);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCFRT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDORIDESHIPCOMP);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONTEMAIL);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDMANUALFRT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDINTERNALFRT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTCOST);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDROUTE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDROUTESEQ);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXCODE1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXAMT1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXCODE2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXAMT2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXCODE3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXAMT3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXCODE4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXAMT4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXCODE5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTTAXAMT5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDEDI855SENT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRT3RDPARTY);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFOB);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDINDUSTCONFORM);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCSTKCONSIGN);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDMFGID);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSTOREID);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPICKQUEUE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDARRVDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDSURCHGSTAT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDFRTGRUP);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCOMMORIDE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDCHRGSPLT);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDACCCAPRV);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDORIGORDRNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDPOSTDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCDATE1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCPCT1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEDATE1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEAMT1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEPCT1);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCDATE2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCPCT2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEDATE2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEAMT2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEPCT2);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCDATE3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCPCT3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEDATE3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEAMT3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEPCT3);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCDATE4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCPCT4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEDATE4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEAMT4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEPCT4);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCDATE5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCPCT5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEDATE5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEAMT5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEPCT5);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCDATE6);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDISCPCT6);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEDATE6);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEAMT6);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDDUEPCT6);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDREFNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDACPROGNBR);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_OEHDACPROGEXPDATE);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesOrderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OehdStat');
            $criteria->addSelectColumn($alias . '.OehdHold');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.OehdStName');
            $criteria->addSelectColumn($alias . '.OehdStLastName');
            $criteria->addSelectColumn($alias . '.OehdStFirstName');
            $criteria->addSelectColumn($alias . '.OehdStAdr1');
            $criteria->addSelectColumn($alias . '.OehdStAdr2');
            $criteria->addSelectColumn($alias . '.OehdStAdr3');
            $criteria->addSelectColumn($alias . '.OehdStCtry');
            $criteria->addSelectColumn($alias . '.OehdStCity');
            $criteria->addSelectColumn($alias . '.OehdStStat');
            $criteria->addSelectColumn($alias . '.OehdStZipCode');
            $criteria->addSelectColumn($alias . '.OehdCustPo');
            $criteria->addSelectColumn($alias . '.OehdOrdrDate');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArinInvNbr');
            $criteria->addSelectColumn($alias . '.OehdInvDate');
            $criteria->addSelectColumn($alias . '.OehdGLPd');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.OehdSp1Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.OehdSp2Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.OehdSp3Pct');
            $criteria->addSelectColumn($alias . '.OehdCntrNbr');
            $criteria->addSelectColumn($alias . '.OehdWiBatch');
            $criteria->addSelectColumn($alias . '.OehdDropRelHold');
            $criteria->addSelectColumn($alias . '.OehdTaxSub');
            $criteria->addSelectColumn($alias . '.OehdNonTaxSub');
            $criteria->addSelectColumn($alias . '.OehdTaxTot');
            $criteria->addSelectColumn($alias . '.OehdFrtTot');
            $criteria->addSelectColumn($alias . '.OehdMiscTot');
            $criteria->addSelectColumn($alias . '.OehdOrdrTot');
            $criteria->addSelectColumn($alias . '.OehdCostTot');
            $criteria->addSelectColumn($alias . '.OehdSpCommLock');
            $criteria->addSelectColumn($alias . '.OehdTakenDate');
            $criteria->addSelectColumn($alias . '.OehdTakenTime');
            $criteria->addSelectColumn($alias . '.OehdPickDate');
            $criteria->addSelectColumn($alias . '.OehdPickTime');
            $criteria->addSelectColumn($alias . '.OehdPackDate');
            $criteria->addSelectColumn($alias . '.OehdPackTime');
            $criteria->addSelectColumn($alias . '.OehdVerifyDate');
            $criteria->addSelectColumn($alias . '.OehdVerifyTime');
            $criteria->addSelectColumn($alias . '.OehdCreditMemo');
            $criteria->addSelectColumn($alias . '.OehdBookedYn');
            $criteria->addSelectColumn($alias . '.IntbWhseOrig');
            $criteria->addSelectColumn($alias . '.OehdBtStat');
            $criteria->addSelectColumn($alias . '.OehdShipComp');
            $criteria->addSelectColumn($alias . '.OehdCwoFlag');
            $criteria->addSelectColumn($alias . '.OehdDivision');
            $criteria->addSelectColumn($alias . '.OehdTakenCode');
            $criteria->addSelectColumn($alias . '.OehdPickCode');
            $criteria->addSelectColumn($alias . '.OehdPackCode');
            $criteria->addSelectColumn($alias . '.OehdVerifyCode');
            $criteria->addSelectColumn($alias . '.OehdTotDisc');
            $criteria->addSelectColumn($alias . '.OehdEdiRefNbrQual');
            $criteria->addSelectColumn($alias . '.OehdUserCode1');
            $criteria->addSelectColumn($alias . '.OehdUserCode2');
            $criteria->addSelectColumn($alias . '.OehdUserCode3');
            $criteria->addSelectColumn($alias . '.OehdUserCode4');
            $criteria->addSelectColumn($alias . '.OehdExchCtry');
            $criteria->addSelectColumn($alias . '.OehdExchRate');
            $criteria->addSelectColumn($alias . '.OehdWghtTot');
            $criteria->addSelectColumn($alias . '.OehdWghtOride');
            $criteria->addSelectColumn($alias . '.OehdCcInfo');
            $criteria->addSelectColumn($alias . '.OehdBoxCount');
            $criteria->addSelectColumn($alias . '.OehdRqstDate');
            $criteria->addSelectColumn($alias . '.OehdCancDate');
            $criteria->addSelectColumn($alias . '.OehdCrntUser');
            $criteria->addSelectColumn($alias . '.OehdReleaseNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.OehdBordBuildDate');
            $criteria->addSelectColumn($alias . '.OehdDeptCode');
            $criteria->addSelectColumn($alias . '.OehdFrtInEntered');
            $criteria->addSelectColumn($alias . '.OehdDropShipEntered');
            $criteria->addSelectColumn($alias . '.OehdErFlag');
            $criteria->addSelectColumn($alias . '.OehdFrtIn');
            $criteria->addSelectColumn($alias . '.OehdDropShip');
            $criteria->addSelectColumn($alias . '.OehdMinOrder');
            $criteria->addSelectColumn($alias . '.OehdContractTerms');
            $criteria->addSelectColumn($alias . '.OehdDropShipBilled');
            $criteria->addSelectColumn($alias . '.OehdOrdTyp');
            $criteria->addSelectColumn($alias . '.OehdTrackNbr');
            $criteria->addSelectColumn($alias . '.OehdSource');
            $criteria->addSelectColumn($alias . '.OehdCcAprv');
            $criteria->addSelectColumn($alias . '.OehdPickFmatType');
            $criteria->addSelectColumn($alias . '.OehdInvcFmatType');
            $criteria->addSelectColumn($alias . '.OehdCashAmt');
            $criteria->addSelectColumn($alias . '.OehdCheckAmt');
            $criteria->addSelectColumn($alias . '.OehdCheckNbr');
            $criteria->addSelectColumn($alias . '.OehdDepositAmt');
            $criteria->addSelectColumn($alias . '.OehdDepositNbr');
            $criteria->addSelectColumn($alias . '.OehdCcAmt');
            $criteria->addSelectColumn($alias . '.OehdOTaxSub');
            $criteria->addSelectColumn($alias . '.OehdONonTaxSub');
            $criteria->addSelectColumn($alias . '.OehdOTaxTot');
            $criteria->addSelectColumn($alias . '.OehdOOrdrTot');
            $criteria->addSelectColumn($alias . '.OehdPickPrintDate');
            $criteria->addSelectColumn($alias . '.OehdPickPrintTime');
            $criteria->addSelectColumn($alias . '.OehdCont');
            $criteria->addSelectColumn($alias . '.OehdContTeleIntl');
            $criteria->addSelectColumn($alias . '.OehdContTeleNbr');
            $criteria->addSelectColumn($alias . '.OehdContTeleExt');
            $criteria->addSelectColumn($alias . '.OehdContFaxIntl');
            $criteria->addSelectColumn($alias . '.OehdContFaxNbr');
            $criteria->addSelectColumn($alias . '.OehdShipAcct');
            $criteria->addSelectColumn($alias . '.OehdChgDue');
            $criteria->addSelectColumn($alias . '.OehdAddlPricDisc');
            $criteria->addSelectColumn($alias . '.OehdAllShip');
            $criteria->addSelectColumn($alias . '.OehdQtyOrderAmt');
            $criteria->addSelectColumn($alias . '.OehdCreditApplied');
            $criteria->addSelectColumn($alias . '.OehdInvcPrintDate');
            $criteria->addSelectColumn($alias . '.OehdInvcPrintTime');
            $criteria->addSelectColumn($alias . '.OehdDiscFrt');
            $criteria->addSelectColumn($alias . '.OehdOrideShipComp');
            $criteria->addSelectColumn($alias . '.OehdContEmail');
            $criteria->addSelectColumn($alias . '.OehdManualFrt');
            $criteria->addSelectColumn($alias . '.OehdInternalFrt');
            $criteria->addSelectColumn($alias . '.OehdFrtCost');
            $criteria->addSelectColumn($alias . '.OehdRoute');
            $criteria->addSelectColumn($alias . '.OehdRouteSeq');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode1');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt1');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode2');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt2');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode3');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt3');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode4');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt4');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode5');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt5');
            $criteria->addSelectColumn($alias . '.OehdEdi855Sent');
            $criteria->addSelectColumn($alias . '.OehdFrt3rdParty');
            $criteria->addSelectColumn($alias . '.OehdFob');
            $criteria->addSelectColumn($alias . '.OehdConfirmImagYn');
            $criteria->addSelectColumn($alias . '.OehdIndustConform');
            $criteria->addSelectColumn($alias . '.OehdCstkConsign');
            $criteria->addSelectColumn($alias . '.OehdLmDelayCapSent');
            $criteria->addSelectColumn($alias . '.OehdMfgId');
            $criteria->addSelectColumn($alias . '.OehdStoreId');
            $criteria->addSelectColumn($alias . '.OehdPickQueue');
            $criteria->addSelectColumn($alias . '.OehdArrvDate');
            $criteria->addSelectColumn($alias . '.OehdSurchgStat');
            $criteria->addSelectColumn($alias . '.OehdFrtGrup');
            $criteria->addSelectColumn($alias . '.OehdCommOride');
            $criteria->addSelectColumn($alias . '.OehdChrgSplt');
            $criteria->addSelectColumn($alias . '.OehdAcCcAprv');
            $criteria->addSelectColumn($alias . '.OehdOrigOrdrNbr');
            $criteria->addSelectColumn($alias . '.OehdPostDate');
            $criteria->addSelectColumn($alias . '.OehdDiscDate1');
            $criteria->addSelectColumn($alias . '.OehdDiscPct1');
            $criteria->addSelectColumn($alias . '.OehdDueDate1');
            $criteria->addSelectColumn($alias . '.OehdDueAmt1');
            $criteria->addSelectColumn($alias . '.OehdDuePct1');
            $criteria->addSelectColumn($alias . '.OehdDiscDate2');
            $criteria->addSelectColumn($alias . '.OehdDiscPct2');
            $criteria->addSelectColumn($alias . '.OehdDueDate2');
            $criteria->addSelectColumn($alias . '.OehdDueAmt2');
            $criteria->addSelectColumn($alias . '.OehdDuePct2');
            $criteria->addSelectColumn($alias . '.OehdDiscDate3');
            $criteria->addSelectColumn($alias . '.OehdDiscPct3');
            $criteria->addSelectColumn($alias . '.OehdDueDate3');
            $criteria->addSelectColumn($alias . '.OehdDueAmt3');
            $criteria->addSelectColumn($alias . '.OehdDuePct3');
            $criteria->addSelectColumn($alias . '.OehdDiscDate4');
            $criteria->addSelectColumn($alias . '.OehdDiscPct4');
            $criteria->addSelectColumn($alias . '.OehdDueDate4');
            $criteria->addSelectColumn($alias . '.OehdDueAmt4');
            $criteria->addSelectColumn($alias . '.OehdDuePct4');
            $criteria->addSelectColumn($alias . '.OehdDiscDate5');
            $criteria->addSelectColumn($alias . '.OehdDiscPct5');
            $criteria->addSelectColumn($alias . '.OehdDueDate5');
            $criteria->addSelectColumn($alias . '.OehdDueAmt5');
            $criteria->addSelectColumn($alias . '.OehdDuePct5');
            $criteria->addSelectColumn($alias . '.OehdDiscDate6');
            $criteria->addSelectColumn($alias . '.OehdDiscPct6');
            $criteria->addSelectColumn($alias . '.OehdDueDate6');
            $criteria->addSelectColumn($alias . '.OehdDueAmt6');
            $criteria->addSelectColumn($alias . '.OehdDuePct6');
            $criteria->addSelectColumn($alias . '.OehdRefNbr');
            $criteria->addSelectColumn($alias . '.OehdAcProgNbr');
            $criteria->addSelectColumn($alias . '.OehdAcProgExpDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesOrderTableMap::DATABASE_NAME)->getTable(SalesOrderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesOrderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesOrderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesOrderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesOrder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesOrder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesOrderTableMap::DATABASE_NAME);
            $criteria->add(SalesOrderTableMap::COL_OEHDNBR, (array) $values, Criteria::IN);
        }

        $query = SalesOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesOrder or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesOrder object
        }


        // Set the correct dbName
        $query = SalesOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesOrderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesOrderTableMap::buildTableMap();
