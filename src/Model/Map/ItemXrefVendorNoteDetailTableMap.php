<?php

namespace Map;

use \ItemXrefVendorNoteDetail;
use \ItemXrefVendorNoteDetailQuery;
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
 * This class defines the structure of the 'notes_vend_xref_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ItemXrefVendorNoteDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemXrefVendorNoteDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'notes_vend_xref_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ItemXrefVendorNoteDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemXrefVendorNoteDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the PontType field
     */
    const COL_PONTTYPE = 'notes_vend_xref_det.PontType';

    /**
     * the column name for the PontTypeDesc field
     */
    const COL_PONTTYPEDESC = 'notes_vend_xref_det.PontTypeDesc';

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'notes_vend_xref_det.ApveVendId';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'notes_vend_xref_det.InitItemNbr';

    /**
     * the column name for the PontForm field
     */
    const COL_PONTFORM = 'notes_vend_xref_det.PontForm';

    /**
     * the column name for the PontSeq field
     */
    const COL_PONTSEQ = 'notes_vend_xref_det.PontSeq';

    /**
     * the column name for the PontNote field
     */
    const COL_PONTNOTE = 'notes_vend_xref_det.PontNote';

    /**
     * the column name for the PontKey2 field
     */
    const COL_PONTKEY2 = 'notes_vend_xref_det.PontKey2';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'notes_vend_xref_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'notes_vend_xref_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'notes_vend_xref_det.dummy';

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
        self::TYPE_PHPNAME       => array('Ponttype', 'Ponttypedesc', 'Apvevendid', 'InitItemNbr', 'Pontform', 'Pontseq', 'Pontnote', 'Pontkey2', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('ponttype', 'ponttypedesc', 'apvevendid', 'initItemNbr', 'pontform', 'pontseq', 'pontnote', 'pontkey2', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE, ItemXrefVendorNoteDetailTableMap::COL_PONTTYPEDESC, ItemXrefVendorNoteDetailTableMap::COL_APVEVENDID, ItemXrefVendorNoteDetailTableMap::COL_INITITEMNBR, ItemXrefVendorNoteDetailTableMap::COL_PONTFORM, ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, ItemXrefVendorNoteDetailTableMap::COL_PONTNOTE, ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2, ItemXrefVendorNoteDetailTableMap::COL_DATEUPDTD, ItemXrefVendorNoteDetailTableMap::COL_TIMEUPDTD, ItemXrefVendorNoteDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PontType', 'PontTypeDesc', 'ApveVendId', 'InitItemNbr', 'PontForm', 'PontSeq', 'PontNote', 'PontKey2', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Ponttype' => 0, 'Ponttypedesc' => 1, 'Apvevendid' => 2, 'InitItemNbr' => 3, 'Pontform' => 4, 'Pontseq' => 5, 'Pontnote' => 6, 'Pontkey2' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ),
        self::TYPE_CAMELNAME     => array('ponttype' => 0, 'ponttypedesc' => 1, 'apvevendid' => 2, 'initItemNbr' => 3, 'pontform' => 4, 'pontseq' => 5, 'pontnote' => 6, 'pontkey2' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ),
        self::TYPE_COLNAME       => array(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE => 0, ItemXrefVendorNoteDetailTableMap::COL_PONTTYPEDESC => 1, ItemXrefVendorNoteDetailTableMap::COL_APVEVENDID => 2, ItemXrefVendorNoteDetailTableMap::COL_INITITEMNBR => 3, ItemXrefVendorNoteDetailTableMap::COL_PONTFORM => 4, ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ => 5, ItemXrefVendorNoteDetailTableMap::COL_PONTNOTE => 6, ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2 => 7, ItemXrefVendorNoteDetailTableMap::COL_DATEUPDTD => 8, ItemXrefVendorNoteDetailTableMap::COL_TIMEUPDTD => 9, ItemXrefVendorNoteDetailTableMap::COL_DUMMY => 10, ),
        self::TYPE_FIELDNAME     => array('PontType' => 0, 'PontTypeDesc' => 1, 'ApveVendId' => 2, 'InitItemNbr' => 3, 'PontForm' => 4, 'PontSeq' => 5, 'PontNote' => 6, 'PontKey2' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->setName('notes_vend_xref_det');
        $this->setPhpName('ItemXrefVendorNoteDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefVendorNoteDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PontType', 'Ponttype', 'VARCHAR', true, 4, '');
        $this->addColumn('PontTypeDesc', 'Ponttypedesc', 'VARCHAR', false, 40, null);
        $this->addForeignKey('ApveVendId', 'Apvevendid', 'VARCHAR', 'ap_vend_mast', 'ApveVendId', false, 6, null);
        $this->addForeignKey('InitItemNbr', 'InitItemNbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', false, 30, null);
        $this->addPrimaryKey('PontForm', 'Pontform', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('PontSeq', 'Pontseq', 'INTEGER', true, 8, 0);
        $this->addColumn('PontNote', 'Pontnote', 'VARCHAR', false, 150, null);
        $this->addPrimaryKey('PontKey2', 'Pontkey2', 'VARCHAR', true, 75, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Vendor', '\\Vendor', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ApveVendId',
    1 => ':ApveVendId',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ItemXrefVendorNoteDetail $obj A \ItemXrefVendorNoteDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPonttype() || is_scalar($obj->getPonttype()) || is_callable([$obj->getPonttype(), '__toString']) ? (string) $obj->getPonttype() : $obj->getPonttype()), (null === $obj->getPontform() || is_scalar($obj->getPontform()) || is_callable([$obj->getPontform(), '__toString']) ? (string) $obj->getPontform() : $obj->getPontform()), (null === $obj->getPontseq() || is_scalar($obj->getPontseq()) || is_callable([$obj->getPontseq(), '__toString']) ? (string) $obj->getPontseq() : $obj->getPontseq()), (null === $obj->getPontkey2() || is_scalar($obj->getPontkey2()) || is_callable([$obj->getPontkey2(), '__toString']) ? (string) $obj->getPontkey2() : $obj->getPontkey2())]);
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
     * @param mixed $value A \ItemXrefVendorNoteDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefVendorNoteDetail) {
                $key = serialize([(null === $value->getPonttype() || is_scalar($value->getPonttype()) || is_callable([$value->getPonttype(), '__toString']) ? (string) $value->getPonttype() : $value->getPonttype()), (null === $value->getPontform() || is_scalar($value->getPontform()) || is_callable([$value->getPontform(), '__toString']) ? (string) $value->getPontform() : $value->getPontform()), (null === $value->getPontseq() || is_scalar($value->getPontseq()) || is_callable([$value->getPontseq(), '__toString']) ? (string) $value->getPontseq() : $value->getPontseq()), (null === $value->getPontkey2() || is_scalar($value->getPontkey2()) || is_callable([$value->getPontkey2(), '__toString']) ? (string) $value->getPontkey2() : $value->getPontkey2())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefVendorNoteDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 7 + $offset
                : self::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ItemXrefVendorNoteDetailTableMap::CLASS_DEFAULT : ItemXrefVendorNoteDetailTableMap::OM_CLASS;
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
     * @return array           (ItemXrefVendorNoteDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemXrefVendorNoteDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefVendorNoteDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefVendorNoteDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefVendorNoteDetailTableMap::OM_CLASS;
            /** @var ItemXrefVendorNoteDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefVendorNoteDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefVendorNoteDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefVendorNoteDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefVendorNoteDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefVendorNoteDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPEDESC);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_PONTFORM);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_PONTNOTE);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefVendorNoteDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PontType');
            $criteria->addSelectColumn($alias . '.PontTypeDesc');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.PontForm');
            $criteria->addSelectColumn($alias . '.PontSeq');
            $criteria->addSelectColumn($alias . '.PontNote');
            $criteria->addSelectColumn($alias . '.PontKey2');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME)->getTable(ItemXrefVendorNoteDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemXrefVendorNoteDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemXrefVendorNoteDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefVendorNoteDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemXrefVendorNoteDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefVendorNoteDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTFORM, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefVendorNoteDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefVendorNoteDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefVendorNoteDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_vend_xref_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ItemXrefVendorNoteDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefVendorNoteDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemXrefVendorNoteDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefVendorNoteDetail object
        }


        // Set the correct dbName
        $query = ItemXrefVendorNoteDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemXrefVendorNoteDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemXrefVendorNoteDetailTableMap::buildTableMap();
