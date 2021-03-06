<?php

namespace Map;

use \SalesHistoryNotes;
use \SalesHistoryNotesQuery;
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
 * This class defines the structure of the 'notes_sh_head_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesHistoryNotesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesHistoryNotesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'notes_sh_head_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesHistoryNotes';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesHistoryNotes';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the ShntType field
     */
    const COL_SHNTTYPE = 'notes_sh_head_det.ShntType';

    /**
     * the column name for the ShntTypeDesc field
     */
    const COL_SHNTTYPEDESC = 'notes_sh_head_det.ShntTypeDesc';

    /**
     * the column name for the OehhNbr field
     */
    const COL_OEHHNBR = 'notes_sh_head_det.OehhNbr';

    /**
     * the column name for the ShntYear field
     */
    const COL_SHNTYEAR = 'notes_sh_head_det.ShntYear';

    /**
     * the column name for the OedhLine field
     */
    const COL_OEDHLINE = 'notes_sh_head_det.OedhLine';

    /**
     * the column name for the ShntLotSer field
     */
    const COL_SHNTLOTSER = 'notes_sh_head_det.ShntLotSer';

    /**
     * the column name for the ShntPickTicket field
     */
    const COL_SHNTPICKTICKET = 'notes_sh_head_det.ShntPickTicket';

    /**
     * the column name for the ShntPackTicket field
     */
    const COL_SHNTPACKTICKET = 'notes_sh_head_det.ShntPackTicket';

    /**
     * the column name for the ShntInvoice field
     */
    const COL_SHNTINVOICE = 'notes_sh_head_det.ShntInvoice';

    /**
     * the column name for the ShntAcknow field
     */
    const COL_SHNTACKNOW = 'notes_sh_head_det.ShntAcknow';

    /**
     * the column name for the ShntSeq field
     */
    const COL_SHNTSEQ = 'notes_sh_head_det.ShntSeq';

    /**
     * the column name for the ShntNote field
     */
    const COL_SHNTNOTE = 'notes_sh_head_det.ShntNote';

    /**
     * the column name for the ShntKey2 field
     */
    const COL_SHNTKEY2 = 'notes_sh_head_det.ShntKey2';

    /**
     * the column name for the ShntForm field
     */
    const COL_SHNTFORM = 'notes_sh_head_det.ShntForm';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'notes_sh_head_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'notes_sh_head_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'notes_sh_head_det.dummy';

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
        self::TYPE_PHPNAME       => array('Shnttype', 'Shnttypedesc', 'Oehhnbr', 'Shntyear', 'Oedhline', 'Shntlotser', 'Shntpickticket', 'Shntpackticket', 'Shntinvoice', 'Shntacknow', 'Shntseq', 'Shntnote', 'Shntkey2', 'Shntform', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('shnttype', 'shnttypedesc', 'oehhnbr', 'shntyear', 'oedhline', 'shntlotser', 'shntpickticket', 'shntpackticket', 'shntinvoice', 'shntacknow', 'shntseq', 'shntnote', 'shntkey2', 'shntform', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesHistoryNotesTableMap::COL_SHNTTYPE, SalesHistoryNotesTableMap::COL_SHNTTYPEDESC, SalesHistoryNotesTableMap::COL_OEHHNBR, SalesHistoryNotesTableMap::COL_SHNTYEAR, SalesHistoryNotesTableMap::COL_OEDHLINE, SalesHistoryNotesTableMap::COL_SHNTLOTSER, SalesHistoryNotesTableMap::COL_SHNTPICKTICKET, SalesHistoryNotesTableMap::COL_SHNTPACKTICKET, SalesHistoryNotesTableMap::COL_SHNTINVOICE, SalesHistoryNotesTableMap::COL_SHNTACKNOW, SalesHistoryNotesTableMap::COL_SHNTSEQ, SalesHistoryNotesTableMap::COL_SHNTNOTE, SalesHistoryNotesTableMap::COL_SHNTKEY2, SalesHistoryNotesTableMap::COL_SHNTFORM, SalesHistoryNotesTableMap::COL_DATEUPDTD, SalesHistoryNotesTableMap::COL_TIMEUPDTD, SalesHistoryNotesTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ShntType', 'ShntTypeDesc', 'OehhNbr', 'ShntYear', 'OedhLine', 'ShntLotSer', 'ShntPickTicket', 'ShntPackTicket', 'ShntInvoice', 'ShntAcknow', 'ShntSeq', 'ShntNote', 'ShntKey2', 'ShntForm', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Shnttype' => 0, 'Shnttypedesc' => 1, 'Oehhnbr' => 2, 'Shntyear' => 3, 'Oedhline' => 4, 'Shntlotser' => 5, 'Shntpickticket' => 6, 'Shntpackticket' => 7, 'Shntinvoice' => 8, 'Shntacknow' => 9, 'Shntseq' => 10, 'Shntnote' => 11, 'Shntkey2' => 12, 'Shntform' => 13, 'Dateupdtd' => 14, 'Timeupdtd' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('shnttype' => 0, 'shnttypedesc' => 1, 'oehhnbr' => 2, 'shntyear' => 3, 'oedhline' => 4, 'shntlotser' => 5, 'shntpickticket' => 6, 'shntpackticket' => 7, 'shntinvoice' => 8, 'shntacknow' => 9, 'shntseq' => 10, 'shntnote' => 11, 'shntkey2' => 12, 'shntform' => 13, 'dateupdtd' => 14, 'timeupdtd' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(SalesHistoryNotesTableMap::COL_SHNTTYPE => 0, SalesHistoryNotesTableMap::COL_SHNTTYPEDESC => 1, SalesHistoryNotesTableMap::COL_OEHHNBR => 2, SalesHistoryNotesTableMap::COL_SHNTYEAR => 3, SalesHistoryNotesTableMap::COL_OEDHLINE => 4, SalesHistoryNotesTableMap::COL_SHNTLOTSER => 5, SalesHistoryNotesTableMap::COL_SHNTPICKTICKET => 6, SalesHistoryNotesTableMap::COL_SHNTPACKTICKET => 7, SalesHistoryNotesTableMap::COL_SHNTINVOICE => 8, SalesHistoryNotesTableMap::COL_SHNTACKNOW => 9, SalesHistoryNotesTableMap::COL_SHNTSEQ => 10, SalesHistoryNotesTableMap::COL_SHNTNOTE => 11, SalesHistoryNotesTableMap::COL_SHNTKEY2 => 12, SalesHistoryNotesTableMap::COL_SHNTFORM => 13, SalesHistoryNotesTableMap::COL_DATEUPDTD => 14, SalesHistoryNotesTableMap::COL_TIMEUPDTD => 15, SalesHistoryNotesTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('ShntType' => 0, 'ShntTypeDesc' => 1, 'OehhNbr' => 2, 'ShntYear' => 3, 'OedhLine' => 4, 'ShntLotSer' => 5, 'ShntPickTicket' => 6, 'ShntPackTicket' => 7, 'ShntInvoice' => 8, 'ShntAcknow' => 9, 'ShntSeq' => 10, 'ShntNote' => 11, 'ShntKey2' => 12, 'ShntForm' => 13, 'DateUpdtd' => 14, 'TimeUpdtd' => 15, 'dummy' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('notes_sh_head_det');
        $this->setPhpName('SalesHistoryNotes');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesHistoryNotes');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ShntType', 'Shnttype', 'VARCHAR', true, 4, '');
        $this->addColumn('ShntTypeDesc', 'Shnttypedesc', 'VARCHAR', false, 40, null);
        $this->addColumn('OehhNbr', 'Oehhnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('ShntYear', 'Shntyear', 'VARCHAR', false, 4, null);
        $this->addColumn('OedhLine', 'Oedhline', 'INTEGER', false, 4, null);
        $this->addColumn('ShntLotSer', 'Shntlotser', 'VARCHAR', false, 20, null);
        $this->addColumn('ShntPickTicket', 'Shntpickticket', 'VARCHAR', false, 1, null);
        $this->addColumn('ShntPackTicket', 'Shntpackticket', 'VARCHAR', false, 1, null);
        $this->addColumn('ShntInvoice', 'Shntinvoice', 'VARCHAR', false, 1, null);
        $this->addColumn('ShntAcknow', 'Shntacknow', 'VARCHAR', false, 1, null);
        $this->addPrimaryKey('ShntSeq', 'Shntseq', 'INTEGER', true, 8, 0);
        $this->addColumn('ShntNote', 'Shntnote', 'VARCHAR', false, 150, null);
        $this->addPrimaryKey('ShntKey2', 'Shntkey2', 'VARCHAR', true, 50, '');
        $this->addPrimaryKey('ShntForm', 'Shntform', 'VARCHAR', true, 8, '');
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
     * @param \SalesHistoryNotes $obj A \SalesHistoryNotes object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getShnttype() || is_scalar($obj->getShnttype()) || is_callable([$obj->getShnttype(), '__toString']) ? (string) $obj->getShnttype() : $obj->getShnttype()), (null === $obj->getShntseq() || is_scalar($obj->getShntseq()) || is_callable([$obj->getShntseq(), '__toString']) ? (string) $obj->getShntseq() : $obj->getShntseq()), (null === $obj->getShntkey2() || is_scalar($obj->getShntkey2()) || is_callable([$obj->getShntkey2(), '__toString']) ? (string) $obj->getShntkey2() : $obj->getShntkey2()), (null === $obj->getShntform() || is_scalar($obj->getShntform()) || is_callable([$obj->getShntform(), '__toString']) ? (string) $obj->getShntform() : $obj->getShntform())]);
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
     * @param mixed $value A \SalesHistoryNotes object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesHistoryNotes) {
                $key = serialize([(null === $value->getShnttype() || is_scalar($value->getShnttype()) || is_callable([$value->getShnttype(), '__toString']) ? (string) $value->getShnttype() : $value->getShnttype()), (null === $value->getShntseq() || is_scalar($value->getShntseq()) || is_callable([$value->getShntseq(), '__toString']) ? (string) $value->getShntseq() : $value->getShntseq()), (null === $value->getShntkey2() || is_scalar($value->getShntkey2()) || is_callable([$value->getShntkey2(), '__toString']) ? (string) $value->getShntkey2() : $value->getShntkey2()), (null === $value->getShntform() || is_scalar($value->getShntform()) || is_callable([$value->getShntform(), '__toString']) ? (string) $value->getShntform() : $value->getShntform())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesHistoryNotes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Shnttype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 10 + $offset
                : self::translateFieldName('Shntseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 12 + $offset
                : self::translateFieldName('Shntkey2', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 13 + $offset
                : self::translateFieldName('Shntform', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesHistoryNotesTableMap::CLASS_DEFAULT : SalesHistoryNotesTableMap::OM_CLASS;
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
     * @return array           (SalesHistoryNotes object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesHistoryNotesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesHistoryNotesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesHistoryNotesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesHistoryNotesTableMap::OM_CLASS;
            /** @var SalesHistoryNotes $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesHistoryNotesTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesHistoryNotesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesHistoryNotesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesHistoryNotes $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesHistoryNotesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTTYPE);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTTYPEDESC);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_OEHHNBR);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTYEAR);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_OEDHLINE);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTLOTSER);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTPICKTICKET);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTPACKTICKET);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTINVOICE);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTACKNOW);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTSEQ);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTNOTE);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTKEY2);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_SHNTFORM);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesHistoryNotesTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ShntType');
            $criteria->addSelectColumn($alias . '.ShntTypeDesc');
            $criteria->addSelectColumn($alias . '.OehhNbr');
            $criteria->addSelectColumn($alias . '.ShntYear');
            $criteria->addSelectColumn($alias . '.OedhLine');
            $criteria->addSelectColumn($alias . '.ShntLotSer');
            $criteria->addSelectColumn($alias . '.ShntPickTicket');
            $criteria->addSelectColumn($alias . '.ShntPackTicket');
            $criteria->addSelectColumn($alias . '.ShntInvoice');
            $criteria->addSelectColumn($alias . '.ShntAcknow');
            $criteria->addSelectColumn($alias . '.ShntSeq');
            $criteria->addSelectColumn($alias . '.ShntNote');
            $criteria->addSelectColumn($alias . '.ShntKey2');
            $criteria->addSelectColumn($alias . '.ShntForm');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesHistoryNotesTableMap::DATABASE_NAME)->getTable(SalesHistoryNotesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesHistoryNotesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesHistoryNotesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesHistoryNotesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesHistoryNotes or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesHistoryNotes object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryNotesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesHistoryNotes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesHistoryNotesTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesHistoryNotesTableMap::COL_SHNTTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryNotesTableMap::COL_SHNTSEQ, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryNotesTableMap::COL_SHNTKEY2, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SalesHistoryNotesTableMap::COL_SHNTFORM, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesHistoryNotesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesHistoryNotesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesHistoryNotesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_sh_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesHistoryNotesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesHistoryNotes or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesHistoryNotes object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryNotesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesHistoryNotes object
        }


        // Set the correct dbName
        $query = SalesHistoryNotesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesHistoryNotesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesHistoryNotesTableMap::buildTableMap();
