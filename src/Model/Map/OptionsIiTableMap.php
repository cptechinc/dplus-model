<?php

namespace Map;

use \OptionsIi;
use \OptionsIiQuery;
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
 * This class defines the structure of the 'ii_options' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class OptionsIiTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.OptionsIiTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ii_options';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'OptionsIi';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\OptionsIi';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'OptionsIi';

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
     * the column name for the IitbOptnCode field
     */
    public const COL_IITBOPTNCODE = 'ii_options.IitbOptnCode';

    /**
     * the column name for the IitbOptnActAvail field
     */
    public const COL_IITBOPTNACTAVAIL = 'ii_options.IitbOptnActAvail';

    /**
     * the column name for the IitbOptnActWhse field
     */
    public const COL_IITBOPTNACTWHSE = 'ii_options.IitbOptnActWhse';

    /**
     * the column name for the IitbOptnActDet field
     */
    public const COL_IITBOPTNACTDET = 'ii_options.IitbOptnActDet';

    /**
     * the column name for the IitbOptnActDaysBack field
     */
    public const COL_IITBOPTNACTDAYSBACK = 'ii_options.IitbOptnActDaysBack';

    /**
     * the column name for the IitbOptnActStrtDate field
     */
    public const COL_IITBOPTNACTSTRTDATE = 'ii_options.IitbOptnActStrtDate';

    /**
     * the column name for the IitbOptnCostAvail field
     */
    public const COL_IITBOPTNCOSTAVAIL = 'ii_options.IitbOptnCostAvail';

    /**
     * the column name for the IitbOptnCostWhse field
     */
    public const COL_IITBOPTNCOSTWHSE = 'ii_options.IitbOptnCostWhse';

    /**
     * the column name for the IitbOptnCostDet field
     */
    public const COL_IITBOPTNCOSTDET = 'ii_options.IitbOptnCostDet';

    /**
     * the column name for the IitbOptnGenAvail field
     */
    public const COL_IITBOPTNGENAVAIL = 'ii_options.IitbOptnGenAvail';

    /**
     * the column name for the IitbOptnKtAvail field
     */
    public const COL_IITBOPTNKTAVAIL = 'ii_options.IitbOptnKtAvail';

    /**
     * the column name for the IitbOptnPricAvail field
     */
    public const COL_IITBOPTNPRICAVAIL = 'ii_options.IitbOptnPricAvail';

    /**
     * the column name for the IitbOptnPhAvail field
     */
    public const COL_IITBOPTNPHAVAIL = 'ii_options.IitbOptnPhAvail';

    /**
     * the column name for the IitbOptnPhWhse field
     */
    public const COL_IITBOPTNPHWHSE = 'ii_options.IitbOptnPhWhse';

    /**
     * the column name for the IitbOptnPhDet field
     */
    public const COL_IITBOPTNPHDET = 'ii_options.IitbOptnPhDet';

    /**
     * the column name for the IitbOptnPhDaysBack field
     */
    public const COL_IITBOPTNPHDAYSBACK = 'ii_options.IitbOptnPhDaysBack';

    /**
     * the column name for the IitbOptnPhStrtDate field
     */
    public const COL_IITBOPTNPHSTRTDATE = 'ii_options.IitbOptnPhStrtDate';

    /**
     * the column name for the IitbOptnPoAvail field
     */
    public const COL_IITBOPTNPOAVAIL = 'ii_options.IitbOptnPoAvail';

    /**
     * the column name for the IitbOptnPoWhse field
     */
    public const COL_IITBOPTNPOWHSE = 'ii_options.IitbOptnPoWhse';

    /**
     * the column name for the IitbOptnReqrAvail field
     */
    public const COL_IITBOPTNREQRAVAIL = 'ii_options.IitbOptnReqrAvail';

    /**
     * the column name for the IitbOptnReqrWhse field
     */
    public const COL_IITBOPTNREQRWHSE = 'ii_options.IitbOptnReqrWhse';

    /**
     * the column name for the IitbOptnReqrView field
     */
    public const COL_IITBOPTNREQRVIEW = 'ii_options.IitbOptnReqrView';

    /**
     * the column name for the IitbOptnShAvail field
     */
    public const COL_IITBOPTNSHAVAIL = 'ii_options.IitbOptnShAvail';

    /**
     * the column name for the IitbOptnShWhse field
     */
    public const COL_IITBOPTNSHWHSE = 'ii_options.IitbOptnShWhse';

    /**
     * the column name for the IitbOptnShDet field
     */
    public const COL_IITBOPTNSHDET = 'ii_options.IitbOptnShDet';

    /**
     * the column name for the IitbOptnShDaysBack field
     */
    public const COL_IITBOPTNSHDAYSBACK = 'ii_options.IitbOptnShDaysBack';

    /**
     * the column name for the IitbOptnShStrtDate field
     */
    public const COL_IITBOPTNSHSTRTDATE = 'ii_options.IitbOptnShStrtDate';

    /**
     * the column name for the IitbOptnSoAvail field
     */
    public const COL_IITBOPTNSOAVAIL = 'ii_options.IitbOptnSoAvail';

    /**
     * the column name for the IitbOptnSoWhse field
     */
    public const COL_IITBOPTNSOWHSE = 'ii_options.IitbOptnSoWhse';

    /**
     * the column name for the IitbOptnSerlotAvail field
     */
    public const COL_IITBOPTNSERLOTAVAIL = 'ii_options.IitbOptnSerlotAvail';

    /**
     * the column name for the IitbOptnStckAvail field
     */
    public const COL_IITBOPTNSTCKAVAIL = 'ii_options.IitbOptnStckAvail';

    /**
     * the column name for the IitbOptnStckWhse field
     */
    public const COL_IITBOPTNSTCKWHSE = 'ii_options.IitbOptnStckWhse';

    /**
     * the column name for the IitbOptnStckDet field
     */
    public const COL_IITBOPTNSTCKDET = 'ii_options.IitbOptnStckDet';

    /**
     * the column name for the IitbOptnSubsupAvail field
     */
    public const COL_IITBOPTNSUBSUPAVAIL = 'ii_options.IitbOptnSubsupAvail';

    /**
     * the column name for the IitbOptnSubsupWhse field
     */
    public const COL_IITBOPTNSUBSUPWHSE = 'ii_options.IitbOptnSubsupWhse';

    /**
     * the column name for the IitbOptnLsAvail field
     */
    public const COL_IITBOPTNLSAVAIL = 'ii_options.IitbOptnLsAvail';

    /**
     * the column name for the IitbOptnLsWhse field
     */
    public const COL_IITBOPTNLSWHSE = 'ii_options.IitbOptnLsWhse';

    /**
     * the column name for the IitbOptnDesc1Or2 field
     */
    public const COL_IITBOPTNDESC1OR2 = 'ii_options.IitbOptnDesc1Or2';

    /**
     * the column name for the IitbOptnDelCerts field
     */
    public const COL_IITBOPTNDELCERTS = 'ii_options.IitbOptnDelCerts';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ii_options.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ii_options.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ii_options.dummy';

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
        self::TYPE_PHPNAME       => ['Iitboptncode', 'Iitboptnactavail', 'Iitboptnactwhse', 'Iitboptnactdet', 'Iitboptnactdaysback', 'Iitboptnactstrtdate', 'Iitboptncostavail', 'Iitboptncostwhse', 'Iitboptncostdet', 'Iitboptngenavail', 'Iitboptnktavail', 'Iitboptnpricavail', 'Iitboptnphavail', 'Iitboptnphwhse', 'Iitboptnphdet', 'Iitboptnphdaysback', 'Iitboptnphstrtdate', 'Iitboptnpoavail', 'Iitboptnpowhse', 'Iitboptnreqravail', 'Iitboptnreqrwhse', 'Iitboptnreqrview', 'Iitboptnshavail', 'Iitboptnshwhse', 'Iitboptnshdet', 'Iitboptnshdaysback', 'Iitboptnshstrtdate', 'Iitboptnsoavail', 'Iitboptnsowhse', 'Iitboptnserlotavail', 'Iitboptnstckavail', 'Iitboptnstckwhse', 'Iitboptnstckdet', 'Iitboptnsubsupavail', 'Iitboptnsubsupwhse', 'Iitboptnlsavail', 'Iitboptnlswhse', 'Iitboptndesc1or2', 'Iitboptndelcerts', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['iitboptncode', 'iitboptnactavail', 'iitboptnactwhse', 'iitboptnactdet', 'iitboptnactdaysback', 'iitboptnactstrtdate', 'iitboptncostavail', 'iitboptncostwhse', 'iitboptncostdet', 'iitboptngenavail', 'iitboptnktavail', 'iitboptnpricavail', 'iitboptnphavail', 'iitboptnphwhse', 'iitboptnphdet', 'iitboptnphdaysback', 'iitboptnphstrtdate', 'iitboptnpoavail', 'iitboptnpowhse', 'iitboptnreqravail', 'iitboptnreqrwhse', 'iitboptnreqrview', 'iitboptnshavail', 'iitboptnshwhse', 'iitboptnshdet', 'iitboptnshdaysback', 'iitboptnshstrtdate', 'iitboptnsoavail', 'iitboptnsowhse', 'iitboptnserlotavail', 'iitboptnstckavail', 'iitboptnstckwhse', 'iitboptnstckdet', 'iitboptnsubsupavail', 'iitboptnsubsupwhse', 'iitboptnlsavail', 'iitboptnlswhse', 'iitboptndesc1or2', 'iitboptndelcerts', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [OptionsIiTableMap::COL_IITBOPTNCODE, OptionsIiTableMap::COL_IITBOPTNACTAVAIL, OptionsIiTableMap::COL_IITBOPTNACTWHSE, OptionsIiTableMap::COL_IITBOPTNACTDET, OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK, OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE, OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL, OptionsIiTableMap::COL_IITBOPTNCOSTWHSE, OptionsIiTableMap::COL_IITBOPTNCOSTDET, OptionsIiTableMap::COL_IITBOPTNGENAVAIL, OptionsIiTableMap::COL_IITBOPTNKTAVAIL, OptionsIiTableMap::COL_IITBOPTNPRICAVAIL, OptionsIiTableMap::COL_IITBOPTNPHAVAIL, OptionsIiTableMap::COL_IITBOPTNPHWHSE, OptionsIiTableMap::COL_IITBOPTNPHDET, OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK, OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE, OptionsIiTableMap::COL_IITBOPTNPOAVAIL, OptionsIiTableMap::COL_IITBOPTNPOWHSE, OptionsIiTableMap::COL_IITBOPTNREQRAVAIL, OptionsIiTableMap::COL_IITBOPTNREQRWHSE, OptionsIiTableMap::COL_IITBOPTNREQRVIEW, OptionsIiTableMap::COL_IITBOPTNSHAVAIL, OptionsIiTableMap::COL_IITBOPTNSHWHSE, OptionsIiTableMap::COL_IITBOPTNSHDET, OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK, OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE, OptionsIiTableMap::COL_IITBOPTNSOAVAIL, OptionsIiTableMap::COL_IITBOPTNSOWHSE, OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL, OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL, OptionsIiTableMap::COL_IITBOPTNSTCKWHSE, OptionsIiTableMap::COL_IITBOPTNSTCKDET, OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL, OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE, OptionsIiTableMap::COL_IITBOPTNLSAVAIL, OptionsIiTableMap::COL_IITBOPTNLSWHSE, OptionsIiTableMap::COL_IITBOPTNDESC1OR2, OptionsIiTableMap::COL_IITBOPTNDELCERTS, OptionsIiTableMap::COL_DATEUPDTD, OptionsIiTableMap::COL_TIMEUPDTD, OptionsIiTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IitbOptnCode', 'IitbOptnActAvail', 'IitbOptnActWhse', 'IitbOptnActDet', 'IitbOptnActDaysBack', 'IitbOptnActStrtDate', 'IitbOptnCostAvail', 'IitbOptnCostWhse', 'IitbOptnCostDet', 'IitbOptnGenAvail', 'IitbOptnKtAvail', 'IitbOptnPricAvail', 'IitbOptnPhAvail', 'IitbOptnPhWhse', 'IitbOptnPhDet', 'IitbOptnPhDaysBack', 'IitbOptnPhStrtDate', 'IitbOptnPoAvail', 'IitbOptnPoWhse', 'IitbOptnReqrAvail', 'IitbOptnReqrWhse', 'IitbOptnReqrView', 'IitbOptnShAvail', 'IitbOptnShWhse', 'IitbOptnShDet', 'IitbOptnShDaysBack', 'IitbOptnShStrtDate', 'IitbOptnSoAvail', 'IitbOptnSoWhse', 'IitbOptnSerlotAvail', 'IitbOptnStckAvail', 'IitbOptnStckWhse', 'IitbOptnStckDet', 'IitbOptnSubsupAvail', 'IitbOptnSubsupWhse', 'IitbOptnLsAvail', 'IitbOptnLsWhse', 'IitbOptnDesc1Or2', 'IitbOptnDelCerts', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Iitboptncode' => 0, 'Iitboptnactavail' => 1, 'Iitboptnactwhse' => 2, 'Iitboptnactdet' => 3, 'Iitboptnactdaysback' => 4, 'Iitboptnactstrtdate' => 5, 'Iitboptncostavail' => 6, 'Iitboptncostwhse' => 7, 'Iitboptncostdet' => 8, 'Iitboptngenavail' => 9, 'Iitboptnktavail' => 10, 'Iitboptnpricavail' => 11, 'Iitboptnphavail' => 12, 'Iitboptnphwhse' => 13, 'Iitboptnphdet' => 14, 'Iitboptnphdaysback' => 15, 'Iitboptnphstrtdate' => 16, 'Iitboptnpoavail' => 17, 'Iitboptnpowhse' => 18, 'Iitboptnreqravail' => 19, 'Iitboptnreqrwhse' => 20, 'Iitboptnreqrview' => 21, 'Iitboptnshavail' => 22, 'Iitboptnshwhse' => 23, 'Iitboptnshdet' => 24, 'Iitboptnshdaysback' => 25, 'Iitboptnshstrtdate' => 26, 'Iitboptnsoavail' => 27, 'Iitboptnsowhse' => 28, 'Iitboptnserlotavail' => 29, 'Iitboptnstckavail' => 30, 'Iitboptnstckwhse' => 31, 'Iitboptnstckdet' => 32, 'Iitboptnsubsupavail' => 33, 'Iitboptnsubsupwhse' => 34, 'Iitboptnlsavail' => 35, 'Iitboptnlswhse' => 36, 'Iitboptndesc1or2' => 37, 'Iitboptndelcerts' => 38, 'Dateupdtd' => 39, 'Timeupdtd' => 40, 'Dummy' => 41, ],
        self::TYPE_CAMELNAME     => ['iitboptncode' => 0, 'iitboptnactavail' => 1, 'iitboptnactwhse' => 2, 'iitboptnactdet' => 3, 'iitboptnactdaysback' => 4, 'iitboptnactstrtdate' => 5, 'iitboptncostavail' => 6, 'iitboptncostwhse' => 7, 'iitboptncostdet' => 8, 'iitboptngenavail' => 9, 'iitboptnktavail' => 10, 'iitboptnpricavail' => 11, 'iitboptnphavail' => 12, 'iitboptnphwhse' => 13, 'iitboptnphdet' => 14, 'iitboptnphdaysback' => 15, 'iitboptnphstrtdate' => 16, 'iitboptnpoavail' => 17, 'iitboptnpowhse' => 18, 'iitboptnreqravail' => 19, 'iitboptnreqrwhse' => 20, 'iitboptnreqrview' => 21, 'iitboptnshavail' => 22, 'iitboptnshwhse' => 23, 'iitboptnshdet' => 24, 'iitboptnshdaysback' => 25, 'iitboptnshstrtdate' => 26, 'iitboptnsoavail' => 27, 'iitboptnsowhse' => 28, 'iitboptnserlotavail' => 29, 'iitboptnstckavail' => 30, 'iitboptnstckwhse' => 31, 'iitboptnstckdet' => 32, 'iitboptnsubsupavail' => 33, 'iitboptnsubsupwhse' => 34, 'iitboptnlsavail' => 35, 'iitboptnlswhse' => 36, 'iitboptndesc1or2' => 37, 'iitboptndelcerts' => 38, 'dateupdtd' => 39, 'timeupdtd' => 40, 'dummy' => 41, ],
        self::TYPE_COLNAME       => [OptionsIiTableMap::COL_IITBOPTNCODE => 0, OptionsIiTableMap::COL_IITBOPTNACTAVAIL => 1, OptionsIiTableMap::COL_IITBOPTNACTWHSE => 2, OptionsIiTableMap::COL_IITBOPTNACTDET => 3, OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK => 4, OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE => 5, OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL => 6, OptionsIiTableMap::COL_IITBOPTNCOSTWHSE => 7, OptionsIiTableMap::COL_IITBOPTNCOSTDET => 8, OptionsIiTableMap::COL_IITBOPTNGENAVAIL => 9, OptionsIiTableMap::COL_IITBOPTNKTAVAIL => 10, OptionsIiTableMap::COL_IITBOPTNPRICAVAIL => 11, OptionsIiTableMap::COL_IITBOPTNPHAVAIL => 12, OptionsIiTableMap::COL_IITBOPTNPHWHSE => 13, OptionsIiTableMap::COL_IITBOPTNPHDET => 14, OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK => 15, OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE => 16, OptionsIiTableMap::COL_IITBOPTNPOAVAIL => 17, OptionsIiTableMap::COL_IITBOPTNPOWHSE => 18, OptionsIiTableMap::COL_IITBOPTNREQRAVAIL => 19, OptionsIiTableMap::COL_IITBOPTNREQRWHSE => 20, OptionsIiTableMap::COL_IITBOPTNREQRVIEW => 21, OptionsIiTableMap::COL_IITBOPTNSHAVAIL => 22, OptionsIiTableMap::COL_IITBOPTNSHWHSE => 23, OptionsIiTableMap::COL_IITBOPTNSHDET => 24, OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK => 25, OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE => 26, OptionsIiTableMap::COL_IITBOPTNSOAVAIL => 27, OptionsIiTableMap::COL_IITBOPTNSOWHSE => 28, OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL => 29, OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL => 30, OptionsIiTableMap::COL_IITBOPTNSTCKWHSE => 31, OptionsIiTableMap::COL_IITBOPTNSTCKDET => 32, OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL => 33, OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE => 34, OptionsIiTableMap::COL_IITBOPTNLSAVAIL => 35, OptionsIiTableMap::COL_IITBOPTNLSWHSE => 36, OptionsIiTableMap::COL_IITBOPTNDESC1OR2 => 37, OptionsIiTableMap::COL_IITBOPTNDELCERTS => 38, OptionsIiTableMap::COL_DATEUPDTD => 39, OptionsIiTableMap::COL_TIMEUPDTD => 40, OptionsIiTableMap::COL_DUMMY => 41, ],
        self::TYPE_FIELDNAME     => ['IitbOptnCode' => 0, 'IitbOptnActAvail' => 1, 'IitbOptnActWhse' => 2, 'IitbOptnActDet' => 3, 'IitbOptnActDaysBack' => 4, 'IitbOptnActStrtDate' => 5, 'IitbOptnCostAvail' => 6, 'IitbOptnCostWhse' => 7, 'IitbOptnCostDet' => 8, 'IitbOptnGenAvail' => 9, 'IitbOptnKtAvail' => 10, 'IitbOptnPricAvail' => 11, 'IitbOptnPhAvail' => 12, 'IitbOptnPhWhse' => 13, 'IitbOptnPhDet' => 14, 'IitbOptnPhDaysBack' => 15, 'IitbOptnPhStrtDate' => 16, 'IitbOptnPoAvail' => 17, 'IitbOptnPoWhse' => 18, 'IitbOptnReqrAvail' => 19, 'IitbOptnReqrWhse' => 20, 'IitbOptnReqrView' => 21, 'IitbOptnShAvail' => 22, 'IitbOptnShWhse' => 23, 'IitbOptnShDet' => 24, 'IitbOptnShDaysBack' => 25, 'IitbOptnShStrtDate' => 26, 'IitbOptnSoAvail' => 27, 'IitbOptnSoWhse' => 28, 'IitbOptnSerlotAvail' => 29, 'IitbOptnStckAvail' => 30, 'IitbOptnStckWhse' => 31, 'IitbOptnStckDet' => 32, 'IitbOptnSubsupAvail' => 33, 'IitbOptnSubsupWhse' => 34, 'IitbOptnLsAvail' => 35, 'IitbOptnLsWhse' => 36, 'IitbOptnDesc1Or2' => 37, 'IitbOptnDelCerts' => 38, 'DateUpdtd' => 39, 'TimeUpdtd' => 40, 'dummy' => 41, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Iitboptncode' => 'IITBOPTNCODE',
        'OptionsIi.Iitboptncode' => 'IITBOPTNCODE',
        'iitboptncode' => 'IITBOPTNCODE',
        'optionsIi.iitboptncode' => 'IITBOPTNCODE',
        'OptionsIiTableMap::COL_IITBOPTNCODE' => 'IITBOPTNCODE',
        'COL_IITBOPTNCODE' => 'IITBOPTNCODE',
        'IitbOptnCode' => 'IITBOPTNCODE',
        'ii_options.IitbOptnCode' => 'IITBOPTNCODE',
        'Iitboptnactavail' => 'IITBOPTNACTAVAIL',
        'OptionsIi.Iitboptnactavail' => 'IITBOPTNACTAVAIL',
        'iitboptnactavail' => 'IITBOPTNACTAVAIL',
        'optionsIi.iitboptnactavail' => 'IITBOPTNACTAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNACTAVAIL' => 'IITBOPTNACTAVAIL',
        'COL_IITBOPTNACTAVAIL' => 'IITBOPTNACTAVAIL',
        'IitbOptnActAvail' => 'IITBOPTNACTAVAIL',
        'ii_options.IitbOptnActAvail' => 'IITBOPTNACTAVAIL',
        'Iitboptnactwhse' => 'IITBOPTNACTWHSE',
        'OptionsIi.Iitboptnactwhse' => 'IITBOPTNACTWHSE',
        'iitboptnactwhse' => 'IITBOPTNACTWHSE',
        'optionsIi.iitboptnactwhse' => 'IITBOPTNACTWHSE',
        'OptionsIiTableMap::COL_IITBOPTNACTWHSE' => 'IITBOPTNACTWHSE',
        'COL_IITBOPTNACTWHSE' => 'IITBOPTNACTWHSE',
        'IitbOptnActWhse' => 'IITBOPTNACTWHSE',
        'ii_options.IitbOptnActWhse' => 'IITBOPTNACTWHSE',
        'Iitboptnactdet' => 'IITBOPTNACTDET',
        'OptionsIi.Iitboptnactdet' => 'IITBOPTNACTDET',
        'iitboptnactdet' => 'IITBOPTNACTDET',
        'optionsIi.iitboptnactdet' => 'IITBOPTNACTDET',
        'OptionsIiTableMap::COL_IITBOPTNACTDET' => 'IITBOPTNACTDET',
        'COL_IITBOPTNACTDET' => 'IITBOPTNACTDET',
        'IitbOptnActDet' => 'IITBOPTNACTDET',
        'ii_options.IitbOptnActDet' => 'IITBOPTNACTDET',
        'Iitboptnactdaysback' => 'IITBOPTNACTDAYSBACK',
        'OptionsIi.Iitboptnactdaysback' => 'IITBOPTNACTDAYSBACK',
        'iitboptnactdaysback' => 'IITBOPTNACTDAYSBACK',
        'optionsIi.iitboptnactdaysback' => 'IITBOPTNACTDAYSBACK',
        'OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK' => 'IITBOPTNACTDAYSBACK',
        'COL_IITBOPTNACTDAYSBACK' => 'IITBOPTNACTDAYSBACK',
        'IitbOptnActDaysBack' => 'IITBOPTNACTDAYSBACK',
        'ii_options.IitbOptnActDaysBack' => 'IITBOPTNACTDAYSBACK',
        'Iitboptnactstrtdate' => 'IITBOPTNACTSTRTDATE',
        'OptionsIi.Iitboptnactstrtdate' => 'IITBOPTNACTSTRTDATE',
        'iitboptnactstrtdate' => 'IITBOPTNACTSTRTDATE',
        'optionsIi.iitboptnactstrtdate' => 'IITBOPTNACTSTRTDATE',
        'OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE' => 'IITBOPTNACTSTRTDATE',
        'COL_IITBOPTNACTSTRTDATE' => 'IITBOPTNACTSTRTDATE',
        'IitbOptnActStrtDate' => 'IITBOPTNACTSTRTDATE',
        'ii_options.IitbOptnActStrtDate' => 'IITBOPTNACTSTRTDATE',
        'Iitboptncostavail' => 'IITBOPTNCOSTAVAIL',
        'OptionsIi.Iitboptncostavail' => 'IITBOPTNCOSTAVAIL',
        'iitboptncostavail' => 'IITBOPTNCOSTAVAIL',
        'optionsIi.iitboptncostavail' => 'IITBOPTNCOSTAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL' => 'IITBOPTNCOSTAVAIL',
        'COL_IITBOPTNCOSTAVAIL' => 'IITBOPTNCOSTAVAIL',
        'IitbOptnCostAvail' => 'IITBOPTNCOSTAVAIL',
        'ii_options.IitbOptnCostAvail' => 'IITBOPTNCOSTAVAIL',
        'Iitboptncostwhse' => 'IITBOPTNCOSTWHSE',
        'OptionsIi.Iitboptncostwhse' => 'IITBOPTNCOSTWHSE',
        'iitboptncostwhse' => 'IITBOPTNCOSTWHSE',
        'optionsIi.iitboptncostwhse' => 'IITBOPTNCOSTWHSE',
        'OptionsIiTableMap::COL_IITBOPTNCOSTWHSE' => 'IITBOPTNCOSTWHSE',
        'COL_IITBOPTNCOSTWHSE' => 'IITBOPTNCOSTWHSE',
        'IitbOptnCostWhse' => 'IITBOPTNCOSTWHSE',
        'ii_options.IitbOptnCostWhse' => 'IITBOPTNCOSTWHSE',
        'Iitboptncostdet' => 'IITBOPTNCOSTDET',
        'OptionsIi.Iitboptncostdet' => 'IITBOPTNCOSTDET',
        'iitboptncostdet' => 'IITBOPTNCOSTDET',
        'optionsIi.iitboptncostdet' => 'IITBOPTNCOSTDET',
        'OptionsIiTableMap::COL_IITBOPTNCOSTDET' => 'IITBOPTNCOSTDET',
        'COL_IITBOPTNCOSTDET' => 'IITBOPTNCOSTDET',
        'IitbOptnCostDet' => 'IITBOPTNCOSTDET',
        'ii_options.IitbOptnCostDet' => 'IITBOPTNCOSTDET',
        'Iitboptngenavail' => 'IITBOPTNGENAVAIL',
        'OptionsIi.Iitboptngenavail' => 'IITBOPTNGENAVAIL',
        'iitboptngenavail' => 'IITBOPTNGENAVAIL',
        'optionsIi.iitboptngenavail' => 'IITBOPTNGENAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNGENAVAIL' => 'IITBOPTNGENAVAIL',
        'COL_IITBOPTNGENAVAIL' => 'IITBOPTNGENAVAIL',
        'IitbOptnGenAvail' => 'IITBOPTNGENAVAIL',
        'ii_options.IitbOptnGenAvail' => 'IITBOPTNGENAVAIL',
        'Iitboptnktavail' => 'IITBOPTNKTAVAIL',
        'OptionsIi.Iitboptnktavail' => 'IITBOPTNKTAVAIL',
        'iitboptnktavail' => 'IITBOPTNKTAVAIL',
        'optionsIi.iitboptnktavail' => 'IITBOPTNKTAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNKTAVAIL' => 'IITBOPTNKTAVAIL',
        'COL_IITBOPTNKTAVAIL' => 'IITBOPTNKTAVAIL',
        'IitbOptnKtAvail' => 'IITBOPTNKTAVAIL',
        'ii_options.IitbOptnKtAvail' => 'IITBOPTNKTAVAIL',
        'Iitboptnpricavail' => 'IITBOPTNPRICAVAIL',
        'OptionsIi.Iitboptnpricavail' => 'IITBOPTNPRICAVAIL',
        'iitboptnpricavail' => 'IITBOPTNPRICAVAIL',
        'optionsIi.iitboptnpricavail' => 'IITBOPTNPRICAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNPRICAVAIL' => 'IITBOPTNPRICAVAIL',
        'COL_IITBOPTNPRICAVAIL' => 'IITBOPTNPRICAVAIL',
        'IitbOptnPricAvail' => 'IITBOPTNPRICAVAIL',
        'ii_options.IitbOptnPricAvail' => 'IITBOPTNPRICAVAIL',
        'Iitboptnphavail' => 'IITBOPTNPHAVAIL',
        'OptionsIi.Iitboptnphavail' => 'IITBOPTNPHAVAIL',
        'iitboptnphavail' => 'IITBOPTNPHAVAIL',
        'optionsIi.iitboptnphavail' => 'IITBOPTNPHAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNPHAVAIL' => 'IITBOPTNPHAVAIL',
        'COL_IITBOPTNPHAVAIL' => 'IITBOPTNPHAVAIL',
        'IitbOptnPhAvail' => 'IITBOPTNPHAVAIL',
        'ii_options.IitbOptnPhAvail' => 'IITBOPTNPHAVAIL',
        'Iitboptnphwhse' => 'IITBOPTNPHWHSE',
        'OptionsIi.Iitboptnphwhse' => 'IITBOPTNPHWHSE',
        'iitboptnphwhse' => 'IITBOPTNPHWHSE',
        'optionsIi.iitboptnphwhse' => 'IITBOPTNPHWHSE',
        'OptionsIiTableMap::COL_IITBOPTNPHWHSE' => 'IITBOPTNPHWHSE',
        'COL_IITBOPTNPHWHSE' => 'IITBOPTNPHWHSE',
        'IitbOptnPhWhse' => 'IITBOPTNPHWHSE',
        'ii_options.IitbOptnPhWhse' => 'IITBOPTNPHWHSE',
        'Iitboptnphdet' => 'IITBOPTNPHDET',
        'OptionsIi.Iitboptnphdet' => 'IITBOPTNPHDET',
        'iitboptnphdet' => 'IITBOPTNPHDET',
        'optionsIi.iitboptnphdet' => 'IITBOPTNPHDET',
        'OptionsIiTableMap::COL_IITBOPTNPHDET' => 'IITBOPTNPHDET',
        'COL_IITBOPTNPHDET' => 'IITBOPTNPHDET',
        'IitbOptnPhDet' => 'IITBOPTNPHDET',
        'ii_options.IitbOptnPhDet' => 'IITBOPTNPHDET',
        'Iitboptnphdaysback' => 'IITBOPTNPHDAYSBACK',
        'OptionsIi.Iitboptnphdaysback' => 'IITBOPTNPHDAYSBACK',
        'iitboptnphdaysback' => 'IITBOPTNPHDAYSBACK',
        'optionsIi.iitboptnphdaysback' => 'IITBOPTNPHDAYSBACK',
        'OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK' => 'IITBOPTNPHDAYSBACK',
        'COL_IITBOPTNPHDAYSBACK' => 'IITBOPTNPHDAYSBACK',
        'IitbOptnPhDaysBack' => 'IITBOPTNPHDAYSBACK',
        'ii_options.IitbOptnPhDaysBack' => 'IITBOPTNPHDAYSBACK',
        'Iitboptnphstrtdate' => 'IITBOPTNPHSTRTDATE',
        'OptionsIi.Iitboptnphstrtdate' => 'IITBOPTNPHSTRTDATE',
        'iitboptnphstrtdate' => 'IITBOPTNPHSTRTDATE',
        'optionsIi.iitboptnphstrtdate' => 'IITBOPTNPHSTRTDATE',
        'OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE' => 'IITBOPTNPHSTRTDATE',
        'COL_IITBOPTNPHSTRTDATE' => 'IITBOPTNPHSTRTDATE',
        'IitbOptnPhStrtDate' => 'IITBOPTNPHSTRTDATE',
        'ii_options.IitbOptnPhStrtDate' => 'IITBOPTNPHSTRTDATE',
        'Iitboptnpoavail' => 'IITBOPTNPOAVAIL',
        'OptionsIi.Iitboptnpoavail' => 'IITBOPTNPOAVAIL',
        'iitboptnpoavail' => 'IITBOPTNPOAVAIL',
        'optionsIi.iitboptnpoavail' => 'IITBOPTNPOAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNPOAVAIL' => 'IITBOPTNPOAVAIL',
        'COL_IITBOPTNPOAVAIL' => 'IITBOPTNPOAVAIL',
        'IitbOptnPoAvail' => 'IITBOPTNPOAVAIL',
        'ii_options.IitbOptnPoAvail' => 'IITBOPTNPOAVAIL',
        'Iitboptnpowhse' => 'IITBOPTNPOWHSE',
        'OptionsIi.Iitboptnpowhse' => 'IITBOPTNPOWHSE',
        'iitboptnpowhse' => 'IITBOPTNPOWHSE',
        'optionsIi.iitboptnpowhse' => 'IITBOPTNPOWHSE',
        'OptionsIiTableMap::COL_IITBOPTNPOWHSE' => 'IITBOPTNPOWHSE',
        'COL_IITBOPTNPOWHSE' => 'IITBOPTNPOWHSE',
        'IitbOptnPoWhse' => 'IITBOPTNPOWHSE',
        'ii_options.IitbOptnPoWhse' => 'IITBOPTNPOWHSE',
        'Iitboptnreqravail' => 'IITBOPTNREQRAVAIL',
        'OptionsIi.Iitboptnreqravail' => 'IITBOPTNREQRAVAIL',
        'iitboptnreqravail' => 'IITBOPTNREQRAVAIL',
        'optionsIi.iitboptnreqravail' => 'IITBOPTNREQRAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNREQRAVAIL' => 'IITBOPTNREQRAVAIL',
        'COL_IITBOPTNREQRAVAIL' => 'IITBOPTNREQRAVAIL',
        'IitbOptnReqrAvail' => 'IITBOPTNREQRAVAIL',
        'ii_options.IitbOptnReqrAvail' => 'IITBOPTNREQRAVAIL',
        'Iitboptnreqrwhse' => 'IITBOPTNREQRWHSE',
        'OptionsIi.Iitboptnreqrwhse' => 'IITBOPTNREQRWHSE',
        'iitboptnreqrwhse' => 'IITBOPTNREQRWHSE',
        'optionsIi.iitboptnreqrwhse' => 'IITBOPTNREQRWHSE',
        'OptionsIiTableMap::COL_IITBOPTNREQRWHSE' => 'IITBOPTNREQRWHSE',
        'COL_IITBOPTNREQRWHSE' => 'IITBOPTNREQRWHSE',
        'IitbOptnReqrWhse' => 'IITBOPTNREQRWHSE',
        'ii_options.IitbOptnReqrWhse' => 'IITBOPTNREQRWHSE',
        'Iitboptnreqrview' => 'IITBOPTNREQRVIEW',
        'OptionsIi.Iitboptnreqrview' => 'IITBOPTNREQRVIEW',
        'iitboptnreqrview' => 'IITBOPTNREQRVIEW',
        'optionsIi.iitboptnreqrview' => 'IITBOPTNREQRVIEW',
        'OptionsIiTableMap::COL_IITBOPTNREQRVIEW' => 'IITBOPTNREQRVIEW',
        'COL_IITBOPTNREQRVIEW' => 'IITBOPTNREQRVIEW',
        'IitbOptnReqrView' => 'IITBOPTNREQRVIEW',
        'ii_options.IitbOptnReqrView' => 'IITBOPTNREQRVIEW',
        'Iitboptnshavail' => 'IITBOPTNSHAVAIL',
        'OptionsIi.Iitboptnshavail' => 'IITBOPTNSHAVAIL',
        'iitboptnshavail' => 'IITBOPTNSHAVAIL',
        'optionsIi.iitboptnshavail' => 'IITBOPTNSHAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNSHAVAIL' => 'IITBOPTNSHAVAIL',
        'COL_IITBOPTNSHAVAIL' => 'IITBOPTNSHAVAIL',
        'IitbOptnShAvail' => 'IITBOPTNSHAVAIL',
        'ii_options.IitbOptnShAvail' => 'IITBOPTNSHAVAIL',
        'Iitboptnshwhse' => 'IITBOPTNSHWHSE',
        'OptionsIi.Iitboptnshwhse' => 'IITBOPTNSHWHSE',
        'iitboptnshwhse' => 'IITBOPTNSHWHSE',
        'optionsIi.iitboptnshwhse' => 'IITBOPTNSHWHSE',
        'OptionsIiTableMap::COL_IITBOPTNSHWHSE' => 'IITBOPTNSHWHSE',
        'COL_IITBOPTNSHWHSE' => 'IITBOPTNSHWHSE',
        'IitbOptnShWhse' => 'IITBOPTNSHWHSE',
        'ii_options.IitbOptnShWhse' => 'IITBOPTNSHWHSE',
        'Iitboptnshdet' => 'IITBOPTNSHDET',
        'OptionsIi.Iitboptnshdet' => 'IITBOPTNSHDET',
        'iitboptnshdet' => 'IITBOPTNSHDET',
        'optionsIi.iitboptnshdet' => 'IITBOPTNSHDET',
        'OptionsIiTableMap::COL_IITBOPTNSHDET' => 'IITBOPTNSHDET',
        'COL_IITBOPTNSHDET' => 'IITBOPTNSHDET',
        'IitbOptnShDet' => 'IITBOPTNSHDET',
        'ii_options.IitbOptnShDet' => 'IITBOPTNSHDET',
        'Iitboptnshdaysback' => 'IITBOPTNSHDAYSBACK',
        'OptionsIi.Iitboptnshdaysback' => 'IITBOPTNSHDAYSBACK',
        'iitboptnshdaysback' => 'IITBOPTNSHDAYSBACK',
        'optionsIi.iitboptnshdaysback' => 'IITBOPTNSHDAYSBACK',
        'OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK' => 'IITBOPTNSHDAYSBACK',
        'COL_IITBOPTNSHDAYSBACK' => 'IITBOPTNSHDAYSBACK',
        'IitbOptnShDaysBack' => 'IITBOPTNSHDAYSBACK',
        'ii_options.IitbOptnShDaysBack' => 'IITBOPTNSHDAYSBACK',
        'Iitboptnshstrtdate' => 'IITBOPTNSHSTRTDATE',
        'OptionsIi.Iitboptnshstrtdate' => 'IITBOPTNSHSTRTDATE',
        'iitboptnshstrtdate' => 'IITBOPTNSHSTRTDATE',
        'optionsIi.iitboptnshstrtdate' => 'IITBOPTNSHSTRTDATE',
        'OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE' => 'IITBOPTNSHSTRTDATE',
        'COL_IITBOPTNSHSTRTDATE' => 'IITBOPTNSHSTRTDATE',
        'IitbOptnShStrtDate' => 'IITBOPTNSHSTRTDATE',
        'ii_options.IitbOptnShStrtDate' => 'IITBOPTNSHSTRTDATE',
        'Iitboptnsoavail' => 'IITBOPTNSOAVAIL',
        'OptionsIi.Iitboptnsoavail' => 'IITBOPTNSOAVAIL',
        'iitboptnsoavail' => 'IITBOPTNSOAVAIL',
        'optionsIi.iitboptnsoavail' => 'IITBOPTNSOAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNSOAVAIL' => 'IITBOPTNSOAVAIL',
        'COL_IITBOPTNSOAVAIL' => 'IITBOPTNSOAVAIL',
        'IitbOptnSoAvail' => 'IITBOPTNSOAVAIL',
        'ii_options.IitbOptnSoAvail' => 'IITBOPTNSOAVAIL',
        'Iitboptnsowhse' => 'IITBOPTNSOWHSE',
        'OptionsIi.Iitboptnsowhse' => 'IITBOPTNSOWHSE',
        'iitboptnsowhse' => 'IITBOPTNSOWHSE',
        'optionsIi.iitboptnsowhse' => 'IITBOPTNSOWHSE',
        'OptionsIiTableMap::COL_IITBOPTNSOWHSE' => 'IITBOPTNSOWHSE',
        'COL_IITBOPTNSOWHSE' => 'IITBOPTNSOWHSE',
        'IitbOptnSoWhse' => 'IITBOPTNSOWHSE',
        'ii_options.IitbOptnSoWhse' => 'IITBOPTNSOWHSE',
        'Iitboptnserlotavail' => 'IITBOPTNSERLOTAVAIL',
        'OptionsIi.Iitboptnserlotavail' => 'IITBOPTNSERLOTAVAIL',
        'iitboptnserlotavail' => 'IITBOPTNSERLOTAVAIL',
        'optionsIi.iitboptnserlotavail' => 'IITBOPTNSERLOTAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL' => 'IITBOPTNSERLOTAVAIL',
        'COL_IITBOPTNSERLOTAVAIL' => 'IITBOPTNSERLOTAVAIL',
        'IitbOptnSerlotAvail' => 'IITBOPTNSERLOTAVAIL',
        'ii_options.IitbOptnSerlotAvail' => 'IITBOPTNSERLOTAVAIL',
        'Iitboptnstckavail' => 'IITBOPTNSTCKAVAIL',
        'OptionsIi.Iitboptnstckavail' => 'IITBOPTNSTCKAVAIL',
        'iitboptnstckavail' => 'IITBOPTNSTCKAVAIL',
        'optionsIi.iitboptnstckavail' => 'IITBOPTNSTCKAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL' => 'IITBOPTNSTCKAVAIL',
        'COL_IITBOPTNSTCKAVAIL' => 'IITBOPTNSTCKAVAIL',
        'IitbOptnStckAvail' => 'IITBOPTNSTCKAVAIL',
        'ii_options.IitbOptnStckAvail' => 'IITBOPTNSTCKAVAIL',
        'Iitboptnstckwhse' => 'IITBOPTNSTCKWHSE',
        'OptionsIi.Iitboptnstckwhse' => 'IITBOPTNSTCKWHSE',
        'iitboptnstckwhse' => 'IITBOPTNSTCKWHSE',
        'optionsIi.iitboptnstckwhse' => 'IITBOPTNSTCKWHSE',
        'OptionsIiTableMap::COL_IITBOPTNSTCKWHSE' => 'IITBOPTNSTCKWHSE',
        'COL_IITBOPTNSTCKWHSE' => 'IITBOPTNSTCKWHSE',
        'IitbOptnStckWhse' => 'IITBOPTNSTCKWHSE',
        'ii_options.IitbOptnStckWhse' => 'IITBOPTNSTCKWHSE',
        'Iitboptnstckdet' => 'IITBOPTNSTCKDET',
        'OptionsIi.Iitboptnstckdet' => 'IITBOPTNSTCKDET',
        'iitboptnstckdet' => 'IITBOPTNSTCKDET',
        'optionsIi.iitboptnstckdet' => 'IITBOPTNSTCKDET',
        'OptionsIiTableMap::COL_IITBOPTNSTCKDET' => 'IITBOPTNSTCKDET',
        'COL_IITBOPTNSTCKDET' => 'IITBOPTNSTCKDET',
        'IitbOptnStckDet' => 'IITBOPTNSTCKDET',
        'ii_options.IitbOptnStckDet' => 'IITBOPTNSTCKDET',
        'Iitboptnsubsupavail' => 'IITBOPTNSUBSUPAVAIL',
        'OptionsIi.Iitboptnsubsupavail' => 'IITBOPTNSUBSUPAVAIL',
        'iitboptnsubsupavail' => 'IITBOPTNSUBSUPAVAIL',
        'optionsIi.iitboptnsubsupavail' => 'IITBOPTNSUBSUPAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL' => 'IITBOPTNSUBSUPAVAIL',
        'COL_IITBOPTNSUBSUPAVAIL' => 'IITBOPTNSUBSUPAVAIL',
        'IitbOptnSubsupAvail' => 'IITBOPTNSUBSUPAVAIL',
        'ii_options.IitbOptnSubsupAvail' => 'IITBOPTNSUBSUPAVAIL',
        'Iitboptnsubsupwhse' => 'IITBOPTNSUBSUPWHSE',
        'OptionsIi.Iitboptnsubsupwhse' => 'IITBOPTNSUBSUPWHSE',
        'iitboptnsubsupwhse' => 'IITBOPTNSUBSUPWHSE',
        'optionsIi.iitboptnsubsupwhse' => 'IITBOPTNSUBSUPWHSE',
        'OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE' => 'IITBOPTNSUBSUPWHSE',
        'COL_IITBOPTNSUBSUPWHSE' => 'IITBOPTNSUBSUPWHSE',
        'IitbOptnSubsupWhse' => 'IITBOPTNSUBSUPWHSE',
        'ii_options.IitbOptnSubsupWhse' => 'IITBOPTNSUBSUPWHSE',
        'Iitboptnlsavail' => 'IITBOPTNLSAVAIL',
        'OptionsIi.Iitboptnlsavail' => 'IITBOPTNLSAVAIL',
        'iitboptnlsavail' => 'IITBOPTNLSAVAIL',
        'optionsIi.iitboptnlsavail' => 'IITBOPTNLSAVAIL',
        'OptionsIiTableMap::COL_IITBOPTNLSAVAIL' => 'IITBOPTNLSAVAIL',
        'COL_IITBOPTNLSAVAIL' => 'IITBOPTNLSAVAIL',
        'IitbOptnLsAvail' => 'IITBOPTNLSAVAIL',
        'ii_options.IitbOptnLsAvail' => 'IITBOPTNLSAVAIL',
        'Iitboptnlswhse' => 'IITBOPTNLSWHSE',
        'OptionsIi.Iitboptnlswhse' => 'IITBOPTNLSWHSE',
        'iitboptnlswhse' => 'IITBOPTNLSWHSE',
        'optionsIi.iitboptnlswhse' => 'IITBOPTNLSWHSE',
        'OptionsIiTableMap::COL_IITBOPTNLSWHSE' => 'IITBOPTNLSWHSE',
        'COL_IITBOPTNLSWHSE' => 'IITBOPTNLSWHSE',
        'IitbOptnLsWhse' => 'IITBOPTNLSWHSE',
        'ii_options.IitbOptnLsWhse' => 'IITBOPTNLSWHSE',
        'Iitboptndesc1or2' => 'IITBOPTNDESC1OR2',
        'OptionsIi.Iitboptndesc1or2' => 'IITBOPTNDESC1OR2',
        'iitboptndesc1or2' => 'IITBOPTNDESC1OR2',
        'optionsIi.iitboptndesc1or2' => 'IITBOPTNDESC1OR2',
        'OptionsIiTableMap::COL_IITBOPTNDESC1OR2' => 'IITBOPTNDESC1OR2',
        'COL_IITBOPTNDESC1OR2' => 'IITBOPTNDESC1OR2',
        'IitbOptnDesc1Or2' => 'IITBOPTNDESC1OR2',
        'ii_options.IitbOptnDesc1Or2' => 'IITBOPTNDESC1OR2',
        'Iitboptndelcerts' => 'IITBOPTNDELCERTS',
        'OptionsIi.Iitboptndelcerts' => 'IITBOPTNDELCERTS',
        'iitboptndelcerts' => 'IITBOPTNDELCERTS',
        'optionsIi.iitboptndelcerts' => 'IITBOPTNDELCERTS',
        'OptionsIiTableMap::COL_IITBOPTNDELCERTS' => 'IITBOPTNDELCERTS',
        'COL_IITBOPTNDELCERTS' => 'IITBOPTNDELCERTS',
        'IitbOptnDelCerts' => 'IITBOPTNDELCERTS',
        'ii_options.IitbOptnDelCerts' => 'IITBOPTNDELCERTS',
        'Dateupdtd' => 'DATEUPDTD',
        'OptionsIi.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'optionsIi.dateupdtd' => 'DATEUPDTD',
        'OptionsIiTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ii_options.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'OptionsIi.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'optionsIi.timeupdtd' => 'TIMEUPDTD',
        'OptionsIiTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ii_options.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'OptionsIi.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'optionsIi.dummy' => 'DUMMY',
        'OptionsIiTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ii_options.dummy' => 'DUMMY',
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
        $this->setName('ii_options');
        $this->setPhpName('OptionsIi');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\OptionsIi');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IitbOptnCode', 'Iitboptncode', 'VARCHAR', true, 10, null);
        $this->addColumn('IitbOptnActAvail', 'Iitboptnactavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnActWhse', 'Iitboptnactwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnActDet', 'Iitboptnactdet', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnActDaysBack', 'Iitboptnactdaysback', 'INTEGER', false, 5, null);
        $this->addColumn('IitbOptnActStrtDate', 'Iitboptnactstrtdate', 'VARCHAR', false, 8, null);
        $this->addColumn('IitbOptnCostAvail', 'Iitboptncostavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnCostWhse', 'Iitboptncostwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnCostDet', 'Iitboptncostdet', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnGenAvail', 'Iitboptngenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnKtAvail', 'Iitboptnktavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnPricAvail', 'Iitboptnpricavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnPhAvail', 'Iitboptnphavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnPhWhse', 'Iitboptnphwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnPhDet', 'Iitboptnphdet', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnPhDaysBack', 'Iitboptnphdaysback', 'INTEGER', false, 5, null);
        $this->addColumn('IitbOptnPhStrtDate', 'Iitboptnphstrtdate', 'VARCHAR', false, 8, null);
        $this->addColumn('IitbOptnPoAvail', 'Iitboptnpoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnPoWhse', 'Iitboptnpowhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnReqrAvail', 'Iitboptnreqravail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnReqrWhse', 'Iitboptnreqrwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnReqrView', 'Iitboptnreqrview', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnShAvail', 'Iitboptnshavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnShWhse', 'Iitboptnshwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnShDet', 'Iitboptnshdet', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnShDaysBack', 'Iitboptnshdaysback', 'INTEGER', false, 5, null);
        $this->addColumn('IitbOptnShStrtDate', 'Iitboptnshstrtdate', 'VARCHAR', false, 8, null);
        $this->addColumn('IitbOptnSoAvail', 'Iitboptnsoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnSoWhse', 'Iitboptnsowhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnSerlotAvail', 'Iitboptnserlotavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnStckAvail', 'Iitboptnstckavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnStckWhse', 'Iitboptnstckwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnStckDet', 'Iitboptnstckdet', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnSubsupAvail', 'Iitboptnsubsupavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnSubsupWhse', 'Iitboptnsubsupwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnLsAvail', 'Iitboptnlsavail', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnLsWhse', 'Iitboptnlswhse', 'VARCHAR', false, 2, null);
        $this->addColumn('IitbOptnDesc1Or2', 'Iitboptndesc1or2', 'VARCHAR', false, 1, null);
        $this->addColumn('IitbOptnDelCerts', 'Iitboptndelcerts', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Iitboptncode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? OptionsIiTableMap::CLASS_DEFAULT : OptionsIiTableMap::OM_CLASS;
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
     * @return array (OptionsIi object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = OptionsIiTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OptionsIiTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OptionsIiTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OptionsIiTableMap::OM_CLASS;
            /** @var OptionsIi $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OptionsIiTableMap::addInstanceToPool($obj, $key);
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
            $key = OptionsIiTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OptionsIiTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var OptionsIi $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OptionsIiTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNCODE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTDET);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNCOSTDET);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNGENAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNKTAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHDET);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPOAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNPOWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNREQRWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNREQRVIEW);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHDET);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSOAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSOWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSTCKDET);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNLSAVAIL);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNLSWHSE);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNDESC1OR2);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_IITBOPTNDELCERTS);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(OptionsIiTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IitbOptnCode');
            $criteria->addSelectColumn($alias . '.IitbOptnActAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnActWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnActDet');
            $criteria->addSelectColumn($alias . '.IitbOptnActDaysBack');
            $criteria->addSelectColumn($alias . '.IitbOptnActStrtDate');
            $criteria->addSelectColumn($alias . '.IitbOptnCostAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnCostWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnCostDet');
            $criteria->addSelectColumn($alias . '.IitbOptnGenAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnKtAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnPricAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnPhAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnPhWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnPhDet');
            $criteria->addSelectColumn($alias . '.IitbOptnPhDaysBack');
            $criteria->addSelectColumn($alias . '.IitbOptnPhStrtDate');
            $criteria->addSelectColumn($alias . '.IitbOptnPoAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnPoWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnReqrAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnReqrWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnReqrView');
            $criteria->addSelectColumn($alias . '.IitbOptnShAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnShWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnShDet');
            $criteria->addSelectColumn($alias . '.IitbOptnShDaysBack');
            $criteria->addSelectColumn($alias . '.IitbOptnShStrtDate');
            $criteria->addSelectColumn($alias . '.IitbOptnSoAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnSoWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnSerlotAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnStckAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnStckWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnStckDet');
            $criteria->addSelectColumn($alias . '.IitbOptnSubsupAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnSubsupWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnLsAvail');
            $criteria->addSelectColumn($alias . '.IitbOptnLsWhse');
            $criteria->addSelectColumn($alias . '.IitbOptnDesc1Or2');
            $criteria->addSelectColumn($alias . '.IitbOptnDelCerts');
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
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNCODE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTDET);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNCOSTDET);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNGENAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNKTAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHDET);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPOAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNPOWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNREQRWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNREQRVIEW);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHDET);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSOAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSOWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSTCKDET);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNLSAVAIL);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNLSWHSE);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNDESC1OR2);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_IITBOPTNDELCERTS);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(OptionsIiTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IitbOptnCode');
            $criteria->removeSelectColumn($alias . '.IitbOptnActAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnActWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnActDet');
            $criteria->removeSelectColumn($alias . '.IitbOptnActDaysBack');
            $criteria->removeSelectColumn($alias . '.IitbOptnActStrtDate');
            $criteria->removeSelectColumn($alias . '.IitbOptnCostAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnCostWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnCostDet');
            $criteria->removeSelectColumn($alias . '.IitbOptnGenAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnKtAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnPricAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnPhAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnPhWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnPhDet');
            $criteria->removeSelectColumn($alias . '.IitbOptnPhDaysBack');
            $criteria->removeSelectColumn($alias . '.IitbOptnPhStrtDate');
            $criteria->removeSelectColumn($alias . '.IitbOptnPoAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnPoWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnReqrAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnReqrWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnReqrView');
            $criteria->removeSelectColumn($alias . '.IitbOptnShAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnShWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnShDet');
            $criteria->removeSelectColumn($alias . '.IitbOptnShDaysBack');
            $criteria->removeSelectColumn($alias . '.IitbOptnShStrtDate');
            $criteria->removeSelectColumn($alias . '.IitbOptnSoAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnSoWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnSerlotAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnStckAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnStckWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnStckDet');
            $criteria->removeSelectColumn($alias . '.IitbOptnSubsupAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnSubsupWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnLsAvail');
            $criteria->removeSelectColumn($alias . '.IitbOptnLsWhse');
            $criteria->removeSelectColumn($alias . '.IitbOptnDesc1Or2');
            $criteria->removeSelectColumn($alias . '.IitbOptnDelCerts');
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
        return Propel::getServiceContainer()->getDatabaseMap(OptionsIiTableMap::DATABASE_NAME)->getTable(OptionsIiTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a OptionsIi or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or OptionsIi object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \OptionsIi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OptionsIiTableMap::DATABASE_NAME);
            $criteria->add(OptionsIiTableMap::COL_IITBOPTNCODE, (array) $values, Criteria::IN);
        }

        $query = OptionsIiQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OptionsIiTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OptionsIiTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ii_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return OptionsIiQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a OptionsIi or Criteria object.
     *
     * @param mixed $criteria Criteria or OptionsIi object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from OptionsIi object
        }


        // Set the correct dbName
        $query = OptionsIiQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
