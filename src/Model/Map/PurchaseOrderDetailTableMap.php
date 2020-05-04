<?php

namespace Map;

use \PurchaseOrderDetail;
use \PurchaseOrderDetailQuery;
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
 * This class defines the structure of the 'po_detail' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class PurchaseOrderDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.PurchaseOrderDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'po_detail';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\PurchaseOrderDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'PurchaseOrderDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 43;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 43;

    /**
     * the column name for the PohdNbr field
     */
    const COL_POHDNBR = 'po_detail.PohdNbr';

    /**
     * the column name for the PodtLine field
     */
    const COL_PODTLINE = 'po_detail.PodtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'po_detail.InitItemNbr';

    /**
     * the column name for the PodtDesc1 field
     */
    const COL_PODTDESC1 = 'po_detail.PodtDesc1';

    /**
     * the column name for the PodtDesc2 field
     */
    const COL_PODTDESC2 = 'po_detail.PodtDesc2';

    /**
     * the column name for the PodtVendItemNbr field
     */
    const COL_PODTVENDITEMNBR = 'po_detail.PodtVendItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'po_detail.IntbWhse';

    /**
     * the column name for the PodtShipDate field
     */
    const COL_PODTSHIPDATE = 'po_detail.PodtShipDate';

    /**
     * the column name for the PodtExptDate field
     */
    const COL_PODTEXPTDATE = 'po_detail.PodtExptDate';

    /**
     * the column name for the PodtCancDate field
     */
    const COL_PODTCANCDATE = 'po_detail.PodtCancDate';

    /**
     * the column name for the IntbUomPur field
     */
    const COL_INTBUOMPUR = 'po_detail.IntbUomPur';

    /**
     * the column name for the PodtQtyOrd field
     */
    const COL_PODTQTYORD = 'po_detail.PodtQtyOrd';

    /**
     * the column name for the PodtCost field
     */
    const COL_PODTCOST = 'po_detail.PodtCost';

    /**
     * the column name for the PodtCostTot field
     */
    const COL_PODTCOSTTOT = 'po_detail.PodtCostTot';

    /**
     * the column name for the PodtRel field
     */
    const COL_PODTREL = 'po_detail.PodtRel';

    /**
     * the column name for the PodtSpecOrdr field
     */
    const COL_PODTSPECORDR = 'po_detail.PodtSpecOrdr';

    /**
     * the column name for the PodtGlAcct field
     */
    const COL_PODTGLACCT = 'po_detail.PodtGlAcct';

    /**
     * the column name for the PodtSoNbr field
     */
    const COL_PODTSONBR = 'po_detail.PodtSoNbr';

    /**
     * the column name for the PodtStat field
     */
    const COL_PODTSTAT = 'po_detail.PodtStat';

    /**
     * the column name for the PodtOrigSoLine field
     */
    const COL_PODTORIGSOLINE = 'po_detail.PodtOrigSoLine';

    /**
     * the column name for the PodtQtyDueIn field
     */
    const COL_PODTQTYDUEIN = 'po_detail.PodtQtyDueIn';

    /**
     * the column name for the PodtType field
     */
    const COL_PODTTYPE = 'po_detail.PodtType';

    /**
     * the column name for the PodtWghtTot field
     */
    const COL_PODTWGHTTOT = 'po_detail.PodtWghtTot';

    /**
     * the column name for the PodtForeignCost field
     */
    const COL_PODTFOREIGNCOST = 'po_detail.PodtForeignCost';

    /**
     * the column name for the PodtForeignCostTot field
     */
    const COL_PODTFOREIGNCOSTTOT = 'po_detail.PodtForeignCostTot';

    /**
     * the column name for the PodtStanUnitCost field
     */
    const COL_PODTSTANUNITCOST = 'po_detail.PodtStanUnitCost';

    /**
     * the column name for the PodtAckDate field
     */
    const COL_PODTACKDATE = 'po_detail.PodtAckDate';

    /**
     * the column name for the PodtInvcClearFlag field
     */
    const COL_PODTINVCCLEARFLAG = 'po_detail.PodtInvcClearFlag';

    /**
     * the column name for the PodtPrtKitDet field
     */
    const COL_PODTPRTKITDET = 'po_detail.PodtPrtKitDet';

    /**
     * the column name for the PodtDestWhse field
     */
    const COL_PODTDESTWHSE = 'po_detail.PodtDestWhse';

    /**
     * the column name for the PodtRevision field
     */
    const COL_PODTREVISION = 'po_detail.PodtRevision';

    /**
     * the column name for the PodtPrtPoEOrU field
     */
    const COL_PODTPRTPOEORU = 'po_detail.PodtPrtPoEOrU';

    /**
     * the column name for the PotbCnfmCode field
     */
    const COL_POTBCNFMCODE = 'po_detail.PotbCnfmCode';

    /**
     * the column name for the PodtRcptNbr field
     */
    const COL_PODTRCPTNBR = 'po_detail.PodtRcptNbr';

    /**
     * the column name for the PodtWipNbr field
     */
    const COL_PODTWIPNBR = 'po_detail.PodtWipNbr';

    /**
     * the column name for the PodtOrdrAs field
     */
    const COL_PODTORDRAS = 'po_detail.PodtOrdrAs';

    /**
     * the column name for the PodtBolDate field
     */
    const COL_PODTBOLDATE = 'po_detail.PodtBolDate';

    /**
     * the column name for the PodtListPric field
     */
    const COL_PODTLISTPRIC = 'po_detail.PodtListPric';

    /**
     * the column name for the PodtDeliveredDate field
     */
    const COL_PODTDELIVEREDDATE = 'po_detail.PodtDeliveredDate';

    /**
     * the column name for the PodtLandCost field
     */
    const COL_PODTLANDCOST = 'po_detail.PodtLandCost';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'po_detail.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'po_detail.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'po_detail.dummy';

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
        self::TYPE_PHPNAME       => array('Pohdnbr', 'Podtline', 'Inititemnbr', 'Podtdesc1', 'Podtdesc2', 'Podtvenditemnbr', 'Intbwhse', 'Podtshipdate', 'Podtexptdate', 'Podtcancdate', 'Intbuompur', 'Podtqtyord', 'Podtcost', 'Podtcosttot', 'Podtrel', 'Podtspecordr', 'Podtglacct', 'Podtsonbr', 'Podtstat', 'Podtorigsoline', 'Podtqtyduein', 'Podttype', 'Podtwghttot', 'Podtforeigncost', 'Podtforeigncosttot', 'Podtstanunitcost', 'Podtackdate', 'Podtinvcclearflag', 'Podtprtkitdet', 'Podtdestwhse', 'Podtrevision', 'Podtprtpoeoru', 'Potbcnfmcode', 'Podtrcptnbr', 'Podtwipnbr', 'Podtordras', 'Podtboldate', 'Podtlistpric', 'Podtdelivereddate', 'Podtlandcost', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('pohdnbr', 'podtline', 'inititemnbr', 'podtdesc1', 'podtdesc2', 'podtvenditemnbr', 'intbwhse', 'podtshipdate', 'podtexptdate', 'podtcancdate', 'intbuompur', 'podtqtyord', 'podtcost', 'podtcosttot', 'podtrel', 'podtspecordr', 'podtglacct', 'podtsonbr', 'podtstat', 'podtorigsoline', 'podtqtyduein', 'podttype', 'podtwghttot', 'podtforeigncost', 'podtforeigncosttot', 'podtstanunitcost', 'podtackdate', 'podtinvcclearflag', 'podtprtkitdet', 'podtdestwhse', 'podtrevision', 'podtprtpoeoru', 'potbcnfmcode', 'podtrcptnbr', 'podtwipnbr', 'podtordras', 'podtboldate', 'podtlistpric', 'podtdelivereddate', 'podtlandcost', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(PurchaseOrderDetailTableMap::COL_POHDNBR, PurchaseOrderDetailTableMap::COL_PODTLINE, PurchaseOrderDetailTableMap::COL_INITITEMNBR, PurchaseOrderDetailTableMap::COL_PODTDESC1, PurchaseOrderDetailTableMap::COL_PODTDESC2, PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR, PurchaseOrderDetailTableMap::COL_INTBWHSE, PurchaseOrderDetailTableMap::COL_PODTSHIPDATE, PurchaseOrderDetailTableMap::COL_PODTEXPTDATE, PurchaseOrderDetailTableMap::COL_PODTCANCDATE, PurchaseOrderDetailTableMap::COL_INTBUOMPUR, PurchaseOrderDetailTableMap::COL_PODTQTYORD, PurchaseOrderDetailTableMap::COL_PODTCOST, PurchaseOrderDetailTableMap::COL_PODTCOSTTOT, PurchaseOrderDetailTableMap::COL_PODTREL, PurchaseOrderDetailTableMap::COL_PODTSPECORDR, PurchaseOrderDetailTableMap::COL_PODTGLACCT, PurchaseOrderDetailTableMap::COL_PODTSONBR, PurchaseOrderDetailTableMap::COL_PODTSTAT, PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE, PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN, PurchaseOrderDetailTableMap::COL_PODTTYPE, PurchaseOrderDetailTableMap::COL_PODTWGHTTOT, PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST, PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT, PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST, PurchaseOrderDetailTableMap::COL_PODTACKDATE, PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG, PurchaseOrderDetailTableMap::COL_PODTPRTKITDET, PurchaseOrderDetailTableMap::COL_PODTDESTWHSE, PurchaseOrderDetailTableMap::COL_PODTREVISION, PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU, PurchaseOrderDetailTableMap::COL_POTBCNFMCODE, PurchaseOrderDetailTableMap::COL_PODTRCPTNBR, PurchaseOrderDetailTableMap::COL_PODTWIPNBR, PurchaseOrderDetailTableMap::COL_PODTORDRAS, PurchaseOrderDetailTableMap::COL_PODTBOLDATE, PurchaseOrderDetailTableMap::COL_PODTLISTPRIC, PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE, PurchaseOrderDetailTableMap::COL_PODTLANDCOST, PurchaseOrderDetailTableMap::COL_DATEUPDTD, PurchaseOrderDetailTableMap::COL_TIMEUPDTD, PurchaseOrderDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('PohdNbr', 'PodtLine', 'InitItemNbr', 'PodtDesc1', 'PodtDesc2', 'PodtVendItemNbr', 'IntbWhse', 'PodtShipDate', 'PodtExptDate', 'PodtCancDate', 'IntbUomPur', 'PodtQtyOrd', 'PodtCost', 'PodtCostTot', 'PodtRel', 'PodtSpecOrdr', 'PodtGlAcct', 'PodtSoNbr', 'PodtStat', 'PodtOrigSoLine', 'PodtQtyDueIn', 'PodtType', 'PodtWghtTot', 'PodtForeignCost', 'PodtForeignCostTot', 'PodtStanUnitCost', 'PodtAckDate', 'PodtInvcClearFlag', 'PodtPrtKitDet', 'PodtDestWhse', 'PodtRevision', 'PodtPrtPoEOrU', 'PotbCnfmCode', 'PodtRcptNbr', 'PodtWipNbr', 'PodtOrdrAs', 'PodtBolDate', 'PodtListPric', 'PodtDeliveredDate', 'PodtLandCost', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Pohdnbr' => 0, 'Podtline' => 1, 'Inititemnbr' => 2, 'Podtdesc1' => 3, 'Podtdesc2' => 4, 'Podtvenditemnbr' => 5, 'Intbwhse' => 6, 'Podtshipdate' => 7, 'Podtexptdate' => 8, 'Podtcancdate' => 9, 'Intbuompur' => 10, 'Podtqtyord' => 11, 'Podtcost' => 12, 'Podtcosttot' => 13, 'Podtrel' => 14, 'Podtspecordr' => 15, 'Podtglacct' => 16, 'Podtsonbr' => 17, 'Podtstat' => 18, 'Podtorigsoline' => 19, 'Podtqtyduein' => 20, 'Podttype' => 21, 'Podtwghttot' => 22, 'Podtforeigncost' => 23, 'Podtforeigncosttot' => 24, 'Podtstanunitcost' => 25, 'Podtackdate' => 26, 'Podtinvcclearflag' => 27, 'Podtprtkitdet' => 28, 'Podtdestwhse' => 29, 'Podtrevision' => 30, 'Podtprtpoeoru' => 31, 'Potbcnfmcode' => 32, 'Podtrcptnbr' => 33, 'Podtwipnbr' => 34, 'Podtordras' => 35, 'Podtboldate' => 36, 'Podtlistpric' => 37, 'Podtdelivereddate' => 38, 'Podtlandcost' => 39, 'Dateupdtd' => 40, 'Timeupdtd' => 41, 'Dummy' => 42, ),
        self::TYPE_CAMELNAME     => array('pohdnbr' => 0, 'podtline' => 1, 'inititemnbr' => 2, 'podtdesc1' => 3, 'podtdesc2' => 4, 'podtvenditemnbr' => 5, 'intbwhse' => 6, 'podtshipdate' => 7, 'podtexptdate' => 8, 'podtcancdate' => 9, 'intbuompur' => 10, 'podtqtyord' => 11, 'podtcost' => 12, 'podtcosttot' => 13, 'podtrel' => 14, 'podtspecordr' => 15, 'podtglacct' => 16, 'podtsonbr' => 17, 'podtstat' => 18, 'podtorigsoline' => 19, 'podtqtyduein' => 20, 'podttype' => 21, 'podtwghttot' => 22, 'podtforeigncost' => 23, 'podtforeigncosttot' => 24, 'podtstanunitcost' => 25, 'podtackdate' => 26, 'podtinvcclearflag' => 27, 'podtprtkitdet' => 28, 'podtdestwhse' => 29, 'podtrevision' => 30, 'podtprtpoeoru' => 31, 'potbcnfmcode' => 32, 'podtrcptnbr' => 33, 'podtwipnbr' => 34, 'podtordras' => 35, 'podtboldate' => 36, 'podtlistpric' => 37, 'podtdelivereddate' => 38, 'podtlandcost' => 39, 'dateupdtd' => 40, 'timeupdtd' => 41, 'dummy' => 42, ),
        self::TYPE_COLNAME       => array(PurchaseOrderDetailTableMap::COL_POHDNBR => 0, PurchaseOrderDetailTableMap::COL_PODTLINE => 1, PurchaseOrderDetailTableMap::COL_INITITEMNBR => 2, PurchaseOrderDetailTableMap::COL_PODTDESC1 => 3, PurchaseOrderDetailTableMap::COL_PODTDESC2 => 4, PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR => 5, PurchaseOrderDetailTableMap::COL_INTBWHSE => 6, PurchaseOrderDetailTableMap::COL_PODTSHIPDATE => 7, PurchaseOrderDetailTableMap::COL_PODTEXPTDATE => 8, PurchaseOrderDetailTableMap::COL_PODTCANCDATE => 9, PurchaseOrderDetailTableMap::COL_INTBUOMPUR => 10, PurchaseOrderDetailTableMap::COL_PODTQTYORD => 11, PurchaseOrderDetailTableMap::COL_PODTCOST => 12, PurchaseOrderDetailTableMap::COL_PODTCOSTTOT => 13, PurchaseOrderDetailTableMap::COL_PODTREL => 14, PurchaseOrderDetailTableMap::COL_PODTSPECORDR => 15, PurchaseOrderDetailTableMap::COL_PODTGLACCT => 16, PurchaseOrderDetailTableMap::COL_PODTSONBR => 17, PurchaseOrderDetailTableMap::COL_PODTSTAT => 18, PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE => 19, PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN => 20, PurchaseOrderDetailTableMap::COL_PODTTYPE => 21, PurchaseOrderDetailTableMap::COL_PODTWGHTTOT => 22, PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST => 23, PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT => 24, PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST => 25, PurchaseOrderDetailTableMap::COL_PODTACKDATE => 26, PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG => 27, PurchaseOrderDetailTableMap::COL_PODTPRTKITDET => 28, PurchaseOrderDetailTableMap::COL_PODTDESTWHSE => 29, PurchaseOrderDetailTableMap::COL_PODTREVISION => 30, PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU => 31, PurchaseOrderDetailTableMap::COL_POTBCNFMCODE => 32, PurchaseOrderDetailTableMap::COL_PODTRCPTNBR => 33, PurchaseOrderDetailTableMap::COL_PODTWIPNBR => 34, PurchaseOrderDetailTableMap::COL_PODTORDRAS => 35, PurchaseOrderDetailTableMap::COL_PODTBOLDATE => 36, PurchaseOrderDetailTableMap::COL_PODTLISTPRIC => 37, PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE => 38, PurchaseOrderDetailTableMap::COL_PODTLANDCOST => 39, PurchaseOrderDetailTableMap::COL_DATEUPDTD => 40, PurchaseOrderDetailTableMap::COL_TIMEUPDTD => 41, PurchaseOrderDetailTableMap::COL_DUMMY => 42, ),
        self::TYPE_FIELDNAME     => array('PohdNbr' => 0, 'PodtLine' => 1, 'InitItemNbr' => 2, 'PodtDesc1' => 3, 'PodtDesc2' => 4, 'PodtVendItemNbr' => 5, 'IntbWhse' => 6, 'PodtShipDate' => 7, 'PodtExptDate' => 8, 'PodtCancDate' => 9, 'IntbUomPur' => 10, 'PodtQtyOrd' => 11, 'PodtCost' => 12, 'PodtCostTot' => 13, 'PodtRel' => 14, 'PodtSpecOrdr' => 15, 'PodtGlAcct' => 16, 'PodtSoNbr' => 17, 'PodtStat' => 18, 'PodtOrigSoLine' => 19, 'PodtQtyDueIn' => 20, 'PodtType' => 21, 'PodtWghtTot' => 22, 'PodtForeignCost' => 23, 'PodtForeignCostTot' => 24, 'PodtStanUnitCost' => 25, 'PodtAckDate' => 26, 'PodtInvcClearFlag' => 27, 'PodtPrtKitDet' => 28, 'PodtDestWhse' => 29, 'PodtRevision' => 30, 'PodtPrtPoEOrU' => 31, 'PotbCnfmCode' => 32, 'PodtRcptNbr' => 33, 'PodtWipNbr' => 34, 'PodtOrdrAs' => 35, 'PodtBolDate' => 36, 'PodtListPric' => 37, 'PodtDeliveredDate' => 38, 'PodtLandCost' => 39, 'DateUpdtd' => 40, 'TimeUpdtd' => 41, 'dummy' => 42, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
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
        $this->setName('po_detail');
        $this->setPhpName('PurchaseOrderDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\PurchaseOrderDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('PohdNbr', 'Pohdnbr', 'VARCHAR' , 'po_head', 'PohdNbr', true, 8, '');
        $this->addPrimaryKey('PodtLine', 'Podtline', 'INTEGER', true, 4, 0);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('PodtDesc1', 'Podtdesc1', 'VARCHAR', false, 35, null);
        $this->addColumn('PodtDesc2', 'Podtdesc2', 'VARCHAR', false, 35, null);
        $this->addColumn('PodtVendItemNbr', 'Podtvenditemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('PodtShipDate', 'Podtshipdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtExptDate', 'Podtexptdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtCancDate', 'Podtcancdate', 'VARCHAR', false, 8, null);
        $this->addColumn('IntbUomPur', 'Intbuompur', 'VARCHAR', false, 4, null);
        $this->addColumn('PodtQtyOrd', 'Podtqtyord', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtCost', 'Podtcost', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtCostTot', 'Podtcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtRel', 'Podtrel', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtSpecOrdr', 'Podtspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtGlAcct', 'Podtglacct', 'VARCHAR', false, 9, null);
        $this->addColumn('PodtSoNbr', 'Podtsonbr', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtStat', 'Podtstat', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtOrigSoLine', 'Podtorigsoline', 'INTEGER', false, 4, null);
        $this->addColumn('PodtQtyDueIn', 'Podtqtyduein', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtType', 'Podttype', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtWghtTot', 'Podtwghttot', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtForeignCost', 'Podtforeigncost', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtForeignCostTot', 'Podtforeigncosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtStanUnitCost', 'Podtstanunitcost', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtAckDate', 'Podtackdate', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtInvcClearFlag', 'Podtinvcclearflag', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtPrtKitDet', 'Podtprtkitdet', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtDestWhse', 'Podtdestwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('PodtRevision', 'Podtrevision', 'VARCHAR', false, 10, null);
        $this->addColumn('PodtPrtPoEOrU', 'Podtprtpoeoru', 'VARCHAR', false, 1, null);
        $this->addColumn('PotbCnfmCode', 'Potbcnfmcode', 'VARCHAR', false, 4, null);
        $this->addColumn('PodtRcptNbr', 'Podtrcptnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtWipNbr', 'Podtwipnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtOrdrAs', 'Podtordras', 'VARCHAR', false, 1, null);
        $this->addColumn('PodtBolDate', 'Podtboldate', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtListPric', 'Podtlistpric', 'DECIMAL', false, 20, null);
        $this->addColumn('PodtDeliveredDate', 'Podtdelivereddate', 'VARCHAR', false, 8, null);
        $this->addColumn('PodtLandCost', 'Podtlandcost', 'DECIMAL', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'VARCHAR', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PurchaseOrder', '\\PurchaseOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':PohdNbr',
    1 => ':PohdNbr',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \PurchaseOrderDetail $obj A \PurchaseOrderDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getPohdnbr() || is_scalar($obj->getPohdnbr()) || is_callable([$obj->getPohdnbr(), '__toString']) ? (string) $obj->getPohdnbr() : $obj->getPohdnbr()), (null === $obj->getPodtline() || is_scalar($obj->getPodtline()) || is_callable([$obj->getPodtline(), '__toString']) ? (string) $obj->getPodtline() : $obj->getPodtline())]);
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
     * @param mixed $value A \PurchaseOrderDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \PurchaseOrderDetail) {
                $key = serialize([(null === $value->getPohdnbr() || is_scalar($value->getPohdnbr()) || is_callable([$value->getPohdnbr(), '__toString']) ? (string) $value->getPohdnbr() : $value->getPohdnbr()), (null === $value->getPodtline() || is_scalar($value->getPodtline()) || is_callable([$value->getPodtline(), '__toString']) ? (string) $value->getPodtline() : $value->getPodtline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \PurchaseOrderDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Podtline', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PurchaseOrderDetailTableMap::CLASS_DEFAULT : PurchaseOrderDetailTableMap::OM_CLASS;
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
     * @return array           (PurchaseOrderDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PurchaseOrderDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PurchaseOrderDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PurchaseOrderDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PurchaseOrderDetailTableMap::OM_CLASS;
            /** @var PurchaseOrderDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PurchaseOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = PurchaseOrderDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PurchaseOrderDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PurchaseOrderDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PurchaseOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_POHDNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTLINE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTDESC1);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTDESC2);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTSHIPDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTEXPTDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTCANCDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_INTBUOMPUR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTQTYORD);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTREL);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTSPECORDR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTGLACCT);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTSONBR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTSTAT);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTTYPE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTACKDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTPRTKITDET);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTDESTWHSE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTREVISION);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_POTBCNFMCODE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTWIPNBR);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTORDRAS);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTBOLDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_PODTLANDCOST);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(PurchaseOrderDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.PohdNbr');
            $criteria->addSelectColumn($alias . '.PodtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.PodtDesc1');
            $criteria->addSelectColumn($alias . '.PodtDesc2');
            $criteria->addSelectColumn($alias . '.PodtVendItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.PodtShipDate');
            $criteria->addSelectColumn($alias . '.PodtExptDate');
            $criteria->addSelectColumn($alias . '.PodtCancDate');
            $criteria->addSelectColumn($alias . '.IntbUomPur');
            $criteria->addSelectColumn($alias . '.PodtQtyOrd');
            $criteria->addSelectColumn($alias . '.PodtCost');
            $criteria->addSelectColumn($alias . '.PodtCostTot');
            $criteria->addSelectColumn($alias . '.PodtRel');
            $criteria->addSelectColumn($alias . '.PodtSpecOrdr');
            $criteria->addSelectColumn($alias . '.PodtGlAcct');
            $criteria->addSelectColumn($alias . '.PodtSoNbr');
            $criteria->addSelectColumn($alias . '.PodtStat');
            $criteria->addSelectColumn($alias . '.PodtOrigSoLine');
            $criteria->addSelectColumn($alias . '.PodtQtyDueIn');
            $criteria->addSelectColumn($alias . '.PodtType');
            $criteria->addSelectColumn($alias . '.PodtWghtTot');
            $criteria->addSelectColumn($alias . '.PodtForeignCost');
            $criteria->addSelectColumn($alias . '.PodtForeignCostTot');
            $criteria->addSelectColumn($alias . '.PodtStanUnitCost');
            $criteria->addSelectColumn($alias . '.PodtAckDate');
            $criteria->addSelectColumn($alias . '.PodtInvcClearFlag');
            $criteria->addSelectColumn($alias . '.PodtPrtKitDet');
            $criteria->addSelectColumn($alias . '.PodtDestWhse');
            $criteria->addSelectColumn($alias . '.PodtRevision');
            $criteria->addSelectColumn($alias . '.PodtPrtPoEOrU');
            $criteria->addSelectColumn($alias . '.PotbCnfmCode');
            $criteria->addSelectColumn($alias . '.PodtRcptNbr');
            $criteria->addSelectColumn($alias . '.PodtWipNbr');
            $criteria->addSelectColumn($alias . '.PodtOrdrAs');
            $criteria->addSelectColumn($alias . '.PodtBolDate');
            $criteria->addSelectColumn($alias . '.PodtListPric');
            $criteria->addSelectColumn($alias . '.PodtDeliveredDate');
            $criteria->addSelectColumn($alias . '.PodtLandCost');
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
        return Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailTableMap::DATABASE_NAME)->getTable(PurchaseOrderDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(PurchaseOrderDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(PurchaseOrderDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new PurchaseOrderDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a PurchaseOrderDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PurchaseOrderDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \PurchaseOrderDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PurchaseOrderDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PurchaseOrderDetailTableMap::COL_POHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PurchaseOrderDetailTableMap::COL_PODTLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = PurchaseOrderDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PurchaseOrderDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PurchaseOrderDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the po_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PurchaseOrderDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PurchaseOrderDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or PurchaseOrderDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PurchaseOrderDetail object
        }


        // Set the correct dbName
        $query = PurchaseOrderDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PurchaseOrderDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
PurchaseOrderDetailTableMap::buildTableMap();
