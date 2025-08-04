<?php

namespace Map;

use \ConfigCi;
use \ConfigCiQuery;
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
 * This class defines the structure of the 'ci_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ConfigCiTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ConfigCiTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ci_config';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ConfigCi';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ConfigCi';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ConfigCi';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the CitbConfKey field
     */
    public const COL_CITBCONFKEY = 'ci_config.CitbConfKey';

    /**
     * the column name for the CitbConfYtdStrtMo field
     */
    public const COL_CITBCONFYTDSTRTMO = 'ci_config.CitbConfYtdStrtMo';

    /**
     * the column name for the CitbConfPaySort field
     */
    public const COL_CITBCONFPAYSORT = 'ci_config.CitbConfPaySort';

    /**
     * the column name for the CitbConfShistBy field
     */
    public const COL_CITBCONFSHISTBY = 'ci_config.CitbConfShistBy';

    /**
     * the column name for the CitbConfShistDate field
     */
    public const COL_CITBCONFSHISTDATE = 'ci_config.CitbConfShistDate';

    /**
     * the column name for the CitbConfShistDays field
     */
    public const COL_CITBCONFSHISTDAYS = 'ci_config.CitbConfShistDays';

    /**
     * the column name for the CitbConfShowZeroHist field
     */
    public const COL_CITBCONFSHOWZEROHIST = 'ci_config.CitbConfShowZeroHist';

    /**
     * the column name for the CitbConfShistNotes field
     */
    public const COL_CITBCONFSHISTNOTES = 'ci_config.CitbConfShistNotes';

    /**
     * the column name for the CitbConfOrderNotes field
     */
    public const COL_CITBCONFORDERNOTES = 'ci_config.CitbConfOrderNotes';

    /**
     * the column name for the CitbConfQuoteNotes field
     */
    public const COL_CITBCONFQUOTENOTES = 'ci_config.CitbConfQuoteNotes';

    /**
     * the column name for the CitbConfConsolGet field
     */
    public const COL_CITBCONFCONSOLGET = 'ci_config.CitbConfConsolGet';

    /**
     * the column name for the CitbConfSsnDays field
     */
    public const COL_CITBCONFSSNDAYS = 'ci_config.CitbConfSsnDays';

    /**
     * the column name for the CitbConfShowInactive field
     */
    public const COL_CITBCONFSHOWINACTIVE = 'ci_config.CitbConfShowInactive';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ci_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ci_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ci_config.dummy';

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
        self::TYPE_PHPNAME       => ['Citbconfkey', 'Citbconfytdstrtmo', 'Citbconfpaysort', 'Citbconfshistby', 'Citbconfshistdate', 'Citbconfshistdays', 'Citbconfshowzerohist', 'Citbconfshistnotes', 'Citbconfordernotes', 'Citbconfquotenotes', 'Citbconfconsolget', 'Citbconfssndays', 'citbconfshowinactive', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['citbconfkey', 'citbconfytdstrtmo', 'citbconfpaysort', 'citbconfshistby', 'citbconfshistdate', 'citbconfshistdays', 'citbconfshowzerohist', 'citbconfshistnotes', 'citbconfordernotes', 'citbconfquotenotes', 'citbconfconsolget', 'citbconfssndays', 'citbconfshowinactive', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ConfigCiTableMap::COL_CITBCONFKEY, ConfigCiTableMap::COL_CITBCONFYTDSTRTMO, ConfigCiTableMap::COL_CITBCONFPAYSORT, ConfigCiTableMap::COL_CITBCONFSHISTBY, ConfigCiTableMap::COL_CITBCONFSHISTDATE, ConfigCiTableMap::COL_CITBCONFSHISTDAYS, ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST, ConfigCiTableMap::COL_CITBCONFSHISTNOTES, ConfigCiTableMap::COL_CITBCONFORDERNOTES, ConfigCiTableMap::COL_CITBCONFQUOTENOTES, ConfigCiTableMap::COL_CITBCONFCONSOLGET, ConfigCiTableMap::COL_CITBCONFSSNDAYS, ConfigCiTableMap::COL_CITBCONFSHOWINACTIVE, ConfigCiTableMap::COL_DATEUPDTD, ConfigCiTableMap::COL_TIMEUPDTD, ConfigCiTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['CitbConfKey', 'CitbConfYtdStrtMo', 'CitbConfPaySort', 'CitbConfShistBy', 'CitbConfShistDate', 'CitbConfShistDays', 'CitbConfShowZeroHist', 'CitbConfShistNotes', 'CitbConfOrderNotes', 'CitbConfQuoteNotes', 'CitbConfConsolGet', 'CitbConfSsnDays', 'CitbConfShowInactive', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, ]
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
        self::TYPE_PHPNAME       => ['Citbconfkey' => 0, 'Citbconfytdstrtmo' => 1, 'Citbconfpaysort' => 2, 'Citbconfshistby' => 3, 'Citbconfshistdate' => 4, 'Citbconfshistdays' => 5, 'Citbconfshowzerohist' => 6, 'Citbconfshistnotes' => 7, 'Citbconfordernotes' => 8, 'Citbconfquotenotes' => 9, 'Citbconfconsolget' => 10, 'Citbconfssndays' => 11, 'citbconfshowinactive' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ],
        self::TYPE_CAMELNAME     => ['citbconfkey' => 0, 'citbconfytdstrtmo' => 1, 'citbconfpaysort' => 2, 'citbconfshistby' => 3, 'citbconfshistdate' => 4, 'citbconfshistdays' => 5, 'citbconfshowzerohist' => 6, 'citbconfshistnotes' => 7, 'citbconfordernotes' => 8, 'citbconfquotenotes' => 9, 'citbconfconsolget' => 10, 'citbconfssndays' => 11, 'citbconfshowinactive' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ],
        self::TYPE_COLNAME       => [ConfigCiTableMap::COL_CITBCONFKEY => 0, ConfigCiTableMap::COL_CITBCONFYTDSTRTMO => 1, ConfigCiTableMap::COL_CITBCONFPAYSORT => 2, ConfigCiTableMap::COL_CITBCONFSHISTBY => 3, ConfigCiTableMap::COL_CITBCONFSHISTDATE => 4, ConfigCiTableMap::COL_CITBCONFSHISTDAYS => 5, ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST => 6, ConfigCiTableMap::COL_CITBCONFSHISTNOTES => 7, ConfigCiTableMap::COL_CITBCONFORDERNOTES => 8, ConfigCiTableMap::COL_CITBCONFQUOTENOTES => 9, ConfigCiTableMap::COL_CITBCONFCONSOLGET => 10, ConfigCiTableMap::COL_CITBCONFSSNDAYS => 11, ConfigCiTableMap::COL_CITBCONFSHOWINACTIVE => 12, ConfigCiTableMap::COL_DATEUPDTD => 13, ConfigCiTableMap::COL_TIMEUPDTD => 14, ConfigCiTableMap::COL_DUMMY => 15, ],
        self::TYPE_FIELDNAME     => ['CitbConfKey' => 0, 'CitbConfYtdStrtMo' => 1, 'CitbConfPaySort' => 2, 'CitbConfShistBy' => 3, 'CitbConfShistDate' => 4, 'CitbConfShistDays' => 5, 'CitbConfShowZeroHist' => 6, 'CitbConfShistNotes' => 7, 'CitbConfOrderNotes' => 8, 'CitbConfQuoteNotes' => 9, 'CitbConfConsolGet' => 10, 'CitbConfSsnDays' => 11, 'CitbConfShowInactive' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Citbconfkey' => 'CITBCONFKEY',
        'ConfigCi.Citbconfkey' => 'CITBCONFKEY',
        'citbconfkey' => 'CITBCONFKEY',
        'configCi.citbconfkey' => 'CITBCONFKEY',
        'ConfigCiTableMap::COL_CITBCONFKEY' => 'CITBCONFKEY',
        'COL_CITBCONFKEY' => 'CITBCONFKEY',
        'CitbConfKey' => 'CITBCONFKEY',
        'ci_config.CitbConfKey' => 'CITBCONFKEY',
        'Citbconfytdstrtmo' => 'CITBCONFYTDSTRTMO',
        'ConfigCi.Citbconfytdstrtmo' => 'CITBCONFYTDSTRTMO',
        'citbconfytdstrtmo' => 'CITBCONFYTDSTRTMO',
        'configCi.citbconfytdstrtmo' => 'CITBCONFYTDSTRTMO',
        'ConfigCiTableMap::COL_CITBCONFYTDSTRTMO' => 'CITBCONFYTDSTRTMO',
        'COL_CITBCONFYTDSTRTMO' => 'CITBCONFYTDSTRTMO',
        'CitbConfYtdStrtMo' => 'CITBCONFYTDSTRTMO',
        'ci_config.CitbConfYtdStrtMo' => 'CITBCONFYTDSTRTMO',
        'Citbconfpaysort' => 'CITBCONFPAYSORT',
        'ConfigCi.Citbconfpaysort' => 'CITBCONFPAYSORT',
        'citbconfpaysort' => 'CITBCONFPAYSORT',
        'configCi.citbconfpaysort' => 'CITBCONFPAYSORT',
        'ConfigCiTableMap::COL_CITBCONFPAYSORT' => 'CITBCONFPAYSORT',
        'COL_CITBCONFPAYSORT' => 'CITBCONFPAYSORT',
        'CitbConfPaySort' => 'CITBCONFPAYSORT',
        'ci_config.CitbConfPaySort' => 'CITBCONFPAYSORT',
        'Citbconfshistby' => 'CITBCONFSHISTBY',
        'ConfigCi.Citbconfshistby' => 'CITBCONFSHISTBY',
        'citbconfshistby' => 'CITBCONFSHISTBY',
        'configCi.citbconfshistby' => 'CITBCONFSHISTBY',
        'ConfigCiTableMap::COL_CITBCONFSHISTBY' => 'CITBCONFSHISTBY',
        'COL_CITBCONFSHISTBY' => 'CITBCONFSHISTBY',
        'CitbConfShistBy' => 'CITBCONFSHISTBY',
        'ci_config.CitbConfShistBy' => 'CITBCONFSHISTBY',
        'Citbconfshistdate' => 'CITBCONFSHISTDATE',
        'ConfigCi.Citbconfshistdate' => 'CITBCONFSHISTDATE',
        'citbconfshistdate' => 'CITBCONFSHISTDATE',
        'configCi.citbconfshistdate' => 'CITBCONFSHISTDATE',
        'ConfigCiTableMap::COL_CITBCONFSHISTDATE' => 'CITBCONFSHISTDATE',
        'COL_CITBCONFSHISTDATE' => 'CITBCONFSHISTDATE',
        'CitbConfShistDate' => 'CITBCONFSHISTDATE',
        'ci_config.CitbConfShistDate' => 'CITBCONFSHISTDATE',
        'Citbconfshistdays' => 'CITBCONFSHISTDAYS',
        'ConfigCi.Citbconfshistdays' => 'CITBCONFSHISTDAYS',
        'citbconfshistdays' => 'CITBCONFSHISTDAYS',
        'configCi.citbconfshistdays' => 'CITBCONFSHISTDAYS',
        'ConfigCiTableMap::COL_CITBCONFSHISTDAYS' => 'CITBCONFSHISTDAYS',
        'COL_CITBCONFSHISTDAYS' => 'CITBCONFSHISTDAYS',
        'CitbConfShistDays' => 'CITBCONFSHISTDAYS',
        'ci_config.CitbConfShistDays' => 'CITBCONFSHISTDAYS',
        'Citbconfshowzerohist' => 'CITBCONFSHOWZEROHIST',
        'ConfigCi.Citbconfshowzerohist' => 'CITBCONFSHOWZEROHIST',
        'citbconfshowzerohist' => 'CITBCONFSHOWZEROHIST',
        'configCi.citbconfshowzerohist' => 'CITBCONFSHOWZEROHIST',
        'ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST' => 'CITBCONFSHOWZEROHIST',
        'COL_CITBCONFSHOWZEROHIST' => 'CITBCONFSHOWZEROHIST',
        'CitbConfShowZeroHist' => 'CITBCONFSHOWZEROHIST',
        'ci_config.CitbConfShowZeroHist' => 'CITBCONFSHOWZEROHIST',
        'Citbconfshistnotes' => 'CITBCONFSHISTNOTES',
        'ConfigCi.Citbconfshistnotes' => 'CITBCONFSHISTNOTES',
        'citbconfshistnotes' => 'CITBCONFSHISTNOTES',
        'configCi.citbconfshistnotes' => 'CITBCONFSHISTNOTES',
        'ConfigCiTableMap::COL_CITBCONFSHISTNOTES' => 'CITBCONFSHISTNOTES',
        'COL_CITBCONFSHISTNOTES' => 'CITBCONFSHISTNOTES',
        'CitbConfShistNotes' => 'CITBCONFSHISTNOTES',
        'ci_config.CitbConfShistNotes' => 'CITBCONFSHISTNOTES',
        'Citbconfordernotes' => 'CITBCONFORDERNOTES',
        'ConfigCi.Citbconfordernotes' => 'CITBCONFORDERNOTES',
        'citbconfordernotes' => 'CITBCONFORDERNOTES',
        'configCi.citbconfordernotes' => 'CITBCONFORDERNOTES',
        'ConfigCiTableMap::COL_CITBCONFORDERNOTES' => 'CITBCONFORDERNOTES',
        'COL_CITBCONFORDERNOTES' => 'CITBCONFORDERNOTES',
        'CitbConfOrderNotes' => 'CITBCONFORDERNOTES',
        'ci_config.CitbConfOrderNotes' => 'CITBCONFORDERNOTES',
        'Citbconfquotenotes' => 'CITBCONFQUOTENOTES',
        'ConfigCi.Citbconfquotenotes' => 'CITBCONFQUOTENOTES',
        'citbconfquotenotes' => 'CITBCONFQUOTENOTES',
        'configCi.citbconfquotenotes' => 'CITBCONFQUOTENOTES',
        'ConfigCiTableMap::COL_CITBCONFQUOTENOTES' => 'CITBCONFQUOTENOTES',
        'COL_CITBCONFQUOTENOTES' => 'CITBCONFQUOTENOTES',
        'CitbConfQuoteNotes' => 'CITBCONFQUOTENOTES',
        'ci_config.CitbConfQuoteNotes' => 'CITBCONFQUOTENOTES',
        'Citbconfconsolget' => 'CITBCONFCONSOLGET',
        'ConfigCi.Citbconfconsolget' => 'CITBCONFCONSOLGET',
        'citbconfconsolget' => 'CITBCONFCONSOLGET',
        'configCi.citbconfconsolget' => 'CITBCONFCONSOLGET',
        'ConfigCiTableMap::COL_CITBCONFCONSOLGET' => 'CITBCONFCONSOLGET',
        'COL_CITBCONFCONSOLGET' => 'CITBCONFCONSOLGET',
        'CitbConfConsolGet' => 'CITBCONFCONSOLGET',
        'ci_config.CitbConfConsolGet' => 'CITBCONFCONSOLGET',
        'Citbconfssndays' => 'CITBCONFSSNDAYS',
        'ConfigCi.Citbconfssndays' => 'CITBCONFSSNDAYS',
        'citbconfssndays' => 'CITBCONFSSNDAYS',
        'configCi.citbconfssndays' => 'CITBCONFSSNDAYS',
        'ConfigCiTableMap::COL_CITBCONFSSNDAYS' => 'CITBCONFSSNDAYS',
        'COL_CITBCONFSSNDAYS' => 'CITBCONFSSNDAYS',
        'CitbConfSsnDays' => 'CITBCONFSSNDAYS',
        'ci_config.CitbConfSsnDays' => 'CITBCONFSSNDAYS',
        'citbconfshowinactive' => 'CITBCONFSHOWINACTIVE',
        'ConfigCi.citbconfshowinactive' => 'CITBCONFSHOWINACTIVE',
        'configCi.citbconfshowinactive' => 'CITBCONFSHOWINACTIVE',
        'ConfigCiTableMap::COL_CITBCONFSHOWINACTIVE' => 'CITBCONFSHOWINACTIVE',
        'COL_CITBCONFSHOWINACTIVE' => 'CITBCONFSHOWINACTIVE',
        'CitbConfShowInactive' => 'CITBCONFSHOWINACTIVE',
        'ci_config.CitbConfShowInactive' => 'CITBCONFSHOWINACTIVE',
        'Dateupdtd' => 'DATEUPDTD',
        'ConfigCi.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'configCi.dateupdtd' => 'DATEUPDTD',
        'ConfigCiTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ci_config.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ConfigCi.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'configCi.timeupdtd' => 'TIMEUPDTD',
        'ConfigCiTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ci_config.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ConfigCi.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'configCi.dummy' => 'DUMMY',
        'ConfigCiTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ci_config.dummy' => 'DUMMY',
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
        $this->setName('ci_config');
        $this->setPhpName('ConfigCi');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigCi');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CitbConfKey', 'Citbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('CitbConfYtdStrtMo', 'Citbconfytdstrtmo', 'INTEGER', false, 2, null);
        $this->addColumn('CitbConfPaySort', 'Citbconfpaysort', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfShistBy', 'Citbconfshistby', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfShistDate', 'Citbconfshistdate', 'VARCHAR', false, 8, null);
        $this->addColumn('CitbConfShistDays', 'Citbconfshistdays', 'INTEGER', false, 4, null);
        $this->addColumn('CitbConfShowZeroHist', 'Citbconfshowzerohist', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfShistNotes', 'Citbconfshistnotes', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfOrderNotes', 'Citbconfordernotes', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfQuoteNotes', 'Citbconfquotenotes', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfConsolGet', 'Citbconfconsolget', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbConfSsnDays', 'Citbconfssndays', 'INTEGER', false, 4, null);
        $this->addColumn('CitbConfShowInactive', 'citbconfshowinactive', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Citbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigCiTableMap::CLASS_DEFAULT : ConfigCiTableMap::OM_CLASS;
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
     * @return array (ConfigCi object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ConfigCiTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigCiTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigCiTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigCiTableMap::OM_CLASS;
            /** @var ConfigCi $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigCiTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigCiTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigCiTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigCi $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigCiTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFKEY);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFPAYSORT);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTBY);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTDATE);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTDAYS);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTNOTES);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFORDERNOTES);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFQUOTENOTES);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFCONSOLGET);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSSNDAYS);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_CITBCONFSHOWINACTIVE);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigCiTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.CitbConfKey');
            $criteria->addSelectColumn($alias . '.CitbConfYtdStrtMo');
            $criteria->addSelectColumn($alias . '.CitbConfPaySort');
            $criteria->addSelectColumn($alias . '.CitbConfShistBy');
            $criteria->addSelectColumn($alias . '.CitbConfShistDate');
            $criteria->addSelectColumn($alias . '.CitbConfShistDays');
            $criteria->addSelectColumn($alias . '.CitbConfShowZeroHist');
            $criteria->addSelectColumn($alias . '.CitbConfShistNotes');
            $criteria->addSelectColumn($alias . '.CitbConfOrderNotes');
            $criteria->addSelectColumn($alias . '.CitbConfQuoteNotes');
            $criteria->addSelectColumn($alias . '.CitbConfConsolGet');
            $criteria->addSelectColumn($alias . '.CitbConfSsnDays');
            $criteria->addSelectColumn($alias . '.CitbConfShowInactive');
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
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFKEY);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFPAYSORT);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTBY);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTDATE);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTDAYS);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSHISTNOTES);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFORDERNOTES);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFQUOTENOTES);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFCONSOLGET);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSSNDAYS);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_CITBCONFSHOWINACTIVE);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ConfigCiTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.CitbConfKey');
            $criteria->removeSelectColumn($alias . '.CitbConfYtdStrtMo');
            $criteria->removeSelectColumn($alias . '.CitbConfPaySort');
            $criteria->removeSelectColumn($alias . '.CitbConfShistBy');
            $criteria->removeSelectColumn($alias . '.CitbConfShistDate');
            $criteria->removeSelectColumn($alias . '.CitbConfShistDays');
            $criteria->removeSelectColumn($alias . '.CitbConfShowZeroHist');
            $criteria->removeSelectColumn($alias . '.CitbConfShistNotes');
            $criteria->removeSelectColumn($alias . '.CitbConfOrderNotes');
            $criteria->removeSelectColumn($alias . '.CitbConfQuoteNotes');
            $criteria->removeSelectColumn($alias . '.CitbConfConsolGet');
            $criteria->removeSelectColumn($alias . '.CitbConfSsnDays');
            $criteria->removeSelectColumn($alias . '.CitbConfShowInactive');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigCiTableMap::DATABASE_NAME)->getTable(ConfigCiTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ConfigCi or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ConfigCi object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigCi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigCiTableMap::DATABASE_NAME);
            $criteria->add(ConfigCiTableMap::COL_CITBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigCiQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigCiTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigCiTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ci_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ConfigCiQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigCi or Criteria object.
     *
     * @param mixed $criteria Criteria or ConfigCi object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigCi object
        }


        // Set the correct dbName
        $query = ConfigCiQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
