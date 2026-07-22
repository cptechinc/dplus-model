<?php

namespace Map;

use \BookingSummaryRep;
use \BookingSummaryRepQuery;
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
 * This class defines the structure of the 'so_book_by_rep_sumry' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class BookingSummaryRepTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.BookingSummaryRepTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_book_by_rep_sumry';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'BookingSummaryRep';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\BookingSummaryRep';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'BookingSummaryRep';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the ArspSalePer1 field
     */
    public const COL_ARSPSALEPER1 = 'so_book_by_rep_sumry.ArspSalePer1';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'so_book_by_rep_sumry.IntbWhse';

    /**
     * the column name for the BkrpToday field
     */
    public const COL_BKRPTODAY = 'so_book_by_rep_sumry.BkrpToday';

    /**
     * the column name for the BkrpWeekToDate field
     */
    public const COL_BKRPWEEKTODATE = 'so_book_by_rep_sumry.BkrpWeekToDate';

    /**
     * the column name for the BkrpMonthToDate field
     */
    public const COL_BKRPMONTHTODATE = 'so_book_by_rep_sumry.BkrpMonthToDate';

    /**
     * the column name for the Bkrp12moAmt1 field
     */
    public const COL_BKRP12MOAMT1 = 'so_book_by_rep_sumry.Bkrp12moAmt1';

    /**
     * the column name for the Bkrp12moAmt2 field
     */
    public const COL_BKRP12MOAMT2 = 'so_book_by_rep_sumry.Bkrp12moAmt2';

    /**
     * the column name for the Bkrp12moAmt3 field
     */
    public const COL_BKRP12MOAMT3 = 'so_book_by_rep_sumry.Bkrp12moAmt3';

    /**
     * the column name for the Bkrp12moAmt4 field
     */
    public const COL_BKRP12MOAMT4 = 'so_book_by_rep_sumry.Bkrp12moAmt4';

    /**
     * the column name for the Bkrp12moAmt5 field
     */
    public const COL_BKRP12MOAMT5 = 'so_book_by_rep_sumry.Bkrp12moAmt5';

    /**
     * the column name for the Bkrp12moAmt6 field
     */
    public const COL_BKRP12MOAMT6 = 'so_book_by_rep_sumry.Bkrp12moAmt6';

    /**
     * the column name for the Bkrp12moAmt7 field
     */
    public const COL_BKRP12MOAMT7 = 'so_book_by_rep_sumry.Bkrp12moAmt7';

    /**
     * the column name for the Bkrp12moAmt8 field
     */
    public const COL_BKRP12MOAMT8 = 'so_book_by_rep_sumry.Bkrp12moAmt8';

    /**
     * the column name for the Bkrp12moAmt9 field
     */
    public const COL_BKRP12MOAMT9 = 'so_book_by_rep_sumry.Bkrp12moAmt9';

    /**
     * the column name for the Bkrp12moAmt10 field
     */
    public const COL_BKRP12MOAMT10 = 'so_book_by_rep_sumry.Bkrp12moAmt10';

    /**
     * the column name for the Bkrp12moAmt11 field
     */
    public const COL_BKRP12MOAMT11 = 'so_book_by_rep_sumry.Bkrp12moAmt11';

    /**
     * the column name for the Bkrp12moAmt12 field
     */
    public const COL_BKRP12MOAMT12 = 'so_book_by_rep_sumry.Bkrp12moAmt12';

    /**
     * the column name for the BkrpLastDate field
     */
    public const COL_BKRPLASTDATE = 'so_book_by_rep_sumry.BkrpLastDate';

    /**
     * the column name for the BkrpLastTime field
     */
    public const COL_BKRPLASTTIME = 'so_book_by_rep_sumry.BkrpLastTime';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_book_by_rep_sumry.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_book_by_rep_sumry.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_book_by_rep_sumry.dummy';

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
        self::TYPE_PHPNAME       => ['Arspsaleper1', 'Intbwhse', 'Bkrptoday', 'Bkrpweektodate', 'Bkrpmonthtodate', 'Bkrp12moamt1', 'Bkrp12moamt2', 'Bkrp12moamt3', 'Bkrp12moamt4', 'Bkrp12moamt5', 'Bkrp12moamt6', 'Bkrp12moamt7', 'Bkrp12moamt8', 'Bkrp12moamt9', 'Bkrp12moamt10', 'Bkrp12moamt11', 'Bkrp12moamt12', 'Bkrplastdate', 'Bkrplasttime', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['arspsaleper1', 'intbwhse', 'bkrptoday', 'bkrpweektodate', 'bkrpmonthtodate', 'bkrp12moamt1', 'bkrp12moamt2', 'bkrp12moamt3', 'bkrp12moamt4', 'bkrp12moamt5', 'bkrp12moamt6', 'bkrp12moamt7', 'bkrp12moamt8', 'bkrp12moamt9', 'bkrp12moamt10', 'bkrp12moamt11', 'bkrp12moamt12', 'bkrplastdate', 'bkrplasttime', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [BookingSummaryRepTableMap::COL_ARSPSALEPER1, BookingSummaryRepTableMap::COL_INTBWHSE, BookingSummaryRepTableMap::COL_BKRPTODAY, BookingSummaryRepTableMap::COL_BKRPWEEKTODATE, BookingSummaryRepTableMap::COL_BKRPMONTHTODATE, BookingSummaryRepTableMap::COL_BKRP12MOAMT1, BookingSummaryRepTableMap::COL_BKRP12MOAMT2, BookingSummaryRepTableMap::COL_BKRP12MOAMT3, BookingSummaryRepTableMap::COL_BKRP12MOAMT4, BookingSummaryRepTableMap::COL_BKRP12MOAMT5, BookingSummaryRepTableMap::COL_BKRP12MOAMT6, BookingSummaryRepTableMap::COL_BKRP12MOAMT7, BookingSummaryRepTableMap::COL_BKRP12MOAMT8, BookingSummaryRepTableMap::COL_BKRP12MOAMT9, BookingSummaryRepTableMap::COL_BKRP12MOAMT10, BookingSummaryRepTableMap::COL_BKRP12MOAMT11, BookingSummaryRepTableMap::COL_BKRP12MOAMT12, BookingSummaryRepTableMap::COL_BKRPLASTDATE, BookingSummaryRepTableMap::COL_BKRPLASTTIME, BookingSummaryRepTableMap::COL_DATEUPDTD, BookingSummaryRepTableMap::COL_TIMEUPDTD, BookingSummaryRepTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArspSalePer1', 'IntbWhse', 'BkrpToday', 'BkrpWeekToDate', 'BkrpMonthToDate', 'Bkrp12moAmt1', 'Bkrp12moAmt2', 'Bkrp12moAmt3', 'Bkrp12moAmt4', 'Bkrp12moAmt5', 'Bkrp12moAmt6', 'Bkrp12moAmt7', 'Bkrp12moAmt8', 'Bkrp12moAmt9', 'Bkrp12moAmt10', 'Bkrp12moAmt11', 'Bkrp12moAmt12', 'BkrpLastDate', 'BkrpLastTime', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, ]
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
        self::TYPE_PHPNAME       => ['Arspsaleper1' => 0, 'Intbwhse' => 1, 'Bkrptoday' => 2, 'Bkrpweektodate' => 3, 'Bkrpmonthtodate' => 4, 'Bkrp12moamt1' => 5, 'Bkrp12moamt2' => 6, 'Bkrp12moamt3' => 7, 'Bkrp12moamt4' => 8, 'Bkrp12moamt5' => 9, 'Bkrp12moamt6' => 10, 'Bkrp12moamt7' => 11, 'Bkrp12moamt8' => 12, 'Bkrp12moamt9' => 13, 'Bkrp12moamt10' => 14, 'Bkrp12moamt11' => 15, 'Bkrp12moamt12' => 16, 'Bkrplastdate' => 17, 'Bkrplasttime' => 18, 'Dateupdtd' => 19, 'Timeupdtd' => 20, 'Dummy' => 21, ],
        self::TYPE_CAMELNAME     => ['arspsaleper1' => 0, 'intbwhse' => 1, 'bkrptoday' => 2, 'bkrpweektodate' => 3, 'bkrpmonthtodate' => 4, 'bkrp12moamt1' => 5, 'bkrp12moamt2' => 6, 'bkrp12moamt3' => 7, 'bkrp12moamt4' => 8, 'bkrp12moamt5' => 9, 'bkrp12moamt6' => 10, 'bkrp12moamt7' => 11, 'bkrp12moamt8' => 12, 'bkrp12moamt9' => 13, 'bkrp12moamt10' => 14, 'bkrp12moamt11' => 15, 'bkrp12moamt12' => 16, 'bkrplastdate' => 17, 'bkrplasttime' => 18, 'dateupdtd' => 19, 'timeupdtd' => 20, 'dummy' => 21, ],
        self::TYPE_COLNAME       => [BookingSummaryRepTableMap::COL_ARSPSALEPER1 => 0, BookingSummaryRepTableMap::COL_INTBWHSE => 1, BookingSummaryRepTableMap::COL_BKRPTODAY => 2, BookingSummaryRepTableMap::COL_BKRPWEEKTODATE => 3, BookingSummaryRepTableMap::COL_BKRPMONTHTODATE => 4, BookingSummaryRepTableMap::COL_BKRP12MOAMT1 => 5, BookingSummaryRepTableMap::COL_BKRP12MOAMT2 => 6, BookingSummaryRepTableMap::COL_BKRP12MOAMT3 => 7, BookingSummaryRepTableMap::COL_BKRP12MOAMT4 => 8, BookingSummaryRepTableMap::COL_BKRP12MOAMT5 => 9, BookingSummaryRepTableMap::COL_BKRP12MOAMT6 => 10, BookingSummaryRepTableMap::COL_BKRP12MOAMT7 => 11, BookingSummaryRepTableMap::COL_BKRP12MOAMT8 => 12, BookingSummaryRepTableMap::COL_BKRP12MOAMT9 => 13, BookingSummaryRepTableMap::COL_BKRP12MOAMT10 => 14, BookingSummaryRepTableMap::COL_BKRP12MOAMT11 => 15, BookingSummaryRepTableMap::COL_BKRP12MOAMT12 => 16, BookingSummaryRepTableMap::COL_BKRPLASTDATE => 17, BookingSummaryRepTableMap::COL_BKRPLASTTIME => 18, BookingSummaryRepTableMap::COL_DATEUPDTD => 19, BookingSummaryRepTableMap::COL_TIMEUPDTD => 20, BookingSummaryRepTableMap::COL_DUMMY => 21, ],
        self::TYPE_FIELDNAME     => ['ArspSalePer1' => 0, 'IntbWhse' => 1, 'BkrpToday' => 2, 'BkrpWeekToDate' => 3, 'BkrpMonthToDate' => 4, 'Bkrp12moAmt1' => 5, 'Bkrp12moAmt2' => 6, 'Bkrp12moAmt3' => 7, 'Bkrp12moAmt4' => 8, 'Bkrp12moAmt5' => 9, 'Bkrp12moAmt6' => 10, 'Bkrp12moAmt7' => 11, 'Bkrp12moAmt8' => 12, 'Bkrp12moAmt9' => 13, 'Bkrp12moAmt10' => 14, 'Bkrp12moAmt11' => 15, 'Bkrp12moAmt12' => 16, 'BkrpLastDate' => 17, 'BkrpLastTime' => 18, 'DateUpdtd' => 19, 'TimeUpdtd' => 20, 'dummy' => 21, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Arspsaleper1' => 'ARSPSALEPER1',
        'BookingSummaryRep.Arspsaleper1' => 'ARSPSALEPER1',
        'arspsaleper1' => 'ARSPSALEPER1',
        'bookingSummaryRep.arspsaleper1' => 'ARSPSALEPER1',
        'BookingSummaryRepTableMap::COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'ArspSalePer1' => 'ARSPSALEPER1',
        'so_book_by_rep_sumry.ArspSalePer1' => 'ARSPSALEPER1',
        'Intbwhse' => 'INTBWHSE',
        'BookingSummaryRep.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'bookingSummaryRep.intbwhse' => 'INTBWHSE',
        'BookingSummaryRepTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'so_book_by_rep_sumry.IntbWhse' => 'INTBWHSE',
        'Bkrptoday' => 'BKRPTODAY',
        'BookingSummaryRep.Bkrptoday' => 'BKRPTODAY',
        'bkrptoday' => 'BKRPTODAY',
        'bookingSummaryRep.bkrptoday' => 'BKRPTODAY',
        'BookingSummaryRepTableMap::COL_BKRPTODAY' => 'BKRPTODAY',
        'COL_BKRPTODAY' => 'BKRPTODAY',
        'BkrpToday' => 'BKRPTODAY',
        'so_book_by_rep_sumry.BkrpToday' => 'BKRPTODAY',
        'Bkrpweektodate' => 'BKRPWEEKTODATE',
        'BookingSummaryRep.Bkrpweektodate' => 'BKRPWEEKTODATE',
        'bkrpweektodate' => 'BKRPWEEKTODATE',
        'bookingSummaryRep.bkrpweektodate' => 'BKRPWEEKTODATE',
        'BookingSummaryRepTableMap::COL_BKRPWEEKTODATE' => 'BKRPWEEKTODATE',
        'COL_BKRPWEEKTODATE' => 'BKRPWEEKTODATE',
        'BkrpWeekToDate' => 'BKRPWEEKTODATE',
        'so_book_by_rep_sumry.BkrpWeekToDate' => 'BKRPWEEKTODATE',
        'Bkrpmonthtodate' => 'BKRPMONTHTODATE',
        'BookingSummaryRep.Bkrpmonthtodate' => 'BKRPMONTHTODATE',
        'bkrpmonthtodate' => 'BKRPMONTHTODATE',
        'bookingSummaryRep.bkrpmonthtodate' => 'BKRPMONTHTODATE',
        'BookingSummaryRepTableMap::COL_BKRPMONTHTODATE' => 'BKRPMONTHTODATE',
        'COL_BKRPMONTHTODATE' => 'BKRPMONTHTODATE',
        'BkrpMonthToDate' => 'BKRPMONTHTODATE',
        'so_book_by_rep_sumry.BkrpMonthToDate' => 'BKRPMONTHTODATE',
        'Bkrp12moamt1' => 'BKRP12MOAMT1',
        'BookingSummaryRep.Bkrp12moamt1' => 'BKRP12MOAMT1',
        'bkrp12moamt1' => 'BKRP12MOAMT1',
        'bookingSummaryRep.bkrp12moamt1' => 'BKRP12MOAMT1',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT1' => 'BKRP12MOAMT1',
        'COL_BKRP12MOAMT1' => 'BKRP12MOAMT1',
        'Bkrp12moAmt1' => 'BKRP12MOAMT1',
        'so_book_by_rep_sumry.Bkrp12moAmt1' => 'BKRP12MOAMT1',
        'Bkrp12moamt2' => 'BKRP12MOAMT2',
        'BookingSummaryRep.Bkrp12moamt2' => 'BKRP12MOAMT2',
        'bkrp12moamt2' => 'BKRP12MOAMT2',
        'bookingSummaryRep.bkrp12moamt2' => 'BKRP12MOAMT2',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT2' => 'BKRP12MOAMT2',
        'COL_BKRP12MOAMT2' => 'BKRP12MOAMT2',
        'Bkrp12moAmt2' => 'BKRP12MOAMT2',
        'so_book_by_rep_sumry.Bkrp12moAmt2' => 'BKRP12MOAMT2',
        'Bkrp12moamt3' => 'BKRP12MOAMT3',
        'BookingSummaryRep.Bkrp12moamt3' => 'BKRP12MOAMT3',
        'bkrp12moamt3' => 'BKRP12MOAMT3',
        'bookingSummaryRep.bkrp12moamt3' => 'BKRP12MOAMT3',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT3' => 'BKRP12MOAMT3',
        'COL_BKRP12MOAMT3' => 'BKRP12MOAMT3',
        'Bkrp12moAmt3' => 'BKRP12MOAMT3',
        'so_book_by_rep_sumry.Bkrp12moAmt3' => 'BKRP12MOAMT3',
        'Bkrp12moamt4' => 'BKRP12MOAMT4',
        'BookingSummaryRep.Bkrp12moamt4' => 'BKRP12MOAMT4',
        'bkrp12moamt4' => 'BKRP12MOAMT4',
        'bookingSummaryRep.bkrp12moamt4' => 'BKRP12MOAMT4',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT4' => 'BKRP12MOAMT4',
        'COL_BKRP12MOAMT4' => 'BKRP12MOAMT4',
        'Bkrp12moAmt4' => 'BKRP12MOAMT4',
        'so_book_by_rep_sumry.Bkrp12moAmt4' => 'BKRP12MOAMT4',
        'Bkrp12moamt5' => 'BKRP12MOAMT5',
        'BookingSummaryRep.Bkrp12moamt5' => 'BKRP12MOAMT5',
        'bkrp12moamt5' => 'BKRP12MOAMT5',
        'bookingSummaryRep.bkrp12moamt5' => 'BKRP12MOAMT5',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT5' => 'BKRP12MOAMT5',
        'COL_BKRP12MOAMT5' => 'BKRP12MOAMT5',
        'Bkrp12moAmt5' => 'BKRP12MOAMT5',
        'so_book_by_rep_sumry.Bkrp12moAmt5' => 'BKRP12MOAMT5',
        'Bkrp12moamt6' => 'BKRP12MOAMT6',
        'BookingSummaryRep.Bkrp12moamt6' => 'BKRP12MOAMT6',
        'bkrp12moamt6' => 'BKRP12MOAMT6',
        'bookingSummaryRep.bkrp12moamt6' => 'BKRP12MOAMT6',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT6' => 'BKRP12MOAMT6',
        'COL_BKRP12MOAMT6' => 'BKRP12MOAMT6',
        'Bkrp12moAmt6' => 'BKRP12MOAMT6',
        'so_book_by_rep_sumry.Bkrp12moAmt6' => 'BKRP12MOAMT6',
        'Bkrp12moamt7' => 'BKRP12MOAMT7',
        'BookingSummaryRep.Bkrp12moamt7' => 'BKRP12MOAMT7',
        'bkrp12moamt7' => 'BKRP12MOAMT7',
        'bookingSummaryRep.bkrp12moamt7' => 'BKRP12MOAMT7',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT7' => 'BKRP12MOAMT7',
        'COL_BKRP12MOAMT7' => 'BKRP12MOAMT7',
        'Bkrp12moAmt7' => 'BKRP12MOAMT7',
        'so_book_by_rep_sumry.Bkrp12moAmt7' => 'BKRP12MOAMT7',
        'Bkrp12moamt8' => 'BKRP12MOAMT8',
        'BookingSummaryRep.Bkrp12moamt8' => 'BKRP12MOAMT8',
        'bkrp12moamt8' => 'BKRP12MOAMT8',
        'bookingSummaryRep.bkrp12moamt8' => 'BKRP12MOAMT8',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT8' => 'BKRP12MOAMT8',
        'COL_BKRP12MOAMT8' => 'BKRP12MOAMT8',
        'Bkrp12moAmt8' => 'BKRP12MOAMT8',
        'so_book_by_rep_sumry.Bkrp12moAmt8' => 'BKRP12MOAMT8',
        'Bkrp12moamt9' => 'BKRP12MOAMT9',
        'BookingSummaryRep.Bkrp12moamt9' => 'BKRP12MOAMT9',
        'bkrp12moamt9' => 'BKRP12MOAMT9',
        'bookingSummaryRep.bkrp12moamt9' => 'BKRP12MOAMT9',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT9' => 'BKRP12MOAMT9',
        'COL_BKRP12MOAMT9' => 'BKRP12MOAMT9',
        'Bkrp12moAmt9' => 'BKRP12MOAMT9',
        'so_book_by_rep_sumry.Bkrp12moAmt9' => 'BKRP12MOAMT9',
        'Bkrp12moamt10' => 'BKRP12MOAMT10',
        'BookingSummaryRep.Bkrp12moamt10' => 'BKRP12MOAMT10',
        'bkrp12moamt10' => 'BKRP12MOAMT10',
        'bookingSummaryRep.bkrp12moamt10' => 'BKRP12MOAMT10',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT10' => 'BKRP12MOAMT10',
        'COL_BKRP12MOAMT10' => 'BKRP12MOAMT10',
        'Bkrp12moAmt10' => 'BKRP12MOAMT10',
        'so_book_by_rep_sumry.Bkrp12moAmt10' => 'BKRP12MOAMT10',
        'Bkrp12moamt11' => 'BKRP12MOAMT11',
        'BookingSummaryRep.Bkrp12moamt11' => 'BKRP12MOAMT11',
        'bkrp12moamt11' => 'BKRP12MOAMT11',
        'bookingSummaryRep.bkrp12moamt11' => 'BKRP12MOAMT11',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT11' => 'BKRP12MOAMT11',
        'COL_BKRP12MOAMT11' => 'BKRP12MOAMT11',
        'Bkrp12moAmt11' => 'BKRP12MOAMT11',
        'so_book_by_rep_sumry.Bkrp12moAmt11' => 'BKRP12MOAMT11',
        'Bkrp12moamt12' => 'BKRP12MOAMT12',
        'BookingSummaryRep.Bkrp12moamt12' => 'BKRP12MOAMT12',
        'bkrp12moamt12' => 'BKRP12MOAMT12',
        'bookingSummaryRep.bkrp12moamt12' => 'BKRP12MOAMT12',
        'BookingSummaryRepTableMap::COL_BKRP12MOAMT12' => 'BKRP12MOAMT12',
        'COL_BKRP12MOAMT12' => 'BKRP12MOAMT12',
        'Bkrp12moAmt12' => 'BKRP12MOAMT12',
        'so_book_by_rep_sumry.Bkrp12moAmt12' => 'BKRP12MOAMT12',
        'Bkrplastdate' => 'BKRPLASTDATE',
        'BookingSummaryRep.Bkrplastdate' => 'BKRPLASTDATE',
        'bkrplastdate' => 'BKRPLASTDATE',
        'bookingSummaryRep.bkrplastdate' => 'BKRPLASTDATE',
        'BookingSummaryRepTableMap::COL_BKRPLASTDATE' => 'BKRPLASTDATE',
        'COL_BKRPLASTDATE' => 'BKRPLASTDATE',
        'BkrpLastDate' => 'BKRPLASTDATE',
        'so_book_by_rep_sumry.BkrpLastDate' => 'BKRPLASTDATE',
        'Bkrplasttime' => 'BKRPLASTTIME',
        'BookingSummaryRep.Bkrplasttime' => 'BKRPLASTTIME',
        'bkrplasttime' => 'BKRPLASTTIME',
        'bookingSummaryRep.bkrplasttime' => 'BKRPLASTTIME',
        'BookingSummaryRepTableMap::COL_BKRPLASTTIME' => 'BKRPLASTTIME',
        'COL_BKRPLASTTIME' => 'BKRPLASTTIME',
        'BkrpLastTime' => 'BKRPLASTTIME',
        'so_book_by_rep_sumry.BkrpLastTime' => 'BKRPLASTTIME',
        'Dateupdtd' => 'DATEUPDTD',
        'BookingSummaryRep.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'bookingSummaryRep.dateupdtd' => 'DATEUPDTD',
        'BookingSummaryRepTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_book_by_rep_sumry.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'BookingSummaryRep.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'bookingSummaryRep.timeupdtd' => 'TIMEUPDTD',
        'BookingSummaryRepTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_book_by_rep_sumry.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'BookingSummaryRep.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'bookingSummaryRep.dummy' => 'DUMMY',
        'BookingSummaryRepTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_book_by_rep_sumry.dummy' => 'DUMMY',
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
        $this->setName('so_book_by_rep_sumry');
        $this->setPhpName('BookingSummaryRep');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\BookingSummaryRep');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArspSalePer1', 'Arspsaleper1', 'VARCHAR' , 'ar_saleper1', 'ArspSalePer1', true, 6, '');
        $this->addPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('BkrpToday', 'Bkrptoday', 'DECIMAL', false, 20, null);
        $this->addColumn('BkrpWeekToDate', 'Bkrpweektodate', 'DECIMAL', false, 20, null);
        $this->addColumn('BkrpMonthToDate', 'Bkrpmonthtodate', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt1', 'Bkrp12moamt1', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt2', 'Bkrp12moamt2', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt3', 'Bkrp12moamt3', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt4', 'Bkrp12moamt4', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt5', 'Bkrp12moamt5', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt6', 'Bkrp12moamt6', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt7', 'Bkrp12moamt7', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt8', 'Bkrp12moamt8', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt9', 'Bkrp12moamt9', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt10', 'Bkrp12moamt10', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt11', 'Bkrp12moamt11', 'DECIMAL', false, 20, null);
        $this->addColumn('Bkrp12moAmt12', 'Bkrp12moamt12', 'DECIMAL', false, 20, null);
        $this->addColumn('BkrpLastDate', 'Bkrplastdate', 'VARCHAR', false, 8, null);
        $this->addColumn('BkrpLastTime', 'Bkrplasttime', 'VARCHAR', false, 8, null);
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
        $this->addRelation('SalesPerson', '\\SalesPerson', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
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
     * @param \BookingSummaryRep $obj A \BookingSummaryRep object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(BookingSummaryRep $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArspsaleper1() || is_scalar($obj->getArspsaleper1()) || is_callable([$obj->getArspsaleper1(), '__toString']) ? (string) $obj->getArspsaleper1() : $obj->getArspsaleper1()), (null === $obj->getIntbwhse() || is_scalar($obj->getIntbwhse()) || is_callable([$obj->getIntbwhse(), '__toString']) ? (string) $obj->getIntbwhse() : $obj->getIntbwhse())]);
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
     * @param mixed $value A \BookingSummaryRep object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \BookingSummaryRep) {
                $key = serialize([(null === $value->getArspsaleper1() || is_scalar($value->getArspsaleper1()) || is_callable([$value->getArspsaleper1(), '__toString']) ? (string) $value->getArspsaleper1() : $value->getArspsaleper1()), (null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \BookingSummaryRep object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BookingSummaryRepTableMap::CLASS_DEFAULT : BookingSummaryRepTableMap::OM_CLASS;
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
     * @return array (BookingSummaryRep object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = BookingSummaryRepTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BookingSummaryRepTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BookingSummaryRepTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BookingSummaryRepTableMap::OM_CLASS;
            /** @var BookingSummaryRep $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BookingSummaryRepTableMap::addInstanceToPool($obj, $key);
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
            $key = BookingSummaryRepTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BookingSummaryRepTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BookingSummaryRep $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BookingSummaryRepTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRPTODAY);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT1);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT2);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT3);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT4);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT5);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT6);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT7);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT8);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT9);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT10);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT11);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT12);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRPLASTDATE);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_BKRPLASTTIME);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(BookingSummaryRepTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.BkrpToday');
            $criteria->addSelectColumn($alias . '.BkrpWeekToDate');
            $criteria->addSelectColumn($alias . '.BkrpMonthToDate');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt1');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt2');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt3');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt4');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt5');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt6');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt7');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt8');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt9');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt10');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt11');
            $criteria->addSelectColumn($alias . '.Bkrp12moAmt12');
            $criteria->addSelectColumn($alias . '.BkrpLastDate');
            $criteria->addSelectColumn($alias . '.BkrpLastTime');
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
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_ARSPSALEPER1);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRPTODAY);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT1);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT2);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT3);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT4);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT5);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT6);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT7);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT8);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT9);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT10);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT11);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRP12MOAMT12);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRPLASTDATE);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_BKRPLASTTIME);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(BookingSummaryRepTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArspSalePer1');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.BkrpToday');
            $criteria->removeSelectColumn($alias . '.BkrpWeekToDate');
            $criteria->removeSelectColumn($alias . '.BkrpMonthToDate');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt1');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt2');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt3');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt4');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt5');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt6');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt7');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt8');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt9');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt10');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt11');
            $criteria->removeSelectColumn($alias . '.Bkrp12moAmt12');
            $criteria->removeSelectColumn($alias . '.BkrpLastDate');
            $criteria->removeSelectColumn($alias . '.BkrpLastTime');
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
        return Propel::getServiceContainer()->getDatabaseMap(BookingSummaryRepTableMap::DATABASE_NAME)->getTable(BookingSummaryRepTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a BookingSummaryRep or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or BookingSummaryRep object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \BookingSummaryRep) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BookingSummaryRepTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BookingSummaryRepTableMap::COL_INTBWHSE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = BookingSummaryRepQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BookingSummaryRepTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BookingSummaryRepTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_book_by_rep_sumry table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return BookingSummaryRepQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BookingSummaryRep or Criteria object.
     *
     * @param mixed $criteria Criteria or BookingSummaryRep object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BookingSummaryRep object
        }


        // Set the correct dbName
        $query = BookingSummaryRepQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
