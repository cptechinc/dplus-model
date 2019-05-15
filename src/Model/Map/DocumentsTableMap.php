<?php

namespace Map;

use \Documents;
use \DocumentsQuery;
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
 * This class defines the structure of the 'doc_index' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class DocumentsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.DocumentsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'doc_index';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Documents';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Documents';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the DoccFolder field
     */
    const COL_DOCCFOLDER = 'doc_index.DoccFolder';

    /**
     * the column name for the DociFld1Cd field
     */
    const COL_DOCIFLD1CD = 'doc_index.DociFld1Cd';

    /**
     * the column name for the DociFld1 field
     */
    const COL_DOCIFLD1 = 'doc_index.DociFld1';

    /**
     * the column name for the DociFld2Cd field
     */
    const COL_DOCIFLD2CD = 'doc_index.DociFld2Cd';

    /**
     * the column name for the DociFld2 field
     */
    const COL_DOCIFLD2 = 'doc_index.DociFld2';

    /**
     * the column name for the DociSeq field
     */
    const COL_DOCISEQ = 'doc_index.DociSeq';

    /**
     * the column name for the DociTag field
     */
    const COL_DOCITAG = 'doc_index.DociTag';

    /**
     * the column name for the DociFileName field
     */
    const COL_DOCIFILENAME = 'doc_index.DociFileName';

    /**
     * the column name for the DociUser field
     */
    const COL_DOCIUSER = 'doc_index.DociUser';

    /**
     * the column name for the DociDate field
     */
    const COL_DOCIDATE = 'doc_index.DociDate';

    /**
     * the column name for the DociTime field
     */
    const COL_DOCITIME = 'doc_index.DociTime';

    /**
     * the column name for the DociOrigDir field
     */
    const COL_DOCIORIGDIR = 'doc_index.DociOrigDir';

    /**
     * the column name for the DociOrigFile field
     */
    const COL_DOCIORIGFILE = 'doc_index.DociOrigFile';

    /**
     * the column name for the DociRef field
     */
    const COL_DOCIREF = 'doc_index.DociRef';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'doc_index.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'doc_index.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'doc_index.dummy';

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
        self::TYPE_PHPNAME       => array('Doccfolder', 'Docifld1cd', 'Docifld1', 'Docifld2cd', 'Docifld2', 'Dociseq', 'Docitag', 'Docifilename', 'Dociuser', 'Docidate', 'Docitime', 'Dociorigdir', 'Dociorigfile', 'Dociref', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('doccfolder', 'docifld1cd', 'docifld1', 'docifld2cd', 'docifld2', 'dociseq', 'docitag', 'docifilename', 'dociuser', 'docidate', 'docitime', 'dociorigdir', 'dociorigfile', 'dociref', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(DocumentsTableMap::COL_DOCCFOLDER, DocumentsTableMap::COL_DOCIFLD1CD, DocumentsTableMap::COL_DOCIFLD1, DocumentsTableMap::COL_DOCIFLD2CD, DocumentsTableMap::COL_DOCIFLD2, DocumentsTableMap::COL_DOCISEQ, DocumentsTableMap::COL_DOCITAG, DocumentsTableMap::COL_DOCIFILENAME, DocumentsTableMap::COL_DOCIUSER, DocumentsTableMap::COL_DOCIDATE, DocumentsTableMap::COL_DOCITIME, DocumentsTableMap::COL_DOCIORIGDIR, DocumentsTableMap::COL_DOCIORIGFILE, DocumentsTableMap::COL_DOCIREF, DocumentsTableMap::COL_DATEUPDTD, DocumentsTableMap::COL_TIMEUPDTD, DocumentsTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('DoccFolder', 'DociFld1Cd', 'DociFld1', 'DociFld2Cd', 'DociFld2', 'DociSeq', 'DociTag', 'DociFileName', 'DociUser', 'DociDate', 'DociTime', 'DociOrigDir', 'DociOrigFile', 'DociRef', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Doccfolder' => 0, 'Docifld1cd' => 1, 'Docifld1' => 2, 'Docifld2cd' => 3, 'Docifld2' => 4, 'Dociseq' => 5, 'Docitag' => 6, 'Docifilename' => 7, 'Dociuser' => 8, 'Docidate' => 9, 'Docitime' => 10, 'Dociorigdir' => 11, 'Dociorigfile' => 12, 'Dociref' => 13, 'Dateupdtd' => 14, 'Timeupdtd' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('doccfolder' => 0, 'docifld1cd' => 1, 'docifld1' => 2, 'docifld2cd' => 3, 'docifld2' => 4, 'dociseq' => 5, 'docitag' => 6, 'docifilename' => 7, 'dociuser' => 8, 'docidate' => 9, 'docitime' => 10, 'dociorigdir' => 11, 'dociorigfile' => 12, 'dociref' => 13, 'dateupdtd' => 14, 'timeupdtd' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(DocumentsTableMap::COL_DOCCFOLDER => 0, DocumentsTableMap::COL_DOCIFLD1CD => 1, DocumentsTableMap::COL_DOCIFLD1 => 2, DocumentsTableMap::COL_DOCIFLD2CD => 3, DocumentsTableMap::COL_DOCIFLD2 => 4, DocumentsTableMap::COL_DOCISEQ => 5, DocumentsTableMap::COL_DOCITAG => 6, DocumentsTableMap::COL_DOCIFILENAME => 7, DocumentsTableMap::COL_DOCIUSER => 8, DocumentsTableMap::COL_DOCIDATE => 9, DocumentsTableMap::COL_DOCITIME => 10, DocumentsTableMap::COL_DOCIORIGDIR => 11, DocumentsTableMap::COL_DOCIORIGFILE => 12, DocumentsTableMap::COL_DOCIREF => 13, DocumentsTableMap::COL_DATEUPDTD => 14, DocumentsTableMap::COL_TIMEUPDTD => 15, DocumentsTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('DoccFolder' => 0, 'DociFld1Cd' => 1, 'DociFld1' => 2, 'DociFld2Cd' => 3, 'DociFld2' => 4, 'DociSeq' => 5, 'DociTag' => 6, 'DociFileName' => 7, 'DociUser' => 8, 'DociDate' => 9, 'DociTime' => 10, 'DociOrigDir' => 11, 'DociOrigFile' => 12, 'DociRef' => 13, 'DateUpdtd' => 14, 'TimeUpdtd' => 15, 'dummy' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('doc_index');
        $this->setPhpName('Documents');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Documents');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('DoccFolder', 'Doccfolder', 'VARCHAR', true, 8, '');
        $this->addPrimaryKey('DociFld1Cd', 'Docifld1cd', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('DociFld1', 'Docifld1', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('DociFld2Cd', 'Docifld2cd', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('DociFld2', 'Docifld2', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('DociSeq', 'Dociseq', 'INTEGER', true, 3, 0);
        $this->addColumn('DociTag', 'Docitag', 'VARCHAR', false, 2, null);
        $this->addColumn('DociFileName', 'Docifilename', 'VARCHAR', false, 50, null);
        $this->addColumn('DociUser', 'Dociuser', 'VARCHAR', false, 8, null);
        $this->addColumn('DociDate', 'Docidate', 'VARCHAR', false, 8, null);
        $this->addColumn('DociTime', 'Docitime', 'VARCHAR', false, 8, null);
        $this->addColumn('DociOrigDir', 'Dociorigdir', 'VARCHAR', false, 50, null);
        $this->addColumn('DociOrigFile', 'Dociorigfile', 'VARCHAR', false, 50, null);
        $this->addColumn('DociRef', 'Dociref', 'VARCHAR', false, 30, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \Documents $obj A \Documents object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getDoccfolder() || is_scalar($obj->getDoccfolder()) || is_callable([$obj->getDoccfolder(), '__toString']) ? (string) $obj->getDoccfolder() : $obj->getDoccfolder()), (null === $obj->getDocifld1cd() || is_scalar($obj->getDocifld1cd()) || is_callable([$obj->getDocifld1cd(), '__toString']) ? (string) $obj->getDocifld1cd() : $obj->getDocifld1cd()), (null === $obj->getDocifld1() || is_scalar($obj->getDocifld1()) || is_callable([$obj->getDocifld1(), '__toString']) ? (string) $obj->getDocifld1() : $obj->getDocifld1()), (null === $obj->getDocifld2cd() || is_scalar($obj->getDocifld2cd()) || is_callable([$obj->getDocifld2cd(), '__toString']) ? (string) $obj->getDocifld2cd() : $obj->getDocifld2cd()), (null === $obj->getDocifld2() || is_scalar($obj->getDocifld2()) || is_callable([$obj->getDocifld2(), '__toString']) ? (string) $obj->getDocifld2() : $obj->getDocifld2()), (null === $obj->getDociseq() || is_scalar($obj->getDociseq()) || is_callable([$obj->getDociseq(), '__toString']) ? (string) $obj->getDociseq() : $obj->getDociseq())]);
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
     * @param mixed $value A \Documents object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Documents) {
                $key = serialize([(null === $value->getDoccfolder() || is_scalar($value->getDoccfolder()) || is_callable([$value->getDoccfolder(), '__toString']) ? (string) $value->getDoccfolder() : $value->getDoccfolder()), (null === $value->getDocifld1cd() || is_scalar($value->getDocifld1cd()) || is_callable([$value->getDocifld1cd(), '__toString']) ? (string) $value->getDocifld1cd() : $value->getDocifld1cd()), (null === $value->getDocifld1() || is_scalar($value->getDocifld1()) || is_callable([$value->getDocifld1(), '__toString']) ? (string) $value->getDocifld1() : $value->getDocifld1()), (null === $value->getDocifld2cd() || is_scalar($value->getDocifld2cd()) || is_callable([$value->getDocifld2cd(), '__toString']) ? (string) $value->getDocifld2cd() : $value->getDocifld2cd()), (null === $value->getDocifld2() || is_scalar($value->getDocifld2()) || is_callable([$value->getDocifld2(), '__toString']) ? (string) $value->getDocifld2() : $value->getDocifld2()), (null === $value->getDociseq() || is_scalar($value->getDociseq()) || is_callable([$value->getDociseq(), '__toString']) ? (string) $value->getDociseq() : $value->getDociseq())]);

            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3]), (null === $value[4] || is_scalar($value[4]) || is_callable([$value[4], '__toString']) ? (string) $value[4] : $value[4]), (null === $value[5] || is_scalar($value[5]) || is_callable([$value[5], '__toString']) ? (string) $value[5] : $value[5])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Documents object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Doccfolder', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Docifld1cd', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Docifld1', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Docifld2cd', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Docifld2', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 5 + $offset
                : self::translateFieldName('Dociseq', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? DocumentsTableMap::CLASS_DEFAULT : DocumentsTableMap::OM_CLASS;
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
     * @return array           (Documents object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = DocumentsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = DocumentsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + DocumentsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DocumentsTableMap::OM_CLASS;
            /** @var Documents $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            DocumentsTableMap::addInstanceToPool($obj, $key);
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
            $key = DocumentsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = DocumentsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Documents $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DocumentsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCCFOLDER);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIFLD1CD);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIFLD1);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIFLD2CD);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIFLD2);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCISEQ);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCITAG);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIFILENAME);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIUSER);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIDATE);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCITIME);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIORIGDIR);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIORIGFILE);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DOCIREF);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(DocumentsTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(DocumentsTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.DoccFolder');
            $criteria->addSelectColumn($alias . '.DociFld1Cd');
            $criteria->addSelectColumn($alias . '.DociFld1');
            $criteria->addSelectColumn($alias . '.DociFld2Cd');
            $criteria->addSelectColumn($alias . '.DociFld2');
            $criteria->addSelectColumn($alias . '.DociSeq');
            $criteria->addSelectColumn($alias . '.DociTag');
            $criteria->addSelectColumn($alias . '.DociFileName');
            $criteria->addSelectColumn($alias . '.DociUser');
            $criteria->addSelectColumn($alias . '.DociDate');
            $criteria->addSelectColumn($alias . '.DociTime');
            $criteria->addSelectColumn($alias . '.DociOrigDir');
            $criteria->addSelectColumn($alias . '.DociOrigFile');
            $criteria->addSelectColumn($alias . '.DociRef');
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
        return Propel::getServiceContainer()->getDatabaseMap(DocumentsTableMap::DATABASE_NAME)->getTable(DocumentsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(DocumentsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(DocumentsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new DocumentsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Documents or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Documents object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Documents) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DocumentsTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DocumentsTableMap::COL_DOCCFOLDER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DocumentsTableMap::COL_DOCIFLD1CD, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(DocumentsTableMap::COL_DOCIFLD1, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(DocumentsTableMap::COL_DOCIFLD2CD, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(DocumentsTableMap::COL_DOCIFLD2, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(DocumentsTableMap::COL_DOCISEQ, $value[5]));
                $criteria->addOr($criterion);
            }
        }

        $query = DocumentsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            DocumentsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                DocumentsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the doc_index table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return DocumentsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Documents or Criteria object.
     *
     * @param mixed               $criteria Criteria or Documents object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Documents object
        }


        // Set the correct dbName
        $query = DocumentsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // DocumentsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
DocumentsTableMap::buildTableMap();
