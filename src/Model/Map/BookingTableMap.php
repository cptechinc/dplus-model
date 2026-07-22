<?php

namespace Map;

use \Booking;
use \BookingQuery;
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
 * This class defines the structure of the 'so_book_log_head' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class BookingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.BookingTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'so_book_log_head';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'Booking';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Booking';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'Booking';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 31;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 31;

    /**
     * the column name for the BklhOrdrBase field
     */
    public const COL_BKLHORDRBASE = 'so_book_log_head.BklhOrdrBase';

    /**
     * the column name for the BklhSeq field
     */
    public const COL_BKLHSEQ = 'so_book_log_head.BklhSeq';

    /**
     * the column name for the BklhOrdrNbr field
     */
    public const COL_BKLHORDRNBR = 'so_book_log_head.BklhOrdrNbr';

    /**
     * the column name for the BklhTranDate field
     */
    public const COL_BKLHTRANDATE = 'so_book_log_head.BklhTranDate';

    /**
     * the column name for the BklhTranTime field
     */
    public const COL_BKLHTRANTIME = 'so_book_log_head.BklhTranTime';

    /**
     * the column name for the BklhLogIn field
     */
    public const COL_BKLHLOGIN = 'so_book_log_head.BklhLogIn';

    /**
     * the column name for the BklhOrdrDate field
     */
    public const COL_BKLHORDRDATE = 'so_book_log_head.BklhOrdrDate';

    /**
     * the column name for the ArcuCustId field
     */
    public const COL_ARCUCUSTID = 'so_book_log_head.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    public const COL_ARSTSHIPID = 'so_book_log_head.ArstShipId';

    /**
     * the column name for the BklhShipToStat field
     */
    public const COL_BKLHSHIPTOSTAT = 'so_book_log_head.BklhShipToStat';

    /**
     * the column name for the BklhOrigWhse field
     */
    public const COL_BKLHORIGWHSE = 'so_book_log_head.BklhOrigWhse';

    /**
     * the column name for the ArspSalePer1 field
     */
    public const COL_ARSPSALEPER1 = 'so_book_log_head.ArspSalePer1';

    /**
     * the column name for the BklhSp1Pct field
     */
    public const COL_BKLHSP1PCT = 'so_book_log_head.BklhSp1Pct';

    /**
     * the column name for the ArspSalePer2 field
     */
    public const COL_ARSPSALEPER2 = 'so_book_log_head.ArspSalePer2';

    /**
     * the column name for the BklhSp2Pct field
     */
    public const COL_BKLHSP2PCT = 'so_book_log_head.BklhSp2Pct';

    /**
     * the column name for the ArspSalePer3 field
     */
    public const COL_ARSPSALEPER3 = 'so_book_log_head.ArspSalePer3';

    /**
     * the column name for the BklhSp3Pct field
     */
    public const COL_BKLHSP3PCT = 'so_book_log_head.BklhSp3Pct';

    /**
     * the column name for the ArtmTermCd field
     */
    public const COL_ARTMTERMCD = 'so_book_log_head.ArtmTermCd';

    /**
     * the column name for the BklhUserCode1 field
     */
    public const COL_BKLHUSERCODE1 = 'so_book_log_head.BklhUserCode1';

    /**
     * the column name for the BklhUserCode2 field
     */
    public const COL_BKLHUSERCODE2 = 'so_book_log_head.BklhUserCode2';

    /**
     * the column name for the BklhUserCode3 field
     */
    public const COL_BKLHUSERCODE3 = 'so_book_log_head.BklhUserCode3';

    /**
     * the column name for the BkldUserCode4 field
     */
    public const COL_BKLDUSERCODE4 = 'so_book_log_head.BkldUserCode4';

    /**
     * the column name for the BklhPgmRef field
     */
    public const COL_BKLHPGMREF = 'so_book_log_head.BklhPgmRef';

    /**
     * the column name for the BklhReasCd field
     */
    public const COL_BKLHREASCD = 'so_book_log_head.BklhReasCd';

    /**
     * the column name for the BklhFrtTot field
     */
    public const COL_BKLHFRTTOT = 'so_book_log_head.BklhFrtTot';

    /**
     * the column name for the BklhMiscTot field
     */
    public const COL_BKLHMISCTOT = 'so_book_log_head.BklhMiscTot';

    /**
     * the column name for the BklhSviaCode field
     */
    public const COL_BKLHSVIACODE = 'so_book_log_head.BklhSviaCode';

    /**
     * the column name for the BklhCreditMemo field
     */
    public const COL_BKLHCREDITMEMO = 'so_book_log_head.BklhCreditMemo';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'so_book_log_head.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'so_book_log_head.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'so_book_log_head.dummy';

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
        self::TYPE_PHPNAME       => ['Bklhordrbase', 'Bklhseq', 'Bklhordrnbr', 'Bklhtrandate', 'Bklhtrantime', 'Bklhlogin', 'Bklhordrdate', 'Arcucustid', 'Arstshipid', 'Bklhshiptostat', 'Bklhorigwhse', 'Arspsaleper1', 'Bklhsp1pct', 'Arspsaleper2', 'Bklhsp2pct', 'Arspsaleper3', 'Bklhsp3pct', 'Artmtermcd', 'Bklhusercode1', 'Bklhusercode2', 'Bklhusercode3', 'Bkldusercode4', 'Bklhpgmref', 'Bklhreascd', 'Bklhfrttot', 'Bklhmisctot', 'Bklhsviacode', 'Bklhcreditmemo', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['bklhordrbase', 'bklhseq', 'bklhordrnbr', 'bklhtrandate', 'bklhtrantime', 'bklhlogin', 'bklhordrdate', 'arcucustid', 'arstshipid', 'bklhshiptostat', 'bklhorigwhse', 'arspsaleper1', 'bklhsp1pct', 'arspsaleper2', 'bklhsp2pct', 'arspsaleper3', 'bklhsp3pct', 'artmtermcd', 'bklhusercode1', 'bklhusercode2', 'bklhusercode3', 'bkldusercode4', 'bklhpgmref', 'bklhreascd', 'bklhfrttot', 'bklhmisctot', 'bklhsviacode', 'bklhcreditmemo', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [BookingTableMap::COL_BKLHORDRBASE, BookingTableMap::COL_BKLHSEQ, BookingTableMap::COL_BKLHORDRNBR, BookingTableMap::COL_BKLHTRANDATE, BookingTableMap::COL_BKLHTRANTIME, BookingTableMap::COL_BKLHLOGIN, BookingTableMap::COL_BKLHORDRDATE, BookingTableMap::COL_ARCUCUSTID, BookingTableMap::COL_ARSTSHIPID, BookingTableMap::COL_BKLHSHIPTOSTAT, BookingTableMap::COL_BKLHORIGWHSE, BookingTableMap::COL_ARSPSALEPER1, BookingTableMap::COL_BKLHSP1PCT, BookingTableMap::COL_ARSPSALEPER2, BookingTableMap::COL_BKLHSP2PCT, BookingTableMap::COL_ARSPSALEPER3, BookingTableMap::COL_BKLHSP3PCT, BookingTableMap::COL_ARTMTERMCD, BookingTableMap::COL_BKLHUSERCODE1, BookingTableMap::COL_BKLHUSERCODE2, BookingTableMap::COL_BKLHUSERCODE3, BookingTableMap::COL_BKLDUSERCODE4, BookingTableMap::COL_BKLHPGMREF, BookingTableMap::COL_BKLHREASCD, BookingTableMap::COL_BKLHFRTTOT, BookingTableMap::COL_BKLHMISCTOT, BookingTableMap::COL_BKLHSVIACODE, BookingTableMap::COL_BKLHCREDITMEMO, BookingTableMap::COL_DATEUPDTD, BookingTableMap::COL_TIMEUPDTD, BookingTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['BklhOrdrBase', 'BklhSeq', 'BklhOrdrNbr', 'BklhTranDate', 'BklhTranTime', 'BklhLogIn', 'BklhOrdrDate', 'ArcuCustId', 'ArstShipId', 'BklhShipToStat', 'BklhOrigWhse', 'ArspSalePer1', 'BklhSp1Pct', 'ArspSalePer2', 'BklhSp2Pct', 'ArspSalePer3', 'BklhSp3Pct', 'ArtmTermCd', 'BklhUserCode1', 'BklhUserCode2', 'BklhUserCode3', 'BkldUserCode4', 'BklhPgmRef', 'BklhReasCd', 'BklhFrtTot', 'BklhMiscTot', 'BklhSviaCode', 'BklhCreditMemo', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, ]
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
        self::TYPE_PHPNAME       => ['Bklhordrbase' => 0, 'Bklhseq' => 1, 'Bklhordrnbr' => 2, 'Bklhtrandate' => 3, 'Bklhtrantime' => 4, 'Bklhlogin' => 5, 'Bklhordrdate' => 6, 'Arcucustid' => 7, 'Arstshipid' => 8, 'Bklhshiptostat' => 9, 'Bklhorigwhse' => 10, 'Arspsaleper1' => 11, 'Bklhsp1pct' => 12, 'Arspsaleper2' => 13, 'Bklhsp2pct' => 14, 'Arspsaleper3' => 15, 'Bklhsp3pct' => 16, 'Artmtermcd' => 17, 'Bklhusercode1' => 18, 'Bklhusercode2' => 19, 'Bklhusercode3' => 20, 'Bkldusercode4' => 21, 'Bklhpgmref' => 22, 'Bklhreascd' => 23, 'Bklhfrttot' => 24, 'Bklhmisctot' => 25, 'Bklhsviacode' => 26, 'Bklhcreditmemo' => 27, 'Dateupdtd' => 28, 'Timeupdtd' => 29, 'Dummy' => 30, ],
        self::TYPE_CAMELNAME     => ['bklhordrbase' => 0, 'bklhseq' => 1, 'bklhordrnbr' => 2, 'bklhtrandate' => 3, 'bklhtrantime' => 4, 'bklhlogin' => 5, 'bklhordrdate' => 6, 'arcucustid' => 7, 'arstshipid' => 8, 'bklhshiptostat' => 9, 'bklhorigwhse' => 10, 'arspsaleper1' => 11, 'bklhsp1pct' => 12, 'arspsaleper2' => 13, 'bklhsp2pct' => 14, 'arspsaleper3' => 15, 'bklhsp3pct' => 16, 'artmtermcd' => 17, 'bklhusercode1' => 18, 'bklhusercode2' => 19, 'bklhusercode3' => 20, 'bkldusercode4' => 21, 'bklhpgmref' => 22, 'bklhreascd' => 23, 'bklhfrttot' => 24, 'bklhmisctot' => 25, 'bklhsviacode' => 26, 'bklhcreditmemo' => 27, 'dateupdtd' => 28, 'timeupdtd' => 29, 'dummy' => 30, ],
        self::TYPE_COLNAME       => [BookingTableMap::COL_BKLHORDRBASE => 0, BookingTableMap::COL_BKLHSEQ => 1, BookingTableMap::COL_BKLHORDRNBR => 2, BookingTableMap::COL_BKLHTRANDATE => 3, BookingTableMap::COL_BKLHTRANTIME => 4, BookingTableMap::COL_BKLHLOGIN => 5, BookingTableMap::COL_BKLHORDRDATE => 6, BookingTableMap::COL_ARCUCUSTID => 7, BookingTableMap::COL_ARSTSHIPID => 8, BookingTableMap::COL_BKLHSHIPTOSTAT => 9, BookingTableMap::COL_BKLHORIGWHSE => 10, BookingTableMap::COL_ARSPSALEPER1 => 11, BookingTableMap::COL_BKLHSP1PCT => 12, BookingTableMap::COL_ARSPSALEPER2 => 13, BookingTableMap::COL_BKLHSP2PCT => 14, BookingTableMap::COL_ARSPSALEPER3 => 15, BookingTableMap::COL_BKLHSP3PCT => 16, BookingTableMap::COL_ARTMTERMCD => 17, BookingTableMap::COL_BKLHUSERCODE1 => 18, BookingTableMap::COL_BKLHUSERCODE2 => 19, BookingTableMap::COL_BKLHUSERCODE3 => 20, BookingTableMap::COL_BKLDUSERCODE4 => 21, BookingTableMap::COL_BKLHPGMREF => 22, BookingTableMap::COL_BKLHREASCD => 23, BookingTableMap::COL_BKLHFRTTOT => 24, BookingTableMap::COL_BKLHMISCTOT => 25, BookingTableMap::COL_BKLHSVIACODE => 26, BookingTableMap::COL_BKLHCREDITMEMO => 27, BookingTableMap::COL_DATEUPDTD => 28, BookingTableMap::COL_TIMEUPDTD => 29, BookingTableMap::COL_DUMMY => 30, ],
        self::TYPE_FIELDNAME     => ['BklhOrdrBase' => 0, 'BklhSeq' => 1, 'BklhOrdrNbr' => 2, 'BklhTranDate' => 3, 'BklhTranTime' => 4, 'BklhLogIn' => 5, 'BklhOrdrDate' => 6, 'ArcuCustId' => 7, 'ArstShipId' => 8, 'BklhShipToStat' => 9, 'BklhOrigWhse' => 10, 'ArspSalePer1' => 11, 'BklhSp1Pct' => 12, 'ArspSalePer2' => 13, 'BklhSp2Pct' => 14, 'ArspSalePer3' => 15, 'BklhSp3Pct' => 16, 'ArtmTermCd' => 17, 'BklhUserCode1' => 18, 'BklhUserCode2' => 19, 'BklhUserCode3' => 20, 'BkldUserCode4' => 21, 'BklhPgmRef' => 22, 'BklhReasCd' => 23, 'BklhFrtTot' => 24, 'BklhMiscTot' => 25, 'BklhSviaCode' => 26, 'BklhCreditMemo' => 27, 'DateUpdtd' => 28, 'TimeUpdtd' => 29, 'dummy' => 30, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Bklhordrbase' => 'BKLHORDRBASE',
        'Booking.Bklhordrbase' => 'BKLHORDRBASE',
        'bklhordrbase' => 'BKLHORDRBASE',
        'booking.bklhordrbase' => 'BKLHORDRBASE',
        'BookingTableMap::COL_BKLHORDRBASE' => 'BKLHORDRBASE',
        'COL_BKLHORDRBASE' => 'BKLHORDRBASE',
        'BklhOrdrBase' => 'BKLHORDRBASE',
        'so_book_log_head.BklhOrdrBase' => 'BKLHORDRBASE',
        'Bklhseq' => 'BKLHSEQ',
        'Booking.Bklhseq' => 'BKLHSEQ',
        'bklhseq' => 'BKLHSEQ',
        'booking.bklhseq' => 'BKLHSEQ',
        'BookingTableMap::COL_BKLHSEQ' => 'BKLHSEQ',
        'COL_BKLHSEQ' => 'BKLHSEQ',
        'BklhSeq' => 'BKLHSEQ',
        'so_book_log_head.BklhSeq' => 'BKLHSEQ',
        'Bklhordrnbr' => 'BKLHORDRNBR',
        'Booking.Bklhordrnbr' => 'BKLHORDRNBR',
        'bklhordrnbr' => 'BKLHORDRNBR',
        'booking.bklhordrnbr' => 'BKLHORDRNBR',
        'BookingTableMap::COL_BKLHORDRNBR' => 'BKLHORDRNBR',
        'COL_BKLHORDRNBR' => 'BKLHORDRNBR',
        'BklhOrdrNbr' => 'BKLHORDRNBR',
        'so_book_log_head.BklhOrdrNbr' => 'BKLHORDRNBR',
        'Bklhtrandate' => 'BKLHTRANDATE',
        'Booking.Bklhtrandate' => 'BKLHTRANDATE',
        'bklhtrandate' => 'BKLHTRANDATE',
        'booking.bklhtrandate' => 'BKLHTRANDATE',
        'BookingTableMap::COL_BKLHTRANDATE' => 'BKLHTRANDATE',
        'COL_BKLHTRANDATE' => 'BKLHTRANDATE',
        'BklhTranDate' => 'BKLHTRANDATE',
        'so_book_log_head.BklhTranDate' => 'BKLHTRANDATE',
        'Bklhtrantime' => 'BKLHTRANTIME',
        'Booking.Bklhtrantime' => 'BKLHTRANTIME',
        'bklhtrantime' => 'BKLHTRANTIME',
        'booking.bklhtrantime' => 'BKLHTRANTIME',
        'BookingTableMap::COL_BKLHTRANTIME' => 'BKLHTRANTIME',
        'COL_BKLHTRANTIME' => 'BKLHTRANTIME',
        'BklhTranTime' => 'BKLHTRANTIME',
        'so_book_log_head.BklhTranTime' => 'BKLHTRANTIME',
        'Bklhlogin' => 'BKLHLOGIN',
        'Booking.Bklhlogin' => 'BKLHLOGIN',
        'bklhlogin' => 'BKLHLOGIN',
        'booking.bklhlogin' => 'BKLHLOGIN',
        'BookingTableMap::COL_BKLHLOGIN' => 'BKLHLOGIN',
        'COL_BKLHLOGIN' => 'BKLHLOGIN',
        'BklhLogIn' => 'BKLHLOGIN',
        'so_book_log_head.BklhLogIn' => 'BKLHLOGIN',
        'Bklhordrdate' => 'BKLHORDRDATE',
        'Booking.Bklhordrdate' => 'BKLHORDRDATE',
        'bklhordrdate' => 'BKLHORDRDATE',
        'booking.bklhordrdate' => 'BKLHORDRDATE',
        'BookingTableMap::COL_BKLHORDRDATE' => 'BKLHORDRDATE',
        'COL_BKLHORDRDATE' => 'BKLHORDRDATE',
        'BklhOrdrDate' => 'BKLHORDRDATE',
        'so_book_log_head.BklhOrdrDate' => 'BKLHORDRDATE',
        'Arcucustid' => 'ARCUCUSTID',
        'Booking.Arcucustid' => 'ARCUCUSTID',
        'arcucustid' => 'ARCUCUSTID',
        'booking.arcucustid' => 'ARCUCUSTID',
        'BookingTableMap::COL_ARCUCUSTID' => 'ARCUCUSTID',
        'COL_ARCUCUSTID' => 'ARCUCUSTID',
        'ArcuCustId' => 'ARCUCUSTID',
        'so_book_log_head.ArcuCustId' => 'ARCUCUSTID',
        'Arstshipid' => 'ARSTSHIPID',
        'Booking.Arstshipid' => 'ARSTSHIPID',
        'arstshipid' => 'ARSTSHIPID',
        'booking.arstshipid' => 'ARSTSHIPID',
        'BookingTableMap::COL_ARSTSHIPID' => 'ARSTSHIPID',
        'COL_ARSTSHIPID' => 'ARSTSHIPID',
        'ArstShipId' => 'ARSTSHIPID',
        'so_book_log_head.ArstShipId' => 'ARSTSHIPID',
        'Bklhshiptostat' => 'BKLHSHIPTOSTAT',
        'Booking.Bklhshiptostat' => 'BKLHSHIPTOSTAT',
        'bklhshiptostat' => 'BKLHSHIPTOSTAT',
        'booking.bklhshiptostat' => 'BKLHSHIPTOSTAT',
        'BookingTableMap::COL_BKLHSHIPTOSTAT' => 'BKLHSHIPTOSTAT',
        'COL_BKLHSHIPTOSTAT' => 'BKLHSHIPTOSTAT',
        'BklhShipToStat' => 'BKLHSHIPTOSTAT',
        'so_book_log_head.BklhShipToStat' => 'BKLHSHIPTOSTAT',
        'Bklhorigwhse' => 'BKLHORIGWHSE',
        'Booking.Bklhorigwhse' => 'BKLHORIGWHSE',
        'bklhorigwhse' => 'BKLHORIGWHSE',
        'booking.bklhorigwhse' => 'BKLHORIGWHSE',
        'BookingTableMap::COL_BKLHORIGWHSE' => 'BKLHORIGWHSE',
        'COL_BKLHORIGWHSE' => 'BKLHORIGWHSE',
        'BklhOrigWhse' => 'BKLHORIGWHSE',
        'so_book_log_head.BklhOrigWhse' => 'BKLHORIGWHSE',
        'Arspsaleper1' => 'ARSPSALEPER1',
        'Booking.Arspsaleper1' => 'ARSPSALEPER1',
        'arspsaleper1' => 'ARSPSALEPER1',
        'booking.arspsaleper1' => 'ARSPSALEPER1',
        'BookingTableMap::COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'COL_ARSPSALEPER1' => 'ARSPSALEPER1',
        'ArspSalePer1' => 'ARSPSALEPER1',
        'so_book_log_head.ArspSalePer1' => 'ARSPSALEPER1',
        'Bklhsp1pct' => 'BKLHSP1PCT',
        'Booking.Bklhsp1pct' => 'BKLHSP1PCT',
        'bklhsp1pct' => 'BKLHSP1PCT',
        'booking.bklhsp1pct' => 'BKLHSP1PCT',
        'BookingTableMap::COL_BKLHSP1PCT' => 'BKLHSP1PCT',
        'COL_BKLHSP1PCT' => 'BKLHSP1PCT',
        'BklhSp1Pct' => 'BKLHSP1PCT',
        'so_book_log_head.BklhSp1Pct' => 'BKLHSP1PCT',
        'Arspsaleper2' => 'ARSPSALEPER2',
        'Booking.Arspsaleper2' => 'ARSPSALEPER2',
        'arspsaleper2' => 'ARSPSALEPER2',
        'booking.arspsaleper2' => 'ARSPSALEPER2',
        'BookingTableMap::COL_ARSPSALEPER2' => 'ARSPSALEPER2',
        'COL_ARSPSALEPER2' => 'ARSPSALEPER2',
        'ArspSalePer2' => 'ARSPSALEPER2',
        'so_book_log_head.ArspSalePer2' => 'ARSPSALEPER2',
        'Bklhsp2pct' => 'BKLHSP2PCT',
        'Booking.Bklhsp2pct' => 'BKLHSP2PCT',
        'bklhsp2pct' => 'BKLHSP2PCT',
        'booking.bklhsp2pct' => 'BKLHSP2PCT',
        'BookingTableMap::COL_BKLHSP2PCT' => 'BKLHSP2PCT',
        'COL_BKLHSP2PCT' => 'BKLHSP2PCT',
        'BklhSp2Pct' => 'BKLHSP2PCT',
        'so_book_log_head.BklhSp2Pct' => 'BKLHSP2PCT',
        'Arspsaleper3' => 'ARSPSALEPER3',
        'Booking.Arspsaleper3' => 'ARSPSALEPER3',
        'arspsaleper3' => 'ARSPSALEPER3',
        'booking.arspsaleper3' => 'ARSPSALEPER3',
        'BookingTableMap::COL_ARSPSALEPER3' => 'ARSPSALEPER3',
        'COL_ARSPSALEPER3' => 'ARSPSALEPER3',
        'ArspSalePer3' => 'ARSPSALEPER3',
        'so_book_log_head.ArspSalePer3' => 'ARSPSALEPER3',
        'Bklhsp3pct' => 'BKLHSP3PCT',
        'Booking.Bklhsp3pct' => 'BKLHSP3PCT',
        'bklhsp3pct' => 'BKLHSP3PCT',
        'booking.bklhsp3pct' => 'BKLHSP3PCT',
        'BookingTableMap::COL_BKLHSP3PCT' => 'BKLHSP3PCT',
        'COL_BKLHSP3PCT' => 'BKLHSP3PCT',
        'BklhSp3Pct' => 'BKLHSP3PCT',
        'so_book_log_head.BklhSp3Pct' => 'BKLHSP3PCT',
        'Artmtermcd' => 'ARTMTERMCD',
        'Booking.Artmtermcd' => 'ARTMTERMCD',
        'artmtermcd' => 'ARTMTERMCD',
        'booking.artmtermcd' => 'ARTMTERMCD',
        'BookingTableMap::COL_ARTMTERMCD' => 'ARTMTERMCD',
        'COL_ARTMTERMCD' => 'ARTMTERMCD',
        'ArtmTermCd' => 'ARTMTERMCD',
        'so_book_log_head.ArtmTermCd' => 'ARTMTERMCD',
        'Bklhusercode1' => 'BKLHUSERCODE1',
        'Booking.Bklhusercode1' => 'BKLHUSERCODE1',
        'bklhusercode1' => 'BKLHUSERCODE1',
        'booking.bklhusercode1' => 'BKLHUSERCODE1',
        'BookingTableMap::COL_BKLHUSERCODE1' => 'BKLHUSERCODE1',
        'COL_BKLHUSERCODE1' => 'BKLHUSERCODE1',
        'BklhUserCode1' => 'BKLHUSERCODE1',
        'so_book_log_head.BklhUserCode1' => 'BKLHUSERCODE1',
        'Bklhusercode2' => 'BKLHUSERCODE2',
        'Booking.Bklhusercode2' => 'BKLHUSERCODE2',
        'bklhusercode2' => 'BKLHUSERCODE2',
        'booking.bklhusercode2' => 'BKLHUSERCODE2',
        'BookingTableMap::COL_BKLHUSERCODE2' => 'BKLHUSERCODE2',
        'COL_BKLHUSERCODE2' => 'BKLHUSERCODE2',
        'BklhUserCode2' => 'BKLHUSERCODE2',
        'so_book_log_head.BklhUserCode2' => 'BKLHUSERCODE2',
        'Bklhusercode3' => 'BKLHUSERCODE3',
        'Booking.Bklhusercode3' => 'BKLHUSERCODE3',
        'bklhusercode3' => 'BKLHUSERCODE3',
        'booking.bklhusercode3' => 'BKLHUSERCODE3',
        'BookingTableMap::COL_BKLHUSERCODE3' => 'BKLHUSERCODE3',
        'COL_BKLHUSERCODE3' => 'BKLHUSERCODE3',
        'BklhUserCode3' => 'BKLHUSERCODE3',
        'so_book_log_head.BklhUserCode3' => 'BKLHUSERCODE3',
        'Bkldusercode4' => 'BKLDUSERCODE4',
        'Booking.Bkldusercode4' => 'BKLDUSERCODE4',
        'bkldusercode4' => 'BKLDUSERCODE4',
        'booking.bkldusercode4' => 'BKLDUSERCODE4',
        'BookingTableMap::COL_BKLDUSERCODE4' => 'BKLDUSERCODE4',
        'COL_BKLDUSERCODE4' => 'BKLDUSERCODE4',
        'BkldUserCode4' => 'BKLDUSERCODE4',
        'so_book_log_head.BkldUserCode4' => 'BKLDUSERCODE4',
        'Bklhpgmref' => 'BKLHPGMREF',
        'Booking.Bklhpgmref' => 'BKLHPGMREF',
        'bklhpgmref' => 'BKLHPGMREF',
        'booking.bklhpgmref' => 'BKLHPGMREF',
        'BookingTableMap::COL_BKLHPGMREF' => 'BKLHPGMREF',
        'COL_BKLHPGMREF' => 'BKLHPGMREF',
        'BklhPgmRef' => 'BKLHPGMREF',
        'so_book_log_head.BklhPgmRef' => 'BKLHPGMREF',
        'Bklhreascd' => 'BKLHREASCD',
        'Booking.Bklhreascd' => 'BKLHREASCD',
        'bklhreascd' => 'BKLHREASCD',
        'booking.bklhreascd' => 'BKLHREASCD',
        'BookingTableMap::COL_BKLHREASCD' => 'BKLHREASCD',
        'COL_BKLHREASCD' => 'BKLHREASCD',
        'BklhReasCd' => 'BKLHREASCD',
        'so_book_log_head.BklhReasCd' => 'BKLHREASCD',
        'Bklhfrttot' => 'BKLHFRTTOT',
        'Booking.Bklhfrttot' => 'BKLHFRTTOT',
        'bklhfrttot' => 'BKLHFRTTOT',
        'booking.bklhfrttot' => 'BKLHFRTTOT',
        'BookingTableMap::COL_BKLHFRTTOT' => 'BKLHFRTTOT',
        'COL_BKLHFRTTOT' => 'BKLHFRTTOT',
        'BklhFrtTot' => 'BKLHFRTTOT',
        'so_book_log_head.BklhFrtTot' => 'BKLHFRTTOT',
        'Bklhmisctot' => 'BKLHMISCTOT',
        'Booking.Bklhmisctot' => 'BKLHMISCTOT',
        'bklhmisctot' => 'BKLHMISCTOT',
        'booking.bklhmisctot' => 'BKLHMISCTOT',
        'BookingTableMap::COL_BKLHMISCTOT' => 'BKLHMISCTOT',
        'COL_BKLHMISCTOT' => 'BKLHMISCTOT',
        'BklhMiscTot' => 'BKLHMISCTOT',
        'so_book_log_head.BklhMiscTot' => 'BKLHMISCTOT',
        'Bklhsviacode' => 'BKLHSVIACODE',
        'Booking.Bklhsviacode' => 'BKLHSVIACODE',
        'bklhsviacode' => 'BKLHSVIACODE',
        'booking.bklhsviacode' => 'BKLHSVIACODE',
        'BookingTableMap::COL_BKLHSVIACODE' => 'BKLHSVIACODE',
        'COL_BKLHSVIACODE' => 'BKLHSVIACODE',
        'BklhSviaCode' => 'BKLHSVIACODE',
        'so_book_log_head.BklhSviaCode' => 'BKLHSVIACODE',
        'Bklhcreditmemo' => 'BKLHCREDITMEMO',
        'Booking.Bklhcreditmemo' => 'BKLHCREDITMEMO',
        'bklhcreditmemo' => 'BKLHCREDITMEMO',
        'booking.bklhcreditmemo' => 'BKLHCREDITMEMO',
        'BookingTableMap::COL_BKLHCREDITMEMO' => 'BKLHCREDITMEMO',
        'COL_BKLHCREDITMEMO' => 'BKLHCREDITMEMO',
        'BklhCreditMemo' => 'BKLHCREDITMEMO',
        'so_book_log_head.BklhCreditMemo' => 'BKLHCREDITMEMO',
        'Dateupdtd' => 'DATEUPDTD',
        'Booking.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'booking.dateupdtd' => 'DATEUPDTD',
        'BookingTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'so_book_log_head.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'Booking.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'booking.timeupdtd' => 'TIMEUPDTD',
        'BookingTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'so_book_log_head.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'Booking.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'booking.dummy' => 'DUMMY',
        'BookingTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'so_book_log_head.dummy' => 'DUMMY',
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
        $this->setName('so_book_log_head');
        $this->setPhpName('Booking');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Booking');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('BklhOrdrBase', 'Bklhordrbase', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('BklhSeq', 'Bklhseq', 'INTEGER', true, 4, 0);
        $this->addColumn('BklhOrdrNbr', 'Bklhordrnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('BklhTranDate', 'Bklhtrandate', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhTranTime', 'Bklhtrantime', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhLogIn', 'Bklhlogin', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhOrdrDate', 'Bklhordrdate', 'VARCHAR', false, 8, null);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_cust_mast', 'ArcuCustId', false, 6, null);
        $this->addForeignKey('ArcuCustId', 'Arcucustid', 'VARCHAR', 'ar_ship_to', 'ArcuCustId', false, 6, null);
        $this->addForeignKey('ArstShipId', 'Arstshipid', 'VARCHAR', 'ar_ship_to', 'ArstShipId', false, 6, null);
        $this->addColumn('BklhShipToStat', 'Bklhshiptostat', 'VARCHAR', false, 2, null);
        $this->addColumn('BklhOrigWhse', 'Bklhorigwhse', 'VARCHAR', false, 2, null);
        $this->addForeignKey('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', 'ar_saleper1', 'ArspSalePer1', false, 6, null);
        $this->addColumn('BklhSp1Pct', 'Bklhsp1pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('BklhSp2Pct', 'Bklhsp2pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('BklhSp3Pct', 'Bklhsp3pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', false, 4, null);
        $this->addColumn('BklhUserCode1', 'Bklhusercode1', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhUserCode2', 'Bklhusercode2', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhUserCode3', 'Bklhusercode3', 'VARCHAR', false, 8, null);
        $this->addColumn('BkldUserCode4', 'Bkldusercode4', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhPgmRef', 'Bklhpgmref', 'VARCHAR', false, 8, null);
        $this->addColumn('BklhReasCd', 'Bklhreascd', 'VARCHAR', false, 2, null);
        $this->addColumn('BklhFrtTot', 'Bklhfrttot', 'DECIMAL', false, 20, null);
        $this->addColumn('BklhMiscTot', 'Bklhmisctot', 'DECIMAL', false, 20, null);
        $this->addColumn('BklhSviaCode', 'Bklhsviacode', 'VARCHAR', false, 4, null);
        $this->addColumn('BklhCreditMemo', 'Bklhcreditmemo', 'VARCHAR', false, 1, null);
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
        $this->addRelation('SalesPerson', '\\SalesPerson', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':ArspSalePer1',
    1 => ':ArspSalePer1',
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
     * @param \Booking $obj A \Booking object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(Booking $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getBklhordrbase() || is_scalar($obj->getBklhordrbase()) || is_callable([$obj->getBklhordrbase(), '__toString']) ? (string) $obj->getBklhordrbase() : $obj->getBklhordrbase()), (null === $obj->getBklhseq() || is_scalar($obj->getBklhseq()) || is_callable([$obj->getBklhseq(), '__toString']) ? (string) $obj->getBklhseq() : $obj->getBklhseq())]);
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
     * @param mixed $value A \Booking object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Booking) {
                $key = serialize([(null === $value->getBklhordrbase() || is_scalar($value->getBklhordrbase()) || is_callable([$value->getBklhordrbase(), '__toString']) ? (string) $value->getBklhordrbase() : $value->getBklhordrbase()), (null === $value->getBklhseq() || is_scalar($value->getBklhseq()) || is_callable([$value->getBklhseq(), '__toString']) ? (string) $value->getBklhseq() : $value->getBklhseq())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Booking object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Bklhordrbase', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Bklhseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BookingTableMap::CLASS_DEFAULT : BookingTableMap::OM_CLASS;
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
     * @return array (Booking object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = BookingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BookingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BookingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BookingTableMap::OM_CLASS;
            /** @var Booking $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BookingTableMap::addInstanceToPool($obj, $key);
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
            $key = BookingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BookingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Booking $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BookingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHORDRBASE);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHSEQ);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHORDRNBR);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHTRANDATE);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHTRANTIME);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHLOGIN);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHORDRDATE);
            $criteria->addSelectColumn(BookingTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(BookingTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHSHIPTOSTAT);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHORIGWHSE);
            $criteria->addSelectColumn(BookingTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHSP1PCT);
            $criteria->addSelectColumn(BookingTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHSP2PCT);
            $criteria->addSelectColumn(BookingTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHSP3PCT);
            $criteria->addSelectColumn(BookingTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHUSERCODE1);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHUSERCODE2);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHUSERCODE3);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLDUSERCODE4);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHPGMREF);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHREASCD);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHFRTTOT);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHMISCTOT);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHSVIACODE);
            $criteria->addSelectColumn(BookingTableMap::COL_BKLHCREDITMEMO);
            $criteria->addSelectColumn(BookingTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(BookingTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(BookingTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.BklhOrdrBase');
            $criteria->addSelectColumn($alias . '.BklhSeq');
            $criteria->addSelectColumn($alias . '.BklhOrdrNbr');
            $criteria->addSelectColumn($alias . '.BklhTranDate');
            $criteria->addSelectColumn($alias . '.BklhTranTime');
            $criteria->addSelectColumn($alias . '.BklhLogIn');
            $criteria->addSelectColumn($alias . '.BklhOrdrDate');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.BklhShipToStat');
            $criteria->addSelectColumn($alias . '.BklhOrigWhse');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.BklhSp1Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.BklhSp2Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.BklhSp3Pct');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.BklhUserCode1');
            $criteria->addSelectColumn($alias . '.BklhUserCode2');
            $criteria->addSelectColumn($alias . '.BklhUserCode3');
            $criteria->addSelectColumn($alias . '.BkldUserCode4');
            $criteria->addSelectColumn($alias . '.BklhPgmRef');
            $criteria->addSelectColumn($alias . '.BklhReasCd');
            $criteria->addSelectColumn($alias . '.BklhFrtTot');
            $criteria->addSelectColumn($alias . '.BklhMiscTot');
            $criteria->addSelectColumn($alias . '.BklhSviaCode');
            $criteria->addSelectColumn($alias . '.BklhCreditMemo');
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
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHORDRBASE);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHSEQ);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHORDRNBR);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHTRANDATE);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHTRANTIME);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHLOGIN);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHORDRDATE);
            $criteria->removeSelectColumn(BookingTableMap::COL_ARCUCUSTID);
            $criteria->removeSelectColumn(BookingTableMap::COL_ARSTSHIPID);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHSHIPTOSTAT);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHORIGWHSE);
            $criteria->removeSelectColumn(BookingTableMap::COL_ARSPSALEPER1);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHSP1PCT);
            $criteria->removeSelectColumn(BookingTableMap::COL_ARSPSALEPER2);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHSP2PCT);
            $criteria->removeSelectColumn(BookingTableMap::COL_ARSPSALEPER3);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHSP3PCT);
            $criteria->removeSelectColumn(BookingTableMap::COL_ARTMTERMCD);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHUSERCODE1);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHUSERCODE2);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHUSERCODE3);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLDUSERCODE4);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHPGMREF);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHREASCD);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHFRTTOT);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHMISCTOT);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHSVIACODE);
            $criteria->removeSelectColumn(BookingTableMap::COL_BKLHCREDITMEMO);
            $criteria->removeSelectColumn(BookingTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(BookingTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(BookingTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.BklhOrdrBase');
            $criteria->removeSelectColumn($alias . '.BklhSeq');
            $criteria->removeSelectColumn($alias . '.BklhOrdrNbr');
            $criteria->removeSelectColumn($alias . '.BklhTranDate');
            $criteria->removeSelectColumn($alias . '.BklhTranTime');
            $criteria->removeSelectColumn($alias . '.BklhLogIn');
            $criteria->removeSelectColumn($alias . '.BklhOrdrDate');
            $criteria->removeSelectColumn($alias . '.ArcuCustId');
            $criteria->removeSelectColumn($alias . '.ArstShipId');
            $criteria->removeSelectColumn($alias . '.BklhShipToStat');
            $criteria->removeSelectColumn($alias . '.BklhOrigWhse');
            $criteria->removeSelectColumn($alias . '.ArspSalePer1');
            $criteria->removeSelectColumn($alias . '.BklhSp1Pct');
            $criteria->removeSelectColumn($alias . '.ArspSalePer2');
            $criteria->removeSelectColumn($alias . '.BklhSp2Pct');
            $criteria->removeSelectColumn($alias . '.ArspSalePer3');
            $criteria->removeSelectColumn($alias . '.BklhSp3Pct');
            $criteria->removeSelectColumn($alias . '.ArtmTermCd');
            $criteria->removeSelectColumn($alias . '.BklhUserCode1');
            $criteria->removeSelectColumn($alias . '.BklhUserCode2');
            $criteria->removeSelectColumn($alias . '.BklhUserCode3');
            $criteria->removeSelectColumn($alias . '.BkldUserCode4');
            $criteria->removeSelectColumn($alias . '.BklhPgmRef');
            $criteria->removeSelectColumn($alias . '.BklhReasCd');
            $criteria->removeSelectColumn($alias . '.BklhFrtTot');
            $criteria->removeSelectColumn($alias . '.BklhMiscTot');
            $criteria->removeSelectColumn($alias . '.BklhSviaCode');
            $criteria->removeSelectColumn($alias . '.BklhCreditMemo');
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
        return Propel::getServiceContainer()->getDatabaseMap(BookingTableMap::DATABASE_NAME)->getTable(BookingTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Booking or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Booking object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Booking) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BookingTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BookingTableMap::COL_BKLHORDRBASE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BookingTableMap::COL_BKLHSEQ, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = BookingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BookingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BookingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the so_book_log_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return BookingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Booking or Criteria object.
     *
     * @param mixed $criteria Criteria or Booking object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Booking object
        }


        // Set the correct dbName
        $query = BookingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
