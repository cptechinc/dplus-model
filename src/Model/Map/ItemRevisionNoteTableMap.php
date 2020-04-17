<?php

namespace Map;

use \ItemRevisionNote;
use \ItemRevisionNoteQuery;
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
 * This class defines the structure of the 'notes_item_revision' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemRevisionNoteTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemRevisionNoteTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'notes_item_revision';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemRevisionNote';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemRevisionNote';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the ItemNoteType field
     */
    const COL_ITEMNOTETYPE = 'notes_item_revision.ItemNoteType';

    /**
     * the column name for the ItemNoteTypeDesc field
     */
    const COL_ITEMNOTETYPEDESC = 'notes_item_revision.ItemNoteTypeDesc';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'notes_item_revision.InitItemNbr';

    /**
     * the column name for the ItemNoteDate field
     */
    const COL_ITEMNOTEDATE = 'notes_item_revision.ItemNoteDate';

    /**
     * the column name for the ItemNoteTime field
     */
    const COL_ITEMNOTETIME = 'notes_item_revision.ItemNoteTime';

    /**
     * the column name for the ItemNoteRevision field
     */
    const COL_ITEMNOTEREVISION = 'notes_item_revision.ItemNoteRevision';

    /**
     * the column name for the ItemNoteSeq field
     */
    const COL_ITEMNOTESEQ = 'notes_item_revision.ItemNoteSeq';

    /**
     * the column name for the ItemNoteNote field
     */
    const COL_ITEMNOTENOTE = 'notes_item_revision.ItemNoteNote';

    /**
     * the column name for the ItemNoteUser field
     */
    const COL_ITEMNOTEUSER = 'notes_item_revision.ItemNoteUser';

    /**
     * the column name for the ItemNoteKey2 field
     */
    const COL_ITEMNOTEKEY2 = 'notes_item_revision.ItemNoteKey2';

    /**
     * the column name for the ItemNoteForm field
     */
    const COL_ITEMNOTEFORM = 'notes_item_revision.ItemNoteForm';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'notes_item_revision.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'notes_item_revision.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'notes_item_revision.dummy';

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
        self::TYPE_PHPNAME       => array('Itemnotetype', 'Itemnotetypedesc', 'Inititemnbr', 'Itemnotedate', 'Itemnotetime', 'Itemnoterevision', 'Itemnoteseq', 'Itemnotenote', 'Itemnoteuser', 'Itemnotekey2', 'Itemnoteform', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('itemnotetype', 'itemnotetypedesc', 'inititemnbr', 'itemnotedate', 'itemnotetime', 'itemnoterevision', 'itemnoteseq', 'itemnotenote', 'itemnoteuser', 'itemnotekey2', 'itemnoteform', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE, ItemRevisionNoteTableMap::COL_ITEMNOTETYPEDESC, ItemRevisionNoteTableMap::COL_INITITEMNBR, ItemRevisionNoteTableMap::COL_ITEMNOTEDATE, ItemRevisionNoteTableMap::COL_ITEMNOTETIME, ItemRevisionNoteTableMap::COL_ITEMNOTEREVISION, ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, ItemRevisionNoteTableMap::COL_ITEMNOTENOTE, ItemRevisionNoteTableMap::COL_ITEMNOTEUSER, ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2, ItemRevisionNoteTableMap::COL_ITEMNOTEFORM, ItemRevisionNoteTableMap::COL_DATEUPDTD, ItemRevisionNoteTableMap::COL_TIMEUPDTD, ItemRevisionNoteTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ItemNoteType', 'ItemNoteTypeDesc', 'InitItemNbr', 'ItemNoteDate', 'ItemNoteTime', 'ItemNoteRevision', 'ItemNoteSeq', 'ItemNoteNote', 'ItemNoteUser', 'ItemNoteKey2', 'ItemNoteForm', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Itemnotetype' => 0, 'Itemnotetypedesc' => 1, 'Inititemnbr' => 2, 'Itemnotedate' => 3, 'Itemnotetime' => 4, 'Itemnoterevision' => 5, 'Itemnoteseq' => 6, 'Itemnotenote' => 7, 'Itemnoteuser' => 8, 'Itemnotekey2' => 9, 'Itemnoteform' => 10, 'Dateupdtd' => 11, 'Timeupdtd' => 12, 'Dummy' => 13, ),
        self::TYPE_CAMELNAME     => array('itemnotetype' => 0, 'itemnotetypedesc' => 1, 'inititemnbr' => 2, 'itemnotedate' => 3, 'itemnotetime' => 4, 'itemnoterevision' => 5, 'itemnoteseq' => 6, 'itemnotenote' => 7, 'itemnoteuser' => 8, 'itemnotekey2' => 9, 'itemnoteform' => 10, 'dateupdtd' => 11, 'timeupdtd' => 12, 'dummy' => 13, ),
        self::TYPE_COLNAME       => array(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE => 0, ItemRevisionNoteTableMap::COL_ITEMNOTETYPEDESC => 1, ItemRevisionNoteTableMap::COL_INITITEMNBR => 2, ItemRevisionNoteTableMap::COL_ITEMNOTEDATE => 3, ItemRevisionNoteTableMap::COL_ITEMNOTETIME => 4, ItemRevisionNoteTableMap::COL_ITEMNOTEREVISION => 5, ItemRevisionNoteTableMap::COL_ITEMNOTESEQ => 6, ItemRevisionNoteTableMap::COL_ITEMNOTENOTE => 7, ItemRevisionNoteTableMap::COL_ITEMNOTEUSER => 8, ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2 => 9, ItemRevisionNoteTableMap::COL_ITEMNOTEFORM => 10, ItemRevisionNoteTableMap::COL_DATEUPDTD => 11, ItemRevisionNoteTableMap::COL_TIMEUPDTD => 12, ItemRevisionNoteTableMap::COL_DUMMY => 13, ),
        self::TYPE_FIELDNAME     => array('ItemNoteType' => 0, 'ItemNoteTypeDesc' => 1, 'InitItemNbr' => 2, 'ItemNoteDate' => 3, 'ItemNoteTime' => 4, 'ItemNoteRevision' => 5, 'ItemNoteSeq' => 6, 'ItemNoteNote' => 7, 'ItemNoteUser' => 8, 'ItemNoteKey2' => 9, 'ItemNoteForm' => 10, 'DateUpdtd' => 11, 'TimeUpdtd' => 12, 'dummy' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('notes_item_revision');
        $this->setPhpName('ItemRevisionNote');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemRevisionNote');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ItemNoteType', 'Itemnotetype', 'VARCHAR', true, 4, '');
        $this->addColumn('ItemNoteTypeDesc', 'Itemnotetypedesc', 'VARCHAR', false, 40, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('ItemNoteDate', 'Itemnotedate', 'VARCHAR', false, 8, null);
        $this->addColumn('ItemNoteTime', 'Itemnotetime', 'VARCHAR', false, 4, null);
        $this->addColumn('ItemNoteRevision', 'Itemnoterevision', 'VARCHAR', false, 10, null);
        $this->addPrimaryKey('ItemNoteSeq', 'Itemnoteseq', 'INTEGER', true, 8, 0);
        $this->addColumn('ItemNoteNote', 'Itemnotenote', 'VARCHAR', false, 150, null);
        $this->addPrimaryKey('ItemNoteUser', 'Itemnoteuser', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('ItemNoteKey2', 'Itemnotekey2', 'VARCHAR', true, 70, '');
        $this->addPrimaryKey('ItemNoteForm', 'Itemnoteform', 'VARCHAR', true, 8, '');
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ItemRevisionNote $obj A \ItemRevisionNote object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getItemnotetype() || is_scalar($obj->getItemnotetype()) || is_callable([$obj->getItemnotetype(), '__toString']) ? (string) $obj->getItemnotetype() : $obj->getItemnotetype()), (null === $obj->getItemnoteseq() || is_scalar($obj->getItemnoteseq()) || is_callable([$obj->getItemnoteseq(), '__toString']) ? (string) $obj->getItemnoteseq() : $obj->getItemnoteseq()), (null === $obj->getItemnoteuser() || is_scalar($obj->getItemnoteuser()) || is_callable([$obj->getItemnoteuser(), '__toString']) ? (string) $obj->getItemnoteuser() : $obj->getItemnoteuser()), (null === $obj->getItemnotekey2() || is_scalar($obj->getItemnotekey2()) || is_callable([$obj->getItemnotekey2(), '__toString']) ? (string) $obj->getItemnotekey2() : $obj->getItemnotekey2()), (null === $obj->getItemnoteform() || is_scalar($obj->getItemnoteform()) || is_callable([$obj->getItemnoteform(), '__toString']) ? (string) $obj->getItemnoteform() : $obj->getItemnoteform())]);
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
     * @param mixed $value A \ItemRevisionNote object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemRevisionNote) {
                $key = serialize([(null === $value->getItemnotetype() || is_scalar($value->getItemnotetype()) || is_callable([$value->getItemnotetype(), '__toString']) ? (string) $value->getItemnotetype() : $value->getItemnotetype()), (null === $value->getItemnoteseq() || is_scalar($value->getItemnoteseq()) || is_callable([$value->getItemnoteseq(), '__toString']) ? (string) $value->getItemnoteseq() : $value->getItemnoteseq()), (null === $value->getItemnoteuser() || is_scalar($value->getItemnoteuser()) || is_callable([$value->getItemnoteuser(), '__toString']) ? (string) $value->getItemnoteuser() : $value->getItemnoteuser()), (null === $value->getItemnotekey2() || is_scalar($value->getItemnotekey2()) || is_callable([$value->getItemnotekey2(), '__toString']) ? (string) $value->getItemnotekey2() : $value->getItemnotekey2()), (null === $value->getItemnoteform() || is_scalar($value->getItemnoteform()) || is_callable([$value->getItemnoteform(), '__toString']) ? (string) $value->getItemnoteform() : $value->getItemnoteform())]);

            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemRevisionNote object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Itemnotetype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Itemnoteseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 8 + $offset
                : self::translateFieldName('Itemnoteuser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 9 + $offset
                : self::translateFieldName('Itemnotekey2', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 10 + $offset
                : self::translateFieldName('Itemnoteform', TableMap::TYPE_PHPNAME, $indexType)
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ItemRevisionNoteTableMap::CLASS_DEFAULT : ItemRevisionNoteTableMap::OM_CLASS;
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
     * @return array           (ItemRevisionNote object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemRevisionNoteTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemRevisionNoteTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemRevisionNoteTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemRevisionNoteTableMap::OM_CLASS;
            /** @var ItemRevisionNote $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemRevisionNoteTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemRevisionNoteTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemRevisionNoteTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemRevisionNote $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemRevisionNoteTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTETYPEDESC);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTEDATE);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTETIME);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTEREVISION);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTENOTE);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTEUSER);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_ITEMNOTEFORM);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemRevisionNoteTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ItemNoteType');
            $criteria->addSelectColumn($alias . '.ItemNoteTypeDesc');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.ItemNoteDate');
            $criteria->addSelectColumn($alias . '.ItemNoteTime');
            $criteria->addSelectColumn($alias . '.ItemNoteRevision');
            $criteria->addSelectColumn($alias . '.ItemNoteSeq');
            $criteria->addSelectColumn($alias . '.ItemNoteNote');
            $criteria->addSelectColumn($alias . '.ItemNoteUser');
            $criteria->addSelectColumn($alias . '.ItemNoteKey2');
            $criteria->addSelectColumn($alias . '.ItemNoteForm');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemRevisionNoteTableMap::DATABASE_NAME)->getTable(ItemRevisionNoteTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemRevisionNoteTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemRevisionNoteTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemRevisionNoteTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemRevisionNote or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemRevisionNote object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemRevisionNoteTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemRevisionNote) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemRevisionNoteTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTEUSER, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTEFORM, $value[4]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemRevisionNoteQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemRevisionNoteTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemRevisionNoteTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_item_revision table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemRevisionNoteQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemRevisionNote or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemRevisionNote object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemRevisionNoteTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemRevisionNote object
        }


        // Set the correct dbName
        $query = ItemRevisionNoteQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemRevisionNoteTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemRevisionNoteTableMap::buildTableMap();
