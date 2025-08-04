<?php

namespace Map;

use \DocumentFolder;
use \DocumentFolderQuery;
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
 * This class defines the structure of the 'doc_control' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class DocumentFolderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.DocumentFolderTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'doc_control';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'DocumentFolder';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\DocumentFolder';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'DocumentFolder';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the DoccFolder field
     */
    public const COL_DOCCFOLDER = 'doc_control.DoccFolder';

    /**
     * the column name for the DoccFolderDesc field
     */
    public const COL_DOCCFOLDERDESC = 'doc_control.DoccFolderDesc';

    /**
     * the column name for the DoccDir field
     */
    public const COL_DOCCDIR = 'doc_control.DoccDir';

    /**
     * the column name for the DoccTag field
     */
    public const COL_DOCCTAG = 'doc_control.DoccTag';

    /**
     * the column name for the DoccMultCopy field
     */
    public const COL_DOCCMULTCOPY = 'doc_control.DoccMultCopy';

    /**
     * the column name for the DoccOverWrt field
     */
    public const COL_DOCCOVERWRT = 'doc_control.DoccOverWrt';

    /**
     * the column name for the DoccFileCnt field
     */
    public const COL_DOCCFILECNT = 'doc_control.DoccFileCnt';

    /**
     * the column name for the DoccAutoScanId field
     */
    public const COL_DOCCAUTOSCANID = 'doc_control.DoccAutoScanId';

    /**
     * the column name for the DoccUseAutoFile field
     */
    public const COL_DOCCUSEAUTOFILE = 'doc_control.DoccUseAutoFile';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'doc_control.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'doc_control.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'doc_control.dummy';

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
        self::TYPE_PHPNAME       => ['Doccfolder', 'Doccfolderdesc', 'Doccdir', 'Docctag', 'Doccmultcopy', 'Doccoverwrt', 'Doccfilecnt', 'Doccautoscanid', 'DoccUseAutoFile', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['doccfolder', 'doccfolderdesc', 'doccdir', 'docctag', 'doccmultcopy', 'doccoverwrt', 'doccfilecnt', 'doccautoscanid', 'doccUseAutoFile', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [DocumentFolderTableMap::COL_DOCCFOLDER, DocumentFolderTableMap::COL_DOCCFOLDERDESC, DocumentFolderTableMap::COL_DOCCDIR, DocumentFolderTableMap::COL_DOCCTAG, DocumentFolderTableMap::COL_DOCCMULTCOPY, DocumentFolderTableMap::COL_DOCCOVERWRT, DocumentFolderTableMap::COL_DOCCFILECNT, DocumentFolderTableMap::COL_DOCCAUTOSCANID, DocumentFolderTableMap::COL_DOCCUSEAUTOFILE, DocumentFolderTableMap::COL_DATEUPDTD, DocumentFolderTableMap::COL_TIMEUPDTD, DocumentFolderTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['DoccFolder', 'DoccFolderDesc', 'DoccDir', 'DoccTag', 'DoccMultCopy', 'DoccOverWrt', 'DoccFileCnt', 'DoccAutoScanId', 'DoccUseAutoFile', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ]
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
        self::TYPE_PHPNAME       => ['Doccfolder' => 0, 'Doccfolderdesc' => 1, 'Doccdir' => 2, 'Docctag' => 3, 'Doccmultcopy' => 4, 'Doccoverwrt' => 5, 'Doccfilecnt' => 6, 'Doccautoscanid' => 7, 'DoccUseAutoFile' => 8, 'Dateupdtd' => 9, 'Timeupdtd' => 10, 'Dummy' => 11, ],
        self::TYPE_CAMELNAME     => ['doccfolder' => 0, 'doccfolderdesc' => 1, 'doccdir' => 2, 'docctag' => 3, 'doccmultcopy' => 4, 'doccoverwrt' => 5, 'doccfilecnt' => 6, 'doccautoscanid' => 7, 'doccUseAutoFile' => 8, 'dateupdtd' => 9, 'timeupdtd' => 10, 'dummy' => 11, ],
        self::TYPE_COLNAME       => [DocumentFolderTableMap::COL_DOCCFOLDER => 0, DocumentFolderTableMap::COL_DOCCFOLDERDESC => 1, DocumentFolderTableMap::COL_DOCCDIR => 2, DocumentFolderTableMap::COL_DOCCTAG => 3, DocumentFolderTableMap::COL_DOCCMULTCOPY => 4, DocumentFolderTableMap::COL_DOCCOVERWRT => 5, DocumentFolderTableMap::COL_DOCCFILECNT => 6, DocumentFolderTableMap::COL_DOCCAUTOSCANID => 7, DocumentFolderTableMap::COL_DOCCUSEAUTOFILE => 8, DocumentFolderTableMap::COL_DATEUPDTD => 9, DocumentFolderTableMap::COL_TIMEUPDTD => 10, DocumentFolderTableMap::COL_DUMMY => 11, ],
        self::TYPE_FIELDNAME     => ['DoccFolder' => 0, 'DoccFolderDesc' => 1, 'DoccDir' => 2, 'DoccTag' => 3, 'DoccMultCopy' => 4, 'DoccOverWrt' => 5, 'DoccFileCnt' => 6, 'DoccAutoScanId' => 7, 'DoccUseAutoFile' => 8, 'DateUpdtd' => 9, 'TimeUpdtd' => 10, 'dummy' => 11, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Doccfolder' => 'DOCCFOLDER',
        'DocumentFolder.Doccfolder' => 'DOCCFOLDER',
        'doccfolder' => 'DOCCFOLDER',
        'documentFolder.doccfolder' => 'DOCCFOLDER',
        'DocumentFolderTableMap::COL_DOCCFOLDER' => 'DOCCFOLDER',
        'COL_DOCCFOLDER' => 'DOCCFOLDER',
        'DoccFolder' => 'DOCCFOLDER',
        'doc_control.DoccFolder' => 'DOCCFOLDER',
        'Doccfolderdesc' => 'DOCCFOLDERDESC',
        'DocumentFolder.Doccfolderdesc' => 'DOCCFOLDERDESC',
        'doccfolderdesc' => 'DOCCFOLDERDESC',
        'documentFolder.doccfolderdesc' => 'DOCCFOLDERDESC',
        'DocumentFolderTableMap::COL_DOCCFOLDERDESC' => 'DOCCFOLDERDESC',
        'COL_DOCCFOLDERDESC' => 'DOCCFOLDERDESC',
        'DoccFolderDesc' => 'DOCCFOLDERDESC',
        'doc_control.DoccFolderDesc' => 'DOCCFOLDERDESC',
        'Doccdir' => 'DOCCDIR',
        'DocumentFolder.Doccdir' => 'DOCCDIR',
        'doccdir' => 'DOCCDIR',
        'documentFolder.doccdir' => 'DOCCDIR',
        'DocumentFolderTableMap::COL_DOCCDIR' => 'DOCCDIR',
        'COL_DOCCDIR' => 'DOCCDIR',
        'DoccDir' => 'DOCCDIR',
        'doc_control.DoccDir' => 'DOCCDIR',
        'Docctag' => 'DOCCTAG',
        'DocumentFolder.Docctag' => 'DOCCTAG',
        'docctag' => 'DOCCTAG',
        'documentFolder.docctag' => 'DOCCTAG',
        'DocumentFolderTableMap::COL_DOCCTAG' => 'DOCCTAG',
        'COL_DOCCTAG' => 'DOCCTAG',
        'DoccTag' => 'DOCCTAG',
        'doc_control.DoccTag' => 'DOCCTAG',
        'Doccmultcopy' => 'DOCCMULTCOPY',
        'DocumentFolder.Doccmultcopy' => 'DOCCMULTCOPY',
        'doccmultcopy' => 'DOCCMULTCOPY',
        'documentFolder.doccmultcopy' => 'DOCCMULTCOPY',
        'DocumentFolderTableMap::COL_DOCCMULTCOPY' => 'DOCCMULTCOPY',
        'COL_DOCCMULTCOPY' => 'DOCCMULTCOPY',
        'DoccMultCopy' => 'DOCCMULTCOPY',
        'doc_control.DoccMultCopy' => 'DOCCMULTCOPY',
        'Doccoverwrt' => 'DOCCOVERWRT',
        'DocumentFolder.Doccoverwrt' => 'DOCCOVERWRT',
        'doccoverwrt' => 'DOCCOVERWRT',
        'documentFolder.doccoverwrt' => 'DOCCOVERWRT',
        'DocumentFolderTableMap::COL_DOCCOVERWRT' => 'DOCCOVERWRT',
        'COL_DOCCOVERWRT' => 'DOCCOVERWRT',
        'DoccOverWrt' => 'DOCCOVERWRT',
        'doc_control.DoccOverWrt' => 'DOCCOVERWRT',
        'Doccfilecnt' => 'DOCCFILECNT',
        'DocumentFolder.Doccfilecnt' => 'DOCCFILECNT',
        'doccfilecnt' => 'DOCCFILECNT',
        'documentFolder.doccfilecnt' => 'DOCCFILECNT',
        'DocumentFolderTableMap::COL_DOCCFILECNT' => 'DOCCFILECNT',
        'COL_DOCCFILECNT' => 'DOCCFILECNT',
        'DoccFileCnt' => 'DOCCFILECNT',
        'doc_control.DoccFileCnt' => 'DOCCFILECNT',
        'Doccautoscanid' => 'DOCCAUTOSCANID',
        'DocumentFolder.Doccautoscanid' => 'DOCCAUTOSCANID',
        'doccautoscanid' => 'DOCCAUTOSCANID',
        'documentFolder.doccautoscanid' => 'DOCCAUTOSCANID',
        'DocumentFolderTableMap::COL_DOCCAUTOSCANID' => 'DOCCAUTOSCANID',
        'COL_DOCCAUTOSCANID' => 'DOCCAUTOSCANID',
        'DoccAutoScanId' => 'DOCCAUTOSCANID',
        'doc_control.DoccAutoScanId' => 'DOCCAUTOSCANID',
        'DoccUseAutoFile' => 'DOCCUSEAUTOFILE',
        'DocumentFolder.DoccUseAutoFile' => 'DOCCUSEAUTOFILE',
        'doccUseAutoFile' => 'DOCCUSEAUTOFILE',
        'documentFolder.doccUseAutoFile' => 'DOCCUSEAUTOFILE',
        'DocumentFolderTableMap::COL_DOCCUSEAUTOFILE' => 'DOCCUSEAUTOFILE',
        'COL_DOCCUSEAUTOFILE' => 'DOCCUSEAUTOFILE',
        'doc_control.DoccUseAutoFile' => 'DOCCUSEAUTOFILE',
        'Dateupdtd' => 'DATEUPDTD',
        'DocumentFolder.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'documentFolder.dateupdtd' => 'DATEUPDTD',
        'DocumentFolderTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'doc_control.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'DocumentFolder.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'documentFolder.timeupdtd' => 'TIMEUPDTD',
        'DocumentFolderTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'doc_control.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'DocumentFolder.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'documentFolder.dummy' => 'DUMMY',
        'DocumentFolderTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'doc_control.dummy' => 'DUMMY',
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
        $this->setName('doc_control');
        $this->setPhpName('DocumentFolder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\DocumentFolder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('DoccFolder', 'Doccfolder', 'VARCHAR', true, 8, '');
        $this->addColumn('DoccFolderDesc', 'Doccfolderdesc', 'VARCHAR', false, 40, null);
        $this->addColumn('DoccDir', 'Doccdir', 'VARCHAR', false, 50, null);
        $this->addColumn('DoccTag', 'Docctag', 'VARCHAR', false, 2, null);
        $this->addColumn('DoccMultCopy', 'Doccmultcopy', 'VARCHAR', false, 1, null);
        $this->addColumn('DoccOverWrt', 'Doccoverwrt', 'VARCHAR', false, 1, null);
        $this->addColumn('DoccFileCnt', 'Doccfilecnt', 'INTEGER', false, 8, null);
        $this->addColumn('DoccAutoScanId', 'Doccautoscanid', 'VARCHAR', false, 4, null);
        $this->addColumn('DoccUseAutoFile', 'DoccUseAutoFile', 'VARCHAR', false, 1, null);
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
        $this->addRelation('Document', '\\Document', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':DoccFolder',
    1 => ':DoccFolder',
  ),
), null, null, 'Documents', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? DocumentFolderTableMap::CLASS_DEFAULT : DocumentFolderTableMap::OM_CLASS;
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
     * @return array (DocumentFolder object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = DocumentFolderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = DocumentFolderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + DocumentFolderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DocumentFolderTableMap::OM_CLASS;
            /** @var DocumentFolder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            DocumentFolderTableMap::addInstanceToPool($obj, $key);
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
            $key = DocumentFolderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = DocumentFolderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var DocumentFolder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DocumentFolderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCFOLDER);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCFOLDERDESC);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCDIR);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCTAG);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCMULTCOPY);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCOVERWRT);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCFILECNT);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCAUTOSCANID);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DOCCUSEAUTOFILE);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(DocumentFolderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.DoccFolder');
            $criteria->addSelectColumn($alias . '.DoccFolderDesc');
            $criteria->addSelectColumn($alias . '.DoccDir');
            $criteria->addSelectColumn($alias . '.DoccTag');
            $criteria->addSelectColumn($alias . '.DoccMultCopy');
            $criteria->addSelectColumn($alias . '.DoccOverWrt');
            $criteria->addSelectColumn($alias . '.DoccFileCnt');
            $criteria->addSelectColumn($alias . '.DoccAutoScanId');
            $criteria->addSelectColumn($alias . '.DoccUseAutoFile');
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
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCFOLDER);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCFOLDERDESC);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCDIR);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCTAG);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCMULTCOPY);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCOVERWRT);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCFILECNT);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCAUTOSCANID);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DOCCUSEAUTOFILE);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(DocumentFolderTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.DoccFolder');
            $criteria->removeSelectColumn($alias . '.DoccFolderDesc');
            $criteria->removeSelectColumn($alias . '.DoccDir');
            $criteria->removeSelectColumn($alias . '.DoccTag');
            $criteria->removeSelectColumn($alias . '.DoccMultCopy');
            $criteria->removeSelectColumn($alias . '.DoccOverWrt');
            $criteria->removeSelectColumn($alias . '.DoccFileCnt');
            $criteria->removeSelectColumn($alias . '.DoccAutoScanId');
            $criteria->removeSelectColumn($alias . '.DoccUseAutoFile');
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
        return Propel::getServiceContainer()->getDatabaseMap(DocumentFolderTableMap::DATABASE_NAME)->getTable(DocumentFolderTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a DocumentFolder or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or DocumentFolder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \DocumentFolder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DocumentFolderTableMap::DATABASE_NAME);
            $criteria->add(DocumentFolderTableMap::COL_DOCCFOLDER, (array) $values, Criteria::IN);
        }

        $query = DocumentFolderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            DocumentFolderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                DocumentFolderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the doc_control table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return DocumentFolderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a DocumentFolder or Criteria object.
     *
     * @param mixed $criteria Criteria or DocumentFolder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from DocumentFolder object
        }


        // Set the correct dbName
        $query = DocumentFolderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
