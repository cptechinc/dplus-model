<?php

namespace Map;

use \ConfigQt;
use \ConfigQtQuery;
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
 * This class defines the structure of the 'qt_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigQtTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigQtTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'qt_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigQt';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigQt';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 30;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 30;

    /**
     * the column name for the QttbConfKey field
     */
    const COL_QTTBCONFKEY = 'qt_config.QttbConfKey';

    /**
     * the column name for the QttbConfAutoGen field
     */
    const COL_QTTBCONFAUTOGEN = 'qt_config.QttbConfAutoGen';

    /**
     * the column name for the QttbConfVendLine field
     */
    const COL_QTTBCONFVENDLINE = 'qt_config.QttbConfVendLine';

    /**
     * the column name for the QttbConfVendCols field
     */
    const COL_QTTBCONFVENDCOLS = 'qt_config.QttbConfVendCols';

    /**
     * the column name for the QttbConfExpDays field
     */
    const COL_QTTBCONFEXPDAYS = 'qt_config.QttbConfExpDays';

    /**
     * the column name for the QttbConfPricWind field
     */
    const COL_QTTBCONFPRICWIND = 'qt_config.QttbConfPricWind';

    /**
     * the column name for the QttbConfDispNotes field
     */
    const COL_QTTBCONFDISPNOTES = 'qt_config.QttbConfDispNotes';

    /**
     * the column name for the QttbConfHeadGetDef field
     */
    const COL_QTTBCONFHEADGETDEF = 'qt_config.QttbConfHeadGetDef';

    /**
     * the column name for the QttbConfShowMarg field
     */
    const COL_QTTBCONFSHOWMARG = 'qt_config.QttbConfShowMarg';

    /**
     * the column name for the QttbConfShowSp field
     */
    const COL_QTTBCONFSHOWSP = 'qt_config.QttbConfShowSp';

    /**
     * the column name for the QttbConfLoadPric field
     */
    const COL_QTTBCONFLOADPRIC = 'qt_config.QttbConfLoadPric';

    /**
     * the column name for the QttbConfPricFromQty field
     */
    const COL_QTTBCONFPRICFROMQTY = 'qt_config.QttbConfPricFromQty';

    /**
     * the column name for the QttbConfLoadCost field
     */
    const COL_QTTBCONFLOADCOST = 'qt_config.QttbConfLoadCost';

    /**
     * the column name for the QttbConfDfltContactInfo field
     */
    const COL_QTTBCONFDFLTCONTACTINFO = 'qt_config.QttbConfDfltContactInfo';

    /**
     * the column name for the QttbConfEnterUom field
     */
    const COL_QTTBCONFENTERUOM = 'qt_config.QttbConfEnterUom';

    /**
     * the column name for the QttbConfReviewDays field
     */
    const COL_QTTBCONFREVIEWDAYS = 'qt_config.QttbConfReviewDays';

    /**
     * the column name for the QttbConfCrteSlsOrdr field
     */
    const COL_QTTBCONFCRTESLSORDR = 'qt_config.QttbConfCrteSlsOrdr';

    /**
     * the column name for the QttbConfCrteQtyZero field
     */
    const COL_QTTBCONFCRTEQTYZERO = 'qt_config.QttbConfCrteQtyZero';

    /**
     * the column name for the QttbConfAutoNonStock field
     */
    const COL_QTTBCONFAUTONONSTOCK = 'qt_config.QttbConfAutoNonStock';

    /**
     * the column name for the QttbConfMarkupMargin field
     */
    const COL_QTTBCONFMARKUPMARGIN = 'qt_config.QttbConfMarkupMargin';

    /**
     * the column name for the QttbConfUseQtyBrks field
     */
    const COL_QTTBCONFUSEQTYBRKS = 'qt_config.QttbConfUseQtyBrks';

    /**
     * the column name for the QttbConfWghtEnterCalc field
     */
    const COL_QTTBCONFWGHTENTERCALC = 'qt_config.QttbConfWghtEnterCalc';

    /**
     * the column name for the QttbConfDefQuot field
     */
    const COL_QTTBCONFDEFQUOT = 'qt_config.QttbConfDefQuot';

    /**
     * the column name for the QttbConfDefPick field
     */
    const COL_QTTBCONFDEFPICK = 'qt_config.QttbConfDefPick';

    /**
     * the column name for the QttbConfDefPack field
     */
    const COL_QTTBCONFDEFPACK = 'qt_config.QttbConfDefPack';

    /**
     * the column name for the QttbConfDefInvc field
     */
    const COL_QTTBCONFDEFINVC = 'qt_config.QttbConfDefInvc';

    /**
     * the column name for the QttbConfDefAck field
     */
    const COL_QTTBCONFDEFACK = 'qt_config.QttbConfDefAck';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'qt_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'qt_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'qt_config.dummy';

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
        self::TYPE_PHPNAME       => array('Qttbconfkey', 'Qttbconfautogen', 'Qttbconfvendline', 'Qttbconfvendcols', 'Qttbconfexpdays', 'Qttbconfpricwind', 'Qttbconfdispnotes', 'Qttbconfheadgetdef', 'Qttbconfshowmarg', 'Qttbconfshowsp', 'Qttbconfloadpric', 'Qttbconfpricfromqty', 'Qttbconfloadcost', 'Qttbconfdfltcontactinfo', 'Qttbconfenteruom', 'Qttbconfreviewdays', 'Qttbconfcrteslsordr', 'Qttbconfcrteqtyzero', 'Qttbconfautononstock', 'Qttbconfmarkupmargin', 'Qttbconfuseqtybrks', 'Qttbconfwghtentercalc', 'Qttbconfdefquot', 'Qttbconfdefpick', 'Qttbconfdefpack', 'Qttbconfdefinvc', 'Qttbconfdefack', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('qttbconfkey', 'qttbconfautogen', 'qttbconfvendline', 'qttbconfvendcols', 'qttbconfexpdays', 'qttbconfpricwind', 'qttbconfdispnotes', 'qttbconfheadgetdef', 'qttbconfshowmarg', 'qttbconfshowsp', 'qttbconfloadpric', 'qttbconfpricfromqty', 'qttbconfloadcost', 'qttbconfdfltcontactinfo', 'qttbconfenteruom', 'qttbconfreviewdays', 'qttbconfcrteslsordr', 'qttbconfcrteqtyzero', 'qttbconfautononstock', 'qttbconfmarkupmargin', 'qttbconfuseqtybrks', 'qttbconfwghtentercalc', 'qttbconfdefquot', 'qttbconfdefpick', 'qttbconfdefpack', 'qttbconfdefinvc', 'qttbconfdefack', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigQtTableMap::COL_QTTBCONFKEY, ConfigQtTableMap::COL_QTTBCONFAUTOGEN, ConfigQtTableMap::COL_QTTBCONFVENDLINE, ConfigQtTableMap::COL_QTTBCONFVENDCOLS, ConfigQtTableMap::COL_QTTBCONFEXPDAYS, ConfigQtTableMap::COL_QTTBCONFPRICWIND, ConfigQtTableMap::COL_QTTBCONFDISPNOTES, ConfigQtTableMap::COL_QTTBCONFHEADGETDEF, ConfigQtTableMap::COL_QTTBCONFSHOWMARG, ConfigQtTableMap::COL_QTTBCONFSHOWSP, ConfigQtTableMap::COL_QTTBCONFLOADPRIC, ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY, ConfigQtTableMap::COL_QTTBCONFLOADCOST, ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO, ConfigQtTableMap::COL_QTTBCONFENTERUOM, ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS, ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR, ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO, ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK, ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN, ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS, ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC, ConfigQtTableMap::COL_QTTBCONFDEFQUOT, ConfigQtTableMap::COL_QTTBCONFDEFPICK, ConfigQtTableMap::COL_QTTBCONFDEFPACK, ConfigQtTableMap::COL_QTTBCONFDEFINVC, ConfigQtTableMap::COL_QTTBCONFDEFACK, ConfigQtTableMap::COL_DATEUPDTD, ConfigQtTableMap::COL_TIMEUPDTD, ConfigQtTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('QttbConfKey', 'QttbConfAutoGen', 'QttbConfVendLine', 'QttbConfVendCols', 'QttbConfExpDays', 'QttbConfPricWind', 'QttbConfDispNotes', 'QttbConfHeadGetDef', 'QttbConfShowMarg', 'QttbConfShowSp', 'QttbConfLoadPric', 'QttbConfPricFromQty', 'QttbConfLoadCost', 'QttbConfDfltContactInfo', 'QttbConfEnterUom', 'QttbConfReviewDays', 'QttbConfCrteSlsOrdr', 'QttbConfCrteQtyZero', 'QttbConfAutoNonStock', 'QttbConfMarkupMargin', 'QttbConfUseQtyBrks', 'QttbConfWghtEnterCalc', 'QttbConfDefQuot', 'QttbConfDefPick', 'QttbConfDefPack', 'QttbConfDefInvc', 'QttbConfDefAck', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Qttbconfkey' => 0, 'Qttbconfautogen' => 1, 'Qttbconfvendline' => 2, 'Qttbconfvendcols' => 3, 'Qttbconfexpdays' => 4, 'Qttbconfpricwind' => 5, 'Qttbconfdispnotes' => 6, 'Qttbconfheadgetdef' => 7, 'Qttbconfshowmarg' => 8, 'Qttbconfshowsp' => 9, 'Qttbconfloadpric' => 10, 'Qttbconfpricfromqty' => 11, 'Qttbconfloadcost' => 12, 'Qttbconfdfltcontactinfo' => 13, 'Qttbconfenteruom' => 14, 'Qttbconfreviewdays' => 15, 'Qttbconfcrteslsordr' => 16, 'Qttbconfcrteqtyzero' => 17, 'Qttbconfautononstock' => 18, 'Qttbconfmarkupmargin' => 19, 'Qttbconfuseqtybrks' => 20, 'Qttbconfwghtentercalc' => 21, 'Qttbconfdefquot' => 22, 'Qttbconfdefpick' => 23, 'Qttbconfdefpack' => 24, 'Qttbconfdefinvc' => 25, 'Qttbconfdefack' => 26, 'Dateupdtd' => 27, 'Timeupdtd' => 28, 'Dummy' => 29, ),
        self::TYPE_CAMELNAME     => array('qttbconfkey' => 0, 'qttbconfautogen' => 1, 'qttbconfvendline' => 2, 'qttbconfvendcols' => 3, 'qttbconfexpdays' => 4, 'qttbconfpricwind' => 5, 'qttbconfdispnotes' => 6, 'qttbconfheadgetdef' => 7, 'qttbconfshowmarg' => 8, 'qttbconfshowsp' => 9, 'qttbconfloadpric' => 10, 'qttbconfpricfromqty' => 11, 'qttbconfloadcost' => 12, 'qttbconfdfltcontactinfo' => 13, 'qttbconfenteruom' => 14, 'qttbconfreviewdays' => 15, 'qttbconfcrteslsordr' => 16, 'qttbconfcrteqtyzero' => 17, 'qttbconfautononstock' => 18, 'qttbconfmarkupmargin' => 19, 'qttbconfuseqtybrks' => 20, 'qttbconfwghtentercalc' => 21, 'qttbconfdefquot' => 22, 'qttbconfdefpick' => 23, 'qttbconfdefpack' => 24, 'qttbconfdefinvc' => 25, 'qttbconfdefack' => 26, 'dateupdtd' => 27, 'timeupdtd' => 28, 'dummy' => 29, ),
        self::TYPE_COLNAME       => array(ConfigQtTableMap::COL_QTTBCONFKEY => 0, ConfigQtTableMap::COL_QTTBCONFAUTOGEN => 1, ConfigQtTableMap::COL_QTTBCONFVENDLINE => 2, ConfigQtTableMap::COL_QTTBCONFVENDCOLS => 3, ConfigQtTableMap::COL_QTTBCONFEXPDAYS => 4, ConfigQtTableMap::COL_QTTBCONFPRICWIND => 5, ConfigQtTableMap::COL_QTTBCONFDISPNOTES => 6, ConfigQtTableMap::COL_QTTBCONFHEADGETDEF => 7, ConfigQtTableMap::COL_QTTBCONFSHOWMARG => 8, ConfigQtTableMap::COL_QTTBCONFSHOWSP => 9, ConfigQtTableMap::COL_QTTBCONFLOADPRIC => 10, ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY => 11, ConfigQtTableMap::COL_QTTBCONFLOADCOST => 12, ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO => 13, ConfigQtTableMap::COL_QTTBCONFENTERUOM => 14, ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS => 15, ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR => 16, ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO => 17, ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK => 18, ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN => 19, ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS => 20, ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC => 21, ConfigQtTableMap::COL_QTTBCONFDEFQUOT => 22, ConfigQtTableMap::COL_QTTBCONFDEFPICK => 23, ConfigQtTableMap::COL_QTTBCONFDEFPACK => 24, ConfigQtTableMap::COL_QTTBCONFDEFINVC => 25, ConfigQtTableMap::COL_QTTBCONFDEFACK => 26, ConfigQtTableMap::COL_DATEUPDTD => 27, ConfigQtTableMap::COL_TIMEUPDTD => 28, ConfigQtTableMap::COL_DUMMY => 29, ),
        self::TYPE_FIELDNAME     => array('QttbConfKey' => 0, 'QttbConfAutoGen' => 1, 'QttbConfVendLine' => 2, 'QttbConfVendCols' => 3, 'QttbConfExpDays' => 4, 'QttbConfPricWind' => 5, 'QttbConfDispNotes' => 6, 'QttbConfHeadGetDef' => 7, 'QttbConfShowMarg' => 8, 'QttbConfShowSp' => 9, 'QttbConfLoadPric' => 10, 'QttbConfPricFromQty' => 11, 'QttbConfLoadCost' => 12, 'QttbConfDfltContactInfo' => 13, 'QttbConfEnterUom' => 14, 'QttbConfReviewDays' => 15, 'QttbConfCrteSlsOrdr' => 16, 'QttbConfCrteQtyZero' => 17, 'QttbConfAutoNonStock' => 18, 'QttbConfMarkupMargin' => 19, 'QttbConfUseQtyBrks' => 20, 'QttbConfWghtEnterCalc' => 21, 'QttbConfDefQuot' => 22, 'QttbConfDefPick' => 23, 'QttbConfDefPack' => 24, 'QttbConfDefInvc' => 25, 'QttbConfDefAck' => 26, 'DateUpdtd' => 27, 'TimeUpdtd' => 28, 'dummy' => 29, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
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
        $this->setName('qt_config');
        $this->setPhpName('ConfigQt');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigQt');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QttbConfKey', 'Qttbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('QttbConfAutoGen', 'Qttbconfautogen', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfVendLine', 'Qttbconfvendline', 'INTEGER', false, 2, null);
        $this->addColumn('QttbConfVendCols', 'Qttbconfvendcols', 'INTEGER', false, 2, null);
        $this->addColumn('QttbConfExpDays', 'Qttbconfexpdays', 'INTEGER', false, 4, null);
        $this->addColumn('QttbConfPricWind', 'Qttbconfpricwind', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDispNotes', 'Qttbconfdispnotes', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfHeadGetDef', 'Qttbconfheadgetdef', 'INTEGER', false, 1, null);
        $this->addColumn('QttbConfShowMarg', 'Qttbconfshowmarg', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfShowSp', 'Qttbconfshowsp', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfLoadPric', 'Qttbconfloadpric', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfPricFromQty', 'Qttbconfpricfromqty', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfLoadCost', 'Qttbconfloadcost', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDfltContactInfo', 'Qttbconfdfltcontactinfo', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfEnterUom', 'Qttbconfenteruom', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfReviewDays', 'Qttbconfreviewdays', 'INTEGER', false, 3, null);
        $this->addColumn('QttbConfCrteSlsOrdr', 'Qttbconfcrteslsordr', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfCrteQtyZero', 'Qttbconfcrteqtyzero', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfAutoNonStock', 'Qttbconfautononstock', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfMarkupMargin', 'Qttbconfmarkupmargin', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfUseQtyBrks', 'Qttbconfuseqtybrks', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfWghtEnterCalc', 'Qttbconfwghtentercalc', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDefQuot', 'Qttbconfdefquot', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDefPick', 'Qttbconfdefpick', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDefPack', 'Qttbconfdefpack', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDefInvc', 'Qttbconfdefinvc', 'VARCHAR', false, 1, null);
        $this->addColumn('QttbConfDefAck', 'Qttbconfdefack', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Qttbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigQtTableMap::CLASS_DEFAULT : ConfigQtTableMap::OM_CLASS;
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
     * @return array           (ConfigQt object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigQtTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigQtTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigQtTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigQtTableMap::OM_CLASS;
            /** @var ConfigQt $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigQtTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigQtTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigQtTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigQt $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigQtTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFKEY);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFAUTOGEN);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFVENDLINE);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFVENDCOLS);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFEXPDAYS);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFPRICWIND);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDISPNOTES);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFSHOWMARG);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFSHOWSP);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFLOADPRIC);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFLOADCOST);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFENTERUOM);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDEFQUOT);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDEFPICK);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDEFPACK);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDEFINVC);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_QTTBCONFDEFACK);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigQtTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QttbConfKey');
            $criteria->addSelectColumn($alias . '.QttbConfAutoGen');
            $criteria->addSelectColumn($alias . '.QttbConfVendLine');
            $criteria->addSelectColumn($alias . '.QttbConfVendCols');
            $criteria->addSelectColumn($alias . '.QttbConfExpDays');
            $criteria->addSelectColumn($alias . '.QttbConfPricWind');
            $criteria->addSelectColumn($alias . '.QttbConfDispNotes');
            $criteria->addSelectColumn($alias . '.QttbConfHeadGetDef');
            $criteria->addSelectColumn($alias . '.QttbConfShowMarg');
            $criteria->addSelectColumn($alias . '.QttbConfShowSp');
            $criteria->addSelectColumn($alias . '.QttbConfLoadPric');
            $criteria->addSelectColumn($alias . '.QttbConfPricFromQty');
            $criteria->addSelectColumn($alias . '.QttbConfLoadCost');
            $criteria->addSelectColumn($alias . '.QttbConfDfltContactInfo');
            $criteria->addSelectColumn($alias . '.QttbConfEnterUom');
            $criteria->addSelectColumn($alias . '.QttbConfReviewDays');
            $criteria->addSelectColumn($alias . '.QttbConfCrteSlsOrdr');
            $criteria->addSelectColumn($alias . '.QttbConfCrteQtyZero');
            $criteria->addSelectColumn($alias . '.QttbConfAutoNonStock');
            $criteria->addSelectColumn($alias . '.QttbConfMarkupMargin');
            $criteria->addSelectColumn($alias . '.QttbConfUseQtyBrks');
            $criteria->addSelectColumn($alias . '.QttbConfWghtEnterCalc');
            $criteria->addSelectColumn($alias . '.QttbConfDefQuot');
            $criteria->addSelectColumn($alias . '.QttbConfDefPick');
            $criteria->addSelectColumn($alias . '.QttbConfDefPack');
            $criteria->addSelectColumn($alias . '.QttbConfDefInvc');
            $criteria->addSelectColumn($alias . '.QttbConfDefAck');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigQtTableMap::DATABASE_NAME)->getTable(ConfigQtTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigQtTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigQtTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigQtTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigQt or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigQt object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigQt) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigQtTableMap::DATABASE_NAME);
            $criteria->add(ConfigQtTableMap::COL_QTTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigQtQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigQtTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigQtTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the qt_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigQtQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigQt or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigQt object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigQt object
        }


        // Set the correct dbName
        $query = ConfigQtQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigQtTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigQtTableMap::buildTableMap();
