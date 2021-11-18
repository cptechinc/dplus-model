<?php

namespace Map;

use \InvLot;
use \InvLotQuery;
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
 * This class defines the structure of the 'inv_lot_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvLotTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvLotTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_lot_mast';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvLot';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvLot';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 19;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 19;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_lot_mast.InitItemNbr';

    /**
     * the column name for the LotmLotNbr field
     */
    const COL_LOTMLOTNBR = 'inv_lot_mast.LotmLotNbr';

    /**
     * the column name for the LotmLotRef field
     */
    const COL_LOTMLOTREF = 'inv_lot_mast.LotmLotRef';

    /**
     * the column name for the LotmFrstActDate field
     */
    const COL_LOTMFRSTACTDATE = 'inv_lot_mast.LotmFrstActDate';

    /**
     * the column name for the LotmImagYn field
     */
    const COL_LOTMIMAGYN = 'inv_lot_mast.LotmImagYn';

    /**
     * the column name for the LotmUnitWght field
     */
    const COL_LOTMUNITWGHT = 'inv_lot_mast.LotmUnitWght';

    /**
     * the column name for the LotmRevision field
     */
    const COL_LOTMREVISION = 'inv_lot_mast.LotmRevision';

    /**
     * the column name for the LotmCtry field
     */
    const COL_LOTMCTRY = 'inv_lot_mast.LotmCtry';

    /**
     * the column name for the LotmCOfC field
     */
    const COL_LOTMCOFC = 'inv_lot_mast.LotmCOfC';

    /**
     * the column name for the LotmCreateDate field
     */
    const COL_LOTMCREATEDATE = 'inv_lot_mast.LotmCreateDate';

    /**
     * the column name for the LotmCreateTime field
     */
    const COL_LOTMCREATETIME = 'inv_lot_mast.LotmCreateTime';

    /**
     * the column name for the LotmVendId field
     */
    const COL_LOTMVENDID = 'inv_lot_mast.LotmVendId';

    /**
     * the column name for the LotmExpireDate field
     */
    const COL_LOTMEXPIREDATE = 'inv_lot_mast.LotmExpireDate';

    /**
     * the column name for the LotmUnitCost field
     */
    const COL_LOTMUNITCOST = 'inv_lot_mast.LotmUnitCost';

    /**
     * the column name for the LotmCntrQty field
     */
    const COL_LOTMCNTRQTY = 'inv_lot_mast.LotmCntrQty';

    /**
     * the column name for the LotmSrcCd field
     */
    const COL_LOTMSRCCD = 'inv_lot_mast.LotmSrcCd';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_lot_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_lot_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_lot_mast.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Lotmlotnbr', 'Lotmlotref', 'Lotmfrstactdate', 'Lotmimagyn', 'Lotmunitwght', 'Lotmrevision', 'Lotmctry', 'Lotmcofc', 'Lotmcreatedate', 'Lotmcreatetime', 'Lotmvendid', 'Lotmexpiredate', 'Lotmunitcost', 'Lotmcntrqty', 'Lotmsrccd', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'lotmlotnbr', 'lotmlotref', 'lotmfrstactdate', 'lotmimagyn', 'lotmunitwght', 'lotmrevision', 'lotmctry', 'lotmcofc', 'lotmcreatedate', 'lotmcreatetime', 'lotmvendid', 'lotmexpiredate', 'lotmunitcost', 'lotmcntrqty', 'lotmsrccd', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvLotTableMap::COL_INITITEMNBR, InvLotTableMap::COL_LOTMLOTNBR, InvLotTableMap::COL_LOTMLOTREF, InvLotTableMap::COL_LOTMFRSTACTDATE, InvLotTableMap::COL_LOTMIMAGYN, InvLotTableMap::COL_LOTMUNITWGHT, InvLotTableMap::COL_LOTMREVISION, InvLotTableMap::COL_LOTMCTRY, InvLotTableMap::COL_LOTMCOFC, InvLotTableMap::COL_LOTMCREATEDATE, InvLotTableMap::COL_LOTMCREATETIME, InvLotTableMap::COL_LOTMVENDID, InvLotTableMap::COL_LOTMEXPIREDATE, InvLotTableMap::COL_LOTMUNITCOST, InvLotTableMap::COL_LOTMCNTRQTY, InvLotTableMap::COL_LOTMSRCCD, InvLotTableMap::COL_DATEUPDTD, InvLotTableMap::COL_TIMEUPDTD, InvLotTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'LotmLotNbr', 'LotmLotRef', 'LotmFrstActDate', 'LotmImagYn', 'LotmUnitWght', 'LotmRevision', 'LotmCtry', 'LotmCOfC', 'LotmCreateDate', 'LotmCreateTime', 'LotmVendId', 'LotmExpireDate', 'LotmUnitCost', 'LotmCntrQty', 'LotmSrcCd', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Lotmlotnbr' => 1, 'Lotmlotref' => 2, 'Lotmfrstactdate' => 3, 'Lotmimagyn' => 4, 'Lotmunitwght' => 5, 'Lotmrevision' => 6, 'Lotmctry' => 7, 'Lotmcofc' => 8, 'Lotmcreatedate' => 9, 'Lotmcreatetime' => 10, 'Lotmvendid' => 11, 'Lotmexpiredate' => 12, 'Lotmunitcost' => 13, 'Lotmcntrqty' => 14, 'Lotmsrccd' => 15, 'Dateupdtd' => 16, 'Timeupdtd' => 17, 'Dummy' => 18, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'lotmlotnbr' => 1, 'lotmlotref' => 2, 'lotmfrstactdate' => 3, 'lotmimagyn' => 4, 'lotmunitwght' => 5, 'lotmrevision' => 6, 'lotmctry' => 7, 'lotmcofc' => 8, 'lotmcreatedate' => 9, 'lotmcreatetime' => 10, 'lotmvendid' => 11, 'lotmexpiredate' => 12, 'lotmunitcost' => 13, 'lotmcntrqty' => 14, 'lotmsrccd' => 15, 'dateupdtd' => 16, 'timeupdtd' => 17, 'dummy' => 18, ),
        self::TYPE_COLNAME       => array(InvLotTableMap::COL_INITITEMNBR => 0, InvLotTableMap::COL_LOTMLOTNBR => 1, InvLotTableMap::COL_LOTMLOTREF => 2, InvLotTableMap::COL_LOTMFRSTACTDATE => 3, InvLotTableMap::COL_LOTMIMAGYN => 4, InvLotTableMap::COL_LOTMUNITWGHT => 5, InvLotTableMap::COL_LOTMREVISION => 6, InvLotTableMap::COL_LOTMCTRY => 7, InvLotTableMap::COL_LOTMCOFC => 8, InvLotTableMap::COL_LOTMCREATEDATE => 9, InvLotTableMap::COL_LOTMCREATETIME => 10, InvLotTableMap::COL_LOTMVENDID => 11, InvLotTableMap::COL_LOTMEXPIREDATE => 12, InvLotTableMap::COL_LOTMUNITCOST => 13, InvLotTableMap::COL_LOTMCNTRQTY => 14, InvLotTableMap::COL_LOTMSRCCD => 15, InvLotTableMap::COL_DATEUPDTD => 16, InvLotTableMap::COL_TIMEUPDTD => 17, InvLotTableMap::COL_DUMMY => 18, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'LotmLotNbr' => 1, 'LotmLotRef' => 2, 'LotmFrstActDate' => 3, 'LotmImagYn' => 4, 'LotmUnitWght' => 5, 'LotmRevision' => 6, 'LotmCtry' => 7, 'LotmCOfC' => 8, 'LotmCreateDate' => 9, 'LotmCreateTime' => 10, 'LotmVendId' => 11, 'LotmExpireDate' => 12, 'LotmUnitCost' => 13, 'LotmCntrQty' => 14, 'LotmSrcCd' => 15, 'DateUpdtd' => 16, 'TimeUpdtd' => 17, 'dummy' => 18, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $this->setName('inv_lot_mast');
        $this->setPhpName('InvLot');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvLot');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('LotmLotNbr', 'Lotmlotnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('LotmLotRef', 'Lotmlotref', 'VARCHAR', false, 20, null);
        $this->addColumn('LotmFrstActDate', 'Lotmfrstactdate', 'VARCHAR', false, 8, null);
        $this->addColumn('LotmImagYn', 'Lotmimagyn', 'VARCHAR', false, 1, null);
        $this->addColumn('LotmUnitWght', 'Lotmunitwght', 'DECIMAL', false, 20, null);
        $this->addColumn('LotmRevision', 'Lotmrevision', 'VARCHAR', false, 10, null);
        $this->addColumn('LotmCtry', 'Lotmctry', 'VARCHAR', false, 4, null);
        $this->addColumn('LotmCOfC', 'Lotmcofc', 'VARCHAR', false, 1, null);
        $this->addColumn('LotmCreateDate', 'Lotmcreatedate', 'VARCHAR', false, 8, null);
        $this->addColumn('LotmCreateTime', 'Lotmcreatetime', 'VARCHAR', false, 8, null);
        $this->addColumn('LotmVendId', 'Lotmvendid', 'VARCHAR', false, 6, null);
        $this->addColumn('LotmExpireDate', 'Lotmexpiredate', 'VARCHAR', false, 8, null);
        $this->addColumn('LotmUnitCost', 'Lotmunitcost', 'DECIMAL', false, 20, null);
        $this->addColumn('LotmCntrQty', 'Lotmcntrqty', 'DECIMAL', false, 20, null);
        $this->addColumn('LotmSrcCd', 'Lotmsrccd', 'VARCHAR', false, 2, null);
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
        $this->addRelation('WhseLotserial', '\\WhseLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':InltLotSer',
    1 => ':LotmLotNbr',
  ),
), null, null, 'WhseLotserials', false);
        $this->addRelation('SoAllocatedLotserial', '\\SoAllocatedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':OeidLotSer',
    1 => ':LotmLotNbr',
  ),
), null, null, 'SoAllocatedLotserials', false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \InvLot $obj A \InvLot object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getLotmlotnbr() || is_scalar($obj->getLotmlotnbr()) || is_callable([$obj->getLotmlotnbr(), '__toString']) ? (string) $obj->getLotmlotnbr() : $obj->getLotmlotnbr())]);
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
     * @param mixed $value A \InvLot object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvLot) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getLotmlotnbr() || is_scalar($value->getLotmlotnbr()) || is_callable([$value->getLotmlotnbr(), '__toString']) ? (string) $value->getLotmlotnbr() : $value->getLotmlotnbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Lotmlotnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvLotTableMap::CLASS_DEFAULT : InvLotTableMap::OM_CLASS;
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
     * @return array           (InvLot object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvLotTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvLotTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvLotTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvLotTableMap::OM_CLASS;
            /** @var InvLot $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvLotTableMap::addInstanceToPool($obj, $key);
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
            $key = InvLotTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvLotTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvLot $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvLotTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvLotTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMLOTNBR);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMLOTREF);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMFRSTACTDATE);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMIMAGYN);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMUNITWGHT);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMREVISION);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMCTRY);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMCOFC);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMCREATEDATE);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMCREATETIME);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMVENDID);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMEXPIREDATE);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMUNITCOST);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMCNTRQTY);
            $criteria->addSelectColumn(InvLotTableMap::COL_LOTMSRCCD);
            $criteria->addSelectColumn(InvLotTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvLotTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvLotTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.LotmLotNbr');
            $criteria->addSelectColumn($alias . '.LotmLotRef');
            $criteria->addSelectColumn($alias . '.LotmFrstActDate');
            $criteria->addSelectColumn($alias . '.LotmImagYn');
            $criteria->addSelectColumn($alias . '.LotmUnitWght');
            $criteria->addSelectColumn($alias . '.LotmRevision');
            $criteria->addSelectColumn($alias . '.LotmCtry');
            $criteria->addSelectColumn($alias . '.LotmCOfC');
            $criteria->addSelectColumn($alias . '.LotmCreateDate');
            $criteria->addSelectColumn($alias . '.LotmCreateTime');
            $criteria->addSelectColumn($alias . '.LotmVendId');
            $criteria->addSelectColumn($alias . '.LotmExpireDate');
            $criteria->addSelectColumn($alias . '.LotmUnitCost');
            $criteria->addSelectColumn($alias . '.LotmCntrQty');
            $criteria->addSelectColumn($alias . '.LotmSrcCd');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvLotTableMap::DATABASE_NAME)->getTable(InvLotTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvLotTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvLotTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvLotTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvLot or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvLot object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvLot) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvLotTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvLotTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvLotTableMap::COL_LOTMLOTNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvLotQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvLotTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvLotTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_lot_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvLotQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvLot or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvLot object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvLot object
        }


        // Set the correct dbName
        $query = InvLotQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvLotTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvLotTableMap::buildTableMap();
