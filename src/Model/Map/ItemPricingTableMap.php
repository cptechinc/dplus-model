<?php

namespace Map;

use \ItemPricing;
use \ItemPricingQuery;
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
 * This class defines the structure of the 'inv_item_price' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemPricingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemPricingTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_item_price';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemPricing';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemPricing';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_item_price.InitItemNbr';

    /**
     * the column name for the InprPricBase field
     */
    const COL_INPRPRICBASE = 'inv_item_price.InprPricBase';

    /**
     * the column name for the InprPricUnit1 field
     */
    const COL_INPRPRICUNIT1 = 'inv_item_price.InprPricUnit1';

    /**
     * the column name for the InprPricPric1 field
     */
    const COL_INPRPRICPRIC1 = 'inv_item_price.InprPricPric1';

    /**
     * the column name for the InprPricUnit2 field
     */
    const COL_INPRPRICUNIT2 = 'inv_item_price.InprPricUnit2';

    /**
     * the column name for the InprPricPric2 field
     */
    const COL_INPRPRICPRIC2 = 'inv_item_price.InprPricPric2';

    /**
     * the column name for the InprPricUnit3 field
     */
    const COL_INPRPRICUNIT3 = 'inv_item_price.InprPricUnit3';

    /**
     * the column name for the InprPricPric3 field
     */
    const COL_INPRPRICPRIC3 = 'inv_item_price.InprPricPric3';

    /**
     * the column name for the InprPricUnit4 field
     */
    const COL_INPRPRICUNIT4 = 'inv_item_price.InprPricUnit4';

    /**
     * the column name for the InprPricPric4 field
     */
    const COL_INPRPRICPRIC4 = 'inv_item_price.InprPricPric4';

    /**
     * the column name for the InprPricUnit5 field
     */
    const COL_INPRPRICUNIT5 = 'inv_item_price.InprPricUnit5';

    /**
     * the column name for the InprPricPric5 field
     */
    const COL_INPRPRICPRIC5 = 'inv_item_price.InprPricPric5';

    /**
     * the column name for the InprPricUnit6 field
     */
    const COL_INPRPRICUNIT6 = 'inv_item_price.InprPricUnit6';

    /**
     * the column name for the InprPricPric6 field
     */
    const COL_INPRPRICPRIC6 = 'inv_item_price.InprPricPric6';

    /**
     * the column name for the InprPricUnit7 field
     */
    const COL_INPRPRICUNIT7 = 'inv_item_price.InprPricUnit7';

    /**
     * the column name for the InprPricPric7 field
     */
    const COL_INPRPRICPRIC7 = 'inv_item_price.InprPricPric7';

    /**
     * the column name for the InprPricUnit8 field
     */
    const COL_INPRPRICUNIT8 = 'inv_item_price.InprPricUnit8';

    /**
     * the column name for the InprPricPric8 field
     */
    const COL_INPRPRICPRIC8 = 'inv_item_price.InprPricPric8';

    /**
     * the column name for the InprPricUnit9 field
     */
    const COL_INPRPRICUNIT9 = 'inv_item_price.InprPricUnit9';

    /**
     * the column name for the InprPricPric9 field
     */
    const COL_INPRPRICPRIC9 = 'inv_item_price.InprPricPric9';

    /**
     * the column name for the InprPricUnit10 field
     */
    const COL_INPRPRICUNIT10 = 'inv_item_price.InprPricUnit10';

    /**
     * the column name for the InprPricPric10 field
     */
    const COL_INPRPRICPRIC10 = 'inv_item_price.InprPricPric10';

    /**
     * the column name for the InprPricLastDate field
     */
    const COL_INPRPRICLASTDATE = 'inv_item_price.InprPricLastDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_item_price.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_item_price.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_item_price.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Inprpricbase', 'Inprpricunit1', 'Inprpricpric1', 'Inprpricunit2', 'Inprpricpric2', 'Inprpricunit3', 'Inprpricpric3', 'Inprpricunit4', 'Inprpricpric4', 'Inprpricunit5', 'Inprpricpric5', 'Inprpricunit6', 'Inprpricpric6', 'Inprpricunit7', 'Inprpricpric7', 'Inprpricunit8', 'Inprpricpric8', 'Inprpricunit9', 'Inprpricpric9', 'Inprpricunit10', 'Inprpricpric10', 'Inprpriclastdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'inprpricbase', 'inprpricunit1', 'inprpricpric1', 'inprpricunit2', 'inprpricpric2', 'inprpricunit3', 'inprpricpric3', 'inprpricunit4', 'inprpricpric4', 'inprpricunit5', 'inprpricpric5', 'inprpricunit6', 'inprpricpric6', 'inprpricunit7', 'inprpricpric7', 'inprpricunit8', 'inprpricpric8', 'inprpricunit9', 'inprpricpric9', 'inprpricunit10', 'inprpricpric10', 'inprpriclastdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemPricingTableMap::COL_INITITEMNBR, ItemPricingTableMap::COL_INPRPRICBASE, ItemPricingTableMap::COL_INPRPRICUNIT1, ItemPricingTableMap::COL_INPRPRICPRIC1, ItemPricingTableMap::COL_INPRPRICUNIT2, ItemPricingTableMap::COL_INPRPRICPRIC2, ItemPricingTableMap::COL_INPRPRICUNIT3, ItemPricingTableMap::COL_INPRPRICPRIC3, ItemPricingTableMap::COL_INPRPRICUNIT4, ItemPricingTableMap::COL_INPRPRICPRIC4, ItemPricingTableMap::COL_INPRPRICUNIT5, ItemPricingTableMap::COL_INPRPRICPRIC5, ItemPricingTableMap::COL_INPRPRICUNIT6, ItemPricingTableMap::COL_INPRPRICPRIC6, ItemPricingTableMap::COL_INPRPRICUNIT7, ItemPricingTableMap::COL_INPRPRICPRIC7, ItemPricingTableMap::COL_INPRPRICUNIT8, ItemPricingTableMap::COL_INPRPRICPRIC8, ItemPricingTableMap::COL_INPRPRICUNIT9, ItemPricingTableMap::COL_INPRPRICPRIC9, ItemPricingTableMap::COL_INPRPRICUNIT10, ItemPricingTableMap::COL_INPRPRICPRIC10, ItemPricingTableMap::COL_INPRPRICLASTDATE, ItemPricingTableMap::COL_DATEUPDTD, ItemPricingTableMap::COL_TIMEUPDTD, ItemPricingTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'InprPricBase', 'InprPricUnit1', 'InprPricPric1', 'InprPricUnit2', 'InprPricPric2', 'InprPricUnit3', 'InprPricPric3', 'InprPricUnit4', 'InprPricPric4', 'InprPricUnit5', 'InprPricPric5', 'InprPricUnit6', 'InprPricPric6', 'InprPricUnit7', 'InprPricPric7', 'InprPricUnit8', 'InprPricPric8', 'InprPricUnit9', 'InprPricPric9', 'InprPricUnit10', 'InprPricPric10', 'InprPricLastDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Inprpricbase' => 1, 'Inprpricunit1' => 2, 'Inprpricpric1' => 3, 'Inprpricunit2' => 4, 'Inprpricpric2' => 5, 'Inprpricunit3' => 6, 'Inprpricpric3' => 7, 'Inprpricunit4' => 8, 'Inprpricpric4' => 9, 'Inprpricunit5' => 10, 'Inprpricpric5' => 11, 'Inprpricunit6' => 12, 'Inprpricpric6' => 13, 'Inprpricunit7' => 14, 'Inprpricpric7' => 15, 'Inprpricunit8' => 16, 'Inprpricpric8' => 17, 'Inprpricunit9' => 18, 'Inprpricpric9' => 19, 'Inprpricunit10' => 20, 'Inprpricpric10' => 21, 'Inprpriclastdate' => 22, 'Dateupdtd' => 23, 'Timeupdtd' => 24, 'Dummy' => 25, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'inprpricbase' => 1, 'inprpricunit1' => 2, 'inprpricpric1' => 3, 'inprpricunit2' => 4, 'inprpricpric2' => 5, 'inprpricunit3' => 6, 'inprpricpric3' => 7, 'inprpricunit4' => 8, 'inprpricpric4' => 9, 'inprpricunit5' => 10, 'inprpricpric5' => 11, 'inprpricunit6' => 12, 'inprpricpric6' => 13, 'inprpricunit7' => 14, 'inprpricpric7' => 15, 'inprpricunit8' => 16, 'inprpricpric8' => 17, 'inprpricunit9' => 18, 'inprpricpric9' => 19, 'inprpricunit10' => 20, 'inprpricpric10' => 21, 'inprpriclastdate' => 22, 'dateupdtd' => 23, 'timeupdtd' => 24, 'dummy' => 25, ),
        self::TYPE_COLNAME       => array(ItemPricingTableMap::COL_INITITEMNBR => 0, ItemPricingTableMap::COL_INPRPRICBASE => 1, ItemPricingTableMap::COL_INPRPRICUNIT1 => 2, ItemPricingTableMap::COL_INPRPRICPRIC1 => 3, ItemPricingTableMap::COL_INPRPRICUNIT2 => 4, ItemPricingTableMap::COL_INPRPRICPRIC2 => 5, ItemPricingTableMap::COL_INPRPRICUNIT3 => 6, ItemPricingTableMap::COL_INPRPRICPRIC3 => 7, ItemPricingTableMap::COL_INPRPRICUNIT4 => 8, ItemPricingTableMap::COL_INPRPRICPRIC4 => 9, ItemPricingTableMap::COL_INPRPRICUNIT5 => 10, ItemPricingTableMap::COL_INPRPRICPRIC5 => 11, ItemPricingTableMap::COL_INPRPRICUNIT6 => 12, ItemPricingTableMap::COL_INPRPRICPRIC6 => 13, ItemPricingTableMap::COL_INPRPRICUNIT7 => 14, ItemPricingTableMap::COL_INPRPRICPRIC7 => 15, ItemPricingTableMap::COL_INPRPRICUNIT8 => 16, ItemPricingTableMap::COL_INPRPRICPRIC8 => 17, ItemPricingTableMap::COL_INPRPRICUNIT9 => 18, ItemPricingTableMap::COL_INPRPRICPRIC9 => 19, ItemPricingTableMap::COL_INPRPRICUNIT10 => 20, ItemPricingTableMap::COL_INPRPRICPRIC10 => 21, ItemPricingTableMap::COL_INPRPRICLASTDATE => 22, ItemPricingTableMap::COL_DATEUPDTD => 23, ItemPricingTableMap::COL_TIMEUPDTD => 24, ItemPricingTableMap::COL_DUMMY => 25, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'InprPricBase' => 1, 'InprPricUnit1' => 2, 'InprPricPric1' => 3, 'InprPricUnit2' => 4, 'InprPricPric2' => 5, 'InprPricUnit3' => 6, 'InprPricPric3' => 7, 'InprPricUnit4' => 8, 'InprPricPric4' => 9, 'InprPricUnit5' => 10, 'InprPricPric5' => 11, 'InprPricUnit6' => 12, 'InprPricPric6' => 13, 'InprPricUnit7' => 14, 'InprPricPric7' => 15, 'InprPricUnit8' => 16, 'InprPricPric8' => 17, 'InprPricUnit9' => 18, 'InprPricPric9' => 19, 'InprPricUnit10' => 20, 'InprPricPric10' => 21, 'InprPricLastDate' => 22, 'DateUpdtd' => 23, 'TimeUpdtd' => 24, 'dummy' => 25, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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
        $this->setName('inv_item_price');
        $this->setPhpName('ItemPricing');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemPricing');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('InprPricBase', 'Inprpricbase', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit1', 'Inprpricunit1', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric1', 'Inprpricpric1', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit2', 'Inprpricunit2', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric2', 'Inprpricpric2', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit3', 'Inprpricunit3', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric3', 'Inprpricpric3', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit4', 'Inprpricunit4', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric4', 'Inprpricpric4', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit5', 'Inprpricunit5', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric5', 'Inprpricpric5', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit6', 'Inprpricunit6', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric6', 'Inprpricpric6', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit7', 'Inprpricunit7', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric7', 'Inprpricpric7', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit8', 'Inprpricunit8', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric8', 'Inprpricpric8', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit9', 'Inprpricunit9', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric9', 'Inprpricpric9', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricUnit10', 'Inprpricunit10', 'INTEGER', false, 8, null);
        $this->addColumn('InprPricPric10', 'Inprpricpric10', 'DECIMAL', false, 20, null);
        $this->addColumn('InprPricLastDate', 'Inprpriclastdate', 'VARCHAR', false, 8, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? ItemPricingTableMap::CLASS_DEFAULT : ItemPricingTableMap::OM_CLASS;
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
     * @return array           (ItemPricing object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemPricingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemPricingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemPricingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemPricingTableMap::OM_CLASS;
            /** @var ItemPricing $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemPricingTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemPricingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemPricingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemPricing $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemPricingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICBASE);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT1);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC1);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT2);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC2);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT3);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC3);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT4);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC4);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT5);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC5);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT6);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC6);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT7);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC7);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT8);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC8);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT9);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC9);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICUNIT10);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICPRIC10);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_INPRPRICLASTDATE);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemPricingTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InprPricBase');
            $criteria->addSelectColumn($alias . '.InprPricUnit1');
            $criteria->addSelectColumn($alias . '.InprPricPric1');
            $criteria->addSelectColumn($alias . '.InprPricUnit2');
            $criteria->addSelectColumn($alias . '.InprPricPric2');
            $criteria->addSelectColumn($alias . '.InprPricUnit3');
            $criteria->addSelectColumn($alias . '.InprPricPric3');
            $criteria->addSelectColumn($alias . '.InprPricUnit4');
            $criteria->addSelectColumn($alias . '.InprPricPric4');
            $criteria->addSelectColumn($alias . '.InprPricUnit5');
            $criteria->addSelectColumn($alias . '.InprPricPric5');
            $criteria->addSelectColumn($alias . '.InprPricUnit6');
            $criteria->addSelectColumn($alias . '.InprPricPric6');
            $criteria->addSelectColumn($alias . '.InprPricUnit7');
            $criteria->addSelectColumn($alias . '.InprPricPric7');
            $criteria->addSelectColumn($alias . '.InprPricUnit8');
            $criteria->addSelectColumn($alias . '.InprPricPric8');
            $criteria->addSelectColumn($alias . '.InprPricUnit9');
            $criteria->addSelectColumn($alias . '.InprPricPric9');
            $criteria->addSelectColumn($alias . '.InprPricUnit10');
            $criteria->addSelectColumn($alias . '.InprPricPric10');
            $criteria->addSelectColumn($alias . '.InprPricLastDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemPricingTableMap::DATABASE_NAME)->getTable(ItemPricingTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemPricingTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemPricingTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemPricingTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemPricing or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemPricing object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemPricing) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemPricingTableMap::DATABASE_NAME);
            $criteria->add(ItemPricingTableMap::COL_INITITEMNBR, (array) $values, Criteria::IN);
        }

        $query = ItemPricingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemPricingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemPricingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_item_price table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemPricingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemPricing or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemPricing object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemPricing object
        }


        // Set the correct dbName
        $query = ItemPricingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemPricingTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemPricingTableMap::buildTableMap();
