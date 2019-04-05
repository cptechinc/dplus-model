<?php

namespace Map;

use \SoDetail;
use \SoDetailQuery;
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
 *
 */
class SoDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_detail';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 141;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 141;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'so_detail.OehdNbr';

    /**
     * the column name for the OedtLine field
     */
    const COL_OEDTLINE = 'so_detail.OedtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_detail.InitItemNbr';

    /**
     * the column name for the OedtDesc field
     */
    const COL_OEDTDESC = 'so_detail.OedtDesc';

    /**
     * the column name for the OedtDesc2 field
     */
    const COL_OEDTDESC2 = 'so_detail.OedtDesc2';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'so_detail.IntbWhse';

    /**
     * the column name for the OedtRqstDate field
     */
    const COL_OEDTRQSTDATE = 'so_detail.OedtRqstDate';

    /**
     * the column name for the OedtCancDate field
     */
    const COL_OEDTCANCDATE = 'so_detail.OedtCancDate';

    /**
     * the column name for the OedtShipDate field
     */
    const COL_OEDTSHIPDATE = 'so_detail.OedtShipDate';

    /**
     * the column name for the OedtSpecOrdr field
     */
    const COL_OEDTSPECORDR = 'so_detail.OedtSpecOrdr';

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'so_detail.ArtbMtaxCode';

    /**
     * the column name for the OedtQtyOrd field
     */
    const COL_OEDTQTYORD = 'so_detail.OedtQtyOrd';

    /**
     * the column name for the OedtQtyShip field
     */
    const COL_OEDTQTYSHIP = 'so_detail.OedtQtyShip';

    /**
     * the column name for the OedtQtyShipTot field
     */
    const COL_OEDTQTYSHIPTOT = 'so_detail.OedtQtyShipTot';

    /**
     * the column name for the OedtQtyBord field
     */
    const COL_OEDTQTYBORD = 'so_detail.OedtQtyBord';

    /**
     * the column name for the OedtPric field
     */
    const COL_OEDTPRIC = 'so_detail.OedtPric';

    /**
     * the column name for the OedtCost field
     */
    const COL_OEDTCOST = 'so_detail.OedtCost';

    /**
     * the column name for the OedtTaxPctTot field
     */
    const COL_OEDTTAXPCTTOT = 'so_detail.OedtTaxPctTot';

    /**
     * the column name for the OedtPricTot field
     */
    const COL_OEDTPRICTOT = 'so_detail.OedtPricTot';

    /**
     * the column name for the OedtCostTot field
     */
    const COL_OEDTCOSTTOT = 'so_detail.OedtCostTot';

    /**
     * the column name for the OedtSpCommPct field
     */
    const COL_OEDTSPCOMMPCT = 'so_detail.OedtSpCommPct';

    /**
     * the column name for the OedtBrknCaseQty field
     */
    const COL_OEDTBRKNCASEQTY = 'so_detail.OedtBrknCaseQty';

    /**
     * the column name for the OedtBin field
     */
    const COL_OEDTBIN = 'so_detail.OedtBin';

    /**
     * the column name for the OedtPersonalCd field
     */
    const COL_OEDTPERSONALCD = 'so_detail.OedtPersonalCd';

    /**
     * the column name for the OedtAcDisc1 field
     */
    const COL_OEDTACDISC1 = 'so_detail.OedtAcDisc1';

    /**
     * the column name for the OedtAcDisc2 field
     */
    const COL_OEDTACDISC2 = 'so_detail.OedtAcDisc2';

    /**
     * the column name for the OedtAcDisc3 field
     */
    const COL_OEDTACDISC3 = 'so_detail.OedtAcDisc3';

    /**
     * the column name for the OedtAcDisc4 field
     */
    const COL_OEDTACDISC4 = 'so_detail.OedtAcDisc4';

    /**
     * the column name for the OedtLmWipNbr field
     */
    const COL_OEDTLMWIPNBR = 'so_detail.OedtLmWipNbr';

    /**
     * the column name for the OedtCorePric field
     */
    const COL_OEDTCOREPRIC = 'so_detail.OedtCorePric';

    /**
     * the column name for the OedtAsstCode field
     */
    const COL_OEDTASSTCODE = 'so_detail.OedtAsstCode';

    /**
     * the column name for the OedtAsstQty field
     */
    const COL_OEDTASSTQTY = 'so_detail.OedtAsstQty';

    /**
     * the column name for the OedtListPric field
     */
    const COL_OEDTLISTPRIC = 'so_detail.OedtListPric';

    /**
     * the column name for the OedtStanCost field
     */
    const COL_OEDTSTANCOST = 'so_detail.OedtStanCost';

    /**
     * the column name for the OedtVendItemJob field
     */
    const COL_OEDTVENDITEMJOB = 'so_detail.OedtVendItemJob';

    /**
     * the column name for the OedtNsVendId field
     */
    const COL_OEDTNSVENDID = 'so_detail.OedtNsVendId';

    /**
     * the column name for the OedtNsItemGrup field
     */
    const COL_OEDTNSITEMGRUP = 'so_detail.OedtNsItemGrup';

    /**
     * the column name for the OedtUseCode field
     */
    const COL_OEDTUSECODE = 'so_detail.OedtUseCode';

    /**
     * the column name for the OedtNsShipFromId field
     */
    const COL_OEDTNSSHIPFROMID = 'so_detail.OedtNsShipFromId';

    /**
     * the column name for the OedtAsstOvrd field
     */
    const COL_OEDTASSTOVRD = 'so_detail.OedtAsstOvrd';

    /**
     * the column name for the OedtPricOvrd field
     */
    const COL_OEDTPRICOVRD = 'so_detail.OedtPricOvrd';

    /**
     * the column name for the OedtPickFlag field
     */
    const COL_OEDTPICKFLAG = 'so_detail.OedtPickFlag';

    /**
     * the column name for the OedtMstrTaxCode1 field
     */
    const COL_OEDTMSTRTAXCODE1 = 'so_detail.OedtMstrTaxCode1';

    /**
     * the column name for the OedtMstrTaxPct1 field
     */
    const COL_OEDTMSTRTAXPCT1 = 'so_detail.OedtMstrTaxPct1';

    /**
     * the column name for the OedtMstrTaxCode2 field
     */
    const COL_OEDTMSTRTAXCODE2 = 'so_detail.OedtMstrTaxCode2';

    /**
     * the column name for the OedtMstrTaxPct2 field
     */
    const COL_OEDTMSTRTAXPCT2 = 'so_detail.OedtMstrTaxPct2';

    /**
     * the column name for the OedtMstrTaxCode3 field
     */
    const COL_OEDTMSTRTAXCODE3 = 'so_detail.OedtMstrTaxCode3';

    /**
     * the column name for the OedtMstrTaxPct3 field
     */
    const COL_OEDTMSTRTAXPCT3 = 'so_detail.OedtMstrTaxPct3';

    /**
     * the column name for the OedtMstrTaxCode4 field
     */
    const COL_OEDTMSTRTAXCODE4 = 'so_detail.OedtMstrTaxCode4';

    /**
     * the column name for the OedtMstrTaxPct4 field
     */
    const COL_OEDTMSTRTAXPCT4 = 'so_detail.OedtMstrTaxPct4';

    /**
     * the column name for the OedtMstrTaxCode5 field
     */
    const COL_OEDTMSTRTAXCODE5 = 'so_detail.OedtMstrTaxCode5';

    /**
     * the column name for the OedtMstrTaxPct5 field
     */
    const COL_OEDTMSTRTAXPCT5 = 'so_detail.OedtMstrTaxPct5';

    /**
     * the column name for the OedtMstrTaxCode6 field
     */
    const COL_OEDTMSTRTAXCODE6 = 'so_detail.OedtMstrTaxCode6';

    /**
     * the column name for the OedtMstrTaxPct6 field
     */
    const COL_OEDTMSTRTAXPCT6 = 'so_detail.OedtMstrTaxPct6';

    /**
     * the column name for the OedtMstrTaxCode7 field
     */
    const COL_OEDTMSTRTAXCODE7 = 'so_detail.OedtMstrTaxCode7';

    /**
     * the column name for the OedtMstrTaxPct7 field
     */
    const COL_OEDTMSTRTAXPCT7 = 'so_detail.OedtMstrTaxPct7';

    /**
     * the column name for the OedtMstrTaxCode8 field
     */
    const COL_OEDTMSTRTAXCODE8 = 'so_detail.OedtMstrTaxCode8';

    /**
     * the column name for the OedtMstrTaxPct8 field
     */
    const COL_OEDTMSTRTAXPCT8 = 'so_detail.OedtMstrTaxPct8';

    /**
     * the column name for the OedtMstrTaxCode9 field
     */
    const COL_OEDTMSTRTAXCODE9 = 'so_detail.OedtMstrTaxCode9';

    /**
     * the column name for the OedtMstrTaxPct9 field
     */
    const COL_OEDTMSTRTAXPCT9 = 'so_detail.OedtMstrTaxPct9';

    /**
     * the column name for the OedtBinArea field
     */
    const COL_OEDTBINAREA = 'so_detail.OedtBinArea';

    /**
     * the column name for the OedtSplitLine field
     */
    const COL_OEDTSPLITLINE = 'so_detail.OedtSplitLine';

    /**
     * the column name for the OedtLostReas field
     */
    const COL_OEDTLOSTREAS = 'so_detail.OedtLostReas';

    /**
     * the column name for the OedtOrigLine field
     */
    const COL_OEDTORIGLINE = 'so_detail.OedtOrigLine';

    /**
     * the column name for the OedtCustCrssRef field
     */
    const COL_OEDTCUSTCRSSREF = 'so_detail.OedtCustCrssRef';

    /**
     * the column name for the OedtUom field
     */
    const COL_OEDTUOM = 'so_detail.OedtUom';

    /**
     * the column name for the OedtShipFlag field
     */
    const COL_OEDTSHIPFLAG = 'so_detail.OedtShipFlag';

    /**
     * the column name for the OedtKitFlag field
     */
    const COL_OEDTKITFLAG = 'so_detail.OedtKitFlag';

    /**
     * the column name for the OedtKitItemNbr field
     */
    const COL_OEDTKITITEMNBR = 'so_detail.OedtKitItemNbr';

    /**
     * the column name for the OedtBfCost field
     */
    const COL_OEDTBFCOST = 'so_detail.OedtBfCost';

    /**
     * the column name for the OedtBfMsgCode field
     */
    const COL_OEDTBFMSGCODE = 'so_detail.OedtBfMsgCode';

    /**
     * the column name for the OedtBfCostTot field
     */
    const COL_OEDTBFCOSTTOT = 'so_detail.OedtBfCostTot';

    /**
     * the column name for the OedtLmBulkPric field
     */
    const COL_OEDTLMBULKPRIC = 'so_detail.OedtLmBulkPric';

    /**
     * the column name for the OedtLmMtrxPkgPric field
     */
    const COL_OEDTLMMTRXPKGPRIC = 'so_detail.OedtLmMtrxPkgPric';

    /**
     * the column name for the OedtLmMtrxBulkPric field
     */
    const COL_OEDTLMMTRXBULKPRIC = 'so_detail.OedtLmMtrxBulkPric';

    /**
     * the column name for the OedtLmContractPric field
     */
    const COL_OEDTLMCONTRACTPRIC = 'so_detail.OedtLmContractPric';

    /**
     * the column name for the OedtWght field
     */
    const COL_OEDTWGHT = 'so_detail.OedtWght';

    /**
     * the column name for the OedtOrdrAs field
     */
    const COL_OEDTORDRAS = 'so_detail.OedtOrdrAs';

    /**
     * the column name for the OedtPoDetLineNbr field
     */
    const COL_OEDTPODETLINENBR = 'so_detail.OedtPoDetLineNbr';

    /**
     * the column name for the OedtQtyToShip field
     */
    const COL_OEDTQTYTOSHIP = 'so_detail.OedtQtyToShip';

    /**
     * the column name for the OedtPoNbr field
     */
    const COL_OEDTPONBR = 'so_detail.OedtPoNbr';

    /**
     * the column name for the OedtPoRef field
     */
    const COL_OEDTPOREF = 'so_detail.OedtPoRef';

    /**
     * the column name for the OedtFrtIn field
     */
    const COL_OEDTFRTIN = 'so_detail.OedtFrtIn';

    /**
     * the column name for the OedtFrtInEntered field
     */
    const COL_OEDTFRTINENTERED = 'so_detail.OedtFrtInEntered';

    /**
     * the column name for the OedtProdCmplt field
     */
    const COL_OEDTPRODCMPLT = 'so_detail.OedtProdCmplt';

    /**
     * the column name for the OedtErFlag field
     */
    const COL_OEDTERFLAG = 'so_detail.OedtErFlag';

    /**
     * the column name for the OedtOrigItem field
     */
    const COL_OEDTORIGITEM = 'so_detail.OedtOrigItem';

    /**
     * the column name for the OedtSubFlag field
     */
    const COL_OEDTSUBFLAG = 'so_detail.OedtSubFlag';

    /**
     * the column name for the OedtEdiIncomingSeq field
     */
    const COL_OEDTEDIINCOMINGSEQ = 'so_detail.OedtEdiIncomingSeq';

    /**
     * the column name for the OedtSpordPoLine field
     */
    const COL_OEDTSPORDPOLINE = 'so_detail.OedtSpordPoLine';

    /**
     * the column name for the OedtCatlgId field
     */
    const COL_OEDTCATLGID = 'so_detail.OedtCatlgId';

    /**
     * the column name for the OedtDesignCd field
     */
    const COL_OEDTDESIGNCD = 'so_detail.OedtDesignCd';

    /**
     * the column name for the OedtDiscPct field
     */
    const COL_OEDTDISCPCT = 'so_detail.OedtDiscPct';

    /**
     * the column name for the OedtTaxAmt field
     */
    const COL_OEDTTAXAMT = 'so_detail.OedtTaxAmt';

    /**
     * the column name for the OedtXUsage field
     */
    const COL_OEDTXUSAGE = 'so_detail.OedtXUsage';

    /**
     * the column name for the OedtRqtsLock field
     */
    const COL_OEDTRQTSLOCK = 'so_detail.OedtRqtsLock';

    /**
     * the column name for the OedtFreshFrozen field
     */
    const COL_OEDTFRESHFROZEN = 'so_detail.OedtFreshFrozen';

    /**
     * the column name for the OedtCoreFlag field
     */
    const COL_OEDTCOREFLAG = 'so_detail.OedtCoreFlag';

    /**
     * the column name for the OedtNsSalesAcct field
     */
    const COL_OEDTNSSALESACCT = 'so_detail.OedtNsSalesAcct';

    /**
     * the column name for the OedtCertReqd field
     */
    const COL_OEDTCERTREQD = 'so_detail.OedtCertReqd';

    /**
     * the column name for the OedtAddOnSales field
     */
    const COL_OEDTADDONSALES = 'so_detail.OedtAddOnSales';

    /**
     * the column name for the OedtBordFlag field
     */
    const COL_OEDTBORDFLAG = 'so_detail.OedtBordFlag';

    /**
     * the column name for the OedtTempGrove field
     */
    const COL_OEDTTEMPGROVE = 'so_detail.OedtTempGrove';

    /**
     * the column name for the OedtGroveDisc field
     */
    const COL_OEDTGROVEDISC = 'so_detail.OedtGroveDisc';

    /**
     * the column name for the OedtOffInvc field
     */
    const COL_OEDTOFFINVC = 'so_detail.OedtOffInvc';

    /**
     * the column name for the InitItemGrup field
     */
    const COL_INITITEMGRUP = 'so_detail.InitItemGrup';

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'so_detail.ApveVendId';

    /**
     * the column name for the OedtAcct field
     */
    const COL_OEDTACCT = 'so_detail.OedtAcct';

    /**
     * the column name for the OedtLoadTot field
     */
    const COL_OEDTLOADTOT = 'so_detail.OedtLoadTot';

    /**
     * the column name for the OedtPickedQty field
     */
    const COL_OEDTPICKEDQTY = 'so_detail.OedtPickedQty';

    /**
     * the column name for the OedtWiOrigQty field
     */
    const COL_OEDTWIORIGQTY = 'so_detail.OedtWiOrigQty';

    /**
     * the column name for the OedtMarginTot field
     */
    const COL_OEDTMARGINTOT = 'so_detail.OedtMarginTot';

    /**
     * the column name for the OedtCoreCost field
     */
    const COL_OEDTCORECOST = 'so_detail.OedtCoreCost';

    /**
     * the column name for the OedtItemRef field
     */
    const COL_OEDTITEMREF = 'so_detail.OedtItemRef';

    /**
     * the column name for the OedtSac02ReturnCode field
     */
    const COL_OEDTSAC02RETURNCODE = 'so_detail.OedtSac02ReturnCode';

    /**
     * the column name for the OedtWgTaxCode field
     */
    const COL_OEDTWGTAXCODE = 'so_detail.OedtWgTaxCode';

    /**
     * the column name for the OedtWgPrice field
     */
    const COL_OEDTWGPRICE = 'so_detail.OedtWgPrice';

    /**
     * the column name for the OedtWgTot field
     */
    const COL_OEDTWGTOT = 'so_detail.OedtWgTot';

    /**
     * the column name for the OedtCntrQty field
     */
    const COL_OEDTCNTRQTY = 'so_detail.OedtCntrQty';

    /**
     * the column name for the OedtConfirmCode field
     */
    const COL_OEDTCONFIRMCODE = 'so_detail.OedtConfirmCode';

    /**
     * the column name for the OedtPicked field
     */
    const COL_OEDTPICKED = 'so_detail.OedtPicked';

    /**
     * the column name for the OedtOrigRqstDate field
     */
    const COL_OEDTORIGRQSTDATE = 'so_detail.OedtOrigRqstDate';

    /**
     * the column name for the OedtFabLock field
     */
    const COL_OEDTFABLOCK = 'so_detail.OedtFabLock';

    /**
     * the column name for the OedtLabelPrinted field
     */
    const COL_OEDTLABELPRINTED = 'so_detail.OedtLabelPrinted';

    /**
     * the column name for the OedtQuoteId field
     */
    const COL_OEDTQUOTEID = 'so_detail.OedtQuoteId';

    /**
     * the column name for the OedtInvPrinted field
     */
    const COL_OEDTINVPRINTED = 'so_detail.OedtInvPrinted';

    /**
     * the column name for the OedtStockCheck field
     */
    const COL_OEDTSTOCKCHECK = 'so_detail.OedtStockCheck';

    /**
     * the column name for the OedtShouldWeSplit field
     */
    const COL_OEDTSHOULDWESPLIT = 'so_detail.OedtShouldWeSplit';

    /**
     * the column name for the OedtCofcReqd field
     */
    const COL_OEDTCOFCREQD = 'so_detail.OedtCofcReqd';

    /**
     * the column name for the OedtAckCode field
     */
    const COL_OEDTACKCODE = 'so_detail.OedtAckCode';

    /**
     * the column name for the OedtWiBordNbr field
     */
    const COL_OEDTWIBORDNBR = 'so_detail.OedtWiBordNbr';

    /**
     * the column name for the OedtCertHistOrdr field
     */
    const COL_OEDTCERTHISTORDR = 'so_detail.OedtCertHistOrdr';

    /**
     * the column name for the OedtCertHistLine field
     */
    const COL_OEDTCERTHISTLINE = 'so_detail.OedtCertHistLine';

    /**
     * the column name for the OedtOrdrdAsItemId field
     */
    const COL_OEDTORDRDASITEMID = 'so_detail.OedtOrdrdAsItemId';

    /**
     * the column name for the OedtWiBatch1Nbr field
     */
    const COL_OEDTWIBATCH1NBR = 'so_detail.OedtWiBatch1Nbr';

    /**
     * the column name for the OedtWiBatch1Qty field
     */
    const COL_OEDTWIBATCH1QTY = 'so_detail.OedtWiBatch1Qty';

    /**
     * the column name for the OedtWiBatch1Stat field
     */
    const COL_OEDTWIBATCH1STAT = 'so_detail.OedtWiBatch1Stat';

    /**
     * the column name for the OedtRgaNbr field
     */
    const COL_OEDTRGANBR = 'so_detail.OedtRgaNbr';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_detail.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_detail.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_detail.dummy';

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oedtline', 'Inititemnbr', 'Oedtdesc', 'Oedtdesc2', 'Intbwhse', 'Oedtrqstdate', 'Oedtcancdate', 'Oedtshipdate', 'Oedtspecordr', 'Artbmtaxcode', 'Oedtqtyord', 'Oedtqtyship', 'Oedtqtyshiptot', 'Oedtqtybord', 'Oedtpric', 'Oedtcost', 'Oedttaxpcttot', 'Oedtprictot', 'Oedtcosttot', 'Oedtspcommpct', 'Oedtbrkncaseqty', 'Oedtbin', 'Oedtpersonalcd', 'Oedtacdisc1', 'Oedtacdisc2', 'Oedtacdisc3', 'Oedtacdisc4', 'Oedtlmwipnbr', 'Oedtcorepric', 'Oedtasstcode', 'Oedtasstqty', 'Oedtlistpric', 'Oedtstancost', 'Oedtvenditemjob', 'Oedtnsvendid', 'Oedtnsitemgrup', 'Oedtusecode', 'Oedtnsshipfromid', 'Oedtasstovrd', 'Oedtpricovrd', 'Oedtpickflag', 'Oedtmstrtaxcode1', 'Oedtmstrtaxpct1', 'Oedtmstrtaxcode2', 'Oedtmstrtaxpct2', 'Oedtmstrtaxcode3', 'Oedtmstrtaxpct3', 'Oedtmstrtaxcode4', 'Oedtmstrtaxpct4', 'Oedtmstrtaxcode5', 'Oedtmstrtaxpct5', 'Oedtmstrtaxcode6', 'Oedtmstrtaxpct6', 'Oedtmstrtaxcode7', 'Oedtmstrtaxpct7', 'Oedtmstrtaxcode8', 'Oedtmstrtaxpct8', 'Oedtmstrtaxcode9', 'Oedtmstrtaxpct9', 'Oedtbinarea', 'Oedtsplitline', 'Oedtlostreas', 'Oedtorigline', 'Oedtcustcrssref', 'Oedtuom', 'Oedtshipflag', 'Oedtkitflag', 'Oedtkititemnbr', 'Oedtbfcost', 'Oedtbfmsgcode', 'Oedtbfcosttot', 'Oedtlmbulkpric', 'Oedtlmmtrxpkgpric', 'Oedtlmmtrxbulkpric', 'Oedtlmcontractpric', 'Oedtwght', 'Oedtordras', 'Oedtpodetlinenbr', 'Oedtqtytoship', 'Oedtponbr', 'Oedtporef', 'Oedtfrtin', 'Oedtfrtinentered', 'Oedtprodcmplt', 'Oedterflag', 'Oedtorigitem', 'Oedtsubflag', 'Oedtediincomingseq', 'Oedtspordpoline', 'Oedtcatlgid', 'Oedtdesigncd', 'Oedtdiscpct', 'Oedttaxamt', 'Oedtxusage', 'Oedtrqtslock', 'Oedtfreshfrozen', 'Oedtcoreflag', 'Oedtnssalesacct', 'Oedtcertreqd', 'Oedtaddonsales', 'Oedtbordflag', 'Oedttempgrove', 'Oedtgrovedisc', 'Oedtoffinvc', 'Inititemgrup', 'Apvevendid', 'Oedtacct', 'Oedtloadtot', 'Oedtpickedqty', 'Oedtwiorigqty', 'Oedtmargintot', 'Oedtcorecost', 'Oedtitemref', 'Oedtsac02returncode', 'Oedtwgtaxcode', 'Oedtwgprice', 'Oedtwgtot', 'Oedtcntrqty', 'Oedtconfirmcode', 'Oedtpicked', 'Oedtorigrqstdate', 'Oedtfablock', 'Oedtlabelprinted', 'Oedtquoteid', 'Oedtinvprinted', 'Oedtstockcheck', 'Oedtshouldwesplit', 'Oedtcofcreqd', 'Oedtackcode', 'Oedtwibordnbr', 'Oedtcerthistordr', 'Oedtcerthistline', 'Oedtordrdasitemid', 'Oedtwibatch1nbr', 'Oedtwibatch1qty', 'Oedtwibatch1stat', 'Oedtrganbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oedtline', 'inititemnbr', 'oedtdesc', 'oedtdesc2', 'intbwhse', 'oedtrqstdate', 'oedtcancdate', 'oedtshipdate', 'oedtspecordr', 'artbmtaxcode', 'oedtqtyord', 'oedtqtyship', 'oedtqtyshiptot', 'oedtqtybord', 'oedtpric', 'oedtcost', 'oedttaxpcttot', 'oedtprictot', 'oedtcosttot', 'oedtspcommpct', 'oedtbrkncaseqty', 'oedtbin', 'oedtpersonalcd', 'oedtacdisc1', 'oedtacdisc2', 'oedtacdisc3', 'oedtacdisc4', 'oedtlmwipnbr', 'oedtcorepric', 'oedtasstcode', 'oedtasstqty', 'oedtlistpric', 'oedtstancost', 'oedtvenditemjob', 'oedtnsvendid', 'oedtnsitemgrup', 'oedtusecode', 'oedtnsshipfromid', 'oedtasstovrd', 'oedtpricovrd', 'oedtpickflag', 'oedtmstrtaxcode1', 'oedtmstrtaxpct1', 'oedtmstrtaxcode2', 'oedtmstrtaxpct2', 'oedtmstrtaxcode3', 'oedtmstrtaxpct3', 'oedtmstrtaxcode4', 'oedtmstrtaxpct4', 'oedtmstrtaxcode5', 'oedtmstrtaxpct5', 'oedtmstrtaxcode6', 'oedtmstrtaxpct6', 'oedtmstrtaxcode7', 'oedtmstrtaxpct7', 'oedtmstrtaxcode8', 'oedtmstrtaxpct8', 'oedtmstrtaxcode9', 'oedtmstrtaxpct9', 'oedtbinarea', 'oedtsplitline', 'oedtlostreas', 'oedtorigline', 'oedtcustcrssref', 'oedtuom', 'oedtshipflag', 'oedtkitflag', 'oedtkititemnbr', 'oedtbfcost', 'oedtbfmsgcode', 'oedtbfcosttot', 'oedtlmbulkpric', 'oedtlmmtrxpkgpric', 'oedtlmmtrxbulkpric', 'oedtlmcontractpric', 'oedtwght', 'oedtordras', 'oedtpodetlinenbr', 'oedtqtytoship', 'oedtponbr', 'oedtporef', 'oedtfrtin', 'oedtfrtinentered', 'oedtprodcmplt', 'oedterflag', 'oedtorigitem', 'oedtsubflag', 'oedtediincomingseq', 'oedtspordpoline', 'oedtcatlgid', 'oedtdesigncd', 'oedtdiscpct', 'oedttaxamt', 'oedtxusage', 'oedtrqtslock', 'oedtfreshfrozen', 'oedtcoreflag', 'oedtnssalesacct', 'oedtcertreqd', 'oedtaddonsales', 'oedtbordflag', 'oedttempgrove', 'oedtgrovedisc', 'oedtoffinvc', 'inititemgrup', 'apvevendid', 'oedtacct', 'oedtloadtot', 'oedtpickedqty', 'oedtwiorigqty', 'oedtmargintot', 'oedtcorecost', 'oedtitemref', 'oedtsac02returncode', 'oedtwgtaxcode', 'oedtwgprice', 'oedtwgtot', 'oedtcntrqty', 'oedtconfirmcode', 'oedtpicked', 'oedtorigrqstdate', 'oedtfablock', 'oedtlabelprinted', 'oedtquoteid', 'oedtinvprinted', 'oedtstockcheck', 'oedtshouldwesplit', 'oedtcofcreqd', 'oedtackcode', 'oedtwibordnbr', 'oedtcerthistordr', 'oedtcerthistline', 'oedtordrdasitemid', 'oedtwibatch1nbr', 'oedtwibatch1qty', 'oedtwibatch1stat', 'oedtrganbr', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoDetailTableMap::COL_OEHDNBR, SoDetailTableMap::COL_OEDTLINE, SoDetailTableMap::COL_INITITEMNBR, SoDetailTableMap::COL_OEDTDESC, SoDetailTableMap::COL_OEDTDESC2, SoDetailTableMap::COL_INTBWHSE, SoDetailTableMap::COL_OEDTRQSTDATE, SoDetailTableMap::COL_OEDTCANCDATE, SoDetailTableMap::COL_OEDTSHIPDATE, SoDetailTableMap::COL_OEDTSPECORDR, SoDetailTableMap::COL_ARTBMTAXCODE, SoDetailTableMap::COL_OEDTQTYORD, SoDetailTableMap::COL_OEDTQTYSHIP, SoDetailTableMap::COL_OEDTQTYSHIPTOT, SoDetailTableMap::COL_OEDTQTYBORD, SoDetailTableMap::COL_OEDTPRIC, SoDetailTableMap::COL_OEDTCOST, SoDetailTableMap::COL_OEDTTAXPCTTOT, SoDetailTableMap::COL_OEDTPRICTOT, SoDetailTableMap::COL_OEDTCOSTTOT, SoDetailTableMap::COL_OEDTSPCOMMPCT, SoDetailTableMap::COL_OEDTBRKNCASEQTY, SoDetailTableMap::COL_OEDTBIN, SoDetailTableMap::COL_OEDTPERSONALCD, SoDetailTableMap::COL_OEDTACDISC1, SoDetailTableMap::COL_OEDTACDISC2, SoDetailTableMap::COL_OEDTACDISC3, SoDetailTableMap::COL_OEDTACDISC4, SoDetailTableMap::COL_OEDTLMWIPNBR, SoDetailTableMap::COL_OEDTCOREPRIC, SoDetailTableMap::COL_OEDTASSTCODE, SoDetailTableMap::COL_OEDTASSTQTY, SoDetailTableMap::COL_OEDTLISTPRIC, SoDetailTableMap::COL_OEDTSTANCOST, SoDetailTableMap::COL_OEDTVENDITEMJOB, SoDetailTableMap::COL_OEDTNSVENDID, SoDetailTableMap::COL_OEDTNSITEMGRUP, SoDetailTableMap::COL_OEDTUSECODE, SoDetailTableMap::COL_OEDTNSSHIPFROMID, SoDetailTableMap::COL_OEDTASSTOVRD, SoDetailTableMap::COL_OEDTPRICOVRD, SoDetailTableMap::COL_OEDTPICKFLAG, SoDetailTableMap::COL_OEDTMSTRTAXCODE1, SoDetailTableMap::COL_OEDTMSTRTAXPCT1, SoDetailTableMap::COL_OEDTMSTRTAXCODE2, SoDetailTableMap::COL_OEDTMSTRTAXPCT2, SoDetailTableMap::COL_OEDTMSTRTAXCODE3, SoDetailTableMap::COL_OEDTMSTRTAXPCT3, SoDetailTableMap::COL_OEDTMSTRTAXCODE4, SoDetailTableMap::COL_OEDTMSTRTAXPCT4, SoDetailTableMap::COL_OEDTMSTRTAXCODE5, SoDetailTableMap::COL_OEDTMSTRTAXPCT5, SoDetailTableMap::COL_OEDTMSTRTAXCODE6, SoDetailTableMap::COL_OEDTMSTRTAXPCT6, SoDetailTableMap::COL_OEDTMSTRTAXCODE7, SoDetailTableMap::COL_OEDTMSTRTAXPCT7, SoDetailTableMap::COL_OEDTMSTRTAXCODE8, SoDetailTableMap::COL_OEDTMSTRTAXPCT8, SoDetailTableMap::COL_OEDTMSTRTAXCODE9, SoDetailTableMap::COL_OEDTMSTRTAXPCT9, SoDetailTableMap::COL_OEDTBINAREA, SoDetailTableMap::COL_OEDTSPLITLINE, SoDetailTableMap::COL_OEDTLOSTREAS, SoDetailTableMap::COL_OEDTORIGLINE, SoDetailTableMap::COL_OEDTCUSTCRSSREF, SoDetailTableMap::COL_OEDTUOM, SoDetailTableMap::COL_OEDTSHIPFLAG, SoDetailTableMap::COL_OEDTKITFLAG, SoDetailTableMap::COL_OEDTKITITEMNBR, SoDetailTableMap::COL_OEDTBFCOST, SoDetailTableMap::COL_OEDTBFMSGCODE, SoDetailTableMap::COL_OEDTBFCOSTTOT, SoDetailTableMap::COL_OEDTLMBULKPRIC, SoDetailTableMap::COL_OEDTLMMTRXPKGPRIC, SoDetailTableMap::COL_OEDTLMMTRXBULKPRIC, SoDetailTableMap::COL_OEDTLMCONTRACTPRIC, SoDetailTableMap::COL_OEDTWGHT, SoDetailTableMap::COL_OEDTORDRAS, SoDetailTableMap::COL_OEDTPODETLINENBR, SoDetailTableMap::COL_OEDTQTYTOSHIP, SoDetailTableMap::COL_OEDTPONBR, SoDetailTableMap::COL_OEDTPOREF, SoDetailTableMap::COL_OEDTFRTIN, SoDetailTableMap::COL_OEDTFRTINENTERED, SoDetailTableMap::COL_OEDTPRODCMPLT, SoDetailTableMap::COL_OEDTERFLAG, SoDetailTableMap::COL_OEDTORIGITEM, SoDetailTableMap::COL_OEDTSUBFLAG, SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ, SoDetailTableMap::COL_OEDTSPORDPOLINE, SoDetailTableMap::COL_OEDTCATLGID, SoDetailTableMap::COL_OEDTDESIGNCD, SoDetailTableMap::COL_OEDTDISCPCT, SoDetailTableMap::COL_OEDTTAXAMT, SoDetailTableMap::COL_OEDTXUSAGE, SoDetailTableMap::COL_OEDTRQTSLOCK, SoDetailTableMap::COL_OEDTFRESHFROZEN, SoDetailTableMap::COL_OEDTCOREFLAG, SoDetailTableMap::COL_OEDTNSSALESACCT, SoDetailTableMap::COL_OEDTCERTREQD, SoDetailTableMap::COL_OEDTADDONSALES, SoDetailTableMap::COL_OEDTBORDFLAG, SoDetailTableMap::COL_OEDTTEMPGROVE, SoDetailTableMap::COL_OEDTGROVEDISC, SoDetailTableMap::COL_OEDTOFFINVC, SoDetailTableMap::COL_INITITEMGRUP, SoDetailTableMap::COL_APVEVENDID, SoDetailTableMap::COL_OEDTACCT, SoDetailTableMap::COL_OEDTLOADTOT, SoDetailTableMap::COL_OEDTPICKEDQTY, SoDetailTableMap::COL_OEDTWIORIGQTY, SoDetailTableMap::COL_OEDTMARGINTOT, SoDetailTableMap::COL_OEDTCORECOST, SoDetailTableMap::COL_OEDTITEMREF, SoDetailTableMap::COL_OEDTSAC02RETURNCODE, SoDetailTableMap::COL_OEDTWGTAXCODE, SoDetailTableMap::COL_OEDTWGPRICE, SoDetailTableMap::COL_OEDTWGTOT, SoDetailTableMap::COL_OEDTCNTRQTY, SoDetailTableMap::COL_OEDTCONFIRMCODE, SoDetailTableMap::COL_OEDTPICKED, SoDetailTableMap::COL_OEDTORIGRQSTDATE, SoDetailTableMap::COL_OEDTFABLOCK, SoDetailTableMap::COL_OEDTLABELPRINTED, SoDetailTableMap::COL_OEDTQUOTEID, SoDetailTableMap::COL_OEDTINVPRINTED, SoDetailTableMap::COL_OEDTSTOCKCHECK, SoDetailTableMap::COL_OEDTSHOULDWESPLIT, SoDetailTableMap::COL_OEDTCOFCREQD, SoDetailTableMap::COL_OEDTACKCODE, SoDetailTableMap::COL_OEDTWIBORDNBR, SoDetailTableMap::COL_OEDTCERTHISTORDR, SoDetailTableMap::COL_OEDTCERTHISTLINE, SoDetailTableMap::COL_OEDTORDRDASITEMID, SoDetailTableMap::COL_OEDTWIBATCH1NBR, SoDetailTableMap::COL_OEDTWIBATCH1QTY, SoDetailTableMap::COL_OEDTWIBATCH1STAT, SoDetailTableMap::COL_OEDTRGANBR, SoDetailTableMap::COL_DATEUPDTD, SoDetailTableMap::COL_TIMEUPDTD, SoDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OedtLine', 'InitItemNbr', 'OedtDesc', 'OedtDesc2', 'IntbWhse', 'OedtRqstDate', 'OedtCancDate', 'OedtShipDate', 'OedtSpecOrdr', 'ArtbMtaxCode', 'OedtQtyOrd', 'OedtQtyShip', 'OedtQtyShipTot', 'OedtQtyBord', 'OedtPric', 'OedtCost', 'OedtTaxPctTot', 'OedtPricTot', 'OedtCostTot', 'OedtSpCommPct', 'OedtBrknCaseQty', 'OedtBin', 'OedtPersonalCd', 'OedtAcDisc1', 'OedtAcDisc2', 'OedtAcDisc3', 'OedtAcDisc4', 'OedtLmWipNbr', 'OedtCorePric', 'OedtAsstCode', 'OedtAsstQty', 'OedtListPric', 'OedtStanCost', 'OedtVendItemJob', 'OedtNsVendId', 'OedtNsItemGrup', 'OedtUseCode', 'OedtNsShipFromId', 'OedtAsstOvrd', 'OedtPricOvrd', 'OedtPickFlag', 'OedtMstrTaxCode1', 'OedtMstrTaxPct1', 'OedtMstrTaxCode2', 'OedtMstrTaxPct2', 'OedtMstrTaxCode3', 'OedtMstrTaxPct3', 'OedtMstrTaxCode4', 'OedtMstrTaxPct4', 'OedtMstrTaxCode5', 'OedtMstrTaxPct5', 'OedtMstrTaxCode6', 'OedtMstrTaxPct6', 'OedtMstrTaxCode7', 'OedtMstrTaxPct7', 'OedtMstrTaxCode8', 'OedtMstrTaxPct8', 'OedtMstrTaxCode9', 'OedtMstrTaxPct9', 'OedtBinArea', 'OedtSplitLine', 'OedtLostReas', 'OedtOrigLine', 'OedtCustCrssRef', 'OedtUom', 'OedtShipFlag', 'OedtKitFlag', 'OedtKitItemNbr', 'OedtBfCost', 'OedtBfMsgCode', 'OedtBfCostTot', 'OedtLmBulkPric', 'OedtLmMtrxPkgPric', 'OedtLmMtrxBulkPric', 'OedtLmContractPric', 'OedtWght', 'OedtOrdrAs', 'OedtPoDetLineNbr', 'OedtQtyToShip', 'OedtPoNbr', 'OedtPoRef', 'OedtFrtIn', 'OedtFrtInEntered', 'OedtProdCmplt', 'OedtErFlag', 'OedtOrigItem', 'OedtSubFlag', 'OedtEdiIncomingSeq', 'OedtSpordPoLine', 'OedtCatlgId', 'OedtDesignCd', 'OedtDiscPct', 'OedtTaxAmt', 'OedtXUsage', 'OedtRqtsLock', 'OedtFreshFrozen', 'OedtCoreFlag', 'OedtNsSalesAcct', 'OedtCertReqd', 'OedtAddOnSales', 'OedtBordFlag', 'OedtTempGrove', 'OedtGroveDisc', 'OedtOffInvc', 'InitItemGrup', 'ApveVendId', 'OedtAcct', 'OedtLoadTot', 'OedtPickedQty', 'OedtWiOrigQty', 'OedtMarginTot', 'OedtCoreCost', 'OedtItemRef', 'OedtSac02ReturnCode', 'OedtWgTaxCode', 'OedtWgPrice', 'OedtWgTot', 'OedtCntrQty', 'OedtConfirmCode', 'OedtPicked', 'OedtOrigRqstDate', 'OedtFabLock', 'OedtLabelPrinted', 'OedtQuoteId', 'OedtInvPrinted', 'OedtStockCheck', 'OedtShouldWeSplit', 'OedtCofcReqd', 'OedtAckCode', 'OedtWiBordNbr', 'OedtCertHistOrdr', 'OedtCertHistLine', 'OedtOrdrdAsItemId', 'OedtWiBatch1Nbr', 'OedtWiBatch1Qty', 'OedtWiBatch1Stat', 'OedtRgaNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oedtline' => 1, 'Inititemnbr' => 2, 'Oedtdesc' => 3, 'Oedtdesc2' => 4, 'Intbwhse' => 5, 'Oedtrqstdate' => 6, 'Oedtcancdate' => 7, 'Oedtshipdate' => 8, 'Oedtspecordr' => 9, 'Artbmtaxcode' => 10, 'Oedtqtyord' => 11, 'Oedtqtyship' => 12, 'Oedtqtyshiptot' => 13, 'Oedtqtybord' => 14, 'Oedtpric' => 15, 'Oedtcost' => 16, 'Oedttaxpcttot' => 17, 'Oedtprictot' => 18, 'Oedtcosttot' => 19, 'Oedtspcommpct' => 20, 'Oedtbrkncaseqty' => 21, 'Oedtbin' => 22, 'Oedtpersonalcd' => 23, 'Oedtacdisc1' => 24, 'Oedtacdisc2' => 25, 'Oedtacdisc3' => 26, 'Oedtacdisc4' => 27, 'Oedtlmwipnbr' => 28, 'Oedtcorepric' => 29, 'Oedtasstcode' => 30, 'Oedtasstqty' => 31, 'Oedtlistpric' => 32, 'Oedtstancost' => 33, 'Oedtvenditemjob' => 34, 'Oedtnsvendid' => 35, 'Oedtnsitemgrup' => 36, 'Oedtusecode' => 37, 'Oedtnsshipfromid' => 38, 'Oedtasstovrd' => 39, 'Oedtpricovrd' => 40, 'Oedtpickflag' => 41, 'Oedtmstrtaxcode1' => 42, 'Oedtmstrtaxpct1' => 43, 'Oedtmstrtaxcode2' => 44, 'Oedtmstrtaxpct2' => 45, 'Oedtmstrtaxcode3' => 46, 'Oedtmstrtaxpct3' => 47, 'Oedtmstrtaxcode4' => 48, 'Oedtmstrtaxpct4' => 49, 'Oedtmstrtaxcode5' => 50, 'Oedtmstrtaxpct5' => 51, 'Oedtmstrtaxcode6' => 52, 'Oedtmstrtaxpct6' => 53, 'Oedtmstrtaxcode7' => 54, 'Oedtmstrtaxpct7' => 55, 'Oedtmstrtaxcode8' => 56, 'Oedtmstrtaxpct8' => 57, 'Oedtmstrtaxcode9' => 58, 'Oedtmstrtaxpct9' => 59, 'Oedtbinarea' => 60, 'Oedtsplitline' => 61, 'Oedtlostreas' => 62, 'Oedtorigline' => 63, 'Oedtcustcrssref' => 64, 'Oedtuom' => 65, 'Oedtshipflag' => 66, 'Oedtkitflag' => 67, 'Oedtkititemnbr' => 68, 'Oedtbfcost' => 69, 'Oedtbfmsgcode' => 70, 'Oedtbfcosttot' => 71, 'Oedtlmbulkpric' => 72, 'Oedtlmmtrxpkgpric' => 73, 'Oedtlmmtrxbulkpric' => 74, 'Oedtlmcontractpric' => 75, 'Oedtwght' => 76, 'Oedtordras' => 77, 'Oedtpodetlinenbr' => 78, 'Oedtqtytoship' => 79, 'Oedtponbr' => 80, 'Oedtporef' => 81, 'Oedtfrtin' => 82, 'Oedtfrtinentered' => 83, 'Oedtprodcmplt' => 84, 'Oedterflag' => 85, 'Oedtorigitem' => 86, 'Oedtsubflag' => 87, 'Oedtediincomingseq' => 88, 'Oedtspordpoline' => 89, 'Oedtcatlgid' => 90, 'Oedtdesigncd' => 91, 'Oedtdiscpct' => 92, 'Oedttaxamt' => 93, 'Oedtxusage' => 94, 'Oedtrqtslock' => 95, 'Oedtfreshfrozen' => 96, 'Oedtcoreflag' => 97, 'Oedtnssalesacct' => 98, 'Oedtcertreqd' => 99, 'Oedtaddonsales' => 100, 'Oedtbordflag' => 101, 'Oedttempgrove' => 102, 'Oedtgrovedisc' => 103, 'Oedtoffinvc' => 104, 'Inititemgrup' => 105, 'Apvevendid' => 106, 'Oedtacct' => 107, 'Oedtloadtot' => 108, 'Oedtpickedqty' => 109, 'Oedtwiorigqty' => 110, 'Oedtmargintot' => 111, 'Oedtcorecost' => 112, 'Oedtitemref' => 113, 'Oedtsac02returncode' => 114, 'Oedtwgtaxcode' => 115, 'Oedtwgprice' => 116, 'Oedtwgtot' => 117, 'Oedtcntrqty' => 118, 'Oedtconfirmcode' => 119, 'Oedtpicked' => 120, 'Oedtorigrqstdate' => 121, 'Oedtfablock' => 122, 'Oedtlabelprinted' => 123, 'Oedtquoteid' => 124, 'Oedtinvprinted' => 125, 'Oedtstockcheck' => 126, 'Oedtshouldwesplit' => 127, 'Oedtcofcreqd' => 128, 'Oedtackcode' => 129, 'Oedtwibordnbr' => 130, 'Oedtcerthistordr' => 131, 'Oedtcerthistline' => 132, 'Oedtordrdasitemid' => 133, 'Oedtwibatch1nbr' => 134, 'Oedtwibatch1qty' => 135, 'Oedtwibatch1stat' => 136, 'Oedtrganbr' => 137, 'Dateupdtd' => 138, 'Timeupdtd' => 139, 'Dummy' => 140, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oedtline' => 1, 'inititemnbr' => 2, 'oedtdesc' => 3, 'oedtdesc2' => 4, 'intbwhse' => 5, 'oedtrqstdate' => 6, 'oedtcancdate' => 7, 'oedtshipdate' => 8, 'oedtspecordr' => 9, 'artbmtaxcode' => 10, 'oedtqtyord' => 11, 'oedtqtyship' => 12, 'oedtqtyshiptot' => 13, 'oedtqtybord' => 14, 'oedtpric' => 15, 'oedtcost' => 16, 'oedttaxpcttot' => 17, 'oedtprictot' => 18, 'oedtcosttot' => 19, 'oedtspcommpct' => 20, 'oedtbrkncaseqty' => 21, 'oedtbin' => 22, 'oedtpersonalcd' => 23, 'oedtacdisc1' => 24, 'oedtacdisc2' => 25, 'oedtacdisc3' => 26, 'oedtacdisc4' => 27, 'oedtlmwipnbr' => 28, 'oedtcorepric' => 29, 'oedtasstcode' => 30, 'oedtasstqty' => 31, 'oedtlistpric' => 32, 'oedtstancost' => 33, 'oedtvenditemjob' => 34, 'oedtnsvendid' => 35, 'oedtnsitemgrup' => 36, 'oedtusecode' => 37, 'oedtnsshipfromid' => 38, 'oedtasstovrd' => 39, 'oedtpricovrd' => 40, 'oedtpickflag' => 41, 'oedtmstrtaxcode1' => 42, 'oedtmstrtaxpct1' => 43, 'oedtmstrtaxcode2' => 44, 'oedtmstrtaxpct2' => 45, 'oedtmstrtaxcode3' => 46, 'oedtmstrtaxpct3' => 47, 'oedtmstrtaxcode4' => 48, 'oedtmstrtaxpct4' => 49, 'oedtmstrtaxcode5' => 50, 'oedtmstrtaxpct5' => 51, 'oedtmstrtaxcode6' => 52, 'oedtmstrtaxpct6' => 53, 'oedtmstrtaxcode7' => 54, 'oedtmstrtaxpct7' => 55, 'oedtmstrtaxcode8' => 56, 'oedtmstrtaxpct8' => 57, 'oedtmstrtaxcode9' => 58, 'oedtmstrtaxpct9' => 59, 'oedtbinarea' => 60, 'oedtsplitline' => 61, 'oedtlostreas' => 62, 'oedtorigline' => 63, 'oedtcustcrssref' => 64, 'oedtuom' => 65, 'oedtshipflag' => 66, 'oedtkitflag' => 67, 'oedtkititemnbr' => 68, 'oedtbfcost' => 69, 'oedtbfmsgcode' => 70, 'oedtbfcosttot' => 71, 'oedtlmbulkpric' => 72, 'oedtlmmtrxpkgpric' => 73, 'oedtlmmtrxbulkpric' => 74, 'oedtlmcontractpric' => 75, 'oedtwght' => 76, 'oedtordras' => 77, 'oedtpodetlinenbr' => 78, 'oedtqtytoship' => 79, 'oedtponbr' => 80, 'oedtporef' => 81, 'oedtfrtin' => 82, 'oedtfrtinentered' => 83, 'oedtprodcmplt' => 84, 'oedterflag' => 85, 'oedtorigitem' => 86, 'oedtsubflag' => 87, 'oedtediincomingseq' => 88, 'oedtspordpoline' => 89, 'oedtcatlgid' => 90, 'oedtdesigncd' => 91, 'oedtdiscpct' => 92, 'oedttaxamt' => 93, 'oedtxusage' => 94, 'oedtrqtslock' => 95, 'oedtfreshfrozen' => 96, 'oedtcoreflag' => 97, 'oedtnssalesacct' => 98, 'oedtcertreqd' => 99, 'oedtaddonsales' => 100, 'oedtbordflag' => 101, 'oedttempgrove' => 102, 'oedtgrovedisc' => 103, 'oedtoffinvc' => 104, 'inititemgrup' => 105, 'apvevendid' => 106, 'oedtacct' => 107, 'oedtloadtot' => 108, 'oedtpickedqty' => 109, 'oedtwiorigqty' => 110, 'oedtmargintot' => 111, 'oedtcorecost' => 112, 'oedtitemref' => 113, 'oedtsac02returncode' => 114, 'oedtwgtaxcode' => 115, 'oedtwgprice' => 116, 'oedtwgtot' => 117, 'oedtcntrqty' => 118, 'oedtconfirmcode' => 119, 'oedtpicked' => 120, 'oedtorigrqstdate' => 121, 'oedtfablock' => 122, 'oedtlabelprinted' => 123, 'oedtquoteid' => 124, 'oedtinvprinted' => 125, 'oedtstockcheck' => 126, 'oedtshouldwesplit' => 127, 'oedtcofcreqd' => 128, 'oedtackcode' => 129, 'oedtwibordnbr' => 130, 'oedtcerthistordr' => 131, 'oedtcerthistline' => 132, 'oedtordrdasitemid' => 133, 'oedtwibatch1nbr' => 134, 'oedtwibatch1qty' => 135, 'oedtwibatch1stat' => 136, 'oedtrganbr' => 137, 'dateupdtd' => 138, 'timeupdtd' => 139, 'dummy' => 140, ),
        self::TYPE_COLNAME       => array(SoDetailTableMap::COL_OEHDNBR => 0, SoDetailTableMap::COL_OEDTLINE => 1, SoDetailTableMap::COL_INITITEMNBR => 2, SoDetailTableMap::COL_OEDTDESC => 3, SoDetailTableMap::COL_OEDTDESC2 => 4, SoDetailTableMap::COL_INTBWHSE => 5, SoDetailTableMap::COL_OEDTRQSTDATE => 6, SoDetailTableMap::COL_OEDTCANCDATE => 7, SoDetailTableMap::COL_OEDTSHIPDATE => 8, SoDetailTableMap::COL_OEDTSPECORDR => 9, SoDetailTableMap::COL_ARTBMTAXCODE => 10, SoDetailTableMap::COL_OEDTQTYORD => 11, SoDetailTableMap::COL_OEDTQTYSHIP => 12, SoDetailTableMap::COL_OEDTQTYSHIPTOT => 13, SoDetailTableMap::COL_OEDTQTYBORD => 14, SoDetailTableMap::COL_OEDTPRIC => 15, SoDetailTableMap::COL_OEDTCOST => 16, SoDetailTableMap::COL_OEDTTAXPCTTOT => 17, SoDetailTableMap::COL_OEDTPRICTOT => 18, SoDetailTableMap::COL_OEDTCOSTTOT => 19, SoDetailTableMap::COL_OEDTSPCOMMPCT => 20, SoDetailTableMap::COL_OEDTBRKNCASEQTY => 21, SoDetailTableMap::COL_OEDTBIN => 22, SoDetailTableMap::COL_OEDTPERSONALCD => 23, SoDetailTableMap::COL_OEDTACDISC1 => 24, SoDetailTableMap::COL_OEDTACDISC2 => 25, SoDetailTableMap::COL_OEDTACDISC3 => 26, SoDetailTableMap::COL_OEDTACDISC4 => 27, SoDetailTableMap::COL_OEDTLMWIPNBR => 28, SoDetailTableMap::COL_OEDTCOREPRIC => 29, SoDetailTableMap::COL_OEDTASSTCODE => 30, SoDetailTableMap::COL_OEDTASSTQTY => 31, SoDetailTableMap::COL_OEDTLISTPRIC => 32, SoDetailTableMap::COL_OEDTSTANCOST => 33, SoDetailTableMap::COL_OEDTVENDITEMJOB => 34, SoDetailTableMap::COL_OEDTNSVENDID => 35, SoDetailTableMap::COL_OEDTNSITEMGRUP => 36, SoDetailTableMap::COL_OEDTUSECODE => 37, SoDetailTableMap::COL_OEDTNSSHIPFROMID => 38, SoDetailTableMap::COL_OEDTASSTOVRD => 39, SoDetailTableMap::COL_OEDTPRICOVRD => 40, SoDetailTableMap::COL_OEDTPICKFLAG => 41, SoDetailTableMap::COL_OEDTMSTRTAXCODE1 => 42, SoDetailTableMap::COL_OEDTMSTRTAXPCT1 => 43, SoDetailTableMap::COL_OEDTMSTRTAXCODE2 => 44, SoDetailTableMap::COL_OEDTMSTRTAXPCT2 => 45, SoDetailTableMap::COL_OEDTMSTRTAXCODE3 => 46, SoDetailTableMap::COL_OEDTMSTRTAXPCT3 => 47, SoDetailTableMap::COL_OEDTMSTRTAXCODE4 => 48, SoDetailTableMap::COL_OEDTMSTRTAXPCT4 => 49, SoDetailTableMap::COL_OEDTMSTRTAXCODE5 => 50, SoDetailTableMap::COL_OEDTMSTRTAXPCT5 => 51, SoDetailTableMap::COL_OEDTMSTRTAXCODE6 => 52, SoDetailTableMap::COL_OEDTMSTRTAXPCT6 => 53, SoDetailTableMap::COL_OEDTMSTRTAXCODE7 => 54, SoDetailTableMap::COL_OEDTMSTRTAXPCT7 => 55, SoDetailTableMap::COL_OEDTMSTRTAXCODE8 => 56, SoDetailTableMap::COL_OEDTMSTRTAXPCT8 => 57, SoDetailTableMap::COL_OEDTMSTRTAXCODE9 => 58, SoDetailTableMap::COL_OEDTMSTRTAXPCT9 => 59, SoDetailTableMap::COL_OEDTBINAREA => 60, SoDetailTableMap::COL_OEDTSPLITLINE => 61, SoDetailTableMap::COL_OEDTLOSTREAS => 62, SoDetailTableMap::COL_OEDTORIGLINE => 63, SoDetailTableMap::COL_OEDTCUSTCRSSREF => 64, SoDetailTableMap::COL_OEDTUOM => 65, SoDetailTableMap::COL_OEDTSHIPFLAG => 66, SoDetailTableMap::COL_OEDTKITFLAG => 67, SoDetailTableMap::COL_OEDTKITITEMNBR => 68, SoDetailTableMap::COL_OEDTBFCOST => 69, SoDetailTableMap::COL_OEDTBFMSGCODE => 70, SoDetailTableMap::COL_OEDTBFCOSTTOT => 71, SoDetailTableMap::COL_OEDTLMBULKPRIC => 72, SoDetailTableMap::COL_OEDTLMMTRXPKGPRIC => 73, SoDetailTableMap::COL_OEDTLMMTRXBULKPRIC => 74, SoDetailTableMap::COL_OEDTLMCONTRACTPRIC => 75, SoDetailTableMap::COL_OEDTWGHT => 76, SoDetailTableMap::COL_OEDTORDRAS => 77, SoDetailTableMap::COL_OEDTPODETLINENBR => 78, SoDetailTableMap::COL_OEDTQTYTOSHIP => 79, SoDetailTableMap::COL_OEDTPONBR => 80, SoDetailTableMap::COL_OEDTPOREF => 81, SoDetailTableMap::COL_OEDTFRTIN => 82, SoDetailTableMap::COL_OEDTFRTINENTERED => 83, SoDetailTableMap::COL_OEDTPRODCMPLT => 84, SoDetailTableMap::COL_OEDTERFLAG => 85, SoDetailTableMap::COL_OEDTORIGITEM => 86, SoDetailTableMap::COL_OEDTSUBFLAG => 87, SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ => 88, SoDetailTableMap::COL_OEDTSPORDPOLINE => 89, SoDetailTableMap::COL_OEDTCATLGID => 90, SoDetailTableMap::COL_OEDTDESIGNCD => 91, SoDetailTableMap::COL_OEDTDISCPCT => 92, SoDetailTableMap::COL_OEDTTAXAMT => 93, SoDetailTableMap::COL_OEDTXUSAGE => 94, SoDetailTableMap::COL_OEDTRQTSLOCK => 95, SoDetailTableMap::COL_OEDTFRESHFROZEN => 96, SoDetailTableMap::COL_OEDTCOREFLAG => 97, SoDetailTableMap::COL_OEDTNSSALESACCT => 98, SoDetailTableMap::COL_OEDTCERTREQD => 99, SoDetailTableMap::COL_OEDTADDONSALES => 100, SoDetailTableMap::COL_OEDTBORDFLAG => 101, SoDetailTableMap::COL_OEDTTEMPGROVE => 102, SoDetailTableMap::COL_OEDTGROVEDISC => 103, SoDetailTableMap::COL_OEDTOFFINVC => 104, SoDetailTableMap::COL_INITITEMGRUP => 105, SoDetailTableMap::COL_APVEVENDID => 106, SoDetailTableMap::COL_OEDTACCT => 107, SoDetailTableMap::COL_OEDTLOADTOT => 108, SoDetailTableMap::COL_OEDTPICKEDQTY => 109, SoDetailTableMap::COL_OEDTWIORIGQTY => 110, SoDetailTableMap::COL_OEDTMARGINTOT => 111, SoDetailTableMap::COL_OEDTCORECOST => 112, SoDetailTableMap::COL_OEDTITEMREF => 113, SoDetailTableMap::COL_OEDTSAC02RETURNCODE => 114, SoDetailTableMap::COL_OEDTWGTAXCODE => 115, SoDetailTableMap::COL_OEDTWGPRICE => 116, SoDetailTableMap::COL_OEDTWGTOT => 117, SoDetailTableMap::COL_OEDTCNTRQTY => 118, SoDetailTableMap::COL_OEDTCONFIRMCODE => 119, SoDetailTableMap::COL_OEDTPICKED => 120, SoDetailTableMap::COL_OEDTORIGRQSTDATE => 121, SoDetailTableMap::COL_OEDTFABLOCK => 122, SoDetailTableMap::COL_OEDTLABELPRINTED => 123, SoDetailTableMap::COL_OEDTQUOTEID => 124, SoDetailTableMap::COL_OEDTINVPRINTED => 125, SoDetailTableMap::COL_OEDTSTOCKCHECK => 126, SoDetailTableMap::COL_OEDTSHOULDWESPLIT => 127, SoDetailTableMap::COL_OEDTCOFCREQD => 128, SoDetailTableMap::COL_OEDTACKCODE => 129, SoDetailTableMap::COL_OEDTWIBORDNBR => 130, SoDetailTableMap::COL_OEDTCERTHISTORDR => 131, SoDetailTableMap::COL_OEDTCERTHISTLINE => 132, SoDetailTableMap::COL_OEDTORDRDASITEMID => 133, SoDetailTableMap::COL_OEDTWIBATCH1NBR => 134, SoDetailTableMap::COL_OEDTWIBATCH1QTY => 135, SoDetailTableMap::COL_OEDTWIBATCH1STAT => 136, SoDetailTableMap::COL_OEDTRGANBR => 137, SoDetailTableMap::COL_DATEUPDTD => 138, SoDetailTableMap::COL_TIMEUPDTD => 139, SoDetailTableMap::COL_DUMMY => 140, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OedtLine' => 1, 'InitItemNbr' => 2, 'OedtDesc' => 3, 'OedtDesc2' => 4, 'IntbWhse' => 5, 'OedtRqstDate' => 6, 'OedtCancDate' => 7, 'OedtShipDate' => 8, 'OedtSpecOrdr' => 9, 'ArtbMtaxCode' => 10, 'OedtQtyOrd' => 11, 'OedtQtyShip' => 12, 'OedtQtyShipTot' => 13, 'OedtQtyBord' => 14, 'OedtPric' => 15, 'OedtCost' => 16, 'OedtTaxPctTot' => 17, 'OedtPricTot' => 18, 'OedtCostTot' => 19, 'OedtSpCommPct' => 20, 'OedtBrknCaseQty' => 21, 'OedtBin' => 22, 'OedtPersonalCd' => 23, 'OedtAcDisc1' => 24, 'OedtAcDisc2' => 25, 'OedtAcDisc3' => 26, 'OedtAcDisc4' => 27, 'OedtLmWipNbr' => 28, 'OedtCorePric' => 29, 'OedtAsstCode' => 30, 'OedtAsstQty' => 31, 'OedtListPric' => 32, 'OedtStanCost' => 33, 'OedtVendItemJob' => 34, 'OedtNsVendId' => 35, 'OedtNsItemGrup' => 36, 'OedtUseCode' => 37, 'OedtNsShipFromId' => 38, 'OedtAsstOvrd' => 39, 'OedtPricOvrd' => 40, 'OedtPickFlag' => 41, 'OedtMstrTaxCode1' => 42, 'OedtMstrTaxPct1' => 43, 'OedtMstrTaxCode2' => 44, 'OedtMstrTaxPct2' => 45, 'OedtMstrTaxCode3' => 46, 'OedtMstrTaxPct3' => 47, 'OedtMstrTaxCode4' => 48, 'OedtMstrTaxPct4' => 49, 'OedtMstrTaxCode5' => 50, 'OedtMstrTaxPct5' => 51, 'OedtMstrTaxCode6' => 52, 'OedtMstrTaxPct6' => 53, 'OedtMstrTaxCode7' => 54, 'OedtMstrTaxPct7' => 55, 'OedtMstrTaxCode8' => 56, 'OedtMstrTaxPct8' => 57, 'OedtMstrTaxCode9' => 58, 'OedtMstrTaxPct9' => 59, 'OedtBinArea' => 60, 'OedtSplitLine' => 61, 'OedtLostReas' => 62, 'OedtOrigLine' => 63, 'OedtCustCrssRef' => 64, 'OedtUom' => 65, 'OedtShipFlag' => 66, 'OedtKitFlag' => 67, 'OedtKitItemNbr' => 68, 'OedtBfCost' => 69, 'OedtBfMsgCode' => 70, 'OedtBfCostTot' => 71, 'OedtLmBulkPric' => 72, 'OedtLmMtrxPkgPric' => 73, 'OedtLmMtrxBulkPric' => 74, 'OedtLmContractPric' => 75, 'OedtWght' => 76, 'OedtOrdrAs' => 77, 'OedtPoDetLineNbr' => 78, 'OedtQtyToShip' => 79, 'OedtPoNbr' => 80, 'OedtPoRef' => 81, 'OedtFrtIn' => 82, 'OedtFrtInEntered' => 83, 'OedtProdCmplt' => 84, 'OedtErFlag' => 85, 'OedtOrigItem' => 86, 'OedtSubFlag' => 87, 'OedtEdiIncomingSeq' => 88, 'OedtSpordPoLine' => 89, 'OedtCatlgId' => 90, 'OedtDesignCd' => 91, 'OedtDiscPct' => 92, 'OedtTaxAmt' => 93, 'OedtXUsage' => 94, 'OedtRqtsLock' => 95, 'OedtFreshFrozen' => 96, 'OedtCoreFlag' => 97, 'OedtNsSalesAcct' => 98, 'OedtCertReqd' => 99, 'OedtAddOnSales' => 100, 'OedtBordFlag' => 101, 'OedtTempGrove' => 102, 'OedtGroveDisc' => 103, 'OedtOffInvc' => 104, 'InitItemGrup' => 105, 'ApveVendId' => 106, 'OedtAcct' => 107, 'OedtLoadTot' => 108, 'OedtPickedQty' => 109, 'OedtWiOrigQty' => 110, 'OedtMarginTot' => 111, 'OedtCoreCost' => 112, 'OedtItemRef' => 113, 'OedtSac02ReturnCode' => 114, 'OedtWgTaxCode' => 115, 'OedtWgPrice' => 116, 'OedtWgTot' => 117, 'OedtCntrQty' => 118, 'OedtConfirmCode' => 119, 'OedtPicked' => 120, 'OedtOrigRqstDate' => 121, 'OedtFabLock' => 122, 'OedtLabelPrinted' => 123, 'OedtQuoteId' => 124, 'OedtInvPrinted' => 125, 'OedtStockCheck' => 126, 'OedtShouldWeSplit' => 127, 'OedtCofcReqd' => 128, 'OedtAckCode' => 129, 'OedtWiBordNbr' => 130, 'OedtCertHistOrdr' => 131, 'OedtCertHistLine' => 132, 'OedtOrdrdAsItemId' => 133, 'OedtWiBatch1Nbr' => 134, 'OedtWiBatch1Qty' => 135, 'OedtWiBatch1Stat' => 136, 'OedtRgaNbr' => 137, 'DateUpdtd' => 138, 'TimeUpdtd' => 139, 'dummy' => 140, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, )
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
        $this->setName('so_detail');
        $this->setPhpName('SoDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OehdNbr', 'Oehdnbr', 'VARCHAR', true, 10, '');
        $this->addPrimaryKey('OedtLine', 'Oedtline', 'INTEGER', true, 4, 0);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtDesc', 'Oedtdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('OedtDesc2', 'Oedtdesc2', 'VARCHAR', false, 35, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OedtRqstDate', 'Oedtrqstdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtCancDate', 'Oedtcancdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtShipDate', 'Oedtshipdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtSpecOrdr', 'Oedtspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtQtyOrd', 'Oedtqtyord', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQtyShip', 'Oedtqtyship', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQtyShipTot', 'Oedtqtyshiptot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQtyBord', 'Oedtqtybord', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPric', 'Oedtpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCost', 'Oedtcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtTaxPctTot', 'Oedttaxpcttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPricTot', 'Oedtprictot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCostTot', 'Oedtcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtSpCommPct', 'Oedtspcommpct', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtBrknCaseQty', 'Oedtbrkncaseqty', 'INTEGER', false, 5, null);
        $this->addColumn('OedtBin', 'Oedtbin', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtPersonalCd', 'Oedtpersonalcd', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtAcDisc1', 'Oedtacdisc1', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtAcDisc2', 'Oedtacdisc2', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtAcDisc3', 'Oedtacdisc3', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtAcDisc4', 'Oedtacdisc4', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtLmWipNbr', 'Oedtlmwipnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtCorePric', 'Oedtcorepric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtAsstCode', 'Oedtasstcode', 'VARCHAR', false, 3, null);
        $this->addColumn('OedtAsstQty', 'Oedtasstqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtListPric', 'Oedtlistpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtStanCost', 'Oedtstancost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtVendItemJob', 'Oedtvenditemjob', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtNsVendId', 'Oedtnsvendid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtNsItemGrup', 'Oedtnsitemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtUseCode', 'Oedtusecode', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtNsShipFromId', 'Oedtnsshipfromid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtAsstOvrd', 'Oedtasstovrd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtPricOvrd', 'Oedtpricovrd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtPickFlag', 'Oedtpickflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtMstrTaxCode1', 'Oedtmstrtaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct1', 'Oedtmstrtaxpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode2', 'Oedtmstrtaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct2', 'Oedtmstrtaxpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode3', 'Oedtmstrtaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct3', 'Oedtmstrtaxpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode4', 'Oedtmstrtaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct4', 'Oedtmstrtaxpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode5', 'Oedtmstrtaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct5', 'Oedtmstrtaxpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode6', 'Oedtmstrtaxcode6', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct6', 'Oedtmstrtaxpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode7', 'Oedtmstrtaxcode7', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct7', 'Oedtmstrtaxpct7', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode8', 'Oedtmstrtaxcode8', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct8', 'Oedtmstrtaxpct8', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode9', 'Oedtmstrtaxcode9', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct9', 'Oedtmstrtaxpct9', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtBinArea', 'Oedtbinarea', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtSplitLine', 'Oedtsplitline', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtLostReas', 'Oedtlostreas', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtOrigLine', 'Oedtorigline', 'INTEGER', false, 5, null);
        $this->addColumn('OedtCustCrssRef', 'Oedtcustcrssref', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtUom', 'Oedtuom', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtShipFlag', 'Oedtshipflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtKitFlag', 'Oedtkitflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtKitItemNbr', 'Oedtkititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtBfCost', 'Oedtbfcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtBfMsgCode', 'Oedtbfmsgcode', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtBfCostTot', 'Oedtbfcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtLmBulkPric', 'Oedtlmbulkpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtLmMtrxPkgPric', 'Oedtlmmtrxpkgpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtLmMtrxBulkPric', 'Oedtlmmtrxbulkpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtLmContractPric', 'Oedtlmcontractpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtWght', 'Oedtwght', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtOrdrAs', 'Oedtordras', 'VARCHAR', false, 2, null);
        $this->addColumn('OedtPoDetLineNbr', 'Oedtpodetlinenbr', 'INTEGER', false, 6, null);
        $this->addColumn('OedtQtyToShip', 'Oedtqtytoship', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPoNbr', 'Oedtponbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtPoRef', 'Oedtporef', 'VARCHAR', false, 15, null);
        $this->addColumn('OedtFrtIn', 'Oedtfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtFrtInEntered', 'Oedtfrtinentered', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtProdCmplt', 'Oedtprodcmplt', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtErFlag', 'Oedterflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtOrigItem', 'Oedtorigitem', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtSubFlag', 'Oedtsubflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtEdiIncomingSeq', 'Oedtediincomingseq', 'INTEGER', false, 3, null);
        $this->addColumn('OedtSpordPoLine', 'Oedtspordpoline', 'INTEGER', false, 4, null);
        $this->addColumn('OedtCatlgId', 'Oedtcatlgid', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtDesignCd', 'Oedtdesigncd', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtDiscPct', 'Oedtdiscpct', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtTaxAmt', 'Oedttaxamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtXUsage', 'Oedtxusage', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtRqtsLock', 'Oedtrqtslock', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtFreshFrozen', 'Oedtfreshfrozen', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtCoreFlag', 'Oedtcoreflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtNsSalesAcct', 'Oedtnssalesacct', 'VARCHAR', false, 9, null);
        $this->addColumn('OedtCertReqd', 'Oedtcertreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtAddOnSales', 'Oedtaddonsales', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtBordFlag', 'Oedtbordflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtTempGrove', 'Oedttempgrove', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtGroveDisc', 'Oedtgrovedisc', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtOffInvc', 'Oedtoffinvc', 'VARCHAR', false, 1, null);
        $this->addColumn('InitItemGrup', 'Inititemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('ApveVendId', 'Apvevendid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtAcct', 'Oedtacct', 'VARCHAR', false, 9, null);
        $this->addColumn('OedtLoadTot', 'Oedtloadtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPickedQty', 'Oedtpickedqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtWiOrigQty', 'Oedtwiorigqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMarginTot', 'Oedtmargintot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCoreCost', 'Oedtcorecost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtItemRef', 'Oedtitemref', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtSac02ReturnCode', 'Oedtsac02returncode', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtWgTaxCode', 'Oedtwgtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtWgPrice', 'Oedtwgprice', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtWgTot', 'Oedtwgtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCntrQty', 'Oedtcntrqty', 'INTEGER', false, 7, null);
        $this->addColumn('OedtConfirmCode', 'Oedtconfirmcode', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtPicked', 'Oedtpicked', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtOrigRqstDate', 'Oedtorigrqstdate', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtFabLock', 'Oedtfablock', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtLabelPrinted', 'Oedtlabelprinted', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtQuoteId', 'Oedtquoteid', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtInvPrinted', 'Oedtinvprinted', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtStockCheck', 'Oedtstockcheck', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtShouldWeSplit', 'Oedtshouldwesplit', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtCofcReqd', 'Oedtcofcreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtAckCode', 'Oedtackcode', 'VARCHAR', false, 2, null);
        $this->addColumn('OedtWiBordNbr', 'Oedtwibordnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('OedtCertHistOrdr', 'Oedtcerthistordr', 'VARCHAR', false, 10, null);
        $this->addColumn('OedtCertHistLine', 'Oedtcerthistline', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtOrdrdAsItemId', 'Oedtordrdasitemid', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtWiBatch1Nbr', 'Oedtwibatch1nbr', 'INTEGER', false, 8, null);
        $this->addColumn('OedtWiBatch1Qty', 'Oedtwibatch1qty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtWiBatch1Stat', 'Oedtwibatch1stat', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtRgaNbr', 'Oedtrganbr', 'INTEGER', false, 8, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \SoDetail $obj A \SoDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
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
     * @param mixed $value A \SoDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SoDetail) {
                $key = serialize([(null === $value->getOehdnbr() || is_scalar($value->getOehdnbr()) || is_callable([$value->getOehdnbr(), '__toString']) ? (string) $value->getOehdnbr() : $value->getOehdnbr()), (null === $value->getOedtline() || is_scalar($value->getOedtline()) || is_callable([$value->getOedtline(), '__toString']) ? (string) $value->getOedtline() : $value->getOedtline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SoDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SoDetailTableMap::CLASS_DEFAULT : SoDetailTableMap::OM_CLASS;
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
     * @return array           (SoDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoDetailTableMap::OM_CLASS;
            /** @var SoDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = SoDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDESC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDESC2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTRQSTDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCANCDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSHIPDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPECORDR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYORD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYSHIP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYSHIPTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYBORD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTTAXPCTTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRICTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOSTTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPCOMMPCT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBRKNCASEQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBIN);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPERSONALCD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTACDISC1);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTACDISC2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTACDISC3);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTACDISC4);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLMWIPNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOREPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTASSTCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTASSTQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLISTPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSTANCOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTVENDITEMJOB);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSVENDID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSITEMGRUP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTUSECODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSSHIPFROMID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTASSTOVRD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRICOVRD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPICKFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE1);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT1);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE3);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT3);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE4);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT4);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE5);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT5);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE6);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT6);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE7);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT7);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE8);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT8);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE9);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT9);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBINAREA);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPLITLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLOSTREAS);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORIGLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCUSTCRSSREF);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTUOM);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSHIPFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTKITFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTKITITEMNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBFCOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBFMSGCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBFCOSTTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLMBULKPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLMMTRXPKGPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLMMTRXBULKPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLMCONTRACTPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGHT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORDRAS);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPODETLINENBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYTOSHIP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPONBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPOREF);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTFRTIN);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTFRTINENTERED);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRODCMPLT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTERFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORIGITEM);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSUBFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPORDPOLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCATLGID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDESIGNCD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDISCPCT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTTAXAMT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTXUSAGE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTRQTSLOCK);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTFRESHFROZEN);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOREFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSSALESACCT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCERTREQD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTADDONSALES);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBORDFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTTEMPGROVE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTGROVEDISC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTOFFINVC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_INITITEMGRUP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTACCT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLOADTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPICKEDQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWIORIGQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMARGINTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCORECOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTITEMREF);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSAC02RETURNCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGTAXCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGPRICE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCNTRQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCONFIRMCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPICKED);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORIGRQSTDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTFABLOCK);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLABELPRINTED);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQUOTEID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTINVPRINTED);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSTOCKCHECK);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSHOULDWESPLIT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOFCREQD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTACKCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWIBORDNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCERTHISTORDR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCERTHISTLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORDRDASITEMID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWIBATCH1NBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWIBATCH1QTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWIBATCH1STAT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTRGANBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_DUMMY);
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
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
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
            $criteria->addSelectColumn($alias . '.OedtWght');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoDetailTableMap::DATABASE_NAME)->getTable(SoDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SoDetailTableMap::COL_OEHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SoDetailTableMap::COL_OEDTLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SoDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoDetailTableMap::removeInstanceFromPool($singleval);
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
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoDetail object
        }


        // Set the correct dbName
        $query = SoDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoDetailTableMap::buildTableMap();
