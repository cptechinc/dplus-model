<?php

namespace Map;

use \NoteCustOrder;
use \NoteCustOrderQuery;
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
 * This class defines the structure of the 'notes_cust_ship_order' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class NoteCustOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.NoteCustOrderTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'notes_cust_ship_order';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'NoteCustOrder';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\NoteCustOrder';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'NoteCustOrder';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the QnType field
     */
    public const COL_QNTYPE = 'notes_cust_ship_order.QnType';

    /**
     * the column name for the QnTypeDesc field
     */
    public const COL_QNTYPEDESC = 'notes_cust_ship_order.QnTypeDesc';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'notes_cust_ship_order.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    public const COL_ARSTSHIPID = 'notes_cust_ship_order.ArstShipId';

    /**
     * the column name for the QnCustPickTicket field
     */
    public const COL_QNCUSTPICKTICKET = 'notes_cust_ship_order.QnCustPickTicket';

    /**
     * the column name for the QnCustPackTicket field
     */
    public const COL_QNCUSTPACKTICKET = 'notes_cust_ship_order.QnCustPackTicket';

    /**
     * the column name for the QnCustInvoice field
     */
    public const COL_QNCUSTINVOICE = 'notes_cust_ship_order.QnCustInvoice';

    /**
     * the column name for the QnCustAcknow field
     */
    public const COL_QNCUSTACKNOW = 'notes_cust_ship_order.QnCustAcknow';

    /**
     * the column name for the QnSeq field
     */
    public const COL_QNSEQ = 'notes_cust_ship_order.QnSeq';

    /**
     * the column name for the QnNote field
     */
    public const COL_QNNOTE = 'notes_cust_ship_order.QnNote';

    /**
     * the column name for the QnKey2 field
     */
    public const COL_QNKEY2 = 'notes_cust_ship_order.QnKey2';

    /**
     * the column name for the QnForm field
     */
    public const COL_QNFORM = 'notes_cust_ship_order.QnForm';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'notes_cust_ship_order.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'notes_cust_ship_order.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'notes_cust_ship_order.dummy';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Qntype', 'Qntypedesc', 'Arcucustid', 'Arstshipid', 'Qncustpickticket', 'Qncustpackticket', 'Qncustinvoice', 'Qncustacknow', 'Qnseq', 'Qnnote', 'Qnkey2', 'Qnform', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['qntype', 'qntypedesc', 'arcucustid', 'arstshipid', 'qncustpickticket', 'qncustpackticket', 'qncustinvoice', 'qncustacknow', 'qnseq', 'qnnote', 'qnkey2', 'qnform', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [NoteCustOrderTableMap::COL_QNTYPE, NoteCustOrderTableMap::COL_QNTYPEDESC, NoteCustOrderTableMap::COL_ARCUCUSTID, NoteCustOrderTableMap::COL_ARSTSHIPID, NoteCustOrderTableMap::COL_QNCUSTPICKTICKET, NoteCustOrderTableMap::COL_QNCUSTPACKTICKET, NoteCustOrderTableMap::COL_QNCUSTINVOICE, NoteCustOrderTableMap::COL_QNCUSTACKNOW, NoteCustOrderTableMap::COL_QNSEQ, NoteCustOrderTableMap::COL_QNNOTE, NoteCustOrderTableMap::COL_QNKEY2, NoteCustOrderTableMap::COL_QNFORM, NoteCustOrderTableMap::COL_DATEUPDTD, NoteCustOrderTableMap::COL_TIMEUPDTD, NoteCustOrderTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['QnType', 'QnTypeDesc', 'ArcuCustId', 'ArstShipId', 'QnCustPickTicket', 'QnCustPackTicket', 'QnCustInvoice', 'QnCustAcknow', 'QnSeq', 'QnNote', 'QnKey2', 'QnForm', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Qntype' => 0, 'Qntypedesc' => 1, 'Arcucustid' => 2, 'Arstshipid' => 3, 'Qncustpickticket' => 4, 'Qncustpackticket' => 5, 'Qncustinvoice' => 6, 'Qncustacknow' => 7, 'Qnseq' => 8, 'Qnnote' => 9, 'Qnkey2' => 10, 'Qnform' => 11, 'Dateupdtd' => 12, 'Timeupdtd' => 13, 'Dummy' => 14, ],
        self::TYPE_CAMELNAME     => ['qntype' => 0, 'qntypedesc' => 1, 'arcucustid' => 2, 'arstshipid' => 3, 'qncustpickticket' => 4, 'qncustpackticket' => 5, 'qncustinvoice' => 6, 'qncustacknow' => 7, 'qnseq' => 8, 'qnnote' => 9, 'qnkey2' => 10, 'qnform' => 11, 'dateupdtd' => 12, 'timeupdtd' => 13, 'dummy' => 14, ],
        self::TYPE_COLNAME       => [NoteCustOrderTableMap::COL_QNTYPE => 0, NoteCustOrderTableMap::COL_QNTYPEDESC => 1, NoteCustOrderTableMap::COL_ARCUCUSTID => 2, NoteCustOrderTableMap::COL_ARSTSHIPID => 3, NoteCustOrderTableMap::COL_QNCUSTPICKTICKET => 4, NoteCustOrderTableMap::COL_QNCUSTPACKTICKET => 5, NoteCustOrderTableMap::COL_QNCUSTINVOICE => 6, NoteCustOrderTableMap::COL_QNCUSTACKNOW => 7, NoteCustOrderTableMap::COL_QNSEQ => 8, NoteCustOrderTableMap::COL_QNNOTE => 9, NoteCustOrderTableMap::COL_QNKEY2 => 10, NoteCustOrderTableMap::COL_QNFORM => 11, NoteCustOrderTableMap::COL_DATEUPDTD => 12, NoteCustOrderTableMap::COL_TIMEUPDTD => 13, NoteCustOrderTableMap::COL_DUMMY => 14, ],
        self::TYPE_FIELDNAME     => ['QnType' => 0, 'QnTypeDesc' => 1, 'ArcuCustId' => 2, 'ArstShipId' => 3, 'QnCustPickTicket' => 4, 'QnCustPackTicket' => 5, 'QnCustInvoice' => 6, 'QnCustAcknow' => 7, 'QnSeq' => 8, 'QnNote' => 9, 'QnKey2' => 10, 'QnForm' => 11, 'DateUpdtd' => 12, 'TimeUpdtd' => 13, 'dummy' => 14, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Qntype' => 'QNTYPE',
        'NoteCustOrder.Qntype' => 'QNTYPE',
        'qntype' => 'QNTYPE',
        'noteCustOrder.qntype' => 'QNTYPE',
        'NoteCustOrderTableMap::COL_QNTYPE' => 'QNTYPE',
        'COL_QNTYPE' => 'QNTYPE',
        'QnType' => 'QNTYPE',
        'notes_cust_ship_order.QnType' => 'QNTYPE',
        'Qntypedesc' => 'QNTYPEDESC',
        'NoteCustOrder.Qntypedesc' => 'QNTYPEDESC',
        'qntypedesc' => 'QNTYPEDESC',
        'noteCustOrder.qntypedesc' => 'QNTYPEDESC',
        'NoteCustOrderTableMap::COL_QNTYPEDESC' => 'QNTYPEDESC',
        'COL_QNTYPEDESC' => 'QNTYPEDESC',
        'QnTypeDesc' => 'QNTYPEDESC',
        'notes_cust_ship_order.QnTypeDesc' => 'QNTYPEDESC',
        'Arcucustid' => 'ARCUCUSTID',
        'NoteCustOrder.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'noteCustOrder.arcucustid' => 'ARCUCUSTID',
        'NoteCustOrderTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'notes_cust_ship_order.ArcuCustId' => 'ARCUCUSTID',
        'Arstshipid' => 'ARSTSHIPID',
        'NoteCustOrder.Arstshipid' => 'ARSTSHIPID',
        'arstshipid' => 'ARSTSHIPID',
        'noteCustOrder.arstshipid' => 'ARSTSHIPID',
        'NoteCustOrderTableMap::COL_ARSTSHIPID' => 'ARSTSHIPID',
        'COL_ARSTSHIPID' => 'ARSTSHIPID',
        'ArstShipId' => 'ARSTSHIPID',
        'notes_cust_ship_order.ArstShipId' => 'ARSTSHIPID',
        'Qncustpickticket' => 'QNCUSTPICKTICKET',
        'NoteCustOrder.Qncustpickticket' => 'QNCUSTPICKTICKET',
        'qncustpickticket' => 'QNCUSTPICKTICKET',
        'noteCustOrder.qncustpickticket' => 'QNCUSTPICKTICKET',
        'NoteCustOrderTableMap::COL_QNCUSTPICKTICKET' => 'QNCUSTPICKTICKET',
        'COL_QNCUSTPICKTICKET' => 'QNCUSTPICKTICKET',
        'QnCustPickTicket' => 'QNCUSTPICKTICKET',
        'notes_cust_ship_order.QnCustPickTicket' => 'QNCUSTPICKTICKET',
        'Qncustpackticket' => 'QNCUSTPACKTICKET',
        'NoteCustOrder.Qncustpackticket' => 'QNCUSTPACKTICKET',
        'qncustpackticket' => 'QNCUSTPACKTICKET',
        'noteCustOrder.qncustpackticket' => 'QNCUSTPACKTICKET',
        'NoteCustOrderTableMap::COL_QNCUSTPACKTICKET' => 'QNCUSTPACKTICKET',
        'COL_QNCUSTPACKTICKET' => 'QNCUSTPACKTICKET',
        'QnCustPackTicket' => 'QNCUSTPACKTICKET',
        'notes_cust_ship_order.QnCustPackTicket' => 'QNCUSTPACKTICKET',
        'Qncustinvoice' => 'QNCUSTINVOICE',
        'NoteCustOrder.Qncustinvoice' => 'QNCUSTINVOICE',
        'qncustinvoice' => 'QNCUSTINVOICE',
        'noteCustOrder.qncustinvoice' => 'QNCUSTINVOICE',
        'NoteCustOrderTableMap::COL_QNCUSTINVOICE' => 'QNCUSTINVOICE',
        'COL_QNCUSTINVOICE' => 'QNCUSTINVOICE',
        'QnCustInvoice' => 'QNCUSTINVOICE',
        'notes_cust_ship_order.QnCustInvoice' => 'QNCUSTINVOICE',
        'Qncustacknow' => 'QNCUSTACKNOW',
        'NoteCustOrder.Qncustacknow' => 'QNCUSTACKNOW',
        'qncustacknow' => 'QNCUSTACKNOW',
        'noteCustOrder.qncustacknow' => 'QNCUSTACKNOW',
        'NoteCustOrderTableMap::COL_QNCUSTACKNOW' => 'QNCUSTACKNOW',
        'COL_QNCUSTACKNOW' => 'QNCUSTACKNOW',
        'QnCustAcknow' => 'QNCUSTACKNOW',
        'notes_cust_ship_order.QnCustAcknow' => 'QNCUSTACKNOW',
        'Qnseq' => 'QNSEQ',
        'NoteCustOrder.Qnseq' => 'QNSEQ',
        'qnseq' => 'QNSEQ',
        'noteCustOrder.qnseq' => 'QNSEQ',
        'NoteCustOrderTableMap::COL_QNSEQ' => 'QNSEQ',
        'COL_QNSEQ' => 'QNSEQ',
        'QnSeq' => 'QNSEQ',
        'notes_cust_ship_order.QnSeq' => 'QNSEQ',
        'Qnnote' => 'QNNOTE',
        'NoteCustOrder.Qnnote' => 'QNNOTE',
        'qnnote' => 'QNNOTE',
        'noteCustOrder.qnnote' => 'QNNOTE',
        'NoteCustOrderTableMap::COL_QNNOTE' => 'QNNOTE',
        'COL_QNNOTE' => 'QNNOTE',
        'QnNote' => 'QNNOTE',
        'notes_cust_ship_order.QnNote' => 'QNNOTE',
        'Qnkey2' => 'QNKEY2',
        'NoteCustOrder.Qnkey2' => 'QNKEY2',
        'qnkey2' => 'QNKEY2',
        'noteCustOrder.qnkey2' => 'QNKEY2',
        'NoteCustOrderTableMap::COL_QNKEY2' => 'QNKEY2',
        'COL_QNKEY2' => 'QNKEY2',
        'QnKey2' => 'QNKEY2',
        'notes_cust_ship_order.QnKey2' => 'QNKEY2',
        'Qnform' => 'QNFORM',
        'NoteCustOrder.Qnform' => 'QNFORM',
        'qnform' => 'QNFORM',
        'noteCustOrder.qnform' => 'QNFORM',
        'NoteCustOrderTableMap::COL_QNFORM' => 'QNFORM',
        'COL_QNFORM' => 'QNFORM',
        'QnForm' => 'QNFORM',
        'notes_cust_ship_order.QnForm' => 'QNFORM',
        'Dateupdtd' => 'DATEUPDTD',
        'NoteCustOrder.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'noteCustOrder.dateupdtd' => 'DATEUPDTD',
        'NoteCustOrderTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'notes_cust_ship_order.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'NoteCustOrder.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'noteCustOrder.timeupdtd' => 'TIMEUPDTD',
        'NoteCustOrderTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'notes_cust_ship_order.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'NoteCustOrder.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'noteCustOrder.dummy' => 'DUMMY',
        'NoteCustOrderTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'notes_cust_ship_order.dummy' => 'DUMMY',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('notes_cust_ship_order');
        $this->setPhpName('NoteCustOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\NoteCustOrder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QnType', 'Qntype', 'VARCHAR', true, 4, '');
        $this->addColumn('QnTypeDesc', 'Qntypedesc', 'VARCHAR', false, 40, null);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', false, 6, null);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_ship_to', 'ArcuCustId', false, 6, null);
        $this->addForeignKey('ArstShipId', 'Arstshipid', 'VARCHAR', 'ar_ship_to', 'ArstShipId', false, 6, null);
        $this->addColumn('QnCustPickTicket', 'Qncustpickticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnCustPackTicket', 'Qncustpackticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnCustInvoice', 'Qncustinvoice', 'VARCHAR', false, 1, null);
        $this->addColumn('QnCustAcknow', 'Qncustacknow', 'VARCHAR', false, 1, null);
        $this->addPrimaryKey('QnSeq', 'Qnseq', 'INTEGER', true, 8, 0);
        $this->addColumn('QnNote', 'Qnnote', 'VARCHAR', false, 150, null);
        $this->addPrimaryKey('QnKey2', 'Qnkey2', 'VARCHAR', true, 50, '');
        $this->addPrimaryKey('QnForm', 'Qnform', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
), null, null, null, false);
        $this->addRelation('CustomerShipto', '\\CustomerShipto', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
  ),
  1 =>
  array (
    0 => ':ArstShipId',
    1 => ':ArstShipId',
  ),
), null, null, null, false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \NoteCustOrder $obj A \NoteCustOrder object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(NoteCustOrder $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getQntype() || is_scalar($obj->getQntype()) || is_callable([$obj->getQntype(), '__toString']) ? (string) $obj->getQntype() : $obj->getQntype()), (null === $obj->getQnseq() || is_scalar($obj->getQnseq()) || is_callable([$obj->getQnseq(), '__toString']) ? (string) $obj->getQnseq() : $obj->getQnseq()), (null === $obj->getQnkey2() || is_scalar($obj->getQnkey2()) || is_callable([$obj->getQnkey2(), '__toString']) ? (string) $obj->getQnkey2() : $obj->getQnkey2()), (null === $obj->getQnform() || is_scalar($obj->getQnform()) || is_callable([$obj->getQnform(), '__toString']) ? (string) $obj->getQnform() : $obj->getQnform())]);
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
     * @param mixed $value A \NoteCustOrder object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \NoteCustOrder) {
                $key = serialize([(null === $value->getQntype() || is_scalar($value->getQntype()) || is_callable([$value->getQntype(), '__toString']) ? (string) $value->getQntype() : $value->getQntype()), (null === $value->getQnseq() || is_scalar($value->getQnseq()) || is_callable([$value->getQnseq(), '__toString']) ? (string) $value->getQnseq() : $value->getQnseq()), (null === $value->getQnkey2() || is_scalar($value->getQnkey2()) || is_callable([$value->getQnkey2(), '__toString']) ? (string) $value->getQnkey2() : $value->getQnkey2()), (null === $value->getQnform() || is_scalar($value->getQnform()) || is_callable([$value->getQnform(), '__toString']) ? (string) $value->getQnform() : $value->getQnform())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \NoteCustOrder object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 10 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)])]);
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 8 + $offset
                : self::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 10 + $offset
                : self::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 11 + $offset
                : self::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)
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
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? NoteCustOrderTableMap::CLASS_DEFAULT : NoteCustOrderTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (NoteCustOrder object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = NoteCustOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = NoteCustOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + NoteCustOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NoteCustOrderTableMap::OM_CLASS;
            /** @var NoteCustOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            NoteCustOrderTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = NoteCustOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = NoteCustOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var NoteCustOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NoteCustOrderTableMap::addInstanceToPool($obj, $key);
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
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNTYPE);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNTYPEDESC);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNCUSTPICKTICKET);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNCUSTPACKTICKET);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNCUSTINVOICE);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNCUSTACKNOW);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNSEQ);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNNOTE);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNKEY2);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_QNFORM);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(NoteCustOrderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QnType');
            $criteria->addSelectColumn($alias . '.QnTypeDesc');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.QnCustPickTicket');
            $criteria->addSelectColumn($alias . '.QnCustPackTicket');
            $criteria->addSelectColumn($alias . '.QnCustInvoice');
            $criteria->addSelectColumn($alias . '.QnCustAcknow');
            $criteria->addSelectColumn($alias . '.QnSeq');
            $criteria->addSelectColumn($alias . '.QnNote');
            $criteria->addSelectColumn($alias . '.QnKey2');
            $criteria->addSelectColumn($alias . '.QnForm');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNTYPE);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNTYPEDESC);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_ARSTSHIPID);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNCUSTPICKTICKET);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNCUSTPACKTICKET);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNCUSTINVOICE);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNCUSTACKNOW);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNSEQ);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNNOTE);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNKEY2);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_QNFORM);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(NoteCustOrderTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.QnType');
            $criteria->removeSelectColumn($alias . '.QnTypeDesc');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.ArstShipId');
            $criteria->removeSelectColumn($alias . '.QnCustPickTicket');
            $criteria->removeSelectColumn($alias . '.QnCustPackTicket');
            $criteria->removeSelectColumn($alias . '.QnCustInvoice');
            $criteria->removeSelectColumn($alias . '.QnCustAcknow');
            $criteria->removeSelectColumn($alias . '.QnSeq');
            $criteria->removeSelectColumn($alias . '.QnNote');
            $criteria->removeSelectColumn($alias . '.QnKey2');
            $criteria->removeSelectColumn($alias . '.QnForm');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.TimeUpdtd');
            $criteria->removeSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(NoteCustOrderTableMap::DATABASE_NAME)->getTable(NoteCustOrderTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a NoteCustOrder or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or NoteCustOrder object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NoteCustOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \NoteCustOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NoteCustOrderTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(NoteCustOrderTableMap::COL_QNTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(NoteCustOrderTableMap::COL_QNSEQ, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(NoteCustOrderTableMap::COL_QNKEY2, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(NoteCustOrderTableMap::COL_QNFORM, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = NoteCustOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            NoteCustOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                NoteCustOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_cust_ship_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return NoteCustOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a NoteCustOrder or Criteria object.
     *
     * @param mixed $criteria Criteria or NoteCustOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NoteCustOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from NoteCustOrder object
        }


        // Set the correct dbName
        $query = NoteCustOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
