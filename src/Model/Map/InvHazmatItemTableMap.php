<?php

namespace Map;

use \InvHazmatItem;
use \InvHazmatItemQuery;
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
 * This class defines the structure of the 'inv_inv_hazmat' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvHazmatItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvHazmatItemTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_inv_hazmat';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvHazmatItem';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvHazmatItem';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvHazmatItem';

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
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'inv_inv_hazmat.InitItemNbr';

    /**
     * the column name for the InhzDot1 field
     */
    public const COL_INHZDOT1 = 'inv_inv_hazmat.InhzDot1';

    /**
     * the column name for the InhzDot2 field
     */
    public const COL_INHZDOT2 = 'inv_inv_hazmat.InhzDot2';

    /**
     * the column name for the InhzClass field
     */
    public const COL_INHZCLASS = 'inv_inv_hazmat.InhzClass';

    /**
     * the column name for the InhzUnNbr field
     */
    public const COL_INHZUNNBR = 'inv_inv_hazmat.InhzUnNbr';

    /**
     * the column name for the InhzPackGrup field
     */
    public const COL_INHZPACKGRUP = 'inv_inv_hazmat.InhzPackGrup';

    /**
     * the column name for the InhzLabel field
     */
    public const COL_INHZLABEL = 'inv_inv_hazmat.InhzLabel';

    /**
     * the column name for the InhzAirYn field
     */
    public const COL_INHZAIRYN = 'inv_inv_hazmat.InhzAirYn';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_inv_hazmat.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_inv_hazmat.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_inv_hazmat.dummy';

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
        self::TYPE_PHPNAME       => ['Inititemnbr', 'Inhzdot1', 'Inhzdot2', 'Inhzclass', 'Inhzunnbr', 'Inhzpackgrup', 'Inhzlabel', 'Inhzairyn', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inititemnbr', 'inhzdot1', 'inhzdot2', 'inhzclass', 'inhzunnbr', 'inhzpackgrup', 'inhzlabel', 'inhzairyn', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvHazmatItemTableMap::COL_INITITEMNBR, InvHazmatItemTableMap::COL_INHZDOT1, InvHazmatItemTableMap::COL_INHZDOT2, InvHazmatItemTableMap::COL_INHZCLASS, InvHazmatItemTableMap::COL_INHZUNNBR, InvHazmatItemTableMap::COL_INHZPACKGRUP, InvHazmatItemTableMap::COL_INHZLABEL, InvHazmatItemTableMap::COL_INHZAIRYN, InvHazmatItemTableMap::COL_DATEUPDTD, InvHazmatItemTableMap::COL_TIMEUPDTD, InvHazmatItemTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InitItemNbr', 'InhzDot1', 'InhzDot2', 'InhzClass', 'InhzUnNbr', 'InhzPackGrup', 'InhzLabel', 'InhzAirYn', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Inititemnbr' => 0, 'Inhzdot1' => 1, 'Inhzdot2' => 2, 'Inhzclass' => 3, 'Inhzunnbr' => 4, 'Inhzpackgrup' => 5, 'Inhzlabel' => 6, 'Inhzairyn' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ],
        self::TYPE_CAMELNAME     => ['inititemnbr' => 0, 'inhzdot1' => 1, 'inhzdot2' => 2, 'inhzclass' => 3, 'inhzunnbr' => 4, 'inhzpackgrup' => 5, 'inhzlabel' => 6, 'inhzairyn' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ],
        self::TYPE_COLNAME       => [InvHazmatItemTableMap::COL_INITITEMNBR => 0, InvHazmatItemTableMap::COL_INHZDOT1 => 1, InvHazmatItemTableMap::COL_INHZDOT2 => 2, InvHazmatItemTableMap::COL_INHZCLASS => 3, InvHazmatItemTableMap::COL_INHZUNNBR => 4, InvHazmatItemTableMap::COL_INHZPACKGRUP => 5, InvHazmatItemTableMap::COL_INHZLABEL => 6, InvHazmatItemTableMap::COL_INHZAIRYN => 7, InvHazmatItemTableMap::COL_DATEUPDTD => 8, InvHazmatItemTableMap::COL_TIMEUPDTD => 9, InvHazmatItemTableMap::COL_DUMMY => 10, ],
        self::TYPE_FIELDNAME     => ['InitItemNbr' => 0, 'InhzDot1' => 1, 'InhzDot2' => 2, 'InhzClass' => 3, 'InhzUnNbr' => 4, 'InhzPackGrup' => 5, 'InhzLabel' => 6, 'InhzAirYn' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inititemnbr' => 'INITITEMNBR',
        'InvHazmatItem.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'invHazmatItem.inititemnbr' => 'INITITEMNBR',
        'InvHazmatItemTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'inv_inv_hazmat.InitItemNbr' => 'INITITEMNBR',
        'Inhzdot1' => 'INHZDOT1',
        'InvHazmatItem.Inhzdot1' => 'INHZDOT1',
        'inhzdot1' => 'INHZDOT1',
        'invHazmatItem.inhzdot1' => 'INHZDOT1',
        'InvHazmatItemTableMap::COL_INHZDOT1' => 'INHZDOT1',
        'COL_INHZDOT1' => 'INHZDOT1',
        'InhzDot1' => 'INHZDOT1',
        'inv_inv_hazmat.InhzDot1' => 'INHZDOT1',
        'Inhzdot2' => 'INHZDOT2',
        'InvHazmatItem.Inhzdot2' => 'INHZDOT2',
        'inhzdot2' => 'INHZDOT2',
        'invHazmatItem.inhzdot2' => 'INHZDOT2',
        'InvHazmatItemTableMap::COL_INHZDOT2' => 'INHZDOT2',
        'COL_INHZDOT2' => 'INHZDOT2',
        'InhzDot2' => 'INHZDOT2',
        'inv_inv_hazmat.InhzDot2' => 'INHZDOT2',
        'Inhzclass' => 'INHZCLASS',
        'InvHazmatItem.Inhzclass' => 'INHZCLASS',
        'inhzclass' => 'INHZCLASS',
        'invHazmatItem.inhzclass' => 'INHZCLASS',
        'InvHazmatItemTableMap::COL_INHZCLASS' => 'INHZCLASS',
        'COL_INHZCLASS' => 'INHZCLASS',
        'InhzClass' => 'INHZCLASS',
        'inv_inv_hazmat.InhzClass' => 'INHZCLASS',
        'Inhzunnbr' => 'INHZUNNBR',
        'InvHazmatItem.Inhzunnbr' => 'INHZUNNBR',
        'inhzunnbr' => 'INHZUNNBR',
        'invHazmatItem.inhzunnbr' => 'INHZUNNBR',
        'InvHazmatItemTableMap::COL_INHZUNNBR' => 'INHZUNNBR',
        'COL_INHZUNNBR' => 'INHZUNNBR',
        'InhzUnNbr' => 'INHZUNNBR',
        'inv_inv_hazmat.InhzUnNbr' => 'INHZUNNBR',
        'Inhzpackgrup' => 'INHZPACKGRUP',
        'InvHazmatItem.Inhzpackgrup' => 'INHZPACKGRUP',
        'inhzpackgrup' => 'INHZPACKGRUP',
        'invHazmatItem.inhzpackgrup' => 'INHZPACKGRUP',
        'InvHazmatItemTableMap::COL_INHZPACKGRUP' => 'INHZPACKGRUP',
        'COL_INHZPACKGRUP' => 'INHZPACKGRUP',
        'InhzPackGrup' => 'INHZPACKGRUP',
        'inv_inv_hazmat.InhzPackGrup' => 'INHZPACKGRUP',
        'Inhzlabel' => 'INHZLABEL',
        'InvHazmatItem.Inhzlabel' => 'INHZLABEL',
        'inhzlabel' => 'INHZLABEL',
        'invHazmatItem.inhzlabel' => 'INHZLABEL',
        'InvHazmatItemTableMap::COL_INHZLABEL' => 'INHZLABEL',
        'COL_INHZLABEL' => 'INHZLABEL',
        'InhzLabel' => 'INHZLABEL',
        'inv_inv_hazmat.InhzLabel' => 'INHZLABEL',
        'Inhzairyn' => 'INHZAIRYN',
        'InvHazmatItem.Inhzairyn' => 'INHZAIRYN',
        'inhzairyn' => 'INHZAIRYN',
        'invHazmatItem.inhzairyn' => 'INHZAIRYN',
        'InvHazmatItemTableMap::COL_INHZAIRYN' => 'INHZAIRYN',
        'COL_INHZAIRYN' => 'INHZAIRYN',
        'InhzAirYn' => 'INHZAIRYN',
        'inv_inv_hazmat.InhzAirYn' => 'INHZAIRYN',
        'Dateupdtd' => 'DATEUPDTD',
        'InvHazmatItem.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invHazmatItem.dateupdtd' => 'DATEUPDTD',
        'InvHazmatItemTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_inv_hazmat.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvHazmatItem.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invHazmatItem.timeupdtd' => 'TIMEUPDTD',
        'InvHazmatItemTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_inv_hazmat.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvHazmatItem.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invHazmatItem.dummy' => 'DUMMY',
        'InvHazmatItemTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_inv_hazmat.dummy' => 'DUMMY',
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
        $this->setName('inv_inv_hazmat');
        $this->setPhpName('InvHazmatItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvHazmatItem');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('InhzDot1', 'Inhzdot1', 'VARCHAR', false, 35, null);
        $this->addColumn('InhzDot2', 'Inhzdot2', 'VARCHAR', false, 35, null);
        $this->addColumn('InhzClass', 'Inhzclass', 'VARCHAR', false, 3, null);
        $this->addColumn('InhzUnNbr', 'Inhzunnbr', 'VARCHAR', false, 6, null);
        $this->addColumn('InhzPackGrup', 'Inhzpackgrup', 'VARCHAR', false, 3, null);
        $this->addColumn('InhzLabel', 'Inhzlabel', 'VARCHAR', false, 35, null);
        $this->addColumn('InhzAirYn', 'Inhzairyn', 'VARCHAR', false, 1, null);
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
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvHazmatItemTableMap::CLASS_DEFAULT : InvHazmatItemTableMap::OM_CLASS;
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
     * @return array (InvHazmatItem object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvHazmatItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvHazmatItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvHazmatItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvHazmatItemTableMap::OM_CLASS;
            /** @var InvHazmatItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvHazmatItemTableMap::addInstanceToPool($obj, $key);
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
            $key = InvHazmatItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvHazmatItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvHazmatItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvHazmatItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZDOT1);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZDOT2);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZCLASS);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZUNNBR);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZPACKGRUP);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZLABEL);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_INHZAIRYN);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvHazmatItemTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.InhzDot1');
            $criteria->addSelectColumn($alias . '.InhzDot2');
            $criteria->addSelectColumn($alias . '.InhzClass');
            $criteria->addSelectColumn($alias . '.InhzUnNbr');
            $criteria->addSelectColumn($alias . '.InhzPackGrup');
            $criteria->addSelectColumn($alias . '.InhzLabel');
            $criteria->addSelectColumn($alias . '.InhzAirYn');
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
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZDOT1);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZDOT2);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZCLASS);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZUNNBR);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZPACKGRUP);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZLABEL);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_INHZAIRYN);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvHazmatItemTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.InhzDot1');
            $criteria->removeSelectColumn($alias . '.InhzDot2');
            $criteria->removeSelectColumn($alias . '.InhzClass');
            $criteria->removeSelectColumn($alias . '.InhzUnNbr');
            $criteria->removeSelectColumn($alias . '.InhzPackGrup');
            $criteria->removeSelectColumn($alias . '.InhzLabel');
            $criteria->removeSelectColumn($alias . '.InhzAirYn');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvHazmatItemTableMap::DATABASE_NAME)->getTable(InvHazmatItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvHazmatItem or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvHazmatItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvHazmatItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvHazmatItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvHazmatItemTableMap::DATABASE_NAME);
            $criteria->add(InvHazmatItemTableMap::COL_INITITEMNBR, (array) $values, Criteria::IN);
        }

        $query = InvHazmatItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvHazmatItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvHazmatItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_inv_hazmat table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvHazmatItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvHazmatItem or Criteria object.
     *
     * @param mixed $criteria Criteria or InvHazmatItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvHazmatItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvHazmatItem object
        }


        // Set the correct dbName
        $query = InvHazmatItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
