<?php

namespace Map;

use \GlCode;
use \GlCodeQuery;
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
 * This class defines the structure of the 'gl_master' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class GlCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.GlCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'gl_master';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'GlCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\GlCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'GlCode';

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
     * the column name for the GlmaAcct field
     */
    public const COL_GLMAACCT = 'gl_master.GlmaAcct';

    /**
     * the column name for the GlmaDesc field
     */
    public const COL_GLMADESC = 'gl_master.GlmaDesc';

    /**
     * the column name for the GlmaDrCr field
     */
    public const COL_GLMADRCR = 'gl_master.GlmaDrCr';

    /**
     * the column name for the GlmaClosAcct field
     */
    public const COL_GLMACLOSACCT = 'gl_master.GlmaClosAcct';

    /**
     * the column name for the GlmaPackPost field
     */
    public const COL_GLMAPACKPOST = 'gl_master.GlmaPackPost';

    /**
     * the column name for the GlmaVald field
     */
    public const COL_GLMAVALD = 'gl_master.GlmaVald';

    /**
     * the column name for the GlmaCo01 field
     */
    public const COL_GLMACO01 = 'gl_master.GlmaCo01';

    /**
     * the column name for the GlmaCo02 field
     */
    public const COL_GLMACO02 = 'gl_master.GlmaCo02';

    /**
     * the column name for the GlmaCo03 field
     */
    public const COL_GLMACO03 = 'gl_master.GlmaCo03';

    /**
     * the column name for the GlmaCo04 field
     */
    public const COL_GLMACO04 = 'gl_master.GlmaCo04';

    /**
     * the column name for the GlmaCo05 field
     */
    public const COL_GLMACO05 = 'gl_master.GlmaCo05';

    /**
     * the column name for the GlmaCo06 field
     */
    public const COL_GLMACO06 = 'gl_master.GlmaCo06';

    /**
     * the column name for the GlmaCo07 field
     */
    public const COL_GLMACO07 = 'gl_master.GlmaCo07';

    /**
     * the column name for the GlmaCo08 field
     */
    public const COL_GLMACO08 = 'gl_master.GlmaCo08';

    /**
     * the column name for the GlmaCo09 field
     */
    public const COL_GLMACO09 = 'gl_master.GlmaCo09';

    /**
     * the column name for the GlmaCo10 field
     */
    public const COL_GLMACO10 = 'gl_master.GlmaCo10';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'gl_master.DateUpdtd';

    /**
     * the column name for the GlmaAcWhseAppendPos field
     */
    public const COL_GLMAACWHSEAPPENDPOS = 'gl_master.GlmaAcWhseAppendPos';

    /**
     * the column name for the GlmaAchAcct field
     */
    public const COL_GLMAACHACCT = 'gl_master.GlmaAchAcct';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'gl_master.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'gl_master.dummy';

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
        self::TYPE_PHPNAME       => ['Glmaacct', 'Glmadesc', 'Glmadrcr', 'Glmaclosacct', 'Glmapackpost', 'Glmavald', 'Glmaco01', 'Glmaco02', 'Glmaco03', 'Glmaco04', 'Glmaco05', 'Glmaco06', 'Glmaco07', 'Glmaco08', 'Glmaco09', 'Glmaco10', 'Dateupdtd', 'GlmaAcWhseAppendPos', 'GlmaAchAcct', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['glmaacct', 'glmadesc', 'glmadrcr', 'glmaclosacct', 'glmapackpost', 'glmavald', 'glmaco01', 'glmaco02', 'glmaco03', 'glmaco04', 'glmaco05', 'glmaco06', 'glmaco07', 'glmaco08', 'glmaco09', 'glmaco10', 'dateupdtd', 'glmaAcWhseAppendPos', 'glmaAchAcct', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [GlCodeTableMap::COL_GLMAACCT, GlCodeTableMap::COL_GLMADESC, GlCodeTableMap::COL_GLMADRCR, GlCodeTableMap::COL_GLMACLOSACCT, GlCodeTableMap::COL_GLMAPACKPOST, GlCodeTableMap::COL_GLMAVALD, GlCodeTableMap::COL_GLMACO01, GlCodeTableMap::COL_GLMACO02, GlCodeTableMap::COL_GLMACO03, GlCodeTableMap::COL_GLMACO04, GlCodeTableMap::COL_GLMACO05, GlCodeTableMap::COL_GLMACO06, GlCodeTableMap::COL_GLMACO07, GlCodeTableMap::COL_GLMACO08, GlCodeTableMap::COL_GLMACO09, GlCodeTableMap::COL_GLMACO10, GlCodeTableMap::COL_DATEUPDTD, GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS, GlCodeTableMap::COL_GLMAACHACCT, GlCodeTableMap::COL_TIMEUPDTD, GlCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['GlmaAcct', 'GlmaDesc', 'GlmaDrCr', 'GlmaClosAcct', 'GlmaPackPost', 'GlmaVald', 'GlmaCo01', 'GlmaCo02', 'GlmaCo03', 'GlmaCo04', 'GlmaCo05', 'GlmaCo06', 'GlmaCo07', 'GlmaCo08', 'GlmaCo09', 'GlmaCo10', 'DateUpdtd', 'GlmaAcWhseAppendPos', 'GlmaAchAcct', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Glmaacct' => 0, 'Glmadesc' => 1, 'Glmadrcr' => 2, 'Glmaclosacct' => 3, 'Glmapackpost' => 4, 'Glmavald' => 5, 'Glmaco01' => 6, 'Glmaco02' => 7, 'Glmaco03' => 8, 'Glmaco04' => 9, 'Glmaco05' => 10, 'Glmaco06' => 11, 'Glmaco07' => 12, 'Glmaco08' => 13, 'Glmaco09' => 14, 'Glmaco10' => 15, 'Dateupdtd' => 16, 'GlmaAcWhseAppendPos' => 17, 'GlmaAchAcct' => 18, 'Timeupdtd' => 19, 'Dummy' => 20, ],
        self::TYPE_CAMELNAME     => ['glmaacct' => 0, 'glmadesc' => 1, 'glmadrcr' => 2, 'glmaclosacct' => 3, 'glmapackpost' => 4, 'glmavald' => 5, 'glmaco01' => 6, 'glmaco02' => 7, 'glmaco03' => 8, 'glmaco04' => 9, 'glmaco05' => 10, 'glmaco06' => 11, 'glmaco07' => 12, 'glmaco08' => 13, 'glmaco09' => 14, 'glmaco10' => 15, 'dateupdtd' => 16, 'glmaAcWhseAppendPos' => 17, 'glmaAchAcct' => 18, 'timeupdtd' => 19, 'dummy' => 20, ],
        self::TYPE_COLNAME       => [GlCodeTableMap::COL_GLMAACCT => 0, GlCodeTableMap::COL_GLMADESC => 1, GlCodeTableMap::COL_GLMADRCR => 2, GlCodeTableMap::COL_GLMACLOSACCT => 3, GlCodeTableMap::COL_GLMAPACKPOST => 4, GlCodeTableMap::COL_GLMAVALD => 5, GlCodeTableMap::COL_GLMACO01 => 6, GlCodeTableMap::COL_GLMACO02 => 7, GlCodeTableMap::COL_GLMACO03 => 8, GlCodeTableMap::COL_GLMACO04 => 9, GlCodeTableMap::COL_GLMACO05 => 10, GlCodeTableMap::COL_GLMACO06 => 11, GlCodeTableMap::COL_GLMACO07 => 12, GlCodeTableMap::COL_GLMACO08 => 13, GlCodeTableMap::COL_GLMACO09 => 14, GlCodeTableMap::COL_GLMACO10 => 15, GlCodeTableMap::COL_DATEUPDTD => 16, GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS => 17, GlCodeTableMap::COL_GLMAACHACCT => 18, GlCodeTableMap::COL_TIMEUPDTD => 19, GlCodeTableMap::COL_DUMMY => 20, ],
        self::TYPE_FIELDNAME     => ['GlmaAcct' => 0, 'GlmaDesc' => 1, 'GlmaDrCr' => 2, 'GlmaClosAcct' => 3, 'GlmaPackPost' => 4, 'GlmaVald' => 5, 'GlmaCo01' => 6, 'GlmaCo02' => 7, 'GlmaCo03' => 8, 'GlmaCo04' => 9, 'GlmaCo05' => 10, 'GlmaCo06' => 11, 'GlmaCo07' => 12, 'GlmaCo08' => 13, 'GlmaCo09' => 14, 'GlmaCo10' => 15, 'DateUpdtd' => 16, 'GlmaAcWhseAppendPos' => 17, 'GlmaAchAcct' => 18, 'TimeUpdtd' => 19, 'dummy' => 20, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Glmaacct' => 'GLMAACCT',
        'GlCode.Glmaacct' => 'GLMAACCT',
        'glmaacct' => 'GLMAACCT',
        'glCode.glmaacct' => 'GLMAACCT',
        'GlCodeTableMap::COL_GLMAACCT' => 'GLMAACCT',
        'COL_GLMAACCT' => 'GLMAACCT',
        'GlmaAcct' => 'GLMAACCT',
        'gl_master.GlmaAcct' => 'GLMAACCT',
        'Glmadesc' => 'GLMADESC',
        'GlCode.Glmadesc' => 'GLMADESC',
        'glmadesc' => 'GLMADESC',
        'glCode.glmadesc' => 'GLMADESC',
        'GlCodeTableMap::COL_GLMADESC' => 'GLMADESC',
        'COL_GLMADESC' => 'GLMADESC',
        'GlmaDesc' => 'GLMADESC',
        'gl_master.GlmaDesc' => 'GLMADESC',
        'Glmadrcr' => 'GLMADRCR',
        'GlCode.Glmadrcr' => 'GLMADRCR',
        'glmadrcr' => 'GLMADRCR',
        'glCode.glmadrcr' => 'GLMADRCR',
        'GlCodeTableMap::COL_GLMADRCR' => 'GLMADRCR',
        'COL_GLMADRCR' => 'GLMADRCR',
        'GlmaDrCr' => 'GLMADRCR',
        'gl_master.GlmaDrCr' => 'GLMADRCR',
        'Glmaclosacct' => 'GLMACLOSACCT',
        'GlCode.Glmaclosacct' => 'GLMACLOSACCT',
        'glmaclosacct' => 'GLMACLOSACCT',
        'glCode.glmaclosacct' => 'GLMACLOSACCT',
        'GlCodeTableMap::COL_GLMACLOSACCT' => 'GLMACLOSACCT',
        'COL_GLMACLOSACCT' => 'GLMACLOSACCT',
        'GlmaClosAcct' => 'GLMACLOSACCT',
        'gl_master.GlmaClosAcct' => 'GLMACLOSACCT',
        'Glmapackpost' => 'GLMAPACKPOST',
        'GlCode.Glmapackpost' => 'GLMAPACKPOST',
        'glmapackpost' => 'GLMAPACKPOST',
        'glCode.glmapackpost' => 'GLMAPACKPOST',
        'GlCodeTableMap::COL_GLMAPACKPOST' => 'GLMAPACKPOST',
        'COL_GLMAPACKPOST' => 'GLMAPACKPOST',
        'GlmaPackPost' => 'GLMAPACKPOST',
        'gl_master.GlmaPackPost' => 'GLMAPACKPOST',
        'Glmavald' => 'GLMAVALD',
        'GlCode.Glmavald' => 'GLMAVALD',
        'glmavald' => 'GLMAVALD',
        'glCode.glmavald' => 'GLMAVALD',
        'GlCodeTableMap::COL_GLMAVALD' => 'GLMAVALD',
        'COL_GLMAVALD' => 'GLMAVALD',
        'GlmaVald' => 'GLMAVALD',
        'gl_master.GlmaVald' => 'GLMAVALD',
        'Glmaco01' => 'GLMACO01',
        'GlCode.Glmaco01' => 'GLMACO01',
        'glmaco01' => 'GLMACO01',
        'glCode.glmaco01' => 'GLMACO01',
        'GlCodeTableMap::COL_GLMACO01' => 'GLMACO01',
        'COL_GLMACO01' => 'GLMACO01',
        'GlmaCo01' => 'GLMACO01',
        'gl_master.GlmaCo01' => 'GLMACO01',
        'Glmaco02' => 'GLMACO02',
        'GlCode.Glmaco02' => 'GLMACO02',
        'glmaco02' => 'GLMACO02',
        'glCode.glmaco02' => 'GLMACO02',
        'GlCodeTableMap::COL_GLMACO02' => 'GLMACO02',
        'COL_GLMACO02' => 'GLMACO02',
        'GlmaCo02' => 'GLMACO02',
        'gl_master.GlmaCo02' => 'GLMACO02',
        'Glmaco03' => 'GLMACO03',
        'GlCode.Glmaco03' => 'GLMACO03',
        'glmaco03' => 'GLMACO03',
        'glCode.glmaco03' => 'GLMACO03',
        'GlCodeTableMap::COL_GLMACO03' => 'GLMACO03',
        'COL_GLMACO03' => 'GLMACO03',
        'GlmaCo03' => 'GLMACO03',
        'gl_master.GlmaCo03' => 'GLMACO03',
        'Glmaco04' => 'GLMACO04',
        'GlCode.Glmaco04' => 'GLMACO04',
        'glmaco04' => 'GLMACO04',
        'glCode.glmaco04' => 'GLMACO04',
        'GlCodeTableMap::COL_GLMACO04' => 'GLMACO04',
        'COL_GLMACO04' => 'GLMACO04',
        'GlmaCo04' => 'GLMACO04',
        'gl_master.GlmaCo04' => 'GLMACO04',
        'Glmaco05' => 'GLMACO05',
        'GlCode.Glmaco05' => 'GLMACO05',
        'glmaco05' => 'GLMACO05',
        'glCode.glmaco05' => 'GLMACO05',
        'GlCodeTableMap::COL_GLMACO05' => 'GLMACO05',
        'COL_GLMACO05' => 'GLMACO05',
        'GlmaCo05' => 'GLMACO05',
        'gl_master.GlmaCo05' => 'GLMACO05',
        'Glmaco06' => 'GLMACO06',
        'GlCode.Glmaco06' => 'GLMACO06',
        'glmaco06' => 'GLMACO06',
        'glCode.glmaco06' => 'GLMACO06',
        'GlCodeTableMap::COL_GLMACO06' => 'GLMACO06',
        'COL_GLMACO06' => 'GLMACO06',
        'GlmaCo06' => 'GLMACO06',
        'gl_master.GlmaCo06' => 'GLMACO06',
        'Glmaco07' => 'GLMACO07',
        'GlCode.Glmaco07' => 'GLMACO07',
        'glmaco07' => 'GLMACO07',
        'glCode.glmaco07' => 'GLMACO07',
        'GlCodeTableMap::COL_GLMACO07' => 'GLMACO07',
        'COL_GLMACO07' => 'GLMACO07',
        'GlmaCo07' => 'GLMACO07',
        'gl_master.GlmaCo07' => 'GLMACO07',
        'Glmaco08' => 'GLMACO08',
        'GlCode.Glmaco08' => 'GLMACO08',
        'glmaco08' => 'GLMACO08',
        'glCode.glmaco08' => 'GLMACO08',
        'GlCodeTableMap::COL_GLMACO08' => 'GLMACO08',
        'COL_GLMACO08' => 'GLMACO08',
        'GlmaCo08' => 'GLMACO08',
        'gl_master.GlmaCo08' => 'GLMACO08',
        'Glmaco09' => 'GLMACO09',
        'GlCode.Glmaco09' => 'GLMACO09',
        'glmaco09' => 'GLMACO09',
        'glCode.glmaco09' => 'GLMACO09',
        'GlCodeTableMap::COL_GLMACO09' => 'GLMACO09',
        'COL_GLMACO09' => 'GLMACO09',
        'GlmaCo09' => 'GLMACO09',
        'gl_master.GlmaCo09' => 'GLMACO09',
        'Glmaco10' => 'GLMACO10',
        'GlCode.Glmaco10' => 'GLMACO10',
        'glmaco10' => 'GLMACO10',
        'glCode.glmaco10' => 'GLMACO10',
        'GlCodeTableMap::COL_GLMACO10' => 'GLMACO10',
        'COL_GLMACO10' => 'GLMACO10',
        'GlmaCo10' => 'GLMACO10',
        'gl_master.GlmaCo10' => 'GLMACO10',
        'Dateupdtd' => 'DATEUPDTD',
        'GlCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'glCode.dateupdtd' => 'DATEUPDTD',
        'GlCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'gl_master.DateUpdtd' => 'DATEUPDTD',
        'GlmaAcWhseAppendPos' => 'GLMAACWHSEAPPENDPOS',
        'GlCode.GlmaAcWhseAppendPos' => 'GLMAACWHSEAPPENDPOS',
        'glmaAcWhseAppendPos' => 'GLMAACWHSEAPPENDPOS',
        'glCode.glmaAcWhseAppendPos' => 'GLMAACWHSEAPPENDPOS',
        'GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS' => 'GLMAACWHSEAPPENDPOS',
        'COL_GLMAACWHSEAPPENDPOS' => 'GLMAACWHSEAPPENDPOS',
        'gl_master.GlmaAcWhseAppendPos' => 'GLMAACWHSEAPPENDPOS',
        'GlmaAchAcct' => 'GLMAACHACCT',
        'GlCode.GlmaAchAcct' => 'GLMAACHACCT',
        'glmaAchAcct' => 'GLMAACHACCT',
        'glCode.glmaAchAcct' => 'GLMAACHACCT',
        'GlCodeTableMap::COL_GLMAACHACCT' => 'GLMAACHACCT',
        'COL_GLMAACHACCT' => 'GLMAACHACCT',
        'gl_master.GlmaAchAcct' => 'GLMAACHACCT',
        'Timeupdtd' => 'TIMEUPDTD',
        'GlCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'glCode.timeupdtd' => 'TIMEUPDTD',
        'GlCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'gl_master.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'GlCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'glCode.dummy' => 'DUMMY',
        'GlCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'gl_master.dummy' => 'DUMMY',
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
        $this->setName('gl_master');
        $this->setPhpName('GlCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\GlCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('GlmaAcct', 'Glmaacct', 'VARCHAR', true, 9, '');
        $this->addColumn('GlmaDesc', 'Glmadesc', 'VARCHAR', false, 30, null);
        $this->addColumn('GlmaDrCr', 'Glmadrcr', 'VARCHAR', false, 1, null);
        $this->addColumn('GlmaClosAcct', 'Glmaclosacct', 'VARCHAR', false, 9, null);
        $this->addColumn('GlmaPackPost', 'Glmapackpost', 'VARCHAR', false, 1, null);
        $this->addColumn('GlmaVald', 'Glmavald', 'VARCHAR', false, 1, null);
        $this->addColumn('GlmaCo01', 'Glmaco01', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo02', 'Glmaco02', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo03', 'Glmaco03', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo04', 'Glmaco04', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo05', 'Glmaco05', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo06', 'Glmaco06', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo07', 'Glmaco07', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo08', 'Glmaco08', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo09', 'Glmaco09', 'VARCHAR', false, 3, null);
        $this->addColumn('GlmaCo10', 'Glmaco10', 'VARCHAR', false, 3, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('GlmaAcWhseAppendPos', 'GlmaAcWhseAppendPos', 'INTEGER', false, 1, null);
        $this->addColumn('GlmaAchAcct', 'GlmaAchAcct', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Glmaacct', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? GlCodeTableMap::CLASS_DEFAULT : GlCodeTableMap::OM_CLASS;
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
     * @return array (GlCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = GlCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = GlCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + GlCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GlCodeTableMap::OM_CLASS;
            /** @var GlCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            GlCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = GlCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = GlCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var GlCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GlCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMAACCT);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMADESC);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMADRCR);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACLOSACCT);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMAPACKPOST);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMAVALD);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO01);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO02);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO03);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO04);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO05);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO06);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO07);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO08);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO09);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMACO10);
            $criteria->addSelectColumn(GlCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS);
            $criteria->addSelectColumn(GlCodeTableMap::COL_GLMAACHACCT);
            $criteria->addSelectColumn(GlCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(GlCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.GlmaAcct');
            $criteria->addSelectColumn($alias . '.GlmaDesc');
            $criteria->addSelectColumn($alias . '.GlmaDrCr');
            $criteria->addSelectColumn($alias . '.GlmaClosAcct');
            $criteria->addSelectColumn($alias . '.GlmaPackPost');
            $criteria->addSelectColumn($alias . '.GlmaVald');
            $criteria->addSelectColumn($alias . '.GlmaCo01');
            $criteria->addSelectColumn($alias . '.GlmaCo02');
            $criteria->addSelectColumn($alias . '.GlmaCo03');
            $criteria->addSelectColumn($alias . '.GlmaCo04');
            $criteria->addSelectColumn($alias . '.GlmaCo05');
            $criteria->addSelectColumn($alias . '.GlmaCo06');
            $criteria->addSelectColumn($alias . '.GlmaCo07');
            $criteria->addSelectColumn($alias . '.GlmaCo08');
            $criteria->addSelectColumn($alias . '.GlmaCo09');
            $criteria->addSelectColumn($alias . '.GlmaCo10');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.GlmaAcWhseAppendPos');
            $criteria->addSelectColumn($alias . '.GlmaAchAcct');
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
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMAACCT);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMADESC);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMADRCR);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACLOSACCT);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMAPACKPOST);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMAVALD);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO01);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO02);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO03);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO04);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO05);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO06);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO07);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO08);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO09);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMACO10);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_GLMAACHACCT);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(GlCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.GlmaAcct');
            $criteria->removeSelectColumn($alias . '.GlmaDesc');
            $criteria->removeSelectColumn($alias . '.GlmaDrCr');
            $criteria->removeSelectColumn($alias . '.GlmaClosAcct');
            $criteria->removeSelectColumn($alias . '.GlmaPackPost');
            $criteria->removeSelectColumn($alias . '.GlmaVald');
            $criteria->removeSelectColumn($alias . '.GlmaCo01');
            $criteria->removeSelectColumn($alias . '.GlmaCo02');
            $criteria->removeSelectColumn($alias . '.GlmaCo03');
            $criteria->removeSelectColumn($alias . '.GlmaCo04');
            $criteria->removeSelectColumn($alias . '.GlmaCo05');
            $criteria->removeSelectColumn($alias . '.GlmaCo06');
            $criteria->removeSelectColumn($alias . '.GlmaCo07');
            $criteria->removeSelectColumn($alias . '.GlmaCo08');
            $criteria->removeSelectColumn($alias . '.GlmaCo09');
            $criteria->removeSelectColumn($alias . '.GlmaCo10');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.GlmaAcWhseAppendPos');
            $criteria->removeSelectColumn($alias . '.GlmaAchAcct');
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
        return Propel::getServiceContainer()->getDatabaseMap(GlCodeTableMap::DATABASE_NAME)->getTable(GlCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a GlCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or GlCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \GlCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GlCodeTableMap::DATABASE_NAME);
            $criteria->add(GlCodeTableMap::COL_GLMAACCT, (array) $values, Criteria::IN);
        }

        $query = GlCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            GlCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                GlCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the gl_master table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return GlCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a GlCode or Criteria object.
     *
     * @param mixed $criteria Criteria or GlCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from GlCode object
        }


        // Set the correct dbName
        $query = GlCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
