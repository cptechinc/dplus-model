<?php

namespace Map;

use \ApBuyer;
use \ApBuyerQuery;
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
 * This class defines the structure of the 'ap_buyr_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ApBuyerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ApBuyerTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ap_buyr_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ApBuyer';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ApBuyer';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ApBuyer';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the AptbBuyrCode field
     */
    public const COL_APTBBUYRCODE = 'ap_buyr_code.AptbBuyrCode';

    /**
     * the column name for the AptbBuyrDesc field
     */
    public const COL_APTBBUYRDESC = 'ap_buyr_code.AptbBuyrDesc';

    /**
     * the column name for the AptbBuyrEmail field
     */
    public const COL_APTBBUYREMAIL = 'ap_buyr_code.AptbBuyrEmail';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ap_buyr_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ap_buyr_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ap_buyr_code.dummy';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Aptbbuyrcode', 'Aptbbuyrdesc', 'Aptbbuyremail', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['aptbbuyrcode', 'aptbbuyrdesc', 'aptbbuyremail', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ApBuyerTableMap::COL_APTBBUYRCODE, ApBuyerTableMap::COL_APTBBUYRDESC, ApBuyerTableMap::COL_APTBBUYREMAIL, ApBuyerTableMap::COL_DATEUPDTD, ApBuyerTableMap::COL_TIMEUPDTD, ApBuyerTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['AptbBuyrCode', 'AptbBuyrDesc', 'AptbBuyrEmail', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Aptbbuyrcode' => 0, 'Aptbbuyrdesc' => 1, 'Aptbbuyremail' => 2, 'Dateupdtd' => 3, 'Timeupdtd' => 4, 'Dummy' => 5, ],
        self::TYPE_CAMELNAME     => ['aptbbuyrcode' => 0, 'aptbbuyrdesc' => 1, 'aptbbuyremail' => 2, 'dateupdtd' => 3, 'timeupdtd' => 4, 'dummy' => 5, ],
        self::TYPE_COLNAME       => [ApBuyerTableMap::COL_APTBBUYRCODE => 0, ApBuyerTableMap::COL_APTBBUYRDESC => 1, ApBuyerTableMap::COL_APTBBUYREMAIL => 2, ApBuyerTableMap::COL_DATEUPDTD => 3, ApBuyerTableMap::COL_TIMEUPDTD => 4, ApBuyerTableMap::COL_DUMMY => 5, ],
        self::TYPE_FIELDNAME     => ['AptbBuyrCode' => 0, 'AptbBuyrDesc' => 1, 'AptbBuyrEmail' => 2, 'DateUpdtd' => 3, 'TimeUpdtd' => 4, 'dummy' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Aptbbuyrcode' => 'APTBBUYRCODE',
        'ApBuyer.Aptbbuyrcode' => 'APTBBUYRCODE',
        'aptbbuyrcode' => 'APTBBUYRCODE',
        'apBuyer.aptbbuyrcode' => 'APTBBUYRCODE',
        'ApBuyerTableMap::COL_APTBBUYRCODE' => 'APTBBUYRCODE',
        'COL_APTBBUYRCODE' => 'APTBBUYRCODE',
        'AptbBuyrCode' => 'APTBBUYRCODE',
        'ap_buyr_code.AptbBuyrCode' => 'APTBBUYRCODE',
        'Aptbbuyrdesc' => 'APTBBUYRDESC',
        'ApBuyer.Aptbbuyrdesc' => 'APTBBUYRDESC',
        'aptbbuyrdesc' => 'APTBBUYRDESC',
        'apBuyer.aptbbuyrdesc' => 'APTBBUYRDESC',
        'ApBuyerTableMap::COL_APTBBUYRDESC' => 'APTBBUYRDESC',
        'COL_APTBBUYRDESC' => 'APTBBUYRDESC',
        'AptbBuyrDesc' => 'APTBBUYRDESC',
        'ap_buyr_code.AptbBuyrDesc' => 'APTBBUYRDESC',
        'Aptbbuyremail' => 'APTBBUYREMAIL',
        'ApBuyer.Aptbbuyremail' => 'APTBBUYREMAIL',
        'aptbbuyremail' => 'APTBBUYREMAIL',
        'apBuyer.aptbbuyremail' => 'APTBBUYREMAIL',
        'ApBuyerTableMap::COL_APTBBUYREMAIL' => 'APTBBUYREMAIL',
        'COL_APTBBUYREMAIL' => 'APTBBUYREMAIL',
        'AptbBuyrEmail' => 'APTBBUYREMAIL',
        'ap_buyr_code.AptbBuyrEmail' => 'APTBBUYREMAIL',
        'Dateupdtd' => 'DATEUPDTD',
        'ApBuyer.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'apBuyer.dateupdtd' => 'DATEUPDTD',
        'ApBuyerTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ap_buyr_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ApBuyer.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'apBuyer.timeupdtd' => 'TIMEUPDTD',
        'ApBuyerTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ap_buyr_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ApBuyer.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'apBuyer.dummy' => 'DUMMY',
        'ApBuyerTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ap_buyr_code.dummy' => 'DUMMY',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('ap_buyr_code');
        $this->setPhpName('ApBuyer');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApBuyer');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('AptbBuyrCode', 'Aptbbuyrcode', 'VARCHAR', true, 8, '');
        $this->addColumn('AptbBuyrDesc', 'Aptbbuyrdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('AptbBuyrEmail', 'Aptbbuyremail', 'VARCHAR', false, 50, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('Vendor', '\\Vendor', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':ApveBuyrCode1',
    1 => ':AptbBuyrCode',
  ),
), null, null, 'Vendors', false);
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? ApBuyerTableMap::CLASS_DEFAULT : ApBuyerTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (ApBuyer object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ApBuyerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApBuyerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApBuyerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApBuyerTableMap::OM_CLASS;
            /** @var ApBuyer $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApBuyerTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = ApBuyerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApBuyerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApBuyer $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApBuyerTableMap::addInstanceToPool($obj, $key);
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
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ApBuyerTableMap::COL_APTBBUYRCODE);
            $criteria->addSelectColumn(ApBuyerTableMap::COL_APTBBUYRDESC);
            $criteria->addSelectColumn(ApBuyerTableMap::COL_APTBBUYREMAIL);
            $criteria->addSelectColumn(ApBuyerTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ApBuyerTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ApBuyerTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.AptbBuyrCode');
            $criteria->addSelectColumn($alias . '.AptbBuyrDesc');
            $criteria->addSelectColumn($alias . '.AptbBuyrEmail');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(ApBuyerTableMap::COL_APTBBUYRCODE);
            $criteria->removeSelectColumn(ApBuyerTableMap::COL_APTBBUYRDESC);
            $criteria->removeSelectColumn(ApBuyerTableMap::COL_APTBBUYREMAIL);
            $criteria->removeSelectColumn(ApBuyerTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ApBuyerTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ApBuyerTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.AptbBuyrCode');
            $criteria->removeSelectColumn($alias . '.AptbBuyrDesc');
            $criteria->removeSelectColumn($alias . '.AptbBuyrEmail');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.TimeUpdtd');
            $criteria->removeSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(ApBuyerTableMap::DATABASE_NAME)->getTable(ApBuyerTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ApBuyer or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ApBuyer object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApBuyerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApBuyer) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApBuyerTableMap::DATABASE_NAME);
            $criteria->add(ApBuyerTableMap::COL_APTBBUYRCODE, (array) $values, Criteria::IN);
        }

        $query = ApBuyerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApBuyerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApBuyerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_buyr_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ApBuyerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApBuyer or Criteria object.
     *
     * @param mixed $criteria Criteria or ApBuyer object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApBuyerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApBuyer object
        }


        // Set the correct dbName
        $query = ApBuyerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
