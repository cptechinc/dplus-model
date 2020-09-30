<?php

namespace Map;

use \ItemPricingDiscount;
use \ItemPricingDiscountQuery;
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
 * This class defines the structure of the 'so_price_discount' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemPricingDiscountTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemPricingDiscountTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_price_discount';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemPricingDiscount';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemPricingDiscount';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 35;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 35;

    /**
     * the column name for the OepcType field
     */
    const COL_OEPCTYPE = 'so_price_discount.OepcType';

    /**
     * the column name for the OepcTblType field
     */
    const COL_OEPCTBLTYPE = 'so_price_discount.OepcTblType';

    /**
     * the column name for the OepcStrtDate field
     */
    const COL_OEPCSTRTDATE = 'so_price_discount.OepcStrtDate';

    /**
     * the column name for the OepcCustId field
     */
    const COL_OEPCCUSTID = 'so_price_discount.OepcCustId';

    /**
     * the column name for the OepcCustCode field
     */
    const COL_OEPCCUSTCODE = 'so_price_discount.OepcCustCode';

    /**
     * the column name for the OepcItemNbr field
     */
    const COL_OEPCITEMNBR = 'so_price_discount.OepcItemNbr';

    /**
     * the column name for the OepcItemGrup field
     */
    const COL_OEPCITEMGRUP = 'so_price_discount.OepcItemGrup';

    /**
     * the column name for the OepcSp field
     */
    const COL_OEPCSP = 'so_price_discount.OepcSp';

    /**
     * the column name for the OepcMeth field
     */
    const COL_OEPCMETH = 'so_price_discount.OepcMeth';

    /**
     * the column name for the OepcCode field
     */
    const COL_OEPCCODE = 'so_price_discount.OepcCode';

    /**
     * the column name for the OepcPcnt field
     */
    const COL_OEPCPCNT = 'so_price_discount.OepcPcnt';

    /**
     * the column name for the OepcPricBase field
     */
    const COL_OEPCPRICBASE = 'so_price_discount.OepcPricBase';

    /**
     * the column name for the OepcPricUnit1 field
     */
    const COL_OEPCPRICUNIT1 = 'so_price_discount.OepcPricUnit1';

    /**
     * the column name for the OepcPricPric1 field
     */
    const COL_OEPCPRICPRIC1 = 'so_price_discount.OepcPricPric1';

    /**
     * the column name for the OepcPricUom1 field
     */
    const COL_OEPCPRICUOM1 = 'so_price_discount.OepcPricUom1';

    /**
     * the column name for the OepcPricUnit2 field
     */
    const COL_OEPCPRICUNIT2 = 'so_price_discount.OepcPricUnit2';

    /**
     * the column name for the OepcPricPric2 field
     */
    const COL_OEPCPRICPRIC2 = 'so_price_discount.OepcPricPric2';

    /**
     * the column name for the OepcPricUom2 field
     */
    const COL_OEPCPRICUOM2 = 'so_price_discount.OepcPricUom2';

    /**
     * the column name for the OepcPricUnit3 field
     */
    const COL_OEPCPRICUNIT3 = 'so_price_discount.OepcPricUnit3';

    /**
     * the column name for the OepcPricPric3 field
     */
    const COL_OEPCPRICPRIC3 = 'so_price_discount.OepcPricPric3';

    /**
     * the column name for the OepcPricUom3 field
     */
    const COL_OEPCPRICUOM3 = 'so_price_discount.OepcPricUom3';

    /**
     * the column name for the OepcPricUnit4 field
     */
    const COL_OEPCPRICUNIT4 = 'so_price_discount.OepcPricUnit4';

    /**
     * the column name for the OepcPricPric4 field
     */
    const COL_OEPCPRICPRIC4 = 'so_price_discount.OepcPricPric4';

    /**
     * the column name for the OepcPricUom4 field
     */
    const COL_OEPCPRICUOM4 = 'so_price_discount.OepcPricUom4';

    /**
     * the column name for the OepcPricUnit5 field
     */
    const COL_OEPCPRICUNIT5 = 'so_price_discount.OepcPricUnit5';

    /**
     * the column name for the OepcPricPric5 field
     */
    const COL_OEPCPRICPRIC5 = 'so_price_discount.OepcPricPric5';

    /**
     * the column name for the OepcPricUom5 field
     */
    const COL_OEPCPRICUOM5 = 'so_price_discount.OepcPricUom5';

    /**
     * the column name for the OepcStanCost field
     */
    const COL_OEPCSTANCOST = 'so_price_discount.OepcStanCost';

    /**
     * the column name for the OepcEndDate field
     */
    const COL_OEPCENDDATE = 'so_price_discount.OepcEndDate';

    /**
     * the column name for the OepcQtyBrk field
     */
    const COL_OEPCQTYBRK = 'so_price_discount.OepcQtyBrk';

    /**
     * the column name for the OepcContCost field
     */
    const COL_OEPCCONTCOST = 'so_price_discount.OepcContCost';

    /**
     * the column name for the OepcLastChgDate field
     */
    const COL_OEPCLASTCHGDATE = 'so_price_discount.OepcLastChgDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_price_discount.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_price_discount.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_price_discount.dummy';

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
        self::TYPE_PHPNAME       => array('Oepctype', 'Oepctbltype', 'Oepcstrtdate', 'Oepccustid', 'Oepccustcode', 'Oepcitemnbr', 'Oepcitemgrup', 'Oepcsp', 'Oepcmeth', 'Oepccode', 'Oepcpcnt', 'Oepcpricbase', 'Oepcpricunit1', 'Oepcpricpric1', 'Oepcpricuom1', 'Oepcpricunit2', 'Oepcpricpric2', 'Oepcpricuom2', 'Oepcpricunit3', 'Oepcpricpric3', 'Oepcpricuom3', 'Oepcpricunit4', 'Oepcpricpric4', 'Oepcpricuom4', 'Oepcpricunit5', 'Oepcpricpric5', 'Oepcpricuom5', 'Oepcstancost', 'Oepcenddate', 'Oepcqtybrk', 'Oepccontcost', 'Oepclastchgdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oepctype', 'oepctbltype', 'oepcstrtdate', 'oepccustid', 'oepccustcode', 'oepcitemnbr', 'oepcitemgrup', 'oepcsp', 'oepcmeth', 'oepccode', 'oepcpcnt', 'oepcpricbase', 'oepcpricunit1', 'oepcpricpric1', 'oepcpricuom1', 'oepcpricunit2', 'oepcpricpric2', 'oepcpricuom2', 'oepcpricunit3', 'oepcpricpric3', 'oepcpricuom3', 'oepcpricunit4', 'oepcpricpric4', 'oepcpricuom4', 'oepcpricunit5', 'oepcpricpric5', 'oepcpricuom5', 'oepcstancost', 'oepcenddate', 'oepcqtybrk', 'oepccontcost', 'oepclastchgdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemPricingDiscountTableMap::COL_OEPCTYPE, ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, ItemPricingDiscountTableMap::COL_OEPCCUSTID, ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, ItemPricingDiscountTableMap::COL_OEPCITEMNBR, ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, ItemPricingDiscountTableMap::COL_OEPCSP, ItemPricingDiscountTableMap::COL_OEPCMETH, ItemPricingDiscountTableMap::COL_OEPCCODE, ItemPricingDiscountTableMap::COL_OEPCPCNT, ItemPricingDiscountTableMap::COL_OEPCPRICBASE, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1, ItemPricingDiscountTableMap::COL_OEPCPRICUOM1, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2, ItemPricingDiscountTableMap::COL_OEPCPRICUOM2, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3, ItemPricingDiscountTableMap::COL_OEPCPRICUOM3, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4, ItemPricingDiscountTableMap::COL_OEPCPRICUOM4, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5, ItemPricingDiscountTableMap::COL_OEPCPRICUOM5, ItemPricingDiscountTableMap::COL_OEPCSTANCOST, ItemPricingDiscountTableMap::COL_OEPCENDDATE, ItemPricingDiscountTableMap::COL_OEPCQTYBRK, ItemPricingDiscountTableMap::COL_OEPCCONTCOST, ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE, ItemPricingDiscountTableMap::COL_DATEUPDTD, ItemPricingDiscountTableMap::COL_TIMEUPDTD, ItemPricingDiscountTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OepcType', 'OepcTblType', 'OepcStrtDate', 'OepcCustId', 'OepcCustCode', 'OepcItemNbr', 'OepcItemGrup', 'OepcSp', 'OepcMeth', 'OepcCode', 'OepcPcnt', 'OepcPricBase', 'OepcPricUnit1', 'OepcPricPric1', 'OepcPricUom1', 'OepcPricUnit2', 'OepcPricPric2', 'OepcPricUom2', 'OepcPricUnit3', 'OepcPricPric3', 'OepcPricUom3', 'OepcPricUnit4', 'OepcPricPric4', 'OepcPricUom4', 'OepcPricUnit5', 'OepcPricPric5', 'OepcPricUom5', 'OepcStanCost', 'OepcEndDate', 'OepcQtyBrk', 'OepcContCost', 'OepcLastChgDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oepctype' => 0, 'Oepctbltype' => 1, 'Oepcstrtdate' => 2, 'Oepccustid' => 3, 'Oepccustcode' => 4, 'Oepcitemnbr' => 5, 'Oepcitemgrup' => 6, 'Oepcsp' => 7, 'Oepcmeth' => 8, 'Oepccode' => 9, 'Oepcpcnt' => 10, 'Oepcpricbase' => 11, 'Oepcpricunit1' => 12, 'Oepcpricpric1' => 13, 'Oepcpricuom1' => 14, 'Oepcpricunit2' => 15, 'Oepcpricpric2' => 16, 'Oepcpricuom2' => 17, 'Oepcpricunit3' => 18, 'Oepcpricpric3' => 19, 'Oepcpricuom3' => 20, 'Oepcpricunit4' => 21, 'Oepcpricpric4' => 22, 'Oepcpricuom4' => 23, 'Oepcpricunit5' => 24, 'Oepcpricpric5' => 25, 'Oepcpricuom5' => 26, 'Oepcstancost' => 27, 'Oepcenddate' => 28, 'Oepcqtybrk' => 29, 'Oepccontcost' => 30, 'Oepclastchgdate' => 31, 'Dateupdtd' => 32, 'Timeupdtd' => 33, 'Dummy' => 34, ),
        self::TYPE_CAMELNAME     => array('oepctype' => 0, 'oepctbltype' => 1, 'oepcstrtdate' => 2, 'oepccustid' => 3, 'oepccustcode' => 4, 'oepcitemnbr' => 5, 'oepcitemgrup' => 6, 'oepcsp' => 7, 'oepcmeth' => 8, 'oepccode' => 9, 'oepcpcnt' => 10, 'oepcpricbase' => 11, 'oepcpricunit1' => 12, 'oepcpricpric1' => 13, 'oepcpricuom1' => 14, 'oepcpricunit2' => 15, 'oepcpricpric2' => 16, 'oepcpricuom2' => 17, 'oepcpricunit3' => 18, 'oepcpricpric3' => 19, 'oepcpricuom3' => 20, 'oepcpricunit4' => 21, 'oepcpricpric4' => 22, 'oepcpricuom4' => 23, 'oepcpricunit5' => 24, 'oepcpricpric5' => 25, 'oepcpricuom5' => 26, 'oepcstancost' => 27, 'oepcenddate' => 28, 'oepcqtybrk' => 29, 'oepccontcost' => 30, 'oepclastchgdate' => 31, 'dateupdtd' => 32, 'timeupdtd' => 33, 'dummy' => 34, ),
        self::TYPE_COLNAME       => array(ItemPricingDiscountTableMap::COL_OEPCTYPE => 0, ItemPricingDiscountTableMap::COL_OEPCTBLTYPE => 1, ItemPricingDiscountTableMap::COL_OEPCSTRTDATE => 2, ItemPricingDiscountTableMap::COL_OEPCCUSTID => 3, ItemPricingDiscountTableMap::COL_OEPCCUSTCODE => 4, ItemPricingDiscountTableMap::COL_OEPCITEMNBR => 5, ItemPricingDiscountTableMap::COL_OEPCITEMGRUP => 6, ItemPricingDiscountTableMap::COL_OEPCSP => 7, ItemPricingDiscountTableMap::COL_OEPCMETH => 8, ItemPricingDiscountTableMap::COL_OEPCCODE => 9, ItemPricingDiscountTableMap::COL_OEPCPCNT => 10, ItemPricingDiscountTableMap::COL_OEPCPRICBASE => 11, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1 => 12, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1 => 13, ItemPricingDiscountTableMap::COL_OEPCPRICUOM1 => 14, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2 => 15, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2 => 16, ItemPricingDiscountTableMap::COL_OEPCPRICUOM2 => 17, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3 => 18, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3 => 19, ItemPricingDiscountTableMap::COL_OEPCPRICUOM3 => 20, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4 => 21, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4 => 22, ItemPricingDiscountTableMap::COL_OEPCPRICUOM4 => 23, ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5 => 24, ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5 => 25, ItemPricingDiscountTableMap::COL_OEPCPRICUOM5 => 26, ItemPricingDiscountTableMap::COL_OEPCSTANCOST => 27, ItemPricingDiscountTableMap::COL_OEPCENDDATE => 28, ItemPricingDiscountTableMap::COL_OEPCQTYBRK => 29, ItemPricingDiscountTableMap::COL_OEPCCONTCOST => 30, ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE => 31, ItemPricingDiscountTableMap::COL_DATEUPDTD => 32, ItemPricingDiscountTableMap::COL_TIMEUPDTD => 33, ItemPricingDiscountTableMap::COL_DUMMY => 34, ),
        self::TYPE_FIELDNAME     => array('OepcType' => 0, 'OepcTblType' => 1, 'OepcStrtDate' => 2, 'OepcCustId' => 3, 'OepcCustCode' => 4, 'OepcItemNbr' => 5, 'OepcItemGrup' => 6, 'OepcSp' => 7, 'OepcMeth' => 8, 'OepcCode' => 9, 'OepcPcnt' => 10, 'OepcPricBase' => 11, 'OepcPricUnit1' => 12, 'OepcPricPric1' => 13, 'OepcPricUom1' => 14, 'OepcPricUnit2' => 15, 'OepcPricPric2' => 16, 'OepcPricUom2' => 17, 'OepcPricUnit3' => 18, 'OepcPricPric3' => 19, 'OepcPricUom3' => 20, 'OepcPricUnit4' => 21, 'OepcPricPric4' => 22, 'OepcPricUom4' => 23, 'OepcPricUnit5' => 24, 'OepcPricPric5' => 25, 'OepcPricUom5' => 26, 'OepcStanCost' => 27, 'OepcEndDate' => 28, 'OepcQtyBrk' => 29, 'OepcContCost' => 30, 'OepcLastChgDate' => 31, 'DateUpdtd' => 32, 'TimeUpdtd' => 33, 'dummy' => 34, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
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
        $this->setName('so_price_discount');
        $this->setPhpName('ItemPricingDiscount');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemPricingDiscount');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OepcType', 'Oepctype', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('OepcTblType', 'Oepctbltype', 'INTEGER', true, 2, 0);
        $this->addPrimaryKey('OepcStrtDate', 'Oepcstrtdate', 'INTEGER', true, 8, 0);
        $this->addForeignPrimaryKey('OepcCustId', 'Oepccustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addPrimaryKey('OepcCustCode', 'Oepccustcode', 'VARCHAR', true, 4, '');
        $this->addForeignPrimaryKey('OepcItemNbr', 'Oepcitemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('OepcItemGrup', 'Oepcitemgrup', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('OepcSp', 'Oepcsp', 'VARCHAR', true, 6, '');
        $this->addColumn('OepcMeth', 'Oepcmeth', 'VARCHAR', false, 1, null);
        $this->addColumn('OepcCode', 'Oepccode', 'VARCHAR', false, 1, null);
        $this->addColumn('OepcPcnt', 'Oepcpcnt', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricBase', 'Oepcpricbase', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricUnit1', 'Oepcpricunit1', 'INTEGER', false, 5, null);
        $this->addColumn('OepcPricPric1', 'Oepcpricpric1', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricUom1', 'Oepcpricuom1', 'VARCHAR', false, 5, null);
        $this->addColumn('OepcPricUnit2', 'Oepcpricunit2', 'INTEGER', false, 5, null);
        $this->addColumn('OepcPricPric2', 'Oepcpricpric2', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricUom2', 'Oepcpricuom2', 'VARCHAR', false, 5, null);
        $this->addColumn('OepcPricUnit3', 'Oepcpricunit3', 'INTEGER', false, 5, null);
        $this->addColumn('OepcPricPric3', 'Oepcpricpric3', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricUom3', 'Oepcpricuom3', 'VARCHAR', false, 5, null);
        $this->addColumn('OepcPricUnit4', 'Oepcpricunit4', 'INTEGER', false, 5, null);
        $this->addColumn('OepcPricPric4', 'Oepcpricpric4', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricUom4', 'Oepcpricuom4', 'VARCHAR', false, 5, null);
        $this->addColumn('OepcPricUnit5', 'Oepcpricunit5', 'INTEGER', false, 5, null);
        $this->addColumn('OepcPricPric5', 'Oepcpricpric5', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcPricUom5', 'Oepcpricuom5', 'VARCHAR', false, 5, null);
        $this->addColumn('OepcStanCost', 'Oepcstancost', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcEndDate', 'Oepcenddate', 'VARCHAR', false, 8, null);
        $this->addColumn('OepcQtyBrk', 'Oepcqtybrk', 'VARCHAR', false, 1, null);
        $this->addColumn('OepcContCost', 'Oepccontcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OepcLastChgDate', 'Oepclastchgdate', 'VARCHAR', false, 8, null);
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
    0 => ':OepcItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OepcCustId',
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
     * @param \ItemPricingDiscount $obj A \ItemPricingDiscount object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOepctype() || is_scalar($obj->getOepctype()) || is_callable([$obj->getOepctype(), '__toString']) ? (string) $obj->getOepctype() : $obj->getOepctype()), (null === $obj->getOepctbltype() || is_scalar($obj->getOepctbltype()) || is_callable([$obj->getOepctbltype(), '__toString']) ? (string) $obj->getOepctbltype() : $obj->getOepctbltype()), (null === $obj->getOepcstrtdate() || is_scalar($obj->getOepcstrtdate()) || is_callable([$obj->getOepcstrtdate(), '__toString']) ? (string) $obj->getOepcstrtdate() : $obj->getOepcstrtdate()), (null === $obj->getOepccustid() || is_scalar($obj->getOepccustid()) || is_callable([$obj->getOepccustid(), '__toString']) ? (string) $obj->getOepccustid() : $obj->getOepccustid()), (null === $obj->getOepccustcode() || is_scalar($obj->getOepccustcode()) || is_callable([$obj->getOepccustcode(), '__toString']) ? (string) $obj->getOepccustcode() : $obj->getOepccustcode()), (null === $obj->getOepcitemnbr() || is_scalar($obj->getOepcitemnbr()) || is_callable([$obj->getOepcitemnbr(), '__toString']) ? (string) $obj->getOepcitemnbr() : $obj->getOepcitemnbr()), (null === $obj->getOepcitemgrup() || is_scalar($obj->getOepcitemgrup()) || is_callable([$obj->getOepcitemgrup(), '__toString']) ? (string) $obj->getOepcitemgrup() : $obj->getOepcitemgrup()), (null === $obj->getOepcsp() || is_scalar($obj->getOepcsp()) || is_callable([$obj->getOepcsp(), '__toString']) ? (string) $obj->getOepcsp() : $obj->getOepcsp())]);
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
     * @param mixed $value A \ItemPricingDiscount object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemPricingDiscount) {
                $key = serialize([(null === $value->getOepctype() || is_scalar($value->getOepctype()) || is_callable([$value->getOepctype(), '__toString']) ? (string) $value->getOepctype() : $value->getOepctype()), (null === $value->getOepctbltype() || is_scalar($value->getOepctbltype()) || is_callable([$value->getOepctbltype(), '__toString']) ? (string) $value->getOepctbltype() : $value->getOepctbltype()), (null === $value->getOepcstrtdate() || is_scalar($value->getOepcstrtdate()) || is_callable([$value->getOepcstrtdate(), '__toString']) ? (string) $value->getOepcstrtdate() : $value->getOepcstrtdate()), (null === $value->getOepccustid() || is_scalar($value->getOepccustid()) || is_callable([$value->getOepccustid(), '__toString']) ? (string) $value->getOepccustid() : $value->getOepccustid()), (null === $value->getOepccustcode() || is_scalar($value->getOepccustcode()) || is_callable([$value->getOepccustcode(), '__toString']) ? (string) $value->getOepccustcode() : $value->getOepccustcode()), (null === $value->getOepcitemnbr() || is_scalar($value->getOepcitemnbr()) || is_callable([$value->getOepcitemnbr(), '__toString']) ? (string) $value->getOepcitemnbr() : $value->getOepcitemnbr()), (null === $value->getOepcitemgrup() || is_scalar($value->getOepcitemgrup()) || is_callable([$value->getOepcitemgrup(), '__toString']) ? (string) $value->getOepcitemgrup() : $value->getOepcitemgrup()), (null === $value->getOepcsp() || is_scalar($value->getOepcsp()) || is_callable([$value->getOepcsp(), '__toString']) ? (string) $value->getOepcsp() : $value->getOepcsp())]);

            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6]), (null === $value[7] || is_scalar($value[7]) || is_callable([$value[7], '__toString']) ? (string) $value[7] : $value[7])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemPricingDiscount object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Oepctype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oepctbltype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Oepcstrtdate', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Oepccustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Oepccustcode', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Oepcitemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Oepcitemgrup', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 7 + $offset
                : self::translateFieldName('Oepcsp', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemPricingDiscountTableMap::CLASS_DEFAULT : ItemPricingDiscountTableMap::OM_CLASS;
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
     * @return array           (ItemPricingDiscount object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemPricingDiscountTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemPricingDiscountTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemPricingDiscountTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemPricingDiscountTableMap::OM_CLASS;
            /** @var ItemPricingDiscount $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemPricingDiscountTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemPricingDiscountTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemPricingDiscountTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemPricingDiscount $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemPricingDiscountTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCTYPE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCCUSTID);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCITEMNBR);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCSP);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCMETH);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCCODE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPCNT);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICBASE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUOM1);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUOM2);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUOM3);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUOM4);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCPRICUOM5);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCSTANCOST);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCENDDATE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCQTYBRK);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCCONTCOST);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemPricingDiscountTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OepcType');
            $criteria->addSelectColumn($alias . '.OepcTblType');
            $criteria->addSelectColumn($alias . '.OepcStrtDate');
            $criteria->addSelectColumn($alias . '.OepcCustId');
            $criteria->addSelectColumn($alias . '.OepcCustCode');
            $criteria->addSelectColumn($alias . '.OepcItemNbr');
            $criteria->addSelectColumn($alias . '.OepcItemGrup');
            $criteria->addSelectColumn($alias . '.OepcSp');
            $criteria->addSelectColumn($alias . '.OepcMeth');
            $criteria->addSelectColumn($alias . '.OepcCode');
            $criteria->addSelectColumn($alias . '.OepcPcnt');
            $criteria->addSelectColumn($alias . '.OepcPricBase');
            $criteria->addSelectColumn($alias . '.OepcPricUnit1');
            $criteria->addSelectColumn($alias . '.OepcPricPric1');
            $criteria->addSelectColumn($alias . '.OepcPricUom1');
            $criteria->addSelectColumn($alias . '.OepcPricUnit2');
            $criteria->addSelectColumn($alias . '.OepcPricPric2');
            $criteria->addSelectColumn($alias . '.OepcPricUom2');
            $criteria->addSelectColumn($alias . '.OepcPricUnit3');
            $criteria->addSelectColumn($alias . '.OepcPricPric3');
            $criteria->addSelectColumn($alias . '.OepcPricUom3');
            $criteria->addSelectColumn($alias . '.OepcPricUnit4');
            $criteria->addSelectColumn($alias . '.OepcPricPric4');
            $criteria->addSelectColumn($alias . '.OepcPricUom4');
            $criteria->addSelectColumn($alias . '.OepcPricUnit5');
            $criteria->addSelectColumn($alias . '.OepcPricPric5');
            $criteria->addSelectColumn($alias . '.OepcPricUom5');
            $criteria->addSelectColumn($alias . '.OepcStanCost');
            $criteria->addSelectColumn($alias . '.OepcEndDate');
            $criteria->addSelectColumn($alias . '.OepcQtyBrk');
            $criteria->addSelectColumn($alias . '.OepcContCost');
            $criteria->addSelectColumn($alias . '.OepcLastChgDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemPricingDiscountTableMap::DATABASE_NAME)->getTable(ItemPricingDiscountTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemPricingDiscountTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemPricingDiscountTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemPricingDiscountTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemPricingDiscount or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemPricingDiscount object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemPricingDiscount) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemPricingDiscountTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCSP, $value[7]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemPricingDiscountQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemPricingDiscountTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemPricingDiscountTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_price_discount table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemPricingDiscountQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemPricingDiscount or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemPricingDiscount object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemPricingDiscount object
        }


        // Set the correct dbName
        $query = ItemPricingDiscountQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemPricingDiscountTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemPricingDiscountTableMap::buildTableMap();
