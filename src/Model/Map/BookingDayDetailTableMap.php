<?php

namespace Map;

use \BookingDayDetail;
use \BookingDayDetailQuery;
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
 * This class defines the structure of the 'so_book_by_day_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BookingDayDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.BookingDayDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_book_by_day_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\BookingDayDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'BookingDayDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the BkgdDate field
     */
    const COL_BKGDDATE = 'so_book_by_day_det.BkgdDate';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'so_book_by_day_det.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'so_book_by_day_det.ArstShipId';

    /**
     * the column name for the BkgdOrdrBase field
     */
    const COL_BKGDORDRBASE = 'so_book_by_day_det.BkgdOrdrBase';

    /**
     * the column name for the BkgdOrigLine field
     */
    const COL_BKGDORIGLINE = 'so_book_by_day_det.BkgdOrigLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_book_by_day_det.InitItemNbr';

    /**
     * the column name for the BkgdOrdrNbr field
     */
    const COL_BKGDORDRNBR = 'so_book_by_day_det.BkgdOrdrNbr';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'so_book_by_day_det.ArspSalePer1';

    /**
     * the column name for the BkgdB4Qty field
     */
    const COL_BKGDB4QTY = 'so_book_by_day_det.BkgdB4Qty';

    /**
     * the column name for the BkgdB4Pric field
     */
    const COL_BKGDB4PRIC = 'so_book_by_day_det.BkgdB4Pric';

    /**
     * the column name for the BkgdB4Uom field
     */
    const COL_BKGDB4UOM = 'so_book_by_day_det.BkgdB4Uom';

    /**
     * the column name for the BkgdAftQty field
     */
    const COL_BKGDAFTQTY = 'so_book_by_day_det.BkgdAftQty';

    /**
     * the column name for the BkgdAftPric field
     */
    const COL_BKGDAFTPRIC = 'so_book_by_day_det.BkgdAftPric';

    /**
     * the column name for the BkgdAftUom field
     */
    const COL_BKGDAFTUOM = 'so_book_by_day_det.BkgdAftUom';

    /**
     * the column name for the BkgdNetAmt field
     */
    const COL_BKGDNETAMT = 'so_book_by_day_det.BkgdNetAmt';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_book_by_day_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_book_by_day_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_book_by_day_det.dummy';

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
        self::TYPE_PHPNAME       => array('Bkgddate', 'Arcucustid', 'Arstshipid', 'Bkgdordrbase', 'Bkgdorigline', 'Inititemnbr', 'Bkgdordrnbr', 'Arspsaleper1', 'Bkgdb4qty', 'Bkgdb4pric', 'Bkgdb4uom', 'Bkgdaftqty', 'Bkgdaftpric', 'Bkgdaftuom', 'Bkgdnetamt', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('bkgddate', 'arcucustid', 'arstshipid', 'bkgdordrbase', 'bkgdorigline', 'inititemnbr', 'bkgdordrnbr', 'arspsaleper1', 'bkgdb4qty', 'bkgdb4pric', 'bkgdb4uom', 'bkgdaftqty', 'bkgdaftpric', 'bkgdaftuom', 'bkgdnetamt', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(BookingDayDetailTableMap::COL_BKGDDATE, BookingDayDetailTableMap::COL_ARCUCUSTID, BookingDayDetailTableMap::COL_ARSTSHIPID, BookingDayDetailTableMap::COL_BKGDORDRBASE, BookingDayDetailTableMap::COL_BKGDORIGLINE, BookingDayDetailTableMap::COL_INITITEMNBR, BookingDayDetailTableMap::COL_BKGDORDRNBR, BookingDayDetailTableMap::COL_ARSPSALEPER1, BookingDayDetailTableMap::COL_BKGDB4QTY, BookingDayDetailTableMap::COL_BKGDB4PRIC, BookingDayDetailTableMap::COL_BKGDB4UOM, BookingDayDetailTableMap::COL_BKGDAFTQTY, BookingDayDetailTableMap::COL_BKGDAFTPRIC, BookingDayDetailTableMap::COL_BKGDAFTUOM, BookingDayDetailTableMap::COL_BKGDNETAMT, BookingDayDetailTableMap::COL_DATEUPDTD, BookingDayDetailTableMap::COL_TIMEUPDTD, BookingDayDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('BkgdDate', 'ArcuCustId', 'ArstShipId', 'BkgdOrdrBase', 'BkgdOrigLine', 'InitItemNbr', 'BkgdOrdrNbr', 'ArspSalePer1', 'BkgdB4Qty', 'BkgdB4Pric', 'BkgdB4Uom', 'BkgdAftQty', 'BkgdAftPric', 'BkgdAftUom', 'BkgdNetAmt', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Bkgddate' => 0, 'Arcucustid' => 1, 'Arstshipid' => 2, 'Bkgdordrbase' => 3, 'Bkgdorigline' => 4, 'Inititemnbr' => 5, 'Bkgdordrnbr' => 6, 'Arspsaleper1' => 7, 'Bkgdb4qty' => 8, 'Bkgdb4pric' => 9, 'Bkgdb4uom' => 10, 'Bkgdaftqty' => 11, 'Bkgdaftpric' => 12, 'Bkgdaftuom' => 13, 'Bkgdnetamt' => 14, 'Dateupdtd' => 15, 'Timeupdtd' => 16, 'Dummy' => 17, ),
        self::TYPE_CAMELNAME     => array('bkgddate' => 0, 'arcucustid' => 1, 'arstshipid' => 2, 'bkgdordrbase' => 3, 'bkgdorigline' => 4, 'inititemnbr' => 5, 'bkgdordrnbr' => 6, 'arspsaleper1' => 7, 'bkgdb4qty' => 8, 'bkgdb4pric' => 9, 'bkgdb4uom' => 10, 'bkgdaftqty' => 11, 'bkgdaftpric' => 12, 'bkgdaftuom' => 13, 'bkgdnetamt' => 14, 'dateupdtd' => 15, 'timeupdtd' => 16, 'dummy' => 17, ),
        self::TYPE_COLNAME       => array(BookingDayDetailTableMap::COL_BKGDDATE => 0, BookingDayDetailTableMap::COL_ARCUCUSTID => 1, BookingDayDetailTableMap::COL_ARSTSHIPID => 2, BookingDayDetailTableMap::COL_BKGDORDRBASE => 3, BookingDayDetailTableMap::COL_BKGDORIGLINE => 4, BookingDayDetailTableMap::COL_INITITEMNBR => 5, BookingDayDetailTableMap::COL_BKGDORDRNBR => 6, BookingDayDetailTableMap::COL_ARSPSALEPER1 => 7, BookingDayDetailTableMap::COL_BKGDB4QTY => 8, BookingDayDetailTableMap::COL_BKGDB4PRIC => 9, BookingDayDetailTableMap::COL_BKGDB4UOM => 10, BookingDayDetailTableMap::COL_BKGDAFTQTY => 11, BookingDayDetailTableMap::COL_BKGDAFTPRIC => 12, BookingDayDetailTableMap::COL_BKGDAFTUOM => 13, BookingDayDetailTableMap::COL_BKGDNETAMT => 14, BookingDayDetailTableMap::COL_DATEUPDTD => 15, BookingDayDetailTableMap::COL_TIMEUPDTD => 16, BookingDayDetailTableMap::COL_DUMMY => 17, ),
        self::TYPE_FIELDNAME     => array('BkgdDate' => 0, 'ArcuCustId' => 1, 'ArstShipId' => 2, 'BkgdOrdrBase' => 3, 'BkgdOrigLine' => 4, 'InitItemNbr' => 5, 'BkgdOrdrNbr' => 6, 'ArspSalePer1' => 7, 'BkgdB4Qty' => 8, 'BkgdB4Pric' => 9, 'BkgdB4Uom' => 10, 'BkgdAftQty' => 11, 'BkgdAftPric' => 12, 'BkgdAftUom' => 13, 'BkgdNetAmt' => 14, 'DateUpdtd' => 15, 'TimeUpdtd' => 16, 'dummy' => 17, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $this->setName('so_book_by_day_det');
        $this->setPhpName('BookingDayDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\BookingDayDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('BkgdDate', 'Bkgddate', 'VARCHAR', true, 8, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_ship_to', 'ArcuCustId', true, 6, '');
        $this->addForeignPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR' , 'ar_ship_to', 'ArstShipId', true, 6, '');
        $this->addPrimaryKey('BkgdOrdrBase', 'Bkgdordrbase', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('BkgdOrigLine', 'Bkgdorigline', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('BkgdOrdrNbr', 'Bkgdordrnbr', 'VARCHAR', false, 10, null);
        $this->addForeignKey('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', 'ar_saleper1', 'ArspSalePer1', false, 6, null);
        $this->addColumn('BkgdB4Qty', 'Bkgdb4qty', 'DECIMAL', false, 20, null);
        $this->addColumn('BkgdB4Pric', 'Bkgdb4pric', 'DECIMAL', false, 20, null);
        $this->addColumn('BkgdB4Uom', 'Bkgdb4uom', 'VARCHAR', false, 4, null);
        $this->addColumn('BkgdAftQty', 'Bkgdaftqty', 'DECIMAL', false, 20, null);
        $this->addColumn('BkgdAftPric', 'Bkgdaftpric', 'DECIMAL', false, 20, null);
        $this->addColumn('BkgdAftUom', 'Bkgdaftuom', 'VARCHAR', false, 4, null);
        $this->addColumn('BkgdNetAmt', 'Bkgdnetamt', 'DECIMAL', false, 20, null);
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
     * @param \BookingDayDetail $obj A \BookingDayDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBkgddate() || is_scalar($obj->getBkgddate()) || is_callable([$obj->getBkgddate(), '__toString']) ? (string) $obj->getBkgddate() : $obj->getBkgddate()), (null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid()), (null === $obj->getBkgdordrbase() || is_scalar($obj->getBkgdordrbase()) || is_callable([$obj->getBkgdordrbase(), '__toString']) ? (string) $obj->getBkgdordrbase() : $obj->getBkgdordrbase()), (null === $obj->getBkgdorigline() || is_scalar($obj->getBkgdorigline()) || is_callable([$obj->getBkgdorigline(), '__toString']) ? (string) $obj->getBkgdorigline() : $obj->getBkgdorigline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr())]);
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
     * @param mixed $value A \BookingDayDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \BookingDayDetail) {
                $key = serialize([(null === $value->getBkgddate() || is_scalar($value->getBkgddate()) || is_callable([$value->getBkgddate(), '__toString']) ? (string) $value->getBkgddate() : $value->getBkgddate()), (null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid()), (null === $value->getBkgdordrbase() || is_scalar($value->getBkgdordrbase()) || is_callable([$value->getBkgdordrbase(), '__toString']) ? (string) $value->getBkgdordrbase() : $value->getBkgdordrbase()), (null === $value->getBkgdorigline() || is_scalar($value->getBkgdorigline()) || is_callable([$value->getBkgdorigline(), '__toString']) ? (string) $value->getBkgdorigline() : $value->getBkgdorigline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr())]);

            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \BookingDayDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Bkgddate', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Bkgdordrbase', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Bkgdorigline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BookingDayDetailTableMap::CLASS_DEFAULT : BookingDayDetailTableMap::OM_CLASS;
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
     * @return array           (BookingDayDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BookingDayDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BookingDayDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BookingDayDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BookingDayDetailTableMap::OM_CLASS;
            /** @var BookingDayDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BookingDayDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = BookingDayDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BookingDayDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BookingDayDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BookingDayDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDDATE);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDORDRBASE);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDORIGLINE);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDORDRNBR);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDB4QTY);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDB4PRIC);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDB4UOM);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDAFTQTY);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDAFTPRIC);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDAFTUOM);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_BKGDNETAMT);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(BookingDayDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.BkgdDate');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.BkgdOrdrBase');
            $criteria->addSelectColumn($alias . '.BkgdOrigLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.BkgdOrdrNbr');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.BkgdB4Qty');
            $criteria->addSelectColumn($alias . '.BkgdB4Pric');
            $criteria->addSelectColumn($alias . '.BkgdB4Uom');
            $criteria->addSelectColumn($alias . '.BkgdAftQty');
            $criteria->addSelectColumn($alias . '.BkgdAftPric');
            $criteria->addSelectColumn($alias . '.BkgdAftUom');
            $criteria->addSelectColumn($alias . '.BkgdNetAmt');
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
        return Propel::getServiceContainer()->getDatabaseMap(BookingDayDetailTableMap::DATABASE_NAME)->getTable(BookingDayDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BookingDayDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BookingDayDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BookingDayDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BookingDayDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BookingDayDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \BookingDayDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BookingDayDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BookingDayDetailTableMap::COL_BKGDDATE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BookingDayDetailTableMap::COL_ARCUCUSTID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDayDetailTableMap::COL_ARSTSHIPID, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDayDetailTableMap::COL_BKGDORDRBASE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDayDetailTableMap::COL_BKGDORIGLINE, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDayDetailTableMap::COL_INITITEMNBR, $value[5]));
                $criteria->addOr($criterion);
            }
        }

        $query = BookingDayDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BookingDayDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BookingDayDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_book_by_day_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BookingDayDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BookingDayDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or BookingDayDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BookingDayDetail object
        }


        // Set the correct dbName
        $query = BookingDayDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BookingDayDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BookingDayDetailTableMap::buildTableMap();
