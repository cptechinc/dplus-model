<?php

namespace Map;

use \InvTransferPreAllocatedLotserial;
use \InvTransferPreAllocatedLotserialQuery;
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
 * This class defines the structure of the 'inv_trans_pre_allo' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvTransferPreAllocatedLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvTransferPreAllocatedLotserialTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_trans_pre_allo';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvTransferPreAllocatedLotserial';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvTransferPreAllocatedLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvTransferPreAllocatedLotserial';

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
     * the column name for the InhdNbr field
     */
    public const COL_INHDNBR = 'inv_trans_pre_allo.InhdNbr';

    /**
     * the column name for the IndtLine field
     */
    public const COL_INDTLINE = 'inv_trans_pre_allo.IndtLine';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'inv_trans_pre_allo.InitItemNbr';

    /**
     * the column name for the InidLotSer field
     */
    public const COL_INIDLOTSER = 'inv_trans_pre_allo.InidLotSer';

    /**
     * the column name for the InidBin field
     */
    public const COL_INIDBIN = 'inv_trans_pre_allo.InidBin';

    /**
     * the column name for the InidPlltNbr field
     */
    public const COL_INIDPLLTNBR = 'inv_trans_pre_allo.InidPlltNbr';

    /**
     * the column name for the InidCrtnNbr field
     */
    public const COL_INIDCRTNNBR = 'inv_trans_pre_allo.InidCrtnNbr';

    /**
     * the column name for the InidQtyResv field
     */
    public const COL_INIDQTYRESV = 'inv_trans_pre_allo.InidQtyResv';

    /**
     * the column name for the InidQtyShip field
     */
    public const COL_INIDQTYSHIP = 'inv_trans_pre_allo.InidQtyShip';

    /**
     * the column name for the InidQtyNotPost field
     */
    public const COL_INIDQTYNOTPOST = 'inv_trans_pre_allo.InidQtyNotPost';

    /**
     * the column name for the InidUnitCost field
     */
    public const COL_INIDUNITCOST = 'inv_trans_pre_allo.InidUnitCost';

    /**
     * the column name for the InidLotSerFrom field
     */
    public const COL_INIDLOTSERFROM = 'inv_trans_pre_allo.InidLotSerFrom';

    /**
     * the column name for the InidBinFrom field
     */
    public const COL_INIDBINFROM = 'inv_trans_pre_allo.InidBinFrom';

    /**
     * the column name for the InidCases field
     */
    public const COL_INIDCASES = 'inv_trans_pre_allo.InidCases';

    /**
     * the column name for the InidTag field
     */
    public const COL_INIDTAG = 'inv_trans_pre_allo.InidTag';

    /**
     * the column name for the InidInspctLvl field
     */
    public const COL_INIDINSPCTLVL = 'inv_trans_pre_allo.InidInspctLvl';

    /**
     * the column name for the InidLotRef field
     */
    public const COL_INIDLOTREF = 'inv_trans_pre_allo.InidLotRef';

    /**
     * the column name for the InidCrtnQty field
     */
    public const COL_INIDCRTNQTY = 'inv_trans_pre_allo.InidCrtnQty';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_trans_pre_allo.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_trans_pre_allo.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_trans_pre_allo.dummy';

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
        self::TYPE_PHPNAME       => ['Inhdnbr', 'Indtline', 'Inititemnbr', 'Inidlotser', 'Inidbin', 'Inidplltnbr', 'Inidcrtnnbr', 'Inidqtyresv', 'Inidqtyship', 'Inidqtynotpost', 'Inidunitcost', 'Inidlotserfrom', 'Inidbinfrom', 'Inidcases', 'Inidtag', 'Inidinspctlvl', 'Inidlotref', 'Inidcrtnqty', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inhdnbr', 'indtline', 'inititemnbr', 'inidlotser', 'inidbin', 'inidplltnbr', 'inidcrtnnbr', 'inidqtyresv', 'inidqtyship', 'inidqtynotpost', 'inidunitcost', 'inidlotserfrom', 'inidbinfrom', 'inidcases', 'inidtag', 'inidinspctlvl', 'inidlotref', 'inidcrtnqty', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV, InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP, InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST, InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST, InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM, InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM, InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES, InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG, InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL, InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF, InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY, InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD, InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD, InvTransferPreAllocatedLotserialTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InhdNbr', 'IndtLine', 'InitItemNbr', 'InidLotSer', 'InidBin', 'InidPlltNbr', 'InidCrtnNbr', 'InidQtyResv', 'InidQtyShip', 'InidQtyNotPost', 'InidUnitCost', 'InidLotSerFrom', 'InidBinFrom', 'InidCases', 'InidTag', 'InidInspctLvl', 'InidLotRef', 'InidCrtnQty', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Inhdnbr' => 0, 'Indtline' => 1, 'Inititemnbr' => 2, 'Inidlotser' => 3, 'Inidbin' => 4, 'Inidplltnbr' => 5, 'Inidcrtnnbr' => 6, 'Inidqtyresv' => 7, 'Inidqtyship' => 8, 'Inidqtynotpost' => 9, 'Inidunitcost' => 10, 'Inidlotserfrom' => 11, 'Inidbinfrom' => 12, 'Inidcases' => 13, 'Inidtag' => 14, 'Inidinspctlvl' => 15, 'Inidlotref' => 16, 'Inidcrtnqty' => 17, 'Dateupdtd' => 18, 'Timeupdtd' => 19, 'Dummy' => 20, ],
        self::TYPE_CAMELNAME     => ['inhdnbr' => 0, 'indtline' => 1, 'inititemnbr' => 2, 'inidlotser' => 3, 'inidbin' => 4, 'inidplltnbr' => 5, 'inidcrtnnbr' => 6, 'inidqtyresv' => 7, 'inidqtyship' => 8, 'inidqtynotpost' => 9, 'inidunitcost' => 10, 'inidlotserfrom' => 11, 'inidbinfrom' => 12, 'inidcases' => 13, 'inidtag' => 14, 'inidinspctlvl' => 15, 'inidlotref' => 16, 'inidcrtnqty' => 17, 'dateupdtd' => 18, 'timeupdtd' => 19, 'dummy' => 20, ],
        self::TYPE_COLNAME       => [InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR => 0, InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE => 1, InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR => 2, InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER => 3, InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN => 4, InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR => 5, InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR => 6, InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV => 7, InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP => 8, InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST => 9, InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST => 10, InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM => 11, InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM => 12, InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES => 13, InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG => 14, InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL => 15, InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF => 16, InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY => 17, InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD => 18, InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD => 19, InvTransferPreAllocatedLotserialTableMap::COL_DUMMY => 20, ],
        self::TYPE_FIELDNAME     => ['InhdNbr' => 0, 'IndtLine' => 1, 'InitItemNbr' => 2, 'InidLotSer' => 3, 'InidBin' => 4, 'InidPlltNbr' => 5, 'InidCrtnNbr' => 6, 'InidQtyResv' => 7, 'InidQtyShip' => 8, 'InidQtyNotPost' => 9, 'InidUnitCost' => 10, 'InidLotSerFrom' => 11, 'InidBinFrom' => 12, 'InidCases' => 13, 'InidTag' => 14, 'InidInspctLvl' => 15, 'InidLotRef' => 16, 'InidCrtnQty' => 17, 'DateUpdtd' => 18, 'TimeUpdtd' => 19, 'dummy' => 20, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inhdnbr' => 'INHDNBR',
        'InvTransferPreAllocatedLotserial.Inhdnbr' => 'INHDNBR',
        'inhdnbr' => 'INHDNBR',
        'invTransferPreAllocatedLotserial.inhdnbr' => 'INHDNBR',
        'InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR' => 'INHDNBR',
        'COL_INHDNBR' => 'INHDNBR',
        'InhdNbr' => 'INHDNBR',
        'inv_trans_pre_allo.InhdNbr' => 'INHDNBR',
        'Indtline' => 'INDTLINE',
        'InvTransferPreAllocatedLotserial.Indtline' => 'INDTLINE',
        'indtline' => 'INDTLINE',
        'invTransferPreAllocatedLotserial.indtline' => 'INDTLINE',
        'InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE' => 'INDTLINE',
        'COL_INDTLINE' => 'INDTLINE',
        'IndtLine' => 'INDTLINE',
        'inv_trans_pre_allo.IndtLine' => 'INDTLINE',
        'Inititemnbr' => 'INITITEMNBR',
        'InvTransferPreAllocatedLotserial.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'invTransferPreAllocatedLotserial.inititemnbr' => 'INITITEMNBR',
        'InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'inv_trans_pre_allo.InitItemNbr' => 'INITITEMNBR',
        'Inidlotser' => 'INIDLOTSER',
        'InvTransferPreAllocatedLotserial.Inidlotser' => 'INIDLOTSER',
        'inidlotser' => 'INIDLOTSER',
        'invTransferPreAllocatedLotserial.inidlotser' => 'INIDLOTSER',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER' => 'INIDLOTSER',
        'COL_INIDLOTSER' => 'INIDLOTSER',
        'InidLotSer' => 'INIDLOTSER',
        'inv_trans_pre_allo.InidLotSer' => 'INIDLOTSER',
        'Inidbin' => 'INIDBIN',
        'InvTransferPreAllocatedLotserial.Inidbin' => 'INIDBIN',
        'inidbin' => 'INIDBIN',
        'invTransferPreAllocatedLotserial.inidbin' => 'INIDBIN',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN' => 'INIDBIN',
        'COL_INIDBIN' => 'INIDBIN',
        'InidBin' => 'INIDBIN',
        'inv_trans_pre_allo.InidBin' => 'INIDBIN',
        'Inidplltnbr' => 'INIDPLLTNBR',
        'InvTransferPreAllocatedLotserial.Inidplltnbr' => 'INIDPLLTNBR',
        'inidplltnbr' => 'INIDPLLTNBR',
        'invTransferPreAllocatedLotserial.inidplltnbr' => 'INIDPLLTNBR',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR' => 'INIDPLLTNBR',
        'COL_INIDPLLTNBR' => 'INIDPLLTNBR',
        'InidPlltNbr' => 'INIDPLLTNBR',
        'inv_trans_pre_allo.InidPlltNbr' => 'INIDPLLTNBR',
        'Inidcrtnnbr' => 'INIDCRTNNBR',
        'InvTransferPreAllocatedLotserial.Inidcrtnnbr' => 'INIDCRTNNBR',
        'inidcrtnnbr' => 'INIDCRTNNBR',
        'invTransferPreAllocatedLotserial.inidcrtnnbr' => 'INIDCRTNNBR',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR' => 'INIDCRTNNBR',
        'COL_INIDCRTNNBR' => 'INIDCRTNNBR',
        'InidCrtnNbr' => 'INIDCRTNNBR',
        'inv_trans_pre_allo.InidCrtnNbr' => 'INIDCRTNNBR',
        'Inidqtyresv' => 'INIDQTYRESV',
        'InvTransferPreAllocatedLotserial.Inidqtyresv' => 'INIDQTYRESV',
        'inidqtyresv' => 'INIDQTYRESV',
        'invTransferPreAllocatedLotserial.inidqtyresv' => 'INIDQTYRESV',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV' => 'INIDQTYRESV',
        'COL_INIDQTYRESV' => 'INIDQTYRESV',
        'InidQtyResv' => 'INIDQTYRESV',
        'inv_trans_pre_allo.InidQtyResv' => 'INIDQTYRESV',
        'Inidqtyship' => 'INIDQTYSHIP',
        'InvTransferPreAllocatedLotserial.Inidqtyship' => 'INIDQTYSHIP',
        'inidqtyship' => 'INIDQTYSHIP',
        'invTransferPreAllocatedLotserial.inidqtyship' => 'INIDQTYSHIP',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP' => 'INIDQTYSHIP',
        'COL_INIDQTYSHIP' => 'INIDQTYSHIP',
        'InidQtyShip' => 'INIDQTYSHIP',
        'inv_trans_pre_allo.InidQtyShip' => 'INIDQTYSHIP',
        'Inidqtynotpost' => 'INIDQTYNOTPOST',
        'InvTransferPreAllocatedLotserial.Inidqtynotpost' => 'INIDQTYNOTPOST',
        'inidqtynotpost' => 'INIDQTYNOTPOST',
        'invTransferPreAllocatedLotserial.inidqtynotpost' => 'INIDQTYNOTPOST',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST' => 'INIDQTYNOTPOST',
        'COL_INIDQTYNOTPOST' => 'INIDQTYNOTPOST',
        'InidQtyNotPost' => 'INIDQTYNOTPOST',
        'inv_trans_pre_allo.InidQtyNotPost' => 'INIDQTYNOTPOST',
        'Inidunitcost' => 'INIDUNITCOST',
        'InvTransferPreAllocatedLotserial.Inidunitcost' => 'INIDUNITCOST',
        'inidunitcost' => 'INIDUNITCOST',
        'invTransferPreAllocatedLotserial.inidunitcost' => 'INIDUNITCOST',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST' => 'INIDUNITCOST',
        'COL_INIDUNITCOST' => 'INIDUNITCOST',
        'InidUnitCost' => 'INIDUNITCOST',
        'inv_trans_pre_allo.InidUnitCost' => 'INIDUNITCOST',
        'Inidlotserfrom' => 'INIDLOTSERFROM',
        'InvTransferPreAllocatedLotserial.Inidlotserfrom' => 'INIDLOTSERFROM',
        'inidlotserfrom' => 'INIDLOTSERFROM',
        'invTransferPreAllocatedLotserial.inidlotserfrom' => 'INIDLOTSERFROM',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM' => 'INIDLOTSERFROM',
        'COL_INIDLOTSERFROM' => 'INIDLOTSERFROM',
        'InidLotSerFrom' => 'INIDLOTSERFROM',
        'inv_trans_pre_allo.InidLotSerFrom' => 'INIDLOTSERFROM',
        'Inidbinfrom' => 'INIDBINFROM',
        'InvTransferPreAllocatedLotserial.Inidbinfrom' => 'INIDBINFROM',
        'inidbinfrom' => 'INIDBINFROM',
        'invTransferPreAllocatedLotserial.inidbinfrom' => 'INIDBINFROM',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM' => 'INIDBINFROM',
        'COL_INIDBINFROM' => 'INIDBINFROM',
        'InidBinFrom' => 'INIDBINFROM',
        'inv_trans_pre_allo.InidBinFrom' => 'INIDBINFROM',
        'Inidcases' => 'INIDCASES',
        'InvTransferPreAllocatedLotserial.Inidcases' => 'INIDCASES',
        'inidcases' => 'INIDCASES',
        'invTransferPreAllocatedLotserial.inidcases' => 'INIDCASES',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES' => 'INIDCASES',
        'COL_INIDCASES' => 'INIDCASES',
        'InidCases' => 'INIDCASES',
        'inv_trans_pre_allo.InidCases' => 'INIDCASES',
        'Inidtag' => 'INIDTAG',
        'InvTransferPreAllocatedLotserial.Inidtag' => 'INIDTAG',
        'inidtag' => 'INIDTAG',
        'invTransferPreAllocatedLotserial.inidtag' => 'INIDTAG',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG' => 'INIDTAG',
        'COL_INIDTAG' => 'INIDTAG',
        'InidTag' => 'INIDTAG',
        'inv_trans_pre_allo.InidTag' => 'INIDTAG',
        'Inidinspctlvl' => 'INIDINSPCTLVL',
        'InvTransferPreAllocatedLotserial.Inidinspctlvl' => 'INIDINSPCTLVL',
        'inidinspctlvl' => 'INIDINSPCTLVL',
        'invTransferPreAllocatedLotserial.inidinspctlvl' => 'INIDINSPCTLVL',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL' => 'INIDINSPCTLVL',
        'COL_INIDINSPCTLVL' => 'INIDINSPCTLVL',
        'InidInspctLvl' => 'INIDINSPCTLVL',
        'inv_trans_pre_allo.InidInspctLvl' => 'INIDINSPCTLVL',
        'Inidlotref' => 'INIDLOTREF',
        'InvTransferPreAllocatedLotserial.Inidlotref' => 'INIDLOTREF',
        'inidlotref' => 'INIDLOTREF',
        'invTransferPreAllocatedLotserial.inidlotref' => 'INIDLOTREF',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF' => 'INIDLOTREF',
        'COL_INIDLOTREF' => 'INIDLOTREF',
        'InidLotRef' => 'INIDLOTREF',
        'inv_trans_pre_allo.InidLotRef' => 'INIDLOTREF',
        'Inidcrtnqty' => 'INIDCRTNQTY',
        'InvTransferPreAllocatedLotserial.Inidcrtnqty' => 'INIDCRTNQTY',
        'inidcrtnqty' => 'INIDCRTNQTY',
        'invTransferPreAllocatedLotserial.inidcrtnqty' => 'INIDCRTNQTY',
        'InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY' => 'INIDCRTNQTY',
        'COL_INIDCRTNQTY' => 'INIDCRTNQTY',
        'InidCrtnQty' => 'INIDCRTNQTY',
        'inv_trans_pre_allo.InidCrtnQty' => 'INIDCRTNQTY',
        'Dateupdtd' => 'DATEUPDTD',
        'InvTransferPreAllocatedLotserial.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invTransferPreAllocatedLotserial.dateupdtd' => 'DATEUPDTD',
        'InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_trans_pre_allo.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvTransferPreAllocatedLotserial.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invTransferPreAllocatedLotserial.timeupdtd' => 'TIMEUPDTD',
        'InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_trans_pre_allo.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvTransferPreAllocatedLotserial.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invTransferPreAllocatedLotserial.dummy' => 'DUMMY',
        'InvTransferPreAllocatedLotserialTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_trans_pre_allo.dummy' => 'DUMMY',
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
        $this->setName('inv_trans_pre_allo');
        $this->setPhpName('InvTransferPreAllocatedLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvTransferPreAllocatedLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_head', 'InhdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_det', 'InhdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('IndtLine', 'Indtline', 'INTEGER' , 'inv_trans_det', 'IndtLine', true, 5, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_ser_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InidLotSer', 'Inidlotser', 'VARCHAR' , 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addForeignPrimaryKey('InidLotSer', 'Inidlotser', 'VARCHAR' , 'inv_ser_mast', 'SermSerNbr', true, 20, '');
        $this->addPrimaryKey('InidBin', 'Inidbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('InidPlltNbr', 'Inidplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('InidCrtnNbr', 'Inidcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('InidQtyResv', 'Inidqtyresv', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InidQtyShip', 'Inidqtyship', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InidQtyNotPost', 'Inidqtynotpost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InidUnitCost', 'Inidunitcost', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('InidLotSerFrom', 'Inidlotserfrom', 'VARCHAR', true, 20, '');
        $this->addColumn('InidBinFrom', 'Inidbinfrom', 'VARCHAR', true, 8, '');
        $this->addColumn('InidCases', 'Inidcases', 'INTEGER', true, 5, 0);
        $this->addColumn('InidTag', 'Inidtag', 'INTEGER', true, 5, 0);
        $this->addColumn('InidInspctLvl', 'Inidinspctlvl', 'CHAR', true, null, '');
        $this->addColumn('InidLotRef', 'Inidlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('InidCrtnQty', 'Inidcrtnqty', 'DECIMAL', true, 20, 0);
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
    0 => ':InidLotSer',
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
    0 => ':InidLotSer',
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
     * @param \InvTransferPreAllocatedLotserial $obj A \InvTransferPreAllocatedLotserial object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(InvTransferPreAllocatedLotserial $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInhdnbr() || is_scalar($obj->getInhdnbr()) || is_callable([$obj->getInhdnbr(), '__toString']) ? (string) $obj->getInhdnbr() : $obj->getInhdnbr()), (null === $obj->getIndtline() || is_scalar($obj->getIndtline()) || is_callable([$obj->getIndtline(), '__toString']) ? (string) $obj->getIndtline() : $obj->getIndtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getInidlotser() || is_scalar($obj->getInidlotser()) || is_callable([$obj->getInidlotser(), '__toString']) ? (string) $obj->getInidlotser() : $obj->getInidlotser()), (null === $obj->getInidbin() || is_scalar($obj->getInidbin()) || is_callable([$obj->getInidbin(), '__toString']) ? (string) $obj->getInidbin() : $obj->getInidbin()), (null === $obj->getInidplltnbr() || is_scalar($obj->getInidplltnbr()) || is_callable([$obj->getInidplltnbr(), '__toString']) ? (string) $obj->getInidplltnbr() : $obj->getInidplltnbr()), (null === $obj->getInidcrtnnbr() || is_scalar($obj->getInidcrtnnbr()) || is_callable([$obj->getInidcrtnnbr(), '__toString']) ? (string) $obj->getInidcrtnnbr() : $obj->getInidcrtnnbr())]);
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
     * @param mixed $value A \InvTransferPreAllocatedLotserial object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvTransferPreAllocatedLotserial) {
                $key = serialize([(null === $value->getInhdnbr() || is_scalar($value->getInhdnbr()) || is_callable([$value->getInhdnbr(), '__toString']) ? (string) $value->getInhdnbr() : $value->getInhdnbr()), (null === $value->getIndtline() || is_scalar($value->getIndtline()) || is_callable([$value->getIndtline(), '__toString']) ? (string) $value->getIndtline() : $value->getIndtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getInidlotser() || is_scalar($value->getInidlotser()) || is_callable([$value->getInidlotser(), '__toString']) ? (string) $value->getInidlotser() : $value->getInidlotser()), (null === $value->getInidbin() || is_scalar($value->getInidbin()) || is_callable([$value->getInidbin(), '__toString']) ? (string) $value->getInidbin() : $value->getInidbin()), (null === $value->getInidplltnbr() || is_scalar($value->getInidplltnbr()) || is_callable([$value->getInidplltnbr(), '__toString']) ? (string) $value->getInidplltnbr() : $value->getInidplltnbr()), (null === $value->getInidcrtnnbr() || is_scalar($value->getInidcrtnnbr()) || is_callable([$value->getInidcrtnnbr(), '__toString']) ? (string) $value->getInidcrtnnbr() : $value->getInidcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvTransferPreAllocatedLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Inidlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Inidbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Inidplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Inidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvTransferPreAllocatedLotserialTableMap::CLASS_DEFAULT : InvTransferPreAllocatedLotserialTableMap::OM_CLASS;
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
     * @return array (InvTransferPreAllocatedLotserial object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvTransferPreAllocatedLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvTransferPreAllocatedLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvTransferPreAllocatedLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvTransferPreAllocatedLotserialTableMap::OM_CLASS;
            /** @var InvTransferPreAllocatedLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvTransferPreAllocatedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = InvTransferPreAllocatedLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvTransferPreAllocatedLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvTransferPreAllocatedLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvTransferPreAllocatedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InhdNbr');
            $criteria->addSelectColumn($alias . '.IndtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InidLotSer');
            $criteria->addSelectColumn($alias . '.InidBin');
            $criteria->addSelectColumn($alias . '.InidPlltNbr');
            $criteria->addSelectColumn($alias . '.InidCrtnNbr');
            $criteria->addSelectColumn($alias . '.InidQtyResv');
            $criteria->addSelectColumn($alias . '.InidQtyShip');
            $criteria->addSelectColumn($alias . '.InidQtyNotPost');
            $criteria->addSelectColumn($alias . '.InidUnitCost');
            $criteria->addSelectColumn($alias . '.InidLotSerFrom');
            $criteria->addSelectColumn($alias . '.InidBinFrom');
            $criteria->addSelectColumn($alias . '.InidCases');
            $criteria->addSelectColumn($alias . '.InidTag');
            $criteria->addSelectColumn($alias . '.InidInspctLvl');
            $criteria->addSelectColumn($alias . '.InidLotRef');
            $criteria->addSelectColumn($alias . '.InidCrtnQty');
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
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvTransferPreAllocatedLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InhdNbr');
            $criteria->removeSelectColumn($alias . '.IndtLine');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.InidLotSer');
            $criteria->removeSelectColumn($alias . '.InidBin');
            $criteria->removeSelectColumn($alias . '.InidPlltNbr');
            $criteria->removeSelectColumn($alias . '.InidCrtnNbr');
            $criteria->removeSelectColumn($alias . '.InidQtyResv');
            $criteria->removeSelectColumn($alias . '.InidQtyShip');
            $criteria->removeSelectColumn($alias . '.InidQtyNotPost');
            $criteria->removeSelectColumn($alias . '.InidUnitCost');
            $criteria->removeSelectColumn($alias . '.InidLotSerFrom');
            $criteria->removeSelectColumn($alias . '.InidBinFrom');
            $criteria->removeSelectColumn($alias . '.InidCases');
            $criteria->removeSelectColumn($alias . '.InidTag');
            $criteria->removeSelectColumn($alias . '.InidInspctLvl');
            $criteria->removeSelectColumn($alias . '.InidLotRef');
            $criteria->removeSelectColumn($alias . '.InidCrtnQty');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME)->getTable(InvTransferPreAllocatedLotserialTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvTransferPreAllocatedLotserial or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvTransferPreAllocatedLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvTransferPreAllocatedLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $value[6]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvTransferPreAllocatedLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvTransferPreAllocatedLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvTransferPreAllocatedLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_trans_pre_allo table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvTransferPreAllocatedLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvTransferPreAllocatedLotserial or Criteria object.
     *
     * @param mixed $criteria Criteria or InvTransferPreAllocatedLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvTransferPreAllocatedLotserial object
        }


        // Set the correct dbName
        $query = InvTransferPreAllocatedLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
