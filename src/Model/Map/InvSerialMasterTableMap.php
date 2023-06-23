<?php

namespace Map;

use \InvSerialMaster;
use \InvSerialMasterQuery;
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
 * This class defines the structure of the 'inv_ser_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvSerialMasterTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvSerialMasterTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_ser_mast';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvSerialMaster';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvSerialMaster';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_ser_mast.InitItemNbr';

    /**
     * the column name for the SermSerNbr field
     */
    const COL_SERMSERNBR = 'inv_ser_mast.SermSerNbr';

    /**
     * the column name for the SermProdDate field
     */
    const COL_SERMPRODDATE = 'inv_ser_mast.SermProdDate';

    /**
     * the column name for the SermPrntCnt field
     */
    const COL_SERMPRNTCNT = 'inv_ser_mast.SermPrntCnt';

    /**
     * the column name for the SermSordNbr field
     */
    const COL_SERMSORDNBR = 'inv_ser_mast.SermSordNbr';

    /**
     * the column name for the SermInvcDate field
     */
    const COL_SERMINVCDATE = 'inv_ser_mast.SermInvcDate';

    /**
     * the column name for the SermRevision field
     */
    const COL_SERMREVISION = 'inv_ser_mast.SermRevision';

    /**
     * the column name for the SermCtry field
     */
    const COL_SERMCTRY = 'inv_ser_mast.SermCtry';

    /**
     * the column name for the SermAcAllocOrdr field
     */
    const COL_SERMACALLOCORDR = 'inv_ser_mast.SermAcAllocOrdr';

    /**
     * the column name for the SermRefSerNbr field
     */
    const COL_SERMREFSERNBR = 'inv_ser_mast.SermRefSerNbr';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_ser_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_ser_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_ser_mast.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Sermsernbr', 'Sermproddate', 'Sermprntcnt', 'Sermsordnbr', 'Serminvcdate', 'Sermrevision', 'Sermctry', 'Sermacallocordr', 'Sermrefsernbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'sermsernbr', 'sermproddate', 'sermprntcnt', 'sermsordnbr', 'serminvcdate', 'sermrevision', 'sermctry', 'sermacallocordr', 'sermrefsernbr', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvSerialMasterTableMap::COL_INITITEMNBR, InvSerialMasterTableMap::COL_SERMSERNBR, InvSerialMasterTableMap::COL_SERMPRODDATE, InvSerialMasterTableMap::COL_SERMPRNTCNT, InvSerialMasterTableMap::COL_SERMSORDNBR, InvSerialMasterTableMap::COL_SERMINVCDATE, InvSerialMasterTableMap::COL_SERMREVISION, InvSerialMasterTableMap::COL_SERMCTRY, InvSerialMasterTableMap::COL_SERMACALLOCORDR, InvSerialMasterTableMap::COL_SERMREFSERNBR, InvSerialMasterTableMap::COL_DATEUPDTD, InvSerialMasterTableMap::COL_TIMEUPDTD, InvSerialMasterTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'SermSerNbr', 'SermProdDate', 'SermPrntCnt', 'SermSordNbr', 'SermInvcDate', 'SermRevision', 'SermCtry', 'SermAcAllocOrdr', 'SermRefSerNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Sermsernbr' => 1, 'Sermproddate' => 2, 'Sermprntcnt' => 3, 'Sermsordnbr' => 4, 'Serminvcdate' => 5, 'Sermrevision' => 6, 'Sermctry' => 7, 'Sermacallocordr' => 8, 'Sermrefsernbr' => 9, 'Dateupdtd' => 10, 'Timeupdtd' => 11, 'Dummy' => 12, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'sermsernbr' => 1, 'sermproddate' => 2, 'sermprntcnt' => 3, 'sermsordnbr' => 4, 'serminvcdate' => 5, 'sermrevision' => 6, 'sermctry' => 7, 'sermacallocordr' => 8, 'sermrefsernbr' => 9, 'dateupdtd' => 10, 'timeupdtd' => 11, 'dummy' => 12, ),
        self::TYPE_COLNAME       => array(InvSerialMasterTableMap::COL_INITITEMNBR => 0, InvSerialMasterTableMap::COL_SERMSERNBR => 1, InvSerialMasterTableMap::COL_SERMPRODDATE => 2, InvSerialMasterTableMap::COL_SERMPRNTCNT => 3, InvSerialMasterTableMap::COL_SERMSORDNBR => 4, InvSerialMasterTableMap::COL_SERMINVCDATE => 5, InvSerialMasterTableMap::COL_SERMREVISION => 6, InvSerialMasterTableMap::COL_SERMCTRY => 7, InvSerialMasterTableMap::COL_SERMACALLOCORDR => 8, InvSerialMasterTableMap::COL_SERMREFSERNBR => 9, InvSerialMasterTableMap::COL_DATEUPDTD => 10, InvSerialMasterTableMap::COL_TIMEUPDTD => 11, InvSerialMasterTableMap::COL_DUMMY => 12, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'SermSerNbr' => 1, 'SermProdDate' => 2, 'SermPrntCnt' => 3, 'SermSordNbr' => 4, 'SermInvcDate' => 5, 'SermRevision' => 6, 'SermCtry' => 7, 'SermAcAllocOrdr' => 8, 'SermRefSerNbr' => 9, 'DateUpdtd' => 10, 'TimeUpdtd' => 11, 'dummy' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('inv_ser_mast');
        $this->setPhpName('InvSerialMaster');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvSerialMaster');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('SermSerNbr', 'Sermsernbr', 'VARCHAR', true, 20, '');
        $this->addColumn('SermProdDate', 'Sermproddate', 'VARCHAR', false, 8, null);
        $this->addColumn('SermPrntCnt', 'Sermprntcnt', 'INTEGER', false, 4, null);
        $this->addColumn('SermSordNbr', 'Sermsordnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('SermInvcDate', 'Serminvcdate', 'VARCHAR', false, 8, null);
        $this->addColumn('SermRevision', 'Sermrevision', 'VARCHAR', false, 10, null);
        $this->addColumn('SermCtry', 'Sermctry', 'VARCHAR', false, 4, null);
        $this->addColumn('SermAcAllocOrdr', 'Sermacallocordr', 'VARCHAR', false, 10, null);
        $this->addColumn('SermRefSerNbr', 'Sermrefsernbr', 'VARCHAR', false, 20, null);
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
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvLotTag', '\\InvLotTag', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':IntgLotSer',
    1 => ':SermSerNbr',
  ),
), null, null, 'InvLotTags', false);
        $this->addRelation('InvSerialWarranty', '\\InvSerialWarranty', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':SermSerNbr',
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
     * @param \InvSerialMaster $obj A \InvSerialMaster object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getSermsernbr() || is_scalar($obj->getSermsernbr()) || is_callable([$obj->getSermsernbr(), '__toString']) ? (string) $obj->getSermsernbr() : $obj->getSermsernbr())]);
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
     * @param mixed $value A \InvSerialMaster object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvSerialMaster) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getSermsernbr() || is_scalar($value->getSermsernbr()) || is_callable([$value->getSermsernbr(), '__toString']) ? (string) $value->getSermsernbr() : $value->getSermsernbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvSerialMaster object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvSerialMasterTableMap::CLASS_DEFAULT : InvSerialMasterTableMap::OM_CLASS;
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
     * @return array           (InvSerialMaster object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvSerialMasterTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvSerialMasterTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvSerialMasterTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvSerialMasterTableMap::OM_CLASS;
            /** @var InvSerialMaster $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvSerialMasterTableMap::addInstanceToPool($obj, $key);
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
            $key = InvSerialMasterTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvSerialMasterTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvSerialMaster $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvSerialMasterTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMSERNBR);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMPRODDATE);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMPRNTCNT);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMSORDNBR);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMINVCDATE);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMREVISION);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMCTRY);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMACALLOCORDR);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_SERMREFSERNBR);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvSerialMasterTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.SermSerNbr');
            $criteria->addSelectColumn($alias . '.SermProdDate');
            $criteria->addSelectColumn($alias . '.SermPrntCnt');
            $criteria->addSelectColumn($alias . '.SermSordNbr');
            $criteria->addSelectColumn($alias . '.SermInvcDate');
            $criteria->addSelectColumn($alias . '.SermRevision');
            $criteria->addSelectColumn($alias . '.SermCtry');
            $criteria->addSelectColumn($alias . '.SermAcAllocOrdr');
            $criteria->addSelectColumn($alias . '.SermRefSerNbr');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvSerialMasterTableMap::DATABASE_NAME)->getTable(InvSerialMasterTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvSerialMasterTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvSerialMasterTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvSerialMasterTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvSerialMaster or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvSerialMaster object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvSerialMaster) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvSerialMasterTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvSerialMasterTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvSerialMasterTableMap::COL_SERMSERNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvSerialMasterQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvSerialMasterTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvSerialMasterTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_ser_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvSerialMasterQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvSerialMaster or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvSerialMaster object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvSerialMaster object
        }


        // Set the correct dbName
        $query = InvSerialMasterQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvSerialMasterTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvSerialMasterTableMap::buildTableMap();
