<?php

namespace Map;

use \ItemGroupcode;
use \ItemGroupcodeQuery;
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
class ItemGroupcodeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ItemGroupcodeTableMap';

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
    const OM_CLASS = '\\ItemGroupcode';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ItemGroupcode';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 30;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 30;

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
     * the column name for the IntbGrupBuyerCd field
     */
    const COL_INTBGRUPBUYERCD = 'inv_grup_code.IntbGrupBuyerCd';

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
     * the column name for the IntbGrupUseAdjust field
     */
    const COL_INTBGRUPUSEADJUST = 'inv_grup_code.IntbGrupUseAdjust';

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
        self::TYPE_PHPNAME       => array('Intbgrup', 'Intbgrupdesc', 'Intbgrupsaleacct', 'Intbgrupivtyacct', 'Intbgrupcogsacct', 'Intbgrupbuyercd', 'Intbgrupcredacct', 'Intbgrupwebgrup', 'Intbgrupdropacct', 'Intbgrupsaleprog', 'Intbgrupcostpct', 'Intbgrupcoop', 'Intbgrupusesurchg', 'Intbgrupsurchgdollorpct', 'Intbgrupsurchgdollamt', 'Intbgrupsurchgpct', 'Intbgrupfrtgrup', 'Intbgrupuseadjust', 'Intbgrupprodline', 'Intbgruplmecommdesc', 'Intbgruplmmaxqtylrg', 'Intbgruplmmaxqtymed', 'Intbgruplmmaxqtysml', 'Intbgrupacdisc1', 'Intbgrupacdisc2', 'Intbgrupacdisc3', 'Intbgrupacdisc4', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbgrup', 'intbgrupdesc', 'intbgrupsaleacct', 'intbgrupivtyacct', 'intbgrupcogsacct', 'intbgrupbuyercd', 'intbgrupcredacct', 'intbgrupwebgrup', 'intbgrupdropacct', 'intbgrupsaleprog', 'intbgrupcostpct', 'intbgrupcoop', 'intbgrupusesurchg', 'intbgrupsurchgdollorpct', 'intbgrupsurchgdollamt', 'intbgrupsurchgpct', 'intbgrupfrtgrup', 'intbgrupuseadjust', 'intbgrupprodline', 'intbgruplmecommdesc', 'intbgruplmmaxqtylrg', 'intbgruplmmaxqtymed', 'intbgruplmmaxqtysml', 'intbgrupacdisc1', 'intbgrupacdisc2', 'intbgrupacdisc3', 'intbgrupacdisc4', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ItemGroupcodeTableMap::COL_INTBGRUP, ItemGroupcodeTableMap::COL_INTBGRUPDESC, ItemGroupcodeTableMap::COL_INTBGRUPSALEACCT, ItemGroupcodeTableMap::COL_INTBGRUPIVTYACCT, ItemGroupcodeTableMap::COL_INTBGRUPCOGSACCT, ItemGroupcodeTableMap::COL_INTBGRUPBUYERCD, ItemGroupcodeTableMap::COL_INTBGRUPCREDACCT, ItemGroupcodeTableMap::COL_INTBGRUPWEBGRUP, ItemGroupcodeTableMap::COL_INTBGRUPDROPACCT, ItemGroupcodeTableMap::COL_INTBGRUPSALEPROG, ItemGroupcodeTableMap::COL_INTBGRUPCOSTPCT, ItemGroupcodeTableMap::COL_INTBGRUPCOOP, ItemGroupcodeTableMap::COL_INTBGRUPUSESURCHG, ItemGroupcodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT, ItemGroupcodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, ItemGroupcodeTableMap::COL_INTBGRUPSURCHGPCT, ItemGroupcodeTableMap::COL_INTBGRUPFRTGRUP, ItemGroupcodeTableMap::COL_INTBGRUPUSEADJUST, ItemGroupcodeTableMap::COL_INTBGRUPPRODLINE, ItemGroupcodeTableMap::COL_INTBGRUPLMECOMMDESC, ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYLRG, ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYMED, ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYSML, ItemGroupcodeTableMap::COL_INTBGRUPACDISC1, ItemGroupcodeTableMap::COL_INTBGRUPACDISC2, ItemGroupcodeTableMap::COL_INTBGRUPACDISC3, ItemGroupcodeTableMap::COL_INTBGRUPACDISC4, ItemGroupcodeTableMap::COL_DATEUPDTD, ItemGroupcodeTableMap::COL_TIMEUPDTD, ItemGroupcodeTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbGrup', 'IntbGrupDesc', 'IntbGrupSaleAcct', 'IntbGrupIvtyAcct', 'IntbGrupCogsAcct', 'IntbGrupBuyerCd', 'IntbGrupCredAcct', 'IntbGrupWebGrup', 'IntbGrupDropAcct', 'IntbGrupSaleProg', 'IntbGrupCostPct', 'IntbGrupCoop', 'IntbGrupUseSurchg', 'IntbGrupSurchgDollOrPct', 'IntbGrupSurchgDollAmt', 'IntbGrupSurchgPct', 'IntbGrupFrtGrup', 'IntbGrupUseAdjust', 'IntbGrupProdLine', 'IntbGrupLmEcommDesc', 'IntbGrupLmMaxQtyLrg', 'IntbGrupLmMaxQtyMed', 'IntbGrupLmMaxQtySml', 'IntbGrupAcDisc1', 'IntbGrupAcDisc2', 'IntbGrupAcDisc3', 'IntbGrupAcDisc4', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbgrup' => 0, 'Intbgrupdesc' => 1, 'Intbgrupsaleacct' => 2, 'Intbgrupivtyacct' => 3, 'Intbgrupcogsacct' => 4, 'Intbgrupbuyercd' => 5, 'Intbgrupcredacct' => 6, 'Intbgrupwebgrup' => 7, 'Intbgrupdropacct' => 8, 'Intbgrupsaleprog' => 9, 'Intbgrupcostpct' => 10, 'Intbgrupcoop' => 11, 'Intbgrupusesurchg' => 12, 'Intbgrupsurchgdollorpct' => 13, 'Intbgrupsurchgdollamt' => 14, 'Intbgrupsurchgpct' => 15, 'Intbgrupfrtgrup' => 16, 'Intbgrupuseadjust' => 17, 'Intbgrupprodline' => 18, 'Intbgruplmecommdesc' => 19, 'Intbgruplmmaxqtylrg' => 20, 'Intbgruplmmaxqtymed' => 21, 'Intbgruplmmaxqtysml' => 22, 'Intbgrupacdisc1' => 23, 'Intbgrupacdisc2' => 24, 'Intbgrupacdisc3' => 25, 'Intbgrupacdisc4' => 26, 'Dateupdtd' => 27, 'Timeupdtd' => 28, 'Dummy' => 29, ),
        self::TYPE_CAMELNAME     => array('intbgrup' => 0, 'intbgrupdesc' => 1, 'intbgrupsaleacct' => 2, 'intbgrupivtyacct' => 3, 'intbgrupcogsacct' => 4, 'intbgrupbuyercd' => 5, 'intbgrupcredacct' => 6, 'intbgrupwebgrup' => 7, 'intbgrupdropacct' => 8, 'intbgrupsaleprog' => 9, 'intbgrupcostpct' => 10, 'intbgrupcoop' => 11, 'intbgrupusesurchg' => 12, 'intbgrupsurchgdollorpct' => 13, 'intbgrupsurchgdollamt' => 14, 'intbgrupsurchgpct' => 15, 'intbgrupfrtgrup' => 16, 'intbgrupuseadjust' => 17, 'intbgrupprodline' => 18, 'intbgruplmecommdesc' => 19, 'intbgruplmmaxqtylrg' => 20, 'intbgruplmmaxqtymed' => 21, 'intbgruplmmaxqtysml' => 22, 'intbgrupacdisc1' => 23, 'intbgrupacdisc2' => 24, 'intbgrupacdisc3' => 25, 'intbgrupacdisc4' => 26, 'dateupdtd' => 27, 'timeupdtd' => 28, 'dummy' => 29, ),
        self::TYPE_COLNAME       => array(ItemGroupcodeTableMap::COL_INTBGRUP => 0, ItemGroupcodeTableMap::COL_INTBGRUPDESC => 1, ItemGroupcodeTableMap::COL_INTBGRUPSALEACCT => 2, ItemGroupcodeTableMap::COL_INTBGRUPIVTYACCT => 3, ItemGroupcodeTableMap::COL_INTBGRUPCOGSACCT => 4, ItemGroupcodeTableMap::COL_INTBGRUPBUYERCD => 5, ItemGroupcodeTableMap::COL_INTBGRUPCREDACCT => 6, ItemGroupcodeTableMap::COL_INTBGRUPWEBGRUP => 7, ItemGroupcodeTableMap::COL_INTBGRUPDROPACCT => 8, ItemGroupcodeTableMap::COL_INTBGRUPSALEPROG => 9, ItemGroupcodeTableMap::COL_INTBGRUPCOSTPCT => 10, ItemGroupcodeTableMap::COL_INTBGRUPCOOP => 11, ItemGroupcodeTableMap::COL_INTBGRUPUSESURCHG => 12, ItemGroupcodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT => 13, ItemGroupcodeTableMap::COL_INTBGRUPSURCHGDOLLAMT => 14, ItemGroupcodeTableMap::COL_INTBGRUPSURCHGPCT => 15, ItemGroupcodeTableMap::COL_INTBGRUPFRTGRUP => 16, ItemGroupcodeTableMap::COL_INTBGRUPUSEADJUST => 17, ItemGroupcodeTableMap::COL_INTBGRUPPRODLINE => 18, ItemGroupcodeTableMap::COL_INTBGRUPLMECOMMDESC => 19, ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYLRG => 20, ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYMED => 21, ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYSML => 22, ItemGroupcodeTableMap::COL_INTBGRUPACDISC1 => 23, ItemGroupcodeTableMap::COL_INTBGRUPACDISC2 => 24, ItemGroupcodeTableMap::COL_INTBGRUPACDISC3 => 25, ItemGroupcodeTableMap::COL_INTBGRUPACDISC4 => 26, ItemGroupcodeTableMap::COL_DATEUPDTD => 27, ItemGroupcodeTableMap::COL_TIMEUPDTD => 28, ItemGroupcodeTableMap::COL_DUMMY => 29, ),
        self::TYPE_FIELDNAME     => array('IntbGrup' => 0, 'IntbGrupDesc' => 1, 'IntbGrupSaleAcct' => 2, 'IntbGrupIvtyAcct' => 3, 'IntbGrupCogsAcct' => 4, 'IntbGrupBuyerCd' => 5, 'IntbGrupCredAcct' => 6, 'IntbGrupWebGrup' => 7, 'IntbGrupDropAcct' => 8, 'IntbGrupSaleProg' => 9, 'IntbGrupCostPct' => 10, 'IntbGrupCoop' => 11, 'IntbGrupUseSurchg' => 12, 'IntbGrupSurchgDollOrPct' => 13, 'IntbGrupSurchgDollAmt' => 14, 'IntbGrupSurchgPct' => 15, 'IntbGrupFrtGrup' => 16, 'IntbGrupUseAdjust' => 17, 'IntbGrupProdLine' => 18, 'IntbGrupLmEcommDesc' => 19, 'IntbGrupLmMaxQtyLrg' => 20, 'IntbGrupLmMaxQtyMed' => 21, 'IntbGrupLmMaxQtySml' => 22, 'IntbGrupAcDisc1' => 23, 'IntbGrupAcDisc2' => 24, 'IntbGrupAcDisc3' => 25, 'IntbGrupAcDisc4' => 26, 'DateUpdtd' => 27, 'TimeUpdtd' => 28, 'dummy' => 29, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
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
        $this->setPhpName('ItemGroupcode');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ItemGroupcode');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbGrup', 'Intbgrup', 'VARCHAR', true, 8, null);
        $this->addColumn('IntbGrupDesc', 'Intbgrupdesc', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbGrupSaleAcct', 'Intbgrupsaleacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupIvtyAcct', 'Intbgrupivtyacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupCogsAcct', 'Intbgrupcogsacct', 'VARCHAR', false, 12, null);
        $this->addColumn('IntbGrupBuyerCd', 'Intbgrupbuyercd', 'VARCHAR', false, 6, null);
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
        $this->addColumn('IntbGrupUseAdjust', 'Intbgrupuseadjust', 'DECIMAL', false, 20, null);
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
        return $withPrefix ? ItemGroupcodeTableMap::CLASS_DEFAULT : ItemGroupcodeTableMap::OM_CLASS;
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
     * @return array           (ItemGroupcode object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ItemGroupcodeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ItemGroupcodeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ItemGroupcodeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ItemGroupcodeTableMap::OM_CLASS;
            /** @var ItemGroupcode $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ItemGroupcodeTableMap::addInstanceToPool($obj, $key);
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
            $key = ItemGroupcodeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ItemGroupcodeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ItemGroupcode $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ItemGroupcodeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUP);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPDESC);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPSALEACCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPIVTYACCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPCOGSACCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPBUYERCD);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPCREDACCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPWEBGRUP);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPDROPACCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPSALEPROG);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPCOSTPCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPCOOP);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPUSESURCHG);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPSURCHGDOLLAMT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPSURCHGPCT);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPFRTGRUP);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPUSEADJUST);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPPRODLINE);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPLMECOMMDESC);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYLRG);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYMED);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPLMMAXQTYSML);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPACDISC1);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPACDISC2);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPACDISC3);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_INTBGRUPACDISC4);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ItemGroupcodeTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbGrup');
            $criteria->addSelectColumn($alias . '.IntbGrupDesc');
            $criteria->addSelectColumn($alias . '.IntbGrupSaleAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupIvtyAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupCogsAcct');
            $criteria->addSelectColumn($alias . '.IntbGrupBuyerCd');
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
            $criteria->addSelectColumn($alias . '.IntbGrupUseAdjust');
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
        return Propel::getServiceContainer()->getDatabaseMap(ItemGroupcodeTableMap::DATABASE_NAME)->getTable(ItemGroupcodeTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ItemGroupcodeTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ItemGroupcodeTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ItemGroupcodeTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ItemGroupcode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ItemGroupcode object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemGroupcodeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ItemGroupcode) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ItemGroupcodeTableMap::DATABASE_NAME);
            $criteria->add(ItemGroupcodeTableMap::COL_INTBGRUP, (array) $values, Criteria::IN);
        }

        $query = ItemGroupcodeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ItemGroupcodeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ItemGroupcodeTableMap::removeInstanceFromPool($singleval);
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
        return ItemGroupcodeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ItemGroupcode or Criteria object.
     *
     * @param mixed               $criteria Criteria or ItemGroupcode object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemGroupcodeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ItemGroupcode object
        }


        // Set the correct dbName
        $query = ItemGroupcodeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ItemGroupcodeTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ItemGroupcodeTableMap::buildTableMap();
