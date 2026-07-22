<?php

namespace Map;

use \GlDates;
use \GlDatesQuery;
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
 * This class defines the structure of the 'gl_dates' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class GlDatesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.GlDatesTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'gl_dates';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'GlDates';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\GlDates';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'GlDates';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 42;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 42;

    /**
     * the column name for the GldKey field
     */
    public const COL_GLDKEY = 'gl_dates.GldKey';

    /**
     * the column name for the GldFrom1 field
     */
    public const COL_GLDFROM1 = 'gl_dates.GldFrom1';

    /**
     * the column name for the GldThru1 field
     */
    public const COL_GLDTHRU1 = 'gl_dates.GldThru1';

    /**
     * the column name for the GldFrom2 field
     */
    public const COL_GLDFROM2 = 'gl_dates.GldFrom2';

    /**
     * the column name for the GldThru2 field
     */
    public const COL_GLDTHRU2 = 'gl_dates.GldThru2';

    /**
     * the column name for the GldFrom3 field
     */
    public const COL_GLDFROM3 = 'gl_dates.GldFrom3';

    /**
     * the column name for the GldThru3 field
     */
    public const COL_GLDTHRU3 = 'gl_dates.GldThru3';

    /**
     * the column name for the GldFrom4 field
     */
    public const COL_GLDFROM4 = 'gl_dates.GldFrom4';

    /**
     * the column name for the GldThru4 field
     */
    public const COL_GLDTHRU4 = 'gl_dates.GldThru4';

    /**
     * the column name for the GldFrom5 field
     */
    public const COL_GLDFROM5 = 'gl_dates.GldFrom5';

    /**
     * the column name for the GldThru5 field
     */
    public const COL_GLDTHRU5 = 'gl_dates.GldThru5';

    /**
     * the column name for the GldFrom6 field
     */
    public const COL_GLDFROM6 = 'gl_dates.GldFrom6';

    /**
     * the column name for the GldThru6 field
     */
    public const COL_GLDTHRU6 = 'gl_dates.GldThru6';

    /**
     * the column name for the GldFrom7 field
     */
    public const COL_GLDFROM7 = 'gl_dates.GldFrom7';

    /**
     * the column name for the GldThru7 field
     */
    public const COL_GLDTHRU7 = 'gl_dates.GldThru7';

    /**
     * the column name for the GldFrom8 field
     */
    public const COL_GLDFROM8 = 'gl_dates.GldFrom8';

    /**
     * the column name for the GldThru8 field
     */
    public const COL_GLDTHRU8 = 'gl_dates.GldThru8';

    /**
     * the column name for the GldFrom9 field
     */
    public const COL_GLDFROM9 = 'gl_dates.GldFrom9';

    /**
     * the column name for the GldThru9 field
     */
    public const COL_GLDTHRU9 = 'gl_dates.GldThru9';

    /**
     * the column name for the GldFrom10 field
     */
    public const COL_GLDFROM10 = 'gl_dates.GldFrom10';

    /**
     * the column name for the GldThru10 field
     */
    public const COL_GLDTHRU10 = 'gl_dates.GldThru10';

    /**
     * the column name for the GldFrom11 field
     */
    public const COL_GLDFROM11 = 'gl_dates.GldFrom11';

    /**
     * the column name for the GldThru11 field
     */
    public const COL_GLDTHRU11 = 'gl_dates.GldThru11';

    /**
     * the column name for the GldFrom12 field
     */
    public const COL_GLDFROM12 = 'gl_dates.GldFrom12';

    /**
     * the column name for the GldThru12 field
     */
    public const COL_GLDTHRU12 = 'gl_dates.GldThru12';

    /**
     * the column name for the GldFrom13 field
     */
    public const COL_GLDFROM13 = 'gl_dates.GldFrom13';

    /**
     * the column name for the GldThru13 field
     */
    public const COL_GLDTHRU13 = 'gl_dates.GldThru13';

    /**
     * the column name for the GldFrom14 field
     */
    public const COL_GLDFROM14 = 'gl_dates.GldFrom14';

    /**
     * the column name for the GldThru14 field
     */
    public const COL_GLDTHRU14 = 'gl_dates.GldThru14';

    /**
     * the column name for the GldFrom15 field
     */
    public const COL_GLDFROM15 = 'gl_dates.GldFrom15';

    /**
     * the column name for the GldThru15 field
     */
    public const COL_GLDTHRU15 = 'gl_dates.GldThru15';

    /**
     * the column name for the GldFrom16 field
     */
    public const COL_GLDFROM16 = 'gl_dates.GldFrom16';

    /**
     * the column name for the GldThru16 field
     */
    public const COL_GLDTHRU16 = 'gl_dates.GldThru16';

    /**
     * the column name for the GldFrom17 field
     */
    public const COL_GLDFROM17 = 'gl_dates.GldFrom17';

    /**
     * the column name for the GldThru17 field
     */
    public const COL_GLDTHRU17 = 'gl_dates.GldThru17';

    /**
     * the column name for the GldFrom18 field
     */
    public const COL_GLDFROM18 = 'gl_dates.GldFrom18';

    /**
     * the column name for the GldThru18 field
     */
    public const COL_GLDTHRU18 = 'gl_dates.GldThru18';

    /**
     * the column name for the GldFrom19 field
     */
    public const COL_GLDFROM19 = 'gl_dates.GldFrom19';

    /**
     * the column name for the GldThru19 field
     */
    public const COL_GLDTHRU19 = 'gl_dates.GldThru19';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'gl_dates.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'gl_dates.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'gl_dates.dummy';

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
        self::TYPE_PHPNAME       => ['Gldkey', 'Gldfrom1', 'Gldthru1', 'Gldfrom2', 'Gldthru2', 'Gldfrom3', 'Gldthru3', 'Gldfrom4', 'Gldthru4', 'Gldfrom5', 'Gldthru5', 'Gldfrom6', 'Gldthru6', 'Gldfrom7', 'Gldthru7', 'Gldfrom8', 'Gldthru8', 'Gldfrom9', 'Gldthru9', 'Gldfrom10', 'Gldthru10', 'Gldfrom11', 'Gldthru11', 'Gldfrom12', 'Gldthru12', 'Gldfrom13', 'Gldthru13', 'Gldfrom14', 'Gldthru14', 'Gldfrom15', 'Gldthru15', 'Gldfrom16', 'Gldthru16', 'Gldfrom17', 'Gldthru17', 'Gldfrom18', 'Gldthru18', 'Gldfrom19', 'Gldthru19', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['gldkey', 'gldfrom1', 'gldthru1', 'gldfrom2', 'gldthru2', 'gldfrom3', 'gldthru3', 'gldfrom4', 'gldthru4', 'gldfrom5', 'gldthru5', 'gldfrom6', 'gldthru6', 'gldfrom7', 'gldthru7', 'gldfrom8', 'gldthru8', 'gldfrom9', 'gldthru9', 'gldfrom10', 'gldthru10', 'gldfrom11', 'gldthru11', 'gldfrom12', 'gldthru12', 'gldfrom13', 'gldthru13', 'gldfrom14', 'gldthru14', 'gldfrom15', 'gldthru15', 'gldfrom16', 'gldthru16', 'gldfrom17', 'gldthru17', 'gldfrom18', 'gldthru18', 'gldfrom19', 'gldthru19', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [GlDatesTableMap::COL_GLDKEY, GlDatesTableMap::COL_GLDFROM1, GlDatesTableMap::COL_GLDTHRU1, GlDatesTableMap::COL_GLDFROM2, GlDatesTableMap::COL_GLDTHRU2, GlDatesTableMap::COL_GLDFROM3, GlDatesTableMap::COL_GLDTHRU3, GlDatesTableMap::COL_GLDFROM4, GlDatesTableMap::COL_GLDTHRU4, GlDatesTableMap::COL_GLDFROM5, GlDatesTableMap::COL_GLDTHRU5, GlDatesTableMap::COL_GLDFROM6, GlDatesTableMap::COL_GLDTHRU6, GlDatesTableMap::COL_GLDFROM7, GlDatesTableMap::COL_GLDTHRU7, GlDatesTableMap::COL_GLDFROM8, GlDatesTableMap::COL_GLDTHRU8, GlDatesTableMap::COL_GLDFROM9, GlDatesTableMap::COL_GLDTHRU9, GlDatesTableMap::COL_GLDFROM10, GlDatesTableMap::COL_GLDTHRU10, GlDatesTableMap::COL_GLDFROM11, GlDatesTableMap::COL_GLDTHRU11, GlDatesTableMap::COL_GLDFROM12, GlDatesTableMap::COL_GLDTHRU12, GlDatesTableMap::COL_GLDFROM13, GlDatesTableMap::COL_GLDTHRU13, GlDatesTableMap::COL_GLDFROM14, GlDatesTableMap::COL_GLDTHRU14, GlDatesTableMap::COL_GLDFROM15, GlDatesTableMap::COL_GLDTHRU15, GlDatesTableMap::COL_GLDFROM16, GlDatesTableMap::COL_GLDTHRU16, GlDatesTableMap::COL_GLDFROM17, GlDatesTableMap::COL_GLDTHRU17, GlDatesTableMap::COL_GLDFROM18, GlDatesTableMap::COL_GLDTHRU18, GlDatesTableMap::COL_GLDFROM19, GlDatesTableMap::COL_GLDTHRU19, GlDatesTableMap::COL_DATEUPDTD, GlDatesTableMap::COL_TIMEUPDTD, GlDatesTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['GldKey', 'GldFrom1', 'GldThru1', 'GldFrom2', 'GldThru2', 'GldFrom3', 'GldThru3', 'GldFrom4', 'GldThru4', 'GldFrom5', 'GldThru5', 'GldFrom6', 'GldThru6', 'GldFrom7', 'GldThru7', 'GldFrom8', 'GldThru8', 'GldFrom9', 'GldThru9', 'GldFrom10', 'GldThru10', 'GldFrom11', 'GldThru11', 'GldFrom12', 'GldThru12', 'GldFrom13', 'GldThru13', 'GldFrom14', 'GldThru14', 'GldFrom15', 'GldThru15', 'GldFrom16', 'GldThru16', 'GldFrom17', 'GldThru17', 'GldFrom18', 'GldThru18', 'GldFrom19', 'GldThru19', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, ]
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
        self::TYPE_PHPNAME       => ['Gldkey' => 0, 'Gldfrom1' => 1, 'Gldthru1' => 2, 'Gldfrom2' => 3, 'Gldthru2' => 4, 'Gldfrom3' => 5, 'Gldthru3' => 6, 'Gldfrom4' => 7, 'Gldthru4' => 8, 'Gldfrom5' => 9, 'Gldthru5' => 10, 'Gldfrom6' => 11, 'Gldthru6' => 12, 'Gldfrom7' => 13, 'Gldthru7' => 14, 'Gldfrom8' => 15, 'Gldthru8' => 16, 'Gldfrom9' => 17, 'Gldthru9' => 18, 'Gldfrom10' => 19, 'Gldthru10' => 20, 'Gldfrom11' => 21, 'Gldthru11' => 22, 'Gldfrom12' => 23, 'Gldthru12' => 24, 'Gldfrom13' => 25, 'Gldthru13' => 26, 'Gldfrom14' => 27, 'Gldthru14' => 28, 'Gldfrom15' => 29, 'Gldthru15' => 30, 'Gldfrom16' => 31, 'Gldthru16' => 32, 'Gldfrom17' => 33, 'Gldthru17' => 34, 'Gldfrom18' => 35, 'Gldthru18' => 36, 'Gldfrom19' => 37, 'Gldthru19' => 38, 'Dateupdtd' => 39, 'Timeupdtd' => 40, 'Dummy' => 41, ],
        self::TYPE_CAMELNAME     => ['gldkey' => 0, 'gldfrom1' => 1, 'gldthru1' => 2, 'gldfrom2' => 3, 'gldthru2' => 4, 'gldfrom3' => 5, 'gldthru3' => 6, 'gldfrom4' => 7, 'gldthru4' => 8, 'gldfrom5' => 9, 'gldthru5' => 10, 'gldfrom6' => 11, 'gldthru6' => 12, 'gldfrom7' => 13, 'gldthru7' => 14, 'gldfrom8' => 15, 'gldthru8' => 16, 'gldfrom9' => 17, 'gldthru9' => 18, 'gldfrom10' => 19, 'gldthru10' => 20, 'gldfrom11' => 21, 'gldthru11' => 22, 'gldfrom12' => 23, 'gldthru12' => 24, 'gldfrom13' => 25, 'gldthru13' => 26, 'gldfrom14' => 27, 'gldthru14' => 28, 'gldfrom15' => 29, 'gldthru15' => 30, 'gldfrom16' => 31, 'gldthru16' => 32, 'gldfrom17' => 33, 'gldthru17' => 34, 'gldfrom18' => 35, 'gldthru18' => 36, 'gldfrom19' => 37, 'gldthru19' => 38, 'dateupdtd' => 39, 'timeupdtd' => 40, 'dummy' => 41, ],
        self::TYPE_COLNAME       => [GlDatesTableMap::COL_GLDKEY => 0, GlDatesTableMap::COL_GLDFROM1 => 1, GlDatesTableMap::COL_GLDTHRU1 => 2, GlDatesTableMap::COL_GLDFROM2 => 3, GlDatesTableMap::COL_GLDTHRU2 => 4, GlDatesTableMap::COL_GLDFROM3 => 5, GlDatesTableMap::COL_GLDTHRU3 => 6, GlDatesTableMap::COL_GLDFROM4 => 7, GlDatesTableMap::COL_GLDTHRU4 => 8, GlDatesTableMap::COL_GLDFROM5 => 9, GlDatesTableMap::COL_GLDTHRU5 => 10, GlDatesTableMap::COL_GLDFROM6 => 11, GlDatesTableMap::COL_GLDTHRU6 => 12, GlDatesTableMap::COL_GLDFROM7 => 13, GlDatesTableMap::COL_GLDTHRU7 => 14, GlDatesTableMap::COL_GLDFROM8 => 15, GlDatesTableMap::COL_GLDTHRU8 => 16, GlDatesTableMap::COL_GLDFROM9 => 17, GlDatesTableMap::COL_GLDTHRU9 => 18, GlDatesTableMap::COL_GLDFROM10 => 19, GlDatesTableMap::COL_GLDTHRU10 => 20, GlDatesTableMap::COL_GLDFROM11 => 21, GlDatesTableMap::COL_GLDTHRU11 => 22, GlDatesTableMap::COL_GLDFROM12 => 23, GlDatesTableMap::COL_GLDTHRU12 => 24, GlDatesTableMap::COL_GLDFROM13 => 25, GlDatesTableMap::COL_GLDTHRU13 => 26, GlDatesTableMap::COL_GLDFROM14 => 27, GlDatesTableMap::COL_GLDTHRU14 => 28, GlDatesTableMap::COL_GLDFROM15 => 29, GlDatesTableMap::COL_GLDTHRU15 => 30, GlDatesTableMap::COL_GLDFROM16 => 31, GlDatesTableMap::COL_GLDTHRU16 => 32, GlDatesTableMap::COL_GLDFROM17 => 33, GlDatesTableMap::COL_GLDTHRU17 => 34, GlDatesTableMap::COL_GLDFROM18 => 35, GlDatesTableMap::COL_GLDTHRU18 => 36, GlDatesTableMap::COL_GLDFROM19 => 37, GlDatesTableMap::COL_GLDTHRU19 => 38, GlDatesTableMap::COL_DATEUPDTD => 39, GlDatesTableMap::COL_TIMEUPDTD => 40, GlDatesTableMap::COL_DUMMY => 41, ],
        self::TYPE_FIELDNAME     => ['GldKey' => 0, 'GldFrom1' => 1, 'GldThru1' => 2, 'GldFrom2' => 3, 'GldThru2' => 4, 'GldFrom3' => 5, 'GldThru3' => 6, 'GldFrom4' => 7, 'GldThru4' => 8, 'GldFrom5' => 9, 'GldThru5' => 10, 'GldFrom6' => 11, 'GldThru6' => 12, 'GldFrom7' => 13, 'GldThru7' => 14, 'GldFrom8' => 15, 'GldThru8' => 16, 'GldFrom9' => 17, 'GldThru9' => 18, 'GldFrom10' => 19, 'GldThru10' => 20, 'GldFrom11' => 21, 'GldThru11' => 22, 'GldFrom12' => 23, 'GldThru12' => 24, 'GldFrom13' => 25, 'GldThru13' => 26, 'GldFrom14' => 27, 'GldThru14' => 28, 'GldFrom15' => 29, 'GldThru15' => 30, 'GldFrom16' => 31, 'GldThru16' => 32, 'GldFrom17' => 33, 'GldThru17' => 34, 'GldFrom18' => 35, 'GldThru18' => 36, 'GldFrom19' => 37, 'GldThru19' => 38, 'DateUpdtd' => 39, 'TimeUpdtd' => 40, 'dummy' => 41, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Gldkey' => 'GLDKEY',
        'GlDates.Gldkey' => 'GLDKEY',
        'gldkey' => 'GLDKEY',
        'glDates.gldkey' => 'GLDKEY',
        'GlDatesTableMap::COL_GLDKEY' => 'GLDKEY',
        'COL_GLDKEY' => 'GLDKEY',
        'GldKey' => 'GLDKEY',
        'gl_dates.GldKey' => 'GLDKEY',
        'Gldfrom1' => 'GLDFROM1',
        'GlDates.Gldfrom1' => 'GLDFROM1',
        'gldfrom1' => 'GLDFROM1',
        'glDates.gldfrom1' => 'GLDFROM1',
        'GlDatesTableMap::COL_GLDFROM1' => 'GLDFROM1',
        'COL_GLDFROM1' => 'GLDFROM1',
        'GldFrom1' => 'GLDFROM1',
        'gl_dates.GldFrom1' => 'GLDFROM1',
        'Gldthru1' => 'GLDTHRU1',
        'GlDates.Gldthru1' => 'GLDTHRU1',
        'gldthru1' => 'GLDTHRU1',
        'glDates.gldthru1' => 'GLDTHRU1',
        'GlDatesTableMap::COL_GLDTHRU1' => 'GLDTHRU1',
        'COL_GLDTHRU1' => 'GLDTHRU1',
        'GldThru1' => 'GLDTHRU1',
        'gl_dates.GldThru1' => 'GLDTHRU1',
        'Gldfrom2' => 'GLDFROM2',
        'GlDates.Gldfrom2' => 'GLDFROM2',
        'gldfrom2' => 'GLDFROM2',
        'glDates.gldfrom2' => 'GLDFROM2',
        'GlDatesTableMap::COL_GLDFROM2' => 'GLDFROM2',
        'COL_GLDFROM2' => 'GLDFROM2',
        'GldFrom2' => 'GLDFROM2',
        'gl_dates.GldFrom2' => 'GLDFROM2',
        'Gldthru2' => 'GLDTHRU2',
        'GlDates.Gldthru2' => 'GLDTHRU2',
        'gldthru2' => 'GLDTHRU2',
        'glDates.gldthru2' => 'GLDTHRU2',
        'GlDatesTableMap::COL_GLDTHRU2' => 'GLDTHRU2',
        'COL_GLDTHRU2' => 'GLDTHRU2',
        'GldThru2' => 'GLDTHRU2',
        'gl_dates.GldThru2' => 'GLDTHRU2',
        'Gldfrom3' => 'GLDFROM3',
        'GlDates.Gldfrom3' => 'GLDFROM3',
        'gldfrom3' => 'GLDFROM3',
        'glDates.gldfrom3' => 'GLDFROM3',
        'GlDatesTableMap::COL_GLDFROM3' => 'GLDFROM3',
        'COL_GLDFROM3' => 'GLDFROM3',
        'GldFrom3' => 'GLDFROM3',
        'gl_dates.GldFrom3' => 'GLDFROM3',
        'Gldthru3' => 'GLDTHRU3',
        'GlDates.Gldthru3' => 'GLDTHRU3',
        'gldthru3' => 'GLDTHRU3',
        'glDates.gldthru3' => 'GLDTHRU3',
        'GlDatesTableMap::COL_GLDTHRU3' => 'GLDTHRU3',
        'COL_GLDTHRU3' => 'GLDTHRU3',
        'GldThru3' => 'GLDTHRU3',
        'gl_dates.GldThru3' => 'GLDTHRU3',
        'Gldfrom4' => 'GLDFROM4',
        'GlDates.Gldfrom4' => 'GLDFROM4',
        'gldfrom4' => 'GLDFROM4',
        'glDates.gldfrom4' => 'GLDFROM4',
        'GlDatesTableMap::COL_GLDFROM4' => 'GLDFROM4',
        'COL_GLDFROM4' => 'GLDFROM4',
        'GldFrom4' => 'GLDFROM4',
        'gl_dates.GldFrom4' => 'GLDFROM4',
        'Gldthru4' => 'GLDTHRU4',
        'GlDates.Gldthru4' => 'GLDTHRU4',
        'gldthru4' => 'GLDTHRU4',
        'glDates.gldthru4' => 'GLDTHRU4',
        'GlDatesTableMap::COL_GLDTHRU4' => 'GLDTHRU4',
        'COL_GLDTHRU4' => 'GLDTHRU4',
        'GldThru4' => 'GLDTHRU4',
        'gl_dates.GldThru4' => 'GLDTHRU4',
        'Gldfrom5' => 'GLDFROM5',
        'GlDates.Gldfrom5' => 'GLDFROM5',
        'gldfrom5' => 'GLDFROM5',
        'glDates.gldfrom5' => 'GLDFROM5',
        'GlDatesTableMap::COL_GLDFROM5' => 'GLDFROM5',
        'COL_GLDFROM5' => 'GLDFROM5',
        'GldFrom5' => 'GLDFROM5',
        'gl_dates.GldFrom5' => 'GLDFROM5',
        'Gldthru5' => 'GLDTHRU5',
        'GlDates.Gldthru5' => 'GLDTHRU5',
        'gldthru5' => 'GLDTHRU5',
        'glDates.gldthru5' => 'GLDTHRU5',
        'GlDatesTableMap::COL_GLDTHRU5' => 'GLDTHRU5',
        'COL_GLDTHRU5' => 'GLDTHRU5',
        'GldThru5' => 'GLDTHRU5',
        'gl_dates.GldThru5' => 'GLDTHRU5',
        'Gldfrom6' => 'GLDFROM6',
        'GlDates.Gldfrom6' => 'GLDFROM6',
        'gldfrom6' => 'GLDFROM6',
        'glDates.gldfrom6' => 'GLDFROM6',
        'GlDatesTableMap::COL_GLDFROM6' => 'GLDFROM6',
        'COL_GLDFROM6' => 'GLDFROM6',
        'GldFrom6' => 'GLDFROM6',
        'gl_dates.GldFrom6' => 'GLDFROM6',
        'Gldthru6' => 'GLDTHRU6',
        'GlDates.Gldthru6' => 'GLDTHRU6',
        'gldthru6' => 'GLDTHRU6',
        'glDates.gldthru6' => 'GLDTHRU6',
        'GlDatesTableMap::COL_GLDTHRU6' => 'GLDTHRU6',
        'COL_GLDTHRU6' => 'GLDTHRU6',
        'GldThru6' => 'GLDTHRU6',
        'gl_dates.GldThru6' => 'GLDTHRU6',
        'Gldfrom7' => 'GLDFROM7',
        'GlDates.Gldfrom7' => 'GLDFROM7',
        'gldfrom7' => 'GLDFROM7',
        'glDates.gldfrom7' => 'GLDFROM7',
        'GlDatesTableMap::COL_GLDFROM7' => 'GLDFROM7',
        'COL_GLDFROM7' => 'GLDFROM7',
        'GldFrom7' => 'GLDFROM7',
        'gl_dates.GldFrom7' => 'GLDFROM7',
        'Gldthru7' => 'GLDTHRU7',
        'GlDates.Gldthru7' => 'GLDTHRU7',
        'gldthru7' => 'GLDTHRU7',
        'glDates.gldthru7' => 'GLDTHRU7',
        'GlDatesTableMap::COL_GLDTHRU7' => 'GLDTHRU7',
        'COL_GLDTHRU7' => 'GLDTHRU7',
        'GldThru7' => 'GLDTHRU7',
        'gl_dates.GldThru7' => 'GLDTHRU7',
        'Gldfrom8' => 'GLDFROM8',
        'GlDates.Gldfrom8' => 'GLDFROM8',
        'gldfrom8' => 'GLDFROM8',
        'glDates.gldfrom8' => 'GLDFROM8',
        'GlDatesTableMap::COL_GLDFROM8' => 'GLDFROM8',
        'COL_GLDFROM8' => 'GLDFROM8',
        'GldFrom8' => 'GLDFROM8',
        'gl_dates.GldFrom8' => 'GLDFROM8',
        'Gldthru8' => 'GLDTHRU8',
        'GlDates.Gldthru8' => 'GLDTHRU8',
        'gldthru8' => 'GLDTHRU8',
        'glDates.gldthru8' => 'GLDTHRU8',
        'GlDatesTableMap::COL_GLDTHRU8' => 'GLDTHRU8',
        'COL_GLDTHRU8' => 'GLDTHRU8',
        'GldThru8' => 'GLDTHRU8',
        'gl_dates.GldThru8' => 'GLDTHRU8',
        'Gldfrom9' => 'GLDFROM9',
        'GlDates.Gldfrom9' => 'GLDFROM9',
        'gldfrom9' => 'GLDFROM9',
        'glDates.gldfrom9' => 'GLDFROM9',
        'GlDatesTableMap::COL_GLDFROM9' => 'GLDFROM9',
        'COL_GLDFROM9' => 'GLDFROM9',
        'GldFrom9' => 'GLDFROM9',
        'gl_dates.GldFrom9' => 'GLDFROM9',
        'Gldthru9' => 'GLDTHRU9',
        'GlDates.Gldthru9' => 'GLDTHRU9',
        'gldthru9' => 'GLDTHRU9',
        'glDates.gldthru9' => 'GLDTHRU9',
        'GlDatesTableMap::COL_GLDTHRU9' => 'GLDTHRU9',
        'COL_GLDTHRU9' => 'GLDTHRU9',
        'GldThru9' => 'GLDTHRU9',
        'gl_dates.GldThru9' => 'GLDTHRU9',
        'Gldfrom10' => 'GLDFROM10',
        'GlDates.Gldfrom10' => 'GLDFROM10',
        'gldfrom10' => 'GLDFROM10',
        'glDates.gldfrom10' => 'GLDFROM10',
        'GlDatesTableMap::COL_GLDFROM10' => 'GLDFROM10',
        'COL_GLDFROM10' => 'GLDFROM10',
        'GldFrom10' => 'GLDFROM10',
        'gl_dates.GldFrom10' => 'GLDFROM10',
        'Gldthru10' => 'GLDTHRU10',
        'GlDates.Gldthru10' => 'GLDTHRU10',
        'gldthru10' => 'GLDTHRU10',
        'glDates.gldthru10' => 'GLDTHRU10',
        'GlDatesTableMap::COL_GLDTHRU10' => 'GLDTHRU10',
        'COL_GLDTHRU10' => 'GLDTHRU10',
        'GldThru10' => 'GLDTHRU10',
        'gl_dates.GldThru10' => 'GLDTHRU10',
        'Gldfrom11' => 'GLDFROM11',
        'GlDates.Gldfrom11' => 'GLDFROM11',
        'gldfrom11' => 'GLDFROM11',
        'glDates.gldfrom11' => 'GLDFROM11',
        'GlDatesTableMap::COL_GLDFROM11' => 'GLDFROM11',
        'COL_GLDFROM11' => 'GLDFROM11',
        'GldFrom11' => 'GLDFROM11',
        'gl_dates.GldFrom11' => 'GLDFROM11',
        'Gldthru11' => 'GLDTHRU11',
        'GlDates.Gldthru11' => 'GLDTHRU11',
        'gldthru11' => 'GLDTHRU11',
        'glDates.gldthru11' => 'GLDTHRU11',
        'GlDatesTableMap::COL_GLDTHRU11' => 'GLDTHRU11',
        'COL_GLDTHRU11' => 'GLDTHRU11',
        'GldThru11' => 'GLDTHRU11',
        'gl_dates.GldThru11' => 'GLDTHRU11',
        'Gldfrom12' => 'GLDFROM12',
        'GlDates.Gldfrom12' => 'GLDFROM12',
        'gldfrom12' => 'GLDFROM12',
        'glDates.gldfrom12' => 'GLDFROM12',
        'GlDatesTableMap::COL_GLDFROM12' => 'GLDFROM12',
        'COL_GLDFROM12' => 'GLDFROM12',
        'GldFrom12' => 'GLDFROM12',
        'gl_dates.GldFrom12' => 'GLDFROM12',
        'Gldthru12' => 'GLDTHRU12',
        'GlDates.Gldthru12' => 'GLDTHRU12',
        'gldthru12' => 'GLDTHRU12',
        'glDates.gldthru12' => 'GLDTHRU12',
        'GlDatesTableMap::COL_GLDTHRU12' => 'GLDTHRU12',
        'COL_GLDTHRU12' => 'GLDTHRU12',
        'GldThru12' => 'GLDTHRU12',
        'gl_dates.GldThru12' => 'GLDTHRU12',
        'Gldfrom13' => 'GLDFROM13',
        'GlDates.Gldfrom13' => 'GLDFROM13',
        'gldfrom13' => 'GLDFROM13',
        'glDates.gldfrom13' => 'GLDFROM13',
        'GlDatesTableMap::COL_GLDFROM13' => 'GLDFROM13',
        'COL_GLDFROM13' => 'GLDFROM13',
        'GldFrom13' => 'GLDFROM13',
        'gl_dates.GldFrom13' => 'GLDFROM13',
        'Gldthru13' => 'GLDTHRU13',
        'GlDates.Gldthru13' => 'GLDTHRU13',
        'gldthru13' => 'GLDTHRU13',
        'glDates.gldthru13' => 'GLDTHRU13',
        'GlDatesTableMap::COL_GLDTHRU13' => 'GLDTHRU13',
        'COL_GLDTHRU13' => 'GLDTHRU13',
        'GldThru13' => 'GLDTHRU13',
        'gl_dates.GldThru13' => 'GLDTHRU13',
        'Gldfrom14' => 'GLDFROM14',
        'GlDates.Gldfrom14' => 'GLDFROM14',
        'gldfrom14' => 'GLDFROM14',
        'glDates.gldfrom14' => 'GLDFROM14',
        'GlDatesTableMap::COL_GLDFROM14' => 'GLDFROM14',
        'COL_GLDFROM14' => 'GLDFROM14',
        'GldFrom14' => 'GLDFROM14',
        'gl_dates.GldFrom14' => 'GLDFROM14',
        'Gldthru14' => 'GLDTHRU14',
        'GlDates.Gldthru14' => 'GLDTHRU14',
        'gldthru14' => 'GLDTHRU14',
        'glDates.gldthru14' => 'GLDTHRU14',
        'GlDatesTableMap::COL_GLDTHRU14' => 'GLDTHRU14',
        'COL_GLDTHRU14' => 'GLDTHRU14',
        'GldThru14' => 'GLDTHRU14',
        'gl_dates.GldThru14' => 'GLDTHRU14',
        'Gldfrom15' => 'GLDFROM15',
        'GlDates.Gldfrom15' => 'GLDFROM15',
        'gldfrom15' => 'GLDFROM15',
        'glDates.gldfrom15' => 'GLDFROM15',
        'GlDatesTableMap::COL_GLDFROM15' => 'GLDFROM15',
        'COL_GLDFROM15' => 'GLDFROM15',
        'GldFrom15' => 'GLDFROM15',
        'gl_dates.GldFrom15' => 'GLDFROM15',
        'Gldthru15' => 'GLDTHRU15',
        'GlDates.Gldthru15' => 'GLDTHRU15',
        'gldthru15' => 'GLDTHRU15',
        'glDates.gldthru15' => 'GLDTHRU15',
        'GlDatesTableMap::COL_GLDTHRU15' => 'GLDTHRU15',
        'COL_GLDTHRU15' => 'GLDTHRU15',
        'GldThru15' => 'GLDTHRU15',
        'gl_dates.GldThru15' => 'GLDTHRU15',
        'Gldfrom16' => 'GLDFROM16',
        'GlDates.Gldfrom16' => 'GLDFROM16',
        'gldfrom16' => 'GLDFROM16',
        'glDates.gldfrom16' => 'GLDFROM16',
        'GlDatesTableMap::COL_GLDFROM16' => 'GLDFROM16',
        'COL_GLDFROM16' => 'GLDFROM16',
        'GldFrom16' => 'GLDFROM16',
        'gl_dates.GldFrom16' => 'GLDFROM16',
        'Gldthru16' => 'GLDTHRU16',
        'GlDates.Gldthru16' => 'GLDTHRU16',
        'gldthru16' => 'GLDTHRU16',
        'glDates.gldthru16' => 'GLDTHRU16',
        'GlDatesTableMap::COL_GLDTHRU16' => 'GLDTHRU16',
        'COL_GLDTHRU16' => 'GLDTHRU16',
        'GldThru16' => 'GLDTHRU16',
        'gl_dates.GldThru16' => 'GLDTHRU16',
        'Gldfrom17' => 'GLDFROM17',
        'GlDates.Gldfrom17' => 'GLDFROM17',
        'gldfrom17' => 'GLDFROM17',
        'glDates.gldfrom17' => 'GLDFROM17',
        'GlDatesTableMap::COL_GLDFROM17' => 'GLDFROM17',
        'COL_GLDFROM17' => 'GLDFROM17',
        'GldFrom17' => 'GLDFROM17',
        'gl_dates.GldFrom17' => 'GLDFROM17',
        'Gldthru17' => 'GLDTHRU17',
        'GlDates.Gldthru17' => 'GLDTHRU17',
        'gldthru17' => 'GLDTHRU17',
        'glDates.gldthru17' => 'GLDTHRU17',
        'GlDatesTableMap::COL_GLDTHRU17' => 'GLDTHRU17',
        'COL_GLDTHRU17' => 'GLDTHRU17',
        'GldThru17' => 'GLDTHRU17',
        'gl_dates.GldThru17' => 'GLDTHRU17',
        'Gldfrom18' => 'GLDFROM18',
        'GlDates.Gldfrom18' => 'GLDFROM18',
        'gldfrom18' => 'GLDFROM18',
        'glDates.gldfrom18' => 'GLDFROM18',
        'GlDatesTableMap::COL_GLDFROM18' => 'GLDFROM18',
        'COL_GLDFROM18' => 'GLDFROM18',
        'GldFrom18' => 'GLDFROM18',
        'gl_dates.GldFrom18' => 'GLDFROM18',
        'Gldthru18' => 'GLDTHRU18',
        'GlDates.Gldthru18' => 'GLDTHRU18',
        'gldthru18' => 'GLDTHRU18',
        'glDates.gldthru18' => 'GLDTHRU18',
        'GlDatesTableMap::COL_GLDTHRU18' => 'GLDTHRU18',
        'COL_GLDTHRU18' => 'GLDTHRU18',
        'GldThru18' => 'GLDTHRU18',
        'gl_dates.GldThru18' => 'GLDTHRU18',
        'Gldfrom19' => 'GLDFROM19',
        'GlDates.Gldfrom19' => 'GLDFROM19',
        'gldfrom19' => 'GLDFROM19',
        'glDates.gldfrom19' => 'GLDFROM19',
        'GlDatesTableMap::COL_GLDFROM19' => 'GLDFROM19',
        'COL_GLDFROM19' => 'GLDFROM19',
        'GldFrom19' => 'GLDFROM19',
        'gl_dates.GldFrom19' => 'GLDFROM19',
        'Gldthru19' => 'GLDTHRU19',
        'GlDates.Gldthru19' => 'GLDTHRU19',
        'gldthru19' => 'GLDTHRU19',
        'glDates.gldthru19' => 'GLDTHRU19',
        'GlDatesTableMap::COL_GLDTHRU19' => 'GLDTHRU19',
        'COL_GLDTHRU19' => 'GLDTHRU19',
        'GldThru19' => 'GLDTHRU19',
        'gl_dates.GldThru19' => 'GLDTHRU19',
        'Dateupdtd' => 'DATEUPDTD',
        'GlDates.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'glDates.dateupdtd' => 'DATEUPDTD',
        'GlDatesTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'gl_dates.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'GlDates.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'glDates.timeupdtd' => 'TIMEUPDTD',
        'GlDatesTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'gl_dates.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'GlDates.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'glDates.dummy' => 'DUMMY',
        'GlDatesTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'gl_dates.dummy' => 'DUMMY',
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
        $this->setName('gl_dates');
        $this->setPhpName('GlDates');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\GlDates');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('GldKey', 'Gldkey', 'VARCHAR', true, 1, '');
        $this->addColumn('GldFrom1', 'Gldfrom1', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru1', 'Gldthru1', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom2', 'Gldfrom2', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru2', 'Gldthru2', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom3', 'Gldfrom3', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru3', 'Gldthru3', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom4', 'Gldfrom4', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru4', 'Gldthru4', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom5', 'Gldfrom5', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru5', 'Gldthru5', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom6', 'Gldfrom6', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru6', 'Gldthru6', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom7', 'Gldfrom7', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru7', 'Gldthru7', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom8', 'Gldfrom8', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru8', 'Gldthru8', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom9', 'Gldfrom9', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru9', 'Gldthru9', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom10', 'Gldfrom10', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru10', 'Gldthru10', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom11', 'Gldfrom11', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru11', 'Gldthru11', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom12', 'Gldfrom12', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru12', 'Gldthru12', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom13', 'Gldfrom13', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru13', 'Gldthru13', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom14', 'Gldfrom14', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru14', 'Gldthru14', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom15', 'Gldfrom15', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru15', 'Gldthru15', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom16', 'Gldfrom16', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru16', 'Gldthru16', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom17', 'Gldfrom17', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru17', 'Gldthru17', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom18', 'Gldfrom18', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru18', 'Gldthru18', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom19', 'Gldfrom19', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru19', 'Gldthru19', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? GlDatesTableMap::CLASS_DEFAULT : GlDatesTableMap::OM_CLASS;
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
     * @return array (GlDates object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = GlDatesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = GlDatesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + GlDatesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GlDatesTableMap::OM_CLASS;
            /** @var GlDates $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            GlDatesTableMap::addInstanceToPool($obj, $key);
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
            $key = GlDatesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = GlDatesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var GlDates $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GlDatesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDKEY);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM1);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU1);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM2);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU2);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM3);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU3);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM4);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU4);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM5);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU5);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM6);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU6);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM7);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU7);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM8);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU8);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM9);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU9);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM10);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU10);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM11);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU11);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM12);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU12);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM13);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU13);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM14);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU14);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM15);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU15);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM16);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU16);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM17);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU17);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM18);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU18);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM19);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU19);
            $criteria->addSelectColumn(GlDatesTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(GlDatesTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(GlDatesTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.GldKey');
            $criteria->addSelectColumn($alias . '.GldFrom1');
            $criteria->addSelectColumn($alias . '.GldThru1');
            $criteria->addSelectColumn($alias . '.GldFrom2');
            $criteria->addSelectColumn($alias . '.GldThru2');
            $criteria->addSelectColumn($alias . '.GldFrom3');
            $criteria->addSelectColumn($alias . '.GldThru3');
            $criteria->addSelectColumn($alias . '.GldFrom4');
            $criteria->addSelectColumn($alias . '.GldThru4');
            $criteria->addSelectColumn($alias . '.GldFrom5');
            $criteria->addSelectColumn($alias . '.GldThru5');
            $criteria->addSelectColumn($alias . '.GldFrom6');
            $criteria->addSelectColumn($alias . '.GldThru6');
            $criteria->addSelectColumn($alias . '.GldFrom7');
            $criteria->addSelectColumn($alias . '.GldThru7');
            $criteria->addSelectColumn($alias . '.GldFrom8');
            $criteria->addSelectColumn($alias . '.GldThru8');
            $criteria->addSelectColumn($alias . '.GldFrom9');
            $criteria->addSelectColumn($alias . '.GldThru9');
            $criteria->addSelectColumn($alias . '.GldFrom10');
            $criteria->addSelectColumn($alias . '.GldThru10');
            $criteria->addSelectColumn($alias . '.GldFrom11');
            $criteria->addSelectColumn($alias . '.GldThru11');
            $criteria->addSelectColumn($alias . '.GldFrom12');
            $criteria->addSelectColumn($alias . '.GldThru12');
            $criteria->addSelectColumn($alias . '.GldFrom13');
            $criteria->addSelectColumn($alias . '.GldThru13');
            $criteria->addSelectColumn($alias . '.GldFrom14');
            $criteria->addSelectColumn($alias . '.GldThru14');
            $criteria->addSelectColumn($alias . '.GldFrom15');
            $criteria->addSelectColumn($alias . '.GldThru15');
            $criteria->addSelectColumn($alias . '.GldFrom16');
            $criteria->addSelectColumn($alias . '.GldThru16');
            $criteria->addSelectColumn($alias . '.GldFrom17');
            $criteria->addSelectColumn($alias . '.GldThru17');
            $criteria->addSelectColumn($alias . '.GldFrom18');
            $criteria->addSelectColumn($alias . '.GldThru18');
            $criteria->addSelectColumn($alias . '.GldFrom19');
            $criteria->addSelectColumn($alias . '.GldThru19');
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
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDKEY);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM1);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU1);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM2);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU2);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM3);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU3);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM4);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU4);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM5);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU5);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM6);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU6);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM7);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU7);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM8);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU8);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM9);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU9);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM10);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU10);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM11);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU11);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM12);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU12);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM13);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU13);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM14);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU14);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM15);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU15);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM16);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU16);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM17);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU17);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM18);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU18);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDFROM19);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_GLDTHRU19);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(GlDatesTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.GldKey');
            $criteria->removeSelectColumn($alias . '.GldFrom1');
            $criteria->removeSelectColumn($alias . '.GldThru1');
            $criteria->removeSelectColumn($alias . '.GldFrom2');
            $criteria->removeSelectColumn($alias . '.GldThru2');
            $criteria->removeSelectColumn($alias . '.GldFrom3');
            $criteria->removeSelectColumn($alias . '.GldThru3');
            $criteria->removeSelectColumn($alias . '.GldFrom4');
            $criteria->removeSelectColumn($alias . '.GldThru4');
            $criteria->removeSelectColumn($alias . '.GldFrom5');
            $criteria->removeSelectColumn($alias . '.GldThru5');
            $criteria->removeSelectColumn($alias . '.GldFrom6');
            $criteria->removeSelectColumn($alias . '.GldThru6');
            $criteria->removeSelectColumn($alias . '.GldFrom7');
            $criteria->removeSelectColumn($alias . '.GldThru7');
            $criteria->removeSelectColumn($alias . '.GldFrom8');
            $criteria->removeSelectColumn($alias . '.GldThru8');
            $criteria->removeSelectColumn($alias . '.GldFrom9');
            $criteria->removeSelectColumn($alias . '.GldThru9');
            $criteria->removeSelectColumn($alias . '.GldFrom10');
            $criteria->removeSelectColumn($alias . '.GldThru10');
            $criteria->removeSelectColumn($alias . '.GldFrom11');
            $criteria->removeSelectColumn($alias . '.GldThru11');
            $criteria->removeSelectColumn($alias . '.GldFrom12');
            $criteria->removeSelectColumn($alias . '.GldThru12');
            $criteria->removeSelectColumn($alias . '.GldFrom13');
            $criteria->removeSelectColumn($alias . '.GldThru13');
            $criteria->removeSelectColumn($alias . '.GldFrom14');
            $criteria->removeSelectColumn($alias . '.GldThru14');
            $criteria->removeSelectColumn($alias . '.GldFrom15');
            $criteria->removeSelectColumn($alias . '.GldThru15');
            $criteria->removeSelectColumn($alias . '.GldFrom16');
            $criteria->removeSelectColumn($alias . '.GldThru16');
            $criteria->removeSelectColumn($alias . '.GldFrom17');
            $criteria->removeSelectColumn($alias . '.GldThru17');
            $criteria->removeSelectColumn($alias . '.GldFrom18');
            $criteria->removeSelectColumn($alias . '.GldThru18');
            $criteria->removeSelectColumn($alias . '.GldFrom19');
            $criteria->removeSelectColumn($alias . '.GldThru19');
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
        return Propel::getServiceContainer()->getDatabaseMap(GlDatesTableMap::DATABASE_NAME)->getTable(GlDatesTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a GlDates or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or GlDates object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \GlDates) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GlDatesTableMap::DATABASE_NAME);
            $criteria->add(GlDatesTableMap::COL_GLDKEY, (array) $values, Criteria::IN);
        }

        $query = GlDatesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            GlDatesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                GlDatesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the gl_dates table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return GlDatesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a GlDates or Criteria object.
     *
     * @param mixed $criteria Criteria or GlDates object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from GlDates object
        }


        // Set the correct dbName
        $query = GlDatesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
