<?php

namespace Map;

use \PurchaseOrder;
use \PurchaseOrderQuery;
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
 * This class defines the structure of the 'po_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PurchaseOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PurchaseOrderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'po_head';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\PurchaseOrder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'PurchaseOrder';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 56;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 56;

    /**
     * the column name for the PohdNbr field
     */
    const COL_POHDNBR = 'po_head.PohdNbr';

    /**
     * the column name for the PohdStat field
     */
    const COL_POHDSTAT = 'po_head.PohdStat';

    /**
     * the column name for the PohdRef field
     */
    const COL_POHDREF = 'po_head.PohdRef';

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'po_head.ApveVendId';

    /**
     * the column name for the ApfmShipId field
     */
    const COL_APFMSHIPID = 'po_head.ApfmShipId';

    /**
     * the column name for the PohdToName field
     */
    const COL_POHDTONAME = 'po_head.PohdToName';

    /**
     * the column name for the PohdToAdr1 field
     */
    const COL_POHDTOADR1 = 'po_head.PohdToAdr1';

    /**
     * the column name for the PohdToAdr2 field
     */
    const COL_POHDTOADR2 = 'po_head.PohdToAdr2';

    /**
     * the column name for the PohdToAdr3 field
     */
    const COL_POHDTOADR3 = 'po_head.PohdToAdr3';

    /**
     * the column name for the PohdToCtry field
     */
    const COL_POHDTOCTRY = 'po_head.PohdToCtry';

    /**
     * the column name for the PohdToCity field
     */
    const COL_POHDTOCITY = 'po_head.PohdToCity';

    /**
     * the column name for the PohdToStat field
     */
    const COL_POHDTOSTAT = 'po_head.PohdToStat';

    /**
     * the column name for the PohdToZipCode field
     */
    const COL_POHDTOZIPCODE = 'po_head.PohdToZipCode';

    /**
     * the column name for the PohdPtName field
     */
    const COL_POHDPTNAME = 'po_head.PohdPtName';

    /**
     * the column name for the PohdPtAdr1 field
     */
    const COL_POHDPTADR1 = 'po_head.PohdPtAdr1';

    /**
     * the column name for the PohdPtAdr2 field
     */
    const COL_POHDPTADR2 = 'po_head.PohdPtAdr2';

    /**
     * the column name for the PohdPtAdr3 field
     */
    const COL_POHDPTADR3 = 'po_head.PohdPtAdr3';

    /**
     * the column name for the PohdPtCtry field
     */
    const COL_POHDPTCTRY = 'po_head.PohdPtCtry';

    /**
     * the column name for the PohdPtCity field
     */
    const COL_POHDPTCITY = 'po_head.PohdPtCity';

    /**
     * the column name for the PohdPtStat field
     */
    const COL_POHDPTSTAT = 'po_head.PohdPtStat';

    /**
     * the column name for the PohdPtZipCode field
     */
    const COL_POHDPTZIPCODE = 'po_head.PohdPtZipCode';

    /**
     * the column name for the PohdCont field
     */
    const COL_POHDCONT = 'po_head.PohdCont';

    /**
     * the column name for the PohdOrdrDate field
     */
    const COL_POHDORDRDATE = 'po_head.PohdOrdrDate';

    /**
     * the column name for the AptmTermCode field
     */
    const COL_APTMTERMCODE = 'po_head.AptmTermCode';

    /**
     * the column name for the ArtbSviaCode field
     */
    const COL_ARTBSVIACODE = 'po_head.ArtbSviaCode';

    /**
     * the column name for the PohdOldFob field
     */
    const COL_POHDOLDFOB = 'po_head.PohdOldFob';

    /**
     * the column name for the AptbBuyrCode field
     */
    const COL_APTBBUYRCODE = 'po_head.AptbBuyrCode';

    /**
     * the column name for the PohdColPpd field
     */
    const COL_POHDCOLPPD = 'po_head.PohdColPpd';

    /**
     * the column name for the PohdTeleIntl field
     */
    const COL_POHDTELEINTL = 'po_head.PohdTeleIntl';

    /**
     * the column name for the PohdTeleNbr field
     */
    const COL_POHDTELENBR = 'po_head.PohdTeleNbr';

    /**
     * the column name for the PohdTeleExt field
     */
    const COL_POHDTELEEXT = 'po_head.PohdTeleExt';

    /**
     * the column name for the PohdFaxIntl field
     */
    const COL_POHDFAXINTL = 'po_head.PohdFaxIntl';

    /**
     * the column name for the PohdFaxNbr field
     */
    const COL_POHDFAXNBR = 'po_head.PohdFaxNbr';

    /**
     * the column name for the PohdRCnt field
     */
    const COL_POHDRCNT = 'po_head.PohdRCnt';

    /**
     * the column name for the PohdTaxExem field
     */
    const COL_POHDTAXEXEM = 'po_head.PohdTaxExem';

    /**
     * the column name for the PohdExchCtry field
     */
    const COL_POHDEXCHCTRY = 'po_head.PohdExchCtry';

    /**
     * the column name for the PohdExchRate field
     */
    const COL_POHDEXCHRATE = 'po_head.PohdExchRate';

    /**
     * the column name for the PohdExptDate field
     */
    const COL_POHDEXPTDATE = 'po_head.PohdExptDate';

    /**
     * the column name for the PohdCancDate field
     */
    const COL_POHDCANCDATE = 'po_head.PohdCancDate';

    /**
     * the column name for the PohdICnt field
     */
    const COL_POHDICNT = 'po_head.PohdICnt';

    /**
     * the column name for the PohdFob field
     */
    const COL_POHDFOB = 'po_head.PohdFob';

    /**
     * the column name for the PohdPickQueue field
     */
    const COL_POHDPICKQUEUE = 'po_head.PohdPickQueue';

    /**
     * the column name for the PohdPackedBy field
     */
    const COL_POHDPACKEDBY = 'po_head.PohdPackedBy';

    /**
     * the column name for the PohdPackDate field
     */
    const COL_POHDPACKDATE = 'po_head.PohdPackDate';

    /**
     * the column name for the PohdPackTime field
     */
    const COL_POHDPACKTIME = 'po_head.PohdPackTime';

    /**
     * the column name for the PohdLandCost field
     */
    const COL_POHDLANDCOST = 'po_head.PohdLandCost';

    /**
     * the column name for the PohdEdiPoDate field
     */
    const COL_POHDEDIPODATE = 'po_head.PohdEdiPoDate';

    /**
     * the column name for the PohdFutureBuy field
     */
    const COL_POHDFUTUREBUY = 'po_head.PohdFutureBuy';

    /**
     * the column name for the PohdEmailAddr field
     */
    const COL_POHDEMAILADDR = 'po_head.PohdEmailAddr';

    /**
     * the column name for the PohdShipDate field
     */
    const COL_POHDSHIPDATE = 'po_head.PohdShipDate';

    /**
     * the column name for the PohdAckDate field
     */
    const COL_POHDACKDATE = 'po_head.PohdAckDate';

    /**
     * the column name for the PohdReleaseNbr field
     */
    const COL_POHDRELEASENBR = 'po_head.PohdReleaseNbr';

    /**
     * the column name for the PohdReturnsPo field
     */
    const COL_POHDRETURNSPO = 'po_head.PohdReturnsPo';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'po_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'po_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'po_head.dummy';

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
        self::TYPE_PHPNAME       => array('Pohdnbr', 'Pohdstat', 'Pohdref', 'Apvevendid', 'Apfmshipid', 'Pohdtoname', 'Pohdtoadr1', 'Pohdtoadr2', 'Pohdtoadr3', 'Pohdtoctry', 'Pohdtocity', 'Pohdtostat', 'Pohdtozipcode', 'Pohdptname', 'Pohdptadr1', 'Pohdptadr2', 'Pohdptadr3', 'Pohdptctry', 'Pohdptcity', 'Pohdptstat', 'Pohdptzipcode', 'Pohdcont', 'Pohdordrdate', 'Aptmtermcode', 'Artbsviacode', 'Pohdoldfob', 'Aptbbuyrcode', 'Pohdcolppd', 'Pohdteleintl', 'Pohdtelenbr', 'Pohdteleext', 'Pohdfaxintl', 'Pohdfaxnbr', 'Pohdrcnt', 'Pohdtaxexem', 'Pohdexchctry', 'Pohdexchrate', 'Pohdexptdate', 'Pohdcancdate', 'Pohdicnt', 'Pohdfob', 'Pohdpickqueue', 'Pohdpackedby', 'Pohdpackdate', 'Pohdpacktime', 'Pohdlandcost', 'Pohdedipodate', 'Pohdfuturebuy', 'Pohdemailaddr', 'Pohdshipdate', 'Pohdackdate', 'Pohdreleasenbr', 'Pohdreturnspo', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('pohdnbr', 'pohdstat', 'pohdref', 'apvevendid', 'apfmshipid', 'pohdtoname', 'pohdtoadr1', 'pohdtoadr2', 'pohdtoadr3', 'pohdtoctry', 'pohdtocity', 'pohdtostat', 'pohdtozipcode', 'pohdptname', 'pohdptadr1', 'pohdptadr2', 'pohdptadr3', 'pohdptctry', 'pohdptcity', 'pohdptstat', 'pohdptzipcode', 'pohdcont', 'pohdordrdate', 'aptmtermcode', 'artbsviacode', 'pohdoldfob', 'aptbbuyrcode', 'pohdcolppd', 'pohdteleintl', 'pohdtelenbr', 'pohdteleext', 'pohdfaxintl', 'pohdfaxnbr', 'pohdrcnt', 'pohdtaxexem', 'pohdexchctry', 'pohdexchrate', 'pohdexptdate', 'pohdcancdate', 'pohdicnt', 'pohdfob', 'pohdpickqueue', 'pohdpackedby', 'pohdpackdate', 'pohdpacktime', 'pohdlandcost', 'pohdedipodate', 'pohdfuturebuy', 'pohdemailaddr', 'pohdshipdate', 'pohdackdate', 'pohdreleasenbr', 'pohdreturnspo', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PurchaseOrderTableMap::COL_POHDNBR, PurchaseOrderTableMap::COL_POHDSTAT, PurchaseOrderTableMap::COL_POHDREF, PurchaseOrderTableMap::COL_APVEVENDID, PurchaseOrderTableMap::COL_APFMSHIPID, PurchaseOrderTableMap::COL_POHDTONAME, PurchaseOrderTableMap::COL_POHDTOADR1, PurchaseOrderTableMap::COL_POHDTOADR2, PurchaseOrderTableMap::COL_POHDTOADR3, PurchaseOrderTableMap::COL_POHDTOCTRY, PurchaseOrderTableMap::COL_POHDTOCITY, PurchaseOrderTableMap::COL_POHDTOSTAT, PurchaseOrderTableMap::COL_POHDTOZIPCODE, PurchaseOrderTableMap::COL_POHDPTNAME, PurchaseOrderTableMap::COL_POHDPTADR1, PurchaseOrderTableMap::COL_POHDPTADR2, PurchaseOrderTableMap::COL_POHDPTADR3, PurchaseOrderTableMap::COL_POHDPTCTRY, PurchaseOrderTableMap::COL_POHDPTCITY, PurchaseOrderTableMap::COL_POHDPTSTAT, PurchaseOrderTableMap::COL_POHDPTZIPCODE, PurchaseOrderTableMap::COL_POHDCONT, PurchaseOrderTableMap::COL_POHDORDRDATE, PurchaseOrderTableMap::COL_APTMTERMCODE, PurchaseOrderTableMap::COL_ARTBSVIACODE, PurchaseOrderTableMap::COL_POHDOLDFOB, PurchaseOrderTableMap::COL_APTBBUYRCODE, PurchaseOrderTableMap::COL_POHDCOLPPD, PurchaseOrderTableMap::COL_POHDTELEINTL, PurchaseOrderTableMap::COL_POHDTELENBR, PurchaseOrderTableMap::COL_POHDTELEEXT, PurchaseOrderTableMap::COL_POHDFAXINTL, PurchaseOrderTableMap::COL_POHDFAXNBR, PurchaseOrderTableMap::COL_POHDRCNT, PurchaseOrderTableMap::COL_POHDTAXEXEM, PurchaseOrderTableMap::COL_POHDEXCHCTRY, PurchaseOrderTableMap::COL_POHDEXCHRATE, PurchaseOrderTableMap::COL_POHDEXPTDATE, PurchaseOrderTableMap::COL_POHDCANCDATE, PurchaseOrderTableMap::COL_POHDICNT, PurchaseOrderTableMap::COL_POHDFOB, PurchaseOrderTableMap::COL_POHDPICKQUEUE, PurchaseOrderTableMap::COL_POHDPACKEDBY, PurchaseOrderTableMap::COL_POHDPACKDATE, PurchaseOrderTableMap::COL_POHDPACKTIME, PurchaseOrderTableMap::COL_POHDLANDCOST, PurchaseOrderTableMap::COL_POHDEDIPODATE, PurchaseOrderTableMap::COL_POHDFUTUREBUY, PurchaseOrderTableMap::COL_POHDEMAILADDR, PurchaseOrderTableMap::COL_POHDSHIPDATE, PurchaseOrderTableMap::COL_POHDACKDATE, PurchaseOrderTableMap::COL_POHDRELEASENBR, PurchaseOrderTableMap::COL_POHDRETURNSPO, PurchaseOrderTableMap::COL_DATEUPDTD, PurchaseOrderTableMap::COL_TIMEUPDTD, PurchaseOrderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PohdNbr', 'PohdStat', 'PohdRef', 'ApveVendId', 'ApfmShipId', 'PohdToName', 'PohdToAdr1', 'PohdToAdr2', 'PohdToAdr3', 'PohdToCtry', 'PohdToCity', 'PohdToStat', 'PohdToZipCode', 'PohdPtName', 'PohdPtAdr1', 'PohdPtAdr2', 'PohdPtAdr3', 'PohdPtCtry', 'PohdPtCity', 'PohdPtStat', 'PohdPtZipCode', 'PohdCont', 'PohdOrdrDate', 'AptmTermCode', 'ArtbSviaCode', 'PohdOldFob', 'AptbBuyrCode', 'PohdColPpd', 'PohdTeleIntl', 'PohdTeleNbr', 'PohdTeleExt', 'PohdFaxIntl', 'PohdFaxNbr', 'PohdRCnt', 'PohdTaxExem', 'PohdExchCtry', 'PohdExchRate', 'PohdExptDate', 'PohdCancDate', 'PohdICnt', 'PohdFob', 'PohdPickQueue', 'PohdPackedBy', 'PohdPackDate', 'PohdPackTime', 'PohdLandCost', 'PohdEdiPoDate', 'PohdFutureBuy', 'PohdEmailAddr', 'PohdShipDate', 'PohdAckDate', 'PohdReleaseNbr', 'PohdReturnsPo', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pohdnbr' => 0, 'Pohdstat' => 1, 'Pohdref' => 2, 'Apvevendid' => 3, 'Apfmshipid' => 4, 'Pohdtoname' => 5, 'Pohdtoadr1' => 6, 'Pohdtoadr2' => 7, 'Pohdtoadr3' => 8, 'Pohdtoctry' => 9, 'Pohdtocity' => 10, 'Pohdtostat' => 11, 'Pohdtozipcode' => 12, 'Pohdptname' => 13, 'Pohdptadr1' => 14, 'Pohdptadr2' => 15, 'Pohdptadr3' => 16, 'Pohdptctry' => 17, 'Pohdptcity' => 18, 'Pohdptstat' => 19, 'Pohdptzipcode' => 20, 'Pohdcont' => 21, 'Pohdordrdate' => 22, 'Aptmtermcode' => 23, 'Artbsviacode' => 24, 'Pohdoldfob' => 25, 'Aptbbuyrcode' => 26, 'Pohdcolppd' => 27, 'Pohdteleintl' => 28, 'Pohdtelenbr' => 29, 'Pohdteleext' => 30, 'Pohdfaxintl' => 31, 'Pohdfaxnbr' => 32, 'Pohdrcnt' => 33, 'Pohdtaxexem' => 34, 'Pohdexchctry' => 35, 'Pohdexchrate' => 36, 'Pohdexptdate' => 37, 'Pohdcancdate' => 38, 'Pohdicnt' => 39, 'Pohdfob' => 40, 'Pohdpickqueue' => 41, 'Pohdpackedby' => 42, 'Pohdpackdate' => 43, 'Pohdpacktime' => 44, 'Pohdlandcost' => 45, 'Pohdedipodate' => 46, 'Pohdfuturebuy' => 47, 'Pohdemailaddr' => 48, 'Pohdshipdate' => 49, 'Pohdackdate' => 50, 'Pohdreleasenbr' => 51, 'Pohdreturnspo' => 52, 'Dateupdtd' => 53, 'Timeupdtd' => 54, 'Dummy' => 55, ),
        self::TYPE_CAMELNAME     => array('pohdnbr' => 0, 'pohdstat' => 1, 'pohdref' => 2, 'apvevendid' => 3, 'apfmshipid' => 4, 'pohdtoname' => 5, 'pohdtoadr1' => 6, 'pohdtoadr2' => 7, 'pohdtoadr3' => 8, 'pohdtoctry' => 9, 'pohdtocity' => 10, 'pohdtostat' => 11, 'pohdtozipcode' => 12, 'pohdptname' => 13, 'pohdptadr1' => 14, 'pohdptadr2' => 15, 'pohdptadr3' => 16, 'pohdptctry' => 17, 'pohdptcity' => 18, 'pohdptstat' => 19, 'pohdptzipcode' => 20, 'pohdcont' => 21, 'pohdordrdate' => 22, 'aptmtermcode' => 23, 'artbsviacode' => 24, 'pohdoldfob' => 25, 'aptbbuyrcode' => 26, 'pohdcolppd' => 27, 'pohdteleintl' => 28, 'pohdtelenbr' => 29, 'pohdteleext' => 30, 'pohdfaxintl' => 31, 'pohdfaxnbr' => 32, 'pohdrcnt' => 33, 'pohdtaxexem' => 34, 'pohdexchctry' => 35, 'pohdexchrate' => 36, 'pohdexptdate' => 37, 'pohdcancdate' => 38, 'pohdicnt' => 39, 'pohdfob' => 40, 'pohdpickqueue' => 41, 'pohdpackedby' => 42, 'pohdpackdate' => 43, 'pohdpacktime' => 44, 'pohdlandcost' => 45, 'pohdedipodate' => 46, 'pohdfuturebuy' => 47, 'pohdemailaddr' => 48, 'pohdshipdate' => 49, 'pohdackdate' => 50, 'pohdreleasenbr' => 51, 'pohdreturnspo' => 52, 'dateupdtd' => 53, 'timeupdtd' => 54, 'dummy' => 55, ),
        self::TYPE_COLNAME       => array(PurchaseOrderTableMap::COL_POHDNBR => 0, PurchaseOrderTableMap::COL_POHDSTAT => 1, PurchaseOrderTableMap::COL_POHDREF => 2, PurchaseOrderTableMap::COL_APVEVENDID => 3, PurchaseOrderTableMap::COL_APFMSHIPID => 4, PurchaseOrderTableMap::COL_POHDTONAME => 5, PurchaseOrderTableMap::COL_POHDTOADR1 => 6, PurchaseOrderTableMap::COL_POHDTOADR2 => 7, PurchaseOrderTableMap::COL_POHDTOADR3 => 8, PurchaseOrderTableMap::COL_POHDTOCTRY => 9, PurchaseOrderTableMap::COL_POHDTOCITY => 10, PurchaseOrderTableMap::COL_POHDTOSTAT => 11, PurchaseOrderTableMap::COL_POHDTOZIPCODE => 12, PurchaseOrderTableMap::COL_POHDPTNAME => 13, PurchaseOrderTableMap::COL_POHDPTADR1 => 14, PurchaseOrderTableMap::COL_POHDPTADR2 => 15, PurchaseOrderTableMap::COL_POHDPTADR3 => 16, PurchaseOrderTableMap::COL_POHDPTCTRY => 17, PurchaseOrderTableMap::COL_POHDPTCITY => 18, PurchaseOrderTableMap::COL_POHDPTSTAT => 19, PurchaseOrderTableMap::COL_POHDPTZIPCODE => 20, PurchaseOrderTableMap::COL_POHDCONT => 21, PurchaseOrderTableMap::COL_POHDORDRDATE => 22, PurchaseOrderTableMap::COL_APTMTERMCODE => 23, PurchaseOrderTableMap::COL_ARTBSVIACODE => 24, PurchaseOrderTableMap::COL_POHDOLDFOB => 25, PurchaseOrderTableMap::COL_APTBBUYRCODE => 26, PurchaseOrderTableMap::COL_POHDCOLPPD => 27, PurchaseOrderTableMap::COL_POHDTELEINTL => 28, PurchaseOrderTableMap::COL_POHDTELENBR => 29, PurchaseOrderTableMap::COL_POHDTELEEXT => 30, PurchaseOrderTableMap::COL_POHDFAXINTL => 31, PurchaseOrderTableMap::COL_POHDFAXNBR => 32, PurchaseOrderTableMap::COL_POHDRCNT => 33, PurchaseOrderTableMap::COL_POHDTAXEXEM => 34, PurchaseOrderTableMap::COL_POHDEXCHCTRY => 35, PurchaseOrderTableMap::COL_POHDEXCHRATE => 36, PurchaseOrderTableMap::COL_POHDEXPTDATE => 37, PurchaseOrderTableMap::COL_POHDCANCDATE => 38, PurchaseOrderTableMap::COL_POHDICNT => 39, PurchaseOrderTableMap::COL_POHDFOB => 40, PurchaseOrderTableMap::COL_POHDPICKQUEUE => 41, PurchaseOrderTableMap::COL_POHDPACKEDBY => 42, PurchaseOrderTableMap::COL_POHDPACKDATE => 43, PurchaseOrderTableMap::COL_POHDPACKTIME => 44, PurchaseOrderTableMap::COL_POHDLANDCOST => 45, PurchaseOrderTableMap::COL_POHDEDIPODATE => 46, PurchaseOrderTableMap::COL_POHDFUTUREBUY => 47, PurchaseOrderTableMap::COL_POHDEMAILADDR => 48, PurchaseOrderTableMap::COL_POHDSHIPDATE => 49, PurchaseOrderTableMap::COL_POHDACKDATE => 50, PurchaseOrderTableMap::COL_POHDRELEASENBR => 51, PurchaseOrderTableMap::COL_POHDRETURNSPO => 52, PurchaseOrderTableMap::COL_DATEUPDTD => 53, PurchaseOrderTableMap::COL_TIMEUPDTD => 54, PurchaseOrderTableMap::COL_DUMMY => 55, ),
        self::TYPE_FIELDNAME     => array('PohdNbr' => 0, 'PohdStat' => 1, 'PohdRef' => 2, 'ApveVendId' => 3, 'ApfmShipId' => 4, 'PohdToName' => 5, 'PohdToAdr1' => 6, 'PohdToAdr2' => 7, 'PohdToAdr3' => 8, 'PohdToCtry' => 9, 'PohdToCity' => 10, 'PohdToStat' => 11, 'PohdToZipCode' => 12, 'PohdPtName' => 13, 'PohdPtAdr1' => 14, 'PohdPtAdr2' => 15, 'PohdPtAdr3' => 16, 'PohdPtCtry' => 17, 'PohdPtCity' => 18, 'PohdPtStat' => 19, 'PohdPtZipCode' => 20, 'PohdCont' => 21, 'PohdOrdrDate' => 22, 'AptmTermCode' => 23, 'ArtbSviaCode' => 24, 'PohdOldFob' => 25, 'AptbBuyrCode' => 26, 'PohdColPpd' => 27, 'PohdTeleIntl' => 28, 'PohdTeleNbr' => 29, 'PohdTeleExt' => 30, 'PohdFaxIntl' => 31, 'PohdFaxNbr' => 32, 'PohdRCnt' => 33, 'PohdTaxExem' => 34, 'PohdExchCtry' => 35, 'PohdExchRate' => 36, 'PohdExptDate' => 37, 'PohdCancDate' => 38, 'PohdICnt' => 39, 'PohdFob' => 40, 'PohdPickQueue' => 41, 'PohdPackedBy' => 42, 'PohdPackDate' => 43, 'PohdPackTime' => 44, 'PohdLandCost' => 45, 'PohdEdiPoDate' => 46, 'PohdFutureBuy' => 47, 'PohdEmailAddr' => 48, 'PohdShipDate' => 49, 'PohdAckDate' => 50, 'PohdReleaseNbr' => 51, 'PohdReturnsPo' => 52, 'DateUpdtd' => 53, 'TimeUpdtd' => 54, 'dummy' => 55, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
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
        $this->setName('po_head');
        $this->setPhpName('PurchaseOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PurchaseOrder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PohdNbr', 'Pohdnbr', 'VARCHAR', true, 8, '');
        $this->addColumn('PohdStat', 'Pohdstat', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdRef', 'Pohdref', 'VARCHAR', false, 15, null);
        $this->addForeignKey('ApveVendId', 'Apvevendid', 'VARCHAR', 'ap_vend_mast', 'ApveVendId', false, 6, null);
        $this->addForeignKey('ApveVendId', 'Apvevendid', 'VARCHAR', 'ap_ship_from', 'ApveVendId', false, 6, null);
        $this->addForeignKey('ApfmShipId', 'Apfmshipid', 'VARCHAR', 'ap_ship_from', 'ApfmShipId', false, 6, null);
        $this->addColumn('PohdToName', 'Pohdtoname', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdToAdr1', 'Pohdtoadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdToAdr2', 'Pohdtoadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdToAdr3', 'Pohdtoadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdToCtry', 'Pohdtoctry', 'VARCHAR', false, 4, null);
        $this->addColumn('PohdToCity', 'Pohdtocity', 'VARCHAR', false, 16, null);
        $this->addColumn('PohdToStat', 'Pohdtostat', 'VARCHAR', false, 2, null);
        $this->addColumn('PohdToZipCode', 'Pohdtozipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('PohdPtName', 'Pohdptname', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdPtAdr1', 'Pohdptadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdPtAdr2', 'Pohdptadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdPtAdr3', 'Pohdptadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('PohdPtCtry', 'Pohdptctry', 'VARCHAR', false, 4, null);
        $this->addColumn('PohdPtCity', 'Pohdptcity', 'VARCHAR', false, 16, null);
        $this->addColumn('PohdPtStat', 'Pohdptstat', 'VARCHAR', false, 2, null);
        $this->addColumn('PohdPtZipCode', 'Pohdptzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('PohdCont', 'Pohdcont', 'VARCHAR', false, 20, null);
        $this->addColumn('PohdOrdrDate', 'Pohdordrdate', 'VARCHAR', false, 8, null);
        $this->addColumn('AptmTermCode', 'Aptmtermcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbSviaCode', 'Artbsviacode', 'VARCHAR', false, 4, null);
        $this->addColumn('PohdOldFob', 'Pohdoldfob', 'VARCHAR', false, 1, null);
        $this->addColumn('AptbBuyrCode', 'Aptbbuyrcode', 'VARCHAR', false, 6, null);
        $this->addColumn('PohdColPpd', 'Pohdcolppd', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdTeleIntl', 'Pohdteleintl', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdTeleNbr', 'Pohdtelenbr', 'VARCHAR', false, 22, null);
        $this->addColumn('PohdTeleExt', 'Pohdteleext', 'VARCHAR', false, 7, null);
        $this->addColumn('PohdFaxIntl', 'Pohdfaxintl', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdFaxNbr', 'Pohdfaxnbr', 'VARCHAR', false, 22, null);
        $this->addColumn('PohdRCnt', 'Pohdrcnt', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdTaxExem', 'Pohdtaxexem', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdExchCtry', 'Pohdexchctry', 'VARCHAR', false, 4, null);
        $this->addColumn('PohdExchRate', 'Pohdexchrate', 'DECIMAL', false, 20, null);
        $this->addColumn('PohdExptDate', 'Pohdexptdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdCancDate', 'Pohdcancdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdICnt', 'Pohdicnt', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdFob', 'Pohdfob', 'VARCHAR', false, 20, null);
        $this->addColumn('PohdPickQueue', 'Pohdpickqueue', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdPackedBy', 'Pohdpackedby', 'VARCHAR', false, 12, null);
        $this->addColumn('PohdPackDate', 'Pohdpackdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdPackTime', 'Pohdpacktime', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdLandCost', 'Pohdlandcost', 'DECIMAL', false, 20, null);
        $this->addColumn('PohdEdiPoDate', 'Pohdedipodate', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdFutureBuy', 'Pohdfuturebuy', 'VARCHAR', false, 1, null);
        $this->addColumn('PohdEmailAddr', 'Pohdemailaddr', 'VARCHAR', false, 50, null);
        $this->addColumn('PohdShipDate', 'Pohdshipdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdAckDate', 'Pohdackdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PohdReleaseNbr', 'Pohdreleasenbr', 'INTEGER', false, 4, null);
        $this->addColumn('PohdReturnsPo', 'Pohdreturnspo', 'VARCHAR', false, 1, null);
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
        $this->addRelation('VendorShipfrom', '\\VendorShipfrom', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
  1 =>
  array (
    0 => ':ApfmShipId',
    1 => ':ApfmShipId',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PurchaseOrderTableMap::CLASS_DEFAULT : PurchaseOrderTableMap::OM_CLASS;
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
     * @return array           (PurchaseOrder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PurchaseOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PurchaseOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PurchaseOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PurchaseOrderTableMap::OM_CLASS;
            /** @var PurchaseOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PurchaseOrderTableMap::addInstanceToPool($obj, $key);
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
            $key = PurchaseOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PurchaseOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PurchaseOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PurchaseOrderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDNBR);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDSTAT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDREF);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_APFMSHIPID);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTONAME);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOADR1);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOADR2);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOADR3);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOCTRY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOCITY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOSTAT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTOZIPCODE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTNAME);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTADR1);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTADR2);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTADR3);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTCTRY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTCITY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTSTAT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPTZIPCODE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDCONT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDORDRDATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_APTMTERMCODE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_ARTBSVIACODE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDOLDFOB);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_APTBBUYRCODE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDCOLPPD);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTELEINTL);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTELENBR);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTELEEXT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDFAXINTL);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDFAXNBR);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDRCNT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDTAXEXEM);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDEXCHCTRY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDEXCHRATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDEXPTDATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDCANCDATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDICNT);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDFOB);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPICKQUEUE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPACKEDBY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPACKDATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDPACKTIME);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDLANDCOST);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDEDIPODATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDFUTUREBUY);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDEMAILADDR);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDSHIPDATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDACKDATE);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDRELEASENBR);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_POHDRETURNSPO);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PohdNbr');
            $criteria->addSelectColumn($alias . '.PohdStat');
            $criteria->addSelectColumn($alias . '.PohdRef');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.ApfmShipId');
            $criteria->addSelectColumn($alias . '.PohdToName');
            $criteria->addSelectColumn($alias . '.PohdToAdr1');
            $criteria->addSelectColumn($alias . '.PohdToAdr2');
            $criteria->addSelectColumn($alias . '.PohdToAdr3');
            $criteria->addSelectColumn($alias . '.PohdToCtry');
            $criteria->addSelectColumn($alias . '.PohdToCity');
            $criteria->addSelectColumn($alias . '.PohdToStat');
            $criteria->addSelectColumn($alias . '.PohdToZipCode');
            $criteria->addSelectColumn($alias . '.PohdPtName');
            $criteria->addSelectColumn($alias . '.PohdPtAdr1');
            $criteria->addSelectColumn($alias . '.PohdPtAdr2');
            $criteria->addSelectColumn($alias . '.PohdPtAdr3');
            $criteria->addSelectColumn($alias . '.PohdPtCtry');
            $criteria->addSelectColumn($alias . '.PohdPtCity');
            $criteria->addSelectColumn($alias . '.PohdPtStat');
            $criteria->addSelectColumn($alias . '.PohdPtZipCode');
            $criteria->addSelectColumn($alias . '.PohdCont');
            $criteria->addSelectColumn($alias . '.PohdOrdrDate');
            $criteria->addSelectColumn($alias . '.AptmTermCode');
            $criteria->addSelectColumn($alias . '.ArtbSviaCode');
            $criteria->addSelectColumn($alias . '.PohdOldFob');
            $criteria->addSelectColumn($alias . '.AptbBuyrCode');
            $criteria->addSelectColumn($alias . '.PohdColPpd');
            $criteria->addSelectColumn($alias . '.PohdTeleIntl');
            $criteria->addSelectColumn($alias . '.PohdTeleNbr');
            $criteria->addSelectColumn($alias . '.PohdTeleExt');
            $criteria->addSelectColumn($alias . '.PohdFaxIntl');
            $criteria->addSelectColumn($alias . '.PohdFaxNbr');
            $criteria->addSelectColumn($alias . '.PohdRCnt');
            $criteria->addSelectColumn($alias . '.PohdTaxExem');
            $criteria->addSelectColumn($alias . '.PohdExchCtry');
            $criteria->addSelectColumn($alias . '.PohdExchRate');
            $criteria->addSelectColumn($alias . '.PohdExptDate');
            $criteria->addSelectColumn($alias . '.PohdCancDate');
            $criteria->addSelectColumn($alias . '.PohdICnt');
            $criteria->addSelectColumn($alias . '.PohdFob');
            $criteria->addSelectColumn($alias . '.PohdPickQueue');
            $criteria->addSelectColumn($alias . '.PohdPackedBy');
            $criteria->addSelectColumn($alias . '.PohdPackDate');
            $criteria->addSelectColumn($alias . '.PohdPackTime');
            $criteria->addSelectColumn($alias . '.PohdLandCost');
            $criteria->addSelectColumn($alias . '.PohdEdiPoDate');
            $criteria->addSelectColumn($alias . '.PohdFutureBuy');
            $criteria->addSelectColumn($alias . '.PohdEmailAddr');
            $criteria->addSelectColumn($alias . '.PohdShipDate');
            $criteria->addSelectColumn($alias . '.PohdAckDate');
            $criteria->addSelectColumn($alias . '.PohdReleaseNbr');
            $criteria->addSelectColumn($alias . '.PohdReturnsPo');
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
        return Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderTableMap::DATABASE_NAME)->getTable(PurchaseOrderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PurchaseOrderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PurchaseOrderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a PurchaseOrder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PurchaseOrder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PurchaseOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PurchaseOrderTableMap::DATABASE_NAME);
            $criteria->add(PurchaseOrderTableMap::COL_POHDNBR, (array) $values, Criteria::IN);
        }

        $query = PurchaseOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PurchaseOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PurchaseOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PurchaseOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PurchaseOrder or Criteria object.
     *
     * @param mixed               $criteria Criteria or PurchaseOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PurchaseOrder object
        }


        // Set the correct dbName
        $query = PurchaseOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PurchaseOrderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PurchaseOrderTableMap::buildTableMap();
