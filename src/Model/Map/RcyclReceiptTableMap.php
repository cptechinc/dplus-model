<?php

namespace Map;

use \RcyclReceipt;
use \RcyclReceiptQuery;
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
 * This class defines the structure of the 'rcycl_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class RcyclReceiptTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.RcyclReceiptTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'rcycl_head';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\RcyclReceipt';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'RcyclReceipt';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the RcyhdRcptNbr field
     */
    const COL_RCYHDRCPTNBR = 'rcycl_head.RcyhdRcptNbr';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'rcycl_head.ArcuCustId';

    /**
     * the column name for the ArtbGenrId field
     */
    const COL_ARTBGENRID = 'rcycl_head.ArtbGenrId';

    /**
     * the column name for the RcyhdBolNbr field
     */
    const COL_RCYHDBOLNBR = 'rcycl_head.RcyhdBolNbr';

    /**
     * the column name for the RcyhdRcptDate field
     */
    const COL_RCYHDRCPTDATE = 'rcycl_head.RcyhdRcptDate';

    /**
     * the column name for the RcyhdStatus field
     */
    const COL_RCYHDSTATUS = 'rcycl_head.RcyhdStatus';

    /**
     * the column name for the RcyhdEnteredBy field
     */
    const COL_RCYHDENTEREDBY = 'rcycl_head.RcyhdEnteredBy';

    /**
     * the column name for the RcyhdEnteredDate field
     */
    const COL_RCYHDENTEREDDATE = 'rcycl_head.RcyhdEnteredDate';

    /**
     * the column name for the RcyhdEnteredTime field
     */
    const COL_RCYHDENTEREDTIME = 'rcycl_head.RcyhdEnteredTime';

    /**
     * the column name for the RcyhdClosedBy field
     */
    const COL_RCYHDCLOSEDBY = 'rcycl_head.RcyhdClosedBy';

    /**
     * the column name for the RcyhdClosedDate field
     */
    const COL_RCYHDCLOSEDDATE = 'rcycl_head.RcyhdClosedDate';

    /**
     * the column name for the RcyhdClosedTime field
     */
    const COL_RCYHDCLOSEDTIME = 'rcycl_head.RcyhdClosedTime';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'rcycl_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'rcycl_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'rcycl_head.dummy';

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
        self::TYPE_PHPNAME       => array('Rcyhdrcptnbr', 'Arcucustid', 'Artbgenrid', 'Rcyhdbolnbr', 'Rcyhdrcptdate', 'Rcyhdstatus', 'Rcyhdenteredby', 'Rcyhdentereddate', 'Rcyhdenteredtime', 'Rcyhdclosedby', 'Rcyhdcloseddate', 'Rcyhdclosedtime', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('rcyhdrcptnbr', 'arcucustid', 'artbgenrid', 'rcyhdbolnbr', 'rcyhdrcptdate', 'rcyhdstatus', 'rcyhdenteredby', 'rcyhdentereddate', 'rcyhdenteredtime', 'rcyhdclosedby', 'rcyhdcloseddate', 'rcyhdclosedtime', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(RcyclReceiptTableMap::COL_RCYHDRCPTNBR, RcyclReceiptTableMap::COL_ARCUCUSTID, RcyclReceiptTableMap::COL_ARTBGENRID, RcyclReceiptTableMap::COL_RCYHDBOLNBR, RcyclReceiptTableMap::COL_RCYHDRCPTDATE, RcyclReceiptTableMap::COL_RCYHDSTATUS, RcyclReceiptTableMap::COL_RCYHDENTEREDBY, RcyclReceiptTableMap::COL_RCYHDENTEREDDATE, RcyclReceiptTableMap::COL_RCYHDENTEREDTIME, RcyclReceiptTableMap::COL_RCYHDCLOSEDBY, RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE, RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME, RcyclReceiptTableMap::COL_DATEUPDTD, RcyclReceiptTableMap::COL_TIMEUPDTD, RcyclReceiptTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('RcyhdRcptNbr', 'ArcuCustId', 'ArtbGenrId', 'RcyhdBolNbr', 'RcyhdRcptDate', 'RcyhdStatus', 'RcyhdEnteredBy', 'RcyhdEnteredDate', 'RcyhdEnteredTime', 'RcyhdClosedBy', 'RcyhdClosedDate', 'RcyhdClosedTime', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Rcyhdrcptnbr' => 0, 'Arcucustid' => 1, 'Artbgenrid' => 2, 'Rcyhdbolnbr' => 3, 'Rcyhdrcptdate' => 4, 'Rcyhdstatus' => 5, 'Rcyhdenteredby' => 6, 'Rcyhdentereddate' => 7, 'Rcyhdenteredtime' => 8, 'Rcyhdclosedby' => 9, 'Rcyhdcloseddate' => 10, 'Rcyhdclosedtime' => 11, 'Dateupdtd' => 12, 'Timeupdtd' => 13, 'Dummy' => 14, ),
        self::TYPE_CAMELNAME     => array('rcyhdrcptnbr' => 0, 'arcucustid' => 1, 'artbgenrid' => 2, 'rcyhdbolnbr' => 3, 'rcyhdrcptdate' => 4, 'rcyhdstatus' => 5, 'rcyhdenteredby' => 6, 'rcyhdentereddate' => 7, 'rcyhdenteredtime' => 8, 'rcyhdclosedby' => 9, 'rcyhdcloseddate' => 10, 'rcyhdclosedtime' => 11, 'dateupdtd' => 12, 'timeupdtd' => 13, 'dummy' => 14, ),
        self::TYPE_COLNAME       => array(RcyclReceiptTableMap::COL_RCYHDRCPTNBR => 0, RcyclReceiptTableMap::COL_ARCUCUSTID => 1, RcyclReceiptTableMap::COL_ARTBGENRID => 2, RcyclReceiptTableMap::COL_RCYHDBOLNBR => 3, RcyclReceiptTableMap::COL_RCYHDRCPTDATE => 4, RcyclReceiptTableMap::COL_RCYHDSTATUS => 5, RcyclReceiptTableMap::COL_RCYHDENTEREDBY => 6, RcyclReceiptTableMap::COL_RCYHDENTEREDDATE => 7, RcyclReceiptTableMap::COL_RCYHDENTEREDTIME => 8, RcyclReceiptTableMap::COL_RCYHDCLOSEDBY => 9, RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE => 10, RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME => 11, RcyclReceiptTableMap::COL_DATEUPDTD => 12, RcyclReceiptTableMap::COL_TIMEUPDTD => 13, RcyclReceiptTableMap::COL_DUMMY => 14, ),
        self::TYPE_FIELDNAME     => array('RcyhdRcptNbr' => 0, 'ArcuCustId' => 1, 'ArtbGenrId' => 2, 'RcyhdBolNbr' => 3, 'RcyhdRcptDate' => 4, 'RcyhdStatus' => 5, 'RcyhdEnteredBy' => 6, 'RcyhdEnteredDate' => 7, 'RcyhdEnteredTime' => 8, 'RcyhdClosedBy' => 9, 'RcyhdClosedDate' => 10, 'RcyhdClosedTime' => 11, 'DateUpdtd' => 12, 'TimeUpdtd' => 13, 'dummy' => 14, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $this->setName('rcycl_head');
        $this->setPhpName('RcyclReceipt');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\RcyclReceipt');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('RcyhdRcptNbr', 'Rcyhdrcptnbr', 'INTEGER', true, null, 0);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addForeignKey('ArtbGenrId', 'Artbgenrid', 'VARCHAR', 'rcycl_generator', 'ArtbGenrId', true, 6, '');
        $this->addColumn('RcyhdBolNbr', 'Rcyhdbolnbr', 'VARCHAR', true, 20, '');
        $this->addColumn('RcyhdRcptDate', 'Rcyhdrcptdate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdStatus', 'Rcyhdstatus', 'CHAR', true, null, 'O');
        $this->addColumn('RcyhdEnteredBy', 'Rcyhdenteredby', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdEnteredDate', 'Rcyhdentereddate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdEnteredTime', 'Rcyhdenteredtime', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdClosedBy', 'Rcyhdclosedby', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdClosedDate', 'Rcyhdcloseddate', 'VARCHAR', true, 8, '');
        $this->addColumn('RcyhdClosedTime', 'Rcyhdclosedtime', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
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
        $this->addRelation('RcyclGenerator', '\\RcyclGenerator', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArtbGenrId',
    1 => ':ArtbGenrId',
  ),
), null, null, null, false);
        $this->addRelation('RcyclReceiptDetail', '\\RcyclReceiptDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':RcyhdRcptNbr',
    1 => ':RcyhdRcptNbr',
  ),
), null, null, 'RcyclReceiptDetails', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Rcyhdrcptnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? RcyclReceiptTableMap::CLASS_DEFAULT : RcyclReceiptTableMap::OM_CLASS;
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
     * @return array           (RcyclReceipt object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = RcyclReceiptTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = RcyclReceiptTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + RcyclReceiptTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RcyclReceiptTableMap::OM_CLASS;
            /** @var RcyclReceipt $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            RcyclReceiptTableMap::addInstanceToPool($obj, $key);
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
            $key = RcyclReceiptTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = RcyclReceiptTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var RcyclReceipt $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RcyclReceiptTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDRCPTNBR);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_ARTBGENRID);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDBOLNBR);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDRCPTDATE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDSTATUS);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDBY);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(RcyclReceiptTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.RcyhdRcptNbr');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArtbGenrId');
            $criteria->addSelectColumn($alias . '.RcyhdBolNbr');
            $criteria->addSelectColumn($alias . '.RcyhdRcptDate');
            $criteria->addSelectColumn($alias . '.RcyhdStatus');
            $criteria->addSelectColumn($alias . '.RcyhdEnteredBy');
            $criteria->addSelectColumn($alias . '.RcyhdEnteredDate');
            $criteria->addSelectColumn($alias . '.RcyhdEnteredTime');
            $criteria->addSelectColumn($alias . '.RcyhdClosedBy');
            $criteria->addSelectColumn($alias . '.RcyhdClosedDate');
            $criteria->addSelectColumn($alias . '.RcyhdClosedTime');
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
        return Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptTableMap::DATABASE_NAME)->getTable(RcyclReceiptTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(RcyclReceiptTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(RcyclReceiptTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new RcyclReceiptTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a RcyclReceipt or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or RcyclReceipt object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \RcyclReceipt) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RcyclReceiptTableMap::DATABASE_NAME);
            $criteria->add(RcyclReceiptTableMap::COL_RCYHDRCPTNBR, (array) $values, Criteria::IN);
        }

        $query = RcyclReceiptQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            RcyclReceiptTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                RcyclReceiptTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the rcycl_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return RcyclReceiptQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a RcyclReceipt or Criteria object.
     *
     * @param mixed               $criteria Criteria or RcyclReceipt object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from RcyclReceipt object
        }


        // Set the correct dbName
        $query = RcyclReceiptQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // RcyclReceiptTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
RcyclReceiptTableMap::buildTableMap();
