<?php

namespace Map;

use \ArPaymentPending;
use \ArPaymentPendingQuery;
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
 * This class defines the structure of the 'ar_cash_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArPaymentPendingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArPaymentPendingTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_cash_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArPaymentPending';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArPaymentPending';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 44;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 44;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'ar_cash_det.ArcuCustId';

    /**
     * the column name for the ArcdInvNbr field
     */
    const COL_ARCDINVNBR = 'ar_cash_det.ArcdInvNbr';

    /**
     * the column name for the ArcdInvSeq field
     */
    const COL_ARCDINVSEQ = 'ar_cash_det.ArcdInvSeq';

    /**
     * the column name for the ArcdPaid field
     */
    const COL_ARCDPAID = 'ar_cash_det.ArcdPaid';

    /**
     * the column name for the ArcdInvDate field
     */
    const COL_ARCDINVDATE = 'ar_cash_det.ArcdInvDate';

    /**
     * the column name for the ArcdDueDate field
     */
    const COL_ARCDDUEDATE = 'ar_cash_det.ArcdDueDate';

    /**
     * the column name for the ArcdChkNbr field
     */
    const COL_ARCDCHKNBR = 'ar_cash_det.ArcdChkNbr';

    /**
     * the column name for the ArcdAmtDue field
     */
    const COL_ARCDAMTDUE = 'ar_cash_det.ArcdAmtDue';

    /**
     * the column name for the ArcdAmtPaid field
     */
    const COL_ARCDAMTPAID = 'ar_cash_det.ArcdAmtPaid';

    /**
     * the column name for the ArcdDiscPaid field
     */
    const COL_ARCDDISCPAID = 'ar_cash_det.ArcdDiscPaid';

    /**
     * the column name for the ArcdCashAcct field
     */
    const COL_ARCDCASHACCT = 'ar_cash_det.ArcdCashAcct';

    /**
     * the column name for the ArcdCredAcct field
     */
    const COL_ARCDCREDACCT = 'ar_cash_det.ArcdCredAcct';

    /**
     * the column name for the ArcdTermCode field
     */
    const COL_ARCDTERMCODE = 'ar_cash_det.ArcdTermCode';

    /**
     * the column name for the ArcdFrtAllow field
     */
    const COL_ARCDFRTALLOW = 'ar_cash_det.ArcdFrtAllow';

    /**
     * the column name for the ArcdCustPo field
     */
    const COL_ARCDCUSTPO = 'ar_cash_det.ArcdCustPo';

    /**
     * the column name for the ArcdOrdrNbr field
     */
    const COL_ARCDORDRNBR = 'ar_cash_det.ArcdOrdrNbr';

    /**
     * the column name for the ArcdTaxCode1 field
     */
    const COL_ARCDTAXCODE1 = 'ar_cash_det.ArcdTaxCode1';

    /**
     * the column name for the ArcdTaxAllow1 field
     */
    const COL_ARCDTAXALLOW1 = 'ar_cash_det.ArcdTaxAllow1';

    /**
     * the column name for the ArcdTaxCode2 field
     */
    const COL_ARCDTAXCODE2 = 'ar_cash_det.ArcdTaxCode2';

    /**
     * the column name for the ArcdTaxAllow2 field
     */
    const COL_ARCDTAXALLOW2 = 'ar_cash_det.ArcdTaxAllow2';

    /**
     * the column name for the ArcdTaxCode3 field
     */
    const COL_ARCDTAXCODE3 = 'ar_cash_det.ArcdTaxCode3';

    /**
     * the column name for the ArcdTaxAllow3 field
     */
    const COL_ARCDTAXALLOW3 = 'ar_cash_det.ArcdTaxAllow3';

    /**
     * the column name for the ArcdTaxCode4 field
     */
    const COL_ARCDTAXCODE4 = 'ar_cash_det.ArcdTaxCode4';

    /**
     * the column name for the ArcdTaxAllow4 field
     */
    const COL_ARCDTAXALLOW4 = 'ar_cash_det.ArcdTaxAllow4';

    /**
     * the column name for the ArcdTaxCode5 field
     */
    const COL_ARCDTAXCODE5 = 'ar_cash_det.ArcdTaxCode5';

    /**
     * the column name for the ArcdTaxAllow5 field
     */
    const COL_ARCDTAXALLOW5 = 'ar_cash_det.ArcdTaxAllow5';

    /**
     * the column name for the ArcdTaxCode6 field
     */
    const COL_ARCDTAXCODE6 = 'ar_cash_det.ArcdTaxCode6';

    /**
     * the column name for the ArcdTaxAllow6 field
     */
    const COL_ARCDTAXALLOW6 = 'ar_cash_det.ArcdTaxAllow6';

    /**
     * the column name for the ArcdTaxCode7 field
     */
    const COL_ARCDTAXCODE7 = 'ar_cash_det.ArcdTaxCode7';

    /**
     * the column name for the ArcdTaxAllow7 field
     */
    const COL_ARCDTAXALLOW7 = 'ar_cash_det.ArcdTaxAllow7';

    /**
     * the column name for the ArcdTaxCode8 field
     */
    const COL_ARCDTAXCODE8 = 'ar_cash_det.ArcdTaxCode8';

    /**
     * the column name for the ArcdTaxAllow8 field
     */
    const COL_ARCDTAXALLOW8 = 'ar_cash_det.ArcdTaxAllow8';

    /**
     * the column name for the ArcdTaxCode9 field
     */
    const COL_ARCDTAXCODE9 = 'ar_cash_det.ArcdTaxCode9';

    /**
     * the column name for the ArcdTaxAllow9 field
     */
    const COL_ARCDTAXALLOW9 = 'ar_cash_det.ArcdTaxAllow9';

    /**
     * the column name for the ArcdWriteOff field
     */
    const COL_ARCDWRITEOFF = 'ar_cash_det.ArcdWriteOff';

    /**
     * the column name for the ArcdWriteOffReas field
     */
    const COL_ARCDWRITEOFFREAS = 'ar_cash_det.ArcdWriteOffReas';

    /**
     * the column name for the ArcdComRate field
     */
    const COL_ARCDCOMRATE = 'ar_cash_det.ArcdComRate';

    /**
     * the column name for the ArcdSalesAmt field
     */
    const COL_ARCDSALESAMT = 'ar_cash_det.ArcdSalesAmt';

    /**
     * the column name for the ArcdPayDate field
     */
    const COL_ARCDPAYDATE = 'ar_cash_det.ArcdPayDate';

    /**
     * the column name for the ArcdGlPd field
     */
    const COL_ARCDGLPD = 'ar_cash_det.ArcdGlPd';

    /**
     * the column name for the ArcdRef field
     */
    const COL_ARCDREF = 'ar_cash_det.ArcdRef';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_cash_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_cash_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_cash_det.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arcdinvnbr', 'Arcdinvseq', 'Arcdpaid', 'Arcdinvdate', 'Arcdduedate', 'Arcdchknbr', 'Arcdamtdue', 'Arcdamtpaid', 'Arcddiscpaid', 'Arcdcashacct', 'Arcdcredacct', 'Arcdtermcode', 'Arcdfrtallow', 'Arcdcustpo', 'Arcdordrnbr', 'Arcdtaxcode1', 'Arcdtaxallow1', 'Arcdtaxcode2', 'Arcdtaxallow2', 'Arcdtaxcode3', 'Arcdtaxallow3', 'Arcdtaxcode4', 'Arcdtaxallow4', 'Arcdtaxcode5', 'Arcdtaxallow5', 'Arcdtaxcode6', 'Arcdtaxallow6', 'Arcdtaxcode7', 'Arcdtaxallow7', 'Arcdtaxcode8', 'Arcdtaxallow8', 'Arcdtaxcode9', 'Arcdtaxallow9', 'Arcdwriteoff', 'Arcdwriteoffreas', 'Arcdcomrate', 'Arcdsalesamt', 'Arcdpaydate', 'Arcdglpd', 'Arcdref', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arcdinvnbr', 'arcdinvseq', 'arcdpaid', 'arcdinvdate', 'arcdduedate', 'arcdchknbr', 'arcdamtdue', 'arcdamtpaid', 'arcddiscpaid', 'arcdcashacct', 'arcdcredacct', 'arcdtermcode', 'arcdfrtallow', 'arcdcustpo', 'arcdordrnbr', 'arcdtaxcode1', 'arcdtaxallow1', 'arcdtaxcode2', 'arcdtaxallow2', 'arcdtaxcode3', 'arcdtaxallow3', 'arcdtaxcode4', 'arcdtaxallow4', 'arcdtaxcode5', 'arcdtaxallow5', 'arcdtaxcode6', 'arcdtaxallow6', 'arcdtaxcode7', 'arcdtaxallow7', 'arcdtaxcode8', 'arcdtaxallow8', 'arcdtaxcode9', 'arcdtaxallow9', 'arcdwriteoff', 'arcdwriteoffreas', 'arcdcomrate', 'arcdsalesamt', 'arcdpaydate', 'arcdglpd', 'arcdref', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArPaymentPendingTableMap::COL_ARCUCUSTID, ArPaymentPendingTableMap::COL_ARCDINVNBR, ArPaymentPendingTableMap::COL_ARCDINVSEQ, ArPaymentPendingTableMap::COL_ARCDPAID, ArPaymentPendingTableMap::COL_ARCDINVDATE, ArPaymentPendingTableMap::COL_ARCDDUEDATE, ArPaymentPendingTableMap::COL_ARCDCHKNBR, ArPaymentPendingTableMap::COL_ARCDAMTDUE, ArPaymentPendingTableMap::COL_ARCDAMTPAID, ArPaymentPendingTableMap::COL_ARCDDISCPAID, ArPaymentPendingTableMap::COL_ARCDCASHACCT, ArPaymentPendingTableMap::COL_ARCDCREDACCT, ArPaymentPendingTableMap::COL_ARCDTERMCODE, ArPaymentPendingTableMap::COL_ARCDFRTALLOW, ArPaymentPendingTableMap::COL_ARCDCUSTPO, ArPaymentPendingTableMap::COL_ARCDORDRNBR, ArPaymentPendingTableMap::COL_ARCDTAXCODE1, ArPaymentPendingTableMap::COL_ARCDTAXALLOW1, ArPaymentPendingTableMap::COL_ARCDTAXCODE2, ArPaymentPendingTableMap::COL_ARCDTAXALLOW2, ArPaymentPendingTableMap::COL_ARCDTAXCODE3, ArPaymentPendingTableMap::COL_ARCDTAXALLOW3, ArPaymentPendingTableMap::COL_ARCDTAXCODE4, ArPaymentPendingTableMap::COL_ARCDTAXALLOW4, ArPaymentPendingTableMap::COL_ARCDTAXCODE5, ArPaymentPendingTableMap::COL_ARCDTAXALLOW5, ArPaymentPendingTableMap::COL_ARCDTAXCODE6, ArPaymentPendingTableMap::COL_ARCDTAXALLOW6, ArPaymentPendingTableMap::COL_ARCDTAXCODE7, ArPaymentPendingTableMap::COL_ARCDTAXALLOW7, ArPaymentPendingTableMap::COL_ARCDTAXCODE8, ArPaymentPendingTableMap::COL_ARCDTAXALLOW8, ArPaymentPendingTableMap::COL_ARCDTAXCODE9, ArPaymentPendingTableMap::COL_ARCDTAXALLOW9, ArPaymentPendingTableMap::COL_ARCDWRITEOFF, ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS, ArPaymentPendingTableMap::COL_ARCDCOMRATE, ArPaymentPendingTableMap::COL_ARCDSALESAMT, ArPaymentPendingTableMap::COL_ARCDPAYDATE, ArPaymentPendingTableMap::COL_ARCDGLPD, ArPaymentPendingTableMap::COL_ARCDREF, ArPaymentPendingTableMap::COL_DATEUPDTD, ArPaymentPendingTableMap::COL_TIMEUPDTD, ArPaymentPendingTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArcdInvNbr', 'ArcdInvSeq', 'ArcdPaid', 'ArcdInvDate', 'ArcdDueDate', 'ArcdChkNbr', 'ArcdAmtDue', 'ArcdAmtPaid', 'ArcdDiscPaid', 'ArcdCashAcct', 'ArcdCredAcct', 'ArcdTermCode', 'ArcdFrtAllow', 'ArcdCustPo', 'ArcdOrdrNbr', 'ArcdTaxCode1', 'ArcdTaxAllow1', 'ArcdTaxCode2', 'ArcdTaxAllow2', 'ArcdTaxCode3', 'ArcdTaxAllow3', 'ArcdTaxCode4', 'ArcdTaxAllow4', 'ArcdTaxCode5', 'ArcdTaxAllow5', 'ArcdTaxCode6', 'ArcdTaxAllow6', 'ArcdTaxCode7', 'ArcdTaxAllow7', 'ArcdTaxCode8', 'ArcdTaxAllow8', 'ArcdTaxCode9', 'ArcdTaxAllow9', 'ArcdWriteOff', 'ArcdWriteOffReas', 'ArcdComRate', 'ArcdSalesAmt', 'ArcdPayDate', 'ArcdGlPd', 'ArcdRef', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arcdinvnbr' => 1, 'Arcdinvseq' => 2, 'Arcdpaid' => 3, 'Arcdinvdate' => 4, 'Arcdduedate' => 5, 'Arcdchknbr' => 6, 'Arcdamtdue' => 7, 'Arcdamtpaid' => 8, 'Arcddiscpaid' => 9, 'Arcdcashacct' => 10, 'Arcdcredacct' => 11, 'Arcdtermcode' => 12, 'Arcdfrtallow' => 13, 'Arcdcustpo' => 14, 'Arcdordrnbr' => 15, 'Arcdtaxcode1' => 16, 'Arcdtaxallow1' => 17, 'Arcdtaxcode2' => 18, 'Arcdtaxallow2' => 19, 'Arcdtaxcode3' => 20, 'Arcdtaxallow3' => 21, 'Arcdtaxcode4' => 22, 'Arcdtaxallow4' => 23, 'Arcdtaxcode5' => 24, 'Arcdtaxallow5' => 25, 'Arcdtaxcode6' => 26, 'Arcdtaxallow6' => 27, 'Arcdtaxcode7' => 28, 'Arcdtaxallow7' => 29, 'Arcdtaxcode8' => 30, 'Arcdtaxallow8' => 31, 'Arcdtaxcode9' => 32, 'Arcdtaxallow9' => 33, 'Arcdwriteoff' => 34, 'Arcdwriteoffreas' => 35, 'Arcdcomrate' => 36, 'Arcdsalesamt' => 37, 'Arcdpaydate' => 38, 'Arcdglpd' => 39, 'Arcdref' => 40, 'Dateupdtd' => 41, 'Timeupdtd' => 42, 'Dummy' => 43, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arcdinvnbr' => 1, 'arcdinvseq' => 2, 'arcdpaid' => 3, 'arcdinvdate' => 4, 'arcdduedate' => 5, 'arcdchknbr' => 6, 'arcdamtdue' => 7, 'arcdamtpaid' => 8, 'arcddiscpaid' => 9, 'arcdcashacct' => 10, 'arcdcredacct' => 11, 'arcdtermcode' => 12, 'arcdfrtallow' => 13, 'arcdcustpo' => 14, 'arcdordrnbr' => 15, 'arcdtaxcode1' => 16, 'arcdtaxallow1' => 17, 'arcdtaxcode2' => 18, 'arcdtaxallow2' => 19, 'arcdtaxcode3' => 20, 'arcdtaxallow3' => 21, 'arcdtaxcode4' => 22, 'arcdtaxallow4' => 23, 'arcdtaxcode5' => 24, 'arcdtaxallow5' => 25, 'arcdtaxcode6' => 26, 'arcdtaxallow6' => 27, 'arcdtaxcode7' => 28, 'arcdtaxallow7' => 29, 'arcdtaxcode8' => 30, 'arcdtaxallow8' => 31, 'arcdtaxcode9' => 32, 'arcdtaxallow9' => 33, 'arcdwriteoff' => 34, 'arcdwriteoffreas' => 35, 'arcdcomrate' => 36, 'arcdsalesamt' => 37, 'arcdpaydate' => 38, 'arcdglpd' => 39, 'arcdref' => 40, 'dateupdtd' => 41, 'timeupdtd' => 42, 'dummy' => 43, ),
        self::TYPE_COLNAME       => array(ArPaymentPendingTableMap::COL_ARCUCUSTID => 0, ArPaymentPendingTableMap::COL_ARCDINVNBR => 1, ArPaymentPendingTableMap::COL_ARCDINVSEQ => 2, ArPaymentPendingTableMap::COL_ARCDPAID => 3, ArPaymentPendingTableMap::COL_ARCDINVDATE => 4, ArPaymentPendingTableMap::COL_ARCDDUEDATE => 5, ArPaymentPendingTableMap::COL_ARCDCHKNBR => 6, ArPaymentPendingTableMap::COL_ARCDAMTDUE => 7, ArPaymentPendingTableMap::COL_ARCDAMTPAID => 8, ArPaymentPendingTableMap::COL_ARCDDISCPAID => 9, ArPaymentPendingTableMap::COL_ARCDCASHACCT => 10, ArPaymentPendingTableMap::COL_ARCDCREDACCT => 11, ArPaymentPendingTableMap::COL_ARCDTERMCODE => 12, ArPaymentPendingTableMap::COL_ARCDFRTALLOW => 13, ArPaymentPendingTableMap::COL_ARCDCUSTPO => 14, ArPaymentPendingTableMap::COL_ARCDORDRNBR => 15, ArPaymentPendingTableMap::COL_ARCDTAXCODE1 => 16, ArPaymentPendingTableMap::COL_ARCDTAXALLOW1 => 17, ArPaymentPendingTableMap::COL_ARCDTAXCODE2 => 18, ArPaymentPendingTableMap::COL_ARCDTAXALLOW2 => 19, ArPaymentPendingTableMap::COL_ARCDTAXCODE3 => 20, ArPaymentPendingTableMap::COL_ARCDTAXALLOW3 => 21, ArPaymentPendingTableMap::COL_ARCDTAXCODE4 => 22, ArPaymentPendingTableMap::COL_ARCDTAXALLOW4 => 23, ArPaymentPendingTableMap::COL_ARCDTAXCODE5 => 24, ArPaymentPendingTableMap::COL_ARCDTAXALLOW5 => 25, ArPaymentPendingTableMap::COL_ARCDTAXCODE6 => 26, ArPaymentPendingTableMap::COL_ARCDTAXALLOW6 => 27, ArPaymentPendingTableMap::COL_ARCDTAXCODE7 => 28, ArPaymentPendingTableMap::COL_ARCDTAXALLOW7 => 29, ArPaymentPendingTableMap::COL_ARCDTAXCODE8 => 30, ArPaymentPendingTableMap::COL_ARCDTAXALLOW8 => 31, ArPaymentPendingTableMap::COL_ARCDTAXCODE9 => 32, ArPaymentPendingTableMap::COL_ARCDTAXALLOW9 => 33, ArPaymentPendingTableMap::COL_ARCDWRITEOFF => 34, ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS => 35, ArPaymentPendingTableMap::COL_ARCDCOMRATE => 36, ArPaymentPendingTableMap::COL_ARCDSALESAMT => 37, ArPaymentPendingTableMap::COL_ARCDPAYDATE => 38, ArPaymentPendingTableMap::COL_ARCDGLPD => 39, ArPaymentPendingTableMap::COL_ARCDREF => 40, ArPaymentPendingTableMap::COL_DATEUPDTD => 41, ArPaymentPendingTableMap::COL_TIMEUPDTD => 42, ArPaymentPendingTableMap::COL_DUMMY => 43, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArcdInvNbr' => 1, 'ArcdInvSeq' => 2, 'ArcdPaid' => 3, 'ArcdInvDate' => 4, 'ArcdDueDate' => 5, 'ArcdChkNbr' => 6, 'ArcdAmtDue' => 7, 'ArcdAmtPaid' => 8, 'ArcdDiscPaid' => 9, 'ArcdCashAcct' => 10, 'ArcdCredAcct' => 11, 'ArcdTermCode' => 12, 'ArcdFrtAllow' => 13, 'ArcdCustPo' => 14, 'ArcdOrdrNbr' => 15, 'ArcdTaxCode1' => 16, 'ArcdTaxAllow1' => 17, 'ArcdTaxCode2' => 18, 'ArcdTaxAllow2' => 19, 'ArcdTaxCode3' => 20, 'ArcdTaxAllow3' => 21, 'ArcdTaxCode4' => 22, 'ArcdTaxAllow4' => 23, 'ArcdTaxCode5' => 24, 'ArcdTaxAllow5' => 25, 'ArcdTaxCode6' => 26, 'ArcdTaxAllow6' => 27, 'ArcdTaxCode7' => 28, 'ArcdTaxAllow7' => 29, 'ArcdTaxCode8' => 30, 'ArcdTaxAllow8' => 31, 'ArcdTaxCode9' => 32, 'ArcdTaxAllow9' => 33, 'ArcdWriteOff' => 34, 'ArcdWriteOffReas' => 35, 'ArcdComRate' => 36, 'ArcdSalesAmt' => 37, 'ArcdPayDate' => 38, 'ArcdGlPd' => 39, 'ArcdRef' => 40, 'DateUpdtd' => 41, 'TimeUpdtd' => 42, 'dummy' => 43, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
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
        $this->setName('ar_cash_det');
        $this->setPhpName('ArPaymentPending');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArPaymentPending');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cash_head', 'ArcuCustId', true, 6, '');
        $this->addPrimaryKey('ArcdInvNbr', 'Arcdinvnbr', 'VARCHAR', true, 10, '');
        $this->addPrimaryKey('ArcdInvSeq', 'Arcdinvseq', 'INTEGER', true, 2, 0);
        $this->addColumn('ArcdPaid', 'Arcdpaid', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcdInvDate', 'Arcdinvdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcdDueDate', 'Arcdduedate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcdChkNbr', 'Arcdchknbr', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcdAmtDue', 'Arcdamtdue', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdAmtPaid', 'Arcdamtpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdDiscPaid', 'Arcddiscpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdCashAcct', 'Arcdcashacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArcdCredAcct', 'Arcdcredacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArcdTermCode', 'Arcdtermcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcdFrtAllow', 'Arcdfrtallow', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdCustPo', 'Arcdcustpo', 'VARCHAR', false, 20, null);
        $this->addColumn('ArcdOrdrNbr', 'Arcdordrnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('ArcdTaxCode1', 'Arcdtaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow1', 'Arcdtaxallow1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode2', 'Arcdtaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow2', 'Arcdtaxallow2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode3', 'Arcdtaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow3', 'Arcdtaxallow3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode4', 'Arcdtaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow4', 'Arcdtaxallow4', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode5', 'Arcdtaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow5', 'Arcdtaxallow5', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode6', 'Arcdtaxcode6', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow6', 'Arcdtaxallow6', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode7', 'Arcdtaxcode7', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow7', 'Arcdtaxallow7', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode8', 'Arcdtaxcode8', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow8', 'Arcdtaxallow8', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdTaxCode9', 'Arcdtaxcode9', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcdTaxAllow9', 'Arcdtaxallow9', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdWriteOff', 'Arcdwriteoff', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdWriteOffReas', 'Arcdwriteoffreas', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcdComRate', 'Arcdcomrate', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdSalesAmt', 'Arcdsalesamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcdPayDate', 'Arcdpaydate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArcdGlPd', 'Arcdglpd', 'INTEGER', false, 2, null);
        $this->addColumn('ArcdRef', 'Arcdref', 'VARCHAR', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('ArCashHead', '\\ArCashHead', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ArPaymentPending $obj A \ArPaymentPending object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArcdinvnbr() || is_scalar($obj->getArcdinvnbr()) || is_callable([$obj->getArcdinvnbr(), '__toString']) ? (string) $obj->getArcdinvnbr() : $obj->getArcdinvnbr()), (null === $obj->getArcdinvseq() || is_scalar($obj->getArcdinvseq()) || is_callable([$obj->getArcdinvseq(), '__toString']) ? (string) $obj->getArcdinvseq() : $obj->getArcdinvseq())]);
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
     * @param mixed $value A \ArPaymentPending object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ArPaymentPending) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArcdinvnbr() || is_scalar($value->getArcdinvnbr()) || is_callable([$value->getArcdinvnbr(), '__toString']) ? (string) $value->getArcdinvnbr() : $value->getArcdinvnbr()), (null === $value->getArcdinvseq() || is_scalar($value->getArcdinvseq()) || is_callable([$value->getArcdinvseq(), '__toString']) ? (string) $value->getArcdinvseq() : $value->getArcdinvseq())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ArPaymentPending object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Arcdinvnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Arcdinvseq', TableMap::TYPE_PHPNAME, $indexType)
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ArPaymentPendingTableMap::CLASS_DEFAULT : ArPaymentPendingTableMap::OM_CLASS;
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
     * @return array           (ArPaymentPending object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArPaymentPendingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArPaymentPendingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArPaymentPendingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArPaymentPendingTableMap::OM_CLASS;
            /** @var ArPaymentPending $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArPaymentPendingTableMap::addInstanceToPool($obj, $key);
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
            $key = ArPaymentPendingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArPaymentPendingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArPaymentPending $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArPaymentPendingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDINVNBR);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDINVSEQ);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDPAID);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDINVDATE);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDDUEDATE);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDCHKNBR);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDAMTDUE);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDAMTPAID);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDDISCPAID);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDCASHACCT);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDCREDACCT);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTERMCODE);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDFRTALLOW);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDCUSTPO);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDORDRNBR);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE1);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE2);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE3);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE4);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE5);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE6);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE7);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE8);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXCODE9);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDWRITEOFF);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDCOMRATE);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDSALESAMT);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDPAYDATE);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDGLPD);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_ARCDREF);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArPaymentPendingTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArcdInvNbr');
            $criteria->addSelectColumn($alias . '.ArcdInvSeq');
            $criteria->addSelectColumn($alias . '.ArcdPaid');
            $criteria->addSelectColumn($alias . '.ArcdInvDate');
            $criteria->addSelectColumn($alias . '.ArcdDueDate');
            $criteria->addSelectColumn($alias . '.ArcdChkNbr');
            $criteria->addSelectColumn($alias . '.ArcdAmtDue');
            $criteria->addSelectColumn($alias . '.ArcdAmtPaid');
            $criteria->addSelectColumn($alias . '.ArcdDiscPaid');
            $criteria->addSelectColumn($alias . '.ArcdCashAcct');
            $criteria->addSelectColumn($alias . '.ArcdCredAcct');
            $criteria->addSelectColumn($alias . '.ArcdTermCode');
            $criteria->addSelectColumn($alias . '.ArcdFrtAllow');
            $criteria->addSelectColumn($alias . '.ArcdCustPo');
            $criteria->addSelectColumn($alias . '.ArcdOrdrNbr');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode1');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow1');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode2');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow2');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode3');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow3');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode4');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow4');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode5');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow5');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode6');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow6');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode7');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow7');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode8');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow8');
            $criteria->addSelectColumn($alias . '.ArcdTaxCode9');
            $criteria->addSelectColumn($alias . '.ArcdTaxAllow9');
            $criteria->addSelectColumn($alias . '.ArcdWriteOff');
            $criteria->addSelectColumn($alias . '.ArcdWriteOffReas');
            $criteria->addSelectColumn($alias . '.ArcdComRate');
            $criteria->addSelectColumn($alias . '.ArcdSalesAmt');
            $criteria->addSelectColumn($alias . '.ArcdPayDate');
            $criteria->addSelectColumn($alias . '.ArcdGlPd');
            $criteria->addSelectColumn($alias . '.ArcdRef');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArPaymentPendingTableMap::DATABASE_NAME)->getTable(ArPaymentPendingTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArPaymentPendingTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArPaymentPendingTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArPaymentPendingTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArPaymentPending or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArPaymentPending object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArPaymentPending) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArPaymentPendingTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ArPaymentPendingTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ArPaymentPendingTableMap::COL_ARCDINVNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = ArPaymentPendingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArPaymentPendingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArPaymentPendingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cash_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArPaymentPendingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArPaymentPending or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArPaymentPending object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArPaymentPending object
        }


        // Set the correct dbName
        $query = ArPaymentPendingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArPaymentPendingTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArPaymentPendingTableMap::buildTableMap();
