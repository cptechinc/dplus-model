<?php

namespace Map;

use \ItemInspectNote;
use \ItemInspectNoteQuery;
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
 * This class defines the structure of the 'notes_item_inspect' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemInspectNoteTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemInspectNoteTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'notes_item_inspect';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemInspectNote';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemInspectNote';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the QcnoType field
     */
    const COL_QCNOTYPE = 'notes_item_inspect.QcnoType';

    /**
     * the column name for the QcnoTypeDesc field
     */
    const COL_QCNOTYPEDESC = 'notes_item_inspect.QcnoTypeDesc';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'notes_item_inspect.InitItemNbr';

    /**
     * the column name for the QcnoDate field
     */
    const COL_QCNODATE = 'notes_item_inspect.QcnoDate';

    /**
     * the column name for the QcnoTime field
     */
    const COL_QCNOTIME = 'notes_item_inspect.QcnoTime';

    /**
     * the column name for the QcnoUser field
     */
    const COL_QCNOUSER = 'notes_item_inspect.QcnoUser';

    /**
     * the column name for the QcnoSeq field
     */
    const COL_QCNOSEQ = 'notes_item_inspect.QcnoSeq';

    /**
     * the column name for the QcnoNote field
     */
    const COL_QCNONOTE = 'notes_item_inspect.QcnoNote';

    /**
     * the column name for the QcnoKey2 field
     */
    const COL_QCNOKEY2 = 'notes_item_inspect.QcnoKey2';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'notes_item_inspect.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'notes_item_inspect.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'notes_item_inspect.dummy';

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
        self::TYPE_PHPNAME       => array('Qcnotype', 'Qcnotypedesc', 'Inititemnbr', 'Qcnodate', 'Qcnotime', 'Qcnouser', 'Qcnoseq', 'Qcnonote', 'Qcnokey2', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('qcnotype', 'qcnotypedesc', 'inititemnbr', 'qcnodate', 'qcnotime', 'qcnouser', 'qcnoseq', 'qcnonote', 'qcnokey2', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemInspectNoteTableMap::COL_QCNOTYPE, ItemInspectNoteTableMap::COL_QCNOTYPEDESC, ItemInspectNoteTableMap::COL_INITITEMNBR, ItemInspectNoteTableMap::COL_QCNODATE, ItemInspectNoteTableMap::COL_QCNOTIME, ItemInspectNoteTableMap::COL_QCNOUSER, ItemInspectNoteTableMap::COL_QCNOSEQ, ItemInspectNoteTableMap::COL_QCNONOTE, ItemInspectNoteTableMap::COL_QCNOKEY2, ItemInspectNoteTableMap::COL_DATEUPDTD, ItemInspectNoteTableMap::COL_TIMEUPDTD, ItemInspectNoteTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('QcnoType', 'QcnoTypeDesc', 'InitItemNbr', 'QcnoDate', 'QcnoTime', 'QcnoUser', 'QcnoSeq', 'QcnoNote', 'QcnoKey2', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Qcnotype' => 0, 'Qcnotypedesc' => 1, 'Inititemnbr' => 2, 'Qcnodate' => 3, 'Qcnotime' => 4, 'Qcnouser' => 5, 'Qcnoseq' => 6, 'Qcnonote' => 7, 'Qcnokey2' => 8, 'Dateupdtd' => 9, 'Timeupdtd' => 10, 'Dummy' => 11, ),
        self::TYPE_CAMELNAME     => array('qcnotype' => 0, 'qcnotypedesc' => 1, 'inititemnbr' => 2, 'qcnodate' => 3, 'qcnotime' => 4, 'qcnouser' => 5, 'qcnoseq' => 6, 'qcnonote' => 7, 'qcnokey2' => 8, 'dateupdtd' => 9, 'timeupdtd' => 10, 'dummy' => 11, ),
        self::TYPE_COLNAME       => array(ItemInspectNoteTableMap::COL_QCNOTYPE => 0, ItemInspectNoteTableMap::COL_QCNOTYPEDESC => 1, ItemInspectNoteTableMap::COL_INITITEMNBR => 2, ItemInspectNoteTableMap::COL_QCNODATE => 3, ItemInspectNoteTableMap::COL_QCNOTIME => 4, ItemInspectNoteTableMap::COL_QCNOUSER => 5, ItemInspectNoteTableMap::COL_QCNOSEQ => 6, ItemInspectNoteTableMap::COL_QCNONOTE => 7, ItemInspectNoteTableMap::COL_QCNOKEY2 => 8, ItemInspectNoteTableMap::COL_DATEUPDTD => 9, ItemInspectNoteTableMap::COL_TIMEUPDTD => 10, ItemInspectNoteTableMap::COL_DUMMY => 11, ),
        self::TYPE_FIELDNAME     => array('QcnoType' => 0, 'QcnoTypeDesc' => 1, 'InitItemNbr' => 2, 'QcnoDate' => 3, 'QcnoTime' => 4, 'QcnoUser' => 5, 'QcnoSeq' => 6, 'QcnoNote' => 7, 'QcnoKey2' => 8, 'DateUpdtd' => 9, 'TimeUpdtd' => 10, 'dummy' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $this->setName('notes_item_inspect');
        $this->setPhpName('ItemInspectNote');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemInspectNote');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QcnoType', 'Qcnotype', 'VARCHAR', true, 4, '');
        $this->addColumn('QcnoTypeDesc', 'Qcnotypedesc', 'VARCHAR', false, 40, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addPrimaryKey('QcnoDate', 'Qcnodate', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('QcnoTime', 'Qcnotime', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('QcnoUser', 'Qcnouser', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('QcnoSeq', 'Qcnoseq', 'INTEGER', true, 8, 0);
        $this->addColumn('QcnoNote', 'Qcnonote', 'VARCHAR', false, 80, null);
        $this->addPrimaryKey('QcnoKey2', 'Qcnokey2', 'VARCHAR', true, 84, '');
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
     * @param \ItemInspectNote $obj A \ItemInspectNote object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getQcnotype() || is_scalar($obj->getQcnotype()) || is_callable([$obj->getQcnotype(), '__toString']) ? (string) $obj->getQcnotype() : $obj->getQcnotype()), (null === $obj->getQcnodate() || is_scalar($obj->getQcnodate()) || is_callable([$obj->getQcnodate(), '__toString']) ? (string) $obj->getQcnodate() : $obj->getQcnodate()), (null === $obj->getQcnotime() || is_scalar($obj->getQcnotime()) || is_callable([$obj->getQcnotime(), '__toString']) ? (string) $obj->getQcnotime() : $obj->getQcnotime()), (null === $obj->getQcnouser() || is_scalar($obj->getQcnouser()) || is_callable([$obj->getQcnouser(), '__toString']) ? (string) $obj->getQcnouser() : $obj->getQcnouser()), (null === $obj->getQcnoseq() || is_scalar($obj->getQcnoseq()) || is_callable([$obj->getQcnoseq(), '__toString']) ? (string) $obj->getQcnoseq() : $obj->getQcnoseq()), (null === $obj->getQcnokey2() || is_scalar($obj->getQcnokey2()) || is_callable([$obj->getQcnokey2(), '__toString']) ? (string) $obj->getQcnokey2() : $obj->getQcnokey2())]);
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
     * @param mixed $value A \ItemInspectNote object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemInspectNote) {
                $key = serialize([(null === $value->getQcnotype() || is_scalar($value->getQcnotype()) || is_callable([$value->getQcnotype(), '__toString']) ? (string) $value->getQcnotype() : $value->getQcnotype()), (null === $value->getQcnodate() || is_scalar($value->getQcnodate()) || is_callable([$value->getQcnodate(), '__toString']) ? (string) $value->getQcnodate() : $value->getQcnodate()), (null === $value->getQcnotime() || is_scalar($value->getQcnotime()) || is_callable([$value->getQcnotime(), '__toString']) ? (string) $value->getQcnotime() : $value->getQcnotime()), (null === $value->getQcnouser() || is_scalar($value->getQcnouser()) || is_callable([$value->getQcnouser(), '__toString']) ? (string) $value->getQcnouser() : $value->getQcnouser()), (null === $value->getQcnoseq() || is_scalar($value->getQcnoseq()) || is_callable([$value->getQcnoseq(), '__toString']) ? (string) $value->getQcnoseq() : $value->getQcnoseq()), (null === $value->getQcnokey2() || is_scalar($value->getQcnokey2()) || is_callable([$value->getQcnokey2(), '__toString']) ? (string) $value->getQcnokey2() : $value->getQcnokey2())]);

            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemInspectNote object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Qcnotype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Qcnodate', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Qcnotime', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Qcnouser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Qcnoseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 8 + $offset
                : self::translateFieldName('Qcnokey2', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemInspectNoteTableMap::CLASS_DEFAULT : ItemInspectNoteTableMap::OM_CLASS;
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
     * @return array           (ItemInspectNote object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemInspectNoteTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemInspectNoteTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemInspectNoteTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemInspectNoteTableMap::OM_CLASS;
            /** @var ItemInspectNote $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemInspectNoteTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemInspectNoteTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemInspectNoteTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemInspectNote $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemInspectNoteTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNOTYPE);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNOTYPEDESC);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNODATE);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNOTIME);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNOUSER);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNOSEQ);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNONOTE);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_QCNOKEY2);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemInspectNoteTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QcnoType');
            $criteria->addSelectColumn($alias . '.QcnoTypeDesc');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.QcnoDate');
            $criteria->addSelectColumn($alias . '.QcnoTime');
            $criteria->addSelectColumn($alias . '.QcnoUser');
            $criteria->addSelectColumn($alias . '.QcnoSeq');
            $criteria->addSelectColumn($alias . '.QcnoNote');
            $criteria->addSelectColumn($alias . '.QcnoKey2');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemInspectNoteTableMap::DATABASE_NAME)->getTable(ItemInspectNoteTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemInspectNoteTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemInspectNoteTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemInspectNoteTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemInspectNote or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemInspectNote object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemInspectNote) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemInspectNoteTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemInspectNoteTableMap::COL_QCNODATE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOTIME, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOUSER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOSEQ, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOKEY2, $value[5]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemInspectNoteQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemInspectNoteTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemInspectNoteTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_item_inspect table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemInspectNoteQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemInspectNote or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemInspectNote object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemInspectNote object
        }


        // Set the correct dbName
        $query = ItemInspectNoteQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemInspectNoteTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemInspectNoteTableMap::buildTableMap();
