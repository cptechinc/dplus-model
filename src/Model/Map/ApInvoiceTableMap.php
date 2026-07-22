<?php

namespace Map;

use \ApInvoice;
use \ApInvoiceQuery;
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
 * This class defines the structure of the 'ap_invoice_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ApInvoiceTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ApInvoiceTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ap_invoice_head';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ApInvoice';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ApInvoice';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ApInvoice';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 38;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 38;

    /**
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'ap_invoice_head.ApveVendId';

    /**
     * the column name for the ApihPayToKey field
     */
    public const COL_APIHPAYTOKEY = 'ap_invoice_head.ApihPayToKey';

    /**
     * the column name for the ApihPtName field
     */
    public const COL_APIHPTNAME = 'ap_invoice_head.ApihPtName';

    /**
     * the column name for the ApihPtAdr1 field
     */
    public const COL_APIHPTADR1 = 'ap_invoice_head.ApihPtAdr1';

    /**
     * the column name for the ApihPtAdr2 field
     */
    public const COL_APIHPTADR2 = 'ap_invoice_head.ApihPtAdr2';

    /**
     * the column name for the ApihPtAdr3 field
     */
    public const COL_APIHPTADR3 = 'ap_invoice_head.ApihPtAdr3';

    /**
     * the column name for the ApihPtCtry field
     */
    public const COL_APIHPTCTRY = 'ap_invoice_head.ApihPtCtry';

    /**
     * the column name for the ApihPtCity field
     */
    public const COL_APIHPTCITY = 'ap_invoice_head.ApihPtCity';

    /**
     * the column name for the ApihPtStat field
     */
    public const COL_APIHPTSTAT = 'ap_invoice_head.ApihPtStat';

    /**
     * the column name for the ApihPtZipCode field
     */
    public const COL_APIHPTZIPCODE = 'ap_invoice_head.ApihPtZipCode';

    /**
     * the column name for the ApihPoNbr field
     */
    public const COL_APIHPONBR = 'ap_invoice_head.ApihPoNbr';

    /**
     * the column name for the ApihCtrlNbr field
     */
    public const COL_APIHCTRLNBR = 'ap_invoice_head.ApihCtrlNbr';

    /**
     * the column name for the ApihInvNbr field
     */
    public const COL_APIHINVNBR = 'ap_invoice_head.ApihInvNbr';

    /**
     * the column name for the ApihSeq field
     */
    public const COL_APIHSEQ = 'ap_invoice_head.ApihSeq';

    /**
     * the column name for the ApihStat field
     */
    public const COL_APIHSTAT = 'ap_invoice_head.ApihStat';

    /**
     * the column name for the ApihInvDate field
     */
    public const COL_APIHINVDATE = 'ap_invoice_head.ApihInvDate';

    /**
     * the column name for the ApihDiscDate field
     */
    public const COL_APIHDISCDATE = 'ap_invoice_head.ApihDiscDate';

    /**
     * the column name for the ApihDueDate field
     */
    public const COL_APIHDUEDATE = 'ap_invoice_head.ApihDueDate';

    /**
     * the column name for the ApihTotAmt field
     */
    public const COL_APIHTOTAMT = 'ap_invoice_head.ApihTotAmt';

    /**
     * the column name for the ApihDiscAmt field
     */
    public const COL_APIHDISCAMT = 'ap_invoice_head.ApihDiscAmt';

    /**
     * the column name for the ApihPpChkNbr field
     */
    public const COL_APIHPPCHKNBR = 'ap_invoice_head.ApihPpChkNbr';

    /**
     * the column name for the ApihGlPd field
     */
    public const COL_APIHGLPD = 'ap_invoice_head.ApihGlPd';

    /**
     * the column name for the ApihChkNbr field
     */
    public const COL_APIHCHKNBR = 'ap_invoice_head.ApihChkNbr';

    /**
     * the column name for the ApihChkDate field
     */
    public const COL_APIHCHKDATE = 'ap_invoice_head.ApihChkDate';

    /**
     * the column name for the ApihChkAmt field
     */
    public const COL_APIHCHKAMT = 'ap_invoice_head.ApihChkAmt';

    /**
     * the column name for the ApihChkGlAcct field
     */
    public const COL_APIHCHKGLACCT = 'ap_invoice_head.ApihChkGlAcct';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'ap_invoice_head.IntbWhse';

    /**
     * the column name for the AptmTermCode field
     */
    public const COL_APTMTERMCODE = 'ap_invoice_head.AptmTermCode';

    /**
     * the column name for the ApihVendDisc field
     */
    public const COL_APIHVENDDISC = 'ap_invoice_head.ApihVendDisc';

    /**
     * the column name for the ApihInvRef field
     */
    public const COL_APIHINVREF = 'ap_invoice_head.ApihInvRef';

    /**
     * the column name for the ApihCenbeeFormatId field
     */
    public const COL_APIHCENBEEFORMATID = 'ap_invoice_head.ApihCenbeeFormatId';

    /**
     * the column name for the ApihCenbeePoNbr field
     */
    public const COL_APIHCENBEEPONBR = 'ap_invoice_head.ApihCenbeePoNbr';

    /**
     * the column name for the ApihTakeExpired field
     */
    public const COL_APIHTAKEEXPIRED = 'ap_invoice_head.ApihTakeExpired';

    /**
     * the column name for the ApihExchCtry field
     */
    public const COL_APIHEXCHCTRY = 'ap_invoice_head.ApihExchCtry';

    /**
     * the column name for the ApihExchRate field
     */
    public const COL_APIHEXCHRATE = 'ap_invoice_head.ApihExchRate';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ap_invoice_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ap_invoice_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ap_invoice_head.dummy';

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
        self::TYPE_PHPNAME       => ['Apvevendid', 'Apihpaytokey', 'Apihptname', 'Apihptadr1', 'Apihptadr2', 'Apihptadr3', 'Apihptctry', 'Apihptcity', 'Apihptstat', 'Apihptzipcode', 'Apihponbr', 'Apihctrlnbr', 'Apihinvnbr', 'Apihseq', 'Apihstat', 'Apihinvdate', 'Apihdiscdate', 'Apihduedate', 'Apihtotamt', 'Apihdiscamt', 'Apihppchknbr', 'Apihglpd', 'Apihchknbr', 'Apihchkdate', 'Apihchkamt', 'Apihchkglacct', 'Intbwhse', 'Aptmtermcode', 'Apihvenddisc', 'Apihinvref', 'Apihcenbeeformatid', 'Apihcenbeeponbr', 'Apihtakeexpired', 'Apihexchctry', 'Apihexchrate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['apvevendid', 'apihpaytokey', 'apihptname', 'apihptadr1', 'apihptadr2', 'apihptadr3', 'apihptctry', 'apihptcity', 'apihptstat', 'apihptzipcode', 'apihponbr', 'apihctrlnbr', 'apihinvnbr', 'apihseq', 'apihstat', 'apihinvdate', 'apihdiscdate', 'apihduedate', 'apihtotamt', 'apihdiscamt', 'apihppchknbr', 'apihglpd', 'apihchknbr', 'apihchkdate', 'apihchkamt', 'apihchkglacct', 'intbwhse', 'aptmtermcode', 'apihvenddisc', 'apihinvref', 'apihcenbeeformatid', 'apihcenbeeponbr', 'apihtakeexpired', 'apihexchctry', 'apihexchrate', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ApInvoiceTableMap::COL_APVEVENDID, ApInvoiceTableMap::COL_APIHPAYTOKEY, ApInvoiceTableMap::COL_APIHPTNAME, ApInvoiceTableMap::COL_APIHPTADR1, ApInvoiceTableMap::COL_APIHPTADR2, ApInvoiceTableMap::COL_APIHPTADR3, ApInvoiceTableMap::COL_APIHPTCTRY, ApInvoiceTableMap::COL_APIHPTCITY, ApInvoiceTableMap::COL_APIHPTSTAT, ApInvoiceTableMap::COL_APIHPTZIPCODE, ApInvoiceTableMap::COL_APIHPONBR, ApInvoiceTableMap::COL_APIHCTRLNBR, ApInvoiceTableMap::COL_APIHINVNBR, ApInvoiceTableMap::COL_APIHSEQ, ApInvoiceTableMap::COL_APIHSTAT, ApInvoiceTableMap::COL_APIHINVDATE, ApInvoiceTableMap::COL_APIHDISCDATE, ApInvoiceTableMap::COL_APIHDUEDATE, ApInvoiceTableMap::COL_APIHTOTAMT, ApInvoiceTableMap::COL_APIHDISCAMT, ApInvoiceTableMap::COL_APIHPPCHKNBR, ApInvoiceTableMap::COL_APIHGLPD, ApInvoiceTableMap::COL_APIHCHKNBR, ApInvoiceTableMap::COL_APIHCHKDATE, ApInvoiceTableMap::COL_APIHCHKAMT, ApInvoiceTableMap::COL_APIHCHKGLACCT, ApInvoiceTableMap::COL_INTBWHSE, ApInvoiceTableMap::COL_APTMTERMCODE, ApInvoiceTableMap::COL_APIHVENDDISC, ApInvoiceTableMap::COL_APIHINVREF, ApInvoiceTableMap::COL_APIHCENBEEFORMATID, ApInvoiceTableMap::COL_APIHCENBEEPONBR, ApInvoiceTableMap::COL_APIHTAKEEXPIRED, ApInvoiceTableMap::COL_APIHEXCHCTRY, ApInvoiceTableMap::COL_APIHEXCHRATE, ApInvoiceTableMap::COL_DATEUPDTD, ApInvoiceTableMap::COL_TIMEUPDTD, ApInvoiceTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ApveVendId', 'ApihPayToKey', 'ApihPtName', 'ApihPtAdr1', 'ApihPtAdr2', 'ApihPtAdr3', 'ApihPtCtry', 'ApihPtCity', 'ApihPtStat', 'ApihPtZipCode', 'ApihPoNbr', 'ApihCtrlNbr', 'ApihInvNbr', 'ApihSeq', 'ApihStat', 'ApihInvDate', 'ApihDiscDate', 'ApihDueDate', 'ApihTotAmt', 'ApihDiscAmt', 'ApihPpChkNbr', 'ApihGlPd', 'ApihChkNbr', 'ApihChkDate', 'ApihChkAmt', 'ApihChkGlAcct', 'IntbWhse', 'AptmTermCode', 'ApihVendDisc', 'ApihInvRef', 'ApihCenbeeFormatId', 'ApihCenbeePoNbr', 'ApihTakeExpired', 'ApihExchCtry', 'ApihExchRate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, ]
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
        self::TYPE_PHPNAME       => ['Apvevendid' => 0, 'Apihpaytokey' => 1, 'Apihptname' => 2, 'Apihptadr1' => 3, 'Apihptadr2' => 4, 'Apihptadr3' => 5, 'Apihptctry' => 6, 'Apihptcity' => 7, 'Apihptstat' => 8, 'Apihptzipcode' => 9, 'Apihponbr' => 10, 'Apihctrlnbr' => 11, 'Apihinvnbr' => 12, 'Apihseq' => 13, 'Apihstat' => 14, 'Apihinvdate' => 15, 'Apihdiscdate' => 16, 'Apihduedate' => 17, 'Apihtotamt' => 18, 'Apihdiscamt' => 19, 'Apihppchknbr' => 20, 'Apihglpd' => 21, 'Apihchknbr' => 22, 'Apihchkdate' => 23, 'Apihchkamt' => 24, 'Apihchkglacct' => 25, 'Intbwhse' => 26, 'Aptmtermcode' => 27, 'Apihvenddisc' => 28, 'Apihinvref' => 29, 'Apihcenbeeformatid' => 30, 'Apihcenbeeponbr' => 31, 'Apihtakeexpired' => 32, 'Apihexchctry' => 33, 'Apihexchrate' => 34, 'Dateupdtd' => 35, 'Timeupdtd' => 36, 'Dummy' => 37, ],
        self::TYPE_CAMELNAME     => ['apvevendid' => 0, 'apihpaytokey' => 1, 'apihptname' => 2, 'apihptadr1' => 3, 'apihptadr2' => 4, 'apihptadr3' => 5, 'apihptctry' => 6, 'apihptcity' => 7, 'apihptstat' => 8, 'apihptzipcode' => 9, 'apihponbr' => 10, 'apihctrlnbr' => 11, 'apihinvnbr' => 12, 'apihseq' => 13, 'apihstat' => 14, 'apihinvdate' => 15, 'apihdiscdate' => 16, 'apihduedate' => 17, 'apihtotamt' => 18, 'apihdiscamt' => 19, 'apihppchknbr' => 20, 'apihglpd' => 21, 'apihchknbr' => 22, 'apihchkdate' => 23, 'apihchkamt' => 24, 'apihchkglacct' => 25, 'intbwhse' => 26, 'aptmtermcode' => 27, 'apihvenddisc' => 28, 'apihinvref' => 29, 'apihcenbeeformatid' => 30, 'apihcenbeeponbr' => 31, 'apihtakeexpired' => 32, 'apihexchctry' => 33, 'apihexchrate' => 34, 'dateupdtd' => 35, 'timeupdtd' => 36, 'dummy' => 37, ],
        self::TYPE_COLNAME       => [ApInvoiceTableMap::COL_APVEVENDID => 0, ApInvoiceTableMap::COL_APIHPAYTOKEY => 1, ApInvoiceTableMap::COL_APIHPTNAME => 2, ApInvoiceTableMap::COL_APIHPTADR1 => 3, ApInvoiceTableMap::COL_APIHPTADR2 => 4, ApInvoiceTableMap::COL_APIHPTADR3 => 5, ApInvoiceTableMap::COL_APIHPTCTRY => 6, ApInvoiceTableMap::COL_APIHPTCITY => 7, ApInvoiceTableMap::COL_APIHPTSTAT => 8, ApInvoiceTableMap::COL_APIHPTZIPCODE => 9, ApInvoiceTableMap::COL_APIHPONBR => 10, ApInvoiceTableMap::COL_APIHCTRLNBR => 11, ApInvoiceTableMap::COL_APIHINVNBR => 12, ApInvoiceTableMap::COL_APIHSEQ => 13, ApInvoiceTableMap::COL_APIHSTAT => 14, ApInvoiceTableMap::COL_APIHINVDATE => 15, ApInvoiceTableMap::COL_APIHDISCDATE => 16, ApInvoiceTableMap::COL_APIHDUEDATE => 17, ApInvoiceTableMap::COL_APIHTOTAMT => 18, ApInvoiceTableMap::COL_APIHDISCAMT => 19, ApInvoiceTableMap::COL_APIHPPCHKNBR => 20, ApInvoiceTableMap::COL_APIHGLPD => 21, ApInvoiceTableMap::COL_APIHCHKNBR => 22, ApInvoiceTableMap::COL_APIHCHKDATE => 23, ApInvoiceTableMap::COL_APIHCHKAMT => 24, ApInvoiceTableMap::COL_APIHCHKGLACCT => 25, ApInvoiceTableMap::COL_INTBWHSE => 26, ApInvoiceTableMap::COL_APTMTERMCODE => 27, ApInvoiceTableMap::COL_APIHVENDDISC => 28, ApInvoiceTableMap::COL_APIHINVREF => 29, ApInvoiceTableMap::COL_APIHCENBEEFORMATID => 30, ApInvoiceTableMap::COL_APIHCENBEEPONBR => 31, ApInvoiceTableMap::COL_APIHTAKEEXPIRED => 32, ApInvoiceTableMap::COL_APIHEXCHCTRY => 33, ApInvoiceTableMap::COL_APIHEXCHRATE => 34, ApInvoiceTableMap::COL_DATEUPDTD => 35, ApInvoiceTableMap::COL_TIMEUPDTD => 36, ApInvoiceTableMap::COL_DUMMY => 37, ],
        self::TYPE_FIELDNAME     => ['ApveVendId' => 0, 'ApihPayToKey' => 1, 'ApihPtName' => 2, 'ApihPtAdr1' => 3, 'ApihPtAdr2' => 4, 'ApihPtAdr3' => 5, 'ApihPtCtry' => 6, 'ApihPtCity' => 7, 'ApihPtStat' => 8, 'ApihPtZipCode' => 9, 'ApihPoNbr' => 10, 'ApihCtrlNbr' => 11, 'ApihInvNbr' => 12, 'ApihSeq' => 13, 'ApihStat' => 14, 'ApihInvDate' => 15, 'ApihDiscDate' => 16, 'ApihDueDate' => 17, 'ApihTotAmt' => 18, 'ApihDiscAmt' => 19, 'ApihPpChkNbr' => 20, 'ApihGlPd' => 21, 'ApihChkNbr' => 22, 'ApihChkDate' => 23, 'ApihChkAmt' => 24, 'ApihChkGlAcct' => 25, 'IntbWhse' => 26, 'AptmTermCode' => 27, 'ApihVendDisc' => 28, 'ApihInvRef' => 29, 'ApihCenbeeFormatId' => 30, 'ApihCenbeePoNbr' => 31, 'ApihTakeExpired' => 32, 'ApihExchCtry' => 33, 'ApihExchRate' => 34, 'DateUpdtd' => 35, 'TimeUpdtd' => 36, 'dummy' => 37, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Apvevendid' => 'APVEVENDID',
        'ApInvoice.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'apInvoice.apvevendid' => 'APVEVENDID',
        'ApInvoiceTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'ap_invoice_head.ApveVendId' => 'APVEVENDID',
        'Apihpaytokey' => 'APIHPAYTOKEY',
        'ApInvoice.Apihpaytokey' => 'APIHPAYTOKEY',
        'apihpaytokey' => 'APIHPAYTOKEY',
        'apInvoice.apihpaytokey' => 'APIHPAYTOKEY',
        'ApInvoiceTableMap::COL_APIHPAYTOKEY' => 'APIHPAYTOKEY',
        'COL_APIHPAYTOKEY' => 'APIHPAYTOKEY',
        'ApihPayToKey' => 'APIHPAYTOKEY',
        'ap_invoice_head.ApihPayToKey' => 'APIHPAYTOKEY',
        'Apihptname' => 'APIHPTNAME',
        'ApInvoice.Apihptname' => 'APIHPTNAME',
        'apihptname' => 'APIHPTNAME',
        'apInvoice.apihptname' => 'APIHPTNAME',
        'ApInvoiceTableMap::COL_APIHPTNAME' => 'APIHPTNAME',
        'COL_APIHPTNAME' => 'APIHPTNAME',
        'ApihPtName' => 'APIHPTNAME',
        'ap_invoice_head.ApihPtName' => 'APIHPTNAME',
        'Apihptadr1' => 'APIHPTADR1',
        'ApInvoice.Apihptadr1' => 'APIHPTADR1',
        'apihptadr1' => 'APIHPTADR1',
        'apInvoice.apihptadr1' => 'APIHPTADR1',
        'ApInvoiceTableMap::COL_APIHPTADR1' => 'APIHPTADR1',
        'COL_APIHPTADR1' => 'APIHPTADR1',
        'ApihPtAdr1' => 'APIHPTADR1',
        'ap_invoice_head.ApihPtAdr1' => 'APIHPTADR1',
        'Apihptadr2' => 'APIHPTADR2',
        'ApInvoice.Apihptadr2' => 'APIHPTADR2',
        'apihptadr2' => 'APIHPTADR2',
        'apInvoice.apihptadr2' => 'APIHPTADR2',
        'ApInvoiceTableMap::COL_APIHPTADR2' => 'APIHPTADR2',
        'COL_APIHPTADR2' => 'APIHPTADR2',
        'ApihPtAdr2' => 'APIHPTADR2',
        'ap_invoice_head.ApihPtAdr2' => 'APIHPTADR2',
        'Apihptadr3' => 'APIHPTADR3',
        'ApInvoice.Apihptadr3' => 'APIHPTADR3',
        'apihptadr3' => 'APIHPTADR3',
        'apInvoice.apihptadr3' => 'APIHPTADR3',
        'ApInvoiceTableMap::COL_APIHPTADR3' => 'APIHPTADR3',
        'COL_APIHPTADR3' => 'APIHPTADR3',
        'ApihPtAdr3' => 'APIHPTADR3',
        'ap_invoice_head.ApihPtAdr3' => 'APIHPTADR3',
        'Apihptctry' => 'APIHPTCTRY',
        'ApInvoice.Apihptctry' => 'APIHPTCTRY',
        'apihptctry' => 'APIHPTCTRY',
        'apInvoice.apihptctry' => 'APIHPTCTRY',
        'ApInvoiceTableMap::COL_APIHPTCTRY' => 'APIHPTCTRY',
        'COL_APIHPTCTRY' => 'APIHPTCTRY',
        'ApihPtCtry' => 'APIHPTCTRY',
        'ap_invoice_head.ApihPtCtry' => 'APIHPTCTRY',
        'Apihptcity' => 'APIHPTCITY',
        'ApInvoice.Apihptcity' => 'APIHPTCITY',
        'apihptcity' => 'APIHPTCITY',
        'apInvoice.apihptcity' => 'APIHPTCITY',
        'ApInvoiceTableMap::COL_APIHPTCITY' => 'APIHPTCITY',
        'COL_APIHPTCITY' => 'APIHPTCITY',
        'ApihPtCity' => 'APIHPTCITY',
        'ap_invoice_head.ApihPtCity' => 'APIHPTCITY',
        'Apihptstat' => 'APIHPTSTAT',
        'ApInvoice.Apihptstat' => 'APIHPTSTAT',
        'apihptstat' => 'APIHPTSTAT',
        'apInvoice.apihptstat' => 'APIHPTSTAT',
        'ApInvoiceTableMap::COL_APIHPTSTAT' => 'APIHPTSTAT',
        'COL_APIHPTSTAT' => 'APIHPTSTAT',
        'ApihPtStat' => 'APIHPTSTAT',
        'ap_invoice_head.ApihPtStat' => 'APIHPTSTAT',
        'Apihptzipcode' => 'APIHPTZIPCODE',
        'ApInvoice.Apihptzipcode' => 'APIHPTZIPCODE',
        'apihptzipcode' => 'APIHPTZIPCODE',
        'apInvoice.apihptzipcode' => 'APIHPTZIPCODE',
        'ApInvoiceTableMap::COL_APIHPTZIPCODE' => 'APIHPTZIPCODE',
        'COL_APIHPTZIPCODE' => 'APIHPTZIPCODE',
        'ApihPtZipCode' => 'APIHPTZIPCODE',
        'ap_invoice_head.ApihPtZipCode' => 'APIHPTZIPCODE',
        'Apihponbr' => 'APIHPONBR',
        'ApInvoice.Apihponbr' => 'APIHPONBR',
        'apihponbr' => 'APIHPONBR',
        'apInvoice.apihponbr' => 'APIHPONBR',
        'ApInvoiceTableMap::COL_APIHPONBR' => 'APIHPONBR',
        'COL_APIHPONBR' => 'APIHPONBR',
        'ApihPoNbr' => 'APIHPONBR',
        'ap_invoice_head.ApihPoNbr' => 'APIHPONBR',
        'Apihctrlnbr' => 'APIHCTRLNBR',
        'ApInvoice.Apihctrlnbr' => 'APIHCTRLNBR',
        'apihctrlnbr' => 'APIHCTRLNBR',
        'apInvoice.apihctrlnbr' => 'APIHCTRLNBR',
        'ApInvoiceTableMap::COL_APIHCTRLNBR' => 'APIHCTRLNBR',
        'COL_APIHCTRLNBR' => 'APIHCTRLNBR',
        'ApihCtrlNbr' => 'APIHCTRLNBR',
        'ap_invoice_head.ApihCtrlNbr' => 'APIHCTRLNBR',
        'Apihinvnbr' => 'APIHINVNBR',
        'ApInvoice.Apihinvnbr' => 'APIHINVNBR',
        'apihinvnbr' => 'APIHINVNBR',
        'apInvoice.apihinvnbr' => 'APIHINVNBR',
        'ApInvoiceTableMap::COL_APIHINVNBR' => 'APIHINVNBR',
        'COL_APIHINVNBR' => 'APIHINVNBR',
        'ApihInvNbr' => 'APIHINVNBR',
        'ap_invoice_head.ApihInvNbr' => 'APIHINVNBR',
        'Apihseq' => 'APIHSEQ',
        'ApInvoice.Apihseq' => 'APIHSEQ',
        'apihseq' => 'APIHSEQ',
        'apInvoice.apihseq' => 'APIHSEQ',
        'ApInvoiceTableMap::COL_APIHSEQ' => 'APIHSEQ',
        'COL_APIHSEQ' => 'APIHSEQ',
        'ApihSeq' => 'APIHSEQ',
        'ap_invoice_head.ApihSeq' => 'APIHSEQ',
        'Apihstat' => 'APIHSTAT',
        'ApInvoice.Apihstat' => 'APIHSTAT',
        'apihstat' => 'APIHSTAT',
        'apInvoice.apihstat' => 'APIHSTAT',
        'ApInvoiceTableMap::COL_APIHSTAT' => 'APIHSTAT',
        'COL_APIHSTAT' => 'APIHSTAT',
        'ApihStat' => 'APIHSTAT',
        'ap_invoice_head.ApihStat' => 'APIHSTAT',
        'Apihinvdate' => 'APIHINVDATE',
        'ApInvoice.Apihinvdate' => 'APIHINVDATE',
        'apihinvdate' => 'APIHINVDATE',
        'apInvoice.apihinvdate' => 'APIHINVDATE',
        'ApInvoiceTableMap::COL_APIHINVDATE' => 'APIHINVDATE',
        'COL_APIHINVDATE' => 'APIHINVDATE',
        'ApihInvDate' => 'APIHINVDATE',
        'ap_invoice_head.ApihInvDate' => 'APIHINVDATE',
        'Apihdiscdate' => 'APIHDISCDATE',
        'ApInvoice.Apihdiscdate' => 'APIHDISCDATE',
        'apihdiscdate' => 'APIHDISCDATE',
        'apInvoice.apihdiscdate' => 'APIHDISCDATE',
        'ApInvoiceTableMap::COL_APIHDISCDATE' => 'APIHDISCDATE',
        'COL_APIHDISCDATE' => 'APIHDISCDATE',
        'ApihDiscDate' => 'APIHDISCDATE',
        'ap_invoice_head.ApihDiscDate' => 'APIHDISCDATE',
        'Apihduedate' => 'APIHDUEDATE',
        'ApInvoice.Apihduedate' => 'APIHDUEDATE',
        'apihduedate' => 'APIHDUEDATE',
        'apInvoice.apihduedate' => 'APIHDUEDATE',
        'ApInvoiceTableMap::COL_APIHDUEDATE' => 'APIHDUEDATE',
        'COL_APIHDUEDATE' => 'APIHDUEDATE',
        'ApihDueDate' => 'APIHDUEDATE',
        'ap_invoice_head.ApihDueDate' => 'APIHDUEDATE',
        'Apihtotamt' => 'APIHTOTAMT',
        'ApInvoice.Apihtotamt' => 'APIHTOTAMT',
        'apihtotamt' => 'APIHTOTAMT',
        'apInvoice.apihtotamt' => 'APIHTOTAMT',
        'ApInvoiceTableMap::COL_APIHTOTAMT' => 'APIHTOTAMT',
        'COL_APIHTOTAMT' => 'APIHTOTAMT',
        'ApihTotAmt' => 'APIHTOTAMT',
        'ap_invoice_head.ApihTotAmt' => 'APIHTOTAMT',
        'Apihdiscamt' => 'APIHDISCAMT',
        'ApInvoice.Apihdiscamt' => 'APIHDISCAMT',
        'apihdiscamt' => 'APIHDISCAMT',
        'apInvoice.apihdiscamt' => 'APIHDISCAMT',
        'ApInvoiceTableMap::COL_APIHDISCAMT' => 'APIHDISCAMT',
        'COL_APIHDISCAMT' => 'APIHDISCAMT',
        'ApihDiscAmt' => 'APIHDISCAMT',
        'ap_invoice_head.ApihDiscAmt' => 'APIHDISCAMT',
        'Apihppchknbr' => 'APIHPPCHKNBR',
        'ApInvoice.Apihppchknbr' => 'APIHPPCHKNBR',
        'apihppchknbr' => 'APIHPPCHKNBR',
        'apInvoice.apihppchknbr' => 'APIHPPCHKNBR',
        'ApInvoiceTableMap::COL_APIHPPCHKNBR' => 'APIHPPCHKNBR',
        'COL_APIHPPCHKNBR' => 'APIHPPCHKNBR',
        'ApihPpChkNbr' => 'APIHPPCHKNBR',
        'ap_invoice_head.ApihPpChkNbr' => 'APIHPPCHKNBR',
        'Apihglpd' => 'APIHGLPD',
        'ApInvoice.Apihglpd' => 'APIHGLPD',
        'apihglpd' => 'APIHGLPD',
        'apInvoice.apihglpd' => 'APIHGLPD',
        'ApInvoiceTableMap::COL_APIHGLPD' => 'APIHGLPD',
        'COL_APIHGLPD' => 'APIHGLPD',
        'ApihGlPd' => 'APIHGLPD',
        'ap_invoice_head.ApihGlPd' => 'APIHGLPD',
        'Apihchknbr' => 'APIHCHKNBR',
        'ApInvoice.Apihchknbr' => 'APIHCHKNBR',
        'apihchknbr' => 'APIHCHKNBR',
        'apInvoice.apihchknbr' => 'APIHCHKNBR',
        'ApInvoiceTableMap::COL_APIHCHKNBR' => 'APIHCHKNBR',
        'COL_APIHCHKNBR' => 'APIHCHKNBR',
        'ApihChkNbr' => 'APIHCHKNBR',
        'ap_invoice_head.ApihChkNbr' => 'APIHCHKNBR',
        'Apihchkdate' => 'APIHCHKDATE',
        'ApInvoice.Apihchkdate' => 'APIHCHKDATE',
        'apihchkdate' => 'APIHCHKDATE',
        'apInvoice.apihchkdate' => 'APIHCHKDATE',
        'ApInvoiceTableMap::COL_APIHCHKDATE' => 'APIHCHKDATE',
        'COL_APIHCHKDATE' => 'APIHCHKDATE',
        'ApihChkDate' => 'APIHCHKDATE',
        'ap_invoice_head.ApihChkDate' => 'APIHCHKDATE',
        'Apihchkamt' => 'APIHCHKAMT',
        'ApInvoice.Apihchkamt' => 'APIHCHKAMT',
        'apihchkamt' => 'APIHCHKAMT',
        'apInvoice.apihchkamt' => 'APIHCHKAMT',
        'ApInvoiceTableMap::COL_APIHCHKAMT' => 'APIHCHKAMT',
        'COL_APIHCHKAMT' => 'APIHCHKAMT',
        'ApihChkAmt' => 'APIHCHKAMT',
        'ap_invoice_head.ApihChkAmt' => 'APIHCHKAMT',
        'Apihchkglacct' => 'APIHCHKGLACCT',
        'ApInvoice.Apihchkglacct' => 'APIHCHKGLACCT',
        'apihchkglacct' => 'APIHCHKGLACCT',
        'apInvoice.apihchkglacct' => 'APIHCHKGLACCT',
        'ApInvoiceTableMap::COL_APIHCHKGLACCT' => 'APIHCHKGLACCT',
        'COL_APIHCHKGLACCT' => 'APIHCHKGLACCT',
        'ApihChkGlAcct' => 'APIHCHKGLACCT',
        'ap_invoice_head.ApihChkGlAcct' => 'APIHCHKGLACCT',
        'Intbwhse' => 'INTBWHSE',
        'ApInvoice.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'apInvoice.intbwhse' => 'INTBWHSE',
        'ApInvoiceTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'ap_invoice_head.IntbWhse' => 'INTBWHSE',
        'Aptmtermcode' => 'APTMTERMCODE',
        'ApInvoice.Aptmtermcode' => 'APTMTERMCODE',
        'aptmtermcode' => 'APTMTERMCODE',
        'apInvoice.aptmtermcode' => 'APTMTERMCODE',
        'ApInvoiceTableMap::COL_APTMTERMCODE' => 'APTMTERMCODE',
        'COL_APTMTERMCODE' => 'APTMTERMCODE',
        'AptmTermCode' => 'APTMTERMCODE',
        'ap_invoice_head.AptmTermCode' => 'APTMTERMCODE',
        'Apihvenddisc' => 'APIHVENDDISC',
        'ApInvoice.Apihvenddisc' => 'APIHVENDDISC',
        'apihvenddisc' => 'APIHVENDDISC',
        'apInvoice.apihvenddisc' => 'APIHVENDDISC',
        'ApInvoiceTableMap::COL_APIHVENDDISC' => 'APIHVENDDISC',
        'COL_APIHVENDDISC' => 'APIHVENDDISC',
        'ApihVendDisc' => 'APIHVENDDISC',
        'ap_invoice_head.ApihVendDisc' => 'APIHVENDDISC',
        'Apihinvref' => 'APIHINVREF',
        'ApInvoice.Apihinvref' => 'APIHINVREF',
        'apihinvref' => 'APIHINVREF',
        'apInvoice.apihinvref' => 'APIHINVREF',
        'ApInvoiceTableMap::COL_APIHINVREF' => 'APIHINVREF',
        'COL_APIHINVREF' => 'APIHINVREF',
        'ApihInvRef' => 'APIHINVREF',
        'ap_invoice_head.ApihInvRef' => 'APIHINVREF',
        'Apihcenbeeformatid' => 'APIHCENBEEFORMATID',
        'ApInvoice.Apihcenbeeformatid' => 'APIHCENBEEFORMATID',
        'apihcenbeeformatid' => 'APIHCENBEEFORMATID',
        'apInvoice.apihcenbeeformatid' => 'APIHCENBEEFORMATID',
        'ApInvoiceTableMap::COL_APIHCENBEEFORMATID' => 'APIHCENBEEFORMATID',
        'COL_APIHCENBEEFORMATID' => 'APIHCENBEEFORMATID',
        'ApihCenbeeFormatId' => 'APIHCENBEEFORMATID',
        'ap_invoice_head.ApihCenbeeFormatId' => 'APIHCENBEEFORMATID',
        'Apihcenbeeponbr' => 'APIHCENBEEPONBR',
        'ApInvoice.Apihcenbeeponbr' => 'APIHCENBEEPONBR',
        'apihcenbeeponbr' => 'APIHCENBEEPONBR',
        'apInvoice.apihcenbeeponbr' => 'APIHCENBEEPONBR',
        'ApInvoiceTableMap::COL_APIHCENBEEPONBR' => 'APIHCENBEEPONBR',
        'COL_APIHCENBEEPONBR' => 'APIHCENBEEPONBR',
        'ApihCenbeePoNbr' => 'APIHCENBEEPONBR',
        'ap_invoice_head.ApihCenbeePoNbr' => 'APIHCENBEEPONBR',
        'Apihtakeexpired' => 'APIHTAKEEXPIRED',
        'ApInvoice.Apihtakeexpired' => 'APIHTAKEEXPIRED',
        'apihtakeexpired' => 'APIHTAKEEXPIRED',
        'apInvoice.apihtakeexpired' => 'APIHTAKEEXPIRED',
        'ApInvoiceTableMap::COL_APIHTAKEEXPIRED' => 'APIHTAKEEXPIRED',
        'COL_APIHTAKEEXPIRED' => 'APIHTAKEEXPIRED',
        'ApihTakeExpired' => 'APIHTAKEEXPIRED',
        'ap_invoice_head.ApihTakeExpired' => 'APIHTAKEEXPIRED',
        'Apihexchctry' => 'APIHEXCHCTRY',
        'ApInvoice.Apihexchctry' => 'APIHEXCHCTRY',
        'apihexchctry' => 'APIHEXCHCTRY',
        'apInvoice.apihexchctry' => 'APIHEXCHCTRY',
        'ApInvoiceTableMap::COL_APIHEXCHCTRY' => 'APIHEXCHCTRY',
        'COL_APIHEXCHCTRY' => 'APIHEXCHCTRY',
        'ApihExchCtry' => 'APIHEXCHCTRY',
        'ap_invoice_head.ApihExchCtry' => 'APIHEXCHCTRY',
        'Apihexchrate' => 'APIHEXCHRATE',
        'ApInvoice.Apihexchrate' => 'APIHEXCHRATE',
        'apihexchrate' => 'APIHEXCHRATE',
        'apInvoice.apihexchrate' => 'APIHEXCHRATE',
        'ApInvoiceTableMap::COL_APIHEXCHRATE' => 'APIHEXCHRATE',
        'COL_APIHEXCHRATE' => 'APIHEXCHRATE',
        'ApihExchRate' => 'APIHEXCHRATE',
        'ap_invoice_head.ApihExchRate' => 'APIHEXCHRATE',
        'Dateupdtd' => 'DATEUPDTD',
        'ApInvoice.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'apInvoice.dateupdtd' => 'DATEUPDTD',
        'ApInvoiceTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ap_invoice_head.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ApInvoice.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'apInvoice.timeupdtd' => 'TIMEUPDTD',
        'ApInvoiceTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ap_invoice_head.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ApInvoice.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'apInvoice.dummy' => 'DUMMY',
        'ApInvoiceTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ap_invoice_head.dummy' => 'DUMMY',
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
        $this->setName('ap_invoice_head');
        $this->setPhpName('ApInvoice');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApInvoice');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ApveVendId', 'Apvevendid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addPrimaryKey('ApihPayToKey', 'Apihpaytokey', 'VARCHAR', true, 180, '');
        $this->addColumn('ApihPtName', 'Apihptname', 'VARCHAR', false, 30, null);
        $this->addColumn('ApihPtAdr1', 'Apihptadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ApihPtAdr2', 'Apihptadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ApihPtAdr3', 'Apihptadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ApihPtCtry', 'Apihptctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ApihPtCity', 'Apihptcity', 'VARCHAR', false, 16, null);
        $this->addColumn('ApihPtStat', 'Apihptstat', 'VARCHAR', false, 2, null);
        $this->addColumn('ApihPtZipCode', 'Apihptzipcode', 'VARCHAR', false, 10, null);
        $this->addForeignPrimaryKey('ApihPoNbr', 'Apihponbr', 'VARCHAR' , 'po_head', 'PohdNbr', true, 8, '');
        $this->addPrimaryKey('ApihCtrlNbr', 'Apihctrlnbr', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('ApihInvNbr', 'Apihinvnbr', 'VARCHAR', true, 15, '');
        $this->addPrimaryKey('ApihSeq', 'Apihseq', 'INTEGER', true, 4, 0);
        $this->addColumn('ApihStat', 'Apihstat', 'VARCHAR', false, 1, null);
        $this->addColumn('ApihInvDate', 'Apihinvdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ApihDiscDate', 'Apihdiscdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ApihDueDate', 'Apihduedate', 'VARCHAR', false, 8, null);
        $this->addColumn('ApihTotAmt', 'Apihtotamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ApihDiscAmt', 'Apihdiscamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ApihPpChkNbr', 'Apihppchknbr', 'INTEGER', false, 8, null);
        $this->addColumn('ApihGlPd', 'Apihglpd', 'INTEGER', false, 2, null);
        $this->addColumn('ApihChkNbr', 'Apihchknbr', 'INTEGER', false, 8, null);
        $this->addColumn('ApihChkDate', 'Apihchkdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ApihChkAmt', 'Apihchkamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ApihChkGlAcct', 'Apihchkglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('AptmTermCode', 'Aptmtermcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ApihVendDisc', 'Apihvenddisc', 'DECIMAL', false, 20, null);
        $this->addColumn('ApihInvRef', 'Apihinvref', 'VARCHAR', false, 20, null);
        $this->addColumn('ApihCenbeeFormatId', 'Apihcenbeeformatid', 'VARCHAR', false, 1, null);
        $this->addColumn('ApihCenbeePoNbr', 'Apihcenbeeponbr', 'VARCHAR', false, 8, null);
        $this->addColumn('ApihTakeExpired', 'Apihtakeexpired', 'VARCHAR', false, 1, null);
        $this->addColumn('ApihExchCtry', 'Apihexchctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ApihExchRate', 'Apihexchrate', 'DECIMAL', false, 20, null);
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
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApihPoNbr',
    1 => ':PohdNbr',
  ),
), null, null, null, false);
        $this->addRelation('ApInvoiceDetail', '\\ApInvoiceDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ApidInvNbr',
    1 => ':ApihInvNbr',
  ),
  1 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
  2 =>
  array (
    0 => ':ApidPayToKey',
    1 => ':ApihPayToKey',
  ),
  3 =>
  array (
    0 => ':ApidPoNbr',
    1 => ':ApihPoNbr',
  ),
  4 =>
  array (
    0 => ':ApidCtrlNbr',
    1 => ':ApihCtrlNbr',
  ),
  5 =>
  array (
    0 => ':ApidSeq',
    1 => ':ApihSeq',
  ),
), null, null, 'ApInvoiceDetails', false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ApInvoice $obj A \ApInvoice object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ApInvoice $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getApvevendid() || is_scalar($obj->getApvevendid()) || is_callable([$obj->getApvevendid(), '__toString']) ? (string) $obj->getApvevendid() : $obj->getApvevendid()), (null === $obj->getApihpaytokey() || is_scalar($obj->getApihpaytokey()) || is_callable([$obj->getApihpaytokey(), '__toString']) ? (string) $obj->getApihpaytokey() : $obj->getApihpaytokey()), (null === $obj->getApihponbr() || is_scalar($obj->getApihponbr()) || is_callable([$obj->getApihponbr(), '__toString']) ? (string) $obj->getApihponbr() : $obj->getApihponbr()), (null === $obj->getApihctrlnbr() || is_scalar($obj->getApihctrlnbr()) || is_callable([$obj->getApihctrlnbr(), '__toString']) ? (string) $obj->getApihctrlnbr() : $obj->getApihctrlnbr()), (null === $obj->getApihinvnbr() || is_scalar($obj->getApihinvnbr()) || is_callable([$obj->getApihinvnbr(), '__toString']) ? (string) $obj->getApihinvnbr() : $obj->getApihinvnbr()), (null === $obj->getApihseq() || is_scalar($obj->getApihseq()) || is_callable([$obj->getApihseq(), '__toString']) ? (string) $obj->getApihseq() : $obj->getApihseq())]);
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
     * @param mixed $value A \ApInvoice object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ApInvoice) {
                $key = serialize([(null === $value->getApvevendid() || is_scalar($value->getApvevendid()) || is_callable([$value->getApvevendid(), '__toString']) ? (string) $value->getApvevendid() : $value->getApvevendid()), (null === $value->getApihpaytokey() || is_scalar($value->getApihpaytokey()) || is_callable([$value->getApihpaytokey(), '__toString']) ? (string) $value->getApihpaytokey() : $value->getApihpaytokey()), (null === $value->getApihponbr() || is_scalar($value->getApihponbr()) || is_callable([$value->getApihponbr(), '__toString']) ? (string) $value->getApihponbr() : $value->getApihponbr()), (null === $value->getApihctrlnbr() || is_scalar($value->getApihctrlnbr()) || is_callable([$value->getApihctrlnbr(), '__toString']) ? (string) $value->getApihctrlnbr() : $value->getApihctrlnbr()), (null === $value->getApihinvnbr() || is_scalar($value->getApihinvnbr()) || is_callable([$value->getApihinvnbr(), '__toString']) ? (string) $value->getApihinvnbr() : $value->getApihinvnbr()), (null === $value->getApihseq() || is_scalar($value->getApihseq()) || is_callable([$value->getApihseq(), '__toString']) ? (string) $value->getApihseq() : $value->getApihseq())]);

            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ApInvoice object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Apihpaytokey', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 10 + $offset
                : self::translateFieldName('Apihponbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 11 + $offset
                : self::translateFieldName('Apihctrlnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 12 + $offset
                : self::translateFieldName('Apihinvnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 13 + $offset
                : self::translateFieldName('Apihseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ApInvoiceTableMap::CLASS_DEFAULT : ApInvoiceTableMap::OM_CLASS;
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
     * @return array (ApInvoice object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ApInvoiceTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApInvoiceTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApInvoiceTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApInvoiceTableMap::OM_CLASS;
            /** @var ApInvoice $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApInvoiceTableMap::addInstanceToPool($obj, $key);
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
            $key = ApInvoiceTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApInvoiceTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApInvoice $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApInvoiceTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPAYTOKEY);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTNAME);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTADR1);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTADR2);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTADR3);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTCTRY);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTCITY);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTSTAT);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPTZIPCODE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPONBR);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCTRLNBR);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHINVNBR);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHSEQ);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHSTAT);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHINVDATE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHDISCDATE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHDUEDATE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHTOTAMT);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHDISCAMT);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHPPCHKNBR);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHGLPD);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCHKNBR);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCHKDATE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCHKAMT);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCHKGLACCT);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APTMTERMCODE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHVENDDISC);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHINVREF);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCENBEEFORMATID);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHCENBEEPONBR);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHTAKEEXPIRED);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHEXCHCTRY);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_APIHEXCHRATE);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ApInvoiceTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.ApihPayToKey');
            $criteria->addSelectColumn($alias . '.ApihPtName');
            $criteria->addSelectColumn($alias . '.ApihPtAdr1');
            $criteria->addSelectColumn($alias . '.ApihPtAdr2');
            $criteria->addSelectColumn($alias . '.ApihPtAdr3');
            $criteria->addSelectColumn($alias . '.ApihPtCtry');
            $criteria->addSelectColumn($alias . '.ApihPtCity');
            $criteria->addSelectColumn($alias . '.ApihPtStat');
            $criteria->addSelectColumn($alias . '.ApihPtZipCode');
            $criteria->addSelectColumn($alias . '.ApihPoNbr');
            $criteria->addSelectColumn($alias . '.ApihCtrlNbr');
            $criteria->addSelectColumn($alias . '.ApihInvNbr');
            $criteria->addSelectColumn($alias . '.ApihSeq');
            $criteria->addSelectColumn($alias . '.ApihStat');
            $criteria->addSelectColumn($alias . '.ApihInvDate');
            $criteria->addSelectColumn($alias . '.ApihDiscDate');
            $criteria->addSelectColumn($alias . '.ApihDueDate');
            $criteria->addSelectColumn($alias . '.ApihTotAmt');
            $criteria->addSelectColumn($alias . '.ApihDiscAmt');
            $criteria->addSelectColumn($alias . '.ApihPpChkNbr');
            $criteria->addSelectColumn($alias . '.ApihGlPd');
            $criteria->addSelectColumn($alias . '.ApihChkNbr');
            $criteria->addSelectColumn($alias . '.ApihChkDate');
            $criteria->addSelectColumn($alias . '.ApihChkAmt');
            $criteria->addSelectColumn($alias . '.ApihChkGlAcct');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.AptmTermCode');
            $criteria->addSelectColumn($alias . '.ApihVendDisc');
            $criteria->addSelectColumn($alias . '.ApihInvRef');
            $criteria->addSelectColumn($alias . '.ApihCenbeeFormatId');
            $criteria->addSelectColumn($alias . '.ApihCenbeePoNbr');
            $criteria->addSelectColumn($alias . '.ApihTakeExpired');
            $criteria->addSelectColumn($alias . '.ApihExchCtry');
            $criteria->addSelectColumn($alias . '.ApihExchRate');
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
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPAYTOKEY);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTNAME);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTADR1);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTADR2);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTADR3);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTCTRY);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTCITY);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTSTAT);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPTZIPCODE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPONBR);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCTRLNBR);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHINVNBR);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHSEQ);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHSTAT);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHINVDATE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHDISCDATE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHDUEDATE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHTOTAMT);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHDISCAMT);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHPPCHKNBR);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHGLPD);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCHKNBR);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCHKDATE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCHKAMT);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCHKGLACCT);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APTMTERMCODE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHVENDDISC);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHINVREF);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCENBEEFORMATID);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHCENBEEPONBR);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHTAKEEXPIRED);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHEXCHCTRY);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_APIHEXCHRATE);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ApInvoiceTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.ApihPayToKey');
            $criteria->removeSelectColumn($alias . '.ApihPtName');
            $criteria->removeSelectColumn($alias . '.ApihPtAdr1');
            $criteria->removeSelectColumn($alias . '.ApihPtAdr2');
            $criteria->removeSelectColumn($alias . '.ApihPtAdr3');
            $criteria->removeSelectColumn($alias . '.ApihPtCtry');
            $criteria->removeSelectColumn($alias . '.ApihPtCity');
            $criteria->removeSelectColumn($alias . '.ApihPtStat');
            $criteria->removeSelectColumn($alias . '.ApihPtZipCode');
            $criteria->removeSelectColumn($alias . '.ApihPoNbr');
            $criteria->removeSelectColumn($alias . '.ApihCtrlNbr');
            $criteria->removeSelectColumn($alias . '.ApihInvNbr');
            $criteria->removeSelectColumn($alias . '.ApihSeq');
            $criteria->removeSelectColumn($alias . '.ApihStat');
            $criteria->removeSelectColumn($alias . '.ApihInvDate');
            $criteria->removeSelectColumn($alias . '.ApihDiscDate');
            $criteria->removeSelectColumn($alias . '.ApihDueDate');
            $criteria->removeSelectColumn($alias . '.ApihTotAmt');
            $criteria->removeSelectColumn($alias . '.ApihDiscAmt');
            $criteria->removeSelectColumn($alias . '.ApihPpChkNbr');
            $criteria->removeSelectColumn($alias . '.ApihGlPd');
            $criteria->removeSelectColumn($alias . '.ApihChkNbr');
            $criteria->removeSelectColumn($alias . '.ApihChkDate');
            $criteria->removeSelectColumn($alias . '.ApihChkAmt');
            $criteria->removeSelectColumn($alias . '.ApihChkGlAcct');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.AptmTermCode');
            $criteria->removeSelectColumn($alias . '.ApihVendDisc');
            $criteria->removeSelectColumn($alias . '.ApihInvRef');
            $criteria->removeSelectColumn($alias . '.ApihCenbeeFormatId');
            $criteria->removeSelectColumn($alias . '.ApihCenbeePoNbr');
            $criteria->removeSelectColumn($alias . '.ApihTakeExpired');
            $criteria->removeSelectColumn($alias . '.ApihExchCtry');
            $criteria->removeSelectColumn($alias . '.ApihExchRate');
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
        return Propel::getServiceContainer()->getDatabaseMap(ApInvoiceTableMap::DATABASE_NAME)->getTable(ApInvoiceTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ApInvoice or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ApInvoice object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApInvoice) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApInvoiceTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ApInvoiceTableMap::COL_APVEVENDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceTableMap::COL_APIHPAYTOKEY, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceTableMap::COL_APIHPONBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceTableMap::COL_APIHCTRLNBR, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceTableMap::COL_APIHINVNBR, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceTableMap::COL_APIHSEQ, $value[5]));
                $criteria->addOr($criterion);
            }
        }

        $query = ApInvoiceQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApInvoiceTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApInvoiceTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_invoice_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ApInvoiceQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApInvoice or Criteria object.
     *
     * @param mixed $criteria Criteria or ApInvoice object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApInvoice object
        }


        // Set the correct dbName
        $query = ApInvoiceQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
