<?php

namespace Map;

use \GlTextCode;
use \GlTextCodeQuery;
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
 * This class defines the structure of the 'gl_text_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class GlTextCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.GlTextCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'gl_text_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'GlTextCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\GlTextCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'GlTextCode';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the GltbTextCode field
     */
    public const COL_GLTBTEXTCODE = 'gl_text_code.GltbTextCode';

    /**
     * the column name for the GltbText1 field
     */
    public const COL_GLTBTEXT1 = 'gl_text_code.GltbText1';

    /**
     * the column name for the GltbText2 field
     */
    public const COL_GLTBTEXT2 = 'gl_text_code.GltbText2';

    /**
     * the column name for the GltbText3 field
     */
    public const COL_GLTBTEXT3 = 'gl_text_code.GltbText3';

    /**
     * the column name for the GltbText4 field
     */
    public const COL_GLTBTEXT4 = 'gl_text_code.GltbText4';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'gl_text_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'gl_text_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'gl_text_code.dummy';

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
        self::TYPE_PHPNAME       => ['Gltbtextcode', 'Gltbtext1', 'Gltbtext2', 'Gltbtext3', 'Gltbtext4', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['gltbtextcode', 'gltbtext1', 'gltbtext2', 'gltbtext3', 'gltbtext4', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [GlTextCodeTableMap::COL_GLTBTEXTCODE, GlTextCodeTableMap::COL_GLTBTEXT1, GlTextCodeTableMap::COL_GLTBTEXT2, GlTextCodeTableMap::COL_GLTBTEXT3, GlTextCodeTableMap::COL_GLTBTEXT4, GlTextCodeTableMap::COL_DATEUPDTD, GlTextCodeTableMap::COL_TIMEUPDTD, GlTextCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['GltbTextCode', 'GltbText1', 'GltbText2', 'GltbText3', 'GltbText4', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, ]
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
        self::TYPE_PHPNAME       => ['Gltbtextcode' => 0, 'Gltbtext1' => 1, 'Gltbtext2' => 2, 'Gltbtext3' => 3, 'Gltbtext4' => 4, 'Dateupdtd' => 5, 'Timeupdtd' => 6, 'Dummy' => 7, ],
        self::TYPE_CAMELNAME     => ['gltbtextcode' => 0, 'gltbtext1' => 1, 'gltbtext2' => 2, 'gltbtext3' => 3, 'gltbtext4' => 4, 'dateupdtd' => 5, 'timeupdtd' => 6, 'dummy' => 7, ],
        self::TYPE_COLNAME       => [GlTextCodeTableMap::COL_GLTBTEXTCODE => 0, GlTextCodeTableMap::COL_GLTBTEXT1 => 1, GlTextCodeTableMap::COL_GLTBTEXT2 => 2, GlTextCodeTableMap::COL_GLTBTEXT3 => 3, GlTextCodeTableMap::COL_GLTBTEXT4 => 4, GlTextCodeTableMap::COL_DATEUPDTD => 5, GlTextCodeTableMap::COL_TIMEUPDTD => 6, GlTextCodeTableMap::COL_DUMMY => 7, ],
        self::TYPE_FIELDNAME     => ['GltbTextCode' => 0, 'GltbText1' => 1, 'GltbText2' => 2, 'GltbText3' => 3, 'GltbText4' => 4, 'DateUpdtd' => 5, 'TimeUpdtd' => 6, 'dummy' => 7, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Gltbtextcode' => 'GLTBTEXTCODE',
        'GlTextCode.Gltbtextcode' => 'GLTBTEXTCODE',
        'gltbtextcode' => 'GLTBTEXTCODE',
        'glTextCode.gltbtextcode' => 'GLTBTEXTCODE',
        'GlTextCodeTableMap::COL_GLTBTEXTCODE' => 'GLTBTEXTCODE',
        'COL_GLTBTEXTCODE' => 'GLTBTEXTCODE',
        'GltbTextCode' => 'GLTBTEXTCODE',
        'gl_text_code.GltbTextCode' => 'GLTBTEXTCODE',
        'Gltbtext1' => 'GLTBTEXT1',
        'GlTextCode.Gltbtext1' => 'GLTBTEXT1',
        'gltbtext1' => 'GLTBTEXT1',
        'glTextCode.gltbtext1' => 'GLTBTEXT1',
        'GlTextCodeTableMap::COL_GLTBTEXT1' => 'GLTBTEXT1',
        'COL_GLTBTEXT1' => 'GLTBTEXT1',
        'GltbText1' => 'GLTBTEXT1',
        'gl_text_code.GltbText1' => 'GLTBTEXT1',
        'Gltbtext2' => 'GLTBTEXT2',
        'GlTextCode.Gltbtext2' => 'GLTBTEXT2',
        'gltbtext2' => 'GLTBTEXT2',
        'glTextCode.gltbtext2' => 'GLTBTEXT2',
        'GlTextCodeTableMap::COL_GLTBTEXT2' => 'GLTBTEXT2',
        'COL_GLTBTEXT2' => 'GLTBTEXT2',
        'GltbText2' => 'GLTBTEXT2',
        'gl_text_code.GltbText2' => 'GLTBTEXT2',
        'Gltbtext3' => 'GLTBTEXT3',
        'GlTextCode.Gltbtext3' => 'GLTBTEXT3',
        'gltbtext3' => 'GLTBTEXT3',
        'glTextCode.gltbtext3' => 'GLTBTEXT3',
        'GlTextCodeTableMap::COL_GLTBTEXT3' => 'GLTBTEXT3',
        'COL_GLTBTEXT3' => 'GLTBTEXT3',
        'GltbText3' => 'GLTBTEXT3',
        'gl_text_code.GltbText3' => 'GLTBTEXT3',
        'Gltbtext4' => 'GLTBTEXT4',
        'GlTextCode.Gltbtext4' => 'GLTBTEXT4',
        'gltbtext4' => 'GLTBTEXT4',
        'glTextCode.gltbtext4' => 'GLTBTEXT4',
        'GlTextCodeTableMap::COL_GLTBTEXT4' => 'GLTBTEXT4',
        'COL_GLTBTEXT4' => 'GLTBTEXT4',
        'GltbText4' => 'GLTBTEXT4',
        'gl_text_code.GltbText4' => 'GLTBTEXT4',
        'Dateupdtd' => 'DATEUPDTD',
        'GlTextCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'glTextCode.dateupdtd' => 'DATEUPDTD',
        'GlTextCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'gl_text_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'GlTextCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'glTextCode.timeupdtd' => 'TIMEUPDTD',
        'GlTextCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'gl_text_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'GlTextCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'glTextCode.dummy' => 'DUMMY',
        'GlTextCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'gl_text_code.dummy' => 'DUMMY',
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
        $this->setName('gl_text_code');
        $this->setPhpName('GlTextCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\GlTextCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('GltbTextCode', 'Gltbtextcode', 'VARCHAR', true, 10, '');
        $this->addColumn('GltbText1', 'Gltbtext1', 'VARCHAR', false, 35, null);
        $this->addColumn('GltbText2', 'Gltbtext2', 'VARCHAR', false, 35, null);
        $this->addColumn('GltbText3', 'Gltbtext3', 'VARCHAR', false, 35, null);
        $this->addColumn('GltbText4', 'Gltbtext4', 'VARCHAR', false, 35, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Gltbtextcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? GlTextCodeTableMap::CLASS_DEFAULT : GlTextCodeTableMap::OM_CLASS;
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
     * @return array (GlTextCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = GlTextCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = GlTextCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + GlTextCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GlTextCodeTableMap::OM_CLASS;
            /** @var GlTextCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            GlTextCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = GlTextCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = GlTextCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var GlTextCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GlTextCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_GLTBTEXTCODE);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT1);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT2);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT3);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT4);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(GlTextCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.GltbTextCode');
            $criteria->addSelectColumn($alias . '.GltbText1');
            $criteria->addSelectColumn($alias . '.GltbText2');
            $criteria->addSelectColumn($alias . '.GltbText3');
            $criteria->addSelectColumn($alias . '.GltbText4');
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
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_GLTBTEXTCODE);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT1);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT2);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT3);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_GLTBTEXT4);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(GlTextCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.GltbTextCode');
            $criteria->removeSelectColumn($alias . '.GltbText1');
            $criteria->removeSelectColumn($alias . '.GltbText2');
            $criteria->removeSelectColumn($alias . '.GltbText3');
            $criteria->removeSelectColumn($alias . '.GltbText4');
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
        return Propel::getServiceContainer()->getDatabaseMap(GlTextCodeTableMap::DATABASE_NAME)->getTable(GlTextCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a GlTextCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or GlTextCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlTextCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \GlTextCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GlTextCodeTableMap::DATABASE_NAME);
            $criteria->add(GlTextCodeTableMap::COL_GLTBTEXTCODE, (array) $values, Criteria::IN);
        }

        $query = GlTextCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            GlTextCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                GlTextCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the gl_text_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return GlTextCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a GlTextCode or Criteria object.
     *
     * @param mixed $criteria Criteria or GlTextCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlTextCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from GlTextCode object
        }


        // Set the correct dbName
        $query = GlTextCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
