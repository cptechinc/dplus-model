<?php

namespace Map;

use \ConfigSoFreight;
use \ConfigSoFreightQuery;
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
 * This class defines the structure of the 'so_frt_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigSoFreightTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigSoFreightTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_frt_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigSoFreight';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigSoFreight';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 25;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 25;

    /**
     * the column name for the OetbConfKey field
     */
    const COL_OETBCONFKEY = 'so_frt_config.OetbConfKey';

    /**
     * the column name for the OetbConfUseFrtCost field
     */
    const COL_OETBCONFUSEFRTCOST = 'so_frt_config.OetbConfUseFrtCost';

    /**
     * the column name for the OetbCon2FrtRateTabl field
     */
    const COL_OETBCON2FRTRATETABL = 'so_frt_config.OetbCon2FrtRateTabl';

    /**
     * the column name for the OetbCon2FrtZoneSorZ field
     */
    const COL_OETBCON2FRTZONESORZ = 'so_frt_config.OetbCon2FrtZoneSorZ';

    /**
     * the column name for the OetbCon2ChrgActFrt field
     */
    const COL_OETBCON2CHRGACTFRT = 'so_frt_config.OetbCon2ChrgActFrt';

    /**
     * the column name for the OetbCon3UseFrtGrup field
     */
    const COL_OETBCON3USEFRTGRUP = 'so_frt_config.OetbCon3UseFrtGrup';

    /**
     * the column name for the OetbCon2FrghtOrdrAmtA field
     */
    const COL_OETBCON2FRGHTORDRAMTA = 'so_frt_config.OetbCon2FrghtOrdrAmtA';

    /**
     * the column name for the OetbCon2FrghtOrdrAmtB field
     */
    const COL_OETBCON2FRGHTORDRAMTB = 'so_frt_config.OetbCon2FrghtOrdrAmtB';

    /**
     * the column name for the OetbCon2FrghtOrdrAmtC field
     */
    const COL_OETBCON2FRGHTORDRAMTC = 'so_frt_config.OetbCon2FrghtOrdrAmtC';

    /**
     * the column name for the OetbCon2FrghtOrdrAmtD field
     */
    const COL_OETBCON2FRGHTORDRAMTD = 'so_frt_config.OetbCon2FrghtOrdrAmtD';

    /**
     * the column name for the OetbCon2FrghtOrdrAmtE field
     */
    const COL_OETBCON2FRGHTORDRAMTE = 'so_frt_config.OetbCon2FrghtOrdrAmtE';

    /**
     * the column name for the OetbCon2ChrgFrghtBkord field
     */
    const COL_OETBCON2CHRGFRGHTBKORD = 'so_frt_config.OetbCon2ChrgFrghtBkord';

    /**
     * the column name for the OetbCon2FrghtAddMeth field
     */
    const COL_OETBCON2FRGHTADDMETH = 'so_frt_config.OetbCon2FrghtAddMeth';

    /**
     * the column name for the OetbCon2FrghtOrder field
     */
    const COL_OETBCON2FRGHTORDER = 'so_frt_config.OetbCon2FrghtOrder';

    /**
     * the column name for the OetbCon2FrghtCntnr field
     */
    const COL_OETBCON2FRGHTCNTNR = 'so_frt_config.OetbCon2FrghtCntnr';

    /**
     * the column name for the OetbCon2FrghtAdd1 field
     */
    const COL_OETBCON2FRGHTADD1 = 'so_frt_config.OetbCon2FrghtAdd1';

    /**
     * the column name for the OetbCon2FrghtAddAmt1 field
     */
    const COL_OETBCON2FRGHTADDAMT1 = 'so_frt_config.OetbCon2FrghtAddAmt1';

    /**
     * the column name for the OetbCon2FrghtAddPer field
     */
    const COL_OETBCON2FRGHTADDPER = 'so_frt_config.OetbCon2FrghtAddPer';

    /**
     * the column name for the OetbCon2FrghtAddAmtPer field
     */
    const COL_OETBCON2FRGHTADDAMTPER = 'so_frt_config.OetbCon2FrghtAddAmtPer';

    /**
     * the column name for the OetbCon2FrghtAddAmtMax field
     */
    const COL_OETBCON2FRGHTADDAMTMAX = 'so_frt_config.OetbCon2FrghtAddAmtMax';

    /**
     * the column name for the OetbCon2FrghtAddPct field
     */
    const COL_OETBCON2FRGHTADDPCT = 'so_frt_config.OetbCon2FrghtAddPct';

    /**
     * the column name for the OetbCon2FrghtMinChrg field
     */
    const COL_OETBCON2FRGHTMINCHRG = 'so_frt_config.OetbCon2FrghtMinChrg';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_frt_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_frt_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_frt_config.dummy';

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
        self::TYPE_PHPNAME       => array('Oetbconfkey', 'Oetbconfusefrtcost', 'Oetbcon2frtratetabl', 'Oetbcon2frtzonesorz', 'Oetbcon2chrgactfrt', 'Oetbcon3usefrtgrup', 'Oetbcon2frghtordramta', 'Oetbcon2frghtordramtb', 'Oetbcon2frghtordramtc', 'Oetbcon2frghtordramtd', 'Oetbcon2frghtordramte', 'Oetbcon2chrgfrghtbkord', 'Oetbcon2frghtaddmeth', 'Oetbcon2frghtorder', 'Oetbcon2frghtcntnr', 'Oetbcon2frghtadd1', 'Oetbcon2frghtaddamt1', 'Oetbcon2frghtaddper', 'Oetbcon2frghtaddamtper', 'Oetbcon2frghtaddamtmax', 'Oetbcon2frghtaddpct', 'Oetbcon2frghtminchrg', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oetbconfkey', 'oetbconfusefrtcost', 'oetbcon2frtratetabl', 'oetbcon2frtzonesorz', 'oetbcon2chrgactfrt', 'oetbcon3usefrtgrup', 'oetbcon2frghtordramta', 'oetbcon2frghtordramtb', 'oetbcon2frghtordramtc', 'oetbcon2frghtordramtd', 'oetbcon2frghtordramte', 'oetbcon2chrgfrghtbkord', 'oetbcon2frghtaddmeth', 'oetbcon2frghtorder', 'oetbcon2frghtcntnr', 'oetbcon2frghtadd1', 'oetbcon2frghtaddamt1', 'oetbcon2frghtaddper', 'oetbcon2frghtaddamtper', 'oetbcon2frghtaddamtmax', 'oetbcon2frghtaddpct', 'oetbcon2frghtminchrg', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigSoFreightTableMap::COL_OETBCONFKEY, ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST, ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL, ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ, ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT, ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE, ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER, ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT, ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG, ConfigSoFreightTableMap::COL_DATEUPDTD, ConfigSoFreightTableMap::COL_TIMEUPDTD, ConfigSoFreightTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OetbConfKey', 'OetbConfUseFrtCost', 'OetbCon2FrtRateTabl', 'OetbCon2FrtZoneSorZ', 'OetbCon2ChrgActFrt', 'OetbCon3UseFrtGrup', 'OetbCon2FrghtOrdrAmtA', 'OetbCon2FrghtOrdrAmtB', 'OetbCon2FrghtOrdrAmtC', 'OetbCon2FrghtOrdrAmtD', 'OetbCon2FrghtOrdrAmtE', 'OetbCon2ChrgFrghtBkord', 'OetbCon2FrghtAddMeth', 'OetbCon2FrghtOrder', 'OetbCon2FrghtCntnr', 'OetbCon2FrghtAdd1', 'OetbCon2FrghtAddAmt1', 'OetbCon2FrghtAddPer', 'OetbCon2FrghtAddAmtPer', 'OetbCon2FrghtAddAmtMax', 'OetbCon2FrghtAddPct', 'OetbCon2FrghtMinChrg', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oetbconfkey' => 0, 'Oetbconfusefrtcost' => 1, 'Oetbcon2frtratetabl' => 2, 'Oetbcon2frtzonesorz' => 3, 'Oetbcon2chrgactfrt' => 4, 'Oetbcon3usefrtgrup' => 5, 'Oetbcon2frghtordramta' => 6, 'Oetbcon2frghtordramtb' => 7, 'Oetbcon2frghtordramtc' => 8, 'Oetbcon2frghtordramtd' => 9, 'Oetbcon2frghtordramte' => 10, 'Oetbcon2chrgfrghtbkord' => 11, 'Oetbcon2frghtaddmeth' => 12, 'Oetbcon2frghtorder' => 13, 'Oetbcon2frghtcntnr' => 14, 'Oetbcon2frghtadd1' => 15, 'Oetbcon2frghtaddamt1' => 16, 'Oetbcon2frghtaddper' => 17, 'Oetbcon2frghtaddamtper' => 18, 'Oetbcon2frghtaddamtmax' => 19, 'Oetbcon2frghtaddpct' => 20, 'Oetbcon2frghtminchrg' => 21, 'Dateupdtd' => 22, 'Timeupdtd' => 23, 'Dummy' => 24, ),
        self::TYPE_CAMELNAME     => array('oetbconfkey' => 0, 'oetbconfusefrtcost' => 1, 'oetbcon2frtratetabl' => 2, 'oetbcon2frtzonesorz' => 3, 'oetbcon2chrgactfrt' => 4, 'oetbcon3usefrtgrup' => 5, 'oetbcon2frghtordramta' => 6, 'oetbcon2frghtordramtb' => 7, 'oetbcon2frghtordramtc' => 8, 'oetbcon2frghtordramtd' => 9, 'oetbcon2frghtordramte' => 10, 'oetbcon2chrgfrghtbkord' => 11, 'oetbcon2frghtaddmeth' => 12, 'oetbcon2frghtorder' => 13, 'oetbcon2frghtcntnr' => 14, 'oetbcon2frghtadd1' => 15, 'oetbcon2frghtaddamt1' => 16, 'oetbcon2frghtaddper' => 17, 'oetbcon2frghtaddamtper' => 18, 'oetbcon2frghtaddamtmax' => 19, 'oetbcon2frghtaddpct' => 20, 'oetbcon2frghtminchrg' => 21, 'dateupdtd' => 22, 'timeupdtd' => 23, 'dummy' => 24, ),
        self::TYPE_COLNAME       => array(ConfigSoFreightTableMap::COL_OETBCONFKEY => 0, ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST => 1, ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL => 2, ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ => 3, ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT => 4, ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP => 5, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA => 6, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB => 7, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC => 8, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD => 9, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE => 10, ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD => 11, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH => 12, ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER => 13, ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR => 14, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1 => 15, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1 => 16, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER => 17, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER => 18, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX => 19, ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT => 20, ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG => 21, ConfigSoFreightTableMap::COL_DATEUPDTD => 22, ConfigSoFreightTableMap::COL_TIMEUPDTD => 23, ConfigSoFreightTableMap::COL_DUMMY => 24, ),
        self::TYPE_FIELDNAME     => array('OetbConfKey' => 0, 'OetbConfUseFrtCost' => 1, 'OetbCon2FrtRateTabl' => 2, 'OetbCon2FrtZoneSorZ' => 3, 'OetbCon2ChrgActFrt' => 4, 'OetbCon3UseFrtGrup' => 5, 'OetbCon2FrghtOrdrAmtA' => 6, 'OetbCon2FrghtOrdrAmtB' => 7, 'OetbCon2FrghtOrdrAmtC' => 8, 'OetbCon2FrghtOrdrAmtD' => 9, 'OetbCon2FrghtOrdrAmtE' => 10, 'OetbCon2ChrgFrghtBkord' => 11, 'OetbCon2FrghtAddMeth' => 12, 'OetbCon2FrghtOrder' => 13, 'OetbCon2FrghtCntnr' => 14, 'OetbCon2FrghtAdd1' => 15, 'OetbCon2FrghtAddAmt1' => 16, 'OetbCon2FrghtAddPer' => 17, 'OetbCon2FrghtAddAmtPer' => 18, 'OetbCon2FrghtAddAmtMax' => 19, 'OetbCon2FrghtAddPct' => 20, 'OetbCon2FrghtMinChrg' => 21, 'DateUpdtd' => 22, 'TimeUpdtd' => 23, 'dummy' => 24, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $this->setName('so_frt_config');
        $this->setPhpName('ConfigSoFreight');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigSoFreight');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OetbConfKey', 'Oetbconfkey', 'INTEGER', true, 1, 1);
        $this->addColumn('OetbConfUseFrtCost', 'Oetbconfusefrtcost', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2FrtRateTabl', 'Oetbcon2frtratetabl', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2FrtZoneSorZ', 'Oetbcon2frtzonesorz', 'CHAR', true, null, 'Z');
        $this->addColumn('OetbCon2ChrgActFrt', 'Oetbcon2chrgactfrt', 'CHAR', true, null, 'Y');
        $this->addColumn('OetbCon3UseFrtGrup', 'Oetbcon3usefrtgrup', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2FrghtOrdrAmtA', 'Oetbcon2frghtordramta', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtOrdrAmtB', 'Oetbcon2frghtordramtb', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtOrdrAmtC', 'Oetbcon2frghtordramtc', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtOrdrAmtD', 'Oetbcon2frghtordramtd', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtOrdrAmtE', 'Oetbcon2frghtordramte', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2ChrgFrghtBkord', 'Oetbcon2chrgfrghtbkord', 'CHAR', true, null, 'N');
        $this->addColumn('OetbCon2FrghtAddMeth', 'Oetbcon2frghtaddmeth', 'CHAR', true, null, '1');
        $this->addColumn('OetbCon2FrghtOrder', 'Oetbcon2frghtorder', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtCntnr', 'Oetbcon2frghtcntnr', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtAdd1', 'Oetbcon2frghtadd1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtAddAmt1', 'Oetbcon2frghtaddamt1', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtAddPer', 'Oetbcon2frghtaddper', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtAddAmtPer', 'Oetbcon2frghtaddamtper', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtAddAmtMax', 'Oetbcon2frghtaddamtmax', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtAddPct', 'Oetbcon2frghtaddpct', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetbCon2FrghtMinChrg', 'Oetbcon2frghtminchrg', 'DECIMAL', true, 20, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigSoFreightTableMap::CLASS_DEFAULT : ConfigSoFreightTableMap::OM_CLASS;
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
     * @return array           (ConfigSoFreight object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigSoFreightTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigSoFreightTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigSoFreightTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigSoFreightTableMap::OM_CLASS;
            /** @var ConfigSoFreight $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigSoFreightTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigSoFreightTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigSoFreightTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigSoFreight $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigSoFreightTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCONFKEY);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigSoFreightTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OetbConfKey');
            $criteria->addSelectColumn($alias . '.OetbConfUseFrtCost');
            $criteria->addSelectColumn($alias . '.OetbCon2FrtRateTabl');
            $criteria->addSelectColumn($alias . '.OetbCon2FrtZoneSorZ');
            $criteria->addSelectColumn($alias . '.OetbCon2ChrgActFrt');
            $criteria->addSelectColumn($alias . '.OetbCon3UseFrtGrup');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtOrdrAmtA');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtOrdrAmtB');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtOrdrAmtC');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtOrdrAmtD');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtOrdrAmtE');
            $criteria->addSelectColumn($alias . '.OetbCon2ChrgFrghtBkord');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAddMeth');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtOrder');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtCntnr');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAdd1');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAddAmt1');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAddPer');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAddAmtPer');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAddAmtMax');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtAddPct');
            $criteria->addSelectColumn($alias . '.OetbCon2FrghtMinChrg');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigSoFreightTableMap::DATABASE_NAME)->getTable(ConfigSoFreightTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigSoFreightTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigSoFreightTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigSoFreightTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigSoFreight or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigSoFreight object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigSoFreight) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigSoFreightTableMap::DATABASE_NAME);
            $criteria->add(ConfigSoFreightTableMap::COL_OETBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigSoFreightQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigSoFreightTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigSoFreightTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_frt_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigSoFreightQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigSoFreight or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigSoFreight object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigSoFreight object
        }


        // Set the correct dbName
        $query = ConfigSoFreightQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigSoFreightTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigSoFreightTableMap::buildTableMap();
