<?php

namespace Map;

use \InvWhseItemBin;
use \InvWhseItemBinQuery;
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
 * This class defines the structure of the 'inv_bin_area' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvWhseItemBinTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvWhseItemBinTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_bin_area';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvWhseItemBin';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvWhseItemBin';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 32;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 32;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_bin_area.InitItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'inv_bin_area.IntbWhse';

    /**
     * the column name for the BinaBin1 field
     */
    const COL_BINABIN1 = 'inv_bin_area.BinaBin1';

    /**
     * the column name for the BinaMin1 field
     */
    const COL_BINAMIN1 = 'inv_bin_area.BinaMin1';

    /**
     * the column name for the BinaMax1 field
     */
    const COL_BINAMAX1 = 'inv_bin_area.BinaMax1';

    /**
     * the column name for the BinaBin2 field
     */
    const COL_BINABIN2 = 'inv_bin_area.BinaBin2';

    /**
     * the column name for the BinaMin2 field
     */
    const COL_BINAMIN2 = 'inv_bin_area.BinaMin2';

    /**
     * the column name for the BinaMax2 field
     */
    const COL_BINAMAX2 = 'inv_bin_area.BinaMax2';

    /**
     * the column name for the BinaBin3 field
     */
    const COL_BINABIN3 = 'inv_bin_area.BinaBin3';

    /**
     * the column name for the BinaMin3 field
     */
    const COL_BINAMIN3 = 'inv_bin_area.BinaMin3';

    /**
     * the column name for the BinaMax3 field
     */
    const COL_BINAMAX3 = 'inv_bin_area.BinaMax3';

    /**
     * the column name for the BinaBin4 field
     */
    const COL_BINABIN4 = 'inv_bin_area.BinaBin4';

    /**
     * the column name for the BinaMin4 field
     */
    const COL_BINAMIN4 = 'inv_bin_area.BinaMin4';

    /**
     * the column name for the BinaMax4 field
     */
    const COL_BINAMAX4 = 'inv_bin_area.BinaMax4';

    /**
     * the column name for the BinaBin5 field
     */
    const COL_BINABIN5 = 'inv_bin_area.BinaBin5';

    /**
     * the column name for the BinaMin5 field
     */
    const COL_BINAMIN5 = 'inv_bin_area.BinaMin5';

    /**
     * the column name for the BinaMax5 field
     */
    const COL_BINAMAX5 = 'inv_bin_area.BinaMax5';

    /**
     * the column name for the BinaBin6 field
     */
    const COL_BINABIN6 = 'inv_bin_area.BinaBin6';

    /**
     * the column name for the BinaMin6 field
     */
    const COL_BINAMIN6 = 'inv_bin_area.BinaMin6';

    /**
     * the column name for the BinaMax6 field
     */
    const COL_BINAMAX6 = 'inv_bin_area.BinaMax6';

    /**
     * the column name for the BinaBin7 field
     */
    const COL_BINABIN7 = 'inv_bin_area.BinaBin7';

    /**
     * the column name for the BinaMin7 field
     */
    const COL_BINAMIN7 = 'inv_bin_area.BinaMin7';

    /**
     * the column name for the BinaMax7 field
     */
    const COL_BINAMAX7 = 'inv_bin_area.BinaMax7';

    /**
     * the column name for the BinaBin8 field
     */
    const COL_BINABIN8 = 'inv_bin_area.BinaBin8';

    /**
     * the column name for the BinaMin8 field
     */
    const COL_BINAMIN8 = 'inv_bin_area.BinaMin8';

    /**
     * the column name for the BinaMax8 field
     */
    const COL_BINAMAX8 = 'inv_bin_area.BinaMax8';

    /**
     * the column name for the BinaBin9 field
     */
    const COL_BINABIN9 = 'inv_bin_area.BinaBin9';

    /**
     * the column name for the BinaMin9 field
     */
    const COL_BINAMIN9 = 'inv_bin_area.BinaMin9';

    /**
     * the column name for the BinaMax9 field
     */
    const COL_BINAMAX9 = 'inv_bin_area.BinaMax9';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_bin_area.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_bin_area.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_bin_area.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Intbwhse', 'Binabin1', 'Binamin1', 'Binamax1', 'Binabin2', 'Binamin2', 'Binamax2', 'Binabin3', 'Binamin3', 'Binamax3', 'Binabin4', 'Binamin4', 'Binamax4', 'Binabin5', 'Binamin5', 'Binamax5', 'Binabin6', 'Binamin6', 'Binamax6', 'Binabin7', 'Binamin7', 'Binamax7', 'Binabin8', 'Binamin8', 'Binamax8', 'Binabin9', 'Binamin9', 'Binamax9', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'intbwhse', 'binabin1', 'binamin1', 'binamax1', 'binabin2', 'binamin2', 'binamax2', 'binabin3', 'binamin3', 'binamax3', 'binabin4', 'binamin4', 'binamax4', 'binabin5', 'binamin5', 'binamax5', 'binabin6', 'binamin6', 'binamax6', 'binabin7', 'binamin7', 'binamax7', 'binabin8', 'binamin8', 'binamax8', 'binabin9', 'binamin9', 'binamax9', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvWhseItemBinTableMap::COL_INITITEMNBR, InvWhseItemBinTableMap::COL_INTBWHSE, InvWhseItemBinTableMap::COL_BINABIN1, InvWhseItemBinTableMap::COL_BINAMIN1, InvWhseItemBinTableMap::COL_BINAMAX1, InvWhseItemBinTableMap::COL_BINABIN2, InvWhseItemBinTableMap::COL_BINAMIN2, InvWhseItemBinTableMap::COL_BINAMAX2, InvWhseItemBinTableMap::COL_BINABIN3, InvWhseItemBinTableMap::COL_BINAMIN3, InvWhseItemBinTableMap::COL_BINAMAX3, InvWhseItemBinTableMap::COL_BINABIN4, InvWhseItemBinTableMap::COL_BINAMIN4, InvWhseItemBinTableMap::COL_BINAMAX4, InvWhseItemBinTableMap::COL_BINABIN5, InvWhseItemBinTableMap::COL_BINAMIN5, InvWhseItemBinTableMap::COL_BINAMAX5, InvWhseItemBinTableMap::COL_BINABIN6, InvWhseItemBinTableMap::COL_BINAMIN6, InvWhseItemBinTableMap::COL_BINAMAX6, InvWhseItemBinTableMap::COL_BINABIN7, InvWhseItemBinTableMap::COL_BINAMIN7, InvWhseItemBinTableMap::COL_BINAMAX7, InvWhseItemBinTableMap::COL_BINABIN8, InvWhseItemBinTableMap::COL_BINAMIN8, InvWhseItemBinTableMap::COL_BINAMAX8, InvWhseItemBinTableMap::COL_BINABIN9, InvWhseItemBinTableMap::COL_BINAMIN9, InvWhseItemBinTableMap::COL_BINAMAX9, InvWhseItemBinTableMap::COL_DATEUPDTD, InvWhseItemBinTableMap::COL_TIMEUPDTD, InvWhseItemBinTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'IntbWhse', 'BinaBin1', 'BinaMin1', 'BinaMax1', 'BinaBin2', 'BinaMin2', 'BinaMax2', 'BinaBin3', 'BinaMin3', 'BinaMax3', 'BinaBin4', 'BinaMin4', 'BinaMax4', 'BinaBin5', 'BinaMin5', 'BinaMax5', 'BinaBin6', 'BinaMin6', 'BinaMax6', 'BinaBin7', 'BinaMin7', 'BinaMax7', 'BinaBin8', 'BinaMin8', 'BinaMax8', 'BinaBin9', 'BinaMin9', 'BinaMax9', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Intbwhse' => 1, 'Binabin1' => 2, 'Binamin1' => 3, 'Binamax1' => 4, 'Binabin2' => 5, 'Binamin2' => 6, 'Binamax2' => 7, 'Binabin3' => 8, 'Binamin3' => 9, 'Binamax3' => 10, 'Binabin4' => 11, 'Binamin4' => 12, 'Binamax4' => 13, 'Binabin5' => 14, 'Binamin5' => 15, 'Binamax5' => 16, 'Binabin6' => 17, 'Binamin6' => 18, 'Binamax6' => 19, 'Binabin7' => 20, 'Binamin7' => 21, 'Binamax7' => 22, 'Binabin8' => 23, 'Binamin8' => 24, 'Binamax8' => 25, 'Binabin9' => 26, 'Binamin9' => 27, 'Binamax9' => 28, 'Dateupdtd' => 29, 'Timeupdtd' => 30, 'Dummy' => 31, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'intbwhse' => 1, 'binabin1' => 2, 'binamin1' => 3, 'binamax1' => 4, 'binabin2' => 5, 'binamin2' => 6, 'binamax2' => 7, 'binabin3' => 8, 'binamin3' => 9, 'binamax3' => 10, 'binabin4' => 11, 'binamin4' => 12, 'binamax4' => 13, 'binabin5' => 14, 'binamin5' => 15, 'binamax5' => 16, 'binabin6' => 17, 'binamin6' => 18, 'binamax6' => 19, 'binabin7' => 20, 'binamin7' => 21, 'binamax7' => 22, 'binabin8' => 23, 'binamin8' => 24, 'binamax8' => 25, 'binabin9' => 26, 'binamin9' => 27, 'binamax9' => 28, 'dateupdtd' => 29, 'timeupdtd' => 30, 'dummy' => 31, ),
        self::TYPE_COLNAME       => array(InvWhseItemBinTableMap::COL_INITITEMNBR => 0, InvWhseItemBinTableMap::COL_INTBWHSE => 1, InvWhseItemBinTableMap::COL_BINABIN1 => 2, InvWhseItemBinTableMap::COL_BINAMIN1 => 3, InvWhseItemBinTableMap::COL_BINAMAX1 => 4, InvWhseItemBinTableMap::COL_BINABIN2 => 5, InvWhseItemBinTableMap::COL_BINAMIN2 => 6, InvWhseItemBinTableMap::COL_BINAMAX2 => 7, InvWhseItemBinTableMap::COL_BINABIN3 => 8, InvWhseItemBinTableMap::COL_BINAMIN3 => 9, InvWhseItemBinTableMap::COL_BINAMAX3 => 10, InvWhseItemBinTableMap::COL_BINABIN4 => 11, InvWhseItemBinTableMap::COL_BINAMIN4 => 12, InvWhseItemBinTableMap::COL_BINAMAX4 => 13, InvWhseItemBinTableMap::COL_BINABIN5 => 14, InvWhseItemBinTableMap::COL_BINAMIN5 => 15, InvWhseItemBinTableMap::COL_BINAMAX5 => 16, InvWhseItemBinTableMap::COL_BINABIN6 => 17, InvWhseItemBinTableMap::COL_BINAMIN6 => 18, InvWhseItemBinTableMap::COL_BINAMAX6 => 19, InvWhseItemBinTableMap::COL_BINABIN7 => 20, InvWhseItemBinTableMap::COL_BINAMIN7 => 21, InvWhseItemBinTableMap::COL_BINAMAX7 => 22, InvWhseItemBinTableMap::COL_BINABIN8 => 23, InvWhseItemBinTableMap::COL_BINAMIN8 => 24, InvWhseItemBinTableMap::COL_BINAMAX8 => 25, InvWhseItemBinTableMap::COL_BINABIN9 => 26, InvWhseItemBinTableMap::COL_BINAMIN9 => 27, InvWhseItemBinTableMap::COL_BINAMAX9 => 28, InvWhseItemBinTableMap::COL_DATEUPDTD => 29, InvWhseItemBinTableMap::COL_TIMEUPDTD => 30, InvWhseItemBinTableMap::COL_DUMMY => 31, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'IntbWhse' => 1, 'BinaBin1' => 2, 'BinaMin1' => 3, 'BinaMax1' => 4, 'BinaBin2' => 5, 'BinaMin2' => 6, 'BinaMax2' => 7, 'BinaBin3' => 8, 'BinaMin3' => 9, 'BinaMax3' => 10, 'BinaBin4' => 11, 'BinaMin4' => 12, 'BinaMax4' => 13, 'BinaBin5' => 14, 'BinaMin5' => 15, 'BinaMax5' => 16, 'BinaBin6' => 17, 'BinaMin6' => 18, 'BinaMax6' => 19, 'BinaBin7' => 20, 'BinaMin7' => 21, 'BinaMax7' => 22, 'BinaBin8' => 23, 'BinaMin8' => 24, 'BinaMax8' => 25, 'BinaBin9' => 26, 'BinaMin9' => 27, 'BinaMax9' => 28, 'DateUpdtd' => 29, 'TimeUpdtd' => 30, 'dummy' => 31, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
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
        $this->setName('inv_bin_area');
        $this->setPhpName('InvWhseItemBin');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvWhseItemBin');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_whse_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR' , 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addForeignPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR' , 'inv_whse_mast', 'IntbWhse', true, 2, '');
        $this->addColumn('BinaBin1', 'Binabin1', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin1', 'Binamin1', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax1', 'Binamax1', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin2', 'Binabin2', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin2', 'Binamin2', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax2', 'Binamax2', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin3', 'Binabin3', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin3', 'Binamin3', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax3', 'Binamax3', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin4', 'Binabin4', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin4', 'Binamin4', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax4', 'Binamax4', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin5', 'Binabin5', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin5', 'Binamin5', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax5', 'Binamax5', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin6', 'Binabin6', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin6', 'Binamin6', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax6', 'Binamax6', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin7', 'Binabin7', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin7', 'Binamin7', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax7', 'Binamax7', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin8', 'Binabin8', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin8', 'Binamin8', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax8', 'Binamax8', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaBin9', 'Binabin9', 'VARCHAR', true, 8, '');
        $this->addColumn('BinaMin9', 'Binamin9', 'INTEGER', true, 8, 0);
        $this->addColumn('BinaMax9', 'Binamax9', 'INTEGER', true, 8, 0);
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
        $this->addRelation('WarehouseInventory', '\\WarehouseInventory', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
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
     * @param \InvWhseItemBin $obj A \InvWhseItemBin object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getIntbwhse() || is_scalar($obj->getIntbwhse()) || is_callable([$obj->getIntbwhse(), '__toString']) ? (string) $obj->getIntbwhse() : $obj->getIntbwhse())]);
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
     * @param mixed $value A \InvWhseItemBin object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvWhseItemBin) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvWhseItemBin object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)])]);
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
        return $withPrefix ? InvWhseItemBinTableMap::CLASS_DEFAULT : InvWhseItemBinTableMap::OM_CLASS;
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
     * @return array           (InvWhseItemBin object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvWhseItemBinTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvWhseItemBinTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvWhseItemBinTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvWhseItemBinTableMap::OM_CLASS;
            /** @var InvWhseItemBin $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvWhseItemBinTableMap::addInstanceToPool($obj, $key);
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
            $key = InvWhseItemBinTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvWhseItemBinTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvWhseItemBin $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvWhseItemBinTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN1);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN1);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX1);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN2);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN2);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX2);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN3);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN3);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX3);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN4);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN4);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX4);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN5);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN5);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX5);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN6);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN6);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX6);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN7);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN7);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX7);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN8);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN8);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX8);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINABIN9);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMIN9);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_BINAMAX9);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvWhseItemBinTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.BinaBin1');
            $criteria->addSelectColumn($alias . '.BinaMin1');
            $criteria->addSelectColumn($alias . '.BinaMax1');
            $criteria->addSelectColumn($alias . '.BinaBin2');
            $criteria->addSelectColumn($alias . '.BinaMin2');
            $criteria->addSelectColumn($alias . '.BinaMax2');
            $criteria->addSelectColumn($alias . '.BinaBin3');
            $criteria->addSelectColumn($alias . '.BinaMin3');
            $criteria->addSelectColumn($alias . '.BinaMax3');
            $criteria->addSelectColumn($alias . '.BinaBin4');
            $criteria->addSelectColumn($alias . '.BinaMin4');
            $criteria->addSelectColumn($alias . '.BinaMax4');
            $criteria->addSelectColumn($alias . '.BinaBin5');
            $criteria->addSelectColumn($alias . '.BinaMin5');
            $criteria->addSelectColumn($alias . '.BinaMax5');
            $criteria->addSelectColumn($alias . '.BinaBin6');
            $criteria->addSelectColumn($alias . '.BinaMin6');
            $criteria->addSelectColumn($alias . '.BinaMax6');
            $criteria->addSelectColumn($alias . '.BinaBin7');
            $criteria->addSelectColumn($alias . '.BinaMin7');
            $criteria->addSelectColumn($alias . '.BinaMax7');
            $criteria->addSelectColumn($alias . '.BinaBin8');
            $criteria->addSelectColumn($alias . '.BinaMin8');
            $criteria->addSelectColumn($alias . '.BinaMax8');
            $criteria->addSelectColumn($alias . '.BinaBin9');
            $criteria->addSelectColumn($alias . '.BinaMin9');
            $criteria->addSelectColumn($alias . '.BinaMax9');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvWhseItemBinTableMap::DATABASE_NAME)->getTable(InvWhseItemBinTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvWhseItemBinTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvWhseItemBinTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvWhseItemBinTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvWhseItemBin or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvWhseItemBin object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvWhseItemBin) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvWhseItemBinTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvWhseItemBinTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvWhseItemBinTableMap::COL_INTBWHSE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvWhseItemBinQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvWhseItemBinTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvWhseItemBinTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_bin_area table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvWhseItemBinQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvWhseItemBin or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvWhseItemBin object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvWhseItemBin object
        }


        // Set the correct dbName
        $query = InvWhseItemBinQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvWhseItemBinTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvWhseItemBinTableMap::buildTableMap();
