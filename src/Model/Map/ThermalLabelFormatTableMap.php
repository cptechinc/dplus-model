<?php

namespace Map;

use \ThermalLabelFormat;
use \ThermalLabelFormatQuery;
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
 * This class defines the structure of the 'thermal_label_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ThermalLabelFormatTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ThermalLabelFormatTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'thermal_label_head';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ThermalLabelFormat';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ThermalLabelFormat';

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
     * the column name for the TllhFormat field
     */
    const COL_TLLHFORMAT = 'thermal_label_head.TllhFormat';

    /**
     * the column name for the TllhDesc field
     */
    const COL_TLLHDESC = 'thermal_label_head.TllhDesc';

    /**
     * the column name for the TllhSrc field
     */
    const COL_TLLHSRC = 'thermal_label_head.TllhSrc';

    /**
     * the column name for the TllhPrtrModl field
     */
    const COL_TLLHPRTRMODL = 'thermal_label_head.TllhPrtrModl';

    /**
     * the column name for the TllhPrtrSplr field
     */
    const COL_TLLHPRTRSPLR = 'thermal_label_head.TllhPrtrSplr';

    /**
     * the column name for the TllhWidth field
     */
    const COL_TLLHWIDTH = 'thermal_label_head.TllhWidth';

    /**
     * the column name for the TllhLength field
     */
    const COL_TLLHLENGTH = 'thermal_label_head.TllhLength';

    /**
     * the column name for the TllhLock field
     */
    const COL_TLLHLOCK = 'thermal_label_head.TllhLock';

    /**
     * the column name for the TllhSortBy field
     */
    const COL_TLLHSORTBY = 'thermal_label_head.TllhSortBy';

    /**
     * the column name for the TllhType field
     */
    const COL_TLLHTYPE = 'thermal_label_head.TllhType';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'thermal_label_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'thermal_label_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'thermal_label_head.dummy';

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
        self::TYPE_PHPNAME       => array('Tllhformat', 'Tllhdesc', 'Tllhsrc', 'Tllhprtrmodl', 'Tllhprtrsplr', 'Tllhwidth', 'Tllhlength', 'Tllhlock', 'Tllhsortby', 'Tllhtype', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('tllhformat', 'tllhdesc', 'tllhsrc', 'tllhprtrmodl', 'tllhprtrsplr', 'tllhwidth', 'tllhlength', 'tllhlock', 'tllhsortby', 'tllhtype', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ThermalLabelFormatTableMap::COL_TLLHFORMAT, ThermalLabelFormatTableMap::COL_TLLHDESC, ThermalLabelFormatTableMap::COL_TLLHSRC, ThermalLabelFormatTableMap::COL_TLLHPRTRMODL, ThermalLabelFormatTableMap::COL_TLLHPRTRSPLR, ThermalLabelFormatTableMap::COL_TLLHWIDTH, ThermalLabelFormatTableMap::COL_TLLHLENGTH, ThermalLabelFormatTableMap::COL_TLLHLOCK, ThermalLabelFormatTableMap::COL_TLLHSORTBY, ThermalLabelFormatTableMap::COL_TLLHTYPE, ThermalLabelFormatTableMap::COL_DATEUPDTD, ThermalLabelFormatTableMap::COL_TIMEUPDTD, ThermalLabelFormatTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('TllhFormat', 'TllhDesc', 'TllhSrc', 'TllhPrtrModl', 'TllhPrtrSplr', 'TllhWidth', 'TllhLength', 'TllhLock', 'TllhSortBy', 'TllhType', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Tllhformat' => 0, 'Tllhdesc' => 1, 'Tllhsrc' => 2, 'Tllhprtrmodl' => 3, 'Tllhprtrsplr' => 4, 'Tllhwidth' => 5, 'Tllhlength' => 6, 'Tllhlock' => 7, 'Tllhsortby' => 8, 'Tllhtype' => 9, 'Dateupdtd' => 10, 'Timeupdtd' => 11, 'Dummy' => 12, ),
        self::TYPE_CAMELNAME     => array('tllhformat' => 0, 'tllhdesc' => 1, 'tllhsrc' => 2, 'tllhprtrmodl' => 3, 'tllhprtrsplr' => 4, 'tllhwidth' => 5, 'tllhlength' => 6, 'tllhlock' => 7, 'tllhsortby' => 8, 'tllhtype' => 9, 'dateupdtd' => 10, 'timeupdtd' => 11, 'dummy' => 12, ),
        self::TYPE_COLNAME       => array(ThermalLabelFormatTableMap::COL_TLLHFORMAT => 0, ThermalLabelFormatTableMap::COL_TLLHDESC => 1, ThermalLabelFormatTableMap::COL_TLLHSRC => 2, ThermalLabelFormatTableMap::COL_TLLHPRTRMODL => 3, ThermalLabelFormatTableMap::COL_TLLHPRTRSPLR => 4, ThermalLabelFormatTableMap::COL_TLLHWIDTH => 5, ThermalLabelFormatTableMap::COL_TLLHLENGTH => 6, ThermalLabelFormatTableMap::COL_TLLHLOCK => 7, ThermalLabelFormatTableMap::COL_TLLHSORTBY => 8, ThermalLabelFormatTableMap::COL_TLLHTYPE => 9, ThermalLabelFormatTableMap::COL_DATEUPDTD => 10, ThermalLabelFormatTableMap::COL_TIMEUPDTD => 11, ThermalLabelFormatTableMap::COL_DUMMY => 12, ),
        self::TYPE_FIELDNAME     => array('TllhFormat' => 0, 'TllhDesc' => 1, 'TllhSrc' => 2, 'TllhPrtrModl' => 3, 'TllhPrtrSplr' => 4, 'TllhWidth' => 5, 'TllhLength' => 6, 'TllhLock' => 7, 'TllhSortBy' => 8, 'TllhType' => 9, 'DateUpdtd' => 10, 'TimeUpdtd' => 11, 'dummy' => 12, ),
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
        $this->setName('thermal_label_head');
        $this->setPhpName('ThermalLabelFormat');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ThermalLabelFormat');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('TllhFormat', 'Tllhformat', 'VARCHAR', true, 8, '');
        $this->addColumn('TllhDesc', 'Tllhdesc', 'VARCHAR', false, 50, null);
        $this->addColumn('TllhSrc', 'Tllhsrc', 'VARCHAR', false, 2, null);
        $this->addColumn('TllhPrtrModl', 'Tllhprtrmodl', 'VARCHAR', false, 10, null);
        $this->addColumn('TllhPrtrSplr', 'Tllhprtrsplr', 'VARCHAR', false, 12, null);
        $this->addColumn('TllhWidth', 'Tllhwidth', 'DECIMAL', false, 20, null);
        $this->addColumn('TllhLength', 'Tllhlength', 'DECIMAL', false, 20, null);
        $this->addColumn('TllhLock', 'Tllhlock', 'VARCHAR', false, 1, null);
        $this->addColumn('TllhSortBy', 'Tllhsortby', 'INTEGER', false, 1, null);
        $this->addColumn('TllhType', 'Tllhtype', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Tllhformat', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ThermalLabelFormatTableMap::CLASS_DEFAULT : ThermalLabelFormatTableMap::OM_CLASS;
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
     * @return array           (ThermalLabelFormat object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ThermalLabelFormatTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ThermalLabelFormatTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ThermalLabelFormatTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ThermalLabelFormatTableMap::OM_CLASS;
            /** @var ThermalLabelFormat $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ThermalLabelFormatTableMap::addInstanceToPool($obj, $key);
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
            $key = ThermalLabelFormatTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ThermalLabelFormatTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ThermalLabelFormat $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ThermalLabelFormatTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHFORMAT);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHDESC);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHSRC);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHPRTRMODL);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHPRTRSPLR);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHWIDTH);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHLENGTH);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHLOCK);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHSORTBY);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TLLHTYPE);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ThermalLabelFormatTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.TllhFormat');
            $criteria->addSelectColumn($alias . '.TllhDesc');
            $criteria->addSelectColumn($alias . '.TllhSrc');
            $criteria->addSelectColumn($alias . '.TllhPrtrModl');
            $criteria->addSelectColumn($alias . '.TllhPrtrSplr');
            $criteria->addSelectColumn($alias . '.TllhWidth');
            $criteria->addSelectColumn($alias . '.TllhLength');
            $criteria->addSelectColumn($alias . '.TllhLock');
            $criteria->addSelectColumn($alias . '.TllhSortBy');
            $criteria->addSelectColumn($alias . '.TllhType');
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
        return Propel::getServiceContainer()->getDatabaseMap(ThermalLabelFormatTableMap::DATABASE_NAME)->getTable(ThermalLabelFormatTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ThermalLabelFormatTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ThermalLabelFormatTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ThermalLabelFormatTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ThermalLabelFormat or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ThermalLabelFormat object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ThermalLabelFormatTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ThermalLabelFormat) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ThermalLabelFormatTableMap::DATABASE_NAME);
            $criteria->add(ThermalLabelFormatTableMap::COL_TLLHFORMAT, (array) $values, Criteria::IN);
        }

        $query = ThermalLabelFormatQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ThermalLabelFormatTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ThermalLabelFormatTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the thermal_label_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ThermalLabelFormatQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ThermalLabelFormat or Criteria object.
     *
     * @param mixed               $criteria Criteria or ThermalLabelFormat object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ThermalLabelFormatTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ThermalLabelFormat object
        }


        // Set the correct dbName
        $query = ThermalLabelFormatQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ThermalLabelFormatTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ThermalLabelFormatTableMap::buildTableMap();
