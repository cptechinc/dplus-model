<?php

namespace Map;

use \RcyclReceipt;
use \RcyclReceiptQuery;
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
 * This class defines the structure of the 'rcycl_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class RcyclReceiptTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.RcyclReceiptTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'rcycl_head';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'RcyclReceipt';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\RcyclReceipt';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'RcyclReceipt';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the RcyhdRcptBulk field
     */
    public const COL_RCYHDRCPTBULK = 'rcycl_head.RcyhdRcptBulk';

    /**
     * the column name for the RcyhdCntrlNbr field
     */
    public const COL_RCYHDCNTRLNBR = 'rcycl_head.RcyhdCntrlNbr';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'rcycl_head.ArcuCustId';

    /**
     * the column name for the ArtbGenrId field
     */
    public const COL_ARTBGENRID = 'rcycl_head.ArtbGenrId';

    /**
     * the column name for the RcyhdBolNbr field
     */
    public const COL_RCYHDBOLNBR = 'rcycl_head.RcyhdBolNbr';

    /**
     * the column name for the RcyhdRcptDate field
     */
    public const COL_RCYHDRCPTDATE = 'rcycl_head.RcyhdRcptDate';

    /**
     * the column name for the RcyhdStatus field
     */
    public const COL_RCYHDSTATUS = 'rcycl_head.RcyhdStatus';

    /**
     * the column name for the RcyhdEnteredBy field
     */
    public const COL_RCYHDENTEREDBY = 'rcycl_head.RcyhdEnteredBy';

    /**
     * the column name for the RcyhdEnteredDate field
     */
    public const COL_RCYHDENTEREDDATE = 'rcycl_head.RcyhdEnteredDate';

    /**
     * the column name for the RcyhdEnteredTime field
     */
    public const COL_RCYHDENTEREDTIME = 'rcycl_head.RcyhdEnteredTime';

    /**
     * the column name for the RcyhdClosedBy field
     */
    public const COL_RCYHDCLOSEDBY = 'rcycl_head.RcyhdClosedBy';

    /**
     * the column name for the RcyhdClosedDate field
     */
    public const COL_RCYHDCLOSEDDATE = 'rcycl_head.RcyhdClosedDate';

    /**
     * the column name for the RcyhdClosedTime field
     */
    public const COL_RCYHDCLOSEDTIME = 'rcycl_head.RcyhdClosedTime';

    /**
     * the column name for the RcyhdWhse field
     */
    public const COL_RCYHDWHSE = 'rcycl_head.RcyhdWhse';

    /**
     * the column name for the RcyhdPcId field
     */
    public const COL_RCYHDPCID = 'rcycl_head.RcyhdPcId';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'rcycl_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'rcycl_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'rcycl_head.dummy';

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
        self::TYPE_PHPNAME       => ['Rcyhdrcptbulk', 'Rcyhdcntrlnbr', 'Arcucustid', 'Artbgenrid', 'Rcyhdbolnbr', 'Rcyhdrcptdate', 'Rcyhdstatus', 'Rcyhdenteredby', 'Rcyhdentereddate', 'Rcyhdenteredtime', 'Rcyhdclosedby', 'Rcyhdcloseddate', 'Rcyhdclosedtime', 'Rcyhdwhse', 'Rcyhdpcid', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['rcyhdrcptbulk', 'rcyhdcntrlnbr', 'arcucustid', 'artbgenrid', 'rcyhdbolnbr', 'rcyhdrcptdate', 'rcyhdstatus', 'rcyhdenteredby', 'rcyhdentereddate', 'rcyhdenteredtime', 'rcyhdclosedby', 'rcyhdcloseddate', 'rcyhdclosedtime', 'rcyhdwhse', 'rcyhdpcid', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [RcyclReceiptTableMap::COL_RCYHDRCPTBULK, RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, RcyclReceiptTableMap::COL_ARCUCUSTID, RcyclReceiptTableMap::COL_ARTBGENRID, RcyclReceiptTableMap::COL_RCYHDBOLNBR, RcyclReceiptTableMap::COL_RCYHDRCPTDATE, RcyclReceiptTableMap::COL_RCYHDSTATUS, RcyclReceiptTableMap::COL_RCYHDENTEREDBY, RcyclReceiptTableMap::COL_RCYHDENTEREDDATE, RcyclReceiptTableMap::COL_RCYHDENTEREDTIME, RcyclReceiptTableMap::COL_RCYHDCLOSEDBY, RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE, RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME, RcyclReceiptTableMap::COL_RCYHDWHSE, RcyclReceiptTableMap::COL_RCYHDPCID, RcyclReceiptTableMap::COL_DATEUPDTD, RcyclReceiptTableMap::COL_TIMEUPDTD, RcyclReceiptTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['RcyhdRcptBulk', 'RcyhdCntrlNbr', 'ArcuCustId', 'ArtbGenrId', 'RcyhdBolNbr', 'RcyhdRcptDate', 'RcyhdStatus', 'RcyhdEnteredBy', 'RcyhdEnteredDate', 'RcyhdEnteredTime', 'RcyhdClosedBy', 'RcyhdClosedDate', 'RcyhdClosedTime', 'RcyhdWhse', 'RcyhdPcId', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, ]
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
        self::TYPE_PHPNAME       => ['Rcyhdrcptbulk' => 0, 'Rcyhdcntrlnbr' => 1, 'Arcucustid' => 2, 'Artbgenrid' => 3, 'Rcyhdbolnbr' => 4, 'Rcyhdrcptdate' => 5, 'Rcyhdstatus' => 6, 'Rcyhdenteredby' => 7, 'Rcyhdentereddate' => 8, 'Rcyhdenteredtime' => 9, 'Rcyhdclosedby' => 10, 'Rcyhdcloseddate' => 11, 'Rcyhdclosedtime' => 12, 'Rcyhdwhse' => 13, 'Rcyhdpcid' => 14, 'Dateupdtd' => 15, 'Timeupdtd' => 16, 'Dummy' => 17, ],
        self::TYPE_CAMELNAME     => ['rcyhdrcptbulk' => 0, 'rcyhdcntrlnbr' => 1, 'arcucustid' => 2, 'artbgenrid' => 3, 'rcyhdbolnbr' => 4, 'rcyhdrcptdate' => 5, 'rcyhdstatus' => 6, 'rcyhdenteredby' => 7, 'rcyhdentereddate' => 8, 'rcyhdenteredtime' => 9, 'rcyhdclosedby' => 10, 'rcyhdcloseddate' => 11, 'rcyhdclosedtime' => 12, 'rcyhdwhse' => 13, 'rcyhdpcid' => 14, 'dateupdtd' => 15, 'timeupdtd' => 16, 'dummy' => 17, ],
        self::TYPE_COLNAME       => [RcyclReceiptTableMap::COL_RCYHDRCPTBULK => 0, RcyclReceiptTableMap::COL_RCYHDCNTRLNBR => 1, RcyclReceiptTableMap::COL_ARCUCUSTID => 2, RcyclReceiptTableMap::COL_ARTBGENRID => 3, RcyclReceiptTableMap::COL_RCYHDBOLNBR => 4, RcyclReceiptTableMap::COL_RCYHDRCPTDATE => 5, RcyclReceiptTableMap::COL_RCYHDSTATUS => 6, RcyclReceiptTableMap::COL_RCYHDENTEREDBY => 7, RcyclReceiptTableMap::COL_RCYHDENTEREDDATE => 8, RcyclReceiptTableMap::COL_RCYHDENTEREDTIME => 9, RcyclReceiptTableMap::COL_RCYHDCLOSEDBY => 10, RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE => 11, RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME => 12, RcyclReceiptTableMap::COL_RCYHDWHSE => 13, RcyclReceiptTableMap::COL_RCYHDPCID => 14, RcyclReceiptTableMap::COL_DATEUPDTD => 15, RcyclReceiptTableMap::COL_TIMEUPDTD => 16, RcyclReceiptTableMap::COL_DUMMY => 17, ],
        self::TYPE_FIELDNAME     => ['RcyhdRcptBulk' => 0, 'RcyhdCntrlNbr' => 1, 'ArcuCustId' => 2, 'ArtbGenrId' => 3, 'RcyhdBolNbr' => 4, 'RcyhdRcptDate' => 5, 'RcyhdStatus' => 6, 'RcyhdEnteredBy' => 7, 'RcyhdEnteredDate' => 8, 'RcyhdEnteredTime' => 9, 'RcyhdClosedBy' => 10, 'RcyhdClosedDate' => 11, 'RcyhdClosedTime' => 12, 'RcyhdWhse' => 13, 'RcyhdPcId' => 14, 'DateUpdtd' => 15, 'TimeUpdtd' => 16, 'dummy' => 17, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Rcyhdrcptbulk' => 'RCYHDRCPTBULK',
        'RcyclReceipt.Rcyhdrcptbulk' => 'RCYHDRCPTBULK',
        'rcyhdrcptbulk' => 'RCYHDRCPTBULK',
        'rcyclReceipt.rcyhdrcptbulk' => 'RCYHDRCPTBULK',
        'RcyclReceiptTableMap::COL_RCYHDRCPTBULK' => 'RCYHDRCPTBULK',
        'COL_RCYHDRCPTBULK' => 'RCYHDRCPTBULK',
        'RcyhdRcptBulk' => 'RCYHDRCPTBULK',
        'rcycl_head.RcyhdRcptBulk' => 'RCYHDRCPTBULK',
        'Rcyhdcntrlnbr' => 'RCYHDCNTRLNBR',
        'RcyclReceipt.Rcyhdcntrlnbr' => 'RCYHDCNTRLNBR',
        'rcyhdcntrlnbr' => 'RCYHDCNTRLNBR',
        'rcyclReceipt.rcyhdcntrlnbr' => 'RCYHDCNTRLNBR',
        'RcyclReceiptTableMap::COL_RCYHDCNTRLNBR' => 'RCYHDCNTRLNBR',
        'COL_RCYHDCNTRLNBR' => 'RCYHDCNTRLNBR',
        'RcyhdCntrlNbr' => 'RCYHDCNTRLNBR',
        'rcycl_head.RcyhdCntrlNbr' => 'RCYHDCNTRLNBR',
        'Arcucustid' => 'ARCUCUSTID',
        'RcyclReceipt.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'rcyclReceipt.arcucustid' => 'ARCUCUSTID',
        'RcyclReceiptTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'rcycl_head.ArcuCustId' => 'ARCUCUSTID',
        'Artbgenrid' => 'ARTBGENRID',
        'RcyclReceipt.Artbgenrid' => 'ARTBGENRID',
        'artbgenrid' => 'ARTBGENRID',
        'rcyclReceipt.artbgenrid' => 'ARTBGENRID',
        'RcyclReceiptTableMap::COL_ARTBGENRID' => 'ARTBGENRID',
        'COL_ARTBGENRID' => 'ARTBGENRID',
        'ArtbGenrId' => 'ARTBGENRID',
        'rcycl_head.ArtbGenrId' => 'ARTBGENRID',
        'Rcyhdbolnbr' => 'RCYHDBOLNBR',
        'RcyclReceipt.Rcyhdbolnbr' => 'RCYHDBOLNBR',
        'rcyhdbolnbr' => 'RCYHDBOLNBR',
        'rcyclReceipt.rcyhdbolnbr' => 'RCYHDBOLNBR',
        'RcyclReceiptTableMap::COL_RCYHDBOLNBR' => 'RCYHDBOLNBR',
        'COL_RCYHDBOLNBR' => 'RCYHDBOLNBR',
        'RcyhdBolNbr' => 'RCYHDBOLNBR',
        'rcycl_head.RcyhdBolNbr' => 'RCYHDBOLNBR',
        'Rcyhdrcptdate' => 'RCYHDRCPTDATE',
        'RcyclReceipt.Rcyhdrcptdate' => 'RCYHDRCPTDATE',
        'rcyhdrcptdate' => 'RCYHDRCPTDATE',
        'rcyclReceipt.rcyhdrcptdate' => 'RCYHDRCPTDATE',
        'RcyclReceiptTableMap::COL_RCYHDRCPTDATE' => 'RCYHDRCPTDATE',
        'COL_RCYHDRCPTDATE' => 'RCYHDRCPTDATE',
        'RcyhdRcptDate' => 'RCYHDRCPTDATE',
        'rcycl_head.RcyhdRcptDate' => 'RCYHDRCPTDATE',
        'Rcyhdstatus' => 'RCYHDSTATUS',
        'RcyclReceipt.Rcyhdstatus' => 'RCYHDSTATUS',
        'rcyhdstatus' => 'RCYHDSTATUS',
        'rcyclReceipt.rcyhdstatus' => 'RCYHDSTATUS',
        'RcyclReceiptTableMap::COL_RCYHDSTATUS' => 'RCYHDSTATUS',
        'COL_RCYHDSTATUS' => 'RCYHDSTATUS',
        'RcyhdStatus' => 'RCYHDSTATUS',
        'rcycl_head.RcyhdStatus' => 'RCYHDSTATUS',
        'Rcyhdenteredby' => 'RCYHDENTEREDBY',
        'RcyclReceipt.Rcyhdenteredby' => 'RCYHDENTEREDBY',
        'rcyhdenteredby' => 'RCYHDENTEREDBY',
        'rcyclReceipt.rcyhdenteredby' => 'RCYHDENTEREDBY',
        'RcyclReceiptTableMap::COL_RCYHDENTEREDBY' => 'RCYHDENTEREDBY',
        'COL_RCYHDENTEREDBY' => 'RCYHDENTEREDBY',
        'RcyhdEnteredBy' => 'RCYHDENTEREDBY',
        'rcycl_head.RcyhdEnteredBy' => 'RCYHDENTEREDBY',
        'Rcyhdentereddate' => 'RCYHDENTEREDDATE',
        'RcyclReceipt.Rcyhdentereddate' => 'RCYHDENTEREDDATE',
        'rcyhdentereddate' => 'RCYHDENTEREDDATE',
        'rcyclReceipt.rcyhdentereddate' => 'RCYHDENTEREDDATE',
        'RcyclReceiptTableMap::COL_RCYHDENTEREDDATE' => 'RCYHDENTEREDDATE',
        'COL_RCYHDENTEREDDATE' => 'RCYHDENTEREDDATE',
        'RcyhdEnteredDate' => 'RCYHDENTEREDDATE',
        'rcycl_head.RcyhdEnteredDate' => 'RCYHDENTEREDDATE',
        'Rcyhdenteredtime' => 'RCYHDENTEREDTIME',
        'RcyclReceipt.Rcyhdenteredtime' => 'RCYHDENTEREDTIME',
        'rcyhdenteredtime' => 'RCYHDENTEREDTIME',
        'rcyclReceipt.rcyhdenteredtime' => 'RCYHDENTEREDTIME',
        'RcyclReceiptTableMap::COL_RCYHDENTEREDTIME' => 'RCYHDENTEREDTIME',
        'COL_RCYHDENTEREDTIME' => 'RCYHDENTEREDTIME',
        'RcyhdEnteredTime' => 'RCYHDENTEREDTIME',
        'rcycl_head.RcyhdEnteredTime' => 'RCYHDENTEREDTIME',
        'Rcyhdclosedby' => 'RCYHDCLOSEDBY',
        'RcyclReceipt.Rcyhdclosedby' => 'RCYHDCLOSEDBY',
        'rcyhdclosedby' => 'RCYHDCLOSEDBY',
        'rcyclReceipt.rcyhdclosedby' => 'RCYHDCLOSEDBY',
        'RcyclReceiptTableMap::COL_RCYHDCLOSEDBY' => 'RCYHDCLOSEDBY',
        'COL_RCYHDCLOSEDBY' => 'RCYHDCLOSEDBY',
        'RcyhdClosedBy' => 'RCYHDCLOSEDBY',
        'rcycl_head.RcyhdClosedBy' => 'RCYHDCLOSEDBY',
        'Rcyhdcloseddate' => 'RCYHDCLOSEDDATE',
        'RcyclReceipt.Rcyhdcloseddate' => 'RCYHDCLOSEDDATE',
        'rcyhdcloseddate' => 'RCYHDCLOSEDDATE',
        'rcyclReceipt.rcyhdcloseddate' => 'RCYHDCLOSEDDATE',
        'RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE' => 'RCYHDCLOSEDDATE',
        'COL_RCYHDCLOSEDDATE' => 'RCYHDCLOSEDDATE',
        'RcyhdClosedDate' => 'RCYHDCLOSEDDATE',
        'rcycl_head.RcyhdClosedDate' => 'RCYHDCLOSEDDATE',
        'Rcyhdclosedtime' => 'RCYHDCLOSEDTIME',
        'RcyclReceipt.Rcyhdclosedtime' => 'RCYHDCLOSEDTIME',
        'rcyhdclosedtime' => 'RCYHDCLOSEDTIME',
        'rcyclReceipt.rcyhdclosedtime' => 'RCYHDCLOSEDTIME',
        'RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME' => 'RCYHDCLOSEDTIME',
        'COL_RCYHDCLOSEDTIME' => 'RCYHDCLOSEDTIME',
        'RcyhdClosedTime' => 'RCYHDCLOSEDTIME',
        'rcycl_head.RcyhdClosedTime' => 'RCYHDCLOSEDTIME',
        'Rcyhdwhse' => 'RCYHDWHSE',
        'RcyclReceipt.Rcyhdwhse' => 'RCYHDWHSE',
        'rcyhdwhse' => 'RCYHDWHSE',
        'rcyclReceipt.rcyhdwhse' => 'RCYHDWHSE',
        'RcyclReceiptTableMap::COL_RCYHDWHSE' => 'RCYHDWHSE',
        'COL_RCYHDWHSE' => 'RCYHDWHSE',
        'RcyhdWhse' => 'RCYHDWHSE',
        'rcycl_head.RcyhdWhse' => 'RCYHDWHSE',
        'Rcyhdpcid' => 'RCYHDPCID',
        'RcyclReceipt.Rcyhdpcid' => 'RCYHDPCID',
        'rcyhdpcid' => 'RCYHDPCID',
        'rcyclReceipt.rcyhdpcid' => 'RCYHDPCID',
        'RcyclReceiptTableMap::COL_RCYHDPCID' => 'RCYHDPCID',
        'COL_RCYHDPCID' => 'RCYHDPCID',
        'RcyhdPcId' => 'RCYHDPCID',
        'rcycl_head.RcyhdPcId' => 'RCYHDPCID',
        'Dateupdtd' => 'DATEUPDTD',
        'RcyclReceipt.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'rcyclReceipt.dateupdtd' => 'DATEUPDTD',
        'RcyclReceiptTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'rcycl_head.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'RcyclReceipt.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'rcyclReceipt.timeupdtd' => 'TIMEUPDTD',
        'RcyclReceiptTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'rcycl_head.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'RcyclReceipt.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'rcyclReceipt.dummy' => 'DUMMY',
        'RcyclReceiptTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'rcycl_head.dummy' => 'DUMMY',
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
        $this->setName('rcycl_head');
        $this->setPhpName('RcyclReceipt');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\RcyclReceipt');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('RcyhdRcptBulk', 'Rcyhdrcptbulk', 'CHAR', true, null, '');
        $this->addPrimaryKey('RcyhdCntrlNbr', 'Rcyhdcntrlnbr', 'INTEGER', true, null, 0);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArtbGenrId', 'Artbgenrid', 'VARCHAR', 'rcycl_generator', 'ArtbGenrId', true, 6, '');
        $this->addColumn('RcyhdBolNbr', 'Rcyhdbolnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('RcyhdRcptDate', 'Rcyhdrcptdate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdStatus', 'Rcyhdstatus', 'CHAR', true, null, 'O');
        $this->addColumn('RcyhdEnteredBy', 'Rcyhdenteredby', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdEnteredDate', 'Rcyhdentereddate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdEnteredTime', 'Rcyhdenteredtime', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdClosedBy', 'Rcyhdclosedby', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdClosedDate', 'Rcyhdcloseddate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdClosedTime', 'Rcyhdclosedtime', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdWhse', 'Rcyhdwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('RcyhdPcId', 'Rcyhdpcid', 'VARCHAR', true, 10, '');
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
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('RcyclGenerator', '\\RcyclGenerator', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArtbGenrId',
    1 => ':ArtbGenrId',
  ),
), null, null, null, false);
        $this->addRelation('RcyclReceiptDetail', '\\RcyclReceiptDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':RcyhdCntrlNbr',
    1 => ':RcyhdCntrlNbr',
  ),
  1 =>
  array (
    0 => ':RcyhdRcptBulk',
    1 => ':RcyhdRcptBulk',
  ),
), null, null, 'RcyclReceiptDetails', false);
        $this->addRelation('RcyclReceiptLot', '\\RcyclReceiptLot', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':RcyhdCntrlNbr',
    1 => ':RcyhdCntrlNbr',
  ),
  1 =>
  array (
    0 => ':RcyhdRcptBulk',
    1 => ':RcyhdRcptBulk',
  ),
), null, null, 'RcyclReceiptLots', false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \RcyclReceipt $obj A \RcyclReceipt object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(RcyclReceipt $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getRcyhdrcptbulk() || is_scalar($obj->getRcyhdrcptbulk()) || is_callable([$obj->getRcyhdrcptbulk(), '__toString']) ? (string) $obj->getRcyhdrcptbulk() : $obj->getRcyhdrcptbulk()), (null === $obj->getRcyhdcntrlnbr() || is_scalar($obj->getRcyhdcntrlnbr()) || is_callable([$obj->getRcyhdcntrlnbr(), '__toString']) ? (string) $obj->getRcyhdcntrlnbr() : $obj->getRcyhdcntrlnbr())]);
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
     * @param mixed $value A \RcyclReceipt object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \RcyclReceipt) {
                $key = serialize([(null === $value->getRcyhdrcptbulk() || is_scalar($value->getRcyhdrcptbulk()) || is_callable([$value->getRcyhdrcptbulk(), '__toString']) ? (string) $value->getRcyhdrcptbulk() : $value->getRcyhdrcptbulk()), (null === $value->getRcyhdcntrlnbr() || is_scalar($value->getRcyhdcntrlnbr()) || is_callable([$value->getRcyhdcntrlnbr(), '__toString']) ? (string) $value->getRcyhdcntrlnbr() : $value->getRcyhdcntrlnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \RcyclReceipt object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? RcyclReceiptTableMap::CLASS_DEFAULT : RcyclReceiptTableMap::OM_CLASS;
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
     * @return array (RcyclReceipt object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = RcyclReceiptTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = RcyclReceiptTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + RcyclReceiptTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RcyclReceiptTableMap::OM_CLASS;
            /** @var RcyclReceipt $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            RcyclReceiptTableMap::addInstanceToPool($obj, $key);
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
            $key = RcyclReceiptTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = RcyclReceiptTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var RcyclReceipt $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RcyclReceiptTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDRCPTBULK);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_ARTBGENRID);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDBOLNBR);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDRCPTDATE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDSTATUS);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDBY);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDWHSE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDPCID);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.RcyhdRcptBulk');
            $criteria->addSelectColumn($alias . '.RcyhdCntrlNbr');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArtbGenrId');
            $criteria->addSelectColumn($alias . '.RcyhdBolNbr');
            $criteria->addSelectColumn($alias . '.RcyhdRcptDate');
            $criteria->addSelectColumn($alias . '.RcyhdStatus');
            $criteria->addSelectColumn($alias . '.RcyhdEnteredBy');
            $criteria->addSelectColumn($alias . '.RcyhdEnteredDate');
            $criteria->addSelectColumn($alias . '.RcyhdEnteredTime');
            $criteria->addSelectColumn($alias . '.RcyhdClosedBy');
            $criteria->addSelectColumn($alias . '.RcyhdClosedDate');
            $criteria->addSelectColumn($alias . '.RcyhdClosedTime');
            $criteria->addSelectColumn($alias . '.RcyhdWhse');
            $criteria->addSelectColumn($alias . '.RcyhdPcId');
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
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDRCPTBULK);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_ARTBGENRID);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDBOLNBR);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDRCPTDATE);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDSTATUS);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDBY);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDWHSE);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_RCYHDPCID);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(RcyclReceiptTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.RcyhdRcptBulk');
            $criteria->removeSelectColumn($alias . '.RcyhdCntrlNbr');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.ArtbGenrId');
            $criteria->removeSelectColumn($alias . '.RcyhdBolNbr');
            $criteria->removeSelectColumn($alias . '.RcyhdRcptDate');
            $criteria->removeSelectColumn($alias . '.RcyhdStatus');
            $criteria->removeSelectColumn($alias . '.RcyhdEnteredBy');
            $criteria->removeSelectColumn($alias . '.RcyhdEnteredDate');
            $criteria->removeSelectColumn($alias . '.RcyhdEnteredTime');
            $criteria->removeSelectColumn($alias . '.RcyhdClosedBy');
            $criteria->removeSelectColumn($alias . '.RcyhdClosedDate');
            $criteria->removeSelectColumn($alias . '.RcyhdClosedTime');
            $criteria->removeSelectColumn($alias . '.RcyhdWhse');
            $criteria->removeSelectColumn($alias . '.RcyhdPcId');
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
        return Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptTableMap::DATABASE_NAME)->getTable(RcyclReceiptTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a RcyclReceipt or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or RcyclReceipt object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \RcyclReceipt) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RcyclReceiptTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = RcyclReceiptQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            RcyclReceiptTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                RcyclReceiptTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the rcycl_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return RcyclReceiptQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a RcyclReceipt or Criteria object.
     *
     * @param mixed $criteria Criteria or RcyclReceipt object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from RcyclReceipt object
        }


        // Set the correct dbName
        $query = RcyclReceiptQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
