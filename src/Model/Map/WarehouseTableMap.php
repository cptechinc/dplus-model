<?php

namespace Map;

use \Warehouse;
use \WarehouseQuery;
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
 * This class defines the structure of the 'inv_whse_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class WarehouseTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.WarehouseTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_whse_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'Warehouse';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Warehouse';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'Warehouse';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 37;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 37;

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'inv_whse_code.IntbWhse';

    /**
     * the column name for the IntbWhseName field
     */
    public const COL_INTBWHSENAME = 'inv_whse_code.IntbWhseName';

    /**
     * the column name for the IntbWhseAdr1 field
     */
    public const COL_INTBWHSEADR1 = 'inv_whse_code.IntbWhseAdr1';

    /**
     * the column name for the IntbWhseAdr2 field
     */
    public const COL_INTBWHSEADR2 = 'inv_whse_code.IntbWhseAdr2';

    /**
     * the column name for the IntbWhseCity field
     */
    public const COL_INTBWHSECITY = 'inv_whse_code.IntbWhseCity';

    /**
     * the column name for the IntbWhseStat field
     */
    public const COL_INTBWHSESTAT = 'inv_whse_code.IntbWhseStat';

    /**
     * the column name for the IntbWhseZipCode field
     */
    public const COL_INTBWHSEZIPCODE = 'inv_whse_code.IntbWhseZipCode';

    /**
     * the column name for the IntbWhseCtry field
     */
    public const COL_INTBWHSECTRY = 'inv_whse_code.IntbWhseCtry';

    /**
     * the column name for the IntbWhseUseHandheld field
     */
    public const COL_INTBWHSEUSEHANDHELD = 'inv_whse_code.IntbWhseUseHandheld';

    /**
     * the column name for the IntbWhseCashCust field
     */
    public const COL_INTBWHSECASHCUST = 'inv_whse_code.IntbWhseCashCust';

    /**
     * the column name for the IntbWhsePickDtl field
     */
    public const COL_INTBWHSEPICKDTL = 'inv_whse_code.IntbWhsePickDtl';

    /**
     * the column name for the IntbWhseProdBin field
     */
    public const COL_INTBWHSEPRODBIN = 'inv_whse_code.IntbWhseProdBin';

    /**
     * the column name for the IntbWhsePhArea field
     */
    public const COL_INTBWHSEPHAREA = 'inv_whse_code.IntbWhsePhArea';

    /**
     * the column name for the IntbWhsePhFrst3 field
     */
    public const COL_INTBWHSEPHFRST3 = 'inv_whse_code.IntbWhsePhFrst3';

    /**
     * the column name for the IntbWhsePhLast4 field
     */
    public const COL_INTBWHSEPHLAST4 = 'inv_whse_code.IntbWhsePhLast4';

    /**
     * the column name for the IntbWhsePhExt field
     */
    public const COL_INTBWHSEPHEXT = 'inv_whse_code.IntbWhsePhExt';

    /**
     * the column name for the IntbWhseFaxArea field
     */
    public const COL_INTBWHSEFAXAREA = 'inv_whse_code.IntbWhseFaxArea';

    /**
     * the column name for the IntbWhseFaxFrst3 field
     */
    public const COL_INTBWHSEFAXFRST3 = 'inv_whse_code.IntbWhseFaxFrst3';

    /**
     * the column name for the IntbWhseFaxLast4 field
     */
    public const COL_INTBWHSEFAXLAST4 = 'inv_whse_code.IntbWhseFaxLast4';

    /**
     * the column name for the IntbWhseEmailAdr field
     */
    public const COL_INTBWHSEEMAILADR = 'inv_whse_code.IntbWhseEmailAdr';

    /**
     * the column name for the IntbWhseQcRgaBin field
     */
    public const COL_INTBWHSEQCRGABIN = 'inv_whse_code.IntbWhseQcRgaBin';

    /**
     * the column name for the IntbWhseRfPrinter1 field
     */
    public const COL_INTBWHSERFPRINTER1 = 'inv_whse_code.IntbWhseRfPrinter1';

    /**
     * the column name for the IntbWhseRfPrinter2 field
     */
    public const COL_INTBWHSERFPRINTER2 = 'inv_whse_code.IntbWhseRfPrinter2';

    /**
     * the column name for the IntbWhseRfPrinter3 field
     */
    public const COL_INTBWHSERFPRINTER3 = 'inv_whse_code.IntbWhseRfPrinter3';

    /**
     * the column name for the IntbWhseRfPrinter4 field
     */
    public const COL_INTBWHSERFPRINTER4 = 'inv_whse_code.IntbWhseRfPrinter4';

    /**
     * the column name for the IntbWhseRfPrinter5 field
     */
    public const COL_INTBWHSERFPRINTER5 = 'inv_whse_code.IntbWhseRfPrinter5';

    /**
     * the column name for the IntbWhseProfWhse field
     */
    public const COL_INTBWHSEPROFWHSE = 'inv_whse_code.IntbWhseProfWhse';

    /**
     * the column name for the IntbWhseAsetWhse field
     */
    public const COL_INTBWHSEASETWHSE = 'inv_whse_code.IntbWhseAsetWhse';

    /**
     * the column name for the IntbWhseConsignWhse field
     */
    public const COL_INTBWHSECONSIGNWHSE = 'inv_whse_code.IntbWhseConsignWhse';

    /**
     * the column name for the IntbWhseBinRangeList field
     */
    public const COL_INTBWHSEBINRANGELIST = 'inv_whse_code.IntbWhseBinRangeList';

    /**
     * the column name for the IntbWhseSupplyWhse field
     */
    public const COL_INTBWHSESUPPLYWHSE = 'inv_whse_code.IntbWhseSupplyWhse';

    /**
     * the column name for the IntbWhseAreaSplit field
     */
    public const COL_INTBWHSEAREASPLIT = 'inv_whse_code.IntbWhseAreaSplit';

    /**
     * the column name for the IntbWhseRcvBinCode field
     */
    public const COL_INTBWHSERCVBINCODE = 'inv_whse_code.IntbWhseRcvBinCode';

    /**
     * the column name for the IntbWhseRcvBin field
     */
    public const COL_INTBWHSERCVBIN = 'inv_whse_code.IntbWhseRcvBin';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_whse_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_whse_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_whse_code.dummy';

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
        self::TYPE_PHPNAME       => ['Intbwhse', 'Intbwhsename', 'Intbwhseadr1', 'Intbwhseadr2', 'Intbwhsecity', 'Intbwhsestat', 'Intbwhsezipcode', 'Intbwhsectry', 'Intbwhseusehandheld', 'Intbwhsecashcust', 'Intbwhsepickdtl', 'Intbwhseprodbin', 'Intbwhsepharea', 'Intbwhsephfrst3', 'Intbwhsephlast4', 'Intbwhsephext', 'Intbwhsefaxarea', 'Intbwhsefaxfrst3', 'Intbwhsefaxlast4', 'Intbwhseemailadr', 'Intbwhseqcrgabin', 'Intbwhserfprinter1', 'Intbwhserfprinter2', 'Intbwhserfprinter3', 'Intbwhserfprinter4', 'Intbwhserfprinter5', 'Intbwhseprofwhse', 'Intbwhseasetwhse', 'Intbwhseconsignwhse', 'Intbwhsebinrangelist', 'Intbwhsesupplywhse', 'Intbwhseareasplit', 'Intbwhsercvbincode', 'Intbwhsercvbin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['intbwhse', 'intbwhsename', 'intbwhseadr1', 'intbwhseadr2', 'intbwhsecity', 'intbwhsestat', 'intbwhsezipcode', 'intbwhsectry', 'intbwhseusehandheld', 'intbwhsecashcust', 'intbwhsepickdtl', 'intbwhseprodbin', 'intbwhsepharea', 'intbwhsephfrst3', 'intbwhsephlast4', 'intbwhsephext', 'intbwhsefaxarea', 'intbwhsefaxfrst3', 'intbwhsefaxlast4', 'intbwhseemailadr', 'intbwhseqcrgabin', 'intbwhserfprinter1', 'intbwhserfprinter2', 'intbwhserfprinter3', 'intbwhserfprinter4', 'intbwhserfprinter5', 'intbwhseprofwhse', 'intbwhseasetwhse', 'intbwhseconsignwhse', 'intbwhsebinrangelist', 'intbwhsesupplywhse', 'intbwhseareasplit', 'intbwhsercvbincode', 'intbwhsercvbin', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [WarehouseTableMap::COL_INTBWHSE, WarehouseTableMap::COL_INTBWHSENAME, WarehouseTableMap::COL_INTBWHSEADR1, WarehouseTableMap::COL_INTBWHSEADR2, WarehouseTableMap::COL_INTBWHSECITY, WarehouseTableMap::COL_INTBWHSESTAT, WarehouseTableMap::COL_INTBWHSEZIPCODE, WarehouseTableMap::COL_INTBWHSECTRY, WarehouseTableMap::COL_INTBWHSEUSEHANDHELD, WarehouseTableMap::COL_INTBWHSECASHCUST, WarehouseTableMap::COL_INTBWHSEPICKDTL, WarehouseTableMap::COL_INTBWHSEPRODBIN, WarehouseTableMap::COL_INTBWHSEPHAREA, WarehouseTableMap::COL_INTBWHSEPHFRST3, WarehouseTableMap::COL_INTBWHSEPHLAST4, WarehouseTableMap::COL_INTBWHSEPHEXT, WarehouseTableMap::COL_INTBWHSEFAXAREA, WarehouseTableMap::COL_INTBWHSEFAXFRST3, WarehouseTableMap::COL_INTBWHSEFAXLAST4, WarehouseTableMap::COL_INTBWHSEEMAILADR, WarehouseTableMap::COL_INTBWHSEQCRGABIN, WarehouseTableMap::COL_INTBWHSERFPRINTER1, WarehouseTableMap::COL_INTBWHSERFPRINTER2, WarehouseTableMap::COL_INTBWHSERFPRINTER3, WarehouseTableMap::COL_INTBWHSERFPRINTER4, WarehouseTableMap::COL_INTBWHSERFPRINTER5, WarehouseTableMap::COL_INTBWHSEPROFWHSE, WarehouseTableMap::COL_INTBWHSEASETWHSE, WarehouseTableMap::COL_INTBWHSECONSIGNWHSE, WarehouseTableMap::COL_INTBWHSEBINRANGELIST, WarehouseTableMap::COL_INTBWHSESUPPLYWHSE, WarehouseTableMap::COL_INTBWHSEAREASPLIT, WarehouseTableMap::COL_INTBWHSERCVBINCODE, WarehouseTableMap::COL_INTBWHSERCVBIN, WarehouseTableMap::COL_DATEUPDTD, WarehouseTableMap::COL_TIMEUPDTD, WarehouseTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IntbWhse', 'IntbWhseName', 'IntbWhseAdr1', 'IntbWhseAdr2', 'IntbWhseCity', 'IntbWhseStat', 'IntbWhseZipCode', 'IntbWhseCtry', 'IntbWhseUseHandheld', 'IntbWhseCashCust', 'IntbWhsePickDtl', 'IntbWhseProdBin', 'IntbWhsePhArea', 'IntbWhsePhFrst3', 'IntbWhsePhLast4', 'IntbWhsePhExt', 'IntbWhseFaxArea', 'IntbWhseFaxFrst3', 'IntbWhseFaxLast4', 'IntbWhseEmailAdr', 'IntbWhseQcRgaBin', 'IntbWhseRfPrinter1', 'IntbWhseRfPrinter2', 'IntbWhseRfPrinter3', 'IntbWhseRfPrinter4', 'IntbWhseRfPrinter5', 'IntbWhseProfWhse', 'IntbWhseAsetWhse', 'IntbWhseConsignWhse', 'IntbWhseBinRangeList', 'IntbWhseSupplyWhse', 'IntbWhseAreaSplit', 'IntbWhseRcvBinCode', 'IntbWhseRcvBin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, ]
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
        self::TYPE_PHPNAME       => ['Intbwhse' => 0, 'Intbwhsename' => 1, 'Intbwhseadr1' => 2, 'Intbwhseadr2' => 3, 'Intbwhsecity' => 4, 'Intbwhsestat' => 5, 'Intbwhsezipcode' => 6, 'Intbwhsectry' => 7, 'Intbwhseusehandheld' => 8, 'Intbwhsecashcust' => 9, 'Intbwhsepickdtl' => 10, 'Intbwhseprodbin' => 11, 'Intbwhsepharea' => 12, 'Intbwhsephfrst3' => 13, 'Intbwhsephlast4' => 14, 'Intbwhsephext' => 15, 'Intbwhsefaxarea' => 16, 'Intbwhsefaxfrst3' => 17, 'Intbwhsefaxlast4' => 18, 'Intbwhseemailadr' => 19, 'Intbwhseqcrgabin' => 20, 'Intbwhserfprinter1' => 21, 'Intbwhserfprinter2' => 22, 'Intbwhserfprinter3' => 23, 'Intbwhserfprinter4' => 24, 'Intbwhserfprinter5' => 25, 'Intbwhseprofwhse' => 26, 'Intbwhseasetwhse' => 27, 'Intbwhseconsignwhse' => 28, 'Intbwhsebinrangelist' => 29, 'Intbwhsesupplywhse' => 30, 'Intbwhseareasplit' => 31, 'Intbwhsercvbincode' => 32, 'Intbwhsercvbin' => 33, 'Dateupdtd' => 34, 'Timeupdtd' => 35, 'Dummy' => 36, ],
        self::TYPE_CAMELNAME     => ['intbwhse' => 0, 'intbwhsename' => 1, 'intbwhseadr1' => 2, 'intbwhseadr2' => 3, 'intbwhsecity' => 4, 'intbwhsestat' => 5, 'intbwhsezipcode' => 6, 'intbwhsectry' => 7, 'intbwhseusehandheld' => 8, 'intbwhsecashcust' => 9, 'intbwhsepickdtl' => 10, 'intbwhseprodbin' => 11, 'intbwhsepharea' => 12, 'intbwhsephfrst3' => 13, 'intbwhsephlast4' => 14, 'intbwhsephext' => 15, 'intbwhsefaxarea' => 16, 'intbwhsefaxfrst3' => 17, 'intbwhsefaxlast4' => 18, 'intbwhseemailadr' => 19, 'intbwhseqcrgabin' => 20, 'intbwhserfprinter1' => 21, 'intbwhserfprinter2' => 22, 'intbwhserfprinter3' => 23, 'intbwhserfprinter4' => 24, 'intbwhserfprinter5' => 25, 'intbwhseprofwhse' => 26, 'intbwhseasetwhse' => 27, 'intbwhseconsignwhse' => 28, 'intbwhsebinrangelist' => 29, 'intbwhsesupplywhse' => 30, 'intbwhseareasplit' => 31, 'intbwhsercvbincode' => 32, 'intbwhsercvbin' => 33, 'dateupdtd' => 34, 'timeupdtd' => 35, 'dummy' => 36, ],
        self::TYPE_COLNAME       => [WarehouseTableMap::COL_INTBWHSE => 0, WarehouseTableMap::COL_INTBWHSENAME => 1, WarehouseTableMap::COL_INTBWHSEADR1 => 2, WarehouseTableMap::COL_INTBWHSEADR2 => 3, WarehouseTableMap::COL_INTBWHSECITY => 4, WarehouseTableMap::COL_INTBWHSESTAT => 5, WarehouseTableMap::COL_INTBWHSEZIPCODE => 6, WarehouseTableMap::COL_INTBWHSECTRY => 7, WarehouseTableMap::COL_INTBWHSEUSEHANDHELD => 8, WarehouseTableMap::COL_INTBWHSECASHCUST => 9, WarehouseTableMap::COL_INTBWHSEPICKDTL => 10, WarehouseTableMap::COL_INTBWHSEPRODBIN => 11, WarehouseTableMap::COL_INTBWHSEPHAREA => 12, WarehouseTableMap::COL_INTBWHSEPHFRST3 => 13, WarehouseTableMap::COL_INTBWHSEPHLAST4 => 14, WarehouseTableMap::COL_INTBWHSEPHEXT => 15, WarehouseTableMap::COL_INTBWHSEFAXAREA => 16, WarehouseTableMap::COL_INTBWHSEFAXFRST3 => 17, WarehouseTableMap::COL_INTBWHSEFAXLAST4 => 18, WarehouseTableMap::COL_INTBWHSEEMAILADR => 19, WarehouseTableMap::COL_INTBWHSEQCRGABIN => 20, WarehouseTableMap::COL_INTBWHSERFPRINTER1 => 21, WarehouseTableMap::COL_INTBWHSERFPRINTER2 => 22, WarehouseTableMap::COL_INTBWHSERFPRINTER3 => 23, WarehouseTableMap::COL_INTBWHSERFPRINTER4 => 24, WarehouseTableMap::COL_INTBWHSERFPRINTER5 => 25, WarehouseTableMap::COL_INTBWHSEPROFWHSE => 26, WarehouseTableMap::COL_INTBWHSEASETWHSE => 27, WarehouseTableMap::COL_INTBWHSECONSIGNWHSE => 28, WarehouseTableMap::COL_INTBWHSEBINRANGELIST => 29, WarehouseTableMap::COL_INTBWHSESUPPLYWHSE => 30, WarehouseTableMap::COL_INTBWHSEAREASPLIT => 31, WarehouseTableMap::COL_INTBWHSERCVBINCODE => 32, WarehouseTableMap::COL_INTBWHSERCVBIN => 33, WarehouseTableMap::COL_DATEUPDTD => 34, WarehouseTableMap::COL_TIMEUPDTD => 35, WarehouseTableMap::COL_DUMMY => 36, ],
        self::TYPE_FIELDNAME     => ['IntbWhse' => 0, 'IntbWhseName' => 1, 'IntbWhseAdr1' => 2, 'IntbWhseAdr2' => 3, 'IntbWhseCity' => 4, 'IntbWhseStat' => 5, 'IntbWhseZipCode' => 6, 'IntbWhseCtry' => 7, 'IntbWhseUseHandheld' => 8, 'IntbWhseCashCust' => 9, 'IntbWhsePickDtl' => 10, 'IntbWhseProdBin' => 11, 'IntbWhsePhArea' => 12, 'IntbWhsePhFrst3' => 13, 'IntbWhsePhLast4' => 14, 'IntbWhsePhExt' => 15, 'IntbWhseFaxArea' => 16, 'IntbWhseFaxFrst3' => 17, 'IntbWhseFaxLast4' => 18, 'IntbWhseEmailAdr' => 19, 'IntbWhseQcRgaBin' => 20, 'IntbWhseRfPrinter1' => 21, 'IntbWhseRfPrinter2' => 22, 'IntbWhseRfPrinter3' => 23, 'IntbWhseRfPrinter4' => 24, 'IntbWhseRfPrinter5' => 25, 'IntbWhseProfWhse' => 26, 'IntbWhseAsetWhse' => 27, 'IntbWhseConsignWhse' => 28, 'IntbWhseBinRangeList' => 29, 'IntbWhseSupplyWhse' => 30, 'IntbWhseAreaSplit' => 31, 'IntbWhseRcvBinCode' => 32, 'IntbWhseRcvBin' => 33, 'DateUpdtd' => 34, 'TimeUpdtd' => 35, 'dummy' => 36, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Intbwhse' => 'INTBWHSE',
        'Warehouse.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'warehouse.intbwhse' => 'INTBWHSE',
        'WarehouseTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'inv_whse_code.IntbWhse' => 'INTBWHSE',
        'Intbwhsename' => 'INTBWHSENAME',
        'Warehouse.Intbwhsename' => 'INTBWHSENAME',
        'intbwhsename' => 'INTBWHSENAME',
        'warehouse.intbwhsename' => 'INTBWHSENAME',
        'WarehouseTableMap::COL_INTBWHSENAME' => 'INTBWHSENAME',
        'COL_INTBWHSENAME' => 'INTBWHSENAME',
        'IntbWhseName' => 'INTBWHSENAME',
        'inv_whse_code.IntbWhseName' => 'INTBWHSENAME',
        'Intbwhseadr1' => 'INTBWHSEADR1',
        'Warehouse.Intbwhseadr1' => 'INTBWHSEADR1',
        'intbwhseadr1' => 'INTBWHSEADR1',
        'warehouse.intbwhseadr1' => 'INTBWHSEADR1',
        'WarehouseTableMap::COL_INTBWHSEADR1' => 'INTBWHSEADR1',
        'COL_INTBWHSEADR1' => 'INTBWHSEADR1',
        'IntbWhseAdr1' => 'INTBWHSEADR1',
        'inv_whse_code.IntbWhseAdr1' => 'INTBWHSEADR1',
        'Intbwhseadr2' => 'INTBWHSEADR2',
        'Warehouse.Intbwhseadr2' => 'INTBWHSEADR2',
        'intbwhseadr2' => 'INTBWHSEADR2',
        'warehouse.intbwhseadr2' => 'INTBWHSEADR2',
        'WarehouseTableMap::COL_INTBWHSEADR2' => 'INTBWHSEADR2',
        'COL_INTBWHSEADR2' => 'INTBWHSEADR2',
        'IntbWhseAdr2' => 'INTBWHSEADR2',
        'inv_whse_code.IntbWhseAdr2' => 'INTBWHSEADR2',
        'Intbwhsecity' => 'INTBWHSECITY',
        'Warehouse.Intbwhsecity' => 'INTBWHSECITY',
        'intbwhsecity' => 'INTBWHSECITY',
        'warehouse.intbwhsecity' => 'INTBWHSECITY',
        'WarehouseTableMap::COL_INTBWHSECITY' => 'INTBWHSECITY',
        'COL_INTBWHSECITY' => 'INTBWHSECITY',
        'IntbWhseCity' => 'INTBWHSECITY',
        'inv_whse_code.IntbWhseCity' => 'INTBWHSECITY',
        'Intbwhsestat' => 'INTBWHSESTAT',
        'Warehouse.Intbwhsestat' => 'INTBWHSESTAT',
        'intbwhsestat' => 'INTBWHSESTAT',
        'warehouse.intbwhsestat' => 'INTBWHSESTAT',
        'WarehouseTableMap::COL_INTBWHSESTAT' => 'INTBWHSESTAT',
        'COL_INTBWHSESTAT' => 'INTBWHSESTAT',
        'IntbWhseStat' => 'INTBWHSESTAT',
        'inv_whse_code.IntbWhseStat' => 'INTBWHSESTAT',
        'Intbwhsezipcode' => 'INTBWHSEZIPCODE',
        'Warehouse.Intbwhsezipcode' => 'INTBWHSEZIPCODE',
        'intbwhsezipcode' => 'INTBWHSEZIPCODE',
        'warehouse.intbwhsezipcode' => 'INTBWHSEZIPCODE',
        'WarehouseTableMap::COL_INTBWHSEZIPCODE' => 'INTBWHSEZIPCODE',
        'COL_INTBWHSEZIPCODE' => 'INTBWHSEZIPCODE',
        'IntbWhseZipCode' => 'INTBWHSEZIPCODE',
        'inv_whse_code.IntbWhseZipCode' => 'INTBWHSEZIPCODE',
        'Intbwhsectry' => 'INTBWHSECTRY',
        'Warehouse.Intbwhsectry' => 'INTBWHSECTRY',
        'intbwhsectry' => 'INTBWHSECTRY',
        'warehouse.intbwhsectry' => 'INTBWHSECTRY',
        'WarehouseTableMap::COL_INTBWHSECTRY' => 'INTBWHSECTRY',
        'COL_INTBWHSECTRY' => 'INTBWHSECTRY',
        'IntbWhseCtry' => 'INTBWHSECTRY',
        'inv_whse_code.IntbWhseCtry' => 'INTBWHSECTRY',
        'Intbwhseusehandheld' => 'INTBWHSEUSEHANDHELD',
        'Warehouse.Intbwhseusehandheld' => 'INTBWHSEUSEHANDHELD',
        'intbwhseusehandheld' => 'INTBWHSEUSEHANDHELD',
        'warehouse.intbwhseusehandheld' => 'INTBWHSEUSEHANDHELD',
        'WarehouseTableMap::COL_INTBWHSEUSEHANDHELD' => 'INTBWHSEUSEHANDHELD',
        'COL_INTBWHSEUSEHANDHELD' => 'INTBWHSEUSEHANDHELD',
        'IntbWhseUseHandheld' => 'INTBWHSEUSEHANDHELD',
        'inv_whse_code.IntbWhseUseHandheld' => 'INTBWHSEUSEHANDHELD',
        'Intbwhsecashcust' => 'INTBWHSECASHCUST',
        'Warehouse.Intbwhsecashcust' => 'INTBWHSECASHCUST',
        'intbwhsecashcust' => 'INTBWHSECASHCUST',
        'warehouse.intbwhsecashcust' => 'INTBWHSECASHCUST',
        'WarehouseTableMap::COL_INTBWHSECASHCUST' => 'INTBWHSECASHCUST',
        'COL_INTBWHSECASHCUST' => 'INTBWHSECASHCUST',
        'IntbWhseCashCust' => 'INTBWHSECASHCUST',
        'inv_whse_code.IntbWhseCashCust' => 'INTBWHSECASHCUST',
        'Intbwhsepickdtl' => 'INTBWHSEPICKDTL',
        'Warehouse.Intbwhsepickdtl' => 'INTBWHSEPICKDTL',
        'intbwhsepickdtl' => 'INTBWHSEPICKDTL',
        'warehouse.intbwhsepickdtl' => 'INTBWHSEPICKDTL',
        'WarehouseTableMap::COL_INTBWHSEPICKDTL' => 'INTBWHSEPICKDTL',
        'COL_INTBWHSEPICKDTL' => 'INTBWHSEPICKDTL',
        'IntbWhsePickDtl' => 'INTBWHSEPICKDTL',
        'inv_whse_code.IntbWhsePickDtl' => 'INTBWHSEPICKDTL',
        'Intbwhseprodbin' => 'INTBWHSEPRODBIN',
        'Warehouse.Intbwhseprodbin' => 'INTBWHSEPRODBIN',
        'intbwhseprodbin' => 'INTBWHSEPRODBIN',
        'warehouse.intbwhseprodbin' => 'INTBWHSEPRODBIN',
        'WarehouseTableMap::COL_INTBWHSEPRODBIN' => 'INTBWHSEPRODBIN',
        'COL_INTBWHSEPRODBIN' => 'INTBWHSEPRODBIN',
        'IntbWhseProdBin' => 'INTBWHSEPRODBIN',
        'inv_whse_code.IntbWhseProdBin' => 'INTBWHSEPRODBIN',
        'Intbwhsepharea' => 'INTBWHSEPHAREA',
        'Warehouse.Intbwhsepharea' => 'INTBWHSEPHAREA',
        'intbwhsepharea' => 'INTBWHSEPHAREA',
        'warehouse.intbwhsepharea' => 'INTBWHSEPHAREA',
        'WarehouseTableMap::COL_INTBWHSEPHAREA' => 'INTBWHSEPHAREA',
        'COL_INTBWHSEPHAREA' => 'INTBWHSEPHAREA',
        'IntbWhsePhArea' => 'INTBWHSEPHAREA',
        'inv_whse_code.IntbWhsePhArea' => 'INTBWHSEPHAREA',
        'Intbwhsephfrst3' => 'INTBWHSEPHFRST3',
        'Warehouse.Intbwhsephfrst3' => 'INTBWHSEPHFRST3',
        'intbwhsephfrst3' => 'INTBWHSEPHFRST3',
        'warehouse.intbwhsephfrst3' => 'INTBWHSEPHFRST3',
        'WarehouseTableMap::COL_INTBWHSEPHFRST3' => 'INTBWHSEPHFRST3',
        'COL_INTBWHSEPHFRST3' => 'INTBWHSEPHFRST3',
        'IntbWhsePhFrst3' => 'INTBWHSEPHFRST3',
        'inv_whse_code.IntbWhsePhFrst3' => 'INTBWHSEPHFRST3',
        'Intbwhsephlast4' => 'INTBWHSEPHLAST4',
        'Warehouse.Intbwhsephlast4' => 'INTBWHSEPHLAST4',
        'intbwhsephlast4' => 'INTBWHSEPHLAST4',
        'warehouse.intbwhsephlast4' => 'INTBWHSEPHLAST4',
        'WarehouseTableMap::COL_INTBWHSEPHLAST4' => 'INTBWHSEPHLAST4',
        'COL_INTBWHSEPHLAST4' => 'INTBWHSEPHLAST4',
        'IntbWhsePhLast4' => 'INTBWHSEPHLAST4',
        'inv_whse_code.IntbWhsePhLast4' => 'INTBWHSEPHLAST4',
        'Intbwhsephext' => 'INTBWHSEPHEXT',
        'Warehouse.Intbwhsephext' => 'INTBWHSEPHEXT',
        'intbwhsephext' => 'INTBWHSEPHEXT',
        'warehouse.intbwhsephext' => 'INTBWHSEPHEXT',
        'WarehouseTableMap::COL_INTBWHSEPHEXT' => 'INTBWHSEPHEXT',
        'COL_INTBWHSEPHEXT' => 'INTBWHSEPHEXT',
        'IntbWhsePhExt' => 'INTBWHSEPHEXT',
        'inv_whse_code.IntbWhsePhExt' => 'INTBWHSEPHEXT',
        'Intbwhsefaxarea' => 'INTBWHSEFAXAREA',
        'Warehouse.Intbwhsefaxarea' => 'INTBWHSEFAXAREA',
        'intbwhsefaxarea' => 'INTBWHSEFAXAREA',
        'warehouse.intbwhsefaxarea' => 'INTBWHSEFAXAREA',
        'WarehouseTableMap::COL_INTBWHSEFAXAREA' => 'INTBWHSEFAXAREA',
        'COL_INTBWHSEFAXAREA' => 'INTBWHSEFAXAREA',
        'IntbWhseFaxArea' => 'INTBWHSEFAXAREA',
        'inv_whse_code.IntbWhseFaxArea' => 'INTBWHSEFAXAREA',
        'Intbwhsefaxfrst3' => 'INTBWHSEFAXFRST3',
        'Warehouse.Intbwhsefaxfrst3' => 'INTBWHSEFAXFRST3',
        'intbwhsefaxfrst3' => 'INTBWHSEFAXFRST3',
        'warehouse.intbwhsefaxfrst3' => 'INTBWHSEFAXFRST3',
        'WarehouseTableMap::COL_INTBWHSEFAXFRST3' => 'INTBWHSEFAXFRST3',
        'COL_INTBWHSEFAXFRST3' => 'INTBWHSEFAXFRST3',
        'IntbWhseFaxFrst3' => 'INTBWHSEFAXFRST3',
        'inv_whse_code.IntbWhseFaxFrst3' => 'INTBWHSEFAXFRST3',
        'Intbwhsefaxlast4' => 'INTBWHSEFAXLAST4',
        'Warehouse.Intbwhsefaxlast4' => 'INTBWHSEFAXLAST4',
        'intbwhsefaxlast4' => 'INTBWHSEFAXLAST4',
        'warehouse.intbwhsefaxlast4' => 'INTBWHSEFAXLAST4',
        'WarehouseTableMap::COL_INTBWHSEFAXLAST4' => 'INTBWHSEFAXLAST4',
        'COL_INTBWHSEFAXLAST4' => 'INTBWHSEFAXLAST4',
        'IntbWhseFaxLast4' => 'INTBWHSEFAXLAST4',
        'inv_whse_code.IntbWhseFaxLast4' => 'INTBWHSEFAXLAST4',
        'Intbwhseemailadr' => 'INTBWHSEEMAILADR',
        'Warehouse.Intbwhseemailadr' => 'INTBWHSEEMAILADR',
        'intbwhseemailadr' => 'INTBWHSEEMAILADR',
        'warehouse.intbwhseemailadr' => 'INTBWHSEEMAILADR',
        'WarehouseTableMap::COL_INTBWHSEEMAILADR' => 'INTBWHSEEMAILADR',
        'COL_INTBWHSEEMAILADR' => 'INTBWHSEEMAILADR',
        'IntbWhseEmailAdr' => 'INTBWHSEEMAILADR',
        'inv_whse_code.IntbWhseEmailAdr' => 'INTBWHSEEMAILADR',
        'Intbwhseqcrgabin' => 'INTBWHSEQCRGABIN',
        'Warehouse.Intbwhseqcrgabin' => 'INTBWHSEQCRGABIN',
        'intbwhseqcrgabin' => 'INTBWHSEQCRGABIN',
        'warehouse.intbwhseqcrgabin' => 'INTBWHSEQCRGABIN',
        'WarehouseTableMap::COL_INTBWHSEQCRGABIN' => 'INTBWHSEQCRGABIN',
        'COL_INTBWHSEQCRGABIN' => 'INTBWHSEQCRGABIN',
        'IntbWhseQcRgaBin' => 'INTBWHSEQCRGABIN',
        'inv_whse_code.IntbWhseQcRgaBin' => 'INTBWHSEQCRGABIN',
        'Intbwhserfprinter1' => 'INTBWHSERFPRINTER1',
        'Warehouse.Intbwhserfprinter1' => 'INTBWHSERFPRINTER1',
        'intbwhserfprinter1' => 'INTBWHSERFPRINTER1',
        'warehouse.intbwhserfprinter1' => 'INTBWHSERFPRINTER1',
        'WarehouseTableMap::COL_INTBWHSERFPRINTER1' => 'INTBWHSERFPRINTER1',
        'COL_INTBWHSERFPRINTER1' => 'INTBWHSERFPRINTER1',
        'IntbWhseRfPrinter1' => 'INTBWHSERFPRINTER1',
        'inv_whse_code.IntbWhseRfPrinter1' => 'INTBWHSERFPRINTER1',
        'Intbwhserfprinter2' => 'INTBWHSERFPRINTER2',
        'Warehouse.Intbwhserfprinter2' => 'INTBWHSERFPRINTER2',
        'intbwhserfprinter2' => 'INTBWHSERFPRINTER2',
        'warehouse.intbwhserfprinter2' => 'INTBWHSERFPRINTER2',
        'WarehouseTableMap::COL_INTBWHSERFPRINTER2' => 'INTBWHSERFPRINTER2',
        'COL_INTBWHSERFPRINTER2' => 'INTBWHSERFPRINTER2',
        'IntbWhseRfPrinter2' => 'INTBWHSERFPRINTER2',
        'inv_whse_code.IntbWhseRfPrinter2' => 'INTBWHSERFPRINTER2',
        'Intbwhserfprinter3' => 'INTBWHSERFPRINTER3',
        'Warehouse.Intbwhserfprinter3' => 'INTBWHSERFPRINTER3',
        'intbwhserfprinter3' => 'INTBWHSERFPRINTER3',
        'warehouse.intbwhserfprinter3' => 'INTBWHSERFPRINTER3',
        'WarehouseTableMap::COL_INTBWHSERFPRINTER3' => 'INTBWHSERFPRINTER3',
        'COL_INTBWHSERFPRINTER3' => 'INTBWHSERFPRINTER3',
        'IntbWhseRfPrinter3' => 'INTBWHSERFPRINTER3',
        'inv_whse_code.IntbWhseRfPrinter3' => 'INTBWHSERFPRINTER3',
        'Intbwhserfprinter4' => 'INTBWHSERFPRINTER4',
        'Warehouse.Intbwhserfprinter4' => 'INTBWHSERFPRINTER4',
        'intbwhserfprinter4' => 'INTBWHSERFPRINTER4',
        'warehouse.intbwhserfprinter4' => 'INTBWHSERFPRINTER4',
        'WarehouseTableMap::COL_INTBWHSERFPRINTER4' => 'INTBWHSERFPRINTER4',
        'COL_INTBWHSERFPRINTER4' => 'INTBWHSERFPRINTER4',
        'IntbWhseRfPrinter4' => 'INTBWHSERFPRINTER4',
        'inv_whse_code.IntbWhseRfPrinter4' => 'INTBWHSERFPRINTER4',
        'Intbwhserfprinter5' => 'INTBWHSERFPRINTER5',
        'Warehouse.Intbwhserfprinter5' => 'INTBWHSERFPRINTER5',
        'intbwhserfprinter5' => 'INTBWHSERFPRINTER5',
        'warehouse.intbwhserfprinter5' => 'INTBWHSERFPRINTER5',
        'WarehouseTableMap::COL_INTBWHSERFPRINTER5' => 'INTBWHSERFPRINTER5',
        'COL_INTBWHSERFPRINTER5' => 'INTBWHSERFPRINTER5',
        'IntbWhseRfPrinter5' => 'INTBWHSERFPRINTER5',
        'inv_whse_code.IntbWhseRfPrinter5' => 'INTBWHSERFPRINTER5',
        'Intbwhseprofwhse' => 'INTBWHSEPROFWHSE',
        'Warehouse.Intbwhseprofwhse' => 'INTBWHSEPROFWHSE',
        'intbwhseprofwhse' => 'INTBWHSEPROFWHSE',
        'warehouse.intbwhseprofwhse' => 'INTBWHSEPROFWHSE',
        'WarehouseTableMap::COL_INTBWHSEPROFWHSE' => 'INTBWHSEPROFWHSE',
        'COL_INTBWHSEPROFWHSE' => 'INTBWHSEPROFWHSE',
        'IntbWhseProfWhse' => 'INTBWHSEPROFWHSE',
        'inv_whse_code.IntbWhseProfWhse' => 'INTBWHSEPROFWHSE',
        'Intbwhseasetwhse' => 'INTBWHSEASETWHSE',
        'Warehouse.Intbwhseasetwhse' => 'INTBWHSEASETWHSE',
        'intbwhseasetwhse' => 'INTBWHSEASETWHSE',
        'warehouse.intbwhseasetwhse' => 'INTBWHSEASETWHSE',
        'WarehouseTableMap::COL_INTBWHSEASETWHSE' => 'INTBWHSEASETWHSE',
        'COL_INTBWHSEASETWHSE' => 'INTBWHSEASETWHSE',
        'IntbWhseAsetWhse' => 'INTBWHSEASETWHSE',
        'inv_whse_code.IntbWhseAsetWhse' => 'INTBWHSEASETWHSE',
        'Intbwhseconsignwhse' => 'INTBWHSECONSIGNWHSE',
        'Warehouse.Intbwhseconsignwhse' => 'INTBWHSECONSIGNWHSE',
        'intbwhseconsignwhse' => 'INTBWHSECONSIGNWHSE',
        'warehouse.intbwhseconsignwhse' => 'INTBWHSECONSIGNWHSE',
        'WarehouseTableMap::COL_INTBWHSECONSIGNWHSE' => 'INTBWHSECONSIGNWHSE',
        'COL_INTBWHSECONSIGNWHSE' => 'INTBWHSECONSIGNWHSE',
        'IntbWhseConsignWhse' => 'INTBWHSECONSIGNWHSE',
        'inv_whse_code.IntbWhseConsignWhse' => 'INTBWHSECONSIGNWHSE',
        'Intbwhsebinrangelist' => 'INTBWHSEBINRANGELIST',
        'Warehouse.Intbwhsebinrangelist' => 'INTBWHSEBINRANGELIST',
        'intbwhsebinrangelist' => 'INTBWHSEBINRANGELIST',
        'warehouse.intbwhsebinrangelist' => 'INTBWHSEBINRANGELIST',
        'WarehouseTableMap::COL_INTBWHSEBINRANGELIST' => 'INTBWHSEBINRANGELIST',
        'COL_INTBWHSEBINRANGELIST' => 'INTBWHSEBINRANGELIST',
        'IntbWhseBinRangeList' => 'INTBWHSEBINRANGELIST',
        'inv_whse_code.IntbWhseBinRangeList' => 'INTBWHSEBINRANGELIST',
        'Intbwhsesupplywhse' => 'INTBWHSESUPPLYWHSE',
        'Warehouse.Intbwhsesupplywhse' => 'INTBWHSESUPPLYWHSE',
        'intbwhsesupplywhse' => 'INTBWHSESUPPLYWHSE',
        'warehouse.intbwhsesupplywhse' => 'INTBWHSESUPPLYWHSE',
        'WarehouseTableMap::COL_INTBWHSESUPPLYWHSE' => 'INTBWHSESUPPLYWHSE',
        'COL_INTBWHSESUPPLYWHSE' => 'INTBWHSESUPPLYWHSE',
        'IntbWhseSupplyWhse' => 'INTBWHSESUPPLYWHSE',
        'inv_whse_code.IntbWhseSupplyWhse' => 'INTBWHSESUPPLYWHSE',
        'Intbwhseareasplit' => 'INTBWHSEAREASPLIT',
        'Warehouse.Intbwhseareasplit' => 'INTBWHSEAREASPLIT',
        'intbwhseareasplit' => 'INTBWHSEAREASPLIT',
        'warehouse.intbwhseareasplit' => 'INTBWHSEAREASPLIT',
        'WarehouseTableMap::COL_INTBWHSEAREASPLIT' => 'INTBWHSEAREASPLIT',
        'COL_INTBWHSEAREASPLIT' => 'INTBWHSEAREASPLIT',
        'IntbWhseAreaSplit' => 'INTBWHSEAREASPLIT',
        'inv_whse_code.IntbWhseAreaSplit' => 'INTBWHSEAREASPLIT',
        'Intbwhsercvbincode' => 'INTBWHSERCVBINCODE',
        'Warehouse.Intbwhsercvbincode' => 'INTBWHSERCVBINCODE',
        'intbwhsercvbincode' => 'INTBWHSERCVBINCODE',
        'warehouse.intbwhsercvbincode' => 'INTBWHSERCVBINCODE',
        'WarehouseTableMap::COL_INTBWHSERCVBINCODE' => 'INTBWHSERCVBINCODE',
        'COL_INTBWHSERCVBINCODE' => 'INTBWHSERCVBINCODE',
        'IntbWhseRcvBinCode' => 'INTBWHSERCVBINCODE',
        'inv_whse_code.IntbWhseRcvBinCode' => 'INTBWHSERCVBINCODE',
        'Intbwhsercvbin' => 'INTBWHSERCVBIN',
        'Warehouse.Intbwhsercvbin' => 'INTBWHSERCVBIN',
        'intbwhsercvbin' => 'INTBWHSERCVBIN',
        'warehouse.intbwhsercvbin' => 'INTBWHSERCVBIN',
        'WarehouseTableMap::COL_INTBWHSERCVBIN' => 'INTBWHSERCVBIN',
        'COL_INTBWHSERCVBIN' => 'INTBWHSERCVBIN',
        'IntbWhseRcvBin' => 'INTBWHSERCVBIN',
        'inv_whse_code.IntbWhseRcvBin' => 'INTBWHSERCVBIN',
        'Dateupdtd' => 'DATEUPDTD',
        'Warehouse.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'warehouse.dateupdtd' => 'DATEUPDTD',
        'WarehouseTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_whse_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'Warehouse.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'warehouse.timeupdtd' => 'TIMEUPDTD',
        'WarehouseTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_whse_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'Warehouse.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'warehouse.dummy' => 'DUMMY',
        'WarehouseTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_whse_code.dummy' => 'DUMMY',
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
        $this->setName('inv_whse_code');
        $this->setPhpName('Warehouse');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Warehouse');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbWhseName', 'Intbwhsename', 'VARCHAR', true, 30, '');
        $this->addColumn('IntbWhseAdr1', 'Intbwhseadr1', 'VARCHAR', true, 30, '');
        $this->addColumn('IntbWhseAdr2', 'Intbwhseadr2', 'VARCHAR', true, 30, '');
        $this->addColumn('IntbWhseCity', 'Intbwhsecity', 'VARCHAR', true, 16, '');
        $this->addColumn('IntbWhseStat', 'Intbwhsestat', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbWhseZipCode', 'Intbwhsezipcode', 'VARCHAR', true, 10, '');
        $this->addColumn('IntbWhseCtry', 'Intbwhsectry', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbWhseUseHandheld', 'Intbwhseusehandheld', 'CHAR', true, null, 'N');
        $this->addColumn('IntbWhseCashCust', 'Intbwhsecashcust', 'VARCHAR', true, 6, '');
        $this->addColumn('IntbWhsePickDtl', 'Intbwhsepickdtl', 'CHAR', true, null, 'N');
        $this->addColumn('IntbWhseProdBin', 'Intbwhseprodbin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbWhsePhArea', 'Intbwhsepharea', 'VARCHAR', true, 3, '');
        $this->addColumn('IntbWhsePhFrst3', 'Intbwhsephfrst3', 'VARCHAR', true, 3, '');
        $this->addColumn('IntbWhsePhLast4', 'Intbwhsephlast4', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbWhsePhExt', 'Intbwhsephext', 'VARCHAR', true, 7, '');
        $this->addColumn('IntbWhseFaxArea', 'Intbwhsefaxarea', 'VARCHAR', true, 3, '');
        $this->addColumn('IntbWhseFaxFrst3', 'Intbwhsefaxfrst3', 'VARCHAR', true, 3, '');
        $this->addColumn('IntbWhseFaxLast4', 'Intbwhsefaxlast4', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbWhseEmailAdr', 'Intbwhseemailadr', 'VARCHAR', true, 50, '');
        $this->addColumn('IntbWhseQcRgaBin', 'Intbwhseqcrgabin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbWhseRfPrinter1', 'Intbwhserfprinter1', 'VARCHAR', true, 12, '');
        $this->addColumn('IntbWhseRfPrinter2', 'Intbwhserfprinter2', 'VARCHAR', true, 12, '');
        $this->addColumn('IntbWhseRfPrinter3', 'Intbwhserfprinter3', 'VARCHAR', true, 12, '');
        $this->addColumn('IntbWhseRfPrinter4', 'Intbwhserfprinter4', 'VARCHAR', true, 12, '');
        $this->addColumn('IntbWhseRfPrinter5', 'Intbwhserfprinter5', 'VARCHAR', true, 12, '');
        $this->addColumn('IntbWhseProfWhse', 'Intbwhseprofwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbWhseAsetWhse', 'Intbwhseasetwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbWhseConsignWhse', 'Intbwhseconsignwhse', 'CHAR', true, null, 'N');
        $this->addColumn('IntbWhseBinRangeList', 'Intbwhsebinrangelist', 'CHAR', true, null, 'R');
        $this->addColumn('IntbWhseSupplyWhse', 'Intbwhsesupplywhse', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbWhseAreaSplit', 'Intbwhseareasplit', 'CHAR', true, null, 'N');
        $this->addColumn('IntbWhseRcvBinCode', 'Intbwhsercvbincode', 'CHAR', true, null, 'S');
        $this->addColumn('IntbWhseRcvBin', 'Intbwhsercvbin', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('InvWhseItemBin', '\\InvWhseItemBin', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'InvWhseItemBins', false);
        $this->addRelation('WarehouseBin', '\\WarehouseBin', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'WarehouseBins', false);
        $this->addRelation('InvWhseLot', '\\InvWhseLot', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'InvWhseLots', false);
        $this->addRelation('InvLotTag', '\\InvLotTag', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'InvLotTags', false);
        $this->addRelation('InvTransferOrderRelatedByIntbwhsefrom', '\\InvTransferOrder', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhseFrom',
    1 => ':IntbWhse',
  ),
), null, null, 'InvTransferOrdersRelatedByIntbwhsefrom', false);
        $this->addRelation('InvTransferOrderRelatedByIntbwhseto', '\\InvTransferOrder', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhseTo',
    1 => ':IntbWhse',
  ),
), null, null, 'InvTransferOrdersRelatedByIntbwhseto', false);
        $this->addRelation('WarehouseInventory', '\\WarehouseInventory', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'WarehouseInventories', false);
        $this->addRelation('WarehouseNote', '\\WarehouseNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'WarehouseNotes', false);
        $this->addRelation('PoReceivingHead', '\\PoReceivingHead', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, 'PoReceivingHeads', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? WarehouseTableMap::CLASS_DEFAULT : WarehouseTableMap::OM_CLASS;
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
     * @return array (Warehouse object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = WarehouseTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WarehouseTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WarehouseTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WarehouseTableMap::OM_CLASS;
            /** @var Warehouse $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WarehouseTableMap::addInstanceToPool($obj, $key);
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
            $key = WarehouseTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WarehouseTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Warehouse $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WarehouseTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSENAME);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEADR1);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEADR2);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSECITY);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSESTAT);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEZIPCODE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSECTRY);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSECASHCUST);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPICKDTL);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPRODBIN);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPHAREA);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPHFRST3);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPHLAST4);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPHEXT);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEFAXAREA);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEFAXFRST3);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEFAXLAST4);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEEMAILADR);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEQCRGABIN);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER1);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER2);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER3);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER4);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER5);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEPROFWHSE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEASETWHSE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEBINRANGELIST);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSEAREASPLIT);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERCVBINCODE);
            $criteria->addSelectColumn(WarehouseTableMap::COL_INTBWHSERCVBIN);
            $criteria->addSelectColumn(WarehouseTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(WarehouseTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(WarehouseTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.IntbWhseName');
            $criteria->addSelectColumn($alias . '.IntbWhseAdr1');
            $criteria->addSelectColumn($alias . '.IntbWhseAdr2');
            $criteria->addSelectColumn($alias . '.IntbWhseCity');
            $criteria->addSelectColumn($alias . '.IntbWhseStat');
            $criteria->addSelectColumn($alias . '.IntbWhseZipCode');
            $criteria->addSelectColumn($alias . '.IntbWhseCtry');
            $criteria->addSelectColumn($alias . '.IntbWhseUseHandheld');
            $criteria->addSelectColumn($alias . '.IntbWhseCashCust');
            $criteria->addSelectColumn($alias . '.IntbWhsePickDtl');
            $criteria->addSelectColumn($alias . '.IntbWhseProdBin');
            $criteria->addSelectColumn($alias . '.IntbWhsePhArea');
            $criteria->addSelectColumn($alias . '.IntbWhsePhFrst3');
            $criteria->addSelectColumn($alias . '.IntbWhsePhLast4');
            $criteria->addSelectColumn($alias . '.IntbWhsePhExt');
            $criteria->addSelectColumn($alias . '.IntbWhseFaxArea');
            $criteria->addSelectColumn($alias . '.IntbWhseFaxFrst3');
            $criteria->addSelectColumn($alias . '.IntbWhseFaxLast4');
            $criteria->addSelectColumn($alias . '.IntbWhseEmailAdr');
            $criteria->addSelectColumn($alias . '.IntbWhseQcRgaBin');
            $criteria->addSelectColumn($alias . '.IntbWhseRfPrinter1');
            $criteria->addSelectColumn($alias . '.IntbWhseRfPrinter2');
            $criteria->addSelectColumn($alias . '.IntbWhseRfPrinter3');
            $criteria->addSelectColumn($alias . '.IntbWhseRfPrinter4');
            $criteria->addSelectColumn($alias . '.IntbWhseRfPrinter5');
            $criteria->addSelectColumn($alias . '.IntbWhseProfWhse');
            $criteria->addSelectColumn($alias . '.IntbWhseAsetWhse');
            $criteria->addSelectColumn($alias . '.IntbWhseConsignWhse');
            $criteria->addSelectColumn($alias . '.IntbWhseBinRangeList');
            $criteria->addSelectColumn($alias . '.IntbWhseSupplyWhse');
            $criteria->addSelectColumn($alias . '.IntbWhseAreaSplit');
            $criteria->addSelectColumn($alias . '.IntbWhseRcvBinCode');
            $criteria->addSelectColumn($alias . '.IntbWhseRcvBin');
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
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSENAME);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEADR1);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEADR2);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSECITY);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSESTAT);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEZIPCODE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSECTRY);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSECASHCUST);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPICKDTL);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPRODBIN);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPHAREA);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPHFRST3);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPHLAST4);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPHEXT);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEFAXAREA);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEFAXFRST3);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEFAXLAST4);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEEMAILADR);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEQCRGABIN);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER1);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER2);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER3);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER4);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERFPRINTER5);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEPROFWHSE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEASETWHSE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEBINRANGELIST);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSEAREASPLIT);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERCVBINCODE);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_INTBWHSERCVBIN);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(WarehouseTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.IntbWhseName');
            $criteria->removeSelectColumn($alias . '.IntbWhseAdr1');
            $criteria->removeSelectColumn($alias . '.IntbWhseAdr2');
            $criteria->removeSelectColumn($alias . '.IntbWhseCity');
            $criteria->removeSelectColumn($alias . '.IntbWhseStat');
            $criteria->removeSelectColumn($alias . '.IntbWhseZipCode');
            $criteria->removeSelectColumn($alias . '.IntbWhseCtry');
            $criteria->removeSelectColumn($alias . '.IntbWhseUseHandheld');
            $criteria->removeSelectColumn($alias . '.IntbWhseCashCust');
            $criteria->removeSelectColumn($alias . '.IntbWhsePickDtl');
            $criteria->removeSelectColumn($alias . '.IntbWhseProdBin');
            $criteria->removeSelectColumn($alias . '.IntbWhsePhArea');
            $criteria->removeSelectColumn($alias . '.IntbWhsePhFrst3');
            $criteria->removeSelectColumn($alias . '.IntbWhsePhLast4');
            $criteria->removeSelectColumn($alias . '.IntbWhsePhExt');
            $criteria->removeSelectColumn($alias . '.IntbWhseFaxArea');
            $criteria->removeSelectColumn($alias . '.IntbWhseFaxFrst3');
            $criteria->removeSelectColumn($alias . '.IntbWhseFaxLast4');
            $criteria->removeSelectColumn($alias . '.IntbWhseEmailAdr');
            $criteria->removeSelectColumn($alias . '.IntbWhseQcRgaBin');
            $criteria->removeSelectColumn($alias . '.IntbWhseRfPrinter1');
            $criteria->removeSelectColumn($alias . '.IntbWhseRfPrinter2');
            $criteria->removeSelectColumn($alias . '.IntbWhseRfPrinter3');
            $criteria->removeSelectColumn($alias . '.IntbWhseRfPrinter4');
            $criteria->removeSelectColumn($alias . '.IntbWhseRfPrinter5');
            $criteria->removeSelectColumn($alias . '.IntbWhseProfWhse');
            $criteria->removeSelectColumn($alias . '.IntbWhseAsetWhse');
            $criteria->removeSelectColumn($alias . '.IntbWhseConsignWhse');
            $criteria->removeSelectColumn($alias . '.IntbWhseBinRangeList');
            $criteria->removeSelectColumn($alias . '.IntbWhseSupplyWhse');
            $criteria->removeSelectColumn($alias . '.IntbWhseAreaSplit');
            $criteria->removeSelectColumn($alias . '.IntbWhseRcvBinCode');
            $criteria->removeSelectColumn($alias . '.IntbWhseRcvBin');
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
        return Propel::getServiceContainer()->getDatabaseMap(WarehouseTableMap::DATABASE_NAME)->getTable(WarehouseTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Warehouse or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Warehouse object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Warehouse) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WarehouseTableMap::DATABASE_NAME);
            $criteria->add(WarehouseTableMap::COL_INTBWHSE, (array) $values, Criteria::IN);
        }

        $query = WarehouseQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WarehouseTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WarehouseTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_whse_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return WarehouseQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Warehouse or Criteria object.
     *
     * @param mixed $criteria Criteria or Warehouse object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Warehouse object
        }


        // Set the correct dbName
        $query = WarehouseQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
