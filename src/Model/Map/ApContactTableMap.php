<?php

namespace Map;

use \ApContact;
use \ApContactQuery;
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
 * This class defines the structure of the 'ap_contact' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ApContactTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ApContactTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ap_contact';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ApContact';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ApContact';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ApContact';

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
     * the column name for the ApveVendId field
     */
    public const COL_APVEVENDID = 'ap_contact.ApveVendId';

    /**
     * the column name for the ApcpContId field
     */
    public const COL_APCPCONTID = 'ap_contact.ApcpContId';

    /**
     * the column name for the ApcpTitl field
     */
    public const COL_APCPTITL = 'ap_contact.ApcpTitl';

    /**
     * the column name for the ApcpWhse field
     */
    public const COL_APCPWHSE = 'ap_contact.ApcpWhse';

    /**
     * the column name for the ApcpPoCont field
     */
    public const COL_APCPPOCONT = 'ap_contact.ApcpPoCont';

    /**
     * the column name for the ApcpAchCont field
     */
    public const COL_APCPACHCONT = 'ap_contact.ApcpAchCont';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ap_contact.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ap_contact.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ap_contact.dummy';

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
        self::TYPE_PHPNAME       => ['Apvevendid', 'Apcpcontid', 'Apcptitl', 'Apcpwhse', 'Apcppocont', 'ApcpAchCont', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['apvevendid', 'apcpcontid', 'apcptitl', 'apcpwhse', 'apcppocont', 'apcpAchCont', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ApContactTableMap::COL_APVEVENDID, ApContactTableMap::COL_APCPCONTID, ApContactTableMap::COL_APCPTITL, ApContactTableMap::COL_APCPWHSE, ApContactTableMap::COL_APCPPOCONT, ApContactTableMap::COL_APCPACHCONT, ApContactTableMap::COL_DATEUPDTD, ApContactTableMap::COL_TIMEUPDTD, ApContactTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ApveVendId', 'ApcpContId', 'ApcpTitl', 'ApcpWhse', 'ApcpPoCont', 'ApcpAchCont', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Apvevendid' => 0, 'Apcpcontid' => 1, 'Apcptitl' => 2, 'Apcpwhse' => 3, 'Apcppocont' => 4, 'ApcpAchCont' => 5, 'Dateupdtd' => 6, 'Timeupdtd' => 7, 'Dummy' => 8, ],
        self::TYPE_CAMELNAME     => ['apvevendid' => 0, 'apcpcontid' => 1, 'apcptitl' => 2, 'apcpwhse' => 3, 'apcppocont' => 4, 'apcpAchCont' => 5, 'dateupdtd' => 6, 'timeupdtd' => 7, 'dummy' => 8, ],
        self::TYPE_COLNAME       => [ApContactTableMap::COL_APVEVENDID => 0, ApContactTableMap::COL_APCPCONTID => 1, ApContactTableMap::COL_APCPTITL => 2, ApContactTableMap::COL_APCPWHSE => 3, ApContactTableMap::COL_APCPPOCONT => 4, ApContactTableMap::COL_APCPACHCONT => 5, ApContactTableMap::COL_DATEUPDTD => 6, ApContactTableMap::COL_TIMEUPDTD => 7, ApContactTableMap::COL_DUMMY => 8, ],
        self::TYPE_FIELDNAME     => ['ApveVendId' => 0, 'ApcpContId' => 1, 'ApcpTitl' => 2, 'ApcpWhse' => 3, 'ApcpPoCont' => 4, 'ApcpAchCont' => 5, 'DateUpdtd' => 6, 'TimeUpdtd' => 7, 'dummy' => 8, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Apvevendid' => 'APVEVENDID',
        'ApContact.Apvevendid' => 'APVEVENDID',
        'apvevendid' => 'APVEVENDID',
        'apContact.apvevendid' => 'APVEVENDID',
        'ApContactTableMap::COL_APVEVENDID' => 'APVEVENDID',
        'COL_APVEVENDID' => 'APVEVENDID',
        'ApveVendId' => 'APVEVENDID',
        'ap_contact.ApveVendId' => 'APVEVENDID',
        'Apcpcontid' => 'APCPCONTID',
        'ApContact.Apcpcontid' => 'APCPCONTID',
        'apcpcontid' => 'APCPCONTID',
        'apContact.apcpcontid' => 'APCPCONTID',
        'ApContactTableMap::COL_APCPCONTID' => 'APCPCONTID',
        'COL_APCPCONTID' => 'APCPCONTID',
        'ApcpContId' => 'APCPCONTID',
        'ap_contact.ApcpContId' => 'APCPCONTID',
        'Apcptitl' => 'APCPTITL',
        'ApContact.Apcptitl' => 'APCPTITL',
        'apcptitl' => 'APCPTITL',
        'apContact.apcptitl' => 'APCPTITL',
        'ApContactTableMap::COL_APCPTITL' => 'APCPTITL',
        'COL_APCPTITL' => 'APCPTITL',
        'ApcpTitl' => 'APCPTITL',
        'ap_contact.ApcpTitl' => 'APCPTITL',
        'Apcpwhse' => 'APCPWHSE',
        'ApContact.Apcpwhse' => 'APCPWHSE',
        'apcpwhse' => 'APCPWHSE',
        'apContact.apcpwhse' => 'APCPWHSE',
        'ApContactTableMap::COL_APCPWHSE' => 'APCPWHSE',
        'COL_APCPWHSE' => 'APCPWHSE',
        'ApcpWhse' => 'APCPWHSE',
        'ap_contact.ApcpWhse' => 'APCPWHSE',
        'Apcppocont' => 'APCPPOCONT',
        'ApContact.Apcppocont' => 'APCPPOCONT',
        'apcppocont' => 'APCPPOCONT',
        'apContact.apcppocont' => 'APCPPOCONT',
        'ApContactTableMap::COL_APCPPOCONT' => 'APCPPOCONT',
        'COL_APCPPOCONT' => 'APCPPOCONT',
        'ApcpPoCont' => 'APCPPOCONT',
        'ap_contact.ApcpPoCont' => 'APCPPOCONT',
        'ApcpAchCont' => 'APCPACHCONT',
        'ApContact.ApcpAchCont' => 'APCPACHCONT',
        'apcpAchCont' => 'APCPACHCONT',
        'apContact.apcpAchCont' => 'APCPACHCONT',
        'ApContactTableMap::COL_APCPACHCONT' => 'APCPACHCONT',
        'COL_APCPACHCONT' => 'APCPACHCONT',
        'ap_contact.ApcpAchCont' => 'APCPACHCONT',
        'Dateupdtd' => 'DATEUPDTD',
        'ApContact.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'apContact.dateupdtd' => 'DATEUPDTD',
        'ApContactTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ap_contact.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ApContact.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'apContact.timeupdtd' => 'TIMEUPDTD',
        'ApContactTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ap_contact.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ApContact.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'apContact.dummy' => 'DUMMY',
        'ApContactTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ap_contact.dummy' => 'DUMMY',
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
        $this->setName('ap_contact');
        $this->setPhpName('ApContact');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApContact');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ApveVendId', 'Apvevendid', 'VARCHAR' , 'ap_vend_mast', 'ApveVendId', true, 6, '');
        $this->addPrimaryKey('ApcpContId', 'Apcpcontid', 'VARCHAR', true, 20, '');
        $this->addColumn('ApcpTitl', 'Apcptitl', 'VARCHAR', false, 20, null);
        $this->addColumn('ApcpWhse', 'Apcpwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ApcpPoCont', 'Apcppocont', 'VARCHAR', false, 1, null);
        $this->addColumn('ApcpAchCont', 'ApcpAchCont', 'VARCHAR', false, 1, null);
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
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
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
     * @param \ApContact $obj A \ApContact object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ApContact $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getApvevendid() || is_scalar($obj->getApvevendid()) || is_callable([$obj->getApvevendid(), '__toString']) ? (string) $obj->getApvevendid() : $obj->getApvevendid()), (null === $obj->getApcpcontid() || is_scalar($obj->getApcpcontid()) || is_callable([$obj->getApcpcontid(), '__toString']) ? (string) $obj->getApcpcontid() : $obj->getApcpcontid())]);
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
     * @param mixed $value A \ApContact object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ApContact) {
                $key = serialize([(null === $value->getApvevendid() || is_scalar($value->getApvevendid()) || is_callable([$value->getApvevendid(), '__toString']) ? (string) $value->getApvevendid() : $value->getApvevendid()), (null === $value->getApcpcontid() || is_scalar($value->getApcpcontid()) || is_callable([$value->getApcpcontid(), '__toString']) ? (string) $value->getApcpcontid() : $value->getApcpcontid())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ApContact object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Apcpcontid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ApContactTableMap::CLASS_DEFAULT : ApContactTableMap::OM_CLASS;
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
     * @return array (ApContact object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ApContactTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApContactTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApContactTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApContactTableMap::OM_CLASS;
            /** @var ApContact $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApContactTableMap::addInstanceToPool($obj, $key);
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
            $key = ApContactTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApContactTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApContact $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApContactTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ApContactTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(ApContactTableMap::COL_APCPCONTID);
            $criteria->addSelectColumn(ApContactTableMap::COL_APCPTITL);
            $criteria->addSelectColumn(ApContactTableMap::COL_APCPWHSE);
            $criteria->addSelectColumn(ApContactTableMap::COL_APCPPOCONT);
            $criteria->addSelectColumn(ApContactTableMap::COL_APCPACHCONT);
            $criteria->addSelectColumn(ApContactTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ApContactTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ApContactTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.ApcpContId');
            $criteria->addSelectColumn($alias . '.ApcpTitl');
            $criteria->addSelectColumn($alias . '.ApcpWhse');
            $criteria->addSelectColumn($alias . '.ApcpPoCont');
            $criteria->addSelectColumn($alias . '.ApcpAchCont');
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
            $criteria->removeSelectColumn(ApContactTableMap::COL_APVEVENDID);
            $criteria->removeSelectColumn(ApContactTableMap::COL_APCPCONTID);
            $criteria->removeSelectColumn(ApContactTableMap::COL_APCPTITL);
            $criteria->removeSelectColumn(ApContactTableMap::COL_APCPWHSE);
            $criteria->removeSelectColumn(ApContactTableMap::COL_APCPPOCONT);
            $criteria->removeSelectColumn(ApContactTableMap::COL_APCPACHCONT);
            $criteria->removeSelectColumn(ApContactTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ApContactTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ApContactTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ApveVendId');
            $criteria->removeSelectColumn($alias . '.ApcpContId');
            $criteria->removeSelectColumn($alias . '.ApcpTitl');
            $criteria->removeSelectColumn($alias . '.ApcpWhse');
            $criteria->removeSelectColumn($alias . '.ApcpPoCont');
            $criteria->removeSelectColumn($alias . '.ApcpAchCont');
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
        return Propel::getServiceContainer()->getDatabaseMap(ApContactTableMap::DATABASE_NAME)->getTable(ApContactTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ApContact or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ApContact object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApContactTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApContact) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApContactTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ApContactTableMap::COL_APVEVENDID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ApContactTableMap::COL_APCPCONTID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = ApContactQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApContactTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApContactTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ap_contact table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ApContactQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApContact or Criteria object.
     *
     * @param mixed $criteria Criteria or ApContact object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApContactTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApContact object
        }


        // Set the correct dbName
        $query = ApContactQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
