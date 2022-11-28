<?php

namespace Map;

use \SalesOrderShipment;
use \SalesOrderShipmentQuery;
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
 * This class defines the structure of the 'so_hist_ship' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesOrderShipmentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesOrderShipmentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'so_hist_ship';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesOrderShipment';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesOrderShipment';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the OehshNbr field
     */
    const COL_OEHSHNBR = 'so_hist_ship.OehshNbr';

    /**
     * the column name for the OehshSeq field
     */
    const COL_OEHSHSEQ = 'so_hist_ship.OehshSeq';

    /**
     * the column name for the OehshShipRefNbr field
     */
    const COL_OEHSHSHIPREFNBR = 'so_hist_ship.OehshShipRefNbr';

    /**
     * the column name for the OehshWght field
     */
    const COL_OEHSHWGHT = 'so_hist_ship.OehshWght';

    /**
     * the column name for the OehshServType field
     */
    const COL_OEHSHSERVTYPE = 'so_hist_ship.OehshServType';

    /**
     * the column name for the OehshShipDate field
     */
    const COL_OEHSHSHIPDATE = 'so_hist_ship.OehshShipDate';

    /**
     * the column name for the OehshTrackNbr field
     */
    const COL_OEHSHTRACKNBR = 'so_hist_ship.OehshTrackNbr';

    /**
     * the column name for the OehshBillOfLading field
     */
    const COL_OEHSHBILLOFLADING = 'so_hist_ship.OehshBillOfLading';

    /**
     * the column name for the OehshVesselName field
     */
    const COL_OEHSHVESSELNAME = 'so_hist_ship.OehshVesselName';

    /**
     * the column name for the OehshAsgdCntrNbr field
     */
    const COL_OEHSHASGDCNTRNBR = 'so_hist_ship.OehshAsgdCntrNbr';

    /**
     * the column name for the OehshOceanContainer field
     */
    const COL_OEHSHOCEANCONTAINER = 'so_hist_ship.OehshOceanContainer';

    /**
     * the column name for the OehshAmazonRef field
     */
    const COL_OEHSHAMAZONREF = 'so_hist_ship.OehshAmazonRef';

    /**
     * the column name for the OehshSealNumber field
     */
    const COL_OEHSHSEALNUMBER = 'so_hist_ship.OehshSealNumber';

    /**
     * the column name for the OehshNbrCntrs field
     */
    const COL_OEHSHNBRCNTRS = 'so_hist_ship.OehshNbrCntrs';

    /**
     * the column name for the OehshReported field
     */
    const COL_OEHSHREPORTED = 'so_hist_ship.OehshReported';

    /**
     * the column name for the OehshCrtnNbr field
     */
    const COL_OEHSHCRTNNBR = 'so_hist_ship.OehshCrtnNbr';

    /**
     * the column name for the OehshFrtCost field
     */
    const COL_OEHSHFRTCOST = 'so_hist_ship.OehshFrtCost';

    /**
     * the column name for the OehshDiscFrtCost field
     */
    const COL_OEHSHDISCFRTCOST = 'so_hist_ship.OehshDiscFrtCost';

    /**
     * the column name for the OehshFrtChrged field
     */
    const COL_OEHSHFRTCHRGED = 'so_hist_ship.OehshFrtChrged';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'so_hist_ship.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'so_hist_ship.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'so_hist_ship.dummy';

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
        self::TYPE_PHPNAME       => array('Oehshnbr', 'Oehshseq', 'Oehshshiprefnbr', 'Oehshwght', 'Oehshservtype', 'Oehshshipdate', 'Oehshtracknbr', 'Oehshbilloflading', 'Oehshvesselname', 'Oehshasgdcntrnbr', 'Oehshoceancontainer', 'Oehshamazonref', 'Oehshsealnumber', 'Oehshnbrcntrs', 'Oehshreported', 'Oehshcrtnnbr', 'Oehshfrtcost', 'Oehshdiscfrtcost', 'Oehshfrtchrged', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehshnbr', 'oehshseq', 'oehshshiprefnbr', 'oehshwght', 'oehshservtype', 'oehshshipdate', 'oehshtracknbr', 'oehshbilloflading', 'oehshvesselname', 'oehshasgdcntrnbr', 'oehshoceancontainer', 'oehshamazonref', 'oehshsealnumber', 'oehshnbrcntrs', 'oehshreported', 'oehshcrtnnbr', 'oehshfrtcost', 'oehshdiscfrtcost', 'oehshfrtchrged', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesOrderShipmentTableMap::COL_OEHSHNBR, SalesOrderShipmentTableMap::COL_OEHSHSEQ, SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR, SalesOrderShipmentTableMap::COL_OEHSHWGHT, SalesOrderShipmentTableMap::COL_OEHSHSERVTYPE, SalesOrderShipmentTableMap::COL_OEHSHSHIPDATE, SalesOrderShipmentTableMap::COL_OEHSHTRACKNBR, SalesOrderShipmentTableMap::COL_OEHSHBILLOFLADING, SalesOrderShipmentTableMap::COL_OEHSHVESSELNAME, SalesOrderShipmentTableMap::COL_OEHSHASGDCNTRNBR, SalesOrderShipmentTableMap::COL_OEHSHOCEANCONTAINER, SalesOrderShipmentTableMap::COL_OEHSHAMAZONREF, SalesOrderShipmentTableMap::COL_OEHSHSEALNUMBER, SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS, SalesOrderShipmentTableMap::COL_OEHSHREPORTED, SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR, SalesOrderShipmentTableMap::COL_OEHSHFRTCOST, SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST, SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED, SalesOrderShipmentTableMap::COL_DATEUPDTD, SalesOrderShipmentTableMap::COL_TIMEUPDTD, SalesOrderShipmentTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehshNbr', 'OehshSeq', 'OehshShipRefNbr', 'OehshWght', 'OehshServType', 'OehshShipDate', 'OehshTrackNbr', 'OehshBillOfLading', 'OehshVesselName', 'OehshAsgdCntrNbr', 'OehshOceanContainer', 'OehshAmazonRef', 'OehshSealNumber', 'OehshNbrCntrs', 'OehshReported', 'OehshCrtnNbr', 'OehshFrtCost', 'OehshDiscFrtCost', 'OehshFrtChrged', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehshnbr' => 0, 'Oehshseq' => 1, 'Oehshshiprefnbr' => 2, 'Oehshwght' => 3, 'Oehshservtype' => 4, 'Oehshshipdate' => 5, 'Oehshtracknbr' => 6, 'Oehshbilloflading' => 7, 'Oehshvesselname' => 8, 'Oehshasgdcntrnbr' => 9, 'Oehshoceancontainer' => 10, 'Oehshamazonref' => 11, 'Oehshsealnumber' => 12, 'Oehshnbrcntrs' => 13, 'Oehshreported' => 14, 'Oehshcrtnnbr' => 15, 'Oehshfrtcost' => 16, 'Oehshdiscfrtcost' => 17, 'Oehshfrtchrged' => 18, 'Dateupdtd' => 19, 'Timeupdtd' => 20, 'Dummy' => 21, ),
        self::TYPE_CAMELNAME     => array('oehshnbr' => 0, 'oehshseq' => 1, 'oehshshiprefnbr' => 2, 'oehshwght' => 3, 'oehshservtype' => 4, 'oehshshipdate' => 5, 'oehshtracknbr' => 6, 'oehshbilloflading' => 7, 'oehshvesselname' => 8, 'oehshasgdcntrnbr' => 9, 'oehshoceancontainer' => 10, 'oehshamazonref' => 11, 'oehshsealnumber' => 12, 'oehshnbrcntrs' => 13, 'oehshreported' => 14, 'oehshcrtnnbr' => 15, 'oehshfrtcost' => 16, 'oehshdiscfrtcost' => 17, 'oehshfrtchrged' => 18, 'dateupdtd' => 19, 'timeupdtd' => 20, 'dummy' => 21, ),
        self::TYPE_COLNAME       => array(SalesOrderShipmentTableMap::COL_OEHSHNBR => 0, SalesOrderShipmentTableMap::COL_OEHSHSEQ => 1, SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR => 2, SalesOrderShipmentTableMap::COL_OEHSHWGHT => 3, SalesOrderShipmentTableMap::COL_OEHSHSERVTYPE => 4, SalesOrderShipmentTableMap::COL_OEHSHSHIPDATE => 5, SalesOrderShipmentTableMap::COL_OEHSHTRACKNBR => 6, SalesOrderShipmentTableMap::COL_OEHSHBILLOFLADING => 7, SalesOrderShipmentTableMap::COL_OEHSHVESSELNAME => 8, SalesOrderShipmentTableMap::COL_OEHSHASGDCNTRNBR => 9, SalesOrderShipmentTableMap::COL_OEHSHOCEANCONTAINER => 10, SalesOrderShipmentTableMap::COL_OEHSHAMAZONREF => 11, SalesOrderShipmentTableMap::COL_OEHSHSEALNUMBER => 12, SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS => 13, SalesOrderShipmentTableMap::COL_OEHSHREPORTED => 14, SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR => 15, SalesOrderShipmentTableMap::COL_OEHSHFRTCOST => 16, SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST => 17, SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED => 18, SalesOrderShipmentTableMap::COL_DATEUPDTD => 19, SalesOrderShipmentTableMap::COL_TIMEUPDTD => 20, SalesOrderShipmentTableMap::COL_DUMMY => 21, ),
        self::TYPE_FIELDNAME     => array('OehshNbr' => 0, 'OehshSeq' => 1, 'OehshShipRefNbr' => 2, 'OehshWght' => 3, 'OehshServType' => 4, 'OehshShipDate' => 5, 'OehshTrackNbr' => 6, 'OehshBillOfLading' => 7, 'OehshVesselName' => 8, 'OehshAsgdCntrNbr' => 9, 'OehshOceanContainer' => 10, 'OehshAmazonRef' => 11, 'OehshSealNumber' => 12, 'OehshNbrCntrs' => 13, 'OehshReported' => 14, 'OehshCrtnNbr' => 15, 'OehshFrtCost' => 16, 'OehshDiscFrtCost' => 17, 'OehshFrtChrged' => 18, 'DateUpdtd' => 19, 'TimeUpdtd' => 20, 'dummy' => 21, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $this->setName('so_hist_ship');
        $this->setPhpName('SalesOrderShipment');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesOrderShipment');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehshNbr', 'Oehshnbr', 'INTEGER' , 'so_header', 'OehdNbr', true, 10, 0);
        $this->addForeignPrimaryKey('OehshNbr', 'Oehshnbr', 'INTEGER' , 'so_head_hist', 'OehhNbr', true, 10, 0);
        $this->addPrimaryKey('OehshSeq', 'Oehshseq', 'INTEGER', true, 4, 1);
        $this->addColumn('OehshShipRefNbr', 'Oehshshiprefnbr', 'INTEGER', true, 8, 1);
        $this->addColumn('OehshWght', 'Oehshwght', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehshServType', 'Oehshservtype', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshShipDate', 'Oehshshipdate', 'CHAR', true, 8, '');
        $this->addColumn('OehshTrackNbr', 'Oehshtracknbr', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshBillOfLading', 'Oehshbilloflading', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshVesselName', 'Oehshvesselname', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshAsgdCntrNbr', 'Oehshasgdcntrnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshOceanContainer', 'Oehshoceancontainer', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshAmazonRef', 'Oehshamazonref', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshSealNumber', 'Oehshsealnumber', 'VARCHAR', true, 30, '');
        $this->addColumn('OehshNbrCntrs', 'Oehshnbrcntrs', 'INTEGER', true, 6, 1);
        $this->addColumn('OehshReported', 'Oehshreported', 'CHAR', true, null, '');
        $this->addColumn('OehshCrtnNbr', 'Oehshcrtnnbr', 'INTEGER', true, 4, 0);
        $this->addColumn('OehshFrtCost', 'Oehshfrtcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehshDiscFrtCost', 'Oehshdiscfrtcost', 'DECIMAL', true, 20, 0);
        $this->addColumn('OehshFrtChrged', 'Oehshfrtchrged', 'DECIMAL', true, 20, 0);
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
    0 => ':OehshNbr',
    1 => ':OehdNbr',
  ),
), null, null, null, false);
        $this->addRelation('SalesHistory', '\\SalesHistory', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehshNbr',
    1 => ':OehhNbr',
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
     * @param \SalesOrderShipment $obj A \SalesOrderShipment object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehshnbr() || is_scalar($obj->getOehshnbr()) || is_callable([$obj->getOehshnbr(), '__toString']) ? (string) $obj->getOehshnbr() : $obj->getOehshnbr()), (null === $obj->getOehshseq() || is_scalar($obj->getOehshseq()) || is_callable([$obj->getOehshseq(), '__toString']) ? (string) $obj->getOehshseq() : $obj->getOehshseq())]);
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
     * @param mixed $value A \SalesOrderShipment object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesOrderShipment) {
                $key = serialize([(null === $value->getOehshnbr() || is_scalar($value->getOehshnbr()) || is_callable([$value->getOehshnbr(), '__toString']) ? (string) $value->getOehshnbr() : $value->getOehshnbr()), (null === $value->getOehshseq() || is_scalar($value->getOehshseq()) || is_callable([$value->getOehshseq(), '__toString']) ? (string) $value->getOehshseq() : $value->getOehshseq())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesOrderShipment object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Oehshnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oehshseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesOrderShipmentTableMap::CLASS_DEFAULT : SalesOrderShipmentTableMap::OM_CLASS;
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
     * @return array           (SalesOrderShipment object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesOrderShipmentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesOrderShipmentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesOrderShipmentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesOrderShipmentTableMap::OM_CLASS;
            /** @var SalesOrderShipment $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesOrderShipmentTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesOrderShipmentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesOrderShipmentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesOrderShipment $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesOrderShipmentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHNBR);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHSEQ);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHWGHT);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHSERVTYPE);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHSHIPDATE);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHTRACKNBR);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHBILLOFLADING);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHVESSELNAME);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHASGDCNTRNBR);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHOCEANCONTAINER);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHAMAZONREF);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHSEALNUMBER);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHREPORTED);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHFRTCOST);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SalesOrderShipmentTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehshNbr');
            $criteria->addSelectColumn($alias . '.OehshSeq');
            $criteria->addSelectColumn($alias . '.OehshShipRefNbr');
            $criteria->addSelectColumn($alias . '.OehshWght');
            $criteria->addSelectColumn($alias . '.OehshServType');
            $criteria->addSelectColumn($alias . '.OehshShipDate');
            $criteria->addSelectColumn($alias . '.OehshTrackNbr');
            $criteria->addSelectColumn($alias . '.OehshBillOfLading');
            $criteria->addSelectColumn($alias . '.OehshVesselName');
            $criteria->addSelectColumn($alias . '.OehshAsgdCntrNbr');
            $criteria->addSelectColumn($alias . '.OehshOceanContainer');
            $criteria->addSelectColumn($alias . '.OehshAmazonRef');
            $criteria->addSelectColumn($alias . '.OehshSealNumber');
            $criteria->addSelectColumn($alias . '.OehshNbrCntrs');
            $criteria->addSelectColumn($alias . '.OehshReported');
            $criteria->addSelectColumn($alias . '.OehshCrtnNbr');
            $criteria->addSelectColumn($alias . '.OehshFrtCost');
            $criteria->addSelectColumn($alias . '.OehshDiscFrtCost');
            $criteria->addSelectColumn($alias . '.OehshFrtChrged');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesOrderShipmentTableMap::DATABASE_NAME)->getTable(SalesOrderShipmentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesOrderShipmentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesOrderShipmentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesOrderShipmentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesOrderShipment or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesOrderShipment object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderShipmentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesOrderShipment) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesOrderShipmentTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesOrderShipmentTableMap::COL_OEHSHNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesOrderShipmentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesOrderShipmentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesOrderShipmentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_hist_ship table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesOrderShipmentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesOrderShipment or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesOrderShipment object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderShipmentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesOrderShipment object
        }


        // Set the correct dbName
        $query = SalesOrderShipmentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesOrderShipmentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesOrderShipmentTableMap::buildTableMap();
