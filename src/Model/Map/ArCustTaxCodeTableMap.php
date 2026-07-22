<?php

namespace Map;

use \ArCustTaxCode;
use \ArCustTaxCodeQuery;
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
 * This class defines the structure of the 'ar_cust_ctax' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ArCustTaxCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ArCustTaxCodeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'ar_cust_ctax';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ArCustTaxCode';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ArCustTaxCode';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ArCustTaxCode';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the ArtbCtaxCode field
     */
    public const COL_ARTBCTAXCODE = 'ar_cust_ctax.ArtbCtaxCode';

    /**
     * the column name for the ArtbCtaxDesc field
     */
    public const COL_ARTBCTAXDESC = 'ar_cust_ctax.ArtbCtaxDesc';

    /**
     * the column name for the ArtbCtaxCode1 field
     */
    public const COL_ARTBCTAXCODE1 = 'ar_cust_ctax.ArtbCtaxCode1';

    /**
     * the column name for the ArtbCtaxCode2 field
     */
    public const COL_ARTBCTAXCODE2 = 'ar_cust_ctax.ArtbCtaxCode2';

    /**
     * the column name for the ArtbCtaxCode3 field
     */
    public const COL_ARTBCTAXCODE3 = 'ar_cust_ctax.ArtbCtaxCode3';

    /**
     * the column name for the ArtbCtaxCode4 field
     */
    public const COL_ARTBCTAXCODE4 = 'ar_cust_ctax.ArtbCtaxCode4';

    /**
     * the column name for the ArtbCtaxCode5 field
     */
    public const COL_ARTBCTAXCODE5 = 'ar_cust_ctax.ArtbCtaxCode5';

    /**
     * the column name for the ArtbCtaxCode6 field
     */
    public const COL_ARTBCTAXCODE6 = 'ar_cust_ctax.ArtbCtaxCode6';

    /**
     * the column name for the ArtbCtaxCode7 field
     */
    public const COL_ARTBCTAXCODE7 = 'ar_cust_ctax.ArtbCtaxCode7';

    /**
     * the column name for the ArtbCtaxCode8 field
     */
    public const COL_ARTBCTAXCODE8 = 'ar_cust_ctax.ArtbCtaxCode8';

    /**
     * the column name for the ArtbCtaxCode9 field
     */
    public const COL_ARTBCTAXCODE9 = 'ar_cust_ctax.ArtbCtaxCode9';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'ar_cust_ctax.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'ar_cust_ctax.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'ar_cust_ctax.dummy';

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
        self::TYPE_PHPNAME       => ['Artbctaxcode', 'Artbctaxdesc', 'Artbctaxcode1', 'Artbctaxcode2', 'Artbctaxcode3', 'Artbctaxcode4', 'Artbctaxcode5', 'Artbctaxcode6', 'Artbctaxcode7', 'Artbctaxcode8', 'Artbctaxcode9', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['artbctaxcode', 'artbctaxdesc', 'artbctaxcode1', 'artbctaxcode2', 'artbctaxcode3', 'artbctaxcode4', 'artbctaxcode5', 'artbctaxcode6', 'artbctaxcode7', 'artbctaxcode8', 'artbctaxcode9', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ArCustTaxCodeTableMap::COL_ARTBCTAXCODE, ArCustTaxCodeTableMap::COL_ARTBCTAXDESC, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE1, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE2, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE3, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE4, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE5, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE6, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE7, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE8, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE9, ArCustTaxCodeTableMap::COL_DATEUPDTD, ArCustTaxCodeTableMap::COL_TIMEUPDTD, ArCustTaxCodeTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['ArtbCtaxCode', 'ArtbCtaxDesc', 'ArtbCtaxCode1', 'ArtbCtaxCode2', 'ArtbCtaxCode3', 'ArtbCtaxCode4', 'ArtbCtaxCode5', 'ArtbCtaxCode6', 'ArtbCtaxCode7', 'ArtbCtaxCode8', 'ArtbCtaxCode9', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, ]
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
        self::TYPE_PHPNAME       => ['Artbctaxcode' => 0, 'Artbctaxdesc' => 1, 'Artbctaxcode1' => 2, 'Artbctaxcode2' => 3, 'Artbctaxcode3' => 4, 'Artbctaxcode4' => 5, 'Artbctaxcode5' => 6, 'Artbctaxcode6' => 7, 'Artbctaxcode7' => 8, 'Artbctaxcode8' => 9, 'Artbctaxcode9' => 10, 'Dateupdtd' => 11, 'Timeupdtd' => 12, 'Dummy' => 13, ],
        self::TYPE_CAMELNAME     => ['artbctaxcode' => 0, 'artbctaxdesc' => 1, 'artbctaxcode1' => 2, 'artbctaxcode2' => 3, 'artbctaxcode3' => 4, 'artbctaxcode4' => 5, 'artbctaxcode5' => 6, 'artbctaxcode6' => 7, 'artbctaxcode7' => 8, 'artbctaxcode8' => 9, 'artbctaxcode9' => 10, 'dateupdtd' => 11, 'timeupdtd' => 12, 'dummy' => 13, ],
        self::TYPE_COLNAME       => [ArCustTaxCodeTableMap::COL_ARTBCTAXCODE => 0, ArCustTaxCodeTableMap::COL_ARTBCTAXDESC => 1, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE1 => 2, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE2 => 3, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE3 => 4, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE4 => 5, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE5 => 6, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE6 => 7, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE7 => 8, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE8 => 9, ArCustTaxCodeTableMap::COL_ARTBCTAXCODE9 => 10, ArCustTaxCodeTableMap::COL_DATEUPDTD => 11, ArCustTaxCodeTableMap::COL_TIMEUPDTD => 12, ArCustTaxCodeTableMap::COL_DUMMY => 13, ],
        self::TYPE_FIELDNAME     => ['ArtbCtaxCode' => 0, 'ArtbCtaxDesc' => 1, 'ArtbCtaxCode1' => 2, 'ArtbCtaxCode2' => 3, 'ArtbCtaxCode3' => 4, 'ArtbCtaxCode4' => 5, 'ArtbCtaxCode5' => 6, 'ArtbCtaxCode6' => 7, 'ArtbCtaxCode7' => 8, 'ArtbCtaxCode8' => 9, 'ArtbCtaxCode9' => 10, 'DateUpdtd' => 11, 'TimeUpdtd' => 12, 'dummy' => 13, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Artbctaxcode' => 'ARTBCTAXCODE',
        'ArCustTaxCode.Artbctaxcode' => 'ARTBCTAXCODE',
        'artbctaxcode' => 'ARTBCTAXCODE',
        'arCustTaxCode.artbctaxcode' => 'ARTBCTAXCODE',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE' => 'ARTBCTAXCODE',
        'COL_ARTBCTAXCODE' => 'ARTBCTAXCODE',
        'ArtbCtaxCode' => 'ARTBCTAXCODE',
        'ar_cust_ctax.ArtbCtaxCode' => 'ARTBCTAXCODE',
        'Artbctaxdesc' => 'ARTBCTAXDESC',
        'ArCustTaxCode.Artbctaxdesc' => 'ARTBCTAXDESC',
        'artbctaxdesc' => 'ARTBCTAXDESC',
        'arCustTaxCode.artbctaxdesc' => 'ARTBCTAXDESC',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXDESC' => 'ARTBCTAXDESC',
        'COL_ARTBCTAXDESC' => 'ARTBCTAXDESC',
        'ArtbCtaxDesc' => 'ARTBCTAXDESC',
        'ar_cust_ctax.ArtbCtaxDesc' => 'ARTBCTAXDESC',
        'Artbctaxcode1' => 'ARTBCTAXCODE1',
        'ArCustTaxCode.Artbctaxcode1' => 'ARTBCTAXCODE1',
        'artbctaxcode1' => 'ARTBCTAXCODE1',
        'arCustTaxCode.artbctaxcode1' => 'ARTBCTAXCODE1',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE1' => 'ARTBCTAXCODE1',
        'COL_ARTBCTAXCODE1' => 'ARTBCTAXCODE1',
        'ArtbCtaxCode1' => 'ARTBCTAXCODE1',
        'ar_cust_ctax.ArtbCtaxCode1' => 'ARTBCTAXCODE1',
        'Artbctaxcode2' => 'ARTBCTAXCODE2',
        'ArCustTaxCode.Artbctaxcode2' => 'ARTBCTAXCODE2',
        'artbctaxcode2' => 'ARTBCTAXCODE2',
        'arCustTaxCode.artbctaxcode2' => 'ARTBCTAXCODE2',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE2' => 'ARTBCTAXCODE2',
        'COL_ARTBCTAXCODE2' => 'ARTBCTAXCODE2',
        'ArtbCtaxCode2' => 'ARTBCTAXCODE2',
        'ar_cust_ctax.ArtbCtaxCode2' => 'ARTBCTAXCODE2',
        'Artbctaxcode3' => 'ARTBCTAXCODE3',
        'ArCustTaxCode.Artbctaxcode3' => 'ARTBCTAXCODE3',
        'artbctaxcode3' => 'ARTBCTAXCODE3',
        'arCustTaxCode.artbctaxcode3' => 'ARTBCTAXCODE3',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE3' => 'ARTBCTAXCODE3',
        'COL_ARTBCTAXCODE3' => 'ARTBCTAXCODE3',
        'ArtbCtaxCode3' => 'ARTBCTAXCODE3',
        'ar_cust_ctax.ArtbCtaxCode3' => 'ARTBCTAXCODE3',
        'Artbctaxcode4' => 'ARTBCTAXCODE4',
        'ArCustTaxCode.Artbctaxcode4' => 'ARTBCTAXCODE4',
        'artbctaxcode4' => 'ARTBCTAXCODE4',
        'arCustTaxCode.artbctaxcode4' => 'ARTBCTAXCODE4',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE4' => 'ARTBCTAXCODE4',
        'COL_ARTBCTAXCODE4' => 'ARTBCTAXCODE4',
        'ArtbCtaxCode4' => 'ARTBCTAXCODE4',
        'ar_cust_ctax.ArtbCtaxCode4' => 'ARTBCTAXCODE4',
        'Artbctaxcode5' => 'ARTBCTAXCODE5',
        'ArCustTaxCode.Artbctaxcode5' => 'ARTBCTAXCODE5',
        'artbctaxcode5' => 'ARTBCTAXCODE5',
        'arCustTaxCode.artbctaxcode5' => 'ARTBCTAXCODE5',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE5' => 'ARTBCTAXCODE5',
        'COL_ARTBCTAXCODE5' => 'ARTBCTAXCODE5',
        'ArtbCtaxCode5' => 'ARTBCTAXCODE5',
        'ar_cust_ctax.ArtbCtaxCode5' => 'ARTBCTAXCODE5',
        'Artbctaxcode6' => 'ARTBCTAXCODE6',
        'ArCustTaxCode.Artbctaxcode6' => 'ARTBCTAXCODE6',
        'artbctaxcode6' => 'ARTBCTAXCODE6',
        'arCustTaxCode.artbctaxcode6' => 'ARTBCTAXCODE6',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE6' => 'ARTBCTAXCODE6',
        'COL_ARTBCTAXCODE6' => 'ARTBCTAXCODE6',
        'ArtbCtaxCode6' => 'ARTBCTAXCODE6',
        'ar_cust_ctax.ArtbCtaxCode6' => 'ARTBCTAXCODE6',
        'Artbctaxcode7' => 'ARTBCTAXCODE7',
        'ArCustTaxCode.Artbctaxcode7' => 'ARTBCTAXCODE7',
        'artbctaxcode7' => 'ARTBCTAXCODE7',
        'arCustTaxCode.artbctaxcode7' => 'ARTBCTAXCODE7',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE7' => 'ARTBCTAXCODE7',
        'COL_ARTBCTAXCODE7' => 'ARTBCTAXCODE7',
        'ArtbCtaxCode7' => 'ARTBCTAXCODE7',
        'ar_cust_ctax.ArtbCtaxCode7' => 'ARTBCTAXCODE7',
        'Artbctaxcode8' => 'ARTBCTAXCODE8',
        'ArCustTaxCode.Artbctaxcode8' => 'ARTBCTAXCODE8',
        'artbctaxcode8' => 'ARTBCTAXCODE8',
        'arCustTaxCode.artbctaxcode8' => 'ARTBCTAXCODE8',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE8' => 'ARTBCTAXCODE8',
        'COL_ARTBCTAXCODE8' => 'ARTBCTAXCODE8',
        'ArtbCtaxCode8' => 'ARTBCTAXCODE8',
        'ar_cust_ctax.ArtbCtaxCode8' => 'ARTBCTAXCODE8',
        'Artbctaxcode9' => 'ARTBCTAXCODE9',
        'ArCustTaxCode.Artbctaxcode9' => 'ARTBCTAXCODE9',
        'artbctaxcode9' => 'ARTBCTAXCODE9',
        'arCustTaxCode.artbctaxcode9' => 'ARTBCTAXCODE9',
        'ArCustTaxCodeTableMap::COL_ARTBCTAXCODE9' => 'ARTBCTAXCODE9',
        'COL_ARTBCTAXCODE9' => 'ARTBCTAXCODE9',
        'ArtbCtaxCode9' => 'ARTBCTAXCODE9',
        'ar_cust_ctax.ArtbCtaxCode9' => 'ARTBCTAXCODE9',
        'Dateupdtd' => 'DATEUPDTD',
        'ArCustTaxCode.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'arCustTaxCode.dateupdtd' => 'DATEUPDTD',
        'ArCustTaxCodeTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'ar_cust_ctax.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ArCustTaxCode.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'arCustTaxCode.timeupdtd' => 'TIMEUPDTD',
        'ArCustTaxCodeTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'ar_cust_ctax.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ArCustTaxCode.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'arCustTaxCode.dummy' => 'DUMMY',
        'ArCustTaxCodeTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'ar_cust_ctax.dummy' => 'DUMMY',
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
        $this->setName('ar_cust_ctax');
        $this->setPhpName('ArCustTaxCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArCustTaxCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArtbCtaxCode', 'Artbctaxcode', 'VARCHAR', true, 8, '');
        $this->addColumn('ArtbCtaxDesc', 'Artbctaxdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('ArtbCtaxCode1', 'Artbctaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode2', 'Artbctaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode3', 'Artbctaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode4', 'Artbctaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode5', 'Artbctaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode6', 'Artbctaxcode6', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode7', 'Artbctaxcode7', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode8', 'Artbctaxcode8', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbCtaxCode9', 'Artbctaxcode9', 'VARCHAR', false, 6, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Artbctaxcode', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? ArCustTaxCodeTableMap::CLASS_DEFAULT : ArCustTaxCodeTableMap::OM_CLASS;
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
     * @return array (ArCustTaxCode object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ArCustTaxCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArCustTaxCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArCustTaxCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArCustTaxCodeTableMap::OM_CLASS;
            /** @var ArCustTaxCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArCustTaxCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ArCustTaxCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArCustTaxCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArCustTaxCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArCustTaxCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXDESC);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE1);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE2);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE3);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE4);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE5);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE6);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE7);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE8);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE9);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArCustTaxCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->addSelectColumn($alias . '.ArtbCtaxDesc');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode1');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode2');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode3');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode4');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode5');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode6');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode7');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode8');
            $criteria->addSelectColumn($alias . '.ArtbCtaxCode9');
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
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXDESC);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE1);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE2);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE3);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE4);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE5);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE6);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE7);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE8);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE9);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ArCustTaxCodeTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxDesc');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode1');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode2');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode3');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode4');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode5');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode6');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode7');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode8');
            $criteria->removeSelectColumn($alias . '.ArtbCtaxCode9');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArCustTaxCodeTableMap::DATABASE_NAME)->getTable(ArCustTaxCodeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ArCustTaxCode or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ArCustTaxCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTaxCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArCustTaxCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArCustTaxCodeTableMap::DATABASE_NAME);
            $criteria->add(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE, (array) $values, Criteria::IN);
        }

        $query = ArCustTaxCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArCustTaxCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArCustTaxCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ar_cust_ctax table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ArCustTaxCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArCustTaxCode or Criteria object.
     *
     * @param mixed $criteria Criteria or ArCustTaxCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTaxCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArCustTaxCode object
        }


        // Set the correct dbName
        $query = ArCustTaxCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
