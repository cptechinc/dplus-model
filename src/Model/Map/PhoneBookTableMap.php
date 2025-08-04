<?php

namespace Map;

use \PhoneBook;
use \PhoneBookQuery;
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
 * This class defines the structure of the 'phoneadr' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class PhoneBookTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.PhoneBookTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'phoneadr';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'PhoneBook';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\PhoneBook';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'PhoneBook';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 23;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 23;

    /**
     * the column name for the PhadType field
     */
    public const COL_PHADTYPE = 'phoneadr.PhadType';

    /**
     * the column name for the PhadId field
     */
    public const COL_PHADID = 'phoneadr.PhadId';

    /**
     * the column name for the PhadSubId field
     */
    public const COL_PHADSUBID = 'phoneadr.PhadSubId';

    /**
     * the column name for the PhadSubIdSeq field
     */
    public const COL_PHADSUBIDSEQ = 'phoneadr.PhadSubIdSeq';

    /**
     * the column name for the PhadCont field
     */
    public const COL_PHADCONT = 'phoneadr.PhadCont';

    /**
     * the column name for the PhadIntl field
     */
    public const COL_PHADINTL = 'phoneadr.PhadIntl';

    /**
     * the column name for the PhadTeleNbr field
     */
    public const COL_PHADTELENBR = 'phoneadr.PhadTeleNbr';

    /**
     * the column name for the PhadTeleExt field
     */
    public const COL_PHADTELEEXT = 'phoneadr.PhadTeleExt';

    /**
     * the column name for the PhadIntlNbr field
     */
    public const COL_PHADINTLNBR = 'phoneadr.PhadIntlNbr';

    /**
     * the column name for the PhadIntlExt field
     */
    public const COL_PHADINTLEXT = 'phoneadr.PhadIntlExt';

    /**
     * the column name for the PhadFaxNbr field
     */
    public const COL_PHADFAXNBR = 'phoneadr.PhadFaxNbr';

    /**
     * the column name for the PhadIfaxNbr field
     */
    public const COL_PHADIFAXNBR = 'phoneadr.PhadIfaxNbr';

    /**
     * the column name for the PhadCellNbr field
     */
    public const COL_PHADCELLNBR = 'phoneadr.PhadCellNbr';

    /**
     * the column name for the PhadIcellNbr field
     */
    public const COL_PHADICELLNBR = 'phoneadr.PhadIcellNbr';

    /**
     * the column name for the PhadHomeNbr field
     */
    public const COL_PHADHOMENBR = 'phoneadr.PhadHomeNbr';

    /**
     * the column name for the PhadIhomeNbr field
     */
    public const COL_PHADIHOMENBR = 'phoneadr.PhadIhomeNbr';

    /**
     * the column name for the PhadWebAddr field
     */
    public const COL_PHADWEBADDR = 'phoneadr.PhadWebAddr';

    /**
     * the column name for the PhadEmailAddr field
     */
    public const COL_PHADEMAILADDR = 'phoneadr.PhadEmailAddr';

    /**
     * the column name for the PhadName field
     */
    public const COL_PHADNAME = 'phoneadr.PhadName';

    /**
     * the column name for the PhadContName field
     */
    public const COL_PHADCONTNAME = 'phoneadr.PhadContName';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'phoneadr.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'phoneadr.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'phoneadr.dummy';

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
        self::TYPE_PHPNAME       => ['Phadtype', 'Phadid', 'Phadsubid', 'Phadsubidseq', 'Phadcont', 'Phadintl', 'Phadtelenbr', 'Phadteleext', 'Phadintlnbr', 'Phadintlext', 'Phadfaxnbr', 'Phadifaxnbr', 'Phadcellnbr', 'Phadicellnbr', 'Phadhomenbr', 'Phadihomenbr', 'Phadwebaddr', 'Phademailaddr', 'Phadname', 'Phadcontname', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['phadtype', 'phadid', 'phadsubid', 'phadsubidseq', 'phadcont', 'phadintl', 'phadtelenbr', 'phadteleext', 'phadintlnbr', 'phadintlext', 'phadfaxnbr', 'phadifaxnbr', 'phadcellnbr', 'phadicellnbr', 'phadhomenbr', 'phadihomenbr', 'phadwebaddr', 'phademailaddr', 'phadname', 'phadcontname', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [PhoneBookTableMap::COL_PHADTYPE, PhoneBookTableMap::COL_PHADID, PhoneBookTableMap::COL_PHADSUBID, PhoneBookTableMap::COL_PHADSUBIDSEQ, PhoneBookTableMap::COL_PHADCONT, PhoneBookTableMap::COL_PHADINTL, PhoneBookTableMap::COL_PHADTELENBR, PhoneBookTableMap::COL_PHADTELEEXT, PhoneBookTableMap::COL_PHADINTLNBR, PhoneBookTableMap::COL_PHADINTLEXT, PhoneBookTableMap::COL_PHADFAXNBR, PhoneBookTableMap::COL_PHADIFAXNBR, PhoneBookTableMap::COL_PHADCELLNBR, PhoneBookTableMap::COL_PHADICELLNBR, PhoneBookTableMap::COL_PHADHOMENBR, PhoneBookTableMap::COL_PHADIHOMENBR, PhoneBookTableMap::COL_PHADWEBADDR, PhoneBookTableMap::COL_PHADEMAILADDR, PhoneBookTableMap::COL_PHADNAME, PhoneBookTableMap::COL_PHADCONTNAME, PhoneBookTableMap::COL_DATEUPDTD, PhoneBookTableMap::COL_TIMEUPDTD, PhoneBookTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['PhadType', 'PhadId', 'PhadSubId', 'PhadSubIdSeq', 'PhadCont', 'PhadIntl', 'PhadTeleNbr', 'PhadTeleExt', 'PhadIntlNbr', 'PhadIntlExt', 'PhadFaxNbr', 'PhadIfaxNbr', 'PhadCellNbr', 'PhadIcellNbr', 'PhadHomeNbr', 'PhadIhomeNbr', 'PhadWebAddr', 'PhadEmailAddr', 'PhadName', 'PhadContName', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, ]
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
        self::TYPE_PHPNAME       => ['Phadtype' => 0, 'Phadid' => 1, 'Phadsubid' => 2, 'Phadsubidseq' => 3, 'Phadcont' => 4, 'Phadintl' => 5, 'Phadtelenbr' => 6, 'Phadteleext' => 7, 'Phadintlnbr' => 8, 'Phadintlext' => 9, 'Phadfaxnbr' => 10, 'Phadifaxnbr' => 11, 'Phadcellnbr' => 12, 'Phadicellnbr' => 13, 'Phadhomenbr' => 14, 'Phadihomenbr' => 15, 'Phadwebaddr' => 16, 'Phademailaddr' => 17, 'Phadname' => 18, 'Phadcontname' => 19, 'Dateupdtd' => 20, 'Timeupdtd' => 21, 'Dummy' => 22, ],
        self::TYPE_CAMELNAME     => ['phadtype' => 0, 'phadid' => 1, 'phadsubid' => 2, 'phadsubidseq' => 3, 'phadcont' => 4, 'phadintl' => 5, 'phadtelenbr' => 6, 'phadteleext' => 7, 'phadintlnbr' => 8, 'phadintlext' => 9, 'phadfaxnbr' => 10, 'phadifaxnbr' => 11, 'phadcellnbr' => 12, 'phadicellnbr' => 13, 'phadhomenbr' => 14, 'phadihomenbr' => 15, 'phadwebaddr' => 16, 'phademailaddr' => 17, 'phadname' => 18, 'phadcontname' => 19, 'dateupdtd' => 20, 'timeupdtd' => 21, 'dummy' => 22, ],
        self::TYPE_COLNAME       => [PhoneBookTableMap::COL_PHADTYPE => 0, PhoneBookTableMap::COL_PHADID => 1, PhoneBookTableMap::COL_PHADSUBID => 2, PhoneBookTableMap::COL_PHADSUBIDSEQ => 3, PhoneBookTableMap::COL_PHADCONT => 4, PhoneBookTableMap::COL_PHADINTL => 5, PhoneBookTableMap::COL_PHADTELENBR => 6, PhoneBookTableMap::COL_PHADTELEEXT => 7, PhoneBookTableMap::COL_PHADINTLNBR => 8, PhoneBookTableMap::COL_PHADINTLEXT => 9, PhoneBookTableMap::COL_PHADFAXNBR => 10, PhoneBookTableMap::COL_PHADIFAXNBR => 11, PhoneBookTableMap::COL_PHADCELLNBR => 12, PhoneBookTableMap::COL_PHADICELLNBR => 13, PhoneBookTableMap::COL_PHADHOMENBR => 14, PhoneBookTableMap::COL_PHADIHOMENBR => 15, PhoneBookTableMap::COL_PHADWEBADDR => 16, PhoneBookTableMap::COL_PHADEMAILADDR => 17, PhoneBookTableMap::COL_PHADNAME => 18, PhoneBookTableMap::COL_PHADCONTNAME => 19, PhoneBookTableMap::COL_DATEUPDTD => 20, PhoneBookTableMap::COL_TIMEUPDTD => 21, PhoneBookTableMap::COL_DUMMY => 22, ],
        self::TYPE_FIELDNAME     => ['PhadType' => 0, 'PhadId' => 1, 'PhadSubId' => 2, 'PhadSubIdSeq' => 3, 'PhadCont' => 4, 'PhadIntl' => 5, 'PhadTeleNbr' => 6, 'PhadTeleExt' => 7, 'PhadIntlNbr' => 8, 'PhadIntlExt' => 9, 'PhadFaxNbr' => 10, 'PhadIfaxNbr' => 11, 'PhadCellNbr' => 12, 'PhadIcellNbr' => 13, 'PhadHomeNbr' => 14, 'PhadIhomeNbr' => 15, 'PhadWebAddr' => 16, 'PhadEmailAddr' => 17, 'PhadName' => 18, 'PhadContName' => 19, 'DateUpdtd' => 20, 'TimeUpdtd' => 21, 'dummy' => 22, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Phadtype' => 'PHADTYPE',
        'PhoneBook.Phadtype' => 'PHADTYPE',
        'phadtype' => 'PHADTYPE',
        'phoneBook.phadtype' => 'PHADTYPE',
        'PhoneBookTableMap::COL_PHADTYPE' => 'PHADTYPE',
        'COL_PHADTYPE' => 'PHADTYPE',
        'PhadType' => 'PHADTYPE',
        'phoneadr.PhadType' => 'PHADTYPE',
        'Phadid' => 'PHADID',
        'PhoneBook.Phadid' => 'PHADID',
        'phadid' => 'PHADID',
        'phoneBook.phadid' => 'PHADID',
        'PhoneBookTableMap::COL_PHADID' => 'PHADID',
        'COL_PHADID' => 'PHADID',
        'PhadId' => 'PHADID',
        'phoneadr.PhadId' => 'PHADID',
        'Phadsubid' => 'PHADSUBID',
        'PhoneBook.Phadsubid' => 'PHADSUBID',
        'phadsubid' => 'PHADSUBID',
        'phoneBook.phadsubid' => 'PHADSUBID',
        'PhoneBookTableMap::COL_PHADSUBID' => 'PHADSUBID',
        'COL_PHADSUBID' => 'PHADSUBID',
        'PhadSubId' => 'PHADSUBID',
        'phoneadr.PhadSubId' => 'PHADSUBID',
        'Phadsubidseq' => 'PHADSUBIDSEQ',
        'PhoneBook.Phadsubidseq' => 'PHADSUBIDSEQ',
        'phadsubidseq' => 'PHADSUBIDSEQ',
        'phoneBook.phadsubidseq' => 'PHADSUBIDSEQ',
        'PhoneBookTableMap::COL_PHADSUBIDSEQ' => 'PHADSUBIDSEQ',
        'COL_PHADSUBIDSEQ' => 'PHADSUBIDSEQ',
        'PhadSubIdSeq' => 'PHADSUBIDSEQ',
        'phoneadr.PhadSubIdSeq' => 'PHADSUBIDSEQ',
        'Phadcont' => 'PHADCONT',
        'PhoneBook.Phadcont' => 'PHADCONT',
        'phadcont' => 'PHADCONT',
        'phoneBook.phadcont' => 'PHADCONT',
        'PhoneBookTableMap::COL_PHADCONT' => 'PHADCONT',
        'COL_PHADCONT' => 'PHADCONT',
        'PhadCont' => 'PHADCONT',
        'phoneadr.PhadCont' => 'PHADCONT',
        'Phadintl' => 'PHADINTL',
        'PhoneBook.Phadintl' => 'PHADINTL',
        'phadintl' => 'PHADINTL',
        'phoneBook.phadintl' => 'PHADINTL',
        'PhoneBookTableMap::COL_PHADINTL' => 'PHADINTL',
        'COL_PHADINTL' => 'PHADINTL',
        'PhadIntl' => 'PHADINTL',
        'phoneadr.PhadIntl' => 'PHADINTL',
        'Phadtelenbr' => 'PHADTELENBR',
        'PhoneBook.Phadtelenbr' => 'PHADTELENBR',
        'phadtelenbr' => 'PHADTELENBR',
        'phoneBook.phadtelenbr' => 'PHADTELENBR',
        'PhoneBookTableMap::COL_PHADTELENBR' => 'PHADTELENBR',
        'COL_PHADTELENBR' => 'PHADTELENBR',
        'PhadTeleNbr' => 'PHADTELENBR',
        'phoneadr.PhadTeleNbr' => 'PHADTELENBR',
        'Phadteleext' => 'PHADTELEEXT',
        'PhoneBook.Phadteleext' => 'PHADTELEEXT',
        'phadteleext' => 'PHADTELEEXT',
        'phoneBook.phadteleext' => 'PHADTELEEXT',
        'PhoneBookTableMap::COL_PHADTELEEXT' => 'PHADTELEEXT',
        'COL_PHADTELEEXT' => 'PHADTELEEXT',
        'PhadTeleExt' => 'PHADTELEEXT',
        'phoneadr.PhadTeleExt' => 'PHADTELEEXT',
        'Phadintlnbr' => 'PHADINTLNBR',
        'PhoneBook.Phadintlnbr' => 'PHADINTLNBR',
        'phadintlnbr' => 'PHADINTLNBR',
        'phoneBook.phadintlnbr' => 'PHADINTLNBR',
        'PhoneBookTableMap::COL_PHADINTLNBR' => 'PHADINTLNBR',
        'COL_PHADINTLNBR' => 'PHADINTLNBR',
        'PhadIntlNbr' => 'PHADINTLNBR',
        'phoneadr.PhadIntlNbr' => 'PHADINTLNBR',
        'Phadintlext' => 'PHADINTLEXT',
        'PhoneBook.Phadintlext' => 'PHADINTLEXT',
        'phadintlext' => 'PHADINTLEXT',
        'phoneBook.phadintlext' => 'PHADINTLEXT',
        'PhoneBookTableMap::COL_PHADINTLEXT' => 'PHADINTLEXT',
        'COL_PHADINTLEXT' => 'PHADINTLEXT',
        'PhadIntlExt' => 'PHADINTLEXT',
        'phoneadr.PhadIntlExt' => 'PHADINTLEXT',
        'Phadfaxnbr' => 'PHADFAXNBR',
        'PhoneBook.Phadfaxnbr' => 'PHADFAXNBR',
        'phadfaxnbr' => 'PHADFAXNBR',
        'phoneBook.phadfaxnbr' => 'PHADFAXNBR',
        'PhoneBookTableMap::COL_PHADFAXNBR' => 'PHADFAXNBR',
        'COL_PHADFAXNBR' => 'PHADFAXNBR',
        'PhadFaxNbr' => 'PHADFAXNBR',
        'phoneadr.PhadFaxNbr' => 'PHADFAXNBR',
        'Phadifaxnbr' => 'PHADIFAXNBR',
        'PhoneBook.Phadifaxnbr' => 'PHADIFAXNBR',
        'phadifaxnbr' => 'PHADIFAXNBR',
        'phoneBook.phadifaxnbr' => 'PHADIFAXNBR',
        'PhoneBookTableMap::COL_PHADIFAXNBR' => 'PHADIFAXNBR',
        'COL_PHADIFAXNBR' => 'PHADIFAXNBR',
        'PhadIfaxNbr' => 'PHADIFAXNBR',
        'phoneadr.PhadIfaxNbr' => 'PHADIFAXNBR',
        'Phadcellnbr' => 'PHADCELLNBR',
        'PhoneBook.Phadcellnbr' => 'PHADCELLNBR',
        'phadcellnbr' => 'PHADCELLNBR',
        'phoneBook.phadcellnbr' => 'PHADCELLNBR',
        'PhoneBookTableMap::COL_PHADCELLNBR' => 'PHADCELLNBR',
        'COL_PHADCELLNBR' => 'PHADCELLNBR',
        'PhadCellNbr' => 'PHADCELLNBR',
        'phoneadr.PhadCellNbr' => 'PHADCELLNBR',
        'Phadicellnbr' => 'PHADICELLNBR',
        'PhoneBook.Phadicellnbr' => 'PHADICELLNBR',
        'phadicellnbr' => 'PHADICELLNBR',
        'phoneBook.phadicellnbr' => 'PHADICELLNBR',
        'PhoneBookTableMap::COL_PHADICELLNBR' => 'PHADICELLNBR',
        'COL_PHADICELLNBR' => 'PHADICELLNBR',
        'PhadIcellNbr' => 'PHADICELLNBR',
        'phoneadr.PhadIcellNbr' => 'PHADICELLNBR',
        'Phadhomenbr' => 'PHADHOMENBR',
        'PhoneBook.Phadhomenbr' => 'PHADHOMENBR',
        'phadhomenbr' => 'PHADHOMENBR',
        'phoneBook.phadhomenbr' => 'PHADHOMENBR',
        'PhoneBookTableMap::COL_PHADHOMENBR' => 'PHADHOMENBR',
        'COL_PHADHOMENBR' => 'PHADHOMENBR',
        'PhadHomeNbr' => 'PHADHOMENBR',
        'phoneadr.PhadHomeNbr' => 'PHADHOMENBR',
        'Phadihomenbr' => 'PHADIHOMENBR',
        'PhoneBook.Phadihomenbr' => 'PHADIHOMENBR',
        'phadihomenbr' => 'PHADIHOMENBR',
        'phoneBook.phadihomenbr' => 'PHADIHOMENBR',
        'PhoneBookTableMap::COL_PHADIHOMENBR' => 'PHADIHOMENBR',
        'COL_PHADIHOMENBR' => 'PHADIHOMENBR',
        'PhadIhomeNbr' => 'PHADIHOMENBR',
        'phoneadr.PhadIhomeNbr' => 'PHADIHOMENBR',
        'Phadwebaddr' => 'PHADWEBADDR',
        'PhoneBook.Phadwebaddr' => 'PHADWEBADDR',
        'phadwebaddr' => 'PHADWEBADDR',
        'phoneBook.phadwebaddr' => 'PHADWEBADDR',
        'PhoneBookTableMap::COL_PHADWEBADDR' => 'PHADWEBADDR',
        'COL_PHADWEBADDR' => 'PHADWEBADDR',
        'PhadWebAddr' => 'PHADWEBADDR',
        'phoneadr.PhadWebAddr' => 'PHADWEBADDR',
        'Phademailaddr' => 'PHADEMAILADDR',
        'PhoneBook.Phademailaddr' => 'PHADEMAILADDR',
        'phademailaddr' => 'PHADEMAILADDR',
        'phoneBook.phademailaddr' => 'PHADEMAILADDR',
        'PhoneBookTableMap::COL_PHADEMAILADDR' => 'PHADEMAILADDR',
        'COL_PHADEMAILADDR' => 'PHADEMAILADDR',
        'PhadEmailAddr' => 'PHADEMAILADDR',
        'phoneadr.PhadEmailAddr' => 'PHADEMAILADDR',
        'Phadname' => 'PHADNAME',
        'PhoneBook.Phadname' => 'PHADNAME',
        'phadname' => 'PHADNAME',
        'phoneBook.phadname' => 'PHADNAME',
        'PhoneBookTableMap::COL_PHADNAME' => 'PHADNAME',
        'COL_PHADNAME' => 'PHADNAME',
        'PhadName' => 'PHADNAME',
        'phoneadr.PhadName' => 'PHADNAME',
        'Phadcontname' => 'PHADCONTNAME',
        'PhoneBook.Phadcontname' => 'PHADCONTNAME',
        'phadcontname' => 'PHADCONTNAME',
        'phoneBook.phadcontname' => 'PHADCONTNAME',
        'PhoneBookTableMap::COL_PHADCONTNAME' => 'PHADCONTNAME',
        'COL_PHADCONTNAME' => 'PHADCONTNAME',
        'PhadContName' => 'PHADCONTNAME',
        'phoneadr.PhadContName' => 'PHADCONTNAME',
        'Dateupdtd' => 'DATEUPDTD',
        'PhoneBook.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'phoneBook.dateupdtd' => 'DATEUPDTD',
        'PhoneBookTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'phoneadr.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'PhoneBook.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'phoneBook.timeupdtd' => 'TIMEUPDTD',
        'PhoneBookTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'phoneadr.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'PhoneBook.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'phoneBook.dummy' => 'DUMMY',
        'PhoneBookTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'phoneadr.dummy' => 'DUMMY',
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
        $this->setName('phoneadr');
        $this->setPhpName('PhoneBook');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PhoneBook');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('PhadType', 'Phadtype', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('PhadId', 'Phadid', 'VARCHAR', true, 6, '');
        $this->addPrimaryKey('PhadSubId', 'Phadsubid', 'VARCHAR', true, 6, '');
        $this->addPrimaryKey('PhadSubIdSeq', 'Phadsubidseq', 'INTEGER', true, 1, 0);
        $this->addPrimaryKey('PhadCont', 'Phadcont', 'VARCHAR', true, 20, '');
        $this->addColumn('PhadIntl', 'Phadintl', 'VARCHAR', false, 1, null);
        $this->addColumn('PhadTeleNbr', 'Phadtelenbr', 'VARCHAR', false, 10, null);
        $this->addColumn('PhadTeleExt', 'Phadteleext', 'VARCHAR', false, 7, null);
        $this->addColumn('PhadIntlNbr', 'Phadintlnbr', 'VARCHAR', false, 22, null);
        $this->addColumn('PhadIntlExt', 'Phadintlext', 'VARCHAR', false, 7, null);
        $this->addColumn('PhadFaxNbr', 'Phadfaxnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('PhadIfaxNbr', 'Phadifaxnbr', 'VARCHAR', false, 22, null);
        $this->addColumn('PhadCellNbr', 'Phadcellnbr', 'VARCHAR', false, 10, null);
        $this->addColumn('PhadIcellNbr', 'Phadicellnbr', 'VARCHAR', false, 22, null);
        $this->addColumn('PhadHomeNbr', 'Phadhomenbr', 'VARCHAR', false, 10, null);
        $this->addColumn('PhadIhomeNbr', 'Phadihomenbr', 'VARCHAR', false, 22, null);
        $this->addColumn('PhadWebAddr', 'Phadwebaddr', 'VARCHAR', false, 50, null);
        $this->addColumn('PhadEmailAddr', 'Phademailaddr', 'VARCHAR', false, 50, null);
        $this->addColumn('PhadName', 'Phadname', 'VARCHAR', false, 30, null);
        $this->addColumn('PhadContName', 'Phadcontname', 'VARCHAR', false, 20, null);
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
     * @param \PhoneBook $obj A \PhoneBook object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(PhoneBook $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPhadtype() || is_scalar($obj->getPhadtype()) || is_callable([$obj->getPhadtype(), '__toString']) ? (string) $obj->getPhadtype() : $obj->getPhadtype()), (null === $obj->getPhadid() || is_scalar($obj->getPhadid()) || is_callable([$obj->getPhadid(), '__toString']) ? (string) $obj->getPhadid() : $obj->getPhadid()), (null === $obj->getPhadsubid() || is_scalar($obj->getPhadsubid()) || is_callable([$obj->getPhadsubid(), '__toString']) ? (string) $obj->getPhadsubid() : $obj->getPhadsubid()), (null === $obj->getPhadsubidseq() || is_scalar($obj->getPhadsubidseq()) || is_callable([$obj->getPhadsubidseq(), '__toString']) ? (string) $obj->getPhadsubidseq() : $obj->getPhadsubidseq()), (null === $obj->getPhadcont() || is_scalar($obj->getPhadcont()) || is_callable([$obj->getPhadcont(), '__toString']) ? (string) $obj->getPhadcont() : $obj->getPhadcont())]);
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
     * @param mixed $value A \PhoneBook object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \PhoneBook) {
                $key = serialize([(null === $value->getPhadtype() || is_scalar($value->getPhadtype()) || is_callable([$value->getPhadtype(), '__toString']) ? (string) $value->getPhadtype() : $value->getPhadtype()), (null === $value->getPhadid() || is_scalar($value->getPhadid()) || is_callable([$value->getPhadid(), '__toString']) ? (string) $value->getPhadid() : $value->getPhadid()), (null === $value->getPhadsubid() || is_scalar($value->getPhadsubid()) || is_callable([$value->getPhadsubid(), '__toString']) ? (string) $value->getPhadsubid() : $value->getPhadsubid()), (null === $value->getPhadsubidseq() || is_scalar($value->getPhadsubidseq()) || is_callable([$value->getPhadsubidseq(), '__toString']) ? (string) $value->getPhadsubidseq() : $value->getPhadsubidseq()), (null === $value->getPhadcont() || is_scalar($value->getPhadcont()) || is_callable([$value->getPhadcont(), '__toString']) ? (string) $value->getPhadcont() : $value->getPhadcont())]);

            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \PhoneBook object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Phadtype', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Phadid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Phadsubid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Phadsubidseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Phadcont', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PhoneBookTableMap::CLASS_DEFAULT : PhoneBookTableMap::OM_CLASS;
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
     * @return array (PhoneBook object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = PhoneBookTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PhoneBookTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PhoneBookTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PhoneBookTableMap::OM_CLASS;
            /** @var PhoneBook $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PhoneBookTableMap::addInstanceToPool($obj, $key);
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
            $key = PhoneBookTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PhoneBookTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PhoneBook $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PhoneBookTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADTYPE);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADID);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADSUBID);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADSUBIDSEQ);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADCONT);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADINTL);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADTELENBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADTELEEXT);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADINTLNBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADINTLEXT);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADFAXNBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADIFAXNBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADCELLNBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADICELLNBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADHOMENBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADIHOMENBR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADWEBADDR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADEMAILADDR);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADNAME);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_PHADCONTNAME);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PhoneBookTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PhadType');
            $criteria->addSelectColumn($alias . '.PhadId');
            $criteria->addSelectColumn($alias . '.PhadSubId');
            $criteria->addSelectColumn($alias . '.PhadSubIdSeq');
            $criteria->addSelectColumn($alias . '.PhadCont');
            $criteria->addSelectColumn($alias . '.PhadIntl');
            $criteria->addSelectColumn($alias . '.PhadTeleNbr');
            $criteria->addSelectColumn($alias . '.PhadTeleExt');
            $criteria->addSelectColumn($alias . '.PhadIntlNbr');
            $criteria->addSelectColumn($alias . '.PhadIntlExt');
            $criteria->addSelectColumn($alias . '.PhadFaxNbr');
            $criteria->addSelectColumn($alias . '.PhadIfaxNbr');
            $criteria->addSelectColumn($alias . '.PhadCellNbr');
            $criteria->addSelectColumn($alias . '.PhadIcellNbr');
            $criteria->addSelectColumn($alias . '.PhadHomeNbr');
            $criteria->addSelectColumn($alias . '.PhadIhomeNbr');
            $criteria->addSelectColumn($alias . '.PhadWebAddr');
            $criteria->addSelectColumn($alias . '.PhadEmailAddr');
            $criteria->addSelectColumn($alias . '.PhadName');
            $criteria->addSelectColumn($alias . '.PhadContName');
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
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADTYPE);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADID);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADSUBID);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADSUBIDSEQ);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADCONT);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADINTL);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADTELENBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADTELEEXT);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADINTLNBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADINTLEXT);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADFAXNBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADIFAXNBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADCELLNBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADICELLNBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADHOMENBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADIHOMENBR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADWEBADDR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADEMAILADDR);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADNAME);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_PHADCONTNAME);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(PhoneBookTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.PhadType');
            $criteria->removeSelectColumn($alias . '.PhadId');
            $criteria->removeSelectColumn($alias . '.PhadSubId');
            $criteria->removeSelectColumn($alias . '.PhadSubIdSeq');
            $criteria->removeSelectColumn($alias . '.PhadCont');
            $criteria->removeSelectColumn($alias . '.PhadIntl');
            $criteria->removeSelectColumn($alias . '.PhadTeleNbr');
            $criteria->removeSelectColumn($alias . '.PhadTeleExt');
            $criteria->removeSelectColumn($alias . '.PhadIntlNbr');
            $criteria->removeSelectColumn($alias . '.PhadIntlExt');
            $criteria->removeSelectColumn($alias . '.PhadFaxNbr');
            $criteria->removeSelectColumn($alias . '.PhadIfaxNbr');
            $criteria->removeSelectColumn($alias . '.PhadCellNbr');
            $criteria->removeSelectColumn($alias . '.PhadIcellNbr');
            $criteria->removeSelectColumn($alias . '.PhadHomeNbr');
            $criteria->removeSelectColumn($alias . '.PhadIhomeNbr');
            $criteria->removeSelectColumn($alias . '.PhadWebAddr');
            $criteria->removeSelectColumn($alias . '.PhadEmailAddr');
            $criteria->removeSelectColumn($alias . '.PhadName');
            $criteria->removeSelectColumn($alias . '.PhadContName');
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
        return Propel::getServiceContainer()->getDatabaseMap(PhoneBookTableMap::DATABASE_NAME)->getTable(PhoneBookTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a PhoneBook or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or PhoneBook object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PhoneBook) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PhoneBookTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PhoneBookTableMap::COL_PHADTYPE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PhoneBookTableMap::COL_PHADID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PhoneBookTableMap::COL_PHADSUBID, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PhoneBookTableMap::COL_PHADSUBIDSEQ, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(PhoneBookTableMap::COL_PHADCONT, $value[4]));
                $criteria->addOr($criterion);
            }
        }

        $query = PhoneBookQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PhoneBookTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PhoneBookTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the phoneadr table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return PhoneBookQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PhoneBook or Criteria object.
     *
     * @param mixed $criteria Criteria or PhoneBook object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PhoneBook object
        }


        // Set the correct dbName
        $query = PhoneBookQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
