<?php

namespace Map;

use \ArCashHead;
use \ArCashHeadQuery;
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
 * This class defines the structure of the 'ar_cash_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArCashHeadTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArCashHeadTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_cash_head';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArCashHead';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArCashHead';

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
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'ar_cash_head.ArcuCustId';

    /**
     * the column name for the ArchAmtRec field
     */
    const COL_ARCHAMTREC = 'ar_cash_head.ArchAmtRec';

    /**
     * the column name for the ArchClerkId field
     */
    const COL_ARCHCLERKID = 'ar_cash_head.ArchClerkId';

    /**
     * the column name for the ArchPostFlag field
     */
    const COL_ARCHPOSTFLAG = 'ar_cash_head.ArchPostFlag';

    /**
     * the column name for the ArchOrigWhse field
     */
    const COL_ARCHORIGWHSE = 'ar_cash_head.ArchOrigWhse';

    /**
     * the column name for the ArchCcNbr field
     */
    const COL_ARCHCCNBR = 'ar_cash_head.ArchCcNbr';

    /**
     * the column name for the ArchCcExpDate field
     */
    const COL_ARCHCCEXPDATE = 'ar_cash_head.ArchCcExpDate';

    /**
     * the column name for the ArchCcValidCode field
     */
    const COL_ARCHCCVALIDCODE = 'ar_cash_head.ArchCcValidCode';

    /**
     * the column name for the ArchCcAprv field
     */
    const COL_ARCHCCAPRV = 'ar_cash_head.ArchCcAprv';

    /**
     * the column name for the ArchCcInfo field
     */
    const COL_ARCHCCINFO = 'ar_cash_head.ArchCcInfo';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_cash_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_cash_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_cash_head.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Archamtrec', 'Archclerkid', 'Archpostflag', 'Archorigwhse', 'Archccnbr', 'Archccexpdate', 'Archccvalidcode', 'Archccaprv', 'Archccinfo', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'archamtrec', 'archclerkid', 'archpostflag', 'archorigwhse', 'archccnbr', 'archccexpdate', 'archccvalidcode', 'archccaprv', 'archccinfo', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArCashHeadTableMap::COL_ARCUCUSTID, ArCashHeadTableMap::COL_ARCHAMTREC, ArCashHeadTableMap::COL_ARCHCLERKID, ArCashHeadTableMap::COL_ARCHPOSTFLAG, ArCashHeadTableMap::COL_ARCHORIGWHSE, ArCashHeadTableMap::COL_ARCHCCNBR, ArCashHeadTableMap::COL_ARCHCCEXPDATE, ArCashHeadTableMap::COL_ARCHCCVALIDCODE, ArCashHeadTableMap::COL_ARCHCCAPRV, ArCashHeadTableMap::COL_ARCHCCINFO, ArCashHeadTableMap::COL_DATEUPDTD, ArCashHeadTableMap::COL_TIMEUPDTD, ArCashHeadTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArchAmtRec', 'ArchClerkId', 'ArchPostFlag', 'ArchOrigWhse', 'ArchCcNbr', 'ArchCcExpDate', 'ArchCcValidCode', 'ArchCcAprv', 'ArchCcInfo', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Archamtrec' => 1, 'Archclerkid' => 2, 'Archpostflag' => 3, 'Archorigwhse' => 4, 'Archccnbr' => 5, 'Archccexpdate' => 6, 'Archccvalidcode' => 7, 'Archccaprv' => 8, 'Archccinfo' => 9, 'Dateupdtd' => 10, 'Timeupdtd' => 11, 'Dummy' => 12, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'archamtrec' => 1, 'archclerkid' => 2, 'archpostflag' => 3, 'archorigwhse' => 4, 'archccnbr' => 5, 'archccexpdate' => 6, 'archccvalidcode' => 7, 'archccaprv' => 8, 'archccinfo' => 9, 'dateupdtd' => 10, 'timeupdtd' => 11, 'dummy' => 12, ),
        self::TYPE_COLNAME       => array(ArCashHeadTableMap::COL_ARCUCUSTID => 0, ArCashHeadTableMap::COL_ARCHAMTREC => 1, ArCashHeadTableMap::COL_ARCHCLERKID => 2, ArCashHeadTableMap::COL_ARCHPOSTFLAG => 3, ArCashHeadTableMap::COL_ARCHORIGWHSE => 4, ArCashHeadTableMap::COL_ARCHCCNBR => 5, ArCashHeadTableMap::COL_ARCHCCEXPDATE => 6, ArCashHeadTableMap::COL_ARCHCCVALIDCODE => 7, ArCashHeadTableMap::COL_ARCHCCAPRV => 8, ArCashHeadTableMap::COL_ARCHCCINFO => 9, ArCashHeadTableMap::COL_DATEUPDTD => 10, ArCashHeadTableMap::COL_TIMEUPDTD => 11, ArCashHeadTableMap::COL_DUMMY => 12, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArchAmtRec' => 1, 'ArchClerkId' => 2, 'ArchPostFlag' => 3, 'ArchOrigWhse' => 4, 'ArchCcNbr' => 5, 'ArchCcExpDate' => 6, 'ArchCcValidCode' => 7, 'ArchCcAprv' => 8, 'ArchCcInfo' => 9, 'DateUpdtd' => 10, 'TimeUpdtd' => 11, 'dummy' => 12, ),
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
        $this->setName('ar_cash_head');
        $this->setPhpName('ArCashHead');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArCashHead');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR' , 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addColumn('ArchAmtRec', 'Archamtrec', 'DECIMAL', false, 20, null);
        $this->addColumn('ArchClerkId', 'Archclerkid', 'VARCHAR', false, 12, null);
        $this->addColumn('ArchPostFlag', 'Archpostflag', 'VARCHAR', false, 1, null);
        $this->addColumn('ArchOrigWhse', 'Archorigwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ArchCcNbr', 'Archccnbr', 'VARCHAR', false, 16, null);
        $this->addColumn('ArchCcExpDate', 'Archccexpdate', 'VARCHAR', false, 6, null);
        $this->addColumn('ArchCcValidCode', 'Archccvalidcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArchCcAprv', 'Archccaprv', 'VARCHAR', false, 6, null);
        $this->addColumn('ArchCcInfo', 'Archccinfo', 'VARCHAR', false, 1, null);
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
        $this->addRelation('ArPaymentPending', '\\ArPaymentPending', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, 'ArPaymentPendings', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArCashHeadTableMap::CLASS_DEFAULT : ArCashHeadTableMap::OM_CLASS;
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
     * @return array           (ArCashHead object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArCashHeadTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArCashHeadTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArCashHeadTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArCashHeadTableMap::OM_CLASS;
            /** @var ArCashHead $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArCashHeadTableMap::addInstanceToPool($obj, $key);
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
            $key = ArCashHeadTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArCashHeadTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArCashHead $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArCashHeadTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHAMTREC);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHCLERKID);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHPOSTFLAG);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHORIGWHSE);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHCCNBR);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHCCEXPDATE);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHCCVALIDCODE);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHCCAPRV);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_ARCHCCINFO);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArCashHeadTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArchAmtRec');
            $criteria->addSelectColumn($alias . '.ArchClerkId');
            $criteria->addSelectColumn($alias . '.ArchPostFlag');
            $criteria->addSelectColumn($alias . '.ArchOrigWhse');
            $criteria->addSelectColumn($alias . '.ArchCcNbr');
            $criteria->addSelectColumn($alias . '.ArchCcExpDate');
            $criteria->addSelectColumn($alias . '.ArchCcValidCode');
            $criteria->addSelectColumn($alias . '.ArchCcAprv');
            $criteria->addSelectColumn($alias . '.ArchCcInfo');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArCashHeadTableMap::DATABASE_NAME)->getTable(ArCashHeadTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArCashHeadTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArCashHeadTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArCashHeadTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArCashHead or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArCashHead object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArCashHead) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArCashHeadTableMap::DATABASE_NAME);
            $criteria->add(ArCashHeadTableMap::COL_ARCUCUSTID, (array) $values, Criteria::IN);
        }

        $query = ArCashHeadQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArCashHeadTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArCashHeadTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cash_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArCashHeadQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArCashHead or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArCashHead object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArCashHead object
        }


        // Set the correct dbName
        $query = ArCashHeadQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArCashHeadTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArCashHeadTableMap::buildTableMap();
