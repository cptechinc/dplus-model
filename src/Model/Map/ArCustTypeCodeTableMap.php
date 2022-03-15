<?php

namespace Map;

use \ArCustTypeCode;
use \ArCustTypeCodeQuery;
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
 * This class defines the structure of the 'ar_cust_type' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArCustTypeCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArCustTypeCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_cust_type';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArCustTypeCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArCustTypeCode';

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
     * the column name for the ArtbTypeCode field
     */
    const COL_ARTBTYPECODE = 'ar_cust_type.ArtbTypeCode';

    /**
     * the column name for the ArtbCtypDesc field
     */
    const COL_ARTBCTYPDESC = 'ar_cust_type.ArtbCtypDesc';

    /**
     * the column name for the ArtbCtypArAcct field
     */
    const COL_ARTBCTYPARACCT = 'ar_cust_type.ArtbCtypArAcct';

    /**
     * the column name for the ArtbCtypFrtAcct field
     */
    const COL_ARTBCTYPFRTACCT = 'ar_cust_type.ArtbCtypFrtAcct';

    /**
     * the column name for the ArtbCtypMiscAcct field
     */
    const COL_ARTBCTYPMISCACCT = 'ar_cust_type.ArtbCtypMiscAcct';

    /**
     * the column name for the ArtbCtypCashAcct field
     */
    const COL_ARTBCTYPCASHACCT = 'ar_cust_type.ArtbCtypCashAcct';

    /**
     * the column name for the ArtbCtypFincAcct field
     */
    const COL_ARTBCTYPFINCACCT = 'ar_cust_type.ArtbCtypFincAcct';

    /**
     * the column name for the ArtbCtypDiscAcct field
     */
    const COL_ARTBCTYPDISCACCT = 'ar_cust_type.ArtbCtypDiscAcct';

    /**
     * the column name for the ArtbCtypSaleAcct field
     */
    const COL_ARTBCTYPSALEACCT = 'ar_cust_type.ArtbCtypSaleAcct';

    /**
     * the column name for the ArtbCtypCogsAcct field
     */
    const COL_ARTBCTYPCOGSACCT = 'ar_cust_type.ArtbCtypCogsAcct';

    /**
     * the column name for the ArtbCtypCredAcct field
     */
    const COL_ARTBCTYPCREDACCT = 'ar_cust_type.ArtbCtypCredAcct';

    /**
     * the column name for the ArtbCtypMail field
     */
    const COL_ARTBCTYPMAIL = 'ar_cust_type.ArtbCtypMail';

    /**
     * the column name for the ArtbCtypAprvNeedEmail field
     */
    const COL_ARTBCTYPAPRVNEEDEMAIL = 'ar_cust_type.ArtbCtypAprvNeedEmail';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_cust_type.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_cust_type.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_cust_type.dummy';

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
        self::TYPE_PHPNAME       => array('Artbtypecode', 'Artbctypdesc', 'Artbctyparacct', 'Artbctypfrtacct', 'Artbctypmiscacct', 'Artbctypcashacct', 'Artbctypfincacct', 'Artbctypdiscacct', 'Artbctypsaleacct', 'Artbctypcogsacct', 'Artbctypcredacct', 'Artbctypmail', 'Artbctypaprvneedemail', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('artbtypecode', 'artbctypdesc', 'artbctyparacct', 'artbctypfrtacct', 'artbctypmiscacct', 'artbctypcashacct', 'artbctypfincacct', 'artbctypdiscacct', 'artbctypsaleacct', 'artbctypcogsacct', 'artbctypcredacct', 'artbctypmail', 'artbctypaprvneedemail', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArCustTypeCodeTableMap::COL_ARTBTYPECODE, ArCustTypeCodeTableMap::COL_ARTBCTYPDESC, ArCustTypeCodeTableMap::COL_ARTBCTYPARACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPFRTACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPMISCACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPCASHACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPFINCACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPDISCACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPSALEACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPCOGSACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPCREDACCT, ArCustTypeCodeTableMap::COL_ARTBCTYPMAIL, ArCustTypeCodeTableMap::COL_ARTBCTYPAPRVNEEDEMAIL, ArCustTypeCodeTableMap::COL_DATEUPDTD, ArCustTypeCodeTableMap::COL_TIMEUPDTD, ArCustTypeCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArtbTypeCode', 'ArtbCtypDesc', 'ArtbCtypArAcct', 'ArtbCtypFrtAcct', 'ArtbCtypMiscAcct', 'ArtbCtypCashAcct', 'ArtbCtypFincAcct', 'ArtbCtypDiscAcct', 'ArtbCtypSaleAcct', 'ArtbCtypCogsAcct', 'ArtbCtypCredAcct', 'ArtbCtypMail', 'ArtbCtypAprvNeedEmail', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Artbtypecode' => 0, 'Artbctypdesc' => 1, 'Artbctyparacct' => 2, 'Artbctypfrtacct' => 3, 'Artbctypmiscacct' => 4, 'Artbctypcashacct' => 5, 'Artbctypfincacct' => 6, 'Artbctypdiscacct' => 7, 'Artbctypsaleacct' => 8, 'Artbctypcogsacct' => 9, 'Artbctypcredacct' => 10, 'Artbctypmail' => 11, 'Artbctypaprvneedemail' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ),
        self::TYPE_CAMELNAME     => array('artbtypecode' => 0, 'artbctypdesc' => 1, 'artbctyparacct' => 2, 'artbctypfrtacct' => 3, 'artbctypmiscacct' => 4, 'artbctypcashacct' => 5, 'artbctypfincacct' => 6, 'artbctypdiscacct' => 7, 'artbctypsaleacct' => 8, 'artbctypcogsacct' => 9, 'artbctypcredacct' => 10, 'artbctypmail' => 11, 'artbctypaprvneedemail' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ),
        self::TYPE_COLNAME       => array(ArCustTypeCodeTableMap::COL_ARTBTYPECODE => 0, ArCustTypeCodeTableMap::COL_ARTBCTYPDESC => 1, ArCustTypeCodeTableMap::COL_ARTBCTYPARACCT => 2, ArCustTypeCodeTableMap::COL_ARTBCTYPFRTACCT => 3, ArCustTypeCodeTableMap::COL_ARTBCTYPMISCACCT => 4, ArCustTypeCodeTableMap::COL_ARTBCTYPCASHACCT => 5, ArCustTypeCodeTableMap::COL_ARTBCTYPFINCACCT => 6, ArCustTypeCodeTableMap::COL_ARTBCTYPDISCACCT => 7, ArCustTypeCodeTableMap::COL_ARTBCTYPSALEACCT => 8, ArCustTypeCodeTableMap::COL_ARTBCTYPCOGSACCT => 9, ArCustTypeCodeTableMap::COL_ARTBCTYPCREDACCT => 10, ArCustTypeCodeTableMap::COL_ARTBCTYPMAIL => 11, ArCustTypeCodeTableMap::COL_ARTBCTYPAPRVNEEDEMAIL => 12, ArCustTypeCodeTableMap::COL_DATEUPDTD => 13, ArCustTypeCodeTableMap::COL_TIMEUPDTD => 14, ArCustTypeCodeTableMap::COL_DUMMY => 15, ),
        self::TYPE_FIELDNAME     => array('ArtbTypeCode' => 0, 'ArtbCtypDesc' => 1, 'ArtbCtypArAcct' => 2, 'ArtbCtypFrtAcct' => 3, 'ArtbCtypMiscAcct' => 4, 'ArtbCtypCashAcct' => 5, 'ArtbCtypFincAcct' => 6, 'ArtbCtypDiscAcct' => 7, 'ArtbCtypSaleAcct' => 8, 'ArtbCtypCogsAcct' => 9, 'ArtbCtypCredAcct' => 10, 'ArtbCtypMail' => 11, 'ArtbCtypAprvNeedEmail' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ),
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
        $this->setName('ar_cust_type');
        $this->setPhpName('ArCustTypeCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArCustTypeCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbTypeCode', 'Artbtypecode', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbCtypDesc', 'Artbctypdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtbCtypArAcct', 'Artbctyparacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypFrtAcct', 'Artbctypfrtacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypMiscAcct', 'Artbctypmiscacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypCashAcct', 'Artbctypcashacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypFincAcct', 'Artbctypfincacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypDiscAcct', 'Artbctypdiscacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypSaleAcct', 'Artbctypsaleacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypCogsAcct', 'Artbctypcogsacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypCredAcct', 'Artbctypcredacct', 'VARCHAR', false, 9, null);
        $this->addColumn('ArtbCtypMail', 'Artbctypmail', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbCtypAprvNeedEmail', 'Artbctypaprvneedemail', 'VARCHAR', false, 50, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArCustTypeCodeTableMap::CLASS_DEFAULT : ArCustTypeCodeTableMap::OM_CLASS;
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
     * @return array           (ArCustTypeCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArCustTypeCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArCustTypeCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArCustTypeCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArCustTypeCodeTableMap::OM_CLASS;
            /** @var ArCustTypeCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArCustTypeCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ArCustTypeCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArCustTypeCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArCustTypeCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArCustTypeCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBTYPECODE);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPDESC);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPARACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPFRTACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPMISCACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPCASHACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPFINCACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPDISCACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPSALEACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPCOGSACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPCREDACCT);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPMAIL);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_ARTBCTYPAPRVNEEDEMAIL);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArCustTypeCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbTypeCode');
            $criteria->addSelectColumn($alias . '.ArtbCtypDesc');
            $criteria->addSelectColumn($alias . '.ArtbCtypArAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypFrtAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypMiscAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypCashAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypFincAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypDiscAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypSaleAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypCogsAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypCredAcct');
            $criteria->addSelectColumn($alias . '.ArtbCtypMail');
            $criteria->addSelectColumn($alias . '.ArtbCtypAprvNeedEmail');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArCustTypeCodeTableMap::DATABASE_NAME)->getTable(ArCustTypeCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArCustTypeCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArCustTypeCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArCustTypeCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArCustTypeCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArCustTypeCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTypeCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArCustTypeCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArCustTypeCodeTableMap::DATABASE_NAME);
            $criteria->add(ArCustTypeCodeTableMap::COL_ARTBTYPECODE, (array) $values, Criteria::IN);
        }

        $query = ArCustTypeCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArCustTypeCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArCustTypeCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArCustTypeCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArCustTypeCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArCustTypeCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTypeCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArCustTypeCode object
        }


        // Set the correct dbName
        $query = ArCustTypeCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArCustTypeCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArCustTypeCodeTableMap::buildTableMap();
