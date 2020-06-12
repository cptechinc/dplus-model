<?php

namespace Map;

use \Printer;
use \PrinterQuery;
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
 * This class defines the structure of the 'printer_control' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PrinterTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PrinterTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'printer_control';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Printer';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Printer';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the PrctPrinterId field
     */
    const COL_PRCTPRINTERID = 'printer_control.PrctPrinterId';

    /**
     * the column name for the PrctDesc field
     */
    const COL_PRCTDESC = 'printer_control.PrctDesc';

    /**
     * the column name for the PrctPrtrType field
     */
    const COL_PRCTPRTRTYPE = 'printer_control.PrctPrtrType';

    /**
     * the column name for the PrctTypeDesc field
     */
    const COL_PRCTTYPEDESC = 'printer_control.PrctTypeDesc';

    /**
     * the column name for the PrctForm field
     */
    const COL_PRCTFORM = 'printer_control.PrctForm';

    /**
     * the column name for the PrctPitch10 field
     */
    const COL_PRCTPITCH10 = 'printer_control.PrctPitch10';

    /**
     * the column name for the PrctPitch12 field
     */
    const COL_PRCTPITCH12 = 'printer_control.PrctPitch12';

    /**
     * the column name for the PrctPitch17 field
     */
    const COL_PRCTPITCH17 = 'printer_control.PrctPitch17';

    /**
     * the column name for the PrctWhse field
     */
    const COL_PRCTWHSE = 'printer_control.PrctWhse';

    /**
     * the column name for the PrctSelectList field
     */
    const COL_PRCTSELECTLIST = 'printer_control.PrctSelectList';

    /**
     * the column name for the PrctAssgndCart field
     */
    const COL_PRCTASSGNDCART = 'printer_control.PrctAssgndCart';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'printer_control.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'printer_control.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'printer_control.dummy';

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
        self::TYPE_PHPNAME       => array('Prctprinterid', 'Prctdesc', 'Prctprtrtype', 'Prcttypedesc', 'Prctform', 'Prctpitch10', 'Prctpitch12', 'Prctpitch17', 'Prctwhse', 'Prctselectlist', 'Prctassgndcart', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('prctprinterid', 'prctdesc', 'prctprtrtype', 'prcttypedesc', 'prctform', 'prctpitch10', 'prctpitch12', 'prctpitch17', 'prctwhse', 'prctselectlist', 'prctassgndcart', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PrinterTableMap::COL_PRCTPRINTERID, PrinterTableMap::COL_PRCTDESC, PrinterTableMap::COL_PRCTPRTRTYPE, PrinterTableMap::COL_PRCTTYPEDESC, PrinterTableMap::COL_PRCTFORM, PrinterTableMap::COL_PRCTPITCH10, PrinterTableMap::COL_PRCTPITCH12, PrinterTableMap::COL_PRCTPITCH17, PrinterTableMap::COL_PRCTWHSE, PrinterTableMap::COL_PRCTSELECTLIST, PrinterTableMap::COL_PRCTASSGNDCART, PrinterTableMap::COL_DATEUPDTD, PrinterTableMap::COL_TIMEUPDTD, PrinterTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PrctPrinterId', 'PrctDesc', 'PrctPrtrType', 'PrctTypeDesc', 'PrctForm', 'PrctPitch10', 'PrctPitch12', 'PrctPitch17', 'PrctWhse', 'PrctSelectList', 'PrctAssgndCart', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Prctprinterid' => 0, 'Prctdesc' => 1, 'Prctprtrtype' => 2, 'Prcttypedesc' => 3, 'Prctform' => 4, 'Prctpitch10' => 5, 'Prctpitch12' => 6, 'Prctpitch17' => 7, 'Prctwhse' => 8, 'Prctselectlist' => 9, 'Prctassgndcart' => 10, 'Dateupdtd' => 11, 'Timeupdtd' => 12, 'Dummy' => 13, ),
        self::TYPE_CAMELNAME     => array('prctprinterid' => 0, 'prctdesc' => 1, 'prctprtrtype' => 2, 'prcttypedesc' => 3, 'prctform' => 4, 'prctpitch10' => 5, 'prctpitch12' => 6, 'prctpitch17' => 7, 'prctwhse' => 8, 'prctselectlist' => 9, 'prctassgndcart' => 10, 'dateupdtd' => 11, 'timeupdtd' => 12, 'dummy' => 13, ),
        self::TYPE_COLNAME       => array(PrinterTableMap::COL_PRCTPRINTERID => 0, PrinterTableMap::COL_PRCTDESC => 1, PrinterTableMap::COL_PRCTPRTRTYPE => 2, PrinterTableMap::COL_PRCTTYPEDESC => 3, PrinterTableMap::COL_PRCTFORM => 4, PrinterTableMap::COL_PRCTPITCH10 => 5, PrinterTableMap::COL_PRCTPITCH12 => 6, PrinterTableMap::COL_PRCTPITCH17 => 7, PrinterTableMap::COL_PRCTWHSE => 8, PrinterTableMap::COL_PRCTSELECTLIST => 9, PrinterTableMap::COL_PRCTASSGNDCART => 10, PrinterTableMap::COL_DATEUPDTD => 11, PrinterTableMap::COL_TIMEUPDTD => 12, PrinterTableMap::COL_DUMMY => 13, ),
        self::TYPE_FIELDNAME     => array('PrctPrinterId' => 0, 'PrctDesc' => 1, 'PrctPrtrType' => 2, 'PrctTypeDesc' => 3, 'PrctForm' => 4, 'PrctPitch10' => 5, 'PrctPitch12' => 6, 'PrctPitch17' => 7, 'PrctWhse' => 8, 'PrctSelectList' => 9, 'PrctAssgndCart' => 10, 'DateUpdtd' => 11, 'TimeUpdtd' => 12, 'dummy' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('printer_control');
        $this->setPhpName('Printer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Printer');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PrctPrinterId', 'Prctprinterid', 'VARCHAR', true, 12, '');
        $this->addColumn('PrctDesc', 'Prctdesc', 'VARCHAR', false, 30, null);
        $this->addColumn('PrctPrtrType', 'Prctprtrtype', 'VARCHAR', false, 1, null);
        $this->addColumn('PrctTypeDesc', 'Prcttypedesc', 'VARCHAR', false, 20, null);
        $this->addColumn('PrctForm', 'Prctform', 'VARCHAR', false, 12, null);
        $this->addColumn('PrctPitch10', 'Prctpitch10', 'VARCHAR', false, 1, null);
        $this->addColumn('PrctPitch12', 'Prctpitch12', 'VARCHAR', false, 1, null);
        $this->addColumn('PrctPitch17', 'Prctpitch17', 'VARCHAR', false, 1, null);
        $this->addColumn('PrctWhse', 'Prctwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('PrctSelectList', 'Prctselectlist', 'VARCHAR', false, 1, null);
        $this->addColumn('PrctAssgndCart', 'Prctassgndcart', 'VARCHAR', false, 8, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Prctprinterid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PrinterTableMap::CLASS_DEFAULT : PrinterTableMap::OM_CLASS;
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
     * @return array           (Printer object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PrinterTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PrinterTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PrinterTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PrinterTableMap::OM_CLASS;
            /** @var Printer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PrinterTableMap::addInstanceToPool($obj, $key);
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
            $key = PrinterTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PrinterTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Printer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PrinterTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTPRINTERID);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTDESC);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTPRTRTYPE);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTTYPEDESC);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTFORM);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTPITCH10);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTPITCH12);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTPITCH17);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTWHSE);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTSELECTLIST);
            $criteria->addSelectColumn(PrinterTableMap::COL_PRCTASSGNDCART);
            $criteria->addSelectColumn(PrinterTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PrinterTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PrinterTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PrctPrinterId');
            $criteria->addSelectColumn($alias . '.PrctDesc');
            $criteria->addSelectColumn($alias . '.PrctPrtrType');
            $criteria->addSelectColumn($alias . '.PrctTypeDesc');
            $criteria->addSelectColumn($alias . '.PrctForm');
            $criteria->addSelectColumn($alias . '.PrctPitch10');
            $criteria->addSelectColumn($alias . '.PrctPitch12');
            $criteria->addSelectColumn($alias . '.PrctPitch17');
            $criteria->addSelectColumn($alias . '.PrctWhse');
            $criteria->addSelectColumn($alias . '.PrctSelectList');
            $criteria->addSelectColumn($alias . '.PrctAssgndCart');
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
        return Propel::getServiceContainer()->getDatabaseMap(PrinterTableMap::DATABASE_NAME)->getTable(PrinterTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PrinterTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PrinterTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PrinterTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Printer or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Printer object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PrinterTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Printer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PrinterTableMap::DATABASE_NAME);
            $criteria->add(PrinterTableMap::COL_PRCTPRINTERID, (array) $values, Criteria::IN);
        }

        $query = PrinterQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PrinterTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PrinterTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the printer_control table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PrinterQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Printer or Criteria object.
     *
     * @param mixed               $criteria Criteria or Printer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PrinterTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Printer object
        }


        // Set the correct dbName
        $query = PrinterQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PrinterTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PrinterTableMap::buildTableMap();
