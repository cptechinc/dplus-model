<?php

namespace Map;

use \ConfigSysd;
use \ConfigSysdQuery;
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
 * This class defines the structure of the 'sys_definition' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ConfigSysdTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ConfigSysdTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'sys_definition';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ConfigSysd';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ConfigSysd';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ConfigSysd';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 32;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 32;

    /**
     * the column name for the CscpCompNbr field
     */
    public const COL_CSCPCOMPNBR = 'sys_definition.CscpCompNbr';

    /**
     * the column name for the CscpCompId field
     */
    public const COL_CSCPCOMPID = 'sys_definition.CscpCompId';

    /**
     * the column name for the CscpCompName field
     */
    public const COL_CSCPCOMPNAME = 'sys_definition.CscpCompName';

    /**
     * the column name for the CscpDsPermission field
     */
    public const COL_CSCPDSPERMISSION = 'sys_definition.CscpDsPermission';

    /**
     * the column name for the CscpRaPermission field
     */
    public const COL_CSCPRAPERMISSION = 'sys_definition.CscpRaPermission';

    /**
     * the column name for the CscpSrpPermission field
     */
    public const COL_CSCPSRPPERMISSION = 'sys_definition.CscpSrpPermission';

    /**
     * the column name for the CscpEmailType field
     */
    public const COL_CSCPEMAILTYPE = 'sys_definition.CscpEmailType';

    /**
     * the column name for the CscpFaxDir field
     */
    public const COL_CSCPFAXDIR = 'sys_definition.CscpFaxDir';

    /**
     * the column name for the CscpPrgDir field
     */
    public const COL_CSCPPRGDIR = 'sys_definition.CscpPrgDir';

    /**
     * the column name for the CscpFile1Dir field
     */
    public const COL_CSCPFILE1DIR = 'sys_definition.CscpFile1Dir';

    /**
     * the column name for the CscpFile2Dir field
     */
    public const COL_CSCPFILE2DIR = 'sys_definition.CscpFile2Dir';

    /**
     * the column name for the CscpFile3Dir field
     */
    public const COL_CSCPFILE3DIR = 'sys_definition.CscpFile3Dir';

    /**
     * the column name for the CscpTempDir field
     */
    public const COL_CSCPTEMPDIR = 'sys_definition.CscpTempDir';

    /**
     * the column name for the CscpWorkDir field
     */
    public const COL_CSCPWORKDIR = 'sys_definition.CscpWorkDir';

    /**
     * the column name for the CscpReptArchDir field
     */
    public const COL_CSCPREPTARCHDIR = 'sys_definition.CscpReptArchDir';

    /**
     * the column name for the CscpDocInboxDir field
     */
    public const COL_CSCPDOCINBOXDIR = 'sys_definition.CscpDocInboxDir';

    /**
     * the column name for the CscpDocAutoDir field
     */
    public const COL_CSCPDOCAUTODIR = 'sys_definition.CscpDocAutoDir';

    /**
     * the column name for the CscpCertsDir field
     */
    public const COL_CSCPCERTSDIR = 'sys_definition.CscpCertsDir';

    /**
     * the column name for the CscpImgProduct field
     */
    public const COL_CSCPIMGPRODUCT = 'sys_definition.CscpImgProduct';

    /**
     * the column name for the CscpImgDrawings field
     */
    public const COL_CSCPIMGDRAWINGS = 'sys_definition.CscpImgDrawings';

    /**
     * the column name for the CscpImgSchematic field
     */
    public const COL_CSCPIMGSCHEMATIC = 'sys_definition.CscpImgSchematic';

    /**
     * the column name for the CscpImgConfirm field
     */
    public const COL_CSCPIMGCONFIRM = 'sys_definition.CscpImgConfirm';

    /**
     * the column name for the CscpPcchargeDir field
     */
    public const COL_CSCPPCCHARGEDIR = 'sys_definition.CscpPcchargeDir';

    /**
     * the column name for the CscpDeviceDir field
     */
    public const COL_CSCPDEVICEDIR = 'sys_definition.CscpDeviceDir';

    /**
     * the column name for the CscpEcommDir field
     */
    public const COL_CSCPECOMMDIR = 'sys_definition.CscpEcommDir';

    /**
     * the column name for the CscpBrwzBaseIp field
     */
    public const COL_CSCPBRWZBASEIP = 'sys_definition.CscpBrwzBaseIp';

    /**
     * the column name for the CscpDataBaseName field
     */
    public const COL_CSCPDATABASENAME = 'sys_definition.CscpDataBaseName';

    /**
     * the column name for the CscpCompDataBaseName field
     */
    public const COL_CSCPCOMPDATABASENAME = 'sys_definition.CscpCompDataBaseName';

    /**
     * the column name for the CscpFgrndColor field
     */
    public const COL_CSCPFGRNDCOLOR = 'sys_definition.CscpFgrndColor';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'sys_definition.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'sys_definition.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'sys_definition.dummy';

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
        self::TYPE_PHPNAME       => ['Cscpcompnbr', 'Cscpcompid', 'Cscpcompname', 'Cscpdspermission', 'Cscprapermission', 'Cscpsrppermission', 'Cscpemailtype', 'Cscpfaxdir', 'Cscpprgdir', 'Cscpfile1dir', 'Cscpfile2dir', 'Cscpfile3dir', 'Cscptempdir', 'Cscpworkdir', 'Cscpreptarchdir', 'Cscpdocinboxdir', 'Cscpdocautodir', 'Cscpcertsdir', 'Cscpimgproduct', 'Cscpimgdrawings', 'Cscpimgschematic', 'Cscpimgconfirm', 'Cscppcchargedir', 'Cscpdevicedir', 'Cscpecommdir', 'Cscpbrwzbaseip', 'Cscpdatabasename', 'Cscpcompdatabasename', 'Cscpfgrndcolor', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['cscpcompnbr', 'cscpcompid', 'cscpcompname', 'cscpdspermission', 'cscprapermission', 'cscpsrppermission', 'cscpemailtype', 'cscpfaxdir', 'cscpprgdir', 'cscpfile1dir', 'cscpfile2dir', 'cscpfile3dir', 'cscptempdir', 'cscpworkdir', 'cscpreptarchdir', 'cscpdocinboxdir', 'cscpdocautodir', 'cscpcertsdir', 'cscpimgproduct', 'cscpimgdrawings', 'cscpimgschematic', 'cscpimgconfirm', 'cscppcchargedir', 'cscpdevicedir', 'cscpecommdir', 'cscpbrwzbaseip', 'cscpdatabasename', 'cscpcompdatabasename', 'cscpfgrndcolor', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ConfigSysdTableMap::COL_CSCPCOMPNBR, ConfigSysdTableMap::COL_CSCPCOMPID, ConfigSysdTableMap::COL_CSCPCOMPNAME, ConfigSysdTableMap::COL_CSCPDSPERMISSION, ConfigSysdTableMap::COL_CSCPRAPERMISSION, ConfigSysdTableMap::COL_CSCPSRPPERMISSION, ConfigSysdTableMap::COL_CSCPEMAILTYPE, ConfigSysdTableMap::COL_CSCPFAXDIR, ConfigSysdTableMap::COL_CSCPPRGDIR, ConfigSysdTableMap::COL_CSCPFILE1DIR, ConfigSysdTableMap::COL_CSCPFILE2DIR, ConfigSysdTableMap::COL_CSCPFILE3DIR, ConfigSysdTableMap::COL_CSCPTEMPDIR, ConfigSysdTableMap::COL_CSCPWORKDIR, ConfigSysdTableMap::COL_CSCPREPTARCHDIR, ConfigSysdTableMap::COL_CSCPDOCINBOXDIR, ConfigSysdTableMap::COL_CSCPDOCAUTODIR, ConfigSysdTableMap::COL_CSCPCERTSDIR, ConfigSysdTableMap::COL_CSCPIMGPRODUCT, ConfigSysdTableMap::COL_CSCPIMGDRAWINGS, ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC, ConfigSysdTableMap::COL_CSCPIMGCONFIRM, ConfigSysdTableMap::COL_CSCPPCCHARGEDIR, ConfigSysdTableMap::COL_CSCPDEVICEDIR, ConfigSysdTableMap::COL_CSCPECOMMDIR, ConfigSysdTableMap::COL_CSCPBRWZBASEIP, ConfigSysdTableMap::COL_CSCPDATABASENAME, ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME, ConfigSysdTableMap::COL_CSCPFGRNDCOLOR, ConfigSysdTableMap::COL_DATEUPDTD, ConfigSysdTableMap::COL_TIMEUPDTD, ConfigSysdTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['CscpCompNbr', 'CscpCompId', 'CscpCompName', 'CscpDsPermission', 'CscpRaPermission', 'CscpSrpPermission', 'CscpEmailType', 'CscpFaxDir', 'CscpPrgDir', 'CscpFile1Dir', 'CscpFile2Dir', 'CscpFile3Dir', 'CscpTempDir', 'CscpWorkDir', 'CscpReptArchDir', 'CscpDocInboxDir', 'CscpDocAutoDir', 'CscpCertsDir', 'CscpImgProduct', 'CscpImgDrawings', 'CscpImgSchematic', 'CscpImgConfirm', 'CscpPcchargeDir', 'CscpDeviceDir', 'CscpEcommDir', 'CscpBrwzBaseIp', 'CscpDataBaseName', 'CscpCompDataBaseName', 'CscpFgrndColor', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, ]
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
        self::TYPE_PHPNAME       => ['Cscpcompnbr' => 0, 'Cscpcompid' => 1, 'Cscpcompname' => 2, 'Cscpdspermission' => 3, 'Cscprapermission' => 4, 'Cscpsrppermission' => 5, 'Cscpemailtype' => 6, 'Cscpfaxdir' => 7, 'Cscpprgdir' => 8, 'Cscpfile1dir' => 9, 'Cscpfile2dir' => 10, 'Cscpfile3dir' => 11, 'Cscptempdir' => 12, 'Cscpworkdir' => 13, 'Cscpreptarchdir' => 14, 'Cscpdocinboxdir' => 15, 'Cscpdocautodir' => 16, 'Cscpcertsdir' => 17, 'Cscpimgproduct' => 18, 'Cscpimgdrawings' => 19, 'Cscpimgschematic' => 20, 'Cscpimgconfirm' => 21, 'Cscppcchargedir' => 22, 'Cscpdevicedir' => 23, 'Cscpecommdir' => 24, 'Cscpbrwzbaseip' => 25, 'Cscpdatabasename' => 26, 'Cscpcompdatabasename' => 27, 'Cscpfgrndcolor' => 28, 'Dateupdtd' => 29, 'Timeupdtd' => 30, 'Dummy' => 31, ],
        self::TYPE_CAMELNAME     => ['cscpcompnbr' => 0, 'cscpcompid' => 1, 'cscpcompname' => 2, 'cscpdspermission' => 3, 'cscprapermission' => 4, 'cscpsrppermission' => 5, 'cscpemailtype' => 6, 'cscpfaxdir' => 7, 'cscpprgdir' => 8, 'cscpfile1dir' => 9, 'cscpfile2dir' => 10, 'cscpfile3dir' => 11, 'cscptempdir' => 12, 'cscpworkdir' => 13, 'cscpreptarchdir' => 14, 'cscpdocinboxdir' => 15, 'cscpdocautodir' => 16, 'cscpcertsdir' => 17, 'cscpimgproduct' => 18, 'cscpimgdrawings' => 19, 'cscpimgschematic' => 20, 'cscpimgconfirm' => 21, 'cscppcchargedir' => 22, 'cscpdevicedir' => 23, 'cscpecommdir' => 24, 'cscpbrwzbaseip' => 25, 'cscpdatabasename' => 26, 'cscpcompdatabasename' => 27, 'cscpfgrndcolor' => 28, 'dateupdtd' => 29, 'timeupdtd' => 30, 'dummy' => 31, ],
        self::TYPE_COLNAME       => [ConfigSysdTableMap::COL_CSCPCOMPNBR => 0, ConfigSysdTableMap::COL_CSCPCOMPID => 1, ConfigSysdTableMap::COL_CSCPCOMPNAME => 2, ConfigSysdTableMap::COL_CSCPDSPERMISSION => 3, ConfigSysdTableMap::COL_CSCPRAPERMISSION => 4, ConfigSysdTableMap::COL_CSCPSRPPERMISSION => 5, ConfigSysdTableMap::COL_CSCPEMAILTYPE => 6, ConfigSysdTableMap::COL_CSCPFAXDIR => 7, ConfigSysdTableMap::COL_CSCPPRGDIR => 8, ConfigSysdTableMap::COL_CSCPFILE1DIR => 9, ConfigSysdTableMap::COL_CSCPFILE2DIR => 10, ConfigSysdTableMap::COL_CSCPFILE3DIR => 11, ConfigSysdTableMap::COL_CSCPTEMPDIR => 12, ConfigSysdTableMap::COL_CSCPWORKDIR => 13, ConfigSysdTableMap::COL_CSCPREPTARCHDIR => 14, ConfigSysdTableMap::COL_CSCPDOCINBOXDIR => 15, ConfigSysdTableMap::COL_CSCPDOCAUTODIR => 16, ConfigSysdTableMap::COL_CSCPCERTSDIR => 17, ConfigSysdTableMap::COL_CSCPIMGPRODUCT => 18, ConfigSysdTableMap::COL_CSCPIMGDRAWINGS => 19, ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC => 20, ConfigSysdTableMap::COL_CSCPIMGCONFIRM => 21, ConfigSysdTableMap::COL_CSCPPCCHARGEDIR => 22, ConfigSysdTableMap::COL_CSCPDEVICEDIR => 23, ConfigSysdTableMap::COL_CSCPECOMMDIR => 24, ConfigSysdTableMap::COL_CSCPBRWZBASEIP => 25, ConfigSysdTableMap::COL_CSCPDATABASENAME => 26, ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME => 27, ConfigSysdTableMap::COL_CSCPFGRNDCOLOR => 28, ConfigSysdTableMap::COL_DATEUPDTD => 29, ConfigSysdTableMap::COL_TIMEUPDTD => 30, ConfigSysdTableMap::COL_DUMMY => 31, ],
        self::TYPE_FIELDNAME     => ['CscpCompNbr' => 0, 'CscpCompId' => 1, 'CscpCompName' => 2, 'CscpDsPermission' => 3, 'CscpRaPermission' => 4, 'CscpSrpPermission' => 5, 'CscpEmailType' => 6, 'CscpFaxDir' => 7, 'CscpPrgDir' => 8, 'CscpFile1Dir' => 9, 'CscpFile2Dir' => 10, 'CscpFile3Dir' => 11, 'CscpTempDir' => 12, 'CscpWorkDir' => 13, 'CscpReptArchDir' => 14, 'CscpDocInboxDir' => 15, 'CscpDocAutoDir' => 16, 'CscpCertsDir' => 17, 'CscpImgProduct' => 18, 'CscpImgDrawings' => 19, 'CscpImgSchematic' => 20, 'CscpImgConfirm' => 21, 'CscpPcchargeDir' => 22, 'CscpDeviceDir' => 23, 'CscpEcommDir' => 24, 'CscpBrwzBaseIp' => 25, 'CscpDataBaseName' => 26, 'CscpCompDataBaseName' => 27, 'CscpFgrndColor' => 28, 'DateUpdtd' => 29, 'TimeUpdtd' => 30, 'dummy' => 31, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Cscpcompnbr' => 'CSCPCOMPNBR',
        'ConfigSysd.Cscpcompnbr' => 'CSCPCOMPNBR',
        'cscpcompnbr' => 'CSCPCOMPNBR',
        'configSysd.cscpcompnbr' => 'CSCPCOMPNBR',
        'ConfigSysdTableMap::COL_CSCPCOMPNBR' => 'CSCPCOMPNBR',
        'COL_CSCPCOMPNBR' => 'CSCPCOMPNBR',
        'CscpCompNbr' => 'CSCPCOMPNBR',
        'sys_definition.CscpCompNbr' => 'CSCPCOMPNBR',
        'Cscpcompid' => 'CSCPCOMPID',
        'ConfigSysd.Cscpcompid' => 'CSCPCOMPID',
        'cscpcompid' => 'CSCPCOMPID',
        'configSysd.cscpcompid' => 'CSCPCOMPID',
        'ConfigSysdTableMap::COL_CSCPCOMPID' => 'CSCPCOMPID',
        'COL_CSCPCOMPID' => 'CSCPCOMPID',
        'CscpCompId' => 'CSCPCOMPID',
        'sys_definition.CscpCompId' => 'CSCPCOMPID',
        'Cscpcompname' => 'CSCPCOMPNAME',
        'ConfigSysd.Cscpcompname' => 'CSCPCOMPNAME',
        'cscpcompname' => 'CSCPCOMPNAME',
        'configSysd.cscpcompname' => 'CSCPCOMPNAME',
        'ConfigSysdTableMap::COL_CSCPCOMPNAME' => 'CSCPCOMPNAME',
        'COL_CSCPCOMPNAME' => 'CSCPCOMPNAME',
        'CscpCompName' => 'CSCPCOMPNAME',
        'sys_definition.CscpCompName' => 'CSCPCOMPNAME',
        'Cscpdspermission' => 'CSCPDSPERMISSION',
        'ConfigSysd.Cscpdspermission' => 'CSCPDSPERMISSION',
        'cscpdspermission' => 'CSCPDSPERMISSION',
        'configSysd.cscpdspermission' => 'CSCPDSPERMISSION',
        'ConfigSysdTableMap::COL_CSCPDSPERMISSION' => 'CSCPDSPERMISSION',
        'COL_CSCPDSPERMISSION' => 'CSCPDSPERMISSION',
        'CscpDsPermission' => 'CSCPDSPERMISSION',
        'sys_definition.CscpDsPermission' => 'CSCPDSPERMISSION',
        'Cscprapermission' => 'CSCPRAPERMISSION',
        'ConfigSysd.Cscprapermission' => 'CSCPRAPERMISSION',
        'cscprapermission' => 'CSCPRAPERMISSION',
        'configSysd.cscprapermission' => 'CSCPRAPERMISSION',
        'ConfigSysdTableMap::COL_CSCPRAPERMISSION' => 'CSCPRAPERMISSION',
        'COL_CSCPRAPERMISSION' => 'CSCPRAPERMISSION',
        'CscpRaPermission' => 'CSCPRAPERMISSION',
        'sys_definition.CscpRaPermission' => 'CSCPRAPERMISSION',
        'Cscpsrppermission' => 'CSCPSRPPERMISSION',
        'ConfigSysd.Cscpsrppermission' => 'CSCPSRPPERMISSION',
        'cscpsrppermission' => 'CSCPSRPPERMISSION',
        'configSysd.cscpsrppermission' => 'CSCPSRPPERMISSION',
        'ConfigSysdTableMap::COL_CSCPSRPPERMISSION' => 'CSCPSRPPERMISSION',
        'COL_CSCPSRPPERMISSION' => 'CSCPSRPPERMISSION',
        'CscpSrpPermission' => 'CSCPSRPPERMISSION',
        'sys_definition.CscpSrpPermission' => 'CSCPSRPPERMISSION',
        'Cscpemailtype' => 'CSCPEMAILTYPE',
        'ConfigSysd.Cscpemailtype' => 'CSCPEMAILTYPE',
        'cscpemailtype' => 'CSCPEMAILTYPE',
        'configSysd.cscpemailtype' => 'CSCPEMAILTYPE',
        'ConfigSysdTableMap::COL_CSCPEMAILTYPE' => 'CSCPEMAILTYPE',
        'COL_CSCPEMAILTYPE' => 'CSCPEMAILTYPE',
        'CscpEmailType' => 'CSCPEMAILTYPE',
        'sys_definition.CscpEmailType' => 'CSCPEMAILTYPE',
        'Cscpfaxdir' => 'CSCPFAXDIR',
        'ConfigSysd.Cscpfaxdir' => 'CSCPFAXDIR',
        'cscpfaxdir' => 'CSCPFAXDIR',
        'configSysd.cscpfaxdir' => 'CSCPFAXDIR',
        'ConfigSysdTableMap::COL_CSCPFAXDIR' => 'CSCPFAXDIR',
        'COL_CSCPFAXDIR' => 'CSCPFAXDIR',
        'CscpFaxDir' => 'CSCPFAXDIR',
        'sys_definition.CscpFaxDir' => 'CSCPFAXDIR',
        'Cscpprgdir' => 'CSCPPRGDIR',
        'ConfigSysd.Cscpprgdir' => 'CSCPPRGDIR',
        'cscpprgdir' => 'CSCPPRGDIR',
        'configSysd.cscpprgdir' => 'CSCPPRGDIR',
        'ConfigSysdTableMap::COL_CSCPPRGDIR' => 'CSCPPRGDIR',
        'COL_CSCPPRGDIR' => 'CSCPPRGDIR',
        'CscpPrgDir' => 'CSCPPRGDIR',
        'sys_definition.CscpPrgDir' => 'CSCPPRGDIR',
        'Cscpfile1dir' => 'CSCPFILE1DIR',
        'ConfigSysd.Cscpfile1dir' => 'CSCPFILE1DIR',
        'cscpfile1dir' => 'CSCPFILE1DIR',
        'configSysd.cscpfile1dir' => 'CSCPFILE1DIR',
        'ConfigSysdTableMap::COL_CSCPFILE1DIR' => 'CSCPFILE1DIR',
        'COL_CSCPFILE1DIR' => 'CSCPFILE1DIR',
        'CscpFile1Dir' => 'CSCPFILE1DIR',
        'sys_definition.CscpFile1Dir' => 'CSCPFILE1DIR',
        'Cscpfile2dir' => 'CSCPFILE2DIR',
        'ConfigSysd.Cscpfile2dir' => 'CSCPFILE2DIR',
        'cscpfile2dir' => 'CSCPFILE2DIR',
        'configSysd.cscpfile2dir' => 'CSCPFILE2DIR',
        'ConfigSysdTableMap::COL_CSCPFILE2DIR' => 'CSCPFILE2DIR',
        'COL_CSCPFILE2DIR' => 'CSCPFILE2DIR',
        'CscpFile2Dir' => 'CSCPFILE2DIR',
        'sys_definition.CscpFile2Dir' => 'CSCPFILE2DIR',
        'Cscpfile3dir' => 'CSCPFILE3DIR',
        'ConfigSysd.Cscpfile3dir' => 'CSCPFILE3DIR',
        'cscpfile3dir' => 'CSCPFILE3DIR',
        'configSysd.cscpfile3dir' => 'CSCPFILE3DIR',
        'ConfigSysdTableMap::COL_CSCPFILE3DIR' => 'CSCPFILE3DIR',
        'COL_CSCPFILE3DIR' => 'CSCPFILE3DIR',
        'CscpFile3Dir' => 'CSCPFILE3DIR',
        'sys_definition.CscpFile3Dir' => 'CSCPFILE3DIR',
        'Cscptempdir' => 'CSCPTEMPDIR',
        'ConfigSysd.Cscptempdir' => 'CSCPTEMPDIR',
        'cscptempdir' => 'CSCPTEMPDIR',
        'configSysd.cscptempdir' => 'CSCPTEMPDIR',
        'ConfigSysdTableMap::COL_CSCPTEMPDIR' => 'CSCPTEMPDIR',
        'COL_CSCPTEMPDIR' => 'CSCPTEMPDIR',
        'CscpTempDir' => 'CSCPTEMPDIR',
        'sys_definition.CscpTempDir' => 'CSCPTEMPDIR',
        'Cscpworkdir' => 'CSCPWORKDIR',
        'ConfigSysd.Cscpworkdir' => 'CSCPWORKDIR',
        'cscpworkdir' => 'CSCPWORKDIR',
        'configSysd.cscpworkdir' => 'CSCPWORKDIR',
        'ConfigSysdTableMap::COL_CSCPWORKDIR' => 'CSCPWORKDIR',
        'COL_CSCPWORKDIR' => 'CSCPWORKDIR',
        'CscpWorkDir' => 'CSCPWORKDIR',
        'sys_definition.CscpWorkDir' => 'CSCPWORKDIR',
        'Cscpreptarchdir' => 'CSCPREPTARCHDIR',
        'ConfigSysd.Cscpreptarchdir' => 'CSCPREPTARCHDIR',
        'cscpreptarchdir' => 'CSCPREPTARCHDIR',
        'configSysd.cscpreptarchdir' => 'CSCPREPTARCHDIR',
        'ConfigSysdTableMap::COL_CSCPREPTARCHDIR' => 'CSCPREPTARCHDIR',
        'COL_CSCPREPTARCHDIR' => 'CSCPREPTARCHDIR',
        'CscpReptArchDir' => 'CSCPREPTARCHDIR',
        'sys_definition.CscpReptArchDir' => 'CSCPREPTARCHDIR',
        'Cscpdocinboxdir' => 'CSCPDOCINBOXDIR',
        'ConfigSysd.Cscpdocinboxdir' => 'CSCPDOCINBOXDIR',
        'cscpdocinboxdir' => 'CSCPDOCINBOXDIR',
        'configSysd.cscpdocinboxdir' => 'CSCPDOCINBOXDIR',
        'ConfigSysdTableMap::COL_CSCPDOCINBOXDIR' => 'CSCPDOCINBOXDIR',
        'COL_CSCPDOCINBOXDIR' => 'CSCPDOCINBOXDIR',
        'CscpDocInboxDir' => 'CSCPDOCINBOXDIR',
        'sys_definition.CscpDocInboxDir' => 'CSCPDOCINBOXDIR',
        'Cscpdocautodir' => 'CSCPDOCAUTODIR',
        'ConfigSysd.Cscpdocautodir' => 'CSCPDOCAUTODIR',
        'cscpdocautodir' => 'CSCPDOCAUTODIR',
        'configSysd.cscpdocautodir' => 'CSCPDOCAUTODIR',
        'ConfigSysdTableMap::COL_CSCPDOCAUTODIR' => 'CSCPDOCAUTODIR',
        'COL_CSCPDOCAUTODIR' => 'CSCPDOCAUTODIR',
        'CscpDocAutoDir' => 'CSCPDOCAUTODIR',
        'sys_definition.CscpDocAutoDir' => 'CSCPDOCAUTODIR',
        'Cscpcertsdir' => 'CSCPCERTSDIR',
        'ConfigSysd.Cscpcertsdir' => 'CSCPCERTSDIR',
        'cscpcertsdir' => 'CSCPCERTSDIR',
        'configSysd.cscpcertsdir' => 'CSCPCERTSDIR',
        'ConfigSysdTableMap::COL_CSCPCERTSDIR' => 'CSCPCERTSDIR',
        'COL_CSCPCERTSDIR' => 'CSCPCERTSDIR',
        'CscpCertsDir' => 'CSCPCERTSDIR',
        'sys_definition.CscpCertsDir' => 'CSCPCERTSDIR',
        'Cscpimgproduct' => 'CSCPIMGPRODUCT',
        'ConfigSysd.Cscpimgproduct' => 'CSCPIMGPRODUCT',
        'cscpimgproduct' => 'CSCPIMGPRODUCT',
        'configSysd.cscpimgproduct' => 'CSCPIMGPRODUCT',
        'ConfigSysdTableMap::COL_CSCPIMGPRODUCT' => 'CSCPIMGPRODUCT',
        'COL_CSCPIMGPRODUCT' => 'CSCPIMGPRODUCT',
        'CscpImgProduct' => 'CSCPIMGPRODUCT',
        'sys_definition.CscpImgProduct' => 'CSCPIMGPRODUCT',
        'Cscpimgdrawings' => 'CSCPIMGDRAWINGS',
        'ConfigSysd.Cscpimgdrawings' => 'CSCPIMGDRAWINGS',
        'cscpimgdrawings' => 'CSCPIMGDRAWINGS',
        'configSysd.cscpimgdrawings' => 'CSCPIMGDRAWINGS',
        'ConfigSysdTableMap::COL_CSCPIMGDRAWINGS' => 'CSCPIMGDRAWINGS',
        'COL_CSCPIMGDRAWINGS' => 'CSCPIMGDRAWINGS',
        'CscpImgDrawings' => 'CSCPIMGDRAWINGS',
        'sys_definition.CscpImgDrawings' => 'CSCPIMGDRAWINGS',
        'Cscpimgschematic' => 'CSCPIMGSCHEMATIC',
        'ConfigSysd.Cscpimgschematic' => 'CSCPIMGSCHEMATIC',
        'cscpimgschematic' => 'CSCPIMGSCHEMATIC',
        'configSysd.cscpimgschematic' => 'CSCPIMGSCHEMATIC',
        'ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC' => 'CSCPIMGSCHEMATIC',
        'COL_CSCPIMGSCHEMATIC' => 'CSCPIMGSCHEMATIC',
        'CscpImgSchematic' => 'CSCPIMGSCHEMATIC',
        'sys_definition.CscpImgSchematic' => 'CSCPIMGSCHEMATIC',
        'Cscpimgconfirm' => 'CSCPIMGCONFIRM',
        'ConfigSysd.Cscpimgconfirm' => 'CSCPIMGCONFIRM',
        'cscpimgconfirm' => 'CSCPIMGCONFIRM',
        'configSysd.cscpimgconfirm' => 'CSCPIMGCONFIRM',
        'ConfigSysdTableMap::COL_CSCPIMGCONFIRM' => 'CSCPIMGCONFIRM',
        'COL_CSCPIMGCONFIRM' => 'CSCPIMGCONFIRM',
        'CscpImgConfirm' => 'CSCPIMGCONFIRM',
        'sys_definition.CscpImgConfirm' => 'CSCPIMGCONFIRM',
        'Cscppcchargedir' => 'CSCPPCCHARGEDIR',
        'ConfigSysd.Cscppcchargedir' => 'CSCPPCCHARGEDIR',
        'cscppcchargedir' => 'CSCPPCCHARGEDIR',
        'configSysd.cscppcchargedir' => 'CSCPPCCHARGEDIR',
        'ConfigSysdTableMap::COL_CSCPPCCHARGEDIR' => 'CSCPPCCHARGEDIR',
        'COL_CSCPPCCHARGEDIR' => 'CSCPPCCHARGEDIR',
        'CscpPcchargeDir' => 'CSCPPCCHARGEDIR',
        'sys_definition.CscpPcchargeDir' => 'CSCPPCCHARGEDIR',
        'Cscpdevicedir' => 'CSCPDEVICEDIR',
        'ConfigSysd.Cscpdevicedir' => 'CSCPDEVICEDIR',
        'cscpdevicedir' => 'CSCPDEVICEDIR',
        'configSysd.cscpdevicedir' => 'CSCPDEVICEDIR',
        'ConfigSysdTableMap::COL_CSCPDEVICEDIR' => 'CSCPDEVICEDIR',
        'COL_CSCPDEVICEDIR' => 'CSCPDEVICEDIR',
        'CscpDeviceDir' => 'CSCPDEVICEDIR',
        'sys_definition.CscpDeviceDir' => 'CSCPDEVICEDIR',
        'Cscpecommdir' => 'CSCPECOMMDIR',
        'ConfigSysd.Cscpecommdir' => 'CSCPECOMMDIR',
        'cscpecommdir' => 'CSCPECOMMDIR',
        'configSysd.cscpecommdir' => 'CSCPECOMMDIR',
        'ConfigSysdTableMap::COL_CSCPECOMMDIR' => 'CSCPECOMMDIR',
        'COL_CSCPECOMMDIR' => 'CSCPECOMMDIR',
        'CscpEcommDir' => 'CSCPECOMMDIR',
        'sys_definition.CscpEcommDir' => 'CSCPECOMMDIR',
        'Cscpbrwzbaseip' => 'CSCPBRWZBASEIP',
        'ConfigSysd.Cscpbrwzbaseip' => 'CSCPBRWZBASEIP',
        'cscpbrwzbaseip' => 'CSCPBRWZBASEIP',
        'configSysd.cscpbrwzbaseip' => 'CSCPBRWZBASEIP',
        'ConfigSysdTableMap::COL_CSCPBRWZBASEIP' => 'CSCPBRWZBASEIP',
        'COL_CSCPBRWZBASEIP' => 'CSCPBRWZBASEIP',
        'CscpBrwzBaseIp' => 'CSCPBRWZBASEIP',
        'sys_definition.CscpBrwzBaseIp' => 'CSCPBRWZBASEIP',
        'Cscpdatabasename' => 'CSCPDATABASENAME',
        'ConfigSysd.Cscpdatabasename' => 'CSCPDATABASENAME',
        'cscpdatabasename' => 'CSCPDATABASENAME',
        'configSysd.cscpdatabasename' => 'CSCPDATABASENAME',
        'ConfigSysdTableMap::COL_CSCPDATABASENAME' => 'CSCPDATABASENAME',
        'COL_CSCPDATABASENAME' => 'CSCPDATABASENAME',
        'CscpDataBaseName' => 'CSCPDATABASENAME',
        'sys_definition.CscpDataBaseName' => 'CSCPDATABASENAME',
        'Cscpcompdatabasename' => 'CSCPCOMPDATABASENAME',
        'ConfigSysd.Cscpcompdatabasename' => 'CSCPCOMPDATABASENAME',
        'cscpcompdatabasename' => 'CSCPCOMPDATABASENAME',
        'configSysd.cscpcompdatabasename' => 'CSCPCOMPDATABASENAME',
        'ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME' => 'CSCPCOMPDATABASENAME',
        'COL_CSCPCOMPDATABASENAME' => 'CSCPCOMPDATABASENAME',
        'CscpCompDataBaseName' => 'CSCPCOMPDATABASENAME',
        'sys_definition.CscpCompDataBaseName' => 'CSCPCOMPDATABASENAME',
        'Cscpfgrndcolor' => 'CSCPFGRNDCOLOR',
        'ConfigSysd.Cscpfgrndcolor' => 'CSCPFGRNDCOLOR',
        'cscpfgrndcolor' => 'CSCPFGRNDCOLOR',
        'configSysd.cscpfgrndcolor' => 'CSCPFGRNDCOLOR',
        'ConfigSysdTableMap::COL_CSCPFGRNDCOLOR' => 'CSCPFGRNDCOLOR',
        'COL_CSCPFGRNDCOLOR' => 'CSCPFGRNDCOLOR',
        'CscpFgrndColor' => 'CSCPFGRNDCOLOR',
        'sys_definition.CscpFgrndColor' => 'CSCPFGRNDCOLOR',
        'Dateupdtd' => 'DATEUPDTD',
        'ConfigSysd.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'configSysd.dateupdtd' => 'DATEUPDTD',
        'ConfigSysdTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'sys_definition.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ConfigSysd.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'configSysd.timeupdtd' => 'TIMEUPDTD',
        'ConfigSysdTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'sys_definition.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ConfigSysd.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'configSysd.dummy' => 'DUMMY',
        'ConfigSysdTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'sys_definition.dummy' => 'DUMMY',
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
        $this->setName('sys_definition');
        $this->setPhpName('ConfigSysd');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigSysd');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CscpCompNbr', 'Cscpcompnbr', 'INTEGER', true, 2, null);
        $this->addColumn('CscpCompId', 'Cscpcompid', 'VARCHAR', false, 4, null);
        $this->addColumn('CscpCompName', 'Cscpcompname', 'VARCHAR', false, 30, null);
        $this->addColumn('CscpDsPermission', 'Cscpdspermission', 'VARCHAR', false, 1, null);
        $this->addColumn('CscpRaPermission', 'Cscprapermission', 'VARCHAR', false, 1, null);
        $this->addColumn('CscpSrpPermission', 'Cscpsrppermission', 'VARCHAR', false, 1, null);
        $this->addColumn('CscpEmailType', 'Cscpemailtype', 'VARCHAR', false, 1, null);
        $this->addColumn('CscpFaxDir', 'Cscpfaxdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpPrgDir', 'Cscpprgdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpFile1Dir', 'Cscpfile1dir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpFile2Dir', 'Cscpfile2dir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpFile3Dir', 'Cscpfile3dir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpTempDir', 'Cscptempdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpWorkDir', 'Cscpworkdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpReptArchDir', 'Cscpreptarchdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpDocInboxDir', 'Cscpdocinboxdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpDocAutoDir', 'Cscpdocautodir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpCertsDir', 'Cscpcertsdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpImgProduct', 'Cscpimgproduct', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpImgDrawings', 'Cscpimgdrawings', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpImgSchematic', 'Cscpimgschematic', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpImgConfirm', 'Cscpimgconfirm', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpPcchargeDir', 'Cscppcchargedir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpDeviceDir', 'Cscpdevicedir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpEcommDir', 'Cscpecommdir', 'VARCHAR', false, 40, null);
        $this->addColumn('CscpBrwzBaseIp', 'Cscpbrwzbaseip', 'VARCHAR', false, 20, null);
        $this->addColumn('CscpDataBaseName', 'Cscpdatabasename', 'VARCHAR', false, 16, null);
        $this->addColumn('CscpCompDataBaseName', 'Cscpcompdatabasename', 'VARCHAR', false, 16, null);
        $this->addColumn('CscpFgrndColor', 'Cscpfgrndcolor', 'INTEGER', false, 3, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Cscpcompnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigSysdTableMap::CLASS_DEFAULT : ConfigSysdTableMap::OM_CLASS;
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
     * @return array (ConfigSysd object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ConfigSysdTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigSysdTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigSysdTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigSysdTableMap::OM_CLASS;
            /** @var ConfigSysd $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigSysdTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigSysdTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigSysdTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigSysd $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigSysdTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPNBR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPID);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPNAME);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPDSPERMISSION);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPRAPERMISSION);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPSRPPERMISSION);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPEMAILTYPE);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPFAXDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPPRGDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPFILE1DIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPFILE2DIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPFILE3DIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPTEMPDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPWORKDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPREPTARCHDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPDOCINBOXDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPDOCAUTODIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPCERTSDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPIMGPRODUCT);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPIMGDRAWINGS);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPIMGCONFIRM);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPPCCHARGEDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPDEVICEDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPECOMMDIR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPBRWZBASEIP);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPDATABASENAME);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigSysdTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.CscpCompNbr');
            $criteria->addSelectColumn($alias . '.CscpCompId');
            $criteria->addSelectColumn($alias . '.CscpCompName');
            $criteria->addSelectColumn($alias . '.CscpDsPermission');
            $criteria->addSelectColumn($alias . '.CscpRaPermission');
            $criteria->addSelectColumn($alias . '.CscpSrpPermission');
            $criteria->addSelectColumn($alias . '.CscpEmailType');
            $criteria->addSelectColumn($alias . '.CscpFaxDir');
            $criteria->addSelectColumn($alias . '.CscpPrgDir');
            $criteria->addSelectColumn($alias . '.CscpFile1Dir');
            $criteria->addSelectColumn($alias . '.CscpFile2Dir');
            $criteria->addSelectColumn($alias . '.CscpFile3Dir');
            $criteria->addSelectColumn($alias . '.CscpTempDir');
            $criteria->addSelectColumn($alias . '.CscpWorkDir');
            $criteria->addSelectColumn($alias . '.CscpReptArchDir');
            $criteria->addSelectColumn($alias . '.CscpDocInboxDir');
            $criteria->addSelectColumn($alias . '.CscpDocAutoDir');
            $criteria->addSelectColumn($alias . '.CscpCertsDir');
            $criteria->addSelectColumn($alias . '.CscpImgProduct');
            $criteria->addSelectColumn($alias . '.CscpImgDrawings');
            $criteria->addSelectColumn($alias . '.CscpImgSchematic');
            $criteria->addSelectColumn($alias . '.CscpImgConfirm');
            $criteria->addSelectColumn($alias . '.CscpPcchargeDir');
            $criteria->addSelectColumn($alias . '.CscpDeviceDir');
            $criteria->addSelectColumn($alias . '.CscpEcommDir');
            $criteria->addSelectColumn($alias . '.CscpBrwzBaseIp');
            $criteria->addSelectColumn($alias . '.CscpDataBaseName');
            $criteria->addSelectColumn($alias . '.CscpCompDataBaseName');
            $criteria->addSelectColumn($alias . '.CscpFgrndColor');
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
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPNBR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPID);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPNAME);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPDSPERMISSION);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPRAPERMISSION);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPSRPPERMISSION);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPEMAILTYPE);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPFAXDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPPRGDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPFILE1DIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPFILE2DIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPFILE3DIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPTEMPDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPWORKDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPREPTARCHDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPDOCINBOXDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPDOCAUTODIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPCERTSDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPIMGPRODUCT);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPIMGDRAWINGS);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPIMGCONFIRM);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPPCCHARGEDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPDEVICEDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPECOMMDIR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPBRWZBASEIP);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPDATABASENAME);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ConfigSysdTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.CscpCompNbr');
            $criteria->removeSelectColumn($alias . '.CscpCompId');
            $criteria->removeSelectColumn($alias . '.CscpCompName');
            $criteria->removeSelectColumn($alias . '.CscpDsPermission');
            $criteria->removeSelectColumn($alias . '.CscpRaPermission');
            $criteria->removeSelectColumn($alias . '.CscpSrpPermission');
            $criteria->removeSelectColumn($alias . '.CscpEmailType');
            $criteria->removeSelectColumn($alias . '.CscpFaxDir');
            $criteria->removeSelectColumn($alias . '.CscpPrgDir');
            $criteria->removeSelectColumn($alias . '.CscpFile1Dir');
            $criteria->removeSelectColumn($alias . '.CscpFile2Dir');
            $criteria->removeSelectColumn($alias . '.CscpFile3Dir');
            $criteria->removeSelectColumn($alias . '.CscpTempDir');
            $criteria->removeSelectColumn($alias . '.CscpWorkDir');
            $criteria->removeSelectColumn($alias . '.CscpReptArchDir');
            $criteria->removeSelectColumn($alias . '.CscpDocInboxDir');
            $criteria->removeSelectColumn($alias . '.CscpDocAutoDir');
            $criteria->removeSelectColumn($alias . '.CscpCertsDir');
            $criteria->removeSelectColumn($alias . '.CscpImgProduct');
            $criteria->removeSelectColumn($alias . '.CscpImgDrawings');
            $criteria->removeSelectColumn($alias . '.CscpImgSchematic');
            $criteria->removeSelectColumn($alias . '.CscpImgConfirm');
            $criteria->removeSelectColumn($alias . '.CscpPcchargeDir');
            $criteria->removeSelectColumn($alias . '.CscpDeviceDir');
            $criteria->removeSelectColumn($alias . '.CscpEcommDir');
            $criteria->removeSelectColumn($alias . '.CscpBrwzBaseIp');
            $criteria->removeSelectColumn($alias . '.CscpDataBaseName');
            $criteria->removeSelectColumn($alias . '.CscpCompDataBaseName');
            $criteria->removeSelectColumn($alias . '.CscpFgrndColor');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigSysdTableMap::DATABASE_NAME)->getTable(ConfigSysdTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ConfigSysd or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ConfigSysd object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigSysd) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigSysdTableMap::DATABASE_NAME);
            $criteria->add(ConfigSysdTableMap::COL_CSCPCOMPNBR, (array) $values, Criteria::IN);
        }

        $query = ConfigSysdQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigSysdTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigSysdTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the sys_definition table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ConfigSysdQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigSysd or Criteria object.
     *
     * @param mixed $criteria Criteria or ConfigSysd object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigSysd object
        }


        // Set the correct dbName
        $query = ConfigSysdQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
