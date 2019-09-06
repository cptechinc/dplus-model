<?php

namespace Map;

use \TermsCode;
use \TermsCodeQuery;
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
 * This class defines the structure of the 'ar_term_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TermsCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TermsCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_term_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TermsCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TermsCode';

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
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'ar_term_code.ArtmTermCd';

    /**
     * the column name for the ArtmTermDesc field
     */
    const COL_ARTMTERMDESC = 'ar_term_code.ArtmTermDesc';

    /**
     * the column name for the ArtmMethod field
     */
    const COL_ARTMMETHOD = 'ar_term_code.ArtmMethod';

    /**
     * the column name for the ArtmType field
     */
    const COL_ARTMTYPE = 'ar_term_code.ArtmType';

    /**
     * the column name for the ArtmHold field
     */
    const COL_ARTMHOLD = 'ar_term_code.ArtmHold';

    /**
     * the column name for the ArtmExpireDate field
     */
    const COL_ARTMEXPIREDATE = 'ar_term_code.ArtmExpireDate';

    /**
     * the column name for the ArtmFrtAllow field
     */
    const COL_ARTMFRTALLOW = 'ar_term_code.ArtmFrtAllow';

    /**
     * the column name for the ArtmCcPrefix field
     */
    const COL_ARTMCCPREFIX = 'ar_term_code.ArtmCcPrefix';

    /**
     * the column name for the ArtmSplit1 field
     */
    const COL_ARTMSPLIT1 = 'ar_term_code.ArtmSplit1';

    /**
     * the column name for the ArtmOrderPct1 field
     */
    const COL_ARTMORDERPCT1 = 'ar_term_code.ArtmOrderPct1';

    /**
     * the column name for the ArtmDiscPct1 field
     */
    const COL_ARTMDISCPCT1 = 'ar_term_code.ArtmDiscPct1';

    /**
     * the column name for the ArtmDiscDays1 field
     */
    const COL_ARTMDISCDAYS1 = 'ar_term_code.ArtmDiscDays1';

    /**
     * the column name for the ArtmDiscDay1 field
     */
    const COL_ARTMDISCDAY1 = 'ar_term_code.ArtmDiscDay1';

    /**
     * the column name for the ArtmDiscDate1 field
     */
    const COL_ARTMDISCDATE1 = 'ar_term_code.ArtmDiscDate1';

    /**
     * the column name for the ArtmDueDays1 field
     */
    const COL_ARTMDUEDAYS1 = 'ar_term_code.ArtmDueDays1';

    /**
     * the column name for the ArtmDueDay1 field
     */
    const COL_ARTMDUEDAY1 = 'ar_term_code.ArtmDueDay1';

    /**
     * the column name for the ArtmPlusMonths1 field
     */
    const COL_ARTMPLUSMONTHS1 = 'ar_term_code.ArtmPlusMonths1';

    /**
     * the column name for the ArtmDueDate1 field
     */
    const COL_ARTMDUEDATE1 = 'ar_term_code.ArtmDueDate1';

    /**
     * the column name for the ArtmPlusYear1 field
     */
    const COL_ARTMPLUSYEAR1 = 'ar_term_code.ArtmPlusYear1';

    /**
     * the column name for the ArtmSplit2 field
     */
    const COL_ARTMSPLIT2 = 'ar_term_code.ArtmSplit2';

    /**
     * the column name for the ArtmOrderPct2 field
     */
    const COL_ARTMORDERPCT2 = 'ar_term_code.ArtmOrderPct2';

    /**
     * the column name for the ArtmDiscPct2 field
     */
    const COL_ARTMDISCPCT2 = 'ar_term_code.ArtmDiscPct2';

    /**
     * the column name for the ArtmDiscDays2 field
     */
    const COL_ARTMDISCDAYS2 = 'ar_term_code.ArtmDiscDays2';

    /**
     * the column name for the ArtmDiscDay2 field
     */
    const COL_ARTMDISCDAY2 = 'ar_term_code.ArtmDiscDay2';

    /**
     * the column name for the ArtmDiscDate2 field
     */
    const COL_ARTMDISCDATE2 = 'ar_term_code.ArtmDiscDate2';

    /**
     * the column name for the ArtmDueDays2 field
     */
    const COL_ARTMDUEDAYS2 = 'ar_term_code.ArtmDueDays2';

    /**
     * the column name for the ArtmDueDay2 field
     */
    const COL_ARTMDUEDAY2 = 'ar_term_code.ArtmDueDay2';

    /**
     * the column name for the ArtmPlusMonths2 field
     */
    const COL_ARTMPLUSMONTHS2 = 'ar_term_code.ArtmPlusMonths2';

    /**
     * the column name for the ArtmDueDate2 field
     */
    const COL_ARTMDUEDATE2 = 'ar_term_code.ArtmDueDate2';

    /**
     * the column name for the ArtmPlusYear2 field
     */
    const COL_ARTMPLUSYEAR2 = 'ar_term_code.ArtmPlusYear2';

    /**
     * the column name for the ArtmSplit3 field
     */
    const COL_ARTMSPLIT3 = 'ar_term_code.ArtmSplit3';

    /**
     * the column name for the ArtmOrderPct3 field
     */
    const COL_ARTMORDERPCT3 = 'ar_term_code.ArtmOrderPct3';

    /**
     * the column name for the ArtmDiscPct3 field
     */
    const COL_ARTMDISCPCT3 = 'ar_term_code.ArtmDiscPct3';

    /**
     * the column name for the ArtmDiscDays3 field
     */
    const COL_ARTMDISCDAYS3 = 'ar_term_code.ArtmDiscDays3';

    /**
     * the column name for the ArtmDiscDay3 field
     */
    const COL_ARTMDISCDAY3 = 'ar_term_code.ArtmDiscDay3';

    /**
     * the column name for the ArtmDiscDate3 field
     */
    const COL_ARTMDISCDATE3 = 'ar_term_code.ArtmDiscDate3';

    /**
     * the column name for the ArtmDueDays3 field
     */
    const COL_ARTMDUEDAYS3 = 'ar_term_code.ArtmDueDays3';

    /**
     * the column name for the ArtmDueDay3 field
     */
    const COL_ARTMDUEDAY3 = 'ar_term_code.ArtmDueDay3';

    /**
     * the column name for the ArtmPlusMonths3 field
     */
    const COL_ARTMPLUSMONTHS3 = 'ar_term_code.ArtmPlusMonths3';

    /**
     * the column name for the ArtmDueDate3 field
     */
    const COL_ARTMDUEDATE3 = 'ar_term_code.ArtmDueDate3';

    /**
     * the column name for the ArtmPlusYear3 field
     */
    const COL_ARTMPLUSYEAR3 = 'ar_term_code.ArtmPlusYear3';

    /**
     * the column name for the ArtmSplit4 field
     */
    const COL_ARTMSPLIT4 = 'ar_term_code.ArtmSplit4';

    /**
     * the column name for the ArtmOrderPct4 field
     */
    const COL_ARTMORDERPCT4 = 'ar_term_code.ArtmOrderPct4';

    /**
     * the column name for the ArtmDiscPct4 field
     */
    const COL_ARTMDISCPCT4 = 'ar_term_code.ArtmDiscPct4';

    /**
     * the column name for the ArtmDiscDays4 field
     */
    const COL_ARTMDISCDAYS4 = 'ar_term_code.ArtmDiscDays4';

    /**
     * the column name for the ArtmDiscDay4 field
     */
    const COL_ARTMDISCDAY4 = 'ar_term_code.ArtmDiscDay4';

    /**
     * the column name for the ArtmDiscDate4 field
     */
    const COL_ARTMDISCDATE4 = 'ar_term_code.ArtmDiscDate4';

    /**
     * the column name for the ArtmDueDays4 field
     */
    const COL_ARTMDUEDAYS4 = 'ar_term_code.ArtmDueDays4';

    /**
     * the column name for the ArtmDueDay4 field
     */
    const COL_ARTMDUEDAY4 = 'ar_term_code.ArtmDueDay4';

    /**
     * the column name for the ArtmPlusMonths4 field
     */
    const COL_ARTMPLUSMONTHS4 = 'ar_term_code.ArtmPlusMonths4';

    /**
     * the column name for the ArtmDueDate4 field
     */
    const COL_ARTMDUEDATE4 = 'ar_term_code.ArtmDueDate4';

    /**
     * the column name for the ArtmPlusYear4 field
     */
    const COL_ARTMPLUSYEAR4 = 'ar_term_code.ArtmPlusYear4';

    /**
     * the column name for the ArtmSplit5 field
     */
    const COL_ARTMSPLIT5 = 'ar_term_code.ArtmSplit5';

    /**
     * the column name for the ArtmOrderPct5 field
     */
    const COL_ARTMORDERPCT5 = 'ar_term_code.ArtmOrderPct5';

    /**
     * the column name for the ArtmDiscPct5 field
     */
    const COL_ARTMDISCPCT5 = 'ar_term_code.ArtmDiscPct5';

    /**
     * the column name for the ArtmDiscDays5 field
     */
    const COL_ARTMDISCDAYS5 = 'ar_term_code.ArtmDiscDays5';

    /**
     * the column name for the ArtmDiscDay5 field
     */
    const COL_ARTMDISCDAY5 = 'ar_term_code.ArtmDiscDay5';

    /**
     * the column name for the ArtmDiscDate5 field
     */
    const COL_ARTMDISCDATE5 = 'ar_term_code.ArtmDiscDate5';

    /**
     * the column name for the ArtmDueDays5 field
     */
    const COL_ARTMDUEDAYS5 = 'ar_term_code.ArtmDueDays5';

    /**
     * the column name for the ArtmDueDay5 field
     */
    const COL_ARTMDUEDAY5 = 'ar_term_code.ArtmDueDay5';

    /**
     * the column name for the ArtmPlusMonths5 field
     */
    const COL_ARTMPLUSMONTHS5 = 'ar_term_code.ArtmPlusMonths5';

    /**
     * the column name for the ArtmDueDate5 field
     */
    const COL_ARTMDUEDATE5 = 'ar_term_code.ArtmDueDate5';

    /**
     * the column name for the ArtmPlusYear5 field
     */
    const COL_ARTMPLUSYEAR5 = 'ar_term_code.ArtmPlusYear5';

    /**
     * the column name for the ArtmSplit6 field
     */
    const COL_ARTMSPLIT6 = 'ar_term_code.ArtmSplit6';

    /**
     * the column name for the ArtmOrderPct6 field
     */
    const COL_ARTMORDERPCT6 = 'ar_term_code.ArtmOrderPct6';

    /**
     * the column name for the ArtmDiscPct6 field
     */
    const COL_ARTMDISCPCT6 = 'ar_term_code.ArtmDiscPct6';

    /**
     * the column name for the ArtmDiscDays6 field
     */
    const COL_ARTMDISCDAYS6 = 'ar_term_code.ArtmDiscDays6';

    /**
     * the column name for the ArtmDiscDay6 field
     */
    const COL_ARTMDISCDAY6 = 'ar_term_code.ArtmDiscDay6';

    /**
     * the column name for the ArtmDiscDate6 field
     */
    const COL_ARTMDISCDATE6 = 'ar_term_code.ArtmDiscDate6';

    /**
     * the column name for the ArtmDueDays6 field
     */
    const COL_ARTMDUEDAYS6 = 'ar_term_code.ArtmDueDays6';

    /**
     * the column name for the ArtmDueDay6 field
     */
    const COL_ARTMDUEDAY6 = 'ar_term_code.ArtmDueDay6';

    /**
     * the column name for the ArtmPlusMonths6 field
     */
    const COL_ARTMPLUSMONTHS6 = 'ar_term_code.ArtmPlusMonths6';

    /**
     * the column name for the ArtmDueDate6 field
     */
    const COL_ARTMDUEDATE6 = 'ar_term_code.ArtmDueDate6';

    /**
     * the column name for the ArtmPlusYear6 field
     */
    const COL_ARTMPLUSYEAR6 = 'ar_term_code.ArtmPlusYear6';

    /**
     * the column name for the ArtmDayFrom1 field
     */
    const COL_ARTMDAYFROM1 = 'ar_term_code.ArtmDayFrom1';

    /**
     * the column name for the ArtmDayThru1 field
     */
    const COL_ARTMDAYTHRU1 = 'ar_term_code.ArtmDayThru1';

    /**
     * the column name for the ArtmEomDiscPct1 field
     */
    const COL_ARTMEOMDISCPCT1 = 'ar_term_code.ArtmEomDiscPct1';

    /**
     * the column name for the ArtmEomDiscDay1 field
     */
    const COL_ARTMEOMDISCDAY1 = 'ar_term_code.ArtmEomDiscDay1';

    /**
     * the column name for the ArtmEomDiscMonths1 field
     */
    const COL_ARTMEOMDISCMONTHS1 = 'ar_term_code.ArtmEomDiscMonths1';

    /**
     * the column name for the ArtmEomDueDay1 field
     */
    const COL_ARTMEOMDUEDAY1 = 'ar_term_code.ArtmEomDueDay1';

    /**
     * the column name for the ArtmEomPlusMonths1 field
     */
    const COL_ARTMEOMPLUSMONTHS1 = 'ar_term_code.ArtmEomPlusMonths1';

    /**
     * the column name for the ArtmDayFrom2 field
     */
    const COL_ARTMDAYFROM2 = 'ar_term_code.ArtmDayFrom2';

    /**
     * the column name for the ArtmDayThru2 field
     */
    const COL_ARTMDAYTHRU2 = 'ar_term_code.ArtmDayThru2';

    /**
     * the column name for the ArtmEomDiscPct2 field
     */
    const COL_ARTMEOMDISCPCT2 = 'ar_term_code.ArtmEomDiscPct2';

    /**
     * the column name for the ArtmEomDiscDay2 field
     */
    const COL_ARTMEOMDISCDAY2 = 'ar_term_code.ArtmEomDiscDay2';

    /**
     * the column name for the ArtmEomDiscMonths2 field
     */
    const COL_ARTMEOMDISCMONTHS2 = 'ar_term_code.ArtmEomDiscMonths2';

    /**
     * the column name for the ArtmEomDueDay2 field
     */
    const COL_ARTMEOMDUEDAY2 = 'ar_term_code.ArtmEomDueDay2';

    /**
     * the column name for the ArtmEomPlusMonths2 field
     */
    const COL_ARTMEOMPLUSMONTHS2 = 'ar_term_code.ArtmEomPlusMonths2';

    /**
     * the column name for the ArtmDayFrom3 field
     */
    const COL_ARTMDAYFROM3 = 'ar_term_code.ArtmDayFrom3';

    /**
     * the column name for the ArtmDayThru3 field
     */
    const COL_ARTMDAYTHRU3 = 'ar_term_code.ArtmDayThru3';

    /**
     * the column name for the ArtmEomDiscPct3 field
     */
    const COL_ARTMEOMDISCPCT3 = 'ar_term_code.ArtmEomDiscPct3';

    /**
     * the column name for the ArtmEomDiscDay3 field
     */
    const COL_ARTMEOMDISCDAY3 = 'ar_term_code.ArtmEomDiscDay3';

    /**
     * the column name for the ArtmEomDiscMonths3 field
     */
    const COL_ARTMEOMDISCMONTHS3 = 'ar_term_code.ArtmEomDiscMonths3';

    /**
     * the column name for the ArtmEomDueDay3 field
     */
    const COL_ARTMEOMDUEDAY3 = 'ar_term_code.ArtmEomDueDay3';

    /**
     * the column name for the ArtmEomPlusMonths3 field
     */
    const COL_ARTMEOMPLUSMONTHS3 = 'ar_term_code.ArtmEomPlusMonths3';

    /**
     * the column name for the ArtmCtry field
     */
    const COL_ARTMCTRY = 'ar_term_code.ArtmCtry';

    /**
     * the column name for the ArtmTermGrup field
     */
    const COL_ARTMTERMGRUP = 'ar_term_code.ArtmTermGrup';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_term_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_term_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_term_code.dummy';

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
        self::TYPE_PHPNAME       => array('Artmtermcd', 'Artmtermdesc', 'Artmmethod', 'Artmtype', 'Artmhold', 'Artmexpiredate', 'Artmfrtallow', 'Artmccprefix', 'Artmsplit1', 'Artmorderpct1', 'Artmdiscpct1', 'Artmdiscdays1', 'Artmdiscday1', 'Artmdiscdate1', 'Artmduedays1', 'Artmdueday1', 'Artmplusmonths1', 'Artmduedate1', 'Artmplusyear1', 'Artmsplit2', 'Artmorderpct2', 'Artmdiscpct2', 'Artmdiscdays2', 'Artmdiscday2', 'Artmdiscdate2', 'Artmduedays2', 'Artmdueday2', 'Artmplusmonths2', 'Artmduedate2', 'Artmplusyear2', 'Artmsplit3', 'Artmorderpct3', 'Artmdiscpct3', 'Artmdiscdays3', 'Artmdiscday3', 'Artmdiscdate3', 'Artmduedays3', 'Artmdueday3', 'Artmplusmonths3', 'Artmduedate3', 'Artmplusyear3', 'Artmsplit4', 'Artmorderpct4', 'Artmdiscpct4', 'Artmdiscdays4', 'Artmdiscday4', 'Artmdiscdate4', 'Artmduedays4', 'Artmdueday4', 'Artmplusmonths4', 'Artmduedate4', 'Artmplusyear4', 'Artmsplit5', 'Artmorderpct5', 'Artmdiscpct5', 'Artmdiscdays5', 'Artmdiscday5', 'Artmdiscdate5', 'Artmduedays5', 'Artmdueday5', 'Artmplusmonths5', 'Artmduedate5', 'Artmplusyear5', 'Artmsplit6', 'Artmorderpct6', 'Artmdiscpct6', 'Artmdiscdays6', 'Artmdiscday6', 'Artmdiscdate6', 'Artmduedays6', 'Artmdueday6', 'Artmplusmonths6', 'Artmduedate6', 'Artmplusyear6', 'Artmdayfrom1', 'Artmdaythru1', 'Artmeomdiscpct1', 'Artmeomdiscday1', 'Artmeomdiscmonths1', 'Artmeomdueday1', 'Artmeomplusmonths1', 'Artmdayfrom2', 'Artmdaythru2', 'Artmeomdiscpct2', 'Artmeomdiscday2', 'Artmeomdiscmonths2', 'Artmeomdueday2', 'Artmeomplusmonths2', 'Artmdayfrom3', 'Artmdaythru3', 'Artmeomdiscpct3', 'Artmeomdiscday3', 'Artmeomdiscmonths3', 'Artmeomdueday3', 'Artmeomplusmonths3', 'Artmctry', 'Artmtermgrup', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('artmtermcd', 'artmtermdesc', 'artmmethod', 'artmtype', 'artmhold', 'artmexpiredate', 'artmfrtallow', 'artmccprefix', 'artmsplit1', 'artmorderpct1', 'artmdiscpct1', 'artmdiscdays1', 'artmdiscday1', 'artmdiscdate1', 'artmduedays1', 'artmdueday1', 'artmplusmonths1', 'artmduedate1', 'artmplusyear1', 'artmsplit2', 'artmorderpct2', 'artmdiscpct2', 'artmdiscdays2', 'artmdiscday2', 'artmdiscdate2', 'artmduedays2', 'artmdueday2', 'artmplusmonths2', 'artmduedate2', 'artmplusyear2', 'artmsplit3', 'artmorderpct3', 'artmdiscpct3', 'artmdiscdays3', 'artmdiscday3', 'artmdiscdate3', 'artmduedays3', 'artmdueday3', 'artmplusmonths3', 'artmduedate3', 'artmplusyear3', 'artmsplit4', 'artmorderpct4', 'artmdiscpct4', 'artmdiscdays4', 'artmdiscday4', 'artmdiscdate4', 'artmduedays4', 'artmdueday4', 'artmplusmonths4', 'artmduedate4', 'artmplusyear4', 'artmsplit5', 'artmorderpct5', 'artmdiscpct5', 'artmdiscdays5', 'artmdiscday5', 'artmdiscdate5', 'artmduedays5', 'artmdueday5', 'artmplusmonths5', 'artmduedate5', 'artmplusyear5', 'artmsplit6', 'artmorderpct6', 'artmdiscpct6', 'artmdiscdays6', 'artmdiscday6', 'artmdiscdate6', 'artmduedays6', 'artmdueday6', 'artmplusmonths6', 'artmduedate6', 'artmplusyear6', 'artmdayfrom1', 'artmdaythru1', 'artmeomdiscpct1', 'artmeomdiscday1', 'artmeomdiscmonths1', 'artmeomdueday1', 'artmeomplusmonths1', 'artmdayfrom2', 'artmdaythru2', 'artmeomdiscpct2', 'artmeomdiscday2', 'artmeomdiscmonths2', 'artmeomdueday2', 'artmeomplusmonths2', 'artmdayfrom3', 'artmdaythru3', 'artmeomdiscpct3', 'artmeomdiscday3', 'artmeomdiscmonths3', 'artmeomdueday3', 'artmeomplusmonths3', 'artmctry', 'artmtermgrup', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(TermsCodeTableMap::COL_ARTMTERMCD, TermsCodeTableMap::COL_ARTMTERMDESC, TermsCodeTableMap::COL_ARTMMETHOD, TermsCodeTableMap::COL_ARTMTYPE, TermsCodeTableMap::COL_ARTMHOLD, TermsCodeTableMap::COL_ARTMEXPIREDATE, TermsCodeTableMap::COL_ARTMFRTALLOW, TermsCodeTableMap::COL_ARTMCCPREFIX, TermsCodeTableMap::COL_ARTMSPLIT1, TermsCodeTableMap::COL_ARTMORDERPCT1, TermsCodeTableMap::COL_ARTMDISCPCT1, TermsCodeTableMap::COL_ARTMDISCDAYS1, TermsCodeTableMap::COL_ARTMDISCDAY1, TermsCodeTableMap::COL_ARTMDISCDATE1, TermsCodeTableMap::COL_ARTMDUEDAYS1, TermsCodeTableMap::COL_ARTMDUEDAY1, TermsCodeTableMap::COL_ARTMPLUSMONTHS1, TermsCodeTableMap::COL_ARTMDUEDATE1, TermsCodeTableMap::COL_ARTMPLUSYEAR1, TermsCodeTableMap::COL_ARTMSPLIT2, TermsCodeTableMap::COL_ARTMORDERPCT2, TermsCodeTableMap::COL_ARTMDISCPCT2, TermsCodeTableMap::COL_ARTMDISCDAYS2, TermsCodeTableMap::COL_ARTMDISCDAY2, TermsCodeTableMap::COL_ARTMDISCDATE2, TermsCodeTableMap::COL_ARTMDUEDAYS2, TermsCodeTableMap::COL_ARTMDUEDAY2, TermsCodeTableMap::COL_ARTMPLUSMONTHS2, TermsCodeTableMap::COL_ARTMDUEDATE2, TermsCodeTableMap::COL_ARTMPLUSYEAR2, TermsCodeTableMap::COL_ARTMSPLIT3, TermsCodeTableMap::COL_ARTMORDERPCT3, TermsCodeTableMap::COL_ARTMDISCPCT3, TermsCodeTableMap::COL_ARTMDISCDAYS3, TermsCodeTableMap::COL_ARTMDISCDAY3, TermsCodeTableMap::COL_ARTMDISCDATE3, TermsCodeTableMap::COL_ARTMDUEDAYS3, TermsCodeTableMap::COL_ARTMDUEDAY3, TermsCodeTableMap::COL_ARTMPLUSMONTHS3, TermsCodeTableMap::COL_ARTMDUEDATE3, TermsCodeTableMap::COL_ARTMPLUSYEAR3, TermsCodeTableMap::COL_ARTMSPLIT4, TermsCodeTableMap::COL_ARTMORDERPCT4, TermsCodeTableMap::COL_ARTMDISCPCT4, TermsCodeTableMap::COL_ARTMDISCDAYS4, TermsCodeTableMap::COL_ARTMDISCDAY4, TermsCodeTableMap::COL_ARTMDISCDATE4, TermsCodeTableMap::COL_ARTMDUEDAYS4, TermsCodeTableMap::COL_ARTMDUEDAY4, TermsCodeTableMap::COL_ARTMPLUSMONTHS4, TermsCodeTableMap::COL_ARTMDUEDATE4, TermsCodeTableMap::COL_ARTMPLUSYEAR4, TermsCodeTableMap::COL_ARTMSPLIT5, TermsCodeTableMap::COL_ARTMORDERPCT5, TermsCodeTableMap::COL_ARTMDISCPCT5, TermsCodeTableMap::COL_ARTMDISCDAYS5, TermsCodeTableMap::COL_ARTMDISCDAY5, TermsCodeTableMap::COL_ARTMDISCDATE5, TermsCodeTableMap::COL_ARTMDUEDAYS5, TermsCodeTableMap::COL_ARTMDUEDAY5, TermsCodeTableMap::COL_ARTMPLUSMONTHS5, TermsCodeTableMap::COL_ARTMDUEDATE5, TermsCodeTableMap::COL_ARTMPLUSYEAR5, TermsCodeTableMap::COL_ARTMSPLIT6, TermsCodeTableMap::COL_ARTMORDERPCT6, TermsCodeTableMap::COL_ARTMDISCPCT6, TermsCodeTableMap::COL_ARTMDISCDAYS6, TermsCodeTableMap::COL_ARTMDISCDAY6, TermsCodeTableMap::COL_ARTMDISCDATE6, TermsCodeTableMap::COL_ARTMDUEDAYS6, TermsCodeTableMap::COL_ARTMDUEDAY6, TermsCodeTableMap::COL_ARTMPLUSMONTHS6, TermsCodeTableMap::COL_ARTMDUEDATE6, TermsCodeTableMap::COL_ARTMPLUSYEAR6, TermsCodeTableMap::COL_ARTMDAYFROM1, TermsCodeTableMap::COL_ARTMDAYTHRU1, TermsCodeTableMap::COL_ARTMEOMDISCPCT1, TermsCodeTableMap::COL_ARTMEOMDISCDAY1, TermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, TermsCodeTableMap::COL_ARTMEOMDUEDAY1, TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, TermsCodeTableMap::COL_ARTMDAYFROM2, TermsCodeTableMap::COL_ARTMDAYTHRU2, TermsCodeTableMap::COL_ARTMEOMDISCPCT2, TermsCodeTableMap::COL_ARTMEOMDISCDAY2, TermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, TermsCodeTableMap::COL_ARTMEOMDUEDAY2, TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, TermsCodeTableMap::COL_ARTMDAYFROM3, TermsCodeTableMap::COL_ARTMDAYTHRU3, TermsCodeTableMap::COL_ARTMEOMDISCPCT3, TermsCodeTableMap::COL_ARTMEOMDISCDAY3, TermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, TermsCodeTableMap::COL_ARTMEOMDUEDAY3, TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, TermsCodeTableMap::COL_ARTMCTRY, TermsCodeTableMap::COL_ARTMTERMGRUP, TermsCodeTableMap::COL_DATEUPDTD, TermsCodeTableMap::COL_TIMEUPDTD, TermsCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArtmTermCd', 'ArtmTermDesc', 'ArtmMethod', 'ArtmType', 'ArtmHold', 'ArtmExpireDate', 'ArtmFrtAllow', 'ArtmCcPrefix', 'ArtmSplit1', 'ArtmOrderPct1', 'ArtmDiscPct1', 'ArtmDiscDays1', 'ArtmDiscDay1', 'ArtmDiscDate1', 'ArtmDueDays1', 'ArtmDueDay1', 'ArtmPlusMonths1', 'ArtmDueDate1', 'ArtmPlusYear1', 'ArtmSplit2', 'ArtmOrderPct2', 'ArtmDiscPct2', 'ArtmDiscDays2', 'ArtmDiscDay2', 'ArtmDiscDate2', 'ArtmDueDays2', 'ArtmDueDay2', 'ArtmPlusMonths2', 'ArtmDueDate2', 'ArtmPlusYear2', 'ArtmSplit3', 'ArtmOrderPct3', 'ArtmDiscPct3', 'ArtmDiscDays3', 'ArtmDiscDay3', 'ArtmDiscDate3', 'ArtmDueDays3', 'ArtmDueDay3', 'ArtmPlusMonths3', 'ArtmDueDate3', 'ArtmPlusYear3', 'ArtmSplit4', 'ArtmOrderPct4', 'ArtmDiscPct4', 'ArtmDiscDays4', 'ArtmDiscDay4', 'ArtmDiscDate4', 'ArtmDueDays4', 'ArtmDueDay4', 'ArtmPlusMonths4', 'ArtmDueDate4', 'ArtmPlusYear4', 'ArtmSplit5', 'ArtmOrderPct5', 'ArtmDiscPct5', 'ArtmDiscDays5', 'ArtmDiscDay5', 'ArtmDiscDate5', 'ArtmDueDays5', 'ArtmDueDay5', 'ArtmPlusMonths5', 'ArtmDueDate5', 'ArtmPlusYear5', 'ArtmSplit6', 'ArtmOrderPct6', 'ArtmDiscPct6', 'ArtmDiscDays6', 'ArtmDiscDay6', 'ArtmDiscDate6', 'ArtmDueDays6', 'ArtmDueDay6', 'ArtmPlusMonths6', 'ArtmDueDate6', 'ArtmPlusYear6', 'ArtmDayFrom1', 'ArtmDayThru1', 'ArtmEomDiscPct1', 'ArtmEomDiscDay1', 'ArtmEomDiscMonths1', 'ArtmEomDueDay1', 'ArtmEomPlusMonths1', 'ArtmDayFrom2', 'ArtmDayThru2', 'ArtmEomDiscPct2', 'ArtmEomDiscDay2', 'ArtmEomDiscMonths2', 'ArtmEomDueDay2', 'ArtmEomPlusMonths2', 'ArtmDayFrom3', 'ArtmDayThru3', 'ArtmEomDiscPct3', 'ArtmEomDiscDay3', 'ArtmEomDiscMonths3', 'ArtmEomDueDay3', 'ArtmEomPlusMonths3', 'ArtmCtry', 'ArtmTermGrup', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Artmtermcd' => 0, 'Artmtermdesc' => 1, 'Artmmethod' => 2, 'Artmtype' => 3, 'Artmhold' => 4, 'Artmexpiredate' => 5, 'Artmfrtallow' => 6, 'Artmccprefix' => 7, 'Artmsplit1' => 8, 'Artmorderpct1' => 9, 'Artmdiscpct1' => 10, 'Artmdiscdays1' => 11, 'Artmdiscday1' => 12, 'Artmdiscdate1' => 13, 'Artmduedays1' => 14, 'Artmdueday1' => 15, 'Artmplusmonths1' => 16, 'Artmduedate1' => 17, 'Artmplusyear1' => 18, 'Artmsplit2' => 19, 'Artmorderpct2' => 20, 'Artmdiscpct2' => 21, 'Artmdiscdays2' => 22, 'Artmdiscday2' => 23, 'Artmdiscdate2' => 24, 'Artmduedays2' => 25, 'Artmdueday2' => 26, 'Artmplusmonths2' => 27, 'Artmduedate2' => 28, 'Artmplusyear2' => 29, 'Artmsplit3' => 30, 'Artmorderpct3' => 31, 'Artmdiscpct3' => 32, 'Artmdiscdays3' => 33, 'Artmdiscday3' => 34, 'Artmdiscdate3' => 35, 'Artmduedays3' => 36, 'Artmdueday3' => 37, 'Artmplusmonths3' => 38, 'Artmduedate3' => 39, 'Artmplusyear3' => 40, 'Artmsplit4' => 41, 'Artmorderpct4' => 42, 'Artmdiscpct4' => 43, 'Artmdiscdays4' => 44, 'Artmdiscday4' => 45, 'Artmdiscdate4' => 46, 'Artmduedays4' => 47, 'Artmdueday4' => 48, 'Artmplusmonths4' => 49, 'Artmduedate4' => 50, 'Artmplusyear4' => 51, 'Artmsplit5' => 52, 'Artmorderpct5' => 53, 'Artmdiscpct5' => 54, 'Artmdiscdays5' => 55, 'Artmdiscday5' => 56, 'Artmdiscdate5' => 57, 'Artmduedays5' => 58, 'Artmdueday5' => 59, 'Artmplusmonths5' => 60, 'Artmduedate5' => 61, 'Artmplusyear5' => 62, 'Artmsplit6' => 63, 'Artmorderpct6' => 64, 'Artmdiscpct6' => 65, 'Artmdiscdays6' => 66, 'Artmdiscday6' => 67, 'Artmdiscdate6' => 68, 'Artmduedays6' => 69, 'Artmdueday6' => 70, 'Artmplusmonths6' => 71, 'Artmduedate6' => 72, 'Artmplusyear6' => 73, 'Artmdayfrom1' => 74, 'Artmdaythru1' => 75, 'Artmeomdiscpct1' => 76, 'Artmeomdiscday1' => 77, 'Artmeomdiscmonths1' => 78, 'Artmeomdueday1' => 79, 'Artmeomplusmonths1' => 80, 'Artmdayfrom2' => 81, 'Artmdaythru2' => 82, 'Artmeomdiscpct2' => 83, 'Artmeomdiscday2' => 84, 'Artmeomdiscmonths2' => 85, 'Artmeomdueday2' => 86, 'Artmeomplusmonths2' => 87, 'Artmdayfrom3' => 88, 'Artmdaythru3' => 89, 'Artmeomdiscpct3' => 90, 'Artmeomdiscday3' => 91, 'Artmeomdiscmonths3' => 92, 'Artmeomdueday3' => 93, 'Artmeomplusmonths3' => 94, 'Artmctry' => 95, 'Artmtermgrup' => 96, 'Dateupdtd' => 97, 'Timeupdtd' => 98, 'Dummy' => 99, ),
        self::TYPE_CAMELNAME     => array('artmtermcd' => 0, 'artmtermdesc' => 1, 'artmmethod' => 2, 'artmtype' => 3, 'artmhold' => 4, 'artmexpiredate' => 5, 'artmfrtallow' => 6, 'artmccprefix' => 7, 'artmsplit1' => 8, 'artmorderpct1' => 9, 'artmdiscpct1' => 10, 'artmdiscdays1' => 11, 'artmdiscday1' => 12, 'artmdiscdate1' => 13, 'artmduedays1' => 14, 'artmdueday1' => 15, 'artmplusmonths1' => 16, 'artmduedate1' => 17, 'artmplusyear1' => 18, 'artmsplit2' => 19, 'artmorderpct2' => 20, 'artmdiscpct2' => 21, 'artmdiscdays2' => 22, 'artmdiscday2' => 23, 'artmdiscdate2' => 24, 'artmduedays2' => 25, 'artmdueday2' => 26, 'artmplusmonths2' => 27, 'artmduedate2' => 28, 'artmplusyear2' => 29, 'artmsplit3' => 30, 'artmorderpct3' => 31, 'artmdiscpct3' => 32, 'artmdiscdays3' => 33, 'artmdiscday3' => 34, 'artmdiscdate3' => 35, 'artmduedays3' => 36, 'artmdueday3' => 37, 'artmplusmonths3' => 38, 'artmduedate3' => 39, 'artmplusyear3' => 40, 'artmsplit4' => 41, 'artmorderpct4' => 42, 'artmdiscpct4' => 43, 'artmdiscdays4' => 44, 'artmdiscday4' => 45, 'artmdiscdate4' => 46, 'artmduedays4' => 47, 'artmdueday4' => 48, 'artmplusmonths4' => 49, 'artmduedate4' => 50, 'artmplusyear4' => 51, 'artmsplit5' => 52, 'artmorderpct5' => 53, 'artmdiscpct5' => 54, 'artmdiscdays5' => 55, 'artmdiscday5' => 56, 'artmdiscdate5' => 57, 'artmduedays5' => 58, 'artmdueday5' => 59, 'artmplusmonths5' => 60, 'artmduedate5' => 61, 'artmplusyear5' => 62, 'artmsplit6' => 63, 'artmorderpct6' => 64, 'artmdiscpct6' => 65, 'artmdiscdays6' => 66, 'artmdiscday6' => 67, 'artmdiscdate6' => 68, 'artmduedays6' => 69, 'artmdueday6' => 70, 'artmplusmonths6' => 71, 'artmduedate6' => 72, 'artmplusyear6' => 73, 'artmdayfrom1' => 74, 'artmdaythru1' => 75, 'artmeomdiscpct1' => 76, 'artmeomdiscday1' => 77, 'artmeomdiscmonths1' => 78, 'artmeomdueday1' => 79, 'artmeomplusmonths1' => 80, 'artmdayfrom2' => 81, 'artmdaythru2' => 82, 'artmeomdiscpct2' => 83, 'artmeomdiscday2' => 84, 'artmeomdiscmonths2' => 85, 'artmeomdueday2' => 86, 'artmeomplusmonths2' => 87, 'artmdayfrom3' => 88, 'artmdaythru3' => 89, 'artmeomdiscpct3' => 90, 'artmeomdiscday3' => 91, 'artmeomdiscmonths3' => 92, 'artmeomdueday3' => 93, 'artmeomplusmonths3' => 94, 'artmctry' => 95, 'artmtermgrup' => 96, 'dateupdtd' => 97, 'timeupdtd' => 98, 'dummy' => 99, ),
        self::TYPE_COLNAME       => array(TermsCodeTableMap::COL_ARTMTERMCD => 0, TermsCodeTableMap::COL_ARTMTERMDESC => 1, TermsCodeTableMap::COL_ARTMMETHOD => 2, TermsCodeTableMap::COL_ARTMTYPE => 3, TermsCodeTableMap::COL_ARTMHOLD => 4, TermsCodeTableMap::COL_ARTMEXPIREDATE => 5, TermsCodeTableMap::COL_ARTMFRTALLOW => 6, TermsCodeTableMap::COL_ARTMCCPREFIX => 7, TermsCodeTableMap::COL_ARTMSPLIT1 => 8, TermsCodeTableMap::COL_ARTMORDERPCT1 => 9, TermsCodeTableMap::COL_ARTMDISCPCT1 => 10, TermsCodeTableMap::COL_ARTMDISCDAYS1 => 11, TermsCodeTableMap::COL_ARTMDISCDAY1 => 12, TermsCodeTableMap::COL_ARTMDISCDATE1 => 13, TermsCodeTableMap::COL_ARTMDUEDAYS1 => 14, TermsCodeTableMap::COL_ARTMDUEDAY1 => 15, TermsCodeTableMap::COL_ARTMPLUSMONTHS1 => 16, TermsCodeTableMap::COL_ARTMDUEDATE1 => 17, TermsCodeTableMap::COL_ARTMPLUSYEAR1 => 18, TermsCodeTableMap::COL_ARTMSPLIT2 => 19, TermsCodeTableMap::COL_ARTMORDERPCT2 => 20, TermsCodeTableMap::COL_ARTMDISCPCT2 => 21, TermsCodeTableMap::COL_ARTMDISCDAYS2 => 22, TermsCodeTableMap::COL_ARTMDISCDAY2 => 23, TermsCodeTableMap::COL_ARTMDISCDATE2 => 24, TermsCodeTableMap::COL_ARTMDUEDAYS2 => 25, TermsCodeTableMap::COL_ARTMDUEDAY2 => 26, TermsCodeTableMap::COL_ARTMPLUSMONTHS2 => 27, TermsCodeTableMap::COL_ARTMDUEDATE2 => 28, TermsCodeTableMap::COL_ARTMPLUSYEAR2 => 29, TermsCodeTableMap::COL_ARTMSPLIT3 => 30, TermsCodeTableMap::COL_ARTMORDERPCT3 => 31, TermsCodeTableMap::COL_ARTMDISCPCT3 => 32, TermsCodeTableMap::COL_ARTMDISCDAYS3 => 33, TermsCodeTableMap::COL_ARTMDISCDAY3 => 34, TermsCodeTableMap::COL_ARTMDISCDATE3 => 35, TermsCodeTableMap::COL_ARTMDUEDAYS3 => 36, TermsCodeTableMap::COL_ARTMDUEDAY3 => 37, TermsCodeTableMap::COL_ARTMPLUSMONTHS3 => 38, TermsCodeTableMap::COL_ARTMDUEDATE3 => 39, TermsCodeTableMap::COL_ARTMPLUSYEAR3 => 40, TermsCodeTableMap::COL_ARTMSPLIT4 => 41, TermsCodeTableMap::COL_ARTMORDERPCT4 => 42, TermsCodeTableMap::COL_ARTMDISCPCT4 => 43, TermsCodeTableMap::COL_ARTMDISCDAYS4 => 44, TermsCodeTableMap::COL_ARTMDISCDAY4 => 45, TermsCodeTableMap::COL_ARTMDISCDATE4 => 46, TermsCodeTableMap::COL_ARTMDUEDAYS4 => 47, TermsCodeTableMap::COL_ARTMDUEDAY4 => 48, TermsCodeTableMap::COL_ARTMPLUSMONTHS4 => 49, TermsCodeTableMap::COL_ARTMDUEDATE4 => 50, TermsCodeTableMap::COL_ARTMPLUSYEAR4 => 51, TermsCodeTableMap::COL_ARTMSPLIT5 => 52, TermsCodeTableMap::COL_ARTMORDERPCT5 => 53, TermsCodeTableMap::COL_ARTMDISCPCT5 => 54, TermsCodeTableMap::COL_ARTMDISCDAYS5 => 55, TermsCodeTableMap::COL_ARTMDISCDAY5 => 56, TermsCodeTableMap::COL_ARTMDISCDATE5 => 57, TermsCodeTableMap::COL_ARTMDUEDAYS5 => 58, TermsCodeTableMap::COL_ARTMDUEDAY5 => 59, TermsCodeTableMap::COL_ARTMPLUSMONTHS5 => 60, TermsCodeTableMap::COL_ARTMDUEDATE5 => 61, TermsCodeTableMap::COL_ARTMPLUSYEAR5 => 62, TermsCodeTableMap::COL_ARTMSPLIT6 => 63, TermsCodeTableMap::COL_ARTMORDERPCT6 => 64, TermsCodeTableMap::COL_ARTMDISCPCT6 => 65, TermsCodeTableMap::COL_ARTMDISCDAYS6 => 66, TermsCodeTableMap::COL_ARTMDISCDAY6 => 67, TermsCodeTableMap::COL_ARTMDISCDATE6 => 68, TermsCodeTableMap::COL_ARTMDUEDAYS6 => 69, TermsCodeTableMap::COL_ARTMDUEDAY6 => 70, TermsCodeTableMap::COL_ARTMPLUSMONTHS6 => 71, TermsCodeTableMap::COL_ARTMDUEDATE6 => 72, TermsCodeTableMap::COL_ARTMPLUSYEAR6 => 73, TermsCodeTableMap::COL_ARTMDAYFROM1 => 74, TermsCodeTableMap::COL_ARTMDAYTHRU1 => 75, TermsCodeTableMap::COL_ARTMEOMDISCPCT1 => 76, TermsCodeTableMap::COL_ARTMEOMDISCDAY1 => 77, TermsCodeTableMap::COL_ARTMEOMDISCMONTHS1 => 78, TermsCodeTableMap::COL_ARTMEOMDUEDAY1 => 79, TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1 => 80, TermsCodeTableMap::COL_ARTMDAYFROM2 => 81, TermsCodeTableMap::COL_ARTMDAYTHRU2 => 82, TermsCodeTableMap::COL_ARTMEOMDISCPCT2 => 83, TermsCodeTableMap::COL_ARTMEOMDISCDAY2 => 84, TermsCodeTableMap::COL_ARTMEOMDISCMONTHS2 => 85, TermsCodeTableMap::COL_ARTMEOMDUEDAY2 => 86, TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2 => 87, TermsCodeTableMap::COL_ARTMDAYFROM3 => 88, TermsCodeTableMap::COL_ARTMDAYTHRU3 => 89, TermsCodeTableMap::COL_ARTMEOMDISCPCT3 => 90, TermsCodeTableMap::COL_ARTMEOMDISCDAY3 => 91, TermsCodeTableMap::COL_ARTMEOMDISCMONTHS3 => 92, TermsCodeTableMap::COL_ARTMEOMDUEDAY3 => 93, TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3 => 94, TermsCodeTableMap::COL_ARTMCTRY => 95, TermsCodeTableMap::COL_ARTMTERMGRUP => 96, TermsCodeTableMap::COL_DATEUPDTD => 97, TermsCodeTableMap::COL_TIMEUPDTD => 98, TermsCodeTableMap::COL_DUMMY => 99, ),
        self::TYPE_FIELDNAME     => array('ArtmTermCd' => 0, 'ArtmTermDesc' => 1, 'ArtmMethod' => 2, 'ArtmType' => 3, 'ArtmHold' => 4, 'ArtmExpireDate' => 5, 'ArtmFrtAllow' => 6, 'ArtmCcPrefix' => 7, 'ArtmSplit1' => 8, 'ArtmOrderPct1' => 9, 'ArtmDiscPct1' => 10, 'ArtmDiscDays1' => 11, 'ArtmDiscDay1' => 12, 'ArtmDiscDate1' => 13, 'ArtmDueDays1' => 14, 'ArtmDueDay1' => 15, 'ArtmPlusMonths1' => 16, 'ArtmDueDate1' => 17, 'ArtmPlusYear1' => 18, 'ArtmSplit2' => 19, 'ArtmOrderPct2' => 20, 'ArtmDiscPct2' => 21, 'ArtmDiscDays2' => 22, 'ArtmDiscDay2' => 23, 'ArtmDiscDate2' => 24, 'ArtmDueDays2' => 25, 'ArtmDueDay2' => 26, 'ArtmPlusMonths2' => 27, 'ArtmDueDate2' => 28, 'ArtmPlusYear2' => 29, 'ArtmSplit3' => 30, 'ArtmOrderPct3' => 31, 'ArtmDiscPct3' => 32, 'ArtmDiscDays3' => 33, 'ArtmDiscDay3' => 34, 'ArtmDiscDate3' => 35, 'ArtmDueDays3' => 36, 'ArtmDueDay3' => 37, 'ArtmPlusMonths3' => 38, 'ArtmDueDate3' => 39, 'ArtmPlusYear3' => 40, 'ArtmSplit4' => 41, 'ArtmOrderPct4' => 42, 'ArtmDiscPct4' => 43, 'ArtmDiscDays4' => 44, 'ArtmDiscDay4' => 45, 'ArtmDiscDate4' => 46, 'ArtmDueDays4' => 47, 'ArtmDueDay4' => 48, 'ArtmPlusMonths4' => 49, 'ArtmDueDate4' => 50, 'ArtmPlusYear4' => 51, 'ArtmSplit5' => 52, 'ArtmOrderPct5' => 53, 'ArtmDiscPct5' => 54, 'ArtmDiscDays5' => 55, 'ArtmDiscDay5' => 56, 'ArtmDiscDate5' => 57, 'ArtmDueDays5' => 58, 'ArtmDueDay5' => 59, 'ArtmPlusMonths5' => 60, 'ArtmDueDate5' => 61, 'ArtmPlusYear5' => 62, 'ArtmSplit6' => 63, 'ArtmOrderPct6' => 64, 'ArtmDiscPct6' => 65, 'ArtmDiscDays6' => 66, 'ArtmDiscDay6' => 67, 'ArtmDiscDate6' => 68, 'ArtmDueDays6' => 69, 'ArtmDueDay6' => 70, 'ArtmPlusMonths6' => 71, 'ArtmDueDate6' => 72, 'ArtmPlusYear6' => 73, 'ArtmDayFrom1' => 74, 'ArtmDayThru1' => 75, 'ArtmEomDiscPct1' => 76, 'ArtmEomDiscDay1' => 77, 'ArtmEomDiscMonths1' => 78, 'ArtmEomDueDay1' => 79, 'ArtmEomPlusMonths1' => 80, 'ArtmDayFrom2' => 81, 'ArtmDayThru2' => 82, 'ArtmEomDiscPct2' => 83, 'ArtmEomDiscDay2' => 84, 'ArtmEomDiscMonths2' => 85, 'ArtmEomDueDay2' => 86, 'ArtmEomPlusMonths2' => 87, 'ArtmDayFrom3' => 88, 'ArtmDayThru3' => 89, 'ArtmEomDiscPct3' => 90, 'ArtmEomDiscDay3' => 91, 'ArtmEomDiscMonths3' => 92, 'ArtmEomDueDay3' => 93, 'ArtmEomPlusMonths3' => 94, 'ArtmCtry' => 95, 'ArtmTermGrup' => 96, 'DateUpdtd' => 97, 'TimeUpdtd' => 98, 'dummy' => 99, ),
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
        $this->setName('ar_term_code');
        $this->setPhpName('TermsCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TermsCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtmTermCd', 'Artmtermcd', 'VARCHAR', true, 4, '');
        $this->addColumn('ArtmTermDesc', 'Artmtermdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtmMethod', 'Artmmethod', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmType', 'Artmtype', 'VARCHAR', false, 3, null);
        $this->addColumn('ArtmHold', 'Artmhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmExpireDate', 'Artmexpiredate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArtmFrtAllow', 'Artmfrtallow', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmCcPrefix', 'Artmccprefix', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmSplit1', 'Artmsplit1', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmOrderPct1', 'Artmorderpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscPct1', 'Artmdiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscDays1', 'Artmdiscdays1', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDiscDay1', 'Artmdiscday1', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmDiscDate1', 'Artmdiscdate1', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmDueDays1', 'Artmduedays1', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDueDay1', 'Artmdueday1', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmPlusMonths1', 'Artmplusmonths1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDueDate1', 'Artmduedate1', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmPlusYear1', 'Artmplusyear1', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmSplit2', 'Artmsplit2', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmOrderPct2', 'Artmorderpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscPct2', 'Artmdiscpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscDays2', 'Artmdiscdays2', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDiscDay2', 'Artmdiscday2', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmDiscDate2', 'Artmdiscdate2', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmDueDays2', 'Artmduedays2', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDueDay2', 'Artmdueday2', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmPlusMonths2', 'Artmplusmonths2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDueDate2', 'Artmduedate2', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmPlusYear2', 'Artmplusyear2', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmSplit3', 'Artmsplit3', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmOrderPct3', 'Artmorderpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscPct3', 'Artmdiscpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscDays3', 'Artmdiscdays3', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDiscDay3', 'Artmdiscday3', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmDiscDate3', 'Artmdiscdate3', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmDueDays3', 'Artmduedays3', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDueDay3', 'Artmdueday3', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmPlusMonths3', 'Artmplusmonths3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDueDate3', 'Artmduedate3', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmPlusYear3', 'Artmplusyear3', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmSplit4', 'Artmsplit4', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmOrderPct4', 'Artmorderpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscPct4', 'Artmdiscpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscDays4', 'Artmdiscdays4', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDiscDay4', 'Artmdiscday4', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmDiscDate4', 'Artmdiscdate4', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmDueDays4', 'Artmduedays4', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDueDay4', 'Artmdueday4', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmPlusMonths4', 'Artmplusmonths4', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDueDate4', 'Artmduedate4', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmPlusYear4', 'Artmplusyear4', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmSplit5', 'Artmsplit5', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmOrderPct5', 'Artmorderpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscPct5', 'Artmdiscpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscDays5', 'Artmdiscdays5', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDiscDay5', 'Artmdiscday5', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmDiscDate5', 'Artmdiscdate5', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmDueDays5', 'Artmduedays5', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDueDay5', 'Artmdueday5', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmPlusMonths5', 'Artmplusmonths5', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDueDate5', 'Artmduedate5', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmPlusYear5', 'Artmplusyear5', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmSplit6', 'Artmsplit6', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmOrderPct6', 'Artmorderpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscPct6', 'Artmdiscpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmDiscDays6', 'Artmdiscdays6', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDiscDay6', 'Artmdiscday6', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmDiscDate6', 'Artmdiscdate6', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmDueDays6', 'Artmduedays6', 'INTEGER', false, 3, null);
        $this->addColumn('ArtmDueDay6', 'Artmdueday6', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtmPlusMonths6', 'Artmplusmonths6', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDueDate6', 'Artmduedate6', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmPlusYear6', 'Artmplusyear6', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtmDayFrom1', 'Artmdayfrom1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDayThru1', 'Artmdaythru1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDiscPct1', 'Artmeomdiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmEomDiscDay1', 'Artmeomdiscday1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDiscMonths1', 'Artmeomdiscmonths1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDueDay1', 'Artmeomdueday1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomPlusMonths1', 'Artmeomplusmonths1', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDayFrom2', 'Artmdayfrom2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDayThru2', 'Artmdaythru2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDiscPct2', 'Artmeomdiscpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmEomDiscDay2', 'Artmeomdiscday2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDiscMonths2', 'Artmeomdiscmonths2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDueDay2', 'Artmeomdueday2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomPlusMonths2', 'Artmeomplusmonths2', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDayFrom3', 'Artmdayfrom3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmDayThru3', 'Artmdaythru3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDiscPct3', 'Artmeomdiscpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmEomDiscDay3', 'Artmeomdiscday3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDiscMonths3', 'Artmeomdiscmonths3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomDueDay3', 'Artmeomdueday3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmEomPlusMonths3', 'Artmeomplusmonths3', 'INTEGER', false, 2, null);
        $this->addColumn('ArtmCtry', 'Artmctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmTermGrup', 'Artmtermgrup', 'VARCHAR', false, 4, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TermsCodeTableMap::CLASS_DEFAULT : TermsCodeTableMap::OM_CLASS;
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
     * @return array           (TermsCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TermsCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TermsCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TermsCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TermsCodeTableMap::OM_CLASS;
            /** @var TermsCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TermsCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = TermsCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TermsCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TermsCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TermsCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMTERMDESC);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMMETHOD);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMTYPE);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMHOLD);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEXPIREDATE);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMFRTALLOW);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMCCPREFIX);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMSPLIT1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMORDERPCT1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCPCT1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAYS1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAY1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDATE1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAYS1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAY1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSMONTHS1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDATE1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSYEAR1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMSPLIT2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMORDERPCT2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCPCT2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAYS2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAY2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDATE2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAYS2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAY2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSMONTHS2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDATE2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSYEAR2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMSPLIT3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMORDERPCT3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCPCT3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAYS3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAY3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDATE3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAYS3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAY3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSMONTHS3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDATE3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSYEAR3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMSPLIT4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMORDERPCT4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCPCT4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAYS4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAY4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDATE4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAYS4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAY4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSMONTHS4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDATE4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSYEAR4);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMSPLIT5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMORDERPCT5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCPCT5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAYS5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAY5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDATE5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAYS5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAY5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSMONTHS5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDATE5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSYEAR5);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMSPLIT6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMORDERPCT6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCPCT6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAYS6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDAY6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDISCDATE6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAYS6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDAY6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSMONTHS6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDUEDATE6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMPLUSYEAR6);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDAYFROM1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDAYTHRU1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCPCT1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCDAY1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCMONTHS1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDUEDAY1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDAYFROM2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDAYTHRU2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCPCT2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCDAY2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCMONTHS2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDUEDAY2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDAYFROM3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMDAYTHRU3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCPCT3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCDAY3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDISCMONTHS3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMDUEDAY3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMCTRY);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_ARTMTERMGRUP);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(TermsCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArtmTermDesc');
            $criteria->addSelectColumn($alias . '.ArtmMethod');
            $criteria->addSelectColumn($alias . '.ArtmType');
            $criteria->addSelectColumn($alias . '.ArtmHold');
            $criteria->addSelectColumn($alias . '.ArtmExpireDate');
            $criteria->addSelectColumn($alias . '.ArtmFrtAllow');
            $criteria->addSelectColumn($alias . '.ArtmCcPrefix');
            $criteria->addSelectColumn($alias . '.ArtmSplit1');
            $criteria->addSelectColumn($alias . '.ArtmOrderPct1');
            $criteria->addSelectColumn($alias . '.ArtmDiscPct1');
            $criteria->addSelectColumn($alias . '.ArtmDiscDays1');
            $criteria->addSelectColumn($alias . '.ArtmDiscDay1');
            $criteria->addSelectColumn($alias . '.ArtmDiscDate1');
            $criteria->addSelectColumn($alias . '.ArtmDueDays1');
            $criteria->addSelectColumn($alias . '.ArtmDueDay1');
            $criteria->addSelectColumn($alias . '.ArtmPlusMonths1');
            $criteria->addSelectColumn($alias . '.ArtmDueDate1');
            $criteria->addSelectColumn($alias . '.ArtmPlusYear1');
            $criteria->addSelectColumn($alias . '.ArtmSplit2');
            $criteria->addSelectColumn($alias . '.ArtmOrderPct2');
            $criteria->addSelectColumn($alias . '.ArtmDiscPct2');
            $criteria->addSelectColumn($alias . '.ArtmDiscDays2');
            $criteria->addSelectColumn($alias . '.ArtmDiscDay2');
            $criteria->addSelectColumn($alias . '.ArtmDiscDate2');
            $criteria->addSelectColumn($alias . '.ArtmDueDays2');
            $criteria->addSelectColumn($alias . '.ArtmDueDay2');
            $criteria->addSelectColumn($alias . '.ArtmPlusMonths2');
            $criteria->addSelectColumn($alias . '.ArtmDueDate2');
            $criteria->addSelectColumn($alias . '.ArtmPlusYear2');
            $criteria->addSelectColumn($alias . '.ArtmSplit3');
            $criteria->addSelectColumn($alias . '.ArtmOrderPct3');
            $criteria->addSelectColumn($alias . '.ArtmDiscPct3');
            $criteria->addSelectColumn($alias . '.ArtmDiscDays3');
            $criteria->addSelectColumn($alias . '.ArtmDiscDay3');
            $criteria->addSelectColumn($alias . '.ArtmDiscDate3');
            $criteria->addSelectColumn($alias . '.ArtmDueDays3');
            $criteria->addSelectColumn($alias . '.ArtmDueDay3');
            $criteria->addSelectColumn($alias . '.ArtmPlusMonths3');
            $criteria->addSelectColumn($alias . '.ArtmDueDate3');
            $criteria->addSelectColumn($alias . '.ArtmPlusYear3');
            $criteria->addSelectColumn($alias . '.ArtmSplit4');
            $criteria->addSelectColumn($alias . '.ArtmOrderPct4');
            $criteria->addSelectColumn($alias . '.ArtmDiscPct4');
            $criteria->addSelectColumn($alias . '.ArtmDiscDays4');
            $criteria->addSelectColumn($alias . '.ArtmDiscDay4');
            $criteria->addSelectColumn($alias . '.ArtmDiscDate4');
            $criteria->addSelectColumn($alias . '.ArtmDueDays4');
            $criteria->addSelectColumn($alias . '.ArtmDueDay4');
            $criteria->addSelectColumn($alias . '.ArtmPlusMonths4');
            $criteria->addSelectColumn($alias . '.ArtmDueDate4');
            $criteria->addSelectColumn($alias . '.ArtmPlusYear4');
            $criteria->addSelectColumn($alias . '.ArtmSplit5');
            $criteria->addSelectColumn($alias . '.ArtmOrderPct5');
            $criteria->addSelectColumn($alias . '.ArtmDiscPct5');
            $criteria->addSelectColumn($alias . '.ArtmDiscDays5');
            $criteria->addSelectColumn($alias . '.ArtmDiscDay5');
            $criteria->addSelectColumn($alias . '.ArtmDiscDate5');
            $criteria->addSelectColumn($alias . '.ArtmDueDays5');
            $criteria->addSelectColumn($alias . '.ArtmDueDay5');
            $criteria->addSelectColumn($alias . '.ArtmPlusMonths5');
            $criteria->addSelectColumn($alias . '.ArtmDueDate5');
            $criteria->addSelectColumn($alias . '.ArtmPlusYear5');
            $criteria->addSelectColumn($alias . '.ArtmSplit6');
            $criteria->addSelectColumn($alias . '.ArtmOrderPct6');
            $criteria->addSelectColumn($alias . '.ArtmDiscPct6');
            $criteria->addSelectColumn($alias . '.ArtmDiscDays6');
            $criteria->addSelectColumn($alias . '.ArtmDiscDay6');
            $criteria->addSelectColumn($alias . '.ArtmDiscDate6');
            $criteria->addSelectColumn($alias . '.ArtmDueDays6');
            $criteria->addSelectColumn($alias . '.ArtmDueDay6');
            $criteria->addSelectColumn($alias . '.ArtmPlusMonths6');
            $criteria->addSelectColumn($alias . '.ArtmDueDate6');
            $criteria->addSelectColumn($alias . '.ArtmPlusYear6');
            $criteria->addSelectColumn($alias . '.ArtmDayFrom1');
            $criteria->addSelectColumn($alias . '.ArtmDayThru1');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscPct1');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscDay1');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscMonths1');
            $criteria->addSelectColumn($alias . '.ArtmEomDueDay1');
            $criteria->addSelectColumn($alias . '.ArtmEomPlusMonths1');
            $criteria->addSelectColumn($alias . '.ArtmDayFrom2');
            $criteria->addSelectColumn($alias . '.ArtmDayThru2');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscPct2');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscDay2');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscMonths2');
            $criteria->addSelectColumn($alias . '.ArtmEomDueDay2');
            $criteria->addSelectColumn($alias . '.ArtmEomPlusMonths2');
            $criteria->addSelectColumn($alias . '.ArtmDayFrom3');
            $criteria->addSelectColumn($alias . '.ArtmDayThru3');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscPct3');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscDay3');
            $criteria->addSelectColumn($alias . '.ArtmEomDiscMonths3');
            $criteria->addSelectColumn($alias . '.ArtmEomDueDay3');
            $criteria->addSelectColumn($alias . '.ArtmEomPlusMonths3');
            $criteria->addSelectColumn($alias . '.ArtmCtry');
            $criteria->addSelectColumn($alias . '.ArtmTermGrup');
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
        return Propel::getServiceContainer()->getDatabaseMap(TermsCodeTableMap::DATABASE_NAME)->getTable(TermsCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TermsCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TermsCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TermsCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TermsCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TermsCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TermsCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TermsCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TermsCodeTableMap::DATABASE_NAME);
            $criteria->add(TermsCodeTableMap::COL_ARTMTERMCD, (array) $values, Criteria::IN);
        }

        $query = TermsCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TermsCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TermsCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_term_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TermsCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TermsCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or TermsCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TermsCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TermsCode object
        }


        // Set the correct dbName
        $query = TermsCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TermsCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TermsCodeTableMap::buildTableMap();
