<?php

namespace Map;

use \CpnLoadItem;
use \CpnLoadItemQuery;
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
 * This class defines the structure of the 'load_cpn_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CpnLoadItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CpnLoadItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'load_cpn_item';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CpnLoadItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CpnLoadItem';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the LchdLoadNbr field
     */
    const COL_LCHDLOADNBR = 'load_cpn_item.LchdLoadNbr';

    /**
     * the column name for the LcorOrdrNbr field
     */
    const COL_LCORORDRNBR = 'load_cpn_item.LcorOrdrNbr';

    /**
     * the column name for the LcitLineNbr field
     */
    const COL_LCITLINENBR = 'load_cpn_item.LcitLineNbr';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'load_cpn_item.InitItemNbr';

    /**
     * the column name for the LcitLotSer field
     */
    const COL_LCITLOTSER = 'load_cpn_item.LcitLotSer';

    /**
     * the column name for the LcitSkidNbr field
     */
    const COL_LCITSKIDNBR = 'load_cpn_item.LcitSkidNbr';

    /**
     * the column name for the LcitQtyOrd field
     */
    const COL_LCITQTYORD = 'load_cpn_item.LcitQtyOrd';

    /**
     * the column name for the LcitRqstDate field
     */
    const COL_LCITRQSTDATE = 'load_cpn_item.LcitRqstDate';

    /**
     * the column name for the LcitQtyPerBox field
     */
    const COL_LCITQTYPERBOX = 'load_cpn_item.LcitQtyPerBox';

    /**
     * the column name for the LcitNbrOfBoxes field
     */
    const COL_LCITNBROFBOXES = 'load_cpn_item.LcitNbrOfBoxes';

    /**
     * the column name for the LcitTotWght field
     */
    const COL_LCITTOTWGHT = 'load_cpn_item.LcitTotWght';

    /**
     * the column name for the LcitUom field
     */
    const COL_LCITUOM = 'load_cpn_item.LcitUom';

    /**
     * the column name for the LcitQtyShip field
     */
    const COL_LCITQTYSHIP = 'load_cpn_item.LcitQtyShip';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'load_cpn_item.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'load_cpn_item.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'load_cpn_item.dummy';

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
        self::TYPE_PHPNAME       => array('Lchdloadnbr', 'Lcorordrnbr', 'Lcitlinenbr', 'Inititemnbr', 'Lcitlotser', 'Lcitskidnbr', 'Lcitqtyord', 'Lcitrqstdate', 'Lcitqtyperbox', 'Lcitnbrofboxes', 'Lcittotwght', 'Lcituom', 'Lcitqtyship', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('lchdloadnbr', 'lcorordrnbr', 'lcitlinenbr', 'inititemnbr', 'lcitlotser', 'lcitskidnbr', 'lcitqtyord', 'lcitrqstdate', 'lcitqtyperbox', 'lcitnbrofboxes', 'lcittotwght', 'lcituom', 'lcitqtyship', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(CpnLoadItemTableMap::COL_LCHDLOADNBR, CpnLoadItemTableMap::COL_LCORORDRNBR, CpnLoadItemTableMap::COL_LCITLINENBR, CpnLoadItemTableMap::COL_INITITEMNBR, CpnLoadItemTableMap::COL_LCITLOTSER, CpnLoadItemTableMap::COL_LCITSKIDNBR, CpnLoadItemTableMap::COL_LCITQTYORD, CpnLoadItemTableMap::COL_LCITRQSTDATE, CpnLoadItemTableMap::COL_LCITQTYPERBOX, CpnLoadItemTableMap::COL_LCITNBROFBOXES, CpnLoadItemTableMap::COL_LCITTOTWGHT, CpnLoadItemTableMap::COL_LCITUOM, CpnLoadItemTableMap::COL_LCITQTYSHIP, CpnLoadItemTableMap::COL_DATEUPDTD, CpnLoadItemTableMap::COL_TIMEUPDTD, CpnLoadItemTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('LchdLoadNbr', 'LcorOrdrNbr', 'LcitLineNbr', 'InitItemNbr', 'LcitLotSer', 'LcitSkidNbr', 'LcitQtyOrd', 'LcitRqstDate', 'LcitQtyPerBox', 'LcitNbrOfBoxes', 'LcitTotWght', 'LcitUom', 'LcitQtyShip', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Lchdloadnbr' => 0, 'Lcorordrnbr' => 1, 'Lcitlinenbr' => 2, 'Inititemnbr' => 3, 'Lcitlotser' => 4, 'Lcitskidnbr' => 5, 'Lcitqtyord' => 6, 'Lcitrqstdate' => 7, 'Lcitqtyperbox' => 8, 'Lcitnbrofboxes' => 9, 'Lcittotwght' => 10, 'Lcituom' => 11, 'Lcitqtyship' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ),
        self::TYPE_CAMELNAME     => array('lchdloadnbr' => 0, 'lcorordrnbr' => 1, 'lcitlinenbr' => 2, 'inititemnbr' => 3, 'lcitlotser' => 4, 'lcitskidnbr' => 5, 'lcitqtyord' => 6, 'lcitrqstdate' => 7, 'lcitqtyperbox' => 8, 'lcitnbrofboxes' => 9, 'lcittotwght' => 10, 'lcituom' => 11, 'lcitqtyship' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ),
        self::TYPE_COLNAME       => array(CpnLoadItemTableMap::COL_LCHDLOADNBR => 0, CpnLoadItemTableMap::COL_LCORORDRNBR => 1, CpnLoadItemTableMap::COL_LCITLINENBR => 2, CpnLoadItemTableMap::COL_INITITEMNBR => 3, CpnLoadItemTableMap::COL_LCITLOTSER => 4, CpnLoadItemTableMap::COL_LCITSKIDNBR => 5, CpnLoadItemTableMap::COL_LCITQTYORD => 6, CpnLoadItemTableMap::COL_LCITRQSTDATE => 7, CpnLoadItemTableMap::COL_LCITQTYPERBOX => 8, CpnLoadItemTableMap::COL_LCITNBROFBOXES => 9, CpnLoadItemTableMap::COL_LCITTOTWGHT => 10, CpnLoadItemTableMap::COL_LCITUOM => 11, CpnLoadItemTableMap::COL_LCITQTYSHIP => 12, CpnLoadItemTableMap::COL_DATEUPDTD => 13, CpnLoadItemTableMap::COL_TIMEUPDTD => 14, CpnLoadItemTableMap::COL_DUMMY => 15, ),
        self::TYPE_FIELDNAME     => array('LchdLoadNbr' => 0, 'LcorOrdrNbr' => 1, 'LcitLineNbr' => 2, 'InitItemNbr' => 3, 'LcitLotSer' => 4, 'LcitSkidNbr' => 5, 'LcitQtyOrd' => 6, 'LcitRqstDate' => 7, 'LcitQtyPerBox' => 8, 'LcitNbrOfBoxes' => 9, 'LcitTotWght' => 10, 'LcitUom' => 11, 'LcitQtyShip' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('load_cpn_item');
        $this->setPhpName('CpnLoadItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CpnLoadItem');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('LchdLoadNbr', 'Lchdloadnbr', 'INTEGER' , 'load_cpn_header', 'LchdLoadNbr', true, 8, 0);
        $this->addPrimaryKey('LcorOrdrNbr', 'Lcorordrnbr', 'INTEGER', true, 10, 0);
        $this->addPrimaryKey('LcitLineNbr', 'Lcitlinenbr', 'INTEGER', true, 4, 0);
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('LcitLotSer', 'Lcitlotser', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('LcitSkidNbr', 'Lcitskidnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('LcitQtyOrd', 'Lcitqtyord', 'DECIMAL', true, 20, 0);
        $this->addColumn('LcitRqstDate', 'Lcitrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('LcitQtyPerBox', 'Lcitqtyperbox', 'INTEGER', true, 8, 0);
        $this->addColumn('LcitNbrOfBoxes', 'Lcitnbrofboxes', 'INTEGER', true, 8, 0);
        $this->addColumn('LcitTotWght', 'Lcittotwght', 'DECIMAL', true, 20, 0);
        $this->addColumn('LcitUom', 'Lcituom', 'VARCHAR', true, 4, '');
        $this->addColumn('LcitQtyShip', 'Lcitqtyship', 'DECIMAL', true, 20, 0);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CpnLoad', '\\CpnLoad', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':LchdLoadNbr',
    1 => ':LchdLoadNbr',
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
     * @param \CpnLoadItem $obj A \CpnLoadItem object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getLchdloadnbr() || is_scalar($obj->getLchdloadnbr()) || is_callable([$obj->getLchdloadnbr(), '__toString']) ? (string) $obj->getLchdloadnbr() : $obj->getLchdloadnbr()), (null === $obj->getLcorordrnbr() || is_scalar($obj->getLcorordrnbr()) || is_callable([$obj->getLcorordrnbr(), '__toString']) ? (string) $obj->getLcorordrnbr() : $obj->getLcorordrnbr()), (null === $obj->getLcitlinenbr() || is_scalar($obj->getLcitlinenbr()) || is_callable([$obj->getLcitlinenbr(), '__toString']) ? (string) $obj->getLcitlinenbr() : $obj->getLcitlinenbr()), (null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getLcitlotser() || is_scalar($obj->getLcitlotser()) || is_callable([$obj->getLcitlotser(), '__toString']) ? (string) $obj->getLcitlotser() : $obj->getLcitlotser()), (null === $obj->getLcitskidnbr() || is_scalar($obj->getLcitskidnbr()) || is_callable([$obj->getLcitskidnbr(), '__toString']) ? (string) $obj->getLcitskidnbr() : $obj->getLcitskidnbr())]);
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
     * @param mixed $value A \CpnLoadItem object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CpnLoadItem) {
                $key = serialize([(null === $value->getLchdloadnbr() || is_scalar($value->getLchdloadnbr()) || is_callable([$value->getLchdloadnbr(), '__toString']) ? (string) $value->getLchdloadnbr() : $value->getLchdloadnbr()), (null === $value->getLcorordrnbr() || is_scalar($value->getLcorordrnbr()) || is_callable([$value->getLcorordrnbr(), '__toString']) ? (string) $value->getLcorordrnbr() : $value->getLcorordrnbr()), (null === $value->getLcitlinenbr() || is_scalar($value->getLcitlinenbr()) || is_callable([$value->getLcitlinenbr(), '__toString']) ? (string) $value->getLcitlinenbr() : $value->getLcitlinenbr()), (null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getLcitlotser() || is_scalar($value->getLcitlotser()) || is_callable([$value->getLcitlotser(), '__toString']) ? (string) $value->getLcitlotser() : $value->getLcitlotser()), (null === $value->getLcitskidnbr() || is_scalar($value->getLcitskidnbr()) || is_callable([$value->getLcitskidnbr(), '__toString']) ? (string) $value->getLcitskidnbr() : $value->getLcitskidnbr())]);

            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CpnLoadItem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Lchdloadnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Lcorordrnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Lcitlinenbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Lcitlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Lcitskidnbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CpnLoadItemTableMap::CLASS_DEFAULT : CpnLoadItemTableMap::OM_CLASS;
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
     * @return array           (CpnLoadItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CpnLoadItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CpnLoadItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CpnLoadItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CpnLoadItemTableMap::OM_CLASS;
            /** @var CpnLoadItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CpnLoadItemTableMap::addInstanceToPool($obj, $key);
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
            $key = CpnLoadItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CpnLoadItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CpnLoadItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CpnLoadItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCHDLOADNBR);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCORORDRNBR);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITLINENBR);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITLOTSER);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITSKIDNBR);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITQTYORD);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITRQSTDATE);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITQTYPERBOX);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITNBROFBOXES);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITTOTWGHT);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITUOM);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_LCITQTYSHIP);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(CpnLoadItemTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.LchdLoadNbr');
            $criteria->addSelectColumn($alias . '.LcorOrdrNbr');
            $criteria->addSelectColumn($alias . '.LcitLineNbr');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.LcitLotSer');
            $criteria->addSelectColumn($alias . '.LcitSkidNbr');
            $criteria->addSelectColumn($alias . '.LcitQtyOrd');
            $criteria->addSelectColumn($alias . '.LcitRqstDate');
            $criteria->addSelectColumn($alias . '.LcitQtyPerBox');
            $criteria->addSelectColumn($alias . '.LcitNbrOfBoxes');
            $criteria->addSelectColumn($alias . '.LcitTotWght');
            $criteria->addSelectColumn($alias . '.LcitUom');
            $criteria->addSelectColumn($alias . '.LcitQtyShip');
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
        return Propel::getServiceContainer()->getDatabaseMap(CpnLoadItemTableMap::DATABASE_NAME)->getTable(CpnLoadItemTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CpnLoadItemTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CpnLoadItemTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CpnLoadItemTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CpnLoadItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CpnLoadItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CpnLoadItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CpnLoadItemTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CpnLoadItemTableMap::COL_LCHDLOADNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CpnLoadItemTableMap::COL_LCORORDRNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CpnLoadItemTableMap::COL_LCITLINENBR, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CpnLoadItemTableMap::COL_INITITEMNBR, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(CpnLoadItemTableMap::COL_LCITLOTSER, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(CpnLoadItemTableMap::COL_LCITSKIDNBR, $value[5]));
                $criteria->addOr($criterion);
            }
        }

        $query = CpnLoadItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CpnLoadItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CpnLoadItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the load_cpn_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CpnLoadItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CpnLoadItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or CpnLoadItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CpnLoadItem object
        }


        // Set the correct dbName
        $query = CpnLoadItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CpnLoadItemTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CpnLoadItemTableMap::buildTableMap();
