<?php

namespace Map;

use \PurchaseOrderNoteInternal;
use \PurchaseOrderNoteInternalQuery;
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
 * This class defines the structure of the 'notes_po_internal' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PurchaseOrderNoteInternalTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PurchaseOrderNoteInternalTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'notes_po_internal';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\PurchaseOrderNoteInternal';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'PurchaseOrderNoteInternal';

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
     * the column name for the PontType field
     */
    const COL_PONTTYPE = 'notes_po_internal.PontType';

    /**
     * the column name for the PontTypeDesc field
     */
    const COL_PONTTYPEDESC = 'notes_po_internal.PontTypeDesc';

    /**
     * the column name for the PohdNbr field
     */
    const COL_POHDNBR = 'notes_po_internal.PohdNbr';

    /**
     * the column name for the PodtLine field
     */
    const COL_PODTLINE = 'notes_po_internal.PodtLine';

    /**
     * the column name for the PontIntlDate field
     */
    const COL_PONTINTLDATE = 'notes_po_internal.PontIntlDate';

    /**
     * the column name for the PontIntlTime field
     */
    const COL_PONTINTLTIME = 'notes_po_internal.PontIntlTime';

    /**
     * the column name for the PontIntlUser field
     */
    const COL_PONTINTLUSER = 'notes_po_internal.PontIntlUser';

    /**
     * the column name for the PontForm field
     */
    const COL_PONTFORM = 'notes_po_internal.PontForm';

    /**
     * the column name for the PontSeq field
     */
    const COL_PONTSEQ = 'notes_po_internal.PontSeq';

    /**
     * the column name for the PontNote field
     */
    const COL_PONTNOTE = 'notes_po_internal.PontNote';

    /**
     * the column name for the PontKey2 field
     */
    const COL_PONTKEY2 = 'notes_po_internal.PontKey2';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'notes_po_internal.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'notes_po_internal.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'notes_po_internal.dummy';

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
        self::TYPE_PHPNAME       => array('Ponttype', 'Ponttypedesc', 'Pohdnbr', 'Podtline', 'Pontintldate', 'Pontintltime', 'Pontintluser', 'Pontform', 'Pontseq', 'Pontnote', 'Pontkey2', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('ponttype', 'ponttypedesc', 'pohdnbr', 'podtline', 'pontintldate', 'pontintltime', 'pontintluser', 'pontform', 'pontseq', 'pontnote', 'pontkey2', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE, PurchaseOrderNoteInternalTableMap::COL_PONTTYPEDESC, PurchaseOrderNoteInternalTableMap::COL_POHDNBR, PurchaseOrderNoteInternalTableMap::COL_PODTLINE, PurchaseOrderNoteInternalTableMap::COL_PONTINTLDATE, PurchaseOrderNoteInternalTableMap::COL_PONTINTLTIME, PurchaseOrderNoteInternalTableMap::COL_PONTINTLUSER, PurchaseOrderNoteInternalTableMap::COL_PONTFORM, PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, PurchaseOrderNoteInternalTableMap::COL_PONTNOTE, PurchaseOrderNoteInternalTableMap::COL_PONTKEY2, PurchaseOrderNoteInternalTableMap::COL_DATEUPDTD, PurchaseOrderNoteInternalTableMap::COL_TIMEUPDTD, PurchaseOrderNoteInternalTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PontType', 'PontTypeDesc', 'PohdNbr', 'PodtLine', 'PontIntlDate', 'PontIntlTime', 'PontIntlUser', 'PontForm', 'PontSeq', 'PontNote', 'PontKey2', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Ponttype' => 0, 'Ponttypedesc' => 1, 'Pohdnbr' => 2, 'Podtline' => 3, 'Pontintldate' => 4, 'Pontintltime' => 5, 'Pontintluser' => 6, 'Pontform' => 7, 'Pontseq' => 8, 'Pontnote' => 9, 'Pontkey2' => 10, 'Dateupdtd' => 11, 'Timeupdtd' => 12, 'Dummy' => 13, ),
        self::TYPE_CAMELNAME     => array('ponttype' => 0, 'ponttypedesc' => 1, 'pohdnbr' => 2, 'podtline' => 3, 'pontintldate' => 4, 'pontintltime' => 5, 'pontintluser' => 6, 'pontform' => 7, 'pontseq' => 8, 'pontnote' => 9, 'pontkey2' => 10, 'dateupdtd' => 11, 'timeupdtd' => 12, 'dummy' => 13, ),
        self::TYPE_COLNAME       => array(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE => 0, PurchaseOrderNoteInternalTableMap::COL_PONTTYPEDESC => 1, PurchaseOrderNoteInternalTableMap::COL_POHDNBR => 2, PurchaseOrderNoteInternalTableMap::COL_PODTLINE => 3, PurchaseOrderNoteInternalTableMap::COL_PONTINTLDATE => 4, PurchaseOrderNoteInternalTableMap::COL_PONTINTLTIME => 5, PurchaseOrderNoteInternalTableMap::COL_PONTINTLUSER => 6, PurchaseOrderNoteInternalTableMap::COL_PONTFORM => 7, PurchaseOrderNoteInternalTableMap::COL_PONTSEQ => 8, PurchaseOrderNoteInternalTableMap::COL_PONTNOTE => 9, PurchaseOrderNoteInternalTableMap::COL_PONTKEY2 => 10, PurchaseOrderNoteInternalTableMap::COL_DATEUPDTD => 11, PurchaseOrderNoteInternalTableMap::COL_TIMEUPDTD => 12, PurchaseOrderNoteInternalTableMap::COL_DUMMY => 13, ),
        self::TYPE_FIELDNAME     => array('PontType' => 0, 'PontTypeDesc' => 1, 'PohdNbr' => 2, 'PodtLine' => 3, 'PontIntlDate' => 4, 'PontIntlTime' => 5, 'PontIntlUser' => 6, 'PontForm' => 7, 'PontSeq' => 8, 'PontNote' => 9, 'PontKey2' => 10, 'DateUpdtd' => 11, 'TimeUpdtd' => 12, 'dummy' => 13, ),
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
        $this->setName('notes_po_internal');
        $this->setPhpName('PurchaseOrderNoteInternal');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PurchaseOrderNoteInternal');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PontType', 'Ponttype', 'VARCHAR', true, 4, '');
        $this->addColumn('PontTypeDesc', 'Ponttypedesc', 'VARCHAR', false, 40, null);
        $this->addColumn('PohdNbr', 'Pohdnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtLine', 'Podtline', 'INTEGER', false, 4, null);
        $this->addColumn('PontIntlDate', 'Pontintldate', 'VARCHAR', false, 8, null);
        $this->addColumn('PontIntlTime', 'Pontintltime', 'VARCHAR', false, 8, null);
        $this->addColumn('PontIntlUser', 'Pontintluser', 'VARCHAR', false, 8, null);
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
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \PurchaseOrderNoteInternal $obj A \PurchaseOrderNoteInternal object.
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
     * @param mixed $value A \PurchaseOrderNoteInternal object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \PurchaseOrderNoteInternal) {
                $key = serialize([(null === $value->getPonttype() || is_scalar($value->getPonttype()) || is_callable([$value->getPonttype(), '__toString']) ? (string) $value->getPonttype() : $value->getPonttype()), (null === $value->getPontform() || is_scalar($value->getPontform()) || is_callable([$value->getPontform(), '__toString']) ? (string) $value->getPontform() : $value->getPontform()), (null === $value->getPontseq() || is_scalar($value->getPontseq()) || is_callable([$value->getPontseq(), '__toString']) ? (string) $value->getPontseq() : $value->getPontseq()), (null === $value->getPontkey2() || is_scalar($value->getPontkey2()) || is_callable([$value->getPontkey2(), '__toString']) ? (string) $value->getPontkey2() : $value->getPontkey2())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \PurchaseOrderNoteInternal object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Ponttype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 7 + $offset : static::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Pontkey2', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 7 + $offset
                : self::translateFieldName('Pontform', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 8 + $offset
                : self::translateFieldName('Pontseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 10 + $offset
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
        return $withPrefix ? PurchaseOrderNoteInternalTableMap::CLASS_DEFAULT : PurchaseOrderNoteInternalTableMap::OM_CLASS;
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
     * @return array           (PurchaseOrderNoteInternal object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PurchaseOrderNoteInternalTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PurchaseOrderNoteInternalTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PurchaseOrderNoteInternalTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PurchaseOrderNoteInternalTableMap::OM_CLASS;
            /** @var PurchaseOrderNoteInternal $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PurchaseOrderNoteInternalTableMap::addInstanceToPool($obj, $key);
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
            $key = PurchaseOrderNoteInternalTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PurchaseOrderNoteInternalTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PurchaseOrderNoteInternal $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PurchaseOrderNoteInternalTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTTYPEDESC);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_POHDNBR);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PODTLINE);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTINTLDATE);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTINTLTIME);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTINTLUSER);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTFORM);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTNOTE);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_PONTKEY2);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderNoteInternalTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PontType');
            $criteria->addSelectColumn($alias . '.PontTypeDesc');
            $criteria->addSelectColumn($alias . '.PohdNbr');
            $criteria->addSelectColumn($alias . '.PodtLine');
            $criteria->addSelectColumn($alias . '.PontIntlDate');
            $criteria->addSelectColumn($alias . '.PontIntlTime');
            $criteria->addSelectColumn($alias . '.PontIntlUser');
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
        return Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderNoteInternalTableMap::DATABASE_NAME)->getTable(PurchaseOrderNoteInternalTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PurchaseOrderNoteInternalTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PurchaseOrderNoteInternalTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a PurchaseOrderNoteInternal or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PurchaseOrderNoteInternal object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PurchaseOrderNoteInternal) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTFORM, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTKEY2, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = PurchaseOrderNoteInternalQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PurchaseOrderNoteInternalTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PurchaseOrderNoteInternalTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_po_internal table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PurchaseOrderNoteInternalQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PurchaseOrderNoteInternal or Criteria object.
     *
     * @param mixed               $criteria Criteria or PurchaseOrderNoteInternal object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PurchaseOrderNoteInternal object
        }


        // Set the correct dbName
        $query = PurchaseOrderNoteInternalQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PurchaseOrderNoteInternalTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PurchaseOrderNoteInternalTableMap::buildTableMap();
