<?php

namespace Map;

use \Vendor;
use \VendorQuery;
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
 * This class defines the structure of the 'ap_vend_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class VendorTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.VendorTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ap_vend_mast';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'Vendor';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Vendor';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'Vendor';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 177;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 177;

    /**
     * the column name for the VendRecNbr field
     */
    public const COL_VENDRECNBR = 'ap_vend_mast.VendRecNbr';

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'ap_vend_mast.ApveVendId';

    /**
     * the column name for the ApveName field
     */
    public const COL_APVENAME = 'ap_vend_mast.ApveName';

    /**
     * the column name for the ApveAdr1 field
     */
    public const COL_APVEADR1 = 'ap_vend_mast.ApveAdr1';

    /**
     * the column name for the ApveAdr2 field
     */
    public const COL_APVEADR2 = 'ap_vend_mast.ApveAdr2';

    /**
     * the column name for the ApveAdr3 field
     */
    public const COL_APVEADR3 = 'ap_vend_mast.ApveAdr3';

    /**
     * the column name for the ApveCtry field
     */
    public const COL_APVECTRY = 'ap_vend_mast.ApveCtry';

    /**
     * the column name for the ApveCity field
     */
    public const COL_APVECITY = 'ap_vend_mast.ApveCity';

    /**
     * the column name for the ApveStat field
     */
    public const COL_APVESTAT = 'ap_vend_mast.ApveStat';

    /**
     * the column name for the ApveZipCode field
     */
    public const COL_APVEZIPCODE = 'ap_vend_mast.ApveZipCode';

    /**
     * the column name for the ApvePayName field
     */
    public const COL_APVEPAYNAME = 'ap_vend_mast.ApvePayName';

    /**
     * the column name for the ApvePayAdr1 field
     */
    public const COL_APVEPAYADR1 = 'ap_vend_mast.ApvePayAdr1';

    /**
     * the column name for the ApvePayAdr2 field
     */
    public const COL_APVEPAYADR2 = 'ap_vend_mast.ApvePayAdr2';

    /**
     * the column name for the ApvePayAdr3 field
     */
    public const COL_APVEPAYADR3 = 'ap_vend_mast.ApvePayAdr3';

    /**
     * the column name for the ApvePayCtry field
     */
    public const COL_APVEPAYCTRY = 'ap_vend_mast.ApvePayCtry';

    /**
     * the column name for the ApvePayCity field
     */
    public const COL_APVEPAYCITY = 'ap_vend_mast.ApvePayCity';

    /**
     * the column name for the ApvePayStat field
     */
    public const COL_APVEPAYSTAT = 'ap_vend_mast.ApvePayStat';

    /**
     * the column name for the ApvePayZipCode field
     */
    public const COL_APVEPAYZIPCODE = 'ap_vend_mast.ApvePayZipCode';

    /**
     * the column name for the ApveStatus field
     */
    public const COL_APVESTATUS = 'ap_vend_mast.ApveStatus';

    /**
     * the column name for the ApveTakeExpiredDisc field
     */
    public const COL_APVETAKEEXPIREDDISC = 'ap_vend_mast.ApveTakeExpiredDisc';

    /**
     * the column name for the ApvePrintHts field
     */
    public const COL_APVEPRINTHTS = 'ap_vend_mast.ApvePrintHts';

    /**
     * the column name for the ApveFabBin field
     */
    public const COL_APVEFABBIN = 'ap_vend_mast.ApveFabBin';

    /**
     * the column name for the ApveLmPrntBulk field
     */
    public const COL_APVELMPRNTBULK = 'ap_vend_mast.ApveLmPrntBulk';

    /**
     * the column name for the ApveAllowDropShip field
     */
    public const COL_APVEALLOWDROPSHIP = 'ap_vend_mast.ApveAllowDropShip';

    /**
     * the column name for the AptbTypeCode field
     */
    public const COL_APTBTYPECODE = 'ap_vend_mast.AptbTypeCode';

    /**
     * the column name for the AptmTermCode field
     */
    public const COL_APTMTERMCODE = 'ap_vend_mast.AptmTermCode';

    /**
     * the column name for the ApveSviaCode field
     */
    public const COL_APVESVIACODE = 'ap_vend_mast.ApveSviaCode';

    /**
     * the column name for the ApveOldFob field
     */
    public const COL_APVEOLDFOB = 'ap_vend_mast.ApveOldFob';

    /**
     * the column name for the ApveLeadDays field
     */
    public const COL_APVELEADDAYS = 'ap_vend_mast.ApveLeadDays';

    /**
     * the column name for the ApveGlAcct field
     */
    public const COL_APVEGLACCT = 'ap_vend_mast.ApveGlAcct';

    /**
     * the column name for the Apve1099SsNbr field
     */
    public const COL_APVE1099SSNBR = 'ap_vend_mast.Apve1099SsNbr';

    /**
     * the column name for the ApveMinOrdrCode field
     */
    public const COL_APVEMINORDRCODE = 'ap_vend_mast.ApveMinOrdrCode';

    /**
     * the column name for the ApveMinOrdrValue field
     */
    public const COL_APVEMINORDRVALUE = 'ap_vend_mast.ApveMinOrdrValue';

    /**
     * the column name for the ApvePurMtd field
     */
    public const COL_APVEPURMTD = 'ap_vend_mast.ApvePurMtd';

    /**
     * the column name for the ApvePoMtd field
     */
    public const COL_APVEPOMTD = 'ap_vend_mast.ApvePoMtd';

    /**
     * the column name for the ApveInvcMtd field
     */
    public const COL_APVEINVCMTD = 'ap_vend_mast.ApveInvcMtd';

    /**
     * the column name for the ApveIcntMtd field
     */
    public const COL_APVEICNTMTD = 'ap_vend_mast.ApveIcntMtd';

    /**
     * the column name for the ApveDateOpen field
     */
    public const COL_APVEDATEOPEN = 'ap_vend_mast.ApveDateOpen';

    /**
     * the column name for the ApveLastPurDate field
     */
    public const COL_APVELASTPURDATE = 'ap_vend_mast.ApveLastPurDate';

    /**
     * the column name for the ApvePur24mo01 field
     */
    public const COL_APVEPUR24MO01 = 'ap_vend_mast.ApvePur24mo01';

    /**
     * the column name for the ApvePo24mo01 field
     */
    public const COL_APVEPO24MO01 = 'ap_vend_mast.ApvePo24mo01';

    /**
     * the column name for the ApveInvc24mo01 field
     */
    public const COL_APVEINVC24MO01 = 'ap_vend_mast.ApveInvc24mo01';

    /**
     * the column name for the ApveIcnt24mo01 field
     */
    public const COL_APVEICNT24MO01 = 'ap_vend_mast.ApveIcnt24mo01';

    /**
     * the column name for the ApvePur24mo02 field
     */
    public const COL_APVEPUR24MO02 = 'ap_vend_mast.ApvePur24mo02';

    /**
     * the column name for the ApvePo24mo02 field
     */
    public const COL_APVEPO24MO02 = 'ap_vend_mast.ApvePo24mo02';

    /**
     * the column name for the ApveInvc24mo02 field
     */
    public const COL_APVEINVC24MO02 = 'ap_vend_mast.ApveInvc24mo02';

    /**
     * the column name for the ApveIcnt24mo02 field
     */
    public const COL_APVEICNT24MO02 = 'ap_vend_mast.ApveIcnt24mo02';

    /**
     * the column name for the ApvePur24mo03 field
     */
    public const COL_APVEPUR24MO03 = 'ap_vend_mast.ApvePur24mo03';

    /**
     * the column name for the ApvePo24mo03 field
     */
    public const COL_APVEPO24MO03 = 'ap_vend_mast.ApvePo24mo03';

    /**
     * the column name for the ApveInvc24mo03 field
     */
    public const COL_APVEINVC24MO03 = 'ap_vend_mast.ApveInvc24mo03';

    /**
     * the column name for the ApveIcnt24mo03 field
     */
    public const COL_APVEICNT24MO03 = 'ap_vend_mast.ApveIcnt24mo03';

    /**
     * the column name for the ApvePur24mo04 field
     */
    public const COL_APVEPUR24MO04 = 'ap_vend_mast.ApvePur24mo04';

    /**
     * the column name for the ApvePo24mo04 field
     */
    public const COL_APVEPO24MO04 = 'ap_vend_mast.ApvePo24mo04';

    /**
     * the column name for the ApveInvc24mo04 field
     */
    public const COL_APVEINVC24MO04 = 'ap_vend_mast.ApveInvc24mo04';

    /**
     * the column name for the ApveIcnt24mo04 field
     */
    public const COL_APVEICNT24MO04 = 'ap_vend_mast.ApveIcnt24mo04';

    /**
     * the column name for the ApvePur24mo05 field
     */
    public const COL_APVEPUR24MO05 = 'ap_vend_mast.ApvePur24mo05';

    /**
     * the column name for the ApvePo24mo05 field
     */
    public const COL_APVEPO24MO05 = 'ap_vend_mast.ApvePo24mo05';

    /**
     * the column name for the ApveInvc24mo05 field
     */
    public const COL_APVEINVC24MO05 = 'ap_vend_mast.ApveInvc24mo05';

    /**
     * the column name for the ApveIcnt24mo05 field
     */
    public const COL_APVEICNT24MO05 = 'ap_vend_mast.ApveIcnt24mo05';

    /**
     * the column name for the ApvePur24mo06 field
     */
    public const COL_APVEPUR24MO06 = 'ap_vend_mast.ApvePur24mo06';

    /**
     * the column name for the ApvePo24mo06 field
     */
    public const COL_APVEPO24MO06 = 'ap_vend_mast.ApvePo24mo06';

    /**
     * the column name for the ApveInvc24mo06 field
     */
    public const COL_APVEINVC24MO06 = 'ap_vend_mast.ApveInvc24mo06';

    /**
     * the column name for the ApveIcnt24mo06 field
     */
    public const COL_APVEICNT24MO06 = 'ap_vend_mast.ApveIcnt24mo06';

    /**
     * the column name for the ApvePur24mo07 field
     */
    public const COL_APVEPUR24MO07 = 'ap_vend_mast.ApvePur24mo07';

    /**
     * the column name for the ApvePo24mo07 field
     */
    public const COL_APVEPO24MO07 = 'ap_vend_mast.ApvePo24mo07';

    /**
     * the column name for the ApveInvc24mo07 field
     */
    public const COL_APVEINVC24MO07 = 'ap_vend_mast.ApveInvc24mo07';

    /**
     * the column name for the ApveIcnt24mo07 field
     */
    public const COL_APVEICNT24MO07 = 'ap_vend_mast.ApveIcnt24mo07';

    /**
     * the column name for the ApvePur24mo08 field
     */
    public const COL_APVEPUR24MO08 = 'ap_vend_mast.ApvePur24mo08';

    /**
     * the column name for the ApvePo24mo08 field
     */
    public const COL_APVEPO24MO08 = 'ap_vend_mast.ApvePo24mo08';

    /**
     * the column name for the ApveInvc24mo08 field
     */
    public const COL_APVEINVC24MO08 = 'ap_vend_mast.ApveInvc24mo08';

    /**
     * the column name for the ApveIcnt24mo08 field
     */
    public const COL_APVEICNT24MO08 = 'ap_vend_mast.ApveIcnt24mo08';

    /**
     * the column name for the ApvePur24mo09 field
     */
    public const COL_APVEPUR24MO09 = 'ap_vend_mast.ApvePur24mo09';

    /**
     * the column name for the ApvePo24mo09 field
     */
    public const COL_APVEPO24MO09 = 'ap_vend_mast.ApvePo24mo09';

    /**
     * the column name for the ApveInvc24mo09 field
     */
    public const COL_APVEINVC24MO09 = 'ap_vend_mast.ApveInvc24mo09';

    /**
     * the column name for the ApveIcnt24mo09 field
     */
    public const COL_APVEICNT24MO09 = 'ap_vend_mast.ApveIcnt24mo09';

    /**
     * the column name for the ApvePur24mo10 field
     */
    public const COL_APVEPUR24MO10 = 'ap_vend_mast.ApvePur24mo10';

    /**
     * the column name for the ApvePo24mo10 field
     */
    public const COL_APVEPO24MO10 = 'ap_vend_mast.ApvePo24mo10';

    /**
     * the column name for the ApveInvc24mo10 field
     */
    public const COL_APVEINVC24MO10 = 'ap_vend_mast.ApveInvc24mo10';

    /**
     * the column name for the ApveIcnt24mo10 field
     */
    public const COL_APVEICNT24MO10 = 'ap_vend_mast.ApveIcnt24mo10';

    /**
     * the column name for the ApvePur24mo11 field
     */
    public const COL_APVEPUR24MO11 = 'ap_vend_mast.ApvePur24mo11';

    /**
     * the column name for the ApvePo24mo11 field
     */
    public const COL_APVEPO24MO11 = 'ap_vend_mast.ApvePo24mo11';

    /**
     * the column name for the ApveInvc24mo11 field
     */
    public const COL_APVEINVC24MO11 = 'ap_vend_mast.ApveInvc24mo11';

    /**
     * the column name for the ApveIcnt24mo11 field
     */
    public const COL_APVEICNT24MO11 = 'ap_vend_mast.ApveIcnt24mo11';

    /**
     * the column name for the ApvePur24mo12 field
     */
    public const COL_APVEPUR24MO12 = 'ap_vend_mast.ApvePur24mo12';

    /**
     * the column name for the ApvePo24mo12 field
     */
    public const COL_APVEPO24MO12 = 'ap_vend_mast.ApvePo24mo12';

    /**
     * the column name for the ApveInvc24mo12 field
     */
    public const COL_APVEINVC24MO12 = 'ap_vend_mast.ApveInvc24mo12';

    /**
     * the column name for the ApveIcnt24mo12 field
     */
    public const COL_APVEICNT24MO12 = 'ap_vend_mast.ApveIcnt24mo12';

    /**
     * the column name for the ApvePur24mo13 field
     */
    public const COL_APVEPUR24MO13 = 'ap_vend_mast.ApvePur24mo13';

    /**
     * the column name for the ApvePo24mo13 field
     */
    public const COL_APVEPO24MO13 = 'ap_vend_mast.ApvePo24mo13';

    /**
     * the column name for the ApveInvc24mo13 field
     */
    public const COL_APVEINVC24MO13 = 'ap_vend_mast.ApveInvc24mo13';

    /**
     * the column name for the ApveIcnt24mo13 field
     */
    public const COL_APVEICNT24MO13 = 'ap_vend_mast.ApveIcnt24mo13';

    /**
     * the column name for the ApvePur24mo14 field
     */
    public const COL_APVEPUR24MO14 = 'ap_vend_mast.ApvePur24mo14';

    /**
     * the column name for the ApvePo24mo14 field
     */
    public const COL_APVEPO24MO14 = 'ap_vend_mast.ApvePo24mo14';

    /**
     * the column name for the ApveInvc24mo14 field
     */
    public const COL_APVEINVC24MO14 = 'ap_vend_mast.ApveInvc24mo14';

    /**
     * the column name for the ApveIcnt24mo14 field
     */
    public const COL_APVEICNT24MO14 = 'ap_vend_mast.ApveIcnt24mo14';

    /**
     * the column name for the ApvePur24mo15 field
     */
    public const COL_APVEPUR24MO15 = 'ap_vend_mast.ApvePur24mo15';

    /**
     * the column name for the ApvePo24mo15 field
     */
    public const COL_APVEPO24MO15 = 'ap_vend_mast.ApvePo24mo15';

    /**
     * the column name for the ApveInvc24mo15 field
     */
    public const COL_APVEINVC24MO15 = 'ap_vend_mast.ApveInvc24mo15';

    /**
     * the column name for the ApveIcnt24mo15 field
     */
    public const COL_APVEICNT24MO15 = 'ap_vend_mast.ApveIcnt24mo15';

    /**
     * the column name for the ApvePur24mo16 field
     */
    public const COL_APVEPUR24MO16 = 'ap_vend_mast.ApvePur24mo16';

    /**
     * the column name for the ApvePo24mo16 field
     */
    public const COL_APVEPO24MO16 = 'ap_vend_mast.ApvePo24mo16';

    /**
     * the column name for the ApveInvc24mo16 field
     */
    public const COL_APVEINVC24MO16 = 'ap_vend_mast.ApveInvc24mo16';

    /**
     * the column name for the ApveIcnt24mo16 field
     */
    public const COL_APVEICNT24MO16 = 'ap_vend_mast.ApveIcnt24mo16';

    /**
     * the column name for the ApvePur24mo17 field
     */
    public const COL_APVEPUR24MO17 = 'ap_vend_mast.ApvePur24mo17';

    /**
     * the column name for the ApvePo24mo17 field
     */
    public const COL_APVEPO24MO17 = 'ap_vend_mast.ApvePo24mo17';

    /**
     * the column name for the ApveInvc24mo17 field
     */
    public const COL_APVEINVC24MO17 = 'ap_vend_mast.ApveInvc24mo17';

    /**
     * the column name for the ApveIcnt24mo17 field
     */
    public const COL_APVEICNT24MO17 = 'ap_vend_mast.ApveIcnt24mo17';

    /**
     * the column name for the ApvePur24mo18 field
     */
    public const COL_APVEPUR24MO18 = 'ap_vend_mast.ApvePur24mo18';

    /**
     * the column name for the ApvePo24mo18 field
     */
    public const COL_APVEPO24MO18 = 'ap_vend_mast.ApvePo24mo18';

    /**
     * the column name for the ApveInvc24mo18 field
     */
    public const COL_APVEINVC24MO18 = 'ap_vend_mast.ApveInvc24mo18';

    /**
     * the column name for the ApveIcnt24mo18 field
     */
    public const COL_APVEICNT24MO18 = 'ap_vend_mast.ApveIcnt24mo18';

    /**
     * the column name for the ApvePur24mo19 field
     */
    public const COL_APVEPUR24MO19 = 'ap_vend_mast.ApvePur24mo19';

    /**
     * the column name for the ApvePo24mo19 field
     */
    public const COL_APVEPO24MO19 = 'ap_vend_mast.ApvePo24mo19';

    /**
     * the column name for the ApveInvc24mo19 field
     */
    public const COL_APVEINVC24MO19 = 'ap_vend_mast.ApveInvc24mo19';

    /**
     * the column name for the ApveIcnt24mo19 field
     */
    public const COL_APVEICNT24MO19 = 'ap_vend_mast.ApveIcnt24mo19';

    /**
     * the column name for the ApvePur24mo20 field
     */
    public const COL_APVEPUR24MO20 = 'ap_vend_mast.ApvePur24mo20';

    /**
     * the column name for the ApvePo24mo20 field
     */
    public const COL_APVEPO24MO20 = 'ap_vend_mast.ApvePo24mo20';

    /**
     * the column name for the ApveInvc24mo20 field
     */
    public const COL_APVEINVC24MO20 = 'ap_vend_mast.ApveInvc24mo20';

    /**
     * the column name for the ApveIcnt24mo20 field
     */
    public const COL_APVEICNT24MO20 = 'ap_vend_mast.ApveIcnt24mo20';

    /**
     * the column name for the ApvePur24mo21 field
     */
    public const COL_APVEPUR24MO21 = 'ap_vend_mast.ApvePur24mo21';

    /**
     * the column name for the ApvePo24mo21 field
     */
    public const COL_APVEPO24MO21 = 'ap_vend_mast.ApvePo24mo21';

    /**
     * the column name for the ApveInvc24mo21 field
     */
    public const COL_APVEINVC24MO21 = 'ap_vend_mast.ApveInvc24mo21';

    /**
     * the column name for the ApveIcnt24mo21 field
     */
    public const COL_APVEICNT24MO21 = 'ap_vend_mast.ApveIcnt24mo21';

    /**
     * the column name for the ApvePur24mo22 field
     */
    public const COL_APVEPUR24MO22 = 'ap_vend_mast.ApvePur24mo22';

    /**
     * the column name for the ApvePo24mo22 field
     */
    public const COL_APVEPO24MO22 = 'ap_vend_mast.ApvePo24mo22';

    /**
     * the column name for the ApveInvc24mo22 field
     */
    public const COL_APVEINVC24MO22 = 'ap_vend_mast.ApveInvc24mo22';

    /**
     * the column name for the ApveIcnt24mo22 field
     */
    public const COL_APVEICNT24MO22 = 'ap_vend_mast.ApveIcnt24mo22';

    /**
     * the column name for the ApvePur24mo23 field
     */
    public const COL_APVEPUR24MO23 = 'ap_vend_mast.ApvePur24mo23';

    /**
     * the column name for the ApvePo24mo23 field
     */
    public const COL_APVEPO24MO23 = 'ap_vend_mast.ApvePo24mo23';

    /**
     * the column name for the ApveInvc24mo23 field
     */
    public const COL_APVEINVC24MO23 = 'ap_vend_mast.ApveInvc24mo23';

    /**
     * the column name for the ApveIcnt24mo23 field
     */
    public const COL_APVEICNT24MO23 = 'ap_vend_mast.ApveIcnt24mo23';

    /**
     * the column name for the ApvePur24mo24 field
     */
    public const COL_APVEPUR24MO24 = 'ap_vend_mast.ApvePur24mo24';

    /**
     * the column name for the ApvePo24mo24 field
     */
    public const COL_APVEPO24MO24 = 'ap_vend_mast.ApvePo24mo24';

    /**
     * the column name for the ApveInvc24mo24 field
     */
    public const COL_APVEINVC24MO24 = 'ap_vend_mast.ApveInvc24mo24';

    /**
     * the column name for the ApveIcnt24mo24 field
     */
    public const COL_APVEICNT24MO24 = 'ap_vend_mast.ApveIcnt24mo24';

    /**
     * the column name for the ApveCrncy field
     */
    public const COL_APVECRNCY = 'ap_vend_mast.ApveCrncy';

    /**
     * the column name for the ApveFrtInAmt field
     */
    public const COL_APVEFRTINAMT = 'ap_vend_mast.ApveFrtInAmt';

    /**
     * the column name for the ApveOurAcctNbr field
     */
    public const COL_APVEOURACCTNBR = 'ap_vend_mast.ApveOurAcctNbr';

    /**
     * the column name for the ApveVendDisc field
     */
    public const COL_APVEVENDDISC = 'ap_vend_mast.ApveVendDisc';

    /**
     * the column name for the ApveFob field
     */
    public const COL_APVEFOB = 'ap_vend_mast.ApveFob';

    /**
     * the column name for the ApveRoylPct field
     */
    public const COL_APVEROYLPCT = 'ap_vend_mast.ApveRoylPct';

    /**
     * the column name for the ApvePrtPoEOrU field
     */
    public const COL_APVEPRTPOEORU = 'ap_vend_mast.ApvePrtPoEOrU';

    /**
     * the column name for the ApveComRate field
     */
    public const COL_APVECOMRATE = 'ap_vend_mast.ApveComRate';

    /**
     * the column name for the ApveUseLandOnRcpt field
     */
    public const COL_APVEUSELANDONRCPT = 'ap_vend_mast.ApveUseLandOnRcpt';

    /**
     * the column name for the ApveBuyrWhse1 field
     */
    public const COL_APVEBUYRWHSE1 = 'ap_vend_mast.ApveBuyrWhse1';

    /**
     * the column name for the ApveBuyrCode1 field
     */
    public const COL_APVEBUYRCODE1 = 'ap_vend_mast.ApveBuyrCode1';

    /**
     * the column name for the ApveBuyrWhse2 field
     */
    public const COL_APVEBUYRWHSE2 = 'ap_vend_mast.ApveBuyrWhse2';

    /**
     * the column name for the ApveBuyrCode2 field
     */
    public const COL_APVEBUYRCODE2 = 'ap_vend_mast.ApveBuyrCode2';

    /**
     * the column name for the ApveBuyrWhse3 field
     */
    public const COL_APVEBUYRWHSE3 = 'ap_vend_mast.ApveBuyrWhse3';

    /**
     * the column name for the ApveBuyrCode3 field
     */
    public const COL_APVEBUYRCODE3 = 'ap_vend_mast.ApveBuyrCode3';

    /**
     * the column name for the ApveBuyrWhse4 field
     */
    public const COL_APVEBUYRWHSE4 = 'ap_vend_mast.ApveBuyrWhse4';

    /**
     * the column name for the ApveBuyrCode4 field
     */
    public const COL_APVEBUYRCODE4 = 'ap_vend_mast.ApveBuyrCode4';

    /**
     * the column name for the ApveBuyrWhse5 field
     */
    public const COL_APVEBUYRWHSE5 = 'ap_vend_mast.ApveBuyrWhse5';

    /**
     * the column name for the ApveBuyrCode5 field
     */
    public const COL_APVEBUYRCODE5 = 'ap_vend_mast.ApveBuyrCode5';

    /**
     * the column name for the ApveBuyrWhse6 field
     */
    public const COL_APVEBUYRWHSE6 = 'ap_vend_mast.ApveBuyrWhse6';

    /**
     * the column name for the ApveBuyrCode6 field
     */
    public const COL_APVEBUYRCODE6 = 'ap_vend_mast.ApveBuyrCode6';

    /**
     * the column name for the ApveBuyrWhse7 field
     */
    public const COL_APVEBUYRWHSE7 = 'ap_vend_mast.ApveBuyrWhse7';

    /**
     * the column name for the ApveBuyrCode7 field
     */
    public const COL_APVEBUYRCODE7 = 'ap_vend_mast.ApveBuyrCode7';

    /**
     * the column name for the ApveBuyrWhse8 field
     */
    public const COL_APVEBUYRWHSE8 = 'ap_vend_mast.ApveBuyrWhse8';

    /**
     * the column name for the ApveBuyrCode8 field
     */
    public const COL_APVEBUYRCODE8 = 'ap_vend_mast.ApveBuyrCode8';

    /**
     * the column name for the ApveBuyrWhse9 field
     */
    public const COL_APVEBUYRWHSE9 = 'ap_vend_mast.ApveBuyrWhse9';

    /**
     * the column name for the ApveBuyrCode9 field
     */
    public const COL_APVEBUYRCODE9 = 'ap_vend_mast.ApveBuyrCode9';

    /**
     * the column name for the ApveBuyrWhse10 field
     */
    public const COL_APVEBUYRWHSE10 = 'ap_vend_mast.ApveBuyrWhse10';

    /**
     * the column name for the ApveBuyrCode10 field
     */
    public const COL_APVEBUYRCODE10 = 'ap_vend_mast.ApveBuyrCode10';

    /**
     * the column name for the ApveLandCost field
     */
    public const COL_APVELANDCOST = 'ap_vend_mast.ApveLandCost';

    /**
     * the column name for the ApveReleaseNbr field
     */
    public const COL_APVERELEASENBR = 'ap_vend_mast.ApveReleaseNbr';

    /**
     * the column name for the ApveScanStartPos field
     */
    public const COL_APVESCANSTARTPOS = 'ap_vend_mast.ApveScanStartPos';

    /**
     * the column name for the ApveScanLength field
     */
    public const COL_APVESCANLENGTH = 'ap_vend_mast.ApveScanLength';

    /**
     * the column name for the ApvePurYtd field
     */
    public const COL_APVEPURYTD = 'ap_vend_mast.ApvePurYtd';

    /**
     * the column name for the ApvePoYtd field
     */
    public const COL_APVEPOYTD = 'ap_vend_mast.ApvePoYtd';

    /**
     * the column name for the ApveInvcYtd field
     */
    public const COL_APVEINVCYTD = 'ap_vend_mast.ApveInvcYtd';

    /**
     * the column name for the ApveIcntYtd field
     */
    public const COL_APVEICNTYTD = 'ap_vend_mast.ApveIcntYtd';

    /**
     * the column name for the ApveUseAch field
     */
    public const COL_APVEUSEACH = 'ap_vend_mast.ApveUseAch';

    /**
     * the column name for the ApveCat3 field
     */
    public const COL_APVECAT3 = 'ap_vend_mast.ApveCat3';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ap_vend_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ap_vend_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ap_vend_mast.dummy';

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
        self::TYPE_PHPNAME       => ['Vendrecnbr', 'Apvevendid', 'Apvename', 'Apveadr1', 'Apveadr2', 'Apveadr3', 'Apvectry', 'Apvecity', 'Apvestat', 'Apvezipcode', 'Apvepayname', 'Apvepayadr1', 'Apvepayadr2', 'Apvepayadr3', 'Apvepayctry', 'Apvepaycity', 'Apvepaystat', 'Apvepayzipcode', 'Apvestatus', 'Apvetakeexpireddisc', 'Apveprinthts', 'Apvefabbin', 'Apvelmprntbulk', 'Apveallowdropship', 'Aptbtypecode', 'Aptmtermcode', 'Apvesviacode', 'Apveoldfob', 'Apveleaddays', 'Apveglacct', 'Apve1099ssnbr', 'Apveminordrcode', 'Apveminordrvalue', 'Apvepurmtd', 'Apvepomtd', 'Apveinvcmtd', 'Apveicntmtd', 'Apvedateopen', 'Apvelastpurdate', 'Apvepur24mo01', 'Apvepo24mo01', 'Apveinvc24mo01', 'Apveicnt24mo01', 'Apvepur24mo02', 'Apvepo24mo02', 'Apveinvc24mo02', 'Apveicnt24mo02', 'Apvepur24mo03', 'Apvepo24mo03', 'Apveinvc24mo03', 'Apveicnt24mo03', 'Apvepur24mo04', 'Apvepo24mo04', 'Apveinvc24mo04', 'Apveicnt24mo04', 'Apvepur24mo05', 'Apvepo24mo05', 'Apveinvc24mo05', 'Apveicnt24mo05', 'Apvepur24mo06', 'Apvepo24mo06', 'Apveinvc24mo06', 'Apveicnt24mo06', 'Apvepur24mo07', 'Apvepo24mo07', 'Apveinvc24mo07', 'Apveicnt24mo07', 'Apvepur24mo08', 'Apvepo24mo08', 'Apveinvc24mo08', 'Apveicnt24mo08', 'Apvepur24mo09', 'Apvepo24mo09', 'Apveinvc24mo09', 'Apveicnt24mo09', 'Apvepur24mo10', 'Apvepo24mo10', 'Apveinvc24mo10', 'Apveicnt24mo10', 'Apvepur24mo11', 'Apvepo24mo11', 'Apveinvc24mo11', 'Apveicnt24mo11', 'Apvepur24mo12', 'Apvepo24mo12', 'Apveinvc24mo12', 'Apveicnt24mo12', 'Apvepur24mo13', 'Apvepo24mo13', 'Apveinvc24mo13', 'Apveicnt24mo13', 'Apvepur24mo14', 'Apvepo24mo14', 'Apveinvc24mo14', 'Apveicnt24mo14', 'Apvepur24mo15', 'Apvepo24mo15', 'Apveinvc24mo15', 'Apveicnt24mo15', 'Apvepur24mo16', 'Apvepo24mo16', 'Apveinvc24mo16', 'Apveicnt24mo16', 'Apvepur24mo17', 'Apvepo24mo17', 'Apveinvc24mo17', 'Apveicnt24mo17', 'Apvepur24mo18', 'Apvepo24mo18', 'Apveinvc24mo18', 'Apveicnt24mo18', 'Apvepur24mo19', 'Apvepo24mo19', 'Apveinvc24mo19', 'Apveicnt24mo19', 'Apvepur24mo20', 'Apvepo24mo20', 'Apveinvc24mo20', 'Apveicnt24mo20', 'Apvepur24mo21', 'Apvepo24mo21', 'Apveinvc24mo21', 'Apveicnt24mo21', 'Apvepur24mo22', 'Apvepo24mo22', 'Apveinvc24mo22', 'Apveicnt24mo22', 'Apvepur24mo23', 'Apvepo24mo23', 'Apveinvc24mo23', 'Apveicnt24mo23', 'Apvepur24mo24', 'Apvepo24mo24', 'Apveinvc24mo24', 'Apveicnt24mo24', 'Apvecrncy', 'Apvefrtinamt', 'Apveouracctnbr', 'Apvevenddisc', 'Apvefob', 'Apveroylpct', 'Apveprtpoeoru', 'Apvecomrate', 'Apveuselandonrcpt', 'Apvebuyrwhse1', 'Apvebuyrcode1', 'Apvebuyrwhse2', 'Apvebuyrcode2', 'Apvebuyrwhse3', 'Apvebuyrcode3', 'Apvebuyrwhse4', 'Apvebuyrcode4', 'Apvebuyrwhse5', 'Apvebuyrcode5', 'Apvebuyrwhse6', 'Apvebuyrcode6', 'Apvebuyrwhse7', 'Apvebuyrcode7', 'Apvebuyrwhse8', 'Apvebuyrcode8', 'Apvebuyrwhse9', 'Apvebuyrcode9', 'Apvebuyrwhse10', 'Apvebuyrcode10', 'Apvelandcost', 'Apvereleasenbr', 'Apvescanstartpos', 'Apvescanlength', 'Apvepurytd', 'Apvepoytd', 'Apveinvcytd', 'Apveicntytd', 'Apveuseach', 'Apvecat3', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['vendrecnbr', 'apvevendid', 'apvename', 'apveadr1', 'apveadr2', 'apveadr3', 'apvectry', 'apvecity', 'apvestat', 'apvezipcode', 'apvepayname', 'apvepayadr1', 'apvepayadr2', 'apvepayadr3', 'apvepayctry', 'apvepaycity', 'apvepaystat', 'apvepayzipcode', 'apvestatus', 'apvetakeexpireddisc', 'apveprinthts', 'apvefabbin', 'apvelmprntbulk', 'apveallowdropship', 'aptbtypecode', 'aptmtermcode', 'apvesviacode', 'apveoldfob', 'apveleaddays', 'apveglacct', 'apve1099ssnbr', 'apveminordrcode', 'apveminordrvalue', 'apvepurmtd', 'apvepomtd', 'apveinvcmtd', 'apveicntmtd', 'apvedateopen', 'apvelastpurdate', 'apvepur24mo01', 'apvepo24mo01', 'apveinvc24mo01', 'apveicnt24mo01', 'apvepur24mo02', 'apvepo24mo02', 'apveinvc24mo02', 'apveicnt24mo02', 'apvepur24mo03', 'apvepo24mo03', 'apveinvc24mo03', 'apveicnt24mo03', 'apvepur24mo04', 'apvepo24mo04', 'apveinvc24mo04', 'apveicnt24mo04', 'apvepur24mo05', 'apvepo24mo05', 'apveinvc24mo05', 'apveicnt24mo05', 'apvepur24mo06', 'apvepo24mo06', 'apveinvc24mo06', 'apveicnt24mo06', 'apvepur24mo07', 'apvepo24mo07', 'apveinvc24mo07', 'apveicnt24mo07', 'apvepur24mo08', 'apvepo24mo08', 'apveinvc24mo08', 'apveicnt24mo08', 'apvepur24mo09', 'apvepo24mo09', 'apveinvc24mo09', 'apveicnt24mo09', 'apvepur24mo10', 'apvepo24mo10', 'apveinvc24mo10', 'apveicnt24mo10', 'apvepur24mo11', 'apvepo24mo11', 'apveinvc24mo11', 'apveicnt24mo11', 'apvepur24mo12', 'apvepo24mo12', 'apveinvc24mo12', 'apveicnt24mo12', 'apvepur24mo13', 'apvepo24mo13', 'apveinvc24mo13', 'apveicnt24mo13', 'apvepur24mo14', 'apvepo24mo14', 'apveinvc24mo14', 'apveicnt24mo14', 'apvepur24mo15', 'apvepo24mo15', 'apveinvc24mo15', 'apveicnt24mo15', 'apvepur24mo16', 'apvepo24mo16', 'apveinvc24mo16', 'apveicnt24mo16', 'apvepur24mo17', 'apvepo24mo17', 'apveinvc24mo17', 'apveicnt24mo17', 'apvepur24mo18', 'apvepo24mo18', 'apveinvc24mo18', 'apveicnt24mo18', 'apvepur24mo19', 'apvepo24mo19', 'apveinvc24mo19', 'apveicnt24mo19', 'apvepur24mo20', 'apvepo24mo20', 'apveinvc24mo20', 'apveicnt24mo20', 'apvepur24mo21', 'apvepo24mo21', 'apveinvc24mo21', 'apveicnt24mo21', 'apvepur24mo22', 'apvepo24mo22', 'apveinvc24mo22', 'apveicnt24mo22', 'apvepur24mo23', 'apvepo24mo23', 'apveinvc24mo23', 'apveicnt24mo23', 'apvepur24mo24', 'apvepo24mo24', 'apveinvc24mo24', 'apveicnt24mo24', 'apvecrncy', 'apvefrtinamt', 'apveouracctnbr', 'apvevenddisc', 'apvefob', 'apveroylpct', 'apveprtpoeoru', 'apvecomrate', 'apveuselandonrcpt', 'apvebuyrwhse1', 'apvebuyrcode1', 'apvebuyrwhse2', 'apvebuyrcode2', 'apvebuyrwhse3', 'apvebuyrcode3', 'apvebuyrwhse4', 'apvebuyrcode4', 'apvebuyrwhse5', 'apvebuyrcode5', 'apvebuyrwhse6', 'apvebuyrcode6', 'apvebuyrwhse7', 'apvebuyrcode7', 'apvebuyrwhse8', 'apvebuyrcode8', 'apvebuyrwhse9', 'apvebuyrcode9', 'apvebuyrwhse10', 'apvebuyrcode10', 'apvelandcost', 'apvereleasenbr', 'apvescanstartpos', 'apvescanlength', 'apvepurytd', 'apvepoytd', 'apveinvcytd', 'apveicntytd', 'apveuseach', 'apvecat3', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [VendorTableMap::COL_VENDRECNBR, VendorTableMap::COL_APVEVENDID, VendorTableMap::COL_APVENAME, VendorTableMap::COL_APVEADR1, VendorTableMap::COL_APVEADR2, VendorTableMap::COL_APVEADR3, VendorTableMap::COL_APVECTRY, VendorTableMap::COL_APVECITY, VendorTableMap::COL_APVESTAT, VendorTableMap::COL_APVEZIPCODE, VendorTableMap::COL_APVEPAYNAME, VendorTableMap::COL_APVEPAYADR1, VendorTableMap::COL_APVEPAYADR2, VendorTableMap::COL_APVEPAYADR3, VendorTableMap::COL_APVEPAYCTRY, VendorTableMap::COL_APVEPAYCITY, VendorTableMap::COL_APVEPAYSTAT, VendorTableMap::COL_APVEPAYZIPCODE, VendorTableMap::COL_APVESTATUS, VendorTableMap::COL_APVETAKEEXPIREDDISC, VendorTableMap::COL_APVEPRINTHTS, VendorTableMap::COL_APVEFABBIN, VendorTableMap::COL_APVELMPRNTBULK, VendorTableMap::COL_APVEALLOWDROPSHIP, VendorTableMap::COL_APTBTYPECODE, VendorTableMap::COL_APTMTERMCODE, VendorTableMap::COL_APVESVIACODE, VendorTableMap::COL_APVEOLDFOB, VendorTableMap::COL_APVELEADDAYS, VendorTableMap::COL_APVEGLACCT, VendorTableMap::COL_APVE1099SSNBR, VendorTableMap::COL_APVEMINORDRCODE, VendorTableMap::COL_APVEMINORDRVALUE, VendorTableMap::COL_APVEPURMTD, VendorTableMap::COL_APVEPOMTD, VendorTableMap::COL_APVEINVCMTD, VendorTableMap::COL_APVEICNTMTD, VendorTableMap::COL_APVEDATEOPEN, VendorTableMap::COL_APVELASTPURDATE, VendorTableMap::COL_APVEPUR24MO01, VendorTableMap::COL_APVEPO24MO01, VendorTableMap::COL_APVEINVC24MO01, VendorTableMap::COL_APVEICNT24MO01, VendorTableMap::COL_APVEPUR24MO02, VendorTableMap::COL_APVEPO24MO02, VendorTableMap::COL_APVEINVC24MO02, VendorTableMap::COL_APVEICNT24MO02, VendorTableMap::COL_APVEPUR24MO03, VendorTableMap::COL_APVEPO24MO03, VendorTableMap::COL_APVEINVC24MO03, VendorTableMap::COL_APVEICNT24MO03, VendorTableMap::COL_APVEPUR24MO04, VendorTableMap::COL_APVEPO24MO04, VendorTableMap::COL_APVEINVC24MO04, VendorTableMap::COL_APVEICNT24MO04, VendorTableMap::COL_APVEPUR24MO05, VendorTableMap::COL_APVEPO24MO05, VendorTableMap::COL_APVEINVC24MO05, VendorTableMap::COL_APVEICNT24MO05, VendorTableMap::COL_APVEPUR24MO06, VendorTableMap::COL_APVEPO24MO06, VendorTableMap::COL_APVEINVC24MO06, VendorTableMap::COL_APVEICNT24MO06, VendorTableMap::COL_APVEPUR24MO07, VendorTableMap::COL_APVEPO24MO07, VendorTableMap::COL_APVEINVC24MO07, VendorTableMap::COL_APVEICNT24MO07, VendorTableMap::COL_APVEPUR24MO08, VendorTableMap::COL_APVEPO24MO08, VendorTableMap::COL_APVEINVC24MO08, VendorTableMap::COL_APVEICNT24MO08, VendorTableMap::COL_APVEPUR24MO09, VendorTableMap::COL_APVEPO24MO09, VendorTableMap::COL_APVEINVC24MO09, VendorTableMap::COL_APVEICNT24MO09, VendorTableMap::COL_APVEPUR24MO10, VendorTableMap::COL_APVEPO24MO10, VendorTableMap::COL_APVEINVC24MO10, VendorTableMap::COL_APVEICNT24MO10, VendorTableMap::COL_APVEPUR24MO11, VendorTableMap::COL_APVEPO24MO11, VendorTableMap::COL_APVEINVC24MO11, VendorTableMap::COL_APVEICNT24MO11, VendorTableMap::COL_APVEPUR24MO12, VendorTableMap::COL_APVEPO24MO12, VendorTableMap::COL_APVEINVC24MO12, VendorTableMap::COL_APVEICNT24MO12, VendorTableMap::COL_APVEPUR24MO13, VendorTableMap::COL_APVEPO24MO13, VendorTableMap::COL_APVEINVC24MO13, VendorTableMap::COL_APVEICNT24MO13, VendorTableMap::COL_APVEPUR24MO14, VendorTableMap::COL_APVEPO24MO14, VendorTableMap::COL_APVEINVC24MO14, VendorTableMap::COL_APVEICNT24MO14, VendorTableMap::COL_APVEPUR24MO15, VendorTableMap::COL_APVEPO24MO15, VendorTableMap::COL_APVEINVC24MO15, VendorTableMap::COL_APVEICNT24MO15, VendorTableMap::COL_APVEPUR24MO16, VendorTableMap::COL_APVEPO24MO16, VendorTableMap::COL_APVEINVC24MO16, VendorTableMap::COL_APVEICNT24MO16, VendorTableMap::COL_APVEPUR24MO17, VendorTableMap::COL_APVEPO24MO17, VendorTableMap::COL_APVEINVC24MO17, VendorTableMap::COL_APVEICNT24MO17, VendorTableMap::COL_APVEPUR24MO18, VendorTableMap::COL_APVEPO24MO18, VendorTableMap::COL_APVEINVC24MO18, VendorTableMap::COL_APVEICNT24MO18, VendorTableMap::COL_APVEPUR24MO19, VendorTableMap::COL_APVEPO24MO19, VendorTableMap::COL_APVEINVC24MO19, VendorTableMap::COL_APVEICNT24MO19, VendorTableMap::COL_APVEPUR24MO20, VendorTableMap::COL_APVEPO24MO20, VendorTableMap::COL_APVEINVC24MO20, VendorTableMap::COL_APVEICNT24MO20, VendorTableMap::COL_APVEPUR24MO21, VendorTableMap::COL_APVEPO24MO21, VendorTableMap::COL_APVEINVC24MO21, VendorTableMap::COL_APVEICNT24MO21, VendorTableMap::COL_APVEPUR24MO22, VendorTableMap::COL_APVEPO24MO22, VendorTableMap::COL_APVEINVC24MO22, VendorTableMap::COL_APVEICNT24MO22, VendorTableMap::COL_APVEPUR24MO23, VendorTableMap::COL_APVEPO24MO23, VendorTableMap::COL_APVEINVC24MO23, VendorTableMap::COL_APVEICNT24MO23, VendorTableMap::COL_APVEPUR24MO24, VendorTableMap::COL_APVEPO24MO24, VendorTableMap::COL_APVEINVC24MO24, VendorTableMap::COL_APVEICNT24MO24, VendorTableMap::COL_APVECRNCY, VendorTableMap::COL_APVEFRTINAMT, VendorTableMap::COL_APVEOURACCTNBR, VendorTableMap::COL_APVEVENDDISC, VendorTableMap::COL_APVEFOB, VendorTableMap::COL_APVEROYLPCT, VendorTableMap::COL_APVEPRTPOEORU, VendorTableMap::COL_APVECOMRATE, VendorTableMap::COL_APVEUSELANDONRCPT, VendorTableMap::COL_APVEBUYRWHSE1, VendorTableMap::COL_APVEBUYRCODE1, VendorTableMap::COL_APVEBUYRWHSE2, VendorTableMap::COL_APVEBUYRCODE2, VendorTableMap::COL_APVEBUYRWHSE3, VendorTableMap::COL_APVEBUYRCODE3, VendorTableMap::COL_APVEBUYRWHSE4, VendorTableMap::COL_APVEBUYRCODE4, VendorTableMap::COL_APVEBUYRWHSE5, VendorTableMap::COL_APVEBUYRCODE5, VendorTableMap::COL_APVEBUYRWHSE6, VendorTableMap::COL_APVEBUYRCODE6, VendorTableMap::COL_APVEBUYRWHSE7, VendorTableMap::COL_APVEBUYRCODE7, VendorTableMap::COL_APVEBUYRWHSE8, VendorTableMap::COL_APVEBUYRCODE8, VendorTableMap::COL_APVEBUYRWHSE9, VendorTableMap::COL_APVEBUYRCODE9, VendorTableMap::COL_APVEBUYRWHSE10, VendorTableMap::COL_APVEBUYRCODE10, VendorTableMap::COL_APVELANDCOST, VendorTableMap::COL_APVERELEASENBR, VendorTableMap::COL_APVESCANSTARTPOS, VendorTableMap::COL_APVESCANLENGTH, VendorTableMap::COL_APVEPURYTD, VendorTableMap::COL_APVEPOYTD, VendorTableMap::COL_APVEINVCYTD, VendorTableMap::COL_APVEICNTYTD, VendorTableMap::COL_APVEUSEACH, VendorTableMap::COL_APVECAT3, VendorTableMap::COL_DATEUPDTD, VendorTableMap::COL_TIMEUPDTD, VendorTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['VendRecNbr', 'ApveVendId', 'ApveName', 'ApveAdr1', 'ApveAdr2', 'ApveAdr3', 'ApveCtry', 'ApveCity', 'ApveStat', 'ApveZipCode', 'ApvePayName', 'ApvePayAdr1', 'ApvePayAdr2', 'ApvePayAdr3', 'ApvePayCtry', 'ApvePayCity', 'ApvePayStat', 'ApvePayZipCode', 'ApveStatus', 'ApveTakeExpiredDisc', 'ApvePrintHts', 'ApveFabBin', 'ApveLmPrntBulk', 'ApveAllowDropShip', 'AptbTypeCode', 'AptmTermCode', 'ApveSviaCode', 'ApveOldFob', 'ApveLeadDays', 'ApveGlAcct', 'Apve1099SsNbr', 'ApveMinOrdrCode', 'ApveMinOrdrValue', 'ApvePurMtd', 'ApvePoMtd', 'ApveInvcMtd', 'ApveIcntMtd', 'ApveDateOpen', 'ApveLastPurDate', 'ApvePur24mo01', 'ApvePo24mo01', 'ApveInvc24mo01', 'ApveIcnt24mo01', 'ApvePur24mo02', 'ApvePo24mo02', 'ApveInvc24mo02', 'ApveIcnt24mo02', 'ApvePur24mo03', 'ApvePo24mo03', 'ApveInvc24mo03', 'ApveIcnt24mo03', 'ApvePur24mo04', 'ApvePo24mo04', 'ApveInvc24mo04', 'ApveIcnt24mo04', 'ApvePur24mo05', 'ApvePo24mo05', 'ApveInvc24mo05', 'ApveIcnt24mo05', 'ApvePur24mo06', 'ApvePo24mo06', 'ApveInvc24mo06', 'ApveIcnt24mo06', 'ApvePur24mo07', 'ApvePo24mo07', 'ApveInvc24mo07', 'ApveIcnt24mo07', 'ApvePur24mo08', 'ApvePo24mo08', 'ApveInvc24mo08', 'ApveIcnt24mo08', 'ApvePur24mo09', 'ApvePo24mo09', 'ApveInvc24mo09', 'ApveIcnt24mo09', 'ApvePur24mo10', 'ApvePo24mo10', 'ApveInvc24mo10', 'ApveIcnt24mo10', 'ApvePur24mo11', 'ApvePo24mo11', 'ApveInvc24mo11', 'ApveIcnt24mo11', 'ApvePur24mo12', 'ApvePo24mo12', 'ApveInvc24mo12', 'ApveIcnt24mo12', 'ApvePur24mo13', 'ApvePo24mo13', 'ApveInvc24mo13', 'ApveIcnt24mo13', 'ApvePur24mo14', 'ApvePo24mo14', 'ApveInvc24mo14', 'ApveIcnt24mo14', 'ApvePur24mo15', 'ApvePo24mo15', 'ApveInvc24mo15', 'ApveIcnt24mo15', 'ApvePur24mo16', 'ApvePo24mo16', 'ApveInvc24mo16', 'ApveIcnt24mo16', 'ApvePur24mo17', 'ApvePo24mo17', 'ApveInvc24mo17', 'ApveIcnt24mo17', 'ApvePur24mo18', 'ApvePo24mo18', 'ApveInvc24mo18', 'ApveIcnt24mo18', 'ApvePur24mo19', 'ApvePo24mo19', 'ApveInvc24mo19', 'ApveIcnt24mo19', 'ApvePur24mo20', 'ApvePo24mo20', 'ApveInvc24mo20', 'ApveIcnt24mo20', 'ApvePur24mo21', 'ApvePo24mo21', 'ApveInvc24mo21', 'ApveIcnt24mo21', 'ApvePur24mo22', 'ApvePo24mo22', 'ApveInvc24mo22', 'ApveIcnt24mo22', 'ApvePur24mo23', 'ApvePo24mo23', 'ApveInvc24mo23', 'ApveIcnt24mo23', 'ApvePur24mo24', 'ApvePo24mo24', 'ApveInvc24mo24', 'ApveIcnt24mo24', 'ApveCrncy', 'ApveFrtInAmt', 'ApveOurAcctNbr', 'ApveVendDisc', 'ApveFob', 'ApveRoylPct', 'ApvePrtPoEOrU', 'ApveComRate', 'ApveUseLandOnRcpt', 'ApveBuyrWhse1', 'ApveBuyrCode1', 'ApveBuyrWhse2', 'ApveBuyrCode2', 'ApveBuyrWhse3', 'ApveBuyrCode3', 'ApveBuyrWhse4', 'ApveBuyrCode4', 'ApveBuyrWhse5', 'ApveBuyrCode5', 'ApveBuyrWhse6', 'ApveBuyrCode6', 'ApveBuyrWhse7', 'ApveBuyrCode7', 'ApveBuyrWhse8', 'ApveBuyrCode8', 'ApveBuyrWhse9', 'ApveBuyrCode9', 'ApveBuyrWhse10', 'ApveBuyrCode10', 'ApveLandCost', 'ApveReleaseNbr', 'ApveScanStartPos', 'ApveScanLength', 'ApvePurYtd', 'ApvePoYtd', 'ApveInvcYtd', 'ApveIcntYtd', 'ApveUseAch', 'ApveCat3', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, ]
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
        self::TYPE_PHPNAME       => ['Vendrecnbr' => 0, 'Apvevendid' => 1, 'Apvename' => 2, 'Apveadr1' => 3, 'Apveadr2' => 4, 'Apveadr3' => 5, 'Apvectry' => 6, 'Apvecity' => 7, 'Apvestat' => 8, 'Apvezipcode' => 9, 'Apvepayname' => 10, 'Apvepayadr1' => 11, 'Apvepayadr2' => 12, 'Apvepayadr3' => 13, 'Apvepayctry' => 14, 'Apvepaycity' => 15, 'Apvepaystat' => 16, 'Apvepayzipcode' => 17, 'Apvestatus' => 18, 'Apvetakeexpireddisc' => 19, 'Apveprinthts' => 20, 'Apvefabbin' => 21, 'Apvelmprntbulk' => 22, 'Apveallowdropship' => 23, 'Aptbtypecode' => 24, 'Aptmtermcode' => 25, 'Apvesviacode' => 26, 'Apveoldfob' => 27, 'Apveleaddays' => 28, 'Apveglacct' => 29, 'Apve1099ssnbr' => 30, 'Apveminordrcode' => 31, 'Apveminordrvalue' => 32, 'Apvepurmtd' => 33, 'Apvepomtd' => 34, 'Apveinvcmtd' => 35, 'Apveicntmtd' => 36, 'Apvedateopen' => 37, 'Apvelastpurdate' => 38, 'Apvepur24mo01' => 39, 'Apvepo24mo01' => 40, 'Apveinvc24mo01' => 41, 'Apveicnt24mo01' => 42, 'Apvepur24mo02' => 43, 'Apvepo24mo02' => 44, 'Apveinvc24mo02' => 45, 'Apveicnt24mo02' => 46, 'Apvepur24mo03' => 47, 'Apvepo24mo03' => 48, 'Apveinvc24mo03' => 49, 'Apveicnt24mo03' => 50, 'Apvepur24mo04' => 51, 'Apvepo24mo04' => 52, 'Apveinvc24mo04' => 53, 'Apveicnt24mo04' => 54, 'Apvepur24mo05' => 55, 'Apvepo24mo05' => 56, 'Apveinvc24mo05' => 57, 'Apveicnt24mo05' => 58, 'Apvepur24mo06' => 59, 'Apvepo24mo06' => 60, 'Apveinvc24mo06' => 61, 'Apveicnt24mo06' => 62, 'Apvepur24mo07' => 63, 'Apvepo24mo07' => 64, 'Apveinvc24mo07' => 65, 'Apveicnt24mo07' => 66, 'Apvepur24mo08' => 67, 'Apvepo24mo08' => 68, 'Apveinvc24mo08' => 69, 'Apveicnt24mo08' => 70, 'Apvepur24mo09' => 71, 'Apvepo24mo09' => 72, 'Apveinvc24mo09' => 73, 'Apveicnt24mo09' => 74, 'Apvepur24mo10' => 75, 'Apvepo24mo10' => 76, 'Apveinvc24mo10' => 77, 'Apveicnt24mo10' => 78, 'Apvepur24mo11' => 79, 'Apvepo24mo11' => 80, 'Apveinvc24mo11' => 81, 'Apveicnt24mo11' => 82, 'Apvepur24mo12' => 83, 'Apvepo24mo12' => 84, 'Apveinvc24mo12' => 85, 'Apveicnt24mo12' => 86, 'Apvepur24mo13' => 87, 'Apvepo24mo13' => 88, 'Apveinvc24mo13' => 89, 'Apveicnt24mo13' => 90, 'Apvepur24mo14' => 91, 'Apvepo24mo14' => 92, 'Apveinvc24mo14' => 93, 'Apveicnt24mo14' => 94, 'Apvepur24mo15' => 95, 'Apvepo24mo15' => 96, 'Apveinvc24mo15' => 97, 'Apveicnt24mo15' => 98, 'Apvepur24mo16' => 99, 'Apvepo24mo16' => 100, 'Apveinvc24mo16' => 101, 'Apveicnt24mo16' => 102, 'Apvepur24mo17' => 103, 'Apvepo24mo17' => 104, 'Apveinvc24mo17' => 105, 'Apveicnt24mo17' => 106, 'Apvepur24mo18' => 107, 'Apvepo24mo18' => 108, 'Apveinvc24mo18' => 109, 'Apveicnt24mo18' => 110, 'Apvepur24mo19' => 111, 'Apvepo24mo19' => 112, 'Apveinvc24mo19' => 113, 'Apveicnt24mo19' => 114, 'Apvepur24mo20' => 115, 'Apvepo24mo20' => 116, 'Apveinvc24mo20' => 117, 'Apveicnt24mo20' => 118, 'Apvepur24mo21' => 119, 'Apvepo24mo21' => 120, 'Apveinvc24mo21' => 121, 'Apveicnt24mo21' => 122, 'Apvepur24mo22' => 123, 'Apvepo24mo22' => 124, 'Apveinvc24mo22' => 125, 'Apveicnt24mo22' => 126, 'Apvepur24mo23' => 127, 'Apvepo24mo23' => 128, 'Apveinvc24mo23' => 129, 'Apveicnt24mo23' => 130, 'Apvepur24mo24' => 131, 'Apvepo24mo24' => 132, 'Apveinvc24mo24' => 133, 'Apveicnt24mo24' => 134, 'Apvecrncy' => 135, 'Apvefrtinamt' => 136, 'Apveouracctnbr' => 137, 'Apvevenddisc' => 138, 'Apvefob' => 139, 'Apveroylpct' => 140, 'Apveprtpoeoru' => 141, 'Apvecomrate' => 142, 'Apveuselandonrcpt' => 143, 'Apvebuyrwhse1' => 144, 'Apvebuyrcode1' => 145, 'Apvebuyrwhse2' => 146, 'Apvebuyrcode2' => 147, 'Apvebuyrwhse3' => 148, 'Apvebuyrcode3' => 149, 'Apvebuyrwhse4' => 150, 'Apvebuyrcode4' => 151, 'Apvebuyrwhse5' => 152, 'Apvebuyrcode5' => 153, 'Apvebuyrwhse6' => 154, 'Apvebuyrcode6' => 155, 'Apvebuyrwhse7' => 156, 'Apvebuyrcode7' => 157, 'Apvebuyrwhse8' => 158, 'Apvebuyrcode8' => 159, 'Apvebuyrwhse9' => 160, 'Apvebuyrcode9' => 161, 'Apvebuyrwhse10' => 162, 'Apvebuyrcode10' => 163, 'Apvelandcost' => 164, 'Apvereleasenbr' => 165, 'Apvescanstartpos' => 166, 'Apvescanlength' => 167, 'Apvepurytd' => 168, 'Apvepoytd' => 169, 'Apveinvcytd' => 170, 'Apveicntytd' => 171, 'Apveuseach' => 172, 'Apvecat3' => 173, 'Dateupdtd' => 174, 'Timeupdtd' => 175, 'Dummy' => 176, ],
        self::TYPE_CAMELNAME     => ['vendrecnbr' => 0, 'apvevendid' => 1, 'apvename' => 2, 'apveadr1' => 3, 'apveadr2' => 4, 'apveadr3' => 5, 'apvectry' => 6, 'apvecity' => 7, 'apvestat' => 8, 'apvezipcode' => 9, 'apvepayname' => 10, 'apvepayadr1' => 11, 'apvepayadr2' => 12, 'apvepayadr3' => 13, 'apvepayctry' => 14, 'apvepaycity' => 15, 'apvepaystat' => 16, 'apvepayzipcode' => 17, 'apvestatus' => 18, 'apvetakeexpireddisc' => 19, 'apveprinthts' => 20, 'apvefabbin' => 21, 'apvelmprntbulk' => 22, 'apveallowdropship' => 23, 'aptbtypecode' => 24, 'aptmtermcode' => 25, 'apvesviacode' => 26, 'apveoldfob' => 27, 'apveleaddays' => 28, 'apveglacct' => 29, 'apve1099ssnbr' => 30, 'apveminordrcode' => 31, 'apveminordrvalue' => 32, 'apvepurmtd' => 33, 'apvepomtd' => 34, 'apveinvcmtd' => 35, 'apveicntmtd' => 36, 'apvedateopen' => 37, 'apvelastpurdate' => 38, 'apvepur24mo01' => 39, 'apvepo24mo01' => 40, 'apveinvc24mo01' => 41, 'apveicnt24mo01' => 42, 'apvepur24mo02' => 43, 'apvepo24mo02' => 44, 'apveinvc24mo02' => 45, 'apveicnt24mo02' => 46, 'apvepur24mo03' => 47, 'apvepo24mo03' => 48, 'apveinvc24mo03' => 49, 'apveicnt24mo03' => 50, 'apvepur24mo04' => 51, 'apvepo24mo04' => 52, 'apveinvc24mo04' => 53, 'apveicnt24mo04' => 54, 'apvepur24mo05' => 55, 'apvepo24mo05' => 56, 'apveinvc24mo05' => 57, 'apveicnt24mo05' => 58, 'apvepur24mo06' => 59, 'apvepo24mo06' => 60, 'apveinvc24mo06' => 61, 'apveicnt24mo06' => 62, 'apvepur24mo07' => 63, 'apvepo24mo07' => 64, 'apveinvc24mo07' => 65, 'apveicnt24mo07' => 66, 'apvepur24mo08' => 67, 'apvepo24mo08' => 68, 'apveinvc24mo08' => 69, 'apveicnt24mo08' => 70, 'apvepur24mo09' => 71, 'apvepo24mo09' => 72, 'apveinvc24mo09' => 73, 'apveicnt24mo09' => 74, 'apvepur24mo10' => 75, 'apvepo24mo10' => 76, 'apveinvc24mo10' => 77, 'apveicnt24mo10' => 78, 'apvepur24mo11' => 79, 'apvepo24mo11' => 80, 'apveinvc24mo11' => 81, 'apveicnt24mo11' => 82, 'apvepur24mo12' => 83, 'apvepo24mo12' => 84, 'apveinvc24mo12' => 85, 'apveicnt24mo12' => 86, 'apvepur24mo13' => 87, 'apvepo24mo13' => 88, 'apveinvc24mo13' => 89, 'apveicnt24mo13' => 90, 'apvepur24mo14' => 91, 'apvepo24mo14' => 92, 'apveinvc24mo14' => 93, 'apveicnt24mo14' => 94, 'apvepur24mo15' => 95, 'apvepo24mo15' => 96, 'apveinvc24mo15' => 97, 'apveicnt24mo15' => 98, 'apvepur24mo16' => 99, 'apvepo24mo16' => 100, 'apveinvc24mo16' => 101, 'apveicnt24mo16' => 102, 'apvepur24mo17' => 103, 'apvepo24mo17' => 104, 'apveinvc24mo17' => 105, 'apveicnt24mo17' => 106, 'apvepur24mo18' => 107, 'apvepo24mo18' => 108, 'apveinvc24mo18' => 109, 'apveicnt24mo18' => 110, 'apvepur24mo19' => 111, 'apvepo24mo19' => 112, 'apveinvc24mo19' => 113, 'apveicnt24mo19' => 114, 'apvepur24mo20' => 115, 'apvepo24mo20' => 116, 'apveinvc24mo20' => 117, 'apveicnt24mo20' => 118, 'apvepur24mo21' => 119, 'apvepo24mo21' => 120, 'apveinvc24mo21' => 121, 'apveicnt24mo21' => 122, 'apvepur24mo22' => 123, 'apvepo24mo22' => 124, 'apveinvc24mo22' => 125, 'apveicnt24mo22' => 126, 'apvepur24mo23' => 127, 'apvepo24mo23' => 128, 'apveinvc24mo23' => 129, 'apveicnt24mo23' => 130, 'apvepur24mo24' => 131, 'apvepo24mo24' => 132, 'apveinvc24mo24' => 133, 'apveicnt24mo24' => 134, 'apvecrncy' => 135, 'apvefrtinamt' => 136, 'apveouracctnbr' => 137, 'apvevenddisc' => 138, 'apvefob' => 139, 'apveroylpct' => 140, 'apveprtpoeoru' => 141, 'apvecomrate' => 142, 'apveuselandonrcpt' => 143, 'apvebuyrwhse1' => 144, 'apvebuyrcode1' => 145, 'apvebuyrwhse2' => 146, 'apvebuyrcode2' => 147, 'apvebuyrwhse3' => 148, 'apvebuyrcode3' => 149, 'apvebuyrwhse4' => 150, 'apvebuyrcode4' => 151, 'apvebuyrwhse5' => 152, 'apvebuyrcode5' => 153, 'apvebuyrwhse6' => 154, 'apvebuyrcode6' => 155, 'apvebuyrwhse7' => 156, 'apvebuyrcode7' => 157, 'apvebuyrwhse8' => 158, 'apvebuyrcode8' => 159, 'apvebuyrwhse9' => 160, 'apvebuyrcode9' => 161, 'apvebuyrwhse10' => 162, 'apvebuyrcode10' => 163, 'apvelandcost' => 164, 'apvereleasenbr' => 165, 'apvescanstartpos' => 166, 'apvescanlength' => 167, 'apvepurytd' => 168, 'apvepoytd' => 169, 'apveinvcytd' => 170, 'apveicntytd' => 171, 'apveuseach' => 172, 'apvecat3' => 173, 'dateupdtd' => 174, 'timeupdtd' => 175, 'dummy' => 176, ],
        self::TYPE_COLNAME       => [VendorTableMap::COL_VENDRECNBR => 0, VendorTableMap::COL_APVEVENDID => 1, VendorTableMap::COL_APVENAME => 2, VendorTableMap::COL_APVEADR1 => 3, VendorTableMap::COL_APVEADR2 => 4, VendorTableMap::COL_APVEADR3 => 5, VendorTableMap::COL_APVECTRY => 6, VendorTableMap::COL_APVECITY => 7, VendorTableMap::COL_APVESTAT => 8, VendorTableMap::COL_APVEZIPCODE => 9, VendorTableMap::COL_APVEPAYNAME => 10, VendorTableMap::COL_APVEPAYADR1 => 11, VendorTableMap::COL_APVEPAYADR2 => 12, VendorTableMap::COL_APVEPAYADR3 => 13, VendorTableMap::COL_APVEPAYCTRY => 14, VendorTableMap::COL_APVEPAYCITY => 15, VendorTableMap::COL_APVEPAYSTAT => 16, VendorTableMap::COL_APVEPAYZIPCODE => 17, VendorTableMap::COL_APVESTATUS => 18, VendorTableMap::COL_APVETAKEEXPIREDDISC => 19, VendorTableMap::COL_APVEPRINTHTS => 20, VendorTableMap::COL_APVEFABBIN => 21, VendorTableMap::COL_APVELMPRNTBULK => 22, VendorTableMap::COL_APVEALLOWDROPSHIP => 23, VendorTableMap::COL_APTBTYPECODE => 24, VendorTableMap::COL_APTMTERMCODE => 25, VendorTableMap::COL_APVESVIACODE => 26, VendorTableMap::COL_APVEOLDFOB => 27, VendorTableMap::COL_APVELEADDAYS => 28, VendorTableMap::COL_APVEGLACCT => 29, VendorTableMap::COL_APVE1099SSNBR => 30, VendorTableMap::COL_APVEMINORDRCODE => 31, VendorTableMap::COL_APVEMINORDRVALUE => 32, VendorTableMap::COL_APVEPURMTD => 33, VendorTableMap::COL_APVEPOMTD => 34, VendorTableMap::COL_APVEINVCMTD => 35, VendorTableMap::COL_APVEICNTMTD => 36, VendorTableMap::COL_APVEDATEOPEN => 37, VendorTableMap::COL_APVELASTPURDATE => 38, VendorTableMap::COL_APVEPUR24MO01 => 39, VendorTableMap::COL_APVEPO24MO01 => 40, VendorTableMap::COL_APVEINVC24MO01 => 41, VendorTableMap::COL_APVEICNT24MO01 => 42, VendorTableMap::COL_APVEPUR24MO02 => 43, VendorTableMap::COL_APVEPO24MO02 => 44, VendorTableMap::COL_APVEINVC24MO02 => 45, VendorTableMap::COL_APVEICNT24MO02 => 46, VendorTableMap::COL_APVEPUR24MO03 => 47, VendorTableMap::COL_APVEPO24MO03 => 48, VendorTableMap::COL_APVEINVC24MO03 => 49, VendorTableMap::COL_APVEICNT24MO03 => 50, VendorTableMap::COL_APVEPUR24MO04 => 51, VendorTableMap::COL_APVEPO24MO04 => 52, VendorTableMap::COL_APVEINVC24MO04 => 53, VendorTableMap::COL_APVEICNT24MO04 => 54, VendorTableMap::COL_APVEPUR24MO05 => 55, VendorTableMap::COL_APVEPO24MO05 => 56, VendorTableMap::COL_APVEINVC24MO05 => 57, VendorTableMap::COL_APVEICNT24MO05 => 58, VendorTableMap::COL_APVEPUR24MO06 => 59, VendorTableMap::COL_APVEPO24MO06 => 60, VendorTableMap::COL_APVEINVC24MO06 => 61, VendorTableMap::COL_APVEICNT24MO06 => 62, VendorTableMap::COL_APVEPUR24MO07 => 63, VendorTableMap::COL_APVEPO24MO07 => 64, VendorTableMap::COL_APVEINVC24MO07 => 65, VendorTableMap::COL_APVEICNT24MO07 => 66, VendorTableMap::COL_APVEPUR24MO08 => 67, VendorTableMap::COL_APVEPO24MO08 => 68, VendorTableMap::COL_APVEINVC24MO08 => 69, VendorTableMap::COL_APVEICNT24MO08 => 70, VendorTableMap::COL_APVEPUR24MO09 => 71, VendorTableMap::COL_APVEPO24MO09 => 72, VendorTableMap::COL_APVEINVC24MO09 => 73, VendorTableMap::COL_APVEICNT24MO09 => 74, VendorTableMap::COL_APVEPUR24MO10 => 75, VendorTableMap::COL_APVEPO24MO10 => 76, VendorTableMap::COL_APVEINVC24MO10 => 77, VendorTableMap::COL_APVEICNT24MO10 => 78, VendorTableMap::COL_APVEPUR24MO11 => 79, VendorTableMap::COL_APVEPO24MO11 => 80, VendorTableMap::COL_APVEINVC24MO11 => 81, VendorTableMap::COL_APVEICNT24MO11 => 82, VendorTableMap::COL_APVEPUR24MO12 => 83, VendorTableMap::COL_APVEPO24MO12 => 84, VendorTableMap::COL_APVEINVC24MO12 => 85, VendorTableMap::COL_APVEICNT24MO12 => 86, VendorTableMap::COL_APVEPUR24MO13 => 87, VendorTableMap::COL_APVEPO24MO13 => 88, VendorTableMap::COL_APVEINVC24MO13 => 89, VendorTableMap::COL_APVEICNT24MO13 => 90, VendorTableMap::COL_APVEPUR24MO14 => 91, VendorTableMap::COL_APVEPO24MO14 => 92, VendorTableMap::COL_APVEINVC24MO14 => 93, VendorTableMap::COL_APVEICNT24MO14 => 94, VendorTableMap::COL_APVEPUR24MO15 => 95, VendorTableMap::COL_APVEPO24MO15 => 96, VendorTableMap::COL_APVEINVC24MO15 => 97, VendorTableMap::COL_APVEICNT24MO15 => 98, VendorTableMap::COL_APVEPUR24MO16 => 99, VendorTableMap::COL_APVEPO24MO16 => 100, VendorTableMap::COL_APVEINVC24MO16 => 101, VendorTableMap::COL_APVEICNT24MO16 => 102, VendorTableMap::COL_APVEPUR24MO17 => 103, VendorTableMap::COL_APVEPO24MO17 => 104, VendorTableMap::COL_APVEINVC24MO17 => 105, VendorTableMap::COL_APVEICNT24MO17 => 106, VendorTableMap::COL_APVEPUR24MO18 => 107, VendorTableMap::COL_APVEPO24MO18 => 108, VendorTableMap::COL_APVEINVC24MO18 => 109, VendorTableMap::COL_APVEICNT24MO18 => 110, VendorTableMap::COL_APVEPUR24MO19 => 111, VendorTableMap::COL_APVEPO24MO19 => 112, VendorTableMap::COL_APVEINVC24MO19 => 113, VendorTableMap::COL_APVEICNT24MO19 => 114, VendorTableMap::COL_APVEPUR24MO20 => 115, VendorTableMap::COL_APVEPO24MO20 => 116, VendorTableMap::COL_APVEINVC24MO20 => 117, VendorTableMap::COL_APVEICNT24MO20 => 118, VendorTableMap::COL_APVEPUR24MO21 => 119, VendorTableMap::COL_APVEPO24MO21 => 120, VendorTableMap::COL_APVEINVC24MO21 => 121, VendorTableMap::COL_APVEICNT24MO21 => 122, VendorTableMap::COL_APVEPUR24MO22 => 123, VendorTableMap::COL_APVEPO24MO22 => 124, VendorTableMap::COL_APVEINVC24MO22 => 125, VendorTableMap::COL_APVEICNT24MO22 => 126, VendorTableMap::COL_APVEPUR24MO23 => 127, VendorTableMap::COL_APVEPO24MO23 => 128, VendorTableMap::COL_APVEINVC24MO23 => 129, VendorTableMap::COL_APVEICNT24MO23 => 130, VendorTableMap::COL_APVEPUR24MO24 => 131, VendorTableMap::COL_APVEPO24MO24 => 132, VendorTableMap::COL_APVEINVC24MO24 => 133, VendorTableMap::COL_APVEICNT24MO24 => 134, VendorTableMap::COL_APVECRNCY => 135, VendorTableMap::COL_APVEFRTINAMT => 136, VendorTableMap::COL_APVEOURACCTNBR => 137, VendorTableMap::COL_APVEVENDDISC => 138, VendorTableMap::COL_APVEFOB => 139, VendorTableMap::COL_APVEROYLPCT => 140, VendorTableMap::COL_APVEPRTPOEORU => 141, VendorTableMap::COL_APVECOMRATE => 142, VendorTableMap::COL_APVEUSELANDONRCPT => 143, VendorTableMap::COL_APVEBUYRWHSE1 => 144, VendorTableMap::COL_APVEBUYRCODE1 => 145, VendorTableMap::COL_APVEBUYRWHSE2 => 146, VendorTableMap::COL_APVEBUYRCODE2 => 147, VendorTableMap::COL_APVEBUYRWHSE3 => 148, VendorTableMap::COL_APVEBUYRCODE3 => 149, VendorTableMap::COL_APVEBUYRWHSE4 => 150, VendorTableMap::COL_APVEBUYRCODE4 => 151, VendorTableMap::COL_APVEBUYRWHSE5 => 152, VendorTableMap::COL_APVEBUYRCODE5 => 153, VendorTableMap::COL_APVEBUYRWHSE6 => 154, VendorTableMap::COL_APVEBUYRCODE6 => 155, VendorTableMap::COL_APVEBUYRWHSE7 => 156, VendorTableMap::COL_APVEBUYRCODE7 => 157, VendorTableMap::COL_APVEBUYRWHSE8 => 158, VendorTableMap::COL_APVEBUYRCODE8 => 159, VendorTableMap::COL_APVEBUYRWHSE9 => 160, VendorTableMap::COL_APVEBUYRCODE9 => 161, VendorTableMap::COL_APVEBUYRWHSE10 => 162, VendorTableMap::COL_APVEBUYRCODE10 => 163, VendorTableMap::COL_APVELANDCOST => 164, VendorTableMap::COL_APVERELEASENBR => 165, VendorTableMap::COL_APVESCANSTARTPOS => 166, VendorTableMap::COL_APVESCANLENGTH => 167, VendorTableMap::COL_APVEPURYTD => 168, VendorTableMap::COL_APVEPOYTD => 169, VendorTableMap::COL_APVEINVCYTD => 170, VendorTableMap::COL_APVEICNTYTD => 171, VendorTableMap::COL_APVEUSEACH => 172, VendorTableMap::COL_APVECAT3 => 173, VendorTableMap::COL_DATEUPDTD => 174, VendorTableMap::COL_TIMEUPDTD => 175, VendorTableMap::COL_DUMMY => 176, ],
        self::TYPE_FIELDNAME     => ['VendRecNbr' => 0, 'ApveVendId' => 1, 'ApveName' => 2, 'ApveAdr1' => 3, 'ApveAdr2' => 4, 'ApveAdr3' => 5, 'ApveCtry' => 6, 'ApveCity' => 7, 'ApveStat' => 8, 'ApveZipCode' => 9, 'ApvePayName' => 10, 'ApvePayAdr1' => 11, 'ApvePayAdr2' => 12, 'ApvePayAdr3' => 13, 'ApvePayCtry' => 14, 'ApvePayCity' => 15, 'ApvePayStat' => 16, 'ApvePayZipCode' => 17, 'ApveStatus' => 18, 'ApveTakeExpiredDisc' => 19, 'ApvePrintHts' => 20, 'ApveFabBin' => 21, 'ApveLmPrntBulk' => 22, 'ApveAllowDropShip' => 23, 'AptbTypeCode' => 24, 'AptmTermCode' => 25, 'ApveSviaCode' => 26, 'ApveOldFob' => 27, 'ApveLeadDays' => 28, 'ApveGlAcct' => 29, 'Apve1099SsNbr' => 30, 'ApveMinOrdrCode' => 31, 'ApveMinOrdrValue' => 32, 'ApvePurMtd' => 33, 'ApvePoMtd' => 34, 'ApveInvcMtd' => 35, 'ApveIcntMtd' => 36, 'ApveDateOpen' => 37, 'ApveLastPurDate' => 38, 'ApvePur24mo01' => 39, 'ApvePo24mo01' => 40, 'ApveInvc24mo01' => 41, 'ApveIcnt24mo01' => 42, 'ApvePur24mo02' => 43, 'ApvePo24mo02' => 44, 'ApveInvc24mo02' => 45, 'ApveIcnt24mo02' => 46, 'ApvePur24mo03' => 47, 'ApvePo24mo03' => 48, 'ApveInvc24mo03' => 49, 'ApveIcnt24mo03' => 50, 'ApvePur24mo04' => 51, 'ApvePo24mo04' => 52, 'ApveInvc24mo04' => 53, 'ApveIcnt24mo04' => 54, 'ApvePur24mo05' => 55, 'ApvePo24mo05' => 56, 'ApveInvc24mo05' => 57, 'ApveIcnt24mo05' => 58, 'ApvePur24mo06' => 59, 'ApvePo24mo06' => 60, 'ApveInvc24mo06' => 61, 'ApveIcnt24mo06' => 62, 'ApvePur24mo07' => 63, 'ApvePo24mo07' => 64, 'ApveInvc24mo07' => 65, 'ApveIcnt24mo07' => 66, 'ApvePur24mo08' => 67, 'ApvePo24mo08' => 68, 'ApveInvc24mo08' => 69, 'ApveIcnt24mo08' => 70, 'ApvePur24mo09' => 71, 'ApvePo24mo09' => 72, 'ApveInvc24mo09' => 73, 'ApveIcnt24mo09' => 74, 'ApvePur24mo10' => 75, 'ApvePo24mo10' => 76, 'ApveInvc24mo10' => 77, 'ApveIcnt24mo10' => 78, 'ApvePur24mo11' => 79, 'ApvePo24mo11' => 80, 'ApveInvc24mo11' => 81, 'ApveIcnt24mo11' => 82, 'ApvePur24mo12' => 83, 'ApvePo24mo12' => 84, 'ApveInvc24mo12' => 85, 'ApveIcnt24mo12' => 86, 'ApvePur24mo13' => 87, 'ApvePo24mo13' => 88, 'ApveInvc24mo13' => 89, 'ApveIcnt24mo13' => 90, 'ApvePur24mo14' => 91, 'ApvePo24mo14' => 92, 'ApveInvc24mo14' => 93, 'ApveIcnt24mo14' => 94, 'ApvePur24mo15' => 95, 'ApvePo24mo15' => 96, 'ApveInvc24mo15' => 97, 'ApveIcnt24mo15' => 98, 'ApvePur24mo16' => 99, 'ApvePo24mo16' => 100, 'ApveInvc24mo16' => 101, 'ApveIcnt24mo16' => 102, 'ApvePur24mo17' => 103, 'ApvePo24mo17' => 104, 'ApveInvc24mo17' => 105, 'ApveIcnt24mo17' => 106, 'ApvePur24mo18' => 107, 'ApvePo24mo18' => 108, 'ApveInvc24mo18' => 109, 'ApveIcnt24mo18' => 110, 'ApvePur24mo19' => 111, 'ApvePo24mo19' => 112, 'ApveInvc24mo19' => 113, 'ApveIcnt24mo19' => 114, 'ApvePur24mo20' => 115, 'ApvePo24mo20' => 116, 'ApveInvc24mo20' => 117, 'ApveIcnt24mo20' => 118, 'ApvePur24mo21' => 119, 'ApvePo24mo21' => 120, 'ApveInvc24mo21' => 121, 'ApveIcnt24mo21' => 122, 'ApvePur24mo22' => 123, 'ApvePo24mo22' => 124, 'ApveInvc24mo22' => 125, 'ApveIcnt24mo22' => 126, 'ApvePur24mo23' => 127, 'ApvePo24mo23' => 128, 'ApveInvc24mo23' => 129, 'ApveIcnt24mo23' => 130, 'ApvePur24mo24' => 131, 'ApvePo24mo24' => 132, 'ApveInvc24mo24' => 133, 'ApveIcnt24mo24' => 134, 'ApveCrncy' => 135, 'ApveFrtInAmt' => 136, 'ApveOurAcctNbr' => 137, 'ApveVendDisc' => 138, 'ApveFob' => 139, 'ApveRoylPct' => 140, 'ApvePrtPoEOrU' => 141, 'ApveComRate' => 142, 'ApveUseLandOnRcpt' => 143, 'ApveBuyrWhse1' => 144, 'ApveBuyrCode1' => 145, 'ApveBuyrWhse2' => 146, 'ApveBuyrCode2' => 147, 'ApveBuyrWhse3' => 148, 'ApveBuyrCode3' => 149, 'ApveBuyrWhse4' => 150, 'ApveBuyrCode4' => 151, 'ApveBuyrWhse5' => 152, 'ApveBuyrCode5' => 153, 'ApveBuyrWhse6' => 154, 'ApveBuyrCode6' => 155, 'ApveBuyrWhse7' => 156, 'ApveBuyrCode7' => 157, 'ApveBuyrWhse8' => 158, 'ApveBuyrCode8' => 159, 'ApveBuyrWhse9' => 160, 'ApveBuyrCode9' => 161, 'ApveBuyrWhse10' => 162, 'ApveBuyrCode10' => 163, 'ApveLandCost' => 164, 'ApveReleaseNbr' => 165, 'ApveScanStartPos' => 166, 'ApveScanLength' => 167, 'ApvePurYtd' => 168, 'ApvePoYtd' => 169, 'ApveInvcYtd' => 170, 'ApveIcntYtd' => 171, 'ApveUseAch' => 172, 'ApveCat3' => 173, 'DateUpdtd' => 174, 'TimeUpdtd' => 175, 'dummy' => 176, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Vendrecnbr' => 'VENDRECNBR',
        'Vendor.Vendrecnbr' => 'VENDRECNBR',
        'vendrecnbr' => 'VENDRECNBR',
        'vendor.vendrecnbr' => 'VENDRECNBR',
        'VendorTableMap::COL_VENDRECNBR' => 'VENDRECNBR',
        'COL_VENDRECNBR' => 'VENDRECNBR',
        'VendRecNbr' => 'VENDRECNBR',
        'ap_vend_mast.VendRecNbr' => 'VENDRECNBR',
        'Apvevendid' => 'APVEVENDID',
        'Vendor.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'vendor.apvevendid' => 'APVEVENDID',
        'VendorTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'ap_vend_mast.ApveVendId' => 'APVEVENDID',
        'Apvename' => 'APVENAME',
        'Vendor.Apvename' => 'APVENAME',
        'apvename' => 'APVENAME',
        'vendor.apvename' => 'APVENAME',
        'VendorTableMap::COL_APVENAME' => 'APVENAME',
        'COL_APVENAME' => 'APVENAME',
        'ApveName' => 'APVENAME',
        'ap_vend_mast.ApveName' => 'APVENAME',
        'Apveadr1' => 'APVEADR1',
        'Vendor.Apveadr1' => 'APVEADR1',
        'apveadr1' => 'APVEADR1',
        'vendor.apveadr1' => 'APVEADR1',
        'VendorTableMap::COL_APVEADR1' => 'APVEADR1',
        'COL_APVEADR1' => 'APVEADR1',
        'ApveAdr1' => 'APVEADR1',
        'ap_vend_mast.ApveAdr1' => 'APVEADR1',
        'Apveadr2' => 'APVEADR2',
        'Vendor.Apveadr2' => 'APVEADR2',
        'apveadr2' => 'APVEADR2',
        'vendor.apveadr2' => 'APVEADR2',
        'VendorTableMap::COL_APVEADR2' => 'APVEADR2',
        'COL_APVEADR2' => 'APVEADR2',
        'ApveAdr2' => 'APVEADR2',
        'ap_vend_mast.ApveAdr2' => 'APVEADR2',
        'Apveadr3' => 'APVEADR3',
        'Vendor.Apveadr3' => 'APVEADR3',
        'apveadr3' => 'APVEADR3',
        'vendor.apveadr3' => 'APVEADR3',
        'VendorTableMap::COL_APVEADR3' => 'APVEADR3',
        'COL_APVEADR3' => 'APVEADR3',
        'ApveAdr3' => 'APVEADR3',
        'ap_vend_mast.ApveAdr3' => 'APVEADR3',
        'Apvectry' => 'APVECTRY',
        'Vendor.Apvectry' => 'APVECTRY',
        'apvectry' => 'APVECTRY',
        'vendor.apvectry' => 'APVECTRY',
        'VendorTableMap::COL_APVECTRY' => 'APVECTRY',
        'COL_APVECTRY' => 'APVECTRY',
        'ApveCtry' => 'APVECTRY',
        'ap_vend_mast.ApveCtry' => 'APVECTRY',
        'Apvecity' => 'APVECITY',
        'Vendor.Apvecity' => 'APVECITY',
        'apvecity' => 'APVECITY',
        'vendor.apvecity' => 'APVECITY',
        'VendorTableMap::COL_APVECITY' => 'APVECITY',
        'COL_APVECITY' => 'APVECITY',
        'ApveCity' => 'APVECITY',
        'ap_vend_mast.ApveCity' => 'APVECITY',
        'Apvestat' => 'APVESTAT',
        'Vendor.Apvestat' => 'APVESTAT',
        'apvestat' => 'APVESTAT',
        'vendor.apvestat' => 'APVESTAT',
        'VendorTableMap::COL_APVESTAT' => 'APVESTAT',
        'COL_APVESTAT' => 'APVESTAT',
        'ApveStat' => 'APVESTAT',
        'ap_vend_mast.ApveStat' => 'APVESTAT',
        'Apvezipcode' => 'APVEZIPCODE',
        'Vendor.Apvezipcode' => 'APVEZIPCODE',
        'apvezipcode' => 'APVEZIPCODE',
        'vendor.apvezipcode' => 'APVEZIPCODE',
        'VendorTableMap::COL_APVEZIPCODE' => 'APVEZIPCODE',
        'COL_APVEZIPCODE' => 'APVEZIPCODE',
        'ApveZipCode' => 'APVEZIPCODE',
        'ap_vend_mast.ApveZipCode' => 'APVEZIPCODE',
        'Apvepayname' => 'APVEPAYNAME',
        'Vendor.Apvepayname' => 'APVEPAYNAME',
        'apvepayname' => 'APVEPAYNAME',
        'vendor.apvepayname' => 'APVEPAYNAME',
        'VendorTableMap::COL_APVEPAYNAME' => 'APVEPAYNAME',
        'COL_APVEPAYNAME' => 'APVEPAYNAME',
        'ApvePayName' => 'APVEPAYNAME',
        'ap_vend_mast.ApvePayName' => 'APVEPAYNAME',
        'Apvepayadr1' => 'APVEPAYADR1',
        'Vendor.Apvepayadr1' => 'APVEPAYADR1',
        'apvepayadr1' => 'APVEPAYADR1',
        'vendor.apvepayadr1' => 'APVEPAYADR1',
        'VendorTableMap::COL_APVEPAYADR1' => 'APVEPAYADR1',
        'COL_APVEPAYADR1' => 'APVEPAYADR1',
        'ApvePayAdr1' => 'APVEPAYADR1',
        'ap_vend_mast.ApvePayAdr1' => 'APVEPAYADR1',
        'Apvepayadr2' => 'APVEPAYADR2',
        'Vendor.Apvepayadr2' => 'APVEPAYADR2',
        'apvepayadr2' => 'APVEPAYADR2',
        'vendor.apvepayadr2' => 'APVEPAYADR2',
        'VendorTableMap::COL_APVEPAYADR2' => 'APVEPAYADR2',
        'COL_APVEPAYADR2' => 'APVEPAYADR2',
        'ApvePayAdr2' => 'APVEPAYADR2',
        'ap_vend_mast.ApvePayAdr2' => 'APVEPAYADR2',
        'Apvepayadr3' => 'APVEPAYADR3',
        'Vendor.Apvepayadr3' => 'APVEPAYADR3',
        'apvepayadr3' => 'APVEPAYADR3',
        'vendor.apvepayadr3' => 'APVEPAYADR3',
        'VendorTableMap::COL_APVEPAYADR3' => 'APVEPAYADR3',
        'COL_APVEPAYADR3' => 'APVEPAYADR3',
        'ApvePayAdr3' => 'APVEPAYADR3',
        'ap_vend_mast.ApvePayAdr3' => 'APVEPAYADR3',
        'Apvepayctry' => 'APVEPAYCTRY',
        'Vendor.Apvepayctry' => 'APVEPAYCTRY',
        'apvepayctry' => 'APVEPAYCTRY',
        'vendor.apvepayctry' => 'APVEPAYCTRY',
        'VendorTableMap::COL_APVEPAYCTRY' => 'APVEPAYCTRY',
        'COL_APVEPAYCTRY' => 'APVEPAYCTRY',
        'ApvePayCtry' => 'APVEPAYCTRY',
        'ap_vend_mast.ApvePayCtry' => 'APVEPAYCTRY',
        'Apvepaycity' => 'APVEPAYCITY',
        'Vendor.Apvepaycity' => 'APVEPAYCITY',
        'apvepaycity' => 'APVEPAYCITY',
        'vendor.apvepaycity' => 'APVEPAYCITY',
        'VendorTableMap::COL_APVEPAYCITY' => 'APVEPAYCITY',
        'COL_APVEPAYCITY' => 'APVEPAYCITY',
        'ApvePayCity' => 'APVEPAYCITY',
        'ap_vend_mast.ApvePayCity' => 'APVEPAYCITY',
        'Apvepaystat' => 'APVEPAYSTAT',
        'Vendor.Apvepaystat' => 'APVEPAYSTAT',
        'apvepaystat' => 'APVEPAYSTAT',
        'vendor.apvepaystat' => 'APVEPAYSTAT',
        'VendorTableMap::COL_APVEPAYSTAT' => 'APVEPAYSTAT',
        'COL_APVEPAYSTAT' => 'APVEPAYSTAT',
        'ApvePayStat' => 'APVEPAYSTAT',
        'ap_vend_mast.ApvePayStat' => 'APVEPAYSTAT',
        'Apvepayzipcode' => 'APVEPAYZIPCODE',
        'Vendor.Apvepayzipcode' => 'APVEPAYZIPCODE',
        'apvepayzipcode' => 'APVEPAYZIPCODE',
        'vendor.apvepayzipcode' => 'APVEPAYZIPCODE',
        'VendorTableMap::COL_APVEPAYZIPCODE' => 'APVEPAYZIPCODE',
        'COL_APVEPAYZIPCODE' => 'APVEPAYZIPCODE',
        'ApvePayZipCode' => 'APVEPAYZIPCODE',
        'ap_vend_mast.ApvePayZipCode' => 'APVEPAYZIPCODE',
        'Apvestatus' => 'APVESTATUS',
        'Vendor.Apvestatus' => 'APVESTATUS',
        'apvestatus' => 'APVESTATUS',
        'vendor.apvestatus' => 'APVESTATUS',
        'VendorTableMap::COL_APVESTATUS' => 'APVESTATUS',
        'COL_APVESTATUS' => 'APVESTATUS',
        'ApveStatus' => 'APVESTATUS',
        'ap_vend_mast.ApveStatus' => 'APVESTATUS',
        'Apvetakeexpireddisc' => 'APVETAKEEXPIREDDISC',
        'Vendor.Apvetakeexpireddisc' => 'APVETAKEEXPIREDDISC',
        'apvetakeexpireddisc' => 'APVETAKEEXPIREDDISC',
        'vendor.apvetakeexpireddisc' => 'APVETAKEEXPIREDDISC',
        'VendorTableMap::COL_APVETAKEEXPIREDDISC' => 'APVETAKEEXPIREDDISC',
        'COL_APVETAKEEXPIREDDISC' => 'APVETAKEEXPIREDDISC',
        'ApveTakeExpiredDisc' => 'APVETAKEEXPIREDDISC',
        'ap_vend_mast.ApveTakeExpiredDisc' => 'APVETAKEEXPIREDDISC',
        'Apveprinthts' => 'APVEPRINTHTS',
        'Vendor.Apveprinthts' => 'APVEPRINTHTS',
        'apveprinthts' => 'APVEPRINTHTS',
        'vendor.apveprinthts' => 'APVEPRINTHTS',
        'VendorTableMap::COL_APVEPRINTHTS' => 'APVEPRINTHTS',
        'COL_APVEPRINTHTS' => 'APVEPRINTHTS',
        'ApvePrintHts' => 'APVEPRINTHTS',
        'ap_vend_mast.ApvePrintHts' => 'APVEPRINTHTS',
        'Apvefabbin' => 'APVEFABBIN',
        'Vendor.Apvefabbin' => 'APVEFABBIN',
        'apvefabbin' => 'APVEFABBIN',
        'vendor.apvefabbin' => 'APVEFABBIN',
        'VendorTableMap::COL_APVEFABBIN' => 'APVEFABBIN',
        'COL_APVEFABBIN' => 'APVEFABBIN',
        'ApveFabBin' => 'APVEFABBIN',
        'ap_vend_mast.ApveFabBin' => 'APVEFABBIN',
        'Apvelmprntbulk' => 'APVELMPRNTBULK',
        'Vendor.Apvelmprntbulk' => 'APVELMPRNTBULK',
        'apvelmprntbulk' => 'APVELMPRNTBULK',
        'vendor.apvelmprntbulk' => 'APVELMPRNTBULK',
        'VendorTableMap::COL_APVELMPRNTBULK' => 'APVELMPRNTBULK',
        'COL_APVELMPRNTBULK' => 'APVELMPRNTBULK',
        'ApveLmPrntBulk' => 'APVELMPRNTBULK',
        'ap_vend_mast.ApveLmPrntBulk' => 'APVELMPRNTBULK',
        'Apveallowdropship' => 'APVEALLOWDROPSHIP',
        'Vendor.Apveallowdropship' => 'APVEALLOWDROPSHIP',
        'apveallowdropship' => 'APVEALLOWDROPSHIP',
        'vendor.apveallowdropship' => 'APVEALLOWDROPSHIP',
        'VendorTableMap::COL_APVEALLOWDROPSHIP' => 'APVEALLOWDROPSHIP',
        'COL_APVEALLOWDROPSHIP' => 'APVEALLOWDROPSHIP',
        'ApveAllowDropShip' => 'APVEALLOWDROPSHIP',
        'ap_vend_mast.ApveAllowDropShip' => 'APVEALLOWDROPSHIP',
        'Aptbtypecode' => 'APTBTYPECODE',
        'Vendor.Aptbtypecode' => 'APTBTYPECODE',
        'aptbtypecode' => 'APTBTYPECODE',
        'vendor.aptbtypecode' => 'APTBTYPECODE',
        'VendorTableMap::COL_APTBTYPECODE' => 'APTBTYPECODE',
        'COL_APTBTYPECODE' => 'APTBTYPECODE',
        'AptbTypeCode' => 'APTBTYPECODE',
        'ap_vend_mast.AptbTypeCode' => 'APTBTYPECODE',
        'Aptmtermcode' => 'APTMTERMCODE',
        'Vendor.Aptmtermcode' => 'APTMTERMCODE',
        'aptmtermcode' => 'APTMTERMCODE',
        'vendor.aptmtermcode' => 'APTMTERMCODE',
        'VendorTableMap::COL_APTMTERMCODE' => 'APTMTERMCODE',
        'COL_APTMTERMCODE' => 'APTMTERMCODE',
        'AptmTermCode' => 'APTMTERMCODE',
        'ap_vend_mast.AptmTermCode' => 'APTMTERMCODE',
        'Apvesviacode' => 'APVESVIACODE',
        'Vendor.Apvesviacode' => 'APVESVIACODE',
        'apvesviacode' => 'APVESVIACODE',
        'vendor.apvesviacode' => 'APVESVIACODE',
        'VendorTableMap::COL_APVESVIACODE' => 'APVESVIACODE',
        'COL_APVESVIACODE' => 'APVESVIACODE',
        'ApveSviaCode' => 'APVESVIACODE',
        'ap_vend_mast.ApveSviaCode' => 'APVESVIACODE',
        'Apveoldfob' => 'APVEOLDFOB',
        'Vendor.Apveoldfob' => 'APVEOLDFOB',
        'apveoldfob' => 'APVEOLDFOB',
        'vendor.apveoldfob' => 'APVEOLDFOB',
        'VendorTableMap::COL_APVEOLDFOB' => 'APVEOLDFOB',
        'COL_APVEOLDFOB' => 'APVEOLDFOB',
        'ApveOldFob' => 'APVEOLDFOB',
        'ap_vend_mast.ApveOldFob' => 'APVEOLDFOB',
        'Apveleaddays' => 'APVELEADDAYS',
        'Vendor.Apveleaddays' => 'APVELEADDAYS',
        'apveleaddays' => 'APVELEADDAYS',
        'vendor.apveleaddays' => 'APVELEADDAYS',
        'VendorTableMap::COL_APVELEADDAYS' => 'APVELEADDAYS',
        'COL_APVELEADDAYS' => 'APVELEADDAYS',
        'ApveLeadDays' => 'APVELEADDAYS',
        'ap_vend_mast.ApveLeadDays' => 'APVELEADDAYS',
        'Apveglacct' => 'APVEGLACCT',
        'Vendor.Apveglacct' => 'APVEGLACCT',
        'apveglacct' => 'APVEGLACCT',
        'vendor.apveglacct' => 'APVEGLACCT',
        'VendorTableMap::COL_APVEGLACCT' => 'APVEGLACCT',
        'COL_APVEGLACCT' => 'APVEGLACCT',
        'ApveGlAcct' => 'APVEGLACCT',
        'ap_vend_mast.ApveGlAcct' => 'APVEGLACCT',
        'Apve1099ssnbr' => 'APVE1099SSNBR',
        'Vendor.Apve1099ssnbr' => 'APVE1099SSNBR',
        'apve1099ssnbr' => 'APVE1099SSNBR',
        'vendor.apve1099ssnbr' => 'APVE1099SSNBR',
        'VendorTableMap::COL_APVE1099SSNBR' => 'APVE1099SSNBR',
        'COL_APVE1099SSNBR' => 'APVE1099SSNBR',
        'Apve1099SsNbr' => 'APVE1099SSNBR',
        'ap_vend_mast.Apve1099SsNbr' => 'APVE1099SSNBR',
        'Apveminordrcode' => 'APVEMINORDRCODE',
        'Vendor.Apveminordrcode' => 'APVEMINORDRCODE',
        'apveminordrcode' => 'APVEMINORDRCODE',
        'vendor.apveminordrcode' => 'APVEMINORDRCODE',
        'VendorTableMap::COL_APVEMINORDRCODE' => 'APVEMINORDRCODE',
        'COL_APVEMINORDRCODE' => 'APVEMINORDRCODE',
        'ApveMinOrdrCode' => 'APVEMINORDRCODE',
        'ap_vend_mast.ApveMinOrdrCode' => 'APVEMINORDRCODE',
        'Apveminordrvalue' => 'APVEMINORDRVALUE',
        'Vendor.Apveminordrvalue' => 'APVEMINORDRVALUE',
        'apveminordrvalue' => 'APVEMINORDRVALUE',
        'vendor.apveminordrvalue' => 'APVEMINORDRVALUE',
        'VendorTableMap::COL_APVEMINORDRVALUE' => 'APVEMINORDRVALUE',
        'COL_APVEMINORDRVALUE' => 'APVEMINORDRVALUE',
        'ApveMinOrdrValue' => 'APVEMINORDRVALUE',
        'ap_vend_mast.ApveMinOrdrValue' => 'APVEMINORDRVALUE',
        'Apvepurmtd' => 'APVEPURMTD',
        'Vendor.Apvepurmtd' => 'APVEPURMTD',
        'apvepurmtd' => 'APVEPURMTD',
        'vendor.apvepurmtd' => 'APVEPURMTD',
        'VendorTableMap::COL_APVEPURMTD' => 'APVEPURMTD',
        'COL_APVEPURMTD' => 'APVEPURMTD',
        'ApvePurMtd' => 'APVEPURMTD',
        'ap_vend_mast.ApvePurMtd' => 'APVEPURMTD',
        'Apvepomtd' => 'APVEPOMTD',
        'Vendor.Apvepomtd' => 'APVEPOMTD',
        'apvepomtd' => 'APVEPOMTD',
        'vendor.apvepomtd' => 'APVEPOMTD',
        'VendorTableMap::COL_APVEPOMTD' => 'APVEPOMTD',
        'COL_APVEPOMTD' => 'APVEPOMTD',
        'ApvePoMtd' => 'APVEPOMTD',
        'ap_vend_mast.ApvePoMtd' => 'APVEPOMTD',
        'Apveinvcmtd' => 'APVEINVCMTD',
        'Vendor.Apveinvcmtd' => 'APVEINVCMTD',
        'apveinvcmtd' => 'APVEINVCMTD',
        'vendor.apveinvcmtd' => 'APVEINVCMTD',
        'VendorTableMap::COL_APVEINVCMTD' => 'APVEINVCMTD',
        'COL_APVEINVCMTD' => 'APVEINVCMTD',
        'ApveInvcMtd' => 'APVEINVCMTD',
        'ap_vend_mast.ApveInvcMtd' => 'APVEINVCMTD',
        'Apveicntmtd' => 'APVEICNTMTD',
        'Vendor.Apveicntmtd' => 'APVEICNTMTD',
        'apveicntmtd' => 'APVEICNTMTD',
        'vendor.apveicntmtd' => 'APVEICNTMTD',
        'VendorTableMap::COL_APVEICNTMTD' => 'APVEICNTMTD',
        'COL_APVEICNTMTD' => 'APVEICNTMTD',
        'ApveIcntMtd' => 'APVEICNTMTD',
        'ap_vend_mast.ApveIcntMtd' => 'APVEICNTMTD',
        'Apvedateopen' => 'APVEDATEOPEN',
        'Vendor.Apvedateopen' => 'APVEDATEOPEN',
        'apvedateopen' => 'APVEDATEOPEN',
        'vendor.apvedateopen' => 'APVEDATEOPEN',
        'VendorTableMap::COL_APVEDATEOPEN' => 'APVEDATEOPEN',
        'COL_APVEDATEOPEN' => 'APVEDATEOPEN',
        'ApveDateOpen' => 'APVEDATEOPEN',
        'ap_vend_mast.ApveDateOpen' => 'APVEDATEOPEN',
        'Apvelastpurdate' => 'APVELASTPURDATE',
        'Vendor.Apvelastpurdate' => 'APVELASTPURDATE',
        'apvelastpurdate' => 'APVELASTPURDATE',
        'vendor.apvelastpurdate' => 'APVELASTPURDATE',
        'VendorTableMap::COL_APVELASTPURDATE' => 'APVELASTPURDATE',
        'COL_APVELASTPURDATE' => 'APVELASTPURDATE',
        'ApveLastPurDate' => 'APVELASTPURDATE',
        'ap_vend_mast.ApveLastPurDate' => 'APVELASTPURDATE',
        'Apvepur24mo01' => 'APVEPUR24MO01',
        'Vendor.Apvepur24mo01' => 'APVEPUR24MO01',
        'apvepur24mo01' => 'APVEPUR24MO01',
        'vendor.apvepur24mo01' => 'APVEPUR24MO01',
        'VendorTableMap::COL_APVEPUR24MO01' => 'APVEPUR24MO01',
        'COL_APVEPUR24MO01' => 'APVEPUR24MO01',
        'ApvePur24mo01' => 'APVEPUR24MO01',
        'ap_vend_mast.ApvePur24mo01' => 'APVEPUR24MO01',
        'Apvepo24mo01' => 'APVEPO24MO01',
        'Vendor.Apvepo24mo01' => 'APVEPO24MO01',
        'apvepo24mo01' => 'APVEPO24MO01',
        'vendor.apvepo24mo01' => 'APVEPO24MO01',
        'VendorTableMap::COL_APVEPO24MO01' => 'APVEPO24MO01',
        'COL_APVEPO24MO01' => 'APVEPO24MO01',
        'ApvePo24mo01' => 'APVEPO24MO01',
        'ap_vend_mast.ApvePo24mo01' => 'APVEPO24MO01',
        'Apveinvc24mo01' => 'APVEINVC24MO01',
        'Vendor.Apveinvc24mo01' => 'APVEINVC24MO01',
        'apveinvc24mo01' => 'APVEINVC24MO01',
        'vendor.apveinvc24mo01' => 'APVEINVC24MO01',
        'VendorTableMap::COL_APVEINVC24MO01' => 'APVEINVC24MO01',
        'COL_APVEINVC24MO01' => 'APVEINVC24MO01',
        'ApveInvc24mo01' => 'APVEINVC24MO01',
        'ap_vend_mast.ApveInvc24mo01' => 'APVEINVC24MO01',
        'Apveicnt24mo01' => 'APVEICNT24MO01',
        'Vendor.Apveicnt24mo01' => 'APVEICNT24MO01',
        'apveicnt24mo01' => 'APVEICNT24MO01',
        'vendor.apveicnt24mo01' => 'APVEICNT24MO01',
        'VendorTableMap::COL_APVEICNT24MO01' => 'APVEICNT24MO01',
        'COL_APVEICNT24MO01' => 'APVEICNT24MO01',
        'ApveIcnt24mo01' => 'APVEICNT24MO01',
        'ap_vend_mast.ApveIcnt24mo01' => 'APVEICNT24MO01',
        'Apvepur24mo02' => 'APVEPUR24MO02',
        'Vendor.Apvepur24mo02' => 'APVEPUR24MO02',
        'apvepur24mo02' => 'APVEPUR24MO02',
        'vendor.apvepur24mo02' => 'APVEPUR24MO02',
        'VendorTableMap::COL_APVEPUR24MO02' => 'APVEPUR24MO02',
        'COL_APVEPUR24MO02' => 'APVEPUR24MO02',
        'ApvePur24mo02' => 'APVEPUR24MO02',
        'ap_vend_mast.ApvePur24mo02' => 'APVEPUR24MO02',
        'Apvepo24mo02' => 'APVEPO24MO02',
        'Vendor.Apvepo24mo02' => 'APVEPO24MO02',
        'apvepo24mo02' => 'APVEPO24MO02',
        'vendor.apvepo24mo02' => 'APVEPO24MO02',
        'VendorTableMap::COL_APVEPO24MO02' => 'APVEPO24MO02',
        'COL_APVEPO24MO02' => 'APVEPO24MO02',
        'ApvePo24mo02' => 'APVEPO24MO02',
        'ap_vend_mast.ApvePo24mo02' => 'APVEPO24MO02',
        'Apveinvc24mo02' => 'APVEINVC24MO02',
        'Vendor.Apveinvc24mo02' => 'APVEINVC24MO02',
        'apveinvc24mo02' => 'APVEINVC24MO02',
        'vendor.apveinvc24mo02' => 'APVEINVC24MO02',
        'VendorTableMap::COL_APVEINVC24MO02' => 'APVEINVC24MO02',
        'COL_APVEINVC24MO02' => 'APVEINVC24MO02',
        'ApveInvc24mo02' => 'APVEINVC24MO02',
        'ap_vend_mast.ApveInvc24mo02' => 'APVEINVC24MO02',
        'Apveicnt24mo02' => 'APVEICNT24MO02',
        'Vendor.Apveicnt24mo02' => 'APVEICNT24MO02',
        'apveicnt24mo02' => 'APVEICNT24MO02',
        'vendor.apveicnt24mo02' => 'APVEICNT24MO02',
        'VendorTableMap::COL_APVEICNT24MO02' => 'APVEICNT24MO02',
        'COL_APVEICNT24MO02' => 'APVEICNT24MO02',
        'ApveIcnt24mo02' => 'APVEICNT24MO02',
        'ap_vend_mast.ApveIcnt24mo02' => 'APVEICNT24MO02',
        'Apvepur24mo03' => 'APVEPUR24MO03',
        'Vendor.Apvepur24mo03' => 'APVEPUR24MO03',
        'apvepur24mo03' => 'APVEPUR24MO03',
        'vendor.apvepur24mo03' => 'APVEPUR24MO03',
        'VendorTableMap::COL_APVEPUR24MO03' => 'APVEPUR24MO03',
        'COL_APVEPUR24MO03' => 'APVEPUR24MO03',
        'ApvePur24mo03' => 'APVEPUR24MO03',
        'ap_vend_mast.ApvePur24mo03' => 'APVEPUR24MO03',
        'Apvepo24mo03' => 'APVEPO24MO03',
        'Vendor.Apvepo24mo03' => 'APVEPO24MO03',
        'apvepo24mo03' => 'APVEPO24MO03',
        'vendor.apvepo24mo03' => 'APVEPO24MO03',
        'VendorTableMap::COL_APVEPO24MO03' => 'APVEPO24MO03',
        'COL_APVEPO24MO03' => 'APVEPO24MO03',
        'ApvePo24mo03' => 'APVEPO24MO03',
        'ap_vend_mast.ApvePo24mo03' => 'APVEPO24MO03',
        'Apveinvc24mo03' => 'APVEINVC24MO03',
        'Vendor.Apveinvc24mo03' => 'APVEINVC24MO03',
        'apveinvc24mo03' => 'APVEINVC24MO03',
        'vendor.apveinvc24mo03' => 'APVEINVC24MO03',
        'VendorTableMap::COL_APVEINVC24MO03' => 'APVEINVC24MO03',
        'COL_APVEINVC24MO03' => 'APVEINVC24MO03',
        'ApveInvc24mo03' => 'APVEINVC24MO03',
        'ap_vend_mast.ApveInvc24mo03' => 'APVEINVC24MO03',
        'Apveicnt24mo03' => 'APVEICNT24MO03',
        'Vendor.Apveicnt24mo03' => 'APVEICNT24MO03',
        'apveicnt24mo03' => 'APVEICNT24MO03',
        'vendor.apveicnt24mo03' => 'APVEICNT24MO03',
        'VendorTableMap::COL_APVEICNT24MO03' => 'APVEICNT24MO03',
        'COL_APVEICNT24MO03' => 'APVEICNT24MO03',
        'ApveIcnt24mo03' => 'APVEICNT24MO03',
        'ap_vend_mast.ApveIcnt24mo03' => 'APVEICNT24MO03',
        'Apvepur24mo04' => 'APVEPUR24MO04',
        'Vendor.Apvepur24mo04' => 'APVEPUR24MO04',
        'apvepur24mo04' => 'APVEPUR24MO04',
        'vendor.apvepur24mo04' => 'APVEPUR24MO04',
        'VendorTableMap::COL_APVEPUR24MO04' => 'APVEPUR24MO04',
        'COL_APVEPUR24MO04' => 'APVEPUR24MO04',
        'ApvePur24mo04' => 'APVEPUR24MO04',
        'ap_vend_mast.ApvePur24mo04' => 'APVEPUR24MO04',
        'Apvepo24mo04' => 'APVEPO24MO04',
        'Vendor.Apvepo24mo04' => 'APVEPO24MO04',
        'apvepo24mo04' => 'APVEPO24MO04',
        'vendor.apvepo24mo04' => 'APVEPO24MO04',
        'VendorTableMap::COL_APVEPO24MO04' => 'APVEPO24MO04',
        'COL_APVEPO24MO04' => 'APVEPO24MO04',
        'ApvePo24mo04' => 'APVEPO24MO04',
        'ap_vend_mast.ApvePo24mo04' => 'APVEPO24MO04',
        'Apveinvc24mo04' => 'APVEINVC24MO04',
        'Vendor.Apveinvc24mo04' => 'APVEINVC24MO04',
        'apveinvc24mo04' => 'APVEINVC24MO04',
        'vendor.apveinvc24mo04' => 'APVEINVC24MO04',
        'VendorTableMap::COL_APVEINVC24MO04' => 'APVEINVC24MO04',
        'COL_APVEINVC24MO04' => 'APVEINVC24MO04',
        'ApveInvc24mo04' => 'APVEINVC24MO04',
        'ap_vend_mast.ApveInvc24mo04' => 'APVEINVC24MO04',
        'Apveicnt24mo04' => 'APVEICNT24MO04',
        'Vendor.Apveicnt24mo04' => 'APVEICNT24MO04',
        'apveicnt24mo04' => 'APVEICNT24MO04',
        'vendor.apveicnt24mo04' => 'APVEICNT24MO04',
        'VendorTableMap::COL_APVEICNT24MO04' => 'APVEICNT24MO04',
        'COL_APVEICNT24MO04' => 'APVEICNT24MO04',
        'ApveIcnt24mo04' => 'APVEICNT24MO04',
        'ap_vend_mast.ApveIcnt24mo04' => 'APVEICNT24MO04',
        'Apvepur24mo05' => 'APVEPUR24MO05',
        'Vendor.Apvepur24mo05' => 'APVEPUR24MO05',
        'apvepur24mo05' => 'APVEPUR24MO05',
        'vendor.apvepur24mo05' => 'APVEPUR24MO05',
        'VendorTableMap::COL_APVEPUR24MO05' => 'APVEPUR24MO05',
        'COL_APVEPUR24MO05' => 'APVEPUR24MO05',
        'ApvePur24mo05' => 'APVEPUR24MO05',
        'ap_vend_mast.ApvePur24mo05' => 'APVEPUR24MO05',
        'Apvepo24mo05' => 'APVEPO24MO05',
        'Vendor.Apvepo24mo05' => 'APVEPO24MO05',
        'apvepo24mo05' => 'APVEPO24MO05',
        'vendor.apvepo24mo05' => 'APVEPO24MO05',
        'VendorTableMap::COL_APVEPO24MO05' => 'APVEPO24MO05',
        'COL_APVEPO24MO05' => 'APVEPO24MO05',
        'ApvePo24mo05' => 'APVEPO24MO05',
        'ap_vend_mast.ApvePo24mo05' => 'APVEPO24MO05',
        'Apveinvc24mo05' => 'APVEINVC24MO05',
        'Vendor.Apveinvc24mo05' => 'APVEINVC24MO05',
        'apveinvc24mo05' => 'APVEINVC24MO05',
        'vendor.apveinvc24mo05' => 'APVEINVC24MO05',
        'VendorTableMap::COL_APVEINVC24MO05' => 'APVEINVC24MO05',
        'COL_APVEINVC24MO05' => 'APVEINVC24MO05',
        'ApveInvc24mo05' => 'APVEINVC24MO05',
        'ap_vend_mast.ApveInvc24mo05' => 'APVEINVC24MO05',
        'Apveicnt24mo05' => 'APVEICNT24MO05',
        'Vendor.Apveicnt24mo05' => 'APVEICNT24MO05',
        'apveicnt24mo05' => 'APVEICNT24MO05',
        'vendor.apveicnt24mo05' => 'APVEICNT24MO05',
        'VendorTableMap::COL_APVEICNT24MO05' => 'APVEICNT24MO05',
        'COL_APVEICNT24MO05' => 'APVEICNT24MO05',
        'ApveIcnt24mo05' => 'APVEICNT24MO05',
        'ap_vend_mast.ApveIcnt24mo05' => 'APVEICNT24MO05',
        'Apvepur24mo06' => 'APVEPUR24MO06',
        'Vendor.Apvepur24mo06' => 'APVEPUR24MO06',
        'apvepur24mo06' => 'APVEPUR24MO06',
        'vendor.apvepur24mo06' => 'APVEPUR24MO06',
        'VendorTableMap::COL_APVEPUR24MO06' => 'APVEPUR24MO06',
        'COL_APVEPUR24MO06' => 'APVEPUR24MO06',
        'ApvePur24mo06' => 'APVEPUR24MO06',
        'ap_vend_mast.ApvePur24mo06' => 'APVEPUR24MO06',
        'Apvepo24mo06' => 'APVEPO24MO06',
        'Vendor.Apvepo24mo06' => 'APVEPO24MO06',
        'apvepo24mo06' => 'APVEPO24MO06',
        'vendor.apvepo24mo06' => 'APVEPO24MO06',
        'VendorTableMap::COL_APVEPO24MO06' => 'APVEPO24MO06',
        'COL_APVEPO24MO06' => 'APVEPO24MO06',
        'ApvePo24mo06' => 'APVEPO24MO06',
        'ap_vend_mast.ApvePo24mo06' => 'APVEPO24MO06',
        'Apveinvc24mo06' => 'APVEINVC24MO06',
        'Vendor.Apveinvc24mo06' => 'APVEINVC24MO06',
        'apveinvc24mo06' => 'APVEINVC24MO06',
        'vendor.apveinvc24mo06' => 'APVEINVC24MO06',
        'VendorTableMap::COL_APVEINVC24MO06' => 'APVEINVC24MO06',
        'COL_APVEINVC24MO06' => 'APVEINVC24MO06',
        'ApveInvc24mo06' => 'APVEINVC24MO06',
        'ap_vend_mast.ApveInvc24mo06' => 'APVEINVC24MO06',
        'Apveicnt24mo06' => 'APVEICNT24MO06',
        'Vendor.Apveicnt24mo06' => 'APVEICNT24MO06',
        'apveicnt24mo06' => 'APVEICNT24MO06',
        'vendor.apveicnt24mo06' => 'APVEICNT24MO06',
        'VendorTableMap::COL_APVEICNT24MO06' => 'APVEICNT24MO06',
        'COL_APVEICNT24MO06' => 'APVEICNT24MO06',
        'ApveIcnt24mo06' => 'APVEICNT24MO06',
        'ap_vend_mast.ApveIcnt24mo06' => 'APVEICNT24MO06',
        'Apvepur24mo07' => 'APVEPUR24MO07',
        'Vendor.Apvepur24mo07' => 'APVEPUR24MO07',
        'apvepur24mo07' => 'APVEPUR24MO07',
        'vendor.apvepur24mo07' => 'APVEPUR24MO07',
        'VendorTableMap::COL_APVEPUR24MO07' => 'APVEPUR24MO07',
        'COL_APVEPUR24MO07' => 'APVEPUR24MO07',
        'ApvePur24mo07' => 'APVEPUR24MO07',
        'ap_vend_mast.ApvePur24mo07' => 'APVEPUR24MO07',
        'Apvepo24mo07' => 'APVEPO24MO07',
        'Vendor.Apvepo24mo07' => 'APVEPO24MO07',
        'apvepo24mo07' => 'APVEPO24MO07',
        'vendor.apvepo24mo07' => 'APVEPO24MO07',
        'VendorTableMap::COL_APVEPO24MO07' => 'APVEPO24MO07',
        'COL_APVEPO24MO07' => 'APVEPO24MO07',
        'ApvePo24mo07' => 'APVEPO24MO07',
        'ap_vend_mast.ApvePo24mo07' => 'APVEPO24MO07',
        'Apveinvc24mo07' => 'APVEINVC24MO07',
        'Vendor.Apveinvc24mo07' => 'APVEINVC24MO07',
        'apveinvc24mo07' => 'APVEINVC24MO07',
        'vendor.apveinvc24mo07' => 'APVEINVC24MO07',
        'VendorTableMap::COL_APVEINVC24MO07' => 'APVEINVC24MO07',
        'COL_APVEINVC24MO07' => 'APVEINVC24MO07',
        'ApveInvc24mo07' => 'APVEINVC24MO07',
        'ap_vend_mast.ApveInvc24mo07' => 'APVEINVC24MO07',
        'Apveicnt24mo07' => 'APVEICNT24MO07',
        'Vendor.Apveicnt24mo07' => 'APVEICNT24MO07',
        'apveicnt24mo07' => 'APVEICNT24MO07',
        'vendor.apveicnt24mo07' => 'APVEICNT24MO07',
        'VendorTableMap::COL_APVEICNT24MO07' => 'APVEICNT24MO07',
        'COL_APVEICNT24MO07' => 'APVEICNT24MO07',
        'ApveIcnt24mo07' => 'APVEICNT24MO07',
        'ap_vend_mast.ApveIcnt24mo07' => 'APVEICNT24MO07',
        'Apvepur24mo08' => 'APVEPUR24MO08',
        'Vendor.Apvepur24mo08' => 'APVEPUR24MO08',
        'apvepur24mo08' => 'APVEPUR24MO08',
        'vendor.apvepur24mo08' => 'APVEPUR24MO08',
        'VendorTableMap::COL_APVEPUR24MO08' => 'APVEPUR24MO08',
        'COL_APVEPUR24MO08' => 'APVEPUR24MO08',
        'ApvePur24mo08' => 'APVEPUR24MO08',
        'ap_vend_mast.ApvePur24mo08' => 'APVEPUR24MO08',
        'Apvepo24mo08' => 'APVEPO24MO08',
        'Vendor.Apvepo24mo08' => 'APVEPO24MO08',
        'apvepo24mo08' => 'APVEPO24MO08',
        'vendor.apvepo24mo08' => 'APVEPO24MO08',
        'VendorTableMap::COL_APVEPO24MO08' => 'APVEPO24MO08',
        'COL_APVEPO24MO08' => 'APVEPO24MO08',
        'ApvePo24mo08' => 'APVEPO24MO08',
        'ap_vend_mast.ApvePo24mo08' => 'APVEPO24MO08',
        'Apveinvc24mo08' => 'APVEINVC24MO08',
        'Vendor.Apveinvc24mo08' => 'APVEINVC24MO08',
        'apveinvc24mo08' => 'APVEINVC24MO08',
        'vendor.apveinvc24mo08' => 'APVEINVC24MO08',
        'VendorTableMap::COL_APVEINVC24MO08' => 'APVEINVC24MO08',
        'COL_APVEINVC24MO08' => 'APVEINVC24MO08',
        'ApveInvc24mo08' => 'APVEINVC24MO08',
        'ap_vend_mast.ApveInvc24mo08' => 'APVEINVC24MO08',
        'Apveicnt24mo08' => 'APVEICNT24MO08',
        'Vendor.Apveicnt24mo08' => 'APVEICNT24MO08',
        'apveicnt24mo08' => 'APVEICNT24MO08',
        'vendor.apveicnt24mo08' => 'APVEICNT24MO08',
        'VendorTableMap::COL_APVEICNT24MO08' => 'APVEICNT24MO08',
        'COL_APVEICNT24MO08' => 'APVEICNT24MO08',
        'ApveIcnt24mo08' => 'APVEICNT24MO08',
        'ap_vend_mast.ApveIcnt24mo08' => 'APVEICNT24MO08',
        'Apvepur24mo09' => 'APVEPUR24MO09',
        'Vendor.Apvepur24mo09' => 'APVEPUR24MO09',
        'apvepur24mo09' => 'APVEPUR24MO09',
        'vendor.apvepur24mo09' => 'APVEPUR24MO09',
        'VendorTableMap::COL_APVEPUR24MO09' => 'APVEPUR24MO09',
        'COL_APVEPUR24MO09' => 'APVEPUR24MO09',
        'ApvePur24mo09' => 'APVEPUR24MO09',
        'ap_vend_mast.ApvePur24mo09' => 'APVEPUR24MO09',
        'Apvepo24mo09' => 'APVEPO24MO09',
        'Vendor.Apvepo24mo09' => 'APVEPO24MO09',
        'apvepo24mo09' => 'APVEPO24MO09',
        'vendor.apvepo24mo09' => 'APVEPO24MO09',
        'VendorTableMap::COL_APVEPO24MO09' => 'APVEPO24MO09',
        'COL_APVEPO24MO09' => 'APVEPO24MO09',
        'ApvePo24mo09' => 'APVEPO24MO09',
        'ap_vend_mast.ApvePo24mo09' => 'APVEPO24MO09',
        'Apveinvc24mo09' => 'APVEINVC24MO09',
        'Vendor.Apveinvc24mo09' => 'APVEINVC24MO09',
        'apveinvc24mo09' => 'APVEINVC24MO09',
        'vendor.apveinvc24mo09' => 'APVEINVC24MO09',
        'VendorTableMap::COL_APVEINVC24MO09' => 'APVEINVC24MO09',
        'COL_APVEINVC24MO09' => 'APVEINVC24MO09',
        'ApveInvc24mo09' => 'APVEINVC24MO09',
        'ap_vend_mast.ApveInvc24mo09' => 'APVEINVC24MO09',
        'Apveicnt24mo09' => 'APVEICNT24MO09',
        'Vendor.Apveicnt24mo09' => 'APVEICNT24MO09',
        'apveicnt24mo09' => 'APVEICNT24MO09',
        'vendor.apveicnt24mo09' => 'APVEICNT24MO09',
        'VendorTableMap::COL_APVEICNT24MO09' => 'APVEICNT24MO09',
        'COL_APVEICNT24MO09' => 'APVEICNT24MO09',
        'ApveIcnt24mo09' => 'APVEICNT24MO09',
        'ap_vend_mast.ApveIcnt24mo09' => 'APVEICNT24MO09',
        'Apvepur24mo10' => 'APVEPUR24MO10',
        'Vendor.Apvepur24mo10' => 'APVEPUR24MO10',
        'apvepur24mo10' => 'APVEPUR24MO10',
        'vendor.apvepur24mo10' => 'APVEPUR24MO10',
        'VendorTableMap::COL_APVEPUR24MO10' => 'APVEPUR24MO10',
        'COL_APVEPUR24MO10' => 'APVEPUR24MO10',
        'ApvePur24mo10' => 'APVEPUR24MO10',
        'ap_vend_mast.ApvePur24mo10' => 'APVEPUR24MO10',
        'Apvepo24mo10' => 'APVEPO24MO10',
        'Vendor.Apvepo24mo10' => 'APVEPO24MO10',
        'apvepo24mo10' => 'APVEPO24MO10',
        'vendor.apvepo24mo10' => 'APVEPO24MO10',
        'VendorTableMap::COL_APVEPO24MO10' => 'APVEPO24MO10',
        'COL_APVEPO24MO10' => 'APVEPO24MO10',
        'ApvePo24mo10' => 'APVEPO24MO10',
        'ap_vend_mast.ApvePo24mo10' => 'APVEPO24MO10',
        'Apveinvc24mo10' => 'APVEINVC24MO10',
        'Vendor.Apveinvc24mo10' => 'APVEINVC24MO10',
        'apveinvc24mo10' => 'APVEINVC24MO10',
        'vendor.apveinvc24mo10' => 'APVEINVC24MO10',
        'VendorTableMap::COL_APVEINVC24MO10' => 'APVEINVC24MO10',
        'COL_APVEINVC24MO10' => 'APVEINVC24MO10',
        'ApveInvc24mo10' => 'APVEINVC24MO10',
        'ap_vend_mast.ApveInvc24mo10' => 'APVEINVC24MO10',
        'Apveicnt24mo10' => 'APVEICNT24MO10',
        'Vendor.Apveicnt24mo10' => 'APVEICNT24MO10',
        'apveicnt24mo10' => 'APVEICNT24MO10',
        'vendor.apveicnt24mo10' => 'APVEICNT24MO10',
        'VendorTableMap::COL_APVEICNT24MO10' => 'APVEICNT24MO10',
        'COL_APVEICNT24MO10' => 'APVEICNT24MO10',
        'ApveIcnt24mo10' => 'APVEICNT24MO10',
        'ap_vend_mast.ApveIcnt24mo10' => 'APVEICNT24MO10',
        'Apvepur24mo11' => 'APVEPUR24MO11',
        'Vendor.Apvepur24mo11' => 'APVEPUR24MO11',
        'apvepur24mo11' => 'APVEPUR24MO11',
        'vendor.apvepur24mo11' => 'APVEPUR24MO11',
        'VendorTableMap::COL_APVEPUR24MO11' => 'APVEPUR24MO11',
        'COL_APVEPUR24MO11' => 'APVEPUR24MO11',
        'ApvePur24mo11' => 'APVEPUR24MO11',
        'ap_vend_mast.ApvePur24mo11' => 'APVEPUR24MO11',
        'Apvepo24mo11' => 'APVEPO24MO11',
        'Vendor.Apvepo24mo11' => 'APVEPO24MO11',
        'apvepo24mo11' => 'APVEPO24MO11',
        'vendor.apvepo24mo11' => 'APVEPO24MO11',
        'VendorTableMap::COL_APVEPO24MO11' => 'APVEPO24MO11',
        'COL_APVEPO24MO11' => 'APVEPO24MO11',
        'ApvePo24mo11' => 'APVEPO24MO11',
        'ap_vend_mast.ApvePo24mo11' => 'APVEPO24MO11',
        'Apveinvc24mo11' => 'APVEINVC24MO11',
        'Vendor.Apveinvc24mo11' => 'APVEINVC24MO11',
        'apveinvc24mo11' => 'APVEINVC24MO11',
        'vendor.apveinvc24mo11' => 'APVEINVC24MO11',
        'VendorTableMap::COL_APVEINVC24MO11' => 'APVEINVC24MO11',
        'COL_APVEINVC24MO11' => 'APVEINVC24MO11',
        'ApveInvc24mo11' => 'APVEINVC24MO11',
        'ap_vend_mast.ApveInvc24mo11' => 'APVEINVC24MO11',
        'Apveicnt24mo11' => 'APVEICNT24MO11',
        'Vendor.Apveicnt24mo11' => 'APVEICNT24MO11',
        'apveicnt24mo11' => 'APVEICNT24MO11',
        'vendor.apveicnt24mo11' => 'APVEICNT24MO11',
        'VendorTableMap::COL_APVEICNT24MO11' => 'APVEICNT24MO11',
        'COL_APVEICNT24MO11' => 'APVEICNT24MO11',
        'ApveIcnt24mo11' => 'APVEICNT24MO11',
        'ap_vend_mast.ApveIcnt24mo11' => 'APVEICNT24MO11',
        'Apvepur24mo12' => 'APVEPUR24MO12',
        'Vendor.Apvepur24mo12' => 'APVEPUR24MO12',
        'apvepur24mo12' => 'APVEPUR24MO12',
        'vendor.apvepur24mo12' => 'APVEPUR24MO12',
        'VendorTableMap::COL_APVEPUR24MO12' => 'APVEPUR24MO12',
        'COL_APVEPUR24MO12' => 'APVEPUR24MO12',
        'ApvePur24mo12' => 'APVEPUR24MO12',
        'ap_vend_mast.ApvePur24mo12' => 'APVEPUR24MO12',
        'Apvepo24mo12' => 'APVEPO24MO12',
        'Vendor.Apvepo24mo12' => 'APVEPO24MO12',
        'apvepo24mo12' => 'APVEPO24MO12',
        'vendor.apvepo24mo12' => 'APVEPO24MO12',
        'VendorTableMap::COL_APVEPO24MO12' => 'APVEPO24MO12',
        'COL_APVEPO24MO12' => 'APVEPO24MO12',
        'ApvePo24mo12' => 'APVEPO24MO12',
        'ap_vend_mast.ApvePo24mo12' => 'APVEPO24MO12',
        'Apveinvc24mo12' => 'APVEINVC24MO12',
        'Vendor.Apveinvc24mo12' => 'APVEINVC24MO12',
        'apveinvc24mo12' => 'APVEINVC24MO12',
        'vendor.apveinvc24mo12' => 'APVEINVC24MO12',
        'VendorTableMap::COL_APVEINVC24MO12' => 'APVEINVC24MO12',
        'COL_APVEINVC24MO12' => 'APVEINVC24MO12',
        'ApveInvc24mo12' => 'APVEINVC24MO12',
        'ap_vend_mast.ApveInvc24mo12' => 'APVEINVC24MO12',
        'Apveicnt24mo12' => 'APVEICNT24MO12',
        'Vendor.Apveicnt24mo12' => 'APVEICNT24MO12',
        'apveicnt24mo12' => 'APVEICNT24MO12',
        'vendor.apveicnt24mo12' => 'APVEICNT24MO12',
        'VendorTableMap::COL_APVEICNT24MO12' => 'APVEICNT24MO12',
        'COL_APVEICNT24MO12' => 'APVEICNT24MO12',
        'ApveIcnt24mo12' => 'APVEICNT24MO12',
        'ap_vend_mast.ApveIcnt24mo12' => 'APVEICNT24MO12',
        'Apvepur24mo13' => 'APVEPUR24MO13',
        'Vendor.Apvepur24mo13' => 'APVEPUR24MO13',
        'apvepur24mo13' => 'APVEPUR24MO13',
        'vendor.apvepur24mo13' => 'APVEPUR24MO13',
        'VendorTableMap::COL_APVEPUR24MO13' => 'APVEPUR24MO13',
        'COL_APVEPUR24MO13' => 'APVEPUR24MO13',
        'ApvePur24mo13' => 'APVEPUR24MO13',
        'ap_vend_mast.ApvePur24mo13' => 'APVEPUR24MO13',
        'Apvepo24mo13' => 'APVEPO24MO13',
        'Vendor.Apvepo24mo13' => 'APVEPO24MO13',
        'apvepo24mo13' => 'APVEPO24MO13',
        'vendor.apvepo24mo13' => 'APVEPO24MO13',
        'VendorTableMap::COL_APVEPO24MO13' => 'APVEPO24MO13',
        'COL_APVEPO24MO13' => 'APVEPO24MO13',
        'ApvePo24mo13' => 'APVEPO24MO13',
        'ap_vend_mast.ApvePo24mo13' => 'APVEPO24MO13',
        'Apveinvc24mo13' => 'APVEINVC24MO13',
        'Vendor.Apveinvc24mo13' => 'APVEINVC24MO13',
        'apveinvc24mo13' => 'APVEINVC24MO13',
        'vendor.apveinvc24mo13' => 'APVEINVC24MO13',
        'VendorTableMap::COL_APVEINVC24MO13' => 'APVEINVC24MO13',
        'COL_APVEINVC24MO13' => 'APVEINVC24MO13',
        'ApveInvc24mo13' => 'APVEINVC24MO13',
        'ap_vend_mast.ApveInvc24mo13' => 'APVEINVC24MO13',
        'Apveicnt24mo13' => 'APVEICNT24MO13',
        'Vendor.Apveicnt24mo13' => 'APVEICNT24MO13',
        'apveicnt24mo13' => 'APVEICNT24MO13',
        'vendor.apveicnt24mo13' => 'APVEICNT24MO13',
        'VendorTableMap::COL_APVEICNT24MO13' => 'APVEICNT24MO13',
        'COL_APVEICNT24MO13' => 'APVEICNT24MO13',
        'ApveIcnt24mo13' => 'APVEICNT24MO13',
        'ap_vend_mast.ApveIcnt24mo13' => 'APVEICNT24MO13',
        'Apvepur24mo14' => 'APVEPUR24MO14',
        'Vendor.Apvepur24mo14' => 'APVEPUR24MO14',
        'apvepur24mo14' => 'APVEPUR24MO14',
        'vendor.apvepur24mo14' => 'APVEPUR24MO14',
        'VendorTableMap::COL_APVEPUR24MO14' => 'APVEPUR24MO14',
        'COL_APVEPUR24MO14' => 'APVEPUR24MO14',
        'ApvePur24mo14' => 'APVEPUR24MO14',
        'ap_vend_mast.ApvePur24mo14' => 'APVEPUR24MO14',
        'Apvepo24mo14' => 'APVEPO24MO14',
        'Vendor.Apvepo24mo14' => 'APVEPO24MO14',
        'apvepo24mo14' => 'APVEPO24MO14',
        'vendor.apvepo24mo14' => 'APVEPO24MO14',
        'VendorTableMap::COL_APVEPO24MO14' => 'APVEPO24MO14',
        'COL_APVEPO24MO14' => 'APVEPO24MO14',
        'ApvePo24mo14' => 'APVEPO24MO14',
        'ap_vend_mast.ApvePo24mo14' => 'APVEPO24MO14',
        'Apveinvc24mo14' => 'APVEINVC24MO14',
        'Vendor.Apveinvc24mo14' => 'APVEINVC24MO14',
        'apveinvc24mo14' => 'APVEINVC24MO14',
        'vendor.apveinvc24mo14' => 'APVEINVC24MO14',
        'VendorTableMap::COL_APVEINVC24MO14' => 'APVEINVC24MO14',
        'COL_APVEINVC24MO14' => 'APVEINVC24MO14',
        'ApveInvc24mo14' => 'APVEINVC24MO14',
        'ap_vend_mast.ApveInvc24mo14' => 'APVEINVC24MO14',
        'Apveicnt24mo14' => 'APVEICNT24MO14',
        'Vendor.Apveicnt24mo14' => 'APVEICNT24MO14',
        'apveicnt24mo14' => 'APVEICNT24MO14',
        'vendor.apveicnt24mo14' => 'APVEICNT24MO14',
        'VendorTableMap::COL_APVEICNT24MO14' => 'APVEICNT24MO14',
        'COL_APVEICNT24MO14' => 'APVEICNT24MO14',
        'ApveIcnt24mo14' => 'APVEICNT24MO14',
        'ap_vend_mast.ApveIcnt24mo14' => 'APVEICNT24MO14',
        'Apvepur24mo15' => 'APVEPUR24MO15',
        'Vendor.Apvepur24mo15' => 'APVEPUR24MO15',
        'apvepur24mo15' => 'APVEPUR24MO15',
        'vendor.apvepur24mo15' => 'APVEPUR24MO15',
        'VendorTableMap::COL_APVEPUR24MO15' => 'APVEPUR24MO15',
        'COL_APVEPUR24MO15' => 'APVEPUR24MO15',
        'ApvePur24mo15' => 'APVEPUR24MO15',
        'ap_vend_mast.ApvePur24mo15' => 'APVEPUR24MO15',
        'Apvepo24mo15' => 'APVEPO24MO15',
        'Vendor.Apvepo24mo15' => 'APVEPO24MO15',
        'apvepo24mo15' => 'APVEPO24MO15',
        'vendor.apvepo24mo15' => 'APVEPO24MO15',
        'VendorTableMap::COL_APVEPO24MO15' => 'APVEPO24MO15',
        'COL_APVEPO24MO15' => 'APVEPO24MO15',
        'ApvePo24mo15' => 'APVEPO24MO15',
        'ap_vend_mast.ApvePo24mo15' => 'APVEPO24MO15',
        'Apveinvc24mo15' => 'APVEINVC24MO15',
        'Vendor.Apveinvc24mo15' => 'APVEINVC24MO15',
        'apveinvc24mo15' => 'APVEINVC24MO15',
        'vendor.apveinvc24mo15' => 'APVEINVC24MO15',
        'VendorTableMap::COL_APVEINVC24MO15' => 'APVEINVC24MO15',
        'COL_APVEINVC24MO15' => 'APVEINVC24MO15',
        'ApveInvc24mo15' => 'APVEINVC24MO15',
        'ap_vend_mast.ApveInvc24mo15' => 'APVEINVC24MO15',
        'Apveicnt24mo15' => 'APVEICNT24MO15',
        'Vendor.Apveicnt24mo15' => 'APVEICNT24MO15',
        'apveicnt24mo15' => 'APVEICNT24MO15',
        'vendor.apveicnt24mo15' => 'APVEICNT24MO15',
        'VendorTableMap::COL_APVEICNT24MO15' => 'APVEICNT24MO15',
        'COL_APVEICNT24MO15' => 'APVEICNT24MO15',
        'ApveIcnt24mo15' => 'APVEICNT24MO15',
        'ap_vend_mast.ApveIcnt24mo15' => 'APVEICNT24MO15',
        'Apvepur24mo16' => 'APVEPUR24MO16',
        'Vendor.Apvepur24mo16' => 'APVEPUR24MO16',
        'apvepur24mo16' => 'APVEPUR24MO16',
        'vendor.apvepur24mo16' => 'APVEPUR24MO16',
        'VendorTableMap::COL_APVEPUR24MO16' => 'APVEPUR24MO16',
        'COL_APVEPUR24MO16' => 'APVEPUR24MO16',
        'ApvePur24mo16' => 'APVEPUR24MO16',
        'ap_vend_mast.ApvePur24mo16' => 'APVEPUR24MO16',
        'Apvepo24mo16' => 'APVEPO24MO16',
        'Vendor.Apvepo24mo16' => 'APVEPO24MO16',
        'apvepo24mo16' => 'APVEPO24MO16',
        'vendor.apvepo24mo16' => 'APVEPO24MO16',
        'VendorTableMap::COL_APVEPO24MO16' => 'APVEPO24MO16',
        'COL_APVEPO24MO16' => 'APVEPO24MO16',
        'ApvePo24mo16' => 'APVEPO24MO16',
        'ap_vend_mast.ApvePo24mo16' => 'APVEPO24MO16',
        'Apveinvc24mo16' => 'APVEINVC24MO16',
        'Vendor.Apveinvc24mo16' => 'APVEINVC24MO16',
        'apveinvc24mo16' => 'APVEINVC24MO16',
        'vendor.apveinvc24mo16' => 'APVEINVC24MO16',
        'VendorTableMap::COL_APVEINVC24MO16' => 'APVEINVC24MO16',
        'COL_APVEINVC24MO16' => 'APVEINVC24MO16',
        'ApveInvc24mo16' => 'APVEINVC24MO16',
        'ap_vend_mast.ApveInvc24mo16' => 'APVEINVC24MO16',
        'Apveicnt24mo16' => 'APVEICNT24MO16',
        'Vendor.Apveicnt24mo16' => 'APVEICNT24MO16',
        'apveicnt24mo16' => 'APVEICNT24MO16',
        'vendor.apveicnt24mo16' => 'APVEICNT24MO16',
        'VendorTableMap::COL_APVEICNT24MO16' => 'APVEICNT24MO16',
        'COL_APVEICNT24MO16' => 'APVEICNT24MO16',
        'ApveIcnt24mo16' => 'APVEICNT24MO16',
        'ap_vend_mast.ApveIcnt24mo16' => 'APVEICNT24MO16',
        'Apvepur24mo17' => 'APVEPUR24MO17',
        'Vendor.Apvepur24mo17' => 'APVEPUR24MO17',
        'apvepur24mo17' => 'APVEPUR24MO17',
        'vendor.apvepur24mo17' => 'APVEPUR24MO17',
        'VendorTableMap::COL_APVEPUR24MO17' => 'APVEPUR24MO17',
        'COL_APVEPUR24MO17' => 'APVEPUR24MO17',
        'ApvePur24mo17' => 'APVEPUR24MO17',
        'ap_vend_mast.ApvePur24mo17' => 'APVEPUR24MO17',
        'Apvepo24mo17' => 'APVEPO24MO17',
        'Vendor.Apvepo24mo17' => 'APVEPO24MO17',
        'apvepo24mo17' => 'APVEPO24MO17',
        'vendor.apvepo24mo17' => 'APVEPO24MO17',
        'VendorTableMap::COL_APVEPO24MO17' => 'APVEPO24MO17',
        'COL_APVEPO24MO17' => 'APVEPO24MO17',
        'ApvePo24mo17' => 'APVEPO24MO17',
        'ap_vend_mast.ApvePo24mo17' => 'APVEPO24MO17',
        'Apveinvc24mo17' => 'APVEINVC24MO17',
        'Vendor.Apveinvc24mo17' => 'APVEINVC24MO17',
        'apveinvc24mo17' => 'APVEINVC24MO17',
        'vendor.apveinvc24mo17' => 'APVEINVC24MO17',
        'VendorTableMap::COL_APVEINVC24MO17' => 'APVEINVC24MO17',
        'COL_APVEINVC24MO17' => 'APVEINVC24MO17',
        'ApveInvc24mo17' => 'APVEINVC24MO17',
        'ap_vend_mast.ApveInvc24mo17' => 'APVEINVC24MO17',
        'Apveicnt24mo17' => 'APVEICNT24MO17',
        'Vendor.Apveicnt24mo17' => 'APVEICNT24MO17',
        'apveicnt24mo17' => 'APVEICNT24MO17',
        'vendor.apveicnt24mo17' => 'APVEICNT24MO17',
        'VendorTableMap::COL_APVEICNT24MO17' => 'APVEICNT24MO17',
        'COL_APVEICNT24MO17' => 'APVEICNT24MO17',
        'ApveIcnt24mo17' => 'APVEICNT24MO17',
        'ap_vend_mast.ApveIcnt24mo17' => 'APVEICNT24MO17',
        'Apvepur24mo18' => 'APVEPUR24MO18',
        'Vendor.Apvepur24mo18' => 'APVEPUR24MO18',
        'apvepur24mo18' => 'APVEPUR24MO18',
        'vendor.apvepur24mo18' => 'APVEPUR24MO18',
        'VendorTableMap::COL_APVEPUR24MO18' => 'APVEPUR24MO18',
        'COL_APVEPUR24MO18' => 'APVEPUR24MO18',
        'ApvePur24mo18' => 'APVEPUR24MO18',
        'ap_vend_mast.ApvePur24mo18' => 'APVEPUR24MO18',
        'Apvepo24mo18' => 'APVEPO24MO18',
        'Vendor.Apvepo24mo18' => 'APVEPO24MO18',
        'apvepo24mo18' => 'APVEPO24MO18',
        'vendor.apvepo24mo18' => 'APVEPO24MO18',
        'VendorTableMap::COL_APVEPO24MO18' => 'APVEPO24MO18',
        'COL_APVEPO24MO18' => 'APVEPO24MO18',
        'ApvePo24mo18' => 'APVEPO24MO18',
        'ap_vend_mast.ApvePo24mo18' => 'APVEPO24MO18',
        'Apveinvc24mo18' => 'APVEINVC24MO18',
        'Vendor.Apveinvc24mo18' => 'APVEINVC24MO18',
        'apveinvc24mo18' => 'APVEINVC24MO18',
        'vendor.apveinvc24mo18' => 'APVEINVC24MO18',
        'VendorTableMap::COL_APVEINVC24MO18' => 'APVEINVC24MO18',
        'COL_APVEINVC24MO18' => 'APVEINVC24MO18',
        'ApveInvc24mo18' => 'APVEINVC24MO18',
        'ap_vend_mast.ApveInvc24mo18' => 'APVEINVC24MO18',
        'Apveicnt24mo18' => 'APVEICNT24MO18',
        'Vendor.Apveicnt24mo18' => 'APVEICNT24MO18',
        'apveicnt24mo18' => 'APVEICNT24MO18',
        'vendor.apveicnt24mo18' => 'APVEICNT24MO18',
        'VendorTableMap::COL_APVEICNT24MO18' => 'APVEICNT24MO18',
        'COL_APVEICNT24MO18' => 'APVEICNT24MO18',
        'ApveIcnt24mo18' => 'APVEICNT24MO18',
        'ap_vend_mast.ApveIcnt24mo18' => 'APVEICNT24MO18',
        'Apvepur24mo19' => 'APVEPUR24MO19',
        'Vendor.Apvepur24mo19' => 'APVEPUR24MO19',
        'apvepur24mo19' => 'APVEPUR24MO19',
        'vendor.apvepur24mo19' => 'APVEPUR24MO19',
        'VendorTableMap::COL_APVEPUR24MO19' => 'APVEPUR24MO19',
        'COL_APVEPUR24MO19' => 'APVEPUR24MO19',
        'ApvePur24mo19' => 'APVEPUR24MO19',
        'ap_vend_mast.ApvePur24mo19' => 'APVEPUR24MO19',
        'Apvepo24mo19' => 'APVEPO24MO19',
        'Vendor.Apvepo24mo19' => 'APVEPO24MO19',
        'apvepo24mo19' => 'APVEPO24MO19',
        'vendor.apvepo24mo19' => 'APVEPO24MO19',
        'VendorTableMap::COL_APVEPO24MO19' => 'APVEPO24MO19',
        'COL_APVEPO24MO19' => 'APVEPO24MO19',
        'ApvePo24mo19' => 'APVEPO24MO19',
        'ap_vend_mast.ApvePo24mo19' => 'APVEPO24MO19',
        'Apveinvc24mo19' => 'APVEINVC24MO19',
        'Vendor.Apveinvc24mo19' => 'APVEINVC24MO19',
        'apveinvc24mo19' => 'APVEINVC24MO19',
        'vendor.apveinvc24mo19' => 'APVEINVC24MO19',
        'VendorTableMap::COL_APVEINVC24MO19' => 'APVEINVC24MO19',
        'COL_APVEINVC24MO19' => 'APVEINVC24MO19',
        'ApveInvc24mo19' => 'APVEINVC24MO19',
        'ap_vend_mast.ApveInvc24mo19' => 'APVEINVC24MO19',
        'Apveicnt24mo19' => 'APVEICNT24MO19',
        'Vendor.Apveicnt24mo19' => 'APVEICNT24MO19',
        'apveicnt24mo19' => 'APVEICNT24MO19',
        'vendor.apveicnt24mo19' => 'APVEICNT24MO19',
        'VendorTableMap::COL_APVEICNT24MO19' => 'APVEICNT24MO19',
        'COL_APVEICNT24MO19' => 'APVEICNT24MO19',
        'ApveIcnt24mo19' => 'APVEICNT24MO19',
        'ap_vend_mast.ApveIcnt24mo19' => 'APVEICNT24MO19',
        'Apvepur24mo20' => 'APVEPUR24MO20',
        'Vendor.Apvepur24mo20' => 'APVEPUR24MO20',
        'apvepur24mo20' => 'APVEPUR24MO20',
        'vendor.apvepur24mo20' => 'APVEPUR24MO20',
        'VendorTableMap::COL_APVEPUR24MO20' => 'APVEPUR24MO20',
        'COL_APVEPUR24MO20' => 'APVEPUR24MO20',
        'ApvePur24mo20' => 'APVEPUR24MO20',
        'ap_vend_mast.ApvePur24mo20' => 'APVEPUR24MO20',
        'Apvepo24mo20' => 'APVEPO24MO20',
        'Vendor.Apvepo24mo20' => 'APVEPO24MO20',
        'apvepo24mo20' => 'APVEPO24MO20',
        'vendor.apvepo24mo20' => 'APVEPO24MO20',
        'VendorTableMap::COL_APVEPO24MO20' => 'APVEPO24MO20',
        'COL_APVEPO24MO20' => 'APVEPO24MO20',
        'ApvePo24mo20' => 'APVEPO24MO20',
        'ap_vend_mast.ApvePo24mo20' => 'APVEPO24MO20',
        'Apveinvc24mo20' => 'APVEINVC24MO20',
        'Vendor.Apveinvc24mo20' => 'APVEINVC24MO20',
        'apveinvc24mo20' => 'APVEINVC24MO20',
        'vendor.apveinvc24mo20' => 'APVEINVC24MO20',
        'VendorTableMap::COL_APVEINVC24MO20' => 'APVEINVC24MO20',
        'COL_APVEINVC24MO20' => 'APVEINVC24MO20',
        'ApveInvc24mo20' => 'APVEINVC24MO20',
        'ap_vend_mast.ApveInvc24mo20' => 'APVEINVC24MO20',
        'Apveicnt24mo20' => 'APVEICNT24MO20',
        'Vendor.Apveicnt24mo20' => 'APVEICNT24MO20',
        'apveicnt24mo20' => 'APVEICNT24MO20',
        'vendor.apveicnt24mo20' => 'APVEICNT24MO20',
        'VendorTableMap::COL_APVEICNT24MO20' => 'APVEICNT24MO20',
        'COL_APVEICNT24MO20' => 'APVEICNT24MO20',
        'ApveIcnt24mo20' => 'APVEICNT24MO20',
        'ap_vend_mast.ApveIcnt24mo20' => 'APVEICNT24MO20',
        'Apvepur24mo21' => 'APVEPUR24MO21',
        'Vendor.Apvepur24mo21' => 'APVEPUR24MO21',
        'apvepur24mo21' => 'APVEPUR24MO21',
        'vendor.apvepur24mo21' => 'APVEPUR24MO21',
        'VendorTableMap::COL_APVEPUR24MO21' => 'APVEPUR24MO21',
        'COL_APVEPUR24MO21' => 'APVEPUR24MO21',
        'ApvePur24mo21' => 'APVEPUR24MO21',
        'ap_vend_mast.ApvePur24mo21' => 'APVEPUR24MO21',
        'Apvepo24mo21' => 'APVEPO24MO21',
        'Vendor.Apvepo24mo21' => 'APVEPO24MO21',
        'apvepo24mo21' => 'APVEPO24MO21',
        'vendor.apvepo24mo21' => 'APVEPO24MO21',
        'VendorTableMap::COL_APVEPO24MO21' => 'APVEPO24MO21',
        'COL_APVEPO24MO21' => 'APVEPO24MO21',
        'ApvePo24mo21' => 'APVEPO24MO21',
        'ap_vend_mast.ApvePo24mo21' => 'APVEPO24MO21',
        'Apveinvc24mo21' => 'APVEINVC24MO21',
        'Vendor.Apveinvc24mo21' => 'APVEINVC24MO21',
        'apveinvc24mo21' => 'APVEINVC24MO21',
        'vendor.apveinvc24mo21' => 'APVEINVC24MO21',
        'VendorTableMap::COL_APVEINVC24MO21' => 'APVEINVC24MO21',
        'COL_APVEINVC24MO21' => 'APVEINVC24MO21',
        'ApveInvc24mo21' => 'APVEINVC24MO21',
        'ap_vend_mast.ApveInvc24mo21' => 'APVEINVC24MO21',
        'Apveicnt24mo21' => 'APVEICNT24MO21',
        'Vendor.Apveicnt24mo21' => 'APVEICNT24MO21',
        'apveicnt24mo21' => 'APVEICNT24MO21',
        'vendor.apveicnt24mo21' => 'APVEICNT24MO21',
        'VendorTableMap::COL_APVEICNT24MO21' => 'APVEICNT24MO21',
        'COL_APVEICNT24MO21' => 'APVEICNT24MO21',
        'ApveIcnt24mo21' => 'APVEICNT24MO21',
        'ap_vend_mast.ApveIcnt24mo21' => 'APVEICNT24MO21',
        'Apvepur24mo22' => 'APVEPUR24MO22',
        'Vendor.Apvepur24mo22' => 'APVEPUR24MO22',
        'apvepur24mo22' => 'APVEPUR24MO22',
        'vendor.apvepur24mo22' => 'APVEPUR24MO22',
        'VendorTableMap::COL_APVEPUR24MO22' => 'APVEPUR24MO22',
        'COL_APVEPUR24MO22' => 'APVEPUR24MO22',
        'ApvePur24mo22' => 'APVEPUR24MO22',
        'ap_vend_mast.ApvePur24mo22' => 'APVEPUR24MO22',
        'Apvepo24mo22' => 'APVEPO24MO22',
        'Vendor.Apvepo24mo22' => 'APVEPO24MO22',
        'apvepo24mo22' => 'APVEPO24MO22',
        'vendor.apvepo24mo22' => 'APVEPO24MO22',
        'VendorTableMap::COL_APVEPO24MO22' => 'APVEPO24MO22',
        'COL_APVEPO24MO22' => 'APVEPO24MO22',
        'ApvePo24mo22' => 'APVEPO24MO22',
        'ap_vend_mast.ApvePo24mo22' => 'APVEPO24MO22',
        'Apveinvc24mo22' => 'APVEINVC24MO22',
        'Vendor.Apveinvc24mo22' => 'APVEINVC24MO22',
        'apveinvc24mo22' => 'APVEINVC24MO22',
        'vendor.apveinvc24mo22' => 'APVEINVC24MO22',
        'VendorTableMap::COL_APVEINVC24MO22' => 'APVEINVC24MO22',
        'COL_APVEINVC24MO22' => 'APVEINVC24MO22',
        'ApveInvc24mo22' => 'APVEINVC24MO22',
        'ap_vend_mast.ApveInvc24mo22' => 'APVEINVC24MO22',
        'Apveicnt24mo22' => 'APVEICNT24MO22',
        'Vendor.Apveicnt24mo22' => 'APVEICNT24MO22',
        'apveicnt24mo22' => 'APVEICNT24MO22',
        'vendor.apveicnt24mo22' => 'APVEICNT24MO22',
        'VendorTableMap::COL_APVEICNT24MO22' => 'APVEICNT24MO22',
        'COL_APVEICNT24MO22' => 'APVEICNT24MO22',
        'ApveIcnt24mo22' => 'APVEICNT24MO22',
        'ap_vend_mast.ApveIcnt24mo22' => 'APVEICNT24MO22',
        'Apvepur24mo23' => 'APVEPUR24MO23',
        'Vendor.Apvepur24mo23' => 'APVEPUR24MO23',
        'apvepur24mo23' => 'APVEPUR24MO23',
        'vendor.apvepur24mo23' => 'APVEPUR24MO23',
        'VendorTableMap::COL_APVEPUR24MO23' => 'APVEPUR24MO23',
        'COL_APVEPUR24MO23' => 'APVEPUR24MO23',
        'ApvePur24mo23' => 'APVEPUR24MO23',
        'ap_vend_mast.ApvePur24mo23' => 'APVEPUR24MO23',
        'Apvepo24mo23' => 'APVEPO24MO23',
        'Vendor.Apvepo24mo23' => 'APVEPO24MO23',
        'apvepo24mo23' => 'APVEPO24MO23',
        'vendor.apvepo24mo23' => 'APVEPO24MO23',
        'VendorTableMap::COL_APVEPO24MO23' => 'APVEPO24MO23',
        'COL_APVEPO24MO23' => 'APVEPO24MO23',
        'ApvePo24mo23' => 'APVEPO24MO23',
        'ap_vend_mast.ApvePo24mo23' => 'APVEPO24MO23',
        'Apveinvc24mo23' => 'APVEINVC24MO23',
        'Vendor.Apveinvc24mo23' => 'APVEINVC24MO23',
        'apveinvc24mo23' => 'APVEINVC24MO23',
        'vendor.apveinvc24mo23' => 'APVEINVC24MO23',
        'VendorTableMap::COL_APVEINVC24MO23' => 'APVEINVC24MO23',
        'COL_APVEINVC24MO23' => 'APVEINVC24MO23',
        'ApveInvc24mo23' => 'APVEINVC24MO23',
        'ap_vend_mast.ApveInvc24mo23' => 'APVEINVC24MO23',
        'Apveicnt24mo23' => 'APVEICNT24MO23',
        'Vendor.Apveicnt24mo23' => 'APVEICNT24MO23',
        'apveicnt24mo23' => 'APVEICNT24MO23',
        'vendor.apveicnt24mo23' => 'APVEICNT24MO23',
        'VendorTableMap::COL_APVEICNT24MO23' => 'APVEICNT24MO23',
        'COL_APVEICNT24MO23' => 'APVEICNT24MO23',
        'ApveIcnt24mo23' => 'APVEICNT24MO23',
        'ap_vend_mast.ApveIcnt24mo23' => 'APVEICNT24MO23',
        'Apvepur24mo24' => 'APVEPUR24MO24',
        'Vendor.Apvepur24mo24' => 'APVEPUR24MO24',
        'apvepur24mo24' => 'APVEPUR24MO24',
        'vendor.apvepur24mo24' => 'APVEPUR24MO24',
        'VendorTableMap::COL_APVEPUR24MO24' => 'APVEPUR24MO24',
        'COL_APVEPUR24MO24' => 'APVEPUR24MO24',
        'ApvePur24mo24' => 'APVEPUR24MO24',
        'ap_vend_mast.ApvePur24mo24' => 'APVEPUR24MO24',
        'Apvepo24mo24' => 'APVEPO24MO24',
        'Vendor.Apvepo24mo24' => 'APVEPO24MO24',
        'apvepo24mo24' => 'APVEPO24MO24',
        'vendor.apvepo24mo24' => 'APVEPO24MO24',
        'VendorTableMap::COL_APVEPO24MO24' => 'APVEPO24MO24',
        'COL_APVEPO24MO24' => 'APVEPO24MO24',
        'ApvePo24mo24' => 'APVEPO24MO24',
        'ap_vend_mast.ApvePo24mo24' => 'APVEPO24MO24',
        'Apveinvc24mo24' => 'APVEINVC24MO24',
        'Vendor.Apveinvc24mo24' => 'APVEINVC24MO24',
        'apveinvc24mo24' => 'APVEINVC24MO24',
        'vendor.apveinvc24mo24' => 'APVEINVC24MO24',
        'VendorTableMap::COL_APVEINVC24MO24' => 'APVEINVC24MO24',
        'COL_APVEINVC24MO24' => 'APVEINVC24MO24',
        'ApveInvc24mo24' => 'APVEINVC24MO24',
        'ap_vend_mast.ApveInvc24mo24' => 'APVEINVC24MO24',
        'Apveicnt24mo24' => 'APVEICNT24MO24',
        'Vendor.Apveicnt24mo24' => 'APVEICNT24MO24',
        'apveicnt24mo24' => 'APVEICNT24MO24',
        'vendor.apveicnt24mo24' => 'APVEICNT24MO24',
        'VendorTableMap::COL_APVEICNT24MO24' => 'APVEICNT24MO24',
        'COL_APVEICNT24MO24' => 'APVEICNT24MO24',
        'ApveIcnt24mo24' => 'APVEICNT24MO24',
        'ap_vend_mast.ApveIcnt24mo24' => 'APVEICNT24MO24',
        'Apvecrncy' => 'APVECRNCY',
        'Vendor.Apvecrncy' => 'APVECRNCY',
        'apvecrncy' => 'APVECRNCY',
        'vendor.apvecrncy' => 'APVECRNCY',
        'VendorTableMap::COL_APVECRNCY' => 'APVECRNCY',
        'COL_APVECRNCY' => 'APVECRNCY',
        'ApveCrncy' => 'APVECRNCY',
        'ap_vend_mast.ApveCrncy' => 'APVECRNCY',
        'Apvefrtinamt' => 'APVEFRTINAMT',
        'Vendor.Apvefrtinamt' => 'APVEFRTINAMT',
        'apvefrtinamt' => 'APVEFRTINAMT',
        'vendor.apvefrtinamt' => 'APVEFRTINAMT',
        'VendorTableMap::COL_APVEFRTINAMT' => 'APVEFRTINAMT',
        'COL_APVEFRTINAMT' => 'APVEFRTINAMT',
        'ApveFrtInAmt' => 'APVEFRTINAMT',
        'ap_vend_mast.ApveFrtInAmt' => 'APVEFRTINAMT',
        'Apveouracctnbr' => 'APVEOURACCTNBR',
        'Vendor.Apveouracctnbr' => 'APVEOURACCTNBR',
        'apveouracctnbr' => 'APVEOURACCTNBR',
        'vendor.apveouracctnbr' => 'APVEOURACCTNBR',
        'VendorTableMap::COL_APVEOURACCTNBR' => 'APVEOURACCTNBR',
        'COL_APVEOURACCTNBR' => 'APVEOURACCTNBR',
        'ApveOurAcctNbr' => 'APVEOURACCTNBR',
        'ap_vend_mast.ApveOurAcctNbr' => 'APVEOURACCTNBR',
        'Apvevenddisc' => 'APVEVENDDISC',
        'Vendor.Apvevenddisc' => 'APVEVENDDISC',
        'apvevenddisc' => 'APVEVENDDISC',
        'vendor.apvevenddisc' => 'APVEVENDDISC',
        'VendorTableMap::COL_APVEVENDDISC' => 'APVEVENDDISC',
        'COL_APVEVENDDISC' => 'APVEVENDDISC',
        'ApveVendDisc' => 'APVEVENDDISC',
        'ap_vend_mast.ApveVendDisc' => 'APVEVENDDISC',
        'Apvefob' => 'APVEFOB',
        'Vendor.Apvefob' => 'APVEFOB',
        'apvefob' => 'APVEFOB',
        'vendor.apvefob' => 'APVEFOB',
        'VendorTableMap::COL_APVEFOB' => 'APVEFOB',
        'COL_APVEFOB' => 'APVEFOB',
        'ApveFob' => 'APVEFOB',
        'ap_vend_mast.ApveFob' => 'APVEFOB',
        'Apveroylpct' => 'APVEROYLPCT',
        'Vendor.Apveroylpct' => 'APVEROYLPCT',
        'apveroylpct' => 'APVEROYLPCT',
        'vendor.apveroylpct' => 'APVEROYLPCT',
        'VendorTableMap::COL_APVEROYLPCT' => 'APVEROYLPCT',
        'COL_APVEROYLPCT' => 'APVEROYLPCT',
        'ApveRoylPct' => 'APVEROYLPCT',
        'ap_vend_mast.ApveRoylPct' => 'APVEROYLPCT',
        'Apveprtpoeoru' => 'APVEPRTPOEORU',
        'Vendor.Apveprtpoeoru' => 'APVEPRTPOEORU',
        'apveprtpoeoru' => 'APVEPRTPOEORU',
        'vendor.apveprtpoeoru' => 'APVEPRTPOEORU',
        'VendorTableMap::COL_APVEPRTPOEORU' => 'APVEPRTPOEORU',
        'COL_APVEPRTPOEORU' => 'APVEPRTPOEORU',
        'ApvePrtPoEOrU' => 'APVEPRTPOEORU',
        'ap_vend_mast.ApvePrtPoEOrU' => 'APVEPRTPOEORU',
        'Apvecomrate' => 'APVECOMRATE',
        'Vendor.Apvecomrate' => 'APVECOMRATE',
        'apvecomrate' => 'APVECOMRATE',
        'vendor.apvecomrate' => 'APVECOMRATE',
        'VendorTableMap::COL_APVECOMRATE' => 'APVECOMRATE',
        'COL_APVECOMRATE' => 'APVECOMRATE',
        'ApveComRate' => 'APVECOMRATE',
        'ap_vend_mast.ApveComRate' => 'APVECOMRATE',
        'Apveuselandonrcpt' => 'APVEUSELANDONRCPT',
        'Vendor.Apveuselandonrcpt' => 'APVEUSELANDONRCPT',
        'apveuselandonrcpt' => 'APVEUSELANDONRCPT',
        'vendor.apveuselandonrcpt' => 'APVEUSELANDONRCPT',
        'VendorTableMap::COL_APVEUSELANDONRCPT' => 'APVEUSELANDONRCPT',
        'COL_APVEUSELANDONRCPT' => 'APVEUSELANDONRCPT',
        'ApveUseLandOnRcpt' => 'APVEUSELANDONRCPT',
        'ap_vend_mast.ApveUseLandOnRcpt' => 'APVEUSELANDONRCPT',
        'Apvebuyrwhse1' => 'APVEBUYRWHSE1',
        'Vendor.Apvebuyrwhse1' => 'APVEBUYRWHSE1',
        'apvebuyrwhse1' => 'APVEBUYRWHSE1',
        'vendor.apvebuyrwhse1' => 'APVEBUYRWHSE1',
        'VendorTableMap::COL_APVEBUYRWHSE1' => 'APVEBUYRWHSE1',
        'COL_APVEBUYRWHSE1' => 'APVEBUYRWHSE1',
        'ApveBuyrWhse1' => 'APVEBUYRWHSE1',
        'ap_vend_mast.ApveBuyrWhse1' => 'APVEBUYRWHSE1',
        'Apvebuyrcode1' => 'APVEBUYRCODE1',
        'Vendor.Apvebuyrcode1' => 'APVEBUYRCODE1',
        'apvebuyrcode1' => 'APVEBUYRCODE1',
        'vendor.apvebuyrcode1' => 'APVEBUYRCODE1',
        'VendorTableMap::COL_APVEBUYRCODE1' => 'APVEBUYRCODE1',
        'COL_APVEBUYRCODE1' => 'APVEBUYRCODE1',
        'ApveBuyrCode1' => 'APVEBUYRCODE1',
        'ap_vend_mast.ApveBuyrCode1' => 'APVEBUYRCODE1',
        'Apvebuyrwhse2' => 'APVEBUYRWHSE2',
        'Vendor.Apvebuyrwhse2' => 'APVEBUYRWHSE2',
        'apvebuyrwhse2' => 'APVEBUYRWHSE2',
        'vendor.apvebuyrwhse2' => 'APVEBUYRWHSE2',
        'VendorTableMap::COL_APVEBUYRWHSE2' => 'APVEBUYRWHSE2',
        'COL_APVEBUYRWHSE2' => 'APVEBUYRWHSE2',
        'ApveBuyrWhse2' => 'APVEBUYRWHSE2',
        'ap_vend_mast.ApveBuyrWhse2' => 'APVEBUYRWHSE2',
        'Apvebuyrcode2' => 'APVEBUYRCODE2',
        'Vendor.Apvebuyrcode2' => 'APVEBUYRCODE2',
        'apvebuyrcode2' => 'APVEBUYRCODE2',
        'vendor.apvebuyrcode2' => 'APVEBUYRCODE2',
        'VendorTableMap::COL_APVEBUYRCODE2' => 'APVEBUYRCODE2',
        'COL_APVEBUYRCODE2' => 'APVEBUYRCODE2',
        'ApveBuyrCode2' => 'APVEBUYRCODE2',
        'ap_vend_mast.ApveBuyrCode2' => 'APVEBUYRCODE2',
        'Apvebuyrwhse3' => 'APVEBUYRWHSE3',
        'Vendor.Apvebuyrwhse3' => 'APVEBUYRWHSE3',
        'apvebuyrwhse3' => 'APVEBUYRWHSE3',
        'vendor.apvebuyrwhse3' => 'APVEBUYRWHSE3',
        'VendorTableMap::COL_APVEBUYRWHSE3' => 'APVEBUYRWHSE3',
        'COL_APVEBUYRWHSE3' => 'APVEBUYRWHSE3',
        'ApveBuyrWhse3' => 'APVEBUYRWHSE3',
        'ap_vend_mast.ApveBuyrWhse3' => 'APVEBUYRWHSE3',
        'Apvebuyrcode3' => 'APVEBUYRCODE3',
        'Vendor.Apvebuyrcode3' => 'APVEBUYRCODE3',
        'apvebuyrcode3' => 'APVEBUYRCODE3',
        'vendor.apvebuyrcode3' => 'APVEBUYRCODE3',
        'VendorTableMap::COL_APVEBUYRCODE3' => 'APVEBUYRCODE3',
        'COL_APVEBUYRCODE3' => 'APVEBUYRCODE3',
        'ApveBuyrCode3' => 'APVEBUYRCODE3',
        'ap_vend_mast.ApveBuyrCode3' => 'APVEBUYRCODE3',
        'Apvebuyrwhse4' => 'APVEBUYRWHSE4',
        'Vendor.Apvebuyrwhse4' => 'APVEBUYRWHSE4',
        'apvebuyrwhse4' => 'APVEBUYRWHSE4',
        'vendor.apvebuyrwhse4' => 'APVEBUYRWHSE4',
        'VendorTableMap::COL_APVEBUYRWHSE4' => 'APVEBUYRWHSE4',
        'COL_APVEBUYRWHSE4' => 'APVEBUYRWHSE4',
        'ApveBuyrWhse4' => 'APVEBUYRWHSE4',
        'ap_vend_mast.ApveBuyrWhse4' => 'APVEBUYRWHSE4',
        'Apvebuyrcode4' => 'APVEBUYRCODE4',
        'Vendor.Apvebuyrcode4' => 'APVEBUYRCODE4',
        'apvebuyrcode4' => 'APVEBUYRCODE4',
        'vendor.apvebuyrcode4' => 'APVEBUYRCODE4',
        'VendorTableMap::COL_APVEBUYRCODE4' => 'APVEBUYRCODE4',
        'COL_APVEBUYRCODE4' => 'APVEBUYRCODE4',
        'ApveBuyrCode4' => 'APVEBUYRCODE4',
        'ap_vend_mast.ApveBuyrCode4' => 'APVEBUYRCODE4',
        'Apvebuyrwhse5' => 'APVEBUYRWHSE5',
        'Vendor.Apvebuyrwhse5' => 'APVEBUYRWHSE5',
        'apvebuyrwhse5' => 'APVEBUYRWHSE5',
        'vendor.apvebuyrwhse5' => 'APVEBUYRWHSE5',
        'VendorTableMap::COL_APVEBUYRWHSE5' => 'APVEBUYRWHSE5',
        'COL_APVEBUYRWHSE5' => 'APVEBUYRWHSE5',
        'ApveBuyrWhse5' => 'APVEBUYRWHSE5',
        'ap_vend_mast.ApveBuyrWhse5' => 'APVEBUYRWHSE5',
        'Apvebuyrcode5' => 'APVEBUYRCODE5',
        'Vendor.Apvebuyrcode5' => 'APVEBUYRCODE5',
        'apvebuyrcode5' => 'APVEBUYRCODE5',
        'vendor.apvebuyrcode5' => 'APVEBUYRCODE5',
        'VendorTableMap::COL_APVEBUYRCODE5' => 'APVEBUYRCODE5',
        'COL_APVEBUYRCODE5' => 'APVEBUYRCODE5',
        'ApveBuyrCode5' => 'APVEBUYRCODE5',
        'ap_vend_mast.ApveBuyrCode5' => 'APVEBUYRCODE5',
        'Apvebuyrwhse6' => 'APVEBUYRWHSE6',
        'Vendor.Apvebuyrwhse6' => 'APVEBUYRWHSE6',
        'apvebuyrwhse6' => 'APVEBUYRWHSE6',
        'vendor.apvebuyrwhse6' => 'APVEBUYRWHSE6',
        'VendorTableMap::COL_APVEBUYRWHSE6' => 'APVEBUYRWHSE6',
        'COL_APVEBUYRWHSE6' => 'APVEBUYRWHSE6',
        'ApveBuyrWhse6' => 'APVEBUYRWHSE6',
        'ap_vend_mast.ApveBuyrWhse6' => 'APVEBUYRWHSE6',
        'Apvebuyrcode6' => 'APVEBUYRCODE6',
        'Vendor.Apvebuyrcode6' => 'APVEBUYRCODE6',
        'apvebuyrcode6' => 'APVEBUYRCODE6',
        'vendor.apvebuyrcode6' => 'APVEBUYRCODE6',
        'VendorTableMap::COL_APVEBUYRCODE6' => 'APVEBUYRCODE6',
        'COL_APVEBUYRCODE6' => 'APVEBUYRCODE6',
        'ApveBuyrCode6' => 'APVEBUYRCODE6',
        'ap_vend_mast.ApveBuyrCode6' => 'APVEBUYRCODE6',
        'Apvebuyrwhse7' => 'APVEBUYRWHSE7',
        'Vendor.Apvebuyrwhse7' => 'APVEBUYRWHSE7',
        'apvebuyrwhse7' => 'APVEBUYRWHSE7',
        'vendor.apvebuyrwhse7' => 'APVEBUYRWHSE7',
        'VendorTableMap::COL_APVEBUYRWHSE7' => 'APVEBUYRWHSE7',
        'COL_APVEBUYRWHSE7' => 'APVEBUYRWHSE7',
        'ApveBuyrWhse7' => 'APVEBUYRWHSE7',
        'ap_vend_mast.ApveBuyrWhse7' => 'APVEBUYRWHSE7',
        'Apvebuyrcode7' => 'APVEBUYRCODE7',
        'Vendor.Apvebuyrcode7' => 'APVEBUYRCODE7',
        'apvebuyrcode7' => 'APVEBUYRCODE7',
        'vendor.apvebuyrcode7' => 'APVEBUYRCODE7',
        'VendorTableMap::COL_APVEBUYRCODE7' => 'APVEBUYRCODE7',
        'COL_APVEBUYRCODE7' => 'APVEBUYRCODE7',
        'ApveBuyrCode7' => 'APVEBUYRCODE7',
        'ap_vend_mast.ApveBuyrCode7' => 'APVEBUYRCODE7',
        'Apvebuyrwhse8' => 'APVEBUYRWHSE8',
        'Vendor.Apvebuyrwhse8' => 'APVEBUYRWHSE8',
        'apvebuyrwhse8' => 'APVEBUYRWHSE8',
        'vendor.apvebuyrwhse8' => 'APVEBUYRWHSE8',
        'VendorTableMap::COL_APVEBUYRWHSE8' => 'APVEBUYRWHSE8',
        'COL_APVEBUYRWHSE8' => 'APVEBUYRWHSE8',
        'ApveBuyrWhse8' => 'APVEBUYRWHSE8',
        'ap_vend_mast.ApveBuyrWhse8' => 'APVEBUYRWHSE8',
        'Apvebuyrcode8' => 'APVEBUYRCODE8',
        'Vendor.Apvebuyrcode8' => 'APVEBUYRCODE8',
        'apvebuyrcode8' => 'APVEBUYRCODE8',
        'vendor.apvebuyrcode8' => 'APVEBUYRCODE8',
        'VendorTableMap::COL_APVEBUYRCODE8' => 'APVEBUYRCODE8',
        'COL_APVEBUYRCODE8' => 'APVEBUYRCODE8',
        'ApveBuyrCode8' => 'APVEBUYRCODE8',
        'ap_vend_mast.ApveBuyrCode8' => 'APVEBUYRCODE8',
        'Apvebuyrwhse9' => 'APVEBUYRWHSE9',
        'Vendor.Apvebuyrwhse9' => 'APVEBUYRWHSE9',
        'apvebuyrwhse9' => 'APVEBUYRWHSE9',
        'vendor.apvebuyrwhse9' => 'APVEBUYRWHSE9',
        'VendorTableMap::COL_APVEBUYRWHSE9' => 'APVEBUYRWHSE9',
        'COL_APVEBUYRWHSE9' => 'APVEBUYRWHSE9',
        'ApveBuyrWhse9' => 'APVEBUYRWHSE9',
        'ap_vend_mast.ApveBuyrWhse9' => 'APVEBUYRWHSE9',
        'Apvebuyrcode9' => 'APVEBUYRCODE9',
        'Vendor.Apvebuyrcode9' => 'APVEBUYRCODE9',
        'apvebuyrcode9' => 'APVEBUYRCODE9',
        'vendor.apvebuyrcode9' => 'APVEBUYRCODE9',
        'VendorTableMap::COL_APVEBUYRCODE9' => 'APVEBUYRCODE9',
        'COL_APVEBUYRCODE9' => 'APVEBUYRCODE9',
        'ApveBuyrCode9' => 'APVEBUYRCODE9',
        'ap_vend_mast.ApveBuyrCode9' => 'APVEBUYRCODE9',
        'Apvebuyrwhse10' => 'APVEBUYRWHSE10',
        'Vendor.Apvebuyrwhse10' => 'APVEBUYRWHSE10',
        'apvebuyrwhse10' => 'APVEBUYRWHSE10',
        'vendor.apvebuyrwhse10' => 'APVEBUYRWHSE10',
        'VendorTableMap::COL_APVEBUYRWHSE10' => 'APVEBUYRWHSE10',
        'COL_APVEBUYRWHSE10' => 'APVEBUYRWHSE10',
        'ApveBuyrWhse10' => 'APVEBUYRWHSE10',
        'ap_vend_mast.ApveBuyrWhse10' => 'APVEBUYRWHSE10',
        'Apvebuyrcode10' => 'APVEBUYRCODE10',
        'Vendor.Apvebuyrcode10' => 'APVEBUYRCODE10',
        'apvebuyrcode10' => 'APVEBUYRCODE10',
        'vendor.apvebuyrcode10' => 'APVEBUYRCODE10',
        'VendorTableMap::COL_APVEBUYRCODE10' => 'APVEBUYRCODE10',
        'COL_APVEBUYRCODE10' => 'APVEBUYRCODE10',
        'ApveBuyrCode10' => 'APVEBUYRCODE10',
        'ap_vend_mast.ApveBuyrCode10' => 'APVEBUYRCODE10',
        'Apvelandcost' => 'APVELANDCOST',
        'Vendor.Apvelandcost' => 'APVELANDCOST',
        'apvelandcost' => 'APVELANDCOST',
        'vendor.apvelandcost' => 'APVELANDCOST',
        'VendorTableMap::COL_APVELANDCOST' => 'APVELANDCOST',
        'COL_APVELANDCOST' => 'APVELANDCOST',
        'ApveLandCost' => 'APVELANDCOST',
        'ap_vend_mast.ApveLandCost' => 'APVELANDCOST',
        'Apvereleasenbr' => 'APVERELEASENBR',
        'Vendor.Apvereleasenbr' => 'APVERELEASENBR',
        'apvereleasenbr' => 'APVERELEASENBR',
        'vendor.apvereleasenbr' => 'APVERELEASENBR',
        'VendorTableMap::COL_APVERELEASENBR' => 'APVERELEASENBR',
        'COL_APVERELEASENBR' => 'APVERELEASENBR',
        'ApveReleaseNbr' => 'APVERELEASENBR',
        'ap_vend_mast.ApveReleaseNbr' => 'APVERELEASENBR',
        'Apvescanstartpos' => 'APVESCANSTARTPOS',
        'Vendor.Apvescanstartpos' => 'APVESCANSTARTPOS',
        'apvescanstartpos' => 'APVESCANSTARTPOS',
        'vendor.apvescanstartpos' => 'APVESCANSTARTPOS',
        'VendorTableMap::COL_APVESCANSTARTPOS' => 'APVESCANSTARTPOS',
        'COL_APVESCANSTARTPOS' => 'APVESCANSTARTPOS',
        'ApveScanStartPos' => 'APVESCANSTARTPOS',
        'ap_vend_mast.ApveScanStartPos' => 'APVESCANSTARTPOS',
        'Apvescanlength' => 'APVESCANLENGTH',
        'Vendor.Apvescanlength' => 'APVESCANLENGTH',
        'apvescanlength' => 'APVESCANLENGTH',
        'vendor.apvescanlength' => 'APVESCANLENGTH',
        'VendorTableMap::COL_APVESCANLENGTH' => 'APVESCANLENGTH',
        'COL_APVESCANLENGTH' => 'APVESCANLENGTH',
        'ApveScanLength' => 'APVESCANLENGTH',
        'ap_vend_mast.ApveScanLength' => 'APVESCANLENGTH',
        'Apvepurytd' => 'APVEPURYTD',
        'Vendor.Apvepurytd' => 'APVEPURYTD',
        'apvepurytd' => 'APVEPURYTD',
        'vendor.apvepurytd' => 'APVEPURYTD',
        'VendorTableMap::COL_APVEPURYTD' => 'APVEPURYTD',
        'COL_APVEPURYTD' => 'APVEPURYTD',
        'ApvePurYtd' => 'APVEPURYTD',
        'ap_vend_mast.ApvePurYtd' => 'APVEPURYTD',
        'Apvepoytd' => 'APVEPOYTD',
        'Vendor.Apvepoytd' => 'APVEPOYTD',
        'apvepoytd' => 'APVEPOYTD',
        'vendor.apvepoytd' => 'APVEPOYTD',
        'VendorTableMap::COL_APVEPOYTD' => 'APVEPOYTD',
        'COL_APVEPOYTD' => 'APVEPOYTD',
        'ApvePoYtd' => 'APVEPOYTD',
        'ap_vend_mast.ApvePoYtd' => 'APVEPOYTD',
        'Apveinvcytd' => 'APVEINVCYTD',
        'Vendor.Apveinvcytd' => 'APVEINVCYTD',
        'apveinvcytd' => 'APVEINVCYTD',
        'vendor.apveinvcytd' => 'APVEINVCYTD',
        'VendorTableMap::COL_APVEINVCYTD' => 'APVEINVCYTD',
        'COL_APVEINVCYTD' => 'APVEINVCYTD',
        'ApveInvcYtd' => 'APVEINVCYTD',
        'ap_vend_mast.ApveInvcYtd' => 'APVEINVCYTD',
        'Apveicntytd' => 'APVEICNTYTD',
        'Vendor.Apveicntytd' => 'APVEICNTYTD',
        'apveicntytd' => 'APVEICNTYTD',
        'vendor.apveicntytd' => 'APVEICNTYTD',
        'VendorTableMap::COL_APVEICNTYTD' => 'APVEICNTYTD',
        'COL_APVEICNTYTD' => 'APVEICNTYTD',
        'ApveIcntYtd' => 'APVEICNTYTD',
        'ap_vend_mast.ApveIcntYtd' => 'APVEICNTYTD',
        'Apveuseach' => 'APVEUSEACH',
        'Vendor.Apveuseach' => 'APVEUSEACH',
        'apveuseach' => 'APVEUSEACH',
        'vendor.apveuseach' => 'APVEUSEACH',
        'VendorTableMap::COL_APVEUSEACH' => 'APVEUSEACH',
        'COL_APVEUSEACH' => 'APVEUSEACH',
        'ApveUseAch' => 'APVEUSEACH',
        'ap_vend_mast.ApveUseAch' => 'APVEUSEACH',
        'Apvecat3' => 'APVECAT3',
        'Vendor.Apvecat3' => 'APVECAT3',
        'apvecat3' => 'APVECAT3',
        'vendor.apvecat3' => 'APVECAT3',
        'VendorTableMap::COL_APVECAT3' => 'APVECAT3',
        'COL_APVECAT3' => 'APVECAT3',
        'ApveCat3' => 'APVECAT3',
        'ap_vend_mast.ApveCat3' => 'APVECAT3',
        'Dateupdtd' => 'DATEUPDTD',
        'Vendor.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'vendor.dateupdtd' => 'DATEUPDTD',
        'VendorTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ap_vend_mast.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'Vendor.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'vendor.timeupdtd' => 'TIMEUPDTD',
        'VendorTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ap_vend_mast.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'Vendor.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'vendor.dummy' => 'DUMMY',
        'VendorTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ap_vend_mast.dummy' => 'DUMMY',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('ap_vend_mast');
        $this->setPhpName('Vendor');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Vendor');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('VendRecNbr', 'Vendrecnbr', 'INTEGER', true);
        $this->addColumn('ApveVendId', 'Apvevendid', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveName', 'Apvename', 'VARCHAR', true, 30, '');
        $this->addColumn('ApveAdr1', 'Apveadr1', 'VARCHAR', true, 30, '');
        $this->addColumn('ApveAdr2', 'Apveadr2', 'VARCHAR', true, 30, '');
        $this->addColumn('ApveAdr3', 'Apveadr3', 'VARCHAR', true, 30, '');
        $this->addColumn('ApveCtry', 'Apvectry', 'VARCHAR', true, 4, '');
        $this->addColumn('ApveCity', 'Apvecity', 'VARCHAR', true, 16, '');
        $this->addColumn('ApveStat', 'Apvestat', 'CHAR', true, 2, '');
        $this->addColumn('ApveZipCode', 'Apvezipcode', 'VARCHAR', true, 10, '');
        $this->addColumn('ApvePayName', 'Apvepayname', 'VARCHAR', true, 30, '');
        $this->addColumn('ApvePayAdr1', 'Apvepayadr1', 'VARCHAR', true, 30, '');
        $this->addColumn('ApvePayAdr2', 'Apvepayadr2', 'VARCHAR', true, 30, '');
        $this->addColumn('ApvePayAdr3', 'Apvepayadr3', 'VARCHAR', true, 30, '');
        $this->addColumn('ApvePayCtry', 'Apvepayctry', 'VARCHAR', true, 4, '');
        $this->addColumn('ApvePayCity', 'Apvepaycity', 'VARCHAR', true, 16, '');
        $this->addColumn('ApvePayStat', 'Apvepaystat', 'CHAR', true, 2, '');
        $this->addColumn('ApvePayZipCode', 'Apvepayzipcode', 'VARCHAR', true, 10, '');
        $this->addColumn('ApveStatus', 'Apvestatus', 'CHAR', true, null, 'A');
        $this->addColumn('ApveTakeExpiredDisc', 'Apvetakeexpireddisc', 'CHAR', true, null, 'N');
        $this->addColumn('ApvePrintHts', 'Apveprinthts', 'CHAR', true, null, 'N');
        $this->addColumn('ApveFabBin', 'Apvefabbin', 'VARCHAR', true, 8, '');
        $this->addColumn('ApveLmPrntBulk', 'Apvelmprntbulk', 'CHAR', true, null, 'N');
        $this->addColumn('ApveAllowDropShip', 'Apveallowdropship', 'CHAR', true, null, 'Y');
        $this->addForeignKey('AptbTypeCode', 'Aptbtypecode', 'VARCHAR', 'ap_type_code', 'AptbTypeCode', true, 4, '');
        $this->addForeignKey('AptmTermCode', 'Aptmtermcode', 'VARCHAR', 'ap_term_code', 'AptmTermCode', true, 4, '');
        $this->addForeignKey('ApveSviaCode', 'Apvesviacode', 'VARCHAR', 'ar_cust_svia', 'ArtbShipVia', true, 4, '');
        $this->addColumn('ApveOldFob', 'Apveoldfob', 'CHAR', true, null, '');
        $this->addColumn('ApveLeadDays', 'Apveleaddays', 'INTEGER', true, null, 0);
        $this->addColumn('ApveGlAcct', 'Apveglacct', 'VARCHAR', true, 16, '');
        $this->addColumn('Apve1099SsNbr', 'Apve1099ssnbr', 'VARCHAR', true, 12, '');
        $this->addColumn('ApveMinOrdrCode', 'Apveminordrcode', 'CHAR', true, null, '$');
        $this->addColumn('ApveMinOrdrValue', 'Apveminordrvalue', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePurMtd', 'Apvepurmtd', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePoMtd', 'Apvepomtd', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvcMtd', 'Apveinvcmtd', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcntMtd', 'Apveicntmtd', 'INTEGER', true, null, 0);
        $this->addColumn('ApveDateOpen', 'Apvedateopen', 'CHAR', true, 8, '');
        $this->addColumn('ApveLastPurDate', 'Apvelastpurdate', 'CHAR', true, 8, '');
        $this->addColumn('ApvePur24mo01', 'Apvepur24mo01', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo01', 'Apvepo24mo01', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo01', 'Apveinvc24mo01', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo01', 'Apveicnt24mo01', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo02', 'Apvepur24mo02', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo02', 'Apvepo24mo02', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo02', 'Apveinvc24mo02', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo02', 'Apveicnt24mo02', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo03', 'Apvepur24mo03', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo03', 'Apvepo24mo03', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo03', 'Apveinvc24mo03', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo03', 'Apveicnt24mo03', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo04', 'Apvepur24mo04', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo04', 'Apvepo24mo04', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo04', 'Apveinvc24mo04', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo04', 'Apveicnt24mo04', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo05', 'Apvepur24mo05', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo05', 'Apvepo24mo05', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo05', 'Apveinvc24mo05', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo05', 'Apveicnt24mo05', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo06', 'Apvepur24mo06', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo06', 'Apvepo24mo06', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo06', 'Apveinvc24mo06', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo06', 'Apveicnt24mo06', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo07', 'Apvepur24mo07', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo07', 'Apvepo24mo07', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo07', 'Apveinvc24mo07', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo07', 'Apveicnt24mo07', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo08', 'Apvepur24mo08', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo08', 'Apvepo24mo08', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo08', 'Apveinvc24mo08', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo08', 'Apveicnt24mo08', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo09', 'Apvepur24mo09', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo09', 'Apvepo24mo09', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo09', 'Apveinvc24mo09', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo09', 'Apveicnt24mo09', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo10', 'Apvepur24mo10', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo10', 'Apvepo24mo10', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo10', 'Apveinvc24mo10', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo10', 'Apveicnt24mo10', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo11', 'Apvepur24mo11', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo11', 'Apvepo24mo11', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo11', 'Apveinvc24mo11', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo11', 'Apveicnt24mo11', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo12', 'Apvepur24mo12', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo12', 'Apvepo24mo12', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo12', 'Apveinvc24mo12', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo12', 'Apveicnt24mo12', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo13', 'Apvepur24mo13', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo13', 'Apvepo24mo13', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo13', 'Apveinvc24mo13', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo13', 'Apveicnt24mo13', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo14', 'Apvepur24mo14', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo14', 'Apvepo24mo14', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo14', 'Apveinvc24mo14', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo14', 'Apveicnt24mo14', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo15', 'Apvepur24mo15', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo15', 'Apvepo24mo15', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo15', 'Apveinvc24mo15', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo15', 'Apveicnt24mo15', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo16', 'Apvepur24mo16', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo16', 'Apvepo24mo16', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo16', 'Apveinvc24mo16', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo16', 'Apveicnt24mo16', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo17', 'Apvepur24mo17', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo17', 'Apvepo24mo17', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo17', 'Apveinvc24mo17', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo17', 'Apveicnt24mo17', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo18', 'Apvepur24mo18', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo18', 'Apvepo24mo18', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo18', 'Apveinvc24mo18', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo18', 'Apveicnt24mo18', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo19', 'Apvepur24mo19', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo19', 'Apvepo24mo19', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo19', 'Apveinvc24mo19', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo19', 'Apveicnt24mo19', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo20', 'Apvepur24mo20', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo20', 'Apvepo24mo20', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo20', 'Apveinvc24mo20', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo20', 'Apveicnt24mo20', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo21', 'Apvepur24mo21', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo21', 'Apvepo24mo21', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo21', 'Apveinvc24mo21', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo21', 'Apveicnt24mo21', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo22', 'Apvepur24mo22', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo22', 'Apvepo24mo22', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo22', 'Apveinvc24mo22', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo22', 'Apveicnt24mo22', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo23', 'Apvepur24mo23', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo23', 'Apvepo24mo23', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo23', 'Apveinvc24mo23', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo23', 'Apveicnt24mo23', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePur24mo24', 'Apvepur24mo24', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePo24mo24', 'Apvepo24mo24', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvc24mo24', 'Apveinvc24mo24', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcnt24mo24', 'Apveicnt24mo24', 'INTEGER', true, null, 0);
        $this->addColumn('ApveCrncy', 'Apvecrncy', 'VARCHAR', true, 4, '');
        $this->addColumn('ApveFrtInAmt', 'Apvefrtinamt', 'DECIMAL', true, 20, 0.0000);
        $this->addColumn('ApveOurAcctNbr', 'Apveouracctnbr', 'VARCHAR', true, 10, '');
        $this->addColumn('ApveVendDisc', 'Apvevenddisc', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveFob', 'Apvefob', 'VARCHAR', true, 20, 'ORIGIN');
        $this->addColumn('ApveRoylPct', 'Apveroylpct', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePrtPoEOrU', 'Apveprtpoeoru', 'CHAR', true, null, '');
        $this->addColumn('ApveComRate', 'Apvecomrate', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveUseLandOnRcpt', 'Apveuselandonrcpt', 'CHAR', true, null, 'N');
        $this->addColumn('ApveBuyrWhse1', 'Apvebuyrwhse1', 'VARCHAR', true, 2, '');
        $this->addForeignKey('ApveBuyrCode1', 'Apvebuyrcode1', 'VARCHAR', 'ap_buyr_code', 'AptbBuyrCode', true, 6, '');
        $this->addColumn('ApveBuyrWhse2', 'Apvebuyrwhse2', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode2', 'Apvebuyrcode2', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse3', 'Apvebuyrwhse3', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode3', 'Apvebuyrcode3', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse4', 'Apvebuyrwhse4', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode4', 'Apvebuyrcode4', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse5', 'Apvebuyrwhse5', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode5', 'Apvebuyrcode5', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse6', 'Apvebuyrwhse6', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode6', 'Apvebuyrcode6', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse7', 'Apvebuyrwhse7', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode7', 'Apvebuyrcode7', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse8', 'Apvebuyrwhse8', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode8', 'Apvebuyrcode8', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse9', 'Apvebuyrwhse9', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode9', 'Apvebuyrcode9', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveBuyrWhse10', 'Apvebuyrwhse10', 'VARCHAR', true, 2, '');
        $this->addColumn('ApveBuyrCode10', 'Apvebuyrcode10', 'VARCHAR', true, 6, '');
        $this->addColumn('ApveLandCost', 'Apvelandcost', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveReleaseNbr', 'Apvereleasenbr', 'INTEGER', true, null, 0);
        $this->addColumn('ApveScanStartPos', 'Apvescanstartpos', 'INTEGER', true, null, 0);
        $this->addColumn('ApveScanLength', 'Apvescanlength', 'INTEGER', true, null, 0);
        $this->addColumn('ApvePurYtd', 'Apvepurytd', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApvePoYtd', 'Apvepoytd', 'INTEGER', true, null, 0);
        $this->addColumn('ApveInvcYtd', 'Apveinvcytd', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('ApveIcntYtd', 'Apveicntytd', 'INTEGER', true, null, 0);
        $this->addColumn('ApveUseAch', 'Apveuseach', 'CHAR', true, null, 'N');
        $this->addColumn('ApveCat3', 'Apvecat3', 'CHAR', true, null, 'N');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations(): void
    {
        $this->addRelation('ApTypeCode', '\\ApTypeCode', RelationMap::MANY_TO_ONE,  [
  0 =>
   [
    0 => ':AptbTypeCode',
    1 => ':AptbTypeCode',
  ],
], null, null, null, false);
        $this->addRelation('ApTermsCode', '\\ApTermsCode', RelationMap::MANY_TO_ONE,  [
  0 =>
   [
    0 => ':AptmTermCode',
    1 => ':AptmTermCode',
  ],
], null, null, null, false);
        $this->addRelation('Shipvia', '\\Shipvia', RelationMap::MANY_TO_ONE,  [
  0 =>
   [
    0 => ':ApveSviaCode',
    1 => ':ArtbShipVia',
  ],
], null, null, null, false);
        $this->addRelation('ApBuyer', '\\ApBuyer', RelationMap::MANY_TO_ONE,  [
  0 =>
   [
    0 => ':ApveBuyrCode1',
    1 => ':AptbBuyrCode',
  ],
], null, null, null, false);
        $this->addRelation('ApContact', '\\ApContact', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ApContacts', false);
        $this->addRelation('ApInvoiceDetail', '\\ApInvoiceDetail', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ApInvoiceDetails', false);
        $this->addRelation('ApInvoice', '\\ApInvoice', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ApInvoices', false);
        $this->addRelation('VendorShipfrom', '\\VendorShipfrom', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'VendorShipfroms', false);
        $this->addRelation('InvNonstockItem', '\\InvNonstockItem', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':NsitMnfrId',
    1 => ':ApveVendId',
  ],
], null, null, 'InvNonstockItems', false);
        $this->addRelation('InvTransferOrder', '\\InvTransferOrder', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'InvTransferOrders', false);
        $this->addRelation('ItemXrefKey', '\\ItemXrefKey', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':RkeyCVId',
    1 => ':ApveVendId',
  ],
], null, null, 'ItemXrefKeys', false);
        $this->addRelation('ItemXrefManufacturer', '\\ItemXrefManufacturer', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ItemXrefManufacturers', false);
        $this->addRelation('ItemXrefVendorNoteDetail', '\\ItemXrefVendorNoteDetail', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ItemXrefVendorNoteDetails', false);
        $this->addRelation('ItemXrefVendorNoteInternal', '\\ItemXrefVendorNoteInternal', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ItemXrefVendorNoteInternals', false);
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'PurchaseOrders', false);
        $this->addRelation('ItemXrefVendor', '\\ItemXrefVendor', RelationMap::ONE_TO_MANY,  [
  0 =>
   [
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ],
], null, null, 'ItemXrefVendors', false);
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
        if ($row[TableMap::TYPE_NUM === $indexType ? $offset : static::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM === $indexType ? $offset : static::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM === $indexType ? $offset : static::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM === $indexType ? $offset : static::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM === $indexType ? $offset : static::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM === $indexType ? $offset : static::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
            $indexType === TableMap::TYPE_NUM
                ? $offset
                : self::translateFieldName('Vendrecnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? VendorTableMap::CLASS_DEFAULT : VendorTableMap::OM_CLASS;
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
     * @return array (Vendor object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = VendorTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = VendorTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + VendorTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VendorTableMap::OM_CLASS;
            /** @var Vendor $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            VendorTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
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
            $key = VendorTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = VendorTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Vendor $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VendorTableMap::addInstanceToPool($obj, $key);
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
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(VendorTableMap::COL_VENDRECNBR);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(VendorTableMap::COL_APVENAME);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEADR1);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEADR2);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEADR3);
            $criteria->addSelectColumn(VendorTableMap::COL_APVECTRY);
            $criteria->addSelectColumn(VendorTableMap::COL_APVECITY);
            $criteria->addSelectColumn(VendorTableMap::COL_APVESTAT);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEZIPCODE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYNAME);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYADR1);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYADR2);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYADR3);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYCTRY);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYCITY);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYSTAT);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPAYZIPCODE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVESTATUS);
            $criteria->addSelectColumn(VendorTableMap::COL_APVETAKEEXPIREDDISC);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPRINTHTS);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEFABBIN);
            $criteria->addSelectColumn(VendorTableMap::COL_APVELMPRNTBULK);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEALLOWDROPSHIP);
            $criteria->addSelectColumn(VendorTableMap::COL_APTBTYPECODE);
            $criteria->addSelectColumn(VendorTableMap::COL_APTMTERMCODE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVESVIACODE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEOLDFOB);
            $criteria->addSelectColumn(VendorTableMap::COL_APVELEADDAYS);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEGLACCT);
            $criteria->addSelectColumn(VendorTableMap::COL_APVE1099SSNBR);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEMINORDRCODE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEMINORDRVALUE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPURMTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPOMTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVCMTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNTMTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEDATEOPEN);
            $criteria->addSelectColumn(VendorTableMap::COL_APVELASTPURDATE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO01);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO01);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO01);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO01);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO02);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO02);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO02);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO02);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO03);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO03);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO03);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO03);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO04);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO04);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO04);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO04);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO05);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO05);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO05);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO05);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO06);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO06);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO06);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO06);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO07);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO07);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO07);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO07);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO08);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO08);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO08);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO08);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO09);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO09);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO09);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO09);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO10);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO10);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO10);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO10);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO11);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO11);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO11);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO11);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO12);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO12);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO12);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO12);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO13);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO13);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO13);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO13);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO14);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO14);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO14);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO14);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO15);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO15);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO15);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO15);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO16);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO16);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO16);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO16);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO17);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO17);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO17);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO17);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO18);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO18);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO18);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO18);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO19);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO19);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO19);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO19);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO20);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO20);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO20);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO20);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO21);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO21);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO21);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO21);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO22);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO22);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO22);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO22);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO23);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO23);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO23);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO23);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPUR24MO24);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPO24MO24);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVC24MO24);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNT24MO24);
            $criteria->addSelectColumn(VendorTableMap::COL_APVECRNCY);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEFRTINAMT);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEOURACCTNBR);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEVENDDISC);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEFOB);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEROYLPCT);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPRTPOEORU);
            $criteria->addSelectColumn(VendorTableMap::COL_APVECOMRATE);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEUSELANDONRCPT);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE1);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE1);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE2);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE2);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE3);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE3);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE4);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE4);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE5);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE5);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE6);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE6);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE7);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE7);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE8);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE8);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE9);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE9);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRWHSE10);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEBUYRCODE10);
            $criteria->addSelectColumn(VendorTableMap::COL_APVELANDCOST);
            $criteria->addSelectColumn(VendorTableMap::COL_APVERELEASENBR);
            $criteria->addSelectColumn(VendorTableMap::COL_APVESCANSTARTPOS);
            $criteria->addSelectColumn(VendorTableMap::COL_APVESCANLENGTH);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPURYTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEPOYTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEINVCYTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEICNTYTD);
            $criteria->addSelectColumn(VendorTableMap::COL_APVEUSEACH);
            $criteria->addSelectColumn(VendorTableMap::COL_APVECAT3);
            $criteria->addSelectColumn(VendorTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(VendorTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(VendorTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.VendRecNbr');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.ApveName');
            $criteria->addSelectColumn($alias . '.ApveAdr1');
            $criteria->addSelectColumn($alias . '.ApveAdr2');
            $criteria->addSelectColumn($alias . '.ApveAdr3');
            $criteria->addSelectColumn($alias . '.ApveCtry');
            $criteria->addSelectColumn($alias . '.ApveCity');
            $criteria->addSelectColumn($alias . '.ApveStat');
            $criteria->addSelectColumn($alias . '.ApveZipCode');
            $criteria->addSelectColumn($alias . '.ApvePayName');
            $criteria->addSelectColumn($alias . '.ApvePayAdr1');
            $criteria->addSelectColumn($alias . '.ApvePayAdr2');
            $criteria->addSelectColumn($alias . '.ApvePayAdr3');
            $criteria->addSelectColumn($alias . '.ApvePayCtry');
            $criteria->addSelectColumn($alias . '.ApvePayCity');
            $criteria->addSelectColumn($alias . '.ApvePayStat');
            $criteria->addSelectColumn($alias . '.ApvePayZipCode');
            $criteria->addSelectColumn($alias . '.ApveStatus');
            $criteria->addSelectColumn($alias . '.ApveTakeExpiredDisc');
            $criteria->addSelectColumn($alias . '.ApvePrintHts');
            $criteria->addSelectColumn($alias . '.ApveFabBin');
            $criteria->addSelectColumn($alias . '.ApveLmPrntBulk');
            $criteria->addSelectColumn($alias . '.ApveAllowDropShip');
            $criteria->addSelectColumn($alias . '.AptbTypeCode');
            $criteria->addSelectColumn($alias . '.AptmTermCode');
            $criteria->addSelectColumn($alias . '.ApveSviaCode');
            $criteria->addSelectColumn($alias . '.ApveOldFob');
            $criteria->addSelectColumn($alias . '.ApveLeadDays');
            $criteria->addSelectColumn($alias . '.ApveGlAcct');
            $criteria->addSelectColumn($alias . '.Apve1099SsNbr');
            $criteria->addSelectColumn($alias . '.ApveMinOrdrCode');
            $criteria->addSelectColumn($alias . '.ApveMinOrdrValue');
            $criteria->addSelectColumn($alias . '.ApvePurMtd');
            $criteria->addSelectColumn($alias . '.ApvePoMtd');
            $criteria->addSelectColumn($alias . '.ApveInvcMtd');
            $criteria->addSelectColumn($alias . '.ApveIcntMtd');
            $criteria->addSelectColumn($alias . '.ApveDateOpen');
            $criteria->addSelectColumn($alias . '.ApveLastPurDate');
            $criteria->addSelectColumn($alias . '.ApvePur24mo01');
            $criteria->addSelectColumn($alias . '.ApvePo24mo01');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo01');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo01');
            $criteria->addSelectColumn($alias . '.ApvePur24mo02');
            $criteria->addSelectColumn($alias . '.ApvePo24mo02');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo02');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo02');
            $criteria->addSelectColumn($alias . '.ApvePur24mo03');
            $criteria->addSelectColumn($alias . '.ApvePo24mo03');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo03');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo03');
            $criteria->addSelectColumn($alias . '.ApvePur24mo04');
            $criteria->addSelectColumn($alias . '.ApvePo24mo04');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo04');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo04');
            $criteria->addSelectColumn($alias . '.ApvePur24mo05');
            $criteria->addSelectColumn($alias . '.ApvePo24mo05');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo05');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo05');
            $criteria->addSelectColumn($alias . '.ApvePur24mo06');
            $criteria->addSelectColumn($alias . '.ApvePo24mo06');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo06');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo06');
            $criteria->addSelectColumn($alias . '.ApvePur24mo07');
            $criteria->addSelectColumn($alias . '.ApvePo24mo07');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo07');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo07');
            $criteria->addSelectColumn($alias . '.ApvePur24mo08');
            $criteria->addSelectColumn($alias . '.ApvePo24mo08');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo08');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo08');
            $criteria->addSelectColumn($alias . '.ApvePur24mo09');
            $criteria->addSelectColumn($alias . '.ApvePo24mo09');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo09');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo09');
            $criteria->addSelectColumn($alias . '.ApvePur24mo10');
            $criteria->addSelectColumn($alias . '.ApvePo24mo10');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo10');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo10');
            $criteria->addSelectColumn($alias . '.ApvePur24mo11');
            $criteria->addSelectColumn($alias . '.ApvePo24mo11');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo11');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo11');
            $criteria->addSelectColumn($alias . '.ApvePur24mo12');
            $criteria->addSelectColumn($alias . '.ApvePo24mo12');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo12');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo12');
            $criteria->addSelectColumn($alias . '.ApvePur24mo13');
            $criteria->addSelectColumn($alias . '.ApvePo24mo13');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo13');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo13');
            $criteria->addSelectColumn($alias . '.ApvePur24mo14');
            $criteria->addSelectColumn($alias . '.ApvePo24mo14');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo14');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo14');
            $criteria->addSelectColumn($alias . '.ApvePur24mo15');
            $criteria->addSelectColumn($alias . '.ApvePo24mo15');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo15');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo15');
            $criteria->addSelectColumn($alias . '.ApvePur24mo16');
            $criteria->addSelectColumn($alias . '.ApvePo24mo16');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo16');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo16');
            $criteria->addSelectColumn($alias . '.ApvePur24mo17');
            $criteria->addSelectColumn($alias . '.ApvePo24mo17');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo17');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo17');
            $criteria->addSelectColumn($alias . '.ApvePur24mo18');
            $criteria->addSelectColumn($alias . '.ApvePo24mo18');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo18');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo18');
            $criteria->addSelectColumn($alias . '.ApvePur24mo19');
            $criteria->addSelectColumn($alias . '.ApvePo24mo19');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo19');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo19');
            $criteria->addSelectColumn($alias . '.ApvePur24mo20');
            $criteria->addSelectColumn($alias . '.ApvePo24mo20');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo20');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo20');
            $criteria->addSelectColumn($alias . '.ApvePur24mo21');
            $criteria->addSelectColumn($alias . '.ApvePo24mo21');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo21');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo21');
            $criteria->addSelectColumn($alias . '.ApvePur24mo22');
            $criteria->addSelectColumn($alias . '.ApvePo24mo22');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo22');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo22');
            $criteria->addSelectColumn($alias . '.ApvePur24mo23');
            $criteria->addSelectColumn($alias . '.ApvePo24mo23');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo23');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo23');
            $criteria->addSelectColumn($alias . '.ApvePur24mo24');
            $criteria->addSelectColumn($alias . '.ApvePo24mo24');
            $criteria->addSelectColumn($alias . '.ApveInvc24mo24');
            $criteria->addSelectColumn($alias . '.ApveIcnt24mo24');
            $criteria->addSelectColumn($alias . '.ApveCrncy');
            $criteria->addSelectColumn($alias . '.ApveFrtInAmt');
            $criteria->addSelectColumn($alias . '.ApveOurAcctNbr');
            $criteria->addSelectColumn($alias . '.ApveVendDisc');
            $criteria->addSelectColumn($alias . '.ApveFob');
            $criteria->addSelectColumn($alias . '.ApveRoylPct');
            $criteria->addSelectColumn($alias . '.ApvePrtPoEOrU');
            $criteria->addSelectColumn($alias . '.ApveComRate');
            $criteria->addSelectColumn($alias . '.ApveUseLandOnRcpt');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse1');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode1');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse2');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode2');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse3');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode3');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse4');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode4');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse5');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode5');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse6');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode6');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse7');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode7');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse8');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode8');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse9');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode9');
            $criteria->addSelectColumn($alias . '.ApveBuyrWhse10');
            $criteria->addSelectColumn($alias . '.ApveBuyrCode10');
            $criteria->addSelectColumn($alias . '.ApveLandCost');
            $criteria->addSelectColumn($alias . '.ApveReleaseNbr');
            $criteria->addSelectColumn($alias . '.ApveScanStartPos');
            $criteria->addSelectColumn($alias . '.ApveScanLength');
            $criteria->addSelectColumn($alias . '.ApvePurYtd');
            $criteria->addSelectColumn($alias . '.ApvePoYtd');
            $criteria->addSelectColumn($alias . '.ApveInvcYtd');
            $criteria->addSelectColumn($alias . '.ApveIcntYtd');
            $criteria->addSelectColumn($alias . '.ApveUseAch');
            $criteria->addSelectColumn($alias . '.ApveCat3');
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
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(VendorTableMap::COL_VENDRECNBR);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVENAME);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEADR1);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEADR2);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEADR3);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVECTRY);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVECITY);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVESTAT);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEZIPCODE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYNAME);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYADR1);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYADR2);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYADR3);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYCTRY);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYCITY);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYSTAT);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPAYZIPCODE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVESTATUS);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVETAKEEXPIREDDISC);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPRINTHTS);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEFABBIN);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVELMPRNTBULK);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEALLOWDROPSHIP);
            $criteria->removeSelectColumn(VendorTableMap::COL_APTBTYPECODE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APTMTERMCODE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVESVIACODE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEOLDFOB);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVELEADDAYS);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEGLACCT);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVE1099SSNBR);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEMINORDRCODE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEMINORDRVALUE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPURMTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPOMTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVCMTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNTMTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEDATEOPEN);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVELASTPURDATE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO01);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO01);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO01);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO01);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO02);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO02);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO02);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO02);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO03);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO03);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO03);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO03);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO04);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO04);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO04);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO04);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO05);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO05);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO05);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO05);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO06);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO06);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO06);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO06);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO07);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO07);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO07);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO07);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO08);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO08);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO08);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO08);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO09);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO09);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO09);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO09);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO10);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO10);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO10);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO10);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO11);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO11);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO11);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO11);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO12);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO12);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO12);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO12);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO13);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO13);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO13);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO13);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO14);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO14);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO14);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO14);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO15);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO15);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO15);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO15);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO16);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO16);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO16);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO16);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO17);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO17);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO17);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO17);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO18);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO18);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO18);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO18);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO19);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO19);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO19);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO19);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO20);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO20);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO20);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO20);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO21);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO21);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO21);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO21);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO22);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO22);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO22);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO22);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO23);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO23);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO23);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO23);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPUR24MO24);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPO24MO24);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVC24MO24);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNT24MO24);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVECRNCY);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEFRTINAMT);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEOURACCTNBR);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEVENDDISC);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEFOB);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEROYLPCT);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPRTPOEORU);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVECOMRATE);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEUSELANDONRCPT);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE1);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE1);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE2);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE2);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE3);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE3);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE4);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE4);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE5);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE5);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE6);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE6);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE7);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE7);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE8);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE8);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE9);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE9);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRWHSE10);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEBUYRCODE10);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVELANDCOST);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVERELEASENBR);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVESCANSTARTPOS);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVESCANLENGTH);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPURYTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEPOYTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEINVCYTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEICNTYTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVEUSEACH);
            $criteria->removeSelectColumn(VendorTableMap::COL_APVECAT3);
            $criteria->removeSelectColumn(VendorTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(VendorTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.VendRecNbr');
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.ApveName');
            $criteria->removeSelectColumn($alias . '.ApveAdr1');
            $criteria->removeSelectColumn($alias . '.ApveAdr2');
            $criteria->removeSelectColumn($alias . '.ApveAdr3');
            $criteria->removeSelectColumn($alias . '.ApveCtry');
            $criteria->removeSelectColumn($alias . '.ApveCity');
            $criteria->removeSelectColumn($alias . '.ApveStat');
            $criteria->removeSelectColumn($alias . '.ApveZipCode');
            $criteria->removeSelectColumn($alias . '.ApvePayName');
            $criteria->removeSelectColumn($alias . '.ApvePayAdr1');
            $criteria->removeSelectColumn($alias . '.ApvePayAdr2');
            $criteria->removeSelectColumn($alias . '.ApvePayAdr3');
            $criteria->removeSelectColumn($alias . '.ApvePayCtry');
            $criteria->removeSelectColumn($alias . '.ApvePayCity');
            $criteria->removeSelectColumn($alias . '.ApvePayStat');
            $criteria->removeSelectColumn($alias . '.ApvePayZipCode');
            $criteria->removeSelectColumn($alias . '.ApveStatus');
            $criteria->removeSelectColumn($alias . '.ApveTakeExpiredDisc');
            $criteria->removeSelectColumn($alias . '.ApvePrintHts');
            $criteria->removeSelectColumn($alias . '.ApveFabBin');
            $criteria->removeSelectColumn($alias . '.ApveLmPrntBulk');
            $criteria->removeSelectColumn($alias . '.ApveAllowDropShip');
            $criteria->removeSelectColumn($alias . '.AptbTypeCode');
            $criteria->removeSelectColumn($alias . '.AptmTermCode');
            $criteria->removeSelectColumn($alias . '.ApveSviaCode');
            $criteria->removeSelectColumn($alias . '.ApveOldFob');
            $criteria->removeSelectColumn($alias . '.ApveLeadDays');
            $criteria->removeSelectColumn($alias . '.ApveGlAcct');
            $criteria->removeSelectColumn($alias . '.Apve1099SsNbr');
            $criteria->removeSelectColumn($alias . '.ApveMinOrdrCode');
            $criteria->removeSelectColumn($alias . '.ApveMinOrdrValue');
            $criteria->removeSelectColumn($alias . '.ApvePurMtd');
            $criteria->removeSelectColumn($alias . '.ApvePoMtd');
            $criteria->removeSelectColumn($alias . '.ApveInvcMtd');
            $criteria->removeSelectColumn($alias . '.ApveIcntMtd');
            $criteria->removeSelectColumn($alias . '.ApveDateOpen');
            $criteria->removeSelectColumn($alias . '.ApveLastPurDate');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo01');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo01');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo01');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo01');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo02');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo02');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo02');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo02');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo03');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo03');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo03');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo03');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo04');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo04');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo04');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo04');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo05');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo05');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo05');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo05');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo06');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo06');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo06');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo06');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo07');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo07');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo07');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo07');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo08');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo08');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo08');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo08');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo09');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo09');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo09');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo09');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo10');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo10');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo10');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo10');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo11');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo11');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo11');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo11');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo12');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo12');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo12');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo12');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo13');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo13');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo13');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo13');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo14');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo14');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo14');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo14');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo15');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo15');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo15');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo15');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo16');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo16');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo16');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo16');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo17');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo17');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo17');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo17');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo18');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo18');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo18');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo18');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo19');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo19');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo19');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo19');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo20');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo20');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo20');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo20');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo21');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo21');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo21');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo21');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo22');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo22');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo22');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo22');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo23');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo23');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo23');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo23');
            $criteria->removeSelectColumn($alias . '.ApvePur24mo24');
            $criteria->removeSelectColumn($alias . '.ApvePo24mo24');
            $criteria->removeSelectColumn($alias . '.ApveInvc24mo24');
            $criteria->removeSelectColumn($alias . '.ApveIcnt24mo24');
            $criteria->removeSelectColumn($alias . '.ApveCrncy');
            $criteria->removeSelectColumn($alias . '.ApveFrtInAmt');
            $criteria->removeSelectColumn($alias . '.ApveOurAcctNbr');
            $criteria->removeSelectColumn($alias . '.ApveVendDisc');
            $criteria->removeSelectColumn($alias . '.ApveFob');
            $criteria->removeSelectColumn($alias . '.ApveRoylPct');
            $criteria->removeSelectColumn($alias . '.ApvePrtPoEOrU');
            $criteria->removeSelectColumn($alias . '.ApveComRate');
            $criteria->removeSelectColumn($alias . '.ApveUseLandOnRcpt');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse1');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode1');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse2');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode2');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse3');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode3');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse4');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode4');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse5');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode5');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse6');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode6');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse7');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode7');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse8');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode8');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse9');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode9');
            $criteria->removeSelectColumn($alias . '.ApveBuyrWhse10');
            $criteria->removeSelectColumn($alias . '.ApveBuyrCode10');
            $criteria->removeSelectColumn($alias . '.ApveLandCost');
            $criteria->removeSelectColumn($alias . '.ApveReleaseNbr');
            $criteria->removeSelectColumn($alias . '.ApveScanStartPos');
            $criteria->removeSelectColumn($alias . '.ApveScanLength');
            $criteria->removeSelectColumn($alias . '.ApvePurYtd');
            $criteria->removeSelectColumn($alias . '.ApvePoYtd');
            $criteria->removeSelectColumn($alias . '.ApveInvcYtd');
            $criteria->removeSelectColumn($alias . '.ApveIcntYtd');
            $criteria->removeSelectColumn($alias . '.ApveUseAch');
            $criteria->removeSelectColumn($alias . '.ApveCat3');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.TimeUpdtd');
            $criteria->removeSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(VendorTableMap::DATABASE_NAME)->getTable(VendorTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Vendor or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Vendor object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Vendor) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VendorTableMap::DATABASE_NAME);
            $criteria->add(VendorTableMap::COL_VENDRECNBR, (array) $values, Criteria::IN);
        }

        $query = VendorQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            VendorTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                VendorTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_vend_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return VendorQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Vendor or Criteria object.
     *
     * @param mixed $criteria Criteria or Vendor object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (!$con instanceof \Propel\Runtime\Connection\ConnectionInterface) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Vendor object
        }

        if ($criteria->containsKey(VendorTableMap::COL_VENDRECNBR) && $criteria->keyContainsValue(VendorTableMap::COL_VENDRECNBR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VendorTableMap::COL_VENDRECNBR.')');
        }


        // Set the correct dbName
        $query = VendorQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(fn() => $query->doInsert($con));
    }

}
