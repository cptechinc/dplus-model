<?php

namespace Map;

use \ItemXrefCustomerNote;
use \ItemXrefCustomerNoteQuery;
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
 * This class defines the structure of the 'notes_item_cust_xref' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ItemXrefCustomerNoteTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ItemXrefCustomerNoteTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'notes_item_cust_xref';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ItemXrefCustomerNote';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ItemXrefCustomerNote';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ItemXrefCustomerNote';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the QnType field
     */
    public const COL_QNTYPE = 'notes_item_cust_xref.QnType';

    /**
     * the column name for the QnTypeDesc field
     */
    public const COL_QNTYPEDESC = 'notes_item_cust_xref.QnTypeDesc';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'notes_item_cust_xref.InitItemNbr';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'notes_item_cust_xref.ArcuCustId';

    /**
     * the column name for the QnIcxmQuote field
     */
    public const COL_QNICXMQUOTE = 'notes_item_cust_xref.QnIcxmQuote';

    /**
     * the column name for the QnIcxmPickTicket field
     */
    public const COL_QNICXMPICKTICKET = 'notes_item_cust_xref.QnIcxmPickTicket';

    /**
     * the column name for the QnIcxmPackTicket field
     */
    public const COL_QNICXMPACKTICKET = 'notes_item_cust_xref.QnIcxmPackTicket';

    /**
     * the column name for the QnIcxmInvoice field
     */
    public const COL_QNICXMINVOICE = 'notes_item_cust_xref.QnIcxmInvoice';

    /**
     * the column name for the QnIcxmAcknow field
     */
    public const COL_QNICXMACKNOW = 'notes_item_cust_xref.QnIcxmAcknow';

    /**
     * the column name for the QnSeq field
     */
    public const COL_QNSEQ = 'notes_item_cust_xref.QnSeq';

    /**
     * the column name for the QnNote field
     */
    public const COL_QNNOTE = 'notes_item_cust_xref.QnNote';

    /**
     * the column name for the QnKey2 field
     */
    public const COL_QNKEY2 = 'notes_item_cust_xref.QnKey2';

    /**
     * the column name for the QnForm field
     */
    public const COL_QNFORM = 'notes_item_cust_xref.QnForm';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'notes_item_cust_xref.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'notes_item_cust_xref.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'notes_item_cust_xref.dummy';

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
        self::TYPE_PHPNAME       => ['Qntype', 'Qntypedesc', 'Inititemnbr', 'Arcucustid', 'Qnicxmquote', 'Qnicxmpickticket', 'Qnicxmpackticket', 'Qnicxminvoice', 'Qnicxmacknow', 'Qnseq', 'Qnnote', 'Qnkey2', 'Qnform', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['qntype', 'qntypedesc', 'inititemnbr', 'arcucustid', 'qnicxmquote', 'qnicxmpickticket', 'qnicxmpackticket', 'qnicxminvoice', 'qnicxmacknow', 'qnseq', 'qnnote', 'qnkey2', 'qnform', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ItemXrefCustomerNoteTableMap::COL_QNTYPE, ItemXrefCustomerNoteTableMap::COL_QNTYPEDESC, ItemXrefCustomerNoteTableMap::COL_INITITEMNBR, ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID, ItemXrefCustomerNoteTableMap::COL_QNICXMQUOTE, ItemXrefCustomerNoteTableMap::COL_QNICXMPICKTICKET, ItemXrefCustomerNoteTableMap::COL_QNICXMPACKTICKET, ItemXrefCustomerNoteTableMap::COL_QNICXMINVOICE, ItemXrefCustomerNoteTableMap::COL_QNICXMACKNOW, ItemXrefCustomerNoteTableMap::COL_QNSEQ, ItemXrefCustomerNoteTableMap::COL_QNNOTE, ItemXrefCustomerNoteTableMap::COL_QNKEY2, ItemXrefCustomerNoteTableMap::COL_QNFORM, ItemXrefCustomerNoteTableMap::COL_DATEUPDTD, ItemXrefCustomerNoteTableMap::COL_TIMEUPDTD, ItemXrefCustomerNoteTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['QnType', 'QnTypeDesc', 'InitItemNbr', 'ArcuCustId', 'QnIcxmQuote', 'QnIcxmPickTicket', 'QnIcxmPackTicket', 'QnIcxmInvoice', 'QnIcxmAcknow', 'QnSeq', 'QnNote', 'QnKey2', 'QnForm', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, ]
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
        self::TYPE_PHPNAME       => ['Qntype' => 0, 'Qntypedesc' => 1, 'Inititemnbr' => 2, 'Arcucustid' => 3, 'Qnicxmquote' => 4, 'Qnicxmpickticket' => 5, 'Qnicxmpackticket' => 6, 'Qnicxminvoice' => 7, 'Qnicxmacknow' => 8, 'Qnseq' => 9, 'Qnnote' => 10, 'Qnkey2' => 11, 'Qnform' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ],
        self::TYPE_CAMELNAME     => ['qntype' => 0, 'qntypedesc' => 1, 'inititemnbr' => 2, 'arcucustid' => 3, 'qnicxmquote' => 4, 'qnicxmpickticket' => 5, 'qnicxmpackticket' => 6, 'qnicxminvoice' => 7, 'qnicxmacknow' => 8, 'qnseq' => 9, 'qnnote' => 10, 'qnkey2' => 11, 'qnform' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ],
        self::TYPE_COLNAME       => [ItemXrefCustomerNoteTableMap::COL_QNTYPE => 0, ItemXrefCustomerNoteTableMap::COL_QNTYPEDESC => 1, ItemXrefCustomerNoteTableMap::COL_INITITEMNBR => 2, ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID => 3, ItemXrefCustomerNoteTableMap::COL_QNICXMQUOTE => 4, ItemXrefCustomerNoteTableMap::COL_QNICXMPICKTICKET => 5, ItemXrefCustomerNoteTableMap::COL_QNICXMPACKTICKET => 6, ItemXrefCustomerNoteTableMap::COL_QNICXMINVOICE => 7, ItemXrefCustomerNoteTableMap::COL_QNICXMACKNOW => 8, ItemXrefCustomerNoteTableMap::COL_QNSEQ => 9, ItemXrefCustomerNoteTableMap::COL_QNNOTE => 10, ItemXrefCustomerNoteTableMap::COL_QNKEY2 => 11, ItemXrefCustomerNoteTableMap::COL_QNFORM => 12, ItemXrefCustomerNoteTableMap::COL_DATEUPDTD => 13, ItemXrefCustomerNoteTableMap::COL_TIMEUPDTD => 14, ItemXrefCustomerNoteTableMap::COL_DUMMY => 15, ],
        self::TYPE_FIELDNAME     => ['QnType' => 0, 'QnTypeDesc' => 1, 'InitItemNbr' => 2, 'ArcuCustId' => 3, 'QnIcxmQuote' => 4, 'QnIcxmPickTicket' => 5, 'QnIcxmPackTicket' => 6, 'QnIcxmInvoice' => 7, 'QnIcxmAcknow' => 8, 'QnSeq' => 9, 'QnNote' => 10, 'QnKey2' => 11, 'QnForm' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Qntype' => 'QNTYPE',
        'ItemXrefCustomerNote.Qntype' => 'QNTYPE',
        'qntype' => 'QNTYPE',
        'itemXrefCustomerNote.qntype' => 'QNTYPE',
        'ItemXrefCustomerNoteTableMap::COL_QNTYPE' => 'QNTYPE',
        'COL_QNTYPE' => 'QNTYPE',
        'QnType' => 'QNTYPE',
        'notes_item_cust_xref.QnType' => 'QNTYPE',
        'Qntypedesc' => 'QNTYPEDESC',
        'ItemXrefCustomerNote.Qntypedesc' => 'QNTYPEDESC',
        'qntypedesc' => 'QNTYPEDESC',
        'itemXrefCustomerNote.qntypedesc' => 'QNTYPEDESC',
        'ItemXrefCustomerNoteTableMap::COL_QNTYPEDESC' => 'QNTYPEDESC',
        'COL_QNTYPEDESC' => 'QNTYPEDESC',
        'QnTypeDesc' => 'QNTYPEDESC',
        'notes_item_cust_xref.QnTypeDesc' => 'QNTYPEDESC',
        'Inititemnbr' => 'INITITEMNBR',
        'ItemXrefCustomerNote.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'itemXrefCustomerNote.inititemnbr' => 'INITITEMNBR',
        'ItemXrefCustomerNoteTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'notes_item_cust_xref.InitItemNbr' => 'INITITEMNBR',
        'Arcucustid' => 'ARCUCUSTID',
        'ItemXrefCustomerNote.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'itemXrefCustomerNote.arcucustid' => 'ARCUCUSTID',
        'ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'notes_item_cust_xref.ArcuCustId' => 'ARCUCUSTID',
        'Qnicxmquote' => 'QNICXMQUOTE',
        'ItemXrefCustomerNote.Qnicxmquote' => 'QNICXMQUOTE',
        'qnicxmquote' => 'QNICXMQUOTE',
        'itemXrefCustomerNote.qnicxmquote' => 'QNICXMQUOTE',
        'ItemXrefCustomerNoteTableMap::COL_QNICXMQUOTE' => 'QNICXMQUOTE',
        'COL_QNICXMQUOTE' => 'QNICXMQUOTE',
        'QnIcxmQuote' => 'QNICXMQUOTE',
        'notes_item_cust_xref.QnIcxmQuote' => 'QNICXMQUOTE',
        'Qnicxmpickticket' => 'QNICXMPICKTICKET',
        'ItemXrefCustomerNote.Qnicxmpickticket' => 'QNICXMPICKTICKET',
        'qnicxmpickticket' => 'QNICXMPICKTICKET',
        'itemXrefCustomerNote.qnicxmpickticket' => 'QNICXMPICKTICKET',
        'ItemXrefCustomerNoteTableMap::COL_QNICXMPICKTICKET' => 'QNICXMPICKTICKET',
        'COL_QNICXMPICKTICKET' => 'QNICXMPICKTICKET',
        'QnIcxmPickTicket' => 'QNICXMPICKTICKET',
        'notes_item_cust_xref.QnIcxmPickTicket' => 'QNICXMPICKTICKET',
        'Qnicxmpackticket' => 'QNICXMPACKTICKET',
        'ItemXrefCustomerNote.Qnicxmpackticket' => 'QNICXMPACKTICKET',
        'qnicxmpackticket' => 'QNICXMPACKTICKET',
        'itemXrefCustomerNote.qnicxmpackticket' => 'QNICXMPACKTICKET',
        'ItemXrefCustomerNoteTableMap::COL_QNICXMPACKTICKET' => 'QNICXMPACKTICKET',
        'COL_QNICXMPACKTICKET' => 'QNICXMPACKTICKET',
        'QnIcxmPackTicket' => 'QNICXMPACKTICKET',
        'notes_item_cust_xref.QnIcxmPackTicket' => 'QNICXMPACKTICKET',
        'Qnicxminvoice' => 'QNICXMINVOICE',
        'ItemXrefCustomerNote.Qnicxminvoice' => 'QNICXMINVOICE',
        'qnicxminvoice' => 'QNICXMINVOICE',
        'itemXrefCustomerNote.qnicxminvoice' => 'QNICXMINVOICE',
        'ItemXrefCustomerNoteTableMap::COL_QNICXMINVOICE' => 'QNICXMINVOICE',
        'COL_QNICXMINVOICE' => 'QNICXMINVOICE',
        'QnIcxmInvoice' => 'QNICXMINVOICE',
        'notes_item_cust_xref.QnIcxmInvoice' => 'QNICXMINVOICE',
        'Qnicxmacknow' => 'QNICXMACKNOW',
        'ItemXrefCustomerNote.Qnicxmacknow' => 'QNICXMACKNOW',
        'qnicxmacknow' => 'QNICXMACKNOW',
        'itemXrefCustomerNote.qnicxmacknow' => 'QNICXMACKNOW',
        'ItemXrefCustomerNoteTableMap::COL_QNICXMACKNOW' => 'QNICXMACKNOW',
        'COL_QNICXMACKNOW' => 'QNICXMACKNOW',
        'QnIcxmAcknow' => 'QNICXMACKNOW',
        'notes_item_cust_xref.QnIcxmAcknow' => 'QNICXMACKNOW',
        'Qnseq' => 'QNSEQ',
        'ItemXrefCustomerNote.Qnseq' => 'QNSEQ',
        'qnseq' => 'QNSEQ',
        'itemXrefCustomerNote.qnseq' => 'QNSEQ',
        'ItemXrefCustomerNoteTableMap::COL_QNSEQ' => 'QNSEQ',
        'COL_QNSEQ' => 'QNSEQ',
        'QnSeq' => 'QNSEQ',
        'notes_item_cust_xref.QnSeq' => 'QNSEQ',
        'Qnnote' => 'QNNOTE',
        'ItemXrefCustomerNote.Qnnote' => 'QNNOTE',
        'qnnote' => 'QNNOTE',
        'itemXrefCustomerNote.qnnote' => 'QNNOTE',
        'ItemXrefCustomerNoteTableMap::COL_QNNOTE' => 'QNNOTE',
        'COL_QNNOTE' => 'QNNOTE',
        'QnNote' => 'QNNOTE',
        'notes_item_cust_xref.QnNote' => 'QNNOTE',
        'Qnkey2' => 'QNKEY2',
        'ItemXrefCustomerNote.Qnkey2' => 'QNKEY2',
        'qnkey2' => 'QNKEY2',
        'itemXrefCustomerNote.qnkey2' => 'QNKEY2',
        'ItemXrefCustomerNoteTableMap::COL_QNKEY2' => 'QNKEY2',
        'COL_QNKEY2' => 'QNKEY2',
        'QnKey2' => 'QNKEY2',
        'notes_item_cust_xref.QnKey2' => 'QNKEY2',
        'Qnform' => 'QNFORM',
        'ItemXrefCustomerNote.Qnform' => 'QNFORM',
        'qnform' => 'QNFORM',
        'itemXrefCustomerNote.qnform' => 'QNFORM',
        'ItemXrefCustomerNoteTableMap::COL_QNFORM' => 'QNFORM',
        'COL_QNFORM' => 'QNFORM',
        'QnForm' => 'QNFORM',
        'notes_item_cust_xref.QnForm' => 'QNFORM',
        'Dateupdtd' => 'DATEUPDTD',
        'ItemXrefCustomerNote.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'itemXrefCustomerNote.dateupdtd' => 'DATEUPDTD',
        'ItemXrefCustomerNoteTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'notes_item_cust_xref.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ItemXrefCustomerNote.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'itemXrefCustomerNote.timeupdtd' => 'TIMEUPDTD',
        'ItemXrefCustomerNoteTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'notes_item_cust_xref.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ItemXrefCustomerNote.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'itemXrefCustomerNote.dummy' => 'DUMMY',
        'ItemXrefCustomerNoteTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'notes_item_cust_xref.dummy' => 'DUMMY',
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
        $this->setName('notes_item_cust_xref');
        $this->setPhpName('ItemXrefCustomerNote');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemXrefCustomerNote');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QnType', 'Qntype', 'VARCHAR', true, 4, '');
        $this->addColumn('QnTypeDesc', 'Qntypedesc', 'VARCHAR', false, 40, null);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', false, 30, null);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', false, 6, null);
        $this->addColumn('QnIcxmQuote', 'Qnicxmquote', 'VARCHAR', false, 1, null);
        $this->addColumn('QnIcxmPickTicket', 'Qnicxmpickticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnIcxmPackTicket', 'Qnicxmpackticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnIcxmInvoice', 'Qnicxminvoice', 'VARCHAR', false, 1, null);
        $this->addColumn('QnIcxmAcknow', 'Qnicxmacknow', 'VARCHAR', false, 1, null);
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
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('Customer', '\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArcuCustId',
    1 => ':ArcuCustId',
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
     * @param \ItemXrefCustomerNote $obj A \ItemXrefCustomerNote object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ItemXrefCustomerNote $obj, ?string $key = null): void
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
     * @param mixed $value A \ItemXrefCustomerNote object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemXrefCustomerNote) {
                $key = serialize([(null === $value->getQntype() || is_scalar($value->getQntype()) || is_callable([$value->getQntype(), '__toString']) ? (string) $value->getQntype() : $value->getQntype()), (null === $value->getQnseq() || is_scalar($value->getQnseq()) || is_callable([$value->getQnseq(), '__toString']) ? (string) $value->getQnseq() : $value->getQnseq()), (null === $value->getQnkey2() || is_scalar($value->getQnkey2()) || is_callable([$value->getQnkey2(), '__toString']) ? (string) $value->getQnkey2() : $value->getQnkey2()), (null === $value->getQnform() || is_scalar($value->getQnform()) || is_callable([$value->getQnform(), '__toString']) ? (string) $value->getQnform() : $value->getQnform())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemXrefCustomerNote object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 12 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 9 + $offset
                : self::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 11 + $offset
                : self::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 12 + $offset
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
        return $withPrefix ? ItemXrefCustomerNoteTableMap::CLASS_DEFAULT : ItemXrefCustomerNoteTableMap::OM_CLASS;
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
     * @return array (ItemXrefCustomerNote object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ItemXrefCustomerNoteTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemXrefCustomerNoteTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemXrefCustomerNoteTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemXrefCustomerNoteTableMap::OM_CLASS;
            /** @var ItemXrefCustomerNote $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemXrefCustomerNoteTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemXrefCustomerNoteTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemXrefCustomerNoteTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemXrefCustomerNote $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemXrefCustomerNoteTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNTYPE);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNTYPEDESC);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMQUOTE);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMPICKTICKET);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMPACKTICKET);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMINVOICE);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMACKNOW);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNSEQ);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNNOTE);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNKEY2);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNFORM);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemXrefCustomerNoteTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QnType');
            $criteria->addSelectColumn($alias . '.QnTypeDesc');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.QnIcxmQuote');
            $criteria->addSelectColumn($alias . '.QnIcxmPickTicket');
            $criteria->addSelectColumn($alias . '.QnIcxmPackTicket');
            $criteria->addSelectColumn($alias . '.QnIcxmInvoice');
            $criteria->addSelectColumn($alias . '.QnIcxmAcknow');
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
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNTYPE);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNTYPEDESC);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMQUOTE);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMPICKTICKET);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMPACKTICKET);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMINVOICE);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNICXMACKNOW);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNSEQ);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNNOTE);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNKEY2);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_QNFORM);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ItemXrefCustomerNoteTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.QnType');
            $criteria->removeSelectColumn($alias . '.QnTypeDesc');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.QnIcxmQuote');
            $criteria->removeSelectColumn($alias . '.QnIcxmPickTicket');
            $criteria->removeSelectColumn($alias . '.QnIcxmPackTicket');
            $criteria->removeSelectColumn($alias . '.QnIcxmInvoice');
            $criteria->removeSelectColumn($alias . '.QnIcxmAcknow');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemXrefCustomerNoteTableMap::DATABASE_NAME)->getTable(ItemXrefCustomerNoteTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ItemXrefCustomerNote or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ItemXrefCustomerNote object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerNoteTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemXrefCustomerNote) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemXrefCustomerNoteTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNSEQ, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNKEY2, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNFORM, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemXrefCustomerNoteQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemXrefCustomerNoteTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemXrefCustomerNoteTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_item_cust_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ItemXrefCustomerNoteQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemXrefCustomerNote or Criteria object.
     *
     * @param mixed $criteria Criteria or ItemXrefCustomerNote object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerNoteTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemXrefCustomerNote object
        }


        // Set the correct dbName
        $query = ItemXrefCustomerNoteQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
