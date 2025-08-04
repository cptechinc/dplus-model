<?php

namespace Map;

use \InvOptCode;
use \InvOptCodeQuery;
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
 * This class defines the structure of the 'inv_opt_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvOptCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvOptCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_opt_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvOptCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvOptCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvOptCode';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'inv_opt_code.InitItemNbr';

    /**
     * the column name for the InoptCode field
     */
    public const COL_INOPTCODE = 'inv_opt_code.InoptCode';

    /**
     * the column name for the InoptCodeDesc field
     */
    public const COL_INOPTCODEDESC = 'inv_opt_code.InoptCodeDesc';

    /**
     * the column name for the InoptValue field
     */
    public const COL_INOPTVALUE = 'inv_opt_code.InoptValue';

    /**
     * the column name for the InoptValueDesc field
     */
    public const COL_INOPTVALUEDESC = 'inv_opt_code.InoptValueDesc';

    /**
     * the column name for the InoptValueDesc2 field
     */
    public const COL_INOPTVALUEDESC2 = 'inv_opt_code.InoptValueDesc2';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_opt_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_opt_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_opt_code.dummy';

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
        self::TYPE_PHPNAME       => ['Inititemnbr', 'Inoptcode', 'Inoptcodedesc', 'Inoptvalue', 'Inoptvaluedesc', 'Inoptvaluedesc2', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inititemnbr', 'inoptcode', 'inoptcodedesc', 'inoptvalue', 'inoptvaluedesc', 'inoptvaluedesc2', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvOptCodeTableMap::COL_INITITEMNBR, InvOptCodeTableMap::COL_INOPTCODE, InvOptCodeTableMap::COL_INOPTCODEDESC, InvOptCodeTableMap::COL_INOPTVALUE, InvOptCodeTableMap::COL_INOPTVALUEDESC, InvOptCodeTableMap::COL_INOPTVALUEDESC2, InvOptCodeTableMap::COL_DATEUPDTD, InvOptCodeTableMap::COL_TIMEUPDTD, InvOptCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InitItemNbr', 'InoptCode', 'InoptCodeDesc', 'InoptValue', 'InoptValueDesc', 'InoptValueDesc2', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, ]
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
        self::TYPE_PHPNAME       => ['Inititemnbr' => 0, 'Inoptcode' => 1, 'Inoptcodedesc' => 2, 'Inoptvalue' => 3, 'Inoptvaluedesc' => 4, 'Inoptvaluedesc2' => 5, 'Dateupdtd' => 6, 'Timeupdtd' => 7, 'Dummy' => 8, ],
        self::TYPE_CAMELNAME     => ['inititemnbr' => 0, 'inoptcode' => 1, 'inoptcodedesc' => 2, 'inoptvalue' => 3, 'inoptvaluedesc' => 4, 'inoptvaluedesc2' => 5, 'dateupdtd' => 6, 'timeupdtd' => 7, 'dummy' => 8, ],
        self::TYPE_COLNAME       => [InvOptCodeTableMap::COL_INITITEMNBR => 0, InvOptCodeTableMap::COL_INOPTCODE => 1, InvOptCodeTableMap::COL_INOPTCODEDESC => 2, InvOptCodeTableMap::COL_INOPTVALUE => 3, InvOptCodeTableMap::COL_INOPTVALUEDESC => 4, InvOptCodeTableMap::COL_INOPTVALUEDESC2 => 5, InvOptCodeTableMap::COL_DATEUPDTD => 6, InvOptCodeTableMap::COL_TIMEUPDTD => 7, InvOptCodeTableMap::COL_DUMMY => 8, ],
        self::TYPE_FIELDNAME     => ['InitItemNbr' => 0, 'InoptCode' => 1, 'InoptCodeDesc' => 2, 'InoptValue' => 3, 'InoptValueDesc' => 4, 'InoptValueDesc2' => 5, 'DateUpdtd' => 6, 'TimeUpdtd' => 7, 'dummy' => 8, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inititemnbr' => 'INITITEMNBR',
        'InvOptCode.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'invOptCode.inititemnbr' => 'INITITEMNBR',
        'InvOptCodeTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'inv_opt_code.InitItemNbr' => 'INITITEMNBR',
        'Inoptcode' => 'INOPTCODE',
        'InvOptCode.Inoptcode' => 'INOPTCODE',
        'inoptcode' => 'INOPTCODE',
        'invOptCode.inoptcode' => 'INOPTCODE',
        'InvOptCodeTableMap::COL_INOPTCODE' => 'INOPTCODE',
        'COL_INOPTCODE' => 'INOPTCODE',
        'InoptCode' => 'INOPTCODE',
        'inv_opt_code.InoptCode' => 'INOPTCODE',
        'Inoptcodedesc' => 'INOPTCODEDESC',
        'InvOptCode.Inoptcodedesc' => 'INOPTCODEDESC',
        'inoptcodedesc' => 'INOPTCODEDESC',
        'invOptCode.inoptcodedesc' => 'INOPTCODEDESC',
        'InvOptCodeTableMap::COL_INOPTCODEDESC' => 'INOPTCODEDESC',
        'COL_INOPTCODEDESC' => 'INOPTCODEDESC',
        'InoptCodeDesc' => 'INOPTCODEDESC',
        'inv_opt_code.InoptCodeDesc' => 'INOPTCODEDESC',
        'Inoptvalue' => 'INOPTVALUE',
        'InvOptCode.Inoptvalue' => 'INOPTVALUE',
        'inoptvalue' => 'INOPTVALUE',
        'invOptCode.inoptvalue' => 'INOPTVALUE',
        'InvOptCodeTableMap::COL_INOPTVALUE' => 'INOPTVALUE',
        'COL_INOPTVALUE' => 'INOPTVALUE',
        'InoptValue' => 'INOPTVALUE',
        'inv_opt_code.InoptValue' => 'INOPTVALUE',
        'Inoptvaluedesc' => 'INOPTVALUEDESC',
        'InvOptCode.Inoptvaluedesc' => 'INOPTVALUEDESC',
        'inoptvaluedesc' => 'INOPTVALUEDESC',
        'invOptCode.inoptvaluedesc' => 'INOPTVALUEDESC',
        'InvOptCodeTableMap::COL_INOPTVALUEDESC' => 'INOPTVALUEDESC',
        'COL_INOPTVALUEDESC' => 'INOPTVALUEDESC',
        'InoptValueDesc' => 'INOPTVALUEDESC',
        'inv_opt_code.InoptValueDesc' => 'INOPTVALUEDESC',
        'Inoptvaluedesc2' => 'INOPTVALUEDESC2',
        'InvOptCode.Inoptvaluedesc2' => 'INOPTVALUEDESC2',
        'inoptvaluedesc2' => 'INOPTVALUEDESC2',
        'invOptCode.inoptvaluedesc2' => 'INOPTVALUEDESC2',
        'InvOptCodeTableMap::COL_INOPTVALUEDESC2' => 'INOPTVALUEDESC2',
        'COL_INOPTVALUEDESC2' => 'INOPTVALUEDESC2',
        'InoptValueDesc2' => 'INOPTVALUEDESC2',
        'inv_opt_code.InoptValueDesc2' => 'INOPTVALUEDESC2',
        'Dateupdtd' => 'DATEUPDTD',
        'InvOptCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invOptCode.dateupdtd' => 'DATEUPDTD',
        'InvOptCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_opt_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvOptCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invOptCode.timeupdtd' => 'TIMEUPDTD',
        'InvOptCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_opt_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvOptCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invOptCode.dummy' => 'DUMMY',
        'InvOptCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_opt_code.dummy' => 'DUMMY',
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
        $this->setName('inv_opt_code');
        $this->setPhpName('InvOptCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvOptCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('InoptCode', 'Inoptcode', 'VARCHAR', true, 8, '');
        $this->addColumn('InoptCodeDesc', 'Inoptcodedesc', 'VARCHAR', false, 30, null);
        $this->addColumn('InoptValue', 'Inoptvalue', 'VARCHAR', false, 30, null);
        $this->addColumn('InoptValueDesc', 'Inoptvaluedesc', 'VARCHAR', false, 30, null);
        $this->addColumn('InoptValueDesc2', 'Inoptvaluedesc2', 'VARCHAR', false, 30, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \InvOptCode $obj A \InvOptCode object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(InvOptCode $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getInoptcode() || is_scalar($obj->getInoptcode()) || is_callable([$obj->getInoptcode(), '__toString']) ? (string) $obj->getInoptcode() : $obj->getInoptcode())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \InvOptCode object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvOptCode) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getInoptcode() || is_scalar($value->getInoptcode()) || is_callable([$value->getInoptcode(), '__toString']) ? (string) $value->getInoptcode() : $value->getInoptcode())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvOptCode object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Inoptcode', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? InvOptCodeTableMap::CLASS_DEFAULT : InvOptCodeTableMap::OM_CLASS;
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
     * @return array (InvOptCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvOptCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvOptCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvOptCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvOptCodeTableMap::OM_CLASS;
            /** @var InvOptCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvOptCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = InvOptCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvOptCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvOptCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvOptCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_INOPTCODE);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_INOPTCODEDESC);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_INOPTVALUE);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_INOPTVALUEDESC);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_INOPTVALUEDESC2);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvOptCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InoptCode');
            $criteria->addSelectColumn($alias . '.InoptCodeDesc');
            $criteria->addSelectColumn($alias . '.InoptValue');
            $criteria->addSelectColumn($alias . '.InoptValueDesc');
            $criteria->addSelectColumn($alias . '.InoptValueDesc2');
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
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_INOPTCODE);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_INOPTCODEDESC);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_INOPTVALUE);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_INOPTVALUEDESC);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_INOPTVALUEDESC2);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvOptCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.InoptCode');
            $criteria->removeSelectColumn($alias . '.InoptCodeDesc');
            $criteria->removeSelectColumn($alias . '.InoptValue');
            $criteria->removeSelectColumn($alias . '.InoptValueDesc');
            $criteria->removeSelectColumn($alias . '.InoptValueDesc2');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvOptCodeTableMap::DATABASE_NAME)->getTable(InvOptCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvOptCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvOptCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvOptCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvOptCodeTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvOptCodeTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvOptCodeTableMap::COL_INOPTCODE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvOptCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvOptCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvOptCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_opt_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvOptCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvOptCode or Criteria object.
     *
     * @param mixed $criteria Criteria or InvOptCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvOptCode object
        }


        // Set the correct dbName
        $query = InvOptCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
