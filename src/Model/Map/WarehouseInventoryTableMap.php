<?php

namespace Map;

use \WarehouseInventory;
use \WarehouseInventoryQuery;
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
 * This class defines the structure of the 'inv_whse_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class WarehouseInventoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.WarehouseInventoryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_whse_mast';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\WarehouseInventory';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'WarehouseInventory';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_whse_mast.InitItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'inv_whse_mast.IntbWhse';

    /**
     * the column name for the InwhBin field
     */
    const COL_INWHBIN = 'inv_whse_mast.InwhBin';

    /**
     * the column name for the InwhCycl field
     */
    const COL_INWHCYCL = 'inv_whse_mast.InwhCycl';

    /**
     * the column name for the InwhCntDate field
     */
    const COL_INWHCNTDATE = 'inv_whse_mast.InwhCntDate';

    /**
     * the column name for the InwhStat field
     */
    const COL_INWHSTAT = 'inv_whse_mast.InwhStat';

    /**
     * the column name for the InwhAbc field
     */
    const COL_INWHABC = 'inv_whse_mast.InwhAbc';

    /**
     * the column name for the InwhOrdrPnt field
     */
    const COL_INWHORDRPNT = 'inv_whse_mast.InwhOrdrPnt';

    /**
     * the column name for the InwhMax field
     */
    const COL_INWHMAX = 'inv_whse_mast.InwhMax';

    /**
     * the column name for the InwhOrdrQty field
     */
    const COL_INWHORDRQTY = 'inv_whse_mast.InwhOrdrQty';

    /**
     * the column name for the InwhSpecOrdr field
     */
    const COL_INWHSPECORDR = 'inv_whse_mast.InwhSpecOrdr';

    /**
     * the column name for the InwhAvail field
     */
    const COL_INWHAVAIL = 'inv_whse_mast.InwhAvail';

    /**
     * the column name for the Inwh12moTimesSold field
     */
    const COL_INWH12MOTIMESSOLD = 'inv_whse_mast.Inwh12moTimesSold';

    /**
     * the column name for the InwhFrtIn field
     */
    const COL_INWHFRTIN = 'inv_whse_mast.InwhFrtIn';

    /**
     * the column name for the InwhMaxOrdrQty field
     */
    const COL_INWHMAXORDRQTY = 'inv_whse_mast.InwhMaxOrdrQty';

    /**
     * the column name for the InwhCrteDate field
     */
    const COL_INWHCRTEDATE = 'inv_whse_mast.InwhCrteDate';

    /**
     * the column name for the InwhShipStoreBin field
     */
    const COL_INWHSHIPSTOREBIN = 'inv_whse_mast.InwhShipStoreBin';

    /**
     * the column name for the InwhLastPurchPoNbr field
     */
    const COL_INWHLASTPURCHPONBR = 'inv_whse_mast.InwhLastPurchPoNbr';

    /**
     * the column name for the LastPurchInvNbr field
     */
    const COL_LASTPURCHINVNBR = 'inv_whse_mast.LastPurchInvNbr';

    /**
     * the column name for the InwhSupplyWhse field
     */
    const COL_INWHSUPPLYWHSE = 'inv_whse_mast.InwhSupplyWhse';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_whse_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_whse_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_whse_mast.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Intbwhse', 'Inwhbin', 'Inwhcycl', 'Inwhcntdate', 'Inwhstat', 'Inwhabc', 'Inwhordrpnt', 'Inwhmax', 'Inwhordrqty', 'Inwhspecordr', 'Inwhavail', 'Inwh12motimessold', 'Inwhfrtin', 'Inwhmaxordrqty', 'Inwhcrtedate', 'Inwhshipstorebin', 'Inwhlastpurchponbr', 'Lastpurchinvnbr', 'Inwhsupplywhse', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'intbwhse', 'inwhbin', 'inwhcycl', 'inwhcntdate', 'inwhstat', 'inwhabc', 'inwhordrpnt', 'inwhmax', 'inwhordrqty', 'inwhspecordr', 'inwhavail', 'inwh12motimessold', 'inwhfrtin', 'inwhmaxordrqty', 'inwhcrtedate', 'inwhshipstorebin', 'inwhlastpurchponbr', 'lastpurchinvnbr', 'inwhsupplywhse', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(WarehouseInventoryTableMap::COL_INITITEMNBR, WarehouseInventoryTableMap::COL_INTBWHSE, WarehouseInventoryTableMap::COL_INWHBIN, WarehouseInventoryTableMap::COL_INWHCYCL, WarehouseInventoryTableMap::COL_INWHCNTDATE, WarehouseInventoryTableMap::COL_INWHSTAT, WarehouseInventoryTableMap::COL_INWHABC, WarehouseInventoryTableMap::COL_INWHORDRPNT, WarehouseInventoryTableMap::COL_INWHMAX, WarehouseInventoryTableMap::COL_INWHORDRQTY, WarehouseInventoryTableMap::COL_INWHSPECORDR, WarehouseInventoryTableMap::COL_INWHAVAIL, WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, WarehouseInventoryTableMap::COL_INWHFRTIN, WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, WarehouseInventoryTableMap::COL_INWHCRTEDATE, WarehouseInventoryTableMap::COL_INWHSHIPSTOREBIN, WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR, WarehouseInventoryTableMap::COL_LASTPURCHINVNBR, WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE, WarehouseInventoryTableMap::COL_DATEUPDTD, WarehouseInventoryTableMap::COL_TIMEUPDTD, WarehouseInventoryTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'IntbWhse', 'InwhBin', 'InwhCycl', 'InwhCntDate', 'InwhStat', 'InwhAbc', 'InwhOrdrPnt', 'InwhMax', 'InwhOrdrQty', 'InwhSpecOrdr', 'InwhAvail', 'Inwh12moTimesSold', 'InwhFrtIn', 'InwhMaxOrdrQty', 'InwhCrteDate', 'InwhShipStoreBin', 'InwhLastPurchPoNbr', 'LastPurchInvNbr', 'InwhSupplyWhse', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Intbwhse' => 1, 'Inwhbin' => 2, 'Inwhcycl' => 3, 'Inwhcntdate' => 4, 'Inwhstat' => 5, 'Inwhabc' => 6, 'Inwhordrpnt' => 7, 'Inwhmax' => 8, 'Inwhordrqty' => 9, 'Inwhspecordr' => 10, 'Inwhavail' => 11, 'Inwh12motimessold' => 12, 'Inwhfrtin' => 13, 'Inwhmaxordrqty' => 14, 'Inwhcrtedate' => 15, 'Inwhshipstorebin' => 16, 'Inwhlastpurchponbr' => 17, 'Lastpurchinvnbr' => 18, 'Inwhsupplywhse' => 19, 'Dateupdtd' => 20, 'Timeupdtd' => 21, 'Dummy' => 22, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'intbwhse' => 1, 'inwhbin' => 2, 'inwhcycl' => 3, 'inwhcntdate' => 4, 'inwhstat' => 5, 'inwhabc' => 6, 'inwhordrpnt' => 7, 'inwhmax' => 8, 'inwhordrqty' => 9, 'inwhspecordr' => 10, 'inwhavail' => 11, 'inwh12motimessold' => 12, 'inwhfrtin' => 13, 'inwhmaxordrqty' => 14, 'inwhcrtedate' => 15, 'inwhshipstorebin' => 16, 'inwhlastpurchponbr' => 17, 'lastpurchinvnbr' => 18, 'inwhsupplywhse' => 19, 'dateupdtd' => 20, 'timeupdtd' => 21, 'dummy' => 22, ),
        self::TYPE_COLNAME       => array(WarehouseInventoryTableMap::COL_INITITEMNBR => 0, WarehouseInventoryTableMap::COL_INTBWHSE => 1, WarehouseInventoryTableMap::COL_INWHBIN => 2, WarehouseInventoryTableMap::COL_INWHCYCL => 3, WarehouseInventoryTableMap::COL_INWHCNTDATE => 4, WarehouseInventoryTableMap::COL_INWHSTAT => 5, WarehouseInventoryTableMap::COL_INWHABC => 6, WarehouseInventoryTableMap::COL_INWHORDRPNT => 7, WarehouseInventoryTableMap::COL_INWHMAX => 8, WarehouseInventoryTableMap::COL_INWHORDRQTY => 9, WarehouseInventoryTableMap::COL_INWHSPECORDR => 10, WarehouseInventoryTableMap::COL_INWHAVAIL => 11, WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD => 12, WarehouseInventoryTableMap::COL_INWHFRTIN => 13, WarehouseInventoryTableMap::COL_INWHMAXORDRQTY => 14, WarehouseInventoryTableMap::COL_INWHCRTEDATE => 15, WarehouseInventoryTableMap::COL_INWHSHIPSTOREBIN => 16, WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR => 17, WarehouseInventoryTableMap::COL_LASTPURCHINVNBR => 18, WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE => 19, WarehouseInventoryTableMap::COL_DATEUPDTD => 20, WarehouseInventoryTableMap::COL_TIMEUPDTD => 21, WarehouseInventoryTableMap::COL_DUMMY => 22, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'IntbWhse' => 1, 'InwhBin' => 2, 'InwhCycl' => 3, 'InwhCntDate' => 4, 'InwhStat' => 5, 'InwhAbc' => 6, 'InwhOrdrPnt' => 7, 'InwhMax' => 8, 'InwhOrdrQty' => 9, 'InwhSpecOrdr' => 10, 'InwhAvail' => 11, 'Inwh12moTimesSold' => 12, 'InwhFrtIn' => 13, 'InwhMaxOrdrQty' => 14, 'InwhCrteDate' => 15, 'InwhShipStoreBin' => 16, 'InwhLastPurchPoNbr' => 17, 'LastPurchInvNbr' => 18, 'InwhSupplyWhse' => 19, 'DateUpdtd' => 20, 'TimeUpdtd' => 21, 'dummy' => 22, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $this->setName('inv_whse_mast');
        $this->setPhpName('WarehouseInventory');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\WarehouseInventory');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addColumn('InwhBin', 'Inwhbin', 'VARCHAR', false, 8, null);
        $this->addColumn('InwhCycl', 'Inwhcycl', 'VARCHAR', false, 2, null);
        $this->addColumn('InwhCntDate', 'Inwhcntdate', 'VARCHAR', false, 8, null);
        $this->addColumn('InwhStat', 'Inwhstat', 'VARCHAR', false, 1, null);
        $this->addColumn('InwhAbc', 'Inwhabc', 'VARCHAR', false, 1, null);
        $this->addColumn('InwhOrdrPnt', 'Inwhordrpnt', 'DECIMAL', false, 20, null);
        $this->addColumn('InwhMax', 'Inwhmax', 'DECIMAL', false, 20, null);
        $this->addColumn('InwhOrdrQty', 'Inwhordrqty', 'DECIMAL', false, 20, null);
        $this->addColumn('InwhSpecOrdr', 'Inwhspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('InwhAvail', 'Inwhavail', 'DECIMAL', false, 20, null);
        $this->addColumn('Inwh12moTimesSold', 'Inwh12motimessold', 'VARCHAR', false, 8, null);
        $this->addColumn('InwhFrtIn', 'Inwhfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('InwhMaxOrdrQty', 'Inwhmaxordrqty', 'DECIMAL', false, 20, null);
        $this->addColumn('InwhCrteDate', 'Inwhcrtedate', 'INTEGER', false, 8, null);
        $this->addColumn('InwhShipStoreBin', 'Inwhshipstorebin', 'VARCHAR', false, 8, null);
        $this->addColumn('InwhLastPurchPoNbr', 'Inwhlastpurchponbr', 'INTEGER', false, 8, null);
        $this->addColumn('LastPurchInvNbr', 'Lastpurchinvnbr', 'VARCHAR', false, 15, null);
        $this->addColumn('InwhSupplyWhse', 'Inwhsupplywhse', 'VARCHAR', false, 2, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \WarehouseInventory $obj A \WarehouseInventory object.
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
     * @param mixed $value A \WarehouseInventory object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \WarehouseInventory) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \WarehouseInventory object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        return $withPrefix ? WarehouseInventoryTableMap::CLASS_DEFAULT : WarehouseInventoryTableMap::OM_CLASS;
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
     * @return array           (WarehouseInventory object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = WarehouseInventoryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WarehouseInventoryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WarehouseInventoryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WarehouseInventoryTableMap::OM_CLASS;
            /** @var WarehouseInventory $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WarehouseInventoryTableMap::addInstanceToPool($obj, $key);
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
            $key = WarehouseInventoryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WarehouseInventoryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var WarehouseInventory $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WarehouseInventoryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHBIN);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHCYCL);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHCNTDATE);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHSTAT);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHABC);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHORDRPNT);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHMAX);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHORDRQTY);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHSPECORDR);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHAVAIL);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHFRTIN);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHCRTEDATE);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHSHIPSTOREBIN);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_LASTPURCHINVNBR);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(WarehouseInventoryTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.InwhBin');
            $criteria->addSelectColumn($alias . '.InwhCycl');
            $criteria->addSelectColumn($alias . '.InwhCntDate');
            $criteria->addSelectColumn($alias . '.InwhStat');
            $criteria->addSelectColumn($alias . '.InwhAbc');
            $criteria->addSelectColumn($alias . '.InwhOrdrPnt');
            $criteria->addSelectColumn($alias . '.InwhMax');
            $criteria->addSelectColumn($alias . '.InwhOrdrQty');
            $criteria->addSelectColumn($alias . '.InwhSpecOrdr');
            $criteria->addSelectColumn($alias . '.InwhAvail');
            $criteria->addSelectColumn($alias . '.Inwh12moTimesSold');
            $criteria->addSelectColumn($alias . '.InwhFrtIn');
            $criteria->addSelectColumn($alias . '.InwhMaxOrdrQty');
            $criteria->addSelectColumn($alias . '.InwhCrteDate');
            $criteria->addSelectColumn($alias . '.InwhShipStoreBin');
            $criteria->addSelectColumn($alias . '.InwhLastPurchPoNbr');
            $criteria->addSelectColumn($alias . '.LastPurchInvNbr');
            $criteria->addSelectColumn($alias . '.InwhSupplyWhse');
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
        return Propel::getServiceContainer()->getDatabaseMap(WarehouseInventoryTableMap::DATABASE_NAME)->getTable(WarehouseInventoryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(WarehouseInventoryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(WarehouseInventoryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new WarehouseInventoryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a WarehouseInventory or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or WarehouseInventory object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \WarehouseInventory) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WarehouseInventoryTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(WarehouseInventoryTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(WarehouseInventoryTableMap::COL_INTBWHSE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = WarehouseInventoryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WarehouseInventoryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WarehouseInventoryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_whse_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return WarehouseInventoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a WarehouseInventory or Criteria object.
     *
     * @param mixed               $criteria Criteria or WarehouseInventory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from WarehouseInventory object
        }


        // Set the correct dbName
        $query = WarehouseInventoryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // WarehouseInventoryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
WarehouseInventoryTableMap::buildTableMap();
