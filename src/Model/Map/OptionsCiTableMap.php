<?php

namespace Map;

use \OptionsCi;
use \OptionsCiQuery;
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
 * This class defines the structure of the 'ci_options' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class OptionsCiTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.OptionsCiTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ci_options';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'OptionsCi';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\OptionsCi';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'OptionsCi';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 21;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 21;

    /**
     * the column name for the CitbOptnCode field
     */
    public const COL_CITBOPTNCODE = 'ci_options.CitbOptnCode';

    /**
     * the column name for the CitbOptnNoteAvail field
     */
    public const COL_CITBOPTNNOTEAVAIL = 'ci_options.CitbOptnNoteAvail';

    /**
     * the column name for the CitbOptnGenAvail field
     */
    public const COL_CITBOPTNGENAVAIL = 'ci_options.CitbOptnGenAvail';

    /**
     * the column name for the CitbOptnPayAvail field
     */
    public const COL_CITBOPTNPAYAVAIL = 'ci_options.CitbOptnPayAvail';

    /**
     * the column name for the CitbOptnCoreAvail field
     */
    public const COL_CITBOPTNCOREAVAIL = 'ci_options.CitbOptnCoreAvail';

    /**
     * the column name for the CitbOptnCredAvail field
     */
    public const COL_CITBOPTNCREDAVAIL = 'ci_options.CitbOptnCredAvail';

    /**
     * the column name for the CitbOptnCstkAvail field
     */
    public const COL_CITBOPTNCSTKAVAIL = 'ci_options.CitbOptnCstkAvail';

    /**
     * the column name for the CitbOptnPricAvail field
     */
    public const COL_CITBOPTNPRICAVAIL = 'ci_options.CitbOptnPricAvail';

    /**
     * the column name for the CitbOptnStndAvail field
     */
    public const COL_CITBOPTNSTNDAVAIL = 'ci_options.CitbOptnStndAvail';

    /**
     * the column name for the CitbOptnSoAvail field
     */
    public const COL_CITBOPTNSOAVAIL = 'ci_options.CitbOptnSoAvail';

    /**
     * the column name for the CitbOptnQuotAvail field
     */
    public const COL_CITBOPTNQUOTAVAIL = 'ci_options.CitbOptnQuotAvail';

    /**
     * the column name for the CitbOptnOpenAvail field
     */
    public const COL_CITBOPTNOPENAVAIL = 'ci_options.CitbOptnOpenAvail';

    /**
     * the column name for the CitbOptnPoAvail field
     */
    public const COL_CITBOPTNPOAVAIL = 'ci_options.CitbOptnPoAvail';

    /**
     * the column name for the CitbOptnPoDaysBack field
     */
    public const COL_CITBOPTNPODAYSBACK = 'ci_options.CitbOptnPoDaysBack';

    /**
     * the column name for the CitbOptnPoStrtDate field
     */
    public const COL_CITBOPTNPOSTRTDATE = 'ci_options.CitbOptnPoStrtDate';

    /**
     * the column name for the CitbOptnShAvail field
     */
    public const COL_CITBOPTNSHAVAIL = 'ci_options.CitbOptnShAvail';

    /**
     * the column name for the CitbOptnShDaysBack field
     */
    public const COL_CITBOPTNSHDAYSBACK = 'ci_options.CitbOptnShDaysBack';

    /**
     * the column name for the CitbOptnShStrtDate field
     */
    public const COL_CITBOPTNSHSTRTDATE = 'ci_options.CitbOptnShStrtDate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ci_options.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ci_options.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ci_options.dummy';

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
        self::TYPE_PHPNAME       => ['Citboptncode', 'Citboptnnoteavail', 'Citboptngenavail', 'Citboptnpayavail', 'Citboptncoreavail', 'Citboptncredavail', 'Citboptncstkavail', 'Citboptnpricavail', 'Citboptnstndavail', 'Citboptnsoavail', 'Citboptnquotavail', 'Citboptnopenavail', 'Citboptnpoavail', 'Citboptnpodaysback', 'Citboptnpostrtdate', 'Citboptnshavail', 'Citboptnshdaysback', 'Citboptnshstrtdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['citboptncode', 'citboptnnoteavail', 'citboptngenavail', 'citboptnpayavail', 'citboptncoreavail', 'citboptncredavail', 'citboptncstkavail', 'citboptnpricavail', 'citboptnstndavail', 'citboptnsoavail', 'citboptnquotavail', 'citboptnopenavail', 'citboptnpoavail', 'citboptnpodaysback', 'citboptnpostrtdate', 'citboptnshavail', 'citboptnshdaysback', 'citboptnshstrtdate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [OptionsCiTableMap::COL_CITBOPTNCODE, OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL, OptionsCiTableMap::COL_CITBOPTNGENAVAIL, OptionsCiTableMap::COL_CITBOPTNPAYAVAIL, OptionsCiTableMap::COL_CITBOPTNCOREAVAIL, OptionsCiTableMap::COL_CITBOPTNCREDAVAIL, OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL, OptionsCiTableMap::COL_CITBOPTNPRICAVAIL, OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL, OptionsCiTableMap::COL_CITBOPTNSOAVAIL, OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL, OptionsCiTableMap::COL_CITBOPTNOPENAVAIL, OptionsCiTableMap::COL_CITBOPTNPOAVAIL, OptionsCiTableMap::COL_CITBOPTNPODAYSBACK, OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE, OptionsCiTableMap::COL_CITBOPTNSHAVAIL, OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK, OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE, OptionsCiTableMap::COL_DATEUPDTD, OptionsCiTableMap::COL_TIMEUPDTD, OptionsCiTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['CitbOptnCode', 'CitbOptnNoteAvail', 'CitbOptnGenAvail', 'CitbOptnPayAvail', 'CitbOptnCoreAvail', 'CitbOptnCredAvail', 'CitbOptnCstkAvail', 'CitbOptnPricAvail', 'CitbOptnStndAvail', 'CitbOptnSoAvail', 'CitbOptnQuotAvail', 'CitbOptnOpenAvail', 'CitbOptnPoAvail', 'CitbOptnPoDaysBack', 'CitbOptnPoStrtDate', 'CitbOptnShAvail', 'CitbOptnShDaysBack', 'CitbOptnShStrtDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, ]
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
        self::TYPE_PHPNAME       => ['Citboptncode' => 0, 'Citboptnnoteavail' => 1, 'Citboptngenavail' => 2, 'Citboptnpayavail' => 3, 'Citboptncoreavail' => 4, 'Citboptncredavail' => 5, 'Citboptncstkavail' => 6, 'Citboptnpricavail' => 7, 'Citboptnstndavail' => 8, 'Citboptnsoavail' => 9, 'Citboptnquotavail' => 10, 'Citboptnopenavail' => 11, 'Citboptnpoavail' => 12, 'Citboptnpodaysback' => 13, 'Citboptnpostrtdate' => 14, 'Citboptnshavail' => 15, 'Citboptnshdaysback' => 16, 'Citboptnshstrtdate' => 17, 'Dateupdtd' => 18, 'Timeupdtd' => 19, 'Dummy' => 20, ],
        self::TYPE_CAMELNAME     => ['citboptncode' => 0, 'citboptnnoteavail' => 1, 'citboptngenavail' => 2, 'citboptnpayavail' => 3, 'citboptncoreavail' => 4, 'citboptncredavail' => 5, 'citboptncstkavail' => 6, 'citboptnpricavail' => 7, 'citboptnstndavail' => 8, 'citboptnsoavail' => 9, 'citboptnquotavail' => 10, 'citboptnopenavail' => 11, 'citboptnpoavail' => 12, 'citboptnpodaysback' => 13, 'citboptnpostrtdate' => 14, 'citboptnshavail' => 15, 'citboptnshdaysback' => 16, 'citboptnshstrtdate' => 17, 'dateupdtd' => 18, 'timeupdtd' => 19, 'dummy' => 20, ],
        self::TYPE_COLNAME       => [OptionsCiTableMap::COL_CITBOPTNCODE => 0, OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL => 1, OptionsCiTableMap::COL_CITBOPTNGENAVAIL => 2, OptionsCiTableMap::COL_CITBOPTNPAYAVAIL => 3, OptionsCiTableMap::COL_CITBOPTNCOREAVAIL => 4, OptionsCiTableMap::COL_CITBOPTNCREDAVAIL => 5, OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL => 6, OptionsCiTableMap::COL_CITBOPTNPRICAVAIL => 7, OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL => 8, OptionsCiTableMap::COL_CITBOPTNSOAVAIL => 9, OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL => 10, OptionsCiTableMap::COL_CITBOPTNOPENAVAIL => 11, OptionsCiTableMap::COL_CITBOPTNPOAVAIL => 12, OptionsCiTableMap::COL_CITBOPTNPODAYSBACK => 13, OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE => 14, OptionsCiTableMap::COL_CITBOPTNSHAVAIL => 15, OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK => 16, OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE => 17, OptionsCiTableMap::COL_DATEUPDTD => 18, OptionsCiTableMap::COL_TIMEUPDTD => 19, OptionsCiTableMap::COL_DUMMY => 20, ],
        self::TYPE_FIELDNAME     => ['CitbOptnCode' => 0, 'CitbOptnNoteAvail' => 1, 'CitbOptnGenAvail' => 2, 'CitbOptnPayAvail' => 3, 'CitbOptnCoreAvail' => 4, 'CitbOptnCredAvail' => 5, 'CitbOptnCstkAvail' => 6, 'CitbOptnPricAvail' => 7, 'CitbOptnStndAvail' => 8, 'CitbOptnSoAvail' => 9, 'CitbOptnQuotAvail' => 10, 'CitbOptnOpenAvail' => 11, 'CitbOptnPoAvail' => 12, 'CitbOptnPoDaysBack' => 13, 'CitbOptnPoStrtDate' => 14, 'CitbOptnShAvail' => 15, 'CitbOptnShDaysBack' => 16, 'CitbOptnShStrtDate' => 17, 'DateUpdtd' => 18, 'TimeUpdtd' => 19, 'dummy' => 20, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Citboptncode' => 'CITBOPTNCODE',
        'OptionsCi.Citboptncode' => 'CITBOPTNCODE',
        'citboptncode' => 'CITBOPTNCODE',
        'optionsCi.citboptncode' => 'CITBOPTNCODE',
        'OptionsCiTableMap::COL_CITBOPTNCODE' => 'CITBOPTNCODE',
        'COL_CITBOPTNCODE' => 'CITBOPTNCODE',
        'CitbOptnCode' => 'CITBOPTNCODE',
        'ci_options.CitbOptnCode' => 'CITBOPTNCODE',
        'Citboptnnoteavail' => 'CITBOPTNNOTEAVAIL',
        'OptionsCi.Citboptnnoteavail' => 'CITBOPTNNOTEAVAIL',
        'citboptnnoteavail' => 'CITBOPTNNOTEAVAIL',
        'optionsCi.citboptnnoteavail' => 'CITBOPTNNOTEAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL' => 'CITBOPTNNOTEAVAIL',
        'COL_CITBOPTNNOTEAVAIL' => 'CITBOPTNNOTEAVAIL',
        'CitbOptnNoteAvail' => 'CITBOPTNNOTEAVAIL',
        'ci_options.CitbOptnNoteAvail' => 'CITBOPTNNOTEAVAIL',
        'Citboptngenavail' => 'CITBOPTNGENAVAIL',
        'OptionsCi.Citboptngenavail' => 'CITBOPTNGENAVAIL',
        'citboptngenavail' => 'CITBOPTNGENAVAIL',
        'optionsCi.citboptngenavail' => 'CITBOPTNGENAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNGENAVAIL' => 'CITBOPTNGENAVAIL',
        'COL_CITBOPTNGENAVAIL' => 'CITBOPTNGENAVAIL',
        'CitbOptnGenAvail' => 'CITBOPTNGENAVAIL',
        'ci_options.CitbOptnGenAvail' => 'CITBOPTNGENAVAIL',
        'Citboptnpayavail' => 'CITBOPTNPAYAVAIL',
        'OptionsCi.Citboptnpayavail' => 'CITBOPTNPAYAVAIL',
        'citboptnpayavail' => 'CITBOPTNPAYAVAIL',
        'optionsCi.citboptnpayavail' => 'CITBOPTNPAYAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNPAYAVAIL' => 'CITBOPTNPAYAVAIL',
        'COL_CITBOPTNPAYAVAIL' => 'CITBOPTNPAYAVAIL',
        'CitbOptnPayAvail' => 'CITBOPTNPAYAVAIL',
        'ci_options.CitbOptnPayAvail' => 'CITBOPTNPAYAVAIL',
        'Citboptncoreavail' => 'CITBOPTNCOREAVAIL',
        'OptionsCi.Citboptncoreavail' => 'CITBOPTNCOREAVAIL',
        'citboptncoreavail' => 'CITBOPTNCOREAVAIL',
        'optionsCi.citboptncoreavail' => 'CITBOPTNCOREAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNCOREAVAIL' => 'CITBOPTNCOREAVAIL',
        'COL_CITBOPTNCOREAVAIL' => 'CITBOPTNCOREAVAIL',
        'CitbOptnCoreAvail' => 'CITBOPTNCOREAVAIL',
        'ci_options.CitbOptnCoreAvail' => 'CITBOPTNCOREAVAIL',
        'Citboptncredavail' => 'CITBOPTNCREDAVAIL',
        'OptionsCi.Citboptncredavail' => 'CITBOPTNCREDAVAIL',
        'citboptncredavail' => 'CITBOPTNCREDAVAIL',
        'optionsCi.citboptncredavail' => 'CITBOPTNCREDAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNCREDAVAIL' => 'CITBOPTNCREDAVAIL',
        'COL_CITBOPTNCREDAVAIL' => 'CITBOPTNCREDAVAIL',
        'CitbOptnCredAvail' => 'CITBOPTNCREDAVAIL',
        'ci_options.CitbOptnCredAvail' => 'CITBOPTNCREDAVAIL',
        'Citboptncstkavail' => 'CITBOPTNCSTKAVAIL',
        'OptionsCi.Citboptncstkavail' => 'CITBOPTNCSTKAVAIL',
        'citboptncstkavail' => 'CITBOPTNCSTKAVAIL',
        'optionsCi.citboptncstkavail' => 'CITBOPTNCSTKAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL' => 'CITBOPTNCSTKAVAIL',
        'COL_CITBOPTNCSTKAVAIL' => 'CITBOPTNCSTKAVAIL',
        'CitbOptnCstkAvail' => 'CITBOPTNCSTKAVAIL',
        'ci_options.CitbOptnCstkAvail' => 'CITBOPTNCSTKAVAIL',
        'Citboptnpricavail' => 'CITBOPTNPRICAVAIL',
        'OptionsCi.Citboptnpricavail' => 'CITBOPTNPRICAVAIL',
        'citboptnpricavail' => 'CITBOPTNPRICAVAIL',
        'optionsCi.citboptnpricavail' => 'CITBOPTNPRICAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNPRICAVAIL' => 'CITBOPTNPRICAVAIL',
        'COL_CITBOPTNPRICAVAIL' => 'CITBOPTNPRICAVAIL',
        'CitbOptnPricAvail' => 'CITBOPTNPRICAVAIL',
        'ci_options.CitbOptnPricAvail' => 'CITBOPTNPRICAVAIL',
        'Citboptnstndavail' => 'CITBOPTNSTNDAVAIL',
        'OptionsCi.Citboptnstndavail' => 'CITBOPTNSTNDAVAIL',
        'citboptnstndavail' => 'CITBOPTNSTNDAVAIL',
        'optionsCi.citboptnstndavail' => 'CITBOPTNSTNDAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL' => 'CITBOPTNSTNDAVAIL',
        'COL_CITBOPTNSTNDAVAIL' => 'CITBOPTNSTNDAVAIL',
        'CitbOptnStndAvail' => 'CITBOPTNSTNDAVAIL',
        'ci_options.CitbOptnStndAvail' => 'CITBOPTNSTNDAVAIL',
        'Citboptnsoavail' => 'CITBOPTNSOAVAIL',
        'OptionsCi.Citboptnsoavail' => 'CITBOPTNSOAVAIL',
        'citboptnsoavail' => 'CITBOPTNSOAVAIL',
        'optionsCi.citboptnsoavail' => 'CITBOPTNSOAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNSOAVAIL' => 'CITBOPTNSOAVAIL',
        'COL_CITBOPTNSOAVAIL' => 'CITBOPTNSOAVAIL',
        'CitbOptnSoAvail' => 'CITBOPTNSOAVAIL',
        'ci_options.CitbOptnSoAvail' => 'CITBOPTNSOAVAIL',
        'Citboptnquotavail' => 'CITBOPTNQUOTAVAIL',
        'OptionsCi.Citboptnquotavail' => 'CITBOPTNQUOTAVAIL',
        'citboptnquotavail' => 'CITBOPTNQUOTAVAIL',
        'optionsCi.citboptnquotavail' => 'CITBOPTNQUOTAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL' => 'CITBOPTNQUOTAVAIL',
        'COL_CITBOPTNQUOTAVAIL' => 'CITBOPTNQUOTAVAIL',
        'CitbOptnQuotAvail' => 'CITBOPTNQUOTAVAIL',
        'ci_options.CitbOptnQuotAvail' => 'CITBOPTNQUOTAVAIL',
        'Citboptnopenavail' => 'CITBOPTNOPENAVAIL',
        'OptionsCi.Citboptnopenavail' => 'CITBOPTNOPENAVAIL',
        'citboptnopenavail' => 'CITBOPTNOPENAVAIL',
        'optionsCi.citboptnopenavail' => 'CITBOPTNOPENAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNOPENAVAIL' => 'CITBOPTNOPENAVAIL',
        'COL_CITBOPTNOPENAVAIL' => 'CITBOPTNOPENAVAIL',
        'CitbOptnOpenAvail' => 'CITBOPTNOPENAVAIL',
        'ci_options.CitbOptnOpenAvail' => 'CITBOPTNOPENAVAIL',
        'Citboptnpoavail' => 'CITBOPTNPOAVAIL',
        'OptionsCi.Citboptnpoavail' => 'CITBOPTNPOAVAIL',
        'citboptnpoavail' => 'CITBOPTNPOAVAIL',
        'optionsCi.citboptnpoavail' => 'CITBOPTNPOAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNPOAVAIL' => 'CITBOPTNPOAVAIL',
        'COL_CITBOPTNPOAVAIL' => 'CITBOPTNPOAVAIL',
        'CitbOptnPoAvail' => 'CITBOPTNPOAVAIL',
        'ci_options.CitbOptnPoAvail' => 'CITBOPTNPOAVAIL',
        'Citboptnpodaysback' => 'CITBOPTNPODAYSBACK',
        'OptionsCi.Citboptnpodaysback' => 'CITBOPTNPODAYSBACK',
        'citboptnpodaysback' => 'CITBOPTNPODAYSBACK',
        'optionsCi.citboptnpodaysback' => 'CITBOPTNPODAYSBACK',
        'OptionsCiTableMap::COL_CITBOPTNPODAYSBACK' => 'CITBOPTNPODAYSBACK',
        'COL_CITBOPTNPODAYSBACK' => 'CITBOPTNPODAYSBACK',
        'CitbOptnPoDaysBack' => 'CITBOPTNPODAYSBACK',
        'ci_options.CitbOptnPoDaysBack' => 'CITBOPTNPODAYSBACK',
        'Citboptnpostrtdate' => 'CITBOPTNPOSTRTDATE',
        'OptionsCi.Citboptnpostrtdate' => 'CITBOPTNPOSTRTDATE',
        'citboptnpostrtdate' => 'CITBOPTNPOSTRTDATE',
        'optionsCi.citboptnpostrtdate' => 'CITBOPTNPOSTRTDATE',
        'OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE' => 'CITBOPTNPOSTRTDATE',
        'COL_CITBOPTNPOSTRTDATE' => 'CITBOPTNPOSTRTDATE',
        'CitbOptnPoStrtDate' => 'CITBOPTNPOSTRTDATE',
        'ci_options.CitbOptnPoStrtDate' => 'CITBOPTNPOSTRTDATE',
        'Citboptnshavail' => 'CITBOPTNSHAVAIL',
        'OptionsCi.Citboptnshavail' => 'CITBOPTNSHAVAIL',
        'citboptnshavail' => 'CITBOPTNSHAVAIL',
        'optionsCi.citboptnshavail' => 'CITBOPTNSHAVAIL',
        'OptionsCiTableMap::COL_CITBOPTNSHAVAIL' => 'CITBOPTNSHAVAIL',
        'COL_CITBOPTNSHAVAIL' => 'CITBOPTNSHAVAIL',
        'CitbOptnShAvail' => 'CITBOPTNSHAVAIL',
        'ci_options.CitbOptnShAvail' => 'CITBOPTNSHAVAIL',
        'Citboptnshdaysback' => 'CITBOPTNSHDAYSBACK',
        'OptionsCi.Citboptnshdaysback' => 'CITBOPTNSHDAYSBACK',
        'citboptnshdaysback' => 'CITBOPTNSHDAYSBACK',
        'optionsCi.citboptnshdaysback' => 'CITBOPTNSHDAYSBACK',
        'OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK' => 'CITBOPTNSHDAYSBACK',
        'COL_CITBOPTNSHDAYSBACK' => 'CITBOPTNSHDAYSBACK',
        'CitbOptnShDaysBack' => 'CITBOPTNSHDAYSBACK',
        'ci_options.CitbOptnShDaysBack' => 'CITBOPTNSHDAYSBACK',
        'Citboptnshstrtdate' => 'CITBOPTNSHSTRTDATE',
        'OptionsCi.Citboptnshstrtdate' => 'CITBOPTNSHSTRTDATE',
        'citboptnshstrtdate' => 'CITBOPTNSHSTRTDATE',
        'optionsCi.citboptnshstrtdate' => 'CITBOPTNSHSTRTDATE',
        'OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE' => 'CITBOPTNSHSTRTDATE',
        'COL_CITBOPTNSHSTRTDATE' => 'CITBOPTNSHSTRTDATE',
        'CitbOptnShStrtDate' => 'CITBOPTNSHSTRTDATE',
        'ci_options.CitbOptnShStrtDate' => 'CITBOPTNSHSTRTDATE',
        'Dateupdtd' => 'DATEUPDTD',
        'OptionsCi.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'optionsCi.dateupdtd' => 'DATEUPDTD',
        'OptionsCiTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ci_options.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'OptionsCi.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'optionsCi.timeupdtd' => 'TIMEUPDTD',
        'OptionsCiTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ci_options.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'OptionsCi.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'optionsCi.dummy' => 'DUMMY',
        'OptionsCiTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ci_options.dummy' => 'DUMMY',
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
        $this->setName('ci_options');
        $this->setPhpName('OptionsCi');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\OptionsCi');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CitbOptnCode', 'Citboptncode', 'VARCHAR', true, 8, null);
        $this->addColumn('CitbOptnNoteAvail', 'Citboptnnoteavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnGenAvail', 'Citboptngenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPayAvail', 'Citboptnpayavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnCoreAvail', 'Citboptncoreavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnCredAvail', 'Citboptncredavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnCstkAvail', 'Citboptncstkavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPricAvail', 'Citboptnpricavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnStndAvail', 'Citboptnstndavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnSoAvail', 'Citboptnsoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnQuotAvail', 'Citboptnquotavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnOpenAvail', 'Citboptnopenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPoAvail', 'Citboptnpoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPoDaysBack', 'Citboptnpodaysback', 'INTEGER', false, 4, null);
        $this->addColumn('CitbOptnPoStrtDate', 'Citboptnpostrtdate', 'VARCHAR', false, 8, null);
        $this->addColumn('CitbOptnShAvail', 'Citboptnshavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnShDaysBack', 'Citboptnshdaysback', 'INTEGER', false, 4, null);
        $this->addColumn('CitbOptnShStrtDate', 'Citboptnshstrtdate', 'VARCHAR', false, 8, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? OptionsCiTableMap::CLASS_DEFAULT : OptionsCiTableMap::OM_CLASS;
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
     * @return array (OptionsCi object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = OptionsCiTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OptionsCiTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OptionsCiTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OptionsCiTableMap::OM_CLASS;
            /** @var OptionsCi $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OptionsCiTableMap::addInstanceToPool($obj, $key);
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
            $key = OptionsCiTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OptionsCiTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var OptionsCi $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OptionsCiTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCODE);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNGENAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSOAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPOAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.CitbOptnCode');
            $criteria->addSelectColumn($alias . '.CitbOptnNoteAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnGenAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPayAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnCoreAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnCredAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnCstkAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPricAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnStndAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnSoAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnQuotAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnOpenAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPoAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPoDaysBack');
            $criteria->addSelectColumn($alias . '.CitbOptnPoStrtDate');
            $criteria->addSelectColumn($alias . '.CitbOptnShAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnShDaysBack');
            $criteria->addSelectColumn($alias . '.CitbOptnShStrtDate');
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
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNCODE);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNGENAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNSOAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNPOAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHAVAIL);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(OptionsCiTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.CitbOptnCode');
            $criteria->removeSelectColumn($alias . '.CitbOptnNoteAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnGenAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnPayAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnCoreAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnCredAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnCstkAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnPricAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnStndAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnSoAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnQuotAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnOpenAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnPoAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnPoDaysBack');
            $criteria->removeSelectColumn($alias . '.CitbOptnPoStrtDate');
            $criteria->removeSelectColumn($alias . '.CitbOptnShAvail');
            $criteria->removeSelectColumn($alias . '.CitbOptnShDaysBack');
            $criteria->removeSelectColumn($alias . '.CitbOptnShStrtDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(OptionsCiTableMap::DATABASE_NAME)->getTable(OptionsCiTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a OptionsCi or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or OptionsCi object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \OptionsCi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OptionsCiTableMap::DATABASE_NAME);
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNCODE, (array) $values, Criteria::IN);
        }

        $query = OptionsCiQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OptionsCiTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OptionsCiTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ci_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return OptionsCiQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a OptionsCi or Criteria object.
     *
     * @param mixed $criteria Criteria or OptionsCi object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from OptionsCi object
        }


        // Set the correct dbName
        $query = OptionsCiQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
