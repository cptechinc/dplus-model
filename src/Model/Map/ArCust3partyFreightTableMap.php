<?php

namespace Map;

use \ArCust3partyFreight;
use \ArCust3partyFreightQuery;
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
 * This class defines the structure of the 'ar_3party' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ArCust3partyFreightTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ArCust3partyFreightTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_3party';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ArCust3partyFreight';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ArCust3partyFreight';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ArCust3partyFreight';

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
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'ar_3party.ArcuCustId';

    /**
     * the column name for the Ar3pAcctNbr field
     */
    public const COL_AR3PACCTNBR = 'ar_3party.Ar3pAcctNbr';

    /**
     * the column name for the Ar3pName field
     */
    public const COL_AR3PNAME = 'ar_3party.Ar3pName';

    /**
     * the column name for the Ar3pAdr1 field
     */
    public const COL_AR3PADR1 = 'ar_3party.Ar3pAdr1';

    /**
     * the column name for the Ar3pAdr2 field
     */
    public const COL_AR3PADR2 = 'ar_3party.Ar3pAdr2';

    /**
     * the column name for the Ar3pAdr3 field
     */
    public const COL_AR3PADR3 = 'ar_3party.Ar3pAdr3';

    /**
     * the column name for the Ar3pCtry field
     */
    public const COL_AR3PCTRY = 'ar_3party.Ar3pCtry';

    /**
     * the column name for the Ar3pCity field
     */
    public const COL_AR3PCITY = 'ar_3party.Ar3pCity';

    /**
     * the column name for the Ar3pStat field
     */
    public const COL_AR3PSTAT = 'ar_3party.Ar3pStat';

    /**
     * the column name for the Ar3pZipCode field
     */
    public const COL_AR3PZIPCODE = 'ar_3party.Ar3pZipCode';

    /**
     * the column name for the Ar3pIntl field
     */
    public const COL_AR3PINTL = 'ar_3party.Ar3pIntl';

    /**
     * the column name for the Ar3pTeleNbr field
     */
    public const COL_AR3PTELENBR = 'ar_3party.Ar3pTeleNbr';

    /**
     * the column name for the Ar3pTeleExt field
     */
    public const COL_AR3PTELEEXT = 'ar_3party.Ar3pTeleExt';

    /**
     * the column name for the Ar3pItelNbr field
     */
    public const COL_AR3PITELNBR = 'ar_3party.Ar3pItelNbr';

    /**
     * the column name for the Ar3pItelExt field
     */
    public const COL_AR3PITELEXT = 'ar_3party.Ar3pItelExt';

    /**
     * the column name for the Ar3pFaxNbr field
     */
    public const COL_AR3PFAXNBR = 'ar_3party.Ar3pFaxNbr';

    /**
     * the column name for the Ar3pIfaxNbr field
     */
    public const COL_AR3PIFAXNBR = 'ar_3party.Ar3pIfaxNbr';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_3party.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_3party.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_3party.dummy';

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
        self::TYPE_PHPNAME       => ['Arcucustid', 'Ar3pacctnbr', 'Ar3pname', 'Ar3padr1', 'Ar3padr2', 'Ar3padr3', 'Ar3pctry', 'Ar3pcity', 'Ar3pstat', 'Ar3pzipcode', 'Ar3pintl', 'Ar3ptelenbr', 'Ar3pteleext', 'Ar3pitelnbr', 'Ar3pitelext', 'Ar3pfaxnbr', 'Ar3pifaxnbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['arcucustid', 'ar3pacctnbr', 'ar3pname', 'ar3padr1', 'ar3padr2', 'ar3padr3', 'ar3pctry', 'ar3pcity', 'ar3pstat', 'ar3pzipcode', 'ar3pintl', 'ar3ptelenbr', 'ar3pteleext', 'ar3pitelnbr', 'ar3pitelext', 'ar3pfaxnbr', 'ar3pifaxnbr', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ArCust3partyFreightTableMap::COL_ARCUCUSTID, ArCust3partyFreightTableMap::COL_AR3PACCTNBR, ArCust3partyFreightTableMap::COL_AR3PNAME, ArCust3partyFreightTableMap::COL_AR3PADR1, ArCust3partyFreightTableMap::COL_AR3PADR2, ArCust3partyFreightTableMap::COL_AR3PADR3, ArCust3partyFreightTableMap::COL_AR3PCTRY, ArCust3partyFreightTableMap::COL_AR3PCITY, ArCust3partyFreightTableMap::COL_AR3PSTAT, ArCust3partyFreightTableMap::COL_AR3PZIPCODE, ArCust3partyFreightTableMap::COL_AR3PINTL, ArCust3partyFreightTableMap::COL_AR3PTELENBR, ArCust3partyFreightTableMap::COL_AR3PTELEEXT, ArCust3partyFreightTableMap::COL_AR3PITELNBR, ArCust3partyFreightTableMap::COL_AR3PITELEXT, ArCust3partyFreightTableMap::COL_AR3PFAXNBR, ArCust3partyFreightTableMap::COL_AR3PIFAXNBR, ArCust3partyFreightTableMap::COL_DATEUPDTD, ArCust3partyFreightTableMap::COL_TIMEUPDTD, ArCust3partyFreightTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArcuCustId', 'Ar3pAcctNbr', 'Ar3pName', 'Ar3pAdr1', 'Ar3pAdr2', 'Ar3pAdr3', 'Ar3pCtry', 'Ar3pCity', 'Ar3pStat', 'Ar3pZipCode', 'Ar3pIntl', 'Ar3pTeleNbr', 'Ar3pTeleExt', 'Ar3pItelNbr', 'Ar3pItelExt', 'Ar3pFaxNbr', 'Ar3pIfaxNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Arcucustid' => 0, 'Ar3pacctnbr' => 1, 'Ar3pname' => 2, 'Ar3padr1' => 3, 'Ar3padr2' => 4, 'Ar3padr3' => 5, 'Ar3pctry' => 6, 'Ar3pcity' => 7, 'Ar3pstat' => 8, 'Ar3pzipcode' => 9, 'Ar3pintl' => 10, 'Ar3ptelenbr' => 11, 'Ar3pteleext' => 12, 'Ar3pitelnbr' => 13, 'Ar3pitelext' => 14, 'Ar3pfaxnbr' => 15, 'Ar3pifaxnbr' => 16, 'Dateupdtd' => 17, 'Timeupdtd' => 18, 'Dummy' => 19, ],
        self::TYPE_CAMELNAME     => ['arcucustid' => 0, 'ar3pacctnbr' => 1, 'ar3pname' => 2, 'ar3padr1' => 3, 'ar3padr2' => 4, 'ar3padr3' => 5, 'ar3pctry' => 6, 'ar3pcity' => 7, 'ar3pstat' => 8, 'ar3pzipcode' => 9, 'ar3pintl' => 10, 'ar3ptelenbr' => 11, 'ar3pteleext' => 12, 'ar3pitelnbr' => 13, 'ar3pitelext' => 14, 'ar3pfaxnbr' => 15, 'ar3pifaxnbr' => 16, 'dateupdtd' => 17, 'timeupdtd' => 18, 'dummy' => 19, ],
        self::TYPE_COLNAME       => [ArCust3partyFreightTableMap::COL_ARCUCUSTID => 0, ArCust3partyFreightTableMap::COL_AR3PACCTNBR => 1, ArCust3partyFreightTableMap::COL_AR3PNAME => 2, ArCust3partyFreightTableMap::COL_AR3PADR1 => 3, ArCust3partyFreightTableMap::COL_AR3PADR2 => 4, ArCust3partyFreightTableMap::COL_AR3PADR3 => 5, ArCust3partyFreightTableMap::COL_AR3PCTRY => 6, ArCust3partyFreightTableMap::COL_AR3PCITY => 7, ArCust3partyFreightTableMap::COL_AR3PSTAT => 8, ArCust3partyFreightTableMap::COL_AR3PZIPCODE => 9, ArCust3partyFreightTableMap::COL_AR3PINTL => 10, ArCust3partyFreightTableMap::COL_AR3PTELENBR => 11, ArCust3partyFreightTableMap::COL_AR3PTELEEXT => 12, ArCust3partyFreightTableMap::COL_AR3PITELNBR => 13, ArCust3partyFreightTableMap::COL_AR3PITELEXT => 14, ArCust3partyFreightTableMap::COL_AR3PFAXNBR => 15, ArCust3partyFreightTableMap::COL_AR3PIFAXNBR => 16, ArCust3partyFreightTableMap::COL_DATEUPDTD => 17, ArCust3partyFreightTableMap::COL_TIMEUPDTD => 18, ArCust3partyFreightTableMap::COL_DUMMY => 19, ],
        self::TYPE_FIELDNAME     => ['ArcuCustId' => 0, 'Ar3pAcctNbr' => 1, 'Ar3pName' => 2, 'Ar3pAdr1' => 3, 'Ar3pAdr2' => 4, 'Ar3pAdr3' => 5, 'Ar3pCtry' => 6, 'Ar3pCity' => 7, 'Ar3pStat' => 8, 'Ar3pZipCode' => 9, 'Ar3pIntl' => 10, 'Ar3pTeleNbr' => 11, 'Ar3pTeleExt' => 12, 'Ar3pItelNbr' => 13, 'Ar3pItelExt' => 14, 'Ar3pFaxNbr' => 15, 'Ar3pIfaxNbr' => 16, 'DateUpdtd' => 17, 'TimeUpdtd' => 18, 'dummy' => 19, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Arcucustid' => 'ARCUCUSTID',
        'ArCust3partyFreight.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'arCust3partyFreight.arcucustid' => 'ARCUCUSTID',
        'ArCust3partyFreightTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'ar_3party.ArcuCustId' => 'ARCUCUSTID',
        'Ar3pacctnbr' => 'AR3PACCTNBR',
        'ArCust3partyFreight.Ar3pacctnbr' => 'AR3PACCTNBR',
        'ar3pacctnbr' => 'AR3PACCTNBR',
        'arCust3partyFreight.ar3pacctnbr' => 'AR3PACCTNBR',
        'ArCust3partyFreightTableMap::COL_AR3PACCTNBR' => 'AR3PACCTNBR',
        'COL_AR3PACCTNBR' => 'AR3PACCTNBR',
        'Ar3pAcctNbr' => 'AR3PACCTNBR',
        'ar_3party.Ar3pAcctNbr' => 'AR3PACCTNBR',
        'Ar3pname' => 'AR3PNAME',
        'ArCust3partyFreight.Ar3pname' => 'AR3PNAME',
        'ar3pname' => 'AR3PNAME',
        'arCust3partyFreight.ar3pname' => 'AR3PNAME',
        'ArCust3partyFreightTableMap::COL_AR3PNAME' => 'AR3PNAME',
        'COL_AR3PNAME' => 'AR3PNAME',
        'Ar3pName' => 'AR3PNAME',
        'ar_3party.Ar3pName' => 'AR3PNAME',
        'Ar3padr1' => 'AR3PADR1',
        'ArCust3partyFreight.Ar3padr1' => 'AR3PADR1',
        'ar3padr1' => 'AR3PADR1',
        'arCust3partyFreight.ar3padr1' => 'AR3PADR1',
        'ArCust3partyFreightTableMap::COL_AR3PADR1' => 'AR3PADR1',
        'COL_AR3PADR1' => 'AR3PADR1',
        'Ar3pAdr1' => 'AR3PADR1',
        'ar_3party.Ar3pAdr1' => 'AR3PADR1',
        'Ar3padr2' => 'AR3PADR2',
        'ArCust3partyFreight.Ar3padr2' => 'AR3PADR2',
        'ar3padr2' => 'AR3PADR2',
        'arCust3partyFreight.ar3padr2' => 'AR3PADR2',
        'ArCust3partyFreightTableMap::COL_AR3PADR2' => 'AR3PADR2',
        'COL_AR3PADR2' => 'AR3PADR2',
        'Ar3pAdr2' => 'AR3PADR2',
        'ar_3party.Ar3pAdr2' => 'AR3PADR2',
        'Ar3padr3' => 'AR3PADR3',
        'ArCust3partyFreight.Ar3padr3' => 'AR3PADR3',
        'ar3padr3' => 'AR3PADR3',
        'arCust3partyFreight.ar3padr3' => 'AR3PADR3',
        'ArCust3partyFreightTableMap::COL_AR3PADR3' => 'AR3PADR3',
        'COL_AR3PADR3' => 'AR3PADR3',
        'Ar3pAdr3' => 'AR3PADR3',
        'ar_3party.Ar3pAdr3' => 'AR3PADR3',
        'Ar3pctry' => 'AR3PCTRY',
        'ArCust3partyFreight.Ar3pctry' => 'AR3PCTRY',
        'ar3pctry' => 'AR3PCTRY',
        'arCust3partyFreight.ar3pctry' => 'AR3PCTRY',
        'ArCust3partyFreightTableMap::COL_AR3PCTRY' => 'AR3PCTRY',
        'COL_AR3PCTRY' => 'AR3PCTRY',
        'Ar3pCtry' => 'AR3PCTRY',
        'ar_3party.Ar3pCtry' => 'AR3PCTRY',
        'Ar3pcity' => 'AR3PCITY',
        'ArCust3partyFreight.Ar3pcity' => 'AR3PCITY',
        'ar3pcity' => 'AR3PCITY',
        'arCust3partyFreight.ar3pcity' => 'AR3PCITY',
        'ArCust3partyFreightTableMap::COL_AR3PCITY' => 'AR3PCITY',
        'COL_AR3PCITY' => 'AR3PCITY',
        'Ar3pCity' => 'AR3PCITY',
        'ar_3party.Ar3pCity' => 'AR3PCITY',
        'Ar3pstat' => 'AR3PSTAT',
        'ArCust3partyFreight.Ar3pstat' => 'AR3PSTAT',
        'ar3pstat' => 'AR3PSTAT',
        'arCust3partyFreight.ar3pstat' => 'AR3PSTAT',
        'ArCust3partyFreightTableMap::COL_AR3PSTAT' => 'AR3PSTAT',
        'COL_AR3PSTAT' => 'AR3PSTAT',
        'Ar3pStat' => 'AR3PSTAT',
        'ar_3party.Ar3pStat' => 'AR3PSTAT',
        'Ar3pzipcode' => 'AR3PZIPCODE',
        'ArCust3partyFreight.Ar3pzipcode' => 'AR3PZIPCODE',
        'ar3pzipcode' => 'AR3PZIPCODE',
        'arCust3partyFreight.ar3pzipcode' => 'AR3PZIPCODE',
        'ArCust3partyFreightTableMap::COL_AR3PZIPCODE' => 'AR3PZIPCODE',
        'COL_AR3PZIPCODE' => 'AR3PZIPCODE',
        'Ar3pZipCode' => 'AR3PZIPCODE',
        'ar_3party.Ar3pZipCode' => 'AR3PZIPCODE',
        'Ar3pintl' => 'AR3PINTL',
        'ArCust3partyFreight.Ar3pintl' => 'AR3PINTL',
        'ar3pintl' => 'AR3PINTL',
        'arCust3partyFreight.ar3pintl' => 'AR3PINTL',
        'ArCust3partyFreightTableMap::COL_AR3PINTL' => 'AR3PINTL',
        'COL_AR3PINTL' => 'AR3PINTL',
        'Ar3pIntl' => 'AR3PINTL',
        'ar_3party.Ar3pIntl' => 'AR3PINTL',
        'Ar3ptelenbr' => 'AR3PTELENBR',
        'ArCust3partyFreight.Ar3ptelenbr' => 'AR3PTELENBR',
        'ar3ptelenbr' => 'AR3PTELENBR',
        'arCust3partyFreight.ar3ptelenbr' => 'AR3PTELENBR',
        'ArCust3partyFreightTableMap::COL_AR3PTELENBR' => 'AR3PTELENBR',
        'COL_AR3PTELENBR' => 'AR3PTELENBR',
        'Ar3pTeleNbr' => 'AR3PTELENBR',
        'ar_3party.Ar3pTeleNbr' => 'AR3PTELENBR',
        'Ar3pteleext' => 'AR3PTELEEXT',
        'ArCust3partyFreight.Ar3pteleext' => 'AR3PTELEEXT',
        'ar3pteleext' => 'AR3PTELEEXT',
        'arCust3partyFreight.ar3pteleext' => 'AR3PTELEEXT',
        'ArCust3partyFreightTableMap::COL_AR3PTELEEXT' => 'AR3PTELEEXT',
        'COL_AR3PTELEEXT' => 'AR3PTELEEXT',
        'Ar3pTeleExt' => 'AR3PTELEEXT',
        'ar_3party.Ar3pTeleExt' => 'AR3PTELEEXT',
        'Ar3pitelnbr' => 'AR3PITELNBR',
        'ArCust3partyFreight.Ar3pitelnbr' => 'AR3PITELNBR',
        'ar3pitelnbr' => 'AR3PITELNBR',
        'arCust3partyFreight.ar3pitelnbr' => 'AR3PITELNBR',
        'ArCust3partyFreightTableMap::COL_AR3PITELNBR' => 'AR3PITELNBR',
        'COL_AR3PITELNBR' => 'AR3PITELNBR',
        'Ar3pItelNbr' => 'AR3PITELNBR',
        'ar_3party.Ar3pItelNbr' => 'AR3PITELNBR',
        'Ar3pitelext' => 'AR3PITELEXT',
        'ArCust3partyFreight.Ar3pitelext' => 'AR3PITELEXT',
        'ar3pitelext' => 'AR3PITELEXT',
        'arCust3partyFreight.ar3pitelext' => 'AR3PITELEXT',
        'ArCust3partyFreightTableMap::COL_AR3PITELEXT' => 'AR3PITELEXT',
        'COL_AR3PITELEXT' => 'AR3PITELEXT',
        'Ar3pItelExt' => 'AR3PITELEXT',
        'ar_3party.Ar3pItelExt' => 'AR3PITELEXT',
        'Ar3pfaxnbr' => 'AR3PFAXNBR',
        'ArCust3partyFreight.Ar3pfaxnbr' => 'AR3PFAXNBR',
        'ar3pfaxnbr' => 'AR3PFAXNBR',
        'arCust3partyFreight.ar3pfaxnbr' => 'AR3PFAXNBR',
        'ArCust3partyFreightTableMap::COL_AR3PFAXNBR' => 'AR3PFAXNBR',
        'COL_AR3PFAXNBR' => 'AR3PFAXNBR',
        'Ar3pFaxNbr' => 'AR3PFAXNBR',
        'ar_3party.Ar3pFaxNbr' => 'AR3PFAXNBR',
        'Ar3pifaxnbr' => 'AR3PIFAXNBR',
        'ArCust3partyFreight.Ar3pifaxnbr' => 'AR3PIFAXNBR',
        'ar3pifaxnbr' => 'AR3PIFAXNBR',
        'arCust3partyFreight.ar3pifaxnbr' => 'AR3PIFAXNBR',
        'ArCust3partyFreightTableMap::COL_AR3PIFAXNBR' => 'AR3PIFAXNBR',
        'COL_AR3PIFAXNBR' => 'AR3PIFAXNBR',
        'Ar3pIfaxNbr' => 'AR3PIFAXNBR',
        'ar_3party.Ar3pIfaxNbr' => 'AR3PIFAXNBR',
        'Dateupdtd' => 'DATEUPDTD',
        'ArCust3partyFreight.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'arCust3partyFreight.dateupdtd' => 'DATEUPDTD',
        'ArCust3partyFreightTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_3party.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ArCust3partyFreight.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'arCust3partyFreight.timeupdtd' => 'TIMEUPDTD',
        'ArCust3partyFreightTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_3party.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ArCust3partyFreight.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'arCust3partyFreight.dummy' => 'DUMMY',
        'ArCust3partyFreightTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_3party.dummy' => 'DUMMY',
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
        $this->setName('ar_3party');
        $this->setPhpName('ArCust3partyFreight');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArCust3partyFreight');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addPrimaryKey('Ar3pAcctNbr', 'Ar3pacctnbr', 'VARCHAR', true, 10, '');
        $this->addColumn('Ar3pName', 'Ar3pname', 'VARCHAR', true, 30, '');
        $this->addColumn('Ar3pAdr1', 'Ar3padr1', 'VARCHAR', true, 30, '');
        $this->addColumn('Ar3pAdr2', 'Ar3padr2', 'VARCHAR', true, 30, '');
        $this->addColumn('Ar3pAdr3', 'Ar3padr3', 'VARCHAR', true, 30, '');
        $this->addColumn('Ar3pCtry', 'Ar3pctry', 'VARCHAR', true, 4, '');
        $this->addColumn('Ar3pCity', 'Ar3pcity', 'VARCHAR', true, 16, '');
        $this->addColumn('Ar3pStat', 'Ar3pstat', 'VARCHAR', true, 2, '');
        $this->addColumn('Ar3pZipCode', 'Ar3pzipcode', 'VARCHAR', true, 10, '');
        $this->addColumn('Ar3pIntl', 'Ar3pintl', 'VARCHAR', true, 1, 'N');
        $this->addColumn('Ar3pTeleNbr', 'Ar3ptelenbr', 'VARCHAR', true, 10, '');
        $this->addColumn('Ar3pTeleExt', 'Ar3pteleext', 'VARCHAR', true, 7, '');
        $this->addColumn('Ar3pItelNbr', 'Ar3pitelnbr', 'VARCHAR', true, 22, '');
        $this->addColumn('Ar3pItelExt', 'Ar3pitelext', 'VARCHAR', true, 7, '');
        $this->addColumn('Ar3pFaxNbr', 'Ar3pfaxnbr', 'VARCHAR', true, 10, '');
        $this->addColumn('Ar3pIfaxNbr', 'Ar3pifaxnbr', 'VARCHAR', true, 22, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
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
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ArCust3partyFreight $obj A \ArCust3partyFreight object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ArCust3partyFreight $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getAr3pacctnbr() || is_scalar($obj->getAr3pacctnbr()) || is_callable([$obj->getAr3pacctnbr(), '__toString']) ? (string) $obj->getAr3pacctnbr() : $obj->getAr3pacctnbr())]);
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
     * @param mixed $value A \ArCust3partyFreight object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ArCust3partyFreight) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getAr3pacctnbr() || is_scalar($value->getAr3pacctnbr()) || is_callable([$value->getAr3pacctnbr(), '__toString']) ? (string) $value->getAr3pacctnbr() : $value->getAr3pacctnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ArCust3partyFreight object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Ar3pacctnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArCust3partyFreightTableMap::CLASS_DEFAULT : ArCust3partyFreightTableMap::OM_CLASS;
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
     * @return array (ArCust3partyFreight object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ArCust3partyFreightTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArCust3partyFreightTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArCust3partyFreightTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArCust3partyFreightTableMap::OM_CLASS;
            /** @var ArCust3partyFreight $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArCust3partyFreightTableMap::addInstanceToPool($obj, $key);
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
            $key = ArCust3partyFreightTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArCust3partyFreightTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArCust3partyFreight $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArCust3partyFreightTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PACCTNBR);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PNAME);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PADR1);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PADR2);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PADR3);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PCTRY);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PCITY);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PSTAT);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PZIPCODE);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PINTL);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PTELENBR);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PTELEEXT);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PITELNBR);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PITELEXT);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PFAXNBR);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArCust3partyFreightTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.Ar3pAcctNbr');
            $criteria->addSelectColumn($alias . '.Ar3pName');
            $criteria->addSelectColumn($alias . '.Ar3pAdr1');
            $criteria->addSelectColumn($alias . '.Ar3pAdr2');
            $criteria->addSelectColumn($alias . '.Ar3pAdr3');
            $criteria->addSelectColumn($alias . '.Ar3pCtry');
            $criteria->addSelectColumn($alias . '.Ar3pCity');
            $criteria->addSelectColumn($alias . '.Ar3pStat');
            $criteria->addSelectColumn($alias . '.Ar3pZipCode');
            $criteria->addSelectColumn($alias . '.Ar3pIntl');
            $criteria->addSelectColumn($alias . '.Ar3pTeleNbr');
            $criteria->addSelectColumn($alias . '.Ar3pTeleExt');
            $criteria->addSelectColumn($alias . '.Ar3pItelNbr');
            $criteria->addSelectColumn($alias . '.Ar3pItelExt');
            $criteria->addSelectColumn($alias . '.Ar3pFaxNbr');
            $criteria->addSelectColumn($alias . '.Ar3pIfaxNbr');
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
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PACCTNBR);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PNAME);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PADR1);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PADR2);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PADR3);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PCTRY);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PCITY);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PSTAT);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PZIPCODE);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PINTL);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PTELENBR);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PTELEEXT);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PITELNBR);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PITELEXT);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PFAXNBR);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ArCust3partyFreightTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.Ar3pAcctNbr');
            $criteria->removeSelectColumn($alias . '.Ar3pName');
            $criteria->removeSelectColumn($alias . '.Ar3pAdr1');
            $criteria->removeSelectColumn($alias . '.Ar3pAdr2');
            $criteria->removeSelectColumn($alias . '.Ar3pAdr3');
            $criteria->removeSelectColumn($alias . '.Ar3pCtry');
            $criteria->removeSelectColumn($alias . '.Ar3pCity');
            $criteria->removeSelectColumn($alias . '.Ar3pStat');
            $criteria->removeSelectColumn($alias . '.Ar3pZipCode');
            $criteria->removeSelectColumn($alias . '.Ar3pIntl');
            $criteria->removeSelectColumn($alias . '.Ar3pTeleNbr');
            $criteria->removeSelectColumn($alias . '.Ar3pTeleExt');
            $criteria->removeSelectColumn($alias . '.Ar3pItelNbr');
            $criteria->removeSelectColumn($alias . '.Ar3pItelExt');
            $criteria->removeSelectColumn($alias . '.Ar3pFaxNbr');
            $criteria->removeSelectColumn($alias . '.Ar3pIfaxNbr');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArCust3partyFreightTableMap::DATABASE_NAME)->getTable(ArCust3partyFreightTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ArCust3partyFreight or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ArCust3partyFreight object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArCust3partyFreight) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArCust3partyFreightTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = ArCust3partyFreightQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArCust3partyFreightTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArCust3partyFreightTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_3party table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ArCust3partyFreightQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArCust3partyFreight or Criteria object.
     *
     * @param mixed $criteria Criteria or ArCust3partyFreight object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArCust3partyFreight object
        }


        // Set the correct dbName
        $query = ArCust3partyFreightQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
