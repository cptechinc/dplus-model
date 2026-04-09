<?php

namespace Map;

use \RcyclReceiptLot;
use \RcyclReceiptLotQuery;
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
 * This class defines the structure of the 'rcycl_lot_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class RcyclReceiptLotTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.RcyclReceiptLotTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'rcycl_lot_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\RcyclReceiptLot';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'RcyclReceiptLot';

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
     * the column name for the RcyhdRcptBulk field
     */
    const COL_RCYHDRCPTBULK = 'rcycl_lot_det.RcyhdRcptBulk';

    /**
     * the column name for the RcyhdCntrlNbr field
     */
    const COL_RCYHDCNTRLNBR = 'rcycl_lot_det.RcyhdCntrlNbr';

    /**
     * the column name for the RcydtRcptLine field
     */
    const COL_RCYDTRCPTLINE = 'rcycl_lot_det.RcydtRcptLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'rcycl_lot_det.InitItemNbr';

    /**
     * the column name for the RcysdLotNbr field
     */
    const COL_RCYSDLOTNBR = 'rcycl_lot_det.RcysdLotNbr';

    /**
     * the column name for the RcysdLotQty field
     */
    const COL_RCYSDLOTQTY = 'rcycl_lot_det.RcysdLotQty';

    /**
     * the column name for the RcysdLotDate field
     */
    const COL_RCYSDLOTDATE = 'rcycl_lot_det.RcysdLotDate';

    /**
     * the column name for the RcysdLotRef field
     */
    const COL_RCYSDLOTREF = 'rcycl_lot_det.RcysdLotRef';

    /**
     * the column name for the RcysdStatus field
     */
    const COL_RCYSDSTATUS = 'rcycl_lot_det.RcysdStatus';

    /**
     * the column name for the RcysdClosedBy field
     */
    const COL_RCYSDCLOSEDBY = 'rcycl_lot_det.RcysdClosedBy';

    /**
     * the column name for the RcysdClosedDate field
     */
    const COL_RCYSDCLOSEDDATE = 'rcycl_lot_det.RcysdClosedDate';

    /**
     * the column name for the RcysdClosedTime field
     */
    const COL_RCYSDCLOSEDTIME = 'rcycl_lot_det.RcysdClosedTime';

    /**
     * the column name for the RcysdTareWght field
     */
    const COL_RCYSDTAREWGHT = 'rcycl_lot_det.RcysdTareWght';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'rcycl_lot_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'rcycl_lot_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'rcycl_lot_det.dummy';

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
        self::TYPE_PHPNAME       => array('Rcyhdrcptbulk', 'Rcyhdcntrlnbr', 'Rcydtrcptline', 'Inititemnbr', 'Rcysdlotnbr', 'Rcysdlotqty', 'Rcysdlotdate', 'Rcysdlotref', 'Rcysdstatus', 'Rcysdclosedby', 'Rcysdcloseddate', 'Rcysdclosedtime', 'Rcysdtarewght', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('rcyhdrcptbulk', 'rcyhdcntrlnbr', 'rcydtrcptline', 'inititemnbr', 'rcysdlotnbr', 'rcysdlotqty', 'rcysdlotdate', 'rcysdlotref', 'rcysdstatus', 'rcysdclosedby', 'rcysdcloseddate', 'rcysdclosedtime', 'rcysdtarewght', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, RcyclReceiptLotTableMap::COL_INITITEMNBR, RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, RcyclReceiptLotTableMap::COL_RCYSDLOTQTY, RcyclReceiptLotTableMap::COL_RCYSDLOTDATE, RcyclReceiptLotTableMap::COL_RCYSDLOTREF, RcyclReceiptLotTableMap::COL_RCYSDSTATUS, RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY, RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE, RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME, RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT, RcyclReceiptLotTableMap::COL_DATEUPDTD, RcyclReceiptLotTableMap::COL_TIMEUPDTD, RcyclReceiptLotTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('RcyhdRcptBulk', 'RcyhdCntrlNbr', 'RcydtRcptLine', 'InitItemNbr', 'RcysdLotNbr', 'RcysdLotQty', 'RcysdLotDate', 'RcysdLotRef', 'RcysdStatus', 'RcysdClosedBy', 'RcysdClosedDate', 'RcysdClosedTime', 'RcysdTareWght', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Rcyhdrcptbulk' => 0, 'Rcyhdcntrlnbr' => 1, 'Rcydtrcptline' => 2, 'Inititemnbr' => 3, 'Rcysdlotnbr' => 4, 'Rcysdlotqty' => 5, 'Rcysdlotdate' => 6, 'Rcysdlotref' => 7, 'Rcysdstatus' => 8, 'Rcysdclosedby' => 9, 'Rcysdcloseddate' => 10, 'Rcysdclosedtime' => 11, 'Rcysdtarewght' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ),
        self::TYPE_CAMELNAME     => array('rcyhdrcptbulk' => 0, 'rcyhdcntrlnbr' => 1, 'rcydtrcptline' => 2, 'inititemnbr' => 3, 'rcysdlotnbr' => 4, 'rcysdlotqty' => 5, 'rcysdlotdate' => 6, 'rcysdlotref' => 7, 'rcysdstatus' => 8, 'rcysdclosedby' => 9, 'rcysdcloseddate' => 10, 'rcysdclosedtime' => 11, 'rcysdtarewght' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ),
        self::TYPE_COLNAME       => array(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK => 0, RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR => 1, RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE => 2, RcyclReceiptLotTableMap::COL_INITITEMNBR => 3, RcyclReceiptLotTableMap::COL_RCYSDLOTNBR => 4, RcyclReceiptLotTableMap::COL_RCYSDLOTQTY => 5, RcyclReceiptLotTableMap::COL_RCYSDLOTDATE => 6, RcyclReceiptLotTableMap::COL_RCYSDLOTREF => 7, RcyclReceiptLotTableMap::COL_RCYSDSTATUS => 8, RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY => 9, RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE => 10, RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME => 11, RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT => 12, RcyclReceiptLotTableMap::COL_DATEUPDTD => 13, RcyclReceiptLotTableMap::COL_TIMEUPDTD => 14, RcyclReceiptLotTableMap::COL_DUMMY => 15, ),
        self::TYPE_FIELDNAME     => array('RcyhdRcptBulk' => 0, 'RcyhdCntrlNbr' => 1, 'RcydtRcptLine' => 2, 'InitItemNbr' => 3, 'RcysdLotNbr' => 4, 'RcysdLotQty' => 5, 'RcysdLotDate' => 6, 'RcysdLotRef' => 7, 'RcysdStatus' => 8, 'RcysdClosedBy' => 9, 'RcysdClosedDate' => 10, 'RcysdClosedTime' => 11, 'RcysdTareWght' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ),
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
        $this->setName('rcycl_lot_det');
        $this->setPhpName('RcyclReceiptLot');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\RcyclReceiptLot');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('RcyhdRcptBulk', 'Rcyhdrcptbulk', 'CHAR' , 'rcycl_det', 'RcyhdRcptBulk', true, null, '');
        $this->addForeignPrimaryKey('RcyhdCntrlNbr', 'Rcyhdcntrlnbr', 'INTEGER' , 'rcycl_det', 'RcyhdCntrlNbr', true, null, 0);
        $this->addForeignPrimaryKey('RcydtRcptLine', 'Rcydtrcptline', 'INTEGER' , 'rcycl_det', 'RcydtRcptLine', true, null, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'rcycl_det', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('RcysdLotNbr', 'Rcysdlotnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('RcysdLotQty', 'Rcysdlotqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('RcysdLotDate', 'Rcysdlotdate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcysdLotRef', 'Rcysdlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('RcysdStatus', 'Rcysdstatus', 'CHAR', true, null, 'O');
        $this->addColumn('RcysdClosedBy', 'Rcysdclosedby', 'VARCHAR', true, 8, '');
        $this->addColumn('RcysdClosedDate', 'Rcysdcloseddate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcysdClosedTime', 'Rcysdclosedtime', 'VARCHAR', true, 8, '');
        $this->addColumn('RcysdTareWght', 'Rcysdtarewght', 'DECIMAL', true, 20, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RcyclReceiptDetail', '\\RcyclReceiptDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':RcyhdCntrlNbr',
    1 => ':RcyhdCntrlNbr',
  ),
  1 =>
  array (
    0 => ':RcyhdRcptBulk',
    1 => ':RcyhdRcptBulk',
  ),
  2 =>
  array (
    0 => ':RcydtRcptLine',
    1 => ':RcydtRcptLine',
  ),
  3 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
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
     * @param \RcyclReceiptLot $obj A \RcyclReceiptLot object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getRcyhdrcptbulk() || is_scalar($obj->getRcyhdrcptbulk()) || is_callable([$obj->getRcyhdrcptbulk(), '__toString']) ? (string) $obj->getRcyhdrcptbulk() : $obj->getRcyhdrcptbulk()), (null === $obj->getRcyhdcntrlnbr() || is_scalar($obj->getRcyhdcntrlnbr()) || is_callable([$obj->getRcyhdcntrlnbr(), '__toString']) ? (string) $obj->getRcyhdcntrlnbr() : $obj->getRcyhdcntrlnbr()), (null === $obj->getRcydtrcptline() || is_scalar($obj->getRcydtrcptline()) || is_callable([$obj->getRcydtrcptline(), '__toString']) ? (string) $obj->getRcydtrcptline() : $obj->getRcydtrcptline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getRcysdlotnbr() || is_scalar($obj->getRcysdlotnbr()) || is_callable([$obj->getRcysdlotnbr(), '__toString']) ? (string) $obj->getRcysdlotnbr() : $obj->getRcysdlotnbr())]);
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
     * @param mixed $value A \RcyclReceiptLot object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \RcyclReceiptLot) {
                $key = serialize([(null === $value->getRcyhdrcptbulk() || is_scalar($value->getRcyhdrcptbulk()) || is_callable([$value->getRcyhdrcptbulk(), '__toString']) ? (string) $value->getRcyhdrcptbulk() : $value->getRcyhdrcptbulk()), (null === $value->getRcyhdcntrlnbr() || is_scalar($value->getRcyhdcntrlnbr()) || is_callable([$value->getRcyhdcntrlnbr(), '__toString']) ? (string) $value->getRcyhdcntrlnbr() : $value->getRcyhdcntrlnbr()), (null === $value->getRcydtrcptline() || is_scalar($value->getRcydtrcptline()) || is_callable([$value->getRcydtrcptline(), '__toString']) ? (string) $value->getRcydtrcptline() : $value->getRcydtrcptline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getRcysdlotnbr() || is_scalar($value->getRcysdlotnbr()) || is_callable([$value->getRcysdlotnbr(), '__toString']) ? (string) $value->getRcysdlotnbr() : $value->getRcysdlotnbr())]);

            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \RcyclReceiptLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Rcysdlotnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? RcyclReceiptLotTableMap::CLASS_DEFAULT : RcyclReceiptLotTableMap::OM_CLASS;
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
     * @return array           (RcyclReceiptLot object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = RcyclReceiptLotTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = RcyclReceiptLotTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + RcyclReceiptLotTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RcyclReceiptLotTableMap::OM_CLASS;
            /** @var RcyclReceiptLot $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            RcyclReceiptLotTableMap::addInstanceToPool($obj, $key);
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
            $key = RcyclReceiptLotTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = RcyclReceiptLotTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var RcyclReceiptLot $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RcyclReceiptLotTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDLOTDATE);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDLOTREF);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDSTATUS);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptLotTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.RcyhdRcptBulk');
            $criteria->addSelectColumn($alias . '.RcyhdCntrlNbr');
            $criteria->addSelectColumn($alias . '.RcydtRcptLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.RcysdLotNbr');
            $criteria->addSelectColumn($alias . '.RcysdLotQty');
            $criteria->addSelectColumn($alias . '.RcysdLotDate');
            $criteria->addSelectColumn($alias . '.RcysdLotRef');
            $criteria->addSelectColumn($alias . '.RcysdStatus');
            $criteria->addSelectColumn($alias . '.RcysdClosedBy');
            $criteria->addSelectColumn($alias . '.RcysdClosedDate');
            $criteria->addSelectColumn($alias . '.RcysdClosedTime');
            $criteria->addSelectColumn($alias . '.RcysdTareWght');
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
        return Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptLotTableMap::DATABASE_NAME)->getTable(RcyclReceiptLotTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptLotTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(RcyclReceiptLotTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new RcyclReceiptLotTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a RcyclReceiptLot or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or RcyclReceiptLot object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \RcyclReceiptLot) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RcyclReceiptLotTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptLotTableMap::COL_INITITEMNBR, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, $value[4]));
                $criteria->addOr($criterion);
            }
        }

        $query = RcyclReceiptLotQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            RcyclReceiptLotTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                RcyclReceiptLotTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the rcycl_lot_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return RcyclReceiptLotQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a RcyclReceiptLot or Criteria object.
     *
     * @param mixed               $criteria Criteria or RcyclReceiptLot object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from RcyclReceiptLot object
        }


        // Set the correct dbName
        $query = RcyclReceiptLotQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // RcyclReceiptLotTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
RcyclReceiptLotTableMap::buildTableMap();
