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
 */
class MotorFreightCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.MotorFreightCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_mfrt_code';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'MotorFreightCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\MotorFreightCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'MotorFreightCode';

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
     * the column name for the Oe2tbMfrtCode field
     */
    public const COL_OE2TBMFRTCODE = 'so_mfrt_code.Oe2tbMfrtCode';

    /**
     * the column name for the Oe2tbMfrtClass field
     */
    public const COL_OE2TBMFRTCLASS = 'so_mfrt_code.Oe2tbMfrtClass';

    /**
     * the column name for the Oe2tbMfrtDesc1 field
     */
    public const COL_OE2TBMFRTDESC1 = 'so_mfrt_code.Oe2tbMfrtDesc1';

    /**
     * the column name for the Oe2tbMfrtDesc2 field
     */
    public const COL_OE2TBMFRTDESC2 = 'so_mfrt_code.Oe2tbMfrtDesc2';

    /**
     * the column name for the Oe2tbMfrtDesc3 field
     */
    public const COL_OE2TBMFRTDESC3 = 'so_mfrt_code.Oe2tbMfrtDesc3';

    /**
     * the column name for the Oe2tbMfrtDesc4 field
     */
    public const COL_OE2TBMFRTDESC4 = 'so_mfrt_code.Oe2tbMfrtDesc4';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_mfrt_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_mfrt_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_mfrt_code.dummy';

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
        self::TYPE_PHPNAME       => ['Oe2tbmfrtcode', 'Oe2tbmfrtclass', 'Oe2tbmfrtdesc1', 'Oe2tbmfrtdesc2', 'Oe2tbmfrtdesc3', 'Oe2tbmfrtdesc4', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['oe2tbmfrtcode', 'oe2tbmfrtclass', 'oe2tbmfrtdesc1', 'oe2tbmfrtdesc2', 'oe2tbmfrtdesc3', 'oe2tbmfrtdesc4', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4, MotorFreightCodeTableMap::COL_DATEUPDTD, MotorFreightCodeTableMap::COL_TIMEUPDTD, MotorFreightCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['Oe2tbMfrtCode', 'Oe2tbMfrtClass', 'Oe2tbMfrtDesc1', 'Oe2tbMfrtDesc2', 'Oe2tbMfrtDesc3', 'Oe2tbMfrtDesc4', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Oe2tbmfrtcode' => 0, 'Oe2tbmfrtclass' => 1, 'Oe2tbmfrtdesc1' => 2, 'Oe2tbmfrtdesc2' => 3, 'Oe2tbmfrtdesc3' => 4, 'Oe2tbmfrtdesc4' => 5, 'Dateupdtd' => 6, 'Timeupdtd' => 7, 'Dummy' => 8, ],
        self::TYPE_CAMELNAME     => ['oe2tbmfrtcode' => 0, 'oe2tbmfrtclass' => 1, 'oe2tbmfrtdesc1' => 2, 'oe2tbmfrtdesc2' => 3, 'oe2tbmfrtdesc3' => 4, 'oe2tbmfrtdesc4' => 5, 'dateupdtd' => 6, 'timeupdtd' => 7, 'dummy' => 8, ],
        self::TYPE_COLNAME       => [MotorFreightCodeTableMap::COL_OE2TBMFRTCODE => 0, MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS => 1, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1 => 2, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2 => 3, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3 => 4, MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4 => 5, MotorFreightCodeTableMap::COL_DATEUPDTD => 6, MotorFreightCodeTableMap::COL_TIMEUPDTD => 7, MotorFreightCodeTableMap::COL_DUMMY => 8, ],
        self::TYPE_FIELDNAME     => ['Oe2tbMfrtCode' => 0, 'Oe2tbMfrtClass' => 1, 'Oe2tbMfrtDesc1' => 2, 'Oe2tbMfrtDesc2' => 3, 'Oe2tbMfrtDesc3' => 4, 'Oe2tbMfrtDesc4' => 5, 'DateUpdtd' => 6, 'TimeUpdtd' => 7, 'dummy' => 8, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Oe2tbmfrtcode' => 'OE2TBMFRTCODE',
        'MotorFreightCode.Oe2tbmfrtcode' => 'OE2TBMFRTCODE',
        'oe2tbmfrtcode' => 'OE2TBMFRTCODE',
        'motorFreightCode.oe2tbmfrtcode' => 'OE2TBMFRTCODE',
        'MotorFreightCodeTableMap::COL_OE2TBMFRTCODE' => 'OE2TBMFRTCODE',
        'COL_OE2TBMFRTCODE' => 'OE2TBMFRTCODE',
        'Oe2tbMfrtCode' => 'OE2TBMFRTCODE',
        'so_mfrt_code.Oe2tbMfrtCode' => 'OE2TBMFRTCODE',
        'Oe2tbmfrtclass' => 'OE2TBMFRTCLASS',
        'MotorFreightCode.Oe2tbmfrtclass' => 'OE2TBMFRTCLASS',
        'oe2tbmfrtclass' => 'OE2TBMFRTCLASS',
        'motorFreightCode.oe2tbmfrtclass' => 'OE2TBMFRTCLASS',
        'MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS' => 'OE2TBMFRTCLASS',
        'COL_OE2TBMFRTCLASS' => 'OE2TBMFRTCLASS',
        'Oe2tbMfrtClass' => 'OE2TBMFRTCLASS',
        'so_mfrt_code.Oe2tbMfrtClass' => 'OE2TBMFRTCLASS',
        'Oe2tbmfrtdesc1' => 'OE2TBMFRTDESC1',
        'MotorFreightCode.Oe2tbmfrtdesc1' => 'OE2TBMFRTDESC1',
        'oe2tbmfrtdesc1' => 'OE2TBMFRTDESC1',
        'motorFreightCode.oe2tbmfrtdesc1' => 'OE2TBMFRTDESC1',
        'MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1' => 'OE2TBMFRTDESC1',
        'COL_OE2TBMFRTDESC1' => 'OE2TBMFRTDESC1',
        'Oe2tbMfrtDesc1' => 'OE2TBMFRTDESC1',
        'so_mfrt_code.Oe2tbMfrtDesc1' => 'OE2TBMFRTDESC1',
        'Oe2tbmfrtdesc2' => 'OE2TBMFRTDESC2',
        'MotorFreightCode.Oe2tbmfrtdesc2' => 'OE2TBMFRTDESC2',
        'oe2tbmfrtdesc2' => 'OE2TBMFRTDESC2',
        'motorFreightCode.oe2tbmfrtdesc2' => 'OE2TBMFRTDESC2',
        'MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2' => 'OE2TBMFRTDESC2',
        'COL_OE2TBMFRTDESC2' => 'OE2TBMFRTDESC2',
        'Oe2tbMfrtDesc2' => 'OE2TBMFRTDESC2',
        'so_mfrt_code.Oe2tbMfrtDesc2' => 'OE2TBMFRTDESC2',
        'Oe2tbmfrtdesc3' => 'OE2TBMFRTDESC3',
        'MotorFreightCode.Oe2tbmfrtdesc3' => 'OE2TBMFRTDESC3',
        'oe2tbmfrtdesc3' => 'OE2TBMFRTDESC3',
        'motorFreightCode.oe2tbmfrtdesc3' => 'OE2TBMFRTDESC3',
        'MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3' => 'OE2TBMFRTDESC3',
        'COL_OE2TBMFRTDESC3' => 'OE2TBMFRTDESC3',
        'Oe2tbMfrtDesc3' => 'OE2TBMFRTDESC3',
        'so_mfrt_code.Oe2tbMfrtDesc3' => 'OE2TBMFRTDESC3',
        'Oe2tbmfrtdesc4' => 'OE2TBMFRTDESC4',
        'MotorFreightCode.Oe2tbmfrtdesc4' => 'OE2TBMFRTDESC4',
        'oe2tbmfrtdesc4' => 'OE2TBMFRTDESC4',
        'motorFreightCode.oe2tbmfrtdesc4' => 'OE2TBMFRTDESC4',
        'MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4' => 'OE2TBMFRTDESC4',
        'COL_OE2TBMFRTDESC4' => 'OE2TBMFRTDESC4',
        'Oe2tbMfrtDesc4' => 'OE2TBMFRTDESC4',
        'so_mfrt_code.Oe2tbMfrtDesc4' => 'OE2TBMFRTDESC4',
        'Dateupdtd' => 'DATEUPDTD',
        'MotorFreightCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'motorFreightCode.dateupdtd' => 'DATEUPDTD',
        'MotorFreightCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_mfrt_code.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'MotorFreightCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'motorFreightCode.timeupdtd' => 'TIMEUPDTD',
        'MotorFreightCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_mfrt_code.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'MotorFreightCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'motorFreightCode.dummy' => 'DUMMY',
        'MotorFreightCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_mfrt_code.dummy' => 'DUMMY',
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? MotorFreightCodeTableMap::CLASS_DEFAULT : MotorFreightCodeTableMap::OM_CLASS;
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
     * @return array (MotorFreightCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
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
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
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
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(MotorFreightCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.Oe2tbMfrtCode');
            $criteria->removeSelectColumn($alias . '.Oe2tbMfrtClass');
            $criteria->removeSelectColumn($alias . '.Oe2tbMfrtDesc1');
            $criteria->removeSelectColumn($alias . '.Oe2tbMfrtDesc2');
            $criteria->removeSelectColumn($alias . '.Oe2tbMfrtDesc3');
            $criteria->removeSelectColumn($alias . '.Oe2tbMfrtDesc4');
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
        return Propel::getServiceContainer()->getDatabaseMap(MotorFreightCodeTableMap::DATABASE_NAME)->getTable(MotorFreightCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a MotorFreightCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or MotorFreightCode object or primary key or array of primary keys
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
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return MotorFreightCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a MotorFreightCode or Criteria object.
     *
     * @param mixed $criteria Criteria or MotorFreightCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
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

}
