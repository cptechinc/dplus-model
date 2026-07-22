<?php

namespace Map;

use \CpnLoad;
use \CpnLoadQuery;
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
 * This class defines the structure of the 'load_cpn_header' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class CpnLoadTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.CpnLoadTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'load_cpn_header';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'CpnLoad';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\CpnLoad';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'CpnLoad';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the LchdLoadNbr field
     */
    public const COL_LCHDLOADNBR = 'load_cpn_header.LchdLoadNbr';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'load_cpn_header.IntbWhse';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'load_cpn_header.ArcuCustId';

    /**
     * the column name for the LchdShipIdFrom field
     */
    public const COL_LCHDSHIPIDFROM = 'load_cpn_header.LchdShipIdFrom';

    /**
     * the column name for the LchdShipIdThru field
     */
    public const COL_LCHDSHIPIDTHRU = 'load_cpn_header.LchdShipIdThru';

    /**
     * the column name for the LchdShipIdThruSel field
     */
    public const COL_LCHDSHIPIDTHRUSEL = 'load_cpn_header.LchdShipIdThruSel';

    /**
     * the column name for the LchdCustPoFrom field
     */
    public const COL_LCHDCUSTPOFROM = 'load_cpn_header.LchdCustPoFrom';

    /**
     * the column name for the LchdCustPoThru field
     */
    public const COL_LCHDCUSTPOTHRU = 'load_cpn_header.LchdCustPoThru';

    /**
     * the column name for the LchdCustPoThruSel field
     */
    public const COL_LCHDCUSTPOTHRUSEL = 'load_cpn_header.LchdCustPoThruSel';

    /**
     * the column name for the LchdRqstDateFrom field
     */
    public const COL_LCHDRQSTDATEFROM = 'load_cpn_header.LchdRqstDateFrom';

    /**
     * the column name for the LchdRqstDateThru field
     */
    public const COL_LCHDRQSTDATETHRU = 'load_cpn_header.LchdRqstDateThru';

    /**
     * the column name for the LchdBol field
     */
    public const COL_LCHDBOL = 'load_cpn_header.LchdBol';

    /**
     * the column name for the LchdProNbr field
     */
    public const COL_LCHDPRONBR = 'load_cpn_header.LchdProNbr';

    /**
     * the column name for the LchdShipDate field
     */
    public const COL_LCHDSHIPDATE = 'load_cpn_header.LchdShipDate';

    /**
     * the column name for the LchdNbrOfSkids field
     */
    public const COL_LCHDNBROFSKIDS = 'load_cpn_header.LchdNbrOfSkids';

    /**
     * the column name for the LchdNbrOfBoxes field
     */
    public const COL_LCHDNBROFBOXES = 'load_cpn_header.LchdNbrOfBoxes';

    /**
     * the column name for the LchdTotWght field
     */
    public const COL_LCHDTOTWGHT = 'load_cpn_header.LchdTotWght';

    /**
     * the column name for the LchdSlctNbrOfBoxes field
     */
    public const COL_LCHDSLCTNBROFBOXES = 'load_cpn_header.LchdSlctNbrOfBoxes';

    /**
     * the column name for the LchdSlctTotWght field
     */
    public const COL_LCHDSLCTTOTWGHT = 'load_cpn_header.LchdSlctTotWght';

    /**
     * the column name for the LchdSchdPickupDate field
     */
    public const COL_LCHDSCHDPICKUPDATE = 'load_cpn_header.LchdSchdPickupDate';

    /**
     * the column name for the LchdSchdPickupTime field
     */
    public const COL_LCHDSCHDPICKUPTIME = 'load_cpn_header.LchdSchdPickupTime';

    /**
     * the column name for the LchdExportDate field
     */
    public const COL_LCHDEXPORTDATE = 'load_cpn_header.LchdExportDate';

    /**
     * the column name for the LchdExportTime field
     */
    public const COL_LCHDEXPORTTIME = 'load_cpn_header.LchdExportTime';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'load_cpn_header.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'load_cpn_header.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'load_cpn_header.dummy';

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
        self::TYPE_PHPNAME       => ['Lchdloadnbr', 'Intbwhse', 'Arcucustid', 'Lchdshipidfrom', 'Lchdshipidthru', 'Lchdshipidthrusel', 'Lchdcustpofrom', 'Lchdcustpothru', 'Lchdcustpothrusel', 'Lchdrqstdatefrom', 'Lchdrqstdatethru', 'Lchdbol', 'Lchdpronbr', 'Lchdshipdate', 'Lchdnbrofskids', 'Lchdnbrofboxes', 'Lchdtotwght', 'Lchdslctnbrofboxes', 'Lchdslcttotwght', 'Lchdschdpickupdate', 'Lchdschdpickuptime', 'Lchdexportdate', 'Lchdexporttime', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['lchdloadnbr', 'intbwhse', 'arcucustid', 'lchdshipidfrom', 'lchdshipidthru', 'lchdshipidthrusel', 'lchdcustpofrom', 'lchdcustpothru', 'lchdcustpothrusel', 'lchdrqstdatefrom', 'lchdrqstdatethru', 'lchdbol', 'lchdpronbr', 'lchdshipdate', 'lchdnbrofskids', 'lchdnbrofboxes', 'lchdtotwght', 'lchdslctnbrofboxes', 'lchdslcttotwght', 'lchdschdpickupdate', 'lchdschdpickuptime', 'lchdexportdate', 'lchdexporttime', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [CpnLoadTableMap::COL_LCHDLOADNBR, CpnLoadTableMap::COL_INTBWHSE, CpnLoadTableMap::COL_ARCUCUSTID, CpnLoadTableMap::COL_LCHDSHIPIDFROM, CpnLoadTableMap::COL_LCHDSHIPIDTHRU, CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL, CpnLoadTableMap::COL_LCHDCUSTPOFROM, CpnLoadTableMap::COL_LCHDCUSTPOTHRU, CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL, CpnLoadTableMap::COL_LCHDRQSTDATEFROM, CpnLoadTableMap::COL_LCHDRQSTDATETHRU, CpnLoadTableMap::COL_LCHDBOL, CpnLoadTableMap::COL_LCHDPRONBR, CpnLoadTableMap::COL_LCHDSHIPDATE, CpnLoadTableMap::COL_LCHDNBROFSKIDS, CpnLoadTableMap::COL_LCHDNBROFBOXES, CpnLoadTableMap::COL_LCHDTOTWGHT, CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES, CpnLoadTableMap::COL_LCHDSLCTTOTWGHT, CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE, CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME, CpnLoadTableMap::COL_LCHDEXPORTDATE, CpnLoadTableMap::COL_LCHDEXPORTTIME, CpnLoadTableMap::COL_DATEUPDTD, CpnLoadTableMap::COL_TIMEUPDTD, CpnLoadTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['LchdLoadNbr', 'IntbWhse', 'ArcuCustId', 'LchdShipIdFrom', 'LchdShipIdThru', 'LchdShipIdThruSel', 'LchdCustPoFrom', 'LchdCustPoThru', 'LchdCustPoThruSel', 'LchdRqstDateFrom', 'LchdRqstDateThru', 'LchdBol', 'LchdProNbr', 'LchdShipDate', 'LchdNbrOfSkids', 'LchdNbrOfBoxes', 'LchdTotWght', 'LchdSlctNbrOfBoxes', 'LchdSlctTotWght', 'LchdSchdPickupDate', 'LchdSchdPickupTime', 'LchdExportDate', 'LchdExportTime', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, ]
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
        self::TYPE_PHPNAME       => ['Lchdloadnbr' => 0, 'Intbwhse' => 1, 'Arcucustid' => 2, 'Lchdshipidfrom' => 3, 'Lchdshipidthru' => 4, 'Lchdshipidthrusel' => 5, 'Lchdcustpofrom' => 6, 'Lchdcustpothru' => 7, 'Lchdcustpothrusel' => 8, 'Lchdrqstdatefrom' => 9, 'Lchdrqstdatethru' => 10, 'Lchdbol' => 11, 'Lchdpronbr' => 12, 'Lchdshipdate' => 13, 'Lchdnbrofskids' => 14, 'Lchdnbrofboxes' => 15, 'Lchdtotwght' => 16, 'Lchdslctnbrofboxes' => 17, 'Lchdslcttotwght' => 18, 'Lchdschdpickupdate' => 19, 'Lchdschdpickuptime' => 20, 'Lchdexportdate' => 21, 'Lchdexporttime' => 22, 'Dateupdtd' => 23, 'Timeupdtd' => 24, 'Dummy' => 25, ],
        self::TYPE_CAMELNAME     => ['lchdloadnbr' => 0, 'intbwhse' => 1, 'arcucustid' => 2, 'lchdshipidfrom' => 3, 'lchdshipidthru' => 4, 'lchdshipidthrusel' => 5, 'lchdcustpofrom' => 6, 'lchdcustpothru' => 7, 'lchdcustpothrusel' => 8, 'lchdrqstdatefrom' => 9, 'lchdrqstdatethru' => 10, 'lchdbol' => 11, 'lchdpronbr' => 12, 'lchdshipdate' => 13, 'lchdnbrofskids' => 14, 'lchdnbrofboxes' => 15, 'lchdtotwght' => 16, 'lchdslctnbrofboxes' => 17, 'lchdslcttotwght' => 18, 'lchdschdpickupdate' => 19, 'lchdschdpickuptime' => 20, 'lchdexportdate' => 21, 'lchdexporttime' => 22, 'dateupdtd' => 23, 'timeupdtd' => 24, 'dummy' => 25, ],
        self::TYPE_COLNAME       => [CpnLoadTableMap::COL_LCHDLOADNBR => 0, CpnLoadTableMap::COL_INTBWHSE => 1, CpnLoadTableMap::COL_ARCUCUSTID => 2, CpnLoadTableMap::COL_LCHDSHIPIDFROM => 3, CpnLoadTableMap::COL_LCHDSHIPIDTHRU => 4, CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL => 5, CpnLoadTableMap::COL_LCHDCUSTPOFROM => 6, CpnLoadTableMap::COL_LCHDCUSTPOTHRU => 7, CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL => 8, CpnLoadTableMap::COL_LCHDRQSTDATEFROM => 9, CpnLoadTableMap::COL_LCHDRQSTDATETHRU => 10, CpnLoadTableMap::COL_LCHDBOL => 11, CpnLoadTableMap::COL_LCHDPRONBR => 12, CpnLoadTableMap::COL_LCHDSHIPDATE => 13, CpnLoadTableMap::COL_LCHDNBROFSKIDS => 14, CpnLoadTableMap::COL_LCHDNBROFBOXES => 15, CpnLoadTableMap::COL_LCHDTOTWGHT => 16, CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES => 17, CpnLoadTableMap::COL_LCHDSLCTTOTWGHT => 18, CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE => 19, CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME => 20, CpnLoadTableMap::COL_LCHDEXPORTDATE => 21, CpnLoadTableMap::COL_LCHDEXPORTTIME => 22, CpnLoadTableMap::COL_DATEUPDTD => 23, CpnLoadTableMap::COL_TIMEUPDTD => 24, CpnLoadTableMap::COL_DUMMY => 25, ],
        self::TYPE_FIELDNAME     => ['LchdLoadNbr' => 0, 'IntbWhse' => 1, 'ArcuCustId' => 2, 'LchdShipIdFrom' => 3, 'LchdShipIdThru' => 4, 'LchdShipIdThruSel' => 5, 'LchdCustPoFrom' => 6, 'LchdCustPoThru' => 7, 'LchdCustPoThruSel' => 8, 'LchdRqstDateFrom' => 9, 'LchdRqstDateThru' => 10, 'LchdBol' => 11, 'LchdProNbr' => 12, 'LchdShipDate' => 13, 'LchdNbrOfSkids' => 14, 'LchdNbrOfBoxes' => 15, 'LchdTotWght' => 16, 'LchdSlctNbrOfBoxes' => 17, 'LchdSlctTotWght' => 18, 'LchdSchdPickupDate' => 19, 'LchdSchdPickupTime' => 20, 'LchdExportDate' => 21, 'LchdExportTime' => 22, 'DateUpdtd' => 23, 'TimeUpdtd' => 24, 'dummy' => 25, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Lchdloadnbr' => 'LCHDLOADNBR',
        'CpnLoad.Lchdloadnbr' => 'LCHDLOADNBR',
        'lchdloadnbr' => 'LCHDLOADNBR',
        'cpnLoad.lchdloadnbr' => 'LCHDLOADNBR',
        'CpnLoadTableMap::COL_LCHDLOADNBR' => 'LCHDLOADNBR',
        'COL_LCHDLOADNBR' => 'LCHDLOADNBR',
        'LchdLoadNbr' => 'LCHDLOADNBR',
        'load_cpn_header.LchdLoadNbr' => 'LCHDLOADNBR',
        'Intbwhse' => 'INTBWHSE',
        'CpnLoad.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'cpnLoad.intbwhse' => 'INTBWHSE',
        'CpnLoadTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'load_cpn_header.IntbWhse' => 'INTBWHSE',
        'Arcucustid' => 'ARCUCUSTID',
        'CpnLoad.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'cpnLoad.arcucustid' => 'ARCUCUSTID',
        'CpnLoadTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'load_cpn_header.ArcuCustId' => 'ARCUCUSTID',
        'Lchdshipidfrom' => 'LCHDSHIPIDFROM',
        'CpnLoad.Lchdshipidfrom' => 'LCHDSHIPIDFROM',
        'lchdshipidfrom' => 'LCHDSHIPIDFROM',
        'cpnLoad.lchdshipidfrom' => 'LCHDSHIPIDFROM',
        'CpnLoadTableMap::COL_LCHDSHIPIDFROM' => 'LCHDSHIPIDFROM',
        'COL_LCHDSHIPIDFROM' => 'LCHDSHIPIDFROM',
        'LchdShipIdFrom' => 'LCHDSHIPIDFROM',
        'load_cpn_header.LchdShipIdFrom' => 'LCHDSHIPIDFROM',
        'Lchdshipidthru' => 'LCHDSHIPIDTHRU',
        'CpnLoad.Lchdshipidthru' => 'LCHDSHIPIDTHRU',
        'lchdshipidthru' => 'LCHDSHIPIDTHRU',
        'cpnLoad.lchdshipidthru' => 'LCHDSHIPIDTHRU',
        'CpnLoadTableMap::COL_LCHDSHIPIDTHRU' => 'LCHDSHIPIDTHRU',
        'COL_LCHDSHIPIDTHRU' => 'LCHDSHIPIDTHRU',
        'LchdShipIdThru' => 'LCHDSHIPIDTHRU',
        'load_cpn_header.LchdShipIdThru' => 'LCHDSHIPIDTHRU',
        'Lchdshipidthrusel' => 'LCHDSHIPIDTHRUSEL',
        'CpnLoad.Lchdshipidthrusel' => 'LCHDSHIPIDTHRUSEL',
        'lchdshipidthrusel' => 'LCHDSHIPIDTHRUSEL',
        'cpnLoad.lchdshipidthrusel' => 'LCHDSHIPIDTHRUSEL',
        'CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL' => 'LCHDSHIPIDTHRUSEL',
        'COL_LCHDSHIPIDTHRUSEL' => 'LCHDSHIPIDTHRUSEL',
        'LchdShipIdThruSel' => 'LCHDSHIPIDTHRUSEL',
        'load_cpn_header.LchdShipIdThruSel' => 'LCHDSHIPIDTHRUSEL',
        'Lchdcustpofrom' => 'LCHDCUSTPOFROM',
        'CpnLoad.Lchdcustpofrom' => 'LCHDCUSTPOFROM',
        'lchdcustpofrom' => 'LCHDCUSTPOFROM',
        'cpnLoad.lchdcustpofrom' => 'LCHDCUSTPOFROM',
        'CpnLoadTableMap::COL_LCHDCUSTPOFROM' => 'LCHDCUSTPOFROM',
        'COL_LCHDCUSTPOFROM' => 'LCHDCUSTPOFROM',
        'LchdCustPoFrom' => 'LCHDCUSTPOFROM',
        'load_cpn_header.LchdCustPoFrom' => 'LCHDCUSTPOFROM',
        'Lchdcustpothru' => 'LCHDCUSTPOTHRU',
        'CpnLoad.Lchdcustpothru' => 'LCHDCUSTPOTHRU',
        'lchdcustpothru' => 'LCHDCUSTPOTHRU',
        'cpnLoad.lchdcustpothru' => 'LCHDCUSTPOTHRU',
        'CpnLoadTableMap::COL_LCHDCUSTPOTHRU' => 'LCHDCUSTPOTHRU',
        'COL_LCHDCUSTPOTHRU' => 'LCHDCUSTPOTHRU',
        'LchdCustPoThru' => 'LCHDCUSTPOTHRU',
        'load_cpn_header.LchdCustPoThru' => 'LCHDCUSTPOTHRU',
        'Lchdcustpothrusel' => 'LCHDCUSTPOTHRUSEL',
        'CpnLoad.Lchdcustpothrusel' => 'LCHDCUSTPOTHRUSEL',
        'lchdcustpothrusel' => 'LCHDCUSTPOTHRUSEL',
        'cpnLoad.lchdcustpothrusel' => 'LCHDCUSTPOTHRUSEL',
        'CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL' => 'LCHDCUSTPOTHRUSEL',
        'COL_LCHDCUSTPOTHRUSEL' => 'LCHDCUSTPOTHRUSEL',
        'LchdCustPoThruSel' => 'LCHDCUSTPOTHRUSEL',
        'load_cpn_header.LchdCustPoThruSel' => 'LCHDCUSTPOTHRUSEL',
        'Lchdrqstdatefrom' => 'LCHDRQSTDATEFROM',
        'CpnLoad.Lchdrqstdatefrom' => 'LCHDRQSTDATEFROM',
        'lchdrqstdatefrom' => 'LCHDRQSTDATEFROM',
        'cpnLoad.lchdrqstdatefrom' => 'LCHDRQSTDATEFROM',
        'CpnLoadTableMap::COL_LCHDRQSTDATEFROM' => 'LCHDRQSTDATEFROM',
        'COL_LCHDRQSTDATEFROM' => 'LCHDRQSTDATEFROM',
        'LchdRqstDateFrom' => 'LCHDRQSTDATEFROM',
        'load_cpn_header.LchdRqstDateFrom' => 'LCHDRQSTDATEFROM',
        'Lchdrqstdatethru' => 'LCHDRQSTDATETHRU',
        'CpnLoad.Lchdrqstdatethru' => 'LCHDRQSTDATETHRU',
        'lchdrqstdatethru' => 'LCHDRQSTDATETHRU',
        'cpnLoad.lchdrqstdatethru' => 'LCHDRQSTDATETHRU',
        'CpnLoadTableMap::COL_LCHDRQSTDATETHRU' => 'LCHDRQSTDATETHRU',
        'COL_LCHDRQSTDATETHRU' => 'LCHDRQSTDATETHRU',
        'LchdRqstDateThru' => 'LCHDRQSTDATETHRU',
        'load_cpn_header.LchdRqstDateThru' => 'LCHDRQSTDATETHRU',
        'Lchdbol' => 'LCHDBOL',
        'CpnLoad.Lchdbol' => 'LCHDBOL',
        'lchdbol' => 'LCHDBOL',
        'cpnLoad.lchdbol' => 'LCHDBOL',
        'CpnLoadTableMap::COL_LCHDBOL' => 'LCHDBOL',
        'COL_LCHDBOL' => 'LCHDBOL',
        'LchdBol' => 'LCHDBOL',
        'load_cpn_header.LchdBol' => 'LCHDBOL',
        'Lchdpronbr' => 'LCHDPRONBR',
        'CpnLoad.Lchdpronbr' => 'LCHDPRONBR',
        'lchdpronbr' => 'LCHDPRONBR',
        'cpnLoad.lchdpronbr' => 'LCHDPRONBR',
        'CpnLoadTableMap::COL_LCHDPRONBR' => 'LCHDPRONBR',
        'COL_LCHDPRONBR' => 'LCHDPRONBR',
        'LchdProNbr' => 'LCHDPRONBR',
        'load_cpn_header.LchdProNbr' => 'LCHDPRONBR',
        'Lchdshipdate' => 'LCHDSHIPDATE',
        'CpnLoad.Lchdshipdate' => 'LCHDSHIPDATE',
        'lchdshipdate' => 'LCHDSHIPDATE',
        'cpnLoad.lchdshipdate' => 'LCHDSHIPDATE',
        'CpnLoadTableMap::COL_LCHDSHIPDATE' => 'LCHDSHIPDATE',
        'COL_LCHDSHIPDATE' => 'LCHDSHIPDATE',
        'LchdShipDate' => 'LCHDSHIPDATE',
        'load_cpn_header.LchdShipDate' => 'LCHDSHIPDATE',
        'Lchdnbrofskids' => 'LCHDNBROFSKIDS',
        'CpnLoad.Lchdnbrofskids' => 'LCHDNBROFSKIDS',
        'lchdnbrofskids' => 'LCHDNBROFSKIDS',
        'cpnLoad.lchdnbrofskids' => 'LCHDNBROFSKIDS',
        'CpnLoadTableMap::COL_LCHDNBROFSKIDS' => 'LCHDNBROFSKIDS',
        'COL_LCHDNBROFSKIDS' => 'LCHDNBROFSKIDS',
        'LchdNbrOfSkids' => 'LCHDNBROFSKIDS',
        'load_cpn_header.LchdNbrOfSkids' => 'LCHDNBROFSKIDS',
        'Lchdnbrofboxes' => 'LCHDNBROFBOXES',
        'CpnLoad.Lchdnbrofboxes' => 'LCHDNBROFBOXES',
        'lchdnbrofboxes' => 'LCHDNBROFBOXES',
        'cpnLoad.lchdnbrofboxes' => 'LCHDNBROFBOXES',
        'CpnLoadTableMap::COL_LCHDNBROFBOXES' => 'LCHDNBROFBOXES',
        'COL_LCHDNBROFBOXES' => 'LCHDNBROFBOXES',
        'LchdNbrOfBoxes' => 'LCHDNBROFBOXES',
        'load_cpn_header.LchdNbrOfBoxes' => 'LCHDNBROFBOXES',
        'Lchdtotwght' => 'LCHDTOTWGHT',
        'CpnLoad.Lchdtotwght' => 'LCHDTOTWGHT',
        'lchdtotwght' => 'LCHDTOTWGHT',
        'cpnLoad.lchdtotwght' => 'LCHDTOTWGHT',
        'CpnLoadTableMap::COL_LCHDTOTWGHT' => 'LCHDTOTWGHT',
        'COL_LCHDTOTWGHT' => 'LCHDTOTWGHT',
        'LchdTotWght' => 'LCHDTOTWGHT',
        'load_cpn_header.LchdTotWght' => 'LCHDTOTWGHT',
        'Lchdslctnbrofboxes' => 'LCHDSLCTNBROFBOXES',
        'CpnLoad.Lchdslctnbrofboxes' => 'LCHDSLCTNBROFBOXES',
        'lchdslctnbrofboxes' => 'LCHDSLCTNBROFBOXES',
        'cpnLoad.lchdslctnbrofboxes' => 'LCHDSLCTNBROFBOXES',
        'CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES' => 'LCHDSLCTNBROFBOXES',
        'COL_LCHDSLCTNBROFBOXES' => 'LCHDSLCTNBROFBOXES',
        'LchdSlctNbrOfBoxes' => 'LCHDSLCTNBROFBOXES',
        'load_cpn_header.LchdSlctNbrOfBoxes' => 'LCHDSLCTNBROFBOXES',
        'Lchdslcttotwght' => 'LCHDSLCTTOTWGHT',
        'CpnLoad.Lchdslcttotwght' => 'LCHDSLCTTOTWGHT',
        'lchdslcttotwght' => 'LCHDSLCTTOTWGHT',
        'cpnLoad.lchdslcttotwght' => 'LCHDSLCTTOTWGHT',
        'CpnLoadTableMap::COL_LCHDSLCTTOTWGHT' => 'LCHDSLCTTOTWGHT',
        'COL_LCHDSLCTTOTWGHT' => 'LCHDSLCTTOTWGHT',
        'LchdSlctTotWght' => 'LCHDSLCTTOTWGHT',
        'load_cpn_header.LchdSlctTotWght' => 'LCHDSLCTTOTWGHT',
        'Lchdschdpickupdate' => 'LCHDSCHDPICKUPDATE',
        'CpnLoad.Lchdschdpickupdate' => 'LCHDSCHDPICKUPDATE',
        'lchdschdpickupdate' => 'LCHDSCHDPICKUPDATE',
        'cpnLoad.lchdschdpickupdate' => 'LCHDSCHDPICKUPDATE',
        'CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE' => 'LCHDSCHDPICKUPDATE',
        'COL_LCHDSCHDPICKUPDATE' => 'LCHDSCHDPICKUPDATE',
        'LchdSchdPickupDate' => 'LCHDSCHDPICKUPDATE',
        'load_cpn_header.LchdSchdPickupDate' => 'LCHDSCHDPICKUPDATE',
        'Lchdschdpickuptime' => 'LCHDSCHDPICKUPTIME',
        'CpnLoad.Lchdschdpickuptime' => 'LCHDSCHDPICKUPTIME',
        'lchdschdpickuptime' => 'LCHDSCHDPICKUPTIME',
        'cpnLoad.lchdschdpickuptime' => 'LCHDSCHDPICKUPTIME',
        'CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME' => 'LCHDSCHDPICKUPTIME',
        'COL_LCHDSCHDPICKUPTIME' => 'LCHDSCHDPICKUPTIME',
        'LchdSchdPickupTime' => 'LCHDSCHDPICKUPTIME',
        'load_cpn_header.LchdSchdPickupTime' => 'LCHDSCHDPICKUPTIME',
        'Lchdexportdate' => 'LCHDEXPORTDATE',
        'CpnLoad.Lchdexportdate' => 'LCHDEXPORTDATE',
        'lchdexportdate' => 'LCHDEXPORTDATE',
        'cpnLoad.lchdexportdate' => 'LCHDEXPORTDATE',
        'CpnLoadTableMap::COL_LCHDEXPORTDATE' => 'LCHDEXPORTDATE',
        'COL_LCHDEXPORTDATE' => 'LCHDEXPORTDATE',
        'LchdExportDate' => 'LCHDEXPORTDATE',
        'load_cpn_header.LchdExportDate' => 'LCHDEXPORTDATE',
        'Lchdexporttime' => 'LCHDEXPORTTIME',
        'CpnLoad.Lchdexporttime' => 'LCHDEXPORTTIME',
        'lchdexporttime' => 'LCHDEXPORTTIME',
        'cpnLoad.lchdexporttime' => 'LCHDEXPORTTIME',
        'CpnLoadTableMap::COL_LCHDEXPORTTIME' => 'LCHDEXPORTTIME',
        'COL_LCHDEXPORTTIME' => 'LCHDEXPORTTIME',
        'LchdExportTime' => 'LCHDEXPORTTIME',
        'load_cpn_header.LchdExportTime' => 'LCHDEXPORTTIME',
        'Dateupdtd' => 'DATEUPDTD',
        'CpnLoad.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'cpnLoad.dateupdtd' => 'DATEUPDTD',
        'CpnLoadTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'load_cpn_header.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'CpnLoad.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'cpnLoad.timeupdtd' => 'TIMEUPDTD',
        'CpnLoadTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'load_cpn_header.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'CpnLoad.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'cpnLoad.dummy' => 'DUMMY',
        'CpnLoadTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'load_cpn_header.dummy' => 'DUMMY',
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
        $this->setName('load_cpn_header');
        $this->setPhpName('CpnLoad');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CpnLoad');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LchdLoadNbr', 'Lchdloadnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addColumn('LchdShipIdFrom', 'Lchdshipidfrom', 'VARCHAR', true, 6, '');
        $this->addColumn('LchdShipIdThru', 'Lchdshipidthru', 'VARCHAR', true, 6, '');
        $this->addColumn('LchdShipIdThruSel', 'Lchdshipidthrusel', 'VARCHAR', true, 6, '');
        $this->addColumn('LchdCustPoFrom', 'Lchdcustpofrom', 'VARCHAR', true, 20, '');
        $this->addColumn('LchdCustPoThru', 'Lchdcustpothru', 'VARCHAR', true, 20, '');
        $this->addColumn('LchdCustPoThruSel', 'Lchdcustpothrusel', 'VARCHAR', true, 20, '');
        $this->addColumn('LchdRqstDateFrom', 'Lchdrqstdatefrom', 'CHAR', true, 8, '');
        $this->addColumn('LchdRqstDateThru', 'Lchdrqstdatethru', 'CHAR', true, 8, '');
        $this->addColumn('LchdBol', 'Lchdbol', 'VARCHAR', true, 20, '');
        $this->addColumn('LchdProNbr', 'Lchdpronbr', 'VARCHAR', true, 20, '');
        $this->addColumn('LchdShipDate', 'Lchdshipdate', 'CHAR', true, 8, '');
        $this->addColumn('LchdNbrOfSkids', 'Lchdnbrofskids', 'INTEGER', true, 8, 0);
        $this->addColumn('LchdNbrOfBoxes', 'Lchdnbrofboxes', 'INTEGER', true, 8, 0);
        $this->addColumn('LchdTotWght', 'Lchdtotwght', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('LchdSlctNbrOfBoxes', 'Lchdslctnbrofboxes', 'INTEGER', true, 8, 0);
        $this->addColumn('LchdSlctTotWght', 'Lchdslcttotwght', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('LchdSchdPickupDate', 'Lchdschdpickupdate', 'CHAR', true, 8, '');
        $this->addColumn('LchdSchdPickupTime', 'Lchdschdpickuptime', 'CHAR', true, 4, '');
        $this->addColumn('LchdExportDate', 'Lchdexportdate', 'CHAR', true, 8, '');
        $this->addColumn('LchdExportTime', 'Lchdexporttime', 'CHAR', true, 4, '');
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
        $this->addRelation('CpnLoadItem', '\\CpnLoadItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':LchdLoadNbr',
    1 => ':LchdLoadNbr',
  ),
), null, null, 'CpnLoadItems', false);
        $this->addRelation('CpnLoadOrder', '\\CpnLoadOrder', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':LchdLoadNbr',
    1 => ':LchdLoadNbr',
  ),
), null, null, 'CpnLoadOrders', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CpnLoadTableMap::CLASS_DEFAULT : CpnLoadTableMap::OM_CLASS;
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
     * @return array (CpnLoad object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = CpnLoadTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CpnLoadTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CpnLoadTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CpnLoadTableMap::OM_CLASS;
            /** @var CpnLoad $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CpnLoadTableMap::addInstanceToPool($obj, $key);
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
            $key = CpnLoadTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CpnLoadTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CpnLoad $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CpnLoadTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDLOADNBR);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSHIPIDFROM);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSHIPIDTHRU);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDCUSTPOFROM);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDCUSTPOTHRU);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDRQSTDATEFROM);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDRQSTDATETHRU);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDBOL);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDPRONBR);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSHIPDATE);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDNBROFSKIDS);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDNBROFBOXES);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDTOTWGHT);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDEXPORTDATE);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_LCHDEXPORTTIME);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CpnLoadTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.LchdLoadNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.LchdShipIdFrom');
            $criteria->addSelectColumn($alias . '.LchdShipIdThru');
            $criteria->addSelectColumn($alias . '.LchdShipIdThruSel');
            $criteria->addSelectColumn($alias . '.LchdCustPoFrom');
            $criteria->addSelectColumn($alias . '.LchdCustPoThru');
            $criteria->addSelectColumn($alias . '.LchdCustPoThruSel');
            $criteria->addSelectColumn($alias . '.LchdRqstDateFrom');
            $criteria->addSelectColumn($alias . '.LchdRqstDateThru');
            $criteria->addSelectColumn($alias . '.LchdBol');
            $criteria->addSelectColumn($alias . '.LchdProNbr');
            $criteria->addSelectColumn($alias . '.LchdShipDate');
            $criteria->addSelectColumn($alias . '.LchdNbrOfSkids');
            $criteria->addSelectColumn($alias . '.LchdNbrOfBoxes');
            $criteria->addSelectColumn($alias . '.LchdTotWght');
            $criteria->addSelectColumn($alias . '.LchdSlctNbrOfBoxes');
            $criteria->addSelectColumn($alias . '.LchdSlctTotWght');
            $criteria->addSelectColumn($alias . '.LchdSchdPickupDate');
            $criteria->addSelectColumn($alias . '.LchdSchdPickupTime');
            $criteria->addSelectColumn($alias . '.LchdExportDate');
            $criteria->addSelectColumn($alias . '.LchdExportTime');
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
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDLOADNBR);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSHIPIDFROM);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSHIPIDTHRU);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDCUSTPOFROM);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDCUSTPOTHRU);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDRQSTDATEFROM);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDRQSTDATETHRU);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDBOL);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDPRONBR);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSHIPDATE);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDNBROFSKIDS);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDNBROFBOXES);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDTOTWGHT);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDEXPORTDATE);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_LCHDEXPORTTIME);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(CpnLoadTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.LchdLoadNbr');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.LchdShipIdFrom');
            $criteria->removeSelectColumn($alias . '.LchdShipIdThru');
            $criteria->removeSelectColumn($alias . '.LchdShipIdThruSel');
            $criteria->removeSelectColumn($alias . '.LchdCustPoFrom');
            $criteria->removeSelectColumn($alias . '.LchdCustPoThru');
            $criteria->removeSelectColumn($alias . '.LchdCustPoThruSel');
            $criteria->removeSelectColumn($alias . '.LchdRqstDateFrom');
            $criteria->removeSelectColumn($alias . '.LchdRqstDateThru');
            $criteria->removeSelectColumn($alias . '.LchdBol');
            $criteria->removeSelectColumn($alias . '.LchdProNbr');
            $criteria->removeSelectColumn($alias . '.LchdShipDate');
            $criteria->removeSelectColumn($alias . '.LchdNbrOfSkids');
            $criteria->removeSelectColumn($alias . '.LchdNbrOfBoxes');
            $criteria->removeSelectColumn($alias . '.LchdTotWght');
            $criteria->removeSelectColumn($alias . '.LchdSlctNbrOfBoxes');
            $criteria->removeSelectColumn($alias . '.LchdSlctTotWght');
            $criteria->removeSelectColumn($alias . '.LchdSchdPickupDate');
            $criteria->removeSelectColumn($alias . '.LchdSchdPickupTime');
            $criteria->removeSelectColumn($alias . '.LchdExportDate');
            $criteria->removeSelectColumn($alias . '.LchdExportTime');
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
        return Propel::getServiceContainer()->getDatabaseMap(CpnLoadTableMap::DATABASE_NAME)->getTable(CpnLoadTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a CpnLoad or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or CpnLoad object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CpnLoad) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CpnLoadTableMap::DATABASE_NAME);
            $criteria->add(CpnLoadTableMap::COL_LCHDLOADNBR, (array) $values, Criteria::IN);
        }

        $query = CpnLoadQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CpnLoadTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CpnLoadTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the load_cpn_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return CpnLoadQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CpnLoad or Criteria object.
     *
     * @param mixed $criteria Criteria or CpnLoad object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CpnLoad object
        }


        // Set the correct dbName
        $query = CpnLoadQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
