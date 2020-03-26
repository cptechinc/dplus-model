<?php

namespace Map;

use \SystemDefinition;
use \SystemDefinitionQuery;
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
 *
 */
class SystemDefinitionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SystemDefinitionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'sys_definition';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SystemDefinition';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SystemDefinition';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 32;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 32;

    /**
     * the column name for the CscpCompNbr field
     */
    const COL_CSCPCOMPNBR = 'sys_definition.CscpCompNbr';

    /**
     * the column name for the CscpCompId field
     */
    const COL_CSCPCOMPID = 'sys_definition.CscpCompId';

    /**
     * the column name for the CscpCompName field
     */
    const COL_CSCPCOMPNAME = 'sys_definition.CscpCompName';

    /**
     * the column name for the CscpDsPermission field
     */
    const COL_CSCPDSPERMISSION = 'sys_definition.CscpDsPermission';

    /**
     * the column name for the CscpRaPermission field
     */
    const COL_CSCPRAPERMISSION = 'sys_definition.CscpRaPermission';

    /**
     * the column name for the CscpSrpPermission field
     */
    const COL_CSCPSRPPERMISSION = 'sys_definition.CscpSrpPermission';

    /**
     * the column name for the CscpEmailType field
     */
    const COL_CSCPEMAILTYPE = 'sys_definition.CscpEmailType';

    /**
     * the column name for the CscpFaxDir field
     */
    const COL_CSCPFAXDIR = 'sys_definition.CscpFaxDir';

    /**
     * the column name for the CscpPrgDir field
     */
    const COL_CSCPPRGDIR = 'sys_definition.CscpPrgDir';

    /**
     * the column name for the CscpFile1Dir field
     */
    const COL_CSCPFILE1DIR = 'sys_definition.CscpFile1Dir';

    /**
     * the column name for the CscpFile2Dir field
     */
    const COL_CSCPFILE2DIR = 'sys_definition.CscpFile2Dir';

    /**
     * the column name for the CscpFile3Dir field
     */
    const COL_CSCPFILE3DIR = 'sys_definition.CscpFile3Dir';

    /**
     * the column name for the CscpTempDir field
     */
    const COL_CSCPTEMPDIR = 'sys_definition.CscpTempDir';

    /**
     * the column name for the CscpWorkDir field
     */
    const COL_CSCPWORKDIR = 'sys_definition.CscpWorkDir';

    /**
     * the column name for the CscpReptArchDir field
     */
    const COL_CSCPREPTARCHDIR = 'sys_definition.CscpReptArchDir';

    /**
     * the column name for the CscpDocInboxDir field
     */
    const COL_CSCPDOCINBOXDIR = 'sys_definition.CscpDocInboxDir';

    /**
     * the column name for the CscpDocAutoDir field
     */
    const COL_CSCPDOCAUTODIR = 'sys_definition.CscpDocAutoDir';

    /**
     * the column name for the CscpCertsDir field
     */
    const COL_CSCPCERTSDIR = 'sys_definition.CscpCertsDir';

    /**
     * the column name for the CscpImgProduct field
     */
    const COL_CSCPIMGPRODUCT = 'sys_definition.CscpImgProduct';

    /**
     * the column name for the CscpImgDrawings field
     */
    const COL_CSCPIMGDRAWINGS = 'sys_definition.CscpImgDrawings';

    /**
     * the column name for the CscpImgSchematic field
     */
    const COL_CSCPIMGSCHEMATIC = 'sys_definition.CscpImgSchematic';

    /**
     * the column name for the CscpImgConfirm field
     */
    const COL_CSCPIMGCONFIRM = 'sys_definition.CscpImgConfirm';

    /**
     * the column name for the CscpPcchargeDir field
     */
    const COL_CSCPPCCHARGEDIR = 'sys_definition.CscpPcchargeDir';

    /**
     * the column name for the CscpDeviceDir field
     */
    const COL_CSCPDEVICEDIR = 'sys_definition.CscpDeviceDir';

    /**
     * the column name for the CscpEcommDir field
     */
    const COL_CSCPECOMMDIR = 'sys_definition.CscpEcommDir';

    /**
     * the column name for the CscpBrwzBaseIp field
     */
    const COL_CSCPBRWZBASEIP = 'sys_definition.CscpBrwzBaseIp';

    /**
     * the column name for the CscpDataBaseName field
     */
    const COL_CSCPDATABASENAME = 'sys_definition.CscpDataBaseName';

    /**
     * the column name for the CscpCompDataBaseName field
     */
    const COL_CSCPCOMPDATABASENAME = 'sys_definition.CscpCompDataBaseName';

    /**
     * the column name for the CscpFgrndColor field
     */
    const COL_CSCPFGRNDCOLOR = 'sys_definition.CscpFgrndColor';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'sys_definition.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'sys_definition.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'sys_definition.dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Cscpcompnbr', 'Cscpcompid', 'Cscpcompname', 'Cscpdspermission', 'Cscprapermission', 'Cscpsrppermission', 'Cscpemailtype', 'Cscpfaxdir', 'Cscpprgdir', 'Cscpfile1dir', 'Cscpfile2dir', 'Cscpfile3dir', 'Cscptempdir', 'Cscpworkdir', 'Cscpreptarchdir', 'Cscpdocinboxdir', 'Cscpdocautodir', 'Cscpcertsdir', 'Cscpimgproduct', 'Cscpimgdrawings', 'Cscpimgschematic', 'Cscpimgconfirm', 'Cscppcchargedir', 'Cscpdevicedir', 'Cscpecommdir', 'Cscpbrwzbaseip', 'Cscpdatabasename', 'Cscpcompdatabasename', 'Cscpfgrndcolor', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('cscpcompnbr', 'cscpcompid', 'cscpcompname', 'cscpdspermission', 'cscprapermission', 'cscpsrppermission', 'cscpemailtype', 'cscpfaxdir', 'cscpprgdir', 'cscpfile1dir', 'cscpfile2dir', 'cscpfile3dir', 'cscptempdir', 'cscpworkdir', 'cscpreptarchdir', 'cscpdocinboxdir', 'cscpdocautodir', 'cscpcertsdir', 'cscpimgproduct', 'cscpimgdrawings', 'cscpimgschematic', 'cscpimgconfirm', 'cscppcchargedir', 'cscpdevicedir', 'cscpecommdir', 'cscpbrwzbaseip', 'cscpdatabasename', 'cscpcompdatabasename', 'cscpfgrndcolor', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SystemDefinitionTableMap::COL_CSCPCOMPNBR, SystemDefinitionTableMap::COL_CSCPCOMPID, SystemDefinitionTableMap::COL_CSCPCOMPNAME, SystemDefinitionTableMap::COL_CSCPDSPERMISSION, SystemDefinitionTableMap::COL_CSCPRAPERMISSION, SystemDefinitionTableMap::COL_CSCPSRPPERMISSION, SystemDefinitionTableMap::COL_CSCPEMAILTYPE, SystemDefinitionTableMap::COL_CSCPFAXDIR, SystemDefinitionTableMap::COL_CSCPPRGDIR, SystemDefinitionTableMap::COL_CSCPFILE1DIR, SystemDefinitionTableMap::COL_CSCPFILE2DIR, SystemDefinitionTableMap::COL_CSCPFILE3DIR, SystemDefinitionTableMap::COL_CSCPTEMPDIR, SystemDefinitionTableMap::COL_CSCPWORKDIR, SystemDefinitionTableMap::COL_CSCPREPTARCHDIR, SystemDefinitionTableMap::COL_CSCPDOCINBOXDIR, SystemDefinitionTableMap::COL_CSCPDOCAUTODIR, SystemDefinitionTableMap::COL_CSCPCERTSDIR, SystemDefinitionTableMap::COL_CSCPIMGPRODUCT, SystemDefinitionTableMap::COL_CSCPIMGDRAWINGS, SystemDefinitionTableMap::COL_CSCPIMGSCHEMATIC, SystemDefinitionTableMap::COL_CSCPIMGCONFIRM, SystemDefinitionTableMap::COL_CSCPPCCHARGEDIR, SystemDefinitionTableMap::COL_CSCPDEVICEDIR, SystemDefinitionTableMap::COL_CSCPECOMMDIR, SystemDefinitionTableMap::COL_CSCPBRWZBASEIP, SystemDefinitionTableMap::COL_CSCPDATABASENAME, SystemDefinitionTableMap::COL_CSCPCOMPDATABASENAME, SystemDefinitionTableMap::COL_CSCPFGRNDCOLOR, SystemDefinitionTableMap::COL_DATEUPDTD, SystemDefinitionTableMap::COL_TIMEUPDTD, SystemDefinitionTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('CscpCompNbr', 'CscpCompId', 'CscpCompName', 'CscpDsPermission', 'CscpRaPermission', 'CscpSrpPermission', 'CscpEmailType', 'CscpFaxDir', 'CscpPrgDir', 'CscpFile1Dir', 'CscpFile2Dir', 'CscpFile3Dir', 'CscpTempDir', 'CscpWorkDir', 'CscpReptArchDir', 'CscpDocInboxDir', 'CscpDocAutoDir', 'CscpCertsDir', 'CscpImgProduct', 'CscpImgDrawings', 'CscpImgSchematic', 'CscpImgConfirm', 'CscpPcchargeDir', 'CscpDeviceDir', 'CscpEcommDir', 'CscpBrwzBaseIp', 'CscpDataBaseName', 'CscpCompDataBaseName', 'CscpFgrndColor', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Cscpcompnbr' => 0, 'Cscpcompid' => 1, 'Cscpcompname' => 2, 'Cscpdspermission' => 3, 'Cscprapermission' => 4, 'Cscpsrppermission' => 5, 'Cscpemailtype' => 6, 'Cscpfaxdir' => 7, 'Cscpprgdir' => 8, 'Cscpfile1dir' => 9, 'Cscpfile2dir' => 10, 'Cscpfile3dir' => 11, 'Cscptempdir' => 12, 'Cscpworkdir' => 13, 'Cscpreptarchdir' => 14, 'Cscpdocinboxdir' => 15, 'Cscpdocautodir' => 16, 'Cscpcertsdir' => 17, 'Cscpimgproduct' => 18, 'Cscpimgdrawings' => 19, 'Cscpimgschematic' => 20, 'Cscpimgconfirm' => 21, 'Cscppcchargedir' => 22, 'Cscpdevicedir' => 23, 'Cscpecommdir' => 24, 'Cscpbrwzbaseip' => 25, 'Cscpdatabasename' => 26, 'Cscpcompdatabasename' => 27, 'Cscpfgrndcolor' => 28, 'Dateupdtd' => 29, 'Timeupdtd' => 30, 'Dummy' => 31, ),
        self::TYPE_CAMELNAME     => array('cscpcompnbr' => 0, 'cscpcompid' => 1, 'cscpcompname' => 2, 'cscpdspermission' => 3, 'cscprapermission' => 4, 'cscpsrppermission' => 5, 'cscpemailtype' => 6, 'cscpfaxdir' => 7, 'cscpprgdir' => 8, 'cscpfile1dir' => 9, 'cscpfile2dir' => 10, 'cscpfile3dir' => 11, 'cscptempdir' => 12, 'cscpworkdir' => 13, 'cscpreptarchdir' => 14, 'cscpdocinboxdir' => 15, 'cscpdocautodir' => 16, 'cscpcertsdir' => 17, 'cscpimgproduct' => 18, 'cscpimgdrawings' => 19, 'cscpimgschematic' => 20, 'cscpimgconfirm' => 21, 'cscppcchargedir' => 22, 'cscpdevicedir' => 23, 'cscpecommdir' => 24, 'cscpbrwzbaseip' => 25, 'cscpdatabasename' => 26, 'cscpcompdatabasename' => 27, 'cscpfgrndcolor' => 28, 'dateupdtd' => 29, 'timeupdtd' => 30, 'dummy' => 31, ),
        self::TYPE_COLNAME       => array(SystemDefinitionTableMap::COL_CSCPCOMPNBR => 0, SystemDefinitionTableMap::COL_CSCPCOMPID => 1, SystemDefinitionTableMap::COL_CSCPCOMPNAME => 2, SystemDefinitionTableMap::COL_CSCPDSPERMISSION => 3, SystemDefinitionTableMap::COL_CSCPRAPERMISSION => 4, SystemDefinitionTableMap::COL_CSCPSRPPERMISSION => 5, SystemDefinitionTableMap::COL_CSCPEMAILTYPE => 6, SystemDefinitionTableMap::COL_CSCPFAXDIR => 7, SystemDefinitionTableMap::COL_CSCPPRGDIR => 8, SystemDefinitionTableMap::COL_CSCPFILE1DIR => 9, SystemDefinitionTableMap::COL_CSCPFILE2DIR => 10, SystemDefinitionTableMap::COL_CSCPFILE3DIR => 11, SystemDefinitionTableMap::COL_CSCPTEMPDIR => 12, SystemDefinitionTableMap::COL_CSCPWORKDIR => 13, SystemDefinitionTableMap::COL_CSCPREPTARCHDIR => 14, SystemDefinitionTableMap::COL_CSCPDOCINBOXDIR => 15, SystemDefinitionTableMap::COL_CSCPDOCAUTODIR => 16, SystemDefinitionTableMap::COL_CSCPCERTSDIR => 17, SystemDefinitionTableMap::COL_CSCPIMGPRODUCT => 18, SystemDefinitionTableMap::COL_CSCPIMGDRAWINGS => 19, SystemDefinitionTableMap::COL_CSCPIMGSCHEMATIC => 20, SystemDefinitionTableMap::COL_CSCPIMGCONFIRM => 21, SystemDefinitionTableMap::COL_CSCPPCCHARGEDIR => 22, SystemDefinitionTableMap::COL_CSCPDEVICEDIR => 23, SystemDefinitionTableMap::COL_CSCPECOMMDIR => 24, SystemDefinitionTableMap::COL_CSCPBRWZBASEIP => 25, SystemDefinitionTableMap::COL_CSCPDATABASENAME => 26, SystemDefinitionTableMap::COL_CSCPCOMPDATABASENAME => 27, SystemDefinitionTableMap::COL_CSCPFGRNDCOLOR => 28, SystemDefinitionTableMap::COL_DATEUPDTD => 29, SystemDefinitionTableMap::COL_TIMEUPDTD => 30, SystemDefinitionTableMap::COL_DUMMY => 31, ),
        self::TYPE_FIELDNAME     => array('CscpCompNbr' => 0, 'CscpCompId' => 1, 'CscpCompName' => 2, 'CscpDsPermission' => 3, 'CscpRaPermission' => 4, 'CscpSrpPermission' => 5, 'CscpEmailType' => 6, 'CscpFaxDir' => 7, 'CscpPrgDir' => 8, 'CscpFile1Dir' => 9, 'CscpFile2Dir' => 10, 'CscpFile3Dir' => 11, 'CscpTempDir' => 12, 'CscpWorkDir' => 13, 'CscpReptArchDir' => 14, 'CscpDocInboxDir' => 15, 'CscpDocAutoDir' => 16, 'CscpCertsDir' => 17, 'CscpImgProduct' => 18, 'CscpImgDrawings' => 19, 'CscpImgSchematic' => 20, 'CscpImgConfirm' => 21, 'CscpPcchargeDir' => 22, 'CscpDeviceDir' => 23, 'CscpEcommDir' => 24, 'CscpBrwzBaseIp' => 25, 'CscpDataBaseName' => 26, 'CscpCompDataBaseName' => 27, 'CscpFgrndColor' => 28, 'DateUpdtd' => 29, 'TimeUpdtd' => 30, 'dummy' => 31, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('sys_definition');
        $this->setPhpName('SystemDefinition');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SystemDefinition');
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
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SystemDefinitionTableMap::CLASS_DEFAULT : SystemDefinitionTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SystemDefinition object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SystemDefinitionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SystemDefinitionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SystemDefinitionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SystemDefinitionTableMap::OM_CLASS;
            /** @var SystemDefinition $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SystemDefinitionTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SystemDefinitionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SystemDefinitionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SystemDefinition $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SystemDefinitionTableMap::addInstanceToPool($obj, $key);
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
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPCOMPNBR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPCOMPID);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPCOMPNAME);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPDSPERMISSION);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPRAPERMISSION);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPSRPPERMISSION);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPEMAILTYPE);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPFAXDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPPRGDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPFILE1DIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPFILE2DIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPFILE3DIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPTEMPDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPWORKDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPREPTARCHDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPDOCINBOXDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPDOCAUTODIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPCERTSDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPIMGPRODUCT);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPIMGDRAWINGS);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPIMGSCHEMATIC);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPIMGCONFIRM);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPPCCHARGEDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPDEVICEDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPECOMMDIR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPBRWZBASEIP);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPDATABASENAME);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPCOMPDATABASENAME);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_CSCPFGRNDCOLOR);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SystemDefinitionTableMap::COL_DUMMY);
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
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SystemDefinitionTableMap::DATABASE_NAME)->getTable(SystemDefinitionTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SystemDefinitionTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SystemDefinitionTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SystemDefinitionTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SystemDefinition or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SystemDefinition object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SystemDefinitionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SystemDefinition) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SystemDefinitionTableMap::DATABASE_NAME);
            $criteria->add(SystemDefinitionTableMap::COL_CSCPCOMPNBR, (array) $values, Criteria::IN);
        }

        $query = SystemDefinitionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SystemDefinitionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SystemDefinitionTableMap::removeInstanceFromPool($singleval);
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
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SystemDefinitionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SystemDefinition or Criteria object.
     *
     * @param mixed               $criteria Criteria or SystemDefinition object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SystemDefinitionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SystemDefinition object
        }


        // Set the correct dbName
        $query = SystemDefinitionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SystemDefinitionTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SystemDefinitionTableMap::buildTableMap();
