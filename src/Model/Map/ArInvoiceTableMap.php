<?php

namespace Map;

use \ArInvoice;
use \ArInvoiceQuery;
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
 * This class defines the structure of the 'ar_inv' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArInvoiceTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArInvoiceTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_inv';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArInvoice';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArInvoice';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 24;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 24;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'ar_inv.ArcuCustId';

    /**
     * the column name for the ArinInvNbr field
     */
    const COL_ARININVNBR = 'ar_inv.ArinInvNbr';

    /**
     * the column name for the ArinInvSeq field
     */
    const COL_ARININVSEQ = 'ar_inv.ArinInvSeq';

    /**
     * the column name for the ArinType field
     */
    const COL_ARINTYPE = 'ar_inv.ArinType';

    /**
     * the column name for the ArinSeq field
     */
    const COL_ARINSEQ = 'ar_inv.ArinSeq';

    /**
     * the column name for the ArinHold field
     */
    const COL_ARINHOLD = 'ar_inv.ArinHold';

    /**
     * the column name for the ArinInvDate field
     */
    const COL_ARININVDATE = 'ar_inv.ArinInvDate';

    /**
     * the column name for the ArinDiscDate field
     */
    const COL_ARINDISCDATE = 'ar_inv.ArinDiscDate';

    /**
     * the column name for the ArinDueDate field
     */
    const COL_ARINDUEDATE = 'ar_inv.ArinDueDate';

    /**
     * the column name for the ArinTotAmt field
     */
    const COL_ARINTOTAMT = 'ar_inv.ArinTotAmt';

    /**
     * the column name for the ArinDiscAmt field
     */
    const COL_ARINDISCAMT = 'ar_inv.ArinDiscAmt';

    /**
     * the column name for the ArinChkNbr field
     */
    const COL_ARINCHKNBR = 'ar_inv.ArinChkNbr';

    /**
     * the column name for the ArinCustPo field
     */
    const COL_ARINCUSTPO = 'ar_inv.ArinCustPo';

    /**
     * the column name for the ArinTermCode field
     */
    const COL_ARINTERMCODE = 'ar_inv.ArinTermCode';

    /**
     * the column name for the ArinFrtAllow field
     */
    const COL_ARINFRTALLOW = 'ar_inv.ArinFrtAllow';

    /**
     * the column name for the ArinOrdrNbr field
     */
    const COL_ARINORDRNBR = 'ar_inv.ArinOrdrNbr';

    /**
     * the column name for the ArinComRate field
     */
    const COL_ARINCOMRATE = 'ar_inv.ArinComRate';

    /**
     * the column name for the ArinSalesAmt field
     */
    const COL_ARINSALESAMT = 'ar_inv.ArinSalesAmt';

    /**
     * the column name for the ArinOrigWhse field
     */
    const COL_ARINORIGWHSE = 'ar_inv.ArinOrigWhse';

    /**
     * the column name for the ArinWriteOffDate field
     */
    const COL_ARINWRITEOFFDATE = 'ar_inv.ArinWriteOffDate';

    /**
     * the column name for the ArinWriteOffAmt field
     */
    const COL_ARINWRITEOFFAMT = 'ar_inv.ArinWriteOffAmt';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_inv.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_inv.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_inv.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arininvnbr', 'Arininvseq', 'Arintype', 'Arinseq', 'Arinhold', 'Arininvdate', 'Arindiscdate', 'Arinduedate', 'Arintotamt', 'Arindiscamt', 'Arinchknbr', 'Arincustpo', 'Arintermcode', 'Arinfrtallow', 'Arinordrnbr', 'Arincomrate', 'Arinsalesamt', 'Arinorigwhse', 'Arinwriteoffdate', 'Arinwriteoffamt', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arininvnbr', 'arininvseq', 'arintype', 'arinseq', 'arinhold', 'arininvdate', 'arindiscdate', 'arinduedate', 'arintotamt', 'arindiscamt', 'arinchknbr', 'arincustpo', 'arintermcode', 'arinfrtallow', 'arinordrnbr', 'arincomrate', 'arinsalesamt', 'arinorigwhse', 'arinwriteoffdate', 'arinwriteoffamt', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArInvoiceTableMap::COL_ARCUCUSTID, ArInvoiceTableMap::COL_ARININVNBR, ArInvoiceTableMap::COL_ARININVSEQ, ArInvoiceTableMap::COL_ARINTYPE, ArInvoiceTableMap::COL_ARINSEQ, ArInvoiceTableMap::COL_ARINHOLD, ArInvoiceTableMap::COL_ARININVDATE, ArInvoiceTableMap::COL_ARINDISCDATE, ArInvoiceTableMap::COL_ARINDUEDATE, ArInvoiceTableMap::COL_ARINTOTAMT, ArInvoiceTableMap::COL_ARINDISCAMT, ArInvoiceTableMap::COL_ARINCHKNBR, ArInvoiceTableMap::COL_ARINCUSTPO, ArInvoiceTableMap::COL_ARINTERMCODE, ArInvoiceTableMap::COL_ARINFRTALLOW, ArInvoiceTableMap::COL_ARINORDRNBR, ArInvoiceTableMap::COL_ARINCOMRATE, ArInvoiceTableMap::COL_ARINSALESAMT, ArInvoiceTableMap::COL_ARINORIGWHSE, ArInvoiceTableMap::COL_ARINWRITEOFFDATE, ArInvoiceTableMap::COL_ARINWRITEOFFAMT, ArInvoiceTableMap::COL_DATEUPDTD, ArInvoiceTableMap::COL_TIMEUPDTD, ArInvoiceTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArinInvNbr', 'ArinInvSeq', 'ArinType', 'ArinSeq', 'ArinHold', 'ArinInvDate', 'ArinDiscDate', 'ArinDueDate', 'ArinTotAmt', 'ArinDiscAmt', 'ArinChkNbr', 'ArinCustPo', 'ArinTermCode', 'ArinFrtAllow', 'ArinOrdrNbr', 'ArinComRate', 'ArinSalesAmt', 'ArinOrigWhse', 'ArinWriteOffDate', 'ArinWriteOffAmt', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arininvnbr' => 1, 'Arininvseq' => 2, 'Arintype' => 3, 'Arinseq' => 4, 'Arinhold' => 5, 'Arininvdate' => 6, 'Arindiscdate' => 7, 'Arinduedate' => 8, 'Arintotamt' => 9, 'Arindiscamt' => 10, 'Arinchknbr' => 11, 'Arincustpo' => 12, 'Arintermcode' => 13, 'Arinfrtallow' => 14, 'Arinordrnbr' => 15, 'Arincomrate' => 16, 'Arinsalesamt' => 17, 'Arinorigwhse' => 18, 'Arinwriteoffdate' => 19, 'Arinwriteoffamt' => 20, 'Dateupdtd' => 21, 'Timeupdtd' => 22, 'Dummy' => 23, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arininvnbr' => 1, 'arininvseq' => 2, 'arintype' => 3, 'arinseq' => 4, 'arinhold' => 5, 'arininvdate' => 6, 'arindiscdate' => 7, 'arinduedate' => 8, 'arintotamt' => 9, 'arindiscamt' => 10, 'arinchknbr' => 11, 'arincustpo' => 12, 'arintermcode' => 13, 'arinfrtallow' => 14, 'arinordrnbr' => 15, 'arincomrate' => 16, 'arinsalesamt' => 17, 'arinorigwhse' => 18, 'arinwriteoffdate' => 19, 'arinwriteoffamt' => 20, 'dateupdtd' => 21, 'timeupdtd' => 22, 'dummy' => 23, ),
        self::TYPE_COLNAME       => array(ArInvoiceTableMap::COL_ARCUCUSTID => 0, ArInvoiceTableMap::COL_ARININVNBR => 1, ArInvoiceTableMap::COL_ARININVSEQ => 2, ArInvoiceTableMap::COL_ARINTYPE => 3, ArInvoiceTableMap::COL_ARINSEQ => 4, ArInvoiceTableMap::COL_ARINHOLD => 5, ArInvoiceTableMap::COL_ARININVDATE => 6, ArInvoiceTableMap::COL_ARINDISCDATE => 7, ArInvoiceTableMap::COL_ARINDUEDATE => 8, ArInvoiceTableMap::COL_ARINTOTAMT => 9, ArInvoiceTableMap::COL_ARINDISCAMT => 10, ArInvoiceTableMap::COL_ARINCHKNBR => 11, ArInvoiceTableMap::COL_ARINCUSTPO => 12, ArInvoiceTableMap::COL_ARINTERMCODE => 13, ArInvoiceTableMap::COL_ARINFRTALLOW => 14, ArInvoiceTableMap::COL_ARINORDRNBR => 15, ArInvoiceTableMap::COL_ARINCOMRATE => 16, ArInvoiceTableMap::COL_ARINSALESAMT => 17, ArInvoiceTableMap::COL_ARINORIGWHSE => 18, ArInvoiceTableMap::COL_ARINWRITEOFFDATE => 19, ArInvoiceTableMap::COL_ARINWRITEOFFAMT => 20, ArInvoiceTableMap::COL_DATEUPDTD => 21, ArInvoiceTableMap::COL_TIMEUPDTD => 22, ArInvoiceTableMap::COL_DUMMY => 23, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArinInvNbr' => 1, 'ArinInvSeq' => 2, 'ArinType' => 3, 'ArinSeq' => 4, 'ArinHold' => 5, 'ArinInvDate' => 6, 'ArinDiscDate' => 7, 'ArinDueDate' => 8, 'ArinTotAmt' => 9, 'ArinDiscAmt' => 10, 'ArinChkNbr' => 11, 'ArinCustPo' => 12, 'ArinTermCode' => 13, 'ArinFrtAllow' => 14, 'ArinOrdrNbr' => 15, 'ArinComRate' => 16, 'ArinSalesAmt' => 17, 'ArinOrigWhse' => 18, 'ArinWriteOffDate' => 19, 'ArinWriteOffAmt' => 20, 'DateUpdtd' => 21, 'TimeUpdtd' => 22, 'dummy' => 23, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $this->setName('ar_inv');
        $this->setPhpName('ArInvoice');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArInvoice');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR', true, 6, '');
        $this->addPrimaryKey('ArinInvNbr', 'Arininvnbr', 'VARCHAR', true, 10, '');
        $this->addPrimaryKey('ArinInvSeq', 'Arininvseq', 'INTEGER', true, 2, 0);
        $this->addPrimaryKey('ArinType', 'Arintype', 'VARCHAR', true, 1, '');
        $this->addPrimaryKey('ArinSeq', 'Arinseq', 'INTEGER', true, 5, 0);
        $this->addColumn('ArinHold', 'Arinhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArinInvDate', 'Arininvdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArinDiscDate', 'Arindiscdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArinDueDate', 'Arinduedate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArinTotAmt', 'Arintotamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArinDiscAmt', 'Arindiscamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArinChkNbr', 'Arinchknbr', 'VARCHAR', false, 8, null);
        $this->addColumn('ArinCustPo', 'Arincustpo', 'VARCHAR', false, 20, null);
        $this->addColumn('ArinTermCode', 'Arintermcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArinFrtAllow', 'Arinfrtallow', 'DECIMAL', false, 20, null);
        $this->addColumn('ArinOrdrNbr', 'Arinordrnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('ArinComRate', 'Arincomrate', 'DECIMAL', false, 20, null);
        $this->addColumn('ArinSalesAmt', 'Arinsalesamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArinOrigWhse', 'Arinorigwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ArinWriteOffDate', 'Arinwriteoffdate', 'VARCHAR', false, 8, null);
        $this->addColumn('ArinWriteOffAmt', 'Arinwriteoffamt', 'DECIMAL', false, 20, null);
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
     * @param \ArInvoice $obj A \ArInvoice object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArininvnbr() || is_scalar($obj->getArininvnbr()) || is_callable([$obj->getArininvnbr(), '__toString']) ? (string) $obj->getArininvnbr() : $obj->getArininvnbr()), (null === $obj->getArininvseq() || is_scalar($obj->getArininvseq()) || is_callable([$obj->getArininvseq(), '__toString']) ? (string) $obj->getArininvseq() : $obj->getArininvseq()), (null === $obj->getArintype() || is_scalar($obj->getArintype()) || is_callable([$obj->getArintype(), '__toString']) ? (string) $obj->getArintype() : $obj->getArintype()), (null === $obj->getArinseq() || is_scalar($obj->getArinseq()) || is_callable([$obj->getArinseq(), '__toString']) ? (string) $obj->getArinseq() : $obj->getArinseq())]);
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
     * @param mixed $value A \ArInvoice object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ArInvoice) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArininvnbr() || is_scalar($value->getArininvnbr()) || is_callable([$value->getArininvnbr(), '__toString']) ? (string) $value->getArininvnbr() : $value->getArininvnbr()), (null === $value->getArininvseq() || is_scalar($value->getArininvseq()) || is_callable([$value->getArininvseq(), '__toString']) ? (string) $value->getArininvseq() : $value->getArininvseq()), (null === $value->getArintype() || is_scalar($value->getArintype()) || is_callable([$value->getArintype(), '__toString']) ? (string) $value->getArintype() : $value->getArintype()), (null === $value->getArinseq() || is_scalar($value->getArinseq()) || is_callable([$value->getArinseq(), '__toString']) ? (string) $value->getArinseq() : $value->getArinseq())]);

            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ArInvoice object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Arininvseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Arintype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Arinseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArInvoiceTableMap::CLASS_DEFAULT : ArInvoiceTableMap::OM_CLASS;
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
     * @return array           (ArInvoice object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArInvoiceTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArInvoiceTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArInvoiceTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArInvoiceTableMap::OM_CLASS;
            /** @var ArInvoice $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArInvoiceTableMap::addInstanceToPool($obj, $key);
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
            $key = ArInvoiceTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArInvoiceTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArInvoice $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArInvoiceTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARININVNBR);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARININVSEQ);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINTYPE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINSEQ);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINHOLD);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARININVDATE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINDISCDATE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINDUEDATE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINTOTAMT);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINDISCAMT);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINCHKNBR);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINCUSTPO);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINTERMCODE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINFRTALLOW);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINORDRNBR);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINCOMRATE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINSALESAMT);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINORIGWHSE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINWRITEOFFDATE);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_ARINWRITEOFFAMT);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArInvoiceTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArinInvNbr');
            $criteria->addSelectColumn($alias . '.ArinInvSeq');
            $criteria->addSelectColumn($alias . '.ArinType');
            $criteria->addSelectColumn($alias . '.ArinSeq');
            $criteria->addSelectColumn($alias . '.ArinHold');
            $criteria->addSelectColumn($alias . '.ArinInvDate');
            $criteria->addSelectColumn($alias . '.ArinDiscDate');
            $criteria->addSelectColumn($alias . '.ArinDueDate');
            $criteria->addSelectColumn($alias . '.ArinTotAmt');
            $criteria->addSelectColumn($alias . '.ArinDiscAmt');
            $criteria->addSelectColumn($alias . '.ArinChkNbr');
            $criteria->addSelectColumn($alias . '.ArinCustPo');
            $criteria->addSelectColumn($alias . '.ArinTermCode');
            $criteria->addSelectColumn($alias . '.ArinFrtAllow');
            $criteria->addSelectColumn($alias . '.ArinOrdrNbr');
            $criteria->addSelectColumn($alias . '.ArinComRate');
            $criteria->addSelectColumn($alias . '.ArinSalesAmt');
            $criteria->addSelectColumn($alias . '.ArinOrigWhse');
            $criteria->addSelectColumn($alias . '.ArinWriteOffDate');
            $criteria->addSelectColumn($alias . '.ArinWriteOffAmt');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArInvoiceTableMap::DATABASE_NAME)->getTable(ArInvoiceTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArInvoiceTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArInvoiceTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArInvoiceTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArInvoice or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArInvoice object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArInvoice) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArInvoiceTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ArInvoiceTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ArInvoiceTableMap::COL_ARININVNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ArInvoiceTableMap::COL_ARININVSEQ, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ArInvoiceTableMap::COL_ARINTYPE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ArInvoiceTableMap::COL_ARINSEQ, $value[4]));
                $criteria->addOr($criterion);
            }
        }

        $query = ArInvoiceQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArInvoiceTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArInvoiceTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_inv table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArInvoiceQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArInvoice or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArInvoice object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArInvoice object
        }


        // Set the correct dbName
        $query = ArInvoiceQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArInvoiceTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArInvoiceTableMap::buildTableMap();
