<?php

namespace Map;

use \PurchaseOrderDetailReceiving;
use \PurchaseOrderDetailReceivingQuery;
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
 * This class defines the structure of the 'po_tran_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PurchaseOrderDetailReceivingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PurchaseOrderDetailReceivingTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'po_tran_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\PurchaseOrderDetailReceiving';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'PurchaseOrderDetailReceiving';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 37;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 37;

    /**
     * the column name for the PothNbr field
     */
    const COL_POTHNBR = 'po_tran_det.PothNbr';

    /**
     * the column name for the PotdLine field
     */
    const COL_POTDLINE = 'po_tran_det.PotdLine';

    /**
     * the column name for the PotdSeq field
     */
    const COL_POTDSEQ = 'po_tran_det.PotdSeq';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'po_tran_det.InitItemNbr';

    /**
     * the column name for the PotdDesc1 field
     */
    const COL_POTDDESC1 = 'po_tran_det.PotdDesc1';

    /**
     * the column name for the PotdDesc2 field
     */
    const COL_POTDDESC2 = 'po_tran_det.PotdDesc2';

    /**
     * the column name for the PotdVendItemNbr field
     */
    const COL_POTDVENDITEMNBR = 'po_tran_det.PotdVendItemNbr';

    /**
     * the column name for the IntbUomPur field
     */
    const COL_INTBUOMPUR = 'po_tran_det.IntbUomPur';

    /**
     * the column name for the PotdRef field
     */
    const COL_POTDREF = 'po_tran_det.PotdRef';

    /**
     * the column name for the PotdQtyOrd field
     */
    const COL_POTDQTYORD = 'po_tran_det.PotdQtyOrd';

    /**
     * the column name for the PotdQtyRec field
     */
    const COL_POTDQTYREC = 'po_tran_det.PotdQtyRec';

    /**
     * the column name for the PotdPurchUnitCost field
     */
    const COL_POTDPURCHUNITCOST = 'po_tran_det.PotdPurchUnitCost';

    /**
     * the column name for the PotdPurchTotCost field
     */
    const COL_POTDPURCHTOTCOST = 'po_tran_det.PotdPurchTotCost';

    /**
     * the column name for the PotdGlAcct field
     */
    const COL_POTDGLACCT = 'po_tran_det.PotdGlAcct';

    /**
     * the column name for the PotdClos field
     */
    const COL_POTDCLOS = 'po_tran_det.PotdClos';

    /**
     * the column name for the PotdShopMinutes field
     */
    const COL_POTDSHOPMINUTES = 'po_tran_det.PotdShopMinutes';

    /**
     * the column name for the PotdType field
     */
    const COL_POTDTYPE = 'po_tran_det.PotdType';

    /**
     * the column name for the PotdForeignCost field
     */
    const COL_POTDFOREIGNCOST = 'po_tran_det.PotdForeignCost';

    /**
     * the column name for the PotdForeignCostTot field
     */
    const COL_POTDFOREIGNCOSTTOT = 'po_tran_det.PotdForeignCostTot';

    /**
     * the column name for the PotdSpecOrdr field
     */
    const COL_POTDSPECORDR = 'po_tran_det.PotdSpecOrdr';

    /**
     * the column name for the PotdProdUnitCost field
     */
    const COL_POTDPRODUNITCOST = 'po_tran_det.PotdProdUnitCost';

    /**
     * the column name for the PotdBaseUnitCost field
     */
    const COL_POTDBASEUNITCOST = 'po_tran_det.PotdBaseUnitCost';

    /**
     * the column name for the PotdBin field
     */
    const COL_POTDBIN = 'po_tran_det.PotdBin';

    /**
     * the column name for the PotdFabReturnScrap field
     */
    const COL_POTDFABRETURNSCRAP = 'po_tran_det.PotdFabReturnScrap';

    /**
     * the column name for the PotdRfBatch field
     */
    const COL_POTDRFBATCH = 'po_tran_det.PotdRfBatch';

    /**
     * the column name for the PotdRevision field
     */
    const COL_POTDREVISION = 'po_tran_det.PotdRevision';

    /**
     * the column name for the PotdLandUnitCost field
     */
    const COL_POTDLANDUNITCOST = 'po_tran_det.PotdLandUnitCost';

    /**
     * the column name for the PotdNbrOfCases field
     */
    const COL_POTDNBROFCASES = 'po_tran_det.PotdNbrOfCases';

    /**
     * the column name for the PotdTariffCost field
     */
    const COL_POTDTARIFFCOST = 'po_tran_det.PotdTariffCost';

    /**
     * the column name for the PotdShopCost field
     */
    const COL_POTDSHOPCOST = 'po_tran_det.PotdShopCost';

    /**
     * the column name for the PotdCasesOrd field
     */
    const COL_POTDCASESORD = 'po_tran_det.PotdCasesOrd';

    /**
     * the column name for the PotdMpfUnitCost field
     */
    const COL_POTDMPFUNITCOST = 'po_tran_det.PotdMpfUnitCost';

    /**
     * the column name for the PotdHmfUnitCost field
     */
    const COL_POTDHMFUNITCOST = 'po_tran_det.PotdHmfUnitCost';

    /**
     * the column name for the PotdDsetUnitCost field
     */
    const COL_POTDDSETUNITCOST = 'po_tran_det.PotdDsetUnitCost';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'po_tran_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'po_tran_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'po_tran_det.dummy';

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
        self::TYPE_PHPNAME       => array('Pothnbr', 'Potdline', 'Potdseq', 'Inititemnbr', 'Potddesc1', 'Potddesc2', 'Potdvenditemnbr', 'Intbuompur', 'Potdref', 'Potdqtyord', 'Potdqtyrec', 'Potdpurchunitcost', 'Potdpurchtotcost', 'Potdglacct', 'Potdclos', 'Potdshopminutes', 'Potdtype', 'Potdforeigncost', 'Potdforeigncosttot', 'Potdspecordr', 'Potdprodunitcost', 'Potdbaseunitcost', 'Potdbin', 'Potdfabreturnscrap', 'Potdrfbatch', 'Potdrevision', 'Potdlandunitcost', 'Potdnbrofcases', 'Potdtariffcost', 'Potdshopcost', 'Potdcasesord', 'Potdmpfunitcost', 'Potdhmfunitcost', 'Potddsetunitcost', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('pothnbr', 'potdline', 'potdseq', 'inititemnbr', 'potddesc1', 'potddesc2', 'potdvenditemnbr', 'intbuompur', 'potdref', 'potdqtyord', 'potdqtyrec', 'potdpurchunitcost', 'potdpurchtotcost', 'potdglacct', 'potdclos', 'potdshopminutes', 'potdtype', 'potdforeigncost', 'potdforeigncosttot', 'potdspecordr', 'potdprodunitcost', 'potdbaseunitcost', 'potdbin', 'potdfabreturnscrap', 'potdrfbatch', 'potdrevision', 'potdlandunitcost', 'potdnbrofcases', 'potdtariffcost', 'potdshopcost', 'potdcasesord', 'potdmpfunitcost', 'potdhmfunitcost', 'potddsetunitcost', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR, PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1, PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2, PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR, PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR, PurchaseOrderDetailReceivingTableMap::COL_POTDREF, PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD, PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC, PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT, PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS, PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES, PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE, PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT, PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR, PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDBIN, PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP, PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH, PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION, PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES, PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDCASESORD, PurchaseOrderDetailReceivingTableMap::COL_POTDMPFUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDHMFUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_POTDDSETUNITCOST, PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD, PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD, PurchaseOrderDetailReceivingTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PothNbr', 'PotdLine', 'PotdSeq', 'InitItemNbr', 'PotdDesc1', 'PotdDesc2', 'PotdVendItemNbr', 'IntbUomPur', 'PotdRef', 'PotdQtyOrd', 'PotdQtyRec', 'PotdPurchUnitCost', 'PotdPurchTotCost', 'PotdGlAcct', 'PotdClos', 'PotdShopMinutes', 'PotdType', 'PotdForeignCost', 'PotdForeignCostTot', 'PotdSpecOrdr', 'PotdProdUnitCost', 'PotdBaseUnitCost', 'PotdBin', 'PotdFabReturnScrap', 'PotdRfBatch', 'PotdRevision', 'PotdLandUnitCost', 'PotdNbrOfCases', 'PotdTariffCost', 'PotdShopCost', 'PotdCasesOrd', 'PotdMpfUnitCost', 'PotdHmfUnitCost', 'PotdDsetUnitCost', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pothnbr' => 0, 'Potdline' => 1, 'Potdseq' => 2, 'Inititemnbr' => 3, 'Potddesc1' => 4, 'Potddesc2' => 5, 'Potdvenditemnbr' => 6, 'Intbuompur' => 7, 'Potdref' => 8, 'Potdqtyord' => 9, 'Potdqtyrec' => 10, 'Potdpurchunitcost' => 11, 'Potdpurchtotcost' => 12, 'Potdglacct' => 13, 'Potdclos' => 14, 'Potdshopminutes' => 15, 'Potdtype' => 16, 'Potdforeigncost' => 17, 'Potdforeigncosttot' => 18, 'Potdspecordr' => 19, 'Potdprodunitcost' => 20, 'Potdbaseunitcost' => 21, 'Potdbin' => 22, 'Potdfabreturnscrap' => 23, 'Potdrfbatch' => 24, 'Potdrevision' => 25, 'Potdlandunitcost' => 26, 'Potdnbrofcases' => 27, 'Potdtariffcost' => 28, 'Potdshopcost' => 29, 'Potdcasesord' => 30, 'Potdmpfunitcost' => 31, 'Potdhmfunitcost' => 32, 'Potddsetunitcost' => 33, 'Dateupdtd' => 34, 'Timeupdtd' => 35, 'Dummy' => 36, ),
        self::TYPE_CAMELNAME     => array('pothnbr' => 0, 'potdline' => 1, 'potdseq' => 2, 'inititemnbr' => 3, 'potddesc1' => 4, 'potddesc2' => 5, 'potdvenditemnbr' => 6, 'intbuompur' => 7, 'potdref' => 8, 'potdqtyord' => 9, 'potdqtyrec' => 10, 'potdpurchunitcost' => 11, 'potdpurchtotcost' => 12, 'potdglacct' => 13, 'potdclos' => 14, 'potdshopminutes' => 15, 'potdtype' => 16, 'potdforeigncost' => 17, 'potdforeigncosttot' => 18, 'potdspecordr' => 19, 'potdprodunitcost' => 20, 'potdbaseunitcost' => 21, 'potdbin' => 22, 'potdfabreturnscrap' => 23, 'potdrfbatch' => 24, 'potdrevision' => 25, 'potdlandunitcost' => 26, 'potdnbrofcases' => 27, 'potdtariffcost' => 28, 'potdshopcost' => 29, 'potdcasesord' => 30, 'potdmpfunitcost' => 31, 'potdhmfunitcost' => 32, 'potddsetunitcost' => 33, 'dateupdtd' => 34, 'timeupdtd' => 35, 'dummy' => 36, ),
        self::TYPE_COLNAME       => array(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR => 0, PurchaseOrderDetailReceivingTableMap::COL_POTDLINE => 1, PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ => 2, PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR => 3, PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1 => 4, PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2 => 5, PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR => 6, PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR => 7, PurchaseOrderDetailReceivingTableMap::COL_POTDREF => 8, PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD => 9, PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC => 10, PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST => 11, PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST => 12, PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT => 13, PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS => 14, PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES => 15, PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE => 16, PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST => 17, PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT => 18, PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR => 19, PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST => 20, PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST => 21, PurchaseOrderDetailReceivingTableMap::COL_POTDBIN => 22, PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP => 23, PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH => 24, PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION => 25, PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST => 26, PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES => 27, PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST => 28, PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST => 29, PurchaseOrderDetailReceivingTableMap::COL_POTDCASESORD => 30, PurchaseOrderDetailReceivingTableMap::COL_POTDMPFUNITCOST => 31, PurchaseOrderDetailReceivingTableMap::COL_POTDHMFUNITCOST => 32, PurchaseOrderDetailReceivingTableMap::COL_POTDDSETUNITCOST => 33, PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD => 34, PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD => 35, PurchaseOrderDetailReceivingTableMap::COL_DUMMY => 36, ),
        self::TYPE_FIELDNAME     => array('PothNbr' => 0, 'PotdLine' => 1, 'PotdSeq' => 2, 'InitItemNbr' => 3, 'PotdDesc1' => 4, 'PotdDesc2' => 5, 'PotdVendItemNbr' => 6, 'IntbUomPur' => 7, 'PotdRef' => 8, 'PotdQtyOrd' => 9, 'PotdQtyRec' => 10, 'PotdPurchUnitCost' => 11, 'PotdPurchTotCost' => 12, 'PotdGlAcct' => 13, 'PotdClos' => 14, 'PotdShopMinutes' => 15, 'PotdType' => 16, 'PotdForeignCost' => 17, 'PotdForeignCostTot' => 18, 'PotdSpecOrdr' => 19, 'PotdProdUnitCost' => 20, 'PotdBaseUnitCost' => 21, 'PotdBin' => 22, 'PotdFabReturnScrap' => 23, 'PotdRfBatch' => 24, 'PotdRevision' => 25, 'PotdLandUnitCost' => 26, 'PotdNbrOfCases' => 27, 'PotdTariffCost' => 28, 'PotdShopCost' => 29, 'PotdCasesOrd' => 30, 'PotdMpfUnitCost' => 31, 'PotdHmfUnitCost' => 32, 'PotdDsetUnitCost' => 33, 'DateUpdtd' => 34, 'TimeUpdtd' => 35, 'dummy' => 36, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
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
        $this->setName('po_tran_det');
        $this->setPhpName('PurchaseOrderDetailReceiving');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PurchaseOrderDetailReceiving');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'INTEGER' , 'po_head', 'PohdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'INTEGER' , 'po_tran_head', 'PothNbr', true, 8, 0);
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'INTEGER' , 'po_detail', 'PohdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('PotdLine', 'Potdline', 'INTEGER' , 'po_detail', 'PodtLine', true, 4, 0);
        $this->addPrimaryKey('PotdSeq', 'Potdseq', 'INTEGER', true, 4, 0);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('PotdDesc1', 'Potddesc1', 'VARCHAR', true, 35, '');
        $this->addColumn('PotdDesc2', 'Potddesc2', 'VARCHAR', true, 35, '');
        $this->addColumn('PotdVendItemNbr', 'Potdvenditemnbr', 'VARCHAR', true, 30, '');
        $this->addForeignKey('IntbUomPur', 'Intbuompur', 'VARCHAR', 'inv_uom_sale', 'IntbUomSale', true, 4, '');
        $this->addColumn('PotdRef', 'Potdref', 'VARCHAR', true, 15, '');
        $this->addColumn('PotdQtyOrd', 'Potdqtyord', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdQtyRec', 'Potdqtyrec', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdPurchUnitCost', 'Potdpurchunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdPurchTotCost', 'Potdpurchtotcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdGlAcct', 'Potdglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('PotdClos', 'Potdclos', 'CHAR', true, null, '');
        $this->addColumn('PotdShopMinutes', 'Potdshopminutes', 'INTEGER', true, 6, 0);
        $this->addColumn('PotdType', 'Potdtype', 'CHAR', true, null, '');
        $this->addColumn('PotdForeignCost', 'Potdforeigncost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdForeignCostTot', 'Potdforeigncosttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdSpecOrdr', 'Potdspecordr', 'CHAR', true, null, '');
        $this->addColumn('PotdProdUnitCost', 'Potdprodunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdBaseUnitCost', 'Potdbaseunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdBin', 'Potdbin', 'VARCHAR', true, 8, '');
        $this->addColumn('PotdFabReturnScrap', 'Potdfabreturnscrap', 'CHAR', true, null, '');
        $this->addColumn('PotdRfBatch', 'Potdrfbatch', 'VARCHAR', true, 8, '');
        $this->addColumn('PotdRevision', 'Potdrevision', 'VARCHAR', true, 10, '');
        $this->addColumn('PotdLandUnitCost', 'Potdlandunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdNbrOfCases', 'Potdnbrofcases', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdTariffCost', 'Potdtariffcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdShopCost', 'Potdshopcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdCasesOrd', 'Potdcasesord', 'INTEGER', true, 6, 0);
        $this->addColumn('PotdMpfUnitCost', 'Potdmpfunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdHmfUnitCost', 'Potdhmfunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PotdDsetUnitCost', 'Potddsetunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PohdNbr',
  ),
), null, null, null, false);
        $this->addRelation('PoReceivingHead', '\\PoReceivingHead', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PothNbr',
  ),
), null, null, null, false);
        $this->addRelation('PurchaseOrderDetail', '\\PurchaseOrderDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PohdNbr',
  ),
  1 =>
  array (
    0 => ':PotdLine',
    1 => ':PodtLine',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('UnitofMeasureSale', '\\UnitofMeasureSale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbUomPur',
    1 => ':IntbUomSale',
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
     * @param \PurchaseOrderDetailReceiving $obj A \PurchaseOrderDetailReceiving object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPothnbr() || is_scalar($obj->getPothnbr()) || is_callable([$obj->getPothnbr(), '__toString']) ? (string) $obj->getPothnbr() : $obj->getPothnbr()), (null === $obj->getPotdline() || is_scalar($obj->getPotdline()) || is_callable([$obj->getPotdline(), '__toString']) ? (string) $obj->getPotdline() : $obj->getPotdline()), (null === $obj->getPotdseq() || is_scalar($obj->getPotdseq()) || is_callable([$obj->getPotdseq(), '__toString']) ? (string) $obj->getPotdseq() : $obj->getPotdseq())]);
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
     * @param mixed $value A \PurchaseOrderDetailReceiving object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \PurchaseOrderDetailReceiving) {
                $key = serialize([(null === $value->getPothnbr() || is_scalar($value->getPothnbr()) || is_callable([$value->getPothnbr(), '__toString']) ? (string) $value->getPothnbr() : $value->getPothnbr()), (null === $value->getPotdline() || is_scalar($value->getPotdline()) || is_callable([$value->getPotdline(), '__toString']) ? (string) $value->getPotdline() : $value->getPotdline()), (null === $value->getPotdseq() || is_scalar($value->getPotdseq()) || is_callable([$value->getPotdseq(), '__toString']) ? (string) $value->getPotdseq() : $value->getPotdseq())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \PurchaseOrderDetailReceiving object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Potdline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Potdseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PurchaseOrderDetailReceivingTableMap::CLASS_DEFAULT : PurchaseOrderDetailReceivingTableMap::OM_CLASS;
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
     * @return array           (PurchaseOrderDetailReceiving object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PurchaseOrderDetailReceivingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PurchaseOrderDetailReceivingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PurchaseOrderDetailReceivingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PurchaseOrderDetailReceivingTableMap::OM_CLASS;
            /** @var PurchaseOrderDetailReceiving $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PurchaseOrderDetailReceivingTableMap::addInstanceToPool($obj, $key);
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
            $key = PurchaseOrderDetailReceivingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PurchaseOrderDetailReceivingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PurchaseOrderDetailReceiving $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PurchaseOrderDetailReceivingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDREF);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDBIN);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDCASESORD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDMPFUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDHMFUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_POTDDSETUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceivingTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PothNbr');
            $criteria->addSelectColumn($alias . '.PotdLine');
            $criteria->addSelectColumn($alias . '.PotdSeq');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.PotdDesc1');
            $criteria->addSelectColumn($alias . '.PotdDesc2');
            $criteria->addSelectColumn($alias . '.PotdVendItemNbr');
            $criteria->addSelectColumn($alias . '.IntbUomPur');
            $criteria->addSelectColumn($alias . '.PotdRef');
            $criteria->addSelectColumn($alias . '.PotdQtyOrd');
            $criteria->addSelectColumn($alias . '.PotdQtyRec');
            $criteria->addSelectColumn($alias . '.PotdPurchUnitCost');
            $criteria->addSelectColumn($alias . '.PotdPurchTotCost');
            $criteria->addSelectColumn($alias . '.PotdGlAcct');
            $criteria->addSelectColumn($alias . '.PotdClos');
            $criteria->addSelectColumn($alias . '.PotdShopMinutes');
            $criteria->addSelectColumn($alias . '.PotdType');
            $criteria->addSelectColumn($alias . '.PotdForeignCost');
            $criteria->addSelectColumn($alias . '.PotdForeignCostTot');
            $criteria->addSelectColumn($alias . '.PotdSpecOrdr');
            $criteria->addSelectColumn($alias . '.PotdProdUnitCost');
            $criteria->addSelectColumn($alias . '.PotdBaseUnitCost');
            $criteria->addSelectColumn($alias . '.PotdBin');
            $criteria->addSelectColumn($alias . '.PotdFabReturnScrap');
            $criteria->addSelectColumn($alias . '.PotdRfBatch');
            $criteria->addSelectColumn($alias . '.PotdRevision');
            $criteria->addSelectColumn($alias . '.PotdLandUnitCost');
            $criteria->addSelectColumn($alias . '.PotdNbrOfCases');
            $criteria->addSelectColumn($alias . '.PotdTariffCost');
            $criteria->addSelectColumn($alias . '.PotdShopCost');
            $criteria->addSelectColumn($alias . '.PotdCasesOrd');
            $criteria->addSelectColumn($alias . '.PotdMpfUnitCost');
            $criteria->addSelectColumn($alias . '.PotdHmfUnitCost');
            $criteria->addSelectColumn($alias . '.PotdDsetUnitCost');
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
        return Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME)->getTable(PurchaseOrderDetailReceivingTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PurchaseOrderDetailReceivingTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PurchaseOrderDetailReceivingTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a PurchaseOrderDetailReceiving or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PurchaseOrderDetailReceiving object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PurchaseOrderDetailReceiving) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = PurchaseOrderDetailReceivingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PurchaseOrderDetailReceivingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PurchaseOrderDetailReceivingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_tran_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PurchaseOrderDetailReceivingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PurchaseOrderDetailReceiving or Criteria object.
     *
     * @param mixed               $criteria Criteria or PurchaseOrderDetailReceiving object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PurchaseOrderDetailReceiving object
        }


        // Set the correct dbName
        $query = PurchaseOrderDetailReceivingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PurchaseOrderDetailReceivingTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PurchaseOrderDetailReceivingTableMap::buildTableMap();
