<?php

namespace Map;

use \GlDates;
use \GlDatesQuery;
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
 * This class defines the structure of the 'gl_dates' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class GlDatesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.GlDatesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'gl_dates';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\GlDates';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'GlDates';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 42;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 42;

    /**
     * the column name for the GldKey field
     */
    const COL_GLDKEY = 'gl_dates.GldKey';

    /**
     * the column name for the GldFrom1 field
     */
    const COL_GLDFROM1 = 'gl_dates.GldFrom1';

    /**
     * the column name for the GldThru1 field
     */
    const COL_GLDTHRU1 = 'gl_dates.GldThru1';

    /**
     * the column name for the GldFrom2 field
     */
    const COL_GLDFROM2 = 'gl_dates.GldFrom2';

    /**
     * the column name for the GldThru2 field
     */
    const COL_GLDTHRU2 = 'gl_dates.GldThru2';

    /**
     * the column name for the GldFrom3 field
     */
    const COL_GLDFROM3 = 'gl_dates.GldFrom3';

    /**
     * the column name for the GldThru3 field
     */
    const COL_GLDTHRU3 = 'gl_dates.GldThru3';

    /**
     * the column name for the GldFrom4 field
     */
    const COL_GLDFROM4 = 'gl_dates.GldFrom4';

    /**
     * the column name for the GldThru4 field
     */
    const COL_GLDTHRU4 = 'gl_dates.GldThru4';

    /**
     * the column name for the GldFrom5 field
     */
    const COL_GLDFROM5 = 'gl_dates.GldFrom5';

    /**
     * the column name for the GldThru5 field
     */
    const COL_GLDTHRU5 = 'gl_dates.GldThru5';

    /**
     * the column name for the GldFrom6 field
     */
    const COL_GLDFROM6 = 'gl_dates.GldFrom6';

    /**
     * the column name for the GldThru6 field
     */
    const COL_GLDTHRU6 = 'gl_dates.GldThru6';

    /**
     * the column name for the GldFrom7 field
     */
    const COL_GLDFROM7 = 'gl_dates.GldFrom7';

    /**
     * the column name for the GldThru7 field
     */
    const COL_GLDTHRU7 = 'gl_dates.GldThru7';

    /**
     * the column name for the GldFrom8 field
     */
    const COL_GLDFROM8 = 'gl_dates.GldFrom8';

    /**
     * the column name for the GldThru8 field
     */
    const COL_GLDTHRU8 = 'gl_dates.GldThru8';

    /**
     * the column name for the GldFrom9 field
     */
    const COL_GLDFROM9 = 'gl_dates.GldFrom9';

    /**
     * the column name for the GldThru9 field
     */
    const COL_GLDTHRU9 = 'gl_dates.GldThru9';

    /**
     * the column name for the GldFrom10 field
     */
    const COL_GLDFROM10 = 'gl_dates.GldFrom10';

    /**
     * the column name for the GldThru10 field
     */
    const COL_GLDTHRU10 = 'gl_dates.GldThru10';

    /**
     * the column name for the GldFrom11 field
     */
    const COL_GLDFROM11 = 'gl_dates.GldFrom11';

    /**
     * the column name for the GldThru11 field
     */
    const COL_GLDTHRU11 = 'gl_dates.GldThru11';

    /**
     * the column name for the GldFrom12 field
     */
    const COL_GLDFROM12 = 'gl_dates.GldFrom12';

    /**
     * the column name for the GldThru12 field
     */
    const COL_GLDTHRU12 = 'gl_dates.GldThru12';

    /**
     * the column name for the GldFrom13 field
     */
    const COL_GLDFROM13 = 'gl_dates.GldFrom13';

    /**
     * the column name for the GldThru13 field
     */
    const COL_GLDTHRU13 = 'gl_dates.GldThru13';

    /**
     * the column name for the GldFrom14 field
     */
    const COL_GLDFROM14 = 'gl_dates.GldFrom14';

    /**
     * the column name for the GldThru14 field
     */
    const COL_GLDTHRU14 = 'gl_dates.GldThru14';

    /**
     * the column name for the GldFrom15 field
     */
    const COL_GLDFROM15 = 'gl_dates.GldFrom15';

    /**
     * the column name for the GldThru15 field
     */
    const COL_GLDTHRU15 = 'gl_dates.GldThru15';

    /**
     * the column name for the GldFrom16 field
     */
    const COL_GLDFROM16 = 'gl_dates.GldFrom16';

    /**
     * the column name for the GldThru16 field
     */
    const COL_GLDTHRU16 = 'gl_dates.GldThru16';

    /**
     * the column name for the GldFrom17 field
     */
    const COL_GLDFROM17 = 'gl_dates.GldFrom17';

    /**
     * the column name for the GldThru17 field
     */
    const COL_GLDTHRU17 = 'gl_dates.GldThru17';

    /**
     * the column name for the GldFrom18 field
     */
    const COL_GLDFROM18 = 'gl_dates.GldFrom18';

    /**
     * the column name for the GldThru18 field
     */
    const COL_GLDTHRU18 = 'gl_dates.GldThru18';

    /**
     * the column name for the GldFrom19 field
     */
    const COL_GLDFROM19 = 'gl_dates.GldFrom19';

    /**
     * the column name for the GldThru19 field
     */
    const COL_GLDTHRU19 = 'gl_dates.GldThru19';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'gl_dates.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'gl_dates.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'gl_dates.dummy';

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
        self::TYPE_PHPNAME       => array('Gldkey', 'Gldfrom1', 'Gldthru1', 'Gldfrom2', 'Gldthru2', 'Gldfrom3', 'Gldthru3', 'Gldfrom4', 'Gldthru4', 'Gldfrom5', 'Gldthru5', 'Gldfrom6', 'Gldthru6', 'Gldfrom7', 'Gldthru7', 'Gldfrom8', 'Gldthru8', 'Gldfrom9', 'Gldthru9', 'Gldfrom10', 'Gldthru10', 'Gldfrom11', 'Gldthru11', 'Gldfrom12', 'Gldthru12', 'Gldfrom13', 'Gldthru13', 'Gldfrom14', 'Gldthru14', 'Gldfrom15', 'Gldthru15', 'Gldfrom16', 'Gldthru16', 'Gldfrom17', 'Gldthru17', 'Gldfrom18', 'Gldthru18', 'Gldfrom19', 'Gldthru19', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('gldkey', 'gldfrom1', 'gldthru1', 'gldfrom2', 'gldthru2', 'gldfrom3', 'gldthru3', 'gldfrom4', 'gldthru4', 'gldfrom5', 'gldthru5', 'gldfrom6', 'gldthru6', 'gldfrom7', 'gldthru7', 'gldfrom8', 'gldthru8', 'gldfrom9', 'gldthru9', 'gldfrom10', 'gldthru10', 'gldfrom11', 'gldthru11', 'gldfrom12', 'gldthru12', 'gldfrom13', 'gldthru13', 'gldfrom14', 'gldthru14', 'gldfrom15', 'gldthru15', 'gldfrom16', 'gldthru16', 'gldfrom17', 'gldthru17', 'gldfrom18', 'gldthru18', 'gldfrom19', 'gldthru19', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(GlDatesTableMap::COL_GLDKEY, GlDatesTableMap::COL_GLDFROM1, GlDatesTableMap::COL_GLDTHRU1, GlDatesTableMap::COL_GLDFROM2, GlDatesTableMap::COL_GLDTHRU2, GlDatesTableMap::COL_GLDFROM3, GlDatesTableMap::COL_GLDTHRU3, GlDatesTableMap::COL_GLDFROM4, GlDatesTableMap::COL_GLDTHRU4, GlDatesTableMap::COL_GLDFROM5, GlDatesTableMap::COL_GLDTHRU5, GlDatesTableMap::COL_GLDFROM6, GlDatesTableMap::COL_GLDTHRU6, GlDatesTableMap::COL_GLDFROM7, GlDatesTableMap::COL_GLDTHRU7, GlDatesTableMap::COL_GLDFROM8, GlDatesTableMap::COL_GLDTHRU8, GlDatesTableMap::COL_GLDFROM9, GlDatesTableMap::COL_GLDTHRU9, GlDatesTableMap::COL_GLDFROM10, GlDatesTableMap::COL_GLDTHRU10, GlDatesTableMap::COL_GLDFROM11, GlDatesTableMap::COL_GLDTHRU11, GlDatesTableMap::COL_GLDFROM12, GlDatesTableMap::COL_GLDTHRU12, GlDatesTableMap::COL_GLDFROM13, GlDatesTableMap::COL_GLDTHRU13, GlDatesTableMap::COL_GLDFROM14, GlDatesTableMap::COL_GLDTHRU14, GlDatesTableMap::COL_GLDFROM15, GlDatesTableMap::COL_GLDTHRU15, GlDatesTableMap::COL_GLDFROM16, GlDatesTableMap::COL_GLDTHRU16, GlDatesTableMap::COL_GLDFROM17, GlDatesTableMap::COL_GLDTHRU17, GlDatesTableMap::COL_GLDFROM18, GlDatesTableMap::COL_GLDTHRU18, GlDatesTableMap::COL_GLDFROM19, GlDatesTableMap::COL_GLDTHRU19, GlDatesTableMap::COL_DATEUPDTD, GlDatesTableMap::COL_TIMEUPDTD, GlDatesTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('GldKey', 'GldFrom1', 'GldThru1', 'GldFrom2', 'GldThru2', 'GldFrom3', 'GldThru3', 'GldFrom4', 'GldThru4', 'GldFrom5', 'GldThru5', 'GldFrom6', 'GldThru6', 'GldFrom7', 'GldThru7', 'GldFrom8', 'GldThru8', 'GldFrom9', 'GldThru9', 'GldFrom10', 'GldThru10', 'GldFrom11', 'GldThru11', 'GldFrom12', 'GldThru12', 'GldFrom13', 'GldThru13', 'GldFrom14', 'GldThru14', 'GldFrom15', 'GldThru15', 'GldFrom16', 'GldThru16', 'GldFrom17', 'GldThru17', 'GldFrom18', 'GldThru18', 'GldFrom19', 'GldThru19', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Gldkey' => 0, 'Gldfrom1' => 1, 'Gldthru1' => 2, 'Gldfrom2' => 3, 'Gldthru2' => 4, 'Gldfrom3' => 5, 'Gldthru3' => 6, 'Gldfrom4' => 7, 'Gldthru4' => 8, 'Gldfrom5' => 9, 'Gldthru5' => 10, 'Gldfrom6' => 11, 'Gldthru6' => 12, 'Gldfrom7' => 13, 'Gldthru7' => 14, 'Gldfrom8' => 15, 'Gldthru8' => 16, 'Gldfrom9' => 17, 'Gldthru9' => 18, 'Gldfrom10' => 19, 'Gldthru10' => 20, 'Gldfrom11' => 21, 'Gldthru11' => 22, 'Gldfrom12' => 23, 'Gldthru12' => 24, 'Gldfrom13' => 25, 'Gldthru13' => 26, 'Gldfrom14' => 27, 'Gldthru14' => 28, 'Gldfrom15' => 29, 'Gldthru15' => 30, 'Gldfrom16' => 31, 'Gldthru16' => 32, 'Gldfrom17' => 33, 'Gldthru17' => 34, 'Gldfrom18' => 35, 'Gldthru18' => 36, 'Gldfrom19' => 37, 'Gldthru19' => 38, 'Dateupdtd' => 39, 'Timeupdtd' => 40, 'Dummy' => 41, ),
        self::TYPE_CAMELNAME     => array('gldkey' => 0, 'gldfrom1' => 1, 'gldthru1' => 2, 'gldfrom2' => 3, 'gldthru2' => 4, 'gldfrom3' => 5, 'gldthru3' => 6, 'gldfrom4' => 7, 'gldthru4' => 8, 'gldfrom5' => 9, 'gldthru5' => 10, 'gldfrom6' => 11, 'gldthru6' => 12, 'gldfrom7' => 13, 'gldthru7' => 14, 'gldfrom8' => 15, 'gldthru8' => 16, 'gldfrom9' => 17, 'gldthru9' => 18, 'gldfrom10' => 19, 'gldthru10' => 20, 'gldfrom11' => 21, 'gldthru11' => 22, 'gldfrom12' => 23, 'gldthru12' => 24, 'gldfrom13' => 25, 'gldthru13' => 26, 'gldfrom14' => 27, 'gldthru14' => 28, 'gldfrom15' => 29, 'gldthru15' => 30, 'gldfrom16' => 31, 'gldthru16' => 32, 'gldfrom17' => 33, 'gldthru17' => 34, 'gldfrom18' => 35, 'gldthru18' => 36, 'gldfrom19' => 37, 'gldthru19' => 38, 'dateupdtd' => 39, 'timeupdtd' => 40, 'dummy' => 41, ),
        self::TYPE_COLNAME       => array(GlDatesTableMap::COL_GLDKEY => 0, GlDatesTableMap::COL_GLDFROM1 => 1, GlDatesTableMap::COL_GLDTHRU1 => 2, GlDatesTableMap::COL_GLDFROM2 => 3, GlDatesTableMap::COL_GLDTHRU2 => 4, GlDatesTableMap::COL_GLDFROM3 => 5, GlDatesTableMap::COL_GLDTHRU3 => 6, GlDatesTableMap::COL_GLDFROM4 => 7, GlDatesTableMap::COL_GLDTHRU4 => 8, GlDatesTableMap::COL_GLDFROM5 => 9, GlDatesTableMap::COL_GLDTHRU5 => 10, GlDatesTableMap::COL_GLDFROM6 => 11, GlDatesTableMap::COL_GLDTHRU6 => 12, GlDatesTableMap::COL_GLDFROM7 => 13, GlDatesTableMap::COL_GLDTHRU7 => 14, GlDatesTableMap::COL_GLDFROM8 => 15, GlDatesTableMap::COL_GLDTHRU8 => 16, GlDatesTableMap::COL_GLDFROM9 => 17, GlDatesTableMap::COL_GLDTHRU9 => 18, GlDatesTableMap::COL_GLDFROM10 => 19, GlDatesTableMap::COL_GLDTHRU10 => 20, GlDatesTableMap::COL_GLDFROM11 => 21, GlDatesTableMap::COL_GLDTHRU11 => 22, GlDatesTableMap::COL_GLDFROM12 => 23, GlDatesTableMap::COL_GLDTHRU12 => 24, GlDatesTableMap::COL_GLDFROM13 => 25, GlDatesTableMap::COL_GLDTHRU13 => 26, GlDatesTableMap::COL_GLDFROM14 => 27, GlDatesTableMap::COL_GLDTHRU14 => 28, GlDatesTableMap::COL_GLDFROM15 => 29, GlDatesTableMap::COL_GLDTHRU15 => 30, GlDatesTableMap::COL_GLDFROM16 => 31, GlDatesTableMap::COL_GLDTHRU16 => 32, GlDatesTableMap::COL_GLDFROM17 => 33, GlDatesTableMap::COL_GLDTHRU17 => 34, GlDatesTableMap::COL_GLDFROM18 => 35, GlDatesTableMap::COL_GLDTHRU18 => 36, GlDatesTableMap::COL_GLDFROM19 => 37, GlDatesTableMap::COL_GLDTHRU19 => 38, GlDatesTableMap::COL_DATEUPDTD => 39, GlDatesTableMap::COL_TIMEUPDTD => 40, GlDatesTableMap::COL_DUMMY => 41, ),
        self::TYPE_FIELDNAME     => array('GldKey' => 0, 'GldFrom1' => 1, 'GldThru1' => 2, 'GldFrom2' => 3, 'GldThru2' => 4, 'GldFrom3' => 5, 'GldThru3' => 6, 'GldFrom4' => 7, 'GldThru4' => 8, 'GldFrom5' => 9, 'GldThru5' => 10, 'GldFrom6' => 11, 'GldThru6' => 12, 'GldFrom7' => 13, 'GldThru7' => 14, 'GldFrom8' => 15, 'GldThru8' => 16, 'GldFrom9' => 17, 'GldThru9' => 18, 'GldFrom10' => 19, 'GldThru10' => 20, 'GldFrom11' => 21, 'GldThru11' => 22, 'GldFrom12' => 23, 'GldThru12' => 24, 'GldFrom13' => 25, 'GldThru13' => 26, 'GldFrom14' => 27, 'GldThru14' => 28, 'GldFrom15' => 29, 'GldThru15' => 30, 'GldFrom16' => 31, 'GldThru16' => 32, 'GldFrom17' => 33, 'GldThru17' => 34, 'GldFrom18' => 35, 'GldThru18' => 36, 'GldFrom19' => 37, 'GldThru19' => 38, 'DateUpdtd' => 39, 'TimeUpdtd' => 40, 'dummy' => 41, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
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
        $this->setName('gl_dates');
        $this->setPhpName('GlDates');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\GlDates');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('GldKey', 'Gldkey', 'VARCHAR', true, 1, '');
        $this->addColumn('GldFrom1', 'Gldfrom1', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru1', 'Gldthru1', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom2', 'Gldfrom2', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru2', 'Gldthru2', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom3', 'Gldfrom3', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru3', 'Gldthru3', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom4', 'Gldfrom4', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru4', 'Gldthru4', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom5', 'Gldfrom5', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru5', 'Gldthru5', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom6', 'Gldfrom6', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru6', 'Gldthru6', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom7', 'Gldfrom7', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru7', 'Gldthru7', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom8', 'Gldfrom8', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru8', 'Gldthru8', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom9', 'Gldfrom9', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru9', 'Gldthru9', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom10', 'Gldfrom10', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru10', 'Gldthru10', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom11', 'Gldfrom11', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru11', 'Gldthru11', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom12', 'Gldfrom12', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru12', 'Gldthru12', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom13', 'Gldfrom13', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru13', 'Gldthru13', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom14', 'Gldfrom14', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru14', 'Gldthru14', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom15', 'Gldfrom15', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru15', 'Gldthru15', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom16', 'Gldfrom16', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru16', 'Gldthru16', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom17', 'Gldfrom17', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru17', 'Gldthru17', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom18', 'Gldfrom18', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru18', 'Gldthru18', 'VARCHAR', true, 8, '');
        $this->addColumn('GldFrom19', 'Gldfrom19', 'VARCHAR', true, 8, '');
        $this->addColumn('GldThru19', 'Gldthru19', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', true, 1, 'P');
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Gldkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? GlDatesTableMap::CLASS_DEFAULT : GlDatesTableMap::OM_CLASS;
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
     * @return array           (GlDates object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = GlDatesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = GlDatesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + GlDatesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GlDatesTableMap::OM_CLASS;
            /** @var GlDates $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            GlDatesTableMap::addInstanceToPool($obj, $key);
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
            $key = GlDatesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = GlDatesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var GlDates $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GlDatesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDKEY);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM1);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU1);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM2);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU2);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM3);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU3);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM4);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU4);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM5);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU5);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM6);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU6);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM7);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU7);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM8);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU8);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM9);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU9);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM10);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU10);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM11);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU11);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM12);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU12);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM13);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU13);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM14);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU14);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM15);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU15);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM16);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU16);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM17);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU17);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM18);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU18);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDFROM19);
            $criteria->addSelectColumn(GlDatesTableMap::COL_GLDTHRU19);
            $criteria->addSelectColumn(GlDatesTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(GlDatesTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(GlDatesTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.GldKey');
            $criteria->addSelectColumn($alias . '.GldFrom1');
            $criteria->addSelectColumn($alias . '.GldThru1');
            $criteria->addSelectColumn($alias . '.GldFrom2');
            $criteria->addSelectColumn($alias . '.GldThru2');
            $criteria->addSelectColumn($alias . '.GldFrom3');
            $criteria->addSelectColumn($alias . '.GldThru3');
            $criteria->addSelectColumn($alias . '.GldFrom4');
            $criteria->addSelectColumn($alias . '.GldThru4');
            $criteria->addSelectColumn($alias . '.GldFrom5');
            $criteria->addSelectColumn($alias . '.GldThru5');
            $criteria->addSelectColumn($alias . '.GldFrom6');
            $criteria->addSelectColumn($alias . '.GldThru6');
            $criteria->addSelectColumn($alias . '.GldFrom7');
            $criteria->addSelectColumn($alias . '.GldThru7');
            $criteria->addSelectColumn($alias . '.GldFrom8');
            $criteria->addSelectColumn($alias . '.GldThru8');
            $criteria->addSelectColumn($alias . '.GldFrom9');
            $criteria->addSelectColumn($alias . '.GldThru9');
            $criteria->addSelectColumn($alias . '.GldFrom10');
            $criteria->addSelectColumn($alias . '.GldThru10');
            $criteria->addSelectColumn($alias . '.GldFrom11');
            $criteria->addSelectColumn($alias . '.GldThru11');
            $criteria->addSelectColumn($alias . '.GldFrom12');
            $criteria->addSelectColumn($alias . '.GldThru12');
            $criteria->addSelectColumn($alias . '.GldFrom13');
            $criteria->addSelectColumn($alias . '.GldThru13');
            $criteria->addSelectColumn($alias . '.GldFrom14');
            $criteria->addSelectColumn($alias . '.GldThru14');
            $criteria->addSelectColumn($alias . '.GldFrom15');
            $criteria->addSelectColumn($alias . '.GldThru15');
            $criteria->addSelectColumn($alias . '.GldFrom16');
            $criteria->addSelectColumn($alias . '.GldThru16');
            $criteria->addSelectColumn($alias . '.GldFrom17');
            $criteria->addSelectColumn($alias . '.GldThru17');
            $criteria->addSelectColumn($alias . '.GldFrom18');
            $criteria->addSelectColumn($alias . '.GldThru18');
            $criteria->addSelectColumn($alias . '.GldFrom19');
            $criteria->addSelectColumn($alias . '.GldThru19');
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
        return Propel::getServiceContainer()->getDatabaseMap(GlDatesTableMap::DATABASE_NAME)->getTable(GlDatesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(GlDatesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(GlDatesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new GlDatesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a GlDates or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or GlDates object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \GlDates) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GlDatesTableMap::DATABASE_NAME);
            $criteria->add(GlDatesTableMap::COL_GLDKEY, (array) $values, Criteria::IN);
        }

        $query = GlDatesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            GlDatesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                GlDatesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the gl_dates table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return GlDatesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a GlDates or Criteria object.
     *
     * @param mixed               $criteria Criteria or GlDates object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from GlDates object
        }


        // Set the correct dbName
        $query = GlDatesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // GlDatesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
GlDatesTableMap::buildTableMap();
