<?php

namespace Map;

use \InvTransferLotserial;
use \InvTransferLotserialQuery;
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
 * This class defines the structure of the 'inv_trans_lotser' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvTransferLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvTransferLotserialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_trans_lotser';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvTransferLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvTransferLotserial';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 27;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 27;

    /**
     * the column name for the InhdNbr field
     */
    const COL_INHDNBR = 'inv_trans_lotser.InhdNbr';

    /**
     * the column name for the IndtLine field
     */
    const COL_INDTLINE = 'inv_trans_lotser.IndtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_trans_lotser.InitItemNbr';

    /**
     * the column name for the InsdLotSer field
     */
    const COL_INSDLOTSER = 'inv_trans_lotser.InsdLotSer';

    /**
     * the column name for the InsdBin field
     */
    const COL_INSDBIN = 'inv_trans_lotser.InsdBin';

    /**
     * the column name for the InsdPlltNbr field
     */
    const COL_INSDPLLTNBR = 'inv_trans_lotser.InsdPlltNbr';

    /**
     * the column name for the InsdCrtnNbr field
     */
    const COL_INSDCRTNNBR = 'inv_trans_lotser.InsdCrtnNbr';

    /**
     * the column name for the InsdQtyResv field
     */
    const COL_INSDQTYRESV = 'inv_trans_lotser.InsdQtyResv';

    /**
     * the column name for the InsdQtyShip field
     */
    const COL_INSDQTYSHIP = 'inv_trans_lotser.InsdQtyShip';

    /**
     * the column name for the InsdQtyNotPost field
     */
    const COL_INSDQTYNOTPOST = 'inv_trans_lotser.InsdQtyNotPost';

    /**
     * the column name for the InsdUnitCost field
     */
    const COL_INSDUNITCOST = 'inv_trans_lotser.InsdUnitCost';

    /**
     * the column name for the InsdLotSerFrom field
     */
    const COL_INSDLOTSERFROM = 'inv_trans_lotser.InsdLotSerFrom';

    /**
     * the column name for the InsdBinFrom field
     */
    const COL_INSDBINFROM = 'inv_trans_lotser.InsdBinFrom';

    /**
     * the column name for the InsdCases field
     */
    const COL_INSDCASES = 'inv_trans_lotser.InsdCases';

    /**
     * the column name for the InsdTag field
     */
    const COL_INSDTAG = 'inv_trans_lotser.InsdTag';

    /**
     * the column name for the InsdInspctLvl field
     */
    const COL_INSDINSPCTLVL = 'inv_trans_lotser.InsdInspctLvl';

    /**
     * the column name for the InsdLotRef field
     */
    const COL_INSDLOTREF = 'inv_trans_lotser.InsdLotRef';

    /**
     * the column name for the InsdCrtnQty field
     */
    const COL_INSDCRTNQTY = 'inv_trans_lotser.InsdCrtnQty';

    /**
     * the column name for the InsdDateShipped field
     */
    const COL_INSDDATESHIPPED = 'inv_trans_lotser.InsdDateShipped';

    /**
     * the column name for the InsdToWhseBin field
     */
    const COL_INSDTOWHSEBIN = 'inv_trans_lotser.InsdToWhseBin';

    /**
     * the column name for the InsdLblPrtd field
     */
    const COL_INSDLBLPRTD = 'inv_trans_lotser.InsdLblPrtd';

    /**
     * the column name for the InsdBatch field
     */
    const COL_INSDBATCH = 'inv_trans_lotser.InsdBatch';

    /**
     * the column name for the InsdCureDate field
     */
    const COL_INSDCUREDATE = 'inv_trans_lotser.InsdCureDate';

    /**
     * the column name for the InsdBinTo field
     */
    const COL_INSDBINTO = 'inv_trans_lotser.InsdBinTo';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_trans_lotser.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_trans_lotser.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_trans_lotser.dummy';

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
        self::TYPE_PHPNAME       => array('Inhdnbr', 'Indtline', 'Inititemnbr', 'Insdlotser', 'Insdbin', 'Insdplltnbr', 'Insdcrtnnbr', 'Insdqtyresv', 'Insdqtyship', 'Insdqtynotpost', 'Insdunitcost', 'Insdlotserfrom', 'Insdbinfrom', 'Insdcases', 'Insdtag', 'Insdinspctlvl', 'Insdlotref', 'Insdcrtnqty', 'Insddateshipped', 'Insdtowhsebin', 'Insdlblprtd', 'Insdbatch', 'Insdcuredate', 'Insdbinto', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inhdnbr', 'indtline', 'inititemnbr', 'insdlotser', 'insdbin', 'insdplltnbr', 'insdcrtnnbr', 'insdqtyresv', 'insdqtyship', 'insdqtynotpost', 'insdunitcost', 'insdlotserfrom', 'insdbinfrom', 'insdcases', 'insdtag', 'insdinspctlvl', 'insdlotref', 'insdcrtnqty', 'insddateshipped', 'insdtowhsebin', 'insdlblprtd', 'insdbatch', 'insdcuredate', 'insdbinto', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvTransferLotserialTableMap::COL_INHDNBR, InvTransferLotserialTableMap::COL_INDTLINE, InvTransferLotserialTableMap::COL_INITITEMNBR, InvTransferLotserialTableMap::COL_INSDLOTSER, InvTransferLotserialTableMap::COL_INSDBIN, InvTransferLotserialTableMap::COL_INSDPLLTNBR, InvTransferLotserialTableMap::COL_INSDCRTNNBR, InvTransferLotserialTableMap::COL_INSDQTYRESV, InvTransferLotserialTableMap::COL_INSDQTYSHIP, InvTransferLotserialTableMap::COL_INSDQTYNOTPOST, InvTransferLotserialTableMap::COL_INSDUNITCOST, InvTransferLotserialTableMap::COL_INSDLOTSERFROM, InvTransferLotserialTableMap::COL_INSDBINFROM, InvTransferLotserialTableMap::COL_INSDCASES, InvTransferLotserialTableMap::COL_INSDTAG, InvTransferLotserialTableMap::COL_INSDINSPCTLVL, InvTransferLotserialTableMap::COL_INSDLOTREF, InvTransferLotserialTableMap::COL_INSDCRTNQTY, InvTransferLotserialTableMap::COL_INSDDATESHIPPED, InvTransferLotserialTableMap::COL_INSDTOWHSEBIN, InvTransferLotserialTableMap::COL_INSDLBLPRTD, InvTransferLotserialTableMap::COL_INSDBATCH, InvTransferLotserialTableMap::COL_INSDCUREDATE, InvTransferLotserialTableMap::COL_INSDBINTO, InvTransferLotserialTableMap::COL_DATEUPDTD, InvTransferLotserialTableMap::COL_TIMEUPDTD, InvTransferLotserialTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InhdNbr', 'IndtLine', 'InitItemNbr', 'InsdLotSer', 'InsdBin', 'InsdPlltNbr', 'InsdCrtnNbr', 'InsdQtyResv', 'InsdQtyShip', 'InsdQtyNotPost', 'InsdUnitCost', 'InsdLotSerFrom', 'InsdBinFrom', 'InsdCases', 'InsdTag', 'InsdInspctLvl', 'InsdLotRef', 'InsdCrtnQty', 'InsdDateShipped', 'InsdToWhseBin', 'InsdLblPrtd', 'InsdBatch', 'InsdCureDate', 'InsdBinTo', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inhdnbr' => 0, 'Indtline' => 1, 'Inititemnbr' => 2, 'Insdlotser' => 3, 'Insdbin' => 4, 'Insdplltnbr' => 5, 'Insdcrtnnbr' => 6, 'Insdqtyresv' => 7, 'Insdqtyship' => 8, 'Insdqtynotpost' => 9, 'Insdunitcost' => 10, 'Insdlotserfrom' => 11, 'Insdbinfrom' => 12, 'Insdcases' => 13, 'Insdtag' => 14, 'Insdinspctlvl' => 15, 'Insdlotref' => 16, 'Insdcrtnqty' => 17, 'Insddateshipped' => 18, 'Insdtowhsebin' => 19, 'Insdlblprtd' => 20, 'Insdbatch' => 21, 'Insdcuredate' => 22, 'Insdbinto' => 23, 'Dateupdtd' => 24, 'Timeupdtd' => 25, 'Dummy' => 26, ),
        self::TYPE_CAMELNAME     => array('inhdnbr' => 0, 'indtline' => 1, 'inititemnbr' => 2, 'insdlotser' => 3, 'insdbin' => 4, 'insdplltnbr' => 5, 'insdcrtnnbr' => 6, 'insdqtyresv' => 7, 'insdqtyship' => 8, 'insdqtynotpost' => 9, 'insdunitcost' => 10, 'insdlotserfrom' => 11, 'insdbinfrom' => 12, 'insdcases' => 13, 'insdtag' => 14, 'insdinspctlvl' => 15, 'insdlotref' => 16, 'insdcrtnqty' => 17, 'insddateshipped' => 18, 'insdtowhsebin' => 19, 'insdlblprtd' => 20, 'insdbatch' => 21, 'insdcuredate' => 22, 'insdbinto' => 23, 'dateupdtd' => 24, 'timeupdtd' => 25, 'dummy' => 26, ),
        self::TYPE_COLNAME       => array(InvTransferLotserialTableMap::COL_INHDNBR => 0, InvTransferLotserialTableMap::COL_INDTLINE => 1, InvTransferLotserialTableMap::COL_INITITEMNBR => 2, InvTransferLotserialTableMap::COL_INSDLOTSER => 3, InvTransferLotserialTableMap::COL_INSDBIN => 4, InvTransferLotserialTableMap::COL_INSDPLLTNBR => 5, InvTransferLotserialTableMap::COL_INSDCRTNNBR => 6, InvTransferLotserialTableMap::COL_INSDQTYRESV => 7, InvTransferLotserialTableMap::COL_INSDQTYSHIP => 8, InvTransferLotserialTableMap::COL_INSDQTYNOTPOST => 9, InvTransferLotserialTableMap::COL_INSDUNITCOST => 10, InvTransferLotserialTableMap::COL_INSDLOTSERFROM => 11, InvTransferLotserialTableMap::COL_INSDBINFROM => 12, InvTransferLotserialTableMap::COL_INSDCASES => 13, InvTransferLotserialTableMap::COL_INSDTAG => 14, InvTransferLotserialTableMap::COL_INSDINSPCTLVL => 15, InvTransferLotserialTableMap::COL_INSDLOTREF => 16, InvTransferLotserialTableMap::COL_INSDCRTNQTY => 17, InvTransferLotserialTableMap::COL_INSDDATESHIPPED => 18, InvTransferLotserialTableMap::COL_INSDTOWHSEBIN => 19, InvTransferLotserialTableMap::COL_INSDLBLPRTD => 20, InvTransferLotserialTableMap::COL_INSDBATCH => 21, InvTransferLotserialTableMap::COL_INSDCUREDATE => 22, InvTransferLotserialTableMap::COL_INSDBINTO => 23, InvTransferLotserialTableMap::COL_DATEUPDTD => 24, InvTransferLotserialTableMap::COL_TIMEUPDTD => 25, InvTransferLotserialTableMap::COL_DUMMY => 26, ),
        self::TYPE_FIELDNAME     => array('InhdNbr' => 0, 'IndtLine' => 1, 'InitItemNbr' => 2, 'InsdLotSer' => 3, 'InsdBin' => 4, 'InsdPlltNbr' => 5, 'InsdCrtnNbr' => 6, 'InsdQtyResv' => 7, 'InsdQtyShip' => 8, 'InsdQtyNotPost' => 9, 'InsdUnitCost' => 10, 'InsdLotSerFrom' => 11, 'InsdBinFrom' => 12, 'InsdCases' => 13, 'InsdTag' => 14, 'InsdInspctLvl' => 15, 'InsdLotRef' => 16, 'InsdCrtnQty' => 17, 'InsdDateShipped' => 18, 'InsdToWhseBin' => 19, 'InsdLblPrtd' => 20, 'InsdBatch' => 21, 'InsdCureDate' => 22, 'InsdBinTo' => 23, 'DateUpdtd' => 24, 'TimeUpdtd' => 25, 'dummy' => 26, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
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
        $this->setName('inv_trans_lotser');
        $this->setPhpName('InvTransferLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvTransferLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_head', 'InhdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_det', 'InhdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('IndtLine', 'Indtline', 'INTEGER' , 'inv_trans_det', 'IndtLine', true, 5, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_ser_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InsdLotSer', 'Insdlotser', 'VARCHAR' , 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addForeignPrimaryKey('InsdLotSer', 'Insdlotser', 'VARCHAR' , 'inv_ser_mast', 'SermSerNbr', true, 20, '');
        $this->addPrimaryKey('InsdBin', 'Insdbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('InsdPlltNbr', 'Insdplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('InsdCrtnNbr', 'Insdcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('InsdQtyResv', 'Insdqtyresv', 'DECIMAL', true, 20, 0);
        $this->addColumn('InsdQtyShip', 'Insdqtyship', 'DECIMAL', true, 20, 0);
        $this->addColumn('InsdQtyNotPost', 'Insdqtynotpost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InsdUnitCost', 'Insdunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InsdLotSerFrom', 'Insdlotserfrom', 'VARCHAR', true, 20, '');
        $this->addColumn('InsdBinFrom', 'Insdbinfrom', 'VARCHAR', true, 8, '');
        $this->addColumn('InsdCases', 'Insdcases', 'INTEGER', true, 5, 0);
        $this->addColumn('InsdTag', 'Insdtag', 'INTEGER', true, 5, 0);
        $this->addColumn('InsdInspctLvl', 'Insdinspctlvl', 'CHAR', true, null, '');
        $this->addColumn('InsdLotRef', 'Insdlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('InsdCrtnQty', 'Insdcrtnqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('InsdDateShipped', 'Insddateshipped', 'CHAR', true, 8, '');
        $this->addColumn('InsdToWhseBin', 'Insdtowhsebin', 'VARCHAR', true, 8, '');
        $this->addColumn('InsdLblPrtd', 'Insdlblprtd', 'CHAR', true, null, '');
        $this->addColumn('InsdBatch', 'Insdbatch', 'VARCHAR', true, 15, '');
        $this->addColumn('InsdCureDate', 'Insdcuredate', 'VARCHAR', true, 10, '');
        $this->addColumn('InsdBinTo', 'Insdbinto', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
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
        $this->addRelation('InvTransferOrder', '\\InvTransferOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvTransferDetail', '\\InvTransferDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
  1 =>
  array (
    0 => ':IndtLine',
    1 => ':IndtLine',
  ),
), null, null, null, false);
        $this->addRelation('InvLotMaster', '\\InvLotMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':InsdLotSer',
    1 => ':LotmLotNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvSerialMaster', '\\InvSerialMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':InsdLotSer',
    1 => ':SermSerNbr',
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
     * @param \InvTransferLotserial $obj A \InvTransferLotserial object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInhdnbr() || is_scalar($obj->getInhdnbr()) || is_callable([$obj->getInhdnbr(), '__toString']) ? (string) $obj->getInhdnbr() : $obj->getInhdnbr()), (null === $obj->getIndtline() || is_scalar($obj->getIndtline()) || is_callable([$obj->getIndtline(), '__toString']) ? (string) $obj->getIndtline() : $obj->getIndtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getInsdlotser() || is_scalar($obj->getInsdlotser()) || is_callable([$obj->getInsdlotser(), '__toString']) ? (string) $obj->getInsdlotser() : $obj->getInsdlotser()), (null === $obj->getInsdbin() || is_scalar($obj->getInsdbin()) || is_callable([$obj->getInsdbin(), '__toString']) ? (string) $obj->getInsdbin() : $obj->getInsdbin()), (null === $obj->getInsdplltnbr() || is_scalar($obj->getInsdplltnbr()) || is_callable([$obj->getInsdplltnbr(), '__toString']) ? (string) $obj->getInsdplltnbr() : $obj->getInsdplltnbr()), (null === $obj->getInsdcrtnnbr() || is_scalar($obj->getInsdcrtnnbr()) || is_callable([$obj->getInsdcrtnnbr(), '__toString']) ? (string) $obj->getInsdcrtnnbr() : $obj->getInsdcrtnnbr())]);
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
     * @param mixed $value A \InvTransferLotserial object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvTransferLotserial) {
                $key = serialize([(null === $value->getInhdnbr() || is_scalar($value->getInhdnbr()) || is_callable([$value->getInhdnbr(), '__toString']) ? (string) $value->getInhdnbr() : $value->getInhdnbr()), (null === $value->getIndtline() || is_scalar($value->getIndtline()) || is_callable([$value->getIndtline(), '__toString']) ? (string) $value->getIndtline() : $value->getIndtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getInsdlotser() || is_scalar($value->getInsdlotser()) || is_callable([$value->getInsdlotser(), '__toString']) ? (string) $value->getInsdlotser() : $value->getInsdlotser()), (null === $value->getInsdbin() || is_scalar($value->getInsdbin()) || is_callable([$value->getInsdbin(), '__toString']) ? (string) $value->getInsdbin() : $value->getInsdbin()), (null === $value->getInsdplltnbr() || is_scalar($value->getInsdplltnbr()) || is_callable([$value->getInsdplltnbr(), '__toString']) ? (string) $value->getInsdplltnbr() : $value->getInsdplltnbr()), (null === $value->getInsdcrtnnbr() || is_scalar($value->getInsdcrtnnbr()) || is_callable([$value->getInsdcrtnnbr(), '__toString']) ? (string) $value->getInsdcrtnnbr() : $value->getInsdcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvTransferLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Insdlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Insdbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Insdplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Insdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvTransferLotserialTableMap::CLASS_DEFAULT : InvTransferLotserialTableMap::OM_CLASS;
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
     * @return array           (InvTransferLotserial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvTransferLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvTransferLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvTransferLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvTransferLotserialTableMap::OM_CLASS;
            /** @var InvTransferLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvTransferLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = InvTransferLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvTransferLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvTransferLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvTransferLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INHDNBR);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INDTLINE);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDLOTSER);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDBIN);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDPLLTNBR);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDCRTNNBR);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDQTYRESV);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDQTYSHIP);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDUNITCOST);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDLOTSERFROM);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDBINFROM);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDCASES);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDTAG);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDINSPCTLVL);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDLOTREF);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDCRTNQTY);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDDATESHIPPED);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDTOWHSEBIN);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDLBLPRTD);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDBATCH);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDCUREDATE);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_INSDBINTO);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvTransferLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InhdNbr');
            $criteria->addSelectColumn($alias . '.IndtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InsdLotSer');
            $criteria->addSelectColumn($alias . '.InsdBin');
            $criteria->addSelectColumn($alias . '.InsdPlltNbr');
            $criteria->addSelectColumn($alias . '.InsdCrtnNbr');
            $criteria->addSelectColumn($alias . '.InsdQtyResv');
            $criteria->addSelectColumn($alias . '.InsdQtyShip');
            $criteria->addSelectColumn($alias . '.InsdQtyNotPost');
            $criteria->addSelectColumn($alias . '.InsdUnitCost');
            $criteria->addSelectColumn($alias . '.InsdLotSerFrom');
            $criteria->addSelectColumn($alias . '.InsdBinFrom');
            $criteria->addSelectColumn($alias . '.InsdCases');
            $criteria->addSelectColumn($alias . '.InsdTag');
            $criteria->addSelectColumn($alias . '.InsdInspctLvl');
            $criteria->addSelectColumn($alias . '.InsdLotRef');
            $criteria->addSelectColumn($alias . '.InsdCrtnQty');
            $criteria->addSelectColumn($alias . '.InsdDateShipped');
            $criteria->addSelectColumn($alias . '.InsdToWhseBin');
            $criteria->addSelectColumn($alias . '.InsdLblPrtd');
            $criteria->addSelectColumn($alias . '.InsdBatch');
            $criteria->addSelectColumn($alias . '.InsdCureDate');
            $criteria->addSelectColumn($alias . '.InsdBinTo');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvTransferLotserialTableMap::DATABASE_NAME)->getTable(InvTransferLotserialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvTransferLotserialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvTransferLotserialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvTransferLotserialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvTransferLotserial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvTransferLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvTransferLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvTransferLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INDTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INSDLOTSER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INSDBIN, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $value[6]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvTransferLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvTransferLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvTransferLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_trans_lotser table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvTransferLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvTransferLotserial or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvTransferLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvTransferLotserial object
        }


        // Set the correct dbName
        $query = InvTransferLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvTransferLotserialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvTransferLotserialTableMap::buildTableMap();
