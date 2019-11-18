<?php

namespace Map;

use \Quote;
use \QuoteQuery;
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
 * This class defines the structure of the 'quote_header' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class QuoteTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.QuoteTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'quote_header';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Quote';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Quote';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 68;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 68;

    /**
     * the column name for the QthdId field
     */
    const COL_QTHDID = 'quote_header.QthdId';

    /**
     * the column name for the QthdStat field
     */
    const COL_QTHDSTAT = 'quote_header.QthdStat';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'quote_header.ArcuCustId';

    /**
     * the column name for the QthdBtName field
     */
    const COL_QTHDBTNAME = 'quote_header.QthdBtName';

    /**
     * the column name for the QthdBtAdr1 field
     */
    const COL_QTHDBTADR1 = 'quote_header.QthdBtAdr1';

    /**
     * the column name for the QthdBtAdr2 field
     */
    const COL_QTHDBTADR2 = 'quote_header.QthdBtAdr2';

    /**
     * the column name for the QthdBtAdr3 field
     */
    const COL_QTHDBTADR3 = 'quote_header.QthdBtAdr3';

    /**
     * the column name for the QthdBtCtry field
     */
    const COL_QTHDBTCTRY = 'quote_header.QthdBtCtry';

    /**
     * the column name for the QthdBtCity field
     */
    const COL_QTHDBTCITY = 'quote_header.QthdBtCity';

    /**
     * the column name for the QthdBtStat field
     */
    const COL_QTHDBTSTAT = 'quote_header.QthdBtStat';

    /**
     * the column name for the QthdBtZipCode field
     */
    const COL_QTHDBTZIPCODE = 'quote_header.QthdBtZipCode';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'quote_header.ArstShipId';

    /**
     * the column name for the QthdStName field
     */
    const COL_QTHDSTNAME = 'quote_header.QthdStName';

    /**
     * the column name for the QthdStAdr1 field
     */
    const COL_QTHDSTADR1 = 'quote_header.QthdStAdr1';

    /**
     * the column name for the QthdStAdr2 field
     */
    const COL_QTHDSTADR2 = 'quote_header.QthdStAdr2';

    /**
     * the column name for the QthdStAdr3 field
     */
    const COL_QTHDSTADR3 = 'quote_header.QthdStAdr3';

    /**
     * the column name for the QthdStCtry field
     */
    const COL_QTHDSTCTRY = 'quote_header.QthdStCtry';

    /**
     * the column name for the QthdStCity field
     */
    const COL_QTHDSTCITY = 'quote_header.QthdStCity';

    /**
     * the column name for the QthdStStat field
     */
    const COL_QTHDSTSTAT = 'quote_header.QthdStStat';

    /**
     * the column name for the QthdStZipCode field
     */
    const COL_QTHDSTZIPCODE = 'quote_header.QthdStZipCode';

    /**
     * the column name for the QthdCont field
     */
    const COL_QTHDCONT = 'quote_header.QthdCont';

    /**
     * the column name for the QthdTeleIntl field
     */
    const COL_QTHDTELEINTL = 'quote_header.QthdTeleIntl';

    /**
     * the column name for the QthdTeleNbr field
     */
    const COL_QTHDTELENBR = 'quote_header.QthdTeleNbr';

    /**
     * the column name for the QthdTeleExt field
     */
    const COL_QTHDTELEEXT = 'quote_header.QthdTeleExt';

    /**
     * the column name for the QthdFaxIntl field
     */
    const COL_QTHDFAXINTL = 'quote_header.QthdFaxIntl';

    /**
     * the column name for the QthdFaxNbr field
     */
    const COL_QTHDFAXNBR = 'quote_header.QthdFaxNbr';

    /**
     * the column name for the QthdQuotDate field
     */
    const COL_QTHDQUOTDATE = 'quote_header.QthdQuotDate';

    /**
     * the column name for the QthdRevDate field
     */
    const COL_QTHDREVDATE = 'quote_header.QthdRevDate';

    /**
     * the column name for the QthdExpDate field
     */
    const COL_QTHDEXPDATE = 'quote_header.QthdExpDate';

    /**
     * the column name for the ArtbPricCode field
     */
    const COL_ARTBPRICCODE = 'quote_header.ArtbPricCode';

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'quote_header.ArtbMtaxCode';

    /**
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'quote_header.ArtmTermCd';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'quote_header.ArtbShipVia';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'quote_header.ArspSalePer1';

    /**
     * the column name for the QthdSp1Pct field
     */
    const COL_QTHDSP1PCT = 'quote_header.QthdSp1Pct';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'quote_header.ArspSalePer2';

    /**
     * the column name for the QthdSp2Pct field
     */
    const COL_QTHDSP2PCT = 'quote_header.QthdSp2Pct';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'quote_header.ArspSalePer3';

    /**
     * the column name for the QthdSp3Pct field
     */
    const COL_QTHDSP3PCT = 'quote_header.QthdSp3Pct';

    /**
     * the column name for the QthdExchCtry field
     */
    const COL_QTHDEXCHCTRY = 'quote_header.QthdExchCtry';

    /**
     * the column name for the QthdExchRate field
     */
    const COL_QTHDEXCHRATE = 'quote_header.QthdExchRate';

    /**
     * the column name for the QthdTaxSub field
     */
    const COL_QTHDTAXSUB = 'quote_header.QthdTaxSub';

    /**
     * the column name for the QthdNonTaxSub field
     */
    const COL_QTHDNONTAXSUB = 'quote_header.QthdNonTaxSub';

    /**
     * the column name for the QthdTaxTot field
     */
    const COL_QTHDTAXTOT = 'quote_header.QthdTaxTot';

    /**
     * the column name for the QthdFrtTot field
     */
    const COL_QTHDFRTTOT = 'quote_header.QthdFrtTot';

    /**
     * the column name for the QthdMiscTot field
     */
    const COL_QTHDMISCTOT = 'quote_header.QthdMiscTot';

    /**
     * the column name for the QthdOrdrTot field
     */
    const COL_QTHDORDRTOT = 'quote_header.QthdOrdrTot';

    /**
     * the column name for the QthdCostTot field
     */
    const COL_QTHDCOSTTOT = 'quote_header.QthdCostTot';

    /**
     * the column name for the QthdWghtTot field
     */
    const COL_QTHDWGHTTOT = 'quote_header.QthdWghtTot';

    /**
     * the column name for the QthdOldSysQtNbr field
     */
    const COL_QTHDOLDSYSQTNBR = 'quote_header.QthdOldSysQtNbr';

    /**
     * the column name for the QthdFob field
     */
    const COL_QTHDFOB = 'quote_header.QthdFob';

    /**
     * the column name for the QthdDeliveryDesc field
     */
    const COL_QTHDDELIVERYDESC = 'quote_header.QthdDeliveryDesc';

    /**
     * the column name for the QthdOrderCnt field
     */
    const COL_QTHDORDERCNT = 'quote_header.QthdOrderCnt';

    /**
     * the column name for the QthdLastOrder field
     */
    const COL_QTHDLASTORDER = 'quote_header.QthdLastOrder';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'quote_header.IntbWhse';

    /**
     * the column name for the QthdCustPo field
     */
    const COL_QTHDCUSTPO = 'quote_header.QthdCustPo';

    /**
     * the column name for the QthdEmailAddr field
     */
    const COL_QTHDEMAILADDR = 'quote_header.QthdEmailAddr';

    /**
     * the column name for the QthdEnteredBy field
     */
    const COL_QTHDENTEREDBY = 'quote_header.QthdEnteredBy';

    /**
     * the column name for the QthdEnteredDate field
     */
    const COL_QTHDENTEREDDATE = 'quote_header.QthdEnteredDate';

    /**
     * the column name for the QthdEnteredTime field
     */
    const COL_QTHDENTEREDTIME = 'quote_header.QthdEnteredTime';

    /**
     * the column name for the QthdPrintFormat field
     */
    const COL_QTHDPRINTFORMAT = 'quote_header.QthdPrintFormat';

    /**
     * the column name for the QthdProjectId field
     */
    const COL_QTHDPROJECTID = 'quote_header.QthdProjectId';

    /**
     * the column name for the QthdRevTime field
     */
    const COL_QTHDREVTIME = 'quote_header.QthdRevTime';

    /**
     * the column name for the QthdRef field
     */
    const COL_QTHDREF = 'quote_header.QthdRef';

    /**
     * the column name for the QthdCareOf field
     */
    const COL_QTHDCAREOF = 'quote_header.QthdCareOf';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'quote_header.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'quote_header.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'quote_header.dummy';

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
        self::TYPE_PHPNAME       => array('Qthdid', 'Qthdstat', 'Arcucustid', 'Qthdbtname', 'Qthdbtadr1', 'Qthdbtadr2', 'Qthdbtadr3', 'Qthdbtctry', 'Qthdbtcity', 'Qthdbtstat', 'Qthdbtzipcode', 'Arstshipid', 'Qthdstname', 'Qthdstadr1', 'Qthdstadr2', 'Qthdstadr3', 'Qthdstctry', 'Qthdstcity', 'Qthdststat', 'Qthdstzipcode', 'Qthdcont', 'Qthdteleintl', 'Qthdtelenbr', 'Qthdteleext', 'Qthdfaxintl', 'Qthdfaxnbr', 'Qthdquotdate', 'Qthdrevdate', 'Qthdexpdate', 'Artbpriccode', 'Artbmtaxcode', 'Artmtermcd', 'Artbshipvia', 'Arspsaleper1', 'Qthdsp1pct', 'Arspsaleper2', 'Qthdsp2pct', 'Arspsaleper3', 'Qthdsp3pct', 'Qthdexchctry', 'Qthdexchrate', 'Qthdtaxsub', 'Qthdnontaxsub', 'Qthdtaxtot', 'Qthdfrttot', 'Qthdmisctot', 'Qthdordrtot', 'Qthdcosttot', 'Qthdwghttot', 'Qthdoldsysqtnbr', 'Qthdfob', 'Qthddeliverydesc', 'Qthdordercnt', 'Qthdlastorder', 'Intbwhse', 'Qthdcustpo', 'Qthdemailaddr', 'Qthdenteredby', 'Qthdentereddate', 'Qthdenteredtime', 'Qthdprintformat', 'Qthdprojectid', 'Qthdrevtime', 'Qthdref', 'Qthdcareof', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('qthdid', 'qthdstat', 'arcucustid', 'qthdbtname', 'qthdbtadr1', 'qthdbtadr2', 'qthdbtadr3', 'qthdbtctry', 'qthdbtcity', 'qthdbtstat', 'qthdbtzipcode', 'arstshipid', 'qthdstname', 'qthdstadr1', 'qthdstadr2', 'qthdstadr3', 'qthdstctry', 'qthdstcity', 'qthdststat', 'qthdstzipcode', 'qthdcont', 'qthdteleintl', 'qthdtelenbr', 'qthdteleext', 'qthdfaxintl', 'qthdfaxnbr', 'qthdquotdate', 'qthdrevdate', 'qthdexpdate', 'artbpriccode', 'artbmtaxcode', 'artmtermcd', 'artbshipvia', 'arspsaleper1', 'qthdsp1pct', 'arspsaleper2', 'qthdsp2pct', 'arspsaleper3', 'qthdsp3pct', 'qthdexchctry', 'qthdexchrate', 'qthdtaxsub', 'qthdnontaxsub', 'qthdtaxtot', 'qthdfrttot', 'qthdmisctot', 'qthdordrtot', 'qthdcosttot', 'qthdwghttot', 'qthdoldsysqtnbr', 'qthdfob', 'qthddeliverydesc', 'qthdordercnt', 'qthdlastorder', 'intbwhse', 'qthdcustpo', 'qthdemailaddr', 'qthdenteredby', 'qthdentereddate', 'qthdenteredtime', 'qthdprintformat', 'qthdprojectid', 'qthdrevtime', 'qthdref', 'qthdcareof', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(QuoteTableMap::COL_QTHDID, QuoteTableMap::COL_QTHDSTAT, QuoteTableMap::COL_ARCUCUSTID, QuoteTableMap::COL_QTHDBTNAME, QuoteTableMap::COL_QTHDBTADR1, QuoteTableMap::COL_QTHDBTADR2, QuoteTableMap::COL_QTHDBTADR3, QuoteTableMap::COL_QTHDBTCTRY, QuoteTableMap::COL_QTHDBTCITY, QuoteTableMap::COL_QTHDBTSTAT, QuoteTableMap::COL_QTHDBTZIPCODE, QuoteTableMap::COL_ARSTSHIPID, QuoteTableMap::COL_QTHDSTNAME, QuoteTableMap::COL_QTHDSTADR1, QuoteTableMap::COL_QTHDSTADR2, QuoteTableMap::COL_QTHDSTADR3, QuoteTableMap::COL_QTHDSTCTRY, QuoteTableMap::COL_QTHDSTCITY, QuoteTableMap::COL_QTHDSTSTAT, QuoteTableMap::COL_QTHDSTZIPCODE, QuoteTableMap::COL_QTHDCONT, QuoteTableMap::COL_QTHDTELEINTL, QuoteTableMap::COL_QTHDTELENBR, QuoteTableMap::COL_QTHDTELEEXT, QuoteTableMap::COL_QTHDFAXINTL, QuoteTableMap::COL_QTHDFAXNBR, QuoteTableMap::COL_QTHDQUOTDATE, QuoteTableMap::COL_QTHDREVDATE, QuoteTableMap::COL_QTHDEXPDATE, QuoteTableMap::COL_ARTBPRICCODE, QuoteTableMap::COL_ARTBMTAXCODE, QuoteTableMap::COL_ARTMTERMCD, QuoteTableMap::COL_ARTBSHIPVIA, QuoteTableMap::COL_ARSPSALEPER1, QuoteTableMap::COL_QTHDSP1PCT, QuoteTableMap::COL_ARSPSALEPER2, QuoteTableMap::COL_QTHDSP2PCT, QuoteTableMap::COL_ARSPSALEPER3, QuoteTableMap::COL_QTHDSP3PCT, QuoteTableMap::COL_QTHDEXCHCTRY, QuoteTableMap::COL_QTHDEXCHRATE, QuoteTableMap::COL_QTHDTAXSUB, QuoteTableMap::COL_QTHDNONTAXSUB, QuoteTableMap::COL_QTHDTAXTOT, QuoteTableMap::COL_QTHDFRTTOT, QuoteTableMap::COL_QTHDMISCTOT, QuoteTableMap::COL_QTHDORDRTOT, QuoteTableMap::COL_QTHDCOSTTOT, QuoteTableMap::COL_QTHDWGHTTOT, QuoteTableMap::COL_QTHDOLDSYSQTNBR, QuoteTableMap::COL_QTHDFOB, QuoteTableMap::COL_QTHDDELIVERYDESC, QuoteTableMap::COL_QTHDORDERCNT, QuoteTableMap::COL_QTHDLASTORDER, QuoteTableMap::COL_INTBWHSE, QuoteTableMap::COL_QTHDCUSTPO, QuoteTableMap::COL_QTHDEMAILADDR, QuoteTableMap::COL_QTHDENTEREDBY, QuoteTableMap::COL_QTHDENTEREDDATE, QuoteTableMap::COL_QTHDENTEREDTIME, QuoteTableMap::COL_QTHDPRINTFORMAT, QuoteTableMap::COL_QTHDPROJECTID, QuoteTableMap::COL_QTHDREVTIME, QuoteTableMap::COL_QTHDREF, QuoteTableMap::COL_QTHDCAREOF, QuoteTableMap::COL_DATEUPDTD, QuoteTableMap::COL_TIMEUPDTD, QuoteTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('QthdId', 'QthdStat', 'ArcuCustId', 'QthdBtName', 'QthdBtAdr1', 'QthdBtAdr2', 'QthdBtAdr3', 'QthdBtCtry', 'QthdBtCity', 'QthdBtStat', 'QthdBtZipCode', 'ArstShipId', 'QthdStName', 'QthdStAdr1', 'QthdStAdr2', 'QthdStAdr3', 'QthdStCtry', 'QthdStCity', 'QthdStStat', 'QthdStZipCode', 'QthdCont', 'QthdTeleIntl', 'QthdTeleNbr', 'QthdTeleExt', 'QthdFaxIntl', 'QthdFaxNbr', 'QthdQuotDate', 'QthdRevDate', 'QthdExpDate', 'ArtbPricCode', 'ArtbMtaxCode', 'ArtmTermCd', 'ArtbShipVia', 'ArspSalePer1', 'QthdSp1Pct', 'ArspSalePer2', 'QthdSp2Pct', 'ArspSalePer3', 'QthdSp3Pct', 'QthdExchCtry', 'QthdExchRate', 'QthdTaxSub', 'QthdNonTaxSub', 'QthdTaxTot', 'QthdFrtTot', 'QthdMiscTot', 'QthdOrdrTot', 'QthdCostTot', 'QthdWghtTot', 'QthdOldSysQtNbr', 'QthdFob', 'QthdDeliveryDesc', 'QthdOrderCnt', 'QthdLastOrder', 'IntbWhse', 'QthdCustPo', 'QthdEmailAddr', 'QthdEnteredBy', 'QthdEnteredDate', 'QthdEnteredTime', 'QthdPrintFormat', 'QthdProjectId', 'QthdRevTime', 'QthdRef', 'QthdCareOf', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Qthdid' => 0, 'Qthdstat' => 1, 'Arcucustid' => 2, 'Qthdbtname' => 3, 'Qthdbtadr1' => 4, 'Qthdbtadr2' => 5, 'Qthdbtadr3' => 6, 'Qthdbtctry' => 7, 'Qthdbtcity' => 8, 'Qthdbtstat' => 9, 'Qthdbtzipcode' => 10, 'Arstshipid' => 11, 'Qthdstname' => 12, 'Qthdstadr1' => 13, 'Qthdstadr2' => 14, 'Qthdstadr3' => 15, 'Qthdstctry' => 16, 'Qthdstcity' => 17, 'Qthdststat' => 18, 'Qthdstzipcode' => 19, 'Qthdcont' => 20, 'Qthdteleintl' => 21, 'Qthdtelenbr' => 22, 'Qthdteleext' => 23, 'Qthdfaxintl' => 24, 'Qthdfaxnbr' => 25, 'Qthdquotdate' => 26, 'Qthdrevdate' => 27, 'Qthdexpdate' => 28, 'Artbpriccode' => 29, 'Artbmtaxcode' => 30, 'Artmtermcd' => 31, 'Artbshipvia' => 32, 'Arspsaleper1' => 33, 'Qthdsp1pct' => 34, 'Arspsaleper2' => 35, 'Qthdsp2pct' => 36, 'Arspsaleper3' => 37, 'Qthdsp3pct' => 38, 'Qthdexchctry' => 39, 'Qthdexchrate' => 40, 'Qthdtaxsub' => 41, 'Qthdnontaxsub' => 42, 'Qthdtaxtot' => 43, 'Qthdfrttot' => 44, 'Qthdmisctot' => 45, 'Qthdordrtot' => 46, 'Qthdcosttot' => 47, 'Qthdwghttot' => 48, 'Qthdoldsysqtnbr' => 49, 'Qthdfob' => 50, 'Qthddeliverydesc' => 51, 'Qthdordercnt' => 52, 'Qthdlastorder' => 53, 'Intbwhse' => 54, 'Qthdcustpo' => 55, 'Qthdemailaddr' => 56, 'Qthdenteredby' => 57, 'Qthdentereddate' => 58, 'Qthdenteredtime' => 59, 'Qthdprintformat' => 60, 'Qthdprojectid' => 61, 'Qthdrevtime' => 62, 'Qthdref' => 63, 'Qthdcareof' => 64, 'Dateupdtd' => 65, 'Timeupdtd' => 66, 'Dummy' => 67, ),
        self::TYPE_CAMELNAME     => array('qthdid' => 0, 'qthdstat' => 1, 'arcucustid' => 2, 'qthdbtname' => 3, 'qthdbtadr1' => 4, 'qthdbtadr2' => 5, 'qthdbtadr3' => 6, 'qthdbtctry' => 7, 'qthdbtcity' => 8, 'qthdbtstat' => 9, 'qthdbtzipcode' => 10, 'arstshipid' => 11, 'qthdstname' => 12, 'qthdstadr1' => 13, 'qthdstadr2' => 14, 'qthdstadr3' => 15, 'qthdstctry' => 16, 'qthdstcity' => 17, 'qthdststat' => 18, 'qthdstzipcode' => 19, 'qthdcont' => 20, 'qthdteleintl' => 21, 'qthdtelenbr' => 22, 'qthdteleext' => 23, 'qthdfaxintl' => 24, 'qthdfaxnbr' => 25, 'qthdquotdate' => 26, 'qthdrevdate' => 27, 'qthdexpdate' => 28, 'artbpriccode' => 29, 'artbmtaxcode' => 30, 'artmtermcd' => 31, 'artbshipvia' => 32, 'arspsaleper1' => 33, 'qthdsp1pct' => 34, 'arspsaleper2' => 35, 'qthdsp2pct' => 36, 'arspsaleper3' => 37, 'qthdsp3pct' => 38, 'qthdexchctry' => 39, 'qthdexchrate' => 40, 'qthdtaxsub' => 41, 'qthdnontaxsub' => 42, 'qthdtaxtot' => 43, 'qthdfrttot' => 44, 'qthdmisctot' => 45, 'qthdordrtot' => 46, 'qthdcosttot' => 47, 'qthdwghttot' => 48, 'qthdoldsysqtnbr' => 49, 'qthdfob' => 50, 'qthddeliverydesc' => 51, 'qthdordercnt' => 52, 'qthdlastorder' => 53, 'intbwhse' => 54, 'qthdcustpo' => 55, 'qthdemailaddr' => 56, 'qthdenteredby' => 57, 'qthdentereddate' => 58, 'qthdenteredtime' => 59, 'qthdprintformat' => 60, 'qthdprojectid' => 61, 'qthdrevtime' => 62, 'qthdref' => 63, 'qthdcareof' => 64, 'dateupdtd' => 65, 'timeupdtd' => 66, 'dummy' => 67, ),
        self::TYPE_COLNAME       => array(QuoteTableMap::COL_QTHDID => 0, QuoteTableMap::COL_QTHDSTAT => 1, QuoteTableMap::COL_ARCUCUSTID => 2, QuoteTableMap::COL_QTHDBTNAME => 3, QuoteTableMap::COL_QTHDBTADR1 => 4, QuoteTableMap::COL_QTHDBTADR2 => 5, QuoteTableMap::COL_QTHDBTADR3 => 6, QuoteTableMap::COL_QTHDBTCTRY => 7, QuoteTableMap::COL_QTHDBTCITY => 8, QuoteTableMap::COL_QTHDBTSTAT => 9, QuoteTableMap::COL_QTHDBTZIPCODE => 10, QuoteTableMap::COL_ARSTSHIPID => 11, QuoteTableMap::COL_QTHDSTNAME => 12, QuoteTableMap::COL_QTHDSTADR1 => 13, QuoteTableMap::COL_QTHDSTADR2 => 14, QuoteTableMap::COL_QTHDSTADR3 => 15, QuoteTableMap::COL_QTHDSTCTRY => 16, QuoteTableMap::COL_QTHDSTCITY => 17, QuoteTableMap::COL_QTHDSTSTAT => 18, QuoteTableMap::COL_QTHDSTZIPCODE => 19, QuoteTableMap::COL_QTHDCONT => 20, QuoteTableMap::COL_QTHDTELEINTL => 21, QuoteTableMap::COL_QTHDTELENBR => 22, QuoteTableMap::COL_QTHDTELEEXT => 23, QuoteTableMap::COL_QTHDFAXINTL => 24, QuoteTableMap::COL_QTHDFAXNBR => 25, QuoteTableMap::COL_QTHDQUOTDATE => 26, QuoteTableMap::COL_QTHDREVDATE => 27, QuoteTableMap::COL_QTHDEXPDATE => 28, QuoteTableMap::COL_ARTBPRICCODE => 29, QuoteTableMap::COL_ARTBMTAXCODE => 30, QuoteTableMap::COL_ARTMTERMCD => 31, QuoteTableMap::COL_ARTBSHIPVIA => 32, QuoteTableMap::COL_ARSPSALEPER1 => 33, QuoteTableMap::COL_QTHDSP1PCT => 34, QuoteTableMap::COL_ARSPSALEPER2 => 35, QuoteTableMap::COL_QTHDSP2PCT => 36, QuoteTableMap::COL_ARSPSALEPER3 => 37, QuoteTableMap::COL_QTHDSP3PCT => 38, QuoteTableMap::COL_QTHDEXCHCTRY => 39, QuoteTableMap::COL_QTHDEXCHRATE => 40, QuoteTableMap::COL_QTHDTAXSUB => 41, QuoteTableMap::COL_QTHDNONTAXSUB => 42, QuoteTableMap::COL_QTHDTAXTOT => 43, QuoteTableMap::COL_QTHDFRTTOT => 44, QuoteTableMap::COL_QTHDMISCTOT => 45, QuoteTableMap::COL_QTHDORDRTOT => 46, QuoteTableMap::COL_QTHDCOSTTOT => 47, QuoteTableMap::COL_QTHDWGHTTOT => 48, QuoteTableMap::COL_QTHDOLDSYSQTNBR => 49, QuoteTableMap::COL_QTHDFOB => 50, QuoteTableMap::COL_QTHDDELIVERYDESC => 51, QuoteTableMap::COL_QTHDORDERCNT => 52, QuoteTableMap::COL_QTHDLASTORDER => 53, QuoteTableMap::COL_INTBWHSE => 54, QuoteTableMap::COL_QTHDCUSTPO => 55, QuoteTableMap::COL_QTHDEMAILADDR => 56, QuoteTableMap::COL_QTHDENTEREDBY => 57, QuoteTableMap::COL_QTHDENTEREDDATE => 58, QuoteTableMap::COL_QTHDENTEREDTIME => 59, QuoteTableMap::COL_QTHDPRINTFORMAT => 60, QuoteTableMap::COL_QTHDPROJECTID => 61, QuoteTableMap::COL_QTHDREVTIME => 62, QuoteTableMap::COL_QTHDREF => 63, QuoteTableMap::COL_QTHDCAREOF => 64, QuoteTableMap::COL_DATEUPDTD => 65, QuoteTableMap::COL_TIMEUPDTD => 66, QuoteTableMap::COL_DUMMY => 67, ),
        self::TYPE_FIELDNAME     => array('QthdId' => 0, 'QthdStat' => 1, 'ArcuCustId' => 2, 'QthdBtName' => 3, 'QthdBtAdr1' => 4, 'QthdBtAdr2' => 5, 'QthdBtAdr3' => 6, 'QthdBtCtry' => 7, 'QthdBtCity' => 8, 'QthdBtStat' => 9, 'QthdBtZipCode' => 10, 'ArstShipId' => 11, 'QthdStName' => 12, 'QthdStAdr1' => 13, 'QthdStAdr2' => 14, 'QthdStAdr3' => 15, 'QthdStCtry' => 16, 'QthdStCity' => 17, 'QthdStStat' => 18, 'QthdStZipCode' => 19, 'QthdCont' => 20, 'QthdTeleIntl' => 21, 'QthdTeleNbr' => 22, 'QthdTeleExt' => 23, 'QthdFaxIntl' => 24, 'QthdFaxNbr' => 25, 'QthdQuotDate' => 26, 'QthdRevDate' => 27, 'QthdExpDate' => 28, 'ArtbPricCode' => 29, 'ArtbMtaxCode' => 30, 'ArtmTermCd' => 31, 'ArtbShipVia' => 32, 'ArspSalePer1' => 33, 'QthdSp1Pct' => 34, 'ArspSalePer2' => 35, 'QthdSp2Pct' => 36, 'ArspSalePer3' => 37, 'QthdSp3Pct' => 38, 'QthdExchCtry' => 39, 'QthdExchRate' => 40, 'QthdTaxSub' => 41, 'QthdNonTaxSub' => 42, 'QthdTaxTot' => 43, 'QthdFrtTot' => 44, 'QthdMiscTot' => 45, 'QthdOrdrTot' => 46, 'QthdCostTot' => 47, 'QthdWghtTot' => 48, 'QthdOldSysQtNbr' => 49, 'QthdFob' => 50, 'QthdDeliveryDesc' => 51, 'QthdOrderCnt' => 52, 'QthdLastOrder' => 53, 'IntbWhse' => 54, 'QthdCustPo' => 55, 'QthdEmailAddr' => 56, 'QthdEnteredBy' => 57, 'QthdEnteredDate' => 58, 'QthdEnteredTime' => 59, 'QthdPrintFormat' => 60, 'QthdProjectId' => 61, 'QthdRevTime' => 62, 'QthdRef' => 63, 'QthdCareOf' => 64, 'DateUpdtd' => 65, 'TimeUpdtd' => 66, 'dummy' => 67, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, )
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
        $this->setName('quote_header');
        $this->setPhpName('Quote');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Quote');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QthdId', 'Qthdid', 'VARCHAR', true, 8, '');
        $this->addColumn('QthdStat', 'Qthdstat', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCustId', 'Arcucustid', 'VARCHAR', false, 6, null);
        $this->addColumn('QthdBtName', 'Qthdbtname', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdBtAdr1', 'Qthdbtadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdBtAdr2', 'Qthdbtadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdBtAdr3', 'Qthdbtadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdBtCtry', 'Qthdbtctry', 'VARCHAR', false, 4, null);
        $this->addColumn('QthdBtCity', 'Qthdbtcity', 'VARCHAR', false, 16, null);
        $this->addColumn('QthdBtStat', 'Qthdbtstat', 'VARCHAR', false, 2, null);
        $this->addColumn('QthdBtZipCode', 'Qthdbtzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('ArstShipId', 'Arstshipid', 'VARCHAR', false, 6, null);
        $this->addColumn('QthdStName', 'Qthdstname', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdStAdr1', 'Qthdstadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdStAdr2', 'Qthdstadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdStAdr3', 'Qthdstadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('QthdStCtry', 'Qthdstctry', 'VARCHAR', false, 4, null);
        $this->addColumn('QthdStCity', 'Qthdstcity', 'VARCHAR', false, 16, null);
        $this->addColumn('QthdStStat', 'Qthdststat', 'VARCHAR', false, 2, null);
        $this->addColumn('QthdStZipCode', 'Qthdstzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('QthdCont', 'Qthdcont', 'VARCHAR', false, 20, null);
        $this->addColumn('QthdTeleIntl', 'Qthdteleintl', 'VARCHAR', false, 1, null);
        $this->addColumn('QthdTeleNbr', 'Qthdtelenbr', 'VARCHAR', false, 22, null);
        $this->addColumn('QthdTeleExt', 'Qthdteleext', 'VARCHAR', false, 7, null);
        $this->addColumn('QthdFaxIntl', 'Qthdfaxintl', 'VARCHAR', false, 1, null);
        $this->addColumn('QthdFaxNbr', 'Qthdfaxnbr', 'VARCHAR', false, 22, null);
        $this->addColumn('QthdQuotDate', 'Qthdquotdate', 'VARCHAR', false, 8, null);
        $this->addColumn('QthdRevDate', 'Qthdrevdate', 'VARCHAR', false, 8, null);
        $this->addColumn('QthdExpDate', 'Qthdexpdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArtbPricCode', 'Artbpriccode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', false, 4, null);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', false, 6, null);
        $this->addColumn('QthdSp1Pct', 'Qthdsp1pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('QthdSp2Pct', 'Qthdsp2pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('QthdSp3Pct', 'Qthdsp3pct', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdExchCtry', 'Qthdexchctry', 'VARCHAR', false, 4, null);
        $this->addColumn('QthdExchRate', 'Qthdexchrate', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdTaxSub', 'Qthdtaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdNonTaxSub', 'Qthdnontaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdTaxTot', 'Qthdtaxtot', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdFrtTot', 'Qthdfrttot', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdMiscTot', 'Qthdmisctot', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdOrdrTot', 'Qthdordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdCostTot', 'Qthdcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdWghtTot', 'Qthdwghttot', 'DECIMAL', false, 20, null);
        $this->addColumn('QthdOldSysQtNbr', 'Qthdoldsysqtnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('QthdFob', 'Qthdfob', 'VARCHAR', false, 1, null);
        $this->addColumn('QthdDeliveryDesc', 'Qthddeliverydesc', 'VARCHAR', false, 20, null);
        $this->addColumn('QthdOrderCnt', 'Qthdordercnt', 'INTEGER', false, 4, null);
        $this->addColumn('QthdLastOrder', 'Qthdlastorder', 'VARCHAR', false, 8, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('QthdCustPo', 'Qthdcustpo', 'VARCHAR', false, 20, null);
        $this->addColumn('QthdEmailAddr', 'Qthdemailaddr', 'VARCHAR', false, 50, null);
        $this->addColumn('QthdEnteredBy', 'Qthdenteredby', 'VARCHAR', false, 8, null);
        $this->addColumn('QthdEnteredDate', 'Qthdentereddate', 'VARCHAR', false, 8, null);
        $this->addColumn('QthdEnteredTime', 'Qthdenteredtime', 'VARCHAR', false, 4, null);
        $this->addColumn('QthdPrintFormat', 'Qthdprintformat', 'VARCHAR', false, 1, null);
        $this->addColumn('QthdProjectId', 'Qthdprojectid', 'VARCHAR', false, 20, null);
        $this->addColumn('QthdRevTime', 'Qthdrevtime', 'VARCHAR', false, 4, null);
        $this->addColumn('QthdRef', 'Qthdref', 'VARCHAR', false, 20, null);
        $this->addColumn('QthdCareOf', 'Qthdcareof', 'VARCHAR', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('QuoteDetail', '\\QuoteDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':QthdId',
    1 => ':QthdId',
  ),
), null, null, 'QuoteDetails', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? QuoteTableMap::CLASS_DEFAULT : QuoteTableMap::OM_CLASS;
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
     * @return array           (Quote object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = QuoteTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = QuoteTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + QuoteTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QuoteTableMap::OM_CLASS;
            /** @var Quote $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            QuoteTableMap::addInstanceToPool($obj, $key);
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
            $key = QuoteTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = QuoteTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Quote $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QuoteTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDID);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTAT);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTNAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTADR1);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTADR2);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTADR3);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTCTRY);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTCITY);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTSTAT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDBTZIPCODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTNAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTADR1);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTADR2);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTADR3);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTCTRY);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTCITY);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTSTAT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSTZIPCODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDCONT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDTELEINTL);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDTELENBR);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDTELEEXT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDFAXINTL);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDFAXNBR);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDQUOTDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDREVDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDEXPDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARTBPRICCODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSP1PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSP2PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDSP3PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDEXCHCTRY);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDEXCHRATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDTAXSUB);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDNONTAXSUB);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDTAXTOT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDFRTTOT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDMISCTOT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDORDRTOT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDCOSTTOT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDWGHTTOT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDOLDSYSQTNBR);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDFOB);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDDELIVERYDESC);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDORDERCNT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDLASTORDER);
            $criteria->addSelectColumn(QuoteTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDCUSTPO);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDEMAILADDR);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDENTEREDBY);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDENTEREDDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDENTEREDTIME);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDPRINTFORMAT);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDPROJECTID);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDREVTIME);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDREF);
            $criteria->addSelectColumn(QuoteTableMap::COL_QTHDCAREOF);
            $criteria->addSelectColumn(QuoteTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(QuoteTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(QuoteTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QthdId');
            $criteria->addSelectColumn($alias . '.QthdStat');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.QthdBtName');
            $criteria->addSelectColumn($alias . '.QthdBtAdr1');
            $criteria->addSelectColumn($alias . '.QthdBtAdr2');
            $criteria->addSelectColumn($alias . '.QthdBtAdr3');
            $criteria->addSelectColumn($alias . '.QthdBtCtry');
            $criteria->addSelectColumn($alias . '.QthdBtCity');
            $criteria->addSelectColumn($alias . '.QthdBtStat');
            $criteria->addSelectColumn($alias . '.QthdBtZipCode');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.QthdStName');
            $criteria->addSelectColumn($alias . '.QthdStAdr1');
            $criteria->addSelectColumn($alias . '.QthdStAdr2');
            $criteria->addSelectColumn($alias . '.QthdStAdr3');
            $criteria->addSelectColumn($alias . '.QthdStCtry');
            $criteria->addSelectColumn($alias . '.QthdStCity');
            $criteria->addSelectColumn($alias . '.QthdStStat');
            $criteria->addSelectColumn($alias . '.QthdStZipCode');
            $criteria->addSelectColumn($alias . '.QthdCont');
            $criteria->addSelectColumn($alias . '.QthdTeleIntl');
            $criteria->addSelectColumn($alias . '.QthdTeleNbr');
            $criteria->addSelectColumn($alias . '.QthdTeleExt');
            $criteria->addSelectColumn($alias . '.QthdFaxIntl');
            $criteria->addSelectColumn($alias . '.QthdFaxNbr');
            $criteria->addSelectColumn($alias . '.QthdQuotDate');
            $criteria->addSelectColumn($alias . '.QthdRevDate');
            $criteria->addSelectColumn($alias . '.QthdExpDate');
            $criteria->addSelectColumn($alias . '.ArtbPricCode');
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.QthdSp1Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.QthdSp2Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.QthdSp3Pct');
            $criteria->addSelectColumn($alias . '.QthdExchCtry');
            $criteria->addSelectColumn($alias . '.QthdExchRate');
            $criteria->addSelectColumn($alias . '.QthdTaxSub');
            $criteria->addSelectColumn($alias . '.QthdNonTaxSub');
            $criteria->addSelectColumn($alias . '.QthdTaxTot');
            $criteria->addSelectColumn($alias . '.QthdFrtTot');
            $criteria->addSelectColumn($alias . '.QthdMiscTot');
            $criteria->addSelectColumn($alias . '.QthdOrdrTot');
            $criteria->addSelectColumn($alias . '.QthdCostTot');
            $criteria->addSelectColumn($alias . '.QthdWghtTot');
            $criteria->addSelectColumn($alias . '.QthdOldSysQtNbr');
            $criteria->addSelectColumn($alias . '.QthdFob');
            $criteria->addSelectColumn($alias . '.QthdDeliveryDesc');
            $criteria->addSelectColumn($alias . '.QthdOrderCnt');
            $criteria->addSelectColumn($alias . '.QthdLastOrder');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.QthdCustPo');
            $criteria->addSelectColumn($alias . '.QthdEmailAddr');
            $criteria->addSelectColumn($alias . '.QthdEnteredBy');
            $criteria->addSelectColumn($alias . '.QthdEnteredDate');
            $criteria->addSelectColumn($alias . '.QthdEnteredTime');
            $criteria->addSelectColumn($alias . '.QthdPrintFormat');
            $criteria->addSelectColumn($alias . '.QthdProjectId');
            $criteria->addSelectColumn($alias . '.QthdRevTime');
            $criteria->addSelectColumn($alias . '.QthdRef');
            $criteria->addSelectColumn($alias . '.QthdCareOf');
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
        return Propel::getServiceContainer()->getDatabaseMap(QuoteTableMap::DATABASE_NAME)->getTable(QuoteTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(QuoteTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(QuoteTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new QuoteTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Quote or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Quote object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Quote) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QuoteTableMap::DATABASE_NAME);
            $criteria->add(QuoteTableMap::COL_QTHDID, (array) $values, Criteria::IN);
        }

        $query = QuoteQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            QuoteTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                QuoteTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the quote_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return QuoteQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Quote or Criteria object.
     *
     * @param mixed               $criteria Criteria or Quote object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Quote object
        }


        // Set the correct dbName
        $query = QuoteQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // QuoteTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
QuoteTableMap::buildTableMap();
