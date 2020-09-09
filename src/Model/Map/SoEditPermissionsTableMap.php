<?php

namespace Map;

use \SoEditPermissions;
use \SoEditPermissionsQuery;
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
 * This class defines the structure of the 'so_controls' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SoEditPermissionsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoEditPermissionsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_controls';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoEditPermissions';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoEditPermissions';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the OetbCperCode field
     */
    const COL_OETBCPERCODE = 'so_controls.OetbCperCode';

    /**
     * the column name for the OetbCperName field
     */
    const COL_OETBCPERNAME = 'so_controls.OetbCperName';

    /**
     * the column name for the OetbCperCanc field
     */
    const COL_OETBCPERCANC = 'so_controls.OetbCperCanc';

    /**
     * the column name for the OetbCperNew field
     */
    const COL_OETBCPERNEW = 'so_controls.OetbCperNew';

    /**
     * the column name for the OetbCperPick field
     */
    const COL_OETBCPERPICK = 'so_controls.OetbCperPick';

    /**
     * the column name for the OetbCperVer field
     */
    const COL_OETBCPERVER = 'so_controls.OetbCperVer';

    /**
     * the column name for the OetbCperInv field
     */
    const COL_OETBCPERINV = 'so_controls.OetbCperInv';

    /**
     * the column name for the OetbCperAdvcData field
     */
    const COL_OETBCPERADVCDATA = 'so_controls.OetbCperAdvcData';

    /**
     * the column name for the OetbCperPosAdmin field
     */
    const COL_OETBCPERPOSADMIN = 'so_controls.OetbCperPosAdmin';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_controls.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_controls.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_controls.dummy';

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
        self::TYPE_PHPNAME       => array('Oetbcpercode', 'Oetbcpername', 'Oetbcpercanc', 'Oetbcpernew', 'Oetbcperpick', 'Oetbcperver', 'Oetbcperinv', 'Oetbcperadvcdata', 'Oetbcperposadmin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oetbcpercode', 'oetbcpername', 'oetbcpercanc', 'oetbcpernew', 'oetbcperpick', 'oetbcperver', 'oetbcperinv', 'oetbcperadvcdata', 'oetbcperposadmin', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoEditPermissionsTableMap::COL_OETBCPERCODE, SoEditPermissionsTableMap::COL_OETBCPERNAME, SoEditPermissionsTableMap::COL_OETBCPERCANC, SoEditPermissionsTableMap::COL_OETBCPERNEW, SoEditPermissionsTableMap::COL_OETBCPERPICK, SoEditPermissionsTableMap::COL_OETBCPERVER, SoEditPermissionsTableMap::COL_OETBCPERINV, SoEditPermissionsTableMap::COL_OETBCPERADVCDATA, SoEditPermissionsTableMap::COL_OETBCPERPOSADMIN, SoEditPermissionsTableMap::COL_DATEUPDTD, SoEditPermissionsTableMap::COL_TIMEUPDTD, SoEditPermissionsTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OetbCperCode', 'OetbCperName', 'OetbCperCanc', 'OetbCperNew', 'OetbCperPick', 'OetbCperVer', 'OetbCperInv', 'OetbCperAdvcData', 'OetbCperPosAdmin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oetbcpercode' => 0, 'Oetbcpername' => 1, 'Oetbcpercanc' => 2, 'Oetbcpernew' => 3, 'Oetbcperpick' => 4, 'Oetbcperver' => 5, 'Oetbcperinv' => 6, 'Oetbcperadvcdata' => 7, 'Oetbcperposadmin' => 8, 'Dateupdtd' => 9, 'Timeupdtd' => 10, 'Dummy' => 11, ),
        self::TYPE_CAMELNAME     => array('oetbcpercode' => 0, 'oetbcpername' => 1, 'oetbcpercanc' => 2, 'oetbcpernew' => 3, 'oetbcperpick' => 4, 'oetbcperver' => 5, 'oetbcperinv' => 6, 'oetbcperadvcdata' => 7, 'oetbcperposadmin' => 8, 'dateupdtd' => 9, 'timeupdtd' => 10, 'dummy' => 11, ),
        self::TYPE_COLNAME       => array(SoEditPermissionsTableMap::COL_OETBCPERCODE => 0, SoEditPermissionsTableMap::COL_OETBCPERNAME => 1, SoEditPermissionsTableMap::COL_OETBCPERCANC => 2, SoEditPermissionsTableMap::COL_OETBCPERNEW => 3, SoEditPermissionsTableMap::COL_OETBCPERPICK => 4, SoEditPermissionsTableMap::COL_OETBCPERVER => 5, SoEditPermissionsTableMap::COL_OETBCPERINV => 6, SoEditPermissionsTableMap::COL_OETBCPERADVCDATA => 7, SoEditPermissionsTableMap::COL_OETBCPERPOSADMIN => 8, SoEditPermissionsTableMap::COL_DATEUPDTD => 9, SoEditPermissionsTableMap::COL_TIMEUPDTD => 10, SoEditPermissionsTableMap::COL_DUMMY => 11, ),
        self::TYPE_FIELDNAME     => array('OetbCperCode' => 0, 'OetbCperName' => 1, 'OetbCperCanc' => 2, 'OetbCperNew' => 3, 'OetbCperPick' => 4, 'OetbCperVer' => 5, 'OetbCperInv' => 6, 'OetbCperAdvcData' => 7, 'OetbCperPosAdmin' => 8, 'DateUpdtd' => 9, 'TimeUpdtd' => 10, 'dummy' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $this->setName('so_controls');
        $this->setPhpName('SoEditPermissions');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoEditPermissions');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OetbCperCode', 'Oetbcpercode', 'VARCHAR', true, 8, '');
        $this->addColumn('OetbCperName', 'Oetbcpername', 'VARCHAR', false, 20, null);
        $this->addColumn('OetbCperCanc', 'Oetbcpercanc', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbCperNew', 'Oetbcpernew', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbCperPick', 'Oetbcperpick', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbCperVer', 'Oetbcperver', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbCperInv', 'Oetbcperinv', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbCperAdvcData', 'Oetbcperadvcdata', 'VARCHAR', false, 1, null);
        $this->addColumn('OetbCperPosAdmin', 'Oetbcperposadmin', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oetbcpercode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SoEditPermissionsTableMap::CLASS_DEFAULT : SoEditPermissionsTableMap::OM_CLASS;
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
     * @return array           (SoEditPermissions object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoEditPermissionsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoEditPermissionsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoEditPermissionsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoEditPermissionsTableMap::OM_CLASS;
            /** @var SoEditPermissions $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoEditPermissionsTableMap::addInstanceToPool($obj, $key);
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
            $key = SoEditPermissionsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoEditPermissionsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoEditPermissions $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoEditPermissionsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERCODE);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERNAME);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERCANC);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERNEW);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERPICK);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERVER);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERINV);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERADVCDATA);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_OETBCPERPOSADMIN);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoEditPermissionsTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OetbCperCode');
            $criteria->addSelectColumn($alias . '.OetbCperName');
            $criteria->addSelectColumn($alias . '.OetbCperCanc');
            $criteria->addSelectColumn($alias . '.OetbCperNew');
            $criteria->addSelectColumn($alias . '.OetbCperPick');
            $criteria->addSelectColumn($alias . '.OetbCperVer');
            $criteria->addSelectColumn($alias . '.OetbCperInv');
            $criteria->addSelectColumn($alias . '.OetbCperAdvcData');
            $criteria->addSelectColumn($alias . '.OetbCperPosAdmin');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoEditPermissionsTableMap::DATABASE_NAME)->getTable(SoEditPermissionsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoEditPermissionsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoEditPermissionsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoEditPermissionsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoEditPermissions or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoEditPermissions object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoEditPermissionsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoEditPermissions) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoEditPermissionsTableMap::DATABASE_NAME);
            $criteria->add(SoEditPermissionsTableMap::COL_OETBCPERCODE, (array) $values, Criteria::IN);
        }

        $query = SoEditPermissionsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoEditPermissionsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoEditPermissionsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_controls table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoEditPermissionsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoEditPermissions or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoEditPermissions object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoEditPermissionsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoEditPermissions object
        }


        // Set the correct dbName
        $query = SoEditPermissionsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoEditPermissionsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoEditPermissionsTableMap::buildTableMap();
