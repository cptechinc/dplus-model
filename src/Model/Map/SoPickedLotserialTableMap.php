<?php

namespace Map;

use \SoPickedLotserial;
use \SoPickedLotserialQuery;
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
 * This class defines the structure of the 'so_pulled' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SoPickedLotserialTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoPickedLotserialTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_pulled';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoPickedLotserial';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoPickedLotserial';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'so_pulled.OehdNbr';

    /**
     * the column name for the OedtLine field
     */
    const COL_OEDTLINE = 'so_pulled.OedtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'so_pulled.InitItemNbr';

    /**
     * the column name for the OepdLotSer field
     */
    const COL_OEPDLOTSER = 'so_pulled.OepdLotSer';

    /**
     * the column name for the OepdBin field
     */
    const COL_OEPDBIN = 'so_pulled.OepdBin';

    /**
     * the column name for the OepdPlltNbr field
     */
    const COL_OEPDPLLTNBR = 'so_pulled.OepdPlltNbr';

    /**
     * the column name for the OepdCrtnNbr field
     */
    const COL_OEPDCRTNNBR = 'so_pulled.OepdCrtnNbr';

    /**
     * the column name for the OepdQtyShip field
     */
    const COL_OEPDQTYSHIP = 'so_pulled.OepdQtyShip';

    /**
     * the column name for the OepdLotRef field
     */
    const COL_OEPDLOTREF = 'so_pulled.OepdLotRef';

    /**
     * the column name for the OepdCntrQty field
     */
    const COL_OEPDCNTRQTY = 'so_pulled.OepdCntrQty';

    /**
     * the column name for the OepdBatch field
     */
    const COL_OEPDBATCH = 'so_pulled.OepdBatch';

    /**
     * the column name for the OepdCureDate field
     */
    const COL_OEPDCUREDATE = 'so_pulled.OepdCureDate';

    /**
     * the column name for the OepdPlltType field
     */
    const COL_OEPDPLLTTYPE = 'so_pulled.OepdPlltType';

    /**
     * the column name for the OepdLblPrtd field
     */
    const COL_OEPDLBLPRTD = 'so_pulled.OepdLblPrtd';

    /**
     * the column name for the OepdOrigBin field
     */
    const COL_OEPDORIGBIN = 'so_pulled.OepdOrigBin';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_pulled.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_pulled.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_pulled.dummy';

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oedtline', 'Inititemnbr', 'Oepdlotser', 'Oepdbin', 'Oepdplltnbr', 'Oepdcrtnnbr', 'Oepdqtyship', 'Oepdlotref', 'Oepdcntrqty', 'Oepdbatch', 'Oepdcuredate', 'Oepdpllttype', 'Oepdlblprtd', 'Oepdorigbin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oedtline', 'inititemnbr', 'oepdlotser', 'oepdbin', 'oepdplltnbr', 'oepdcrtnnbr', 'oepdqtyship', 'oepdlotref', 'oepdcntrqty', 'oepdbatch', 'oepdcuredate', 'oepdpllttype', 'oepdlblprtd', 'oepdorigbin', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoPickedLotserialTableMap::COL_OEHDNBR, SoPickedLotserialTableMap::COL_OEDTLINE, SoPickedLotserialTableMap::COL_INITITEMNBR, SoPickedLotserialTableMap::COL_OEPDLOTSER, SoPickedLotserialTableMap::COL_OEPDBIN, SoPickedLotserialTableMap::COL_OEPDPLLTNBR, SoPickedLotserialTableMap::COL_OEPDCRTNNBR, SoPickedLotserialTableMap::COL_OEPDQTYSHIP, SoPickedLotserialTableMap::COL_OEPDLOTREF, SoPickedLotserialTableMap::COL_OEPDCNTRQTY, SoPickedLotserialTableMap::COL_OEPDBATCH, SoPickedLotserialTableMap::COL_OEPDCUREDATE, SoPickedLotserialTableMap::COL_OEPDPLLTTYPE, SoPickedLotserialTableMap::COL_OEPDLBLPRTD, SoPickedLotserialTableMap::COL_OEPDORIGBIN, SoPickedLotserialTableMap::COL_DATEUPDTD, SoPickedLotserialTableMap::COL_TIMEUPDTD, SoPickedLotserialTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OedtLine', 'InitItemNbr', 'OepdLotSer', 'OepdBin', 'OepdPlltNbr', 'OepdCrtnNbr', 'OepdQtyShip', 'OepdLotRef', 'OepdCntrQty', 'OepdBatch', 'OepdCureDate', 'OepdPlltType', 'OepdLblPrtd', 'OepdOrigBin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oedtline' => 1, 'Inititemnbr' => 2, 'Oepdlotser' => 3, 'Oepdbin' => 4, 'Oepdplltnbr' => 5, 'Oepdcrtnnbr' => 6, 'Oepdqtyship' => 7, 'Oepdlotref' => 8, 'Oepdcntrqty' => 9, 'Oepdbatch' => 10, 'Oepdcuredate' => 11, 'Oepdpllttype' => 12, 'Oepdlblprtd' => 13, 'Oepdorigbin' => 14, 'Dateupdtd' => 15, 'Timeupdtd' => 16, 'Dummy' => 17, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oedtline' => 1, 'inititemnbr' => 2, 'oepdlotser' => 3, 'oepdbin' => 4, 'oepdplltnbr' => 5, 'oepdcrtnnbr' => 6, 'oepdqtyship' => 7, 'oepdlotref' => 8, 'oepdcntrqty' => 9, 'oepdbatch' => 10, 'oepdcuredate' => 11, 'oepdpllttype' => 12, 'oepdlblprtd' => 13, 'oepdorigbin' => 14, 'dateupdtd' => 15, 'timeupdtd' => 16, 'dummy' => 17, ),
        self::TYPE_COLNAME       => array(SoPickedLotserialTableMap::COL_OEHDNBR => 0, SoPickedLotserialTableMap::COL_OEDTLINE => 1, SoPickedLotserialTableMap::COL_INITITEMNBR => 2, SoPickedLotserialTableMap::COL_OEPDLOTSER => 3, SoPickedLotserialTableMap::COL_OEPDBIN => 4, SoPickedLotserialTableMap::COL_OEPDPLLTNBR => 5, SoPickedLotserialTableMap::COL_OEPDCRTNNBR => 6, SoPickedLotserialTableMap::COL_OEPDQTYSHIP => 7, SoPickedLotserialTableMap::COL_OEPDLOTREF => 8, SoPickedLotserialTableMap::COL_OEPDCNTRQTY => 9, SoPickedLotserialTableMap::COL_OEPDBATCH => 10, SoPickedLotserialTableMap::COL_OEPDCUREDATE => 11, SoPickedLotserialTableMap::COL_OEPDPLLTTYPE => 12, SoPickedLotserialTableMap::COL_OEPDLBLPRTD => 13, SoPickedLotserialTableMap::COL_OEPDORIGBIN => 14, SoPickedLotserialTableMap::COL_DATEUPDTD => 15, SoPickedLotserialTableMap::COL_TIMEUPDTD => 16, SoPickedLotserialTableMap::COL_DUMMY => 17, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OedtLine' => 1, 'InitItemNbr' => 2, 'OepdLotSer' => 3, 'OepdBin' => 4, 'OepdPlltNbr' => 5, 'OepdCrtnNbr' => 6, 'OepdQtyShip' => 7, 'OepdLotRef' => 8, 'OepdCntrQty' => 9, 'OepdBatch' => 10, 'OepdCureDate' => 11, 'OepdPlltType' => 12, 'OepdLblPrtd' => 13, 'OepdOrigBin' => 14, 'DateUpdtd' => 15, 'TimeUpdtd' => 16, 'dummy' => 17, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $this->setName('so_pulled');
        $this->setPhpName('SoPickedLotserial');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoPickedLotserial');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER' , 'so_header', 'OehdNbr', true, 10, 0);
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER' , 'so_detail', 'OehdNbr', true, 10, 0);
        $this->addForeignPrimaryKey('OedtLine', 'Oedtline', 'INTEGER' , 'so_detail', 'OedtLine', true, 4, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_lot_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('OepdLotSer', 'Oepdlotser', 'VARCHAR' , 'inv_lot_mast', 'LotmLotNbr', true, 20, '');
        $this->addPrimaryKey('OepdBin', 'Oepdbin', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('OepdPlltNbr', 'Oepdplltnbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('OepdCrtnNbr', 'Oepdcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('OepdQtyShip', 'Oepdqtyship', 'DECIMAL', true, 20, 0);
        $this->addColumn('OepdLotRef', 'Oepdlotref', 'VARCHAR', true, 20, '');
        $this->addColumn('OepdCntrQty', 'Oepdcntrqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('OepdBatch', 'Oepdbatch', 'VARCHAR', true, 15, '');
        $this->addColumn('OepdCureDate', 'Oepdcuredate', 'VARCHAR', true, 10, '');
        $this->addColumn('OepdPlltType', 'Oepdpllttype', 'CHAR', true, null, '');
        $this->addColumn('OepdLblPrtd', 'Oepdlblprtd', 'CHAR', true, null, '');
        $this->addColumn('OepdOrigBin', 'Oepdorigbin', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesOrder', '\\SalesOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, null, false);
        $this->addRelation('SalesOrderDetail', '\\SalesOrderDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
  1 =>
  array (
    0 => ':OedtLine',
    1 => ':OedtLine',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvLotMaster', '\\InvLotMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':OepdLotSer',
    1 => ':LotmLotNbr',
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
     * @param \SoPickedLotserial $obj A \SoPickedLotserial object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehdnbr() || is_scalar($obj->getOehdnbr()) || is_callable([$obj->getOehdnbr(), '__toString']) ? (string) $obj->getOehdnbr() : $obj->getOehdnbr()), (null === $obj->getOedtline() || is_scalar($obj->getOedtline()) || is_callable([$obj->getOedtline(), '__toString']) ? (string) $obj->getOedtline() : $obj->getOedtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getOepdlotser() || is_scalar($obj->getOepdlotser()) || is_callable([$obj->getOepdlotser(), '__toString']) ? (string) $obj->getOepdlotser() : $obj->getOepdlotser()), (null === $obj->getOepdbin() || is_scalar($obj->getOepdbin()) || is_callable([$obj->getOepdbin(), '__toString']) ? (string) $obj->getOepdbin() : $obj->getOepdbin()), (null === $obj->getOepdplltnbr() || is_scalar($obj->getOepdplltnbr()) || is_callable([$obj->getOepdplltnbr(), '__toString']) ? (string) $obj->getOepdplltnbr() : $obj->getOepdplltnbr()), (null === $obj->getOepdcrtnnbr() || is_scalar($obj->getOepdcrtnnbr()) || is_callable([$obj->getOepdcrtnnbr(), '__toString']) ? (string) $obj->getOepdcrtnnbr() : $obj->getOepdcrtnnbr())]);
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
     * @param mixed $value A \SoPickedLotserial object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SoPickedLotserial) {
                $key = serialize([(null === $value->getOehdnbr() || is_scalar($value->getOehdnbr()) || is_callable([$value->getOehdnbr(), '__toString']) ? (string) $value->getOehdnbr() : $value->getOehdnbr()), (null === $value->getOedtline() || is_scalar($value->getOedtline()) || is_callable([$value->getOedtline(), '__toString']) ? (string) $value->getOedtline() : $value->getOedtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getOepdlotser() || is_scalar($value->getOepdlotser()) || is_callable([$value->getOepdlotser(), '__toString']) ? (string) $value->getOepdlotser() : $value->getOepdlotser()), (null === $value->getOepdbin() || is_scalar($value->getOepdbin()) || is_callable([$value->getOepdbin(), '__toString']) ? (string) $value->getOepdbin() : $value->getOepdbin()), (null === $value->getOepdplltnbr() || is_scalar($value->getOepdplltnbr()) || is_callable([$value->getOepdplltnbr(), '__toString']) ? (string) $value->getOepdplltnbr() : $value->getOepdplltnbr()), (null === $value->getOepdcrtnnbr() || is_scalar($value->getOepdcrtnnbr()) || is_callable([$value->getOepdcrtnnbr(), '__toString']) ? (string) $value->getOepdcrtnnbr() : $value->getOepdcrtnnbr())]);

            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5]), (null === $value[6] || is_scalar($value[6]) || is_callable([$value[6], '__toString']) ? (string) $value[6] : $value[6])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SoPickedLotserial object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 6 + $offset : static::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Oepdlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Oepdbin', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Oepdplltnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 6 + $offset
                : self::translateFieldName('Oepdcrtnnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SoPickedLotserialTableMap::CLASS_DEFAULT : SoPickedLotserialTableMap::OM_CLASS;
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
     * @return array           (SoPickedLotserial object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoPickedLotserialTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoPickedLotserialTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoPickedLotserialTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoPickedLotserialTableMap::OM_CLASS;
            /** @var SoPickedLotserial $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoPickedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $key = SoPickedLotserialTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoPickedLotserialTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoPickedLotserial $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoPickedLotserialTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEDTLINE);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDLOTSER);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDBIN);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDPLLTNBR);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDCRTNNBR);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDQTYSHIP);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDLOTREF);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDCNTRQTY);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDBATCH);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDCUREDATE);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDPLLTTYPE);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDLBLPRTD);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_OEPDORIGBIN);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoPickedLotserialTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OedtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OepdLotSer');
            $criteria->addSelectColumn($alias . '.OepdBin');
            $criteria->addSelectColumn($alias . '.OepdPlltNbr');
            $criteria->addSelectColumn($alias . '.OepdCrtnNbr');
            $criteria->addSelectColumn($alias . '.OepdQtyShip');
            $criteria->addSelectColumn($alias . '.OepdLotRef');
            $criteria->addSelectColumn($alias . '.OepdCntrQty');
            $criteria->addSelectColumn($alias . '.OepdBatch');
            $criteria->addSelectColumn($alias . '.OepdCureDate');
            $criteria->addSelectColumn($alias . '.OepdPlltType');
            $criteria->addSelectColumn($alias . '.OepdLblPrtd');
            $criteria->addSelectColumn($alias . '.OepdOrigBin');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoPickedLotserialTableMap::DATABASE_NAME)->getTable(SoPickedLotserialTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoPickedLotserialTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoPickedLotserialTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoPickedLotserialTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoPickedLotserial or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoPickedLotserial object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoPickedLotserialTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoPickedLotserial) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoPickedLotserialTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SoPickedLotserialTableMap::COL_OEHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SoPickedLotserialTableMap::COL_OEDTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SoPickedLotserialTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDLOTSER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDBIN, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDPLLTNBR, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDCRTNNBR, $value[6]));
                $criteria->addOr($criterion);
            }
        }

        $query = SoPickedLotserialQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoPickedLotserialTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoPickedLotserialTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_pulled table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoPickedLotserialQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoPickedLotserial or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoPickedLotserial object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoPickedLotserialTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoPickedLotserial object
        }


        // Set the correct dbName
        $query = SoPickedLotserialQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoPickedLotserialTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoPickedLotserialTableMap::buildTableMap();
