<?php

namespace Map;

use \InvWhseLot;
use \InvWhseLotQuery;
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
 * This class defines the structure of the 'inv_inv_lot' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvWhseLotTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvWhseLotTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_inv_lot';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvWhseLot';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvWhseLot';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 43;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 43;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_inv_lot.InitItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'inv_inv_lot.IntbWhse';

    /**
     * the column name for the InltLotSer field
     */
    const COL_INLTLOTSER = 'inv_inv_lot.InltLotSer';

    /**
     * the column name for the InltBin field
     */
    const COL_INLTBIN = 'inv_inv_lot.InltBin';

    /**
     * the column name for the InltDate field
     */
    const COL_INLTDATE = 'inv_inv_lot.InltDate';

    /**
     * the column name for the InltDateWrit field
     */
    const COL_INLTDATEWRIT = 'inv_inv_lot.InltDateWrit';

    /**
     * the column name for the InltCost field
     */
    const COL_INLTCOST = 'inv_inv_lot.InltCost';

    /**
     * the column name for the InltOnHand field
     */
    const COL_INLTONHAND = 'inv_inv_lot.InltOnHand';

    /**
     * the column name for the InltResv field
     */
    const COL_INLTRESV = 'inv_inv_lot.InltResv';

    /**
     * the column name for the InltShip field
     */
    const COL_INLTSHIP = 'inv_inv_lot.InltShip';

    /**
     * the column name for the InltAllo field
     */
    const COL_INLTALLO = 'inv_inv_lot.InltAllo';

    /**
     * the column name for the InltFabAllo field
     */
    const COL_INLTFABALLO = 'inv_inv_lot.InltFabAllo';

    /**
     * the column name for the InltInTran field
     */
    const COL_INLTINTRAN = 'inv_inv_lot.InltInTran';

    /**
     * the column name for the InltInShip field
     */
    const COL_INLTINSHIP = 'inv_inv_lot.InltInShip';

    /**
     * the column name for the InltLotRef field
     */
    const COL_INLTLOTREF = 'inv_inv_lot.InltLotRef';

    /**
     * the column name for the InltBatch field
     */
    const COL_INLTBATCH = 'inv_inv_lot.InltBatch';

    /**
     * the column name for the InltLandCost field
     */
    const COL_INLTLANDCOST = 'inv_inv_lot.InltLandCost';

    /**
     * the column name for the InltMpfUnitCost field
     */
    const COL_INLTMPFUNITCOST = 'inv_inv_lot.InltMpfUnitCost';

    /**
     * the column name for the InltHmfUnitCost field
     */
    const COL_INLTHMFUNITCOST = 'inv_inv_lot.InltHmfUnitCost';

    /**
     * the column name for the InltDsetUnitCost field
     */
    const COL_INLTDSETUNITCOST = 'inv_inv_lot.InltDsetUnitCost';

    /**
     * the column name for the InltNumericFiller field
     */
    const COL_INLTNUMERICFILLER = 'inv_inv_lot.InltNumericFiller';

    /**
     * the column name for the InltTariffCost field
     */
    const COL_INLTTARIFFCOST = 'inv_inv_lot.InltTariffCost';

    /**
     * the column name for the InltShopCost field
     */
    const COL_INLTSHOPCOST = 'inv_inv_lot.InltShopCost';

    /**
     * the column name for the InltIsscoDfsQty field
     */
    const COL_INLTISSCODFSQTY = 'inv_inv_lot.InltIsscoDfsQty';

    /**
     * the column name for the InltHeadMark field
     */
    const COL_INLTHEADMARK = 'inv_inv_lot.InltHeadMark';

    /**
     * the column name for the InltCtry field
     */
    const COL_INLTCTRY = 'inv_inv_lot.InltCtry';

    /**
     * the column name for the InltRvalOrigCost field
     */
    const COL_INLTRVALORIGCOST = 'inv_inv_lot.InltRvalOrigCost';

    /**
     * the column name for the InltRvalPct field
     */
    const COL_INLTRVALPCT = 'inv_inv_lot.InltRvalPct';

    /**
     * the column name for the InltUnitWght field
     */
    const COL_INLTUNITWGHT = 'inv_inv_lot.InltUnitWght';

    /**
     * the column name for the InltDestWhse field
     */
    const COL_INLTDESTWHSE = 'inv_inv_lot.InltDestWhse';

    /**
     * the column name for the InltCntrQty field
     */
    const COL_INLTCNTRQTY = 'inv_inv_lot.InltCntrQty';

    /**
     * the column name for the InltQtyPerRoll field
     */
    const COL_INLTQTYPERROLL = 'inv_inv_lot.InltQtyPerRoll';

    /**
     * the column name for the InltTareWght field
     */
    const COL_INLTTAREWGHT = 'inv_inv_lot.InltTareWght';

    /**
     * the column name for the InltQcReasonCd field
     */
    const COL_INLTQCREASONCD = 'inv_inv_lot.InltQcReasonCd';

    /**
     * the column name for the InltCert field
     */
    const COL_INLTCERT = 'inv_inv_lot.InltCert';

    /**
     * the column name for the InltCureDate field
     */
    const COL_INLTCUREDATE = 'inv_inv_lot.InltCureDate';

    /**
     * the column name for the InltExpireDateCd field
     */
    const COL_INLTEXPIREDATECD = 'inv_inv_lot.InltExpireDateCd';

    /**
     * the column name for the InltExpireDate field
     */
    const COL_INLTEXPIREDATE = 'inv_inv_lot.InltExpireDate';

    /**
     * the column name for the InltOrigBin field
     */
    const COL_INLTORIGBIN = 'inv_inv_lot.InltOrigBin';

    /**
     * the column name for the InltShopItem field
     */
    const COL_INLTSHOPITEM = 'inv_inv_lot.InltShopItem';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_inv_lot.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_inv_lot.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_inv_lot.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Intbwhse', 'Inltlotser', 'Inltbin', 'Inltdate', 'Inltdatewrit', 'Inltcost', 'Inltonhand', 'Inltresv', 'Inltship', 'Inltallo', 'Inltfaballo', 'Inltintran', 'Inltinship', 'Inltlotref', 'Inltbatch', 'Inltlandcost', 'Inltmpfunitcost', 'Inlthmfunitcost', 'Inltdsetunitcost', 'Inltnumericfiller', 'Inlttariffcost', 'Inltshopcost', 'Inltisscodfsqty', 'Inltheadmark', 'Inltctry', 'Inltrvalorigcost', 'Inltrvalpct', 'Inltunitwght', 'Inltdestwhse', 'Inltcntrqty', 'Inltqtyperroll', 'Inlttarewght', 'Inltqcreasoncd', 'Inltcert', 'Inltcuredate', 'Inltexpiredatecd', 'Inltexpiredate', 'Inltorigbin', 'Inltshopitem', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'intbwhse', 'inltlotser', 'inltbin', 'inltdate', 'inltdatewrit', 'inltcost', 'inltonhand', 'inltresv', 'inltship', 'inltallo', 'inltfaballo', 'inltintran', 'inltinship', 'inltlotref', 'inltbatch', 'inltlandcost', 'inltmpfunitcost', 'inlthmfunitcost', 'inltdsetunitcost', 'inltnumericfiller', 'inlttariffcost', 'inltshopcost', 'inltisscodfsqty', 'inltheadmark', 'inltctry', 'inltrvalorigcost', 'inltrvalpct', 'inltunitwght', 'inltdestwhse', 'inltcntrqty', 'inltqtyperroll', 'inlttarewght', 'inltqcreasoncd', 'inltcert', 'inltcuredate', 'inltexpiredatecd', 'inltexpiredate', 'inltorigbin', 'inltshopitem', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvWhseLotTableMap::COL_INITITEMNBR, InvWhseLotTableMap::COL_INTBWHSE, InvWhseLotTableMap::COL_INLTLOTSER, InvWhseLotTableMap::COL_INLTBIN, InvWhseLotTableMap::COL_INLTDATE, InvWhseLotTableMap::COL_INLTDATEWRIT, InvWhseLotTableMap::COL_INLTCOST, InvWhseLotTableMap::COL_INLTONHAND, InvWhseLotTableMap::COL_INLTRESV, InvWhseLotTableMap::COL_INLTSHIP, InvWhseLotTableMap::COL_INLTALLO, InvWhseLotTableMap::COL_INLTFABALLO, InvWhseLotTableMap::COL_INLTINTRAN, InvWhseLotTableMap::COL_INLTINSHIP, InvWhseLotTableMap::COL_INLTLOTREF, InvWhseLotTableMap::COL_INLTBATCH, InvWhseLotTableMap::COL_INLTLANDCOST, InvWhseLotTableMap::COL_INLTMPFUNITCOST, InvWhseLotTableMap::COL_INLTHMFUNITCOST, InvWhseLotTableMap::COL_INLTDSETUNITCOST, InvWhseLotTableMap::COL_INLTNUMERICFILLER, InvWhseLotTableMap::COL_INLTTARIFFCOST, InvWhseLotTableMap::COL_INLTSHOPCOST, InvWhseLotTableMap::COL_INLTISSCODFSQTY, InvWhseLotTableMap::COL_INLTHEADMARK, InvWhseLotTableMap::COL_INLTCTRY, InvWhseLotTableMap::COL_INLTRVALORIGCOST, InvWhseLotTableMap::COL_INLTRVALPCT, InvWhseLotTableMap::COL_INLTUNITWGHT, InvWhseLotTableMap::COL_INLTDESTWHSE, InvWhseLotTableMap::COL_INLTCNTRQTY, InvWhseLotTableMap::COL_INLTQTYPERROLL, InvWhseLotTableMap::COL_INLTTAREWGHT, InvWhseLotTableMap::COL_INLTQCREASONCD, InvWhseLotTableMap::COL_INLTCERT, InvWhseLotTableMap::COL_INLTCUREDATE, InvWhseLotTableMap::COL_INLTEXPIREDATECD, InvWhseLotTableMap::COL_INLTEXPIREDATE, InvWhseLotTableMap::COL_INLTORIGBIN, InvWhseLotTableMap::COL_INLTSHOPITEM, InvWhseLotTableMap::COL_DATEUPDTD, InvWhseLotTableMap::COL_TIMEUPDTD, InvWhseLotTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'IntbWhse', 'InltLotSer', 'InltBin', 'InltDate', 'InltDateWrit', 'InltCost', 'InltOnHand', 'InltResv', 'InltShip', 'InltAllo', 'InltFabAllo', 'InltInTran', 'InltInShip', 'InltLotRef', 'InltBatch', 'InltLandCost', 'InltMpfUnitCost', 'InltHmfUnitCost', 'InltDsetUnitCost', 'InltNumericFiller', 'InltTariffCost', 'InltShopCost', 'InltIsscoDfsQty', 'InltHeadMark', 'InltCtry', 'InltRvalOrigCost', 'InltRvalPct', 'InltUnitWght', 'InltDestWhse', 'InltCntrQty', 'InltQtyPerRoll', 'InltTareWght', 'InltQcReasonCd', 'InltCert', 'InltCureDate', 'InltExpireDateCd', 'InltExpireDate', 'InltOrigBin', 'InltShopItem', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Intbwhse' => 1, 'Inltlotser' => 2, 'Inltbin' => 3, 'Inltdate' => 4, 'Inltdatewrit' => 5, 'Inltcost' => 6, 'Inltonhand' => 7, 'Inltresv' => 8, 'Inltship' => 9, 'Inltallo' => 10, 'Inltfaballo' => 11, 'Inltintran' => 12, 'Inltinship' => 13, 'Inltlotref' => 14, 'Inltbatch' => 15, 'Inltlandcost' => 16, 'Inltmpfunitcost' => 17, 'Inlthmfunitcost' => 18, 'Inltdsetunitcost' => 19, 'Inltnumericfiller' => 20, 'Inlttariffcost' => 21, 'Inltshopcost' => 22, 'Inltisscodfsqty' => 23, 'Inltheadmark' => 24, 'Inltctry' => 25, 'Inltrvalorigcost' => 26, 'Inltrvalpct' => 27, 'Inltunitwght' => 28, 'Inltdestwhse' => 29, 'Inltcntrqty' => 30, 'Inltqtyperroll' => 31, 'Inlttarewght' => 32, 'Inltqcreasoncd' => 33, 'Inltcert' => 34, 'Inltcuredate' => 35, 'Inltexpiredatecd' => 36, 'Inltexpiredate' => 37, 'Inltorigbin' => 38, 'Inltshopitem' => 39, 'Dateupdtd' => 40, 'Timeupdtd' => 41, 'Dummy' => 42, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'intbwhse' => 1, 'inltlotser' => 2, 'inltbin' => 3, 'inltdate' => 4, 'inltdatewrit' => 5, 'inltcost' => 6, 'inltonhand' => 7, 'inltresv' => 8, 'inltship' => 9, 'inltallo' => 10, 'inltfaballo' => 11, 'inltintran' => 12, 'inltinship' => 13, 'inltlotref' => 14, 'inltbatch' => 15, 'inltlandcost' => 16, 'inltmpfunitcost' => 17, 'inlthmfunitcost' => 18, 'inltdsetunitcost' => 19, 'inltnumericfiller' => 20, 'inlttariffcost' => 21, 'inltshopcost' => 22, 'inltisscodfsqty' => 23, 'inltheadmark' => 24, 'inltctry' => 25, 'inltrvalorigcost' => 26, 'inltrvalpct' => 27, 'inltunitwght' => 28, 'inltdestwhse' => 29, 'inltcntrqty' => 30, 'inltqtyperroll' => 31, 'inlttarewght' => 32, 'inltqcreasoncd' => 33, 'inltcert' => 34, 'inltcuredate' => 35, 'inltexpiredatecd' => 36, 'inltexpiredate' => 37, 'inltorigbin' => 38, 'inltshopitem' => 39, 'dateupdtd' => 40, 'timeupdtd' => 41, 'dummy' => 42, ),
        self::TYPE_COLNAME       => array(InvWhseLotTableMap::COL_INITITEMNBR => 0, InvWhseLotTableMap::COL_INTBWHSE => 1, InvWhseLotTableMap::COL_INLTLOTSER => 2, InvWhseLotTableMap::COL_INLTBIN => 3, InvWhseLotTableMap::COL_INLTDATE => 4, InvWhseLotTableMap::COL_INLTDATEWRIT => 5, InvWhseLotTableMap::COL_INLTCOST => 6, InvWhseLotTableMap::COL_INLTONHAND => 7, InvWhseLotTableMap::COL_INLTRESV => 8, InvWhseLotTableMap::COL_INLTSHIP => 9, InvWhseLotTableMap::COL_INLTALLO => 10, InvWhseLotTableMap::COL_INLTFABALLO => 11, InvWhseLotTableMap::COL_INLTINTRAN => 12, InvWhseLotTableMap::COL_INLTINSHIP => 13, InvWhseLotTableMap::COL_INLTLOTREF => 14, InvWhseLotTableMap::COL_INLTBATCH => 15, InvWhseLotTableMap::COL_INLTLANDCOST => 16, InvWhseLotTableMap::COL_INLTMPFUNITCOST => 17, InvWhseLotTableMap::COL_INLTHMFUNITCOST => 18, InvWhseLotTableMap::COL_INLTDSETUNITCOST => 19, InvWhseLotTableMap::COL_INLTNUMERICFILLER => 20, InvWhseLotTableMap::COL_INLTTARIFFCOST => 21, InvWhseLotTableMap::COL_INLTSHOPCOST => 22, InvWhseLotTableMap::COL_INLTISSCODFSQTY => 23, InvWhseLotTableMap::COL_INLTHEADMARK => 24, InvWhseLotTableMap::COL_INLTCTRY => 25, InvWhseLotTableMap::COL_INLTRVALORIGCOST => 26, InvWhseLotTableMap::COL_INLTRVALPCT => 27, InvWhseLotTableMap::COL_INLTUNITWGHT => 28, InvWhseLotTableMap::COL_INLTDESTWHSE => 29, InvWhseLotTableMap::COL_INLTCNTRQTY => 30, InvWhseLotTableMap::COL_INLTQTYPERROLL => 31, InvWhseLotTableMap::COL_INLTTAREWGHT => 32, InvWhseLotTableMap::COL_INLTQCREASONCD => 33, InvWhseLotTableMap::COL_INLTCERT => 34, InvWhseLotTableMap::COL_INLTCUREDATE => 35, InvWhseLotTableMap::COL_INLTEXPIREDATECD => 36, InvWhseLotTableMap::COL_INLTEXPIREDATE => 37, InvWhseLotTableMap::COL_INLTORIGBIN => 38, InvWhseLotTableMap::COL_INLTSHOPITEM => 39, InvWhseLotTableMap::COL_DATEUPDTD => 40, InvWhseLotTableMap::COL_TIMEUPDTD => 41, InvWhseLotTableMap::COL_DUMMY => 42, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'IntbWhse' => 1, 'InltLotSer' => 2, 'InltBin' => 3, 'InltDate' => 4, 'InltDateWrit' => 5, 'InltCost' => 6, 'InltOnHand' => 7, 'InltResv' => 8, 'InltShip' => 9, 'InltAllo' => 10, 'InltFabAllo' => 11, 'InltInTran' => 12, 'InltInShip' => 13, 'InltLotRef' => 14, 'InltBatch' => 15, 'InltLandCost' => 16, 'InltMpfUnitCost' => 17, 'InltHmfUnitCost' => 18, 'InltDsetUnitCost' => 19, 'InltNumericFiller' => 20, 'InltTariffCost' => 21, 'InltShopCost' => 22, 'InltIsscoDfsQty' => 23, 'InltHeadMark' => 24, 'InltCtry' => 25, 'InltRvalOrigCost' => 26, 'InltRvalPct' => 27, 'InltUnitWght' => 28, 'InltDestWhse' => 29, 'InltCntrQty' => 30, 'InltQtyPerRoll' => 31, 'InltTareWght' => 32, 'InltQcReasonCd' => 33, 'InltCert' => 34, 'InltCureDate' => 35, 'InltExpireDateCd' => 36, 'InltExpireDate' => 37, 'InltOrigBin' => 38, 'InltShopItem' => 39, 'DateUpdtd' => 40, 'TimeUpdtd' => 41, 'dummy' => 42, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
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
        $this->setName('inv_inv_lot');
        $this->setPhpName('InvWhseLot');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvWhseLot');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR' , 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addForeignPrimaryKey('InltLotSer', 'Inltlotser', 'VARCHAR' , 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addPrimaryKey('InltBin', 'Inltbin', 'VARCHAR', true, 8, '');
        $this->addColumn('InltDate', 'Inltdate', 'CHAR', true, 8, '');
        $this->addColumn('InltDateWrit', 'Inltdatewrit', 'CHAR', true, 8, '');
        $this->addColumn('InltCost', 'Inltcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltOnHand', 'Inltonhand', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltResv', 'Inltresv', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltShip', 'Inltship', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltAllo', 'Inltallo', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltFabAllo', 'Inltfaballo', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltInTran', 'Inltintran', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltInShip', 'Inltinship', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltLotRef', 'Inltlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('InltBatch', 'Inltbatch', 'VARCHAR', true, 20, '');
        $this->addColumn('InltLandCost', 'Inltlandcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltMpfUnitCost', 'Inltmpfunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltHmfUnitCost', 'Inlthmfunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltDsetUnitCost', 'Inltdsetunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltNumericFiller', 'Inltnumericfiller', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltTariffCost', 'Inlttariffcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltShopCost', 'Inltshopcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltIsscoDfsQty', 'Inltisscodfsqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltHeadMark', 'Inltheadmark', 'VARCHAR', true, 4, '');
        $this->addColumn('InltCtry', 'Inltctry', 'VARCHAR', true, 4, '');
        $this->addColumn('InltRvalOrigCost', 'Inltrvalorigcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltRvalPct', 'Inltrvalpct', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltUnitWght', 'Inltunitwght', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltDestWhse', 'Inltdestwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('InltCntrQty', 'Inltcntrqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltQtyPerRoll', 'Inltqtyperroll', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltTareWght', 'Inlttarewght', 'DECIMAL', true, 20, 0);
        $this->addColumn('InltQcReasonCd', 'Inltqcreasoncd', 'CHAR', true, null, '');
        $this->addColumn('InltCert', 'Inltcert', 'CHAR', true, null, '');
        $this->addColumn('InltCureDate', 'Inltcuredate', 'VARCHAR', true, 10, '');
        $this->addColumn('InltExpireDateCd', 'Inltexpiredatecd', 'CHAR', true, null, '');
        $this->addColumn('InltExpireDate', 'Inltexpiredate', 'CHAR', true, 8, '');
        $this->addColumn('InltOrigBin', 'Inltorigbin', 'VARCHAR', true, 8, '');
        $this->addColumn('InltShopItem', 'Inltshopitem', 'CHAR', true, null, '');
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
        $this->addRelation('Warehouse', '\\Warehouse', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
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
    0 => ':InltLotSer',
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
     * @param \InvWhseLot $obj A \InvWhseLot object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getIntbwhse() || is_scalar($obj->getIntbwhse()) || is_callable([$obj->getIntbwhse(), '__toString']) ? (string) $obj->getIntbwhse() : $obj->getIntbwhse()), (null === $obj->getInltlotser() || is_scalar($obj->getInltlotser()) || is_callable([$obj->getInltlotser(), '__toString']) ? (string) $obj->getInltlotser() : $obj->getInltlotser()), (null === $obj->getInltbin() || is_scalar($obj->getInltbin()) || is_callable([$obj->getInltbin(), '__toString']) ? (string) $obj->getInltbin() : $obj->getInltbin())]);
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
     * @param mixed $value A \InvWhseLot object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvWhseLot) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse()), (null === $value->getInltlotser() || is_scalar($value->getInltlotser()) || is_callable([$value->getInltlotser(), '__toString']) ? (string) $value->getInltlotser() : $value->getInltlotser()), (null === $value->getInltbin() || is_scalar($value->getInltbin()) || is_callable([$value->getInltbin(), '__toString']) ? (string) $value->getInltbin() : $value->getInltbin())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvWhseLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvWhseLotTableMap::CLASS_DEFAULT : InvWhseLotTableMap::OM_CLASS;
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
     * @return array           (InvWhseLot object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvWhseLotTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvWhseLotTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvWhseLotTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvWhseLotTableMap::OM_CLASS;
            /** @var InvWhseLot $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvWhseLotTableMap::addInstanceToPool($obj, $key);
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
            $key = InvWhseLotTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvWhseLotTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvWhseLot $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvWhseLotTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTLOTSER);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTBIN);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTDATE);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTDATEWRIT);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTONHAND);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTRESV);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTSHIP);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTALLO);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTFABALLO);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTINTRAN);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTINSHIP);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTLOTREF);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTBATCH);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTLANDCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTMPFUNITCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTHMFUNITCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTDSETUNITCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTNUMERICFILLER);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTTARIFFCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTSHOPCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTISSCODFSQTY);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTHEADMARK);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTCTRY);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTRVALORIGCOST);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTRVALPCT);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTUNITWGHT);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTDESTWHSE);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTCNTRQTY);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTQTYPERROLL);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTTAREWGHT);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTQCREASONCD);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTCERT);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTCUREDATE);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTEXPIREDATECD);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTEXPIREDATE);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTORIGBIN);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_INLTSHOPITEM);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvWhseLotTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.InltLotSer');
            $criteria->addSelectColumn($alias . '.InltBin');
            $criteria->addSelectColumn($alias . '.InltDate');
            $criteria->addSelectColumn($alias . '.InltDateWrit');
            $criteria->addSelectColumn($alias . '.InltCost');
            $criteria->addSelectColumn($alias . '.InltOnHand');
            $criteria->addSelectColumn($alias . '.InltResv');
            $criteria->addSelectColumn($alias . '.InltShip');
            $criteria->addSelectColumn($alias . '.InltAllo');
            $criteria->addSelectColumn($alias . '.InltFabAllo');
            $criteria->addSelectColumn($alias . '.InltInTran');
            $criteria->addSelectColumn($alias . '.InltInShip');
            $criteria->addSelectColumn($alias . '.InltLotRef');
            $criteria->addSelectColumn($alias . '.InltBatch');
            $criteria->addSelectColumn($alias . '.InltLandCost');
            $criteria->addSelectColumn($alias . '.InltMpfUnitCost');
            $criteria->addSelectColumn($alias . '.InltHmfUnitCost');
            $criteria->addSelectColumn($alias . '.InltDsetUnitCost');
            $criteria->addSelectColumn($alias . '.InltNumericFiller');
            $criteria->addSelectColumn($alias . '.InltTariffCost');
            $criteria->addSelectColumn($alias . '.InltShopCost');
            $criteria->addSelectColumn($alias . '.InltIsscoDfsQty');
            $criteria->addSelectColumn($alias . '.InltHeadMark');
            $criteria->addSelectColumn($alias . '.InltCtry');
            $criteria->addSelectColumn($alias . '.InltRvalOrigCost');
            $criteria->addSelectColumn($alias . '.InltRvalPct');
            $criteria->addSelectColumn($alias . '.InltUnitWght');
            $criteria->addSelectColumn($alias . '.InltDestWhse');
            $criteria->addSelectColumn($alias . '.InltCntrQty');
            $criteria->addSelectColumn($alias . '.InltQtyPerRoll');
            $criteria->addSelectColumn($alias . '.InltTareWght');
            $criteria->addSelectColumn($alias . '.InltQcReasonCd');
            $criteria->addSelectColumn($alias . '.InltCert');
            $criteria->addSelectColumn($alias . '.InltCureDate');
            $criteria->addSelectColumn($alias . '.InltExpireDateCd');
            $criteria->addSelectColumn($alias . '.InltExpireDate');
            $criteria->addSelectColumn($alias . '.InltOrigBin');
            $criteria->addSelectColumn($alias . '.InltShopItem');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvWhseLotTableMap::DATABASE_NAME)->getTable(InvWhseLotTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvWhseLotTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvWhseLotTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvWhseLotTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvWhseLot or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvWhseLot object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvWhseLot) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvWhseLotTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvWhseLotTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvWhseLotTableMap::COL_INTBWHSE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(InvWhseLotTableMap::COL_INLTLOTSER, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(InvWhseLotTableMap::COL_INLTBIN, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvWhseLotQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvWhseLotTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvWhseLotTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_inv_lot table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvWhseLotQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvWhseLot or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvWhseLot object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvWhseLot object
        }


        // Set the correct dbName
        $query = InvWhseLotQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvWhseLotTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvWhseLotTableMap::buildTableMap();
