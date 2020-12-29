<?php

namespace Map;

use \ConfigCc;
use \ConfigCcQuery;
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
 * This class defines the structure of the 'cc_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigCcTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigCcTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'cc_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigCc';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigCc';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 35;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 35;

    /**
     * the column name for the CctbConfKey field
     */
    const COL_CCTBCONFKEY = 'cc_config.CctbConfKey';

    /**
     * the column name for the CctbConfCredLine field
     */
    const COL_CCTBCONFCREDLINE = 'cc_config.CctbConfCredLine';

    /**
     * the column name for the CctbConfCredCols field
     */
    const COL_CCTBCONFCREDCOLS = 'cc_config.CctbConfCredCols';

    /**
     * the column name for the CctbConfNoteStoreDays field
     */
    const COL_CCTBCONFNOTESTOREDAYS = 'cc_config.CctbConfNoteStoreDays';

    /**
     * the column name for the CctbConfAvgMonths field
     */
    const COL_CCTBCONFAVGMONTHS = 'cc_config.CctbConfAvgMonths';

    /**
     * the column name for the CctbConfAvgFinChrg field
     */
    const COL_CCTBCONFAVGFINCHRG = 'cc_config.CctbConfAvgFinChrg';

    /**
     * the column name for the CctbConfAllTerms field
     */
    const COL_CCTBCONFALLTERMS = 'cc_config.CctbConfAllTerms';

    /**
     * the column name for the CctbConfTerms01 field
     */
    const COL_CCTBCONFTERMS01 = 'cc_config.CctbConfTerms01';

    /**
     * the column name for the CctbConfTerms02 field
     */
    const COL_CCTBCONFTERMS02 = 'cc_config.CctbConfTerms02';

    /**
     * the column name for the CctbConfTerms03 field
     */
    const COL_CCTBCONFTERMS03 = 'cc_config.CctbConfTerms03';

    /**
     * the column name for the CctbConfTerms04 field
     */
    const COL_CCTBCONFTERMS04 = 'cc_config.CctbConfTerms04';

    /**
     * the column name for the CctbConfTerms05 field
     */
    const COL_CCTBCONFTERMS05 = 'cc_config.CctbConfTerms05';

    /**
     * the column name for the CctbConfTerms06 field
     */
    const COL_CCTBCONFTERMS06 = 'cc_config.CctbConfTerms06';

    /**
     * the column name for the CctbConfTerms07 field
     */
    const COL_CCTBCONFTERMS07 = 'cc_config.CctbConfTerms07';

    /**
     * the column name for the CctbConfTerms08 field
     */
    const COL_CCTBCONFTERMS08 = 'cc_config.CctbConfTerms08';

    /**
     * the column name for the CctbConfTerms09 field
     */
    const COL_CCTBCONFTERMS09 = 'cc_config.CctbConfTerms09';

    /**
     * the column name for the CctbConfTerms10 field
     */
    const COL_CCTBCONFTERMS10 = 'cc_config.CctbConfTerms10';

    /**
     * the column name for the CctbConfTerms11 field
     */
    const COL_CCTBCONFTERMS11 = 'cc_config.CctbConfTerms11';

    /**
     * the column name for the CctbConfTerms12 field
     */
    const COL_CCTBCONFTERMS12 = 'cc_config.CctbConfTerms12';

    /**
     * the column name for the CctbConfFutOrdrs field
     */
    const COL_CCTBCONFFUTORDRS = 'cc_config.CctbConfFutOrdrs';

    /**
     * the column name for the CctbConfPickTicket field
     */
    const COL_CCTBCONFPICKTICKET = 'cc_config.CctbConfPickTicket';

    /**
     * the column name for the CctbConfPickAlt field
     */
    const COL_CCTBCONFPICKALT = 'cc_config.CctbConfPickAlt';

    /**
     * the column name for the CctbConfPickRel field
     */
    const COL_CCTBCONFPICKREL = 'cc_config.CctbConfPickRel';

    /**
     * the column name for the CctbConfUseOdue field
     */
    const COL_CCTBCONFUSEODUE = 'cc_config.CctbConfUseOdue';

    /**
     * the column name for the CctbConfAgeLevlHold field
     */
    const COL_CCTBCONFAGELEVLHOLD = 'cc_config.CctbConfAgeLevlHold';

    /**
     * the column name for the CctbConfLevlAmt field
     */
    const COL_CCTBCONFLEVLAMT = 'cc_config.CctbConfLevlAmt';

    /**
     * the column name for the CctbConfUseCredLmt field
     */
    const COL_CCTBCONFUSECREDLMT = 'cc_config.CctbConfUseCredLmt';

    /**
     * the column name for the CctbConfPctToHold field
     */
    const COL_CCTBCONFPCTTOHOLD = 'cc_config.CctbConfPctToHold';

    /**
     * the column name for the CctbConfAddCurr field
     */
    const COL_CCTBCONFADDCURR = 'cc_config.CctbConfAddCurr';

    /**
     * the column name for the CctbConfMinMargHold field
     */
    const COL_CCTBCONFMINMARGHOLD = 'cc_config.CctbConfMinMargHold';

    /**
     * the column name for the CctbConfMinMargBase field
     */
    const COL_CCTBCONFMINMARGBASE = 'cc_config.CctbConfMinMargBase';

    /**
     * the column name for the CctbConfHighLevlHold field
     */
    const COL_CCTBCONFHIGHLEVLHOLD = 'cc_config.CctbConfHighLevlHold';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'cc_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'cc_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'cc_config.dummy';

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
        self::TYPE_PHPNAME       => array('Cctbconfkey', 'Cctbconfcredline', 'Cctbconfcredcols', 'Cctbconfnotestoredays', 'Cctbconfavgmonths', 'Cctbconfavgfinchrg', 'Cctbconfallterms', 'Cctbconfterms01', 'Cctbconfterms02', 'Cctbconfterms03', 'Cctbconfterms04', 'Cctbconfterms05', 'Cctbconfterms06', 'Cctbconfterms07', 'Cctbconfterms08', 'Cctbconfterms09', 'Cctbconfterms10', 'Cctbconfterms11', 'Cctbconfterms12', 'Cctbconffutordrs', 'Cctbconfpickticket', 'Cctbconfpickalt', 'Cctbconfpickrel', 'Cctbconfuseodue', 'Cctbconfagelevlhold', 'Cctbconflevlamt', 'Cctbconfusecredlmt', 'Cctbconfpcttohold', 'Cctbconfaddcurr', 'Cctbconfminmarghold', 'Cctbconfminmargbase', 'Cctbconfhighlevlhold', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('cctbconfkey', 'cctbconfcredline', 'cctbconfcredcols', 'cctbconfnotestoredays', 'cctbconfavgmonths', 'cctbconfavgfinchrg', 'cctbconfallterms', 'cctbconfterms01', 'cctbconfterms02', 'cctbconfterms03', 'cctbconfterms04', 'cctbconfterms05', 'cctbconfterms06', 'cctbconfterms07', 'cctbconfterms08', 'cctbconfterms09', 'cctbconfterms10', 'cctbconfterms11', 'cctbconfterms12', 'cctbconffutordrs', 'cctbconfpickticket', 'cctbconfpickalt', 'cctbconfpickrel', 'cctbconfuseodue', 'cctbconfagelevlhold', 'cctbconflevlamt', 'cctbconfusecredlmt', 'cctbconfpcttohold', 'cctbconfaddcurr', 'cctbconfminmarghold', 'cctbconfminmargbase', 'cctbconfhighlevlhold', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigCcTableMap::COL_CCTBCONFKEY, ConfigCcTableMap::COL_CCTBCONFCREDLINE, ConfigCcTableMap::COL_CCTBCONFCREDCOLS, ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS, ConfigCcTableMap::COL_CCTBCONFAVGMONTHS, ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG, ConfigCcTableMap::COL_CCTBCONFALLTERMS, ConfigCcTableMap::COL_CCTBCONFTERMS01, ConfigCcTableMap::COL_CCTBCONFTERMS02, ConfigCcTableMap::COL_CCTBCONFTERMS03, ConfigCcTableMap::COL_CCTBCONFTERMS04, ConfigCcTableMap::COL_CCTBCONFTERMS05, ConfigCcTableMap::COL_CCTBCONFTERMS06, ConfigCcTableMap::COL_CCTBCONFTERMS07, ConfigCcTableMap::COL_CCTBCONFTERMS08, ConfigCcTableMap::COL_CCTBCONFTERMS09, ConfigCcTableMap::COL_CCTBCONFTERMS10, ConfigCcTableMap::COL_CCTBCONFTERMS11, ConfigCcTableMap::COL_CCTBCONFTERMS12, ConfigCcTableMap::COL_CCTBCONFFUTORDRS, ConfigCcTableMap::COL_CCTBCONFPICKTICKET, ConfigCcTableMap::COL_CCTBCONFPICKALT, ConfigCcTableMap::COL_CCTBCONFPICKREL, ConfigCcTableMap::COL_CCTBCONFUSEODUE, ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD, ConfigCcTableMap::COL_CCTBCONFLEVLAMT, ConfigCcTableMap::COL_CCTBCONFUSECREDLMT, ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD, ConfigCcTableMap::COL_CCTBCONFADDCURR, ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD, ConfigCcTableMap::COL_CCTBCONFMINMARGBASE, ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD, ConfigCcTableMap::COL_DATEUPDTD, ConfigCcTableMap::COL_TIMEUPDTD, ConfigCcTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('CctbConfKey', 'CctbConfCredLine', 'CctbConfCredCols', 'CctbConfNoteStoreDays', 'CctbConfAvgMonths', 'CctbConfAvgFinChrg', 'CctbConfAllTerms', 'CctbConfTerms01', 'CctbConfTerms02', 'CctbConfTerms03', 'CctbConfTerms04', 'CctbConfTerms05', 'CctbConfTerms06', 'CctbConfTerms07', 'CctbConfTerms08', 'CctbConfTerms09', 'CctbConfTerms10', 'CctbConfTerms11', 'CctbConfTerms12', 'CctbConfFutOrdrs', 'CctbConfPickTicket', 'CctbConfPickAlt', 'CctbConfPickRel', 'CctbConfUseOdue', 'CctbConfAgeLevlHold', 'CctbConfLevlAmt', 'CctbConfUseCredLmt', 'CctbConfPctToHold', 'CctbConfAddCurr', 'CctbConfMinMargHold', 'CctbConfMinMargBase', 'CctbConfHighLevlHold', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Cctbconfkey' => 0, 'Cctbconfcredline' => 1, 'Cctbconfcredcols' => 2, 'Cctbconfnotestoredays' => 3, 'Cctbconfavgmonths' => 4, 'Cctbconfavgfinchrg' => 5, 'Cctbconfallterms' => 6, 'Cctbconfterms01' => 7, 'Cctbconfterms02' => 8, 'Cctbconfterms03' => 9, 'Cctbconfterms04' => 10, 'Cctbconfterms05' => 11, 'Cctbconfterms06' => 12, 'Cctbconfterms07' => 13, 'Cctbconfterms08' => 14, 'Cctbconfterms09' => 15, 'Cctbconfterms10' => 16, 'Cctbconfterms11' => 17, 'Cctbconfterms12' => 18, 'Cctbconffutordrs' => 19, 'Cctbconfpickticket' => 20, 'Cctbconfpickalt' => 21, 'Cctbconfpickrel' => 22, 'Cctbconfuseodue' => 23, 'Cctbconfagelevlhold' => 24, 'Cctbconflevlamt' => 25, 'Cctbconfusecredlmt' => 26, 'Cctbconfpcttohold' => 27, 'Cctbconfaddcurr' => 28, 'Cctbconfminmarghold' => 29, 'Cctbconfminmargbase' => 30, 'Cctbconfhighlevlhold' => 31, 'Dateupdtd' => 32, 'Timeupdtd' => 33, 'Dummy' => 34, ),
        self::TYPE_CAMELNAME     => array('cctbconfkey' => 0, 'cctbconfcredline' => 1, 'cctbconfcredcols' => 2, 'cctbconfnotestoredays' => 3, 'cctbconfavgmonths' => 4, 'cctbconfavgfinchrg' => 5, 'cctbconfallterms' => 6, 'cctbconfterms01' => 7, 'cctbconfterms02' => 8, 'cctbconfterms03' => 9, 'cctbconfterms04' => 10, 'cctbconfterms05' => 11, 'cctbconfterms06' => 12, 'cctbconfterms07' => 13, 'cctbconfterms08' => 14, 'cctbconfterms09' => 15, 'cctbconfterms10' => 16, 'cctbconfterms11' => 17, 'cctbconfterms12' => 18, 'cctbconffutordrs' => 19, 'cctbconfpickticket' => 20, 'cctbconfpickalt' => 21, 'cctbconfpickrel' => 22, 'cctbconfuseodue' => 23, 'cctbconfagelevlhold' => 24, 'cctbconflevlamt' => 25, 'cctbconfusecredlmt' => 26, 'cctbconfpcttohold' => 27, 'cctbconfaddcurr' => 28, 'cctbconfminmarghold' => 29, 'cctbconfminmargbase' => 30, 'cctbconfhighlevlhold' => 31, 'dateupdtd' => 32, 'timeupdtd' => 33, 'dummy' => 34, ),
        self::TYPE_COLNAME       => array(ConfigCcTableMap::COL_CCTBCONFKEY => 0, ConfigCcTableMap::COL_CCTBCONFCREDLINE => 1, ConfigCcTableMap::COL_CCTBCONFCREDCOLS => 2, ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS => 3, ConfigCcTableMap::COL_CCTBCONFAVGMONTHS => 4, ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG => 5, ConfigCcTableMap::COL_CCTBCONFALLTERMS => 6, ConfigCcTableMap::COL_CCTBCONFTERMS01 => 7, ConfigCcTableMap::COL_CCTBCONFTERMS02 => 8, ConfigCcTableMap::COL_CCTBCONFTERMS03 => 9, ConfigCcTableMap::COL_CCTBCONFTERMS04 => 10, ConfigCcTableMap::COL_CCTBCONFTERMS05 => 11, ConfigCcTableMap::COL_CCTBCONFTERMS06 => 12, ConfigCcTableMap::COL_CCTBCONFTERMS07 => 13, ConfigCcTableMap::COL_CCTBCONFTERMS08 => 14, ConfigCcTableMap::COL_CCTBCONFTERMS09 => 15, ConfigCcTableMap::COL_CCTBCONFTERMS10 => 16, ConfigCcTableMap::COL_CCTBCONFTERMS11 => 17, ConfigCcTableMap::COL_CCTBCONFTERMS12 => 18, ConfigCcTableMap::COL_CCTBCONFFUTORDRS => 19, ConfigCcTableMap::COL_CCTBCONFPICKTICKET => 20, ConfigCcTableMap::COL_CCTBCONFPICKALT => 21, ConfigCcTableMap::COL_CCTBCONFPICKREL => 22, ConfigCcTableMap::COL_CCTBCONFUSEODUE => 23, ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD => 24, ConfigCcTableMap::COL_CCTBCONFLEVLAMT => 25, ConfigCcTableMap::COL_CCTBCONFUSECREDLMT => 26, ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD => 27, ConfigCcTableMap::COL_CCTBCONFADDCURR => 28, ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD => 29, ConfigCcTableMap::COL_CCTBCONFMINMARGBASE => 30, ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD => 31, ConfigCcTableMap::COL_DATEUPDTD => 32, ConfigCcTableMap::COL_TIMEUPDTD => 33, ConfigCcTableMap::COL_DUMMY => 34, ),
        self::TYPE_FIELDNAME     => array('CctbConfKey' => 0, 'CctbConfCredLine' => 1, 'CctbConfCredCols' => 2, 'CctbConfNoteStoreDays' => 3, 'CctbConfAvgMonths' => 4, 'CctbConfAvgFinChrg' => 5, 'CctbConfAllTerms' => 6, 'CctbConfTerms01' => 7, 'CctbConfTerms02' => 8, 'CctbConfTerms03' => 9, 'CctbConfTerms04' => 10, 'CctbConfTerms05' => 11, 'CctbConfTerms06' => 12, 'CctbConfTerms07' => 13, 'CctbConfTerms08' => 14, 'CctbConfTerms09' => 15, 'CctbConfTerms10' => 16, 'CctbConfTerms11' => 17, 'CctbConfTerms12' => 18, 'CctbConfFutOrdrs' => 19, 'CctbConfPickTicket' => 20, 'CctbConfPickAlt' => 21, 'CctbConfPickRel' => 22, 'CctbConfUseOdue' => 23, 'CctbConfAgeLevlHold' => 24, 'CctbConfLevlAmt' => 25, 'CctbConfUseCredLmt' => 26, 'CctbConfPctToHold' => 27, 'CctbConfAddCurr' => 28, 'CctbConfMinMargHold' => 29, 'CctbConfMinMargBase' => 30, 'CctbConfHighLevlHold' => 31, 'DateUpdtd' => 32, 'TimeUpdtd' => 33, 'dummy' => 34, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
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
        $this->setName('cc_config');
        $this->setPhpName('ConfigCc');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigCc');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CctbConfKey', 'Cctbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('CctbConfCredLine', 'Cctbconfcredline', 'INTEGER', false, 2, null);
        $this->addColumn('CctbConfCredCols', 'Cctbconfcredcols', 'INTEGER', false, 2, null);
        $this->addColumn('CctbConfNoteStoreDays', 'Cctbconfnotestoredays', 'INTEGER', false, 4, null);
        $this->addColumn('CctbConfAvgMonths', 'Cctbconfavgmonths', 'INTEGER', false, 3, null);
        $this->addColumn('CctbConfAvgFinChrg', 'Cctbconfavgfinchrg', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfAllTerms', 'Cctbconfallterms', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfTerms01', 'Cctbconfterms01', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms02', 'Cctbconfterms02', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms03', 'Cctbconfterms03', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms04', 'Cctbconfterms04', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms05', 'Cctbconfterms05', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms06', 'Cctbconfterms06', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms07', 'Cctbconfterms07', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms08', 'Cctbconfterms08', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms09', 'Cctbconfterms09', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms10', 'Cctbconfterms10', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms11', 'Cctbconfterms11', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfTerms12', 'Cctbconfterms12', 'VARCHAR', false, 4, null);
        $this->addColumn('CctbConfFutOrdrs', 'Cctbconffutordrs', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfPickTicket', 'Cctbconfpickticket', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfPickAlt', 'Cctbconfpickalt', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfPickRel', 'Cctbconfpickrel', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfUseOdue', 'Cctbconfuseodue', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfAgeLevlHold', 'Cctbconfagelevlhold', 'INTEGER', false, 1, null);
        $this->addColumn('CctbConfLevlAmt', 'Cctbconflevlamt', 'INTEGER', false, 7, null);
        $this->addColumn('CctbConfUseCredLmt', 'Cctbconfusecredlmt', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfPctToHold', 'Cctbconfpcttohold', 'DECIMAL', false, 20, null);
        $this->addColumn('CctbConfAddCurr', 'Cctbconfaddcurr', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfMinMargHold', 'Cctbconfminmarghold', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfMinMargBase', 'Cctbconfminmargbase', 'VARCHAR', false, 1, null);
        $this->addColumn('CctbConfHighLevlHold', 'Cctbconfhighlevlhold', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Cctbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigCcTableMap::CLASS_DEFAULT : ConfigCcTableMap::OM_CLASS;
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
     * @return array           (ConfigCc object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigCcTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigCcTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigCcTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigCcTableMap::OM_CLASS;
            /** @var ConfigCc $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigCcTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigCcTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigCcTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigCc $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigCcTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFKEY);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFCREDLINE);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFCREDCOLS);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFALLTERMS);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS01);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS02);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS03);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS04);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS05);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS06);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS07);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS08);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS09);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS10);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS11);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFTERMS12);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFFUTORDRS);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFPICKTICKET);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFPICKALT);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFPICKREL);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFUSEODUE);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFLEVLAMT);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFUSECREDLMT);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFADDCURR);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFMINMARGBASE);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigCcTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.CctbConfKey');
            $criteria->addSelectColumn($alias . '.CctbConfCredLine');
            $criteria->addSelectColumn($alias . '.CctbConfCredCols');
            $criteria->addSelectColumn($alias . '.CctbConfNoteStoreDays');
            $criteria->addSelectColumn($alias . '.CctbConfAvgMonths');
            $criteria->addSelectColumn($alias . '.CctbConfAvgFinChrg');
            $criteria->addSelectColumn($alias . '.CctbConfAllTerms');
            $criteria->addSelectColumn($alias . '.CctbConfTerms01');
            $criteria->addSelectColumn($alias . '.CctbConfTerms02');
            $criteria->addSelectColumn($alias . '.CctbConfTerms03');
            $criteria->addSelectColumn($alias . '.CctbConfTerms04');
            $criteria->addSelectColumn($alias . '.CctbConfTerms05');
            $criteria->addSelectColumn($alias . '.CctbConfTerms06');
            $criteria->addSelectColumn($alias . '.CctbConfTerms07');
            $criteria->addSelectColumn($alias . '.CctbConfTerms08');
            $criteria->addSelectColumn($alias . '.CctbConfTerms09');
            $criteria->addSelectColumn($alias . '.CctbConfTerms10');
            $criteria->addSelectColumn($alias . '.CctbConfTerms11');
            $criteria->addSelectColumn($alias . '.CctbConfTerms12');
            $criteria->addSelectColumn($alias . '.CctbConfFutOrdrs');
            $criteria->addSelectColumn($alias . '.CctbConfPickTicket');
            $criteria->addSelectColumn($alias . '.CctbConfPickAlt');
            $criteria->addSelectColumn($alias . '.CctbConfPickRel');
            $criteria->addSelectColumn($alias . '.CctbConfUseOdue');
            $criteria->addSelectColumn($alias . '.CctbConfAgeLevlHold');
            $criteria->addSelectColumn($alias . '.CctbConfLevlAmt');
            $criteria->addSelectColumn($alias . '.CctbConfUseCredLmt');
            $criteria->addSelectColumn($alias . '.CctbConfPctToHold');
            $criteria->addSelectColumn($alias . '.CctbConfAddCurr');
            $criteria->addSelectColumn($alias . '.CctbConfMinMargHold');
            $criteria->addSelectColumn($alias . '.CctbConfMinMargBase');
            $criteria->addSelectColumn($alias . '.CctbConfHighLevlHold');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigCcTableMap::DATABASE_NAME)->getTable(ConfigCcTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigCcTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigCcTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigCcTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigCc or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigCc object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigCc) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigCcTableMap::DATABASE_NAME);
            $criteria->add(ConfigCcTableMap::COL_CCTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigCcQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigCcTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigCcTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the cc_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigCcQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigCc or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigCc object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigCc object
        }


        // Set the correct dbName
        $query = ConfigCcQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigCcTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigCcTableMap::buildTableMap();
