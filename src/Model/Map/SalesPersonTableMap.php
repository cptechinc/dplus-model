<?php

namespace Map;

use \SalesPerson;
use \SalesPersonQuery;
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
 * This class defines the structure of the 'ar_saleper1' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SalesPersonTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.SalesPersonTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_saleper1';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SalesPerson';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\SalesPerson';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'SalesPerson';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the ArspSalePer1 field
     */
    public const COL_ARSPSALEPER1 = 'ar_saleper1.ArspSalePer1';

    /**
     * the column name for the ArspName field
     */
    public const COL_ARSPNAME = 'ar_saleper1.ArspName';

    /**
     * the column name for the ArspMtdSale field
     */
    public const COL_ARSPMTDSALE = 'ar_saleper1.ArspMtdSale';

    /**
     * the column name for the ArspYtdSale field
     */
    public const COL_ARSPYTDSALE = 'ar_saleper1.ArspYtdSale';

    /**
     * the column name for the ArspLtdSale field
     */
    public const COL_ARSPLTDSALE = 'ar_saleper1.ArspLtdSale';

    /**
     * the column name for the ArspLastSaleDate field
     */
    public const COL_ARSPLASTSALEDATE = 'ar_saleper1.ArspLastSaleDate';

    /**
     * the column name for the ArspMtdCommEarn field
     */
    public const COL_ARSPMTDCOMMEARN = 'ar_saleper1.ArspMtdCommEarn';

    /**
     * the column name for the ArspYtdCommEarn field
     */
    public const COL_ARSPYTDCOMMEARN = 'ar_saleper1.ArspYtdCommEarn';

    /**
     * the column name for the ArspLtdCommEarn field
     */
    public const COL_ARSPLTDCOMMEARN = 'ar_saleper1.ArspLtdCommEarn';

    /**
     * the column name for the ArspMtdCommPaid field
     */
    public const COL_ARSPMTDCOMMPAID = 'ar_saleper1.ArspMtdCommPaid';

    /**
     * the column name for the ArspYtdCommPaid field
     */
    public const COL_ARSPYTDCOMMPAID = 'ar_saleper1.ArspYtdCommPaid';

    /**
     * the column name for the ArspLtdCommPaid field
     */
    public const COL_ARSPLTDCOMMPAID = 'ar_saleper1.ArspLtdCommPaid';

    /**
     * the column name for the ArspCommCycle field
     */
    public const COL_ARSPCOMMCYCLE = 'ar_saleper1.ArspCommCycle';

    /**
     * the column name for the ArspGrup field
     */
    public const COL_ARSPGRUP = 'ar_saleper1.ArspGrup';

    /**
     * the column name for the ArspLogin field
     */
    public const COL_ARSPLOGIN = 'ar_saleper1.ArspLogin';

    /**
     * the column name for the ArspMgr field
     */
    public const COL_ARSPMGR = 'ar_saleper1.ArspMgr';

    /**
     * the column name for the ArspVendId field
     */
    public const COL_ARSPVENDID = 'ar_saleper1.ArspVendId';

    /**
     * the column name for the ArspRestrictAccess field
     */
    public const COL_ARSPRESTRICTACCESS = 'ar_saleper1.ArspRestrictAccess';

    /**
     * the column name for the ArspEmailAddr field
     */
    public const COL_ARSPEMAILADDR = 'ar_saleper1.ArspEmailAddr';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_saleper1.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_saleper1.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_saleper1.dummy';

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
        self::TYPE_PHPNAME       => ['Arspsaleper1', 'Arspname', 'Arspmtdsale', 'Arspytdsale', 'Arspltdsale', 'Arsplastsaledate', 'Arspmtdcommearn', 'Arspytdcommearn', 'Arspltdcommearn', 'Arspmtdcommpaid', 'Arspytdcommpaid', 'Arspltdcommpaid', 'Arspcommcycle', 'Arspgrup', 'Arsplogin', 'Arspmgr', 'Arspvendid', 'Arsprestrictaccess', 'Arspemailaddr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['arspsaleper1', 'arspname', 'arspmtdsale', 'arspytdsale', 'arspltdsale', 'arsplastsaledate', 'arspmtdcommearn', 'arspytdcommearn', 'arspltdcommearn', 'arspmtdcommpaid', 'arspytdcommpaid', 'arspltdcommpaid', 'arspcommcycle', 'arspgrup', 'arsplogin', 'arspmgr', 'arspvendid', 'arsprestrictaccess', 'arspemailaddr', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [SalesPersonTableMap::COL_ARSPSALEPER1, SalesPersonTableMap::COL_ARSPNAME, SalesPersonTableMap::COL_ARSPMTDSALE, SalesPersonTableMap::COL_ARSPYTDSALE, SalesPersonTableMap::COL_ARSPLTDSALE, SalesPersonTableMap::COL_ARSPLASTSALEDATE, SalesPersonTableMap::COL_ARSPMTDCOMMEARN, SalesPersonTableMap::COL_ARSPYTDCOMMEARN, SalesPersonTableMap::COL_ARSPLTDCOMMEARN, SalesPersonTableMap::COL_ARSPMTDCOMMPAID, SalesPersonTableMap::COL_ARSPYTDCOMMPAID, SalesPersonTableMap::COL_ARSPLTDCOMMPAID, SalesPersonTableMap::COL_ARSPCOMMCYCLE, SalesPersonTableMap::COL_ARSPGRUP, SalesPersonTableMap::COL_ARSPLOGIN, SalesPersonTableMap::COL_ARSPMGR, SalesPersonTableMap::COL_ARSPVENDID, SalesPersonTableMap::COL_ARSPRESTRICTACCESS, SalesPersonTableMap::COL_ARSPEMAILADDR, SalesPersonTableMap::COL_DATEUPDTD, SalesPersonTableMap::COL_TIMEUPDTD, SalesPersonTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArspSalePer1', 'ArspName', 'ArspMtdSale', 'ArspYtdSale', 'ArspLtdSale', 'ArspLastSaleDate', 'ArspMtdCommEarn', 'ArspYtdCommEarn', 'ArspLtdCommEarn', 'ArspMtdCommPaid', 'ArspYtdCommPaid', 'ArspLtdCommPaid', 'ArspCommCycle', 'ArspGrup', 'ArspLogin', 'ArspMgr', 'ArspVendId', 'ArspRestrictAccess', 'ArspEmailAddr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, ]
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
        self::TYPE_PHPNAME       => ['Arspsaleper1' => 0, 'Arspname' => 1, 'Arspmtdsale' => 2, 'Arspytdsale' => 3, 'Arspltdsale' => 4, 'Arsplastsaledate' => 5, 'Arspmtdcommearn' => 6, 'Arspytdcommearn' => 7, 'Arspltdcommearn' => 8, 'Arspmtdcommpaid' => 9, 'Arspytdcommpaid' => 10, 'Arspltdcommpaid' => 11, 'Arspcommcycle' => 12, 'Arspgrup' => 13, 'Arsplogin' => 14, 'Arspmgr' => 15, 'Arspvendid' => 16, 'Arsprestrictaccess' => 17, 'Arspemailaddr' => 18, 'Dateupdtd' => 19, 'Timeupdtd' => 20, 'Dummy' => 21, ],
        self::TYPE_CAMELNAME     => ['arspsaleper1' => 0, 'arspname' => 1, 'arspmtdsale' => 2, 'arspytdsale' => 3, 'arspltdsale' => 4, 'arsplastsaledate' => 5, 'arspmtdcommearn' => 6, 'arspytdcommearn' => 7, 'arspltdcommearn' => 8, 'arspmtdcommpaid' => 9, 'arspytdcommpaid' => 10, 'arspltdcommpaid' => 11, 'arspcommcycle' => 12, 'arspgrup' => 13, 'arsplogin' => 14, 'arspmgr' => 15, 'arspvendid' => 16, 'arsprestrictaccess' => 17, 'arspemailaddr' => 18, 'dateupdtd' => 19, 'timeupdtd' => 20, 'dummy' => 21, ],
        self::TYPE_COLNAME       => [SalesPersonTableMap::COL_ARSPSALEPER1 => 0, SalesPersonTableMap::COL_ARSPNAME => 1, SalesPersonTableMap::COL_ARSPMTDSALE => 2, SalesPersonTableMap::COL_ARSPYTDSALE => 3, SalesPersonTableMap::COL_ARSPLTDSALE => 4, SalesPersonTableMap::COL_ARSPLASTSALEDATE => 5, SalesPersonTableMap::COL_ARSPMTDCOMMEARN => 6, SalesPersonTableMap::COL_ARSPYTDCOMMEARN => 7, SalesPersonTableMap::COL_ARSPLTDCOMMEARN => 8, SalesPersonTableMap::COL_ARSPMTDCOMMPAID => 9, SalesPersonTableMap::COL_ARSPYTDCOMMPAID => 10, SalesPersonTableMap::COL_ARSPLTDCOMMPAID => 11, SalesPersonTableMap::COL_ARSPCOMMCYCLE => 12, SalesPersonTableMap::COL_ARSPGRUP => 13, SalesPersonTableMap::COL_ARSPLOGIN => 14, SalesPersonTableMap::COL_ARSPMGR => 15, SalesPersonTableMap::COL_ARSPVENDID => 16, SalesPersonTableMap::COL_ARSPRESTRICTACCESS => 17, SalesPersonTableMap::COL_ARSPEMAILADDR => 18, SalesPersonTableMap::COL_DATEUPDTD => 19, SalesPersonTableMap::COL_TIMEUPDTD => 20, SalesPersonTableMap::COL_DUMMY => 21, ],
        self::TYPE_FIELDNAME     => ['ArspSalePer1' => 0, 'ArspName' => 1, 'ArspMtdSale' => 2, 'ArspYtdSale' => 3, 'ArspLtdSale' => 4, 'ArspLastSaleDate' => 5, 'ArspMtdCommEarn' => 6, 'ArspYtdCommEarn' => 7, 'ArspLtdCommEarn' => 8, 'ArspMtdCommPaid' => 9, 'ArspYtdCommPaid' => 10, 'ArspLtdCommPaid' => 11, 'ArspCommCycle' => 12, 'ArspGrup' => 13, 'ArspLogin' => 14, 'ArspMgr' => 15, 'ArspVendId' => 16, 'ArspRestrictAccess' => 17, 'ArspEmailAddr' => 18, 'DateUpdtd' => 19, 'TimeUpdtd' => 20, 'dummy' => 21, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Arspsaleper1' => 'ARSPSALEPER1',
        'SalesPerson.Arspsaleper1' => 'ARSPSALEPER1',
        'arspsaleper1' => 'ARSPSALEPER1',
        'salesPerson.arspsaleper1' => 'ARSPSALEPER1',
        'SalesPersonTableMap::COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'ArspSalePer1' => 'ARSPSALEPER1',
        'ar_saleper1.ArspSalePer1' => 'ARSPSALEPER1',
        'Arspname' => 'ARSPNAME',
        'SalesPerson.Arspname' => 'ARSPNAME',
        'arspname' => 'ARSPNAME',
        'salesPerson.arspname' => 'ARSPNAME',
        'SalesPersonTableMap::COL_ARSPNAME' => 'ARSPNAME',
        'COL_ARSPNAME' => 'ARSPNAME',
        'ArspName' => 'ARSPNAME',
        'ar_saleper1.ArspName' => 'ARSPNAME',
        'Arspmtdsale' => 'ARSPMTDSALE',
        'SalesPerson.Arspmtdsale' => 'ARSPMTDSALE',
        'arspmtdsale' => 'ARSPMTDSALE',
        'salesPerson.arspmtdsale' => 'ARSPMTDSALE',
        'SalesPersonTableMap::COL_ARSPMTDSALE' => 'ARSPMTDSALE',
        'COL_ARSPMTDSALE' => 'ARSPMTDSALE',
        'ArspMtdSale' => 'ARSPMTDSALE',
        'ar_saleper1.ArspMtdSale' => 'ARSPMTDSALE',
        'Arspytdsale' => 'ARSPYTDSALE',
        'SalesPerson.Arspytdsale' => 'ARSPYTDSALE',
        'arspytdsale' => 'ARSPYTDSALE',
        'salesPerson.arspytdsale' => 'ARSPYTDSALE',
        'SalesPersonTableMap::COL_ARSPYTDSALE' => 'ARSPYTDSALE',
        'COL_ARSPYTDSALE' => 'ARSPYTDSALE',
        'ArspYtdSale' => 'ARSPYTDSALE',
        'ar_saleper1.ArspYtdSale' => 'ARSPYTDSALE',
        'Arspltdsale' => 'ARSPLTDSALE',
        'SalesPerson.Arspltdsale' => 'ARSPLTDSALE',
        'arspltdsale' => 'ARSPLTDSALE',
        'salesPerson.arspltdsale' => 'ARSPLTDSALE',
        'SalesPersonTableMap::COL_ARSPLTDSALE' => 'ARSPLTDSALE',
        'COL_ARSPLTDSALE' => 'ARSPLTDSALE',
        'ArspLtdSale' => 'ARSPLTDSALE',
        'ar_saleper1.ArspLtdSale' => 'ARSPLTDSALE',
        'Arsplastsaledate' => 'ARSPLASTSALEDATE',
        'SalesPerson.Arsplastsaledate' => 'ARSPLASTSALEDATE',
        'arsplastsaledate' => 'ARSPLASTSALEDATE',
        'salesPerson.arsplastsaledate' => 'ARSPLASTSALEDATE',
        'SalesPersonTableMap::COL_ARSPLASTSALEDATE' => 'ARSPLASTSALEDATE',
        'COL_ARSPLASTSALEDATE' => 'ARSPLASTSALEDATE',
        'ArspLastSaleDate' => 'ARSPLASTSALEDATE',
        'ar_saleper1.ArspLastSaleDate' => 'ARSPLASTSALEDATE',
        'Arspmtdcommearn' => 'ARSPMTDCOMMEARN',
        'SalesPerson.Arspmtdcommearn' => 'ARSPMTDCOMMEARN',
        'arspmtdcommearn' => 'ARSPMTDCOMMEARN',
        'salesPerson.arspmtdcommearn' => 'ARSPMTDCOMMEARN',
        'SalesPersonTableMap::COL_ARSPMTDCOMMEARN' => 'ARSPMTDCOMMEARN',
        'COL_ARSPMTDCOMMEARN' => 'ARSPMTDCOMMEARN',
        'ArspMtdCommEarn' => 'ARSPMTDCOMMEARN',
        'ar_saleper1.ArspMtdCommEarn' => 'ARSPMTDCOMMEARN',
        'Arspytdcommearn' => 'ARSPYTDCOMMEARN',
        'SalesPerson.Arspytdcommearn' => 'ARSPYTDCOMMEARN',
        'arspytdcommearn' => 'ARSPYTDCOMMEARN',
        'salesPerson.arspytdcommearn' => 'ARSPYTDCOMMEARN',
        'SalesPersonTableMap::COL_ARSPYTDCOMMEARN' => 'ARSPYTDCOMMEARN',
        'COL_ARSPYTDCOMMEARN' => 'ARSPYTDCOMMEARN',
        'ArspYtdCommEarn' => 'ARSPYTDCOMMEARN',
        'ar_saleper1.ArspYtdCommEarn' => 'ARSPYTDCOMMEARN',
        'Arspltdcommearn' => 'ARSPLTDCOMMEARN',
        'SalesPerson.Arspltdcommearn' => 'ARSPLTDCOMMEARN',
        'arspltdcommearn' => 'ARSPLTDCOMMEARN',
        'salesPerson.arspltdcommearn' => 'ARSPLTDCOMMEARN',
        'SalesPersonTableMap::COL_ARSPLTDCOMMEARN' => 'ARSPLTDCOMMEARN',
        'COL_ARSPLTDCOMMEARN' => 'ARSPLTDCOMMEARN',
        'ArspLtdCommEarn' => 'ARSPLTDCOMMEARN',
        'ar_saleper1.ArspLtdCommEarn' => 'ARSPLTDCOMMEARN',
        'Arspmtdcommpaid' => 'ARSPMTDCOMMPAID',
        'SalesPerson.Arspmtdcommpaid' => 'ARSPMTDCOMMPAID',
        'arspmtdcommpaid' => 'ARSPMTDCOMMPAID',
        'salesPerson.arspmtdcommpaid' => 'ARSPMTDCOMMPAID',
        'SalesPersonTableMap::COL_ARSPMTDCOMMPAID' => 'ARSPMTDCOMMPAID',
        'COL_ARSPMTDCOMMPAID' => 'ARSPMTDCOMMPAID',
        'ArspMtdCommPaid' => 'ARSPMTDCOMMPAID',
        'ar_saleper1.ArspMtdCommPaid' => 'ARSPMTDCOMMPAID',
        'Arspytdcommpaid' => 'ARSPYTDCOMMPAID',
        'SalesPerson.Arspytdcommpaid' => 'ARSPYTDCOMMPAID',
        'arspytdcommpaid' => 'ARSPYTDCOMMPAID',
        'salesPerson.arspytdcommpaid' => 'ARSPYTDCOMMPAID',
        'SalesPersonTableMap::COL_ARSPYTDCOMMPAID' => 'ARSPYTDCOMMPAID',
        'COL_ARSPYTDCOMMPAID' => 'ARSPYTDCOMMPAID',
        'ArspYtdCommPaid' => 'ARSPYTDCOMMPAID',
        'ar_saleper1.ArspYtdCommPaid' => 'ARSPYTDCOMMPAID',
        'Arspltdcommpaid' => 'ARSPLTDCOMMPAID',
        'SalesPerson.Arspltdcommpaid' => 'ARSPLTDCOMMPAID',
        'arspltdcommpaid' => 'ARSPLTDCOMMPAID',
        'salesPerson.arspltdcommpaid' => 'ARSPLTDCOMMPAID',
        'SalesPersonTableMap::COL_ARSPLTDCOMMPAID' => 'ARSPLTDCOMMPAID',
        'COL_ARSPLTDCOMMPAID' => 'ARSPLTDCOMMPAID',
        'ArspLtdCommPaid' => 'ARSPLTDCOMMPAID',
        'ar_saleper1.ArspLtdCommPaid' => 'ARSPLTDCOMMPAID',
        'Arspcommcycle' => 'ARSPCOMMCYCLE',
        'SalesPerson.Arspcommcycle' => 'ARSPCOMMCYCLE',
        'arspcommcycle' => 'ARSPCOMMCYCLE',
        'salesPerson.arspcommcycle' => 'ARSPCOMMCYCLE',
        'SalesPersonTableMap::COL_ARSPCOMMCYCLE' => 'ARSPCOMMCYCLE',
        'COL_ARSPCOMMCYCLE' => 'ARSPCOMMCYCLE',
        'ArspCommCycle' => 'ARSPCOMMCYCLE',
        'ar_saleper1.ArspCommCycle' => 'ARSPCOMMCYCLE',
        'Arspgrup' => 'ARSPGRUP',
        'SalesPerson.Arspgrup' => 'ARSPGRUP',
        'arspgrup' => 'ARSPGRUP',
        'salesPerson.arspgrup' => 'ARSPGRUP',
        'SalesPersonTableMap::COL_ARSPGRUP' => 'ARSPGRUP',
        'COL_ARSPGRUP' => 'ARSPGRUP',
        'ArspGrup' => 'ARSPGRUP',
        'ar_saleper1.ArspGrup' => 'ARSPGRUP',
        'Arsplogin' => 'ARSPLOGIN',
        'SalesPerson.Arsplogin' => 'ARSPLOGIN',
        'arsplogin' => 'ARSPLOGIN',
        'salesPerson.arsplogin' => 'ARSPLOGIN',
        'SalesPersonTableMap::COL_ARSPLOGIN' => 'ARSPLOGIN',
        'COL_ARSPLOGIN' => 'ARSPLOGIN',
        'ArspLogin' => 'ARSPLOGIN',
        'ar_saleper1.ArspLogin' => 'ARSPLOGIN',
        'Arspmgr' => 'ARSPMGR',
        'SalesPerson.Arspmgr' => 'ARSPMGR',
        'arspmgr' => 'ARSPMGR',
        'salesPerson.arspmgr' => 'ARSPMGR',
        'SalesPersonTableMap::COL_ARSPMGR' => 'ARSPMGR',
        'COL_ARSPMGR' => 'ARSPMGR',
        'ArspMgr' => 'ARSPMGR',
        'ar_saleper1.ArspMgr' => 'ARSPMGR',
        'Arspvendid' => 'ARSPVENDID',
        'SalesPerson.Arspvendid' => 'ARSPVENDID',
        'arspvendid' => 'ARSPVENDID',
        'salesPerson.arspvendid' => 'ARSPVENDID',
        'SalesPersonTableMap::COL_ARSPVENDID' => 'ARSPVENDID',
        'COL_ARSPVENDID' => 'ARSPVENDID',
        'ArspVendId' => 'ARSPVENDID',
        'ar_saleper1.ArspVendId' => 'ARSPVENDID',
        'Arsprestrictaccess' => 'ARSPRESTRICTACCESS',
        'SalesPerson.Arsprestrictaccess' => 'ARSPRESTRICTACCESS',
        'arsprestrictaccess' => 'ARSPRESTRICTACCESS',
        'salesPerson.arsprestrictaccess' => 'ARSPRESTRICTACCESS',
        'SalesPersonTableMap::COL_ARSPRESTRICTACCESS' => 'ARSPRESTRICTACCESS',
        'COL_ARSPRESTRICTACCESS' => 'ARSPRESTRICTACCESS',
        'ArspRestrictAccess' => 'ARSPRESTRICTACCESS',
        'ar_saleper1.ArspRestrictAccess' => 'ARSPRESTRICTACCESS',
        'Arspemailaddr' => 'ARSPEMAILADDR',
        'SalesPerson.Arspemailaddr' => 'ARSPEMAILADDR',
        'arspemailaddr' => 'ARSPEMAILADDR',
        'salesPerson.arspemailaddr' => 'ARSPEMAILADDR',
        'SalesPersonTableMap::COL_ARSPEMAILADDR' => 'ARSPEMAILADDR',
        'COL_ARSPEMAILADDR' => 'ARSPEMAILADDR',
        'ArspEmailAddr' => 'ARSPEMAILADDR',
        'ar_saleper1.ArspEmailAddr' => 'ARSPEMAILADDR',
        'Dateupdtd' => 'DATEUPDTD',
        'SalesPerson.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'salesPerson.dateupdtd' => 'DATEUPDTD',
        'SalesPersonTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_saleper1.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'SalesPerson.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'salesPerson.timeupdtd' => 'TIMEUPDTD',
        'SalesPersonTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_saleper1.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'SalesPerson.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'salesPerson.dummy' => 'DUMMY',
        'SalesPersonTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_saleper1.dummy' => 'DUMMY',
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
        $this->setName('ar_saleper1');
        $this->setPhpName('SalesPerson');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesPerson');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', true, 6, '');
        $this->addColumn('ArspName', 'Arspname', 'VARCHAR', false, 30, null);
        $this->addColumn('ArspMtdSale', 'Arspmtdsale', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspYtdSale', 'Arspytdsale', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLtdSale', 'Arspltdsale', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLastSaleDate', 'Arsplastsaledate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArspMtdCommEarn', 'Arspmtdcommearn', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspYtdCommEarn', 'Arspytdcommearn', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLtdCommEarn', 'Arspltdcommearn', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspMtdCommPaid', 'Arspmtdcommpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspYtdCommPaid', 'Arspytdcommpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLtdCommPaid', 'Arspltdcommpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspCommCycle', 'Arspcommcycle', 'VARCHAR', false, 2, null);
        $this->addColumn('ArspGrup', 'Arspgrup', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspLogin', 'Arsplogin', 'VARCHAR', false, 12, null);
        $this->addColumn('ArspMgr', 'Arspmgr', 'VARCHAR', false, 1, null);
        $this->addColumn('ArspVendId', 'Arspvendid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspRestrictAccess', 'Arsprestrictaccess', 'VARCHAR', false, 1, null);
        $this->addColumn('ArspEmailAddr', 'Arspemailaddr', 'VARCHAR', false, 40, null);
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
        $this->addRelation('BookingDayCustomer', '\\BookingDayCustomer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
  ),
), null, null, 'BookingDayCustomers', false);
        $this->addRelation('BookingDayDetail', '\\BookingDayDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
  ),
), null, null, 'BookingDayDetails', false);
        $this->addRelation('BookingDayRep', '\\BookingDayRep', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
  ),
), null, null, 'BookingDayReps', false);
        $this->addRelation('BookingSummaryRep', '\\BookingSummaryRep', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
  ),
), null, null, 'BookingSummaryReps', false);
        $this->addRelation('Booking', '\\Booking', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
  ),
), null, null, 'Bookings', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesPersonTableMap::CLASS_DEFAULT : SalesPersonTableMap::OM_CLASS;
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
     * @return array (SalesPerson object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SalesPersonTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesPersonTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesPersonTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesPersonTableMap::OM_CLASS;
            /** @var SalesPerson $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesPersonTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesPersonTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesPersonTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesPerson $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesPersonTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPNAME);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPMTDSALE);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPYTDSALE);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPLTDSALE);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPLASTSALEDATE);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPMTDCOMMEARN);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPYTDCOMMEARN);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPLTDCOMMEARN);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPMTDCOMMPAID);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPYTDCOMMPAID);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPLTDCOMMPAID);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPCOMMCYCLE);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPGRUP);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPLOGIN);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPMGR);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPVENDID);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPRESTRICTACCESS);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_ARSPEMAILADDR);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesPersonTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.ArspName');
            $criteria->addSelectColumn($alias . '.ArspMtdSale');
            $criteria->addSelectColumn($alias . '.ArspYtdSale');
            $criteria->addSelectColumn($alias . '.ArspLtdSale');
            $criteria->addSelectColumn($alias . '.ArspLastSaleDate');
            $criteria->addSelectColumn($alias . '.ArspMtdCommEarn');
            $criteria->addSelectColumn($alias . '.ArspYtdCommEarn');
            $criteria->addSelectColumn($alias . '.ArspLtdCommEarn');
            $criteria->addSelectColumn($alias . '.ArspMtdCommPaid');
            $criteria->addSelectColumn($alias . '.ArspYtdCommPaid');
            $criteria->addSelectColumn($alias . '.ArspLtdCommPaid');
            $criteria->addSelectColumn($alias . '.ArspCommCycle');
            $criteria->addSelectColumn($alias . '.ArspGrup');
            $criteria->addSelectColumn($alias . '.ArspLogin');
            $criteria->addSelectColumn($alias . '.ArspMgr');
            $criteria->addSelectColumn($alias . '.ArspVendId');
            $criteria->addSelectColumn($alias . '.ArspRestrictAccess');
            $criteria->addSelectColumn($alias . '.ArspEmailAddr');
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
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPSALEPER1);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPNAME);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPMTDSALE);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPYTDSALE);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPLTDSALE);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPLASTSALEDATE);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPMTDCOMMEARN);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPYTDCOMMEARN);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPLTDCOMMEARN);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPMTDCOMMPAID);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPYTDCOMMPAID);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPLTDCOMMPAID);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPCOMMCYCLE);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPGRUP);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPLOGIN);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPMGR);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPVENDID);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPRESTRICTACCESS);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_ARSPEMAILADDR);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(SalesPersonTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArspSalePer1');
            $criteria->removeSelectColumn($alias . '.ArspName');
            $criteria->removeSelectColumn($alias . '.ArspMtdSale');
            $criteria->removeSelectColumn($alias . '.ArspYtdSale');
            $criteria->removeSelectColumn($alias . '.ArspLtdSale');
            $criteria->removeSelectColumn($alias . '.ArspLastSaleDate');
            $criteria->removeSelectColumn($alias . '.ArspMtdCommEarn');
            $criteria->removeSelectColumn($alias . '.ArspYtdCommEarn');
            $criteria->removeSelectColumn($alias . '.ArspLtdCommEarn');
            $criteria->removeSelectColumn($alias . '.ArspMtdCommPaid');
            $criteria->removeSelectColumn($alias . '.ArspYtdCommPaid');
            $criteria->removeSelectColumn($alias . '.ArspLtdCommPaid');
            $criteria->removeSelectColumn($alias . '.ArspCommCycle');
            $criteria->removeSelectColumn($alias . '.ArspGrup');
            $criteria->removeSelectColumn($alias . '.ArspLogin');
            $criteria->removeSelectColumn($alias . '.ArspMgr');
            $criteria->removeSelectColumn($alias . '.ArspVendId');
            $criteria->removeSelectColumn($alias . '.ArspRestrictAccess');
            $criteria->removeSelectColumn($alias . '.ArspEmailAddr');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesPersonTableMap::DATABASE_NAME)->getTable(SalesPersonTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SalesPerson or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SalesPerson object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesPerson) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesPersonTableMap::DATABASE_NAME);
            $criteria->add(SalesPersonTableMap::COL_ARSPSALEPER1, (array) $values, Criteria::IN);
        }

        $query = SalesPersonQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesPersonTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesPersonTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_saleper1 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SalesPersonQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesPerson or Criteria object.
     *
     * @param mixed $criteria Criteria or SalesPerson object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesPerson object
        }


        // Set the correct dbName
        $query = SalesPersonQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
