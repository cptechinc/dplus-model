<?php

namespace Map;

use \ItemXrefKey;
use \ItemXrefKeyQuery;
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
 * This class defines the structure of the 'item_xref_key' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemXrefKeyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemXrefKeyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'item_xref_key';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemXrefKey';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemXrefKey';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'item_xref_key.InitItemNbr';

    /**
     * the column name for the InitDesc1 field
     */
    const COL_INITDESC1 = 'item_xref_key.InitDesc1';

    /**
     * the column name for the InitDesc2 field
     */
    const COL_INITDESC2 = 'item_xref_key.InitDesc2';

    /**
     * the column name for the RkeyTheirItem field
     */
    const COL_RKEYTHEIRITEM = 'item_xref_key.RkeyTheirItem';

    /**
     * the column name for the RkeyTheirItemDesc1 field
     */
    const COL_RKEYTHEIRITEMDESC1 = 'item_xref_key.RkeyTheirItemDesc1';

    /**
     * the column name for the RkeyTheirItemDesc2 field
     */
    const COL_RKEYTHEIRITEMDESC2 = 'item_xref_key.RkeyTheirItemDesc2';

    /**
     * the column name for the RkeySource field
     */
    const COL_RKEYSOURCE = 'item_xref_key.RkeySource';

    /**
     * the column name for the RkeySourceDesc field
     */
    const COL_RKEYSOURCEDESC = 'item_xref_key.RkeySourceDesc';

    /**
     * the column name for the RkeyCVId field
     */
    const COL_RKEYCVID = 'item_xref_key.RkeyCVId';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'item_xref_key.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'item_xref_key.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'item_xref_key.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Initdesc1', 'Initdesc2', 'Rkeytheiritem', 'Rkeytheiritemdesc1', 'Rkeytheiritemdesc2', 'Rkeysource', 'Rkeysourcedesc', 'Rkeycvid', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'initdesc1', 'initdesc2', 'rkeytheiritem', 'rkeytheiritemdesc1', 'rkeytheiritemdesc2', 'rkeysource', 'rkeysourcedesc', 'rkeycvid', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemXrefKeyTableMap::COL_INITITEMNBR, ItemXrefKeyTableMap::COL_INITDESC1, ItemXrefKeyTableMap::COL_INITDESC2, ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1, ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2, ItemXrefKeyTableMap::COL_RKEYSOURCE, ItemXrefKeyTableMap::COL_RKEYSOURCEDESC, ItemXrefKeyTableMap::COL_RKEYCVID, ItemXrefKeyTableMap::COL_DATEUPDTD, ItemXrefKeyTableMap::COL_TIMEUPDTD, ItemXrefKeyTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'InitDesc1', 'InitDesc2', 'RkeyTheirItem', 'RkeyTheirItemDesc1', 'RkeyTheirItemDesc2', 'RkeySource', 'RkeySourceDesc', 'RkeyCVId', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Initdesc1' => 1, 'Initdesc2' => 2, 'Rkeytheiritem' => 3, 'Rkeytheiritemdesc1' => 4, 'Rkeytheiritemdesc2' => 5, 'Rkeysource' => 6, 'Rkeysourcedesc' => 7, 'Rkeycvid' => 8, 'Dateupdtd' => 9, 'Timeupdtd' => 10, 'Dummy' => 11, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'initdesc1' => 1, 'initdesc2' => 2, 'rkeytheiritem' => 3, 'rkeytheiritemdesc1' => 4, 'rkeytheiritemdesc2' => 5, 'rkeysource' => 6, 'rkeysourcedesc' => 7, 'rkeycvid' => 8, 'dateupdtd' => 9, 'timeupdtd' => 10, 'dummy' => 11, ),
        self::TYPE_COLNAME       => array(ItemXrefKeyTableMap::COL_INITITEMNBR => 0, ItemXrefKeyTableMap::COL_INITDESC1 => 1, ItemXrefKeyTableMap::COL_INITDESC2 => 2, ItemXrefKeyTableMap::COL_RKEYTHEIRITEM => 3, ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1 => 4, ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2 => 5, ItemXrefKeyTableMap::COL_RKEYSOURCE => 6, ItemXrefKeyTableMap::COL_RKEYSOURCEDESC => 7, ItemXrefKeyTableMap::COL_RKEYCVID => 8, ItemXrefKeyTableMap::COL_DATEUPDTD => 9, ItemXrefKeyTableMap::COL_TIMEUPDTD => 10, ItemXrefKeyTableMap::COL_DUMMY => 11, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'InitDesc1' => 1, 'InitDesc2' => 2, 'RkeyTheirItem' => 3, 'RkeyTheirItemDesc1' => 4, 'RkeyTheirItemDesc2' => 5, 'RkeySource' => 6, 'RkeySourceDesc' => 7, 'RkeyCVId' => 8, 'DateUpdtd' => 9, 'TimeUpdtd' => 10, 'dummy' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $this->setName('item_xref_key');
        $this->setPhpName('ItemXrefKey');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefKey');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('InitDesc1', 'Initdesc1', 'VARCHAR', true, 35, '');
        $this->addColumn('InitDesc2', 'Initdesc2', 'VARCHAR', true, 35, '');
        $this->addPrimaryKey('RkeyTheirItem', 'Rkeytheiritem', 'VARCHAR', true, 30, '');
        $this->addColumn('RkeyTheirItemDesc1', 'Rkeytheiritemdesc1', 'VARCHAR', true, 35, '');
        $this->addColumn('RkeyTheirItemDesc2', 'Rkeytheiritemdesc2', 'VARCHAR', true, 35, '');
        $this->addPrimaryKey('RkeySource', 'Rkeysource', 'CHAR', true, null, '');
        $this->addColumn('RkeySourceDesc', 'Rkeysourcedesc', 'VARCHAR', true, 30, '');
        $this->addForeignPrimaryKey('RkeyCVId', 'Rkeycvid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addForeignPrimaryKey('RkeyCVId', 'Rkeycvid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
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
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':RkeyCVId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':RkeyCVId',
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
     * @param \ItemXrefKey $obj A \ItemXrefKey object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getRkeytheiritem() || is_scalar($obj->getRkeytheiritem()) || is_callable([$obj->getRkeytheiritem(), '__toString']) ? (string) $obj->getRkeytheiritem() : $obj->getRkeytheiritem()), (null === $obj->getRkeysource() || is_scalar($obj->getRkeysource()) || is_callable([$obj->getRkeysource(), '__toString']) ? (string) $obj->getRkeysource() : $obj->getRkeysource()), (null === $obj->getRkeycvid() || is_scalar($obj->getRkeycvid()) || is_callable([$obj->getRkeycvid(), '__toString']) ? (string) $obj->getRkeycvid() : $obj->getRkeycvid())]);
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
     * @param mixed $value A \ItemXrefKey object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefKey) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getRkeytheiritem() || is_scalar($value->getRkeytheiritem()) || is_callable([$value->getRkeytheiritem(), '__toString']) ? (string) $value->getRkeytheiritem() : $value->getRkeytheiritem()), (null === $value->getRkeysource() || is_scalar($value->getRkeysource()) || is_callable([$value->getRkeysource(), '__toString']) ? (string) $value->getRkeysource() : $value->getRkeysource()), (null === $value->getRkeycvid() || is_scalar($value->getRkeycvid()) || is_callable([$value->getRkeycvid(), '__toString']) ? (string) $value->getRkeycvid() : $value->getRkeycvid())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefKey object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 3 + $offset
                : self::translateFieldName('Rkeytheiritem', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Rkeysource', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 8 + $offset
                : self::translateFieldName('Rkeycvid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemXrefKeyTableMap::CLASS_DEFAULT : ItemXrefKeyTableMap::OM_CLASS;
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
     * @return array           (ItemXrefKey object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemXrefKeyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefKeyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefKeyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefKeyTableMap::OM_CLASS;
            /** @var ItemXrefKey $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefKeyTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefKeyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefKeyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefKey $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefKeyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_INITDESC1);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_INITDESC2);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_RKEYSOURCE);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_RKEYSOURCEDESC);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_RKEYCVID);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefKeyTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InitDesc1');
            $criteria->addSelectColumn($alias . '.InitDesc2');
            $criteria->addSelectColumn($alias . '.RkeyTheirItem');
            $criteria->addSelectColumn($alias . '.RkeyTheirItemDesc1');
            $criteria->addSelectColumn($alias . '.RkeyTheirItemDesc2');
            $criteria->addSelectColumn($alias . '.RkeySource');
            $criteria->addSelectColumn($alias . '.RkeySourceDesc');
            $criteria->addSelectColumn($alias . '.RkeyCVId');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefKeyTableMap::DATABASE_NAME)->getTable(ItemXrefKeyTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemXrefKeyTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemXrefKeyTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemXrefKeyTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefKey or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemXrefKey object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefKey) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefKeyTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefKeyTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefKeyTableMap::COL_RKEYSOURCE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefKeyTableMap::COL_RKEYCVID, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefKeyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefKeyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefKeyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the item_xref_key table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemXrefKeyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefKey or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemXrefKey object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefKey object
        }


        // Set the correct dbName
        $query = ItemXrefKeyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemXrefKeyTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemXrefKeyTableMap::buildTableMap();
