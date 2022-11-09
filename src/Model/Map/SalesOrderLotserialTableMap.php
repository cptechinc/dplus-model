<?php

namespace Map;

use \SalesOrderLotserial;
use \SalesOrderLotserialQuery;
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
 * This class defines the structure of the 'so_lot_ser' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesOrderLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesOrderLotserialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_lot_ser';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesOrderLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesOrderLotserial';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 25;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 25;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'so_lot_ser.OehdNbr';

    /**
     * the column name for the OedtLine field
     */
    const COL_OEDTLINE = 'so_lot_ser.OedtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_lot_ser.InitItemNbr';

    /**
     * the column name for the OesdTag field
     */
    const COL_OESDTAG = 'so_lot_ser.OesdTag';

    /**
     * the column name for the OesdLotSer field
     */
    const COL_OESDLOTSER = 'so_lot_ser.OesdLotSer';

    /**
     * the column name for the OesdBin field
     */
    const COL_OESDBIN = 'so_lot_ser.OesdBin';

    /**
     * the column name for the OesdPlltNbr field
     */
    const COL_OESDPLLTNBR = 'so_lot_ser.OesdPlltNbr';

    /**
     * the column name for the OesdCrtnNbr field
     */
    const COL_OESDCRTNNBR = 'so_lot_ser.OesdCrtnNbr';

    /**
     * the column name for the OesdQtyShip field
     */
    const COL_OESDQTYSHIP = 'so_lot_ser.OesdQtyShip';

    /**
     * the column name for the OesdCntrQty field
     */
    const COL_OESDCNTRQTY = 'so_lot_ser.OesdCntrQty';

    /**
     * the column name for the OesdSpecOrdr field
     */
    const COL_OESDSPECORDR = 'so_lot_ser.OesdSpecOrdr';

    /**
     * the column name for the OesdLotRef field
     */
    const COL_OESDLOTREF = 'so_lot_ser.OesdLotRef';

    /**
     * the column name for the OesdBatch field
     */
    const COL_OESDBATCH = 'so_lot_ser.OesdBatch';

    /**
     * the column name for the OesdCureDate field
     */
    const COL_OESDCUREDATE = 'so_lot_ser.OesdCureDate';

    /**
     * the column name for the OesdAcStatus field
     */
    const COL_OESDACSTATUS = 'so_lot_ser.OesdAcStatus';

    /**
     * the column name for the OesdTestLot field
     */
    const COL_OESDTESTLOT = 'so_lot_ser.OesdTestLot';

    /**
     * the column name for the OesdPlltType field
     */
    const COL_OESDPLLTTYPE = 'so_lot_ser.OesdPlltType';

    /**
     * the column name for the OesdTareWght field
     */
    const COL_OESDTAREWGHT = 'so_lot_ser.OesdTareWght';

    /**
     * the column name for the OesdUseUp field
     */
    const COL_OESDUSEUP = 'so_lot_ser.OesdUseUp';

    /**
     * the column name for the OesdLblPrtd field
     */
    const COL_OESDLBLPRTD = 'so_lot_ser.OesdLblPrtd';

    /**
     * the column name for the OesdOrigBin field
     */
    const COL_OESDORIGBIN = 'so_lot_ser.OesdOrigBin';

    /**
     * the column name for the OesdActvDate field
     */
    const COL_OESDACTVDATE = 'so_lot_ser.OesdActvDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_lot_ser.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_lot_ser.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_lot_ser.dummy';

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oedtline', 'Inititemnbr', 'Oesdtag', 'Oesdlotser', 'Oesdbin', 'Oesdplltnbr', 'Oesdcrtnnbr', 'Oesdqtyship', 'Oesdcntrqty', 'Oesdspecordr', 'Oesdlotref', 'Oesdbatch', 'Oesdcuredate', 'Oesdacstatus', 'Oesdtestlot', 'Oesdpllttype', 'Oesdtarewght', 'Oesduseup', 'Oesdlblprtd', 'Oesdorigbin', 'Oesdactvdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oedtline', 'inititemnbr', 'oesdtag', 'oesdlotser', 'oesdbin', 'oesdplltnbr', 'oesdcrtnnbr', 'oesdqtyship', 'oesdcntrqty', 'oesdspecordr', 'oesdlotref', 'oesdbatch', 'oesdcuredate', 'oesdacstatus', 'oesdtestlot', 'oesdpllttype', 'oesdtarewght', 'oesduseup', 'oesdlblprtd', 'oesdorigbin', 'oesdactvdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesOrderLotserialTableMap::COL_OEHDNBR, SalesOrderLotserialTableMap::COL_OEDTLINE, SalesOrderLotserialTableMap::COL_INITITEMNBR, SalesOrderLotserialTableMap::COL_OESDTAG, SalesOrderLotserialTableMap::COL_OESDLOTSER, SalesOrderLotserialTableMap::COL_OESDBIN, SalesOrderLotserialTableMap::COL_OESDPLLTNBR, SalesOrderLotserialTableMap::COL_OESDCRTNNBR, SalesOrderLotserialTableMap::COL_OESDQTYSHIP, SalesOrderLotserialTableMap::COL_OESDCNTRQTY, SalesOrderLotserialTableMap::COL_OESDSPECORDR, SalesOrderLotserialTableMap::COL_OESDLOTREF, SalesOrderLotserialTableMap::COL_OESDBATCH, SalesOrderLotserialTableMap::COL_OESDCUREDATE, SalesOrderLotserialTableMap::COL_OESDACSTATUS, SalesOrderLotserialTableMap::COL_OESDTESTLOT, SalesOrderLotserialTableMap::COL_OESDPLLTTYPE, SalesOrderLotserialTableMap::COL_OESDTAREWGHT, SalesOrderLotserialTableMap::COL_OESDUSEUP, SalesOrderLotserialTableMap::COL_OESDLBLPRTD, SalesOrderLotserialTableMap::COL_OESDORIGBIN, SalesOrderLotserialTableMap::COL_OESDACTVDATE, SalesOrderLotserialTableMap::COL_DATEUPDTD, SalesOrderLotserialTableMap::COL_TIMEUPDTD, SalesOrderLotserialTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OedtLine', 'InitItemNbr', 'OesdTag', 'OesdLotSer', 'OesdBin', 'OesdPlltNbr', 'OesdCrtnNbr', 'OesdQtyShip', 'OesdCntrQty', 'OesdSpecOrdr', 'OesdLotRef', 'OesdBatch', 'OesdCureDate', 'OesdAcStatus', 'OesdTestLot', 'OesdPlltType', 'OesdTareWght', 'OesdUseUp', 'OesdLblPrtd', 'OesdOrigBin', 'OesdActvDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oedtline' => 1, 'Inititemnbr' => 2, 'Oesdtag' => 3, 'Oesdlotser' => 4, 'Oesdbin' => 5, 'Oesdplltnbr' => 6, 'Oesdcrtnnbr' => 7, 'Oesdqtyship' => 8, 'Oesdcntrqty' => 9, 'Oesdspecordr' => 10, 'Oesdlotref' => 11, 'Oesdbatch' => 12, 'Oesdcuredate' => 13, 'Oesdacstatus' => 14, 'Oesdtestlot' => 15, 'Oesdpllttype' => 16, 'Oesdtarewght' => 17, 'Oesduseup' => 18, 'Oesdlblprtd' => 19, 'Oesdorigbin' => 20, 'Oesdactvdate' => 21, 'Dateupdtd' => 22, 'Timeupdtd' => 23, 'Dummy' => 24, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oedtline' => 1, 'inititemnbr' => 2, 'oesdtag' => 3, 'oesdlotser' => 4, 'oesdbin' => 5, 'oesdplltnbr' => 6, 'oesdcrtnnbr' => 7, 'oesdqtyship' => 8, 'oesdcntrqty' => 9, 'oesdspecordr' => 10, 'oesdlotref' => 11, 'oesdbatch' => 12, 'oesdcuredate' => 13, 'oesdacstatus' => 14, 'oesdtestlot' => 15, 'oesdpllttype' => 16, 'oesdtarewght' => 17, 'oesduseup' => 18, 'oesdlblprtd' => 19, 'oesdorigbin' => 20, 'oesdactvdate' => 21, 'dateupdtd' => 22, 'timeupdtd' => 23, 'dummy' => 24, ),
        self::TYPE_COLNAME       => array(SalesOrderLotserialTableMap::COL_OEHDNBR => 0, SalesOrderLotserialTableMap::COL_OEDTLINE => 1, SalesOrderLotserialTableMap::COL_INITITEMNBR => 2, SalesOrderLotserialTableMap::COL_OESDTAG => 3, SalesOrderLotserialTableMap::COL_OESDLOTSER => 4, SalesOrderLotserialTableMap::COL_OESDBIN => 5, SalesOrderLotserialTableMap::COL_OESDPLLTNBR => 6, SalesOrderLotserialTableMap::COL_OESDCRTNNBR => 7, SalesOrderLotserialTableMap::COL_OESDQTYSHIP => 8, SalesOrderLotserialTableMap::COL_OESDCNTRQTY => 9, SalesOrderLotserialTableMap::COL_OESDSPECORDR => 10, SalesOrderLotserialTableMap::COL_OESDLOTREF => 11, SalesOrderLotserialTableMap::COL_OESDBATCH => 12, SalesOrderLotserialTableMap::COL_OESDCUREDATE => 13, SalesOrderLotserialTableMap::COL_OESDACSTATUS => 14, SalesOrderLotserialTableMap::COL_OESDTESTLOT => 15, SalesOrderLotserialTableMap::COL_OESDPLLTTYPE => 16, SalesOrderLotserialTableMap::COL_OESDTAREWGHT => 17, SalesOrderLotserialTableMap::COL_OESDUSEUP => 18, SalesOrderLotserialTableMap::COL_OESDLBLPRTD => 19, SalesOrderLotserialTableMap::COL_OESDORIGBIN => 20, SalesOrderLotserialTableMap::COL_OESDACTVDATE => 21, SalesOrderLotserialTableMap::COL_DATEUPDTD => 22, SalesOrderLotserialTableMap::COL_TIMEUPDTD => 23, SalesOrderLotserialTableMap::COL_DUMMY => 24, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OedtLine' => 1, 'InitItemNbr' => 2, 'OesdTag' => 3, 'OesdLotSer' => 4, 'OesdBin' => 5, 'OesdPlltNbr' => 6, 'OesdCrtnNbr' => 7, 'OesdQtyShip' => 8, 'OesdCntrQty' => 9, 'OesdSpecOrdr' => 10, 'OesdLotRef' => 11, 'OesdBatch' => 12, 'OesdCureDate' => 13, 'OesdAcStatus' => 14, 'OesdTestLot' => 15, 'OesdPlltType' => 16, 'OesdTareWght' => 17, 'OesdUseUp' => 18, 'OesdLblPrtd' => 19, 'OesdOrigBin' => 20, 'OesdActvDate' => 21, 'DateUpdtd' => 22, 'TimeUpdtd' => 23, 'dummy' => 24, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $this->setName('so_lot_ser');
        $this->setPhpName('SalesOrderLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesOrderLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER' , 'so_header', 'OehdNbr', true, 10, 0);
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER' , 'so_detail', 'OehdNbr', true, 10, 0);
        $this->addForeignPrimaryKey('OedtLine', 'Oedtline', 'INTEGER' , 'so_detail', 'OedtLine', true, 4, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('OesdTag', 'Oesdtag', 'CHAR', true, null, '');
        $this->addPrimaryKey('OesdLotSer', 'Oesdlotser', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('OesdBin', 'Oesdbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('OesdPlltNbr', 'Oesdplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('OesdCrtnNbr', 'Oesdcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('OesdQtyShip', 'Oesdqtyship', 'DECIMAL', true, 20, 0);
        $this->addColumn('OesdCntrQty', 'Oesdcntrqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('OesdSpecOrdr', 'Oesdspecordr', 'CHAR', true, null, 'N');
        $this->addColumn('OesdLotRef', 'Oesdlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('OesdBatch', 'Oesdbatch', 'VARCHAR', true, 15, '');
        $this->addColumn('OesdCureDate', 'Oesdcuredate', 'VARCHAR', true, 10, '');
        $this->addColumn('OesdAcStatus', 'Oesdacstatus', 'VARCHAR', true, 4, '');
        $this->addColumn('OesdTestLot', 'Oesdtestlot', 'VARCHAR', true, 4, '');
        $this->addColumn('OesdPlltType', 'Oesdpllttype', 'CHAR', true, null, '');
        $this->addColumn('OesdTareWght', 'Oesdtarewght', 'DECIMAL', true, 20, 0);
        $this->addColumn('OesdUseUp', 'Oesduseup', 'CHAR', true, null, '');
        $this->addColumn('OesdLblPrtd', 'Oesdlblprtd', 'CHAR', true, null, '');
        $this->addColumn('OesdOrigBin', 'Oesdorigbin', 'VARCHAR', true, 8, '');
        $this->addColumn('OesdActvDate', 'Oesdactvdate', 'CHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
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
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \SalesOrderLotserial $obj A \SalesOrderLotserial object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehdnbr() || is_scalar($obj->getOehdnbr()) || is_callable([$obj->getOehdnbr(), '__toString']) ? (string) $obj->getOehdnbr() : $obj->getOehdnbr()), (null === $obj->getOedtline() || is_scalar($obj->getOedtline()) || is_callable([$obj->getOedtline(), '__toString']) ? (string) $obj->getOedtline() : $obj->getOedtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getOesdtag() || is_scalar($obj->getOesdtag()) || is_callable([$obj->getOesdtag(), '__toString']) ? (string) $obj->getOesdtag() : $obj->getOesdtag()), (null === $obj->getOesdlotser() || is_scalar($obj->getOesdlotser()) || is_callable([$obj->getOesdlotser(), '__toString']) ? (string) $obj->getOesdlotser() : $obj->getOesdlotser()), (null === $obj->getOesdbin() || is_scalar($obj->getOesdbin()) || is_callable([$obj->getOesdbin(), '__toString']) ? (string) $obj->getOesdbin() : $obj->getOesdbin()), (null === $obj->getOesdplltnbr() || is_scalar($obj->getOesdplltnbr()) || is_callable([$obj->getOesdplltnbr(), '__toString']) ? (string) $obj->getOesdplltnbr() : $obj->getOesdplltnbr()), (null === $obj->getOesdcrtnnbr() || is_scalar($obj->getOesdcrtnnbr()) || is_callable([$obj->getOesdcrtnnbr(), '__toString']) ? (string) $obj->getOesdcrtnnbr() : $obj->getOesdcrtnnbr())]);
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
     * @param mixed $value A \SalesOrderLotserial object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesOrderLotserial) {
                $key = serialize([(null === $value->getOehdnbr() || is_scalar($value->getOehdnbr()) || is_callable([$value->getOehdnbr(), '__toString']) ? (string) $value->getOehdnbr() : $value->getOehdnbr()), (null === $value->getOedtline() || is_scalar($value->getOedtline()) || is_callable([$value->getOedtline(), '__toString']) ? (string) $value->getOedtline() : $value->getOedtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getOesdtag() || is_scalar($value->getOesdtag()) || is_callable([$value->getOesdtag(), '__toString']) ? (string) $value->getOesdtag() : $value->getOesdtag()), (null === $value->getOesdlotser() || is_scalar($value->getOesdlotser()) || is_callable([$value->getOesdlotser(), '__toString']) ? (string) $value->getOesdlotser() : $value->getOesdlotser()), (null === $value->getOesdbin() || is_scalar($value->getOesdbin()) || is_callable([$value->getOesdbin(), '__toString']) ? (string) $value->getOesdbin() : $value->getOesdbin()), (null === $value->getOesdplltnbr() || is_scalar($value->getOesdplltnbr()) || is_callable([$value->getOesdplltnbr(), '__toString']) ? (string) $value->getOesdplltnbr() : $value->getOesdplltnbr()), (null === $value->getOesdcrtnnbr() || is_scalar($value->getOesdcrtnnbr()) || is_callable([$value->getOesdcrtnnbr(), '__toString']) ? (string) $value->getOesdcrtnnbr() : $value->getOesdcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6]), (null === $value[7] || is_scalar($value[7]) || is_callable([$value[7], '__toString']) ? (string) $value[7] : $value[7])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesOrderLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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

        $pks[] = (int) $row[
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
                : self::translateFieldName('Oesdtag', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Oesdlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Oesdbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Oesdplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 7 + $offset
                : self::translateFieldName('Oesdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesOrderLotserialTableMap::CLASS_DEFAULT : SalesOrderLotserialTableMap::OM_CLASS;
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
     * @return array           (SalesOrderLotserial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesOrderLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesOrderLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesOrderLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesOrderLotserialTableMap::OM_CLASS;
            /** @var SalesOrderLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesOrderLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesOrderLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesOrderLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesOrderLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesOrderLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OEDTLINE);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDTAG);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDLOTSER);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDBIN);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDPLLTNBR);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDCRTNNBR);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDQTYSHIP);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDCNTRQTY);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDSPECORDR);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDLOTREF);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDBATCH);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDCUREDATE);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDACSTATUS);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDTESTLOT);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDPLLTTYPE);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDTAREWGHT);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDUSEUP);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDLBLPRTD);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDORIGBIN);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_OESDACTVDATE);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesOrderLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OedtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OesdTag');
            $criteria->addSelectColumn($alias . '.OesdLotSer');
            $criteria->addSelectColumn($alias . '.OesdBin');
            $criteria->addSelectColumn($alias . '.OesdPlltNbr');
            $criteria->addSelectColumn($alias . '.OesdCrtnNbr');
            $criteria->addSelectColumn($alias . '.OesdQtyShip');
            $criteria->addSelectColumn($alias . '.OesdCntrQty');
            $criteria->addSelectColumn($alias . '.OesdSpecOrdr');
            $criteria->addSelectColumn($alias . '.OesdLotRef');
            $criteria->addSelectColumn($alias . '.OesdBatch');
            $criteria->addSelectColumn($alias . '.OesdCureDate');
            $criteria->addSelectColumn($alias . '.OesdAcStatus');
            $criteria->addSelectColumn($alias . '.OesdTestLot');
            $criteria->addSelectColumn($alias . '.OesdPlltType');
            $criteria->addSelectColumn($alias . '.OesdTareWght');
            $criteria->addSelectColumn($alias . '.OesdUseUp');
            $criteria->addSelectColumn($alias . '.OesdLblPrtd');
            $criteria->addSelectColumn($alias . '.OesdOrigBin');
            $criteria->addSelectColumn($alias . '.OesdActvDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesOrderLotserialTableMap::DATABASE_NAME)->getTable(SalesOrderLotserialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesOrderLotserialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesOrderLotserialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesOrderLotserialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesOrderLotserial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesOrderLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesOrderLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesOrderLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OEHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OEDTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDTAG, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDLOTSER, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDBIN, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $value[7]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesOrderLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesOrderLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesOrderLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_lot_ser table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesOrderLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesOrderLotserial or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesOrderLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesOrderLotserial object
        }


        // Set the correct dbName
        $query = SalesOrderLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesOrderLotserialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesOrderLotserialTableMap::buildTableMap();
