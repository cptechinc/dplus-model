<?php

namespace Map;

use \ApTermsCode;
use \ApTermsCodeQuery;
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
 * This class defines the structure of the 'ap_term_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ApTermsCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ApTermsCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ap_term_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ApTermsCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ApTermsCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 83;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 83;

    /**
     * the column name for the AptmTermCode field
     */
    const COL_APTMTERMCODE = 'ap_term_code.AptmTermCode';

    /**
     * the column name for the AptmTermDesc field
     */
    const COL_APTMTERMDESC = 'ap_term_code.AptmTermDesc';

    /**
     * the column name for the AptmMethod field
     */
    const COL_APTMMETHOD = 'ap_term_code.AptmMethod';

    /**
     * the column name for the AptmExpireDate field
     */
    const COL_APTMEXPIREDATE = 'ap_term_code.AptmExpireDate';

    /**
     * the column name for the AptmSplit1 field
     */
    const COL_APTMSPLIT1 = 'ap_term_code.AptmSplit1';

    /**
     * the column name for the AptmOrderPct1 field
     */
    const COL_APTMORDERPCT1 = 'ap_term_code.AptmOrderPct1';

    /**
     * the column name for the AptmDiscPct1 field
     */
    const COL_APTMDISCPCT1 = 'ap_term_code.AptmDiscPct1';

    /**
     * the column name for the AptmDiscDays1 field
     */
    const COL_APTMDISCDAYS1 = 'ap_term_code.AptmDiscDays1';

    /**
     * the column name for the AptmDiscDay1 field
     */
    const COL_APTMDISCDAY1 = 'ap_term_code.AptmDiscDay1';

    /**
     * the column name for the AptmDiscDate1 field
     */
    const COL_APTMDISCDATE1 = 'ap_term_code.AptmDiscDate1';

    /**
     * the column name for the AptmDueDays1 field
     */
    const COL_APTMDUEDAYS1 = 'ap_term_code.AptmDueDays1';

    /**
     * the column name for the AptmDueDay1 field
     */
    const COL_APTMDUEDAY1 = 'ap_term_code.AptmDueDay1';

    /**
     * the column name for the AptmPlusMonths1 field
     */
    const COL_APTMPLUSMONTHS1 = 'ap_term_code.AptmPlusMonths1';

    /**
     * the column name for the AptmDueDate1 field
     */
    const COL_APTMDUEDATE1 = 'ap_term_code.AptmDueDate1';

    /**
     * the column name for the AptmPlusYear1 field
     */
    const COL_APTMPLUSYEAR1 = 'ap_term_code.AptmPlusYear1';

    /**
     * the column name for the AptmSplit2 field
     */
    const COL_APTMSPLIT2 = 'ap_term_code.AptmSplit2';

    /**
     * the column name for the AptmOrderPct2 field
     */
    const COL_APTMORDERPCT2 = 'ap_term_code.AptmOrderPct2';

    /**
     * the column name for the AptmDiscPct2 field
     */
    const COL_APTMDISCPCT2 = 'ap_term_code.AptmDiscPct2';

    /**
     * the column name for the AptmDiscDays2 field
     */
    const COL_APTMDISCDAYS2 = 'ap_term_code.AptmDiscDays2';

    /**
     * the column name for the AptmDiscDay2 field
     */
    const COL_APTMDISCDAY2 = 'ap_term_code.AptmDiscDay2';

    /**
     * the column name for the AptmDiscDate2 field
     */
    const COL_APTMDISCDATE2 = 'ap_term_code.AptmDiscDate2';

    /**
     * the column name for the AptmDueDays2 field
     */
    const COL_APTMDUEDAYS2 = 'ap_term_code.AptmDueDays2';

    /**
     * the column name for the AptmDueDay2 field
     */
    const COL_APTMDUEDAY2 = 'ap_term_code.AptmDueDay2';

    /**
     * the column name for the AptmPlusMonths2 field
     */
    const COL_APTMPLUSMONTHS2 = 'ap_term_code.AptmPlusMonths2';

    /**
     * the column name for the AptmDueDate2 field
     */
    const COL_APTMDUEDATE2 = 'ap_term_code.AptmDueDate2';

    /**
     * the column name for the AptmPlusYear2 field
     */
    const COL_APTMPLUSYEAR2 = 'ap_term_code.AptmPlusYear2';

    /**
     * the column name for the AptmSplit3 field
     */
    const COL_APTMSPLIT3 = 'ap_term_code.AptmSplit3';

    /**
     * the column name for the AptmOrderPct3 field
     */
    const COL_APTMORDERPCT3 = 'ap_term_code.AptmOrderPct3';

    /**
     * the column name for the AptmDiscPct3 field
     */
    const COL_APTMDISCPCT3 = 'ap_term_code.AptmDiscPct3';

    /**
     * the column name for the AptmDiscDays3 field
     */
    const COL_APTMDISCDAYS3 = 'ap_term_code.AptmDiscDays3';

    /**
     * the column name for the AptmDiscDay3 field
     */
    const COL_APTMDISCDAY3 = 'ap_term_code.AptmDiscDay3';

    /**
     * the column name for the AptmDiscDate3 field
     */
    const COL_APTMDISCDATE3 = 'ap_term_code.AptmDiscDate3';

    /**
     * the column name for the AptmDueDays3 field
     */
    const COL_APTMDUEDAYS3 = 'ap_term_code.AptmDueDays3';

    /**
     * the column name for the AptmDueDay3 field
     */
    const COL_APTMDUEDAY3 = 'ap_term_code.AptmDueDay3';

    /**
     * the column name for the AptmPlusMonths3 field
     */
    const COL_APTMPLUSMONTHS3 = 'ap_term_code.AptmPlusMonths3';

    /**
     * the column name for the AptmDueDate3 field
     */
    const COL_APTMDUEDATE3 = 'ap_term_code.AptmDueDate3';

    /**
     * the column name for the AptmPlusYear3 field
     */
    const COL_APTMPLUSYEAR3 = 'ap_term_code.AptmPlusYear3';

    /**
     * the column name for the AptmSplit4 field
     */
    const COL_APTMSPLIT4 = 'ap_term_code.AptmSplit4';

    /**
     * the column name for the AptmOrderPct4 field
     */
    const COL_APTMORDERPCT4 = 'ap_term_code.AptmOrderPct4';

    /**
     * the column name for the AptmDiscPct4 field
     */
    const COL_APTMDISCPCT4 = 'ap_term_code.AptmDiscPct4';

    /**
     * the column name for the AptmDiscDays4 field
     */
    const COL_APTMDISCDAYS4 = 'ap_term_code.AptmDiscDays4';

    /**
     * the column name for the AptmDiscDay4 field
     */
    const COL_APTMDISCDAY4 = 'ap_term_code.AptmDiscDay4';

    /**
     * the column name for the AptmDiscDate4 field
     */
    const COL_APTMDISCDATE4 = 'ap_term_code.AptmDiscDate4';

    /**
     * the column name for the AptmDueDays4 field
     */
    const COL_APTMDUEDAYS4 = 'ap_term_code.AptmDueDays4';

    /**
     * the column name for the AptmDueDay4 field
     */
    const COL_APTMDUEDAY4 = 'ap_term_code.AptmDueDay4';

    /**
     * the column name for the AptmPlusMonths4 field
     */
    const COL_APTMPLUSMONTHS4 = 'ap_term_code.AptmPlusMonths4';

    /**
     * the column name for the AptmDueDate4 field
     */
    const COL_APTMDUEDATE4 = 'ap_term_code.AptmDueDate4';

    /**
     * the column name for the AptmPlusYear4 field
     */
    const COL_APTMPLUSYEAR4 = 'ap_term_code.AptmPlusYear4';

    /**
     * the column name for the AptmSplit5 field
     */
    const COL_APTMSPLIT5 = 'ap_term_code.AptmSplit5';

    /**
     * the column name for the AptmOrderPct5 field
     */
    const COL_APTMORDERPCT5 = 'ap_term_code.AptmOrderPct5';

    /**
     * the column name for the AptmDiscPct5 field
     */
    const COL_APTMDISCPCT5 = 'ap_term_code.AptmDiscPct5';

    /**
     * the column name for the AptmDiscDays5 field
     */
    const COL_APTMDISCDAYS5 = 'ap_term_code.AptmDiscDays5';

    /**
     * the column name for the AptmDiscDay5 field
     */
    const COL_APTMDISCDAY5 = 'ap_term_code.AptmDiscDay5';

    /**
     * the column name for the AptmDiscDate5 field
     */
    const COL_APTMDISCDATE5 = 'ap_term_code.AptmDiscDate5';

    /**
     * the column name for the AptmDueDays5 field
     */
    const COL_APTMDUEDAYS5 = 'ap_term_code.AptmDueDays5';

    /**
     * the column name for the AptmDueDay5 field
     */
    const COL_APTMDUEDAY5 = 'ap_term_code.AptmDueDay5';

    /**
     * the column name for the AptmPlusMonths5 field
     */
    const COL_APTMPLUSMONTHS5 = 'ap_term_code.AptmPlusMonths5';

    /**
     * the column name for the AptmDueDate5 field
     */
    const COL_APTMDUEDATE5 = 'ap_term_code.AptmDueDate5';

    /**
     * the column name for the AptmPlusYear5 field
     */
    const COL_APTMPLUSYEAR5 = 'ap_term_code.AptmPlusYear5';

    /**
     * the column name for the AptmDayFrom1 field
     */
    const COL_APTMDAYFROM1 = 'ap_term_code.AptmDayFrom1';

    /**
     * the column name for the AptmDayThru1 field
     */
    const COL_APTMDAYTHRU1 = 'ap_term_code.AptmDayThru1';

    /**
     * the column name for the AptmEomDiscPct1 field
     */
    const COL_APTMEOMDISCPCT1 = 'ap_term_code.AptmEomDiscPct1';

    /**
     * the column name for the AptmEomDiscDay1 field
     */
    const COL_APTMEOMDISCDAY1 = 'ap_term_code.AptmEomDiscDay1';

    /**
     * the column name for the AptmEomDiscMonths1 field
     */
    const COL_APTMEOMDISCMONTHS1 = 'ap_term_code.AptmEomDiscMonths1';

    /**
     * the column name for the AptmEomDueDay1 field
     */
    const COL_APTMEOMDUEDAY1 = 'ap_term_code.AptmEomDueDay1';

    /**
     * the column name for the AptmEomPlusMonths1 field
     */
    const COL_APTMEOMPLUSMONTHS1 = 'ap_term_code.AptmEomPlusMonths1';

    /**
     * the column name for the AptmDayFrom2 field
     */
    const COL_APTMDAYFROM2 = 'ap_term_code.AptmDayFrom2';

    /**
     * the column name for the AptmDayThru2 field
     */
    const COL_APTMDAYTHRU2 = 'ap_term_code.AptmDayThru2';

    /**
     * the column name for the AptmEomDiscPct2 field
     */
    const COL_APTMEOMDISCPCT2 = 'ap_term_code.AptmEomDiscPct2';

    /**
     * the column name for the AptmEomDiscDay2 field
     */
    const COL_APTMEOMDISCDAY2 = 'ap_term_code.AptmEomDiscDay2';

    /**
     * the column name for the AptmEomDiscMonths2 field
     */
    const COL_APTMEOMDISCMONTHS2 = 'ap_term_code.AptmEomDiscMonths2';

    /**
     * the column name for the AptmEomDueDay2 field
     */
    const COL_APTMEOMDUEDAY2 = 'ap_term_code.AptmEomDueDay2';

    /**
     * the column name for the AptmEomPlusMonths2 field
     */
    const COL_APTMEOMPLUSMONTHS2 = 'ap_term_code.AptmEomPlusMonths2';

    /**
     * the column name for the AptmDayFrom3 field
     */
    const COL_APTMDAYFROM3 = 'ap_term_code.AptmDayFrom3';

    /**
     * the column name for the AptmDayThru3 field
     */
    const COL_APTMDAYTHRU3 = 'ap_term_code.AptmDayThru3';

    /**
     * the column name for the AptmEomDiscPct3 field
     */
    const COL_APTMEOMDISCPCT3 = 'ap_term_code.AptmEomDiscPct3';

    /**
     * the column name for the AptmEomDiscDay3 field
     */
    const COL_APTMEOMDISCDAY3 = 'ap_term_code.AptmEomDiscDay3';

    /**
     * the column name for the AptmEomDiscMonths3 field
     */
    const COL_APTMEOMDISCMONTHS3 = 'ap_term_code.AptmEomDiscMonths3';

    /**
     * the column name for the AptmEomDueDay3 field
     */
    const COL_APTMEOMDUEDAY3 = 'ap_term_code.AptmEomDueDay3';

    /**
     * the column name for the AptmEomPlusMonths3 field
     */
    const COL_APTMEOMPLUSMONTHS3 = 'ap_term_code.AptmEomPlusMonths3';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ap_term_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ap_term_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ap_term_code.dummy';

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
        self::TYPE_PHPNAME       => array('Aptmtermcode', 'Aptmtermdesc', 'Aptmmethod', 'Aptmexpiredate', 'Aptmsplit1', 'Aptmorderpct1', 'Aptmdiscpct1', 'Aptmdiscdays1', 'Aptmdiscday1', 'Aptmdiscdate1', 'Aptmduedays1', 'Aptmdueday1', 'Aptmplusmonths1', 'Aptmduedate1', 'Aptmplusyear1', 'Aptmsplit2', 'Aptmorderpct2', 'Aptmdiscpct2', 'Aptmdiscdays2', 'Aptmdiscday2', 'Aptmdiscdate2', 'Aptmduedays2', 'Aptmdueday2', 'Aptmplusmonths2', 'Aptmduedate2', 'Aptmplusyear2', 'Aptmsplit3', 'Aptmorderpct3', 'Aptmdiscpct3', 'Aptmdiscdays3', 'Aptmdiscday3', 'Aptmdiscdate3', 'Aptmduedays3', 'Aptmdueday3', 'Aptmplusmonths3', 'Aptmduedate3', 'Aptmplusyear3', 'Aptmsplit4', 'Aptmorderpct4', 'Aptmdiscpct4', 'Aptmdiscdays4', 'Aptmdiscday4', 'Aptmdiscdate4', 'Aptmduedays4', 'Aptmdueday4', 'Aptmplusmonths4', 'Aptmduedate4', 'Aptmplusyear4', 'Aptmsplit5', 'Aptmorderpct5', 'Aptmdiscpct5', 'Aptmdiscdays5', 'Aptmdiscday5', 'Aptmdiscdate5', 'Aptmduedays5', 'Aptmdueday5', 'Aptmplusmonths5', 'Aptmduedate5', 'Aptmplusyear5', 'Aptmdayfrom1', 'Aptmdaythru1', 'Aptmeomdiscpct1', 'Aptmeomdiscday1', 'Aptmeomdiscmonths1', 'Aptmeomdueday1', 'Aptmeomplusmonths1', 'Aptmdayfrom2', 'Aptmdaythru2', 'Aptmeomdiscpct2', 'Aptmeomdiscday2', 'Aptmeomdiscmonths2', 'Aptmeomdueday2', 'Aptmeomplusmonths2', 'Aptmdayfrom3', 'Aptmdaythru3', 'Aptmeomdiscpct3', 'Aptmeomdiscday3', 'Aptmeomdiscmonths3', 'Aptmeomdueday3', 'Aptmeomplusmonths3', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('aptmtermcode', 'aptmtermdesc', 'aptmmethod', 'aptmexpiredate', 'aptmsplit1', 'aptmorderpct1', 'aptmdiscpct1', 'aptmdiscdays1', 'aptmdiscday1', 'aptmdiscdate1', 'aptmduedays1', 'aptmdueday1', 'aptmplusmonths1', 'aptmduedate1', 'aptmplusyear1', 'aptmsplit2', 'aptmorderpct2', 'aptmdiscpct2', 'aptmdiscdays2', 'aptmdiscday2', 'aptmdiscdate2', 'aptmduedays2', 'aptmdueday2', 'aptmplusmonths2', 'aptmduedate2', 'aptmplusyear2', 'aptmsplit3', 'aptmorderpct3', 'aptmdiscpct3', 'aptmdiscdays3', 'aptmdiscday3', 'aptmdiscdate3', 'aptmduedays3', 'aptmdueday3', 'aptmplusmonths3', 'aptmduedate3', 'aptmplusyear3', 'aptmsplit4', 'aptmorderpct4', 'aptmdiscpct4', 'aptmdiscdays4', 'aptmdiscday4', 'aptmdiscdate4', 'aptmduedays4', 'aptmdueday4', 'aptmplusmonths4', 'aptmduedate4', 'aptmplusyear4', 'aptmsplit5', 'aptmorderpct5', 'aptmdiscpct5', 'aptmdiscdays5', 'aptmdiscday5', 'aptmdiscdate5', 'aptmduedays5', 'aptmdueday5', 'aptmplusmonths5', 'aptmduedate5', 'aptmplusyear5', 'aptmdayfrom1', 'aptmdaythru1', 'aptmeomdiscpct1', 'aptmeomdiscday1', 'aptmeomdiscmonths1', 'aptmeomdueday1', 'aptmeomplusmonths1', 'aptmdayfrom2', 'aptmdaythru2', 'aptmeomdiscpct2', 'aptmeomdiscday2', 'aptmeomdiscmonths2', 'aptmeomdueday2', 'aptmeomplusmonths2', 'aptmdayfrom3', 'aptmdaythru3', 'aptmeomdiscpct3', 'aptmeomdiscday3', 'aptmeomdiscmonths3', 'aptmeomdueday3', 'aptmeomplusmonths3', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ApTermsCodeTableMap::COL_APTMTERMCODE, ApTermsCodeTableMap::COL_APTMTERMDESC, ApTermsCodeTableMap::COL_APTMMETHOD, ApTermsCodeTableMap::COL_APTMEXPIREDATE, ApTermsCodeTableMap::COL_APTMSPLIT1, ApTermsCodeTableMap::COL_APTMORDERPCT1, ApTermsCodeTableMap::COL_APTMDISCPCT1, ApTermsCodeTableMap::COL_APTMDISCDAYS1, ApTermsCodeTableMap::COL_APTMDISCDAY1, ApTermsCodeTableMap::COL_APTMDISCDATE1, ApTermsCodeTableMap::COL_APTMDUEDAYS1, ApTermsCodeTableMap::COL_APTMDUEDAY1, ApTermsCodeTableMap::COL_APTMPLUSMONTHS1, ApTermsCodeTableMap::COL_APTMDUEDATE1, ApTermsCodeTableMap::COL_APTMPLUSYEAR1, ApTermsCodeTableMap::COL_APTMSPLIT2, ApTermsCodeTableMap::COL_APTMORDERPCT2, ApTermsCodeTableMap::COL_APTMDISCPCT2, ApTermsCodeTableMap::COL_APTMDISCDAYS2, ApTermsCodeTableMap::COL_APTMDISCDAY2, ApTermsCodeTableMap::COL_APTMDISCDATE2, ApTermsCodeTableMap::COL_APTMDUEDAYS2, ApTermsCodeTableMap::COL_APTMDUEDAY2, ApTermsCodeTableMap::COL_APTMPLUSMONTHS2, ApTermsCodeTableMap::COL_APTMDUEDATE2, ApTermsCodeTableMap::COL_APTMPLUSYEAR2, ApTermsCodeTableMap::COL_APTMSPLIT3, ApTermsCodeTableMap::COL_APTMORDERPCT3, ApTermsCodeTableMap::COL_APTMDISCPCT3, ApTermsCodeTableMap::COL_APTMDISCDAYS3, ApTermsCodeTableMap::COL_APTMDISCDAY3, ApTermsCodeTableMap::COL_APTMDISCDATE3, ApTermsCodeTableMap::COL_APTMDUEDAYS3, ApTermsCodeTableMap::COL_APTMDUEDAY3, ApTermsCodeTableMap::COL_APTMPLUSMONTHS3, ApTermsCodeTableMap::COL_APTMDUEDATE3, ApTermsCodeTableMap::COL_APTMPLUSYEAR3, ApTermsCodeTableMap::COL_APTMSPLIT4, ApTermsCodeTableMap::COL_APTMORDERPCT4, ApTermsCodeTableMap::COL_APTMDISCPCT4, ApTermsCodeTableMap::COL_APTMDISCDAYS4, ApTermsCodeTableMap::COL_APTMDISCDAY4, ApTermsCodeTableMap::COL_APTMDISCDATE4, ApTermsCodeTableMap::COL_APTMDUEDAYS4, ApTermsCodeTableMap::COL_APTMDUEDAY4, ApTermsCodeTableMap::COL_APTMPLUSMONTHS4, ApTermsCodeTableMap::COL_APTMDUEDATE4, ApTermsCodeTableMap::COL_APTMPLUSYEAR4, ApTermsCodeTableMap::COL_APTMSPLIT5, ApTermsCodeTableMap::COL_APTMORDERPCT5, ApTermsCodeTableMap::COL_APTMDISCPCT5, ApTermsCodeTableMap::COL_APTMDISCDAYS5, ApTermsCodeTableMap::COL_APTMDISCDAY5, ApTermsCodeTableMap::COL_APTMDISCDATE5, ApTermsCodeTableMap::COL_APTMDUEDAYS5, ApTermsCodeTableMap::COL_APTMDUEDAY5, ApTermsCodeTableMap::COL_APTMPLUSMONTHS5, ApTermsCodeTableMap::COL_APTMDUEDATE5, ApTermsCodeTableMap::COL_APTMPLUSYEAR5, ApTermsCodeTableMap::COL_APTMDAYFROM1, ApTermsCodeTableMap::COL_APTMDAYTHRU1, ApTermsCodeTableMap::COL_APTMEOMDISCPCT1, ApTermsCodeTableMap::COL_APTMEOMDISCDAY1, ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1, ApTermsCodeTableMap::COL_APTMEOMDUEDAY1, ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1, ApTermsCodeTableMap::COL_APTMDAYFROM2, ApTermsCodeTableMap::COL_APTMDAYTHRU2, ApTermsCodeTableMap::COL_APTMEOMDISCPCT2, ApTermsCodeTableMap::COL_APTMEOMDISCDAY2, ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2, ApTermsCodeTableMap::COL_APTMEOMDUEDAY2, ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2, ApTermsCodeTableMap::COL_APTMDAYFROM3, ApTermsCodeTableMap::COL_APTMDAYTHRU3, ApTermsCodeTableMap::COL_APTMEOMDISCPCT3, ApTermsCodeTableMap::COL_APTMEOMDISCDAY3, ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3, ApTermsCodeTableMap::COL_APTMEOMDUEDAY3, ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3, ApTermsCodeTableMap::COL_DATEUPDTD, ApTermsCodeTableMap::COL_TIMEUPDTD, ApTermsCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('AptmTermCode', 'AptmTermDesc', 'AptmMethod', 'AptmExpireDate', 'AptmSplit1', 'AptmOrderPct1', 'AptmDiscPct1', 'AptmDiscDays1', 'AptmDiscDay1', 'AptmDiscDate1', 'AptmDueDays1', 'AptmDueDay1', 'AptmPlusMonths1', 'AptmDueDate1', 'AptmPlusYear1', 'AptmSplit2', 'AptmOrderPct2', 'AptmDiscPct2', 'AptmDiscDays2', 'AptmDiscDay2', 'AptmDiscDate2', 'AptmDueDays2', 'AptmDueDay2', 'AptmPlusMonths2', 'AptmDueDate2', 'AptmPlusYear2', 'AptmSplit3', 'AptmOrderPct3', 'AptmDiscPct3', 'AptmDiscDays3', 'AptmDiscDay3', 'AptmDiscDate3', 'AptmDueDays3', 'AptmDueDay3', 'AptmPlusMonths3', 'AptmDueDate3', 'AptmPlusYear3', 'AptmSplit4', 'AptmOrderPct4', 'AptmDiscPct4', 'AptmDiscDays4', 'AptmDiscDay4', 'AptmDiscDate4', 'AptmDueDays4', 'AptmDueDay4', 'AptmPlusMonths4', 'AptmDueDate4', 'AptmPlusYear4', 'AptmSplit5', 'AptmOrderPct5', 'AptmDiscPct5', 'AptmDiscDays5', 'AptmDiscDay5', 'AptmDiscDate5', 'AptmDueDays5', 'AptmDueDay5', 'AptmPlusMonths5', 'AptmDueDate5', 'AptmPlusYear5', 'AptmDayFrom1', 'AptmDayThru1', 'AptmEomDiscPct1', 'AptmEomDiscDay1', 'AptmEomDiscMonths1', 'AptmEomDueDay1', 'AptmEomPlusMonths1', 'AptmDayFrom2', 'AptmDayThru2', 'AptmEomDiscPct2', 'AptmEomDiscDay2', 'AptmEomDiscMonths2', 'AptmEomDueDay2', 'AptmEomPlusMonths2', 'AptmDayFrom3', 'AptmDayThru3', 'AptmEomDiscPct3', 'AptmEomDiscDay3', 'AptmEomDiscMonths3', 'AptmEomDueDay3', 'AptmEomPlusMonths3', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Aptmtermcode' => 0, 'Aptmtermdesc' => 1, 'Aptmmethod' => 2, 'Aptmexpiredate' => 3, 'Aptmsplit1' => 4, 'Aptmorderpct1' => 5, 'Aptmdiscpct1' => 6, 'Aptmdiscdays1' => 7, 'Aptmdiscday1' => 8, 'Aptmdiscdate1' => 9, 'Aptmduedays1' => 10, 'Aptmdueday1' => 11, 'Aptmplusmonths1' => 12, 'Aptmduedate1' => 13, 'Aptmplusyear1' => 14, 'Aptmsplit2' => 15, 'Aptmorderpct2' => 16, 'Aptmdiscpct2' => 17, 'Aptmdiscdays2' => 18, 'Aptmdiscday2' => 19, 'Aptmdiscdate2' => 20, 'Aptmduedays2' => 21, 'Aptmdueday2' => 22, 'Aptmplusmonths2' => 23, 'Aptmduedate2' => 24, 'Aptmplusyear2' => 25, 'Aptmsplit3' => 26, 'Aptmorderpct3' => 27, 'Aptmdiscpct3' => 28, 'Aptmdiscdays3' => 29, 'Aptmdiscday3' => 30, 'Aptmdiscdate3' => 31, 'Aptmduedays3' => 32, 'Aptmdueday3' => 33, 'Aptmplusmonths3' => 34, 'Aptmduedate3' => 35, 'Aptmplusyear3' => 36, 'Aptmsplit4' => 37, 'Aptmorderpct4' => 38, 'Aptmdiscpct4' => 39, 'Aptmdiscdays4' => 40, 'Aptmdiscday4' => 41, 'Aptmdiscdate4' => 42, 'Aptmduedays4' => 43, 'Aptmdueday4' => 44, 'Aptmplusmonths4' => 45, 'Aptmduedate4' => 46, 'Aptmplusyear4' => 47, 'Aptmsplit5' => 48, 'Aptmorderpct5' => 49, 'Aptmdiscpct5' => 50, 'Aptmdiscdays5' => 51, 'Aptmdiscday5' => 52, 'Aptmdiscdate5' => 53, 'Aptmduedays5' => 54, 'Aptmdueday5' => 55, 'Aptmplusmonths5' => 56, 'Aptmduedate5' => 57, 'Aptmplusyear5' => 58, 'Aptmdayfrom1' => 59, 'Aptmdaythru1' => 60, 'Aptmeomdiscpct1' => 61, 'Aptmeomdiscday1' => 62, 'Aptmeomdiscmonths1' => 63, 'Aptmeomdueday1' => 64, 'Aptmeomplusmonths1' => 65, 'Aptmdayfrom2' => 66, 'Aptmdaythru2' => 67, 'Aptmeomdiscpct2' => 68, 'Aptmeomdiscday2' => 69, 'Aptmeomdiscmonths2' => 70, 'Aptmeomdueday2' => 71, 'Aptmeomplusmonths2' => 72, 'Aptmdayfrom3' => 73, 'Aptmdaythru3' => 74, 'Aptmeomdiscpct3' => 75, 'Aptmeomdiscday3' => 76, 'Aptmeomdiscmonths3' => 77, 'Aptmeomdueday3' => 78, 'Aptmeomplusmonths3' => 79, 'Dateupdtd' => 80, 'Timeupdtd' => 81, 'Dummy' => 82, ),
        self::TYPE_CAMELNAME     => array('aptmtermcode' => 0, 'aptmtermdesc' => 1, 'aptmmethod' => 2, 'aptmexpiredate' => 3, 'aptmsplit1' => 4, 'aptmorderpct1' => 5, 'aptmdiscpct1' => 6, 'aptmdiscdays1' => 7, 'aptmdiscday1' => 8, 'aptmdiscdate1' => 9, 'aptmduedays1' => 10, 'aptmdueday1' => 11, 'aptmplusmonths1' => 12, 'aptmduedate1' => 13, 'aptmplusyear1' => 14, 'aptmsplit2' => 15, 'aptmorderpct2' => 16, 'aptmdiscpct2' => 17, 'aptmdiscdays2' => 18, 'aptmdiscday2' => 19, 'aptmdiscdate2' => 20, 'aptmduedays2' => 21, 'aptmdueday2' => 22, 'aptmplusmonths2' => 23, 'aptmduedate2' => 24, 'aptmplusyear2' => 25, 'aptmsplit3' => 26, 'aptmorderpct3' => 27, 'aptmdiscpct3' => 28, 'aptmdiscdays3' => 29, 'aptmdiscday3' => 30, 'aptmdiscdate3' => 31, 'aptmduedays3' => 32, 'aptmdueday3' => 33, 'aptmplusmonths3' => 34, 'aptmduedate3' => 35, 'aptmplusyear3' => 36, 'aptmsplit4' => 37, 'aptmorderpct4' => 38, 'aptmdiscpct4' => 39, 'aptmdiscdays4' => 40, 'aptmdiscday4' => 41, 'aptmdiscdate4' => 42, 'aptmduedays4' => 43, 'aptmdueday4' => 44, 'aptmplusmonths4' => 45, 'aptmduedate4' => 46, 'aptmplusyear4' => 47, 'aptmsplit5' => 48, 'aptmorderpct5' => 49, 'aptmdiscpct5' => 50, 'aptmdiscdays5' => 51, 'aptmdiscday5' => 52, 'aptmdiscdate5' => 53, 'aptmduedays5' => 54, 'aptmdueday5' => 55, 'aptmplusmonths5' => 56, 'aptmduedate5' => 57, 'aptmplusyear5' => 58, 'aptmdayfrom1' => 59, 'aptmdaythru1' => 60, 'aptmeomdiscpct1' => 61, 'aptmeomdiscday1' => 62, 'aptmeomdiscmonths1' => 63, 'aptmeomdueday1' => 64, 'aptmeomplusmonths1' => 65, 'aptmdayfrom2' => 66, 'aptmdaythru2' => 67, 'aptmeomdiscpct2' => 68, 'aptmeomdiscday2' => 69, 'aptmeomdiscmonths2' => 70, 'aptmeomdueday2' => 71, 'aptmeomplusmonths2' => 72, 'aptmdayfrom3' => 73, 'aptmdaythru3' => 74, 'aptmeomdiscpct3' => 75, 'aptmeomdiscday3' => 76, 'aptmeomdiscmonths3' => 77, 'aptmeomdueday3' => 78, 'aptmeomplusmonths3' => 79, 'dateupdtd' => 80, 'timeupdtd' => 81, 'dummy' => 82, ),
        self::TYPE_COLNAME       => array(ApTermsCodeTableMap::COL_APTMTERMCODE => 0, ApTermsCodeTableMap::COL_APTMTERMDESC => 1, ApTermsCodeTableMap::COL_APTMMETHOD => 2, ApTermsCodeTableMap::COL_APTMEXPIREDATE => 3, ApTermsCodeTableMap::COL_APTMSPLIT1 => 4, ApTermsCodeTableMap::COL_APTMORDERPCT1 => 5, ApTermsCodeTableMap::COL_APTMDISCPCT1 => 6, ApTermsCodeTableMap::COL_APTMDISCDAYS1 => 7, ApTermsCodeTableMap::COL_APTMDISCDAY1 => 8, ApTermsCodeTableMap::COL_APTMDISCDATE1 => 9, ApTermsCodeTableMap::COL_APTMDUEDAYS1 => 10, ApTermsCodeTableMap::COL_APTMDUEDAY1 => 11, ApTermsCodeTableMap::COL_APTMPLUSMONTHS1 => 12, ApTermsCodeTableMap::COL_APTMDUEDATE1 => 13, ApTermsCodeTableMap::COL_APTMPLUSYEAR1 => 14, ApTermsCodeTableMap::COL_APTMSPLIT2 => 15, ApTermsCodeTableMap::COL_APTMORDERPCT2 => 16, ApTermsCodeTableMap::COL_APTMDISCPCT2 => 17, ApTermsCodeTableMap::COL_APTMDISCDAYS2 => 18, ApTermsCodeTableMap::COL_APTMDISCDAY2 => 19, ApTermsCodeTableMap::COL_APTMDISCDATE2 => 20, ApTermsCodeTableMap::COL_APTMDUEDAYS2 => 21, ApTermsCodeTableMap::COL_APTMDUEDAY2 => 22, ApTermsCodeTableMap::COL_APTMPLUSMONTHS2 => 23, ApTermsCodeTableMap::COL_APTMDUEDATE2 => 24, ApTermsCodeTableMap::COL_APTMPLUSYEAR2 => 25, ApTermsCodeTableMap::COL_APTMSPLIT3 => 26, ApTermsCodeTableMap::COL_APTMORDERPCT3 => 27, ApTermsCodeTableMap::COL_APTMDISCPCT3 => 28, ApTermsCodeTableMap::COL_APTMDISCDAYS3 => 29, ApTermsCodeTableMap::COL_APTMDISCDAY3 => 30, ApTermsCodeTableMap::COL_APTMDISCDATE3 => 31, ApTermsCodeTableMap::COL_APTMDUEDAYS3 => 32, ApTermsCodeTableMap::COL_APTMDUEDAY3 => 33, ApTermsCodeTableMap::COL_APTMPLUSMONTHS3 => 34, ApTermsCodeTableMap::COL_APTMDUEDATE3 => 35, ApTermsCodeTableMap::COL_APTMPLUSYEAR3 => 36, ApTermsCodeTableMap::COL_APTMSPLIT4 => 37, ApTermsCodeTableMap::COL_APTMORDERPCT4 => 38, ApTermsCodeTableMap::COL_APTMDISCPCT4 => 39, ApTermsCodeTableMap::COL_APTMDISCDAYS4 => 40, ApTermsCodeTableMap::COL_APTMDISCDAY4 => 41, ApTermsCodeTableMap::COL_APTMDISCDATE4 => 42, ApTermsCodeTableMap::COL_APTMDUEDAYS4 => 43, ApTermsCodeTableMap::COL_APTMDUEDAY4 => 44, ApTermsCodeTableMap::COL_APTMPLUSMONTHS4 => 45, ApTermsCodeTableMap::COL_APTMDUEDATE4 => 46, ApTermsCodeTableMap::COL_APTMPLUSYEAR4 => 47, ApTermsCodeTableMap::COL_APTMSPLIT5 => 48, ApTermsCodeTableMap::COL_APTMORDERPCT5 => 49, ApTermsCodeTableMap::COL_APTMDISCPCT5 => 50, ApTermsCodeTableMap::COL_APTMDISCDAYS5 => 51, ApTermsCodeTableMap::COL_APTMDISCDAY5 => 52, ApTermsCodeTableMap::COL_APTMDISCDATE5 => 53, ApTermsCodeTableMap::COL_APTMDUEDAYS5 => 54, ApTermsCodeTableMap::COL_APTMDUEDAY5 => 55, ApTermsCodeTableMap::COL_APTMPLUSMONTHS5 => 56, ApTermsCodeTableMap::COL_APTMDUEDATE5 => 57, ApTermsCodeTableMap::COL_APTMPLUSYEAR5 => 58, ApTermsCodeTableMap::COL_APTMDAYFROM1 => 59, ApTermsCodeTableMap::COL_APTMDAYTHRU1 => 60, ApTermsCodeTableMap::COL_APTMEOMDISCPCT1 => 61, ApTermsCodeTableMap::COL_APTMEOMDISCDAY1 => 62, ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1 => 63, ApTermsCodeTableMap::COL_APTMEOMDUEDAY1 => 64, ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1 => 65, ApTermsCodeTableMap::COL_APTMDAYFROM2 => 66, ApTermsCodeTableMap::COL_APTMDAYTHRU2 => 67, ApTermsCodeTableMap::COL_APTMEOMDISCPCT2 => 68, ApTermsCodeTableMap::COL_APTMEOMDISCDAY2 => 69, ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2 => 70, ApTermsCodeTableMap::COL_APTMEOMDUEDAY2 => 71, ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2 => 72, ApTermsCodeTableMap::COL_APTMDAYFROM3 => 73, ApTermsCodeTableMap::COL_APTMDAYTHRU3 => 74, ApTermsCodeTableMap::COL_APTMEOMDISCPCT3 => 75, ApTermsCodeTableMap::COL_APTMEOMDISCDAY3 => 76, ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3 => 77, ApTermsCodeTableMap::COL_APTMEOMDUEDAY3 => 78, ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3 => 79, ApTermsCodeTableMap::COL_DATEUPDTD => 80, ApTermsCodeTableMap::COL_TIMEUPDTD => 81, ApTermsCodeTableMap::COL_DUMMY => 82, ),
        self::TYPE_FIELDNAME     => array('AptmTermCode' => 0, 'AptmTermDesc' => 1, 'AptmMethod' => 2, 'AptmExpireDate' => 3, 'AptmSplit1' => 4, 'AptmOrderPct1' => 5, 'AptmDiscPct1' => 6, 'AptmDiscDays1' => 7, 'AptmDiscDay1' => 8, 'AptmDiscDate1' => 9, 'AptmDueDays1' => 10, 'AptmDueDay1' => 11, 'AptmPlusMonths1' => 12, 'AptmDueDate1' => 13, 'AptmPlusYear1' => 14, 'AptmSplit2' => 15, 'AptmOrderPct2' => 16, 'AptmDiscPct2' => 17, 'AptmDiscDays2' => 18, 'AptmDiscDay2' => 19, 'AptmDiscDate2' => 20, 'AptmDueDays2' => 21, 'AptmDueDay2' => 22, 'AptmPlusMonths2' => 23, 'AptmDueDate2' => 24, 'AptmPlusYear2' => 25, 'AptmSplit3' => 26, 'AptmOrderPct3' => 27, 'AptmDiscPct3' => 28, 'AptmDiscDays3' => 29, 'AptmDiscDay3' => 30, 'AptmDiscDate3' => 31, 'AptmDueDays3' => 32, 'AptmDueDay3' => 33, 'AptmPlusMonths3' => 34, 'AptmDueDate3' => 35, 'AptmPlusYear3' => 36, 'AptmSplit4' => 37, 'AptmOrderPct4' => 38, 'AptmDiscPct4' => 39, 'AptmDiscDays4' => 40, 'AptmDiscDay4' => 41, 'AptmDiscDate4' => 42, 'AptmDueDays4' => 43, 'AptmDueDay4' => 44, 'AptmPlusMonths4' => 45, 'AptmDueDate4' => 46, 'AptmPlusYear4' => 47, 'AptmSplit5' => 48, 'AptmOrderPct5' => 49, 'AptmDiscPct5' => 50, 'AptmDiscDays5' => 51, 'AptmDiscDay5' => 52, 'AptmDiscDate5' => 53, 'AptmDueDays5' => 54, 'AptmDueDay5' => 55, 'AptmPlusMonths5' => 56, 'AptmDueDate5' => 57, 'AptmPlusYear5' => 58, 'AptmDayFrom1' => 59, 'AptmDayThru1' => 60, 'AptmEomDiscPct1' => 61, 'AptmEomDiscDay1' => 62, 'AptmEomDiscMonths1' => 63, 'AptmEomDueDay1' => 64, 'AptmEomPlusMonths1' => 65, 'AptmDayFrom2' => 66, 'AptmDayThru2' => 67, 'AptmEomDiscPct2' => 68, 'AptmEomDiscDay2' => 69, 'AptmEomDiscMonths2' => 70, 'AptmEomDueDay2' => 71, 'AptmEomPlusMonths2' => 72, 'AptmDayFrom3' => 73, 'AptmDayThru3' => 74, 'AptmEomDiscPct3' => 75, 'AptmEomDiscDay3' => 76, 'AptmEomDiscMonths3' => 77, 'AptmEomDueDay3' => 78, 'AptmEomPlusMonths3' => 79, 'DateUpdtd' => 80, 'TimeUpdtd' => 81, 'dummy' => 82, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, )
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
        $this->setName('ap_term_code');
        $this->setPhpName('ApTermsCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApTermsCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('AptmTermCode', 'Aptmtermcode', 'VARCHAR', true, 4, '');
        $this->addColumn('AptmTermDesc', 'Aptmtermdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('AptmMethod', 'Aptmmethod', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmExpireDate', 'Aptmexpiredate', 'VARCHAR', false, 8, null);
        $this->addColumn('AptmSplit1', 'Aptmsplit1', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmOrderPct1', 'Aptmorderpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscPct1', 'Aptmdiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscDays1', 'Aptmdiscdays1', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDiscDay1', 'Aptmdiscday1', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmDiscDate1', 'Aptmdiscdate1', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmDueDays1', 'Aptmduedays1', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDueDay1', 'Aptmdueday1', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmPlusMonths1', 'Aptmplusmonths1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDueDate1', 'Aptmduedate1', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmPlusYear1', 'Aptmplusyear1', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmSplit2', 'Aptmsplit2', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmOrderPct2', 'Aptmorderpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscPct2', 'Aptmdiscpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscDays2', 'Aptmdiscdays2', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDiscDay2', 'Aptmdiscday2', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmDiscDate2', 'Aptmdiscdate2', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmDueDays2', 'Aptmduedays2', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDueDay2', 'Aptmdueday2', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmPlusMonths2', 'Aptmplusmonths2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDueDate2', 'Aptmduedate2', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmPlusYear2', 'Aptmplusyear2', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmSplit3', 'Aptmsplit3', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmOrderPct3', 'Aptmorderpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscPct3', 'Aptmdiscpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscDays3', 'Aptmdiscdays3', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDiscDay3', 'Aptmdiscday3', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmDiscDate3', 'Aptmdiscdate3', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmDueDays3', 'Aptmduedays3', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDueDay3', 'Aptmdueday3', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmPlusMonths3', 'Aptmplusmonths3', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDueDate3', 'Aptmduedate3', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmPlusYear3', 'Aptmplusyear3', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmSplit4', 'Aptmsplit4', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmOrderPct4', 'Aptmorderpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscPct4', 'Aptmdiscpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscDays4', 'Aptmdiscdays4', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDiscDay4', 'Aptmdiscday4', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmDiscDate4', 'Aptmdiscdate4', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmDueDays4', 'Aptmduedays4', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDueDay4', 'Aptmdueday4', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmPlusMonths4', 'Aptmplusmonths4', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDueDate4', 'Aptmduedate4', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmPlusYear4', 'Aptmplusyear4', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmSplit5', 'Aptmsplit5', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmOrderPct5', 'Aptmorderpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscPct5', 'Aptmdiscpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmDiscDays5', 'Aptmdiscdays5', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDiscDay5', 'Aptmdiscday5', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmDiscDate5', 'Aptmdiscdate5', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmDueDays5', 'Aptmduedays5', 'INTEGER', false, 3, null);
        $this->addColumn('AptmDueDay5', 'Aptmdueday5', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmPlusMonths5', 'Aptmplusmonths5', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDueDate5', 'Aptmduedate5', 'VARCHAR', false, 4, null);
        $this->addColumn('AptmPlusYear5', 'Aptmplusyear5', 'VARCHAR', false, 1, null);
        $this->addColumn('AptmDayFrom1', 'Aptmdayfrom1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDayThru1', 'Aptmdaythru1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDiscPct1', 'Aptmeomdiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmEomDiscDay1', 'Aptmeomdiscday1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDiscMonths1', 'Aptmeomdiscmonths1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDueDay1', 'Aptmeomdueday1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomPlusMonths1', 'Aptmeomplusmonths1', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDayFrom2', 'Aptmdayfrom2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDayThru2', 'Aptmdaythru2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDiscPct2', 'Aptmeomdiscpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmEomDiscDay2', 'Aptmeomdiscday2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDiscMonths2', 'Aptmeomdiscmonths2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDueDay2', 'Aptmeomdueday2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomPlusMonths2', 'Aptmeomplusmonths2', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDayFrom3', 'Aptmdayfrom3', 'INTEGER', false, 2, null);
        $this->addColumn('AptmDayThru3', 'Aptmdaythru3', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDiscPct3', 'Aptmeomdiscpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('AptmEomDiscDay3', 'Aptmeomdiscday3', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDiscMonths3', 'Aptmeomdiscmonths3', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomDueDay3', 'Aptmeomdueday3', 'INTEGER', false, 2, null);
        $this->addColumn('AptmEomPlusMonths3', 'Aptmeomplusmonths3', 'INTEGER', false, 2, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Vendor', '\\Vendor', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':AptmTermCode',
    1 => ':AptmTermCode',
  ),
), null, null, 'Vendors', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ApTermsCodeTableMap::CLASS_DEFAULT : ApTermsCodeTableMap::OM_CLASS;
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
     * @return array           (ApTermsCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ApTermsCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApTermsCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApTermsCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApTermsCodeTableMap::OM_CLASS;
            /** @var ApTermsCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApTermsCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ApTermsCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApTermsCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApTermsCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApTermsCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMTERMCODE);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMTERMDESC);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMMETHOD);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEXPIREDATE);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMSPLIT1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMORDERPCT1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCPCT1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAYS1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAY1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDATE1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAYS1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAY1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDATE1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSYEAR1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMSPLIT2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMORDERPCT2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCPCT2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAYS2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAY2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDATE2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAYS2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAY2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDATE2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSYEAR2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMSPLIT3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMORDERPCT3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCPCT3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAYS3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAY3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDATE3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAYS3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAY3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDATE3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSYEAR3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMSPLIT4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMORDERPCT4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCPCT4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAYS4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAY4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDATE4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAYS4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAY4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDATE4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSYEAR4);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMSPLIT5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMORDERPCT5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCPCT5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAYS5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDAY5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDISCDATE5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAYS5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDAY5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDUEDATE5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMPLUSYEAR5);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDAYFROM1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDAYTHRU1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDAYFROM2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDAYTHRU2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDAYFROM3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMDAYTHRU3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ApTermsCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.AptmTermCode');
            $criteria->addSelectColumn($alias . '.AptmTermDesc');
            $criteria->addSelectColumn($alias . '.AptmMethod');
            $criteria->addSelectColumn($alias . '.AptmExpireDate');
            $criteria->addSelectColumn($alias . '.AptmSplit1');
            $criteria->addSelectColumn($alias . '.AptmOrderPct1');
            $criteria->addSelectColumn($alias . '.AptmDiscPct1');
            $criteria->addSelectColumn($alias . '.AptmDiscDays1');
            $criteria->addSelectColumn($alias . '.AptmDiscDay1');
            $criteria->addSelectColumn($alias . '.AptmDiscDate1');
            $criteria->addSelectColumn($alias . '.AptmDueDays1');
            $criteria->addSelectColumn($alias . '.AptmDueDay1');
            $criteria->addSelectColumn($alias . '.AptmPlusMonths1');
            $criteria->addSelectColumn($alias . '.AptmDueDate1');
            $criteria->addSelectColumn($alias . '.AptmPlusYear1');
            $criteria->addSelectColumn($alias . '.AptmSplit2');
            $criteria->addSelectColumn($alias . '.AptmOrderPct2');
            $criteria->addSelectColumn($alias . '.AptmDiscPct2');
            $criteria->addSelectColumn($alias . '.AptmDiscDays2');
            $criteria->addSelectColumn($alias . '.AptmDiscDay2');
            $criteria->addSelectColumn($alias . '.AptmDiscDate2');
            $criteria->addSelectColumn($alias . '.AptmDueDays2');
            $criteria->addSelectColumn($alias . '.AptmDueDay2');
            $criteria->addSelectColumn($alias . '.AptmPlusMonths2');
            $criteria->addSelectColumn($alias . '.AptmDueDate2');
            $criteria->addSelectColumn($alias . '.AptmPlusYear2');
            $criteria->addSelectColumn($alias . '.AptmSplit3');
            $criteria->addSelectColumn($alias . '.AptmOrderPct3');
            $criteria->addSelectColumn($alias . '.AptmDiscPct3');
            $criteria->addSelectColumn($alias . '.AptmDiscDays3');
            $criteria->addSelectColumn($alias . '.AptmDiscDay3');
            $criteria->addSelectColumn($alias . '.AptmDiscDate3');
            $criteria->addSelectColumn($alias . '.AptmDueDays3');
            $criteria->addSelectColumn($alias . '.AptmDueDay3');
            $criteria->addSelectColumn($alias . '.AptmPlusMonths3');
            $criteria->addSelectColumn($alias . '.AptmDueDate3');
            $criteria->addSelectColumn($alias . '.AptmPlusYear3');
            $criteria->addSelectColumn($alias . '.AptmSplit4');
            $criteria->addSelectColumn($alias . '.AptmOrderPct4');
            $criteria->addSelectColumn($alias . '.AptmDiscPct4');
            $criteria->addSelectColumn($alias . '.AptmDiscDays4');
            $criteria->addSelectColumn($alias . '.AptmDiscDay4');
            $criteria->addSelectColumn($alias . '.AptmDiscDate4');
            $criteria->addSelectColumn($alias . '.AptmDueDays4');
            $criteria->addSelectColumn($alias . '.AptmDueDay4');
            $criteria->addSelectColumn($alias . '.AptmPlusMonths4');
            $criteria->addSelectColumn($alias . '.AptmDueDate4');
            $criteria->addSelectColumn($alias . '.AptmPlusYear4');
            $criteria->addSelectColumn($alias . '.AptmSplit5');
            $criteria->addSelectColumn($alias . '.AptmOrderPct5');
            $criteria->addSelectColumn($alias . '.AptmDiscPct5');
            $criteria->addSelectColumn($alias . '.AptmDiscDays5');
            $criteria->addSelectColumn($alias . '.AptmDiscDay5');
            $criteria->addSelectColumn($alias . '.AptmDiscDate5');
            $criteria->addSelectColumn($alias . '.AptmDueDays5');
            $criteria->addSelectColumn($alias . '.AptmDueDay5');
            $criteria->addSelectColumn($alias . '.AptmPlusMonths5');
            $criteria->addSelectColumn($alias . '.AptmDueDate5');
            $criteria->addSelectColumn($alias . '.AptmPlusYear5');
            $criteria->addSelectColumn($alias . '.AptmDayFrom1');
            $criteria->addSelectColumn($alias . '.AptmDayThru1');
            $criteria->addSelectColumn($alias . '.AptmEomDiscPct1');
            $criteria->addSelectColumn($alias . '.AptmEomDiscDay1');
            $criteria->addSelectColumn($alias . '.AptmEomDiscMonths1');
            $criteria->addSelectColumn($alias . '.AptmEomDueDay1');
            $criteria->addSelectColumn($alias . '.AptmEomPlusMonths1');
            $criteria->addSelectColumn($alias . '.AptmDayFrom2');
            $criteria->addSelectColumn($alias . '.AptmDayThru2');
            $criteria->addSelectColumn($alias . '.AptmEomDiscPct2');
            $criteria->addSelectColumn($alias . '.AptmEomDiscDay2');
            $criteria->addSelectColumn($alias . '.AptmEomDiscMonths2');
            $criteria->addSelectColumn($alias . '.AptmEomDueDay2');
            $criteria->addSelectColumn($alias . '.AptmEomPlusMonths2');
            $criteria->addSelectColumn($alias . '.AptmDayFrom3');
            $criteria->addSelectColumn($alias . '.AptmDayThru3');
            $criteria->addSelectColumn($alias . '.AptmEomDiscPct3');
            $criteria->addSelectColumn($alias . '.AptmEomDiscDay3');
            $criteria->addSelectColumn($alias . '.AptmEomDiscMonths3');
            $criteria->addSelectColumn($alias . '.AptmEomDueDay3');
            $criteria->addSelectColumn($alias . '.AptmEomPlusMonths3');
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
        return Propel::getServiceContainer()->getDatabaseMap(ApTermsCodeTableMap::DATABASE_NAME)->getTable(ApTermsCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ApTermsCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ApTermsCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ApTermsCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ApTermsCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ApTermsCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApTermsCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApTermsCodeTableMap::DATABASE_NAME);
            $criteria->add(ApTermsCodeTableMap::COL_APTMTERMCODE, (array) $values, Criteria::IN);
        }

        $query = ApTermsCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApTermsCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApTermsCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_term_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ApTermsCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApTermsCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or ApTermsCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApTermsCode object
        }


        // Set the correct dbName
        $query = ApTermsCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ApTermsCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ApTermsCodeTableMap::buildTableMap();
