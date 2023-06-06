<?php

namespace Map;

use \SoStandingOrderDetail;
use \SoStandingOrderDetailQuery;
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
 * This class defines the structure of the 'so_stand_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SoStandingOrderDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoStandingOrderDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_stand_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoStandingOrderDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoStandingOrderDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 19;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 19;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'so_stand_det.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'so_stand_det.ArstShipId';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_stand_det.InitItemNbr';

    /**
     * the column name for the OetdSeq field
     */
    const COL_OETDSEQ = 'so_stand_det.OetdSeq';

    /**
     * the column name for the OetdDesc field
     */
    const COL_OETDDESC = 'so_stand_det.OetdDesc';

    /**
     * the column name for the OetdDesc2 field
     */
    const COL_OETDDESC2 = 'so_stand_det.OetdDesc2';

    /**
     * the column name for the OetdStat field
     */
    const COL_OETDSTAT = 'so_stand_det.OetdStat';

    /**
     * the column name for the OetdHoldCnt field
     */
    const COL_OETDHOLDCNT = 'so_stand_det.OetdHoldCnt';

    /**
     * the column name for the OetdPric field
     */
    const COL_OETDPRIC = 'so_stand_det.OetdPric';

    /**
     * the column name for the OetdQty field
     */
    const COL_OETDQTY = 'so_stand_det.OetdQty';

    /**
     * the column name for the IntbUomSale field
     */
    const COL_INTBUOMSALE = 'so_stand_det.IntbUomSale';

    /**
     * the column name for the OetdCycl field
     */
    const COL_OETDCYCL = 'so_stand_det.OetdCycl';

    /**
     * the column name for the OetdStrtDate field
     */
    const COL_OETDSTRTDATE = 'so_stand_det.OetdStrtDate';

    /**
     * the column name for the OetdEndDate field
     */
    const COL_OETDENDDATE = 'so_stand_det.OetdEndDate';

    /**
     * the column name for the OetdLastDate field
     */
    const COL_OETDLASTDATE = 'so_stand_det.OetdLastDate';

    /**
     * the column name for the OetdLeadCnt field
     */
    const COL_OETDLEADCNT = 'so_stand_det.OetdLeadCnt';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_stand_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_stand_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_stand_det.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arstshipid', 'Inititemnbr', 'Oetdseq', 'Oetddesc', 'Oetddesc2', 'Oetdstat', 'Oetdholdcnt', 'Oetdpric', 'Oetdqty', 'Intbuomsale', 'Oetdcycl', 'Oetdstrtdate', 'Oetdenddate', 'Oetdlastdate', 'Oetdleadcnt', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arstshipid', 'inititemnbr', 'oetdseq', 'oetddesc', 'oetddesc2', 'oetdstat', 'oetdholdcnt', 'oetdpric', 'oetdqty', 'intbuomsale', 'oetdcycl', 'oetdstrtdate', 'oetdenddate', 'oetdlastdate', 'oetdleadcnt', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, SoStandingOrderDetailTableMap::COL_ARSTSHIPID, SoStandingOrderDetailTableMap::COL_INITITEMNBR, SoStandingOrderDetailTableMap::COL_OETDSEQ, SoStandingOrderDetailTableMap::COL_OETDDESC, SoStandingOrderDetailTableMap::COL_OETDDESC2, SoStandingOrderDetailTableMap::COL_OETDSTAT, SoStandingOrderDetailTableMap::COL_OETDHOLDCNT, SoStandingOrderDetailTableMap::COL_OETDPRIC, SoStandingOrderDetailTableMap::COL_OETDQTY, SoStandingOrderDetailTableMap::COL_INTBUOMSALE, SoStandingOrderDetailTableMap::COL_OETDCYCL, SoStandingOrderDetailTableMap::COL_OETDSTRTDATE, SoStandingOrderDetailTableMap::COL_OETDENDDATE, SoStandingOrderDetailTableMap::COL_OETDLASTDATE, SoStandingOrderDetailTableMap::COL_OETDLEADCNT, SoStandingOrderDetailTableMap::COL_DATEUPDTD, SoStandingOrderDetailTableMap::COL_TIMEUPDTD, SoStandingOrderDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArstShipId', 'InitItemNbr', 'OetdSeq', 'OetdDesc', 'OetdDesc2', 'OetdStat', 'OetdHoldCnt', 'OetdPric', 'OetdQty', 'IntbUomSale', 'OetdCycl', 'OetdStrtDate', 'OetdEndDate', 'OetdLastDate', 'OetdLeadCnt', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arstshipid' => 1, 'Inititemnbr' => 2, 'Oetdseq' => 3, 'Oetddesc' => 4, 'Oetddesc2' => 5, 'Oetdstat' => 6, 'Oetdholdcnt' => 7, 'Oetdpric' => 8, 'Oetdqty' => 9, 'Intbuomsale' => 10, 'Oetdcycl' => 11, 'Oetdstrtdate' => 12, 'Oetdenddate' => 13, 'Oetdlastdate' => 14, 'Oetdleadcnt' => 15, 'Dateupdtd' => 16, 'Timeupdtd' => 17, 'Dummy' => 18, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arstshipid' => 1, 'inititemnbr' => 2, 'oetdseq' => 3, 'oetddesc' => 4, 'oetddesc2' => 5, 'oetdstat' => 6, 'oetdholdcnt' => 7, 'oetdpric' => 8, 'oetdqty' => 9, 'intbuomsale' => 10, 'oetdcycl' => 11, 'oetdstrtdate' => 12, 'oetdenddate' => 13, 'oetdlastdate' => 14, 'oetdleadcnt' => 15, 'dateupdtd' => 16, 'timeupdtd' => 17, 'dummy' => 18, ),
        self::TYPE_COLNAME       => array(SoStandingOrderDetailTableMap::COL_ARCUCUSTID => 0, SoStandingOrderDetailTableMap::COL_ARSTSHIPID => 1, SoStandingOrderDetailTableMap::COL_INITITEMNBR => 2, SoStandingOrderDetailTableMap::COL_OETDSEQ => 3, SoStandingOrderDetailTableMap::COL_OETDDESC => 4, SoStandingOrderDetailTableMap::COL_OETDDESC2 => 5, SoStandingOrderDetailTableMap::COL_OETDSTAT => 6, SoStandingOrderDetailTableMap::COL_OETDHOLDCNT => 7, SoStandingOrderDetailTableMap::COL_OETDPRIC => 8, SoStandingOrderDetailTableMap::COL_OETDQTY => 9, SoStandingOrderDetailTableMap::COL_INTBUOMSALE => 10, SoStandingOrderDetailTableMap::COL_OETDCYCL => 11, SoStandingOrderDetailTableMap::COL_OETDSTRTDATE => 12, SoStandingOrderDetailTableMap::COL_OETDENDDATE => 13, SoStandingOrderDetailTableMap::COL_OETDLASTDATE => 14, SoStandingOrderDetailTableMap::COL_OETDLEADCNT => 15, SoStandingOrderDetailTableMap::COL_DATEUPDTD => 16, SoStandingOrderDetailTableMap::COL_TIMEUPDTD => 17, SoStandingOrderDetailTableMap::COL_DUMMY => 18, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArstShipId' => 1, 'InitItemNbr' => 2, 'OetdSeq' => 3, 'OetdDesc' => 4, 'OetdDesc2' => 5, 'OetdStat' => 6, 'OetdHoldCnt' => 7, 'OetdPric' => 8, 'OetdQty' => 9, 'IntbUomSale' => 10, 'OetdCycl' => 11, 'OetdStrtDate' => 12, 'OetdEndDate' => 13, 'OetdLastDate' => 14, 'OetdLeadCnt' => 15, 'DateUpdtd' => 16, 'TimeUpdtd' => 17, 'dummy' => 18, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $this->setName('so_stand_det');
        $this->setPhpName('SoStandingOrderDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoStandingOrderDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR' , 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('OetdSeq', 'Oetdseq', 'INTEGER', true, 4, 1);
        $this->addColumn('OetdDesc', 'Oetddesc', 'VARCHAR', true, 35, '');
        $this->addColumn('OetdDesc2', 'Oetddesc2', 'VARCHAR', true, 35, '');
        $this->addColumn('OetdStat', 'Oetdstat', 'VARCHAR', true, 1, 'A');
        $this->addColumn('OetdHoldCnt', 'Oetdholdcnt', 'INTEGER', true, 2, 0);
        $this->addColumn('OetdPric', 'Oetdpric', 'DECIMAL', true, 20, 0);
        $this->addColumn('OetdQty', 'Oetdqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbUomSale', 'Intbuomsale', 'VARCHAR', true, 4, '');
        $this->addColumn('OetdCycl', 'Oetdcycl', 'VARCHAR', true, 1, 'M');
        $this->addColumn('OetdStrtDate', 'Oetdstrtdate', 'VARCHAR', true, 8, '');
        $this->addColumn('OetdEndDate', 'Oetdenddate', 'VARCHAR', true, 8, '');
        $this->addColumn('OetdLastDate', 'Oetdlastdate', 'VARCHAR', true, 8, '');
        $this->addColumn('OetdLeadCnt', 'Oetdleadcnt', 'INTEGER', true, 2, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
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
        $this->addRelation('CustomerShipto', '\\CustomerShipto', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
  1 =>
  array (
    0 => ':ArstShipId',
    1 => ':ArstShipId',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
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
     * @param \SoStandingOrderDetail $obj A \SoStandingOrderDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getOetdseq() || is_scalar($obj->getOetdseq()) || is_callable([$obj->getOetdseq(), '__toString']) ? (string) $obj->getOetdseq() : $obj->getOetdseq())]);
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
     * @param mixed $value A \SoStandingOrderDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SoStandingOrderDetail) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getOetdseq() || is_scalar($value->getOetdseq()) || is_callable([$value->getOetdseq(), '__toString']) ? (string) $value->getOetdseq() : $value->getOetdseq())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SoStandingOrderDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Oetdseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SoStandingOrderDetailTableMap::CLASS_DEFAULT : SoStandingOrderDetailTableMap::OM_CLASS;
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
     * @return array           (SoStandingOrderDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoStandingOrderDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoStandingOrderDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoStandingOrderDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoStandingOrderDetailTableMap::OM_CLASS;
            /** @var SoStandingOrderDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoStandingOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = SoStandingOrderDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoStandingOrderDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoStandingOrderDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoStandingOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDSEQ);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDDESC);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDDESC2);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDSTAT);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDHOLDCNT);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDPRIC);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDQTY);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_INTBUOMSALE);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDCYCL);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDSTRTDATE);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDENDDATE);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDLASTDATE);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_OETDLEADCNT);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoStandingOrderDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OetdSeq');
            $criteria->addSelectColumn($alias . '.OetdDesc');
            $criteria->addSelectColumn($alias . '.OetdDesc2');
            $criteria->addSelectColumn($alias . '.OetdStat');
            $criteria->addSelectColumn($alias . '.OetdHoldCnt');
            $criteria->addSelectColumn($alias . '.OetdPric');
            $criteria->addSelectColumn($alias . '.OetdQty');
            $criteria->addSelectColumn($alias . '.IntbUomSale');
            $criteria->addSelectColumn($alias . '.OetdCycl');
            $criteria->addSelectColumn($alias . '.OetdStrtDate');
            $criteria->addSelectColumn($alias . '.OetdEndDate');
            $criteria->addSelectColumn($alias . '.OetdLastDate');
            $criteria->addSelectColumn($alias . '.OetdLeadCnt');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoStandingOrderDetailTableMap::DATABASE_NAME)->getTable(SoStandingOrderDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoStandingOrderDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoStandingOrderDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoStandingOrderDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoStandingOrderDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoStandingOrderDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoStandingOrderDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoStandingOrderDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoStandingOrderDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SoStandingOrderDetailTableMap::COL_ARSTSHIPID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SoStandingOrderDetailTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SoStandingOrderDetailTableMap::COL_OETDSEQ, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = SoStandingOrderDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoStandingOrderDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoStandingOrderDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_stand_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoStandingOrderDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoStandingOrderDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoStandingOrderDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoStandingOrderDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoStandingOrderDetail object
        }


        // Set the correct dbName
        $query = SoStandingOrderDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoStandingOrderDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoStandingOrderDetailTableMap::buildTableMap();
