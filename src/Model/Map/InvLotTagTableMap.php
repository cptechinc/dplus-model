<?php

namespace Map;

use \InvLotTag;
use \InvLotTagQuery;
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
 * This class defines the structure of the 'inv_inv_tag' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvLotTagTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvLotTagTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_inv_tag';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvLotTag';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvLotTag';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the IntgWorkId field
     */
    const COL_INTGWORKID = 'inv_inv_tag.IntgWorkId';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'inv_inv_tag.IntbWhse';

    /**
     * the column name for the IntgTagNbr field
     */
    const COL_INTGTAGNBR = 'inv_inv_tag.IntgTagNbr';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_inv_tag.InitItemNbr';

    /**
     * the column name for the IntgLotSer field
     */
    const COL_INTGLOTSER = 'inv_inv_tag.IntgLotSer';

    /**
     * the column name for the IntgBin field
     */
    const COL_INTGBIN = 'inv_inv_tag.IntgBin';

    /**
     * the column name for the IntgQty field
     */
    const COL_INTGQTY = 'inv_inv_tag.IntgQty';

    /**
     * the column name for the IntgUnitCost field
     */
    const COL_INTGUNITCOST = 'inv_inv_tag.IntgUnitCost';

    /**
     * the column name for the IntgIssue field
     */
    const COL_INTGISSUE = 'inv_inv_tag.IntgIssue';

    /**
     * the column name for the IntgUserId field
     */
    const COL_INTGUSERID = 'inv_inv_tag.IntgUserId';

    /**
     * the column name for the IntgEntrDate field
     */
    const COL_INTGENTRDATE = 'inv_inv_tag.IntgEntrDate';

    /**
     * the column name for the IntgEntrTime field
     */
    const COL_INTGENTRTIME = 'inv_inv_tag.IntgEntrTime';

    /**
     * the column name for the IntgPosted field
     */
    const COL_INTGPOSTED = 'inv_inv_tag.IntgPosted';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_inv_tag.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_inv_tag.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_inv_tag.dummy';

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
        self::TYPE_PHPNAME       => array('Intgworkid', 'Intbwhse', 'Intgtagnbr', 'Inititemnbr', 'Intglotser', 'Intgbin', 'Intgqty', 'Intgunitcost', 'Intgissue', 'Intguserid', 'Intgentrdate', 'Intgentrtime', 'Intgposted', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intgworkid', 'intbwhse', 'intgtagnbr', 'inititemnbr', 'intglotser', 'intgbin', 'intgqty', 'intgunitcost', 'intgissue', 'intguserid', 'intgentrdate', 'intgentrtime', 'intgposted', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvLotTagTableMap::COL_INTGWORKID, InvLotTagTableMap::COL_INTBWHSE, InvLotTagTableMap::COL_INTGTAGNBR, InvLotTagTableMap::COL_INITITEMNBR, InvLotTagTableMap::COL_INTGLOTSER, InvLotTagTableMap::COL_INTGBIN, InvLotTagTableMap::COL_INTGQTY, InvLotTagTableMap::COL_INTGUNITCOST, InvLotTagTableMap::COL_INTGISSUE, InvLotTagTableMap::COL_INTGUSERID, InvLotTagTableMap::COL_INTGENTRDATE, InvLotTagTableMap::COL_INTGENTRTIME, InvLotTagTableMap::COL_INTGPOSTED, InvLotTagTableMap::COL_DATEUPDTD, InvLotTagTableMap::COL_TIMEUPDTD, InvLotTagTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntgWorkId', 'IntbWhse', 'IntgTagNbr', 'InitItemNbr', 'IntgLotSer', 'IntgBin', 'IntgQty', 'IntgUnitCost', 'IntgIssue', 'IntgUserId', 'IntgEntrDate', 'IntgEntrTime', 'IntgPosted', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intgworkid' => 0, 'Intbwhse' => 1, 'Intgtagnbr' => 2, 'Inititemnbr' => 3, 'Intglotser' => 4, 'Intgbin' => 5, 'Intgqty' => 6, 'Intgunitcost' => 7, 'Intgissue' => 8, 'Intguserid' => 9, 'Intgentrdate' => 10, 'Intgentrtime' => 11, 'Intgposted' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ),
        self::TYPE_CAMELNAME     => array('intgworkid' => 0, 'intbwhse' => 1, 'intgtagnbr' => 2, 'inititemnbr' => 3, 'intglotser' => 4, 'intgbin' => 5, 'intgqty' => 6, 'intgunitcost' => 7, 'intgissue' => 8, 'intguserid' => 9, 'intgentrdate' => 10, 'intgentrtime' => 11, 'intgposted' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ),
        self::TYPE_COLNAME       => array(InvLotTagTableMap::COL_INTGWORKID => 0, InvLotTagTableMap::COL_INTBWHSE => 1, InvLotTagTableMap::COL_INTGTAGNBR => 2, InvLotTagTableMap::COL_INITITEMNBR => 3, InvLotTagTableMap::COL_INTGLOTSER => 4, InvLotTagTableMap::COL_INTGBIN => 5, InvLotTagTableMap::COL_INTGQTY => 6, InvLotTagTableMap::COL_INTGUNITCOST => 7, InvLotTagTableMap::COL_INTGISSUE => 8, InvLotTagTableMap::COL_INTGUSERID => 9, InvLotTagTableMap::COL_INTGENTRDATE => 10, InvLotTagTableMap::COL_INTGENTRTIME => 11, InvLotTagTableMap::COL_INTGPOSTED => 12, InvLotTagTableMap::COL_DATEUPDTD => 13, InvLotTagTableMap::COL_TIMEUPDTD => 14, InvLotTagTableMap::COL_DUMMY => 15, ),
        self::TYPE_FIELDNAME     => array('IntgWorkId' => 0, 'IntbWhse' => 1, 'IntgTagNbr' => 2, 'InitItemNbr' => 3, 'IntgLotSer' => 4, 'IntgBin' => 5, 'IntgQty' => 6, 'IntgUnitCost' => 7, 'IntgIssue' => 8, 'IntgUserId' => 9, 'IntgEntrDate' => 10, 'IntgEntrTime' => 11, 'IntgPosted' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('inv_inv_tag');
        $this->setPhpName('InvLotTag');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvLotTag');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntgWorkId', 'Intgworkid', 'VARCHAR', true, 8, '');
        $this->addForeignPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR' , 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addPrimaryKey('IntgTagNbr', 'Intgtagnbr', 'INTEGER', true, 8, 0);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_ser_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignKey('IntgLotSer', 'Intglotser', 'VARCHAR', 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addForeignKey('IntgLotSer', 'Intglotser', 'VARCHAR', 'inv_ser_mast', 'SermSerNbr', true, 20, '');
        $this->addColumn('IntgBin', 'Intgbin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntgQty', 'Intgqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntgUnitCost', 'Intgunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntgIssue', 'Intgissue', 'CHAR', true, null, '');
        $this->addForeignKey('IntgUserId', 'Intguserid', 'VARCHAR', 'sys_login', 'UsrcId', true, 8, '');
        $this->addColumn('IntgEntrDate', 'Intgentrdate', 'CHAR', true, 8, '');
        $this->addColumn('IntgEntrTime', 'Intgentrtime', 'CHAR', true, 6, '');
        $this->addColumn('IntgPosted', 'Intgposted', 'CHAR', true, null, 'N');
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
    0 => ':IntgLotSer',
    1 => ':LotmLotNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvSerialMaster', '\\InvSerialMaster', RelationMap::MANY_TO_ONE, array (
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
), null, null, null, false);
        $this->addRelation('DplusUser', '\\DplusUser', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntgUserId',
    1 => ':UsrcId',
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
     * @param \InvLotTag $obj A \InvLotTag object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getIntgworkid() || is_scalar($obj->getIntgworkid()) || is_callable([$obj->getIntgworkid(), '__toString']) ? (string) $obj->getIntgworkid() : $obj->getIntgworkid()), (null === $obj->getIntbwhse() || is_scalar($obj->getIntbwhse()) || is_callable([$obj->getIntbwhse(), '__toString']) ? (string) $obj->getIntbwhse() : $obj->getIntbwhse()), (null === $obj->getIntgtagnbr() || is_scalar($obj->getIntgtagnbr()) || is_callable([$obj->getIntgtagnbr(), '__toString']) ? (string) $obj->getIntgtagnbr() : $obj->getIntgtagnbr())]);
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
     * @param mixed $value A \InvLotTag object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvLotTag) {
                $key = serialize([(null === $value->getIntgworkid() || is_scalar($value->getIntgworkid()) || is_callable([$value->getIntgworkid(), '__toString']) ? (string) $value->getIntgworkid() : $value->getIntgworkid()), (null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse()), (null === $value->getIntgtagnbr() || is_scalar($value->getIntgtagnbr()) || is_callable([$value->getIntgtagnbr(), '__toString']) ? (string) $value->getIntgtagnbr() : $value->getIntgtagnbr())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvLotTag object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Intgworkid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Intgtagnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvLotTagTableMap::CLASS_DEFAULT : InvLotTagTableMap::OM_CLASS;
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
     * @return array           (InvLotTag object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvLotTagTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvLotTagTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvLotTagTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvLotTagTableMap::OM_CLASS;
            /** @var InvLotTag $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvLotTagTableMap::addInstanceToPool($obj, $key);
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
            $key = InvLotTagTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvLotTagTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvLotTag $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvLotTagTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGWORKID);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGTAGNBR);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGLOTSER);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGBIN);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGQTY);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGUNITCOST);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGISSUE);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGUSERID);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGENTRDATE);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGENTRTIME);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_INTGPOSTED);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvLotTagTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntgWorkId');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.IntgTagNbr');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntgLotSer');
            $criteria->addSelectColumn($alias . '.IntgBin');
            $criteria->addSelectColumn($alias . '.IntgQty');
            $criteria->addSelectColumn($alias . '.IntgUnitCost');
            $criteria->addSelectColumn($alias . '.IntgIssue');
            $criteria->addSelectColumn($alias . '.IntgUserId');
            $criteria->addSelectColumn($alias . '.IntgEntrDate');
            $criteria->addSelectColumn($alias . '.IntgEntrTime');
            $criteria->addSelectColumn($alias . '.IntgPosted');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvLotTagTableMap::DATABASE_NAME)->getTable(InvLotTagTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvLotTagTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvLotTagTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvLotTagTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvLotTag or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvLotTag object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvLotTag) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvLotTagTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvLotTagTableMap::COL_INTGWORKID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvLotTagTableMap::COL_INTBWHSE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(InvLotTagTableMap::COL_INTGTAGNBR, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvLotTagQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvLotTagTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvLotTagTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_inv_tag table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvLotTagQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvLotTag or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvLotTag object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvLotTag object
        }


        // Set the correct dbName
        $query = InvLotTagQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvLotTagTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvLotTagTableMap::buildTableMap();
