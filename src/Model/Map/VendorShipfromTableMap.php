<?php

namespace Map;

use \VendorShipfrom;
use \VendorShipfromQuery;
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
 * This class defines the structure of the 'ap_ship_from' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class VendorShipfromTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.VendorShipfromTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ap_ship_from';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\VendorShipfrom';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'VendorShipfrom';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 70;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 70;

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'ap_ship_from.ApveVendId';

    /**
     * the column name for the ApfmShipId field
     */
    const COL_APFMSHIPID = 'ap_ship_from.ApfmShipId';

    /**
     * the column name for the ApfmName field
     */
    const COL_APFMNAME = 'ap_ship_from.ApfmName';

    /**
     * the column name for the ApfmAdr1 field
     */
    const COL_APFMADR1 = 'ap_ship_from.ApfmAdr1';

    /**
     * the column name for the ApfmAdr2 field
     */
    const COL_APFMADR2 = 'ap_ship_from.ApfmAdr2';

    /**
     * the column name for the ApfmAdr3 field
     */
    const COL_APFMADR3 = 'ap_ship_from.ApfmAdr3';

    /**
     * the column name for the ApfmCtry field
     */
    const COL_APFMCTRY = 'ap_ship_from.ApfmCtry';

    /**
     * the column name for the ApfmCity field
     */
    const COL_APFMCITY = 'ap_ship_from.ApfmCity';

    /**
     * the column name for the ApfmStat field
     */
    const COL_APFMSTAT = 'ap_ship_from.ApfmStat';

    /**
     * the column name for the ApfmZipCode field
     */
    const COL_APFMZIPCODE = 'ap_ship_from.ApfmZipCode';

    /**
     * the column name for the ApfmCont1 field
     */
    const COL_APFMCONT1 = 'ap_ship_from.ApfmCont1';

    /**
     * the column name for the ApfmCont2 field
     */
    const COL_APFMCONT2 = 'ap_ship_from.ApfmCont2';

    /**
     * the column name for the ArtbSviaCode field
     */
    const COL_ARTBSVIACODE = 'ap_ship_from.ArtbSviaCode';

    /**
     * the column name for the ApfmGlAcct field
     */
    const COL_APFMGLACCT = 'ap_ship_from.ApfmGlAcct';

    /**
     * the column name for the ApfmPurMtd field
     */
    const COL_APFMPURMTD = 'ap_ship_from.ApfmPurMtd';

    /**
     * the column name for the ApfmPoMtd field
     */
    const COL_APFMPOMTD = 'ap_ship_from.ApfmPoMtd';

    /**
     * the column name for the ApfmDateOpen field
     */
    const COL_APFMDATEOPEN = 'ap_ship_from.ApfmDateOpen';

    /**
     * the column name for the ApfmLastPurDate field
     */
    const COL_APFMLASTPURDATE = 'ap_ship_from.ApfmLastPurDate';

    /**
     * the column name for the ApfmPur24mo01 field
     */
    const COL_APFMPUR24MO01 = 'ap_ship_from.ApfmPur24mo01';

    /**
     * the column name for the ApfmPo24mo01 field
     */
    const COL_APFMPO24MO01 = 'ap_ship_from.ApfmPo24mo01';

    /**
     * the column name for the ApfmPur24mo02 field
     */
    const COL_APFMPUR24MO02 = 'ap_ship_from.ApfmPur24mo02';

    /**
     * the column name for the ApfmPo24mo02 field
     */
    const COL_APFMPO24MO02 = 'ap_ship_from.ApfmPo24mo02';

    /**
     * the column name for the ApfmPur24mo03 field
     */
    const COL_APFMPUR24MO03 = 'ap_ship_from.ApfmPur24mo03';

    /**
     * the column name for the ApfmPo24mo03 field
     */
    const COL_APFMPO24MO03 = 'ap_ship_from.ApfmPo24mo03';

    /**
     * the column name for the ApfmPur24mo04 field
     */
    const COL_APFMPUR24MO04 = 'ap_ship_from.ApfmPur24mo04';

    /**
     * the column name for the ApfmPo24mo04 field
     */
    const COL_APFMPO24MO04 = 'ap_ship_from.ApfmPo24mo04';

    /**
     * the column name for the ApfmPur24mo05 field
     */
    const COL_APFMPUR24MO05 = 'ap_ship_from.ApfmPur24mo05';

    /**
     * the column name for the ApfmPo24mo05 field
     */
    const COL_APFMPO24MO05 = 'ap_ship_from.ApfmPo24mo05';

    /**
     * the column name for the ApfmPur24mo06 field
     */
    const COL_APFMPUR24MO06 = 'ap_ship_from.ApfmPur24mo06';

    /**
     * the column name for the ApfmPo24mo06 field
     */
    const COL_APFMPO24MO06 = 'ap_ship_from.ApfmPo24mo06';

    /**
     * the column name for the ApfmPur24mo07 field
     */
    const COL_APFMPUR24MO07 = 'ap_ship_from.ApfmPur24mo07';

    /**
     * the column name for the ApfmPo24mo07 field
     */
    const COL_APFMPO24MO07 = 'ap_ship_from.ApfmPo24mo07';

    /**
     * the column name for the ApfmPur24mo08 field
     */
    const COL_APFMPUR24MO08 = 'ap_ship_from.ApfmPur24mo08';

    /**
     * the column name for the ApfmPo24mo08 field
     */
    const COL_APFMPO24MO08 = 'ap_ship_from.ApfmPo24mo08';

    /**
     * the column name for the ApfmPur24mo09 field
     */
    const COL_APFMPUR24MO09 = 'ap_ship_from.ApfmPur24mo09';

    /**
     * the column name for the ApfmPo24mo09 field
     */
    const COL_APFMPO24MO09 = 'ap_ship_from.ApfmPo24mo09';

    /**
     * the column name for the ApfmPur24mo10 field
     */
    const COL_APFMPUR24MO10 = 'ap_ship_from.ApfmPur24mo10';

    /**
     * the column name for the ApfmPo24mo10 field
     */
    const COL_APFMPO24MO10 = 'ap_ship_from.ApfmPo24mo10';

    /**
     * the column name for the ApfmPur24mo11 field
     */
    const COL_APFMPUR24MO11 = 'ap_ship_from.ApfmPur24mo11';

    /**
     * the column name for the ApfmPo24mo11 field
     */
    const COL_APFMPO24MO11 = 'ap_ship_from.ApfmPo24mo11';

    /**
     * the column name for the ApfmPur24mo12 field
     */
    const COL_APFMPUR24MO12 = 'ap_ship_from.ApfmPur24mo12';

    /**
     * the column name for the ApfmPo24mo12 field
     */
    const COL_APFMPO24MO12 = 'ap_ship_from.ApfmPo24mo12';

    /**
     * the column name for the ApfmPur24mo13 field
     */
    const COL_APFMPUR24MO13 = 'ap_ship_from.ApfmPur24mo13';

    /**
     * the column name for the ApfmPo24mo13 field
     */
    const COL_APFMPO24MO13 = 'ap_ship_from.ApfmPo24mo13';

    /**
     * the column name for the ApfmPur24mo14 field
     */
    const COL_APFMPUR24MO14 = 'ap_ship_from.ApfmPur24mo14';

    /**
     * the column name for the ApfmPo24mo14 field
     */
    const COL_APFMPO24MO14 = 'ap_ship_from.ApfmPo24mo14';

    /**
     * the column name for the ApfmPur24mo15 field
     */
    const COL_APFMPUR24MO15 = 'ap_ship_from.ApfmPur24mo15';

    /**
     * the column name for the ApfmPo24mo15 field
     */
    const COL_APFMPO24MO15 = 'ap_ship_from.ApfmPo24mo15';

    /**
     * the column name for the ApfmPur24mo16 field
     */
    const COL_APFMPUR24MO16 = 'ap_ship_from.ApfmPur24mo16';

    /**
     * the column name for the ApfmPo24mo16 field
     */
    const COL_APFMPO24MO16 = 'ap_ship_from.ApfmPo24mo16';

    /**
     * the column name for the ApfmPur24mo17 field
     */
    const COL_APFMPUR24MO17 = 'ap_ship_from.ApfmPur24mo17';

    /**
     * the column name for the ApfmPo24mo17 field
     */
    const COL_APFMPO24MO17 = 'ap_ship_from.ApfmPo24mo17';

    /**
     * the column name for the ApfmPur24mo18 field
     */
    const COL_APFMPUR24MO18 = 'ap_ship_from.ApfmPur24mo18';

    /**
     * the column name for the ApfmPo24mo18 field
     */
    const COL_APFMPO24MO18 = 'ap_ship_from.ApfmPo24mo18';

    /**
     * the column name for the ApfmPur24mo19 field
     */
    const COL_APFMPUR24MO19 = 'ap_ship_from.ApfmPur24mo19';

    /**
     * the column name for the ApfmPo24mo19 field
     */
    const COL_APFMPO24MO19 = 'ap_ship_from.ApfmPo24mo19';

    /**
     * the column name for the ApfmPur24mo20 field
     */
    const COL_APFMPUR24MO20 = 'ap_ship_from.ApfmPur24mo20';

    /**
     * the column name for the ApfmPo24mo20 field
     */
    const COL_APFMPO24MO20 = 'ap_ship_from.ApfmPo24mo20';

    /**
     * the column name for the ApfmPur24mo21 field
     */
    const COL_APFMPUR24MO21 = 'ap_ship_from.ApfmPur24mo21';

    /**
     * the column name for the ApfmPo24mo21 field
     */
    const COL_APFMPO24MO21 = 'ap_ship_from.ApfmPo24mo21';

    /**
     * the column name for the ApfmPur24mo22 field
     */
    const COL_APFMPUR24MO22 = 'ap_ship_from.ApfmPur24mo22';

    /**
     * the column name for the ApfmPo24mo22 field
     */
    const COL_APFMPO24MO22 = 'ap_ship_from.ApfmPo24mo22';

    /**
     * the column name for the ApfmPur24mo23 field
     */
    const COL_APFMPUR24MO23 = 'ap_ship_from.ApfmPur24mo23';

    /**
     * the column name for the ApfmPo24mo23 field
     */
    const COL_APFMPO24MO23 = 'ap_ship_from.ApfmPo24mo23';

    /**
     * the column name for the ApfmPur24mo24 field
     */
    const COL_APFMPUR24MO24 = 'ap_ship_from.ApfmPur24mo24';

    /**
     * the column name for the ApfmPo24mo24 field
     */
    const COL_APFMPO24MO24 = 'ap_ship_from.ApfmPo24mo24';

    /**
     * the column name for the ApfmOurAcctNbr field
     */
    const COL_APFMOURACCTNBR = 'ap_ship_from.ApfmOurAcctNbr';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ap_ship_from.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ap_ship_from.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ap_ship_from.dummy';

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
        self::TYPE_PHPNAME       => array('Apvevendid', 'Apfmshipid', 'Apfmname', 'Apfmadr1', 'Apfmadr2', 'Apfmadr3', 'Apfmctry', 'Apfmcity', 'Apfmstat', 'Apfmzipcode', 'Apfmcont1', 'Apfmcont2', 'Artbsviacode', 'Apfmglacct', 'Apfmpurmtd', 'Apfmpomtd', 'Apfmdateopen', 'Apfmlastpurdate', 'Apfmpur24mo01', 'Apfmpo24mo01', 'Apfmpur24mo02', 'Apfmpo24mo02', 'Apfmpur24mo03', 'Apfmpo24mo03', 'Apfmpur24mo04', 'Apfmpo24mo04', 'Apfmpur24mo05', 'Apfmpo24mo05', 'Apfmpur24mo06', 'Apfmpo24mo06', 'Apfmpur24mo07', 'Apfmpo24mo07', 'Apfmpur24mo08', 'Apfmpo24mo08', 'Apfmpur24mo09', 'Apfmpo24mo09', 'Apfmpur24mo10', 'Apfmpo24mo10', 'Apfmpur24mo11', 'Apfmpo24mo11', 'Apfmpur24mo12', 'Apfmpo24mo12', 'Apfmpur24mo13', 'Apfmpo24mo13', 'Apfmpur24mo14', 'Apfmpo24mo14', 'Apfmpur24mo15', 'Apfmpo24mo15', 'Apfmpur24mo16', 'Apfmpo24mo16', 'Apfmpur24mo17', 'Apfmpo24mo17', 'Apfmpur24mo18', 'Apfmpo24mo18', 'Apfmpur24mo19', 'Apfmpo24mo19', 'Apfmpur24mo20', 'Apfmpo24mo20', 'Apfmpur24mo21', 'Apfmpo24mo21', 'Apfmpur24mo22', 'Apfmpo24mo22', 'Apfmpur24mo23', 'Apfmpo24mo23', 'Apfmpur24mo24', 'Apfmpo24mo24', 'Apfmouracctnbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('apvevendid', 'apfmshipid', 'apfmname', 'apfmadr1', 'apfmadr2', 'apfmadr3', 'apfmctry', 'apfmcity', 'apfmstat', 'apfmzipcode', 'apfmcont1', 'apfmcont2', 'artbsviacode', 'apfmglacct', 'apfmpurmtd', 'apfmpomtd', 'apfmdateopen', 'apfmlastpurdate', 'apfmpur24mo01', 'apfmpo24mo01', 'apfmpur24mo02', 'apfmpo24mo02', 'apfmpur24mo03', 'apfmpo24mo03', 'apfmpur24mo04', 'apfmpo24mo04', 'apfmpur24mo05', 'apfmpo24mo05', 'apfmpur24mo06', 'apfmpo24mo06', 'apfmpur24mo07', 'apfmpo24mo07', 'apfmpur24mo08', 'apfmpo24mo08', 'apfmpur24mo09', 'apfmpo24mo09', 'apfmpur24mo10', 'apfmpo24mo10', 'apfmpur24mo11', 'apfmpo24mo11', 'apfmpur24mo12', 'apfmpo24mo12', 'apfmpur24mo13', 'apfmpo24mo13', 'apfmpur24mo14', 'apfmpo24mo14', 'apfmpur24mo15', 'apfmpo24mo15', 'apfmpur24mo16', 'apfmpo24mo16', 'apfmpur24mo17', 'apfmpo24mo17', 'apfmpur24mo18', 'apfmpo24mo18', 'apfmpur24mo19', 'apfmpo24mo19', 'apfmpur24mo20', 'apfmpo24mo20', 'apfmpur24mo21', 'apfmpo24mo21', 'apfmpur24mo22', 'apfmpo24mo22', 'apfmpur24mo23', 'apfmpo24mo23', 'apfmpur24mo24', 'apfmpo24mo24', 'apfmouracctnbr', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(VendorShipfromTableMap::COL_APVEVENDID, VendorShipfromTableMap::COL_APFMSHIPID, VendorShipfromTableMap::COL_APFMNAME, VendorShipfromTableMap::COL_APFMADR1, VendorShipfromTableMap::COL_APFMADR2, VendorShipfromTableMap::COL_APFMADR3, VendorShipfromTableMap::COL_APFMCTRY, VendorShipfromTableMap::COL_APFMCITY, VendorShipfromTableMap::COL_APFMSTAT, VendorShipfromTableMap::COL_APFMZIPCODE, VendorShipfromTableMap::COL_APFMCONT1, VendorShipfromTableMap::COL_APFMCONT2, VendorShipfromTableMap::COL_ARTBSVIACODE, VendorShipfromTableMap::COL_APFMGLACCT, VendorShipfromTableMap::COL_APFMPURMTD, VendorShipfromTableMap::COL_APFMPOMTD, VendorShipfromTableMap::COL_APFMDATEOPEN, VendorShipfromTableMap::COL_APFMLASTPURDATE, VendorShipfromTableMap::COL_APFMPUR24MO01, VendorShipfromTableMap::COL_APFMPO24MO01, VendorShipfromTableMap::COL_APFMPUR24MO02, VendorShipfromTableMap::COL_APFMPO24MO02, VendorShipfromTableMap::COL_APFMPUR24MO03, VendorShipfromTableMap::COL_APFMPO24MO03, VendorShipfromTableMap::COL_APFMPUR24MO04, VendorShipfromTableMap::COL_APFMPO24MO04, VendorShipfromTableMap::COL_APFMPUR24MO05, VendorShipfromTableMap::COL_APFMPO24MO05, VendorShipfromTableMap::COL_APFMPUR24MO06, VendorShipfromTableMap::COL_APFMPO24MO06, VendorShipfromTableMap::COL_APFMPUR24MO07, VendorShipfromTableMap::COL_APFMPO24MO07, VendorShipfromTableMap::COL_APFMPUR24MO08, VendorShipfromTableMap::COL_APFMPO24MO08, VendorShipfromTableMap::COL_APFMPUR24MO09, VendorShipfromTableMap::COL_APFMPO24MO09, VendorShipfromTableMap::COL_APFMPUR24MO10, VendorShipfromTableMap::COL_APFMPO24MO10, VendorShipfromTableMap::COL_APFMPUR24MO11, VendorShipfromTableMap::COL_APFMPO24MO11, VendorShipfromTableMap::COL_APFMPUR24MO12, VendorShipfromTableMap::COL_APFMPO24MO12, VendorShipfromTableMap::COL_APFMPUR24MO13, VendorShipfromTableMap::COL_APFMPO24MO13, VendorShipfromTableMap::COL_APFMPUR24MO14, VendorShipfromTableMap::COL_APFMPO24MO14, VendorShipfromTableMap::COL_APFMPUR24MO15, VendorShipfromTableMap::COL_APFMPO24MO15, VendorShipfromTableMap::COL_APFMPUR24MO16, VendorShipfromTableMap::COL_APFMPO24MO16, VendorShipfromTableMap::COL_APFMPUR24MO17, VendorShipfromTableMap::COL_APFMPO24MO17, VendorShipfromTableMap::COL_APFMPUR24MO18, VendorShipfromTableMap::COL_APFMPO24MO18, VendorShipfromTableMap::COL_APFMPUR24MO19, VendorShipfromTableMap::COL_APFMPO24MO19, VendorShipfromTableMap::COL_APFMPUR24MO20, VendorShipfromTableMap::COL_APFMPO24MO20, VendorShipfromTableMap::COL_APFMPUR24MO21, VendorShipfromTableMap::COL_APFMPO24MO21, VendorShipfromTableMap::COL_APFMPUR24MO22, VendorShipfromTableMap::COL_APFMPO24MO22, VendorShipfromTableMap::COL_APFMPUR24MO23, VendorShipfromTableMap::COL_APFMPO24MO23, VendorShipfromTableMap::COL_APFMPUR24MO24, VendorShipfromTableMap::COL_APFMPO24MO24, VendorShipfromTableMap::COL_APFMOURACCTNBR, VendorShipfromTableMap::COL_DATEUPDTD, VendorShipfromTableMap::COL_TIMEUPDTD, VendorShipfromTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ApveVendId', 'ApfmShipId', 'ApfmName', 'ApfmAdr1', 'ApfmAdr2', 'ApfmAdr3', 'ApfmCtry', 'ApfmCity', 'ApfmStat', 'ApfmZipCode', 'ApfmCont1', 'ApfmCont2', 'ArtbSviaCode', 'ApfmGlAcct', 'ApfmPurMtd', 'ApfmPoMtd', 'ApfmDateOpen', 'ApfmLastPurDate', 'ApfmPur24mo01', 'ApfmPo24mo01', 'ApfmPur24mo02', 'ApfmPo24mo02', 'ApfmPur24mo03', 'ApfmPo24mo03', 'ApfmPur24mo04', 'ApfmPo24mo04', 'ApfmPur24mo05', 'ApfmPo24mo05', 'ApfmPur24mo06', 'ApfmPo24mo06', 'ApfmPur24mo07', 'ApfmPo24mo07', 'ApfmPur24mo08', 'ApfmPo24mo08', 'ApfmPur24mo09', 'ApfmPo24mo09', 'ApfmPur24mo10', 'ApfmPo24mo10', 'ApfmPur24mo11', 'ApfmPo24mo11', 'ApfmPur24mo12', 'ApfmPo24mo12', 'ApfmPur24mo13', 'ApfmPo24mo13', 'ApfmPur24mo14', 'ApfmPo24mo14', 'ApfmPur24mo15', 'ApfmPo24mo15', 'ApfmPur24mo16', 'ApfmPo24mo16', 'ApfmPur24mo17', 'ApfmPo24mo17', 'ApfmPur24mo18', 'ApfmPo24mo18', 'ApfmPur24mo19', 'ApfmPo24mo19', 'ApfmPur24mo20', 'ApfmPo24mo20', 'ApfmPur24mo21', 'ApfmPo24mo21', 'ApfmPur24mo22', 'ApfmPo24mo22', 'ApfmPur24mo23', 'ApfmPo24mo23', 'ApfmPur24mo24', 'ApfmPo24mo24', 'ApfmOurAcctNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Apvevendid' => 0, 'Apfmshipid' => 1, 'Apfmname' => 2, 'Apfmadr1' => 3, 'Apfmadr2' => 4, 'Apfmadr3' => 5, 'Apfmctry' => 6, 'Apfmcity' => 7, 'Apfmstat' => 8, 'Apfmzipcode' => 9, 'Apfmcont1' => 10, 'Apfmcont2' => 11, 'Artbsviacode' => 12, 'Apfmglacct' => 13, 'Apfmpurmtd' => 14, 'Apfmpomtd' => 15, 'Apfmdateopen' => 16, 'Apfmlastpurdate' => 17, 'Apfmpur24mo01' => 18, 'Apfmpo24mo01' => 19, 'Apfmpur24mo02' => 20, 'Apfmpo24mo02' => 21, 'Apfmpur24mo03' => 22, 'Apfmpo24mo03' => 23, 'Apfmpur24mo04' => 24, 'Apfmpo24mo04' => 25, 'Apfmpur24mo05' => 26, 'Apfmpo24mo05' => 27, 'Apfmpur24mo06' => 28, 'Apfmpo24mo06' => 29, 'Apfmpur24mo07' => 30, 'Apfmpo24mo07' => 31, 'Apfmpur24mo08' => 32, 'Apfmpo24mo08' => 33, 'Apfmpur24mo09' => 34, 'Apfmpo24mo09' => 35, 'Apfmpur24mo10' => 36, 'Apfmpo24mo10' => 37, 'Apfmpur24mo11' => 38, 'Apfmpo24mo11' => 39, 'Apfmpur24mo12' => 40, 'Apfmpo24mo12' => 41, 'Apfmpur24mo13' => 42, 'Apfmpo24mo13' => 43, 'Apfmpur24mo14' => 44, 'Apfmpo24mo14' => 45, 'Apfmpur24mo15' => 46, 'Apfmpo24mo15' => 47, 'Apfmpur24mo16' => 48, 'Apfmpo24mo16' => 49, 'Apfmpur24mo17' => 50, 'Apfmpo24mo17' => 51, 'Apfmpur24mo18' => 52, 'Apfmpo24mo18' => 53, 'Apfmpur24mo19' => 54, 'Apfmpo24mo19' => 55, 'Apfmpur24mo20' => 56, 'Apfmpo24mo20' => 57, 'Apfmpur24mo21' => 58, 'Apfmpo24mo21' => 59, 'Apfmpur24mo22' => 60, 'Apfmpo24mo22' => 61, 'Apfmpur24mo23' => 62, 'Apfmpo24mo23' => 63, 'Apfmpur24mo24' => 64, 'Apfmpo24mo24' => 65, 'Apfmouracctnbr' => 66, 'Dateupdtd' => 67, 'Timeupdtd' => 68, 'Dummy' => 69, ),
        self::TYPE_CAMELNAME     => array('apvevendid' => 0, 'apfmshipid' => 1, 'apfmname' => 2, 'apfmadr1' => 3, 'apfmadr2' => 4, 'apfmadr3' => 5, 'apfmctry' => 6, 'apfmcity' => 7, 'apfmstat' => 8, 'apfmzipcode' => 9, 'apfmcont1' => 10, 'apfmcont2' => 11, 'artbsviacode' => 12, 'apfmglacct' => 13, 'apfmpurmtd' => 14, 'apfmpomtd' => 15, 'apfmdateopen' => 16, 'apfmlastpurdate' => 17, 'apfmpur24mo01' => 18, 'apfmpo24mo01' => 19, 'apfmpur24mo02' => 20, 'apfmpo24mo02' => 21, 'apfmpur24mo03' => 22, 'apfmpo24mo03' => 23, 'apfmpur24mo04' => 24, 'apfmpo24mo04' => 25, 'apfmpur24mo05' => 26, 'apfmpo24mo05' => 27, 'apfmpur24mo06' => 28, 'apfmpo24mo06' => 29, 'apfmpur24mo07' => 30, 'apfmpo24mo07' => 31, 'apfmpur24mo08' => 32, 'apfmpo24mo08' => 33, 'apfmpur24mo09' => 34, 'apfmpo24mo09' => 35, 'apfmpur24mo10' => 36, 'apfmpo24mo10' => 37, 'apfmpur24mo11' => 38, 'apfmpo24mo11' => 39, 'apfmpur24mo12' => 40, 'apfmpo24mo12' => 41, 'apfmpur24mo13' => 42, 'apfmpo24mo13' => 43, 'apfmpur24mo14' => 44, 'apfmpo24mo14' => 45, 'apfmpur24mo15' => 46, 'apfmpo24mo15' => 47, 'apfmpur24mo16' => 48, 'apfmpo24mo16' => 49, 'apfmpur24mo17' => 50, 'apfmpo24mo17' => 51, 'apfmpur24mo18' => 52, 'apfmpo24mo18' => 53, 'apfmpur24mo19' => 54, 'apfmpo24mo19' => 55, 'apfmpur24mo20' => 56, 'apfmpo24mo20' => 57, 'apfmpur24mo21' => 58, 'apfmpo24mo21' => 59, 'apfmpur24mo22' => 60, 'apfmpo24mo22' => 61, 'apfmpur24mo23' => 62, 'apfmpo24mo23' => 63, 'apfmpur24mo24' => 64, 'apfmpo24mo24' => 65, 'apfmouracctnbr' => 66, 'dateupdtd' => 67, 'timeupdtd' => 68, 'dummy' => 69, ),
        self::TYPE_COLNAME       => array(VendorShipfromTableMap::COL_APVEVENDID => 0, VendorShipfromTableMap::COL_APFMSHIPID => 1, VendorShipfromTableMap::COL_APFMNAME => 2, VendorShipfromTableMap::COL_APFMADR1 => 3, VendorShipfromTableMap::COL_APFMADR2 => 4, VendorShipfromTableMap::COL_APFMADR3 => 5, VendorShipfromTableMap::COL_APFMCTRY => 6, VendorShipfromTableMap::COL_APFMCITY => 7, VendorShipfromTableMap::COL_APFMSTAT => 8, VendorShipfromTableMap::COL_APFMZIPCODE => 9, VendorShipfromTableMap::COL_APFMCONT1 => 10, VendorShipfromTableMap::COL_APFMCONT2 => 11, VendorShipfromTableMap::COL_ARTBSVIACODE => 12, VendorShipfromTableMap::COL_APFMGLACCT => 13, VendorShipfromTableMap::COL_APFMPURMTD => 14, VendorShipfromTableMap::COL_APFMPOMTD => 15, VendorShipfromTableMap::COL_APFMDATEOPEN => 16, VendorShipfromTableMap::COL_APFMLASTPURDATE => 17, VendorShipfromTableMap::COL_APFMPUR24MO01 => 18, VendorShipfromTableMap::COL_APFMPO24MO01 => 19, VendorShipfromTableMap::COL_APFMPUR24MO02 => 20, VendorShipfromTableMap::COL_APFMPO24MO02 => 21, VendorShipfromTableMap::COL_APFMPUR24MO03 => 22, VendorShipfromTableMap::COL_APFMPO24MO03 => 23, VendorShipfromTableMap::COL_APFMPUR24MO04 => 24, VendorShipfromTableMap::COL_APFMPO24MO04 => 25, VendorShipfromTableMap::COL_APFMPUR24MO05 => 26, VendorShipfromTableMap::COL_APFMPO24MO05 => 27, VendorShipfromTableMap::COL_APFMPUR24MO06 => 28, VendorShipfromTableMap::COL_APFMPO24MO06 => 29, VendorShipfromTableMap::COL_APFMPUR24MO07 => 30, VendorShipfromTableMap::COL_APFMPO24MO07 => 31, VendorShipfromTableMap::COL_APFMPUR24MO08 => 32, VendorShipfromTableMap::COL_APFMPO24MO08 => 33, VendorShipfromTableMap::COL_APFMPUR24MO09 => 34, VendorShipfromTableMap::COL_APFMPO24MO09 => 35, VendorShipfromTableMap::COL_APFMPUR24MO10 => 36, VendorShipfromTableMap::COL_APFMPO24MO10 => 37, VendorShipfromTableMap::COL_APFMPUR24MO11 => 38, VendorShipfromTableMap::COL_APFMPO24MO11 => 39, VendorShipfromTableMap::COL_APFMPUR24MO12 => 40, VendorShipfromTableMap::COL_APFMPO24MO12 => 41, VendorShipfromTableMap::COL_APFMPUR24MO13 => 42, VendorShipfromTableMap::COL_APFMPO24MO13 => 43, VendorShipfromTableMap::COL_APFMPUR24MO14 => 44, VendorShipfromTableMap::COL_APFMPO24MO14 => 45, VendorShipfromTableMap::COL_APFMPUR24MO15 => 46, VendorShipfromTableMap::COL_APFMPO24MO15 => 47, VendorShipfromTableMap::COL_APFMPUR24MO16 => 48, VendorShipfromTableMap::COL_APFMPO24MO16 => 49, VendorShipfromTableMap::COL_APFMPUR24MO17 => 50, VendorShipfromTableMap::COL_APFMPO24MO17 => 51, VendorShipfromTableMap::COL_APFMPUR24MO18 => 52, VendorShipfromTableMap::COL_APFMPO24MO18 => 53, VendorShipfromTableMap::COL_APFMPUR24MO19 => 54, VendorShipfromTableMap::COL_APFMPO24MO19 => 55, VendorShipfromTableMap::COL_APFMPUR24MO20 => 56, VendorShipfromTableMap::COL_APFMPO24MO20 => 57, VendorShipfromTableMap::COL_APFMPUR24MO21 => 58, VendorShipfromTableMap::COL_APFMPO24MO21 => 59, VendorShipfromTableMap::COL_APFMPUR24MO22 => 60, VendorShipfromTableMap::COL_APFMPO24MO22 => 61, VendorShipfromTableMap::COL_APFMPUR24MO23 => 62, VendorShipfromTableMap::COL_APFMPO24MO23 => 63, VendorShipfromTableMap::COL_APFMPUR24MO24 => 64, VendorShipfromTableMap::COL_APFMPO24MO24 => 65, VendorShipfromTableMap::COL_APFMOURACCTNBR => 66, VendorShipfromTableMap::COL_DATEUPDTD => 67, VendorShipfromTableMap::COL_TIMEUPDTD => 68, VendorShipfromTableMap::COL_DUMMY => 69, ),
        self::TYPE_FIELDNAME     => array('ApveVendId' => 0, 'ApfmShipId' => 1, 'ApfmName' => 2, 'ApfmAdr1' => 3, 'ApfmAdr2' => 4, 'ApfmAdr3' => 5, 'ApfmCtry' => 6, 'ApfmCity' => 7, 'ApfmStat' => 8, 'ApfmZipCode' => 9, 'ApfmCont1' => 10, 'ApfmCont2' => 11, 'ArtbSviaCode' => 12, 'ApfmGlAcct' => 13, 'ApfmPurMtd' => 14, 'ApfmPoMtd' => 15, 'ApfmDateOpen' => 16, 'ApfmLastPurDate' => 17, 'ApfmPur24mo01' => 18, 'ApfmPo24mo01' => 19, 'ApfmPur24mo02' => 20, 'ApfmPo24mo02' => 21, 'ApfmPur24mo03' => 22, 'ApfmPo24mo03' => 23, 'ApfmPur24mo04' => 24, 'ApfmPo24mo04' => 25, 'ApfmPur24mo05' => 26, 'ApfmPo24mo05' => 27, 'ApfmPur24mo06' => 28, 'ApfmPo24mo06' => 29, 'ApfmPur24mo07' => 30, 'ApfmPo24mo07' => 31, 'ApfmPur24mo08' => 32, 'ApfmPo24mo08' => 33, 'ApfmPur24mo09' => 34, 'ApfmPo24mo09' => 35, 'ApfmPur24mo10' => 36, 'ApfmPo24mo10' => 37, 'ApfmPur24mo11' => 38, 'ApfmPo24mo11' => 39, 'ApfmPur24mo12' => 40, 'ApfmPo24mo12' => 41, 'ApfmPur24mo13' => 42, 'ApfmPo24mo13' => 43, 'ApfmPur24mo14' => 44, 'ApfmPo24mo14' => 45, 'ApfmPur24mo15' => 46, 'ApfmPo24mo15' => 47, 'ApfmPur24mo16' => 48, 'ApfmPo24mo16' => 49, 'ApfmPur24mo17' => 50, 'ApfmPo24mo17' => 51, 'ApfmPur24mo18' => 52, 'ApfmPo24mo18' => 53, 'ApfmPur24mo19' => 54, 'ApfmPo24mo19' => 55, 'ApfmPur24mo20' => 56, 'ApfmPo24mo20' => 57, 'ApfmPur24mo21' => 58, 'ApfmPo24mo21' => 59, 'ApfmPur24mo22' => 60, 'ApfmPo24mo22' => 61, 'ApfmPur24mo23' => 62, 'ApfmPo24mo23' => 63, 'ApfmPur24mo24' => 64, 'ApfmPo24mo24' => 65, 'ApfmOurAcctNbr' => 66, 'DateUpdtd' => 67, 'TimeUpdtd' => 68, 'dummy' => 69, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, )
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
        $this->setName('ap_ship_from');
        $this->setPhpName('VendorShipfrom');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\VendorShipfrom');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ApveVendId', 'Apvevendid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addPrimaryKey('ApfmShipId', 'Apfmshipid', 'VARCHAR', true, 6, '');
        $this->addColumn('ApfmName', 'Apfmname', 'VARCHAR', false, 30, null);
        $this->addColumn('ApfmAdr1', 'Apfmadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ApfmAdr2', 'Apfmadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ApfmAdr3', 'Apfmadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ApfmCtry', 'Apfmctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ApfmCity', 'Apfmcity', 'VARCHAR', false, 16, null);
        $this->addColumn('ApfmStat', 'Apfmstat', 'VARCHAR', false, 2, null);
        $this->addColumn('ApfmZipCode', 'Apfmzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('ApfmCont1', 'Apfmcont1', 'VARCHAR', false, 20, null);
        $this->addColumn('ApfmCont2', 'Apfmcont2', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtbSviaCode', 'Artbsviacode', 'VARCHAR', false, 4, null);
        $this->addColumn('ApfmGlAcct', 'Apfmglacct', 'VARCHAR', false, 16, null);
        $this->addColumn('ApfmPurMtd', 'Apfmpurmtd', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPoMtd', 'Apfmpomtd', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmDateOpen', 'Apfmdateopen', 'VARCHAR', false, 8, null);
        $this->addColumn('ApfmLastPurDate', 'Apfmlastpurdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ApfmPur24mo01', 'Apfmpur24mo01', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo01', 'Apfmpo24mo01', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo02', 'Apfmpur24mo02', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo02', 'Apfmpo24mo02', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo03', 'Apfmpur24mo03', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo03', 'Apfmpo24mo03', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo04', 'Apfmpur24mo04', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo04', 'Apfmpo24mo04', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo05', 'Apfmpur24mo05', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo05', 'Apfmpo24mo05', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo06', 'Apfmpur24mo06', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo06', 'Apfmpo24mo06', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo07', 'Apfmpur24mo07', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo07', 'Apfmpo24mo07', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo08', 'Apfmpur24mo08', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo08', 'Apfmpo24mo08', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo09', 'Apfmpur24mo09', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo09', 'Apfmpo24mo09', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo10', 'Apfmpur24mo10', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo10', 'Apfmpo24mo10', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo11', 'Apfmpur24mo11', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo11', 'Apfmpo24mo11', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo12', 'Apfmpur24mo12', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo12', 'Apfmpo24mo12', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo13', 'Apfmpur24mo13', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo13', 'Apfmpo24mo13', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo14', 'Apfmpur24mo14', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo14', 'Apfmpo24mo14', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo15', 'Apfmpur24mo15', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo15', 'Apfmpo24mo15', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo16', 'Apfmpur24mo16', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo16', 'Apfmpo24mo16', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo17', 'Apfmpur24mo17', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo17', 'Apfmpo24mo17', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo18', 'Apfmpur24mo18', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo18', 'Apfmpo24mo18', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo19', 'Apfmpur24mo19', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo19', 'Apfmpo24mo19', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo20', 'Apfmpur24mo20', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo20', 'Apfmpo24mo20', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo21', 'Apfmpur24mo21', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo21', 'Apfmpo24mo21', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo22', 'Apfmpur24mo22', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo22', 'Apfmpo24mo22', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo23', 'Apfmpur24mo23', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo23', 'Apfmpo24mo23', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmPur24mo24', 'Apfmpur24mo24', 'DECIMAL', false, 20, null);
        $this->addColumn('ApfmPo24mo24', 'Apfmpo24mo24', 'INTEGER', false, 7, null);
        $this->addColumn('ApfmOurAcctNbr', 'Apfmouracctnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \VendorShipfrom $obj A \VendorShipfrom object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getApvevendid() || is_scalar($obj->getApvevendid()) || is_callable([$obj->getApvevendid(), '__toString']) ? (string) $obj->getApvevendid() : $obj->getApvevendid()), (null === $obj->getApfmshipid() || is_scalar($obj->getApfmshipid()) || is_callable([$obj->getApfmshipid(), '__toString']) ? (string) $obj->getApfmshipid() : $obj->getApfmshipid())]);
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
     * @param mixed $value A \VendorShipfrom object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \VendorShipfrom) {
                $key = serialize([(null === $value->getApvevendid() || is_scalar($value->getApvevendid()) || is_callable([$value->getApvevendid(), '__toString']) ? (string) $value->getApvevendid() : $value->getApvevendid()), (null === $value->getApfmshipid() || is_scalar($value->getApfmshipid()) || is_callable([$value->getApfmshipid(), '__toString']) ? (string) $value->getApfmshipid() : $value->getApfmshipid())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \VendorShipfrom object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? VendorShipfromTableMap::CLASS_DEFAULT : VendorShipfromTableMap::OM_CLASS;
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
     * @return array           (VendorShipfrom object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = VendorShipfromTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = VendorShipfromTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + VendorShipfromTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VendorShipfromTableMap::OM_CLASS;
            /** @var VendorShipfrom $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            VendorShipfromTableMap::addInstanceToPool($obj, $key);
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
            $key = VendorShipfromTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = VendorShipfromTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var VendorShipfrom $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VendorShipfromTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMSHIPID);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMNAME);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMADR1);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMADR2);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMADR3);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMCTRY);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMCITY);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMSTAT);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMZIPCODE);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMCONT1);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMCONT2);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_ARTBSVIACODE);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMGLACCT);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPURMTD);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPOMTD);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMDATEOPEN);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMLASTPURDATE);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO01);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO01);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO02);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO02);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO03);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO03);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO04);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO04);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO05);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO05);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO06);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO06);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO07);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO07);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO08);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO08);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO09);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO09);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO10);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO10);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO11);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO11);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO12);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO12);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO13);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO13);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO14);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO14);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO15);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO15);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO16);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO16);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO17);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO17);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO18);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO18);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO19);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO19);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO20);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO20);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO21);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO21);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO22);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO22);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO23);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO23);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPUR24MO24);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMPO24MO24);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_APFMOURACCTNBR);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(VendorShipfromTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.ApfmShipId');
            $criteria->addSelectColumn($alias . '.ApfmName');
            $criteria->addSelectColumn($alias . '.ApfmAdr1');
            $criteria->addSelectColumn($alias . '.ApfmAdr2');
            $criteria->addSelectColumn($alias . '.ApfmAdr3');
            $criteria->addSelectColumn($alias . '.ApfmCtry');
            $criteria->addSelectColumn($alias . '.ApfmCity');
            $criteria->addSelectColumn($alias . '.ApfmStat');
            $criteria->addSelectColumn($alias . '.ApfmZipCode');
            $criteria->addSelectColumn($alias . '.ApfmCont1');
            $criteria->addSelectColumn($alias . '.ApfmCont2');
            $criteria->addSelectColumn($alias . '.ArtbSviaCode');
            $criteria->addSelectColumn($alias . '.ApfmGlAcct');
            $criteria->addSelectColumn($alias . '.ApfmPurMtd');
            $criteria->addSelectColumn($alias . '.ApfmPoMtd');
            $criteria->addSelectColumn($alias . '.ApfmDateOpen');
            $criteria->addSelectColumn($alias . '.ApfmLastPurDate');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo01');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo01');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo02');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo02');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo03');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo03');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo04');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo04');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo05');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo05');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo06');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo06');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo07');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo07');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo08');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo08');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo09');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo09');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo10');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo10');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo11');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo11');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo12');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo12');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo13');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo13');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo14');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo14');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo15');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo15');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo16');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo16');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo17');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo17');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo18');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo18');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo19');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo19');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo20');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo20');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo21');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo21');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo22');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo22');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo23');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo23');
            $criteria->addSelectColumn($alias . '.ApfmPur24mo24');
            $criteria->addSelectColumn($alias . '.ApfmPo24mo24');
            $criteria->addSelectColumn($alias . '.ApfmOurAcctNbr');
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
        return Propel::getServiceContainer()->getDatabaseMap(VendorShipfromTableMap::DATABASE_NAME)->getTable(VendorShipfromTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(VendorShipfromTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(VendorShipfromTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new VendorShipfromTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a VendorShipfrom or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or VendorShipfrom object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \VendorShipfrom) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VendorShipfromTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(VendorShipfromTableMap::COL_APVEVENDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(VendorShipfromTableMap::COL_APFMSHIPID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = VendorShipfromQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            VendorShipfromTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                VendorShipfromTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_ship_from table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return VendorShipfromQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a VendorShipfrom or Criteria object.
     *
     * @param mixed               $criteria Criteria or VendorShipfrom object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from VendorShipfrom object
        }


        // Set the correct dbName
        $query = VendorShipfromQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // VendorShipfromTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
VendorShipfromTableMap::buildTableMap();
