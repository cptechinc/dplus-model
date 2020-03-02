<?php

namespace Map;

use \CstkItem;
use \CstkItemQuery;
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
 * This class defines the structure of the 'cust_stock_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CstkItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CstkItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'cust_stock_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CstkItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CstkItem';

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
    const COL_ARCUCUSTID = 'cust_stock_det.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'cust_stock_det.ArstShipId';

    /**
     * the column name for the CskhCell field
     */
    const COL_CSKHCELL = 'cust_stock_det.CskhCell';

    /**
     * the column name for the CskdLine field
     */
    const COL_CSKDLINE = 'cust_stock_det.CskdLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'cust_stock_det.InitItemNbr';

    /**
     * the column name for the CskdCustItem field
     */
    const COL_CSKDCUSTITEM = 'cust_stock_det.CskdCustItem';

    /**
     * the column name for the CskdBin field
     */
    const COL_CSKDBIN = 'cust_stock_det.CskdBin';

    /**
     * the column name for the CskdEnterDate field
     */
    const COL_CSKDENTERDATE = 'cust_stock_det.CskdEnterDate';

    /**
     * the column name for the CskdOnHand field
     */
    const COL_CSKDONHAND = 'cust_stock_det.CskdOnHand';

    /**
     * the column name for the CskdUnitPrice field
     */
    const COL_CSKDUNITPRICE = 'cust_stock_det.CskdUnitPrice';

    /**
     * the column name for the CskdEstUsag field
     */
    const COL_CSKDESTUSAG = 'cust_stock_det.CskdEstUsag';

    /**
     * the column name for the CskdOrdPnt field
     */
    const COL_CSKDORDPNT = 'cust_stock_det.CskdOrdPnt';

    /**
     * the column name for the CskdOrdQty field
     */
    const COL_CSKDORDQTY = 'cust_stock_det.CskdOrdQty';

    /**
     * the column name for the CskdMaxQty field
     */
    const COL_CSKDMAXQTY = 'cust_stock_det.CskdMaxQty';

    /**
     * the column name for the CskdCountDate field
     */
    const COL_CSKDCOUNTDATE = 'cust_stock_det.CskdCountDate';

    /**
     * the column name for the CskdUsagLast12 field
     */
    const COL_CSKDUSAGLAST12 = 'cust_stock_det.CskdUsagLast12';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'cust_stock_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'cust_stock_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'cust_stock_det.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arstshipid', 'Cskhcell', 'Cskdline', 'Inititemnbr', 'Cskdcustitem', 'Cskdbin', 'Cskdenterdate', 'Cskdonhand', 'Cskdunitprice', 'Cskdestusag', 'Cskdordpnt', 'Cskdordqty', 'Cskdmaxqty', 'Cskdcountdate', 'Cskdusaglast12', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arstshipid', 'cskhcell', 'cskdline', 'inititemnbr', 'cskdcustitem', 'cskdbin', 'cskdenterdate', 'cskdonhand', 'cskdunitprice', 'cskdestusag', 'cskdordpnt', 'cskdordqty', 'cskdmaxqty', 'cskdcountdate', 'cskdusaglast12', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CstkItemTableMap::COL_ARCUCUSTID, CstkItemTableMap::COL_ARSTSHIPID, CstkItemTableMap::COL_CSKHCELL, CstkItemTableMap::COL_CSKDLINE, CstkItemTableMap::COL_INITITEMNBR, CstkItemTableMap::COL_CSKDCUSTITEM, CstkItemTableMap::COL_CSKDBIN, CstkItemTableMap::COL_CSKDENTERDATE, CstkItemTableMap::COL_CSKDONHAND, CstkItemTableMap::COL_CSKDUNITPRICE, CstkItemTableMap::COL_CSKDESTUSAG, CstkItemTableMap::COL_CSKDORDPNT, CstkItemTableMap::COL_CSKDORDQTY, CstkItemTableMap::COL_CSKDMAXQTY, CstkItemTableMap::COL_CSKDCOUNTDATE, CstkItemTableMap::COL_CSKDUSAGLAST12, CstkItemTableMap::COL_DATEUPDTD, CstkItemTableMap::COL_TIMEUPDTD, CstkItemTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArstShipId', 'CskhCell', 'CskdLine', 'InitItemNbr', 'CskdCustItem', 'CskdBin', 'CskdEnterDate', 'CskdOnHand', 'CskdUnitPrice', 'CskdEstUsag', 'CskdOrdPnt', 'CskdOrdQty', 'CskdMaxQty', 'CskdCountDate', 'CskdUsagLast12', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arstshipid' => 1, 'Cskhcell' => 2, 'Cskdline' => 3, 'Inititemnbr' => 4, 'Cskdcustitem' => 5, 'Cskdbin' => 6, 'Cskdenterdate' => 7, 'Cskdonhand' => 8, 'Cskdunitprice' => 9, 'Cskdestusag' => 10, 'Cskdordpnt' => 11, 'Cskdordqty' => 12, 'Cskdmaxqty' => 13, 'Cskdcountdate' => 14, 'Cskdusaglast12' => 15, 'Dateupdtd' => 16, 'Timeupdtd' => 17, 'Dummy' => 18, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arstshipid' => 1, 'cskhcell' => 2, 'cskdline' => 3, 'inititemnbr' => 4, 'cskdcustitem' => 5, 'cskdbin' => 6, 'cskdenterdate' => 7, 'cskdonhand' => 8, 'cskdunitprice' => 9, 'cskdestusag' => 10, 'cskdordpnt' => 11, 'cskdordqty' => 12, 'cskdmaxqty' => 13, 'cskdcountdate' => 14, 'cskdusaglast12' => 15, 'dateupdtd' => 16, 'timeupdtd' => 17, 'dummy' => 18, ),
        self::TYPE_COLNAME       => array(CstkItemTableMap::COL_ARCUCUSTID => 0, CstkItemTableMap::COL_ARSTSHIPID => 1, CstkItemTableMap::COL_CSKHCELL => 2, CstkItemTableMap::COL_CSKDLINE => 3, CstkItemTableMap::COL_INITITEMNBR => 4, CstkItemTableMap::COL_CSKDCUSTITEM => 5, CstkItemTableMap::COL_CSKDBIN => 6, CstkItemTableMap::COL_CSKDENTERDATE => 7, CstkItemTableMap::COL_CSKDONHAND => 8, CstkItemTableMap::COL_CSKDUNITPRICE => 9, CstkItemTableMap::COL_CSKDESTUSAG => 10, CstkItemTableMap::COL_CSKDORDPNT => 11, CstkItemTableMap::COL_CSKDORDQTY => 12, CstkItemTableMap::COL_CSKDMAXQTY => 13, CstkItemTableMap::COL_CSKDCOUNTDATE => 14, CstkItemTableMap::COL_CSKDUSAGLAST12 => 15, CstkItemTableMap::COL_DATEUPDTD => 16, CstkItemTableMap::COL_TIMEUPDTD => 17, CstkItemTableMap::COL_DUMMY => 18, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArstShipId' => 1, 'CskhCell' => 2, 'CskdLine' => 3, 'InitItemNbr' => 4, 'CskdCustItem' => 5, 'CskdBin' => 6, 'CskdEnterDate' => 7, 'CskdOnHand' => 8, 'CskdUnitPrice' => 9, 'CskdEstUsag' => 10, 'CskdOrdPnt' => 11, 'CskdOrdQty' => 12, 'CskdMaxQty' => 13, 'CskdCountDate' => 14, 'CskdUsagLast12' => 15, 'DateUpdtd' => 16, 'TimeUpdtd' => 17, 'dummy' => 18, ),
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
        $this->setName('cust_stock_det');
        $this->setPhpName('CstkItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CstkItem');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'cust_stock_head', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR' , 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addForeignPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR' , 'cust_stock_head', 'ArstShipId', true, 6, '');
        $this->addForeignPrimaryKey('CskhCell', 'Cskhcell', 'VARCHAR' , 'cust_stock_head', 'CskhCell', true, 8, '');
        $this->addPrimaryKey('CskdLine', 'Cskdline', 'INTEGER', true, 8, 0);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', false, 30, null);
        $this->addColumn('CskdCustItem', 'Cskdcustitem', 'VARCHAR', false, 30, null);
        $this->addColumn('CskdBin', 'Cskdbin', 'VARCHAR', false, 8, null);
        $this->addColumn('CskdEnterDate', 'Cskdenterdate', 'VARCHAR', false, 8, null);
        $this->addColumn('CskdOnHand', 'Cskdonhand', 'DECIMAL', false, 20, null);
        $this->addColumn('CskdUnitPrice', 'Cskdunitprice', 'DECIMAL', false, 20, null);
        $this->addColumn('CskdEstUsag', 'Cskdestusag', 'DECIMAL', false, 20, null);
        $this->addColumn('CskdOrdPnt', 'Cskdordpnt', 'DECIMAL', false, 20, null);
        $this->addColumn('CskdOrdQty', 'Cskdordqty', 'DECIMAL', false, 20, null);
        $this->addColumn('CskdMaxQty', 'Cskdmaxqty', 'DECIMAL', false, 20, null);
        $this->addColumn('CskdCountDate', 'Cskdcountdate', 'VARCHAR', false, 8, null);
        $this->addColumn('CskdUsagLast12', 'Cskdusaglast12', 'DECIMAL', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
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
        $this->addRelation('CstkHead', '\\CstkHead', RelationMap::MANY_TO_ONE, array (
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
  2 =>
  array (
    0 => ':CskhCell',
    1 => ':CskhCell',
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
     * @param \CstkItem $obj A \CstkItem object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid()), (null === $obj->getCskhcell() || is_scalar($obj->getCskhcell()) || is_callable([$obj->getCskhcell(), '__toString']) ? (string) $obj->getCskhcell() : $obj->getCskhcell()), (null === $obj->getCskdline() || is_scalar($obj->getCskdline()) || is_callable([$obj->getCskdline(), '__toString']) ? (string) $obj->getCskdline() : $obj->getCskdline())]);
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
     * @param mixed $value A \CstkItem object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CstkItem) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid()), (null === $value->getCskhcell() || is_scalar($value->getCskhcell()) || is_callable([$value->getCskhcell(), '__toString']) ? (string) $value->getCskhcell() : $value->getCskhcell()), (null === $value->getCskdline() || is_scalar($value->getCskdline()) || is_callable([$value->getCskdline(), '__toString']) ? (string) $value->getCskdline() : $value->getCskdline())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CstkItem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Cskdline', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CstkItemTableMap::CLASS_DEFAULT : CstkItemTableMap::OM_CLASS;
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
     * @return array           (CstkItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CstkItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CstkItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CstkItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CstkItemTableMap::OM_CLASS;
            /** @var CstkItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CstkItemTableMap::addInstanceToPool($obj, $key);
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
            $key = CstkItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CstkItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CstkItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CstkItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CstkItemTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(CstkItemTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKHCELL);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDLINE);
            $criteria->addSelectColumn(CstkItemTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDCUSTITEM);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDBIN);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDENTERDATE);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDONHAND);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDUNITPRICE);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDESTUSAG);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDORDPNT);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDORDQTY);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDMAXQTY);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDCOUNTDATE);
            $criteria->addSelectColumn(CstkItemTableMap::COL_CSKDUSAGLAST12);
            $criteria->addSelectColumn(CstkItemTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CstkItemTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CstkItemTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.CskhCell');
            $criteria->addSelectColumn($alias . '.CskdLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.CskdCustItem');
            $criteria->addSelectColumn($alias . '.CskdBin');
            $criteria->addSelectColumn($alias . '.CskdEnterDate');
            $criteria->addSelectColumn($alias . '.CskdOnHand');
            $criteria->addSelectColumn($alias . '.CskdUnitPrice');
            $criteria->addSelectColumn($alias . '.CskdEstUsag');
            $criteria->addSelectColumn($alias . '.CskdOrdPnt');
            $criteria->addSelectColumn($alias . '.CskdOrdQty');
            $criteria->addSelectColumn($alias . '.CskdMaxQty');
            $criteria->addSelectColumn($alias . '.CskdCountDate');
            $criteria->addSelectColumn($alias . '.CskdUsagLast12');
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
        return Propel::getServiceContainer()->getDatabaseMap(CstkItemTableMap::DATABASE_NAME)->getTable(CstkItemTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CstkItemTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CstkItemTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CstkItemTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CstkItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CstkItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CstkItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CstkItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CstkItemTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CstkItemTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CstkItemTableMap::COL_ARSTSHIPID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CstkItemTableMap::COL_CSKHCELL, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CstkItemTableMap::COL_CSKDLINE, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = CstkItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CstkItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CstkItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the cust_stock_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CstkItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CstkItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or CstkItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CstkItem object
        }


        // Set the correct dbName
        $query = CstkItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CstkItemTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CstkItemTableMap::buildTableMap();
