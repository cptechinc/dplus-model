<?php

namespace Map;

use \InvSerialWarranty;
use \InvSerialWarrantyQuery;
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
 * This class defines the structure of the 'inv_war_mast' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvSerialWarrantyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvSerialWarrantyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_war_mast';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvSerialWarranty';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvSerialWarranty';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 28;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 28;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'inv_war_mast.InitItemNbr';

    /**
     * the column name for the SermSerNbr field
     */
    const COL_SERMSERNBR = 'inv_war_mast.SermSerNbr';

    /**
     * the column name for the WarmSaleDate field
     */
    const COL_WARMSALEDATE = 'inv_war_mast.WarmSaleDate';

    /**
     * the column name for the WarmOwnFName field
     */
    const COL_WARMOWNFNAME = 'inv_war_mast.WarmOwnFName';

    /**
     * the column name for the WarmOwnMName field
     */
    const COL_WARMOWNMNAME = 'inv_war_mast.WarmOwnMName';

    /**
     * the column name for the WarmOwnLName field
     */
    const COL_WARMOWNLNAME = 'inv_war_mast.WarmOwnLName';

    /**
     * the column name for the WarmOwnAdr1 field
     */
    const COL_WARMOWNADR1 = 'inv_war_mast.WarmOwnAdr1';

    /**
     * the column name for the WarmOwnAdr2 field
     */
    const COL_WARMOWNADR2 = 'inv_war_mast.WarmOwnAdr2';

    /**
     * the column name for the WarmOwnAdr3 field
     */
    const COL_WARMOWNADR3 = 'inv_war_mast.WarmOwnAdr3';

    /**
     * the column name for the WarmOwnCity field
     */
    const COL_WARMOWNCITY = 'inv_war_mast.WarmOwnCity';

    /**
     * the column name for the WarmOwnStat field
     */
    const COL_WARMOWNSTAT = 'inv_war_mast.WarmOwnStat';

    /**
     * the column name for the WarmOwnZip field
     */
    const COL_WARMOWNZIP = 'inv_war_mast.WarmOwnZip';

    /**
     * the column name for the WarmSordNbr field
     */
    const COL_WARMSORDNBR = 'inv_war_mast.WarmSordNbr';

    /**
     * the column name for the WarmInvcDate field
     */
    const COL_WARMINVCDATE = 'inv_war_mast.WarmInvcDate';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'inv_war_mast.ArcuCustId';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'inv_war_mast.ArspSalePer1';

    /**
     * the column name for the WarmEntryDate field
     */
    const COL_WARMENTRYDATE = 'inv_war_mast.WarmEntryDate';

    /**
     * the column name for the WarmEngSerNbr field
     */
    const COL_WARMENGSERNBR = 'inv_war_mast.WarmEngSerNbr';

    /**
     * the column name for the WarmEngHorse field
     */
    const COL_WARMENGHORSE = 'inv_war_mast.WarmEngHorse';

    /**
     * the column name for the WarmEngModelYear field
     */
    const COL_WARMENGMODELYEAR = 'inv_war_mast.WarmEngModelYear';

    /**
     * the column name for the WarmEngDesc field
     */
    const COL_WARMENGDESC = 'inv_war_mast.WarmEngDesc';

    /**
     * the column name for the WarmPhone1 field
     */
    const COL_WARMPHONE1 = 'inv_war_mast.WarmPhone1';

    /**
     * the column name for the WarmPhone2 field
     */
    const COL_WARMPHONE2 = 'inv_war_mast.WarmPhone2';

    /**
     * the column name for the WarmEmail field
     */
    const COL_WARMEMAIL = 'inv_war_mast.WarmEmail';

    /**
     * the column name for the WarmAcOrigWarrDate field
     */
    const COL_WARMACORIGWARRDATE = 'inv_war_mast.WarmAcOrigWarrDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_war_mast.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_war_mast.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_war_mast.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Sermsernbr', 'Warmsaledate', 'Warmownfname', 'Warmownmname', 'Warmownlname', 'Warmownadr1', 'Warmownadr2', 'Warmownadr3', 'Warmowncity', 'Warmownstat', 'Warmownzip', 'Warmsordnbr', 'Warminvcdate', 'Arcucustid', 'Arspsaleper1', 'Warmentrydate', 'Warmengsernbr', 'Warmenghorse', 'Warmengmodelyear', 'Warmengdesc', 'Warmphone1', 'Warmphone2', 'Warmemail', 'Warmacorigwarrdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'sermsernbr', 'warmsaledate', 'warmownfname', 'warmownmname', 'warmownlname', 'warmownadr1', 'warmownadr2', 'warmownadr3', 'warmowncity', 'warmownstat', 'warmownzip', 'warmsordnbr', 'warminvcdate', 'arcucustid', 'arspsaleper1', 'warmentrydate', 'warmengsernbr', 'warmenghorse', 'warmengmodelyear', 'warmengdesc', 'warmphone1', 'warmphone2', 'warmemail', 'warmacorigwarrdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvSerialWarrantyTableMap::COL_INITITEMNBR, InvSerialWarrantyTableMap::COL_SERMSERNBR, InvSerialWarrantyTableMap::COL_WARMSALEDATE, InvSerialWarrantyTableMap::COL_WARMOWNFNAME, InvSerialWarrantyTableMap::COL_WARMOWNMNAME, InvSerialWarrantyTableMap::COL_WARMOWNLNAME, InvSerialWarrantyTableMap::COL_WARMOWNADR1, InvSerialWarrantyTableMap::COL_WARMOWNADR2, InvSerialWarrantyTableMap::COL_WARMOWNADR3, InvSerialWarrantyTableMap::COL_WARMOWNCITY, InvSerialWarrantyTableMap::COL_WARMOWNSTAT, InvSerialWarrantyTableMap::COL_WARMOWNZIP, InvSerialWarrantyTableMap::COL_WARMSORDNBR, InvSerialWarrantyTableMap::COL_WARMINVCDATE, InvSerialWarrantyTableMap::COL_ARCUCUSTID, InvSerialWarrantyTableMap::COL_ARSPSALEPER1, InvSerialWarrantyTableMap::COL_WARMENTRYDATE, InvSerialWarrantyTableMap::COL_WARMENGSERNBR, InvSerialWarrantyTableMap::COL_WARMENGHORSE, InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR, InvSerialWarrantyTableMap::COL_WARMENGDESC, InvSerialWarrantyTableMap::COL_WARMPHONE1, InvSerialWarrantyTableMap::COL_WARMPHONE2, InvSerialWarrantyTableMap::COL_WARMEMAIL, InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE, InvSerialWarrantyTableMap::COL_DATEUPDTD, InvSerialWarrantyTableMap::COL_TIMEUPDTD, InvSerialWarrantyTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'SermSerNbr', 'WarmSaleDate', 'WarmOwnFName', 'WarmOwnMName', 'WarmOwnLName', 'WarmOwnAdr1', 'WarmOwnAdr2', 'WarmOwnAdr3', 'WarmOwnCity', 'WarmOwnStat', 'WarmOwnZip', 'WarmSordNbr', 'WarmInvcDate', 'ArcuCustId', 'ArspSalePer1', 'WarmEntryDate', 'WarmEngSerNbr', 'WarmEngHorse', 'WarmEngModelYear', 'WarmEngDesc', 'WarmPhone1', 'WarmPhone2', 'WarmEmail', 'WarmAcOrigWarrDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Sermsernbr' => 1, 'Warmsaledate' => 2, 'Warmownfname' => 3, 'Warmownmname' => 4, 'Warmownlname' => 5, 'Warmownadr1' => 6, 'Warmownadr2' => 7, 'Warmownadr3' => 8, 'Warmowncity' => 9, 'Warmownstat' => 10, 'Warmownzip' => 11, 'Warmsordnbr' => 12, 'Warminvcdate' => 13, 'Arcucustid' => 14, 'Arspsaleper1' => 15, 'Warmentrydate' => 16, 'Warmengsernbr' => 17, 'Warmenghorse' => 18, 'Warmengmodelyear' => 19, 'Warmengdesc' => 20, 'Warmphone1' => 21, 'Warmphone2' => 22, 'Warmemail' => 23, 'Warmacorigwarrdate' => 24, 'Dateupdtd' => 25, 'Timeupdtd' => 26, 'Dummy' => 27, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'sermsernbr' => 1, 'warmsaledate' => 2, 'warmownfname' => 3, 'warmownmname' => 4, 'warmownlname' => 5, 'warmownadr1' => 6, 'warmownadr2' => 7, 'warmownadr3' => 8, 'warmowncity' => 9, 'warmownstat' => 10, 'warmownzip' => 11, 'warmsordnbr' => 12, 'warminvcdate' => 13, 'arcucustid' => 14, 'arspsaleper1' => 15, 'warmentrydate' => 16, 'warmengsernbr' => 17, 'warmenghorse' => 18, 'warmengmodelyear' => 19, 'warmengdesc' => 20, 'warmphone1' => 21, 'warmphone2' => 22, 'warmemail' => 23, 'warmacorigwarrdate' => 24, 'dateupdtd' => 25, 'timeupdtd' => 26, 'dummy' => 27, ),
        self::TYPE_COLNAME       => array(InvSerialWarrantyTableMap::COL_INITITEMNBR => 0, InvSerialWarrantyTableMap::COL_SERMSERNBR => 1, InvSerialWarrantyTableMap::COL_WARMSALEDATE => 2, InvSerialWarrantyTableMap::COL_WARMOWNFNAME => 3, InvSerialWarrantyTableMap::COL_WARMOWNMNAME => 4, InvSerialWarrantyTableMap::COL_WARMOWNLNAME => 5, InvSerialWarrantyTableMap::COL_WARMOWNADR1 => 6, InvSerialWarrantyTableMap::COL_WARMOWNADR2 => 7, InvSerialWarrantyTableMap::COL_WARMOWNADR3 => 8, InvSerialWarrantyTableMap::COL_WARMOWNCITY => 9, InvSerialWarrantyTableMap::COL_WARMOWNSTAT => 10, InvSerialWarrantyTableMap::COL_WARMOWNZIP => 11, InvSerialWarrantyTableMap::COL_WARMSORDNBR => 12, InvSerialWarrantyTableMap::COL_WARMINVCDATE => 13, InvSerialWarrantyTableMap::COL_ARCUCUSTID => 14, InvSerialWarrantyTableMap::COL_ARSPSALEPER1 => 15, InvSerialWarrantyTableMap::COL_WARMENTRYDATE => 16, InvSerialWarrantyTableMap::COL_WARMENGSERNBR => 17, InvSerialWarrantyTableMap::COL_WARMENGHORSE => 18, InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR => 19, InvSerialWarrantyTableMap::COL_WARMENGDESC => 20, InvSerialWarrantyTableMap::COL_WARMPHONE1 => 21, InvSerialWarrantyTableMap::COL_WARMPHONE2 => 22, InvSerialWarrantyTableMap::COL_WARMEMAIL => 23, InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE => 24, InvSerialWarrantyTableMap::COL_DATEUPDTD => 25, InvSerialWarrantyTableMap::COL_TIMEUPDTD => 26, InvSerialWarrantyTableMap::COL_DUMMY => 27, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'SermSerNbr' => 1, 'WarmSaleDate' => 2, 'WarmOwnFName' => 3, 'WarmOwnMName' => 4, 'WarmOwnLName' => 5, 'WarmOwnAdr1' => 6, 'WarmOwnAdr2' => 7, 'WarmOwnAdr3' => 8, 'WarmOwnCity' => 9, 'WarmOwnStat' => 10, 'WarmOwnZip' => 11, 'WarmSordNbr' => 12, 'WarmInvcDate' => 13, 'ArcuCustId' => 14, 'ArspSalePer1' => 15, 'WarmEntryDate' => 16, 'WarmEngSerNbr' => 17, 'WarmEngHorse' => 18, 'WarmEngModelYear' => 19, 'WarmEngDesc' => 20, 'WarmPhone1' => 21, 'WarmPhone2' => 22, 'WarmEmail' => 23, 'WarmAcOrigWarrDate' => 24, 'DateUpdtd' => 25, 'TimeUpdtd' => 26, 'dummy' => 27, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
        $this->setName('inv_war_mast');
        $this->setPhpName('InvSerialWarranty');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvSerialWarranty');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR' , 'inv_ser_mast', 'InitItemNbr', true, 30, '');
        $this->addForeignPrimaryKey('SermSerNbr', 'Sermsernbr', 'VARCHAR' , 'inv_ser_mast', 'SermSerNbr', true, 20, '');
        $this->addColumn('WarmSaleDate', 'Warmsaledate', 'VARCHAR', true, 8, '');
        $this->addColumn('WarmOwnFName', 'Warmownfname', 'VARCHAR', true, 15, '');
        $this->addColumn('WarmOwnMName', 'Warmownmname', 'VARCHAR', true, 15, '');
        $this->addColumn('WarmOwnLName', 'Warmownlname', 'VARCHAR', true, 15, '');
        $this->addColumn('WarmOwnAdr1', 'Warmownadr1', 'VARCHAR', true, 30, '');
        $this->addColumn('WarmOwnAdr2', 'Warmownadr2', 'VARCHAR', true, 30, '');
        $this->addColumn('WarmOwnAdr3', 'Warmownadr3', 'VARCHAR', true, 30, '');
        $this->addColumn('WarmOwnCity', 'Warmowncity', 'VARCHAR', true, 16, '');
        $this->addColumn('WarmOwnStat', 'Warmownstat', 'VARCHAR', true, 2, '');
        $this->addColumn('WarmOwnZip', 'Warmownzip', 'VARCHAR', true, 10, '');
        $this->addColumn('WarmSordNbr', 'Warmsordnbr', 'VARCHAR', true, 10, '');
        $this->addColumn('WarmInvcDate', 'Warminvcdate', 'VARCHAR', true, 8, '');
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', true, 6, '');
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', true, 6, '');
        $this->addColumn('WarmEntryDate', 'Warmentrydate', 'VARCHAR', true, 8, '');
        $this->addColumn('WarmEngSerNbr', 'Warmengsernbr', 'VARCHAR', true, 20, '');
        $this->addColumn('WarmEngHorse', 'Warmenghorse', 'DECIMAL', true, 4, 0);
        $this->addColumn('WarmEngModelYear', 'Warmengmodelyear', 'VARCHAR', true, 4, '');
        $this->addColumn('WarmEngDesc', 'Warmengdesc', 'VARCHAR', true, 35, '');
        $this->addColumn('WarmPhone1', 'Warmphone1', 'VARCHAR', true, 12, '');
        $this->addColumn('WarmPhone2', 'Warmphone2', 'VARCHAR', true, 12, '');
        $this->addColumn('WarmEmail', 'Warmemail', 'VARCHAR', true, 50, '');
        $this->addColumn('WarmAcOrigWarrDate', 'Warmacorigwarrdate', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
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
        $this->addRelation('InvSerialMaster', '\\InvSerialMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
  1 =>
  array (
    0 => ':SermSerNbr',
    1 => ':SermSerNbr',
  ),
), null, null, null, false);
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
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
     * @param \InvSerialWarranty $obj A \InvSerialWarranty object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getSermsernbr() || is_scalar($obj->getSermsernbr()) || is_callable([$obj->getSermsernbr(), '__toString']) ? (string) $obj->getSermsernbr() : $obj->getSermsernbr())]);
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
     * @param mixed $value A \InvSerialWarranty object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvSerialWarranty) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getSermsernbr() || is_scalar($value->getSermsernbr()) || is_callable([$value->getSermsernbr(), '__toString']) ? (string) $value->getSermsernbr() : $value->getSermsernbr())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvSerialWarranty object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvSerialWarrantyTableMap::CLASS_DEFAULT : InvSerialWarrantyTableMap::OM_CLASS;
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
     * @return array           (InvSerialWarranty object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvSerialWarrantyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvSerialWarrantyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvSerialWarrantyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvSerialWarrantyTableMap::OM_CLASS;
            /** @var InvSerialWarranty $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvSerialWarrantyTableMap::addInstanceToPool($obj, $key);
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
            $key = InvSerialWarrantyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvSerialWarrantyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvSerialWarranty $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvSerialWarrantyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_SERMSERNBR);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMSALEDATE);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNFNAME);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNMNAME);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNLNAME);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNADR1);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNADR2);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNADR3);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNCITY);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNSTAT);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMOWNZIP);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMSORDNBR);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMINVCDATE);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMENTRYDATE);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMENGSERNBR);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMENGHORSE);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMENGDESC);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMPHONE1);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMPHONE2);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMEMAIL);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvSerialWarrantyTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.SermSerNbr');
            $criteria->addSelectColumn($alias . '.WarmSaleDate');
            $criteria->addSelectColumn($alias . '.WarmOwnFName');
            $criteria->addSelectColumn($alias . '.WarmOwnMName');
            $criteria->addSelectColumn($alias . '.WarmOwnLName');
            $criteria->addSelectColumn($alias . '.WarmOwnAdr1');
            $criteria->addSelectColumn($alias . '.WarmOwnAdr2');
            $criteria->addSelectColumn($alias . '.WarmOwnAdr3');
            $criteria->addSelectColumn($alias . '.WarmOwnCity');
            $criteria->addSelectColumn($alias . '.WarmOwnStat');
            $criteria->addSelectColumn($alias . '.WarmOwnZip');
            $criteria->addSelectColumn($alias . '.WarmSordNbr');
            $criteria->addSelectColumn($alias . '.WarmInvcDate');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.WarmEntryDate');
            $criteria->addSelectColumn($alias . '.WarmEngSerNbr');
            $criteria->addSelectColumn($alias . '.WarmEngHorse');
            $criteria->addSelectColumn($alias . '.WarmEngModelYear');
            $criteria->addSelectColumn($alias . '.WarmEngDesc');
            $criteria->addSelectColumn($alias . '.WarmPhone1');
            $criteria->addSelectColumn($alias . '.WarmPhone2');
            $criteria->addSelectColumn($alias . '.WarmEmail');
            $criteria->addSelectColumn($alias . '.WarmAcOrigWarrDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvSerialWarrantyTableMap::DATABASE_NAME)->getTable(InvSerialWarrantyTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvSerialWarrantyTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvSerialWarrantyTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvSerialWarrantyTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvSerialWarranty or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvSerialWarranty object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvSerialWarranty) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvSerialWarrantyTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvSerialWarrantyTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvSerialWarrantyTableMap::COL_SERMSERNBR, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvSerialWarrantyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvSerialWarrantyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvSerialWarrantyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_war_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvSerialWarrantyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvSerialWarranty or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvSerialWarranty object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvSerialWarranty object
        }


        // Set the correct dbName
        $query = InvSerialWarrantyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvSerialWarrantyTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvSerialWarrantyTableMap::buildTableMap();
