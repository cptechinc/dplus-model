<?php

namespace Map;

use \DplusUser;
use \DplusUserQuery;
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
 * This class defines the structure of the 'sys_login' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class DplusUserTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.DplusUserTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'sys_login';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\DplusUser';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'DplusUser';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 43;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 43;

    /**
     * the column name for the UsrcId field
     */
    const COL_USRCID = 'sys_login.UsrcId';

    /**
     * the column name for the UsrcLoginName field
     */
    const COL_USRCLOGINNAME = 'sys_login.UsrcLoginName';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'sys_login.IntbWhse';

    /**
     * the column name for the UsrcDefCmpy field
     */
    const COL_USRCDEFCMPY = 'sys_login.UsrcDefCmpy';

    /**
     * the column name for the UsrcAdmin field
     */
    const COL_USRCADMIN = 'sys_login.UsrcAdmin';

    /**
     * the column name for the UsrcFront field
     */
    const COL_USRCFRONT = 'sys_login.UsrcFront';

    /**
     * the column name for the UsrcCityDesk field
     */
    const COL_USRCCITYDESK = 'sys_login.UsrcCityDesk';

    /**
     * the column name for the UsrcReptAdmin field
     */
    const COL_USRCREPTADMIN = 'sys_login.UsrcReptAdmin';

    /**
     * the column name for the UsrcPrinter field
     */
    const COL_USRCPRINTER = 'sys_login.UsrcPrinter';

    /**
     * the column name for the UsrcPitch field
     */
    const COL_USRCPITCH = 'sys_login.UsrcPitch';

    /**
     * the column name for the UsrcBrowsePrinter field
     */
    const COL_USRCBROWSEPRINTER = 'sys_login.UsrcBrowsePrinter';

    /**
     * the column name for the UsrcWhseDisplaySeq field
     */
    const COL_USRCWHSEDISPLAYSEQ = 'sys_login.UsrcWhseDisplaySeq';

    /**
     * the column name for the UsrcActiveItemsOnly field
     */
    const COL_USRCACTIVEITEMSONLY = 'sys_login.UsrcActiveItemsOnly';

    /**
     * the column name for the UsrcRestrictAccess field
     */
    const COL_USRCRESTRICTACCESS = 'sys_login.UsrcRestrictAccess';

    /**
     * the column name for the UsrcLoginGroup field
     */
    const COL_USRCLOGINGROUP = 'sys_login.UsrcLoginGroup';

    /**
     * the column name for the UsrcLoginRole field
     */
    const COL_USRCLOGINROLE = 'sys_login.UsrcLoginRole';

    /**
     * the column name for the UsrcAllowProcRemoval field
     */
    const COL_USRCALLOWPROCREMOVAL = 'sys_login.UsrcAllowProcRemoval';

    /**
     * the column name for the UsrcAcAllowWarrEdit field
     */
    const COL_USRCACALLOWWARREDIT = 'sys_login.UsrcAcAllowWarrEdit';

    /**
     * the column name for the UsrcIsProdMgr field
     */
    const COL_USRCISPRODMGR = 'sys_login.UsrcIsProdMgr';

    /**
     * the column name for the UsrcLmAllowCrossWhse field
     */
    const COL_USRCLMALLOWCROSSWHSE = 'sys_login.UsrcLmAllowCrossWhse';

    /**
     * the column name for the UsrcPswd field
     */
    const COL_USRCPSWD = 'sys_login.UsrcPswd';

    /**
     * the column name for the UsrcFaxName field
     */
    const COL_USRCFAXNAME = 'sys_login.UsrcFaxName';

    /**
     * the column name for the UsrcFaxCompany field
     */
    const COL_USRCFAXCOMPANY = 'sys_login.UsrcFaxCompany';

    /**
     * the column name for the UsrcFaxArea field
     */
    const COL_USRCFAXAREA = 'sys_login.UsrcFaxArea';

    /**
     * the column name for the UsrcFaxFrst3 field
     */
    const COL_USRCFAXFRST3 = 'sys_login.UsrcFaxFrst3';

    /**
     * the column name for the UsrcFaxLast4 field
     */
    const COL_USRCFAXLAST4 = 'sys_login.UsrcFaxLast4';

    /**
     * the column name for the UsrcPhoneArea field
     */
    const COL_USRCPHONEAREA = 'sys_login.UsrcPhoneArea';

    /**
     * the column name for the UsrcPhoneFrst3 field
     */
    const COL_USRCPHONEFRST3 = 'sys_login.UsrcPhoneFrst3';

    /**
     * the column name for the UsrcPhoneLast4 field
     */
    const COL_USRCPHONELAST4 = 'sys_login.UsrcPhoneLast4';

    /**
     * the column name for the UsrcPhoneExt field
     */
    const COL_USRCPHONEEXT = 'sys_login.UsrcPhoneExt';

    /**
     * the column name for the UsrcSendTime field
     */
    const COL_USRCSENDTIME = 'sys_login.UsrcSendTime';

    /**
     * the column name for the UsrcCoverSheet field
     */
    const COL_USRCCOVERSHEET = 'sys_login.UsrcCoverSheet';

    /**
     * the column name for the UsrcSubject field
     */
    const COL_USRCSUBJECT = 'sys_login.UsrcSubject';

    /**
     * the column name for the UsrcNotifyS field
     */
    const COL_USRCNOTIFYS = 'sys_login.UsrcNotifyS';

    /**
     * the column name for the UsrcNotifyF field
     */
    const COL_USRCNOTIFYF = 'sys_login.UsrcNotifyF';

    /**
     * the column name for the UsrcEmailAddr field
     */
    const COL_USRCEMAILADDR = 'sys_login.UsrcEmailAddr';

    /**
     * the column name for the UsrcScaleWhseId field
     */
    const COL_USRCSCALEWHSEID = 'sys_login.UsrcScaleWhseId';

    /**
     * the column name for the UsrcScaleDevNbr field
     */
    const COL_USRCSCALEDEVNBR = 'sys_login.UsrcScaleDevNbr';

    /**
     * the column name for the UsrcCcscanWhseId field
     */
    const COL_USRCCCSCANWHSEID = 'sys_login.UsrcCcscanWhseId';

    /**
     * the column name for the UsrcCcscanDevNbr field
     */
    const COL_USRCCCSCANDEVNBR = 'sys_login.UsrcCcscanDevNbr';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'sys_login.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'sys_login.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'sys_login.dummy';

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
        self::TYPE_PHPNAME       => array('Usrcid', 'Usrcloginname', 'Intbwhse', 'Usrcdefcmpy', 'Usrcadmin', 'Usrcfront', 'Usrccitydesk', 'Usrcreptadmin', 'Usrcprinter', 'Usrcpitch', 'Usrcbrowseprinter', 'Usrcwhsedisplayseq', 'Usrcactiveitemsonly', 'Usrcrestrictaccess', 'Usrclogingroup', 'Usrcloginrole', 'Usrcallowprocremoval', 'Usrcacallowwarredit', 'Usrcisprodmgr', 'Usrclmallowcrosswhse', 'Usrcpswd', 'Usrcfaxname', 'Usrcfaxcompany', 'Usrcfaxarea', 'Usrcfaxfrst3', 'Usrcfaxlast4', 'Usrcphonearea', 'Usrcphonefrst3', 'Usrcphonelast4', 'Usrcphoneext', 'Usrcsendtime', 'Usrccoversheet', 'Usrcsubject', 'Usrcnotifys', 'Usrcnotifyf', 'Usrcemailaddr', 'Usrcscalewhseid', 'Usrcscaledevnbr', 'Usrcccscanwhseid', 'Usrcccscandevnbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('usrcid', 'usrcloginname', 'intbwhse', 'usrcdefcmpy', 'usrcadmin', 'usrcfront', 'usrccitydesk', 'usrcreptadmin', 'usrcprinter', 'usrcpitch', 'usrcbrowseprinter', 'usrcwhsedisplayseq', 'usrcactiveitemsonly', 'usrcrestrictaccess', 'usrclogingroup', 'usrcloginrole', 'usrcallowprocremoval', 'usrcacallowwarredit', 'usrcisprodmgr', 'usrclmallowcrosswhse', 'usrcpswd', 'usrcfaxname', 'usrcfaxcompany', 'usrcfaxarea', 'usrcfaxfrst3', 'usrcfaxlast4', 'usrcphonearea', 'usrcphonefrst3', 'usrcphonelast4', 'usrcphoneext', 'usrcsendtime', 'usrccoversheet', 'usrcsubject', 'usrcnotifys', 'usrcnotifyf', 'usrcemailaddr', 'usrcscalewhseid', 'usrcscaledevnbr', 'usrcccscanwhseid', 'usrcccscandevnbr', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(DplusUserTableMap::COL_USRCID, DplusUserTableMap::COL_USRCLOGINNAME, DplusUserTableMap::COL_INTBWHSE, DplusUserTableMap::COL_USRCDEFCMPY, DplusUserTableMap::COL_USRCADMIN, DplusUserTableMap::COL_USRCFRONT, DplusUserTableMap::COL_USRCCITYDESK, DplusUserTableMap::COL_USRCREPTADMIN, DplusUserTableMap::COL_USRCPRINTER, DplusUserTableMap::COL_USRCPITCH, DplusUserTableMap::COL_USRCBROWSEPRINTER, DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ, DplusUserTableMap::COL_USRCACTIVEITEMSONLY, DplusUserTableMap::COL_USRCRESTRICTACCESS, DplusUserTableMap::COL_USRCLOGINGROUP, DplusUserTableMap::COL_USRCLOGINROLE, DplusUserTableMap::COL_USRCALLOWPROCREMOVAL, DplusUserTableMap::COL_USRCACALLOWWARREDIT, DplusUserTableMap::COL_USRCISPRODMGR, DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE, DplusUserTableMap::COL_USRCPSWD, DplusUserTableMap::COL_USRCFAXNAME, DplusUserTableMap::COL_USRCFAXCOMPANY, DplusUserTableMap::COL_USRCFAXAREA, DplusUserTableMap::COL_USRCFAXFRST3, DplusUserTableMap::COL_USRCFAXLAST4, DplusUserTableMap::COL_USRCPHONEAREA, DplusUserTableMap::COL_USRCPHONEFRST3, DplusUserTableMap::COL_USRCPHONELAST4, DplusUserTableMap::COL_USRCPHONEEXT, DplusUserTableMap::COL_USRCSENDTIME, DplusUserTableMap::COL_USRCCOVERSHEET, DplusUserTableMap::COL_USRCSUBJECT, DplusUserTableMap::COL_USRCNOTIFYS, DplusUserTableMap::COL_USRCNOTIFYF, DplusUserTableMap::COL_USRCEMAILADDR, DplusUserTableMap::COL_USRCSCALEWHSEID, DplusUserTableMap::COL_USRCSCALEDEVNBR, DplusUserTableMap::COL_USRCCCSCANWHSEID, DplusUserTableMap::COL_USRCCCSCANDEVNBR, DplusUserTableMap::COL_DATEUPDTD, DplusUserTableMap::COL_TIMEUPDTD, DplusUserTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('UsrcId', 'UsrcLoginName', 'IntbWhse', 'UsrcDefCmpy', 'UsrcAdmin', 'UsrcFront', 'UsrcCityDesk', 'UsrcReptAdmin', 'UsrcPrinter', 'UsrcPitch', 'UsrcBrowsePrinter', 'UsrcWhseDisplaySeq', 'UsrcActiveItemsOnly', 'UsrcRestrictAccess', 'UsrcLoginGroup', 'UsrcLoginRole', 'UsrcAllowProcRemoval', 'UsrcAcAllowWarrEdit', 'UsrcIsProdMgr', 'UsrcLmAllowCrossWhse', 'UsrcPswd', 'UsrcFaxName', 'UsrcFaxCompany', 'UsrcFaxArea', 'UsrcFaxFrst3', 'UsrcFaxLast4', 'UsrcPhoneArea', 'UsrcPhoneFrst3', 'UsrcPhoneLast4', 'UsrcPhoneExt', 'UsrcSendTime', 'UsrcCoverSheet', 'UsrcSubject', 'UsrcNotifyS', 'UsrcNotifyF', 'UsrcEmailAddr', 'UsrcScaleWhseId', 'UsrcScaleDevNbr', 'UsrcCcscanWhseId', 'UsrcCcscanDevNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Usrcid' => 0, 'Usrcloginname' => 1, 'Intbwhse' => 2, 'Usrcdefcmpy' => 3, 'Usrcadmin' => 4, 'Usrcfront' => 5, 'Usrccitydesk' => 6, 'Usrcreptadmin' => 7, 'Usrcprinter' => 8, 'Usrcpitch' => 9, 'Usrcbrowseprinter' => 10, 'Usrcwhsedisplayseq' => 11, 'Usrcactiveitemsonly' => 12, 'Usrcrestrictaccess' => 13, 'Usrclogingroup' => 14, 'Usrcloginrole' => 15, 'Usrcallowprocremoval' => 16, 'Usrcacallowwarredit' => 17, 'Usrcisprodmgr' => 18, 'Usrclmallowcrosswhse' => 19, 'Usrcpswd' => 20, 'Usrcfaxname' => 21, 'Usrcfaxcompany' => 22, 'Usrcfaxarea' => 23, 'Usrcfaxfrst3' => 24, 'Usrcfaxlast4' => 25, 'Usrcphonearea' => 26, 'Usrcphonefrst3' => 27, 'Usrcphonelast4' => 28, 'Usrcphoneext' => 29, 'Usrcsendtime' => 30, 'Usrccoversheet' => 31, 'Usrcsubject' => 32, 'Usrcnotifys' => 33, 'Usrcnotifyf' => 34, 'Usrcemailaddr' => 35, 'Usrcscalewhseid' => 36, 'Usrcscaledevnbr' => 37, 'Usrcccscanwhseid' => 38, 'Usrcccscandevnbr' => 39, 'Dateupdtd' => 40, 'Timeupdtd' => 41, 'Dummy' => 42, ),
        self::TYPE_CAMELNAME     => array('usrcid' => 0, 'usrcloginname' => 1, 'intbwhse' => 2, 'usrcdefcmpy' => 3, 'usrcadmin' => 4, 'usrcfront' => 5, 'usrccitydesk' => 6, 'usrcreptadmin' => 7, 'usrcprinter' => 8, 'usrcpitch' => 9, 'usrcbrowseprinter' => 10, 'usrcwhsedisplayseq' => 11, 'usrcactiveitemsonly' => 12, 'usrcrestrictaccess' => 13, 'usrclogingroup' => 14, 'usrcloginrole' => 15, 'usrcallowprocremoval' => 16, 'usrcacallowwarredit' => 17, 'usrcisprodmgr' => 18, 'usrclmallowcrosswhse' => 19, 'usrcpswd' => 20, 'usrcfaxname' => 21, 'usrcfaxcompany' => 22, 'usrcfaxarea' => 23, 'usrcfaxfrst3' => 24, 'usrcfaxlast4' => 25, 'usrcphonearea' => 26, 'usrcphonefrst3' => 27, 'usrcphonelast4' => 28, 'usrcphoneext' => 29, 'usrcsendtime' => 30, 'usrccoversheet' => 31, 'usrcsubject' => 32, 'usrcnotifys' => 33, 'usrcnotifyf' => 34, 'usrcemailaddr' => 35, 'usrcscalewhseid' => 36, 'usrcscaledevnbr' => 37, 'usrcccscanwhseid' => 38, 'usrcccscandevnbr' => 39, 'dateupdtd' => 40, 'timeupdtd' => 41, 'dummy' => 42, ),
        self::TYPE_COLNAME       => array(DplusUserTableMap::COL_USRCID => 0, DplusUserTableMap::COL_USRCLOGINNAME => 1, DplusUserTableMap::COL_INTBWHSE => 2, DplusUserTableMap::COL_USRCDEFCMPY => 3, DplusUserTableMap::COL_USRCADMIN => 4, DplusUserTableMap::COL_USRCFRONT => 5, DplusUserTableMap::COL_USRCCITYDESK => 6, DplusUserTableMap::COL_USRCREPTADMIN => 7, DplusUserTableMap::COL_USRCPRINTER => 8, DplusUserTableMap::COL_USRCPITCH => 9, DplusUserTableMap::COL_USRCBROWSEPRINTER => 10, DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ => 11, DplusUserTableMap::COL_USRCACTIVEITEMSONLY => 12, DplusUserTableMap::COL_USRCRESTRICTACCESS => 13, DplusUserTableMap::COL_USRCLOGINGROUP => 14, DplusUserTableMap::COL_USRCLOGINROLE => 15, DplusUserTableMap::COL_USRCALLOWPROCREMOVAL => 16, DplusUserTableMap::COL_USRCACALLOWWARREDIT => 17, DplusUserTableMap::COL_USRCISPRODMGR => 18, DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE => 19, DplusUserTableMap::COL_USRCPSWD => 20, DplusUserTableMap::COL_USRCFAXNAME => 21, DplusUserTableMap::COL_USRCFAXCOMPANY => 22, DplusUserTableMap::COL_USRCFAXAREA => 23, DplusUserTableMap::COL_USRCFAXFRST3 => 24, DplusUserTableMap::COL_USRCFAXLAST4 => 25, DplusUserTableMap::COL_USRCPHONEAREA => 26, DplusUserTableMap::COL_USRCPHONEFRST3 => 27, DplusUserTableMap::COL_USRCPHONELAST4 => 28, DplusUserTableMap::COL_USRCPHONEEXT => 29, DplusUserTableMap::COL_USRCSENDTIME => 30, DplusUserTableMap::COL_USRCCOVERSHEET => 31, DplusUserTableMap::COL_USRCSUBJECT => 32, DplusUserTableMap::COL_USRCNOTIFYS => 33, DplusUserTableMap::COL_USRCNOTIFYF => 34, DplusUserTableMap::COL_USRCEMAILADDR => 35, DplusUserTableMap::COL_USRCSCALEWHSEID => 36, DplusUserTableMap::COL_USRCSCALEDEVNBR => 37, DplusUserTableMap::COL_USRCCCSCANWHSEID => 38, DplusUserTableMap::COL_USRCCCSCANDEVNBR => 39, DplusUserTableMap::COL_DATEUPDTD => 40, DplusUserTableMap::COL_TIMEUPDTD => 41, DplusUserTableMap::COL_DUMMY => 42, ),
        self::TYPE_FIELDNAME     => array('UsrcId' => 0, 'UsrcLoginName' => 1, 'IntbWhse' => 2, 'UsrcDefCmpy' => 3, 'UsrcAdmin' => 4, 'UsrcFront' => 5, 'UsrcCityDesk' => 6, 'UsrcReptAdmin' => 7, 'UsrcPrinter' => 8, 'UsrcPitch' => 9, 'UsrcBrowsePrinter' => 10, 'UsrcWhseDisplaySeq' => 11, 'UsrcActiveItemsOnly' => 12, 'UsrcRestrictAccess' => 13, 'UsrcLoginGroup' => 14, 'UsrcLoginRole' => 15, 'UsrcAllowProcRemoval' => 16, 'UsrcAcAllowWarrEdit' => 17, 'UsrcIsProdMgr' => 18, 'UsrcLmAllowCrossWhse' => 19, 'UsrcPswd' => 20, 'UsrcFaxName' => 21, 'UsrcFaxCompany' => 22, 'UsrcFaxArea' => 23, 'UsrcFaxFrst3' => 24, 'UsrcFaxLast4' => 25, 'UsrcPhoneArea' => 26, 'UsrcPhoneFrst3' => 27, 'UsrcPhoneLast4' => 28, 'UsrcPhoneExt' => 29, 'UsrcSendTime' => 30, 'UsrcCoverSheet' => 31, 'UsrcSubject' => 32, 'UsrcNotifyS' => 33, 'UsrcNotifyF' => 34, 'UsrcEmailAddr' => 35, 'UsrcScaleWhseId' => 36, 'UsrcScaleDevNbr' => 37, 'UsrcCcscanWhseId' => 38, 'UsrcCcscanDevNbr' => 39, 'DateUpdtd' => 40, 'TimeUpdtd' => 41, 'dummy' => 42, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
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
        $this->setName('sys_login');
        $this->setPhpName('DplusUser');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\DplusUser');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('UsrcId', 'Usrcid', 'VARCHAR', true, 8, null);
        $this->addColumn('UsrcLoginName', 'Usrcloginname', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('UsrcDefCmpy', 'Usrcdefcmpy', 'VARCHAR', false, 3, null);
        $this->addColumn('UsrcAdmin', 'Usrcadmin', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcFront', 'Usrcfront', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcCityDesk', 'Usrccitydesk', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcReptAdmin', 'Usrcreptadmin', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcPrinter', 'Usrcprinter', 'VARCHAR', false, 12, null);
        $this->addColumn('UsrcPitch', 'Usrcpitch', 'VARCHAR', false, 2, null);
        $this->addColumn('UsrcBrowsePrinter', 'Usrcbrowseprinter', 'VARCHAR', false, 12, null);
        $this->addColumn('UsrcWhseDisplaySeq', 'Usrcwhsedisplayseq', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcActiveItemsOnly', 'Usrcactiveitemsonly', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcRestrictAccess', 'Usrcrestrictaccess', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcLoginRole', 'Usrcloginrole', 'VARCHAR', false, 6, null);
        $this->addForeignKey('UsrcLoginGroup', 'Usrclogingroup', 'VARCHAR', 'sys_login_group', 'QtblLgrpCode', false, 8, null);
        $this->addColumn('UsrcAllowProcRemoval', 'Usrcallowprocremoval', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcAcAllowWarrEdit', 'Usrcacallowwarredit', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcIsProdMgr', 'Usrcisprodmgr', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcLmAllowCrossWhse', 'Usrclmallowcrosswhse', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcPswd', 'Usrcpswd', 'VARCHAR', false, 50, null);
        $this->addColumn('UsrcFaxName', 'Usrcfaxname', 'VARCHAR', false, 30, null);
        $this->addColumn('UsrcFaxCompany', 'Usrcfaxcompany', 'VARCHAR', false, 30, null);
        $this->addColumn('UsrcFaxArea', 'Usrcfaxarea', 'VARCHAR', false, 3, null);
        $this->addColumn('UsrcFaxFrst3', 'Usrcfaxfrst3', 'VARCHAR', false, 3, null);
        $this->addColumn('UsrcFaxLast4', 'Usrcfaxlast4', 'VARCHAR', false, 4, null);
        $this->addColumn('UsrcPhoneArea', 'Usrcphonearea', 'VARCHAR', false, 3, null);
        $this->addColumn('UsrcPhoneFrst3', 'Usrcphonefrst3', 'VARCHAR', false, 3, null);
        $this->addColumn('UsrcPhoneLast4', 'Usrcphonelast4', 'VARCHAR', false, 4, null);
        $this->addColumn('UsrcPhoneExt', 'Usrcphoneext', 'VARCHAR', false, 7, null);
        $this->addColumn('UsrcSendTime', 'Usrcsendtime', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcCoverSheet', 'Usrccoversheet', 'VARCHAR', false, 8, null);
        $this->addColumn('UsrcSubject', 'Usrcsubject', 'VARCHAR', false, 40, null);
        $this->addColumn('UsrcNotifyS', 'Usrcnotifys', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcNotifyF', 'Usrcnotifyf', 'VARCHAR', false, 1, null);
        $this->addColumn('UsrcEmailAddr', 'Usrcemailaddr', 'VARCHAR', false, 50, null);
        $this->addColumn('UsrcScaleWhseId', 'Usrcscalewhseid', 'VARCHAR', false, 2, null);
        $this->addColumn('UsrcScaleDevNbr', 'Usrcscaledevnbr', 'VARCHAR', false, 2, null);
        $this->addColumn('UsrcCcscanWhseId', 'Usrcccscanwhseid', 'VARCHAR', false, 2, null);
        $this->addColumn('UsrcCcscanDevNbr', 'Usrcccscandevnbr', 'VARCHAR', false, 2, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SysLoginGroup', '\\SysLoginGroup', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':UsrcLoginGroup',
    1 => ':QtblLgrpCode',
  ),
        $this->addRelation('UserPermissionsItm', '\\UserPermissionsItm', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':ItmpUserId',
    1 => ':UsrcId',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? DplusUserTableMap::CLASS_DEFAULT : DplusUserTableMap::OM_CLASS;
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
     * @return array           (DplusUser object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = DplusUserTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = DplusUserTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + DplusUserTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DplusUserTableMap::OM_CLASS;
            /** @var DplusUser $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            DplusUserTableMap::addInstanceToPool($obj, $key);
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
            $key = DplusUserTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = DplusUserTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var DplusUser $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DplusUserTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCID);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCLOGINNAME);
            $criteria->addSelectColumn(DplusUserTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCDEFCMPY);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCADMIN);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCFRONT);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCCITYDESK);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCREPTADMIN);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPRINTER);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPITCH);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCBROWSEPRINTER);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCACTIVEITEMSONLY);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCRESTRICTACCESS);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCLOGINGROUP);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCLOGINROLE);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCALLOWPROCREMOVAL);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCACALLOWWARREDIT);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCISPRODMGR);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPSWD);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCFAXNAME);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCFAXCOMPANY);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCFAXAREA);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCFAXFRST3);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCFAXLAST4);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPHONEAREA);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPHONEFRST3);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPHONELAST4);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCPHONEEXT);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCSENDTIME);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCCOVERSHEET);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCSUBJECT);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCNOTIFYS);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCNOTIFYF);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCEMAILADDR);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCSCALEWHSEID);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCSCALEDEVNBR);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCCCSCANWHSEID);
            $criteria->addSelectColumn(DplusUserTableMap::COL_USRCCCSCANDEVNBR);
            $criteria->addSelectColumn(DplusUserTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(DplusUserTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(DplusUserTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.UsrcId');
            $criteria->addSelectColumn($alias . '.UsrcLoginName');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.UsrcDefCmpy');
            $criteria->addSelectColumn($alias . '.UsrcAdmin');
            $criteria->addSelectColumn($alias . '.UsrcFront');
            $criteria->addSelectColumn($alias . '.UsrcCityDesk');
            $criteria->addSelectColumn($alias . '.UsrcReptAdmin');
            $criteria->addSelectColumn($alias . '.UsrcPrinter');
            $criteria->addSelectColumn($alias . '.UsrcPitch');
            $criteria->addSelectColumn($alias . '.UsrcBrowsePrinter');
            $criteria->addSelectColumn($alias . '.UsrcWhseDisplaySeq');
            $criteria->addSelectColumn($alias . '.UsrcActiveItemsOnly');
            $criteria->addSelectColumn($alias . '.UsrcRestrictAccess');
            $criteria->addSelectColumn($alias . '.UsrcLoginGroup');
            $criteria->addSelectColumn($alias . '.UsrcLoginRole');
            $criteria->addSelectColumn($alias . '.UsrcAllowProcRemoval');
            $criteria->addSelectColumn($alias . '.UsrcAcAllowWarrEdit');
            $criteria->addSelectColumn($alias . '.UsrcIsProdMgr');
            $criteria->addSelectColumn($alias . '.UsrcLmAllowCrossWhse');
            $criteria->addSelectColumn($alias . '.UsrcPswd');
            $criteria->addSelectColumn($alias . '.UsrcFaxName');
            $criteria->addSelectColumn($alias . '.UsrcFaxCompany');
            $criteria->addSelectColumn($alias . '.UsrcFaxArea');
            $criteria->addSelectColumn($alias . '.UsrcFaxFrst3');
            $criteria->addSelectColumn($alias . '.UsrcFaxLast4');
            $criteria->addSelectColumn($alias . '.UsrcPhoneArea');
            $criteria->addSelectColumn($alias . '.UsrcPhoneFrst3');
            $criteria->addSelectColumn($alias . '.UsrcPhoneLast4');
            $criteria->addSelectColumn($alias . '.UsrcPhoneExt');
            $criteria->addSelectColumn($alias . '.UsrcSendTime');
            $criteria->addSelectColumn($alias . '.UsrcCoverSheet');
            $criteria->addSelectColumn($alias . '.UsrcSubject');
            $criteria->addSelectColumn($alias . '.UsrcNotifyS');
            $criteria->addSelectColumn($alias . '.UsrcNotifyF');
            $criteria->addSelectColumn($alias . '.UsrcEmailAddr');
            $criteria->addSelectColumn($alias . '.UsrcScaleWhseId');
            $criteria->addSelectColumn($alias . '.UsrcScaleDevNbr');
            $criteria->addSelectColumn($alias . '.UsrcCcscanWhseId');
            $criteria->addSelectColumn($alias . '.UsrcCcscanDevNbr');
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
        return Propel::getServiceContainer()->getDatabaseMap(DplusUserTableMap::DATABASE_NAME)->getTable(DplusUserTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(DplusUserTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(DplusUserTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new DplusUserTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a DplusUser or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or DplusUser object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(DplusUserTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \DplusUser) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DplusUserTableMap::DATABASE_NAME);
            $criteria->add(DplusUserTableMap::COL_USRCID, (array) $values, Criteria::IN);
        }

        $query = DplusUserQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            DplusUserTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                DplusUserTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the sys_login table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return DplusUserQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a DplusUser or Criteria object.
     *
     * @param mixed               $criteria Criteria or DplusUser object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DplusUserTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from DplusUser object
        }


        // Set the correct dbName
        $query = DplusUserQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // DplusUserTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
DplusUserTableMap::buildTableMap();
