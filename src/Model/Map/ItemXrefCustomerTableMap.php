<?php

namespace Map;

use \ItemXrefCustomer;
use \ItemXrefCustomerQuery;
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
 * This class defines the structure of the 'cust_item_xref' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemXrefCustomerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemXrefCustomerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'cust_item_xref';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemXrefCustomer';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemXrefCustomer';

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
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'cust_item_xref.ArcuCustId';

    /**
     * the column name for the OexrCustItemNbr field
     */
    const COL_OEXRCUSTITEMNBR = 'cust_item_xref.OexrCustItemNbr';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'cust_item_xref.InitItemNbr';

    /**
     * the column name for the OexrRetPrice field
     */
    const COL_OEXRRETPRICE = 'cust_item_xref.OexrRetPrice';

    /**
     * the column name for the OexrCustPrice field
     */
    const COL_OEXRCUSTPRICE = 'cust_item_xref.OexrCustPrice';

    /**
     * the column name for the OexrQtyPerCase field
     */
    const COL_OEXRQTYPERCASE = 'cust_item_xref.OexrQtyPerCase';

    /**
     * the column name for the OexrInnerPackQty field
     */
    const COL_OEXRINNERPACKQTY = 'cust_item_xref.OexrInnerPackQty';

    /**
     * the column name for the OexrOuterPackQty field
     */
    const COL_OEXROUTERPACKQTY = 'cust_item_xref.OexrOuterPackQty';

    /**
     * the column name for the OexrRounding field
     */
    const COL_OEXRROUNDING = 'cust_item_xref.OexrRounding';

    /**
     * the column name for the OexrShipTareQty field
     */
    const COL_OEXRSHIPTAREQTY = 'cust_item_xref.OexrShipTareQty';

    /**
     * the column name for the OexrCustItemDesc field
     */
    const COL_OEXRCUSTITEMDESC = 'cust_item_xref.OexrCustItemDesc';

    /**
     * the column name for the OexrConvert field
     */
    const COL_OEXRCONVERT = 'cust_item_xref.OexrConvert';

    /**
     * the column name for the OexrCustItemDesc2 field
     */
    const COL_OEXRCUSTITEMDESC2 = 'cust_item_xref.OexrCustItemDesc2';

    /**
     * the column name for the OexrRevision field
     */
    const COL_OEXRREVISION = 'cust_item_xref.OexrRevision';

    /**
     * the column name for the OexrPurchQty field
     */
    const COL_OEXRPURCHQTY = 'cust_item_xref.OexrPurchQty';

    /**
     * the column name for the OexrCustPricUom field
     */
    const COL_OEXRCUSTPRICUOM = 'cust_item_xref.OexrCustPricUom';

    /**
     * the column name for the OexrLabel1PrtFmt field
     */
    const COL_OEXRLABEL1PRTFMT = 'cust_item_xref.OexrLabel1PrtFmt';

    /**
     * the column name for the OexrLabel2PrtFmt field
     */
    const COL_OEXRLABEL2PRTFMT = 'cust_item_xref.OexrLabel2PrtFmt';

    /**
     * the column name for the OexrWght field
     */
    const COL_OEXRWGHT = 'cust_item_xref.OexrWght';

    /**
     * the column name for the OexrCustUom field
     */
    const COL_OEXRCUSTUOM = 'cust_item_xref.OexrCustUom';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'cust_item_xref.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'cust_item_xref.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'cust_item_xref.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Oexrcustitemnbr', 'Inititemnbr', 'Oexrretprice', 'Oexrcustprice', 'Oexrqtypercase', 'Oexrinnerpackqty', 'Oexrouterpackqty', 'Oexrrounding', 'Oexrshiptareqty', 'Oexrcustitemdesc', 'Oexrconvert', 'Oexrcustitemdesc2', 'Oexrrevision', 'Oexrpurchqty', 'Oexrcustpricuom', 'Oexrlabel1prtfmt', 'Oexrlabel2prtfmt', 'Oexrwght', 'Oexrcustuom', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'oexrcustitemnbr', 'inititemnbr', 'oexrretprice', 'oexrcustprice', 'oexrqtypercase', 'oexrinnerpackqty', 'oexrouterpackqty', 'oexrrounding', 'oexrshiptareqty', 'oexrcustitemdesc', 'oexrconvert', 'oexrcustitemdesc2', 'oexrrevision', 'oexrpurchqty', 'oexrcustpricuom', 'oexrlabel1prtfmt', 'oexrlabel2prtfmt', 'oexrwght', 'oexrcustuom', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemXrefCustomerTableMap::COL_ARCUCUSTID, ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, ItemXrefCustomerTableMap::COL_INITITEMNBR, ItemXrefCustomerTableMap::COL_OEXRRETPRICE, ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, ItemXrefCustomerTableMap::COL_OEXRROUNDING, ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC, ItemXrefCustomerTableMap::COL_OEXRCONVERT, ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2, ItemXrefCustomerTableMap::COL_OEXRREVISION, ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM, ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT, ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT, ItemXrefCustomerTableMap::COL_OEXRWGHT, ItemXrefCustomerTableMap::COL_OEXRCUSTUOM, ItemXrefCustomerTableMap::COL_DATEUPDTD, ItemXrefCustomerTableMap::COL_TIMEUPDTD, ItemXrefCustomerTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'OexrCustItemNbr', 'InitItemNbr', 'OexrRetPrice', 'OexrCustPrice', 'OexrQtyPerCase', 'OexrInnerPackQty', 'OexrOuterPackQty', 'OexrRounding', 'OexrShipTareQty', 'OexrCustItemDesc', 'OexrConvert', 'OexrCustItemDesc2', 'OexrRevision', 'OexrPurchQty', 'OexrCustPricUom', 'OexrLabel1PrtFmt', 'OexrLabel2PrtFmt', 'OexrWght', 'OexrCustUom', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Oexrcustitemnbr' => 1, 'Inititemnbr' => 2, 'Oexrretprice' => 3, 'Oexrcustprice' => 4, 'Oexrqtypercase' => 5, 'Oexrinnerpackqty' => 6, 'Oexrouterpackqty' => 7, 'Oexrrounding' => 8, 'Oexrshiptareqty' => 9, 'Oexrcustitemdesc' => 10, 'Oexrconvert' => 11, 'Oexrcustitemdesc2' => 12, 'Oexrrevision' => 13, 'Oexrpurchqty' => 14, 'Oexrcustpricuom' => 15, 'Oexrlabel1prtfmt' => 16, 'Oexrlabel2prtfmt' => 17, 'Oexrwght' => 18, 'Oexrcustuom' => 19, 'Dateupdtd' => 20, 'Timeupdtd' => 21, 'Dummy' => 22, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'oexrcustitemnbr' => 1, 'inititemnbr' => 2, 'oexrretprice' => 3, 'oexrcustprice' => 4, 'oexrqtypercase' => 5, 'oexrinnerpackqty' => 6, 'oexrouterpackqty' => 7, 'oexrrounding' => 8, 'oexrshiptareqty' => 9, 'oexrcustitemdesc' => 10, 'oexrconvert' => 11, 'oexrcustitemdesc2' => 12, 'oexrrevision' => 13, 'oexrpurchqty' => 14, 'oexrcustpricuom' => 15, 'oexrlabel1prtfmt' => 16, 'oexrlabel2prtfmt' => 17, 'oexrwght' => 18, 'oexrcustuom' => 19, 'dateupdtd' => 20, 'timeupdtd' => 21, 'dummy' => 22, ),
        self::TYPE_COLNAME       => array(ItemXrefCustomerTableMap::COL_ARCUCUSTID => 0, ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR => 1, ItemXrefCustomerTableMap::COL_INITITEMNBR => 2, ItemXrefCustomerTableMap::COL_OEXRRETPRICE => 3, ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE => 4, ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE => 5, ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY => 6, ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY => 7, ItemXrefCustomerTableMap::COL_OEXRROUNDING => 8, ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY => 9, ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC => 10, ItemXrefCustomerTableMap::COL_OEXRCONVERT => 11, ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2 => 12, ItemXrefCustomerTableMap::COL_OEXRREVISION => 13, ItemXrefCustomerTableMap::COL_OEXRPURCHQTY => 14, ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM => 15, ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT => 16, ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT => 17, ItemXrefCustomerTableMap::COL_OEXRWGHT => 18, ItemXrefCustomerTableMap::COL_OEXRCUSTUOM => 19, ItemXrefCustomerTableMap::COL_DATEUPDTD => 20, ItemXrefCustomerTableMap::COL_TIMEUPDTD => 21, ItemXrefCustomerTableMap::COL_DUMMY => 22, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'OexrCustItemNbr' => 1, 'InitItemNbr' => 2, 'OexrRetPrice' => 3, 'OexrCustPrice' => 4, 'OexrQtyPerCase' => 5, 'OexrInnerPackQty' => 6, 'OexrOuterPackQty' => 7, 'OexrRounding' => 8, 'OexrShipTareQty' => 9, 'OexrCustItemDesc' => 10, 'OexrConvert' => 11, 'OexrCustItemDesc2' => 12, 'OexrRevision' => 13, 'OexrPurchQty' => 14, 'OexrCustPricUom' => 15, 'OexrLabel1PrtFmt' => 16, 'OexrLabel2PrtFmt' => 17, 'OexrWght' => 18, 'OexrCustUom' => 19, 'DateUpdtd' => 20, 'TimeUpdtd' => 21, 'dummy' => 22, ),
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
        $this->setName('cust_item_xref');
        $this->setPhpName('ItemXrefCustomer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefCustomer');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addPrimaryKey('OexrCustItemNbr', 'Oexrcustitemnbr', 'VARCHAR', true, 30, '');
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', false, 30, null);
        $this->addColumn('OexrRetPrice', 'Oexrretprice', 'DECIMAL', false, 20, null);
        $this->addColumn('OexrCustPrice', 'Oexrcustprice', 'DECIMAL', false, 20, null);
        $this->addColumn('OexrQtyPerCase', 'Oexrqtypercase', 'INTEGER', false, 4, null);
        $this->addColumn('OexrInnerPackQty', 'Oexrinnerpackqty', 'INTEGER', false, 4, null);
        $this->addColumn('OexrOuterPackQty', 'Oexrouterpackqty', 'INTEGER', false, 4, null);
        $this->addColumn('OexrRounding', 'Oexrrounding', 'VARCHAR', false, 1, null);
        $this->addColumn('OexrShipTareQty', 'Oexrshiptareqty', 'INTEGER', false, 4, null);
        $this->addColumn('OexrCustItemDesc', 'Oexrcustitemdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('OexrConvert', 'Oexrconvert', 'DECIMAL', false, 20, null);
        $this->addColumn('OexrCustItemDesc2', 'Oexrcustitemdesc2', 'VARCHAR', false, 30, null);
        $this->addColumn('OexrRevision', 'Oexrrevision', 'VARCHAR', false, 10, null);
        $this->addColumn('OexrPurchQty', 'Oexrpurchqty', 'INTEGER', false, 6, null);
        $this->addColumn('OexrCustPricUom', 'Oexrcustpricuom', 'VARCHAR', false, 4, null);
        $this->addColumn('OexrLabel1PrtFmt', 'Oexrlabel1prtfmt', 'VARCHAR', false, 8, null);
        $this->addColumn('OexrLabel2PrtFmt', 'Oexrlabel2prtfmt', 'VARCHAR', false, 8, null);
        $this->addColumn('OexrWght', 'Oexrwght', 'DECIMAL', false, 20, null);
        $this->addColumn('OexrCustUom', 'Oexrcustuom', 'VARCHAR', false, 4, null);
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
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ItemXrefCustomer $obj A \ItemXrefCustomer object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getOexrcustitemnbr() || is_scalar($obj->getOexrcustitemnbr()) || is_callable([$obj->getOexrcustitemnbr(), '__toString']) ? (string) $obj->getOexrcustitemnbr() : $obj->getOexrcustitemnbr())]);
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
     * @param mixed $value A \ItemXrefCustomer object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefCustomer) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getOexrcustitemnbr() || is_scalar($value->getOexrcustitemnbr()) || is_callable([$value->getOexrcustitemnbr(), '__toString']) ? (string) $value->getOexrcustitemnbr() : $value->getOexrcustitemnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefCustomer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Oexrcustitemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemXrefCustomerTableMap::CLASS_DEFAULT : ItemXrefCustomerTableMap::OM_CLASS;
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
     * @return array           (ItemXrefCustomer object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemXrefCustomerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefCustomerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefCustomerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefCustomerTableMap::OM_CLASS;
            /** @var ItemXrefCustomer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefCustomerTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefCustomerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefCustomerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefCustomer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefCustomerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRRETPRICE);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRROUNDING);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCONVERT);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRREVISION);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRWGHT);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_OEXRCUSTUOM);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefCustomerTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.OexrCustItemNbr');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OexrRetPrice');
            $criteria->addSelectColumn($alias . '.OexrCustPrice');
            $criteria->addSelectColumn($alias . '.OexrQtyPerCase');
            $criteria->addSelectColumn($alias . '.OexrInnerPackQty');
            $criteria->addSelectColumn($alias . '.OexrOuterPackQty');
            $criteria->addSelectColumn($alias . '.OexrRounding');
            $criteria->addSelectColumn($alias . '.OexrShipTareQty');
            $criteria->addSelectColumn($alias . '.OexrCustItemDesc');
            $criteria->addSelectColumn($alias . '.OexrConvert');
            $criteria->addSelectColumn($alias . '.OexrCustItemDesc2');
            $criteria->addSelectColumn($alias . '.OexrRevision');
            $criteria->addSelectColumn($alias . '.OexrPurchQty');
            $criteria->addSelectColumn($alias . '.OexrCustPricUom');
            $criteria->addSelectColumn($alias . '.OexrLabel1PrtFmt');
            $criteria->addSelectColumn($alias . '.OexrLabel2PrtFmt');
            $criteria->addSelectColumn($alias . '.OexrWght');
            $criteria->addSelectColumn($alias . '.OexrCustUom');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefCustomerTableMap::DATABASE_NAME)->getTable(ItemXrefCustomerTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemXrefCustomerTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemXrefCustomerTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemXrefCustomerTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefCustomer or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemXrefCustomer object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefCustomer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefCustomerTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefCustomerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefCustomerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefCustomerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the cust_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemXrefCustomerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefCustomer or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemXrefCustomer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefCustomer object
        }


        // Set the correct dbName
        $query = ItemXrefCustomerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemXrefCustomerTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemXrefCustomerTableMap::buildTableMap();
