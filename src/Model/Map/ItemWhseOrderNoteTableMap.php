<?php

namespace Map;

use \ItemWhseOrderNote;
use \ItemWhseOrderNoteQuery;
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
 * This class defines the structure of the 'notes_item_wh_order' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ItemWhseOrderNoteTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ItemWhseOrderNoteTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'notes_item_wh_order';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ItemWhseOrderNote';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ItemWhseOrderNote';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ItemWhseOrderNote';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 18;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 18;

    /**
     * the column name for the QnType field
     */
    public const COL_QNTYPE = 'notes_item_wh_order.QnType';

    /**
     * the column name for the QnTypeDesc field
     */
    public const COL_QNTYPEDESC = 'notes_item_wh_order.QnTypeDesc';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'notes_item_wh_order.InitItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    public const COL_INTBWHSE = 'notes_item_wh_order.IntbWhse';

    /**
     * the column name for the QnOrdrPickTicket field
     */
    public const COL_QNORDRPICKTICKET = 'notes_item_wh_order.QnOrdrPickTicket';

    /**
     * the column name for the QnOrdrPackTicket field
     */
    public const COL_QNORDRPACKTICKET = 'notes_item_wh_order.QnOrdrPackTicket';

    /**
     * the column name for the QnOrdrInvoice field
     */
    public const COL_QNORDRINVOICE = 'notes_item_wh_order.QnOrdrInvoice';

    /**
     * the column name for the QnOrdrAcknow field
     */
    public const COL_QNORDRACKNOW = 'notes_item_wh_order.QnOrdrAcknow';

    /**
     * the column name for the QnOrdrQuote field
     */
    public const COL_QNORDRQUOTE = 'notes_item_wh_order.QnOrdrQuote';

    /**
     * the column name for the QnOrdrPurchOrdr field
     */
    public const COL_QNORDRPURCHORDR = 'notes_item_wh_order.QnOrdrPurchOrdr';

    /**
     * the column name for the QnOrdrTransfer field
     */
    public const COL_QNORDRTRANSFER = 'notes_item_wh_order.QnOrdrTransfer';

    /**
     * the column name for the QnSeq field
     */
    public const COL_QNSEQ = 'notes_item_wh_order.QnSeq';

    /**
     * the column name for the QnNote field
     */
    public const COL_QNNOTE = 'notes_item_wh_order.QnNote';

    /**
     * the column name for the QnKey2 field
     */
    public const COL_QNKEY2 = 'notes_item_wh_order.QnKey2';

    /**
     * the column name for the QnForm field
     */
    public const COL_QNFORM = 'notes_item_wh_order.QnForm';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'notes_item_wh_order.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'notes_item_wh_order.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'notes_item_wh_order.dummy';

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
        self::TYPE_PHPNAME       => ['Qntype', 'Qntypedesc', 'Inititemnbr', 'Intbwhse', 'Qnordrpickticket', 'Qnordrpackticket', 'Qnordrinvoice', 'Qnordracknow', 'Qnordrquote', 'Qnordrpurchordr', 'Qnordrtransfer', 'Qnseq', 'Qnnote', 'Qnkey2', 'Qnform', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['qntype', 'qntypedesc', 'inititemnbr', 'intbwhse', 'qnordrpickticket', 'qnordrpackticket', 'qnordrinvoice', 'qnordracknow', 'qnordrquote', 'qnordrpurchordr', 'qnordrtransfer', 'qnseq', 'qnnote', 'qnkey2', 'qnform', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ItemWhseOrderNoteTableMap::COL_QNTYPE, ItemWhseOrderNoteTableMap::COL_QNTYPEDESC, ItemWhseOrderNoteTableMap::COL_INITITEMNBR, ItemWhseOrderNoteTableMap::COL_INTBWHSE, ItemWhseOrderNoteTableMap::COL_QNORDRPICKTICKET, ItemWhseOrderNoteTableMap::COL_QNORDRPACKTICKET, ItemWhseOrderNoteTableMap::COL_QNORDRINVOICE, ItemWhseOrderNoteTableMap::COL_QNORDRACKNOW, ItemWhseOrderNoteTableMap::COL_QNORDRQUOTE, ItemWhseOrderNoteTableMap::COL_QNORDRPURCHORDR, ItemWhseOrderNoteTableMap::COL_QNORDRTRANSFER, ItemWhseOrderNoteTableMap::COL_QNSEQ, ItemWhseOrderNoteTableMap::COL_QNNOTE, ItemWhseOrderNoteTableMap::COL_QNKEY2, ItemWhseOrderNoteTableMap::COL_QNFORM, ItemWhseOrderNoteTableMap::COL_DATEUPDTD, ItemWhseOrderNoteTableMap::COL_TIMEUPDTD, ItemWhseOrderNoteTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['QnType', 'QnTypeDesc', 'InitItemNbr', 'IntbWhse', 'QnOrdrPickTicket', 'QnOrdrPackTicket', 'QnOrdrInvoice', 'QnOrdrAcknow', 'QnOrdrQuote', 'QnOrdrPurchOrdr', 'QnOrdrTransfer', 'QnSeq', 'QnNote', 'QnKey2', 'QnForm', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, ]
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
        self::TYPE_PHPNAME       => ['Qntype' => 0, 'Qntypedesc' => 1, 'Inititemnbr' => 2, 'Intbwhse' => 3, 'Qnordrpickticket' => 4, 'Qnordrpackticket' => 5, 'Qnordrinvoice' => 6, 'Qnordracknow' => 7, 'Qnordrquote' => 8, 'Qnordrpurchordr' => 9, 'Qnordrtransfer' => 10, 'Qnseq' => 11, 'Qnnote' => 12, 'Qnkey2' => 13, 'Qnform' => 14, 'Dateupdtd' => 15, 'Timeupdtd' => 16, 'Dummy' => 17, ],
        self::TYPE_CAMELNAME     => ['qntype' => 0, 'qntypedesc' => 1, 'inititemnbr' => 2, 'intbwhse' => 3, 'qnordrpickticket' => 4, 'qnordrpackticket' => 5, 'qnordrinvoice' => 6, 'qnordracknow' => 7, 'qnordrquote' => 8, 'qnordrpurchordr' => 9, 'qnordrtransfer' => 10, 'qnseq' => 11, 'qnnote' => 12, 'qnkey2' => 13, 'qnform' => 14, 'dateupdtd' => 15, 'timeupdtd' => 16, 'dummy' => 17, ],
        self::TYPE_COLNAME       => [ItemWhseOrderNoteTableMap::COL_QNTYPE => 0, ItemWhseOrderNoteTableMap::COL_QNTYPEDESC => 1, ItemWhseOrderNoteTableMap::COL_INITITEMNBR => 2, ItemWhseOrderNoteTableMap::COL_INTBWHSE => 3, ItemWhseOrderNoteTableMap::COL_QNORDRPICKTICKET => 4, ItemWhseOrderNoteTableMap::COL_QNORDRPACKTICKET => 5, ItemWhseOrderNoteTableMap::COL_QNORDRINVOICE => 6, ItemWhseOrderNoteTableMap::COL_QNORDRACKNOW => 7, ItemWhseOrderNoteTableMap::COL_QNORDRQUOTE => 8, ItemWhseOrderNoteTableMap::COL_QNORDRPURCHORDR => 9, ItemWhseOrderNoteTableMap::COL_QNORDRTRANSFER => 10, ItemWhseOrderNoteTableMap::COL_QNSEQ => 11, ItemWhseOrderNoteTableMap::COL_QNNOTE => 12, ItemWhseOrderNoteTableMap::COL_QNKEY2 => 13, ItemWhseOrderNoteTableMap::COL_QNFORM => 14, ItemWhseOrderNoteTableMap::COL_DATEUPDTD => 15, ItemWhseOrderNoteTableMap::COL_TIMEUPDTD => 16, ItemWhseOrderNoteTableMap::COL_DUMMY => 17, ],
        self::TYPE_FIELDNAME     => ['QnType' => 0, 'QnTypeDesc' => 1, 'InitItemNbr' => 2, 'IntbWhse' => 3, 'QnOrdrPickTicket' => 4, 'QnOrdrPackTicket' => 5, 'QnOrdrInvoice' => 6, 'QnOrdrAcknow' => 7, 'QnOrdrQuote' => 8, 'QnOrdrPurchOrdr' => 9, 'QnOrdrTransfer' => 10, 'QnSeq' => 11, 'QnNote' => 12, 'QnKey2' => 13, 'QnForm' => 14, 'DateUpdtd' => 15, 'TimeUpdtd' => 16, 'dummy' => 17, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Qntype' => 'QNTYPE',
        'ItemWhseOrderNote.Qntype' => 'QNTYPE',
        'qntype' => 'QNTYPE',
        'itemWhseOrderNote.qntype' => 'QNTYPE',
        'ItemWhseOrderNoteTableMap::COL_QNTYPE' => 'QNTYPE',
        'COL_QNTYPE' => 'QNTYPE',
        'QnType' => 'QNTYPE',
        'notes_item_wh_order.QnType' => 'QNTYPE',
        'Qntypedesc' => 'QNTYPEDESC',
        'ItemWhseOrderNote.Qntypedesc' => 'QNTYPEDESC',
        'qntypedesc' => 'QNTYPEDESC',
        'itemWhseOrderNote.qntypedesc' => 'QNTYPEDESC',
        'ItemWhseOrderNoteTableMap::COL_QNTYPEDESC' => 'QNTYPEDESC',
        'COL_QNTYPEDESC' => 'QNTYPEDESC',
        'QnTypeDesc' => 'QNTYPEDESC',
        'notes_item_wh_order.QnTypeDesc' => 'QNTYPEDESC',
        'Inititemnbr' => 'INITITEMNBR',
        'ItemWhseOrderNote.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'itemWhseOrderNote.inititemnbr' => 'INITITEMNBR',
        'ItemWhseOrderNoteTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'notes_item_wh_order.InitItemNbr' => 'INITITEMNBR',
        'Intbwhse' => 'INTBWHSE',
        'ItemWhseOrderNote.Intbwhse' => 'INTBWHSE',
        'intbwhse' => 'INTBWHSE',
        'itemWhseOrderNote.intbwhse' => 'INTBWHSE',
        'ItemWhseOrderNoteTableMap::COL_INTBWHSE' => 'INTBWHSE',
        'COL_INTBWHSE' => 'INTBWHSE',
        'IntbWhse' => 'INTBWHSE',
        'notes_item_wh_order.IntbWhse' => 'INTBWHSE',
        'Qnordrpickticket' => 'QNORDRPICKTICKET',
        'ItemWhseOrderNote.Qnordrpickticket' => 'QNORDRPICKTICKET',
        'qnordrpickticket' => 'QNORDRPICKTICKET',
        'itemWhseOrderNote.qnordrpickticket' => 'QNORDRPICKTICKET',
        'ItemWhseOrderNoteTableMap::COL_QNORDRPICKTICKET' => 'QNORDRPICKTICKET',
        'COL_QNORDRPICKTICKET' => 'QNORDRPICKTICKET',
        'QnOrdrPickTicket' => 'QNORDRPICKTICKET',
        'notes_item_wh_order.QnOrdrPickTicket' => 'QNORDRPICKTICKET',
        'Qnordrpackticket' => 'QNORDRPACKTICKET',
        'ItemWhseOrderNote.Qnordrpackticket' => 'QNORDRPACKTICKET',
        'qnordrpackticket' => 'QNORDRPACKTICKET',
        'itemWhseOrderNote.qnordrpackticket' => 'QNORDRPACKTICKET',
        'ItemWhseOrderNoteTableMap::COL_QNORDRPACKTICKET' => 'QNORDRPACKTICKET',
        'COL_QNORDRPACKTICKET' => 'QNORDRPACKTICKET',
        'QnOrdrPackTicket' => 'QNORDRPACKTICKET',
        'notes_item_wh_order.QnOrdrPackTicket' => 'QNORDRPACKTICKET',
        'Qnordrinvoice' => 'QNORDRINVOICE',
        'ItemWhseOrderNote.Qnordrinvoice' => 'QNORDRINVOICE',
        'qnordrinvoice' => 'QNORDRINVOICE',
        'itemWhseOrderNote.qnordrinvoice' => 'QNORDRINVOICE',
        'ItemWhseOrderNoteTableMap::COL_QNORDRINVOICE' => 'QNORDRINVOICE',
        'COL_QNORDRINVOICE' => 'QNORDRINVOICE',
        'QnOrdrInvoice' => 'QNORDRINVOICE',
        'notes_item_wh_order.QnOrdrInvoice' => 'QNORDRINVOICE',
        'Qnordracknow' => 'QNORDRACKNOW',
        'ItemWhseOrderNote.Qnordracknow' => 'QNORDRACKNOW',
        'qnordracknow' => 'QNORDRACKNOW',
        'itemWhseOrderNote.qnordracknow' => 'QNORDRACKNOW',
        'ItemWhseOrderNoteTableMap::COL_QNORDRACKNOW' => 'QNORDRACKNOW',
        'COL_QNORDRACKNOW' => 'QNORDRACKNOW',
        'QnOrdrAcknow' => 'QNORDRACKNOW',
        'notes_item_wh_order.QnOrdrAcknow' => 'QNORDRACKNOW',
        'Qnordrquote' => 'QNORDRQUOTE',
        'ItemWhseOrderNote.Qnordrquote' => 'QNORDRQUOTE',
        'qnordrquote' => 'QNORDRQUOTE',
        'itemWhseOrderNote.qnordrquote' => 'QNORDRQUOTE',
        'ItemWhseOrderNoteTableMap::COL_QNORDRQUOTE' => 'QNORDRQUOTE',
        'COL_QNORDRQUOTE' => 'QNORDRQUOTE',
        'QnOrdrQuote' => 'QNORDRQUOTE',
        'notes_item_wh_order.QnOrdrQuote' => 'QNORDRQUOTE',
        'Qnordrpurchordr' => 'QNORDRPURCHORDR',
        'ItemWhseOrderNote.Qnordrpurchordr' => 'QNORDRPURCHORDR',
        'qnordrpurchordr' => 'QNORDRPURCHORDR',
        'itemWhseOrderNote.qnordrpurchordr' => 'QNORDRPURCHORDR',
        'ItemWhseOrderNoteTableMap::COL_QNORDRPURCHORDR' => 'QNORDRPURCHORDR',
        'COL_QNORDRPURCHORDR' => 'QNORDRPURCHORDR',
        'QnOrdrPurchOrdr' => 'QNORDRPURCHORDR',
        'notes_item_wh_order.QnOrdrPurchOrdr' => 'QNORDRPURCHORDR',
        'Qnordrtransfer' => 'QNORDRTRANSFER',
        'ItemWhseOrderNote.Qnordrtransfer' => 'QNORDRTRANSFER',
        'qnordrtransfer' => 'QNORDRTRANSFER',
        'itemWhseOrderNote.qnordrtransfer' => 'QNORDRTRANSFER',
        'ItemWhseOrderNoteTableMap::COL_QNORDRTRANSFER' => 'QNORDRTRANSFER',
        'COL_QNORDRTRANSFER' => 'QNORDRTRANSFER',
        'QnOrdrTransfer' => 'QNORDRTRANSFER',
        'notes_item_wh_order.QnOrdrTransfer' => 'QNORDRTRANSFER',
        'Qnseq' => 'QNSEQ',
        'ItemWhseOrderNote.Qnseq' => 'QNSEQ',
        'qnseq' => 'QNSEQ',
        'itemWhseOrderNote.qnseq' => 'QNSEQ',
        'ItemWhseOrderNoteTableMap::COL_QNSEQ' => 'QNSEQ',
        'COL_QNSEQ' => 'QNSEQ',
        'QnSeq' => 'QNSEQ',
        'notes_item_wh_order.QnSeq' => 'QNSEQ',
        'Qnnote' => 'QNNOTE',
        'ItemWhseOrderNote.Qnnote' => 'QNNOTE',
        'qnnote' => 'QNNOTE',
        'itemWhseOrderNote.qnnote' => 'QNNOTE',
        'ItemWhseOrderNoteTableMap::COL_QNNOTE' => 'QNNOTE',
        'COL_QNNOTE' => 'QNNOTE',
        'QnNote' => 'QNNOTE',
        'notes_item_wh_order.QnNote' => 'QNNOTE',
        'Qnkey2' => 'QNKEY2',
        'ItemWhseOrderNote.Qnkey2' => 'QNKEY2',
        'qnkey2' => 'QNKEY2',
        'itemWhseOrderNote.qnkey2' => 'QNKEY2',
        'ItemWhseOrderNoteTableMap::COL_QNKEY2' => 'QNKEY2',
        'COL_QNKEY2' => 'QNKEY2',
        'QnKey2' => 'QNKEY2',
        'notes_item_wh_order.QnKey2' => 'QNKEY2',
        'Qnform' => 'QNFORM',
        'ItemWhseOrderNote.Qnform' => 'QNFORM',
        'qnform' => 'QNFORM',
        'itemWhseOrderNote.qnform' => 'QNFORM',
        'ItemWhseOrderNoteTableMap::COL_QNFORM' => 'QNFORM',
        'COL_QNFORM' => 'QNFORM',
        'QnForm' => 'QNFORM',
        'notes_item_wh_order.QnForm' => 'QNFORM',
        'Dateupdtd' => 'DATEUPDTD',
        'ItemWhseOrderNote.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'itemWhseOrderNote.dateupdtd' => 'DATEUPDTD',
        'ItemWhseOrderNoteTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'notes_item_wh_order.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ItemWhseOrderNote.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'itemWhseOrderNote.timeupdtd' => 'TIMEUPDTD',
        'ItemWhseOrderNoteTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'notes_item_wh_order.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ItemWhseOrderNote.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'itemWhseOrderNote.dummy' => 'DUMMY',
        'ItemWhseOrderNoteTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'notes_item_wh_order.dummy' => 'DUMMY',
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
        $this->setName('notes_item_wh_order');
        $this->setPhpName('ItemWhseOrderNote');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemWhseOrderNote');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QnType', 'Qntype', 'VARCHAR', true, 4, '');
        $this->addColumn('QnTypeDesc', 'Qntypedesc', 'VARCHAR', false, 40, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('QnOrdrPickTicket', 'Qnordrpickticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnOrdrPackTicket', 'Qnordrpackticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnOrdrInvoice', 'Qnordrinvoice', 'VARCHAR', false, 1, null);
        $this->addColumn('QnOrdrAcknow', 'Qnordracknow', 'VARCHAR', false, 1, null);
        $this->addColumn('QnOrdrQuote', 'Qnordrquote', 'VARCHAR', false, 1, null);
        $this->addColumn('QnOrdrPurchOrdr', 'Qnordrpurchordr', 'VARCHAR', false, 1, null);
        $this->addColumn('QnOrdrTransfer', 'Qnordrtransfer', 'VARCHAR', false, 1, null);
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
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ItemWhseOrderNote $obj A \ItemWhseOrderNote object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(ItemWhseOrderNote $obj, ?string $key = null): void
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
     * @param mixed $value A \ItemWhseOrderNote object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ItemWhseOrderNote) {
                $key = serialize([(null === $value->getQntype() || is_scalar($value->getQntype()) || is_callable([$value->getQntype(), '__toString']) ? (string) $value->getQntype() : $value->getQntype()), (null === $value->getQnseq() || is_scalar($value->getQnseq()) || is_callable([$value->getQnseq(), '__toString']) ? (string) $value->getQnseq() : $value->getQnseq()), (null === $value->getQnkey2() || is_scalar($value->getQnkey2()) || is_callable([$value->getQnkey2(), '__toString']) ? (string) $value->getQnkey2() : $value->getQnkey2()), (null === $value->getQnform() || is_scalar($value->getQnform()) || is_callable([$value->getQnform(), '__toString']) ? (string) $value->getQnform() : $value->getQnform())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ItemWhseOrderNote object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Qntype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 11 + $offset : static::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 13 + $offset : static::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 14 + $offset : static::translateFieldName('Qnform', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 11 + $offset
                : self::translateFieldName('Qnseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 13 + $offset
                : self::translateFieldName('Qnkey2', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 14 + $offset
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
        return $withPrefix ? ItemWhseOrderNoteTableMap::CLASS_DEFAULT : ItemWhseOrderNoteTableMap::OM_CLASS;
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
     * @return array (ItemWhseOrderNote object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ItemWhseOrderNoteTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemWhseOrderNoteTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemWhseOrderNoteTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemWhseOrderNoteTableMap::OM_CLASS;
            /** @var ItemWhseOrderNote $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemWhseOrderNoteTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemWhseOrderNoteTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemWhseOrderNoteTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemWhseOrderNote $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemWhseOrderNoteTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNTYPE);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNTYPEDESC);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRPICKTICKET);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRPACKTICKET);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRINVOICE);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRACKNOW);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRQUOTE);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRPURCHORDR);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRTRANSFER);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNSEQ);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNNOTE);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNKEY2);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_QNFORM);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemWhseOrderNoteTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QnType');
            $criteria->addSelectColumn($alias . '.QnTypeDesc');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.QnOrdrPickTicket');
            $criteria->addSelectColumn($alias . '.QnOrdrPackTicket');
            $criteria->addSelectColumn($alias . '.QnOrdrInvoice');
            $criteria->addSelectColumn($alias . '.QnOrdrAcknow');
            $criteria->addSelectColumn($alias . '.QnOrdrQuote');
            $criteria->addSelectColumn($alias . '.QnOrdrPurchOrdr');
            $criteria->addSelectColumn($alias . '.QnOrdrTransfer');
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
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNTYPE);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNTYPEDESC);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_INTBWHSE);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRPICKTICKET);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRPACKTICKET);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRINVOICE);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRACKNOW);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRQUOTE);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRPURCHORDR);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNORDRTRANSFER);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNSEQ);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNNOTE);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNKEY2);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_QNFORM);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ItemWhseOrderNoteTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.QnType');
            $criteria->removeSelectColumn($alias . '.QnTypeDesc');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.IntbWhse');
            $criteria->removeSelectColumn($alias . '.QnOrdrPickTicket');
            $criteria->removeSelectColumn($alias . '.QnOrdrPackTicket');
            $criteria->removeSelectColumn($alias . '.QnOrdrInvoice');
            $criteria->removeSelectColumn($alias . '.QnOrdrAcknow');
            $criteria->removeSelectColumn($alias . '.QnOrdrQuote');
            $criteria->removeSelectColumn($alias . '.QnOrdrPurchOrdr');
            $criteria->removeSelectColumn($alias . '.QnOrdrTransfer');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemWhseOrderNoteTableMap::DATABASE_NAME)->getTable(ItemWhseOrderNoteTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ItemWhseOrderNote or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ItemWhseOrderNote object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemWhseOrderNoteTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemWhseOrderNote) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemWhseOrderNoteTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNSEQ, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNKEY2, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNFORM, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = ItemWhseOrderNoteQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemWhseOrderNoteTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemWhseOrderNoteTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_item_wh_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ItemWhseOrderNoteQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemWhseOrderNote or Criteria object.
     *
     * @param mixed $criteria Criteria or ItemWhseOrderNote object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemWhseOrderNoteTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemWhseOrderNote object
        }


        // Set the correct dbName
        $query = ItemWhseOrderNoteQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
