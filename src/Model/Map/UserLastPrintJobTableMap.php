<?php

namespace Map;

use \UserLastPrintJob;
use \UserLastPrintJobQuery;
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
 * This class defines the structure of the 'user_printer' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class UserLastPrintJobTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.UserLastPrintJobTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'user_printer';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'UserLastPrintJob';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\UserLastPrintJob';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'UserLastPrintJob';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the UsprFunction field
     */
    public const COL_USPRFUNCTION = 'user_printer.UsprFunction';

    /**
     * the column name for the UsrcId field
     */
    public const COL_USRCID = 'user_printer.UsrcId';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'user_printer.IntbWhse';

    /**
     * the column name for the UsprPrinter field
     */
    public const COL_USPRPRINTER = 'user_printer.UsprPrinter';

    /**
     * the column name for the UsprLabel field
     */
    public const COL_USPRLABEL = 'user_printer.UsprLabel';

    /**
     * the column name for the UsprLabel2 field
     */
    public const COL_USPRLABEL2 = 'user_printer.UsprLabel2';

    /**
     * the column name for the UsprLabelQty field
     */
    public const COL_USPRLABELQTY = 'user_printer.UsprLabelQty';

    /**
     * the column name for the UsprOrdrNbr field
     */
    public const COL_USPRORDRNBR = 'user_printer.UsprOrdrNbr';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'user_printer.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'user_printer.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'user_printer.dummy';

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
        self::TYPE_PHPNAME       => ['Usprfunction', 'Usrcid', 'Intbwhse', 'Usprprinter', 'Usprlabel', 'Usprlabel2', 'Usprlabelqty', 'Usprordrnbr', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['usprfunction', 'usrcid', 'intbwhse', 'usprprinter', 'usprlabel', 'usprlabel2', 'usprlabelqty', 'usprordrnbr', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [UserLastPrintJobTableMap::COL_USPRFUNCTION, UserLastPrintJobTableMap::COL_USRCID, UserLastPrintJobTableMap::COL_INTBWHSE, UserLastPrintJobTableMap::COL_USPRPRINTER, UserLastPrintJobTableMap::COL_USPRLABEL, UserLastPrintJobTableMap::COL_USPRLABEL2, UserLastPrintJobTableMap::COL_USPRLABELQTY, UserLastPrintJobTableMap::COL_USPRORDRNBR, UserLastPrintJobTableMap::COL_DATEUPDTD, UserLastPrintJobTableMap::COL_TIMEUPDTD, UserLastPrintJobTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['UsprFunction', 'UsrcId', 'IntbWhse', 'UsprPrinter', 'UsprLabel', 'UsprLabel2', 'UsprLabelQty', 'UsprOrdrNbr', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ]
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
        self::TYPE_PHPNAME       => ['Usprfunction' => 0, 'Usrcid' => 1, 'Intbwhse' => 2, 'Usprprinter' => 3, 'Usprlabel' => 4, 'Usprlabel2' => 5, 'Usprlabelqty' => 6, 'Usprordrnbr' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ],
        self::TYPE_CAMELNAME     => ['usprfunction' => 0, 'usrcid' => 1, 'intbwhse' => 2, 'usprprinter' => 3, 'usprlabel' => 4, 'usprlabel2' => 5, 'usprlabelqty' => 6, 'usprordrnbr' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ],
        self::TYPE_COLNAME       => [UserLastPrintJobTableMap::COL_USPRFUNCTION => 0, UserLastPrintJobTableMap::COL_USRCID => 1, UserLastPrintJobTableMap::COL_INTBWHSE => 2, UserLastPrintJobTableMap::COL_USPRPRINTER => 3, UserLastPrintJobTableMap::COL_USPRLABEL => 4, UserLastPrintJobTableMap::COL_USPRLABEL2 => 5, UserLastPrintJobTableMap::COL_USPRLABELQTY => 6, UserLastPrintJobTableMap::COL_USPRORDRNBR => 7, UserLastPrintJobTableMap::COL_DATEUPDTD => 8, UserLastPrintJobTableMap::COL_TIMEUPDTD => 9, UserLastPrintJobTableMap::COL_DUMMY => 10, ],
        self::TYPE_FIELDNAME     => ['UsprFunction' => 0, 'UsrcId' => 1, 'IntbWhse' => 2, 'UsprPrinter' => 3, 'UsprLabel' => 4, 'UsprLabel2' => 5, 'UsprLabelQty' => 6, 'UsprOrdrNbr' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Usprfunction' => 'USPRFUNCTION',
        'UserLastPrintJob.Usprfunction' => 'USPRFUNCTION',
        'usprfunction' => 'USPRFUNCTION',
        'userLastPrintJob.usprfunction' => 'USPRFUNCTION',
        'UserLastPrintJobTableMap::COL_USPRFUNCTION' => 'USPRFUNCTION',
        'COL_USPRFUNCTION' => 'USPRFUNCTION',
        'UsprFunction' => 'USPRFUNCTION',
        'user_printer.UsprFunction' => 'USPRFUNCTION',
        'Usrcid' => 'USRCID',
        'UserLastPrintJob.Usrcid' => 'USRCID',
        'usrcid' => 'USRCID',
        'userLastPrintJob.usrcid' => 'USRCID',
        'UserLastPrintJobTableMap::COL_USRCID' => 'USRCID',
        'COL_USRCID' => 'USRCID',
        'UsrcId' => 'USRCID',
        'user_printer.UsrcId' => 'USRCID',
        'Intbwhse' => 'INTBWHSE',
        'UserLastPrintJob.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'userLastPrintJob.intbwhse' => 'INTBWHSE',
        'UserLastPrintJobTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'user_printer.IntbWhse' => 'INTBWHSE',
        'Usprprinter' => 'USPRPRINTER',
        'UserLastPrintJob.Usprprinter' => 'USPRPRINTER',
        'usprprinter' => 'USPRPRINTER',
        'userLastPrintJob.usprprinter' => 'USPRPRINTER',
        'UserLastPrintJobTableMap::COL_USPRPRINTER' => 'USPRPRINTER',
        'COL_USPRPRINTER' => 'USPRPRINTER',
        'UsprPrinter' => 'USPRPRINTER',
        'user_printer.UsprPrinter' => 'USPRPRINTER',
        'Usprlabel' => 'USPRLABEL',
        'UserLastPrintJob.Usprlabel' => 'USPRLABEL',
        'usprlabel' => 'USPRLABEL',
        'userLastPrintJob.usprlabel' => 'USPRLABEL',
        'UserLastPrintJobTableMap::COL_USPRLABEL' => 'USPRLABEL',
        'COL_USPRLABEL' => 'USPRLABEL',
        'UsprLabel' => 'USPRLABEL',
        'user_printer.UsprLabel' => 'USPRLABEL',
        'Usprlabel2' => 'USPRLABEL2',
        'UserLastPrintJob.Usprlabel2' => 'USPRLABEL2',
        'usprlabel2' => 'USPRLABEL2',
        'userLastPrintJob.usprlabel2' => 'USPRLABEL2',
        'UserLastPrintJobTableMap::COL_USPRLABEL2' => 'USPRLABEL2',
        'COL_USPRLABEL2' => 'USPRLABEL2',
        'UsprLabel2' => 'USPRLABEL2',
        'user_printer.UsprLabel2' => 'USPRLABEL2',
        'Usprlabelqty' => 'USPRLABELQTY',
        'UserLastPrintJob.Usprlabelqty' => 'USPRLABELQTY',
        'usprlabelqty' => 'USPRLABELQTY',
        'userLastPrintJob.usprlabelqty' => 'USPRLABELQTY',
        'UserLastPrintJobTableMap::COL_USPRLABELQTY' => 'USPRLABELQTY',
        'COL_USPRLABELQTY' => 'USPRLABELQTY',
        'UsprLabelQty' => 'USPRLABELQTY',
        'user_printer.UsprLabelQty' => 'USPRLABELQTY',
        'Usprordrnbr' => 'USPRORDRNBR',
        'UserLastPrintJob.Usprordrnbr' => 'USPRORDRNBR',
        'usprordrnbr' => 'USPRORDRNBR',
        'userLastPrintJob.usprordrnbr' => 'USPRORDRNBR',
        'UserLastPrintJobTableMap::COL_USPRORDRNBR' => 'USPRORDRNBR',
        'COL_USPRORDRNBR' => 'USPRORDRNBR',
        'UsprOrdrNbr' => 'USPRORDRNBR',
        'user_printer.UsprOrdrNbr' => 'USPRORDRNBR',
        'Dateupdtd' => 'DATEUPDTD',
        'UserLastPrintJob.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'userLastPrintJob.dateupdtd' => 'DATEUPDTD',
        'UserLastPrintJobTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'user_printer.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'UserLastPrintJob.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'userLastPrintJob.timeupdtd' => 'TIMEUPDTD',
        'UserLastPrintJobTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'user_printer.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'UserLastPrintJob.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'userLastPrintJob.dummy' => 'DUMMY',
        'UserLastPrintJobTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'user_printer.dummy' => 'DUMMY',
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
        $this->setName('user_printer');
        $this->setPhpName('UserLastPrintJob');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\UserLastPrintJob');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('UsprFunction', 'Usprfunction', 'VARCHAR', true, 12, '');
        $this->addForeignPrimaryKey('UsrcId', 'Usrcid', 'VARCHAR' , 'sys_login', 'UsrcId', true, 8, '');
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('UsprPrinter', 'Usprprinter', 'VARCHAR', false, 12, null);
        $this->addColumn('UsprLabel', 'Usprlabel', 'VARCHAR', false, 8, null);
        $this->addColumn('UsprLabel2', 'Usprlabel2', 'VARCHAR', false, 8, null);
        $this->addColumn('UsprLabelQty', 'Usprlabelqty', 'INTEGER', false, 3, null);
        $this->addColumn('UsprOrdrNbr', 'Usprordrnbr', 'INTEGER', false, 10, null);
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
        $this->addRelation('DplusUser', '\\DplusUser', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':UsrcId',
    1 => ':UsrcId',
  ),
), null, null, null, false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \UserLastPrintJob $obj A \UserLastPrintJob object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(UserLastPrintJob $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getUsprfunction() || is_scalar($obj->getUsprfunction()) || is_callable([$obj->getUsprfunction(), '__toString']) ? (string) $obj->getUsprfunction() : $obj->getUsprfunction()), (null === $obj->getUsrcid() || is_scalar($obj->getUsrcid()) || is_callable([$obj->getUsrcid(), '__toString']) ? (string) $obj->getUsrcid() : $obj->getUsrcid())]);
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
     * @param mixed $value A \UserLastPrintJob object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \UserLastPrintJob) {
                $key = serialize([(null === $value->getUsprfunction() || is_scalar($value->getUsprfunction()) || is_callable([$value->getUsprfunction(), '__toString']) ? (string) $value->getUsprfunction() : $value->getUsprfunction()), (null === $value->getUsrcid() || is_scalar($value->getUsrcid()) || is_callable([$value->getUsrcid(), '__toString']) ? (string) $value->getUsrcid() : $value->getUsrcid())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \UserLastPrintJob object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Usprfunction', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? UserLastPrintJobTableMap::CLASS_DEFAULT : UserLastPrintJobTableMap::OM_CLASS;
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
     * @return array (UserLastPrintJob object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = UserLastPrintJobTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = UserLastPrintJobTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + UserLastPrintJobTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UserLastPrintJobTableMap::OM_CLASS;
            /** @var UserLastPrintJob $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            UserLastPrintJobTableMap::addInstanceToPool($obj, $key);
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
            $key = UserLastPrintJobTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = UserLastPrintJobTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var UserLastPrintJob $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UserLastPrintJobTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USPRFUNCTION);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USRCID);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USPRPRINTER);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USPRLABEL);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USPRLABEL2);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USPRLABELQTY);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_USPRORDRNBR);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(UserLastPrintJobTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.UsprFunction');
            $criteria->addSelectColumn($alias . '.UsrcId');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.UsprPrinter');
            $criteria->addSelectColumn($alias . '.UsprLabel');
            $criteria->addSelectColumn($alias . '.UsprLabel2');
            $criteria->addSelectColumn($alias . '.UsprLabelQty');
            $criteria->addSelectColumn($alias . '.UsprOrdrNbr');
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
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USPRFUNCTION);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USRCID);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USPRPRINTER);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USPRLABEL);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USPRLABEL2);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USPRLABELQTY);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_USPRORDRNBR);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(UserLastPrintJobTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.UsprFunction');
            $criteria->removeSelectColumn($alias . '.UsrcId');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.UsprPrinter');
            $criteria->removeSelectColumn($alias . '.UsprLabel');
            $criteria->removeSelectColumn($alias . '.UsprLabel2');
            $criteria->removeSelectColumn($alias . '.UsprLabelQty');
            $criteria->removeSelectColumn($alias . '.UsprOrdrNbr');
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
        return Propel::getServiceContainer()->getDatabaseMap(UserLastPrintJobTableMap::DATABASE_NAME)->getTable(UserLastPrintJobTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a UserLastPrintJob or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or UserLastPrintJob object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(UserLastPrintJobTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \UserLastPrintJob) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UserLastPrintJobTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(UserLastPrintJobTableMap::COL_USPRFUNCTION, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(UserLastPrintJobTableMap::COL_USRCID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = UserLastPrintJobQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            UserLastPrintJobTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                UserLastPrintJobTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the user_printer table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return UserLastPrintJobQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a UserLastPrintJob or Criteria object.
     *
     * @param mixed $criteria Criteria or UserLastPrintJob object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserLastPrintJobTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from UserLastPrintJob object
        }


        // Set the correct dbName
        $query = UserLastPrintJobQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
