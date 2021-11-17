<?php

namespace Map;

use \SoAllocatedLotserial;
use \SoAllocatedLotserialQuery;
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
 * This class defines the structure of the 'so_pre_allo' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SoAllocatedLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoAllocatedLotserialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_pre_allo';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoAllocatedLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoAllocatedLotserial';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'so_pre_allo.OehdNbr';

    /**
     * the column name for the OedtLine field
     */
    const COL_OEDTLINE = 'so_pre_allo.OedtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_pre_allo.InitItemNbr';

    /**
     * the column name for the OeidLotSer field
     */
    const COL_OEIDLOTSER = 'so_pre_allo.OeidLotSer';

    /**
     * the column name for the OeidBin field
     */
    const COL_OEIDBIN = 'so_pre_allo.OeidBin';

    /**
     * the column name for the OeidPlltNbr field
     */
    const COL_OEIDPLLTNBR = 'so_pre_allo.OeidPlltNbr';

    /**
     * the column name for the OeidCrtnNbr field
     */
    const COL_OEIDCRTNNBR = 'so_pre_allo.OeidCrtnNbr';

    /**
     * the column name for the OeidQtyShip field
     */
    const COL_OEIDQTYSHIP = 'so_pre_allo.OeidQtyShip';

    /**
     * the column name for the OeidLotRef field
     */
    const COL_OEIDLOTREF = 'so_pre_allo.OeidLotRef';

    /**
     * the column name for the OeidCntrQty field
     */
    const COL_OEIDCNTRQTY = 'so_pre_allo.OeidCntrQty';

    /**
     * the column name for the OeidBatch field
     */
    const COL_OEIDBATCH = 'so_pre_allo.OeidBatch';

    /**
     * the column name for the OeidCureDate field
     */
    const COL_OEIDCUREDATE = 'so_pre_allo.OeidCureDate';

    /**
     * the column name for the OeidPlltType field
     */
    const COL_OEIDPLLTTYPE = 'so_pre_allo.OeidPlltType';

    /**
     * the column name for the OeidLblPrtd field
     */
    const COL_OEIDLBLPRTD = 'so_pre_allo.OeidLblPrtd';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_pre_allo.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_pre_allo.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_pre_allo.dummy';

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oedtline', 'Inititemnbr', 'Oeidlotser', 'Oeidbin', 'Oeidplltnbr', 'Oeidcrtnnbr', 'Oeidqtyship', 'Oeidlotref', 'Oeidcntrqty', 'Oeidbatch', 'Oeidcuredate', 'Oeidpllttype', 'Oeidlblprtd', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oedtline', 'inititemnbr', 'oeidlotser', 'oeidbin', 'oeidplltnbr', 'oeidcrtnnbr', 'oeidqtyship', 'oeidlotref', 'oeidcntrqty', 'oeidbatch', 'oeidcuredate', 'oeidpllttype', 'oeidlblprtd', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoAllocatedLotserialTableMap::COL_OEHDNBR, SoAllocatedLotserialTableMap::COL_OEDTLINE, SoAllocatedLotserialTableMap::COL_INITITEMNBR, SoAllocatedLotserialTableMap::COL_OEIDLOTSER, SoAllocatedLotserialTableMap::COL_OEIDBIN, SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP, SoAllocatedLotserialTableMap::COL_OEIDLOTREF, SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY, SoAllocatedLotserialTableMap::COL_OEIDBATCH, SoAllocatedLotserialTableMap::COL_OEIDCUREDATE, SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE, SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD, SoAllocatedLotserialTableMap::COL_DATEUPDTD, SoAllocatedLotserialTableMap::COL_TIMEUPDTD, SoAllocatedLotserialTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OedtLine', 'InitItemNbr', 'OeidLotSer', 'OeidBin', 'OeidPlltNbr', 'OeidCrtnNbr', 'OeidQtyShip', 'OeidLotRef', 'OeidCntrQty', 'OeidBatch', 'OeidCureDate', 'OeidPlltType', 'OeidLblPrtd', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oedtline' => 1, 'Inititemnbr' => 2, 'Oeidlotser' => 3, 'Oeidbin' => 4, 'Oeidplltnbr' => 5, 'Oeidcrtnnbr' => 6, 'Oeidqtyship' => 7, 'Oeidlotref' => 8, 'Oeidcntrqty' => 9, 'Oeidbatch' => 10, 'Oeidcuredate' => 11, 'Oeidpllttype' => 12, 'Oeidlblprtd' => 13, 'Dateupdtd' => 14, 'Timeupdtd' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oedtline' => 1, 'inititemnbr' => 2, 'oeidlotser' => 3, 'oeidbin' => 4, 'oeidplltnbr' => 5, 'oeidcrtnnbr' => 6, 'oeidqtyship' => 7, 'oeidlotref' => 8, 'oeidcntrqty' => 9, 'oeidbatch' => 10, 'oeidcuredate' => 11, 'oeidpllttype' => 12, 'oeidlblprtd' => 13, 'dateupdtd' => 14, 'timeupdtd' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(SoAllocatedLotserialTableMap::COL_OEHDNBR => 0, SoAllocatedLotserialTableMap::COL_OEDTLINE => 1, SoAllocatedLotserialTableMap::COL_INITITEMNBR => 2, SoAllocatedLotserialTableMap::COL_OEIDLOTSER => 3, SoAllocatedLotserialTableMap::COL_OEIDBIN => 4, SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR => 5, SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR => 6, SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP => 7, SoAllocatedLotserialTableMap::COL_OEIDLOTREF => 8, SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY => 9, SoAllocatedLotserialTableMap::COL_OEIDBATCH => 10, SoAllocatedLotserialTableMap::COL_OEIDCUREDATE => 11, SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE => 12, SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD => 13, SoAllocatedLotserialTableMap::COL_DATEUPDTD => 14, SoAllocatedLotserialTableMap::COL_TIMEUPDTD => 15, SoAllocatedLotserialTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OedtLine' => 1, 'InitItemNbr' => 2, 'OeidLotSer' => 3, 'OeidBin' => 4, 'OeidPlltNbr' => 5, 'OeidCrtnNbr' => 6, 'OeidQtyShip' => 7, 'OeidLotRef' => 8, 'OeidCntrQty' => 9, 'OeidBatch' => 10, 'OeidCureDate' => 11, 'OeidPlltType' => 12, 'OeidLblPrtd' => 13, 'DateUpdtd' => 14, 'TimeUpdtd' => 15, 'dummy' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('so_pre_allo');
        $this->setPhpName('SoAllocatedLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoAllocatedLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'VARCHAR' , 'so_header', 'OehdNbr', true, 10, null);
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'VARCHAR' , 'so_detail', 'OehdNbr', true, 10, null);
        $this->addForeignPrimaryKey('OedtLine', 'Oedtline', 'INTEGER' , 'so_detail', 'OedtLine', true, 4, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('OeidLotSer', 'Oeidlotser', 'VARCHAR' , 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addPrimaryKey('OeidBin', 'Oeidbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('OeidPlltNbr', 'Oeidplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('OeidCrtnNbr', 'Oeidcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('OeidQtyShip', 'Oeidqtyship', 'DECIMAL', false, 20, null);
        $this->addColumn('OeidLotRef', 'Oeidlotref', 'VARCHAR', false, 20, null);
        $this->addColumn('OeidCntrQty', 'Oeidcntrqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OeidBatch', 'Oeidbatch', 'VARCHAR', false, 15, null);
        $this->addColumn('OeidCureDate', 'Oeidcuredate', 'VARCHAR', false, 10, null);
        $this->addColumn('OeidPlltType', 'Oeidpllttype', 'VARCHAR', false, 1, null);
        $this->addColumn('OeidLblPrtd', 'Oeidlblprtd', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesOrder', '\\SalesOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, null, false);
        $this->addRelation('SalesOrderDetail', '\\SalesOrderDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
  1 =>
  array (
    0 => ':OedtLine',
    1 => ':OedtLine',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvLot', '\\InvLot', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':OeidLotSer',
    1 => ':LotmLotNbr',
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
     * @param \SoAllocatedLotserial $obj A \SoAllocatedLotserial object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehdnbr() || is_scalar($obj->getOehdnbr()) || is_callable([$obj->getOehdnbr(), '__toString']) ? (string) $obj->getOehdnbr() : $obj->getOehdnbr()), (null === $obj->getOedtline() || is_scalar($obj->getOedtline()) || is_callable([$obj->getOedtline(), '__toString']) ? (string) $obj->getOedtline() : $obj->getOedtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getOeidlotser() || is_scalar($obj->getOeidlotser()) || is_callable([$obj->getOeidlotser(), '__toString']) ? (string) $obj->getOeidlotser() : $obj->getOeidlotser()), (null === $obj->getOeidbin() || is_scalar($obj->getOeidbin()) || is_callable([$obj->getOeidbin(), '__toString']) ? (string) $obj->getOeidbin() : $obj->getOeidbin()), (null === $obj->getOeidplltnbr() || is_scalar($obj->getOeidplltnbr()) || is_callable([$obj->getOeidplltnbr(), '__toString']) ? (string) $obj->getOeidplltnbr() : $obj->getOeidplltnbr()), (null === $obj->getOeidcrtnnbr() || is_scalar($obj->getOeidcrtnnbr()) || is_callable([$obj->getOeidcrtnnbr(), '__toString']) ? (string) $obj->getOeidcrtnnbr() : $obj->getOeidcrtnnbr())]);
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
     * @param mixed $value A \SoAllocatedLotserial object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SoAllocatedLotserial) {
                $key = serialize([(null === $value->getOehdnbr() || is_scalar($value->getOehdnbr()) || is_callable([$value->getOehdnbr(), '__toString']) ? (string) $value->getOehdnbr() : $value->getOehdnbr()), (null === $value->getOedtline() || is_scalar($value->getOedtline()) || is_callable([$value->getOedtline(), '__toString']) ? (string) $value->getOedtline() : $value->getOedtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getOeidlotser() || is_scalar($value->getOeidlotser()) || is_callable([$value->getOeidlotser(), '__toString']) ? (string) $value->getOeidlotser() : $value->getOeidlotser()), (null === $value->getOeidbin() || is_scalar($value->getOeidbin()) || is_callable([$value->getOeidbin(), '__toString']) ? (string) $value->getOeidbin() : $value->getOeidbin()), (null === $value->getOeidplltnbr() || is_scalar($value->getOeidplltnbr()) || is_callable([$value->getOeidplltnbr(), '__toString']) ? (string) $value->getOeidplltnbr() : $value->getOeidplltnbr()), (null === $value->getOeidcrtnnbr() || is_scalar($value->getOeidcrtnnbr()) || is_callable([$value->getOeidcrtnnbr(), '__toString']) ? (string) $value->getOeidcrtnnbr() : $value->getOeidcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SoAllocatedLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Oeidlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Oeidbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Oeidplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Oeidcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SoAllocatedLotserialTableMap::CLASS_DEFAULT : SoAllocatedLotserialTableMap::OM_CLASS;
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
     * @return array           (SoAllocatedLotserial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoAllocatedLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoAllocatedLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoAllocatedLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoAllocatedLotserialTableMap::OM_CLASS;
            /** @var SoAllocatedLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoAllocatedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = SoAllocatedLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoAllocatedLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoAllocatedLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoAllocatedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEDTLINE);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDLOTSER);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDBIN);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDLOTREF);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDBATCH);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDCUREDATE);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoAllocatedLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OedtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OeidLotSer');
            $criteria->addSelectColumn($alias . '.OeidBin');
            $criteria->addSelectColumn($alias . '.OeidPlltNbr');
            $criteria->addSelectColumn($alias . '.OeidCrtnNbr');
            $criteria->addSelectColumn($alias . '.OeidQtyShip');
            $criteria->addSelectColumn($alias . '.OeidLotRef');
            $criteria->addSelectColumn($alias . '.OeidCntrQty');
            $criteria->addSelectColumn($alias . '.OeidBatch');
            $criteria->addSelectColumn($alias . '.OeidCureDate');
            $criteria->addSelectColumn($alias . '.OeidPlltType');
            $criteria->addSelectColumn($alias . '.OeidLblPrtd');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoAllocatedLotserialTableMap::DATABASE_NAME)->getTable(SoAllocatedLotserialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoAllocatedLotserialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoAllocatedLotserialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoAllocatedLotserialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoAllocatedLotserial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoAllocatedLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoAllocatedLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoAllocatedLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEDTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDBIN, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $value[6]));
                $criteria->addOr($criterion);
            }
        }

        $query = SoAllocatedLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoAllocatedLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoAllocatedLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_pre_allo table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoAllocatedLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoAllocatedLotserial or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoAllocatedLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoAllocatedLotserial object
        }


        // Set the correct dbName
        $query = SoAllocatedLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoAllocatedLotserialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoAllocatedLotserialTableMap::buildTableMap();
