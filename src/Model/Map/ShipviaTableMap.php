<?php

namespace Map;

use \Shipvia;
use \ShipviaQuery;
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
 * This class defines the structure of the 'ar_cust_svia' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ShipviaTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ShipviaTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_cust_svia';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'Shipvia';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Shipvia';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'Shipvia';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 20;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 20;

    /**
     * the column name for the ArtbShipVia field
     */
    public const COL_ARTBSHIPVIA = 'ar_cust_svia.ArtbShipVia';

    /**
     * the column name for the ArtbSviaDesc field
     */
    public const COL_ARTBSVIADESC = 'ar_cust_svia.ArtbSviaDesc';

    /**
     * the column name for the ArtbSviaPrio field
     */
    public const COL_ARTBSVIAPRIO = 'ar_cust_svia.ArtbSviaPrio';

    /**
     * the column name for the ArtbSviaWeb field
     */
    public const COL_ARTBSVIAWEB = 'ar_cust_svia.ArtbSviaWeb';

    /**
     * the column name for the ArtbSviaAir field
     */
    public const COL_ARTBSVIAAIR = 'ar_cust_svia.ArtbSviaAir';

    /**
     * the column name for the ArtbSviaUpsServ field
     */
    public const COL_ARTBSVIAUPSSERV = 'ar_cust_svia.ArtbSviaUpsServ';

    /**
     * the column name for the ArtbSviaUpsBilling field
     */
    public const COL_ARTBSVIAUPSBILLING = 'ar_cust_svia.ArtbSviaUpsBilling';

    /**
     * the column name for the ArtbSviaScacCd field
     */
    public const COL_ARTBSVIASCACCD = 'ar_cust_svia.ArtbSviaScacCd';

    /**
     * the column name for the ArtbSviaEdiMethCd field
     */
    public const COL_ARTBSVIAEDIMETHCD = 'ar_cust_svia.ArtbSviaEdiMethCd';

    /**
     * the column name for the ArtbSviaUpsResidential field
     */
    public const COL_ARTBSVIAUPSRESIDENTIAL = 'ar_cust_svia.ArtbSviaUpsResidential';

    /**
     * the column name for the ArtbSviaChrgFrt field
     */
    public const COL_ARTBSVIACHRGFRT = 'ar_cust_svia.ArtbSviaChrgFrt';

    /**
     * the column name for the ArtbSviaUseRoute field
     */
    public const COL_ARTBSVIAUSEROUTE = 'ar_cust_svia.ArtbSviaUseRoute';

    /**
     * the column name for the ArtbSviaCommFrght field
     */
    public const COL_ARTBSVIACOMMFRGHT = 'ar_cust_svia.ArtbSviaCommFrght';

    /**
     * the column name for the ArtbSviaShipArea field
     */
    public const COL_ARTBSVIASHIPAREA = 'ar_cust_svia.ArtbSviaShipArea';

    /**
     * the column name for the ArtbSviaUseSurchg field
     */
    public const COL_ARTBSVIAUSESURCHG = 'ar_cust_svia.ArtbSviaUseSurchg';

    /**
     * the column name for the ArtbSviaSurchgPct field
     */
    public const COL_ARTBSVIASURCHGPCT = 'ar_cust_svia.ArtbSviaSurchgPct';

    /**
     * the column name for the ArtbSviaTaxCode field
     */
    public const COL_ARTBSVIATAXCODE = 'ar_cust_svia.ArtbSviaTaxCode';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_cust_svia.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_cust_svia.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_cust_svia.dummy';

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
        self::TYPE_PHPNAME       => ['Artbshipvia', 'Artbsviadesc', 'Artbsviaprio', 'Artbsviaweb', 'Artbsviaair', 'Artbsviaupsserv', 'Artbsviaupsbilling', 'Artbsviascaccd', 'Artbsviaedimethcd', 'Artbsviaupsresidential', 'Artbsviachrgfrt', 'Artbsviauseroute', 'Artbsviacommfrght', 'Artbsviashiparea', 'Artbsviausesurchg', 'Artbsviasurchgpct', 'Artbsviataxcode', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['artbshipvia', 'artbsviadesc', 'artbsviaprio', 'artbsviaweb', 'artbsviaair', 'artbsviaupsserv', 'artbsviaupsbilling', 'artbsviascaccd', 'artbsviaedimethcd', 'artbsviaupsresidential', 'artbsviachrgfrt', 'artbsviauseroute', 'artbsviacommfrght', 'artbsviashiparea', 'artbsviausesurchg', 'artbsviasurchgpct', 'artbsviataxcode', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ShipviaTableMap::COL_ARTBSHIPVIA, ShipviaTableMap::COL_ARTBSVIADESC, ShipviaTableMap::COL_ARTBSVIAPRIO, ShipviaTableMap::COL_ARTBSVIAWEB, ShipviaTableMap::COL_ARTBSVIAAIR, ShipviaTableMap::COL_ARTBSVIAUPSSERV, ShipviaTableMap::COL_ARTBSVIAUPSBILLING, ShipviaTableMap::COL_ARTBSVIASCACCD, ShipviaTableMap::COL_ARTBSVIAEDIMETHCD, ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL, ShipviaTableMap::COL_ARTBSVIACHRGFRT, ShipviaTableMap::COL_ARTBSVIAUSEROUTE, ShipviaTableMap::COL_ARTBSVIACOMMFRGHT, ShipviaTableMap::COL_ARTBSVIASHIPAREA, ShipviaTableMap::COL_ARTBSVIAUSESURCHG, ShipviaTableMap::COL_ARTBSVIASURCHGPCT, ShipviaTableMap::COL_ARTBSVIATAXCODE, ShipviaTableMap::COL_DATEUPDTD, ShipviaTableMap::COL_TIMEUPDTD, ShipviaTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArtbShipVia', 'ArtbSviaDesc', 'ArtbSviaPrio', 'ArtbSviaWeb', 'ArtbSviaAir', 'ArtbSviaUpsServ', 'ArtbSviaUpsBilling', 'ArtbSviaScacCd', 'ArtbSviaEdiMethCd', 'ArtbSviaUpsResidential', 'ArtbSviaChrgFrt', 'ArtbSviaUseRoute', 'ArtbSviaCommFrght', 'ArtbSviaShipArea', 'ArtbSviaUseSurchg', 'ArtbSviaSurchgPct', 'ArtbSviaTaxCode', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, ]
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
        self::TYPE_PHPNAME       => ['Artbshipvia' => 0, 'Artbsviadesc' => 1, 'Artbsviaprio' => 2, 'Artbsviaweb' => 3, 'Artbsviaair' => 4, 'Artbsviaupsserv' => 5, 'Artbsviaupsbilling' => 6, 'Artbsviascaccd' => 7, 'Artbsviaedimethcd' => 8, 'Artbsviaupsresidential' => 9, 'Artbsviachrgfrt' => 10, 'Artbsviauseroute' => 11, 'Artbsviacommfrght' => 12, 'Artbsviashiparea' => 13, 'Artbsviausesurchg' => 14, 'Artbsviasurchgpct' => 15, 'Artbsviataxcode' => 16, 'Dateupdtd' => 17, 'Timeupdtd' => 18, 'Dummy' => 19, ],
        self::TYPE_CAMELNAME     => ['artbshipvia' => 0, 'artbsviadesc' => 1, 'artbsviaprio' => 2, 'artbsviaweb' => 3, 'artbsviaair' => 4, 'artbsviaupsserv' => 5, 'artbsviaupsbilling' => 6, 'artbsviascaccd' => 7, 'artbsviaedimethcd' => 8, 'artbsviaupsresidential' => 9, 'artbsviachrgfrt' => 10, 'artbsviauseroute' => 11, 'artbsviacommfrght' => 12, 'artbsviashiparea' => 13, 'artbsviausesurchg' => 14, 'artbsviasurchgpct' => 15, 'artbsviataxcode' => 16, 'dateupdtd' => 17, 'timeupdtd' => 18, 'dummy' => 19, ],
        self::TYPE_COLNAME       => [ShipviaTableMap::COL_ARTBSHIPVIA => 0, ShipviaTableMap::COL_ARTBSVIADESC => 1, ShipviaTableMap::COL_ARTBSVIAPRIO => 2, ShipviaTableMap::COL_ARTBSVIAWEB => 3, ShipviaTableMap::COL_ARTBSVIAAIR => 4, ShipviaTableMap::COL_ARTBSVIAUPSSERV => 5, ShipviaTableMap::COL_ARTBSVIAUPSBILLING => 6, ShipviaTableMap::COL_ARTBSVIASCACCD => 7, ShipviaTableMap::COL_ARTBSVIAEDIMETHCD => 8, ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL => 9, ShipviaTableMap::COL_ARTBSVIACHRGFRT => 10, ShipviaTableMap::COL_ARTBSVIAUSEROUTE => 11, ShipviaTableMap::COL_ARTBSVIACOMMFRGHT => 12, ShipviaTableMap::COL_ARTBSVIASHIPAREA => 13, ShipviaTableMap::COL_ARTBSVIAUSESURCHG => 14, ShipviaTableMap::COL_ARTBSVIASURCHGPCT => 15, ShipviaTableMap::COL_ARTBSVIATAXCODE => 16, ShipviaTableMap::COL_DATEUPDTD => 17, ShipviaTableMap::COL_TIMEUPDTD => 18, ShipviaTableMap::COL_DUMMY => 19, ],
        self::TYPE_FIELDNAME     => ['ArtbShipVia' => 0, 'ArtbSviaDesc' => 1, 'ArtbSviaPrio' => 2, 'ArtbSviaWeb' => 3, 'ArtbSviaAir' => 4, 'ArtbSviaUpsServ' => 5, 'ArtbSviaUpsBilling' => 6, 'ArtbSviaScacCd' => 7, 'ArtbSviaEdiMethCd' => 8, 'ArtbSviaUpsResidential' => 9, 'ArtbSviaChrgFrt' => 10, 'ArtbSviaUseRoute' => 11, 'ArtbSviaCommFrght' => 12, 'ArtbSviaShipArea' => 13, 'ArtbSviaUseSurchg' => 14, 'ArtbSviaSurchgPct' => 15, 'ArtbSviaTaxCode' => 16, 'DateUpdtd' => 17, 'TimeUpdtd' => 18, 'dummy' => 19, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Artbshipvia' => 'ARTBSHIPVIA',
        'Shipvia.Artbshipvia' => 'ARTBSHIPVIA',
        'artbshipvia' => 'ARTBSHIPVIA',
        'shipvia.artbshipvia' => 'ARTBSHIPVIA',
        'ShipviaTableMap::COL_ARTBSHIPVIA' => 'ARTBSHIPVIA',
        'COL_ARTBSHIPVIA' => 'ARTBSHIPVIA',
        'ArtbShipVia' => 'ARTBSHIPVIA',
        'ar_cust_svia.ArtbShipVia' => 'ARTBSHIPVIA',
        'Artbsviadesc' => 'ARTBSVIADESC',
        'Shipvia.Artbsviadesc' => 'ARTBSVIADESC',
        'artbsviadesc' => 'ARTBSVIADESC',
        'shipvia.artbsviadesc' => 'ARTBSVIADESC',
        'ShipviaTableMap::COL_ARTBSVIADESC' => 'ARTBSVIADESC',
        'COL_ARTBSVIADESC' => 'ARTBSVIADESC',
        'ArtbSviaDesc' => 'ARTBSVIADESC',
        'ar_cust_svia.ArtbSviaDesc' => 'ARTBSVIADESC',
        'Artbsviaprio' => 'ARTBSVIAPRIO',
        'Shipvia.Artbsviaprio' => 'ARTBSVIAPRIO',
        'artbsviaprio' => 'ARTBSVIAPRIO',
        'shipvia.artbsviaprio' => 'ARTBSVIAPRIO',
        'ShipviaTableMap::COL_ARTBSVIAPRIO' => 'ARTBSVIAPRIO',
        'COL_ARTBSVIAPRIO' => 'ARTBSVIAPRIO',
        'ArtbSviaPrio' => 'ARTBSVIAPRIO',
        'ar_cust_svia.ArtbSviaPrio' => 'ARTBSVIAPRIO',
        'Artbsviaweb' => 'ARTBSVIAWEB',
        'Shipvia.Artbsviaweb' => 'ARTBSVIAWEB',
        'artbsviaweb' => 'ARTBSVIAWEB',
        'shipvia.artbsviaweb' => 'ARTBSVIAWEB',
        'ShipviaTableMap::COL_ARTBSVIAWEB' => 'ARTBSVIAWEB',
        'COL_ARTBSVIAWEB' => 'ARTBSVIAWEB',
        'ArtbSviaWeb' => 'ARTBSVIAWEB',
        'ar_cust_svia.ArtbSviaWeb' => 'ARTBSVIAWEB',
        'Artbsviaair' => 'ARTBSVIAAIR',
        'Shipvia.Artbsviaair' => 'ARTBSVIAAIR',
        'artbsviaair' => 'ARTBSVIAAIR',
        'shipvia.artbsviaair' => 'ARTBSVIAAIR',
        'ShipviaTableMap::COL_ARTBSVIAAIR' => 'ARTBSVIAAIR',
        'COL_ARTBSVIAAIR' => 'ARTBSVIAAIR',
        'ArtbSviaAir' => 'ARTBSVIAAIR',
        'ar_cust_svia.ArtbSviaAir' => 'ARTBSVIAAIR',
        'Artbsviaupsserv' => 'ARTBSVIAUPSSERV',
        'Shipvia.Artbsviaupsserv' => 'ARTBSVIAUPSSERV',
        'artbsviaupsserv' => 'ARTBSVIAUPSSERV',
        'shipvia.artbsviaupsserv' => 'ARTBSVIAUPSSERV',
        'ShipviaTableMap::COL_ARTBSVIAUPSSERV' => 'ARTBSVIAUPSSERV',
        'COL_ARTBSVIAUPSSERV' => 'ARTBSVIAUPSSERV',
        'ArtbSviaUpsServ' => 'ARTBSVIAUPSSERV',
        'ar_cust_svia.ArtbSviaUpsServ' => 'ARTBSVIAUPSSERV',
        'Artbsviaupsbilling' => 'ARTBSVIAUPSBILLING',
        'Shipvia.Artbsviaupsbilling' => 'ARTBSVIAUPSBILLING',
        'artbsviaupsbilling' => 'ARTBSVIAUPSBILLING',
        'shipvia.artbsviaupsbilling' => 'ARTBSVIAUPSBILLING',
        'ShipviaTableMap::COL_ARTBSVIAUPSBILLING' => 'ARTBSVIAUPSBILLING',
        'COL_ARTBSVIAUPSBILLING' => 'ARTBSVIAUPSBILLING',
        'ArtbSviaUpsBilling' => 'ARTBSVIAUPSBILLING',
        'ar_cust_svia.ArtbSviaUpsBilling' => 'ARTBSVIAUPSBILLING',
        'Artbsviascaccd' => 'ARTBSVIASCACCD',
        'Shipvia.Artbsviascaccd' => 'ARTBSVIASCACCD',
        'artbsviascaccd' => 'ARTBSVIASCACCD',
        'shipvia.artbsviascaccd' => 'ARTBSVIASCACCD',
        'ShipviaTableMap::COL_ARTBSVIASCACCD' => 'ARTBSVIASCACCD',
        'COL_ARTBSVIASCACCD' => 'ARTBSVIASCACCD',
        'ArtbSviaScacCd' => 'ARTBSVIASCACCD',
        'ar_cust_svia.ArtbSviaScacCd' => 'ARTBSVIASCACCD',
        'Artbsviaedimethcd' => 'ARTBSVIAEDIMETHCD',
        'Shipvia.Artbsviaedimethcd' => 'ARTBSVIAEDIMETHCD',
        'artbsviaedimethcd' => 'ARTBSVIAEDIMETHCD',
        'shipvia.artbsviaedimethcd' => 'ARTBSVIAEDIMETHCD',
        'ShipviaTableMap::COL_ARTBSVIAEDIMETHCD' => 'ARTBSVIAEDIMETHCD',
        'COL_ARTBSVIAEDIMETHCD' => 'ARTBSVIAEDIMETHCD',
        'ArtbSviaEdiMethCd' => 'ARTBSVIAEDIMETHCD',
        'ar_cust_svia.ArtbSviaEdiMethCd' => 'ARTBSVIAEDIMETHCD',
        'Artbsviaupsresidential' => 'ARTBSVIAUPSRESIDENTIAL',
        'Shipvia.Artbsviaupsresidential' => 'ARTBSVIAUPSRESIDENTIAL',
        'artbsviaupsresidential' => 'ARTBSVIAUPSRESIDENTIAL',
        'shipvia.artbsviaupsresidential' => 'ARTBSVIAUPSRESIDENTIAL',
        'ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL' => 'ARTBSVIAUPSRESIDENTIAL',
        'COL_ARTBSVIAUPSRESIDENTIAL' => 'ARTBSVIAUPSRESIDENTIAL',
        'ArtbSviaUpsResidential' => 'ARTBSVIAUPSRESIDENTIAL',
        'ar_cust_svia.ArtbSviaUpsResidential' => 'ARTBSVIAUPSRESIDENTIAL',
        'Artbsviachrgfrt' => 'ARTBSVIACHRGFRT',
        'Shipvia.Artbsviachrgfrt' => 'ARTBSVIACHRGFRT',
        'artbsviachrgfrt' => 'ARTBSVIACHRGFRT',
        'shipvia.artbsviachrgfrt' => 'ARTBSVIACHRGFRT',
        'ShipviaTableMap::COL_ARTBSVIACHRGFRT' => 'ARTBSVIACHRGFRT',
        'COL_ARTBSVIACHRGFRT' => 'ARTBSVIACHRGFRT',
        'ArtbSviaChrgFrt' => 'ARTBSVIACHRGFRT',
        'ar_cust_svia.ArtbSviaChrgFrt' => 'ARTBSVIACHRGFRT',
        'Artbsviauseroute' => 'ARTBSVIAUSEROUTE',
        'Shipvia.Artbsviauseroute' => 'ARTBSVIAUSEROUTE',
        'artbsviauseroute' => 'ARTBSVIAUSEROUTE',
        'shipvia.artbsviauseroute' => 'ARTBSVIAUSEROUTE',
        'ShipviaTableMap::COL_ARTBSVIAUSEROUTE' => 'ARTBSVIAUSEROUTE',
        'COL_ARTBSVIAUSEROUTE' => 'ARTBSVIAUSEROUTE',
        'ArtbSviaUseRoute' => 'ARTBSVIAUSEROUTE',
        'ar_cust_svia.ArtbSviaUseRoute' => 'ARTBSVIAUSEROUTE',
        'Artbsviacommfrght' => 'ARTBSVIACOMMFRGHT',
        'Shipvia.Artbsviacommfrght' => 'ARTBSVIACOMMFRGHT',
        'artbsviacommfrght' => 'ARTBSVIACOMMFRGHT',
        'shipvia.artbsviacommfrght' => 'ARTBSVIACOMMFRGHT',
        'ShipviaTableMap::COL_ARTBSVIACOMMFRGHT' => 'ARTBSVIACOMMFRGHT',
        'COL_ARTBSVIACOMMFRGHT' => 'ARTBSVIACOMMFRGHT',
        'ArtbSviaCommFrght' => 'ARTBSVIACOMMFRGHT',
        'ar_cust_svia.ArtbSviaCommFrght' => 'ARTBSVIACOMMFRGHT',
        'Artbsviashiparea' => 'ARTBSVIASHIPAREA',
        'Shipvia.Artbsviashiparea' => 'ARTBSVIASHIPAREA',
        'artbsviashiparea' => 'ARTBSVIASHIPAREA',
        'shipvia.artbsviashiparea' => 'ARTBSVIASHIPAREA',
        'ShipviaTableMap::COL_ARTBSVIASHIPAREA' => 'ARTBSVIASHIPAREA',
        'COL_ARTBSVIASHIPAREA' => 'ARTBSVIASHIPAREA',
        'ArtbSviaShipArea' => 'ARTBSVIASHIPAREA',
        'ar_cust_svia.ArtbSviaShipArea' => 'ARTBSVIASHIPAREA',
        'Artbsviausesurchg' => 'ARTBSVIAUSESURCHG',
        'Shipvia.Artbsviausesurchg' => 'ARTBSVIAUSESURCHG',
        'artbsviausesurchg' => 'ARTBSVIAUSESURCHG',
        'shipvia.artbsviausesurchg' => 'ARTBSVIAUSESURCHG',
        'ShipviaTableMap::COL_ARTBSVIAUSESURCHG' => 'ARTBSVIAUSESURCHG',
        'COL_ARTBSVIAUSESURCHG' => 'ARTBSVIAUSESURCHG',
        'ArtbSviaUseSurchg' => 'ARTBSVIAUSESURCHG',
        'ar_cust_svia.ArtbSviaUseSurchg' => 'ARTBSVIAUSESURCHG',
        'Artbsviasurchgpct' => 'ARTBSVIASURCHGPCT',
        'Shipvia.Artbsviasurchgpct' => 'ARTBSVIASURCHGPCT',
        'artbsviasurchgpct' => 'ARTBSVIASURCHGPCT',
        'shipvia.artbsviasurchgpct' => 'ARTBSVIASURCHGPCT',
        'ShipviaTableMap::COL_ARTBSVIASURCHGPCT' => 'ARTBSVIASURCHGPCT',
        'COL_ARTBSVIASURCHGPCT' => 'ARTBSVIASURCHGPCT',
        'ArtbSviaSurchgPct' => 'ARTBSVIASURCHGPCT',
        'ar_cust_svia.ArtbSviaSurchgPct' => 'ARTBSVIASURCHGPCT',
        'Artbsviataxcode' => 'ARTBSVIATAXCODE',
        'Shipvia.Artbsviataxcode' => 'ARTBSVIATAXCODE',
        'artbsviataxcode' => 'ARTBSVIATAXCODE',
        'shipvia.artbsviataxcode' => 'ARTBSVIATAXCODE',
        'ShipviaTableMap::COL_ARTBSVIATAXCODE' => 'ARTBSVIATAXCODE',
        'COL_ARTBSVIATAXCODE' => 'ARTBSVIATAXCODE',
        'ArtbSviaTaxCode' => 'ARTBSVIATAXCODE',
        'ar_cust_svia.ArtbSviaTaxCode' => 'ARTBSVIATAXCODE',
        'Dateupdtd' => 'DATEUPDTD',
        'Shipvia.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'shipvia.dateupdtd' => 'DATEUPDTD',
        'ShipviaTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_cust_svia.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'Shipvia.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'shipvia.timeupdtd' => 'TIMEUPDTD',
        'ShipviaTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_cust_svia.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'Shipvia.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'shipvia.dummy' => 'DUMMY',
        'ShipviaTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_cust_svia.dummy' => 'DUMMY',
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
        $this->setName('ar_cust_svia');
        $this->setPhpName('Shipvia');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Shipvia');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbShipVia', 'Artbshipvia', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbSviaDesc', 'Artbsviadesc', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtbSviaPrio', 'Artbsviaprio', 'VARCHAR', false, 3, null);
        $this->addColumn('ArtbSviaWeb', 'Artbsviaweb', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaAir', 'Artbsviaair', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaUpsServ', 'Artbsviaupsserv', 'VARCHAR', false, 25, null);
        $this->addColumn('ArtbSviaUpsBilling', 'Artbsviaupsbilling', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaScacCd', 'Artbsviascaccd', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbSviaEdiMethCd', 'Artbsviaedimethcd', 'VARCHAR', false, 2, null);
        $this->addColumn('ArtbSviaUpsResidential', 'Artbsviaupsresidential', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaChrgFrt', 'Artbsviachrgfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaUseRoute', 'Artbsviauseroute', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaCommFrght', 'Artbsviacommfrght', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaShipArea', 'Artbsviashiparea', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaUseSurchg', 'Artbsviausesurchg', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbSviaSurchgPct', 'Artbsviasurchgpct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbSviaTaxCode', 'Artbsviataxcode', 'VARCHAR', false, 6, null);
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
        $this->addRelation('VendorShipfrom', '\\VendorShipfrom', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArtbSviaCode',
    1 => ':ArtbShipVia',
  ),
), null, null, 'VendorShipfroms', false);
        $this->addRelation('Vendor', '\\Vendor', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ApveSviaCode',
    1 => ':ArtbShipVia',
  ),
), null, null, 'Vendors', false);
        $this->addRelation('Customer', '\\Customer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArtbShipVia',
    1 => ':ArtbShipVia',
  ),
), null, null, 'Customers', false);
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArtbSviaCode',
    1 => ':ArtbShipVia',
  ),
), null, null, 'PurchaseOrders', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ShipviaTableMap::CLASS_DEFAULT : ShipviaTableMap::OM_CLASS;
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
     * @return array (Shipvia object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ShipviaTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ShipviaTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ShipviaTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ShipviaTableMap::OM_CLASS;
            /** @var Shipvia $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ShipviaTableMap::addInstanceToPool($obj, $key);
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
            $key = ShipviaTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ShipviaTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Shipvia $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ShipviaTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIADESC);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAPRIO);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAWEB);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAAIR);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAUPSSERV);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAUPSBILLING);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIASCACCD);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIACHRGFRT);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAUSEROUTE);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIASHIPAREA);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIAUSESURCHG);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIASURCHGPCT);
            $criteria->addSelectColumn(ShipviaTableMap::COL_ARTBSVIATAXCODE);
            $criteria->addSelectColumn(ShipviaTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ShipviaTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ShipviaTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArtbSviaDesc');
            $criteria->addSelectColumn($alias . '.ArtbSviaPrio');
            $criteria->addSelectColumn($alias . '.ArtbSviaWeb');
            $criteria->addSelectColumn($alias . '.ArtbSviaAir');
            $criteria->addSelectColumn($alias . '.ArtbSviaUpsServ');
            $criteria->addSelectColumn($alias . '.ArtbSviaUpsBilling');
            $criteria->addSelectColumn($alias . '.ArtbSviaScacCd');
            $criteria->addSelectColumn($alias . '.ArtbSviaEdiMethCd');
            $criteria->addSelectColumn($alias . '.ArtbSviaUpsResidential');
            $criteria->addSelectColumn($alias . '.ArtbSviaChrgFrt');
            $criteria->addSelectColumn($alias . '.ArtbSviaUseRoute');
            $criteria->addSelectColumn($alias . '.ArtbSviaCommFrght');
            $criteria->addSelectColumn($alias . '.ArtbSviaShipArea');
            $criteria->addSelectColumn($alias . '.ArtbSviaUseSurchg');
            $criteria->addSelectColumn($alias . '.ArtbSviaSurchgPct');
            $criteria->addSelectColumn($alias . '.ArtbSviaTaxCode');
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
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSHIPVIA);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIADESC);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAPRIO);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAWEB);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAAIR);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAUPSSERV);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAUPSBILLING);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIASCACCD);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIACHRGFRT);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAUSEROUTE);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIASHIPAREA);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIAUSESURCHG);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIASURCHGPCT);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_ARTBSVIATAXCODE);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ShipviaTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArtbShipVia');
            $criteria->removeSelectColumn($alias . '.ArtbSviaDesc');
            $criteria->removeSelectColumn($alias . '.ArtbSviaPrio');
            $criteria->removeSelectColumn($alias . '.ArtbSviaWeb');
            $criteria->removeSelectColumn($alias . '.ArtbSviaAir');
            $criteria->removeSelectColumn($alias . '.ArtbSviaUpsServ');
            $criteria->removeSelectColumn($alias . '.ArtbSviaUpsBilling');
            $criteria->removeSelectColumn($alias . '.ArtbSviaScacCd');
            $criteria->removeSelectColumn($alias . '.ArtbSviaEdiMethCd');
            $criteria->removeSelectColumn($alias . '.ArtbSviaUpsResidential');
            $criteria->removeSelectColumn($alias . '.ArtbSviaChrgFrt');
            $criteria->removeSelectColumn($alias . '.ArtbSviaUseRoute');
            $criteria->removeSelectColumn($alias . '.ArtbSviaCommFrght');
            $criteria->removeSelectColumn($alias . '.ArtbSviaShipArea');
            $criteria->removeSelectColumn($alias . '.ArtbSviaUseSurchg');
            $criteria->removeSelectColumn($alias . '.ArtbSviaSurchgPct');
            $criteria->removeSelectColumn($alias . '.ArtbSviaTaxCode');
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
        return Propel::getServiceContainer()->getDatabaseMap(ShipviaTableMap::DATABASE_NAME)->getTable(ShipviaTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Shipvia or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Shipvia object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ShipviaTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Shipvia) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ShipviaTableMap::DATABASE_NAME);
            $criteria->add(ShipviaTableMap::COL_ARTBSHIPVIA, (array) $values, Criteria::IN);
        }

        $query = ShipviaQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ShipviaTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ShipviaTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_svia table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ShipviaQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Shipvia or Criteria object.
     *
     * @param mixed $criteria Criteria or Shipvia object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ShipviaTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Shipvia object
        }


        // Set the correct dbName
        $query = ShipviaQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
