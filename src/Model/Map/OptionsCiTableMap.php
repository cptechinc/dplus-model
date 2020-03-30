<?php

namespace Map;

use \OptionsCi;
use \OptionsCiQuery;
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
 * This class defines the structure of the 'ci_options' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class OptionsCiTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.OptionsCiTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ci_options';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\OptionsCi';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'OptionsCi';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 21;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 21;

    /**
     * the column name for the CitbOptnCode field
     */
    const COL_CITBOPTNCODE = 'ci_options.CitbOptnCode';

    /**
     * the column name for the CitbOptnNoteAvail field
     */
    const COL_CITBOPTNNOTEAVAIL = 'ci_options.CitbOptnNoteAvail';

    /**
     * the column name for the CitbOptnGenAvail field
     */
    const COL_CITBOPTNGENAVAIL = 'ci_options.CitbOptnGenAvail';

    /**
     * the column name for the CitbOptnPayAvail field
     */
    const COL_CITBOPTNPAYAVAIL = 'ci_options.CitbOptnPayAvail';

    /**
     * the column name for the CitbOptnCoreAvail field
     */
    const COL_CITBOPTNCOREAVAIL = 'ci_options.CitbOptnCoreAvail';

    /**
     * the column name for the CitbOptnCredAvail field
     */
    const COL_CITBOPTNCREDAVAIL = 'ci_options.CitbOptnCredAvail';

    /**
     * the column name for the CitbOptnCstkAvail field
     */
    const COL_CITBOPTNCSTKAVAIL = 'ci_options.CitbOptnCstkAvail';

    /**
     * the column name for the CitbOptnPricAvail field
     */
    const COL_CITBOPTNPRICAVAIL = 'ci_options.CitbOptnPricAvail';

    /**
     * the column name for the CitbOptnStndAvail field
     */
    const COL_CITBOPTNSTNDAVAIL = 'ci_options.CitbOptnStndAvail';

    /**
     * the column name for the CitbOptnSoAvail field
     */
    const COL_CITBOPTNSOAVAIL = 'ci_options.CitbOptnSoAvail';

    /**
     * the column name for the CitbOptnQuotAvail field
     */
    const COL_CITBOPTNQUOTAVAIL = 'ci_options.CitbOptnQuotAvail';

    /**
     * the column name for the CitbOptnOpenAvail field
     */
    const COL_CITBOPTNOPENAVAIL = 'ci_options.CitbOptnOpenAvail';

    /**
     * the column name for the CitbOptnPoAvail field
     */
    const COL_CITBOPTNPOAVAIL = 'ci_options.CitbOptnPoAvail';

    /**
     * the column name for the CitbOptnPoDaysBack field
     */
    const COL_CITBOPTNPODAYSBACK = 'ci_options.CitbOptnPoDaysBack';

    /**
     * the column name for the CitbOptnPoStrtDate field
     */
    const COL_CITBOPTNPOSTRTDATE = 'ci_options.CitbOptnPoStrtDate';

    /**
     * the column name for the CitbOptnShAvail field
     */
    const COL_CITBOPTNSHAVAIL = 'ci_options.CitbOptnShAvail';

    /**
     * the column name for the CitbOptnShDaysBack field
     */
    const COL_CITBOPTNSHDAYSBACK = 'ci_options.CitbOptnShDaysBack';

    /**
     * the column name for the CitbOptnShStrtDate field
     */
    const COL_CITBOPTNSHSTRTDATE = 'ci_options.CitbOptnShStrtDate';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'ci_options.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'ci_options.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ci_options.dummy';

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
        self::TYPE_PHPNAME       => array('Citboptncode', 'Citboptnnoteavail', 'Citboptngenavail', 'Citboptnpayavail', 'Citboptncoreavail', 'Citboptncredavail', 'Citboptncstkavail', 'Citboptnpricavail', 'Citboptnstndavail', 'Citboptnsoavail', 'Citboptnquotavail', 'Citboptnopenavail', 'Citboptnpoavail', 'Citboptnpodaysback', 'Citboptnpostrtdate', 'Citboptnshavail', 'Citboptnshdaysback', 'Citboptnshstrtdate', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('citboptncode', 'citboptnnoteavail', 'citboptngenavail', 'citboptnpayavail', 'citboptncoreavail', 'citboptncredavail', 'citboptncstkavail', 'citboptnpricavail', 'citboptnstndavail', 'citboptnsoavail', 'citboptnquotavail', 'citboptnopenavail', 'citboptnpoavail', 'citboptnpodaysback', 'citboptnpostrtdate', 'citboptnshavail', 'citboptnshdaysback', 'citboptnshstrtdate', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(OptionsCiTableMap::COL_CITBOPTNCODE, OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL, OptionsCiTableMap::COL_CITBOPTNGENAVAIL, OptionsCiTableMap::COL_CITBOPTNPAYAVAIL, OptionsCiTableMap::COL_CITBOPTNCOREAVAIL, OptionsCiTableMap::COL_CITBOPTNCREDAVAIL, OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL, OptionsCiTableMap::COL_CITBOPTNPRICAVAIL, OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL, OptionsCiTableMap::COL_CITBOPTNSOAVAIL, OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL, OptionsCiTableMap::COL_CITBOPTNOPENAVAIL, OptionsCiTableMap::COL_CITBOPTNPOAVAIL, OptionsCiTableMap::COL_CITBOPTNPODAYSBACK, OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE, OptionsCiTableMap::COL_CITBOPTNSHAVAIL, OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK, OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE, OptionsCiTableMap::COL_DATEUPDTD, OptionsCiTableMap::COL_TIMEUPDTD, OptionsCiTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('CitbOptnCode', 'CitbOptnNoteAvail', 'CitbOptnGenAvail', 'CitbOptnPayAvail', 'CitbOptnCoreAvail', 'CitbOptnCredAvail', 'CitbOptnCstkAvail', 'CitbOptnPricAvail', 'CitbOptnStndAvail', 'CitbOptnSoAvail', 'CitbOptnQuotAvail', 'CitbOptnOpenAvail', 'CitbOptnPoAvail', 'CitbOptnPoDaysBack', 'CitbOptnPoStrtDate', 'CitbOptnShAvail', 'CitbOptnShDaysBack', 'CitbOptnShStrtDate', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Citboptncode' => 0, 'Citboptnnoteavail' => 1, 'Citboptngenavail' => 2, 'Citboptnpayavail' => 3, 'Citboptncoreavail' => 4, 'Citboptncredavail' => 5, 'Citboptncstkavail' => 6, 'Citboptnpricavail' => 7, 'Citboptnstndavail' => 8, 'Citboptnsoavail' => 9, 'Citboptnquotavail' => 10, 'Citboptnopenavail' => 11, 'Citboptnpoavail' => 12, 'Citboptnpodaysback' => 13, 'Citboptnpostrtdate' => 14, 'Citboptnshavail' => 15, 'Citboptnshdaysback' => 16, 'Citboptnshstrtdate' => 17, 'Dateupdtd' => 18, 'Timeupdtd' => 19, 'Dummy' => 20, ),
        self::TYPE_CAMELNAME     => array('citboptncode' => 0, 'citboptnnoteavail' => 1, 'citboptngenavail' => 2, 'citboptnpayavail' => 3, 'citboptncoreavail' => 4, 'citboptncredavail' => 5, 'citboptncstkavail' => 6, 'citboptnpricavail' => 7, 'citboptnstndavail' => 8, 'citboptnsoavail' => 9, 'citboptnquotavail' => 10, 'citboptnopenavail' => 11, 'citboptnpoavail' => 12, 'citboptnpodaysback' => 13, 'citboptnpostrtdate' => 14, 'citboptnshavail' => 15, 'citboptnshdaysback' => 16, 'citboptnshstrtdate' => 17, 'dateupdtd' => 18, 'timeupdtd' => 19, 'dummy' => 20, ),
        self::TYPE_COLNAME       => array(OptionsCiTableMap::COL_CITBOPTNCODE => 0, OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL => 1, OptionsCiTableMap::COL_CITBOPTNGENAVAIL => 2, OptionsCiTableMap::COL_CITBOPTNPAYAVAIL => 3, OptionsCiTableMap::COL_CITBOPTNCOREAVAIL => 4, OptionsCiTableMap::COL_CITBOPTNCREDAVAIL => 5, OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL => 6, OptionsCiTableMap::COL_CITBOPTNPRICAVAIL => 7, OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL => 8, OptionsCiTableMap::COL_CITBOPTNSOAVAIL => 9, OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL => 10, OptionsCiTableMap::COL_CITBOPTNOPENAVAIL => 11, OptionsCiTableMap::COL_CITBOPTNPOAVAIL => 12, OptionsCiTableMap::COL_CITBOPTNPODAYSBACK => 13, OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE => 14, OptionsCiTableMap::COL_CITBOPTNSHAVAIL => 15, OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK => 16, OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE => 17, OptionsCiTableMap::COL_DATEUPDTD => 18, OptionsCiTableMap::COL_TIMEUPDTD => 19, OptionsCiTableMap::COL_DUMMY => 20, ),
        self::TYPE_FIELDNAME     => array('CitbOptnCode' => 0, 'CitbOptnNoteAvail' => 1, 'CitbOptnGenAvail' => 2, 'CitbOptnPayAvail' => 3, 'CitbOptnCoreAvail' => 4, 'CitbOptnCredAvail' => 5, 'CitbOptnCstkAvail' => 6, 'CitbOptnPricAvail' => 7, 'CitbOptnStndAvail' => 8, 'CitbOptnSoAvail' => 9, 'CitbOptnQuotAvail' => 10, 'CitbOptnOpenAvail' => 11, 'CitbOptnPoAvail' => 12, 'CitbOptnPoDaysBack' => 13, 'CitbOptnPoStrtDate' => 14, 'CitbOptnShAvail' => 15, 'CitbOptnShDaysBack' => 16, 'CitbOptnShStrtDate' => 17, 'DateUpdtd' => 18, 'TimeUpdtd' => 19, 'dummy' => 20, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $this->setName('ci_options');
        $this->setPhpName('OptionsCi');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\OptionsCi');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CitbOptnCode', 'Citboptncode', 'VARCHAR', true, 8, null);
        $this->addColumn('CitbOptnNoteAvail', 'Citboptnnoteavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnGenAvail', 'Citboptngenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPayAvail', 'Citboptnpayavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnCoreAvail', 'Citboptncoreavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnCredAvail', 'Citboptncredavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnCstkAvail', 'Citboptncstkavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPricAvail', 'Citboptnpricavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnStndAvail', 'Citboptnstndavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnSoAvail', 'Citboptnsoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnQuotAvail', 'Citboptnquotavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnOpenAvail', 'Citboptnopenavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPoAvail', 'Citboptnpoavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnPoDaysBack', 'Citboptnpodaysback', 'INTEGER', false, 4, null);
        $this->addColumn('CitbOptnPoStrtDate', 'Citboptnpostrtdate', 'VARCHAR', false, 8, null);
        $this->addColumn('CitbOptnShAvail', 'Citboptnshavail', 'VARCHAR', false, 1, null);
        $this->addColumn('CitbOptnShDaysBack', 'Citboptnshdaysback', 'INTEGER', false, 4, null);
        $this->addColumn('CitbOptnShStrtDate', 'Citboptnshstrtdate', 'VARCHAR', false, 8, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Citboptncode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? OptionsCiTableMap::CLASS_DEFAULT : OptionsCiTableMap::OM_CLASS;
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
     * @return array           (OptionsCi object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = OptionsCiTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OptionsCiTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OptionsCiTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OptionsCiTableMap::OM_CLASS;
            /** @var OptionsCi $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OptionsCiTableMap::addInstanceToPool($obj, $key);
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
            $key = OptionsCiTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OptionsCiTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var OptionsCi $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OptionsCiTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCODE);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNGENAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSOAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPOAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHAVAIL);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(OptionsCiTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.CitbOptnCode');
            $criteria->addSelectColumn($alias . '.CitbOptnNoteAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnGenAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPayAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnCoreAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnCredAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnCstkAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPricAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnStndAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnSoAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnQuotAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnOpenAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPoAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnPoDaysBack');
            $criteria->addSelectColumn($alias . '.CitbOptnPoStrtDate');
            $criteria->addSelectColumn($alias . '.CitbOptnShAvail');
            $criteria->addSelectColumn($alias . '.CitbOptnShDaysBack');
            $criteria->addSelectColumn($alias . '.CitbOptnShStrtDate');
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
        return Propel::getServiceContainer()->getDatabaseMap(OptionsCiTableMap::DATABASE_NAME)->getTable(OptionsCiTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(OptionsCiTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(OptionsCiTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new OptionsCiTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a OptionsCi or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or OptionsCi object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \OptionsCi) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OptionsCiTableMap::DATABASE_NAME);
            $criteria->add(OptionsCiTableMap::COL_CITBOPTNCODE, (array) $values, Criteria::IN);
        }

        $query = OptionsCiQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OptionsCiTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OptionsCiTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ci_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return OptionsCiQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a OptionsCi or Criteria object.
     *
     * @param mixed               $criteria Criteria or OptionsCi object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from OptionsCi object
        }


        // Set the correct dbName
        $query = OptionsCiQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // OptionsCiTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
OptionsCiTableMap::buildTableMap();
