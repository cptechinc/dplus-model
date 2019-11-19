<?php

namespace Map;

use \CustomerShipto;
use \CustomerShiptoQuery;
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
 * This class defines the structure of the 'ar_ship_to' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CustomerShiptoTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CustomerShiptoTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_ship_to';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CustomerShipto';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CustomerShipto';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 100;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 100;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'ar_ship_to.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'ar_ship_to.ArstShipId';

    /**
     * the column name for the ArstName field
     */
    const COL_ARSTNAME = 'ar_ship_to.ArstName';

    /**
     * the column name for the ArstAdr1 field
     */
    const COL_ARSTADR1 = 'ar_ship_to.ArstAdr1';

    /**
     * the column name for the ArstAdr2 field
     */
    const COL_ARSTADR2 = 'ar_ship_to.ArstAdr2';

    /**
     * the column name for the ArstAdr3 field
     */
    const COL_ARSTADR3 = 'ar_ship_to.ArstAdr3';

    /**
     * the column name for the ArstCtry field
     */
    const COL_ARSTCTRY = 'ar_ship_to.ArstCtry';

    /**
     * the column name for the ArstCity field
     */
    const COL_ARSTCITY = 'ar_ship_to.ArstCity';

    /**
     * the column name for the ArstStat field
     */
    const COL_ARSTSTAT = 'ar_ship_to.ArstStat';

    /**
     * the column name for the ArstZipCode field
     */
    const COL_ARSTZIPCODE = 'ar_ship_to.ArstZipCode';

    /**
     * the column name for the ArstDeliveryDays field
     */
    const COL_ARSTDELIVERYDAYS = 'ar_ship_to.ArstDeliveryDays';

    /**
     * the column name for the ArstCommCode field
     */
    const COL_ARSTCOMMCODE = 'ar_ship_to.ArstCommCode';

    /**
     * the column name for the ArstAllowSplit field
     */
    const COL_ARSTALLOWSPLIT = 'ar_ship_to.ArstAllowSplit';

    /**
     * the column name for the ArstLindstSp field
     */
    const COL_ARSTLINDSTSP = 'ar_ship_to.ArstLindstSp';

    /**
     * the column name for the ArstLmEcommCustId field
     */
    const COL_ARSTLMECOMMCUSTID = 'ar_ship_to.ArstLmEcommCustId';

    /**
     * the column name for the ArstCatlgId field
     */
    const COL_ARSTCATLGID = 'ar_ship_to.ArstCatlgId';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'ar_ship_to.ArspSalePer1';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'ar_ship_to.ArspSalePer2';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'ar_ship_to.ArspSalePer3';

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'ar_ship_to.ArtbMtaxCode';

    /**
     * the column name for the ArstTaxExemNbr field
     */
    const COL_ARSTTAXEXEMNBR = 'ar_ship_to.ArstTaxExemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'ar_ship_to.IntbWhse';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'ar_ship_to.ArtbShipVia';

    /**
     * the column name for the ArstBord field
     */
    const COL_ARSTBORD = 'ar_ship_to.ArstBord';

    /**
     * the column name for the ArstCredHold field
     */
    const COL_ARSTCREDHOLD = 'ar_ship_to.ArstCredHold';

    /**
     * the column name for the ArstUserCode field
     */
    const COL_ARSTUSERCODE = 'ar_ship_to.ArstUserCode';

    /**
     * the column name for the ArstPricLvl field
     */
    const COL_ARSTPRICLVL = 'ar_ship_to.ArstPricLvl';

    /**
     * the column name for the ArstShipComp field
     */
    const COL_ARSTSHIPCOMP = 'ar_ship_to.ArstShipComp';

    /**
     * the column name for the ArstTxbl field
     */
    const COL_ARSTTXBL = 'ar_ship_to.ArstTxbl';

    /**
     * the column name for the ArstPostal field
     */
    const COL_ARSTPOSTAL = 'ar_ship_to.ArstPostal';

    /**
     * the column name for the ArstSaleMtd field
     */
    const COL_ARSTSALEMTD = 'ar_ship_to.ArstSaleMtd';

    /**
     * the column name for the ArstInvMtd field
     */
    const COL_ARSTINVMTD = 'ar_ship_to.ArstInvMtd';

    /**
     * the column name for the ArstDateOpen field
     */
    const COL_ARSTDATEOPEN = 'ar_ship_to.ArstDateOpen';

    /**
     * the column name for the ArstLastSaleDate field
     */
    const COL_ARSTLASTSALEDATE = 'ar_ship_to.ArstLastSaleDate';

    /**
     * the column name for the ArstSale24mo1 field
     */
    const COL_ARSTSALE24MO1 = 'ar_ship_to.ArstSale24mo1';

    /**
     * the column name for the ArstInv24mo1 field
     */
    const COL_ARSTINV24MO1 = 'ar_ship_to.ArstInv24mo1';

    /**
     * the column name for the ArstSale24mo2 field
     */
    const COL_ARSTSALE24MO2 = 'ar_ship_to.ArstSale24mo2';

    /**
     * the column name for the ArstInv24mo2 field
     */
    const COL_ARSTINV24MO2 = 'ar_ship_to.ArstInv24mo2';

    /**
     * the column name for the ArstSale24mo3 field
     */
    const COL_ARSTSALE24MO3 = 'ar_ship_to.ArstSale24mo3';

    /**
     * the column name for the ArstInv24mo3 field
     */
    const COL_ARSTINV24MO3 = 'ar_ship_to.ArstInv24mo3';

    /**
     * the column name for the ArstSale24mo4 field
     */
    const COL_ARSTSALE24MO4 = 'ar_ship_to.ArstSale24mo4';

    /**
     * the column name for the ArstInv24mo4 field
     */
    const COL_ARSTINV24MO4 = 'ar_ship_to.ArstInv24mo4';

    /**
     * the column name for the ArstSale24mo5 field
     */
    const COL_ARSTSALE24MO5 = 'ar_ship_to.ArstSale24mo5';

    /**
     * the column name for the ArstInv24mo5 field
     */
    const COL_ARSTINV24MO5 = 'ar_ship_to.ArstInv24mo5';

    /**
     * the column name for the ArstSale24mo6 field
     */
    const COL_ARSTSALE24MO6 = 'ar_ship_to.ArstSale24mo6';

    /**
     * the column name for the ArstInv24mo6 field
     */
    const COL_ARSTINV24MO6 = 'ar_ship_to.ArstInv24mo6';

    /**
     * the column name for the ArstSale24mo7 field
     */
    const COL_ARSTSALE24MO7 = 'ar_ship_to.ArstSale24mo7';

    /**
     * the column name for the ArstInv24mo7 field
     */
    const COL_ARSTINV24MO7 = 'ar_ship_to.ArstInv24mo7';

    /**
     * the column name for the ArstSale24mo8 field
     */
    const COL_ARSTSALE24MO8 = 'ar_ship_to.ArstSale24mo8';

    /**
     * the column name for the ArstInv24mo8 field
     */
    const COL_ARSTINV24MO8 = 'ar_ship_to.ArstInv24mo8';

    /**
     * the column name for the ArstSale24mo9 field
     */
    const COL_ARSTSALE24MO9 = 'ar_ship_to.ArstSale24mo9';

    /**
     * the column name for the ArstInv24mo9 field
     */
    const COL_ARSTINV24MO9 = 'ar_ship_to.ArstInv24mo9';

    /**
     * the column name for the ArstSale24mo10 field
     */
    const COL_ARSTSALE24MO10 = 'ar_ship_to.ArstSale24mo10';

    /**
     * the column name for the ArstInv24mo10 field
     */
    const COL_ARSTINV24MO10 = 'ar_ship_to.ArstInv24mo10';

    /**
     * the column name for the ArstSale24mo11 field
     */
    const COL_ARSTSALE24MO11 = 'ar_ship_to.ArstSale24mo11';

    /**
     * the column name for the ArstInv24mo11 field
     */
    const COL_ARSTINV24MO11 = 'ar_ship_to.ArstInv24mo11';

    /**
     * the column name for the ArstSale24mo12 field
     */
    const COL_ARSTSALE24MO12 = 'ar_ship_to.ArstSale24mo12';

    /**
     * the column name for the ArstInv24mo12 field
     */
    const COL_ARSTINV24MO12 = 'ar_ship_to.ArstInv24mo12';

    /**
     * the column name for the ArstSale24mo13 field
     */
    const COL_ARSTSALE24MO13 = 'ar_ship_to.ArstSale24mo13';

    /**
     * the column name for the ArstInv24mo13 field
     */
    const COL_ARSTINV24MO13 = 'ar_ship_to.ArstInv24mo13';

    /**
     * the column name for the ArstSale24mo14 field
     */
    const COL_ARSTSALE24MO14 = 'ar_ship_to.ArstSale24mo14';

    /**
     * the column name for the ArstInv24mo14 field
     */
    const COL_ARSTINV24MO14 = 'ar_ship_to.ArstInv24mo14';

    /**
     * the column name for the ArstSale24mo15 field
     */
    const COL_ARSTSALE24MO15 = 'ar_ship_to.ArstSale24mo15';

    /**
     * the column name for the ArstInv24mo15 field
     */
    const COL_ARSTINV24MO15 = 'ar_ship_to.ArstInv24mo15';

    /**
     * the column name for the ArstSale24mo16 field
     */
    const COL_ARSTSALE24MO16 = 'ar_ship_to.ArstSale24mo16';

    /**
     * the column name for the ArstInv24mo16 field
     */
    const COL_ARSTINV24MO16 = 'ar_ship_to.ArstInv24mo16';

    /**
     * the column name for the ArstSale24mo17 field
     */
    const COL_ARSTSALE24MO17 = 'ar_ship_to.ArstSale24mo17';

    /**
     * the column name for the ArstInv24mo17 field
     */
    const COL_ARSTINV24MO17 = 'ar_ship_to.ArstInv24mo17';

    /**
     * the column name for the ArstSale24mo18 field
     */
    const COL_ARSTSALE24MO18 = 'ar_ship_to.ArstSale24mo18';

    /**
     * the column name for the ArstInv24mo18 field
     */
    const COL_ARSTINV24MO18 = 'ar_ship_to.ArstInv24mo18';

    /**
     * the column name for the ArstSale24mo19 field
     */
    const COL_ARSTSALE24MO19 = 'ar_ship_to.ArstSale24mo19';

    /**
     * the column name for the ArstInv24mo19 field
     */
    const COL_ARSTINV24MO19 = 'ar_ship_to.ArstInv24mo19';

    /**
     * the column name for the ArstSale24mo20 field
     */
    const COL_ARSTSALE24MO20 = 'ar_ship_to.ArstSale24mo20';

    /**
     * the column name for the ArstInv24mo20 field
     */
    const COL_ARSTINV24MO20 = 'ar_ship_to.ArstInv24mo20';

    /**
     * the column name for the ArstSale24mo21 field
     */
    const COL_ARSTSALE24MO21 = 'ar_ship_to.ArstSale24mo21';

    /**
     * the column name for the ArstInv24mo21 field
     */
    const COL_ARSTINV24MO21 = 'ar_ship_to.ArstInv24mo21';

    /**
     * the column name for the ArstSale24mo22 field
     */
    const COL_ARSTSALE24MO22 = 'ar_ship_to.ArstSale24mo22';

    /**
     * the column name for the ArstInv24mo22 field
     */
    const COL_ARSTINV24MO22 = 'ar_ship_to.ArstInv24mo22';

    /**
     * the column name for the ArstSale24mo23 field
     */
    const COL_ARSTSALE24MO23 = 'ar_ship_to.ArstSale24mo23';

    /**
     * the column name for the ArstInv24mo23 field
     */
    const COL_ARSTINV24MO23 = 'ar_ship_to.ArstInv24mo23';

    /**
     * the column name for the ArstSale24mo24 field
     */
    const COL_ARSTSALE24MO24 = 'ar_ship_to.ArstSale24mo24';

    /**
     * the column name for the ArstInv24mo24 field
     */
    const COL_ARSTINV24MO24 = 'ar_ship_to.ArstInv24mo24';

    /**
     * the column name for the ArstPrimShipId field
     */
    const COL_ARSTPRIMSHIPID = 'ar_ship_to.ArstPrimShipId';

    /**
     * the column name for the ArstMyVendId field
     */
    const COL_ARSTMYVENDID = 'ar_ship_to.ArstMyVendId';

    /**
     * the column name for the ArstAddlPricDisc field
     */
    const COL_ARSTADDLPRICDISC = 'ar_ship_to.ArstAddlPricDisc';

    /**
     * the column name for the ArstEdiInvc field
     */
    const COL_ARSTEDIINVC = 'ar_ship_to.ArstEdiInvc';

    /**
     * the column name for the ArstChrgFrt field
     */
    const COL_ARSTCHRGFRT = 'ar_ship_to.ArstChrgFrt';

    /**
     * the column name for the ArstDistCntr field
     */
    const COL_ARSTDISTCNTR = 'ar_ship_to.ArstDistCntr';

    /**
     * the column name for the ArstDunsNbr field
     */
    const COL_ARSTDUNSNBR = 'ar_ship_to.ArstDunsNbr';

    /**
     * the column name for the ArstRfmlValu field
     */
    const COL_ARSTRFMLVALU = 'ar_ship_to.ArstRfmlValu';

    /**
     * the column name for the ArstCustPOPram field
     */
    const COL_ARSTCUSTPOPRAM = 'ar_ship_to.ArstCustPOPram';

    /**
     * the column name for the ArtbRoutCode field
     */
    const COL_ARTBROUTCODE = 'ar_ship_to.ArtbRoutCode';

    /**
     * the column name for the ArstUpsAcctNbr field
     */
    const COL_ARSTUPSACCTNBR = 'ar_ship_to.ArstUpsAcctNbr';

    /**
     * the column name for the ArstFobInputYn field
     */
    const COL_ARSTFOBINPUTYN = 'ar_ship_to.ArstFobInputYn';

    /**
     * the column name for the ArstFobPerLb field
     */
    const COL_ARSTFOBPERLB = 'ar_ship_to.ArstFobPerLb';

    /**
     * the column name for the ArstSaleYtd field
     */
    const COL_ARSTSALEYTD = 'ar_ship_to.ArstSaleYtd';

    /**
     * the column name for the ArstInvYtd field
     */
    const COL_ARSTINVYTD = 'ar_ship_to.ArstInvYtd';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_ship_to.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_ship_to.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_ship_to.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arstshipid', 'Arstname', 'Arstadr1', 'Arstadr2', 'Arstadr3', 'Arstctry', 'Arstcity', 'Arststat', 'Arstzipcode', 'Arstdeliverydays', 'Arstcommcode', 'Arstallowsplit', 'Arstlindstsp', 'Arstlmecommcustid', 'Arstcatlgid', 'Arspsaleper1', 'Arspsaleper2', 'Arspsaleper3', 'Artbmtaxcode', 'Arsttaxexemnbr', 'Intbwhse', 'Artbshipvia', 'Arstbord', 'Arstcredhold', 'Arstusercode', 'Arstpriclvl', 'Arstshipcomp', 'Arsttxbl', 'Arstpostal', 'Arstsalemtd', 'Arstinvmtd', 'Arstdateopen', 'Arstlastsaledate', 'Arstsale24mo1', 'Arstinv24mo1', 'Arstsale24mo2', 'Arstinv24mo2', 'Arstsale24mo3', 'Arstinv24mo3', 'Arstsale24mo4', 'Arstinv24mo4', 'Arstsale24mo5', 'Arstinv24mo5', 'Arstsale24mo6', 'Arstinv24mo6', 'Arstsale24mo7', 'Arstinv24mo7', 'Arstsale24mo8', 'Arstinv24mo8', 'Arstsale24mo9', 'Arstinv24mo9', 'Arstsale24mo10', 'Arstinv24mo10', 'Arstsale24mo11', 'Arstinv24mo11', 'Arstsale24mo12', 'Arstinv24mo12', 'Arstsale24mo13', 'Arstinv24mo13', 'Arstsale24mo14', 'Arstinv24mo14', 'Arstsale24mo15', 'Arstinv24mo15', 'Arstsale24mo16', 'Arstinv24mo16', 'Arstsale24mo17', 'Arstinv24mo17', 'Arstsale24mo18', 'Arstinv24mo18', 'Arstsale24mo19', 'Arstinv24mo19', 'Arstsale24mo20', 'Arstinv24mo20', 'Arstsale24mo21', 'Arstinv24mo21', 'Arstsale24mo22', 'Arstinv24mo22', 'Arstsale24mo23', 'Arstinv24mo23', 'Arstsale24mo24', 'Arstinv24mo24', 'Arstprimshipid', 'Arstmyvendid', 'Arstaddlpricdisc', 'Arstediinvc', 'Arstchrgfrt', 'Arstdistcntr', 'Arstdunsnbr', 'Arstrfmlvalu', 'Arstcustpopram', 'Artbroutcode', 'Arstupsacctnbr', 'Arstfobinputyn', 'Arstfobperlb', 'Arstsaleytd', 'Arstinvytd', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arstshipid', 'arstname', 'arstadr1', 'arstadr2', 'arstadr3', 'arstctry', 'arstcity', 'arststat', 'arstzipcode', 'arstdeliverydays', 'arstcommcode', 'arstallowsplit', 'arstlindstsp', 'arstlmecommcustid', 'arstcatlgid', 'arspsaleper1', 'arspsaleper2', 'arspsaleper3', 'artbmtaxcode', 'arsttaxexemnbr', 'intbwhse', 'artbshipvia', 'arstbord', 'arstcredhold', 'arstusercode', 'arstpriclvl', 'arstshipcomp', 'arsttxbl', 'arstpostal', 'arstsalemtd', 'arstinvmtd', 'arstdateopen', 'arstlastsaledate', 'arstsale24mo1', 'arstinv24mo1', 'arstsale24mo2', 'arstinv24mo2', 'arstsale24mo3', 'arstinv24mo3', 'arstsale24mo4', 'arstinv24mo4', 'arstsale24mo5', 'arstinv24mo5', 'arstsale24mo6', 'arstinv24mo6', 'arstsale24mo7', 'arstinv24mo7', 'arstsale24mo8', 'arstinv24mo8', 'arstsale24mo9', 'arstinv24mo9', 'arstsale24mo10', 'arstinv24mo10', 'arstsale24mo11', 'arstinv24mo11', 'arstsale24mo12', 'arstinv24mo12', 'arstsale24mo13', 'arstinv24mo13', 'arstsale24mo14', 'arstinv24mo14', 'arstsale24mo15', 'arstinv24mo15', 'arstsale24mo16', 'arstinv24mo16', 'arstsale24mo17', 'arstinv24mo17', 'arstsale24mo18', 'arstinv24mo18', 'arstsale24mo19', 'arstinv24mo19', 'arstsale24mo20', 'arstinv24mo20', 'arstsale24mo21', 'arstinv24mo21', 'arstsale24mo22', 'arstinv24mo22', 'arstsale24mo23', 'arstinv24mo23', 'arstsale24mo24', 'arstinv24mo24', 'arstprimshipid', 'arstmyvendid', 'arstaddlpricdisc', 'arstediinvc', 'arstchrgfrt', 'arstdistcntr', 'arstdunsnbr', 'arstrfmlvalu', 'arstcustpopram', 'artbroutcode', 'arstupsacctnbr', 'arstfobinputyn', 'arstfobperlb', 'arstsaleytd', 'arstinvytd', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CustomerShiptoTableMap::COL_ARCUCUSTID, CustomerShiptoTableMap::COL_ARSTSHIPID, CustomerShiptoTableMap::COL_ARSTNAME, CustomerShiptoTableMap::COL_ARSTADR1, CustomerShiptoTableMap::COL_ARSTADR2, CustomerShiptoTableMap::COL_ARSTADR3, CustomerShiptoTableMap::COL_ARSTCTRY, CustomerShiptoTableMap::COL_ARSTCITY, CustomerShiptoTableMap::COL_ARSTSTAT, CustomerShiptoTableMap::COL_ARSTZIPCODE, CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS, CustomerShiptoTableMap::COL_ARSTCOMMCODE, CustomerShiptoTableMap::COL_ARSTALLOWSPLIT, CustomerShiptoTableMap::COL_ARSTLINDSTSP, CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID, CustomerShiptoTableMap::COL_ARSTCATLGID, CustomerShiptoTableMap::COL_ARSPSALEPER1, CustomerShiptoTableMap::COL_ARSPSALEPER2, CustomerShiptoTableMap::COL_ARSPSALEPER3, CustomerShiptoTableMap::COL_ARTBMTAXCODE, CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR, CustomerShiptoTableMap::COL_INTBWHSE, CustomerShiptoTableMap::COL_ARTBSHIPVIA, CustomerShiptoTableMap::COL_ARSTBORD, CustomerShiptoTableMap::COL_ARSTCREDHOLD, CustomerShiptoTableMap::COL_ARSTUSERCODE, CustomerShiptoTableMap::COL_ARSTPRICLVL, CustomerShiptoTableMap::COL_ARSTSHIPCOMP, CustomerShiptoTableMap::COL_ARSTTXBL, CustomerShiptoTableMap::COL_ARSTPOSTAL, CustomerShiptoTableMap::COL_ARSTSALEMTD, CustomerShiptoTableMap::COL_ARSTINVMTD, CustomerShiptoTableMap::COL_ARSTDATEOPEN, CustomerShiptoTableMap::COL_ARSTLASTSALEDATE, CustomerShiptoTableMap::COL_ARSTSALE24MO1, CustomerShiptoTableMap::COL_ARSTINV24MO1, CustomerShiptoTableMap::COL_ARSTSALE24MO2, CustomerShiptoTableMap::COL_ARSTINV24MO2, CustomerShiptoTableMap::COL_ARSTSALE24MO3, CustomerShiptoTableMap::COL_ARSTINV24MO3, CustomerShiptoTableMap::COL_ARSTSALE24MO4, CustomerShiptoTableMap::COL_ARSTINV24MO4, CustomerShiptoTableMap::COL_ARSTSALE24MO5, CustomerShiptoTableMap::COL_ARSTINV24MO5, CustomerShiptoTableMap::COL_ARSTSALE24MO6, CustomerShiptoTableMap::COL_ARSTINV24MO6, CustomerShiptoTableMap::COL_ARSTSALE24MO7, CustomerShiptoTableMap::COL_ARSTINV24MO7, CustomerShiptoTableMap::COL_ARSTSALE24MO8, CustomerShiptoTableMap::COL_ARSTINV24MO8, CustomerShiptoTableMap::COL_ARSTSALE24MO9, CustomerShiptoTableMap::COL_ARSTINV24MO9, CustomerShiptoTableMap::COL_ARSTSALE24MO10, CustomerShiptoTableMap::COL_ARSTINV24MO10, CustomerShiptoTableMap::COL_ARSTSALE24MO11, CustomerShiptoTableMap::COL_ARSTINV24MO11, CustomerShiptoTableMap::COL_ARSTSALE24MO12, CustomerShiptoTableMap::COL_ARSTINV24MO12, CustomerShiptoTableMap::COL_ARSTSALE24MO13, CustomerShiptoTableMap::COL_ARSTINV24MO13, CustomerShiptoTableMap::COL_ARSTSALE24MO14, CustomerShiptoTableMap::COL_ARSTINV24MO14, CustomerShiptoTableMap::COL_ARSTSALE24MO15, CustomerShiptoTableMap::COL_ARSTINV24MO15, CustomerShiptoTableMap::COL_ARSTSALE24MO16, CustomerShiptoTableMap::COL_ARSTINV24MO16, CustomerShiptoTableMap::COL_ARSTSALE24MO17, CustomerShiptoTableMap::COL_ARSTINV24MO17, CustomerShiptoTableMap::COL_ARSTSALE24MO18, CustomerShiptoTableMap::COL_ARSTINV24MO18, CustomerShiptoTableMap::COL_ARSTSALE24MO19, CustomerShiptoTableMap::COL_ARSTINV24MO19, CustomerShiptoTableMap::COL_ARSTSALE24MO20, CustomerShiptoTableMap::COL_ARSTINV24MO20, CustomerShiptoTableMap::COL_ARSTSALE24MO21, CustomerShiptoTableMap::COL_ARSTINV24MO21, CustomerShiptoTableMap::COL_ARSTSALE24MO22, CustomerShiptoTableMap::COL_ARSTINV24MO22, CustomerShiptoTableMap::COL_ARSTSALE24MO23, CustomerShiptoTableMap::COL_ARSTINV24MO23, CustomerShiptoTableMap::COL_ARSTSALE24MO24, CustomerShiptoTableMap::COL_ARSTINV24MO24, CustomerShiptoTableMap::COL_ARSTPRIMSHIPID, CustomerShiptoTableMap::COL_ARSTMYVENDID, CustomerShiptoTableMap::COL_ARSTADDLPRICDISC, CustomerShiptoTableMap::COL_ARSTEDIINVC, CustomerShiptoTableMap::COL_ARSTCHRGFRT, CustomerShiptoTableMap::COL_ARSTDISTCNTR, CustomerShiptoTableMap::COL_ARSTDUNSNBR, CustomerShiptoTableMap::COL_ARSTRFMLVALU, CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM, CustomerShiptoTableMap::COL_ARTBROUTCODE, CustomerShiptoTableMap::COL_ARSTUPSACCTNBR, CustomerShiptoTableMap::COL_ARSTFOBINPUTYN, CustomerShiptoTableMap::COL_ARSTFOBPERLB, CustomerShiptoTableMap::COL_ARSTSALEYTD, CustomerShiptoTableMap::COL_ARSTINVYTD, CustomerShiptoTableMap::COL_DATEUPDTD, CustomerShiptoTableMap::COL_TIMEUPDTD, CustomerShiptoTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArstShipId', 'ArstName', 'ArstAdr1', 'ArstAdr2', 'ArstAdr3', 'ArstCtry', 'ArstCity', 'ArstStat', 'ArstZipCode', 'ArstDeliveryDays', 'ArstCommCode', 'ArstAllowSplit', 'ArstLindstSp', 'ArstLmEcommCustId', 'ArstCatlgId', 'ArspSalePer1', 'ArspSalePer2', 'ArspSalePer3', 'ArtbMtaxCode', 'ArstTaxExemNbr', 'IntbWhse', 'ArtbShipVia', 'ArstBord', 'ArstCredHold', 'ArstUserCode', 'ArstPricLvl', 'ArstShipComp', 'ArstTxbl', 'ArstPostal', 'ArstSaleMtd', 'ArstInvMtd', 'ArstDateOpen', 'ArstLastSaleDate', 'ArstSale24mo1', 'ArstInv24mo1', 'ArstSale24mo2', 'ArstInv24mo2', 'ArstSale24mo3', 'ArstInv24mo3', 'ArstSale24mo4', 'ArstInv24mo4', 'ArstSale24mo5', 'ArstInv24mo5', 'ArstSale24mo6', 'ArstInv24mo6', 'ArstSale24mo7', 'ArstInv24mo7', 'ArstSale24mo8', 'ArstInv24mo8', 'ArstSale24mo9', 'ArstInv24mo9', 'ArstSale24mo10', 'ArstInv24mo10', 'ArstSale24mo11', 'ArstInv24mo11', 'ArstSale24mo12', 'ArstInv24mo12', 'ArstSale24mo13', 'ArstInv24mo13', 'ArstSale24mo14', 'ArstInv24mo14', 'ArstSale24mo15', 'ArstInv24mo15', 'ArstSale24mo16', 'ArstInv24mo16', 'ArstSale24mo17', 'ArstInv24mo17', 'ArstSale24mo18', 'ArstInv24mo18', 'ArstSale24mo19', 'ArstInv24mo19', 'ArstSale24mo20', 'ArstInv24mo20', 'ArstSale24mo21', 'ArstInv24mo21', 'ArstSale24mo22', 'ArstInv24mo22', 'ArstSale24mo23', 'ArstInv24mo23', 'ArstSale24mo24', 'ArstInv24mo24', 'ArstPrimShipId', 'ArstMyVendId', 'ArstAddlPricDisc', 'ArstEdiInvc', 'ArstChrgFrt', 'ArstDistCntr', 'ArstDunsNbr', 'ArstRfmlValu', 'ArstCustPOPram', 'ArtbRoutCode', 'ArstUpsAcctNbr', 'ArstFobInputYn', 'ArstFobPerLb', 'ArstSaleYtd', 'ArstInvYtd', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arstshipid' => 1, 'Arstname' => 2, 'Arstadr1' => 3, 'Arstadr2' => 4, 'Arstadr3' => 5, 'Arstctry' => 6, 'Arstcity' => 7, 'Arststat' => 8, 'Arstzipcode' => 9, 'Arstdeliverydays' => 10, 'Arstcommcode' => 11, 'Arstallowsplit' => 12, 'Arstlindstsp' => 13, 'Arstlmecommcustid' => 14, 'Arstcatlgid' => 15, 'Arspsaleper1' => 16, 'Arspsaleper2' => 17, 'Arspsaleper3' => 18, 'Artbmtaxcode' => 19, 'Arsttaxexemnbr' => 20, 'Intbwhse' => 21, 'Artbshipvia' => 22, 'Arstbord' => 23, 'Arstcredhold' => 24, 'Arstusercode' => 25, 'Arstpriclvl' => 26, 'Arstshipcomp' => 27, 'Arsttxbl' => 28, 'Arstpostal' => 29, 'Arstsalemtd' => 30, 'Arstinvmtd' => 31, 'Arstdateopen' => 32, 'Arstlastsaledate' => 33, 'Arstsale24mo1' => 34, 'Arstinv24mo1' => 35, 'Arstsale24mo2' => 36, 'Arstinv24mo2' => 37, 'Arstsale24mo3' => 38, 'Arstinv24mo3' => 39, 'Arstsale24mo4' => 40, 'Arstinv24mo4' => 41, 'Arstsale24mo5' => 42, 'Arstinv24mo5' => 43, 'Arstsale24mo6' => 44, 'Arstinv24mo6' => 45, 'Arstsale24mo7' => 46, 'Arstinv24mo7' => 47, 'Arstsale24mo8' => 48, 'Arstinv24mo8' => 49, 'Arstsale24mo9' => 50, 'Arstinv24mo9' => 51, 'Arstsale24mo10' => 52, 'Arstinv24mo10' => 53, 'Arstsale24mo11' => 54, 'Arstinv24mo11' => 55, 'Arstsale24mo12' => 56, 'Arstinv24mo12' => 57, 'Arstsale24mo13' => 58, 'Arstinv24mo13' => 59, 'Arstsale24mo14' => 60, 'Arstinv24mo14' => 61, 'Arstsale24mo15' => 62, 'Arstinv24mo15' => 63, 'Arstsale24mo16' => 64, 'Arstinv24mo16' => 65, 'Arstsale24mo17' => 66, 'Arstinv24mo17' => 67, 'Arstsale24mo18' => 68, 'Arstinv24mo18' => 69, 'Arstsale24mo19' => 70, 'Arstinv24mo19' => 71, 'Arstsale24mo20' => 72, 'Arstinv24mo20' => 73, 'Arstsale24mo21' => 74, 'Arstinv24mo21' => 75, 'Arstsale24mo22' => 76, 'Arstinv24mo22' => 77, 'Arstsale24mo23' => 78, 'Arstinv24mo23' => 79, 'Arstsale24mo24' => 80, 'Arstinv24mo24' => 81, 'Arstprimshipid' => 82, 'Arstmyvendid' => 83, 'Arstaddlpricdisc' => 84, 'Arstediinvc' => 85, 'Arstchrgfrt' => 86, 'Arstdistcntr' => 87, 'Arstdunsnbr' => 88, 'Arstrfmlvalu' => 89, 'Arstcustpopram' => 90, 'Artbroutcode' => 91, 'Arstupsacctnbr' => 92, 'Arstfobinputyn' => 93, 'Arstfobperlb' => 94, 'Arstsaleytd' => 95, 'Arstinvytd' => 96, 'Dateupdtd' => 97, 'Timeupdtd' => 98, 'Dummy' => 99, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arstshipid' => 1, 'arstname' => 2, 'arstadr1' => 3, 'arstadr2' => 4, 'arstadr3' => 5, 'arstctry' => 6, 'arstcity' => 7, 'arststat' => 8, 'arstzipcode' => 9, 'arstdeliverydays' => 10, 'arstcommcode' => 11, 'arstallowsplit' => 12, 'arstlindstsp' => 13, 'arstlmecommcustid' => 14, 'arstcatlgid' => 15, 'arspsaleper1' => 16, 'arspsaleper2' => 17, 'arspsaleper3' => 18, 'artbmtaxcode' => 19, 'arsttaxexemnbr' => 20, 'intbwhse' => 21, 'artbshipvia' => 22, 'arstbord' => 23, 'arstcredhold' => 24, 'arstusercode' => 25, 'arstpriclvl' => 26, 'arstshipcomp' => 27, 'arsttxbl' => 28, 'arstpostal' => 29, 'arstsalemtd' => 30, 'arstinvmtd' => 31, 'arstdateopen' => 32, 'arstlastsaledate' => 33, 'arstsale24mo1' => 34, 'arstinv24mo1' => 35, 'arstsale24mo2' => 36, 'arstinv24mo2' => 37, 'arstsale24mo3' => 38, 'arstinv24mo3' => 39, 'arstsale24mo4' => 40, 'arstinv24mo4' => 41, 'arstsale24mo5' => 42, 'arstinv24mo5' => 43, 'arstsale24mo6' => 44, 'arstinv24mo6' => 45, 'arstsale24mo7' => 46, 'arstinv24mo7' => 47, 'arstsale24mo8' => 48, 'arstinv24mo8' => 49, 'arstsale24mo9' => 50, 'arstinv24mo9' => 51, 'arstsale24mo10' => 52, 'arstinv24mo10' => 53, 'arstsale24mo11' => 54, 'arstinv24mo11' => 55, 'arstsale24mo12' => 56, 'arstinv24mo12' => 57, 'arstsale24mo13' => 58, 'arstinv24mo13' => 59, 'arstsale24mo14' => 60, 'arstinv24mo14' => 61, 'arstsale24mo15' => 62, 'arstinv24mo15' => 63, 'arstsale24mo16' => 64, 'arstinv24mo16' => 65, 'arstsale24mo17' => 66, 'arstinv24mo17' => 67, 'arstsale24mo18' => 68, 'arstinv24mo18' => 69, 'arstsale24mo19' => 70, 'arstinv24mo19' => 71, 'arstsale24mo20' => 72, 'arstinv24mo20' => 73, 'arstsale24mo21' => 74, 'arstinv24mo21' => 75, 'arstsale24mo22' => 76, 'arstinv24mo22' => 77, 'arstsale24mo23' => 78, 'arstinv24mo23' => 79, 'arstsale24mo24' => 80, 'arstinv24mo24' => 81, 'arstprimshipid' => 82, 'arstmyvendid' => 83, 'arstaddlpricdisc' => 84, 'arstediinvc' => 85, 'arstchrgfrt' => 86, 'arstdistcntr' => 87, 'arstdunsnbr' => 88, 'arstrfmlvalu' => 89, 'arstcustpopram' => 90, 'artbroutcode' => 91, 'arstupsacctnbr' => 92, 'arstfobinputyn' => 93, 'arstfobperlb' => 94, 'arstsaleytd' => 95, 'arstinvytd' => 96, 'dateupdtd' => 97, 'timeupdtd' => 98, 'dummy' => 99, ),
        self::TYPE_COLNAME       => array(CustomerShiptoTableMap::COL_ARCUCUSTID => 0, CustomerShiptoTableMap::COL_ARSTSHIPID => 1, CustomerShiptoTableMap::COL_ARSTNAME => 2, CustomerShiptoTableMap::COL_ARSTADR1 => 3, CustomerShiptoTableMap::COL_ARSTADR2 => 4, CustomerShiptoTableMap::COL_ARSTADR3 => 5, CustomerShiptoTableMap::COL_ARSTCTRY => 6, CustomerShiptoTableMap::COL_ARSTCITY => 7, CustomerShiptoTableMap::COL_ARSTSTAT => 8, CustomerShiptoTableMap::COL_ARSTZIPCODE => 9, CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS => 10, CustomerShiptoTableMap::COL_ARSTCOMMCODE => 11, CustomerShiptoTableMap::COL_ARSTALLOWSPLIT => 12, CustomerShiptoTableMap::COL_ARSTLINDSTSP => 13, CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID => 14, CustomerShiptoTableMap::COL_ARSTCATLGID => 15, CustomerShiptoTableMap::COL_ARSPSALEPER1 => 16, CustomerShiptoTableMap::COL_ARSPSALEPER2 => 17, CustomerShiptoTableMap::COL_ARSPSALEPER3 => 18, CustomerShiptoTableMap::COL_ARTBMTAXCODE => 19, CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR => 20, CustomerShiptoTableMap::COL_INTBWHSE => 21, CustomerShiptoTableMap::COL_ARTBSHIPVIA => 22, CustomerShiptoTableMap::COL_ARSTBORD => 23, CustomerShiptoTableMap::COL_ARSTCREDHOLD => 24, CustomerShiptoTableMap::COL_ARSTUSERCODE => 25, CustomerShiptoTableMap::COL_ARSTPRICLVL => 26, CustomerShiptoTableMap::COL_ARSTSHIPCOMP => 27, CustomerShiptoTableMap::COL_ARSTTXBL => 28, CustomerShiptoTableMap::COL_ARSTPOSTAL => 29, CustomerShiptoTableMap::COL_ARSTSALEMTD => 30, CustomerShiptoTableMap::COL_ARSTINVMTD => 31, CustomerShiptoTableMap::COL_ARSTDATEOPEN => 32, CustomerShiptoTableMap::COL_ARSTLASTSALEDATE => 33, CustomerShiptoTableMap::COL_ARSTSALE24MO1 => 34, CustomerShiptoTableMap::COL_ARSTINV24MO1 => 35, CustomerShiptoTableMap::COL_ARSTSALE24MO2 => 36, CustomerShiptoTableMap::COL_ARSTINV24MO2 => 37, CustomerShiptoTableMap::COL_ARSTSALE24MO3 => 38, CustomerShiptoTableMap::COL_ARSTINV24MO3 => 39, CustomerShiptoTableMap::COL_ARSTSALE24MO4 => 40, CustomerShiptoTableMap::COL_ARSTINV24MO4 => 41, CustomerShiptoTableMap::COL_ARSTSALE24MO5 => 42, CustomerShiptoTableMap::COL_ARSTINV24MO5 => 43, CustomerShiptoTableMap::COL_ARSTSALE24MO6 => 44, CustomerShiptoTableMap::COL_ARSTINV24MO6 => 45, CustomerShiptoTableMap::COL_ARSTSALE24MO7 => 46, CustomerShiptoTableMap::COL_ARSTINV24MO7 => 47, CustomerShiptoTableMap::COL_ARSTSALE24MO8 => 48, CustomerShiptoTableMap::COL_ARSTINV24MO8 => 49, CustomerShiptoTableMap::COL_ARSTSALE24MO9 => 50, CustomerShiptoTableMap::COL_ARSTINV24MO9 => 51, CustomerShiptoTableMap::COL_ARSTSALE24MO10 => 52, CustomerShiptoTableMap::COL_ARSTINV24MO10 => 53, CustomerShiptoTableMap::COL_ARSTSALE24MO11 => 54, CustomerShiptoTableMap::COL_ARSTINV24MO11 => 55, CustomerShiptoTableMap::COL_ARSTSALE24MO12 => 56, CustomerShiptoTableMap::COL_ARSTINV24MO12 => 57, CustomerShiptoTableMap::COL_ARSTSALE24MO13 => 58, CustomerShiptoTableMap::COL_ARSTINV24MO13 => 59, CustomerShiptoTableMap::COL_ARSTSALE24MO14 => 60, CustomerShiptoTableMap::COL_ARSTINV24MO14 => 61, CustomerShiptoTableMap::COL_ARSTSALE24MO15 => 62, CustomerShiptoTableMap::COL_ARSTINV24MO15 => 63, CustomerShiptoTableMap::COL_ARSTSALE24MO16 => 64, CustomerShiptoTableMap::COL_ARSTINV24MO16 => 65, CustomerShiptoTableMap::COL_ARSTSALE24MO17 => 66, CustomerShiptoTableMap::COL_ARSTINV24MO17 => 67, CustomerShiptoTableMap::COL_ARSTSALE24MO18 => 68, CustomerShiptoTableMap::COL_ARSTINV24MO18 => 69, CustomerShiptoTableMap::COL_ARSTSALE24MO19 => 70, CustomerShiptoTableMap::COL_ARSTINV24MO19 => 71, CustomerShiptoTableMap::COL_ARSTSALE24MO20 => 72, CustomerShiptoTableMap::COL_ARSTINV24MO20 => 73, CustomerShiptoTableMap::COL_ARSTSALE24MO21 => 74, CustomerShiptoTableMap::COL_ARSTINV24MO21 => 75, CustomerShiptoTableMap::COL_ARSTSALE24MO22 => 76, CustomerShiptoTableMap::COL_ARSTINV24MO22 => 77, CustomerShiptoTableMap::COL_ARSTSALE24MO23 => 78, CustomerShiptoTableMap::COL_ARSTINV24MO23 => 79, CustomerShiptoTableMap::COL_ARSTSALE24MO24 => 80, CustomerShiptoTableMap::COL_ARSTINV24MO24 => 81, CustomerShiptoTableMap::COL_ARSTPRIMSHIPID => 82, CustomerShiptoTableMap::COL_ARSTMYVENDID => 83, CustomerShiptoTableMap::COL_ARSTADDLPRICDISC => 84, CustomerShiptoTableMap::COL_ARSTEDIINVC => 85, CustomerShiptoTableMap::COL_ARSTCHRGFRT => 86, CustomerShiptoTableMap::COL_ARSTDISTCNTR => 87, CustomerShiptoTableMap::COL_ARSTDUNSNBR => 88, CustomerShiptoTableMap::COL_ARSTRFMLVALU => 89, CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM => 90, CustomerShiptoTableMap::COL_ARTBROUTCODE => 91, CustomerShiptoTableMap::COL_ARSTUPSACCTNBR => 92, CustomerShiptoTableMap::COL_ARSTFOBINPUTYN => 93, CustomerShiptoTableMap::COL_ARSTFOBPERLB => 94, CustomerShiptoTableMap::COL_ARSTSALEYTD => 95, CustomerShiptoTableMap::COL_ARSTINVYTD => 96, CustomerShiptoTableMap::COL_DATEUPDTD => 97, CustomerShiptoTableMap::COL_TIMEUPDTD => 98, CustomerShiptoTableMap::COL_DUMMY => 99, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArstShipId' => 1, 'ArstName' => 2, 'ArstAdr1' => 3, 'ArstAdr2' => 4, 'ArstAdr3' => 5, 'ArstCtry' => 6, 'ArstCity' => 7, 'ArstStat' => 8, 'ArstZipCode' => 9, 'ArstDeliveryDays' => 10, 'ArstCommCode' => 11, 'ArstAllowSplit' => 12, 'ArstLindstSp' => 13, 'ArstLmEcommCustId' => 14, 'ArstCatlgId' => 15, 'ArspSalePer1' => 16, 'ArspSalePer2' => 17, 'ArspSalePer3' => 18, 'ArtbMtaxCode' => 19, 'ArstTaxExemNbr' => 20, 'IntbWhse' => 21, 'ArtbShipVia' => 22, 'ArstBord' => 23, 'ArstCredHold' => 24, 'ArstUserCode' => 25, 'ArstPricLvl' => 26, 'ArstShipComp' => 27, 'ArstTxbl' => 28, 'ArstPostal' => 29, 'ArstSaleMtd' => 30, 'ArstInvMtd' => 31, 'ArstDateOpen' => 32, 'ArstLastSaleDate' => 33, 'ArstSale24mo1' => 34, 'ArstInv24mo1' => 35, 'ArstSale24mo2' => 36, 'ArstInv24mo2' => 37, 'ArstSale24mo3' => 38, 'ArstInv24mo3' => 39, 'ArstSale24mo4' => 40, 'ArstInv24mo4' => 41, 'ArstSale24mo5' => 42, 'ArstInv24mo5' => 43, 'ArstSale24mo6' => 44, 'ArstInv24mo6' => 45, 'ArstSale24mo7' => 46, 'ArstInv24mo7' => 47, 'ArstSale24mo8' => 48, 'ArstInv24mo8' => 49, 'ArstSale24mo9' => 50, 'ArstInv24mo9' => 51, 'ArstSale24mo10' => 52, 'ArstInv24mo10' => 53, 'ArstSale24mo11' => 54, 'ArstInv24mo11' => 55, 'ArstSale24mo12' => 56, 'ArstInv24mo12' => 57, 'ArstSale24mo13' => 58, 'ArstInv24mo13' => 59, 'ArstSale24mo14' => 60, 'ArstInv24mo14' => 61, 'ArstSale24mo15' => 62, 'ArstInv24mo15' => 63, 'ArstSale24mo16' => 64, 'ArstInv24mo16' => 65, 'ArstSale24mo17' => 66, 'ArstInv24mo17' => 67, 'ArstSale24mo18' => 68, 'ArstInv24mo18' => 69, 'ArstSale24mo19' => 70, 'ArstInv24mo19' => 71, 'ArstSale24mo20' => 72, 'ArstInv24mo20' => 73, 'ArstSale24mo21' => 74, 'ArstInv24mo21' => 75, 'ArstSale24mo22' => 76, 'ArstInv24mo22' => 77, 'ArstSale24mo23' => 78, 'ArstInv24mo23' => 79, 'ArstSale24mo24' => 80, 'ArstInv24mo24' => 81, 'ArstPrimShipId' => 82, 'ArstMyVendId' => 83, 'ArstAddlPricDisc' => 84, 'ArstEdiInvc' => 85, 'ArstChrgFrt' => 86, 'ArstDistCntr' => 87, 'ArstDunsNbr' => 88, 'ArstRfmlValu' => 89, 'ArstCustPOPram' => 90, 'ArtbRoutCode' => 91, 'ArstUpsAcctNbr' => 92, 'ArstFobInputYn' => 93, 'ArstFobPerLb' => 94, 'ArstSaleYtd' => 95, 'ArstInvYtd' => 96, 'DateUpdtd' => 97, 'TimeUpdtd' => 98, 'dummy' => 99, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, )
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
        $this->setName('ar_ship_to');
        $this->setPhpName('CustomerShipto');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CustomerShipto');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR', true, 6, '');
        $this->addColumn('ArstName', 'Arstname', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr1', 'Arstadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr2', 'Arstadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr3', 'Arstadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstCtry', 'Arstctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstCity', 'Arstcity', 'VARCHAR', false, 16, null);
        $this->addColumn('ArstStat', 'Arststat', 'VARCHAR', false, 2, null);
        $this->addColumn('ArstZipCode', 'Arstzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('ArstDeliveryDays', 'Arstdeliverydays', 'INTEGER', false, 4, null);
        $this->addColumn('ArstCommCode', 'Arstcommcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstAllowSplit', 'Arstallowsplit', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstLindstSp', 'Arstlindstsp', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstLmEcommCustId', 'Arstlmecommcustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstCatlgId', 'Arstcatlgid', 'VARCHAR', false, 8, null);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstTaxExemNbr', 'Arsttaxexemnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstBord', 'Arstbord', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstCredHold', 'Arstcredhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstUserCode', 'Arstusercode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstPricLvl', 'Arstpriclvl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstShipComp', 'Arstshipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstTxbl', 'Arsttxbl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstPostal', 'Arstpostal', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstSaleMtd', 'Arstsalemtd', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInvMtd', 'Arstinvmtd', 'INTEGER', false, 4, null);
        $this->addColumn('ArstDateOpen', 'Arstdateopen', 'VARCHAR', false, 8, null);
        $this->addColumn('ArstLastSaleDate', 'Arstlastsaledate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArstSale24mo1', 'Arstsale24mo1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo1', 'Arstinv24mo1', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo2', 'Arstsale24mo2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo2', 'Arstinv24mo2', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo3', 'Arstsale24mo3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo3', 'Arstinv24mo3', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo4', 'Arstsale24mo4', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo4', 'Arstinv24mo4', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo5', 'Arstsale24mo5', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo5', 'Arstinv24mo5', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo6', 'Arstsale24mo6', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo6', 'Arstinv24mo6', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo7', 'Arstsale24mo7', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo7', 'Arstinv24mo7', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo8', 'Arstsale24mo8', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo8', 'Arstinv24mo8', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo9', 'Arstsale24mo9', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo9', 'Arstinv24mo9', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo10', 'Arstsale24mo10', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo10', 'Arstinv24mo10', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo11', 'Arstsale24mo11', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo11', 'Arstinv24mo11', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo12', 'Arstsale24mo12', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo12', 'Arstinv24mo12', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo13', 'Arstsale24mo13', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo13', 'Arstinv24mo13', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo14', 'Arstsale24mo14', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo14', 'Arstinv24mo14', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo15', 'Arstsale24mo15', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo15', 'Arstinv24mo15', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo16', 'Arstsale24mo16', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo16', 'Arstinv24mo16', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo17', 'Arstsale24mo17', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo17', 'Arstinv24mo17', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo18', 'Arstsale24mo18', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo18', 'Arstinv24mo18', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo19', 'Arstsale24mo19', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo19', 'Arstinv24mo19', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo20', 'Arstsale24mo20', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo20', 'Arstinv24mo20', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo21', 'Arstsale24mo21', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo21', 'Arstinv24mo21', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo22', 'Arstsale24mo22', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo22', 'Arstinv24mo22', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo23', 'Arstsale24mo23', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo23', 'Arstinv24mo23', 'INTEGER', false, 4, null);
        $this->addColumn('ArstSale24mo24', 'Arstsale24mo24', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInv24mo24', 'Arstinv24mo24', 'INTEGER', false, 4, null);
        $this->addColumn('ArstPrimShipId', 'Arstprimshipid', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstMyVendId', 'Arstmyvendid', 'VARCHAR', false, 12, null);
        $this->addColumn('ArstAddlPricDisc', 'Arstaddlpricdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstEdiInvc', 'Arstediinvc', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstChrgFrt', 'Arstchrgfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstDistCntr', 'Arstdistcntr', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstDunsNbr', 'Arstdunsnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('ArstRfmlValu', 'Arstrfmlvalu', 'INTEGER', false, 3, null);
        $this->addColumn('ArstCustPOPram', 'Arstcustpopram', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbRoutCode', 'Artbroutcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstUpsAcctNbr', 'Arstupsacctnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('ArstFobInputYn', 'Arstfobinputyn', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstFobPerLb', 'Arstfobperlb', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstSaleYtd', 'Arstsaleytd', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInvYtd', 'Arstinvytd', 'INTEGER', false, 4, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
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
        $this->addRelation('SalesHistory', '\\SalesHistory', RelationMap::ONE_TO_MANY, array (
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
), null, null, 'SalesHistories', false);
        $this->addRelation('SalesOrder', '\\SalesOrder', RelationMap::ONE_TO_MANY, array (
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
), null, null, 'SalesOrders', false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CustomerShipto $obj A \CustomerShipto object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid())]);
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
     * @param mixed $value A \CustomerShipto object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CustomerShipto) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CustomerShipto object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CustomerShiptoTableMap::CLASS_DEFAULT : CustomerShiptoTableMap::OM_CLASS;
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
     * @return array           (CustomerShipto object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CustomerShiptoTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CustomerShiptoTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CustomerShiptoTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CustomerShiptoTableMap::OM_CLASS;
            /** @var CustomerShipto $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CustomerShiptoTableMap::addInstanceToPool($obj, $key);
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
            $key = CustomerShiptoTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CustomerShiptoTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CustomerShipto $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CustomerShiptoTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTNAME);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTADR1);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTADR2);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTADR3);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCTRY);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCITY);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSTAT);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTZIPCODE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCOMMCODE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTALLOWSPLIT);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTLINDSTSP);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCATLGID);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTBORD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCREDHOLD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTUSERCODE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTPRICLVL);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSHIPCOMP);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTTXBL);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTPOSTAL);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALEMTD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINVMTD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTDATEOPEN);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTLASTSALEDATE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO1);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO1);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO2);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO2);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO3);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO3);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO4);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO4);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO5);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO5);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO6);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO6);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO7);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO7);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO8);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO8);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO9);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO9);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO10);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO10);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO11);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO11);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO12);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO12);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO13);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO13);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO14);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO14);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO15);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO15);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO16);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO16);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO17);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO17);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO18);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO18);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO19);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO19);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO20);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO20);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO21);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO21);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO22);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO22);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO23);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO23);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALE24MO24);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINV24MO24);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTPRIMSHIPID);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTMYVENDID);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTEDIINVC);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCHRGFRT);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTDISTCNTR);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTDUNSNBR);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTRFMLVALU);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTCUSTPOPRAM);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARTBROUTCODE);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTUPSACCTNBR);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTFOBINPUTYN);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTFOBPERLB);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTSALEYTD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_ARSTINVYTD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CustomerShiptoTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.ArstName');
            $criteria->addSelectColumn($alias . '.ArstAdr1');
            $criteria->addSelectColumn($alias . '.ArstAdr2');
            $criteria->addSelectColumn($alias . '.ArstAdr3');
            $criteria->addSelectColumn($alias . '.ArstCtry');
            $criteria->addSelectColumn($alias . '.ArstCity');
            $criteria->addSelectColumn($alias . '.ArstStat');
            $criteria->addSelectColumn($alias . '.ArstZipCode');
            $criteria->addSelectColumn($alias . '.ArstDeliveryDays');
            $criteria->addSelectColumn($alias . '.ArstCommCode');
            $criteria->addSelectColumn($alias . '.ArstAllowSplit');
            $criteria->addSelectColumn($alias . '.ArstLindstSp');
            $criteria->addSelectColumn($alias . '.ArstLmEcommCustId');
            $criteria->addSelectColumn($alias . '.ArstCatlgId');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
            $criteria->addSelectColumn($alias . '.ArstTaxExemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArstBord');
            $criteria->addSelectColumn($alias . '.ArstCredHold');
            $criteria->addSelectColumn($alias . '.ArstUserCode');
            $criteria->addSelectColumn($alias . '.ArstPricLvl');
            $criteria->addSelectColumn($alias . '.ArstShipComp');
            $criteria->addSelectColumn($alias . '.ArstTxbl');
            $criteria->addSelectColumn($alias . '.ArstPostal');
            $criteria->addSelectColumn($alias . '.ArstSaleMtd');
            $criteria->addSelectColumn($alias . '.ArstInvMtd');
            $criteria->addSelectColumn($alias . '.ArstDateOpen');
            $criteria->addSelectColumn($alias . '.ArstLastSaleDate');
            $criteria->addSelectColumn($alias . '.ArstSale24mo1');
            $criteria->addSelectColumn($alias . '.ArstInv24mo1');
            $criteria->addSelectColumn($alias . '.ArstSale24mo2');
            $criteria->addSelectColumn($alias . '.ArstInv24mo2');
            $criteria->addSelectColumn($alias . '.ArstSale24mo3');
            $criteria->addSelectColumn($alias . '.ArstInv24mo3');
            $criteria->addSelectColumn($alias . '.ArstSale24mo4');
            $criteria->addSelectColumn($alias . '.ArstInv24mo4');
            $criteria->addSelectColumn($alias . '.ArstSale24mo5');
            $criteria->addSelectColumn($alias . '.ArstInv24mo5');
            $criteria->addSelectColumn($alias . '.ArstSale24mo6');
            $criteria->addSelectColumn($alias . '.ArstInv24mo6');
            $criteria->addSelectColumn($alias . '.ArstSale24mo7');
            $criteria->addSelectColumn($alias . '.ArstInv24mo7');
            $criteria->addSelectColumn($alias . '.ArstSale24mo8');
            $criteria->addSelectColumn($alias . '.ArstInv24mo8');
            $criteria->addSelectColumn($alias . '.ArstSale24mo9');
            $criteria->addSelectColumn($alias . '.ArstInv24mo9');
            $criteria->addSelectColumn($alias . '.ArstSale24mo10');
            $criteria->addSelectColumn($alias . '.ArstInv24mo10');
            $criteria->addSelectColumn($alias . '.ArstSale24mo11');
            $criteria->addSelectColumn($alias . '.ArstInv24mo11');
            $criteria->addSelectColumn($alias . '.ArstSale24mo12');
            $criteria->addSelectColumn($alias . '.ArstInv24mo12');
            $criteria->addSelectColumn($alias . '.ArstSale24mo13');
            $criteria->addSelectColumn($alias . '.ArstInv24mo13');
            $criteria->addSelectColumn($alias . '.ArstSale24mo14');
            $criteria->addSelectColumn($alias . '.ArstInv24mo14');
            $criteria->addSelectColumn($alias . '.ArstSale24mo15');
            $criteria->addSelectColumn($alias . '.ArstInv24mo15');
            $criteria->addSelectColumn($alias . '.ArstSale24mo16');
            $criteria->addSelectColumn($alias . '.ArstInv24mo16');
            $criteria->addSelectColumn($alias . '.ArstSale24mo17');
            $criteria->addSelectColumn($alias . '.ArstInv24mo17');
            $criteria->addSelectColumn($alias . '.ArstSale24mo18');
            $criteria->addSelectColumn($alias . '.ArstInv24mo18');
            $criteria->addSelectColumn($alias . '.ArstSale24mo19');
            $criteria->addSelectColumn($alias . '.ArstInv24mo19');
            $criteria->addSelectColumn($alias . '.ArstSale24mo20');
            $criteria->addSelectColumn($alias . '.ArstInv24mo20');
            $criteria->addSelectColumn($alias . '.ArstSale24mo21');
            $criteria->addSelectColumn($alias . '.ArstInv24mo21');
            $criteria->addSelectColumn($alias . '.ArstSale24mo22');
            $criteria->addSelectColumn($alias . '.ArstInv24mo22');
            $criteria->addSelectColumn($alias . '.ArstSale24mo23');
            $criteria->addSelectColumn($alias . '.ArstInv24mo23');
            $criteria->addSelectColumn($alias . '.ArstSale24mo24');
            $criteria->addSelectColumn($alias . '.ArstInv24mo24');
            $criteria->addSelectColumn($alias . '.ArstPrimShipId');
            $criteria->addSelectColumn($alias . '.ArstMyVendId');
            $criteria->addSelectColumn($alias . '.ArstAddlPricDisc');
            $criteria->addSelectColumn($alias . '.ArstEdiInvc');
            $criteria->addSelectColumn($alias . '.ArstChrgFrt');
            $criteria->addSelectColumn($alias . '.ArstDistCntr');
            $criteria->addSelectColumn($alias . '.ArstDunsNbr');
            $criteria->addSelectColumn($alias . '.ArstRfmlValu');
            $criteria->addSelectColumn($alias . '.ArstCustPOPram');
            $criteria->addSelectColumn($alias . '.ArtbRoutCode');
            $criteria->addSelectColumn($alias . '.ArstUpsAcctNbr');
            $criteria->addSelectColumn($alias . '.ArstFobInputYn');
            $criteria->addSelectColumn($alias . '.ArstFobPerLb');
            $criteria->addSelectColumn($alias . '.ArstSaleYtd');
            $criteria->addSelectColumn($alias . '.ArstInvYtd');
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
        return Propel::getServiceContainer()->getDatabaseMap(CustomerShiptoTableMap::DATABASE_NAME)->getTable(CustomerShiptoTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CustomerShiptoTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CustomerShiptoTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CustomerShiptoTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CustomerShipto or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CustomerShipto object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CustomerShipto) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CustomerShiptoTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CustomerShiptoTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CustomerShiptoTableMap::COL_ARSTSHIPID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CustomerShiptoQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CustomerShiptoTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CustomerShiptoTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_ship_to table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CustomerShiptoQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CustomerShipto or Criteria object.
     *
     * @param mixed               $criteria Criteria or CustomerShipto object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CustomerShipto object
        }


        // Set the correct dbName
        $query = CustomerShiptoQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CustomerShiptoTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CustomerShiptoTableMap::buildTableMap();
