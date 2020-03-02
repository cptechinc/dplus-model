<?php

namespace Map;

use \InventoryAdjustmentReason;
use \InventoryAdjustmentReasonQuery;
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
 * This class defines the structure of the 'inv_iarn_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InventoryAdjustmentReasonTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InventoryAdjustmentReasonTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_iarn_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InventoryAdjustmentReason';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InventoryAdjustmentReason';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the IntbIarnCode field
     */
    const COL_INTBIARNCODE = 'inv_iarn_code.IntbIarnCode';

    /**
     * the column name for the IntbIarnDesc field
     */
    const COL_INTBIARNDESC = 'inv_iarn_code.IntbIarnDesc';

    /**
     * the column name for the IntbIarnSysDefined field
     */
    const COL_INTBIARNSYSDEFINED = 'inv_iarn_code.IntbIarnSysDefined';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_iarn_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_iarn_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_iarn_code.dummy';

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
        self::TYPE_PHPNAME       => array('Intbiarncode', 'Intbiarndesc', 'Intbiarnsysdefined', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbiarncode', 'intbiarndesc', 'intbiarnsysdefined', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InventoryAdjustmentReasonTableMap::COL_INTBIARNCODE, InventoryAdjustmentReasonTableMap::COL_INTBIARNDESC, InventoryAdjustmentReasonTableMap::COL_INTBIARNSYSDEFINED, InventoryAdjustmentReasonTableMap::COL_DATEUPDTD, InventoryAdjustmentReasonTableMap::COL_TIMEUPDTD, InventoryAdjustmentReasonTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbIarnCode', 'IntbIarnDesc', 'IntbIarnSysDefined', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbiarncode' => 0, 'Intbiarndesc' => 1, 'Intbiarnsysdefined' => 2, 'Dateupdtd' => 3, 'Timeupdtd' => 4, 'Dummy' => 5, ),
        self::TYPE_CAMELNAME     => array('intbiarncode' => 0, 'intbiarndesc' => 1, 'intbiarnsysdefined' => 2, 'dateupdtd' => 3, 'timeupdtd' => 4, 'dummy' => 5, ),
        self::TYPE_COLNAME       => array(InventoryAdjustmentReasonTableMap::COL_INTBIARNCODE => 0, InventoryAdjustmentReasonTableMap::COL_INTBIARNDESC => 1, InventoryAdjustmentReasonTableMap::COL_INTBIARNSYSDEFINED => 2, InventoryAdjustmentReasonTableMap::COL_DATEUPDTD => 3, InventoryAdjustmentReasonTableMap::COL_TIMEUPDTD => 4, InventoryAdjustmentReasonTableMap::COL_DUMMY => 5, ),
        self::TYPE_FIELDNAME     => array('IntbIarnCode' => 0, 'IntbIarnDesc' => 1, 'IntbIarnSysDefined' => 2, 'DateUpdtd' => 3, 'TimeUpdtd' => 4, 'dummy' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
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
        $this->setName('inv_iarn_code');
        $this->setPhpName('InventoryAdjustmentReason');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InventoryAdjustmentReason');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbIarnCode', 'Intbiarncode', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbIarnDesc', 'Intbiarndesc', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbIarnSysDefined', 'Intbiarnsysdefined', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbiarncode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InventoryAdjustmentReasonTableMap::CLASS_DEFAULT : InventoryAdjustmentReasonTableMap::OM_CLASS;
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
     * @return array           (InventoryAdjustmentReason object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InventoryAdjustmentReasonTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InventoryAdjustmentReasonTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InventoryAdjustmentReasonTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InventoryAdjustmentReasonTableMap::OM_CLASS;
            /** @var InventoryAdjustmentReason $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InventoryAdjustmentReasonTableMap::addInstanceToPool($obj, $key);
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
            $key = InventoryAdjustmentReasonTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InventoryAdjustmentReasonTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InventoryAdjustmentReason $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InventoryAdjustmentReasonTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InventoryAdjustmentReasonTableMap::COL_INTBIARNCODE);
            $criteria->addSelectColumn(InventoryAdjustmentReasonTableMap::COL_INTBIARNDESC);
            $criteria->addSelectColumn(InventoryAdjustmentReasonTableMap::COL_INTBIARNSYSDEFINED);
            $criteria->addSelectColumn(InventoryAdjustmentReasonTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InventoryAdjustmentReasonTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InventoryAdjustmentReasonTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbIarnCode');
            $criteria->addSelectColumn($alias . '.IntbIarnDesc');
            $criteria->addSelectColumn($alias . '.IntbIarnSysDefined');
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
        return Propel::getServiceContainer()->getDatabaseMap(InventoryAdjustmentReasonTableMap::DATABASE_NAME)->getTable(InventoryAdjustmentReasonTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InventoryAdjustmentReasonTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InventoryAdjustmentReasonTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InventoryAdjustmentReasonTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InventoryAdjustmentReason or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InventoryAdjustmentReason object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InventoryAdjustmentReasonTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InventoryAdjustmentReason) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InventoryAdjustmentReasonTableMap::DATABASE_NAME);
            $criteria->add(InventoryAdjustmentReasonTableMap::COL_INTBIARNCODE, (array) $values, Criteria::IN);
        }

        $query = InventoryAdjustmentReasonQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InventoryAdjustmentReasonTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InventoryAdjustmentReasonTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_iarn_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InventoryAdjustmentReasonQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InventoryAdjustmentReason or Criteria object.
     *
     * @param mixed               $criteria Criteria or InventoryAdjustmentReason object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InventoryAdjustmentReasonTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InventoryAdjustmentReason object
        }


        // Set the correct dbName
        $query = InventoryAdjustmentReasonQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InventoryAdjustmentReasonTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InventoryAdjustmentReasonTableMap::buildTableMap();
