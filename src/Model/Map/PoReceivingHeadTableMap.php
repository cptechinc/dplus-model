<?php

namespace Map;

use \PoReceivingHead;
use \PoReceivingHeadQuery;
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
 * This class defines the structure of the 'po_tran_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PoReceivingHeadTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PoReceivingHeadTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'po_tran_head';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\PoReceivingHead';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'PoReceivingHead';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 20;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 20;

    /**
     * the column name for the PothNbr field
     */
    const COL_POTHNBR = 'po_tran_head.PothNbr';

    /**
     * the column name for the PothStat field
     */
    const COL_POTHSTAT = 'po_tran_head.PothStat';

    /**
     * the column name for the PothRcptDate field
     */
    const COL_POTHRCPTDATE = 'po_tran_head.PothRcptDate';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'po_tran_head.IntbWhse';

    /**
     * the column name for the PothGlPd field
     */
    const COL_POTHGLPD = 'po_tran_head.PothGlPd';

    /**
     * the column name for the PothAirShip field
     */
    const COL_POTHAIRSHIP = 'po_tran_head.PothAirShip';

    /**
     * the column name for the PothErInReview field
     */
    const COL_POTHERINREVIEW = 'po_tran_head.PothErInReview';

    /**
     * the column name for the PothExchCtry field
     */
    const COL_POTHEXCHCTRY = 'po_tran_head.PothExchCtry';

    /**
     * the column name for the PothExchRate field
     */
    const COL_POTHEXCHRATE = 'po_tran_head.PothExchRate';

    /**
     * the column name for the IntbWhseOrig field
     */
    const COL_INTBWHSEORIG = 'po_tran_head.IntbWhseOrig';

    /**
     * the column name for the PothLandCost field
     */
    const COL_POTHLANDCOST = 'po_tran_head.PothLandCost';

    /**
     * the column name for the PothRcptNbr field
     */
    const COL_POTHRCPTNBR = 'po_tran_head.PothRcptNbr';

    /**
     * the column name for the PothLandBasedOn field
     */
    const COL_POTHLANDBASEDON = 'po_tran_head.PothLandBasedOn';

    /**
     * the column name for the PothInvcNbr field
     */
    const COL_POTHINVCNBR = 'po_tran_head.PothInvcNbr';

    /**
     * the column name for the PothInvcDate field
     */
    const COL_POTHINVCDATE = 'po_tran_head.PothInvcDate';

    /**
     * the column name for the PothFrtAmt field
     */
    const COL_POTHFRTAMT = 'po_tran_head.PothFrtAmt';

    /**
     * the column name for the PothMiscAmt field
     */
    const COL_POTHMISCAMT = 'po_tran_head.PothMiscAmt';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'po_tran_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'po_tran_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'po_tran_head.dummy';

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
        self::TYPE_PHPNAME       => array('Pothnbr', 'Pothstat', 'Pothrcptdate', 'Intbwhse', 'Pothglpd', 'Pothairship', 'Potherinreview', 'Pothexchctry', 'Pothexchrate', 'Intbwhseorig', 'Pothlandcost', 'Pothrcptnbr', 'Pothlandbasedon', 'Pothinvcnbr', 'Pothinvcdate', 'Pothfrtamt', 'Pothmiscamt', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('pothnbr', 'pothstat', 'pothrcptdate', 'intbwhse', 'pothglpd', 'pothairship', 'potherinreview', 'pothexchctry', 'pothexchrate', 'intbwhseorig', 'pothlandcost', 'pothrcptnbr', 'pothlandbasedon', 'pothinvcnbr', 'pothinvcdate', 'pothfrtamt', 'pothmiscamt', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PoReceivingHeadTableMap::COL_POTHNBR, PoReceivingHeadTableMap::COL_POTHSTAT, PoReceivingHeadTableMap::COL_POTHRCPTDATE, PoReceivingHeadTableMap::COL_INTBWHSE, PoReceivingHeadTableMap::COL_POTHGLPD, PoReceivingHeadTableMap::COL_POTHAIRSHIP, PoReceivingHeadTableMap::COL_POTHERINREVIEW, PoReceivingHeadTableMap::COL_POTHEXCHCTRY, PoReceivingHeadTableMap::COL_POTHEXCHRATE, PoReceivingHeadTableMap::COL_INTBWHSEORIG, PoReceivingHeadTableMap::COL_POTHLANDCOST, PoReceivingHeadTableMap::COL_POTHRCPTNBR, PoReceivingHeadTableMap::COL_POTHLANDBASEDON, PoReceivingHeadTableMap::COL_POTHINVCNBR, PoReceivingHeadTableMap::COL_POTHINVCDATE, PoReceivingHeadTableMap::COL_POTHFRTAMT, PoReceivingHeadTableMap::COL_POTHMISCAMT, PoReceivingHeadTableMap::COL_DATEUPDTD, PoReceivingHeadTableMap::COL_TIMEUPDTD, PoReceivingHeadTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PothNbr', 'PothStat', 'PothRcptDate', 'IntbWhse', 'PothGlPd', 'PothAirShip', 'PothErInReview', 'PothExchCtry', 'PothExchRate', 'IntbWhseOrig', 'PothLandCost', 'PothRcptNbr', 'PothLandBasedOn', 'PothInvcNbr', 'PothInvcDate', 'PothFrtAmt', 'PothMiscAmt', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pothnbr' => 0, 'Pothstat' => 1, 'Pothrcptdate' => 2, 'Intbwhse' => 3, 'Pothglpd' => 4, 'Pothairship' => 5, 'Potherinreview' => 6, 'Pothexchctry' => 7, 'Pothexchrate' => 8, 'Intbwhseorig' => 9, 'Pothlandcost' => 10, 'Pothrcptnbr' => 11, 'Pothlandbasedon' => 12, 'Pothinvcnbr' => 13, 'Pothinvcdate' => 14, 'Pothfrtamt' => 15, 'Pothmiscamt' => 16, 'Dateupdtd' => 17, 'Timeupdtd' => 18, 'Dummy' => 19, ),
        self::TYPE_CAMELNAME     => array('pothnbr' => 0, 'pothstat' => 1, 'pothrcptdate' => 2, 'intbwhse' => 3, 'pothglpd' => 4, 'pothairship' => 5, 'potherinreview' => 6, 'pothexchctry' => 7, 'pothexchrate' => 8, 'intbwhseorig' => 9, 'pothlandcost' => 10, 'pothrcptnbr' => 11, 'pothlandbasedon' => 12, 'pothinvcnbr' => 13, 'pothinvcdate' => 14, 'pothfrtamt' => 15, 'pothmiscamt' => 16, 'dateupdtd' => 17, 'timeupdtd' => 18, 'dummy' => 19, ),
        self::TYPE_COLNAME       => array(PoReceivingHeadTableMap::COL_POTHNBR => 0, PoReceivingHeadTableMap::COL_POTHSTAT => 1, PoReceivingHeadTableMap::COL_POTHRCPTDATE => 2, PoReceivingHeadTableMap::COL_INTBWHSE => 3, PoReceivingHeadTableMap::COL_POTHGLPD => 4, PoReceivingHeadTableMap::COL_POTHAIRSHIP => 5, PoReceivingHeadTableMap::COL_POTHERINREVIEW => 6, PoReceivingHeadTableMap::COL_POTHEXCHCTRY => 7, PoReceivingHeadTableMap::COL_POTHEXCHRATE => 8, PoReceivingHeadTableMap::COL_INTBWHSEORIG => 9, PoReceivingHeadTableMap::COL_POTHLANDCOST => 10, PoReceivingHeadTableMap::COL_POTHRCPTNBR => 11, PoReceivingHeadTableMap::COL_POTHLANDBASEDON => 12, PoReceivingHeadTableMap::COL_POTHINVCNBR => 13, PoReceivingHeadTableMap::COL_POTHINVCDATE => 14, PoReceivingHeadTableMap::COL_POTHFRTAMT => 15, PoReceivingHeadTableMap::COL_POTHMISCAMT => 16, PoReceivingHeadTableMap::COL_DATEUPDTD => 17, PoReceivingHeadTableMap::COL_TIMEUPDTD => 18, PoReceivingHeadTableMap::COL_DUMMY => 19, ),
        self::TYPE_FIELDNAME     => array('PothNbr' => 0, 'PothStat' => 1, 'PothRcptDate' => 2, 'IntbWhse' => 3, 'PothGlPd' => 4, 'PothAirShip' => 5, 'PothErInReview' => 6, 'PothExchCtry' => 7, 'PothExchRate' => 8, 'IntbWhseOrig' => 9, 'PothLandCost' => 10, 'PothRcptNbr' => 11, 'PothLandBasedOn' => 12, 'PothInvcNbr' => 13, 'PothInvcDate' => 14, 'PothFrtAmt' => 15, 'PothMiscAmt' => 16, 'DateUpdtd' => 17, 'TimeUpdtd' => 18, 'dummy' => 19, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $this->setName('po_tran_head');
        $this->setPhpName('PoReceivingHead');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PoReceivingHead');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('PothNbr', 'Pothnbr', 'VARCHAR' , 'po_head', 'PohdNbr', true, 8, '');
        $this->addColumn('PothStat', 'Pothstat', 'VARCHAR', true, 1, 'N');
        $this->addColumn('PothRcptDate', 'Pothrcptdate', 'VARCHAR', true, 8, '');
        $this->addForeignKey('IntbWhse', 'Intbwhse', 'VARCHAR', 'inv_whse_code', 'IntbWhse', true, 2, '');
        $this->addColumn('PothGlPd', 'Pothglpd', 'INTEGER', true, 2, 0);
        $this->addColumn('PothAirShip', 'Pothairship', 'VARCHAR', true, 1, 'N');
        $this->addColumn('PothErInReview', 'Potherinreview', 'VARCHAR', true, 1, 'N');
        $this->addColumn('PothExchCtry', 'Pothexchctry', 'VARCHAR', true, 4, '');
        $this->addColumn('PothExchRate', 'Pothexchrate', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbWhseOrig', 'Intbwhseorig', 'VARCHAR', true, 2, '');
        $this->addColumn('PothLandCost', 'Pothlandcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PothRcptNbr', 'Pothrcptnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('PothLandBasedOn', 'Pothlandbasedon', 'VARCHAR', true, 1, '');
        $this->addColumn('PothInvcNbr', 'Pothinvcnbr', 'VARCHAR', true, 15, '');
        $this->addColumn('PothInvcDate', 'Pothinvcdate', 'VARCHAR', true, 8, '');
        $this->addColumn('PothFrtAmt', 'Pothfrtamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('PothMiscAmt', 'Pothmiscamt', 'DECIMAL', true, 20, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PohdNbr',
  ),
), null, null, null, false);
        $this->addRelation('Warehouse', '\\Warehouse', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':IntbWhse',
    1 => ':IntbWhse',
  ),
), null, null, null, false);
        $this->addRelation('PurchaseOrderDetailReceiving', '\\PurchaseOrderDetailReceiving', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PothNbr',
  ),
), null, null, 'PurchaseOrderDetailReceivings', false);
        $this->addRelation('PurchaseOrderDetailLotReceiving', '\\PurchaseOrderDetailLotReceiving', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':PothNbr',
    1 => ':PothNbr',
  ),
), null, null, 'PurchaseOrderDetailLotReceivings', false);
    } // buildRelations()

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Pothnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? PoReceivingHeadTableMap::CLASS_DEFAULT : PoReceivingHeadTableMap::OM_CLASS;
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
     * @return array           (PoReceivingHead object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PoReceivingHeadTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PoReceivingHeadTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PoReceivingHeadTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PoReceivingHeadTableMap::OM_CLASS;
            /** @var PoReceivingHead $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PoReceivingHeadTableMap::addInstanceToPool($obj, $key);
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
            $key = PoReceivingHeadTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PoReceivingHeadTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PoReceivingHead $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PoReceivingHeadTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHNBR);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHSTAT);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHRCPTDATE);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHGLPD);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHAIRSHIP);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHERINREVIEW);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHEXCHCTRY);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHEXCHRATE);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_INTBWHSEORIG);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHLANDCOST);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHRCPTNBR);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHLANDBASEDON);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHINVCNBR);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHINVCDATE);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHFRTAMT);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_POTHMISCAMT);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PoReceivingHeadTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PothNbr');
            $criteria->addSelectColumn($alias . '.PothStat');
            $criteria->addSelectColumn($alias . '.PothRcptDate');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.PothGlPd');
            $criteria->addSelectColumn($alias . '.PothAirShip');
            $criteria->addSelectColumn($alias . '.PothErInReview');
            $criteria->addSelectColumn($alias . '.PothExchCtry');
            $criteria->addSelectColumn($alias . '.PothExchRate');
            $criteria->addSelectColumn($alias . '.IntbWhseOrig');
            $criteria->addSelectColumn($alias . '.PothLandCost');
            $criteria->addSelectColumn($alias . '.PothRcptNbr');
            $criteria->addSelectColumn($alias . '.PothLandBasedOn');
            $criteria->addSelectColumn($alias . '.PothInvcNbr');
            $criteria->addSelectColumn($alias . '.PothInvcDate');
            $criteria->addSelectColumn($alias . '.PothFrtAmt');
            $criteria->addSelectColumn($alias . '.PothMiscAmt');
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
        return Propel::getServiceContainer()->getDatabaseMap(PoReceivingHeadTableMap::DATABASE_NAME)->getTable(PoReceivingHeadTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PoReceivingHeadTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PoReceivingHeadTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PoReceivingHeadTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a PoReceivingHead or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PoReceivingHead object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PoReceivingHead) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PoReceivingHeadTableMap::DATABASE_NAME);
            $criteria->add(PoReceivingHeadTableMap::COL_POTHNBR, (array) $values, Criteria::IN);
        }

        $query = PoReceivingHeadQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PoReceivingHeadTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PoReceivingHeadTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_tran_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PoReceivingHeadQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PoReceivingHead or Criteria object.
     *
     * @param mixed               $criteria Criteria or PoReceivingHead object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PoReceivingHead object
        }


        // Set the correct dbName
        $query = PoReceivingHeadQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PoReceivingHeadTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PoReceivingHeadTableMap::buildTableMap();
