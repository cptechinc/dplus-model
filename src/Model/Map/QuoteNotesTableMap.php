<?php

namespace Map;

use \QuoteNotes;
use \QuoteNotesQuery;
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
 * This class defines the structure of the 'notes_qt_head_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class QuoteNotesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.QuoteNotesTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'notes_qt_head_det';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'QuoteNotes';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\QuoteNotes';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'QuoteNotes';

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
    public const COL_QNTYPE = 'notes_qt_head_det.QnType';

    /**
     * the column name for the QnTypeDesc field
     */
    public const COL_QNTYPEDESC = 'notes_qt_head_det.QnTypeDesc';

    /**
     * the column name for the QthdId field
     */
    public const COL_QTHDID = 'notes_qt_head_det.QthdId';

    /**
     * the column name for the QtdtLine field
     */
    public const COL_QTDTLINE = 'notes_qt_head_det.QtdtLine';

    /**
     * the column name for the QnQuotQuote field
     */
    public const COL_QNQUOTQUOTE = 'notes_qt_head_det.QnQuotQuote';

    /**
     * the column name for the QnQuotPickTicket field
     */
    public const COL_QNQUOTPICKTICKET = 'notes_qt_head_det.QnQuotPickTicket';

    /**
     * the column name for the QnQuotPackTicket field
     */
    public const COL_QNQUOTPACKTICKET = 'notes_qt_head_det.QnQuotPackTicket';

    /**
     * the column name for the QnQuotInvoice field
     */
    public const COL_QNQUOTINVOICE = 'notes_qt_head_det.QnQuotInvoice';

    /**
     * the column name for the QnQuotAcknow field
     */
    public const COL_QNQUOTACKNOW = 'notes_qt_head_det.QnQuotAcknow';

    /**
     * the column name for the QnSeq field
     */
    public const COL_QNSEQ = 'notes_qt_head_det.QnSeq';

    /**
     * the column name for the QnNote field
     */
    public const COL_QNNOTE = 'notes_qt_head_det.QnNote';

    /**
     * the column name for the QnKey2 field
     */
    public const COL_QNKEY2 = 'notes_qt_head_det.QnKey2';

    /**
     * the column name for the QnForm field
     */
    public const COL_QNFORM = 'notes_qt_head_det.QnForm';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'notes_qt_head_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'notes_qt_head_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'notes_qt_head_det.dummy';

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
        self::TYPE_PHPNAME       => ['Qntype', 'Qntypedesc', 'Qthdid', 'Qtdtline', 'Qnquotquote', 'Qnquotpickticket', 'Qnquotpackticket', 'Qnquotinvoice', 'Qnquotacknow', 'Qnseq', 'Qnnote', 'Qnkey2', 'Qnform', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['qntype', 'qntypedesc', 'qthdid', 'qtdtline', 'qnquotquote', 'qnquotpickticket', 'qnquotpackticket', 'qnquotinvoice', 'qnquotacknow', 'qnseq', 'qnnote', 'qnkey2', 'qnform', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [QuoteNotesTableMap::COL_QNTYPE, QuoteNotesTableMap::COL_QNTYPEDESC, QuoteNotesTableMap::COL_QTHDID, QuoteNotesTableMap::COL_QTDTLINE, QuoteNotesTableMap::COL_QNQUOTQUOTE, QuoteNotesTableMap::COL_QNQUOTPICKTICKET, QuoteNotesTableMap::COL_QNQUOTPACKTICKET, QuoteNotesTableMap::COL_QNQUOTINVOICE, QuoteNotesTableMap::COL_QNQUOTACKNOW, QuoteNotesTableMap::COL_QNSEQ, QuoteNotesTableMap::COL_QNNOTE, QuoteNotesTableMap::COL_QNKEY2, QuoteNotesTableMap::COL_QNFORM, QuoteNotesTableMap::COL_DATEUPDTD, QuoteNotesTableMap::COL_TIMEUPDTD, QuoteNotesTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['QnType', 'QnTypeDesc', 'QthdId', 'QtdtLine', 'QnQuotQuote', 'QnQuotPickTicket', 'QnQuotPackTicket', 'QnQuotInvoice', 'QnQuotAcknow', 'QnSeq', 'QnNote', 'QnKey2', 'QnForm', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
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
        self::TYPE_PHPNAME       => ['Qntype' => 0, 'Qntypedesc' => 1, 'Qthdid' => 2, 'Qtdtline' => 3, 'Qnquotquote' => 4, 'Qnquotpickticket' => 5, 'Qnquotpackticket' => 6, 'Qnquotinvoice' => 7, 'Qnquotacknow' => 8, 'Qnseq' => 9, 'Qnnote' => 10, 'Qnkey2' => 11, 'Qnform' => 12, 'Dateupdtd' => 13, 'Timeupdtd' => 14, 'Dummy' => 15, ],
        self::TYPE_CAMELNAME     => ['qntype' => 0, 'qntypedesc' => 1, 'qthdid' => 2, 'qtdtline' => 3, 'qnquotquote' => 4, 'qnquotpickticket' => 5, 'qnquotpackticket' => 6, 'qnquotinvoice' => 7, 'qnquotacknow' => 8, 'qnseq' => 9, 'qnnote' => 10, 'qnkey2' => 11, 'qnform' => 12, 'dateupdtd' => 13, 'timeupdtd' => 14, 'dummy' => 15, ],
        self::TYPE_COLNAME       => [QuoteNotesTableMap::COL_QNTYPE => 0, QuoteNotesTableMap::COL_QNTYPEDESC => 1, QuoteNotesTableMap::COL_QTHDID => 2, QuoteNotesTableMap::COL_QTDTLINE => 3, QuoteNotesTableMap::COL_QNQUOTQUOTE => 4, QuoteNotesTableMap::COL_QNQUOTPICKTICKET => 5, QuoteNotesTableMap::COL_QNQUOTPACKTICKET => 6, QuoteNotesTableMap::COL_QNQUOTINVOICE => 7, QuoteNotesTableMap::COL_QNQUOTACKNOW => 8, QuoteNotesTableMap::COL_QNSEQ => 9, QuoteNotesTableMap::COL_QNNOTE => 10, QuoteNotesTableMap::COL_QNKEY2 => 11, QuoteNotesTableMap::COL_QNFORM => 12, QuoteNotesTableMap::COL_DATEUPDTD => 13, QuoteNotesTableMap::COL_TIMEUPDTD => 14, QuoteNotesTableMap::COL_DUMMY => 15, ],
        self::TYPE_FIELDNAME     => ['QnType' => 0, 'QnTypeDesc' => 1, 'QthdId' => 2, 'QtdtLine' => 3, 'QnQuotQuote' => 4, 'QnQuotPickTicket' => 5, 'QnQuotPackTicket' => 6, 'QnQuotInvoice' => 7, 'QnQuotAcknow' => 8, 'QnSeq' => 9, 'QnNote' => 10, 'QnKey2' => 11, 'QnForm' => 12, 'DateUpdtd' => 13, 'TimeUpdtd' => 14, 'dummy' => 15, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Qntype' => 'QNTYPE',
        'QuoteNotes.Qntype' => 'QNTYPE',
        'qntype' => 'QNTYPE',
        'quoteNotes.qntype' => 'QNTYPE',
        'QuoteNotesTableMap::COL_QNTYPE' => 'QNTYPE',
        'COL_QNTYPE' => 'QNTYPE',
        'QnType' => 'QNTYPE',
        'notes_qt_head_det.QnType' => 'QNTYPE',
        'Qntypedesc' => 'QNTYPEDESC',
        'QuoteNotes.Qntypedesc' => 'QNTYPEDESC',
        'qntypedesc' => 'QNTYPEDESC',
        'quoteNotes.qntypedesc' => 'QNTYPEDESC',
        'QuoteNotesTableMap::COL_QNTYPEDESC' => 'QNTYPEDESC',
        'COL_QNTYPEDESC' => 'QNTYPEDESC',
        'QnTypeDesc' => 'QNTYPEDESC',
        'notes_qt_head_det.QnTypeDesc' => 'QNTYPEDESC',
        'Qthdid' => 'QTHDID',
        'QuoteNotes.Qthdid' => 'QTHDID',
        'qthdid' => 'QTHDID',
        'quoteNotes.qthdid' => 'QTHDID',
        'QuoteNotesTableMap::COL_QTHDID' => 'QTHDID',
        'COL_QTHDID' => 'QTHDID',
        'QthdId' => 'QTHDID',
        'notes_qt_head_det.QthdId' => 'QTHDID',
        'Qtdtline' => 'QTDTLINE',
        'QuoteNotes.Qtdtline' => 'QTDTLINE',
        'qtdtline' => 'QTDTLINE',
        'quoteNotes.qtdtline' => 'QTDTLINE',
        'QuoteNotesTableMap::COL_QTDTLINE' => 'QTDTLINE',
        'COL_QTDTLINE' => 'QTDTLINE',
        'QtdtLine' => 'QTDTLINE',
        'notes_qt_head_det.QtdtLine' => 'QTDTLINE',
        'Qnquotquote' => 'QNQUOTQUOTE',
        'QuoteNotes.Qnquotquote' => 'QNQUOTQUOTE',
        'qnquotquote' => 'QNQUOTQUOTE',
        'quoteNotes.qnquotquote' => 'QNQUOTQUOTE',
        'QuoteNotesTableMap::COL_QNQUOTQUOTE' => 'QNQUOTQUOTE',
        'COL_QNQUOTQUOTE' => 'QNQUOTQUOTE',
        'QnQuotQuote' => 'QNQUOTQUOTE',
        'notes_qt_head_det.QnQuotQuote' => 'QNQUOTQUOTE',
        'Qnquotpickticket' => 'QNQUOTPICKTICKET',
        'QuoteNotes.Qnquotpickticket' => 'QNQUOTPICKTICKET',
        'qnquotpickticket' => 'QNQUOTPICKTICKET',
        'quoteNotes.qnquotpickticket' => 'QNQUOTPICKTICKET',
        'QuoteNotesTableMap::COL_QNQUOTPICKTICKET' => 'QNQUOTPICKTICKET',
        'COL_QNQUOTPICKTICKET' => 'QNQUOTPICKTICKET',
        'QnQuotPickTicket' => 'QNQUOTPICKTICKET',
        'notes_qt_head_det.QnQuotPickTicket' => 'QNQUOTPICKTICKET',
        'Qnquotpackticket' => 'QNQUOTPACKTICKET',
        'QuoteNotes.Qnquotpackticket' => 'QNQUOTPACKTICKET',
        'qnquotpackticket' => 'QNQUOTPACKTICKET',
        'quoteNotes.qnquotpackticket' => 'QNQUOTPACKTICKET',
        'QuoteNotesTableMap::COL_QNQUOTPACKTICKET' => 'QNQUOTPACKTICKET',
        'COL_QNQUOTPACKTICKET' => 'QNQUOTPACKTICKET',
        'QnQuotPackTicket' => 'QNQUOTPACKTICKET',
        'notes_qt_head_det.QnQuotPackTicket' => 'QNQUOTPACKTICKET',
        'Qnquotinvoice' => 'QNQUOTINVOICE',
        'QuoteNotes.Qnquotinvoice' => 'QNQUOTINVOICE',
        'qnquotinvoice' => 'QNQUOTINVOICE',
        'quoteNotes.qnquotinvoice' => 'QNQUOTINVOICE',
        'QuoteNotesTableMap::COL_QNQUOTINVOICE' => 'QNQUOTINVOICE',
        'COL_QNQUOTINVOICE' => 'QNQUOTINVOICE',
        'QnQuotInvoice' => 'QNQUOTINVOICE',
        'notes_qt_head_det.QnQuotInvoice' => 'QNQUOTINVOICE',
        'Qnquotacknow' => 'QNQUOTACKNOW',
        'QuoteNotes.Qnquotacknow' => 'QNQUOTACKNOW',
        'qnquotacknow' => 'QNQUOTACKNOW',
        'quoteNotes.qnquotacknow' => 'QNQUOTACKNOW',
        'QuoteNotesTableMap::COL_QNQUOTACKNOW' => 'QNQUOTACKNOW',
        'COL_QNQUOTACKNOW' => 'QNQUOTACKNOW',
        'QnQuotAcknow' => 'QNQUOTACKNOW',
        'notes_qt_head_det.QnQuotAcknow' => 'QNQUOTACKNOW',
        'Qnseq' => 'QNSEQ',
        'QuoteNotes.Qnseq' => 'QNSEQ',
        'qnseq' => 'QNSEQ',
        'quoteNotes.qnseq' => 'QNSEQ',
        'QuoteNotesTableMap::COL_QNSEQ' => 'QNSEQ',
        'COL_QNSEQ' => 'QNSEQ',
        'QnSeq' => 'QNSEQ',
        'notes_qt_head_det.QnSeq' => 'QNSEQ',
        'Qnnote' => 'QNNOTE',
        'QuoteNotes.Qnnote' => 'QNNOTE',
        'qnnote' => 'QNNOTE',
        'quoteNotes.qnnote' => 'QNNOTE',
        'QuoteNotesTableMap::COL_QNNOTE' => 'QNNOTE',
        'COL_QNNOTE' => 'QNNOTE',
        'QnNote' => 'QNNOTE',
        'notes_qt_head_det.QnNote' => 'QNNOTE',
        'Qnkey2' => 'QNKEY2',
        'QuoteNotes.Qnkey2' => 'QNKEY2',
        'qnkey2' => 'QNKEY2',
        'quoteNotes.qnkey2' => 'QNKEY2',
        'QuoteNotesTableMap::COL_QNKEY2' => 'QNKEY2',
        'COL_QNKEY2' => 'QNKEY2',
        'QnKey2' => 'QNKEY2',
        'notes_qt_head_det.QnKey2' => 'QNKEY2',
        'Qnform' => 'QNFORM',
        'QuoteNotes.Qnform' => 'QNFORM',
        'qnform' => 'QNFORM',
        'quoteNotes.qnform' => 'QNFORM',
        'QuoteNotesTableMap::COL_QNFORM' => 'QNFORM',
        'COL_QNFORM' => 'QNFORM',
        'QnForm' => 'QNFORM',
        'notes_qt_head_det.QnForm' => 'QNFORM',
        'Dateupdtd' => 'DATEUPDTD',
        'QuoteNotes.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'quoteNotes.dateupdtd' => 'DATEUPDTD',
        'QuoteNotesTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'notes_qt_head_det.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'QuoteNotes.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'quoteNotes.timeupdtd' => 'TIMEUPDTD',
        'QuoteNotesTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'notes_qt_head_det.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'QuoteNotes.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'quoteNotes.dummy' => 'DUMMY',
        'QuoteNotesTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'notes_qt_head_det.dummy' => 'DUMMY',
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
        $this->setName('notes_qt_head_det');
        $this->setPhpName('QuoteNotes');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\QuoteNotes');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('QnType', 'Qntype', 'VARCHAR', true, 4, '');
        $this->addColumn('QnTypeDesc', 'Qntypedesc', 'VARCHAR', false, 40, null);
        $this->addColumn('QthdId', 'Qthdid', 'VARCHAR', false, 8, null);
        $this->addColumn('QtdtLine', 'Qtdtline', 'INTEGER', false, 4, null);
        $this->addColumn('QnQuotQuote', 'Qnquotquote', 'VARCHAR', false, 1, null);
        $this->addColumn('QnQuotPickTicket', 'Qnquotpickticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnQuotPackTicket', 'Qnquotpackticket', 'VARCHAR', false, 1, null);
        $this->addColumn('QnQuotInvoice', 'Qnquotinvoice', 'VARCHAR', false, 1, null);
        $this->addColumn('QnQuotAcknow', 'Qnquotacknow', 'VARCHAR', false, 1, null);
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
     * @param \QuoteNotes $obj A \QuoteNotes object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(QuoteNotes $obj, ?string $key = null): void
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
     * @param mixed $value A \QuoteNotes object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \QuoteNotes) {
                $key = serialize([(null === $value->getQntype() || is_scalar($value->getQntype()) || is_callable([$value->getQntype(), '__toString']) ? (string) $value->getQntype() : $value->getQntype()), (null === $value->getQnseq() || is_scalar($value->getQnseq()) || is_callable([$value->getQnseq(), '__toString']) ? (string) $value->getQnseq() : $value->getQnseq()), (null === $value->getQnkey2() || is_scalar($value->getQnkey2()) || is_callable([$value->getQnkey2(), '__toString']) ? (string) $value->getQnkey2() : $value->getQnkey2()), (null === $value->getQnform() || is_scalar($value->getQnform()) || is_callable([$value->getQnform(), '__toString']) ? (string) $value->getQnform() : $value->getQnform())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \QuoteNotes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        return $withPrefix ? QuoteNotesTableMap::CLASS_DEFAULT : QuoteNotesTableMap::OM_CLASS;
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
     * @return array (QuoteNotes object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = QuoteNotesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = QuoteNotesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + QuoteNotesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QuoteNotesTableMap::OM_CLASS;
            /** @var QuoteNotes $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            QuoteNotesTableMap::addInstanceToPool($obj, $key);
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
            $key = QuoteNotesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = QuoteNotesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var QuoteNotes $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QuoteNotesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNTYPE);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNTYPEDESC);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QTHDID);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QTDTLINE);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNQUOTQUOTE);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNQUOTPICKTICKET);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNQUOTPACKTICKET);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNQUOTINVOICE);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNQUOTACKNOW);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNSEQ);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNNOTE);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNKEY2);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_QNFORM);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(QuoteNotesTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.QnType');
            $criteria->addSelectColumn($alias . '.QnTypeDesc');
            $criteria->addSelectColumn($alias . '.QthdId');
            $criteria->addSelectColumn($alias . '.QtdtLine');
            $criteria->addSelectColumn($alias . '.QnQuotQuote');
            $criteria->addSelectColumn($alias . '.QnQuotPickTicket');
            $criteria->addSelectColumn($alias . '.QnQuotPackTicket');
            $criteria->addSelectColumn($alias . '.QnQuotInvoice');
            $criteria->addSelectColumn($alias . '.QnQuotAcknow');
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
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNTYPE);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNTYPEDESC);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QTHDID);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QTDTLINE);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNQUOTQUOTE);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNQUOTPICKTICKET);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNQUOTPACKTICKET);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNQUOTINVOICE);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNQUOTACKNOW);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNSEQ);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNNOTE);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNKEY2);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_QNFORM);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(QuoteNotesTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.QnType');
            $criteria->removeSelectColumn($alias . '.QnTypeDesc');
            $criteria->removeSelectColumn($alias . '.QthdId');
            $criteria->removeSelectColumn($alias . '.QtdtLine');
            $criteria->removeSelectColumn($alias . '.QnQuotQuote');
            $criteria->removeSelectColumn($alias . '.QnQuotPickTicket');
            $criteria->removeSelectColumn($alias . '.QnQuotPackTicket');
            $criteria->removeSelectColumn($alias . '.QnQuotInvoice');
            $criteria->removeSelectColumn($alias . '.QnQuotAcknow');
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
        return Propel::getServiceContainer()->getDatabaseMap(QuoteNotesTableMap::DATABASE_NAME)->getTable(QuoteNotesTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a QuoteNotes or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or QuoteNotes object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \QuoteNotes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QuoteNotesTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(QuoteNotesTableMap::COL_QNTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(QuoteNotesTableMap::COL_QNSEQ, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(QuoteNotesTableMap::COL_QNKEY2, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(QuoteNotesTableMap::COL_QNFORM, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = QuoteNotesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            QuoteNotesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                QuoteNotesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the notes_qt_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return QuoteNotesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a QuoteNotes or Criteria object.
     *
     * @param mixed $criteria Criteria or QuoteNotes object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from QuoteNotes object
        }


        // Set the correct dbName
        $query = QuoteNotesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
