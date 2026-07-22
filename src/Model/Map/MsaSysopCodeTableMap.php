<?php

namespace Map;

use \MsaSysopCode;
use \MsaSysopCodeQuery;
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
 * This class defines the structure of the 'sys_opt_options' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class MsaSysopCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.MsaSysopCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'sys_opt_options';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'MsaSysopCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\MsaSysopCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'MsaSysopCode';

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
     * the column name for the OptnSystem field
     */
    public const COL_OPTNSYSTEM = 'sys_opt_options.OptnSystem';

    /**
     * the column name for the OptnCode field
     */
    public const COL_OPTNCODE = 'sys_opt_options.OptnCode';

    /**
     * the column name for the OptnDesc field
     */
    public const COL_OPTNDESC = 'sys_opt_options.OptnDesc';

    /**
     * the column name for the OptnValidate field
     */
    public const COL_OPTNVALIDATE = 'sys_opt_options.OptnValidate';

    /**
     * the column name for the OptnForce field
     */
    public const COL_OPTNFORCE = 'sys_opt_options.OptnForce';

    /**
     * the column name for the OptnNoteCode field
     */
    public const COL_OPTNNOTECODE = 'sys_opt_options.OptnNoteCode';

    /**
     * the column name for the OptnListSeq field
     */
    public const COL_OPTNLISTSEQ = 'sys_opt_options.OptnListSeq';

    /**
     * the column name for the OptnFileName field
     */
    public const COL_OPTNFILENAME = 'sys_opt_options.OptnFileName';

    /**
     * the column name for the OptnAdvSrch field
     */
    public const COL_OPTNADVSRCH = 'sys_opt_options.OptnAdvSrch';

    /**
     * the column name for the OptnFieldType field
     */
    public const COL_OPTNFIELDTYPE = 'sys_opt_options.OptnFieldType';

    /**
     * the column name for the OptnDef1B4Dec field
     */
    public const COL_OPTNDEF1B4DEC = 'sys_opt_options.OptnDef1B4Dec';

    /**
     * the column name for the OptnDef2AftDec field
     */
    public const COL_OPTNDEF2AFTDEC = 'sys_opt_options.OptnDef2AftDec';

    /**
     * the column name for the OptnDocStorFolder field
     */
    public const COL_OPTNDOCSTORFOLDER = 'sys_opt_options.OptnDocStorFolder';

    /**
     * the column name for the OptnWebValidate field
     */
    public const COL_OPTNWEBVALIDATE = 'sys_opt_options.OptnWebValidate';

    /**
     * the column name for the OptnWebForce field
     */
    public const COL_OPTNWEBFORCE = 'sys_opt_options.OptnWebForce';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'sys_opt_options.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'sys_opt_options.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'sys_opt_options.dummy';

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
        self::TYPE_PHPNAME       => ['Optnsystem', 'Optncode', 'Optndesc', 'Optnvalidate', 'Optnforce', 'Optnnotecode', 'Optnlistseq', 'Optnfilename', 'Optnadvsrch', 'Optnfieldtype', 'Optndef1b4dec', 'Optndef2aftdec', 'Optndocstorfolder', 'Optnwebvalidate', 'Optnwebforce', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['optnsystem', 'optncode', 'optndesc', 'optnvalidate', 'optnforce', 'optnnotecode', 'optnlistseq', 'optnfilename', 'optnadvsrch', 'optnfieldtype', 'optndef1b4dec', 'optndef2aftdec', 'optndocstorfolder', 'optnwebvalidate', 'optnwebforce', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [MsaSysopCodeTableMap::COL_OPTNSYSTEM, MsaSysopCodeTableMap::COL_OPTNCODE, MsaSysopCodeTableMap::COL_OPTNDESC, MsaSysopCodeTableMap::COL_OPTNVALIDATE, MsaSysopCodeTableMap::COL_OPTNFORCE, MsaSysopCodeTableMap::COL_OPTNNOTECODE, MsaSysopCodeTableMap::COL_OPTNLISTSEQ, MsaSysopCodeTableMap::COL_OPTNFILENAME, MsaSysopCodeTableMap::COL_OPTNADVSRCH, MsaSysopCodeTableMap::COL_OPTNFIELDTYPE, MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC, MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC, MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER, MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE, MsaSysopCodeTableMap::COL_OPTNWEBFORCE, MsaSysopCodeTableMap::COL_DATEUPDTD, MsaSysopCodeTableMap::COL_TIMEUPDTD, MsaSysopCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['OptnSystem', 'OptnCode', 'OptnDesc', 'OptnValidate', 'OptnForce', 'OptnNoteCode', 'OptnListSeq', 'OptnFileName', 'OptnAdvSrch', 'OptnFieldType', 'OptnDef1B4Dec', 'OptnDef2AftDec', 'OptnDocStorFolder', 'OptnWebValidate', 'OptnWebForce', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Optnsystem' => 0, 'Optncode' => 1, 'Optndesc' => 2, 'Optnvalidate' => 3, 'Optnforce' => 4, 'Optnnotecode' => 5, 'Optnlistseq' => 6, 'Optnfilename' => 7, 'Optnadvsrch' => 8, 'Optnfieldtype' => 9, 'Optndef1b4dec' => 10, 'Optndef2aftdec' => 11, 'Optndocstorfolder' => 12, 'Optnwebvalidate' => 13, 'Optnwebforce' => 14, 'Dateupdtd' => 15, 'Timeupdtd' => 16, 'Dummy' => 17, ],
        self::TYPE_CAMELNAME     => ['optnsystem' => 0, 'optncode' => 1, 'optndesc' => 2, 'optnvalidate' => 3, 'optnforce' => 4, 'optnnotecode' => 5, 'optnlistseq' => 6, 'optnfilename' => 7, 'optnadvsrch' => 8, 'optnfieldtype' => 9, 'optndef1b4dec' => 10, 'optndef2aftdec' => 11, 'optndocstorfolder' => 12, 'optnwebvalidate' => 13, 'optnwebforce' => 14, 'dateupdtd' => 15, 'timeupdtd' => 16, 'dummy' => 17, ],
        self::TYPE_COLNAME       => [MsaSysopCodeTableMap::COL_OPTNSYSTEM => 0, MsaSysopCodeTableMap::COL_OPTNCODE => 1, MsaSysopCodeTableMap::COL_OPTNDESC => 2, MsaSysopCodeTableMap::COL_OPTNVALIDATE => 3, MsaSysopCodeTableMap::COL_OPTNFORCE => 4, MsaSysopCodeTableMap::COL_OPTNNOTECODE => 5, MsaSysopCodeTableMap::COL_OPTNLISTSEQ => 6, MsaSysopCodeTableMap::COL_OPTNFILENAME => 7, MsaSysopCodeTableMap::COL_OPTNADVSRCH => 8, MsaSysopCodeTableMap::COL_OPTNFIELDTYPE => 9, MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC => 10, MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC => 11, MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER => 12, MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE => 13, MsaSysopCodeTableMap::COL_OPTNWEBFORCE => 14, MsaSysopCodeTableMap::COL_DATEUPDTD => 15, MsaSysopCodeTableMap::COL_TIMEUPDTD => 16, MsaSysopCodeTableMap::COL_DUMMY => 17, ],
        self::TYPE_FIELDNAME     => ['OptnSystem' => 0, 'OptnCode' => 1, 'OptnDesc' => 2, 'OptnValidate' => 3, 'OptnForce' => 4, 'OptnNoteCode' => 5, 'OptnListSeq' => 6, 'OptnFileName' => 7, 'OptnAdvSrch' => 8, 'OptnFieldType' => 9, 'OptnDef1B4Dec' => 10, 'OptnDef2AftDec' => 11, 'OptnDocStorFolder' => 12, 'OptnWebValidate' => 13, 'OptnWebForce' => 14, 'DateUpdtd' => 15, 'TimeUpdtd' => 16, 'dummy' => 17, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Optnsystem' => 'OPTNSYSTEM',
        'MsaSysopCode.Optnsystem' => 'OPTNSYSTEM',
        'optnsystem' => 'OPTNSYSTEM',
        'msaSysopCode.optnsystem' => 'OPTNSYSTEM',
        'MsaSysopCodeTableMap::COL_OPTNSYSTEM' => 'OPTNSYSTEM',
        'COL_OPTNSYSTEM' => 'OPTNSYSTEM',
        'OptnSystem' => 'OPTNSYSTEM',
        'sys_opt_options.OptnSystem' => 'OPTNSYSTEM',
        'Optncode' => 'OPTNCODE',
        'MsaSysopCode.Optncode' => 'OPTNCODE',
        'optncode' => 'OPTNCODE',
        'msaSysopCode.optncode' => 'OPTNCODE',
        'MsaSysopCodeTableMap::COL_OPTNCODE' => 'OPTNCODE',
        'COL_OPTNCODE' => 'OPTNCODE',
        'OptnCode' => 'OPTNCODE',
        'sys_opt_options.OptnCode' => 'OPTNCODE',
        'Optndesc' => 'OPTNDESC',
        'MsaSysopCode.Optndesc' => 'OPTNDESC',
        'optndesc' => 'OPTNDESC',
        'msaSysopCode.optndesc' => 'OPTNDESC',
        'MsaSysopCodeTableMap::COL_OPTNDESC' => 'OPTNDESC',
        'COL_OPTNDESC' => 'OPTNDESC',
        'OptnDesc' => 'OPTNDESC',
        'sys_opt_options.OptnDesc' => 'OPTNDESC',
        'Optnvalidate' => 'OPTNVALIDATE',
        'MsaSysopCode.Optnvalidate' => 'OPTNVALIDATE',
        'optnvalidate' => 'OPTNVALIDATE',
        'msaSysopCode.optnvalidate' => 'OPTNVALIDATE',
        'MsaSysopCodeTableMap::COL_OPTNVALIDATE' => 'OPTNVALIDATE',
        'COL_OPTNVALIDATE' => 'OPTNVALIDATE',
        'OptnValidate' => 'OPTNVALIDATE',
        'sys_opt_options.OptnValidate' => 'OPTNVALIDATE',
        'Optnforce' => 'OPTNFORCE',
        'MsaSysopCode.Optnforce' => 'OPTNFORCE',
        'optnforce' => 'OPTNFORCE',
        'msaSysopCode.optnforce' => 'OPTNFORCE',
        'MsaSysopCodeTableMap::COL_OPTNFORCE' => 'OPTNFORCE',
        'COL_OPTNFORCE' => 'OPTNFORCE',
        'OptnForce' => 'OPTNFORCE',
        'sys_opt_options.OptnForce' => 'OPTNFORCE',
        'Optnnotecode' => 'OPTNNOTECODE',
        'MsaSysopCode.Optnnotecode' => 'OPTNNOTECODE',
        'optnnotecode' => 'OPTNNOTECODE',
        'msaSysopCode.optnnotecode' => 'OPTNNOTECODE',
        'MsaSysopCodeTableMap::COL_OPTNNOTECODE' => 'OPTNNOTECODE',
        'COL_OPTNNOTECODE' => 'OPTNNOTECODE',
        'OptnNoteCode' => 'OPTNNOTECODE',
        'sys_opt_options.OptnNoteCode' => 'OPTNNOTECODE',
        'Optnlistseq' => 'OPTNLISTSEQ',
        'MsaSysopCode.Optnlistseq' => 'OPTNLISTSEQ',
        'optnlistseq' => 'OPTNLISTSEQ',
        'msaSysopCode.optnlistseq' => 'OPTNLISTSEQ',
        'MsaSysopCodeTableMap::COL_OPTNLISTSEQ' => 'OPTNLISTSEQ',
        'COL_OPTNLISTSEQ' => 'OPTNLISTSEQ',
        'OptnListSeq' => 'OPTNLISTSEQ',
        'sys_opt_options.OptnListSeq' => 'OPTNLISTSEQ',
        'Optnfilename' => 'OPTNFILENAME',
        'MsaSysopCode.Optnfilename' => 'OPTNFILENAME',
        'optnfilename' => 'OPTNFILENAME',
        'msaSysopCode.optnfilename' => 'OPTNFILENAME',
        'MsaSysopCodeTableMap::COL_OPTNFILENAME' => 'OPTNFILENAME',
        'COL_OPTNFILENAME' => 'OPTNFILENAME',
        'OptnFileName' => 'OPTNFILENAME',
        'sys_opt_options.OptnFileName' => 'OPTNFILENAME',
        'Optnadvsrch' => 'OPTNADVSRCH',
        'MsaSysopCode.Optnadvsrch' => 'OPTNADVSRCH',
        'optnadvsrch' => 'OPTNADVSRCH',
        'msaSysopCode.optnadvsrch' => 'OPTNADVSRCH',
        'MsaSysopCodeTableMap::COL_OPTNADVSRCH' => 'OPTNADVSRCH',
        'COL_OPTNADVSRCH' => 'OPTNADVSRCH',
        'OptnAdvSrch' => 'OPTNADVSRCH',
        'sys_opt_options.OptnAdvSrch' => 'OPTNADVSRCH',
        'Optnfieldtype' => 'OPTNFIELDTYPE',
        'MsaSysopCode.Optnfieldtype' => 'OPTNFIELDTYPE',
        'optnfieldtype' => 'OPTNFIELDTYPE',
        'msaSysopCode.optnfieldtype' => 'OPTNFIELDTYPE',
        'MsaSysopCodeTableMap::COL_OPTNFIELDTYPE' => 'OPTNFIELDTYPE',
        'COL_OPTNFIELDTYPE' => 'OPTNFIELDTYPE',
        'OptnFieldType' => 'OPTNFIELDTYPE',
        'sys_opt_options.OptnFieldType' => 'OPTNFIELDTYPE',
        'Optndef1b4dec' => 'OPTNDEF1B4DEC',
        'MsaSysopCode.Optndef1b4dec' => 'OPTNDEF1B4DEC',
        'optndef1b4dec' => 'OPTNDEF1B4DEC',
        'msaSysopCode.optndef1b4dec' => 'OPTNDEF1B4DEC',
        'MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC' => 'OPTNDEF1B4DEC',
        'COL_OPTNDEF1B4DEC' => 'OPTNDEF1B4DEC',
        'OptnDef1B4Dec' => 'OPTNDEF1B4DEC',
        'sys_opt_options.OptnDef1B4Dec' => 'OPTNDEF1B4DEC',
        'Optndef2aftdec' => 'OPTNDEF2AFTDEC',
        'MsaSysopCode.Optndef2aftdec' => 'OPTNDEF2AFTDEC',
        'optndef2aftdec' => 'OPTNDEF2AFTDEC',
        'msaSysopCode.optndef2aftdec' => 'OPTNDEF2AFTDEC',
        'MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC' => 'OPTNDEF2AFTDEC',
        'COL_OPTNDEF2AFTDEC' => 'OPTNDEF2AFTDEC',
        'OptnDef2AftDec' => 'OPTNDEF2AFTDEC',
        'sys_opt_options.OptnDef2AftDec' => 'OPTNDEF2AFTDEC',
        'Optndocstorfolder' => 'OPTNDOCSTORFOLDER',
        'MsaSysopCode.Optndocstorfolder' => 'OPTNDOCSTORFOLDER',
        'optndocstorfolder' => 'OPTNDOCSTORFOLDER',
        'msaSysopCode.optndocstorfolder' => 'OPTNDOCSTORFOLDER',
        'MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER' => 'OPTNDOCSTORFOLDER',
        'COL_OPTNDOCSTORFOLDER' => 'OPTNDOCSTORFOLDER',
        'OptnDocStorFolder' => 'OPTNDOCSTORFOLDER',
        'sys_opt_options.OptnDocStorFolder' => 'OPTNDOCSTORFOLDER',
        'Optnwebvalidate' => 'OPTNWEBVALIDATE',
        'MsaSysopCode.Optnwebvalidate' => 'OPTNWEBVALIDATE',
        'optnwebvalidate' => 'OPTNWEBVALIDATE',
        'msaSysopCode.optnwebvalidate' => 'OPTNWEBVALIDATE',
        'MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE' => 'OPTNWEBVALIDATE',
        'COL_OPTNWEBVALIDATE' => 'OPTNWEBVALIDATE',
        'OptnWebValidate' => 'OPTNWEBVALIDATE',
        'sys_opt_options.OptnWebValidate' => 'OPTNWEBVALIDATE',
        'Optnwebforce' => 'OPTNWEBFORCE',
        'MsaSysopCode.Optnwebforce' => 'OPTNWEBFORCE',
        'optnwebforce' => 'OPTNWEBFORCE',
        'msaSysopCode.optnwebforce' => 'OPTNWEBFORCE',
        'MsaSysopCodeTableMap::COL_OPTNWEBFORCE' => 'OPTNWEBFORCE',
        'COL_OPTNWEBFORCE' => 'OPTNWEBFORCE',
        'OptnWebForce' => 'OPTNWEBFORCE',
        'sys_opt_options.OptnWebForce' => 'OPTNWEBFORCE',
        'Dateupdtd' => 'DATEUPDTD',
        'MsaSysopCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'msaSysopCode.dateupdtd' => 'DATEUPDTD',
        'MsaSysopCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'sys_opt_options.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'MsaSysopCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'msaSysopCode.timeupdtd' => 'TIMEUPDTD',
        'MsaSysopCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'sys_opt_options.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'MsaSysopCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'msaSysopCode.dummy' => 'DUMMY',
        'MsaSysopCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'sys_opt_options.dummy' => 'DUMMY',
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
        $this->setName('sys_opt_options');
        $this->setPhpName('MsaSysopCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\MsaSysopCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OptnSystem', 'Optnsystem', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('OptnCode', 'Optncode', 'VARCHAR', true, 8, '');
        $this->addColumn('OptnDesc', 'Optndesc', 'VARCHAR', false, 20, null);
        $this->addColumn('OptnValidate', 'Optnvalidate', 'VARCHAR', false, 1, null);
        $this->addColumn('OptnForce', 'Optnforce', 'VARCHAR', false, 1, null);
        $this->addColumn('OptnNoteCode', 'Optnnotecode', 'VARCHAR', false, 4, null);
        $this->addColumn('OptnListSeq', 'Optnlistseq', 'INTEGER', false, 3, null);
        $this->addColumn('OptnFileName', 'Optnfilename', 'VARCHAR', false, 1, null);
        $this->addColumn('OptnAdvSrch', 'Optnadvsrch', 'VARCHAR', false, 1, null);
        $this->addColumn('OptnFieldType', 'Optnfieldtype', 'VARCHAR', false, 1, null);
        $this->addColumn('OptnDef1B4Dec', 'Optndef1b4dec', 'INTEGER', false, 1, null);
        $this->addColumn('OptnDef2AftDec', 'Optndef2aftdec', 'INTEGER', false, 1, null);
        $this->addColumn('OptnDocStorFolder', 'Optndocstorfolder', 'VARCHAR', false, 8, null);
        $this->addColumn('OptnWebValidate', 'Optnwebvalidate', 'VARCHAR', false, 1, null);
        $this->addColumn('OptnWebForce', 'Optnwebforce', 'VARCHAR', false, 1, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \MsaSysopCode $obj A \MsaSysopCode object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(MsaSysopCode $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOptnsystem() || is_scalar($obj->getOptnsystem()) || is_callable([$obj->getOptnsystem(), '__toString']) ? (string) $obj->getOptnsystem() : $obj->getOptnsystem()), (null === $obj->getOptncode() || is_scalar($obj->getOptncode()) || is_callable([$obj->getOptncode(), '__toString']) ? (string) $obj->getOptncode() : $obj->getOptncode())]);
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
     * @param mixed $value A \MsaSysopCode object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \MsaSysopCode) {
                $key = serialize([(null === $value->getOptnsystem() || is_scalar($value->getOptnsystem()) || is_callable([$value->getOptnsystem(), '__toString']) ? (string) $value->getOptnsystem() : $value->getOptnsystem()), (null === $value->getOptncode() || is_scalar($value->getOptncode()) || is_callable([$value->getOptncode(), '__toString']) ? (string) $value->getOptncode() : $value->getOptncode())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \MsaSysopCode object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Optnsystem', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Optncode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? MsaSysopCodeTableMap::CLASS_DEFAULT : MsaSysopCodeTableMap::OM_CLASS;
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
     * @return array (MsaSysopCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = MsaSysopCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = MsaSysopCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + MsaSysopCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MsaSysopCodeTableMap::OM_CLASS;
            /** @var MsaSysopCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            MsaSysopCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = MsaSysopCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = MsaSysopCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var MsaSysopCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MsaSysopCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNSYSTEM);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNCODE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNDESC);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNVALIDATE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNFORCE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNNOTECODE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNLISTSEQ);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNFILENAME);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNADVSRCH);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNFIELDTYPE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_OPTNWEBFORCE);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(MsaSysopCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OptnSystem');
            $criteria->addSelectColumn($alias . '.OptnCode');
            $criteria->addSelectColumn($alias . '.OptnDesc');
            $criteria->addSelectColumn($alias . '.OptnValidate');
            $criteria->addSelectColumn($alias . '.OptnForce');
            $criteria->addSelectColumn($alias . '.OptnNoteCode');
            $criteria->addSelectColumn($alias . '.OptnListSeq');
            $criteria->addSelectColumn($alias . '.OptnFileName');
            $criteria->addSelectColumn($alias . '.OptnAdvSrch');
            $criteria->addSelectColumn($alias . '.OptnFieldType');
            $criteria->addSelectColumn($alias . '.OptnDef1B4Dec');
            $criteria->addSelectColumn($alias . '.OptnDef2AftDec');
            $criteria->addSelectColumn($alias . '.OptnDocStorFolder');
            $criteria->addSelectColumn($alias . '.OptnWebValidate');
            $criteria->addSelectColumn($alias . '.OptnWebForce');
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
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNSYSTEM);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNCODE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNDESC);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNVALIDATE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNFORCE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNNOTECODE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNLISTSEQ);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNFILENAME);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNADVSRCH);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNFIELDTYPE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_OPTNWEBFORCE);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(MsaSysopCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.OptnSystem');
            $criteria->removeSelectColumn($alias . '.OptnCode');
            $criteria->removeSelectColumn($alias . '.OptnDesc');
            $criteria->removeSelectColumn($alias . '.OptnValidate');
            $criteria->removeSelectColumn($alias . '.OptnForce');
            $criteria->removeSelectColumn($alias . '.OptnNoteCode');
            $criteria->removeSelectColumn($alias . '.OptnListSeq');
            $criteria->removeSelectColumn($alias . '.OptnFileName');
            $criteria->removeSelectColumn($alias . '.OptnAdvSrch');
            $criteria->removeSelectColumn($alias . '.OptnFieldType');
            $criteria->removeSelectColumn($alias . '.OptnDef1B4Dec');
            $criteria->removeSelectColumn($alias . '.OptnDef2AftDec');
            $criteria->removeSelectColumn($alias . '.OptnDocStorFolder');
            $criteria->removeSelectColumn($alias . '.OptnWebValidate');
            $criteria->removeSelectColumn($alias . '.OptnWebForce');
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
        return Propel::getServiceContainer()->getDatabaseMap(MsaSysopCodeTableMap::DATABASE_NAME)->getTable(MsaSysopCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a MsaSysopCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or MsaSysopCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \MsaSysopCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MsaSysopCodeTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(MsaSysopCodeTableMap::COL_OPTNSYSTEM, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(MsaSysopCodeTableMap::COL_OPTNCODE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = MsaSysopCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            MsaSysopCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                MsaSysopCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the sys_opt_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return MsaSysopCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a MsaSysopCode or Criteria object.
     *
     * @param mixed $criteria Criteria or MsaSysopCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from MsaSysopCode object
        }


        // Set the correct dbName
        $query = MsaSysopCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
