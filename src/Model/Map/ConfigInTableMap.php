<?php

namespace Map;

use \ConfigIn;
use \ConfigInQuery;
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
 * This class defines the structure of the 'in_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ConfigInTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.ConfigInTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'in_config';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ConfigIn';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\ConfigIn';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'ConfigIn';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 174;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 174;

    /**
     * the column name for the IntbConfKey field
     */
    public const COL_INTBCONFKEY = 'in_config.IntbConfKey';

    /**
     * the column name for the IntbConfGlIfac field
     */
    public const COL_INTBCONFGLIFAC = 'in_config.IntbConfGlIfac';

    /**
     * the column name for the IntbConfUseIw field
     */
    public const COL_INTBCONFUSEIW = 'in_config.IntbConfUseIw';

    /**
     * the column name for the IntbConfLifoFifo field
     */
    public const COL_INTBCONFLIFOFIFO = 'in_config.IntbConfLifoFifo';

    /**
     * the column name for the IntbConfGoNeg field
     */
    public const COL_INTBCONFGONEG = 'in_config.IntbConfGoNeg';

    /**
     * the column name for the IntbConfUseLots field
     */
    public const COL_INTBCONFUSELOTS = 'in_config.IntbConfUseLots';

    /**
     * the column name for the IntbConfNbrUppr field
     */
    public const COL_INTBCONFNBRUPPR = 'in_config.IntbConfNbrUppr';

    /**
     * the column name for the IntbConfDescUppr field
     */
    public const COL_INTBCONFDESCUPPR = 'in_config.IntbConfDescUppr';

    /**
     * the column name for the IntbConfUseDesc2 field
     */
    public const COL_INTBCONFUSEDESC2 = 'in_config.IntbConfUseDesc2';

    /**
     * the column name for the IntbConfUseUpcCode field
     */
    public const COL_INTBCONFUSEUPCCODE = 'in_config.IntbConfUseUpcCode';

    /**
     * the column name for the IntbConfUpcEanCntrl field
     */
    public const COL_INTBCONFUPCEANCNTRL = 'in_config.IntbConfUpcEanCntrl';

    /**
     * the column name for the IntbConfUpcGenNbr field
     */
    public const COL_INTBCONFUPCGENNBR = 'in_config.IntbConfUpcGenNbr';

    /**
     * the column name for the IntbCon2AllowDupUpc field
     */
    public const COL_INTBCON2ALLOWDUPUPC = 'in_config.IntbCon2AllowDupUpc';

    /**
     * the column name for the IntbConfXrefNoSpace field
     */
    public const COL_INTBCONFXREFNOSPACE = 'in_config.IntbConfXrefNoSpace';

    /**
     * the column name for the IntbConfUsePricGrup field
     */
    public const COL_INTBCONFUSEPRICGRUP = 'in_config.IntbConfUsePricGrup';

    /**
     * the column name for the IntbConfUseCommGrup field
     */
    public const COL_INTBCONFUSECOMMGRUP = 'in_config.IntbConfUseCommGrup';

    /**
     * the column name for the IntbConfUseWarrDays field
     */
    public const COL_INTBCONFUSEWARRDAYS = 'in_config.IntbConfUseWarrDays';

    /**
     * the column name for the IntbConfStanBaseDef field
     */
    public const COL_INTBCONFSTANBASEDEF = 'in_config.IntbConfStanBaseDef';

    /**
     * the column name for the IntbConfGrupDef field
     */
    public const COL_INTBCONFGRUPDEF = 'in_config.IntbConfGrupDef';

    /**
     * the column name for the IntbConfPricGrupDef field
     */
    public const COL_INTBCONFPRICGRUPDEF = 'in_config.IntbConfPricGrupDef';

    /**
     * the column name for the IntbConfCommGrupDef field
     */
    public const COL_INTBCONFCOMMGRUPDEF = 'in_config.IntbConfCommGrupDef';

    /**
     * the column name for the IntbConfTypeDef field
     */
    public const COL_INTBCONFTYPEDEF = 'in_config.IntbConfTypeDef';

    /**
     * the column name for the IntbConfMultiLotRef field
     */
    public const COL_INTBCONFMULTILOTREF = 'in_config.IntbConfMultiLotRef';

    /**
     * the column name for the IntbConfPricUseItem field
     */
    public const COL_INTBCONFPRICUSEITEM = 'in_config.IntbConfPricUseItem';

    /**
     * the column name for the IntbConfCommUseItem field
     */
    public const COL_INTBCONFCOMMUSEITEM = 'in_config.IntbConfCommUseItem';

    /**
     * the column name for the IntbConfUomSaleDef field
     */
    public const COL_INTBCONFUOMSALEDEF = 'in_config.IntbConfUomSaleDef';

    /**
     * the column name for the IntbConfUomPurDef field
     */
    public const COL_INTBCONFUOMPURDEF = 'in_config.IntbConfUomPurDef';

    /**
     * the column name for the IntbConfSviaDef field
     */
    public const COL_INTBCONFSVIADEF = 'in_config.IntbConfSviaDef';

    /**
     * the column name for the IntbConfCustxrefOrUse field
     */
    public const COL_INTBCONFCUSTXREFORUSE = 'in_config.IntbConfCustxrefOrUse';

    /**
     * the column name for the IntbConfHeadGetDef field
     */
    public const COL_INTBCONFHEADGETDEF = 'in_config.IntbConfHeadGetDef';

    /**
     * the column name for the IntbConfItemGetDef field
     */
    public const COL_INTBCONFITEMGETDEF = 'in_config.IntbConfItemGetDef';

    /**
     * the column name for the IntbConfGetDispOhAval field
     */
    public const COL_INTBCONFGETDISPOHAVAL = 'in_config.IntbConfGetDispOhAval';

    /**
     * the column name for the IntbConfUserCode1Labl field
     */
    public const COL_INTBCONFUSERCODE1LABL = 'in_config.IntbConfUserCode1Labl';

    /**
     * the column name for the IntbConfUserCode1Ver field
     */
    public const COL_INTBCONFUSERCODE1VER = 'in_config.IntbConfUserCode1Ver';

    /**
     * the column name for the IntbConfUserCode2Labl field
     */
    public const COL_INTBCONFUSERCODE2LABL = 'in_config.IntbConfUserCode2Labl';

    /**
     * the column name for the IntbConfUserCode2Ver field
     */
    public const COL_INTBCONFUSERCODE2VER = 'in_config.IntbConfUserCode2Ver';

    /**
     * the column name for the IntbConfItemLine field
     */
    public const COL_INTBCONFITEMLINE = 'in_config.IntbConfItemLine';

    /**
     * the column name for the IntbConfItemCols field
     */
    public const COL_INTBCONFITEMCOLS = 'in_config.IntbConfItemCols';

    /**
     * the column name for the IntbConfHeadLine field
     */
    public const COL_INTBCONFHEADLINE = 'in_config.IntbConfHeadLine';

    /**
     * the column name for the IntbConfHeadCols field
     */
    public const COL_INTBCONFHEADCOLS = 'in_config.IntbConfHeadCols';

    /**
     * the column name for the IntbConfDetLine field
     */
    public const COL_INTBCONFDETLINE = 'in_config.IntbConfDetLine';

    /**
     * the column name for the IntbConfDetCols field
     */
    public const COL_INTBCONFDETCOLS = 'in_config.IntbConfDetCols';

    /**
     * the column name for the IntbConfMinMaxZero field
     */
    public const COL_INTBCONFMINMAXZERO = 'in_config.IntbConfMinMaxZero';

    /**
     * the column name for the IntbConfMinRec field
     */
    public const COL_INTBCONFMINREC = 'in_config.IntbConfMinRec';

    /**
     * the column name for the IntbConfAtBelowMin field
     */
    public const COL_INTBCONFATBELOWMIN = 'in_config.IntbConfAtBelowMin';

    /**
     * the column name for the IntbConfOneWhse field
     */
    public const COL_INTBCONFONEWHSE = 'in_config.IntbConfOneWhse';

    /**
     * the column name for the IntbConfYtdMth field
     */
    public const COL_INTBCONFYTDMTH = 'in_config.IntbConfYtdMth';

    /**
     * the column name for the IntbConfUseGramsLtr field
     */
    public const COL_INTBCONFUSEGRAMSLTR = 'in_config.IntbConfUseGramsLtr';

    /**
     * the column name for the IntbConfAbcByWhse field
     */
    public const COL_INTBCONFABCBYWHSE = 'in_config.IntbConfAbcByWhse';

    /**
     * the column name for the IntbConfAbcNbrMths field
     */
    public const COL_INTBCONFABCNBRMTHS = 'in_config.IntbConfAbcNbrMths';

    /**
     * the column name for the IntbConfAbcBaseCode field
     */
    public const COL_INTBCONFABCBASECODE = 'in_config.IntbConfAbcBaseCode';

    /**
     * the column name for the IntbConfAbcLevlA field
     */
    public const COL_INTBCONFABCLEVLA = 'in_config.IntbConfAbcLevlA';

    /**
     * the column name for the IntbConfAbcLevlB field
     */
    public const COL_INTBCONFABCLEVLB = 'in_config.IntbConfAbcLevlB';

    /**
     * the column name for the IntbConfAbcLevlC field
     */
    public const COL_INTBCONFABCLEVLC = 'in_config.IntbConfAbcLevlC';

    /**
     * the column name for the IntbConfAbcLevlD field
     */
    public const COL_INTBCONFABCLEVLD = 'in_config.IntbConfAbcLevlD';

    /**
     * the column name for the IntbConfAbcLevlE field
     */
    public const COL_INTBCONFABCLEVLE = 'in_config.IntbConfAbcLevlE';

    /**
     * the column name for the IntbConfAbcLevlF field
     */
    public const COL_INTBCONFABCLEVLF = 'in_config.IntbConfAbcLevlF';

    /**
     * the column name for the IntbConfAbcLevlG field
     */
    public const COL_INTBCONFABCLEVLG = 'in_config.IntbConfAbcLevlG';

    /**
     * the column name for the IntbConfAbcLevlH field
     */
    public const COL_INTBCONFABCLEVLH = 'in_config.IntbConfAbcLevlH';

    /**
     * the column name for the IntbConfAbcLevlI field
     */
    public const COL_INTBCONFABCLEVLI = 'in_config.IntbConfAbcLevlI';

    /**
     * the column name for the IntbConfAbcLevlJ field
     */
    public const COL_INTBCONFABCLEVLJ = 'in_config.IntbConfAbcLevlJ';

    /**
     * the column name for the IntbConfUseForeignX field
     */
    public const COL_INTBCONFUSEFOREIGNX = 'in_config.IntbConfUseForeignX';

    /**
     * the column name for the IntbConfUseNafta field
     */
    public const COL_INTBCONFUSENAFTA = 'in_config.IntbConfUseNafta';

    /**
     * the column name for the IntbConfNaftaPrefCode field
     */
    public const COL_INTBCONFNAFTAPREFCODE = 'in_config.IntbConfNaftaPrefCode';

    /**
     * the column name for the IntbConfNaftaProducer field
     */
    public const COL_INTBCONFNAFTAPRODUCER = 'in_config.IntbConfNaftaProducer';

    /**
     * the column name for the IntbConfNaftaDocCode field
     */
    public const COL_INTBCONFNAFTADOCCODE = 'in_config.IntbConfNaftaDocCode';

    /**
     * the column name for the IntbConfPhysCurrWksh field
     */
    public const COL_INTBCONFPHYSCURRWKSH = 'in_config.IntbConfPhysCurrWksh';

    /**
     * the column name for the IntbConf20Or30 field
     */
    public const COL_INTBCONF20OR30 = 'in_config.IntbConf20Or30';

    /**
     * the column name for the IntbConfDispOrigCnt field
     */
    public const COL_INTBCONFDISPORIGCNT = 'in_config.IntbConfDispOrigCnt';

    /**
     * the column name for the IntbConfDispGl field
     */
    public const COL_INTBCONFDISPGL = 'in_config.IntbConfDispGl';

    /**
     * the column name for the IntbConfDispRef field
     */
    public const COL_INTBCONFDISPREF = 'in_config.IntbConfDispRef';

    /**
     * the column name for the IntbConfDispCost field
     */
    public const COL_INTBCONFDISPCOST = 'in_config.IntbConfDispCost';

    /**
     * the column name for the IntbConfPrtVal field
     */
    public const COL_INTBCONFPRTVAL = 'in_config.IntbConfPrtVal';

    /**
     * the column name for the IntbConfPrtGl field
     */
    public const COL_INTBCONFPRTGL = 'in_config.IntbConfPrtGl';

    /**
     * the column name for the IntbConfGlAcct field
     */
    public const COL_INTBCONFGLACCT = 'in_config.IntbConfGlAcct';

    /**
     * the column name for the IntbConfRef field
     */
    public const COL_INTBCONFREF = 'in_config.IntbConfRef';

    /**
     * the column name for the IntbConfCostType field
     */
    public const COL_INTBCONFCOSTTYPE = 'in_config.IntbConfCostType';

    /**
     * the column name for the IntbConfNormalOnly field
     */
    public const COL_INTBCONFNORMALONLY = 'in_config.IntbConfNormalOnly';

    /**
     * the column name for the IntbConfUseWhseDef field
     */
    public const COL_INTBCONFUSEWHSEDEF = 'in_config.IntbConfUseWhseDef';

    /**
     * the column name for the IntbCon2DfltWhse01 field
     */
    public const COL_INTBCON2DFLTWHSE01 = 'in_config.IntbCon2DfltWhse01';

    /**
     * the column name for the IntbCon2DfltWhse02 field
     */
    public const COL_INTBCON2DFLTWHSE02 = 'in_config.IntbCon2DfltWhse02';

    /**
     * the column name for the IntbCon2DfltWhse03 field
     */
    public const COL_INTBCON2DFLTWHSE03 = 'in_config.IntbCon2DfltWhse03';

    /**
     * the column name for the IntbCon2DfltWhse04 field
     */
    public const COL_INTBCON2DFLTWHSE04 = 'in_config.IntbCon2DfltWhse04';

    /**
     * the column name for the IntbCon2DfltWhse05 field
     */
    public const COL_INTBCON2DFLTWHSE05 = 'in_config.IntbCon2DfltWhse05';

    /**
     * the column name for the IntbCon2DfltWhse06 field
     */
    public const COL_INTBCON2DFLTWHSE06 = 'in_config.IntbCon2DfltWhse06';

    /**
     * the column name for the IntbCon2DfltWhse07 field
     */
    public const COL_INTBCON2DFLTWHSE07 = 'in_config.IntbCon2DfltWhse07';

    /**
     * the column name for the IntbCon2DfltWhse08 field
     */
    public const COL_INTBCON2DFLTWHSE08 = 'in_config.IntbCon2DfltWhse08';

    /**
     * the column name for the IntbCon2DfltWhse09 field
     */
    public const COL_INTBCON2DFLTWHSE09 = 'in_config.IntbCon2DfltWhse09';

    /**
     * the column name for the IntbCon2DfltWhse10 field
     */
    public const COL_INTBCON2DFLTWHSE10 = 'in_config.IntbCon2DfltWhse10';

    /**
     * the column name for the IntbConfBinDef field
     */
    public const COL_INTBCONFBINDEF = 'in_config.IntbConfBinDef';

    /**
     * the column name for the IntbConfCyclDef field
     */
    public const COL_INTBCONFCYCLDEF = 'in_config.IntbConfCyclDef';

    /**
     * the column name for the IntbConfStatDef field
     */
    public const COL_INTBCONFSTATDEF = 'in_config.IntbConfStatDef';

    /**
     * the column name for the IntbConfAbcDef field
     */
    public const COL_INTBCONFABCDEF = 'in_config.IntbConfAbcDef';

    /**
     * the column name for the IntbConfSpecOrdrDef field
     */
    public const COL_INTBCONFSPECORDRDEF = 'in_config.IntbConfSpecOrdrDef';

    /**
     * the column name for the IntbConfOrdrPntDef field
     */
    public const COL_INTBCONFORDRPNTDEF = 'in_config.IntbConfOrdrPntDef';

    /**
     * the column name for the IntbConfMaxDef field
     */
    public const COL_INTBCONFMAXDEF = 'in_config.IntbConfMaxDef';

    /**
     * the column name for the IntbConfOrdrQtyDef field
     */
    public const COL_INTBCONFORDRQTYDEF = 'in_config.IntbConfOrdrQtyDef';

    /**
     * the column name for the IntbConfTrcptAllowCmpl field
     */
    public const COL_INTBCONFTRCPTALLOWCMPL = 'in_config.IntbConfTrcptAllowCmpl';

    /**
     * the column name for the IntbConfTreCmmtStock field
     */
    public const COL_INTBCONFTRECMMTSTOCK = 'in_config.IntbConfTreCmmtStock';

    /**
     * the column name for the IntbConfUseFrtIn field
     */
    public const COL_INTBCONFUSEFRTIN = 'in_config.IntbConfUseFrtIn';

    /**
     * the column name for the IntbConfEachOrUom field
     */
    public const COL_INTBCONFEACHORUOM = 'in_config.IntbConfEachOrUom';

    /**
     * the column name for the IntbConfNegLotCorr field
     */
    public const COL_INTBCONFNEGLOTCORR = 'in_config.IntbConfNegLotCorr';

    /**
     * the column name for the IntbConfTrnsGlAcct field
     */
    public const COL_INTBCONFTRNSGLACCT = 'in_config.IntbConfTrnsGlAcct';

    /**
     * the column name for the IntbConfTrnsProtStock field
     */
    public const COL_INTBCONFTRNSPROTSTOCK = 'in_config.IntbConfTrnsProtStock';

    /**
     * the column name for the IntbConfNumericItem field
     */
    public const COL_INTBCONFNUMERICITEM = 'in_config.IntbConfNumericItem';

    /**
     * the column name for the IntbConfItemDigits field
     */
    public const COL_INTBCONFITEMDIGITS = 'in_config.IntbConfItemDigits';

    /**
     * the column name for the IntbConfSingleWhse field
     */
    public const COL_INTBCONFSINGLEWHSE = 'in_config.IntbConfSingleWhse';

    /**
     * the column name for the IntbConfUpdUsePct field
     */
    public const COL_INTBCONFUPDUSEPCT = 'in_config.IntbConfUpdUsePct';

    /**
     * the column name for the IntbConfUpdPric field
     */
    public const COL_INTBCONFUPDPRIC = 'in_config.IntbConfUpdPric';

    /**
     * the column name for the IntbConfUpdStdCost field
     */
    public const COL_INTBCONFUPDSTDCOST = 'in_config.IntbConfUpdStdCost';

    /**
     * the column name for the IntbConfUpdXrefCost field
     */
    public const COL_INTBCONFUPDXREFCOST = 'in_config.IntbConfUpdXrefCost';

    /**
     * the column name for the IntbConfIqpaUpdDate field
     */
    public const COL_INTBCONFIQPAUPDDATE = 'in_config.IntbConfIqpaUpdDate';

    /**
     * the column name for the IntbConfUpcXrefOptn field
     */
    public const COL_INTBCONFUPCXREFOPTN = 'in_config.IntbConfUpcXrefOptn';

    /**
     * the column name for the IntbConfTranViewLIB field
     */
    public const COL_INTBCONFTRANVIEWLIB = 'in_config.IntbConfTranViewLIB';

    /**
     * the column name for the IntbConfResvCost field
     */
    public const COL_INTBCONFRESVCOST = 'in_config.IntbConfResvCost';

    /**
     * the column name for the IntbCon2TranZeroRqst field
     */
    public const COL_INTBCON2TRANZERORQST = 'in_config.IntbCon2TranZeroRqst';

    /**
     * the column name for the IntbConfMonEndAdjDate field
     */
    public const COL_INTBCONFMONENDADJDATE = 'in_config.IntbConfMonEndAdjDate';

    /**
     * the column name for the IntbConfMonEndTrnDate field
     */
    public const COL_INTBCONFMONENDTRNDATE = 'in_config.IntbConfMonEndTrnDate';

    /**
     * the column name for the IntbConfMonEndLogDate field
     */
    public const COL_INTBCONFMONENDLOGDATE = 'in_config.IntbConfMonEndLogDate';

    /**
     * the column name for the IntbConfDStatProc field
     */
    public const COL_INTBCONFDSTATPROC = 'in_config.IntbConfDStatProc';

    /**
     * the column name for the IntbConfStanCostUpd field
     */
    public const COL_INTBCONFSTANCOSTUPD = 'in_config.IntbConfStanCostUpd';

    /**
     * the column name for the IntbConfLastCost field
     */
    public const COL_INTBCONFLASTCOST = 'in_config.IntbConfLastCost';

    /**
     * the column name for the IntbConfUseSOrGPct field
     */
    public const COL_INTBCONFUSESORGPCT = 'in_config.IntbConfUseSOrGPct';

    /**
     * the column name for the IntbConfAddOnStan field
     */
    public const COL_INTBCONFADDONSTAN = 'in_config.IntbConfAddOnStan';

    /**
     * the column name for the IntbConfStdCostError field
     */
    public const COL_INTBCONFSTDCOSTERROR = 'in_config.IntbConfStdCostError';

    /**
     * the column name for the IntbConfAvgCurrFive field
     */
    public const COL_INTBCONFAVGCURRFIVE = 'in_config.IntbConfAvgCurrFive';

    /**
     * the column name for the IntbConfUseCntrlBin field
     */
    public const COL_INTBCONFUSECNTRLBIN = 'in_config.IntbConfUseCntrlBin';

    /**
     * the column name for the IntbConfNbrBinAreas field
     */
    public const COL_INTBCONFNBRBINAREAS = 'in_config.IntbConfNbrBinAreas';

    /**
     * the column name for the IntbConfUseMultBin field
     */
    public const COL_INTBCONFUSEMULTBIN = 'in_config.IntbConfUseMultBin';

    /**
     * the column name for the IntbConfDfltWhseBin field
     */
    public const COL_INTBCONFDFLTWHSEBIN = 'in_config.IntbConfDfltWhseBin';

    /**
     * the column name for the IntbConfDfltBin field
     */
    public const COL_INTBCONFDFLTBIN = 'in_config.IntbConfDfltBin';

    /**
     * the column name for the IntbConfCtryItemLot field
     */
    public const COL_INTBCONFCTRYITEMLOT = 'in_config.IntbConfCtryItemLot';

    /**
     * the column name for the IntbConfUseShipBin field
     */
    public const COL_INTBCONFUSESHIPBIN = 'in_config.IntbConfUseShipBin';

    /**
     * the column name for the IntbCon2PrtBinrLabel field
     */
    public const COL_INTBCON2PRTBINRLABEL = 'in_config.IntbCon2PrtBinrLabel';

    /**
     * the column name for the IntbCon2ItemLookup field
     */
    public const COL_INTBCON2ITEMLOOKUP = 'in_config.IntbCon2ItemLookup';

    /**
     * the column name for the IntbConfIncldCti field
     */
    public const COL_INTBCONFINCLDCTI = 'in_config.IntbConfIncldCti';

    /**
     * the column name for the IntbConfCertImage field
     */
    public const COL_INTBCONFCERTIMAGE = 'in_config.IntbConfCertImage';

    /**
     * the column name for the IntbConfDrawImage field
     */
    public const COL_INTBCONFDRAWIMAGE = 'in_config.IntbConfDrawImage';

    /**
     * the column name for the IntbConfConfirmImage field
     */
    public const COL_INTBCONFCONFIRMIMAGE = 'in_config.IntbConfConfirmImage';

    /**
     * the column name for the IntbCon2ProductImage field
     */
    public const COL_INTBCON2PRODUCTIMAGE = 'in_config.IntbCon2ProductImage';

    /**
     * the column name for the IntbConfDefPick field
     */
    public const COL_INTBCONFDEFPICK = 'in_config.IntbConfDefPick';

    /**
     * the column name for the IntbConfDefPack field
     */
    public const COL_INTBCONFDEFPACK = 'in_config.IntbConfDefPack';

    /**
     * the column name for the IntbConfDefInvc field
     */
    public const COL_INTBCONFDEFINVC = 'in_config.IntbConfDefInvc';

    /**
     * the column name for the IntbConfDefAck field
     */
    public const COL_INTBCONFDEFACK = 'in_config.IntbConfDefAck';

    /**
     * the column name for the IntbConfDefQuot field
     */
    public const COL_INTBCONFDEFQUOT = 'in_config.IntbConfDefQuot';

    /**
     * the column name for the IntbConfDefPo field
     */
    public const COL_INTBCONFDEFPO = 'in_config.IntbConfDefPo';

    /**
     * the column name for the IntbConfDefTrans field
     */
    public const COL_INTBCONFDEFTRANS = 'in_config.IntbConfDefTrans';

    /**
     * the column name for the IntbConfAdjGlCogs field
     */
    public const COL_INTBCONFADJGLCOGS = 'in_config.IntbConfAdjGlCogs';

    /**
     * the column name for the IntbCon2DfltAdjGlAcct field
     */
    public const COL_INTBCON2DFLTADJGLACCT = 'in_config.IntbCon2DfltAdjGlAcct';

    /**
     * the column name for the IntbConfAdjCostBase field
     */
    public const COL_INTBCONFADJCOSTBASE = 'in_config.IntbConfAdjCostBase';

    /**
     * the column name for the IntbConfDfltAdjtBin field
     */
    public const COL_INTBCONFDFLTADJTBIN = 'in_config.IntbConfDfltAdjtBin';

    /**
     * the column name for the IntbConfAdjtBin field
     */
    public const COL_INTBCONFADJTBIN = 'in_config.IntbConfAdjtBin';

    /**
     * the column name for the IntbConfCStockSeq field
     */
    public const COL_INTBCONFCSTOCKSEQ = 'in_config.IntbConfCStockSeq';

    /**
     * the column name for the IntbConfCStockHistDay field
     */
    public const COL_INTBCONFCSTOCKHISTDAY = 'in_config.IntbConfCStockHistDay';

    /**
     * the column name for the IntbConfCStockFormat field
     */
    public const COL_INTBCONFCSTOCKFORMAT = 'in_config.IntbConfCStockFormat';

    /**
     * the column name for the IntbConfCstkExportItem field
     */
    public const COL_INTBCONFCSTKEXPORTITEM = 'in_config.IntbConfCstkExportItem';

    /**
     * the column name for the IntbConfCstkPdmContract field
     */
    public const COL_INTBCONFCSTKPDMCONTRACT = 'in_config.IntbConfCstkPdmContract';

    /**
     * the column name for the IntbCon2ImportSeq field
     */
    public const COL_INTBCON2IMPORTSEQ = 'in_config.IntbCon2ImportSeq';

    /**
     * the column name for the IntbConfStopItemChg field
     */
    public const COL_INTBCONFSTOPITEMCHG = 'in_config.IntbConfStopItemChg';

    /**
     * the column name for the IntbConfAddToMxrfe field
     */
    public const COL_INTBCONFADDTOMXRFE = 'in_config.IntbConfAddToMxrfe';

    /**
     * the column name for the IntbConfMxrfeVendId field
     */
    public const COL_INTBCONFMXRFEVENDID = 'in_config.IntbConfMxrfeVendId';

    /**
     * the column name for the IntbCon2NewIdLabelList field
     */
    public const COL_INTBCON2NEWIDLABELLIST = 'in_config.IntbCon2NewIdLabelList';

    /**
     * the column name for the IntbConfUseFormat field
     */
    public const COL_INTBCONFUSEFORMAT = 'in_config.IntbConfUseFormat';

    /**
     * the column name for the IntbConfDefFormat field
     */
    public const COL_INTBCONFDEFFORMAT = 'in_config.IntbConfDefFormat';

    /**
     * the column name for the IntbConfSeqShortItem field
     */
    public const COL_INTBCONFSEQSHORTITEM = 'in_config.IntbConfSeqShortItem';

    /**
     * the column name for the IntbConfShortItemLen field
     */
    public const COL_INTBCONFSHORTITEMLEN = 'in_config.IntbConfShortItemLen';

    /**
     * the column name for the IntbConfUseScale field
     */
    public const COL_INTBCONFUSESCALE = 'in_config.IntbConfUseScale';

    /**
     * the column name for the IntbConfStoreWght field
     */
    public const COL_INTBCONFSTOREWGHT = 'in_config.IntbConfStoreWght';

    /**
     * the column name for the IntbConfValidAsstCode field
     */
    public const COL_INTBCONFVALIDASSTCODE = 'in_config.IntbConfValidAsstCode';

    /**
     * the column name for the IntbConfWhiteGoods field
     */
    public const COL_INTBCONFWHITEGOODS = 'in_config.IntbConfWhiteGoods';

    /**
     * the column name for the IntbCon2TransCustId field
     */
    public const COL_INTBCON2TRANSCUSTID = 'in_config.IntbCon2TransCustId';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'in_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'in_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'in_config.dummy';

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
        self::TYPE_PHPNAME       => ['Intbconfkey', 'Intbconfglifac', 'Intbconfuseiw', 'Intbconflifofifo', 'Intbconfgoneg', 'Intbconfuselots', 'Intbconfnbruppr', 'Intbconfdescuppr', 'Intbconfusedesc2', 'Intbconfuseupccode', 'Intbconfupceancntrl', 'Intbconfupcgennbr', 'Intbcon2allowdupupc', 'Intbconfxrefnospace', 'Intbconfusepricgrup', 'Intbconfusecommgrup', 'Intbconfusewarrdays', 'Intbconfstanbasedef', 'Intbconfgrupdef', 'Intbconfpricgrupdef', 'Intbconfcommgrupdef', 'Intbconftypedef', 'Intbconfmultilotref', 'Intbconfpricuseitem', 'Intbconfcommuseitem', 'Intbconfuomsaledef', 'Intbconfuompurdef', 'Intbconfsviadef', 'Intbconfcustxreforuse', 'Intbconfheadgetdef', 'Intbconfitemgetdef', 'Intbconfgetdispohaval', 'Intbconfusercode1labl', 'Intbconfusercode1ver', 'Intbconfusercode2labl', 'Intbconfusercode2ver', 'Intbconfitemline', 'Intbconfitemcols', 'Intbconfheadline', 'Intbconfheadcols', 'Intbconfdetline', 'Intbconfdetcols', 'Intbconfminmaxzero', 'Intbconfminrec', 'Intbconfatbelowmin', 'Intbconfonewhse', 'Intbconfytdmth', 'Intbconfusegramsltr', 'Intbconfabcbywhse', 'Intbconfabcnbrmths', 'Intbconfabcbasecode', 'Intbconfabclevla', 'Intbconfabclevlb', 'Intbconfabclevlc', 'Intbconfabclevld', 'Intbconfabclevle', 'Intbconfabclevlf', 'Intbconfabclevlg', 'Intbconfabclevlh', 'Intbconfabclevli', 'Intbconfabclevlj', 'Intbconfuseforeignx', 'Intbconfusenafta', 'Intbconfnaftaprefcode', 'Intbconfnaftaproducer', 'Intbconfnaftadoccode', 'Intbconfphyscurrwksh', 'Intbconf20or30', 'Intbconfdisporigcnt', 'Intbconfdispgl', 'Intbconfdispref', 'Intbconfdispcost', 'Intbconfprtval', 'Intbconfprtgl', 'Intbconfglacct', 'Intbconfref', 'Intbconfcosttype', 'Intbconfnormalonly', 'Intbconfusewhsedef', 'Intbcon2dfltwhse01', 'Intbcon2dfltwhse02', 'Intbcon2dfltwhse03', 'Intbcon2dfltwhse04', 'Intbcon2dfltwhse05', 'Intbcon2dfltwhse06', 'Intbcon2dfltwhse07', 'Intbcon2dfltwhse08', 'Intbcon2dfltwhse09', 'Intbcon2dfltwhse10', 'Intbconfbindef', 'Intbconfcycldef', 'Intbconfstatdef', 'Intbconfabcdef', 'Intbconfspecordrdef', 'Intbconfordrpntdef', 'Intbconfmaxdef', 'Intbconfordrqtydef', 'Intbconftrcptallowcmpl', 'Intbconftrecmmtstock', 'Intbconfusefrtin', 'Intbconfeachoruom', 'Intbconfneglotcorr', 'Intbconftrnsglacct', 'Intbconftrnsprotstock', 'Intbconfnumericitem', 'Intbconfitemdigits', 'Intbconfsinglewhse', 'Intbconfupdusepct', 'Intbconfupdpric', 'Intbconfupdstdcost', 'Intbconfupdxrefcost', 'Intbconfiqpaupddate', 'Intbconfupcxrefoptn', 'Intbconftranviewlib', 'Intbconfresvcost', 'Intbcon2tranzerorqst', 'Intbconfmonendadjdate', 'Intbconfmonendtrndate', 'Intbconfmonendlogdate', 'Intbconfdstatproc', 'Intbconfstancostupd', 'Intbconflastcost', 'Intbconfusesorgpct', 'Intbconfaddonstan', 'Intbconfstdcosterror', 'Intbconfavgcurrfive', 'Intbconfusecntrlbin', 'Intbconfnbrbinareas', 'Intbconfusemultbin', 'Intbconfdfltwhsebin', 'Intbconfdfltbin', 'Intbconfctryitemlot', 'Intbconfuseshipbin', 'Intbcon2prtbinrlabel', 'Intbcon2itemlookup', 'Intbconfincldcti', 'Intbconfcertimage', 'Intbconfdrawimage', 'Intbconfconfirmimage', 'Intbcon2productimage', 'Intbconfdefpick', 'Intbconfdefpack', 'Intbconfdefinvc', 'Intbconfdefack', 'Intbconfdefquot', 'Intbconfdefpo', 'Intbconfdeftrans', 'Intbconfadjglcogs', 'Intbcon2dfltadjglacct', 'Intbconfadjcostbase', 'Intbconfdfltadjtbin', 'Intbconfadjtbin', 'Intbconfcstockseq', 'Intbconfcstockhistday', 'Intbconfcstockformat', 'Intbconfcstkexportitem', 'Intbconfcstkpdmcontract', 'Intbcon2importseq', 'Intbconfstopitemchg', 'Intbconfaddtomxrfe', 'Intbconfmxrfevendid', 'Intbcon2newidlabellist', 'Intbconfuseformat', 'Intbconfdefformat', 'Intbconfseqshortitem', 'Intbconfshortitemlen', 'Intbconfusescale', 'Intbconfstorewght', 'Intbconfvalidasstcode', 'Intbconfwhitegoods', 'Intbcon2transcustid', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['intbconfkey', 'intbconfglifac', 'intbconfuseiw', 'intbconflifofifo', 'intbconfgoneg', 'intbconfuselots', 'intbconfnbruppr', 'intbconfdescuppr', 'intbconfusedesc2', 'intbconfuseupccode', 'intbconfupceancntrl', 'intbconfupcgennbr', 'intbcon2allowdupupc', 'intbconfxrefnospace', 'intbconfusepricgrup', 'intbconfusecommgrup', 'intbconfusewarrdays', 'intbconfstanbasedef', 'intbconfgrupdef', 'intbconfpricgrupdef', 'intbconfcommgrupdef', 'intbconftypedef', 'intbconfmultilotref', 'intbconfpricuseitem', 'intbconfcommuseitem', 'intbconfuomsaledef', 'intbconfuompurdef', 'intbconfsviadef', 'intbconfcustxreforuse', 'intbconfheadgetdef', 'intbconfitemgetdef', 'intbconfgetdispohaval', 'intbconfusercode1labl', 'intbconfusercode1ver', 'intbconfusercode2labl', 'intbconfusercode2ver', 'intbconfitemline', 'intbconfitemcols', 'intbconfheadline', 'intbconfheadcols', 'intbconfdetline', 'intbconfdetcols', 'intbconfminmaxzero', 'intbconfminrec', 'intbconfatbelowmin', 'intbconfonewhse', 'intbconfytdmth', 'intbconfusegramsltr', 'intbconfabcbywhse', 'intbconfabcnbrmths', 'intbconfabcbasecode', 'intbconfabclevla', 'intbconfabclevlb', 'intbconfabclevlc', 'intbconfabclevld', 'intbconfabclevle', 'intbconfabclevlf', 'intbconfabclevlg', 'intbconfabclevlh', 'intbconfabclevli', 'intbconfabclevlj', 'intbconfuseforeignx', 'intbconfusenafta', 'intbconfnaftaprefcode', 'intbconfnaftaproducer', 'intbconfnaftadoccode', 'intbconfphyscurrwksh', 'intbconf20or30', 'intbconfdisporigcnt', 'intbconfdispgl', 'intbconfdispref', 'intbconfdispcost', 'intbconfprtval', 'intbconfprtgl', 'intbconfglacct', 'intbconfref', 'intbconfcosttype', 'intbconfnormalonly', 'intbconfusewhsedef', 'intbcon2dfltwhse01', 'intbcon2dfltwhse02', 'intbcon2dfltwhse03', 'intbcon2dfltwhse04', 'intbcon2dfltwhse05', 'intbcon2dfltwhse06', 'intbcon2dfltwhse07', 'intbcon2dfltwhse08', 'intbcon2dfltwhse09', 'intbcon2dfltwhse10', 'intbconfbindef', 'intbconfcycldef', 'intbconfstatdef', 'intbconfabcdef', 'intbconfspecordrdef', 'intbconfordrpntdef', 'intbconfmaxdef', 'intbconfordrqtydef', 'intbconftrcptallowcmpl', 'intbconftrecmmtstock', 'intbconfusefrtin', 'intbconfeachoruom', 'intbconfneglotcorr', 'intbconftrnsglacct', 'intbconftrnsprotstock', 'intbconfnumericitem', 'intbconfitemdigits', 'intbconfsinglewhse', 'intbconfupdusepct', 'intbconfupdpric', 'intbconfupdstdcost', 'intbconfupdxrefcost', 'intbconfiqpaupddate', 'intbconfupcxrefoptn', 'intbconftranviewlib', 'intbconfresvcost', 'intbcon2tranzerorqst', 'intbconfmonendadjdate', 'intbconfmonendtrndate', 'intbconfmonendlogdate', 'intbconfdstatproc', 'intbconfstancostupd', 'intbconflastcost', 'intbconfusesorgpct', 'intbconfaddonstan', 'intbconfstdcosterror', 'intbconfavgcurrfive', 'intbconfusecntrlbin', 'intbconfnbrbinareas', 'intbconfusemultbin', 'intbconfdfltwhsebin', 'intbconfdfltbin', 'intbconfctryitemlot', 'intbconfuseshipbin', 'intbcon2prtbinrlabel', 'intbcon2itemlookup', 'intbconfincldcti', 'intbconfcertimage', 'intbconfdrawimage', 'intbconfconfirmimage', 'intbcon2productimage', 'intbconfdefpick', 'intbconfdefpack', 'intbconfdefinvc', 'intbconfdefack', 'intbconfdefquot', 'intbconfdefpo', 'intbconfdeftrans', 'intbconfadjglcogs', 'intbcon2dfltadjglacct', 'intbconfadjcostbase', 'intbconfdfltadjtbin', 'intbconfadjtbin', 'intbconfcstockseq', 'intbconfcstockhistday', 'intbconfcstockformat', 'intbconfcstkexportitem', 'intbconfcstkpdmcontract', 'intbcon2importseq', 'intbconfstopitemchg', 'intbconfaddtomxrfe', 'intbconfmxrfevendid', 'intbcon2newidlabellist', 'intbconfuseformat', 'intbconfdefformat', 'intbconfseqshortitem', 'intbconfshortitemlen', 'intbconfusescale', 'intbconfstorewght', 'intbconfvalidasstcode', 'intbconfwhitegoods', 'intbcon2transcustid', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [ConfigInTableMap::COL_INTBCONFKEY, ConfigInTableMap::COL_INTBCONFGLIFAC, ConfigInTableMap::COL_INTBCONFUSEIW, ConfigInTableMap::COL_INTBCONFLIFOFIFO, ConfigInTableMap::COL_INTBCONFGONEG, ConfigInTableMap::COL_INTBCONFUSELOTS, ConfigInTableMap::COL_INTBCONFNBRUPPR, ConfigInTableMap::COL_INTBCONFDESCUPPR, ConfigInTableMap::COL_INTBCONFUSEDESC2, ConfigInTableMap::COL_INTBCONFUSEUPCCODE, ConfigInTableMap::COL_INTBCONFUPCEANCNTRL, ConfigInTableMap::COL_INTBCONFUPCGENNBR, ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC, ConfigInTableMap::COL_INTBCONFXREFNOSPACE, ConfigInTableMap::COL_INTBCONFUSEPRICGRUP, ConfigInTableMap::COL_INTBCONFUSECOMMGRUP, ConfigInTableMap::COL_INTBCONFUSEWARRDAYS, ConfigInTableMap::COL_INTBCONFSTANBASEDEF, ConfigInTableMap::COL_INTBCONFGRUPDEF, ConfigInTableMap::COL_INTBCONFPRICGRUPDEF, ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF, ConfigInTableMap::COL_INTBCONFTYPEDEF, ConfigInTableMap::COL_INTBCONFMULTILOTREF, ConfigInTableMap::COL_INTBCONFPRICUSEITEM, ConfigInTableMap::COL_INTBCONFCOMMUSEITEM, ConfigInTableMap::COL_INTBCONFUOMSALEDEF, ConfigInTableMap::COL_INTBCONFUOMPURDEF, ConfigInTableMap::COL_INTBCONFSVIADEF, ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE, ConfigInTableMap::COL_INTBCONFHEADGETDEF, ConfigInTableMap::COL_INTBCONFITEMGETDEF, ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL, ConfigInTableMap::COL_INTBCONFUSERCODE1LABL, ConfigInTableMap::COL_INTBCONFUSERCODE1VER, ConfigInTableMap::COL_INTBCONFUSERCODE2LABL, ConfigInTableMap::COL_INTBCONFUSERCODE2VER, ConfigInTableMap::COL_INTBCONFITEMLINE, ConfigInTableMap::COL_INTBCONFITEMCOLS, ConfigInTableMap::COL_INTBCONFHEADLINE, ConfigInTableMap::COL_INTBCONFHEADCOLS, ConfigInTableMap::COL_INTBCONFDETLINE, ConfigInTableMap::COL_INTBCONFDETCOLS, ConfigInTableMap::COL_INTBCONFMINMAXZERO, ConfigInTableMap::COL_INTBCONFMINREC, ConfigInTableMap::COL_INTBCONFATBELOWMIN, ConfigInTableMap::COL_INTBCONFONEWHSE, ConfigInTableMap::COL_INTBCONFYTDMTH, ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR, ConfigInTableMap::COL_INTBCONFABCBYWHSE, ConfigInTableMap::COL_INTBCONFABCNBRMTHS, ConfigInTableMap::COL_INTBCONFABCBASECODE, ConfigInTableMap::COL_INTBCONFABCLEVLA, ConfigInTableMap::COL_INTBCONFABCLEVLB, ConfigInTableMap::COL_INTBCONFABCLEVLC, ConfigInTableMap::COL_INTBCONFABCLEVLD, ConfigInTableMap::COL_INTBCONFABCLEVLE, ConfigInTableMap::COL_INTBCONFABCLEVLF, ConfigInTableMap::COL_INTBCONFABCLEVLG, ConfigInTableMap::COL_INTBCONFABCLEVLH, ConfigInTableMap::COL_INTBCONFABCLEVLI, ConfigInTableMap::COL_INTBCONFABCLEVLJ, ConfigInTableMap::COL_INTBCONFUSEFOREIGNX, ConfigInTableMap::COL_INTBCONFUSENAFTA, ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE, ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER, ConfigInTableMap::COL_INTBCONFNAFTADOCCODE, ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH, ConfigInTableMap::COL_INTBCONF20OR30, ConfigInTableMap::COL_INTBCONFDISPORIGCNT, ConfigInTableMap::COL_INTBCONFDISPGL, ConfigInTableMap::COL_INTBCONFDISPREF, ConfigInTableMap::COL_INTBCONFDISPCOST, ConfigInTableMap::COL_INTBCONFPRTVAL, ConfigInTableMap::COL_INTBCONFPRTGL, ConfigInTableMap::COL_INTBCONFGLACCT, ConfigInTableMap::COL_INTBCONFREF, ConfigInTableMap::COL_INTBCONFCOSTTYPE, ConfigInTableMap::COL_INTBCONFNORMALONLY, ConfigInTableMap::COL_INTBCONFUSEWHSEDEF, ConfigInTableMap::COL_INTBCON2DFLTWHSE01, ConfigInTableMap::COL_INTBCON2DFLTWHSE02, ConfigInTableMap::COL_INTBCON2DFLTWHSE03, ConfigInTableMap::COL_INTBCON2DFLTWHSE04, ConfigInTableMap::COL_INTBCON2DFLTWHSE05, ConfigInTableMap::COL_INTBCON2DFLTWHSE06, ConfigInTableMap::COL_INTBCON2DFLTWHSE07, ConfigInTableMap::COL_INTBCON2DFLTWHSE08, ConfigInTableMap::COL_INTBCON2DFLTWHSE09, ConfigInTableMap::COL_INTBCON2DFLTWHSE10, ConfigInTableMap::COL_INTBCONFBINDEF, ConfigInTableMap::COL_INTBCONFCYCLDEF, ConfigInTableMap::COL_INTBCONFSTATDEF, ConfigInTableMap::COL_INTBCONFABCDEF, ConfigInTableMap::COL_INTBCONFSPECORDRDEF, ConfigInTableMap::COL_INTBCONFORDRPNTDEF, ConfigInTableMap::COL_INTBCONFMAXDEF, ConfigInTableMap::COL_INTBCONFORDRQTYDEF, ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL, ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK, ConfigInTableMap::COL_INTBCONFUSEFRTIN, ConfigInTableMap::COL_INTBCONFEACHORUOM, ConfigInTableMap::COL_INTBCONFNEGLOTCORR, ConfigInTableMap::COL_INTBCONFTRNSGLACCT, ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, ConfigInTableMap::COL_INTBCONFNUMERICITEM, ConfigInTableMap::COL_INTBCONFITEMDIGITS, ConfigInTableMap::COL_INTBCONFSINGLEWHSE, ConfigInTableMap::COL_INTBCONFUPDUSEPCT, ConfigInTableMap::COL_INTBCONFUPDPRIC, ConfigInTableMap::COL_INTBCONFUPDSTDCOST, ConfigInTableMap::COL_INTBCONFUPDXREFCOST, ConfigInTableMap::COL_INTBCONFIQPAUPDDATE, ConfigInTableMap::COL_INTBCONFUPCXREFOPTN, ConfigInTableMap::COL_INTBCONFTRANVIEWLIB, ConfigInTableMap::COL_INTBCONFRESVCOST, ConfigInTableMap::COL_INTBCON2TRANZERORQST, ConfigInTableMap::COL_INTBCONFMONENDADJDATE, ConfigInTableMap::COL_INTBCONFMONENDTRNDATE, ConfigInTableMap::COL_INTBCONFMONENDLOGDATE, ConfigInTableMap::COL_INTBCONFDSTATPROC, ConfigInTableMap::COL_INTBCONFSTANCOSTUPD, ConfigInTableMap::COL_INTBCONFLASTCOST, ConfigInTableMap::COL_INTBCONFUSESORGPCT, ConfigInTableMap::COL_INTBCONFADDONSTAN, ConfigInTableMap::COL_INTBCONFSTDCOSTERROR, ConfigInTableMap::COL_INTBCONFAVGCURRFIVE, ConfigInTableMap::COL_INTBCONFUSECNTRLBIN, ConfigInTableMap::COL_INTBCONFNBRBINAREAS, ConfigInTableMap::COL_INTBCONFUSEMULTBIN, ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN, ConfigInTableMap::COL_INTBCONFDFLTBIN, ConfigInTableMap::COL_INTBCONFCTRYITEMLOT, ConfigInTableMap::COL_INTBCONFUSESHIPBIN, ConfigInTableMap::COL_INTBCON2PRTBINRLABEL, ConfigInTableMap::COL_INTBCON2ITEMLOOKUP, ConfigInTableMap::COL_INTBCONFINCLDCTI, ConfigInTableMap::COL_INTBCONFCERTIMAGE, ConfigInTableMap::COL_INTBCONFDRAWIMAGE, ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE, ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE, ConfigInTableMap::COL_INTBCONFDEFPICK, ConfigInTableMap::COL_INTBCONFDEFPACK, ConfigInTableMap::COL_INTBCONFDEFINVC, ConfigInTableMap::COL_INTBCONFDEFACK, ConfigInTableMap::COL_INTBCONFDEFQUOT, ConfigInTableMap::COL_INTBCONFDEFPO, ConfigInTableMap::COL_INTBCONFDEFTRANS, ConfigInTableMap::COL_INTBCONFADJGLCOGS, ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT, ConfigInTableMap::COL_INTBCONFADJCOSTBASE, ConfigInTableMap::COL_INTBCONFDFLTADJTBIN, ConfigInTableMap::COL_INTBCONFADJTBIN, ConfigInTableMap::COL_INTBCONFCSTOCKSEQ, ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT, ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM, ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT, ConfigInTableMap::COL_INTBCON2IMPORTSEQ, ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, ConfigInTableMap::COL_INTBCONFADDTOMXRFE, ConfigInTableMap::COL_INTBCONFMXRFEVENDID, ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST, ConfigInTableMap::COL_INTBCONFUSEFORMAT, ConfigInTableMap::COL_INTBCONFDEFFORMAT, ConfigInTableMap::COL_INTBCONFSEQSHORTITEM, ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, ConfigInTableMap::COL_INTBCONFUSESCALE, ConfigInTableMap::COL_INTBCONFSTOREWGHT, ConfigInTableMap::COL_INTBCONFVALIDASSTCODE, ConfigInTableMap::COL_INTBCONFWHITEGOODS, ConfigInTableMap::COL_INTBCON2TRANSCUSTID, ConfigInTableMap::COL_DATEUPDTD, ConfigInTableMap::COL_TIMEUPDTD, ConfigInTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['IntbConfKey', 'IntbConfGlIfac', 'IntbConfUseIw', 'IntbConfLifoFifo', 'IntbConfGoNeg', 'IntbConfUseLots', 'IntbConfNbrUppr', 'IntbConfDescUppr', 'IntbConfUseDesc2', 'IntbConfUseUpcCode', 'IntbConfUpcEanCntrl', 'IntbConfUpcGenNbr', 'IntbCon2AllowDupUpc', 'IntbConfXrefNoSpace', 'IntbConfUsePricGrup', 'IntbConfUseCommGrup', 'IntbConfUseWarrDays', 'IntbConfStanBaseDef', 'IntbConfGrupDef', 'IntbConfPricGrupDef', 'IntbConfCommGrupDef', 'IntbConfTypeDef', 'IntbConfMultiLotRef', 'IntbConfPricUseItem', 'IntbConfCommUseItem', 'IntbConfUomSaleDef', 'IntbConfUomPurDef', 'IntbConfSviaDef', 'IntbConfCustxrefOrUse', 'IntbConfHeadGetDef', 'IntbConfItemGetDef', 'IntbConfGetDispOhAval', 'IntbConfUserCode1Labl', 'IntbConfUserCode1Ver', 'IntbConfUserCode2Labl', 'IntbConfUserCode2Ver', 'IntbConfItemLine', 'IntbConfItemCols', 'IntbConfHeadLine', 'IntbConfHeadCols', 'IntbConfDetLine', 'IntbConfDetCols', 'IntbConfMinMaxZero', 'IntbConfMinRec', 'IntbConfAtBelowMin', 'IntbConfOneWhse', 'IntbConfYtdMth', 'IntbConfUseGramsLtr', 'IntbConfAbcByWhse', 'IntbConfAbcNbrMths', 'IntbConfAbcBaseCode', 'IntbConfAbcLevlA', 'IntbConfAbcLevlB', 'IntbConfAbcLevlC', 'IntbConfAbcLevlD', 'IntbConfAbcLevlE', 'IntbConfAbcLevlF', 'IntbConfAbcLevlG', 'IntbConfAbcLevlH', 'IntbConfAbcLevlI', 'IntbConfAbcLevlJ', 'IntbConfUseForeignX', 'IntbConfUseNafta', 'IntbConfNaftaPrefCode', 'IntbConfNaftaProducer', 'IntbConfNaftaDocCode', 'IntbConfPhysCurrWksh', 'IntbConf20Or30', 'IntbConfDispOrigCnt', 'IntbConfDispGl', 'IntbConfDispRef', 'IntbConfDispCost', 'IntbConfPrtVal', 'IntbConfPrtGl', 'IntbConfGlAcct', 'IntbConfRef', 'IntbConfCostType', 'IntbConfNormalOnly', 'IntbConfUseWhseDef', 'IntbCon2DfltWhse01', 'IntbCon2DfltWhse02', 'IntbCon2DfltWhse03', 'IntbCon2DfltWhse04', 'IntbCon2DfltWhse05', 'IntbCon2DfltWhse06', 'IntbCon2DfltWhse07', 'IntbCon2DfltWhse08', 'IntbCon2DfltWhse09', 'IntbCon2DfltWhse10', 'IntbConfBinDef', 'IntbConfCyclDef', 'IntbConfStatDef', 'IntbConfAbcDef', 'IntbConfSpecOrdrDef', 'IntbConfOrdrPntDef', 'IntbConfMaxDef', 'IntbConfOrdrQtyDef', 'IntbConfTrcptAllowCmpl', 'IntbConfTreCmmtStock', 'IntbConfUseFrtIn', 'IntbConfEachOrUom', 'IntbConfNegLotCorr', 'IntbConfTrnsGlAcct', 'IntbConfTrnsProtStock', 'IntbConfNumericItem', 'IntbConfItemDigits', 'IntbConfSingleWhse', 'IntbConfUpdUsePct', 'IntbConfUpdPric', 'IntbConfUpdStdCost', 'IntbConfUpdXrefCost', 'IntbConfIqpaUpdDate', 'IntbConfUpcXrefOptn', 'IntbConfTranViewLIB', 'IntbConfResvCost', 'IntbCon2TranZeroRqst', 'IntbConfMonEndAdjDate', 'IntbConfMonEndTrnDate', 'IntbConfMonEndLogDate', 'IntbConfDStatProc', 'IntbConfStanCostUpd', 'IntbConfLastCost', 'IntbConfUseSOrGPct', 'IntbConfAddOnStan', 'IntbConfStdCostError', 'IntbConfAvgCurrFive', 'IntbConfUseCntrlBin', 'IntbConfNbrBinAreas', 'IntbConfUseMultBin', 'IntbConfDfltWhseBin', 'IntbConfDfltBin', 'IntbConfCtryItemLot', 'IntbConfUseShipBin', 'IntbCon2PrtBinrLabel', 'IntbCon2ItemLookup', 'IntbConfIncldCti', 'IntbConfCertImage', 'IntbConfDrawImage', 'IntbConfConfirmImage', 'IntbCon2ProductImage', 'IntbConfDefPick', 'IntbConfDefPack', 'IntbConfDefInvc', 'IntbConfDefAck', 'IntbConfDefQuot', 'IntbConfDefPo', 'IntbConfDefTrans', 'IntbConfAdjGlCogs', 'IntbCon2DfltAdjGlAcct', 'IntbConfAdjCostBase', 'IntbConfDfltAdjtBin', 'IntbConfAdjtBin', 'IntbConfCStockSeq', 'IntbConfCStockHistDay', 'IntbConfCStockFormat', 'IntbConfCstkExportItem', 'IntbConfCstkPdmContract', 'IntbCon2ImportSeq', 'IntbConfStopItemChg', 'IntbConfAddToMxrfe', 'IntbConfMxrfeVendId', 'IntbCon2NewIdLabelList', 'IntbConfUseFormat', 'IntbConfDefFormat', 'IntbConfSeqShortItem', 'IntbConfShortItemLen', 'IntbConfUseScale', 'IntbConfStoreWght', 'IntbConfValidAsstCode', 'IntbConfWhiteGoods', 'IntbCon2TransCustId', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, ]
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
        self::TYPE_PHPNAME       => ['Intbconfkey' => 0, 'Intbconfglifac' => 1, 'Intbconfuseiw' => 2, 'Intbconflifofifo' => 3, 'Intbconfgoneg' => 4, 'Intbconfuselots' => 5, 'Intbconfnbruppr' => 6, 'Intbconfdescuppr' => 7, 'Intbconfusedesc2' => 8, 'Intbconfuseupccode' => 9, 'Intbconfupceancntrl' => 10, 'Intbconfupcgennbr' => 11, 'Intbcon2allowdupupc' => 12, 'Intbconfxrefnospace' => 13, 'Intbconfusepricgrup' => 14, 'Intbconfusecommgrup' => 15, 'Intbconfusewarrdays' => 16, 'Intbconfstanbasedef' => 17, 'Intbconfgrupdef' => 18, 'Intbconfpricgrupdef' => 19, 'Intbconfcommgrupdef' => 20, 'Intbconftypedef' => 21, 'Intbconfmultilotref' => 22, 'Intbconfpricuseitem' => 23, 'Intbconfcommuseitem' => 24, 'Intbconfuomsaledef' => 25, 'Intbconfuompurdef' => 26, 'Intbconfsviadef' => 27, 'Intbconfcustxreforuse' => 28, 'Intbconfheadgetdef' => 29, 'Intbconfitemgetdef' => 30, 'Intbconfgetdispohaval' => 31, 'Intbconfusercode1labl' => 32, 'Intbconfusercode1ver' => 33, 'Intbconfusercode2labl' => 34, 'Intbconfusercode2ver' => 35, 'Intbconfitemline' => 36, 'Intbconfitemcols' => 37, 'Intbconfheadline' => 38, 'Intbconfheadcols' => 39, 'Intbconfdetline' => 40, 'Intbconfdetcols' => 41, 'Intbconfminmaxzero' => 42, 'Intbconfminrec' => 43, 'Intbconfatbelowmin' => 44, 'Intbconfonewhse' => 45, 'Intbconfytdmth' => 46, 'Intbconfusegramsltr' => 47, 'Intbconfabcbywhse' => 48, 'Intbconfabcnbrmths' => 49, 'Intbconfabcbasecode' => 50, 'Intbconfabclevla' => 51, 'Intbconfabclevlb' => 52, 'Intbconfabclevlc' => 53, 'Intbconfabclevld' => 54, 'Intbconfabclevle' => 55, 'Intbconfabclevlf' => 56, 'Intbconfabclevlg' => 57, 'Intbconfabclevlh' => 58, 'Intbconfabclevli' => 59, 'Intbconfabclevlj' => 60, 'Intbconfuseforeignx' => 61, 'Intbconfusenafta' => 62, 'Intbconfnaftaprefcode' => 63, 'Intbconfnaftaproducer' => 64, 'Intbconfnaftadoccode' => 65, 'Intbconfphyscurrwksh' => 66, 'Intbconf20or30' => 67, 'Intbconfdisporigcnt' => 68, 'Intbconfdispgl' => 69, 'Intbconfdispref' => 70, 'Intbconfdispcost' => 71, 'Intbconfprtval' => 72, 'Intbconfprtgl' => 73, 'Intbconfglacct' => 74, 'Intbconfref' => 75, 'Intbconfcosttype' => 76, 'Intbconfnormalonly' => 77, 'Intbconfusewhsedef' => 78, 'Intbcon2dfltwhse01' => 79, 'Intbcon2dfltwhse02' => 80, 'Intbcon2dfltwhse03' => 81, 'Intbcon2dfltwhse04' => 82, 'Intbcon2dfltwhse05' => 83, 'Intbcon2dfltwhse06' => 84, 'Intbcon2dfltwhse07' => 85, 'Intbcon2dfltwhse08' => 86, 'Intbcon2dfltwhse09' => 87, 'Intbcon2dfltwhse10' => 88, 'Intbconfbindef' => 89, 'Intbconfcycldef' => 90, 'Intbconfstatdef' => 91, 'Intbconfabcdef' => 92, 'Intbconfspecordrdef' => 93, 'Intbconfordrpntdef' => 94, 'Intbconfmaxdef' => 95, 'Intbconfordrqtydef' => 96, 'Intbconftrcptallowcmpl' => 97, 'Intbconftrecmmtstock' => 98, 'Intbconfusefrtin' => 99, 'Intbconfeachoruom' => 100, 'Intbconfneglotcorr' => 101, 'Intbconftrnsglacct' => 102, 'Intbconftrnsprotstock' => 103, 'Intbconfnumericitem' => 104, 'Intbconfitemdigits' => 105, 'Intbconfsinglewhse' => 106, 'Intbconfupdusepct' => 107, 'Intbconfupdpric' => 108, 'Intbconfupdstdcost' => 109, 'Intbconfupdxrefcost' => 110, 'Intbconfiqpaupddate' => 111, 'Intbconfupcxrefoptn' => 112, 'Intbconftranviewlib' => 113, 'Intbconfresvcost' => 114, 'Intbcon2tranzerorqst' => 115, 'Intbconfmonendadjdate' => 116, 'Intbconfmonendtrndate' => 117, 'Intbconfmonendlogdate' => 118, 'Intbconfdstatproc' => 119, 'Intbconfstancostupd' => 120, 'Intbconflastcost' => 121, 'Intbconfusesorgpct' => 122, 'Intbconfaddonstan' => 123, 'Intbconfstdcosterror' => 124, 'Intbconfavgcurrfive' => 125, 'Intbconfusecntrlbin' => 126, 'Intbconfnbrbinareas' => 127, 'Intbconfusemultbin' => 128, 'Intbconfdfltwhsebin' => 129, 'Intbconfdfltbin' => 130, 'Intbconfctryitemlot' => 131, 'Intbconfuseshipbin' => 132, 'Intbcon2prtbinrlabel' => 133, 'Intbcon2itemlookup' => 134, 'Intbconfincldcti' => 135, 'Intbconfcertimage' => 136, 'Intbconfdrawimage' => 137, 'Intbconfconfirmimage' => 138, 'Intbcon2productimage' => 139, 'Intbconfdefpick' => 140, 'Intbconfdefpack' => 141, 'Intbconfdefinvc' => 142, 'Intbconfdefack' => 143, 'Intbconfdefquot' => 144, 'Intbconfdefpo' => 145, 'Intbconfdeftrans' => 146, 'Intbconfadjglcogs' => 147, 'Intbcon2dfltadjglacct' => 148, 'Intbconfadjcostbase' => 149, 'Intbconfdfltadjtbin' => 150, 'Intbconfadjtbin' => 151, 'Intbconfcstockseq' => 152, 'Intbconfcstockhistday' => 153, 'Intbconfcstockformat' => 154, 'Intbconfcstkexportitem' => 155, 'Intbconfcstkpdmcontract' => 156, 'Intbcon2importseq' => 157, 'Intbconfstopitemchg' => 158, 'Intbconfaddtomxrfe' => 159, 'Intbconfmxrfevendid' => 160, 'Intbcon2newidlabellist' => 161, 'Intbconfuseformat' => 162, 'Intbconfdefformat' => 163, 'Intbconfseqshortitem' => 164, 'Intbconfshortitemlen' => 165, 'Intbconfusescale' => 166, 'Intbconfstorewght' => 167, 'Intbconfvalidasstcode' => 168, 'Intbconfwhitegoods' => 169, 'Intbcon2transcustid' => 170, 'Dateupdtd' => 171, 'Timeupdtd' => 172, 'Dummy' => 173, ],
        self::TYPE_CAMELNAME     => ['intbconfkey' => 0, 'intbconfglifac' => 1, 'intbconfuseiw' => 2, 'intbconflifofifo' => 3, 'intbconfgoneg' => 4, 'intbconfuselots' => 5, 'intbconfnbruppr' => 6, 'intbconfdescuppr' => 7, 'intbconfusedesc2' => 8, 'intbconfuseupccode' => 9, 'intbconfupceancntrl' => 10, 'intbconfupcgennbr' => 11, 'intbcon2allowdupupc' => 12, 'intbconfxrefnospace' => 13, 'intbconfusepricgrup' => 14, 'intbconfusecommgrup' => 15, 'intbconfusewarrdays' => 16, 'intbconfstanbasedef' => 17, 'intbconfgrupdef' => 18, 'intbconfpricgrupdef' => 19, 'intbconfcommgrupdef' => 20, 'intbconftypedef' => 21, 'intbconfmultilotref' => 22, 'intbconfpricuseitem' => 23, 'intbconfcommuseitem' => 24, 'intbconfuomsaledef' => 25, 'intbconfuompurdef' => 26, 'intbconfsviadef' => 27, 'intbconfcustxreforuse' => 28, 'intbconfheadgetdef' => 29, 'intbconfitemgetdef' => 30, 'intbconfgetdispohaval' => 31, 'intbconfusercode1labl' => 32, 'intbconfusercode1ver' => 33, 'intbconfusercode2labl' => 34, 'intbconfusercode2ver' => 35, 'intbconfitemline' => 36, 'intbconfitemcols' => 37, 'intbconfheadline' => 38, 'intbconfheadcols' => 39, 'intbconfdetline' => 40, 'intbconfdetcols' => 41, 'intbconfminmaxzero' => 42, 'intbconfminrec' => 43, 'intbconfatbelowmin' => 44, 'intbconfonewhse' => 45, 'intbconfytdmth' => 46, 'intbconfusegramsltr' => 47, 'intbconfabcbywhse' => 48, 'intbconfabcnbrmths' => 49, 'intbconfabcbasecode' => 50, 'intbconfabclevla' => 51, 'intbconfabclevlb' => 52, 'intbconfabclevlc' => 53, 'intbconfabclevld' => 54, 'intbconfabclevle' => 55, 'intbconfabclevlf' => 56, 'intbconfabclevlg' => 57, 'intbconfabclevlh' => 58, 'intbconfabclevli' => 59, 'intbconfabclevlj' => 60, 'intbconfuseforeignx' => 61, 'intbconfusenafta' => 62, 'intbconfnaftaprefcode' => 63, 'intbconfnaftaproducer' => 64, 'intbconfnaftadoccode' => 65, 'intbconfphyscurrwksh' => 66, 'intbconf20or30' => 67, 'intbconfdisporigcnt' => 68, 'intbconfdispgl' => 69, 'intbconfdispref' => 70, 'intbconfdispcost' => 71, 'intbconfprtval' => 72, 'intbconfprtgl' => 73, 'intbconfglacct' => 74, 'intbconfref' => 75, 'intbconfcosttype' => 76, 'intbconfnormalonly' => 77, 'intbconfusewhsedef' => 78, 'intbcon2dfltwhse01' => 79, 'intbcon2dfltwhse02' => 80, 'intbcon2dfltwhse03' => 81, 'intbcon2dfltwhse04' => 82, 'intbcon2dfltwhse05' => 83, 'intbcon2dfltwhse06' => 84, 'intbcon2dfltwhse07' => 85, 'intbcon2dfltwhse08' => 86, 'intbcon2dfltwhse09' => 87, 'intbcon2dfltwhse10' => 88, 'intbconfbindef' => 89, 'intbconfcycldef' => 90, 'intbconfstatdef' => 91, 'intbconfabcdef' => 92, 'intbconfspecordrdef' => 93, 'intbconfordrpntdef' => 94, 'intbconfmaxdef' => 95, 'intbconfordrqtydef' => 96, 'intbconftrcptallowcmpl' => 97, 'intbconftrecmmtstock' => 98, 'intbconfusefrtin' => 99, 'intbconfeachoruom' => 100, 'intbconfneglotcorr' => 101, 'intbconftrnsglacct' => 102, 'intbconftrnsprotstock' => 103, 'intbconfnumericitem' => 104, 'intbconfitemdigits' => 105, 'intbconfsinglewhse' => 106, 'intbconfupdusepct' => 107, 'intbconfupdpric' => 108, 'intbconfupdstdcost' => 109, 'intbconfupdxrefcost' => 110, 'intbconfiqpaupddate' => 111, 'intbconfupcxrefoptn' => 112, 'intbconftranviewlib' => 113, 'intbconfresvcost' => 114, 'intbcon2tranzerorqst' => 115, 'intbconfmonendadjdate' => 116, 'intbconfmonendtrndate' => 117, 'intbconfmonendlogdate' => 118, 'intbconfdstatproc' => 119, 'intbconfstancostupd' => 120, 'intbconflastcost' => 121, 'intbconfusesorgpct' => 122, 'intbconfaddonstan' => 123, 'intbconfstdcosterror' => 124, 'intbconfavgcurrfive' => 125, 'intbconfusecntrlbin' => 126, 'intbconfnbrbinareas' => 127, 'intbconfusemultbin' => 128, 'intbconfdfltwhsebin' => 129, 'intbconfdfltbin' => 130, 'intbconfctryitemlot' => 131, 'intbconfuseshipbin' => 132, 'intbcon2prtbinrlabel' => 133, 'intbcon2itemlookup' => 134, 'intbconfincldcti' => 135, 'intbconfcertimage' => 136, 'intbconfdrawimage' => 137, 'intbconfconfirmimage' => 138, 'intbcon2productimage' => 139, 'intbconfdefpick' => 140, 'intbconfdefpack' => 141, 'intbconfdefinvc' => 142, 'intbconfdefack' => 143, 'intbconfdefquot' => 144, 'intbconfdefpo' => 145, 'intbconfdeftrans' => 146, 'intbconfadjglcogs' => 147, 'intbcon2dfltadjglacct' => 148, 'intbconfadjcostbase' => 149, 'intbconfdfltadjtbin' => 150, 'intbconfadjtbin' => 151, 'intbconfcstockseq' => 152, 'intbconfcstockhistday' => 153, 'intbconfcstockformat' => 154, 'intbconfcstkexportitem' => 155, 'intbconfcstkpdmcontract' => 156, 'intbcon2importseq' => 157, 'intbconfstopitemchg' => 158, 'intbconfaddtomxrfe' => 159, 'intbconfmxrfevendid' => 160, 'intbcon2newidlabellist' => 161, 'intbconfuseformat' => 162, 'intbconfdefformat' => 163, 'intbconfseqshortitem' => 164, 'intbconfshortitemlen' => 165, 'intbconfusescale' => 166, 'intbconfstorewght' => 167, 'intbconfvalidasstcode' => 168, 'intbconfwhitegoods' => 169, 'intbcon2transcustid' => 170, 'dateupdtd' => 171, 'timeupdtd' => 172, 'dummy' => 173, ],
        self::TYPE_COLNAME       => [ConfigInTableMap::COL_INTBCONFKEY => 0, ConfigInTableMap::COL_INTBCONFGLIFAC => 1, ConfigInTableMap::COL_INTBCONFUSEIW => 2, ConfigInTableMap::COL_INTBCONFLIFOFIFO => 3, ConfigInTableMap::COL_INTBCONFGONEG => 4, ConfigInTableMap::COL_INTBCONFUSELOTS => 5, ConfigInTableMap::COL_INTBCONFNBRUPPR => 6, ConfigInTableMap::COL_INTBCONFDESCUPPR => 7, ConfigInTableMap::COL_INTBCONFUSEDESC2 => 8, ConfigInTableMap::COL_INTBCONFUSEUPCCODE => 9, ConfigInTableMap::COL_INTBCONFUPCEANCNTRL => 10, ConfigInTableMap::COL_INTBCONFUPCGENNBR => 11, ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC => 12, ConfigInTableMap::COL_INTBCONFXREFNOSPACE => 13, ConfigInTableMap::COL_INTBCONFUSEPRICGRUP => 14, ConfigInTableMap::COL_INTBCONFUSECOMMGRUP => 15, ConfigInTableMap::COL_INTBCONFUSEWARRDAYS => 16, ConfigInTableMap::COL_INTBCONFSTANBASEDEF => 17, ConfigInTableMap::COL_INTBCONFGRUPDEF => 18, ConfigInTableMap::COL_INTBCONFPRICGRUPDEF => 19, ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF => 20, ConfigInTableMap::COL_INTBCONFTYPEDEF => 21, ConfigInTableMap::COL_INTBCONFMULTILOTREF => 22, ConfigInTableMap::COL_INTBCONFPRICUSEITEM => 23, ConfigInTableMap::COL_INTBCONFCOMMUSEITEM => 24, ConfigInTableMap::COL_INTBCONFUOMSALEDEF => 25, ConfigInTableMap::COL_INTBCONFUOMPURDEF => 26, ConfigInTableMap::COL_INTBCONFSVIADEF => 27, ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE => 28, ConfigInTableMap::COL_INTBCONFHEADGETDEF => 29, ConfigInTableMap::COL_INTBCONFITEMGETDEF => 30, ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL => 31, ConfigInTableMap::COL_INTBCONFUSERCODE1LABL => 32, ConfigInTableMap::COL_INTBCONFUSERCODE1VER => 33, ConfigInTableMap::COL_INTBCONFUSERCODE2LABL => 34, ConfigInTableMap::COL_INTBCONFUSERCODE2VER => 35, ConfigInTableMap::COL_INTBCONFITEMLINE => 36, ConfigInTableMap::COL_INTBCONFITEMCOLS => 37, ConfigInTableMap::COL_INTBCONFHEADLINE => 38, ConfigInTableMap::COL_INTBCONFHEADCOLS => 39, ConfigInTableMap::COL_INTBCONFDETLINE => 40, ConfigInTableMap::COL_INTBCONFDETCOLS => 41, ConfigInTableMap::COL_INTBCONFMINMAXZERO => 42, ConfigInTableMap::COL_INTBCONFMINREC => 43, ConfigInTableMap::COL_INTBCONFATBELOWMIN => 44, ConfigInTableMap::COL_INTBCONFONEWHSE => 45, ConfigInTableMap::COL_INTBCONFYTDMTH => 46, ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR => 47, ConfigInTableMap::COL_INTBCONFABCBYWHSE => 48, ConfigInTableMap::COL_INTBCONFABCNBRMTHS => 49, ConfigInTableMap::COL_INTBCONFABCBASECODE => 50, ConfigInTableMap::COL_INTBCONFABCLEVLA => 51, ConfigInTableMap::COL_INTBCONFABCLEVLB => 52, ConfigInTableMap::COL_INTBCONFABCLEVLC => 53, ConfigInTableMap::COL_INTBCONFABCLEVLD => 54, ConfigInTableMap::COL_INTBCONFABCLEVLE => 55, ConfigInTableMap::COL_INTBCONFABCLEVLF => 56, ConfigInTableMap::COL_INTBCONFABCLEVLG => 57, ConfigInTableMap::COL_INTBCONFABCLEVLH => 58, ConfigInTableMap::COL_INTBCONFABCLEVLI => 59, ConfigInTableMap::COL_INTBCONFABCLEVLJ => 60, ConfigInTableMap::COL_INTBCONFUSEFOREIGNX => 61, ConfigInTableMap::COL_INTBCONFUSENAFTA => 62, ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE => 63, ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER => 64, ConfigInTableMap::COL_INTBCONFNAFTADOCCODE => 65, ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH => 66, ConfigInTableMap::COL_INTBCONF20OR30 => 67, ConfigInTableMap::COL_INTBCONFDISPORIGCNT => 68, ConfigInTableMap::COL_INTBCONFDISPGL => 69, ConfigInTableMap::COL_INTBCONFDISPREF => 70, ConfigInTableMap::COL_INTBCONFDISPCOST => 71, ConfigInTableMap::COL_INTBCONFPRTVAL => 72, ConfigInTableMap::COL_INTBCONFPRTGL => 73, ConfigInTableMap::COL_INTBCONFGLACCT => 74, ConfigInTableMap::COL_INTBCONFREF => 75, ConfigInTableMap::COL_INTBCONFCOSTTYPE => 76, ConfigInTableMap::COL_INTBCONFNORMALONLY => 77, ConfigInTableMap::COL_INTBCONFUSEWHSEDEF => 78, ConfigInTableMap::COL_INTBCON2DFLTWHSE01 => 79, ConfigInTableMap::COL_INTBCON2DFLTWHSE02 => 80, ConfigInTableMap::COL_INTBCON2DFLTWHSE03 => 81, ConfigInTableMap::COL_INTBCON2DFLTWHSE04 => 82, ConfigInTableMap::COL_INTBCON2DFLTWHSE05 => 83, ConfigInTableMap::COL_INTBCON2DFLTWHSE06 => 84, ConfigInTableMap::COL_INTBCON2DFLTWHSE07 => 85, ConfigInTableMap::COL_INTBCON2DFLTWHSE08 => 86, ConfigInTableMap::COL_INTBCON2DFLTWHSE09 => 87, ConfigInTableMap::COL_INTBCON2DFLTWHSE10 => 88, ConfigInTableMap::COL_INTBCONFBINDEF => 89, ConfigInTableMap::COL_INTBCONFCYCLDEF => 90, ConfigInTableMap::COL_INTBCONFSTATDEF => 91, ConfigInTableMap::COL_INTBCONFABCDEF => 92, ConfigInTableMap::COL_INTBCONFSPECORDRDEF => 93, ConfigInTableMap::COL_INTBCONFORDRPNTDEF => 94, ConfigInTableMap::COL_INTBCONFMAXDEF => 95, ConfigInTableMap::COL_INTBCONFORDRQTYDEF => 96, ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL => 97, ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK => 98, ConfigInTableMap::COL_INTBCONFUSEFRTIN => 99, ConfigInTableMap::COL_INTBCONFEACHORUOM => 100, ConfigInTableMap::COL_INTBCONFNEGLOTCORR => 101, ConfigInTableMap::COL_INTBCONFTRNSGLACCT => 102, ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK => 103, ConfigInTableMap::COL_INTBCONFNUMERICITEM => 104, ConfigInTableMap::COL_INTBCONFITEMDIGITS => 105, ConfigInTableMap::COL_INTBCONFSINGLEWHSE => 106, ConfigInTableMap::COL_INTBCONFUPDUSEPCT => 107, ConfigInTableMap::COL_INTBCONFUPDPRIC => 108, ConfigInTableMap::COL_INTBCONFUPDSTDCOST => 109, ConfigInTableMap::COL_INTBCONFUPDXREFCOST => 110, ConfigInTableMap::COL_INTBCONFIQPAUPDDATE => 111, ConfigInTableMap::COL_INTBCONFUPCXREFOPTN => 112, ConfigInTableMap::COL_INTBCONFTRANVIEWLIB => 113, ConfigInTableMap::COL_INTBCONFRESVCOST => 114, ConfigInTableMap::COL_INTBCON2TRANZERORQST => 115, ConfigInTableMap::COL_INTBCONFMONENDADJDATE => 116, ConfigInTableMap::COL_INTBCONFMONENDTRNDATE => 117, ConfigInTableMap::COL_INTBCONFMONENDLOGDATE => 118, ConfigInTableMap::COL_INTBCONFDSTATPROC => 119, ConfigInTableMap::COL_INTBCONFSTANCOSTUPD => 120, ConfigInTableMap::COL_INTBCONFLASTCOST => 121, ConfigInTableMap::COL_INTBCONFUSESORGPCT => 122, ConfigInTableMap::COL_INTBCONFADDONSTAN => 123, ConfigInTableMap::COL_INTBCONFSTDCOSTERROR => 124, ConfigInTableMap::COL_INTBCONFAVGCURRFIVE => 125, ConfigInTableMap::COL_INTBCONFUSECNTRLBIN => 126, ConfigInTableMap::COL_INTBCONFNBRBINAREAS => 127, ConfigInTableMap::COL_INTBCONFUSEMULTBIN => 128, ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN => 129, ConfigInTableMap::COL_INTBCONFDFLTBIN => 130, ConfigInTableMap::COL_INTBCONFCTRYITEMLOT => 131, ConfigInTableMap::COL_INTBCONFUSESHIPBIN => 132, ConfigInTableMap::COL_INTBCON2PRTBINRLABEL => 133, ConfigInTableMap::COL_INTBCON2ITEMLOOKUP => 134, ConfigInTableMap::COL_INTBCONFINCLDCTI => 135, ConfigInTableMap::COL_INTBCONFCERTIMAGE => 136, ConfigInTableMap::COL_INTBCONFDRAWIMAGE => 137, ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE => 138, ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE => 139, ConfigInTableMap::COL_INTBCONFDEFPICK => 140, ConfigInTableMap::COL_INTBCONFDEFPACK => 141, ConfigInTableMap::COL_INTBCONFDEFINVC => 142, ConfigInTableMap::COL_INTBCONFDEFACK => 143, ConfigInTableMap::COL_INTBCONFDEFQUOT => 144, ConfigInTableMap::COL_INTBCONFDEFPO => 145, ConfigInTableMap::COL_INTBCONFDEFTRANS => 146, ConfigInTableMap::COL_INTBCONFADJGLCOGS => 147, ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT => 148, ConfigInTableMap::COL_INTBCONFADJCOSTBASE => 149, ConfigInTableMap::COL_INTBCONFDFLTADJTBIN => 150, ConfigInTableMap::COL_INTBCONFADJTBIN => 151, ConfigInTableMap::COL_INTBCONFCSTOCKSEQ => 152, ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY => 153, ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT => 154, ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM => 155, ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT => 156, ConfigInTableMap::COL_INTBCON2IMPORTSEQ => 157, ConfigInTableMap::COL_INTBCONFSTOPITEMCHG => 158, ConfigInTableMap::COL_INTBCONFADDTOMXRFE => 159, ConfigInTableMap::COL_INTBCONFMXRFEVENDID => 160, ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST => 161, ConfigInTableMap::COL_INTBCONFUSEFORMAT => 162, ConfigInTableMap::COL_INTBCONFDEFFORMAT => 163, ConfigInTableMap::COL_INTBCONFSEQSHORTITEM => 164, ConfigInTableMap::COL_INTBCONFSHORTITEMLEN => 165, ConfigInTableMap::COL_INTBCONFUSESCALE => 166, ConfigInTableMap::COL_INTBCONFSTOREWGHT => 167, ConfigInTableMap::COL_INTBCONFVALIDASSTCODE => 168, ConfigInTableMap::COL_INTBCONFWHITEGOODS => 169, ConfigInTableMap::COL_INTBCON2TRANSCUSTID => 170, ConfigInTableMap::COL_DATEUPDTD => 171, ConfigInTableMap::COL_TIMEUPDTD => 172, ConfigInTableMap::COL_DUMMY => 173, ],
        self::TYPE_FIELDNAME     => ['IntbConfKey' => 0, 'IntbConfGlIfac' => 1, 'IntbConfUseIw' => 2, 'IntbConfLifoFifo' => 3, 'IntbConfGoNeg' => 4, 'IntbConfUseLots' => 5, 'IntbConfNbrUppr' => 6, 'IntbConfDescUppr' => 7, 'IntbConfUseDesc2' => 8, 'IntbConfUseUpcCode' => 9, 'IntbConfUpcEanCntrl' => 10, 'IntbConfUpcGenNbr' => 11, 'IntbCon2AllowDupUpc' => 12, 'IntbConfXrefNoSpace' => 13, 'IntbConfUsePricGrup' => 14, 'IntbConfUseCommGrup' => 15, 'IntbConfUseWarrDays' => 16, 'IntbConfStanBaseDef' => 17, 'IntbConfGrupDef' => 18, 'IntbConfPricGrupDef' => 19, 'IntbConfCommGrupDef' => 20, 'IntbConfTypeDef' => 21, 'IntbConfMultiLotRef' => 22, 'IntbConfPricUseItem' => 23, 'IntbConfCommUseItem' => 24, 'IntbConfUomSaleDef' => 25, 'IntbConfUomPurDef' => 26, 'IntbConfSviaDef' => 27, 'IntbConfCustxrefOrUse' => 28, 'IntbConfHeadGetDef' => 29, 'IntbConfItemGetDef' => 30, 'IntbConfGetDispOhAval' => 31, 'IntbConfUserCode1Labl' => 32, 'IntbConfUserCode1Ver' => 33, 'IntbConfUserCode2Labl' => 34, 'IntbConfUserCode2Ver' => 35, 'IntbConfItemLine' => 36, 'IntbConfItemCols' => 37, 'IntbConfHeadLine' => 38, 'IntbConfHeadCols' => 39, 'IntbConfDetLine' => 40, 'IntbConfDetCols' => 41, 'IntbConfMinMaxZero' => 42, 'IntbConfMinRec' => 43, 'IntbConfAtBelowMin' => 44, 'IntbConfOneWhse' => 45, 'IntbConfYtdMth' => 46, 'IntbConfUseGramsLtr' => 47, 'IntbConfAbcByWhse' => 48, 'IntbConfAbcNbrMths' => 49, 'IntbConfAbcBaseCode' => 50, 'IntbConfAbcLevlA' => 51, 'IntbConfAbcLevlB' => 52, 'IntbConfAbcLevlC' => 53, 'IntbConfAbcLevlD' => 54, 'IntbConfAbcLevlE' => 55, 'IntbConfAbcLevlF' => 56, 'IntbConfAbcLevlG' => 57, 'IntbConfAbcLevlH' => 58, 'IntbConfAbcLevlI' => 59, 'IntbConfAbcLevlJ' => 60, 'IntbConfUseForeignX' => 61, 'IntbConfUseNafta' => 62, 'IntbConfNaftaPrefCode' => 63, 'IntbConfNaftaProducer' => 64, 'IntbConfNaftaDocCode' => 65, 'IntbConfPhysCurrWksh' => 66, 'IntbConf20Or30' => 67, 'IntbConfDispOrigCnt' => 68, 'IntbConfDispGl' => 69, 'IntbConfDispRef' => 70, 'IntbConfDispCost' => 71, 'IntbConfPrtVal' => 72, 'IntbConfPrtGl' => 73, 'IntbConfGlAcct' => 74, 'IntbConfRef' => 75, 'IntbConfCostType' => 76, 'IntbConfNormalOnly' => 77, 'IntbConfUseWhseDef' => 78, 'IntbCon2DfltWhse01' => 79, 'IntbCon2DfltWhse02' => 80, 'IntbCon2DfltWhse03' => 81, 'IntbCon2DfltWhse04' => 82, 'IntbCon2DfltWhse05' => 83, 'IntbCon2DfltWhse06' => 84, 'IntbCon2DfltWhse07' => 85, 'IntbCon2DfltWhse08' => 86, 'IntbCon2DfltWhse09' => 87, 'IntbCon2DfltWhse10' => 88, 'IntbConfBinDef' => 89, 'IntbConfCyclDef' => 90, 'IntbConfStatDef' => 91, 'IntbConfAbcDef' => 92, 'IntbConfSpecOrdrDef' => 93, 'IntbConfOrdrPntDef' => 94, 'IntbConfMaxDef' => 95, 'IntbConfOrdrQtyDef' => 96, 'IntbConfTrcptAllowCmpl' => 97, 'IntbConfTreCmmtStock' => 98, 'IntbConfUseFrtIn' => 99, 'IntbConfEachOrUom' => 100, 'IntbConfNegLotCorr' => 101, 'IntbConfTrnsGlAcct' => 102, 'IntbConfTrnsProtStock' => 103, 'IntbConfNumericItem' => 104, 'IntbConfItemDigits' => 105, 'IntbConfSingleWhse' => 106, 'IntbConfUpdUsePct' => 107, 'IntbConfUpdPric' => 108, 'IntbConfUpdStdCost' => 109, 'IntbConfUpdXrefCost' => 110, 'IntbConfIqpaUpdDate' => 111, 'IntbConfUpcXrefOptn' => 112, 'IntbConfTranViewLIB' => 113, 'IntbConfResvCost' => 114, 'IntbCon2TranZeroRqst' => 115, 'IntbConfMonEndAdjDate' => 116, 'IntbConfMonEndTrnDate' => 117, 'IntbConfMonEndLogDate' => 118, 'IntbConfDStatProc' => 119, 'IntbConfStanCostUpd' => 120, 'IntbConfLastCost' => 121, 'IntbConfUseSOrGPct' => 122, 'IntbConfAddOnStan' => 123, 'IntbConfStdCostError' => 124, 'IntbConfAvgCurrFive' => 125, 'IntbConfUseCntrlBin' => 126, 'IntbConfNbrBinAreas' => 127, 'IntbConfUseMultBin' => 128, 'IntbConfDfltWhseBin' => 129, 'IntbConfDfltBin' => 130, 'IntbConfCtryItemLot' => 131, 'IntbConfUseShipBin' => 132, 'IntbCon2PrtBinrLabel' => 133, 'IntbCon2ItemLookup' => 134, 'IntbConfIncldCti' => 135, 'IntbConfCertImage' => 136, 'IntbConfDrawImage' => 137, 'IntbConfConfirmImage' => 138, 'IntbCon2ProductImage' => 139, 'IntbConfDefPick' => 140, 'IntbConfDefPack' => 141, 'IntbConfDefInvc' => 142, 'IntbConfDefAck' => 143, 'IntbConfDefQuot' => 144, 'IntbConfDefPo' => 145, 'IntbConfDefTrans' => 146, 'IntbConfAdjGlCogs' => 147, 'IntbCon2DfltAdjGlAcct' => 148, 'IntbConfAdjCostBase' => 149, 'IntbConfDfltAdjtBin' => 150, 'IntbConfAdjtBin' => 151, 'IntbConfCStockSeq' => 152, 'IntbConfCStockHistDay' => 153, 'IntbConfCStockFormat' => 154, 'IntbConfCstkExportItem' => 155, 'IntbConfCstkPdmContract' => 156, 'IntbCon2ImportSeq' => 157, 'IntbConfStopItemChg' => 158, 'IntbConfAddToMxrfe' => 159, 'IntbConfMxrfeVendId' => 160, 'IntbCon2NewIdLabelList' => 161, 'IntbConfUseFormat' => 162, 'IntbConfDefFormat' => 163, 'IntbConfSeqShortItem' => 164, 'IntbConfShortItemLen' => 165, 'IntbConfUseScale' => 166, 'IntbConfStoreWght' => 167, 'IntbConfValidAsstCode' => 168, 'IntbConfWhiteGoods' => 169, 'IntbCon2TransCustId' => 170, 'DateUpdtd' => 171, 'TimeUpdtd' => 172, 'dummy' => 173, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Intbconfkey' => 'INTBCONFKEY',
        'ConfigIn.Intbconfkey' => 'INTBCONFKEY',
        'intbconfkey' => 'INTBCONFKEY',
        'configIn.intbconfkey' => 'INTBCONFKEY',
        'ConfigInTableMap::COL_INTBCONFKEY' => 'INTBCONFKEY',
        'COL_INTBCONFKEY' => 'INTBCONFKEY',
        'IntbConfKey' => 'INTBCONFKEY',
        'in_config.IntbConfKey' => 'INTBCONFKEY',
        'Intbconfglifac' => 'INTBCONFGLIFAC',
        'ConfigIn.Intbconfglifac' => 'INTBCONFGLIFAC',
        'intbconfglifac' => 'INTBCONFGLIFAC',
        'configIn.intbconfglifac' => 'INTBCONFGLIFAC',
        'ConfigInTableMap::COL_INTBCONFGLIFAC' => 'INTBCONFGLIFAC',
        'COL_INTBCONFGLIFAC' => 'INTBCONFGLIFAC',
        'IntbConfGlIfac' => 'INTBCONFGLIFAC',
        'in_config.IntbConfGlIfac' => 'INTBCONFGLIFAC',
        'Intbconfuseiw' => 'INTBCONFUSEIW',
        'ConfigIn.Intbconfuseiw' => 'INTBCONFUSEIW',
        'intbconfuseiw' => 'INTBCONFUSEIW',
        'configIn.intbconfuseiw' => 'INTBCONFUSEIW',
        'ConfigInTableMap::COL_INTBCONFUSEIW' => 'INTBCONFUSEIW',
        'COL_INTBCONFUSEIW' => 'INTBCONFUSEIW',
        'IntbConfUseIw' => 'INTBCONFUSEIW',
        'in_config.IntbConfUseIw' => 'INTBCONFUSEIW',
        'Intbconflifofifo' => 'INTBCONFLIFOFIFO',
        'ConfigIn.Intbconflifofifo' => 'INTBCONFLIFOFIFO',
        'intbconflifofifo' => 'INTBCONFLIFOFIFO',
        'configIn.intbconflifofifo' => 'INTBCONFLIFOFIFO',
        'ConfigInTableMap::COL_INTBCONFLIFOFIFO' => 'INTBCONFLIFOFIFO',
        'COL_INTBCONFLIFOFIFO' => 'INTBCONFLIFOFIFO',
        'IntbConfLifoFifo' => 'INTBCONFLIFOFIFO',
        'in_config.IntbConfLifoFifo' => 'INTBCONFLIFOFIFO',
        'Intbconfgoneg' => 'INTBCONFGONEG',
        'ConfigIn.Intbconfgoneg' => 'INTBCONFGONEG',
        'intbconfgoneg' => 'INTBCONFGONEG',
        'configIn.intbconfgoneg' => 'INTBCONFGONEG',
        'ConfigInTableMap::COL_INTBCONFGONEG' => 'INTBCONFGONEG',
        'COL_INTBCONFGONEG' => 'INTBCONFGONEG',
        'IntbConfGoNeg' => 'INTBCONFGONEG',
        'in_config.IntbConfGoNeg' => 'INTBCONFGONEG',
        'Intbconfuselots' => 'INTBCONFUSELOTS',
        'ConfigIn.Intbconfuselots' => 'INTBCONFUSELOTS',
        'intbconfuselots' => 'INTBCONFUSELOTS',
        'configIn.intbconfuselots' => 'INTBCONFUSELOTS',
        'ConfigInTableMap::COL_INTBCONFUSELOTS' => 'INTBCONFUSELOTS',
        'COL_INTBCONFUSELOTS' => 'INTBCONFUSELOTS',
        'IntbConfUseLots' => 'INTBCONFUSELOTS',
        'in_config.IntbConfUseLots' => 'INTBCONFUSELOTS',
        'Intbconfnbruppr' => 'INTBCONFNBRUPPR',
        'ConfigIn.Intbconfnbruppr' => 'INTBCONFNBRUPPR',
        'intbconfnbruppr' => 'INTBCONFNBRUPPR',
        'configIn.intbconfnbruppr' => 'INTBCONFNBRUPPR',
        'ConfigInTableMap::COL_INTBCONFNBRUPPR' => 'INTBCONFNBRUPPR',
        'COL_INTBCONFNBRUPPR' => 'INTBCONFNBRUPPR',
        'IntbConfNbrUppr' => 'INTBCONFNBRUPPR',
        'in_config.IntbConfNbrUppr' => 'INTBCONFNBRUPPR',
        'Intbconfdescuppr' => 'INTBCONFDESCUPPR',
        'ConfigIn.Intbconfdescuppr' => 'INTBCONFDESCUPPR',
        'intbconfdescuppr' => 'INTBCONFDESCUPPR',
        'configIn.intbconfdescuppr' => 'INTBCONFDESCUPPR',
        'ConfigInTableMap::COL_INTBCONFDESCUPPR' => 'INTBCONFDESCUPPR',
        'COL_INTBCONFDESCUPPR' => 'INTBCONFDESCUPPR',
        'IntbConfDescUppr' => 'INTBCONFDESCUPPR',
        'in_config.IntbConfDescUppr' => 'INTBCONFDESCUPPR',
        'Intbconfusedesc2' => 'INTBCONFUSEDESC2',
        'ConfigIn.Intbconfusedesc2' => 'INTBCONFUSEDESC2',
        'intbconfusedesc2' => 'INTBCONFUSEDESC2',
        'configIn.intbconfusedesc2' => 'INTBCONFUSEDESC2',
        'ConfigInTableMap::COL_INTBCONFUSEDESC2' => 'INTBCONFUSEDESC2',
        'COL_INTBCONFUSEDESC2' => 'INTBCONFUSEDESC2',
        'IntbConfUseDesc2' => 'INTBCONFUSEDESC2',
        'in_config.IntbConfUseDesc2' => 'INTBCONFUSEDESC2',
        'Intbconfuseupccode' => 'INTBCONFUSEUPCCODE',
        'ConfigIn.Intbconfuseupccode' => 'INTBCONFUSEUPCCODE',
        'intbconfuseupccode' => 'INTBCONFUSEUPCCODE',
        'configIn.intbconfuseupccode' => 'INTBCONFUSEUPCCODE',
        'ConfigInTableMap::COL_INTBCONFUSEUPCCODE' => 'INTBCONFUSEUPCCODE',
        'COL_INTBCONFUSEUPCCODE' => 'INTBCONFUSEUPCCODE',
        'IntbConfUseUpcCode' => 'INTBCONFUSEUPCCODE',
        'in_config.IntbConfUseUpcCode' => 'INTBCONFUSEUPCCODE',
        'Intbconfupceancntrl' => 'INTBCONFUPCEANCNTRL',
        'ConfigIn.Intbconfupceancntrl' => 'INTBCONFUPCEANCNTRL',
        'intbconfupceancntrl' => 'INTBCONFUPCEANCNTRL',
        'configIn.intbconfupceancntrl' => 'INTBCONFUPCEANCNTRL',
        'ConfigInTableMap::COL_INTBCONFUPCEANCNTRL' => 'INTBCONFUPCEANCNTRL',
        'COL_INTBCONFUPCEANCNTRL' => 'INTBCONFUPCEANCNTRL',
        'IntbConfUpcEanCntrl' => 'INTBCONFUPCEANCNTRL',
        'in_config.IntbConfUpcEanCntrl' => 'INTBCONFUPCEANCNTRL',
        'Intbconfupcgennbr' => 'INTBCONFUPCGENNBR',
        'ConfigIn.Intbconfupcgennbr' => 'INTBCONFUPCGENNBR',
        'intbconfupcgennbr' => 'INTBCONFUPCGENNBR',
        'configIn.intbconfupcgennbr' => 'INTBCONFUPCGENNBR',
        'ConfigInTableMap::COL_INTBCONFUPCGENNBR' => 'INTBCONFUPCGENNBR',
        'COL_INTBCONFUPCGENNBR' => 'INTBCONFUPCGENNBR',
        'IntbConfUpcGenNbr' => 'INTBCONFUPCGENNBR',
        'in_config.IntbConfUpcGenNbr' => 'INTBCONFUPCGENNBR',
        'Intbcon2allowdupupc' => 'INTBCON2ALLOWDUPUPC',
        'ConfigIn.Intbcon2allowdupupc' => 'INTBCON2ALLOWDUPUPC',
        'intbcon2allowdupupc' => 'INTBCON2ALLOWDUPUPC',
        'configIn.intbcon2allowdupupc' => 'INTBCON2ALLOWDUPUPC',
        'ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC' => 'INTBCON2ALLOWDUPUPC',
        'COL_INTBCON2ALLOWDUPUPC' => 'INTBCON2ALLOWDUPUPC',
        'IntbCon2AllowDupUpc' => 'INTBCON2ALLOWDUPUPC',
        'in_config.IntbCon2AllowDupUpc' => 'INTBCON2ALLOWDUPUPC',
        'Intbconfxrefnospace' => 'INTBCONFXREFNOSPACE',
        'ConfigIn.Intbconfxrefnospace' => 'INTBCONFXREFNOSPACE',
        'intbconfxrefnospace' => 'INTBCONFXREFNOSPACE',
        'configIn.intbconfxrefnospace' => 'INTBCONFXREFNOSPACE',
        'ConfigInTableMap::COL_INTBCONFXREFNOSPACE' => 'INTBCONFXREFNOSPACE',
        'COL_INTBCONFXREFNOSPACE' => 'INTBCONFXREFNOSPACE',
        'IntbConfXrefNoSpace' => 'INTBCONFXREFNOSPACE',
        'in_config.IntbConfXrefNoSpace' => 'INTBCONFXREFNOSPACE',
        'Intbconfusepricgrup' => 'INTBCONFUSEPRICGRUP',
        'ConfigIn.Intbconfusepricgrup' => 'INTBCONFUSEPRICGRUP',
        'intbconfusepricgrup' => 'INTBCONFUSEPRICGRUP',
        'configIn.intbconfusepricgrup' => 'INTBCONFUSEPRICGRUP',
        'ConfigInTableMap::COL_INTBCONFUSEPRICGRUP' => 'INTBCONFUSEPRICGRUP',
        'COL_INTBCONFUSEPRICGRUP' => 'INTBCONFUSEPRICGRUP',
        'IntbConfUsePricGrup' => 'INTBCONFUSEPRICGRUP',
        'in_config.IntbConfUsePricGrup' => 'INTBCONFUSEPRICGRUP',
        'Intbconfusecommgrup' => 'INTBCONFUSECOMMGRUP',
        'ConfigIn.Intbconfusecommgrup' => 'INTBCONFUSECOMMGRUP',
        'intbconfusecommgrup' => 'INTBCONFUSECOMMGRUP',
        'configIn.intbconfusecommgrup' => 'INTBCONFUSECOMMGRUP',
        'ConfigInTableMap::COL_INTBCONFUSECOMMGRUP' => 'INTBCONFUSECOMMGRUP',
        'COL_INTBCONFUSECOMMGRUP' => 'INTBCONFUSECOMMGRUP',
        'IntbConfUseCommGrup' => 'INTBCONFUSECOMMGRUP',
        'in_config.IntbConfUseCommGrup' => 'INTBCONFUSECOMMGRUP',
        'Intbconfusewarrdays' => 'INTBCONFUSEWARRDAYS',
        'ConfigIn.Intbconfusewarrdays' => 'INTBCONFUSEWARRDAYS',
        'intbconfusewarrdays' => 'INTBCONFUSEWARRDAYS',
        'configIn.intbconfusewarrdays' => 'INTBCONFUSEWARRDAYS',
        'ConfigInTableMap::COL_INTBCONFUSEWARRDAYS' => 'INTBCONFUSEWARRDAYS',
        'COL_INTBCONFUSEWARRDAYS' => 'INTBCONFUSEWARRDAYS',
        'IntbConfUseWarrDays' => 'INTBCONFUSEWARRDAYS',
        'in_config.IntbConfUseWarrDays' => 'INTBCONFUSEWARRDAYS',
        'Intbconfstanbasedef' => 'INTBCONFSTANBASEDEF',
        'ConfigIn.Intbconfstanbasedef' => 'INTBCONFSTANBASEDEF',
        'intbconfstanbasedef' => 'INTBCONFSTANBASEDEF',
        'configIn.intbconfstanbasedef' => 'INTBCONFSTANBASEDEF',
        'ConfigInTableMap::COL_INTBCONFSTANBASEDEF' => 'INTBCONFSTANBASEDEF',
        'COL_INTBCONFSTANBASEDEF' => 'INTBCONFSTANBASEDEF',
        'IntbConfStanBaseDef' => 'INTBCONFSTANBASEDEF',
        'in_config.IntbConfStanBaseDef' => 'INTBCONFSTANBASEDEF',
        'Intbconfgrupdef' => 'INTBCONFGRUPDEF',
        'ConfigIn.Intbconfgrupdef' => 'INTBCONFGRUPDEF',
        'intbconfgrupdef' => 'INTBCONFGRUPDEF',
        'configIn.intbconfgrupdef' => 'INTBCONFGRUPDEF',
        'ConfigInTableMap::COL_INTBCONFGRUPDEF' => 'INTBCONFGRUPDEF',
        'COL_INTBCONFGRUPDEF' => 'INTBCONFGRUPDEF',
        'IntbConfGrupDef' => 'INTBCONFGRUPDEF',
        'in_config.IntbConfGrupDef' => 'INTBCONFGRUPDEF',
        'Intbconfpricgrupdef' => 'INTBCONFPRICGRUPDEF',
        'ConfigIn.Intbconfpricgrupdef' => 'INTBCONFPRICGRUPDEF',
        'intbconfpricgrupdef' => 'INTBCONFPRICGRUPDEF',
        'configIn.intbconfpricgrupdef' => 'INTBCONFPRICGRUPDEF',
        'ConfigInTableMap::COL_INTBCONFPRICGRUPDEF' => 'INTBCONFPRICGRUPDEF',
        'COL_INTBCONFPRICGRUPDEF' => 'INTBCONFPRICGRUPDEF',
        'IntbConfPricGrupDef' => 'INTBCONFPRICGRUPDEF',
        'in_config.IntbConfPricGrupDef' => 'INTBCONFPRICGRUPDEF',
        'Intbconfcommgrupdef' => 'INTBCONFCOMMGRUPDEF',
        'ConfigIn.Intbconfcommgrupdef' => 'INTBCONFCOMMGRUPDEF',
        'intbconfcommgrupdef' => 'INTBCONFCOMMGRUPDEF',
        'configIn.intbconfcommgrupdef' => 'INTBCONFCOMMGRUPDEF',
        'ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF' => 'INTBCONFCOMMGRUPDEF',
        'COL_INTBCONFCOMMGRUPDEF' => 'INTBCONFCOMMGRUPDEF',
        'IntbConfCommGrupDef' => 'INTBCONFCOMMGRUPDEF',
        'in_config.IntbConfCommGrupDef' => 'INTBCONFCOMMGRUPDEF',
        'Intbconftypedef' => 'INTBCONFTYPEDEF',
        'ConfigIn.Intbconftypedef' => 'INTBCONFTYPEDEF',
        'intbconftypedef' => 'INTBCONFTYPEDEF',
        'configIn.intbconftypedef' => 'INTBCONFTYPEDEF',
        'ConfigInTableMap::COL_INTBCONFTYPEDEF' => 'INTBCONFTYPEDEF',
        'COL_INTBCONFTYPEDEF' => 'INTBCONFTYPEDEF',
        'IntbConfTypeDef' => 'INTBCONFTYPEDEF',
        'in_config.IntbConfTypeDef' => 'INTBCONFTYPEDEF',
        'Intbconfmultilotref' => 'INTBCONFMULTILOTREF',
        'ConfigIn.Intbconfmultilotref' => 'INTBCONFMULTILOTREF',
        'intbconfmultilotref' => 'INTBCONFMULTILOTREF',
        'configIn.intbconfmultilotref' => 'INTBCONFMULTILOTREF',
        'ConfigInTableMap::COL_INTBCONFMULTILOTREF' => 'INTBCONFMULTILOTREF',
        'COL_INTBCONFMULTILOTREF' => 'INTBCONFMULTILOTREF',
        'IntbConfMultiLotRef' => 'INTBCONFMULTILOTREF',
        'in_config.IntbConfMultiLotRef' => 'INTBCONFMULTILOTREF',
        'Intbconfpricuseitem' => 'INTBCONFPRICUSEITEM',
        'ConfigIn.Intbconfpricuseitem' => 'INTBCONFPRICUSEITEM',
        'intbconfpricuseitem' => 'INTBCONFPRICUSEITEM',
        'configIn.intbconfpricuseitem' => 'INTBCONFPRICUSEITEM',
        'ConfigInTableMap::COL_INTBCONFPRICUSEITEM' => 'INTBCONFPRICUSEITEM',
        'COL_INTBCONFPRICUSEITEM' => 'INTBCONFPRICUSEITEM',
        'IntbConfPricUseItem' => 'INTBCONFPRICUSEITEM',
        'in_config.IntbConfPricUseItem' => 'INTBCONFPRICUSEITEM',
        'Intbconfcommuseitem' => 'INTBCONFCOMMUSEITEM',
        'ConfigIn.Intbconfcommuseitem' => 'INTBCONFCOMMUSEITEM',
        'intbconfcommuseitem' => 'INTBCONFCOMMUSEITEM',
        'configIn.intbconfcommuseitem' => 'INTBCONFCOMMUSEITEM',
        'ConfigInTableMap::COL_INTBCONFCOMMUSEITEM' => 'INTBCONFCOMMUSEITEM',
        'COL_INTBCONFCOMMUSEITEM' => 'INTBCONFCOMMUSEITEM',
        'IntbConfCommUseItem' => 'INTBCONFCOMMUSEITEM',
        'in_config.IntbConfCommUseItem' => 'INTBCONFCOMMUSEITEM',
        'Intbconfuomsaledef' => 'INTBCONFUOMSALEDEF',
        'ConfigIn.Intbconfuomsaledef' => 'INTBCONFUOMSALEDEF',
        'intbconfuomsaledef' => 'INTBCONFUOMSALEDEF',
        'configIn.intbconfuomsaledef' => 'INTBCONFUOMSALEDEF',
        'ConfigInTableMap::COL_INTBCONFUOMSALEDEF' => 'INTBCONFUOMSALEDEF',
        'COL_INTBCONFUOMSALEDEF' => 'INTBCONFUOMSALEDEF',
        'IntbConfUomSaleDef' => 'INTBCONFUOMSALEDEF',
        'in_config.IntbConfUomSaleDef' => 'INTBCONFUOMSALEDEF',
        'Intbconfuompurdef' => 'INTBCONFUOMPURDEF',
        'ConfigIn.Intbconfuompurdef' => 'INTBCONFUOMPURDEF',
        'intbconfuompurdef' => 'INTBCONFUOMPURDEF',
        'configIn.intbconfuompurdef' => 'INTBCONFUOMPURDEF',
        'ConfigInTableMap::COL_INTBCONFUOMPURDEF' => 'INTBCONFUOMPURDEF',
        'COL_INTBCONFUOMPURDEF' => 'INTBCONFUOMPURDEF',
        'IntbConfUomPurDef' => 'INTBCONFUOMPURDEF',
        'in_config.IntbConfUomPurDef' => 'INTBCONFUOMPURDEF',
        'Intbconfsviadef' => 'INTBCONFSVIADEF',
        'ConfigIn.Intbconfsviadef' => 'INTBCONFSVIADEF',
        'intbconfsviadef' => 'INTBCONFSVIADEF',
        'configIn.intbconfsviadef' => 'INTBCONFSVIADEF',
        'ConfigInTableMap::COL_INTBCONFSVIADEF' => 'INTBCONFSVIADEF',
        'COL_INTBCONFSVIADEF' => 'INTBCONFSVIADEF',
        'IntbConfSviaDef' => 'INTBCONFSVIADEF',
        'in_config.IntbConfSviaDef' => 'INTBCONFSVIADEF',
        'Intbconfcustxreforuse' => 'INTBCONFCUSTXREFORUSE',
        'ConfigIn.Intbconfcustxreforuse' => 'INTBCONFCUSTXREFORUSE',
        'intbconfcustxreforuse' => 'INTBCONFCUSTXREFORUSE',
        'configIn.intbconfcustxreforuse' => 'INTBCONFCUSTXREFORUSE',
        'ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE' => 'INTBCONFCUSTXREFORUSE',
        'COL_INTBCONFCUSTXREFORUSE' => 'INTBCONFCUSTXREFORUSE',
        'IntbConfCustxrefOrUse' => 'INTBCONFCUSTXREFORUSE',
        'in_config.IntbConfCustxrefOrUse' => 'INTBCONFCUSTXREFORUSE',
        'Intbconfheadgetdef' => 'INTBCONFHEADGETDEF',
        'ConfigIn.Intbconfheadgetdef' => 'INTBCONFHEADGETDEF',
        'intbconfheadgetdef' => 'INTBCONFHEADGETDEF',
        'configIn.intbconfheadgetdef' => 'INTBCONFHEADGETDEF',
        'ConfigInTableMap::COL_INTBCONFHEADGETDEF' => 'INTBCONFHEADGETDEF',
        'COL_INTBCONFHEADGETDEF' => 'INTBCONFHEADGETDEF',
        'IntbConfHeadGetDef' => 'INTBCONFHEADGETDEF',
        'in_config.IntbConfHeadGetDef' => 'INTBCONFHEADGETDEF',
        'Intbconfitemgetdef' => 'INTBCONFITEMGETDEF',
        'ConfigIn.Intbconfitemgetdef' => 'INTBCONFITEMGETDEF',
        'intbconfitemgetdef' => 'INTBCONFITEMGETDEF',
        'configIn.intbconfitemgetdef' => 'INTBCONFITEMGETDEF',
        'ConfigInTableMap::COL_INTBCONFITEMGETDEF' => 'INTBCONFITEMGETDEF',
        'COL_INTBCONFITEMGETDEF' => 'INTBCONFITEMGETDEF',
        'IntbConfItemGetDef' => 'INTBCONFITEMGETDEF',
        'in_config.IntbConfItemGetDef' => 'INTBCONFITEMGETDEF',
        'Intbconfgetdispohaval' => 'INTBCONFGETDISPOHAVAL',
        'ConfigIn.Intbconfgetdispohaval' => 'INTBCONFGETDISPOHAVAL',
        'intbconfgetdispohaval' => 'INTBCONFGETDISPOHAVAL',
        'configIn.intbconfgetdispohaval' => 'INTBCONFGETDISPOHAVAL',
        'ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL' => 'INTBCONFGETDISPOHAVAL',
        'COL_INTBCONFGETDISPOHAVAL' => 'INTBCONFGETDISPOHAVAL',
        'IntbConfGetDispOhAval' => 'INTBCONFGETDISPOHAVAL',
        'in_config.IntbConfGetDispOhAval' => 'INTBCONFGETDISPOHAVAL',
        'Intbconfusercode1labl' => 'INTBCONFUSERCODE1LABL',
        'ConfigIn.Intbconfusercode1labl' => 'INTBCONFUSERCODE1LABL',
        'intbconfusercode1labl' => 'INTBCONFUSERCODE1LABL',
        'configIn.intbconfusercode1labl' => 'INTBCONFUSERCODE1LABL',
        'ConfigInTableMap::COL_INTBCONFUSERCODE1LABL' => 'INTBCONFUSERCODE1LABL',
        'COL_INTBCONFUSERCODE1LABL' => 'INTBCONFUSERCODE1LABL',
        'IntbConfUserCode1Labl' => 'INTBCONFUSERCODE1LABL',
        'in_config.IntbConfUserCode1Labl' => 'INTBCONFUSERCODE1LABL',
        'Intbconfusercode1ver' => 'INTBCONFUSERCODE1VER',
        'ConfigIn.Intbconfusercode1ver' => 'INTBCONFUSERCODE1VER',
        'intbconfusercode1ver' => 'INTBCONFUSERCODE1VER',
        'configIn.intbconfusercode1ver' => 'INTBCONFUSERCODE1VER',
        'ConfigInTableMap::COL_INTBCONFUSERCODE1VER' => 'INTBCONFUSERCODE1VER',
        'COL_INTBCONFUSERCODE1VER' => 'INTBCONFUSERCODE1VER',
        'IntbConfUserCode1Ver' => 'INTBCONFUSERCODE1VER',
        'in_config.IntbConfUserCode1Ver' => 'INTBCONFUSERCODE1VER',
        'Intbconfusercode2labl' => 'INTBCONFUSERCODE2LABL',
        'ConfigIn.Intbconfusercode2labl' => 'INTBCONFUSERCODE2LABL',
        'intbconfusercode2labl' => 'INTBCONFUSERCODE2LABL',
        'configIn.intbconfusercode2labl' => 'INTBCONFUSERCODE2LABL',
        'ConfigInTableMap::COL_INTBCONFUSERCODE2LABL' => 'INTBCONFUSERCODE2LABL',
        'COL_INTBCONFUSERCODE2LABL' => 'INTBCONFUSERCODE2LABL',
        'IntbConfUserCode2Labl' => 'INTBCONFUSERCODE2LABL',
        'in_config.IntbConfUserCode2Labl' => 'INTBCONFUSERCODE2LABL',
        'Intbconfusercode2ver' => 'INTBCONFUSERCODE2VER',
        'ConfigIn.Intbconfusercode2ver' => 'INTBCONFUSERCODE2VER',
        'intbconfusercode2ver' => 'INTBCONFUSERCODE2VER',
        'configIn.intbconfusercode2ver' => 'INTBCONFUSERCODE2VER',
        'ConfigInTableMap::COL_INTBCONFUSERCODE2VER' => 'INTBCONFUSERCODE2VER',
        'COL_INTBCONFUSERCODE2VER' => 'INTBCONFUSERCODE2VER',
        'IntbConfUserCode2Ver' => 'INTBCONFUSERCODE2VER',
        'in_config.IntbConfUserCode2Ver' => 'INTBCONFUSERCODE2VER',
        'Intbconfitemline' => 'INTBCONFITEMLINE',
        'ConfigIn.Intbconfitemline' => 'INTBCONFITEMLINE',
        'intbconfitemline' => 'INTBCONFITEMLINE',
        'configIn.intbconfitemline' => 'INTBCONFITEMLINE',
        'ConfigInTableMap::COL_INTBCONFITEMLINE' => 'INTBCONFITEMLINE',
        'COL_INTBCONFITEMLINE' => 'INTBCONFITEMLINE',
        'IntbConfItemLine' => 'INTBCONFITEMLINE',
        'in_config.IntbConfItemLine' => 'INTBCONFITEMLINE',
        'Intbconfitemcols' => 'INTBCONFITEMCOLS',
        'ConfigIn.Intbconfitemcols' => 'INTBCONFITEMCOLS',
        'intbconfitemcols' => 'INTBCONFITEMCOLS',
        'configIn.intbconfitemcols' => 'INTBCONFITEMCOLS',
        'ConfigInTableMap::COL_INTBCONFITEMCOLS' => 'INTBCONFITEMCOLS',
        'COL_INTBCONFITEMCOLS' => 'INTBCONFITEMCOLS',
        'IntbConfItemCols' => 'INTBCONFITEMCOLS',
        'in_config.IntbConfItemCols' => 'INTBCONFITEMCOLS',
        'Intbconfheadline' => 'INTBCONFHEADLINE',
        'ConfigIn.Intbconfheadline' => 'INTBCONFHEADLINE',
        'intbconfheadline' => 'INTBCONFHEADLINE',
        'configIn.intbconfheadline' => 'INTBCONFHEADLINE',
        'ConfigInTableMap::COL_INTBCONFHEADLINE' => 'INTBCONFHEADLINE',
        'COL_INTBCONFHEADLINE' => 'INTBCONFHEADLINE',
        'IntbConfHeadLine' => 'INTBCONFHEADLINE',
        'in_config.IntbConfHeadLine' => 'INTBCONFHEADLINE',
        'Intbconfheadcols' => 'INTBCONFHEADCOLS',
        'ConfigIn.Intbconfheadcols' => 'INTBCONFHEADCOLS',
        'intbconfheadcols' => 'INTBCONFHEADCOLS',
        'configIn.intbconfheadcols' => 'INTBCONFHEADCOLS',
        'ConfigInTableMap::COL_INTBCONFHEADCOLS' => 'INTBCONFHEADCOLS',
        'COL_INTBCONFHEADCOLS' => 'INTBCONFHEADCOLS',
        'IntbConfHeadCols' => 'INTBCONFHEADCOLS',
        'in_config.IntbConfHeadCols' => 'INTBCONFHEADCOLS',
        'Intbconfdetline' => 'INTBCONFDETLINE',
        'ConfigIn.Intbconfdetline' => 'INTBCONFDETLINE',
        'intbconfdetline' => 'INTBCONFDETLINE',
        'configIn.intbconfdetline' => 'INTBCONFDETLINE',
        'ConfigInTableMap::COL_INTBCONFDETLINE' => 'INTBCONFDETLINE',
        'COL_INTBCONFDETLINE' => 'INTBCONFDETLINE',
        'IntbConfDetLine' => 'INTBCONFDETLINE',
        'in_config.IntbConfDetLine' => 'INTBCONFDETLINE',
        'Intbconfdetcols' => 'INTBCONFDETCOLS',
        'ConfigIn.Intbconfdetcols' => 'INTBCONFDETCOLS',
        'intbconfdetcols' => 'INTBCONFDETCOLS',
        'configIn.intbconfdetcols' => 'INTBCONFDETCOLS',
        'ConfigInTableMap::COL_INTBCONFDETCOLS' => 'INTBCONFDETCOLS',
        'COL_INTBCONFDETCOLS' => 'INTBCONFDETCOLS',
        'IntbConfDetCols' => 'INTBCONFDETCOLS',
        'in_config.IntbConfDetCols' => 'INTBCONFDETCOLS',
        'Intbconfminmaxzero' => 'INTBCONFMINMAXZERO',
        'ConfigIn.Intbconfminmaxzero' => 'INTBCONFMINMAXZERO',
        'intbconfminmaxzero' => 'INTBCONFMINMAXZERO',
        'configIn.intbconfminmaxzero' => 'INTBCONFMINMAXZERO',
        'ConfigInTableMap::COL_INTBCONFMINMAXZERO' => 'INTBCONFMINMAXZERO',
        'COL_INTBCONFMINMAXZERO' => 'INTBCONFMINMAXZERO',
        'IntbConfMinMaxZero' => 'INTBCONFMINMAXZERO',
        'in_config.IntbConfMinMaxZero' => 'INTBCONFMINMAXZERO',
        'Intbconfminrec' => 'INTBCONFMINREC',
        'ConfigIn.Intbconfminrec' => 'INTBCONFMINREC',
        'intbconfminrec' => 'INTBCONFMINREC',
        'configIn.intbconfminrec' => 'INTBCONFMINREC',
        'ConfigInTableMap::COL_INTBCONFMINREC' => 'INTBCONFMINREC',
        'COL_INTBCONFMINREC' => 'INTBCONFMINREC',
        'IntbConfMinRec' => 'INTBCONFMINREC',
        'in_config.IntbConfMinRec' => 'INTBCONFMINREC',
        'Intbconfatbelowmin' => 'INTBCONFATBELOWMIN',
        'ConfigIn.Intbconfatbelowmin' => 'INTBCONFATBELOWMIN',
        'intbconfatbelowmin' => 'INTBCONFATBELOWMIN',
        'configIn.intbconfatbelowmin' => 'INTBCONFATBELOWMIN',
        'ConfigInTableMap::COL_INTBCONFATBELOWMIN' => 'INTBCONFATBELOWMIN',
        'COL_INTBCONFATBELOWMIN' => 'INTBCONFATBELOWMIN',
        'IntbConfAtBelowMin' => 'INTBCONFATBELOWMIN',
        'in_config.IntbConfAtBelowMin' => 'INTBCONFATBELOWMIN',
        'Intbconfonewhse' => 'INTBCONFONEWHSE',
        'ConfigIn.Intbconfonewhse' => 'INTBCONFONEWHSE',
        'intbconfonewhse' => 'INTBCONFONEWHSE',
        'configIn.intbconfonewhse' => 'INTBCONFONEWHSE',
        'ConfigInTableMap::COL_INTBCONFONEWHSE' => 'INTBCONFONEWHSE',
        'COL_INTBCONFONEWHSE' => 'INTBCONFONEWHSE',
        'IntbConfOneWhse' => 'INTBCONFONEWHSE',
        'in_config.IntbConfOneWhse' => 'INTBCONFONEWHSE',
        'Intbconfytdmth' => 'INTBCONFYTDMTH',
        'ConfigIn.Intbconfytdmth' => 'INTBCONFYTDMTH',
        'intbconfytdmth' => 'INTBCONFYTDMTH',
        'configIn.intbconfytdmth' => 'INTBCONFYTDMTH',
        'ConfigInTableMap::COL_INTBCONFYTDMTH' => 'INTBCONFYTDMTH',
        'COL_INTBCONFYTDMTH' => 'INTBCONFYTDMTH',
        'IntbConfYtdMth' => 'INTBCONFYTDMTH',
        'in_config.IntbConfYtdMth' => 'INTBCONFYTDMTH',
        'Intbconfusegramsltr' => 'INTBCONFUSEGRAMSLTR',
        'ConfigIn.Intbconfusegramsltr' => 'INTBCONFUSEGRAMSLTR',
        'intbconfusegramsltr' => 'INTBCONFUSEGRAMSLTR',
        'configIn.intbconfusegramsltr' => 'INTBCONFUSEGRAMSLTR',
        'ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR' => 'INTBCONFUSEGRAMSLTR',
        'COL_INTBCONFUSEGRAMSLTR' => 'INTBCONFUSEGRAMSLTR',
        'IntbConfUseGramsLtr' => 'INTBCONFUSEGRAMSLTR',
        'in_config.IntbConfUseGramsLtr' => 'INTBCONFUSEGRAMSLTR',
        'Intbconfabcbywhse' => 'INTBCONFABCBYWHSE',
        'ConfigIn.Intbconfabcbywhse' => 'INTBCONFABCBYWHSE',
        'intbconfabcbywhse' => 'INTBCONFABCBYWHSE',
        'configIn.intbconfabcbywhse' => 'INTBCONFABCBYWHSE',
        'ConfigInTableMap::COL_INTBCONFABCBYWHSE' => 'INTBCONFABCBYWHSE',
        'COL_INTBCONFABCBYWHSE' => 'INTBCONFABCBYWHSE',
        'IntbConfAbcByWhse' => 'INTBCONFABCBYWHSE',
        'in_config.IntbConfAbcByWhse' => 'INTBCONFABCBYWHSE',
        'Intbconfabcnbrmths' => 'INTBCONFABCNBRMTHS',
        'ConfigIn.Intbconfabcnbrmths' => 'INTBCONFABCNBRMTHS',
        'intbconfabcnbrmths' => 'INTBCONFABCNBRMTHS',
        'configIn.intbconfabcnbrmths' => 'INTBCONFABCNBRMTHS',
        'ConfigInTableMap::COL_INTBCONFABCNBRMTHS' => 'INTBCONFABCNBRMTHS',
        'COL_INTBCONFABCNBRMTHS' => 'INTBCONFABCNBRMTHS',
        'IntbConfAbcNbrMths' => 'INTBCONFABCNBRMTHS',
        'in_config.IntbConfAbcNbrMths' => 'INTBCONFABCNBRMTHS',
        'Intbconfabcbasecode' => 'INTBCONFABCBASECODE',
        'ConfigIn.Intbconfabcbasecode' => 'INTBCONFABCBASECODE',
        'intbconfabcbasecode' => 'INTBCONFABCBASECODE',
        'configIn.intbconfabcbasecode' => 'INTBCONFABCBASECODE',
        'ConfigInTableMap::COL_INTBCONFABCBASECODE' => 'INTBCONFABCBASECODE',
        'COL_INTBCONFABCBASECODE' => 'INTBCONFABCBASECODE',
        'IntbConfAbcBaseCode' => 'INTBCONFABCBASECODE',
        'in_config.IntbConfAbcBaseCode' => 'INTBCONFABCBASECODE',
        'Intbconfabclevla' => 'INTBCONFABCLEVLA',
        'ConfigIn.Intbconfabclevla' => 'INTBCONFABCLEVLA',
        'intbconfabclevla' => 'INTBCONFABCLEVLA',
        'configIn.intbconfabclevla' => 'INTBCONFABCLEVLA',
        'ConfigInTableMap::COL_INTBCONFABCLEVLA' => 'INTBCONFABCLEVLA',
        'COL_INTBCONFABCLEVLA' => 'INTBCONFABCLEVLA',
        'IntbConfAbcLevlA' => 'INTBCONFABCLEVLA',
        'in_config.IntbConfAbcLevlA' => 'INTBCONFABCLEVLA',
        'Intbconfabclevlb' => 'INTBCONFABCLEVLB',
        'ConfigIn.Intbconfabclevlb' => 'INTBCONFABCLEVLB',
        'intbconfabclevlb' => 'INTBCONFABCLEVLB',
        'configIn.intbconfabclevlb' => 'INTBCONFABCLEVLB',
        'ConfigInTableMap::COL_INTBCONFABCLEVLB' => 'INTBCONFABCLEVLB',
        'COL_INTBCONFABCLEVLB' => 'INTBCONFABCLEVLB',
        'IntbConfAbcLevlB' => 'INTBCONFABCLEVLB',
        'in_config.IntbConfAbcLevlB' => 'INTBCONFABCLEVLB',
        'Intbconfabclevlc' => 'INTBCONFABCLEVLC',
        'ConfigIn.Intbconfabclevlc' => 'INTBCONFABCLEVLC',
        'intbconfabclevlc' => 'INTBCONFABCLEVLC',
        'configIn.intbconfabclevlc' => 'INTBCONFABCLEVLC',
        'ConfigInTableMap::COL_INTBCONFABCLEVLC' => 'INTBCONFABCLEVLC',
        'COL_INTBCONFABCLEVLC' => 'INTBCONFABCLEVLC',
        'IntbConfAbcLevlC' => 'INTBCONFABCLEVLC',
        'in_config.IntbConfAbcLevlC' => 'INTBCONFABCLEVLC',
        'Intbconfabclevld' => 'INTBCONFABCLEVLD',
        'ConfigIn.Intbconfabclevld' => 'INTBCONFABCLEVLD',
        'intbconfabclevld' => 'INTBCONFABCLEVLD',
        'configIn.intbconfabclevld' => 'INTBCONFABCLEVLD',
        'ConfigInTableMap::COL_INTBCONFABCLEVLD' => 'INTBCONFABCLEVLD',
        'COL_INTBCONFABCLEVLD' => 'INTBCONFABCLEVLD',
        'IntbConfAbcLevlD' => 'INTBCONFABCLEVLD',
        'in_config.IntbConfAbcLevlD' => 'INTBCONFABCLEVLD',
        'Intbconfabclevle' => 'INTBCONFABCLEVLE',
        'ConfigIn.Intbconfabclevle' => 'INTBCONFABCLEVLE',
        'intbconfabclevle' => 'INTBCONFABCLEVLE',
        'configIn.intbconfabclevle' => 'INTBCONFABCLEVLE',
        'ConfigInTableMap::COL_INTBCONFABCLEVLE' => 'INTBCONFABCLEVLE',
        'COL_INTBCONFABCLEVLE' => 'INTBCONFABCLEVLE',
        'IntbConfAbcLevlE' => 'INTBCONFABCLEVLE',
        'in_config.IntbConfAbcLevlE' => 'INTBCONFABCLEVLE',
        'Intbconfabclevlf' => 'INTBCONFABCLEVLF',
        'ConfigIn.Intbconfabclevlf' => 'INTBCONFABCLEVLF',
        'intbconfabclevlf' => 'INTBCONFABCLEVLF',
        'configIn.intbconfabclevlf' => 'INTBCONFABCLEVLF',
        'ConfigInTableMap::COL_INTBCONFABCLEVLF' => 'INTBCONFABCLEVLF',
        'COL_INTBCONFABCLEVLF' => 'INTBCONFABCLEVLF',
        'IntbConfAbcLevlF' => 'INTBCONFABCLEVLF',
        'in_config.IntbConfAbcLevlF' => 'INTBCONFABCLEVLF',
        'Intbconfabclevlg' => 'INTBCONFABCLEVLG',
        'ConfigIn.Intbconfabclevlg' => 'INTBCONFABCLEVLG',
        'intbconfabclevlg' => 'INTBCONFABCLEVLG',
        'configIn.intbconfabclevlg' => 'INTBCONFABCLEVLG',
        'ConfigInTableMap::COL_INTBCONFABCLEVLG' => 'INTBCONFABCLEVLG',
        'COL_INTBCONFABCLEVLG' => 'INTBCONFABCLEVLG',
        'IntbConfAbcLevlG' => 'INTBCONFABCLEVLG',
        'in_config.IntbConfAbcLevlG' => 'INTBCONFABCLEVLG',
        'Intbconfabclevlh' => 'INTBCONFABCLEVLH',
        'ConfigIn.Intbconfabclevlh' => 'INTBCONFABCLEVLH',
        'intbconfabclevlh' => 'INTBCONFABCLEVLH',
        'configIn.intbconfabclevlh' => 'INTBCONFABCLEVLH',
        'ConfigInTableMap::COL_INTBCONFABCLEVLH' => 'INTBCONFABCLEVLH',
        'COL_INTBCONFABCLEVLH' => 'INTBCONFABCLEVLH',
        'IntbConfAbcLevlH' => 'INTBCONFABCLEVLH',
        'in_config.IntbConfAbcLevlH' => 'INTBCONFABCLEVLH',
        'Intbconfabclevli' => 'INTBCONFABCLEVLI',
        'ConfigIn.Intbconfabclevli' => 'INTBCONFABCLEVLI',
        'intbconfabclevli' => 'INTBCONFABCLEVLI',
        'configIn.intbconfabclevli' => 'INTBCONFABCLEVLI',
        'ConfigInTableMap::COL_INTBCONFABCLEVLI' => 'INTBCONFABCLEVLI',
        'COL_INTBCONFABCLEVLI' => 'INTBCONFABCLEVLI',
        'IntbConfAbcLevlI' => 'INTBCONFABCLEVLI',
        'in_config.IntbConfAbcLevlI' => 'INTBCONFABCLEVLI',
        'Intbconfabclevlj' => 'INTBCONFABCLEVLJ',
        'ConfigIn.Intbconfabclevlj' => 'INTBCONFABCLEVLJ',
        'intbconfabclevlj' => 'INTBCONFABCLEVLJ',
        'configIn.intbconfabclevlj' => 'INTBCONFABCLEVLJ',
        'ConfigInTableMap::COL_INTBCONFABCLEVLJ' => 'INTBCONFABCLEVLJ',
        'COL_INTBCONFABCLEVLJ' => 'INTBCONFABCLEVLJ',
        'IntbConfAbcLevlJ' => 'INTBCONFABCLEVLJ',
        'in_config.IntbConfAbcLevlJ' => 'INTBCONFABCLEVLJ',
        'Intbconfuseforeignx' => 'INTBCONFUSEFOREIGNX',
        'ConfigIn.Intbconfuseforeignx' => 'INTBCONFUSEFOREIGNX',
        'intbconfuseforeignx' => 'INTBCONFUSEFOREIGNX',
        'configIn.intbconfuseforeignx' => 'INTBCONFUSEFOREIGNX',
        'ConfigInTableMap::COL_INTBCONFUSEFOREIGNX' => 'INTBCONFUSEFOREIGNX',
        'COL_INTBCONFUSEFOREIGNX' => 'INTBCONFUSEFOREIGNX',
        'IntbConfUseForeignX' => 'INTBCONFUSEFOREIGNX',
        'in_config.IntbConfUseForeignX' => 'INTBCONFUSEFOREIGNX',
        'Intbconfusenafta' => 'INTBCONFUSENAFTA',
        'ConfigIn.Intbconfusenafta' => 'INTBCONFUSENAFTA',
        'intbconfusenafta' => 'INTBCONFUSENAFTA',
        'configIn.intbconfusenafta' => 'INTBCONFUSENAFTA',
        'ConfigInTableMap::COL_INTBCONFUSENAFTA' => 'INTBCONFUSENAFTA',
        'COL_INTBCONFUSENAFTA' => 'INTBCONFUSENAFTA',
        'IntbConfUseNafta' => 'INTBCONFUSENAFTA',
        'in_config.IntbConfUseNafta' => 'INTBCONFUSENAFTA',
        'Intbconfnaftaprefcode' => 'INTBCONFNAFTAPREFCODE',
        'ConfigIn.Intbconfnaftaprefcode' => 'INTBCONFNAFTAPREFCODE',
        'intbconfnaftaprefcode' => 'INTBCONFNAFTAPREFCODE',
        'configIn.intbconfnaftaprefcode' => 'INTBCONFNAFTAPREFCODE',
        'ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE' => 'INTBCONFNAFTAPREFCODE',
        'COL_INTBCONFNAFTAPREFCODE' => 'INTBCONFNAFTAPREFCODE',
        'IntbConfNaftaPrefCode' => 'INTBCONFNAFTAPREFCODE',
        'in_config.IntbConfNaftaPrefCode' => 'INTBCONFNAFTAPREFCODE',
        'Intbconfnaftaproducer' => 'INTBCONFNAFTAPRODUCER',
        'ConfigIn.Intbconfnaftaproducer' => 'INTBCONFNAFTAPRODUCER',
        'intbconfnaftaproducer' => 'INTBCONFNAFTAPRODUCER',
        'configIn.intbconfnaftaproducer' => 'INTBCONFNAFTAPRODUCER',
        'ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER' => 'INTBCONFNAFTAPRODUCER',
        'COL_INTBCONFNAFTAPRODUCER' => 'INTBCONFNAFTAPRODUCER',
        'IntbConfNaftaProducer' => 'INTBCONFNAFTAPRODUCER',
        'in_config.IntbConfNaftaProducer' => 'INTBCONFNAFTAPRODUCER',
        'Intbconfnaftadoccode' => 'INTBCONFNAFTADOCCODE',
        'ConfigIn.Intbconfnaftadoccode' => 'INTBCONFNAFTADOCCODE',
        'intbconfnaftadoccode' => 'INTBCONFNAFTADOCCODE',
        'configIn.intbconfnaftadoccode' => 'INTBCONFNAFTADOCCODE',
        'ConfigInTableMap::COL_INTBCONFNAFTADOCCODE' => 'INTBCONFNAFTADOCCODE',
        'COL_INTBCONFNAFTADOCCODE' => 'INTBCONFNAFTADOCCODE',
        'IntbConfNaftaDocCode' => 'INTBCONFNAFTADOCCODE',
        'in_config.IntbConfNaftaDocCode' => 'INTBCONFNAFTADOCCODE',
        'Intbconfphyscurrwksh' => 'INTBCONFPHYSCURRWKSH',
        'ConfigIn.Intbconfphyscurrwksh' => 'INTBCONFPHYSCURRWKSH',
        'intbconfphyscurrwksh' => 'INTBCONFPHYSCURRWKSH',
        'configIn.intbconfphyscurrwksh' => 'INTBCONFPHYSCURRWKSH',
        'ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH' => 'INTBCONFPHYSCURRWKSH',
        'COL_INTBCONFPHYSCURRWKSH' => 'INTBCONFPHYSCURRWKSH',
        'IntbConfPhysCurrWksh' => 'INTBCONFPHYSCURRWKSH',
        'in_config.IntbConfPhysCurrWksh' => 'INTBCONFPHYSCURRWKSH',
        'Intbconf20or30' => 'INTBCONF20OR30',
        'ConfigIn.Intbconf20or30' => 'INTBCONF20OR30',
        'intbconf20or30' => 'INTBCONF20OR30',
        'configIn.intbconf20or30' => 'INTBCONF20OR30',
        'ConfigInTableMap::COL_INTBCONF20OR30' => 'INTBCONF20OR30',
        'COL_INTBCONF20OR30' => 'INTBCONF20OR30',
        'IntbConf20Or30' => 'INTBCONF20OR30',
        'in_config.IntbConf20Or30' => 'INTBCONF20OR30',
        'Intbconfdisporigcnt' => 'INTBCONFDISPORIGCNT',
        'ConfigIn.Intbconfdisporigcnt' => 'INTBCONFDISPORIGCNT',
        'intbconfdisporigcnt' => 'INTBCONFDISPORIGCNT',
        'configIn.intbconfdisporigcnt' => 'INTBCONFDISPORIGCNT',
        'ConfigInTableMap::COL_INTBCONFDISPORIGCNT' => 'INTBCONFDISPORIGCNT',
        'COL_INTBCONFDISPORIGCNT' => 'INTBCONFDISPORIGCNT',
        'IntbConfDispOrigCnt' => 'INTBCONFDISPORIGCNT',
        'in_config.IntbConfDispOrigCnt' => 'INTBCONFDISPORIGCNT',
        'Intbconfdispgl' => 'INTBCONFDISPGL',
        'ConfigIn.Intbconfdispgl' => 'INTBCONFDISPGL',
        'intbconfdispgl' => 'INTBCONFDISPGL',
        'configIn.intbconfdispgl' => 'INTBCONFDISPGL',
        'ConfigInTableMap::COL_INTBCONFDISPGL' => 'INTBCONFDISPGL',
        'COL_INTBCONFDISPGL' => 'INTBCONFDISPGL',
        'IntbConfDispGl' => 'INTBCONFDISPGL',
        'in_config.IntbConfDispGl' => 'INTBCONFDISPGL',
        'Intbconfdispref' => 'INTBCONFDISPREF',
        'ConfigIn.Intbconfdispref' => 'INTBCONFDISPREF',
        'intbconfdispref' => 'INTBCONFDISPREF',
        'configIn.intbconfdispref' => 'INTBCONFDISPREF',
        'ConfigInTableMap::COL_INTBCONFDISPREF' => 'INTBCONFDISPREF',
        'COL_INTBCONFDISPREF' => 'INTBCONFDISPREF',
        'IntbConfDispRef' => 'INTBCONFDISPREF',
        'in_config.IntbConfDispRef' => 'INTBCONFDISPREF',
        'Intbconfdispcost' => 'INTBCONFDISPCOST',
        'ConfigIn.Intbconfdispcost' => 'INTBCONFDISPCOST',
        'intbconfdispcost' => 'INTBCONFDISPCOST',
        'configIn.intbconfdispcost' => 'INTBCONFDISPCOST',
        'ConfigInTableMap::COL_INTBCONFDISPCOST' => 'INTBCONFDISPCOST',
        'COL_INTBCONFDISPCOST' => 'INTBCONFDISPCOST',
        'IntbConfDispCost' => 'INTBCONFDISPCOST',
        'in_config.IntbConfDispCost' => 'INTBCONFDISPCOST',
        'Intbconfprtval' => 'INTBCONFPRTVAL',
        'ConfigIn.Intbconfprtval' => 'INTBCONFPRTVAL',
        'intbconfprtval' => 'INTBCONFPRTVAL',
        'configIn.intbconfprtval' => 'INTBCONFPRTVAL',
        'ConfigInTableMap::COL_INTBCONFPRTVAL' => 'INTBCONFPRTVAL',
        'COL_INTBCONFPRTVAL' => 'INTBCONFPRTVAL',
        'IntbConfPrtVal' => 'INTBCONFPRTVAL',
        'in_config.IntbConfPrtVal' => 'INTBCONFPRTVAL',
        'Intbconfprtgl' => 'INTBCONFPRTGL',
        'ConfigIn.Intbconfprtgl' => 'INTBCONFPRTGL',
        'intbconfprtgl' => 'INTBCONFPRTGL',
        'configIn.intbconfprtgl' => 'INTBCONFPRTGL',
        'ConfigInTableMap::COL_INTBCONFPRTGL' => 'INTBCONFPRTGL',
        'COL_INTBCONFPRTGL' => 'INTBCONFPRTGL',
        'IntbConfPrtGl' => 'INTBCONFPRTGL',
        'in_config.IntbConfPrtGl' => 'INTBCONFPRTGL',
        'Intbconfglacct' => 'INTBCONFGLACCT',
        'ConfigIn.Intbconfglacct' => 'INTBCONFGLACCT',
        'intbconfglacct' => 'INTBCONFGLACCT',
        'configIn.intbconfglacct' => 'INTBCONFGLACCT',
        'ConfigInTableMap::COL_INTBCONFGLACCT' => 'INTBCONFGLACCT',
        'COL_INTBCONFGLACCT' => 'INTBCONFGLACCT',
        'IntbConfGlAcct' => 'INTBCONFGLACCT',
        'in_config.IntbConfGlAcct' => 'INTBCONFGLACCT',
        'Intbconfref' => 'INTBCONFREF',
        'ConfigIn.Intbconfref' => 'INTBCONFREF',
        'intbconfref' => 'INTBCONFREF',
        'configIn.intbconfref' => 'INTBCONFREF',
        'ConfigInTableMap::COL_INTBCONFREF' => 'INTBCONFREF',
        'COL_INTBCONFREF' => 'INTBCONFREF',
        'IntbConfRef' => 'INTBCONFREF',
        'in_config.IntbConfRef' => 'INTBCONFREF',
        'Intbconfcosttype' => 'INTBCONFCOSTTYPE',
        'ConfigIn.Intbconfcosttype' => 'INTBCONFCOSTTYPE',
        'intbconfcosttype' => 'INTBCONFCOSTTYPE',
        'configIn.intbconfcosttype' => 'INTBCONFCOSTTYPE',
        'ConfigInTableMap::COL_INTBCONFCOSTTYPE' => 'INTBCONFCOSTTYPE',
        'COL_INTBCONFCOSTTYPE' => 'INTBCONFCOSTTYPE',
        'IntbConfCostType' => 'INTBCONFCOSTTYPE',
        'in_config.IntbConfCostType' => 'INTBCONFCOSTTYPE',
        'Intbconfnormalonly' => 'INTBCONFNORMALONLY',
        'ConfigIn.Intbconfnormalonly' => 'INTBCONFNORMALONLY',
        'intbconfnormalonly' => 'INTBCONFNORMALONLY',
        'configIn.intbconfnormalonly' => 'INTBCONFNORMALONLY',
        'ConfigInTableMap::COL_INTBCONFNORMALONLY' => 'INTBCONFNORMALONLY',
        'COL_INTBCONFNORMALONLY' => 'INTBCONFNORMALONLY',
        'IntbConfNormalOnly' => 'INTBCONFNORMALONLY',
        'in_config.IntbConfNormalOnly' => 'INTBCONFNORMALONLY',
        'Intbconfusewhsedef' => 'INTBCONFUSEWHSEDEF',
        'ConfigIn.Intbconfusewhsedef' => 'INTBCONFUSEWHSEDEF',
        'intbconfusewhsedef' => 'INTBCONFUSEWHSEDEF',
        'configIn.intbconfusewhsedef' => 'INTBCONFUSEWHSEDEF',
        'ConfigInTableMap::COL_INTBCONFUSEWHSEDEF' => 'INTBCONFUSEWHSEDEF',
        'COL_INTBCONFUSEWHSEDEF' => 'INTBCONFUSEWHSEDEF',
        'IntbConfUseWhseDef' => 'INTBCONFUSEWHSEDEF',
        'in_config.IntbConfUseWhseDef' => 'INTBCONFUSEWHSEDEF',
        'Intbcon2dfltwhse01' => 'INTBCON2DFLTWHSE01',
        'ConfigIn.Intbcon2dfltwhse01' => 'INTBCON2DFLTWHSE01',
        'intbcon2dfltwhse01' => 'INTBCON2DFLTWHSE01',
        'configIn.intbcon2dfltwhse01' => 'INTBCON2DFLTWHSE01',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE01' => 'INTBCON2DFLTWHSE01',
        'COL_INTBCON2DFLTWHSE01' => 'INTBCON2DFLTWHSE01',
        'IntbCon2DfltWhse01' => 'INTBCON2DFLTWHSE01',
        'in_config.IntbCon2DfltWhse01' => 'INTBCON2DFLTWHSE01',
        'Intbcon2dfltwhse02' => 'INTBCON2DFLTWHSE02',
        'ConfigIn.Intbcon2dfltwhse02' => 'INTBCON2DFLTWHSE02',
        'intbcon2dfltwhse02' => 'INTBCON2DFLTWHSE02',
        'configIn.intbcon2dfltwhse02' => 'INTBCON2DFLTWHSE02',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE02' => 'INTBCON2DFLTWHSE02',
        'COL_INTBCON2DFLTWHSE02' => 'INTBCON2DFLTWHSE02',
        'IntbCon2DfltWhse02' => 'INTBCON2DFLTWHSE02',
        'in_config.IntbCon2DfltWhse02' => 'INTBCON2DFLTWHSE02',
        'Intbcon2dfltwhse03' => 'INTBCON2DFLTWHSE03',
        'ConfigIn.Intbcon2dfltwhse03' => 'INTBCON2DFLTWHSE03',
        'intbcon2dfltwhse03' => 'INTBCON2DFLTWHSE03',
        'configIn.intbcon2dfltwhse03' => 'INTBCON2DFLTWHSE03',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE03' => 'INTBCON2DFLTWHSE03',
        'COL_INTBCON2DFLTWHSE03' => 'INTBCON2DFLTWHSE03',
        'IntbCon2DfltWhse03' => 'INTBCON2DFLTWHSE03',
        'in_config.IntbCon2DfltWhse03' => 'INTBCON2DFLTWHSE03',
        'Intbcon2dfltwhse04' => 'INTBCON2DFLTWHSE04',
        'ConfigIn.Intbcon2dfltwhse04' => 'INTBCON2DFLTWHSE04',
        'intbcon2dfltwhse04' => 'INTBCON2DFLTWHSE04',
        'configIn.intbcon2dfltwhse04' => 'INTBCON2DFLTWHSE04',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE04' => 'INTBCON2DFLTWHSE04',
        'COL_INTBCON2DFLTWHSE04' => 'INTBCON2DFLTWHSE04',
        'IntbCon2DfltWhse04' => 'INTBCON2DFLTWHSE04',
        'in_config.IntbCon2DfltWhse04' => 'INTBCON2DFLTWHSE04',
        'Intbcon2dfltwhse05' => 'INTBCON2DFLTWHSE05',
        'ConfigIn.Intbcon2dfltwhse05' => 'INTBCON2DFLTWHSE05',
        'intbcon2dfltwhse05' => 'INTBCON2DFLTWHSE05',
        'configIn.intbcon2dfltwhse05' => 'INTBCON2DFLTWHSE05',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE05' => 'INTBCON2DFLTWHSE05',
        'COL_INTBCON2DFLTWHSE05' => 'INTBCON2DFLTWHSE05',
        'IntbCon2DfltWhse05' => 'INTBCON2DFLTWHSE05',
        'in_config.IntbCon2DfltWhse05' => 'INTBCON2DFLTWHSE05',
        'Intbcon2dfltwhse06' => 'INTBCON2DFLTWHSE06',
        'ConfigIn.Intbcon2dfltwhse06' => 'INTBCON2DFLTWHSE06',
        'intbcon2dfltwhse06' => 'INTBCON2DFLTWHSE06',
        'configIn.intbcon2dfltwhse06' => 'INTBCON2DFLTWHSE06',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE06' => 'INTBCON2DFLTWHSE06',
        'COL_INTBCON2DFLTWHSE06' => 'INTBCON2DFLTWHSE06',
        'IntbCon2DfltWhse06' => 'INTBCON2DFLTWHSE06',
        'in_config.IntbCon2DfltWhse06' => 'INTBCON2DFLTWHSE06',
        'Intbcon2dfltwhse07' => 'INTBCON2DFLTWHSE07',
        'ConfigIn.Intbcon2dfltwhse07' => 'INTBCON2DFLTWHSE07',
        'intbcon2dfltwhse07' => 'INTBCON2DFLTWHSE07',
        'configIn.intbcon2dfltwhse07' => 'INTBCON2DFLTWHSE07',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE07' => 'INTBCON2DFLTWHSE07',
        'COL_INTBCON2DFLTWHSE07' => 'INTBCON2DFLTWHSE07',
        'IntbCon2DfltWhse07' => 'INTBCON2DFLTWHSE07',
        'in_config.IntbCon2DfltWhse07' => 'INTBCON2DFLTWHSE07',
        'Intbcon2dfltwhse08' => 'INTBCON2DFLTWHSE08',
        'ConfigIn.Intbcon2dfltwhse08' => 'INTBCON2DFLTWHSE08',
        'intbcon2dfltwhse08' => 'INTBCON2DFLTWHSE08',
        'configIn.intbcon2dfltwhse08' => 'INTBCON2DFLTWHSE08',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE08' => 'INTBCON2DFLTWHSE08',
        'COL_INTBCON2DFLTWHSE08' => 'INTBCON2DFLTWHSE08',
        'IntbCon2DfltWhse08' => 'INTBCON2DFLTWHSE08',
        'in_config.IntbCon2DfltWhse08' => 'INTBCON2DFLTWHSE08',
        'Intbcon2dfltwhse09' => 'INTBCON2DFLTWHSE09',
        'ConfigIn.Intbcon2dfltwhse09' => 'INTBCON2DFLTWHSE09',
        'intbcon2dfltwhse09' => 'INTBCON2DFLTWHSE09',
        'configIn.intbcon2dfltwhse09' => 'INTBCON2DFLTWHSE09',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE09' => 'INTBCON2DFLTWHSE09',
        'COL_INTBCON2DFLTWHSE09' => 'INTBCON2DFLTWHSE09',
        'IntbCon2DfltWhse09' => 'INTBCON2DFLTWHSE09',
        'in_config.IntbCon2DfltWhse09' => 'INTBCON2DFLTWHSE09',
        'Intbcon2dfltwhse10' => 'INTBCON2DFLTWHSE10',
        'ConfigIn.Intbcon2dfltwhse10' => 'INTBCON2DFLTWHSE10',
        'intbcon2dfltwhse10' => 'INTBCON2DFLTWHSE10',
        'configIn.intbcon2dfltwhse10' => 'INTBCON2DFLTWHSE10',
        'ConfigInTableMap::COL_INTBCON2DFLTWHSE10' => 'INTBCON2DFLTWHSE10',
        'COL_INTBCON2DFLTWHSE10' => 'INTBCON2DFLTWHSE10',
        'IntbCon2DfltWhse10' => 'INTBCON2DFLTWHSE10',
        'in_config.IntbCon2DfltWhse10' => 'INTBCON2DFLTWHSE10',
        'Intbconfbindef' => 'INTBCONFBINDEF',
        'ConfigIn.Intbconfbindef' => 'INTBCONFBINDEF',
        'intbconfbindef' => 'INTBCONFBINDEF',
        'configIn.intbconfbindef' => 'INTBCONFBINDEF',
        'ConfigInTableMap::COL_INTBCONFBINDEF' => 'INTBCONFBINDEF',
        'COL_INTBCONFBINDEF' => 'INTBCONFBINDEF',
        'IntbConfBinDef' => 'INTBCONFBINDEF',
        'in_config.IntbConfBinDef' => 'INTBCONFBINDEF',
        'Intbconfcycldef' => 'INTBCONFCYCLDEF',
        'ConfigIn.Intbconfcycldef' => 'INTBCONFCYCLDEF',
        'intbconfcycldef' => 'INTBCONFCYCLDEF',
        'configIn.intbconfcycldef' => 'INTBCONFCYCLDEF',
        'ConfigInTableMap::COL_INTBCONFCYCLDEF' => 'INTBCONFCYCLDEF',
        'COL_INTBCONFCYCLDEF' => 'INTBCONFCYCLDEF',
        'IntbConfCyclDef' => 'INTBCONFCYCLDEF',
        'in_config.IntbConfCyclDef' => 'INTBCONFCYCLDEF',
        'Intbconfstatdef' => 'INTBCONFSTATDEF',
        'ConfigIn.Intbconfstatdef' => 'INTBCONFSTATDEF',
        'intbconfstatdef' => 'INTBCONFSTATDEF',
        'configIn.intbconfstatdef' => 'INTBCONFSTATDEF',
        'ConfigInTableMap::COL_INTBCONFSTATDEF' => 'INTBCONFSTATDEF',
        'COL_INTBCONFSTATDEF' => 'INTBCONFSTATDEF',
        'IntbConfStatDef' => 'INTBCONFSTATDEF',
        'in_config.IntbConfStatDef' => 'INTBCONFSTATDEF',
        'Intbconfabcdef' => 'INTBCONFABCDEF',
        'ConfigIn.Intbconfabcdef' => 'INTBCONFABCDEF',
        'intbconfabcdef' => 'INTBCONFABCDEF',
        'configIn.intbconfabcdef' => 'INTBCONFABCDEF',
        'ConfigInTableMap::COL_INTBCONFABCDEF' => 'INTBCONFABCDEF',
        'COL_INTBCONFABCDEF' => 'INTBCONFABCDEF',
        'IntbConfAbcDef' => 'INTBCONFABCDEF',
        'in_config.IntbConfAbcDef' => 'INTBCONFABCDEF',
        'Intbconfspecordrdef' => 'INTBCONFSPECORDRDEF',
        'ConfigIn.Intbconfspecordrdef' => 'INTBCONFSPECORDRDEF',
        'intbconfspecordrdef' => 'INTBCONFSPECORDRDEF',
        'configIn.intbconfspecordrdef' => 'INTBCONFSPECORDRDEF',
        'ConfigInTableMap::COL_INTBCONFSPECORDRDEF' => 'INTBCONFSPECORDRDEF',
        'COL_INTBCONFSPECORDRDEF' => 'INTBCONFSPECORDRDEF',
        'IntbConfSpecOrdrDef' => 'INTBCONFSPECORDRDEF',
        'in_config.IntbConfSpecOrdrDef' => 'INTBCONFSPECORDRDEF',
        'Intbconfordrpntdef' => 'INTBCONFORDRPNTDEF',
        'ConfigIn.Intbconfordrpntdef' => 'INTBCONFORDRPNTDEF',
        'intbconfordrpntdef' => 'INTBCONFORDRPNTDEF',
        'configIn.intbconfordrpntdef' => 'INTBCONFORDRPNTDEF',
        'ConfigInTableMap::COL_INTBCONFORDRPNTDEF' => 'INTBCONFORDRPNTDEF',
        'COL_INTBCONFORDRPNTDEF' => 'INTBCONFORDRPNTDEF',
        'IntbConfOrdrPntDef' => 'INTBCONFORDRPNTDEF',
        'in_config.IntbConfOrdrPntDef' => 'INTBCONFORDRPNTDEF',
        'Intbconfmaxdef' => 'INTBCONFMAXDEF',
        'ConfigIn.Intbconfmaxdef' => 'INTBCONFMAXDEF',
        'intbconfmaxdef' => 'INTBCONFMAXDEF',
        'configIn.intbconfmaxdef' => 'INTBCONFMAXDEF',
        'ConfigInTableMap::COL_INTBCONFMAXDEF' => 'INTBCONFMAXDEF',
        'COL_INTBCONFMAXDEF' => 'INTBCONFMAXDEF',
        'IntbConfMaxDef' => 'INTBCONFMAXDEF',
        'in_config.IntbConfMaxDef' => 'INTBCONFMAXDEF',
        'Intbconfordrqtydef' => 'INTBCONFORDRQTYDEF',
        'ConfigIn.Intbconfordrqtydef' => 'INTBCONFORDRQTYDEF',
        'intbconfordrqtydef' => 'INTBCONFORDRQTYDEF',
        'configIn.intbconfordrqtydef' => 'INTBCONFORDRQTYDEF',
        'ConfigInTableMap::COL_INTBCONFORDRQTYDEF' => 'INTBCONFORDRQTYDEF',
        'COL_INTBCONFORDRQTYDEF' => 'INTBCONFORDRQTYDEF',
        'IntbConfOrdrQtyDef' => 'INTBCONFORDRQTYDEF',
        'in_config.IntbConfOrdrQtyDef' => 'INTBCONFORDRQTYDEF',
        'Intbconftrcptallowcmpl' => 'INTBCONFTRCPTALLOWCMPL',
        'ConfigIn.Intbconftrcptallowcmpl' => 'INTBCONFTRCPTALLOWCMPL',
        'intbconftrcptallowcmpl' => 'INTBCONFTRCPTALLOWCMPL',
        'configIn.intbconftrcptallowcmpl' => 'INTBCONFTRCPTALLOWCMPL',
        'ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL' => 'INTBCONFTRCPTALLOWCMPL',
        'COL_INTBCONFTRCPTALLOWCMPL' => 'INTBCONFTRCPTALLOWCMPL',
        'IntbConfTrcptAllowCmpl' => 'INTBCONFTRCPTALLOWCMPL',
        'in_config.IntbConfTrcptAllowCmpl' => 'INTBCONFTRCPTALLOWCMPL',
        'Intbconftrecmmtstock' => 'INTBCONFTRECMMTSTOCK',
        'ConfigIn.Intbconftrecmmtstock' => 'INTBCONFTRECMMTSTOCK',
        'intbconftrecmmtstock' => 'INTBCONFTRECMMTSTOCK',
        'configIn.intbconftrecmmtstock' => 'INTBCONFTRECMMTSTOCK',
        'ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK' => 'INTBCONFTRECMMTSTOCK',
        'COL_INTBCONFTRECMMTSTOCK' => 'INTBCONFTRECMMTSTOCK',
        'IntbConfTreCmmtStock' => 'INTBCONFTRECMMTSTOCK',
        'in_config.IntbConfTreCmmtStock' => 'INTBCONFTRECMMTSTOCK',
        'Intbconfusefrtin' => 'INTBCONFUSEFRTIN',
        'ConfigIn.Intbconfusefrtin' => 'INTBCONFUSEFRTIN',
        'intbconfusefrtin' => 'INTBCONFUSEFRTIN',
        'configIn.intbconfusefrtin' => 'INTBCONFUSEFRTIN',
        'ConfigInTableMap::COL_INTBCONFUSEFRTIN' => 'INTBCONFUSEFRTIN',
        'COL_INTBCONFUSEFRTIN' => 'INTBCONFUSEFRTIN',
        'IntbConfUseFrtIn' => 'INTBCONFUSEFRTIN',
        'in_config.IntbConfUseFrtIn' => 'INTBCONFUSEFRTIN',
        'Intbconfeachoruom' => 'INTBCONFEACHORUOM',
        'ConfigIn.Intbconfeachoruom' => 'INTBCONFEACHORUOM',
        'intbconfeachoruom' => 'INTBCONFEACHORUOM',
        'configIn.intbconfeachoruom' => 'INTBCONFEACHORUOM',
        'ConfigInTableMap::COL_INTBCONFEACHORUOM' => 'INTBCONFEACHORUOM',
        'COL_INTBCONFEACHORUOM' => 'INTBCONFEACHORUOM',
        'IntbConfEachOrUom' => 'INTBCONFEACHORUOM',
        'in_config.IntbConfEachOrUom' => 'INTBCONFEACHORUOM',
        'Intbconfneglotcorr' => 'INTBCONFNEGLOTCORR',
        'ConfigIn.Intbconfneglotcorr' => 'INTBCONFNEGLOTCORR',
        'intbconfneglotcorr' => 'INTBCONFNEGLOTCORR',
        'configIn.intbconfneglotcorr' => 'INTBCONFNEGLOTCORR',
        'ConfigInTableMap::COL_INTBCONFNEGLOTCORR' => 'INTBCONFNEGLOTCORR',
        'COL_INTBCONFNEGLOTCORR' => 'INTBCONFNEGLOTCORR',
        'IntbConfNegLotCorr' => 'INTBCONFNEGLOTCORR',
        'in_config.IntbConfNegLotCorr' => 'INTBCONFNEGLOTCORR',
        'Intbconftrnsglacct' => 'INTBCONFTRNSGLACCT',
        'ConfigIn.Intbconftrnsglacct' => 'INTBCONFTRNSGLACCT',
        'intbconftrnsglacct' => 'INTBCONFTRNSGLACCT',
        'configIn.intbconftrnsglacct' => 'INTBCONFTRNSGLACCT',
        'ConfigInTableMap::COL_INTBCONFTRNSGLACCT' => 'INTBCONFTRNSGLACCT',
        'COL_INTBCONFTRNSGLACCT' => 'INTBCONFTRNSGLACCT',
        'IntbConfTrnsGlAcct' => 'INTBCONFTRNSGLACCT',
        'in_config.IntbConfTrnsGlAcct' => 'INTBCONFTRNSGLACCT',
        'Intbconftrnsprotstock' => 'INTBCONFTRNSPROTSTOCK',
        'ConfigIn.Intbconftrnsprotstock' => 'INTBCONFTRNSPROTSTOCK',
        'intbconftrnsprotstock' => 'INTBCONFTRNSPROTSTOCK',
        'configIn.intbconftrnsprotstock' => 'INTBCONFTRNSPROTSTOCK',
        'ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK' => 'INTBCONFTRNSPROTSTOCK',
        'COL_INTBCONFTRNSPROTSTOCK' => 'INTBCONFTRNSPROTSTOCK',
        'IntbConfTrnsProtStock' => 'INTBCONFTRNSPROTSTOCK',
        'in_config.IntbConfTrnsProtStock' => 'INTBCONFTRNSPROTSTOCK',
        'Intbconfnumericitem' => 'INTBCONFNUMERICITEM',
        'ConfigIn.Intbconfnumericitem' => 'INTBCONFNUMERICITEM',
        'intbconfnumericitem' => 'INTBCONFNUMERICITEM',
        'configIn.intbconfnumericitem' => 'INTBCONFNUMERICITEM',
        'ConfigInTableMap::COL_INTBCONFNUMERICITEM' => 'INTBCONFNUMERICITEM',
        'COL_INTBCONFNUMERICITEM' => 'INTBCONFNUMERICITEM',
        'IntbConfNumericItem' => 'INTBCONFNUMERICITEM',
        'in_config.IntbConfNumericItem' => 'INTBCONFNUMERICITEM',
        'Intbconfitemdigits' => 'INTBCONFITEMDIGITS',
        'ConfigIn.Intbconfitemdigits' => 'INTBCONFITEMDIGITS',
        'intbconfitemdigits' => 'INTBCONFITEMDIGITS',
        'configIn.intbconfitemdigits' => 'INTBCONFITEMDIGITS',
        'ConfigInTableMap::COL_INTBCONFITEMDIGITS' => 'INTBCONFITEMDIGITS',
        'COL_INTBCONFITEMDIGITS' => 'INTBCONFITEMDIGITS',
        'IntbConfItemDigits' => 'INTBCONFITEMDIGITS',
        'in_config.IntbConfItemDigits' => 'INTBCONFITEMDIGITS',
        'Intbconfsinglewhse' => 'INTBCONFSINGLEWHSE',
        'ConfigIn.Intbconfsinglewhse' => 'INTBCONFSINGLEWHSE',
        'intbconfsinglewhse' => 'INTBCONFSINGLEWHSE',
        'configIn.intbconfsinglewhse' => 'INTBCONFSINGLEWHSE',
        'ConfigInTableMap::COL_INTBCONFSINGLEWHSE' => 'INTBCONFSINGLEWHSE',
        'COL_INTBCONFSINGLEWHSE' => 'INTBCONFSINGLEWHSE',
        'IntbConfSingleWhse' => 'INTBCONFSINGLEWHSE',
        'in_config.IntbConfSingleWhse' => 'INTBCONFSINGLEWHSE',
        'Intbconfupdusepct' => 'INTBCONFUPDUSEPCT',
        'ConfigIn.Intbconfupdusepct' => 'INTBCONFUPDUSEPCT',
        'intbconfupdusepct' => 'INTBCONFUPDUSEPCT',
        'configIn.intbconfupdusepct' => 'INTBCONFUPDUSEPCT',
        'ConfigInTableMap::COL_INTBCONFUPDUSEPCT' => 'INTBCONFUPDUSEPCT',
        'COL_INTBCONFUPDUSEPCT' => 'INTBCONFUPDUSEPCT',
        'IntbConfUpdUsePct' => 'INTBCONFUPDUSEPCT',
        'in_config.IntbConfUpdUsePct' => 'INTBCONFUPDUSEPCT',
        'Intbconfupdpric' => 'INTBCONFUPDPRIC',
        'ConfigIn.Intbconfupdpric' => 'INTBCONFUPDPRIC',
        'intbconfupdpric' => 'INTBCONFUPDPRIC',
        'configIn.intbconfupdpric' => 'INTBCONFUPDPRIC',
        'ConfigInTableMap::COL_INTBCONFUPDPRIC' => 'INTBCONFUPDPRIC',
        'COL_INTBCONFUPDPRIC' => 'INTBCONFUPDPRIC',
        'IntbConfUpdPric' => 'INTBCONFUPDPRIC',
        'in_config.IntbConfUpdPric' => 'INTBCONFUPDPRIC',
        'Intbconfupdstdcost' => 'INTBCONFUPDSTDCOST',
        'ConfigIn.Intbconfupdstdcost' => 'INTBCONFUPDSTDCOST',
        'intbconfupdstdcost' => 'INTBCONFUPDSTDCOST',
        'configIn.intbconfupdstdcost' => 'INTBCONFUPDSTDCOST',
        'ConfigInTableMap::COL_INTBCONFUPDSTDCOST' => 'INTBCONFUPDSTDCOST',
        'COL_INTBCONFUPDSTDCOST' => 'INTBCONFUPDSTDCOST',
        'IntbConfUpdStdCost' => 'INTBCONFUPDSTDCOST',
        'in_config.IntbConfUpdStdCost' => 'INTBCONFUPDSTDCOST',
        'Intbconfupdxrefcost' => 'INTBCONFUPDXREFCOST',
        'ConfigIn.Intbconfupdxrefcost' => 'INTBCONFUPDXREFCOST',
        'intbconfupdxrefcost' => 'INTBCONFUPDXREFCOST',
        'configIn.intbconfupdxrefcost' => 'INTBCONFUPDXREFCOST',
        'ConfigInTableMap::COL_INTBCONFUPDXREFCOST' => 'INTBCONFUPDXREFCOST',
        'COL_INTBCONFUPDXREFCOST' => 'INTBCONFUPDXREFCOST',
        'IntbConfUpdXrefCost' => 'INTBCONFUPDXREFCOST',
        'in_config.IntbConfUpdXrefCost' => 'INTBCONFUPDXREFCOST',
        'Intbconfiqpaupddate' => 'INTBCONFIQPAUPDDATE',
        'ConfigIn.Intbconfiqpaupddate' => 'INTBCONFIQPAUPDDATE',
        'intbconfiqpaupddate' => 'INTBCONFIQPAUPDDATE',
        'configIn.intbconfiqpaupddate' => 'INTBCONFIQPAUPDDATE',
        'ConfigInTableMap::COL_INTBCONFIQPAUPDDATE' => 'INTBCONFIQPAUPDDATE',
        'COL_INTBCONFIQPAUPDDATE' => 'INTBCONFIQPAUPDDATE',
        'IntbConfIqpaUpdDate' => 'INTBCONFIQPAUPDDATE',
        'in_config.IntbConfIqpaUpdDate' => 'INTBCONFIQPAUPDDATE',
        'Intbconfupcxrefoptn' => 'INTBCONFUPCXREFOPTN',
        'ConfigIn.Intbconfupcxrefoptn' => 'INTBCONFUPCXREFOPTN',
        'intbconfupcxrefoptn' => 'INTBCONFUPCXREFOPTN',
        'configIn.intbconfupcxrefoptn' => 'INTBCONFUPCXREFOPTN',
        'ConfigInTableMap::COL_INTBCONFUPCXREFOPTN' => 'INTBCONFUPCXREFOPTN',
        'COL_INTBCONFUPCXREFOPTN' => 'INTBCONFUPCXREFOPTN',
        'IntbConfUpcXrefOptn' => 'INTBCONFUPCXREFOPTN',
        'in_config.IntbConfUpcXrefOptn' => 'INTBCONFUPCXREFOPTN',
        'Intbconftranviewlib' => 'INTBCONFTRANVIEWLIB',
        'ConfigIn.Intbconftranviewlib' => 'INTBCONFTRANVIEWLIB',
        'intbconftranviewlib' => 'INTBCONFTRANVIEWLIB',
        'configIn.intbconftranviewlib' => 'INTBCONFTRANVIEWLIB',
        'ConfigInTableMap::COL_INTBCONFTRANVIEWLIB' => 'INTBCONFTRANVIEWLIB',
        'COL_INTBCONFTRANVIEWLIB' => 'INTBCONFTRANVIEWLIB',
        'IntbConfTranViewLIB' => 'INTBCONFTRANVIEWLIB',
        'in_config.IntbConfTranViewLIB' => 'INTBCONFTRANVIEWLIB',
        'Intbconfresvcost' => 'INTBCONFRESVCOST',
        'ConfigIn.Intbconfresvcost' => 'INTBCONFRESVCOST',
        'intbconfresvcost' => 'INTBCONFRESVCOST',
        'configIn.intbconfresvcost' => 'INTBCONFRESVCOST',
        'ConfigInTableMap::COL_INTBCONFRESVCOST' => 'INTBCONFRESVCOST',
        'COL_INTBCONFRESVCOST' => 'INTBCONFRESVCOST',
        'IntbConfResvCost' => 'INTBCONFRESVCOST',
        'in_config.IntbConfResvCost' => 'INTBCONFRESVCOST',
        'Intbcon2tranzerorqst' => 'INTBCON2TRANZERORQST',
        'ConfigIn.Intbcon2tranzerorqst' => 'INTBCON2TRANZERORQST',
        'intbcon2tranzerorqst' => 'INTBCON2TRANZERORQST',
        'configIn.intbcon2tranzerorqst' => 'INTBCON2TRANZERORQST',
        'ConfigInTableMap::COL_INTBCON2TRANZERORQST' => 'INTBCON2TRANZERORQST',
        'COL_INTBCON2TRANZERORQST' => 'INTBCON2TRANZERORQST',
        'IntbCon2TranZeroRqst' => 'INTBCON2TRANZERORQST',
        'in_config.IntbCon2TranZeroRqst' => 'INTBCON2TRANZERORQST',
        'Intbconfmonendadjdate' => 'INTBCONFMONENDADJDATE',
        'ConfigIn.Intbconfmonendadjdate' => 'INTBCONFMONENDADJDATE',
        'intbconfmonendadjdate' => 'INTBCONFMONENDADJDATE',
        'configIn.intbconfmonendadjdate' => 'INTBCONFMONENDADJDATE',
        'ConfigInTableMap::COL_INTBCONFMONENDADJDATE' => 'INTBCONFMONENDADJDATE',
        'COL_INTBCONFMONENDADJDATE' => 'INTBCONFMONENDADJDATE',
        'IntbConfMonEndAdjDate' => 'INTBCONFMONENDADJDATE',
        'in_config.IntbConfMonEndAdjDate' => 'INTBCONFMONENDADJDATE',
        'Intbconfmonendtrndate' => 'INTBCONFMONENDTRNDATE',
        'ConfigIn.Intbconfmonendtrndate' => 'INTBCONFMONENDTRNDATE',
        'intbconfmonendtrndate' => 'INTBCONFMONENDTRNDATE',
        'configIn.intbconfmonendtrndate' => 'INTBCONFMONENDTRNDATE',
        'ConfigInTableMap::COL_INTBCONFMONENDTRNDATE' => 'INTBCONFMONENDTRNDATE',
        'COL_INTBCONFMONENDTRNDATE' => 'INTBCONFMONENDTRNDATE',
        'IntbConfMonEndTrnDate' => 'INTBCONFMONENDTRNDATE',
        'in_config.IntbConfMonEndTrnDate' => 'INTBCONFMONENDTRNDATE',
        'Intbconfmonendlogdate' => 'INTBCONFMONENDLOGDATE',
        'ConfigIn.Intbconfmonendlogdate' => 'INTBCONFMONENDLOGDATE',
        'intbconfmonendlogdate' => 'INTBCONFMONENDLOGDATE',
        'configIn.intbconfmonendlogdate' => 'INTBCONFMONENDLOGDATE',
        'ConfigInTableMap::COL_INTBCONFMONENDLOGDATE' => 'INTBCONFMONENDLOGDATE',
        'COL_INTBCONFMONENDLOGDATE' => 'INTBCONFMONENDLOGDATE',
        'IntbConfMonEndLogDate' => 'INTBCONFMONENDLOGDATE',
        'in_config.IntbConfMonEndLogDate' => 'INTBCONFMONENDLOGDATE',
        'Intbconfdstatproc' => 'INTBCONFDSTATPROC',
        'ConfigIn.Intbconfdstatproc' => 'INTBCONFDSTATPROC',
        'intbconfdstatproc' => 'INTBCONFDSTATPROC',
        'configIn.intbconfdstatproc' => 'INTBCONFDSTATPROC',
        'ConfigInTableMap::COL_INTBCONFDSTATPROC' => 'INTBCONFDSTATPROC',
        'COL_INTBCONFDSTATPROC' => 'INTBCONFDSTATPROC',
        'IntbConfDStatProc' => 'INTBCONFDSTATPROC',
        'in_config.IntbConfDStatProc' => 'INTBCONFDSTATPROC',
        'Intbconfstancostupd' => 'INTBCONFSTANCOSTUPD',
        'ConfigIn.Intbconfstancostupd' => 'INTBCONFSTANCOSTUPD',
        'intbconfstancostupd' => 'INTBCONFSTANCOSTUPD',
        'configIn.intbconfstancostupd' => 'INTBCONFSTANCOSTUPD',
        'ConfigInTableMap::COL_INTBCONFSTANCOSTUPD' => 'INTBCONFSTANCOSTUPD',
        'COL_INTBCONFSTANCOSTUPD' => 'INTBCONFSTANCOSTUPD',
        'IntbConfStanCostUpd' => 'INTBCONFSTANCOSTUPD',
        'in_config.IntbConfStanCostUpd' => 'INTBCONFSTANCOSTUPD',
        'Intbconflastcost' => 'INTBCONFLASTCOST',
        'ConfigIn.Intbconflastcost' => 'INTBCONFLASTCOST',
        'intbconflastcost' => 'INTBCONFLASTCOST',
        'configIn.intbconflastcost' => 'INTBCONFLASTCOST',
        'ConfigInTableMap::COL_INTBCONFLASTCOST' => 'INTBCONFLASTCOST',
        'COL_INTBCONFLASTCOST' => 'INTBCONFLASTCOST',
        'IntbConfLastCost' => 'INTBCONFLASTCOST',
        'in_config.IntbConfLastCost' => 'INTBCONFLASTCOST',
        'Intbconfusesorgpct' => 'INTBCONFUSESORGPCT',
        'ConfigIn.Intbconfusesorgpct' => 'INTBCONFUSESORGPCT',
        'intbconfusesorgpct' => 'INTBCONFUSESORGPCT',
        'configIn.intbconfusesorgpct' => 'INTBCONFUSESORGPCT',
        'ConfigInTableMap::COL_INTBCONFUSESORGPCT' => 'INTBCONFUSESORGPCT',
        'COL_INTBCONFUSESORGPCT' => 'INTBCONFUSESORGPCT',
        'IntbConfUseSOrGPct' => 'INTBCONFUSESORGPCT',
        'in_config.IntbConfUseSOrGPct' => 'INTBCONFUSESORGPCT',
        'Intbconfaddonstan' => 'INTBCONFADDONSTAN',
        'ConfigIn.Intbconfaddonstan' => 'INTBCONFADDONSTAN',
        'intbconfaddonstan' => 'INTBCONFADDONSTAN',
        'configIn.intbconfaddonstan' => 'INTBCONFADDONSTAN',
        'ConfigInTableMap::COL_INTBCONFADDONSTAN' => 'INTBCONFADDONSTAN',
        'COL_INTBCONFADDONSTAN' => 'INTBCONFADDONSTAN',
        'IntbConfAddOnStan' => 'INTBCONFADDONSTAN',
        'in_config.IntbConfAddOnStan' => 'INTBCONFADDONSTAN',
        'Intbconfstdcosterror' => 'INTBCONFSTDCOSTERROR',
        'ConfigIn.Intbconfstdcosterror' => 'INTBCONFSTDCOSTERROR',
        'intbconfstdcosterror' => 'INTBCONFSTDCOSTERROR',
        'configIn.intbconfstdcosterror' => 'INTBCONFSTDCOSTERROR',
        'ConfigInTableMap::COL_INTBCONFSTDCOSTERROR' => 'INTBCONFSTDCOSTERROR',
        'COL_INTBCONFSTDCOSTERROR' => 'INTBCONFSTDCOSTERROR',
        'IntbConfStdCostError' => 'INTBCONFSTDCOSTERROR',
        'in_config.IntbConfStdCostError' => 'INTBCONFSTDCOSTERROR',
        'Intbconfavgcurrfive' => 'INTBCONFAVGCURRFIVE',
        'ConfigIn.Intbconfavgcurrfive' => 'INTBCONFAVGCURRFIVE',
        'intbconfavgcurrfive' => 'INTBCONFAVGCURRFIVE',
        'configIn.intbconfavgcurrfive' => 'INTBCONFAVGCURRFIVE',
        'ConfigInTableMap::COL_INTBCONFAVGCURRFIVE' => 'INTBCONFAVGCURRFIVE',
        'COL_INTBCONFAVGCURRFIVE' => 'INTBCONFAVGCURRFIVE',
        'IntbConfAvgCurrFive' => 'INTBCONFAVGCURRFIVE',
        'in_config.IntbConfAvgCurrFive' => 'INTBCONFAVGCURRFIVE',
        'Intbconfusecntrlbin' => 'INTBCONFUSECNTRLBIN',
        'ConfigIn.Intbconfusecntrlbin' => 'INTBCONFUSECNTRLBIN',
        'intbconfusecntrlbin' => 'INTBCONFUSECNTRLBIN',
        'configIn.intbconfusecntrlbin' => 'INTBCONFUSECNTRLBIN',
        'ConfigInTableMap::COL_INTBCONFUSECNTRLBIN' => 'INTBCONFUSECNTRLBIN',
        'COL_INTBCONFUSECNTRLBIN' => 'INTBCONFUSECNTRLBIN',
        'IntbConfUseCntrlBin' => 'INTBCONFUSECNTRLBIN',
        'in_config.IntbConfUseCntrlBin' => 'INTBCONFUSECNTRLBIN',
        'Intbconfnbrbinareas' => 'INTBCONFNBRBINAREAS',
        'ConfigIn.Intbconfnbrbinareas' => 'INTBCONFNBRBINAREAS',
        'intbconfnbrbinareas' => 'INTBCONFNBRBINAREAS',
        'configIn.intbconfnbrbinareas' => 'INTBCONFNBRBINAREAS',
        'ConfigInTableMap::COL_INTBCONFNBRBINAREAS' => 'INTBCONFNBRBINAREAS',
        'COL_INTBCONFNBRBINAREAS' => 'INTBCONFNBRBINAREAS',
        'IntbConfNbrBinAreas' => 'INTBCONFNBRBINAREAS',
        'in_config.IntbConfNbrBinAreas' => 'INTBCONFNBRBINAREAS',
        'Intbconfusemultbin' => 'INTBCONFUSEMULTBIN',
        'ConfigIn.Intbconfusemultbin' => 'INTBCONFUSEMULTBIN',
        'intbconfusemultbin' => 'INTBCONFUSEMULTBIN',
        'configIn.intbconfusemultbin' => 'INTBCONFUSEMULTBIN',
        'ConfigInTableMap::COL_INTBCONFUSEMULTBIN' => 'INTBCONFUSEMULTBIN',
        'COL_INTBCONFUSEMULTBIN' => 'INTBCONFUSEMULTBIN',
        'IntbConfUseMultBin' => 'INTBCONFUSEMULTBIN',
        'in_config.IntbConfUseMultBin' => 'INTBCONFUSEMULTBIN',
        'Intbconfdfltwhsebin' => 'INTBCONFDFLTWHSEBIN',
        'ConfigIn.Intbconfdfltwhsebin' => 'INTBCONFDFLTWHSEBIN',
        'intbconfdfltwhsebin' => 'INTBCONFDFLTWHSEBIN',
        'configIn.intbconfdfltwhsebin' => 'INTBCONFDFLTWHSEBIN',
        'ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN' => 'INTBCONFDFLTWHSEBIN',
        'COL_INTBCONFDFLTWHSEBIN' => 'INTBCONFDFLTWHSEBIN',
        'IntbConfDfltWhseBin' => 'INTBCONFDFLTWHSEBIN',
        'in_config.IntbConfDfltWhseBin' => 'INTBCONFDFLTWHSEBIN',
        'Intbconfdfltbin' => 'INTBCONFDFLTBIN',
        'ConfigIn.Intbconfdfltbin' => 'INTBCONFDFLTBIN',
        'intbconfdfltbin' => 'INTBCONFDFLTBIN',
        'configIn.intbconfdfltbin' => 'INTBCONFDFLTBIN',
        'ConfigInTableMap::COL_INTBCONFDFLTBIN' => 'INTBCONFDFLTBIN',
        'COL_INTBCONFDFLTBIN' => 'INTBCONFDFLTBIN',
        'IntbConfDfltBin' => 'INTBCONFDFLTBIN',
        'in_config.IntbConfDfltBin' => 'INTBCONFDFLTBIN',
        'Intbconfctryitemlot' => 'INTBCONFCTRYITEMLOT',
        'ConfigIn.Intbconfctryitemlot' => 'INTBCONFCTRYITEMLOT',
        'intbconfctryitemlot' => 'INTBCONFCTRYITEMLOT',
        'configIn.intbconfctryitemlot' => 'INTBCONFCTRYITEMLOT',
        'ConfigInTableMap::COL_INTBCONFCTRYITEMLOT' => 'INTBCONFCTRYITEMLOT',
        'COL_INTBCONFCTRYITEMLOT' => 'INTBCONFCTRYITEMLOT',
        'IntbConfCtryItemLot' => 'INTBCONFCTRYITEMLOT',
        'in_config.IntbConfCtryItemLot' => 'INTBCONFCTRYITEMLOT',
        'Intbconfuseshipbin' => 'INTBCONFUSESHIPBIN',
        'ConfigIn.Intbconfuseshipbin' => 'INTBCONFUSESHIPBIN',
        'intbconfuseshipbin' => 'INTBCONFUSESHIPBIN',
        'configIn.intbconfuseshipbin' => 'INTBCONFUSESHIPBIN',
        'ConfigInTableMap::COL_INTBCONFUSESHIPBIN' => 'INTBCONFUSESHIPBIN',
        'COL_INTBCONFUSESHIPBIN' => 'INTBCONFUSESHIPBIN',
        'IntbConfUseShipBin' => 'INTBCONFUSESHIPBIN',
        'in_config.IntbConfUseShipBin' => 'INTBCONFUSESHIPBIN',
        'Intbcon2prtbinrlabel' => 'INTBCON2PRTBINRLABEL',
        'ConfigIn.Intbcon2prtbinrlabel' => 'INTBCON2PRTBINRLABEL',
        'intbcon2prtbinrlabel' => 'INTBCON2PRTBINRLABEL',
        'configIn.intbcon2prtbinrlabel' => 'INTBCON2PRTBINRLABEL',
        'ConfigInTableMap::COL_INTBCON2PRTBINRLABEL' => 'INTBCON2PRTBINRLABEL',
        'COL_INTBCON2PRTBINRLABEL' => 'INTBCON2PRTBINRLABEL',
        'IntbCon2PrtBinrLabel' => 'INTBCON2PRTBINRLABEL',
        'in_config.IntbCon2PrtBinrLabel' => 'INTBCON2PRTBINRLABEL',
        'Intbcon2itemlookup' => 'INTBCON2ITEMLOOKUP',
        'ConfigIn.Intbcon2itemlookup' => 'INTBCON2ITEMLOOKUP',
        'intbcon2itemlookup' => 'INTBCON2ITEMLOOKUP',
        'configIn.intbcon2itemlookup' => 'INTBCON2ITEMLOOKUP',
        'ConfigInTableMap::COL_INTBCON2ITEMLOOKUP' => 'INTBCON2ITEMLOOKUP',
        'COL_INTBCON2ITEMLOOKUP' => 'INTBCON2ITEMLOOKUP',
        'IntbCon2ItemLookup' => 'INTBCON2ITEMLOOKUP',
        'in_config.IntbCon2ItemLookup' => 'INTBCON2ITEMLOOKUP',
        'Intbconfincldcti' => 'INTBCONFINCLDCTI',
        'ConfigIn.Intbconfincldcti' => 'INTBCONFINCLDCTI',
        'intbconfincldcti' => 'INTBCONFINCLDCTI',
        'configIn.intbconfincldcti' => 'INTBCONFINCLDCTI',
        'ConfigInTableMap::COL_INTBCONFINCLDCTI' => 'INTBCONFINCLDCTI',
        'COL_INTBCONFINCLDCTI' => 'INTBCONFINCLDCTI',
        'IntbConfIncldCti' => 'INTBCONFINCLDCTI',
        'in_config.IntbConfIncldCti' => 'INTBCONFINCLDCTI',
        'Intbconfcertimage' => 'INTBCONFCERTIMAGE',
        'ConfigIn.Intbconfcertimage' => 'INTBCONFCERTIMAGE',
        'intbconfcertimage' => 'INTBCONFCERTIMAGE',
        'configIn.intbconfcertimage' => 'INTBCONFCERTIMAGE',
        'ConfigInTableMap::COL_INTBCONFCERTIMAGE' => 'INTBCONFCERTIMAGE',
        'COL_INTBCONFCERTIMAGE' => 'INTBCONFCERTIMAGE',
        'IntbConfCertImage' => 'INTBCONFCERTIMAGE',
        'in_config.IntbConfCertImage' => 'INTBCONFCERTIMAGE',
        'Intbconfdrawimage' => 'INTBCONFDRAWIMAGE',
        'ConfigIn.Intbconfdrawimage' => 'INTBCONFDRAWIMAGE',
        'intbconfdrawimage' => 'INTBCONFDRAWIMAGE',
        'configIn.intbconfdrawimage' => 'INTBCONFDRAWIMAGE',
        'ConfigInTableMap::COL_INTBCONFDRAWIMAGE' => 'INTBCONFDRAWIMAGE',
        'COL_INTBCONFDRAWIMAGE' => 'INTBCONFDRAWIMAGE',
        'IntbConfDrawImage' => 'INTBCONFDRAWIMAGE',
        'in_config.IntbConfDrawImage' => 'INTBCONFDRAWIMAGE',
        'Intbconfconfirmimage' => 'INTBCONFCONFIRMIMAGE',
        'ConfigIn.Intbconfconfirmimage' => 'INTBCONFCONFIRMIMAGE',
        'intbconfconfirmimage' => 'INTBCONFCONFIRMIMAGE',
        'configIn.intbconfconfirmimage' => 'INTBCONFCONFIRMIMAGE',
        'ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE' => 'INTBCONFCONFIRMIMAGE',
        'COL_INTBCONFCONFIRMIMAGE' => 'INTBCONFCONFIRMIMAGE',
        'IntbConfConfirmImage' => 'INTBCONFCONFIRMIMAGE',
        'in_config.IntbConfConfirmImage' => 'INTBCONFCONFIRMIMAGE',
        'Intbcon2productimage' => 'INTBCON2PRODUCTIMAGE',
        'ConfigIn.Intbcon2productimage' => 'INTBCON2PRODUCTIMAGE',
        'intbcon2productimage' => 'INTBCON2PRODUCTIMAGE',
        'configIn.intbcon2productimage' => 'INTBCON2PRODUCTIMAGE',
        'ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE' => 'INTBCON2PRODUCTIMAGE',
        'COL_INTBCON2PRODUCTIMAGE' => 'INTBCON2PRODUCTIMAGE',
        'IntbCon2ProductImage' => 'INTBCON2PRODUCTIMAGE',
        'in_config.IntbCon2ProductImage' => 'INTBCON2PRODUCTIMAGE',
        'Intbconfdefpick' => 'INTBCONFDEFPICK',
        'ConfigIn.Intbconfdefpick' => 'INTBCONFDEFPICK',
        'intbconfdefpick' => 'INTBCONFDEFPICK',
        'configIn.intbconfdefpick' => 'INTBCONFDEFPICK',
        'ConfigInTableMap::COL_INTBCONFDEFPICK' => 'INTBCONFDEFPICK',
        'COL_INTBCONFDEFPICK' => 'INTBCONFDEFPICK',
        'IntbConfDefPick' => 'INTBCONFDEFPICK',
        'in_config.IntbConfDefPick' => 'INTBCONFDEFPICK',
        'Intbconfdefpack' => 'INTBCONFDEFPACK',
        'ConfigIn.Intbconfdefpack' => 'INTBCONFDEFPACK',
        'intbconfdefpack' => 'INTBCONFDEFPACK',
        'configIn.intbconfdefpack' => 'INTBCONFDEFPACK',
        'ConfigInTableMap::COL_INTBCONFDEFPACK' => 'INTBCONFDEFPACK',
        'COL_INTBCONFDEFPACK' => 'INTBCONFDEFPACK',
        'IntbConfDefPack' => 'INTBCONFDEFPACK',
        'in_config.IntbConfDefPack' => 'INTBCONFDEFPACK',
        'Intbconfdefinvc' => 'INTBCONFDEFINVC',
        'ConfigIn.Intbconfdefinvc' => 'INTBCONFDEFINVC',
        'intbconfdefinvc' => 'INTBCONFDEFINVC',
        'configIn.intbconfdefinvc' => 'INTBCONFDEFINVC',
        'ConfigInTableMap::COL_INTBCONFDEFINVC' => 'INTBCONFDEFINVC',
        'COL_INTBCONFDEFINVC' => 'INTBCONFDEFINVC',
        'IntbConfDefInvc' => 'INTBCONFDEFINVC',
        'in_config.IntbConfDefInvc' => 'INTBCONFDEFINVC',
        'Intbconfdefack' => 'INTBCONFDEFACK',
        'ConfigIn.Intbconfdefack' => 'INTBCONFDEFACK',
        'intbconfdefack' => 'INTBCONFDEFACK',
        'configIn.intbconfdefack' => 'INTBCONFDEFACK',
        'ConfigInTableMap::COL_INTBCONFDEFACK' => 'INTBCONFDEFACK',
        'COL_INTBCONFDEFACK' => 'INTBCONFDEFACK',
        'IntbConfDefAck' => 'INTBCONFDEFACK',
        'in_config.IntbConfDefAck' => 'INTBCONFDEFACK',
        'Intbconfdefquot' => 'INTBCONFDEFQUOT',
        'ConfigIn.Intbconfdefquot' => 'INTBCONFDEFQUOT',
        'intbconfdefquot' => 'INTBCONFDEFQUOT',
        'configIn.intbconfdefquot' => 'INTBCONFDEFQUOT',
        'ConfigInTableMap::COL_INTBCONFDEFQUOT' => 'INTBCONFDEFQUOT',
        'COL_INTBCONFDEFQUOT' => 'INTBCONFDEFQUOT',
        'IntbConfDefQuot' => 'INTBCONFDEFQUOT',
        'in_config.IntbConfDefQuot' => 'INTBCONFDEFQUOT',
        'Intbconfdefpo' => 'INTBCONFDEFPO',
        'ConfigIn.Intbconfdefpo' => 'INTBCONFDEFPO',
        'intbconfdefpo' => 'INTBCONFDEFPO',
        'configIn.intbconfdefpo' => 'INTBCONFDEFPO',
        'ConfigInTableMap::COL_INTBCONFDEFPO' => 'INTBCONFDEFPO',
        'COL_INTBCONFDEFPO' => 'INTBCONFDEFPO',
        'IntbConfDefPo' => 'INTBCONFDEFPO',
        'in_config.IntbConfDefPo' => 'INTBCONFDEFPO',
        'Intbconfdeftrans' => 'INTBCONFDEFTRANS',
        'ConfigIn.Intbconfdeftrans' => 'INTBCONFDEFTRANS',
        'intbconfdeftrans' => 'INTBCONFDEFTRANS',
        'configIn.intbconfdeftrans' => 'INTBCONFDEFTRANS',
        'ConfigInTableMap::COL_INTBCONFDEFTRANS' => 'INTBCONFDEFTRANS',
        'COL_INTBCONFDEFTRANS' => 'INTBCONFDEFTRANS',
        'IntbConfDefTrans' => 'INTBCONFDEFTRANS',
        'in_config.IntbConfDefTrans' => 'INTBCONFDEFTRANS',
        'Intbconfadjglcogs' => 'INTBCONFADJGLCOGS',
        'ConfigIn.Intbconfadjglcogs' => 'INTBCONFADJGLCOGS',
        'intbconfadjglcogs' => 'INTBCONFADJGLCOGS',
        'configIn.intbconfadjglcogs' => 'INTBCONFADJGLCOGS',
        'ConfigInTableMap::COL_INTBCONFADJGLCOGS' => 'INTBCONFADJGLCOGS',
        'COL_INTBCONFADJGLCOGS' => 'INTBCONFADJGLCOGS',
        'IntbConfAdjGlCogs' => 'INTBCONFADJGLCOGS',
        'in_config.IntbConfAdjGlCogs' => 'INTBCONFADJGLCOGS',
        'Intbcon2dfltadjglacct' => 'INTBCON2DFLTADJGLACCT',
        'ConfigIn.Intbcon2dfltadjglacct' => 'INTBCON2DFLTADJGLACCT',
        'intbcon2dfltadjglacct' => 'INTBCON2DFLTADJGLACCT',
        'configIn.intbcon2dfltadjglacct' => 'INTBCON2DFLTADJGLACCT',
        'ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT' => 'INTBCON2DFLTADJGLACCT',
        'COL_INTBCON2DFLTADJGLACCT' => 'INTBCON2DFLTADJGLACCT',
        'IntbCon2DfltAdjGlAcct' => 'INTBCON2DFLTADJGLACCT',
        'in_config.IntbCon2DfltAdjGlAcct' => 'INTBCON2DFLTADJGLACCT',
        'Intbconfadjcostbase' => 'INTBCONFADJCOSTBASE',
        'ConfigIn.Intbconfadjcostbase' => 'INTBCONFADJCOSTBASE',
        'intbconfadjcostbase' => 'INTBCONFADJCOSTBASE',
        'configIn.intbconfadjcostbase' => 'INTBCONFADJCOSTBASE',
        'ConfigInTableMap::COL_INTBCONFADJCOSTBASE' => 'INTBCONFADJCOSTBASE',
        'COL_INTBCONFADJCOSTBASE' => 'INTBCONFADJCOSTBASE',
        'IntbConfAdjCostBase' => 'INTBCONFADJCOSTBASE',
        'in_config.IntbConfAdjCostBase' => 'INTBCONFADJCOSTBASE',
        'Intbconfdfltadjtbin' => 'INTBCONFDFLTADJTBIN',
        'ConfigIn.Intbconfdfltadjtbin' => 'INTBCONFDFLTADJTBIN',
        'intbconfdfltadjtbin' => 'INTBCONFDFLTADJTBIN',
        'configIn.intbconfdfltadjtbin' => 'INTBCONFDFLTADJTBIN',
        'ConfigInTableMap::COL_INTBCONFDFLTADJTBIN' => 'INTBCONFDFLTADJTBIN',
        'COL_INTBCONFDFLTADJTBIN' => 'INTBCONFDFLTADJTBIN',
        'IntbConfDfltAdjtBin' => 'INTBCONFDFLTADJTBIN',
        'in_config.IntbConfDfltAdjtBin' => 'INTBCONFDFLTADJTBIN',
        'Intbconfadjtbin' => 'INTBCONFADJTBIN',
        'ConfigIn.Intbconfadjtbin' => 'INTBCONFADJTBIN',
        'intbconfadjtbin' => 'INTBCONFADJTBIN',
        'configIn.intbconfadjtbin' => 'INTBCONFADJTBIN',
        'ConfigInTableMap::COL_INTBCONFADJTBIN' => 'INTBCONFADJTBIN',
        'COL_INTBCONFADJTBIN' => 'INTBCONFADJTBIN',
        'IntbConfAdjtBin' => 'INTBCONFADJTBIN',
        'in_config.IntbConfAdjtBin' => 'INTBCONFADJTBIN',
        'Intbconfcstockseq' => 'INTBCONFCSTOCKSEQ',
        'ConfigIn.Intbconfcstockseq' => 'INTBCONFCSTOCKSEQ',
        'intbconfcstockseq' => 'INTBCONFCSTOCKSEQ',
        'configIn.intbconfcstockseq' => 'INTBCONFCSTOCKSEQ',
        'ConfigInTableMap::COL_INTBCONFCSTOCKSEQ' => 'INTBCONFCSTOCKSEQ',
        'COL_INTBCONFCSTOCKSEQ' => 'INTBCONFCSTOCKSEQ',
        'IntbConfCStockSeq' => 'INTBCONFCSTOCKSEQ',
        'in_config.IntbConfCStockSeq' => 'INTBCONFCSTOCKSEQ',
        'Intbconfcstockhistday' => 'INTBCONFCSTOCKHISTDAY',
        'ConfigIn.Intbconfcstockhistday' => 'INTBCONFCSTOCKHISTDAY',
        'intbconfcstockhistday' => 'INTBCONFCSTOCKHISTDAY',
        'configIn.intbconfcstockhistday' => 'INTBCONFCSTOCKHISTDAY',
        'ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY' => 'INTBCONFCSTOCKHISTDAY',
        'COL_INTBCONFCSTOCKHISTDAY' => 'INTBCONFCSTOCKHISTDAY',
        'IntbConfCStockHistDay' => 'INTBCONFCSTOCKHISTDAY',
        'in_config.IntbConfCStockHistDay' => 'INTBCONFCSTOCKHISTDAY',
        'Intbconfcstockformat' => 'INTBCONFCSTOCKFORMAT',
        'ConfigIn.Intbconfcstockformat' => 'INTBCONFCSTOCKFORMAT',
        'intbconfcstockformat' => 'INTBCONFCSTOCKFORMAT',
        'configIn.intbconfcstockformat' => 'INTBCONFCSTOCKFORMAT',
        'ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT' => 'INTBCONFCSTOCKFORMAT',
        'COL_INTBCONFCSTOCKFORMAT' => 'INTBCONFCSTOCKFORMAT',
        'IntbConfCStockFormat' => 'INTBCONFCSTOCKFORMAT',
        'in_config.IntbConfCStockFormat' => 'INTBCONFCSTOCKFORMAT',
        'Intbconfcstkexportitem' => 'INTBCONFCSTKEXPORTITEM',
        'ConfigIn.Intbconfcstkexportitem' => 'INTBCONFCSTKEXPORTITEM',
        'intbconfcstkexportitem' => 'INTBCONFCSTKEXPORTITEM',
        'configIn.intbconfcstkexportitem' => 'INTBCONFCSTKEXPORTITEM',
        'ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM' => 'INTBCONFCSTKEXPORTITEM',
        'COL_INTBCONFCSTKEXPORTITEM' => 'INTBCONFCSTKEXPORTITEM',
        'IntbConfCstkExportItem' => 'INTBCONFCSTKEXPORTITEM',
        'in_config.IntbConfCstkExportItem' => 'INTBCONFCSTKEXPORTITEM',
        'Intbconfcstkpdmcontract' => 'INTBCONFCSTKPDMCONTRACT',
        'ConfigIn.Intbconfcstkpdmcontract' => 'INTBCONFCSTKPDMCONTRACT',
        'intbconfcstkpdmcontract' => 'INTBCONFCSTKPDMCONTRACT',
        'configIn.intbconfcstkpdmcontract' => 'INTBCONFCSTKPDMCONTRACT',
        'ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT' => 'INTBCONFCSTKPDMCONTRACT',
        'COL_INTBCONFCSTKPDMCONTRACT' => 'INTBCONFCSTKPDMCONTRACT',
        'IntbConfCstkPdmContract' => 'INTBCONFCSTKPDMCONTRACT',
        'in_config.IntbConfCstkPdmContract' => 'INTBCONFCSTKPDMCONTRACT',
        'Intbcon2importseq' => 'INTBCON2IMPORTSEQ',
        'ConfigIn.Intbcon2importseq' => 'INTBCON2IMPORTSEQ',
        'intbcon2importseq' => 'INTBCON2IMPORTSEQ',
        'configIn.intbcon2importseq' => 'INTBCON2IMPORTSEQ',
        'ConfigInTableMap::COL_INTBCON2IMPORTSEQ' => 'INTBCON2IMPORTSEQ',
        'COL_INTBCON2IMPORTSEQ' => 'INTBCON2IMPORTSEQ',
        'IntbCon2ImportSeq' => 'INTBCON2IMPORTSEQ',
        'in_config.IntbCon2ImportSeq' => 'INTBCON2IMPORTSEQ',
        'Intbconfstopitemchg' => 'INTBCONFSTOPITEMCHG',
        'ConfigIn.Intbconfstopitemchg' => 'INTBCONFSTOPITEMCHG',
        'intbconfstopitemchg' => 'INTBCONFSTOPITEMCHG',
        'configIn.intbconfstopitemchg' => 'INTBCONFSTOPITEMCHG',
        'ConfigInTableMap::COL_INTBCONFSTOPITEMCHG' => 'INTBCONFSTOPITEMCHG',
        'COL_INTBCONFSTOPITEMCHG' => 'INTBCONFSTOPITEMCHG',
        'IntbConfStopItemChg' => 'INTBCONFSTOPITEMCHG',
        'in_config.IntbConfStopItemChg' => 'INTBCONFSTOPITEMCHG',
        'Intbconfaddtomxrfe' => 'INTBCONFADDTOMXRFE',
        'ConfigIn.Intbconfaddtomxrfe' => 'INTBCONFADDTOMXRFE',
        'intbconfaddtomxrfe' => 'INTBCONFADDTOMXRFE',
        'configIn.intbconfaddtomxrfe' => 'INTBCONFADDTOMXRFE',
        'ConfigInTableMap::COL_INTBCONFADDTOMXRFE' => 'INTBCONFADDTOMXRFE',
        'COL_INTBCONFADDTOMXRFE' => 'INTBCONFADDTOMXRFE',
        'IntbConfAddToMxrfe' => 'INTBCONFADDTOMXRFE',
        'in_config.IntbConfAddToMxrfe' => 'INTBCONFADDTOMXRFE',
        'Intbconfmxrfevendid' => 'INTBCONFMXRFEVENDID',
        'ConfigIn.Intbconfmxrfevendid' => 'INTBCONFMXRFEVENDID',
        'intbconfmxrfevendid' => 'INTBCONFMXRFEVENDID',
        'configIn.intbconfmxrfevendid' => 'INTBCONFMXRFEVENDID',
        'ConfigInTableMap::COL_INTBCONFMXRFEVENDID' => 'INTBCONFMXRFEVENDID',
        'COL_INTBCONFMXRFEVENDID' => 'INTBCONFMXRFEVENDID',
        'IntbConfMxrfeVendId' => 'INTBCONFMXRFEVENDID',
        'in_config.IntbConfMxrfeVendId' => 'INTBCONFMXRFEVENDID',
        'Intbcon2newidlabellist' => 'INTBCON2NEWIDLABELLIST',
        'ConfigIn.Intbcon2newidlabellist' => 'INTBCON2NEWIDLABELLIST',
        'intbcon2newidlabellist' => 'INTBCON2NEWIDLABELLIST',
        'configIn.intbcon2newidlabellist' => 'INTBCON2NEWIDLABELLIST',
        'ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST' => 'INTBCON2NEWIDLABELLIST',
        'COL_INTBCON2NEWIDLABELLIST' => 'INTBCON2NEWIDLABELLIST',
        'IntbCon2NewIdLabelList' => 'INTBCON2NEWIDLABELLIST',
        'in_config.IntbCon2NewIdLabelList' => 'INTBCON2NEWIDLABELLIST',
        'Intbconfuseformat' => 'INTBCONFUSEFORMAT',
        'ConfigIn.Intbconfuseformat' => 'INTBCONFUSEFORMAT',
        'intbconfuseformat' => 'INTBCONFUSEFORMAT',
        'configIn.intbconfuseformat' => 'INTBCONFUSEFORMAT',
        'ConfigInTableMap::COL_INTBCONFUSEFORMAT' => 'INTBCONFUSEFORMAT',
        'COL_INTBCONFUSEFORMAT' => 'INTBCONFUSEFORMAT',
        'IntbConfUseFormat' => 'INTBCONFUSEFORMAT',
        'in_config.IntbConfUseFormat' => 'INTBCONFUSEFORMAT',
        'Intbconfdefformat' => 'INTBCONFDEFFORMAT',
        'ConfigIn.Intbconfdefformat' => 'INTBCONFDEFFORMAT',
        'intbconfdefformat' => 'INTBCONFDEFFORMAT',
        'configIn.intbconfdefformat' => 'INTBCONFDEFFORMAT',
        'ConfigInTableMap::COL_INTBCONFDEFFORMAT' => 'INTBCONFDEFFORMAT',
        'COL_INTBCONFDEFFORMAT' => 'INTBCONFDEFFORMAT',
        'IntbConfDefFormat' => 'INTBCONFDEFFORMAT',
        'in_config.IntbConfDefFormat' => 'INTBCONFDEFFORMAT',
        'Intbconfseqshortitem' => 'INTBCONFSEQSHORTITEM',
        'ConfigIn.Intbconfseqshortitem' => 'INTBCONFSEQSHORTITEM',
        'intbconfseqshortitem' => 'INTBCONFSEQSHORTITEM',
        'configIn.intbconfseqshortitem' => 'INTBCONFSEQSHORTITEM',
        'ConfigInTableMap::COL_INTBCONFSEQSHORTITEM' => 'INTBCONFSEQSHORTITEM',
        'COL_INTBCONFSEQSHORTITEM' => 'INTBCONFSEQSHORTITEM',
        'IntbConfSeqShortItem' => 'INTBCONFSEQSHORTITEM',
        'in_config.IntbConfSeqShortItem' => 'INTBCONFSEQSHORTITEM',
        'Intbconfshortitemlen' => 'INTBCONFSHORTITEMLEN',
        'ConfigIn.Intbconfshortitemlen' => 'INTBCONFSHORTITEMLEN',
        'intbconfshortitemlen' => 'INTBCONFSHORTITEMLEN',
        'configIn.intbconfshortitemlen' => 'INTBCONFSHORTITEMLEN',
        'ConfigInTableMap::COL_INTBCONFSHORTITEMLEN' => 'INTBCONFSHORTITEMLEN',
        'COL_INTBCONFSHORTITEMLEN' => 'INTBCONFSHORTITEMLEN',
        'IntbConfShortItemLen' => 'INTBCONFSHORTITEMLEN',
        'in_config.IntbConfShortItemLen' => 'INTBCONFSHORTITEMLEN',
        'Intbconfusescale' => 'INTBCONFUSESCALE',
        'ConfigIn.Intbconfusescale' => 'INTBCONFUSESCALE',
        'intbconfusescale' => 'INTBCONFUSESCALE',
        'configIn.intbconfusescale' => 'INTBCONFUSESCALE',
        'ConfigInTableMap::COL_INTBCONFUSESCALE' => 'INTBCONFUSESCALE',
        'COL_INTBCONFUSESCALE' => 'INTBCONFUSESCALE',
        'IntbConfUseScale' => 'INTBCONFUSESCALE',
        'in_config.IntbConfUseScale' => 'INTBCONFUSESCALE',
        'Intbconfstorewght' => 'INTBCONFSTOREWGHT',
        'ConfigIn.Intbconfstorewght' => 'INTBCONFSTOREWGHT',
        'intbconfstorewght' => 'INTBCONFSTOREWGHT',
        'configIn.intbconfstorewght' => 'INTBCONFSTOREWGHT',
        'ConfigInTableMap::COL_INTBCONFSTOREWGHT' => 'INTBCONFSTOREWGHT',
        'COL_INTBCONFSTOREWGHT' => 'INTBCONFSTOREWGHT',
        'IntbConfStoreWght' => 'INTBCONFSTOREWGHT',
        'in_config.IntbConfStoreWght' => 'INTBCONFSTOREWGHT',
        'Intbconfvalidasstcode' => 'INTBCONFVALIDASSTCODE',
        'ConfigIn.Intbconfvalidasstcode' => 'INTBCONFVALIDASSTCODE',
        'intbconfvalidasstcode' => 'INTBCONFVALIDASSTCODE',
        'configIn.intbconfvalidasstcode' => 'INTBCONFVALIDASSTCODE',
        'ConfigInTableMap::COL_INTBCONFVALIDASSTCODE' => 'INTBCONFVALIDASSTCODE',
        'COL_INTBCONFVALIDASSTCODE' => 'INTBCONFVALIDASSTCODE',
        'IntbConfValidAsstCode' => 'INTBCONFVALIDASSTCODE',
        'in_config.IntbConfValidAsstCode' => 'INTBCONFVALIDASSTCODE',
        'Intbconfwhitegoods' => 'INTBCONFWHITEGOODS',
        'ConfigIn.Intbconfwhitegoods' => 'INTBCONFWHITEGOODS',
        'intbconfwhitegoods' => 'INTBCONFWHITEGOODS',
        'configIn.intbconfwhitegoods' => 'INTBCONFWHITEGOODS',
        'ConfigInTableMap::COL_INTBCONFWHITEGOODS' => 'INTBCONFWHITEGOODS',
        'COL_INTBCONFWHITEGOODS' => 'INTBCONFWHITEGOODS',
        'IntbConfWhiteGoods' => 'INTBCONFWHITEGOODS',
        'in_config.IntbConfWhiteGoods' => 'INTBCONFWHITEGOODS',
        'Intbcon2transcustid' => 'INTBCON2TRANSCUSTID',
        'ConfigIn.Intbcon2transcustid' => 'INTBCON2TRANSCUSTID',
        'intbcon2transcustid' => 'INTBCON2TRANSCUSTID',
        'configIn.intbcon2transcustid' => 'INTBCON2TRANSCUSTID',
        'ConfigInTableMap::COL_INTBCON2TRANSCUSTID' => 'INTBCON2TRANSCUSTID',
        'COL_INTBCON2TRANSCUSTID' => 'INTBCON2TRANSCUSTID',
        'IntbCon2TransCustId' => 'INTBCON2TRANSCUSTID',
        'in_config.IntbCon2TransCustId' => 'INTBCON2TRANSCUSTID',
        'Dateupdtd' => 'DATEUPDTD',
        'ConfigIn.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'configIn.dateupdtd' => 'DATEUPDTD',
        'ConfigInTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'in_config.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'ConfigIn.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'configIn.timeupdtd' => 'TIMEUPDTD',
        'ConfigInTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'in_config.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'ConfigIn.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'configIn.dummy' => 'DUMMY',
        'ConfigInTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'in_config.dummy' => 'DUMMY',
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
        $this->setName('in_config');
        $this->setPhpName('ConfigIn');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigIn');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbConfKey', 'Intbconfkey', 'INTEGER', true, 1, 1);
        $this->addColumn('IntbConfGlIfac', 'Intbconfglifac', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUseIw', 'Intbconfuseiw', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfLifoFifo', 'Intbconflifofifo', 'CHAR', true, null, 'L');
        $this->addColumn('IntbConfGoNeg', 'Intbconfgoneg', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUseLots', 'Intbconfuselots', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfNbrUppr', 'Intbconfnbruppr', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDescUppr', 'Intbconfdescuppr', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUseDesc2', 'Intbconfusedesc2', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUseUpcCode', 'Intbconfuseupccode', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUpcEanCntrl', 'Intbconfupceancntrl', 'CHAR', true, null, 'U');
        $this->addColumn('IntbConfUpcGenNbr', 'Intbconfupcgennbr', 'INTEGER', true, 6, 0);
        $this->addColumn('IntbCon2AllowDupUpc', 'Intbcon2allowdupupc', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfXrefNoSpace', 'Intbconfxrefnospace', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUsePricGrup', 'Intbconfusepricgrup', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUseCommGrup', 'Intbconfusecommgrup', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUseWarrDays', 'Intbconfusewarrdays', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfStanBaseDef', 'Intbconfstanbasedef', 'CHAR', true, null, 'A');
        $this->addColumn('IntbConfGrupDef', 'Intbconfgrupdef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfPricGrupDef', 'Intbconfpricgrupdef', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCommGrupDef', 'Intbconfcommgrupdef', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfTypeDef', 'Intbconftypedef', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfMultiLotRef', 'Intbconfmultilotref', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfPricUseItem', 'Intbconfpricuseitem', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfCommUseItem', 'Intbconfcommuseitem', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUomSaleDef', 'Intbconfuomsaledef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfUomPurDef', 'Intbconfuompurdef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfSviaDef', 'Intbconfsviadef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfCustxrefOrUse', 'Intbconfcustxreforuse', 'CHAR', true, null, 'C');
        $this->addColumn('IntbConfHeadGetDef', 'Intbconfheadgetdef', 'INTEGER', true, 1, 1);
        $this->addColumn('IntbConfItemGetDef', 'Intbconfitemgetdef', 'INTEGER', true, 1, 1);
        $this->addColumn('IntbConfGetDispOhAval', 'Intbconfgetdispohaval', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUserCode1Labl', 'Intbconfusercode1labl', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfUserCode1Ver', 'Intbconfusercode1ver', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUserCode2Labl', 'Intbconfusercode2labl', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfUserCode2Ver', 'Intbconfusercode2ver', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfItemLine', 'Intbconfitemline', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfItemCols', 'Intbconfitemcols', 'INTEGER', true, 2, 30);
        $this->addColumn('IntbConfHeadLine', 'Intbconfheadline', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfHeadCols', 'Intbconfheadcols', 'INTEGER', true, 2, 35);
        $this->addColumn('IntbConfDetLine', 'Intbconfdetline', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfDetCols', 'Intbconfdetcols', 'INTEGER', true, 2, 35);
        $this->addColumn('IntbConfMinMaxZero', 'Intbconfminmaxzero', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfMinRec', 'Intbconfminrec', 'CHAR', true, null, 'X');
        $this->addColumn('IntbConfAtBelowMin', 'Intbconfatbelowmin', 'CHAR', true, null, 'B');
        $this->addColumn('IntbConfOneWhse', 'Intbconfonewhse', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfYtdMth', 'Intbconfytdmth', 'INTEGER', true, 2, 1);
        $this->addColumn('IntbConfUseGramsLtr', 'Intbconfusegramsltr', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfAbcByWhse', 'Intbconfabcbywhse', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfAbcNbrMths', 'Intbconfabcnbrmths', 'INTEGER', true, 2, 12);
        $this->addColumn('IntbConfAbcBaseCode', 'Intbconfabcbasecode', 'CHAR', true, null, 'M');
        $this->addColumn('IntbConfAbcLevlA', 'Intbconfabclevla', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlB', 'Intbconfabclevlb', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlC', 'Intbconfabclevlc', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlD', 'Intbconfabclevld', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlE', 'Intbconfabclevle', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlF', 'Intbconfabclevlf', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlG', 'Intbconfabclevlg', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlH', 'Intbconfabclevlh', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlI', 'Intbconfabclevli', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfAbcLevlJ', 'Intbconfabclevlj', 'DECIMAL', true, 20, 10.00);
        $this->addColumn('IntbConfUseForeignX', 'Intbconfuseforeignx', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUseNafta', 'Intbconfusenafta', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfNaftaPrefCode', 'Intbconfnaftaprefcode', 'CHAR', true, null, 'A');
        $this->addColumn('IntbConfNaftaProducer', 'Intbconfnaftaproducer', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfNaftaDocCode', 'Intbconfnaftadoccode', 'CHAR', true, null, '1');
        $this->addColumn('IntbConfPhysCurrWksh', 'Intbconfphyscurrwksh', 'CHAR', true, null, 'C');
        $this->addColumn('IntbConf20Or30', 'Intbconf20or30', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfDispOrigCnt', 'Intbconfdisporigcnt', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfDispGl', 'Intbconfdispgl', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfDispRef', 'Intbconfdispref', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfDispCost', 'Intbconfdispcost', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfPrtVal', 'Intbconfprtval', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfPrtGl', 'Intbconfprtgl', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfGlAcct', 'Intbconfglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('IntbConfRef', 'Intbconfref', 'VARCHAR', true, 20, '');
        $this->addColumn('IntbConfCostType', 'Intbconfcosttype', 'CHAR', true, null, 'A');
        $this->addColumn('IntbConfNormalOnly', 'Intbconfnormalonly', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUseWhseDef', 'Intbconfusewhsedef', 'CHAR', true, null, '');
        $this->addColumn('IntbCon2DfltWhse01', 'Intbcon2dfltwhse01', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse02', 'Intbcon2dfltwhse02', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse03', 'Intbcon2dfltwhse03', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse04', 'Intbcon2dfltwhse04', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse05', 'Intbcon2dfltwhse05', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse06', 'Intbcon2dfltwhse06', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse07', 'Intbcon2dfltwhse07', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse08', 'Intbcon2dfltwhse08', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse09', 'Intbcon2dfltwhse09', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbCon2DfltWhse10', 'Intbcon2dfltwhse10', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbConfBinDef', 'Intbconfbindef', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCyclDef', 'Intbconfcycldef', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbConfStatDef', 'Intbconfstatdef', 'CHAR', true, null, 'A');
        $this->addColumn('IntbConfAbcDef', 'Intbconfabcdef', 'CHAR', true, null, 'J');
        $this->addColumn('IntbConfSpecOrdrDef', 'Intbconfspecordrdef', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfOrdrPntDef', 'Intbconfordrpntdef', 'DECIMAL', true, 20, 0.0000);
        $this->addColumn('IntbConfMaxDef', 'Intbconfmaxdef', 'DECIMAL', true, 20, 0.0000);
        $this->addColumn('IntbConfOrdrQtyDef', 'Intbconfordrqtydef', 'DECIMAL', true, 20, 0.0000);
        $this->addColumn('IntbConfTrcptAllowCmpl', 'Intbconftrcptallowcmpl', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfTreCmmtStock', 'Intbconftrecmmtstock', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUseFrtIn', 'Intbconfusefrtin', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfEachOrUom', 'Intbconfeachoruom', 'CHAR', true, null, 'E');
        $this->addColumn('IntbConfNegLotCorr', 'Intbconfneglotcorr', 'CHAR', true, null, 'A');
        $this->addColumn('IntbConfTrnsGlAcct', 'Intbconftrnsglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('IntbConfTrnsProtStock', 'Intbconftrnsprotstock', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('IntbConfNumericItem', 'Intbconfnumericitem', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfItemDigits', 'Intbconfitemdigits', 'INTEGER', true, 2, 0);
        $this->addColumn('IntbConfSingleWhse', 'Intbconfsinglewhse', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfUpdUsePct', 'Intbconfupdusepct', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUpdPric', 'Intbconfupdpric', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUpdStdCost', 'Intbconfupdstdcost', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUpdXrefCost', 'Intbconfupdxrefcost', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfIqpaUpdDate', 'Intbconfiqpaupddate', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUpcXrefOptn', 'Intbconfupcxrefoptn', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfTranViewLIB', 'Intbconftranviewlib', 'CHAR', true, null, 'L');
        $this->addColumn('IntbConfResvCost', 'Intbconfresvcost', 'CHAR', true, null, 'I');
        $this->addColumn('IntbCon2TranZeroRqst', 'Intbcon2tranzerorqst', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfMonEndAdjDate', 'Intbconfmonendadjdate', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfMonEndTrnDate', 'Intbconfmonendtrndate', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfMonEndLogDate', 'Intbconfmonendlogdate', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfDStatProc', 'Intbconfdstatproc', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfStanCostUpd', 'Intbconfstancostupd', 'CHAR', true, null, 'Y');
        $this->addColumn('IntbConfLastCost', 'Intbconflastcost', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUseSOrGPct', 'Intbconfusesorgpct', 'CHAR', true, null, 'S');
        $this->addColumn('IntbConfAddOnStan', 'Intbconfaddonstan', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('IntbConfStdCostError', 'Intbconfstdcosterror', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfAvgCurrFive', 'Intbconfavgcurrfive', 'CHAR', true, null, 'S');
        $this->addColumn('IntbConfUseCntrlBin', 'Intbconfusecntrlbin', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfNbrBinAreas', 'Intbconfnbrbinareas', 'INTEGER', true, 1, 0);
        $this->addColumn('IntbConfUseMultBin', 'Intbconfusemultbin', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDfltWhseBin', 'Intbconfdfltwhsebin', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDfltBin', 'Intbconfdfltbin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCtryItemLot', 'Intbconfctryitemlot', 'CHAR', true, null, 'I');
        $this->addColumn('IntbConfUseShipBin', 'Intbconfuseshipbin', 'CHAR', true, null, 'N');
        $this->addColumn('IntbCon2PrtBinrLabel', 'Intbcon2prtbinrlabel', 'CHAR', true, null, 'N');
        $this->addColumn('IntbCon2ItemLookup', 'Intbcon2itemlookup', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfIncldCti', 'Intbconfincldcti', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfCertImage', 'Intbconfcertimage', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDrawImage', 'Intbconfdrawimage', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfConfirmImage', 'Intbconfconfirmimage', 'CHAR', true, null, 'N');
        $this->addColumn('IntbCon2ProductImage', 'Intbcon2productimage', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefPick', 'Intbconfdefpick', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefPack', 'Intbconfdefpack', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefInvc', 'Intbconfdefinvc', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefAck', 'Intbconfdefack', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefQuot', 'Intbconfdefquot', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefPo', 'Intbconfdefpo', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefTrans', 'Intbconfdeftrans', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfAdjGlCogs', 'Intbconfadjglcogs', 'CHAR', true, null, 'N');
        $this->addColumn('IntbCon2DfltAdjGlAcct', 'Intbcon2dfltadjglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('IntbConfAdjCostBase', 'Intbconfadjcostbase', 'CHAR', true, null, 'B');
        $this->addColumn('IntbConfDfltAdjtBin', 'Intbconfdfltadjtbin', 'CHAR', true, null, 'S');
        $this->addColumn('IntbConfAdjtBin', 'Intbconfadjtbin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCStockSeq', 'Intbconfcstockseq', 'CHAR', true, null, 'L');
        $this->addColumn('IntbConfCStockHistDay', 'Intbconfcstockhistday', 'INTEGER', true, 6, 0);
        $this->addColumn('IntbConfCStockFormat', 'Intbconfcstockformat', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCstkExportItem', 'Intbconfcstkexportitem', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfCstkPdmContract', 'Intbconfcstkpdmcontract', 'CHAR', true, null, 'N');
        $this->addColumn('IntbCon2ImportSeq', 'Intbcon2importseq', 'CHAR', true, null, 'I');
        $this->addColumn('IntbConfStopItemChg', 'Intbconfstopitemchg', 'INTEGER', true, 4, 0);
        $this->addColumn('IntbConfAddToMxrfe', 'Intbconfaddtomxrfe', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfMxrfeVendId', 'Intbconfmxrfevendid', 'VARCHAR', true, 6, '');
        $this->addColumn('IntbCon2NewIdLabelList', 'Intbcon2newidlabellist', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfUseFormat', 'Intbconfuseformat', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfDefFormat', 'Intbconfdefformat', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbConfSeqShortItem', 'Intbconfseqshortitem', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfShortItemLen', 'Intbconfshortitemlen', 'INTEGER', true, 2, 0);
        $this->addColumn('IntbConfUseScale', 'Intbconfusescale', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfStoreWght', 'Intbconfstorewght', 'CHAR', true, null, 'I');
        $this->addColumn('IntbConfValidAsstCode', 'Intbconfvalidasstcode', 'CHAR', true, null, 'N');
        $this->addColumn('IntbConfWhiteGoods', 'Intbconfwhitegoods', 'CHAR', true, null, 'N');
        $this->addColumn('IntbCon2TransCustId', 'Intbcon2transcustid', 'VARCHAR', true, 6, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ConfigInTableMap::CLASS_DEFAULT : ConfigInTableMap::OM_CLASS;
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
     * @return array (ConfigIn object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ConfigInTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ConfigInTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ConfigInTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConfigInTableMap::OM_CLASS;
            /** @var ConfigIn $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ConfigInTableMap::addInstanceToPool($obj, $key);
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
            $key = ConfigInTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ConfigInTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ConfigIn $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConfigInTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFKEY);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFGLIFAC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEIW);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFLIFOFIFO);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFGONEG);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSELOTS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNBRUPPR);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDESCUPPR);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEDESC2);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEUPCCODE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPCGENNBR);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFXREFNOSPACE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSTANBASEDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFGRUPDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFTYPEDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMULTILOTREF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFPRICUSEITEM);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUOMSALEDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUOMPURDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSVIADEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFHEADGETDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFITEMGETDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE1VER);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE2VER);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFITEMLINE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFITEMCOLS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFHEADLINE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFHEADCOLS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDETLINE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDETCOLS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMINMAXZERO);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMINREC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFATBELOWMIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFONEWHSE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFYTDMTH);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCBYWHSE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCNBRMTHS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCBASECODE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLA);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLB);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLD);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLG);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLH);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLI);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLJ);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSENAFTA);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONF20OR30);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDISPORIGCNT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDISPGL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDISPREF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDISPCOST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFPRTVAL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFPRTGL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFGLACCT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFREF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCOSTTYPE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNORMALONLY);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE01);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE02);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE03);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE04);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE05);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE06);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE07);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE08);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE09);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE10);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFBINDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCYCLDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSTATDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFABCDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSPECORDRDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFORDRPNTDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMAXDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFORDRQTYDEF);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEFRTIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFEACHORUOM);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNEGLOTCORR);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFTRNSGLACCT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNUMERICITEM);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFITEMDIGITS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSINGLEWHSE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPDUSEPCT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPDPRIC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPDSTDCOST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPDXREFCOST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFTRANVIEWLIB);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFRESVCOST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2TRANZERORQST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMONENDADJDATE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDSTATPROC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFLASTCOST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSESORGPCT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFADDONSTAN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFNBRBINAREAS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEMULTBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDFLTBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSESHIPBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFINCLDCTI);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCERTIMAGE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDRAWIMAGE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFPICK);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFPACK);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFINVC);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFACK);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFQUOT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFPO);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFTRANS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFADJGLCOGS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFADJCOSTBASE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFADJTBIN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2IMPORTSEQ);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFADDTOMXRFE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFMXRFEVENDID);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSEFORMAT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFDEFFORMAT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFUSESCALE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFSTOREWGHT);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFWHITEGOODS);
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCON2TRANSCUSTID);
            $criteria->addSelectColumn(ConfigInTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ConfigInTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ConfigInTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.IntbConfKey');
            $criteria->addSelectColumn($alias . '.IntbConfGlIfac');
            $criteria->addSelectColumn($alias . '.IntbConfUseIw');
            $criteria->addSelectColumn($alias . '.IntbConfLifoFifo');
            $criteria->addSelectColumn($alias . '.IntbConfGoNeg');
            $criteria->addSelectColumn($alias . '.IntbConfUseLots');
            $criteria->addSelectColumn($alias . '.IntbConfNbrUppr');
            $criteria->addSelectColumn($alias . '.IntbConfDescUppr');
            $criteria->addSelectColumn($alias . '.IntbConfUseDesc2');
            $criteria->addSelectColumn($alias . '.IntbConfUseUpcCode');
            $criteria->addSelectColumn($alias . '.IntbConfUpcEanCntrl');
            $criteria->addSelectColumn($alias . '.IntbConfUpcGenNbr');
            $criteria->addSelectColumn($alias . '.IntbCon2AllowDupUpc');
            $criteria->addSelectColumn($alias . '.IntbConfXrefNoSpace');
            $criteria->addSelectColumn($alias . '.IntbConfUsePricGrup');
            $criteria->addSelectColumn($alias . '.IntbConfUseCommGrup');
            $criteria->addSelectColumn($alias . '.IntbConfUseWarrDays');
            $criteria->addSelectColumn($alias . '.IntbConfStanBaseDef');
            $criteria->addSelectColumn($alias . '.IntbConfGrupDef');
            $criteria->addSelectColumn($alias . '.IntbConfPricGrupDef');
            $criteria->addSelectColumn($alias . '.IntbConfCommGrupDef');
            $criteria->addSelectColumn($alias . '.IntbConfTypeDef');
            $criteria->addSelectColumn($alias . '.IntbConfMultiLotRef');
            $criteria->addSelectColumn($alias . '.IntbConfPricUseItem');
            $criteria->addSelectColumn($alias . '.IntbConfCommUseItem');
            $criteria->addSelectColumn($alias . '.IntbConfUomSaleDef');
            $criteria->addSelectColumn($alias . '.IntbConfUomPurDef');
            $criteria->addSelectColumn($alias . '.IntbConfSviaDef');
            $criteria->addSelectColumn($alias . '.IntbConfCustxrefOrUse');
            $criteria->addSelectColumn($alias . '.IntbConfHeadGetDef');
            $criteria->addSelectColumn($alias . '.IntbConfItemGetDef');
            $criteria->addSelectColumn($alias . '.IntbConfGetDispOhAval');
            $criteria->addSelectColumn($alias . '.IntbConfUserCode1Labl');
            $criteria->addSelectColumn($alias . '.IntbConfUserCode1Ver');
            $criteria->addSelectColumn($alias . '.IntbConfUserCode2Labl');
            $criteria->addSelectColumn($alias . '.IntbConfUserCode2Ver');
            $criteria->addSelectColumn($alias . '.IntbConfItemLine');
            $criteria->addSelectColumn($alias . '.IntbConfItemCols');
            $criteria->addSelectColumn($alias . '.IntbConfHeadLine');
            $criteria->addSelectColumn($alias . '.IntbConfHeadCols');
            $criteria->addSelectColumn($alias . '.IntbConfDetLine');
            $criteria->addSelectColumn($alias . '.IntbConfDetCols');
            $criteria->addSelectColumn($alias . '.IntbConfMinMaxZero');
            $criteria->addSelectColumn($alias . '.IntbConfMinRec');
            $criteria->addSelectColumn($alias . '.IntbConfAtBelowMin');
            $criteria->addSelectColumn($alias . '.IntbConfOneWhse');
            $criteria->addSelectColumn($alias . '.IntbConfYtdMth');
            $criteria->addSelectColumn($alias . '.IntbConfUseGramsLtr');
            $criteria->addSelectColumn($alias . '.IntbConfAbcByWhse');
            $criteria->addSelectColumn($alias . '.IntbConfAbcNbrMths');
            $criteria->addSelectColumn($alias . '.IntbConfAbcBaseCode');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlA');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlB');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlC');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlD');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlE');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlF');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlG');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlH');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlI');
            $criteria->addSelectColumn($alias . '.IntbConfAbcLevlJ');
            $criteria->addSelectColumn($alias . '.IntbConfUseForeignX');
            $criteria->addSelectColumn($alias . '.IntbConfUseNafta');
            $criteria->addSelectColumn($alias . '.IntbConfNaftaPrefCode');
            $criteria->addSelectColumn($alias . '.IntbConfNaftaProducer');
            $criteria->addSelectColumn($alias . '.IntbConfNaftaDocCode');
            $criteria->addSelectColumn($alias . '.IntbConfPhysCurrWksh');
            $criteria->addSelectColumn($alias . '.IntbConf20Or30');
            $criteria->addSelectColumn($alias . '.IntbConfDispOrigCnt');
            $criteria->addSelectColumn($alias . '.IntbConfDispGl');
            $criteria->addSelectColumn($alias . '.IntbConfDispRef');
            $criteria->addSelectColumn($alias . '.IntbConfDispCost');
            $criteria->addSelectColumn($alias . '.IntbConfPrtVal');
            $criteria->addSelectColumn($alias . '.IntbConfPrtGl');
            $criteria->addSelectColumn($alias . '.IntbConfGlAcct');
            $criteria->addSelectColumn($alias . '.IntbConfRef');
            $criteria->addSelectColumn($alias . '.IntbConfCostType');
            $criteria->addSelectColumn($alias . '.IntbConfNormalOnly');
            $criteria->addSelectColumn($alias . '.IntbConfUseWhseDef');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse01');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse02');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse03');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse04');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse05');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse06');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse07');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse08');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse09');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltWhse10');
            $criteria->addSelectColumn($alias . '.IntbConfBinDef');
            $criteria->addSelectColumn($alias . '.IntbConfCyclDef');
            $criteria->addSelectColumn($alias . '.IntbConfStatDef');
            $criteria->addSelectColumn($alias . '.IntbConfAbcDef');
            $criteria->addSelectColumn($alias . '.IntbConfSpecOrdrDef');
            $criteria->addSelectColumn($alias . '.IntbConfOrdrPntDef');
            $criteria->addSelectColumn($alias . '.IntbConfMaxDef');
            $criteria->addSelectColumn($alias . '.IntbConfOrdrQtyDef');
            $criteria->addSelectColumn($alias . '.IntbConfTrcptAllowCmpl');
            $criteria->addSelectColumn($alias . '.IntbConfTreCmmtStock');
            $criteria->addSelectColumn($alias . '.IntbConfUseFrtIn');
            $criteria->addSelectColumn($alias . '.IntbConfEachOrUom');
            $criteria->addSelectColumn($alias . '.IntbConfNegLotCorr');
            $criteria->addSelectColumn($alias . '.IntbConfTrnsGlAcct');
            $criteria->addSelectColumn($alias . '.IntbConfTrnsProtStock');
            $criteria->addSelectColumn($alias . '.IntbConfNumericItem');
            $criteria->addSelectColumn($alias . '.IntbConfItemDigits');
            $criteria->addSelectColumn($alias . '.IntbConfSingleWhse');
            $criteria->addSelectColumn($alias . '.IntbConfUpdUsePct');
            $criteria->addSelectColumn($alias . '.IntbConfUpdPric');
            $criteria->addSelectColumn($alias . '.IntbConfUpdStdCost');
            $criteria->addSelectColumn($alias . '.IntbConfUpdXrefCost');
            $criteria->addSelectColumn($alias . '.IntbConfIqpaUpdDate');
            $criteria->addSelectColumn($alias . '.IntbConfUpcXrefOptn');
            $criteria->addSelectColumn($alias . '.IntbConfTranViewLIB');
            $criteria->addSelectColumn($alias . '.IntbConfResvCost');
            $criteria->addSelectColumn($alias . '.IntbCon2TranZeroRqst');
            $criteria->addSelectColumn($alias . '.IntbConfMonEndAdjDate');
            $criteria->addSelectColumn($alias . '.IntbConfMonEndTrnDate');
            $criteria->addSelectColumn($alias . '.IntbConfMonEndLogDate');
            $criteria->addSelectColumn($alias . '.IntbConfDStatProc');
            $criteria->addSelectColumn($alias . '.IntbConfStanCostUpd');
            $criteria->addSelectColumn($alias . '.IntbConfLastCost');
            $criteria->addSelectColumn($alias . '.IntbConfUseSOrGPct');
            $criteria->addSelectColumn($alias . '.IntbConfAddOnStan');
            $criteria->addSelectColumn($alias . '.IntbConfStdCostError');
            $criteria->addSelectColumn($alias . '.IntbConfAvgCurrFive');
            $criteria->addSelectColumn($alias . '.IntbConfUseCntrlBin');
            $criteria->addSelectColumn($alias . '.IntbConfNbrBinAreas');
            $criteria->addSelectColumn($alias . '.IntbConfUseMultBin');
            $criteria->addSelectColumn($alias . '.IntbConfDfltWhseBin');
            $criteria->addSelectColumn($alias . '.IntbConfDfltBin');
            $criteria->addSelectColumn($alias . '.IntbConfCtryItemLot');
            $criteria->addSelectColumn($alias . '.IntbConfUseShipBin');
            $criteria->addSelectColumn($alias . '.IntbCon2PrtBinrLabel');
            $criteria->addSelectColumn($alias . '.IntbCon2ItemLookup');
            $criteria->addSelectColumn($alias . '.IntbConfIncldCti');
            $criteria->addSelectColumn($alias . '.IntbConfCertImage');
            $criteria->addSelectColumn($alias . '.IntbConfDrawImage');
            $criteria->addSelectColumn($alias . '.IntbConfConfirmImage');
            $criteria->addSelectColumn($alias . '.IntbCon2ProductImage');
            $criteria->addSelectColumn($alias . '.IntbConfDefPick');
            $criteria->addSelectColumn($alias . '.IntbConfDefPack');
            $criteria->addSelectColumn($alias . '.IntbConfDefInvc');
            $criteria->addSelectColumn($alias . '.IntbConfDefAck');
            $criteria->addSelectColumn($alias . '.IntbConfDefQuot');
            $criteria->addSelectColumn($alias . '.IntbConfDefPo');
            $criteria->addSelectColumn($alias . '.IntbConfDefTrans');
            $criteria->addSelectColumn($alias . '.IntbConfAdjGlCogs');
            $criteria->addSelectColumn($alias . '.IntbCon2DfltAdjGlAcct');
            $criteria->addSelectColumn($alias . '.IntbConfAdjCostBase');
            $criteria->addSelectColumn($alias . '.IntbConfDfltAdjtBin');
            $criteria->addSelectColumn($alias . '.IntbConfAdjtBin');
            $criteria->addSelectColumn($alias . '.IntbConfCStockSeq');
            $criteria->addSelectColumn($alias . '.IntbConfCStockHistDay');
            $criteria->addSelectColumn($alias . '.IntbConfCStockFormat');
            $criteria->addSelectColumn($alias . '.IntbConfCstkExportItem');
            $criteria->addSelectColumn($alias . '.IntbConfCstkPdmContract');
            $criteria->addSelectColumn($alias . '.IntbCon2ImportSeq');
            $criteria->addSelectColumn($alias . '.IntbConfStopItemChg');
            $criteria->addSelectColumn($alias . '.IntbConfAddToMxrfe');
            $criteria->addSelectColumn($alias . '.IntbConfMxrfeVendId');
            $criteria->addSelectColumn($alias . '.IntbCon2NewIdLabelList');
            $criteria->addSelectColumn($alias . '.IntbConfUseFormat');
            $criteria->addSelectColumn($alias . '.IntbConfDefFormat');
            $criteria->addSelectColumn($alias . '.IntbConfSeqShortItem');
            $criteria->addSelectColumn($alias . '.IntbConfShortItemLen');
            $criteria->addSelectColumn($alias . '.IntbConfUseScale');
            $criteria->addSelectColumn($alias . '.IntbConfStoreWght');
            $criteria->addSelectColumn($alias . '.IntbConfValidAsstCode');
            $criteria->addSelectColumn($alias . '.IntbConfWhiteGoods');
            $criteria->addSelectColumn($alias . '.IntbCon2TransCustId');
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
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFKEY);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFGLIFAC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEIW);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFLIFOFIFO);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFGONEG);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSELOTS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNBRUPPR);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDESCUPPR);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEDESC2);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEUPCCODE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPCGENNBR);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFXREFNOSPACE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSTANBASEDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFGRUPDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFTYPEDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMULTILOTREF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFPRICUSEITEM);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUOMSALEDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUOMPURDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSVIADEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFHEADGETDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFITEMGETDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE1VER);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSERCODE2VER);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFITEMLINE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFITEMCOLS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFHEADLINE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFHEADCOLS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDETLINE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDETCOLS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMINMAXZERO);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMINREC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFATBELOWMIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFONEWHSE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFYTDMTH);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCBYWHSE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCNBRMTHS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCBASECODE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLA);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLB);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLD);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLG);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLH);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLI);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCLEVLJ);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSENAFTA);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONF20OR30);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDISPORIGCNT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDISPGL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDISPREF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDISPCOST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFPRTVAL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFPRTGL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFGLACCT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFREF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCOSTTYPE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNORMALONLY);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE01);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE02);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE03);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE04);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE05);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE06);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE07);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE08);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE09);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTWHSE10);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFBINDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCYCLDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSTATDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFABCDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSPECORDRDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFORDRPNTDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMAXDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFORDRQTYDEF);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEFRTIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFEACHORUOM);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNEGLOTCORR);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFTRNSGLACCT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNUMERICITEM);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFITEMDIGITS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSINGLEWHSE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPDUSEPCT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPDPRIC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPDSTDCOST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPDXREFCOST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFTRANVIEWLIB);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFRESVCOST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2TRANZERORQST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMONENDADJDATE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDSTATPROC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFLASTCOST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSESORGPCT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFADDONSTAN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFNBRBINAREAS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEMULTBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDFLTBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSESHIPBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFINCLDCTI);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCERTIMAGE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDRAWIMAGE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFPICK);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFPACK);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFINVC);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFACK);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFQUOT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFPO);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFTRANS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFADJGLCOGS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFADJCOSTBASE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFADJTBIN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2IMPORTSEQ);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFADDTOMXRFE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFMXRFEVENDID);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSEFORMAT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFDEFFORMAT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFUSESCALE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFSTOREWGHT);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCONFWHITEGOODS);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_INTBCON2TRANSCUSTID);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(ConfigInTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.IntbConfKey');
            $criteria->removeSelectColumn($alias . '.IntbConfGlIfac');
            $criteria->removeSelectColumn($alias . '.IntbConfUseIw');
            $criteria->removeSelectColumn($alias . '.IntbConfLifoFifo');
            $criteria->removeSelectColumn($alias . '.IntbConfGoNeg');
            $criteria->removeSelectColumn($alias . '.IntbConfUseLots');
            $criteria->removeSelectColumn($alias . '.IntbConfNbrUppr');
            $criteria->removeSelectColumn($alias . '.IntbConfDescUppr');
            $criteria->removeSelectColumn($alias . '.IntbConfUseDesc2');
            $criteria->removeSelectColumn($alias . '.IntbConfUseUpcCode');
            $criteria->removeSelectColumn($alias . '.IntbConfUpcEanCntrl');
            $criteria->removeSelectColumn($alias . '.IntbConfUpcGenNbr');
            $criteria->removeSelectColumn($alias . '.IntbCon2AllowDupUpc');
            $criteria->removeSelectColumn($alias . '.IntbConfXrefNoSpace');
            $criteria->removeSelectColumn($alias . '.IntbConfUsePricGrup');
            $criteria->removeSelectColumn($alias . '.IntbConfUseCommGrup');
            $criteria->removeSelectColumn($alias . '.IntbConfUseWarrDays');
            $criteria->removeSelectColumn($alias . '.IntbConfStanBaseDef');
            $criteria->removeSelectColumn($alias . '.IntbConfGrupDef');
            $criteria->removeSelectColumn($alias . '.IntbConfPricGrupDef');
            $criteria->removeSelectColumn($alias . '.IntbConfCommGrupDef');
            $criteria->removeSelectColumn($alias . '.IntbConfTypeDef');
            $criteria->removeSelectColumn($alias . '.IntbConfMultiLotRef');
            $criteria->removeSelectColumn($alias . '.IntbConfPricUseItem');
            $criteria->removeSelectColumn($alias . '.IntbConfCommUseItem');
            $criteria->removeSelectColumn($alias . '.IntbConfUomSaleDef');
            $criteria->removeSelectColumn($alias . '.IntbConfUomPurDef');
            $criteria->removeSelectColumn($alias . '.IntbConfSviaDef');
            $criteria->removeSelectColumn($alias . '.IntbConfCustxrefOrUse');
            $criteria->removeSelectColumn($alias . '.IntbConfHeadGetDef');
            $criteria->removeSelectColumn($alias . '.IntbConfItemGetDef');
            $criteria->removeSelectColumn($alias . '.IntbConfGetDispOhAval');
            $criteria->removeSelectColumn($alias . '.IntbConfUserCode1Labl');
            $criteria->removeSelectColumn($alias . '.IntbConfUserCode1Ver');
            $criteria->removeSelectColumn($alias . '.IntbConfUserCode2Labl');
            $criteria->removeSelectColumn($alias . '.IntbConfUserCode2Ver');
            $criteria->removeSelectColumn($alias . '.IntbConfItemLine');
            $criteria->removeSelectColumn($alias . '.IntbConfItemCols');
            $criteria->removeSelectColumn($alias . '.IntbConfHeadLine');
            $criteria->removeSelectColumn($alias . '.IntbConfHeadCols');
            $criteria->removeSelectColumn($alias . '.IntbConfDetLine');
            $criteria->removeSelectColumn($alias . '.IntbConfDetCols');
            $criteria->removeSelectColumn($alias . '.IntbConfMinMaxZero');
            $criteria->removeSelectColumn($alias . '.IntbConfMinRec');
            $criteria->removeSelectColumn($alias . '.IntbConfAtBelowMin');
            $criteria->removeSelectColumn($alias . '.IntbConfOneWhse');
            $criteria->removeSelectColumn($alias . '.IntbConfYtdMth');
            $criteria->removeSelectColumn($alias . '.IntbConfUseGramsLtr');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcByWhse');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcNbrMths');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcBaseCode');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlA');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlB');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlC');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlD');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlE');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlF');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlG');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlH');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlI');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcLevlJ');
            $criteria->removeSelectColumn($alias . '.IntbConfUseForeignX');
            $criteria->removeSelectColumn($alias . '.IntbConfUseNafta');
            $criteria->removeSelectColumn($alias . '.IntbConfNaftaPrefCode');
            $criteria->removeSelectColumn($alias . '.IntbConfNaftaProducer');
            $criteria->removeSelectColumn($alias . '.IntbConfNaftaDocCode');
            $criteria->removeSelectColumn($alias . '.IntbConfPhysCurrWksh');
            $criteria->removeSelectColumn($alias . '.IntbConf20Or30');
            $criteria->removeSelectColumn($alias . '.IntbConfDispOrigCnt');
            $criteria->removeSelectColumn($alias . '.IntbConfDispGl');
            $criteria->removeSelectColumn($alias . '.IntbConfDispRef');
            $criteria->removeSelectColumn($alias . '.IntbConfDispCost');
            $criteria->removeSelectColumn($alias . '.IntbConfPrtVal');
            $criteria->removeSelectColumn($alias . '.IntbConfPrtGl');
            $criteria->removeSelectColumn($alias . '.IntbConfGlAcct');
            $criteria->removeSelectColumn($alias . '.IntbConfRef');
            $criteria->removeSelectColumn($alias . '.IntbConfCostType');
            $criteria->removeSelectColumn($alias . '.IntbConfNormalOnly');
            $criteria->removeSelectColumn($alias . '.IntbConfUseWhseDef');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse01');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse02');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse03');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse04');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse05');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse06');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse07');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse08');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse09');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltWhse10');
            $criteria->removeSelectColumn($alias . '.IntbConfBinDef');
            $criteria->removeSelectColumn($alias . '.IntbConfCyclDef');
            $criteria->removeSelectColumn($alias . '.IntbConfStatDef');
            $criteria->removeSelectColumn($alias . '.IntbConfAbcDef');
            $criteria->removeSelectColumn($alias . '.IntbConfSpecOrdrDef');
            $criteria->removeSelectColumn($alias . '.IntbConfOrdrPntDef');
            $criteria->removeSelectColumn($alias . '.IntbConfMaxDef');
            $criteria->removeSelectColumn($alias . '.IntbConfOrdrQtyDef');
            $criteria->removeSelectColumn($alias . '.IntbConfTrcptAllowCmpl');
            $criteria->removeSelectColumn($alias . '.IntbConfTreCmmtStock');
            $criteria->removeSelectColumn($alias . '.IntbConfUseFrtIn');
            $criteria->removeSelectColumn($alias . '.IntbConfEachOrUom');
            $criteria->removeSelectColumn($alias . '.IntbConfNegLotCorr');
            $criteria->removeSelectColumn($alias . '.IntbConfTrnsGlAcct');
            $criteria->removeSelectColumn($alias . '.IntbConfTrnsProtStock');
            $criteria->removeSelectColumn($alias . '.IntbConfNumericItem');
            $criteria->removeSelectColumn($alias . '.IntbConfItemDigits');
            $criteria->removeSelectColumn($alias . '.IntbConfSingleWhse');
            $criteria->removeSelectColumn($alias . '.IntbConfUpdUsePct');
            $criteria->removeSelectColumn($alias . '.IntbConfUpdPric');
            $criteria->removeSelectColumn($alias . '.IntbConfUpdStdCost');
            $criteria->removeSelectColumn($alias . '.IntbConfUpdXrefCost');
            $criteria->removeSelectColumn($alias . '.IntbConfIqpaUpdDate');
            $criteria->removeSelectColumn($alias . '.IntbConfUpcXrefOptn');
            $criteria->removeSelectColumn($alias . '.IntbConfTranViewLIB');
            $criteria->removeSelectColumn($alias . '.IntbConfResvCost');
            $criteria->removeSelectColumn($alias . '.IntbCon2TranZeroRqst');
            $criteria->removeSelectColumn($alias . '.IntbConfMonEndAdjDate');
            $criteria->removeSelectColumn($alias . '.IntbConfMonEndTrnDate');
            $criteria->removeSelectColumn($alias . '.IntbConfMonEndLogDate');
            $criteria->removeSelectColumn($alias . '.IntbConfDStatProc');
            $criteria->removeSelectColumn($alias . '.IntbConfStanCostUpd');
            $criteria->removeSelectColumn($alias . '.IntbConfLastCost');
            $criteria->removeSelectColumn($alias . '.IntbConfUseSOrGPct');
            $criteria->removeSelectColumn($alias . '.IntbConfAddOnStan');
            $criteria->removeSelectColumn($alias . '.IntbConfStdCostError');
            $criteria->removeSelectColumn($alias . '.IntbConfAvgCurrFive');
            $criteria->removeSelectColumn($alias . '.IntbConfUseCntrlBin');
            $criteria->removeSelectColumn($alias . '.IntbConfNbrBinAreas');
            $criteria->removeSelectColumn($alias . '.IntbConfUseMultBin');
            $criteria->removeSelectColumn($alias . '.IntbConfDfltWhseBin');
            $criteria->removeSelectColumn($alias . '.IntbConfDfltBin');
            $criteria->removeSelectColumn($alias . '.IntbConfCtryItemLot');
            $criteria->removeSelectColumn($alias . '.IntbConfUseShipBin');
            $criteria->removeSelectColumn($alias . '.IntbCon2PrtBinrLabel');
            $criteria->removeSelectColumn($alias . '.IntbCon2ItemLookup');
            $criteria->removeSelectColumn($alias . '.IntbConfIncldCti');
            $criteria->removeSelectColumn($alias . '.IntbConfCertImage');
            $criteria->removeSelectColumn($alias . '.IntbConfDrawImage');
            $criteria->removeSelectColumn($alias . '.IntbConfConfirmImage');
            $criteria->removeSelectColumn($alias . '.IntbCon2ProductImage');
            $criteria->removeSelectColumn($alias . '.IntbConfDefPick');
            $criteria->removeSelectColumn($alias . '.IntbConfDefPack');
            $criteria->removeSelectColumn($alias . '.IntbConfDefInvc');
            $criteria->removeSelectColumn($alias . '.IntbConfDefAck');
            $criteria->removeSelectColumn($alias . '.IntbConfDefQuot');
            $criteria->removeSelectColumn($alias . '.IntbConfDefPo');
            $criteria->removeSelectColumn($alias . '.IntbConfDefTrans');
            $criteria->removeSelectColumn($alias . '.IntbConfAdjGlCogs');
            $criteria->removeSelectColumn($alias . '.IntbCon2DfltAdjGlAcct');
            $criteria->removeSelectColumn($alias . '.IntbConfAdjCostBase');
            $criteria->removeSelectColumn($alias . '.IntbConfDfltAdjtBin');
            $criteria->removeSelectColumn($alias . '.IntbConfAdjtBin');
            $criteria->removeSelectColumn($alias . '.IntbConfCStockSeq');
            $criteria->removeSelectColumn($alias . '.IntbConfCStockHistDay');
            $criteria->removeSelectColumn($alias . '.IntbConfCStockFormat');
            $criteria->removeSelectColumn($alias . '.IntbConfCstkExportItem');
            $criteria->removeSelectColumn($alias . '.IntbConfCstkPdmContract');
            $criteria->removeSelectColumn($alias . '.IntbCon2ImportSeq');
            $criteria->removeSelectColumn($alias . '.IntbConfStopItemChg');
            $criteria->removeSelectColumn($alias . '.IntbConfAddToMxrfe');
            $criteria->removeSelectColumn($alias . '.IntbConfMxrfeVendId');
            $criteria->removeSelectColumn($alias . '.IntbCon2NewIdLabelList');
            $criteria->removeSelectColumn($alias . '.IntbConfUseFormat');
            $criteria->removeSelectColumn($alias . '.IntbConfDefFormat');
            $criteria->removeSelectColumn($alias . '.IntbConfSeqShortItem');
            $criteria->removeSelectColumn($alias . '.IntbConfShortItemLen');
            $criteria->removeSelectColumn($alias . '.IntbConfUseScale');
            $criteria->removeSelectColumn($alias . '.IntbConfStoreWght');
            $criteria->removeSelectColumn($alias . '.IntbConfValidAsstCode');
            $criteria->removeSelectColumn($alias . '.IntbConfWhiteGoods');
            $criteria->removeSelectColumn($alias . '.IntbCon2TransCustId');
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
        return Propel::getServiceContainer()->getDatabaseMap(ConfigInTableMap::DATABASE_NAME)->getTable(ConfigInTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ConfigIn or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ConfigIn object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigInTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ConfigIn) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConfigInTableMap::DATABASE_NAME);
            $criteria->add(ConfigInTableMap::COL_INTBCONFKEY, (array) $values, Criteria::IN);
        }

        $query = ConfigInQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ConfigInTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ConfigInTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the in_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ConfigInQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigIn or Criteria object.
     *
     * @param mixed $criteria Criteria or ConfigIn object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigInTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ConfigIn object
        }


        // Set the correct dbName
        $query = ConfigInQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
