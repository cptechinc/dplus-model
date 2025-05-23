<?php

namespace Map;

use \PurchaseOrderDetailReceipt;
use \PurchaseOrderDetailReceiptQuery;
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
 * This class defines the structure of the 'po_receipt_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PurchaseOrderDetailReceiptTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PurchaseOrderDetailReceiptTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'po_receipt_det';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\PurchaseOrderDetailReceipt';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'PurchaseOrderDetailReceipt';

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
     * the column name for the PohdNbr field
     */
    const COL_POHDNBR = 'po_receipt_det.PohdNbr';

    /**
     * the column name for the PodtLine field
     */
    const COL_PODTLINE = 'po_receipt_det.PodtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'po_receipt_det.InitItemNbr';

    /**
     * the column name for the PordSeq field
     */
    const COL_PORDSEQ = 'po_receipt_det.PordSeq';

    /**
     * the column name for the PordRef field
     */
    const COL_PORDREF = 'po_receipt_det.PordRef';

    /**
     * the column name for the PordTranDate field
     */
    const COL_PORDTRANDATE = 'po_receipt_det.PordTranDate';

    /**
     * the column name for the PordGlPd field
     */
    const COL_PORDGLPD = 'po_receipt_det.PordGlPd';

    /**
     * the column name for the PordQtyRec field
     */
    const COL_PORDQTYREC = 'po_receipt_det.PordQtyRec';

    /**
     * the column name for the PordCostTot field
     */
    const COL_PORDCOSTTOT = 'po_receipt_det.PordCostTot';

    /**
     * the column name for the PordLandUnitCost field
     */
    const COL_PORDLANDUNITCOST = 'po_receipt_det.PordLandUnitCost';

    /**
     * the column name for the PordTariffCost field
     */
    const COL_PORDTARIFFCOST = 'po_receipt_det.PordTariffCost';

    /**
     * the column name for the PordMpfUnitCost field
     */
    const COL_PORDMPFUNITCOST = 'po_receipt_det.PordMpfUnitCost';

    /**
     * the column name for the PordHmfUnitCost field
     */
    const COL_PORDHMFUNITCOST = 'po_receipt_det.PordHmfUnitCost';

    /**
     * the column name for the PordDsetUnitCost field
     */
    const COL_PORDDSETUNITCOST = 'po_receipt_det.PordDsetUnitCost';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'po_receipt_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'po_receipt_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'po_receipt_det.dummy';

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
        self::TYPE_PHPNAME       => array('Pohdnbr', 'Podtline', 'Inititemnbr', 'Pordseq', 'Pordref', 'Pordtrandate', 'Pordglpd', 'Pordqtyrec', 'Pordcosttot', 'Pordlandunitcost', 'Pordtariffcost', 'Pordmpfunitcost', 'Pordhmfunitcost', 'Porddsetunitcost', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('pohdnbr', 'podtline', 'inititemnbr', 'pordseq', 'pordref', 'pordtrandate', 'pordglpd', 'pordqtyrec', 'pordcosttot', 'pordlandunitcost', 'pordtariffcost', 'pordmpfunitcost', 'pordhmfunitcost', 'porddsetunitcost', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, PurchaseOrderDetailReceiptTableMap::COL_PORDREF, PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE, PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD, PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC, PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT, PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST, PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST, PurchaseOrderDetailReceiptTableMap::COL_PORDMPFUNITCOST, PurchaseOrderDetailReceiptTableMap::COL_PORDHMFUNITCOST, PurchaseOrderDetailReceiptTableMap::COL_PORDDSETUNITCOST, PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD, PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD, PurchaseOrderDetailReceiptTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PohdNbr', 'PodtLine', 'InitItemNbr', 'PordSeq', 'PordRef', 'PordTranDate', 'PordGlPd', 'PordQtyRec', 'PordCostTot', 'PordLandUnitCost', 'PordTariffCost', 'PordMpfUnitCost', 'PordHmfUnitCost', 'PordDsetUnitCost', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pohdnbr' => 0, 'Podtline' => 1, 'Inititemnbr' => 2, 'Pordseq' => 3, 'Pordref' => 4, 'Pordtrandate' => 5, 'Pordglpd' => 6, 'Pordqtyrec' => 7, 'Pordcosttot' => 8, 'Pordlandunitcost' => 9, 'Pordtariffcost' => 10, 'Pordmpfunitcost' => 11, 'Pordhmfunitcost' => 12, 'Porddsetunitcost' => 13, 'Dateupdtd' => 14, 'Timeupdtd' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('pohdnbr' => 0, 'podtline' => 1, 'inititemnbr' => 2, 'pordseq' => 3, 'pordref' => 4, 'pordtrandate' => 5, 'pordglpd' => 6, 'pordqtyrec' => 7, 'pordcosttot' => 8, 'pordlandunitcost' => 9, 'pordtariffcost' => 10, 'pordmpfunitcost' => 11, 'pordhmfunitcost' => 12, 'porddsetunitcost' => 13, 'dateupdtd' => 14, 'timeupdtd' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR => 0, PurchaseOrderDetailReceiptTableMap::COL_PODTLINE => 1, PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR => 2, PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ => 3, PurchaseOrderDetailReceiptTableMap::COL_PORDREF => 4, PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE => 5, PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD => 6, PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC => 7, PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT => 8, PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST => 9, PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST => 10, PurchaseOrderDetailReceiptTableMap::COL_PORDMPFUNITCOST => 11, PurchaseOrderDetailReceiptTableMap::COL_PORDHMFUNITCOST => 12, PurchaseOrderDetailReceiptTableMap::COL_PORDDSETUNITCOST => 13, PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD => 14, PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD => 15, PurchaseOrderDetailReceiptTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('PohdNbr' => 0, 'PodtLine' => 1, 'InitItemNbr' => 2, 'PordSeq' => 3, 'PordRef' => 4, 'PordTranDate' => 5, 'PordGlPd' => 6, 'PordQtyRec' => 7, 'PordCostTot' => 8, 'PordLandUnitCost' => 9, 'PordTariffCost' => 10, 'PordMpfUnitCost' => 11, 'PordHmfUnitCost' => 12, 'PordDsetUnitCost' => 13, 'DateUpdtd' => 14, 'TimeUpdtd' => 15, 'dummy' => 16, ),
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
        $this->setName('po_receipt_det');
        $this->setPhpName('PurchaseOrderDetailReceipt');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PurchaseOrderDetailReceipt');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('PohdNbr', 'Pohdnbr', 'INTEGER' , 'po_head', 'PohdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('PohdNbr', 'Pohdnbr', 'INTEGER' , 'po_detail', 'PohdNbr', true, 8, 0);
        $this->addForeignPrimaryKey('PodtLine', 'Podtline', 'INTEGER' , 'po_detail', 'PodtLine', true, 4, 0);
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addPrimaryKey('PordSeq', 'Pordseq', 'INTEGER', true, 4, 0);
        $this->addColumn('PordRef', 'Pordref', 'VARCHAR', true, 15, '');
        $this->addColumn('PordTranDate', 'Pordtrandate', 'CHAR', true, 8, '');
        $this->addColumn('PordGlPd', 'Pordglpd', 'INTEGER', true, 2, 0);
        $this->addColumn('PordQtyRec', 'Pordqtyrec', 'DECIMAL', true, 20, 0);
        $this->addColumn('PordCostTot', 'Pordcosttot', 'DECIMAL', true, 20, 0);
        $this->addColumn('PordLandUnitCost', 'Pordlandunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PordTariffCost', 'Pordtariffcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PordMpfUnitCost', 'Pordmpfunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PordHmfUnitCost', 'Pordhmfunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('PordDsetUnitCost', 'Porddsetunitcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PohdNbr',
    1 => ':PohdNbr',
  ),
), null, null, null, false);
        $this->addRelation('PurchaseOrderDetail', '\\PurchaseOrderDetail', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PohdNbr',
    1 => ':PohdNbr',
  ),
  1 =>
  array (
    0 => ':PodtLine',
    1 => ':PodtLine',
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
     * @param \PurchaseOrderDetailReceipt $obj A \PurchaseOrderDetailReceipt object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPohdnbr() || is_scalar($obj->getPohdnbr()) || is_callable([$obj->getPohdnbr(), '__toString']) ? (string) $obj->getPohdnbr() : $obj->getPohdnbr()), (null === $obj->getPodtline() || is_scalar($obj->getPodtline()) || is_callable([$obj->getPodtline(), '__toString']) ? (string) $obj->getPodtline() : $obj->getPodtline()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getPordseq() || is_scalar($obj->getPordseq()) || is_callable([$obj->getPordseq(), '__toString']) ? (string) $obj->getPordseq() : $obj->getPordseq())]);
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
     * @param mixed $value A \PurchaseOrderDetailReceipt object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \PurchaseOrderDetailReceipt) {
                $key = serialize([(null === $value->getPohdnbr() || is_scalar($value->getPohdnbr()) || is_callable([$value->getPohdnbr(), '__toString']) ? (string) $value->getPohdnbr() : $value->getPohdnbr()), (null === $value->getPodtline() || is_scalar($value->getPodtline()) || is_callable([$value->getPodtline(), '__toString']) ? (string) $value->getPodtline() : $value->getPodtline()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getPordseq() || is_scalar($value->getPordseq()) || is_callable([$value->getPordseq(), '__toString']) ? (string) $value->getPordseq() : $value->getPordseq())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \PurchaseOrderDetailReceipt object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Pordseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PurchaseOrderDetailReceiptTableMap::CLASS_DEFAULT : PurchaseOrderDetailReceiptTableMap::OM_CLASS;
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
     * @return array           (PurchaseOrderDetailReceipt object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PurchaseOrderDetailReceiptTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PurchaseOrderDetailReceiptTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PurchaseOrderDetailReceiptTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PurchaseOrderDetailReceiptTableMap::OM_CLASS;
            /** @var PurchaseOrderDetailReceipt $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PurchaseOrderDetailReceiptTableMap::addInstanceToPool($obj, $key);
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
            $key = PurchaseOrderDetailReceiptTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PurchaseOrderDetailReceiptTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PurchaseOrderDetailReceipt $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PurchaseOrderDetailReceiptTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDREF);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDMPFUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDHMFUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_PORDDSETUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailReceiptTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PohdNbr');
            $criteria->addSelectColumn($alias . '.PodtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.PordSeq');
            $criteria->addSelectColumn($alias . '.PordRef');
            $criteria->addSelectColumn($alias . '.PordTranDate');
            $criteria->addSelectColumn($alias . '.PordGlPd');
            $criteria->addSelectColumn($alias . '.PordQtyRec');
            $criteria->addSelectColumn($alias . '.PordCostTot');
            $criteria->addSelectColumn($alias . '.PordLandUnitCost');
            $criteria->addSelectColumn($alias . '.PordTariffCost');
            $criteria->addSelectColumn($alias . '.PordMpfUnitCost');
            $criteria->addSelectColumn($alias . '.PordHmfUnitCost');
            $criteria->addSelectColumn($alias . '.PordDsetUnitCost');
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
        return Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME)->getTable(PurchaseOrderDetailReceiptTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PurchaseOrderDetailReceiptTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PurchaseOrderDetailReceiptTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a PurchaseOrderDetailReceipt or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PurchaseOrderDetailReceipt object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PurchaseOrderDetailReceipt) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = PurchaseOrderDetailReceiptQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PurchaseOrderDetailReceiptTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PurchaseOrderDetailReceiptTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_receipt_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PurchaseOrderDetailReceiptQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PurchaseOrderDetailReceipt or Criteria object.
     *
     * @param mixed               $criteria Criteria or PurchaseOrderDetailReceipt object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PurchaseOrderDetailReceipt object
        }


        // Set the correct dbName
        $query = PurchaseOrderDetailReceiptQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PurchaseOrderDetailReceiptTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PurchaseOrderDetailReceiptTableMap::buildTableMap();
