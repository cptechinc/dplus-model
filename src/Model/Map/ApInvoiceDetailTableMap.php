<?php

namespace Map;

use \ApInvoiceDetail;
use \ApInvoiceDetailQuery;
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
 * This class defines the structure of the 'ap_invoice_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ApInvoiceDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ApInvoiceDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ap_invoice_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ApInvoiceDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ApInvoiceDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'ap_invoice_det.ApveVendId';

    /**
     * the column name for the ApidPayToKey field
     */
    const COL_APIDPAYTOKEY = 'ap_invoice_det.ApidPayToKey';

    /**
     * the column name for the ApidPtName field
     */
    const COL_APIDPTNAME = 'ap_invoice_det.ApidPtName';

    /**
     * the column name for the ApidPtAdr1 field
     */
    const COL_APIDPTADR1 = 'ap_invoice_det.ApidPtAdr1';

    /**
     * the column name for the ApidPtAdr2 field
     */
    const COL_APIDPTADR2 = 'ap_invoice_det.ApidPtAdr2';

    /**
     * the column name for the ApidPtAdr3 field
     */
    const COL_APIDPTADR3 = 'ap_invoice_det.ApidPtAdr3';

    /**
     * the column name for the ApidPtCtry field
     */
    const COL_APIDPTCTRY = 'ap_invoice_det.ApidPtCtry';

    /**
     * the column name for the ApidPtCity field
     */
    const COL_APIDPTCITY = 'ap_invoice_det.ApidPtCity';

    /**
     * the column name for the ApidPtStat field
     */
    const COL_APIDPTSTAT = 'ap_invoice_det.ApidPtStat';

    /**
     * the column name for the ApidPtZipCode field
     */
    const COL_APIDPTZIPCODE = 'ap_invoice_det.ApidPtZipCode';

    /**
     * the column name for the ApidPoNbr field
     */
    const COL_APIDPONBR = 'ap_invoice_det.ApidPoNbr';

    /**
     * the column name for the ApidCtrlNbr field
     */
    const COL_APIDCTRLNBR = 'ap_invoice_det.ApidCtrlNbr';

    /**
     * the column name for the ApidInvNbr field
     */
    const COL_APIDINVNBR = 'ap_invoice_det.ApidInvNbr';

    /**
     * the column name for the ApidSeq field
     */
    const COL_APIDSEQ = 'ap_invoice_det.ApidSeq';

    /**
     * the column name for the ApidLine field
     */
    const COL_APIDLINE = 'ap_invoice_det.ApidLine';

    /**
     * the column name for the ApidAmt field
     */
    const COL_APIDAMT = 'ap_invoice_det.ApidAmt';

    /**
     * the column name for the ApidGlAcct field
     */
    const COL_APIDGLACCT = 'ap_invoice_det.ApidGlAcct';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'ap_invoice_det.InitItemNbr';

    /**
     * the column name for the ApidQtyRec field
     */
    const COL_APIDQTYREC = 'ap_invoice_det.ApidQtyRec';

    /**
     * the column name for the ApidDesc field
     */
    const COL_APIDDESC = 'ap_invoice_det.ApidDesc';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ap_invoice_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ap_invoice_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ap_invoice_det.dummy';

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
        self::TYPE_PHPNAME       => array('Apvevendid', 'Apidpaytokey', 'Apidptname', 'Apidptadr1', 'Apidptadr2', 'Apidptadr3', 'Apidptctry', 'Apidptcity', 'Apidptstat', 'Apidptzipcode', 'Apidponbr', 'Apidctrlnbr', 'Apidinvnbr', 'Apidseq', 'Apidline', 'Apidamt', 'Apidglacct', 'Inititemnbr', 'Apidqtyrec', 'Apiddesc', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('apvevendid', 'apidpaytokey', 'apidptname', 'apidptadr1', 'apidptadr2', 'apidptadr3', 'apidptctry', 'apidptcity', 'apidptstat', 'apidptzipcode', 'apidponbr', 'apidctrlnbr', 'apidinvnbr', 'apidseq', 'apidline', 'apidamt', 'apidglacct', 'inititemnbr', 'apidqtyrec', 'apiddesc', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ApInvoiceDetailTableMap::COL_APVEVENDID, ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, ApInvoiceDetailTableMap::COL_APIDPTNAME, ApInvoiceDetailTableMap::COL_APIDPTADR1, ApInvoiceDetailTableMap::COL_APIDPTADR2, ApInvoiceDetailTableMap::COL_APIDPTADR3, ApInvoiceDetailTableMap::COL_APIDPTCTRY, ApInvoiceDetailTableMap::COL_APIDPTCITY, ApInvoiceDetailTableMap::COL_APIDPTSTAT, ApInvoiceDetailTableMap::COL_APIDPTZIPCODE, ApInvoiceDetailTableMap::COL_APIDPONBR, ApInvoiceDetailTableMap::COL_APIDCTRLNBR, ApInvoiceDetailTableMap::COL_APIDINVNBR, ApInvoiceDetailTableMap::COL_APIDSEQ, ApInvoiceDetailTableMap::COL_APIDLINE, ApInvoiceDetailTableMap::COL_APIDAMT, ApInvoiceDetailTableMap::COL_APIDGLACCT, ApInvoiceDetailTableMap::COL_INITITEMNBR, ApInvoiceDetailTableMap::COL_APIDQTYREC, ApInvoiceDetailTableMap::COL_APIDDESC, ApInvoiceDetailTableMap::COL_DATEUPDTD, ApInvoiceDetailTableMap::COL_TIMEUPDTD, ApInvoiceDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ApveVendId', 'ApidPayToKey', 'ApidPtName', 'ApidPtAdr1', 'ApidPtAdr2', 'ApidPtAdr3', 'ApidPtCtry', 'ApidPtCity', 'ApidPtStat', 'ApidPtZipCode', 'ApidPoNbr', 'ApidCtrlNbr', 'ApidInvNbr', 'ApidSeq', 'ApidLine', 'ApidAmt', 'ApidGlAcct', 'InitItemNbr', 'ApidQtyRec', 'ApidDesc', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Apvevendid' => 0, 'Apidpaytokey' => 1, 'Apidptname' => 2, 'Apidptadr1' => 3, 'Apidptadr2' => 4, 'Apidptadr3' => 5, 'Apidptctry' => 6, 'Apidptcity' => 7, 'Apidptstat' => 8, 'Apidptzipcode' => 9, 'Apidponbr' => 10, 'Apidctrlnbr' => 11, 'Apidinvnbr' => 12, 'Apidseq' => 13, 'Apidline' => 14, 'Apidamt' => 15, 'Apidglacct' => 16, 'Inititemnbr' => 17, 'Apidqtyrec' => 18, 'Apiddesc' => 19, 'Dateupdtd' => 20, 'Timeupdtd' => 21, 'Dummy' => 22, ),
        self::TYPE_CAMELNAME     => array('apvevendid' => 0, 'apidpaytokey' => 1, 'apidptname' => 2, 'apidptadr1' => 3, 'apidptadr2' => 4, 'apidptadr3' => 5, 'apidptctry' => 6, 'apidptcity' => 7, 'apidptstat' => 8, 'apidptzipcode' => 9, 'apidponbr' => 10, 'apidctrlnbr' => 11, 'apidinvnbr' => 12, 'apidseq' => 13, 'apidline' => 14, 'apidamt' => 15, 'apidglacct' => 16, 'inititemnbr' => 17, 'apidqtyrec' => 18, 'apiddesc' => 19, 'dateupdtd' => 20, 'timeupdtd' => 21, 'dummy' => 22, ),
        self::TYPE_COLNAME       => array(ApInvoiceDetailTableMap::COL_APVEVENDID => 0, ApInvoiceDetailTableMap::COL_APIDPAYTOKEY => 1, ApInvoiceDetailTableMap::COL_APIDPTNAME => 2, ApInvoiceDetailTableMap::COL_APIDPTADR1 => 3, ApInvoiceDetailTableMap::COL_APIDPTADR2 => 4, ApInvoiceDetailTableMap::COL_APIDPTADR3 => 5, ApInvoiceDetailTableMap::COL_APIDPTCTRY => 6, ApInvoiceDetailTableMap::COL_APIDPTCITY => 7, ApInvoiceDetailTableMap::COL_APIDPTSTAT => 8, ApInvoiceDetailTableMap::COL_APIDPTZIPCODE => 9, ApInvoiceDetailTableMap::COL_APIDPONBR => 10, ApInvoiceDetailTableMap::COL_APIDCTRLNBR => 11, ApInvoiceDetailTableMap::COL_APIDINVNBR => 12, ApInvoiceDetailTableMap::COL_APIDSEQ => 13, ApInvoiceDetailTableMap::COL_APIDLINE => 14, ApInvoiceDetailTableMap::COL_APIDAMT => 15, ApInvoiceDetailTableMap::COL_APIDGLACCT => 16, ApInvoiceDetailTableMap::COL_INITITEMNBR => 17, ApInvoiceDetailTableMap::COL_APIDQTYREC => 18, ApInvoiceDetailTableMap::COL_APIDDESC => 19, ApInvoiceDetailTableMap::COL_DATEUPDTD => 20, ApInvoiceDetailTableMap::COL_TIMEUPDTD => 21, ApInvoiceDetailTableMap::COL_DUMMY => 22, ),
        self::TYPE_FIELDNAME     => array('ApveVendId' => 0, 'ApidPayToKey' => 1, 'ApidPtName' => 2, 'ApidPtAdr1' => 3, 'ApidPtAdr2' => 4, 'ApidPtAdr3' => 5, 'ApidPtCtry' => 6, 'ApidPtCity' => 7, 'ApidPtStat' => 8, 'ApidPtZipCode' => 9, 'ApidPoNbr' => 10, 'ApidCtrlNbr' => 11, 'ApidInvNbr' => 12, 'ApidSeq' => 13, 'ApidLine' => 14, 'ApidAmt' => 15, 'ApidGlAcct' => 16, 'InitItemNbr' => 17, 'ApidQtyRec' => 18, 'ApidDesc' => 19, 'DateUpdtd' => 20, 'TimeUpdtd' => 21, 'dummy' => 22, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $this->setName('ap_invoice_det');
        $this->setPhpName('ApInvoiceDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApInvoiceDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ApveVendId', 'Apvevendid', 'VARCHAR', true, 6, '');
        $this->addPrimaryKey('ApidPayToKey', 'Apidpaytokey', 'VARCHAR', true, 180, '');
        $this->addColumn('ApidPtName', 'Apidptname', 'VARCHAR', false, 30, null);
        $this->addColumn('ApidPtAdr1', 'Apidptadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ApidPtAdr2', 'Apidptadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ApidPtAdr3', 'Apidptadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ApidPtCtry', 'Apidptctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ApidPtCity', 'Apidptcity', 'VARCHAR', false, 16, null);
        $this->addColumn('ApidPtStat', 'Apidptstat', 'VARCHAR', false, 2, null);
        $this->addColumn('ApidPtZipCode', 'Apidptzipcode', 'VARCHAR', false, 10, null);
        $this->addPrimaryKey('ApidPoNbr', 'Apidponbr', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('ApidCtrlNbr', 'Apidctrlnbr', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('ApidInvNbr', 'Apidinvnbr', 'VARCHAR', true, 15, '');
        $this->addPrimaryKey('ApidSeq', 'Apidseq', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('ApidLine', 'Apidline', 'INTEGER', true, 4, 0);
        $this->addColumn('ApidAmt', 'Apidamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ApidGlAcct', 'Apidglacct', 'VARCHAR', false, 12, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('ApidQtyRec', 'Apidqtyrec', 'DECIMAL', false, 20, null);
        $this->addColumn('ApidDesc', 'Apiddesc', 'VARCHAR', false, 35, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ApInvoiceDetail $obj A \ApInvoiceDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getApvevendid() || is_scalar($obj->getApvevendid()) || is_callable([$obj->getApvevendid(), '__toString']) ? (string) $obj->getApvevendid() : $obj->getApvevendid()), (null === $obj->getApidpaytokey() || is_scalar($obj->getApidpaytokey()) || is_callable([$obj->getApidpaytokey(), '__toString']) ? (string) $obj->getApidpaytokey() : $obj->getApidpaytokey()), (null === $obj->getApidponbr() || is_scalar($obj->getApidponbr()) || is_callable([$obj->getApidponbr(), '__toString']) ? (string) $obj->getApidponbr() : $obj->getApidponbr()), (null === $obj->getApidctrlnbr() || is_scalar($obj->getApidctrlnbr()) || is_callable([$obj->getApidctrlnbr(), '__toString']) ? (string) $obj->getApidctrlnbr() : $obj->getApidctrlnbr()), (null === $obj->getApidinvnbr() || is_scalar($obj->getApidinvnbr()) || is_callable([$obj->getApidinvnbr(), '__toString']) ? (string) $obj->getApidinvnbr() : $obj->getApidinvnbr()), (null === $obj->getApidseq() || is_scalar($obj->getApidseq()) || is_callable([$obj->getApidseq(), '__toString']) ? (string) $obj->getApidseq() : $obj->getApidseq()), (null === $obj->getApidline() || is_scalar($obj->getApidline()) || is_callable([$obj->getApidline(), '__toString']) ? (string) $obj->getApidline() : $obj->getApidline())]);
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
     * @param mixed $value A \ApInvoiceDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ApInvoiceDetail) {
                $key = serialize([(null === $value->getApvevendid() || is_scalar($value->getApvevendid()) || is_callable([$value->getApvevendid(), '__toString']) ? (string) $value->getApvevendid() : $value->getApvevendid()), (null === $value->getApidpaytokey() || is_scalar($value->getApidpaytokey()) || is_callable([$value->getApidpaytokey(), '__toString']) ? (string) $value->getApidpaytokey() : $value->getApidpaytokey()), (null === $value->getApidponbr() || is_scalar($value->getApidponbr()) || is_callable([$value->getApidponbr(), '__toString']) ? (string) $value->getApidponbr() : $value->getApidponbr()), (null === $value->getApidctrlnbr() || is_scalar($value->getApidctrlnbr()) || is_callable([$value->getApidctrlnbr(), '__toString']) ? (string) $value->getApidctrlnbr() : $value->getApidctrlnbr()), (null === $value->getApidinvnbr() || is_scalar($value->getApidinvnbr()) || is_callable([$value->getApidinvnbr(), '__toString']) ? (string) $value->getApidinvnbr() : $value->getApidinvnbr()), (null === $value->getApidseq() || is_scalar($value->getApidseq()) || is_callable([$value->getApidseq(), '__toString']) ? (string) $value->getApidseq() : $value->getApidseq()), (null === $value->getApidline() || is_scalar($value->getApidline()) || is_callable([$value->getApidline(), '__toString']) ? (string) $value->getApidline() : $value->getApidline())]);

            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ApInvoiceDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Apidpaytokey', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 10 + $offset
                : self::translateFieldName('Apidponbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 11 + $offset
                : self::translateFieldName('Apidctrlnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 12 + $offset
                : self::translateFieldName('Apidinvnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 13 + $offset
                : self::translateFieldName('Apidseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 14 + $offset
                : self::translateFieldName('Apidline', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ApInvoiceDetailTableMap::CLASS_DEFAULT : ApInvoiceDetailTableMap::OM_CLASS;
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
     * @return array           (ApInvoiceDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ApInvoiceDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApInvoiceDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApInvoiceDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApInvoiceDetailTableMap::OM_CLASS;
            /** @var ApInvoiceDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApInvoiceDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = ApInvoiceDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApInvoiceDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApInvoiceDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApInvoiceDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTNAME);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTADR1);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTADR2);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTADR3);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTCTRY);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTCITY);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTSTAT);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPTZIPCODE);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDPONBR);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDCTRLNBR);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDINVNBR);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDSEQ);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDLINE);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDAMT);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDGLACCT);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDQTYREC);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_APIDDESC);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ApInvoiceDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.ApidPayToKey');
            $criteria->addSelectColumn($alias . '.ApidPtName');
            $criteria->addSelectColumn($alias . '.ApidPtAdr1');
            $criteria->addSelectColumn($alias . '.ApidPtAdr2');
            $criteria->addSelectColumn($alias . '.ApidPtAdr3');
            $criteria->addSelectColumn($alias . '.ApidPtCtry');
            $criteria->addSelectColumn($alias . '.ApidPtCity');
            $criteria->addSelectColumn($alias . '.ApidPtStat');
            $criteria->addSelectColumn($alias . '.ApidPtZipCode');
            $criteria->addSelectColumn($alias . '.ApidPoNbr');
            $criteria->addSelectColumn($alias . '.ApidCtrlNbr');
            $criteria->addSelectColumn($alias . '.ApidInvNbr');
            $criteria->addSelectColumn($alias . '.ApidSeq');
            $criteria->addSelectColumn($alias . '.ApidLine');
            $criteria->addSelectColumn($alias . '.ApidAmt');
            $criteria->addSelectColumn($alias . '.ApidGlAcct');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.ApidQtyRec');
            $criteria->addSelectColumn($alias . '.ApidDesc');
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
        return Propel::getServiceContainer()->getDatabaseMap(ApInvoiceDetailTableMap::DATABASE_NAME)->getTable(ApInvoiceDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ApInvoiceDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ApInvoiceDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ApInvoiceDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ApInvoiceDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ApInvoiceDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApInvoiceDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApInvoiceDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APVEVENDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDPONBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDINVNBR, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDSEQ, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDLINE, $value[6]));
                $criteria->addOr($criterion);
            }
        }

        $query = ApInvoiceDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApInvoiceDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApInvoiceDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_invoice_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ApInvoiceDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApInvoiceDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or ApInvoiceDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApInvoiceDetail object
        }


        // Set the correct dbName
        $query = ApInvoiceDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ApInvoiceDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ApInvoiceDetailTableMap::buildTableMap();
