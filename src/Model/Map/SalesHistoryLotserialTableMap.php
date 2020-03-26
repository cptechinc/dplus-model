<?php

namespace Map;

use \SalesHistoryLotserial;
use \SalesHistoryLotserialQuery;
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
 * This class defines the structure of the 'so_lot_ser_hist' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesHistoryLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesHistoryLotserialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_lot_ser_hist';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesHistoryLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesHistoryLotserial';

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
     * the column name for the OehhNbr field
     */
    const COL_OEHHNBR = 'so_lot_ser_hist.OehhNbr';

    /**
     * the column name for the OedhLine field
     */
    const COL_OEDHLINE = 'so_lot_ser_hist.OedhLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_lot_ser_hist.InitItemNbr';

    /**
     * the column name for the OeshTag field
     */
    const COL_OESHTAG = 'so_lot_ser_hist.OeshTag';

    /**
     * the column name for the OeshLotSer field
     */
    const COL_OESHLOTSER = 'so_lot_ser_hist.OeshLotSer';

    /**
     * the column name for the OeshBin field
     */
    const COL_OESHBIN = 'so_lot_ser_hist.OeshBin';

    /**
     * the column name for the OeshPlltNbr field
     */
    const COL_OESHPLLTNBR = 'so_lot_ser_hist.OeshPlltNbr';

    /**
     * the column name for the OeshCrtnNbr field
     */
    const COL_OESHCRTNNBR = 'so_lot_ser_hist.OeshCrtnNbr';

    /**
     * the column name for the OeshYear field
     */
    const COL_OESHYEAR = 'so_lot_ser_hist.OeshYear';

    /**
     * the column name for the OeshQtyShip field
     */
    const COL_OESHQTYSHIP = 'so_lot_ser_hist.OeshQtyShip';

    /**
     * the column name for the OeshCntrQty field
     */
    const COL_OESHCNTRQTY = 'so_lot_ser_hist.OeshCntrQty';

    /**
     * the column name for the OeshSpecOrdr field
     */
    const COL_OESHSPECORDR = 'so_lot_ser_hist.OeshSpecOrdr';

    /**
     * the column name for the OeshLotRef field
     */
    const COL_OESHLOTREF = 'so_lot_ser_hist.OeshLotRef';

    /**
     * the column name for the OeshBatch field
     */
    const COL_OESHBATCH = 'so_lot_ser_hist.OeshBatch';

    /**
     * the column name for the OeshCureDate field
     */
    const COL_OESHCUREDATE = 'so_lot_ser_hist.OeshCureDate';

    /**
     * the column name for the OeshAcStatus field
     */
    const COL_OESHACSTATUS = 'so_lot_ser_hist.OeshAcStatus';

    /**
     * the column name for the OeshTestLot field
     */
    const COL_OESHTESTLOT = 'so_lot_ser_hist.OeshTestLot';

    /**
     * the column name for the OeshPlltType field
     */
    const COL_OESHPLLTTYPE = 'so_lot_ser_hist.OeshPlltType';

    /**
     * the column name for the OeshTareWght field
     */
    const COL_OESHTAREWGHT = 'so_lot_ser_hist.OeshTareWght';

    /**
     * the column name for the OeshUseUp field
     */
    const COL_OESHUSEUP = 'so_lot_ser_hist.OeshUseUp';

    /**
     * the column name for the OeshLblPrtd field
     */
    const COL_OESHLBLPRTD = 'so_lot_ser_hist.OeshLblPrtd';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_lot_ser_hist.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_lot_ser_hist.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_lot_ser_hist.dummy';

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
        self::TYPE_PHPNAME       => array('Oehhnbr', 'Oedhline', 'Inititemnbr', 'Oeshtag', 'Oeshlotser', 'Oeshbin', 'Oeshplltnbr', 'Oeshcrtnnbr', 'Oeshyear', 'Oeshqtyship', 'Oeshcntrqty', 'Oeshspecordr', 'Oeshlotref', 'Oeshbatch', 'Oeshcuredate', 'Oeshacstatus', 'Oeshtestlot', 'Oeshpllttype', 'Oeshtarewght', 'Oeshuseup', 'Oeshlblprtd', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehhnbr', 'oedhline', 'inititemnbr', 'oeshtag', 'oeshlotser', 'oeshbin', 'oeshplltnbr', 'oeshcrtnnbr', 'oeshyear', 'oeshqtyship', 'oeshcntrqty', 'oeshspecordr', 'oeshlotref', 'oeshbatch', 'oeshcuredate', 'oeshacstatus', 'oeshtestlot', 'oeshpllttype', 'oeshtarewght', 'oeshuseup', 'oeshlblprtd', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesHistoryLotserialTableMap::COL_OEHHNBR, SalesHistoryLotserialTableMap::COL_OEDHLINE, SalesHistoryLotserialTableMap::COL_INITITEMNBR, SalesHistoryLotserialTableMap::COL_OESHTAG, SalesHistoryLotserialTableMap::COL_OESHLOTSER, SalesHistoryLotserialTableMap::COL_OESHBIN, SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, SalesHistoryLotserialTableMap::COL_OESHYEAR, SalesHistoryLotserialTableMap::COL_OESHQTYSHIP, SalesHistoryLotserialTableMap::COL_OESHCNTRQTY, SalesHistoryLotserialTableMap::COL_OESHSPECORDR, SalesHistoryLotserialTableMap::COL_OESHLOTREF, SalesHistoryLotserialTableMap::COL_OESHBATCH, SalesHistoryLotserialTableMap::COL_OESHCUREDATE, SalesHistoryLotserialTableMap::COL_OESHACSTATUS, SalesHistoryLotserialTableMap::COL_OESHTESTLOT, SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE, SalesHistoryLotserialTableMap::COL_OESHTAREWGHT, SalesHistoryLotserialTableMap::COL_OESHUSEUP, SalesHistoryLotserialTableMap::COL_OESHLBLPRTD, SalesHistoryLotserialTableMap::COL_DATEUPDTD, SalesHistoryLotserialTableMap::COL_TIMEUPDTD, SalesHistoryLotserialTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehhNbr', 'OedhLine', 'InitItemNbr', 'OeshTag', 'OeshLotSer', 'OeshBin', 'OeshPlltNbr', 'OeshCrtnNbr', 'OeshYear', 'OeshQtyShip', 'OeshCntrQty', 'OeshSpecOrdr', 'OeshLotRef', 'OeshBatch', 'OeshCureDate', 'OeshAcStatus', 'OeshTestLot', 'OeshPlltType', 'OeshTareWght', 'OeshUseUp', 'OeshLblPrtd', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehhnbr' => 0, 'Oedhline' => 1, 'Inititemnbr' => 2, 'Oeshtag' => 3, 'Oeshlotser' => 4, 'Oeshbin' => 5, 'Oeshplltnbr' => 6, 'Oeshcrtnnbr' => 7, 'Oeshyear' => 8, 'Oeshqtyship' => 9, 'Oeshcntrqty' => 10, 'Oeshspecordr' => 11, 'Oeshlotref' => 12, 'Oeshbatch' => 13, 'Oeshcuredate' => 14, 'Oeshacstatus' => 15, 'Oeshtestlot' => 16, 'Oeshpllttype' => 17, 'Oeshtarewght' => 18, 'Oeshuseup' => 19, 'Oeshlblprtd' => 20, 'Dateupdtd' => 21, 'Timeupdtd' => 22, 'Dummy' => 23, ),
        self::TYPE_CAMELNAME     => array('oehhnbr' => 0, 'oedhline' => 1, 'inititemnbr' => 2, 'oeshtag' => 3, 'oeshlotser' => 4, 'oeshbin' => 5, 'oeshplltnbr' => 6, 'oeshcrtnnbr' => 7, 'oeshyear' => 8, 'oeshqtyship' => 9, 'oeshcntrqty' => 10, 'oeshspecordr' => 11, 'oeshlotref' => 12, 'oeshbatch' => 13, 'oeshcuredate' => 14, 'oeshacstatus' => 15, 'oeshtestlot' => 16, 'oeshpllttype' => 17, 'oeshtarewght' => 18, 'oeshuseup' => 19, 'oeshlblprtd' => 20, 'dateupdtd' => 21, 'timeupdtd' => 22, 'dummy' => 23, ),
        self::TYPE_COLNAME       => array(SalesHistoryLotserialTableMap::COL_OEHHNBR => 0, SalesHistoryLotserialTableMap::COL_OEDHLINE => 1, SalesHistoryLotserialTableMap::COL_INITITEMNBR => 2, SalesHistoryLotserialTableMap::COL_OESHTAG => 3, SalesHistoryLotserialTableMap::COL_OESHLOTSER => 4, SalesHistoryLotserialTableMap::COL_OESHBIN => 5, SalesHistoryLotserialTableMap::COL_OESHPLLTNBR => 6, SalesHistoryLotserialTableMap::COL_OESHCRTNNBR => 7, SalesHistoryLotserialTableMap::COL_OESHYEAR => 8, SalesHistoryLotserialTableMap::COL_OESHQTYSHIP => 9, SalesHistoryLotserialTableMap::COL_OESHCNTRQTY => 10, SalesHistoryLotserialTableMap::COL_OESHSPECORDR => 11, SalesHistoryLotserialTableMap::COL_OESHLOTREF => 12, SalesHistoryLotserialTableMap::COL_OESHBATCH => 13, SalesHistoryLotserialTableMap::COL_OESHCUREDATE => 14, SalesHistoryLotserialTableMap::COL_OESHACSTATUS => 15, SalesHistoryLotserialTableMap::COL_OESHTESTLOT => 16, SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE => 17, SalesHistoryLotserialTableMap::COL_OESHTAREWGHT => 18, SalesHistoryLotserialTableMap::COL_OESHUSEUP => 19, SalesHistoryLotserialTableMap::COL_OESHLBLPRTD => 20, SalesHistoryLotserialTableMap::COL_DATEUPDTD => 21, SalesHistoryLotserialTableMap::COL_TIMEUPDTD => 22, SalesHistoryLotserialTableMap::COL_DUMMY => 23, ),
        self::TYPE_FIELDNAME     => array('OehhNbr' => 0, 'OedhLine' => 1, 'InitItemNbr' => 2, 'OeshTag' => 3, 'OeshLotSer' => 4, 'OeshBin' => 5, 'OeshPlltNbr' => 6, 'OeshCrtnNbr' => 7, 'OeshYear' => 8, 'OeshQtyShip' => 9, 'OeshCntrQty' => 10, 'OeshSpecOrdr' => 11, 'OeshLotRef' => 12, 'OeshBatch' => 13, 'OeshCureDate' => 14, 'OeshAcStatus' => 15, 'OeshTestLot' => 16, 'OeshPlltType' => 17, 'OeshTareWght' => 18, 'OeshUseUp' => 19, 'OeshLblPrtd' => 20, 'DateUpdtd' => 21, 'TimeUpdtd' => 22, 'dummy' => 23, ),
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
        $this->setName('so_lot_ser_hist');
        $this->setPhpName('SalesHistoryLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesHistoryLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehhNbr', 'Oehhnbr', 'VARCHAR' , 'so_head_hist', 'OehhNbr', true, 10, null);
        $this->addForeignPrimaryKey('OehhNbr', 'Oehhnbr', 'VARCHAR' , 'so_det_hist', 'OehhNbr', true, 10, null);
        $this->addForeignPrimaryKey('OedhLine', 'Oedhline', 'INTEGER' , 'so_det_hist', 'OedhLine', true, 4, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('OeshTag', 'Oeshtag', 'VARCHAR', true, 1, '');
        $this->addPrimaryKey('OeshLotSer', 'Oeshlotser', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('OeshBin', 'Oeshbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('OeshPlltNbr', 'Oeshplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('OeshCrtnNbr', 'Oeshcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('OeshYear', 'Oeshyear', 'VARCHAR', false, 4, null);
        $this->addColumn('OeshQtyShip', 'Oeshqtyship', 'DECIMAL', false, 20, null);
        $this->addColumn('OeshCntrQty', 'Oeshcntrqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OeshSpecOrdr', 'Oeshspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('OeshLotRef', 'Oeshlotref', 'VARCHAR', false, 20, null);
        $this->addColumn('OeshBatch', 'Oeshbatch', 'VARCHAR', false, 15, null);
        $this->addColumn('OeshCureDate', 'Oeshcuredate', 'VARCHAR', false, 10, null);
        $this->addColumn('OeshAcStatus', 'Oeshacstatus', 'VARCHAR', false, 4, null);
        $this->addColumn('OeshTestLot', 'Oeshtestlot', 'VARCHAR', false, 4, null);
        $this->addColumn('OeshPlltType', 'Oeshpllttype', 'VARCHAR', false, 1, null);
        $this->addColumn('OeshTareWght', 'Oeshtarewght', 'DECIMAL', false, 20, null);
        $this->addColumn('OeshUseUp', 'Oeshuseup', 'VARCHAR', false, 1, null);
        $this->addColumn('OeshLblPrtd', 'Oeshlblprtd', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesHistory', '\\SalesHistory', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehhNbr',
    1 => ':OehhNbr',
  ),
), null, null, null, false);
        $this->addRelation('SalesHistoryDetail', '\\SalesHistoryDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehhNbr',
    1 => ':OehhNbr',
  ),
  1 =>
  array (
    0 => ':OedhLine',
    1 => ':OedhLine',
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
     * @param \SalesHistoryLotserial $obj A \SalesHistoryLotserial object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehhnbr() || is_scalar($obj->getOehhnbr()) || is_callable([$obj->getOehhnbr(), '__toString']) ? (string) $obj->getOehhnbr() : $obj->getOehhnbr()), (null === $obj->getOedhline() || is_scalar($obj->getOedhline()) || is_callable([$obj->getOedhline(), '__toString']) ? (string) $obj->getOedhline() : $obj->getOedhline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getOeshtag() || is_scalar($obj->getOeshtag()) || is_callable([$obj->getOeshtag(), '__toString']) ? (string) $obj->getOeshtag() : $obj->getOeshtag()), (null === $obj->getOeshlotser() || is_scalar($obj->getOeshlotser()) || is_callable([$obj->getOeshlotser(), '__toString']) ? (string) $obj->getOeshlotser() : $obj->getOeshlotser()), (null === $obj->getOeshbin() || is_scalar($obj->getOeshbin()) || is_callable([$obj->getOeshbin(), '__toString']) ? (string) $obj->getOeshbin() : $obj->getOeshbin()), (null === $obj->getOeshplltnbr() || is_scalar($obj->getOeshplltnbr()) || is_callable([$obj->getOeshplltnbr(), '__toString']) ? (string) $obj->getOeshplltnbr() : $obj->getOeshplltnbr()), (null === $obj->getOeshcrtnnbr() || is_scalar($obj->getOeshcrtnnbr()) || is_callable([$obj->getOeshcrtnnbr(), '__toString']) ? (string) $obj->getOeshcrtnnbr() : $obj->getOeshcrtnnbr())]);
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
     * @param mixed $value A \SalesHistoryLotserial object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesHistoryLotserial) {
                $key = serialize([(null === $value->getOehhnbr() || is_scalar($value->getOehhnbr()) || is_callable([$value->getOehhnbr(), '__toString']) ? (string) $value->getOehhnbr() : $value->getOehhnbr()), (null === $value->getOedhline() || is_scalar($value->getOedhline()) || is_callable([$value->getOedhline(), '__toString']) ? (string) $value->getOedhline() : $value->getOedhline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getOeshtag() || is_scalar($value->getOeshtag()) || is_callable([$value->getOeshtag(), '__toString']) ? (string) $value->getOeshtag() : $value->getOeshtag()), (null === $value->getOeshlotser() || is_scalar($value->getOeshlotser()) || is_callable([$value->getOeshlotser(), '__toString']) ? (string) $value->getOeshlotser() : $value->getOeshlotser()), (null === $value->getOeshbin() || is_scalar($value->getOeshbin()) || is_callable([$value->getOeshbin(), '__toString']) ? (string) $value->getOeshbin() : $value->getOeshbin()), (null === $value->getOeshplltnbr() || is_scalar($value->getOeshplltnbr()) || is_callable([$value->getOeshplltnbr(), '__toString']) ? (string) $value->getOeshplltnbr() : $value->getOeshplltnbr()), (null === $value->getOeshcrtnnbr() || is_scalar($value->getOeshcrtnnbr()) || is_callable([$value->getOeshcrtnnbr(), '__toString']) ? (string) $value->getOeshcrtnnbr() : $value->getOeshcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6]), (null === $value[7] || is_scalar($value[7]) || is_callable([$value[7], '__toString']) ? (string) $value[7] : $value[7])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesHistoryLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Oeshtag', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Oeshlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Oeshbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Oeshplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 7 + $offset
                : self::translateFieldName('Oeshcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesHistoryLotserialTableMap::CLASS_DEFAULT : SalesHistoryLotserialTableMap::OM_CLASS;
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
     * @return array           (SalesHistoryLotserial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesHistoryLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesHistoryLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesHistoryLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesHistoryLotserialTableMap::OM_CLASS;
            /** @var SalesHistoryLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesHistoryLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesHistoryLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesHistoryLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesHistoryLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesHistoryLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OEHHNBR);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OEDHLINE);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHTAG);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHLOTSER);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHBIN);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHYEAR);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHSPECORDR);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHLOTREF);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHBATCH);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHCUREDATE);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHACSTATUS);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHTESTLOT);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHUSEUP);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_OESHLBLPRTD);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesHistoryLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehhNbr');
            $criteria->addSelectColumn($alias . '.OedhLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OeshTag');
            $criteria->addSelectColumn($alias . '.OeshLotSer');
            $criteria->addSelectColumn($alias . '.OeshBin');
            $criteria->addSelectColumn($alias . '.OeshPlltNbr');
            $criteria->addSelectColumn($alias . '.OeshCrtnNbr');
            $criteria->addSelectColumn($alias . '.OeshYear');
            $criteria->addSelectColumn($alias . '.OeshQtyShip');
            $criteria->addSelectColumn($alias . '.OeshCntrQty');
            $criteria->addSelectColumn($alias . '.OeshSpecOrdr');
            $criteria->addSelectColumn($alias . '.OeshLotRef');
            $criteria->addSelectColumn($alias . '.OeshBatch');
            $criteria->addSelectColumn($alias . '.OeshCureDate');
            $criteria->addSelectColumn($alias . '.OeshAcStatus');
            $criteria->addSelectColumn($alias . '.OeshTestLot');
            $criteria->addSelectColumn($alias . '.OeshPlltType');
            $criteria->addSelectColumn($alias . '.OeshTareWght');
            $criteria->addSelectColumn($alias . '.OeshUseUp');
            $criteria->addSelectColumn($alias . '.OeshLblPrtd');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesHistoryLotserialTableMap::DATABASE_NAME)->getTable(SalesHistoryLotserialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesHistoryLotserialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesHistoryLotserialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesHistoryLotserialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesHistoryLotserial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesHistoryLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesHistoryLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesHistoryLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OEHHNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OEDHLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHTAG, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHLOTSER, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHBIN, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $value[7]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesHistoryLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesHistoryLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesHistoryLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_lot_ser_hist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesHistoryLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesHistoryLotserial or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesHistoryLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesHistoryLotserial object
        }


        // Set the correct dbName
        $query = SalesHistoryLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesHistoryLotserialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesHistoryLotserialTableMap::buildTableMap();
