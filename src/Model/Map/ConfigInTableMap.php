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
 *
 */
class ConfigInTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ConfigInTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'in_config';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ConfigIn';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ConfigIn';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 174;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 174;

    /**
     * the column name for the IntbConfKey field
     */
    const COL_INTBCONFKEY = 'in_config.IntbConfKey';

    /**
     * the column name for the IntbConfGlIfac field
     */
    const COL_INTBCONFGLIFAC = 'in_config.IntbConfGlIfac';

    /**
     * the column name for the IntbConfUseIw field
     */
    const COL_INTBCONFUSEIW = 'in_config.IntbConfUseIw';

    /**
     * the column name for the IntbConfLifoFifo field
     */
    const COL_INTBCONFLIFOFIFO = 'in_config.IntbConfLifoFifo';

    /**
     * the column name for the IntbConfGoNeg field
     */
    const COL_INTBCONFGONEG = 'in_config.IntbConfGoNeg';

    /**
     * the column name for the IntbConfUseLots field
     */
    const COL_INTBCONFUSELOTS = 'in_config.IntbConfUseLots';

    /**
     * the column name for the IntbConfNbrUppr field
     */
    const COL_INTBCONFNBRUPPR = 'in_config.IntbConfNbrUppr';

    /**
     * the column name for the IntbConfDescUppr field
     */
    const COL_INTBCONFDESCUPPR = 'in_config.IntbConfDescUppr';

    /**
     * the column name for the IntbConfUseDesc2 field
     */
    const COL_INTBCONFUSEDESC2 = 'in_config.IntbConfUseDesc2';

    /**
     * the column name for the IntbConfUseUpcCode field
     */
    const COL_INTBCONFUSEUPCCODE = 'in_config.IntbConfUseUpcCode';

    /**
     * the column name for the IntbConfUpcEanCntrl field
     */
    const COL_INTBCONFUPCEANCNTRL = 'in_config.IntbConfUpcEanCntrl';

    /**
     * the column name for the IntbConfUpcGenNbr field
     */
    const COL_INTBCONFUPCGENNBR = 'in_config.IntbConfUpcGenNbr';

    /**
     * the column name for the IntbCon2AllowDupUpc field
     */
    const COL_INTBCON2ALLOWDUPUPC = 'in_config.IntbCon2AllowDupUpc';

    /**
     * the column name for the IntbConfXrefNoSpace field
     */
    const COL_INTBCONFXREFNOSPACE = 'in_config.IntbConfXrefNoSpace';

    /**
     * the column name for the IntbConfUsePricGrup field
     */
    const COL_INTBCONFUSEPRICGRUP = 'in_config.IntbConfUsePricGrup';

    /**
     * the column name for the IntbConfUseCommGrup field
     */
    const COL_INTBCONFUSECOMMGRUP = 'in_config.IntbConfUseCommGrup';

    /**
     * the column name for the IntbConfUseWarrDays field
     */
    const COL_INTBCONFUSEWARRDAYS = 'in_config.IntbConfUseWarrDays';

    /**
     * the column name for the IntbConfStanBaseDef field
     */
    const COL_INTBCONFSTANBASEDEF = 'in_config.IntbConfStanBaseDef';

    /**
     * the column name for the IntbConfGrupDef field
     */
    const COL_INTBCONFGRUPDEF = 'in_config.IntbConfGrupDef';

    /**
     * the column name for the IntbConfPricGrupDef field
     */
    const COL_INTBCONFPRICGRUPDEF = 'in_config.IntbConfPricGrupDef';

    /**
     * the column name for the IntbConfCommGrupDef field
     */
    const COL_INTBCONFCOMMGRUPDEF = 'in_config.IntbConfCommGrupDef';

    /**
     * the column name for the IntbConfTypeDef field
     */
    const COL_INTBCONFTYPEDEF = 'in_config.IntbConfTypeDef';

    /**
     * the column name for the IntbConfPricUseItem field
     */
    const COL_INTBCONFPRICUSEITEM = 'in_config.IntbConfPricUseItem';

    /**
     * the column name for the IntbConfCommUseItem field
     */
    const COL_INTBCONFCOMMUSEITEM = 'in_config.IntbConfCommUseItem';

    /**
     * the column name for the IntbConfUomSaleDef field
     */
    const COL_INTBCONFUOMSALEDEF = 'in_config.IntbConfUomSaleDef';

    /**
     * the column name for the IntbConfUomPurDef field
     */
    const COL_INTBCONFUOMPURDEF = 'in_config.IntbConfUomPurDef';

    /**
     * the column name for the IntbConfSviaDef field
     */
    const COL_INTBCONFSVIADEF = 'in_config.IntbConfSviaDef';

    /**
     * the column name for the IntbConfCustxrefOrUse field
     */
    const COL_INTBCONFCUSTXREFORUSE = 'in_config.IntbConfCustxrefOrUse';

    /**
     * the column name for the IntbConfHeadGetDef field
     */
    const COL_INTBCONFHEADGETDEF = 'in_config.IntbConfHeadGetDef';

    /**
     * the column name for the IntbConfItemGetDef field
     */
    const COL_INTBCONFITEMGETDEF = 'in_config.IntbConfItemGetDef';

    /**
     * the column name for the IntbConfGetDispOhAval field
     */
    const COL_INTBCONFGETDISPOHAVAL = 'in_config.IntbConfGetDispOhAval';

    /**
     * the column name for the IntbConfUserCode1Labl field
     */
    const COL_INTBCONFUSERCODE1LABL = 'in_config.IntbConfUserCode1Labl';

    /**
     * the column name for the IntbConfUserCode1Ver field
     */
    const COL_INTBCONFUSERCODE1VER = 'in_config.IntbConfUserCode1Ver';

    /**
     * the column name for the IntbConfUserCode2Labl field
     */
    const COL_INTBCONFUSERCODE2LABL = 'in_config.IntbConfUserCode2Labl';

    /**
     * the column name for the IntbConfUserCode2Ver field
     */
    const COL_INTBCONFUSERCODE2VER = 'in_config.IntbConfUserCode2Ver';

    /**
     * the column name for the IntbConfItemLine field
     */
    const COL_INTBCONFITEMLINE = 'in_config.IntbConfItemLine';

    /**
     * the column name for the IntbConfItemCols field
     */
    const COL_INTBCONFITEMCOLS = 'in_config.IntbConfItemCols';

    /**
     * the column name for the IntbConfHeadLine field
     */
    const COL_INTBCONFHEADLINE = 'in_config.IntbConfHeadLine';

    /**
     * the column name for the IntbConfHeadCols field
     */
    const COL_INTBCONFHEADCOLS = 'in_config.IntbConfHeadCols';

    /**
     * the column name for the IntbConfDetLine field
     */
    const COL_INTBCONFDETLINE = 'in_config.IntbConfDetLine';

    /**
     * the column name for the IntbConfDetCols field
     */
    const COL_INTBCONFDETCOLS = 'in_config.IntbConfDetCols';

    /**
     * the column name for the IntbConfMinMaxZero field
     */
    const COL_INTBCONFMINMAXZERO = 'in_config.IntbConfMinMaxZero';

    /**
     * the column name for the IntbConfMinRec field
     */
    const COL_INTBCONFMINREC = 'in_config.IntbConfMinRec';

    /**
     * the column name for the IntbConfAtBelowMin field
     */
    const COL_INTBCONFATBELOWMIN = 'in_config.IntbConfAtBelowMin';

    /**
     * the column name for the IntbConfOneWhse field
     */
    const COL_INTBCONFONEWHSE = 'in_config.IntbConfOneWhse';

    /**
     * the column name for the IntbConfYtdMth field
     */
    const COL_INTBCONFYTDMTH = 'in_config.IntbConfYtdMth';

    /**
     * the column name for the IntbConfUseGramsLtr field
     */
    const COL_INTBCONFUSEGRAMSLTR = 'in_config.IntbConfUseGramsLtr';

    /**
     * the column name for the IntbConfAbcByWhse field
     */
    const COL_INTBCONFABCBYWHSE = 'in_config.IntbConfAbcByWhse';

    /**
     * the column name for the IntbConfAbcNbrMths field
     */
    const COL_INTBCONFABCNBRMTHS = 'in_config.IntbConfAbcNbrMths';

    /**
     * the column name for the IntbConfAbcBaseCode field
     */
    const COL_INTBCONFABCBASECODE = 'in_config.IntbConfAbcBaseCode';

    /**
     * the column name for the IntbConfAbcLevlA field
     */
    const COL_INTBCONFABCLEVLA = 'in_config.IntbConfAbcLevlA';

    /**
     * the column name for the IntbConfAbcLevlB field
     */
    const COL_INTBCONFABCLEVLB = 'in_config.IntbConfAbcLevlB';

    /**
     * the column name for the IntbConfAbcLevlC field
     */
    const COL_INTBCONFABCLEVLC = 'in_config.IntbConfAbcLevlC';

    /**
     * the column name for the IntbConfAbcLevlD field
     */
    const COL_INTBCONFABCLEVLD = 'in_config.IntbConfAbcLevlD';

    /**
     * the column name for the IntbConfAbcLevlE field
     */
    const COL_INTBCONFABCLEVLE = 'in_config.IntbConfAbcLevlE';

    /**
     * the column name for the IntbConfAbcLevlF field
     */
    const COL_INTBCONFABCLEVLF = 'in_config.IntbConfAbcLevlF';

    /**
     * the column name for the IntbConfAbcLevlG field
     */
    const COL_INTBCONFABCLEVLG = 'in_config.IntbConfAbcLevlG';

    /**
     * the column name for the IntbConfAbcLevlH field
     */
    const COL_INTBCONFABCLEVLH = 'in_config.IntbConfAbcLevlH';

    /**
     * the column name for the IntbConfAbcLevlI field
     */
    const COL_INTBCONFABCLEVLI = 'in_config.IntbConfAbcLevlI';

    /**
     * the column name for the IntbConfAbcLevlJ field
     */
    const COL_INTBCONFABCLEVLJ = 'in_config.IntbConfAbcLevlJ';

    /**
     * the column name for the IntbConfUseForeignX field
     */
    const COL_INTBCONFUSEFOREIGNX = 'in_config.IntbConfUseForeignX';

    /**
     * the column name for the IntbConfUseNafta field
     */
    const COL_INTBCONFUSENAFTA = 'in_config.IntbConfUseNafta';

    /**
     * the column name for the IntbConfNaftaPrefCode field
     */
    const COL_INTBCONFNAFTAPREFCODE = 'in_config.IntbConfNaftaPrefCode';

    /**
     * the column name for the IntbConfNaftaProducer field
     */
    const COL_INTBCONFNAFTAPRODUCER = 'in_config.IntbConfNaftaProducer';

    /**
     * the column name for the IntbConfNaftaDocCode field
     */
    const COL_INTBCONFNAFTADOCCODE = 'in_config.IntbConfNaftaDocCode';

    /**
     * the column name for the IntbConfPhysCurrWksh field
     */
    const COL_INTBCONFPHYSCURRWKSH = 'in_config.IntbConfPhysCurrWksh';

    /**
     * the column name for the IntbConf20Or30 field
     */
    const COL_INTBCONF20OR30 = 'in_config.IntbConf20Or30';

    /**
     * the column name for the IntbConfDispOrigCnt field
     */
    const COL_INTBCONFDISPORIGCNT = 'in_config.IntbConfDispOrigCnt';

    /**
     * the column name for the IntbConfDispGl field
     */
    const COL_INTBCONFDISPGL = 'in_config.IntbConfDispGl';

    /**
     * the column name for the IntbConfDispRef field
     */
    const COL_INTBCONFDISPREF = 'in_config.IntbConfDispRef';

    /**
     * the column name for the IntbConfDispCost field
     */
    const COL_INTBCONFDISPCOST = 'in_config.IntbConfDispCost';

    /**
     * the column name for the IntbConfPrtVal field
     */
    const COL_INTBCONFPRTVAL = 'in_config.IntbConfPrtVal';

    /**
     * the column name for the IntbConfPrtGl field
     */
    const COL_INTBCONFPRTGL = 'in_config.IntbConfPrtGl';

    /**
     * the column name for the IntbConfGlAcct field
     */
    const COL_INTBCONFGLACCT = 'in_config.IntbConfGlAcct';

    /**
     * the column name for the IntbConfRef field
     */
    const COL_INTBCONFREF = 'in_config.IntbConfRef';

    /**
     * the column name for the IntbConfCostType field
     */
    const COL_INTBCONFCOSTTYPE = 'in_config.IntbConfCostType';

    /**
     * the column name for the IntbConfNormalOnly field
     */
    const COL_INTBCONFNORMALONLY = 'in_config.IntbConfNormalOnly';

    /**
     * the column name for the IntbConfUseWhseDef field
     */
    const COL_INTBCONFUSEWHSEDEF = 'in_config.IntbConfUseWhseDef';

    /**
     * the column name for the IntbCon2DfltWhse01 field
     */
    const COL_INTBCON2DFLTWHSE01 = 'in_config.IntbCon2DfltWhse01';

    /**
     * the column name for the IntbCon2DfltWhse02 field
     */
    const COL_INTBCON2DFLTWHSE02 = 'in_config.IntbCon2DfltWhse02';

    /**
     * the column name for the IntbCon2DfltWhse03 field
     */
    const COL_INTBCON2DFLTWHSE03 = 'in_config.IntbCon2DfltWhse03';

    /**
     * the column name for the IntbCon2DfltWhse04 field
     */
    const COL_INTBCON2DFLTWHSE04 = 'in_config.IntbCon2DfltWhse04';

    /**
     * the column name for the IntbCon2DfltWhse05 field
     */
    const COL_INTBCON2DFLTWHSE05 = 'in_config.IntbCon2DfltWhse05';

    /**
     * the column name for the IntbCon2DfltWhse06 field
     */
    const COL_INTBCON2DFLTWHSE06 = 'in_config.IntbCon2DfltWhse06';

    /**
     * the column name for the IntbCon2DfltWhse07 field
     */
    const COL_INTBCON2DFLTWHSE07 = 'in_config.IntbCon2DfltWhse07';

    /**
     * the column name for the IntbCon2DfltWhse08 field
     */
    const COL_INTBCON2DFLTWHSE08 = 'in_config.IntbCon2DfltWhse08';

    /**
     * the column name for the IntbCon2DfltWhse09 field
     */
    const COL_INTBCON2DFLTWHSE09 = 'in_config.IntbCon2DfltWhse09';

    /**
     * the column name for the IntbCon2DfltWhse10 field
     */
    const COL_INTBCON2DFLTWHSE10 = 'in_config.IntbCon2DfltWhse10';

    /**
     * the column name for the IntbConfBinDef field
     */
    const COL_INTBCONFBINDEF = 'in_config.IntbConfBinDef';

    /**
     * the column name for the IntbConfCyclDef field
     */
    const COL_INTBCONFCYCLDEF = 'in_config.IntbConfCyclDef';

    /**
     * the column name for the IntbConfStatDef field
     */
    const COL_INTBCONFSTATDEF = 'in_config.IntbConfStatDef';

    /**
     * the column name for the IntbConfAbcDef field
     */
    const COL_INTBCONFABCDEF = 'in_config.IntbConfAbcDef';

    /**
     * the column name for the IntbConfSpecOrdrDef field
     */
    const COL_INTBCONFSPECORDRDEF = 'in_config.IntbConfSpecOrdrDef';

    /**
     * the column name for the IntbConfOrdrPntDef field
     */
    const COL_INTBCONFORDRPNTDEF = 'in_config.IntbConfOrdrPntDef';

    /**
     * the column name for the IntbConfMaxDef field
     */
    const COL_INTBCONFMAXDEF = 'in_config.IntbConfMaxDef';

    /**
     * the column name for the IntbConfOrdrQtyDef field
     */
    const COL_INTBCONFORDRQTYDEF = 'in_config.IntbConfOrdrQtyDef';

    /**
     * the column name for the IntbConfTrcptAllowCmpl field
     */
    const COL_INTBCONFTRCPTALLOWCMPL = 'in_config.IntbConfTrcptAllowCmpl';

    /**
     * the column name for the IntbConfTreCmmtStock field
     */
    const COL_INTBCONFTRECMMTSTOCK = 'in_config.IntbConfTreCmmtStock';

    /**
     * the column name for the IntbConfUseFrtIn field
     */
    const COL_INTBCONFUSEFRTIN = 'in_config.IntbConfUseFrtIn';

    /**
     * the column name for the IntbConfEachOrUom field
     */
    const COL_INTBCONFEACHORUOM = 'in_config.IntbConfEachOrUom';

    /**
     * the column name for the IntbConfNegLotCorr field
     */
    const COL_INTBCONFNEGLOTCORR = 'in_config.IntbConfNegLotCorr';

    /**
     * the column name for the IntbConfTrnsGlAcct field
     */
    const COL_INTBCONFTRNSGLACCT = 'in_config.IntbConfTrnsGlAcct';

    /**
     * the column name for the IntbConfTrnsProtStock field
     */
    const COL_INTBCONFTRNSPROTSTOCK = 'in_config.IntbConfTrnsProtStock';

    /**
     * the column name for the IntbConfNumericItem field
     */
    const COL_INTBCONFNUMERICITEM = 'in_config.IntbConfNumericItem';

    /**
     * the column name for the IntbConfItemDigits field
     */
    const COL_INTBCONFITEMDIGITS = 'in_config.IntbConfItemDigits';

    /**
     * the column name for the IntbConfSingleWhse field
     */
    const COL_INTBCONFSINGLEWHSE = 'in_config.IntbConfSingleWhse';

    /**
     * the column name for the IntbConfUpdUsePct field
     */
    const COL_INTBCONFUPDUSEPCT = 'in_config.IntbConfUpdUsePct';

    /**
     * the column name for the IntbConfUpdPric field
     */
    const COL_INTBCONFUPDPRIC = 'in_config.IntbConfUpdPric';

    /**
     * the column name for the IntbConfUpdStdCost field
     */
    const COL_INTBCONFUPDSTDCOST = 'in_config.IntbConfUpdStdCost';

    /**
     * the column name for the IntbConfUpdXrefCost field
     */
    const COL_INTBCONFUPDXREFCOST = 'in_config.IntbConfUpdXrefCost';

    /**
     * the column name for the IntbConfIqpaUpdDate field
     */
    const COL_INTBCONFIQPAUPDDATE = 'in_config.IntbConfIqpaUpdDate';

    /**
     * the column name for the IntbConfUpcXrefOptn field
     */
    const COL_INTBCONFUPCXREFOPTN = 'in_config.IntbConfUpcXrefOptn';

    /**
     * the column name for the IntbConfResqYN field
     */
    const COL_INTBCONFRESQYN = 'in_config.IntbConfResqYN';

    /**
     * the column name for the IntbConfTranViewLIB field
     */
    const COL_INTBCONFTRANVIEWLIB = 'in_config.IntbConfTranViewLIB';

    /**
     * the column name for the IntbConfResvCost field
     */
    const COL_INTBCONFRESVCOST = 'in_config.IntbConfResvCost';

    /**
     * the column name for the IntbCon2TranZeroRqst field
     */
    const COL_INTBCON2TRANZERORQST = 'in_config.IntbCon2TranZeroRqst';

    /**
     * the column name for the IntbConfMonEndAdjDate field
     */
    const COL_INTBCONFMONENDADJDATE = 'in_config.IntbConfMonEndAdjDate';

    /**
     * the column name for the IntbConfMonEndTrnDate field
     */
    const COL_INTBCONFMONENDTRNDATE = 'in_config.IntbConfMonEndTrnDate';

    /**
     * the column name for the IntbConfMonEndLogDate field
     */
    const COL_INTBCONFMONENDLOGDATE = 'in_config.IntbConfMonEndLogDate';

    /**
     * the column name for the IntbConfDStatProc field
     */
    const COL_INTBCONFDSTATPROC = 'in_config.IntbConfDStatProc';

    /**
     * the column name for the IntbConfStanCostUpd field
     */
    const COL_INTBCONFSTANCOSTUPD = 'in_config.IntbConfStanCostUpd';

    /**
     * the column name for the IntbConfLastCost field
     */
    const COL_INTBCONFLASTCOST = 'in_config.IntbConfLastCost';

    /**
     * the column name for the IntbConfUseSOrGPct field
     */
    const COL_INTBCONFUSESORGPCT = 'in_config.IntbConfUseSOrGPct';

    /**
     * the column name for the IntbConfAddOnStan field
     */
    const COL_INTBCONFADDONSTAN = 'in_config.IntbConfAddOnStan';

    /**
     * the column name for the IntbConfStdCostError field
     */
    const COL_INTBCONFSTDCOSTERROR = 'in_config.IntbConfStdCostError';

    /**
     * the column name for the IntbConfAvgCurrFive field
     */
    const COL_INTBCONFAVGCURRFIVE = 'in_config.IntbConfAvgCurrFive';

    /**
     * the column name for the IntbConfUseCntrlBin field
     */
    const COL_INTBCONFUSECNTRLBIN = 'in_config.IntbConfUseCntrlBin';

    /**
     * the column name for the IntbConfNbrBinAreas field
     */
    const COL_INTBCONFNBRBINAREAS = 'in_config.IntbConfNbrBinAreas';

    /**
     * the column name for the IntbConfUseMultBin field
     */
    const COL_INTBCONFUSEMULTBIN = 'in_config.IntbConfUseMultBin';

    /**
     * the column name for the IntbConfDfltWhseBin field
     */
    const COL_INTBCONFDFLTWHSEBIN = 'in_config.IntbConfDfltWhseBin';

    /**
     * the column name for the IntbConfDfltBin field
     */
    const COL_INTBCONFDFLTBIN = 'in_config.IntbConfDfltBin';

    /**
     * the column name for the IntbConfCtryItemLot field
     */
    const COL_INTBCONFCTRYITEMLOT = 'in_config.IntbConfCtryItemLot';

    /**
     * the column name for the IntbConfUseShipBin field
     */
    const COL_INTBCONFUSESHIPBIN = 'in_config.IntbConfUseShipBin';

    /**
     * the column name for the IntbCon2PrtBinrLabel field
     */
    const COL_INTBCON2PRTBINRLABEL = 'in_config.IntbCon2PrtBinrLabel';

    /**
     * the column name for the IntbCon2ItemLookup field
     */
    const COL_INTBCON2ITEMLOOKUP = 'in_config.IntbCon2ItemLookup';

    /**
     * the column name for the IntbConfIncldCti field
     */
    const COL_INTBCONFINCLDCTI = 'in_config.IntbConfIncldCti';

    /**
     * the column name for the IntbConfCertImage field
     */
    const COL_INTBCONFCERTIMAGE = 'in_config.IntbConfCertImage';

    /**
     * the column name for the IntbConfDrawImage field
     */
    const COL_INTBCONFDRAWIMAGE = 'in_config.IntbConfDrawImage';

    /**
     * the column name for the IntbConfConfirmImage field
     */
    const COL_INTBCONFCONFIRMIMAGE = 'in_config.IntbConfConfirmImage';

    /**
     * the column name for the IntbCon2ProductImage field
     */
    const COL_INTBCON2PRODUCTIMAGE = 'in_config.IntbCon2ProductImage';

    /**
     * the column name for the IntbConfDefPick field
     */
    const COL_INTBCONFDEFPICK = 'in_config.IntbConfDefPick';

    /**
     * the column name for the IntbConfDefPack field
     */
    const COL_INTBCONFDEFPACK = 'in_config.IntbConfDefPack';

    /**
     * the column name for the IntbConfDefInvc field
     */
    const COL_INTBCONFDEFINVC = 'in_config.IntbConfDefInvc';

    /**
     * the column name for the IntbConfDefAck field
     */
    const COL_INTBCONFDEFACK = 'in_config.IntbConfDefAck';

    /**
     * the column name for the IntbConfDefQuot field
     */
    const COL_INTBCONFDEFQUOT = 'in_config.IntbConfDefQuot';

    /**
     * the column name for the IntbConfDefPo field
     */
    const COL_INTBCONFDEFPO = 'in_config.IntbConfDefPo';

    /**
     * the column name for the IntbConfDefTrans field
     */
    const COL_INTBCONFDEFTRANS = 'in_config.IntbConfDefTrans';

    /**
     * the column name for the IntbConfAdjGlCogs field
     */
    const COL_INTBCONFADJGLCOGS = 'in_config.IntbConfAdjGlCogs';

    /**
     * the column name for the IntbCon2DfltAdjGlAcct field
     */
    const COL_INTBCON2DFLTADJGLACCT = 'in_config.IntbCon2DfltAdjGlAcct';

    /**
     * the column name for the IntbConfAdjCostBase field
     */
    const COL_INTBCONFADJCOSTBASE = 'in_config.IntbConfAdjCostBase';

    /**
     * the column name for the IntbConfDfltAdjtBin field
     */
    const COL_INTBCONFDFLTADJTBIN = 'in_config.IntbConfDfltAdjtBin';

    /**
     * the column name for the IntbConfAdjtBin field
     */
    const COL_INTBCONFADJTBIN = 'in_config.IntbConfAdjtBin';

    /**
     * the column name for the IntbConfCStockSeq field
     */
    const COL_INTBCONFCSTOCKSEQ = 'in_config.IntbConfCStockSeq';

    /**
     * the column name for the IntbConfCStockHistDay field
     */
    const COL_INTBCONFCSTOCKHISTDAY = 'in_config.IntbConfCStockHistDay';

    /**
     * the column name for the IntbConfCStockFormat field
     */
    const COL_INTBCONFCSTOCKFORMAT = 'in_config.IntbConfCStockFormat';

    /**
     * the column name for the IntbConfCstkExportItem field
     */
    const COL_INTBCONFCSTKEXPORTITEM = 'in_config.IntbConfCstkExportItem';

    /**
     * the column name for the IntbConfCstkPdmContract field
     */
    const COL_INTBCONFCSTKPDMCONTRACT = 'in_config.IntbConfCstkPdmContract';

    /**
     * the column name for the IntbCon2ImportSeq field
     */
    const COL_INTBCON2IMPORTSEQ = 'in_config.IntbCon2ImportSeq';

    /**
     * the column name for the IntbConfStopItemChg field
     */
    const COL_INTBCONFSTOPITEMCHG = 'in_config.IntbConfStopItemChg';

    /**
     * the column name for the IntbConfAddToMxrfe field
     */
    const COL_INTBCONFADDTOMXRFE = 'in_config.IntbConfAddToMxrfe';

    /**
     * the column name for the IntbConfMxrfeVendId field
     */
    const COL_INTBCONFMXRFEVENDID = 'in_config.IntbConfMxrfeVendId';

    /**
     * the column name for the IntbCon2NewIdLabelList field
     */
    const COL_INTBCON2NEWIDLABELLIST = 'in_config.IntbCon2NewIdLabelList';

    /**
     * the column name for the IntbConfUseFormat field
     */
    const COL_INTBCONFUSEFORMAT = 'in_config.IntbConfUseFormat';

    /**
     * the column name for the IntbConfDefFormat field
     */
    const COL_INTBCONFDEFFORMAT = 'in_config.IntbConfDefFormat';

    /**
     * the column name for the IntbConfSeqShortItem field
     */
    const COL_INTBCONFSEQSHORTITEM = 'in_config.IntbConfSeqShortItem';

    /**
     * the column name for the IntbConfShortItemLen field
     */
    const COL_INTBCONFSHORTITEMLEN = 'in_config.IntbConfShortItemLen';

    /**
     * the column name for the IntbConfUseScale field
     */
    const COL_INTBCONFUSESCALE = 'in_config.IntbConfUseScale';

    /**
     * the column name for the IntbConfStoreWght field
     */
    const COL_INTBCONFSTOREWGHT = 'in_config.IntbConfStoreWght';

    /**
     * the column name for the IntbConfValidAsstCode field
     */
    const COL_INTBCONFVALIDASSTCODE = 'in_config.IntbConfValidAsstCode';

    /**
     * the column name for the IntbConfWhiteGoods field
     */
    const COL_INTBCONFWHITEGOODS = 'in_config.IntbConfWhiteGoods';

    /**
     * the column name for the IntbCon2TransCustId field
     */
    const COL_INTBCON2TRANSCUSTID = 'in_config.IntbCon2TransCustId';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'in_config.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'in_config.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'in_config.dummy';

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
        self::TYPE_PHPNAME       => array('Intbconfkey', 'Intbconfglifac', 'Intbconfuseiw', 'Intbconflifofifo', 'Intbconfgoneg', 'Intbconfuselots', 'Intbconfnbruppr', 'Intbconfdescuppr', 'Intbconfusedesc2', 'Intbconfuseupccode', 'Intbconfupceancntrl', 'Intbconfupcgennbr', 'Intbcon2allowdupupc', 'Intbconfxrefnospace', 'Intbconfusepricgrup', 'Intbconfusecommgrup', 'Intbconfusewarrdays', 'Intbconfstanbasedef', 'Intbconfgrupdef', 'Intbconfpricgrupdef', 'Intbconfcommgrupdef', 'Intbconftypedef', 'Intbconfpricuseitem', 'Intbconfcommuseitem', 'Intbconfuomsaledef', 'Intbconfuompurdef', 'Intbconfsviadef', 'Intbconfcustxreforuse', 'Intbconfheadgetdef', 'Intbconfitemgetdef', 'Intbconfgetdispohaval', 'Intbconfusercode1labl', 'Intbconfusercode1ver', 'Intbconfusercode2labl', 'Intbconfusercode2ver', 'Intbconfitemline', 'Intbconfitemcols', 'Intbconfheadline', 'Intbconfheadcols', 'Intbconfdetline', 'Intbconfdetcols', 'Intbconfminmaxzero', 'Intbconfminrec', 'Intbconfatbelowmin', 'Intbconfonewhse', 'Intbconfytdmth', 'Intbconfusegramsltr', 'Intbconfabcbywhse', 'Intbconfabcnbrmths', 'Intbconfabcbasecode', 'Intbconfabclevla', 'Intbconfabclevlb', 'Intbconfabclevlc', 'Intbconfabclevld', 'Intbconfabclevle', 'Intbconfabclevlf', 'Intbconfabclevlg', 'Intbconfabclevlh', 'Intbconfabclevli', 'Intbconfabclevlj', 'Intbconfuseforeignx', 'Intbconfusenafta', 'Intbconfnaftaprefcode', 'Intbconfnaftaproducer', 'Intbconfnaftadoccode', 'Intbconfphyscurrwksh', 'Intbconf20or30', 'Intbconfdisporigcnt', 'Intbconfdispgl', 'Intbconfdispref', 'Intbconfdispcost', 'Intbconfprtval', 'Intbconfprtgl', 'Intbconfglacct', 'Intbconfref', 'Intbconfcosttype', 'Intbconfnormalonly', 'Intbconfusewhsedef', 'Intbcon2dfltwhse01', 'Intbcon2dfltwhse02', 'Intbcon2dfltwhse03', 'Intbcon2dfltwhse04', 'Intbcon2dfltwhse05', 'Intbcon2dfltwhse06', 'Intbcon2dfltwhse07', 'Intbcon2dfltwhse08', 'Intbcon2dfltwhse09', 'Intbcon2dfltwhse10', 'Intbconfbindef', 'Intbconfcycldef', 'Intbconfstatdef', 'Intbconfabcdef', 'Intbconfspecordrdef', 'Intbconfordrpntdef', 'Intbconfmaxdef', 'Intbconfordrqtydef', 'Intbconftrcptallowcmpl', 'Intbconftrecmmtstock', 'Intbconfusefrtin', 'Intbconfeachoruom', 'Intbconfneglotcorr', 'Intbconftrnsglacct', 'Intbconftrnsprotstock', 'Intbconfnumericitem', 'Intbconfitemdigits', 'Intbconfsinglewhse', 'Intbconfupdusepct', 'Intbconfupdpric', 'Intbconfupdstdcost', 'Intbconfupdxrefcost', 'Intbconfiqpaupddate', 'Intbconfupcxrefoptn', 'Intbconfresqyn', 'Intbconftranviewlib', 'Intbconfresvcost', 'Intbcon2tranzerorqst', 'Intbconfmonendadjdate', 'Intbconfmonendtrndate', 'Intbconfmonendlogdate', 'Intbconfdstatproc', 'Intbconfstancostupd', 'Intbconflastcost', 'Intbconfusesorgpct', 'Intbconfaddonstan', 'Intbconfstdcosterror', 'Intbconfavgcurrfive', 'Intbconfusecntrlbin', 'Intbconfnbrbinareas', 'Intbconfusemultbin', 'Intbconfdfltwhsebin', 'Intbconfdfltbin', 'Intbconfctryitemlot', 'Intbconfuseshipbin', 'Intbcon2prtbinrlabel', 'Intbcon2itemlookup', 'Intbconfincldcti', 'Intbconfcertimage', 'Intbconfdrawimage', 'Intbconfconfirmimage', 'Intbcon2productimage', 'Intbconfdefpick', 'Intbconfdefpack', 'Intbconfdefinvc', 'Intbconfdefack', 'Intbconfdefquot', 'Intbconfdefpo', 'Intbconfdeftrans', 'Intbconfadjglcogs', 'Intbcon2dfltadjglacct', 'Intbconfadjcostbase', 'Intbconfdfltadjtbin', 'Intbconfadjtbin', 'Intbconfcstockseq', 'Intbconfcstockhistday', 'Intbconfcstockformat', 'Intbconfcstkexportitem', 'Intbconfcstkpdmcontract', 'Intbcon2importseq', 'Intbconfstopitemchg', 'Intbconfaddtomxrfe', 'Intbconfmxrfevendid', 'Intbcon2newidlabellist', 'Intbconfuseformat', 'Intbconfdefformat', 'Intbconfseqshortitem', 'Intbconfshortitemlen', 'Intbconfusescale', 'Intbconfstorewght', 'Intbconfvalidasstcode', 'Intbconfwhitegoods', 'Intbcon2transcustid', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('intbconfkey', 'intbconfglifac', 'intbconfuseiw', 'intbconflifofifo', 'intbconfgoneg', 'intbconfuselots', 'intbconfnbruppr', 'intbconfdescuppr', 'intbconfusedesc2', 'intbconfuseupccode', 'intbconfupceancntrl', 'intbconfupcgennbr', 'intbcon2allowdupupc', 'intbconfxrefnospace', 'intbconfusepricgrup', 'intbconfusecommgrup', 'intbconfusewarrdays', 'intbconfstanbasedef', 'intbconfgrupdef', 'intbconfpricgrupdef', 'intbconfcommgrupdef', 'intbconftypedef', 'intbconfpricuseitem', 'intbconfcommuseitem', 'intbconfuomsaledef', 'intbconfuompurdef', 'intbconfsviadef', 'intbconfcustxreforuse', 'intbconfheadgetdef', 'intbconfitemgetdef', 'intbconfgetdispohaval', 'intbconfusercode1labl', 'intbconfusercode1ver', 'intbconfusercode2labl', 'intbconfusercode2ver', 'intbconfitemline', 'intbconfitemcols', 'intbconfheadline', 'intbconfheadcols', 'intbconfdetline', 'intbconfdetcols', 'intbconfminmaxzero', 'intbconfminrec', 'intbconfatbelowmin', 'intbconfonewhse', 'intbconfytdmth', 'intbconfusegramsltr', 'intbconfabcbywhse', 'intbconfabcnbrmths', 'intbconfabcbasecode', 'intbconfabclevla', 'intbconfabclevlb', 'intbconfabclevlc', 'intbconfabclevld', 'intbconfabclevle', 'intbconfabclevlf', 'intbconfabclevlg', 'intbconfabclevlh', 'intbconfabclevli', 'intbconfabclevlj', 'intbconfuseforeignx', 'intbconfusenafta', 'intbconfnaftaprefcode', 'intbconfnaftaproducer', 'intbconfnaftadoccode', 'intbconfphyscurrwksh', 'intbconf20or30', 'intbconfdisporigcnt', 'intbconfdispgl', 'intbconfdispref', 'intbconfdispcost', 'intbconfprtval', 'intbconfprtgl', 'intbconfglacct', 'intbconfref', 'intbconfcosttype', 'intbconfnormalonly', 'intbconfusewhsedef', 'intbcon2dfltwhse01', 'intbcon2dfltwhse02', 'intbcon2dfltwhse03', 'intbcon2dfltwhse04', 'intbcon2dfltwhse05', 'intbcon2dfltwhse06', 'intbcon2dfltwhse07', 'intbcon2dfltwhse08', 'intbcon2dfltwhse09', 'intbcon2dfltwhse10', 'intbconfbindef', 'intbconfcycldef', 'intbconfstatdef', 'intbconfabcdef', 'intbconfspecordrdef', 'intbconfordrpntdef', 'intbconfmaxdef', 'intbconfordrqtydef', 'intbconftrcptallowcmpl', 'intbconftrecmmtstock', 'intbconfusefrtin', 'intbconfeachoruom', 'intbconfneglotcorr', 'intbconftrnsglacct', 'intbconftrnsprotstock', 'intbconfnumericitem', 'intbconfitemdigits', 'intbconfsinglewhse', 'intbconfupdusepct', 'intbconfupdpric', 'intbconfupdstdcost', 'intbconfupdxrefcost', 'intbconfiqpaupddate', 'intbconfupcxrefoptn', 'intbconfresqyn', 'intbconftranviewlib', 'intbconfresvcost', 'intbcon2tranzerorqst', 'intbconfmonendadjdate', 'intbconfmonendtrndate', 'intbconfmonendlogdate', 'intbconfdstatproc', 'intbconfstancostupd', 'intbconflastcost', 'intbconfusesorgpct', 'intbconfaddonstan', 'intbconfstdcosterror', 'intbconfavgcurrfive', 'intbconfusecntrlbin', 'intbconfnbrbinareas', 'intbconfusemultbin', 'intbconfdfltwhsebin', 'intbconfdfltbin', 'intbconfctryitemlot', 'intbconfuseshipbin', 'intbcon2prtbinrlabel', 'intbcon2itemlookup', 'intbconfincldcti', 'intbconfcertimage', 'intbconfdrawimage', 'intbconfconfirmimage', 'intbcon2productimage', 'intbconfdefpick', 'intbconfdefpack', 'intbconfdefinvc', 'intbconfdefack', 'intbconfdefquot', 'intbconfdefpo', 'intbconfdeftrans', 'intbconfadjglcogs', 'intbcon2dfltadjglacct', 'intbconfadjcostbase', 'intbconfdfltadjtbin', 'intbconfadjtbin', 'intbconfcstockseq', 'intbconfcstockhistday', 'intbconfcstockformat', 'intbconfcstkexportitem', 'intbconfcstkpdmcontract', 'intbcon2importseq', 'intbconfstopitemchg', 'intbconfaddtomxrfe', 'intbconfmxrfevendid', 'intbcon2newidlabellist', 'intbconfuseformat', 'intbconfdefformat', 'intbconfseqshortitem', 'intbconfshortitemlen', 'intbconfusescale', 'intbconfstorewght', 'intbconfvalidasstcode', 'intbconfwhitegoods', 'intbcon2transcustid', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ConfigInTableMap::COL_INTBCONFKEY, ConfigInTableMap::COL_INTBCONFGLIFAC, ConfigInTableMap::COL_INTBCONFUSEIW, ConfigInTableMap::COL_INTBCONFLIFOFIFO, ConfigInTableMap::COL_INTBCONFGONEG, ConfigInTableMap::COL_INTBCONFUSELOTS, ConfigInTableMap::COL_INTBCONFNBRUPPR, ConfigInTableMap::COL_INTBCONFDESCUPPR, ConfigInTableMap::COL_INTBCONFUSEDESC2, ConfigInTableMap::COL_INTBCONFUSEUPCCODE, ConfigInTableMap::COL_INTBCONFUPCEANCNTRL, ConfigInTableMap::COL_INTBCONFUPCGENNBR, ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC, ConfigInTableMap::COL_INTBCONFXREFNOSPACE, ConfigInTableMap::COL_INTBCONFUSEPRICGRUP, ConfigInTableMap::COL_INTBCONFUSECOMMGRUP, ConfigInTableMap::COL_INTBCONFUSEWARRDAYS, ConfigInTableMap::COL_INTBCONFSTANBASEDEF, ConfigInTableMap::COL_INTBCONFGRUPDEF, ConfigInTableMap::COL_INTBCONFPRICGRUPDEF, ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF, ConfigInTableMap::COL_INTBCONFTYPEDEF, ConfigInTableMap::COL_INTBCONFPRICUSEITEM, ConfigInTableMap::COL_INTBCONFCOMMUSEITEM, ConfigInTableMap::COL_INTBCONFUOMSALEDEF, ConfigInTableMap::COL_INTBCONFUOMPURDEF, ConfigInTableMap::COL_INTBCONFSVIADEF, ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE, ConfigInTableMap::COL_INTBCONFHEADGETDEF, ConfigInTableMap::COL_INTBCONFITEMGETDEF, ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL, ConfigInTableMap::COL_INTBCONFUSERCODE1LABL, ConfigInTableMap::COL_INTBCONFUSERCODE1VER, ConfigInTableMap::COL_INTBCONFUSERCODE2LABL, ConfigInTableMap::COL_INTBCONFUSERCODE2VER, ConfigInTableMap::COL_INTBCONFITEMLINE, ConfigInTableMap::COL_INTBCONFITEMCOLS, ConfigInTableMap::COL_INTBCONFHEADLINE, ConfigInTableMap::COL_INTBCONFHEADCOLS, ConfigInTableMap::COL_INTBCONFDETLINE, ConfigInTableMap::COL_INTBCONFDETCOLS, ConfigInTableMap::COL_INTBCONFMINMAXZERO, ConfigInTableMap::COL_INTBCONFMINREC, ConfigInTableMap::COL_INTBCONFATBELOWMIN, ConfigInTableMap::COL_INTBCONFONEWHSE, ConfigInTableMap::COL_INTBCONFYTDMTH, ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR, ConfigInTableMap::COL_INTBCONFABCBYWHSE, ConfigInTableMap::COL_INTBCONFABCNBRMTHS, ConfigInTableMap::COL_INTBCONFABCBASECODE, ConfigInTableMap::COL_INTBCONFABCLEVLA, ConfigInTableMap::COL_INTBCONFABCLEVLB, ConfigInTableMap::COL_INTBCONFABCLEVLC, ConfigInTableMap::COL_INTBCONFABCLEVLD, ConfigInTableMap::COL_INTBCONFABCLEVLE, ConfigInTableMap::COL_INTBCONFABCLEVLF, ConfigInTableMap::COL_INTBCONFABCLEVLG, ConfigInTableMap::COL_INTBCONFABCLEVLH, ConfigInTableMap::COL_INTBCONFABCLEVLI, ConfigInTableMap::COL_INTBCONFABCLEVLJ, ConfigInTableMap::COL_INTBCONFUSEFOREIGNX, ConfigInTableMap::COL_INTBCONFUSENAFTA, ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE, ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER, ConfigInTableMap::COL_INTBCONFNAFTADOCCODE, ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH, ConfigInTableMap::COL_INTBCONF20OR30, ConfigInTableMap::COL_INTBCONFDISPORIGCNT, ConfigInTableMap::COL_INTBCONFDISPGL, ConfigInTableMap::COL_INTBCONFDISPREF, ConfigInTableMap::COL_INTBCONFDISPCOST, ConfigInTableMap::COL_INTBCONFPRTVAL, ConfigInTableMap::COL_INTBCONFPRTGL, ConfigInTableMap::COL_INTBCONFGLACCT, ConfigInTableMap::COL_INTBCONFREF, ConfigInTableMap::COL_INTBCONFCOSTTYPE, ConfigInTableMap::COL_INTBCONFNORMALONLY, ConfigInTableMap::COL_INTBCONFUSEWHSEDEF, ConfigInTableMap::COL_INTBCON2DFLTWHSE01, ConfigInTableMap::COL_INTBCON2DFLTWHSE02, ConfigInTableMap::COL_INTBCON2DFLTWHSE03, ConfigInTableMap::COL_INTBCON2DFLTWHSE04, ConfigInTableMap::COL_INTBCON2DFLTWHSE05, ConfigInTableMap::COL_INTBCON2DFLTWHSE06, ConfigInTableMap::COL_INTBCON2DFLTWHSE07, ConfigInTableMap::COL_INTBCON2DFLTWHSE08, ConfigInTableMap::COL_INTBCON2DFLTWHSE09, ConfigInTableMap::COL_INTBCON2DFLTWHSE10, ConfigInTableMap::COL_INTBCONFBINDEF, ConfigInTableMap::COL_INTBCONFCYCLDEF, ConfigInTableMap::COL_INTBCONFSTATDEF, ConfigInTableMap::COL_INTBCONFABCDEF, ConfigInTableMap::COL_INTBCONFSPECORDRDEF, ConfigInTableMap::COL_INTBCONFORDRPNTDEF, ConfigInTableMap::COL_INTBCONFMAXDEF, ConfigInTableMap::COL_INTBCONFORDRQTYDEF, ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL, ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK, ConfigInTableMap::COL_INTBCONFUSEFRTIN, ConfigInTableMap::COL_INTBCONFEACHORUOM, ConfigInTableMap::COL_INTBCONFNEGLOTCORR, ConfigInTableMap::COL_INTBCONFTRNSGLACCT, ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, ConfigInTableMap::COL_INTBCONFNUMERICITEM, ConfigInTableMap::COL_INTBCONFITEMDIGITS, ConfigInTableMap::COL_INTBCONFSINGLEWHSE, ConfigInTableMap::COL_INTBCONFUPDUSEPCT, ConfigInTableMap::COL_INTBCONFUPDPRIC, ConfigInTableMap::COL_INTBCONFUPDSTDCOST, ConfigInTableMap::COL_INTBCONFUPDXREFCOST, ConfigInTableMap::COL_INTBCONFIQPAUPDDATE, ConfigInTableMap::COL_INTBCONFUPCXREFOPTN, ConfigInTableMap::COL_INTBCONFRESQYN, ConfigInTableMap::COL_INTBCONFTRANVIEWLIB, ConfigInTableMap::COL_INTBCONFRESVCOST, ConfigInTableMap::COL_INTBCON2TRANZERORQST, ConfigInTableMap::COL_INTBCONFMONENDADJDATE, ConfigInTableMap::COL_INTBCONFMONENDTRNDATE, ConfigInTableMap::COL_INTBCONFMONENDLOGDATE, ConfigInTableMap::COL_INTBCONFDSTATPROC, ConfigInTableMap::COL_INTBCONFSTANCOSTUPD, ConfigInTableMap::COL_INTBCONFLASTCOST, ConfigInTableMap::COL_INTBCONFUSESORGPCT, ConfigInTableMap::COL_INTBCONFADDONSTAN, ConfigInTableMap::COL_INTBCONFSTDCOSTERROR, ConfigInTableMap::COL_INTBCONFAVGCURRFIVE, ConfigInTableMap::COL_INTBCONFUSECNTRLBIN, ConfigInTableMap::COL_INTBCONFNBRBINAREAS, ConfigInTableMap::COL_INTBCONFUSEMULTBIN, ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN, ConfigInTableMap::COL_INTBCONFDFLTBIN, ConfigInTableMap::COL_INTBCONFCTRYITEMLOT, ConfigInTableMap::COL_INTBCONFUSESHIPBIN, ConfigInTableMap::COL_INTBCON2PRTBINRLABEL, ConfigInTableMap::COL_INTBCON2ITEMLOOKUP, ConfigInTableMap::COL_INTBCONFINCLDCTI, ConfigInTableMap::COL_INTBCONFCERTIMAGE, ConfigInTableMap::COL_INTBCONFDRAWIMAGE, ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE, ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE, ConfigInTableMap::COL_INTBCONFDEFPICK, ConfigInTableMap::COL_INTBCONFDEFPACK, ConfigInTableMap::COL_INTBCONFDEFINVC, ConfigInTableMap::COL_INTBCONFDEFACK, ConfigInTableMap::COL_INTBCONFDEFQUOT, ConfigInTableMap::COL_INTBCONFDEFPO, ConfigInTableMap::COL_INTBCONFDEFTRANS, ConfigInTableMap::COL_INTBCONFADJGLCOGS, ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT, ConfigInTableMap::COL_INTBCONFADJCOSTBASE, ConfigInTableMap::COL_INTBCONFDFLTADJTBIN, ConfigInTableMap::COL_INTBCONFADJTBIN, ConfigInTableMap::COL_INTBCONFCSTOCKSEQ, ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT, ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM, ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT, ConfigInTableMap::COL_INTBCON2IMPORTSEQ, ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, ConfigInTableMap::COL_INTBCONFADDTOMXRFE, ConfigInTableMap::COL_INTBCONFMXRFEVENDID, ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST, ConfigInTableMap::COL_INTBCONFUSEFORMAT, ConfigInTableMap::COL_INTBCONFDEFFORMAT, ConfigInTableMap::COL_INTBCONFSEQSHORTITEM, ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, ConfigInTableMap::COL_INTBCONFUSESCALE, ConfigInTableMap::COL_INTBCONFSTOREWGHT, ConfigInTableMap::COL_INTBCONFVALIDASSTCODE, ConfigInTableMap::COL_INTBCONFWHITEGOODS, ConfigInTableMap::COL_INTBCON2TRANSCUSTID, ConfigInTableMap::COL_DATEUPDTD, ConfigInTableMap::COL_TIMEUPDTD, ConfigInTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('IntbConfKey', 'IntbConfGlIfac', 'IntbConfUseIw', 'IntbConfLifoFifo', 'IntbConfGoNeg', 'IntbConfUseLots', 'IntbConfNbrUppr', 'IntbConfDescUppr', 'IntbConfUseDesc2', 'IntbConfUseUpcCode', 'IntbConfUpcEanCntrl', 'IntbConfUpcGenNbr', 'IntbCon2AllowDupUpc', 'IntbConfXrefNoSpace', 'IntbConfUsePricGrup', 'IntbConfUseCommGrup', 'IntbConfUseWarrDays', 'IntbConfStanBaseDef', 'IntbConfGrupDef', 'IntbConfPricGrupDef', 'IntbConfCommGrupDef', 'IntbConfTypeDef', 'IntbConfPricUseItem', 'IntbConfCommUseItem', 'IntbConfUomSaleDef', 'IntbConfUomPurDef', 'IntbConfSviaDef', 'IntbConfCustxrefOrUse', 'IntbConfHeadGetDef', 'IntbConfItemGetDef', 'IntbConfGetDispOhAval', 'IntbConfUserCode1Labl', 'IntbConfUserCode1Ver', 'IntbConfUserCode2Labl', 'IntbConfUserCode2Ver', 'IntbConfItemLine', 'IntbConfItemCols', 'IntbConfHeadLine', 'IntbConfHeadCols', 'IntbConfDetLine', 'IntbConfDetCols', 'IntbConfMinMaxZero', 'IntbConfMinRec', 'IntbConfAtBelowMin', 'IntbConfOneWhse', 'IntbConfYtdMth', 'IntbConfUseGramsLtr', 'IntbConfAbcByWhse', 'IntbConfAbcNbrMths', 'IntbConfAbcBaseCode', 'IntbConfAbcLevlA', 'IntbConfAbcLevlB', 'IntbConfAbcLevlC', 'IntbConfAbcLevlD', 'IntbConfAbcLevlE', 'IntbConfAbcLevlF', 'IntbConfAbcLevlG', 'IntbConfAbcLevlH', 'IntbConfAbcLevlI', 'IntbConfAbcLevlJ', 'IntbConfUseForeignX', 'IntbConfUseNafta', 'IntbConfNaftaPrefCode', 'IntbConfNaftaProducer', 'IntbConfNaftaDocCode', 'IntbConfPhysCurrWksh', 'IntbConf20Or30', 'IntbConfDispOrigCnt', 'IntbConfDispGl', 'IntbConfDispRef', 'IntbConfDispCost', 'IntbConfPrtVal', 'IntbConfPrtGl', 'IntbConfGlAcct', 'IntbConfRef', 'IntbConfCostType', 'IntbConfNormalOnly', 'IntbConfUseWhseDef', 'IntbCon2DfltWhse01', 'IntbCon2DfltWhse02', 'IntbCon2DfltWhse03', 'IntbCon2DfltWhse04', 'IntbCon2DfltWhse05', 'IntbCon2DfltWhse06', 'IntbCon2DfltWhse07', 'IntbCon2DfltWhse08', 'IntbCon2DfltWhse09', 'IntbCon2DfltWhse10', 'IntbConfBinDef', 'IntbConfCyclDef', 'IntbConfStatDef', 'IntbConfAbcDef', 'IntbConfSpecOrdrDef', 'IntbConfOrdrPntDef', 'IntbConfMaxDef', 'IntbConfOrdrQtyDef', 'IntbConfTrcptAllowCmpl', 'IntbConfTreCmmtStock', 'IntbConfUseFrtIn', 'IntbConfEachOrUom', 'IntbConfNegLotCorr', 'IntbConfTrnsGlAcct', 'IntbConfTrnsProtStock', 'IntbConfNumericItem', 'IntbConfItemDigits', 'IntbConfSingleWhse', 'IntbConfUpdUsePct', 'IntbConfUpdPric', 'IntbConfUpdStdCost', 'IntbConfUpdXrefCost', 'IntbConfIqpaUpdDate', 'IntbConfUpcXrefOptn', 'IntbConfResqYN', 'IntbConfTranViewLIB', 'IntbConfResvCost', 'IntbCon2TranZeroRqst', 'IntbConfMonEndAdjDate', 'IntbConfMonEndTrnDate', 'IntbConfMonEndLogDate', 'IntbConfDStatProc', 'IntbConfStanCostUpd', 'IntbConfLastCost', 'IntbConfUseSOrGPct', 'IntbConfAddOnStan', 'IntbConfStdCostError', 'IntbConfAvgCurrFive', 'IntbConfUseCntrlBin', 'IntbConfNbrBinAreas', 'IntbConfUseMultBin', 'IntbConfDfltWhseBin', 'IntbConfDfltBin', 'IntbConfCtryItemLot', 'IntbConfUseShipBin', 'IntbCon2PrtBinrLabel', 'IntbCon2ItemLookup', 'IntbConfIncldCti', 'IntbConfCertImage', 'IntbConfDrawImage', 'IntbConfConfirmImage', 'IntbCon2ProductImage', 'IntbConfDefPick', 'IntbConfDefPack', 'IntbConfDefInvc', 'IntbConfDefAck', 'IntbConfDefQuot', 'IntbConfDefPo', 'IntbConfDefTrans', 'IntbConfAdjGlCogs', 'IntbCon2DfltAdjGlAcct', 'IntbConfAdjCostBase', 'IntbConfDfltAdjtBin', 'IntbConfAdjtBin', 'IntbConfCStockSeq', 'IntbConfCStockHistDay', 'IntbConfCStockFormat', 'IntbConfCstkExportItem', 'IntbConfCstkPdmContract', 'IntbCon2ImportSeq', 'IntbConfStopItemChg', 'IntbConfAddToMxrfe', 'IntbConfMxrfeVendId', 'IntbCon2NewIdLabelList', 'IntbConfUseFormat', 'IntbConfDefFormat', 'IntbConfSeqShortItem', 'IntbConfShortItemLen', 'IntbConfUseScale', 'IntbConfStoreWght', 'IntbConfValidAsstCode', 'IntbConfWhiteGoods', 'IntbCon2TransCustId', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Intbconfkey' => 0, 'Intbconfglifac' => 1, 'Intbconfuseiw' => 2, 'Intbconflifofifo' => 3, 'Intbconfgoneg' => 4, 'Intbconfuselots' => 5, 'Intbconfnbruppr' => 6, 'Intbconfdescuppr' => 7, 'Intbconfusedesc2' => 8, 'Intbconfuseupccode' => 9, 'Intbconfupceancntrl' => 10, 'Intbconfupcgennbr' => 11, 'Intbcon2allowdupupc' => 12, 'Intbconfxrefnospace' => 13, 'Intbconfusepricgrup' => 14, 'Intbconfusecommgrup' => 15, 'Intbconfusewarrdays' => 16, 'Intbconfstanbasedef' => 17, 'Intbconfgrupdef' => 18, 'Intbconfpricgrupdef' => 19, 'Intbconfcommgrupdef' => 20, 'Intbconftypedef' => 21, 'Intbconfpricuseitem' => 22, 'Intbconfcommuseitem' => 23, 'Intbconfuomsaledef' => 24, 'Intbconfuompurdef' => 25, 'Intbconfsviadef' => 26, 'Intbconfcustxreforuse' => 27, 'Intbconfheadgetdef' => 28, 'Intbconfitemgetdef' => 29, 'Intbconfgetdispohaval' => 30, 'Intbconfusercode1labl' => 31, 'Intbconfusercode1ver' => 32, 'Intbconfusercode2labl' => 33, 'Intbconfusercode2ver' => 34, 'Intbconfitemline' => 35, 'Intbconfitemcols' => 36, 'Intbconfheadline' => 37, 'Intbconfheadcols' => 38, 'Intbconfdetline' => 39, 'Intbconfdetcols' => 40, 'Intbconfminmaxzero' => 41, 'Intbconfminrec' => 42, 'Intbconfatbelowmin' => 43, 'Intbconfonewhse' => 44, 'Intbconfytdmth' => 45, 'Intbconfusegramsltr' => 46, 'Intbconfabcbywhse' => 47, 'Intbconfabcnbrmths' => 48, 'Intbconfabcbasecode' => 49, 'Intbconfabclevla' => 50, 'Intbconfabclevlb' => 51, 'Intbconfabclevlc' => 52, 'Intbconfabclevld' => 53, 'Intbconfabclevle' => 54, 'Intbconfabclevlf' => 55, 'Intbconfabclevlg' => 56, 'Intbconfabclevlh' => 57, 'Intbconfabclevli' => 58, 'Intbconfabclevlj' => 59, 'Intbconfuseforeignx' => 60, 'Intbconfusenafta' => 61, 'Intbconfnaftaprefcode' => 62, 'Intbconfnaftaproducer' => 63, 'Intbconfnaftadoccode' => 64, 'Intbconfphyscurrwksh' => 65, 'Intbconf20or30' => 66, 'Intbconfdisporigcnt' => 67, 'Intbconfdispgl' => 68, 'Intbconfdispref' => 69, 'Intbconfdispcost' => 70, 'Intbconfprtval' => 71, 'Intbconfprtgl' => 72, 'Intbconfglacct' => 73, 'Intbconfref' => 74, 'Intbconfcosttype' => 75, 'Intbconfnormalonly' => 76, 'Intbconfusewhsedef' => 77, 'Intbcon2dfltwhse01' => 78, 'Intbcon2dfltwhse02' => 79, 'Intbcon2dfltwhse03' => 80, 'Intbcon2dfltwhse04' => 81, 'Intbcon2dfltwhse05' => 82, 'Intbcon2dfltwhse06' => 83, 'Intbcon2dfltwhse07' => 84, 'Intbcon2dfltwhse08' => 85, 'Intbcon2dfltwhse09' => 86, 'Intbcon2dfltwhse10' => 87, 'Intbconfbindef' => 88, 'Intbconfcycldef' => 89, 'Intbconfstatdef' => 90, 'Intbconfabcdef' => 91, 'Intbconfspecordrdef' => 92, 'Intbconfordrpntdef' => 93, 'Intbconfmaxdef' => 94, 'Intbconfordrqtydef' => 95, 'Intbconftrcptallowcmpl' => 96, 'Intbconftrecmmtstock' => 97, 'Intbconfusefrtin' => 98, 'Intbconfeachoruom' => 99, 'Intbconfneglotcorr' => 100, 'Intbconftrnsglacct' => 101, 'Intbconftrnsprotstock' => 102, 'Intbconfnumericitem' => 103, 'Intbconfitemdigits' => 104, 'Intbconfsinglewhse' => 105, 'Intbconfupdusepct' => 106, 'Intbconfupdpric' => 107, 'Intbconfupdstdcost' => 108, 'Intbconfupdxrefcost' => 109, 'Intbconfiqpaupddate' => 110, 'Intbconfupcxrefoptn' => 111, 'Intbconfresqyn' => 112, 'Intbconftranviewlib' => 113, 'Intbconfresvcost' => 114, 'Intbcon2tranzerorqst' => 115, 'Intbconfmonendadjdate' => 116, 'Intbconfmonendtrndate' => 117, 'Intbconfmonendlogdate' => 118, 'Intbconfdstatproc' => 119, 'Intbconfstancostupd' => 120, 'Intbconflastcost' => 121, 'Intbconfusesorgpct' => 122, 'Intbconfaddonstan' => 123, 'Intbconfstdcosterror' => 124, 'Intbconfavgcurrfive' => 125, 'Intbconfusecntrlbin' => 126, 'Intbconfnbrbinareas' => 127, 'Intbconfusemultbin' => 128, 'Intbconfdfltwhsebin' => 129, 'Intbconfdfltbin' => 130, 'Intbconfctryitemlot' => 131, 'Intbconfuseshipbin' => 132, 'Intbcon2prtbinrlabel' => 133, 'Intbcon2itemlookup' => 134, 'Intbconfincldcti' => 135, 'Intbconfcertimage' => 136, 'Intbconfdrawimage' => 137, 'Intbconfconfirmimage' => 138, 'Intbcon2productimage' => 139, 'Intbconfdefpick' => 140, 'Intbconfdefpack' => 141, 'Intbconfdefinvc' => 142, 'Intbconfdefack' => 143, 'Intbconfdefquot' => 144, 'Intbconfdefpo' => 145, 'Intbconfdeftrans' => 146, 'Intbconfadjglcogs' => 147, 'Intbcon2dfltadjglacct' => 148, 'Intbconfadjcostbase' => 149, 'Intbconfdfltadjtbin' => 150, 'Intbconfadjtbin' => 151, 'Intbconfcstockseq' => 152, 'Intbconfcstockhistday' => 153, 'Intbconfcstockformat' => 154, 'Intbconfcstkexportitem' => 155, 'Intbconfcstkpdmcontract' => 156, 'Intbcon2importseq' => 157, 'Intbconfstopitemchg' => 158, 'Intbconfaddtomxrfe' => 159, 'Intbconfmxrfevendid' => 160, 'Intbcon2newidlabellist' => 161, 'Intbconfuseformat' => 162, 'Intbconfdefformat' => 163, 'Intbconfseqshortitem' => 164, 'Intbconfshortitemlen' => 165, 'Intbconfusescale' => 166, 'Intbconfstorewght' => 167, 'Intbconfvalidasstcode' => 168, 'Intbconfwhitegoods' => 169, 'Intbcon2transcustid' => 170, 'Dateupdtd' => 171, 'Timeupdtd' => 172, 'Dummy' => 173, ),
        self::TYPE_CAMELNAME     => array('intbconfkey' => 0, 'intbconfglifac' => 1, 'intbconfuseiw' => 2, 'intbconflifofifo' => 3, 'intbconfgoneg' => 4, 'intbconfuselots' => 5, 'intbconfnbruppr' => 6, 'intbconfdescuppr' => 7, 'intbconfusedesc2' => 8, 'intbconfuseupccode' => 9, 'intbconfupceancntrl' => 10, 'intbconfupcgennbr' => 11, 'intbcon2allowdupupc' => 12, 'intbconfxrefnospace' => 13, 'intbconfusepricgrup' => 14, 'intbconfusecommgrup' => 15, 'intbconfusewarrdays' => 16, 'intbconfstanbasedef' => 17, 'intbconfgrupdef' => 18, 'intbconfpricgrupdef' => 19, 'intbconfcommgrupdef' => 20, 'intbconftypedef' => 21, 'intbconfpricuseitem' => 22, 'intbconfcommuseitem' => 23, 'intbconfuomsaledef' => 24, 'intbconfuompurdef' => 25, 'intbconfsviadef' => 26, 'intbconfcustxreforuse' => 27, 'intbconfheadgetdef' => 28, 'intbconfitemgetdef' => 29, 'intbconfgetdispohaval' => 30, 'intbconfusercode1labl' => 31, 'intbconfusercode1ver' => 32, 'intbconfusercode2labl' => 33, 'intbconfusercode2ver' => 34, 'intbconfitemline' => 35, 'intbconfitemcols' => 36, 'intbconfheadline' => 37, 'intbconfheadcols' => 38, 'intbconfdetline' => 39, 'intbconfdetcols' => 40, 'intbconfminmaxzero' => 41, 'intbconfminrec' => 42, 'intbconfatbelowmin' => 43, 'intbconfonewhse' => 44, 'intbconfytdmth' => 45, 'intbconfusegramsltr' => 46, 'intbconfabcbywhse' => 47, 'intbconfabcnbrmths' => 48, 'intbconfabcbasecode' => 49, 'intbconfabclevla' => 50, 'intbconfabclevlb' => 51, 'intbconfabclevlc' => 52, 'intbconfabclevld' => 53, 'intbconfabclevle' => 54, 'intbconfabclevlf' => 55, 'intbconfabclevlg' => 56, 'intbconfabclevlh' => 57, 'intbconfabclevli' => 58, 'intbconfabclevlj' => 59, 'intbconfuseforeignx' => 60, 'intbconfusenafta' => 61, 'intbconfnaftaprefcode' => 62, 'intbconfnaftaproducer' => 63, 'intbconfnaftadoccode' => 64, 'intbconfphyscurrwksh' => 65, 'intbconf20or30' => 66, 'intbconfdisporigcnt' => 67, 'intbconfdispgl' => 68, 'intbconfdispref' => 69, 'intbconfdispcost' => 70, 'intbconfprtval' => 71, 'intbconfprtgl' => 72, 'intbconfglacct' => 73, 'intbconfref' => 74, 'intbconfcosttype' => 75, 'intbconfnormalonly' => 76, 'intbconfusewhsedef' => 77, 'intbcon2dfltwhse01' => 78, 'intbcon2dfltwhse02' => 79, 'intbcon2dfltwhse03' => 80, 'intbcon2dfltwhse04' => 81, 'intbcon2dfltwhse05' => 82, 'intbcon2dfltwhse06' => 83, 'intbcon2dfltwhse07' => 84, 'intbcon2dfltwhse08' => 85, 'intbcon2dfltwhse09' => 86, 'intbcon2dfltwhse10' => 87, 'intbconfbindef' => 88, 'intbconfcycldef' => 89, 'intbconfstatdef' => 90, 'intbconfabcdef' => 91, 'intbconfspecordrdef' => 92, 'intbconfordrpntdef' => 93, 'intbconfmaxdef' => 94, 'intbconfordrqtydef' => 95, 'intbconftrcptallowcmpl' => 96, 'intbconftrecmmtstock' => 97, 'intbconfusefrtin' => 98, 'intbconfeachoruom' => 99, 'intbconfneglotcorr' => 100, 'intbconftrnsglacct' => 101, 'intbconftrnsprotstock' => 102, 'intbconfnumericitem' => 103, 'intbconfitemdigits' => 104, 'intbconfsinglewhse' => 105, 'intbconfupdusepct' => 106, 'intbconfupdpric' => 107, 'intbconfupdstdcost' => 108, 'intbconfupdxrefcost' => 109, 'intbconfiqpaupddate' => 110, 'intbconfupcxrefoptn' => 111, 'intbconfresqyn' => 112, 'intbconftranviewlib' => 113, 'intbconfresvcost' => 114, 'intbcon2tranzerorqst' => 115, 'intbconfmonendadjdate' => 116, 'intbconfmonendtrndate' => 117, 'intbconfmonendlogdate' => 118, 'intbconfdstatproc' => 119, 'intbconfstancostupd' => 120, 'intbconflastcost' => 121, 'intbconfusesorgpct' => 122, 'intbconfaddonstan' => 123, 'intbconfstdcosterror' => 124, 'intbconfavgcurrfive' => 125, 'intbconfusecntrlbin' => 126, 'intbconfnbrbinareas' => 127, 'intbconfusemultbin' => 128, 'intbconfdfltwhsebin' => 129, 'intbconfdfltbin' => 130, 'intbconfctryitemlot' => 131, 'intbconfuseshipbin' => 132, 'intbcon2prtbinrlabel' => 133, 'intbcon2itemlookup' => 134, 'intbconfincldcti' => 135, 'intbconfcertimage' => 136, 'intbconfdrawimage' => 137, 'intbconfconfirmimage' => 138, 'intbcon2productimage' => 139, 'intbconfdefpick' => 140, 'intbconfdefpack' => 141, 'intbconfdefinvc' => 142, 'intbconfdefack' => 143, 'intbconfdefquot' => 144, 'intbconfdefpo' => 145, 'intbconfdeftrans' => 146, 'intbconfadjglcogs' => 147, 'intbcon2dfltadjglacct' => 148, 'intbconfadjcostbase' => 149, 'intbconfdfltadjtbin' => 150, 'intbconfadjtbin' => 151, 'intbconfcstockseq' => 152, 'intbconfcstockhistday' => 153, 'intbconfcstockformat' => 154, 'intbconfcstkexportitem' => 155, 'intbconfcstkpdmcontract' => 156, 'intbcon2importseq' => 157, 'intbconfstopitemchg' => 158, 'intbconfaddtomxrfe' => 159, 'intbconfmxrfevendid' => 160, 'intbcon2newidlabellist' => 161, 'intbconfuseformat' => 162, 'intbconfdefformat' => 163, 'intbconfseqshortitem' => 164, 'intbconfshortitemlen' => 165, 'intbconfusescale' => 166, 'intbconfstorewght' => 167, 'intbconfvalidasstcode' => 168, 'intbconfwhitegoods' => 169, 'intbcon2transcustid' => 170, 'dateupdtd' => 171, 'timeupdtd' => 172, 'dummy' => 173, ),
        self::TYPE_COLNAME       => array(ConfigInTableMap::COL_INTBCONFKEY => 0, ConfigInTableMap::COL_INTBCONFGLIFAC => 1, ConfigInTableMap::COL_INTBCONFUSEIW => 2, ConfigInTableMap::COL_INTBCONFLIFOFIFO => 3, ConfigInTableMap::COL_INTBCONFGONEG => 4, ConfigInTableMap::COL_INTBCONFUSELOTS => 5, ConfigInTableMap::COL_INTBCONFNBRUPPR => 6, ConfigInTableMap::COL_INTBCONFDESCUPPR => 7, ConfigInTableMap::COL_INTBCONFUSEDESC2 => 8, ConfigInTableMap::COL_INTBCONFUSEUPCCODE => 9, ConfigInTableMap::COL_INTBCONFUPCEANCNTRL => 10, ConfigInTableMap::COL_INTBCONFUPCGENNBR => 11, ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC => 12, ConfigInTableMap::COL_INTBCONFXREFNOSPACE => 13, ConfigInTableMap::COL_INTBCONFUSEPRICGRUP => 14, ConfigInTableMap::COL_INTBCONFUSECOMMGRUP => 15, ConfigInTableMap::COL_INTBCONFUSEWARRDAYS => 16, ConfigInTableMap::COL_INTBCONFSTANBASEDEF => 17, ConfigInTableMap::COL_INTBCONFGRUPDEF => 18, ConfigInTableMap::COL_INTBCONFPRICGRUPDEF => 19, ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF => 20, ConfigInTableMap::COL_INTBCONFTYPEDEF => 21, ConfigInTableMap::COL_INTBCONFPRICUSEITEM => 22, ConfigInTableMap::COL_INTBCONFCOMMUSEITEM => 23, ConfigInTableMap::COL_INTBCONFUOMSALEDEF => 24, ConfigInTableMap::COL_INTBCONFUOMPURDEF => 25, ConfigInTableMap::COL_INTBCONFSVIADEF => 26, ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE => 27, ConfigInTableMap::COL_INTBCONFHEADGETDEF => 28, ConfigInTableMap::COL_INTBCONFITEMGETDEF => 29, ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL => 30, ConfigInTableMap::COL_INTBCONFUSERCODE1LABL => 31, ConfigInTableMap::COL_INTBCONFUSERCODE1VER => 32, ConfigInTableMap::COL_INTBCONFUSERCODE2LABL => 33, ConfigInTableMap::COL_INTBCONFUSERCODE2VER => 34, ConfigInTableMap::COL_INTBCONFITEMLINE => 35, ConfigInTableMap::COL_INTBCONFITEMCOLS => 36, ConfigInTableMap::COL_INTBCONFHEADLINE => 37, ConfigInTableMap::COL_INTBCONFHEADCOLS => 38, ConfigInTableMap::COL_INTBCONFDETLINE => 39, ConfigInTableMap::COL_INTBCONFDETCOLS => 40, ConfigInTableMap::COL_INTBCONFMINMAXZERO => 41, ConfigInTableMap::COL_INTBCONFMINREC => 42, ConfigInTableMap::COL_INTBCONFATBELOWMIN => 43, ConfigInTableMap::COL_INTBCONFONEWHSE => 44, ConfigInTableMap::COL_INTBCONFYTDMTH => 45, ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR => 46, ConfigInTableMap::COL_INTBCONFABCBYWHSE => 47, ConfigInTableMap::COL_INTBCONFABCNBRMTHS => 48, ConfigInTableMap::COL_INTBCONFABCBASECODE => 49, ConfigInTableMap::COL_INTBCONFABCLEVLA => 50, ConfigInTableMap::COL_INTBCONFABCLEVLB => 51, ConfigInTableMap::COL_INTBCONFABCLEVLC => 52, ConfigInTableMap::COL_INTBCONFABCLEVLD => 53, ConfigInTableMap::COL_INTBCONFABCLEVLE => 54, ConfigInTableMap::COL_INTBCONFABCLEVLF => 55, ConfigInTableMap::COL_INTBCONFABCLEVLG => 56, ConfigInTableMap::COL_INTBCONFABCLEVLH => 57, ConfigInTableMap::COL_INTBCONFABCLEVLI => 58, ConfigInTableMap::COL_INTBCONFABCLEVLJ => 59, ConfigInTableMap::COL_INTBCONFUSEFOREIGNX => 60, ConfigInTableMap::COL_INTBCONFUSENAFTA => 61, ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE => 62, ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER => 63, ConfigInTableMap::COL_INTBCONFNAFTADOCCODE => 64, ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH => 65, ConfigInTableMap::COL_INTBCONF20OR30 => 66, ConfigInTableMap::COL_INTBCONFDISPORIGCNT => 67, ConfigInTableMap::COL_INTBCONFDISPGL => 68, ConfigInTableMap::COL_INTBCONFDISPREF => 69, ConfigInTableMap::COL_INTBCONFDISPCOST => 70, ConfigInTableMap::COL_INTBCONFPRTVAL => 71, ConfigInTableMap::COL_INTBCONFPRTGL => 72, ConfigInTableMap::COL_INTBCONFGLACCT => 73, ConfigInTableMap::COL_INTBCONFREF => 74, ConfigInTableMap::COL_INTBCONFCOSTTYPE => 75, ConfigInTableMap::COL_INTBCONFNORMALONLY => 76, ConfigInTableMap::COL_INTBCONFUSEWHSEDEF => 77, ConfigInTableMap::COL_INTBCON2DFLTWHSE01 => 78, ConfigInTableMap::COL_INTBCON2DFLTWHSE02 => 79, ConfigInTableMap::COL_INTBCON2DFLTWHSE03 => 80, ConfigInTableMap::COL_INTBCON2DFLTWHSE04 => 81, ConfigInTableMap::COL_INTBCON2DFLTWHSE05 => 82, ConfigInTableMap::COL_INTBCON2DFLTWHSE06 => 83, ConfigInTableMap::COL_INTBCON2DFLTWHSE07 => 84, ConfigInTableMap::COL_INTBCON2DFLTWHSE08 => 85, ConfigInTableMap::COL_INTBCON2DFLTWHSE09 => 86, ConfigInTableMap::COL_INTBCON2DFLTWHSE10 => 87, ConfigInTableMap::COL_INTBCONFBINDEF => 88, ConfigInTableMap::COL_INTBCONFCYCLDEF => 89, ConfigInTableMap::COL_INTBCONFSTATDEF => 90, ConfigInTableMap::COL_INTBCONFABCDEF => 91, ConfigInTableMap::COL_INTBCONFSPECORDRDEF => 92, ConfigInTableMap::COL_INTBCONFORDRPNTDEF => 93, ConfigInTableMap::COL_INTBCONFMAXDEF => 94, ConfigInTableMap::COL_INTBCONFORDRQTYDEF => 95, ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL => 96, ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK => 97, ConfigInTableMap::COL_INTBCONFUSEFRTIN => 98, ConfigInTableMap::COL_INTBCONFEACHORUOM => 99, ConfigInTableMap::COL_INTBCONFNEGLOTCORR => 100, ConfigInTableMap::COL_INTBCONFTRNSGLACCT => 101, ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK => 102, ConfigInTableMap::COL_INTBCONFNUMERICITEM => 103, ConfigInTableMap::COL_INTBCONFITEMDIGITS => 104, ConfigInTableMap::COL_INTBCONFSINGLEWHSE => 105, ConfigInTableMap::COL_INTBCONFUPDUSEPCT => 106, ConfigInTableMap::COL_INTBCONFUPDPRIC => 107, ConfigInTableMap::COL_INTBCONFUPDSTDCOST => 108, ConfigInTableMap::COL_INTBCONFUPDXREFCOST => 109, ConfigInTableMap::COL_INTBCONFIQPAUPDDATE => 110, ConfigInTableMap::COL_INTBCONFUPCXREFOPTN => 111, ConfigInTableMap::COL_INTBCONFRESQYN => 112, ConfigInTableMap::COL_INTBCONFTRANVIEWLIB => 113, ConfigInTableMap::COL_INTBCONFRESVCOST => 114, ConfigInTableMap::COL_INTBCON2TRANZERORQST => 115, ConfigInTableMap::COL_INTBCONFMONENDADJDATE => 116, ConfigInTableMap::COL_INTBCONFMONENDTRNDATE => 117, ConfigInTableMap::COL_INTBCONFMONENDLOGDATE => 118, ConfigInTableMap::COL_INTBCONFDSTATPROC => 119, ConfigInTableMap::COL_INTBCONFSTANCOSTUPD => 120, ConfigInTableMap::COL_INTBCONFLASTCOST => 121, ConfigInTableMap::COL_INTBCONFUSESORGPCT => 122, ConfigInTableMap::COL_INTBCONFADDONSTAN => 123, ConfigInTableMap::COL_INTBCONFSTDCOSTERROR => 124, ConfigInTableMap::COL_INTBCONFAVGCURRFIVE => 125, ConfigInTableMap::COL_INTBCONFUSECNTRLBIN => 126, ConfigInTableMap::COL_INTBCONFNBRBINAREAS => 127, ConfigInTableMap::COL_INTBCONFUSEMULTBIN => 128, ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN => 129, ConfigInTableMap::COL_INTBCONFDFLTBIN => 130, ConfigInTableMap::COL_INTBCONFCTRYITEMLOT => 131, ConfigInTableMap::COL_INTBCONFUSESHIPBIN => 132, ConfigInTableMap::COL_INTBCON2PRTBINRLABEL => 133, ConfigInTableMap::COL_INTBCON2ITEMLOOKUP => 134, ConfigInTableMap::COL_INTBCONFINCLDCTI => 135, ConfigInTableMap::COL_INTBCONFCERTIMAGE => 136, ConfigInTableMap::COL_INTBCONFDRAWIMAGE => 137, ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE => 138, ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE => 139, ConfigInTableMap::COL_INTBCONFDEFPICK => 140, ConfigInTableMap::COL_INTBCONFDEFPACK => 141, ConfigInTableMap::COL_INTBCONFDEFINVC => 142, ConfigInTableMap::COL_INTBCONFDEFACK => 143, ConfigInTableMap::COL_INTBCONFDEFQUOT => 144, ConfigInTableMap::COL_INTBCONFDEFPO => 145, ConfigInTableMap::COL_INTBCONFDEFTRANS => 146, ConfigInTableMap::COL_INTBCONFADJGLCOGS => 147, ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT => 148, ConfigInTableMap::COL_INTBCONFADJCOSTBASE => 149, ConfigInTableMap::COL_INTBCONFDFLTADJTBIN => 150, ConfigInTableMap::COL_INTBCONFADJTBIN => 151, ConfigInTableMap::COL_INTBCONFCSTOCKSEQ => 152, ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY => 153, ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT => 154, ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM => 155, ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT => 156, ConfigInTableMap::COL_INTBCON2IMPORTSEQ => 157, ConfigInTableMap::COL_INTBCONFSTOPITEMCHG => 158, ConfigInTableMap::COL_INTBCONFADDTOMXRFE => 159, ConfigInTableMap::COL_INTBCONFMXRFEVENDID => 160, ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST => 161, ConfigInTableMap::COL_INTBCONFUSEFORMAT => 162, ConfigInTableMap::COL_INTBCONFDEFFORMAT => 163, ConfigInTableMap::COL_INTBCONFSEQSHORTITEM => 164, ConfigInTableMap::COL_INTBCONFSHORTITEMLEN => 165, ConfigInTableMap::COL_INTBCONFUSESCALE => 166, ConfigInTableMap::COL_INTBCONFSTOREWGHT => 167, ConfigInTableMap::COL_INTBCONFVALIDASSTCODE => 168, ConfigInTableMap::COL_INTBCONFWHITEGOODS => 169, ConfigInTableMap::COL_INTBCON2TRANSCUSTID => 170, ConfigInTableMap::COL_DATEUPDTD => 171, ConfigInTableMap::COL_TIMEUPDTD => 172, ConfigInTableMap::COL_DUMMY => 173, ),
        self::TYPE_FIELDNAME     => array('IntbConfKey' => 0, 'IntbConfGlIfac' => 1, 'IntbConfUseIw' => 2, 'IntbConfLifoFifo' => 3, 'IntbConfGoNeg' => 4, 'IntbConfUseLots' => 5, 'IntbConfNbrUppr' => 6, 'IntbConfDescUppr' => 7, 'IntbConfUseDesc2' => 8, 'IntbConfUseUpcCode' => 9, 'IntbConfUpcEanCntrl' => 10, 'IntbConfUpcGenNbr' => 11, 'IntbCon2AllowDupUpc' => 12, 'IntbConfXrefNoSpace' => 13, 'IntbConfUsePricGrup' => 14, 'IntbConfUseCommGrup' => 15, 'IntbConfUseWarrDays' => 16, 'IntbConfStanBaseDef' => 17, 'IntbConfGrupDef' => 18, 'IntbConfPricGrupDef' => 19, 'IntbConfCommGrupDef' => 20, 'IntbConfTypeDef' => 21, 'IntbConfPricUseItem' => 22, 'IntbConfCommUseItem' => 23, 'IntbConfUomSaleDef' => 24, 'IntbConfUomPurDef' => 25, 'IntbConfSviaDef' => 26, 'IntbConfCustxrefOrUse' => 27, 'IntbConfHeadGetDef' => 28, 'IntbConfItemGetDef' => 29, 'IntbConfGetDispOhAval' => 30, 'IntbConfUserCode1Labl' => 31, 'IntbConfUserCode1Ver' => 32, 'IntbConfUserCode2Labl' => 33, 'IntbConfUserCode2Ver' => 34, 'IntbConfItemLine' => 35, 'IntbConfItemCols' => 36, 'IntbConfHeadLine' => 37, 'IntbConfHeadCols' => 38, 'IntbConfDetLine' => 39, 'IntbConfDetCols' => 40, 'IntbConfMinMaxZero' => 41, 'IntbConfMinRec' => 42, 'IntbConfAtBelowMin' => 43, 'IntbConfOneWhse' => 44, 'IntbConfYtdMth' => 45, 'IntbConfUseGramsLtr' => 46, 'IntbConfAbcByWhse' => 47, 'IntbConfAbcNbrMths' => 48, 'IntbConfAbcBaseCode' => 49, 'IntbConfAbcLevlA' => 50, 'IntbConfAbcLevlB' => 51, 'IntbConfAbcLevlC' => 52, 'IntbConfAbcLevlD' => 53, 'IntbConfAbcLevlE' => 54, 'IntbConfAbcLevlF' => 55, 'IntbConfAbcLevlG' => 56, 'IntbConfAbcLevlH' => 57, 'IntbConfAbcLevlI' => 58, 'IntbConfAbcLevlJ' => 59, 'IntbConfUseForeignX' => 60, 'IntbConfUseNafta' => 61, 'IntbConfNaftaPrefCode' => 62, 'IntbConfNaftaProducer' => 63, 'IntbConfNaftaDocCode' => 64, 'IntbConfPhysCurrWksh' => 65, 'IntbConf20Or30' => 66, 'IntbConfDispOrigCnt' => 67, 'IntbConfDispGl' => 68, 'IntbConfDispRef' => 69, 'IntbConfDispCost' => 70, 'IntbConfPrtVal' => 71, 'IntbConfPrtGl' => 72, 'IntbConfGlAcct' => 73, 'IntbConfRef' => 74, 'IntbConfCostType' => 75, 'IntbConfNormalOnly' => 76, 'IntbConfUseWhseDef' => 77, 'IntbCon2DfltWhse01' => 78, 'IntbCon2DfltWhse02' => 79, 'IntbCon2DfltWhse03' => 80, 'IntbCon2DfltWhse04' => 81, 'IntbCon2DfltWhse05' => 82, 'IntbCon2DfltWhse06' => 83, 'IntbCon2DfltWhse07' => 84, 'IntbCon2DfltWhse08' => 85, 'IntbCon2DfltWhse09' => 86, 'IntbCon2DfltWhse10' => 87, 'IntbConfBinDef' => 88, 'IntbConfCyclDef' => 89, 'IntbConfStatDef' => 90, 'IntbConfAbcDef' => 91, 'IntbConfSpecOrdrDef' => 92, 'IntbConfOrdrPntDef' => 93, 'IntbConfMaxDef' => 94, 'IntbConfOrdrQtyDef' => 95, 'IntbConfTrcptAllowCmpl' => 96, 'IntbConfTreCmmtStock' => 97, 'IntbConfUseFrtIn' => 98, 'IntbConfEachOrUom' => 99, 'IntbConfNegLotCorr' => 100, 'IntbConfTrnsGlAcct' => 101, 'IntbConfTrnsProtStock' => 102, 'IntbConfNumericItem' => 103, 'IntbConfItemDigits' => 104, 'IntbConfSingleWhse' => 105, 'IntbConfUpdUsePct' => 106, 'IntbConfUpdPric' => 107, 'IntbConfUpdStdCost' => 108, 'IntbConfUpdXrefCost' => 109, 'IntbConfIqpaUpdDate' => 110, 'IntbConfUpcXrefOptn' => 111, 'IntbConfResqYN' => 112, 'IntbConfTranViewLIB' => 113, 'IntbConfResvCost' => 114, 'IntbCon2TranZeroRqst' => 115, 'IntbConfMonEndAdjDate' => 116, 'IntbConfMonEndTrnDate' => 117, 'IntbConfMonEndLogDate' => 118, 'IntbConfDStatProc' => 119, 'IntbConfStanCostUpd' => 120, 'IntbConfLastCost' => 121, 'IntbConfUseSOrGPct' => 122, 'IntbConfAddOnStan' => 123, 'IntbConfStdCostError' => 124, 'IntbConfAvgCurrFive' => 125, 'IntbConfUseCntrlBin' => 126, 'IntbConfNbrBinAreas' => 127, 'IntbConfUseMultBin' => 128, 'IntbConfDfltWhseBin' => 129, 'IntbConfDfltBin' => 130, 'IntbConfCtryItemLot' => 131, 'IntbConfUseShipBin' => 132, 'IntbCon2PrtBinrLabel' => 133, 'IntbCon2ItemLookup' => 134, 'IntbConfIncldCti' => 135, 'IntbConfCertImage' => 136, 'IntbConfDrawImage' => 137, 'IntbConfConfirmImage' => 138, 'IntbCon2ProductImage' => 139, 'IntbConfDefPick' => 140, 'IntbConfDefPack' => 141, 'IntbConfDefInvc' => 142, 'IntbConfDefAck' => 143, 'IntbConfDefQuot' => 144, 'IntbConfDefPo' => 145, 'IntbConfDefTrans' => 146, 'IntbConfAdjGlCogs' => 147, 'IntbCon2DfltAdjGlAcct' => 148, 'IntbConfAdjCostBase' => 149, 'IntbConfDfltAdjtBin' => 150, 'IntbConfAdjtBin' => 151, 'IntbConfCStockSeq' => 152, 'IntbConfCStockHistDay' => 153, 'IntbConfCStockFormat' => 154, 'IntbConfCstkExportItem' => 155, 'IntbConfCstkPdmContract' => 156, 'IntbCon2ImportSeq' => 157, 'IntbConfStopItemChg' => 158, 'IntbConfAddToMxrfe' => 159, 'IntbConfMxrfeVendId' => 160, 'IntbCon2NewIdLabelList' => 161, 'IntbConfUseFormat' => 162, 'IntbConfDefFormat' => 163, 'IntbConfSeqShortItem' => 164, 'IntbConfShortItemLen' => 165, 'IntbConfUseScale' => 166, 'IntbConfStoreWght' => 167, 'IntbConfValidAsstCode' => 168, 'IntbConfWhiteGoods' => 169, 'IntbCon2TransCustId' => 170, 'DateUpdtd' => 171, 'TimeUpdtd' => 172, 'dummy' => 173, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, )
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
        $this->setName('in_config');
        $this->setPhpName('ConfigIn');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ConfigIn');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('IntbConfKey', 'Intbconfkey', 'INTEGER', true, 1, 1);
        $this->addColumn('IntbConfGlIfac', 'Intbconfglifac', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUseIw', 'Intbconfuseiw', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfLifoFifo', 'Intbconflifofifo', 'VARCHAR', true, 1, 'L');
        $this->addColumn('IntbConfGoNeg', 'Intbconfgoneg', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUseLots', 'Intbconfuselots', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfNbrUppr', 'Intbconfnbruppr', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDescUppr', 'Intbconfdescuppr', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUseDesc2', 'Intbconfusedesc2', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUseUpcCode', 'Intbconfuseupccode', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUpcEanCntrl', 'Intbconfupceancntrl', 'VARCHAR', true, 1, 'U');
        $this->addColumn('IntbConfUpcGenNbr', 'Intbconfupcgennbr', 'INTEGER', true, 6, 0);
        $this->addColumn('IntbCon2AllowDupUpc', 'Intbcon2allowdupupc', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfXrefNoSpace', 'Intbconfxrefnospace', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUsePricGrup', 'Intbconfusepricgrup', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUseCommGrup', 'Intbconfusecommgrup', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUseWarrDays', 'Intbconfusewarrdays', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfStanBaseDef', 'Intbconfstanbasedef', 'VARCHAR', true, 1, 'A');
        $this->addColumn('IntbConfGrupDef', 'Intbconfgrupdef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfPricGrupDef', 'Intbconfpricgrupdef', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCommGrupDef', 'Intbconfcommgrupdef', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfTypeDef', 'Intbconftypedef', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfPricUseItem', 'Intbconfpricuseitem', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfCommUseItem', 'Intbconfcommuseitem', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUomSaleDef', 'Intbconfuomsaledef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfUomPurDef', 'Intbconfuompurdef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfSviaDef', 'Intbconfsviadef', 'VARCHAR', true, 4, '');
        $this->addColumn('IntbConfCustxrefOrUse', 'Intbconfcustxreforuse', 'VARCHAR', true, 1, 'C');
        $this->addColumn('IntbConfHeadGetDef', 'Intbconfheadgetdef', 'INTEGER', true, 1, 1);
        $this->addColumn('IntbConfItemGetDef', 'Intbconfitemgetdef', 'INTEGER', true, 1, 1);
        $this->addColumn('IntbConfGetDispOhAval', 'Intbconfgetdispohaval', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUserCode1Labl', 'Intbconfusercode1labl', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfUserCode1Ver', 'Intbconfusercode1ver', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUserCode2Labl', 'Intbconfusercode2labl', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfUserCode2Ver', 'Intbconfusercode2ver', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfItemLine', 'Intbconfitemline', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfItemCols', 'Intbconfitemcols', 'INTEGER', true, 2, 30);
        $this->addColumn('IntbConfHeadLine', 'Intbconfheadline', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfHeadCols', 'Intbconfheadcols', 'INTEGER', true, 2, 35);
        $this->addColumn('IntbConfDetLine', 'Intbconfdetline', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfDetCols', 'Intbconfdetcols', 'INTEGER', true, 2, 35);
        $this->addColumn('IntbConfMinMaxZero', 'Intbconfminmaxzero', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfMinRec', 'Intbconfminrec', 'VARCHAR', true, 1, 'X');
        $this->addColumn('IntbConfAtBelowMin', 'Intbconfatbelowmin', 'VARCHAR', true, 1, 'B');
        $this->addColumn('IntbConfOneWhse', 'Intbconfonewhse', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfYtdMth', 'Intbconfytdmth', 'INTEGER', true, 2, 1);
        $this->addColumn('IntbConfUseGramsLtr', 'Intbconfusegramsltr', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfAbcByWhse', 'Intbconfabcbywhse', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfAbcNbrMths', 'Intbconfabcnbrmths', 'INTEGER', true, 2, 12);
        $this->addColumn('IntbConfAbcBaseCode', 'Intbconfabcbasecode', 'VARCHAR', true, 1, 'M');
        $this->addColumn('IntbConfAbcLevlA', 'Intbconfabclevla', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlB', 'Intbconfabclevlb', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlC', 'Intbconfabclevlc', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlD', 'Intbconfabclevld', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlE', 'Intbconfabclevle', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlF', 'Intbconfabclevlf', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlG', 'Intbconfabclevlg', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlH', 'Intbconfabclevlh', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlI', 'Intbconfabclevli', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfAbcLevlJ', 'Intbconfabclevlj', 'DECIMAL', true, 20, 10);
        $this->addColumn('IntbConfUseForeignX', 'Intbconfuseforeignx', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUseNafta', 'Intbconfusenafta', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfNaftaPrefCode', 'Intbconfnaftaprefcode', 'VARCHAR', true, 1, 'A');
        $this->addColumn('IntbConfNaftaProducer', 'Intbconfnaftaproducer', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfNaftaDocCode', 'Intbconfnaftadoccode', 'VARCHAR', true, 1, '1');
        $this->addColumn('IntbConfPhysCurrWksh', 'Intbconfphyscurrwksh', 'VARCHAR', true, 1, 'C');
        $this->addColumn('IntbConf20Or30', 'Intbconf20or30', 'INTEGER', true, 2, 20);
        $this->addColumn('IntbConfDispOrigCnt', 'Intbconfdisporigcnt', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfDispGl', 'Intbconfdispgl', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfDispRef', 'Intbconfdispref', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfDispCost', 'Intbconfdispcost', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfPrtVal', 'Intbconfprtval', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfPrtGl', 'Intbconfprtgl', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfGlAcct', 'Intbconfglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('IntbConfRef', 'Intbconfref', 'VARCHAR', true, 20, '');
        $this->addColumn('IntbConfCostType', 'Intbconfcosttype', 'VARCHAR', true, 1, 'A');
        $this->addColumn('IntbConfNormalOnly', 'Intbconfnormalonly', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUseWhseDef', 'Intbconfusewhsedef', 'VARCHAR', true, 1, '');
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
        $this->addColumn('IntbConfStatDef', 'Intbconfstatdef', 'VARCHAR', true, 1, 'A');
        $this->addColumn('IntbConfAbcDef', 'Intbconfabcdef', 'VARCHAR', true, 1, 'J');
        $this->addColumn('IntbConfSpecOrdrDef', 'Intbconfspecordrdef', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfOrdrPntDef', 'Intbconfordrpntdef', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbConfMaxDef', 'Intbconfmaxdef', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbConfOrdrQtyDef', 'Intbconfordrqtydef', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbConfTrcptAllowCmpl', 'Intbconftrcptallowcmpl', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfTreCmmtStock', 'Intbconftrecmmtstock', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUseFrtIn', 'Intbconfusefrtin', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfEachOrUom', 'Intbconfeachoruom', 'VARCHAR', true, 1, 'E');
        $this->addColumn('IntbConfNegLotCorr', 'Intbconfneglotcorr', 'VARCHAR', true, 1, 'A');
        $this->addColumn('IntbConfTrnsGlAcct', 'Intbconftrnsglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('IntbConfTrnsProtStock', 'Intbconftrnsprotstock', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbConfNumericItem', 'Intbconfnumericitem', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfItemDigits', 'Intbconfitemdigits', 'INTEGER', true, 2, 0);
        $this->addColumn('IntbConfSingleWhse', 'Intbconfsinglewhse', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfUpdUsePct', 'Intbconfupdusepct', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUpdPric', 'Intbconfupdpric', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUpdStdCost', 'Intbconfupdstdcost', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUpdXrefCost', 'Intbconfupdxrefcost', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfIqpaUpdDate', 'Intbconfiqpaupddate', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUpcXrefOptn', 'Intbconfupcxrefoptn', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfResqYN', 'Intbconfresqyn', 'VARCHAR', true, 1, '');
        $this->addColumn('IntbConfTranViewLIB', 'Intbconftranviewlib', 'VARCHAR', true, 1, 'L');
        $this->addColumn('IntbConfResvCost', 'Intbconfresvcost', 'VARCHAR', true, 1, 'I');
        $this->addColumn('IntbCon2TranZeroRqst', 'Intbcon2tranzerorqst', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfMonEndAdjDate', 'Intbconfmonendadjdate', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfMonEndTrnDate', 'Intbconfmonendtrndate', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfMonEndLogDate', 'Intbconfmonendlogdate', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfDStatProc', 'Intbconfdstatproc', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfStanCostUpd', 'Intbconfstancostupd', 'VARCHAR', true, 1, 'Y');
        $this->addColumn('IntbConfLastCost', 'Intbconflastcost', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUseSOrGPct', 'Intbconfusesorgpct', 'VARCHAR', true, 1, 'S');
        $this->addColumn('IntbConfAddOnStan', 'Intbconfaddonstan', 'DECIMAL', true, 20, 0);
        $this->addColumn('IntbConfStdCostError', 'Intbconfstdcosterror', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfAvgCurrFive', 'Intbconfavgcurrfive', 'VARCHAR', true, 1, 'S');
        $this->addColumn('IntbConfUseCntrlBin', 'Intbconfusecntrlbin', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfNbrBinAreas', 'Intbconfnbrbinareas', 'INTEGER', true, 1, 0);
        $this->addColumn('IntbConfUseMultBin', 'Intbconfusemultbin', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDfltWhseBin', 'Intbconfdfltwhsebin', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDfltBin', 'Intbconfdfltbin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCtryItemLot', 'Intbconfctryitemlot', 'VARCHAR', true, 1, 'I');
        $this->addColumn('IntbConfUseShipBin', 'Intbconfuseshipbin', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbCon2PrtBinrLabel', 'Intbcon2prtbinrlabel', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbCon2ItemLookup', 'Intbcon2itemlookup', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfIncldCti', 'Intbconfincldcti', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfCertImage', 'Intbconfcertimage', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDrawImage', 'Intbconfdrawimage', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfConfirmImage', 'Intbconfconfirmimage', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbCon2ProductImage', 'Intbcon2productimage', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefPick', 'Intbconfdefpick', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefPack', 'Intbconfdefpack', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefInvc', 'Intbconfdefinvc', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefAck', 'Intbconfdefack', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefQuot', 'Intbconfdefquot', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefPo', 'Intbconfdefpo', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefTrans', 'Intbconfdeftrans', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfAdjGlCogs', 'Intbconfadjglcogs', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbCon2DfltAdjGlAcct', 'Intbcon2dfltadjglacct', 'VARCHAR', true, 9, '');
        $this->addColumn('IntbConfAdjCostBase', 'Intbconfadjcostbase', 'VARCHAR', true, 1, 'B');
        $this->addColumn('IntbConfDfltAdjtBin', 'Intbconfdfltadjtbin', 'VARCHAR', true, 1, 'S');
        $this->addColumn('IntbConfAdjtBin', 'Intbconfadjtbin', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCStockSeq', 'Intbconfcstockseq', 'VARCHAR', true, 1, 'L');
        $this->addColumn('IntbConfCStockHistDay', 'Intbconfcstockhistday', 'INTEGER', true, 6, 0);
        $this->addColumn('IntbConfCStockFormat', 'Intbconfcstockformat', 'VARCHAR', true, 8, '');
        $this->addColumn('IntbConfCstkExportItem', 'Intbconfcstkexportitem', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfCstkPdmContract', 'Intbconfcstkpdmcontract', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbCon2ImportSeq', 'Intbcon2importseq', 'VARCHAR', true, 1, 'I');
        $this->addColumn('IntbConfStopItemChg', 'Intbconfstopitemchg', 'INTEGER', true, 4, 0);
        $this->addColumn('IntbConfAddToMxrfe', 'Intbconfaddtomxrfe', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfMxrfeVendId', 'Intbconfmxrfevendid', 'VARCHAR', true, 6, '');
        $this->addColumn('IntbCon2NewIdLabelList', 'Intbcon2newidlabellist', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfUseFormat', 'Intbconfuseformat', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfDefFormat', 'Intbconfdefformat', 'VARCHAR', true, 2, '');
        $this->addColumn('IntbConfSeqShortItem', 'Intbconfseqshortitem', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfShortItemLen', 'Intbconfshortitemlen', 'INTEGER', true, 2, 0);
        $this->addColumn('IntbConfUseScale', 'Intbconfusescale', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfStoreWght', 'Intbconfstorewght', 'VARCHAR', true, 1, 'I');
        $this->addColumn('IntbConfValidAsstCode', 'Intbconfvalidasstcode', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbConfWhiteGoods', 'Intbconfwhitegoods', 'VARCHAR', true, 1, 'N');
        $this->addColumn('IntbCon2TransCustId', 'Intbcon2transcustid', 'VARCHAR', true, 6, '');
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
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ConfigInTableMap::CLASS_DEFAULT : ConfigInTableMap::OM_CLASS;
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
     * @return array           (ConfigIn object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
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
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
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
            $criteria->addSelectColumn(ConfigInTableMap::COL_INTBCONFRESQYN);
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
            $criteria->addSelectColumn($alias . '.IntbConfResqYN');
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
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(ConfigInTableMap::DATABASE_NAME)->getTable(ConfigInTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ConfigInTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ConfigInTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ConfigInTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ConfigIn or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ConfigIn object or primary key or array of primary keys
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
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ConfigInQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ConfigIn or Criteria object.
     *
     * @param mixed               $criteria Criteria or ConfigIn object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
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

} // ConfigInTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ConfigInTableMap::buildTableMap();
