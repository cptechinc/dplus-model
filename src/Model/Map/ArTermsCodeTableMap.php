<?php

namespace Map;

use \ArTermsCode;
use \ArTermsCodeQuery;
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
 */
class ArTermsCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ArTermsCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_term_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ArTermsCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ArTermsCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ArTermsCode';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 100;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 100;

    /**
     * the column name for the ArtmTermCd field
     */
    public const COL_ARTMTERMCD = 'ar_term_code.ArtmTermCd';

    /**
     * the column name for the ArtmTermDesc field
     */
    public const COL_ARTMTERMDESC = 'ar_term_code.ArtmTermDesc';

    /**
     * the column name for the ArtmMethod field
     */
    public const COL_ARTMMETHOD = 'ar_term_code.ArtmMethod';

    /**
     * the column name for the ArtmType field
     */
    public const COL_ARTMTYPE = 'ar_term_code.ArtmType';

    /**
     * the column name for the ArtmHold field
     */
    public const COL_ARTMHOLD = 'ar_term_code.ArtmHold';

    /**
     * the column name for the ArtmExpireDate field
     */
    public const COL_ARTMEXPIREDATE = 'ar_term_code.ArtmExpireDate';

    /**
     * the column name for the ArtmFrtAllow field
     */
    public const COL_ARTMFRTALLOW = 'ar_term_code.ArtmFrtAllow';

    /**
     * the column name for the ArtmCcPrefix field
     */
    public const COL_ARTMCCPREFIX = 'ar_term_code.ArtmCcPrefix';

    /**
     * the column name for the ArtmSplit1 field
     */
    public const COL_ARTMSPLIT1 = 'ar_term_code.ArtmSplit1';

    /**
     * the column name for the ArtmOrderPct1 field
     */
    public const COL_ARTMORDERPCT1 = 'ar_term_code.ArtmOrderPct1';

    /**
     * the column name for the ArtmDiscPct1 field
     */
    public const COL_ARTMDISCPCT1 = 'ar_term_code.ArtmDiscPct1';

    /**
     * the column name for the ArtmDiscDays1 field
     */
    public const COL_ARTMDISCDAYS1 = 'ar_term_code.ArtmDiscDays1';

    /**
     * the column name for the ArtmDiscDay1 field
     */
    public const COL_ARTMDISCDAY1 = 'ar_term_code.ArtmDiscDay1';

    /**
     * the column name for the ArtmDiscDate1 field
     */
    public const COL_ARTMDISCDATE1 = 'ar_term_code.ArtmDiscDate1';

    /**
     * the column name for the ArtmDueDays1 field
     */
    public const COL_ARTMDUEDAYS1 = 'ar_term_code.ArtmDueDays1';

    /**
     * the column name for the ArtmDueDay1 field
     */
    public const COL_ARTMDUEDAY1 = 'ar_term_code.ArtmDueDay1';

    /**
     * the column name for the ArtmPlusMonths1 field
     */
    public const COL_ARTMPLUSMONTHS1 = 'ar_term_code.ArtmPlusMonths1';

    /**
     * the column name for the ArtmDueDate1 field
     */
    public const COL_ARTMDUEDATE1 = 'ar_term_code.ArtmDueDate1';

    /**
     * the column name for the ArtmPlusYear1 field
     */
    public const COL_ARTMPLUSYEAR1 = 'ar_term_code.ArtmPlusYear1';

    /**
     * the column name for the ArtmSplit2 field
     */
    public const COL_ARTMSPLIT2 = 'ar_term_code.ArtmSplit2';

    /**
     * the column name for the ArtmOrderPct2 field
     */
    public const COL_ARTMORDERPCT2 = 'ar_term_code.ArtmOrderPct2';

    /**
     * the column name for the ArtmDiscPct2 field
     */
    public const COL_ARTMDISCPCT2 = 'ar_term_code.ArtmDiscPct2';

    /**
     * the column name for the ArtmDiscDays2 field
     */
    public const COL_ARTMDISCDAYS2 = 'ar_term_code.ArtmDiscDays2';

    /**
     * the column name for the ArtmDiscDay2 field
     */
    public const COL_ARTMDISCDAY2 = 'ar_term_code.ArtmDiscDay2';

    /**
     * the column name for the ArtmDiscDate2 field
     */
    public const COL_ARTMDISCDATE2 = 'ar_term_code.ArtmDiscDate2';

    /**
     * the column name for the ArtmDueDays2 field
     */
    public const COL_ARTMDUEDAYS2 = 'ar_term_code.ArtmDueDays2';

    /**
     * the column name for the ArtmDueDay2 field
     */
    public const COL_ARTMDUEDAY2 = 'ar_term_code.ArtmDueDay2';

    /**
     * the column name for the ArtmPlusMonths2 field
     */
    public const COL_ARTMPLUSMONTHS2 = 'ar_term_code.ArtmPlusMonths2';

    /**
     * the column name for the ArtmDueDate2 field
     */
    public const COL_ARTMDUEDATE2 = 'ar_term_code.ArtmDueDate2';

    /**
     * the column name for the ArtmPlusYear2 field
     */
    public const COL_ARTMPLUSYEAR2 = 'ar_term_code.ArtmPlusYear2';

    /**
     * the column name for the ArtmSplit3 field
     */
    public const COL_ARTMSPLIT3 = 'ar_term_code.ArtmSplit3';

    /**
     * the column name for the ArtmOrderPct3 field
     */
    public const COL_ARTMORDERPCT3 = 'ar_term_code.ArtmOrderPct3';

    /**
     * the column name for the ArtmDiscPct3 field
     */
    public const COL_ARTMDISCPCT3 = 'ar_term_code.ArtmDiscPct3';

    /**
     * the column name for the ArtmDiscDays3 field
     */
    public const COL_ARTMDISCDAYS3 = 'ar_term_code.ArtmDiscDays3';

    /**
     * the column name for the ArtmDiscDay3 field
     */
    public const COL_ARTMDISCDAY3 = 'ar_term_code.ArtmDiscDay3';

    /**
     * the column name for the ArtmDiscDate3 field
     */
    public const COL_ARTMDISCDATE3 = 'ar_term_code.ArtmDiscDate3';

    /**
     * the column name for the ArtmDueDays3 field
     */
    public const COL_ARTMDUEDAYS3 = 'ar_term_code.ArtmDueDays3';

    /**
     * the column name for the ArtmDueDay3 field
     */
    public const COL_ARTMDUEDAY3 = 'ar_term_code.ArtmDueDay3';

    /**
     * the column name for the ArtmPlusMonths3 field
     */
    public const COL_ARTMPLUSMONTHS3 = 'ar_term_code.ArtmPlusMonths3';

    /**
     * the column name for the ArtmDueDate3 field
     */
    public const COL_ARTMDUEDATE3 = 'ar_term_code.ArtmDueDate3';

    /**
     * the column name for the ArtmPlusYear3 field
     */
    public const COL_ARTMPLUSYEAR3 = 'ar_term_code.ArtmPlusYear3';

    /**
     * the column name for the ArtmSplit4 field
     */
    public const COL_ARTMSPLIT4 = 'ar_term_code.ArtmSplit4';

    /**
     * the column name for the ArtmOrderPct4 field
     */
    public const COL_ARTMORDERPCT4 = 'ar_term_code.ArtmOrderPct4';

    /**
     * the column name for the ArtmDiscPct4 field
     */
    public const COL_ARTMDISCPCT4 = 'ar_term_code.ArtmDiscPct4';

    /**
     * the column name for the ArtmDiscDays4 field
     */
    public const COL_ARTMDISCDAYS4 = 'ar_term_code.ArtmDiscDays4';

    /**
     * the column name for the ArtmDiscDay4 field
     */
    public const COL_ARTMDISCDAY4 = 'ar_term_code.ArtmDiscDay4';

    /**
     * the column name for the ArtmDiscDate4 field
     */
    public const COL_ARTMDISCDATE4 = 'ar_term_code.ArtmDiscDate4';

    /**
     * the column name for the ArtmDueDays4 field
     */
    public const COL_ARTMDUEDAYS4 = 'ar_term_code.ArtmDueDays4';

    /**
     * the column name for the ArtmDueDay4 field
     */
    public const COL_ARTMDUEDAY4 = 'ar_term_code.ArtmDueDay4';

    /**
     * the column name for the ArtmPlusMonths4 field
     */
    public const COL_ARTMPLUSMONTHS4 = 'ar_term_code.ArtmPlusMonths4';

    /**
     * the column name for the ArtmDueDate4 field
     */
    public const COL_ARTMDUEDATE4 = 'ar_term_code.ArtmDueDate4';

    /**
     * the column name for the ArtmPlusYear4 field
     */
    public const COL_ARTMPLUSYEAR4 = 'ar_term_code.ArtmPlusYear4';

    /**
     * the column name for the ArtmSplit5 field
     */
    public const COL_ARTMSPLIT5 = 'ar_term_code.ArtmSplit5';

    /**
     * the column name for the ArtmOrderPct5 field
     */
    public const COL_ARTMORDERPCT5 = 'ar_term_code.ArtmOrderPct5';

    /**
     * the column name for the ArtmDiscPct5 field
     */
    public const COL_ARTMDISCPCT5 = 'ar_term_code.ArtmDiscPct5';

    /**
     * the column name for the ArtmDiscDays5 field
     */
    public const COL_ARTMDISCDAYS5 = 'ar_term_code.ArtmDiscDays5';

    /**
     * the column name for the ArtmDiscDay5 field
     */
    public const COL_ARTMDISCDAY5 = 'ar_term_code.ArtmDiscDay5';

    /**
     * the column name for the ArtmDiscDate5 field
     */
    public const COL_ARTMDISCDATE5 = 'ar_term_code.ArtmDiscDate5';

    /**
     * the column name for the ArtmDueDays5 field
     */
    public const COL_ARTMDUEDAYS5 = 'ar_term_code.ArtmDueDays5';

    /**
     * the column name for the ArtmDueDay5 field
     */
    public const COL_ARTMDUEDAY5 = 'ar_term_code.ArtmDueDay5';

    /**
     * the column name for the ArtmPlusMonths5 field
     */
    public const COL_ARTMPLUSMONTHS5 = 'ar_term_code.ArtmPlusMonths5';

    /**
     * the column name for the ArtmDueDate5 field
     */
    public const COL_ARTMDUEDATE5 = 'ar_term_code.ArtmDueDate5';

    /**
     * the column name for the ArtmPlusYear5 field
     */
    public const COL_ARTMPLUSYEAR5 = 'ar_term_code.ArtmPlusYear5';

    /**
     * the column name for the ArtmSplit6 field
     */
    public const COL_ARTMSPLIT6 = 'ar_term_code.ArtmSplit6';

    /**
     * the column name for the ArtmOrderPct6 field
     */
    public const COL_ARTMORDERPCT6 = 'ar_term_code.ArtmOrderPct6';

    /**
     * the column name for the ArtmDiscPct6 field
     */
    public const COL_ARTMDISCPCT6 = 'ar_term_code.ArtmDiscPct6';

    /**
     * the column name for the ArtmDiscDays6 field
     */
    public const COL_ARTMDISCDAYS6 = 'ar_term_code.ArtmDiscDays6';

    /**
     * the column name for the ArtmDiscDay6 field
     */
    public const COL_ARTMDISCDAY6 = 'ar_term_code.ArtmDiscDay6';

    /**
     * the column name for the ArtmDiscDate6 field
     */
    public const COL_ARTMDISCDATE6 = 'ar_term_code.ArtmDiscDate6';

    /**
     * the column name for the ArtmDueDays6 field
     */
    public const COL_ARTMDUEDAYS6 = 'ar_term_code.ArtmDueDays6';

    /**
     * the column name for the ArtmDueDay6 field
     */
    public const COL_ARTMDUEDAY6 = 'ar_term_code.ArtmDueDay6';

    /**
     * the column name for the ArtmPlusMonths6 field
     */
    public const COL_ARTMPLUSMONTHS6 = 'ar_term_code.ArtmPlusMonths6';

    /**
     * the column name for the ArtmDueDate6 field
     */
    public const COL_ARTMDUEDATE6 = 'ar_term_code.ArtmDueDate6';

    /**
     * the column name for the ArtmPlusYear6 field
     */
    public const COL_ARTMPLUSYEAR6 = 'ar_term_code.ArtmPlusYear6';

    /**
     * the column name for the ArtmDayFrom1 field
     */
    public const COL_ARTMDAYFROM1 = 'ar_term_code.ArtmDayFrom1';

    /**
     * the column name for the ArtmDayThru1 field
     */
    public const COL_ARTMDAYTHRU1 = 'ar_term_code.ArtmDayThru1';

    /**
     * the column name for the ArtmEomDiscPct1 field
     */
    public const COL_ARTMEOMDISCPCT1 = 'ar_term_code.ArtmEomDiscPct1';

    /**
     * the column name for the ArtmEomDiscDay1 field
     */
    public const COL_ARTMEOMDISCDAY1 = 'ar_term_code.ArtmEomDiscDay1';

    /**
     * the column name for the ArtmEomDiscMonths1 field
     */
    public const COL_ARTMEOMDISCMONTHS1 = 'ar_term_code.ArtmEomDiscMonths1';

    /**
     * the column name for the ArtmEomDueDay1 field
     */
    public const COL_ARTMEOMDUEDAY1 = 'ar_term_code.ArtmEomDueDay1';

    /**
     * the column name for the ArtmEomPlusMonths1 field
     */
    public const COL_ARTMEOMPLUSMONTHS1 = 'ar_term_code.ArtmEomPlusMonths1';

    /**
     * the column name for the ArtmDayFrom2 field
     */
    public const COL_ARTMDAYFROM2 = 'ar_term_code.ArtmDayFrom2';

    /**
     * the column name for the ArtmDayThru2 field
     */
    public const COL_ARTMDAYTHRU2 = 'ar_term_code.ArtmDayThru2';

    /**
     * the column name for the ArtmEomDiscPct2 field
     */
    public const COL_ARTMEOMDISCPCT2 = 'ar_term_code.ArtmEomDiscPct2';

    /**
     * the column name for the ArtmEomDiscDay2 field
     */
    public const COL_ARTMEOMDISCDAY2 = 'ar_term_code.ArtmEomDiscDay2';

    /**
     * the column name for the ArtmEomDiscMonths2 field
     */
    public const COL_ARTMEOMDISCMONTHS2 = 'ar_term_code.ArtmEomDiscMonths2';

    /**
     * the column name for the ArtmEomDueDay2 field
     */
    public const COL_ARTMEOMDUEDAY2 = 'ar_term_code.ArtmEomDueDay2';

    /**
     * the column name for the ArtmEomPlusMonths2 field
     */
    public const COL_ARTMEOMPLUSMONTHS2 = 'ar_term_code.ArtmEomPlusMonths2';

    /**
     * the column name for the ArtmDayFrom3 field
     */
    public const COL_ARTMDAYFROM3 = 'ar_term_code.ArtmDayFrom3';

    /**
     * the column name for the ArtmDayThru3 field
     */
    public const COL_ARTMDAYTHRU3 = 'ar_term_code.ArtmDayThru3';

    /**
     * the column name for the ArtmEomDiscPct3 field
     */
    public const COL_ARTMEOMDISCPCT3 = 'ar_term_code.ArtmEomDiscPct3';

    /**
     * the column name for the ArtmEomDiscDay3 field
     */
    public const COL_ARTMEOMDISCDAY3 = 'ar_term_code.ArtmEomDiscDay3';

    /**
     * the column name for the ArtmEomDiscMonths3 field
     */
    public const COL_ARTMEOMDISCMONTHS3 = 'ar_term_code.ArtmEomDiscMonths3';

    /**
     * the column name for the ArtmEomDueDay3 field
     */
    public const COL_ARTMEOMDUEDAY3 = 'ar_term_code.ArtmEomDueDay3';

    /**
     * the column name for the ArtmEomPlusMonths3 field
     */
    public const COL_ARTMEOMPLUSMONTHS3 = 'ar_term_code.ArtmEomPlusMonths3';

    /**
     * the column name for the ArtmCtry field
     */
    public const COL_ARTMCTRY = 'ar_term_code.ArtmCtry';

    /**
     * the column name for the ArtmTermGrup field
     */
    public const COL_ARTMTERMGRUP = 'ar_term_code.ArtmTermGrup';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_term_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_term_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_term_code.dummy';

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
        self::TYPE_PHPNAME       => ['Artmtermcd', 'Artmtermdesc', 'Artmmethod', 'Artmtype', 'Artmhold', 'Artmexpiredate', 'Artmfrtallow', 'Artmccprefix', 'Artmsplit1', 'Artmorderpct1', 'Artmdiscpct1', 'Artmdiscdays1', 'Artmdiscday1', 'Artmdiscdate1', 'Artmduedays1', 'Artmdueday1', 'Artmplusmonths1', 'Artmduedate1', 'Artmplusyear1', 'Artmsplit2', 'Artmorderpct2', 'Artmdiscpct2', 'Artmdiscdays2', 'Artmdiscday2', 'Artmdiscdate2', 'Artmduedays2', 'Artmdueday2', 'Artmplusmonths2', 'Artmduedate2', 'Artmplusyear2', 'Artmsplit3', 'Artmorderpct3', 'Artmdiscpct3', 'Artmdiscdays3', 'Artmdiscday3', 'Artmdiscdate3', 'Artmduedays3', 'Artmdueday3', 'Artmplusmonths3', 'Artmduedate3', 'Artmplusyear3', 'Artmsplit4', 'Artmorderpct4', 'Artmdiscpct4', 'Artmdiscdays4', 'Artmdiscday4', 'Artmdiscdate4', 'Artmduedays4', 'Artmdueday4', 'Artmplusmonths4', 'Artmduedate4', 'Artmplusyear4', 'Artmsplit5', 'Artmorderpct5', 'Artmdiscpct5', 'Artmdiscdays5', 'Artmdiscday5', 'Artmdiscdate5', 'Artmduedays5', 'Artmdueday5', 'Artmplusmonths5', 'Artmduedate5', 'Artmplusyear5', 'Artmsplit6', 'Artmorderpct6', 'Artmdiscpct6', 'Artmdiscdays6', 'Artmdiscday6', 'Artmdiscdate6', 'Artmduedays6', 'Artmdueday6', 'Artmplusmonths6', 'Artmduedate6', 'Artmplusyear6', 'Artmdayfrom1', 'Artmdaythru1', 'Artmeomdiscpct1', 'Artmeomdiscday1', 'Artmeomdiscmonths1', 'Artmeomdueday1', 'Artmeomplusmonths1', 'Artmdayfrom2', 'Artmdaythru2', 'Artmeomdiscpct2', 'Artmeomdiscday2', 'Artmeomdiscmonths2', 'Artmeomdueday2', 'Artmeomplusmonths2', 'Artmdayfrom3', 'Artmdaythru3', 'Artmeomdiscpct3', 'Artmeomdiscday3', 'Artmeomdiscmonths3', 'Artmeomdueday3', 'Artmeomplusmonths3', 'Artmctry', 'Artmtermgrup', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['artmtermcd', 'artmtermdesc', 'artmmethod', 'artmtype', 'artmhold', 'artmexpiredate', 'artmfrtallow', 'artmccprefix', 'artmsplit1', 'artmorderpct1', 'artmdiscpct1', 'artmdiscdays1', 'artmdiscday1', 'artmdiscdate1', 'artmduedays1', 'artmdueday1', 'artmplusmonths1', 'artmduedate1', 'artmplusyear1', 'artmsplit2', 'artmorderpct2', 'artmdiscpct2', 'artmdiscdays2', 'artmdiscday2', 'artmdiscdate2', 'artmduedays2', 'artmdueday2', 'artmplusmonths2', 'artmduedate2', 'artmplusyear2', 'artmsplit3', 'artmorderpct3', 'artmdiscpct3', 'artmdiscdays3', 'artmdiscday3', 'artmdiscdate3', 'artmduedays3', 'artmdueday3', 'artmplusmonths3', 'artmduedate3', 'artmplusyear3', 'artmsplit4', 'artmorderpct4', 'artmdiscpct4', 'artmdiscdays4', 'artmdiscday4', 'artmdiscdate4', 'artmduedays4', 'artmdueday4', 'artmplusmonths4', 'artmduedate4', 'artmplusyear4', 'artmsplit5', 'artmorderpct5', 'artmdiscpct5', 'artmdiscdays5', 'artmdiscday5', 'artmdiscdate5', 'artmduedays5', 'artmdueday5', 'artmplusmonths5', 'artmduedate5', 'artmplusyear5', 'artmsplit6', 'artmorderpct6', 'artmdiscpct6', 'artmdiscdays6', 'artmdiscday6', 'artmdiscdate6', 'artmduedays6', 'artmdueday6', 'artmplusmonths6', 'artmduedate6', 'artmplusyear6', 'artmdayfrom1', 'artmdaythru1', 'artmeomdiscpct1', 'artmeomdiscday1', 'artmeomdiscmonths1', 'artmeomdueday1', 'artmeomplusmonths1', 'artmdayfrom2', 'artmdaythru2', 'artmeomdiscpct2', 'artmeomdiscday2', 'artmeomdiscmonths2', 'artmeomdueday2', 'artmeomplusmonths2', 'artmdayfrom3', 'artmdaythru3', 'artmeomdiscpct3', 'artmeomdiscday3', 'artmeomdiscmonths3', 'artmeomdueday3', 'artmeomplusmonths3', 'artmctry', 'artmtermgrup', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ArTermsCodeTableMap::COL_ARTMTERMCD, ArTermsCodeTableMap::COL_ARTMTERMDESC, ArTermsCodeTableMap::COL_ARTMMETHOD, ArTermsCodeTableMap::COL_ARTMTYPE, ArTermsCodeTableMap::COL_ARTMHOLD, ArTermsCodeTableMap::COL_ARTMEXPIREDATE, ArTermsCodeTableMap::COL_ARTMFRTALLOW, ArTermsCodeTableMap::COL_ARTMCCPREFIX, ArTermsCodeTableMap::COL_ARTMSPLIT1, ArTermsCodeTableMap::COL_ARTMORDERPCT1, ArTermsCodeTableMap::COL_ARTMDISCPCT1, ArTermsCodeTableMap::COL_ARTMDISCDAYS1, ArTermsCodeTableMap::COL_ARTMDISCDAY1, ArTermsCodeTableMap::COL_ARTMDISCDATE1, ArTermsCodeTableMap::COL_ARTMDUEDAYS1, ArTermsCodeTableMap::COL_ARTMDUEDAY1, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1, ArTermsCodeTableMap::COL_ARTMDUEDATE1, ArTermsCodeTableMap::COL_ARTMPLUSYEAR1, ArTermsCodeTableMap::COL_ARTMSPLIT2, ArTermsCodeTableMap::COL_ARTMORDERPCT2, ArTermsCodeTableMap::COL_ARTMDISCPCT2, ArTermsCodeTableMap::COL_ARTMDISCDAYS2, ArTermsCodeTableMap::COL_ARTMDISCDAY2, ArTermsCodeTableMap::COL_ARTMDISCDATE2, ArTermsCodeTableMap::COL_ARTMDUEDAYS2, ArTermsCodeTableMap::COL_ARTMDUEDAY2, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2, ArTermsCodeTableMap::COL_ARTMDUEDATE2, ArTermsCodeTableMap::COL_ARTMPLUSYEAR2, ArTermsCodeTableMap::COL_ARTMSPLIT3, ArTermsCodeTableMap::COL_ARTMORDERPCT3, ArTermsCodeTableMap::COL_ARTMDISCPCT3, ArTermsCodeTableMap::COL_ARTMDISCDAYS3, ArTermsCodeTableMap::COL_ARTMDISCDAY3, ArTermsCodeTableMap::COL_ARTMDISCDATE3, ArTermsCodeTableMap::COL_ARTMDUEDAYS3, ArTermsCodeTableMap::COL_ARTMDUEDAY3, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3, ArTermsCodeTableMap::COL_ARTMDUEDATE3, ArTermsCodeTableMap::COL_ARTMPLUSYEAR3, ArTermsCodeTableMap::COL_ARTMSPLIT4, ArTermsCodeTableMap::COL_ARTMORDERPCT4, ArTermsCodeTableMap::COL_ARTMDISCPCT4, ArTermsCodeTableMap::COL_ARTMDISCDAYS4, ArTermsCodeTableMap::COL_ARTMDISCDAY4, ArTermsCodeTableMap::COL_ARTMDISCDATE4, ArTermsCodeTableMap::COL_ARTMDUEDAYS4, ArTermsCodeTableMap::COL_ARTMDUEDAY4, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4, ArTermsCodeTableMap::COL_ARTMDUEDATE4, ArTermsCodeTableMap::COL_ARTMPLUSYEAR4, ArTermsCodeTableMap::COL_ARTMSPLIT5, ArTermsCodeTableMap::COL_ARTMORDERPCT5, ArTermsCodeTableMap::COL_ARTMDISCPCT5, ArTermsCodeTableMap::COL_ARTMDISCDAYS5, ArTermsCodeTableMap::COL_ARTMDISCDAY5, ArTermsCodeTableMap::COL_ARTMDISCDATE5, ArTermsCodeTableMap::COL_ARTMDUEDAYS5, ArTermsCodeTableMap::COL_ARTMDUEDAY5, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5, ArTermsCodeTableMap::COL_ARTMDUEDATE5, ArTermsCodeTableMap::COL_ARTMPLUSYEAR5, ArTermsCodeTableMap::COL_ARTMSPLIT6, ArTermsCodeTableMap::COL_ARTMORDERPCT6, ArTermsCodeTableMap::COL_ARTMDISCPCT6, ArTermsCodeTableMap::COL_ARTMDISCDAYS6, ArTermsCodeTableMap::COL_ARTMDISCDAY6, ArTermsCodeTableMap::COL_ARTMDISCDATE6, ArTermsCodeTableMap::COL_ARTMDUEDAYS6, ArTermsCodeTableMap::COL_ARTMDUEDAY6, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6, ArTermsCodeTableMap::COL_ARTMDUEDATE6, ArTermsCodeTableMap::COL_ARTMPLUSYEAR6, ArTermsCodeTableMap::COL_ARTMDAYFROM1, ArTermsCodeTableMap::COL_ARTMDAYTHRU1, ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1, ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1, ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1, ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, ArTermsCodeTableMap::COL_ARTMDAYFROM2, ArTermsCodeTableMap::COL_ARTMDAYTHRU2, ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2, ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2, ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2, ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, ArTermsCodeTableMap::COL_ARTMDAYFROM3, ArTermsCodeTableMap::COL_ARTMDAYTHRU3, ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3, ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3, ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3, ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, ArTermsCodeTableMap::COL_ARTMCTRY, ArTermsCodeTableMap::COL_ARTMTERMGRUP, ArTermsCodeTableMap::COL_DATEUPDTD, ArTermsCodeTableMap::COL_TIMEUPDTD, ArTermsCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArtmTermCd', 'ArtmTermDesc', 'ArtmMethod', 'ArtmType', 'ArtmHold', 'ArtmExpireDate', 'ArtmFrtAllow', 'ArtmCcPrefix', 'ArtmSplit1', 'ArtmOrderPct1', 'ArtmDiscPct1', 'ArtmDiscDays1', 'ArtmDiscDay1', 'ArtmDiscDate1', 'ArtmDueDays1', 'ArtmDueDay1', 'ArtmPlusMonths1', 'ArtmDueDate1', 'ArtmPlusYear1', 'ArtmSplit2', 'ArtmOrderPct2', 'ArtmDiscPct2', 'ArtmDiscDays2', 'ArtmDiscDay2', 'ArtmDiscDate2', 'ArtmDueDays2', 'ArtmDueDay2', 'ArtmPlusMonths2', 'ArtmDueDate2', 'ArtmPlusYear2', 'ArtmSplit3', 'ArtmOrderPct3', 'ArtmDiscPct3', 'ArtmDiscDays3', 'ArtmDiscDay3', 'ArtmDiscDate3', 'ArtmDueDays3', 'ArtmDueDay3', 'ArtmPlusMonths3', 'ArtmDueDate3', 'ArtmPlusYear3', 'ArtmSplit4', 'ArtmOrderPct4', 'ArtmDiscPct4', 'ArtmDiscDays4', 'ArtmDiscDay4', 'ArtmDiscDate4', 'ArtmDueDays4', 'ArtmDueDay4', 'ArtmPlusMonths4', 'ArtmDueDate4', 'ArtmPlusYear4', 'ArtmSplit5', 'ArtmOrderPct5', 'ArtmDiscPct5', 'ArtmDiscDays5', 'ArtmDiscDay5', 'ArtmDiscDate5', 'ArtmDueDays5', 'ArtmDueDay5', 'ArtmPlusMonths5', 'ArtmDueDate5', 'ArtmPlusYear5', 'ArtmSplit6', 'ArtmOrderPct6', 'ArtmDiscPct6', 'ArtmDiscDays6', 'ArtmDiscDay6', 'ArtmDiscDate6', 'ArtmDueDays6', 'ArtmDueDay6', 'ArtmPlusMonths6', 'ArtmDueDate6', 'ArtmPlusYear6', 'ArtmDayFrom1', 'ArtmDayThru1', 'ArtmEomDiscPct1', 'ArtmEomDiscDay1', 'ArtmEomDiscMonths1', 'ArtmEomDueDay1', 'ArtmEomPlusMonths1', 'ArtmDayFrom2', 'ArtmDayThru2', 'ArtmEomDiscPct2', 'ArtmEomDiscDay2', 'ArtmEomDiscMonths2', 'ArtmEomDueDay2', 'ArtmEomPlusMonths2', 'ArtmDayFrom3', 'ArtmDayThru3', 'ArtmEomDiscPct3', 'ArtmEomDiscDay3', 'ArtmEomDiscMonths3', 'ArtmEomDueDay3', 'ArtmEomPlusMonths3', 'ArtmCtry', 'ArtmTermGrup', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, ]
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
        self::TYPE_PHPNAME       => ['Artmtermcd' => 0, 'Artmtermdesc' => 1, 'Artmmethod' => 2, 'Artmtype' => 3, 'Artmhold' => 4, 'Artmexpiredate' => 5, 'Artmfrtallow' => 6, 'Artmccprefix' => 7, 'Artmsplit1' => 8, 'Artmorderpct1' => 9, 'Artmdiscpct1' => 10, 'Artmdiscdays1' => 11, 'Artmdiscday1' => 12, 'Artmdiscdate1' => 13, 'Artmduedays1' => 14, 'Artmdueday1' => 15, 'Artmplusmonths1' => 16, 'Artmduedate1' => 17, 'Artmplusyear1' => 18, 'Artmsplit2' => 19, 'Artmorderpct2' => 20, 'Artmdiscpct2' => 21, 'Artmdiscdays2' => 22, 'Artmdiscday2' => 23, 'Artmdiscdate2' => 24, 'Artmduedays2' => 25, 'Artmdueday2' => 26, 'Artmplusmonths2' => 27, 'Artmduedate2' => 28, 'Artmplusyear2' => 29, 'Artmsplit3' => 30, 'Artmorderpct3' => 31, 'Artmdiscpct3' => 32, 'Artmdiscdays3' => 33, 'Artmdiscday3' => 34, 'Artmdiscdate3' => 35, 'Artmduedays3' => 36, 'Artmdueday3' => 37, 'Artmplusmonths3' => 38, 'Artmduedate3' => 39, 'Artmplusyear3' => 40, 'Artmsplit4' => 41, 'Artmorderpct4' => 42, 'Artmdiscpct4' => 43, 'Artmdiscdays4' => 44, 'Artmdiscday4' => 45, 'Artmdiscdate4' => 46, 'Artmduedays4' => 47, 'Artmdueday4' => 48, 'Artmplusmonths4' => 49, 'Artmduedate4' => 50, 'Artmplusyear4' => 51, 'Artmsplit5' => 52, 'Artmorderpct5' => 53, 'Artmdiscpct5' => 54, 'Artmdiscdays5' => 55, 'Artmdiscday5' => 56, 'Artmdiscdate5' => 57, 'Artmduedays5' => 58, 'Artmdueday5' => 59, 'Artmplusmonths5' => 60, 'Artmduedate5' => 61, 'Artmplusyear5' => 62, 'Artmsplit6' => 63, 'Artmorderpct6' => 64, 'Artmdiscpct6' => 65, 'Artmdiscdays6' => 66, 'Artmdiscday6' => 67, 'Artmdiscdate6' => 68, 'Artmduedays6' => 69, 'Artmdueday6' => 70, 'Artmplusmonths6' => 71, 'Artmduedate6' => 72, 'Artmplusyear6' => 73, 'Artmdayfrom1' => 74, 'Artmdaythru1' => 75, 'Artmeomdiscpct1' => 76, 'Artmeomdiscday1' => 77, 'Artmeomdiscmonths1' => 78, 'Artmeomdueday1' => 79, 'Artmeomplusmonths1' => 80, 'Artmdayfrom2' => 81, 'Artmdaythru2' => 82, 'Artmeomdiscpct2' => 83, 'Artmeomdiscday2' => 84, 'Artmeomdiscmonths2' => 85, 'Artmeomdueday2' => 86, 'Artmeomplusmonths2' => 87, 'Artmdayfrom3' => 88, 'Artmdaythru3' => 89, 'Artmeomdiscpct3' => 90, 'Artmeomdiscday3' => 91, 'Artmeomdiscmonths3' => 92, 'Artmeomdueday3' => 93, 'Artmeomplusmonths3' => 94, 'Artmctry' => 95, 'Artmtermgrup' => 96, 'Dateupdtd' => 97, 'Timeupdtd' => 98, 'Dummy' => 99, ],
        self::TYPE_CAMELNAME     => ['artmtermcd' => 0, 'artmtermdesc' => 1, 'artmmethod' => 2, 'artmtype' => 3, 'artmhold' => 4, 'artmexpiredate' => 5, 'artmfrtallow' => 6, 'artmccprefix' => 7, 'artmsplit1' => 8, 'artmorderpct1' => 9, 'artmdiscpct1' => 10, 'artmdiscdays1' => 11, 'artmdiscday1' => 12, 'artmdiscdate1' => 13, 'artmduedays1' => 14, 'artmdueday1' => 15, 'artmplusmonths1' => 16, 'artmduedate1' => 17, 'artmplusyear1' => 18, 'artmsplit2' => 19, 'artmorderpct2' => 20, 'artmdiscpct2' => 21, 'artmdiscdays2' => 22, 'artmdiscday2' => 23, 'artmdiscdate2' => 24, 'artmduedays2' => 25, 'artmdueday2' => 26, 'artmplusmonths2' => 27, 'artmduedate2' => 28, 'artmplusyear2' => 29, 'artmsplit3' => 30, 'artmorderpct3' => 31, 'artmdiscpct3' => 32, 'artmdiscdays3' => 33, 'artmdiscday3' => 34, 'artmdiscdate3' => 35, 'artmduedays3' => 36, 'artmdueday3' => 37, 'artmplusmonths3' => 38, 'artmduedate3' => 39, 'artmplusyear3' => 40, 'artmsplit4' => 41, 'artmorderpct4' => 42, 'artmdiscpct4' => 43, 'artmdiscdays4' => 44, 'artmdiscday4' => 45, 'artmdiscdate4' => 46, 'artmduedays4' => 47, 'artmdueday4' => 48, 'artmplusmonths4' => 49, 'artmduedate4' => 50, 'artmplusyear4' => 51, 'artmsplit5' => 52, 'artmorderpct5' => 53, 'artmdiscpct5' => 54, 'artmdiscdays5' => 55, 'artmdiscday5' => 56, 'artmdiscdate5' => 57, 'artmduedays5' => 58, 'artmdueday5' => 59, 'artmplusmonths5' => 60, 'artmduedate5' => 61, 'artmplusyear5' => 62, 'artmsplit6' => 63, 'artmorderpct6' => 64, 'artmdiscpct6' => 65, 'artmdiscdays6' => 66, 'artmdiscday6' => 67, 'artmdiscdate6' => 68, 'artmduedays6' => 69, 'artmdueday6' => 70, 'artmplusmonths6' => 71, 'artmduedate6' => 72, 'artmplusyear6' => 73, 'artmdayfrom1' => 74, 'artmdaythru1' => 75, 'artmeomdiscpct1' => 76, 'artmeomdiscday1' => 77, 'artmeomdiscmonths1' => 78, 'artmeomdueday1' => 79, 'artmeomplusmonths1' => 80, 'artmdayfrom2' => 81, 'artmdaythru2' => 82, 'artmeomdiscpct2' => 83, 'artmeomdiscday2' => 84, 'artmeomdiscmonths2' => 85, 'artmeomdueday2' => 86, 'artmeomplusmonths2' => 87, 'artmdayfrom3' => 88, 'artmdaythru3' => 89, 'artmeomdiscpct3' => 90, 'artmeomdiscday3' => 91, 'artmeomdiscmonths3' => 92, 'artmeomdueday3' => 93, 'artmeomplusmonths3' => 94, 'artmctry' => 95, 'artmtermgrup' => 96, 'dateupdtd' => 97, 'timeupdtd' => 98, 'dummy' => 99, ],
        self::TYPE_COLNAME       => [ArTermsCodeTableMap::COL_ARTMTERMCD => 0, ArTermsCodeTableMap::COL_ARTMTERMDESC => 1, ArTermsCodeTableMap::COL_ARTMMETHOD => 2, ArTermsCodeTableMap::COL_ARTMTYPE => 3, ArTermsCodeTableMap::COL_ARTMHOLD => 4, ArTermsCodeTableMap::COL_ARTMEXPIREDATE => 5, ArTermsCodeTableMap::COL_ARTMFRTALLOW => 6, ArTermsCodeTableMap::COL_ARTMCCPREFIX => 7, ArTermsCodeTableMap::COL_ARTMSPLIT1 => 8, ArTermsCodeTableMap::COL_ARTMORDERPCT1 => 9, ArTermsCodeTableMap::COL_ARTMDISCPCT1 => 10, ArTermsCodeTableMap::COL_ARTMDISCDAYS1 => 11, ArTermsCodeTableMap::COL_ARTMDISCDAY1 => 12, ArTermsCodeTableMap::COL_ARTMDISCDATE1 => 13, ArTermsCodeTableMap::COL_ARTMDUEDAYS1 => 14, ArTermsCodeTableMap::COL_ARTMDUEDAY1 => 15, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1 => 16, ArTermsCodeTableMap::COL_ARTMDUEDATE1 => 17, ArTermsCodeTableMap::COL_ARTMPLUSYEAR1 => 18, ArTermsCodeTableMap::COL_ARTMSPLIT2 => 19, ArTermsCodeTableMap::COL_ARTMORDERPCT2 => 20, ArTermsCodeTableMap::COL_ARTMDISCPCT2 => 21, ArTermsCodeTableMap::COL_ARTMDISCDAYS2 => 22, ArTermsCodeTableMap::COL_ARTMDISCDAY2 => 23, ArTermsCodeTableMap::COL_ARTMDISCDATE2 => 24, ArTermsCodeTableMap::COL_ARTMDUEDAYS2 => 25, ArTermsCodeTableMap::COL_ARTMDUEDAY2 => 26, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2 => 27, ArTermsCodeTableMap::COL_ARTMDUEDATE2 => 28, ArTermsCodeTableMap::COL_ARTMPLUSYEAR2 => 29, ArTermsCodeTableMap::COL_ARTMSPLIT3 => 30, ArTermsCodeTableMap::COL_ARTMORDERPCT3 => 31, ArTermsCodeTableMap::COL_ARTMDISCPCT3 => 32, ArTermsCodeTableMap::COL_ARTMDISCDAYS3 => 33, ArTermsCodeTableMap::COL_ARTMDISCDAY3 => 34, ArTermsCodeTableMap::COL_ARTMDISCDATE3 => 35, ArTermsCodeTableMap::COL_ARTMDUEDAYS3 => 36, ArTermsCodeTableMap::COL_ARTMDUEDAY3 => 37, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3 => 38, ArTermsCodeTableMap::COL_ARTMDUEDATE3 => 39, ArTermsCodeTableMap::COL_ARTMPLUSYEAR3 => 40, ArTermsCodeTableMap::COL_ARTMSPLIT4 => 41, ArTermsCodeTableMap::COL_ARTMORDERPCT4 => 42, ArTermsCodeTableMap::COL_ARTMDISCPCT4 => 43, ArTermsCodeTableMap::COL_ARTMDISCDAYS4 => 44, ArTermsCodeTableMap::COL_ARTMDISCDAY4 => 45, ArTermsCodeTableMap::COL_ARTMDISCDATE4 => 46, ArTermsCodeTableMap::COL_ARTMDUEDAYS4 => 47, ArTermsCodeTableMap::COL_ARTMDUEDAY4 => 48, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4 => 49, ArTermsCodeTableMap::COL_ARTMDUEDATE4 => 50, ArTermsCodeTableMap::COL_ARTMPLUSYEAR4 => 51, ArTermsCodeTableMap::COL_ARTMSPLIT5 => 52, ArTermsCodeTableMap::COL_ARTMORDERPCT5 => 53, ArTermsCodeTableMap::COL_ARTMDISCPCT5 => 54, ArTermsCodeTableMap::COL_ARTMDISCDAYS5 => 55, ArTermsCodeTableMap::COL_ARTMDISCDAY5 => 56, ArTermsCodeTableMap::COL_ARTMDISCDATE5 => 57, ArTermsCodeTableMap::COL_ARTMDUEDAYS5 => 58, ArTermsCodeTableMap::COL_ARTMDUEDAY5 => 59, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5 => 60, ArTermsCodeTableMap::COL_ARTMDUEDATE5 => 61, ArTermsCodeTableMap::COL_ARTMPLUSYEAR5 => 62, ArTermsCodeTableMap::COL_ARTMSPLIT6 => 63, ArTermsCodeTableMap::COL_ARTMORDERPCT6 => 64, ArTermsCodeTableMap::COL_ARTMDISCPCT6 => 65, ArTermsCodeTableMap::COL_ARTMDISCDAYS6 => 66, ArTermsCodeTableMap::COL_ARTMDISCDAY6 => 67, ArTermsCodeTableMap::COL_ARTMDISCDATE6 => 68, ArTermsCodeTableMap::COL_ARTMDUEDAYS6 => 69, ArTermsCodeTableMap::COL_ARTMDUEDAY6 => 70, ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6 => 71, ArTermsCodeTableMap::COL_ARTMDUEDATE6 => 72, ArTermsCodeTableMap::COL_ARTMPLUSYEAR6 => 73, ArTermsCodeTableMap::COL_ARTMDAYFROM1 => 74, ArTermsCodeTableMap::COL_ARTMDAYTHRU1 => 75, ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1 => 76, ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1 => 77, ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1 => 78, ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1 => 79, ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1 => 80, ArTermsCodeTableMap::COL_ARTMDAYFROM2 => 81, ArTermsCodeTableMap::COL_ARTMDAYTHRU2 => 82, ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2 => 83, ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2 => 84, ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2 => 85, ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2 => 86, ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2 => 87, ArTermsCodeTableMap::COL_ARTMDAYFROM3 => 88, ArTermsCodeTableMap::COL_ARTMDAYTHRU3 => 89, ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3 => 90, ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3 => 91, ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3 => 92, ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3 => 93, ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3 => 94, ArTermsCodeTableMap::COL_ARTMCTRY => 95, ArTermsCodeTableMap::COL_ARTMTERMGRUP => 96, ArTermsCodeTableMap::COL_DATEUPDTD => 97, ArTermsCodeTableMap::COL_TIMEUPDTD => 98, ArTermsCodeTableMap::COL_DUMMY => 99, ],
        self::TYPE_FIELDNAME     => ['ArtmTermCd' => 0, 'ArtmTermDesc' => 1, 'ArtmMethod' => 2, 'ArtmType' => 3, 'ArtmHold' => 4, 'ArtmExpireDate' => 5, 'ArtmFrtAllow' => 6, 'ArtmCcPrefix' => 7, 'ArtmSplit1' => 8, 'ArtmOrderPct1' => 9, 'ArtmDiscPct1' => 10, 'ArtmDiscDays1' => 11, 'ArtmDiscDay1' => 12, 'ArtmDiscDate1' => 13, 'ArtmDueDays1' => 14, 'ArtmDueDay1' => 15, 'ArtmPlusMonths1' => 16, 'ArtmDueDate1' => 17, 'ArtmPlusYear1' => 18, 'ArtmSplit2' => 19, 'ArtmOrderPct2' => 20, 'ArtmDiscPct2' => 21, 'ArtmDiscDays2' => 22, 'ArtmDiscDay2' => 23, 'ArtmDiscDate2' => 24, 'ArtmDueDays2' => 25, 'ArtmDueDay2' => 26, 'ArtmPlusMonths2' => 27, 'ArtmDueDate2' => 28, 'ArtmPlusYear2' => 29, 'ArtmSplit3' => 30, 'ArtmOrderPct3' => 31, 'ArtmDiscPct3' => 32, 'ArtmDiscDays3' => 33, 'ArtmDiscDay3' => 34, 'ArtmDiscDate3' => 35, 'ArtmDueDays3' => 36, 'ArtmDueDay3' => 37, 'ArtmPlusMonths3' => 38, 'ArtmDueDate3' => 39, 'ArtmPlusYear3' => 40, 'ArtmSplit4' => 41, 'ArtmOrderPct4' => 42, 'ArtmDiscPct4' => 43, 'ArtmDiscDays4' => 44, 'ArtmDiscDay4' => 45, 'ArtmDiscDate4' => 46, 'ArtmDueDays4' => 47, 'ArtmDueDay4' => 48, 'ArtmPlusMonths4' => 49, 'ArtmDueDate4' => 50, 'ArtmPlusYear4' => 51, 'ArtmSplit5' => 52, 'ArtmOrderPct5' => 53, 'ArtmDiscPct5' => 54, 'ArtmDiscDays5' => 55, 'ArtmDiscDay5' => 56, 'ArtmDiscDate5' => 57, 'ArtmDueDays5' => 58, 'ArtmDueDay5' => 59, 'ArtmPlusMonths5' => 60, 'ArtmDueDate5' => 61, 'ArtmPlusYear5' => 62, 'ArtmSplit6' => 63, 'ArtmOrderPct6' => 64, 'ArtmDiscPct6' => 65, 'ArtmDiscDays6' => 66, 'ArtmDiscDay6' => 67, 'ArtmDiscDate6' => 68, 'ArtmDueDays6' => 69, 'ArtmDueDay6' => 70, 'ArtmPlusMonths6' => 71, 'ArtmDueDate6' => 72, 'ArtmPlusYear6' => 73, 'ArtmDayFrom1' => 74, 'ArtmDayThru1' => 75, 'ArtmEomDiscPct1' => 76, 'ArtmEomDiscDay1' => 77, 'ArtmEomDiscMonths1' => 78, 'ArtmEomDueDay1' => 79, 'ArtmEomPlusMonths1' => 80, 'ArtmDayFrom2' => 81, 'ArtmDayThru2' => 82, 'ArtmEomDiscPct2' => 83, 'ArtmEomDiscDay2' => 84, 'ArtmEomDiscMonths2' => 85, 'ArtmEomDueDay2' => 86, 'ArtmEomPlusMonths2' => 87, 'ArtmDayFrom3' => 88, 'ArtmDayThru3' => 89, 'ArtmEomDiscPct3' => 90, 'ArtmEomDiscDay3' => 91, 'ArtmEomDiscMonths3' => 92, 'ArtmEomDueDay3' => 93, 'ArtmEomPlusMonths3' => 94, 'ArtmCtry' => 95, 'ArtmTermGrup' => 96, 'DateUpdtd' => 97, 'TimeUpdtd' => 98, 'dummy' => 99, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Artmtermcd' => 'ARTMTERMCD',
        'ArTermsCode.Artmtermcd' => 'ARTMTERMCD',
        'artmtermcd' => 'ARTMTERMCD',
        'arTermsCode.artmtermcd' => 'ARTMTERMCD',
        'ArTermsCodeTableMap::COL_ARTMTERMCD' => 'ARTMTERMCD',
        'COL_ARTMTERMCD' => 'ARTMTERMCD',
        'ArtmTermCd' => 'ARTMTERMCD',
        'ar_term_code.ArtmTermCd' => 'ARTMTERMCD',
        'Artmtermdesc' => 'ARTMTERMDESC',
        'ArTermsCode.Artmtermdesc' => 'ARTMTERMDESC',
        'artmtermdesc' => 'ARTMTERMDESC',
        'arTermsCode.artmtermdesc' => 'ARTMTERMDESC',
        'ArTermsCodeTableMap::COL_ARTMTERMDESC' => 'ARTMTERMDESC',
        'COL_ARTMTERMDESC' => 'ARTMTERMDESC',
        'ArtmTermDesc' => 'ARTMTERMDESC',
        'ar_term_code.ArtmTermDesc' => 'ARTMTERMDESC',
        'Artmmethod' => 'ARTMMETHOD',
        'ArTermsCode.Artmmethod' => 'ARTMMETHOD',
        'artmmethod' => 'ARTMMETHOD',
        'arTermsCode.artmmethod' => 'ARTMMETHOD',
        'ArTermsCodeTableMap::COL_ARTMMETHOD' => 'ARTMMETHOD',
        'COL_ARTMMETHOD' => 'ARTMMETHOD',
        'ArtmMethod' => 'ARTMMETHOD',
        'ar_term_code.ArtmMethod' => 'ARTMMETHOD',
        'Artmtype' => 'ARTMTYPE',
        'ArTermsCode.Artmtype' => 'ARTMTYPE',
        'artmtype' => 'ARTMTYPE',
        'arTermsCode.artmtype' => 'ARTMTYPE',
        'ArTermsCodeTableMap::COL_ARTMTYPE' => 'ARTMTYPE',
        'COL_ARTMTYPE' => 'ARTMTYPE',
        'ArtmType' => 'ARTMTYPE',
        'ar_term_code.ArtmType' => 'ARTMTYPE',
        'Artmhold' => 'ARTMHOLD',
        'ArTermsCode.Artmhold' => 'ARTMHOLD',
        'artmhold' => 'ARTMHOLD',
        'arTermsCode.artmhold' => 'ARTMHOLD',
        'ArTermsCodeTableMap::COL_ARTMHOLD' => 'ARTMHOLD',
        'COL_ARTMHOLD' => 'ARTMHOLD',
        'ArtmHold' => 'ARTMHOLD',
        'ar_term_code.ArtmHold' => 'ARTMHOLD',
        'Artmexpiredate' => 'ARTMEXPIREDATE',
        'ArTermsCode.Artmexpiredate' => 'ARTMEXPIREDATE',
        'artmexpiredate' => 'ARTMEXPIREDATE',
        'arTermsCode.artmexpiredate' => 'ARTMEXPIREDATE',
        'ArTermsCodeTableMap::COL_ARTMEXPIREDATE' => 'ARTMEXPIREDATE',
        'COL_ARTMEXPIREDATE' => 'ARTMEXPIREDATE',
        'ArtmExpireDate' => 'ARTMEXPIREDATE',
        'ar_term_code.ArtmExpireDate' => 'ARTMEXPIREDATE',
        'Artmfrtallow' => 'ARTMFRTALLOW',
        'ArTermsCode.Artmfrtallow' => 'ARTMFRTALLOW',
        'artmfrtallow' => 'ARTMFRTALLOW',
        'arTermsCode.artmfrtallow' => 'ARTMFRTALLOW',
        'ArTermsCodeTableMap::COL_ARTMFRTALLOW' => 'ARTMFRTALLOW',
        'COL_ARTMFRTALLOW' => 'ARTMFRTALLOW',
        'ArtmFrtAllow' => 'ARTMFRTALLOW',
        'ar_term_code.ArtmFrtAllow' => 'ARTMFRTALLOW',
        'Artmccprefix' => 'ARTMCCPREFIX',
        'ArTermsCode.Artmccprefix' => 'ARTMCCPREFIX',
        'artmccprefix' => 'ARTMCCPREFIX',
        'arTermsCode.artmccprefix' => 'ARTMCCPREFIX',
        'ArTermsCodeTableMap::COL_ARTMCCPREFIX' => 'ARTMCCPREFIX',
        'COL_ARTMCCPREFIX' => 'ARTMCCPREFIX',
        'ArtmCcPrefix' => 'ARTMCCPREFIX',
        'ar_term_code.ArtmCcPrefix' => 'ARTMCCPREFIX',
        'Artmsplit1' => 'ARTMSPLIT1',
        'ArTermsCode.Artmsplit1' => 'ARTMSPLIT1',
        'artmsplit1' => 'ARTMSPLIT1',
        'arTermsCode.artmsplit1' => 'ARTMSPLIT1',
        'ArTermsCodeTableMap::COL_ARTMSPLIT1' => 'ARTMSPLIT1',
        'COL_ARTMSPLIT1' => 'ARTMSPLIT1',
        'ArtmSplit1' => 'ARTMSPLIT1',
        'ar_term_code.ArtmSplit1' => 'ARTMSPLIT1',
        'Artmorderpct1' => 'ARTMORDERPCT1',
        'ArTermsCode.Artmorderpct1' => 'ARTMORDERPCT1',
        'artmorderpct1' => 'ARTMORDERPCT1',
        'arTermsCode.artmorderpct1' => 'ARTMORDERPCT1',
        'ArTermsCodeTableMap::COL_ARTMORDERPCT1' => 'ARTMORDERPCT1',
        'COL_ARTMORDERPCT1' => 'ARTMORDERPCT1',
        'ArtmOrderPct1' => 'ARTMORDERPCT1',
        'ar_term_code.ArtmOrderPct1' => 'ARTMORDERPCT1',
        'Artmdiscpct1' => 'ARTMDISCPCT1',
        'ArTermsCode.Artmdiscpct1' => 'ARTMDISCPCT1',
        'artmdiscpct1' => 'ARTMDISCPCT1',
        'arTermsCode.artmdiscpct1' => 'ARTMDISCPCT1',
        'ArTermsCodeTableMap::COL_ARTMDISCPCT1' => 'ARTMDISCPCT1',
        'COL_ARTMDISCPCT1' => 'ARTMDISCPCT1',
        'ArtmDiscPct1' => 'ARTMDISCPCT1',
        'ar_term_code.ArtmDiscPct1' => 'ARTMDISCPCT1',
        'Artmdiscdays1' => 'ARTMDISCDAYS1',
        'ArTermsCode.Artmdiscdays1' => 'ARTMDISCDAYS1',
        'artmdiscdays1' => 'ARTMDISCDAYS1',
        'arTermsCode.artmdiscdays1' => 'ARTMDISCDAYS1',
        'ArTermsCodeTableMap::COL_ARTMDISCDAYS1' => 'ARTMDISCDAYS1',
        'COL_ARTMDISCDAYS1' => 'ARTMDISCDAYS1',
        'ArtmDiscDays1' => 'ARTMDISCDAYS1',
        'ar_term_code.ArtmDiscDays1' => 'ARTMDISCDAYS1',
        'Artmdiscday1' => 'ARTMDISCDAY1',
        'ArTermsCode.Artmdiscday1' => 'ARTMDISCDAY1',
        'artmdiscday1' => 'ARTMDISCDAY1',
        'arTermsCode.artmdiscday1' => 'ARTMDISCDAY1',
        'ArTermsCodeTableMap::COL_ARTMDISCDAY1' => 'ARTMDISCDAY1',
        'COL_ARTMDISCDAY1' => 'ARTMDISCDAY1',
        'ArtmDiscDay1' => 'ARTMDISCDAY1',
        'ar_term_code.ArtmDiscDay1' => 'ARTMDISCDAY1',
        'Artmdiscdate1' => 'ARTMDISCDATE1',
        'ArTermsCode.Artmdiscdate1' => 'ARTMDISCDATE1',
        'artmdiscdate1' => 'ARTMDISCDATE1',
        'arTermsCode.artmdiscdate1' => 'ARTMDISCDATE1',
        'ArTermsCodeTableMap::COL_ARTMDISCDATE1' => 'ARTMDISCDATE1',
        'COL_ARTMDISCDATE1' => 'ARTMDISCDATE1',
        'ArtmDiscDate1' => 'ARTMDISCDATE1',
        'ar_term_code.ArtmDiscDate1' => 'ARTMDISCDATE1',
        'Artmduedays1' => 'ARTMDUEDAYS1',
        'ArTermsCode.Artmduedays1' => 'ARTMDUEDAYS1',
        'artmduedays1' => 'ARTMDUEDAYS1',
        'arTermsCode.artmduedays1' => 'ARTMDUEDAYS1',
        'ArTermsCodeTableMap::COL_ARTMDUEDAYS1' => 'ARTMDUEDAYS1',
        'COL_ARTMDUEDAYS1' => 'ARTMDUEDAYS1',
        'ArtmDueDays1' => 'ARTMDUEDAYS1',
        'ar_term_code.ArtmDueDays1' => 'ARTMDUEDAYS1',
        'Artmdueday1' => 'ARTMDUEDAY1',
        'ArTermsCode.Artmdueday1' => 'ARTMDUEDAY1',
        'artmdueday1' => 'ARTMDUEDAY1',
        'arTermsCode.artmdueday1' => 'ARTMDUEDAY1',
        'ArTermsCodeTableMap::COL_ARTMDUEDAY1' => 'ARTMDUEDAY1',
        'COL_ARTMDUEDAY1' => 'ARTMDUEDAY1',
        'ArtmDueDay1' => 'ARTMDUEDAY1',
        'ar_term_code.ArtmDueDay1' => 'ARTMDUEDAY1',
        'Artmplusmonths1' => 'ARTMPLUSMONTHS1',
        'ArTermsCode.Artmplusmonths1' => 'ARTMPLUSMONTHS1',
        'artmplusmonths1' => 'ARTMPLUSMONTHS1',
        'arTermsCode.artmplusmonths1' => 'ARTMPLUSMONTHS1',
        'ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1' => 'ARTMPLUSMONTHS1',
        'COL_ARTMPLUSMONTHS1' => 'ARTMPLUSMONTHS1',
        'ArtmPlusMonths1' => 'ARTMPLUSMONTHS1',
        'ar_term_code.ArtmPlusMonths1' => 'ARTMPLUSMONTHS1',
        'Artmduedate1' => 'ARTMDUEDATE1',
        'ArTermsCode.Artmduedate1' => 'ARTMDUEDATE1',
        'artmduedate1' => 'ARTMDUEDATE1',
        'arTermsCode.artmduedate1' => 'ARTMDUEDATE1',
        'ArTermsCodeTableMap::COL_ARTMDUEDATE1' => 'ARTMDUEDATE1',
        'COL_ARTMDUEDATE1' => 'ARTMDUEDATE1',
        'ArtmDueDate1' => 'ARTMDUEDATE1',
        'ar_term_code.ArtmDueDate1' => 'ARTMDUEDATE1',
        'Artmplusyear1' => 'ARTMPLUSYEAR1',
        'ArTermsCode.Artmplusyear1' => 'ARTMPLUSYEAR1',
        'artmplusyear1' => 'ARTMPLUSYEAR1',
        'arTermsCode.artmplusyear1' => 'ARTMPLUSYEAR1',
        'ArTermsCodeTableMap::COL_ARTMPLUSYEAR1' => 'ARTMPLUSYEAR1',
        'COL_ARTMPLUSYEAR1' => 'ARTMPLUSYEAR1',
        'ArtmPlusYear1' => 'ARTMPLUSYEAR1',
        'ar_term_code.ArtmPlusYear1' => 'ARTMPLUSYEAR1',
        'Artmsplit2' => 'ARTMSPLIT2',
        'ArTermsCode.Artmsplit2' => 'ARTMSPLIT2',
        'artmsplit2' => 'ARTMSPLIT2',
        'arTermsCode.artmsplit2' => 'ARTMSPLIT2',
        'ArTermsCodeTableMap::COL_ARTMSPLIT2' => 'ARTMSPLIT2',
        'COL_ARTMSPLIT2' => 'ARTMSPLIT2',
        'ArtmSplit2' => 'ARTMSPLIT2',
        'ar_term_code.ArtmSplit2' => 'ARTMSPLIT2',
        'Artmorderpct2' => 'ARTMORDERPCT2',
        'ArTermsCode.Artmorderpct2' => 'ARTMORDERPCT2',
        'artmorderpct2' => 'ARTMORDERPCT2',
        'arTermsCode.artmorderpct2' => 'ARTMORDERPCT2',
        'ArTermsCodeTableMap::COL_ARTMORDERPCT2' => 'ARTMORDERPCT2',
        'COL_ARTMORDERPCT2' => 'ARTMORDERPCT2',
        'ArtmOrderPct2' => 'ARTMORDERPCT2',
        'ar_term_code.ArtmOrderPct2' => 'ARTMORDERPCT2',
        'Artmdiscpct2' => 'ARTMDISCPCT2',
        'ArTermsCode.Artmdiscpct2' => 'ARTMDISCPCT2',
        'artmdiscpct2' => 'ARTMDISCPCT2',
        'arTermsCode.artmdiscpct2' => 'ARTMDISCPCT2',
        'ArTermsCodeTableMap::COL_ARTMDISCPCT2' => 'ARTMDISCPCT2',
        'COL_ARTMDISCPCT2' => 'ARTMDISCPCT2',
        'ArtmDiscPct2' => 'ARTMDISCPCT2',
        'ar_term_code.ArtmDiscPct2' => 'ARTMDISCPCT2',
        'Artmdiscdays2' => 'ARTMDISCDAYS2',
        'ArTermsCode.Artmdiscdays2' => 'ARTMDISCDAYS2',
        'artmdiscdays2' => 'ARTMDISCDAYS2',
        'arTermsCode.artmdiscdays2' => 'ARTMDISCDAYS2',
        'ArTermsCodeTableMap::COL_ARTMDISCDAYS2' => 'ARTMDISCDAYS2',
        'COL_ARTMDISCDAYS2' => 'ARTMDISCDAYS2',
        'ArtmDiscDays2' => 'ARTMDISCDAYS2',
        'ar_term_code.ArtmDiscDays2' => 'ARTMDISCDAYS2',
        'Artmdiscday2' => 'ARTMDISCDAY2',
        'ArTermsCode.Artmdiscday2' => 'ARTMDISCDAY2',
        'artmdiscday2' => 'ARTMDISCDAY2',
        'arTermsCode.artmdiscday2' => 'ARTMDISCDAY2',
        'ArTermsCodeTableMap::COL_ARTMDISCDAY2' => 'ARTMDISCDAY2',
        'COL_ARTMDISCDAY2' => 'ARTMDISCDAY2',
        'ArtmDiscDay2' => 'ARTMDISCDAY2',
        'ar_term_code.ArtmDiscDay2' => 'ARTMDISCDAY2',
        'Artmdiscdate2' => 'ARTMDISCDATE2',
        'ArTermsCode.Artmdiscdate2' => 'ARTMDISCDATE2',
        'artmdiscdate2' => 'ARTMDISCDATE2',
        'arTermsCode.artmdiscdate2' => 'ARTMDISCDATE2',
        'ArTermsCodeTableMap::COL_ARTMDISCDATE2' => 'ARTMDISCDATE2',
        'COL_ARTMDISCDATE2' => 'ARTMDISCDATE2',
        'ArtmDiscDate2' => 'ARTMDISCDATE2',
        'ar_term_code.ArtmDiscDate2' => 'ARTMDISCDATE2',
        'Artmduedays2' => 'ARTMDUEDAYS2',
        'ArTermsCode.Artmduedays2' => 'ARTMDUEDAYS2',
        'artmduedays2' => 'ARTMDUEDAYS2',
        'arTermsCode.artmduedays2' => 'ARTMDUEDAYS2',
        'ArTermsCodeTableMap::COL_ARTMDUEDAYS2' => 'ARTMDUEDAYS2',
        'COL_ARTMDUEDAYS2' => 'ARTMDUEDAYS2',
        'ArtmDueDays2' => 'ARTMDUEDAYS2',
        'ar_term_code.ArtmDueDays2' => 'ARTMDUEDAYS2',
        'Artmdueday2' => 'ARTMDUEDAY2',
        'ArTermsCode.Artmdueday2' => 'ARTMDUEDAY2',
        'artmdueday2' => 'ARTMDUEDAY2',
        'arTermsCode.artmdueday2' => 'ARTMDUEDAY2',
        'ArTermsCodeTableMap::COL_ARTMDUEDAY2' => 'ARTMDUEDAY2',
        'COL_ARTMDUEDAY2' => 'ARTMDUEDAY2',
        'ArtmDueDay2' => 'ARTMDUEDAY2',
        'ar_term_code.ArtmDueDay2' => 'ARTMDUEDAY2',
        'Artmplusmonths2' => 'ARTMPLUSMONTHS2',
        'ArTermsCode.Artmplusmonths2' => 'ARTMPLUSMONTHS2',
        'artmplusmonths2' => 'ARTMPLUSMONTHS2',
        'arTermsCode.artmplusmonths2' => 'ARTMPLUSMONTHS2',
        'ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2' => 'ARTMPLUSMONTHS2',
        'COL_ARTMPLUSMONTHS2' => 'ARTMPLUSMONTHS2',
        'ArtmPlusMonths2' => 'ARTMPLUSMONTHS2',
        'ar_term_code.ArtmPlusMonths2' => 'ARTMPLUSMONTHS2',
        'Artmduedate2' => 'ARTMDUEDATE2',
        'ArTermsCode.Artmduedate2' => 'ARTMDUEDATE2',
        'artmduedate2' => 'ARTMDUEDATE2',
        'arTermsCode.artmduedate2' => 'ARTMDUEDATE2',
        'ArTermsCodeTableMap::COL_ARTMDUEDATE2' => 'ARTMDUEDATE2',
        'COL_ARTMDUEDATE2' => 'ARTMDUEDATE2',
        'ArtmDueDate2' => 'ARTMDUEDATE2',
        'ar_term_code.ArtmDueDate2' => 'ARTMDUEDATE2',
        'Artmplusyear2' => 'ARTMPLUSYEAR2',
        'ArTermsCode.Artmplusyear2' => 'ARTMPLUSYEAR2',
        'artmplusyear2' => 'ARTMPLUSYEAR2',
        'arTermsCode.artmplusyear2' => 'ARTMPLUSYEAR2',
        'ArTermsCodeTableMap::COL_ARTMPLUSYEAR2' => 'ARTMPLUSYEAR2',
        'COL_ARTMPLUSYEAR2' => 'ARTMPLUSYEAR2',
        'ArtmPlusYear2' => 'ARTMPLUSYEAR2',
        'ar_term_code.ArtmPlusYear2' => 'ARTMPLUSYEAR2',
        'Artmsplit3' => 'ARTMSPLIT3',
        'ArTermsCode.Artmsplit3' => 'ARTMSPLIT3',
        'artmsplit3' => 'ARTMSPLIT3',
        'arTermsCode.artmsplit3' => 'ARTMSPLIT3',
        'ArTermsCodeTableMap::COL_ARTMSPLIT3' => 'ARTMSPLIT3',
        'COL_ARTMSPLIT3' => 'ARTMSPLIT3',
        'ArtmSplit3' => 'ARTMSPLIT3',
        'ar_term_code.ArtmSplit3' => 'ARTMSPLIT3',
        'Artmorderpct3' => 'ARTMORDERPCT3',
        'ArTermsCode.Artmorderpct3' => 'ARTMORDERPCT3',
        'artmorderpct3' => 'ARTMORDERPCT3',
        'arTermsCode.artmorderpct3' => 'ARTMORDERPCT3',
        'ArTermsCodeTableMap::COL_ARTMORDERPCT3' => 'ARTMORDERPCT3',
        'COL_ARTMORDERPCT3' => 'ARTMORDERPCT3',
        'ArtmOrderPct3' => 'ARTMORDERPCT3',
        'ar_term_code.ArtmOrderPct3' => 'ARTMORDERPCT3',
        'Artmdiscpct3' => 'ARTMDISCPCT3',
        'ArTermsCode.Artmdiscpct3' => 'ARTMDISCPCT3',
        'artmdiscpct3' => 'ARTMDISCPCT3',
        'arTermsCode.artmdiscpct3' => 'ARTMDISCPCT3',
        'ArTermsCodeTableMap::COL_ARTMDISCPCT3' => 'ARTMDISCPCT3',
        'COL_ARTMDISCPCT3' => 'ARTMDISCPCT3',
        'ArtmDiscPct3' => 'ARTMDISCPCT3',
        'ar_term_code.ArtmDiscPct3' => 'ARTMDISCPCT3',
        'Artmdiscdays3' => 'ARTMDISCDAYS3',
        'ArTermsCode.Artmdiscdays3' => 'ARTMDISCDAYS3',
        'artmdiscdays3' => 'ARTMDISCDAYS3',
        'arTermsCode.artmdiscdays3' => 'ARTMDISCDAYS3',
        'ArTermsCodeTableMap::COL_ARTMDISCDAYS3' => 'ARTMDISCDAYS3',
        'COL_ARTMDISCDAYS3' => 'ARTMDISCDAYS3',
        'ArtmDiscDays3' => 'ARTMDISCDAYS3',
        'ar_term_code.ArtmDiscDays3' => 'ARTMDISCDAYS3',
        'Artmdiscday3' => 'ARTMDISCDAY3',
        'ArTermsCode.Artmdiscday3' => 'ARTMDISCDAY3',
        'artmdiscday3' => 'ARTMDISCDAY3',
        'arTermsCode.artmdiscday3' => 'ARTMDISCDAY3',
        'ArTermsCodeTableMap::COL_ARTMDISCDAY3' => 'ARTMDISCDAY3',
        'COL_ARTMDISCDAY3' => 'ARTMDISCDAY3',
        'ArtmDiscDay3' => 'ARTMDISCDAY3',
        'ar_term_code.ArtmDiscDay3' => 'ARTMDISCDAY3',
        'Artmdiscdate3' => 'ARTMDISCDATE3',
        'ArTermsCode.Artmdiscdate3' => 'ARTMDISCDATE3',
        'artmdiscdate3' => 'ARTMDISCDATE3',
        'arTermsCode.artmdiscdate3' => 'ARTMDISCDATE3',
        'ArTermsCodeTableMap::COL_ARTMDISCDATE3' => 'ARTMDISCDATE3',
        'COL_ARTMDISCDATE3' => 'ARTMDISCDATE3',
        'ArtmDiscDate3' => 'ARTMDISCDATE3',
        'ar_term_code.ArtmDiscDate3' => 'ARTMDISCDATE3',
        'Artmduedays3' => 'ARTMDUEDAYS3',
        'ArTermsCode.Artmduedays3' => 'ARTMDUEDAYS3',
        'artmduedays3' => 'ARTMDUEDAYS3',
        'arTermsCode.artmduedays3' => 'ARTMDUEDAYS3',
        'ArTermsCodeTableMap::COL_ARTMDUEDAYS3' => 'ARTMDUEDAYS3',
        'COL_ARTMDUEDAYS3' => 'ARTMDUEDAYS3',
        'ArtmDueDays3' => 'ARTMDUEDAYS3',
        'ar_term_code.ArtmDueDays3' => 'ARTMDUEDAYS3',
        'Artmdueday3' => 'ARTMDUEDAY3',
        'ArTermsCode.Artmdueday3' => 'ARTMDUEDAY3',
        'artmdueday3' => 'ARTMDUEDAY3',
        'arTermsCode.artmdueday3' => 'ARTMDUEDAY3',
        'ArTermsCodeTableMap::COL_ARTMDUEDAY3' => 'ARTMDUEDAY3',
        'COL_ARTMDUEDAY3' => 'ARTMDUEDAY3',
        'ArtmDueDay3' => 'ARTMDUEDAY3',
        'ar_term_code.ArtmDueDay3' => 'ARTMDUEDAY3',
        'Artmplusmonths3' => 'ARTMPLUSMONTHS3',
        'ArTermsCode.Artmplusmonths3' => 'ARTMPLUSMONTHS3',
        'artmplusmonths3' => 'ARTMPLUSMONTHS3',
        'arTermsCode.artmplusmonths3' => 'ARTMPLUSMONTHS3',
        'ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3' => 'ARTMPLUSMONTHS3',
        'COL_ARTMPLUSMONTHS3' => 'ARTMPLUSMONTHS3',
        'ArtmPlusMonths3' => 'ARTMPLUSMONTHS3',
        'ar_term_code.ArtmPlusMonths3' => 'ARTMPLUSMONTHS3',
        'Artmduedate3' => 'ARTMDUEDATE3',
        'ArTermsCode.Artmduedate3' => 'ARTMDUEDATE3',
        'artmduedate3' => 'ARTMDUEDATE3',
        'arTermsCode.artmduedate3' => 'ARTMDUEDATE3',
        'ArTermsCodeTableMap::COL_ARTMDUEDATE3' => 'ARTMDUEDATE3',
        'COL_ARTMDUEDATE3' => 'ARTMDUEDATE3',
        'ArtmDueDate3' => 'ARTMDUEDATE3',
        'ar_term_code.ArtmDueDate3' => 'ARTMDUEDATE3',
        'Artmplusyear3' => 'ARTMPLUSYEAR3',
        'ArTermsCode.Artmplusyear3' => 'ARTMPLUSYEAR3',
        'artmplusyear3' => 'ARTMPLUSYEAR3',
        'arTermsCode.artmplusyear3' => 'ARTMPLUSYEAR3',
        'ArTermsCodeTableMap::COL_ARTMPLUSYEAR3' => 'ARTMPLUSYEAR3',
        'COL_ARTMPLUSYEAR3' => 'ARTMPLUSYEAR3',
        'ArtmPlusYear3' => 'ARTMPLUSYEAR3',
        'ar_term_code.ArtmPlusYear3' => 'ARTMPLUSYEAR3',
        'Artmsplit4' => 'ARTMSPLIT4',
        'ArTermsCode.Artmsplit4' => 'ARTMSPLIT4',
        'artmsplit4' => 'ARTMSPLIT4',
        'arTermsCode.artmsplit4' => 'ARTMSPLIT4',
        'ArTermsCodeTableMap::COL_ARTMSPLIT4' => 'ARTMSPLIT4',
        'COL_ARTMSPLIT4' => 'ARTMSPLIT4',
        'ArtmSplit4' => 'ARTMSPLIT4',
        'ar_term_code.ArtmSplit4' => 'ARTMSPLIT4',
        'Artmorderpct4' => 'ARTMORDERPCT4',
        'ArTermsCode.Artmorderpct4' => 'ARTMORDERPCT4',
        'artmorderpct4' => 'ARTMORDERPCT4',
        'arTermsCode.artmorderpct4' => 'ARTMORDERPCT4',
        'ArTermsCodeTableMap::COL_ARTMORDERPCT4' => 'ARTMORDERPCT4',
        'COL_ARTMORDERPCT4' => 'ARTMORDERPCT4',
        'ArtmOrderPct4' => 'ARTMORDERPCT4',
        'ar_term_code.ArtmOrderPct4' => 'ARTMORDERPCT4',
        'Artmdiscpct4' => 'ARTMDISCPCT4',
        'ArTermsCode.Artmdiscpct4' => 'ARTMDISCPCT4',
        'artmdiscpct4' => 'ARTMDISCPCT4',
        'arTermsCode.artmdiscpct4' => 'ARTMDISCPCT4',
        'ArTermsCodeTableMap::COL_ARTMDISCPCT4' => 'ARTMDISCPCT4',
        'COL_ARTMDISCPCT4' => 'ARTMDISCPCT4',
        'ArtmDiscPct4' => 'ARTMDISCPCT4',
        'ar_term_code.ArtmDiscPct4' => 'ARTMDISCPCT4',
        'Artmdiscdays4' => 'ARTMDISCDAYS4',
        'ArTermsCode.Artmdiscdays4' => 'ARTMDISCDAYS4',
        'artmdiscdays4' => 'ARTMDISCDAYS4',
        'arTermsCode.artmdiscdays4' => 'ARTMDISCDAYS4',
        'ArTermsCodeTableMap::COL_ARTMDISCDAYS4' => 'ARTMDISCDAYS4',
        'COL_ARTMDISCDAYS4' => 'ARTMDISCDAYS4',
        'ArtmDiscDays4' => 'ARTMDISCDAYS4',
        'ar_term_code.ArtmDiscDays4' => 'ARTMDISCDAYS4',
        'Artmdiscday4' => 'ARTMDISCDAY4',
        'ArTermsCode.Artmdiscday4' => 'ARTMDISCDAY4',
        'artmdiscday4' => 'ARTMDISCDAY4',
        'arTermsCode.artmdiscday4' => 'ARTMDISCDAY4',
        'ArTermsCodeTableMap::COL_ARTMDISCDAY4' => 'ARTMDISCDAY4',
        'COL_ARTMDISCDAY4' => 'ARTMDISCDAY4',
        'ArtmDiscDay4' => 'ARTMDISCDAY4',
        'ar_term_code.ArtmDiscDay4' => 'ARTMDISCDAY4',
        'Artmdiscdate4' => 'ARTMDISCDATE4',
        'ArTermsCode.Artmdiscdate4' => 'ARTMDISCDATE4',
        'artmdiscdate4' => 'ARTMDISCDATE4',
        'arTermsCode.artmdiscdate4' => 'ARTMDISCDATE4',
        'ArTermsCodeTableMap::COL_ARTMDISCDATE4' => 'ARTMDISCDATE4',
        'COL_ARTMDISCDATE4' => 'ARTMDISCDATE4',
        'ArtmDiscDate4' => 'ARTMDISCDATE4',
        'ar_term_code.ArtmDiscDate4' => 'ARTMDISCDATE4',
        'Artmduedays4' => 'ARTMDUEDAYS4',
        'ArTermsCode.Artmduedays4' => 'ARTMDUEDAYS4',
        'artmduedays4' => 'ARTMDUEDAYS4',
        'arTermsCode.artmduedays4' => 'ARTMDUEDAYS4',
        'ArTermsCodeTableMap::COL_ARTMDUEDAYS4' => 'ARTMDUEDAYS4',
        'COL_ARTMDUEDAYS4' => 'ARTMDUEDAYS4',
        'ArtmDueDays4' => 'ARTMDUEDAYS4',
        'ar_term_code.ArtmDueDays4' => 'ARTMDUEDAYS4',
        'Artmdueday4' => 'ARTMDUEDAY4',
        'ArTermsCode.Artmdueday4' => 'ARTMDUEDAY4',
        'artmdueday4' => 'ARTMDUEDAY4',
        'arTermsCode.artmdueday4' => 'ARTMDUEDAY4',
        'ArTermsCodeTableMap::COL_ARTMDUEDAY4' => 'ARTMDUEDAY4',
        'COL_ARTMDUEDAY4' => 'ARTMDUEDAY4',
        'ArtmDueDay4' => 'ARTMDUEDAY4',
        'ar_term_code.ArtmDueDay4' => 'ARTMDUEDAY4',
        'Artmplusmonths4' => 'ARTMPLUSMONTHS4',
        'ArTermsCode.Artmplusmonths4' => 'ARTMPLUSMONTHS4',
        'artmplusmonths4' => 'ARTMPLUSMONTHS4',
        'arTermsCode.artmplusmonths4' => 'ARTMPLUSMONTHS4',
        'ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4' => 'ARTMPLUSMONTHS4',
        'COL_ARTMPLUSMONTHS4' => 'ARTMPLUSMONTHS4',
        'ArtmPlusMonths4' => 'ARTMPLUSMONTHS4',
        'ar_term_code.ArtmPlusMonths4' => 'ARTMPLUSMONTHS4',
        'Artmduedate4' => 'ARTMDUEDATE4',
        'ArTermsCode.Artmduedate4' => 'ARTMDUEDATE4',
        'artmduedate4' => 'ARTMDUEDATE4',
        'arTermsCode.artmduedate4' => 'ARTMDUEDATE4',
        'ArTermsCodeTableMap::COL_ARTMDUEDATE4' => 'ARTMDUEDATE4',
        'COL_ARTMDUEDATE4' => 'ARTMDUEDATE4',
        'ArtmDueDate4' => 'ARTMDUEDATE4',
        'ar_term_code.ArtmDueDate4' => 'ARTMDUEDATE4',
        'Artmplusyear4' => 'ARTMPLUSYEAR4',
        'ArTermsCode.Artmplusyear4' => 'ARTMPLUSYEAR4',
        'artmplusyear4' => 'ARTMPLUSYEAR4',
        'arTermsCode.artmplusyear4' => 'ARTMPLUSYEAR4',
        'ArTermsCodeTableMap::COL_ARTMPLUSYEAR4' => 'ARTMPLUSYEAR4',
        'COL_ARTMPLUSYEAR4' => 'ARTMPLUSYEAR4',
        'ArtmPlusYear4' => 'ARTMPLUSYEAR4',
        'ar_term_code.ArtmPlusYear4' => 'ARTMPLUSYEAR4',
        'Artmsplit5' => 'ARTMSPLIT5',
        'ArTermsCode.Artmsplit5' => 'ARTMSPLIT5',
        'artmsplit5' => 'ARTMSPLIT5',
        'arTermsCode.artmsplit5' => 'ARTMSPLIT5',
        'ArTermsCodeTableMap::COL_ARTMSPLIT5' => 'ARTMSPLIT5',
        'COL_ARTMSPLIT5' => 'ARTMSPLIT5',
        'ArtmSplit5' => 'ARTMSPLIT5',
        'ar_term_code.ArtmSplit5' => 'ARTMSPLIT5',
        'Artmorderpct5' => 'ARTMORDERPCT5',
        'ArTermsCode.Artmorderpct5' => 'ARTMORDERPCT5',
        'artmorderpct5' => 'ARTMORDERPCT5',
        'arTermsCode.artmorderpct5' => 'ARTMORDERPCT5',
        'ArTermsCodeTableMap::COL_ARTMORDERPCT5' => 'ARTMORDERPCT5',
        'COL_ARTMORDERPCT5' => 'ARTMORDERPCT5',
        'ArtmOrderPct5' => 'ARTMORDERPCT5',
        'ar_term_code.ArtmOrderPct5' => 'ARTMORDERPCT5',
        'Artmdiscpct5' => 'ARTMDISCPCT5',
        'ArTermsCode.Artmdiscpct5' => 'ARTMDISCPCT5',
        'artmdiscpct5' => 'ARTMDISCPCT5',
        'arTermsCode.artmdiscpct5' => 'ARTMDISCPCT5',
        'ArTermsCodeTableMap::COL_ARTMDISCPCT5' => 'ARTMDISCPCT5',
        'COL_ARTMDISCPCT5' => 'ARTMDISCPCT5',
        'ArtmDiscPct5' => 'ARTMDISCPCT5',
        'ar_term_code.ArtmDiscPct5' => 'ARTMDISCPCT5',
        'Artmdiscdays5' => 'ARTMDISCDAYS5',
        'ArTermsCode.Artmdiscdays5' => 'ARTMDISCDAYS5',
        'artmdiscdays5' => 'ARTMDISCDAYS5',
        'arTermsCode.artmdiscdays5' => 'ARTMDISCDAYS5',
        'ArTermsCodeTableMap::COL_ARTMDISCDAYS5' => 'ARTMDISCDAYS5',
        'COL_ARTMDISCDAYS5' => 'ARTMDISCDAYS5',
        'ArtmDiscDays5' => 'ARTMDISCDAYS5',
        'ar_term_code.ArtmDiscDays5' => 'ARTMDISCDAYS5',
        'Artmdiscday5' => 'ARTMDISCDAY5',
        'ArTermsCode.Artmdiscday5' => 'ARTMDISCDAY5',
        'artmdiscday5' => 'ARTMDISCDAY5',
        'arTermsCode.artmdiscday5' => 'ARTMDISCDAY5',
        'ArTermsCodeTableMap::COL_ARTMDISCDAY5' => 'ARTMDISCDAY5',
        'COL_ARTMDISCDAY5' => 'ARTMDISCDAY5',
        'ArtmDiscDay5' => 'ARTMDISCDAY5',
        'ar_term_code.ArtmDiscDay5' => 'ARTMDISCDAY5',
        'Artmdiscdate5' => 'ARTMDISCDATE5',
        'ArTermsCode.Artmdiscdate5' => 'ARTMDISCDATE5',
        'artmdiscdate5' => 'ARTMDISCDATE5',
        'arTermsCode.artmdiscdate5' => 'ARTMDISCDATE5',
        'ArTermsCodeTableMap::COL_ARTMDISCDATE5' => 'ARTMDISCDATE5',
        'COL_ARTMDISCDATE5' => 'ARTMDISCDATE5',
        'ArtmDiscDate5' => 'ARTMDISCDATE5',
        'ar_term_code.ArtmDiscDate5' => 'ARTMDISCDATE5',
        'Artmduedays5' => 'ARTMDUEDAYS5',
        'ArTermsCode.Artmduedays5' => 'ARTMDUEDAYS5',
        'artmduedays5' => 'ARTMDUEDAYS5',
        'arTermsCode.artmduedays5' => 'ARTMDUEDAYS5',
        'ArTermsCodeTableMap::COL_ARTMDUEDAYS5' => 'ARTMDUEDAYS5',
        'COL_ARTMDUEDAYS5' => 'ARTMDUEDAYS5',
        'ArtmDueDays5' => 'ARTMDUEDAYS5',
        'ar_term_code.ArtmDueDays5' => 'ARTMDUEDAYS5',
        'Artmdueday5' => 'ARTMDUEDAY5',
        'ArTermsCode.Artmdueday5' => 'ARTMDUEDAY5',
        'artmdueday5' => 'ARTMDUEDAY5',
        'arTermsCode.artmdueday5' => 'ARTMDUEDAY5',
        'ArTermsCodeTableMap::COL_ARTMDUEDAY5' => 'ARTMDUEDAY5',
        'COL_ARTMDUEDAY5' => 'ARTMDUEDAY5',
        'ArtmDueDay5' => 'ARTMDUEDAY5',
        'ar_term_code.ArtmDueDay5' => 'ARTMDUEDAY5',
        'Artmplusmonths5' => 'ARTMPLUSMONTHS5',
        'ArTermsCode.Artmplusmonths5' => 'ARTMPLUSMONTHS5',
        'artmplusmonths5' => 'ARTMPLUSMONTHS5',
        'arTermsCode.artmplusmonths5' => 'ARTMPLUSMONTHS5',
        'ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5' => 'ARTMPLUSMONTHS5',
        'COL_ARTMPLUSMONTHS5' => 'ARTMPLUSMONTHS5',
        'ArtmPlusMonths5' => 'ARTMPLUSMONTHS5',
        'ar_term_code.ArtmPlusMonths5' => 'ARTMPLUSMONTHS5',
        'Artmduedate5' => 'ARTMDUEDATE5',
        'ArTermsCode.Artmduedate5' => 'ARTMDUEDATE5',
        'artmduedate5' => 'ARTMDUEDATE5',
        'arTermsCode.artmduedate5' => 'ARTMDUEDATE5',
        'ArTermsCodeTableMap::COL_ARTMDUEDATE5' => 'ARTMDUEDATE5',
        'COL_ARTMDUEDATE5' => 'ARTMDUEDATE5',
        'ArtmDueDate5' => 'ARTMDUEDATE5',
        'ar_term_code.ArtmDueDate5' => 'ARTMDUEDATE5',
        'Artmplusyear5' => 'ARTMPLUSYEAR5',
        'ArTermsCode.Artmplusyear5' => 'ARTMPLUSYEAR5',
        'artmplusyear5' => 'ARTMPLUSYEAR5',
        'arTermsCode.artmplusyear5' => 'ARTMPLUSYEAR5',
        'ArTermsCodeTableMap::COL_ARTMPLUSYEAR5' => 'ARTMPLUSYEAR5',
        'COL_ARTMPLUSYEAR5' => 'ARTMPLUSYEAR5',
        'ArtmPlusYear5' => 'ARTMPLUSYEAR5',
        'ar_term_code.ArtmPlusYear5' => 'ARTMPLUSYEAR5',
        'Artmsplit6' => 'ARTMSPLIT6',
        'ArTermsCode.Artmsplit6' => 'ARTMSPLIT6',
        'artmsplit6' => 'ARTMSPLIT6',
        'arTermsCode.artmsplit6' => 'ARTMSPLIT6',
        'ArTermsCodeTableMap::COL_ARTMSPLIT6' => 'ARTMSPLIT6',
        'COL_ARTMSPLIT6' => 'ARTMSPLIT6',
        'ArtmSplit6' => 'ARTMSPLIT6',
        'ar_term_code.ArtmSplit6' => 'ARTMSPLIT6',
        'Artmorderpct6' => 'ARTMORDERPCT6',
        'ArTermsCode.Artmorderpct6' => 'ARTMORDERPCT6',
        'artmorderpct6' => 'ARTMORDERPCT6',
        'arTermsCode.artmorderpct6' => 'ARTMORDERPCT6',
        'ArTermsCodeTableMap::COL_ARTMORDERPCT6' => 'ARTMORDERPCT6',
        'COL_ARTMORDERPCT6' => 'ARTMORDERPCT6',
        'ArtmOrderPct6' => 'ARTMORDERPCT6',
        'ar_term_code.ArtmOrderPct6' => 'ARTMORDERPCT6',
        'Artmdiscpct6' => 'ARTMDISCPCT6',
        'ArTermsCode.Artmdiscpct6' => 'ARTMDISCPCT6',
        'artmdiscpct6' => 'ARTMDISCPCT6',
        'arTermsCode.artmdiscpct6' => 'ARTMDISCPCT6',
        'ArTermsCodeTableMap::COL_ARTMDISCPCT6' => 'ARTMDISCPCT6',
        'COL_ARTMDISCPCT6' => 'ARTMDISCPCT6',
        'ArtmDiscPct6' => 'ARTMDISCPCT6',
        'ar_term_code.ArtmDiscPct6' => 'ARTMDISCPCT6',
        'Artmdiscdays6' => 'ARTMDISCDAYS6',
        'ArTermsCode.Artmdiscdays6' => 'ARTMDISCDAYS6',
        'artmdiscdays6' => 'ARTMDISCDAYS6',
        'arTermsCode.artmdiscdays6' => 'ARTMDISCDAYS6',
        'ArTermsCodeTableMap::COL_ARTMDISCDAYS6' => 'ARTMDISCDAYS6',
        'COL_ARTMDISCDAYS6' => 'ARTMDISCDAYS6',
        'ArtmDiscDays6' => 'ARTMDISCDAYS6',
        'ar_term_code.ArtmDiscDays6' => 'ARTMDISCDAYS6',
        'Artmdiscday6' => 'ARTMDISCDAY6',
        'ArTermsCode.Artmdiscday6' => 'ARTMDISCDAY6',
        'artmdiscday6' => 'ARTMDISCDAY6',
        'arTermsCode.artmdiscday6' => 'ARTMDISCDAY6',
        'ArTermsCodeTableMap::COL_ARTMDISCDAY6' => 'ARTMDISCDAY6',
        'COL_ARTMDISCDAY6' => 'ARTMDISCDAY6',
        'ArtmDiscDay6' => 'ARTMDISCDAY6',
        'ar_term_code.ArtmDiscDay6' => 'ARTMDISCDAY6',
        'Artmdiscdate6' => 'ARTMDISCDATE6',
        'ArTermsCode.Artmdiscdate6' => 'ARTMDISCDATE6',
        'artmdiscdate6' => 'ARTMDISCDATE6',
        'arTermsCode.artmdiscdate6' => 'ARTMDISCDATE6',
        'ArTermsCodeTableMap::COL_ARTMDISCDATE6' => 'ARTMDISCDATE6',
        'COL_ARTMDISCDATE6' => 'ARTMDISCDATE6',
        'ArtmDiscDate6' => 'ARTMDISCDATE6',
        'ar_term_code.ArtmDiscDate6' => 'ARTMDISCDATE6',
        'Artmduedays6' => 'ARTMDUEDAYS6',
        'ArTermsCode.Artmduedays6' => 'ARTMDUEDAYS6',
        'artmduedays6' => 'ARTMDUEDAYS6',
        'arTermsCode.artmduedays6' => 'ARTMDUEDAYS6',
        'ArTermsCodeTableMap::COL_ARTMDUEDAYS6' => 'ARTMDUEDAYS6',
        'COL_ARTMDUEDAYS6' => 'ARTMDUEDAYS6',
        'ArtmDueDays6' => 'ARTMDUEDAYS6',
        'ar_term_code.ArtmDueDays6' => 'ARTMDUEDAYS6',
        'Artmdueday6' => 'ARTMDUEDAY6',
        'ArTermsCode.Artmdueday6' => 'ARTMDUEDAY6',
        'artmdueday6' => 'ARTMDUEDAY6',
        'arTermsCode.artmdueday6' => 'ARTMDUEDAY6',
        'ArTermsCodeTableMap::COL_ARTMDUEDAY6' => 'ARTMDUEDAY6',
        'COL_ARTMDUEDAY6' => 'ARTMDUEDAY6',
        'ArtmDueDay6' => 'ARTMDUEDAY6',
        'ar_term_code.ArtmDueDay6' => 'ARTMDUEDAY6',
        'Artmplusmonths6' => 'ARTMPLUSMONTHS6',
        'ArTermsCode.Artmplusmonths6' => 'ARTMPLUSMONTHS6',
        'artmplusmonths6' => 'ARTMPLUSMONTHS6',
        'arTermsCode.artmplusmonths6' => 'ARTMPLUSMONTHS6',
        'ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6' => 'ARTMPLUSMONTHS6',
        'COL_ARTMPLUSMONTHS6' => 'ARTMPLUSMONTHS6',
        'ArtmPlusMonths6' => 'ARTMPLUSMONTHS6',
        'ar_term_code.ArtmPlusMonths6' => 'ARTMPLUSMONTHS6',
        'Artmduedate6' => 'ARTMDUEDATE6',
        'ArTermsCode.Artmduedate6' => 'ARTMDUEDATE6',
        'artmduedate6' => 'ARTMDUEDATE6',
        'arTermsCode.artmduedate6' => 'ARTMDUEDATE6',
        'ArTermsCodeTableMap::COL_ARTMDUEDATE6' => 'ARTMDUEDATE6',
        'COL_ARTMDUEDATE6' => 'ARTMDUEDATE6',
        'ArtmDueDate6' => 'ARTMDUEDATE6',
        'ar_term_code.ArtmDueDate6' => 'ARTMDUEDATE6',
        'Artmplusyear6' => 'ARTMPLUSYEAR6',
        'ArTermsCode.Artmplusyear6' => 'ARTMPLUSYEAR6',
        'artmplusyear6' => 'ARTMPLUSYEAR6',
        'arTermsCode.artmplusyear6' => 'ARTMPLUSYEAR6',
        'ArTermsCodeTableMap::COL_ARTMPLUSYEAR6' => 'ARTMPLUSYEAR6',
        'COL_ARTMPLUSYEAR6' => 'ARTMPLUSYEAR6',
        'ArtmPlusYear6' => 'ARTMPLUSYEAR6',
        'ar_term_code.ArtmPlusYear6' => 'ARTMPLUSYEAR6',
        'Artmdayfrom1' => 'ARTMDAYFROM1',
        'ArTermsCode.Artmdayfrom1' => 'ARTMDAYFROM1',
        'artmdayfrom1' => 'ARTMDAYFROM1',
        'arTermsCode.artmdayfrom1' => 'ARTMDAYFROM1',
        'ArTermsCodeTableMap::COL_ARTMDAYFROM1' => 'ARTMDAYFROM1',
        'COL_ARTMDAYFROM1' => 'ARTMDAYFROM1',
        'ArtmDayFrom1' => 'ARTMDAYFROM1',
        'ar_term_code.ArtmDayFrom1' => 'ARTMDAYFROM1',
        'Artmdaythru1' => 'ARTMDAYTHRU1',
        'ArTermsCode.Artmdaythru1' => 'ARTMDAYTHRU1',
        'artmdaythru1' => 'ARTMDAYTHRU1',
        'arTermsCode.artmdaythru1' => 'ARTMDAYTHRU1',
        'ArTermsCodeTableMap::COL_ARTMDAYTHRU1' => 'ARTMDAYTHRU1',
        'COL_ARTMDAYTHRU1' => 'ARTMDAYTHRU1',
        'ArtmDayThru1' => 'ARTMDAYTHRU1',
        'ar_term_code.ArtmDayThru1' => 'ARTMDAYTHRU1',
        'Artmeomdiscpct1' => 'ARTMEOMDISCPCT1',
        'ArTermsCode.Artmeomdiscpct1' => 'ARTMEOMDISCPCT1',
        'artmeomdiscpct1' => 'ARTMEOMDISCPCT1',
        'arTermsCode.artmeomdiscpct1' => 'ARTMEOMDISCPCT1',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1' => 'ARTMEOMDISCPCT1',
        'COL_ARTMEOMDISCPCT1' => 'ARTMEOMDISCPCT1',
        'ArtmEomDiscPct1' => 'ARTMEOMDISCPCT1',
        'ar_term_code.ArtmEomDiscPct1' => 'ARTMEOMDISCPCT1',
        'Artmeomdiscday1' => 'ARTMEOMDISCDAY1',
        'ArTermsCode.Artmeomdiscday1' => 'ARTMEOMDISCDAY1',
        'artmeomdiscday1' => 'ARTMEOMDISCDAY1',
        'arTermsCode.artmeomdiscday1' => 'ARTMEOMDISCDAY1',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1' => 'ARTMEOMDISCDAY1',
        'COL_ARTMEOMDISCDAY1' => 'ARTMEOMDISCDAY1',
        'ArtmEomDiscDay1' => 'ARTMEOMDISCDAY1',
        'ar_term_code.ArtmEomDiscDay1' => 'ARTMEOMDISCDAY1',
        'Artmeomdiscmonths1' => 'ARTMEOMDISCMONTHS1',
        'ArTermsCode.Artmeomdiscmonths1' => 'ARTMEOMDISCMONTHS1',
        'artmeomdiscmonths1' => 'ARTMEOMDISCMONTHS1',
        'arTermsCode.artmeomdiscmonths1' => 'ARTMEOMDISCMONTHS1',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1' => 'ARTMEOMDISCMONTHS1',
        'COL_ARTMEOMDISCMONTHS1' => 'ARTMEOMDISCMONTHS1',
        'ArtmEomDiscMonths1' => 'ARTMEOMDISCMONTHS1',
        'ar_term_code.ArtmEomDiscMonths1' => 'ARTMEOMDISCMONTHS1',
        'Artmeomdueday1' => 'ARTMEOMDUEDAY1',
        'ArTermsCode.Artmeomdueday1' => 'ARTMEOMDUEDAY1',
        'artmeomdueday1' => 'ARTMEOMDUEDAY1',
        'arTermsCode.artmeomdueday1' => 'ARTMEOMDUEDAY1',
        'ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1' => 'ARTMEOMDUEDAY1',
        'COL_ARTMEOMDUEDAY1' => 'ARTMEOMDUEDAY1',
        'ArtmEomDueDay1' => 'ARTMEOMDUEDAY1',
        'ar_term_code.ArtmEomDueDay1' => 'ARTMEOMDUEDAY1',
        'Artmeomplusmonths1' => 'ARTMEOMPLUSMONTHS1',
        'ArTermsCode.Artmeomplusmonths1' => 'ARTMEOMPLUSMONTHS1',
        'artmeomplusmonths1' => 'ARTMEOMPLUSMONTHS1',
        'arTermsCode.artmeomplusmonths1' => 'ARTMEOMPLUSMONTHS1',
        'ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1' => 'ARTMEOMPLUSMONTHS1',
        'COL_ARTMEOMPLUSMONTHS1' => 'ARTMEOMPLUSMONTHS1',
        'ArtmEomPlusMonths1' => 'ARTMEOMPLUSMONTHS1',
        'ar_term_code.ArtmEomPlusMonths1' => 'ARTMEOMPLUSMONTHS1',
        'Artmdayfrom2' => 'ARTMDAYFROM2',
        'ArTermsCode.Artmdayfrom2' => 'ARTMDAYFROM2',
        'artmdayfrom2' => 'ARTMDAYFROM2',
        'arTermsCode.artmdayfrom2' => 'ARTMDAYFROM2',
        'ArTermsCodeTableMap::COL_ARTMDAYFROM2' => 'ARTMDAYFROM2',
        'COL_ARTMDAYFROM2' => 'ARTMDAYFROM2',
        'ArtmDayFrom2' => 'ARTMDAYFROM2',
        'ar_term_code.ArtmDayFrom2' => 'ARTMDAYFROM2',
        'Artmdaythru2' => 'ARTMDAYTHRU2',
        'ArTermsCode.Artmdaythru2' => 'ARTMDAYTHRU2',
        'artmdaythru2' => 'ARTMDAYTHRU2',
        'arTermsCode.artmdaythru2' => 'ARTMDAYTHRU2',
        'ArTermsCodeTableMap::COL_ARTMDAYTHRU2' => 'ARTMDAYTHRU2',
        'COL_ARTMDAYTHRU2' => 'ARTMDAYTHRU2',
        'ArtmDayThru2' => 'ARTMDAYTHRU2',
        'ar_term_code.ArtmDayThru2' => 'ARTMDAYTHRU2',
        'Artmeomdiscpct2' => 'ARTMEOMDISCPCT2',
        'ArTermsCode.Artmeomdiscpct2' => 'ARTMEOMDISCPCT2',
        'artmeomdiscpct2' => 'ARTMEOMDISCPCT2',
        'arTermsCode.artmeomdiscpct2' => 'ARTMEOMDISCPCT2',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2' => 'ARTMEOMDISCPCT2',
        'COL_ARTMEOMDISCPCT2' => 'ARTMEOMDISCPCT2',
        'ArtmEomDiscPct2' => 'ARTMEOMDISCPCT2',
        'ar_term_code.ArtmEomDiscPct2' => 'ARTMEOMDISCPCT2',
        'Artmeomdiscday2' => 'ARTMEOMDISCDAY2',
        'ArTermsCode.Artmeomdiscday2' => 'ARTMEOMDISCDAY2',
        'artmeomdiscday2' => 'ARTMEOMDISCDAY2',
        'arTermsCode.artmeomdiscday2' => 'ARTMEOMDISCDAY2',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2' => 'ARTMEOMDISCDAY2',
        'COL_ARTMEOMDISCDAY2' => 'ARTMEOMDISCDAY2',
        'ArtmEomDiscDay2' => 'ARTMEOMDISCDAY2',
        'ar_term_code.ArtmEomDiscDay2' => 'ARTMEOMDISCDAY2',
        'Artmeomdiscmonths2' => 'ARTMEOMDISCMONTHS2',
        'ArTermsCode.Artmeomdiscmonths2' => 'ARTMEOMDISCMONTHS2',
        'artmeomdiscmonths2' => 'ARTMEOMDISCMONTHS2',
        'arTermsCode.artmeomdiscmonths2' => 'ARTMEOMDISCMONTHS2',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2' => 'ARTMEOMDISCMONTHS2',
        'COL_ARTMEOMDISCMONTHS2' => 'ARTMEOMDISCMONTHS2',
        'ArtmEomDiscMonths2' => 'ARTMEOMDISCMONTHS2',
        'ar_term_code.ArtmEomDiscMonths2' => 'ARTMEOMDISCMONTHS2',
        'Artmeomdueday2' => 'ARTMEOMDUEDAY2',
        'ArTermsCode.Artmeomdueday2' => 'ARTMEOMDUEDAY2',
        'artmeomdueday2' => 'ARTMEOMDUEDAY2',
        'arTermsCode.artmeomdueday2' => 'ARTMEOMDUEDAY2',
        'ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2' => 'ARTMEOMDUEDAY2',
        'COL_ARTMEOMDUEDAY2' => 'ARTMEOMDUEDAY2',
        'ArtmEomDueDay2' => 'ARTMEOMDUEDAY2',
        'ar_term_code.ArtmEomDueDay2' => 'ARTMEOMDUEDAY2',
        'Artmeomplusmonths2' => 'ARTMEOMPLUSMONTHS2',
        'ArTermsCode.Artmeomplusmonths2' => 'ARTMEOMPLUSMONTHS2',
        'artmeomplusmonths2' => 'ARTMEOMPLUSMONTHS2',
        'arTermsCode.artmeomplusmonths2' => 'ARTMEOMPLUSMONTHS2',
        'ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2' => 'ARTMEOMPLUSMONTHS2',
        'COL_ARTMEOMPLUSMONTHS2' => 'ARTMEOMPLUSMONTHS2',
        'ArtmEomPlusMonths2' => 'ARTMEOMPLUSMONTHS2',
        'ar_term_code.ArtmEomPlusMonths2' => 'ARTMEOMPLUSMONTHS2',
        'Artmdayfrom3' => 'ARTMDAYFROM3',
        'ArTermsCode.Artmdayfrom3' => 'ARTMDAYFROM3',
        'artmdayfrom3' => 'ARTMDAYFROM3',
        'arTermsCode.artmdayfrom3' => 'ARTMDAYFROM3',
        'ArTermsCodeTableMap::COL_ARTMDAYFROM3' => 'ARTMDAYFROM3',
        'COL_ARTMDAYFROM3' => 'ARTMDAYFROM3',
        'ArtmDayFrom3' => 'ARTMDAYFROM3',
        'ar_term_code.ArtmDayFrom3' => 'ARTMDAYFROM3',
        'Artmdaythru3' => 'ARTMDAYTHRU3',
        'ArTermsCode.Artmdaythru3' => 'ARTMDAYTHRU3',
        'artmdaythru3' => 'ARTMDAYTHRU3',
        'arTermsCode.artmdaythru3' => 'ARTMDAYTHRU3',
        'ArTermsCodeTableMap::COL_ARTMDAYTHRU3' => 'ARTMDAYTHRU3',
        'COL_ARTMDAYTHRU3' => 'ARTMDAYTHRU3',
        'ArtmDayThru3' => 'ARTMDAYTHRU3',
        'ar_term_code.ArtmDayThru3' => 'ARTMDAYTHRU3',
        'Artmeomdiscpct3' => 'ARTMEOMDISCPCT3',
        'ArTermsCode.Artmeomdiscpct3' => 'ARTMEOMDISCPCT3',
        'artmeomdiscpct3' => 'ARTMEOMDISCPCT3',
        'arTermsCode.artmeomdiscpct3' => 'ARTMEOMDISCPCT3',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3' => 'ARTMEOMDISCPCT3',
        'COL_ARTMEOMDISCPCT3' => 'ARTMEOMDISCPCT3',
        'ArtmEomDiscPct3' => 'ARTMEOMDISCPCT3',
        'ar_term_code.ArtmEomDiscPct3' => 'ARTMEOMDISCPCT3',
        'Artmeomdiscday3' => 'ARTMEOMDISCDAY3',
        'ArTermsCode.Artmeomdiscday3' => 'ARTMEOMDISCDAY3',
        'artmeomdiscday3' => 'ARTMEOMDISCDAY3',
        'arTermsCode.artmeomdiscday3' => 'ARTMEOMDISCDAY3',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3' => 'ARTMEOMDISCDAY3',
        'COL_ARTMEOMDISCDAY3' => 'ARTMEOMDISCDAY3',
        'ArtmEomDiscDay3' => 'ARTMEOMDISCDAY3',
        'ar_term_code.ArtmEomDiscDay3' => 'ARTMEOMDISCDAY3',
        'Artmeomdiscmonths3' => 'ARTMEOMDISCMONTHS3',
        'ArTermsCode.Artmeomdiscmonths3' => 'ARTMEOMDISCMONTHS3',
        'artmeomdiscmonths3' => 'ARTMEOMDISCMONTHS3',
        'arTermsCode.artmeomdiscmonths3' => 'ARTMEOMDISCMONTHS3',
        'ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3' => 'ARTMEOMDISCMONTHS3',
        'COL_ARTMEOMDISCMONTHS3' => 'ARTMEOMDISCMONTHS3',
        'ArtmEomDiscMonths3' => 'ARTMEOMDISCMONTHS3',
        'ar_term_code.ArtmEomDiscMonths3' => 'ARTMEOMDISCMONTHS3',
        'Artmeomdueday3' => 'ARTMEOMDUEDAY3',
        'ArTermsCode.Artmeomdueday3' => 'ARTMEOMDUEDAY3',
        'artmeomdueday3' => 'ARTMEOMDUEDAY3',
        'arTermsCode.artmeomdueday3' => 'ARTMEOMDUEDAY3',
        'ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3' => 'ARTMEOMDUEDAY3',
        'COL_ARTMEOMDUEDAY3' => 'ARTMEOMDUEDAY3',
        'ArtmEomDueDay3' => 'ARTMEOMDUEDAY3',
        'ar_term_code.ArtmEomDueDay3' => 'ARTMEOMDUEDAY3',
        'Artmeomplusmonths3' => 'ARTMEOMPLUSMONTHS3',
        'ArTermsCode.Artmeomplusmonths3' => 'ARTMEOMPLUSMONTHS3',
        'artmeomplusmonths3' => 'ARTMEOMPLUSMONTHS3',
        'arTermsCode.artmeomplusmonths3' => 'ARTMEOMPLUSMONTHS3',
        'ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3' => 'ARTMEOMPLUSMONTHS3',
        'COL_ARTMEOMPLUSMONTHS3' => 'ARTMEOMPLUSMONTHS3',
        'ArtmEomPlusMonths3' => 'ARTMEOMPLUSMONTHS3',
        'ar_term_code.ArtmEomPlusMonths3' => 'ARTMEOMPLUSMONTHS3',
        'Artmctry' => 'ARTMCTRY',
        'ArTermsCode.Artmctry' => 'ARTMCTRY',
        'artmctry' => 'ARTMCTRY',
        'arTermsCode.artmctry' => 'ARTMCTRY',
        'ArTermsCodeTableMap::COL_ARTMCTRY' => 'ARTMCTRY',
        'COL_ARTMCTRY' => 'ARTMCTRY',
        'ArtmCtry' => 'ARTMCTRY',
        'ar_term_code.ArtmCtry' => 'ARTMCTRY',
        'Artmtermgrup' => 'ARTMTERMGRUP',
        'ArTermsCode.Artmtermgrup' => 'ARTMTERMGRUP',
        'artmtermgrup' => 'ARTMTERMGRUP',
        'arTermsCode.artmtermgrup' => 'ARTMTERMGRUP',
        'ArTermsCodeTableMap::COL_ARTMTERMGRUP' => 'ARTMTERMGRUP',
        'COL_ARTMTERMGRUP' => 'ARTMTERMGRUP',
        'ArtmTermGrup' => 'ARTMTERMGRUP',
        'ar_term_code.ArtmTermGrup' => 'ARTMTERMGRUP',
        'Dateupdtd' => 'DATEUPDTD',
        'ArTermsCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'arTermsCode.dateupdtd' => 'DATEUPDTD',
        'ArTermsCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_term_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ArTermsCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'arTermsCode.timeupdtd' => 'TIMEUPDTD',
        'ArTermsCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_term_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ArTermsCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'arTermsCode.dummy' => 'DUMMY',
        'ArTermsCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_term_code.dummy' => 'DUMMY',
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
        $this->setName('ar_term_code');
        $this->setPhpName('ArTermsCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArTermsCode');
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
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
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
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? ArTermsCodeTableMap::CLASS_DEFAULT : ArTermsCodeTableMap::OM_CLASS;
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
     * @return array (ArTermsCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ArTermsCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArTermsCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArTermsCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArTermsCodeTableMap::OM_CLASS;
            /** @var ArTermsCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArTermsCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ArTermsCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArTermsCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArTermsCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArTermsCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMTERMDESC);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMMETHOD);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMTYPE);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMHOLD);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEXPIREDATE);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMFRTALLOW);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMCCPREFIX);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR4);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR5);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR6);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYFROM1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYTHRU1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYFROM2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYTHRU2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYFROM3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYTHRU3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMCTRY);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_ARTMTERMGRUP);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArTermsCodeTableMap::COL_DUMMY);
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
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMTERMCD);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMTERMDESC);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMMETHOD);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMTYPE);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMHOLD);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEXPIREDATE);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMFRTALLOW);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMCCPREFIX);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR4);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR5);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMSPLIT6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMORDERPCT6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCPCT6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAYS6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDAY6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDISCDATE6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAYS6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDAY6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDUEDATE6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMPLUSYEAR6);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYFROM1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYTHRU1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYFROM2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYTHRU2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYFROM3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMDAYTHRU3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMCTRY);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_ARTMTERMGRUP);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ArTermsCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArtmTermCd');
            $criteria->removeSelectColumn($alias . '.ArtmTermDesc');
            $criteria->removeSelectColumn($alias . '.ArtmMethod');
            $criteria->removeSelectColumn($alias . '.ArtmType');
            $criteria->removeSelectColumn($alias . '.ArtmHold');
            $criteria->removeSelectColumn($alias . '.ArtmExpireDate');
            $criteria->removeSelectColumn($alias . '.ArtmFrtAllow');
            $criteria->removeSelectColumn($alias . '.ArtmCcPrefix');
            $criteria->removeSelectColumn($alias . '.ArtmSplit1');
            $criteria->removeSelectColumn($alias . '.ArtmOrderPct1');
            $criteria->removeSelectColumn($alias . '.ArtmDiscPct1');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDays1');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDay1');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDate1');
            $criteria->removeSelectColumn($alias . '.ArtmDueDays1');
            $criteria->removeSelectColumn($alias . '.ArtmDueDay1');
            $criteria->removeSelectColumn($alias . '.ArtmPlusMonths1');
            $criteria->removeSelectColumn($alias . '.ArtmDueDate1');
            $criteria->removeSelectColumn($alias . '.ArtmPlusYear1');
            $criteria->removeSelectColumn($alias . '.ArtmSplit2');
            $criteria->removeSelectColumn($alias . '.ArtmOrderPct2');
            $criteria->removeSelectColumn($alias . '.ArtmDiscPct2');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDays2');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDay2');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDate2');
            $criteria->removeSelectColumn($alias . '.ArtmDueDays2');
            $criteria->removeSelectColumn($alias . '.ArtmDueDay2');
            $criteria->removeSelectColumn($alias . '.ArtmPlusMonths2');
            $criteria->removeSelectColumn($alias . '.ArtmDueDate2');
            $criteria->removeSelectColumn($alias . '.ArtmPlusYear2');
            $criteria->removeSelectColumn($alias . '.ArtmSplit3');
            $criteria->removeSelectColumn($alias . '.ArtmOrderPct3');
            $criteria->removeSelectColumn($alias . '.ArtmDiscPct3');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDays3');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDay3');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDate3');
            $criteria->removeSelectColumn($alias . '.ArtmDueDays3');
            $criteria->removeSelectColumn($alias . '.ArtmDueDay3');
            $criteria->removeSelectColumn($alias . '.ArtmPlusMonths3');
            $criteria->removeSelectColumn($alias . '.ArtmDueDate3');
            $criteria->removeSelectColumn($alias . '.ArtmPlusYear3');
            $criteria->removeSelectColumn($alias . '.ArtmSplit4');
            $criteria->removeSelectColumn($alias . '.ArtmOrderPct4');
            $criteria->removeSelectColumn($alias . '.ArtmDiscPct4');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDays4');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDay4');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDate4');
            $criteria->removeSelectColumn($alias . '.ArtmDueDays4');
            $criteria->removeSelectColumn($alias . '.ArtmDueDay4');
            $criteria->removeSelectColumn($alias . '.ArtmPlusMonths4');
            $criteria->removeSelectColumn($alias . '.ArtmDueDate4');
            $criteria->removeSelectColumn($alias . '.ArtmPlusYear4');
            $criteria->removeSelectColumn($alias . '.ArtmSplit5');
            $criteria->removeSelectColumn($alias . '.ArtmOrderPct5');
            $criteria->removeSelectColumn($alias . '.ArtmDiscPct5');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDays5');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDay5');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDate5');
            $criteria->removeSelectColumn($alias . '.ArtmDueDays5');
            $criteria->removeSelectColumn($alias . '.ArtmDueDay5');
            $criteria->removeSelectColumn($alias . '.ArtmPlusMonths5');
            $criteria->removeSelectColumn($alias . '.ArtmDueDate5');
            $criteria->removeSelectColumn($alias . '.ArtmPlusYear5');
            $criteria->removeSelectColumn($alias . '.ArtmSplit6');
            $criteria->removeSelectColumn($alias . '.ArtmOrderPct6');
            $criteria->removeSelectColumn($alias . '.ArtmDiscPct6');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDays6');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDay6');
            $criteria->removeSelectColumn($alias . '.ArtmDiscDate6');
            $criteria->removeSelectColumn($alias . '.ArtmDueDays6');
            $criteria->removeSelectColumn($alias . '.ArtmDueDay6');
            $criteria->removeSelectColumn($alias . '.ArtmPlusMonths6');
            $criteria->removeSelectColumn($alias . '.ArtmDueDate6');
            $criteria->removeSelectColumn($alias . '.ArtmPlusYear6');
            $criteria->removeSelectColumn($alias . '.ArtmDayFrom1');
            $criteria->removeSelectColumn($alias . '.ArtmDayThru1');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscPct1');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscDay1');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscMonths1');
            $criteria->removeSelectColumn($alias . '.ArtmEomDueDay1');
            $criteria->removeSelectColumn($alias . '.ArtmEomPlusMonths1');
            $criteria->removeSelectColumn($alias . '.ArtmDayFrom2');
            $criteria->removeSelectColumn($alias . '.ArtmDayThru2');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscPct2');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscDay2');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscMonths2');
            $criteria->removeSelectColumn($alias . '.ArtmEomDueDay2');
            $criteria->removeSelectColumn($alias . '.ArtmEomPlusMonths2');
            $criteria->removeSelectColumn($alias . '.ArtmDayFrom3');
            $criteria->removeSelectColumn($alias . '.ArtmDayThru3');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscPct3');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscDay3');
            $criteria->removeSelectColumn($alias . '.ArtmEomDiscMonths3');
            $criteria->removeSelectColumn($alias . '.ArtmEomDueDay3');
            $criteria->removeSelectColumn($alias . '.ArtmEomPlusMonths3');
            $criteria->removeSelectColumn($alias . '.ArtmCtry');
            $criteria->removeSelectColumn($alias . '.ArtmTermGrup');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArTermsCodeTableMap::DATABASE_NAME)->getTable(ArTermsCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ArTermsCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ArTermsCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArTermsCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArTermsCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArTermsCodeTableMap::DATABASE_NAME);
            $criteria->add(ArTermsCodeTableMap::COL_ARTMTERMCD, (array) $values, Criteria::IN);
        }

        $query = ArTermsCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArTermsCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArTermsCodeTableMap::removeInstanceFromPool($singleval);
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
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ArTermsCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArTermsCode or Criteria object.
     *
     * @param mixed $criteria Criteria or ArTermsCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArTermsCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArTermsCode object
        }


        // Set the correct dbName
        $query = ArTermsCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
