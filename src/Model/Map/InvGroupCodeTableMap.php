<?php

namespace Map;

use \InvGroupCode;
use \InvGroupCodeQuery;
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
 * This class defines the structure of the 'inv_grup_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvGroupCodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvGroupCodeTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'inv_grup_code';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvGroupCode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvGroupCode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 28;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 28;

    /**
     * the column name for the IntbGrup field
     */
    const COL_INTBGRUP = 'inv_grup_code.IntbGrup';

    /**
     * the column name for the IntbGrupDesc field
     */
    const COL_INTBGRUPDESC = 'inv_grup_code.IntbGrupDesc';

    /**
     * the column name for the IntbGrupSaleAcct field
     */
    const COL_INTBGRUPSALEACCT = 'inv_grup_code.IntbGrupSaleAcct';

    /**
     * the column name for the IntbGrupIvtyAcct field
     */
    const COL_INTBGRUPIVTYACCT = 'inv_grup_code.IntbGrupIvtyAcct';

    /**
     * the column name for the IntbGrupCogsAcct field
     */
    const COL_INTBGRUPCOGSACCT = 'inv_grup_code.IntbGrupCogsAcct';

    /**
     * the column name for the IntbGrupCredAcct field
     */
    const COL_INTBGRUPCREDACCT = 'inv_grup_code.IntbGrupCredAcct';

    /**
     * the column name for the IntbGrupWebGrup field
     */
    const COL_INTBGRUPWEBGRUP = 'inv_grup_code.IntbGrupWebGrup';

    /**
     * the column name for the IntbGrupDropAcct field
     */
    const COL_INTBGRUPDROPACCT = 'inv_grup_code.IntbGrupDropAcct';

    /**
     * the column name for the IntbGrupSaleProg field
     */
    const COL_INTBGRUPSALEPROG = 'inv_grup_code.IntbGrupSaleProg';

    /**
     * the column name for the IntbGrupCostPct field
     */
    const COL_INTBGRUPCOSTPCT = 'inv_grup_code.IntbGrupCostPct';

    /**
     * the column name for the IntbGrupCoop field
     */
    const COL_INTBGRUPCOOP = 'inv_grup_code.IntbGrupCoop';

    /**
     * the column name for the IntbGrupUseSurchg field
     */
    const COL_INTBGRUPUSESURCHG = 'inv_grup_code.IntbGrupUseSurchg';

    /**
     * the column name for the IntbGrupSurchgDollOrPct field
     */
    const COL_INTBGRUPSURCHGDOLLORPCT = 'inv_grup_code.IntbGrupSurchgDollOrPct';

    /**
     * the column name for the IntbGrupSurchgDollAmt field
     */
    const COL_INTBGRUPSURCHGDOLLAMT = 'inv_grup_code.IntbGrupSurchgDollAmt';

    /**
     * the column name for the IntbGrupSurchgPct field
     */
    const COL_INTBGRUPSURCHGPCT = 'inv_grup_code.IntbGrupSurchgPct';

    /**
     * the column name for the IntbGrupFrtGrup field
     */
    const COL_INTBGRUPFRTGRUP = 'inv_grup_code.IntbGrupFrtGrup';

    /**
     * the column name for the IntbGrupProdLine field
     */
    const COL_INTBGRUPPRODLINE = 'inv_grup_code.IntbGrupProdLine';

    /**
     * the column name for the IntbGrupLmEcommDesc field
     */
    const COL_INTBGRUPLMECOMMDESC = 'inv_grup_code.IntbGrupLmEcommDesc';

    /**
     * the column name for the IntbGrupLmMaxQtyLrg field
     */
    const COL_INTBGRUPLMMAXQTYLRG = 'inv_grup_code.IntbGrupLmMaxQtyLrg';

    /**
     * the column name for the IntbGrupLmMaxQtyMed field
     */
    const COL_INTBGRUPLMMAXQTYMED = 'inv_grup_code.IntbGrupLmMaxQtyMed';

    /**
     * the column name for the IntbGrupLmMaxQtySml field
     */
    const COL_INTBGRUPLMMAXQTYSML = 'inv_grup_code.IntbGrupLmMaxQtySml';

    /**
     * the column name for the IntbGrupAcDisc1 field
     */
    const COL_INTBGRUPACDISC1 = 'inv_grup_code.IntbGrupAcDisc1';

    /**
     * the column name for the IntbGrupAcDisc2 field
     */
    const COL_INTBGRUPACDISC2 = 'inv_grup_code.IntbGrupAcDisc2';

    /**
     * the column name for the IntbGrupAcDisc3 field
     */
    const COL_INTBGRUPACDISC3 = 'inv_grup_code.IntbGrupAcDisc3';

    /**
     * the column name for the IntbGrupAcDisc4 field
     */
    const COL_INTBGRUPACDISC4 = 'inv_grup_code.IntbGrupAcDisc4';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'inv_grup_code.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'inv_grup_code.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'inv_grup_code.dummy';

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
        self::TYPE_PHPNAME       => array('Intbgrup', 'Intbgrupdesc', 'Intbgrupsaleacct', 'Intbgrupivtyacct', 'Intbgrupcogsacct', 'Intbgrupcredacct', 'Intbgrupwebgrup', 'Intbgrupdropacct', 'Intbgrupsaleprog', 'Intbgrupcostpct', 'Intbgrupcoop', 'Intbgrupusesurchg', 'Intbgrupsurchgdollorpct', 'Intbgrupsurchgdollamt', 'Intbgrupsurchgpct', 'Intbgrupfrtgrup', 'Intbgrupprodline', 'Intbgruplmecommdesc', 'Intbgruplmmaxqtylrg', 'Intbgruplmmaxqtymed', 'Intbgruplmmaxqtysml', 'Intbgrupacdisc1', 'Intbgrupacdisc2', 'Intbgrupacdisc3', 'Intbgrupacdisc4', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbgrup', 'intbgrupdesc', 'intbgrupsaleacct', 'intbgrupivtyacct', 'intbgrupcogsacct', 'intbgrupcredacct', 'intbgrupwebgrup', 'intbgrupdropacct', 'intbgrupsaleprog', 'intbgrupcostpct', 'intbgrupcoop', 'intbgrupusesurchg', 'intbgrupsurchgdollorpct', 'intbgrupsurchgdollamt', 'intbgrupsurchgpct', 'intbgrupfrtgrup', 'intbgrupprodline', 'intbgruplmecommdesc', 'intbgruplmmaxqtylrg', 'intbgruplmmaxqtymed', 'intbgruplmmaxqtysml', 'intbgrupacdisc1', 'intbgrupacdisc2', 'intbgrupacdisc3', 'intbgrupacdisc4', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvGroupCodeTableMap::COL_INTBGRUP, InvGroupCodeTableMap::COL_INTBGRUPDESC, InvGroupCodeTableMap::COL_INTBGRUPSALEACCT, InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT, InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT, InvGroupCodeTableMap::COL_INTBGRUPCREDACCT, InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP, InvGroupCodeTableMap::COL_INTBGRUPDROPACCT, InvGroupCodeTableMap::COL_INTBGRUPSALEPROG, InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT, InvGroupCodeTableMap::COL_INTBGRUPCOOP, InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG, InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT, InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP, InvGroupCodeTableMap::COL_INTBGRUPPRODLINE, InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC, InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, InvGroupCodeTableMap::COL_INTBGRUPACDISC1, InvGroupCodeTableMap::COL_INTBGRUPACDISC2, InvGroupCodeTableMap::COL_INTBGRUPACDISC3, InvGroupCodeTableMap::COL_INTBGRUPACDISC4, InvGroupCodeTableMap::COL_DATEUPDTD, InvGroupCodeTableMap::COL_TIMEUPDTD, InvGroupCodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbGrup', 'IntbGrupDesc', 'IntbGrupSaleAcct', 'IntbGrupIvtyAcct', 'IntbGrupCogsAcct', 'IntbGrupCredAcct', 'IntbGrupWebGrup', 'IntbGrupDropAcct', 'IntbGrupSaleProg', 'IntbGrupCostPct', 'IntbGrupCoop', 'IntbGrupUseSurchg', 'IntbGrupSurchgDollOrPct', 'IntbGrupSurchgDollAmt', 'IntbGrupSurchgPct', 'IntbGrupFrtGrup', 'IntbGrupProdLine', 'IntbGrupLmEcommDesc', 'IntbGrupLmMaxQtyLrg', 'IntbGrupLmMaxQtyMed', 'IntbGrupLmMaxQtySml', 'IntbGrupAcDisc1', 'IntbGrupAcDisc2', 'IntbGrupAcDisc3', 'IntbGrupAcDisc4', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbgrup' => 0, 'Intbgrupdesc' => 1, 'Intbgrupsaleacct' => 2, 'Intbgrupivtyacct' => 3, 'Intbgrupcogsacct' => 4, 'Intbgrupcredacct' => 5, 'Intbgrupwebgrup' => 6, 'Intbgrupdropacct' => 7, 'Intbgrupsaleprog' => 8, 'Intbgrupcostpct' => 9, 'Intbgrupcoop' => 10, 'Intbgrupusesurchg' => 11, 'Intbgrupsurchgdollorpct' => 12, 'Intbgrupsurchgdollamt' => 13, 'Intbgrupsurchgpct' => 14, 'Intbgrupfrtgrup' => 15, 'Intbgrupprodline' => 16, 'Intbgruplmecommdesc' => 17, 'Intbgruplmmaxqtylrg' => 18, 'Intbgruplmmaxqtymed' => 19, 'Intbgruplmmaxqtysml' => 20, 'Intbgrupacdisc1' => 21, 'Intbgrupacdisc2' => 22, 'Intbgrupacdisc3' => 23, 'Intbgrupacdisc4' => 24, 'Dateupdtd' => 25, 'Timeupdtd' => 26, 'Dummy' => 27, ),
        self::TYPE_CAMELNAME     => array('intbgrup' => 0, 'intbgrupdesc' => 1, 'intbgrupsaleacct' => 2, 'intbgrupivtyacct' => 3, 'intbgrupcogsacct' => 4, 'intbgrupcredacct' => 5, 'intbgrupwebgrup' => 6, 'intbgrupdropacct' => 7, 'intbgrupsaleprog' => 8, 'intbgrupcostpct' => 9, 'intbgrupcoop' => 10, 'intbgrupusesurchg' => 11, 'intbgrupsurchgdollorpct' => 12, 'intbgrupsurchgdollamt' => 13, 'intbgrupsurchgpct' => 14, 'intbgrupfrtgrup' => 15, 'intbgrupprodline' => 16, 'intbgruplmecommdesc' => 17, 'intbgruplmmaxqtylrg' => 18, 'intbgruplmmaxqtymed' => 19, 'intbgruplmmaxqtysml' => 20, 'intbgrupacdisc1' => 21, 'intbgrupacdisc2' => 22, 'intbgrupacdisc3' => 23, 'intbgrupacdisc4' => 24, 'dateupdtd' => 25, 'timeupdtd' => 26, 'dummy' => 27, ),
        self::TYPE_COLNAME       => array(InvGroupCodeTableMap::COL_INTBGRUP => 0, InvGroupCodeTableMap::COL_INTBGRUPDESC => 1, InvGroupCodeTableMap::COL_INTBGRUPSALEACCT => 2, InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT => 3, InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT => 4, InvGroupCodeTableMap::COL_INTBGRUPCREDACCT => 5, InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP => 6, InvGroupCodeTableMap::COL_INTBGRUPDROPACCT => 7, InvGroupCodeTableMap::COL_INTBGRUPSALEPROG => 8, InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT => 9, InvGroupCodeTableMap::COL_INTBGRUPCOOP => 10, InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG => 11, InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT => 12, InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT => 13, InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT => 14, InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP => 15, InvGroupCodeTableMap::COL_INTBGRUPPRODLINE => 16, InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC => 17, InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG => 18, InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED => 19, InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML => 20, InvGroupCodeTableMap::COL_INTBGRUPACDISC1 => 21, InvGroupCodeTableMap::COL_INTBGRUPACDISC2 => 22, InvGroupCodeTableMap::COL_INTBGRUPACDISC3 => 23, InvGroupCodeTableMap::COL_INTBGRUPACDISC4 => 24, InvGroupCodeTableMap::COL_DATEUPDTD => 25, InvGroupCodeTableMap::COL_TIMEUPDTD => 26, InvGroupCodeTableMap::COL_DUMMY => 27, ),
        self::TYPE_FIELDNAME     => array('IntbGrup' => 0, 'IntbGrupDesc' => 1, 'IntbGrupSaleAcct' => 2, 'IntbGrupIvtyAcct' => 3, 'IntbGrupCogsAcct' => 4, 'IntbGrupCredAcct' => 5, 'IntbGrupWebGrup' => 6, 'IntbGrupDropAcct' => 7, 'IntbGrupSaleProg' => 8, 'IntbGrupCostPct' => 9, 'IntbGrupCoop' => 10, 'IntbGrupUseSurchg' => 11, 'IntbGrupSurchgDollOrPct' => 12, 'IntbGrupSurchgDollAmt' => 13, 'IntbGrupSurchgPct' => 14, 'IntbGrupFrtGrup' => 15, 'IntbGrupProdLine' => 16, 'IntbGrupLmEcommDesc' => 17, 'IntbGrupLmMaxQtyLrg' => 18, 'IntbGrupLmMaxQtyMed' => 19, 'IntbGrupLmMaxQtySml' => 20, 'IntbGrupAcDisc1' => 21, 'IntbGrupAcDisc2' => 22, 'IntbGrupAcDisc3' => 23, 'IntbGrupAcDisc4' => 24, 'DateUpdtd' => 25, 'TimeUpdtd' => 26, 'dummy' => 27, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
        $this->setName('inv_grup_code');
        $this->setPhpName('InvGroupCode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvGroupCode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbGrup', 'Intbgrup', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbGrupDesc', 'Intbgrupdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbGrupSaleAcct', 'Intbgrupsaleacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupIvtyAcct', 'Intbgrupivtyacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupCogsAcct', 'Intbgrupcogsacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupCredAcct', 'Intbgrupcredacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupWebGrup', 'Intbgrupwebgrup', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupDropAcct', 'Intbgrupdropacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupSaleProg', 'Intbgrupsaleprog', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupCostPct', 'Intbgrupcostpct', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbGrupCoop', 'Intbgrupcoop', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupUseSurchg', 'Intbgrupusesurchg', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupSurchgDollOrPct', 'Intbgrupsurchgdollorpct', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupSurchgDollAmt', 'Intbgrupsurchgdollamt', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbGrupSurchgPct', 'Intbgrupsurchgpct', 'DECIMAL', false, 20, null);
        $this->addColumn('IntbGrupFrtGrup', 'Intbgrupfrtgrup', 'VARCHAR', false, 2, null);
        $this->addColumn('IntbGrupProdLine', 'Intbgrupprodline', 'VARCHAR', false, 4, null);
        $this->addColumn('IntbGrupLmEcommDesc', 'Intbgruplmecommdesc', 'VARCHAR', false, 40, null);
        $this->addColumn('IntbGrupLmMaxQtyLrg', 'Intbgruplmmaxqtylrg', 'INTEGER', false, 8, null);
        $this->addColumn('IntbGrupLmMaxQtyMed', 'Intbgruplmmaxqtymed', 'INTEGER', false, 8, null);
        $this->addColumn('IntbGrupLmMaxQtySml', 'Intbgruplmmaxqtysml', 'INTEGER', false, 8, null);
        $this->addColumn('IntbGrupAcDisc1', 'Intbgrupacdisc1', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupAcDisc2', 'Intbgrupacdisc2', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupAcDisc3', 'Intbgrupacdisc3', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbGrupAcDisc4', 'Intbgrupacdisc4', 'VARCHAR', false, 1, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':IntbGrup',
    1 => ':IntbGrup',
  ),
), null, null, 'ItemMasterItems', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvGroupCodeTableMap::CLASS_DEFAULT : InvGroupCodeTableMap::OM_CLASS;
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
     * @return array           (InvGroupCode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvGroupCodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvGroupCodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvGroupCodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvGroupCodeTableMap::OM_CLASS;
            /** @var InvGroupCode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvGroupCodeTableMap::addInstanceToPool($obj, $key);
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
            $key = InvGroupCodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvGroupCodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvGroupCode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvGroupCodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUP);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPDESC);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPSALEACCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPCREDACCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPDROPACCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPSALEPROG);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPCOOP);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPPRODLINE);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPACDISC1);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPACDISC2);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPACDISC3);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_INTBGRUPACDISC4);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvGroupCodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbGrup');
            $criteria->addSelectColumn($alias . '.IntbGrupDesc');
            $criteria->addSelectColumn($alias . '.IntbGrupSaleAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupIvtyAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupCogsAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupCredAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupWebGrup');
            $criteria->addSelectColumn($alias . '.IntbGrupDropAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupSaleProg');
            $criteria->addSelectColumn($alias . '.IntbGrupCostPct');
            $criteria->addSelectColumn($alias . '.IntbGrupCoop');
            $criteria->addSelectColumn($alias . '.IntbGrupUseSurchg');
            $criteria->addSelectColumn($alias . '.IntbGrupSurchgDollOrPct');
            $criteria->addSelectColumn($alias . '.IntbGrupSurchgDollAmt');
            $criteria->addSelectColumn($alias . '.IntbGrupSurchgPct');
            $criteria->addSelectColumn($alias . '.IntbGrupFrtGrup');
            $criteria->addSelectColumn($alias . '.IntbGrupProdLine');
            $criteria->addSelectColumn($alias . '.IntbGrupLmEcommDesc');
            $criteria->addSelectColumn($alias . '.IntbGrupLmMaxQtyLrg');
            $criteria->addSelectColumn($alias . '.IntbGrupLmMaxQtyMed');
            $criteria->addSelectColumn($alias . '.IntbGrupLmMaxQtySml');
            $criteria->addSelectColumn($alias . '.IntbGrupAcDisc1');
            $criteria->addSelectColumn($alias . '.IntbGrupAcDisc2');
            $criteria->addSelectColumn($alias . '.IntbGrupAcDisc3');
            $criteria->addSelectColumn($alias . '.IntbGrupAcDisc4');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvGroupCodeTableMap::DATABASE_NAME)->getTable(InvGroupCodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvGroupCodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvGroupCodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvGroupCodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvGroupCode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvGroupCode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvGroupCode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvGroupCodeTableMap::DATABASE_NAME);
            $criteria->add(InvGroupCodeTableMap::COL_INTBGRUP, (array) $values, Criteria::IN);
        }

        $query = InvGroupCodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvGroupCodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvGroupCodeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_grup_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvGroupCodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvGroupCode or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvGroupCode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvGroupCode object
        }


        // Set the correct dbName
        $query = InvGroupCodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvGroupCodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvGroupCodeTableMap::buildTableMap();
