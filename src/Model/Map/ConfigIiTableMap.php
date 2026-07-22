<?php

namespace Map;

use \ConfigIi;
use \ConfigIiQuery;
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
 * This class defines the structure of the 'ii_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ConfigIiTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ConfigIiTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ii_config';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ConfigIi';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ConfigIi';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ConfigIi';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 24;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 24;

    /**
     * the column name for the IitbConfKey field
     */
    public const COL_IITBCONFKEY = 'ii_config.IitbConfKey';

    /**
     * the column name for the IitbConfOneWhse field
     */
    public const COL_IITBCONFONEWHSE = 'ii_config.IitbConfOneWhse';

    /**
     * the column name for the IitbConfDefWhse field
     */
    public const COL_IITBCONFDEFWHSE = 'ii_config.IitbConfDefWhse';

    /**
     * the column name for the IitbConfYtdStrtMo field
     */
    public const COL_IITBCONFYTDSTRTMO = 'ii_config.IitbConfYtdStrtMo';

    /**
     * the column name for the IitbConfUseCustWhse field
     */
    public const COL_IITBCONFUSECUSTWHSE = 'ii_config.IitbConfUseCustWhse';

    /**
     * the column name for the IitbConfWuOrVqw field
     */
    public const COL_IITBCONFWUORVQW = 'ii_config.IitbConfWuOrVqw';

    /**
     * the column name for the IitbConfQOrLs field
     */
    public const COL_IITBCONFQORLS = 'ii_config.IitbConfQOrLs';

    /**
     * the column name for the IitbConfInqCode field
     */
    public const COL_IITBCONFINQCODE = 'ii_config.IitbConfInqCode';

    /**
     * the column name for the IitbConfPricSect field
     */
    public const COL_IITBCONFPRICSECT = 'ii_config.IitbConfPricSect';

    /**
     * the column name for the IitbConfSrchUpcAlias field
     */
    public const COL_IITBCONFSRCHUPCALIAS = 'ii_config.IitbConfSrchUpcAlias';

    /**
     * the column name for the IitbConfLotBin field
     */
    public const COL_IITBCONFLOTBIN = 'ii_config.IitbConfLotBin';

    /**
     * the column name for the IitbConfOneItem field
     */
    public const COL_IITBCONFONEITEM = 'ii_config.IitbConfOneItem';

    /**
     * the column name for the IitbConfItemTotals field
     */
    public const COL_IITBCONFITEMTOTALS = 'ii_config.IitbConfItemTotals';

    /**
     * the column name for the IitbConfMonthsUsage field
     */
    public const COL_IITBCONFMONTHSUSAGE = 'ii_config.IitbConfMonthsUsage';

    /**
     * the column name for the IitbConfTOrA field
     */
    public const COL_IITBCONFTORA = 'ii_config.IitbConfTOrA';

    /**
     * the column name for the IitbConfUnitCost field
     */
    public const COL_IITBCONFUNITCOST = 'ii_config.IitbConfUnitCost';

    /**
     * the column name for the IitbConfFormulaOption field
     */
    public const COL_IITBCONFFORMULAOPTION = 'ii_config.IitbConfFormulaOption';

    /**
     * the column name for the IitbConfTransSep field
     */
    public const COL_IITBCONFTRANSSEP = 'ii_config.IitbConfTransSep';

    /**
     * the column name for the IitbConfDispBinDet field
     */
    public const COL_IITBCONFDISPBINDET = 'ii_config.IitbConfDispBinDet';

    /**
     * the column name for the IitbConfShDateOrCust field
     */
    public const COL_IITBCONFSHDATEORCUST = 'ii_config.IitbConfShDateOrCust';

    /**
     * the column name for the IitbConfShZeroShip field
     */
    public const COL_IITBCONFSHZEROSHIP = 'ii_config.IitbConfShZeroShip';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ii_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ii_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ii_config.dummy';

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
        self::TYPE_PHPNAME       => ['Iitbconfkey', 'Iitbconfonewhse', 'Iitbconfdefwhse', 'Iitbconfytdstrtmo', 'Iitbconfusecustwhse', 'Iitbconfwuorvqw', 'Iitbconfqorls', 'Iitbconfinqcode', 'Iitbconfpricsect', 'Iitbconfsrchupcalias', 'Iitbconflotbin', 'Iitbconfoneitem', 'Iitbconfitemtotals', 'Iitbconfmonthsusage', 'Iitbconftora', 'Iitbconfunitcost', 'Iitbconfformulaoption', 'Iitbconftranssep', 'Iitbconfdispbindet', 'Iitbconfshdateorcust', 'Iitbconfshzeroship', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['iitbconfkey', 'iitbconfonewhse', 'iitbconfdefwhse', 'iitbconfytdstrtmo', 'iitbconfusecustwhse', 'iitbconfwuorvqw', 'iitbconfqorls', 'iitbconfinqcode', 'iitbconfpricsect', 'iitbconfsrchupcalias', 'iitbconflotbin', 'iitbconfoneitem', 'iitbconfitemtotals', 'iitbconfmonthsusage', 'iitbconftora', 'iitbconfunitcost', 'iitbconfformulaoption', 'iitbconftranssep', 'iitbconfdispbindet', 'iitbconfshdateorcust', 'iitbconfshzeroship', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ConfigIiTableMap::COL_IITBCONFKEY, ConfigIiTableMap::COL_IITBCONFONEWHSE, ConfigIiTableMap::COL_IITBCONFDEFWHSE, ConfigIiTableMap::COL_IITBCONFYTDSTRTMO, ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE, ConfigIiTableMap::COL_IITBCONFWUORVQW, ConfigIiTableMap::COL_IITBCONFQORLS, ConfigIiTableMap::COL_IITBCONFINQCODE, ConfigIiTableMap::COL_IITBCONFPRICSECT, ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS, ConfigIiTableMap::COL_IITBCONFLOTBIN, ConfigIiTableMap::COL_IITBCONFONEITEM, ConfigIiTableMap::COL_IITBCONFITEMTOTALS, ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE, ConfigIiTableMap::COL_IITBCONFTORA, ConfigIiTableMap::COL_IITBCONFUNITCOST, ConfigIiTableMap::COL_IITBCONFFORMULAOPTION, ConfigIiTableMap::COL_IITBCONFTRANSSEP, ConfigIiTableMap::COL_IITBCONFDISPBINDET, ConfigIiTableMap::COL_IITBCONFSHDATEORCUST, ConfigIiTableMap::COL_IITBCONFSHZEROSHIP, ConfigIiTableMap::COL_DATEUPDTD, ConfigIiTableMap::COL_TIMEUPDTD, ConfigIiTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IitbConfKey', 'IitbConfOneWhse', 'IitbConfDefWhse', 'IitbConfYtdStrtMo', 'IitbConfUseCustWhse', 'IitbConfWuOrVqw', 'IitbConfQOrLs', 'IitbConfInqCode', 'IitbConfPricSect', 'IitbConfSrchUpcAlias', 'IitbConfLotBin', 'IitbConfOneItem', 'IitbConfItemTotals', 'IitbConfMonthsUsage', 'IitbConfTOrA', 'IitbConfUnitCost', 'IitbConfFormulaOption', 'IitbConfTransSep', 'IitbConfDispBinDet', 'IitbConfShDateOrCust', 'IitbConfShZeroShip', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, ]
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
        self::TYPE_PHPNAME       => ['Iitbconfkey' => 0, 'Iitbconfonewhse' => 1, 'Iitbconfdefwhse' => 2, 'Iitbconfytdstrtmo' => 3, 'Iitbconfusecustwhse' => 4, 'Iitbconfwuorvqw' => 5, 'Iitbconfqorls' => 6, 'Iitbconfinqcode' => 7, 'Iitbconfpricsect' => 8, 'Iitbconfsrchupcalias' => 9, 'Iitbconflotbin' => 10, 'Iitbconfoneitem' => 11, 'Iitbconfitemtotals' => 12, 'Iitbconfmonthsusage' => 13, 'Iitbconftora' => 14, 'Iitbconfunitcost' => 15, 'Iitbconfformulaoption' => 16, 'Iitbconftranssep' => 17, 'Iitbconfdispbindet' => 18, 'Iitbconfshdateorcust' => 19, 'Iitbconfshzeroship' => 20, 'Dateupdtd' => 21, 'Timeupdtd' => 22, 'Dummy' => 23, ],
        self::TYPE_CAMELNAME     => ['iitbconfkey' => 0, 'iitbconfonewhse' => 1, 'iitbconfdefwhse' => 2, 'iitbconfytdstrtmo' => 3, 'iitbconfusecustwhse' => 4, 'iitbconfwuorvqw' => 5, 'iitbconfqorls' => 6, 'iitbconfinqcode' => 7, 'iitbconfpricsect' => 8, 'iitbconfsrchupcalias' => 9, 'iitbconflotbin' => 10, 'iitbconfoneitem' => 11, 'iitbconfitemtotals' => 12, 'iitbconfmonthsusage' => 13, 'iitbconftora' => 14, 'iitbconfunitcost' => 15, 'iitbconfformulaoption' => 16, 'iitbconftranssep' => 17, 'iitbconfdispbindet' => 18, 'iitbconfshdateorcust' => 19, 'iitbconfshzeroship' => 20, 'dateupdtd' => 21, 'timeupdtd' => 22, 'dummy' => 23, ],
        self::TYPE_COLNAME       => [ConfigIiTableMap::COL_IITBCONFKEY => 0, ConfigIiTableMap::COL_IITBCONFONEWHSE => 1, ConfigIiTableMap::COL_IITBCONFDEFWHSE => 2, ConfigIiTableMap::COL_IITBCONFYTDSTRTMO => 3, ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE => 4, ConfigIiTableMap::COL_IITBCONFWUORVQW => 5, ConfigIiTableMap::COL_IITBCONFQORLS => 6, ConfigIiTableMap::COL_IITBCONFINQCODE => 7, ConfigIiTableMap::COL_IITBCONFPRICSECT => 8, ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS => 9, ConfigIiTableMap::COL_IITBCONFLOTBIN => 10, ConfigIiTableMap::COL_IITBCONFONEITEM => 11, ConfigIiTableMap::COL_IITBCONFITEMTOTALS => 12, ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE => 13, ConfigIiTableMap::COL_IITBCONFTORA => 14, ConfigIiTableMap::COL_IITBCONFUNITCOST => 15, ConfigIiTableMap::COL_IITBCONFFORMULAOPTION => 16, ConfigIiTableMap::COL_IITBCONFTRANSSEP => 17, ConfigIiTableMap::COL_IITBCONFDISPBINDET => 18, ConfigIiTableMap::COL_IITBCONFSHDATEORCUST => 19, ConfigIiTableMap::COL_IITBCONFSHZEROSHIP => 20, ConfigIiTableMap::COL_DATEUPDTD => 21, ConfigIiTableMap::COL_TIMEUPDTD => 22, ConfigIiTableMap::COL_DUMMY => 23, ],
        self::TYPE_FIELDNAME     => ['IitbConfKey' => 0, 'IitbConfOneWhse' => 1, 'IitbConfDefWhse' => 2, 'IitbConfYtdStrtMo' => 3, 'IitbConfUseCustWhse' => 4, 'IitbConfWuOrVqw' => 5, 'IitbConfQOrLs' => 6, 'IitbConfInqCode' => 7, 'IitbConfPricSect' => 8, 'IitbConfSrchUpcAlias' => 9, 'IitbConfLotBin' => 10, 'IitbConfOneItem' => 11, 'IitbConfItemTotals' => 12, 'IitbConfMonthsUsage' => 13, 'IitbConfTOrA' => 14, 'IitbConfUnitCost' => 15, 'IitbConfFormulaOption' => 16, 'IitbConfTransSep' => 17, 'IitbConfDispBinDet' => 18, 'IitbConfShDateOrCust' => 19, 'IitbConfShZeroShip' => 20, 'DateUpdtd' => 21, 'TimeUpdtd' => 22, 'dummy' => 23, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Iitbconfkey' => 'IITBCONFKEY',
        'ConfigIi.Iitbconfkey' => 'IITBCONFKEY',
        'iitbconfkey' => 'IITBCONFKEY',
        'configIi.iitbconfkey' => 'IITBCONFKEY',
        'ConfigIiTableMap::COL_IITBCONFKEY' => 'IITBCONFKEY',
        'COL_IITBCONFKEY' => 'IITBCONFKEY',
        'IitbConfKey' => 'IITBCONFKEY',
        'ii_config.IitbConfKey' => 'IITBCONFKEY',
        'Iitbconfonewhse' => 'IITBCONFONEWHSE',
        'ConfigIi.Iitbconfonewhse' => 'IITBCONFONEWHSE',
        'iitbconfonewhse' => 'IITBCONFONEWHSE',
        'configIi.iitbconfonewhse' => 'IITBCONFONEWHSE',
        'ConfigIiTableMap::COL_IITBCONFONEWHSE' => 'IITBCONFONEWHSE',
        'COL_IITBCONFONEWHSE' => 'IITBCONFONEWHSE',
        'IitbConfOneWhse' => 'IITBCONFONEWHSE',
        'ii_config.IitbConfOneWhse' => 'IITBCONFONEWHSE',
        'Iitbconfdefwhse' => 'IITBCONFDEFWHSE',
        'ConfigIi.Iitbconfdefwhse' => 'IITBCONFDEFWHSE',
        'iitbconfdefwhse' => 'IITBCONFDEFWHSE',
        'configIi.iitbconfdefwhse' => 'IITBCONFDEFWHSE',
        'ConfigIiTableMap::COL_IITBCONFDEFWHSE' => 'IITBCONFDEFWHSE',
        'COL_IITBCONFDEFWHSE' => 'IITBCONFDEFWHSE',
        'IitbConfDefWhse' => 'IITBCONFDEFWHSE',
        'ii_config.IitbConfDefWhse' => 'IITBCONFDEFWHSE',
        'Iitbconfytdstrtmo' => 'IITBCONFYTDSTRTMO',
        'ConfigIi.Iitbconfytdstrtmo' => 'IITBCONFYTDSTRTMO',
        'iitbconfytdstrtmo' => 'IITBCONFYTDSTRTMO',
        'configIi.iitbconfytdstrtmo' => 'IITBCONFYTDSTRTMO',
        'ConfigIiTableMap::COL_IITBCONFYTDSTRTMO' => 'IITBCONFYTDSTRTMO',
        'COL_IITBCONFYTDSTRTMO' => 'IITBCONFYTDSTRTMO',
        'IitbConfYtdStrtMo' => 'IITBCONFYTDSTRTMO',
        'ii_config.IitbConfYtdStrtMo' => 'IITBCONFYTDSTRTMO',
        'Iitbconfusecustwhse' => 'IITBCONFUSECUSTWHSE',
        'ConfigIi.Iitbconfusecustwhse' => 'IITBCONFUSECUSTWHSE',
        'iitbconfusecustwhse' => 'IITBCONFUSECUSTWHSE',
        'configIi.iitbconfusecustwhse' => 'IITBCONFUSECUSTWHSE',
        'ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE' => 'IITBCONFUSECUSTWHSE',
        'COL_IITBCONFUSECUSTWHSE' => 'IITBCONFUSECUSTWHSE',
        'IitbConfUseCustWhse' => 'IITBCONFUSECUSTWHSE',
        'ii_config.IitbConfUseCustWhse' => 'IITBCONFUSECUSTWHSE',
        'Iitbconfwuorvqw' => 'IITBCONFWUORVQW',
        'ConfigIi.Iitbconfwuorvqw' => 'IITBCONFWUORVQW',
        'iitbconfwuorvqw' => 'IITBCONFWUORVQW',
        'configIi.iitbconfwuorvqw' => 'IITBCONFWUORVQW',
        'ConfigIiTableMap::COL_IITBCONFWUORVQW' => 'IITBCONFWUORVQW',
        'COL_IITBCONFWUORVQW' => 'IITBCONFWUORVQW',
        'IitbConfWuOrVqw' => 'IITBCONFWUORVQW',
        'ii_config.IitbConfWuOrVqw' => 'IITBCONFWUORVQW',
        'Iitbconfqorls' => 'IITBCONFQORLS',
        'ConfigIi.Iitbconfqorls' => 'IITBCONFQORLS',
        'iitbconfqorls' => 'IITBCONFQORLS',
        'configIi.iitbconfqorls' => 'IITBCONFQORLS',
        'ConfigIiTableMap::COL_IITBCONFQORLS' => 'IITBCONFQORLS',
        'COL_IITBCONFQORLS' => 'IITBCONFQORLS',
        'IitbConfQOrLs' => 'IITBCONFQORLS',
        'ii_config.IitbConfQOrLs' => 'IITBCONFQORLS',
        'Iitbconfinqcode' => 'IITBCONFINQCODE',
        'ConfigIi.Iitbconfinqcode' => 'IITBCONFINQCODE',
        'iitbconfinqcode' => 'IITBCONFINQCODE',
        'configIi.iitbconfinqcode' => 'IITBCONFINQCODE',
        'ConfigIiTableMap::COL_IITBCONFINQCODE' => 'IITBCONFINQCODE',
        'COL_IITBCONFINQCODE' => 'IITBCONFINQCODE',
        'IitbConfInqCode' => 'IITBCONFINQCODE',
        'ii_config.IitbConfInqCode' => 'IITBCONFINQCODE',
        'Iitbconfpricsect' => 'IITBCONFPRICSECT',
        'ConfigIi.Iitbconfpricsect' => 'IITBCONFPRICSECT',
        'iitbconfpricsect' => 'IITBCONFPRICSECT',
        'configIi.iitbconfpricsect' => 'IITBCONFPRICSECT',
        'ConfigIiTableMap::COL_IITBCONFPRICSECT' => 'IITBCONFPRICSECT',
        'COL_IITBCONFPRICSECT' => 'IITBCONFPRICSECT',
        'IitbConfPricSect' => 'IITBCONFPRICSECT',
        'ii_config.IitbConfPricSect' => 'IITBCONFPRICSECT',
        'Iitbconfsrchupcalias' => 'IITBCONFSRCHUPCALIAS',
        'ConfigIi.Iitbconfsrchupcalias' => 'IITBCONFSRCHUPCALIAS',
        'iitbconfsrchupcalias' => 'IITBCONFSRCHUPCALIAS',
        'configIi.iitbconfsrchupcalias' => 'IITBCONFSRCHUPCALIAS',
        'ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS' => 'IITBCONFSRCHUPCALIAS',
        'COL_IITBCONFSRCHUPCALIAS' => 'IITBCONFSRCHUPCALIAS',
        'IitbConfSrchUpcAlias' => 'IITBCONFSRCHUPCALIAS',
        'ii_config.IitbConfSrchUpcAlias' => 'IITBCONFSRCHUPCALIAS',
        'Iitbconflotbin' => 'IITBCONFLOTBIN',
        'ConfigIi.Iitbconflotbin' => 'IITBCONFLOTBIN',
        'iitbconflotbin' => 'IITBCONFLOTBIN',
        'configIi.iitbconflotbin' => 'IITBCONFLOTBIN',
        'ConfigIiTableMap::COL_IITBCONFLOTBIN' => 'IITBCONFLOTBIN',
        'COL_IITBCONFLOTBIN' => 'IITBCONFLOTBIN',
        'IitbConfLotBin' => 'IITBCONFLOTBIN',
        'ii_config.IitbConfLotBin' => 'IITBCONFLOTBIN',
        'Iitbconfoneitem' => 'IITBCONFONEITEM',
        'ConfigIi.Iitbconfoneitem' => 'IITBCONFONEITEM',
        'iitbconfoneitem' => 'IITBCONFONEITEM',
        'configIi.iitbconfoneitem' => 'IITBCONFONEITEM',
        'ConfigIiTableMap::COL_IITBCONFONEITEM' => 'IITBCONFONEITEM',
        'COL_IITBCONFONEITEM' => 'IITBCONFONEITEM',
        'IitbConfOneItem' => 'IITBCONFONEITEM',
        'ii_config.IitbConfOneItem' => 'IITBCONFONEITEM',
        'Iitbconfitemtotals' => 'IITBCONFITEMTOTALS',
        'ConfigIi.Iitbconfitemtotals' => 'IITBCONFITEMTOTALS',
        'iitbconfitemtotals' => 'IITBCONFITEMTOTALS',
        'configIi.iitbconfitemtotals' => 'IITBCONFITEMTOTALS',
        'ConfigIiTableMap::COL_IITBCONFITEMTOTALS' => 'IITBCONFITEMTOTALS',
        'COL_IITBCONFITEMTOTALS' => 'IITBCONFITEMTOTALS',
        'IitbConfItemTotals' => 'IITBCONFITEMTOTALS',
        'ii_config.IitbConfItemTotals' => 'IITBCONFITEMTOTALS',
        'Iitbconfmonthsusage' => 'IITBCONFMONTHSUSAGE',
        'ConfigIi.Iitbconfmonthsusage' => 'IITBCONFMONTHSUSAGE',
        'iitbconfmonthsusage' => 'IITBCONFMONTHSUSAGE',
        'configIi.iitbconfmonthsusage' => 'IITBCONFMONTHSUSAGE',
        'ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE' => 'IITBCONFMONTHSUSAGE',
        'COL_IITBCONFMONTHSUSAGE' => 'IITBCONFMONTHSUSAGE',
        'IitbConfMonthsUsage' => 'IITBCONFMONTHSUSAGE',
        'ii_config.IitbConfMonthsUsage' => 'IITBCONFMONTHSUSAGE',
        'Iitbconftora' => 'IITBCONFTORA',
        'ConfigIi.Iitbconftora' => 'IITBCONFTORA',
        'iitbconftora' => 'IITBCONFTORA',
        'configIi.iitbconftora' => 'IITBCONFTORA',
        'ConfigIiTableMap::COL_IITBCONFTORA' => 'IITBCONFTORA',
        'COL_IITBCONFTORA' => 'IITBCONFTORA',
        'IitbConfTOrA' => 'IITBCONFTORA',
        'ii_config.IitbConfTOrA' => 'IITBCONFTORA',
        'Iitbconfunitcost' => 'IITBCONFUNITCOST',
        'ConfigIi.Iitbconfunitcost' => 'IITBCONFUNITCOST',
        'iitbconfunitcost' => 'IITBCONFUNITCOST',
        'configIi.iitbconfunitcost' => 'IITBCONFUNITCOST',
        'ConfigIiTableMap::COL_IITBCONFUNITCOST' => 'IITBCONFUNITCOST',
        'COL_IITBCONFUNITCOST' => 'IITBCONFUNITCOST',
        'IitbConfUnitCost' => 'IITBCONFUNITCOST',
        'ii_config.IitbConfUnitCost' => 'IITBCONFUNITCOST',
        'Iitbconfformulaoption' => 'IITBCONFFORMULAOPTION',
        'ConfigIi.Iitbconfformulaoption' => 'IITBCONFFORMULAOPTION',
        'iitbconfformulaoption' => 'IITBCONFFORMULAOPTION',
        'configIi.iitbconfformulaoption' => 'IITBCONFFORMULAOPTION',
        'ConfigIiTableMap::COL_IITBCONFFORMULAOPTION' => 'IITBCONFFORMULAOPTION',
        'COL_IITBCONFFORMULAOPTION' => 'IITBCONFFORMULAOPTION',
        'IitbConfFormulaOption' => 'IITBCONFFORMULAOPTION',
        'ii_config.IitbConfFormulaOption' => 'IITBCONFFORMULAOPTION',
        'Iitbconftranssep' => 'IITBCONFTRANSSEP',
        'ConfigIi.Iitbconftranssep' => 'IITBCONFTRANSSEP',
        'iitbconftranssep' => 'IITBCONFTRANSSEP',
        'configIi.iitbconftranssep' => 'IITBCONFTRANSSEP',
        'ConfigIiTableMap::COL_IITBCONFTRANSSEP' => 'IITBCONFTRANSSEP',
        'COL_IITBCONFTRANSSEP' => 'IITBCONFTRANSSEP',
        'IitbConfTransSep' => 'IITBCONFTRANSSEP',
        'ii_config.IitbConfTransSep' => 'IITBCONFTRANSSEP',
        'Iitbconfdispbindet' => 'IITBCONFDISPBINDET',
        'ConfigIi.Iitbconfdispbindet' => 'IITBCONFDISPBINDET',
        'iitbconfdispbindet' => 'IITBCONFDISPBINDET',
        'configIi.iitbconfdispbindet' => 'IITBCONFDISPBINDET',
        'ConfigIiTableMap::COL_IITBCONFDISPBINDET' => 'IITBCONFDISPBINDET',
        'COL_IITBCONFDISPBINDET' => 'IITBCONFDISPBINDET',
        'IitbConfDispBinDet' => 'IITBCONFDISPBINDET',
        'ii_config.IitbConfDispBinDet' => 'IITBCONFDISPBINDET',
        'Iitbconfshdateorcust' => 'IITBCONFSHDATEORCUST',
        'ConfigIi.Iitbconfshdateorcust' => 'IITBCONFSHDATEORCUST',
        'iitbconfshdateorcust' => 'IITBCONFSHDATEORCUST',
        'configIi.iitbconfshdateorcust' => 'IITBCONFSHDATEORCUST',
        'ConfigIiTableMap::COL_IITBCONFSHDATEORCUST' => 'IITBCONFSHDATEORCUST',
        'COL_IITBCONFSHDATEORCUST' => 'IITBCONFSHDATEORCUST',
        'IitbConfShDateOrCust' => 'IITBCONFSHDATEORCUST',
        'ii_config.IitbConfShDateOrCust' => 'IITBCONFSHDATEORCUST',
        'Iitbconfshzeroship' => 'IITBCONFSHZEROSHIP',
        'ConfigIi.Iitbconfshzeroship' => 'IITBCONFSHZEROSHIP',
        'iitbconfshzeroship' => 'IITBCONFSHZEROSHIP',
        'configIi.iitbconfshzeroship' => 'IITBCONFSHZEROSHIP',
        'ConfigIiTableMap::COL_IITBCONFSHZEROSHIP' => 'IITBCONFSHZEROSHIP',
        'COL_IITBCONFSHZEROSHIP' => 'IITBCONFSHZEROSHIP',
        'IitbConfShZeroShip' => 'IITBCONFSHZEROSHIP',
        'ii_config.IitbConfShZeroShip' => 'IITBCONFSHZEROSHIP',
        'Dateupdtd' => 'DATEUPDTD',
        'ConfigIi.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'configIi.dateupdtd' => 'DATEUPDTD',
        'ConfigIiTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ii_config.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ConfigIi.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'configIi.timeupdtd' => 'TIMEUPDTD',
        'ConfigIiTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ii_config.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ConfigIi.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'configIi.dummy' => 'DUMMY',
        'ConfigIiTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ii_config.dummy' => 'DUMMY',
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
        $this->setName('ii_config');
        $this->setPhpName('ConfigIi');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigIi');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IitbConfKey', 'Iitbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('IitbConfOneWhse', 'Iitbconfonewhse', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfDefWhse', 'Iitbconfdefwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbConfYtdStrtMo', 'Iitbconfytdstrtmo', 'INTEGER', false, 2, null);
        $this->addColumn('IitbConfUseCustWhse', 'Iitbconfusecustwhse', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfWuOrVqw', 'Iitbconfwuorvqw', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfQOrLs', 'Iitbconfqorls', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfInqCode', 'Iitbconfinqcode', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfPricSect', 'Iitbconfpricsect', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfSrchUpcAlias', 'Iitbconfsrchupcalias', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfLotBin', 'Iitbconflotbin', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfOneItem', 'Iitbconfoneitem', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfItemTotals', 'Iitbconfitemtotals', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfMonthsUsage', 'Iitbconfmonthsusage', 'INTEGER', false, 2, null);
        $this->addColumn('IitbConfTOrA', 'Iitbconftora', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfUnitCost', 'Iitbconfunitcost', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfFormulaOption', 'Iitbconfformulaoption', 'INTEGER', false, 2, null);
        $this->addColumn('IitbConfTransSep', 'Iitbconftranssep', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfDispBinDet', 'Iitbconfdispbindet', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfShDateOrCust', 'Iitbconfshdateorcust', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbConfShZeroShip', 'Iitbconfshzeroship', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Iitbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigIiTableMap::CLASS_DEFAULT : ConfigIiTableMap::OM_CLASS;
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
     * @return array (ConfigIi object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ConfigIiTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigIiTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigIiTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigIiTableMap::OM_CLASS;
            /** @var ConfigIi $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigIiTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigIiTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigIiTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigIi $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigIiTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFKEY);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFONEWHSE);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFDEFWHSE);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFWUORVQW);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFQORLS);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFINQCODE);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFPRICSECT);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFLOTBIN);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFONEITEM);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFITEMTOTALS);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFTORA);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFUNITCOST);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFTRANSSEP);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFDISPBINDET);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFSHDATEORCUST);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_IITBCONFSHZEROSHIP);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigIiTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IitbConfKey');
            $criteria->addSelectColumn($alias . '.IitbConfOneWhse');
            $criteria->addSelectColumn($alias . '.IitbConfDefWhse');
            $criteria->addSelectColumn($alias . '.IitbConfYtdStrtMo');
            $criteria->addSelectColumn($alias . '.IitbConfUseCustWhse');
            $criteria->addSelectColumn($alias . '.IitbConfWuOrVqw');
            $criteria->addSelectColumn($alias . '.IitbConfQOrLs');
            $criteria->addSelectColumn($alias . '.IitbConfInqCode');
            $criteria->addSelectColumn($alias . '.IitbConfPricSect');
            $criteria->addSelectColumn($alias . '.IitbConfSrchUpcAlias');
            $criteria->addSelectColumn($alias . '.IitbConfLotBin');
            $criteria->addSelectColumn($alias . '.IitbConfOneItem');
            $criteria->addSelectColumn($alias . '.IitbConfItemTotals');
            $criteria->addSelectColumn($alias . '.IitbConfMonthsUsage');
            $criteria->addSelectColumn($alias . '.IitbConfTOrA');
            $criteria->addSelectColumn($alias . '.IitbConfUnitCost');
            $criteria->addSelectColumn($alias . '.IitbConfFormulaOption');
            $criteria->addSelectColumn($alias . '.IitbConfTransSep');
            $criteria->addSelectColumn($alias . '.IitbConfDispBinDet');
            $criteria->addSelectColumn($alias . '.IitbConfShDateOrCust');
            $criteria->addSelectColumn($alias . '.IitbConfShZeroShip');
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
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFKEY);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFONEWHSE);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFDEFWHSE);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFWUORVQW);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFQORLS);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFINQCODE);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFPRICSECT);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFLOTBIN);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFONEITEM);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFITEMTOTALS);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFTORA);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFUNITCOST);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFTRANSSEP);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFDISPBINDET);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFSHDATEORCUST);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_IITBCONFSHZEROSHIP);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ConfigIiTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IitbConfKey');
            $criteria->removeSelectColumn($alias . '.IitbConfOneWhse');
            $criteria->removeSelectColumn($alias . '.IitbConfDefWhse');
            $criteria->removeSelectColumn($alias . '.IitbConfYtdStrtMo');
            $criteria->removeSelectColumn($alias . '.IitbConfUseCustWhse');
            $criteria->removeSelectColumn($alias . '.IitbConfWuOrVqw');
            $criteria->removeSelectColumn($alias . '.IitbConfQOrLs');
            $criteria->removeSelectColumn($alias . '.IitbConfInqCode');
            $criteria->removeSelectColumn($alias . '.IitbConfPricSect');
            $criteria->removeSelectColumn($alias . '.IitbConfSrchUpcAlias');
            $criteria->removeSelectColumn($alias . '.IitbConfLotBin');
            $criteria->removeSelectColumn($alias . '.IitbConfOneItem');
            $criteria->removeSelectColumn($alias . '.IitbConfItemTotals');
            $criteria->removeSelectColumn($alias . '.IitbConfMonthsUsage');
            $criteria->removeSelectColumn($alias . '.IitbConfTOrA');
            $criteria->removeSelectColumn($alias . '.IitbConfUnitCost');
            $criteria->removeSelectColumn($alias . '.IitbConfFormulaOption');
            $criteria->removeSelectColumn($alias . '.IitbConfTransSep');
            $criteria->removeSelectColumn($alias . '.IitbConfDispBinDet');
            $criteria->removeSelectColumn($alias . '.IitbConfShDateOrCust');
            $criteria->removeSelectColumn($alias . '.IitbConfShZeroShip');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigIiTableMap::DATABASE_NAME)->getTable(ConfigIiTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ConfigIi or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ConfigIi object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigIi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigIiTableMap::DATABASE_NAME);
            $criteria->add(ConfigIiTableMap::COL_IITBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigIiQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigIiTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigIiTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ii_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ConfigIiQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigIi or Criteria object.
     *
     * @param mixed $criteria Criteria or ConfigIi object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigIi object
        }


        // Set the correct dbName
        $query = ConfigIiQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
