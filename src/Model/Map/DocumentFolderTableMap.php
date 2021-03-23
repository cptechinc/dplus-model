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
 *
 */
class DocumentFolderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.DocumentFolderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'doc_control';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\DocumentFolder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'DocumentFolder';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the DoccFolder field
     */
    const COL_DOCCFOLDER = 'doc_control.DoccFolder';

    /**
     * the column name for the DoccFolderDesc field
     */
    const COL_DOCCFOLDERDESC = 'doc_control.DoccFolderDesc';

    /**
     * the column name for the DoccDir field
     */
    const COL_DOCCDIR = 'doc_control.DoccDir';

    /**
     * the column name for the DoccTag field
     */
    const COL_DOCCTAG = 'doc_control.DoccTag';

    /**
     * the column name for the DoccMultCopy field
     */
    const COL_DOCCMULTCOPY = 'doc_control.DoccMultCopy';

    /**
     * the column name for the DoccOverWrt field
     */
    const COL_DOCCOVERWRT = 'doc_control.DoccOverWrt';

    /**
     * the column name for the DoccFileCnt field
     */
    const COL_DOCCFILECNT = 'doc_control.DoccFileCnt';

    /**
     * the column name for the DoccAutoScanId field
     */
    const COL_DOCCAUTOSCANID = 'doc_control.DoccAutoScanId';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'doc_control.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'doc_control.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'doc_control.dummy';

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
        self::TYPE_PHPNAME       => array('Doccfolder', 'Doccfolderdesc', 'Doccdir', 'Docctag', 'Doccmultcopy', 'Doccoverwrt', 'Doccfilecnt', 'Doccautoscanid', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('doccfolder', 'doccfolderdesc', 'doccdir', 'docctag', 'doccmultcopy', 'doccoverwrt', 'doccfilecnt', 'doccautoscanid', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(DocumentFolderTableMap::COL_DOCCFOLDER, DocumentFolderTableMap::COL_DOCCFOLDERDESC, DocumentFolderTableMap::COL_DOCCDIR, DocumentFolderTableMap::COL_DOCCTAG, DocumentFolderTableMap::COL_DOCCMULTCOPY, DocumentFolderTableMap::COL_DOCCOVERWRT, DocumentFolderTableMap::COL_DOCCFILECNT, DocumentFolderTableMap::COL_DOCCAUTOSCANID, DocumentFolderTableMap::COL_DATEUPDTD, DocumentFolderTableMap::COL_TIMEUPDTD, DocumentFolderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('DoccFolder', 'DoccFolderDesc', 'DoccDir', 'DoccTag', 'DoccMultCopy', 'DoccOverWrt', 'DoccFileCnt', 'DoccAutoScanId', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Doccfolder' => 0, 'Doccfolderdesc' => 1, 'Doccdir' => 2, 'Docctag' => 3, 'Doccmultcopy' => 4, 'Doccoverwrt' => 5, 'Doccfilecnt' => 6, 'Doccautoscanid' => 7, 'Dateupdtd' => 8, 'Timeupdtd' => 9, 'Dummy' => 10, ),
        self::TYPE_CAMELNAME     => array('doccfolder' => 0, 'doccfolderdesc' => 1, 'doccdir' => 2, 'docctag' => 3, 'doccmultcopy' => 4, 'doccoverwrt' => 5, 'doccfilecnt' => 6, 'doccautoscanid' => 7, 'dateupdtd' => 8, 'timeupdtd' => 9, 'dummy' => 10, ),
        self::TYPE_COLNAME       => array(DocumentFolderTableMap::COL_DOCCFOLDER => 0, DocumentFolderTableMap::COL_DOCCFOLDERDESC => 1, DocumentFolderTableMap::COL_DOCCDIR => 2, DocumentFolderTableMap::COL_DOCCTAG => 3, DocumentFolderTableMap::COL_DOCCMULTCOPY => 4, DocumentFolderTableMap::COL_DOCCOVERWRT => 5, DocumentFolderTableMap::COL_DOCCFILECNT => 6, DocumentFolderTableMap::COL_DOCCAUTOSCANID => 7, DocumentFolderTableMap::COL_DATEUPDTD => 8, DocumentFolderTableMap::COL_TIMEUPDTD => 9, DocumentFolderTableMap::COL_DUMMY => 10, ),
        self::TYPE_FIELDNAME     => array('DoccFolder' => 0, 'DoccFolderDesc' => 1, 'DoccDir' => 2, 'DoccTag' => 3, 'DoccMultCopy' => 4, 'DoccOverWrt' => 5, 'DoccFileCnt' => 6, 'DoccAutoScanId' => 7, 'DateUpdtd' => 8, 'TimeUpdtd' => 9, 'dummy' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Document', '\\Document', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':DoccFolder',
    1 => ':DoccFolder',
  ),
), null, null, 'Documents', false);
    } // buildRelations()

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
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? DocumentFolderTableMap::CLASS_DEFAULT : DocumentFolderTableMap::OM_CLASS;
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
     * @return array           (DocumentFolder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
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
        return Propel::getServiceContainer()->getDatabaseMap(DocumentFolderTableMap::DATABASE_NAME)->getTable(DocumentFolderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(DocumentFolderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(DocumentFolderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new DocumentFolderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a DocumentFolder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or DocumentFolder object or primary key or array of primary keys
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
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return DocumentFolderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a DocumentFolder or Criteria object.
     *
     * @param mixed               $criteria Criteria or DocumentFolder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
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

} // DocumentFolderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
DocumentFolderTableMap::buildTableMap();
