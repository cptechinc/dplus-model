<?php

namespace Map;

use \RcyclReceiptDetail;
use \RcyclReceiptDetailQuery;
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
 * This class defines the structure of the 'rcycl_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class RcyclReceiptDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.RcyclReceiptDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'rcycl_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\RcyclReceiptDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'RcyclReceiptDetail';

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
     * the column name for the RcyhdRcptBulk field
     */
    const COL_RCYHDRCPTBULK = 'rcycl_det.RcyhdRcptBulk';

    /**
     * the column name for the RcyhdCntrlNbr field
     */
    const COL_RCYHDCNTRLNBR = 'rcycl_det.RcyhdCntrlNbr';

    /**
     * the column name for the RcydtRcptLine field
     */
    const COL_RCYDTRCPTLINE = 'rcycl_det.RcydtRcptLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'rcycl_det.InitItemNbr';

    /**
     * the column name for the IntbUomSale field
     */
    const COL_INTBUOMSALE = 'rcycl_det.IntbUomSale';

    /**
     * the column name for the RcydtRcptQty field
     */
    const COL_RCYDTRCPTQTY = 'rcycl_det.RcydtRcptQty';

    /**
     * the column name for the RcydtStatus field
     */
    const COL_RCYDTSTATUS = 'rcycl_det.RcydtStatus';

    /**
     * the column name for the RcydtClosedBy field
     */
    const COL_RCYDTCLOSEDBY = 'rcycl_det.RcydtClosedBy';

    /**
     * the column name for the RcydtClosedDate field
     */
    const COL_RCYDTCLOSEDDATE = 'rcycl_det.RcydtClosedDate';

    /**
     * the column name for the RcydtClosedTime field
     */
    const COL_RCYDTCLOSEDTIME = 'rcycl_det.RcydtClosedTime';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'rcycl_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'rcycl_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'rcycl_det.dummy';

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
        self::TYPE_PHPNAME       => array('Rcyhdrcptbulk', 'Rcyhdcntrlnbr', 'Rcydtrcptline', 'Inititemnbr', 'Intbuomsale', 'Rcydtrcptqty', 'Rcydtstatus', 'Rcydtclosedby', 'Rcydtcloseddate', 'Rcydtclosedtime', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('rcyhdrcptbulk', 'rcyhdcntrlnbr', 'rcydtrcptline', 'inititemnbr', 'intbuomsale', 'rcydtrcptqty', 'rcydtstatus', 'rcydtclosedby', 'rcydtcloseddate', 'rcydtclosedtime', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, RcyclReceiptDetailTableMap::COL_INITITEMNBR, RcyclReceiptDetailTableMap::COL_INTBUOMSALE, RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY, RcyclReceiptDetailTableMap::COL_RCYDTSTATUS, RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY, RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE, RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME, RcyclReceiptDetailTableMap::COL_DATEUPDTD, RcyclReceiptDetailTableMap::COL_TIMEUPDTD, RcyclReceiptDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('RcyhdRcptBulk', 'RcyhdCntrlNbr', 'RcydtRcptLine', 'InitItemNbr', 'IntbUomSale', 'RcydtRcptQty', 'RcydtStatus', 'RcydtClosedBy', 'RcydtClosedDate', 'RcydtClosedTime', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Rcyhdrcptbulk' => 0, 'Rcyhdcntrlnbr' => 1, 'Rcydtrcptline' => 2, 'Inititemnbr' => 3, 'Intbuomsale' => 4, 'Rcydtrcptqty' => 5, 'Rcydtstatus' => 6, 'Rcydtclosedby' => 7, 'Rcydtcloseddate' => 8, 'Rcydtclosedtime' => 9, 'Dateupdtd' => 10, 'Timeupdtd' => 11, 'Dummy' => 12, ),
        self::TYPE_CAMELNAME     => array('rcyhdrcptbulk' => 0, 'rcyhdcntrlnbr' => 1, 'rcydtrcptline' => 2, 'inititemnbr' => 3, 'intbuomsale' => 4, 'rcydtrcptqty' => 5, 'rcydtstatus' => 6, 'rcydtclosedby' => 7, 'rcydtcloseddate' => 8, 'rcydtclosedtime' => 9, 'dateupdtd' => 10, 'timeupdtd' => 11, 'dummy' => 12, ),
        self::TYPE_COLNAME       => array(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK => 0, RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR => 1, RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE => 2, RcyclReceiptDetailTableMap::COL_INITITEMNBR => 3, RcyclReceiptDetailTableMap::COL_INTBUOMSALE => 4, RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY => 5, RcyclReceiptDetailTableMap::COL_RCYDTSTATUS => 6, RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY => 7, RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE => 8, RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME => 9, RcyclReceiptDetailTableMap::COL_DATEUPDTD => 10, RcyclReceiptDetailTableMap::COL_TIMEUPDTD => 11, RcyclReceiptDetailTableMap::COL_DUMMY => 12, ),
        self::TYPE_FIELDNAME     => array('RcyhdRcptBulk' => 0, 'RcyhdCntrlNbr' => 1, 'RcydtRcptLine' => 2, 'InitItemNbr' => 3, 'IntbUomSale' => 4, 'RcydtRcptQty' => 5, 'RcydtStatus' => 6, 'RcydtClosedBy' => 7, 'RcydtClosedDate' => 8, 'RcydtClosedTime' => 9, 'DateUpdtd' => 10, 'TimeUpdtd' => 11, 'dummy' => 12, ),
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
        $this->setName('rcycl_det');
        $this->setPhpName('RcyclReceiptDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\RcyclReceiptDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('RcyhdRcptBulk', 'Rcyhdrcptbulk', 'CHAR' , 'rcycl_head', 'RcyhdRcptBulk', true, null, '');
        $this->addForeignPrimaryKey('RcyhdCntrlNbr', 'Rcyhdcntrlnbr', 'INTEGER' , 'rcycl_head', 'RcyhdCntrlNbr', true, null, 0);
        $this->addPrimaryKey('RcydtRcptLine', 'Rcydtrcptline', 'INTEGER', true, null, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignKey('IntbUomSale', 'Intbuomsale', 'VARCHAR', 'inv_uom_sale', 'IntbUomSale', true, 4, '');
        $this->addColumn('RcydtRcptQty', 'Rcydtrcptqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('RcydtStatus', 'Rcydtstatus', 'CHAR', true, null, 'O');
        $this->addColumn('RcydtClosedBy', 'Rcydtclosedby', 'VARCHAR', true, 8, '');
        $this->addColumn('RcydtClosedDate', 'Rcydtcloseddate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcydtClosedTime', 'Rcydtclosedtime', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RcyclReceipt', '\\RcyclReceipt', RelationMap::MANY_TO_ONE, array (
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
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('UnitofMeasureSale', '\\UnitofMeasureSale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbUomSale',
    1 => ':IntbUomSale',
  ),
), null, null, null, false);
        $this->addRelation('RcyclReceiptLot', '\\RcyclReceiptLot', RelationMap::ONE_TO_MANY, array (
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
), null, null, 'RcyclReceiptLots', false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \RcyclReceiptDetail $obj A \RcyclReceiptDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getRcyhdrcptbulk() || is_scalar($obj->getRcyhdrcptbulk()) || is_callable([$obj->getRcyhdrcptbulk(), '__toString']) ? (string) $obj->getRcyhdrcptbulk() : $obj->getRcyhdrcptbulk()), (null === $obj->getRcyhdcntrlnbr() || is_scalar($obj->getRcyhdcntrlnbr()) || is_callable([$obj->getRcyhdcntrlnbr(), '__toString']) ? (string) $obj->getRcyhdcntrlnbr() : $obj->getRcyhdcntrlnbr()), (null === $obj->getRcydtrcptline() || is_scalar($obj->getRcydtrcptline()) || is_callable([$obj->getRcydtrcptline(), '__toString']) ? (string) $obj->getRcydtrcptline() : $obj->getRcydtrcptline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr())]);
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
     * @param mixed $value A \RcyclReceiptDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \RcyclReceiptDetail) {
                $key = serialize([(null === $value->getRcyhdrcptbulk() || is_scalar($value->getRcyhdrcptbulk()) || is_callable([$value->getRcyhdrcptbulk(), '__toString']) ? (string) $value->getRcyhdrcptbulk() : $value->getRcyhdrcptbulk()), (null === $value->getRcyhdcntrlnbr() || is_scalar($value->getRcyhdcntrlnbr()) || is_callable([$value->getRcyhdcntrlnbr(), '__toString']) ? (string) $value->getRcyhdcntrlnbr() : $value->getRcyhdcntrlnbr()), (null === $value->getRcydtrcptline() || is_scalar($value->getRcydtrcptline()) || is_callable([$value->getRcydtrcptline(), '__toString']) ? (string) $value->getRcydtrcptline() : $value->getRcydtrcptline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \RcyclReceiptDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptbulk', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Rcyhdcntrlnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Rcydtrcptline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
        return $withPrefix ? RcyclReceiptDetailTableMap::CLASS_DEFAULT : RcyclReceiptDetailTableMap::OM_CLASS;
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
     * @return array           (RcyclReceiptDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = RcyclReceiptDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = RcyclReceiptDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + RcyclReceiptDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RcyclReceiptDetailTableMap::OM_CLASS;
            /** @var RcyclReceiptDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            RcyclReceiptDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = RcyclReceiptDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = RcyclReceiptDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var RcyclReceiptDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RcyclReceiptDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_INTBUOMSALE);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYDTSTATUS);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.RcyhdRcptBulk');
            $criteria->addSelectColumn($alias . '.RcyhdCntrlNbr');
            $criteria->addSelectColumn($alias . '.RcydtRcptLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbUomSale');
            $criteria->addSelectColumn($alias . '.RcydtRcptQty');
            $criteria->addSelectColumn($alias . '.RcydtStatus');
            $criteria->addSelectColumn($alias . '.RcydtClosedBy');
            $criteria->addSelectColumn($alias . '.RcydtClosedDate');
            $criteria->addSelectColumn($alias . '.RcydtClosedTime');
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
        return Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptDetailTableMap::DATABASE_NAME)->getTable(RcyclReceiptDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(RcyclReceiptDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new RcyclReceiptDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a RcyclReceiptDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or RcyclReceiptDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \RcyclReceiptDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RcyclReceiptDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = RcyclReceiptDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            RcyclReceiptDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                RcyclReceiptDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the rcycl_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return RcyclReceiptDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a RcyclReceiptDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or RcyclReceiptDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from RcyclReceiptDetail object
        }


        // Set the correct dbName
        $query = RcyclReceiptDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // RcyclReceiptDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
RcyclReceiptDetailTableMap::buildTableMap();
