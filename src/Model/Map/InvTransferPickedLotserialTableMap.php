<?php

namespace Map;

use \InvTransferPickedLotserial;
use \InvTransferPickedLotserialQuery;
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
 * This class defines the structure of the 'inv_trans_pulled' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvTransferPickedLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvTransferPickedLotserialTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_trans_pulled';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvTransferPickedLotserial';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvTransferPickedLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvTransferPickedLotserial';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 25;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 25;

    /**
     * the column name for the InhdNbr field
     */
    public const COL_INHDNBR = 'inv_trans_pulled.InhdNbr';

    /**
     * the column name for the IndtLine field
     */
    public const COL_INDTLINE = 'inv_trans_pulled.IndtLine';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'inv_trans_pulled.InitItemNbr';

    /**
     * the column name for the InpdLotSer field
     */
    public const COL_INPDLOTSER = 'inv_trans_pulled.InpdLotSer';

    /**
     * the column name for the InpdBin field
     */
    public const COL_INPDBIN = 'inv_trans_pulled.InpdBin';

    /**
     * the column name for the InpdPlltNbr field
     */
    public const COL_INPDPLLTNBR = 'inv_trans_pulled.InpdPlltNbr';

    /**
     * the column name for the InpdCrtnNbr field
     */
    public const COL_INPDCRTNNBR = 'inv_trans_pulled.InpdCrtnNbr';

    /**
     * the column name for the InpdQtyResv field
     */
    public const COL_INPDQTYRESV = 'inv_trans_pulled.InpdQtyResv';

    /**
     * the column name for the InpdQtyShip field
     */
    public const COL_INPDQTYSHIP = 'inv_trans_pulled.InpdQtyShip';

    /**
     * the column name for the InpdQtyNotPost field
     */
    public const COL_INPDQTYNOTPOST = 'inv_trans_pulled.InpdQtyNotPost';

    /**
     * the column name for the InpdUnitCost field
     */
    public const COL_INPDUNITCOST = 'inv_trans_pulled.InpdUnitCost';

    /**
     * the column name for the InpdLotSerFrom field
     */
    public const COL_INPDLOTSERFROM = 'inv_trans_pulled.InpdLotSerFrom';

    /**
     * the column name for the InpdBinFrom field
     */
    public const COL_INPDBINFROM = 'inv_trans_pulled.InpdBinFrom';

    /**
     * the column name for the InpdCases field
     */
    public const COL_INPDCASES = 'inv_trans_pulled.InpdCases';

    /**
     * the column name for the InpdTag field
     */
    public const COL_INPDTAG = 'inv_trans_pulled.InpdTag';

    /**
     * the column name for the InpdInspctLvl field
     */
    public const COL_INPDINSPCTLVL = 'inv_trans_pulled.InpdInspctLvl';

    /**
     * the column name for the InpdLotRef field
     */
    public const COL_INPDLOTREF = 'inv_trans_pulled.InpdLotRef';

    /**
     * the column name for the InpdCrtnQty field
     */
    public const COL_INPDCRTNQTY = 'inv_trans_pulled.InpdCrtnQty';

    /**
     * the column name for the InpdLblPrtd field
     */
    public const COL_INPDLBLPRTD = 'inv_trans_pulled.InpdLblPrtd';

    /**
     * the column name for the InpdBatch field
     */
    public const COL_INPDBATCH = 'inv_trans_pulled.InpdBatch';

    /**
     * the column name for the InpdCureDate field
     */
    public const COL_INPDCUREDATE = 'inv_trans_pulled.InpdCureDate';

    /**
     * the column name for the InpdBinTo field
     */
    public const COL_INPDBINTO = 'inv_trans_pulled.InpdBinTo';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_trans_pulled.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_trans_pulled.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_trans_pulled.dummy';

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
        self::TYPE_PHPNAME       => ['Inhdnbr', 'Indtline', 'Inititemnbr', 'Inpdlotser', 'Inpdbin', 'Inpdplltnbr', 'Inpdcrtnnbr', 'Inpdqtyresv', 'Inpdqtyship', 'Inpdqtynotpost', 'Inpdunitcost', 'Inpdlotserfrom', 'Inpdbinfrom', 'Inpdcases', 'Inpdtag', 'Inpdinspctlvl', 'Inpdlotref', 'Inpdcrtnqty', 'Inpdlblprtd', 'Inpdbatch', 'Inpdcuredate', 'Inpdbinto', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inhdnbr', 'indtline', 'inititemnbr', 'inpdlotser', 'inpdbin', 'inpdplltnbr', 'inpdcrtnnbr', 'inpdqtyresv', 'inpdqtyship', 'inpdqtynotpost', 'inpdunitcost', 'inpdlotserfrom', 'inpdbinfrom', 'inpdcases', 'inpdtag', 'inpdinspctlvl', 'inpdlotref', 'inpdcrtnqty', 'inpdlblprtd', 'inpdbatch', 'inpdcuredate', 'inpdbinto', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvTransferPickedLotserialTableMap::COL_INHDNBR, InvTransferPickedLotserialTableMap::COL_INDTLINE, InvTransferPickedLotserialTableMap::COL_INITITEMNBR, InvTransferPickedLotserialTableMap::COL_INPDLOTSER, InvTransferPickedLotserialTableMap::COL_INPDBIN, InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, InvTransferPickedLotserialTableMap::COL_INPDQTYRESV, InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP, InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST, InvTransferPickedLotserialTableMap::COL_INPDUNITCOST, InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM, InvTransferPickedLotserialTableMap::COL_INPDBINFROM, InvTransferPickedLotserialTableMap::COL_INPDCASES, InvTransferPickedLotserialTableMap::COL_INPDTAG, InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL, InvTransferPickedLotserialTableMap::COL_INPDLOTREF, InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY, InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD, InvTransferPickedLotserialTableMap::COL_INPDBATCH, InvTransferPickedLotserialTableMap::COL_INPDCUREDATE, InvTransferPickedLotserialTableMap::COL_INPDBINTO, InvTransferPickedLotserialTableMap::COL_DATEUPDTD, InvTransferPickedLotserialTableMap::COL_TIMEUPDTD, InvTransferPickedLotserialTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InhdNbr', 'IndtLine', 'InitItemNbr', 'InpdLotSer', 'InpdBin', 'InpdPlltNbr', 'InpdCrtnNbr', 'InpdQtyResv', 'InpdQtyShip', 'InpdQtyNotPost', 'InpdUnitCost', 'InpdLotSerFrom', 'InpdBinFrom', 'InpdCases', 'InpdTag', 'InpdInspctLvl', 'InpdLotRef', 'InpdCrtnQty', 'InpdLblPrtd', 'InpdBatch', 'InpdCureDate', 'InpdBinTo', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, ]
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
        self::TYPE_PHPNAME       => ['Inhdnbr' => 0, 'Indtline' => 1, 'Inititemnbr' => 2, 'Inpdlotser' => 3, 'Inpdbin' => 4, 'Inpdplltnbr' => 5, 'Inpdcrtnnbr' => 6, 'Inpdqtyresv' => 7, 'Inpdqtyship' => 8, 'Inpdqtynotpost' => 9, 'Inpdunitcost' => 10, 'Inpdlotserfrom' => 11, 'Inpdbinfrom' => 12, 'Inpdcases' => 13, 'Inpdtag' => 14, 'Inpdinspctlvl' => 15, 'Inpdlotref' => 16, 'Inpdcrtnqty' => 17, 'Inpdlblprtd' => 18, 'Inpdbatch' => 19, 'Inpdcuredate' => 20, 'Inpdbinto' => 21, 'Dateupdtd' => 22, 'Timeupdtd' => 23, 'Dummy' => 24, ],
        self::TYPE_CAMELNAME     => ['inhdnbr' => 0, 'indtline' => 1, 'inititemnbr' => 2, 'inpdlotser' => 3, 'inpdbin' => 4, 'inpdplltnbr' => 5, 'inpdcrtnnbr' => 6, 'inpdqtyresv' => 7, 'inpdqtyship' => 8, 'inpdqtynotpost' => 9, 'inpdunitcost' => 10, 'inpdlotserfrom' => 11, 'inpdbinfrom' => 12, 'inpdcases' => 13, 'inpdtag' => 14, 'inpdinspctlvl' => 15, 'inpdlotref' => 16, 'inpdcrtnqty' => 17, 'inpdlblprtd' => 18, 'inpdbatch' => 19, 'inpdcuredate' => 20, 'inpdbinto' => 21, 'dateupdtd' => 22, 'timeupdtd' => 23, 'dummy' => 24, ],
        self::TYPE_COLNAME       => [InvTransferPickedLotserialTableMap::COL_INHDNBR => 0, InvTransferPickedLotserialTableMap::COL_INDTLINE => 1, InvTransferPickedLotserialTableMap::COL_INITITEMNBR => 2, InvTransferPickedLotserialTableMap::COL_INPDLOTSER => 3, InvTransferPickedLotserialTableMap::COL_INPDBIN => 4, InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR => 5, InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR => 6, InvTransferPickedLotserialTableMap::COL_INPDQTYRESV => 7, InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP => 8, InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST => 9, InvTransferPickedLotserialTableMap::COL_INPDUNITCOST => 10, InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM => 11, InvTransferPickedLotserialTableMap::COL_INPDBINFROM => 12, InvTransferPickedLotserialTableMap::COL_INPDCASES => 13, InvTransferPickedLotserialTableMap::COL_INPDTAG => 14, InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL => 15, InvTransferPickedLotserialTableMap::COL_INPDLOTREF => 16, InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY => 17, InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD => 18, InvTransferPickedLotserialTableMap::COL_INPDBATCH => 19, InvTransferPickedLotserialTableMap::COL_INPDCUREDATE => 20, InvTransferPickedLotserialTableMap::COL_INPDBINTO => 21, InvTransferPickedLotserialTableMap::COL_DATEUPDTD => 22, InvTransferPickedLotserialTableMap::COL_TIMEUPDTD => 23, InvTransferPickedLotserialTableMap::COL_DUMMY => 24, ],
        self::TYPE_FIELDNAME     => ['InhdNbr' => 0, 'IndtLine' => 1, 'InitItemNbr' => 2, 'InpdLotSer' => 3, 'InpdBin' => 4, 'InpdPlltNbr' => 5, 'InpdCrtnNbr' => 6, 'InpdQtyResv' => 7, 'InpdQtyShip' => 8, 'InpdQtyNotPost' => 9, 'InpdUnitCost' => 10, 'InpdLotSerFrom' => 11, 'InpdBinFrom' => 12, 'InpdCases' => 13, 'InpdTag' => 14, 'InpdInspctLvl' => 15, 'InpdLotRef' => 16, 'InpdCrtnQty' => 17, 'InpdLblPrtd' => 18, 'InpdBatch' => 19, 'InpdCureDate' => 20, 'InpdBinTo' => 21, 'DateUpdtd' => 22, 'TimeUpdtd' => 23, 'dummy' => 24, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inhdnbr' => 'INHDNBR',
        'InvTransferPickedLotserial.Inhdnbr' => 'INHDNBR',
        'inhdnbr' => 'INHDNBR',
        'invTransferPickedLotserial.inhdnbr' => 'INHDNBR',
        'InvTransferPickedLotserialTableMap::COL_INHDNBR' => 'INHDNBR',
        'COL_INHDNBR' => 'INHDNBR',
        'InhdNbr' => 'INHDNBR',
        'inv_trans_pulled.InhdNbr' => 'INHDNBR',
        'Indtline' => 'INDTLINE',
        'InvTransferPickedLotserial.Indtline' => 'INDTLINE',
        'indtline' => 'INDTLINE',
        'invTransferPickedLotserial.indtline' => 'INDTLINE',
        'InvTransferPickedLotserialTableMap::COL_INDTLINE' => 'INDTLINE',
        'COL_INDTLINE' => 'INDTLINE',
        'IndtLine' => 'INDTLINE',
        'inv_trans_pulled.IndtLine' => 'INDTLINE',
        'Inititemnbr' => 'INITITEMNBR',
        'InvTransferPickedLotserial.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'invTransferPickedLotserial.inititemnbr' => 'INITITEMNBR',
        'InvTransferPickedLotserialTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'inv_trans_pulled.InitItemNbr' => 'INITITEMNBR',
        'Inpdlotser' => 'INPDLOTSER',
        'InvTransferPickedLotserial.Inpdlotser' => 'INPDLOTSER',
        'inpdlotser' => 'INPDLOTSER',
        'invTransferPickedLotserial.inpdlotser' => 'INPDLOTSER',
        'InvTransferPickedLotserialTableMap::COL_INPDLOTSER' => 'INPDLOTSER',
        'COL_INPDLOTSER' => 'INPDLOTSER',
        'InpdLotSer' => 'INPDLOTSER',
        'inv_trans_pulled.InpdLotSer' => 'INPDLOTSER',
        'Inpdbin' => 'INPDBIN',
        'InvTransferPickedLotserial.Inpdbin' => 'INPDBIN',
        'inpdbin' => 'INPDBIN',
        'invTransferPickedLotserial.inpdbin' => 'INPDBIN',
        'InvTransferPickedLotserialTableMap::COL_INPDBIN' => 'INPDBIN',
        'COL_INPDBIN' => 'INPDBIN',
        'InpdBin' => 'INPDBIN',
        'inv_trans_pulled.InpdBin' => 'INPDBIN',
        'Inpdplltnbr' => 'INPDPLLTNBR',
        'InvTransferPickedLotserial.Inpdplltnbr' => 'INPDPLLTNBR',
        'inpdplltnbr' => 'INPDPLLTNBR',
        'invTransferPickedLotserial.inpdplltnbr' => 'INPDPLLTNBR',
        'InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR' => 'INPDPLLTNBR',
        'COL_INPDPLLTNBR' => 'INPDPLLTNBR',
        'InpdPlltNbr' => 'INPDPLLTNBR',
        'inv_trans_pulled.InpdPlltNbr' => 'INPDPLLTNBR',
        'Inpdcrtnnbr' => 'INPDCRTNNBR',
        'InvTransferPickedLotserial.Inpdcrtnnbr' => 'INPDCRTNNBR',
        'inpdcrtnnbr' => 'INPDCRTNNBR',
        'invTransferPickedLotserial.inpdcrtnnbr' => 'INPDCRTNNBR',
        'InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR' => 'INPDCRTNNBR',
        'COL_INPDCRTNNBR' => 'INPDCRTNNBR',
        'InpdCrtnNbr' => 'INPDCRTNNBR',
        'inv_trans_pulled.InpdCrtnNbr' => 'INPDCRTNNBR',
        'Inpdqtyresv' => 'INPDQTYRESV',
        'InvTransferPickedLotserial.Inpdqtyresv' => 'INPDQTYRESV',
        'inpdqtyresv' => 'INPDQTYRESV',
        'invTransferPickedLotserial.inpdqtyresv' => 'INPDQTYRESV',
        'InvTransferPickedLotserialTableMap::COL_INPDQTYRESV' => 'INPDQTYRESV',
        'COL_INPDQTYRESV' => 'INPDQTYRESV',
        'InpdQtyResv' => 'INPDQTYRESV',
        'inv_trans_pulled.InpdQtyResv' => 'INPDQTYRESV',
        'Inpdqtyship' => 'INPDQTYSHIP',
        'InvTransferPickedLotserial.Inpdqtyship' => 'INPDQTYSHIP',
        'inpdqtyship' => 'INPDQTYSHIP',
        'invTransferPickedLotserial.inpdqtyship' => 'INPDQTYSHIP',
        'InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP' => 'INPDQTYSHIP',
        'COL_INPDQTYSHIP' => 'INPDQTYSHIP',
        'InpdQtyShip' => 'INPDQTYSHIP',
        'inv_trans_pulled.InpdQtyShip' => 'INPDQTYSHIP',
        'Inpdqtynotpost' => 'INPDQTYNOTPOST',
        'InvTransferPickedLotserial.Inpdqtynotpost' => 'INPDQTYNOTPOST',
        'inpdqtynotpost' => 'INPDQTYNOTPOST',
        'invTransferPickedLotserial.inpdqtynotpost' => 'INPDQTYNOTPOST',
        'InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST' => 'INPDQTYNOTPOST',
        'COL_INPDQTYNOTPOST' => 'INPDQTYNOTPOST',
        'InpdQtyNotPost' => 'INPDQTYNOTPOST',
        'inv_trans_pulled.InpdQtyNotPost' => 'INPDQTYNOTPOST',
        'Inpdunitcost' => 'INPDUNITCOST',
        'InvTransferPickedLotserial.Inpdunitcost' => 'INPDUNITCOST',
        'inpdunitcost' => 'INPDUNITCOST',
        'invTransferPickedLotserial.inpdunitcost' => 'INPDUNITCOST',
        'InvTransferPickedLotserialTableMap::COL_INPDUNITCOST' => 'INPDUNITCOST',
        'COL_INPDUNITCOST' => 'INPDUNITCOST',
        'InpdUnitCost' => 'INPDUNITCOST',
        'inv_trans_pulled.InpdUnitCost' => 'INPDUNITCOST',
        'Inpdlotserfrom' => 'INPDLOTSERFROM',
        'InvTransferPickedLotserial.Inpdlotserfrom' => 'INPDLOTSERFROM',
        'inpdlotserfrom' => 'INPDLOTSERFROM',
        'invTransferPickedLotserial.inpdlotserfrom' => 'INPDLOTSERFROM',
        'InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM' => 'INPDLOTSERFROM',
        'COL_INPDLOTSERFROM' => 'INPDLOTSERFROM',
        'InpdLotSerFrom' => 'INPDLOTSERFROM',
        'inv_trans_pulled.InpdLotSerFrom' => 'INPDLOTSERFROM',
        'Inpdbinfrom' => 'INPDBINFROM',
        'InvTransferPickedLotserial.Inpdbinfrom' => 'INPDBINFROM',
        'inpdbinfrom' => 'INPDBINFROM',
        'invTransferPickedLotserial.inpdbinfrom' => 'INPDBINFROM',
        'InvTransferPickedLotserialTableMap::COL_INPDBINFROM' => 'INPDBINFROM',
        'COL_INPDBINFROM' => 'INPDBINFROM',
        'InpdBinFrom' => 'INPDBINFROM',
        'inv_trans_pulled.InpdBinFrom' => 'INPDBINFROM',
        'Inpdcases' => 'INPDCASES',
        'InvTransferPickedLotserial.Inpdcases' => 'INPDCASES',
        'inpdcases' => 'INPDCASES',
        'invTransferPickedLotserial.inpdcases' => 'INPDCASES',
        'InvTransferPickedLotserialTableMap::COL_INPDCASES' => 'INPDCASES',
        'COL_INPDCASES' => 'INPDCASES',
        'InpdCases' => 'INPDCASES',
        'inv_trans_pulled.InpdCases' => 'INPDCASES',
        'Inpdtag' => 'INPDTAG',
        'InvTransferPickedLotserial.Inpdtag' => 'INPDTAG',
        'inpdtag' => 'INPDTAG',
        'invTransferPickedLotserial.inpdtag' => 'INPDTAG',
        'InvTransferPickedLotserialTableMap::COL_INPDTAG' => 'INPDTAG',
        'COL_INPDTAG' => 'INPDTAG',
        'InpdTag' => 'INPDTAG',
        'inv_trans_pulled.InpdTag' => 'INPDTAG',
        'Inpdinspctlvl' => 'INPDINSPCTLVL',
        'InvTransferPickedLotserial.Inpdinspctlvl' => 'INPDINSPCTLVL',
        'inpdinspctlvl' => 'INPDINSPCTLVL',
        'invTransferPickedLotserial.inpdinspctlvl' => 'INPDINSPCTLVL',
        'InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL' => 'INPDINSPCTLVL',
        'COL_INPDINSPCTLVL' => 'INPDINSPCTLVL',
        'InpdInspctLvl' => 'INPDINSPCTLVL',
        'inv_trans_pulled.InpdInspctLvl' => 'INPDINSPCTLVL',
        'Inpdlotref' => 'INPDLOTREF',
        'InvTransferPickedLotserial.Inpdlotref' => 'INPDLOTREF',
        'inpdlotref' => 'INPDLOTREF',
        'invTransferPickedLotserial.inpdlotref' => 'INPDLOTREF',
        'InvTransferPickedLotserialTableMap::COL_INPDLOTREF' => 'INPDLOTREF',
        'COL_INPDLOTREF' => 'INPDLOTREF',
        'InpdLotRef' => 'INPDLOTREF',
        'inv_trans_pulled.InpdLotRef' => 'INPDLOTREF',
        'Inpdcrtnqty' => 'INPDCRTNQTY',
        'InvTransferPickedLotserial.Inpdcrtnqty' => 'INPDCRTNQTY',
        'inpdcrtnqty' => 'INPDCRTNQTY',
        'invTransferPickedLotserial.inpdcrtnqty' => 'INPDCRTNQTY',
        'InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY' => 'INPDCRTNQTY',
        'COL_INPDCRTNQTY' => 'INPDCRTNQTY',
        'InpdCrtnQty' => 'INPDCRTNQTY',
        'inv_trans_pulled.InpdCrtnQty' => 'INPDCRTNQTY',
        'Inpdlblprtd' => 'INPDLBLPRTD',
        'InvTransferPickedLotserial.Inpdlblprtd' => 'INPDLBLPRTD',
        'inpdlblprtd' => 'INPDLBLPRTD',
        'invTransferPickedLotserial.inpdlblprtd' => 'INPDLBLPRTD',
        'InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD' => 'INPDLBLPRTD',
        'COL_INPDLBLPRTD' => 'INPDLBLPRTD',
        'InpdLblPrtd' => 'INPDLBLPRTD',
        'inv_trans_pulled.InpdLblPrtd' => 'INPDLBLPRTD',
        'Inpdbatch' => 'INPDBATCH',
        'InvTransferPickedLotserial.Inpdbatch' => 'INPDBATCH',
        'inpdbatch' => 'INPDBATCH',
        'invTransferPickedLotserial.inpdbatch' => 'INPDBATCH',
        'InvTransferPickedLotserialTableMap::COL_INPDBATCH' => 'INPDBATCH',
        'COL_INPDBATCH' => 'INPDBATCH',
        'InpdBatch' => 'INPDBATCH',
        'inv_trans_pulled.InpdBatch' => 'INPDBATCH',
        'Inpdcuredate' => 'INPDCUREDATE',
        'InvTransferPickedLotserial.Inpdcuredate' => 'INPDCUREDATE',
        'inpdcuredate' => 'INPDCUREDATE',
        'invTransferPickedLotserial.inpdcuredate' => 'INPDCUREDATE',
        'InvTransferPickedLotserialTableMap::COL_INPDCUREDATE' => 'INPDCUREDATE',
        'COL_INPDCUREDATE' => 'INPDCUREDATE',
        'InpdCureDate' => 'INPDCUREDATE',
        'inv_trans_pulled.InpdCureDate' => 'INPDCUREDATE',
        'Inpdbinto' => 'INPDBINTO',
        'InvTransferPickedLotserial.Inpdbinto' => 'INPDBINTO',
        'inpdbinto' => 'INPDBINTO',
        'invTransferPickedLotserial.inpdbinto' => 'INPDBINTO',
        'InvTransferPickedLotserialTableMap::COL_INPDBINTO' => 'INPDBINTO',
        'COL_INPDBINTO' => 'INPDBINTO',
        'InpdBinTo' => 'INPDBINTO',
        'inv_trans_pulled.InpdBinTo' => 'INPDBINTO',
        'Dateupdtd' => 'DATEUPDTD',
        'InvTransferPickedLotserial.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invTransferPickedLotserial.dateupdtd' => 'DATEUPDTD',
        'InvTransferPickedLotserialTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_trans_pulled.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvTransferPickedLotserial.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invTransferPickedLotserial.timeupdtd' => 'TIMEUPDTD',
        'InvTransferPickedLotserialTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_trans_pulled.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvTransferPickedLotserial.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invTransferPickedLotserial.dummy' => 'DUMMY',
        'InvTransferPickedLotserialTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_trans_pulled.dummy' => 'DUMMY',
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
        $this->setName('inv_trans_pulled');
        $this->setPhpName('InvTransferPickedLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvTransferPickedLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_head', 'InhdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_det', 'InhdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('IndtLine', 'Indtline', 'INTEGER' , 'inv_trans_det', 'IndtLine', true, 5, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_ser_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InpdLotSer', 'Inpdlotser', 'VARCHAR' , 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addForeignPrimaryKey('InpdLotSer', 'Inpdlotser', 'VARCHAR' , 'inv_ser_mast', 'SermSerNbr', true, 20, '');
        $this->addPrimaryKey('InpdBin', 'Inpdbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('InpdPlltNbr', 'Inpdplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('InpdCrtnNbr', 'Inpdcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('InpdQtyResv', 'Inpdqtyresv', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InpdQtyShip', 'Inpdqtyship', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InpdQtyNotPost', 'Inpdqtynotpost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InpdUnitCost', 'Inpdunitcost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InpdLotSerFrom', 'Inpdlotserfrom', 'VARCHAR', true, 20, '');
        $this->addColumn('InpdBinFrom', 'Inpdbinfrom', 'VARCHAR', true, 8, '');
        $this->addColumn('InpdCases', 'Inpdcases', 'INTEGER', true, 5, 0);
        $this->addColumn('InpdTag', 'Inpdtag', 'INTEGER', true, 5, 0);
        $this->addColumn('InpdInspctLvl', 'Inpdinspctlvl', 'CHAR', true, null, '');
        $this->addColumn('InpdLotRef', 'Inpdlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('InpdCrtnQty', 'Inpdcrtnqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('InpdLblPrtd', 'Inpdlblprtd', 'CHAR', true, null, '');
        $this->addColumn('InpdBatch', 'Inpdbatch', 'VARCHAR', true, 15, '');
        $this->addColumn('InpdCureDate', 'Inpdcuredate', 'VARCHAR', true, 10, '');
        $this->addColumn('InpdBinTo', 'Inpdbinto', 'VARCHAR', true, 8, '');
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
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvTransferOrder', '\\InvTransferOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvTransferDetail', '\\InvTransferDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
  1 =>
  array (
    0 => ':IndtLine',
    1 => ':IndtLine',
  ),
), null, null, null, false);
        $this->addRelation('InvLotMaster', '\\InvLotMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':InpdLotSer',
    1 => ':LotmLotNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvSerialMaster', '\\InvSerialMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':InpdLotSer',
    1 => ':SermSerNbr',
  ),
), null, null, null, false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \InvTransferPickedLotserial $obj A \InvTransferPickedLotserial object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(InvTransferPickedLotserial $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInhdnbr() || is_scalar($obj->getInhdnbr()) || is_callable([$obj->getInhdnbr(), '__toString']) ? (string) $obj->getInhdnbr() : $obj->getInhdnbr()), (null === $obj->getIndtline() || is_scalar($obj->getIndtline()) || is_callable([$obj->getIndtline(), '__toString']) ? (string) $obj->getIndtline() : $obj->getIndtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getInpdlotser() || is_scalar($obj->getInpdlotser()) || is_callable([$obj->getInpdlotser(), '__toString']) ? (string) $obj->getInpdlotser() : $obj->getInpdlotser()), (null === $obj->getInpdbin() || is_scalar($obj->getInpdbin()) || is_callable([$obj->getInpdbin(), '__toString']) ? (string) $obj->getInpdbin() : $obj->getInpdbin()), (null === $obj->getInpdplltnbr() || is_scalar($obj->getInpdplltnbr()) || is_callable([$obj->getInpdplltnbr(), '__toString']) ? (string) $obj->getInpdplltnbr() : $obj->getInpdplltnbr()), (null === $obj->getInpdcrtnnbr() || is_scalar($obj->getInpdcrtnnbr()) || is_callable([$obj->getInpdcrtnnbr(), '__toString']) ? (string) $obj->getInpdcrtnnbr() : $obj->getInpdcrtnnbr())]);
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
     * @param mixed $value A \InvTransferPickedLotserial object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvTransferPickedLotserial) {
                $key = serialize([(null === $value->getInhdnbr() || is_scalar($value->getInhdnbr()) || is_callable([$value->getInhdnbr(), '__toString']) ? (string) $value->getInhdnbr() : $value->getInhdnbr()), (null === $value->getIndtline() || is_scalar($value->getIndtline()) || is_callable([$value->getIndtline(), '__toString']) ? (string) $value->getIndtline() : $value->getIndtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getInpdlotser() || is_scalar($value->getInpdlotser()) || is_callable([$value->getInpdlotser(), '__toString']) ? (string) $value->getInpdlotser() : $value->getInpdlotser()), (null === $value->getInpdbin() || is_scalar($value->getInpdbin()) || is_callable([$value->getInpdbin(), '__toString']) ? (string) $value->getInpdbin() : $value->getInpdbin()), (null === $value->getInpdplltnbr() || is_scalar($value->getInpdplltnbr()) || is_callable([$value->getInpdplltnbr(), '__toString']) ? (string) $value->getInpdplltnbr() : $value->getInpdplltnbr()), (null === $value->getInpdcrtnnbr() || is_scalar($value->getInpdcrtnnbr()) || is_callable([$value->getInpdcrtnnbr(), '__toString']) ? (string) $value->getInpdcrtnnbr() : $value->getInpdcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvTransferPickedLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Inpdlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Inpdbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Inpdplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Inpdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvTransferPickedLotserialTableMap::CLASS_DEFAULT : InvTransferPickedLotserialTableMap::OM_CLASS;
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
     * @return array (InvTransferPickedLotserial object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvTransferPickedLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvTransferPickedLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvTransferPickedLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvTransferPickedLotserialTableMap::OM_CLASS;
            /** @var InvTransferPickedLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvTransferPickedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = InvTransferPickedLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvTransferPickedLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvTransferPickedLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvTransferPickedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INHDNBR);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INDTLINE);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLOTSER);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBIN);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBINFROM);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCASES);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDTAG);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLOTREF);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBATCH);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCUREDATE);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBINTO);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvTransferPickedLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InhdNbr');
            $criteria->addSelectColumn($alias . '.IndtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InpdLotSer');
            $criteria->addSelectColumn($alias . '.InpdBin');
            $criteria->addSelectColumn($alias . '.InpdPlltNbr');
            $criteria->addSelectColumn($alias . '.InpdCrtnNbr');
            $criteria->addSelectColumn($alias . '.InpdQtyResv');
            $criteria->addSelectColumn($alias . '.InpdQtyShip');
            $criteria->addSelectColumn($alias . '.InpdQtyNotPost');
            $criteria->addSelectColumn($alias . '.InpdUnitCost');
            $criteria->addSelectColumn($alias . '.InpdLotSerFrom');
            $criteria->addSelectColumn($alias . '.InpdBinFrom');
            $criteria->addSelectColumn($alias . '.InpdCases');
            $criteria->addSelectColumn($alias . '.InpdTag');
            $criteria->addSelectColumn($alias . '.InpdInspctLvl');
            $criteria->addSelectColumn($alias . '.InpdLotRef');
            $criteria->addSelectColumn($alias . '.InpdCrtnQty');
            $criteria->addSelectColumn($alias . '.InpdLblPrtd');
            $criteria->addSelectColumn($alias . '.InpdBatch');
            $criteria->addSelectColumn($alias . '.InpdCureDate');
            $criteria->addSelectColumn($alias . '.InpdBinTo');
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
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INHDNBR);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INDTLINE);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLOTSER);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBIN);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBINFROM);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCASES);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDTAG);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLOTREF);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBATCH);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDCUREDATE);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_INPDBINTO);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvTransferPickedLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InhdNbr');
            $criteria->removeSelectColumn($alias . '.IndtLine');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.InpdLotSer');
            $criteria->removeSelectColumn($alias . '.InpdBin');
            $criteria->removeSelectColumn($alias . '.InpdPlltNbr');
            $criteria->removeSelectColumn($alias . '.InpdCrtnNbr');
            $criteria->removeSelectColumn($alias . '.InpdQtyResv');
            $criteria->removeSelectColumn($alias . '.InpdQtyShip');
            $criteria->removeSelectColumn($alias . '.InpdQtyNotPost');
            $criteria->removeSelectColumn($alias . '.InpdUnitCost');
            $criteria->removeSelectColumn($alias . '.InpdLotSerFrom');
            $criteria->removeSelectColumn($alias . '.InpdBinFrom');
            $criteria->removeSelectColumn($alias . '.InpdCases');
            $criteria->removeSelectColumn($alias . '.InpdTag');
            $criteria->removeSelectColumn($alias . '.InpdInspctLvl');
            $criteria->removeSelectColumn($alias . '.InpdLotRef');
            $criteria->removeSelectColumn($alias . '.InpdCrtnQty');
            $criteria->removeSelectColumn($alias . '.InpdLblPrtd');
            $criteria->removeSelectColumn($alias . '.InpdBatch');
            $criteria->removeSelectColumn($alias . '.InpdCureDate');
            $criteria->removeSelectColumn($alias . '.InpdBinTo');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvTransferPickedLotserialTableMap::DATABASE_NAME)->getTable(InvTransferPickedLotserialTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvTransferPickedLotserial or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvTransferPickedLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvTransferPickedLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvTransferPickedLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INDTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDBIN, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $value[6]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvTransferPickedLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvTransferPickedLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvTransferPickedLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_trans_pulled table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvTransferPickedLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvTransferPickedLotserial or Criteria object.
     *
     * @param mixed $criteria Criteria or InvTransferPickedLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvTransferPickedLotserial object
        }


        // Set the correct dbName
        $query = InvTransferPickedLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
