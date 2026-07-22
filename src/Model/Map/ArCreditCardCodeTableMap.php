<?php

namespace Map;

use \ArCreditCardCode;
use \ArCreditCardCodeQuery;
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
 * This class defines the structure of the 'ar_cust_crcd' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ArCreditCardCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ArCreditCardCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_cust_crcd';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ArCreditCardCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ArCreditCardCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ArCreditCardCode';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the ArtbCrcdCode field
     */
    public const COL_ARTBCRCDCODE = 'ar_cust_crcd.ArtbCrcdCode';

    /**
     * the column name for the ArtbCrcdName field
     */
    public const COL_ARTBCRCDNAME = 'ar_cust_crcd.ArtbCrcdName';

    /**
     * the column name for the ArtbCrcdGlAcct field
     */
    public const COL_ARTBCRCDGLACCT = 'ar_cust_crcd.ArtbCrcdGlAcct';

    /**
     * the column name for the ArtbCrcdCustId field
     */
    public const COL_ARTBCRCDCUSTID = 'ar_cust_crcd.ArtbCrcdCustId';

    /**
     * the column name for the ArtbCrcdChrgGlAcct field
     */
    public const COL_ARTBCRCDCHRGGLACCT = 'ar_cust_crcd.ArtbCrcdChrgGlAcct';

    /**
     * the column name for the ArtbCrcdChrgRate field
     */
    public const COL_ARTBCRCDCHRGRATE = 'ar_cust_crcd.ArtbCrcdChrgRate';

    /**
     * the column name for the ArtbCrcdChrgTranCost field
     */
    public const COL_ARTBCRCDCHRGTRANCOST = 'ar_cust_crcd.ArtbCrcdChrgTranCost';

    /**
     * the column name for the ArtbCrcdCcSurchgPct field
     */
    public const COL_ARTBCRCDCCSURCHGPCT = 'ar_cust_crcd.ArtbCrcdCcSurchgPct';

    /**
     * the column name for the ArtbCrcdLmCcSurchgPct field
     */
    public const COL_ARTBCRCDLMCCSURCHGPCT = 'ar_cust_crcd.ArtbCrcdLmCcSurchgPct';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_cust_crcd.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_cust_crcd.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_cust_crcd.dummy';

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
        self::TYPE_PHPNAME       => ['Artbcrcdcode', 'Artbcrcdname', 'Artbcrcdglacct', 'Artbcrcdcustid', 'Artbcrcdchrgglacct', 'Artbcrcdchrgrate', 'Artbcrcdchrgtrancost', 'Artbcrcdccsurchgpct', 'Artbcrcdlmccsurchgpct', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['artbcrcdcode', 'artbcrcdname', 'artbcrcdglacct', 'artbcrcdcustid', 'artbcrcdchrgglacct', 'artbcrcdchrgrate', 'artbcrcdchrgtrancost', 'artbcrcdccsurchgpct', 'artbcrcdlmccsurchgpct', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ArCreditCardCodeTableMap::COL_ARTBCRCDCODE, ArCreditCardCodeTableMap::COL_ARTBCRCDNAME, ArCreditCardCodeTableMap::COL_ARTBCRCDGLACCT, ArCreditCardCodeTableMap::COL_ARTBCRCDCUSTID, ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGGLACCT, ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE, ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST, ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT, ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT, ArCreditCardCodeTableMap::COL_DATEUPDTD, ArCreditCardCodeTableMap::COL_TIMEUPDTD, ArCreditCardCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArtbCrcdCode', 'ArtbCrcdName', 'ArtbCrcdGlAcct', 'ArtbCrcdCustId', 'ArtbCrcdChrgGlAcct', 'ArtbCrcdChrgRate', 'ArtbCrcdChrgTranCost', 'ArtbCrcdCcSurchgPct', 'ArtbCrcdLmCcSurchgPct', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ]
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
        self::TYPE_PHPNAME       => ['Artbcrcdcode' => 0, 'Artbcrcdname' => 1, 'Artbcrcdglacct' => 2, 'Artbcrcdcustid' => 3, 'Artbcrcdchrgglacct' => 4, 'Artbcrcdchrgrate' => 5, 'Artbcrcdchrgtrancost' => 6, 'Artbcrcdccsurchgpct' => 7, 'Artbcrcdlmccsurchgpct' => 8, 'Dateupdtd' => 9, 'Timeupdtd' => 10, 'Dummy' => 11, ],
        self::TYPE_CAMELNAME     => ['artbcrcdcode' => 0, 'artbcrcdname' => 1, 'artbcrcdglacct' => 2, 'artbcrcdcustid' => 3, 'artbcrcdchrgglacct' => 4, 'artbcrcdchrgrate' => 5, 'artbcrcdchrgtrancost' => 6, 'artbcrcdccsurchgpct' => 7, 'artbcrcdlmccsurchgpct' => 8, 'dateupdtd' => 9, 'timeupdtd' => 10, 'dummy' => 11, ],
        self::TYPE_COLNAME       => [ArCreditCardCodeTableMap::COL_ARTBCRCDCODE => 0, ArCreditCardCodeTableMap::COL_ARTBCRCDNAME => 1, ArCreditCardCodeTableMap::COL_ARTBCRCDGLACCT => 2, ArCreditCardCodeTableMap::COL_ARTBCRCDCUSTID => 3, ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGGLACCT => 4, ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE => 5, ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST => 6, ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT => 7, ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT => 8, ArCreditCardCodeTableMap::COL_DATEUPDTD => 9, ArCreditCardCodeTableMap::COL_TIMEUPDTD => 10, ArCreditCardCodeTableMap::COL_DUMMY => 11, ],
        self::TYPE_FIELDNAME     => ['ArtbCrcdCode' => 0, 'ArtbCrcdName' => 1, 'ArtbCrcdGlAcct' => 2, 'ArtbCrcdCustId' => 3, 'ArtbCrcdChrgGlAcct' => 4, 'ArtbCrcdChrgRate' => 5, 'ArtbCrcdChrgTranCost' => 6, 'ArtbCrcdCcSurchgPct' => 7, 'ArtbCrcdLmCcSurchgPct' => 8, 'DateUpdtd' => 9, 'TimeUpdtd' => 10, 'dummy' => 11, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Artbcrcdcode' => 'ARTBCRCDCODE',
        'ArCreditCardCode.Artbcrcdcode' => 'ARTBCRCDCODE',
        'artbcrcdcode' => 'ARTBCRCDCODE',
        'arCreditCardCode.artbcrcdcode' => 'ARTBCRCDCODE',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDCODE' => 'ARTBCRCDCODE',
        'COL_ARTBCRCDCODE' => 'ARTBCRCDCODE',
        'ArtbCrcdCode' => 'ARTBCRCDCODE',
        'ar_cust_crcd.ArtbCrcdCode' => 'ARTBCRCDCODE',
        'Artbcrcdname' => 'ARTBCRCDNAME',
        'ArCreditCardCode.Artbcrcdname' => 'ARTBCRCDNAME',
        'artbcrcdname' => 'ARTBCRCDNAME',
        'arCreditCardCode.artbcrcdname' => 'ARTBCRCDNAME',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDNAME' => 'ARTBCRCDNAME',
        'COL_ARTBCRCDNAME' => 'ARTBCRCDNAME',
        'ArtbCrcdName' => 'ARTBCRCDNAME',
        'ar_cust_crcd.ArtbCrcdName' => 'ARTBCRCDNAME',
        'Artbcrcdglacct' => 'ARTBCRCDGLACCT',
        'ArCreditCardCode.Artbcrcdglacct' => 'ARTBCRCDGLACCT',
        'artbcrcdglacct' => 'ARTBCRCDGLACCT',
        'arCreditCardCode.artbcrcdglacct' => 'ARTBCRCDGLACCT',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDGLACCT' => 'ARTBCRCDGLACCT',
        'COL_ARTBCRCDGLACCT' => 'ARTBCRCDGLACCT',
        'ArtbCrcdGlAcct' => 'ARTBCRCDGLACCT',
        'ar_cust_crcd.ArtbCrcdGlAcct' => 'ARTBCRCDGLACCT',
        'Artbcrcdcustid' => 'ARTBCRCDCUSTID',
        'ArCreditCardCode.Artbcrcdcustid' => 'ARTBCRCDCUSTID',
        'artbcrcdcustid' => 'ARTBCRCDCUSTID',
        'arCreditCardCode.artbcrcdcustid' => 'ARTBCRCDCUSTID',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDCUSTID' => 'ARTBCRCDCUSTID',
        'COL_ARTBCRCDCUSTID' => 'ARTBCRCDCUSTID',
        'ArtbCrcdCustId' => 'ARTBCRCDCUSTID',
        'ar_cust_crcd.ArtbCrcdCustId' => 'ARTBCRCDCUSTID',
        'Artbcrcdchrgglacct' => 'ARTBCRCDCHRGGLACCT',
        'ArCreditCardCode.Artbcrcdchrgglacct' => 'ARTBCRCDCHRGGLACCT',
        'artbcrcdchrgglacct' => 'ARTBCRCDCHRGGLACCT',
        'arCreditCardCode.artbcrcdchrgglacct' => 'ARTBCRCDCHRGGLACCT',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGGLACCT' => 'ARTBCRCDCHRGGLACCT',
        'COL_ARTBCRCDCHRGGLACCT' => 'ARTBCRCDCHRGGLACCT',
        'ArtbCrcdChrgGlAcct' => 'ARTBCRCDCHRGGLACCT',
        'ar_cust_crcd.ArtbCrcdChrgGlAcct' => 'ARTBCRCDCHRGGLACCT',
        'Artbcrcdchrgrate' => 'ARTBCRCDCHRGRATE',
        'ArCreditCardCode.Artbcrcdchrgrate' => 'ARTBCRCDCHRGRATE',
        'artbcrcdchrgrate' => 'ARTBCRCDCHRGRATE',
        'arCreditCardCode.artbcrcdchrgrate' => 'ARTBCRCDCHRGRATE',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE' => 'ARTBCRCDCHRGRATE',
        'COL_ARTBCRCDCHRGRATE' => 'ARTBCRCDCHRGRATE',
        'ArtbCrcdChrgRate' => 'ARTBCRCDCHRGRATE',
        'ar_cust_crcd.ArtbCrcdChrgRate' => 'ARTBCRCDCHRGRATE',
        'Artbcrcdchrgtrancost' => 'ARTBCRCDCHRGTRANCOST',
        'ArCreditCardCode.Artbcrcdchrgtrancost' => 'ARTBCRCDCHRGTRANCOST',
        'artbcrcdchrgtrancost' => 'ARTBCRCDCHRGTRANCOST',
        'arCreditCardCode.artbcrcdchrgtrancost' => 'ARTBCRCDCHRGTRANCOST',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST' => 'ARTBCRCDCHRGTRANCOST',
        'COL_ARTBCRCDCHRGTRANCOST' => 'ARTBCRCDCHRGTRANCOST',
        'ArtbCrcdChrgTranCost' => 'ARTBCRCDCHRGTRANCOST',
        'ar_cust_crcd.ArtbCrcdChrgTranCost' => 'ARTBCRCDCHRGTRANCOST',
        'Artbcrcdccsurchgpct' => 'ARTBCRCDCCSURCHGPCT',
        'ArCreditCardCode.Artbcrcdccsurchgpct' => 'ARTBCRCDCCSURCHGPCT',
        'artbcrcdccsurchgpct' => 'ARTBCRCDCCSURCHGPCT',
        'arCreditCardCode.artbcrcdccsurchgpct' => 'ARTBCRCDCCSURCHGPCT',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT' => 'ARTBCRCDCCSURCHGPCT',
        'COL_ARTBCRCDCCSURCHGPCT' => 'ARTBCRCDCCSURCHGPCT',
        'ArtbCrcdCcSurchgPct' => 'ARTBCRCDCCSURCHGPCT',
        'ar_cust_crcd.ArtbCrcdCcSurchgPct' => 'ARTBCRCDCCSURCHGPCT',
        'Artbcrcdlmccsurchgpct' => 'ARTBCRCDLMCCSURCHGPCT',
        'ArCreditCardCode.Artbcrcdlmccsurchgpct' => 'ARTBCRCDLMCCSURCHGPCT',
        'artbcrcdlmccsurchgpct' => 'ARTBCRCDLMCCSURCHGPCT',
        'arCreditCardCode.artbcrcdlmccsurchgpct' => 'ARTBCRCDLMCCSURCHGPCT',
        'ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT' => 'ARTBCRCDLMCCSURCHGPCT',
        'COL_ARTBCRCDLMCCSURCHGPCT' => 'ARTBCRCDLMCCSURCHGPCT',
        'ArtbCrcdLmCcSurchgPct' => 'ARTBCRCDLMCCSURCHGPCT',
        'ar_cust_crcd.ArtbCrcdLmCcSurchgPct' => 'ARTBCRCDLMCCSURCHGPCT',
        'Dateupdtd' => 'DATEUPDTD',
        'ArCreditCardCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'arCreditCardCode.dateupdtd' => 'DATEUPDTD',
        'ArCreditCardCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_cust_crcd.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ArCreditCardCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'arCreditCardCode.timeupdtd' => 'TIMEUPDTD',
        'ArCreditCardCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_cust_crcd.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ArCreditCardCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'arCreditCardCode.dummy' => 'DUMMY',
        'ArCreditCardCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_cust_crcd.dummy' => 'DUMMY',
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
        $this->setName('ar_cust_crcd');
        $this->setPhpName('ArCreditCardCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArCreditCardCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbCrcdCode', 'Artbcrcdcode', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbCrcdName', 'Artbcrcdname', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtbCrcdGlAcct', 'Artbcrcdglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCrcdCustId', 'Artbcrcdcustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCrcdChrgGlAcct', 'Artbcrcdchrgglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCrcdChrgRate', 'Artbcrcdchrgrate', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbCrcdChrgTranCost', 'Artbcrcdchrgtrancost', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbCrcdCcSurchgPct', 'Artbcrcdccsurchgpct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbCrcdLmCcSurchgPct', 'Artbcrcdlmccsurchgpct', 'DECIMAL', false, 20, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artbcrcdcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArCreditCardCodeTableMap::CLASS_DEFAULT : ArCreditCardCodeTableMap::OM_CLASS;
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
     * @return array (ArCreditCardCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ArCreditCardCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArCreditCardCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArCreditCardCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArCreditCardCodeTableMap::OM_CLASS;
            /** @var ArCreditCardCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArCreditCardCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ArCreditCardCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArCreditCardCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArCreditCardCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArCreditCardCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDNAME);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDGLACCT);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCUSTID);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGGLACCT);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArCreditCardCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbCrcdCode');
            $criteria->addSelectColumn($alias . '.ArtbCrcdName');
            $criteria->addSelectColumn($alias . '.ArtbCrcdGlAcct');
            $criteria->addSelectColumn($alias . '.ArtbCrcdCustId');
            $criteria->addSelectColumn($alias . '.ArtbCrcdChrgGlAcct');
            $criteria->addSelectColumn($alias . '.ArtbCrcdChrgRate');
            $criteria->addSelectColumn($alias . '.ArtbCrcdChrgTranCost');
            $criteria->addSelectColumn($alias . '.ArtbCrcdCcSurchgPct');
            $criteria->addSelectColumn($alias . '.ArtbCrcdLmCcSurchgPct');
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
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDNAME);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDGLACCT);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCUSTID);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGGLACCT);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ArCreditCardCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArtbCrcdCode');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdName');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdGlAcct');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdCustId');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdChrgGlAcct');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdChrgRate');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdChrgTranCost');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdCcSurchgPct');
            $criteria->removeSelectColumn($alias . '.ArtbCrcdLmCcSurchgPct');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArCreditCardCodeTableMap::DATABASE_NAME)->getTable(ArCreditCardCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ArCreditCardCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ArCreditCardCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCreditCardCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArCreditCardCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArCreditCardCodeTableMap::DATABASE_NAME);
            $criteria->add(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE, (array) $values, Criteria::IN);
        }

        $query = ArCreditCardCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArCreditCardCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArCreditCardCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_crcd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ArCreditCardCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArCreditCardCode or Criteria object.
     *
     * @param mixed $criteria Criteria or ArCreditCardCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCreditCardCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArCreditCardCode object
        }


        // Set the correct dbName
        $query = ArCreditCardCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
