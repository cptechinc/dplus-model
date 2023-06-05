<?php

namespace Map;

use \Customer;
use \CustomerQuery;
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
 * This class defines the structure of the 'ar_cust_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CustomerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CustomerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_cust_mast';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Customer';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Customer';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 133;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 133;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'ar_cust_mast.ArcuCustId';

    /**
     * the column name for the ArcuName field
     */
    const COL_ARCUNAME = 'ar_cust_mast.ArcuName';

    /**
     * the column name for the ArcuAdr1 field
     */
    const COL_ARCUADR1 = 'ar_cust_mast.ArcuAdr1';

    /**
     * the column name for the ArcuAdr2 field
     */
    const COL_ARCUADR2 = 'ar_cust_mast.ArcuAdr2';

    /**
     * the column name for the ArcuAdr3 field
     */
    const COL_ARCUADR3 = 'ar_cust_mast.ArcuAdr3';

    /**
     * the column name for the ArcuCtry field
     */
    const COL_ARCUCTRY = 'ar_cust_mast.ArcuCtry';

    /**
     * the column name for the ArcuCity field
     */
    const COL_ARCUCITY = 'ar_cust_mast.ArcuCity';

    /**
     * the column name for the ArcuStat field
     */
    const COL_ARCUSTAT = 'ar_cust_mast.ArcuStat';

    /**
     * the column name for the ArcuZipCode field
     */
    const COL_ARCUZIPCODE = 'ar_cust_mast.ArcuZipCode';

    /**
     * the column name for the ArcuDeliveryDays field
     */
    const COL_ARCUDELIVERYDAYS = 'ar_cust_mast.ArcuDeliveryDays';

    /**
     * the column name for the ArcuRemitWhse field
     */
    const COL_ARCUREMITWHSE = 'ar_cust_mast.ArcuRemitWhse';

    /**
     * the column name for the ArcuShipBin field
     */
    const COL_ARCUSHIPBIN = 'ar_cust_mast.ArcuShipBin';

    /**
     * the column name for the ArcuAllowAddOns field
     */
    const COL_ARCUALLOWADDONS = 'ar_cust_mast.ArcuAllowAddOns';

    /**
     * the column name for the ArcuLmEcommCustId field
     */
    const COL_ARCULMECOMMCUSTID = 'ar_cust_mast.ArcuLmEcommCustId';

    /**
     * the column name for the ArcuGsUse2ndBin field
     */
    const COL_ARCUGSUSE2NDBIN = 'ar_cust_mast.ArcuGsUse2ndBin';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'ar_cust_mast.ArspSalePer1';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'ar_cust_mast.ArspSalePer2';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'ar_cust_mast.ArspSalePer3';

    /**
     * the column name for the ArtbCtaxCode field
     */
    const COL_ARTBCTAXCODE = 'ar_cust_mast.ArtbCtaxCode';

    /**
     * the column name for the ArcuTaxExemNbr field
     */
    const COL_ARCUTAXEXEMNBR = 'ar_cust_mast.ArcuTaxExemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'ar_cust_mast.IntbWhse';

    /**
     * the column name for the ArcuPricLvl field
     */
    const COL_ARCUPRICLVL = 'ar_cust_mast.ArcuPricLvl';

    /**
     * the column name for the ArcuShipComp field
     */
    const COL_ARCUSHIPCOMP = 'ar_cust_mast.ArcuShipComp';

    /**
     * the column name for the ArcuTxbl field
     */
    const COL_ARCUTXBL = 'ar_cust_mast.ArcuTxbl';

    /**
     * the column name for the ArcuPostal field
     */
    const COL_ARCUPOSTAL = 'ar_cust_mast.ArcuPostal';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'ar_cust_mast.ArtbShipVia';

    /**
     * the column name for the ArcuBord field
     */
    const COL_ARCUBORD = 'ar_cust_mast.ArcuBord';

    /**
     * the column name for the ArtbTypeCode field
     */
    const COL_ARTBTYPECODE = 'ar_cust_mast.ArtbTypeCode';

    /**
     * the column name for the ArtbPricCode field
     */
    const COL_ARTBPRICCODE = 'ar_cust_mast.ArtbPricCode';

    /**
     * the column name for the ArtbCommCode field
     */
    const COL_ARTBCOMMCODE = 'ar_cust_mast.ArtbCommCode';

    /**
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'ar_cust_mast.ArtmTermCd';

    /**
     * the column name for the ArcuCredLmt field
     */
    const COL_ARCUCREDLMT = 'ar_cust_mast.ArcuCredLmt';

    /**
     * the column name for the ArcuStmtCode field
     */
    const COL_ARCUSTMTCODE = 'ar_cust_mast.ArcuStmtCode';

    /**
     * the column name for the ArcuCredHold field
     */
    const COL_ARCUCREDHOLD = 'ar_cust_mast.ArcuCredHold';

    /**
     * the column name for the ArcuFinChrg field
     */
    const COL_ARCUFINCHRG = 'ar_cust_mast.ArcuFinChrg';

    /**
     * the column name for the ArcuUserCode field
     */
    const COL_ARCUUSERCODE = 'ar_cust_mast.ArcuUserCode';

    /**
     * the column name for the ArcuNewFc field
     */
    const COL_ARCUNEWFC = 'ar_cust_mast.ArcuNewFc';

    /**
     * the column name for the ArcuUnpdFc field
     */
    const COL_ARCUUNPDFC = 'ar_cust_mast.ArcuUnpdFc';

    /**
     * the column name for the ArcuCurBal field
     */
    const COL_ARCUCURBAL = 'ar_cust_mast.ArcuCurBal';

    /**
     * the column name for the ArcuBalOdue1 field
     */
    const COL_ARCUBALODUE1 = 'ar_cust_mast.ArcuBalOdue1';

    /**
     * the column name for the ArcuBalOdue2 field
     */
    const COL_ARCUBALODUE2 = 'ar_cust_mast.ArcuBalOdue2';

    /**
     * the column name for the ArcuBalOdue3 field
     */
    const COL_ARCUBALODUE3 = 'ar_cust_mast.ArcuBalOdue3';

    /**
     * the column name for the ArcuSaleMtd field
     */
    const COL_ARCUSALEMTD = 'ar_cust_mast.ArcuSaleMtd';

    /**
     * the column name for the ArcuInvMtd field
     */
    const COL_ARCUINVMTD = 'ar_cust_mast.ArcuInvMtd';

    /**
     * the column name for the ArcuSaleYtd field
     */
    const COL_ARCUSALEYTD = 'ar_cust_mast.ArcuSaleYtd';

    /**
     * the column name for the ArcuInvYtd field
     */
    const COL_ARCUINVYTD = 'ar_cust_mast.ArcuInvYtd';

    /**
     * the column name for the ArcuDateOpen field
     */
    const COL_ARCUDATEOPEN = 'ar_cust_mast.ArcuDateOpen';

    /**
     * the column name for the ArcuLastSaleDate field
     */
    const COL_ARCULASTSALEDATE = 'ar_cust_mast.ArcuLastSaleDate';

    /**
     * the column name for the ArcuHighBal field
     */
    const COL_ARCUHIGHBAL = 'ar_cust_mast.ArcuHighBal';

    /**
     * the column name for the ArcuBigSaleMo field
     */
    const COL_ARCUBIGSALEMO = 'ar_cust_mast.ArcuBigSaleMo';

    /**
     * the column name for the ArcuLastPayDate field
     */
    const COL_ARCULASTPAYDATE = 'ar_cust_mast.ArcuLastPayDate';

    /**
     * the column name for the ArcuAvgPayDays field
     */
    const COL_ARCUAVGPAYDAYS = 'ar_cust_mast.ArcuAvgPayDays';

    /**
     * the column name for the ArcuUpsZone field
     */
    const COL_ARCUUPSZONE = 'ar_cust_mast.ArcuUpsZone';

    /**
     * the column name for the ArcuHighBalDate field
     */
    const COL_ARCUHIGHBALDATE = 'ar_cust_mast.ArcuHighBalDate';

    /**
     * the column name for the ArcuSale24mo1 field
     */
    const COL_ARCUSALE24MO1 = 'ar_cust_mast.ArcuSale24mo1';

    /**
     * the column name for the ArcuInv24mo1 field
     */
    const COL_ARCUINV24MO1 = 'ar_cust_mast.ArcuInv24mo1';

    /**
     * the column name for the ArcuSale24mo2 field
     */
    const COL_ARCUSALE24MO2 = 'ar_cust_mast.ArcuSale24mo2';

    /**
     * the column name for the ArcuInv24mo2 field
     */
    const COL_ARCUINV24MO2 = 'ar_cust_mast.ArcuInv24mo2';

    /**
     * the column name for the ArcuSale24mo3 field
     */
    const COL_ARCUSALE24MO3 = 'ar_cust_mast.ArcuSale24mo3';

    /**
     * the column name for the ArcuInv24mo3 field
     */
    const COL_ARCUINV24MO3 = 'ar_cust_mast.ArcuInv24mo3';

    /**
     * the column name for the ArcuSale24mo4 field
     */
    const COL_ARCUSALE24MO4 = 'ar_cust_mast.ArcuSale24mo4';

    /**
     * the column name for the ArcuInv24mo4 field
     */
    const COL_ARCUINV24MO4 = 'ar_cust_mast.ArcuInv24mo4';

    /**
     * the column name for the ArcuSale24mo5 field
     */
    const COL_ARCUSALE24MO5 = 'ar_cust_mast.ArcuSale24mo5';

    /**
     * the column name for the ArcuInv24mo5 field
     */
    const COL_ARCUINV24MO5 = 'ar_cust_mast.ArcuInv24mo5';

    /**
     * the column name for the ArcuSale24mo6 field
     */
    const COL_ARCUSALE24MO6 = 'ar_cust_mast.ArcuSale24mo6';

    /**
     * the column name for the ArcuInv24mo6 field
     */
    const COL_ARCUINV24MO6 = 'ar_cust_mast.ArcuInv24mo6';

    /**
     * the column name for the ArcuSale24mo7 field
     */
    const COL_ARCUSALE24MO7 = 'ar_cust_mast.ArcuSale24mo7';

    /**
     * the column name for the ArcuInv24mo7 field
     */
    const COL_ARCUINV24MO7 = 'ar_cust_mast.ArcuInv24mo7';

    /**
     * the column name for the ArcuSale24mo8 field
     */
    const COL_ARCUSALE24MO8 = 'ar_cust_mast.ArcuSale24mo8';

    /**
     * the column name for the ArcuInv24mo8 field
     */
    const COL_ARCUINV24MO8 = 'ar_cust_mast.ArcuInv24mo8';

    /**
     * the column name for the ArcuSale24mo9 field
     */
    const COL_ARCUSALE24MO9 = 'ar_cust_mast.ArcuSale24mo9';

    /**
     * the column name for the ArcuInv24mo9 field
     */
    const COL_ARCUINV24MO9 = 'ar_cust_mast.ArcuInv24mo9';

    /**
     * the column name for the ArcuSale24mo10 field
     */
    const COL_ARCUSALE24MO10 = 'ar_cust_mast.ArcuSale24mo10';

    /**
     * the column name for the ArcuInv24mo10 field
     */
    const COL_ARCUINV24MO10 = 'ar_cust_mast.ArcuInv24mo10';

    /**
     * the column name for the ArcuSale24mo11 field
     */
    const COL_ARCUSALE24MO11 = 'ar_cust_mast.ArcuSale24mo11';

    /**
     * the column name for the ArcuInv24mo11 field
     */
    const COL_ARCUINV24MO11 = 'ar_cust_mast.ArcuInv24mo11';

    /**
     * the column name for the ArcuSale24mo12 field
     */
    const COL_ARCUSALE24MO12 = 'ar_cust_mast.ArcuSale24mo12';

    /**
     * the column name for the ArcuInv24mo12 field
     */
    const COL_ARCUINV24MO12 = 'ar_cust_mast.ArcuInv24mo12';

    /**
     * the column name for the ArcuSale24mo13 field
     */
    const COL_ARCUSALE24MO13 = 'ar_cust_mast.ArcuSale24mo13';

    /**
     * the column name for the ArcuInv24mo13 field
     */
    const COL_ARCUINV24MO13 = 'ar_cust_mast.ArcuInv24mo13';

    /**
     * the column name for the ArcuSale24mo14 field
     */
    const COL_ARCUSALE24MO14 = 'ar_cust_mast.ArcuSale24mo14';

    /**
     * the column name for the ArcuInv24mo14 field
     */
    const COL_ARCUINV24MO14 = 'ar_cust_mast.ArcuInv24mo14';

    /**
     * the column name for the ArcuSale24mo15 field
     */
    const COL_ARCUSALE24MO15 = 'ar_cust_mast.ArcuSale24mo15';

    /**
     * the column name for the ArcuInv24mo15 field
     */
    const COL_ARCUINV24MO15 = 'ar_cust_mast.ArcuInv24mo15';

    /**
     * the column name for the ArcuSale24mo16 field
     */
    const COL_ARCUSALE24MO16 = 'ar_cust_mast.ArcuSale24mo16';

    /**
     * the column name for the ArcuInv24mo16 field
     */
    const COL_ARCUINV24MO16 = 'ar_cust_mast.ArcuInv24mo16';

    /**
     * the column name for the ArcuSale24mo17 field
     */
    const COL_ARCUSALE24MO17 = 'ar_cust_mast.ArcuSale24mo17';

    /**
     * the column name for the ArcuInv24mo17 field
     */
    const COL_ARCUINV24MO17 = 'ar_cust_mast.ArcuInv24mo17';

    /**
     * the column name for the ArcuSale24mo18 field
     */
    const COL_ARCUSALE24MO18 = 'ar_cust_mast.ArcuSale24mo18';

    /**
     * the column name for the ArcuInv24mo18 field
     */
    const COL_ARCUINV24MO18 = 'ar_cust_mast.ArcuInv24mo18';

    /**
     * the column name for the ArcuSale24mo19 field
     */
    const COL_ARCUSALE24MO19 = 'ar_cust_mast.ArcuSale24mo19';

    /**
     * the column name for the ArcuInv24mo19 field
     */
    const COL_ARCUINV24MO19 = 'ar_cust_mast.ArcuInv24mo19';

    /**
     * the column name for the ArcuSale24mo20 field
     */
    const COL_ARCUSALE24MO20 = 'ar_cust_mast.ArcuSale24mo20';

    /**
     * the column name for the ArcuInv24mo20 field
     */
    const COL_ARCUINV24MO20 = 'ar_cust_mast.ArcuInv24mo20';

    /**
     * the column name for the ArcuSale24mo21 field
     */
    const COL_ARCUSALE24MO21 = 'ar_cust_mast.ArcuSale24mo21';

    /**
     * the column name for the ArcuInv24mo21 field
     */
    const COL_ARCUINV24MO21 = 'ar_cust_mast.ArcuInv24mo21';

    /**
     * the column name for the ArcuSale24mo22 field
     */
    const COL_ARCUSALE24MO22 = 'ar_cust_mast.ArcuSale24mo22';

    /**
     * the column name for the ArcuInv24mo22 field
     */
    const COL_ARCUINV24MO22 = 'ar_cust_mast.ArcuInv24mo22';

    /**
     * the column name for the ArcuSale24mo23 field
     */
    const COL_ARCUSALE24MO23 = 'ar_cust_mast.ArcuSale24mo23';

    /**
     * the column name for the ArcuInv24mo23 field
     */
    const COL_ARCUINV24MO23 = 'ar_cust_mast.ArcuInv24mo23';

    /**
     * the column name for the ArcuSale24mo24 field
     */
    const COL_ARCUSALE24MO24 = 'ar_cust_mast.ArcuSale24mo24';

    /**
     * the column name for the ArcuInv24mo24 field
     */
    const COL_ARCUINV24MO24 = 'ar_cust_mast.ArcuInv24mo24';

    /**
     * the column name for the ArcuLastPayAmt field
     */
    const COL_ARCULASTPAYAMT = 'ar_cust_mast.ArcuLastPayAmt';

    /**
     * the column name for the ArcuOrdrTot field
     */
    const COL_ARCUORDRTOT = 'ar_cust_mast.ArcuOrdrTot';

    /**
     * the column name for the ArcuUseFrtIn field
     */
    const COL_ARCUUSEFRTIN = 'ar_cust_mast.ArcuUseFrtIn';

    /**
     * the column name for the ArcuMyVendId field
     */
    const COL_ARCUMYVENDID = 'ar_cust_mast.ArcuMyVendId';

    /**
     * the column name for the ArcuAddlPricDisc field
     */
    const COL_ARCUADDLPRICDISC = 'ar_cust_mast.ArcuAddlPricDisc';

    /**
     * the column name for the ArcuActiveInactive field
     */
    const COL_ARCUACTIVEINACTIVE = 'ar_cust_mast.ArcuActiveInactive';

    /**
     * the column name for the ArcuInactiveDate field
     */
    const COL_ARCUINACTIVEDATE = 'ar_cust_mast.ArcuInactiveDate';

    /**
     * the column name for the ArcuChrgFrt field
     */
    const COL_ARCUCHRGFRT = 'ar_cust_mast.ArcuChrgFrt';

    /**
     * the column name for the ArcuCoreXDays field
     */
    const COL_ARCUCOREXDAYS = 'ar_cust_mast.ArcuCoreXDays';

    /**
     * the column name for the ArcuContractNbr field
     */
    const COL_ARCUCONTRACTNBR = 'ar_cust_mast.ArcuContractNbr';

    /**
     * the column name for the ArcuCoreLF field
     */
    const COL_ARCUCORELF = 'ar_cust_mast.ArcuCoreLF';

    /**
     * the column name for the ArcuCoreBankId field
     */
    const COL_ARCUCOREBANKID = 'ar_cust_mast.ArcuCoreBankId';

    /**
     * the column name for the ArcuDunsNbr field
     */
    const COL_ARCUDUNSNBR = 'ar_cust_mast.ArcuDunsNbr';

    /**
     * the column name for the ArcuRfmlValu field
     */
    const COL_ARCURFMLVALU = 'ar_cust_mast.ArcuRfmlValu';

    /**
     * the column name for the ArcuCustPoParam field
     */
    const COL_ARCUCUSTPOPARAM = 'ar_cust_mast.ArcuCustPoParam';

    /**
     * the column name for the ArcuAgeLevel field
     */
    const COL_ARCUAGELEVEL = 'ar_cust_mast.ArcuAgeLevel';

    /**
     * the column name for the ArtbRoute field
     */
    const COL_ARTBROUTE = 'ar_cust_mast.ArtbRoute';

    /**
     * the column name for the ArcuWgTaxCode field
     */
    const COL_ARCUWGTAXCODE = 'ar_cust_mast.ArcuWgTaxCode';

    /**
     * the column name for the ArcuAcptSupercede field
     */
    const COL_ARCUACPTSUPERCEDE = 'ar_cust_mast.ArcuAcptSupercede';

    /**
     * the column name for the ArcuMstrCustId field
     */
    const COL_ARCUMSTRCUSTID = 'ar_cust_mast.ArcuMstrCustId';

    /**
     * the column name for the ArcuSurchgPct field
     */
    const COL_ARCUSURCHGPCT = 'ar_cust_mast.ArcuSurchgPct';

    /**
     * the column name for the ArcuAllowSplit field
     */
    const COL_ARCUALLOWSPLIT = 'ar_cust_mast.ArcuAllowSplit';

    /**
     * the column name for the ArcuLineMin field
     */
    const COL_ARCULINEMIN = 'ar_cust_mast.ArcuLineMin';

    /**
     * the column name for the ArcuOrdrMin field
     */
    const COL_ARCUORDRMIN = 'ar_cust_mast.ArcuOrdrMin';

    /**
     * the column name for the ArcuUpsAcctNbr field
     */
    const COL_ARCUUPSACCTNBR = 'ar_cust_mast.ArcuUpsAcctNbr';

    /**
     * the column name for the ArcuPrtMatCert field
     */
    const COL_ARCUPRTMATCERT = 'ar_cust_mast.ArcuPrtMatCert';

    /**
     * the column name for the ArcuFobInputYn field
     */
    const COL_ARCUFOBINPUTYN = 'ar_cust_mast.ArcuFobInputYn';

    /**
     * the column name for the ArcuFobPerLb field
     */
    const COL_ARCUFOBPERLB = 'ar_cust_mast.ArcuFobPerLb';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_cust_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_cust_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_cust_mast.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arcuname', 'Arcuadr1', 'Arcuadr2', 'Arcuadr3', 'Arcuctry', 'Arcucity', 'Arcustat', 'Arcuzipcode', 'Arcudeliverydays', 'Arcuremitwhse', 'Arcushipbin', 'Arcuallowaddons', 'Arculmecommcustid', 'Arcugsuse2ndbin', 'Arspsaleper1', 'Arspsaleper2', 'Arspsaleper3', 'Artbctaxcode', 'Arcutaxexemnbr', 'Intbwhse', 'Arcupriclvl', 'Arcushipcomp', 'Arcutxbl', 'Arcupostal', 'Artbshipvia', 'Arcubord', 'Artbtypecode', 'Artbpriccode', 'Artbcommcode', 'Artmtermcd', 'Arcucredlmt', 'Arcustmtcode', 'Arcucredhold', 'Arcufinchrg', 'Arcuusercode', 'Arcunewfc', 'Arcuunpdfc', 'Arcucurbal', 'Arcubalodue1', 'Arcubalodue2', 'Arcubalodue3', 'Arcusalemtd', 'Arcuinvmtd', 'Arcusaleytd', 'Arcuinvytd', 'Arcudateopen', 'Arculastsaledate', 'Arcuhighbal', 'Arcubigsalemo', 'Arculastpaydate', 'Arcuavgpaydays', 'Arcuupszone', 'Arcuhighbaldate', 'Arcusale24mo1', 'Arcuinv24mo1', 'Arcusale24mo2', 'Arcuinv24mo2', 'Arcusale24mo3', 'Arcuinv24mo3', 'Arcusale24mo4', 'Arcuinv24mo4', 'Arcusale24mo5', 'Arcuinv24mo5', 'Arcusale24mo6', 'Arcuinv24mo6', 'Arcusale24mo7', 'Arcuinv24mo7', 'Arcusale24mo8', 'Arcuinv24mo8', 'Arcusale24mo9', 'Arcuinv24mo9', 'Arcusale24mo10', 'Arcuinv24mo10', 'Arcusale24mo11', 'Arcuinv24mo11', 'Arcusale24mo12', 'Arcuinv24mo12', 'Arcusale24mo13', 'Arcuinv24mo13', 'Arcusale24mo14', 'Arcuinv24mo14', 'Arcusale24mo15', 'Arcuinv24mo15', 'Arcusale24mo16', 'Arcuinv24mo16', 'Arcusale24mo17', 'Arcuinv24mo17', 'Arcusale24mo18', 'Arcuinv24mo18', 'Arcusale24mo19', 'Arcuinv24mo19', 'Arcusale24mo20', 'Arcuinv24mo20', 'Arcusale24mo21', 'Arcuinv24mo21', 'Arcusale24mo22', 'Arcuinv24mo22', 'Arcusale24mo23', 'Arcuinv24mo23', 'Arcusale24mo24', 'Arcuinv24mo24', 'Arculastpayamt', 'Arcuordrtot', 'Arcuusefrtin', 'Arcumyvendid', 'Arcuaddlpricdisc', 'Arcuactiveinactive', 'Arcuinactivedate', 'Arcuchrgfrt', 'Arcucorexdays', 'Arcucontractnbr', 'Arcucorelf', 'Arcucorebankid', 'Arcudunsnbr', 'Arcurfmlvalu', 'Arcucustpoparam', 'Arcuagelevel', 'Artbroute', 'Arcuwgtaxcode', 'Arcuacptsupercede', 'Arcumstrcustid', 'Arcusurchgpct', 'Arcuallowsplit', 'Arculinemin', 'Arcuordrmin', 'Arcuupsacctnbr', 'Arcuprtmatcert', 'Arcufobinputyn', 'Arcufobperlb', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arcuname', 'arcuadr1', 'arcuadr2', 'arcuadr3', 'arcuctry', 'arcucity', 'arcustat', 'arcuzipcode', 'arcudeliverydays', 'arcuremitwhse', 'arcushipbin', 'arcuallowaddons', 'arculmecommcustid', 'arcugsuse2ndbin', 'arspsaleper1', 'arspsaleper2', 'arspsaleper3', 'artbctaxcode', 'arcutaxexemnbr', 'intbwhse', 'arcupriclvl', 'arcushipcomp', 'arcutxbl', 'arcupostal', 'artbshipvia', 'arcubord', 'artbtypecode', 'artbpriccode', 'artbcommcode', 'artmtermcd', 'arcucredlmt', 'arcustmtcode', 'arcucredhold', 'arcufinchrg', 'arcuusercode', 'arcunewfc', 'arcuunpdfc', 'arcucurbal', 'arcubalodue1', 'arcubalodue2', 'arcubalodue3', 'arcusalemtd', 'arcuinvmtd', 'arcusaleytd', 'arcuinvytd', 'arcudateopen', 'arculastsaledate', 'arcuhighbal', 'arcubigsalemo', 'arculastpaydate', 'arcuavgpaydays', 'arcuupszone', 'arcuhighbaldate', 'arcusale24mo1', 'arcuinv24mo1', 'arcusale24mo2', 'arcuinv24mo2', 'arcusale24mo3', 'arcuinv24mo3', 'arcusale24mo4', 'arcuinv24mo4', 'arcusale24mo5', 'arcuinv24mo5', 'arcusale24mo6', 'arcuinv24mo6', 'arcusale24mo7', 'arcuinv24mo7', 'arcusale24mo8', 'arcuinv24mo8', 'arcusale24mo9', 'arcuinv24mo9', 'arcusale24mo10', 'arcuinv24mo10', 'arcusale24mo11', 'arcuinv24mo11', 'arcusale24mo12', 'arcuinv24mo12', 'arcusale24mo13', 'arcuinv24mo13', 'arcusale24mo14', 'arcuinv24mo14', 'arcusale24mo15', 'arcuinv24mo15', 'arcusale24mo16', 'arcuinv24mo16', 'arcusale24mo17', 'arcuinv24mo17', 'arcusale24mo18', 'arcuinv24mo18', 'arcusale24mo19', 'arcuinv24mo19', 'arcusale24mo20', 'arcuinv24mo20', 'arcusale24mo21', 'arcuinv24mo21', 'arcusale24mo22', 'arcuinv24mo22', 'arcusale24mo23', 'arcuinv24mo23', 'arcusale24mo24', 'arcuinv24mo24', 'arculastpayamt', 'arcuordrtot', 'arcuusefrtin', 'arcumyvendid', 'arcuaddlpricdisc', 'arcuactiveinactive', 'arcuinactivedate', 'arcuchrgfrt', 'arcucorexdays', 'arcucontractnbr', 'arcucorelf', 'arcucorebankid', 'arcudunsnbr', 'arcurfmlvalu', 'arcucustpoparam', 'arcuagelevel', 'artbroute', 'arcuwgtaxcode', 'arcuacptsupercede', 'arcumstrcustid', 'arcusurchgpct', 'arcuallowsplit', 'arculinemin', 'arcuordrmin', 'arcuupsacctnbr', 'arcuprtmatcert', 'arcufobinputyn', 'arcufobperlb', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CustomerTableMap::COL_ARCUCUSTID, CustomerTableMap::COL_ARCUNAME, CustomerTableMap::COL_ARCUADR1, CustomerTableMap::COL_ARCUADR2, CustomerTableMap::COL_ARCUADR3, CustomerTableMap::COL_ARCUCTRY, CustomerTableMap::COL_ARCUCITY, CustomerTableMap::COL_ARCUSTAT, CustomerTableMap::COL_ARCUZIPCODE, CustomerTableMap::COL_ARCUDELIVERYDAYS, CustomerTableMap::COL_ARCUREMITWHSE, CustomerTableMap::COL_ARCUSHIPBIN, CustomerTableMap::COL_ARCUALLOWADDONS, CustomerTableMap::COL_ARCULMECOMMCUSTID, CustomerTableMap::COL_ARCUGSUSE2NDBIN, CustomerTableMap::COL_ARSPSALEPER1, CustomerTableMap::COL_ARSPSALEPER2, CustomerTableMap::COL_ARSPSALEPER3, CustomerTableMap::COL_ARTBCTAXCODE, CustomerTableMap::COL_ARCUTAXEXEMNBR, CustomerTableMap::COL_INTBWHSE, CustomerTableMap::COL_ARCUPRICLVL, CustomerTableMap::COL_ARCUSHIPCOMP, CustomerTableMap::COL_ARCUTXBL, CustomerTableMap::COL_ARCUPOSTAL, CustomerTableMap::COL_ARTBSHIPVIA, CustomerTableMap::COL_ARCUBORD, CustomerTableMap::COL_ARTBTYPECODE, CustomerTableMap::COL_ARTBPRICCODE, CustomerTableMap::COL_ARTBCOMMCODE, CustomerTableMap::COL_ARTMTERMCD, CustomerTableMap::COL_ARCUCREDLMT, CustomerTableMap::COL_ARCUSTMTCODE, CustomerTableMap::COL_ARCUCREDHOLD, CustomerTableMap::COL_ARCUFINCHRG, CustomerTableMap::COL_ARCUUSERCODE, CustomerTableMap::COL_ARCUNEWFC, CustomerTableMap::COL_ARCUUNPDFC, CustomerTableMap::COL_ARCUCURBAL, CustomerTableMap::COL_ARCUBALODUE1, CustomerTableMap::COL_ARCUBALODUE2, CustomerTableMap::COL_ARCUBALODUE3, CustomerTableMap::COL_ARCUSALEMTD, CustomerTableMap::COL_ARCUINVMTD, CustomerTableMap::COL_ARCUSALEYTD, CustomerTableMap::COL_ARCUINVYTD, CustomerTableMap::COL_ARCUDATEOPEN, CustomerTableMap::COL_ARCULASTSALEDATE, CustomerTableMap::COL_ARCUHIGHBAL, CustomerTableMap::COL_ARCUBIGSALEMO, CustomerTableMap::COL_ARCULASTPAYDATE, CustomerTableMap::COL_ARCUAVGPAYDAYS, CustomerTableMap::COL_ARCUUPSZONE, CustomerTableMap::COL_ARCUHIGHBALDATE, CustomerTableMap::COL_ARCUSALE24MO1, CustomerTableMap::COL_ARCUINV24MO1, CustomerTableMap::COL_ARCUSALE24MO2, CustomerTableMap::COL_ARCUINV24MO2, CustomerTableMap::COL_ARCUSALE24MO3, CustomerTableMap::COL_ARCUINV24MO3, CustomerTableMap::COL_ARCUSALE24MO4, CustomerTableMap::COL_ARCUINV24MO4, CustomerTableMap::COL_ARCUSALE24MO5, CustomerTableMap::COL_ARCUINV24MO5, CustomerTableMap::COL_ARCUSALE24MO6, CustomerTableMap::COL_ARCUINV24MO6, CustomerTableMap::COL_ARCUSALE24MO7, CustomerTableMap::COL_ARCUINV24MO7, CustomerTableMap::COL_ARCUSALE24MO8, CustomerTableMap::COL_ARCUINV24MO8, CustomerTableMap::COL_ARCUSALE24MO9, CustomerTableMap::COL_ARCUINV24MO9, CustomerTableMap::COL_ARCUSALE24MO10, CustomerTableMap::COL_ARCUINV24MO10, CustomerTableMap::COL_ARCUSALE24MO11, CustomerTableMap::COL_ARCUINV24MO11, CustomerTableMap::COL_ARCUSALE24MO12, CustomerTableMap::COL_ARCUINV24MO12, CustomerTableMap::COL_ARCUSALE24MO13, CustomerTableMap::COL_ARCUINV24MO13, CustomerTableMap::COL_ARCUSALE24MO14, CustomerTableMap::COL_ARCUINV24MO14, CustomerTableMap::COL_ARCUSALE24MO15, CustomerTableMap::COL_ARCUINV24MO15, CustomerTableMap::COL_ARCUSALE24MO16, CustomerTableMap::COL_ARCUINV24MO16, CustomerTableMap::COL_ARCUSALE24MO17, CustomerTableMap::COL_ARCUINV24MO17, CustomerTableMap::COL_ARCUSALE24MO18, CustomerTableMap::COL_ARCUINV24MO18, CustomerTableMap::COL_ARCUSALE24MO19, CustomerTableMap::COL_ARCUINV24MO19, CustomerTableMap::COL_ARCUSALE24MO20, CustomerTableMap::COL_ARCUINV24MO20, CustomerTableMap::COL_ARCUSALE24MO21, CustomerTableMap::COL_ARCUINV24MO21, CustomerTableMap::COL_ARCUSALE24MO22, CustomerTableMap::COL_ARCUINV24MO22, CustomerTableMap::COL_ARCUSALE24MO23, CustomerTableMap::COL_ARCUINV24MO23, CustomerTableMap::COL_ARCUSALE24MO24, CustomerTableMap::COL_ARCUINV24MO24, CustomerTableMap::COL_ARCULASTPAYAMT, CustomerTableMap::COL_ARCUORDRTOT, CustomerTableMap::COL_ARCUUSEFRTIN, CustomerTableMap::COL_ARCUMYVENDID, CustomerTableMap::COL_ARCUADDLPRICDISC, CustomerTableMap::COL_ARCUACTIVEINACTIVE, CustomerTableMap::COL_ARCUINACTIVEDATE, CustomerTableMap::COL_ARCUCHRGFRT, CustomerTableMap::COL_ARCUCOREXDAYS, CustomerTableMap::COL_ARCUCONTRACTNBR, CustomerTableMap::COL_ARCUCORELF, CustomerTableMap::COL_ARCUCOREBANKID, CustomerTableMap::COL_ARCUDUNSNBR, CustomerTableMap::COL_ARCURFMLVALU, CustomerTableMap::COL_ARCUCUSTPOPARAM, CustomerTableMap::COL_ARCUAGELEVEL, CustomerTableMap::COL_ARTBROUTE, CustomerTableMap::COL_ARCUWGTAXCODE, CustomerTableMap::COL_ARCUACPTSUPERCEDE, CustomerTableMap::COL_ARCUMSTRCUSTID, CustomerTableMap::COL_ARCUSURCHGPCT, CustomerTableMap::COL_ARCUALLOWSPLIT, CustomerTableMap::COL_ARCULINEMIN, CustomerTableMap::COL_ARCUORDRMIN, CustomerTableMap::COL_ARCUUPSACCTNBR, CustomerTableMap::COL_ARCUPRTMATCERT, CustomerTableMap::COL_ARCUFOBINPUTYN, CustomerTableMap::COL_ARCUFOBPERLB, CustomerTableMap::COL_DATEUPDTD, CustomerTableMap::COL_TIMEUPDTD, CustomerTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArcuName', 'ArcuAdr1', 'ArcuAdr2', 'ArcuAdr3', 'ArcuCtry', 'ArcuCity', 'ArcuStat', 'ArcuZipCode', 'ArcuDeliveryDays', 'ArcuRemitWhse', 'ArcuShipBin', 'ArcuAllowAddOns', 'ArcuLmEcommCustId', 'ArcuGsUse2ndBin', 'ArspSalePer1', 'ArspSalePer2', 'ArspSalePer3', 'ArtbCtaxCode', 'ArcuTaxExemNbr', 'IntbWhse', 'ArcuPricLvl', 'ArcuShipComp', 'ArcuTxbl', 'ArcuPostal', 'ArtbShipVia', 'ArcuBord', 'ArtbTypeCode', 'ArtbPricCode', 'ArtbCommCode', 'ArtmTermCd', 'ArcuCredLmt', 'ArcuStmtCode', 'ArcuCredHold', 'ArcuFinChrg', 'ArcuUserCode', 'ArcuNewFc', 'ArcuUnpdFc', 'ArcuCurBal', 'ArcuBalOdue1', 'ArcuBalOdue2', 'ArcuBalOdue3', 'ArcuSaleMtd', 'ArcuInvMtd', 'ArcuSaleYtd', 'ArcuInvYtd', 'ArcuDateOpen', 'ArcuLastSaleDate', 'ArcuHighBal', 'ArcuBigSaleMo', 'ArcuLastPayDate', 'ArcuAvgPayDays', 'ArcuUpsZone', 'ArcuHighBalDate', 'ArcuSale24mo1', 'ArcuInv24mo1', 'ArcuSale24mo2', 'ArcuInv24mo2', 'ArcuSale24mo3', 'ArcuInv24mo3', 'ArcuSale24mo4', 'ArcuInv24mo4', 'ArcuSale24mo5', 'ArcuInv24mo5', 'ArcuSale24mo6', 'ArcuInv24mo6', 'ArcuSale24mo7', 'ArcuInv24mo7', 'ArcuSale24mo8', 'ArcuInv24mo8', 'ArcuSale24mo9', 'ArcuInv24mo9', 'ArcuSale24mo10', 'ArcuInv24mo10', 'ArcuSale24mo11', 'ArcuInv24mo11', 'ArcuSale24mo12', 'ArcuInv24mo12', 'ArcuSale24mo13', 'ArcuInv24mo13', 'ArcuSale24mo14', 'ArcuInv24mo14', 'ArcuSale24mo15', 'ArcuInv24mo15', 'ArcuSale24mo16', 'ArcuInv24mo16', 'ArcuSale24mo17', 'ArcuInv24mo17', 'ArcuSale24mo18', 'ArcuInv24mo18', 'ArcuSale24mo19', 'ArcuInv24mo19', 'ArcuSale24mo20', 'ArcuInv24mo20', 'ArcuSale24mo21', 'ArcuInv24mo21', 'ArcuSale24mo22', 'ArcuInv24mo22', 'ArcuSale24mo23', 'ArcuInv24mo23', 'ArcuSale24mo24', 'ArcuInv24mo24', 'ArcuLastPayAmt', 'ArcuOrdrTot', 'ArcuUseFrtIn', 'ArcuMyVendId', 'ArcuAddlPricDisc', 'ArcuActiveInactive', 'ArcuInactiveDate', 'ArcuChrgFrt', 'ArcuCoreXDays', 'ArcuContractNbr', 'ArcuCoreLF', 'ArcuCoreBankId', 'ArcuDunsNbr', 'ArcuRfmlValu', 'ArcuCustPoParam', 'ArcuAgeLevel', 'ArtbRoute', 'ArcuWgTaxCode', 'ArcuAcptSupercede', 'ArcuMstrCustId', 'ArcuSurchgPct', 'ArcuAllowSplit', 'ArcuLineMin', 'ArcuOrdrMin', 'ArcuUpsAcctNbr', 'ArcuPrtMatCert', 'ArcuFobInputYn', 'ArcuFobPerLb', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arcuname' => 1, 'Arcuadr1' => 2, 'Arcuadr2' => 3, 'Arcuadr3' => 4, 'Arcuctry' => 5, 'Arcucity' => 6, 'Arcustat' => 7, 'Arcuzipcode' => 8, 'Arcudeliverydays' => 9, 'Arcuremitwhse' => 10, 'Arcushipbin' => 11, 'Arcuallowaddons' => 12, 'Arculmecommcustid' => 13, 'Arcugsuse2ndbin' => 14, 'Arspsaleper1' => 15, 'Arspsaleper2' => 16, 'Arspsaleper3' => 17, 'Artbctaxcode' => 18, 'Arcutaxexemnbr' => 19, 'Intbwhse' => 20, 'Arcupriclvl' => 21, 'Arcushipcomp' => 22, 'Arcutxbl' => 23, 'Arcupostal' => 24, 'Artbshipvia' => 25, 'Arcubord' => 26, 'Artbtypecode' => 27, 'Artbpriccode' => 28, 'Artbcommcode' => 29, 'Artmtermcd' => 30, 'Arcucredlmt' => 31, 'Arcustmtcode' => 32, 'Arcucredhold' => 33, 'Arcufinchrg' => 34, 'Arcuusercode' => 35, 'Arcunewfc' => 36, 'Arcuunpdfc' => 37, 'Arcucurbal' => 38, 'Arcubalodue1' => 39, 'Arcubalodue2' => 40, 'Arcubalodue3' => 41, 'Arcusalemtd' => 42, 'Arcuinvmtd' => 43, 'Arcusaleytd' => 44, 'Arcuinvytd' => 45, 'Arcudateopen' => 46, 'Arculastsaledate' => 47, 'Arcuhighbal' => 48, 'Arcubigsalemo' => 49, 'Arculastpaydate' => 50, 'Arcuavgpaydays' => 51, 'Arcuupszone' => 52, 'Arcuhighbaldate' => 53, 'Arcusale24mo1' => 54, 'Arcuinv24mo1' => 55, 'Arcusale24mo2' => 56, 'Arcuinv24mo2' => 57, 'Arcusale24mo3' => 58, 'Arcuinv24mo3' => 59, 'Arcusale24mo4' => 60, 'Arcuinv24mo4' => 61, 'Arcusale24mo5' => 62, 'Arcuinv24mo5' => 63, 'Arcusale24mo6' => 64, 'Arcuinv24mo6' => 65, 'Arcusale24mo7' => 66, 'Arcuinv24mo7' => 67, 'Arcusale24mo8' => 68, 'Arcuinv24mo8' => 69, 'Arcusale24mo9' => 70, 'Arcuinv24mo9' => 71, 'Arcusale24mo10' => 72, 'Arcuinv24mo10' => 73, 'Arcusale24mo11' => 74, 'Arcuinv24mo11' => 75, 'Arcusale24mo12' => 76, 'Arcuinv24mo12' => 77, 'Arcusale24mo13' => 78, 'Arcuinv24mo13' => 79, 'Arcusale24mo14' => 80, 'Arcuinv24mo14' => 81, 'Arcusale24mo15' => 82, 'Arcuinv24mo15' => 83, 'Arcusale24mo16' => 84, 'Arcuinv24mo16' => 85, 'Arcusale24mo17' => 86, 'Arcuinv24mo17' => 87, 'Arcusale24mo18' => 88, 'Arcuinv24mo18' => 89, 'Arcusale24mo19' => 90, 'Arcuinv24mo19' => 91, 'Arcusale24mo20' => 92, 'Arcuinv24mo20' => 93, 'Arcusale24mo21' => 94, 'Arcuinv24mo21' => 95, 'Arcusale24mo22' => 96, 'Arcuinv24mo22' => 97, 'Arcusale24mo23' => 98, 'Arcuinv24mo23' => 99, 'Arcusale24mo24' => 100, 'Arcuinv24mo24' => 101, 'Arculastpayamt' => 102, 'Arcuordrtot' => 103, 'Arcuusefrtin' => 104, 'Arcumyvendid' => 105, 'Arcuaddlpricdisc' => 106, 'Arcuactiveinactive' => 107, 'Arcuinactivedate' => 108, 'Arcuchrgfrt' => 109, 'Arcucorexdays' => 110, 'Arcucontractnbr' => 111, 'Arcucorelf' => 112, 'Arcucorebankid' => 113, 'Arcudunsnbr' => 114, 'Arcurfmlvalu' => 115, 'Arcucustpoparam' => 116, 'Arcuagelevel' => 117, 'Artbroute' => 118, 'Arcuwgtaxcode' => 119, 'Arcuacptsupercede' => 120, 'Arcumstrcustid' => 121, 'Arcusurchgpct' => 122, 'Arcuallowsplit' => 123, 'Arculinemin' => 124, 'Arcuordrmin' => 125, 'Arcuupsacctnbr' => 126, 'Arcuprtmatcert' => 127, 'Arcufobinputyn' => 128, 'Arcufobperlb' => 129, 'Dateupdtd' => 130, 'Timeupdtd' => 131, 'Dummy' => 132, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arcuname' => 1, 'arcuadr1' => 2, 'arcuadr2' => 3, 'arcuadr3' => 4, 'arcuctry' => 5, 'arcucity' => 6, 'arcustat' => 7, 'arcuzipcode' => 8, 'arcudeliverydays' => 9, 'arcuremitwhse' => 10, 'arcushipbin' => 11, 'arcuallowaddons' => 12, 'arculmecommcustid' => 13, 'arcugsuse2ndbin' => 14, 'arspsaleper1' => 15, 'arspsaleper2' => 16, 'arspsaleper3' => 17, 'artbctaxcode' => 18, 'arcutaxexemnbr' => 19, 'intbwhse' => 20, 'arcupriclvl' => 21, 'arcushipcomp' => 22, 'arcutxbl' => 23, 'arcupostal' => 24, 'artbshipvia' => 25, 'arcubord' => 26, 'artbtypecode' => 27, 'artbpriccode' => 28, 'artbcommcode' => 29, 'artmtermcd' => 30, 'arcucredlmt' => 31, 'arcustmtcode' => 32, 'arcucredhold' => 33, 'arcufinchrg' => 34, 'arcuusercode' => 35, 'arcunewfc' => 36, 'arcuunpdfc' => 37, 'arcucurbal' => 38, 'arcubalodue1' => 39, 'arcubalodue2' => 40, 'arcubalodue3' => 41, 'arcusalemtd' => 42, 'arcuinvmtd' => 43, 'arcusaleytd' => 44, 'arcuinvytd' => 45, 'arcudateopen' => 46, 'arculastsaledate' => 47, 'arcuhighbal' => 48, 'arcubigsalemo' => 49, 'arculastpaydate' => 50, 'arcuavgpaydays' => 51, 'arcuupszone' => 52, 'arcuhighbaldate' => 53, 'arcusale24mo1' => 54, 'arcuinv24mo1' => 55, 'arcusale24mo2' => 56, 'arcuinv24mo2' => 57, 'arcusale24mo3' => 58, 'arcuinv24mo3' => 59, 'arcusale24mo4' => 60, 'arcuinv24mo4' => 61, 'arcusale24mo5' => 62, 'arcuinv24mo5' => 63, 'arcusale24mo6' => 64, 'arcuinv24mo6' => 65, 'arcusale24mo7' => 66, 'arcuinv24mo7' => 67, 'arcusale24mo8' => 68, 'arcuinv24mo8' => 69, 'arcusale24mo9' => 70, 'arcuinv24mo9' => 71, 'arcusale24mo10' => 72, 'arcuinv24mo10' => 73, 'arcusale24mo11' => 74, 'arcuinv24mo11' => 75, 'arcusale24mo12' => 76, 'arcuinv24mo12' => 77, 'arcusale24mo13' => 78, 'arcuinv24mo13' => 79, 'arcusale24mo14' => 80, 'arcuinv24mo14' => 81, 'arcusale24mo15' => 82, 'arcuinv24mo15' => 83, 'arcusale24mo16' => 84, 'arcuinv24mo16' => 85, 'arcusale24mo17' => 86, 'arcuinv24mo17' => 87, 'arcusale24mo18' => 88, 'arcuinv24mo18' => 89, 'arcusale24mo19' => 90, 'arcuinv24mo19' => 91, 'arcusale24mo20' => 92, 'arcuinv24mo20' => 93, 'arcusale24mo21' => 94, 'arcuinv24mo21' => 95, 'arcusale24mo22' => 96, 'arcuinv24mo22' => 97, 'arcusale24mo23' => 98, 'arcuinv24mo23' => 99, 'arcusale24mo24' => 100, 'arcuinv24mo24' => 101, 'arculastpayamt' => 102, 'arcuordrtot' => 103, 'arcuusefrtin' => 104, 'arcumyvendid' => 105, 'arcuaddlpricdisc' => 106, 'arcuactiveinactive' => 107, 'arcuinactivedate' => 108, 'arcuchrgfrt' => 109, 'arcucorexdays' => 110, 'arcucontractnbr' => 111, 'arcucorelf' => 112, 'arcucorebankid' => 113, 'arcudunsnbr' => 114, 'arcurfmlvalu' => 115, 'arcucustpoparam' => 116, 'arcuagelevel' => 117, 'artbroute' => 118, 'arcuwgtaxcode' => 119, 'arcuacptsupercede' => 120, 'arcumstrcustid' => 121, 'arcusurchgpct' => 122, 'arcuallowsplit' => 123, 'arculinemin' => 124, 'arcuordrmin' => 125, 'arcuupsacctnbr' => 126, 'arcuprtmatcert' => 127, 'arcufobinputyn' => 128, 'arcufobperlb' => 129, 'dateupdtd' => 130, 'timeupdtd' => 131, 'dummy' => 132, ),
        self::TYPE_COLNAME       => array(CustomerTableMap::COL_ARCUCUSTID => 0, CustomerTableMap::COL_ARCUNAME => 1, CustomerTableMap::COL_ARCUADR1 => 2, CustomerTableMap::COL_ARCUADR2 => 3, CustomerTableMap::COL_ARCUADR3 => 4, CustomerTableMap::COL_ARCUCTRY => 5, CustomerTableMap::COL_ARCUCITY => 6, CustomerTableMap::COL_ARCUSTAT => 7, CustomerTableMap::COL_ARCUZIPCODE => 8, CustomerTableMap::COL_ARCUDELIVERYDAYS => 9, CustomerTableMap::COL_ARCUREMITWHSE => 10, CustomerTableMap::COL_ARCUSHIPBIN => 11, CustomerTableMap::COL_ARCUALLOWADDONS => 12, CustomerTableMap::COL_ARCULMECOMMCUSTID => 13, CustomerTableMap::COL_ARCUGSUSE2NDBIN => 14, CustomerTableMap::COL_ARSPSALEPER1 => 15, CustomerTableMap::COL_ARSPSALEPER2 => 16, CustomerTableMap::COL_ARSPSALEPER3 => 17, CustomerTableMap::COL_ARTBCTAXCODE => 18, CustomerTableMap::COL_ARCUTAXEXEMNBR => 19, CustomerTableMap::COL_INTBWHSE => 20, CustomerTableMap::COL_ARCUPRICLVL => 21, CustomerTableMap::COL_ARCUSHIPCOMP => 22, CustomerTableMap::COL_ARCUTXBL => 23, CustomerTableMap::COL_ARCUPOSTAL => 24, CustomerTableMap::COL_ARTBSHIPVIA => 25, CustomerTableMap::COL_ARCUBORD => 26, CustomerTableMap::COL_ARTBTYPECODE => 27, CustomerTableMap::COL_ARTBPRICCODE => 28, CustomerTableMap::COL_ARTBCOMMCODE => 29, CustomerTableMap::COL_ARTMTERMCD => 30, CustomerTableMap::COL_ARCUCREDLMT => 31, CustomerTableMap::COL_ARCUSTMTCODE => 32, CustomerTableMap::COL_ARCUCREDHOLD => 33, CustomerTableMap::COL_ARCUFINCHRG => 34, CustomerTableMap::COL_ARCUUSERCODE => 35, CustomerTableMap::COL_ARCUNEWFC => 36, CustomerTableMap::COL_ARCUUNPDFC => 37, CustomerTableMap::COL_ARCUCURBAL => 38, CustomerTableMap::COL_ARCUBALODUE1 => 39, CustomerTableMap::COL_ARCUBALODUE2 => 40, CustomerTableMap::COL_ARCUBALODUE3 => 41, CustomerTableMap::COL_ARCUSALEMTD => 42, CustomerTableMap::COL_ARCUINVMTD => 43, CustomerTableMap::COL_ARCUSALEYTD => 44, CustomerTableMap::COL_ARCUINVYTD => 45, CustomerTableMap::COL_ARCUDATEOPEN => 46, CustomerTableMap::COL_ARCULASTSALEDATE => 47, CustomerTableMap::COL_ARCUHIGHBAL => 48, CustomerTableMap::COL_ARCUBIGSALEMO => 49, CustomerTableMap::COL_ARCULASTPAYDATE => 50, CustomerTableMap::COL_ARCUAVGPAYDAYS => 51, CustomerTableMap::COL_ARCUUPSZONE => 52, CustomerTableMap::COL_ARCUHIGHBALDATE => 53, CustomerTableMap::COL_ARCUSALE24MO1 => 54, CustomerTableMap::COL_ARCUINV24MO1 => 55, CustomerTableMap::COL_ARCUSALE24MO2 => 56, CustomerTableMap::COL_ARCUINV24MO2 => 57, CustomerTableMap::COL_ARCUSALE24MO3 => 58, CustomerTableMap::COL_ARCUINV24MO3 => 59, CustomerTableMap::COL_ARCUSALE24MO4 => 60, CustomerTableMap::COL_ARCUINV24MO4 => 61, CustomerTableMap::COL_ARCUSALE24MO5 => 62, CustomerTableMap::COL_ARCUINV24MO5 => 63, CustomerTableMap::COL_ARCUSALE24MO6 => 64, CustomerTableMap::COL_ARCUINV24MO6 => 65, CustomerTableMap::COL_ARCUSALE24MO7 => 66, CustomerTableMap::COL_ARCUINV24MO7 => 67, CustomerTableMap::COL_ARCUSALE24MO8 => 68, CustomerTableMap::COL_ARCUINV24MO8 => 69, CustomerTableMap::COL_ARCUSALE24MO9 => 70, CustomerTableMap::COL_ARCUINV24MO9 => 71, CustomerTableMap::COL_ARCUSALE24MO10 => 72, CustomerTableMap::COL_ARCUINV24MO10 => 73, CustomerTableMap::COL_ARCUSALE24MO11 => 74, CustomerTableMap::COL_ARCUINV24MO11 => 75, CustomerTableMap::COL_ARCUSALE24MO12 => 76, CustomerTableMap::COL_ARCUINV24MO12 => 77, CustomerTableMap::COL_ARCUSALE24MO13 => 78, CustomerTableMap::COL_ARCUINV24MO13 => 79, CustomerTableMap::COL_ARCUSALE24MO14 => 80, CustomerTableMap::COL_ARCUINV24MO14 => 81, CustomerTableMap::COL_ARCUSALE24MO15 => 82, CustomerTableMap::COL_ARCUINV24MO15 => 83, CustomerTableMap::COL_ARCUSALE24MO16 => 84, CustomerTableMap::COL_ARCUINV24MO16 => 85, CustomerTableMap::COL_ARCUSALE24MO17 => 86, CustomerTableMap::COL_ARCUINV24MO17 => 87, CustomerTableMap::COL_ARCUSALE24MO18 => 88, CustomerTableMap::COL_ARCUINV24MO18 => 89, CustomerTableMap::COL_ARCUSALE24MO19 => 90, CustomerTableMap::COL_ARCUINV24MO19 => 91, CustomerTableMap::COL_ARCUSALE24MO20 => 92, CustomerTableMap::COL_ARCUINV24MO20 => 93, CustomerTableMap::COL_ARCUSALE24MO21 => 94, CustomerTableMap::COL_ARCUINV24MO21 => 95, CustomerTableMap::COL_ARCUSALE24MO22 => 96, CustomerTableMap::COL_ARCUINV24MO22 => 97, CustomerTableMap::COL_ARCUSALE24MO23 => 98, CustomerTableMap::COL_ARCUINV24MO23 => 99, CustomerTableMap::COL_ARCUSALE24MO24 => 100, CustomerTableMap::COL_ARCUINV24MO24 => 101, CustomerTableMap::COL_ARCULASTPAYAMT => 102, CustomerTableMap::COL_ARCUORDRTOT => 103, CustomerTableMap::COL_ARCUUSEFRTIN => 104, CustomerTableMap::COL_ARCUMYVENDID => 105, CustomerTableMap::COL_ARCUADDLPRICDISC => 106, CustomerTableMap::COL_ARCUACTIVEINACTIVE => 107, CustomerTableMap::COL_ARCUINACTIVEDATE => 108, CustomerTableMap::COL_ARCUCHRGFRT => 109, CustomerTableMap::COL_ARCUCOREXDAYS => 110, CustomerTableMap::COL_ARCUCONTRACTNBR => 111, CustomerTableMap::COL_ARCUCORELF => 112, CustomerTableMap::COL_ARCUCOREBANKID => 113, CustomerTableMap::COL_ARCUDUNSNBR => 114, CustomerTableMap::COL_ARCURFMLVALU => 115, CustomerTableMap::COL_ARCUCUSTPOPARAM => 116, CustomerTableMap::COL_ARCUAGELEVEL => 117, CustomerTableMap::COL_ARTBROUTE => 118, CustomerTableMap::COL_ARCUWGTAXCODE => 119, CustomerTableMap::COL_ARCUACPTSUPERCEDE => 120, CustomerTableMap::COL_ARCUMSTRCUSTID => 121, CustomerTableMap::COL_ARCUSURCHGPCT => 122, CustomerTableMap::COL_ARCUALLOWSPLIT => 123, CustomerTableMap::COL_ARCULINEMIN => 124, CustomerTableMap::COL_ARCUORDRMIN => 125, CustomerTableMap::COL_ARCUUPSACCTNBR => 126, CustomerTableMap::COL_ARCUPRTMATCERT => 127, CustomerTableMap::COL_ARCUFOBINPUTYN => 128, CustomerTableMap::COL_ARCUFOBPERLB => 129, CustomerTableMap::COL_DATEUPDTD => 130, CustomerTableMap::COL_TIMEUPDTD => 131, CustomerTableMap::COL_DUMMY => 132, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArcuName' => 1, 'ArcuAdr1' => 2, 'ArcuAdr2' => 3, 'ArcuAdr3' => 4, 'ArcuCtry' => 5, 'ArcuCity' => 6, 'ArcuStat' => 7, 'ArcuZipCode' => 8, 'ArcuDeliveryDays' => 9, 'ArcuRemitWhse' => 10, 'ArcuShipBin' => 11, 'ArcuAllowAddOns' => 12, 'ArcuLmEcommCustId' => 13, 'ArcuGsUse2ndBin' => 14, 'ArspSalePer1' => 15, 'ArspSalePer2' => 16, 'ArspSalePer3' => 17, 'ArtbCtaxCode' => 18, 'ArcuTaxExemNbr' => 19, 'IntbWhse' => 20, 'ArcuPricLvl' => 21, 'ArcuShipComp' => 22, 'ArcuTxbl' => 23, 'ArcuPostal' => 24, 'ArtbShipVia' => 25, 'ArcuBord' => 26, 'ArtbTypeCode' => 27, 'ArtbPricCode' => 28, 'ArtbCommCode' => 29, 'ArtmTermCd' => 30, 'ArcuCredLmt' => 31, 'ArcuStmtCode' => 32, 'ArcuCredHold' => 33, 'ArcuFinChrg' => 34, 'ArcuUserCode' => 35, 'ArcuNewFc' => 36, 'ArcuUnpdFc' => 37, 'ArcuCurBal' => 38, 'ArcuBalOdue1' => 39, 'ArcuBalOdue2' => 40, 'ArcuBalOdue3' => 41, 'ArcuSaleMtd' => 42, 'ArcuInvMtd' => 43, 'ArcuSaleYtd' => 44, 'ArcuInvYtd' => 45, 'ArcuDateOpen' => 46, 'ArcuLastSaleDate' => 47, 'ArcuHighBal' => 48, 'ArcuBigSaleMo' => 49, 'ArcuLastPayDate' => 50, 'ArcuAvgPayDays' => 51, 'ArcuUpsZone' => 52, 'ArcuHighBalDate' => 53, 'ArcuSale24mo1' => 54, 'ArcuInv24mo1' => 55, 'ArcuSale24mo2' => 56, 'ArcuInv24mo2' => 57, 'ArcuSale24mo3' => 58, 'ArcuInv24mo3' => 59, 'ArcuSale24mo4' => 60, 'ArcuInv24mo4' => 61, 'ArcuSale24mo5' => 62, 'ArcuInv24mo5' => 63, 'ArcuSale24mo6' => 64, 'ArcuInv24mo6' => 65, 'ArcuSale24mo7' => 66, 'ArcuInv24mo7' => 67, 'ArcuSale24mo8' => 68, 'ArcuInv24mo8' => 69, 'ArcuSale24mo9' => 70, 'ArcuInv24mo9' => 71, 'ArcuSale24mo10' => 72, 'ArcuInv24mo10' => 73, 'ArcuSale24mo11' => 74, 'ArcuInv24mo11' => 75, 'ArcuSale24mo12' => 76, 'ArcuInv24mo12' => 77, 'ArcuSale24mo13' => 78, 'ArcuInv24mo13' => 79, 'ArcuSale24mo14' => 80, 'ArcuInv24mo14' => 81, 'ArcuSale24mo15' => 82, 'ArcuInv24mo15' => 83, 'ArcuSale24mo16' => 84, 'ArcuInv24mo16' => 85, 'ArcuSale24mo17' => 86, 'ArcuInv24mo17' => 87, 'ArcuSale24mo18' => 88, 'ArcuInv24mo18' => 89, 'ArcuSale24mo19' => 90, 'ArcuInv24mo19' => 91, 'ArcuSale24mo20' => 92, 'ArcuInv24mo20' => 93, 'ArcuSale24mo21' => 94, 'ArcuInv24mo21' => 95, 'ArcuSale24mo22' => 96, 'ArcuInv24mo22' => 97, 'ArcuSale24mo23' => 98, 'ArcuInv24mo23' => 99, 'ArcuSale24mo24' => 100, 'ArcuInv24mo24' => 101, 'ArcuLastPayAmt' => 102, 'ArcuOrdrTot' => 103, 'ArcuUseFrtIn' => 104, 'ArcuMyVendId' => 105, 'ArcuAddlPricDisc' => 106, 'ArcuActiveInactive' => 107, 'ArcuInactiveDate' => 108, 'ArcuChrgFrt' => 109, 'ArcuCoreXDays' => 110, 'ArcuContractNbr' => 111, 'ArcuCoreLF' => 112, 'ArcuCoreBankId' => 113, 'ArcuDunsNbr' => 114, 'ArcuRfmlValu' => 115, 'ArcuCustPoParam' => 116, 'ArcuAgeLevel' => 117, 'ArtbRoute' => 118, 'ArcuWgTaxCode' => 119, 'ArcuAcptSupercede' => 120, 'ArcuMstrCustId' => 121, 'ArcuSurchgPct' => 122, 'ArcuAllowSplit' => 123, 'ArcuLineMin' => 124, 'ArcuOrdrMin' => 125, 'ArcuUpsAcctNbr' => 126, 'ArcuPrtMatCert' => 127, 'ArcuFobInputYn' => 128, 'ArcuFobPerLb' => 129, 'DateUpdtd' => 130, 'TimeUpdtd' => 131, 'dummy' => 132, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, )
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
        $this->setName('ar_cust_mast');
        $this->setPhpName('Customer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Customer');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR', true, 6, '');
        $this->addColumn('ArcuName', 'Arcuname', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuAdr1', 'Arcuadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuAdr2', 'Arcuadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuAdr3', 'Arcuadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuCtry', 'Arcuctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuCity', 'Arcucity', 'VARCHAR', false, 16, null);
        $this->addColumn('ArcuStat', 'Arcustat', 'VARCHAR', false, 2, null);
        $this->addColumn('ArcuZipCode', 'Arcuzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('ArcuDeliveryDays', 'Arcudeliverydays', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuRemitWhse', 'Arcuremitwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ArcuShipBin', 'Arcushipbin', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcuAllowAddOns', 'Arcuallowaddons', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuLmEcommCustId', 'Arculmecommcustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuGsUse2ndBin', 'Arcugsuse2ndbin', 'VARCHAR', false, 1, null);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode', 'Artbctaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuTaxExemNbr', 'Arcutaxexemnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ArcuPricLvl', 'Arcupriclvl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuShipComp', 'Arcushipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuTxbl', 'Arcutxbl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuPostal', 'Arcupostal', 'VARCHAR', false, 1, null);
        $this->addForeignKey('ArtbShipVia', 'Artbshipvia', 'VARCHAR', 'ar_cust_svia', 'ArtbShipVia', false, 4, null);
        $this->addColumn('ArcuBord', 'Arcubord', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbTypeCode', 'Artbtypecode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbPricCode', 'Artbpriccode', 'VARCHAR', false, 4, null);
        $this->addForeignKey('ArtbCommCode', 'Artbcommcode', 'VARCHAR', 'ar_cust_comm', 'ArtbCommCode', false, 4, null);
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuCredLmt', 'Arcucredlmt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuStmtCode', 'Arcustmtcode', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCredHold', 'Arcucredhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuFinChrg', 'Arcufinchrg', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuUserCode', 'Arcuusercode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuNewFc', 'Arcunewfc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuUnpdFc', 'Arcuunpdfc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuCurBal', 'Arcucurbal', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBalOdue1', 'Arcubalodue1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBalOdue2', 'Arcubalodue2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBalOdue3', 'Arcubalodue3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuSaleMtd', 'Arcusalemtd', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInvMtd', 'Arcuinvmtd', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSaleYtd', 'Arcusaleytd', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInvYtd', 'Arcuinvytd', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuDateOpen', 'Arcudateopen', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcuLastSaleDate', 'Arculastsaledate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcuHighBal', 'Arcuhighbal', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBigSaleMo', 'Arcubigsalemo', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuLastPayDate', 'Arculastpaydate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcuAvgPayDays', 'Arcuavgpaydays', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuUpsZone', 'Arcuupszone', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuHighBalDate', 'Arcuhighbaldate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcuSale24mo1', 'Arcusale24mo1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo1', 'Arcuinv24mo1', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo2', 'Arcusale24mo2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo2', 'Arcuinv24mo2', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo3', 'Arcusale24mo3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo3', 'Arcuinv24mo3', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo4', 'Arcusale24mo4', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo4', 'Arcuinv24mo4', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo5', 'Arcusale24mo5', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo5', 'Arcuinv24mo5', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo6', 'Arcusale24mo6', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo6', 'Arcuinv24mo6', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo7', 'Arcusale24mo7', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo7', 'Arcuinv24mo7', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo8', 'Arcusale24mo8', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo8', 'Arcuinv24mo8', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo9', 'Arcusale24mo9', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo9', 'Arcuinv24mo9', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo10', 'Arcusale24mo10', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo10', 'Arcuinv24mo10', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo11', 'Arcusale24mo11', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo11', 'Arcuinv24mo11', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo12', 'Arcusale24mo12', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo12', 'Arcuinv24mo12', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo13', 'Arcusale24mo13', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo13', 'Arcuinv24mo13', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo14', 'Arcusale24mo14', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo14', 'Arcuinv24mo14', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo15', 'Arcusale24mo15', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo15', 'Arcuinv24mo15', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo16', 'Arcusale24mo16', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo16', 'Arcuinv24mo16', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo17', 'Arcusale24mo17', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo17', 'Arcuinv24mo17', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo18', 'Arcusale24mo18', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo18', 'Arcuinv24mo18', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo19', 'Arcusale24mo19', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo19', 'Arcuinv24mo19', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo20', 'Arcusale24mo20', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo20', 'Arcuinv24mo20', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo21', 'Arcusale24mo21', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo21', 'Arcuinv24mo21', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo22', 'Arcusale24mo22', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo22', 'Arcuinv24mo22', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo23', 'Arcusale24mo23', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo23', 'Arcuinv24mo23', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo24', 'Arcusale24mo24', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo24', 'Arcuinv24mo24', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuLastPayAmt', 'Arculastpayamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuOrdrTot', 'Arcuordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuUseFrtIn', 'Arcuusefrtin', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuMyVendId', 'Arcumyvendid', 'VARCHAR', false, 12, null);
        $this->addColumn('ArcuAddlPricDisc', 'Arcuaddlpricdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuActiveInactive', 'Arcuactiveinactive', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuInactiveDate', 'Arcuinactivedate', 'VARCHAR', false, 8, null);
        $this->addForeignKey('ArcuChrgFrt', 'Arcuchrgfrt', 'VARCHAR', 'so_frtrate', 'SfrtRateCode', false, 1, null);
        $this->addColumn('ArcuCoreXDays', 'Arcucorexdays', 'INTEGER', false, 6, null);
        $this->addColumn('ArcuContractNbr', 'Arcucontractnbr', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuCoreLF', 'Arcucorelf', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCoreBankId', 'Arcucorebankid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuDunsNbr', 'Arcudunsnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('ArcuRfmlValu', 'Arcurfmlvalu', 'INTEGER', false, 3, null);
        $this->addColumn('ArcuCustPoParam', 'Arcucustpoparam', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuAgeLevel', 'Arcuagelevel', 'INTEGER', false, 1, null);
        $this->addColumn('ArtbRoute', 'Artbroute', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuWgTaxCode', 'Arcuwgtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuAcptSupercede', 'Arcuacptsupercede', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuMstrCustId', 'Arcumstrcustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuSurchgPct', 'Arcusurchgpct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuAllowSplit', 'Arcuallowsplit', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuLineMin', 'Arculinemin', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuOrdrMin', 'Arcuordrmin', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuUpsAcctNbr', 'Arcuupsacctnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('ArcuPrtMatCert', 'Arcuprtmatcert', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuFobInputYn', 'Arcufobinputyn', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuFobPerLb', 'Arcufobperlb', 'DECIMAL', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ArCommissionCode', '\\ArCommissionCode', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArtbCommCode',
    1 => ':ArtbCommCode',
  ),
), null, null, null, false);
        $this->addRelation('Shipvia', '\\Shipvia', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArtbShipVia',
    1 => ':ArtbShipVia',
  ),
), null, null, null, false);
        $this->addRelation('SoFreightRate', '\\SoFreightRate', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuChrgFrt',
    1 => ':SfrtRateCode',
  ),
), null, null, null, false);
        $this->addRelation('ArCust3partyFreight', '\\ArCust3partyFreight', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ArCust3partyFreights', false);
        $this->addRelation('ArPaymentPending', '\\ArPaymentPending', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ArPaymentPendings', false);
        $this->addRelation('ArCashHead', '\\ArCashHead', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('ArContact', '\\ArContact', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ArContacts', false);
        $this->addRelation('ArInvoice', '\\ArInvoice', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ArInvoices', false);
        $this->addRelation('CustomerShipto', '\\CustomerShipto', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'CustomerShiptos', false);
        $this->addRelation('InvSerialWarranty', '\\InvSerialWarranty', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'InvSerialWarranties', false);
        $this->addRelation('ItemXrefCustomerNote', '\\ItemXrefCustomerNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ItemXrefCustomerNotes', false);
        $this->addRelation('BookingDayCustomer', '\\BookingDayCustomer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'BookingDayCustomers', false);
        $this->addRelation('BookingDayDetail', '\\BookingDayDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'BookingDayDetails', false);
        $this->addRelation('Booking', '\\Booking', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'Bookings', false);
        $this->addRelation('SalesHistory', '\\SalesHistory', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'SalesHistories', false);
        $this->addRelation('SalesOrder', '\\SalesOrder', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'SalesOrders', false);
        $this->addRelation('ItemPricingDiscount', '\\ItemPricingDiscount', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OepcCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ItemPricingDiscounts', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CustomerTableMap::CLASS_DEFAULT : CustomerTableMap::OM_CLASS;
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
     * @return array           (Customer object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CustomerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CustomerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CustomerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CustomerTableMap::OM_CLASS;
            /** @var Customer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CustomerTableMap::addInstanceToPool($obj, $key);
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
            $key = CustomerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CustomerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Customer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CustomerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUNAME);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUADR1);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUADR2);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUADR3);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCTRY);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCITY);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSTAT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUZIPCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUDELIVERYDAYS);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUREMITWHSE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSHIPBIN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUALLOWADDONS);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCULMECOMMCUSTID);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUGSUSE2NDBIN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTBCTAXCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUTAXEXEMNBR);
            $criteria->addSelectColumn(CustomerTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUPRICLVL);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSHIPCOMP);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUTXBL);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUPOSTAL);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUBORD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTBTYPECODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTBPRICCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTBCOMMCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCREDLMT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSTMTCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCREDHOLD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUFINCHRG);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUUSERCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUNEWFC);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUUNPDFC);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCURBAL);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUBALODUE1);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUBALODUE2);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUBALODUE3);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALEMTD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINVMTD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALEYTD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINVYTD);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUDATEOPEN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCULASTSALEDATE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUHIGHBAL);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUBIGSALEMO);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCULASTPAYDATE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUAVGPAYDAYS);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUUPSZONE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUHIGHBALDATE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO1);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO1);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO2);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO2);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO3);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO3);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO4);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO4);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO5);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO5);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO6);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO6);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO7);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO7);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO8);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO8);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO9);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO9);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO10);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO10);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO11);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO11);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO12);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO12);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO13);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO13);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO14);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO14);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO15);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO15);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO16);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO16);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO17);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO17);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO18);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO18);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO19);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO19);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO20);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO20);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO21);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO21);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO22);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO22);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO23);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO23);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSALE24MO24);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINV24MO24);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCULASTPAYAMT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUORDRTOT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUUSEFRTIN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUMYVENDID);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUADDLPRICDISC);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUACTIVEINACTIVE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUINACTIVEDATE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCHRGFRT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCOREXDAYS);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCONTRACTNBR);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCORELF);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCOREBANKID);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUDUNSNBR);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCURFMLVALU);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUCUSTPOPARAM);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUAGELEVEL);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARTBROUTE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUWGTAXCODE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUACPTSUPERCEDE);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUMSTRCUSTID);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUSURCHGPCT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUALLOWSPLIT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCULINEMIN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUORDRMIN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUUPSACCTNBR);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUPRTMATCERT);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUFOBINPUTYN);
            $criteria->addSelectColumn(CustomerTableMap::COL_ARCUFOBPERLB);
            $criteria->addSelectColumn(CustomerTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CustomerTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CustomerTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArcuName');
            $criteria->addSelectColumn($alias . '.ArcuAdr1');
            $criteria->addSelectColumn($alias . '.ArcuAdr2');
            $criteria->addSelectColumn($alias . '.ArcuAdr3');
            $criteria->addSelectColumn($alias . '.ArcuCtry');
            $criteria->addSelectColumn($alias . '.ArcuCity');
            $criteria->addSelectColumn($alias . '.ArcuStat');
            $criteria->addSelectColumn($alias . '.ArcuZipCode');
            $criteria->addSelectColumn($alias . '.ArcuDeliveryDays');
            $criteria->addSelectColumn($alias . '.ArcuRemitWhse');
            $criteria->addSelectColumn($alias . '.ArcuShipBin');
            $criteria->addSelectColumn($alias . '.ArcuAllowAddOns');
            $criteria->addSelectColumn($alias . '.ArcuLmEcommCustId');
            $criteria->addSelectColumn($alias . '.ArcuGsUse2ndBin');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->addSelectColumn($alias . '.ArcuTaxExemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.ArcuPricLvl');
            $criteria->addSelectColumn($alias . '.ArcuShipComp');
            $criteria->addSelectColumn($alias . '.ArcuTxbl');
            $criteria->addSelectColumn($alias . '.ArcuPostal');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArcuBord');
            $criteria->addSelectColumn($alias . '.ArtbTypeCode');
            $criteria->addSelectColumn($alias . '.ArtbPricCode');
            $criteria->addSelectColumn($alias . '.ArtbCommCode');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArcuCredLmt');
            $criteria->addSelectColumn($alias . '.ArcuStmtCode');
            $criteria->addSelectColumn($alias . '.ArcuCredHold');
            $criteria->addSelectColumn($alias . '.ArcuFinChrg');
            $criteria->addSelectColumn($alias . '.ArcuUserCode');
            $criteria->addSelectColumn($alias . '.ArcuNewFc');
            $criteria->addSelectColumn($alias . '.ArcuUnpdFc');
            $criteria->addSelectColumn($alias . '.ArcuCurBal');
            $criteria->addSelectColumn($alias . '.ArcuBalOdue1');
            $criteria->addSelectColumn($alias . '.ArcuBalOdue2');
            $criteria->addSelectColumn($alias . '.ArcuBalOdue3');
            $criteria->addSelectColumn($alias . '.ArcuSaleMtd');
            $criteria->addSelectColumn($alias . '.ArcuInvMtd');
            $criteria->addSelectColumn($alias . '.ArcuSaleYtd');
            $criteria->addSelectColumn($alias . '.ArcuInvYtd');
            $criteria->addSelectColumn($alias . '.ArcuDateOpen');
            $criteria->addSelectColumn($alias . '.ArcuLastSaleDate');
            $criteria->addSelectColumn($alias . '.ArcuHighBal');
            $criteria->addSelectColumn($alias . '.ArcuBigSaleMo');
            $criteria->addSelectColumn($alias . '.ArcuLastPayDate');
            $criteria->addSelectColumn($alias . '.ArcuAvgPayDays');
            $criteria->addSelectColumn($alias . '.ArcuUpsZone');
            $criteria->addSelectColumn($alias . '.ArcuHighBalDate');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo1');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo1');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo2');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo2');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo3');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo3');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo4');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo4');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo5');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo5');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo6');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo6');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo7');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo7');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo8');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo8');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo9');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo9');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo10');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo10');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo11');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo11');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo12');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo12');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo13');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo13');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo14');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo14');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo15');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo15');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo16');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo16');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo17');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo17');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo18');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo18');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo19');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo19');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo20');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo20');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo21');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo21');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo22');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo22');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo23');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo23');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo24');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo24');
            $criteria->addSelectColumn($alias . '.ArcuLastPayAmt');
            $criteria->addSelectColumn($alias . '.ArcuOrdrTot');
            $criteria->addSelectColumn($alias . '.ArcuUseFrtIn');
            $criteria->addSelectColumn($alias . '.ArcuMyVendId');
            $criteria->addSelectColumn($alias . '.ArcuAddlPricDisc');
            $criteria->addSelectColumn($alias . '.ArcuActiveInactive');
            $criteria->addSelectColumn($alias . '.ArcuInactiveDate');
            $criteria->addSelectColumn($alias . '.ArcuChrgFrt');
            $criteria->addSelectColumn($alias . '.ArcuCoreXDays');
            $criteria->addSelectColumn($alias . '.ArcuContractNbr');
            $criteria->addSelectColumn($alias . '.ArcuCoreLF');
            $criteria->addSelectColumn($alias . '.ArcuCoreBankId');
            $criteria->addSelectColumn($alias . '.ArcuDunsNbr');
            $criteria->addSelectColumn($alias . '.ArcuRfmlValu');
            $criteria->addSelectColumn($alias . '.ArcuCustPoParam');
            $criteria->addSelectColumn($alias . '.ArcuAgeLevel');
            $criteria->addSelectColumn($alias . '.ArtbRoute');
            $criteria->addSelectColumn($alias . '.ArcuWgTaxCode');
            $criteria->addSelectColumn($alias . '.ArcuAcptSupercede');
            $criteria->addSelectColumn($alias . '.ArcuMstrCustId');
            $criteria->addSelectColumn($alias . '.ArcuSurchgPct');
            $criteria->addSelectColumn($alias . '.ArcuAllowSplit');
            $criteria->addSelectColumn($alias . '.ArcuLineMin');
            $criteria->addSelectColumn($alias . '.ArcuOrdrMin');
            $criteria->addSelectColumn($alias . '.ArcuUpsAcctNbr');
            $criteria->addSelectColumn($alias . '.ArcuPrtMatCert');
            $criteria->addSelectColumn($alias . '.ArcuFobInputYn');
            $criteria->addSelectColumn($alias . '.ArcuFobPerLb');
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
        return Propel::getServiceContainer()->getDatabaseMap(CustomerTableMap::DATABASE_NAME)->getTable(CustomerTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CustomerTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CustomerTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CustomerTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Customer or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Customer object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Customer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CustomerTableMap::DATABASE_NAME);
            $criteria->add(CustomerTableMap::COL_ARCUCUSTID, (array) $values, Criteria::IN);
        }

        $query = CustomerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CustomerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CustomerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CustomerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Customer or Criteria object.
     *
     * @param mixed               $criteria Criteria or Customer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Customer object
        }


        // Set the correct dbName
        $query = CustomerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CustomerTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CustomerTableMap::buildTableMap();
