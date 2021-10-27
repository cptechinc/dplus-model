<?php

namespace Map;

use \GlDistCode;
use \GlDistCodeQuery;
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
 * This class defines the structure of the 'gl_dist_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class GlDistCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.GlDistCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'gl_dist_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\GlDistCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'GlDistCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 29;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 29;

    /**
     * the column name for the GltbDistCode field
     */
    const COL_GLTBDISTCODE = 'gl_dist_code.GltbDistCode';

    /**
     * the column name for the GltbDistDesc field
     */
    const COL_GLTBDISTDESC = 'gl_dist_code.GltbDistDesc';

    /**
     * the column name for the GltbDistAcctNbr01 field
     */
    const COL_GLTBDISTACCTNBR01 = 'gl_dist_code.GltbDistAcctNbr01';

    /**
     * the column name for the GltbDistAcctPct01 field
     */
    const COL_GLTBDISTACCTPCT01 = 'gl_dist_code.GltbDistAcctPct01';

    /**
     * the column name for the GltbDistAcctNbr02 field
     */
    const COL_GLTBDISTACCTNBR02 = 'gl_dist_code.GltbDistAcctNbr02';

    /**
     * the column name for the GltbDistAcctPct02 field
     */
    const COL_GLTBDISTACCTPCT02 = 'gl_dist_code.GltbDistAcctPct02';

    /**
     * the column name for the GltbDistAcctNbr03 field
     */
    const COL_GLTBDISTACCTNBR03 = 'gl_dist_code.GltbDistAcctNbr03';

    /**
     * the column name for the GltbDistAcctPct03 field
     */
    const COL_GLTBDISTACCTPCT03 = 'gl_dist_code.GltbDistAcctPct03';

    /**
     * the column name for the GltbDistAcctNbr04 field
     */
    const COL_GLTBDISTACCTNBR04 = 'gl_dist_code.GltbDistAcctNbr04';

    /**
     * the column name for the GltbDistAcctPct04 field
     */
    const COL_GLTBDISTACCTPCT04 = 'gl_dist_code.GltbDistAcctPct04';

    /**
     * the column name for the GltbDistAcctNbr05 field
     */
    const COL_GLTBDISTACCTNBR05 = 'gl_dist_code.GltbDistAcctNbr05';

    /**
     * the column name for the GltbDistAcctPct05 field
     */
    const COL_GLTBDISTACCTPCT05 = 'gl_dist_code.GltbDistAcctPct05';

    /**
     * the column name for the GltbDistAcctNbr06 field
     */
    const COL_GLTBDISTACCTNBR06 = 'gl_dist_code.GltbDistAcctNbr06';

    /**
     * the column name for the GltbDistAcctPct06 field
     */
    const COL_GLTBDISTACCTPCT06 = 'gl_dist_code.GltbDistAcctPct06';

    /**
     * the column name for the GltbDistAcctNbr07 field
     */
    const COL_GLTBDISTACCTNBR07 = 'gl_dist_code.GltbDistAcctNbr07';

    /**
     * the column name for the GltbDistAcctPct07 field
     */
    const COL_GLTBDISTACCTPCT07 = 'gl_dist_code.GltbDistAcctPct07';

    /**
     * the column name for the GltbDistAcctNbr08 field
     */
    const COL_GLTBDISTACCTNBR08 = 'gl_dist_code.GltbDistAcctNbr08';

    /**
     * the column name for the GltbDistAcctPct08 field
     */
    const COL_GLTBDISTACCTPCT08 = 'gl_dist_code.GltbDistAcctPct08';

    /**
     * the column name for the GltbDistAcctNbr09 field
     */
    const COL_GLTBDISTACCTNBR09 = 'gl_dist_code.GltbDistAcctNbr09';

    /**
     * the column name for the GltbDistAcctPct09 field
     */
    const COL_GLTBDISTACCTPCT09 = 'gl_dist_code.GltbDistAcctPct09';

    /**
     * the column name for the GltbDistAcctNbr10 field
     */
    const COL_GLTBDISTACCTNBR10 = 'gl_dist_code.GltbDistAcctNbr10';

    /**
     * the column name for the GltbDistAcctPct10 field
     */
    const COL_GLTBDISTACCTPCT10 = 'gl_dist_code.GltbDistAcctPct10';

    /**
     * the column name for the GltbDistAcctNbr11 field
     */
    const COL_GLTBDISTACCTNBR11 = 'gl_dist_code.GltbDistAcctNbr11';

    /**
     * the column name for the GltbDistAcctPct11 field
     */
    const COL_GLTBDISTACCTPCT11 = 'gl_dist_code.GltbDistAcctPct11';

    /**
     * the column name for the GltbDistAcctNbr12 field
     */
    const COL_GLTBDISTACCTNBR12 = 'gl_dist_code.GltbDistAcctNbr12';

    /**
     * the column name for the GltbDistAcctPct12 field
     */
    const COL_GLTBDISTACCTPCT12 = 'gl_dist_code.GltbDistAcctPct12';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'gl_dist_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'gl_dist_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'gl_dist_code.dummy';

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
        self::TYPE_PHPNAME       => array('Gltbdistcode', 'Gltbdistdesc', 'Gltbdistacctnbr01', 'Gltbdistacctpct01', 'Gltbdistacctnbr02', 'Gltbdistacctpct02', 'Gltbdistacctnbr03', 'Gltbdistacctpct03', 'Gltbdistacctnbr04', 'Gltbdistacctpct04', 'Gltbdistacctnbr05', 'Gltbdistacctpct05', 'Gltbdistacctnbr06', 'Gltbdistacctpct06', 'Gltbdistacctnbr07', 'Gltbdistacctpct07', 'Gltbdistacctnbr08', 'Gltbdistacctpct08', 'Gltbdistacctnbr09', 'Gltbdistacctpct09', 'Gltbdistacctnbr10', 'Gltbdistacctpct10', 'Gltbdistacctnbr11', 'Gltbdistacctpct11', 'Gltbdistacctnbr12', 'Gltbdistacctpct12', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('gltbdistcode', 'gltbdistdesc', 'gltbdistacctnbr01', 'gltbdistacctpct01', 'gltbdistacctnbr02', 'gltbdistacctpct02', 'gltbdistacctnbr03', 'gltbdistacctpct03', 'gltbdistacctnbr04', 'gltbdistacctpct04', 'gltbdistacctnbr05', 'gltbdistacctpct05', 'gltbdistacctnbr06', 'gltbdistacctpct06', 'gltbdistacctnbr07', 'gltbdistacctpct07', 'gltbdistacctnbr08', 'gltbdistacctpct08', 'gltbdistacctnbr09', 'gltbdistacctpct09', 'gltbdistacctnbr10', 'gltbdistacctpct10', 'gltbdistacctnbr11', 'gltbdistacctpct11', 'gltbdistacctnbr12', 'gltbdistacctpct12', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(GlDistCodeTableMap::COL_GLTBDISTCODE, GlDistCodeTableMap::COL_GLTBDISTDESC, GlDistCodeTableMap::COL_GLTBDISTACCTNBR01, GlDistCodeTableMap::COL_GLTBDISTACCTPCT01, GlDistCodeTableMap::COL_GLTBDISTACCTNBR02, GlDistCodeTableMap::COL_GLTBDISTACCTPCT02, GlDistCodeTableMap::COL_GLTBDISTACCTNBR03, GlDistCodeTableMap::COL_GLTBDISTACCTPCT03, GlDistCodeTableMap::COL_GLTBDISTACCTNBR04, GlDistCodeTableMap::COL_GLTBDISTACCTPCT04, GlDistCodeTableMap::COL_GLTBDISTACCTNBR05, GlDistCodeTableMap::COL_GLTBDISTACCTPCT05, GlDistCodeTableMap::COL_GLTBDISTACCTNBR06, GlDistCodeTableMap::COL_GLTBDISTACCTPCT06, GlDistCodeTableMap::COL_GLTBDISTACCTNBR07, GlDistCodeTableMap::COL_GLTBDISTACCTPCT07, GlDistCodeTableMap::COL_GLTBDISTACCTNBR08, GlDistCodeTableMap::COL_GLTBDISTACCTPCT08, GlDistCodeTableMap::COL_GLTBDISTACCTNBR09, GlDistCodeTableMap::COL_GLTBDISTACCTPCT09, GlDistCodeTableMap::COL_GLTBDISTACCTNBR10, GlDistCodeTableMap::COL_GLTBDISTACCTPCT10, GlDistCodeTableMap::COL_GLTBDISTACCTNBR11, GlDistCodeTableMap::COL_GLTBDISTACCTPCT11, GlDistCodeTableMap::COL_GLTBDISTACCTNBR12, GlDistCodeTableMap::COL_GLTBDISTACCTPCT12, GlDistCodeTableMap::COL_DATEUPDTD, GlDistCodeTableMap::COL_TIMEUPDTD, GlDistCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('GltbDistCode', 'GltbDistDesc', 'GltbDistAcctNbr01', 'GltbDistAcctPct01', 'GltbDistAcctNbr02', 'GltbDistAcctPct02', 'GltbDistAcctNbr03', 'GltbDistAcctPct03', 'GltbDistAcctNbr04', 'GltbDistAcctPct04', 'GltbDistAcctNbr05', 'GltbDistAcctPct05', 'GltbDistAcctNbr06', 'GltbDistAcctPct06', 'GltbDistAcctNbr07', 'GltbDistAcctPct07', 'GltbDistAcctNbr08', 'GltbDistAcctPct08', 'GltbDistAcctNbr09', 'GltbDistAcctPct09', 'GltbDistAcctNbr10', 'GltbDistAcctPct10', 'GltbDistAcctNbr11', 'GltbDistAcctPct11', 'GltbDistAcctNbr12', 'GltbDistAcctPct12', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Gltbdistcode' => 0, 'Gltbdistdesc' => 1, 'Gltbdistacctnbr01' => 2, 'Gltbdistacctpct01' => 3, 'Gltbdistacctnbr02' => 4, 'Gltbdistacctpct02' => 5, 'Gltbdistacctnbr03' => 6, 'Gltbdistacctpct03' => 7, 'Gltbdistacctnbr04' => 8, 'Gltbdistacctpct04' => 9, 'Gltbdistacctnbr05' => 10, 'Gltbdistacctpct05' => 11, 'Gltbdistacctnbr06' => 12, 'Gltbdistacctpct06' => 13, 'Gltbdistacctnbr07' => 14, 'Gltbdistacctpct07' => 15, 'Gltbdistacctnbr08' => 16, 'Gltbdistacctpct08' => 17, 'Gltbdistacctnbr09' => 18, 'Gltbdistacctpct09' => 19, 'Gltbdistacctnbr10' => 20, 'Gltbdistacctpct10' => 21, 'Gltbdistacctnbr11' => 22, 'Gltbdistacctpct11' => 23, 'Gltbdistacctnbr12' => 24, 'Gltbdistacctpct12' => 25, 'Dateupdtd' => 26, 'Timeupdtd' => 27, 'Dummy' => 28, ),
        self::TYPE_CAMELNAME     => array('gltbdistcode' => 0, 'gltbdistdesc' => 1, 'gltbdistacctnbr01' => 2, 'gltbdistacctpct01' => 3, 'gltbdistacctnbr02' => 4, 'gltbdistacctpct02' => 5, 'gltbdistacctnbr03' => 6, 'gltbdistacctpct03' => 7, 'gltbdistacctnbr04' => 8, 'gltbdistacctpct04' => 9, 'gltbdistacctnbr05' => 10, 'gltbdistacctpct05' => 11, 'gltbdistacctnbr06' => 12, 'gltbdistacctpct06' => 13, 'gltbdistacctnbr07' => 14, 'gltbdistacctpct07' => 15, 'gltbdistacctnbr08' => 16, 'gltbdistacctpct08' => 17, 'gltbdistacctnbr09' => 18, 'gltbdistacctpct09' => 19, 'gltbdistacctnbr10' => 20, 'gltbdistacctpct10' => 21, 'gltbdistacctnbr11' => 22, 'gltbdistacctpct11' => 23, 'gltbdistacctnbr12' => 24, 'gltbdistacctpct12' => 25, 'dateupdtd' => 26, 'timeupdtd' => 27, 'dummy' => 28, ),
        self::TYPE_COLNAME       => array(GlDistCodeTableMap::COL_GLTBDISTCODE => 0, GlDistCodeTableMap::COL_GLTBDISTDESC => 1, GlDistCodeTableMap::COL_GLTBDISTACCTNBR01 => 2, GlDistCodeTableMap::COL_GLTBDISTACCTPCT01 => 3, GlDistCodeTableMap::COL_GLTBDISTACCTNBR02 => 4, GlDistCodeTableMap::COL_GLTBDISTACCTPCT02 => 5, GlDistCodeTableMap::COL_GLTBDISTACCTNBR03 => 6, GlDistCodeTableMap::COL_GLTBDISTACCTPCT03 => 7, GlDistCodeTableMap::COL_GLTBDISTACCTNBR04 => 8, GlDistCodeTableMap::COL_GLTBDISTACCTPCT04 => 9, GlDistCodeTableMap::COL_GLTBDISTACCTNBR05 => 10, GlDistCodeTableMap::COL_GLTBDISTACCTPCT05 => 11, GlDistCodeTableMap::COL_GLTBDISTACCTNBR06 => 12, GlDistCodeTableMap::COL_GLTBDISTACCTPCT06 => 13, GlDistCodeTableMap::COL_GLTBDISTACCTNBR07 => 14, GlDistCodeTableMap::COL_GLTBDISTACCTPCT07 => 15, GlDistCodeTableMap::COL_GLTBDISTACCTNBR08 => 16, GlDistCodeTableMap::COL_GLTBDISTACCTPCT08 => 17, GlDistCodeTableMap::COL_GLTBDISTACCTNBR09 => 18, GlDistCodeTableMap::COL_GLTBDISTACCTPCT09 => 19, GlDistCodeTableMap::COL_GLTBDISTACCTNBR10 => 20, GlDistCodeTableMap::COL_GLTBDISTACCTPCT10 => 21, GlDistCodeTableMap::COL_GLTBDISTACCTNBR11 => 22, GlDistCodeTableMap::COL_GLTBDISTACCTPCT11 => 23, GlDistCodeTableMap::COL_GLTBDISTACCTNBR12 => 24, GlDistCodeTableMap::COL_GLTBDISTACCTPCT12 => 25, GlDistCodeTableMap::COL_DATEUPDTD => 26, GlDistCodeTableMap::COL_TIMEUPDTD => 27, GlDistCodeTableMap::COL_DUMMY => 28, ),
        self::TYPE_FIELDNAME     => array('GltbDistCode' => 0, 'GltbDistDesc' => 1, 'GltbDistAcctNbr01' => 2, 'GltbDistAcctPct01' => 3, 'GltbDistAcctNbr02' => 4, 'GltbDistAcctPct02' => 5, 'GltbDistAcctNbr03' => 6, 'GltbDistAcctPct03' => 7, 'GltbDistAcctNbr04' => 8, 'GltbDistAcctPct04' => 9, 'GltbDistAcctNbr05' => 10, 'GltbDistAcctPct05' => 11, 'GltbDistAcctNbr06' => 12, 'GltbDistAcctPct06' => 13, 'GltbDistAcctNbr07' => 14, 'GltbDistAcctPct07' => 15, 'GltbDistAcctNbr08' => 16, 'GltbDistAcctPct08' => 17, 'GltbDistAcctNbr09' => 18, 'GltbDistAcctPct09' => 19, 'GltbDistAcctNbr10' => 20, 'GltbDistAcctPct10' => 21, 'GltbDistAcctNbr11' => 22, 'GltbDistAcctPct11' => 23, 'GltbDistAcctNbr12' => 24, 'GltbDistAcctPct12' => 25, 'DateUpdtd' => 26, 'TimeUpdtd' => 27, 'dummy' => 28, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $this->setName('gl_dist_code');
        $this->setPhpName('GlDistCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\GlDistCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('GltbDistCode', 'Gltbdistcode', 'VARCHAR', true, 10, '');
        $this->addColumn('GltbDistDesc', 'Gltbdistdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('GltbDistAcctNbr01', 'Gltbdistacctnbr01', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct01', 'Gltbdistacctpct01', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr02', 'Gltbdistacctnbr02', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct02', 'Gltbdistacctpct02', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr03', 'Gltbdistacctnbr03', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct03', 'Gltbdistacctpct03', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr04', 'Gltbdistacctnbr04', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct04', 'Gltbdistacctpct04', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr05', 'Gltbdistacctnbr05', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct05', 'Gltbdistacctpct05', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr06', 'Gltbdistacctnbr06', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct06', 'Gltbdistacctpct06', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr07', 'Gltbdistacctnbr07', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct07', 'Gltbdistacctpct07', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr08', 'Gltbdistacctnbr08', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct08', 'Gltbdistacctpct08', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr09', 'Gltbdistacctnbr09', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct09', 'Gltbdistacctpct09', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr10', 'Gltbdistacctnbr10', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct10', 'Gltbdistacctpct10', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr11', 'Gltbdistacctnbr11', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct11', 'Gltbdistacctpct11', 'DECIMAL', false, 20, null);
        $this->addColumn('GltbDistAcctNbr12', 'Gltbdistacctnbr12', 'VARCHAR', false, 9, null);
        $this->addColumn('GltbDistAcctPct12', 'Gltbdistacctpct12', 'DECIMAL', false, 20, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Gltbdistcode', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? GlDistCodeTableMap::CLASS_DEFAULT : GlDistCodeTableMap::OM_CLASS;
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
     * @return array           (GlDistCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = GlDistCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = GlDistCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + GlDistCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GlDistCodeTableMap::OM_CLASS;
            /** @var GlDistCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            GlDistCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = GlDistCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = GlDistCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var GlDistCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GlDistCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTCODE);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTDESC);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR01);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR02);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR03);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR04);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR05);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR06);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR07);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR08);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR09);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR10);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR11);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTNBR12);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(GlDistCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.GltbDistCode');
            $criteria->addSelectColumn($alias . '.GltbDistDesc');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr01');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct01');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr02');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct02');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr03');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct03');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr04');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct04');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr05');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct05');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr06');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct06');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr07');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct07');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr08');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct08');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr09');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct09');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr10');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct10');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr11');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct11');
            $criteria->addSelectColumn($alias . '.GltbDistAcctNbr12');
            $criteria->addSelectColumn($alias . '.GltbDistAcctPct12');
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
        return Propel::getServiceContainer()->getDatabaseMap(GlDistCodeTableMap::DATABASE_NAME)->getTable(GlDistCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(GlDistCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(GlDistCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new GlDistCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a GlDistCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or GlDistCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \GlDistCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GlDistCodeTableMap::DATABASE_NAME);
            $criteria->add(GlDistCodeTableMap::COL_GLTBDISTCODE, (array) $values, Criteria::IN);
        }

        $query = GlDistCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            GlDistCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                GlDistCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the gl_dist_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return GlDistCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a GlDistCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or GlDistCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from GlDistCode object
        }


        // Set the correct dbName
        $query = GlDistCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // GlDistCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
GlDistCodeTableMap::buildTableMap();
