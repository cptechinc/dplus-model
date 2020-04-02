<?php

namespace Map;

use \BookingDayCustomer;
use \BookingDayCustomerQuery;
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
 * This class defines the structure of the 'so_book_by_day_cust' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BookingDayCustomerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.BookingDayCustomerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_book_by_day_cust';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\BookingDayCustomer';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'BookingDayCustomer';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'so_book_by_day_cust.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'so_book_by_day_cust.ArstShipId';

    /**
     * the column name for the BkgcDate field
     */
    const COL_BKGCDATE = 'so_book_by_day_cust.BkgcDate';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'so_book_by_day_cust.ArspSalePer1';

    /**
     * the column name for the BkgcNetAmt field
     */
    const COL_BKGCNETAMT = 'so_book_by_day_cust.BkgcNetAmt';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_book_by_day_cust.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_book_by_day_cust.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_book_by_day_cust.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arstshipid', 'Bkgcdate', 'Arspsaleper1', 'Bkgcnetamt', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arstshipid', 'bkgcdate', 'arspsaleper1', 'bkgcnetamt', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(BookingDayCustomerTableMap::COL_ARCUCUSTID, BookingDayCustomerTableMap::COL_ARSTSHIPID, BookingDayCustomerTableMap::COL_BKGCDATE, BookingDayCustomerTableMap::COL_ARSPSALEPER1, BookingDayCustomerTableMap::COL_BKGCNETAMT, BookingDayCustomerTableMap::COL_DATEUPDTD, BookingDayCustomerTableMap::COL_TIMEUPDTD, BookingDayCustomerTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArstShipId', 'BkgcDate', 'ArspSalePer1', 'BkgcNetAmt', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arstshipid' => 1, 'Bkgcdate' => 2, 'Arspsaleper1' => 3, 'Bkgcnetamt' => 4, 'Dateupdtd' => 5, 'Timeupdtd' => 6, 'Dummy' => 7, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arstshipid' => 1, 'bkgcdate' => 2, 'arspsaleper1' => 3, 'bkgcnetamt' => 4, 'dateupdtd' => 5, 'timeupdtd' => 6, 'dummy' => 7, ),
        self::TYPE_COLNAME       => array(BookingDayCustomerTableMap::COL_ARCUCUSTID => 0, BookingDayCustomerTableMap::COL_ARSTSHIPID => 1, BookingDayCustomerTableMap::COL_BKGCDATE => 2, BookingDayCustomerTableMap::COL_ARSPSALEPER1 => 3, BookingDayCustomerTableMap::COL_BKGCNETAMT => 4, BookingDayCustomerTableMap::COL_DATEUPDTD => 5, BookingDayCustomerTableMap::COL_TIMEUPDTD => 6, BookingDayCustomerTableMap::COL_DUMMY => 7, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArstShipId' => 1, 'BkgcDate' => 2, 'ArspSalePer1' => 3, 'BkgcNetAmt' => 4, 'DateUpdtd' => 5, 'TimeUpdtd' => 6, 'dummy' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
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
        $this->setName('so_book_by_day_cust');
        $this->setPhpName('BookingDayCustomer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\BookingDayCustomer');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR' , 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addPrimaryKey('BkgcDate', 'Bkgcdate', 'VARCHAR', true, 8, '');
        $this->addForeignPrimaryKey('ArspSalePer1', 'Arspsaleper1', 'VARCHAR' , 'ar_saleper1', 'ArspSalePer1', true, 6, '');
        $this->addColumn('BkgcNetAmt', 'Bkgcnetamt', 'DECIMAL', false, 20, null);
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
        $this->addRelation('SalesPerson', '\\SalesPerson', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
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
     * @param \BookingDayCustomer $obj A \BookingDayCustomer object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid()), (null === $obj->getBkgcdate() || is_scalar($obj->getBkgcdate()) || is_callable([$obj->getBkgcdate(), '__toString']) ? (string) $obj->getBkgcdate() : $obj->getBkgcdate()), (null === $obj->getArspsaleper1() || is_scalar($obj->getArspsaleper1()) || is_callable([$obj->getArspsaleper1(), '__toString']) ? (string) $obj->getArspsaleper1() : $obj->getArspsaleper1())]);
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
     * @param mixed $value A \BookingDayCustomer object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \BookingDayCustomer) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid()), (null === $value->getBkgcdate() || is_scalar($value->getBkgcdate()) || is_callable([$value->getBkgcdate(), '__toString']) ? (string) $value->getBkgcdate() : $value->getBkgcdate()), (null === $value->getArspsaleper1() || is_scalar($value->getArspsaleper1()) || is_callable([$value->getArspsaleper1(), '__toString']) ? (string) $value->getArspsaleper1() : $value->getArspsaleper1())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \BookingDayCustomer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Bkgcdate', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BookingDayCustomerTableMap::CLASS_DEFAULT : BookingDayCustomerTableMap::OM_CLASS;
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
     * @return array           (BookingDayCustomer object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BookingDayCustomerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BookingDayCustomerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BookingDayCustomerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BookingDayCustomerTableMap::OM_CLASS;
            /** @var BookingDayCustomer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BookingDayCustomerTableMap::addInstanceToPool($obj, $key);
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
            $key = BookingDayCustomerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BookingDayCustomerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BookingDayCustomer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BookingDayCustomerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_BKGCDATE);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_BKGCNETAMT);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(BookingDayCustomerTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.BkgcDate');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.BkgcNetAmt');
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
        return Propel::getServiceContainer()->getDatabaseMap(BookingDayCustomerTableMap::DATABASE_NAME)->getTable(BookingDayCustomerTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BookingDayCustomerTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BookingDayCustomerTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BookingDayCustomerTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BookingDayCustomer or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BookingDayCustomer object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayCustomerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \BookingDayCustomer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BookingDayCustomerTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BookingDayCustomerTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BookingDayCustomerTableMap::COL_ARSTSHIPID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDayCustomerTableMap::COL_BKGCDATE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDayCustomerTableMap::COL_ARSPSALEPER1, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = BookingDayCustomerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BookingDayCustomerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BookingDayCustomerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_book_by_day_cust table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BookingDayCustomerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BookingDayCustomer or Criteria object.
     *
     * @param mixed               $criteria Criteria or BookingDayCustomer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayCustomerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BookingDayCustomer object
        }


        // Set the correct dbName
        $query = BookingDayCustomerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BookingDayCustomerTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BookingDayCustomerTableMap::buildTableMap();
