<?php

namespace Map;

use \QuoteDetail;
use \QuoteDetailQuery;
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
 * This class defines the structure of the 'quote_detail' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class QuoteDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.QuoteDetailTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'quote_detail';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'QuoteDetail';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\QuoteDetail';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'QuoteDetail';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 96;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 96;

    /**
     * the column name for the QthdId field
     */
    public const COL_QTHDID = 'quote_detail.QthdId';

    /**
     * the column name for the QtdtLine field
     */
    public const COL_QTDTLINE = 'quote_detail.QtdtLine';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'quote_detail.InitItemNbr';

    /**
     * the column name for the QtdtDesc field
     */
    public const COL_QTDTDESC = 'quote_detail.QtdtDesc';

    /**
     * the column name for the QtdtDesc2 field
     */
    public const COL_QTDTDESC2 = 'quote_detail.QtdtDesc2';

    /**
     * the column name for the QtdtCustCrssRef field
     */
    public const COL_QTDTCUSTCRSSREF = 'quote_detail.QtdtCustCrssRef';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'quote_detail.IntbWhse';

    /**
     * the column name for the QtdtRqstDate field
     */
    public const COL_QTDTRQSTDATE = 'quote_detail.QtdtRqstDate';

    /**
     * the column name for the QtdtSpecOrdr field
     */
    public const COL_QTDTSPECORDR = 'quote_detail.QtdtSpecOrdr';

    /**
     * the column name for the ArtbCtaxCode field
     */
    public const COL_ARTBCTAXCODE = 'quote_detail.ArtbCtaxCode';

    /**
     * the column name for the QtdtQtyOrd field
     */
    public const COL_QTDTQTYORD = 'quote_detail.QtdtQtyOrd';

    /**
     * the column name for the QtdtPric field
     */
    public const COL_QTDTPRIC = 'quote_detail.QtdtPric';

    /**
     * the column name for the QtdtCost field
     */
    public const COL_QTDTCOST = 'quote_detail.QtdtCost';

    /**
     * the column name for the QtdtTaxPctTot field
     */
    public const COL_QTDTTAXPCTTOT = 'quote_detail.QtdtTaxPctTot';

    /**
     * the column name for the QtdtPricTot field
     */
    public const COL_QTDTPRICTOT = 'quote_detail.QtdtPricTot';

    /**
     * the column name for the QtdtCostTot field
     */
    public const COL_QTDTCOSTTOT = 'quote_detail.QtdtCostTot';

    /**
     * the column name for the QtdtWghtTot field
     */
    public const COL_QTDTWGHTTOT = 'quote_detail.QtdtWghtTot';

    /**
     * the column name for the QtdtMstrTaxCode1 field
     */
    public const COL_QTDTMSTRTAXCODE1 = 'quote_detail.QtdtMstrTaxCode1';

    /**
     * the column name for the QtdtMstrTaxPct1 field
     */
    public const COL_QTDTMSTRTAXPCT1 = 'quote_detail.QtdtMstrTaxPct1';

    /**
     * the column name for the QtdtMstrTaxCode2 field
     */
    public const COL_QTDTMSTRTAXCODE2 = 'quote_detail.QtdtMstrTaxCode2';

    /**
     * the column name for the QtdtMstrTaxPct2 field
     */
    public const COL_QTDTMSTRTAXPCT2 = 'quote_detail.QtdtMstrTaxPct2';

    /**
     * the column name for the QtdtMstrTaxCode3 field
     */
    public const COL_QTDTMSTRTAXCODE3 = 'quote_detail.QtdtMstrTaxCode3';

    /**
     * the column name for the QtdtMstrTaxPct3 field
     */
    public const COL_QTDTMSTRTAXPCT3 = 'quote_detail.QtdtMstrTaxPct3';

    /**
     * the column name for the QtdtMstrTaxCode4 field
     */
    public const COL_QTDTMSTRTAXCODE4 = 'quote_detail.QtdtMstrTaxCode4';

    /**
     * the column name for the QtdtMstrTaxPct4 field
     */
    public const COL_QTDTMSTRTAXPCT4 = 'quote_detail.QtdtMstrTaxPct4';

    /**
     * the column name for the QtdtMstrTaxCode5 field
     */
    public const COL_QTDTMSTRTAXCODE5 = 'quote_detail.QtdtMstrTaxCode5';

    /**
     * the column name for the QtdtMstrTaxPct5 field
     */
    public const COL_QTDTMSTRTAXPCT5 = 'quote_detail.QtdtMstrTaxPct5';

    /**
     * the column name for the QtdtMstrTaxCode6 field
     */
    public const COL_QTDTMSTRTAXCODE6 = 'quote_detail.QtdtMstrTaxCode6';

    /**
     * the column name for the QtdtMstrTaxPct6 field
     */
    public const COL_QTDTMSTRTAXPCT6 = 'quote_detail.QtdtMstrTaxPct6';

    /**
     * the column name for the QtdtMstrTaxCode7 field
     */
    public const COL_QTDTMSTRTAXCODE7 = 'quote_detail.QtdtMstrTaxCode7';

    /**
     * the column name for the QtdtMstrTaxPct7 field
     */
    public const COL_QTDTMSTRTAXPCT7 = 'quote_detail.QtdtMstrTaxPct7';

    /**
     * the column name for the QtdtMstrTaxCode8 field
     */
    public const COL_QTDTMSTRTAXCODE8 = 'quote_detail.QtdtMstrTaxCode8';

    /**
     * the column name for the QtdtMstrTaxPct8 field
     */
    public const COL_QTDTMSTRTAXPCT8 = 'quote_detail.QtdtMstrTaxPct8';

    /**
     * the column name for the QtdtMstrTaxCode9 field
     */
    public const COL_QTDTMSTRTAXCODE9 = 'quote_detail.QtdtMstrTaxCode9';

    /**
     * the column name for the QtdtMstrTaxPct9 field
     */
    public const COL_QTDTMSTRTAXPCT9 = 'quote_detail.QtdtMstrTaxPct9';

    /**
     * the column name for the IntbUomSale field
     */
    public const COL_INTBUOMSALE = 'quote_detail.IntbUomSale';

    /**
     * the column name for the IntbUomPur field
     */
    public const COL_INTBUOMPUR = 'quote_detail.IntbUomPur';

    /**
     * the column name for the QtdtQuotInd1 field
     */
    public const COL_QTDTQUOTIND1 = 'quote_detail.QtdtQuotInd1';

    /**
     * the column name for the QtdtQuotUnit1 field
     */
    public const COL_QTDTQUOTUNIT1 = 'quote_detail.QtdtQuotUnit1';

    /**
     * the column name for the QtdtQuotPric1 field
     */
    public const COL_QTDTQUOTPRIC1 = 'quote_detail.QtdtQuotPric1';

    /**
     * the column name for the QtdtQuotCost1 field
     */
    public const COL_QTDTQUOTCOST1 = 'quote_detail.QtdtQuotCost1';

    /**
     * the column name for the QtdtQuotMkupMarg1 field
     */
    public const COL_QTDTQUOTMKUPMARG1 = 'quote_detail.QtdtQuotMkupMarg1';

    /**
     * the column name for the QtdtQuotInd2 field
     */
    public const COL_QTDTQUOTIND2 = 'quote_detail.QtdtQuotInd2';

    /**
     * the column name for the QtdtQuotUnit2 field
     */
    public const COL_QTDTQUOTUNIT2 = 'quote_detail.QtdtQuotUnit2';

    /**
     * the column name for the QtdtQuotPric2 field
     */
    public const COL_QTDTQUOTPRIC2 = 'quote_detail.QtdtQuotPric2';

    /**
     * the column name for the QtdtQuotCost2 field
     */
    public const COL_QTDTQUOTCOST2 = 'quote_detail.QtdtQuotCost2';

    /**
     * the column name for the QtdtQuotMkupMarg2 field
     */
    public const COL_QTDTQUOTMKUPMARG2 = 'quote_detail.QtdtQuotMkupMarg2';

    /**
     * the column name for the QtdtQuotInd3 field
     */
    public const COL_QTDTQUOTIND3 = 'quote_detail.QtdtQuotInd3';

    /**
     * the column name for the QtdtQuotUnit3 field
     */
    public const COL_QTDTQUOTUNIT3 = 'quote_detail.QtdtQuotUnit3';

    /**
     * the column name for the QtdtQuotPric3 field
     */
    public const COL_QTDTQUOTPRIC3 = 'quote_detail.QtdtQuotPric3';

    /**
     * the column name for the QtdtQuotCost3 field
     */
    public const COL_QTDTQUOTCOST3 = 'quote_detail.QtdtQuotCost3';

    /**
     * the column name for the QtdtQuotMkupMarg3 field
     */
    public const COL_QTDTQUOTMKUPMARG3 = 'quote_detail.QtdtQuotMkupMarg3';

    /**
     * the column name for the QtdtQuotInd4 field
     */
    public const COL_QTDTQUOTIND4 = 'quote_detail.QtdtQuotInd4';

    /**
     * the column name for the QtdtQuotUnit4 field
     */
    public const COL_QTDTQUOTUNIT4 = 'quote_detail.QtdtQuotUnit4';

    /**
     * the column name for the QtdtQuotPric4 field
     */
    public const COL_QTDTQUOTPRIC4 = 'quote_detail.QtdtQuotPric4';

    /**
     * the column name for the QtdtQuotCost4 field
     */
    public const COL_QTDTQUOTCOST4 = 'quote_detail.QtdtQuotCost4';

    /**
     * the column name for the QtdtQuotMkupMarg4 field
     */
    public const COL_QTDTQUOTMKUPMARG4 = 'quote_detail.QtdtQuotMkupMarg4';

    /**
     * the column name for the QtdtQuotInd5 field
     */
    public const COL_QTDTQUOTIND5 = 'quote_detail.QtdtQuotInd5';

    /**
     * the column name for the QtdtQuotUnit5 field
     */
    public const COL_QTDTQUOTUNIT5 = 'quote_detail.QtdtQuotUnit5';

    /**
     * the column name for the QtdtQuotPric5 field
     */
    public const COL_QTDTQUOTPRIC5 = 'quote_detail.QtdtQuotPric5';

    /**
     * the column name for the QtdtQuotCost5 field
     */
    public const COL_QTDTQUOTCOST5 = 'quote_detail.QtdtQuotCost5';

    /**
     * the column name for the QtdtQuotMkupMarg5 field
     */
    public const COL_QTDTQUOTMKUPMARG5 = 'quote_detail.QtdtQuotMkupMarg5';

    /**
     * the column name for the QtdtQuotInd6 field
     */
    public const COL_QTDTQUOTIND6 = 'quote_detail.QtdtQuotInd6';

    /**
     * the column name for the QtdtQuotUnit6 field
     */
    public const COL_QTDTQUOTUNIT6 = 'quote_detail.QtdtQuotUnit6';

    /**
     * the column name for the QtdtQuotPric6 field
     */
    public const COL_QTDTQUOTPRIC6 = 'quote_detail.QtdtQuotPric6';

    /**
     * the column name for the QtdtQuotCost6 field
     */
    public const COL_QTDTQUOTCOST6 = 'quote_detail.QtdtQuotCost6';

    /**
     * the column name for the QtdtQuotMkupMarg6 field
     */
    public const COL_QTDTQUOTMKUPMARG6 = 'quote_detail.QtdtQuotMkupMarg6';

    /**
     * the column name for the QtdtAsstCode field
     */
    public const COL_QTDTASSTCODE = 'quote_detail.QtdtAsstCode';

    /**
     * the column name for the QtdtAsstQty field
     */
    public const COL_QTDTASSTQTY = 'quote_detail.QtdtAsstQty';

    /**
     * the column name for the QtdtListPric field
     */
    public const COL_QTDTLISTPRIC = 'quote_detail.QtdtListPric';

    /**
     * the column name for the QtdtStanCost field
     */
    public const COL_QTDTSTANCOST = 'quote_detail.QtdtStanCost';

    /**
     * the column name for the QtdtVendItemJob field
     */
    public const COL_QTDTVENDITEMJOB = 'quote_detail.QtdtVendItemJob';

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'quote_detail.ApveVendId';

    /**
     * the column name for the QtdtNsItemGrup field
     */
    public const COL_QTDTNSITEMGRUP = 'quote_detail.QtdtNsItemGrup';

    /**
     * the column name for the QtdtUseCode field
     */
    public const COL_QTDTUSECODE = 'quote_detail.QtdtUseCode';

    /**
     * the column name for the QtdtPickFlag field
     */
    public const COL_QTDTPICKFLAG = 'quote_detail.QtdtPickFlag';

    /**
     * the column name for the QtdtStatus field
     */
    public const COL_QTDTSTATUS = 'quote_detail.QtdtStatus';

    /**
     * the column name for the OetbLsslCode field
     */
    public const COL_OETBLSSLCODE = 'quote_detail.OetbLsslCode';

    /**
     * the column name for the QtdtLostDate field
     */
    public const COL_QTDTLOSTDATE = 'quote_detail.QtdtLostDate';

    /**
     * the column name for the QtdtLostPosted field
     */
    public const COL_QTDTLOSTPOSTED = 'quote_detail.QtdtLostPosted';

    /**
     * the column name for the QtdtLeadDays field
     */
    public const COL_QTDTLEADDAYS = 'quote_detail.QtdtLeadDays';

    /**
     * the column name for the QtdtOrdrDiscPct field
     */
    public const COL_QTDTORDRDISCPCT = 'quote_detail.QtdtOrdrDiscPct';

    /**
     * the column name for the QtdtQuotDiscPct1 field
     */
    public const COL_QTDTQUOTDISCPCT1 = 'quote_detail.QtdtQuotDiscPct1';

    /**
     * the column name for the QtdtMtrcReqd field
     */
    public const COL_QTDTMTRCREQD = 'quote_detail.QtdtMtrcReqd';

    /**
     * the column name for the QtdtCofcReqd field
     */
    public const COL_QTDTCOFCREQD = 'quote_detail.QtdtCofcReqd';

    /**
     * the column name for the QtdtMnfrId field
     */
    public const COL_QTDTMNFRID = 'quote_detail.QtdtMnfrId';

    /**
     * the column name for the QtdtMnfrItemId field
     */
    public const COL_QTDTMNFRITEMID = 'quote_detail.QtdtMnfrItemId';

    /**
     * the column name for the QtdtLmOrdrNbr field
     */
    public const COL_QTDTLMORDRNBR = 'quote_detail.QtdtLmOrdrNbr';

    /**
     * the column name for the QtdtLmOrdrDate field
     */
    public const COL_QTDTLMORDRDATE = 'quote_detail.QtdtLmOrdrDate';

    /**
     * the column name for the QtdtSpecItemCode field
     */
    public const COL_QTDTSPECITEMCODE = 'quote_detail.QtdtSpecItemCode';

    /**
     * the column name for the QtdtAcSalePgm field
     */
    public const COL_QTDTACSALEPGM = 'quote_detail.QtdtAcSalePgm';

    /**
     * the column name for the QtdtNsVendShipfr field
     */
    public const COL_QTDTNSVENDSHIPFR = 'quote_detail.QtdtNsVendShipfr';

    /**
     * the column name for the QtdtPrntMnfrNote field
     */
    public const COL_QTDTPRNTMNFRNOTE = 'quote_detail.QtdtPrntMnfrNote';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'quote_detail.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'quote_detail.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'quote_detail.dummy';

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
        self::TYPE_PHPNAME       => ['Qthdid', 'Qtdtline', 'Inititemnbr', 'Qtdtdesc', 'Qtdtdesc2', 'Qtdtcustcrssref', 'Intbwhse', 'Qtdtrqstdate', 'Qtdtspecordr', 'Artbctaxcode', 'Qtdtqtyord', 'Qtdtpric', 'Qtdtcost', 'Qtdttaxpcttot', 'Qtdtprictot', 'Qtdtcosttot', 'Qtdtwghttot', 'Qtdtmstrtaxcode1', 'Qtdtmstrtaxpct1', 'Qtdtmstrtaxcode2', 'Qtdtmstrtaxpct2', 'Qtdtmstrtaxcode3', 'Qtdtmstrtaxpct3', 'Qtdtmstrtaxcode4', 'Qtdtmstrtaxpct4', 'Qtdtmstrtaxcode5', 'Qtdtmstrtaxpct5', 'Qtdtmstrtaxcode6', 'Qtdtmstrtaxpct6', 'Qtdtmstrtaxcode7', 'Qtdtmstrtaxpct7', 'Qtdtmstrtaxcode8', 'Qtdtmstrtaxpct8', 'Qtdtmstrtaxcode9', 'Qtdtmstrtaxpct9', 'Intbuomsale', 'Intbuompur', 'Qtdtquotind1', 'Qtdtquotunit1', 'Qtdtquotpric1', 'Qtdtquotcost1', 'Qtdtquotmkupmarg1', 'Qtdtquotind2', 'Qtdtquotunit2', 'Qtdtquotpric2', 'Qtdtquotcost2', 'Qtdtquotmkupmarg2', 'Qtdtquotind3', 'Qtdtquotunit3', 'Qtdtquotpric3', 'Qtdtquotcost3', 'Qtdtquotmkupmarg3', 'Qtdtquotind4', 'Qtdtquotunit4', 'Qtdtquotpric4', 'Qtdtquotcost4', 'Qtdtquotmkupmarg4', 'Qtdtquotind5', 'Qtdtquotunit5', 'Qtdtquotpric5', 'Qtdtquotcost5', 'Qtdtquotmkupmarg5', 'Qtdtquotind6', 'Qtdtquotunit6', 'Qtdtquotpric6', 'Qtdtquotcost6', 'Qtdtquotmkupmarg6', 'Qtdtasstcode', 'Qtdtasstqty', 'Qtdtlistpric', 'Qtdtstancost', 'Qtdtvenditemjob', 'Apvevendid', 'Qtdtnsitemgrup', 'Qtdtusecode', 'Qtdtpickflag', 'Qtdtstatus', 'Oetblsslcode', 'Qtdtlostdate', 'Qtdtlostposted', 'Qtdtleaddays', 'Qtdtordrdiscpct', 'Qtdtquotdiscpct1', 'Qtdtmtrcreqd', 'Qtdtcofcreqd', 'Qtdtmnfrid', 'Qtdtmnfritemid', 'Qtdtlmordrnbr', 'Qtdtlmordrdate', 'Qtdtspecitemcode', 'Qtdtacsalepgm', 'Qtdtnsvendshipfr', 'Qtdtprntmnfrnote', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['qthdid', 'qtdtline', 'inititemnbr', 'qtdtdesc', 'qtdtdesc2', 'qtdtcustcrssref', 'intbwhse', 'qtdtrqstdate', 'qtdtspecordr', 'artbctaxcode', 'qtdtqtyord', 'qtdtpric', 'qtdtcost', 'qtdttaxpcttot', 'qtdtprictot', 'qtdtcosttot', 'qtdtwghttot', 'qtdtmstrtaxcode1', 'qtdtmstrtaxpct1', 'qtdtmstrtaxcode2', 'qtdtmstrtaxpct2', 'qtdtmstrtaxcode3', 'qtdtmstrtaxpct3', 'qtdtmstrtaxcode4', 'qtdtmstrtaxpct4', 'qtdtmstrtaxcode5', 'qtdtmstrtaxpct5', 'qtdtmstrtaxcode6', 'qtdtmstrtaxpct6', 'qtdtmstrtaxcode7', 'qtdtmstrtaxpct7', 'qtdtmstrtaxcode8', 'qtdtmstrtaxpct8', 'qtdtmstrtaxcode9', 'qtdtmstrtaxpct9', 'intbuomsale', 'intbuompur', 'qtdtquotind1', 'qtdtquotunit1', 'qtdtquotpric1', 'qtdtquotcost1', 'qtdtquotmkupmarg1', 'qtdtquotind2', 'qtdtquotunit2', 'qtdtquotpric2', 'qtdtquotcost2', 'qtdtquotmkupmarg2', 'qtdtquotind3', 'qtdtquotunit3', 'qtdtquotpric3', 'qtdtquotcost3', 'qtdtquotmkupmarg3', 'qtdtquotind4', 'qtdtquotunit4', 'qtdtquotpric4', 'qtdtquotcost4', 'qtdtquotmkupmarg4', 'qtdtquotind5', 'qtdtquotunit5', 'qtdtquotpric5', 'qtdtquotcost5', 'qtdtquotmkupmarg5', 'qtdtquotind6', 'qtdtquotunit6', 'qtdtquotpric6', 'qtdtquotcost6', 'qtdtquotmkupmarg6', 'qtdtasstcode', 'qtdtasstqty', 'qtdtlistpric', 'qtdtstancost', 'qtdtvenditemjob', 'apvevendid', 'qtdtnsitemgrup', 'qtdtusecode', 'qtdtpickflag', 'qtdtstatus', 'oetblsslcode', 'qtdtlostdate', 'qtdtlostposted', 'qtdtleaddays', 'qtdtordrdiscpct', 'qtdtquotdiscpct1', 'qtdtmtrcreqd', 'qtdtcofcreqd', 'qtdtmnfrid', 'qtdtmnfritemid', 'qtdtlmordrnbr', 'qtdtlmordrdate', 'qtdtspecitemcode', 'qtdtacsalepgm', 'qtdtnsvendshipfr', 'qtdtprntmnfrnote', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [QuoteDetailTableMap::COL_QTHDID, QuoteDetailTableMap::COL_QTDTLINE, QuoteDetailTableMap::COL_INITITEMNBR, QuoteDetailTableMap::COL_QTDTDESC, QuoteDetailTableMap::COL_QTDTDESC2, QuoteDetailTableMap::COL_QTDTCUSTCRSSREF, QuoteDetailTableMap::COL_INTBWHSE, QuoteDetailTableMap::COL_QTDTRQSTDATE, QuoteDetailTableMap::COL_QTDTSPECORDR, QuoteDetailTableMap::COL_ARTBCTAXCODE, QuoteDetailTableMap::COL_QTDTQTYORD, QuoteDetailTableMap::COL_QTDTPRIC, QuoteDetailTableMap::COL_QTDTCOST, QuoteDetailTableMap::COL_QTDTTAXPCTTOT, QuoteDetailTableMap::COL_QTDTPRICTOT, QuoteDetailTableMap::COL_QTDTCOSTTOT, QuoteDetailTableMap::COL_QTDTWGHTTOT, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9, QuoteDetailTableMap::COL_INTBUOMSALE, QuoteDetailTableMap::COL_INTBUOMPUR, QuoteDetailTableMap::COL_QTDTQUOTIND1, QuoteDetailTableMap::COL_QTDTQUOTUNIT1, QuoteDetailTableMap::COL_QTDTQUOTPRIC1, QuoteDetailTableMap::COL_QTDTQUOTCOST1, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1, QuoteDetailTableMap::COL_QTDTQUOTIND2, QuoteDetailTableMap::COL_QTDTQUOTUNIT2, QuoteDetailTableMap::COL_QTDTQUOTPRIC2, QuoteDetailTableMap::COL_QTDTQUOTCOST2, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2, QuoteDetailTableMap::COL_QTDTQUOTIND3, QuoteDetailTableMap::COL_QTDTQUOTUNIT3, QuoteDetailTableMap::COL_QTDTQUOTPRIC3, QuoteDetailTableMap::COL_QTDTQUOTCOST3, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3, QuoteDetailTableMap::COL_QTDTQUOTIND4, QuoteDetailTableMap::COL_QTDTQUOTUNIT4, QuoteDetailTableMap::COL_QTDTQUOTPRIC4, QuoteDetailTableMap::COL_QTDTQUOTCOST4, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4, QuoteDetailTableMap::COL_QTDTQUOTIND5, QuoteDetailTableMap::COL_QTDTQUOTUNIT5, QuoteDetailTableMap::COL_QTDTQUOTPRIC5, QuoteDetailTableMap::COL_QTDTQUOTCOST5, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5, QuoteDetailTableMap::COL_QTDTQUOTIND6, QuoteDetailTableMap::COL_QTDTQUOTUNIT6, QuoteDetailTableMap::COL_QTDTQUOTPRIC6, QuoteDetailTableMap::COL_QTDTQUOTCOST6, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6, QuoteDetailTableMap::COL_QTDTASSTCODE, QuoteDetailTableMap::COL_QTDTASSTQTY, QuoteDetailTableMap::COL_QTDTLISTPRIC, QuoteDetailTableMap::COL_QTDTSTANCOST, QuoteDetailTableMap::COL_QTDTVENDITEMJOB, QuoteDetailTableMap::COL_APVEVENDID, QuoteDetailTableMap::COL_QTDTNSITEMGRUP, QuoteDetailTableMap::COL_QTDTUSECODE, QuoteDetailTableMap::COL_QTDTPICKFLAG, QuoteDetailTableMap::COL_QTDTSTATUS, QuoteDetailTableMap::COL_OETBLSSLCODE, QuoteDetailTableMap::COL_QTDTLOSTDATE, QuoteDetailTableMap::COL_QTDTLOSTPOSTED, QuoteDetailTableMap::COL_QTDTLEADDAYS, QuoteDetailTableMap::COL_QTDTORDRDISCPCT, QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1, QuoteDetailTableMap::COL_QTDTMTRCREQD, QuoteDetailTableMap::COL_QTDTCOFCREQD, QuoteDetailTableMap::COL_QTDTMNFRID, QuoteDetailTableMap::COL_QTDTMNFRITEMID, QuoteDetailTableMap::COL_QTDTLMORDRNBR, QuoteDetailTableMap::COL_QTDTLMORDRDATE, QuoteDetailTableMap::COL_QTDTSPECITEMCODE, QuoteDetailTableMap::COL_QTDTACSALEPGM, QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR, QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE, QuoteDetailTableMap::COL_DATEUPDTD, QuoteDetailTableMap::COL_TIMEUPDTD, QuoteDetailTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['QthdId', 'QtdtLine', 'InitItemNbr', 'QtdtDesc', 'QtdtDesc2', 'QtdtCustCrssRef', 'IntbWhse', 'QtdtRqstDate', 'QtdtSpecOrdr', 'ArtbCtaxCode', 'QtdtQtyOrd', 'QtdtPric', 'QtdtCost', 'QtdtTaxPctTot', 'QtdtPricTot', 'QtdtCostTot', 'QtdtWghtTot', 'QtdtMstrTaxCode1', 'QtdtMstrTaxPct1', 'QtdtMstrTaxCode2', 'QtdtMstrTaxPct2', 'QtdtMstrTaxCode3', 'QtdtMstrTaxPct3', 'QtdtMstrTaxCode4', 'QtdtMstrTaxPct4', 'QtdtMstrTaxCode5', 'QtdtMstrTaxPct5', 'QtdtMstrTaxCode6', 'QtdtMstrTaxPct6', 'QtdtMstrTaxCode7', 'QtdtMstrTaxPct7', 'QtdtMstrTaxCode8', 'QtdtMstrTaxPct8', 'QtdtMstrTaxCode9', 'QtdtMstrTaxPct9', 'IntbUomSale', 'IntbUomPur', 'QtdtQuotInd1', 'QtdtQuotUnit1', 'QtdtQuotPric1', 'QtdtQuotCost1', 'QtdtQuotMkupMarg1', 'QtdtQuotInd2', 'QtdtQuotUnit2', 'QtdtQuotPric2', 'QtdtQuotCost2', 'QtdtQuotMkupMarg2', 'QtdtQuotInd3', 'QtdtQuotUnit3', 'QtdtQuotPric3', 'QtdtQuotCost3', 'QtdtQuotMkupMarg3', 'QtdtQuotInd4', 'QtdtQuotUnit4', 'QtdtQuotPric4', 'QtdtQuotCost4', 'QtdtQuotMkupMarg4', 'QtdtQuotInd5', 'QtdtQuotUnit5', 'QtdtQuotPric5', 'QtdtQuotCost5', 'QtdtQuotMkupMarg5', 'QtdtQuotInd6', 'QtdtQuotUnit6', 'QtdtQuotPric6', 'QtdtQuotCost6', 'QtdtQuotMkupMarg6', 'QtdtAsstCode', 'QtdtAsstQty', 'QtdtListPric', 'QtdtStanCost', 'QtdtVendItemJob', 'ApveVendId', 'QtdtNsItemGrup', 'QtdtUseCode', 'QtdtPickFlag', 'QtdtStatus', 'OetbLsslCode', 'QtdtLostDate', 'QtdtLostPosted', 'QtdtLeadDays', 'QtdtOrdrDiscPct', 'QtdtQuotDiscPct1', 'QtdtMtrcReqd', 'QtdtCofcReqd', 'QtdtMnfrId', 'QtdtMnfrItemId', 'QtdtLmOrdrNbr', 'QtdtLmOrdrDate', 'QtdtSpecItemCode', 'QtdtAcSalePgm', 'QtdtNsVendShipfr', 'QtdtPrntMnfrNote', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, ]
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
        self::TYPE_PHPNAME       => ['Qthdid' => 0, 'Qtdtline' => 1, 'Inititemnbr' => 2, 'Qtdtdesc' => 3, 'Qtdtdesc2' => 4, 'Qtdtcustcrssref' => 5, 'Intbwhse' => 6, 'Qtdtrqstdate' => 7, 'Qtdtspecordr' => 8, 'Artbctaxcode' => 9, 'Qtdtqtyord' => 10, 'Qtdtpric' => 11, 'Qtdtcost' => 12, 'Qtdttaxpcttot' => 13, 'Qtdtprictot' => 14, 'Qtdtcosttot' => 15, 'Qtdtwghttot' => 16, 'Qtdtmstrtaxcode1' => 17, 'Qtdtmstrtaxpct1' => 18, 'Qtdtmstrtaxcode2' => 19, 'Qtdtmstrtaxpct2' => 20, 'Qtdtmstrtaxcode3' => 21, 'Qtdtmstrtaxpct3' => 22, 'Qtdtmstrtaxcode4' => 23, 'Qtdtmstrtaxpct4' => 24, 'Qtdtmstrtaxcode5' => 25, 'Qtdtmstrtaxpct5' => 26, 'Qtdtmstrtaxcode6' => 27, 'Qtdtmstrtaxpct6' => 28, 'Qtdtmstrtaxcode7' => 29, 'Qtdtmstrtaxpct7' => 30, 'Qtdtmstrtaxcode8' => 31, 'Qtdtmstrtaxpct8' => 32, 'Qtdtmstrtaxcode9' => 33, 'Qtdtmstrtaxpct9' => 34, 'Intbuomsale' => 35, 'Intbuompur' => 36, 'Qtdtquotind1' => 37, 'Qtdtquotunit1' => 38, 'Qtdtquotpric1' => 39, 'Qtdtquotcost1' => 40, 'Qtdtquotmkupmarg1' => 41, 'Qtdtquotind2' => 42, 'Qtdtquotunit2' => 43, 'Qtdtquotpric2' => 44, 'Qtdtquotcost2' => 45, 'Qtdtquotmkupmarg2' => 46, 'Qtdtquotind3' => 47, 'Qtdtquotunit3' => 48, 'Qtdtquotpric3' => 49, 'Qtdtquotcost3' => 50, 'Qtdtquotmkupmarg3' => 51, 'Qtdtquotind4' => 52, 'Qtdtquotunit4' => 53, 'Qtdtquotpric4' => 54, 'Qtdtquotcost4' => 55, 'Qtdtquotmkupmarg4' => 56, 'Qtdtquotind5' => 57, 'Qtdtquotunit5' => 58, 'Qtdtquotpric5' => 59, 'Qtdtquotcost5' => 60, 'Qtdtquotmkupmarg5' => 61, 'Qtdtquotind6' => 62, 'Qtdtquotunit6' => 63, 'Qtdtquotpric6' => 64, 'Qtdtquotcost6' => 65, 'Qtdtquotmkupmarg6' => 66, 'Qtdtasstcode' => 67, 'Qtdtasstqty' => 68, 'Qtdtlistpric' => 69, 'Qtdtstancost' => 70, 'Qtdtvenditemjob' => 71, 'Apvevendid' => 72, 'Qtdtnsitemgrup' => 73, 'Qtdtusecode' => 74, 'Qtdtpickflag' => 75, 'Qtdtstatus' => 76, 'Oetblsslcode' => 77, 'Qtdtlostdate' => 78, 'Qtdtlostposted' => 79, 'Qtdtleaddays' => 80, 'Qtdtordrdiscpct' => 81, 'Qtdtquotdiscpct1' => 82, 'Qtdtmtrcreqd' => 83, 'Qtdtcofcreqd' => 84, 'Qtdtmnfrid' => 85, 'Qtdtmnfritemid' => 86, 'Qtdtlmordrnbr' => 87, 'Qtdtlmordrdate' => 88, 'Qtdtspecitemcode' => 89, 'Qtdtacsalepgm' => 90, 'Qtdtnsvendshipfr' => 91, 'Qtdtprntmnfrnote' => 92, 'Dateupdtd' => 93, 'Timeupdtd' => 94, 'Dummy' => 95, ],
        self::TYPE_CAMELNAME     => ['qthdid' => 0, 'qtdtline' => 1, 'inititemnbr' => 2, 'qtdtdesc' => 3, 'qtdtdesc2' => 4, 'qtdtcustcrssref' => 5, 'intbwhse' => 6, 'qtdtrqstdate' => 7, 'qtdtspecordr' => 8, 'artbctaxcode' => 9, 'qtdtqtyord' => 10, 'qtdtpric' => 11, 'qtdtcost' => 12, 'qtdttaxpcttot' => 13, 'qtdtprictot' => 14, 'qtdtcosttot' => 15, 'qtdtwghttot' => 16, 'qtdtmstrtaxcode1' => 17, 'qtdtmstrtaxpct1' => 18, 'qtdtmstrtaxcode2' => 19, 'qtdtmstrtaxpct2' => 20, 'qtdtmstrtaxcode3' => 21, 'qtdtmstrtaxpct3' => 22, 'qtdtmstrtaxcode4' => 23, 'qtdtmstrtaxpct4' => 24, 'qtdtmstrtaxcode5' => 25, 'qtdtmstrtaxpct5' => 26, 'qtdtmstrtaxcode6' => 27, 'qtdtmstrtaxpct6' => 28, 'qtdtmstrtaxcode7' => 29, 'qtdtmstrtaxpct7' => 30, 'qtdtmstrtaxcode8' => 31, 'qtdtmstrtaxpct8' => 32, 'qtdtmstrtaxcode9' => 33, 'qtdtmstrtaxpct9' => 34, 'intbuomsale' => 35, 'intbuompur' => 36, 'qtdtquotind1' => 37, 'qtdtquotunit1' => 38, 'qtdtquotpric1' => 39, 'qtdtquotcost1' => 40, 'qtdtquotmkupmarg1' => 41, 'qtdtquotind2' => 42, 'qtdtquotunit2' => 43, 'qtdtquotpric2' => 44, 'qtdtquotcost2' => 45, 'qtdtquotmkupmarg2' => 46, 'qtdtquotind3' => 47, 'qtdtquotunit3' => 48, 'qtdtquotpric3' => 49, 'qtdtquotcost3' => 50, 'qtdtquotmkupmarg3' => 51, 'qtdtquotind4' => 52, 'qtdtquotunit4' => 53, 'qtdtquotpric4' => 54, 'qtdtquotcost4' => 55, 'qtdtquotmkupmarg4' => 56, 'qtdtquotind5' => 57, 'qtdtquotunit5' => 58, 'qtdtquotpric5' => 59, 'qtdtquotcost5' => 60, 'qtdtquotmkupmarg5' => 61, 'qtdtquotind6' => 62, 'qtdtquotunit6' => 63, 'qtdtquotpric6' => 64, 'qtdtquotcost6' => 65, 'qtdtquotmkupmarg6' => 66, 'qtdtasstcode' => 67, 'qtdtasstqty' => 68, 'qtdtlistpric' => 69, 'qtdtstancost' => 70, 'qtdtvenditemjob' => 71, 'apvevendid' => 72, 'qtdtnsitemgrup' => 73, 'qtdtusecode' => 74, 'qtdtpickflag' => 75, 'qtdtstatus' => 76, 'oetblsslcode' => 77, 'qtdtlostdate' => 78, 'qtdtlostposted' => 79, 'qtdtleaddays' => 80, 'qtdtordrdiscpct' => 81, 'qtdtquotdiscpct1' => 82, 'qtdtmtrcreqd' => 83, 'qtdtcofcreqd' => 84, 'qtdtmnfrid' => 85, 'qtdtmnfritemid' => 86, 'qtdtlmordrnbr' => 87, 'qtdtlmordrdate' => 88, 'qtdtspecitemcode' => 89, 'qtdtacsalepgm' => 90, 'qtdtnsvendshipfr' => 91, 'qtdtprntmnfrnote' => 92, 'dateupdtd' => 93, 'timeupdtd' => 94, 'dummy' => 95, ],
        self::TYPE_COLNAME       => [QuoteDetailTableMap::COL_QTHDID => 0, QuoteDetailTableMap::COL_QTDTLINE => 1, QuoteDetailTableMap::COL_INITITEMNBR => 2, QuoteDetailTableMap::COL_QTDTDESC => 3, QuoteDetailTableMap::COL_QTDTDESC2 => 4, QuoteDetailTableMap::COL_QTDTCUSTCRSSREF => 5, QuoteDetailTableMap::COL_INTBWHSE => 6, QuoteDetailTableMap::COL_QTDTRQSTDATE => 7, QuoteDetailTableMap::COL_QTDTSPECORDR => 8, QuoteDetailTableMap::COL_ARTBCTAXCODE => 9, QuoteDetailTableMap::COL_QTDTQTYORD => 10, QuoteDetailTableMap::COL_QTDTPRIC => 11, QuoteDetailTableMap::COL_QTDTCOST => 12, QuoteDetailTableMap::COL_QTDTTAXPCTTOT => 13, QuoteDetailTableMap::COL_QTDTPRICTOT => 14, QuoteDetailTableMap::COL_QTDTCOSTTOT => 15, QuoteDetailTableMap::COL_QTDTWGHTTOT => 16, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1 => 17, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1 => 18, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2 => 19, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2 => 20, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3 => 21, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3 => 22, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4 => 23, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4 => 24, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5 => 25, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5 => 26, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6 => 27, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6 => 28, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7 => 29, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7 => 30, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8 => 31, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8 => 32, QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9 => 33, QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9 => 34, QuoteDetailTableMap::COL_INTBUOMSALE => 35, QuoteDetailTableMap::COL_INTBUOMPUR => 36, QuoteDetailTableMap::COL_QTDTQUOTIND1 => 37, QuoteDetailTableMap::COL_QTDTQUOTUNIT1 => 38, QuoteDetailTableMap::COL_QTDTQUOTPRIC1 => 39, QuoteDetailTableMap::COL_QTDTQUOTCOST1 => 40, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1 => 41, QuoteDetailTableMap::COL_QTDTQUOTIND2 => 42, QuoteDetailTableMap::COL_QTDTQUOTUNIT2 => 43, QuoteDetailTableMap::COL_QTDTQUOTPRIC2 => 44, QuoteDetailTableMap::COL_QTDTQUOTCOST2 => 45, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2 => 46, QuoteDetailTableMap::COL_QTDTQUOTIND3 => 47, QuoteDetailTableMap::COL_QTDTQUOTUNIT3 => 48, QuoteDetailTableMap::COL_QTDTQUOTPRIC3 => 49, QuoteDetailTableMap::COL_QTDTQUOTCOST3 => 50, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3 => 51, QuoteDetailTableMap::COL_QTDTQUOTIND4 => 52, QuoteDetailTableMap::COL_QTDTQUOTUNIT4 => 53, QuoteDetailTableMap::COL_QTDTQUOTPRIC4 => 54, QuoteDetailTableMap::COL_QTDTQUOTCOST4 => 55, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4 => 56, QuoteDetailTableMap::COL_QTDTQUOTIND5 => 57, QuoteDetailTableMap::COL_QTDTQUOTUNIT5 => 58, QuoteDetailTableMap::COL_QTDTQUOTPRIC5 => 59, QuoteDetailTableMap::COL_QTDTQUOTCOST5 => 60, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5 => 61, QuoteDetailTableMap::COL_QTDTQUOTIND6 => 62, QuoteDetailTableMap::COL_QTDTQUOTUNIT6 => 63, QuoteDetailTableMap::COL_QTDTQUOTPRIC6 => 64, QuoteDetailTableMap::COL_QTDTQUOTCOST6 => 65, QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6 => 66, QuoteDetailTableMap::COL_QTDTASSTCODE => 67, QuoteDetailTableMap::COL_QTDTASSTQTY => 68, QuoteDetailTableMap::COL_QTDTLISTPRIC => 69, QuoteDetailTableMap::COL_QTDTSTANCOST => 70, QuoteDetailTableMap::COL_QTDTVENDITEMJOB => 71, QuoteDetailTableMap::COL_APVEVENDID => 72, QuoteDetailTableMap::COL_QTDTNSITEMGRUP => 73, QuoteDetailTableMap::COL_QTDTUSECODE => 74, QuoteDetailTableMap::COL_QTDTPICKFLAG => 75, QuoteDetailTableMap::COL_QTDTSTATUS => 76, QuoteDetailTableMap::COL_OETBLSSLCODE => 77, QuoteDetailTableMap::COL_QTDTLOSTDATE => 78, QuoteDetailTableMap::COL_QTDTLOSTPOSTED => 79, QuoteDetailTableMap::COL_QTDTLEADDAYS => 80, QuoteDetailTableMap::COL_QTDTORDRDISCPCT => 81, QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1 => 82, QuoteDetailTableMap::COL_QTDTMTRCREQD => 83, QuoteDetailTableMap::COL_QTDTCOFCREQD => 84, QuoteDetailTableMap::COL_QTDTMNFRID => 85, QuoteDetailTableMap::COL_QTDTMNFRITEMID => 86, QuoteDetailTableMap::COL_QTDTLMORDRNBR => 87, QuoteDetailTableMap::COL_QTDTLMORDRDATE => 88, QuoteDetailTableMap::COL_QTDTSPECITEMCODE => 89, QuoteDetailTableMap::COL_QTDTACSALEPGM => 90, QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR => 91, QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE => 92, QuoteDetailTableMap::COL_DATEUPDTD => 93, QuoteDetailTableMap::COL_TIMEUPDTD => 94, QuoteDetailTableMap::COL_DUMMY => 95, ],
        self::TYPE_FIELDNAME     => ['QthdId' => 0, 'QtdtLine' => 1, 'InitItemNbr' => 2, 'QtdtDesc' => 3, 'QtdtDesc2' => 4, 'QtdtCustCrssRef' => 5, 'IntbWhse' => 6, 'QtdtRqstDate' => 7, 'QtdtSpecOrdr' => 8, 'ArtbCtaxCode' => 9, 'QtdtQtyOrd' => 10, 'QtdtPric' => 11, 'QtdtCost' => 12, 'QtdtTaxPctTot' => 13, 'QtdtPricTot' => 14, 'QtdtCostTot' => 15, 'QtdtWghtTot' => 16, 'QtdtMstrTaxCode1' => 17, 'QtdtMstrTaxPct1' => 18, 'QtdtMstrTaxCode2' => 19, 'QtdtMstrTaxPct2' => 20, 'QtdtMstrTaxCode3' => 21, 'QtdtMstrTaxPct3' => 22, 'QtdtMstrTaxCode4' => 23, 'QtdtMstrTaxPct4' => 24, 'QtdtMstrTaxCode5' => 25, 'QtdtMstrTaxPct5' => 26, 'QtdtMstrTaxCode6' => 27, 'QtdtMstrTaxPct6' => 28, 'QtdtMstrTaxCode7' => 29, 'QtdtMstrTaxPct7' => 30, 'QtdtMstrTaxCode8' => 31, 'QtdtMstrTaxPct8' => 32, 'QtdtMstrTaxCode9' => 33, 'QtdtMstrTaxPct9' => 34, 'IntbUomSale' => 35, 'IntbUomPur' => 36, 'QtdtQuotInd1' => 37, 'QtdtQuotUnit1' => 38, 'QtdtQuotPric1' => 39, 'QtdtQuotCost1' => 40, 'QtdtQuotMkupMarg1' => 41, 'QtdtQuotInd2' => 42, 'QtdtQuotUnit2' => 43, 'QtdtQuotPric2' => 44, 'QtdtQuotCost2' => 45, 'QtdtQuotMkupMarg2' => 46, 'QtdtQuotInd3' => 47, 'QtdtQuotUnit3' => 48, 'QtdtQuotPric3' => 49, 'QtdtQuotCost3' => 50, 'QtdtQuotMkupMarg3' => 51, 'QtdtQuotInd4' => 52, 'QtdtQuotUnit4' => 53, 'QtdtQuotPric4' => 54, 'QtdtQuotCost4' => 55, 'QtdtQuotMkupMarg4' => 56, 'QtdtQuotInd5' => 57, 'QtdtQuotUnit5' => 58, 'QtdtQuotPric5' => 59, 'QtdtQuotCost5' => 60, 'QtdtQuotMkupMarg5' => 61, 'QtdtQuotInd6' => 62, 'QtdtQuotUnit6' => 63, 'QtdtQuotPric6' => 64, 'QtdtQuotCost6' => 65, 'QtdtQuotMkupMarg6' => 66, 'QtdtAsstCode' => 67, 'QtdtAsstQty' => 68, 'QtdtListPric' => 69, 'QtdtStanCost' => 70, 'QtdtVendItemJob' => 71, 'ApveVendId' => 72, 'QtdtNsItemGrup' => 73, 'QtdtUseCode' => 74, 'QtdtPickFlag' => 75, 'QtdtStatus' => 76, 'OetbLsslCode' => 77, 'QtdtLostDate' => 78, 'QtdtLostPosted' => 79, 'QtdtLeadDays' => 80, 'QtdtOrdrDiscPct' => 81, 'QtdtQuotDiscPct1' => 82, 'QtdtMtrcReqd' => 83, 'QtdtCofcReqd' => 84, 'QtdtMnfrId' => 85, 'QtdtMnfrItemId' => 86, 'QtdtLmOrdrNbr' => 87, 'QtdtLmOrdrDate' => 88, 'QtdtSpecItemCode' => 89, 'QtdtAcSalePgm' => 90, 'QtdtNsVendShipfr' => 91, 'QtdtPrntMnfrNote' => 92, 'DateUpdtd' => 93, 'TimeUpdtd' => 94, 'dummy' => 95, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Qthdid' => 'QTHDID',
        'QuoteDetail.Qthdid' => 'QTHDID',
        'qthdid' => 'QTHDID',
        'quoteDetail.qthdid' => 'QTHDID',
        'QuoteDetailTableMap::COL_QTHDID' => 'QTHDID',
        'COL_QTHDID' => 'QTHDID',
        'QthdId' => 'QTHDID',
        'quote_detail.QthdId' => 'QTHDID',
        'Qtdtline' => 'QTDTLINE',
        'QuoteDetail.Qtdtline' => 'QTDTLINE',
        'qtdtline' => 'QTDTLINE',
        'quoteDetail.qtdtline' => 'QTDTLINE',
        'QuoteDetailTableMap::COL_QTDTLINE' => 'QTDTLINE',
        'COL_QTDTLINE' => 'QTDTLINE',
        'QtdtLine' => 'QTDTLINE',
        'quote_detail.QtdtLine' => 'QTDTLINE',
        'Inititemnbr' => 'INITITEMNBR',
        'QuoteDetail.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'quoteDetail.inititemnbr' => 'INITITEMNBR',
        'QuoteDetailTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'quote_detail.InitItemNbr' => 'INITITEMNBR',
        'Qtdtdesc' => 'QTDTDESC',
        'QuoteDetail.Qtdtdesc' => 'QTDTDESC',
        'qtdtdesc' => 'QTDTDESC',
        'quoteDetail.qtdtdesc' => 'QTDTDESC',
        'QuoteDetailTableMap::COL_QTDTDESC' => 'QTDTDESC',
        'COL_QTDTDESC' => 'QTDTDESC',
        'QtdtDesc' => 'QTDTDESC',
        'quote_detail.QtdtDesc' => 'QTDTDESC',
        'Qtdtdesc2' => 'QTDTDESC2',
        'QuoteDetail.Qtdtdesc2' => 'QTDTDESC2',
        'qtdtdesc2' => 'QTDTDESC2',
        'quoteDetail.qtdtdesc2' => 'QTDTDESC2',
        'QuoteDetailTableMap::COL_QTDTDESC2' => 'QTDTDESC2',
        'COL_QTDTDESC2' => 'QTDTDESC2',
        'QtdtDesc2' => 'QTDTDESC2',
        'quote_detail.QtdtDesc2' => 'QTDTDESC2',
        'Qtdtcustcrssref' => 'QTDTCUSTCRSSREF',
        'QuoteDetail.Qtdtcustcrssref' => 'QTDTCUSTCRSSREF',
        'qtdtcustcrssref' => 'QTDTCUSTCRSSREF',
        'quoteDetail.qtdtcustcrssref' => 'QTDTCUSTCRSSREF',
        'QuoteDetailTableMap::COL_QTDTCUSTCRSSREF' => 'QTDTCUSTCRSSREF',
        'COL_QTDTCUSTCRSSREF' => 'QTDTCUSTCRSSREF',
        'QtdtCustCrssRef' => 'QTDTCUSTCRSSREF',
        'quote_detail.QtdtCustCrssRef' => 'QTDTCUSTCRSSREF',
        'Intbwhse' => 'INTBWHSE',
        'QuoteDetail.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'quoteDetail.intbwhse' => 'INTBWHSE',
        'QuoteDetailTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'quote_detail.IntbWhse' => 'INTBWHSE',
        'Qtdtrqstdate' => 'QTDTRQSTDATE',
        'QuoteDetail.Qtdtrqstdate' => 'QTDTRQSTDATE',
        'qtdtrqstdate' => 'QTDTRQSTDATE',
        'quoteDetail.qtdtrqstdate' => 'QTDTRQSTDATE',
        'QuoteDetailTableMap::COL_QTDTRQSTDATE' => 'QTDTRQSTDATE',
        'COL_QTDTRQSTDATE' => 'QTDTRQSTDATE',
        'QtdtRqstDate' => 'QTDTRQSTDATE',
        'quote_detail.QtdtRqstDate' => 'QTDTRQSTDATE',
        'Qtdtspecordr' => 'QTDTSPECORDR',
        'QuoteDetail.Qtdtspecordr' => 'QTDTSPECORDR',
        'qtdtspecordr' => 'QTDTSPECORDR',
        'quoteDetail.qtdtspecordr' => 'QTDTSPECORDR',
        'QuoteDetailTableMap::COL_QTDTSPECORDR' => 'QTDTSPECORDR',
        'COL_QTDTSPECORDR' => 'QTDTSPECORDR',
        'QtdtSpecOrdr' => 'QTDTSPECORDR',
        'quote_detail.QtdtSpecOrdr' => 'QTDTSPECORDR',
        'Artbctaxcode' => 'ARTBCTAXCODE',
        'QuoteDetail.Artbctaxcode' => 'ARTBCTAXCODE',
        'artbctaxcode' => 'ARTBCTAXCODE',
        'quoteDetail.artbctaxcode' => 'ARTBCTAXCODE',
        'QuoteDetailTableMap::COL_ARTBCTAXCODE' => 'ARTBCTAXCODE',
        'COL_ARTBCTAXCODE' => 'ARTBCTAXCODE',
        'ArtbCtaxCode' => 'ARTBCTAXCODE',
        'quote_detail.ArtbCtaxCode' => 'ARTBCTAXCODE',
        'Qtdtqtyord' => 'QTDTQTYORD',
        'QuoteDetail.Qtdtqtyord' => 'QTDTQTYORD',
        'qtdtqtyord' => 'QTDTQTYORD',
        'quoteDetail.qtdtqtyord' => 'QTDTQTYORD',
        'QuoteDetailTableMap::COL_QTDTQTYORD' => 'QTDTQTYORD',
        'COL_QTDTQTYORD' => 'QTDTQTYORD',
        'QtdtQtyOrd' => 'QTDTQTYORD',
        'quote_detail.QtdtQtyOrd' => 'QTDTQTYORD',
        'Qtdtpric' => 'QTDTPRIC',
        'QuoteDetail.Qtdtpric' => 'QTDTPRIC',
        'qtdtpric' => 'QTDTPRIC',
        'quoteDetail.qtdtpric' => 'QTDTPRIC',
        'QuoteDetailTableMap::COL_QTDTPRIC' => 'QTDTPRIC',
        'COL_QTDTPRIC' => 'QTDTPRIC',
        'QtdtPric' => 'QTDTPRIC',
        'quote_detail.QtdtPric' => 'QTDTPRIC',
        'Qtdtcost' => 'QTDTCOST',
        'QuoteDetail.Qtdtcost' => 'QTDTCOST',
        'qtdtcost' => 'QTDTCOST',
        'quoteDetail.qtdtcost' => 'QTDTCOST',
        'QuoteDetailTableMap::COL_QTDTCOST' => 'QTDTCOST',
        'COL_QTDTCOST' => 'QTDTCOST',
        'QtdtCost' => 'QTDTCOST',
        'quote_detail.QtdtCost' => 'QTDTCOST',
        'Qtdttaxpcttot' => 'QTDTTAXPCTTOT',
        'QuoteDetail.Qtdttaxpcttot' => 'QTDTTAXPCTTOT',
        'qtdttaxpcttot' => 'QTDTTAXPCTTOT',
        'quoteDetail.qtdttaxpcttot' => 'QTDTTAXPCTTOT',
        'QuoteDetailTableMap::COL_QTDTTAXPCTTOT' => 'QTDTTAXPCTTOT',
        'COL_QTDTTAXPCTTOT' => 'QTDTTAXPCTTOT',
        'QtdtTaxPctTot' => 'QTDTTAXPCTTOT',
        'quote_detail.QtdtTaxPctTot' => 'QTDTTAXPCTTOT',
        'Qtdtprictot' => 'QTDTPRICTOT',
        'QuoteDetail.Qtdtprictot' => 'QTDTPRICTOT',
        'qtdtprictot' => 'QTDTPRICTOT',
        'quoteDetail.qtdtprictot' => 'QTDTPRICTOT',
        'QuoteDetailTableMap::COL_QTDTPRICTOT' => 'QTDTPRICTOT',
        'COL_QTDTPRICTOT' => 'QTDTPRICTOT',
        'QtdtPricTot' => 'QTDTPRICTOT',
        'quote_detail.QtdtPricTot' => 'QTDTPRICTOT',
        'Qtdtcosttot' => 'QTDTCOSTTOT',
        'QuoteDetail.Qtdtcosttot' => 'QTDTCOSTTOT',
        'qtdtcosttot' => 'QTDTCOSTTOT',
        'quoteDetail.qtdtcosttot' => 'QTDTCOSTTOT',
        'QuoteDetailTableMap::COL_QTDTCOSTTOT' => 'QTDTCOSTTOT',
        'COL_QTDTCOSTTOT' => 'QTDTCOSTTOT',
        'QtdtCostTot' => 'QTDTCOSTTOT',
        'quote_detail.QtdtCostTot' => 'QTDTCOSTTOT',
        'Qtdtwghttot' => 'QTDTWGHTTOT',
        'QuoteDetail.Qtdtwghttot' => 'QTDTWGHTTOT',
        'qtdtwghttot' => 'QTDTWGHTTOT',
        'quoteDetail.qtdtwghttot' => 'QTDTWGHTTOT',
        'QuoteDetailTableMap::COL_QTDTWGHTTOT' => 'QTDTWGHTTOT',
        'COL_QTDTWGHTTOT' => 'QTDTWGHTTOT',
        'QtdtWghtTot' => 'QTDTWGHTTOT',
        'quote_detail.QtdtWghtTot' => 'QTDTWGHTTOT',
        'Qtdtmstrtaxcode1' => 'QTDTMSTRTAXCODE1',
        'QuoteDetail.Qtdtmstrtaxcode1' => 'QTDTMSTRTAXCODE1',
        'qtdtmstrtaxcode1' => 'QTDTMSTRTAXCODE1',
        'quoteDetail.qtdtmstrtaxcode1' => 'QTDTMSTRTAXCODE1',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1' => 'QTDTMSTRTAXCODE1',
        'COL_QTDTMSTRTAXCODE1' => 'QTDTMSTRTAXCODE1',
        'QtdtMstrTaxCode1' => 'QTDTMSTRTAXCODE1',
        'quote_detail.QtdtMstrTaxCode1' => 'QTDTMSTRTAXCODE1',
        'Qtdtmstrtaxpct1' => 'QTDTMSTRTAXPCT1',
        'QuoteDetail.Qtdtmstrtaxpct1' => 'QTDTMSTRTAXPCT1',
        'qtdtmstrtaxpct1' => 'QTDTMSTRTAXPCT1',
        'quoteDetail.qtdtmstrtaxpct1' => 'QTDTMSTRTAXPCT1',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1' => 'QTDTMSTRTAXPCT1',
        'COL_QTDTMSTRTAXPCT1' => 'QTDTMSTRTAXPCT1',
        'QtdtMstrTaxPct1' => 'QTDTMSTRTAXPCT1',
        'quote_detail.QtdtMstrTaxPct1' => 'QTDTMSTRTAXPCT1',
        'Qtdtmstrtaxcode2' => 'QTDTMSTRTAXCODE2',
        'QuoteDetail.Qtdtmstrtaxcode2' => 'QTDTMSTRTAXCODE2',
        'qtdtmstrtaxcode2' => 'QTDTMSTRTAXCODE2',
        'quoteDetail.qtdtmstrtaxcode2' => 'QTDTMSTRTAXCODE2',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2' => 'QTDTMSTRTAXCODE2',
        'COL_QTDTMSTRTAXCODE2' => 'QTDTMSTRTAXCODE2',
        'QtdtMstrTaxCode2' => 'QTDTMSTRTAXCODE2',
        'quote_detail.QtdtMstrTaxCode2' => 'QTDTMSTRTAXCODE2',
        'Qtdtmstrtaxpct2' => 'QTDTMSTRTAXPCT2',
        'QuoteDetail.Qtdtmstrtaxpct2' => 'QTDTMSTRTAXPCT2',
        'qtdtmstrtaxpct2' => 'QTDTMSTRTAXPCT2',
        'quoteDetail.qtdtmstrtaxpct2' => 'QTDTMSTRTAXPCT2',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2' => 'QTDTMSTRTAXPCT2',
        'COL_QTDTMSTRTAXPCT2' => 'QTDTMSTRTAXPCT2',
        'QtdtMstrTaxPct2' => 'QTDTMSTRTAXPCT2',
        'quote_detail.QtdtMstrTaxPct2' => 'QTDTMSTRTAXPCT2',
        'Qtdtmstrtaxcode3' => 'QTDTMSTRTAXCODE3',
        'QuoteDetail.Qtdtmstrtaxcode3' => 'QTDTMSTRTAXCODE3',
        'qtdtmstrtaxcode3' => 'QTDTMSTRTAXCODE3',
        'quoteDetail.qtdtmstrtaxcode3' => 'QTDTMSTRTAXCODE3',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3' => 'QTDTMSTRTAXCODE3',
        'COL_QTDTMSTRTAXCODE3' => 'QTDTMSTRTAXCODE3',
        'QtdtMstrTaxCode3' => 'QTDTMSTRTAXCODE3',
        'quote_detail.QtdtMstrTaxCode3' => 'QTDTMSTRTAXCODE3',
        'Qtdtmstrtaxpct3' => 'QTDTMSTRTAXPCT3',
        'QuoteDetail.Qtdtmstrtaxpct3' => 'QTDTMSTRTAXPCT3',
        'qtdtmstrtaxpct3' => 'QTDTMSTRTAXPCT3',
        'quoteDetail.qtdtmstrtaxpct3' => 'QTDTMSTRTAXPCT3',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3' => 'QTDTMSTRTAXPCT3',
        'COL_QTDTMSTRTAXPCT3' => 'QTDTMSTRTAXPCT3',
        'QtdtMstrTaxPct3' => 'QTDTMSTRTAXPCT3',
        'quote_detail.QtdtMstrTaxPct3' => 'QTDTMSTRTAXPCT3',
        'Qtdtmstrtaxcode4' => 'QTDTMSTRTAXCODE4',
        'QuoteDetail.Qtdtmstrtaxcode4' => 'QTDTMSTRTAXCODE4',
        'qtdtmstrtaxcode4' => 'QTDTMSTRTAXCODE4',
        'quoteDetail.qtdtmstrtaxcode4' => 'QTDTMSTRTAXCODE4',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4' => 'QTDTMSTRTAXCODE4',
        'COL_QTDTMSTRTAXCODE4' => 'QTDTMSTRTAXCODE4',
        'QtdtMstrTaxCode4' => 'QTDTMSTRTAXCODE4',
        'quote_detail.QtdtMstrTaxCode4' => 'QTDTMSTRTAXCODE4',
        'Qtdtmstrtaxpct4' => 'QTDTMSTRTAXPCT4',
        'QuoteDetail.Qtdtmstrtaxpct4' => 'QTDTMSTRTAXPCT4',
        'qtdtmstrtaxpct4' => 'QTDTMSTRTAXPCT4',
        'quoteDetail.qtdtmstrtaxpct4' => 'QTDTMSTRTAXPCT4',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4' => 'QTDTMSTRTAXPCT4',
        'COL_QTDTMSTRTAXPCT4' => 'QTDTMSTRTAXPCT4',
        'QtdtMstrTaxPct4' => 'QTDTMSTRTAXPCT4',
        'quote_detail.QtdtMstrTaxPct4' => 'QTDTMSTRTAXPCT4',
        'Qtdtmstrtaxcode5' => 'QTDTMSTRTAXCODE5',
        'QuoteDetail.Qtdtmstrtaxcode5' => 'QTDTMSTRTAXCODE5',
        'qtdtmstrtaxcode5' => 'QTDTMSTRTAXCODE5',
        'quoteDetail.qtdtmstrtaxcode5' => 'QTDTMSTRTAXCODE5',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5' => 'QTDTMSTRTAXCODE5',
        'COL_QTDTMSTRTAXCODE5' => 'QTDTMSTRTAXCODE5',
        'QtdtMstrTaxCode5' => 'QTDTMSTRTAXCODE5',
        'quote_detail.QtdtMstrTaxCode5' => 'QTDTMSTRTAXCODE5',
        'Qtdtmstrtaxpct5' => 'QTDTMSTRTAXPCT5',
        'QuoteDetail.Qtdtmstrtaxpct5' => 'QTDTMSTRTAXPCT5',
        'qtdtmstrtaxpct5' => 'QTDTMSTRTAXPCT5',
        'quoteDetail.qtdtmstrtaxpct5' => 'QTDTMSTRTAXPCT5',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5' => 'QTDTMSTRTAXPCT5',
        'COL_QTDTMSTRTAXPCT5' => 'QTDTMSTRTAXPCT5',
        'QtdtMstrTaxPct5' => 'QTDTMSTRTAXPCT5',
        'quote_detail.QtdtMstrTaxPct5' => 'QTDTMSTRTAXPCT5',
        'Qtdtmstrtaxcode6' => 'QTDTMSTRTAXCODE6',
        'QuoteDetail.Qtdtmstrtaxcode6' => 'QTDTMSTRTAXCODE6',
        'qtdtmstrtaxcode6' => 'QTDTMSTRTAXCODE6',
        'quoteDetail.qtdtmstrtaxcode6' => 'QTDTMSTRTAXCODE6',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6' => 'QTDTMSTRTAXCODE6',
        'COL_QTDTMSTRTAXCODE6' => 'QTDTMSTRTAXCODE6',
        'QtdtMstrTaxCode6' => 'QTDTMSTRTAXCODE6',
        'quote_detail.QtdtMstrTaxCode6' => 'QTDTMSTRTAXCODE6',
        'Qtdtmstrtaxpct6' => 'QTDTMSTRTAXPCT6',
        'QuoteDetail.Qtdtmstrtaxpct6' => 'QTDTMSTRTAXPCT6',
        'qtdtmstrtaxpct6' => 'QTDTMSTRTAXPCT6',
        'quoteDetail.qtdtmstrtaxpct6' => 'QTDTMSTRTAXPCT6',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6' => 'QTDTMSTRTAXPCT6',
        'COL_QTDTMSTRTAXPCT6' => 'QTDTMSTRTAXPCT6',
        'QtdtMstrTaxPct6' => 'QTDTMSTRTAXPCT6',
        'quote_detail.QtdtMstrTaxPct6' => 'QTDTMSTRTAXPCT6',
        'Qtdtmstrtaxcode7' => 'QTDTMSTRTAXCODE7',
        'QuoteDetail.Qtdtmstrtaxcode7' => 'QTDTMSTRTAXCODE7',
        'qtdtmstrtaxcode7' => 'QTDTMSTRTAXCODE7',
        'quoteDetail.qtdtmstrtaxcode7' => 'QTDTMSTRTAXCODE7',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7' => 'QTDTMSTRTAXCODE7',
        'COL_QTDTMSTRTAXCODE7' => 'QTDTMSTRTAXCODE7',
        'QtdtMstrTaxCode7' => 'QTDTMSTRTAXCODE7',
        'quote_detail.QtdtMstrTaxCode7' => 'QTDTMSTRTAXCODE7',
        'Qtdtmstrtaxpct7' => 'QTDTMSTRTAXPCT7',
        'QuoteDetail.Qtdtmstrtaxpct7' => 'QTDTMSTRTAXPCT7',
        'qtdtmstrtaxpct7' => 'QTDTMSTRTAXPCT7',
        'quoteDetail.qtdtmstrtaxpct7' => 'QTDTMSTRTAXPCT7',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7' => 'QTDTMSTRTAXPCT7',
        'COL_QTDTMSTRTAXPCT7' => 'QTDTMSTRTAXPCT7',
        'QtdtMstrTaxPct7' => 'QTDTMSTRTAXPCT7',
        'quote_detail.QtdtMstrTaxPct7' => 'QTDTMSTRTAXPCT7',
        'Qtdtmstrtaxcode8' => 'QTDTMSTRTAXCODE8',
        'QuoteDetail.Qtdtmstrtaxcode8' => 'QTDTMSTRTAXCODE8',
        'qtdtmstrtaxcode8' => 'QTDTMSTRTAXCODE8',
        'quoteDetail.qtdtmstrtaxcode8' => 'QTDTMSTRTAXCODE8',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8' => 'QTDTMSTRTAXCODE8',
        'COL_QTDTMSTRTAXCODE8' => 'QTDTMSTRTAXCODE8',
        'QtdtMstrTaxCode8' => 'QTDTMSTRTAXCODE8',
        'quote_detail.QtdtMstrTaxCode8' => 'QTDTMSTRTAXCODE8',
        'Qtdtmstrtaxpct8' => 'QTDTMSTRTAXPCT8',
        'QuoteDetail.Qtdtmstrtaxpct8' => 'QTDTMSTRTAXPCT8',
        'qtdtmstrtaxpct8' => 'QTDTMSTRTAXPCT8',
        'quoteDetail.qtdtmstrtaxpct8' => 'QTDTMSTRTAXPCT8',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8' => 'QTDTMSTRTAXPCT8',
        'COL_QTDTMSTRTAXPCT8' => 'QTDTMSTRTAXPCT8',
        'QtdtMstrTaxPct8' => 'QTDTMSTRTAXPCT8',
        'quote_detail.QtdtMstrTaxPct8' => 'QTDTMSTRTAXPCT8',
        'Qtdtmstrtaxcode9' => 'QTDTMSTRTAXCODE9',
        'QuoteDetail.Qtdtmstrtaxcode9' => 'QTDTMSTRTAXCODE9',
        'qtdtmstrtaxcode9' => 'QTDTMSTRTAXCODE9',
        'quoteDetail.qtdtmstrtaxcode9' => 'QTDTMSTRTAXCODE9',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9' => 'QTDTMSTRTAXCODE9',
        'COL_QTDTMSTRTAXCODE9' => 'QTDTMSTRTAXCODE9',
        'QtdtMstrTaxCode9' => 'QTDTMSTRTAXCODE9',
        'quote_detail.QtdtMstrTaxCode9' => 'QTDTMSTRTAXCODE9',
        'Qtdtmstrtaxpct9' => 'QTDTMSTRTAXPCT9',
        'QuoteDetail.Qtdtmstrtaxpct9' => 'QTDTMSTRTAXPCT9',
        'qtdtmstrtaxpct9' => 'QTDTMSTRTAXPCT9',
        'quoteDetail.qtdtmstrtaxpct9' => 'QTDTMSTRTAXPCT9',
        'QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9' => 'QTDTMSTRTAXPCT9',
        'COL_QTDTMSTRTAXPCT9' => 'QTDTMSTRTAXPCT9',
        'QtdtMstrTaxPct9' => 'QTDTMSTRTAXPCT9',
        'quote_detail.QtdtMstrTaxPct9' => 'QTDTMSTRTAXPCT9',
        'Intbuomsale' => 'INTBUOMSALE',
        'QuoteDetail.Intbuomsale' => 'INTBUOMSALE',
        'intbuomsale' => 'INTBUOMSALE',
        'quoteDetail.intbuomsale' => 'INTBUOMSALE',
        'QuoteDetailTableMap::COL_INTBUOMSALE' => 'INTBUOMSALE',
        'COL_INTBUOMSALE' => 'INTBUOMSALE',
        'IntbUomSale' => 'INTBUOMSALE',
        'quote_detail.IntbUomSale' => 'INTBUOMSALE',
        'Intbuompur' => 'INTBUOMPUR',
        'QuoteDetail.Intbuompur' => 'INTBUOMPUR',
        'intbuompur' => 'INTBUOMPUR',
        'quoteDetail.intbuompur' => 'INTBUOMPUR',
        'QuoteDetailTableMap::COL_INTBUOMPUR' => 'INTBUOMPUR',
        'COL_INTBUOMPUR' => 'INTBUOMPUR',
        'IntbUomPur' => 'INTBUOMPUR',
        'quote_detail.IntbUomPur' => 'INTBUOMPUR',
        'Qtdtquotind1' => 'QTDTQUOTIND1',
        'QuoteDetail.Qtdtquotind1' => 'QTDTQUOTIND1',
        'qtdtquotind1' => 'QTDTQUOTIND1',
        'quoteDetail.qtdtquotind1' => 'QTDTQUOTIND1',
        'QuoteDetailTableMap::COL_QTDTQUOTIND1' => 'QTDTQUOTIND1',
        'COL_QTDTQUOTIND1' => 'QTDTQUOTIND1',
        'QtdtQuotInd1' => 'QTDTQUOTIND1',
        'quote_detail.QtdtQuotInd1' => 'QTDTQUOTIND1',
        'Qtdtquotunit1' => 'QTDTQUOTUNIT1',
        'QuoteDetail.Qtdtquotunit1' => 'QTDTQUOTUNIT1',
        'qtdtquotunit1' => 'QTDTQUOTUNIT1',
        'quoteDetail.qtdtquotunit1' => 'QTDTQUOTUNIT1',
        'QuoteDetailTableMap::COL_QTDTQUOTUNIT1' => 'QTDTQUOTUNIT1',
        'COL_QTDTQUOTUNIT1' => 'QTDTQUOTUNIT1',
        'QtdtQuotUnit1' => 'QTDTQUOTUNIT1',
        'quote_detail.QtdtQuotUnit1' => 'QTDTQUOTUNIT1',
        'Qtdtquotpric1' => 'QTDTQUOTPRIC1',
        'QuoteDetail.Qtdtquotpric1' => 'QTDTQUOTPRIC1',
        'qtdtquotpric1' => 'QTDTQUOTPRIC1',
        'quoteDetail.qtdtquotpric1' => 'QTDTQUOTPRIC1',
        'QuoteDetailTableMap::COL_QTDTQUOTPRIC1' => 'QTDTQUOTPRIC1',
        'COL_QTDTQUOTPRIC1' => 'QTDTQUOTPRIC1',
        'QtdtQuotPric1' => 'QTDTQUOTPRIC1',
        'quote_detail.QtdtQuotPric1' => 'QTDTQUOTPRIC1',
        'Qtdtquotcost1' => 'QTDTQUOTCOST1',
        'QuoteDetail.Qtdtquotcost1' => 'QTDTQUOTCOST1',
        'qtdtquotcost1' => 'QTDTQUOTCOST1',
        'quoteDetail.qtdtquotcost1' => 'QTDTQUOTCOST1',
        'QuoteDetailTableMap::COL_QTDTQUOTCOST1' => 'QTDTQUOTCOST1',
        'COL_QTDTQUOTCOST1' => 'QTDTQUOTCOST1',
        'QtdtQuotCost1' => 'QTDTQUOTCOST1',
        'quote_detail.QtdtQuotCost1' => 'QTDTQUOTCOST1',
        'Qtdtquotmkupmarg1' => 'QTDTQUOTMKUPMARG1',
        'QuoteDetail.Qtdtquotmkupmarg1' => 'QTDTQUOTMKUPMARG1',
        'qtdtquotmkupmarg1' => 'QTDTQUOTMKUPMARG1',
        'quoteDetail.qtdtquotmkupmarg1' => 'QTDTQUOTMKUPMARG1',
        'QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1' => 'QTDTQUOTMKUPMARG1',
        'COL_QTDTQUOTMKUPMARG1' => 'QTDTQUOTMKUPMARG1',
        'QtdtQuotMkupMarg1' => 'QTDTQUOTMKUPMARG1',
        'quote_detail.QtdtQuotMkupMarg1' => 'QTDTQUOTMKUPMARG1',
        'Qtdtquotind2' => 'QTDTQUOTIND2',
        'QuoteDetail.Qtdtquotind2' => 'QTDTQUOTIND2',
        'qtdtquotind2' => 'QTDTQUOTIND2',
        'quoteDetail.qtdtquotind2' => 'QTDTQUOTIND2',
        'QuoteDetailTableMap::COL_QTDTQUOTIND2' => 'QTDTQUOTIND2',
        'COL_QTDTQUOTIND2' => 'QTDTQUOTIND2',
        'QtdtQuotInd2' => 'QTDTQUOTIND2',
        'quote_detail.QtdtQuotInd2' => 'QTDTQUOTIND2',
        'Qtdtquotunit2' => 'QTDTQUOTUNIT2',
        'QuoteDetail.Qtdtquotunit2' => 'QTDTQUOTUNIT2',
        'qtdtquotunit2' => 'QTDTQUOTUNIT2',
        'quoteDetail.qtdtquotunit2' => 'QTDTQUOTUNIT2',
        'QuoteDetailTableMap::COL_QTDTQUOTUNIT2' => 'QTDTQUOTUNIT2',
        'COL_QTDTQUOTUNIT2' => 'QTDTQUOTUNIT2',
        'QtdtQuotUnit2' => 'QTDTQUOTUNIT2',
        'quote_detail.QtdtQuotUnit2' => 'QTDTQUOTUNIT2',
        'Qtdtquotpric2' => 'QTDTQUOTPRIC2',
        'QuoteDetail.Qtdtquotpric2' => 'QTDTQUOTPRIC2',
        'qtdtquotpric2' => 'QTDTQUOTPRIC2',
        'quoteDetail.qtdtquotpric2' => 'QTDTQUOTPRIC2',
        'QuoteDetailTableMap::COL_QTDTQUOTPRIC2' => 'QTDTQUOTPRIC2',
        'COL_QTDTQUOTPRIC2' => 'QTDTQUOTPRIC2',
        'QtdtQuotPric2' => 'QTDTQUOTPRIC2',
        'quote_detail.QtdtQuotPric2' => 'QTDTQUOTPRIC2',
        'Qtdtquotcost2' => 'QTDTQUOTCOST2',
        'QuoteDetail.Qtdtquotcost2' => 'QTDTQUOTCOST2',
        'qtdtquotcost2' => 'QTDTQUOTCOST2',
        'quoteDetail.qtdtquotcost2' => 'QTDTQUOTCOST2',
        'QuoteDetailTableMap::COL_QTDTQUOTCOST2' => 'QTDTQUOTCOST2',
        'COL_QTDTQUOTCOST2' => 'QTDTQUOTCOST2',
        'QtdtQuotCost2' => 'QTDTQUOTCOST2',
        'quote_detail.QtdtQuotCost2' => 'QTDTQUOTCOST2',
        'Qtdtquotmkupmarg2' => 'QTDTQUOTMKUPMARG2',
        'QuoteDetail.Qtdtquotmkupmarg2' => 'QTDTQUOTMKUPMARG2',
        'qtdtquotmkupmarg2' => 'QTDTQUOTMKUPMARG2',
        'quoteDetail.qtdtquotmkupmarg2' => 'QTDTQUOTMKUPMARG2',
        'QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2' => 'QTDTQUOTMKUPMARG2',
        'COL_QTDTQUOTMKUPMARG2' => 'QTDTQUOTMKUPMARG2',
        'QtdtQuotMkupMarg2' => 'QTDTQUOTMKUPMARG2',
        'quote_detail.QtdtQuotMkupMarg2' => 'QTDTQUOTMKUPMARG2',
        'Qtdtquotind3' => 'QTDTQUOTIND3',
        'QuoteDetail.Qtdtquotind3' => 'QTDTQUOTIND3',
        'qtdtquotind3' => 'QTDTQUOTIND3',
        'quoteDetail.qtdtquotind3' => 'QTDTQUOTIND3',
        'QuoteDetailTableMap::COL_QTDTQUOTIND3' => 'QTDTQUOTIND3',
        'COL_QTDTQUOTIND3' => 'QTDTQUOTIND3',
        'QtdtQuotInd3' => 'QTDTQUOTIND3',
        'quote_detail.QtdtQuotInd3' => 'QTDTQUOTIND3',
        'Qtdtquotunit3' => 'QTDTQUOTUNIT3',
        'QuoteDetail.Qtdtquotunit3' => 'QTDTQUOTUNIT3',
        'qtdtquotunit3' => 'QTDTQUOTUNIT3',
        'quoteDetail.qtdtquotunit3' => 'QTDTQUOTUNIT3',
        'QuoteDetailTableMap::COL_QTDTQUOTUNIT3' => 'QTDTQUOTUNIT3',
        'COL_QTDTQUOTUNIT3' => 'QTDTQUOTUNIT3',
        'QtdtQuotUnit3' => 'QTDTQUOTUNIT3',
        'quote_detail.QtdtQuotUnit3' => 'QTDTQUOTUNIT3',
        'Qtdtquotpric3' => 'QTDTQUOTPRIC3',
        'QuoteDetail.Qtdtquotpric3' => 'QTDTQUOTPRIC3',
        'qtdtquotpric3' => 'QTDTQUOTPRIC3',
        'quoteDetail.qtdtquotpric3' => 'QTDTQUOTPRIC3',
        'QuoteDetailTableMap::COL_QTDTQUOTPRIC3' => 'QTDTQUOTPRIC3',
        'COL_QTDTQUOTPRIC3' => 'QTDTQUOTPRIC3',
        'QtdtQuotPric3' => 'QTDTQUOTPRIC3',
        'quote_detail.QtdtQuotPric3' => 'QTDTQUOTPRIC3',
        'Qtdtquotcost3' => 'QTDTQUOTCOST3',
        'QuoteDetail.Qtdtquotcost3' => 'QTDTQUOTCOST3',
        'qtdtquotcost3' => 'QTDTQUOTCOST3',
        'quoteDetail.qtdtquotcost3' => 'QTDTQUOTCOST3',
        'QuoteDetailTableMap::COL_QTDTQUOTCOST3' => 'QTDTQUOTCOST3',
        'COL_QTDTQUOTCOST3' => 'QTDTQUOTCOST3',
        'QtdtQuotCost3' => 'QTDTQUOTCOST3',
        'quote_detail.QtdtQuotCost3' => 'QTDTQUOTCOST3',
        'Qtdtquotmkupmarg3' => 'QTDTQUOTMKUPMARG3',
        'QuoteDetail.Qtdtquotmkupmarg3' => 'QTDTQUOTMKUPMARG3',
        'qtdtquotmkupmarg3' => 'QTDTQUOTMKUPMARG3',
        'quoteDetail.qtdtquotmkupmarg3' => 'QTDTQUOTMKUPMARG3',
        'QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3' => 'QTDTQUOTMKUPMARG3',
        'COL_QTDTQUOTMKUPMARG3' => 'QTDTQUOTMKUPMARG3',
        'QtdtQuotMkupMarg3' => 'QTDTQUOTMKUPMARG3',
        'quote_detail.QtdtQuotMkupMarg3' => 'QTDTQUOTMKUPMARG3',
        'Qtdtquotind4' => 'QTDTQUOTIND4',
        'QuoteDetail.Qtdtquotind4' => 'QTDTQUOTIND4',
        'qtdtquotind4' => 'QTDTQUOTIND4',
        'quoteDetail.qtdtquotind4' => 'QTDTQUOTIND4',
        'QuoteDetailTableMap::COL_QTDTQUOTIND4' => 'QTDTQUOTIND4',
        'COL_QTDTQUOTIND4' => 'QTDTQUOTIND4',
        'QtdtQuotInd4' => 'QTDTQUOTIND4',
        'quote_detail.QtdtQuotInd4' => 'QTDTQUOTIND4',
        'Qtdtquotunit4' => 'QTDTQUOTUNIT4',
        'QuoteDetail.Qtdtquotunit4' => 'QTDTQUOTUNIT4',
        'qtdtquotunit4' => 'QTDTQUOTUNIT4',
        'quoteDetail.qtdtquotunit4' => 'QTDTQUOTUNIT4',
        'QuoteDetailTableMap::COL_QTDTQUOTUNIT4' => 'QTDTQUOTUNIT4',
        'COL_QTDTQUOTUNIT4' => 'QTDTQUOTUNIT4',
        'QtdtQuotUnit4' => 'QTDTQUOTUNIT4',
        'quote_detail.QtdtQuotUnit4' => 'QTDTQUOTUNIT4',
        'Qtdtquotpric4' => 'QTDTQUOTPRIC4',
        'QuoteDetail.Qtdtquotpric4' => 'QTDTQUOTPRIC4',
        'qtdtquotpric4' => 'QTDTQUOTPRIC4',
        'quoteDetail.qtdtquotpric4' => 'QTDTQUOTPRIC4',
        'QuoteDetailTableMap::COL_QTDTQUOTPRIC4' => 'QTDTQUOTPRIC4',
        'COL_QTDTQUOTPRIC4' => 'QTDTQUOTPRIC4',
        'QtdtQuotPric4' => 'QTDTQUOTPRIC4',
        'quote_detail.QtdtQuotPric4' => 'QTDTQUOTPRIC4',
        'Qtdtquotcost4' => 'QTDTQUOTCOST4',
        'QuoteDetail.Qtdtquotcost4' => 'QTDTQUOTCOST4',
        'qtdtquotcost4' => 'QTDTQUOTCOST4',
        'quoteDetail.qtdtquotcost4' => 'QTDTQUOTCOST4',
        'QuoteDetailTableMap::COL_QTDTQUOTCOST4' => 'QTDTQUOTCOST4',
        'COL_QTDTQUOTCOST4' => 'QTDTQUOTCOST4',
        'QtdtQuotCost4' => 'QTDTQUOTCOST4',
        'quote_detail.QtdtQuotCost4' => 'QTDTQUOTCOST4',
        'Qtdtquotmkupmarg4' => 'QTDTQUOTMKUPMARG4',
        'QuoteDetail.Qtdtquotmkupmarg4' => 'QTDTQUOTMKUPMARG4',
        'qtdtquotmkupmarg4' => 'QTDTQUOTMKUPMARG4',
        'quoteDetail.qtdtquotmkupmarg4' => 'QTDTQUOTMKUPMARG4',
        'QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4' => 'QTDTQUOTMKUPMARG4',
        'COL_QTDTQUOTMKUPMARG4' => 'QTDTQUOTMKUPMARG4',
        'QtdtQuotMkupMarg4' => 'QTDTQUOTMKUPMARG4',
        'quote_detail.QtdtQuotMkupMarg4' => 'QTDTQUOTMKUPMARG4',
        'Qtdtquotind5' => 'QTDTQUOTIND5',
        'QuoteDetail.Qtdtquotind5' => 'QTDTQUOTIND5',
        'qtdtquotind5' => 'QTDTQUOTIND5',
        'quoteDetail.qtdtquotind5' => 'QTDTQUOTIND5',
        'QuoteDetailTableMap::COL_QTDTQUOTIND5' => 'QTDTQUOTIND5',
        'COL_QTDTQUOTIND5' => 'QTDTQUOTIND5',
        'QtdtQuotInd5' => 'QTDTQUOTIND5',
        'quote_detail.QtdtQuotInd5' => 'QTDTQUOTIND5',
        'Qtdtquotunit5' => 'QTDTQUOTUNIT5',
        'QuoteDetail.Qtdtquotunit5' => 'QTDTQUOTUNIT5',
        'qtdtquotunit5' => 'QTDTQUOTUNIT5',
        'quoteDetail.qtdtquotunit5' => 'QTDTQUOTUNIT5',
        'QuoteDetailTableMap::COL_QTDTQUOTUNIT5' => 'QTDTQUOTUNIT5',
        'COL_QTDTQUOTUNIT5' => 'QTDTQUOTUNIT5',
        'QtdtQuotUnit5' => 'QTDTQUOTUNIT5',
        'quote_detail.QtdtQuotUnit5' => 'QTDTQUOTUNIT5',
        'Qtdtquotpric5' => 'QTDTQUOTPRIC5',
        'QuoteDetail.Qtdtquotpric5' => 'QTDTQUOTPRIC5',
        'qtdtquotpric5' => 'QTDTQUOTPRIC5',
        'quoteDetail.qtdtquotpric5' => 'QTDTQUOTPRIC5',
        'QuoteDetailTableMap::COL_QTDTQUOTPRIC5' => 'QTDTQUOTPRIC5',
        'COL_QTDTQUOTPRIC5' => 'QTDTQUOTPRIC5',
        'QtdtQuotPric5' => 'QTDTQUOTPRIC5',
        'quote_detail.QtdtQuotPric5' => 'QTDTQUOTPRIC5',
        'Qtdtquotcost5' => 'QTDTQUOTCOST5',
        'QuoteDetail.Qtdtquotcost5' => 'QTDTQUOTCOST5',
        'qtdtquotcost5' => 'QTDTQUOTCOST5',
        'quoteDetail.qtdtquotcost5' => 'QTDTQUOTCOST5',
        'QuoteDetailTableMap::COL_QTDTQUOTCOST5' => 'QTDTQUOTCOST5',
        'COL_QTDTQUOTCOST5' => 'QTDTQUOTCOST5',
        'QtdtQuotCost5' => 'QTDTQUOTCOST5',
        'quote_detail.QtdtQuotCost5' => 'QTDTQUOTCOST5',
        'Qtdtquotmkupmarg5' => 'QTDTQUOTMKUPMARG5',
        'QuoteDetail.Qtdtquotmkupmarg5' => 'QTDTQUOTMKUPMARG5',
        'qtdtquotmkupmarg5' => 'QTDTQUOTMKUPMARG5',
        'quoteDetail.qtdtquotmkupmarg5' => 'QTDTQUOTMKUPMARG5',
        'QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5' => 'QTDTQUOTMKUPMARG5',
        'COL_QTDTQUOTMKUPMARG5' => 'QTDTQUOTMKUPMARG5',
        'QtdtQuotMkupMarg5' => 'QTDTQUOTMKUPMARG5',
        'quote_detail.QtdtQuotMkupMarg5' => 'QTDTQUOTMKUPMARG5',
        'Qtdtquotind6' => 'QTDTQUOTIND6',
        'QuoteDetail.Qtdtquotind6' => 'QTDTQUOTIND6',
        'qtdtquotind6' => 'QTDTQUOTIND6',
        'quoteDetail.qtdtquotind6' => 'QTDTQUOTIND6',
        'QuoteDetailTableMap::COL_QTDTQUOTIND6' => 'QTDTQUOTIND6',
        'COL_QTDTQUOTIND6' => 'QTDTQUOTIND6',
        'QtdtQuotInd6' => 'QTDTQUOTIND6',
        'quote_detail.QtdtQuotInd6' => 'QTDTQUOTIND6',
        'Qtdtquotunit6' => 'QTDTQUOTUNIT6',
        'QuoteDetail.Qtdtquotunit6' => 'QTDTQUOTUNIT6',
        'qtdtquotunit6' => 'QTDTQUOTUNIT6',
        'quoteDetail.qtdtquotunit6' => 'QTDTQUOTUNIT6',
        'QuoteDetailTableMap::COL_QTDTQUOTUNIT6' => 'QTDTQUOTUNIT6',
        'COL_QTDTQUOTUNIT6' => 'QTDTQUOTUNIT6',
        'QtdtQuotUnit6' => 'QTDTQUOTUNIT6',
        'quote_detail.QtdtQuotUnit6' => 'QTDTQUOTUNIT6',
        'Qtdtquotpric6' => 'QTDTQUOTPRIC6',
        'QuoteDetail.Qtdtquotpric6' => 'QTDTQUOTPRIC6',
        'qtdtquotpric6' => 'QTDTQUOTPRIC6',
        'quoteDetail.qtdtquotpric6' => 'QTDTQUOTPRIC6',
        'QuoteDetailTableMap::COL_QTDTQUOTPRIC6' => 'QTDTQUOTPRIC6',
        'COL_QTDTQUOTPRIC6' => 'QTDTQUOTPRIC6',
        'QtdtQuotPric6' => 'QTDTQUOTPRIC6',
        'quote_detail.QtdtQuotPric6' => 'QTDTQUOTPRIC6',
        'Qtdtquotcost6' => 'QTDTQUOTCOST6',
        'QuoteDetail.Qtdtquotcost6' => 'QTDTQUOTCOST6',
        'qtdtquotcost6' => 'QTDTQUOTCOST6',
        'quoteDetail.qtdtquotcost6' => 'QTDTQUOTCOST6',
        'QuoteDetailTableMap::COL_QTDTQUOTCOST6' => 'QTDTQUOTCOST6',
        'COL_QTDTQUOTCOST6' => 'QTDTQUOTCOST6',
        'QtdtQuotCost6' => 'QTDTQUOTCOST6',
        'quote_detail.QtdtQuotCost6' => 'QTDTQUOTCOST6',
        'Qtdtquotmkupmarg6' => 'QTDTQUOTMKUPMARG6',
        'QuoteDetail.Qtdtquotmkupmarg6' => 'QTDTQUOTMKUPMARG6',
        'qtdtquotmkupmarg6' => 'QTDTQUOTMKUPMARG6',
        'quoteDetail.qtdtquotmkupmarg6' => 'QTDTQUOTMKUPMARG6',
        'QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6' => 'QTDTQUOTMKUPMARG6',
        'COL_QTDTQUOTMKUPMARG6' => 'QTDTQUOTMKUPMARG6',
        'QtdtQuotMkupMarg6' => 'QTDTQUOTMKUPMARG6',
        'quote_detail.QtdtQuotMkupMarg6' => 'QTDTQUOTMKUPMARG6',
        'Qtdtasstcode' => 'QTDTASSTCODE',
        'QuoteDetail.Qtdtasstcode' => 'QTDTASSTCODE',
        'qtdtasstcode' => 'QTDTASSTCODE',
        'quoteDetail.qtdtasstcode' => 'QTDTASSTCODE',
        'QuoteDetailTableMap::COL_QTDTASSTCODE' => 'QTDTASSTCODE',
        'COL_QTDTASSTCODE' => 'QTDTASSTCODE',
        'QtdtAsstCode' => 'QTDTASSTCODE',
        'quote_detail.QtdtAsstCode' => 'QTDTASSTCODE',
        'Qtdtasstqty' => 'QTDTASSTQTY',
        'QuoteDetail.Qtdtasstqty' => 'QTDTASSTQTY',
        'qtdtasstqty' => 'QTDTASSTQTY',
        'quoteDetail.qtdtasstqty' => 'QTDTASSTQTY',
        'QuoteDetailTableMap::COL_QTDTASSTQTY' => 'QTDTASSTQTY',
        'COL_QTDTASSTQTY' => 'QTDTASSTQTY',
        'QtdtAsstQty' => 'QTDTASSTQTY',
        'quote_detail.QtdtAsstQty' => 'QTDTASSTQTY',
        'Qtdtlistpric' => 'QTDTLISTPRIC',
        'QuoteDetail.Qtdtlistpric' => 'QTDTLISTPRIC',
        'qtdtlistpric' => 'QTDTLISTPRIC',
        'quoteDetail.qtdtlistpric' => 'QTDTLISTPRIC',
        'QuoteDetailTableMap::COL_QTDTLISTPRIC' => 'QTDTLISTPRIC',
        'COL_QTDTLISTPRIC' => 'QTDTLISTPRIC',
        'QtdtListPric' => 'QTDTLISTPRIC',
        'quote_detail.QtdtListPric' => 'QTDTLISTPRIC',
        'Qtdtstancost' => 'QTDTSTANCOST',
        'QuoteDetail.Qtdtstancost' => 'QTDTSTANCOST',
        'qtdtstancost' => 'QTDTSTANCOST',
        'quoteDetail.qtdtstancost' => 'QTDTSTANCOST',
        'QuoteDetailTableMap::COL_QTDTSTANCOST' => 'QTDTSTANCOST',
        'COL_QTDTSTANCOST' => 'QTDTSTANCOST',
        'QtdtStanCost' => 'QTDTSTANCOST',
        'quote_detail.QtdtStanCost' => 'QTDTSTANCOST',
        'Qtdtvenditemjob' => 'QTDTVENDITEMJOB',
        'QuoteDetail.Qtdtvenditemjob' => 'QTDTVENDITEMJOB',
        'qtdtvenditemjob' => 'QTDTVENDITEMJOB',
        'quoteDetail.qtdtvenditemjob' => 'QTDTVENDITEMJOB',
        'QuoteDetailTableMap::COL_QTDTVENDITEMJOB' => 'QTDTVENDITEMJOB',
        'COL_QTDTVENDITEMJOB' => 'QTDTVENDITEMJOB',
        'QtdtVendItemJob' => 'QTDTVENDITEMJOB',
        'quote_detail.QtdtVendItemJob' => 'QTDTVENDITEMJOB',
        'Apvevendid' => 'APVEVENDID',
        'QuoteDetail.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'quoteDetail.apvevendid' => 'APVEVENDID',
        'QuoteDetailTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'quote_detail.ApveVendId' => 'APVEVENDID',
        'Qtdtnsitemgrup' => 'QTDTNSITEMGRUP',
        'QuoteDetail.Qtdtnsitemgrup' => 'QTDTNSITEMGRUP',
        'qtdtnsitemgrup' => 'QTDTNSITEMGRUP',
        'quoteDetail.qtdtnsitemgrup' => 'QTDTNSITEMGRUP',
        'QuoteDetailTableMap::COL_QTDTNSITEMGRUP' => 'QTDTNSITEMGRUP',
        'COL_QTDTNSITEMGRUP' => 'QTDTNSITEMGRUP',
        'QtdtNsItemGrup' => 'QTDTNSITEMGRUP',
        'quote_detail.QtdtNsItemGrup' => 'QTDTNSITEMGRUP',
        'Qtdtusecode' => 'QTDTUSECODE',
        'QuoteDetail.Qtdtusecode' => 'QTDTUSECODE',
        'qtdtusecode' => 'QTDTUSECODE',
        'quoteDetail.qtdtusecode' => 'QTDTUSECODE',
        'QuoteDetailTableMap::COL_QTDTUSECODE' => 'QTDTUSECODE',
        'COL_QTDTUSECODE' => 'QTDTUSECODE',
        'QtdtUseCode' => 'QTDTUSECODE',
        'quote_detail.QtdtUseCode' => 'QTDTUSECODE',
        'Qtdtpickflag' => 'QTDTPICKFLAG',
        'QuoteDetail.Qtdtpickflag' => 'QTDTPICKFLAG',
        'qtdtpickflag' => 'QTDTPICKFLAG',
        'quoteDetail.qtdtpickflag' => 'QTDTPICKFLAG',
        'QuoteDetailTableMap::COL_QTDTPICKFLAG' => 'QTDTPICKFLAG',
        'COL_QTDTPICKFLAG' => 'QTDTPICKFLAG',
        'QtdtPickFlag' => 'QTDTPICKFLAG',
        'quote_detail.QtdtPickFlag' => 'QTDTPICKFLAG',
        'Qtdtstatus' => 'QTDTSTATUS',
        'QuoteDetail.Qtdtstatus' => 'QTDTSTATUS',
        'qtdtstatus' => 'QTDTSTATUS',
        'quoteDetail.qtdtstatus' => 'QTDTSTATUS',
        'QuoteDetailTableMap::COL_QTDTSTATUS' => 'QTDTSTATUS',
        'COL_QTDTSTATUS' => 'QTDTSTATUS',
        'QtdtStatus' => 'QTDTSTATUS',
        'quote_detail.QtdtStatus' => 'QTDTSTATUS',
        'Oetblsslcode' => 'OETBLSSLCODE',
        'QuoteDetail.Oetblsslcode' => 'OETBLSSLCODE',
        'oetblsslcode' => 'OETBLSSLCODE',
        'quoteDetail.oetblsslcode' => 'OETBLSSLCODE',
        'QuoteDetailTableMap::COL_OETBLSSLCODE' => 'OETBLSSLCODE',
        'COL_OETBLSSLCODE' => 'OETBLSSLCODE',
        'OetbLsslCode' => 'OETBLSSLCODE',
        'quote_detail.OetbLsslCode' => 'OETBLSSLCODE',
        'Qtdtlostdate' => 'QTDTLOSTDATE',
        'QuoteDetail.Qtdtlostdate' => 'QTDTLOSTDATE',
        'qtdtlostdate' => 'QTDTLOSTDATE',
        'quoteDetail.qtdtlostdate' => 'QTDTLOSTDATE',
        'QuoteDetailTableMap::COL_QTDTLOSTDATE' => 'QTDTLOSTDATE',
        'COL_QTDTLOSTDATE' => 'QTDTLOSTDATE',
        'QtdtLostDate' => 'QTDTLOSTDATE',
        'quote_detail.QtdtLostDate' => 'QTDTLOSTDATE',
        'Qtdtlostposted' => 'QTDTLOSTPOSTED',
        'QuoteDetail.Qtdtlostposted' => 'QTDTLOSTPOSTED',
        'qtdtlostposted' => 'QTDTLOSTPOSTED',
        'quoteDetail.qtdtlostposted' => 'QTDTLOSTPOSTED',
        'QuoteDetailTableMap::COL_QTDTLOSTPOSTED' => 'QTDTLOSTPOSTED',
        'COL_QTDTLOSTPOSTED' => 'QTDTLOSTPOSTED',
        'QtdtLostPosted' => 'QTDTLOSTPOSTED',
        'quote_detail.QtdtLostPosted' => 'QTDTLOSTPOSTED',
        'Qtdtleaddays' => 'QTDTLEADDAYS',
        'QuoteDetail.Qtdtleaddays' => 'QTDTLEADDAYS',
        'qtdtleaddays' => 'QTDTLEADDAYS',
        'quoteDetail.qtdtleaddays' => 'QTDTLEADDAYS',
        'QuoteDetailTableMap::COL_QTDTLEADDAYS' => 'QTDTLEADDAYS',
        'COL_QTDTLEADDAYS' => 'QTDTLEADDAYS',
        'QtdtLeadDays' => 'QTDTLEADDAYS',
        'quote_detail.QtdtLeadDays' => 'QTDTLEADDAYS',
        'Qtdtordrdiscpct' => 'QTDTORDRDISCPCT',
        'QuoteDetail.Qtdtordrdiscpct' => 'QTDTORDRDISCPCT',
        'qtdtordrdiscpct' => 'QTDTORDRDISCPCT',
        'quoteDetail.qtdtordrdiscpct' => 'QTDTORDRDISCPCT',
        'QuoteDetailTableMap::COL_QTDTORDRDISCPCT' => 'QTDTORDRDISCPCT',
        'COL_QTDTORDRDISCPCT' => 'QTDTORDRDISCPCT',
        'QtdtOrdrDiscPct' => 'QTDTORDRDISCPCT',
        'quote_detail.QtdtOrdrDiscPct' => 'QTDTORDRDISCPCT',
        'Qtdtquotdiscpct1' => 'QTDTQUOTDISCPCT1',
        'QuoteDetail.Qtdtquotdiscpct1' => 'QTDTQUOTDISCPCT1',
        'qtdtquotdiscpct1' => 'QTDTQUOTDISCPCT1',
        'quoteDetail.qtdtquotdiscpct1' => 'QTDTQUOTDISCPCT1',
        'QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1' => 'QTDTQUOTDISCPCT1',
        'COL_QTDTQUOTDISCPCT1' => 'QTDTQUOTDISCPCT1',
        'QtdtQuotDiscPct1' => 'QTDTQUOTDISCPCT1',
        'quote_detail.QtdtQuotDiscPct1' => 'QTDTQUOTDISCPCT1',
        'Qtdtmtrcreqd' => 'QTDTMTRCREQD',
        'QuoteDetail.Qtdtmtrcreqd' => 'QTDTMTRCREQD',
        'qtdtmtrcreqd' => 'QTDTMTRCREQD',
        'quoteDetail.qtdtmtrcreqd' => 'QTDTMTRCREQD',
        'QuoteDetailTableMap::COL_QTDTMTRCREQD' => 'QTDTMTRCREQD',
        'COL_QTDTMTRCREQD' => 'QTDTMTRCREQD',
        'QtdtMtrcReqd' => 'QTDTMTRCREQD',
        'quote_detail.QtdtMtrcReqd' => 'QTDTMTRCREQD',
        'Qtdtcofcreqd' => 'QTDTCOFCREQD',
        'QuoteDetail.Qtdtcofcreqd' => 'QTDTCOFCREQD',
        'qtdtcofcreqd' => 'QTDTCOFCREQD',
        'quoteDetail.qtdtcofcreqd' => 'QTDTCOFCREQD',
        'QuoteDetailTableMap::COL_QTDTCOFCREQD' => 'QTDTCOFCREQD',
        'COL_QTDTCOFCREQD' => 'QTDTCOFCREQD',
        'QtdtCofcReqd' => 'QTDTCOFCREQD',
        'quote_detail.QtdtCofcReqd' => 'QTDTCOFCREQD',
        'Qtdtmnfrid' => 'QTDTMNFRID',
        'QuoteDetail.Qtdtmnfrid' => 'QTDTMNFRID',
        'qtdtmnfrid' => 'QTDTMNFRID',
        'quoteDetail.qtdtmnfrid' => 'QTDTMNFRID',
        'QuoteDetailTableMap::COL_QTDTMNFRID' => 'QTDTMNFRID',
        'COL_QTDTMNFRID' => 'QTDTMNFRID',
        'QtdtMnfrId' => 'QTDTMNFRID',
        'quote_detail.QtdtMnfrId' => 'QTDTMNFRID',
        'Qtdtmnfritemid' => 'QTDTMNFRITEMID',
        'QuoteDetail.Qtdtmnfritemid' => 'QTDTMNFRITEMID',
        'qtdtmnfritemid' => 'QTDTMNFRITEMID',
        'quoteDetail.qtdtmnfritemid' => 'QTDTMNFRITEMID',
        'QuoteDetailTableMap::COL_QTDTMNFRITEMID' => 'QTDTMNFRITEMID',
        'COL_QTDTMNFRITEMID' => 'QTDTMNFRITEMID',
        'QtdtMnfrItemId' => 'QTDTMNFRITEMID',
        'quote_detail.QtdtMnfrItemId' => 'QTDTMNFRITEMID',
        'Qtdtlmordrnbr' => 'QTDTLMORDRNBR',
        'QuoteDetail.Qtdtlmordrnbr' => 'QTDTLMORDRNBR',
        'qtdtlmordrnbr' => 'QTDTLMORDRNBR',
        'quoteDetail.qtdtlmordrnbr' => 'QTDTLMORDRNBR',
        'QuoteDetailTableMap::COL_QTDTLMORDRNBR' => 'QTDTLMORDRNBR',
        'COL_QTDTLMORDRNBR' => 'QTDTLMORDRNBR',
        'QtdtLmOrdrNbr' => 'QTDTLMORDRNBR',
        'quote_detail.QtdtLmOrdrNbr' => 'QTDTLMORDRNBR',
        'Qtdtlmordrdate' => 'QTDTLMORDRDATE',
        'QuoteDetail.Qtdtlmordrdate' => 'QTDTLMORDRDATE',
        'qtdtlmordrdate' => 'QTDTLMORDRDATE',
        'quoteDetail.qtdtlmordrdate' => 'QTDTLMORDRDATE',
        'QuoteDetailTableMap::COL_QTDTLMORDRDATE' => 'QTDTLMORDRDATE',
        'COL_QTDTLMORDRDATE' => 'QTDTLMORDRDATE',
        'QtdtLmOrdrDate' => 'QTDTLMORDRDATE',
        'quote_detail.QtdtLmOrdrDate' => 'QTDTLMORDRDATE',
        'Qtdtspecitemcode' => 'QTDTSPECITEMCODE',
        'QuoteDetail.Qtdtspecitemcode' => 'QTDTSPECITEMCODE',
        'qtdtspecitemcode' => 'QTDTSPECITEMCODE',
        'quoteDetail.qtdtspecitemcode' => 'QTDTSPECITEMCODE',
        'QuoteDetailTableMap::COL_QTDTSPECITEMCODE' => 'QTDTSPECITEMCODE',
        'COL_QTDTSPECITEMCODE' => 'QTDTSPECITEMCODE',
        'QtdtSpecItemCode' => 'QTDTSPECITEMCODE',
        'quote_detail.QtdtSpecItemCode' => 'QTDTSPECITEMCODE',
        'Qtdtacsalepgm' => 'QTDTACSALEPGM',
        'QuoteDetail.Qtdtacsalepgm' => 'QTDTACSALEPGM',
        'qtdtacsalepgm' => 'QTDTACSALEPGM',
        'quoteDetail.qtdtacsalepgm' => 'QTDTACSALEPGM',
        'QuoteDetailTableMap::COL_QTDTACSALEPGM' => 'QTDTACSALEPGM',
        'COL_QTDTACSALEPGM' => 'QTDTACSALEPGM',
        'QtdtAcSalePgm' => 'QTDTACSALEPGM',
        'quote_detail.QtdtAcSalePgm' => 'QTDTACSALEPGM',
        'Qtdtnsvendshipfr' => 'QTDTNSVENDSHIPFR',
        'QuoteDetail.Qtdtnsvendshipfr' => 'QTDTNSVENDSHIPFR',
        'qtdtnsvendshipfr' => 'QTDTNSVENDSHIPFR',
        'quoteDetail.qtdtnsvendshipfr' => 'QTDTNSVENDSHIPFR',
        'QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR' => 'QTDTNSVENDSHIPFR',
        'COL_QTDTNSVENDSHIPFR' => 'QTDTNSVENDSHIPFR',
        'QtdtNsVendShipfr' => 'QTDTNSVENDSHIPFR',
        'quote_detail.QtdtNsVendShipfr' => 'QTDTNSVENDSHIPFR',
        'Qtdtprntmnfrnote' => 'QTDTPRNTMNFRNOTE',
        'QuoteDetail.Qtdtprntmnfrnote' => 'QTDTPRNTMNFRNOTE',
        'qtdtprntmnfrnote' => 'QTDTPRNTMNFRNOTE',
        'quoteDetail.qtdtprntmnfrnote' => 'QTDTPRNTMNFRNOTE',
        'QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE' => 'QTDTPRNTMNFRNOTE',
        'COL_QTDTPRNTMNFRNOTE' => 'QTDTPRNTMNFRNOTE',
        'QtdtPrntMnfrNote' => 'QTDTPRNTMNFRNOTE',
        'quote_detail.QtdtPrntMnfrNote' => 'QTDTPRNTMNFRNOTE',
        'Dateupdtd' => 'DATEUPDTD',
        'QuoteDetail.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'quoteDetail.dateupdtd' => 'DATEUPDTD',
        'QuoteDetailTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'quote_detail.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'QuoteDetail.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'quoteDetail.timeupdtd' => 'TIMEUPDTD',
        'QuoteDetailTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'quote_detail.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'QuoteDetail.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'quoteDetail.dummy' => 'DUMMY',
        'QuoteDetailTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'quote_detail.dummy' => 'DUMMY',
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
        $this->setName('quote_detail');
        $this->setPhpName('QuoteDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\QuoteDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('QthdId', 'Qthdid', 'VARCHAR' , 'quote_header', 'QthdId', true, 8, '');
        $this->addPrimaryKey('QtdtLine', 'Qtdtline', 'INTEGER', true, 4, 0);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('QtdtDesc', 'Qtdtdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('QtdtDesc2', 'Qtdtdesc2', 'VARCHAR', false, 35, null);
        $this->addColumn('QtdtCustCrssRef', 'Qtdtcustcrssref', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('QtdtRqstDate', 'Qtdtrqstdate', 'VARCHAR', false, 8, null);
        $this->addColumn('QtdtSpecOrdr', 'Qtdtspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbCtaxCode', 'Artbctaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtQtyOrd', 'Qtdtqtyord', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtPric', 'Qtdtpric', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtCost', 'Qtdtcost', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtTaxPctTot', 'Qtdttaxpcttot', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtPricTot', 'Qtdtprictot', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtCostTot', 'Qtdtcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtWghtTot', 'Qtdtwghttot', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode1', 'Qtdtmstrtaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct1', 'Qtdtmstrtaxpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode2', 'Qtdtmstrtaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct2', 'Qtdtmstrtaxpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode3', 'Qtdtmstrtaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct3', 'Qtdtmstrtaxpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode4', 'Qtdtmstrtaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct4', 'Qtdtmstrtaxpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode5', 'Qtdtmstrtaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct5', 'Qtdtmstrtaxpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode6', 'Qtdtmstrtaxcode6', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct6', 'Qtdtmstrtaxpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode7', 'Qtdtmstrtaxcode7', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct7', 'Qtdtmstrtaxpct7', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode8', 'Qtdtmstrtaxcode8', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct8', 'Qtdtmstrtaxpct8', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMstrTaxCode9', 'Qtdtmstrtaxcode9', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMstrTaxPct9', 'Qtdtmstrtaxpct9', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbUomSale', 'Intbuomsale', 'VARCHAR', false, 4, null);
        $this->addColumn('IntbUomPur', 'Intbuompur', 'VARCHAR', false, 4, null);
        $this->addColumn('QtdtQuotInd1', 'Qtdtquotind1', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtQuotUnit1', 'Qtdtquotunit1', 'INTEGER', false, 9, null);
        $this->addColumn('QtdtQuotPric1', 'Qtdtquotpric1', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotCost1', 'Qtdtquotcost1', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotMkupMarg1', 'Qtdtquotmkupmarg1', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotInd2', 'Qtdtquotind2', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtQuotUnit2', 'Qtdtquotunit2', 'INTEGER', false, 9, null);
        $this->addColumn('QtdtQuotPric2', 'Qtdtquotpric2', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotCost2', 'Qtdtquotcost2', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotMkupMarg2', 'Qtdtquotmkupmarg2', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotInd3', 'Qtdtquotind3', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtQuotUnit3', 'Qtdtquotunit3', 'INTEGER', false, 9, null);
        $this->addColumn('QtdtQuotPric3', 'Qtdtquotpric3', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotCost3', 'Qtdtquotcost3', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotMkupMarg3', 'Qtdtquotmkupmarg3', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotInd4', 'Qtdtquotind4', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtQuotUnit4', 'Qtdtquotunit4', 'INTEGER', false, 9, null);
        $this->addColumn('QtdtQuotPric4', 'Qtdtquotpric4', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotCost4', 'Qtdtquotcost4', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotMkupMarg4', 'Qtdtquotmkupmarg4', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotInd5', 'Qtdtquotind5', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtQuotUnit5', 'Qtdtquotunit5', 'INTEGER', false, 9, null);
        $this->addColumn('QtdtQuotPric5', 'Qtdtquotpric5', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotCost5', 'Qtdtquotcost5', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotMkupMarg5', 'Qtdtquotmkupmarg5', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotInd6', 'Qtdtquotind6', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtQuotUnit6', 'Qtdtquotunit6', 'INTEGER', false, 9, null);
        $this->addColumn('QtdtQuotPric6', 'Qtdtquotpric6', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotCost6', 'Qtdtquotcost6', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotMkupMarg6', 'Qtdtquotmkupmarg6', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtAsstCode', 'Qtdtasstcode', 'VARCHAR', false, 3, null);
        $this->addColumn('QtdtAsstQty', 'Qtdtasstqty', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtListPric', 'Qtdtlistpric', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtStanCost', 'Qtdtstancost', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtVendItemJob', 'Qtdtvenditemjob', 'VARCHAR', false, 30, null);
        $this->addColumn('ApveVendId', 'Apvevendid', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtNsItemGrup', 'Qtdtnsitemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('QtdtUseCode', 'Qtdtusecode', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtPickFlag', 'Qtdtpickflag', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtStatus', 'Qtdtstatus', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbLsslCode', 'Oetblsslcode', 'VARCHAR', false, 4, null);
        $this->addColumn('QtdtLostDate', 'Qtdtlostdate', 'VARCHAR', false, 8, null);
        $this->addColumn('QtdtLostPosted', 'Qtdtlostposted', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtLeadDays', 'Qtdtleaddays', 'INTEGER', false, 4, null);
        $this->addColumn('QtdtOrdrDiscPct', 'Qtdtordrdiscpct', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtQuotDiscPct1', 'Qtdtquotdiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('QtdtMtrcReqd', 'Qtdtmtrcreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtCofcReqd', 'Qtdtcofcreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('QtdtMnfrId', 'Qtdtmnfrid', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtMnfrItemId', 'Qtdtmnfritemid', 'VARCHAR', false, 30, null);
        $this->addColumn('QtdtLmOrdrNbr', 'Qtdtlmordrnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('QtdtLmOrdrDate', 'Qtdtlmordrdate', 'VARCHAR', false, 8, null);
        $this->addColumn('QtdtSpecItemCode', 'Qtdtspecitemcode', 'VARCHAR', false, 8, null);
        $this->addColumn('QtdtAcSalePgm', 'Qtdtacsalepgm', 'VARCHAR', false, 8, null);
        $this->addColumn('QtdtNsVendShipfr', 'Qtdtnsvendshipfr', 'VARCHAR', false, 6, null);
        $this->addColumn('QtdtPrntMnfrNote', 'Qtdtprntmnfrnote', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('Quote', '\\Quote', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':QthdId',
    1 => ':QthdId',
  ),
), null, null, null, false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \QuoteDetail $obj A \QuoteDetail object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(QuoteDetail $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getQthdid() || is_scalar($obj->getQthdid()) || is_callable([$obj->getQthdid(), '__toString']) ? (string) $obj->getQthdid() : $obj->getQthdid()), (null === $obj->getQtdtline() || is_scalar($obj->getQtdtline()) || is_callable([$obj->getQtdtline(), '__toString']) ? (string) $obj->getQtdtline() : $obj->getQtdtline())]);
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
     * @param mixed $value A \QuoteDetail object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \QuoteDetail) {
                $key = serialize([(null === $value->getQthdid() || is_scalar($value->getQthdid()) || is_callable([$value->getQthdid(), '__toString']) ? (string) $value->getQthdid() : $value->getQthdid()), (null === $value->getQtdtline() || is_scalar($value->getQtdtline()) || is_callable([$value->getQtdtline(), '__toString']) ? (string) $value->getQtdtline() : $value->getQtdtline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \QuoteDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)])]);
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

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? QuoteDetailTableMap::CLASS_DEFAULT : QuoteDetailTableMap::OM_CLASS;
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
     * @return array (QuoteDetail object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = QuoteDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = QuoteDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + QuoteDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QuoteDetailTableMap::OM_CLASS;
            /** @var QuoteDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            QuoteDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = QuoteDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = QuoteDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var QuoteDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QuoteDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTHDID);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLINE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTDESC);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTDESC2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTCUSTCRSSREF);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTRQSTDATE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTSPECORDR);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_ARTBCTAXCODE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQTYORD);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTPRIC);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTCOST);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTTAXPCTTOT);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTPRICTOT);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTCOSTTOT);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTWGHTTOT);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_INTBUOMSALE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_INTBUOMPUR);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTASSTCODE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTASSTQTY);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLISTPRIC);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTSTANCOST);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTVENDITEMJOB);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTNSITEMGRUP);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTUSECODE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTPICKFLAG);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTSTATUS);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_OETBLSSLCODE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLOSTDATE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLOSTPOSTED);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLEADDAYS);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTORDRDISCPCT);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMTRCREQD);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTCOFCREQD);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMNFRID);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTMNFRITEMID);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLMORDRNBR);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTLMORDRDATE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTSPECITEMCODE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTACSALEPGM);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(QuoteDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QthdId');
            $criteria->addSelectColumn($alias . '.QtdtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.QtdtDesc');
            $criteria->addSelectColumn($alias . '.QtdtDesc2');
            $criteria->addSelectColumn($alias . '.QtdtCustCrssRef');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.QtdtRqstDate');
            $criteria->addSelectColumn($alias . '.QtdtSpecOrdr');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->addSelectColumn($alias . '.QtdtQtyOrd');
            $criteria->addSelectColumn($alias . '.QtdtPric');
            $criteria->addSelectColumn($alias . '.QtdtCost');
            $criteria->addSelectColumn($alias . '.QtdtTaxPctTot');
            $criteria->addSelectColumn($alias . '.QtdtPricTot');
            $criteria->addSelectColumn($alias . '.QtdtCostTot');
            $criteria->addSelectColumn($alias . '.QtdtWghtTot');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode1');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct1');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode2');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct2');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode3');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct3');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode4');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct4');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode5');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct5');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode6');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct6');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode7');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct7');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode8');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct8');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxCode9');
            $criteria->addSelectColumn($alias . '.QtdtMstrTaxPct9');
            $criteria->addSelectColumn($alias . '.IntbUomSale');
            $criteria->addSelectColumn($alias . '.IntbUomPur');
            $criteria->addSelectColumn($alias . '.QtdtQuotInd1');
            $criteria->addSelectColumn($alias . '.QtdtQuotUnit1');
            $criteria->addSelectColumn($alias . '.QtdtQuotPric1');
            $criteria->addSelectColumn($alias . '.QtdtQuotCost1');
            $criteria->addSelectColumn($alias . '.QtdtQuotMkupMarg1');
            $criteria->addSelectColumn($alias . '.QtdtQuotInd2');
            $criteria->addSelectColumn($alias . '.QtdtQuotUnit2');
            $criteria->addSelectColumn($alias . '.QtdtQuotPric2');
            $criteria->addSelectColumn($alias . '.QtdtQuotCost2');
            $criteria->addSelectColumn($alias . '.QtdtQuotMkupMarg2');
            $criteria->addSelectColumn($alias . '.QtdtQuotInd3');
            $criteria->addSelectColumn($alias . '.QtdtQuotUnit3');
            $criteria->addSelectColumn($alias . '.QtdtQuotPric3');
            $criteria->addSelectColumn($alias . '.QtdtQuotCost3');
            $criteria->addSelectColumn($alias . '.QtdtQuotMkupMarg3');
            $criteria->addSelectColumn($alias . '.QtdtQuotInd4');
            $criteria->addSelectColumn($alias . '.QtdtQuotUnit4');
            $criteria->addSelectColumn($alias . '.QtdtQuotPric4');
            $criteria->addSelectColumn($alias . '.QtdtQuotCost4');
            $criteria->addSelectColumn($alias . '.QtdtQuotMkupMarg4');
            $criteria->addSelectColumn($alias . '.QtdtQuotInd5');
            $criteria->addSelectColumn($alias . '.QtdtQuotUnit5');
            $criteria->addSelectColumn($alias . '.QtdtQuotPric5');
            $criteria->addSelectColumn($alias . '.QtdtQuotCost5');
            $criteria->addSelectColumn($alias . '.QtdtQuotMkupMarg5');
            $criteria->addSelectColumn($alias . '.QtdtQuotInd6');
            $criteria->addSelectColumn($alias . '.QtdtQuotUnit6');
            $criteria->addSelectColumn($alias . '.QtdtQuotPric6');
            $criteria->addSelectColumn($alias . '.QtdtQuotCost6');
            $criteria->addSelectColumn($alias . '.QtdtQuotMkupMarg6');
            $criteria->addSelectColumn($alias . '.QtdtAsstCode');
            $criteria->addSelectColumn($alias . '.QtdtAsstQty');
            $criteria->addSelectColumn($alias . '.QtdtListPric');
            $criteria->addSelectColumn($alias . '.QtdtStanCost');
            $criteria->addSelectColumn($alias . '.QtdtVendItemJob');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.QtdtNsItemGrup');
            $criteria->addSelectColumn($alias . '.QtdtUseCode');
            $criteria->addSelectColumn($alias . '.QtdtPickFlag');
            $criteria->addSelectColumn($alias . '.QtdtStatus');
            $criteria->addSelectColumn($alias . '.OetbLsslCode');
            $criteria->addSelectColumn($alias . '.QtdtLostDate');
            $criteria->addSelectColumn($alias . '.QtdtLostPosted');
            $criteria->addSelectColumn($alias . '.QtdtLeadDays');
            $criteria->addSelectColumn($alias . '.QtdtOrdrDiscPct');
            $criteria->addSelectColumn($alias . '.QtdtQuotDiscPct1');
            $criteria->addSelectColumn($alias . '.QtdtMtrcReqd');
            $criteria->addSelectColumn($alias . '.QtdtCofcReqd');
            $criteria->addSelectColumn($alias . '.QtdtMnfrId');
            $criteria->addSelectColumn($alias . '.QtdtMnfrItemId');
            $criteria->addSelectColumn($alias . '.QtdtLmOrdrNbr');
            $criteria->addSelectColumn($alias . '.QtdtLmOrdrDate');
            $criteria->addSelectColumn($alias . '.QtdtSpecItemCode');
            $criteria->addSelectColumn($alias . '.QtdtAcSalePgm');
            $criteria->addSelectColumn($alias . '.QtdtNsVendShipfr');
            $criteria->addSelectColumn($alias . '.QtdtPrntMnfrNote');
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
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTHDID);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLINE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTDESC);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTDESC2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTCUSTCRSSREF);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTRQSTDATE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTSPECORDR);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_ARTBCTAXCODE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQTYORD);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTPRIC);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTCOST);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTTAXPCTTOT);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTPRICTOT);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTCOSTTOT);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTWGHTTOT);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_INTBUOMSALE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_INTBUOMPUR);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTIND6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTUNIT6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTPRIC6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTCOST6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTASSTCODE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTASSTQTY);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLISTPRIC);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTSTANCOST);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTVENDITEMJOB);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTNSITEMGRUP);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTUSECODE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTPICKFLAG);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTSTATUS);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_OETBLSSLCODE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLOSTDATE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLOSTPOSTED);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLEADDAYS);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTORDRDISCPCT);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMTRCREQD);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTCOFCREQD);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMNFRID);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTMNFRITEMID);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLMORDRNBR);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTLMORDRDATE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTSPECITEMCODE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTACSALEPGM);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(QuoteDetailTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.QthdId');
            $criteria->removeSelectColumn($alias . '.QtdtLine');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.QtdtDesc');
            $criteria->removeSelectColumn($alias . '.QtdtDesc2');
            $criteria->removeSelectColumn($alias . '.QtdtCustCrssRef');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.QtdtRqstDate');
            $criteria->removeSelectColumn($alias . '.QtdtSpecOrdr');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->removeSelectColumn($alias . '.QtdtQtyOrd');
            $criteria->removeSelectColumn($alias . '.QtdtPric');
            $criteria->removeSelectColumn($alias . '.QtdtCost');
            $criteria->removeSelectColumn($alias . '.QtdtTaxPctTot');
            $criteria->removeSelectColumn($alias . '.QtdtPricTot');
            $criteria->removeSelectColumn($alias . '.QtdtCostTot');
            $criteria->removeSelectColumn($alias . '.QtdtWghtTot');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode1');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct1');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode2');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct2');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode3');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct3');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode4');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct4');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode5');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct5');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode6');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct6');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode7');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct7');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode8');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct8');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxCode9');
            $criteria->removeSelectColumn($alias . '.QtdtMstrTaxPct9');
            $criteria->removeSelectColumn($alias . '.IntbUomSale');
            $criteria->removeSelectColumn($alias . '.IntbUomPur');
            $criteria->removeSelectColumn($alias . '.QtdtQuotInd1');
            $criteria->removeSelectColumn($alias . '.QtdtQuotUnit1');
            $criteria->removeSelectColumn($alias . '.QtdtQuotPric1');
            $criteria->removeSelectColumn($alias . '.QtdtQuotCost1');
            $criteria->removeSelectColumn($alias . '.QtdtQuotMkupMarg1');
            $criteria->removeSelectColumn($alias . '.QtdtQuotInd2');
            $criteria->removeSelectColumn($alias . '.QtdtQuotUnit2');
            $criteria->removeSelectColumn($alias . '.QtdtQuotPric2');
            $criteria->removeSelectColumn($alias . '.QtdtQuotCost2');
            $criteria->removeSelectColumn($alias . '.QtdtQuotMkupMarg2');
            $criteria->removeSelectColumn($alias . '.QtdtQuotInd3');
            $criteria->removeSelectColumn($alias . '.QtdtQuotUnit3');
            $criteria->removeSelectColumn($alias . '.QtdtQuotPric3');
            $criteria->removeSelectColumn($alias . '.QtdtQuotCost3');
            $criteria->removeSelectColumn($alias . '.QtdtQuotMkupMarg3');
            $criteria->removeSelectColumn($alias . '.QtdtQuotInd4');
            $criteria->removeSelectColumn($alias . '.QtdtQuotUnit4');
            $criteria->removeSelectColumn($alias . '.QtdtQuotPric4');
            $criteria->removeSelectColumn($alias . '.QtdtQuotCost4');
            $criteria->removeSelectColumn($alias . '.QtdtQuotMkupMarg4');
            $criteria->removeSelectColumn($alias . '.QtdtQuotInd5');
            $criteria->removeSelectColumn($alias . '.QtdtQuotUnit5');
            $criteria->removeSelectColumn($alias . '.QtdtQuotPric5');
            $criteria->removeSelectColumn($alias . '.QtdtQuotCost5');
            $criteria->removeSelectColumn($alias . '.QtdtQuotMkupMarg5');
            $criteria->removeSelectColumn($alias . '.QtdtQuotInd6');
            $criteria->removeSelectColumn($alias . '.QtdtQuotUnit6');
            $criteria->removeSelectColumn($alias . '.QtdtQuotPric6');
            $criteria->removeSelectColumn($alias . '.QtdtQuotCost6');
            $criteria->removeSelectColumn($alias . '.QtdtQuotMkupMarg6');
            $criteria->removeSelectColumn($alias . '.QtdtAsstCode');
            $criteria->removeSelectColumn($alias . '.QtdtAsstQty');
            $criteria->removeSelectColumn($alias . '.QtdtListPric');
            $criteria->removeSelectColumn($alias . '.QtdtStanCost');
            $criteria->removeSelectColumn($alias . '.QtdtVendItemJob');
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.QtdtNsItemGrup');
            $criteria->removeSelectColumn($alias . '.QtdtUseCode');
            $criteria->removeSelectColumn($alias . '.QtdtPickFlag');
            $criteria->removeSelectColumn($alias . '.QtdtStatus');
            $criteria->removeSelectColumn($alias . '.OetbLsslCode');
            $criteria->removeSelectColumn($alias . '.QtdtLostDate');
            $criteria->removeSelectColumn($alias . '.QtdtLostPosted');
            $criteria->removeSelectColumn($alias . '.QtdtLeadDays');
            $criteria->removeSelectColumn($alias . '.QtdtOrdrDiscPct');
            $criteria->removeSelectColumn($alias . '.QtdtQuotDiscPct1');
            $criteria->removeSelectColumn($alias . '.QtdtMtrcReqd');
            $criteria->removeSelectColumn($alias . '.QtdtCofcReqd');
            $criteria->removeSelectColumn($alias . '.QtdtMnfrId');
            $criteria->removeSelectColumn($alias . '.QtdtMnfrItemId');
            $criteria->removeSelectColumn($alias . '.QtdtLmOrdrNbr');
            $criteria->removeSelectColumn($alias . '.QtdtLmOrdrDate');
            $criteria->removeSelectColumn($alias . '.QtdtSpecItemCode');
            $criteria->removeSelectColumn($alias . '.QtdtAcSalePgm');
            $criteria->removeSelectColumn($alias . '.QtdtNsVendShipfr');
            $criteria->removeSelectColumn($alias . '.QtdtPrntMnfrNote');
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
        return Propel::getServiceContainer()->getDatabaseMap(QuoteDetailTableMap::DATABASE_NAME)->getTable(QuoteDetailTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a QuoteDetail or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or QuoteDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \QuoteDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QuoteDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(QuoteDetailTableMap::COL_QTHDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(QuoteDetailTableMap::COL_QTDTLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = QuoteDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            QuoteDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                QuoteDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the quote_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return QuoteDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a QuoteDetail or Criteria object.
     *
     * @param mixed $criteria Criteria or QuoteDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from QuoteDetail object
        }


        // Set the correct dbName
        $query = QuoteDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
