<?php

namespace Map;

use \InvTransferOrder;
use \InvTransferOrderQuery;
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
 * This class defines the structure of the 'inv_trans_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvTransferOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvTransferOrderTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_trans_head';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvTransferOrder';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvTransferOrder';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvTransferOrder';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 34;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 34;

    /**
     * the column name for the InhdNbr field
     */
    public const COL_INHDNBR = 'inv_trans_head.InhdNbr';

    /**
     * the column name for the InhdStat field
     */
    public const COL_INHDSTAT = 'inv_trans_head.InhdStat';

    /**
     * the column name for the IntbWhseFrom field
     */
    public const COL_INTBWHSEFROM = 'inv_trans_head.IntbWhseFrom';

    /**
     * the column name for the IntbWhseTo field
     */
    public const COL_INTBWHSETO = 'inv_trans_head.IntbWhseTo';

    /**
     * the column name for the ArtbShipVia field
     */
    public const COL_ARTBSHIPVIA = 'inv_trans_head.ArtbShipVia';

    /**
     * the column name for the InhdEntDate field
     */
    public const COL_INHDENTDATE = 'inv_trans_head.InhdEntDate';

    /**
     * the column name for the InhdRef field
     */
    public const COL_INHDREF = 'inv_trans_head.InhdRef';

    /**
     * the column name for the InhdPickDate field
     */
    public const COL_INHDPICKDATE = 'inv_trans_head.InhdPickDate';

    /**
     * the column name for the InhdPickTime field
     */
    public const COL_INHDPICKTIME = 'inv_trans_head.InhdPickTime';

    /**
     * the column name for the InhdTimesPick field
     */
    public const COL_INHDTIMESPICK = 'inv_trans_head.InhdTimesPick';

    /**
     * the column name for the InhdCrntUser field
     */
    public const COL_INHDCRNTUSER = 'inv_trans_head.InhdCrntUser';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'inv_trans_head.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    public const COL_ARSTSHIPID = 'inv_trans_head.ArstShipId';

    /**
     * the column name for the InhdDept field
     */
    public const COL_INHDDEPT = 'inv_trans_head.InhdDept';

    /**
     * the column name for the InhdPllt field
     */
    public const COL_INHDPLLT = 'inv_trans_head.InhdPllt';

    /**
     * the column name for the InhdCntrQty field
     */
    public const COL_INHDCNTRQTY = 'inv_trans_head.InhdCntrQty';

    /**
     * the column name for the InhdWghtTot field
     */
    public const COL_INHDWGHTTOT = 'inv_trans_head.InhdWghtTot';

    /**
     * the column name for the InhdTrackNbr field
     */
    public const COL_INHDTRACKNBR = 'inv_trans_head.InhdTrackNbr';

    /**
     * the column name for the InhdPickQueue field
     */
    public const COL_INHDPICKQUEUE = 'inv_trans_head.InhdPickQueue';

    /**
     * the column name for the InhdShipQueue field
     */
    public const COL_INHDSHIPQUEUE = 'inv_trans_head.InhdShipQueue';

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'inv_trans_head.ApveVendId';

    /**
     * the column name for the InhdFTVend field
     */
    public const COL_INHDFTVEND = 'inv_trans_head.InhdFTVend';

    /**
     * the column name for the InhdTranType field
     */
    public const COL_INHDTRANTYPE = 'inv_trans_head.InhdTranType';

    /**
     * the column name for the InhdFrtCost field
     */
    public const COL_INHDFRTCOST = 'inv_trans_head.InhdFrtCost';

    /**
     * the column name for the InhdPickCode field
     */
    public const COL_INHDPICKCODE = 'inv_trans_head.InhdPickCode';

    /**
     * the column name for the InhdPackCode field
     */
    public const COL_INHDPACKCODE = 'inv_trans_head.InhdPackCode';

    /**
     * the column name for the InhdHold field
     */
    public const COL_INHDHOLD = 'inv_trans_head.InhdHold';

    /**
     * the column name for the InhdLabel1PrtFmt field
     */
    public const COL_INHDLABEL1PRTFMT = 'inv_trans_head.InhdLabel1PrtFmt';

    /**
     * the column name for the InhdEnteredBy field
     */
    public const COL_INHDENTEREDBY = 'inv_trans_head.InhdEnteredBy';

    /**
     * the column name for the InhdEnteredDate field
     */
    public const COL_INHDENTEREDDATE = 'inv_trans_head.InhdEnteredDate';

    /**
     * the column name for the InhdEnteredTime field
     */
    public const COL_INHDENTEREDTIME = 'inv_trans_head.InhdEnteredTime';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_trans_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_trans_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_trans_head.dummy';

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
        self::TYPE_PHPNAME       => ['Inhdnbr', 'Inhdstat', 'Intbwhsefrom', 'Intbwhseto', 'Artbshipvia', 'Inhdentdate', 'Inhdref', 'Inhdpickdate', 'Inhdpicktime', 'Inhdtimespick', 'Inhdcrntuser', 'Arcucustid', 'Arstshipid', 'Inhddept', 'Inhdpllt', 'Inhdcntrqty', 'Inhdwghttot', 'Inhdtracknbr', 'Inhdpickqueue', 'Inhdshipqueue', 'Apvevendid', 'Inhdftvend', 'Inhdtrantype', 'Inhdfrtcost', 'Inhdpickcode', 'Inhdpackcode', 'Inhdhold', 'Inhdlabel1prtfmt', 'Inhdenteredby', 'Inhdentereddate', 'Inhdenteredtime', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inhdnbr', 'inhdstat', 'intbwhsefrom', 'intbwhseto', 'artbshipvia', 'inhdentdate', 'inhdref', 'inhdpickdate', 'inhdpicktime', 'inhdtimespick', 'inhdcrntuser', 'arcucustid', 'arstshipid', 'inhddept', 'inhdpllt', 'inhdcntrqty', 'inhdwghttot', 'inhdtracknbr', 'inhdpickqueue', 'inhdshipqueue', 'apvevendid', 'inhdftvend', 'inhdtrantype', 'inhdfrtcost', 'inhdpickcode', 'inhdpackcode', 'inhdhold', 'inhdlabel1prtfmt', 'inhdenteredby', 'inhdentereddate', 'inhdenteredtime', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvTransferOrderTableMap::COL_INHDNBR, InvTransferOrderTableMap::COL_INHDSTAT, InvTransferOrderTableMap::COL_INTBWHSEFROM, InvTransferOrderTableMap::COL_INTBWHSETO, InvTransferOrderTableMap::COL_ARTBSHIPVIA, InvTransferOrderTableMap::COL_INHDENTDATE, InvTransferOrderTableMap::COL_INHDREF, InvTransferOrderTableMap::COL_INHDPICKDATE, InvTransferOrderTableMap::COL_INHDPICKTIME, InvTransferOrderTableMap::COL_INHDTIMESPICK, InvTransferOrderTableMap::COL_INHDCRNTUSER, InvTransferOrderTableMap::COL_ARCUCUSTID, InvTransferOrderTableMap::COL_ARSTSHIPID, InvTransferOrderTableMap::COL_INHDDEPT, InvTransferOrderTableMap::COL_INHDPLLT, InvTransferOrderTableMap::COL_INHDCNTRQTY, InvTransferOrderTableMap::COL_INHDWGHTTOT, InvTransferOrderTableMap::COL_INHDTRACKNBR, InvTransferOrderTableMap::COL_INHDPICKQUEUE, InvTransferOrderTableMap::COL_INHDSHIPQUEUE, InvTransferOrderTableMap::COL_APVEVENDID, InvTransferOrderTableMap::COL_INHDFTVEND, InvTransferOrderTableMap::COL_INHDTRANTYPE, InvTransferOrderTableMap::COL_INHDFRTCOST, InvTransferOrderTableMap::COL_INHDPICKCODE, InvTransferOrderTableMap::COL_INHDPACKCODE, InvTransferOrderTableMap::COL_INHDHOLD, InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT, InvTransferOrderTableMap::COL_INHDENTEREDBY, InvTransferOrderTableMap::COL_INHDENTEREDDATE, InvTransferOrderTableMap::COL_INHDENTEREDTIME, InvTransferOrderTableMap::COL_DATEUPDTD, InvTransferOrderTableMap::COL_TIMEUPDTD, InvTransferOrderTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InhdNbr', 'InhdStat', 'IntbWhseFrom', 'IntbWhseTo', 'ArtbShipVia', 'InhdEntDate', 'InhdRef', 'InhdPickDate', 'InhdPickTime', 'InhdTimesPick', 'InhdCrntUser', 'ArcuCustId', 'ArstShipId', 'InhdDept', 'InhdPllt', 'InhdCntrQty', 'InhdWghtTot', 'InhdTrackNbr', 'InhdPickQueue', 'InhdShipQueue', 'ApveVendId', 'InhdFTVend', 'InhdTranType', 'InhdFrtCost', 'InhdPickCode', 'InhdPackCode', 'InhdHold', 'InhdLabel1PrtFmt', 'InhdEnteredBy', 'InhdEnteredDate', 'InhdEnteredTime', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, ]
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
        self::TYPE_PHPNAME       => ['Inhdnbr' => 0, 'Inhdstat' => 1, 'Intbwhsefrom' => 2, 'Intbwhseto' => 3, 'Artbshipvia' => 4, 'Inhdentdate' => 5, 'Inhdref' => 6, 'Inhdpickdate' => 7, 'Inhdpicktime' => 8, 'Inhdtimespick' => 9, 'Inhdcrntuser' => 10, 'Arcucustid' => 11, 'Arstshipid' => 12, 'Inhddept' => 13, 'Inhdpllt' => 14, 'Inhdcntrqty' => 15, 'Inhdwghttot' => 16, 'Inhdtracknbr' => 17, 'Inhdpickqueue' => 18, 'Inhdshipqueue' => 19, 'Apvevendid' => 20, 'Inhdftvend' => 21, 'Inhdtrantype' => 22, 'Inhdfrtcost' => 23, 'Inhdpickcode' => 24, 'Inhdpackcode' => 25, 'Inhdhold' => 26, 'Inhdlabel1prtfmt' => 27, 'Inhdenteredby' => 28, 'Inhdentereddate' => 29, 'Inhdenteredtime' => 30, 'Dateupdtd' => 31, 'Timeupdtd' => 32, 'Dummy' => 33, ],
        self::TYPE_CAMELNAME     => ['inhdnbr' => 0, 'inhdstat' => 1, 'intbwhsefrom' => 2, 'intbwhseto' => 3, 'artbshipvia' => 4, 'inhdentdate' => 5, 'inhdref' => 6, 'inhdpickdate' => 7, 'inhdpicktime' => 8, 'inhdtimespick' => 9, 'inhdcrntuser' => 10, 'arcucustid' => 11, 'arstshipid' => 12, 'inhddept' => 13, 'inhdpllt' => 14, 'inhdcntrqty' => 15, 'inhdwghttot' => 16, 'inhdtracknbr' => 17, 'inhdpickqueue' => 18, 'inhdshipqueue' => 19, 'apvevendid' => 20, 'inhdftvend' => 21, 'inhdtrantype' => 22, 'inhdfrtcost' => 23, 'inhdpickcode' => 24, 'inhdpackcode' => 25, 'inhdhold' => 26, 'inhdlabel1prtfmt' => 27, 'inhdenteredby' => 28, 'inhdentereddate' => 29, 'inhdenteredtime' => 30, 'dateupdtd' => 31, 'timeupdtd' => 32, 'dummy' => 33, ],
        self::TYPE_COLNAME       => [InvTransferOrderTableMap::COL_INHDNBR => 0, InvTransferOrderTableMap::COL_INHDSTAT => 1, InvTransferOrderTableMap::COL_INTBWHSEFROM => 2, InvTransferOrderTableMap::COL_INTBWHSETO => 3, InvTransferOrderTableMap::COL_ARTBSHIPVIA => 4, InvTransferOrderTableMap::COL_INHDENTDATE => 5, InvTransferOrderTableMap::COL_INHDREF => 6, InvTransferOrderTableMap::COL_INHDPICKDATE => 7, InvTransferOrderTableMap::COL_INHDPICKTIME => 8, InvTransferOrderTableMap::COL_INHDTIMESPICK => 9, InvTransferOrderTableMap::COL_INHDCRNTUSER => 10, InvTransferOrderTableMap::COL_ARCUCUSTID => 11, InvTransferOrderTableMap::COL_ARSTSHIPID => 12, InvTransferOrderTableMap::COL_INHDDEPT => 13, InvTransferOrderTableMap::COL_INHDPLLT => 14, InvTransferOrderTableMap::COL_INHDCNTRQTY => 15, InvTransferOrderTableMap::COL_INHDWGHTTOT => 16, InvTransferOrderTableMap::COL_INHDTRACKNBR => 17, InvTransferOrderTableMap::COL_INHDPICKQUEUE => 18, InvTransferOrderTableMap::COL_INHDSHIPQUEUE => 19, InvTransferOrderTableMap::COL_APVEVENDID => 20, InvTransferOrderTableMap::COL_INHDFTVEND => 21, InvTransferOrderTableMap::COL_INHDTRANTYPE => 22, InvTransferOrderTableMap::COL_INHDFRTCOST => 23, InvTransferOrderTableMap::COL_INHDPICKCODE => 24, InvTransferOrderTableMap::COL_INHDPACKCODE => 25, InvTransferOrderTableMap::COL_INHDHOLD => 26, InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT => 27, InvTransferOrderTableMap::COL_INHDENTEREDBY => 28, InvTransferOrderTableMap::COL_INHDENTEREDDATE => 29, InvTransferOrderTableMap::COL_INHDENTEREDTIME => 30, InvTransferOrderTableMap::COL_DATEUPDTD => 31, InvTransferOrderTableMap::COL_TIMEUPDTD => 32, InvTransferOrderTableMap::COL_DUMMY => 33, ],
        self::TYPE_FIELDNAME     => ['InhdNbr' => 0, 'InhdStat' => 1, 'IntbWhseFrom' => 2, 'IntbWhseTo' => 3, 'ArtbShipVia' => 4, 'InhdEntDate' => 5, 'InhdRef' => 6, 'InhdPickDate' => 7, 'InhdPickTime' => 8, 'InhdTimesPick' => 9, 'InhdCrntUser' => 10, 'ArcuCustId' => 11, 'ArstShipId' => 12, 'InhdDept' => 13, 'InhdPllt' => 14, 'InhdCntrQty' => 15, 'InhdWghtTot' => 16, 'InhdTrackNbr' => 17, 'InhdPickQueue' => 18, 'InhdShipQueue' => 19, 'ApveVendId' => 20, 'InhdFTVend' => 21, 'InhdTranType' => 22, 'InhdFrtCost' => 23, 'InhdPickCode' => 24, 'InhdPackCode' => 25, 'InhdHold' => 26, 'InhdLabel1PrtFmt' => 27, 'InhdEnteredBy' => 28, 'InhdEnteredDate' => 29, 'InhdEnteredTime' => 30, 'DateUpdtd' => 31, 'TimeUpdtd' => 32, 'dummy' => 33, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inhdnbr' => 'INHDNBR',
        'InvTransferOrder.Inhdnbr' => 'INHDNBR',
        'inhdnbr' => 'INHDNBR',
        'invTransferOrder.inhdnbr' => 'INHDNBR',
        'InvTransferOrderTableMap::COL_INHDNBR' => 'INHDNBR',
        'COL_INHDNBR' => 'INHDNBR',
        'InhdNbr' => 'INHDNBR',
        'inv_trans_head.InhdNbr' => 'INHDNBR',
        'Inhdstat' => 'INHDSTAT',
        'InvTransferOrder.Inhdstat' => 'INHDSTAT',
        'inhdstat' => 'INHDSTAT',
        'invTransferOrder.inhdstat' => 'INHDSTAT',
        'InvTransferOrderTableMap::COL_INHDSTAT' => 'INHDSTAT',
        'COL_INHDSTAT' => 'INHDSTAT',
        'InhdStat' => 'INHDSTAT',
        'inv_trans_head.InhdStat' => 'INHDSTAT',
        'Intbwhsefrom' => 'INTBWHSEFROM',
        'InvTransferOrder.Intbwhsefrom' => 'INTBWHSEFROM',
        'intbwhsefrom' => 'INTBWHSEFROM',
        'invTransferOrder.intbwhsefrom' => 'INTBWHSEFROM',
        'InvTransferOrderTableMap::COL_INTBWHSEFROM' => 'INTBWHSEFROM',
        'COL_INTBWHSEFROM' => 'INTBWHSEFROM',
        'IntbWhseFrom' => 'INTBWHSEFROM',
        'inv_trans_head.IntbWhseFrom' => 'INTBWHSEFROM',
        'Intbwhseto' => 'INTBWHSETO',
        'InvTransferOrder.Intbwhseto' => 'INTBWHSETO',
        'intbwhseto' => 'INTBWHSETO',
        'invTransferOrder.intbwhseto' => 'INTBWHSETO',
        'InvTransferOrderTableMap::COL_INTBWHSETO' => 'INTBWHSETO',
        'COL_INTBWHSETO' => 'INTBWHSETO',
        'IntbWhseTo' => 'INTBWHSETO',
        'inv_trans_head.IntbWhseTo' => 'INTBWHSETO',
        'Artbshipvia' => 'ARTBSHIPVIA',
        'InvTransferOrder.Artbshipvia' => 'ARTBSHIPVIA',
        'artbshipvia' => 'ARTBSHIPVIA',
        'invTransferOrder.artbshipvia' => 'ARTBSHIPVIA',
        'InvTransferOrderTableMap::COL_ARTBSHIPVIA' => 'ARTBSHIPVIA',
        'COL_ARTBSHIPVIA' => 'ARTBSHIPVIA',
        'ArtbShipVia' => 'ARTBSHIPVIA',
        'inv_trans_head.ArtbShipVia' => 'ARTBSHIPVIA',
        'Inhdentdate' => 'INHDENTDATE',
        'InvTransferOrder.Inhdentdate' => 'INHDENTDATE',
        'inhdentdate' => 'INHDENTDATE',
        'invTransferOrder.inhdentdate' => 'INHDENTDATE',
        'InvTransferOrderTableMap::COL_INHDENTDATE' => 'INHDENTDATE',
        'COL_INHDENTDATE' => 'INHDENTDATE',
        'InhdEntDate' => 'INHDENTDATE',
        'inv_trans_head.InhdEntDate' => 'INHDENTDATE',
        'Inhdref' => 'INHDREF',
        'InvTransferOrder.Inhdref' => 'INHDREF',
        'inhdref' => 'INHDREF',
        'invTransferOrder.inhdref' => 'INHDREF',
        'InvTransferOrderTableMap::COL_INHDREF' => 'INHDREF',
        'COL_INHDREF' => 'INHDREF',
        'InhdRef' => 'INHDREF',
        'inv_trans_head.InhdRef' => 'INHDREF',
        'Inhdpickdate' => 'INHDPICKDATE',
        'InvTransferOrder.Inhdpickdate' => 'INHDPICKDATE',
        'inhdpickdate' => 'INHDPICKDATE',
        'invTransferOrder.inhdpickdate' => 'INHDPICKDATE',
        'InvTransferOrderTableMap::COL_INHDPICKDATE' => 'INHDPICKDATE',
        'COL_INHDPICKDATE' => 'INHDPICKDATE',
        'InhdPickDate' => 'INHDPICKDATE',
        'inv_trans_head.InhdPickDate' => 'INHDPICKDATE',
        'Inhdpicktime' => 'INHDPICKTIME',
        'InvTransferOrder.Inhdpicktime' => 'INHDPICKTIME',
        'inhdpicktime' => 'INHDPICKTIME',
        'invTransferOrder.inhdpicktime' => 'INHDPICKTIME',
        'InvTransferOrderTableMap::COL_INHDPICKTIME' => 'INHDPICKTIME',
        'COL_INHDPICKTIME' => 'INHDPICKTIME',
        'InhdPickTime' => 'INHDPICKTIME',
        'inv_trans_head.InhdPickTime' => 'INHDPICKTIME',
        'Inhdtimespick' => 'INHDTIMESPICK',
        'InvTransferOrder.Inhdtimespick' => 'INHDTIMESPICK',
        'inhdtimespick' => 'INHDTIMESPICK',
        'invTransferOrder.inhdtimespick' => 'INHDTIMESPICK',
        'InvTransferOrderTableMap::COL_INHDTIMESPICK' => 'INHDTIMESPICK',
        'COL_INHDTIMESPICK' => 'INHDTIMESPICK',
        'InhdTimesPick' => 'INHDTIMESPICK',
        'inv_trans_head.InhdTimesPick' => 'INHDTIMESPICK',
        'Inhdcrntuser' => 'INHDCRNTUSER',
        'InvTransferOrder.Inhdcrntuser' => 'INHDCRNTUSER',
        'inhdcrntuser' => 'INHDCRNTUSER',
        'invTransferOrder.inhdcrntuser' => 'INHDCRNTUSER',
        'InvTransferOrderTableMap::COL_INHDCRNTUSER' => 'INHDCRNTUSER',
        'COL_INHDCRNTUSER' => 'INHDCRNTUSER',
        'InhdCrntUser' => 'INHDCRNTUSER',
        'inv_trans_head.InhdCrntUser' => 'INHDCRNTUSER',
        'Arcucustid' => 'ARCUCUSTID',
        'InvTransferOrder.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'invTransferOrder.arcucustid' => 'ARCUCUSTID',
        'InvTransferOrderTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'inv_trans_head.ArcuCustId' => 'ARCUCUSTID',
        'Arstshipid' => 'ARSTSHIPID',
        'InvTransferOrder.Arstshipid' => 'ARSTSHIPID',
        'arstshipid' => 'ARSTSHIPID',
        'invTransferOrder.arstshipid' => 'ARSTSHIPID',
        'InvTransferOrderTableMap::COL_ARSTSHIPID' => 'ARSTSHIPID',
        'COL_ARSTSHIPID' => 'ARSTSHIPID',
        'ArstShipId' => 'ARSTSHIPID',
        'inv_trans_head.ArstShipId' => 'ARSTSHIPID',
        'Inhddept' => 'INHDDEPT',
        'InvTransferOrder.Inhddept' => 'INHDDEPT',
        'inhddept' => 'INHDDEPT',
        'invTransferOrder.inhddept' => 'INHDDEPT',
        'InvTransferOrderTableMap::COL_INHDDEPT' => 'INHDDEPT',
        'COL_INHDDEPT' => 'INHDDEPT',
        'InhdDept' => 'INHDDEPT',
        'inv_trans_head.InhdDept' => 'INHDDEPT',
        'Inhdpllt' => 'INHDPLLT',
        'InvTransferOrder.Inhdpllt' => 'INHDPLLT',
        'inhdpllt' => 'INHDPLLT',
        'invTransferOrder.inhdpllt' => 'INHDPLLT',
        'InvTransferOrderTableMap::COL_INHDPLLT' => 'INHDPLLT',
        'COL_INHDPLLT' => 'INHDPLLT',
        'InhdPllt' => 'INHDPLLT',
        'inv_trans_head.InhdPllt' => 'INHDPLLT',
        'Inhdcntrqty' => 'INHDCNTRQTY',
        'InvTransferOrder.Inhdcntrqty' => 'INHDCNTRQTY',
        'inhdcntrqty' => 'INHDCNTRQTY',
        'invTransferOrder.inhdcntrqty' => 'INHDCNTRQTY',
        'InvTransferOrderTableMap::COL_INHDCNTRQTY' => 'INHDCNTRQTY',
        'COL_INHDCNTRQTY' => 'INHDCNTRQTY',
        'InhdCntrQty' => 'INHDCNTRQTY',
        'inv_trans_head.InhdCntrQty' => 'INHDCNTRQTY',
        'Inhdwghttot' => 'INHDWGHTTOT',
        'InvTransferOrder.Inhdwghttot' => 'INHDWGHTTOT',
        'inhdwghttot' => 'INHDWGHTTOT',
        'invTransferOrder.inhdwghttot' => 'INHDWGHTTOT',
        'InvTransferOrderTableMap::COL_INHDWGHTTOT' => 'INHDWGHTTOT',
        'COL_INHDWGHTTOT' => 'INHDWGHTTOT',
        'InhdWghtTot' => 'INHDWGHTTOT',
        'inv_trans_head.InhdWghtTot' => 'INHDWGHTTOT',
        'Inhdtracknbr' => 'INHDTRACKNBR',
        'InvTransferOrder.Inhdtracknbr' => 'INHDTRACKNBR',
        'inhdtracknbr' => 'INHDTRACKNBR',
        'invTransferOrder.inhdtracknbr' => 'INHDTRACKNBR',
        'InvTransferOrderTableMap::COL_INHDTRACKNBR' => 'INHDTRACKNBR',
        'COL_INHDTRACKNBR' => 'INHDTRACKNBR',
        'InhdTrackNbr' => 'INHDTRACKNBR',
        'inv_trans_head.InhdTrackNbr' => 'INHDTRACKNBR',
        'Inhdpickqueue' => 'INHDPICKQUEUE',
        'InvTransferOrder.Inhdpickqueue' => 'INHDPICKQUEUE',
        'inhdpickqueue' => 'INHDPICKQUEUE',
        'invTransferOrder.inhdpickqueue' => 'INHDPICKQUEUE',
        'InvTransferOrderTableMap::COL_INHDPICKQUEUE' => 'INHDPICKQUEUE',
        'COL_INHDPICKQUEUE' => 'INHDPICKQUEUE',
        'InhdPickQueue' => 'INHDPICKQUEUE',
        'inv_trans_head.InhdPickQueue' => 'INHDPICKQUEUE',
        'Inhdshipqueue' => 'INHDSHIPQUEUE',
        'InvTransferOrder.Inhdshipqueue' => 'INHDSHIPQUEUE',
        'inhdshipqueue' => 'INHDSHIPQUEUE',
        'invTransferOrder.inhdshipqueue' => 'INHDSHIPQUEUE',
        'InvTransferOrderTableMap::COL_INHDSHIPQUEUE' => 'INHDSHIPQUEUE',
        'COL_INHDSHIPQUEUE' => 'INHDSHIPQUEUE',
        'InhdShipQueue' => 'INHDSHIPQUEUE',
        'inv_trans_head.InhdShipQueue' => 'INHDSHIPQUEUE',
        'Apvevendid' => 'APVEVENDID',
        'InvTransferOrder.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'invTransferOrder.apvevendid' => 'APVEVENDID',
        'InvTransferOrderTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'inv_trans_head.ApveVendId' => 'APVEVENDID',
        'Inhdftvend' => 'INHDFTVEND',
        'InvTransferOrder.Inhdftvend' => 'INHDFTVEND',
        'inhdftvend' => 'INHDFTVEND',
        'invTransferOrder.inhdftvend' => 'INHDFTVEND',
        'InvTransferOrderTableMap::COL_INHDFTVEND' => 'INHDFTVEND',
        'COL_INHDFTVEND' => 'INHDFTVEND',
        'InhdFTVend' => 'INHDFTVEND',
        'inv_trans_head.InhdFTVend' => 'INHDFTVEND',
        'Inhdtrantype' => 'INHDTRANTYPE',
        'InvTransferOrder.Inhdtrantype' => 'INHDTRANTYPE',
        'inhdtrantype' => 'INHDTRANTYPE',
        'invTransferOrder.inhdtrantype' => 'INHDTRANTYPE',
        'InvTransferOrderTableMap::COL_INHDTRANTYPE' => 'INHDTRANTYPE',
        'COL_INHDTRANTYPE' => 'INHDTRANTYPE',
        'InhdTranType' => 'INHDTRANTYPE',
        'inv_trans_head.InhdTranType' => 'INHDTRANTYPE',
        'Inhdfrtcost' => 'INHDFRTCOST',
        'InvTransferOrder.Inhdfrtcost' => 'INHDFRTCOST',
        'inhdfrtcost' => 'INHDFRTCOST',
        'invTransferOrder.inhdfrtcost' => 'INHDFRTCOST',
        'InvTransferOrderTableMap::COL_INHDFRTCOST' => 'INHDFRTCOST',
        'COL_INHDFRTCOST' => 'INHDFRTCOST',
        'InhdFrtCost' => 'INHDFRTCOST',
        'inv_trans_head.InhdFrtCost' => 'INHDFRTCOST',
        'Inhdpickcode' => 'INHDPICKCODE',
        'InvTransferOrder.Inhdpickcode' => 'INHDPICKCODE',
        'inhdpickcode' => 'INHDPICKCODE',
        'invTransferOrder.inhdpickcode' => 'INHDPICKCODE',
        'InvTransferOrderTableMap::COL_INHDPICKCODE' => 'INHDPICKCODE',
        'COL_INHDPICKCODE' => 'INHDPICKCODE',
        'InhdPickCode' => 'INHDPICKCODE',
        'inv_trans_head.InhdPickCode' => 'INHDPICKCODE',
        'Inhdpackcode' => 'INHDPACKCODE',
        'InvTransferOrder.Inhdpackcode' => 'INHDPACKCODE',
        'inhdpackcode' => 'INHDPACKCODE',
        'invTransferOrder.inhdpackcode' => 'INHDPACKCODE',
        'InvTransferOrderTableMap::COL_INHDPACKCODE' => 'INHDPACKCODE',
        'COL_INHDPACKCODE' => 'INHDPACKCODE',
        'InhdPackCode' => 'INHDPACKCODE',
        'inv_trans_head.InhdPackCode' => 'INHDPACKCODE',
        'Inhdhold' => 'INHDHOLD',
        'InvTransferOrder.Inhdhold' => 'INHDHOLD',
        'inhdhold' => 'INHDHOLD',
        'invTransferOrder.inhdhold' => 'INHDHOLD',
        'InvTransferOrderTableMap::COL_INHDHOLD' => 'INHDHOLD',
        'COL_INHDHOLD' => 'INHDHOLD',
        'InhdHold' => 'INHDHOLD',
        'inv_trans_head.InhdHold' => 'INHDHOLD',
        'Inhdlabel1prtfmt' => 'INHDLABEL1PRTFMT',
        'InvTransferOrder.Inhdlabel1prtfmt' => 'INHDLABEL1PRTFMT',
        'inhdlabel1prtfmt' => 'INHDLABEL1PRTFMT',
        'invTransferOrder.inhdlabel1prtfmt' => 'INHDLABEL1PRTFMT',
        'InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT' => 'INHDLABEL1PRTFMT',
        'COL_INHDLABEL1PRTFMT' => 'INHDLABEL1PRTFMT',
        'InhdLabel1PrtFmt' => 'INHDLABEL1PRTFMT',
        'inv_trans_head.InhdLabel1PrtFmt' => 'INHDLABEL1PRTFMT',
        'Inhdenteredby' => 'INHDENTEREDBY',
        'InvTransferOrder.Inhdenteredby' => 'INHDENTEREDBY',
        'inhdenteredby' => 'INHDENTEREDBY',
        'invTransferOrder.inhdenteredby' => 'INHDENTEREDBY',
        'InvTransferOrderTableMap::COL_INHDENTEREDBY' => 'INHDENTEREDBY',
        'COL_INHDENTEREDBY' => 'INHDENTEREDBY',
        'InhdEnteredBy' => 'INHDENTEREDBY',
        'inv_trans_head.InhdEnteredBy' => 'INHDENTEREDBY',
        'Inhdentereddate' => 'INHDENTEREDDATE',
        'InvTransferOrder.Inhdentereddate' => 'INHDENTEREDDATE',
        'inhdentereddate' => 'INHDENTEREDDATE',
        'invTransferOrder.inhdentereddate' => 'INHDENTEREDDATE',
        'InvTransferOrderTableMap::COL_INHDENTEREDDATE' => 'INHDENTEREDDATE',
        'COL_INHDENTEREDDATE' => 'INHDENTEREDDATE',
        'InhdEnteredDate' => 'INHDENTEREDDATE',
        'inv_trans_head.InhdEnteredDate' => 'INHDENTEREDDATE',
        'Inhdenteredtime' => 'INHDENTEREDTIME',
        'InvTransferOrder.Inhdenteredtime' => 'INHDENTEREDTIME',
        'inhdenteredtime' => 'INHDENTEREDTIME',
        'invTransferOrder.inhdenteredtime' => 'INHDENTEREDTIME',
        'InvTransferOrderTableMap::COL_INHDENTEREDTIME' => 'INHDENTEREDTIME',
        'COL_INHDENTEREDTIME' => 'INHDENTEREDTIME',
        'InhdEnteredTime' => 'INHDENTEREDTIME',
        'inv_trans_head.InhdEnteredTime' => 'INHDENTEREDTIME',
        'Dateupdtd' => 'DATEUPDTD',
        'InvTransferOrder.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invTransferOrder.dateupdtd' => 'DATEUPDTD',
        'InvTransferOrderTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_trans_head.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvTransferOrder.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invTransferOrder.timeupdtd' => 'TIMEUPDTD',
        'InvTransferOrderTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_trans_head.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvTransferOrder.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invTransferOrder.dummy' => 'DUMMY',
        'InvTransferOrderTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_trans_head.dummy' => 'DUMMY',
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
        $this->setName('inv_trans_head');
        $this->setPhpName('InvTransferOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvTransferOrder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('InhdStat', 'Inhdstat', 'CHAR', true, null, 'S');
        $this->addForeignKey('IntbWhseFrom', 'Intbwhsefrom', 'VARCHAR', 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addForeignKey('IntbWhseTo', 'Intbwhseto', 'VARCHAR', 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', true, 4, '');
        $this->addColumn('InhdEntDate', 'Inhdentdate', 'CHAR', true, 8, '');
        $this->addColumn('InhdRef', 'Inhdref', 'VARCHAR', true, 20, '');
        $this->addColumn('InhdPickDate', 'Inhdpickdate', 'CHAR', true, 8, '');
        $this->addColumn('InhdPickTime', 'Inhdpicktime', 'CHAR', true, 8, '');
        $this->addColumn('InhdTimesPick', 'Inhdtimespick', 'INTEGER', true, 4, 0);
        $this->addColumn('InhdCrntUser', 'Inhdcrntuser', 'VARCHAR', true, 12, '');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArstShipId', 'Arstshipid', 'VARCHAR', 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addColumn('InhdDept', 'Inhddept', 'VARCHAR', true, 8, '');
        $this->addColumn('InhdPllt', 'Inhdpllt', 'VARCHAR', true, 20, '');
        $this->addColumn('InhdCntrQty', 'Inhdcntrqty', 'INTEGER', true, 5, 0);
        $this->addColumn('InhdWghtTot', 'Inhdwghttot', 'INTEGER', true, 8, 0);
        $this->addColumn('InhdTrackNbr', 'Inhdtracknbr', 'VARCHAR', true, 30, '');
        $this->addColumn('InhdPickQueue', 'Inhdpickqueue', 'CHAR', true, null, 'N');
        $this->addColumn('InhdShipQueue', 'Inhdshipqueue', 'CHAR', true, null, 'N');
        $this->addForeignKey('ApveVendId', 'Apvevendid', 'VARCHAR', 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addColumn('InhdFTVend', 'Inhdftvend', 'CHAR', true, null, '');
        $this->addColumn('InhdTranType', 'Inhdtrantype', 'CHAR', true, null, 'S');
        $this->addColumn('InhdFrtCost', 'Inhdfrtcost', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('InhdPickCode', 'Inhdpickcode', 'VARCHAR', true, 8, '');
        $this->addColumn('InhdPackCode', 'Inhdpackcode', 'VARCHAR', true, 8, '');
        $this->addColumn('InhdHold', 'Inhdhold', 'CHAR', true, null, 'N');
        $this->addColumn('InhdLabel1PrtFmt', 'Inhdlabel1prtfmt', 'VARCHAR', true, 8, '');
        $this->addColumn('InhdEnteredBy', 'Inhdenteredby', 'VARCHAR', true, 8, '');
        $this->addColumn('InhdEnteredDate', 'Inhdentereddate', 'CHAR', true, 8, '');
        $this->addColumn('InhdEnteredTime', 'Inhdenteredtime', 'CHAR', true, 8, '');
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
        $this->addRelation('WarehouseRelatedByIntbwhsefrom', '\\Warehouse', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbWhseFrom',
    1 => ':IntbWhse',
  ),
), null, null, null, false);
        $this->addRelation('WarehouseRelatedByIntbwhseto', '\\Warehouse', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbWhseTo',
    1 => ':IntbWhse',
  ),
), null, null, null, false);
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('CustomerShipto', '\\CustomerShipto', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
  1 =>
  array (
    0 => ':ArstShipId',
    1 => ':ArstShipId',
  ),
), null, null, null, false);
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
        $this->addRelation('InvTransferDetail', '\\InvTransferDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, 'InvTransferDetails', false);
        $this->addRelation('InvTransferLotserial', '\\InvTransferLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, 'InvTransferLotserials', false);
        $this->addRelation('InvTransferPreAllocatedLotserial', '\\InvTransferPreAllocatedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, 'InvTransferPreAllocatedLotserials', false);
        $this->addRelation('InvTransferPickedLotserial', '\\InvTransferPickedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, 'InvTransferPickedLotserials', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvTransferOrderTableMap::CLASS_DEFAULT : InvTransferOrderTableMap::OM_CLASS;
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
     * @return array (InvTransferOrder object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvTransferOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvTransferOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvTransferOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvTransferOrderTableMap::OM_CLASS;
            /** @var InvTransferOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvTransferOrderTableMap::addInstanceToPool($obj, $key);
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
            $key = InvTransferOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvTransferOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvTransferOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvTransferOrderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDNBR);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDSTAT);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INTBWHSEFROM);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INTBWHSETO);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDENTDATE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDREF);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDPICKDATE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDPICKTIME);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDTIMESPICK);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDCRNTUSER);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDDEPT);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDPLLT);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDCNTRQTY);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDWGHTTOT);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDTRACKNBR);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDPICKQUEUE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDSHIPQUEUE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDFTVEND);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDTRANTYPE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDFRTCOST);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDPICKCODE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDPACKCODE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDHOLD);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDENTEREDBY);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDENTEREDDATE);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_INHDENTEREDTIME);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvTransferOrderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InhdNbr');
            $criteria->addSelectColumn($alias . '.InhdStat');
            $criteria->addSelectColumn($alias . '.IntbWhseFrom');
            $criteria->addSelectColumn($alias . '.IntbWhseTo');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.InhdEntDate');
            $criteria->addSelectColumn($alias . '.InhdRef');
            $criteria->addSelectColumn($alias . '.InhdPickDate');
            $criteria->addSelectColumn($alias . '.InhdPickTime');
            $criteria->addSelectColumn($alias . '.InhdTimesPick');
            $criteria->addSelectColumn($alias . '.InhdCrntUser');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.InhdDept');
            $criteria->addSelectColumn($alias . '.InhdPllt');
            $criteria->addSelectColumn($alias . '.InhdCntrQty');
            $criteria->addSelectColumn($alias . '.InhdWghtTot');
            $criteria->addSelectColumn($alias . '.InhdTrackNbr');
            $criteria->addSelectColumn($alias . '.InhdPickQueue');
            $criteria->addSelectColumn($alias . '.InhdShipQueue');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.InhdFTVend');
            $criteria->addSelectColumn($alias . '.InhdTranType');
            $criteria->addSelectColumn($alias . '.InhdFrtCost');
            $criteria->addSelectColumn($alias . '.InhdPickCode');
            $criteria->addSelectColumn($alias . '.InhdPackCode');
            $criteria->addSelectColumn($alias . '.InhdHold');
            $criteria->addSelectColumn($alias . '.InhdLabel1PrtFmt');
            $criteria->addSelectColumn($alias . '.InhdEnteredBy');
            $criteria->addSelectColumn($alias . '.InhdEnteredDate');
            $criteria->addSelectColumn($alias . '.InhdEnteredTime');
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
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDNBR);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDSTAT);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INTBWHSEFROM);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INTBWHSETO);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_ARTBSHIPVIA);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDENTDATE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDREF);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDPICKDATE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDPICKTIME);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDTIMESPICK);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDCRNTUSER);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_ARSTSHIPID);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDDEPT);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDPLLT);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDCNTRQTY);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDWGHTTOT);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDTRACKNBR);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDPICKQUEUE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDSHIPQUEUE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDFTVEND);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDTRANTYPE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDFRTCOST);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDPICKCODE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDPACKCODE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDHOLD);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDENTEREDBY);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDENTEREDDATE);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_INHDENTEREDTIME);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvTransferOrderTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InhdNbr');
            $criteria->removeSelectColumn($alias . '.InhdStat');
            $criteria->removeSelectColumn($alias . '.IntbWhseFrom');
            $criteria->removeSelectColumn($alias . '.IntbWhseTo');
            $criteria->removeSelectColumn($alias . '.ArtbShipVia');
            $criteria->removeSelectColumn($alias . '.InhdEntDate');
            $criteria->removeSelectColumn($alias . '.InhdRef');
            $criteria->removeSelectColumn($alias . '.InhdPickDate');
            $criteria->removeSelectColumn($alias . '.InhdPickTime');
            $criteria->removeSelectColumn($alias . '.InhdTimesPick');
            $criteria->removeSelectColumn($alias . '.InhdCrntUser');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.ArstShipId');
            $criteria->removeSelectColumn($alias . '.InhdDept');
            $criteria->removeSelectColumn($alias . '.InhdPllt');
            $criteria->removeSelectColumn($alias . '.InhdCntrQty');
            $criteria->removeSelectColumn($alias . '.InhdWghtTot');
            $criteria->removeSelectColumn($alias . '.InhdTrackNbr');
            $criteria->removeSelectColumn($alias . '.InhdPickQueue');
            $criteria->removeSelectColumn($alias . '.InhdShipQueue');
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.InhdFTVend');
            $criteria->removeSelectColumn($alias . '.InhdTranType');
            $criteria->removeSelectColumn($alias . '.InhdFrtCost');
            $criteria->removeSelectColumn($alias . '.InhdPickCode');
            $criteria->removeSelectColumn($alias . '.InhdPackCode');
            $criteria->removeSelectColumn($alias . '.InhdHold');
            $criteria->removeSelectColumn($alias . '.InhdLabel1PrtFmt');
            $criteria->removeSelectColumn($alias . '.InhdEnteredBy');
            $criteria->removeSelectColumn($alias . '.InhdEnteredDate');
            $criteria->removeSelectColumn($alias . '.InhdEnteredTime');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvTransferOrderTableMap::DATABASE_NAME)->getTable(InvTransferOrderTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvTransferOrder or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvTransferOrder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvTransferOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvTransferOrderTableMap::DATABASE_NAME);
            $criteria->add(InvTransferOrderTableMap::COL_INHDNBR, (array) $values, Criteria::IN);
        }

        $query = InvTransferOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvTransferOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvTransferOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_trans_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvTransferOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvTransferOrder or Criteria object.
     *
     * @param mixed $criteria Criteria or InvTransferOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvTransferOrder object
        }


        // Set the correct dbName
        $query = InvTransferOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
