<?php

namespace Map;

use \OptionsVi;
use \OptionsViQuery;
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
 * This class defines the structure of the 'vi_options' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class OptionsViTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.OptionsViTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'vi_options';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\OptionsVi';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'OptionsVi';

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
     * the column name for the VitbOptnCode field
     */
    const COL_VITBOPTNCODE = 'vi_options.VitbOptnCode';

    /**
     * the column name for the VitbOptnGenAvail field
     */
    const COL_VITBOPTNGENAVAIL = 'vi_options.VitbOptnGenAvail';

    /**
     * the column name for the VitbOptnPayAvail field
     */
    const COL_VITBOPTNPAYAVAIL = 'vi_options.VitbOptnPayAvail';

    /**
     * the column name for the VitbOptnCostAvail field
     */
    const COL_VITBOPTNCOSTAVAIL = 'vi_options.VitbOptnCostAvail';

    /**
     * the column name for the VitbOptnPoAvail field
     */
    const COL_VITBOPTNPOAVAIL = 'vi_options.VitbOptnPoAvail';

    /**
     * the column name for the VitbOptnOpenAvail field
     */
    const COL_VITBOPTNOPENAVAIL = 'vi_options.VitbOptnOpenAvail';

    /**
     * the column name for the VitbOptnPhAvail field
     */
    const COL_VITBOPTNPHAVAIL = 'vi_options.VitbOptnPhAvail';

    /**
     * the column name for the VitbOptnUnrlAvail field
     */
    const COL_VITBOPTNUNRLAVAIL = 'vi_options.VitbOptnUnrlAvail';

    /**
     * the column name for the VitbOptnUnivAvail field
     */
    const COL_VITBOPTNUNIVAVAIL = 'vi_options.VitbOptnUnivAvail';

    /**
     * the column name for the VitbOptnNoteAvail field
     */
    const COL_VITBOPTNNOTEAVAIL = 'vi_options.VitbOptnNoteAvail';

    /**
     * the column name for the VitbOptn24moAvail field
     */
    const COL_VITBOPTN24MOAVAIL = 'vi_options.VitbOptn24moAvail';

    /**
     * the column name for the VitbOptnMisc1 field
     */
    const COL_VITBOPTNMISC1 = 'vi_options.VitbOptnMisc1';

    /**
     * the column name for the VitbOptnMisc2 field
     */
    const COL_VITBOPTNMISC2 = 'vi_options.VitbOptnMisc2';

    /**
     * the column name for the VitbOptnMisc3 field
     */
    const COL_VITBOPTNMISC3 = 'vi_options.VitbOptnMisc3';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'vi_options.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'vi_options.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'vi_options.dummy';

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
        self::TYPE_PHPNAME       => array('Vitboptncode', 'Vitboptngenavail', 'Vitboptnpayavail', 'Vitboptncostavail', 'Vitboptnpoavail', 'Vitboptnopenavail', 'Vitboptnphavail', 'Vitboptnunrlavail', 'Vitboptnunivavail', 'Vitboptnnoteavail', 'Vitboptn24moavail', 'Vitboptnmisc1', 'Vitboptnmisc2', 'Vitboptnmisc3', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('vitboptncode', 'vitboptngenavail', 'vitboptnpayavail', 'vitboptncostavail', 'vitboptnpoavail', 'vitboptnopenavail', 'vitboptnphavail', 'vitboptnunrlavail', 'vitboptnunivavail', 'vitboptnnoteavail', 'vitboptn24moavail', 'vitboptnmisc1', 'vitboptnmisc2', 'vitboptnmisc3', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(OptionsViTableMap::COL_VITBOPTNCODE, OptionsViTableMap::COL_VITBOPTNGENAVAIL, OptionsViTableMap::COL_VITBOPTNPAYAVAIL, OptionsViTableMap::COL_VITBOPTNCOSTAVAIL, OptionsViTableMap::COL_VITBOPTNPOAVAIL, OptionsViTableMap::COL_VITBOPTNOPENAVAIL, OptionsViTableMap::COL_VITBOPTNPHAVAIL, OptionsViTableMap::COL_VITBOPTNUNRLAVAIL, OptionsViTableMap::COL_VITBOPTNUNIVAVAIL, OptionsViTableMap::COL_VITBOPTNNOTEAVAIL, OptionsViTableMap::COL_VITBOPTN24MOAVAIL, OptionsViTableMap::COL_VITBOPTNMISC1, OptionsViTableMap::COL_VITBOPTNMISC2, OptionsViTableMap::COL_VITBOPTNMISC3, OptionsViTableMap::COL_DATEUPDTD, OptionsViTableMap::COL_TIMEUPDTD, OptionsViTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('VitbOptnCode', 'VitbOptnGenAvail', 'VitbOptnPayAvail', 'VitbOptnCostAvail', 'VitbOptnPoAvail', 'VitbOptnOpenAvail', 'VitbOptnPhAvail', 'VitbOptnUnrlAvail', 'VitbOptnUnivAvail', 'VitbOptnNoteAvail', 'VitbOptn24moAvail', 'VitbOptnMisc1', 'VitbOptnMisc2', 'VitbOptnMisc3', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Vitboptncode' => 0, 'Vitboptngenavail' => 1, 'Vitboptnpayavail' => 2, 'Vitboptncostavail' => 3, 'Vitboptnpoavail' => 4, 'Vitboptnopenavail' => 5, 'Vitboptnphavail' => 6, 'Vitboptnunrlavail' => 7, 'Vitboptnunivavail' => 8, 'Vitboptnnoteavail' => 9, 'Vitboptn24moavail' => 10, 'Vitboptnmisc1' => 11, 'Vitboptnmisc2' => 12, 'Vitboptnmisc3' => 13, 'Dateupdtd' => 14, 'Timeupdtd' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('vitboptncode' => 0, 'vitboptngenavail' => 1, 'vitboptnpayavail' => 2, 'vitboptncostavail' => 3, 'vitboptnpoavail' => 4, 'vitboptnopenavail' => 5, 'vitboptnphavail' => 6, 'vitboptnunrlavail' => 7, 'vitboptnunivavail' => 8, 'vitboptnnoteavail' => 9, 'vitboptn24moavail' => 10, 'vitboptnmisc1' => 11, 'vitboptnmisc2' => 12, 'vitboptnmisc3' => 13, 'dateupdtd' => 14, 'timeupdtd' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(OptionsViTableMap::COL_VITBOPTNCODE => 0, OptionsViTableMap::COL_VITBOPTNGENAVAIL => 1, OptionsViTableMap::COL_VITBOPTNPAYAVAIL => 2, OptionsViTableMap::COL_VITBOPTNCOSTAVAIL => 3, OptionsViTableMap::COL_VITBOPTNPOAVAIL => 4, OptionsViTableMap::COL_VITBOPTNOPENAVAIL => 5, OptionsViTableMap::COL_VITBOPTNPHAVAIL => 6, OptionsViTableMap::COL_VITBOPTNUNRLAVAIL => 7, OptionsViTableMap::COL_VITBOPTNUNIVAVAIL => 8, OptionsViTableMap::COL_VITBOPTNNOTEAVAIL => 9, OptionsViTableMap::COL_VITBOPTN24MOAVAIL => 10, OptionsViTableMap::COL_VITBOPTNMISC1 => 11, OptionsViTableMap::COL_VITBOPTNMISC2 => 12, OptionsViTableMap::COL_VITBOPTNMISC3 => 13, OptionsViTableMap::COL_DATEUPDTD => 14, OptionsViTableMap::COL_TIMEUPDTD => 15, OptionsViTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('VitbOptnCode' => 0, 'VitbOptnGenAvail' => 1, 'VitbOptnPayAvail' => 2, 'VitbOptnCostAvail' => 3, 'VitbOptnPoAvail' => 4, 'VitbOptnOpenAvail' => 5, 'VitbOptnPhAvail' => 6, 'VitbOptnUnrlAvail' => 7, 'VitbOptnUnivAvail' => 8, 'VitbOptnNoteAvail' => 9, 'VitbOptn24moAvail' => 10, 'VitbOptnMisc1' => 11, 'VitbOptnMisc2' => 12, 'VitbOptnMisc3' => 13, 'DateUpdtd' => 14, 'TimeUpdtd' => 15, 'dummy' => 16, ),
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
        $this->setName('vi_options');
        $this->setPhpName('OptionsVi');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\OptionsVi');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('VitbOptnCode', 'Vitboptncode', 'VARCHAR', true, 10, null);
        $this->addColumn('VitbOptnGenAvail', 'Vitboptngenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnPayAvail', 'Vitboptnpayavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnCostAvail', 'Vitboptncostavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnPoAvail', 'Vitboptnpoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnOpenAvail', 'Vitboptnopenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnPhAvail', 'Vitboptnphavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnUnrlAvail', 'Vitboptnunrlavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnUnivAvail', 'Vitboptnunivavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnNoteAvail', 'Vitboptnnoteavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptn24moAvail', 'Vitboptn24moavail', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnMisc1', 'Vitboptnmisc1', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnMisc2', 'Vitboptnmisc2', 'VARCHAR', false, 1, null);
        $this->addColumn('VitbOptnMisc3', 'Vitboptnmisc3', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Vitboptncode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? OptionsViTableMap::CLASS_DEFAULT : OptionsViTableMap::OM_CLASS;
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
     * @return array           (OptionsVi object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = OptionsViTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OptionsViTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OptionsViTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OptionsViTableMap::OM_CLASS;
            /** @var OptionsVi $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OptionsViTableMap::addInstanceToPool($obj, $key);
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
            $key = OptionsViTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OptionsViTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var OptionsVi $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OptionsViTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNCODE);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNGENAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNPAYAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNCOSTAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNPOAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNOPENAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNPHAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNUNRLAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNUNIVAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNNOTEAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTN24MOAVAIL);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNMISC1);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNMISC2);
            $criteria->addSelectColumn(OptionsViTableMap::COL_VITBOPTNMISC3);
            $criteria->addSelectColumn(OptionsViTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(OptionsViTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(OptionsViTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.VitbOptnCode');
            $criteria->addSelectColumn($alias . '.VitbOptnGenAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnPayAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnCostAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnPoAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnOpenAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnPhAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnUnrlAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnUnivAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnNoteAvail');
            $criteria->addSelectColumn($alias . '.VitbOptn24moAvail');
            $criteria->addSelectColumn($alias . '.VitbOptnMisc1');
            $criteria->addSelectColumn($alias . '.VitbOptnMisc2');
            $criteria->addSelectColumn($alias . '.VitbOptnMisc3');
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
        return Propel::getServiceContainer()->getDatabaseMap(OptionsViTableMap::DATABASE_NAME)->getTable(OptionsViTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(OptionsViTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(OptionsViTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new OptionsViTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a OptionsVi or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or OptionsVi object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsViTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \OptionsVi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OptionsViTableMap::DATABASE_NAME);
            $criteria->add(OptionsViTableMap::COL_VITBOPTNCODE, (array) $values, Criteria::IN);
        }

        $query = OptionsViQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OptionsViTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OptionsViTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the vi_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return OptionsViQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a OptionsVi or Criteria object.
     *
     * @param mixed               $criteria Criteria or OptionsVi object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsViTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from OptionsVi object
        }


        // Set the correct dbName
        $query = OptionsViQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // OptionsViTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
OptionsViTableMap::buildTableMap();
