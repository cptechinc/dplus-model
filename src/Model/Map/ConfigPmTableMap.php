<?php

namespace Map;

use \ConfigPm;
use \ConfigPmQuery;
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
 * This class defines the structure of the 'pm_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ConfigPmTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigPmTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'pm_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigPm';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigPm';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 38;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 38;

    /**
     * the column name for the PmtbConfKey field
     */
    const COL_PMTBCONFKEY = 'pm_config.PmtbConfKey';

    /**
     * the column name for the PmtbConfBaseSystem field
     */
    const COL_PMTBCONFBASESYSTEM = 'pm_config.PmtbConfBaseSystem';

    /**
     * the column name for the PmtbConfAdvancedSystem field
     */
    const COL_PMTBCONFADVANCEDSYSTEM = 'pm_config.PmtbConfAdvancedSystem';

    /**
     * the column name for the PmtbConfAllowNegUse field
     */
    const COL_PMTBCONFALLOWNEGUSE = 'pm_config.PmtbConfAllowNegUse';

    /**
     * the column name for the PmtbConfScrapUnused field
     */
    const COL_PMTBCONFSCRAPUNUSED = 'pm_config.PmtbConfScrapUnused';

    /**
     * the column name for the PmtbConfScrapGl field
     */
    const COL_PMTBCONFSCRAPGL = 'pm_config.PmtbConfScrapGl';

    /**
     * the column name for the PmtbConfWarnQtyToZero field
     */
    const COL_PMTBCONFWARNQTYTOZERO = 'pm_config.PmtbConfWarnQtyToZero';

    /**
     * the column name for the PmtbConfVarGl field
     */
    const COL_PMTBCONFVARGL = 'pm_config.PmtbConfVarGl';

    /**
     * the column name for the PmtbConfPutBinCode field
     */
    const COL_PMTBCONFPUTBINCODE = 'pm_config.PmtbConfPutBinCode';

    /**
     * the column name for the PmtbConfPutBinDflt field
     */
    const COL_PMTBCONFPUTBINDFLT = 'pm_config.PmtbConfPutBinDflt';

    /**
     * the column name for the PmtbConfSerialBase field
     */
    const COL_PMTBCONFSERIALBASE = 'pm_config.PmtbConfSerialBase';

    /**
     * the column name for the PmtbConfFgAtStan field
     */
    const COL_PMTBCONFFGATSTAN = 'pm_config.PmtbConfFgAtStan';

    /**
     * the column name for the PmtbConfGlFgToMat field
     */
    const COL_PMTBCONFGLFGTOMAT = 'pm_config.PmtbConfGlFgToMat';

    /**
     * the column name for the PmtbConfPostDetSum field
     */
    const COL_PMTBCONFPOSTDETSUM = 'pm_config.PmtbConfPostDetSum';

    /**
     * the column name for the PmtbConfSort field
     */
    const COL_PMTBCONFSORT = 'pm_config.PmtbConfSort';

    /**
     * the column name for the PmtbConfLastCost field
     */
    const COL_PMTBCONFLASTCOST = 'pm_config.PmtbConfLastCost';

    /**
     * the column name for the PmtbConfAskBom field
     */
    const COL_PMTBCONFASKBOM = 'pm_config.PmtbConfAskBom';

    /**
     * the column name for the PmtbConfDefBom field
     */
    const COL_PMTBCONFDEFBOM = 'pm_config.PmtbConfDefBom';

    /**
     * the column name for the PmtbConfAutoSelectLots field
     */
    const COL_PMTBCONFAUTOSELECTLOTS = 'pm_config.PmtbConfAutoSelectLots';

    /**
     * the column name for the PmtbConfAllocWhenIC field
     */
    const COL_PMTBCONFALLOCWHENIC = 'pm_config.PmtbConfAllocWhenIC';

    /**
     * the column name for the PmtbConfUseWpc field
     */
    const COL_PMTBCONFUSEWPC = 'pm_config.PmtbConfUseWpc';

    /**
     * the column name for the PmtbConfPowgWipInProc field
     */
    const COL_PMTBCONFPOWGWIPINPROC = 'pm_config.PmtbConfPowgWipInProc';

    /**
     * the column name for the PmtbConfLrsCost field
     */
    const COL_PMTBCONFLRSCOST = 'pm_config.PmtbConfLrsCost';

    /**
     * the column name for the PmtbConfVariAcctg field
     */
    const COL_PMTBCONFVARIACCTG = 'pm_config.PmtbConfVariAcctg';

    /**
     * the column name for the PmtbConfTakeBinCode field
     */
    const COL_PMTBCONFTAKEBINCODE = 'pm_config.PmtbConfTakeBinCode';

    /**
     * the column name for the PmtbConfUseFgUom field
     */
    const COL_PMTBCONFUSEFGUOM = 'pm_config.PmtbConfUseFgUom';

    /**
     * the column name for the PmtbConfUseNc field
     */
    const COL_PMTBCONFUSENC = 'pm_config.PmtbConfUseNc';

    /**
     * the column name for the PmtbConfUseNegWip field
     */
    const COL_PMTBCONFUSENEGWIP = 'pm_config.PmtbConfUseNegWip';

    /**
     * the column name for the PmtbCon2AdvWipActEntry field
     */
    const COL_PMTBCON2ADVWIPACTENTRY = 'pm_config.PmtbCon2AdvWipActEntry';

    /**
     * the column name for the PmtbCon2MachLaborGl field
     */
    const COL_PMTBCON2MACHLABORGL = 'pm_config.PmtbCon2MachLaborGl';

    /**
     * the column name for the PmtbCon2MachSetupGl field
     */
    const COL_PMTBCON2MACHSETUPGL = 'pm_config.PmtbCon2MachSetupGl';

    /**
     * the column name for the PmtbCon2BurdenLaborGl field
     */
    const COL_PMTBCON2BURDENLABORGL = 'pm_config.PmtbCon2BurdenLaborGl';

    /**
     * the column name for the PmtbCon2BurdenMachGl field
     */
    const COL_PMTBCON2BURDENMACHGL = 'pm_config.PmtbCon2BurdenMachGl';

    /**
     * the column name for the PmtbCon2BurdenAdminGl field
     */
    const COL_PMTBCON2BURDENADMINGL = 'pm_config.PmtbCon2BurdenAdminGl';

    /**
     * the column name for the PmtbCon2SetupAsOper field
     */
    const COL_PMTBCON2SETUPASOPER = 'pm_config.PmtbCon2SetupAsOper';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'pm_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'pm_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'pm_config.dummy';

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
        self::TYPE_PHPNAME       => array('Pmtbconfkey', 'Pmtbconfbasesystem', 'Pmtbconfadvancedsystem', 'Pmtbconfallowneguse', 'Pmtbconfscrapunused', 'Pmtbconfscrapgl', 'Pmtbconfwarnqtytozero', 'Pmtbconfvargl', 'Pmtbconfputbincode', 'Pmtbconfputbindflt', 'Pmtbconfserialbase', 'Pmtbconffgatstan', 'Pmtbconfglfgtomat', 'Pmtbconfpostdetsum', 'Pmtbconfsort', 'Pmtbconflastcost', 'Pmtbconfaskbom', 'Pmtbconfdefbom', 'Pmtbconfautoselectlots', 'Pmtbconfallocwhenic', 'Pmtbconfusewpc', 'Pmtbconfpowgwipinproc', 'Pmtbconflrscost', 'Pmtbconfvariacctg', 'Pmtbconftakebincode', 'Pmtbconfusefguom', 'Pmtbconfusenc', 'Pmtbconfusenegwip', 'Pmtbcon2advwipactentry', 'Pmtbcon2machlaborgl', 'Pmtbcon2machsetupgl', 'Pmtbcon2burdenlaborgl', 'Pmtbcon2burdenmachgl', 'Pmtbcon2burdenadmingl', 'Pmtbcon2setupasoper', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('pmtbconfkey', 'pmtbconfbasesystem', 'pmtbconfadvancedsystem', 'pmtbconfallowneguse', 'pmtbconfscrapunused', 'pmtbconfscrapgl', 'pmtbconfwarnqtytozero', 'pmtbconfvargl', 'pmtbconfputbincode', 'pmtbconfputbindflt', 'pmtbconfserialbase', 'pmtbconffgatstan', 'pmtbconfglfgtomat', 'pmtbconfpostdetsum', 'pmtbconfsort', 'pmtbconflastcost', 'pmtbconfaskbom', 'pmtbconfdefbom', 'pmtbconfautoselectlots', 'pmtbconfallocwhenic', 'pmtbconfusewpc', 'pmtbconfpowgwipinproc', 'pmtbconflrscost', 'pmtbconfvariacctg', 'pmtbconftakebincode', 'pmtbconfusefguom', 'pmtbconfusenc', 'pmtbconfusenegwip', 'pmtbcon2advwipactentry', 'pmtbcon2machlaborgl', 'pmtbcon2machsetupgl', 'pmtbcon2burdenlaborgl', 'pmtbcon2burdenmachgl', 'pmtbcon2burdenadmingl', 'pmtbcon2setupasoper', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigPmTableMap::COL_PMTBCONFKEY, ConfigPmTableMap::COL_PMTBCONFBASESYSTEM, ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM, ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE, ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED, ConfigPmTableMap::COL_PMTBCONFSCRAPGL, ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO, ConfigPmTableMap::COL_PMTBCONFVARGL, ConfigPmTableMap::COL_PMTBCONFPUTBINCODE, ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT, ConfigPmTableMap::COL_PMTBCONFSERIALBASE, ConfigPmTableMap::COL_PMTBCONFFGATSTAN, ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT, ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM, ConfigPmTableMap::COL_PMTBCONFSORT, ConfigPmTableMap::COL_PMTBCONFLASTCOST, ConfigPmTableMap::COL_PMTBCONFASKBOM, ConfigPmTableMap::COL_PMTBCONFDEFBOM, ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS, ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC, ConfigPmTableMap::COL_PMTBCONFUSEWPC, ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC, ConfigPmTableMap::COL_PMTBCONFLRSCOST, ConfigPmTableMap::COL_PMTBCONFVARIACCTG, ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE, ConfigPmTableMap::COL_PMTBCONFUSEFGUOM, ConfigPmTableMap::COL_PMTBCONFUSENC, ConfigPmTableMap::COL_PMTBCONFUSENEGWIP, ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY, ConfigPmTableMap::COL_PMTBCON2MACHLABORGL, ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL, ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL, ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL, ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL, ConfigPmTableMap::COL_PMTBCON2SETUPASOPER, ConfigPmTableMap::COL_DATEUPDTD, ConfigPmTableMap::COL_TIMEUPDTD, ConfigPmTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PmtbConfKey', 'PmtbConfBaseSystem', 'PmtbConfAdvancedSystem', 'PmtbConfAllowNegUse', 'PmtbConfScrapUnused', 'PmtbConfScrapGl', 'PmtbConfWarnQtyToZero', 'PmtbConfVarGl', 'PmtbConfPutBinCode', 'PmtbConfPutBinDflt', 'PmtbConfSerialBase', 'PmtbConfFgAtStan', 'PmtbConfGlFgToMat', 'PmtbConfPostDetSum', 'PmtbConfSort', 'PmtbConfLastCost', 'PmtbConfAskBom', 'PmtbConfDefBom', 'PmtbConfAutoSelectLots', 'PmtbConfAllocWhenIC', 'PmtbConfUseWpc', 'PmtbConfPowgWipInProc', 'PmtbConfLrsCost', 'PmtbConfVariAcctg', 'PmtbConfTakeBinCode', 'PmtbConfUseFgUom', 'PmtbConfUseNc', 'PmtbConfUseNegWip', 'PmtbCon2AdvWipActEntry', 'PmtbCon2MachLaborGl', 'PmtbCon2MachSetupGl', 'PmtbCon2BurdenLaborGl', 'PmtbCon2BurdenMachGl', 'PmtbCon2BurdenAdminGl', 'PmtbCon2SetupAsOper', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pmtbconfkey' => 0, 'Pmtbconfbasesystem' => 1, 'Pmtbconfadvancedsystem' => 2, 'Pmtbconfallowneguse' => 3, 'Pmtbconfscrapunused' => 4, 'Pmtbconfscrapgl' => 5, 'Pmtbconfwarnqtytozero' => 6, 'Pmtbconfvargl' => 7, 'Pmtbconfputbincode' => 8, 'Pmtbconfputbindflt' => 9, 'Pmtbconfserialbase' => 10, 'Pmtbconffgatstan' => 11, 'Pmtbconfglfgtomat' => 12, 'Pmtbconfpostdetsum' => 13, 'Pmtbconfsort' => 14, 'Pmtbconflastcost' => 15, 'Pmtbconfaskbom' => 16, 'Pmtbconfdefbom' => 17, 'Pmtbconfautoselectlots' => 18, 'Pmtbconfallocwhenic' => 19, 'Pmtbconfusewpc' => 20, 'Pmtbconfpowgwipinproc' => 21, 'Pmtbconflrscost' => 22, 'Pmtbconfvariacctg' => 23, 'Pmtbconftakebincode' => 24, 'Pmtbconfusefguom' => 25, 'Pmtbconfusenc' => 26, 'Pmtbconfusenegwip' => 27, 'Pmtbcon2advwipactentry' => 28, 'Pmtbcon2machlaborgl' => 29, 'Pmtbcon2machsetupgl' => 30, 'Pmtbcon2burdenlaborgl' => 31, 'Pmtbcon2burdenmachgl' => 32, 'Pmtbcon2burdenadmingl' => 33, 'Pmtbcon2setupasoper' => 34, 'Dateupdtd' => 35, 'Timeupdtd' => 36, 'Dummy' => 37, ),
        self::TYPE_CAMELNAME     => array('pmtbconfkey' => 0, 'pmtbconfbasesystem' => 1, 'pmtbconfadvancedsystem' => 2, 'pmtbconfallowneguse' => 3, 'pmtbconfscrapunused' => 4, 'pmtbconfscrapgl' => 5, 'pmtbconfwarnqtytozero' => 6, 'pmtbconfvargl' => 7, 'pmtbconfputbincode' => 8, 'pmtbconfputbindflt' => 9, 'pmtbconfserialbase' => 10, 'pmtbconffgatstan' => 11, 'pmtbconfglfgtomat' => 12, 'pmtbconfpostdetsum' => 13, 'pmtbconfsort' => 14, 'pmtbconflastcost' => 15, 'pmtbconfaskbom' => 16, 'pmtbconfdefbom' => 17, 'pmtbconfautoselectlots' => 18, 'pmtbconfallocwhenic' => 19, 'pmtbconfusewpc' => 20, 'pmtbconfpowgwipinproc' => 21, 'pmtbconflrscost' => 22, 'pmtbconfvariacctg' => 23, 'pmtbconftakebincode' => 24, 'pmtbconfusefguom' => 25, 'pmtbconfusenc' => 26, 'pmtbconfusenegwip' => 27, 'pmtbcon2advwipactentry' => 28, 'pmtbcon2machlaborgl' => 29, 'pmtbcon2machsetupgl' => 30, 'pmtbcon2burdenlaborgl' => 31, 'pmtbcon2burdenmachgl' => 32, 'pmtbcon2burdenadmingl' => 33, 'pmtbcon2setupasoper' => 34, 'dateupdtd' => 35, 'timeupdtd' => 36, 'dummy' => 37, ),
        self::TYPE_COLNAME       => array(ConfigPmTableMap::COL_PMTBCONFKEY => 0, ConfigPmTableMap::COL_PMTBCONFBASESYSTEM => 1, ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM => 2, ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE => 3, ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED => 4, ConfigPmTableMap::COL_PMTBCONFSCRAPGL => 5, ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO => 6, ConfigPmTableMap::COL_PMTBCONFVARGL => 7, ConfigPmTableMap::COL_PMTBCONFPUTBINCODE => 8, ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT => 9, ConfigPmTableMap::COL_PMTBCONFSERIALBASE => 10, ConfigPmTableMap::COL_PMTBCONFFGATSTAN => 11, ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT => 12, ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM => 13, ConfigPmTableMap::COL_PMTBCONFSORT => 14, ConfigPmTableMap::COL_PMTBCONFLASTCOST => 15, ConfigPmTableMap::COL_PMTBCONFASKBOM => 16, ConfigPmTableMap::COL_PMTBCONFDEFBOM => 17, ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS => 18, ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC => 19, ConfigPmTableMap::COL_PMTBCONFUSEWPC => 20, ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC => 21, ConfigPmTableMap::COL_PMTBCONFLRSCOST => 22, ConfigPmTableMap::COL_PMTBCONFVARIACCTG => 23, ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE => 24, ConfigPmTableMap::COL_PMTBCONFUSEFGUOM => 25, ConfigPmTableMap::COL_PMTBCONFUSENC => 26, ConfigPmTableMap::COL_PMTBCONFUSENEGWIP => 27, ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY => 28, ConfigPmTableMap::COL_PMTBCON2MACHLABORGL => 29, ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL => 30, ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL => 31, ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL => 32, ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL => 33, ConfigPmTableMap::COL_PMTBCON2SETUPASOPER => 34, ConfigPmTableMap::COL_DATEUPDTD => 35, ConfigPmTableMap::COL_TIMEUPDTD => 36, ConfigPmTableMap::COL_DUMMY => 37, ),
        self::TYPE_FIELDNAME     => array('PmtbConfKey' => 0, 'PmtbConfBaseSystem' => 1, 'PmtbConfAdvancedSystem' => 2, 'PmtbConfAllowNegUse' => 3, 'PmtbConfScrapUnused' => 4, 'PmtbConfScrapGl' => 5, 'PmtbConfWarnQtyToZero' => 6, 'PmtbConfVarGl' => 7, 'PmtbConfPutBinCode' => 8, 'PmtbConfPutBinDflt' => 9, 'PmtbConfSerialBase' => 10, 'PmtbConfFgAtStan' => 11, 'PmtbConfGlFgToMat' => 12, 'PmtbConfPostDetSum' => 13, 'PmtbConfSort' => 14, 'PmtbConfLastCost' => 15, 'PmtbConfAskBom' => 16, 'PmtbConfDefBom' => 17, 'PmtbConfAutoSelectLots' => 18, 'PmtbConfAllocWhenIC' => 19, 'PmtbConfUseWpc' => 20, 'PmtbConfPowgWipInProc' => 21, 'PmtbConfLrsCost' => 22, 'PmtbConfVariAcctg' => 23, 'PmtbConfTakeBinCode' => 24, 'PmtbConfUseFgUom' => 25, 'PmtbConfUseNc' => 26, 'PmtbConfUseNegWip' => 27, 'PmtbCon2AdvWipActEntry' => 28, 'PmtbCon2MachLaborGl' => 29, 'PmtbCon2MachSetupGl' => 30, 'PmtbCon2BurdenLaborGl' => 31, 'PmtbCon2BurdenMachGl' => 32, 'PmtbCon2BurdenAdminGl' => 33, 'PmtbCon2SetupAsOper' => 34, 'DateUpdtd' => 35, 'TimeUpdtd' => 36, 'dummy' => 37, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
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
        $this->setName('pm_config');
        $this->setPhpName('ConfigPm');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigPm');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PmtbConfKey', 'Pmtbconfkey', 'INTEGER', true, 1, 0);
        $this->addColumn('PmtbConfBaseSystem', 'Pmtbconfbasesystem', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfAdvancedSystem', 'Pmtbconfadvancedsystem', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfAllowNegUse', 'Pmtbconfallowneguse', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfScrapUnused', 'Pmtbconfscrapunused', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfScrapGl', 'Pmtbconfscrapgl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbConfWarnQtyToZero', 'Pmtbconfwarnqtytozero', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfVarGl', 'Pmtbconfvargl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbConfPutBinCode', 'Pmtbconfputbincode', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfPutBinDflt', 'Pmtbconfputbindflt', 'VARCHAR', false, 8, null);
        $this->addColumn('PmtbConfSerialBase', 'Pmtbconfserialbase', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfFgAtStan', 'Pmtbconffgatstan', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfGlFgToMat', 'Pmtbconfglfgtomat', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbConfPostDetSum', 'Pmtbconfpostdetsum', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfSort', 'Pmtbconfsort', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfLastCost', 'Pmtbconflastcost', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfAskBom', 'Pmtbconfaskbom', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfDefBom', 'Pmtbconfdefbom', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfAutoSelectLots', 'Pmtbconfautoselectlots', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfAllocWhenIC', 'Pmtbconfallocwhenic', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfUseWpc', 'Pmtbconfusewpc', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfPowgWipInProc', 'Pmtbconfpowgwipinproc', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfLrsCost', 'Pmtbconflrscost', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfVariAcctg', 'Pmtbconfvariacctg', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfTakeBinCode', 'Pmtbconftakebincode', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfUseFgUom', 'Pmtbconfusefguom', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfUseNc', 'Pmtbconfusenc', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbConfUseNegWip', 'Pmtbconfusenegwip', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbCon2AdvWipActEntry', 'Pmtbcon2advwipactentry', 'VARCHAR', false, 1, null);
        $this->addColumn('PmtbCon2MachLaborGl', 'Pmtbcon2machlaborgl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbCon2MachSetupGl', 'Pmtbcon2machsetupgl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbCon2BurdenLaborGl', 'Pmtbcon2burdenlaborgl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbCon2BurdenMachGl', 'Pmtbcon2burdenmachgl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbCon2BurdenAdminGl', 'Pmtbcon2burdenadmingl', 'VARCHAR', false, 9, null);
        $this->addColumn('PmtbCon2SetupAsOper', 'Pmtbcon2setupasoper', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Pmtbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigPmTableMap::CLASS_DEFAULT : ConfigPmTableMap::OM_CLASS;
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
     * @return array           (ConfigPm object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ConfigPmTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigPmTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigPmTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigPmTableMap::OM_CLASS;
            /** @var ConfigPm $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigPmTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigPmTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigPmTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigPm $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigPmTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFKEY);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFBASESYSTEM);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFSCRAPGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFVARGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFPUTBINCODE);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFSERIALBASE);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFFGATSTAN);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFSORT);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFLASTCOST);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFASKBOM);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFDEFBOM);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFUSEWPC);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFLRSCOST);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFVARIACCTG);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFUSEFGUOM);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFUSENC);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCONFUSENEGWIP);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2MACHLABORGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_PMTBCON2SETUPASOPER);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigPmTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PmtbConfKey');
            $criteria->addSelectColumn($alias . '.PmtbConfBaseSystem');
            $criteria->addSelectColumn($alias . '.PmtbConfAdvancedSystem');
            $criteria->addSelectColumn($alias . '.PmtbConfAllowNegUse');
            $criteria->addSelectColumn($alias . '.PmtbConfScrapUnused');
            $criteria->addSelectColumn($alias . '.PmtbConfScrapGl');
            $criteria->addSelectColumn($alias . '.PmtbConfWarnQtyToZero');
            $criteria->addSelectColumn($alias . '.PmtbConfVarGl');
            $criteria->addSelectColumn($alias . '.PmtbConfPutBinCode');
            $criteria->addSelectColumn($alias . '.PmtbConfPutBinDflt');
            $criteria->addSelectColumn($alias . '.PmtbConfSerialBase');
            $criteria->addSelectColumn($alias . '.PmtbConfFgAtStan');
            $criteria->addSelectColumn($alias . '.PmtbConfGlFgToMat');
            $criteria->addSelectColumn($alias . '.PmtbConfPostDetSum');
            $criteria->addSelectColumn($alias . '.PmtbConfSort');
            $criteria->addSelectColumn($alias . '.PmtbConfLastCost');
            $criteria->addSelectColumn($alias . '.PmtbConfAskBom');
            $criteria->addSelectColumn($alias . '.PmtbConfDefBom');
            $criteria->addSelectColumn($alias . '.PmtbConfAutoSelectLots');
            $criteria->addSelectColumn($alias . '.PmtbConfAllocWhenIC');
            $criteria->addSelectColumn($alias . '.PmtbConfUseWpc');
            $criteria->addSelectColumn($alias . '.PmtbConfPowgWipInProc');
            $criteria->addSelectColumn($alias . '.PmtbConfLrsCost');
            $criteria->addSelectColumn($alias . '.PmtbConfVariAcctg');
            $criteria->addSelectColumn($alias . '.PmtbConfTakeBinCode');
            $criteria->addSelectColumn($alias . '.PmtbConfUseFgUom');
            $criteria->addSelectColumn($alias . '.PmtbConfUseNc');
            $criteria->addSelectColumn($alias . '.PmtbConfUseNegWip');
            $criteria->addSelectColumn($alias . '.PmtbCon2AdvWipActEntry');
            $criteria->addSelectColumn($alias . '.PmtbCon2MachLaborGl');
            $criteria->addSelectColumn($alias . '.PmtbCon2MachSetupGl');
            $criteria->addSelectColumn($alias . '.PmtbCon2BurdenLaborGl');
            $criteria->addSelectColumn($alias . '.PmtbCon2BurdenMachGl');
            $criteria->addSelectColumn($alias . '.PmtbCon2BurdenAdminGl');
            $criteria->addSelectColumn($alias . '.PmtbCon2SetupAsOper');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigPmTableMap::DATABASE_NAME)->getTable(ConfigPmTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigPmTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigPmTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigPmTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigPm or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigPm object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigPm) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigPmTableMap::DATABASE_NAME);
            $criteria->add(ConfigPmTableMap::COL_PMTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigPmQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigPmTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigPmTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the pm_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigPmQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigPm or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigPm object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigPm object
        }


        // Set the correct dbName
        $query = ConfigPmQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ConfigPmTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigPmTableMap::buildTableMap();
