<?php

namespace Map;

use \BookingDetail;
use \BookingDetailQuery;
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
 * This class defines the structure of the 'so_book_log_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BookingDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.BookingDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_book_log_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\BookingDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'BookingDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 25;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 25;

    /**
     * the column name for the BklhOrdrBase field
     */
    const COL_BKLHORDRBASE = 'so_book_log_det.BklhOrdrBase';

    /**
     * the column name for the BkldOrigLine field
     */
    const COL_BKLDORIGLINE = 'so_book_log_det.BkldOrigLine';

    /**
     * the column name for the BkldSeq field
     */
    const COL_BKLDSEQ = 'so_book_log_det.BkldSeq';

    /**
     * the column name for the BkldOrdrNbr field
     */
    const COL_BKLDORDRNBR = 'so_book_log_det.BkldOrdrNbr';

    /**
     * the column name for the BkldTranDate field
     */
    const COL_BKLDTRANDATE = 'so_book_log_det.BkldTranDate';

    /**
     * the column name for the BkldTranTime field
     */
    const COL_BKLDTRANTIME = 'so_book_log_det.BkldTranTime';

    /**
     * the column name for the BkldLogIn field
     */
    const COL_BKLDLOGIN = 'so_book_log_det.BkldLogIn';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_book_log_det.InitItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'so_book_log_det.IntbWhse';

    /**
     * the column name for the BkldQty field
     */
    const COL_BKLDQTY = 'so_book_log_det.BkldQty';

    /**
     * the column name for the BkldUnitPric field
     */
    const COL_BKLDUNITPRIC = 'so_book_log_det.BkldUnitPric';

    /**
     * the column name for the BkldPgmRef field
     */
    const COL_BKLDPGMREF = 'so_book_log_det.BkldPgmRef';

    /**
     * the column name for the BkldReasCd field
     */
    const COL_BKLDREASCD = 'so_book_log_det.BkldReasCd';

    /**
     * the column name for the BkldBookDate field
     */
    const COL_BKLDBOOKDATE = 'so_book_log_det.BkldBookDate';

    /**
     * the column name for the BkldNsItemDesc1 field
     */
    const COL_BKLDNSITEMDESC1 = 'so_book_log_det.BkldNsItemDesc1';

    /**
     * the column name for the BkldNsItemGrup field
     */
    const COL_BKLDNSITEMGRUP = 'so_book_log_det.BkldNsItemGrup';

    /**
     * the column name for the BkldNsUom field
     */
    const COL_BKLDNSUOM = 'so_book_log_det.BkldNsUom';

    /**
     * the column name for the BkldNsVendId field
     */
    const COL_BKLDNSVENDID = 'so_book_log_det.BkldNsVendId';

    /**
     * the column name for the BkldQtyToShip field
     */
    const COL_BKLDQTYTOSHIP = 'so_book_log_det.BkldQtyToShip';

    /**
     * the column name for the BkldTaxCode field
     */
    const COL_BKLDTAXCODE = 'so_book_log_det.BkldTaxCode';

    /**
     * the column name for the BkldUnitCost field
     */
    const COL_BKLDUNITCOST = 'so_book_log_det.BkldUnitCost';

    /**
     * the column name for the BkldAcSuplyWhse field
     */
    const COL_BKLDACSUPLYWHSE = 'so_book_log_det.BkldAcSuplyWhse';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_book_log_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_book_log_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_book_log_det.dummy';

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
        self::TYPE_PHPNAME       => array('Bklhordrbase', 'Bkldorigline', 'Bkldseq', 'Bkldordrnbr', 'Bkldtrandate', 'Bkldtrantime', 'Bkldlogin', 'Inititemnbr', 'Intbwhse', 'Bkldqty', 'Bkldunitpric', 'Bkldpgmref', 'Bkldreascd', 'Bkldbookdate', 'Bkldnsitemdesc1', 'Bkldnsitemgrup', 'Bkldnsuom', 'Bkldnsvendid', 'Bkldqtytoship', 'Bkldtaxcode', 'Bkldunitcost', 'Bkldacsuplywhse', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('bklhordrbase', 'bkldorigline', 'bkldseq', 'bkldordrnbr', 'bkldtrandate', 'bkldtrantime', 'bkldlogin', 'inititemnbr', 'intbwhse', 'bkldqty', 'bkldunitpric', 'bkldpgmref', 'bkldreascd', 'bkldbookdate', 'bkldnsitemdesc1', 'bkldnsitemgrup', 'bkldnsuom', 'bkldnsvendid', 'bkldqtytoship', 'bkldtaxcode', 'bkldunitcost', 'bkldacsuplywhse', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(BookingDetailTableMap::COL_BKLHORDRBASE, BookingDetailTableMap::COL_BKLDORIGLINE, BookingDetailTableMap::COL_BKLDSEQ, BookingDetailTableMap::COL_BKLDORDRNBR, BookingDetailTableMap::COL_BKLDTRANDATE, BookingDetailTableMap::COL_BKLDTRANTIME, BookingDetailTableMap::COL_BKLDLOGIN, BookingDetailTableMap::COL_INITITEMNBR, BookingDetailTableMap::COL_INTBWHSE, BookingDetailTableMap::COL_BKLDQTY, BookingDetailTableMap::COL_BKLDUNITPRIC, BookingDetailTableMap::COL_BKLDPGMREF, BookingDetailTableMap::COL_BKLDREASCD, BookingDetailTableMap::COL_BKLDBOOKDATE, BookingDetailTableMap::COL_BKLDNSITEMDESC1, BookingDetailTableMap::COL_BKLDNSITEMGRUP, BookingDetailTableMap::COL_BKLDNSUOM, BookingDetailTableMap::COL_BKLDNSVENDID, BookingDetailTableMap::COL_BKLDQTYTOSHIP, BookingDetailTableMap::COL_BKLDTAXCODE, BookingDetailTableMap::COL_BKLDUNITCOST, BookingDetailTableMap::COL_BKLDACSUPLYWHSE, BookingDetailTableMap::COL_DATEUPDTD, BookingDetailTableMap::COL_TIMEUPDTD, BookingDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('BklhOrdrBase', 'BkldOrigLine', 'BkldSeq', 'BkldOrdrNbr', 'BkldTranDate', 'BkldTranTime', 'BkldLogIn', 'InitItemNbr', 'IntbWhse', 'BkldQty', 'BkldUnitPric', 'BkldPgmRef', 'BkldReasCd', 'BkldBookDate', 'BkldNsItemDesc1', 'BkldNsItemGrup', 'BkldNsUom', 'BkldNsVendId', 'BkldQtyToShip', 'BkldTaxCode', 'BkldUnitCost', 'BkldAcSuplyWhse', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Bklhordrbase' => 0, 'Bkldorigline' => 1, 'Bkldseq' => 2, 'Bkldordrnbr' => 3, 'Bkldtrandate' => 4, 'Bkldtrantime' => 5, 'Bkldlogin' => 6, 'Inititemnbr' => 7, 'Intbwhse' => 8, 'Bkldqty' => 9, 'Bkldunitpric' => 10, 'Bkldpgmref' => 11, 'Bkldreascd' => 12, 'Bkldbookdate' => 13, 'Bkldnsitemdesc1' => 14, 'Bkldnsitemgrup' => 15, 'Bkldnsuom' => 16, 'Bkldnsvendid' => 17, 'Bkldqtytoship' => 18, 'Bkldtaxcode' => 19, 'Bkldunitcost' => 20, 'Bkldacsuplywhse' => 21, 'Dateupdtd' => 22, 'Timeupdtd' => 23, 'Dummy' => 24, ),
        self::TYPE_CAMELNAME     => array('bklhordrbase' => 0, 'bkldorigline' => 1, 'bkldseq' => 2, 'bkldordrnbr' => 3, 'bkldtrandate' => 4, 'bkldtrantime' => 5, 'bkldlogin' => 6, 'inititemnbr' => 7, 'intbwhse' => 8, 'bkldqty' => 9, 'bkldunitpric' => 10, 'bkldpgmref' => 11, 'bkldreascd' => 12, 'bkldbookdate' => 13, 'bkldnsitemdesc1' => 14, 'bkldnsitemgrup' => 15, 'bkldnsuom' => 16, 'bkldnsvendid' => 17, 'bkldqtytoship' => 18, 'bkldtaxcode' => 19, 'bkldunitcost' => 20, 'bkldacsuplywhse' => 21, 'dateupdtd' => 22, 'timeupdtd' => 23, 'dummy' => 24, ),
        self::TYPE_COLNAME       => array(BookingDetailTableMap::COL_BKLHORDRBASE => 0, BookingDetailTableMap::COL_BKLDORIGLINE => 1, BookingDetailTableMap::COL_BKLDSEQ => 2, BookingDetailTableMap::COL_BKLDORDRNBR => 3, BookingDetailTableMap::COL_BKLDTRANDATE => 4, BookingDetailTableMap::COL_BKLDTRANTIME => 5, BookingDetailTableMap::COL_BKLDLOGIN => 6, BookingDetailTableMap::COL_INITITEMNBR => 7, BookingDetailTableMap::COL_INTBWHSE => 8, BookingDetailTableMap::COL_BKLDQTY => 9, BookingDetailTableMap::COL_BKLDUNITPRIC => 10, BookingDetailTableMap::COL_BKLDPGMREF => 11, BookingDetailTableMap::COL_BKLDREASCD => 12, BookingDetailTableMap::COL_BKLDBOOKDATE => 13, BookingDetailTableMap::COL_BKLDNSITEMDESC1 => 14, BookingDetailTableMap::COL_BKLDNSITEMGRUP => 15, BookingDetailTableMap::COL_BKLDNSUOM => 16, BookingDetailTableMap::COL_BKLDNSVENDID => 17, BookingDetailTableMap::COL_BKLDQTYTOSHIP => 18, BookingDetailTableMap::COL_BKLDTAXCODE => 19, BookingDetailTableMap::COL_BKLDUNITCOST => 20, BookingDetailTableMap::COL_BKLDACSUPLYWHSE => 21, BookingDetailTableMap::COL_DATEUPDTD => 22, BookingDetailTableMap::COL_TIMEUPDTD => 23, BookingDetailTableMap::COL_DUMMY => 24, ),
        self::TYPE_FIELDNAME     => array('BklhOrdrBase' => 0, 'BkldOrigLine' => 1, 'BkldSeq' => 2, 'BkldOrdrNbr' => 3, 'BkldTranDate' => 4, 'BkldTranTime' => 5, 'BkldLogIn' => 6, 'InitItemNbr' => 7, 'IntbWhse' => 8, 'BkldQty' => 9, 'BkldUnitPric' => 10, 'BkldPgmRef' => 11, 'BkldReasCd' => 12, 'BkldBookDate' => 13, 'BkldNsItemDesc1' => 14, 'BkldNsItemGrup' => 15, 'BkldNsUom' => 16, 'BkldNsVendId' => 17, 'BkldQtyToShip' => 18, 'BkldTaxCode' => 19, 'BkldUnitCost' => 20, 'BkldAcSuplyWhse' => 21, 'DateUpdtd' => 22, 'TimeUpdtd' => 23, 'dummy' => 24, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $this->setName('so_book_log_det');
        $this->setPhpName('BookingDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\BookingDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('BklhOrdrBase', 'Bklhordrbase', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('BkldOrigLine', 'Bkldorigline', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('BkldSeq', 'Bkldseq', 'INTEGER', true, 4, 0);
        $this->addColumn('BkldOrdrNbr', 'Bkldordrnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('BkldTranDate', 'Bkldtrandate', 'VARCHAR', false, 8, null);
        $this->addColumn('BkldTranTime', 'Bkldtrantime', 'VARCHAR', false, 8, null);
        $this->addColumn('BkldLogIn', 'Bkldlogin', 'VARCHAR', false, 8, null);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', false, 30, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('BkldQty', 'Bkldqty', 'DECIMAL', false, 20, null);
        $this->addColumn('BkldUnitPric', 'Bkldunitpric', 'DECIMAL', false, 20, null);
        $this->addColumn('BkldPgmRef', 'Bkldpgmref', 'VARCHAR', false, 8, null);
        $this->addColumn('BkldReasCd', 'Bkldreascd', 'VARCHAR', false, 2, null);
        $this->addColumn('BkldBookDate', 'Bkldbookdate', 'VARCHAR', false, 8, null);
        $this->addColumn('BkldNsItemDesc1', 'Bkldnsitemdesc1', 'VARCHAR', false, 35, null);
        $this->addColumn('BkldNsItemGrup', 'Bkldnsitemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('BkldNsUom', 'Bkldnsuom', 'VARCHAR', false, 4, null);
        $this->addColumn('BkldNsVendId', 'Bkldnsvendid', 'VARCHAR', false, 6, null);
        $this->addColumn('BkldQtyToShip', 'Bkldqtytoship', 'DECIMAL', false, 20, null);
        $this->addColumn('BkldTaxCode', 'Bkldtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('BkldUnitCost', 'Bkldunitcost', 'DECIMAL', false, 20, null);
        $this->addColumn('BkldAcSuplyWhse', 'Bkldacsuplywhse', 'VARCHAR', false, 2, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
     * @param \BookingDetail $obj A \BookingDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBklhordrbase() || is_scalar($obj->getBklhordrbase()) || is_callable([$obj->getBklhordrbase(), '__toString']) ? (string) $obj->getBklhordrbase() : $obj->getBklhordrbase()), (null === $obj->getBkldorigline() || is_scalar($obj->getBkldorigline()) || is_callable([$obj->getBkldorigline(), '__toString']) ? (string) $obj->getBkldorigline() : $obj->getBkldorigline()), (null === $obj->getBkldseq() || is_scalar($obj->getBkldseq()) || is_callable([$obj->getBkldseq(), '__toString']) ? (string) $obj->getBkldseq() : $obj->getBkldseq())]);
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
     * @param mixed $value A \BookingDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \BookingDetail) {
                $key = serialize([(null === $value->getBklhordrbase() || is_scalar($value->getBklhordrbase()) || is_callable([$value->getBklhordrbase(), '__toString']) ? (string) $value->getBklhordrbase() : $value->getBklhordrbase()), (null === $value->getBkldorigline() || is_scalar($value->getBkldorigline()) || is_callable([$value->getBkldorigline(), '__toString']) ? (string) $value->getBkldorigline() : $value->getBkldorigline()), (null === $value->getBkldseq() || is_scalar($value->getBkldseq()) || is_callable([$value->getBkldseq(), '__toString']) ? (string) $value->getBkldseq() : $value->getBkldseq())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \BookingDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Bkldorigline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Bkldseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BookingDetailTableMap::CLASS_DEFAULT : BookingDetailTableMap::OM_CLASS;
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
     * @return array           (BookingDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BookingDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BookingDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BookingDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BookingDetailTableMap::OM_CLASS;
            /** @var BookingDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BookingDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = BookingDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BookingDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BookingDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BookingDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLHORDRBASE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDORIGLINE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDSEQ);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDORDRNBR);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDTRANDATE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDTRANTIME);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDLOGIN);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDQTY);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDUNITPRIC);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDPGMREF);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDREASCD);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDBOOKDATE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDNSITEMDESC1);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDNSITEMGRUP);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDNSUOM);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDNSVENDID);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDQTYTOSHIP);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDTAXCODE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDUNITCOST);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_BKLDACSUPLYWHSE);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(BookingDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.BklhOrdrBase');
            $criteria->addSelectColumn($alias . '.BkldOrigLine');
            $criteria->addSelectColumn($alias . '.BkldSeq');
            $criteria->addSelectColumn($alias . '.BkldOrdrNbr');
            $criteria->addSelectColumn($alias . '.BkldTranDate');
            $criteria->addSelectColumn($alias . '.BkldTranTime');
            $criteria->addSelectColumn($alias . '.BkldLogIn');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.BkldQty');
            $criteria->addSelectColumn($alias . '.BkldUnitPric');
            $criteria->addSelectColumn($alias . '.BkldPgmRef');
            $criteria->addSelectColumn($alias . '.BkldReasCd');
            $criteria->addSelectColumn($alias . '.BkldBookDate');
            $criteria->addSelectColumn($alias . '.BkldNsItemDesc1');
            $criteria->addSelectColumn($alias . '.BkldNsItemGrup');
            $criteria->addSelectColumn($alias . '.BkldNsUom');
            $criteria->addSelectColumn($alias . '.BkldNsVendId');
            $criteria->addSelectColumn($alias . '.BkldQtyToShip');
            $criteria->addSelectColumn($alias . '.BkldTaxCode');
            $criteria->addSelectColumn($alias . '.BkldUnitCost');
            $criteria->addSelectColumn($alias . '.BkldAcSuplyWhse');
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
        return Propel::getServiceContainer()->getDatabaseMap(BookingDetailTableMap::DATABASE_NAME)->getTable(BookingDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BookingDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BookingDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BookingDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BookingDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BookingDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \BookingDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BookingDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BookingDetailTableMap::COL_BKLHORDRBASE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BookingDetailTableMap::COL_BKLDORIGLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(BookingDetailTableMap::COL_BKLDSEQ, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = BookingDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BookingDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BookingDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_book_log_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BookingDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BookingDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or BookingDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BookingDetail object
        }


        // Set the correct dbName
        $query = BookingDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BookingDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BookingDetailTableMap::buildTableMap();
