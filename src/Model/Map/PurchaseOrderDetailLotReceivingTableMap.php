<?php

namespace Map;

use \PurchaseOrderDetailLotReceiving;
use \PurchaseOrderDetailLotReceivingQuery;
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
 * This class defines the structure of the 'po_tran_lot_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class PurchaseOrderDetailLotReceivingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.PurchaseOrderDetailLotReceivingTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'po_tran_lot_det';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'PurchaseOrderDetailLotReceiving';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\PurchaseOrderDetailLotReceiving';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'PurchaseOrderDetailLotReceiving';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the PothNbr field
     */
    public const COL_POTHNBR = 'po_tran_lot_det.PothNbr';

    /**
     * the column name for the PotdLine field
     */
    public const COL_POTDLINE = 'po_tran_lot_det.PotdLine';

    /**
     * the column name for the PotdSeq field
     */
    public const COL_POTDSEQ = 'po_tran_lot_det.PotdSeq';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'po_tran_lot_det.InitItemNbr';

    /**
     * the column name for the PotsLotSer field
     */
    public const COL_POTSLOTSER = 'po_tran_lot_det.PotsLotSer';

    /**
     * the column name for the PotsBin field
     */
    public const COL_POTSBIN = 'po_tran_lot_det.PotsBin';

    /**
     * the column name for the PotsQtyRec field
     */
    public const COL_POTSQTYREC = 'po_tran_lot_det.PotsQtyRec';

    /**
     * the column name for the PotsQtyAllo field
     */
    public const COL_POTSQTYALLO = 'po_tran_lot_det.PotsQtyAllo';

    /**
     * the column name for the PotsCases field
     */
    public const COL_POTSCASES = 'po_tran_lot_det.PotsCases';

    /**
     * the column name for the PotsTag field
     */
    public const COL_POTSTAG = 'po_tran_lot_det.PotsTag';

    /**
     * the column name for the PotsInspctLvl field
     */
    public const COL_POTSINSPCTLVL = 'po_tran_lot_det.PotsInspctLvl';

    /**
     * the column name for the PotsLotRef field
     */
    public const COL_POTSLOTREF = 'po_tran_lot_det.PotsLotRef';

    /**
     * the column name for the PotsPutTake field
     */
    public const COL_POTSPUTTAKE = 'po_tran_lot_det.PotsPutTake';

    /**
     * the column name for the PotsLandUnitCost field
     */
    public const COL_POTSLANDUNITCOST = 'po_tran_lot_det.PotsLandUnitCost';

    /**
     * the column name for the PotsFabCostVari field
     */
    public const COL_POTSFABCOSTVARI = 'po_tran_lot_det.PotsFabCostVari';

    /**
     * the column name for the PotsErBatch field
     */
    public const COL_POTSERBATCH = 'po_tran_lot_det.PotsErBatch';

    /**
     * the column name for the PotsErBatchTime field
     */
    public const COL_POTSERBATCHTIME = 'po_tran_lot_det.PotsErBatchTime';

    /**
     * the column name for the PotsExpireDateCd field
     */
    public const COL_POTSEXPIREDATECD = 'po_tran_lot_det.PotsExpireDateCd';

    /**
     * the column name for the PotsExpireDate field
     */
    public const COL_POTSEXPIREDATE = 'po_tran_lot_det.PotsExpireDate';

    /**
     * the column name for the PotsTariffCost field
     */
    public const COL_POTSTARIFFCOST = 'po_tran_lot_det.PotsTariffCost';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'po_tran_lot_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'po_tran_lot_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'po_tran_lot_det.dummy';

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
        self::TYPE_PHPNAME       => ['Pothnbr', 'Potdline', 'Potdseq', 'Inititemnbr', 'Potslotser', 'Potsbin', 'Potsqtyrec', 'Potsqtyallo', 'Potscases', 'Potstag', 'Potsinspctlvl', 'Potslotref', 'Potsputtake', 'Potslandunitcost', 'Potsfabcostvari', 'Potserbatch', 'Potserbatchtime', 'Potsexpiredatecd', 'Potsexpiredate', 'Potstariffcost', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['pothnbr', 'potdline', 'potdseq', 'inititemnbr', 'potslotser', 'potsbin', 'potsqtyrec', 'potsqtyallo', 'potscases', 'potstag', 'potsinspctlvl', 'potslotref', 'potsputtake', 'potslandunitcost', 'potsfabcostvari', 'potserbatch', 'potserbatchtime', 'potsexpiredatecd', 'potsexpiredate', 'potstariffcost', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL, PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF, PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE, PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH, PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME, PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD, PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE, PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD, PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD, PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['PothNbr', 'PotdLine', 'PotdSeq', 'InitItemNbr', 'PotsLotSer', 'PotsBin', 'PotsQtyRec', 'PotsQtyAllo', 'PotsCases', 'PotsTag', 'PotsInspctLvl', 'PotsLotRef', 'PotsPutTake', 'PotsLandUnitCost', 'PotsFabCostVari', 'PotsErBatch', 'PotsErBatchTime', 'PotsExpireDateCd', 'PotsExpireDate', 'PotsTariffCost', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, ]
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
        self::TYPE_PHPNAME       => ['Pothnbr' => 0, 'Potdline' => 1, 'Potdseq' => 2, 'Inititemnbr' => 3, 'Potslotser' => 4, 'Potsbin' => 5, 'Potsqtyrec' => 6, 'Potsqtyallo' => 7, 'Potscases' => 8, 'Potstag' => 9, 'Potsinspctlvl' => 10, 'Potslotref' => 11, 'Potsputtake' => 12, 'Potslandunitcost' => 13, 'Potsfabcostvari' => 14, 'Potserbatch' => 15, 'Potserbatchtime' => 16, 'Potsexpiredatecd' => 17, 'Potsexpiredate' => 18, 'Potstariffcost' => 19, 'Dateupdtd' => 20, 'Timeupdtd' => 21, 'Dummy' => 22, ],
        self::TYPE_CAMELNAME     => ['pothnbr' => 0, 'potdline' => 1, 'potdseq' => 2, 'inititemnbr' => 3, 'potslotser' => 4, 'potsbin' => 5, 'potsqtyrec' => 6, 'potsqtyallo' => 7, 'potscases' => 8, 'potstag' => 9, 'potsinspctlvl' => 10, 'potslotref' => 11, 'potsputtake' => 12, 'potslandunitcost' => 13, 'potsfabcostvari' => 14, 'potserbatch' => 15, 'potserbatchtime' => 16, 'potsexpiredatecd' => 17, 'potsexpiredate' => 18, 'potstariffcost' => 19, 'dateupdtd' => 20, 'timeupdtd' => 21, 'dummy' => 22, ],
        self::TYPE_COLNAME       => [PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR => 0, PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE => 1, PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ => 2, PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR => 3, PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER => 4, PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN => 5, PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC => 6, PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO => 7, PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES => 8, PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG => 9, PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL => 10, PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF => 11, PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE => 12, PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST => 13, PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI => 14, PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH => 15, PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME => 16, PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD => 17, PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE => 18, PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST => 19, PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD => 20, PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD => 21, PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY => 22, ],
        self::TYPE_FIELDNAME     => ['PothNbr' => 0, 'PotdLine' => 1, 'PotdSeq' => 2, 'InitItemNbr' => 3, 'PotsLotSer' => 4, 'PotsBin' => 5, 'PotsQtyRec' => 6, 'PotsQtyAllo' => 7, 'PotsCases' => 8, 'PotsTag' => 9, 'PotsInspctLvl' => 10, 'PotsLotRef' => 11, 'PotsPutTake' => 12, 'PotsLandUnitCost' => 13, 'PotsFabCostVari' => 14, 'PotsErBatch' => 15, 'PotsErBatchTime' => 16, 'PotsExpireDateCd' => 17, 'PotsExpireDate' => 18, 'PotsTariffCost' => 19, 'DateUpdtd' => 20, 'TimeUpdtd' => 21, 'dummy' => 22, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Pothnbr' => 'POTHNBR',
        'PurchaseOrderDetailLotReceiving.Pothnbr' => 'POTHNBR',
        'pothnbr' => 'POTHNBR',
        'purchaseOrderDetailLotReceiving.pothnbr' => 'POTHNBR',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR' => 'POTHNBR',
        'COL_POTHNBR' => 'POTHNBR',
        'PothNbr' => 'POTHNBR',
        'po_tran_lot_det.PothNbr' => 'POTHNBR',
        'Potdline' => 'POTDLINE',
        'PurchaseOrderDetailLotReceiving.Potdline' => 'POTDLINE',
        'potdline' => 'POTDLINE',
        'purchaseOrderDetailLotReceiving.potdline' => 'POTDLINE',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE' => 'POTDLINE',
        'COL_POTDLINE' => 'POTDLINE',
        'PotdLine' => 'POTDLINE',
        'po_tran_lot_det.PotdLine' => 'POTDLINE',
        'Potdseq' => 'POTDSEQ',
        'PurchaseOrderDetailLotReceiving.Potdseq' => 'POTDSEQ',
        'potdseq' => 'POTDSEQ',
        'purchaseOrderDetailLotReceiving.potdseq' => 'POTDSEQ',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ' => 'POTDSEQ',
        'COL_POTDSEQ' => 'POTDSEQ',
        'PotdSeq' => 'POTDSEQ',
        'po_tran_lot_det.PotdSeq' => 'POTDSEQ',
        'Inititemnbr' => 'INITITEMNBR',
        'PurchaseOrderDetailLotReceiving.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'purchaseOrderDetailLotReceiving.inititemnbr' => 'INITITEMNBR',
        'PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'po_tran_lot_det.InitItemNbr' => 'INITITEMNBR',
        'Potslotser' => 'POTSLOTSER',
        'PurchaseOrderDetailLotReceiving.Potslotser' => 'POTSLOTSER',
        'potslotser' => 'POTSLOTSER',
        'purchaseOrderDetailLotReceiving.potslotser' => 'POTSLOTSER',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER' => 'POTSLOTSER',
        'COL_POTSLOTSER' => 'POTSLOTSER',
        'PotsLotSer' => 'POTSLOTSER',
        'po_tran_lot_det.PotsLotSer' => 'POTSLOTSER',
        'Potsbin' => 'POTSBIN',
        'PurchaseOrderDetailLotReceiving.Potsbin' => 'POTSBIN',
        'potsbin' => 'POTSBIN',
        'purchaseOrderDetailLotReceiving.potsbin' => 'POTSBIN',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN' => 'POTSBIN',
        'COL_POTSBIN' => 'POTSBIN',
        'PotsBin' => 'POTSBIN',
        'po_tran_lot_det.PotsBin' => 'POTSBIN',
        'Potsqtyrec' => 'POTSQTYREC',
        'PurchaseOrderDetailLotReceiving.Potsqtyrec' => 'POTSQTYREC',
        'potsqtyrec' => 'POTSQTYREC',
        'purchaseOrderDetailLotReceiving.potsqtyrec' => 'POTSQTYREC',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC' => 'POTSQTYREC',
        'COL_POTSQTYREC' => 'POTSQTYREC',
        'PotsQtyRec' => 'POTSQTYREC',
        'po_tran_lot_det.PotsQtyRec' => 'POTSQTYREC',
        'Potsqtyallo' => 'POTSQTYALLO',
        'PurchaseOrderDetailLotReceiving.Potsqtyallo' => 'POTSQTYALLO',
        'potsqtyallo' => 'POTSQTYALLO',
        'purchaseOrderDetailLotReceiving.potsqtyallo' => 'POTSQTYALLO',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO' => 'POTSQTYALLO',
        'COL_POTSQTYALLO' => 'POTSQTYALLO',
        'PotsQtyAllo' => 'POTSQTYALLO',
        'po_tran_lot_det.PotsQtyAllo' => 'POTSQTYALLO',
        'Potscases' => 'POTSCASES',
        'PurchaseOrderDetailLotReceiving.Potscases' => 'POTSCASES',
        'potscases' => 'POTSCASES',
        'purchaseOrderDetailLotReceiving.potscases' => 'POTSCASES',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES' => 'POTSCASES',
        'COL_POTSCASES' => 'POTSCASES',
        'PotsCases' => 'POTSCASES',
        'po_tran_lot_det.PotsCases' => 'POTSCASES',
        'Potstag' => 'POTSTAG',
        'PurchaseOrderDetailLotReceiving.Potstag' => 'POTSTAG',
        'potstag' => 'POTSTAG',
        'purchaseOrderDetailLotReceiving.potstag' => 'POTSTAG',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG' => 'POTSTAG',
        'COL_POTSTAG' => 'POTSTAG',
        'PotsTag' => 'POTSTAG',
        'po_tran_lot_det.PotsTag' => 'POTSTAG',
        'Potsinspctlvl' => 'POTSINSPCTLVL',
        'PurchaseOrderDetailLotReceiving.Potsinspctlvl' => 'POTSINSPCTLVL',
        'potsinspctlvl' => 'POTSINSPCTLVL',
        'purchaseOrderDetailLotReceiving.potsinspctlvl' => 'POTSINSPCTLVL',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL' => 'POTSINSPCTLVL',
        'COL_POTSINSPCTLVL' => 'POTSINSPCTLVL',
        'PotsInspctLvl' => 'POTSINSPCTLVL',
        'po_tran_lot_det.PotsInspctLvl' => 'POTSINSPCTLVL',
        'Potslotref' => 'POTSLOTREF',
        'PurchaseOrderDetailLotReceiving.Potslotref' => 'POTSLOTREF',
        'potslotref' => 'POTSLOTREF',
        'purchaseOrderDetailLotReceiving.potslotref' => 'POTSLOTREF',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF' => 'POTSLOTREF',
        'COL_POTSLOTREF' => 'POTSLOTREF',
        'PotsLotRef' => 'POTSLOTREF',
        'po_tran_lot_det.PotsLotRef' => 'POTSLOTREF',
        'Potsputtake' => 'POTSPUTTAKE',
        'PurchaseOrderDetailLotReceiving.Potsputtake' => 'POTSPUTTAKE',
        'potsputtake' => 'POTSPUTTAKE',
        'purchaseOrderDetailLotReceiving.potsputtake' => 'POTSPUTTAKE',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE' => 'POTSPUTTAKE',
        'COL_POTSPUTTAKE' => 'POTSPUTTAKE',
        'PotsPutTake' => 'POTSPUTTAKE',
        'po_tran_lot_det.PotsPutTake' => 'POTSPUTTAKE',
        'Potslandunitcost' => 'POTSLANDUNITCOST',
        'PurchaseOrderDetailLotReceiving.Potslandunitcost' => 'POTSLANDUNITCOST',
        'potslandunitcost' => 'POTSLANDUNITCOST',
        'purchaseOrderDetailLotReceiving.potslandunitcost' => 'POTSLANDUNITCOST',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST' => 'POTSLANDUNITCOST',
        'COL_POTSLANDUNITCOST' => 'POTSLANDUNITCOST',
        'PotsLandUnitCost' => 'POTSLANDUNITCOST',
        'po_tran_lot_det.PotsLandUnitCost' => 'POTSLANDUNITCOST',
        'Potsfabcostvari' => 'POTSFABCOSTVARI',
        'PurchaseOrderDetailLotReceiving.Potsfabcostvari' => 'POTSFABCOSTVARI',
        'potsfabcostvari' => 'POTSFABCOSTVARI',
        'purchaseOrderDetailLotReceiving.potsfabcostvari' => 'POTSFABCOSTVARI',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI' => 'POTSFABCOSTVARI',
        'COL_POTSFABCOSTVARI' => 'POTSFABCOSTVARI',
        'PotsFabCostVari' => 'POTSFABCOSTVARI',
        'po_tran_lot_det.PotsFabCostVari' => 'POTSFABCOSTVARI',
        'Potserbatch' => 'POTSERBATCH',
        'PurchaseOrderDetailLotReceiving.Potserbatch' => 'POTSERBATCH',
        'potserbatch' => 'POTSERBATCH',
        'purchaseOrderDetailLotReceiving.potserbatch' => 'POTSERBATCH',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH' => 'POTSERBATCH',
        'COL_POTSERBATCH' => 'POTSERBATCH',
        'PotsErBatch' => 'POTSERBATCH',
        'po_tran_lot_det.PotsErBatch' => 'POTSERBATCH',
        'Potserbatchtime' => 'POTSERBATCHTIME',
        'PurchaseOrderDetailLotReceiving.Potserbatchtime' => 'POTSERBATCHTIME',
        'potserbatchtime' => 'POTSERBATCHTIME',
        'purchaseOrderDetailLotReceiving.potserbatchtime' => 'POTSERBATCHTIME',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME' => 'POTSERBATCHTIME',
        'COL_POTSERBATCHTIME' => 'POTSERBATCHTIME',
        'PotsErBatchTime' => 'POTSERBATCHTIME',
        'po_tran_lot_det.PotsErBatchTime' => 'POTSERBATCHTIME',
        'Potsexpiredatecd' => 'POTSEXPIREDATECD',
        'PurchaseOrderDetailLotReceiving.Potsexpiredatecd' => 'POTSEXPIREDATECD',
        'potsexpiredatecd' => 'POTSEXPIREDATECD',
        'purchaseOrderDetailLotReceiving.potsexpiredatecd' => 'POTSEXPIREDATECD',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD' => 'POTSEXPIREDATECD',
        'COL_POTSEXPIREDATECD' => 'POTSEXPIREDATECD',
        'PotsExpireDateCd' => 'POTSEXPIREDATECD',
        'po_tran_lot_det.PotsExpireDateCd' => 'POTSEXPIREDATECD',
        'Potsexpiredate' => 'POTSEXPIREDATE',
        'PurchaseOrderDetailLotReceiving.Potsexpiredate' => 'POTSEXPIREDATE',
        'potsexpiredate' => 'POTSEXPIREDATE',
        'purchaseOrderDetailLotReceiving.potsexpiredate' => 'POTSEXPIREDATE',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE' => 'POTSEXPIREDATE',
        'COL_POTSEXPIREDATE' => 'POTSEXPIREDATE',
        'PotsExpireDate' => 'POTSEXPIREDATE',
        'po_tran_lot_det.PotsExpireDate' => 'POTSEXPIREDATE',
        'Potstariffcost' => 'POTSTARIFFCOST',
        'PurchaseOrderDetailLotReceiving.Potstariffcost' => 'POTSTARIFFCOST',
        'potstariffcost' => 'POTSTARIFFCOST',
        'purchaseOrderDetailLotReceiving.potstariffcost' => 'POTSTARIFFCOST',
        'PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST' => 'POTSTARIFFCOST',
        'COL_POTSTARIFFCOST' => 'POTSTARIFFCOST',
        'PotsTariffCost' => 'POTSTARIFFCOST',
        'po_tran_lot_det.PotsTariffCost' => 'POTSTARIFFCOST',
        'Dateupdtd' => 'DATEUPDTD',
        'PurchaseOrderDetailLotReceiving.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'purchaseOrderDetailLotReceiving.dateupdtd' => 'DATEUPDTD',
        'PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'po_tran_lot_det.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'PurchaseOrderDetailLotReceiving.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'purchaseOrderDetailLotReceiving.timeupdtd' => 'TIMEUPDTD',
        'PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'po_tran_lot_det.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'PurchaseOrderDetailLotReceiving.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'purchaseOrderDetailLotReceiving.dummy' => 'DUMMY',
        'PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'po_tran_lot_det.dummy' => 'DUMMY',
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
        $this->setName('po_tran_lot_det');
        $this->setPhpName('PurchaseOrderDetailLotReceiving');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PurchaseOrderDetailLotReceiving');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'VARCHAR' , 'po_head', 'PohdNbr', true, 8, '');
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'VARCHAR' , 'po_tran_head', 'PothNbr', true, 8, '');
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'VARCHAR' , 'po_detail', 'PohdNbr', true, 8, '');
        $this->addForeignPrimaryKey('PotdLine', 'Potdline', 'INTEGER' , 'po_detail', 'PodtLine', true, 4, 0);
        $this->addPrimaryKey('PotdSeq', 'Potdseq', 'INTEGER', true, 4, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('PotsLotSer', 'Potslotser', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('PotsBin', 'Potsbin', 'VARCHAR', true, 8, '');
        $this->addColumn('PotsQtyRec', 'Potsqtyrec', 'DECIMAL', false, 20, null);
        $this->addColumn('PotsQtyAllo', 'Potsqtyallo', 'DECIMAL', false, 20, null);
        $this->addColumn('PotsCases', 'Potscases', 'INTEGER', false, 5, null);
        $this->addColumn('PotsTag', 'Potstag', 'INTEGER', false, 5, null);
        $this->addColumn('PotsInspctLvl', 'Potsinspctlvl', 'VARCHAR', false, 1, null);
        $this->addColumn('PotsLotRef', 'Potslotref', 'VARCHAR', false, 20, null);
        $this->addColumn('PotsPutTake', 'Potsputtake', 'VARCHAR', false, 1, null);
        $this->addColumn('PotsLandUnitCost', 'Potslandunitcost', 'DECIMAL', false, 20, null);
        $this->addColumn('PotsFabCostVari', 'Potsfabcostvari', 'DECIMAL', false, 20, null);
        $this->addColumn('PotsErBatch', 'Potserbatch', 'VARCHAR', false, 8, null);
        $this->addColumn('PotsErBatchTime', 'Potserbatchtime', 'VARCHAR', false, 8, null);
        $this->addColumn('PotsExpireDateCd', 'Potsexpiredatecd', 'VARCHAR', false, 1, null);
        $this->addColumn('PotsExpireDate', 'Potsexpiredate', 'VARCHAR', false, 8, null);
        $this->addColumn('PotsTariffCost', 'Potstariffcost', 'DECIMAL', false, 20, null);
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
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PohdNbr',
  ),
), null, null, null, false);
        $this->addRelation('PoReceivingHead', '\\PoReceivingHead', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PothNbr',
  ),
), null, null, null, false);
        $this->addRelation('PurchaseOrderDetail', '\\PurchaseOrderDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PohdNbr',
  ),
  1 =>
  array (
    0 => ':PotdLine',
    1 => ':PodtLine',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
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
     * @param \PurchaseOrderDetailLotReceiving $obj A \PurchaseOrderDetailLotReceiving object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(PurchaseOrderDetailLotReceiving $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPothnbr() || is_scalar($obj->getPothnbr()) || is_callable([$obj->getPothnbr(), '__toString']) ? (string) $obj->getPothnbr() : $obj->getPothnbr()), (null === $obj->getPotdline() || is_scalar($obj->getPotdline()) || is_callable([$obj->getPotdline(), '__toString']) ? (string) $obj->getPotdline() : $obj->getPotdline()), (null === $obj->getPotdseq() || is_scalar($obj->getPotdseq()) || is_callable([$obj->getPotdseq(), '__toString']) ? (string) $obj->getPotdseq() : $obj->getPotdseq()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getPotslotser() || is_scalar($obj->getPotslotser()) || is_callable([$obj->getPotslotser(), '__toString']) ? (string) $obj->getPotslotser() : $obj->getPotslotser()), (null === $obj->getPotsbin() || is_scalar($obj->getPotsbin()) || is_callable([$obj->getPotsbin(), '__toString']) ? (string) $obj->getPotsbin() : $obj->getPotsbin())]);
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
     * @param mixed $value A \PurchaseOrderDetailLotReceiving object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \PurchaseOrderDetailLotReceiving) {
                $key = serialize([(null === $value->getPothnbr() || is_scalar($value->getPothnbr()) || is_callable([$value->getPothnbr(), '__toString']) ? (string) $value->getPothnbr() : $value->getPothnbr()), (null === $value->getPotdline() || is_scalar($value->getPotdline()) || is_callable([$value->getPotdline(), '__toString']) ? (string) $value->getPotdline() : $value->getPotdline()), (null === $value->getPotdseq() || is_scalar($value->getPotdseq()) || is_callable([$value->getPotdseq(), '__toString']) ? (string) $value->getPotdseq() : $value->getPotdseq()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getPotslotser() || is_scalar($value->getPotslotser()) || is_callable([$value->getPotslotser(), '__toString']) ? (string) $value->getPotslotser() : $value->getPotslotser()), (null === $value->getPotsbin() || is_scalar($value->getPotsbin()) || is_callable([$value->getPotsbin(), '__toString']) ? (string) $value->getPotsbin() : $value->getPotsbin())]);

            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \PurchaseOrderDetailLotReceiving object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Potslotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Potsbin', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PurchaseOrderDetailLotReceivingTableMap::CLASS_DEFAULT : PurchaseOrderDetailLotReceivingTableMap::OM_CLASS;
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
     * @return array (PurchaseOrderDetailLotReceiving object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = PurchaseOrderDetailLotReceivingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PurchaseOrderDetailLotReceivingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PurchaseOrderDetailLotReceivingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PurchaseOrderDetailLotReceivingTableMap::OM_CLASS;
            /** @var PurchaseOrderDetailLotReceiving $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PurchaseOrderDetailLotReceivingTableMap::addInstanceToPool($obj, $key);
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
            $key = PurchaseOrderDetailLotReceivingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PurchaseOrderDetailLotReceivingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PurchaseOrderDetailLotReceiving $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PurchaseOrderDetailLotReceivingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PothNbr');
            $criteria->addSelectColumn($alias . '.PotdLine');
            $criteria->addSelectColumn($alias . '.PotdSeq');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.PotsLotSer');
            $criteria->addSelectColumn($alias . '.PotsBin');
            $criteria->addSelectColumn($alias . '.PotsQtyRec');
            $criteria->addSelectColumn($alias . '.PotsQtyAllo');
            $criteria->addSelectColumn($alias . '.PotsCases');
            $criteria->addSelectColumn($alias . '.PotsTag');
            $criteria->addSelectColumn($alias . '.PotsInspctLvl');
            $criteria->addSelectColumn($alias . '.PotsLotRef');
            $criteria->addSelectColumn($alias . '.PotsPutTake');
            $criteria->addSelectColumn($alias . '.PotsLandUnitCost');
            $criteria->addSelectColumn($alias . '.PotsFabCostVari');
            $criteria->addSelectColumn($alias . '.PotsErBatch');
            $criteria->addSelectColumn($alias . '.PotsErBatchTime');
            $criteria->addSelectColumn($alias . '.PotsExpireDateCd');
            $criteria->addSelectColumn($alias . '.PotsExpireDate');
            $criteria->addSelectColumn($alias . '.PotsTariffCost');
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
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.PothNbr');
            $criteria->removeSelectColumn($alias . '.PotdLine');
            $criteria->removeSelectColumn($alias . '.PotdSeq');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.PotsLotSer');
            $criteria->removeSelectColumn($alias . '.PotsBin');
            $criteria->removeSelectColumn($alias . '.PotsQtyRec');
            $criteria->removeSelectColumn($alias . '.PotsQtyAllo');
            $criteria->removeSelectColumn($alias . '.PotsCases');
            $criteria->removeSelectColumn($alias . '.PotsTag');
            $criteria->removeSelectColumn($alias . '.PotsInspctLvl');
            $criteria->removeSelectColumn($alias . '.PotsLotRef');
            $criteria->removeSelectColumn($alias . '.PotsPutTake');
            $criteria->removeSelectColumn($alias . '.PotsLandUnitCost');
            $criteria->removeSelectColumn($alias . '.PotsFabCostVari');
            $criteria->removeSelectColumn($alias . '.PotsErBatch');
            $criteria->removeSelectColumn($alias . '.PotsErBatchTime');
            $criteria->removeSelectColumn($alias . '.PotsExpireDateCd');
            $criteria->removeSelectColumn($alias . '.PotsExpireDate');
            $criteria->removeSelectColumn($alias . '.PotsTariffCost');
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
        return Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME)->getTable(PurchaseOrderDetailLotReceivingTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a PurchaseOrderDetailLotReceiving or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or PurchaseOrderDetailLotReceiving object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PurchaseOrderDetailLotReceiving) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $value[5]));
                $criteria->addOr($criterion);
            }
        }

        $query = PurchaseOrderDetailLotReceivingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PurchaseOrderDetailLotReceivingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PurchaseOrderDetailLotReceivingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_tran_lot_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return PurchaseOrderDetailLotReceivingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PurchaseOrderDetailLotReceiving or Criteria object.
     *
     * @param mixed $criteria Criteria or PurchaseOrderDetailLotReceiving object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PurchaseOrderDetailLotReceiving object
        }


        // Set the correct dbName
        $query = PurchaseOrderDetailLotReceivingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
