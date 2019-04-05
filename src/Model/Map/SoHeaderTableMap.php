<?php

namespace Map;

use \SoHeader;
use \SoHeaderQuery;
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
class SoHeaderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoHeaderTableMap';

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
    const OM_CLASS = '\\SoHeader';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoHeader';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 186;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 186;

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oehdstat', 'Oehdhold', 'Arcucustid', 'Arstshipid', 'Oehdstname', 'Oehdstlastname', 'Oehdstfirstname', 'Oehdstadr1', 'Oehdstadr2', 'Oehdstadr3', 'Oehdstctry', 'Oehdstcity', 'Oehdststat', 'Oehdstzipcode', 'Oehdcustpo', 'Oehdordrdate', 'Artmtermcd', 'Artbshipvia', 'Arininvnbr', 'Oehdinvdate', 'Oehdglpd', 'Arspsaleper1', 'Oehdsp1pct', 'Arspsaleper2', 'Oehdsp2pct', 'Arspsaleper3', 'Oehdsp3pct', 'Oehdcntrnbr', 'Oehdwibatch', 'Oehddroprelhold', 'Oehdtaxsub', 'Oehdnontaxsub', 'Oehdtaxtot', 'Oehdfrttot', 'Oehdmisctot', 'Oehdordrtot', 'Oehdcosttot', 'Oehdspcommlock', 'Oehdtakendate', 'Oehdtakentime', 'Oehdpickdate', 'Oehdpicktime', 'Oehdpackdate', 'Oehdpacktime', 'Oehdverifydate', 'Oehdverifytime', 'Oehdcreditmemo', 'Oehdbookedyn', 'Intbwhseorig', 'Oehdbtstat', 'Oehdshipcomp', 'Oehdcwoflag', 'Oehddivision', 'Oehdtakencode', 'Oehdpickcode', 'Oehdpackcode', 'Oehdverifycode', 'Oehdtotdisc', 'Oehdedirefnbrqual', 'Oehdusercode1', 'Oehdusercode2', 'Oehdusercode3', 'Oehdusercode4', 'Oehdexchctry', 'Oehdexchrate', 'Oehdwghttot', 'Oehdwghtoride', 'Oehdccinfo', 'Oehdboxcount', 'Oehdrqstdate', 'Oehdcancdate', 'Oehdcrntuser', 'Oehdreleasenbr', 'Intbwhse', 'Oehdbordbuilddate', 'Oehddeptcode', 'Oehdfrtinentered', 'Oehddropshipentered', 'Oehderflag', 'Oehdfrtin', 'Oehddropship', 'Oehdminorder', 'Oehdcontractterms', 'Oehddropshipbilled', 'Oehdordtyp', 'Oehdtracknbr', 'Oehdsource', 'Oehdccaprv', 'Oehdpickfmattype', 'Oehdinvcfmattype', 'Oehdcashamt', 'Oehdcheckamt', 'Oehdchecknbr', 'Oehddepositamt', 'Oehddepositnbr', 'Oehdccamt', 'Oehdotaxsub', 'Oehdonontaxsub', 'Oehdotaxtot', 'Oehdoordrtot', 'Oehdpickprintdate', 'Oehdpickprinttime', 'Oehdcont', 'Oehdcontteleintl', 'Oehdconttelenbr', 'Oehdcontteleext', 'Oehdcontfaxintl', 'Oehdcontfaxnbr', 'Oehdshipacct', 'Oehdchgdue', 'Oehdaddlpricdisc', 'Oehdallship', 'Oehdqtyorderamt', 'Oehdcreditapplied', 'Oehdinvcprintdate', 'Oehdinvcprinttime', 'Oehddiscfrt', 'Oehdorideshipcomp', 'Oehdcontemail', 'Oehdmanualfrt', 'Oehdinternalfrt', 'Oehdfrtcost', 'Oehdroute', 'Oehdrouteseq', 'Oehdfrttaxcode1', 'Oehdfrttaxamt1', 'Oehdfrttaxcode2', 'Oehdfrttaxamt2', 'Oehdfrttaxcode3', 'Oehdfrttaxamt3', 'Oehdfrttaxcode4', 'Oehdfrttaxamt4', 'Oehdfrttaxcode5', 'Oehdfrttaxamt5', 'Oehdedi855sent', 'Oehdfrt3rdparty', 'Oehdfob', 'Oehdconfirmimagyn', 'Oehdindustconform', 'Oehdcstkconsign', 'Oehdlmdelaycapsent', 'Oehdmfgid', 'Oehdstoreid', 'Oehdpickqueue', 'Oehdarrvdate', 'Oehdsurchgstat', 'Oehdfrtgrup', 'Oehdcommoride', 'Oehdchrgsplt', 'Oehdacccaprv', 'Oehdorigordrnbr', 'Oehdpostdate', 'Oehddiscdate1', 'Oehddiscpct1', 'Oehdduedate1', 'Oehddueamt1', 'Oehdduepct1', 'Oehddiscdate2', 'Oehddiscpct2', 'Oehdduedate2', 'Oehddueamt2', 'Oehdduepct2', 'Oehddiscdate3', 'Oehddiscpct3', 'Oehdduedate3', 'Oehddueamt3', 'Oehdduepct3', 'Oehddiscdate4', 'Oehddiscpct4', 'Oehdduedate4', 'Oehddueamt4', 'Oehdduepct4', 'Oehddiscdate5', 'Oehddiscpct5', 'Oehdduedate5', 'Oehddueamt5', 'Oehdduepct5', 'Oehddiscdate6', 'Oehddiscpct6', 'Oehdduedate6', 'Oehddueamt6', 'Oehdduepct6', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oehdstat', 'oehdhold', 'arcucustid', 'arstshipid', 'oehdstname', 'oehdstlastname', 'oehdstfirstname', 'oehdstadr1', 'oehdstadr2', 'oehdstadr3', 'oehdstctry', 'oehdstcity', 'oehdststat', 'oehdstzipcode', 'oehdcustpo', 'oehdordrdate', 'artmtermcd', 'artbshipvia', 'arininvnbr', 'oehdinvdate', 'oehdglpd', 'arspsaleper1', 'oehdsp1pct', 'arspsaleper2', 'oehdsp2pct', 'arspsaleper3', 'oehdsp3pct', 'oehdcntrnbr', 'oehdwibatch', 'oehddroprelhold', 'oehdtaxsub', 'oehdnontaxsub', 'oehdtaxtot', 'oehdfrttot', 'oehdmisctot', 'oehdordrtot', 'oehdcosttot', 'oehdspcommlock', 'oehdtakendate', 'oehdtakentime', 'oehdpickdate', 'oehdpicktime', 'oehdpackdate', 'oehdpacktime', 'oehdverifydate', 'oehdverifytime', 'oehdcreditmemo', 'oehdbookedyn', 'intbwhseorig', 'oehdbtstat', 'oehdshipcomp', 'oehdcwoflag', 'oehddivision', 'oehdtakencode', 'oehdpickcode', 'oehdpackcode', 'oehdverifycode', 'oehdtotdisc', 'oehdedirefnbrqual', 'oehdusercode1', 'oehdusercode2', 'oehdusercode3', 'oehdusercode4', 'oehdexchctry', 'oehdexchrate', 'oehdwghttot', 'oehdwghtoride', 'oehdccinfo', 'oehdboxcount', 'oehdrqstdate', 'oehdcancdate', 'oehdcrntuser', 'oehdreleasenbr', 'intbwhse', 'oehdbordbuilddate', 'oehddeptcode', 'oehdfrtinentered', 'oehddropshipentered', 'oehderflag', 'oehdfrtin', 'oehddropship', 'oehdminorder', 'oehdcontractterms', 'oehddropshipbilled', 'oehdordtyp', 'oehdtracknbr', 'oehdsource', 'oehdccaprv', 'oehdpickfmattype', 'oehdinvcfmattype', 'oehdcashamt', 'oehdcheckamt', 'oehdchecknbr', 'oehddepositamt', 'oehddepositnbr', 'oehdccamt', 'oehdotaxsub', 'oehdonontaxsub', 'oehdotaxtot', 'oehdoordrtot', 'oehdpickprintdate', 'oehdpickprinttime', 'oehdcont', 'oehdcontteleintl', 'oehdconttelenbr', 'oehdcontteleext', 'oehdcontfaxintl', 'oehdcontfaxnbr', 'oehdshipacct', 'oehdchgdue', 'oehdaddlpricdisc', 'oehdallship', 'oehdqtyorderamt', 'oehdcreditapplied', 'oehdinvcprintdate', 'oehdinvcprinttime', 'oehddiscfrt', 'oehdorideshipcomp', 'oehdcontemail', 'oehdmanualfrt', 'oehdinternalfrt', 'oehdfrtcost', 'oehdroute', 'oehdrouteseq', 'oehdfrttaxcode1', 'oehdfrttaxamt1', 'oehdfrttaxcode2', 'oehdfrttaxamt2', 'oehdfrttaxcode3', 'oehdfrttaxamt3', 'oehdfrttaxcode4', 'oehdfrttaxamt4', 'oehdfrttaxcode5', 'oehdfrttaxamt5', 'oehdedi855sent', 'oehdfrt3rdparty', 'oehdfob', 'oehdconfirmimagyn', 'oehdindustconform', 'oehdcstkconsign', 'oehdlmdelaycapsent', 'oehdmfgid', 'oehdstoreid', 'oehdpickqueue', 'oehdarrvdate', 'oehdsurchgstat', 'oehdfrtgrup', 'oehdcommoride', 'oehdchrgsplt', 'oehdacccaprv', 'oehdorigordrnbr', 'oehdpostdate', 'oehddiscdate1', 'oehddiscpct1', 'oehdduedate1', 'oehddueamt1', 'oehdduepct1', 'oehddiscdate2', 'oehddiscpct2', 'oehdduedate2', 'oehddueamt2', 'oehdduepct2', 'oehddiscdate3', 'oehddiscpct3', 'oehdduedate3', 'oehddueamt3', 'oehdduepct3', 'oehddiscdate4', 'oehddiscpct4', 'oehdduedate4', 'oehddueamt4', 'oehdduepct4', 'oehddiscdate5', 'oehddiscpct5', 'oehdduedate5', 'oehddueamt5', 'oehdduepct5', 'oehddiscdate6', 'oehddiscpct6', 'oehdduedate6', 'oehddueamt6', 'oehdduepct6', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoHeaderTableMap::COL_OEHDNBR, SoHeaderTableMap::COL_OEHDSTAT, SoHeaderTableMap::COL_OEHDHOLD, SoHeaderTableMap::COL_ARCUCUSTID, SoHeaderTableMap::COL_ARSTSHIPID, SoHeaderTableMap::COL_OEHDSTNAME, SoHeaderTableMap::COL_OEHDSTLASTNAME, SoHeaderTableMap::COL_OEHDSTFIRSTNAME, SoHeaderTableMap::COL_OEHDSTADR1, SoHeaderTableMap::COL_OEHDSTADR2, SoHeaderTableMap::COL_OEHDSTADR3, SoHeaderTableMap::COL_OEHDSTCTRY, SoHeaderTableMap::COL_OEHDSTCITY, SoHeaderTableMap::COL_OEHDSTSTAT, SoHeaderTableMap::COL_OEHDSTZIPCODE, SoHeaderTableMap::COL_OEHDCUSTPO, SoHeaderTableMap::COL_OEHDORDRDATE, SoHeaderTableMap::COL_ARTMTERMCD, SoHeaderTableMap::COL_ARTBSHIPVIA, SoHeaderTableMap::COL_ARININVNBR, SoHeaderTableMap::COL_OEHDINVDATE, SoHeaderTableMap::COL_OEHDGLPD, SoHeaderTableMap::COL_ARSPSALEPER1, SoHeaderTableMap::COL_OEHDSP1PCT, SoHeaderTableMap::COL_ARSPSALEPER2, SoHeaderTableMap::COL_OEHDSP2PCT, SoHeaderTableMap::COL_ARSPSALEPER3, SoHeaderTableMap::COL_OEHDSP3PCT, SoHeaderTableMap::COL_OEHDCNTRNBR, SoHeaderTableMap::COL_OEHDWIBATCH, SoHeaderTableMap::COL_OEHDDROPRELHOLD, SoHeaderTableMap::COL_OEHDTAXSUB, SoHeaderTableMap::COL_OEHDNONTAXSUB, SoHeaderTableMap::COL_OEHDTAXTOT, SoHeaderTableMap::COL_OEHDFRTTOT, SoHeaderTableMap::COL_OEHDMISCTOT, SoHeaderTableMap::COL_OEHDORDRTOT, SoHeaderTableMap::COL_OEHDCOSTTOT, SoHeaderTableMap::COL_OEHDSPCOMMLOCK, SoHeaderTableMap::COL_OEHDTAKENDATE, SoHeaderTableMap::COL_OEHDTAKENTIME, SoHeaderTableMap::COL_OEHDPICKDATE, SoHeaderTableMap::COL_OEHDPICKTIME, SoHeaderTableMap::COL_OEHDPACKDATE, SoHeaderTableMap::COL_OEHDPACKTIME, SoHeaderTableMap::COL_OEHDVERIFYDATE, SoHeaderTableMap::COL_OEHDVERIFYTIME, SoHeaderTableMap::COL_OEHDCREDITMEMO, SoHeaderTableMap::COL_OEHDBOOKEDYN, SoHeaderTableMap::COL_INTBWHSEORIG, SoHeaderTableMap::COL_OEHDBTSTAT, SoHeaderTableMap::COL_OEHDSHIPCOMP, SoHeaderTableMap::COL_OEHDCWOFLAG, SoHeaderTableMap::COL_OEHDDIVISION, SoHeaderTableMap::COL_OEHDTAKENCODE, SoHeaderTableMap::COL_OEHDPICKCODE, SoHeaderTableMap::COL_OEHDPACKCODE, SoHeaderTableMap::COL_OEHDVERIFYCODE, SoHeaderTableMap::COL_OEHDTOTDISC, SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL, SoHeaderTableMap::COL_OEHDUSERCODE1, SoHeaderTableMap::COL_OEHDUSERCODE2, SoHeaderTableMap::COL_OEHDUSERCODE3, SoHeaderTableMap::COL_OEHDUSERCODE4, SoHeaderTableMap::COL_OEHDEXCHCTRY, SoHeaderTableMap::COL_OEHDEXCHRATE, SoHeaderTableMap::COL_OEHDWGHTTOT, SoHeaderTableMap::COL_OEHDWGHTORIDE, SoHeaderTableMap::COL_OEHDCCINFO, SoHeaderTableMap::COL_OEHDBOXCOUNT, SoHeaderTableMap::COL_OEHDRQSTDATE, SoHeaderTableMap::COL_OEHDCANCDATE, SoHeaderTableMap::COL_OEHDCRNTUSER, SoHeaderTableMap::COL_OEHDRELEASENBR, SoHeaderTableMap::COL_INTBWHSE, SoHeaderTableMap::COL_OEHDBORDBUILDDATE, SoHeaderTableMap::COL_OEHDDEPTCODE, SoHeaderTableMap::COL_OEHDFRTINENTERED, SoHeaderTableMap::COL_OEHDDROPSHIPENTERED, SoHeaderTableMap::COL_OEHDERFLAG, SoHeaderTableMap::COL_OEHDFRTIN, SoHeaderTableMap::COL_OEHDDROPSHIP, SoHeaderTableMap::COL_OEHDMINORDER, SoHeaderTableMap::COL_OEHDCONTRACTTERMS, SoHeaderTableMap::COL_OEHDDROPSHIPBILLED, SoHeaderTableMap::COL_OEHDORDTYP, SoHeaderTableMap::COL_OEHDTRACKNBR, SoHeaderTableMap::COL_OEHDSOURCE, SoHeaderTableMap::COL_OEHDCCAPRV, SoHeaderTableMap::COL_OEHDPICKFMATTYPE, SoHeaderTableMap::COL_OEHDINVCFMATTYPE, SoHeaderTableMap::COL_OEHDCASHAMT, SoHeaderTableMap::COL_OEHDCHECKAMT, SoHeaderTableMap::COL_OEHDCHECKNBR, SoHeaderTableMap::COL_OEHDDEPOSITAMT, SoHeaderTableMap::COL_OEHDDEPOSITNBR, SoHeaderTableMap::COL_OEHDCCAMT, SoHeaderTableMap::COL_OEHDOTAXSUB, SoHeaderTableMap::COL_OEHDONONTAXSUB, SoHeaderTableMap::COL_OEHDOTAXTOT, SoHeaderTableMap::COL_OEHDOORDRTOT, SoHeaderTableMap::COL_OEHDPICKPRINTDATE, SoHeaderTableMap::COL_OEHDPICKPRINTTIME, SoHeaderTableMap::COL_OEHDCONT, SoHeaderTableMap::COL_OEHDCONTTELEINTL, SoHeaderTableMap::COL_OEHDCONTTELENBR, SoHeaderTableMap::COL_OEHDCONTTELEEXT, SoHeaderTableMap::COL_OEHDCONTFAXINTL, SoHeaderTableMap::COL_OEHDCONTFAXNBR, SoHeaderTableMap::COL_OEHDSHIPACCT, SoHeaderTableMap::COL_OEHDCHGDUE, SoHeaderTableMap::COL_OEHDADDLPRICDISC, SoHeaderTableMap::COL_OEHDALLSHIP, SoHeaderTableMap::COL_OEHDQTYORDERAMT, SoHeaderTableMap::COL_OEHDCREDITAPPLIED, SoHeaderTableMap::COL_OEHDINVCPRINTDATE, SoHeaderTableMap::COL_OEHDINVCPRINTTIME, SoHeaderTableMap::COL_OEHDDISCFRT, SoHeaderTableMap::COL_OEHDORIDESHIPCOMP, SoHeaderTableMap::COL_OEHDCONTEMAIL, SoHeaderTableMap::COL_OEHDMANUALFRT, SoHeaderTableMap::COL_OEHDINTERNALFRT, SoHeaderTableMap::COL_OEHDFRTCOST, SoHeaderTableMap::COL_OEHDROUTE, SoHeaderTableMap::COL_OEHDROUTESEQ, SoHeaderTableMap::COL_OEHDFRTTAXCODE1, SoHeaderTableMap::COL_OEHDFRTTAXAMT1, SoHeaderTableMap::COL_OEHDFRTTAXCODE2, SoHeaderTableMap::COL_OEHDFRTTAXAMT2, SoHeaderTableMap::COL_OEHDFRTTAXCODE3, SoHeaderTableMap::COL_OEHDFRTTAXAMT3, SoHeaderTableMap::COL_OEHDFRTTAXCODE4, SoHeaderTableMap::COL_OEHDFRTTAXAMT4, SoHeaderTableMap::COL_OEHDFRTTAXCODE5, SoHeaderTableMap::COL_OEHDFRTTAXAMT5, SoHeaderTableMap::COL_OEHDEDI855SENT, SoHeaderTableMap::COL_OEHDFRT3RDPARTY, SoHeaderTableMap::COL_OEHDFOB, SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN, SoHeaderTableMap::COL_OEHDINDUSTCONFORM, SoHeaderTableMap::COL_OEHDCSTKCONSIGN, SoHeaderTableMap::COL_OEHDLMDELAYCAPSENT, SoHeaderTableMap::COL_OEHDMFGID, SoHeaderTableMap::COL_OEHDSTOREID, SoHeaderTableMap::COL_OEHDPICKQUEUE, SoHeaderTableMap::COL_OEHDARRVDATE, SoHeaderTableMap::COL_OEHDSURCHGSTAT, SoHeaderTableMap::COL_OEHDFRTGRUP, SoHeaderTableMap::COL_OEHDCOMMORIDE, SoHeaderTableMap::COL_OEHDCHRGSPLT, SoHeaderTableMap::COL_OEHDACCCAPRV, SoHeaderTableMap::COL_OEHDORIGORDRNBR, SoHeaderTableMap::COL_OEHDPOSTDATE, SoHeaderTableMap::COL_OEHDDISCDATE1, SoHeaderTableMap::COL_OEHDDISCPCT1, SoHeaderTableMap::COL_OEHDDUEDATE1, SoHeaderTableMap::COL_OEHDDUEAMT1, SoHeaderTableMap::COL_OEHDDUEPCT1, SoHeaderTableMap::COL_OEHDDISCDATE2, SoHeaderTableMap::COL_OEHDDISCPCT2, SoHeaderTableMap::COL_OEHDDUEDATE2, SoHeaderTableMap::COL_OEHDDUEAMT2, SoHeaderTableMap::COL_OEHDDUEPCT2, SoHeaderTableMap::COL_OEHDDISCDATE3, SoHeaderTableMap::COL_OEHDDISCPCT3, SoHeaderTableMap::COL_OEHDDUEDATE3, SoHeaderTableMap::COL_OEHDDUEAMT3, SoHeaderTableMap::COL_OEHDDUEPCT3, SoHeaderTableMap::COL_OEHDDISCDATE4, SoHeaderTableMap::COL_OEHDDISCPCT4, SoHeaderTableMap::COL_OEHDDUEDATE4, SoHeaderTableMap::COL_OEHDDUEAMT4, SoHeaderTableMap::COL_OEHDDUEPCT4, SoHeaderTableMap::COL_OEHDDISCDATE5, SoHeaderTableMap::COL_OEHDDISCPCT5, SoHeaderTableMap::COL_OEHDDUEDATE5, SoHeaderTableMap::COL_OEHDDUEAMT5, SoHeaderTableMap::COL_OEHDDUEPCT5, SoHeaderTableMap::COL_OEHDDISCDATE6, SoHeaderTableMap::COL_OEHDDISCPCT6, SoHeaderTableMap::COL_OEHDDUEDATE6, SoHeaderTableMap::COL_OEHDDUEAMT6, SoHeaderTableMap::COL_OEHDDUEPCT6, SoHeaderTableMap::COL_DATEUPDTD, SoHeaderTableMap::COL_TIMEUPDTD, SoHeaderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OehdStat', 'OehdHold', 'ArcuCustId', 'ArstShipId', 'OehdStName', 'OehdStLastName', 'OehdStFirstName', 'OehdStAdr1', 'OehdStAdr2', 'OehdStAdr3', 'OehdStCtry', 'OehdStCity', 'OehdStStat', 'OehdStZipCode', 'OehdCustPo', 'OehdOrdrDate', 'ArtmTermCd', 'ArtbShipVia', 'ArinInvNbr', 'OehdInvDate', 'OehdGLPd', 'ArspSalePer1', 'OehdSp1Pct', 'ArspSalePer2', 'OehdSp2Pct', 'ArspSalePer3', 'OehdSp3Pct', 'OehdCntrNbr', 'OehdWiBatch', 'OehdDropRelHold', 'OehdTaxSub', 'OehdNonTaxSub', 'OehdTaxTot', 'OehdFrtTot', 'OehdMiscTot', 'OehdOrdrTot', 'OehdCostTot', 'OehdSpCommLock', 'OehdTakenDate', 'OehdTakenTime', 'OehdPickDate', 'OehdPickTime', 'OehdPackDate', 'OehdPackTime', 'OehdVerifyDate', 'OehdVerifyTime', 'OehdCreditMemo', 'OehdBookedYn', 'IntbWhseOrig', 'OehdBtStat', 'OehdShipComp', 'OehdCwoFlag', 'OehdDivision', 'OehdTakenCode', 'OehdPickCode', 'OehdPackCode', 'OehdVerifyCode', 'OehdTotDisc', 'OehdEdiRefNbrQual', 'OehdUserCode1', 'OehdUserCode2', 'OehdUserCode3', 'OehdUserCode4', 'OehdExchCtry', 'OehdExchRate', 'OehdWghtTot', 'OehdWghtOride', 'OehdCcInfo', 'OehdBoxCount', 'OehdRqstDate', 'OehdCancDate', 'OehdCrntUser', 'OehdReleaseNbr', 'IntbWhse', 'OehdBordBuildDate', 'OehdDeptCode', 'OehdFrtInEntered', 'OehdDropShipEntered', 'OehdErFlag', 'OehdFrtIn', 'OehdDropShip', 'OehdMinOrder', 'OehdContractTerms', 'OehdDropShipBilled', 'OehdOrdTyp', 'OehdTrackNbr', 'OehdSource', 'OehdCcAprv', 'OehdPickFmatType', 'OehdInvcFmatType', 'OehdCashAmt', 'OehdCheckAmt', 'OehdCheckNbr', 'OehdDepositAmt', 'OehdDepositNbr', 'OehdCcAmt', 'OehdOTaxSub', 'OehdONonTaxSub', 'OehdOTaxTot', 'OehdOOrdrTot', 'OehdPickPrintDate', 'OehdPickPrintTime', 'OehdCont', 'OehdContTeleIntl', 'OehdContTeleNbr', 'OehdContTeleExt', 'OehdContFaxIntl', 'OehdContFaxNbr', 'OehdShipAcct', 'OehdChgDue', 'OehdAddlPricDisc', 'OehdAllShip', 'OehdQtyOrderAmt', 'OehdCreditApplied', 'OehdInvcPrintDate', 'OehdInvcPrintTime', 'OehdDiscFrt', 'OehdOrideShipComp', 'OehdContEmail', 'OehdManualFrt', 'OehdInternalFrt', 'OehdFrtCost', 'OehdRoute', 'OehdRouteSeq', 'OehdFrtTaxCode1', 'OehdFrtTaxAmt1', 'OehdFrtTaxCode2', 'OehdFrtTaxAmt2', 'OehdFrtTaxCode3', 'OehdFrtTaxAmt3', 'OehdFrtTaxCode4', 'OehdFrtTaxAmt4', 'OehdFrtTaxCode5', 'OehdFrtTaxAmt5', 'OehdEdi855Sent', 'OehdFrt3rdParty', 'OehdFob', 'OehdConfirmImagYn', 'OehdIndustConform', 'OehdCstkConsign', 'OehdLmDelayCapSent', 'OehdMfgId', 'OehdStoreId', 'OehdPickQueue', 'OehdArrvDate', 'OehdSurchgStat', 'OehdFrtGrup', 'OehdCommOride', 'OehdChrgSplt', 'OehdAcCcAprv', 'OehdOrigOrdrNbr', 'OehdPostDate', 'OehdDiscDate1', 'OehdDiscPct1', 'OehdDueDate1', 'OehdDueAmt1', 'OehdDuePct1', 'OehdDiscDate2', 'OehdDiscPct2', 'OehdDueDate2', 'OehdDueAmt2', 'OehdDuePct2', 'OehdDiscDate3', 'OehdDiscPct3', 'OehdDueDate3', 'OehdDueAmt3', 'OehdDuePct3', 'OehdDiscDate4', 'OehdDiscPct4', 'OehdDueDate4', 'OehdDueAmt4', 'OehdDuePct4', 'OehdDiscDate5', 'OehdDiscPct5', 'OehdDueDate5', 'OehdDueAmt5', 'OehdDuePct5', 'OehdDiscDate6', 'OehdDiscPct6', 'OehdDueDate6', 'OehdDueAmt6', 'OehdDuePct6', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oehdstat' => 1, 'Oehdhold' => 2, 'Arcucustid' => 3, 'Arstshipid' => 4, 'Oehdstname' => 5, 'Oehdstlastname' => 6, 'Oehdstfirstname' => 7, 'Oehdstadr1' => 8, 'Oehdstadr2' => 9, 'Oehdstadr3' => 10, 'Oehdstctry' => 11, 'Oehdstcity' => 12, 'Oehdststat' => 13, 'Oehdstzipcode' => 14, 'Oehdcustpo' => 15, 'Oehdordrdate' => 16, 'Artmtermcd' => 17, 'Artbshipvia' => 18, 'Arininvnbr' => 19, 'Oehdinvdate' => 20, 'Oehdglpd' => 21, 'Arspsaleper1' => 22, 'Oehdsp1pct' => 23, 'Arspsaleper2' => 24, 'Oehdsp2pct' => 25, 'Arspsaleper3' => 26, 'Oehdsp3pct' => 27, 'Oehdcntrnbr' => 28, 'Oehdwibatch' => 29, 'Oehddroprelhold' => 30, 'Oehdtaxsub' => 31, 'Oehdnontaxsub' => 32, 'Oehdtaxtot' => 33, 'Oehdfrttot' => 34, 'Oehdmisctot' => 35, 'Oehdordrtot' => 36, 'Oehdcosttot' => 37, 'Oehdspcommlock' => 38, 'Oehdtakendate' => 39, 'Oehdtakentime' => 40, 'Oehdpickdate' => 41, 'Oehdpicktime' => 42, 'Oehdpackdate' => 43, 'Oehdpacktime' => 44, 'Oehdverifydate' => 45, 'Oehdverifytime' => 46, 'Oehdcreditmemo' => 47, 'Oehdbookedyn' => 48, 'Intbwhseorig' => 49, 'Oehdbtstat' => 50, 'Oehdshipcomp' => 51, 'Oehdcwoflag' => 52, 'Oehddivision' => 53, 'Oehdtakencode' => 54, 'Oehdpickcode' => 55, 'Oehdpackcode' => 56, 'Oehdverifycode' => 57, 'Oehdtotdisc' => 58, 'Oehdedirefnbrqual' => 59, 'Oehdusercode1' => 60, 'Oehdusercode2' => 61, 'Oehdusercode3' => 62, 'Oehdusercode4' => 63, 'Oehdexchctry' => 64, 'Oehdexchrate' => 65, 'Oehdwghttot' => 66, 'Oehdwghtoride' => 67, 'Oehdccinfo' => 68, 'Oehdboxcount' => 69, 'Oehdrqstdate' => 70, 'Oehdcancdate' => 71, 'Oehdcrntuser' => 72, 'Oehdreleasenbr' => 73, 'Intbwhse' => 74, 'Oehdbordbuilddate' => 75, 'Oehddeptcode' => 76, 'Oehdfrtinentered' => 77, 'Oehddropshipentered' => 78, 'Oehderflag' => 79, 'Oehdfrtin' => 80, 'Oehddropship' => 81, 'Oehdminorder' => 82, 'Oehdcontractterms' => 83, 'Oehddropshipbilled' => 84, 'Oehdordtyp' => 85, 'Oehdtracknbr' => 86, 'Oehdsource' => 87, 'Oehdccaprv' => 88, 'Oehdpickfmattype' => 89, 'Oehdinvcfmattype' => 90, 'Oehdcashamt' => 91, 'Oehdcheckamt' => 92, 'Oehdchecknbr' => 93, 'Oehddepositamt' => 94, 'Oehddepositnbr' => 95, 'Oehdccamt' => 96, 'Oehdotaxsub' => 97, 'Oehdonontaxsub' => 98, 'Oehdotaxtot' => 99, 'Oehdoordrtot' => 100, 'Oehdpickprintdate' => 101, 'Oehdpickprinttime' => 102, 'Oehdcont' => 103, 'Oehdcontteleintl' => 104, 'Oehdconttelenbr' => 105, 'Oehdcontteleext' => 106, 'Oehdcontfaxintl' => 107, 'Oehdcontfaxnbr' => 108, 'Oehdshipacct' => 109, 'Oehdchgdue' => 110, 'Oehdaddlpricdisc' => 111, 'Oehdallship' => 112, 'Oehdqtyorderamt' => 113, 'Oehdcreditapplied' => 114, 'Oehdinvcprintdate' => 115, 'Oehdinvcprinttime' => 116, 'Oehddiscfrt' => 117, 'Oehdorideshipcomp' => 118, 'Oehdcontemail' => 119, 'Oehdmanualfrt' => 120, 'Oehdinternalfrt' => 121, 'Oehdfrtcost' => 122, 'Oehdroute' => 123, 'Oehdrouteseq' => 124, 'Oehdfrttaxcode1' => 125, 'Oehdfrttaxamt1' => 126, 'Oehdfrttaxcode2' => 127, 'Oehdfrttaxamt2' => 128, 'Oehdfrttaxcode3' => 129, 'Oehdfrttaxamt3' => 130, 'Oehdfrttaxcode4' => 131, 'Oehdfrttaxamt4' => 132, 'Oehdfrttaxcode5' => 133, 'Oehdfrttaxamt5' => 134, 'Oehdedi855sent' => 135, 'Oehdfrt3rdparty' => 136, 'Oehdfob' => 137, 'Oehdconfirmimagyn' => 138, 'Oehdindustconform' => 139, 'Oehdcstkconsign' => 140, 'Oehdlmdelaycapsent' => 141, 'Oehdmfgid' => 142, 'Oehdstoreid' => 143, 'Oehdpickqueue' => 144, 'Oehdarrvdate' => 145, 'Oehdsurchgstat' => 146, 'Oehdfrtgrup' => 147, 'Oehdcommoride' => 148, 'Oehdchrgsplt' => 149, 'Oehdacccaprv' => 150, 'Oehdorigordrnbr' => 151, 'Oehdpostdate' => 152, 'Oehddiscdate1' => 153, 'Oehddiscpct1' => 154, 'Oehdduedate1' => 155, 'Oehddueamt1' => 156, 'Oehdduepct1' => 157, 'Oehddiscdate2' => 158, 'Oehddiscpct2' => 159, 'Oehdduedate2' => 160, 'Oehddueamt2' => 161, 'Oehdduepct2' => 162, 'Oehddiscdate3' => 163, 'Oehddiscpct3' => 164, 'Oehdduedate3' => 165, 'Oehddueamt3' => 166, 'Oehdduepct3' => 167, 'Oehddiscdate4' => 168, 'Oehddiscpct4' => 169, 'Oehdduedate4' => 170, 'Oehddueamt4' => 171, 'Oehdduepct4' => 172, 'Oehddiscdate5' => 173, 'Oehddiscpct5' => 174, 'Oehdduedate5' => 175, 'Oehddueamt5' => 176, 'Oehdduepct5' => 177, 'Oehddiscdate6' => 178, 'Oehddiscpct6' => 179, 'Oehdduedate6' => 180, 'Oehddueamt6' => 181, 'Oehdduepct6' => 182, 'Dateupdtd' => 183, 'Timeupdtd' => 184, 'Dummy' => 185, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oehdstat' => 1, 'oehdhold' => 2, 'arcucustid' => 3, 'arstshipid' => 4, 'oehdstname' => 5, 'oehdstlastname' => 6, 'oehdstfirstname' => 7, 'oehdstadr1' => 8, 'oehdstadr2' => 9, 'oehdstadr3' => 10, 'oehdstctry' => 11, 'oehdstcity' => 12, 'oehdststat' => 13, 'oehdstzipcode' => 14, 'oehdcustpo' => 15, 'oehdordrdate' => 16, 'artmtermcd' => 17, 'artbshipvia' => 18, 'arininvnbr' => 19, 'oehdinvdate' => 20, 'oehdglpd' => 21, 'arspsaleper1' => 22, 'oehdsp1pct' => 23, 'arspsaleper2' => 24, 'oehdsp2pct' => 25, 'arspsaleper3' => 26, 'oehdsp3pct' => 27, 'oehdcntrnbr' => 28, 'oehdwibatch' => 29, 'oehddroprelhold' => 30, 'oehdtaxsub' => 31, 'oehdnontaxsub' => 32, 'oehdtaxtot' => 33, 'oehdfrttot' => 34, 'oehdmisctot' => 35, 'oehdordrtot' => 36, 'oehdcosttot' => 37, 'oehdspcommlock' => 38, 'oehdtakendate' => 39, 'oehdtakentime' => 40, 'oehdpickdate' => 41, 'oehdpicktime' => 42, 'oehdpackdate' => 43, 'oehdpacktime' => 44, 'oehdverifydate' => 45, 'oehdverifytime' => 46, 'oehdcreditmemo' => 47, 'oehdbookedyn' => 48, 'intbwhseorig' => 49, 'oehdbtstat' => 50, 'oehdshipcomp' => 51, 'oehdcwoflag' => 52, 'oehddivision' => 53, 'oehdtakencode' => 54, 'oehdpickcode' => 55, 'oehdpackcode' => 56, 'oehdverifycode' => 57, 'oehdtotdisc' => 58, 'oehdedirefnbrqual' => 59, 'oehdusercode1' => 60, 'oehdusercode2' => 61, 'oehdusercode3' => 62, 'oehdusercode4' => 63, 'oehdexchctry' => 64, 'oehdexchrate' => 65, 'oehdwghttot' => 66, 'oehdwghtoride' => 67, 'oehdccinfo' => 68, 'oehdboxcount' => 69, 'oehdrqstdate' => 70, 'oehdcancdate' => 71, 'oehdcrntuser' => 72, 'oehdreleasenbr' => 73, 'intbwhse' => 74, 'oehdbordbuilddate' => 75, 'oehddeptcode' => 76, 'oehdfrtinentered' => 77, 'oehddropshipentered' => 78, 'oehderflag' => 79, 'oehdfrtin' => 80, 'oehddropship' => 81, 'oehdminorder' => 82, 'oehdcontractterms' => 83, 'oehddropshipbilled' => 84, 'oehdordtyp' => 85, 'oehdtracknbr' => 86, 'oehdsource' => 87, 'oehdccaprv' => 88, 'oehdpickfmattype' => 89, 'oehdinvcfmattype' => 90, 'oehdcashamt' => 91, 'oehdcheckamt' => 92, 'oehdchecknbr' => 93, 'oehddepositamt' => 94, 'oehddepositnbr' => 95, 'oehdccamt' => 96, 'oehdotaxsub' => 97, 'oehdonontaxsub' => 98, 'oehdotaxtot' => 99, 'oehdoordrtot' => 100, 'oehdpickprintdate' => 101, 'oehdpickprinttime' => 102, 'oehdcont' => 103, 'oehdcontteleintl' => 104, 'oehdconttelenbr' => 105, 'oehdcontteleext' => 106, 'oehdcontfaxintl' => 107, 'oehdcontfaxnbr' => 108, 'oehdshipacct' => 109, 'oehdchgdue' => 110, 'oehdaddlpricdisc' => 111, 'oehdallship' => 112, 'oehdqtyorderamt' => 113, 'oehdcreditapplied' => 114, 'oehdinvcprintdate' => 115, 'oehdinvcprinttime' => 116, 'oehddiscfrt' => 117, 'oehdorideshipcomp' => 118, 'oehdcontemail' => 119, 'oehdmanualfrt' => 120, 'oehdinternalfrt' => 121, 'oehdfrtcost' => 122, 'oehdroute' => 123, 'oehdrouteseq' => 124, 'oehdfrttaxcode1' => 125, 'oehdfrttaxamt1' => 126, 'oehdfrttaxcode2' => 127, 'oehdfrttaxamt2' => 128, 'oehdfrttaxcode3' => 129, 'oehdfrttaxamt3' => 130, 'oehdfrttaxcode4' => 131, 'oehdfrttaxamt4' => 132, 'oehdfrttaxcode5' => 133, 'oehdfrttaxamt5' => 134, 'oehdedi855sent' => 135, 'oehdfrt3rdparty' => 136, 'oehdfob' => 137, 'oehdconfirmimagyn' => 138, 'oehdindustconform' => 139, 'oehdcstkconsign' => 140, 'oehdlmdelaycapsent' => 141, 'oehdmfgid' => 142, 'oehdstoreid' => 143, 'oehdpickqueue' => 144, 'oehdarrvdate' => 145, 'oehdsurchgstat' => 146, 'oehdfrtgrup' => 147, 'oehdcommoride' => 148, 'oehdchrgsplt' => 149, 'oehdacccaprv' => 150, 'oehdorigordrnbr' => 151, 'oehdpostdate' => 152, 'oehddiscdate1' => 153, 'oehddiscpct1' => 154, 'oehdduedate1' => 155, 'oehddueamt1' => 156, 'oehdduepct1' => 157, 'oehddiscdate2' => 158, 'oehddiscpct2' => 159, 'oehdduedate2' => 160, 'oehddueamt2' => 161, 'oehdduepct2' => 162, 'oehddiscdate3' => 163, 'oehddiscpct3' => 164, 'oehdduedate3' => 165, 'oehddueamt3' => 166, 'oehdduepct3' => 167, 'oehddiscdate4' => 168, 'oehddiscpct4' => 169, 'oehdduedate4' => 170, 'oehddueamt4' => 171, 'oehdduepct4' => 172, 'oehddiscdate5' => 173, 'oehddiscpct5' => 174, 'oehdduedate5' => 175, 'oehddueamt5' => 176, 'oehdduepct5' => 177, 'oehddiscdate6' => 178, 'oehddiscpct6' => 179, 'oehdduedate6' => 180, 'oehddueamt6' => 181, 'oehdduepct6' => 182, 'dateupdtd' => 183, 'timeupdtd' => 184, 'dummy' => 185, ),
        self::TYPE_COLNAME       => array(SoHeaderTableMap::COL_OEHDNBR => 0, SoHeaderTableMap::COL_OEHDSTAT => 1, SoHeaderTableMap::COL_OEHDHOLD => 2, SoHeaderTableMap::COL_ARCUCUSTID => 3, SoHeaderTableMap::COL_ARSTSHIPID => 4, SoHeaderTableMap::COL_OEHDSTNAME => 5, SoHeaderTableMap::COL_OEHDSTLASTNAME => 6, SoHeaderTableMap::COL_OEHDSTFIRSTNAME => 7, SoHeaderTableMap::COL_OEHDSTADR1 => 8, SoHeaderTableMap::COL_OEHDSTADR2 => 9, SoHeaderTableMap::COL_OEHDSTADR3 => 10, SoHeaderTableMap::COL_OEHDSTCTRY => 11, SoHeaderTableMap::COL_OEHDSTCITY => 12, SoHeaderTableMap::COL_OEHDSTSTAT => 13, SoHeaderTableMap::COL_OEHDSTZIPCODE => 14, SoHeaderTableMap::COL_OEHDCUSTPO => 15, SoHeaderTableMap::COL_OEHDORDRDATE => 16, SoHeaderTableMap::COL_ARTMTERMCD => 17, SoHeaderTableMap::COL_ARTBSHIPVIA => 18, SoHeaderTableMap::COL_ARININVNBR => 19, SoHeaderTableMap::COL_OEHDINVDATE => 20, SoHeaderTableMap::COL_OEHDGLPD => 21, SoHeaderTableMap::COL_ARSPSALEPER1 => 22, SoHeaderTableMap::COL_OEHDSP1PCT => 23, SoHeaderTableMap::COL_ARSPSALEPER2 => 24, SoHeaderTableMap::COL_OEHDSP2PCT => 25, SoHeaderTableMap::COL_ARSPSALEPER3 => 26, SoHeaderTableMap::COL_OEHDSP3PCT => 27, SoHeaderTableMap::COL_OEHDCNTRNBR => 28, SoHeaderTableMap::COL_OEHDWIBATCH => 29, SoHeaderTableMap::COL_OEHDDROPRELHOLD => 30, SoHeaderTableMap::COL_OEHDTAXSUB => 31, SoHeaderTableMap::COL_OEHDNONTAXSUB => 32, SoHeaderTableMap::COL_OEHDTAXTOT => 33, SoHeaderTableMap::COL_OEHDFRTTOT => 34, SoHeaderTableMap::COL_OEHDMISCTOT => 35, SoHeaderTableMap::COL_OEHDORDRTOT => 36, SoHeaderTableMap::COL_OEHDCOSTTOT => 37, SoHeaderTableMap::COL_OEHDSPCOMMLOCK => 38, SoHeaderTableMap::COL_OEHDTAKENDATE => 39, SoHeaderTableMap::COL_OEHDTAKENTIME => 40, SoHeaderTableMap::COL_OEHDPICKDATE => 41, SoHeaderTableMap::COL_OEHDPICKTIME => 42, SoHeaderTableMap::COL_OEHDPACKDATE => 43, SoHeaderTableMap::COL_OEHDPACKTIME => 44, SoHeaderTableMap::COL_OEHDVERIFYDATE => 45, SoHeaderTableMap::COL_OEHDVERIFYTIME => 46, SoHeaderTableMap::COL_OEHDCREDITMEMO => 47, SoHeaderTableMap::COL_OEHDBOOKEDYN => 48, SoHeaderTableMap::COL_INTBWHSEORIG => 49, SoHeaderTableMap::COL_OEHDBTSTAT => 50, SoHeaderTableMap::COL_OEHDSHIPCOMP => 51, SoHeaderTableMap::COL_OEHDCWOFLAG => 52, SoHeaderTableMap::COL_OEHDDIVISION => 53, SoHeaderTableMap::COL_OEHDTAKENCODE => 54, SoHeaderTableMap::COL_OEHDPICKCODE => 55, SoHeaderTableMap::COL_OEHDPACKCODE => 56, SoHeaderTableMap::COL_OEHDVERIFYCODE => 57, SoHeaderTableMap::COL_OEHDTOTDISC => 58, SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL => 59, SoHeaderTableMap::COL_OEHDUSERCODE1 => 60, SoHeaderTableMap::COL_OEHDUSERCODE2 => 61, SoHeaderTableMap::COL_OEHDUSERCODE3 => 62, SoHeaderTableMap::COL_OEHDUSERCODE4 => 63, SoHeaderTableMap::COL_OEHDEXCHCTRY => 64, SoHeaderTableMap::COL_OEHDEXCHRATE => 65, SoHeaderTableMap::COL_OEHDWGHTTOT => 66, SoHeaderTableMap::COL_OEHDWGHTORIDE => 67, SoHeaderTableMap::COL_OEHDCCINFO => 68, SoHeaderTableMap::COL_OEHDBOXCOUNT => 69, SoHeaderTableMap::COL_OEHDRQSTDATE => 70, SoHeaderTableMap::COL_OEHDCANCDATE => 71, SoHeaderTableMap::COL_OEHDCRNTUSER => 72, SoHeaderTableMap::COL_OEHDRELEASENBR => 73, SoHeaderTableMap::COL_INTBWHSE => 74, SoHeaderTableMap::COL_OEHDBORDBUILDDATE => 75, SoHeaderTableMap::COL_OEHDDEPTCODE => 76, SoHeaderTableMap::COL_OEHDFRTINENTERED => 77, SoHeaderTableMap::COL_OEHDDROPSHIPENTERED => 78, SoHeaderTableMap::COL_OEHDERFLAG => 79, SoHeaderTableMap::COL_OEHDFRTIN => 80, SoHeaderTableMap::COL_OEHDDROPSHIP => 81, SoHeaderTableMap::COL_OEHDMINORDER => 82, SoHeaderTableMap::COL_OEHDCONTRACTTERMS => 83, SoHeaderTableMap::COL_OEHDDROPSHIPBILLED => 84, SoHeaderTableMap::COL_OEHDORDTYP => 85, SoHeaderTableMap::COL_OEHDTRACKNBR => 86, SoHeaderTableMap::COL_OEHDSOURCE => 87, SoHeaderTableMap::COL_OEHDCCAPRV => 88, SoHeaderTableMap::COL_OEHDPICKFMATTYPE => 89, SoHeaderTableMap::COL_OEHDINVCFMATTYPE => 90, SoHeaderTableMap::COL_OEHDCASHAMT => 91, SoHeaderTableMap::COL_OEHDCHECKAMT => 92, SoHeaderTableMap::COL_OEHDCHECKNBR => 93, SoHeaderTableMap::COL_OEHDDEPOSITAMT => 94, SoHeaderTableMap::COL_OEHDDEPOSITNBR => 95, SoHeaderTableMap::COL_OEHDCCAMT => 96, SoHeaderTableMap::COL_OEHDOTAXSUB => 97, SoHeaderTableMap::COL_OEHDONONTAXSUB => 98, SoHeaderTableMap::COL_OEHDOTAXTOT => 99, SoHeaderTableMap::COL_OEHDOORDRTOT => 100, SoHeaderTableMap::COL_OEHDPICKPRINTDATE => 101, SoHeaderTableMap::COL_OEHDPICKPRINTTIME => 102, SoHeaderTableMap::COL_OEHDCONT => 103, SoHeaderTableMap::COL_OEHDCONTTELEINTL => 104, SoHeaderTableMap::COL_OEHDCONTTELENBR => 105, SoHeaderTableMap::COL_OEHDCONTTELEEXT => 106, SoHeaderTableMap::COL_OEHDCONTFAXINTL => 107, SoHeaderTableMap::COL_OEHDCONTFAXNBR => 108, SoHeaderTableMap::COL_OEHDSHIPACCT => 109, SoHeaderTableMap::COL_OEHDCHGDUE => 110, SoHeaderTableMap::COL_OEHDADDLPRICDISC => 111, SoHeaderTableMap::COL_OEHDALLSHIP => 112, SoHeaderTableMap::COL_OEHDQTYORDERAMT => 113, SoHeaderTableMap::COL_OEHDCREDITAPPLIED => 114, SoHeaderTableMap::COL_OEHDINVCPRINTDATE => 115, SoHeaderTableMap::COL_OEHDINVCPRINTTIME => 116, SoHeaderTableMap::COL_OEHDDISCFRT => 117, SoHeaderTableMap::COL_OEHDORIDESHIPCOMP => 118, SoHeaderTableMap::COL_OEHDCONTEMAIL => 119, SoHeaderTableMap::COL_OEHDMANUALFRT => 120, SoHeaderTableMap::COL_OEHDINTERNALFRT => 121, SoHeaderTableMap::COL_OEHDFRTCOST => 122, SoHeaderTableMap::COL_OEHDROUTE => 123, SoHeaderTableMap::COL_OEHDROUTESEQ => 124, SoHeaderTableMap::COL_OEHDFRTTAXCODE1 => 125, SoHeaderTableMap::COL_OEHDFRTTAXAMT1 => 126, SoHeaderTableMap::COL_OEHDFRTTAXCODE2 => 127, SoHeaderTableMap::COL_OEHDFRTTAXAMT2 => 128, SoHeaderTableMap::COL_OEHDFRTTAXCODE3 => 129, SoHeaderTableMap::COL_OEHDFRTTAXAMT3 => 130, SoHeaderTableMap::COL_OEHDFRTTAXCODE4 => 131, SoHeaderTableMap::COL_OEHDFRTTAXAMT4 => 132, SoHeaderTableMap::COL_OEHDFRTTAXCODE5 => 133, SoHeaderTableMap::COL_OEHDFRTTAXAMT5 => 134, SoHeaderTableMap::COL_OEHDEDI855SENT => 135, SoHeaderTableMap::COL_OEHDFRT3RDPARTY => 136, SoHeaderTableMap::COL_OEHDFOB => 137, SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN => 138, SoHeaderTableMap::COL_OEHDINDUSTCONFORM => 139, SoHeaderTableMap::COL_OEHDCSTKCONSIGN => 140, SoHeaderTableMap::COL_OEHDLMDELAYCAPSENT => 141, SoHeaderTableMap::COL_OEHDMFGID => 142, SoHeaderTableMap::COL_OEHDSTOREID => 143, SoHeaderTableMap::COL_OEHDPICKQUEUE => 144, SoHeaderTableMap::COL_OEHDARRVDATE => 145, SoHeaderTableMap::COL_OEHDSURCHGSTAT => 146, SoHeaderTableMap::COL_OEHDFRTGRUP => 147, SoHeaderTableMap::COL_OEHDCOMMORIDE => 148, SoHeaderTableMap::COL_OEHDCHRGSPLT => 149, SoHeaderTableMap::COL_OEHDACCCAPRV => 150, SoHeaderTableMap::COL_OEHDORIGORDRNBR => 151, SoHeaderTableMap::COL_OEHDPOSTDATE => 152, SoHeaderTableMap::COL_OEHDDISCDATE1 => 153, SoHeaderTableMap::COL_OEHDDISCPCT1 => 154, SoHeaderTableMap::COL_OEHDDUEDATE1 => 155, SoHeaderTableMap::COL_OEHDDUEAMT1 => 156, SoHeaderTableMap::COL_OEHDDUEPCT1 => 157, SoHeaderTableMap::COL_OEHDDISCDATE2 => 158, SoHeaderTableMap::COL_OEHDDISCPCT2 => 159, SoHeaderTableMap::COL_OEHDDUEDATE2 => 160, SoHeaderTableMap::COL_OEHDDUEAMT2 => 161, SoHeaderTableMap::COL_OEHDDUEPCT2 => 162, SoHeaderTableMap::COL_OEHDDISCDATE3 => 163, SoHeaderTableMap::COL_OEHDDISCPCT3 => 164, SoHeaderTableMap::COL_OEHDDUEDATE3 => 165, SoHeaderTableMap::COL_OEHDDUEAMT3 => 166, SoHeaderTableMap::COL_OEHDDUEPCT3 => 167, SoHeaderTableMap::COL_OEHDDISCDATE4 => 168, SoHeaderTableMap::COL_OEHDDISCPCT4 => 169, SoHeaderTableMap::COL_OEHDDUEDATE4 => 170, SoHeaderTableMap::COL_OEHDDUEAMT4 => 171, SoHeaderTableMap::COL_OEHDDUEPCT4 => 172, SoHeaderTableMap::COL_OEHDDISCDATE5 => 173, SoHeaderTableMap::COL_OEHDDISCPCT5 => 174, SoHeaderTableMap::COL_OEHDDUEDATE5 => 175, SoHeaderTableMap::COL_OEHDDUEAMT5 => 176, SoHeaderTableMap::COL_OEHDDUEPCT5 => 177, SoHeaderTableMap::COL_OEHDDISCDATE6 => 178, SoHeaderTableMap::COL_OEHDDISCPCT6 => 179, SoHeaderTableMap::COL_OEHDDUEDATE6 => 180, SoHeaderTableMap::COL_OEHDDUEAMT6 => 181, SoHeaderTableMap::COL_OEHDDUEPCT6 => 182, SoHeaderTableMap::COL_DATEUPDTD => 183, SoHeaderTableMap::COL_TIMEUPDTD => 184, SoHeaderTableMap::COL_DUMMY => 185, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OehdStat' => 1, 'OehdHold' => 2, 'ArcuCustId' => 3, 'ArstShipId' => 4, 'OehdStName' => 5, 'OehdStLastName' => 6, 'OehdStFirstName' => 7, 'OehdStAdr1' => 8, 'OehdStAdr2' => 9, 'OehdStAdr3' => 10, 'OehdStCtry' => 11, 'OehdStCity' => 12, 'OehdStStat' => 13, 'OehdStZipCode' => 14, 'OehdCustPo' => 15, 'OehdOrdrDate' => 16, 'ArtmTermCd' => 17, 'ArtbShipVia' => 18, 'ArinInvNbr' => 19, 'OehdInvDate' => 20, 'OehdGLPd' => 21, 'ArspSalePer1' => 22, 'OehdSp1Pct' => 23, 'ArspSalePer2' => 24, 'OehdSp2Pct' => 25, 'ArspSalePer3' => 26, 'OehdSp3Pct' => 27, 'OehdCntrNbr' => 28, 'OehdWiBatch' => 29, 'OehdDropRelHold' => 30, 'OehdTaxSub' => 31, 'OehdNonTaxSub' => 32, 'OehdTaxTot' => 33, 'OehdFrtTot' => 34, 'OehdMiscTot' => 35, 'OehdOrdrTot' => 36, 'OehdCostTot' => 37, 'OehdSpCommLock' => 38, 'OehdTakenDate' => 39, 'OehdTakenTime' => 40, 'OehdPickDate' => 41, 'OehdPickTime' => 42, 'OehdPackDate' => 43, 'OehdPackTime' => 44, 'OehdVerifyDate' => 45, 'OehdVerifyTime' => 46, 'OehdCreditMemo' => 47, 'OehdBookedYn' => 48, 'IntbWhseOrig' => 49, 'OehdBtStat' => 50, 'OehdShipComp' => 51, 'OehdCwoFlag' => 52, 'OehdDivision' => 53, 'OehdTakenCode' => 54, 'OehdPickCode' => 55, 'OehdPackCode' => 56, 'OehdVerifyCode' => 57, 'OehdTotDisc' => 58, 'OehdEdiRefNbrQual' => 59, 'OehdUserCode1' => 60, 'OehdUserCode2' => 61, 'OehdUserCode3' => 62, 'OehdUserCode4' => 63, 'OehdExchCtry' => 64, 'OehdExchRate' => 65, 'OehdWghtTot' => 66, 'OehdWghtOride' => 67, 'OehdCcInfo' => 68, 'OehdBoxCount' => 69, 'OehdRqstDate' => 70, 'OehdCancDate' => 71, 'OehdCrntUser' => 72, 'OehdReleaseNbr' => 73, 'IntbWhse' => 74, 'OehdBordBuildDate' => 75, 'OehdDeptCode' => 76, 'OehdFrtInEntered' => 77, 'OehdDropShipEntered' => 78, 'OehdErFlag' => 79, 'OehdFrtIn' => 80, 'OehdDropShip' => 81, 'OehdMinOrder' => 82, 'OehdContractTerms' => 83, 'OehdDropShipBilled' => 84, 'OehdOrdTyp' => 85, 'OehdTrackNbr' => 86, 'OehdSource' => 87, 'OehdCcAprv' => 88, 'OehdPickFmatType' => 89, 'OehdInvcFmatType' => 90, 'OehdCashAmt' => 91, 'OehdCheckAmt' => 92, 'OehdCheckNbr' => 93, 'OehdDepositAmt' => 94, 'OehdDepositNbr' => 95, 'OehdCcAmt' => 96, 'OehdOTaxSub' => 97, 'OehdONonTaxSub' => 98, 'OehdOTaxTot' => 99, 'OehdOOrdrTot' => 100, 'OehdPickPrintDate' => 101, 'OehdPickPrintTime' => 102, 'OehdCont' => 103, 'OehdContTeleIntl' => 104, 'OehdContTeleNbr' => 105, 'OehdContTeleExt' => 106, 'OehdContFaxIntl' => 107, 'OehdContFaxNbr' => 108, 'OehdShipAcct' => 109, 'OehdChgDue' => 110, 'OehdAddlPricDisc' => 111, 'OehdAllShip' => 112, 'OehdQtyOrderAmt' => 113, 'OehdCreditApplied' => 114, 'OehdInvcPrintDate' => 115, 'OehdInvcPrintTime' => 116, 'OehdDiscFrt' => 117, 'OehdOrideShipComp' => 118, 'OehdContEmail' => 119, 'OehdManualFrt' => 120, 'OehdInternalFrt' => 121, 'OehdFrtCost' => 122, 'OehdRoute' => 123, 'OehdRouteSeq' => 124, 'OehdFrtTaxCode1' => 125, 'OehdFrtTaxAmt1' => 126, 'OehdFrtTaxCode2' => 127, 'OehdFrtTaxAmt2' => 128, 'OehdFrtTaxCode3' => 129, 'OehdFrtTaxAmt3' => 130, 'OehdFrtTaxCode4' => 131, 'OehdFrtTaxAmt4' => 132, 'OehdFrtTaxCode5' => 133, 'OehdFrtTaxAmt5' => 134, 'OehdEdi855Sent' => 135, 'OehdFrt3rdParty' => 136, 'OehdFob' => 137, 'OehdConfirmImagYn' => 138, 'OehdIndustConform' => 139, 'OehdCstkConsign' => 140, 'OehdLmDelayCapSent' => 141, 'OehdMfgId' => 142, 'OehdStoreId' => 143, 'OehdPickQueue' => 144, 'OehdArrvDate' => 145, 'OehdSurchgStat' => 146, 'OehdFrtGrup' => 147, 'OehdCommOride' => 148, 'OehdChrgSplt' => 149, 'OehdAcCcAprv' => 150, 'OehdOrigOrdrNbr' => 151, 'OehdPostDate' => 152, 'OehdDiscDate1' => 153, 'OehdDiscPct1' => 154, 'OehdDueDate1' => 155, 'OehdDueAmt1' => 156, 'OehdDuePct1' => 157, 'OehdDiscDate2' => 158, 'OehdDiscPct2' => 159, 'OehdDueDate2' => 160, 'OehdDueAmt2' => 161, 'OehdDuePct2' => 162, 'OehdDiscDate3' => 163, 'OehdDiscPct3' => 164, 'OehdDueDate3' => 165, 'OehdDueAmt3' => 166, 'OehdDuePct3' => 167, 'OehdDiscDate4' => 168, 'OehdDiscPct4' => 169, 'OehdDueDate4' => 170, 'OehdDueAmt4' => 171, 'OehdDuePct4' => 172, 'OehdDiscDate5' => 173, 'OehdDiscPct5' => 174, 'OehdDueDate5' => 175, 'OehdDueAmt5' => 176, 'OehdDuePct5' => 177, 'OehdDiscDate6' => 178, 'OehdDiscPct6' => 179, 'OehdDueDate6' => 180, 'OehdDueAmt6' => 181, 'OehdDuePct6' => 182, 'DateUpdtd' => 183, 'TimeUpdtd' => 184, 'dummy' => 185, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, )
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
        $this->setPhpName('SoHeader');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoHeader');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OehdNbr', 'Oehdnbr', 'VARCHAR', true, 10, null);
        $this->addColumn('OehdStat', 'Oehdstat', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdHold', 'Oehdhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCustId', 'Arcucustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstShipId', 'Arstshipid', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdStName', 'Oehdstname', 'VARCHAR', false, 30, null);
        $this->addColumn('OehdStLastName', 'Oehdstlastname', 'VARCHAR', false, 15, null);
        $this->addColumn('OehdStFirstName', 'Oehdstfirstname', 'VARCHAR', false, 14, null);
        $this->addColumn('OehdStAdr1', 'Oehdstadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('OehdStAdr2', 'Oehdstadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('OehdStAdr3', 'Oehdstadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('OehdStCtry', 'Oehdstctry', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdStCity', 'Oehdstcity', 'VARCHAR', false, 16, null);
        $this->addColumn('OehdStStat', 'Oehdststat', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdStZipCode', 'Oehdstzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdCustPo', 'Oehdcustpo', 'VARCHAR', false, 20, null);
        $this->addColumn('OehdOrdrDate', 'Oehdordrdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', false, 4, null);
        $this->addColumn('ArinInvNbr', 'Arininvnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdInvDate', 'Oehdinvdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdGLPd', 'Oehdglpd', 'INTEGER', false, 2, null);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdSp1Pct', 'Oehdsp1pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdSp2Pct', 'Oehdsp2pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdSp3Pct', 'Oehdsp3pct', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCntrNbr', 'Oehdcntrnbr', 'INTEGER', false, 8, null);
        $this->addColumn('OehdWiBatch', 'Oehdwibatch', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDropRelHold', 'Oehddroprelhold', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdTaxSub', 'Oehdtaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdNonTaxSub', 'Oehdnontaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdTaxTot', 'Oehdtaxtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTot', 'Oehdfrttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdMiscTot', 'Oehdmisctot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOrdrTot', 'Oehdordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCostTot', 'Oehdcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdSpCommLock', 'Oehdspcommlock', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdTakenDate', 'Oehdtakendate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdTakenTime', 'Oehdtakentime', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdPickDate', 'Oehdpickdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPickTime', 'Oehdpicktime', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdPackDate', 'Oehdpackdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPackTime', 'Oehdpacktime', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdVerifyDate', 'Oehdverifydate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdVerifyTime', 'Oehdverifytime', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdCreditMemo', 'Oehdcreditmemo', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdBookedYn', 'Oehdbookedyn', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbWhseOrig', 'Intbwhseorig', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdBtStat', 'Oehdbtstat', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdShipComp', 'Oehdshipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCwoFlag', 'Oehdcwoflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdDivision', 'Oehddivision', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdTakenCode', 'Oehdtakencode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPickCode', 'Oehdpickcode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPackCode', 'Oehdpackcode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdVerifyCode', 'Oehdverifycode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdTotDisc', 'Oehdtotdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdEdiRefNbrQual', 'Oehdedirefnbrqual', 'VARCHAR', false, 3, null);
        $this->addColumn('OehdUserCode1', 'Oehdusercode1', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode2', 'Oehdusercode2', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode3', 'Oehdusercode3', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode4', 'Oehdusercode4', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdExchCtry', 'Oehdexchctry', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdExchRate', 'Oehdexchrate', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdWghtTot', 'Oehdwghttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdWghtOride', 'Oehdwghtoride', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCcInfo', 'Oehdccinfo', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdBoxCount', 'Oehdboxcount', 'INTEGER', false, 5, null);
        $this->addColumn('OehdRqstDate', 'Oehdrqstdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdCancDate', 'Oehdcancdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdCrntUser', 'Oehdcrntuser', 'VARCHAR', false, 12, null);
        $this->addColumn('OehdReleaseNbr', 'Oehdreleasenbr', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdBordBuildDate', 'Oehdbordbuilddate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDeptCode', 'Oehddeptcode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdFrtInEntered', 'Oehdfrtinentered', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdDropShipEntered', 'Oehddropshipentered', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdErFlag', 'Oehderflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrtIn', 'Oehdfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDropShip', 'Oehddropship', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdMinOrder', 'Oehdminorder', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdContractTerms', 'Oehdcontractterms', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdDropShipBilled', 'Oehddropshipbilled', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdOrdTyp', 'Oehdordtyp', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdTrackNbr', 'Oehdtracknbr', 'VARCHAR', false, 15, null);
        $this->addColumn('OehdSource', 'Oehdsource', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCcAprv', 'Oehdccaprv', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdPickFmatType', 'Oehdpickfmattype', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdInvcFmatType', 'Oehdinvcfmattype', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCashAmt', 'Oehdcashamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCheckAmt', 'Oehdcheckamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCheckNbr', 'Oehdchecknbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDepositAmt', 'Oehddepositamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDepositNbr', 'Oehddepositnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdCcAmt', 'Oehdccamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOTaxSub', 'Oehdotaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdONonTaxSub', 'Oehdonontaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOTaxTot', 'Oehdotaxtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOOrdrTot', 'Oehdoordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdPickPrintDate', 'Oehdpickprintdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPickPrintTime', 'Oehdpickprinttime', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdCont', 'Oehdcont', 'VARCHAR', false, 20, null);
        $this->addColumn('OehdContTeleIntl', 'Oehdcontteleintl', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdContTeleNbr', 'Oehdconttelenbr', 'VARCHAR', false, 22, null);
        $this->addColumn('OehdContTeleExt', 'Oehdcontteleext', 'VARCHAR', false, 7, null);
        $this->addColumn('OehdContFaxIntl', 'Oehdcontfaxintl', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdContFaxNbr', 'Oehdcontfaxnbr', 'VARCHAR', false, 22, null);
        $this->addColumn('OehdShipAcct', 'Oehdshipacct', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdChgDue', 'Oehdchgdue', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdAddlPricDisc', 'Oehdaddlpricdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdAllShip', 'Oehdallship', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdQtyOrderAmt', 'Oehdqtyorderamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCreditApplied', 'Oehdcreditapplied', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdInvcPrintDate', 'Oehdinvcprintdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdInvcPrintTime', 'Oehdinvcprinttime', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdDiscFrt', 'Oehddiscfrt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOrideShipComp', 'Oehdorideshipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdContEmail', 'Oehdcontemail', 'VARCHAR', false, 50, null);
        $this->addColumn('OehdManualFrt', 'Oehdmanualfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdInternalFrt', 'Oehdinternalfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrtCost', 'Oehdfrtcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdRoute', 'Oehdroute', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdRouteSeq', 'Oehdrouteseq', 'INTEGER', false, 4, null);
        $this->addColumn('OehdFrtTaxCode1', 'Oehdfrttaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt1', 'Oehdfrttaxamt1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode2', 'Oehdfrttaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt2', 'Oehdfrttaxamt2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode3', 'Oehdfrttaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt3', 'Oehdfrttaxamt3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode4', 'Oehdfrttaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt4', 'Oehdfrttaxamt4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode5', 'Oehdfrttaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt5', 'Oehdfrttaxamt5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdEdi855Sent', 'Oehdedi855sent', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrt3rdParty', 'Oehdfrt3rdparty', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFob', 'Oehdfob', 'VARCHAR', false, 15, null);
        $this->addColumn('OehdConfirmImagYn', 'Oehdconfirmimagyn', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdIndustConform', 'Oehdindustconform', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCstkConsign', 'Oehdcstkconsign', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdLmDelayCapSent', 'Oehdlmdelaycapsent', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdMfgId', 'Oehdmfgid', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdStoreId', 'Oehdstoreid', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdPickQueue', 'Oehdpickqueue', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdArrvDate', 'Oehdarrvdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdSurchgStat', 'Oehdsurchgstat', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrtGrup', 'Oehdfrtgrup', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdCommOride', 'Oehdcommoride', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdChrgSplt', 'Oehdchrgsplt', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdAcCcAprv', 'Oehdacccaprv', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdOrigOrdrNbr', 'Oehdorigordrnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdPostDate', 'Oehdpostdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscDate1', 'Oehddiscdate1', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscPct1', 'Oehddiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate1', 'Oehdduedate1', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDueAmt1', 'Oehddueamt1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct1', 'Oehdduepct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate2', 'Oehddiscdate2', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscPct2', 'Oehddiscpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate2', 'Oehdduedate2', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDueAmt2', 'Oehddueamt2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct2', 'Oehdduepct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate3', 'Oehddiscdate3', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscPct3', 'Oehddiscpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate3', 'Oehdduedate3', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDueAmt3', 'Oehddueamt3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct3', 'Oehdduepct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate4', 'Oehddiscdate4', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscPct4', 'Oehddiscpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate4', 'Oehdduedate4', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDueAmt4', 'Oehddueamt4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct4', 'Oehdduepct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate5', 'Oehddiscdate5', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscPct5', 'Oehddiscpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate5', 'Oehdduedate5', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDueAmt5', 'Oehddueamt5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct5', 'Oehdduepct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate6', 'Oehddiscdate6', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDiscPct6', 'Oehddiscpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate6', 'Oehdduedate6', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDueAmt6', 'Oehddueamt6', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct6', 'Oehdduepct6', 'DECIMAL', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        return (string) $row[
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
        return $withPrefix ? SoHeaderTableMap::CLASS_DEFAULT : SoHeaderTableMap::OM_CLASS;
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
     * @return array           (SoHeader object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoHeaderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoHeaderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoHeaderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoHeaderTableMap::OM_CLASS;
            /** @var SoHeader $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoHeaderTableMap::addInstanceToPool($obj, $key);
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
            $key = SoHeaderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoHeaderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoHeader $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoHeaderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDHOLD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTNAME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTLASTNAME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTFIRSTNAME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTADR1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTADR2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTADR3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTCTRY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTCITY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTZIPCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCUSTPO);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORDRDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARININVNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINVDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDGLPD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSP1PCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSP2PCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSP3PCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCNTRNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDWIBATCH);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPRELHOLD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDNONTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAXTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMISCTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORDRTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCOSTTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSPCOMMLOCK);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAKENDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAKENTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPACKDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPACKTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDVERIFYDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDVERIFYTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCREDITMEMO);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBOOKEDYN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_INTBWHSEORIG);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBTSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSHIPCOMP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCWOFLAG);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDIVISION);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAKENCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPACKCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDVERIFYCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTOTDISC);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEXCHCTRY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEXCHRATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDWGHTTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDWGHTORIDE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCCINFO);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBOXCOUNT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDRQSTDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCANCDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCRNTUSER);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDRELEASENBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBORDBUILDDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDEPTCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTINENTERED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPSHIPENTERED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDERFLAG);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTIN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPSHIP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMINORDER);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTRACTTERMS);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPSHIPBILLED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORDTYP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTRACKNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSOURCE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCCAPRV);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKFMATTYPE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINVCFMATTYPE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCASHAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHECKAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHECKNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDEPOSITAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDEPOSITNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCCAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDOTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDONONTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDOTAXTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDOORDRTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKPRINTDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKPRINTTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTTELEINTL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTTELENBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTTELEEXT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTFAXINTL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTFAXNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSHIPACCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHGDUE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDADDLPRICDISC);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDALLSHIP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQTYORDERAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCREDITAPPLIED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINVCPRINTDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINVCPRINTTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCFRT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORIDESHIPCOMP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTEMAIL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMANUALFRT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINTERNALFRT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTCOST);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDROUTE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDROUTESEQ);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEDI855SENT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRT3RDPARTY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFOB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINDUSTCONFORM);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCSTKCONSIGN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDLMDELAYCAPSENT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMFGID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTOREID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKQUEUE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDARRVDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSURCHGSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTGRUP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCOMMORIDE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHRGSPLT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDACCCAPRV);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORIGORDRNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPOSTDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE6);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT6);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE6);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT6);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT6);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_DUMMY);
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
        return Propel::getServiceContainer()->getDatabaseMap(SoHeaderTableMap::DATABASE_NAME)->getTable(SoHeaderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoHeaderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoHeaderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoHeaderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoHeader or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoHeader object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoHeader) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoHeaderTableMap::DATABASE_NAME);
            $criteria->add(SoHeaderTableMap::COL_OEHDNBR, (array) $values, Criteria::IN);
        }

        $query = SoHeaderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoHeaderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoHeaderTableMap::removeInstanceFromPool($singleval);
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
        return SoHeaderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoHeader or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoHeader object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoHeader object
        }


        // Set the correct dbName
        $query = SoHeaderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoHeaderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoHeaderTableMap::buildTableMap();
