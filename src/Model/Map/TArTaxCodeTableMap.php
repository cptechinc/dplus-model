<?php

namespace Map;

use \ArTaxCode;
use \ArTaxCodeQuery;
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
 * This class defines the structure of the 'ar_cust_mtax' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArTaxCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArTaxCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ar_cust_mtax';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArTaxCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArTaxCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'ar_cust_mtax.ArtbMtaxCode';

    /**
     * the column name for the ArtbMtaxDesc field
     */
    const COL_ARTBMTAXDESC = 'ar_cust_mtax.ArtbMtaxDesc';

    /**
     * the column name for the ArtbMtaxPct field
     */
    const COL_ARTBMTAXPCT = 'ar_cust_mtax.ArtbMtaxPct';

    /**
     * the column name for the ArtbMtaxGlAcct field
     */
    const COL_ARTBMTAXGLACCT = 'ar_cust_mtax.ArtbMtaxGlAcct';

    /**
     * the column name for the ArtbMtaxNote1 field
     */
    const COL_ARTBMTAXNOTE1 = 'ar_cust_mtax.ArtbMtaxNote1';

    /**
     * the column name for the ArtbMtaxNote2 field
     */
    const COL_ARTBMTAXNOTE2 = 'ar_cust_mtax.ArtbMtaxNote2';

    /**
     * the column name for the ArtbMtaxNote3 field
     */
    const COL_ARTBMTAXNOTE3 = 'ar_cust_mtax.ArtbMtaxNote3';

    /**
     * the column name for the ArtbMtaxNote4 field
     */
    const COL_ARTBMTAXNOTE4 = 'ar_cust_mtax.ArtbMtaxNote4';

    /**
     * the column name for the ArtbMtaxMaxCost field
     */
    const COL_ARTBMTAXMAXCOST = 'ar_cust_mtax.ArtbMtaxMaxCost';

    /**
     * the column name for the ArtbMtaxPerCigar field
     */
    const COL_ARTBMTAXPERCIGAR = 'ar_cust_mtax.ArtbMtaxPerCigar';

    /**
     * the column name for the ArtbMtaxTaxType field
     */
    const COL_ARTBMTAXTAXTYPE = 'ar_cust_mtax.ArtbMtaxTaxType';

    /**
     * the column name for the ArtbMtaxTaxFrt field
     */
    const COL_ARTBMTAXTAXFRT = 'ar_cust_mtax.ArtbMtaxTaxFrt';

    /**
     * the column name for the ArtbMtaxFrtTax field
     */
    const COL_ARTBMTAXFRTTAX = 'ar_cust_mtax.ArtbMtaxFrtTax';

    /**
     * the column name for the ArtbMtaxLimit field
     */
    const COL_ARTBMTAXLIMIT = 'ar_cust_mtax.ArtbMtaxLimit';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ar_cust_mtax.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ar_cust_mtax.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ar_cust_mtax.dummy';

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
        self::TYPE_PHPNAME       => array('Artbmtaxcode', 'Artbmtaxdesc', 'Artbmtaxpct', 'Artbmtaxglacct', 'Artbmtaxnote1', 'Artbmtaxnote2', 'Artbmtaxnote3', 'Artbmtaxnote4', 'Artbmtaxmaxcost', 'Artbmtaxpercigar', 'Artbmtaxtaxtype', 'Artbmtaxtaxfrt', 'Artbmtaxfrttax', 'Artbmtaxlimit', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('artbmtaxcode', 'artbmtaxdesc', 'artbmtaxpct', 'artbmtaxglacct', 'artbmtaxnote1', 'artbmtaxnote2', 'artbmtaxnote3', 'artbmtaxnote4', 'artbmtaxmaxcost', 'artbmtaxpercigar', 'artbmtaxtaxtype', 'artbmtaxtaxfrt', 'artbmtaxfrttax', 'artbmtaxlimit', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArTaxCodeTableMap::COL_ARTBMTAXCODE, ArTaxCodeTableMap::COL_ARTBMTAXDESC, ArTaxCodeTableMap::COL_ARTBMTAXPCT, ArTaxCodeTableMap::COL_ARTBMTAXGLACCT, ArTaxCodeTableMap::COL_ARTBMTAXNOTE1, ArTaxCodeTableMap::COL_ARTBMTAXNOTE2, ArTaxCodeTableMap::COL_ARTBMTAXNOTE3, ArTaxCodeTableMap::COL_ARTBMTAXNOTE4, ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST, ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR, ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE, ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT, ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX, ArTaxCodeTableMap::COL_ARTBMTAXLIMIT, ArTaxCodeTableMap::COL_DATEUPDTD, ArTaxCodeTableMap::COL_TIMEUPDTD, ArTaxCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArtbMtaxCode', 'ArtbMtaxDesc', 'ArtbMtaxPct', 'ArtbMtaxGlAcct', 'ArtbMtaxNote1', 'ArtbMtaxNote2', 'ArtbMtaxNote3', 'ArtbMtaxNote4', 'ArtbMtaxMaxCost', 'ArtbMtaxPerCigar', 'ArtbMtaxTaxType', 'ArtbMtaxTaxFrt', 'ArtbMtaxFrtTax', 'ArtbMtaxLimit', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Artbmtaxcode' => 0, 'Artbmtaxdesc' => 1, 'Artbmtaxpct' => 2, 'Artbmtaxglacct' => 3, 'Artbmtaxnote1' => 4, 'Artbmtaxnote2' => 5, 'Artbmtaxnote3' => 6, 'Artbmtaxnote4' => 7, 'Artbmtaxmaxcost' => 8, 'Artbmtaxpercigar' => 9, 'Artbmtaxtaxtype' => 10, 'Artbmtaxtaxfrt' => 11, 'Artbmtaxfrttax' => 12, 'Artbmtaxlimit' => 13, 'Dateupdtd' => 14, 'Timeupdtd' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('artbmtaxcode' => 0, 'artbmtaxdesc' => 1, 'artbmtaxpct' => 2, 'artbmtaxglacct' => 3, 'artbmtaxnote1' => 4, 'artbmtaxnote2' => 5, 'artbmtaxnote3' => 6, 'artbmtaxnote4' => 7, 'artbmtaxmaxcost' => 8, 'artbmtaxpercigar' => 9, 'artbmtaxtaxtype' => 10, 'artbmtaxtaxfrt' => 11, 'artbmtaxfrttax' => 12, 'artbmtaxlimit' => 13, 'dateupdtd' => 14, 'timeupdtd' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(ArTaxCodeTableMap::COL_ARTBMTAXCODE => 0, ArTaxCodeTableMap::COL_ARTBMTAXDESC => 1, ArTaxCodeTableMap::COL_ARTBMTAXPCT => 2, ArTaxCodeTableMap::COL_ARTBMTAXGLACCT => 3, ArTaxCodeTableMap::COL_ARTBMTAXNOTE1 => 4, ArTaxCodeTableMap::COL_ARTBMTAXNOTE2 => 5, ArTaxCodeTableMap::COL_ARTBMTAXNOTE3 => 6, ArTaxCodeTableMap::COL_ARTBMTAXNOTE4 => 7, ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST => 8, ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR => 9, ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE => 10, ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT => 11, ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX => 12, ArTaxCodeTableMap::COL_ARTBMTAXLIMIT => 13, ArTaxCodeTableMap::COL_DATEUPDTD => 14, ArTaxCodeTableMap::COL_TIMEUPDTD => 15, ArTaxCodeTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('ArtbMtaxCode' => 0, 'ArtbMtaxDesc' => 1, 'ArtbMtaxPct' => 2, 'ArtbMtaxGlAcct' => 3, 'ArtbMtaxNote1' => 4, 'ArtbMtaxNote2' => 5, 'ArtbMtaxNote3' => 6, 'ArtbMtaxNote4' => 7, 'ArtbMtaxMaxCost' => 8, 'ArtbMtaxPerCigar' => 9, 'ArtbMtaxTaxType' => 10, 'ArtbMtaxTaxFrt' => 11, 'ArtbMtaxFrtTax' => 12, 'ArtbMtaxLimit' => 13, 'DateUpdtd' => 14, 'TimeUpdtd' => 15, 'dummy' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('ar_cust_mtax');
        $this->setPhpName('ArTaxCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArTaxCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbMtaxDesc', 'Artbmtaxdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtbMtaxPct', 'Artbmtaxpct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbMtaxGlAcct', 'Artbmtaxglacct', 'VARCHAR', false, 12, null);
        $this->addColumn('ArtbMtaxNote1', 'Artbmtaxnote1', 'VARCHAR', false, 50, null);
        $this->addColumn('ArtbMtaxNote2', 'Artbmtaxnote2', 'VARCHAR', false, 50, null);
        $this->addColumn('ArtbMtaxNote3', 'Artbmtaxnote3', 'VARCHAR', false, 50, null);
        $this->addColumn('ArtbMtaxNote4', 'Artbmtaxnote4', 'VARCHAR', false, 50, null);
        $this->addColumn('ArtbMtaxMaxCost', 'Artbmtaxmaxcost', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbMtaxPerCigar', 'Artbmtaxpercigar', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtbMtaxTaxType', 'Artbmtaxtaxtype', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbMtaxTaxFrt', 'Artbmtaxtaxfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbMtaxFrtTax', 'Artbmtaxfrttax', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbMtaxLimit', 'Artbmtaxlimit', 'INTEGER', false, 6, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArTaxCodeTableMap::CLASS_DEFAULT : ArTaxCodeTableMap::OM_CLASS;
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
     * @return array           (ArTaxCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArTaxCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArTaxCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArTaxCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArTaxCodeTableMap::OM_CLASS;
            /** @var ArTaxCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArTaxCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ArTaxCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArTaxCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArTaxCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArTaxCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXDESC);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXPCT);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXGLACCT);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXNOTE1);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXNOTE2);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXNOTE3);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXNOTE4);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArTaxCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
            $criteria->addSelectColumn($alias . '.ArtbMtaxDesc');
            $criteria->addSelectColumn($alias . '.ArtbMtaxPct');
            $criteria->addSelectColumn($alias . '.ArtbMtaxGlAcct');
            $criteria->addSelectColumn($alias . '.ArtbMtaxNote1');
            $criteria->addSelectColumn($alias . '.ArtbMtaxNote2');
            $criteria->addSelectColumn($alias . '.ArtbMtaxNote3');
            $criteria->addSelectColumn($alias . '.ArtbMtaxNote4');
            $criteria->addSelectColumn($alias . '.ArtbMtaxMaxCost');
            $criteria->addSelectColumn($alias . '.ArtbMtaxPerCigar');
            $criteria->addSelectColumn($alias . '.ArtbMtaxTaxType');
            $criteria->addSelectColumn($alias . '.ArtbMtaxTaxFrt');
            $criteria->addSelectColumn($alias . '.ArtbMtaxFrtTax');
            $criteria->addSelectColumn($alias . '.ArtbMtaxLimit');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArTaxCodeTableMap::DATABASE_NAME)->getTable(ArTaxCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArTaxCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArTaxCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArTaxCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArTaxCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArTaxCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArTaxCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArTaxCodeTableMap::DATABASE_NAME);
            $criteria->add(ArTaxCodeTableMap::COL_ARTBMTAXCODE, (array) $values, Criteria::IN);
        }

        $query = ArTaxCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArTaxCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArTaxCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_mtax table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArTaxCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArTaxCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArTaxCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArTaxCode object
        }


        // Set the correct dbName
        $query = ArTaxCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArTaxCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArTaxCodeTableMap::buildTableMap();
