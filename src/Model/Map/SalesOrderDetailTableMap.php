<?php

namespace Map;

use \SalesOrderDetail;
use \SalesOrderDetailQuery;
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
 * This class defines the structure of the 'so_detail' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SalesOrderDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.SalesOrderDetailTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_detail';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SalesOrderDetail';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\SalesOrderDetail';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'SalesOrderDetail';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 146;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 146;

    /**
     * the column name for the OehdNbr field
     */
    public const COL_OEHDNBR = 'so_detail.OehdNbr';

    /**
     * the column name for the OedtLine field
     */
    public const COL_OEDTLINE = 'so_detail.OedtLine';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'so_detail.InitItemNbr';

    /**
     * the column name for the OedtDesc field
     */
    public const COL_OEDTDESC = 'so_detail.OedtDesc';

    /**
     * the column name for the OedtDesc2 field
     */
    public const COL_OEDTDESC2 = 'so_detail.OedtDesc2';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'so_detail.IntbWhse';

    /**
     * the column name for the OedtRqstDate field
     */
    public const COL_OEDTRQSTDATE = 'so_detail.OedtRqstDate';

    /**
     * the column name for the OedtCancDate field
     */
    public const COL_OEDTCANCDATE = 'so_detail.OedtCancDate';

    /**
     * the column name for the OedtShipDate field
     */
    public const COL_OEDTSHIPDATE = 'so_detail.OedtShipDate';

    /**
     * the column name for the OedtSpecOrdr field
     */
    public const COL_OEDTSPECORDR = 'so_detail.OedtSpecOrdr';

    /**
     * the column name for the ArtbCtaxCode field
     */
    public const COL_ARTBCTAXCODE = 'so_detail.ArtbCtaxCode';

    /**
     * the column name for the OedtQtyOrd field
     */
    public const COL_OEDTQTYORD = 'so_detail.OedtQtyOrd';

    /**
     * the column name for the OedtQtyShip field
     */
    public const COL_OEDTQTYSHIP = 'so_detail.OedtQtyShip';

    /**
     * the column name for the OedtQtyShipTot field
     */
    public const COL_OEDTQTYSHIPTOT = 'so_detail.OedtQtyShipTot';

    /**
     * the column name for the OedtQtyBord field
     */
    public const COL_OEDTQTYBORD = 'so_detail.OedtQtyBord';

    /**
     * the column name for the OedtPric field
     */
    public const COL_OEDTPRIC = 'so_detail.OedtPric';

    /**
     * the column name for the OedtCost field
     */
    public const COL_OEDTCOST = 'so_detail.OedtCost';

    /**
     * the column name for the OedtTaxPctTot field
     */
    public const COL_OEDTTAXPCTTOT = 'so_detail.OedtTaxPctTot';

    /**
     * the column name for the OedtPricTot field
     */
    public const COL_OEDTPRICTOT = 'so_detail.OedtPricTot';

    /**
     * the column name for the OedtCostTot field
     */
    public const COL_OEDTCOSTTOT = 'so_detail.OedtCostTot';

    /**
     * the column name for the OedtSpCommPct field
     */
    public const COL_OEDTSPCOMMPCT = 'so_detail.OedtSpCommPct';

    /**
     * the column name for the OedtBrknCaseQty field
     */
    public const COL_OEDTBRKNCASEQTY = 'so_detail.OedtBrknCaseQty';

    /**
     * the column name for the OedtBin field
     */
    public const COL_OEDTBIN = 'so_detail.OedtBin';

    /**
     * the column name for the OedtPersonalCd field
     */
    public const COL_OEDTPERSONALCD = 'so_detail.OedtPersonalCd';

    /**
     * the column name for the OedtAcDisc1 field
     */
    public const COL_OEDTACDISC1 = 'so_detail.OedtAcDisc1';

    /**
     * the column name for the OedtAcDisc2 field
     */
    public const COL_OEDTACDISC2 = 'so_detail.OedtAcDisc2';

    /**
     * the column name for the OedtAcDisc3 field
     */
    public const COL_OEDTACDISC3 = 'so_detail.OedtAcDisc3';

    /**
     * the column name for the OedtAcDisc4 field
     */
    public const COL_OEDTACDISC4 = 'so_detail.OedtAcDisc4';

    /**
     * the column name for the OedtLmWipNbr field
     */
    public const COL_OEDTLMWIPNBR = 'so_detail.OedtLmWipNbr';

    /**
     * the column name for the OedtCorePric field
     */
    public const COL_OEDTCOREPRIC = 'so_detail.OedtCorePric';

    /**
     * the column name for the OedtAsstCode field
     */
    public const COL_OEDTASSTCODE = 'so_detail.OedtAsstCode';

    /**
     * the column name for the OedtAsstQty field
     */
    public const COL_OEDTASSTQTY = 'so_detail.OedtAsstQty';

    /**
     * the column name for the OedtListPric field
     */
    public const COL_OEDTLISTPRIC = 'so_detail.OedtListPric';

    /**
     * the column name for the OedtStanCost field
     */
    public const COL_OEDTSTANCOST = 'so_detail.OedtStanCost';

    /**
     * the column name for the OedtVendItemJob field
     */
    public const COL_OEDTVENDITEMJOB = 'so_detail.OedtVendItemJob';

    /**
     * the column name for the OedtNsVendId field
     */
    public const COL_OEDTNSVENDID = 'so_detail.OedtNsVendId';

    /**
     * the column name for the OedtNsItemGrup field
     */
    public const COL_OEDTNSITEMGRUP = 'so_detail.OedtNsItemGrup';

    /**
     * the column name for the OedtUseCode field
     */
    public const COL_OEDTUSECODE = 'so_detail.OedtUseCode';

    /**
     * the column name for the OedtNsShipFromId field
     */
    public const COL_OEDTNSSHIPFROMID = 'so_detail.OedtNsShipFromId';

    /**
     * the column name for the OedtAsstOvrd field
     */
    public const COL_OEDTASSTOVRD = 'so_detail.OedtAsstOvrd';

    /**
     * the column name for the OedtPricOvrd field
     */
    public const COL_OEDTPRICOVRD = 'so_detail.OedtPricOvrd';

    /**
     * the column name for the OedtPickFlag field
     */
    public const COL_OEDTPICKFLAG = 'so_detail.OedtPickFlag';

    /**
     * the column name for the OedtMstrTaxCode1 field
     */
    public const COL_OEDTMSTRTAXCODE1 = 'so_detail.OedtMstrTaxCode1';

    /**
     * the column name for the OedtMstrTaxPct1 field
     */
    public const COL_OEDTMSTRTAXPCT1 = 'so_detail.OedtMstrTaxPct1';

    /**
     * the column name for the OedtMstrTaxCode2 field
     */
    public const COL_OEDTMSTRTAXCODE2 = 'so_detail.OedtMstrTaxCode2';

    /**
     * the column name for the OedtMstrTaxPct2 field
     */
    public const COL_OEDTMSTRTAXPCT2 = 'so_detail.OedtMstrTaxPct2';

    /**
     * the column name for the OedtMstrTaxCode3 field
     */
    public const COL_OEDTMSTRTAXCODE3 = 'so_detail.OedtMstrTaxCode3';

    /**
     * the column name for the OedtMstrTaxPct3 field
     */
    public const COL_OEDTMSTRTAXPCT3 = 'so_detail.OedtMstrTaxPct3';

    /**
     * the column name for the OedtMstrTaxCode4 field
     */
    public const COL_OEDTMSTRTAXCODE4 = 'so_detail.OedtMstrTaxCode4';

    /**
     * the column name for the OedtMstrTaxPct4 field
     */
    public const COL_OEDTMSTRTAXPCT4 = 'so_detail.OedtMstrTaxPct4';

    /**
     * the column name for the OedtMstrTaxCode5 field
     */
    public const COL_OEDTMSTRTAXCODE5 = 'so_detail.OedtMstrTaxCode5';

    /**
     * the column name for the OedtMstrTaxPct5 field
     */
    public const COL_OEDTMSTRTAXPCT5 = 'so_detail.OedtMstrTaxPct5';

    /**
     * the column name for the OedtMstrTaxCode6 field
     */
    public const COL_OEDTMSTRTAXCODE6 = 'so_detail.OedtMstrTaxCode6';

    /**
     * the column name for the OedtMstrTaxPct6 field
     */
    public const COL_OEDTMSTRTAXPCT6 = 'so_detail.OedtMstrTaxPct6';

    /**
     * the column name for the OedtMstrTaxCode7 field
     */
    public const COL_OEDTMSTRTAXCODE7 = 'so_detail.OedtMstrTaxCode7';

    /**
     * the column name for the OedtMstrTaxPct7 field
     */
    public const COL_OEDTMSTRTAXPCT7 = 'so_detail.OedtMstrTaxPct7';

    /**
     * the column name for the OedtMstrTaxCode8 field
     */
    public const COL_OEDTMSTRTAXCODE8 = 'so_detail.OedtMstrTaxCode8';

    /**
     * the column name for the OedtMstrTaxPct8 field
     */
    public const COL_OEDTMSTRTAXPCT8 = 'so_detail.OedtMstrTaxPct8';

    /**
     * the column name for the OedtMstrTaxCode9 field
     */
    public const COL_OEDTMSTRTAXCODE9 = 'so_detail.OedtMstrTaxCode9';

    /**
     * the column name for the OedtMstrTaxPct9 field
     */
    public const COL_OEDTMSTRTAXPCT9 = 'so_detail.OedtMstrTaxPct9';

    /**
     * the column name for the OedtBinArea field
     */
    public const COL_OEDTBINAREA = 'so_detail.OedtBinArea';

    /**
     * the column name for the OedtSplitLine field
     */
    public const COL_OEDTSPLITLINE = 'so_detail.OedtSplitLine';

    /**
     * the column name for the OedtLostReas field
     */
    public const COL_OEDTLOSTREAS = 'so_detail.OedtLostReas';

    /**
     * the column name for the OedtOrigLine field
     */
    public const COL_OEDTORIGLINE = 'so_detail.OedtOrigLine';

    /**
     * the column name for the OedtCustCrssRef field
     */
    public const COL_OEDTCUSTCRSSREF = 'so_detail.OedtCustCrssRef';

    /**
     * the column name for the OedtUom field
     */
    public const COL_OEDTUOM = 'so_detail.OedtUom';

    /**
     * the column name for the OedtShipFlag field
     */
    public const COL_OEDTSHIPFLAG = 'so_detail.OedtShipFlag';

    /**
     * the column name for the OedtKitFlag field
     */
    public const COL_OEDTKITFLAG = 'so_detail.OedtKitFlag';

    /**
     * the column name for the OedtKitItemNbr field
     */
    public const COL_OEDTKITITEMNBR = 'so_detail.OedtKitItemNbr';

    /**
     * the column name for the OedtBfCost field
     */
    public const COL_OEDTBFCOST = 'so_detail.OedtBfCost';

    /**
     * the column name for the OedtBfMsgCode field
     */
    public const COL_OEDTBFMSGCODE = 'so_detail.OedtBfMsgCode';

    /**
     * the column name for the OedtBfCostTot field
     */
    public const COL_OEDTBFCOSTTOT = 'so_detail.OedtBfCostTot';

    /**
     * the column name for the OedtLmBulkPric field
     */
    public const COL_OEDTLMBULKPRIC = 'so_detail.OedtLmBulkPric';

    /**
     * the column name for the OedtLmMtrxPkgPric field
     */
    public const COL_OEDTLMMTRXPKGPRIC = 'so_detail.OedtLmMtrxPkgPric';

    /**
     * the column name for the OedtLmMtrxBulkPric field
     */
    public const COL_OEDTLMMTRXBULKPRIC = 'so_detail.OedtLmMtrxBulkPric';

    /**
     * the column name for the OedtLmContractPric field
     */
    public const COL_OEDTLMCONTRACTPRIC = 'so_detail.OedtLmContractPric';

    /**
     * the column name for the OedtWghtTot field
     */
    public const COL_OEDTWGHTTOT = 'so_detail.OedtWghtTot';

    /**
     * the column name for the OedtOrdrAs field
     */
    public const COL_OEDTORDRAS = 'so_detail.OedtOrdrAs';

    /**
     * the column name for the OedtPoDetLineNbr field
     */
    public const COL_OEDTPODETLINENBR = 'so_detail.OedtPoDetLineNbr';

    /**
     * the column name for the OedtQtyToShip field
     */
    public const COL_OEDTQTYTOSHIP = 'so_detail.OedtQtyToShip';

    /**
     * the column name for the OedtPoNbr field
     */
    public const COL_OEDTPONBR = 'so_detail.OedtPoNbr';

    /**
     * the column name for the OedtPoRef field
     */
    public const COL_OEDTPOREF = 'so_detail.OedtPoRef';

    /**
     * the column name for the OedtFrtIn field
     */
    public const COL_OEDTFRTIN = 'so_detail.OedtFrtIn';

    /**
     * the column name for the OedtFrtInEntered field
     */
    public const COL_OEDTFRTINENTERED = 'so_detail.OedtFrtInEntered';

    /**
     * the column name for the OedtProdCmplt field
     */
    public const COL_OEDTPRODCMPLT = 'so_detail.OedtProdCmplt';

    /**
     * the column name for the OedtErFlag field
     */
    public const COL_OEDTERFLAG = 'so_detail.OedtErFlag';

    /**
     * the column name for the OedtOrigItem field
     */
    public const COL_OEDTORIGITEM = 'so_detail.OedtOrigItem';

    /**
     * the column name for the OedtSubFlag field
     */
    public const COL_OEDTSUBFLAG = 'so_detail.OedtSubFlag';

    /**
     * the column name for the OedtEdiIncomingSeq field
     */
    public const COL_OEDTEDIINCOMINGSEQ = 'so_detail.OedtEdiIncomingSeq';

    /**
     * the column name for the OedtSpordPoLine field
     */
    public const COL_OEDTSPORDPOLINE = 'so_detail.OedtSpordPoLine';

    /**
     * the column name for the OedtCatlgId field
     */
    public const COL_OEDTCATLGID = 'so_detail.OedtCatlgId';

    /**
     * the column name for the OedtDesignCd field
     */
    public const COL_OEDTDESIGNCD = 'so_detail.OedtDesignCd';

    /**
     * the column name for the OedtDiscPct field
     */
    public const COL_OEDTDISCPCT = 'so_detail.OedtDiscPct';

    /**
     * the column name for the OedtTaxAmt field
     */
    public const COL_OEDTTAXAMT = 'so_detail.OedtTaxAmt';

    /**
     * the column name for the OedtXUsage field
     */
    public const COL_OEDTXUSAGE = 'so_detail.OedtXUsage';

    /**
     * the column name for the OedtRqtsLock field
     */
    public const COL_OEDTRQTSLOCK = 'so_detail.OedtRqtsLock';

    /**
     * the column name for the OedtFreshFrozen field
     */
    public const COL_OEDTFRESHFROZEN = 'so_detail.OedtFreshFrozen';

    /**
     * the column name for the OedtCoreFlag field
     */
    public const COL_OEDTCOREFLAG = 'so_detail.OedtCoreFlag';

    /**
     * the column name for the OedtNsSalesAcct field
     */
    public const COL_OEDTNSSALESACCT = 'so_detail.OedtNsSalesAcct';

    /**
     * the column name for the OedtCertReqd field
     */
    public const COL_OEDTCERTREQD = 'so_detail.OedtCertReqd';

    /**
     * the column name for the OedtAddOnSales field
     */
    public const COL_OEDTADDONSALES = 'so_detail.OedtAddOnSales';

    /**
     * the column name for the OedtBordFlag field
     */
    public const COL_OEDTBORDFLAG = 'so_detail.OedtBordFlag';

    /**
     * the column name for the OedtTempGrove field
     */
    public const COL_OEDTTEMPGROVE = 'so_detail.OedtTempGrove';

    /**
     * the column name for the OedtGroveDisc field
     */
    public const COL_OEDTGROVEDISC = 'so_detail.OedtGroveDisc';

    /**
     * the column name for the OedtOffInvc field
     */
    public const COL_OEDTOFFINVC = 'so_detail.OedtOffInvc';

    /**
     * the column name for the InitItemGrup field
     */
    public const COL_INITITEMGRUP = 'so_detail.InitItemGrup';

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'so_detail.ApveVendId';

    /**
     * the column name for the OedtAcct field
     */
    public const COL_OEDTACCT = 'so_detail.OedtAcct';

    /**
     * the column name for the OedtLoadTot field
     */
    public const COL_OEDTLOADTOT = 'so_detail.OedtLoadTot';

    /**
     * the column name for the OedtPickedQty field
     */
    public const COL_OEDTPICKEDQTY = 'so_detail.OedtPickedQty';

    /**
     * the column name for the OedtWiOrigQty field
     */
    public const COL_OEDTWIORIGQTY = 'so_detail.OedtWiOrigQty';

    /**
     * the column name for the OedtMarginTot field
     */
    public const COL_OEDTMARGINTOT = 'so_detail.OedtMarginTot';

    /**
     * the column name for the OedtCoreCost field
     */
    public const COL_OEDTCORECOST = 'so_detail.OedtCoreCost';

    /**
     * the column name for the OedtItemRef field
     */
    public const COL_OEDTITEMREF = 'so_detail.OedtItemRef';

    /**
     * the column name for the OedtSac02ReturnCode field
     */
    public const COL_OEDTSAC02RETURNCODE = 'so_detail.OedtSac02ReturnCode';

    /**
     * the column name for the OedtWgTaxCode field
     */
    public const COL_OEDTWGTAXCODE = 'so_detail.OedtWgTaxCode';

    /**
     * the column name for the OedtWgPrice field
     */
    public const COL_OEDTWGPRICE = 'so_detail.OedtWgPrice';

    /**
     * the column name for the OedtWgTot field
     */
    public const COL_OEDTWGTOT = 'so_detail.OedtWgTot';

    /**
     * the column name for the OedtCntrQty field
     */
    public const COL_OEDTCNTRQTY = 'so_detail.OedtCntrQty';

    /**
     * the column name for the OedtConfirmCode field
     */
    public const COL_OEDTCONFIRMCODE = 'so_detail.OedtConfirmCode';

    /**
     * the column name for the OedtPicked field
     */
    public const COL_OEDTPICKED = 'so_detail.OedtPicked';

    /**
     * the column name for the OedtOrigRqstDate field
     */
    public const COL_OEDTORIGRQSTDATE = 'so_detail.OedtOrigRqstDate';

    /**
     * the column name for the OedtFabLock field
     */
    public const COL_OEDTFABLOCK = 'so_detail.OedtFabLock';

    /**
     * the column name for the OedtLabelPrinted field
     */
    public const COL_OEDTLABELPRINTED = 'so_detail.OedtLabelPrinted';

    /**
     * the column name for the OedtQuoteId field
     */
    public const COL_OEDTQUOTEID = 'so_detail.OedtQuoteId';

    /**
     * the column name for the OedtInvPrinted field
     */
    public const COL_OEDTINVPRINTED = 'so_detail.OedtInvPrinted';

    /**
     * the column name for the OedtStockCheck field
     */
    public const COL_OEDTSTOCKCHECK = 'so_detail.OedtStockCheck';

    /**
     * the column name for the OedtShouldWeSplit field
     */
    public const COL_OEDTSHOULDWESPLIT = 'so_detail.OedtShouldWeSplit';

    /**
     * the column name for the OedtCofcReqd field
     */
    public const COL_OEDTCOFCREQD = 'so_detail.OedtCofcReqd';

    /**
     * the column name for the OedtAckCode field
     */
    public const COL_OEDTACKCODE = 'so_detail.OedtAckCode';

    /**
     * the column name for the OedtWiBordNbr field
     */
    public const COL_OEDTWIBORDNBR = 'so_detail.OedtWiBordNbr';

    /**
     * the column name for the OedtCertHistOrdr field
     */
    public const COL_OEDTCERTHISTORDR = 'so_detail.OedtCertHistOrdr';

    /**
     * the column name for the OedtCertHistLine field
     */
    public const COL_OEDTCERTHISTLINE = 'so_detail.OedtCertHistLine';

    /**
     * the column name for the OedtOrdrdAsItemId field
     */
    public const COL_OEDTORDRDASITEMID = 'so_detail.OedtOrdrdAsItemId';

    /**
     * the column name for the OedtWiBatch1Nbr field
     */
    public const COL_OEDTWIBATCH1NBR = 'so_detail.OedtWiBatch1Nbr';

    /**
     * the column name for the OedtWiBatch1Qty field
     */
    public const COL_OEDTWIBATCH1QTY = 'so_detail.OedtWiBatch1Qty';

    /**
     * the column name for the OedtWiBatch1Stat field
     */
    public const COL_OEDTWIBATCH1STAT = 'so_detail.OedtWiBatch1Stat';

    /**
     * the column name for the OedtRgaNbr field
     */
    public const COL_OEDTRGANBR = 'so_detail.OedtRgaNbr';

    /**
     * the column name for the OedtOrigPric field
     */
    public const COL_OEDTORIGPRIC = 'so_detail.OedtOrigPric';

    /**
     * the column name for the OedtRefLineNbr field
     */
    public const COL_OEDTREFLINENBR = 'so_detail.OedtRefLineNbr';

    /**
     * the column name for the OedtBinLocn field
     */
    public const COL_OEDTBINLOCN = 'so_detail.OedtBinLocn';

    /**
     * the column name for the OedtAcSuplyWhse field
     */
    public const COL_OEDTACSUPLYWHSE = 'so_detail.OedtAcSuplyWhse';

    /**
     * the column name for the OedtAcPricDate field
     */
    public const COL_OEDTACPRICDATE = 'so_detail.OedtAcPricDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_detail.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_detail.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_detail.dummy';

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
        self::TYPE_PHPNAME       => ['Oehdnbr', 'Oedtline', 'Inititemnbr', 'Oedtdesc', 'Oedtdesc2', 'Intbwhse', 'Oedtrqstdate', 'Oedtcancdate', 'Oedtshipdate', 'Oedtspecordr', 'Artbctaxcode', 'Oedtqtyord', 'Oedtqtyship', 'Oedtqtyshiptot', 'Oedtqtybord', 'Oedtpric', 'Oedtcost', 'Oedttaxpcttot', 'Oedtprictot', 'Oedtcosttot', 'Oedtspcommpct', 'Oedtbrkncaseqty', 'Oedtbin', 'Oedtpersonalcd', 'Oedtacdisc1', 'Oedtacdisc2', 'Oedtacdisc3', 'Oedtacdisc4', 'Oedtlmwipnbr', 'Oedtcorepric', 'Oedtasstcode', 'Oedtasstqty', 'Oedtlistpric', 'Oedtstancost', 'Oedtvenditemjob', 'Oedtnsvendid', 'Oedtnsitemgrup', 'Oedtusecode', 'Oedtnsshipfromid', 'Oedtasstovrd', 'Oedtpricovrd', 'Oedtpickflag', 'Oedtmstrtaxcode1', 'Oedtmstrtaxpct1', 'Oedtmstrtaxcode2', 'Oedtmstrtaxpct2', 'Oedtmstrtaxcode3', 'Oedtmstrtaxpct3', 'Oedtmstrtaxcode4', 'Oedtmstrtaxpct4', 'Oedtmstrtaxcode5', 'Oedtmstrtaxpct5', 'Oedtmstrtaxcode6', 'Oedtmstrtaxpct6', 'Oedtmstrtaxcode7', 'Oedtmstrtaxpct7', 'Oedtmstrtaxcode8', 'Oedtmstrtaxpct8', 'Oedtmstrtaxcode9', 'Oedtmstrtaxpct9', 'Oedtbinarea', 'Oedtsplitline', 'Oedtlostreas', 'Oedtorigline', 'Oedtcustcrssref', 'Oedtuom', 'Oedtshipflag', 'Oedtkitflag', 'Oedtkititemnbr', 'Oedtbfcost', 'Oedtbfmsgcode', 'Oedtbfcosttot', 'Oedtlmbulkpric', 'Oedtlmmtrxpkgpric', 'Oedtlmmtrxbulkpric', 'Oedtlmcontractpric', 'Oedtwghttot', 'Oedtordras', 'Oedtpodetlinenbr', 'Oedtqtytoship', 'Oedtponbr', 'Oedtporef', 'Oedtfrtin', 'Oedtfrtinentered', 'Oedtprodcmplt', 'Oedterflag', 'Oedtorigitem', 'Oedtsubflag', 'Oedtediincomingseq', 'Oedtspordpoline', 'Oedtcatlgid', 'Oedtdesigncd', 'Oedtdiscpct', 'Oedttaxamt', 'Oedtxusage', 'Oedtrqtslock', 'Oedtfreshfrozen', 'Oedtcoreflag', 'Oedtnssalesacct', 'Oedtcertreqd', 'Oedtaddonsales', 'Oedtbordflag', 'Oedttempgrove', 'Oedtgrovedisc', 'Oedtoffinvc', 'Inititemgrup', 'Apvevendid', 'Oedtacct', 'Oedtloadtot', 'Oedtpickedqty', 'Oedtwiorigqty', 'Oedtmargintot', 'Oedtcorecost', 'Oedtitemref', 'Oedtsac02returncode', 'Oedtwgtaxcode', 'Oedtwgprice', 'Oedtwgtot', 'Oedtcntrqty', 'Oedtconfirmcode', 'Oedtpicked', 'Oedtorigrqstdate', 'Oedtfablock', 'Oedtlabelprinted', 'Oedtquoteid', 'Oedtinvprinted', 'Oedtstockcheck', 'Oedtshouldwesplit', 'Oedtcofcreqd', 'Oedtackcode', 'Oedtwibordnbr', 'Oedtcerthistordr', 'Oedtcerthistline', 'Oedtordrdasitemid', 'Oedtwibatch1nbr', 'Oedtwibatch1qty', 'Oedtwibatch1stat', 'Oedtrganbr', 'Oedtorigpric', 'Oedtreflinenbr', 'Oedtbinlocn', 'Oedtacsuplywhse', 'Oedtacpricdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['oehdnbr', 'oedtline', 'inititemnbr', 'oedtdesc', 'oedtdesc2', 'intbwhse', 'oedtrqstdate', 'oedtcancdate', 'oedtshipdate', 'oedtspecordr', 'artbctaxcode', 'oedtqtyord', 'oedtqtyship', 'oedtqtyshiptot', 'oedtqtybord', 'oedtpric', 'oedtcost', 'oedttaxpcttot', 'oedtprictot', 'oedtcosttot', 'oedtspcommpct', 'oedtbrkncaseqty', 'oedtbin', 'oedtpersonalcd', 'oedtacdisc1', 'oedtacdisc2', 'oedtacdisc3', 'oedtacdisc4', 'oedtlmwipnbr', 'oedtcorepric', 'oedtasstcode', 'oedtasstqty', 'oedtlistpric', 'oedtstancost', 'oedtvenditemjob', 'oedtnsvendid', 'oedtnsitemgrup', 'oedtusecode', 'oedtnsshipfromid', 'oedtasstovrd', 'oedtpricovrd', 'oedtpickflag', 'oedtmstrtaxcode1', 'oedtmstrtaxpct1', 'oedtmstrtaxcode2', 'oedtmstrtaxpct2', 'oedtmstrtaxcode3', 'oedtmstrtaxpct3', 'oedtmstrtaxcode4', 'oedtmstrtaxpct4', 'oedtmstrtaxcode5', 'oedtmstrtaxpct5', 'oedtmstrtaxcode6', 'oedtmstrtaxpct6', 'oedtmstrtaxcode7', 'oedtmstrtaxpct7', 'oedtmstrtaxcode8', 'oedtmstrtaxpct8', 'oedtmstrtaxcode9', 'oedtmstrtaxpct9', 'oedtbinarea', 'oedtsplitline', 'oedtlostreas', 'oedtorigline', 'oedtcustcrssref', 'oedtuom', 'oedtshipflag', 'oedtkitflag', 'oedtkititemnbr', 'oedtbfcost', 'oedtbfmsgcode', 'oedtbfcosttot', 'oedtlmbulkpric', 'oedtlmmtrxpkgpric', 'oedtlmmtrxbulkpric', 'oedtlmcontractpric', 'oedtwghttot', 'oedtordras', 'oedtpodetlinenbr', 'oedtqtytoship', 'oedtponbr', 'oedtporef', 'oedtfrtin', 'oedtfrtinentered', 'oedtprodcmplt', 'oedterflag', 'oedtorigitem', 'oedtsubflag', 'oedtediincomingseq', 'oedtspordpoline', 'oedtcatlgid', 'oedtdesigncd', 'oedtdiscpct', 'oedttaxamt', 'oedtxusage', 'oedtrqtslock', 'oedtfreshfrozen', 'oedtcoreflag', 'oedtnssalesacct', 'oedtcertreqd', 'oedtaddonsales', 'oedtbordflag', 'oedttempgrove', 'oedtgrovedisc', 'oedtoffinvc', 'inititemgrup', 'apvevendid', 'oedtacct', 'oedtloadtot', 'oedtpickedqty', 'oedtwiorigqty', 'oedtmargintot', 'oedtcorecost', 'oedtitemref', 'oedtsac02returncode', 'oedtwgtaxcode', 'oedtwgprice', 'oedtwgtot', 'oedtcntrqty', 'oedtconfirmcode', 'oedtpicked', 'oedtorigrqstdate', 'oedtfablock', 'oedtlabelprinted', 'oedtquoteid', 'oedtinvprinted', 'oedtstockcheck', 'oedtshouldwesplit', 'oedtcofcreqd', 'oedtackcode', 'oedtwibordnbr', 'oedtcerthistordr', 'oedtcerthistline', 'oedtordrdasitemid', 'oedtwibatch1nbr', 'oedtwibatch1qty', 'oedtwibatch1stat', 'oedtrganbr', 'oedtorigpric', 'oedtreflinenbr', 'oedtbinlocn', 'oedtacsuplywhse', 'oedtacpricdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [SalesOrderDetailTableMap::COL_OEHDNBR, SalesOrderDetailTableMap::COL_OEDTLINE, SalesOrderDetailTableMap::COL_INITITEMNBR, SalesOrderDetailTableMap::COL_OEDTDESC, SalesOrderDetailTableMap::COL_OEDTDESC2, SalesOrderDetailTableMap::COL_INTBWHSE, SalesOrderDetailTableMap::COL_OEDTRQSTDATE, SalesOrderDetailTableMap::COL_OEDTCANCDATE, SalesOrderDetailTableMap::COL_OEDTSHIPDATE, SalesOrderDetailTableMap::COL_OEDTSPECORDR, SalesOrderDetailTableMap::COL_ARTBCTAXCODE, SalesOrderDetailTableMap::COL_OEDTQTYORD, SalesOrderDetailTableMap::COL_OEDTQTYSHIP, SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT, SalesOrderDetailTableMap::COL_OEDTQTYBORD, SalesOrderDetailTableMap::COL_OEDTPRIC, SalesOrderDetailTableMap::COL_OEDTCOST, SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT, SalesOrderDetailTableMap::COL_OEDTPRICTOT, SalesOrderDetailTableMap::COL_OEDTCOSTTOT, SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT, SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY, SalesOrderDetailTableMap::COL_OEDTBIN, SalesOrderDetailTableMap::COL_OEDTPERSONALCD, SalesOrderDetailTableMap::COL_OEDTACDISC1, SalesOrderDetailTableMap::COL_OEDTACDISC2, SalesOrderDetailTableMap::COL_OEDTACDISC3, SalesOrderDetailTableMap::COL_OEDTACDISC4, SalesOrderDetailTableMap::COL_OEDTLMWIPNBR, SalesOrderDetailTableMap::COL_OEDTCOREPRIC, SalesOrderDetailTableMap::COL_OEDTASSTCODE, SalesOrderDetailTableMap::COL_OEDTASSTQTY, SalesOrderDetailTableMap::COL_OEDTLISTPRIC, SalesOrderDetailTableMap::COL_OEDTSTANCOST, SalesOrderDetailTableMap::COL_OEDTVENDITEMJOB, SalesOrderDetailTableMap::COL_OEDTNSVENDID, SalesOrderDetailTableMap::COL_OEDTNSITEMGRUP, SalesOrderDetailTableMap::COL_OEDTUSECODE, SalesOrderDetailTableMap::COL_OEDTNSSHIPFROMID, SalesOrderDetailTableMap::COL_OEDTASSTOVRD, SalesOrderDetailTableMap::COL_OEDTPRICOVRD, SalesOrderDetailTableMap::COL_OEDTPICKFLAG, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE1, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE2, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE3, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE4, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE5, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE6, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE7, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE8, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE9, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9, SalesOrderDetailTableMap::COL_OEDTBINAREA, SalesOrderDetailTableMap::COL_OEDTSPLITLINE, SalesOrderDetailTableMap::COL_OEDTLOSTREAS, SalesOrderDetailTableMap::COL_OEDTORIGLINE, SalesOrderDetailTableMap::COL_OEDTCUSTCRSSREF, SalesOrderDetailTableMap::COL_OEDTUOM, SalesOrderDetailTableMap::COL_OEDTSHIPFLAG, SalesOrderDetailTableMap::COL_OEDTKITFLAG, SalesOrderDetailTableMap::COL_OEDTKITITEMNBR, SalesOrderDetailTableMap::COL_OEDTBFCOST, SalesOrderDetailTableMap::COL_OEDTBFMSGCODE, SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT, SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC, SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC, SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC, SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC, SalesOrderDetailTableMap::COL_OEDTWGHTTOT, SalesOrderDetailTableMap::COL_OEDTORDRAS, SalesOrderDetailTableMap::COL_OEDTPODETLINENBR, SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP, SalesOrderDetailTableMap::COL_OEDTPONBR, SalesOrderDetailTableMap::COL_OEDTPOREF, SalesOrderDetailTableMap::COL_OEDTFRTIN, SalesOrderDetailTableMap::COL_OEDTFRTINENTERED, SalesOrderDetailTableMap::COL_OEDTPRODCMPLT, SalesOrderDetailTableMap::COL_OEDTERFLAG, SalesOrderDetailTableMap::COL_OEDTORIGITEM, SalesOrderDetailTableMap::COL_OEDTSUBFLAG, SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ, SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE, SalesOrderDetailTableMap::COL_OEDTCATLGID, SalesOrderDetailTableMap::COL_OEDTDESIGNCD, SalesOrderDetailTableMap::COL_OEDTDISCPCT, SalesOrderDetailTableMap::COL_OEDTTAXAMT, SalesOrderDetailTableMap::COL_OEDTXUSAGE, SalesOrderDetailTableMap::COL_OEDTRQTSLOCK, SalesOrderDetailTableMap::COL_OEDTFRESHFROZEN, SalesOrderDetailTableMap::COL_OEDTCOREFLAG, SalesOrderDetailTableMap::COL_OEDTNSSALESACCT, SalesOrderDetailTableMap::COL_OEDTCERTREQD, SalesOrderDetailTableMap::COL_OEDTADDONSALES, SalesOrderDetailTableMap::COL_OEDTBORDFLAG, SalesOrderDetailTableMap::COL_OEDTTEMPGROVE, SalesOrderDetailTableMap::COL_OEDTGROVEDISC, SalesOrderDetailTableMap::COL_OEDTOFFINVC, SalesOrderDetailTableMap::COL_INITITEMGRUP, SalesOrderDetailTableMap::COL_APVEVENDID, SalesOrderDetailTableMap::COL_OEDTACCT, SalesOrderDetailTableMap::COL_OEDTLOADTOT, SalesOrderDetailTableMap::COL_OEDTPICKEDQTY, SalesOrderDetailTableMap::COL_OEDTWIORIGQTY, SalesOrderDetailTableMap::COL_OEDTMARGINTOT, SalesOrderDetailTableMap::COL_OEDTCORECOST, SalesOrderDetailTableMap::COL_OEDTITEMREF, SalesOrderDetailTableMap::COL_OEDTSAC02RETURNCODE, SalesOrderDetailTableMap::COL_OEDTWGTAXCODE, SalesOrderDetailTableMap::COL_OEDTWGPRICE, SalesOrderDetailTableMap::COL_OEDTWGTOT, SalesOrderDetailTableMap::COL_OEDTCNTRQTY, SalesOrderDetailTableMap::COL_OEDTCONFIRMCODE, SalesOrderDetailTableMap::COL_OEDTPICKED, SalesOrderDetailTableMap::COL_OEDTORIGRQSTDATE, SalesOrderDetailTableMap::COL_OEDTFABLOCK, SalesOrderDetailTableMap::COL_OEDTLABELPRINTED, SalesOrderDetailTableMap::COL_OEDTQUOTEID, SalesOrderDetailTableMap::COL_OEDTINVPRINTED, SalesOrderDetailTableMap::COL_OEDTSTOCKCHECK, SalesOrderDetailTableMap::COL_OEDTSHOULDWESPLIT, SalesOrderDetailTableMap::COL_OEDTCOFCREQD, SalesOrderDetailTableMap::COL_OEDTACKCODE, SalesOrderDetailTableMap::COL_OEDTWIBORDNBR, SalesOrderDetailTableMap::COL_OEDTCERTHISTORDR, SalesOrderDetailTableMap::COL_OEDTCERTHISTLINE, SalesOrderDetailTableMap::COL_OEDTORDRDASITEMID, SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR, SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY, SalesOrderDetailTableMap::COL_OEDTWIBATCH1STAT, SalesOrderDetailTableMap::COL_OEDTRGANBR, SalesOrderDetailTableMap::COL_OEDTORIGPRIC, SalesOrderDetailTableMap::COL_OEDTREFLINENBR, SalesOrderDetailTableMap::COL_OEDTBINLOCN, SalesOrderDetailTableMap::COL_OEDTACSUPLYWHSE, SalesOrderDetailTableMap::COL_OEDTACPRICDATE, SalesOrderDetailTableMap::COL_DATEUPDTD, SalesOrderDetailTableMap::COL_TIMEUPDTD, SalesOrderDetailTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['OehdNbr', 'OedtLine', 'InitItemNbr', 'OedtDesc', 'OedtDesc2', 'IntbWhse', 'OedtRqstDate', 'OedtCancDate', 'OedtShipDate', 'OedtSpecOrdr', 'ArtbCtaxCode', 'OedtQtyOrd', 'OedtQtyShip', 'OedtQtyShipTot', 'OedtQtyBord', 'OedtPric', 'OedtCost', 'OedtTaxPctTot', 'OedtPricTot', 'OedtCostTot', 'OedtSpCommPct', 'OedtBrknCaseQty', 'OedtBin', 'OedtPersonalCd', 'OedtAcDisc1', 'OedtAcDisc2', 'OedtAcDisc3', 'OedtAcDisc4', 'OedtLmWipNbr', 'OedtCorePric', 'OedtAsstCode', 'OedtAsstQty', 'OedtListPric', 'OedtStanCost', 'OedtVendItemJob', 'OedtNsVendId', 'OedtNsItemGrup', 'OedtUseCode', 'OedtNsShipFromId', 'OedtAsstOvrd', 'OedtPricOvrd', 'OedtPickFlag', 'OedtMstrTaxCode1', 'OedtMstrTaxPct1', 'OedtMstrTaxCode2', 'OedtMstrTaxPct2', 'OedtMstrTaxCode3', 'OedtMstrTaxPct3', 'OedtMstrTaxCode4', 'OedtMstrTaxPct4', 'OedtMstrTaxCode5', 'OedtMstrTaxPct5', 'OedtMstrTaxCode6', 'OedtMstrTaxPct6', 'OedtMstrTaxCode7', 'OedtMstrTaxPct7', 'OedtMstrTaxCode8', 'OedtMstrTaxPct8', 'OedtMstrTaxCode9', 'OedtMstrTaxPct9', 'OedtBinArea', 'OedtSplitLine', 'OedtLostReas', 'OedtOrigLine', 'OedtCustCrssRef', 'OedtUom', 'OedtShipFlag', 'OedtKitFlag', 'OedtKitItemNbr', 'OedtBfCost', 'OedtBfMsgCode', 'OedtBfCostTot', 'OedtLmBulkPric', 'OedtLmMtrxPkgPric', 'OedtLmMtrxBulkPric', 'OedtLmContractPric', 'OedtWghtTot', 'OedtOrdrAs', 'OedtPoDetLineNbr', 'OedtQtyToShip', 'OedtPoNbr', 'OedtPoRef', 'OedtFrtIn', 'OedtFrtInEntered', 'OedtProdCmplt', 'OedtErFlag', 'OedtOrigItem', 'OedtSubFlag', 'OedtEdiIncomingSeq', 'OedtSpordPoLine', 'OedtCatlgId', 'OedtDesignCd', 'OedtDiscPct', 'OedtTaxAmt', 'OedtXUsage', 'OedtRqtsLock', 'OedtFreshFrozen', 'OedtCoreFlag', 'OedtNsSalesAcct', 'OedtCertReqd', 'OedtAddOnSales', 'OedtBordFlag', 'OedtTempGrove', 'OedtGroveDisc', 'OedtOffInvc', 'InitItemGrup', 'ApveVendId', 'OedtAcct', 'OedtLoadTot', 'OedtPickedQty', 'OedtWiOrigQty', 'OedtMarginTot', 'OedtCoreCost', 'OedtItemRef', 'OedtSac02ReturnCode', 'OedtWgTaxCode', 'OedtWgPrice', 'OedtWgTot', 'OedtCntrQty', 'OedtConfirmCode', 'OedtPicked', 'OedtOrigRqstDate', 'OedtFabLock', 'OedtLabelPrinted', 'OedtQuoteId', 'OedtInvPrinted', 'OedtStockCheck', 'OedtShouldWeSplit', 'OedtCofcReqd', 'OedtAckCode', 'OedtWiBordNbr', 'OedtCertHistOrdr', 'OedtCertHistLine', 'OedtOrdrdAsItemId', 'OedtWiBatch1Nbr', 'OedtWiBatch1Qty', 'OedtWiBatch1Stat', 'OedtRgaNbr', 'OedtOrigPric', 'OedtRefLineNbr', 'OedtBinLocn', 'OedtAcSuplyWhse', 'OedtAcPricDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, ]
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
        self::TYPE_PHPNAME       => ['Oehdnbr' => 0, 'Oedtline' => 1, 'Inititemnbr' => 2, 'Oedtdesc' => 3, 'Oedtdesc2' => 4, 'Intbwhse' => 5, 'Oedtrqstdate' => 6, 'Oedtcancdate' => 7, 'Oedtshipdate' => 8, 'Oedtspecordr' => 9, 'Artbctaxcode' => 10, 'Oedtqtyord' => 11, 'Oedtqtyship' => 12, 'Oedtqtyshiptot' => 13, 'Oedtqtybord' => 14, 'Oedtpric' => 15, 'Oedtcost' => 16, 'Oedttaxpcttot' => 17, 'Oedtprictot' => 18, 'Oedtcosttot' => 19, 'Oedtspcommpct' => 20, 'Oedtbrkncaseqty' => 21, 'Oedtbin' => 22, 'Oedtpersonalcd' => 23, 'Oedtacdisc1' => 24, 'Oedtacdisc2' => 25, 'Oedtacdisc3' => 26, 'Oedtacdisc4' => 27, 'Oedtlmwipnbr' => 28, 'Oedtcorepric' => 29, 'Oedtasstcode' => 30, 'Oedtasstqty' => 31, 'Oedtlistpric' => 32, 'Oedtstancost' => 33, 'Oedtvenditemjob' => 34, 'Oedtnsvendid' => 35, 'Oedtnsitemgrup' => 36, 'Oedtusecode' => 37, 'Oedtnsshipfromid' => 38, 'Oedtasstovrd' => 39, 'Oedtpricovrd' => 40, 'Oedtpickflag' => 41, 'Oedtmstrtaxcode1' => 42, 'Oedtmstrtaxpct1' => 43, 'Oedtmstrtaxcode2' => 44, 'Oedtmstrtaxpct2' => 45, 'Oedtmstrtaxcode3' => 46, 'Oedtmstrtaxpct3' => 47, 'Oedtmstrtaxcode4' => 48, 'Oedtmstrtaxpct4' => 49, 'Oedtmstrtaxcode5' => 50, 'Oedtmstrtaxpct5' => 51, 'Oedtmstrtaxcode6' => 52, 'Oedtmstrtaxpct6' => 53, 'Oedtmstrtaxcode7' => 54, 'Oedtmstrtaxpct7' => 55, 'Oedtmstrtaxcode8' => 56, 'Oedtmstrtaxpct8' => 57, 'Oedtmstrtaxcode9' => 58, 'Oedtmstrtaxpct9' => 59, 'Oedtbinarea' => 60, 'Oedtsplitline' => 61, 'Oedtlostreas' => 62, 'Oedtorigline' => 63, 'Oedtcustcrssref' => 64, 'Oedtuom' => 65, 'Oedtshipflag' => 66, 'Oedtkitflag' => 67, 'Oedtkititemnbr' => 68, 'Oedtbfcost' => 69, 'Oedtbfmsgcode' => 70, 'Oedtbfcosttot' => 71, 'Oedtlmbulkpric' => 72, 'Oedtlmmtrxpkgpric' => 73, 'Oedtlmmtrxbulkpric' => 74, 'Oedtlmcontractpric' => 75, 'Oedtwghttot' => 76, 'Oedtordras' => 77, 'Oedtpodetlinenbr' => 78, 'Oedtqtytoship' => 79, 'Oedtponbr' => 80, 'Oedtporef' => 81, 'Oedtfrtin' => 82, 'Oedtfrtinentered' => 83, 'Oedtprodcmplt' => 84, 'Oedterflag' => 85, 'Oedtorigitem' => 86, 'Oedtsubflag' => 87, 'Oedtediincomingseq' => 88, 'Oedtspordpoline' => 89, 'Oedtcatlgid' => 90, 'Oedtdesigncd' => 91, 'Oedtdiscpct' => 92, 'Oedttaxamt' => 93, 'Oedtxusage' => 94, 'Oedtrqtslock' => 95, 'Oedtfreshfrozen' => 96, 'Oedtcoreflag' => 97, 'Oedtnssalesacct' => 98, 'Oedtcertreqd' => 99, 'Oedtaddonsales' => 100, 'Oedtbordflag' => 101, 'Oedttempgrove' => 102, 'Oedtgrovedisc' => 103, 'Oedtoffinvc' => 104, 'Inititemgrup' => 105, 'Apvevendid' => 106, 'Oedtacct' => 107, 'Oedtloadtot' => 108, 'Oedtpickedqty' => 109, 'Oedtwiorigqty' => 110, 'Oedtmargintot' => 111, 'Oedtcorecost' => 112, 'Oedtitemref' => 113, 'Oedtsac02returncode' => 114, 'Oedtwgtaxcode' => 115, 'Oedtwgprice' => 116, 'Oedtwgtot' => 117, 'Oedtcntrqty' => 118, 'Oedtconfirmcode' => 119, 'Oedtpicked' => 120, 'Oedtorigrqstdate' => 121, 'Oedtfablock' => 122, 'Oedtlabelprinted' => 123, 'Oedtquoteid' => 124, 'Oedtinvprinted' => 125, 'Oedtstockcheck' => 126, 'Oedtshouldwesplit' => 127, 'Oedtcofcreqd' => 128, 'Oedtackcode' => 129, 'Oedtwibordnbr' => 130, 'Oedtcerthistordr' => 131, 'Oedtcerthistline' => 132, 'Oedtordrdasitemid' => 133, 'Oedtwibatch1nbr' => 134, 'Oedtwibatch1qty' => 135, 'Oedtwibatch1stat' => 136, 'Oedtrganbr' => 137, 'Oedtorigpric' => 138, 'Oedtreflinenbr' => 139, 'Oedtbinlocn' => 140, 'Oedtacsuplywhse' => 141, 'Oedtacpricdate' => 142, 'Dateupdtd' => 143, 'Timeupdtd' => 144, 'Dummy' => 145, ],
        self::TYPE_CAMELNAME     => ['oehdnbr' => 0, 'oedtline' => 1, 'inititemnbr' => 2, 'oedtdesc' => 3, 'oedtdesc2' => 4, 'intbwhse' => 5, 'oedtrqstdate' => 6, 'oedtcancdate' => 7, 'oedtshipdate' => 8, 'oedtspecordr' => 9, 'artbctaxcode' => 10, 'oedtqtyord' => 11, 'oedtqtyship' => 12, 'oedtqtyshiptot' => 13, 'oedtqtybord' => 14, 'oedtpric' => 15, 'oedtcost' => 16, 'oedttaxpcttot' => 17, 'oedtprictot' => 18, 'oedtcosttot' => 19, 'oedtspcommpct' => 20, 'oedtbrkncaseqty' => 21, 'oedtbin' => 22, 'oedtpersonalcd' => 23, 'oedtacdisc1' => 24, 'oedtacdisc2' => 25, 'oedtacdisc3' => 26, 'oedtacdisc4' => 27, 'oedtlmwipnbr' => 28, 'oedtcorepric' => 29, 'oedtasstcode' => 30, 'oedtasstqty' => 31, 'oedtlistpric' => 32, 'oedtstancost' => 33, 'oedtvenditemjob' => 34, 'oedtnsvendid' => 35, 'oedtnsitemgrup' => 36, 'oedtusecode' => 37, 'oedtnsshipfromid' => 38, 'oedtasstovrd' => 39, 'oedtpricovrd' => 40, 'oedtpickflag' => 41, 'oedtmstrtaxcode1' => 42, 'oedtmstrtaxpct1' => 43, 'oedtmstrtaxcode2' => 44, 'oedtmstrtaxpct2' => 45, 'oedtmstrtaxcode3' => 46, 'oedtmstrtaxpct3' => 47, 'oedtmstrtaxcode4' => 48, 'oedtmstrtaxpct4' => 49, 'oedtmstrtaxcode5' => 50, 'oedtmstrtaxpct5' => 51, 'oedtmstrtaxcode6' => 52, 'oedtmstrtaxpct6' => 53, 'oedtmstrtaxcode7' => 54, 'oedtmstrtaxpct7' => 55, 'oedtmstrtaxcode8' => 56, 'oedtmstrtaxpct8' => 57, 'oedtmstrtaxcode9' => 58, 'oedtmstrtaxpct9' => 59, 'oedtbinarea' => 60, 'oedtsplitline' => 61, 'oedtlostreas' => 62, 'oedtorigline' => 63, 'oedtcustcrssref' => 64, 'oedtuom' => 65, 'oedtshipflag' => 66, 'oedtkitflag' => 67, 'oedtkititemnbr' => 68, 'oedtbfcost' => 69, 'oedtbfmsgcode' => 70, 'oedtbfcosttot' => 71, 'oedtlmbulkpric' => 72, 'oedtlmmtrxpkgpric' => 73, 'oedtlmmtrxbulkpric' => 74, 'oedtlmcontractpric' => 75, 'oedtwghttot' => 76, 'oedtordras' => 77, 'oedtpodetlinenbr' => 78, 'oedtqtytoship' => 79, 'oedtponbr' => 80, 'oedtporef' => 81, 'oedtfrtin' => 82, 'oedtfrtinentered' => 83, 'oedtprodcmplt' => 84, 'oedterflag' => 85, 'oedtorigitem' => 86, 'oedtsubflag' => 87, 'oedtediincomingseq' => 88, 'oedtspordpoline' => 89, 'oedtcatlgid' => 90, 'oedtdesigncd' => 91, 'oedtdiscpct' => 92, 'oedttaxamt' => 93, 'oedtxusage' => 94, 'oedtrqtslock' => 95, 'oedtfreshfrozen' => 96, 'oedtcoreflag' => 97, 'oedtnssalesacct' => 98, 'oedtcertreqd' => 99, 'oedtaddonsales' => 100, 'oedtbordflag' => 101, 'oedttempgrove' => 102, 'oedtgrovedisc' => 103, 'oedtoffinvc' => 104, 'inititemgrup' => 105, 'apvevendid' => 106, 'oedtacct' => 107, 'oedtloadtot' => 108, 'oedtpickedqty' => 109, 'oedtwiorigqty' => 110, 'oedtmargintot' => 111, 'oedtcorecost' => 112, 'oedtitemref' => 113, 'oedtsac02returncode' => 114, 'oedtwgtaxcode' => 115, 'oedtwgprice' => 116, 'oedtwgtot' => 117, 'oedtcntrqty' => 118, 'oedtconfirmcode' => 119, 'oedtpicked' => 120, 'oedtorigrqstdate' => 121, 'oedtfablock' => 122, 'oedtlabelprinted' => 123, 'oedtquoteid' => 124, 'oedtinvprinted' => 125, 'oedtstockcheck' => 126, 'oedtshouldwesplit' => 127, 'oedtcofcreqd' => 128, 'oedtackcode' => 129, 'oedtwibordnbr' => 130, 'oedtcerthistordr' => 131, 'oedtcerthistline' => 132, 'oedtordrdasitemid' => 133, 'oedtwibatch1nbr' => 134, 'oedtwibatch1qty' => 135, 'oedtwibatch1stat' => 136, 'oedtrganbr' => 137, 'oedtorigpric' => 138, 'oedtreflinenbr' => 139, 'oedtbinlocn' => 140, 'oedtacsuplywhse' => 141, 'oedtacpricdate' => 142, 'dateupdtd' => 143, 'timeupdtd' => 144, 'dummy' => 145, ],
        self::TYPE_COLNAME       => [SalesOrderDetailTableMap::COL_OEHDNBR => 0, SalesOrderDetailTableMap::COL_OEDTLINE => 1, SalesOrderDetailTableMap::COL_INITITEMNBR => 2, SalesOrderDetailTableMap::COL_OEDTDESC => 3, SalesOrderDetailTableMap::COL_OEDTDESC2 => 4, SalesOrderDetailTableMap::COL_INTBWHSE => 5, SalesOrderDetailTableMap::COL_OEDTRQSTDATE => 6, SalesOrderDetailTableMap::COL_OEDTCANCDATE => 7, SalesOrderDetailTableMap::COL_OEDTSHIPDATE => 8, SalesOrderDetailTableMap::COL_OEDTSPECORDR => 9, SalesOrderDetailTableMap::COL_ARTBCTAXCODE => 10, SalesOrderDetailTableMap::COL_OEDTQTYORD => 11, SalesOrderDetailTableMap::COL_OEDTQTYSHIP => 12, SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT => 13, SalesOrderDetailTableMap::COL_OEDTQTYBORD => 14, SalesOrderDetailTableMap::COL_OEDTPRIC => 15, SalesOrderDetailTableMap::COL_OEDTCOST => 16, SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT => 17, SalesOrderDetailTableMap::COL_OEDTPRICTOT => 18, SalesOrderDetailTableMap::COL_OEDTCOSTTOT => 19, SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT => 20, SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY => 21, SalesOrderDetailTableMap::COL_OEDTBIN => 22, SalesOrderDetailTableMap::COL_OEDTPERSONALCD => 23, SalesOrderDetailTableMap::COL_OEDTACDISC1 => 24, SalesOrderDetailTableMap::COL_OEDTACDISC2 => 25, SalesOrderDetailTableMap::COL_OEDTACDISC3 => 26, SalesOrderDetailTableMap::COL_OEDTACDISC4 => 27, SalesOrderDetailTableMap::COL_OEDTLMWIPNBR => 28, SalesOrderDetailTableMap::COL_OEDTCOREPRIC => 29, SalesOrderDetailTableMap::COL_OEDTASSTCODE => 30, SalesOrderDetailTableMap::COL_OEDTASSTQTY => 31, SalesOrderDetailTableMap::COL_OEDTLISTPRIC => 32, SalesOrderDetailTableMap::COL_OEDTSTANCOST => 33, SalesOrderDetailTableMap::COL_OEDTVENDITEMJOB => 34, SalesOrderDetailTableMap::COL_OEDTNSVENDID => 35, SalesOrderDetailTableMap::COL_OEDTNSITEMGRUP => 36, SalesOrderDetailTableMap::COL_OEDTUSECODE => 37, SalesOrderDetailTableMap::COL_OEDTNSSHIPFROMID => 38, SalesOrderDetailTableMap::COL_OEDTASSTOVRD => 39, SalesOrderDetailTableMap::COL_OEDTPRICOVRD => 40, SalesOrderDetailTableMap::COL_OEDTPICKFLAG => 41, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE1 => 42, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1 => 43, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE2 => 44, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2 => 45, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE3 => 46, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3 => 47, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE4 => 48, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4 => 49, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE5 => 50, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5 => 51, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE6 => 52, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6 => 53, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE7 => 54, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7 => 55, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE8 => 56, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8 => 57, SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE9 => 58, SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9 => 59, SalesOrderDetailTableMap::COL_OEDTBINAREA => 60, SalesOrderDetailTableMap::COL_OEDTSPLITLINE => 61, SalesOrderDetailTableMap::COL_OEDTLOSTREAS => 62, SalesOrderDetailTableMap::COL_OEDTORIGLINE => 63, SalesOrderDetailTableMap::COL_OEDTCUSTCRSSREF => 64, SalesOrderDetailTableMap::COL_OEDTUOM => 65, SalesOrderDetailTableMap::COL_OEDTSHIPFLAG => 66, SalesOrderDetailTableMap::COL_OEDTKITFLAG => 67, SalesOrderDetailTableMap::COL_OEDTKITITEMNBR => 68, SalesOrderDetailTableMap::COL_OEDTBFCOST => 69, SalesOrderDetailTableMap::COL_OEDTBFMSGCODE => 70, SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT => 71, SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC => 72, SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC => 73, SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC => 74, SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC => 75, SalesOrderDetailTableMap::COL_OEDTWGHTTOT => 76, SalesOrderDetailTableMap::COL_OEDTORDRAS => 77, SalesOrderDetailTableMap::COL_OEDTPODETLINENBR => 78, SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP => 79, SalesOrderDetailTableMap::COL_OEDTPONBR => 80, SalesOrderDetailTableMap::COL_OEDTPOREF => 81, SalesOrderDetailTableMap::COL_OEDTFRTIN => 82, SalesOrderDetailTableMap::COL_OEDTFRTINENTERED => 83, SalesOrderDetailTableMap::COL_OEDTPRODCMPLT => 84, SalesOrderDetailTableMap::COL_OEDTERFLAG => 85, SalesOrderDetailTableMap::COL_OEDTORIGITEM => 86, SalesOrderDetailTableMap::COL_OEDTSUBFLAG => 87, SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ => 88, SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE => 89, SalesOrderDetailTableMap::COL_OEDTCATLGID => 90, SalesOrderDetailTableMap::COL_OEDTDESIGNCD => 91, SalesOrderDetailTableMap::COL_OEDTDISCPCT => 92, SalesOrderDetailTableMap::COL_OEDTTAXAMT => 93, SalesOrderDetailTableMap::COL_OEDTXUSAGE => 94, SalesOrderDetailTableMap::COL_OEDTRQTSLOCK => 95, SalesOrderDetailTableMap::COL_OEDTFRESHFROZEN => 96, SalesOrderDetailTableMap::COL_OEDTCOREFLAG => 97, SalesOrderDetailTableMap::COL_OEDTNSSALESACCT => 98, SalesOrderDetailTableMap::COL_OEDTCERTREQD => 99, SalesOrderDetailTableMap::COL_OEDTADDONSALES => 100, SalesOrderDetailTableMap::COL_OEDTBORDFLAG => 101, SalesOrderDetailTableMap::COL_OEDTTEMPGROVE => 102, SalesOrderDetailTableMap::COL_OEDTGROVEDISC => 103, SalesOrderDetailTableMap::COL_OEDTOFFINVC => 104, SalesOrderDetailTableMap::COL_INITITEMGRUP => 105, SalesOrderDetailTableMap::COL_APVEVENDID => 106, SalesOrderDetailTableMap::COL_OEDTACCT => 107, SalesOrderDetailTableMap::COL_OEDTLOADTOT => 108, SalesOrderDetailTableMap::COL_OEDTPICKEDQTY => 109, SalesOrderDetailTableMap::COL_OEDTWIORIGQTY => 110, SalesOrderDetailTableMap::COL_OEDTMARGINTOT => 111, SalesOrderDetailTableMap::COL_OEDTCORECOST => 112, SalesOrderDetailTableMap::COL_OEDTITEMREF => 113, SalesOrderDetailTableMap::COL_OEDTSAC02RETURNCODE => 114, SalesOrderDetailTableMap::COL_OEDTWGTAXCODE => 115, SalesOrderDetailTableMap::COL_OEDTWGPRICE => 116, SalesOrderDetailTableMap::COL_OEDTWGTOT => 117, SalesOrderDetailTableMap::COL_OEDTCNTRQTY => 118, SalesOrderDetailTableMap::COL_OEDTCONFIRMCODE => 119, SalesOrderDetailTableMap::COL_OEDTPICKED => 120, SalesOrderDetailTableMap::COL_OEDTORIGRQSTDATE => 121, SalesOrderDetailTableMap::COL_OEDTFABLOCK => 122, SalesOrderDetailTableMap::COL_OEDTLABELPRINTED => 123, SalesOrderDetailTableMap::COL_OEDTQUOTEID => 124, SalesOrderDetailTableMap::COL_OEDTINVPRINTED => 125, SalesOrderDetailTableMap::COL_OEDTSTOCKCHECK => 126, SalesOrderDetailTableMap::COL_OEDTSHOULDWESPLIT => 127, SalesOrderDetailTableMap::COL_OEDTCOFCREQD => 128, SalesOrderDetailTableMap::COL_OEDTACKCODE => 129, SalesOrderDetailTableMap::COL_OEDTWIBORDNBR => 130, SalesOrderDetailTableMap::COL_OEDTCERTHISTORDR => 131, SalesOrderDetailTableMap::COL_OEDTCERTHISTLINE => 132, SalesOrderDetailTableMap::COL_OEDTORDRDASITEMID => 133, SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR => 134, SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY => 135, SalesOrderDetailTableMap::COL_OEDTWIBATCH1STAT => 136, SalesOrderDetailTableMap::COL_OEDTRGANBR => 137, SalesOrderDetailTableMap::COL_OEDTORIGPRIC => 138, SalesOrderDetailTableMap::COL_OEDTREFLINENBR => 139, SalesOrderDetailTableMap::COL_OEDTBINLOCN => 140, SalesOrderDetailTableMap::COL_OEDTACSUPLYWHSE => 141, SalesOrderDetailTableMap::COL_OEDTACPRICDATE => 142, SalesOrderDetailTableMap::COL_DATEUPDTD => 143, SalesOrderDetailTableMap::COL_TIMEUPDTD => 144, SalesOrderDetailTableMap::COL_DUMMY => 145, ],
        self::TYPE_FIELDNAME     => ['OehdNbr' => 0, 'OedtLine' => 1, 'InitItemNbr' => 2, 'OedtDesc' => 3, 'OedtDesc2' => 4, 'IntbWhse' => 5, 'OedtRqstDate' => 6, 'OedtCancDate' => 7, 'OedtShipDate' => 8, 'OedtSpecOrdr' => 9, 'ArtbCtaxCode' => 10, 'OedtQtyOrd' => 11, 'OedtQtyShip' => 12, 'OedtQtyShipTot' => 13, 'OedtQtyBord' => 14, 'OedtPric' => 15, 'OedtCost' => 16, 'OedtTaxPctTot' => 17, 'OedtPricTot' => 18, 'OedtCostTot' => 19, 'OedtSpCommPct' => 20, 'OedtBrknCaseQty' => 21, 'OedtBin' => 22, 'OedtPersonalCd' => 23, 'OedtAcDisc1' => 24, 'OedtAcDisc2' => 25, 'OedtAcDisc3' => 26, 'OedtAcDisc4' => 27, 'OedtLmWipNbr' => 28, 'OedtCorePric' => 29, 'OedtAsstCode' => 30, 'OedtAsstQty' => 31, 'OedtListPric' => 32, 'OedtStanCost' => 33, 'OedtVendItemJob' => 34, 'OedtNsVendId' => 35, 'OedtNsItemGrup' => 36, 'OedtUseCode' => 37, 'OedtNsShipFromId' => 38, 'OedtAsstOvrd' => 39, 'OedtPricOvrd' => 40, 'OedtPickFlag' => 41, 'OedtMstrTaxCode1' => 42, 'OedtMstrTaxPct1' => 43, 'OedtMstrTaxCode2' => 44, 'OedtMstrTaxPct2' => 45, 'OedtMstrTaxCode3' => 46, 'OedtMstrTaxPct3' => 47, 'OedtMstrTaxCode4' => 48, 'OedtMstrTaxPct4' => 49, 'OedtMstrTaxCode5' => 50, 'OedtMstrTaxPct5' => 51, 'OedtMstrTaxCode6' => 52, 'OedtMstrTaxPct6' => 53, 'OedtMstrTaxCode7' => 54, 'OedtMstrTaxPct7' => 55, 'OedtMstrTaxCode8' => 56, 'OedtMstrTaxPct8' => 57, 'OedtMstrTaxCode9' => 58, 'OedtMstrTaxPct9' => 59, 'OedtBinArea' => 60, 'OedtSplitLine' => 61, 'OedtLostReas' => 62, 'OedtOrigLine' => 63, 'OedtCustCrssRef' => 64, 'OedtUom' => 65, 'OedtShipFlag' => 66, 'OedtKitFlag' => 67, 'OedtKitItemNbr' => 68, 'OedtBfCost' => 69, 'OedtBfMsgCode' => 70, 'OedtBfCostTot' => 71, 'OedtLmBulkPric' => 72, 'OedtLmMtrxPkgPric' => 73, 'OedtLmMtrxBulkPric' => 74, 'OedtLmContractPric' => 75, 'OedtWghtTot' => 76, 'OedtOrdrAs' => 77, 'OedtPoDetLineNbr' => 78, 'OedtQtyToShip' => 79, 'OedtPoNbr' => 80, 'OedtPoRef' => 81, 'OedtFrtIn' => 82, 'OedtFrtInEntered' => 83, 'OedtProdCmplt' => 84, 'OedtErFlag' => 85, 'OedtOrigItem' => 86, 'OedtSubFlag' => 87, 'OedtEdiIncomingSeq' => 88, 'OedtSpordPoLine' => 89, 'OedtCatlgId' => 90, 'OedtDesignCd' => 91, 'OedtDiscPct' => 92, 'OedtTaxAmt' => 93, 'OedtXUsage' => 94, 'OedtRqtsLock' => 95, 'OedtFreshFrozen' => 96, 'OedtCoreFlag' => 97, 'OedtNsSalesAcct' => 98, 'OedtCertReqd' => 99, 'OedtAddOnSales' => 100, 'OedtBordFlag' => 101, 'OedtTempGrove' => 102, 'OedtGroveDisc' => 103, 'OedtOffInvc' => 104, 'InitItemGrup' => 105, 'ApveVendId' => 106, 'OedtAcct' => 107, 'OedtLoadTot' => 108, 'OedtPickedQty' => 109, 'OedtWiOrigQty' => 110, 'OedtMarginTot' => 111, 'OedtCoreCost' => 112, 'OedtItemRef' => 113, 'OedtSac02ReturnCode' => 114, 'OedtWgTaxCode' => 115, 'OedtWgPrice' => 116, 'OedtWgTot' => 117, 'OedtCntrQty' => 118, 'OedtConfirmCode' => 119, 'OedtPicked' => 120, 'OedtOrigRqstDate' => 121, 'OedtFabLock' => 122, 'OedtLabelPrinted' => 123, 'OedtQuoteId' => 124, 'OedtInvPrinted' => 125, 'OedtStockCheck' => 126, 'OedtShouldWeSplit' => 127, 'OedtCofcReqd' => 128, 'OedtAckCode' => 129, 'OedtWiBordNbr' => 130, 'OedtCertHistOrdr' => 131, 'OedtCertHistLine' => 132, 'OedtOrdrdAsItemId' => 133, 'OedtWiBatch1Nbr' => 134, 'OedtWiBatch1Qty' => 135, 'OedtWiBatch1Stat' => 136, 'OedtRgaNbr' => 137, 'OedtOrigPric' => 138, 'OedtRefLineNbr' => 139, 'OedtBinLocn' => 140, 'OedtAcSuplyWhse' => 141, 'OedtAcPricDate' => 142, 'DateUpdtd' => 143, 'TimeUpdtd' => 144, 'dummy' => 145, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Oehdnbr' => 'OEHDNBR',
        'SalesOrderDetail.Oehdnbr' => 'OEHDNBR',
        'oehdnbr' => 'OEHDNBR',
        'salesOrderDetail.oehdnbr' => 'OEHDNBR',
        'SalesOrderDetailTableMap::COL_OEHDNBR' => 'OEHDNBR',
        'COL_OEHDNBR' => 'OEHDNBR',
        'OehdNbr' => 'OEHDNBR',
        'so_detail.OehdNbr' => 'OEHDNBR',
        'Oedtline' => 'OEDTLINE',
        'SalesOrderDetail.Oedtline' => 'OEDTLINE',
        'oedtline' => 'OEDTLINE',
        'salesOrderDetail.oedtline' => 'OEDTLINE',
        'SalesOrderDetailTableMap::COL_OEDTLINE' => 'OEDTLINE',
        'COL_OEDTLINE' => 'OEDTLINE',
        'OedtLine' => 'OEDTLINE',
        'so_detail.OedtLine' => 'OEDTLINE',
        'Inititemnbr' => 'INITITEMNBR',
        'SalesOrderDetail.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'salesOrderDetail.inititemnbr' => 'INITITEMNBR',
        'SalesOrderDetailTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'so_detail.InitItemNbr' => 'INITITEMNBR',
        'Oedtdesc' => 'OEDTDESC',
        'SalesOrderDetail.Oedtdesc' => 'OEDTDESC',
        'oedtdesc' => 'OEDTDESC',
        'salesOrderDetail.oedtdesc' => 'OEDTDESC',
        'SalesOrderDetailTableMap::COL_OEDTDESC' => 'OEDTDESC',
        'COL_OEDTDESC' => 'OEDTDESC',
        'OedtDesc' => 'OEDTDESC',
        'so_detail.OedtDesc' => 'OEDTDESC',
        'Oedtdesc2' => 'OEDTDESC2',
        'SalesOrderDetail.Oedtdesc2' => 'OEDTDESC2',
        'oedtdesc2' => 'OEDTDESC2',
        'salesOrderDetail.oedtdesc2' => 'OEDTDESC2',
        'SalesOrderDetailTableMap::COL_OEDTDESC2' => 'OEDTDESC2',
        'COL_OEDTDESC2' => 'OEDTDESC2',
        'OedtDesc2' => 'OEDTDESC2',
        'so_detail.OedtDesc2' => 'OEDTDESC2',
        'Intbwhse' => 'INTBWHSE',
        'SalesOrderDetail.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'salesOrderDetail.intbwhse' => 'INTBWHSE',
        'SalesOrderDetailTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'so_detail.IntbWhse' => 'INTBWHSE',
        'Oedtrqstdate' => 'OEDTRQSTDATE',
        'SalesOrderDetail.Oedtrqstdate' => 'OEDTRQSTDATE',
        'oedtrqstdate' => 'OEDTRQSTDATE',
        'salesOrderDetail.oedtrqstdate' => 'OEDTRQSTDATE',
        'SalesOrderDetailTableMap::COL_OEDTRQSTDATE' => 'OEDTRQSTDATE',
        'COL_OEDTRQSTDATE' => 'OEDTRQSTDATE',
        'OedtRqstDate' => 'OEDTRQSTDATE',
        'so_detail.OedtRqstDate' => 'OEDTRQSTDATE',
        'Oedtcancdate' => 'OEDTCANCDATE',
        'SalesOrderDetail.Oedtcancdate' => 'OEDTCANCDATE',
        'oedtcancdate' => 'OEDTCANCDATE',
        'salesOrderDetail.oedtcancdate' => 'OEDTCANCDATE',
        'SalesOrderDetailTableMap::COL_OEDTCANCDATE' => 'OEDTCANCDATE',
        'COL_OEDTCANCDATE' => 'OEDTCANCDATE',
        'OedtCancDate' => 'OEDTCANCDATE',
        'so_detail.OedtCancDate' => 'OEDTCANCDATE',
        'Oedtshipdate' => 'OEDTSHIPDATE',
        'SalesOrderDetail.Oedtshipdate' => 'OEDTSHIPDATE',
        'oedtshipdate' => 'OEDTSHIPDATE',
        'salesOrderDetail.oedtshipdate' => 'OEDTSHIPDATE',
        'SalesOrderDetailTableMap::COL_OEDTSHIPDATE' => 'OEDTSHIPDATE',
        'COL_OEDTSHIPDATE' => 'OEDTSHIPDATE',
        'OedtShipDate' => 'OEDTSHIPDATE',
        'so_detail.OedtShipDate' => 'OEDTSHIPDATE',
        'Oedtspecordr' => 'OEDTSPECORDR',
        'SalesOrderDetail.Oedtspecordr' => 'OEDTSPECORDR',
        'oedtspecordr' => 'OEDTSPECORDR',
        'salesOrderDetail.oedtspecordr' => 'OEDTSPECORDR',
        'SalesOrderDetailTableMap::COL_OEDTSPECORDR' => 'OEDTSPECORDR',
        'COL_OEDTSPECORDR' => 'OEDTSPECORDR',
        'OedtSpecOrdr' => 'OEDTSPECORDR',
        'so_detail.OedtSpecOrdr' => 'OEDTSPECORDR',
        'Artbctaxcode' => 'ARTBCTAXCODE',
        'SalesOrderDetail.Artbctaxcode' => 'ARTBCTAXCODE',
        'artbctaxcode' => 'ARTBCTAXCODE',
        'salesOrderDetail.artbctaxcode' => 'ARTBCTAXCODE',
        'SalesOrderDetailTableMap::COL_ARTBCTAXCODE' => 'ARTBCTAXCODE',
        'COL_ARTBCTAXCODE' => 'ARTBCTAXCODE',
        'ArtbCtaxCode' => 'ARTBCTAXCODE',
        'so_detail.ArtbCtaxCode' => 'ARTBCTAXCODE',
        'Oedtqtyord' => 'OEDTQTYORD',
        'SalesOrderDetail.Oedtqtyord' => 'OEDTQTYORD',
        'oedtqtyord' => 'OEDTQTYORD',
        'salesOrderDetail.oedtqtyord' => 'OEDTQTYORD',
        'SalesOrderDetailTableMap::COL_OEDTQTYORD' => 'OEDTQTYORD',
        'COL_OEDTQTYORD' => 'OEDTQTYORD',
        'OedtQtyOrd' => 'OEDTQTYORD',
        'so_detail.OedtQtyOrd' => 'OEDTQTYORD',
        'Oedtqtyship' => 'OEDTQTYSHIP',
        'SalesOrderDetail.Oedtqtyship' => 'OEDTQTYSHIP',
        'oedtqtyship' => 'OEDTQTYSHIP',
        'salesOrderDetail.oedtqtyship' => 'OEDTQTYSHIP',
        'SalesOrderDetailTableMap::COL_OEDTQTYSHIP' => 'OEDTQTYSHIP',
        'COL_OEDTQTYSHIP' => 'OEDTQTYSHIP',
        'OedtQtyShip' => 'OEDTQTYSHIP',
        'so_detail.OedtQtyShip' => 'OEDTQTYSHIP',
        'Oedtqtyshiptot' => 'OEDTQTYSHIPTOT',
        'SalesOrderDetail.Oedtqtyshiptot' => 'OEDTQTYSHIPTOT',
        'oedtqtyshiptot' => 'OEDTQTYSHIPTOT',
        'salesOrderDetail.oedtqtyshiptot' => 'OEDTQTYSHIPTOT',
        'SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT' => 'OEDTQTYSHIPTOT',
        'COL_OEDTQTYSHIPTOT' => 'OEDTQTYSHIPTOT',
        'OedtQtyShipTot' => 'OEDTQTYSHIPTOT',
        'so_detail.OedtQtyShipTot' => 'OEDTQTYSHIPTOT',
        'Oedtqtybord' => 'OEDTQTYBORD',
        'SalesOrderDetail.Oedtqtybord' => 'OEDTQTYBORD',
        'oedtqtybord' => 'OEDTQTYBORD',
        'salesOrderDetail.oedtqtybord' => 'OEDTQTYBORD',
        'SalesOrderDetailTableMap::COL_OEDTQTYBORD' => 'OEDTQTYBORD',
        'COL_OEDTQTYBORD' => 'OEDTQTYBORD',
        'OedtQtyBord' => 'OEDTQTYBORD',
        'so_detail.OedtQtyBord' => 'OEDTQTYBORD',
        'Oedtpric' => 'OEDTPRIC',
        'SalesOrderDetail.Oedtpric' => 'OEDTPRIC',
        'oedtpric' => 'OEDTPRIC',
        'salesOrderDetail.oedtpric' => 'OEDTPRIC',
        'SalesOrderDetailTableMap::COL_OEDTPRIC' => 'OEDTPRIC',
        'COL_OEDTPRIC' => 'OEDTPRIC',
        'OedtPric' => 'OEDTPRIC',
        'so_detail.OedtPric' => 'OEDTPRIC',
        'Oedtcost' => 'OEDTCOST',
        'SalesOrderDetail.Oedtcost' => 'OEDTCOST',
        'oedtcost' => 'OEDTCOST',
        'salesOrderDetail.oedtcost' => 'OEDTCOST',
        'SalesOrderDetailTableMap::COL_OEDTCOST' => 'OEDTCOST',
        'COL_OEDTCOST' => 'OEDTCOST',
        'OedtCost' => 'OEDTCOST',
        'so_detail.OedtCost' => 'OEDTCOST',
        'Oedttaxpcttot' => 'OEDTTAXPCTTOT',
        'SalesOrderDetail.Oedttaxpcttot' => 'OEDTTAXPCTTOT',
        'oedttaxpcttot' => 'OEDTTAXPCTTOT',
        'salesOrderDetail.oedttaxpcttot' => 'OEDTTAXPCTTOT',
        'SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT' => 'OEDTTAXPCTTOT',
        'COL_OEDTTAXPCTTOT' => 'OEDTTAXPCTTOT',
        'OedtTaxPctTot' => 'OEDTTAXPCTTOT',
        'so_detail.OedtTaxPctTot' => 'OEDTTAXPCTTOT',
        'Oedtprictot' => 'OEDTPRICTOT',
        'SalesOrderDetail.Oedtprictot' => 'OEDTPRICTOT',
        'oedtprictot' => 'OEDTPRICTOT',
        'salesOrderDetail.oedtprictot' => 'OEDTPRICTOT',
        'SalesOrderDetailTableMap::COL_OEDTPRICTOT' => 'OEDTPRICTOT',
        'COL_OEDTPRICTOT' => 'OEDTPRICTOT',
        'OedtPricTot' => 'OEDTPRICTOT',
        'so_detail.OedtPricTot' => 'OEDTPRICTOT',
        'Oedtcosttot' => 'OEDTCOSTTOT',
        'SalesOrderDetail.Oedtcosttot' => 'OEDTCOSTTOT',
        'oedtcosttot' => 'OEDTCOSTTOT',
        'salesOrderDetail.oedtcosttot' => 'OEDTCOSTTOT',
        'SalesOrderDetailTableMap::COL_OEDTCOSTTOT' => 'OEDTCOSTTOT',
        'COL_OEDTCOSTTOT' => 'OEDTCOSTTOT',
        'OedtCostTot' => 'OEDTCOSTTOT',
        'so_detail.OedtCostTot' => 'OEDTCOSTTOT',
        'Oedtspcommpct' => 'OEDTSPCOMMPCT',
        'SalesOrderDetail.Oedtspcommpct' => 'OEDTSPCOMMPCT',
        'oedtspcommpct' => 'OEDTSPCOMMPCT',
        'salesOrderDetail.oedtspcommpct' => 'OEDTSPCOMMPCT',
        'SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT' => 'OEDTSPCOMMPCT',
        'COL_OEDTSPCOMMPCT' => 'OEDTSPCOMMPCT',
        'OedtSpCommPct' => 'OEDTSPCOMMPCT',
        'so_detail.OedtSpCommPct' => 'OEDTSPCOMMPCT',
        'Oedtbrkncaseqty' => 'OEDTBRKNCASEQTY',
        'SalesOrderDetail.Oedtbrkncaseqty' => 'OEDTBRKNCASEQTY',
        'oedtbrkncaseqty' => 'OEDTBRKNCASEQTY',
        'salesOrderDetail.oedtbrkncaseqty' => 'OEDTBRKNCASEQTY',
        'SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY' => 'OEDTBRKNCASEQTY',
        'COL_OEDTBRKNCASEQTY' => 'OEDTBRKNCASEQTY',
        'OedtBrknCaseQty' => 'OEDTBRKNCASEQTY',
        'so_detail.OedtBrknCaseQty' => 'OEDTBRKNCASEQTY',
        'Oedtbin' => 'OEDTBIN',
        'SalesOrderDetail.Oedtbin' => 'OEDTBIN',
        'oedtbin' => 'OEDTBIN',
        'salesOrderDetail.oedtbin' => 'OEDTBIN',
        'SalesOrderDetailTableMap::COL_OEDTBIN' => 'OEDTBIN',
        'COL_OEDTBIN' => 'OEDTBIN',
        'OedtBin' => 'OEDTBIN',
        'so_detail.OedtBin' => 'OEDTBIN',
        'Oedtpersonalcd' => 'OEDTPERSONALCD',
        'SalesOrderDetail.Oedtpersonalcd' => 'OEDTPERSONALCD',
        'oedtpersonalcd' => 'OEDTPERSONALCD',
        'salesOrderDetail.oedtpersonalcd' => 'OEDTPERSONALCD',
        'SalesOrderDetailTableMap::COL_OEDTPERSONALCD' => 'OEDTPERSONALCD',
        'COL_OEDTPERSONALCD' => 'OEDTPERSONALCD',
        'OedtPersonalCd' => 'OEDTPERSONALCD',
        'so_detail.OedtPersonalCd' => 'OEDTPERSONALCD',
        'Oedtacdisc1' => 'OEDTACDISC1',
        'SalesOrderDetail.Oedtacdisc1' => 'OEDTACDISC1',
        'oedtacdisc1' => 'OEDTACDISC1',
        'salesOrderDetail.oedtacdisc1' => 'OEDTACDISC1',
        'SalesOrderDetailTableMap::COL_OEDTACDISC1' => 'OEDTACDISC1',
        'COL_OEDTACDISC1' => 'OEDTACDISC1',
        'OedtAcDisc1' => 'OEDTACDISC1',
        'so_detail.OedtAcDisc1' => 'OEDTACDISC1',
        'Oedtacdisc2' => 'OEDTACDISC2',
        'SalesOrderDetail.Oedtacdisc2' => 'OEDTACDISC2',
        'oedtacdisc2' => 'OEDTACDISC2',
        'salesOrderDetail.oedtacdisc2' => 'OEDTACDISC2',
        'SalesOrderDetailTableMap::COL_OEDTACDISC2' => 'OEDTACDISC2',
        'COL_OEDTACDISC2' => 'OEDTACDISC2',
        'OedtAcDisc2' => 'OEDTACDISC2',
        'so_detail.OedtAcDisc2' => 'OEDTACDISC2',
        'Oedtacdisc3' => 'OEDTACDISC3',
        'SalesOrderDetail.Oedtacdisc3' => 'OEDTACDISC3',
        'oedtacdisc3' => 'OEDTACDISC3',
        'salesOrderDetail.oedtacdisc3' => 'OEDTACDISC3',
        'SalesOrderDetailTableMap::COL_OEDTACDISC3' => 'OEDTACDISC3',
        'COL_OEDTACDISC3' => 'OEDTACDISC3',
        'OedtAcDisc3' => 'OEDTACDISC3',
        'so_detail.OedtAcDisc3' => 'OEDTACDISC3',
        'Oedtacdisc4' => 'OEDTACDISC4',
        'SalesOrderDetail.Oedtacdisc4' => 'OEDTACDISC4',
        'oedtacdisc4' => 'OEDTACDISC4',
        'salesOrderDetail.oedtacdisc4' => 'OEDTACDISC4',
        'SalesOrderDetailTableMap::COL_OEDTACDISC4' => 'OEDTACDISC4',
        'COL_OEDTACDISC4' => 'OEDTACDISC4',
        'OedtAcDisc4' => 'OEDTACDISC4',
        'so_detail.OedtAcDisc4' => 'OEDTACDISC4',
        'Oedtlmwipnbr' => 'OEDTLMWIPNBR',
        'SalesOrderDetail.Oedtlmwipnbr' => 'OEDTLMWIPNBR',
        'oedtlmwipnbr' => 'OEDTLMWIPNBR',
        'salesOrderDetail.oedtlmwipnbr' => 'OEDTLMWIPNBR',
        'SalesOrderDetailTableMap::COL_OEDTLMWIPNBR' => 'OEDTLMWIPNBR',
        'COL_OEDTLMWIPNBR' => 'OEDTLMWIPNBR',
        'OedtLmWipNbr' => 'OEDTLMWIPNBR',
        'so_detail.OedtLmWipNbr' => 'OEDTLMWIPNBR',
        'Oedtcorepric' => 'OEDTCOREPRIC',
        'SalesOrderDetail.Oedtcorepric' => 'OEDTCOREPRIC',
        'oedtcorepric' => 'OEDTCOREPRIC',
        'salesOrderDetail.oedtcorepric' => 'OEDTCOREPRIC',
        'SalesOrderDetailTableMap::COL_OEDTCOREPRIC' => 'OEDTCOREPRIC',
        'COL_OEDTCOREPRIC' => 'OEDTCOREPRIC',
        'OedtCorePric' => 'OEDTCOREPRIC',
        'so_detail.OedtCorePric' => 'OEDTCOREPRIC',
        'Oedtasstcode' => 'OEDTASSTCODE',
        'SalesOrderDetail.Oedtasstcode' => 'OEDTASSTCODE',
        'oedtasstcode' => 'OEDTASSTCODE',
        'salesOrderDetail.oedtasstcode' => 'OEDTASSTCODE',
        'SalesOrderDetailTableMap::COL_OEDTASSTCODE' => 'OEDTASSTCODE',
        'COL_OEDTASSTCODE' => 'OEDTASSTCODE',
        'OedtAsstCode' => 'OEDTASSTCODE',
        'so_detail.OedtAsstCode' => 'OEDTASSTCODE',
        'Oedtasstqty' => 'OEDTASSTQTY',
        'SalesOrderDetail.Oedtasstqty' => 'OEDTASSTQTY',
        'oedtasstqty' => 'OEDTASSTQTY',
        'salesOrderDetail.oedtasstqty' => 'OEDTASSTQTY',
        'SalesOrderDetailTableMap::COL_OEDTASSTQTY' => 'OEDTASSTQTY',
        'COL_OEDTASSTQTY' => 'OEDTASSTQTY',
        'OedtAsstQty' => 'OEDTASSTQTY',
        'so_detail.OedtAsstQty' => 'OEDTASSTQTY',
        'Oedtlistpric' => 'OEDTLISTPRIC',
        'SalesOrderDetail.Oedtlistpric' => 'OEDTLISTPRIC',
        'oedtlistpric' => 'OEDTLISTPRIC',
        'salesOrderDetail.oedtlistpric' => 'OEDTLISTPRIC',
        'SalesOrderDetailTableMap::COL_OEDTLISTPRIC' => 'OEDTLISTPRIC',
        'COL_OEDTLISTPRIC' => 'OEDTLISTPRIC',
        'OedtListPric' => 'OEDTLISTPRIC',
        'so_detail.OedtListPric' => 'OEDTLISTPRIC',
        'Oedtstancost' => 'OEDTSTANCOST',
        'SalesOrderDetail.Oedtstancost' => 'OEDTSTANCOST',
        'oedtstancost' => 'OEDTSTANCOST',
        'salesOrderDetail.oedtstancost' => 'OEDTSTANCOST',
        'SalesOrderDetailTableMap::COL_OEDTSTANCOST' => 'OEDTSTANCOST',
        'COL_OEDTSTANCOST' => 'OEDTSTANCOST',
        'OedtStanCost' => 'OEDTSTANCOST',
        'so_detail.OedtStanCost' => 'OEDTSTANCOST',
        'Oedtvenditemjob' => 'OEDTVENDITEMJOB',
        'SalesOrderDetail.Oedtvenditemjob' => 'OEDTVENDITEMJOB',
        'oedtvenditemjob' => 'OEDTVENDITEMJOB',
        'salesOrderDetail.oedtvenditemjob' => 'OEDTVENDITEMJOB',
        'SalesOrderDetailTableMap::COL_OEDTVENDITEMJOB' => 'OEDTVENDITEMJOB',
        'COL_OEDTVENDITEMJOB' => 'OEDTVENDITEMJOB',
        'OedtVendItemJob' => 'OEDTVENDITEMJOB',
        'so_detail.OedtVendItemJob' => 'OEDTVENDITEMJOB',
        'Oedtnsvendid' => 'OEDTNSVENDID',
        'SalesOrderDetail.Oedtnsvendid' => 'OEDTNSVENDID',
        'oedtnsvendid' => 'OEDTNSVENDID',
        'salesOrderDetail.oedtnsvendid' => 'OEDTNSVENDID',
        'SalesOrderDetailTableMap::COL_OEDTNSVENDID' => 'OEDTNSVENDID',
        'COL_OEDTNSVENDID' => 'OEDTNSVENDID',
        'OedtNsVendId' => 'OEDTNSVENDID',
        'so_detail.OedtNsVendId' => 'OEDTNSVENDID',
        'Oedtnsitemgrup' => 'OEDTNSITEMGRUP',
        'SalesOrderDetail.Oedtnsitemgrup' => 'OEDTNSITEMGRUP',
        'oedtnsitemgrup' => 'OEDTNSITEMGRUP',
        'salesOrderDetail.oedtnsitemgrup' => 'OEDTNSITEMGRUP',
        'SalesOrderDetailTableMap::COL_OEDTNSITEMGRUP' => 'OEDTNSITEMGRUP',
        'COL_OEDTNSITEMGRUP' => 'OEDTNSITEMGRUP',
        'OedtNsItemGrup' => 'OEDTNSITEMGRUP',
        'so_detail.OedtNsItemGrup' => 'OEDTNSITEMGRUP',
        'Oedtusecode' => 'OEDTUSECODE',
        'SalesOrderDetail.Oedtusecode' => 'OEDTUSECODE',
        'oedtusecode' => 'OEDTUSECODE',
        'salesOrderDetail.oedtusecode' => 'OEDTUSECODE',
        'SalesOrderDetailTableMap::COL_OEDTUSECODE' => 'OEDTUSECODE',
        'COL_OEDTUSECODE' => 'OEDTUSECODE',
        'OedtUseCode' => 'OEDTUSECODE',
        'so_detail.OedtUseCode' => 'OEDTUSECODE',
        'Oedtnsshipfromid' => 'OEDTNSSHIPFROMID',
        'SalesOrderDetail.Oedtnsshipfromid' => 'OEDTNSSHIPFROMID',
        'oedtnsshipfromid' => 'OEDTNSSHIPFROMID',
        'salesOrderDetail.oedtnsshipfromid' => 'OEDTNSSHIPFROMID',
        'SalesOrderDetailTableMap::COL_OEDTNSSHIPFROMID' => 'OEDTNSSHIPFROMID',
        'COL_OEDTNSSHIPFROMID' => 'OEDTNSSHIPFROMID',
        'OedtNsShipFromId' => 'OEDTNSSHIPFROMID',
        'so_detail.OedtNsShipFromId' => 'OEDTNSSHIPFROMID',
        'Oedtasstovrd' => 'OEDTASSTOVRD',
        'SalesOrderDetail.Oedtasstovrd' => 'OEDTASSTOVRD',
        'oedtasstovrd' => 'OEDTASSTOVRD',
        'salesOrderDetail.oedtasstovrd' => 'OEDTASSTOVRD',
        'SalesOrderDetailTableMap::COL_OEDTASSTOVRD' => 'OEDTASSTOVRD',
        'COL_OEDTASSTOVRD' => 'OEDTASSTOVRD',
        'OedtAsstOvrd' => 'OEDTASSTOVRD',
        'so_detail.OedtAsstOvrd' => 'OEDTASSTOVRD',
        'Oedtpricovrd' => 'OEDTPRICOVRD',
        'SalesOrderDetail.Oedtpricovrd' => 'OEDTPRICOVRD',
        'oedtpricovrd' => 'OEDTPRICOVRD',
        'salesOrderDetail.oedtpricovrd' => 'OEDTPRICOVRD',
        'SalesOrderDetailTableMap::COL_OEDTPRICOVRD' => 'OEDTPRICOVRD',
        'COL_OEDTPRICOVRD' => 'OEDTPRICOVRD',
        'OedtPricOvrd' => 'OEDTPRICOVRD',
        'so_detail.OedtPricOvrd' => 'OEDTPRICOVRD',
        'Oedtpickflag' => 'OEDTPICKFLAG',
        'SalesOrderDetail.Oedtpickflag' => 'OEDTPICKFLAG',
        'oedtpickflag' => 'OEDTPICKFLAG',
        'salesOrderDetail.oedtpickflag' => 'OEDTPICKFLAG',
        'SalesOrderDetailTableMap::COL_OEDTPICKFLAG' => 'OEDTPICKFLAG',
        'COL_OEDTPICKFLAG' => 'OEDTPICKFLAG',
        'OedtPickFlag' => 'OEDTPICKFLAG',
        'so_detail.OedtPickFlag' => 'OEDTPICKFLAG',
        'Oedtmstrtaxcode1' => 'OEDTMSTRTAXCODE1',
        'SalesOrderDetail.Oedtmstrtaxcode1' => 'OEDTMSTRTAXCODE1',
        'oedtmstrtaxcode1' => 'OEDTMSTRTAXCODE1',
        'salesOrderDetail.oedtmstrtaxcode1' => 'OEDTMSTRTAXCODE1',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE1' => 'OEDTMSTRTAXCODE1',
        'COL_OEDTMSTRTAXCODE1' => 'OEDTMSTRTAXCODE1',
        'OedtMstrTaxCode1' => 'OEDTMSTRTAXCODE1',
        'so_detail.OedtMstrTaxCode1' => 'OEDTMSTRTAXCODE1',
        'Oedtmstrtaxpct1' => 'OEDTMSTRTAXPCT1',
        'SalesOrderDetail.Oedtmstrtaxpct1' => 'OEDTMSTRTAXPCT1',
        'oedtmstrtaxpct1' => 'OEDTMSTRTAXPCT1',
        'salesOrderDetail.oedtmstrtaxpct1' => 'OEDTMSTRTAXPCT1',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1' => 'OEDTMSTRTAXPCT1',
        'COL_OEDTMSTRTAXPCT1' => 'OEDTMSTRTAXPCT1',
        'OedtMstrTaxPct1' => 'OEDTMSTRTAXPCT1',
        'so_detail.OedtMstrTaxPct1' => 'OEDTMSTRTAXPCT1',
        'Oedtmstrtaxcode2' => 'OEDTMSTRTAXCODE2',
        'SalesOrderDetail.Oedtmstrtaxcode2' => 'OEDTMSTRTAXCODE2',
        'oedtmstrtaxcode2' => 'OEDTMSTRTAXCODE2',
        'salesOrderDetail.oedtmstrtaxcode2' => 'OEDTMSTRTAXCODE2',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE2' => 'OEDTMSTRTAXCODE2',
        'COL_OEDTMSTRTAXCODE2' => 'OEDTMSTRTAXCODE2',
        'OedtMstrTaxCode2' => 'OEDTMSTRTAXCODE2',
        'so_detail.OedtMstrTaxCode2' => 'OEDTMSTRTAXCODE2',
        'Oedtmstrtaxpct2' => 'OEDTMSTRTAXPCT2',
        'SalesOrderDetail.Oedtmstrtaxpct2' => 'OEDTMSTRTAXPCT2',
        'oedtmstrtaxpct2' => 'OEDTMSTRTAXPCT2',
        'salesOrderDetail.oedtmstrtaxpct2' => 'OEDTMSTRTAXPCT2',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2' => 'OEDTMSTRTAXPCT2',
        'COL_OEDTMSTRTAXPCT2' => 'OEDTMSTRTAXPCT2',
        'OedtMstrTaxPct2' => 'OEDTMSTRTAXPCT2',
        'so_detail.OedtMstrTaxPct2' => 'OEDTMSTRTAXPCT2',
        'Oedtmstrtaxcode3' => 'OEDTMSTRTAXCODE3',
        'SalesOrderDetail.Oedtmstrtaxcode3' => 'OEDTMSTRTAXCODE3',
        'oedtmstrtaxcode3' => 'OEDTMSTRTAXCODE3',
        'salesOrderDetail.oedtmstrtaxcode3' => 'OEDTMSTRTAXCODE3',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE3' => 'OEDTMSTRTAXCODE3',
        'COL_OEDTMSTRTAXCODE3' => 'OEDTMSTRTAXCODE3',
        'OedtMstrTaxCode3' => 'OEDTMSTRTAXCODE3',
        'so_detail.OedtMstrTaxCode3' => 'OEDTMSTRTAXCODE3',
        'Oedtmstrtaxpct3' => 'OEDTMSTRTAXPCT3',
        'SalesOrderDetail.Oedtmstrtaxpct3' => 'OEDTMSTRTAXPCT3',
        'oedtmstrtaxpct3' => 'OEDTMSTRTAXPCT3',
        'salesOrderDetail.oedtmstrtaxpct3' => 'OEDTMSTRTAXPCT3',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3' => 'OEDTMSTRTAXPCT3',
        'COL_OEDTMSTRTAXPCT3' => 'OEDTMSTRTAXPCT3',
        'OedtMstrTaxPct3' => 'OEDTMSTRTAXPCT3',
        'so_detail.OedtMstrTaxPct3' => 'OEDTMSTRTAXPCT3',
        'Oedtmstrtaxcode4' => 'OEDTMSTRTAXCODE4',
        'SalesOrderDetail.Oedtmstrtaxcode4' => 'OEDTMSTRTAXCODE4',
        'oedtmstrtaxcode4' => 'OEDTMSTRTAXCODE4',
        'salesOrderDetail.oedtmstrtaxcode4' => 'OEDTMSTRTAXCODE4',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE4' => 'OEDTMSTRTAXCODE4',
        'COL_OEDTMSTRTAXCODE4' => 'OEDTMSTRTAXCODE4',
        'OedtMstrTaxCode4' => 'OEDTMSTRTAXCODE4',
        'so_detail.OedtMstrTaxCode4' => 'OEDTMSTRTAXCODE4',
        'Oedtmstrtaxpct4' => 'OEDTMSTRTAXPCT4',
        'SalesOrderDetail.Oedtmstrtaxpct4' => 'OEDTMSTRTAXPCT4',
        'oedtmstrtaxpct4' => 'OEDTMSTRTAXPCT4',
        'salesOrderDetail.oedtmstrtaxpct4' => 'OEDTMSTRTAXPCT4',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4' => 'OEDTMSTRTAXPCT4',
        'COL_OEDTMSTRTAXPCT4' => 'OEDTMSTRTAXPCT4',
        'OedtMstrTaxPct4' => 'OEDTMSTRTAXPCT4',
        'so_detail.OedtMstrTaxPct4' => 'OEDTMSTRTAXPCT4',
        'Oedtmstrtaxcode5' => 'OEDTMSTRTAXCODE5',
        'SalesOrderDetail.Oedtmstrtaxcode5' => 'OEDTMSTRTAXCODE5',
        'oedtmstrtaxcode5' => 'OEDTMSTRTAXCODE5',
        'salesOrderDetail.oedtmstrtaxcode5' => 'OEDTMSTRTAXCODE5',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE5' => 'OEDTMSTRTAXCODE5',
        'COL_OEDTMSTRTAXCODE5' => 'OEDTMSTRTAXCODE5',
        'OedtMstrTaxCode5' => 'OEDTMSTRTAXCODE5',
        'so_detail.OedtMstrTaxCode5' => 'OEDTMSTRTAXCODE5',
        'Oedtmstrtaxpct5' => 'OEDTMSTRTAXPCT5',
        'SalesOrderDetail.Oedtmstrtaxpct5' => 'OEDTMSTRTAXPCT5',
        'oedtmstrtaxpct5' => 'OEDTMSTRTAXPCT5',
        'salesOrderDetail.oedtmstrtaxpct5' => 'OEDTMSTRTAXPCT5',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5' => 'OEDTMSTRTAXPCT5',
        'COL_OEDTMSTRTAXPCT5' => 'OEDTMSTRTAXPCT5',
        'OedtMstrTaxPct5' => 'OEDTMSTRTAXPCT5',
        'so_detail.OedtMstrTaxPct5' => 'OEDTMSTRTAXPCT5',
        'Oedtmstrtaxcode6' => 'OEDTMSTRTAXCODE6',
        'SalesOrderDetail.Oedtmstrtaxcode6' => 'OEDTMSTRTAXCODE6',
        'oedtmstrtaxcode6' => 'OEDTMSTRTAXCODE6',
        'salesOrderDetail.oedtmstrtaxcode6' => 'OEDTMSTRTAXCODE6',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE6' => 'OEDTMSTRTAXCODE6',
        'COL_OEDTMSTRTAXCODE6' => 'OEDTMSTRTAXCODE6',
        'OedtMstrTaxCode6' => 'OEDTMSTRTAXCODE6',
        'so_detail.OedtMstrTaxCode6' => 'OEDTMSTRTAXCODE6',
        'Oedtmstrtaxpct6' => 'OEDTMSTRTAXPCT6',
        'SalesOrderDetail.Oedtmstrtaxpct6' => 'OEDTMSTRTAXPCT6',
        'oedtmstrtaxpct6' => 'OEDTMSTRTAXPCT6',
        'salesOrderDetail.oedtmstrtaxpct6' => 'OEDTMSTRTAXPCT6',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6' => 'OEDTMSTRTAXPCT6',
        'COL_OEDTMSTRTAXPCT6' => 'OEDTMSTRTAXPCT6',
        'OedtMstrTaxPct6' => 'OEDTMSTRTAXPCT6',
        'so_detail.OedtMstrTaxPct6' => 'OEDTMSTRTAXPCT6',
        'Oedtmstrtaxcode7' => 'OEDTMSTRTAXCODE7',
        'SalesOrderDetail.Oedtmstrtaxcode7' => 'OEDTMSTRTAXCODE7',
        'oedtmstrtaxcode7' => 'OEDTMSTRTAXCODE7',
        'salesOrderDetail.oedtmstrtaxcode7' => 'OEDTMSTRTAXCODE7',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE7' => 'OEDTMSTRTAXCODE7',
        'COL_OEDTMSTRTAXCODE7' => 'OEDTMSTRTAXCODE7',
        'OedtMstrTaxCode7' => 'OEDTMSTRTAXCODE7',
        'so_detail.OedtMstrTaxCode7' => 'OEDTMSTRTAXCODE7',
        'Oedtmstrtaxpct7' => 'OEDTMSTRTAXPCT7',
        'SalesOrderDetail.Oedtmstrtaxpct7' => 'OEDTMSTRTAXPCT7',
        'oedtmstrtaxpct7' => 'OEDTMSTRTAXPCT7',
        'salesOrderDetail.oedtmstrtaxpct7' => 'OEDTMSTRTAXPCT7',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7' => 'OEDTMSTRTAXPCT7',
        'COL_OEDTMSTRTAXPCT7' => 'OEDTMSTRTAXPCT7',
        'OedtMstrTaxPct7' => 'OEDTMSTRTAXPCT7',
        'so_detail.OedtMstrTaxPct7' => 'OEDTMSTRTAXPCT7',
        'Oedtmstrtaxcode8' => 'OEDTMSTRTAXCODE8',
        'SalesOrderDetail.Oedtmstrtaxcode8' => 'OEDTMSTRTAXCODE8',
        'oedtmstrtaxcode8' => 'OEDTMSTRTAXCODE8',
        'salesOrderDetail.oedtmstrtaxcode8' => 'OEDTMSTRTAXCODE8',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE8' => 'OEDTMSTRTAXCODE8',
        'COL_OEDTMSTRTAXCODE8' => 'OEDTMSTRTAXCODE8',
        'OedtMstrTaxCode8' => 'OEDTMSTRTAXCODE8',
        'so_detail.OedtMstrTaxCode8' => 'OEDTMSTRTAXCODE8',
        'Oedtmstrtaxpct8' => 'OEDTMSTRTAXPCT8',
        'SalesOrderDetail.Oedtmstrtaxpct8' => 'OEDTMSTRTAXPCT8',
        'oedtmstrtaxpct8' => 'OEDTMSTRTAXPCT8',
        'salesOrderDetail.oedtmstrtaxpct8' => 'OEDTMSTRTAXPCT8',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8' => 'OEDTMSTRTAXPCT8',
        'COL_OEDTMSTRTAXPCT8' => 'OEDTMSTRTAXPCT8',
        'OedtMstrTaxPct8' => 'OEDTMSTRTAXPCT8',
        'so_detail.OedtMstrTaxPct8' => 'OEDTMSTRTAXPCT8',
        'Oedtmstrtaxcode9' => 'OEDTMSTRTAXCODE9',
        'SalesOrderDetail.Oedtmstrtaxcode9' => 'OEDTMSTRTAXCODE9',
        'oedtmstrtaxcode9' => 'OEDTMSTRTAXCODE9',
        'salesOrderDetail.oedtmstrtaxcode9' => 'OEDTMSTRTAXCODE9',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE9' => 'OEDTMSTRTAXCODE9',
        'COL_OEDTMSTRTAXCODE9' => 'OEDTMSTRTAXCODE9',
        'OedtMstrTaxCode9' => 'OEDTMSTRTAXCODE9',
        'so_detail.OedtMstrTaxCode9' => 'OEDTMSTRTAXCODE9',
        'Oedtmstrtaxpct9' => 'OEDTMSTRTAXPCT9',
        'SalesOrderDetail.Oedtmstrtaxpct9' => 'OEDTMSTRTAXPCT9',
        'oedtmstrtaxpct9' => 'OEDTMSTRTAXPCT9',
        'salesOrderDetail.oedtmstrtaxpct9' => 'OEDTMSTRTAXPCT9',
        'SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9' => 'OEDTMSTRTAXPCT9',
        'COL_OEDTMSTRTAXPCT9' => 'OEDTMSTRTAXPCT9',
        'OedtMstrTaxPct9' => 'OEDTMSTRTAXPCT9',
        'so_detail.OedtMstrTaxPct9' => 'OEDTMSTRTAXPCT9',
        'Oedtbinarea' => 'OEDTBINAREA',
        'SalesOrderDetail.Oedtbinarea' => 'OEDTBINAREA',
        'oedtbinarea' => 'OEDTBINAREA',
        'salesOrderDetail.oedtbinarea' => 'OEDTBINAREA',
        'SalesOrderDetailTableMap::COL_OEDTBINAREA' => 'OEDTBINAREA',
        'COL_OEDTBINAREA' => 'OEDTBINAREA',
        'OedtBinArea' => 'OEDTBINAREA',
        'so_detail.OedtBinArea' => 'OEDTBINAREA',
        'Oedtsplitline' => 'OEDTSPLITLINE',
        'SalesOrderDetail.Oedtsplitline' => 'OEDTSPLITLINE',
        'oedtsplitline' => 'OEDTSPLITLINE',
        'salesOrderDetail.oedtsplitline' => 'OEDTSPLITLINE',
        'SalesOrderDetailTableMap::COL_OEDTSPLITLINE' => 'OEDTSPLITLINE',
        'COL_OEDTSPLITLINE' => 'OEDTSPLITLINE',
        'OedtSplitLine' => 'OEDTSPLITLINE',
        'so_detail.OedtSplitLine' => 'OEDTSPLITLINE',
        'Oedtlostreas' => 'OEDTLOSTREAS',
        'SalesOrderDetail.Oedtlostreas' => 'OEDTLOSTREAS',
        'oedtlostreas' => 'OEDTLOSTREAS',
        'salesOrderDetail.oedtlostreas' => 'OEDTLOSTREAS',
        'SalesOrderDetailTableMap::COL_OEDTLOSTREAS' => 'OEDTLOSTREAS',
        'COL_OEDTLOSTREAS' => 'OEDTLOSTREAS',
        'OedtLostReas' => 'OEDTLOSTREAS',
        'so_detail.OedtLostReas' => 'OEDTLOSTREAS',
        'Oedtorigline' => 'OEDTORIGLINE',
        'SalesOrderDetail.Oedtorigline' => 'OEDTORIGLINE',
        'oedtorigline' => 'OEDTORIGLINE',
        'salesOrderDetail.oedtorigline' => 'OEDTORIGLINE',
        'SalesOrderDetailTableMap::COL_OEDTORIGLINE' => 'OEDTORIGLINE',
        'COL_OEDTORIGLINE' => 'OEDTORIGLINE',
        'OedtOrigLine' => 'OEDTORIGLINE',
        'so_detail.OedtOrigLine' => 'OEDTORIGLINE',
        'Oedtcustcrssref' => 'OEDTCUSTCRSSREF',
        'SalesOrderDetail.Oedtcustcrssref' => 'OEDTCUSTCRSSREF',
        'oedtcustcrssref' => 'OEDTCUSTCRSSREF',
        'salesOrderDetail.oedtcustcrssref' => 'OEDTCUSTCRSSREF',
        'SalesOrderDetailTableMap::COL_OEDTCUSTCRSSREF' => 'OEDTCUSTCRSSREF',
        'COL_OEDTCUSTCRSSREF' => 'OEDTCUSTCRSSREF',
        'OedtCustCrssRef' => 'OEDTCUSTCRSSREF',
        'so_detail.OedtCustCrssRef' => 'OEDTCUSTCRSSREF',
        'Oedtuom' => 'OEDTUOM',
        'SalesOrderDetail.Oedtuom' => 'OEDTUOM',
        'oedtuom' => 'OEDTUOM',
        'salesOrderDetail.oedtuom' => 'OEDTUOM',
        'SalesOrderDetailTableMap::COL_OEDTUOM' => 'OEDTUOM',
        'COL_OEDTUOM' => 'OEDTUOM',
        'OedtUom' => 'OEDTUOM',
        'so_detail.OedtUom' => 'OEDTUOM',
        'Oedtshipflag' => 'OEDTSHIPFLAG',
        'SalesOrderDetail.Oedtshipflag' => 'OEDTSHIPFLAG',
        'oedtshipflag' => 'OEDTSHIPFLAG',
        'salesOrderDetail.oedtshipflag' => 'OEDTSHIPFLAG',
        'SalesOrderDetailTableMap::COL_OEDTSHIPFLAG' => 'OEDTSHIPFLAG',
        'COL_OEDTSHIPFLAG' => 'OEDTSHIPFLAG',
        'OedtShipFlag' => 'OEDTSHIPFLAG',
        'so_detail.OedtShipFlag' => 'OEDTSHIPFLAG',
        'Oedtkitflag' => 'OEDTKITFLAG',
        'SalesOrderDetail.Oedtkitflag' => 'OEDTKITFLAG',
        'oedtkitflag' => 'OEDTKITFLAG',
        'salesOrderDetail.oedtkitflag' => 'OEDTKITFLAG',
        'SalesOrderDetailTableMap::COL_OEDTKITFLAG' => 'OEDTKITFLAG',
        'COL_OEDTKITFLAG' => 'OEDTKITFLAG',
        'OedtKitFlag' => 'OEDTKITFLAG',
        'so_detail.OedtKitFlag' => 'OEDTKITFLAG',
        'Oedtkititemnbr' => 'OEDTKITITEMNBR',
        'SalesOrderDetail.Oedtkititemnbr' => 'OEDTKITITEMNBR',
        'oedtkititemnbr' => 'OEDTKITITEMNBR',
        'salesOrderDetail.oedtkititemnbr' => 'OEDTKITITEMNBR',
        'SalesOrderDetailTableMap::COL_OEDTKITITEMNBR' => 'OEDTKITITEMNBR',
        'COL_OEDTKITITEMNBR' => 'OEDTKITITEMNBR',
        'OedtKitItemNbr' => 'OEDTKITITEMNBR',
        'so_detail.OedtKitItemNbr' => 'OEDTKITITEMNBR',
        'Oedtbfcost' => 'OEDTBFCOST',
        'SalesOrderDetail.Oedtbfcost' => 'OEDTBFCOST',
        'oedtbfcost' => 'OEDTBFCOST',
        'salesOrderDetail.oedtbfcost' => 'OEDTBFCOST',
        'SalesOrderDetailTableMap::COL_OEDTBFCOST' => 'OEDTBFCOST',
        'COL_OEDTBFCOST' => 'OEDTBFCOST',
        'OedtBfCost' => 'OEDTBFCOST',
        'so_detail.OedtBfCost' => 'OEDTBFCOST',
        'Oedtbfmsgcode' => 'OEDTBFMSGCODE',
        'SalesOrderDetail.Oedtbfmsgcode' => 'OEDTBFMSGCODE',
        'oedtbfmsgcode' => 'OEDTBFMSGCODE',
        'salesOrderDetail.oedtbfmsgcode' => 'OEDTBFMSGCODE',
        'SalesOrderDetailTableMap::COL_OEDTBFMSGCODE' => 'OEDTBFMSGCODE',
        'COL_OEDTBFMSGCODE' => 'OEDTBFMSGCODE',
        'OedtBfMsgCode' => 'OEDTBFMSGCODE',
        'so_detail.OedtBfMsgCode' => 'OEDTBFMSGCODE',
        'Oedtbfcosttot' => 'OEDTBFCOSTTOT',
        'SalesOrderDetail.Oedtbfcosttot' => 'OEDTBFCOSTTOT',
        'oedtbfcosttot' => 'OEDTBFCOSTTOT',
        'salesOrderDetail.oedtbfcosttot' => 'OEDTBFCOSTTOT',
        'SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT' => 'OEDTBFCOSTTOT',
        'COL_OEDTBFCOSTTOT' => 'OEDTBFCOSTTOT',
        'OedtBfCostTot' => 'OEDTBFCOSTTOT',
        'so_detail.OedtBfCostTot' => 'OEDTBFCOSTTOT',
        'Oedtlmbulkpric' => 'OEDTLMBULKPRIC',
        'SalesOrderDetail.Oedtlmbulkpric' => 'OEDTLMBULKPRIC',
        'oedtlmbulkpric' => 'OEDTLMBULKPRIC',
        'salesOrderDetail.oedtlmbulkpric' => 'OEDTLMBULKPRIC',
        'SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC' => 'OEDTLMBULKPRIC',
        'COL_OEDTLMBULKPRIC' => 'OEDTLMBULKPRIC',
        'OedtLmBulkPric' => 'OEDTLMBULKPRIC',
        'so_detail.OedtLmBulkPric' => 'OEDTLMBULKPRIC',
        'Oedtlmmtrxpkgpric' => 'OEDTLMMTRXPKGPRIC',
        'SalesOrderDetail.Oedtlmmtrxpkgpric' => 'OEDTLMMTRXPKGPRIC',
        'oedtlmmtrxpkgpric' => 'OEDTLMMTRXPKGPRIC',
        'salesOrderDetail.oedtlmmtrxpkgpric' => 'OEDTLMMTRXPKGPRIC',
        'SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC' => 'OEDTLMMTRXPKGPRIC',
        'COL_OEDTLMMTRXPKGPRIC' => 'OEDTLMMTRXPKGPRIC',
        'OedtLmMtrxPkgPric' => 'OEDTLMMTRXPKGPRIC',
        'so_detail.OedtLmMtrxPkgPric' => 'OEDTLMMTRXPKGPRIC',
        'Oedtlmmtrxbulkpric' => 'OEDTLMMTRXBULKPRIC',
        'SalesOrderDetail.Oedtlmmtrxbulkpric' => 'OEDTLMMTRXBULKPRIC',
        'oedtlmmtrxbulkpric' => 'OEDTLMMTRXBULKPRIC',
        'salesOrderDetail.oedtlmmtrxbulkpric' => 'OEDTLMMTRXBULKPRIC',
        'SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC' => 'OEDTLMMTRXBULKPRIC',
        'COL_OEDTLMMTRXBULKPRIC' => 'OEDTLMMTRXBULKPRIC',
        'OedtLmMtrxBulkPric' => 'OEDTLMMTRXBULKPRIC',
        'so_detail.OedtLmMtrxBulkPric' => 'OEDTLMMTRXBULKPRIC',
        'Oedtlmcontractpric' => 'OEDTLMCONTRACTPRIC',
        'SalesOrderDetail.Oedtlmcontractpric' => 'OEDTLMCONTRACTPRIC',
        'oedtlmcontractpric' => 'OEDTLMCONTRACTPRIC',
        'salesOrderDetail.oedtlmcontractpric' => 'OEDTLMCONTRACTPRIC',
        'SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC' => 'OEDTLMCONTRACTPRIC',
        'COL_OEDTLMCONTRACTPRIC' => 'OEDTLMCONTRACTPRIC',
        'OedtLmContractPric' => 'OEDTLMCONTRACTPRIC',
        'so_detail.OedtLmContractPric' => 'OEDTLMCONTRACTPRIC',
        'Oedtwghttot' => 'OEDTWGHTTOT',
        'SalesOrderDetail.Oedtwghttot' => 'OEDTWGHTTOT',
        'oedtwghttot' => 'OEDTWGHTTOT',
        'salesOrderDetail.oedtwghttot' => 'OEDTWGHTTOT',
        'SalesOrderDetailTableMap::COL_OEDTWGHTTOT' => 'OEDTWGHTTOT',
        'COL_OEDTWGHTTOT' => 'OEDTWGHTTOT',
        'OedtWghtTot' => 'OEDTWGHTTOT',
        'so_detail.OedtWghtTot' => 'OEDTWGHTTOT',
        'Oedtordras' => 'OEDTORDRAS',
        'SalesOrderDetail.Oedtordras' => 'OEDTORDRAS',
        'oedtordras' => 'OEDTORDRAS',
        'salesOrderDetail.oedtordras' => 'OEDTORDRAS',
        'SalesOrderDetailTableMap::COL_OEDTORDRAS' => 'OEDTORDRAS',
        'COL_OEDTORDRAS' => 'OEDTORDRAS',
        'OedtOrdrAs' => 'OEDTORDRAS',
        'so_detail.OedtOrdrAs' => 'OEDTORDRAS',
        'Oedtpodetlinenbr' => 'OEDTPODETLINENBR',
        'SalesOrderDetail.Oedtpodetlinenbr' => 'OEDTPODETLINENBR',
        'oedtpodetlinenbr' => 'OEDTPODETLINENBR',
        'salesOrderDetail.oedtpodetlinenbr' => 'OEDTPODETLINENBR',
        'SalesOrderDetailTableMap::COL_OEDTPODETLINENBR' => 'OEDTPODETLINENBR',
        'COL_OEDTPODETLINENBR' => 'OEDTPODETLINENBR',
        'OedtPoDetLineNbr' => 'OEDTPODETLINENBR',
        'so_detail.OedtPoDetLineNbr' => 'OEDTPODETLINENBR',
        'Oedtqtytoship' => 'OEDTQTYTOSHIP',
        'SalesOrderDetail.Oedtqtytoship' => 'OEDTQTYTOSHIP',
        'oedtqtytoship' => 'OEDTQTYTOSHIP',
        'salesOrderDetail.oedtqtytoship' => 'OEDTQTYTOSHIP',
        'SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP' => 'OEDTQTYTOSHIP',
        'COL_OEDTQTYTOSHIP' => 'OEDTQTYTOSHIP',
        'OedtQtyToShip' => 'OEDTQTYTOSHIP',
        'so_detail.OedtQtyToShip' => 'OEDTQTYTOSHIP',
        'Oedtponbr' => 'OEDTPONBR',
        'SalesOrderDetail.Oedtponbr' => 'OEDTPONBR',
        'oedtponbr' => 'OEDTPONBR',
        'salesOrderDetail.oedtponbr' => 'OEDTPONBR',
        'SalesOrderDetailTableMap::COL_OEDTPONBR' => 'OEDTPONBR',
        'COL_OEDTPONBR' => 'OEDTPONBR',
        'OedtPoNbr' => 'OEDTPONBR',
        'so_detail.OedtPoNbr' => 'OEDTPONBR',
        'Oedtporef' => 'OEDTPOREF',
        'SalesOrderDetail.Oedtporef' => 'OEDTPOREF',
        'oedtporef' => 'OEDTPOREF',
        'salesOrderDetail.oedtporef' => 'OEDTPOREF',
        'SalesOrderDetailTableMap::COL_OEDTPOREF' => 'OEDTPOREF',
        'COL_OEDTPOREF' => 'OEDTPOREF',
        'OedtPoRef' => 'OEDTPOREF',
        'so_detail.OedtPoRef' => 'OEDTPOREF',
        'Oedtfrtin' => 'OEDTFRTIN',
        'SalesOrderDetail.Oedtfrtin' => 'OEDTFRTIN',
        'oedtfrtin' => 'OEDTFRTIN',
        'salesOrderDetail.oedtfrtin' => 'OEDTFRTIN',
        'SalesOrderDetailTableMap::COL_OEDTFRTIN' => 'OEDTFRTIN',
        'COL_OEDTFRTIN' => 'OEDTFRTIN',
        'OedtFrtIn' => 'OEDTFRTIN',
        'so_detail.OedtFrtIn' => 'OEDTFRTIN',
        'Oedtfrtinentered' => 'OEDTFRTINENTERED',
        'SalesOrderDetail.Oedtfrtinentered' => 'OEDTFRTINENTERED',
        'oedtfrtinentered' => 'OEDTFRTINENTERED',
        'salesOrderDetail.oedtfrtinentered' => 'OEDTFRTINENTERED',
        'SalesOrderDetailTableMap::COL_OEDTFRTINENTERED' => 'OEDTFRTINENTERED',
        'COL_OEDTFRTINENTERED' => 'OEDTFRTINENTERED',
        'OedtFrtInEntered' => 'OEDTFRTINENTERED',
        'so_detail.OedtFrtInEntered' => 'OEDTFRTINENTERED',
        'Oedtprodcmplt' => 'OEDTPRODCMPLT',
        'SalesOrderDetail.Oedtprodcmplt' => 'OEDTPRODCMPLT',
        'oedtprodcmplt' => 'OEDTPRODCMPLT',
        'salesOrderDetail.oedtprodcmplt' => 'OEDTPRODCMPLT',
        'SalesOrderDetailTableMap::COL_OEDTPRODCMPLT' => 'OEDTPRODCMPLT',
        'COL_OEDTPRODCMPLT' => 'OEDTPRODCMPLT',
        'OedtProdCmplt' => 'OEDTPRODCMPLT',
        'so_detail.OedtProdCmplt' => 'OEDTPRODCMPLT',
        'Oedterflag' => 'OEDTERFLAG',
        'SalesOrderDetail.Oedterflag' => 'OEDTERFLAG',
        'oedterflag' => 'OEDTERFLAG',
        'salesOrderDetail.oedterflag' => 'OEDTERFLAG',
        'SalesOrderDetailTableMap::COL_OEDTERFLAG' => 'OEDTERFLAG',
        'COL_OEDTERFLAG' => 'OEDTERFLAG',
        'OedtErFlag' => 'OEDTERFLAG',
        'so_detail.OedtErFlag' => 'OEDTERFLAG',
        'Oedtorigitem' => 'OEDTORIGITEM',
        'SalesOrderDetail.Oedtorigitem' => 'OEDTORIGITEM',
        'oedtorigitem' => 'OEDTORIGITEM',
        'salesOrderDetail.oedtorigitem' => 'OEDTORIGITEM',
        'SalesOrderDetailTableMap::COL_OEDTORIGITEM' => 'OEDTORIGITEM',
        'COL_OEDTORIGITEM' => 'OEDTORIGITEM',
        'OedtOrigItem' => 'OEDTORIGITEM',
        'so_detail.OedtOrigItem' => 'OEDTORIGITEM',
        'Oedtsubflag' => 'OEDTSUBFLAG',
        'SalesOrderDetail.Oedtsubflag' => 'OEDTSUBFLAG',
        'oedtsubflag' => 'OEDTSUBFLAG',
        'salesOrderDetail.oedtsubflag' => 'OEDTSUBFLAG',
        'SalesOrderDetailTableMap::COL_OEDTSUBFLAG' => 'OEDTSUBFLAG',
        'COL_OEDTSUBFLAG' => 'OEDTSUBFLAG',
        'OedtSubFlag' => 'OEDTSUBFLAG',
        'so_detail.OedtSubFlag' => 'OEDTSUBFLAG',
        'Oedtediincomingseq' => 'OEDTEDIINCOMINGSEQ',
        'SalesOrderDetail.Oedtediincomingseq' => 'OEDTEDIINCOMINGSEQ',
        'oedtediincomingseq' => 'OEDTEDIINCOMINGSEQ',
        'salesOrderDetail.oedtediincomingseq' => 'OEDTEDIINCOMINGSEQ',
        'SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ' => 'OEDTEDIINCOMINGSEQ',
        'COL_OEDTEDIINCOMINGSEQ' => 'OEDTEDIINCOMINGSEQ',
        'OedtEdiIncomingSeq' => 'OEDTEDIINCOMINGSEQ',
        'so_detail.OedtEdiIncomingSeq' => 'OEDTEDIINCOMINGSEQ',
        'Oedtspordpoline' => 'OEDTSPORDPOLINE',
        'SalesOrderDetail.Oedtspordpoline' => 'OEDTSPORDPOLINE',
        'oedtspordpoline' => 'OEDTSPORDPOLINE',
        'salesOrderDetail.oedtspordpoline' => 'OEDTSPORDPOLINE',
        'SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE' => 'OEDTSPORDPOLINE',
        'COL_OEDTSPORDPOLINE' => 'OEDTSPORDPOLINE',
        'OedtSpordPoLine' => 'OEDTSPORDPOLINE',
        'so_detail.OedtSpordPoLine' => 'OEDTSPORDPOLINE',
        'Oedtcatlgid' => 'OEDTCATLGID',
        'SalesOrderDetail.Oedtcatlgid' => 'OEDTCATLGID',
        'oedtcatlgid' => 'OEDTCATLGID',
        'salesOrderDetail.oedtcatlgid' => 'OEDTCATLGID',
        'SalesOrderDetailTableMap::COL_OEDTCATLGID' => 'OEDTCATLGID',
        'COL_OEDTCATLGID' => 'OEDTCATLGID',
        'OedtCatlgId' => 'OEDTCATLGID',
        'so_detail.OedtCatlgId' => 'OEDTCATLGID',
        'Oedtdesigncd' => 'OEDTDESIGNCD',
        'SalesOrderDetail.Oedtdesigncd' => 'OEDTDESIGNCD',
        'oedtdesigncd' => 'OEDTDESIGNCD',
        'salesOrderDetail.oedtdesigncd' => 'OEDTDESIGNCD',
        'SalesOrderDetailTableMap::COL_OEDTDESIGNCD' => 'OEDTDESIGNCD',
        'COL_OEDTDESIGNCD' => 'OEDTDESIGNCD',
        'OedtDesignCd' => 'OEDTDESIGNCD',
        'so_detail.OedtDesignCd' => 'OEDTDESIGNCD',
        'Oedtdiscpct' => 'OEDTDISCPCT',
        'SalesOrderDetail.Oedtdiscpct' => 'OEDTDISCPCT',
        'oedtdiscpct' => 'OEDTDISCPCT',
        'salesOrderDetail.oedtdiscpct' => 'OEDTDISCPCT',
        'SalesOrderDetailTableMap::COL_OEDTDISCPCT' => 'OEDTDISCPCT',
        'COL_OEDTDISCPCT' => 'OEDTDISCPCT',
        'OedtDiscPct' => 'OEDTDISCPCT',
        'so_detail.OedtDiscPct' => 'OEDTDISCPCT',
        'Oedttaxamt' => 'OEDTTAXAMT',
        'SalesOrderDetail.Oedttaxamt' => 'OEDTTAXAMT',
        'oedttaxamt' => 'OEDTTAXAMT',
        'salesOrderDetail.oedttaxamt' => 'OEDTTAXAMT',
        'SalesOrderDetailTableMap::COL_OEDTTAXAMT' => 'OEDTTAXAMT',
        'COL_OEDTTAXAMT' => 'OEDTTAXAMT',
        'OedtTaxAmt' => 'OEDTTAXAMT',
        'so_detail.OedtTaxAmt' => 'OEDTTAXAMT',
        'Oedtxusage' => 'OEDTXUSAGE',
        'SalesOrderDetail.Oedtxusage' => 'OEDTXUSAGE',
        'oedtxusage' => 'OEDTXUSAGE',
        'salesOrderDetail.oedtxusage' => 'OEDTXUSAGE',
        'SalesOrderDetailTableMap::COL_OEDTXUSAGE' => 'OEDTXUSAGE',
        'COL_OEDTXUSAGE' => 'OEDTXUSAGE',
        'OedtXUsage' => 'OEDTXUSAGE',
        'so_detail.OedtXUsage' => 'OEDTXUSAGE',
        'Oedtrqtslock' => 'OEDTRQTSLOCK',
        'SalesOrderDetail.Oedtrqtslock' => 'OEDTRQTSLOCK',
        'oedtrqtslock' => 'OEDTRQTSLOCK',
        'salesOrderDetail.oedtrqtslock' => 'OEDTRQTSLOCK',
        'SalesOrderDetailTableMap::COL_OEDTRQTSLOCK' => 'OEDTRQTSLOCK',
        'COL_OEDTRQTSLOCK' => 'OEDTRQTSLOCK',
        'OedtRqtsLock' => 'OEDTRQTSLOCK',
        'so_detail.OedtRqtsLock' => 'OEDTRQTSLOCK',
        'Oedtfreshfrozen' => 'OEDTFRESHFROZEN',
        'SalesOrderDetail.Oedtfreshfrozen' => 'OEDTFRESHFROZEN',
        'oedtfreshfrozen' => 'OEDTFRESHFROZEN',
        'salesOrderDetail.oedtfreshfrozen' => 'OEDTFRESHFROZEN',
        'SalesOrderDetailTableMap::COL_OEDTFRESHFROZEN' => 'OEDTFRESHFROZEN',
        'COL_OEDTFRESHFROZEN' => 'OEDTFRESHFROZEN',
        'OedtFreshFrozen' => 'OEDTFRESHFROZEN',
        'so_detail.OedtFreshFrozen' => 'OEDTFRESHFROZEN',
        'Oedtcoreflag' => 'OEDTCOREFLAG',
        'SalesOrderDetail.Oedtcoreflag' => 'OEDTCOREFLAG',
        'oedtcoreflag' => 'OEDTCOREFLAG',
        'salesOrderDetail.oedtcoreflag' => 'OEDTCOREFLAG',
        'SalesOrderDetailTableMap::COL_OEDTCOREFLAG' => 'OEDTCOREFLAG',
        'COL_OEDTCOREFLAG' => 'OEDTCOREFLAG',
        'OedtCoreFlag' => 'OEDTCOREFLAG',
        'so_detail.OedtCoreFlag' => 'OEDTCOREFLAG',
        'Oedtnssalesacct' => 'OEDTNSSALESACCT',
        'SalesOrderDetail.Oedtnssalesacct' => 'OEDTNSSALESACCT',
        'oedtnssalesacct' => 'OEDTNSSALESACCT',
        'salesOrderDetail.oedtnssalesacct' => 'OEDTNSSALESACCT',
        'SalesOrderDetailTableMap::COL_OEDTNSSALESACCT' => 'OEDTNSSALESACCT',
        'COL_OEDTNSSALESACCT' => 'OEDTNSSALESACCT',
        'OedtNsSalesAcct' => 'OEDTNSSALESACCT',
        'so_detail.OedtNsSalesAcct' => 'OEDTNSSALESACCT',
        'Oedtcertreqd' => 'OEDTCERTREQD',
        'SalesOrderDetail.Oedtcertreqd' => 'OEDTCERTREQD',
        'oedtcertreqd' => 'OEDTCERTREQD',
        'salesOrderDetail.oedtcertreqd' => 'OEDTCERTREQD',
        'SalesOrderDetailTableMap::COL_OEDTCERTREQD' => 'OEDTCERTREQD',
        'COL_OEDTCERTREQD' => 'OEDTCERTREQD',
        'OedtCertReqd' => 'OEDTCERTREQD',
        'so_detail.OedtCertReqd' => 'OEDTCERTREQD',
        'Oedtaddonsales' => 'OEDTADDONSALES',
        'SalesOrderDetail.Oedtaddonsales' => 'OEDTADDONSALES',
        'oedtaddonsales' => 'OEDTADDONSALES',
        'salesOrderDetail.oedtaddonsales' => 'OEDTADDONSALES',
        'SalesOrderDetailTableMap::COL_OEDTADDONSALES' => 'OEDTADDONSALES',
        'COL_OEDTADDONSALES' => 'OEDTADDONSALES',
        'OedtAddOnSales' => 'OEDTADDONSALES',
        'so_detail.OedtAddOnSales' => 'OEDTADDONSALES',
        'Oedtbordflag' => 'OEDTBORDFLAG',
        'SalesOrderDetail.Oedtbordflag' => 'OEDTBORDFLAG',
        'oedtbordflag' => 'OEDTBORDFLAG',
        'salesOrderDetail.oedtbordflag' => 'OEDTBORDFLAG',
        'SalesOrderDetailTableMap::COL_OEDTBORDFLAG' => 'OEDTBORDFLAG',
        'COL_OEDTBORDFLAG' => 'OEDTBORDFLAG',
        'OedtBordFlag' => 'OEDTBORDFLAG',
        'so_detail.OedtBordFlag' => 'OEDTBORDFLAG',
        'Oedttempgrove' => 'OEDTTEMPGROVE',
        'SalesOrderDetail.Oedttempgrove' => 'OEDTTEMPGROVE',
        'oedttempgrove' => 'OEDTTEMPGROVE',
        'salesOrderDetail.oedttempgrove' => 'OEDTTEMPGROVE',
        'SalesOrderDetailTableMap::COL_OEDTTEMPGROVE' => 'OEDTTEMPGROVE',
        'COL_OEDTTEMPGROVE' => 'OEDTTEMPGROVE',
        'OedtTempGrove' => 'OEDTTEMPGROVE',
        'so_detail.OedtTempGrove' => 'OEDTTEMPGROVE',
        'Oedtgrovedisc' => 'OEDTGROVEDISC',
        'SalesOrderDetail.Oedtgrovedisc' => 'OEDTGROVEDISC',
        'oedtgrovedisc' => 'OEDTGROVEDISC',
        'salesOrderDetail.oedtgrovedisc' => 'OEDTGROVEDISC',
        'SalesOrderDetailTableMap::COL_OEDTGROVEDISC' => 'OEDTGROVEDISC',
        'COL_OEDTGROVEDISC' => 'OEDTGROVEDISC',
        'OedtGroveDisc' => 'OEDTGROVEDISC',
        'so_detail.OedtGroveDisc' => 'OEDTGROVEDISC',
        'Oedtoffinvc' => 'OEDTOFFINVC',
        'SalesOrderDetail.Oedtoffinvc' => 'OEDTOFFINVC',
        'oedtoffinvc' => 'OEDTOFFINVC',
        'salesOrderDetail.oedtoffinvc' => 'OEDTOFFINVC',
        'SalesOrderDetailTableMap::COL_OEDTOFFINVC' => 'OEDTOFFINVC',
        'COL_OEDTOFFINVC' => 'OEDTOFFINVC',
        'OedtOffInvc' => 'OEDTOFFINVC',
        'so_detail.OedtOffInvc' => 'OEDTOFFINVC',
        'Inititemgrup' => 'INITITEMGRUP',
        'SalesOrderDetail.Inititemgrup' => 'INITITEMGRUP',
        'inititemgrup' => 'INITITEMGRUP',
        'salesOrderDetail.inititemgrup' => 'INITITEMGRUP',
        'SalesOrderDetailTableMap::COL_INITITEMGRUP' => 'INITITEMGRUP',
        'COL_INITITEMGRUP' => 'INITITEMGRUP',
        'InitItemGrup' => 'INITITEMGRUP',
        'so_detail.InitItemGrup' => 'INITITEMGRUP',
        'Apvevendid' => 'APVEVENDID',
        'SalesOrderDetail.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'salesOrderDetail.apvevendid' => 'APVEVENDID',
        'SalesOrderDetailTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'so_detail.ApveVendId' => 'APVEVENDID',
        'Oedtacct' => 'OEDTACCT',
        'SalesOrderDetail.Oedtacct' => 'OEDTACCT',
        'oedtacct' => 'OEDTACCT',
        'salesOrderDetail.oedtacct' => 'OEDTACCT',
        'SalesOrderDetailTableMap::COL_OEDTACCT' => 'OEDTACCT',
        'COL_OEDTACCT' => 'OEDTACCT',
        'OedtAcct' => 'OEDTACCT',
        'so_detail.OedtAcct' => 'OEDTACCT',
        'Oedtloadtot' => 'OEDTLOADTOT',
        'SalesOrderDetail.Oedtloadtot' => 'OEDTLOADTOT',
        'oedtloadtot' => 'OEDTLOADTOT',
        'salesOrderDetail.oedtloadtot' => 'OEDTLOADTOT',
        'SalesOrderDetailTableMap::COL_OEDTLOADTOT' => 'OEDTLOADTOT',
        'COL_OEDTLOADTOT' => 'OEDTLOADTOT',
        'OedtLoadTot' => 'OEDTLOADTOT',
        'so_detail.OedtLoadTot' => 'OEDTLOADTOT',
        'Oedtpickedqty' => 'OEDTPICKEDQTY',
        'SalesOrderDetail.Oedtpickedqty' => 'OEDTPICKEDQTY',
        'oedtpickedqty' => 'OEDTPICKEDQTY',
        'salesOrderDetail.oedtpickedqty' => 'OEDTPICKEDQTY',
        'SalesOrderDetailTableMap::COL_OEDTPICKEDQTY' => 'OEDTPICKEDQTY',
        'COL_OEDTPICKEDQTY' => 'OEDTPICKEDQTY',
        'OedtPickedQty' => 'OEDTPICKEDQTY',
        'so_detail.OedtPickedQty' => 'OEDTPICKEDQTY',
        'Oedtwiorigqty' => 'OEDTWIORIGQTY',
        'SalesOrderDetail.Oedtwiorigqty' => 'OEDTWIORIGQTY',
        'oedtwiorigqty' => 'OEDTWIORIGQTY',
        'salesOrderDetail.oedtwiorigqty' => 'OEDTWIORIGQTY',
        'SalesOrderDetailTableMap::COL_OEDTWIORIGQTY' => 'OEDTWIORIGQTY',
        'COL_OEDTWIORIGQTY' => 'OEDTWIORIGQTY',
        'OedtWiOrigQty' => 'OEDTWIORIGQTY',
        'so_detail.OedtWiOrigQty' => 'OEDTWIORIGQTY',
        'Oedtmargintot' => 'OEDTMARGINTOT',
        'SalesOrderDetail.Oedtmargintot' => 'OEDTMARGINTOT',
        'oedtmargintot' => 'OEDTMARGINTOT',
        'salesOrderDetail.oedtmargintot' => 'OEDTMARGINTOT',
        'SalesOrderDetailTableMap::COL_OEDTMARGINTOT' => 'OEDTMARGINTOT',
        'COL_OEDTMARGINTOT' => 'OEDTMARGINTOT',
        'OedtMarginTot' => 'OEDTMARGINTOT',
        'so_detail.OedtMarginTot' => 'OEDTMARGINTOT',
        'Oedtcorecost' => 'OEDTCORECOST',
        'SalesOrderDetail.Oedtcorecost' => 'OEDTCORECOST',
        'oedtcorecost' => 'OEDTCORECOST',
        'salesOrderDetail.oedtcorecost' => 'OEDTCORECOST',
        'SalesOrderDetailTableMap::COL_OEDTCORECOST' => 'OEDTCORECOST',
        'COL_OEDTCORECOST' => 'OEDTCORECOST',
        'OedtCoreCost' => 'OEDTCORECOST',
        'so_detail.OedtCoreCost' => 'OEDTCORECOST',
        'Oedtitemref' => 'OEDTITEMREF',
        'SalesOrderDetail.Oedtitemref' => 'OEDTITEMREF',
        'oedtitemref' => 'OEDTITEMREF',
        'salesOrderDetail.oedtitemref' => 'OEDTITEMREF',
        'SalesOrderDetailTableMap::COL_OEDTITEMREF' => 'OEDTITEMREF',
        'COL_OEDTITEMREF' => 'OEDTITEMREF',
        'OedtItemRef' => 'OEDTITEMREF',
        'so_detail.OedtItemRef' => 'OEDTITEMREF',
        'Oedtsac02returncode' => 'OEDTSAC02RETURNCODE',
        'SalesOrderDetail.Oedtsac02returncode' => 'OEDTSAC02RETURNCODE',
        'oedtsac02returncode' => 'OEDTSAC02RETURNCODE',
        'salesOrderDetail.oedtsac02returncode' => 'OEDTSAC02RETURNCODE',
        'SalesOrderDetailTableMap::COL_OEDTSAC02RETURNCODE' => 'OEDTSAC02RETURNCODE',
        'COL_OEDTSAC02RETURNCODE' => 'OEDTSAC02RETURNCODE',
        'OedtSac02ReturnCode' => 'OEDTSAC02RETURNCODE',
        'so_detail.OedtSac02ReturnCode' => 'OEDTSAC02RETURNCODE',
        'Oedtwgtaxcode' => 'OEDTWGTAXCODE',
        'SalesOrderDetail.Oedtwgtaxcode' => 'OEDTWGTAXCODE',
        'oedtwgtaxcode' => 'OEDTWGTAXCODE',
        'salesOrderDetail.oedtwgtaxcode' => 'OEDTWGTAXCODE',
        'SalesOrderDetailTableMap::COL_OEDTWGTAXCODE' => 'OEDTWGTAXCODE',
        'COL_OEDTWGTAXCODE' => 'OEDTWGTAXCODE',
        'OedtWgTaxCode' => 'OEDTWGTAXCODE',
        'so_detail.OedtWgTaxCode' => 'OEDTWGTAXCODE',
        'Oedtwgprice' => 'OEDTWGPRICE',
        'SalesOrderDetail.Oedtwgprice' => 'OEDTWGPRICE',
        'oedtwgprice' => 'OEDTWGPRICE',
        'salesOrderDetail.oedtwgprice' => 'OEDTWGPRICE',
        'SalesOrderDetailTableMap::COL_OEDTWGPRICE' => 'OEDTWGPRICE',
        'COL_OEDTWGPRICE' => 'OEDTWGPRICE',
        'OedtWgPrice' => 'OEDTWGPRICE',
        'so_detail.OedtWgPrice' => 'OEDTWGPRICE',
        'Oedtwgtot' => 'OEDTWGTOT',
        'SalesOrderDetail.Oedtwgtot' => 'OEDTWGTOT',
        'oedtwgtot' => 'OEDTWGTOT',
        'salesOrderDetail.oedtwgtot' => 'OEDTWGTOT',
        'SalesOrderDetailTableMap::COL_OEDTWGTOT' => 'OEDTWGTOT',
        'COL_OEDTWGTOT' => 'OEDTWGTOT',
        'OedtWgTot' => 'OEDTWGTOT',
        'so_detail.OedtWgTot' => 'OEDTWGTOT',
        'Oedtcntrqty' => 'OEDTCNTRQTY',
        'SalesOrderDetail.Oedtcntrqty' => 'OEDTCNTRQTY',
        'oedtcntrqty' => 'OEDTCNTRQTY',
        'salesOrderDetail.oedtcntrqty' => 'OEDTCNTRQTY',
        'SalesOrderDetailTableMap::COL_OEDTCNTRQTY' => 'OEDTCNTRQTY',
        'COL_OEDTCNTRQTY' => 'OEDTCNTRQTY',
        'OedtCntrQty' => 'OEDTCNTRQTY',
        'so_detail.OedtCntrQty' => 'OEDTCNTRQTY',
        'Oedtconfirmcode' => 'OEDTCONFIRMCODE',
        'SalesOrderDetail.Oedtconfirmcode' => 'OEDTCONFIRMCODE',
        'oedtconfirmcode' => 'OEDTCONFIRMCODE',
        'salesOrderDetail.oedtconfirmcode' => 'OEDTCONFIRMCODE',
        'SalesOrderDetailTableMap::COL_OEDTCONFIRMCODE' => 'OEDTCONFIRMCODE',
        'COL_OEDTCONFIRMCODE' => 'OEDTCONFIRMCODE',
        'OedtConfirmCode' => 'OEDTCONFIRMCODE',
        'so_detail.OedtConfirmCode' => 'OEDTCONFIRMCODE',
        'Oedtpicked' => 'OEDTPICKED',
        'SalesOrderDetail.Oedtpicked' => 'OEDTPICKED',
        'oedtpicked' => 'OEDTPICKED',
        'salesOrderDetail.oedtpicked' => 'OEDTPICKED',
        'SalesOrderDetailTableMap::COL_OEDTPICKED' => 'OEDTPICKED',
        'COL_OEDTPICKED' => 'OEDTPICKED',
        'OedtPicked' => 'OEDTPICKED',
        'so_detail.OedtPicked' => 'OEDTPICKED',
        'Oedtorigrqstdate' => 'OEDTORIGRQSTDATE',
        'SalesOrderDetail.Oedtorigrqstdate' => 'OEDTORIGRQSTDATE',
        'oedtorigrqstdate' => 'OEDTORIGRQSTDATE',
        'salesOrderDetail.oedtorigrqstdate' => 'OEDTORIGRQSTDATE',
        'SalesOrderDetailTableMap::COL_OEDTORIGRQSTDATE' => 'OEDTORIGRQSTDATE',
        'COL_OEDTORIGRQSTDATE' => 'OEDTORIGRQSTDATE',
        'OedtOrigRqstDate' => 'OEDTORIGRQSTDATE',
        'so_detail.OedtOrigRqstDate' => 'OEDTORIGRQSTDATE',
        'Oedtfablock' => 'OEDTFABLOCK',
        'SalesOrderDetail.Oedtfablock' => 'OEDTFABLOCK',
        'oedtfablock' => 'OEDTFABLOCK',
        'salesOrderDetail.oedtfablock' => 'OEDTFABLOCK',
        'SalesOrderDetailTableMap::COL_OEDTFABLOCK' => 'OEDTFABLOCK',
        'COL_OEDTFABLOCK' => 'OEDTFABLOCK',
        'OedtFabLock' => 'OEDTFABLOCK',
        'so_detail.OedtFabLock' => 'OEDTFABLOCK',
        'Oedtlabelprinted' => 'OEDTLABELPRINTED',
        'SalesOrderDetail.Oedtlabelprinted' => 'OEDTLABELPRINTED',
        'oedtlabelprinted' => 'OEDTLABELPRINTED',
        'salesOrderDetail.oedtlabelprinted' => 'OEDTLABELPRINTED',
        'SalesOrderDetailTableMap::COL_OEDTLABELPRINTED' => 'OEDTLABELPRINTED',
        'COL_OEDTLABELPRINTED' => 'OEDTLABELPRINTED',
        'OedtLabelPrinted' => 'OEDTLABELPRINTED',
        'so_detail.OedtLabelPrinted' => 'OEDTLABELPRINTED',
        'Oedtquoteid' => 'OEDTQUOTEID',
        'SalesOrderDetail.Oedtquoteid' => 'OEDTQUOTEID',
        'oedtquoteid' => 'OEDTQUOTEID',
        'salesOrderDetail.oedtquoteid' => 'OEDTQUOTEID',
        'SalesOrderDetailTableMap::COL_OEDTQUOTEID' => 'OEDTQUOTEID',
        'COL_OEDTQUOTEID' => 'OEDTQUOTEID',
        'OedtQuoteId' => 'OEDTQUOTEID',
        'so_detail.OedtQuoteId' => 'OEDTQUOTEID',
        'Oedtinvprinted' => 'OEDTINVPRINTED',
        'SalesOrderDetail.Oedtinvprinted' => 'OEDTINVPRINTED',
        'oedtinvprinted' => 'OEDTINVPRINTED',
        'salesOrderDetail.oedtinvprinted' => 'OEDTINVPRINTED',
        'SalesOrderDetailTableMap::COL_OEDTINVPRINTED' => 'OEDTINVPRINTED',
        'COL_OEDTINVPRINTED' => 'OEDTINVPRINTED',
        'OedtInvPrinted' => 'OEDTINVPRINTED',
        'so_detail.OedtInvPrinted' => 'OEDTINVPRINTED',
        'Oedtstockcheck' => 'OEDTSTOCKCHECK',
        'SalesOrderDetail.Oedtstockcheck' => 'OEDTSTOCKCHECK',
        'oedtstockcheck' => 'OEDTSTOCKCHECK',
        'salesOrderDetail.oedtstockcheck' => 'OEDTSTOCKCHECK',
        'SalesOrderDetailTableMap::COL_OEDTSTOCKCHECK' => 'OEDTSTOCKCHECK',
        'COL_OEDTSTOCKCHECK' => 'OEDTSTOCKCHECK',
        'OedtStockCheck' => 'OEDTSTOCKCHECK',
        'so_detail.OedtStockCheck' => 'OEDTSTOCKCHECK',
        'Oedtshouldwesplit' => 'OEDTSHOULDWESPLIT',
        'SalesOrderDetail.Oedtshouldwesplit' => 'OEDTSHOULDWESPLIT',
        'oedtshouldwesplit' => 'OEDTSHOULDWESPLIT',
        'salesOrderDetail.oedtshouldwesplit' => 'OEDTSHOULDWESPLIT',
        'SalesOrderDetailTableMap::COL_OEDTSHOULDWESPLIT' => 'OEDTSHOULDWESPLIT',
        'COL_OEDTSHOULDWESPLIT' => 'OEDTSHOULDWESPLIT',
        'OedtShouldWeSplit' => 'OEDTSHOULDWESPLIT',
        'so_detail.OedtShouldWeSplit' => 'OEDTSHOULDWESPLIT',
        'Oedtcofcreqd' => 'OEDTCOFCREQD',
        'SalesOrderDetail.Oedtcofcreqd' => 'OEDTCOFCREQD',
        'oedtcofcreqd' => 'OEDTCOFCREQD',
        'salesOrderDetail.oedtcofcreqd' => 'OEDTCOFCREQD',
        'SalesOrderDetailTableMap::COL_OEDTCOFCREQD' => 'OEDTCOFCREQD',
        'COL_OEDTCOFCREQD' => 'OEDTCOFCREQD',
        'OedtCofcReqd' => 'OEDTCOFCREQD',
        'so_detail.OedtCofcReqd' => 'OEDTCOFCREQD',
        'Oedtackcode' => 'OEDTACKCODE',
        'SalesOrderDetail.Oedtackcode' => 'OEDTACKCODE',
        'oedtackcode' => 'OEDTACKCODE',
        'salesOrderDetail.oedtackcode' => 'OEDTACKCODE',
        'SalesOrderDetailTableMap::COL_OEDTACKCODE' => 'OEDTACKCODE',
        'COL_OEDTACKCODE' => 'OEDTACKCODE',
        'OedtAckCode' => 'OEDTACKCODE',
        'so_detail.OedtAckCode' => 'OEDTACKCODE',
        'Oedtwibordnbr' => 'OEDTWIBORDNBR',
        'SalesOrderDetail.Oedtwibordnbr' => 'OEDTWIBORDNBR',
        'oedtwibordnbr' => 'OEDTWIBORDNBR',
        'salesOrderDetail.oedtwibordnbr' => 'OEDTWIBORDNBR',
        'SalesOrderDetailTableMap::COL_OEDTWIBORDNBR' => 'OEDTWIBORDNBR',
        'COL_OEDTWIBORDNBR' => 'OEDTWIBORDNBR',
        'OedtWiBordNbr' => 'OEDTWIBORDNBR',
        'so_detail.OedtWiBordNbr' => 'OEDTWIBORDNBR',
        'Oedtcerthistordr' => 'OEDTCERTHISTORDR',
        'SalesOrderDetail.Oedtcerthistordr' => 'OEDTCERTHISTORDR',
        'oedtcerthistordr' => 'OEDTCERTHISTORDR',
        'salesOrderDetail.oedtcerthistordr' => 'OEDTCERTHISTORDR',
        'SalesOrderDetailTableMap::COL_OEDTCERTHISTORDR' => 'OEDTCERTHISTORDR',
        'COL_OEDTCERTHISTORDR' => 'OEDTCERTHISTORDR',
        'OedtCertHistOrdr' => 'OEDTCERTHISTORDR',
        'so_detail.OedtCertHistOrdr' => 'OEDTCERTHISTORDR',
        'Oedtcerthistline' => 'OEDTCERTHISTLINE',
        'SalesOrderDetail.Oedtcerthistline' => 'OEDTCERTHISTLINE',
        'oedtcerthistline' => 'OEDTCERTHISTLINE',
        'salesOrderDetail.oedtcerthistline' => 'OEDTCERTHISTLINE',
        'SalesOrderDetailTableMap::COL_OEDTCERTHISTLINE' => 'OEDTCERTHISTLINE',
        'COL_OEDTCERTHISTLINE' => 'OEDTCERTHISTLINE',
        'OedtCertHistLine' => 'OEDTCERTHISTLINE',
        'so_detail.OedtCertHistLine' => 'OEDTCERTHISTLINE',
        'Oedtordrdasitemid' => 'OEDTORDRDASITEMID',
        'SalesOrderDetail.Oedtordrdasitemid' => 'OEDTORDRDASITEMID',
        'oedtordrdasitemid' => 'OEDTORDRDASITEMID',
        'salesOrderDetail.oedtordrdasitemid' => 'OEDTORDRDASITEMID',
        'SalesOrderDetailTableMap::COL_OEDTORDRDASITEMID' => 'OEDTORDRDASITEMID',
        'COL_OEDTORDRDASITEMID' => 'OEDTORDRDASITEMID',
        'OedtOrdrdAsItemId' => 'OEDTORDRDASITEMID',
        'so_detail.OedtOrdrdAsItemId' => 'OEDTORDRDASITEMID',
        'Oedtwibatch1nbr' => 'OEDTWIBATCH1NBR',
        'SalesOrderDetail.Oedtwibatch1nbr' => 'OEDTWIBATCH1NBR',
        'oedtwibatch1nbr' => 'OEDTWIBATCH1NBR',
        'salesOrderDetail.oedtwibatch1nbr' => 'OEDTWIBATCH1NBR',
        'SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR' => 'OEDTWIBATCH1NBR',
        'COL_OEDTWIBATCH1NBR' => 'OEDTWIBATCH1NBR',
        'OedtWiBatch1Nbr' => 'OEDTWIBATCH1NBR',
        'so_detail.OedtWiBatch1Nbr' => 'OEDTWIBATCH1NBR',
        'Oedtwibatch1qty' => 'OEDTWIBATCH1QTY',
        'SalesOrderDetail.Oedtwibatch1qty' => 'OEDTWIBATCH1QTY',
        'oedtwibatch1qty' => 'OEDTWIBATCH1QTY',
        'salesOrderDetail.oedtwibatch1qty' => 'OEDTWIBATCH1QTY',
        'SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY' => 'OEDTWIBATCH1QTY',
        'COL_OEDTWIBATCH1QTY' => 'OEDTWIBATCH1QTY',
        'OedtWiBatch1Qty' => 'OEDTWIBATCH1QTY',
        'so_detail.OedtWiBatch1Qty' => 'OEDTWIBATCH1QTY',
        'Oedtwibatch1stat' => 'OEDTWIBATCH1STAT',
        'SalesOrderDetail.Oedtwibatch1stat' => 'OEDTWIBATCH1STAT',
        'oedtwibatch1stat' => 'OEDTWIBATCH1STAT',
        'salesOrderDetail.oedtwibatch1stat' => 'OEDTWIBATCH1STAT',
        'SalesOrderDetailTableMap::COL_OEDTWIBATCH1STAT' => 'OEDTWIBATCH1STAT',
        'COL_OEDTWIBATCH1STAT' => 'OEDTWIBATCH1STAT',
        'OedtWiBatch1Stat' => 'OEDTWIBATCH1STAT',
        'so_detail.OedtWiBatch1Stat' => 'OEDTWIBATCH1STAT',
        'Oedtrganbr' => 'OEDTRGANBR',
        'SalesOrderDetail.Oedtrganbr' => 'OEDTRGANBR',
        'oedtrganbr' => 'OEDTRGANBR',
        'salesOrderDetail.oedtrganbr' => 'OEDTRGANBR',
        'SalesOrderDetailTableMap::COL_OEDTRGANBR' => 'OEDTRGANBR',
        'COL_OEDTRGANBR' => 'OEDTRGANBR',
        'OedtRgaNbr' => 'OEDTRGANBR',
        'so_detail.OedtRgaNbr' => 'OEDTRGANBR',
        'Oedtorigpric' => 'OEDTORIGPRIC',
        'SalesOrderDetail.Oedtorigpric' => 'OEDTORIGPRIC',
        'oedtorigpric' => 'OEDTORIGPRIC',
        'salesOrderDetail.oedtorigpric' => 'OEDTORIGPRIC',
        'SalesOrderDetailTableMap::COL_OEDTORIGPRIC' => 'OEDTORIGPRIC',
        'COL_OEDTORIGPRIC' => 'OEDTORIGPRIC',
        'OedtOrigPric' => 'OEDTORIGPRIC',
        'so_detail.OedtOrigPric' => 'OEDTORIGPRIC',
        'Oedtreflinenbr' => 'OEDTREFLINENBR',
        'SalesOrderDetail.Oedtreflinenbr' => 'OEDTREFLINENBR',
        'oedtreflinenbr' => 'OEDTREFLINENBR',
        'salesOrderDetail.oedtreflinenbr' => 'OEDTREFLINENBR',
        'SalesOrderDetailTableMap::COL_OEDTREFLINENBR' => 'OEDTREFLINENBR',
        'COL_OEDTREFLINENBR' => 'OEDTREFLINENBR',
        'OedtRefLineNbr' => 'OEDTREFLINENBR',
        'so_detail.OedtRefLineNbr' => 'OEDTREFLINENBR',
        'Oedtbinlocn' => 'OEDTBINLOCN',
        'SalesOrderDetail.Oedtbinlocn' => 'OEDTBINLOCN',
        'oedtbinlocn' => 'OEDTBINLOCN',
        'salesOrderDetail.oedtbinlocn' => 'OEDTBINLOCN',
        'SalesOrderDetailTableMap::COL_OEDTBINLOCN' => 'OEDTBINLOCN',
        'COL_OEDTBINLOCN' => 'OEDTBINLOCN',
        'OedtBinLocn' => 'OEDTBINLOCN',
        'so_detail.OedtBinLocn' => 'OEDTBINLOCN',
        'Oedtacsuplywhse' => 'OEDTACSUPLYWHSE',
        'SalesOrderDetail.Oedtacsuplywhse' => 'OEDTACSUPLYWHSE',
        'oedtacsuplywhse' => 'OEDTACSUPLYWHSE',
        'salesOrderDetail.oedtacsuplywhse' => 'OEDTACSUPLYWHSE',
        'SalesOrderDetailTableMap::COL_OEDTACSUPLYWHSE' => 'OEDTACSUPLYWHSE',
        'COL_OEDTACSUPLYWHSE' => 'OEDTACSUPLYWHSE',
        'OedtAcSuplyWhse' => 'OEDTACSUPLYWHSE',
        'so_detail.OedtAcSuplyWhse' => 'OEDTACSUPLYWHSE',
        'Oedtacpricdate' => 'OEDTACPRICDATE',
        'SalesOrderDetail.Oedtacpricdate' => 'OEDTACPRICDATE',
        'oedtacpricdate' => 'OEDTACPRICDATE',
        'salesOrderDetail.oedtacpricdate' => 'OEDTACPRICDATE',
        'SalesOrderDetailTableMap::COL_OEDTACPRICDATE' => 'OEDTACPRICDATE',
        'COL_OEDTACPRICDATE' => 'OEDTACPRICDATE',
        'OedtAcPricDate' => 'OEDTACPRICDATE',
        'so_detail.OedtAcPricDate' => 'OEDTACPRICDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'SalesOrderDetail.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'salesOrderDetail.dateupdtd' => 'DATEUPDTD',
        'SalesOrderDetailTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_detail.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'SalesOrderDetail.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'salesOrderDetail.timeupdtd' => 'TIMEUPDTD',
        'SalesOrderDetailTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_detail.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'SalesOrderDetail.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'salesOrderDetail.dummy' => 'DUMMY',
        'SalesOrderDetailTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_detail.dummy' => 'DUMMY',
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
        $this->setName('so_detail');
        $this->setPhpName('SalesOrderDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesOrderDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER' , 'so_header', 'OehdNbr', true, 10, 0);
        $this->addPrimaryKey('OedtLine', 'Oedtline', 'INTEGER', true, 4, 0);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('OedtDesc', 'Oedtdesc', 'VARCHAR', true, 35, '');
        $this->addColumn('OedtDesc2', 'Oedtdesc2', 'VARCHAR', true, 35, '');
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('OedtRqstDate', 'Oedtrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('OedtCancDate', 'Oedtcancdate', 'CHAR', true, 8, '');
        $this->addColumn('OedtShipDate', 'Oedtshipdate', 'CHAR', true, 8, '');
        $this->addColumn('OedtSpecOrdr', 'Oedtspecordr', 'CHAR', true, null, 'N');
        $this->addColumn('ArtbCtaxCode', 'Artbctaxcode', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtQtyOrd', 'Oedtqtyord', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtQtyShip', 'Oedtqtyship', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtQtyShipTot', 'Oedtqtyshiptot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtQtyBord', 'Oedtqtybord', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtPric', 'Oedtpric', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtCost', 'Oedtcost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtTaxPctTot', 'Oedttaxpcttot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtPricTot', 'Oedtprictot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtCostTot', 'Oedtcosttot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtSpCommPct', 'Oedtspcommpct', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtBrknCaseQty', 'Oedtbrkncaseqty', 'INTEGER', true, 5, 0);
        $this->addColumn('OedtBin', 'Oedtbin', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtPersonalCd', 'Oedtpersonalcd', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtAcDisc1', 'Oedtacdisc1', 'CHAR', true, null, '');
        $this->addColumn('OedtAcDisc2', 'Oedtacdisc2', 'CHAR', true, null, '');
        $this->addColumn('OedtAcDisc3', 'Oedtacdisc3', 'CHAR', true, null, '');
        $this->addColumn('OedtAcDisc4', 'Oedtacdisc4', 'CHAR', true, null, '');
        $this->addColumn('OedtLmWipNbr', 'Oedtlmwipnbr', 'CHAR', true, 8, '');
        $this->addColumn('OedtCorePric', 'Oedtcorepric', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtAsstCode', 'Oedtasstcode', 'VARCHAR', true, 3, '');
        $this->addColumn('OedtAsstQty', 'Oedtasstqty', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtListPric', 'Oedtlistpric', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtStanCost', 'Oedtstancost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtVendItemJob', 'Oedtvenditemjob', 'VARCHAR', true, 30, '');
        $this->addColumn('OedtNsVendId', 'Oedtnsvendid', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtNsItemGrup', 'Oedtnsitemgrup', 'VARCHAR', true, 4, '');
        $this->addColumn('OedtUseCode', 'Oedtusecode', 'CHAR', true, null, '');
        $this->addColumn('OedtNsShipFromId', 'Oedtnsshipfromid', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtAsstOvrd', 'Oedtasstovrd', 'CHAR', true, null, 'N');
        $this->addColumn('OedtPricOvrd', 'Oedtpricovrd', 'CHAR', true, null, 'N');
        $this->addColumn('OedtPickFlag', 'Oedtpickflag', 'CHAR', true, null, 'N');
        $this->addColumn('OedtMstrTaxCode1', 'Oedtmstrtaxcode1', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct1', 'Oedtmstrtaxpct1', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode2', 'Oedtmstrtaxcode2', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct2', 'Oedtmstrtaxpct2', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode3', 'Oedtmstrtaxcode3', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct3', 'Oedtmstrtaxpct3', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode4', 'Oedtmstrtaxcode4', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct4', 'Oedtmstrtaxpct4', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode5', 'Oedtmstrtaxcode5', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct5', 'Oedtmstrtaxpct5', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode6', 'Oedtmstrtaxcode6', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct6', 'Oedtmstrtaxpct6', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode7', 'Oedtmstrtaxcode7', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct7', 'Oedtmstrtaxpct7', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode8', 'Oedtmstrtaxcode8', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct8', 'Oedtmstrtaxpct8', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtMstrTaxCode9', 'Oedtmstrtaxcode9', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtMstrTaxPct9', 'Oedtmstrtaxpct9', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtBinArea', 'Oedtbinarea', 'CHAR', true, null, '');
        $this->addColumn('OedtSplitLine', 'Oedtsplitline', 'CHAR', true, null, '');
        $this->addColumn('OedtLostReas', 'Oedtlostreas', 'VARCHAR', true, 4, '');
        $this->addColumn('OedtOrigLine', 'Oedtorigline', 'INTEGER', true, 5, 0);
        $this->addColumn('OedtCustCrssRef', 'Oedtcustcrssref', 'VARCHAR', true, 30, '');
        $this->addColumn('OedtUom', 'Oedtuom', 'VARCHAR', true, 4, '');
        $this->addColumn('OedtShipFlag', 'Oedtshipflag', 'CHAR', true, null, 'N');
        $this->addColumn('OedtKitFlag', 'Oedtkitflag', 'CHAR', true, null, 'N');
        $this->addColumn('OedtKitItemNbr', 'Oedtkititemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('OedtBfCost', 'Oedtbfcost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtBfMsgCode', 'Oedtbfmsgcode', 'VARCHAR', true, 4, '');
        $this->addColumn('OedtBfCostTot', 'Oedtbfcosttot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtLmBulkPric', 'Oedtlmbulkpric', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtLmMtrxPkgPric', 'Oedtlmmtrxpkgpric', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtLmMtrxBulkPric', 'Oedtlmmtrxbulkpric', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtLmContractPric', 'Oedtlmcontractpric', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtWghtTot', 'Oedtwghttot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtOrdrAs', 'Oedtordras', 'VARCHAR', true, 2, '');
        $this->addColumn('OedtPoDetLineNbr', 'Oedtpodetlinenbr', 'INTEGER', true, 6, 0);
        $this->addColumn('OedtQtyToShip', 'Oedtqtytoship', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtPoNbr', 'Oedtponbr', 'CHAR', true, 8, '');
        $this->addColumn('OedtPoRef', 'Oedtporef', 'VARCHAR', true, 15, '');
        $this->addColumn('OedtFrtIn', 'Oedtfrtin', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtFrtInEntered', 'Oedtfrtinentered', 'CHAR', true, null, 'N');
        $this->addColumn('OedtProdCmplt', 'Oedtprodcmplt', 'CHAR', true, null, '');
        $this->addColumn('OedtErFlag', 'Oedterflag', 'CHAR', true, null, '');
        $this->addColumn('OedtOrigItem', 'Oedtorigitem', 'VARCHAR', true, 30, '');
        $this->addColumn('OedtSubFlag', 'Oedtsubflag', 'CHAR', true, null, '');
        $this->addColumn('OedtEdiIncomingSeq', 'Oedtediincomingseq', 'INTEGER', true, 3, 0);
        $this->addColumn('OedtSpordPoLine', 'Oedtspordpoline', 'INTEGER', true, 4, 0);
        $this->addColumn('OedtCatlgId', 'Oedtcatlgid', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtDesignCd', 'Oedtdesigncd', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtDiscPct', 'Oedtdiscpct', 'DECIMAL', true, 20, 0.000);
        $this->addColumn('OedtTaxAmt', 'Oedttaxamt', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtXUsage', 'Oedtxusage', 'CHAR', true, null, 'N');
        $this->addColumn('OedtRqtsLock', 'Oedtrqtslock', 'CHAR', true, null, 'N');
        $this->addColumn('OedtFreshFrozen', 'Oedtfreshfrozen', 'CHAR', true, null, '');
        $this->addColumn('OedtCoreFlag', 'Oedtcoreflag', 'CHAR', true, null, 'N');
        $this->addColumn('OedtNsSalesAcct', 'Oedtnssalesacct', 'VARCHAR', true, 9, '');
        $this->addColumn('OedtCertReqd', 'Oedtcertreqd', 'CHAR', true, null, 'N');
        $this->addColumn('OedtAddOnSales', 'Oedtaddonsales', 'CHAR', true, null, 'N');
        $this->addColumn('OedtBordFlag', 'Oedtbordflag', 'CHAR', true, null, 'N');
        $this->addColumn('OedtTempGrove', 'Oedttempgrove', 'CHAR', true, null, '');
        $this->addColumn('OedtGroveDisc', 'Oedtgrovedisc', 'CHAR', true, null, '');
        $this->addColumn('OedtOffInvc', 'Oedtoffinvc', 'CHAR', true, null, '');
        $this->addColumn('InitItemGrup', 'Inititemgrup', 'VARCHAR', true, 4, '');
        $this->addColumn('ApveVendId', 'Apvevendid', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtAcct', 'Oedtacct', 'VARCHAR', true, 9, '');
        $this->addColumn('OedtLoadTot', 'Oedtloadtot', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtPickedQty', 'Oedtpickedqty', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtWiOrigQty', 'Oedtwiorigqty', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtMarginTot', 'Oedtmargintot', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtCoreCost', 'Oedtcorecost', 'DECIMAL', true, 20, 0.0000);
        $this->addColumn('OedtItemRef', 'Oedtitemref', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtSac02ReturnCode', 'Oedtsac02returncode', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtWgTaxCode', 'Oedtwgtaxcode', 'VARCHAR', true, 6, '');
        $this->addColumn('OedtWgPrice', 'Oedtwgprice', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('OedtWgTot', 'Oedtwgtot', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtCntrQty', 'Oedtcntrqty', 'INTEGER', true, 7, 0);
        $this->addColumn('OedtConfirmCode', 'Oedtconfirmcode', 'VARCHAR', true, 4, '');
        $this->addColumn('OedtPicked', 'Oedtpicked', 'CHAR', true, null, '');
        $this->addColumn('OedtOrigRqstDate', 'Oedtorigrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('OedtFabLock', 'Oedtfablock', 'CHAR', true, null, '');
        $this->addColumn('OedtLabelPrinted', 'Oedtlabelprinted', 'CHAR', true, null, '');
        $this->addColumn('OedtQuoteId', 'Oedtquoteid', 'VARCHAR', true, 8, '');
        $this->addColumn('OedtInvPrinted', 'Oedtinvprinted', 'CHAR', true, null, '');
        $this->addColumn('OedtStockCheck', 'Oedtstockcheck', 'CHAR', true, null, '');
        $this->addColumn('OedtShouldWeSplit', 'Oedtshouldwesplit', 'CHAR', true, null, '');
        $this->addColumn('OedtCofcReqd', 'Oedtcofcreqd', 'CHAR', true, null, 'N');
        $this->addColumn('OedtAckCode', 'Oedtackcode', 'VARCHAR', true, 2, '');
        $this->addColumn('OedtWiBordNbr', 'Oedtwibordnbr', 'VARCHAR', true, 10, '');
        $this->addColumn('OedtCertHistOrdr', 'Oedtcerthistordr', 'VARCHAR', true, 10, '');
        $this->addColumn('OedtCertHistLine', 'Oedtcerthistline', 'VARCHAR', true, 4, '');
        $this->addColumn('OedtOrdrdAsItemId', 'Oedtordrdasitemid', 'VARCHAR', true, 30, '');
        $this->addColumn('OedtWiBatch1Nbr', 'Oedtwibatch1nbr', 'INTEGER', true, 8, 0);
        $this->addColumn('OedtWiBatch1Qty', 'Oedtwibatch1qty', 'DECIMAL', true, 20, 0.00000);
        $this->addColumn('OedtWiBatch1Stat', 'Oedtwibatch1stat', 'CHAR', true, null, '');
        $this->addColumn('OedtRgaNbr', 'Oedtrganbr', 'INTEGER', true, 8, 0);
        $this->addColumn('OedtOrigPric', 'Oedtorigpric', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('OedtRefLineNbr', 'Oedtreflinenbr', 'INTEGER', true, 4, 0);
        $this->addColumn('OedtBinLocn', 'Oedtbinlocn', 'VARCHAR', true, 20, '');
        $this->addColumn('OedtAcSuplyWhse', 'Oedtacsuplywhse', 'VARCHAR', true, 2, '');
        $this->addColumn('OedtAcPricDate', 'Oedtacpricdate', 'CHAR', true, 8, '');
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
        $this->addRelation('SalesOrder', '\\SalesOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('SalesOrderLotserial', '\\SalesOrderLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
  1 =>
  array (
    0 => ':OedtLine',
    1 => ':OedtLine',
  ),
), null, null, 'SalesOrderLotserials', false);
        $this->addRelation('SoAllocatedLotserial', '\\SoAllocatedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
  1 =>
  array (
    0 => ':OedtLine',
    1 => ':OedtLine',
  ),
), null, null, 'SoAllocatedLotserials', false);
        $this->addRelation('SoPickedLotserial', '\\SoPickedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
  1 =>
  array (
    0 => ':OedtLine',
    1 => ':OedtLine',
  ),
), null, null, 'SoPickedLotserials', false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \SalesOrderDetail $obj A \SalesOrderDetail object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(SalesOrderDetail $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehdnbr() || is_scalar($obj->getOehdnbr()) || is_callable([$obj->getOehdnbr(), '__toString']) ? (string) $obj->getOehdnbr() : $obj->getOehdnbr()), (null === $obj->getOedtline() || is_scalar($obj->getOedtline()) || is_callable([$obj->getOedtline(), '__toString']) ? (string) $obj->getOedtline() : $obj->getOedtline())]);
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
     * @param mixed $value A \SalesOrderDetail object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesOrderDetail) {
                $key = serialize([(null === $value->getOehdnbr() || is_scalar($value->getOehdnbr()) || is_callable([$value->getOehdnbr(), '__toString']) ? (string) $value->getOehdnbr() : $value->getOehdnbr()), (null === $value->getOedtline() || is_scalar($value->getOedtline()) || is_callable([$value->getOedtline(), '__toString']) ? (string) $value->getOedtline() : $value->getOedtline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesOrderDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? SalesOrderDetailTableMap::CLASS_DEFAULT : SalesOrderDetailTableMap::OM_CLASS;
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
     * @return array (SalesOrderDetail object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SalesOrderDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesOrderDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesOrderDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesOrderDetailTableMap::OM_CLASS;
            /** @var SalesOrderDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesOrderDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesOrderDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesOrderDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLINE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTDESC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTDESC2);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTRQSTDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCANCDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSHIPDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPECORDR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_ARTBCTAXCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYORD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYSHIP);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYBORD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRICTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOSTTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBIN);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPERSONALCD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC1);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC2);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC3);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC4);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMWIPNBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOREPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTASSTCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTASSTQTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLISTPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSTANCOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTVENDITEMJOB);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSVENDID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSITEMGRUP);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTUSECODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSSHIPFROMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTASSTOVRD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRICOVRD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPICKFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE1);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE2);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE3);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE4);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE5);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE6);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE7);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE8);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE9);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBINAREA);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPLITLINE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLOSTREAS);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGLINE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCUSTCRSSREF);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTUOM);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSHIPFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTKITFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTKITITEMNBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBFCOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBFMSGCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGHTTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTORDRAS);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPODETLINENBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPONBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPOREF);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTFRTIN);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTFRTINENTERED);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRODCMPLT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTERFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGITEM);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSUBFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCATLGID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTDESIGNCD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTDISCPCT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTTAXAMT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTXUSAGE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTRQTSLOCK);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTFRESHFROZEN);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOREFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSSALESACCT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCERTREQD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTADDONSALES);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBORDFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTTEMPGROVE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTGROVEDISC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTOFFINVC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_INITITEMGRUP);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACCT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLOADTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPICKEDQTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIORIGQTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTMARGINTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCORECOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTITEMREF);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSAC02RETURNCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGTAXCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGPRICE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGTOT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCNTRQTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCONFIRMCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTPICKED);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGRQSTDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTFABLOCK);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTLABELPRINTED);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTQUOTEID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTINVPRINTED);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSTOCKCHECK);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTSHOULDWESPLIT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOFCREQD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACKCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBORDNBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCERTHISTORDR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTCERTHISTLINE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTORDRDASITEMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBATCH1STAT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTRGANBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGPRIC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTREFLINENBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTBINLOCN);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACSUPLYWHSE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_OEDTACPRICDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OedtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OedtDesc');
            $criteria->addSelectColumn($alias . '.OedtDesc2');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.OedtRqstDate');
            $criteria->addSelectColumn($alias . '.OedtCancDate');
            $criteria->addSelectColumn($alias . '.OedtShipDate');
            $criteria->addSelectColumn($alias . '.OedtSpecOrdr');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->addSelectColumn($alias . '.OedtQtyOrd');
            $criteria->addSelectColumn($alias . '.OedtQtyShip');
            $criteria->addSelectColumn($alias . '.OedtQtyShipTot');
            $criteria->addSelectColumn($alias . '.OedtQtyBord');
            $criteria->addSelectColumn($alias . '.OedtPric');
            $criteria->addSelectColumn($alias . '.OedtCost');
            $criteria->addSelectColumn($alias . '.OedtTaxPctTot');
            $criteria->addSelectColumn($alias . '.OedtPricTot');
            $criteria->addSelectColumn($alias . '.OedtCostTot');
            $criteria->addSelectColumn($alias . '.OedtSpCommPct');
            $criteria->addSelectColumn($alias . '.OedtBrknCaseQty');
            $criteria->addSelectColumn($alias . '.OedtBin');
            $criteria->addSelectColumn($alias . '.OedtPersonalCd');
            $criteria->addSelectColumn($alias . '.OedtAcDisc1');
            $criteria->addSelectColumn($alias . '.OedtAcDisc2');
            $criteria->addSelectColumn($alias . '.OedtAcDisc3');
            $criteria->addSelectColumn($alias . '.OedtAcDisc4');
            $criteria->addSelectColumn($alias . '.OedtLmWipNbr');
            $criteria->addSelectColumn($alias . '.OedtCorePric');
            $criteria->addSelectColumn($alias . '.OedtAsstCode');
            $criteria->addSelectColumn($alias . '.OedtAsstQty');
            $criteria->addSelectColumn($alias . '.OedtListPric');
            $criteria->addSelectColumn($alias . '.OedtStanCost');
            $criteria->addSelectColumn($alias . '.OedtVendItemJob');
            $criteria->addSelectColumn($alias . '.OedtNsVendId');
            $criteria->addSelectColumn($alias . '.OedtNsItemGrup');
            $criteria->addSelectColumn($alias . '.OedtUseCode');
            $criteria->addSelectColumn($alias . '.OedtNsShipFromId');
            $criteria->addSelectColumn($alias . '.OedtAsstOvrd');
            $criteria->addSelectColumn($alias . '.OedtPricOvrd');
            $criteria->addSelectColumn($alias . '.OedtPickFlag');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode1');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct1');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode2');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct2');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode3');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct3');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode4');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct4');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode5');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct5');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode6');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct6');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode7');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct7');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode8');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct8');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode9');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct9');
            $criteria->addSelectColumn($alias . '.OedtBinArea');
            $criteria->addSelectColumn($alias . '.OedtSplitLine');
            $criteria->addSelectColumn($alias . '.OedtLostReas');
            $criteria->addSelectColumn($alias . '.OedtOrigLine');
            $criteria->addSelectColumn($alias . '.OedtCustCrssRef');
            $criteria->addSelectColumn($alias . '.OedtUom');
            $criteria->addSelectColumn($alias . '.OedtShipFlag');
            $criteria->addSelectColumn($alias . '.OedtKitFlag');
            $criteria->addSelectColumn($alias . '.OedtKitItemNbr');
            $criteria->addSelectColumn($alias . '.OedtBfCost');
            $criteria->addSelectColumn($alias . '.OedtBfMsgCode');
            $criteria->addSelectColumn($alias . '.OedtBfCostTot');
            $criteria->addSelectColumn($alias . '.OedtLmBulkPric');
            $criteria->addSelectColumn($alias . '.OedtLmMtrxPkgPric');
            $criteria->addSelectColumn($alias . '.OedtLmMtrxBulkPric');
            $criteria->addSelectColumn($alias . '.OedtLmContractPric');
            $criteria->addSelectColumn($alias . '.OedtWghtTot');
            $criteria->addSelectColumn($alias . '.OedtOrdrAs');
            $criteria->addSelectColumn($alias . '.OedtPoDetLineNbr');
            $criteria->addSelectColumn($alias . '.OedtQtyToShip');
            $criteria->addSelectColumn($alias . '.OedtPoNbr');
            $criteria->addSelectColumn($alias . '.OedtPoRef');
            $criteria->addSelectColumn($alias . '.OedtFrtIn');
            $criteria->addSelectColumn($alias . '.OedtFrtInEntered');
            $criteria->addSelectColumn($alias . '.OedtProdCmplt');
            $criteria->addSelectColumn($alias . '.OedtErFlag');
            $criteria->addSelectColumn($alias . '.OedtOrigItem');
            $criteria->addSelectColumn($alias . '.OedtSubFlag');
            $criteria->addSelectColumn($alias . '.OedtEdiIncomingSeq');
            $criteria->addSelectColumn($alias . '.OedtSpordPoLine');
            $criteria->addSelectColumn($alias . '.OedtCatlgId');
            $criteria->addSelectColumn($alias . '.OedtDesignCd');
            $criteria->addSelectColumn($alias . '.OedtDiscPct');
            $criteria->addSelectColumn($alias . '.OedtTaxAmt');
            $criteria->addSelectColumn($alias . '.OedtXUsage');
            $criteria->addSelectColumn($alias . '.OedtRqtsLock');
            $criteria->addSelectColumn($alias . '.OedtFreshFrozen');
            $criteria->addSelectColumn($alias . '.OedtCoreFlag');
            $criteria->addSelectColumn($alias . '.OedtNsSalesAcct');
            $criteria->addSelectColumn($alias . '.OedtCertReqd');
            $criteria->addSelectColumn($alias . '.OedtAddOnSales');
            $criteria->addSelectColumn($alias . '.OedtBordFlag');
            $criteria->addSelectColumn($alias . '.OedtTempGrove');
            $criteria->addSelectColumn($alias . '.OedtGroveDisc');
            $criteria->addSelectColumn($alias . '.OedtOffInvc');
            $criteria->addSelectColumn($alias . '.InitItemGrup');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.OedtAcct');
            $criteria->addSelectColumn($alias . '.OedtLoadTot');
            $criteria->addSelectColumn($alias . '.OedtPickedQty');
            $criteria->addSelectColumn($alias . '.OedtWiOrigQty');
            $criteria->addSelectColumn($alias . '.OedtMarginTot');
            $criteria->addSelectColumn($alias . '.OedtCoreCost');
            $criteria->addSelectColumn($alias . '.OedtItemRef');
            $criteria->addSelectColumn($alias . '.OedtSac02ReturnCode');
            $criteria->addSelectColumn($alias . '.OedtWgTaxCode');
            $criteria->addSelectColumn($alias . '.OedtWgPrice');
            $criteria->addSelectColumn($alias . '.OedtWgTot');
            $criteria->addSelectColumn($alias . '.OedtCntrQty');
            $criteria->addSelectColumn($alias . '.OedtConfirmCode');
            $criteria->addSelectColumn($alias . '.OedtPicked');
            $criteria->addSelectColumn($alias . '.OedtOrigRqstDate');
            $criteria->addSelectColumn($alias . '.OedtFabLock');
            $criteria->addSelectColumn($alias . '.OedtLabelPrinted');
            $criteria->addSelectColumn($alias . '.OedtQuoteId');
            $criteria->addSelectColumn($alias . '.OedtInvPrinted');
            $criteria->addSelectColumn($alias . '.OedtStockCheck');
            $criteria->addSelectColumn($alias . '.OedtShouldWeSplit');
            $criteria->addSelectColumn($alias . '.OedtCofcReqd');
            $criteria->addSelectColumn($alias . '.OedtAckCode');
            $criteria->addSelectColumn($alias . '.OedtWiBordNbr');
            $criteria->addSelectColumn($alias . '.OedtCertHistOrdr');
            $criteria->addSelectColumn($alias . '.OedtCertHistLine');
            $criteria->addSelectColumn($alias . '.OedtOrdrdAsItemId');
            $criteria->addSelectColumn($alias . '.OedtWiBatch1Nbr');
            $criteria->addSelectColumn($alias . '.OedtWiBatch1Qty');
            $criteria->addSelectColumn($alias . '.OedtWiBatch1Stat');
            $criteria->addSelectColumn($alias . '.OedtRgaNbr');
            $criteria->addSelectColumn($alias . '.OedtOrigPric');
            $criteria->addSelectColumn($alias . '.OedtRefLineNbr');
            $criteria->addSelectColumn($alias . '.OedtBinLocn');
            $criteria->addSelectColumn($alias . '.OedtAcSuplyWhse');
            $criteria->addSelectColumn($alias . '.OedtAcPricDate');
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
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEHDNBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLINE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTDESC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTDESC2);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTRQSTDATE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCANCDATE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSHIPDATE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPECORDR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_ARTBCTAXCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYORD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYSHIP);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYBORD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOST);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRICTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOSTTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBIN);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPERSONALCD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC1);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC2);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC3);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACDISC4);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMWIPNBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOREPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTASSTCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTASSTQTY);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLISTPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSTANCOST);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTVENDITEMJOB);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSVENDID);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSITEMGRUP);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTUSECODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSSHIPFROMID);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTASSTOVRD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRICOVRD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPICKFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE1);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE2);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE3);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE4);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE5);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE6);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE7);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE8);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE9);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBINAREA);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPLITLINE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLOSTREAS);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGLINE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCUSTCRSSREF);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTUOM);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSHIPFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTKITFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTKITITEMNBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBFCOST);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBFMSGCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGHTTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTORDRAS);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPODETLINENBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPONBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPOREF);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTFRTIN);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTFRTINENTERED);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPRODCMPLT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTERFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGITEM);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSUBFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCATLGID);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTDESIGNCD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTDISCPCT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTTAXAMT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTXUSAGE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTRQTSLOCK);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTFRESHFROZEN);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOREFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTNSSALESACCT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCERTREQD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTADDONSALES);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBORDFLAG);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTTEMPGROVE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTGROVEDISC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTOFFINVC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_INITITEMGRUP);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACCT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLOADTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPICKEDQTY);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIORIGQTY);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTMARGINTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCORECOST);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTITEMREF);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSAC02RETURNCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGTAXCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGPRICE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWGTOT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCNTRQTY);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCONFIRMCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTPICKED);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGRQSTDATE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTFABLOCK);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTLABELPRINTED);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTQUOTEID);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTINVPRINTED);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSTOCKCHECK);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTSHOULDWESPLIT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCOFCREQD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACKCODE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBORDNBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCERTHISTORDR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTCERTHISTLINE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTORDRDASITEMID);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTWIBATCH1STAT);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTRGANBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTORIGPRIC);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTREFLINENBR);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTBINLOCN);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACSUPLYWHSE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_OEDTACPRICDATE);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(SalesOrderDetailTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.OehdNbr');
            $criteria->removeSelectColumn($alias . '.OedtLine');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.OedtDesc');
            $criteria->removeSelectColumn($alias . '.OedtDesc2');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.OedtRqstDate');
            $criteria->removeSelectColumn($alias . '.OedtCancDate');
            $criteria->removeSelectColumn($alias . '.OedtShipDate');
            $criteria->removeSelectColumn($alias . '.OedtSpecOrdr');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->removeSelectColumn($alias . '.OedtQtyOrd');
            $criteria->removeSelectColumn($alias . '.OedtQtyShip');
            $criteria->removeSelectColumn($alias . '.OedtQtyShipTot');
            $criteria->removeSelectColumn($alias . '.OedtQtyBord');
            $criteria->removeSelectColumn($alias . '.OedtPric');
            $criteria->removeSelectColumn($alias . '.OedtCost');
            $criteria->removeSelectColumn($alias . '.OedtTaxPctTot');
            $criteria->removeSelectColumn($alias . '.OedtPricTot');
            $criteria->removeSelectColumn($alias . '.OedtCostTot');
            $criteria->removeSelectColumn($alias . '.OedtSpCommPct');
            $criteria->removeSelectColumn($alias . '.OedtBrknCaseQty');
            $criteria->removeSelectColumn($alias . '.OedtBin');
            $criteria->removeSelectColumn($alias . '.OedtPersonalCd');
            $criteria->removeSelectColumn($alias . '.OedtAcDisc1');
            $criteria->removeSelectColumn($alias . '.OedtAcDisc2');
            $criteria->removeSelectColumn($alias . '.OedtAcDisc3');
            $criteria->removeSelectColumn($alias . '.OedtAcDisc4');
            $criteria->removeSelectColumn($alias . '.OedtLmWipNbr');
            $criteria->removeSelectColumn($alias . '.OedtCorePric');
            $criteria->removeSelectColumn($alias . '.OedtAsstCode');
            $criteria->removeSelectColumn($alias . '.OedtAsstQty');
            $criteria->removeSelectColumn($alias . '.OedtListPric');
            $criteria->removeSelectColumn($alias . '.OedtStanCost');
            $criteria->removeSelectColumn($alias . '.OedtVendItemJob');
            $criteria->removeSelectColumn($alias . '.OedtNsVendId');
            $criteria->removeSelectColumn($alias . '.OedtNsItemGrup');
            $criteria->removeSelectColumn($alias . '.OedtUseCode');
            $criteria->removeSelectColumn($alias . '.OedtNsShipFromId');
            $criteria->removeSelectColumn($alias . '.OedtAsstOvrd');
            $criteria->removeSelectColumn($alias . '.OedtPricOvrd');
            $criteria->removeSelectColumn($alias . '.OedtPickFlag');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode1');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct1');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode2');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct2');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode3');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct3');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode4');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct4');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode5');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct5');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode6');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct6');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode7');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct7');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode8');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct8');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxCode9');
            $criteria->removeSelectColumn($alias . '.OedtMstrTaxPct9');
            $criteria->removeSelectColumn($alias . '.OedtBinArea');
            $criteria->removeSelectColumn($alias . '.OedtSplitLine');
            $criteria->removeSelectColumn($alias . '.OedtLostReas');
            $criteria->removeSelectColumn($alias . '.OedtOrigLine');
            $criteria->removeSelectColumn($alias . '.OedtCustCrssRef');
            $criteria->removeSelectColumn($alias . '.OedtUom');
            $criteria->removeSelectColumn($alias . '.OedtShipFlag');
            $criteria->removeSelectColumn($alias . '.OedtKitFlag');
            $criteria->removeSelectColumn($alias . '.OedtKitItemNbr');
            $criteria->removeSelectColumn($alias . '.OedtBfCost');
            $criteria->removeSelectColumn($alias . '.OedtBfMsgCode');
            $criteria->removeSelectColumn($alias . '.OedtBfCostTot');
            $criteria->removeSelectColumn($alias . '.OedtLmBulkPric');
            $criteria->removeSelectColumn($alias . '.OedtLmMtrxPkgPric');
            $criteria->removeSelectColumn($alias . '.OedtLmMtrxBulkPric');
            $criteria->removeSelectColumn($alias . '.OedtLmContractPric');
            $criteria->removeSelectColumn($alias . '.OedtWghtTot');
            $criteria->removeSelectColumn($alias . '.OedtOrdrAs');
            $criteria->removeSelectColumn($alias . '.OedtPoDetLineNbr');
            $criteria->removeSelectColumn($alias . '.OedtQtyToShip');
            $criteria->removeSelectColumn($alias . '.OedtPoNbr');
            $criteria->removeSelectColumn($alias . '.OedtPoRef');
            $criteria->removeSelectColumn($alias . '.OedtFrtIn');
            $criteria->removeSelectColumn($alias . '.OedtFrtInEntered');
            $criteria->removeSelectColumn($alias . '.OedtProdCmplt');
            $criteria->removeSelectColumn($alias . '.OedtErFlag');
            $criteria->removeSelectColumn($alias . '.OedtOrigItem');
            $criteria->removeSelectColumn($alias . '.OedtSubFlag');
            $criteria->removeSelectColumn($alias . '.OedtEdiIncomingSeq');
            $criteria->removeSelectColumn($alias . '.OedtSpordPoLine');
            $criteria->removeSelectColumn($alias . '.OedtCatlgId');
            $criteria->removeSelectColumn($alias . '.OedtDesignCd');
            $criteria->removeSelectColumn($alias . '.OedtDiscPct');
            $criteria->removeSelectColumn($alias . '.OedtTaxAmt');
            $criteria->removeSelectColumn($alias . '.OedtXUsage');
            $criteria->removeSelectColumn($alias . '.OedtRqtsLock');
            $criteria->removeSelectColumn($alias . '.OedtFreshFrozen');
            $criteria->removeSelectColumn($alias . '.OedtCoreFlag');
            $criteria->removeSelectColumn($alias . '.OedtNsSalesAcct');
            $criteria->removeSelectColumn($alias . '.OedtCertReqd');
            $criteria->removeSelectColumn($alias . '.OedtAddOnSales');
            $criteria->removeSelectColumn($alias . '.OedtBordFlag');
            $criteria->removeSelectColumn($alias . '.OedtTempGrove');
            $criteria->removeSelectColumn($alias . '.OedtGroveDisc');
            $criteria->removeSelectColumn($alias . '.OedtOffInvc');
            $criteria->removeSelectColumn($alias . '.InitItemGrup');
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.OedtAcct');
            $criteria->removeSelectColumn($alias . '.OedtLoadTot');
            $criteria->removeSelectColumn($alias . '.OedtPickedQty');
            $criteria->removeSelectColumn($alias . '.OedtWiOrigQty');
            $criteria->removeSelectColumn($alias . '.OedtMarginTot');
            $criteria->removeSelectColumn($alias . '.OedtCoreCost');
            $criteria->removeSelectColumn($alias . '.OedtItemRef');
            $criteria->removeSelectColumn($alias . '.OedtSac02ReturnCode');
            $criteria->removeSelectColumn($alias . '.OedtWgTaxCode');
            $criteria->removeSelectColumn($alias . '.OedtWgPrice');
            $criteria->removeSelectColumn($alias . '.OedtWgTot');
            $criteria->removeSelectColumn($alias . '.OedtCntrQty');
            $criteria->removeSelectColumn($alias . '.OedtConfirmCode');
            $criteria->removeSelectColumn($alias . '.OedtPicked');
            $criteria->removeSelectColumn($alias . '.OedtOrigRqstDate');
            $criteria->removeSelectColumn($alias . '.OedtFabLock');
            $criteria->removeSelectColumn($alias . '.OedtLabelPrinted');
            $criteria->removeSelectColumn($alias . '.OedtQuoteId');
            $criteria->removeSelectColumn($alias . '.OedtInvPrinted');
            $criteria->removeSelectColumn($alias . '.OedtStockCheck');
            $criteria->removeSelectColumn($alias . '.OedtShouldWeSplit');
            $criteria->removeSelectColumn($alias . '.OedtCofcReqd');
            $criteria->removeSelectColumn($alias . '.OedtAckCode');
            $criteria->removeSelectColumn($alias . '.OedtWiBordNbr');
            $criteria->removeSelectColumn($alias . '.OedtCertHistOrdr');
            $criteria->removeSelectColumn($alias . '.OedtCertHistLine');
            $criteria->removeSelectColumn($alias . '.OedtOrdrdAsItemId');
            $criteria->removeSelectColumn($alias . '.OedtWiBatch1Nbr');
            $criteria->removeSelectColumn($alias . '.OedtWiBatch1Qty');
            $criteria->removeSelectColumn($alias . '.OedtWiBatch1Stat');
            $criteria->removeSelectColumn($alias . '.OedtRgaNbr');
            $criteria->removeSelectColumn($alias . '.OedtOrigPric');
            $criteria->removeSelectColumn($alias . '.OedtRefLineNbr');
            $criteria->removeSelectColumn($alias . '.OedtBinLocn');
            $criteria->removeSelectColumn($alias . '.OedtAcSuplyWhse');
            $criteria->removeSelectColumn($alias . '.OedtAcPricDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesOrderDetailTableMap::DATABASE_NAME)->getTable(SalesOrderDetailTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SalesOrderDetail or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SalesOrderDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesOrderDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesOrderDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesOrderDetailTableMap::COL_OEHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderDetailTableMap::COL_OEDTLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesOrderDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesOrderDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesOrderDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SalesOrderDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesOrderDetail or Criteria object.
     *
     * @param mixed $criteria Criteria or SalesOrderDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesOrderDetail object
        }


        // Set the correct dbName
        $query = SalesOrderDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
