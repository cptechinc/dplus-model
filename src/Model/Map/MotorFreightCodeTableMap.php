<?php

namespace Map;

use \MotorFreightCode;
use \MotorFreightCodeQuery;
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
 * This class defines the structure of the 'so_mfrt_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class MotorFreightCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.MotorFreightCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_mfrt_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\MotorFreightCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'MotorFreightCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the Oe2tbMfrtCode field
     */
    const COL_OE2TBMFRTCODE = 'so_mfrt_code.Oe2tbMfrtCode';

    /**
     * the column name for the Oe2tbMfrtClass field
     */
    const COL_OE2TBMFRTCLASS = 'so_mfrt_code.Oe2tbMfrtClass';

    /**
     * the column name for the Oe2tbMfrtDesc1 field
     */
    const COL_OE2TBMFRTDESC1 = 'so_mfrt_code.Oe2tbMfrtDesc1';

    /**
     * the column name for the Oe2tbMfrtDesc2 field
     */
    const COL_OE2TBMFRTDESC2 = 'so_mfrt_code.Oe2tbMfrtDesc2';

    /**
     * the column name for the Oe2tbMfrtDesc3 field
     */
    const COL_OE2TBMFRTDESC3 = 'so_mfrt_code.Oe2tbMfrtDesc3';

    /**
     * the column name for the Oe2tbMfrtDesc4 field
     */
    const COL_OE2TBMFRTDESC4 = 'so_mfrt_code.Oe2tbMfrtDesc4';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_mfrt_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_mfrt_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_mfrt_code.dummy';

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
        self::TYPE_PHPNAME       => array('Oe2tbmfrtcode', 'Oe2tbmfrtclass', 'Oe2tbmfrtdesc1', 'Oe2tbmfrtdesc2', 'Oe2tbmfrtdesc3', 'Oe2tbmfrtdesc4', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oe2tbmfrtcode', 'oe2tbmfrtclass', 'oe2tbmfrtdesc1', 'oe2tbmfrtdesc2', 'oe2tbmfrtdesc3', 'oe2tbmfrtdesc4', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4, MotorFreightCodeTableMap::COL_DATEUPDTD, MotorFreightCodeTableMap::COL_TIMEUPDTD, MotorFreightCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('Oe2tbMfrtCode', 'Oe2tbMfrtClass', 'Oe2tbMfrtDesc1', 'Oe2tbMfrtDesc2', 'Oe2tbMfrtDesc3', 'Oe2tbMfrtDesc4', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oe2tbmfrtcode' => 0, 'Oe2tbmfrtclass' => 1, 'Oe2tbmfrtdesc1' => 2, 'Oe2tbmfrtdesc2' => 3, 'Oe2tbmfrtdesc3' => 4, 'Oe2tbmfrtdesc4' => 5, 'Dateupdtd' => 6, 'Timeupdtd' => 7, 'Dummy' => 8, ),
        self::TYPE_CAMELNAME     => array('oe2tbmfrtcode' => 0, 'oe2tbmfrtclass' => 1, 'oe2tbmfrtdesc1' => 2, 'oe2tbmfrtdesc2' => 3, 'oe2tbmfrtdesc3' => 4, 'oe2tbmfrtdesc4' => 5, 'dateupdtd' => 6, 'timeupdtd' => 7, 'dummy' => 8, ),
        self::TYPE_COLNAME       => array(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE => 0, MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS => 1, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1 => 2, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2 => 3, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3 => 4, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4 => 5, MotorFreightCodeTableMap::COL_DATEUPDTD => 6, MotorFreightCodeTableMap::COL_TIMEUPDTD => 7, MotorFreightCodeTableMap::COL_DUMMY => 8, ),
        self::TYPE_FIELDNAME     => array('Oe2tbMfrtCode' => 0, 'Oe2tbMfrtClass' => 1, 'Oe2tbMfrtDesc1' => 2, 'Oe2tbMfrtDesc2' => 3, 'Oe2tbMfrtDesc3' => 4, 'Oe2tbMfrtDesc4' => 5, 'DateUpdtd' => 6, 'TimeUpdtd' => 7, 'dummy' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('so_mfrt_code');
        $this->setPhpName('MotorFreightCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\MotorFreightCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('Oe2tbMfrtCode', 'Oe2tbmfrtcode', 'VARCHAR', true, 20, '');
        $this->addColumn('Oe2tbMfrtClass', 'Oe2tbmfrtclass', 'VARCHAR', false, 4, null);
        $this->addColumn('Oe2tbMfrtDesc1', 'Oe2tbmfrtdesc1', 'VARCHAR', false, 50, null);
        $this->addColumn('Oe2tbMfrtDesc2', 'Oe2tbmfrtdesc2', 'VARCHAR', false, 50, null);
        $this->addColumn('Oe2tbMfrtDesc3', 'Oe2tbmfrtdesc3', 'VARCHAR', false, 50, null);
        $this->addColumn('Oe2tbMfrtDesc4', 'Oe2tbmfrtdesc4', 'VARCHAR', false, 50, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Oe2tbmfrtcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? MotorFreightCodeTableMap::CLASS_DEFAULT : MotorFreightCodeTableMap::OM_CLASS;
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
     * @return array           (MotorFreightCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = MotorFreightCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = MotorFreightCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + MotorFreightCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MotorFreightCodeTableMap::OM_CLASS;
            /** @var MotorFreightCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            MotorFreightCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = MotorFreightCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = MotorFreightCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var MotorFreightCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MotorFreightCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(MotorFreightCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.Oe2tbMfrtCode');
            $criteria->addSelectColumn($alias . '.Oe2tbMfrtClass');
            $criteria->addSelectColumn($alias . '.Oe2tbMfrtDesc1');
            $criteria->addSelectColumn($alias . '.Oe2tbMfrtDesc2');
            $criteria->addSelectColumn($alias . '.Oe2tbMfrtDesc3');
            $criteria->addSelectColumn($alias . '.Oe2tbMfrtDesc4');
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
        return Propel::getServiceContainer()->getDatabaseMap(MotorFreightCodeTableMap::DATABASE_NAME)->getTable(MotorFreightCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(MotorFreightCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(MotorFreightCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new MotorFreightCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a MotorFreightCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or MotorFreightCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(MotorFreightCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \MotorFreightCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MotorFreightCodeTableMap::DATABASE_NAME);
            $criteria->add(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, (array) $values, Criteria::IN);
        }

        $query = MotorFreightCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            MotorFreightCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                MotorFreightCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_mfrt_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return MotorFreightCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a MotorFreightCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or MotorFreightCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MotorFreightCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from MotorFreightCode object
        }


        // Set the correct dbName
        $query = MotorFreightCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // MotorFreightCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
MotorFreightCodeTableMap::buildTableMap();
