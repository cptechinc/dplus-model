<?php

namespace Map;

use \SalesHistoryDetail;
use \SalesHistoryDetailQuery;
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
 * This class defines the structure of the 'so_det_hist' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesHistoryDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesHistoryDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_det_hist';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesHistoryDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesHistoryDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 147;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 147;

    /**
     * the column name for the OehhNbr field
     */
    const COL_OEHHNBR = 'so_det_hist.OehhNbr';

    /**
     * the column name for the OedhLine field
     */
    const COL_OEDHLINE = 'so_det_hist.OedhLine';

    /**
     * the column name for the OedhYear field
     */
    const COL_OEDHYEAR = 'so_det_hist.OedhYear';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_det_hist.InitItemNbr';

    /**
     * the column name for the OedhDesc field
     */
    const COL_OEDHDESC = 'so_det_hist.OedhDesc';

    /**
     * the column name for the OedhDesc2 field
     */
    const COL_OEDHDESC2 = 'so_det_hist.OedhDesc2';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'so_det_hist.IntbWhse';

    /**
     * the column name for the OedhRqstDate field
     */
    const COL_OEDHRQSTDATE = 'so_det_hist.OedhRqstDate';

    /**
     * the column name for the OedhCancDate field
     */
    const COL_OEDHCANCDATE = 'so_det_hist.OedhCancDate';

    /**
     * the column name for the OedhShipDate field
     */
    const COL_OEDHSHIPDATE = 'so_det_hist.OedhShipDate';

    /**
     * the column name for the OedhSpecOrdr field
     */
    const COL_OEDHSPECORDR = 'so_det_hist.OedhSpecOrdr';

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'so_det_hist.ArtbMtaxCode';

    /**
     * the column name for the OedhQtyOrd field
     */
    const COL_OEDHQTYORD = 'so_det_hist.OedhQtyOrd';

    /**
     * the column name for the OedhQtyShip field
     */
    const COL_OEDHQTYSHIP = 'so_det_hist.OedhQtyShip';

    /**
     * the column name for the OedhQtyShipTot field
     */
    const COL_OEDHQTYSHIPTOT = 'so_det_hist.OedhQtyShipTot';

    /**
     * the column name for the OedhQtyBord field
     */
    const COL_OEDHQTYBORD = 'so_det_hist.OedhQtyBord';

    /**
     * the column name for the OedhPric field
     */
    const COL_OEDHPRIC = 'so_det_hist.OedhPric';

    /**
     * the column name for the OedhCost field
     */
    const COL_OEDHCOST = 'so_det_hist.OedhCost';

    /**
     * the column name for the OedhTaxPctTot field
     */
    const COL_OEDHTAXPCTTOT = 'so_det_hist.OedhTaxPctTot';

    /**
     * the column name for the OedhPricTot field
     */
    const COL_OEDHPRICTOT = 'so_det_hist.OedhPricTot';

    /**
     * the column name for the OedhCostTot field
     */
    const COL_OEDHCOSTTOT = 'so_det_hist.OedhCostTot';

    /**
     * the column name for the OedhSpCommPct field
     */
    const COL_OEDHSPCOMMPCT = 'so_det_hist.OedhSpCommPct';

    /**
     * the column name for the OedhBrknCaseQty field
     */
    const COL_OEDHBRKNCASEQTY = 'so_det_hist.OedhBrknCaseQty';

    /**
     * the column name for the OedhBin field
     */
    const COL_OEDHBIN = 'so_det_hist.OedhBin';

    /**
     * the column name for the OedhPersonalCd field
     */
    const COL_OEDHPERSONALCD = 'so_det_hist.OedhPersonalCd';

    /**
     * the column name for the OedhAcDisc1 field
     */
    const COL_OEDHACDISC1 = 'so_det_hist.OedhAcDisc1';

    /**
     * the column name for the OedhAcDisc2 field
     */
    const COL_OEDHACDISC2 = 'so_det_hist.OedhAcDisc2';

    /**
     * the column name for the OedhAcDisc3 field
     */
    const COL_OEDHACDISC3 = 'so_det_hist.OedhAcDisc3';

    /**
     * the column name for the OedhAcDisc4 field
     */
    const COL_OEDHACDISC4 = 'so_det_hist.OedhAcDisc4';

    /**
     * the column name for the OedhLmWipNbr field
     */
    const COL_OEDHLMWIPNBR = 'so_det_hist.OedhLmWipNbr';

    /**
     * the column name for the OedhCorePric field
     */
    const COL_OEDHCOREPRIC = 'so_det_hist.OedhCorePric';

    /**
     * the column name for the OedhAsstCode field
     */
    const COL_OEDHASSTCODE = 'so_det_hist.OedhAsstCode';

    /**
     * the column name for the OedhAsstQty field
     */
    const COL_OEDHASSTQTY = 'so_det_hist.OedhAsstQty';

    /**
     * the column name for the OedhListPric field
     */
    const COL_OEDHLISTPRIC = 'so_det_hist.OedhListPric';

    /**
     * the column name for the OedhStanCost field
     */
    const COL_OEDHSTANCOST = 'so_det_hist.OedhStanCost';

    /**
     * the column name for the OedhVendItemJob field
     */
    const COL_OEDHVENDITEMJOB = 'so_det_hist.OedhVendItemJob';

    /**
     * the column name for the OedhNsVendId field
     */
    const COL_OEDHNSVENDID = 'so_det_hist.OedhNsVendId';

    /**
     * the column name for the OedhNsItemGrup field
     */
    const COL_OEDHNSITEMGRUP = 'so_det_hist.OedhNsItemGrup';

    /**
     * the column name for the OedhUseCode field
     */
    const COL_OEDHUSECODE = 'so_det_hist.OedhUseCode';

    /**
     * the column name for the OedhNsShipFromId field
     */
    const COL_OEDHNSSHIPFROMID = 'so_det_hist.OedhNsShipFromId';

    /**
     * the column name for the OedhAsstOvrd field
     */
    const COL_OEDHASSTOVRD = 'so_det_hist.OedhAsstOvrd';

    /**
     * the column name for the OedhPricOvrd field
     */
    const COL_OEDHPRICOVRD = 'so_det_hist.OedhPricOvrd';

    /**
     * the column name for the OedhPickFlag field
     */
    const COL_OEDHPICKFLAG = 'so_det_hist.OedhPickFlag';

    /**
     * the column name for the OedhMstrTaxCode1 field
     */
    const COL_OEDHMSTRTAXCODE1 = 'so_det_hist.OedhMstrTaxCode1';

    /**
     * the column name for the OedhMstrTaxPct1 field
     */
    const COL_OEDHMSTRTAXPCT1 = 'so_det_hist.OedhMstrTaxPct1';

    /**
     * the column name for the OedhMstrTaxCode2 field
     */
    const COL_OEDHMSTRTAXCODE2 = 'so_det_hist.OedhMstrTaxCode2';

    /**
     * the column name for the OedhMstrTaxPct2 field
     */
    const COL_OEDHMSTRTAXPCT2 = 'so_det_hist.OedhMstrTaxPct2';

    /**
     * the column name for the OedhMstrTaxCode3 field
     */
    const COL_OEDHMSTRTAXCODE3 = 'so_det_hist.OedhMstrTaxCode3';

    /**
     * the column name for the OedhMstrTaxPct3 field
     */
    const COL_OEDHMSTRTAXPCT3 = 'so_det_hist.OedhMstrTaxPct3';

    /**
     * the column name for the OedhMstrTaxCode4 field
     */
    const COL_OEDHMSTRTAXCODE4 = 'so_det_hist.OedhMstrTaxCode4';

    /**
     * the column name for the OedhMstrTaxPct4 field
     */
    const COL_OEDHMSTRTAXPCT4 = 'so_det_hist.OedhMstrTaxPct4';

    /**
     * the column name for the OedhMstrTaxCode5 field
     */
    const COL_OEDHMSTRTAXCODE5 = 'so_det_hist.OedhMstrTaxCode5';

    /**
     * the column name for the OedhMstrTaxPct5 field
     */
    const COL_OEDHMSTRTAXPCT5 = 'so_det_hist.OedhMstrTaxPct5';

    /**
     * the column name for the OedhMstrTaxCode6 field
     */
    const COL_OEDHMSTRTAXCODE6 = 'so_det_hist.OedhMstrTaxCode6';

    /**
     * the column name for the OedhMstrTaxPct6 field
     */
    const COL_OEDHMSTRTAXPCT6 = 'so_det_hist.OedhMstrTaxPct6';

    /**
     * the column name for the OedhMstrTaxCode7 field
     */
    const COL_OEDHMSTRTAXCODE7 = 'so_det_hist.OedhMstrTaxCode7';

    /**
     * the column name for the OedhMstrTaxPct7 field
     */
    const COL_OEDHMSTRTAXPCT7 = 'so_det_hist.OedhMstrTaxPct7';

    /**
     * the column name for the OedhMstrTaxCode8 field
     */
    const COL_OEDHMSTRTAXCODE8 = 'so_det_hist.OedhMstrTaxCode8';

    /**
     * the column name for the OedhMstrTaxPct8 field
     */
    const COL_OEDHMSTRTAXPCT8 = 'so_det_hist.OedhMstrTaxPct8';

    /**
     * the column name for the OedhMstrTaxCode9 field
     */
    const COL_OEDHMSTRTAXCODE9 = 'so_det_hist.OedhMstrTaxCode9';

    /**
     * the column name for the OedhMstrTaxPct9 field
     */
    const COL_OEDHMSTRTAXPCT9 = 'so_det_hist.OedhMstrTaxPct9';

    /**
     * the column name for the OedhBinArea field
     */
    const COL_OEDHBINAREA = 'so_det_hist.OedhBinArea';

    /**
     * the column name for the OedhSplitLine field
     */
    const COL_OEDHSPLITLINE = 'so_det_hist.OedhSplitLine';

    /**
     * the column name for the OedhLostReas field
     */
    const COL_OEDHLOSTREAS = 'so_det_hist.OedhLostReas';

    /**
     * the column name for the OedhOrigLine field
     */
    const COL_OEDHORIGLINE = 'so_det_hist.OedhOrigLine';

    /**
     * the column name for the OedhCustCrssRef field
     */
    const COL_OEDHCUSTCRSSREF = 'so_det_hist.OedhCustCrssRef';

    /**
     * the column name for the OedhUom field
     */
    const COL_OEDHUOM = 'so_det_hist.OedhUom';

    /**
     * the column name for the OedhShipFlag field
     */
    const COL_OEDHSHIPFLAG = 'so_det_hist.OedhShipFlag';

    /**
     * the column name for the OedhKitFlag field
     */
    const COL_OEDHKITFLAG = 'so_det_hist.OedhKitFlag';

    /**
     * the column name for the OedhKitItemNbr field
     */
    const COL_OEDHKITITEMNBR = 'so_det_hist.OedhKitItemNbr';

    /**
     * the column name for the OedhBfCost field
     */
    const COL_OEDHBFCOST = 'so_det_hist.OedhBfCost';

    /**
     * the column name for the OedhBfMsgCode field
     */
    const COL_OEDHBFMSGCODE = 'so_det_hist.OedhBfMsgCode';

    /**
     * the column name for the OedhBfCostTot field
     */
    const COL_OEDHBFCOSTTOT = 'so_det_hist.OedhBfCostTot';

    /**
     * the column name for the OedhLmBulkPric field
     */
    const COL_OEDHLMBULKPRIC = 'so_det_hist.OedhLmBulkPric';

    /**
     * the column name for the OedhLmMtrxPkgPric field
     */
    const COL_OEDHLMMTRXPKGPRIC = 'so_det_hist.OedhLmMtrxPkgPric';

    /**
     * the column name for the OedhLmMtrxBulkPric field
     */
    const COL_OEDHLMMTRXBULKPRIC = 'so_det_hist.OedhLmMtrxBulkPric';

    /**
     * the column name for the OedhLmContractPric field
     */
    const COL_OEDHLMCONTRACTPRIC = 'so_det_hist.OedhLmContractPric';

    /**
     * the column name for the OedhWghtTot field
     */
    const COL_OEDHWGHTTOT = 'so_det_hist.OedhWghtTot';

    /**
     * the column name for the OedhOrdrAs field
     */
    const COL_OEDHORDRAS = 'so_det_hist.OedhOrdrAs';

    /**
     * the column name for the OedhPoDetLineNbr field
     */
    const COL_OEDHPODETLINENBR = 'so_det_hist.OedhPoDetLineNbr';

    /**
     * the column name for the OedhQtyToShip field
     */
    const COL_OEDHQTYTOSHIP = 'so_det_hist.OedhQtyToShip';

    /**
     * the column name for the OedhPoNbr field
     */
    const COL_OEDHPONBR = 'so_det_hist.OedhPoNbr';

    /**
     * the column name for the OedhPoRef field
     */
    const COL_OEDHPOREF = 'so_det_hist.OedhPoRef';

    /**
     * the column name for the OedhFrtIn field
     */
    const COL_OEDHFRTIN = 'so_det_hist.OedhFrtIn';

    /**
     * the column name for the OedhFrtInEntered field
     */
    const COL_OEDHFRTINENTERED = 'so_det_hist.OedhFrtInEntered';

    /**
     * the column name for the OedhProdCmplt field
     */
    const COL_OEDHPRODCMPLT = 'so_det_hist.OedhProdCmplt';

    /**
     * the column name for the OedhErFlag field
     */
    const COL_OEDHERFLAG = 'so_det_hist.OedhErFlag';

    /**
     * the column name for the OedhOrigItem field
     */
    const COL_OEDHORIGITEM = 'so_det_hist.OedhOrigItem';

    /**
     * the column name for the OedhSubFlag field
     */
    const COL_OEDHSUBFLAG = 'so_det_hist.OedhSubFlag';

    /**
     * the column name for the OedhEdiIncomingSeq field
     */
    const COL_OEDHEDIINCOMINGSEQ = 'so_det_hist.OedhEdiIncomingSeq';

    /**
     * the column name for the OedhSpordPoLine field
     */
    const COL_OEDHSPORDPOLINE = 'so_det_hist.OedhSpordPoLine';

    /**
     * the column name for the OedhCatlgId field
     */
    const COL_OEDHCATLGID = 'so_det_hist.OedhCatlgId';

    /**
     * the column name for the OedhDesignCd field
     */
    const COL_OEDHDESIGNCD = 'so_det_hist.OedhDesignCd';

    /**
     * the column name for the OedhDiscPct field
     */
    const COL_OEDHDISCPCT = 'so_det_hist.OedhDiscPct';

    /**
     * the column name for the OedhTaxAmt field
     */
    const COL_OEDHTAXAMT = 'so_det_hist.OedhTaxAmt';

    /**
     * the column name for the OedhXUsage field
     */
    const COL_OEDHXUSAGE = 'so_det_hist.OedhXUsage';

    /**
     * the column name for the OedhRqtsLock field
     */
    const COL_OEDHRQTSLOCK = 'so_det_hist.OedhRqtsLock';

    /**
     * the column name for the OedhFreshFrozen field
     */
    const COL_OEDHFRESHFROZEN = 'so_det_hist.OedhFreshFrozen';

    /**
     * the column name for the OedhCoreFlag field
     */
    const COL_OEDHCOREFLAG = 'so_det_hist.OedhCoreFlag';

    /**
     * the column name for the OedhNsSalesAcct field
     */
    const COL_OEDHNSSALESACCT = 'so_det_hist.OedhNsSalesAcct';

    /**
     * the column name for the OedhCertReqd field
     */
    const COL_OEDHCERTREQD = 'so_det_hist.OedhCertReqd';

    /**
     * the column name for the OedhAddOnSales field
     */
    const COL_OEDHADDONSALES = 'so_det_hist.OedhAddOnSales';

    /**
     * the column name for the OedhBordFlag field
     */
    const COL_OEDHBORDFLAG = 'so_det_hist.OedhBordFlag';

    /**
     * the column name for the OedhTempGrove field
     */
    const COL_OEDHTEMPGROVE = 'so_det_hist.OedhTempGrove';

    /**
     * the column name for the OedhGroveDisc field
     */
    const COL_OEDHGROVEDISC = 'so_det_hist.OedhGroveDisc';

    /**
     * the column name for the OedhOffInvc field
     */
    const COL_OEDHOFFINVC = 'so_det_hist.OedhOffInvc';

    /**
     * the column name for the InitItemGrup field
     */
    const COL_INITITEMGRUP = 'so_det_hist.InitItemGrup';

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'so_det_hist.ApveVendId';

    /**
     * the column name for the OedhAcct field
     */
    const COL_OEDHACCT = 'so_det_hist.OedhAcct';

    /**
     * the column name for the OedhLoadTot field
     */
    const COL_OEDHLOADTOT = 'so_det_hist.OedhLoadTot';

    /**
     * the column name for the OedhPickedQty field
     */
    const COL_OEDHPICKEDQTY = 'so_det_hist.OedhPickedQty';

    /**
     * the column name for the OedhWiOrigQty field
     */
    const COL_OEDHWIORIGQTY = 'so_det_hist.OedhWiOrigQty';

    /**
     * the column name for the OedhMarginTot field
     */
    const COL_OEDHMARGINTOT = 'so_det_hist.OedhMarginTot';

    /**
     * the column name for the OedhCoreCost field
     */
    const COL_OEDHCORECOST = 'so_det_hist.OedhCoreCost';

    /**
     * the column name for the OedhItemRef field
     */
    const COL_OEDHITEMREF = 'so_det_hist.OedhItemRef';

    /**
     * the column name for the OedhSac02ReturnCode field
     */
    const COL_OEDHSAC02RETURNCODE = 'so_det_hist.OedhSac02ReturnCode';

    /**
     * the column name for the OedhWgTaxCode field
     */
    const COL_OEDHWGTAXCODE = 'so_det_hist.OedhWgTaxCode';

    /**
     * the column name for the OedhWgPrice field
     */
    const COL_OEDHWGPRICE = 'so_det_hist.OedhWgPrice';

    /**
     * the column name for the OedhWgTot field
     */
    const COL_OEDHWGTOT = 'so_det_hist.OedhWgTot';

    /**
     * the column name for the OedhCntrQty field
     */
    const COL_OEDHCNTRQTY = 'so_det_hist.OedhCntrQty';

    /**
     * the column name for the OedhConfirmCode field
     */
    const COL_OEDHCONFIRMCODE = 'so_det_hist.OedhConfirmCode';

    /**
     * the column name for the OedhPicked field
     */
    const COL_OEDHPICKED = 'so_det_hist.OedhPicked';

    /**
     * the column name for the OedhOrigRqstDate field
     */
    const COL_OEDHORIGRQSTDATE = 'so_det_hist.OedhOrigRqstDate';

    /**
     * the column name for the OedhFabLock field
     */
    const COL_OEDHFABLOCK = 'so_det_hist.OedhFabLock';

    /**
     * the column name for the OedhLabelPrinted field
     */
    const COL_OEDHLABELPRINTED = 'so_det_hist.OedhLabelPrinted';

    /**
     * the column name for the OedhQuoteId field
     */
    const COL_OEDHQUOTEID = 'so_det_hist.OedhQuoteId';

    /**
     * the column name for the OedhInvPrinted field
     */
    const COL_OEDHINVPRINTED = 'so_det_hist.OedhInvPrinted';

    /**
     * the column name for the OedtStockCheck field
     */
    const COL_OEDTSTOCKCHECK = 'so_det_hist.OedtStockCheck';

    /**
     * the column name for the OedhShouldWeSplit field
     */
    const COL_OEDHSHOULDWESPLIT = 'so_det_hist.OedhShouldWeSplit';

    /**
     * the column name for the OedhCofcReqd field
     */
    const COL_OEDHCOFCREQD = 'so_det_hist.OedhCofcReqd';

    /**
     * the column name for the OedhAckCode field
     */
    const COL_OEDHACKCODE = 'so_det_hist.OedhAckCode';

    /**
     * the column name for the OedhWiBordNbr field
     */
    const COL_OEDHWIBORDNBR = 'so_det_hist.OedhWiBordNbr';

    /**
     * the column name for the OedhCertHistOrdr field
     */
    const COL_OEDHCERTHISTORDR = 'so_det_hist.OedhCertHistOrdr';

    /**
     * the column name for the OedhCertHistLine field
     */
    const COL_OEDHCERTHISTLINE = 'so_det_hist.OedhCertHistLine';

    /**
     * the column name for the OedhOrdrdAsItemId field
     */
    const COL_OEDHORDRDASITEMID = 'so_det_hist.OedhOrdrdAsItemId';

    /**
     * the column name for the OedhWiBatch1Nbr field
     */
    const COL_OEDHWIBATCH1NBR = 'so_det_hist.OedhWiBatch1Nbr';

    /**
     * the column name for the OedhWiBatch1Qty field
     */
    const COL_OEDHWIBATCH1QTY = 'so_det_hist.OedhWiBatch1Qty';

    /**
     * the column name for the OedhWiBatch1Stat field
     */
    const COL_OEDHWIBATCH1STAT = 'so_det_hist.OedhWiBatch1Stat';

    /**
     * the column name for the OedhRgaNbr field
     */
    const COL_OEDHRGANBR = 'so_det_hist.OedhRgaNbr';

    /**
     * the column name for the OedhOrigPric field
     */
    const COL_OEDHORIGPRIC = 'so_det_hist.OedhOrigPric';

    /**
     * the column name for the OedhRefLineNbr field
     */
    const COL_OEDHREFLINENBR = 'so_det_hist.OedhRefLineNbr';

    /**
     * the column name for the OedhBinLocn field
     */
    const COL_OEDHBINLOCN = 'so_det_hist.OedhBinLocn';

    /**
     * the column name for the OedhAcSuplyWhse field
     */
    const COL_OEDHACSUPLYWHSE = 'so_det_hist.OedhAcSuplyWhse';

    /**
     * the column name for the OedhAcPricDate field
     */
    const COL_OEDHACPRICDATE = 'so_det_hist.OedhAcPricDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_det_hist.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_det_hist.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_det_hist.dummy';

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
        self::TYPE_PHPNAME       => array('Oehhnbr', 'Oedhline', 'Oedhyear', 'Inititemnbr', 'Oedhdesc', 'Oedhdesc2', 'Intbwhse', 'Oedhrqstdate', 'Oedhcancdate', 'Oedhshipdate', 'Oedhspecordr', 'Artbmtaxcode', 'Oedhqtyord', 'Oedhqtyship', 'Oedhqtyshiptot', 'Oedhqtybord', 'Oedhpric', 'Oedhcost', 'Oedhtaxpcttot', 'Oedhprictot', 'Oedhcosttot', 'Oedhspcommpct', 'Oedhbrkncaseqty', 'Oedhbin', 'Oedhpersonalcd', 'Oedhacdisc1', 'Oedhacdisc2', 'Oedhacdisc3', 'Oedhacdisc4', 'Oedhlmwipnbr', 'Oedhcorepric', 'Oedhasstcode', 'Oedhasstqty', 'Oedhlistpric', 'Oedhstancost', 'Oedhvenditemjob', 'Oedhnsvendid', 'Oedhnsitemgrup', 'Oedhusecode', 'Oedhnsshipfromid', 'Oedhasstovrd', 'Oedhpricovrd', 'Oedhpickflag', 'Oedhmstrtaxcode1', 'Oedhmstrtaxpct1', 'Oedhmstrtaxcode2', 'Oedhmstrtaxpct2', 'Oedhmstrtaxcode3', 'Oedhmstrtaxpct3', 'Oedhmstrtaxcode4', 'Oedhmstrtaxpct4', 'Oedhmstrtaxcode5', 'Oedhmstrtaxpct5', 'Oedhmstrtaxcode6', 'Oedhmstrtaxpct6', 'Oedhmstrtaxcode7', 'Oedhmstrtaxpct7', 'Oedhmstrtaxcode8', 'Oedhmstrtaxpct8', 'Oedhmstrtaxcode9', 'Oedhmstrtaxpct9', 'Oedhbinarea', 'Oedhsplitline', 'Oedhlostreas', 'Oedhorigline', 'Oedhcustcrssref', 'Oedhuom', 'Oedhshipflag', 'Oedhkitflag', 'Oedhkititemnbr', 'Oedhbfcost', 'Oedhbfmsgcode', 'Oedhbfcosttot', 'Oedhlmbulkpric', 'Oedhlmmtrxpkgpric', 'Oedhlmmtrxbulkpric', 'Oedhlmcontractpric', 'OedhwghtTot', 'Oedhordras', 'Oedhpodetlinenbr', 'Oedhqtytoship', 'Oedhponbr', 'Oedhporef', 'Oedhfrtin', 'Oedhfrtinentered', 'Oedhprodcmplt', 'Oedherflag', 'Oedhorigitem', 'Oedhsubflag', 'Oedhediincomingseq', 'Oedhspordpoline', 'Oedhcatlgid', 'Oedhdesigncd', 'Oedhdiscpct', 'Oedhtaxamt', 'Oedhxusage', 'Oedhrqtslock', 'Oedhfreshfrozen', 'Oedhcoreflag', 'Oedhnssalesacct', 'Oedhcertreqd', 'Oedhaddonsales', 'Oedhbordflag', 'Oedhtempgrove', 'Oedhgrovedisc', 'Oedhoffinvc', 'Inititemgrup', 'Apvevendid', 'Oedhacct', 'Oedhloadtot', 'Oedhpickedqty', 'Oedhwiorigqty', 'Oedhmargintot', 'Oedhcorecost', 'Oedhitemref', 'Oedhsac02returncode', 'Oedhwgtaxcode', 'Oedhwgprice', 'Oedhwgtot', 'Oedhcntrqty', 'Oedhconfirmcode', 'Oedhpicked', 'Oedhorigrqstdate', 'Oedhfablock', 'Oedhlabelprinted', 'Oedhquoteid', 'Oedhinvprinted', 'Oedtstockcheck', 'Oedhshouldwesplit', 'Oedhcofcreqd', 'Oedhackcode', 'Oedhwibordnbr', 'Oedhcerthistordr', 'Oedhcerthistline', 'Oedhordrdasitemid', 'Oedhwibatch1nbr', 'Oedhwibatch1qty', 'Oedhwibatch1stat', 'Oedhrganbr', 'OedhOrigPric', 'OedhRefLineNbr', 'OedhBinLocn', 'OedhAcSuplyWhse', 'OedhAcPricDate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehhnbr', 'oedhline', 'oedhyear', 'inititemnbr', 'oedhdesc', 'oedhdesc2', 'intbwhse', 'oedhrqstdate', 'oedhcancdate', 'oedhshipdate', 'oedhspecordr', 'artbmtaxcode', 'oedhqtyord', 'oedhqtyship', 'oedhqtyshiptot', 'oedhqtybord', 'oedhpric', 'oedhcost', 'oedhtaxpcttot', 'oedhprictot', 'oedhcosttot', 'oedhspcommpct', 'oedhbrkncaseqty', 'oedhbin', 'oedhpersonalcd', 'oedhacdisc1', 'oedhacdisc2', 'oedhacdisc3', 'oedhacdisc4', 'oedhlmwipnbr', 'oedhcorepric', 'oedhasstcode', 'oedhasstqty', 'oedhlistpric', 'oedhstancost', 'oedhvenditemjob', 'oedhnsvendid', 'oedhnsitemgrup', 'oedhusecode', 'oedhnsshipfromid', 'oedhasstovrd', 'oedhpricovrd', 'oedhpickflag', 'oedhmstrtaxcode1', 'oedhmstrtaxpct1', 'oedhmstrtaxcode2', 'oedhmstrtaxpct2', 'oedhmstrtaxcode3', 'oedhmstrtaxpct3', 'oedhmstrtaxcode4', 'oedhmstrtaxpct4', 'oedhmstrtaxcode5', 'oedhmstrtaxpct5', 'oedhmstrtaxcode6', 'oedhmstrtaxpct6', 'oedhmstrtaxcode7', 'oedhmstrtaxpct7', 'oedhmstrtaxcode8', 'oedhmstrtaxpct8', 'oedhmstrtaxcode9', 'oedhmstrtaxpct9', 'oedhbinarea', 'oedhsplitline', 'oedhlostreas', 'oedhorigline', 'oedhcustcrssref', 'oedhuom', 'oedhshipflag', 'oedhkitflag', 'oedhkititemnbr', 'oedhbfcost', 'oedhbfmsgcode', 'oedhbfcosttot', 'oedhlmbulkpric', 'oedhlmmtrxpkgpric', 'oedhlmmtrxbulkpric', 'oedhlmcontractpric', 'oedhwghtTot', 'oedhordras', 'oedhpodetlinenbr', 'oedhqtytoship', 'oedhponbr', 'oedhporef', 'oedhfrtin', 'oedhfrtinentered', 'oedhprodcmplt', 'oedherflag', 'oedhorigitem', 'oedhsubflag', 'oedhediincomingseq', 'oedhspordpoline', 'oedhcatlgid', 'oedhdesigncd', 'oedhdiscpct', 'oedhtaxamt', 'oedhxusage', 'oedhrqtslock', 'oedhfreshfrozen', 'oedhcoreflag', 'oedhnssalesacct', 'oedhcertreqd', 'oedhaddonsales', 'oedhbordflag', 'oedhtempgrove', 'oedhgrovedisc', 'oedhoffinvc', 'inititemgrup', 'apvevendid', 'oedhacct', 'oedhloadtot', 'oedhpickedqty', 'oedhwiorigqty', 'oedhmargintot', 'oedhcorecost', 'oedhitemref', 'oedhsac02returncode', 'oedhwgtaxcode', 'oedhwgprice', 'oedhwgtot', 'oedhcntrqty', 'oedhconfirmcode', 'oedhpicked', 'oedhorigrqstdate', 'oedhfablock', 'oedhlabelprinted', 'oedhquoteid', 'oedhinvprinted', 'oedtstockcheck', 'oedhshouldwesplit', 'oedhcofcreqd', 'oedhackcode', 'oedhwibordnbr', 'oedhcerthistordr', 'oedhcerthistline', 'oedhordrdasitemid', 'oedhwibatch1nbr', 'oedhwibatch1qty', 'oedhwibatch1stat', 'oedhrganbr', 'oedhOrigPric', 'oedhRefLineNbr', 'oedhBinLocn', 'oedhAcSuplyWhse', 'oedhAcPricDate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesHistoryDetailTableMap::COL_OEHHNBR, SalesHistoryDetailTableMap::COL_OEDHLINE, SalesHistoryDetailTableMap::COL_OEDHYEAR, SalesHistoryDetailTableMap::COL_INITITEMNBR, SalesHistoryDetailTableMap::COL_OEDHDESC, SalesHistoryDetailTableMap::COL_OEDHDESC2, SalesHistoryDetailTableMap::COL_INTBWHSE, SalesHistoryDetailTableMap::COL_OEDHRQSTDATE, SalesHistoryDetailTableMap::COL_OEDHCANCDATE, SalesHistoryDetailTableMap::COL_OEDHSHIPDATE, SalesHistoryDetailTableMap::COL_OEDHSPECORDR, SalesHistoryDetailTableMap::COL_ARTBMTAXCODE, SalesHistoryDetailTableMap::COL_OEDHQTYORD, SalesHistoryDetailTableMap::COL_OEDHQTYSHIP, SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT, SalesHistoryDetailTableMap::COL_OEDHQTYBORD, SalesHistoryDetailTableMap::COL_OEDHPRIC, SalesHistoryDetailTableMap::COL_OEDHCOST, SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT, SalesHistoryDetailTableMap::COL_OEDHPRICTOT, SalesHistoryDetailTableMap::COL_OEDHCOSTTOT, SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT, SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY, SalesHistoryDetailTableMap::COL_OEDHBIN, SalesHistoryDetailTableMap::COL_OEDHPERSONALCD, SalesHistoryDetailTableMap::COL_OEDHACDISC1, SalesHistoryDetailTableMap::COL_OEDHACDISC2, SalesHistoryDetailTableMap::COL_OEDHACDISC3, SalesHistoryDetailTableMap::COL_OEDHACDISC4, SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR, SalesHistoryDetailTableMap::COL_OEDHCOREPRIC, SalesHistoryDetailTableMap::COL_OEDHASSTCODE, SalesHistoryDetailTableMap::COL_OEDHASSTQTY, SalesHistoryDetailTableMap::COL_OEDHLISTPRIC, SalesHistoryDetailTableMap::COL_OEDHSTANCOST, SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB, SalesHistoryDetailTableMap::COL_OEDHNSVENDID, SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP, SalesHistoryDetailTableMap::COL_OEDHUSECODE, SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID, SalesHistoryDetailTableMap::COL_OEDHASSTOVRD, SalesHistoryDetailTableMap::COL_OEDHPRICOVRD, SalesHistoryDetailTableMap::COL_OEDHPICKFLAG, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9, SalesHistoryDetailTableMap::COL_OEDHBINAREA, SalesHistoryDetailTableMap::COL_OEDHSPLITLINE, SalesHistoryDetailTableMap::COL_OEDHLOSTREAS, SalesHistoryDetailTableMap::COL_OEDHORIGLINE, SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF, SalesHistoryDetailTableMap::COL_OEDHUOM, SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG, SalesHistoryDetailTableMap::COL_OEDHKITFLAG, SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR, SalesHistoryDetailTableMap::COL_OEDHBFCOST, SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE, SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT, SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC, SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC, SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC, SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC, SalesHistoryDetailTableMap::COL_OEDHWGHTTOT, SalesHistoryDetailTableMap::COL_OEDHORDRAS, SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR, SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP, SalesHistoryDetailTableMap::COL_OEDHPONBR, SalesHistoryDetailTableMap::COL_OEDHPOREF, SalesHistoryDetailTableMap::COL_OEDHFRTIN, SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED, SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT, SalesHistoryDetailTableMap::COL_OEDHERFLAG, SalesHistoryDetailTableMap::COL_OEDHORIGITEM, SalesHistoryDetailTableMap::COL_OEDHSUBFLAG, SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ, SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE, SalesHistoryDetailTableMap::COL_OEDHCATLGID, SalesHistoryDetailTableMap::COL_OEDHDESIGNCD, SalesHistoryDetailTableMap::COL_OEDHDISCPCT, SalesHistoryDetailTableMap::COL_OEDHTAXAMT, SalesHistoryDetailTableMap::COL_OEDHXUSAGE, SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK, SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN, SalesHistoryDetailTableMap::COL_OEDHCOREFLAG, SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT, SalesHistoryDetailTableMap::COL_OEDHCERTREQD, SalesHistoryDetailTableMap::COL_OEDHADDONSALES, SalesHistoryDetailTableMap::COL_OEDHBORDFLAG, SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE, SalesHistoryDetailTableMap::COL_OEDHGROVEDISC, SalesHistoryDetailTableMap::COL_OEDHOFFINVC, SalesHistoryDetailTableMap::COL_INITITEMGRUP, SalesHistoryDetailTableMap::COL_APVEVENDID, SalesHistoryDetailTableMap::COL_OEDHACCT, SalesHistoryDetailTableMap::COL_OEDHLOADTOT, SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY, SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY, SalesHistoryDetailTableMap::COL_OEDHMARGINTOT, SalesHistoryDetailTableMap::COL_OEDHCORECOST, SalesHistoryDetailTableMap::COL_OEDHITEMREF, SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE, SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE, SalesHistoryDetailTableMap::COL_OEDHWGPRICE, SalesHistoryDetailTableMap::COL_OEDHWGTOT, SalesHistoryDetailTableMap::COL_OEDHCNTRQTY, SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE, SalesHistoryDetailTableMap::COL_OEDHPICKED, SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE, SalesHistoryDetailTableMap::COL_OEDHFABLOCK, SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED, SalesHistoryDetailTableMap::COL_OEDHQUOTEID, SalesHistoryDetailTableMap::COL_OEDHINVPRINTED, SalesHistoryDetailTableMap::COL_OEDTSTOCKCHECK, SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT, SalesHistoryDetailTableMap::COL_OEDHCOFCREQD, SalesHistoryDetailTableMap::COL_OEDHACKCODE, SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR, SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR, SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE, SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID, SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR, SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY, SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT, SalesHistoryDetailTableMap::COL_OEDHRGANBR, SalesHistoryDetailTableMap::COL_OEDHORIGPRIC, SalesHistoryDetailTableMap::COL_OEDHREFLINENBR, SalesHistoryDetailTableMap::COL_OEDHBINLOCN, SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE, SalesHistoryDetailTableMap::COL_OEDHACPRICDATE, SalesHistoryDetailTableMap::COL_DATEUPDTD, SalesHistoryDetailTableMap::COL_TIMEUPDTD, SalesHistoryDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehhNbr', 'OedhLine', 'OedhYear', 'InitItemNbr', 'OedhDesc', 'OedhDesc2', 'IntbWhse', 'OedhRqstDate', 'OedhCancDate', 'OedhShipDate', 'OedhSpecOrdr', 'ArtbMtaxCode', 'OedhQtyOrd', 'OedhQtyShip', 'OedhQtyShipTot', 'OedhQtyBord', 'OedhPric', 'OedhCost', 'OedhTaxPctTot', 'OedhPricTot', 'OedhCostTot', 'OedhSpCommPct', 'OedhBrknCaseQty', 'OedhBin', 'OedhPersonalCd', 'OedhAcDisc1', 'OedhAcDisc2', 'OedhAcDisc3', 'OedhAcDisc4', 'OedhLmWipNbr', 'OedhCorePric', 'OedhAsstCode', 'OedhAsstQty', 'OedhListPric', 'OedhStanCost', 'OedhVendItemJob', 'OedhNsVendId', 'OedhNsItemGrup', 'OedhUseCode', 'OedhNsShipFromId', 'OedhAsstOvrd', 'OedhPricOvrd', 'OedhPickFlag', 'OedhMstrTaxCode1', 'OedhMstrTaxPct1', 'OedhMstrTaxCode2', 'OedhMstrTaxPct2', 'OedhMstrTaxCode3', 'OedhMstrTaxPct3', 'OedhMstrTaxCode4', 'OedhMstrTaxPct4', 'OedhMstrTaxCode5', 'OedhMstrTaxPct5', 'OedhMstrTaxCode6', 'OedhMstrTaxPct6', 'OedhMstrTaxCode7', 'OedhMstrTaxPct7', 'OedhMstrTaxCode8', 'OedhMstrTaxPct8', 'OedhMstrTaxCode9', 'OedhMstrTaxPct9', 'OedhBinArea', 'OedhSplitLine', 'OedhLostReas', 'OedhOrigLine', 'OedhCustCrssRef', 'OedhUom', 'OedhShipFlag', 'OedhKitFlag', 'OedhKitItemNbr', 'OedhBfCost', 'OedhBfMsgCode', 'OedhBfCostTot', 'OedhLmBulkPric', 'OedhLmMtrxPkgPric', 'OedhLmMtrxBulkPric', 'OedhLmContractPric', 'OedhWghtTot', 'OedhOrdrAs', 'OedhPoDetLineNbr', 'OedhQtyToShip', 'OedhPoNbr', 'OedhPoRef', 'OedhFrtIn', 'OedhFrtInEntered', 'OedhProdCmplt', 'OedhErFlag', 'OedhOrigItem', 'OedhSubFlag', 'OedhEdiIncomingSeq', 'OedhSpordPoLine', 'OedhCatlgId', 'OedhDesignCd', 'OedhDiscPct', 'OedhTaxAmt', 'OedhXUsage', 'OedhRqtsLock', 'OedhFreshFrozen', 'OedhCoreFlag', 'OedhNsSalesAcct', 'OedhCertReqd', 'OedhAddOnSales', 'OedhBordFlag', 'OedhTempGrove', 'OedhGroveDisc', 'OedhOffInvc', 'InitItemGrup', 'ApveVendId', 'OedhAcct', 'OedhLoadTot', 'OedhPickedQty', 'OedhWiOrigQty', 'OedhMarginTot', 'OedhCoreCost', 'OedhItemRef', 'OedhSac02ReturnCode', 'OedhWgTaxCode', 'OedhWgPrice', 'OedhWgTot', 'OedhCntrQty', 'OedhConfirmCode', 'OedhPicked', 'OedhOrigRqstDate', 'OedhFabLock', 'OedhLabelPrinted', 'OedhQuoteId', 'OedhInvPrinted', 'OedtStockCheck', 'OedhShouldWeSplit', 'OedhCofcReqd', 'OedhAckCode', 'OedhWiBordNbr', 'OedhCertHistOrdr', 'OedhCertHistLine', 'OedhOrdrdAsItemId', 'OedhWiBatch1Nbr', 'OedhWiBatch1Qty', 'OedhWiBatch1Stat', 'OedhRgaNbr', 'OedhOrigPric', 'OedhRefLineNbr', 'OedhBinLocn', 'OedhAcSuplyWhse', 'OedhAcPricDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehhnbr' => 0, 'Oedhline' => 1, 'Oedhyear' => 2, 'Inititemnbr' => 3, 'Oedhdesc' => 4, 'Oedhdesc2' => 5, 'Intbwhse' => 6, 'Oedhrqstdate' => 7, 'Oedhcancdate' => 8, 'Oedhshipdate' => 9, 'Oedhspecordr' => 10, 'Artbmtaxcode' => 11, 'Oedhqtyord' => 12, 'Oedhqtyship' => 13, 'Oedhqtyshiptot' => 14, 'Oedhqtybord' => 15, 'Oedhpric' => 16, 'Oedhcost' => 17, 'Oedhtaxpcttot' => 18, 'Oedhprictot' => 19, 'Oedhcosttot' => 20, 'Oedhspcommpct' => 21, 'Oedhbrkncaseqty' => 22, 'Oedhbin' => 23, 'Oedhpersonalcd' => 24, 'Oedhacdisc1' => 25, 'Oedhacdisc2' => 26, 'Oedhacdisc3' => 27, 'Oedhacdisc4' => 28, 'Oedhlmwipnbr' => 29, 'Oedhcorepric' => 30, 'Oedhasstcode' => 31, 'Oedhasstqty' => 32, 'Oedhlistpric' => 33, 'Oedhstancost' => 34, 'Oedhvenditemjob' => 35, 'Oedhnsvendid' => 36, 'Oedhnsitemgrup' => 37, 'Oedhusecode' => 38, 'Oedhnsshipfromid' => 39, 'Oedhasstovrd' => 40, 'Oedhpricovrd' => 41, 'Oedhpickflag' => 42, 'Oedhmstrtaxcode1' => 43, 'Oedhmstrtaxpct1' => 44, 'Oedhmstrtaxcode2' => 45, 'Oedhmstrtaxpct2' => 46, 'Oedhmstrtaxcode3' => 47, 'Oedhmstrtaxpct3' => 48, 'Oedhmstrtaxcode4' => 49, 'Oedhmstrtaxpct4' => 50, 'Oedhmstrtaxcode5' => 51, 'Oedhmstrtaxpct5' => 52, 'Oedhmstrtaxcode6' => 53, 'Oedhmstrtaxpct6' => 54, 'Oedhmstrtaxcode7' => 55, 'Oedhmstrtaxpct7' => 56, 'Oedhmstrtaxcode8' => 57, 'Oedhmstrtaxpct8' => 58, 'Oedhmstrtaxcode9' => 59, 'Oedhmstrtaxpct9' => 60, 'Oedhbinarea' => 61, 'Oedhsplitline' => 62, 'Oedhlostreas' => 63, 'Oedhorigline' => 64, 'Oedhcustcrssref' => 65, 'Oedhuom' => 66, 'Oedhshipflag' => 67, 'Oedhkitflag' => 68, 'Oedhkititemnbr' => 69, 'Oedhbfcost' => 70, 'Oedhbfmsgcode' => 71, 'Oedhbfcosttot' => 72, 'Oedhlmbulkpric' => 73, 'Oedhlmmtrxpkgpric' => 74, 'Oedhlmmtrxbulkpric' => 75, 'Oedhlmcontractpric' => 76, 'OedhwghtTot' => 77, 'Oedhordras' => 78, 'Oedhpodetlinenbr' => 79, 'Oedhqtytoship' => 80, 'Oedhponbr' => 81, 'Oedhporef' => 82, 'Oedhfrtin' => 83, 'Oedhfrtinentered' => 84, 'Oedhprodcmplt' => 85, 'Oedherflag' => 86, 'Oedhorigitem' => 87, 'Oedhsubflag' => 88, 'Oedhediincomingseq' => 89, 'Oedhspordpoline' => 90, 'Oedhcatlgid' => 91, 'Oedhdesigncd' => 92, 'Oedhdiscpct' => 93, 'Oedhtaxamt' => 94, 'Oedhxusage' => 95, 'Oedhrqtslock' => 96, 'Oedhfreshfrozen' => 97, 'Oedhcoreflag' => 98, 'Oedhnssalesacct' => 99, 'Oedhcertreqd' => 100, 'Oedhaddonsales' => 101, 'Oedhbordflag' => 102, 'Oedhtempgrove' => 103, 'Oedhgrovedisc' => 104, 'Oedhoffinvc' => 105, 'Inititemgrup' => 106, 'Apvevendid' => 107, 'Oedhacct' => 108, 'Oedhloadtot' => 109, 'Oedhpickedqty' => 110, 'Oedhwiorigqty' => 111, 'Oedhmargintot' => 112, 'Oedhcorecost' => 113, 'Oedhitemref' => 114, 'Oedhsac02returncode' => 115, 'Oedhwgtaxcode' => 116, 'Oedhwgprice' => 117, 'Oedhwgtot' => 118, 'Oedhcntrqty' => 119, 'Oedhconfirmcode' => 120, 'Oedhpicked' => 121, 'Oedhorigrqstdate' => 122, 'Oedhfablock' => 123, 'Oedhlabelprinted' => 124, 'Oedhquoteid' => 125, 'Oedhinvprinted' => 126, 'Oedtstockcheck' => 127, 'Oedhshouldwesplit' => 128, 'Oedhcofcreqd' => 129, 'Oedhackcode' => 130, 'Oedhwibordnbr' => 131, 'Oedhcerthistordr' => 132, 'Oedhcerthistline' => 133, 'Oedhordrdasitemid' => 134, 'Oedhwibatch1nbr' => 135, 'Oedhwibatch1qty' => 136, 'Oedhwibatch1stat' => 137, 'Oedhrganbr' => 138, 'OedhOrigPric' => 139, 'OedhRefLineNbr' => 140, 'OedhBinLocn' => 141, 'OedhAcSuplyWhse' => 142, 'OedhAcPricDate' => 143, 'Dateupdtd' => 144, 'Timeupdtd' => 145, 'Dummy' => 146, ),
        self::TYPE_CAMELNAME     => array('oehhnbr' => 0, 'oedhline' => 1, 'oedhyear' => 2, 'inititemnbr' => 3, 'oedhdesc' => 4, 'oedhdesc2' => 5, 'intbwhse' => 6, 'oedhrqstdate' => 7, 'oedhcancdate' => 8, 'oedhshipdate' => 9, 'oedhspecordr' => 10, 'artbmtaxcode' => 11, 'oedhqtyord' => 12, 'oedhqtyship' => 13, 'oedhqtyshiptot' => 14, 'oedhqtybord' => 15, 'oedhpric' => 16, 'oedhcost' => 17, 'oedhtaxpcttot' => 18, 'oedhprictot' => 19, 'oedhcosttot' => 20, 'oedhspcommpct' => 21, 'oedhbrkncaseqty' => 22, 'oedhbin' => 23, 'oedhpersonalcd' => 24, 'oedhacdisc1' => 25, 'oedhacdisc2' => 26, 'oedhacdisc3' => 27, 'oedhacdisc4' => 28, 'oedhlmwipnbr' => 29, 'oedhcorepric' => 30, 'oedhasstcode' => 31, 'oedhasstqty' => 32, 'oedhlistpric' => 33, 'oedhstancost' => 34, 'oedhvenditemjob' => 35, 'oedhnsvendid' => 36, 'oedhnsitemgrup' => 37, 'oedhusecode' => 38, 'oedhnsshipfromid' => 39, 'oedhasstovrd' => 40, 'oedhpricovrd' => 41, 'oedhpickflag' => 42, 'oedhmstrtaxcode1' => 43, 'oedhmstrtaxpct1' => 44, 'oedhmstrtaxcode2' => 45, 'oedhmstrtaxpct2' => 46, 'oedhmstrtaxcode3' => 47, 'oedhmstrtaxpct3' => 48, 'oedhmstrtaxcode4' => 49, 'oedhmstrtaxpct4' => 50, 'oedhmstrtaxcode5' => 51, 'oedhmstrtaxpct5' => 52, 'oedhmstrtaxcode6' => 53, 'oedhmstrtaxpct6' => 54, 'oedhmstrtaxcode7' => 55, 'oedhmstrtaxpct7' => 56, 'oedhmstrtaxcode8' => 57, 'oedhmstrtaxpct8' => 58, 'oedhmstrtaxcode9' => 59, 'oedhmstrtaxpct9' => 60, 'oedhbinarea' => 61, 'oedhsplitline' => 62, 'oedhlostreas' => 63, 'oedhorigline' => 64, 'oedhcustcrssref' => 65, 'oedhuom' => 66, 'oedhshipflag' => 67, 'oedhkitflag' => 68, 'oedhkititemnbr' => 69, 'oedhbfcost' => 70, 'oedhbfmsgcode' => 71, 'oedhbfcosttot' => 72, 'oedhlmbulkpric' => 73, 'oedhlmmtrxpkgpric' => 74, 'oedhlmmtrxbulkpric' => 75, 'oedhlmcontractpric' => 76, 'oedhwghtTot' => 77, 'oedhordras' => 78, 'oedhpodetlinenbr' => 79, 'oedhqtytoship' => 80, 'oedhponbr' => 81, 'oedhporef' => 82, 'oedhfrtin' => 83, 'oedhfrtinentered' => 84, 'oedhprodcmplt' => 85, 'oedherflag' => 86, 'oedhorigitem' => 87, 'oedhsubflag' => 88, 'oedhediincomingseq' => 89, 'oedhspordpoline' => 90, 'oedhcatlgid' => 91, 'oedhdesigncd' => 92, 'oedhdiscpct' => 93, 'oedhtaxamt' => 94, 'oedhxusage' => 95, 'oedhrqtslock' => 96, 'oedhfreshfrozen' => 97, 'oedhcoreflag' => 98, 'oedhnssalesacct' => 99, 'oedhcertreqd' => 100, 'oedhaddonsales' => 101, 'oedhbordflag' => 102, 'oedhtempgrove' => 103, 'oedhgrovedisc' => 104, 'oedhoffinvc' => 105, 'inititemgrup' => 106, 'apvevendid' => 107, 'oedhacct' => 108, 'oedhloadtot' => 109, 'oedhpickedqty' => 110, 'oedhwiorigqty' => 111, 'oedhmargintot' => 112, 'oedhcorecost' => 113, 'oedhitemref' => 114, 'oedhsac02returncode' => 115, 'oedhwgtaxcode' => 116, 'oedhwgprice' => 117, 'oedhwgtot' => 118, 'oedhcntrqty' => 119, 'oedhconfirmcode' => 120, 'oedhpicked' => 121, 'oedhorigrqstdate' => 122, 'oedhfablock' => 123, 'oedhlabelprinted' => 124, 'oedhquoteid' => 125, 'oedhinvprinted' => 126, 'oedtstockcheck' => 127, 'oedhshouldwesplit' => 128, 'oedhcofcreqd' => 129, 'oedhackcode' => 130, 'oedhwibordnbr' => 131, 'oedhcerthistordr' => 132, 'oedhcerthistline' => 133, 'oedhordrdasitemid' => 134, 'oedhwibatch1nbr' => 135, 'oedhwibatch1qty' => 136, 'oedhwibatch1stat' => 137, 'oedhrganbr' => 138, 'oedhOrigPric' => 139, 'oedhRefLineNbr' => 140, 'oedhBinLocn' => 141, 'oedhAcSuplyWhse' => 142, 'oedhAcPricDate' => 143, 'dateupdtd' => 144, 'timeupdtd' => 145, 'dummy' => 146, ),
        self::TYPE_COLNAME       => array(SalesHistoryDetailTableMap::COL_OEHHNBR => 0, SalesHistoryDetailTableMap::COL_OEDHLINE => 1, SalesHistoryDetailTableMap::COL_OEDHYEAR => 2, SalesHistoryDetailTableMap::COL_INITITEMNBR => 3, SalesHistoryDetailTableMap::COL_OEDHDESC => 4, SalesHistoryDetailTableMap::COL_OEDHDESC2 => 5, SalesHistoryDetailTableMap::COL_INTBWHSE => 6, SalesHistoryDetailTableMap::COL_OEDHRQSTDATE => 7, SalesHistoryDetailTableMap::COL_OEDHCANCDATE => 8, SalesHistoryDetailTableMap::COL_OEDHSHIPDATE => 9, SalesHistoryDetailTableMap::COL_OEDHSPECORDR => 10, SalesHistoryDetailTableMap::COL_ARTBMTAXCODE => 11, SalesHistoryDetailTableMap::COL_OEDHQTYORD => 12, SalesHistoryDetailTableMap::COL_OEDHQTYSHIP => 13, SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT => 14, SalesHistoryDetailTableMap::COL_OEDHQTYBORD => 15, SalesHistoryDetailTableMap::COL_OEDHPRIC => 16, SalesHistoryDetailTableMap::COL_OEDHCOST => 17, SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT => 18, SalesHistoryDetailTableMap::COL_OEDHPRICTOT => 19, SalesHistoryDetailTableMap::COL_OEDHCOSTTOT => 20, SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT => 21, SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY => 22, SalesHistoryDetailTableMap::COL_OEDHBIN => 23, SalesHistoryDetailTableMap::COL_OEDHPERSONALCD => 24, SalesHistoryDetailTableMap::COL_OEDHACDISC1 => 25, SalesHistoryDetailTableMap::COL_OEDHACDISC2 => 26, SalesHistoryDetailTableMap::COL_OEDHACDISC3 => 27, SalesHistoryDetailTableMap::COL_OEDHACDISC4 => 28, SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR => 29, SalesHistoryDetailTableMap::COL_OEDHCOREPRIC => 30, SalesHistoryDetailTableMap::COL_OEDHASSTCODE => 31, SalesHistoryDetailTableMap::COL_OEDHASSTQTY => 32, SalesHistoryDetailTableMap::COL_OEDHLISTPRIC => 33, SalesHistoryDetailTableMap::COL_OEDHSTANCOST => 34, SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB => 35, SalesHistoryDetailTableMap::COL_OEDHNSVENDID => 36, SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP => 37, SalesHistoryDetailTableMap::COL_OEDHUSECODE => 38, SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID => 39, SalesHistoryDetailTableMap::COL_OEDHASSTOVRD => 40, SalesHistoryDetailTableMap::COL_OEDHPRICOVRD => 41, SalesHistoryDetailTableMap::COL_OEDHPICKFLAG => 42, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1 => 43, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1 => 44, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2 => 45, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2 => 46, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3 => 47, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3 => 48, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4 => 49, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4 => 50, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5 => 51, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5 => 52, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6 => 53, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6 => 54, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7 => 55, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7 => 56, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8 => 57, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8 => 58, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9 => 59, SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9 => 60, SalesHistoryDetailTableMap::COL_OEDHBINAREA => 61, SalesHistoryDetailTableMap::COL_OEDHSPLITLINE => 62, SalesHistoryDetailTableMap::COL_OEDHLOSTREAS => 63, SalesHistoryDetailTableMap::COL_OEDHORIGLINE => 64, SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF => 65, SalesHistoryDetailTableMap::COL_OEDHUOM => 66, SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG => 67, SalesHistoryDetailTableMap::COL_OEDHKITFLAG => 68, SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR => 69, SalesHistoryDetailTableMap::COL_OEDHBFCOST => 70, SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE => 71, SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT => 72, SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC => 73, SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC => 74, SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC => 75, SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC => 76, SalesHistoryDetailTableMap::COL_OEDHWGHTTOT => 77, SalesHistoryDetailTableMap::COL_OEDHORDRAS => 78, SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR => 79, SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP => 80, SalesHistoryDetailTableMap::COL_OEDHPONBR => 81, SalesHistoryDetailTableMap::COL_OEDHPOREF => 82, SalesHistoryDetailTableMap::COL_OEDHFRTIN => 83, SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED => 84, SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT => 85, SalesHistoryDetailTableMap::COL_OEDHERFLAG => 86, SalesHistoryDetailTableMap::COL_OEDHORIGITEM => 87, SalesHistoryDetailTableMap::COL_OEDHSUBFLAG => 88, SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ => 89, SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE => 90, SalesHistoryDetailTableMap::COL_OEDHCATLGID => 91, SalesHistoryDetailTableMap::COL_OEDHDESIGNCD => 92, SalesHistoryDetailTableMap::COL_OEDHDISCPCT => 93, SalesHistoryDetailTableMap::COL_OEDHTAXAMT => 94, SalesHistoryDetailTableMap::COL_OEDHXUSAGE => 95, SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK => 96, SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN => 97, SalesHistoryDetailTableMap::COL_OEDHCOREFLAG => 98, SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT => 99, SalesHistoryDetailTableMap::COL_OEDHCERTREQD => 100, SalesHistoryDetailTableMap::COL_OEDHADDONSALES => 101, SalesHistoryDetailTableMap::COL_OEDHBORDFLAG => 102, SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE => 103, SalesHistoryDetailTableMap::COL_OEDHGROVEDISC => 104, SalesHistoryDetailTableMap::COL_OEDHOFFINVC => 105, SalesHistoryDetailTableMap::COL_INITITEMGRUP => 106, SalesHistoryDetailTableMap::COL_APVEVENDID => 107, SalesHistoryDetailTableMap::COL_OEDHACCT => 108, SalesHistoryDetailTableMap::COL_OEDHLOADTOT => 109, SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY => 110, SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY => 111, SalesHistoryDetailTableMap::COL_OEDHMARGINTOT => 112, SalesHistoryDetailTableMap::COL_OEDHCORECOST => 113, SalesHistoryDetailTableMap::COL_OEDHITEMREF => 114, SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE => 115, SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE => 116, SalesHistoryDetailTableMap::COL_OEDHWGPRICE => 117, SalesHistoryDetailTableMap::COL_OEDHWGTOT => 118, SalesHistoryDetailTableMap::COL_OEDHCNTRQTY => 119, SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE => 120, SalesHistoryDetailTableMap::COL_OEDHPICKED => 121, SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE => 122, SalesHistoryDetailTableMap::COL_OEDHFABLOCK => 123, SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED => 124, SalesHistoryDetailTableMap::COL_OEDHQUOTEID => 125, SalesHistoryDetailTableMap::COL_OEDHINVPRINTED => 126, SalesHistoryDetailTableMap::COL_OEDTSTOCKCHECK => 127, SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT => 128, SalesHistoryDetailTableMap::COL_OEDHCOFCREQD => 129, SalesHistoryDetailTableMap::COL_OEDHACKCODE => 130, SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR => 131, SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR => 132, SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE => 133, SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID => 134, SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR => 135, SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY => 136, SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT => 137, SalesHistoryDetailTableMap::COL_OEDHRGANBR => 138, SalesHistoryDetailTableMap::COL_OEDHORIGPRIC => 139, SalesHistoryDetailTableMap::COL_OEDHREFLINENBR => 140, SalesHistoryDetailTableMap::COL_OEDHBINLOCN => 141, SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE => 142, SalesHistoryDetailTableMap::COL_OEDHACPRICDATE => 143, SalesHistoryDetailTableMap::COL_DATEUPDTD => 144, SalesHistoryDetailTableMap::COL_TIMEUPDTD => 145, SalesHistoryDetailTableMap::COL_DUMMY => 146, ),
        self::TYPE_FIELDNAME     => array('OehhNbr' => 0, 'OedhLine' => 1, 'OedhYear' => 2, 'InitItemNbr' => 3, 'OedhDesc' => 4, 'OedhDesc2' => 5, 'IntbWhse' => 6, 'OedhRqstDate' => 7, 'OedhCancDate' => 8, 'OedhShipDate' => 9, 'OedhSpecOrdr' => 10, 'ArtbMtaxCode' => 11, 'OedhQtyOrd' => 12, 'OedhQtyShip' => 13, 'OedhQtyShipTot' => 14, 'OedhQtyBord' => 15, 'OedhPric' => 16, 'OedhCost' => 17, 'OedhTaxPctTot' => 18, 'OedhPricTot' => 19, 'OedhCostTot' => 20, 'OedhSpCommPct' => 21, 'OedhBrknCaseQty' => 22, 'OedhBin' => 23, 'OedhPersonalCd' => 24, 'OedhAcDisc1' => 25, 'OedhAcDisc2' => 26, 'OedhAcDisc3' => 27, 'OedhAcDisc4' => 28, 'OedhLmWipNbr' => 29, 'OedhCorePric' => 30, 'OedhAsstCode' => 31, 'OedhAsstQty' => 32, 'OedhListPric' => 33, 'OedhStanCost' => 34, 'OedhVendItemJob' => 35, 'OedhNsVendId' => 36, 'OedhNsItemGrup' => 37, 'OedhUseCode' => 38, 'OedhNsShipFromId' => 39, 'OedhAsstOvrd' => 40, 'OedhPricOvrd' => 41, 'OedhPickFlag' => 42, 'OedhMstrTaxCode1' => 43, 'OedhMstrTaxPct1' => 44, 'OedhMstrTaxCode2' => 45, 'OedhMstrTaxPct2' => 46, 'OedhMstrTaxCode3' => 47, 'OedhMstrTaxPct3' => 48, 'OedhMstrTaxCode4' => 49, 'OedhMstrTaxPct4' => 50, 'OedhMstrTaxCode5' => 51, 'OedhMstrTaxPct5' => 52, 'OedhMstrTaxCode6' => 53, 'OedhMstrTaxPct6' => 54, 'OedhMstrTaxCode7' => 55, 'OedhMstrTaxPct7' => 56, 'OedhMstrTaxCode8' => 57, 'OedhMstrTaxPct8' => 58, 'OedhMstrTaxCode9' => 59, 'OedhMstrTaxPct9' => 60, 'OedhBinArea' => 61, 'OedhSplitLine' => 62, 'OedhLostReas' => 63, 'OedhOrigLine' => 64, 'OedhCustCrssRef' => 65, 'OedhUom' => 66, 'OedhShipFlag' => 67, 'OedhKitFlag' => 68, 'OedhKitItemNbr' => 69, 'OedhBfCost' => 70, 'OedhBfMsgCode' => 71, 'OedhBfCostTot' => 72, 'OedhLmBulkPric' => 73, 'OedhLmMtrxPkgPric' => 74, 'OedhLmMtrxBulkPric' => 75, 'OedhLmContractPric' => 76, 'OedhWghtTot' => 77, 'OedhOrdrAs' => 78, 'OedhPoDetLineNbr' => 79, 'OedhQtyToShip' => 80, 'OedhPoNbr' => 81, 'OedhPoRef' => 82, 'OedhFrtIn' => 83, 'OedhFrtInEntered' => 84, 'OedhProdCmplt' => 85, 'OedhErFlag' => 86, 'OedhOrigItem' => 87, 'OedhSubFlag' => 88, 'OedhEdiIncomingSeq' => 89, 'OedhSpordPoLine' => 90, 'OedhCatlgId' => 91, 'OedhDesignCd' => 92, 'OedhDiscPct' => 93, 'OedhTaxAmt' => 94, 'OedhXUsage' => 95, 'OedhRqtsLock' => 96, 'OedhFreshFrozen' => 97, 'OedhCoreFlag' => 98, 'OedhNsSalesAcct' => 99, 'OedhCertReqd' => 100, 'OedhAddOnSales' => 101, 'OedhBordFlag' => 102, 'OedhTempGrove' => 103, 'OedhGroveDisc' => 104, 'OedhOffInvc' => 105, 'InitItemGrup' => 106, 'ApveVendId' => 107, 'OedhAcct' => 108, 'OedhLoadTot' => 109, 'OedhPickedQty' => 110, 'OedhWiOrigQty' => 111, 'OedhMarginTot' => 112, 'OedhCoreCost' => 113, 'OedhItemRef' => 114, 'OedhSac02ReturnCode' => 115, 'OedhWgTaxCode' => 116, 'OedhWgPrice' => 117, 'OedhWgTot' => 118, 'OedhCntrQty' => 119, 'OedhConfirmCode' => 120, 'OedhPicked' => 121, 'OedhOrigRqstDate' => 122, 'OedhFabLock' => 123, 'OedhLabelPrinted' => 124, 'OedhQuoteId' => 125, 'OedhInvPrinted' => 126, 'OedtStockCheck' => 127, 'OedhShouldWeSplit' => 128, 'OedhCofcReqd' => 129, 'OedhAckCode' => 130, 'OedhWiBordNbr' => 131, 'OedhCertHistOrdr' => 132, 'OedhCertHistLine' => 133, 'OedhOrdrdAsItemId' => 134, 'OedhWiBatch1Nbr' => 135, 'OedhWiBatch1Qty' => 136, 'OedhWiBatch1Stat' => 137, 'OedhRgaNbr' => 138, 'OedhOrigPric' => 139, 'OedhRefLineNbr' => 140, 'OedhBinLocn' => 141, 'OedhAcSuplyWhse' => 142, 'OedhAcPricDate' => 143, 'DateUpdtd' => 144, 'TimeUpdtd' => 145, 'dummy' => 146, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, )
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
        $this->setName('so_det_hist');
        $this->setPhpName('SalesHistoryDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesHistoryDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehhNbr', 'Oehhnbr', 'VARCHAR' , 'so_head_hist', 'OehhNbr', true, 10, null);
        $this->addPrimaryKey('OedhLine', 'Oedhline', 'INTEGER', true, 4, 0);
        $this->addColumn('OedhYear', 'Oedhyear', 'VARCHAR', false, 4, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('OedhDesc', 'Oedhdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('OedhDesc2', 'Oedhdesc2', 'VARCHAR', false, 35, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OedhRqstDate', 'Oedhrqstdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhCancDate', 'Oedhcancdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhShipDate', 'Oedhshipdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhSpecOrdr', 'Oedhspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhQtyOrd', 'Oedhqtyord', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhQtyShip', 'Oedhqtyship', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhQtyShipTot', 'Oedhqtyshiptot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhQtyBord', 'Oedhqtybord', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhPric', 'Oedhpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhCost', 'Oedhcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhTaxPctTot', 'Oedhtaxpcttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhPricTot', 'Oedhprictot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhCostTot', 'Oedhcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhSpCommPct', 'Oedhspcommpct', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhBrknCaseQty', 'Oedhbrkncaseqty', 'INTEGER', false, 5, null);
        $this->addColumn('OedhBin', 'Oedhbin', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhPersonalCd', 'Oedhpersonalcd', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhAcDisc1', 'Oedhacdisc1', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhAcDisc2', 'Oedhacdisc2', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhAcDisc3', 'Oedhacdisc3', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhAcDisc4', 'Oedhacdisc4', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhLmWipNbr', 'Oedhlmwipnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhCorePric', 'Oedhcorepric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhAsstCode', 'Oedhasstcode', 'VARCHAR', false, 3, null);
        $this->addColumn('OedhAsstQty', 'Oedhasstqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhListPric', 'Oedhlistpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhStanCost', 'Oedhstancost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhVendItemJob', 'Oedhvenditemjob', 'VARCHAR', false, 30, null);
        $this->addColumn('OedhNsVendId', 'Oedhnsvendid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhNsItemGrup', 'Oedhnsitemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhUseCode', 'Oedhusecode', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhNsShipFromId', 'Oedhnsshipfromid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhAsstOvrd', 'Oedhasstovrd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhPricOvrd', 'Oedhpricovrd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhPickFlag', 'Oedhpickflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhMstrTaxCode1', 'Oedhmstrtaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct1', 'Oedhmstrtaxpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode2', 'Oedhmstrtaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct2', 'Oedhmstrtaxpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode3', 'Oedhmstrtaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct3', 'Oedhmstrtaxpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode4', 'Oedhmstrtaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct4', 'Oedhmstrtaxpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode5', 'Oedhmstrtaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct5', 'Oedhmstrtaxpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode6', 'Oedhmstrtaxcode6', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct6', 'Oedhmstrtaxpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode7', 'Oedhmstrtaxcode7', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct7', 'Oedhmstrtaxpct7', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode8', 'Oedhmstrtaxcode8', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct8', 'Oedhmstrtaxpct8', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMstrTaxCode9', 'Oedhmstrtaxcode9', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhMstrTaxPct9', 'Oedhmstrtaxpct9', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhBinArea', 'Oedhbinarea', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhSplitLine', 'Oedhsplitline', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhLostReas', 'Oedhlostreas', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhOrigLine', 'Oedhorigline', 'INTEGER', false, 5, null);
        $this->addColumn('OedhCustCrssRef', 'Oedhcustcrssref', 'VARCHAR', false, 30, null);
        $this->addColumn('OedhUom', 'Oedhuom', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhShipFlag', 'Oedhshipflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhKitFlag', 'Oedhkitflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhKitItemNbr', 'Oedhkititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('OedhBfCost', 'Oedhbfcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhBfMsgCode', 'Oedhbfmsgcode', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhBfCostTot', 'Oedhbfcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhLmBulkPric', 'Oedhlmbulkpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhLmMtrxPkgPric', 'Oedhlmmtrxpkgpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhLmMtrxBulkPric', 'Oedhlmmtrxbulkpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhLmContractPric', 'Oedhlmcontractpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhWghtTot', 'OedhwghtTot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhOrdrAs', 'Oedhordras', 'VARCHAR', false, 2, null);
        $this->addColumn('OedhPoDetLineNbr', 'Oedhpodetlinenbr', 'INTEGER', false, 6, null);
        $this->addColumn('OedhQtyToShip', 'Oedhqtytoship', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhPoNbr', 'Oedhponbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhPoRef', 'Oedhporef', 'VARCHAR', false, 15, null);
        $this->addColumn('OedhFrtIn', 'Oedhfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhFrtInEntered', 'Oedhfrtinentered', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhProdCmplt', 'Oedhprodcmplt', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhErFlag', 'Oedherflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhOrigItem', 'Oedhorigitem', 'VARCHAR', false, 30, null);
        $this->addColumn('OedhSubFlag', 'Oedhsubflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhEdiIncomingSeq', 'Oedhediincomingseq', 'INTEGER', false, 3, null);
        $this->addColumn('OedhSpordPoLine', 'Oedhspordpoline', 'INTEGER', false, 4, null);
        $this->addColumn('OedhCatlgId', 'Oedhcatlgid', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhDesignCd', 'Oedhdesigncd', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhDiscPct', 'Oedhdiscpct', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhTaxAmt', 'Oedhtaxamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhXUsage', 'Oedhxusage', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhRqtsLock', 'Oedhrqtslock', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhFreshFrozen', 'Oedhfreshfrozen', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhCoreFlag', 'Oedhcoreflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhNsSalesAcct', 'Oedhnssalesacct', 'VARCHAR', false, 9, null);
        $this->addColumn('OedhCertReqd', 'Oedhcertreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhAddOnSales', 'Oedhaddonsales', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhBordFlag', 'Oedhbordflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhTempGrove', 'Oedhtempgrove', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhGroveDisc', 'Oedhgrovedisc', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhOffInvc', 'Oedhoffinvc', 'VARCHAR', false, 1, null);
        $this->addColumn('InitItemGrup', 'Inititemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('ApveVendId', 'Apvevendid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhAcct', 'Oedhacct', 'VARCHAR', false, 9, null);
        $this->addColumn('OedhLoadTot', 'Oedhloadtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhPickedQty', 'Oedhpickedqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhWiOrigQty', 'Oedhwiorigqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhMarginTot', 'Oedhmargintot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhCoreCost', 'Oedhcorecost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhItemRef', 'Oedhitemref', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhSac02ReturnCode', 'Oedhsac02returncode', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhWgTaxCode', 'Oedhwgtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('OedhWgPrice', 'Oedhwgprice', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhWgTot', 'Oedhwgtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhCntrQty', 'Oedhcntrqty', 'INTEGER', false, 7, null);
        $this->addColumn('OedhConfirmCode', 'Oedhconfirmcode', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhPicked', 'Oedhpicked', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhOrigRqstDate', 'Oedhorigrqstdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhFabLock', 'Oedhfablock', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhLabelPrinted', 'Oedhlabelprinted', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhQuoteId', 'Oedhquoteid', 'VARCHAR', false, 8, null);
        $this->addColumn('OedhInvPrinted', 'Oedhinvprinted', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtStockCheck', 'Oedtstockcheck', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhShouldWeSplit', 'Oedhshouldwesplit', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhCofcReqd', 'Oedhcofcreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhAckCode', 'Oedhackcode', 'VARCHAR', false, 2, null);
        $this->addColumn('OedhWiBordNbr', 'Oedhwibordnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('OedhCertHistOrdr', 'Oedhcerthistordr', 'VARCHAR', false, 10, null);
        $this->addColumn('OedhCertHistLine', 'Oedhcerthistline', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhOrdrdAsItemId', 'Oedhordrdasitemid', 'VARCHAR', false, 30, null);
        $this->addColumn('OedhWiBatch1Nbr', 'Oedhwibatch1nbr', 'INTEGER', false, 8, null);
        $this->addColumn('OedhWiBatch1Qty', 'Oedhwibatch1qty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhWiBatch1Stat', 'Oedhwibatch1stat', 'VARCHAR', false, 1, null);
        $this->addColumn('OedhRgaNbr', 'Oedhrganbr', 'INTEGER', false, 8, null);
        $this->addColumn('OedhOrigPric', 'OedhOrigPric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedhRefLineNbr', 'OedhRefLineNbr', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhBinLocn', 'OedhBinLocn', 'VARCHAR', false, 20, null);
        $this->addColumn('OedhAcSuplyWhse', 'OedhAcSuplyWhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OedhAcPricDate', 'OedhAcPricDate', 'VARCHAR', false, 8, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesHistory', '\\SalesHistory', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehhNbr',
    1 => ':OehhNbr',
  ),
), null, null, null, false);
        $this->addRelation('SalesHistoryLotserial', '\\SalesHistoryLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehhNbr',
    1 => ':OehhNbr',
  ),
  1 =>
  array (
    0 => ':OedhLine',
    1 => ':OedhLine',
  ),
), null, null, 'SalesHistoryLotserials', false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \SalesHistoryDetail $obj A \SalesHistoryDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehhnbr() || is_scalar($obj->getOehhnbr()) || is_callable([$obj->getOehhnbr(), '__toString']) ? (string) $obj->getOehhnbr() : $obj->getOehhnbr()), (null === $obj->getOedhline() || is_scalar($obj->getOedhline()) || is_callable([$obj->getOedhline(), '__toString']) ? (string) $obj->getOedhline() : $obj->getOedhline())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \SalesHistoryDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesHistoryDetail) {
                $key = serialize([(null === $value->getOehhnbr() || is_scalar($value->getOehhnbr()) || is_callable([$value->getOehhnbr(), '__toString']) ? (string) $value->getOehhnbr() : $value->getOehhnbr()), (null === $value->getOedhline() || is_scalar($value->getOedhline()) || is_callable([$value->getOedhline(), '__toString']) ? (string) $value->getOedhline() : $value->getOedhline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesHistoryDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? SalesHistoryDetailTableMap::CLASS_DEFAULT : SalesHistoryDetailTableMap::OM_CLASS;
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
     * @return array           (SalesHistoryDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesHistoryDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesHistoryDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesHistoryDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesHistoryDetailTableMap::OM_CLASS;
            /** @var SalesHistoryDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesHistoryDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesHistoryDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesHistoryDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesHistoryDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesHistoryDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEHHNBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLINE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHYEAR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHDESC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHDESC2);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHRQSTDATE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCANCDATE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSHIPDATE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSPECORDR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHQTYORD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHQTYBORD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCOST);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPRICTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBIN);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPERSONALCD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACDISC1);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACDISC2);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACDISC3);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACDISC4);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHASSTCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHASSTQTY);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSTANCOST);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHNSVENDID);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHUSECODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHASSTOVRD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPRICOVRD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPICKFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBINAREA);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSPLITLINE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLOSTREAS);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHORIGLINE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHUOM);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHKITFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBFCOST);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHORDRAS);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPONBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPOREF);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHFRTIN);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHERFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHORIGITEM);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSUBFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCATLGID);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHDESIGNCD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHDISCPCT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHTAXAMT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHXUSAGE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCOREFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCERTREQD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHADDONSALES);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBORDFLAG);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHGROVEDISC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHOFFINVC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_INITITEMGRUP);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACCT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLOADTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCORECOST);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHITEMREF);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWGPRICE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWGTOT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHPICKED);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHFABLOCK);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHQUOTEID);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHINVPRINTED);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDTSTOCKCHECK);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCOFCREQD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACKCODE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHRGANBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHBINLOCN);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_OEDHACPRICDATE);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesHistoryDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehhNbr');
            $criteria->addSelectColumn($alias . '.OedhLine');
            $criteria->addSelectColumn($alias . '.OedhYear');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OedhDesc');
            $criteria->addSelectColumn($alias . '.OedhDesc2');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.OedhRqstDate');
            $criteria->addSelectColumn($alias . '.OedhCancDate');
            $criteria->addSelectColumn($alias . '.OedhShipDate');
            $criteria->addSelectColumn($alias . '.OedhSpecOrdr');
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
            $criteria->addSelectColumn($alias . '.OedhQtyOrd');
            $criteria->addSelectColumn($alias . '.OedhQtyShip');
            $criteria->addSelectColumn($alias . '.OedhQtyShipTot');
            $criteria->addSelectColumn($alias . '.OedhQtyBord');
            $criteria->addSelectColumn($alias . '.OedhPric');
            $criteria->addSelectColumn($alias . '.OedhCost');
            $criteria->addSelectColumn($alias . '.OedhTaxPctTot');
            $criteria->addSelectColumn($alias . '.OedhPricTot');
            $criteria->addSelectColumn($alias . '.OedhCostTot');
            $criteria->addSelectColumn($alias . '.OedhSpCommPct');
            $criteria->addSelectColumn($alias . '.OedhBrknCaseQty');
            $criteria->addSelectColumn($alias . '.OedhBin');
            $criteria->addSelectColumn($alias . '.OedhPersonalCd');
            $criteria->addSelectColumn($alias . '.OedhAcDisc1');
            $criteria->addSelectColumn($alias . '.OedhAcDisc2');
            $criteria->addSelectColumn($alias . '.OedhAcDisc3');
            $criteria->addSelectColumn($alias . '.OedhAcDisc4');
            $criteria->addSelectColumn($alias . '.OedhLmWipNbr');
            $criteria->addSelectColumn($alias . '.OedhCorePric');
            $criteria->addSelectColumn($alias . '.OedhAsstCode');
            $criteria->addSelectColumn($alias . '.OedhAsstQty');
            $criteria->addSelectColumn($alias . '.OedhListPric');
            $criteria->addSelectColumn($alias . '.OedhStanCost');
            $criteria->addSelectColumn($alias . '.OedhVendItemJob');
            $criteria->addSelectColumn($alias . '.OedhNsVendId');
            $criteria->addSelectColumn($alias . '.OedhNsItemGrup');
            $criteria->addSelectColumn($alias . '.OedhUseCode');
            $criteria->addSelectColumn($alias . '.OedhNsShipFromId');
            $criteria->addSelectColumn($alias . '.OedhAsstOvrd');
            $criteria->addSelectColumn($alias . '.OedhPricOvrd');
            $criteria->addSelectColumn($alias . '.OedhPickFlag');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode1');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct1');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode2');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct2');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode3');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct3');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode4');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct4');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode5');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct5');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode6');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct6');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode7');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct7');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode8');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct8');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxCode9');
            $criteria->addSelectColumn($alias . '.OedhMstrTaxPct9');
            $criteria->addSelectColumn($alias . '.OedhBinArea');
            $criteria->addSelectColumn($alias . '.OedhSplitLine');
            $criteria->addSelectColumn($alias . '.OedhLostReas');
            $criteria->addSelectColumn($alias . '.OedhOrigLine');
            $criteria->addSelectColumn($alias . '.OedhCustCrssRef');
            $criteria->addSelectColumn($alias . '.OedhUom');
            $criteria->addSelectColumn($alias . '.OedhShipFlag');
            $criteria->addSelectColumn($alias . '.OedhKitFlag');
            $criteria->addSelectColumn($alias . '.OedhKitItemNbr');
            $criteria->addSelectColumn($alias . '.OedhBfCost');
            $criteria->addSelectColumn($alias . '.OedhBfMsgCode');
            $criteria->addSelectColumn($alias . '.OedhBfCostTot');
            $criteria->addSelectColumn($alias . '.OedhLmBulkPric');
            $criteria->addSelectColumn($alias . '.OedhLmMtrxPkgPric');
            $criteria->addSelectColumn($alias . '.OedhLmMtrxBulkPric');
            $criteria->addSelectColumn($alias . '.OedhLmContractPric');
            $criteria->addSelectColumn($alias . '.OedhWghtTot');
            $criteria->addSelectColumn($alias . '.OedhOrdrAs');
            $criteria->addSelectColumn($alias . '.OedhPoDetLineNbr');
            $criteria->addSelectColumn($alias . '.OedhQtyToShip');
            $criteria->addSelectColumn($alias . '.OedhPoNbr');
            $criteria->addSelectColumn($alias . '.OedhPoRef');
            $criteria->addSelectColumn($alias . '.OedhFrtIn');
            $criteria->addSelectColumn($alias . '.OedhFrtInEntered');
            $criteria->addSelectColumn($alias . '.OedhProdCmplt');
            $criteria->addSelectColumn($alias . '.OedhErFlag');
            $criteria->addSelectColumn($alias . '.OedhOrigItem');
            $criteria->addSelectColumn($alias . '.OedhSubFlag');
            $criteria->addSelectColumn($alias . '.OedhEdiIncomingSeq');
            $criteria->addSelectColumn($alias . '.OedhSpordPoLine');
            $criteria->addSelectColumn($alias . '.OedhCatlgId');
            $criteria->addSelectColumn($alias . '.OedhDesignCd');
            $criteria->addSelectColumn($alias . '.OedhDiscPct');
            $criteria->addSelectColumn($alias . '.OedhTaxAmt');
            $criteria->addSelectColumn($alias . '.OedhXUsage');
            $criteria->addSelectColumn($alias . '.OedhRqtsLock');
            $criteria->addSelectColumn($alias . '.OedhFreshFrozen');
            $criteria->addSelectColumn($alias . '.OedhCoreFlag');
            $criteria->addSelectColumn($alias . '.OedhNsSalesAcct');
            $criteria->addSelectColumn($alias . '.OedhCertReqd');
            $criteria->addSelectColumn($alias . '.OedhAddOnSales');
            $criteria->addSelectColumn($alias . '.OedhBordFlag');
            $criteria->addSelectColumn($alias . '.OedhTempGrove');
            $criteria->addSelectColumn($alias . '.OedhGroveDisc');
            $criteria->addSelectColumn($alias . '.OedhOffInvc');
            $criteria->addSelectColumn($alias . '.InitItemGrup');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.OedhAcct');
            $criteria->addSelectColumn($alias . '.OedhLoadTot');
            $criteria->addSelectColumn($alias . '.OedhPickedQty');
            $criteria->addSelectColumn($alias . '.OedhWiOrigQty');
            $criteria->addSelectColumn($alias . '.OedhMarginTot');
            $criteria->addSelectColumn($alias . '.OedhCoreCost');
            $criteria->addSelectColumn($alias . '.OedhItemRef');
            $criteria->addSelectColumn($alias . '.OedhSac02ReturnCode');
            $criteria->addSelectColumn($alias . '.OedhWgTaxCode');
            $criteria->addSelectColumn($alias . '.OedhWgPrice');
            $criteria->addSelectColumn($alias . '.OedhWgTot');
            $criteria->addSelectColumn($alias . '.OedhCntrQty');
            $criteria->addSelectColumn($alias . '.OedhConfirmCode');
            $criteria->addSelectColumn($alias . '.OedhPicked');
            $criteria->addSelectColumn($alias . '.OedhOrigRqstDate');
            $criteria->addSelectColumn($alias . '.OedhFabLock');
            $criteria->addSelectColumn($alias . '.OedhLabelPrinted');
            $criteria->addSelectColumn($alias . '.OedhQuoteId');
            $criteria->addSelectColumn($alias . '.OedhInvPrinted');
            $criteria->addSelectColumn($alias . '.OedtStockCheck');
            $criteria->addSelectColumn($alias . '.OedhShouldWeSplit');
            $criteria->addSelectColumn($alias . '.OedhCofcReqd');
            $criteria->addSelectColumn($alias . '.OedhAckCode');
            $criteria->addSelectColumn($alias . '.OedhWiBordNbr');
            $criteria->addSelectColumn($alias . '.OedhCertHistOrdr');
            $criteria->addSelectColumn($alias . '.OedhCertHistLine');
            $criteria->addSelectColumn($alias . '.OedhOrdrdAsItemId');
            $criteria->addSelectColumn($alias . '.OedhWiBatch1Nbr');
            $criteria->addSelectColumn($alias . '.OedhWiBatch1Qty');
            $criteria->addSelectColumn($alias . '.OedhWiBatch1Stat');
            $criteria->addSelectColumn($alias . '.OedhRgaNbr');
            $criteria->addSelectColumn($alias . '.OedhOrigPric');
            $criteria->addSelectColumn($alias . '.OedhRefLineNbr');
            $criteria->addSelectColumn($alias . '.OedhBinLocn');
            $criteria->addSelectColumn($alias . '.OedhAcSuplyWhse');
            $criteria->addSelectColumn($alias . '.OedhAcPricDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesHistoryDetailTableMap::DATABASE_NAME)->getTable(SalesHistoryDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesHistoryDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesHistoryDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesHistoryDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesHistoryDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesHistoryDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesHistoryDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesHistoryDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesHistoryDetailTableMap::COL_OEHHNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryDetailTableMap::COL_OEDHLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesHistoryDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesHistoryDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesHistoryDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_det_hist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesHistoryDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesHistoryDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesHistoryDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesHistoryDetail object
        }


        // Set the correct dbName
        $query = SalesHistoryDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesHistoryDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesHistoryDetailTableMap::buildTableMap();
