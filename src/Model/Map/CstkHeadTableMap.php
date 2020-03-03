<?php

namespace Map;

use \CstkHead;
use \CstkHeadQuery;
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
 * This class defines the structure of the 'cust_stock_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CstkHeadTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CstkHeadTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'cust_stock_head';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CstkHead';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CstkHead';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'cust_stock_head.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'cust_stock_head.ArstShipId';

    /**
     * the column name for the CskhCell field
     */
    const COL_CSKHCELL = 'cust_stock_head.CskhCell';

    /**
     * the column name for the CskhEnterDate field
     */
    const COL_CSKHENTERDATE = 'cust_stock_head.CskhEnterDate';

    /**
     * the column name for the CskhConsign field
     */
    const COL_CSKHCONSIGN = 'cust_stock_head.CskhConsign';

    /**
     * the column name for the CskhReplCnt field
     */
    const COL_CSKHREPLCNT = 'cust_stock_head.CskhReplCnt';

    /**
     * the column name for the CskhLabelFormat field
     */
    const COL_CSKHLABELFORMAT = 'cust_stock_head.CskhLabelFormat';

    /**
     * the column name for the CskhWhse field
     */
    const COL_CSKHWHSE = 'cust_stock_head.CskhWhse';

    /**
     * the column name for the CskhApproved field
     */
    const COL_CSKHAPPROVED = 'cust_stock_head.CskhApproved';

    /**
     * the column name for the CskhConsignBinWhse field
     */
    const COL_CSKHCONSIGNBINWHSE = 'cust_stock_head.CskhConsignBinWhse';

    /**
     * the column name for the CskhConsignBinCust field
     */
    const COL_CSKHCONSIGNBINCUST = 'cust_stock_head.CskhConsignBinCust';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'cust_stock_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'cust_stock_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'cust_stock_head.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arstshipid', 'Cskhcell', 'Cskhenterdate', 'Cskhconsign', 'Cskhreplcnt', 'Cskhlabelformat', 'Cskhwhse', 'Cskhapproved', 'Cskhconsignbinwhse', 'Cskhconsignbincust', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arstshipid', 'cskhcell', 'cskhenterdate', 'cskhconsign', 'cskhreplcnt', 'cskhlabelformat', 'cskhwhse', 'cskhapproved', 'cskhconsignbinwhse', 'cskhconsignbincust', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CstkHeadTableMap::COL_ARCUCUSTID, CstkHeadTableMap::COL_ARSTSHIPID, CstkHeadTableMap::COL_CSKHCELL, CstkHeadTableMap::COL_CSKHENTERDATE, CstkHeadTableMap::COL_CSKHCONSIGN, CstkHeadTableMap::COL_CSKHREPLCNT, CstkHeadTableMap::COL_CSKHLABELFORMAT, CstkHeadTableMap::COL_CSKHWHSE, CstkHeadTableMap::COL_CSKHAPPROVED, CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE, CstkHeadTableMap::COL_CSKHCONSIGNBINCUST, CstkHeadTableMap::COL_DATEUPDTD, CstkHeadTableMap::COL_TIMEUPDTD, CstkHeadTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArstShipId', 'CskhCell', 'CskhEnterDate', 'CskhConsign', 'CskhReplCnt', 'CskhLabelFormat', 'CskhWhse', 'CskhApproved', 'CskhConsignBinWhse', 'CskhConsignBinCust', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arstshipid' => 1, 'Cskhcell' => 2, 'Cskhenterdate' => 3, 'Cskhconsign' => 4, 'Cskhreplcnt' => 5, 'Cskhlabelformat' => 6, 'Cskhwhse' => 7, 'Cskhapproved' => 8, 'Cskhconsignbinwhse' => 9, 'Cskhconsignbincust' => 10, 'Dateupdtd' => 11, 'Timeupdtd' => 12, 'Dummy' => 13, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arstshipid' => 1, 'cskhcell' => 2, 'cskhenterdate' => 3, 'cskhconsign' => 4, 'cskhreplcnt' => 5, 'cskhlabelformat' => 6, 'cskhwhse' => 7, 'cskhapproved' => 8, 'cskhconsignbinwhse' => 9, 'cskhconsignbincust' => 10, 'dateupdtd' => 11, 'timeupdtd' => 12, 'dummy' => 13, ),
        self::TYPE_COLNAME       => array(CstkHeadTableMap::COL_ARCUCUSTID => 0, CstkHeadTableMap::COL_ARSTSHIPID => 1, CstkHeadTableMap::COL_CSKHCELL => 2, CstkHeadTableMap::COL_CSKHENTERDATE => 3, CstkHeadTableMap::COL_CSKHCONSIGN => 4, CstkHeadTableMap::COL_CSKHREPLCNT => 5, CstkHeadTableMap::COL_CSKHLABELFORMAT => 6, CstkHeadTableMap::COL_CSKHWHSE => 7, CstkHeadTableMap::COL_CSKHAPPROVED => 8, CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE => 9, CstkHeadTableMap::COL_CSKHCONSIGNBINCUST => 10, CstkHeadTableMap::COL_DATEUPDTD => 11, CstkHeadTableMap::COL_TIMEUPDTD => 12, CstkHeadTableMap::COL_DUMMY => 13, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArstShipId' => 1, 'CskhCell' => 2, 'CskhEnterDate' => 3, 'CskhConsign' => 4, 'CskhReplCnt' => 5, 'CskhLabelFormat' => 6, 'CskhWhse' => 7, 'CskhApproved' => 8, 'CskhConsignBinWhse' => 9, 'CskhConsignBinCust' => 10, 'DateUpdtd' => 11, 'TimeUpdtd' => 12, 'dummy' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('cust_stock_head');
        $this->setPhpName('CstkHead');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CstkHead');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR' , 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addPrimaryKey('CskhCell', 'Cskhcell', 'VARCHAR', true, 8, '');
        $this->addColumn('CskhEnterDate', 'Cskhenterdate', 'VARCHAR', false, 8, null);
        $this->addColumn('CskhConsign', 'Cskhconsign', 'VARCHAR', false, 1, null);
        $this->addColumn('CskhReplCnt', 'Cskhreplcnt', 'VARCHAR', false, 1, null);
        $this->addColumn('CskhLabelFormat', 'Cskhlabelformat', 'VARCHAR', false, 8, null);
        $this->addColumn('CskhWhse', 'Cskhwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('CskhApproved', 'Cskhapproved', 'VARCHAR', false, 1, null);
        $this->addColumn('CskhConsignBinWhse', 'Cskhconsignbinwhse', 'VARCHAR', false, 8, null);
        $this->addColumn('CskhConsignBinCust', 'Cskhconsignbincust', 'VARCHAR', false, 8, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('CustomerShipto', '\\CustomerShipto', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
  1 =>
  array (
    0 => ':ArstShipId',
    1 => ':ArstShipId',
  ),
), null, null, null, false);
        $this->addRelation('CstkItem', '\\CstkItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
  1 =>
  array (
    0 => ':ArstShipId',
    1 => ':ArstShipId',
  ),
  2 =>
  array (
    0 => ':CskhCell',
    1 => ':CskhCell',
  ),
), null, null, 'CstkItems', false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CstkHead $obj A \CstkHead object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid()), (null === $obj->getCskhcell() || is_scalar($obj->getCskhcell()) || is_callable([$obj->getCskhcell(), '__toString']) ? (string) $obj->getCskhcell() : $obj->getCskhcell())]);
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
     * @param mixed $value A \CstkHead object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CstkHead) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid()), (null === $value->getCskhcell() || is_scalar($value->getCskhcell()) || is_callable([$value->getCskhcell(), '__toString']) ? (string) $value->getCskhcell() : $value->getCskhcell())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CstkHead object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Cskhcell', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CstkHeadTableMap::CLASS_DEFAULT : CstkHeadTableMap::OM_CLASS;
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
     * @return array           (CstkHead object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CstkHeadTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CstkHeadTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CstkHeadTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CstkHeadTableMap::OM_CLASS;
            /** @var CstkHead $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CstkHeadTableMap::addInstanceToPool($obj, $key);
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
            $key = CstkHeadTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CstkHeadTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CstkHead $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CstkHeadTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CstkHeadTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHCELL);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHENTERDATE);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHCONSIGN);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHREPLCNT);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHLABELFORMAT);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHWHSE);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHAPPROVED);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_CSKHCONSIGNBINCUST);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CstkHeadTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.CskhCell');
            $criteria->addSelectColumn($alias . '.CskhEnterDate');
            $criteria->addSelectColumn($alias . '.CskhConsign');
            $criteria->addSelectColumn($alias . '.CskhReplCnt');
            $criteria->addSelectColumn($alias . '.CskhLabelFormat');
            $criteria->addSelectColumn($alias . '.CskhWhse');
            $criteria->addSelectColumn($alias . '.CskhApproved');
            $criteria->addSelectColumn($alias . '.CskhConsignBinWhse');
            $criteria->addSelectColumn($alias . '.CskhConsignBinCust');
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
        return Propel::getServiceContainer()->getDatabaseMap(CstkHeadTableMap::DATABASE_NAME)->getTable(CstkHeadTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CstkHeadTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CstkHeadTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CstkHeadTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CstkHead or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CstkHead object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CstkHead) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CstkHeadTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CstkHeadTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CstkHeadTableMap::COL_ARSTSHIPID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CstkHeadTableMap::COL_CSKHCELL, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = CstkHeadQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CstkHeadTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CstkHeadTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the cust_stock_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CstkHeadQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CstkHead or Criteria object.
     *
     * @param mixed               $criteria Criteria or CstkHead object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CstkHead object
        }


        // Set the correct dbName
        $query = CstkHeadQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CstkHeadTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CstkHeadTableMap::buildTableMap();
