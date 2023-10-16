<?php

namespace Base;

use \ConfigIn as ChildConfigIn;
use \ConfigInQuery as ChildConfigInQuery;
use \Exception;
use \PDO;
use Map\ConfigInTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'in_config' table.
 *
 *
 *
 * @method     ChildConfigInQuery orderByIntbconfkey($order = Criteria::ASC) Order by the IntbConfKey column
 * @method     ChildConfigInQuery orderByIntbconfglifac($order = Criteria::ASC) Order by the IntbConfGlIfac column
 * @method     ChildConfigInQuery orderByIntbconfuseiw($order = Criteria::ASC) Order by the IntbConfUseIw column
 * @method     ChildConfigInQuery orderByIntbconflifofifo($order = Criteria::ASC) Order by the IntbConfLifoFifo column
 * @method     ChildConfigInQuery orderByIntbconfgoneg($order = Criteria::ASC) Order by the IntbConfGoNeg column
 * @method     ChildConfigInQuery orderByIntbconfuselots($order = Criteria::ASC) Order by the IntbConfUseLots column
 * @method     ChildConfigInQuery orderByIntbconfnbruppr($order = Criteria::ASC) Order by the IntbConfNbrUppr column
 * @method     ChildConfigInQuery orderByIntbconfdescuppr($order = Criteria::ASC) Order by the IntbConfDescUppr column
 * @method     ChildConfigInQuery orderByIntbconfusedesc2($order = Criteria::ASC) Order by the IntbConfUseDesc2 column
 * @method     ChildConfigInQuery orderByIntbconfuseupccode($order = Criteria::ASC) Order by the IntbConfUseUpcCode column
 * @method     ChildConfigInQuery orderByIntbconfupceancntrl($order = Criteria::ASC) Order by the IntbConfUpcEanCntrl column
 * @method     ChildConfigInQuery orderByIntbconfupcgennbr($order = Criteria::ASC) Order by the IntbConfUpcGenNbr column
 * @method     ChildConfigInQuery orderByIntbcon2allowdupupc($order = Criteria::ASC) Order by the IntbCon2AllowDupUpc column
 * @method     ChildConfigInQuery orderByIntbconfxrefnospace($order = Criteria::ASC) Order by the IntbConfXrefNoSpace column
 * @method     ChildConfigInQuery orderByIntbconfusepricgrup($order = Criteria::ASC) Order by the IntbConfUsePricGrup column
 * @method     ChildConfigInQuery orderByIntbconfusecommgrup($order = Criteria::ASC) Order by the IntbConfUseCommGrup column
 * @method     ChildConfigInQuery orderByIntbconfusewarrdays($order = Criteria::ASC) Order by the IntbConfUseWarrDays column
 * @method     ChildConfigInQuery orderByIntbconfstanbasedef($order = Criteria::ASC) Order by the IntbConfStanBaseDef column
 * @method     ChildConfigInQuery orderByIntbconfgrupdef($order = Criteria::ASC) Order by the IntbConfGrupDef column
 * @method     ChildConfigInQuery orderByIntbconfpricgrupdef($order = Criteria::ASC) Order by the IntbConfPricGrupDef column
 * @method     ChildConfigInQuery orderByIntbconfcommgrupdef($order = Criteria::ASC) Order by the IntbConfCommGrupDef column
 * @method     ChildConfigInQuery orderByIntbconftypedef($order = Criteria::ASC) Order by the IntbConfTypeDef column
 * @method     ChildConfigInQuery orderByIntbconfpricuseitem($order = Criteria::ASC) Order by the IntbConfPricUseItem column
 * @method     ChildConfigInQuery orderByIntbconfcommuseitem($order = Criteria::ASC) Order by the IntbConfCommUseItem column
 * @method     ChildConfigInQuery orderByIntbconfuomsaledef($order = Criteria::ASC) Order by the IntbConfUomSaleDef column
 * @method     ChildConfigInQuery orderByIntbconfuompurdef($order = Criteria::ASC) Order by the IntbConfUomPurDef column
 * @method     ChildConfigInQuery orderByIntbconfsviadef($order = Criteria::ASC) Order by the IntbConfSviaDef column
 * @method     ChildConfigInQuery orderByIntbconfcustxreforuse($order = Criteria::ASC) Order by the IntbConfCustxrefOrUse column
 * @method     ChildConfigInQuery orderByIntbconfheadgetdef($order = Criteria::ASC) Order by the IntbConfHeadGetDef column
 * @method     ChildConfigInQuery orderByIntbconfitemgetdef($order = Criteria::ASC) Order by the IntbConfItemGetDef column
 * @method     ChildConfigInQuery orderByIntbconfgetdispohaval($order = Criteria::ASC) Order by the IntbConfGetDispOhAval column
 * @method     ChildConfigInQuery orderByIntbconfusercode1labl($order = Criteria::ASC) Order by the IntbConfUserCode1Labl column
 * @method     ChildConfigInQuery orderByIntbconfusercode1ver($order = Criteria::ASC) Order by the IntbConfUserCode1Ver column
 * @method     ChildConfigInQuery orderByIntbconfusercode2labl($order = Criteria::ASC) Order by the IntbConfUserCode2Labl column
 * @method     ChildConfigInQuery orderByIntbconfusercode2ver($order = Criteria::ASC) Order by the IntbConfUserCode2Ver column
 * @method     ChildConfigInQuery orderByIntbconfitemline($order = Criteria::ASC) Order by the IntbConfItemLine column
 * @method     ChildConfigInQuery orderByIntbconfitemcols($order = Criteria::ASC) Order by the IntbConfItemCols column
 * @method     ChildConfigInQuery orderByIntbconfheadline($order = Criteria::ASC) Order by the IntbConfHeadLine column
 * @method     ChildConfigInQuery orderByIntbconfheadcols($order = Criteria::ASC) Order by the IntbConfHeadCols column
 * @method     ChildConfigInQuery orderByIntbconfdetline($order = Criteria::ASC) Order by the IntbConfDetLine column
 * @method     ChildConfigInQuery orderByIntbconfdetcols($order = Criteria::ASC) Order by the IntbConfDetCols column
 * @method     ChildConfigInQuery orderByIntbconfminmaxzero($order = Criteria::ASC) Order by the IntbConfMinMaxZero column
 * @method     ChildConfigInQuery orderByIntbconfminrec($order = Criteria::ASC) Order by the IntbConfMinRec column
 * @method     ChildConfigInQuery orderByIntbconfatbelowmin($order = Criteria::ASC) Order by the IntbConfAtBelowMin column
 * @method     ChildConfigInQuery orderByIntbconfonewhse($order = Criteria::ASC) Order by the IntbConfOneWhse column
 * @method     ChildConfigInQuery orderByIntbconfytdmth($order = Criteria::ASC) Order by the IntbConfYtdMth column
 * @method     ChildConfigInQuery orderByIntbconfusegramsltr($order = Criteria::ASC) Order by the IntbConfUseGramsLtr column
 * @method     ChildConfigInQuery orderByIntbconfabcbywhse($order = Criteria::ASC) Order by the IntbConfAbcByWhse column
 * @method     ChildConfigInQuery orderByIntbconfabcnbrmths($order = Criteria::ASC) Order by the IntbConfAbcNbrMths column
 * @method     ChildConfigInQuery orderByIntbconfabcbasecode($order = Criteria::ASC) Order by the IntbConfAbcBaseCode column
 * @method     ChildConfigInQuery orderByIntbconfabclevla($order = Criteria::ASC) Order by the IntbConfAbcLevlA column
 * @method     ChildConfigInQuery orderByIntbconfabclevlb($order = Criteria::ASC) Order by the IntbConfAbcLevlB column
 * @method     ChildConfigInQuery orderByIntbconfabclevlc($order = Criteria::ASC) Order by the IntbConfAbcLevlC column
 * @method     ChildConfigInQuery orderByIntbconfabclevld($order = Criteria::ASC) Order by the IntbConfAbcLevlD column
 * @method     ChildConfigInQuery orderByIntbconfabclevle($order = Criteria::ASC) Order by the IntbConfAbcLevlE column
 * @method     ChildConfigInQuery orderByIntbconfabclevlf($order = Criteria::ASC) Order by the IntbConfAbcLevlF column
 * @method     ChildConfigInQuery orderByIntbconfabclevlg($order = Criteria::ASC) Order by the IntbConfAbcLevlG column
 * @method     ChildConfigInQuery orderByIntbconfabclevlh($order = Criteria::ASC) Order by the IntbConfAbcLevlH column
 * @method     ChildConfigInQuery orderByIntbconfabclevli($order = Criteria::ASC) Order by the IntbConfAbcLevlI column
 * @method     ChildConfigInQuery orderByIntbconfabclevlj($order = Criteria::ASC) Order by the IntbConfAbcLevlJ column
 * @method     ChildConfigInQuery orderByIntbconfuseforeignx($order = Criteria::ASC) Order by the IntbConfUseForeignX column
 * @method     ChildConfigInQuery orderByIntbconfusenafta($order = Criteria::ASC) Order by the IntbConfUseNafta column
 * @method     ChildConfigInQuery orderByIntbconfnaftaprefcode($order = Criteria::ASC) Order by the IntbConfNaftaPrefCode column
 * @method     ChildConfigInQuery orderByIntbconfnaftaproducer($order = Criteria::ASC) Order by the IntbConfNaftaProducer column
 * @method     ChildConfigInQuery orderByIntbconfnaftadoccode($order = Criteria::ASC) Order by the IntbConfNaftaDocCode column
 * @method     ChildConfigInQuery orderByIntbconfphyscurrwksh($order = Criteria::ASC) Order by the IntbConfPhysCurrWksh column
 * @method     ChildConfigInQuery orderByIntbconf20or30($order = Criteria::ASC) Order by the IntbConf20Or30 column
 * @method     ChildConfigInQuery orderByIntbconfdisporigcnt($order = Criteria::ASC) Order by the IntbConfDispOrigCnt column
 * @method     ChildConfigInQuery orderByIntbconfdispgl($order = Criteria::ASC) Order by the IntbConfDispGl column
 * @method     ChildConfigInQuery orderByIntbconfdispref($order = Criteria::ASC) Order by the IntbConfDispRef column
 * @method     ChildConfigInQuery orderByIntbconfdispcost($order = Criteria::ASC) Order by the IntbConfDispCost column
 * @method     ChildConfigInQuery orderByIntbconfprtval($order = Criteria::ASC) Order by the IntbConfPrtVal column
 * @method     ChildConfigInQuery orderByIntbconfprtgl($order = Criteria::ASC) Order by the IntbConfPrtGl column
 * @method     ChildConfigInQuery orderByIntbconfglacct($order = Criteria::ASC) Order by the IntbConfGlAcct column
 * @method     ChildConfigInQuery orderByIntbconfref($order = Criteria::ASC) Order by the IntbConfRef column
 * @method     ChildConfigInQuery orderByIntbconfcosttype($order = Criteria::ASC) Order by the IntbConfCostType column
 * @method     ChildConfigInQuery orderByIntbconfnormalonly($order = Criteria::ASC) Order by the IntbConfNormalOnly column
 * @method     ChildConfigInQuery orderByIntbconfusewhsedef($order = Criteria::ASC) Order by the IntbConfUseWhseDef column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse01($order = Criteria::ASC) Order by the IntbCon2DfltWhse01 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse02($order = Criteria::ASC) Order by the IntbCon2DfltWhse02 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse03($order = Criteria::ASC) Order by the IntbCon2DfltWhse03 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse04($order = Criteria::ASC) Order by the IntbCon2DfltWhse04 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse05($order = Criteria::ASC) Order by the IntbCon2DfltWhse05 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse06($order = Criteria::ASC) Order by the IntbCon2DfltWhse06 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse07($order = Criteria::ASC) Order by the IntbCon2DfltWhse07 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse08($order = Criteria::ASC) Order by the IntbCon2DfltWhse08 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse09($order = Criteria::ASC) Order by the IntbCon2DfltWhse09 column
 * @method     ChildConfigInQuery orderByIntbcon2dfltwhse10($order = Criteria::ASC) Order by the IntbCon2DfltWhse10 column
 * @method     ChildConfigInQuery orderByIntbconfbindef($order = Criteria::ASC) Order by the IntbConfBinDef column
 * @method     ChildConfigInQuery orderByIntbconfcycldef($order = Criteria::ASC) Order by the IntbConfCyclDef column
 * @method     ChildConfigInQuery orderByIntbconfstatdef($order = Criteria::ASC) Order by the IntbConfStatDef column
 * @method     ChildConfigInQuery orderByIntbconfabcdef($order = Criteria::ASC) Order by the IntbConfAbcDef column
 * @method     ChildConfigInQuery orderByIntbconfspecordrdef($order = Criteria::ASC) Order by the IntbConfSpecOrdrDef column
 * @method     ChildConfigInQuery orderByIntbconfordrpntdef($order = Criteria::ASC) Order by the IntbConfOrdrPntDef column
 * @method     ChildConfigInQuery orderByIntbconfmaxdef($order = Criteria::ASC) Order by the IntbConfMaxDef column
 * @method     ChildConfigInQuery orderByIntbconfordrqtydef($order = Criteria::ASC) Order by the IntbConfOrdrQtyDef column
 * @method     ChildConfigInQuery orderByIntbconftrcptallowcmpl($order = Criteria::ASC) Order by the IntbConfTrcptAllowCmpl column
 * @method     ChildConfigInQuery orderByIntbconftrecmmtstock($order = Criteria::ASC) Order by the IntbConfTreCmmtStock column
 * @method     ChildConfigInQuery orderByIntbconfusefrtin($order = Criteria::ASC) Order by the IntbConfUseFrtIn column
 * @method     ChildConfigInQuery orderByIntbconfeachoruom($order = Criteria::ASC) Order by the IntbConfEachOrUom column
 * @method     ChildConfigInQuery orderByIntbconfneglotcorr($order = Criteria::ASC) Order by the IntbConfNegLotCorr column
 * @method     ChildConfigInQuery orderByIntbconftrnsglacct($order = Criteria::ASC) Order by the IntbConfTrnsGlAcct column
 * @method     ChildConfigInQuery orderByIntbconftrnsprotstock($order = Criteria::ASC) Order by the IntbConfTrnsProtStock column
 * @method     ChildConfigInQuery orderByIntbconfnumericitem($order = Criteria::ASC) Order by the IntbConfNumericItem column
 * @method     ChildConfigInQuery orderByIntbconfitemdigits($order = Criteria::ASC) Order by the IntbConfItemDigits column
 * @method     ChildConfigInQuery orderByIntbconfsinglewhse($order = Criteria::ASC) Order by the IntbConfSingleWhse column
 * @method     ChildConfigInQuery orderByIntbconfupdusepct($order = Criteria::ASC) Order by the IntbConfUpdUsePct column
 * @method     ChildConfigInQuery orderByIntbconfupdpric($order = Criteria::ASC) Order by the IntbConfUpdPric column
 * @method     ChildConfigInQuery orderByIntbconfupdstdcost($order = Criteria::ASC) Order by the IntbConfUpdStdCost column
 * @method     ChildConfigInQuery orderByIntbconfupdxrefcost($order = Criteria::ASC) Order by the IntbConfUpdXrefCost column
 * @method     ChildConfigInQuery orderByIntbconfiqpaupddate($order = Criteria::ASC) Order by the IntbConfIqpaUpdDate column
 * @method     ChildConfigInQuery orderByIntbconfupcxrefoptn($order = Criteria::ASC) Order by the IntbConfUpcXrefOptn column
 * @method     ChildConfigInQuery orderByIntbconfresqyn($order = Criteria::ASC) Order by the IntbConfResqYN column
 * @method     ChildConfigInQuery orderByIntbconftranviewlib($order = Criteria::ASC) Order by the IntbConfTranViewLIB column
 * @method     ChildConfigInQuery orderByIntbconfresvcost($order = Criteria::ASC) Order by the IntbConfResvCost column
 * @method     ChildConfigInQuery orderByIntbcon2tranzerorqst($order = Criteria::ASC) Order by the IntbCon2TranZeroRqst column
 * @method     ChildConfigInQuery orderByIntbconfmonendadjdate($order = Criteria::ASC) Order by the IntbConfMonEndAdjDate column
 * @method     ChildConfigInQuery orderByIntbconfmonendtrndate($order = Criteria::ASC) Order by the IntbConfMonEndTrnDate column
 * @method     ChildConfigInQuery orderByIntbconfmonendlogdate($order = Criteria::ASC) Order by the IntbConfMonEndLogDate column
 * @method     ChildConfigInQuery orderByIntbconfdstatproc($order = Criteria::ASC) Order by the IntbConfDStatProc column
 * @method     ChildConfigInQuery orderByIntbconfstancostupd($order = Criteria::ASC) Order by the IntbConfStanCostUpd column
 * @method     ChildConfigInQuery orderByIntbconflastcost($order = Criteria::ASC) Order by the IntbConfLastCost column
 * @method     ChildConfigInQuery orderByIntbconfusesorgpct($order = Criteria::ASC) Order by the IntbConfUseSOrGPct column
 * @method     ChildConfigInQuery orderByIntbconfaddonstan($order = Criteria::ASC) Order by the IntbConfAddOnStan column
 * @method     ChildConfigInQuery orderByIntbconfstdcosterror($order = Criteria::ASC) Order by the IntbConfStdCostError column
 * @method     ChildConfigInQuery orderByIntbconfavgcurrfive($order = Criteria::ASC) Order by the IntbConfAvgCurrFive column
 * @method     ChildConfigInQuery orderByIntbconfusecntrlbin($order = Criteria::ASC) Order by the IntbConfUseCntrlBin column
 * @method     ChildConfigInQuery orderByIntbconfnbrbinareas($order = Criteria::ASC) Order by the IntbConfNbrBinAreas column
 * @method     ChildConfigInQuery orderByIntbconfusemultbin($order = Criteria::ASC) Order by the IntbConfUseMultBin column
 * @method     ChildConfigInQuery orderByIntbconfdfltwhsebin($order = Criteria::ASC) Order by the IntbConfDfltWhseBin column
 * @method     ChildConfigInQuery orderByIntbconfdfltbin($order = Criteria::ASC) Order by the IntbConfDfltBin column
 * @method     ChildConfigInQuery orderByIntbconfctryitemlot($order = Criteria::ASC) Order by the IntbConfCtryItemLot column
 * @method     ChildConfigInQuery orderByIntbconfuseshipbin($order = Criteria::ASC) Order by the IntbConfUseShipBin column
 * @method     ChildConfigInQuery orderByIntbcon2prtbinrlabel($order = Criteria::ASC) Order by the IntbCon2PrtBinrLabel column
 * @method     ChildConfigInQuery orderByIntbcon2itemlookup($order = Criteria::ASC) Order by the IntbCon2ItemLookup column
 * @method     ChildConfigInQuery orderByIntbconfincldcti($order = Criteria::ASC) Order by the IntbConfIncldCti column
 * @method     ChildConfigInQuery orderByIntbconfcertimage($order = Criteria::ASC) Order by the IntbConfCertImage column
 * @method     ChildConfigInQuery orderByIntbconfdrawimage($order = Criteria::ASC) Order by the IntbConfDrawImage column
 * @method     ChildConfigInQuery orderByIntbconfconfirmimage($order = Criteria::ASC) Order by the IntbConfConfirmImage column
 * @method     ChildConfigInQuery orderByIntbcon2productimage($order = Criteria::ASC) Order by the IntbCon2ProductImage column
 * @method     ChildConfigInQuery orderByIntbconfdefpick($order = Criteria::ASC) Order by the IntbConfDefPick column
 * @method     ChildConfigInQuery orderByIntbconfdefpack($order = Criteria::ASC) Order by the IntbConfDefPack column
 * @method     ChildConfigInQuery orderByIntbconfdefinvc($order = Criteria::ASC) Order by the IntbConfDefInvc column
 * @method     ChildConfigInQuery orderByIntbconfdefack($order = Criteria::ASC) Order by the IntbConfDefAck column
 * @method     ChildConfigInQuery orderByIntbconfdefquot($order = Criteria::ASC) Order by the IntbConfDefQuot column
 * @method     ChildConfigInQuery orderByIntbconfdefpo($order = Criteria::ASC) Order by the IntbConfDefPo column
 * @method     ChildConfigInQuery orderByIntbconfdeftrans($order = Criteria::ASC) Order by the IntbConfDefTrans column
 * @method     ChildConfigInQuery orderByIntbconfadjglcogs($order = Criteria::ASC) Order by the IntbConfAdjGlCogs column
 * @method     ChildConfigInQuery orderByIntbcon2dfltadjglacct($order = Criteria::ASC) Order by the IntbCon2DfltAdjGlAcct column
 * @method     ChildConfigInQuery orderByIntbconfadjcostbase($order = Criteria::ASC) Order by the IntbConfAdjCostBase column
 * @method     ChildConfigInQuery orderByIntbconfdfltadjtbin($order = Criteria::ASC) Order by the IntbConfDfltAdjtBin column
 * @method     ChildConfigInQuery orderByIntbconfadjtbin($order = Criteria::ASC) Order by the IntbConfAdjtBin column
 * @method     ChildConfigInQuery orderByIntbconfcstockseq($order = Criteria::ASC) Order by the IntbConfCStockSeq column
 * @method     ChildConfigInQuery orderByIntbconfcstockhistday($order = Criteria::ASC) Order by the IntbConfCStockHistDay column
 * @method     ChildConfigInQuery orderByIntbconfcstockformat($order = Criteria::ASC) Order by the IntbConfCStockFormat column
 * @method     ChildConfigInQuery orderByIntbconfcstkexportitem($order = Criteria::ASC) Order by the IntbConfCstkExportItem column
 * @method     ChildConfigInQuery orderByIntbconfcstkpdmcontract($order = Criteria::ASC) Order by the IntbConfCstkPdmContract column
 * @method     ChildConfigInQuery orderByIntbcon2importseq($order = Criteria::ASC) Order by the IntbCon2ImportSeq column
 * @method     ChildConfigInQuery orderByIntbconfstopitemchg($order = Criteria::ASC) Order by the IntbConfStopItemChg column
 * @method     ChildConfigInQuery orderByIntbconfaddtomxrfe($order = Criteria::ASC) Order by the IntbConfAddToMxrfe column
 * @method     ChildConfigInQuery orderByIntbconfmxrfevendid($order = Criteria::ASC) Order by the IntbConfMxrfeVendId column
 * @method     ChildConfigInQuery orderByIntbcon2newidlabellist($order = Criteria::ASC) Order by the IntbCon2NewIdLabelList column
 * @method     ChildConfigInQuery orderByIntbconfuseformat($order = Criteria::ASC) Order by the IntbConfUseFormat column
 * @method     ChildConfigInQuery orderByIntbconfdefformat($order = Criteria::ASC) Order by the IntbConfDefFormat column
 * @method     ChildConfigInQuery orderByIntbconfseqshortitem($order = Criteria::ASC) Order by the IntbConfSeqShortItem column
 * @method     ChildConfigInQuery orderByIntbconfshortitemlen($order = Criteria::ASC) Order by the IntbConfShortItemLen column
 * @method     ChildConfigInQuery orderByIntbconfusescale($order = Criteria::ASC) Order by the IntbConfUseScale column
 * @method     ChildConfigInQuery orderByIntbconfstorewght($order = Criteria::ASC) Order by the IntbConfStoreWght column
 * @method     ChildConfigInQuery orderByIntbconfvalidasstcode($order = Criteria::ASC) Order by the IntbConfValidAsstCode column
 * @method     ChildConfigInQuery orderByIntbconfwhitegoods($order = Criteria::ASC) Order by the IntbConfWhiteGoods column
 * @method     ChildConfigInQuery orderByIntbcon2transcustid($order = Criteria::ASC) Order by the IntbCon2TransCustId column
 * @method     ChildConfigInQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigInQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigInQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigInQuery groupByIntbconfkey() Group by the IntbConfKey column
 * @method     ChildConfigInQuery groupByIntbconfglifac() Group by the IntbConfGlIfac column
 * @method     ChildConfigInQuery groupByIntbconfuseiw() Group by the IntbConfUseIw column
 * @method     ChildConfigInQuery groupByIntbconflifofifo() Group by the IntbConfLifoFifo column
 * @method     ChildConfigInQuery groupByIntbconfgoneg() Group by the IntbConfGoNeg column
 * @method     ChildConfigInQuery groupByIntbconfuselots() Group by the IntbConfUseLots column
 * @method     ChildConfigInQuery groupByIntbconfnbruppr() Group by the IntbConfNbrUppr column
 * @method     ChildConfigInQuery groupByIntbconfdescuppr() Group by the IntbConfDescUppr column
 * @method     ChildConfigInQuery groupByIntbconfusedesc2() Group by the IntbConfUseDesc2 column
 * @method     ChildConfigInQuery groupByIntbconfuseupccode() Group by the IntbConfUseUpcCode column
 * @method     ChildConfigInQuery groupByIntbconfupceancntrl() Group by the IntbConfUpcEanCntrl column
 * @method     ChildConfigInQuery groupByIntbconfupcgennbr() Group by the IntbConfUpcGenNbr column
 * @method     ChildConfigInQuery groupByIntbcon2allowdupupc() Group by the IntbCon2AllowDupUpc column
 * @method     ChildConfigInQuery groupByIntbconfxrefnospace() Group by the IntbConfXrefNoSpace column
 * @method     ChildConfigInQuery groupByIntbconfusepricgrup() Group by the IntbConfUsePricGrup column
 * @method     ChildConfigInQuery groupByIntbconfusecommgrup() Group by the IntbConfUseCommGrup column
 * @method     ChildConfigInQuery groupByIntbconfusewarrdays() Group by the IntbConfUseWarrDays column
 * @method     ChildConfigInQuery groupByIntbconfstanbasedef() Group by the IntbConfStanBaseDef column
 * @method     ChildConfigInQuery groupByIntbconfgrupdef() Group by the IntbConfGrupDef column
 * @method     ChildConfigInQuery groupByIntbconfpricgrupdef() Group by the IntbConfPricGrupDef column
 * @method     ChildConfigInQuery groupByIntbconfcommgrupdef() Group by the IntbConfCommGrupDef column
 * @method     ChildConfigInQuery groupByIntbconftypedef() Group by the IntbConfTypeDef column
 * @method     ChildConfigInQuery groupByIntbconfpricuseitem() Group by the IntbConfPricUseItem column
 * @method     ChildConfigInQuery groupByIntbconfcommuseitem() Group by the IntbConfCommUseItem column
 * @method     ChildConfigInQuery groupByIntbconfuomsaledef() Group by the IntbConfUomSaleDef column
 * @method     ChildConfigInQuery groupByIntbconfuompurdef() Group by the IntbConfUomPurDef column
 * @method     ChildConfigInQuery groupByIntbconfsviadef() Group by the IntbConfSviaDef column
 * @method     ChildConfigInQuery groupByIntbconfcustxreforuse() Group by the IntbConfCustxrefOrUse column
 * @method     ChildConfigInQuery groupByIntbconfheadgetdef() Group by the IntbConfHeadGetDef column
 * @method     ChildConfigInQuery groupByIntbconfitemgetdef() Group by the IntbConfItemGetDef column
 * @method     ChildConfigInQuery groupByIntbconfgetdispohaval() Group by the IntbConfGetDispOhAval column
 * @method     ChildConfigInQuery groupByIntbconfusercode1labl() Group by the IntbConfUserCode1Labl column
 * @method     ChildConfigInQuery groupByIntbconfusercode1ver() Group by the IntbConfUserCode1Ver column
 * @method     ChildConfigInQuery groupByIntbconfusercode2labl() Group by the IntbConfUserCode2Labl column
 * @method     ChildConfigInQuery groupByIntbconfusercode2ver() Group by the IntbConfUserCode2Ver column
 * @method     ChildConfigInQuery groupByIntbconfitemline() Group by the IntbConfItemLine column
 * @method     ChildConfigInQuery groupByIntbconfitemcols() Group by the IntbConfItemCols column
 * @method     ChildConfigInQuery groupByIntbconfheadline() Group by the IntbConfHeadLine column
 * @method     ChildConfigInQuery groupByIntbconfheadcols() Group by the IntbConfHeadCols column
 * @method     ChildConfigInQuery groupByIntbconfdetline() Group by the IntbConfDetLine column
 * @method     ChildConfigInQuery groupByIntbconfdetcols() Group by the IntbConfDetCols column
 * @method     ChildConfigInQuery groupByIntbconfminmaxzero() Group by the IntbConfMinMaxZero column
 * @method     ChildConfigInQuery groupByIntbconfminrec() Group by the IntbConfMinRec column
 * @method     ChildConfigInQuery groupByIntbconfatbelowmin() Group by the IntbConfAtBelowMin column
 * @method     ChildConfigInQuery groupByIntbconfonewhse() Group by the IntbConfOneWhse column
 * @method     ChildConfigInQuery groupByIntbconfytdmth() Group by the IntbConfYtdMth column
 * @method     ChildConfigInQuery groupByIntbconfusegramsltr() Group by the IntbConfUseGramsLtr column
 * @method     ChildConfigInQuery groupByIntbconfabcbywhse() Group by the IntbConfAbcByWhse column
 * @method     ChildConfigInQuery groupByIntbconfabcnbrmths() Group by the IntbConfAbcNbrMths column
 * @method     ChildConfigInQuery groupByIntbconfabcbasecode() Group by the IntbConfAbcBaseCode column
 * @method     ChildConfigInQuery groupByIntbconfabclevla() Group by the IntbConfAbcLevlA column
 * @method     ChildConfigInQuery groupByIntbconfabclevlb() Group by the IntbConfAbcLevlB column
 * @method     ChildConfigInQuery groupByIntbconfabclevlc() Group by the IntbConfAbcLevlC column
 * @method     ChildConfigInQuery groupByIntbconfabclevld() Group by the IntbConfAbcLevlD column
 * @method     ChildConfigInQuery groupByIntbconfabclevle() Group by the IntbConfAbcLevlE column
 * @method     ChildConfigInQuery groupByIntbconfabclevlf() Group by the IntbConfAbcLevlF column
 * @method     ChildConfigInQuery groupByIntbconfabclevlg() Group by the IntbConfAbcLevlG column
 * @method     ChildConfigInQuery groupByIntbconfabclevlh() Group by the IntbConfAbcLevlH column
 * @method     ChildConfigInQuery groupByIntbconfabclevli() Group by the IntbConfAbcLevlI column
 * @method     ChildConfigInQuery groupByIntbconfabclevlj() Group by the IntbConfAbcLevlJ column
 * @method     ChildConfigInQuery groupByIntbconfuseforeignx() Group by the IntbConfUseForeignX column
 * @method     ChildConfigInQuery groupByIntbconfusenafta() Group by the IntbConfUseNafta column
 * @method     ChildConfigInQuery groupByIntbconfnaftaprefcode() Group by the IntbConfNaftaPrefCode column
 * @method     ChildConfigInQuery groupByIntbconfnaftaproducer() Group by the IntbConfNaftaProducer column
 * @method     ChildConfigInQuery groupByIntbconfnaftadoccode() Group by the IntbConfNaftaDocCode column
 * @method     ChildConfigInQuery groupByIntbconfphyscurrwksh() Group by the IntbConfPhysCurrWksh column
 * @method     ChildConfigInQuery groupByIntbconf20or30() Group by the IntbConf20Or30 column
 * @method     ChildConfigInQuery groupByIntbconfdisporigcnt() Group by the IntbConfDispOrigCnt column
 * @method     ChildConfigInQuery groupByIntbconfdispgl() Group by the IntbConfDispGl column
 * @method     ChildConfigInQuery groupByIntbconfdispref() Group by the IntbConfDispRef column
 * @method     ChildConfigInQuery groupByIntbconfdispcost() Group by the IntbConfDispCost column
 * @method     ChildConfigInQuery groupByIntbconfprtval() Group by the IntbConfPrtVal column
 * @method     ChildConfigInQuery groupByIntbconfprtgl() Group by the IntbConfPrtGl column
 * @method     ChildConfigInQuery groupByIntbconfglacct() Group by the IntbConfGlAcct column
 * @method     ChildConfigInQuery groupByIntbconfref() Group by the IntbConfRef column
 * @method     ChildConfigInQuery groupByIntbconfcosttype() Group by the IntbConfCostType column
 * @method     ChildConfigInQuery groupByIntbconfnormalonly() Group by the IntbConfNormalOnly column
 * @method     ChildConfigInQuery groupByIntbconfusewhsedef() Group by the IntbConfUseWhseDef column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse01() Group by the IntbCon2DfltWhse01 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse02() Group by the IntbCon2DfltWhse02 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse03() Group by the IntbCon2DfltWhse03 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse04() Group by the IntbCon2DfltWhse04 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse05() Group by the IntbCon2DfltWhse05 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse06() Group by the IntbCon2DfltWhse06 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse07() Group by the IntbCon2DfltWhse07 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse08() Group by the IntbCon2DfltWhse08 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse09() Group by the IntbCon2DfltWhse09 column
 * @method     ChildConfigInQuery groupByIntbcon2dfltwhse10() Group by the IntbCon2DfltWhse10 column
 * @method     ChildConfigInQuery groupByIntbconfbindef() Group by the IntbConfBinDef column
 * @method     ChildConfigInQuery groupByIntbconfcycldef() Group by the IntbConfCyclDef column
 * @method     ChildConfigInQuery groupByIntbconfstatdef() Group by the IntbConfStatDef column
 * @method     ChildConfigInQuery groupByIntbconfabcdef() Group by the IntbConfAbcDef column
 * @method     ChildConfigInQuery groupByIntbconfspecordrdef() Group by the IntbConfSpecOrdrDef column
 * @method     ChildConfigInQuery groupByIntbconfordrpntdef() Group by the IntbConfOrdrPntDef column
 * @method     ChildConfigInQuery groupByIntbconfmaxdef() Group by the IntbConfMaxDef column
 * @method     ChildConfigInQuery groupByIntbconfordrqtydef() Group by the IntbConfOrdrQtyDef column
 * @method     ChildConfigInQuery groupByIntbconftrcptallowcmpl() Group by the IntbConfTrcptAllowCmpl column
 * @method     ChildConfigInQuery groupByIntbconftrecmmtstock() Group by the IntbConfTreCmmtStock column
 * @method     ChildConfigInQuery groupByIntbconfusefrtin() Group by the IntbConfUseFrtIn column
 * @method     ChildConfigInQuery groupByIntbconfeachoruom() Group by the IntbConfEachOrUom column
 * @method     ChildConfigInQuery groupByIntbconfneglotcorr() Group by the IntbConfNegLotCorr column
 * @method     ChildConfigInQuery groupByIntbconftrnsglacct() Group by the IntbConfTrnsGlAcct column
 * @method     ChildConfigInQuery groupByIntbconftrnsprotstock() Group by the IntbConfTrnsProtStock column
 * @method     ChildConfigInQuery groupByIntbconfnumericitem() Group by the IntbConfNumericItem column
 * @method     ChildConfigInQuery groupByIntbconfitemdigits() Group by the IntbConfItemDigits column
 * @method     ChildConfigInQuery groupByIntbconfsinglewhse() Group by the IntbConfSingleWhse column
 * @method     ChildConfigInQuery groupByIntbconfupdusepct() Group by the IntbConfUpdUsePct column
 * @method     ChildConfigInQuery groupByIntbconfupdpric() Group by the IntbConfUpdPric column
 * @method     ChildConfigInQuery groupByIntbconfupdstdcost() Group by the IntbConfUpdStdCost column
 * @method     ChildConfigInQuery groupByIntbconfupdxrefcost() Group by the IntbConfUpdXrefCost column
 * @method     ChildConfigInQuery groupByIntbconfiqpaupddate() Group by the IntbConfIqpaUpdDate column
 * @method     ChildConfigInQuery groupByIntbconfupcxrefoptn() Group by the IntbConfUpcXrefOptn column
 * @method     ChildConfigInQuery groupByIntbconfresqyn() Group by the IntbConfResqYN column
 * @method     ChildConfigInQuery groupByIntbconftranviewlib() Group by the IntbConfTranViewLIB column
 * @method     ChildConfigInQuery groupByIntbconfresvcost() Group by the IntbConfResvCost column
 * @method     ChildConfigInQuery groupByIntbcon2tranzerorqst() Group by the IntbCon2TranZeroRqst column
 * @method     ChildConfigInQuery groupByIntbconfmonendadjdate() Group by the IntbConfMonEndAdjDate column
 * @method     ChildConfigInQuery groupByIntbconfmonendtrndate() Group by the IntbConfMonEndTrnDate column
 * @method     ChildConfigInQuery groupByIntbconfmonendlogdate() Group by the IntbConfMonEndLogDate column
 * @method     ChildConfigInQuery groupByIntbconfdstatproc() Group by the IntbConfDStatProc column
 * @method     ChildConfigInQuery groupByIntbconfstancostupd() Group by the IntbConfStanCostUpd column
 * @method     ChildConfigInQuery groupByIntbconflastcost() Group by the IntbConfLastCost column
 * @method     ChildConfigInQuery groupByIntbconfusesorgpct() Group by the IntbConfUseSOrGPct column
 * @method     ChildConfigInQuery groupByIntbconfaddonstan() Group by the IntbConfAddOnStan column
 * @method     ChildConfigInQuery groupByIntbconfstdcosterror() Group by the IntbConfStdCostError column
 * @method     ChildConfigInQuery groupByIntbconfavgcurrfive() Group by the IntbConfAvgCurrFive column
 * @method     ChildConfigInQuery groupByIntbconfusecntrlbin() Group by the IntbConfUseCntrlBin column
 * @method     ChildConfigInQuery groupByIntbconfnbrbinareas() Group by the IntbConfNbrBinAreas column
 * @method     ChildConfigInQuery groupByIntbconfusemultbin() Group by the IntbConfUseMultBin column
 * @method     ChildConfigInQuery groupByIntbconfdfltwhsebin() Group by the IntbConfDfltWhseBin column
 * @method     ChildConfigInQuery groupByIntbconfdfltbin() Group by the IntbConfDfltBin column
 * @method     ChildConfigInQuery groupByIntbconfctryitemlot() Group by the IntbConfCtryItemLot column
 * @method     ChildConfigInQuery groupByIntbconfuseshipbin() Group by the IntbConfUseShipBin column
 * @method     ChildConfigInQuery groupByIntbcon2prtbinrlabel() Group by the IntbCon2PrtBinrLabel column
 * @method     ChildConfigInQuery groupByIntbcon2itemlookup() Group by the IntbCon2ItemLookup column
 * @method     ChildConfigInQuery groupByIntbconfincldcti() Group by the IntbConfIncldCti column
 * @method     ChildConfigInQuery groupByIntbconfcertimage() Group by the IntbConfCertImage column
 * @method     ChildConfigInQuery groupByIntbconfdrawimage() Group by the IntbConfDrawImage column
 * @method     ChildConfigInQuery groupByIntbconfconfirmimage() Group by the IntbConfConfirmImage column
 * @method     ChildConfigInQuery groupByIntbcon2productimage() Group by the IntbCon2ProductImage column
 * @method     ChildConfigInQuery groupByIntbconfdefpick() Group by the IntbConfDefPick column
 * @method     ChildConfigInQuery groupByIntbconfdefpack() Group by the IntbConfDefPack column
 * @method     ChildConfigInQuery groupByIntbconfdefinvc() Group by the IntbConfDefInvc column
 * @method     ChildConfigInQuery groupByIntbconfdefack() Group by the IntbConfDefAck column
 * @method     ChildConfigInQuery groupByIntbconfdefquot() Group by the IntbConfDefQuot column
 * @method     ChildConfigInQuery groupByIntbconfdefpo() Group by the IntbConfDefPo column
 * @method     ChildConfigInQuery groupByIntbconfdeftrans() Group by the IntbConfDefTrans column
 * @method     ChildConfigInQuery groupByIntbconfadjglcogs() Group by the IntbConfAdjGlCogs column
 * @method     ChildConfigInQuery groupByIntbcon2dfltadjglacct() Group by the IntbCon2DfltAdjGlAcct column
 * @method     ChildConfigInQuery groupByIntbconfadjcostbase() Group by the IntbConfAdjCostBase column
 * @method     ChildConfigInQuery groupByIntbconfdfltadjtbin() Group by the IntbConfDfltAdjtBin column
 * @method     ChildConfigInQuery groupByIntbconfadjtbin() Group by the IntbConfAdjtBin column
 * @method     ChildConfigInQuery groupByIntbconfcstockseq() Group by the IntbConfCStockSeq column
 * @method     ChildConfigInQuery groupByIntbconfcstockhistday() Group by the IntbConfCStockHistDay column
 * @method     ChildConfigInQuery groupByIntbconfcstockformat() Group by the IntbConfCStockFormat column
 * @method     ChildConfigInQuery groupByIntbconfcstkexportitem() Group by the IntbConfCstkExportItem column
 * @method     ChildConfigInQuery groupByIntbconfcstkpdmcontract() Group by the IntbConfCstkPdmContract column
 * @method     ChildConfigInQuery groupByIntbcon2importseq() Group by the IntbCon2ImportSeq column
 * @method     ChildConfigInQuery groupByIntbconfstopitemchg() Group by the IntbConfStopItemChg column
 * @method     ChildConfigInQuery groupByIntbconfaddtomxrfe() Group by the IntbConfAddToMxrfe column
 * @method     ChildConfigInQuery groupByIntbconfmxrfevendid() Group by the IntbConfMxrfeVendId column
 * @method     ChildConfigInQuery groupByIntbcon2newidlabellist() Group by the IntbCon2NewIdLabelList column
 * @method     ChildConfigInQuery groupByIntbconfuseformat() Group by the IntbConfUseFormat column
 * @method     ChildConfigInQuery groupByIntbconfdefformat() Group by the IntbConfDefFormat column
 * @method     ChildConfigInQuery groupByIntbconfseqshortitem() Group by the IntbConfSeqShortItem column
 * @method     ChildConfigInQuery groupByIntbconfshortitemlen() Group by the IntbConfShortItemLen column
 * @method     ChildConfigInQuery groupByIntbconfusescale() Group by the IntbConfUseScale column
 * @method     ChildConfigInQuery groupByIntbconfstorewght() Group by the IntbConfStoreWght column
 * @method     ChildConfigInQuery groupByIntbconfvalidasstcode() Group by the IntbConfValidAsstCode column
 * @method     ChildConfigInQuery groupByIntbconfwhitegoods() Group by the IntbConfWhiteGoods column
 * @method     ChildConfigInQuery groupByIntbcon2transcustid() Group by the IntbCon2TransCustId column
 * @method     ChildConfigInQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigInQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigInQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigInQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigInQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigInQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigInQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigInQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigInQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigIn findOne(ConnectionInterface $con = null) Return the first ChildConfigIn matching the query
 * @method     ChildConfigIn findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigIn matching the query, or a new ChildConfigIn object populated from the query conditions when no match is found
 *
 * @method     ChildConfigIn findOneByIntbconfkey(int $IntbConfKey) Return the first ChildConfigIn filtered by the IntbConfKey column
 * @method     ChildConfigIn findOneByIntbconfglifac(string $IntbConfGlIfac) Return the first ChildConfigIn filtered by the IntbConfGlIfac column
 * @method     ChildConfigIn findOneByIntbconfuseiw(string $IntbConfUseIw) Return the first ChildConfigIn filtered by the IntbConfUseIw column
 * @method     ChildConfigIn findOneByIntbconflifofifo(string $IntbConfLifoFifo) Return the first ChildConfigIn filtered by the IntbConfLifoFifo column
 * @method     ChildConfigIn findOneByIntbconfgoneg(string $IntbConfGoNeg) Return the first ChildConfigIn filtered by the IntbConfGoNeg column
 * @method     ChildConfigIn findOneByIntbconfuselots(string $IntbConfUseLots) Return the first ChildConfigIn filtered by the IntbConfUseLots column
 * @method     ChildConfigIn findOneByIntbconfnbruppr(string $IntbConfNbrUppr) Return the first ChildConfigIn filtered by the IntbConfNbrUppr column
 * @method     ChildConfigIn findOneByIntbconfdescuppr(string $IntbConfDescUppr) Return the first ChildConfigIn filtered by the IntbConfDescUppr column
 * @method     ChildConfigIn findOneByIntbconfusedesc2(string $IntbConfUseDesc2) Return the first ChildConfigIn filtered by the IntbConfUseDesc2 column
 * @method     ChildConfigIn findOneByIntbconfuseupccode(string $IntbConfUseUpcCode) Return the first ChildConfigIn filtered by the IntbConfUseUpcCode column
 * @method     ChildConfigIn findOneByIntbconfupceancntrl(string $IntbConfUpcEanCntrl) Return the first ChildConfigIn filtered by the IntbConfUpcEanCntrl column
 * @method     ChildConfigIn findOneByIntbconfupcgennbr(int $IntbConfUpcGenNbr) Return the first ChildConfigIn filtered by the IntbConfUpcGenNbr column
 * @method     ChildConfigIn findOneByIntbcon2allowdupupc(string $IntbCon2AllowDupUpc) Return the first ChildConfigIn filtered by the IntbCon2AllowDupUpc column
 * @method     ChildConfigIn findOneByIntbconfxrefnospace(string $IntbConfXrefNoSpace) Return the first ChildConfigIn filtered by the IntbConfXrefNoSpace column
 * @method     ChildConfigIn findOneByIntbconfusepricgrup(string $IntbConfUsePricGrup) Return the first ChildConfigIn filtered by the IntbConfUsePricGrup column
 * @method     ChildConfigIn findOneByIntbconfusecommgrup(string $IntbConfUseCommGrup) Return the first ChildConfigIn filtered by the IntbConfUseCommGrup column
 * @method     ChildConfigIn findOneByIntbconfusewarrdays(string $IntbConfUseWarrDays) Return the first ChildConfigIn filtered by the IntbConfUseWarrDays column
 * @method     ChildConfigIn findOneByIntbconfstanbasedef(string $IntbConfStanBaseDef) Return the first ChildConfigIn filtered by the IntbConfStanBaseDef column
 * @method     ChildConfigIn findOneByIntbconfgrupdef(string $IntbConfGrupDef) Return the first ChildConfigIn filtered by the IntbConfGrupDef column
 * @method     ChildConfigIn findOneByIntbconfpricgrupdef(string $IntbConfPricGrupDef) Return the first ChildConfigIn filtered by the IntbConfPricGrupDef column
 * @method     ChildConfigIn findOneByIntbconfcommgrupdef(string $IntbConfCommGrupDef) Return the first ChildConfigIn filtered by the IntbConfCommGrupDef column
 * @method     ChildConfigIn findOneByIntbconftypedef(string $IntbConfTypeDef) Return the first ChildConfigIn filtered by the IntbConfTypeDef column
 * @method     ChildConfigIn findOneByIntbconfpricuseitem(string $IntbConfPricUseItem) Return the first ChildConfigIn filtered by the IntbConfPricUseItem column
 * @method     ChildConfigIn findOneByIntbconfcommuseitem(string $IntbConfCommUseItem) Return the first ChildConfigIn filtered by the IntbConfCommUseItem column
 * @method     ChildConfigIn findOneByIntbconfuomsaledef(string $IntbConfUomSaleDef) Return the first ChildConfigIn filtered by the IntbConfUomSaleDef column
 * @method     ChildConfigIn findOneByIntbconfuompurdef(string $IntbConfUomPurDef) Return the first ChildConfigIn filtered by the IntbConfUomPurDef column
 * @method     ChildConfigIn findOneByIntbconfsviadef(string $IntbConfSviaDef) Return the first ChildConfigIn filtered by the IntbConfSviaDef column
 * @method     ChildConfigIn findOneByIntbconfcustxreforuse(string $IntbConfCustxrefOrUse) Return the first ChildConfigIn filtered by the IntbConfCustxrefOrUse column
 * @method     ChildConfigIn findOneByIntbconfheadgetdef(int $IntbConfHeadGetDef) Return the first ChildConfigIn filtered by the IntbConfHeadGetDef column
 * @method     ChildConfigIn findOneByIntbconfitemgetdef(int $IntbConfItemGetDef) Return the first ChildConfigIn filtered by the IntbConfItemGetDef column
 * @method     ChildConfigIn findOneByIntbconfgetdispohaval(string $IntbConfGetDispOhAval) Return the first ChildConfigIn filtered by the IntbConfGetDispOhAval column
 * @method     ChildConfigIn findOneByIntbconfusercode1labl(string $IntbConfUserCode1Labl) Return the first ChildConfigIn filtered by the IntbConfUserCode1Labl column
 * @method     ChildConfigIn findOneByIntbconfusercode1ver(string $IntbConfUserCode1Ver) Return the first ChildConfigIn filtered by the IntbConfUserCode1Ver column
 * @method     ChildConfigIn findOneByIntbconfusercode2labl(string $IntbConfUserCode2Labl) Return the first ChildConfigIn filtered by the IntbConfUserCode2Labl column
 * @method     ChildConfigIn findOneByIntbconfusercode2ver(string $IntbConfUserCode2Ver) Return the first ChildConfigIn filtered by the IntbConfUserCode2Ver column
 * @method     ChildConfigIn findOneByIntbconfitemline(int $IntbConfItemLine) Return the first ChildConfigIn filtered by the IntbConfItemLine column
 * @method     ChildConfigIn findOneByIntbconfitemcols(int $IntbConfItemCols) Return the first ChildConfigIn filtered by the IntbConfItemCols column
 * @method     ChildConfigIn findOneByIntbconfheadline(int $IntbConfHeadLine) Return the first ChildConfigIn filtered by the IntbConfHeadLine column
 * @method     ChildConfigIn findOneByIntbconfheadcols(int $IntbConfHeadCols) Return the first ChildConfigIn filtered by the IntbConfHeadCols column
 * @method     ChildConfigIn findOneByIntbconfdetline(int $IntbConfDetLine) Return the first ChildConfigIn filtered by the IntbConfDetLine column
 * @method     ChildConfigIn findOneByIntbconfdetcols(int $IntbConfDetCols) Return the first ChildConfigIn filtered by the IntbConfDetCols column
 * @method     ChildConfigIn findOneByIntbconfminmaxzero(string $IntbConfMinMaxZero) Return the first ChildConfigIn filtered by the IntbConfMinMaxZero column
 * @method     ChildConfigIn findOneByIntbconfminrec(string $IntbConfMinRec) Return the first ChildConfigIn filtered by the IntbConfMinRec column
 * @method     ChildConfigIn findOneByIntbconfatbelowmin(string $IntbConfAtBelowMin) Return the first ChildConfigIn filtered by the IntbConfAtBelowMin column
 * @method     ChildConfigIn findOneByIntbconfonewhse(string $IntbConfOneWhse) Return the first ChildConfigIn filtered by the IntbConfOneWhse column
 * @method     ChildConfigIn findOneByIntbconfytdmth(int $IntbConfYtdMth) Return the first ChildConfigIn filtered by the IntbConfYtdMth column
 * @method     ChildConfigIn findOneByIntbconfusegramsltr(string $IntbConfUseGramsLtr) Return the first ChildConfigIn filtered by the IntbConfUseGramsLtr column
 * @method     ChildConfigIn findOneByIntbconfabcbywhse(string $IntbConfAbcByWhse) Return the first ChildConfigIn filtered by the IntbConfAbcByWhse column
 * @method     ChildConfigIn findOneByIntbconfabcnbrmths(int $IntbConfAbcNbrMths) Return the first ChildConfigIn filtered by the IntbConfAbcNbrMths column
 * @method     ChildConfigIn findOneByIntbconfabcbasecode(string $IntbConfAbcBaseCode) Return the first ChildConfigIn filtered by the IntbConfAbcBaseCode column
 * @method     ChildConfigIn findOneByIntbconfabclevla(string $IntbConfAbcLevlA) Return the first ChildConfigIn filtered by the IntbConfAbcLevlA column
 * @method     ChildConfigIn findOneByIntbconfabclevlb(string $IntbConfAbcLevlB) Return the first ChildConfigIn filtered by the IntbConfAbcLevlB column
 * @method     ChildConfigIn findOneByIntbconfabclevlc(string $IntbConfAbcLevlC) Return the first ChildConfigIn filtered by the IntbConfAbcLevlC column
 * @method     ChildConfigIn findOneByIntbconfabclevld(string $IntbConfAbcLevlD) Return the first ChildConfigIn filtered by the IntbConfAbcLevlD column
 * @method     ChildConfigIn findOneByIntbconfabclevle(string $IntbConfAbcLevlE) Return the first ChildConfigIn filtered by the IntbConfAbcLevlE column
 * @method     ChildConfigIn findOneByIntbconfabclevlf(string $IntbConfAbcLevlF) Return the first ChildConfigIn filtered by the IntbConfAbcLevlF column
 * @method     ChildConfigIn findOneByIntbconfabclevlg(string $IntbConfAbcLevlG) Return the first ChildConfigIn filtered by the IntbConfAbcLevlG column
 * @method     ChildConfigIn findOneByIntbconfabclevlh(string $IntbConfAbcLevlH) Return the first ChildConfigIn filtered by the IntbConfAbcLevlH column
 * @method     ChildConfigIn findOneByIntbconfabclevli(string $IntbConfAbcLevlI) Return the first ChildConfigIn filtered by the IntbConfAbcLevlI column
 * @method     ChildConfigIn findOneByIntbconfabclevlj(string $IntbConfAbcLevlJ) Return the first ChildConfigIn filtered by the IntbConfAbcLevlJ column
 * @method     ChildConfigIn findOneByIntbconfuseforeignx(string $IntbConfUseForeignX) Return the first ChildConfigIn filtered by the IntbConfUseForeignX column
 * @method     ChildConfigIn findOneByIntbconfusenafta(string $IntbConfUseNafta) Return the first ChildConfigIn filtered by the IntbConfUseNafta column
 * @method     ChildConfigIn findOneByIntbconfnaftaprefcode(string $IntbConfNaftaPrefCode) Return the first ChildConfigIn filtered by the IntbConfNaftaPrefCode column
 * @method     ChildConfigIn findOneByIntbconfnaftaproducer(string $IntbConfNaftaProducer) Return the first ChildConfigIn filtered by the IntbConfNaftaProducer column
 * @method     ChildConfigIn findOneByIntbconfnaftadoccode(string $IntbConfNaftaDocCode) Return the first ChildConfigIn filtered by the IntbConfNaftaDocCode column
 * @method     ChildConfigIn findOneByIntbconfphyscurrwksh(string $IntbConfPhysCurrWksh) Return the first ChildConfigIn filtered by the IntbConfPhysCurrWksh column
 * @method     ChildConfigIn findOneByIntbconf20or30(int $IntbConf20Or30) Return the first ChildConfigIn filtered by the IntbConf20Or30 column
 * @method     ChildConfigIn findOneByIntbconfdisporigcnt(string $IntbConfDispOrigCnt) Return the first ChildConfigIn filtered by the IntbConfDispOrigCnt column
 * @method     ChildConfigIn findOneByIntbconfdispgl(string $IntbConfDispGl) Return the first ChildConfigIn filtered by the IntbConfDispGl column
 * @method     ChildConfigIn findOneByIntbconfdispref(string $IntbConfDispRef) Return the first ChildConfigIn filtered by the IntbConfDispRef column
 * @method     ChildConfigIn findOneByIntbconfdispcost(string $IntbConfDispCost) Return the first ChildConfigIn filtered by the IntbConfDispCost column
 * @method     ChildConfigIn findOneByIntbconfprtval(string $IntbConfPrtVal) Return the first ChildConfigIn filtered by the IntbConfPrtVal column
 * @method     ChildConfigIn findOneByIntbconfprtgl(string $IntbConfPrtGl) Return the first ChildConfigIn filtered by the IntbConfPrtGl column
 * @method     ChildConfigIn findOneByIntbconfglacct(string $IntbConfGlAcct) Return the first ChildConfigIn filtered by the IntbConfGlAcct column
 * @method     ChildConfigIn findOneByIntbconfref(string $IntbConfRef) Return the first ChildConfigIn filtered by the IntbConfRef column
 * @method     ChildConfigIn findOneByIntbconfcosttype(string $IntbConfCostType) Return the first ChildConfigIn filtered by the IntbConfCostType column
 * @method     ChildConfigIn findOneByIntbconfnormalonly(string $IntbConfNormalOnly) Return the first ChildConfigIn filtered by the IntbConfNormalOnly column
 * @method     ChildConfigIn findOneByIntbconfusewhsedef(string $IntbConfUseWhseDef) Return the first ChildConfigIn filtered by the IntbConfUseWhseDef column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse01(string $IntbCon2DfltWhse01) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse01 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse02(string $IntbCon2DfltWhse02) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse02 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse03(string $IntbCon2DfltWhse03) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse03 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse04(string $IntbCon2DfltWhse04) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse04 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse05(string $IntbCon2DfltWhse05) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse05 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse06(string $IntbCon2DfltWhse06) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse06 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse07(string $IntbCon2DfltWhse07) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse07 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse08(string $IntbCon2DfltWhse08) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse08 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse09(string $IntbCon2DfltWhse09) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse09 column
 * @method     ChildConfigIn findOneByIntbcon2dfltwhse10(string $IntbCon2DfltWhse10) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse10 column
 * @method     ChildConfigIn findOneByIntbconfbindef(string $IntbConfBinDef) Return the first ChildConfigIn filtered by the IntbConfBinDef column
 * @method     ChildConfigIn findOneByIntbconfcycldef(string $IntbConfCyclDef) Return the first ChildConfigIn filtered by the IntbConfCyclDef column
 * @method     ChildConfigIn findOneByIntbconfstatdef(string $IntbConfStatDef) Return the first ChildConfigIn filtered by the IntbConfStatDef column
 * @method     ChildConfigIn findOneByIntbconfabcdef(string $IntbConfAbcDef) Return the first ChildConfigIn filtered by the IntbConfAbcDef column
 * @method     ChildConfigIn findOneByIntbconfspecordrdef(string $IntbConfSpecOrdrDef) Return the first ChildConfigIn filtered by the IntbConfSpecOrdrDef column
 * @method     ChildConfigIn findOneByIntbconfordrpntdef(string $IntbConfOrdrPntDef) Return the first ChildConfigIn filtered by the IntbConfOrdrPntDef column
 * @method     ChildConfigIn findOneByIntbconfmaxdef(string $IntbConfMaxDef) Return the first ChildConfigIn filtered by the IntbConfMaxDef column
 * @method     ChildConfigIn findOneByIntbconfordrqtydef(string $IntbConfOrdrQtyDef) Return the first ChildConfigIn filtered by the IntbConfOrdrQtyDef column
 * @method     ChildConfigIn findOneByIntbconftrcptallowcmpl(string $IntbConfTrcptAllowCmpl) Return the first ChildConfigIn filtered by the IntbConfTrcptAllowCmpl column
 * @method     ChildConfigIn findOneByIntbconftrecmmtstock(string $IntbConfTreCmmtStock) Return the first ChildConfigIn filtered by the IntbConfTreCmmtStock column
 * @method     ChildConfigIn findOneByIntbconfusefrtin(string $IntbConfUseFrtIn) Return the first ChildConfigIn filtered by the IntbConfUseFrtIn column
 * @method     ChildConfigIn findOneByIntbconfeachoruom(string $IntbConfEachOrUom) Return the first ChildConfigIn filtered by the IntbConfEachOrUom column
 * @method     ChildConfigIn findOneByIntbconfneglotcorr(string $IntbConfNegLotCorr) Return the first ChildConfigIn filtered by the IntbConfNegLotCorr column
 * @method     ChildConfigIn findOneByIntbconftrnsglacct(string $IntbConfTrnsGlAcct) Return the first ChildConfigIn filtered by the IntbConfTrnsGlAcct column
 * @method     ChildConfigIn findOneByIntbconftrnsprotstock(string $IntbConfTrnsProtStock) Return the first ChildConfigIn filtered by the IntbConfTrnsProtStock column
 * @method     ChildConfigIn findOneByIntbconfnumericitem(string $IntbConfNumericItem) Return the first ChildConfigIn filtered by the IntbConfNumericItem column
 * @method     ChildConfigIn findOneByIntbconfitemdigits(int $IntbConfItemDigits) Return the first ChildConfigIn filtered by the IntbConfItemDigits column
 * @method     ChildConfigIn findOneByIntbconfsinglewhse(string $IntbConfSingleWhse) Return the first ChildConfigIn filtered by the IntbConfSingleWhse column
 * @method     ChildConfigIn findOneByIntbconfupdusepct(string $IntbConfUpdUsePct) Return the first ChildConfigIn filtered by the IntbConfUpdUsePct column
 * @method     ChildConfigIn findOneByIntbconfupdpric(string $IntbConfUpdPric) Return the first ChildConfigIn filtered by the IntbConfUpdPric column
 * @method     ChildConfigIn findOneByIntbconfupdstdcost(string $IntbConfUpdStdCost) Return the first ChildConfigIn filtered by the IntbConfUpdStdCost column
 * @method     ChildConfigIn findOneByIntbconfupdxrefcost(string $IntbConfUpdXrefCost) Return the first ChildConfigIn filtered by the IntbConfUpdXrefCost column
 * @method     ChildConfigIn findOneByIntbconfiqpaupddate(string $IntbConfIqpaUpdDate) Return the first ChildConfigIn filtered by the IntbConfIqpaUpdDate column
 * @method     ChildConfigIn findOneByIntbconfupcxrefoptn(string $IntbConfUpcXrefOptn) Return the first ChildConfigIn filtered by the IntbConfUpcXrefOptn column
 * @method     ChildConfigIn findOneByIntbconfresqyn(string $IntbConfResqYN) Return the first ChildConfigIn filtered by the IntbConfResqYN column
 * @method     ChildConfigIn findOneByIntbconftranviewlib(string $IntbConfTranViewLIB) Return the first ChildConfigIn filtered by the IntbConfTranViewLIB column
 * @method     ChildConfigIn findOneByIntbconfresvcost(string $IntbConfResvCost) Return the first ChildConfigIn filtered by the IntbConfResvCost column
 * @method     ChildConfigIn findOneByIntbcon2tranzerorqst(string $IntbCon2TranZeroRqst) Return the first ChildConfigIn filtered by the IntbCon2TranZeroRqst column
 * @method     ChildConfigIn findOneByIntbconfmonendadjdate(string $IntbConfMonEndAdjDate) Return the first ChildConfigIn filtered by the IntbConfMonEndAdjDate column
 * @method     ChildConfigIn findOneByIntbconfmonendtrndate(string $IntbConfMonEndTrnDate) Return the first ChildConfigIn filtered by the IntbConfMonEndTrnDate column
 * @method     ChildConfigIn findOneByIntbconfmonendlogdate(string $IntbConfMonEndLogDate) Return the first ChildConfigIn filtered by the IntbConfMonEndLogDate column
 * @method     ChildConfigIn findOneByIntbconfdstatproc(string $IntbConfDStatProc) Return the first ChildConfigIn filtered by the IntbConfDStatProc column
 * @method     ChildConfigIn findOneByIntbconfstancostupd(string $IntbConfStanCostUpd) Return the first ChildConfigIn filtered by the IntbConfStanCostUpd column
 * @method     ChildConfigIn findOneByIntbconflastcost(string $IntbConfLastCost) Return the first ChildConfigIn filtered by the IntbConfLastCost column
 * @method     ChildConfigIn findOneByIntbconfusesorgpct(string $IntbConfUseSOrGPct) Return the first ChildConfigIn filtered by the IntbConfUseSOrGPct column
 * @method     ChildConfigIn findOneByIntbconfaddonstan(string $IntbConfAddOnStan) Return the first ChildConfigIn filtered by the IntbConfAddOnStan column
 * @method     ChildConfigIn findOneByIntbconfstdcosterror(string $IntbConfStdCostError) Return the first ChildConfigIn filtered by the IntbConfStdCostError column
 * @method     ChildConfigIn findOneByIntbconfavgcurrfive(string $IntbConfAvgCurrFive) Return the first ChildConfigIn filtered by the IntbConfAvgCurrFive column
 * @method     ChildConfigIn findOneByIntbconfusecntrlbin(string $IntbConfUseCntrlBin) Return the first ChildConfigIn filtered by the IntbConfUseCntrlBin column
 * @method     ChildConfigIn findOneByIntbconfnbrbinareas(int $IntbConfNbrBinAreas) Return the first ChildConfigIn filtered by the IntbConfNbrBinAreas column
 * @method     ChildConfigIn findOneByIntbconfusemultbin(string $IntbConfUseMultBin) Return the first ChildConfigIn filtered by the IntbConfUseMultBin column
 * @method     ChildConfigIn findOneByIntbconfdfltwhsebin(string $IntbConfDfltWhseBin) Return the first ChildConfigIn filtered by the IntbConfDfltWhseBin column
 * @method     ChildConfigIn findOneByIntbconfdfltbin(string $IntbConfDfltBin) Return the first ChildConfigIn filtered by the IntbConfDfltBin column
 * @method     ChildConfigIn findOneByIntbconfctryitemlot(string $IntbConfCtryItemLot) Return the first ChildConfigIn filtered by the IntbConfCtryItemLot column
 * @method     ChildConfigIn findOneByIntbconfuseshipbin(string $IntbConfUseShipBin) Return the first ChildConfigIn filtered by the IntbConfUseShipBin column
 * @method     ChildConfigIn findOneByIntbcon2prtbinrlabel(string $IntbCon2PrtBinrLabel) Return the first ChildConfigIn filtered by the IntbCon2PrtBinrLabel column
 * @method     ChildConfigIn findOneByIntbcon2itemlookup(string $IntbCon2ItemLookup) Return the first ChildConfigIn filtered by the IntbCon2ItemLookup column
 * @method     ChildConfigIn findOneByIntbconfincldcti(string $IntbConfIncldCti) Return the first ChildConfigIn filtered by the IntbConfIncldCti column
 * @method     ChildConfigIn findOneByIntbconfcertimage(string $IntbConfCertImage) Return the first ChildConfigIn filtered by the IntbConfCertImage column
 * @method     ChildConfigIn findOneByIntbconfdrawimage(string $IntbConfDrawImage) Return the first ChildConfigIn filtered by the IntbConfDrawImage column
 * @method     ChildConfigIn findOneByIntbconfconfirmimage(string $IntbConfConfirmImage) Return the first ChildConfigIn filtered by the IntbConfConfirmImage column
 * @method     ChildConfigIn findOneByIntbcon2productimage(string $IntbCon2ProductImage) Return the first ChildConfigIn filtered by the IntbCon2ProductImage column
 * @method     ChildConfigIn findOneByIntbconfdefpick(string $IntbConfDefPick) Return the first ChildConfigIn filtered by the IntbConfDefPick column
 * @method     ChildConfigIn findOneByIntbconfdefpack(string $IntbConfDefPack) Return the first ChildConfigIn filtered by the IntbConfDefPack column
 * @method     ChildConfigIn findOneByIntbconfdefinvc(string $IntbConfDefInvc) Return the first ChildConfigIn filtered by the IntbConfDefInvc column
 * @method     ChildConfigIn findOneByIntbconfdefack(string $IntbConfDefAck) Return the first ChildConfigIn filtered by the IntbConfDefAck column
 * @method     ChildConfigIn findOneByIntbconfdefquot(string $IntbConfDefQuot) Return the first ChildConfigIn filtered by the IntbConfDefQuot column
 * @method     ChildConfigIn findOneByIntbconfdefpo(string $IntbConfDefPo) Return the first ChildConfigIn filtered by the IntbConfDefPo column
 * @method     ChildConfigIn findOneByIntbconfdeftrans(string $IntbConfDefTrans) Return the first ChildConfigIn filtered by the IntbConfDefTrans column
 * @method     ChildConfigIn findOneByIntbconfadjglcogs(string $IntbConfAdjGlCogs) Return the first ChildConfigIn filtered by the IntbConfAdjGlCogs column
 * @method     ChildConfigIn findOneByIntbcon2dfltadjglacct(string $IntbCon2DfltAdjGlAcct) Return the first ChildConfigIn filtered by the IntbCon2DfltAdjGlAcct column
 * @method     ChildConfigIn findOneByIntbconfadjcostbase(string $IntbConfAdjCostBase) Return the first ChildConfigIn filtered by the IntbConfAdjCostBase column
 * @method     ChildConfigIn findOneByIntbconfdfltadjtbin(string $IntbConfDfltAdjtBin) Return the first ChildConfigIn filtered by the IntbConfDfltAdjtBin column
 * @method     ChildConfigIn findOneByIntbconfadjtbin(string $IntbConfAdjtBin) Return the first ChildConfigIn filtered by the IntbConfAdjtBin column
 * @method     ChildConfigIn findOneByIntbconfcstockseq(string $IntbConfCStockSeq) Return the first ChildConfigIn filtered by the IntbConfCStockSeq column
 * @method     ChildConfigIn findOneByIntbconfcstockhistday(int $IntbConfCStockHistDay) Return the first ChildConfigIn filtered by the IntbConfCStockHistDay column
 * @method     ChildConfigIn findOneByIntbconfcstockformat(string $IntbConfCStockFormat) Return the first ChildConfigIn filtered by the IntbConfCStockFormat column
 * @method     ChildConfigIn findOneByIntbconfcstkexportitem(string $IntbConfCstkExportItem) Return the first ChildConfigIn filtered by the IntbConfCstkExportItem column
 * @method     ChildConfigIn findOneByIntbconfcstkpdmcontract(string $IntbConfCstkPdmContract) Return the first ChildConfigIn filtered by the IntbConfCstkPdmContract column
 * @method     ChildConfigIn findOneByIntbcon2importseq(string $IntbCon2ImportSeq) Return the first ChildConfigIn filtered by the IntbCon2ImportSeq column
 * @method     ChildConfigIn findOneByIntbconfstopitemchg(int $IntbConfStopItemChg) Return the first ChildConfigIn filtered by the IntbConfStopItemChg column
 * @method     ChildConfigIn findOneByIntbconfaddtomxrfe(string $IntbConfAddToMxrfe) Return the first ChildConfigIn filtered by the IntbConfAddToMxrfe column
 * @method     ChildConfigIn findOneByIntbconfmxrfevendid(string $IntbConfMxrfeVendId) Return the first ChildConfigIn filtered by the IntbConfMxrfeVendId column
 * @method     ChildConfigIn findOneByIntbcon2newidlabellist(string $IntbCon2NewIdLabelList) Return the first ChildConfigIn filtered by the IntbCon2NewIdLabelList column
 * @method     ChildConfigIn findOneByIntbconfuseformat(string $IntbConfUseFormat) Return the first ChildConfigIn filtered by the IntbConfUseFormat column
 * @method     ChildConfigIn findOneByIntbconfdefformat(string $IntbConfDefFormat) Return the first ChildConfigIn filtered by the IntbConfDefFormat column
 * @method     ChildConfigIn findOneByIntbconfseqshortitem(string $IntbConfSeqShortItem) Return the first ChildConfigIn filtered by the IntbConfSeqShortItem column
 * @method     ChildConfigIn findOneByIntbconfshortitemlen(int $IntbConfShortItemLen) Return the first ChildConfigIn filtered by the IntbConfShortItemLen column
 * @method     ChildConfigIn findOneByIntbconfusescale(string $IntbConfUseScale) Return the first ChildConfigIn filtered by the IntbConfUseScale column
 * @method     ChildConfigIn findOneByIntbconfstorewght(string $IntbConfStoreWght) Return the first ChildConfigIn filtered by the IntbConfStoreWght column
 * @method     ChildConfigIn findOneByIntbconfvalidasstcode(string $IntbConfValidAsstCode) Return the first ChildConfigIn filtered by the IntbConfValidAsstCode column
 * @method     ChildConfigIn findOneByIntbconfwhitegoods(string $IntbConfWhiteGoods) Return the first ChildConfigIn filtered by the IntbConfWhiteGoods column
 * @method     ChildConfigIn findOneByIntbcon2transcustid(string $IntbCon2TransCustId) Return the first ChildConfigIn filtered by the IntbCon2TransCustId column
 * @method     ChildConfigIn findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIn filtered by the DateUpdtd column
 * @method     ChildConfigIn findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIn filtered by the TimeUpdtd column
 * @method     ChildConfigIn findOneByDummy(string $dummy) Return the first ChildConfigIn filtered by the dummy column *

 * @method     ChildConfigIn requirePk($key, ConnectionInterface $con = null) Return the ChildConfigIn by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOne(ConnectionInterface $con = null) Return the first ChildConfigIn matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigIn requireOneByIntbconfkey(int $IntbConfKey) Return the first ChildConfigIn filtered by the IntbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfglifac(string $IntbConfGlIfac) Return the first ChildConfigIn filtered by the IntbConfGlIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuseiw(string $IntbConfUseIw) Return the first ChildConfigIn filtered by the IntbConfUseIw column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconflifofifo(string $IntbConfLifoFifo) Return the first ChildConfigIn filtered by the IntbConfLifoFifo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfgoneg(string $IntbConfGoNeg) Return the first ChildConfigIn filtered by the IntbConfGoNeg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuselots(string $IntbConfUseLots) Return the first ChildConfigIn filtered by the IntbConfUseLots column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnbruppr(string $IntbConfNbrUppr) Return the first ChildConfigIn filtered by the IntbConfNbrUppr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdescuppr(string $IntbConfDescUppr) Return the first ChildConfigIn filtered by the IntbConfDescUppr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusedesc2(string $IntbConfUseDesc2) Return the first ChildConfigIn filtered by the IntbConfUseDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuseupccode(string $IntbConfUseUpcCode) Return the first ChildConfigIn filtered by the IntbConfUseUpcCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupceancntrl(string $IntbConfUpcEanCntrl) Return the first ChildConfigIn filtered by the IntbConfUpcEanCntrl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupcgennbr(int $IntbConfUpcGenNbr) Return the first ChildConfigIn filtered by the IntbConfUpcGenNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2allowdupupc(string $IntbCon2AllowDupUpc) Return the first ChildConfigIn filtered by the IntbCon2AllowDupUpc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfxrefnospace(string $IntbConfXrefNoSpace) Return the first ChildConfigIn filtered by the IntbConfXrefNoSpace column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusepricgrup(string $IntbConfUsePricGrup) Return the first ChildConfigIn filtered by the IntbConfUsePricGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusecommgrup(string $IntbConfUseCommGrup) Return the first ChildConfigIn filtered by the IntbConfUseCommGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusewarrdays(string $IntbConfUseWarrDays) Return the first ChildConfigIn filtered by the IntbConfUseWarrDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfstanbasedef(string $IntbConfStanBaseDef) Return the first ChildConfigIn filtered by the IntbConfStanBaseDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfgrupdef(string $IntbConfGrupDef) Return the first ChildConfigIn filtered by the IntbConfGrupDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfpricgrupdef(string $IntbConfPricGrupDef) Return the first ChildConfigIn filtered by the IntbConfPricGrupDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcommgrupdef(string $IntbConfCommGrupDef) Return the first ChildConfigIn filtered by the IntbConfCommGrupDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconftypedef(string $IntbConfTypeDef) Return the first ChildConfigIn filtered by the IntbConfTypeDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfpricuseitem(string $IntbConfPricUseItem) Return the first ChildConfigIn filtered by the IntbConfPricUseItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcommuseitem(string $IntbConfCommUseItem) Return the first ChildConfigIn filtered by the IntbConfCommUseItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuomsaledef(string $IntbConfUomSaleDef) Return the first ChildConfigIn filtered by the IntbConfUomSaleDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuompurdef(string $IntbConfUomPurDef) Return the first ChildConfigIn filtered by the IntbConfUomPurDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfsviadef(string $IntbConfSviaDef) Return the first ChildConfigIn filtered by the IntbConfSviaDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcustxreforuse(string $IntbConfCustxrefOrUse) Return the first ChildConfigIn filtered by the IntbConfCustxrefOrUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfheadgetdef(int $IntbConfHeadGetDef) Return the first ChildConfigIn filtered by the IntbConfHeadGetDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfitemgetdef(int $IntbConfItemGetDef) Return the first ChildConfigIn filtered by the IntbConfItemGetDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfgetdispohaval(string $IntbConfGetDispOhAval) Return the first ChildConfigIn filtered by the IntbConfGetDispOhAval column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusercode1labl(string $IntbConfUserCode1Labl) Return the first ChildConfigIn filtered by the IntbConfUserCode1Labl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusercode1ver(string $IntbConfUserCode1Ver) Return the first ChildConfigIn filtered by the IntbConfUserCode1Ver column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusercode2labl(string $IntbConfUserCode2Labl) Return the first ChildConfigIn filtered by the IntbConfUserCode2Labl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusercode2ver(string $IntbConfUserCode2Ver) Return the first ChildConfigIn filtered by the IntbConfUserCode2Ver column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfitemline(int $IntbConfItemLine) Return the first ChildConfigIn filtered by the IntbConfItemLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfitemcols(int $IntbConfItemCols) Return the first ChildConfigIn filtered by the IntbConfItemCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfheadline(int $IntbConfHeadLine) Return the first ChildConfigIn filtered by the IntbConfHeadLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfheadcols(int $IntbConfHeadCols) Return the first ChildConfigIn filtered by the IntbConfHeadCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdetline(int $IntbConfDetLine) Return the first ChildConfigIn filtered by the IntbConfDetLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdetcols(int $IntbConfDetCols) Return the first ChildConfigIn filtered by the IntbConfDetCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfminmaxzero(string $IntbConfMinMaxZero) Return the first ChildConfigIn filtered by the IntbConfMinMaxZero column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfminrec(string $IntbConfMinRec) Return the first ChildConfigIn filtered by the IntbConfMinRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfatbelowmin(string $IntbConfAtBelowMin) Return the first ChildConfigIn filtered by the IntbConfAtBelowMin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfonewhse(string $IntbConfOneWhse) Return the first ChildConfigIn filtered by the IntbConfOneWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfytdmth(int $IntbConfYtdMth) Return the first ChildConfigIn filtered by the IntbConfYtdMth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusegramsltr(string $IntbConfUseGramsLtr) Return the first ChildConfigIn filtered by the IntbConfUseGramsLtr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabcbywhse(string $IntbConfAbcByWhse) Return the first ChildConfigIn filtered by the IntbConfAbcByWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabcnbrmths(int $IntbConfAbcNbrMths) Return the first ChildConfigIn filtered by the IntbConfAbcNbrMths column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabcbasecode(string $IntbConfAbcBaseCode) Return the first ChildConfigIn filtered by the IntbConfAbcBaseCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevla(string $IntbConfAbcLevlA) Return the first ChildConfigIn filtered by the IntbConfAbcLevlA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevlb(string $IntbConfAbcLevlB) Return the first ChildConfigIn filtered by the IntbConfAbcLevlB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevlc(string $IntbConfAbcLevlC) Return the first ChildConfigIn filtered by the IntbConfAbcLevlC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevld(string $IntbConfAbcLevlD) Return the first ChildConfigIn filtered by the IntbConfAbcLevlD column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevle(string $IntbConfAbcLevlE) Return the first ChildConfigIn filtered by the IntbConfAbcLevlE column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevlf(string $IntbConfAbcLevlF) Return the first ChildConfigIn filtered by the IntbConfAbcLevlF column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevlg(string $IntbConfAbcLevlG) Return the first ChildConfigIn filtered by the IntbConfAbcLevlG column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevlh(string $IntbConfAbcLevlH) Return the first ChildConfigIn filtered by the IntbConfAbcLevlH column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevli(string $IntbConfAbcLevlI) Return the first ChildConfigIn filtered by the IntbConfAbcLevlI column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabclevlj(string $IntbConfAbcLevlJ) Return the first ChildConfigIn filtered by the IntbConfAbcLevlJ column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuseforeignx(string $IntbConfUseForeignX) Return the first ChildConfigIn filtered by the IntbConfUseForeignX column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusenafta(string $IntbConfUseNafta) Return the first ChildConfigIn filtered by the IntbConfUseNafta column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnaftaprefcode(string $IntbConfNaftaPrefCode) Return the first ChildConfigIn filtered by the IntbConfNaftaPrefCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnaftaproducer(string $IntbConfNaftaProducer) Return the first ChildConfigIn filtered by the IntbConfNaftaProducer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnaftadoccode(string $IntbConfNaftaDocCode) Return the first ChildConfigIn filtered by the IntbConfNaftaDocCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfphyscurrwksh(string $IntbConfPhysCurrWksh) Return the first ChildConfigIn filtered by the IntbConfPhysCurrWksh column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconf20or30(int $IntbConf20Or30) Return the first ChildConfigIn filtered by the IntbConf20Or30 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdisporigcnt(string $IntbConfDispOrigCnt) Return the first ChildConfigIn filtered by the IntbConfDispOrigCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdispgl(string $IntbConfDispGl) Return the first ChildConfigIn filtered by the IntbConfDispGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdispref(string $IntbConfDispRef) Return the first ChildConfigIn filtered by the IntbConfDispRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdispcost(string $IntbConfDispCost) Return the first ChildConfigIn filtered by the IntbConfDispCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfprtval(string $IntbConfPrtVal) Return the first ChildConfigIn filtered by the IntbConfPrtVal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfprtgl(string $IntbConfPrtGl) Return the first ChildConfigIn filtered by the IntbConfPrtGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfglacct(string $IntbConfGlAcct) Return the first ChildConfigIn filtered by the IntbConfGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfref(string $IntbConfRef) Return the first ChildConfigIn filtered by the IntbConfRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcosttype(string $IntbConfCostType) Return the first ChildConfigIn filtered by the IntbConfCostType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnormalonly(string $IntbConfNormalOnly) Return the first ChildConfigIn filtered by the IntbConfNormalOnly column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusewhsedef(string $IntbConfUseWhseDef) Return the first ChildConfigIn filtered by the IntbConfUseWhseDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse01(string $IntbCon2DfltWhse01) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse02(string $IntbCon2DfltWhse02) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse03(string $IntbCon2DfltWhse03) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse04(string $IntbCon2DfltWhse04) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse05(string $IntbCon2DfltWhse05) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse06(string $IntbCon2DfltWhse06) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse07(string $IntbCon2DfltWhse07) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse08(string $IntbCon2DfltWhse08) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse09(string $IntbCon2DfltWhse09) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltwhse10(string $IntbCon2DfltWhse10) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfbindef(string $IntbConfBinDef) Return the first ChildConfigIn filtered by the IntbConfBinDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcycldef(string $IntbConfCyclDef) Return the first ChildConfigIn filtered by the IntbConfCyclDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfstatdef(string $IntbConfStatDef) Return the first ChildConfigIn filtered by the IntbConfStatDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfabcdef(string $IntbConfAbcDef) Return the first ChildConfigIn filtered by the IntbConfAbcDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfspecordrdef(string $IntbConfSpecOrdrDef) Return the first ChildConfigIn filtered by the IntbConfSpecOrdrDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfordrpntdef(string $IntbConfOrdrPntDef) Return the first ChildConfigIn filtered by the IntbConfOrdrPntDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfmaxdef(string $IntbConfMaxDef) Return the first ChildConfigIn filtered by the IntbConfMaxDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfordrqtydef(string $IntbConfOrdrQtyDef) Return the first ChildConfigIn filtered by the IntbConfOrdrQtyDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconftrcptallowcmpl(string $IntbConfTrcptAllowCmpl) Return the first ChildConfigIn filtered by the IntbConfTrcptAllowCmpl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconftrecmmtstock(string $IntbConfTreCmmtStock) Return the first ChildConfigIn filtered by the IntbConfTreCmmtStock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusefrtin(string $IntbConfUseFrtIn) Return the first ChildConfigIn filtered by the IntbConfUseFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfeachoruom(string $IntbConfEachOrUom) Return the first ChildConfigIn filtered by the IntbConfEachOrUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfneglotcorr(string $IntbConfNegLotCorr) Return the first ChildConfigIn filtered by the IntbConfNegLotCorr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconftrnsglacct(string $IntbConfTrnsGlAcct) Return the first ChildConfigIn filtered by the IntbConfTrnsGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconftrnsprotstock(string $IntbConfTrnsProtStock) Return the first ChildConfigIn filtered by the IntbConfTrnsProtStock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnumericitem(string $IntbConfNumericItem) Return the first ChildConfigIn filtered by the IntbConfNumericItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfitemdigits(int $IntbConfItemDigits) Return the first ChildConfigIn filtered by the IntbConfItemDigits column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfsinglewhse(string $IntbConfSingleWhse) Return the first ChildConfigIn filtered by the IntbConfSingleWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupdusepct(string $IntbConfUpdUsePct) Return the first ChildConfigIn filtered by the IntbConfUpdUsePct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupdpric(string $IntbConfUpdPric) Return the first ChildConfigIn filtered by the IntbConfUpdPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupdstdcost(string $IntbConfUpdStdCost) Return the first ChildConfigIn filtered by the IntbConfUpdStdCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupdxrefcost(string $IntbConfUpdXrefCost) Return the first ChildConfigIn filtered by the IntbConfUpdXrefCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfiqpaupddate(string $IntbConfIqpaUpdDate) Return the first ChildConfigIn filtered by the IntbConfIqpaUpdDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfupcxrefoptn(string $IntbConfUpcXrefOptn) Return the first ChildConfigIn filtered by the IntbConfUpcXrefOptn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfresqyn(string $IntbConfResqYN) Return the first ChildConfigIn filtered by the IntbConfResqYN column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconftranviewlib(string $IntbConfTranViewLIB) Return the first ChildConfigIn filtered by the IntbConfTranViewLIB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfresvcost(string $IntbConfResvCost) Return the first ChildConfigIn filtered by the IntbConfResvCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2tranzerorqst(string $IntbCon2TranZeroRqst) Return the first ChildConfigIn filtered by the IntbCon2TranZeroRqst column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfmonendadjdate(string $IntbConfMonEndAdjDate) Return the first ChildConfigIn filtered by the IntbConfMonEndAdjDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfmonendtrndate(string $IntbConfMonEndTrnDate) Return the first ChildConfigIn filtered by the IntbConfMonEndTrnDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfmonendlogdate(string $IntbConfMonEndLogDate) Return the first ChildConfigIn filtered by the IntbConfMonEndLogDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdstatproc(string $IntbConfDStatProc) Return the first ChildConfigIn filtered by the IntbConfDStatProc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfstancostupd(string $IntbConfStanCostUpd) Return the first ChildConfigIn filtered by the IntbConfStanCostUpd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconflastcost(string $IntbConfLastCost) Return the first ChildConfigIn filtered by the IntbConfLastCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusesorgpct(string $IntbConfUseSOrGPct) Return the first ChildConfigIn filtered by the IntbConfUseSOrGPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfaddonstan(string $IntbConfAddOnStan) Return the first ChildConfigIn filtered by the IntbConfAddOnStan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfstdcosterror(string $IntbConfStdCostError) Return the first ChildConfigIn filtered by the IntbConfStdCostError column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfavgcurrfive(string $IntbConfAvgCurrFive) Return the first ChildConfigIn filtered by the IntbConfAvgCurrFive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusecntrlbin(string $IntbConfUseCntrlBin) Return the first ChildConfigIn filtered by the IntbConfUseCntrlBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfnbrbinareas(int $IntbConfNbrBinAreas) Return the first ChildConfigIn filtered by the IntbConfNbrBinAreas column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusemultbin(string $IntbConfUseMultBin) Return the first ChildConfigIn filtered by the IntbConfUseMultBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdfltwhsebin(string $IntbConfDfltWhseBin) Return the first ChildConfigIn filtered by the IntbConfDfltWhseBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdfltbin(string $IntbConfDfltBin) Return the first ChildConfigIn filtered by the IntbConfDfltBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfctryitemlot(string $IntbConfCtryItemLot) Return the first ChildConfigIn filtered by the IntbConfCtryItemLot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuseshipbin(string $IntbConfUseShipBin) Return the first ChildConfigIn filtered by the IntbConfUseShipBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2prtbinrlabel(string $IntbCon2PrtBinrLabel) Return the first ChildConfigIn filtered by the IntbCon2PrtBinrLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2itemlookup(string $IntbCon2ItemLookup) Return the first ChildConfigIn filtered by the IntbCon2ItemLookup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfincldcti(string $IntbConfIncldCti) Return the first ChildConfigIn filtered by the IntbConfIncldCti column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcertimage(string $IntbConfCertImage) Return the first ChildConfigIn filtered by the IntbConfCertImage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdrawimage(string $IntbConfDrawImage) Return the first ChildConfigIn filtered by the IntbConfDrawImage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfconfirmimage(string $IntbConfConfirmImage) Return the first ChildConfigIn filtered by the IntbConfConfirmImage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2productimage(string $IntbCon2ProductImage) Return the first ChildConfigIn filtered by the IntbCon2ProductImage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefpick(string $IntbConfDefPick) Return the first ChildConfigIn filtered by the IntbConfDefPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefpack(string $IntbConfDefPack) Return the first ChildConfigIn filtered by the IntbConfDefPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefinvc(string $IntbConfDefInvc) Return the first ChildConfigIn filtered by the IntbConfDefInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefack(string $IntbConfDefAck) Return the first ChildConfigIn filtered by the IntbConfDefAck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefquot(string $IntbConfDefQuot) Return the first ChildConfigIn filtered by the IntbConfDefQuot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefpo(string $IntbConfDefPo) Return the first ChildConfigIn filtered by the IntbConfDefPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdeftrans(string $IntbConfDefTrans) Return the first ChildConfigIn filtered by the IntbConfDefTrans column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfadjglcogs(string $IntbConfAdjGlCogs) Return the first ChildConfigIn filtered by the IntbConfAdjGlCogs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2dfltadjglacct(string $IntbCon2DfltAdjGlAcct) Return the first ChildConfigIn filtered by the IntbCon2DfltAdjGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfadjcostbase(string $IntbConfAdjCostBase) Return the first ChildConfigIn filtered by the IntbConfAdjCostBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdfltadjtbin(string $IntbConfDfltAdjtBin) Return the first ChildConfigIn filtered by the IntbConfDfltAdjtBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfadjtbin(string $IntbConfAdjtBin) Return the first ChildConfigIn filtered by the IntbConfAdjtBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcstockseq(string $IntbConfCStockSeq) Return the first ChildConfigIn filtered by the IntbConfCStockSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcstockhistday(int $IntbConfCStockHistDay) Return the first ChildConfigIn filtered by the IntbConfCStockHistDay column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcstockformat(string $IntbConfCStockFormat) Return the first ChildConfigIn filtered by the IntbConfCStockFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcstkexportitem(string $IntbConfCstkExportItem) Return the first ChildConfigIn filtered by the IntbConfCstkExportItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfcstkpdmcontract(string $IntbConfCstkPdmContract) Return the first ChildConfigIn filtered by the IntbConfCstkPdmContract column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2importseq(string $IntbCon2ImportSeq) Return the first ChildConfigIn filtered by the IntbCon2ImportSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfstopitemchg(int $IntbConfStopItemChg) Return the first ChildConfigIn filtered by the IntbConfStopItemChg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfaddtomxrfe(string $IntbConfAddToMxrfe) Return the first ChildConfigIn filtered by the IntbConfAddToMxrfe column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfmxrfevendid(string $IntbConfMxrfeVendId) Return the first ChildConfigIn filtered by the IntbConfMxrfeVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2newidlabellist(string $IntbCon2NewIdLabelList) Return the first ChildConfigIn filtered by the IntbCon2NewIdLabelList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfuseformat(string $IntbConfUseFormat) Return the first ChildConfigIn filtered by the IntbConfUseFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfdefformat(string $IntbConfDefFormat) Return the first ChildConfigIn filtered by the IntbConfDefFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfseqshortitem(string $IntbConfSeqShortItem) Return the first ChildConfigIn filtered by the IntbConfSeqShortItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfshortitemlen(int $IntbConfShortItemLen) Return the first ChildConfigIn filtered by the IntbConfShortItemLen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfusescale(string $IntbConfUseScale) Return the first ChildConfigIn filtered by the IntbConfUseScale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfstorewght(string $IntbConfStoreWght) Return the first ChildConfigIn filtered by the IntbConfStoreWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfvalidasstcode(string $IntbConfValidAsstCode) Return the first ChildConfigIn filtered by the IntbConfValidAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbconfwhitegoods(string $IntbConfWhiteGoods) Return the first ChildConfigIn filtered by the IntbConfWhiteGoods column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByIntbcon2transcustid(string $IntbCon2TransCustId) Return the first ChildConfigIn filtered by the IntbCon2TransCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIn filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIn filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOneByDummy(string $dummy) Return the first ChildConfigIn filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigIn[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigIn objects based on current ModelCriteria
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfkey(int $IntbConfKey) Return ChildConfigIn objects filtered by the IntbConfKey column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfglifac(string $IntbConfGlIfac) Return ChildConfigIn objects filtered by the IntbConfGlIfac column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuseiw(string $IntbConfUseIw) Return ChildConfigIn objects filtered by the IntbConfUseIw column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconflifofifo(string $IntbConfLifoFifo) Return ChildConfigIn objects filtered by the IntbConfLifoFifo column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfgoneg(string $IntbConfGoNeg) Return ChildConfigIn objects filtered by the IntbConfGoNeg column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuselots(string $IntbConfUseLots) Return ChildConfigIn objects filtered by the IntbConfUseLots column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnbruppr(string $IntbConfNbrUppr) Return ChildConfigIn objects filtered by the IntbConfNbrUppr column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdescuppr(string $IntbConfDescUppr) Return ChildConfigIn objects filtered by the IntbConfDescUppr column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusedesc2(string $IntbConfUseDesc2) Return ChildConfigIn objects filtered by the IntbConfUseDesc2 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuseupccode(string $IntbConfUseUpcCode) Return ChildConfigIn objects filtered by the IntbConfUseUpcCode column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupceancntrl(string $IntbConfUpcEanCntrl) Return ChildConfigIn objects filtered by the IntbConfUpcEanCntrl column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupcgennbr(int $IntbConfUpcGenNbr) Return ChildConfigIn objects filtered by the IntbConfUpcGenNbr column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2allowdupupc(string $IntbCon2AllowDupUpc) Return ChildConfigIn objects filtered by the IntbCon2AllowDupUpc column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfxrefnospace(string $IntbConfXrefNoSpace) Return ChildConfigIn objects filtered by the IntbConfXrefNoSpace column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusepricgrup(string $IntbConfUsePricGrup) Return ChildConfigIn objects filtered by the IntbConfUsePricGrup column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusecommgrup(string $IntbConfUseCommGrup) Return ChildConfigIn objects filtered by the IntbConfUseCommGrup column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusewarrdays(string $IntbConfUseWarrDays) Return ChildConfigIn objects filtered by the IntbConfUseWarrDays column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfstanbasedef(string $IntbConfStanBaseDef) Return ChildConfigIn objects filtered by the IntbConfStanBaseDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfgrupdef(string $IntbConfGrupDef) Return ChildConfigIn objects filtered by the IntbConfGrupDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfpricgrupdef(string $IntbConfPricGrupDef) Return ChildConfigIn objects filtered by the IntbConfPricGrupDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcommgrupdef(string $IntbConfCommGrupDef) Return ChildConfigIn objects filtered by the IntbConfCommGrupDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconftypedef(string $IntbConfTypeDef) Return ChildConfigIn objects filtered by the IntbConfTypeDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfpricuseitem(string $IntbConfPricUseItem) Return ChildConfigIn objects filtered by the IntbConfPricUseItem column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcommuseitem(string $IntbConfCommUseItem) Return ChildConfigIn objects filtered by the IntbConfCommUseItem column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuomsaledef(string $IntbConfUomSaleDef) Return ChildConfigIn objects filtered by the IntbConfUomSaleDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuompurdef(string $IntbConfUomPurDef) Return ChildConfigIn objects filtered by the IntbConfUomPurDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfsviadef(string $IntbConfSviaDef) Return ChildConfigIn objects filtered by the IntbConfSviaDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcustxreforuse(string $IntbConfCustxrefOrUse) Return ChildConfigIn objects filtered by the IntbConfCustxrefOrUse column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfheadgetdef(int $IntbConfHeadGetDef) Return ChildConfigIn objects filtered by the IntbConfHeadGetDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfitemgetdef(int $IntbConfItemGetDef) Return ChildConfigIn objects filtered by the IntbConfItemGetDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfgetdispohaval(string $IntbConfGetDispOhAval) Return ChildConfigIn objects filtered by the IntbConfGetDispOhAval column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusercode1labl(string $IntbConfUserCode1Labl) Return ChildConfigIn objects filtered by the IntbConfUserCode1Labl column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusercode1ver(string $IntbConfUserCode1Ver) Return ChildConfigIn objects filtered by the IntbConfUserCode1Ver column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusercode2labl(string $IntbConfUserCode2Labl) Return ChildConfigIn objects filtered by the IntbConfUserCode2Labl column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusercode2ver(string $IntbConfUserCode2Ver) Return ChildConfigIn objects filtered by the IntbConfUserCode2Ver column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfitemline(int $IntbConfItemLine) Return ChildConfigIn objects filtered by the IntbConfItemLine column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfitemcols(int $IntbConfItemCols) Return ChildConfigIn objects filtered by the IntbConfItemCols column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfheadline(int $IntbConfHeadLine) Return ChildConfigIn objects filtered by the IntbConfHeadLine column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfheadcols(int $IntbConfHeadCols) Return ChildConfigIn objects filtered by the IntbConfHeadCols column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdetline(int $IntbConfDetLine) Return ChildConfigIn objects filtered by the IntbConfDetLine column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdetcols(int $IntbConfDetCols) Return ChildConfigIn objects filtered by the IntbConfDetCols column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfminmaxzero(string $IntbConfMinMaxZero) Return ChildConfigIn objects filtered by the IntbConfMinMaxZero column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfminrec(string $IntbConfMinRec) Return ChildConfigIn objects filtered by the IntbConfMinRec column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfatbelowmin(string $IntbConfAtBelowMin) Return ChildConfigIn objects filtered by the IntbConfAtBelowMin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfonewhse(string $IntbConfOneWhse) Return ChildConfigIn objects filtered by the IntbConfOneWhse column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfytdmth(int $IntbConfYtdMth) Return ChildConfigIn objects filtered by the IntbConfYtdMth column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusegramsltr(string $IntbConfUseGramsLtr) Return ChildConfigIn objects filtered by the IntbConfUseGramsLtr column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabcbywhse(string $IntbConfAbcByWhse) Return ChildConfigIn objects filtered by the IntbConfAbcByWhse column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabcnbrmths(int $IntbConfAbcNbrMths) Return ChildConfigIn objects filtered by the IntbConfAbcNbrMths column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabcbasecode(string $IntbConfAbcBaseCode) Return ChildConfigIn objects filtered by the IntbConfAbcBaseCode column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevla(string $IntbConfAbcLevlA) Return ChildConfigIn objects filtered by the IntbConfAbcLevlA column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevlb(string $IntbConfAbcLevlB) Return ChildConfigIn objects filtered by the IntbConfAbcLevlB column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevlc(string $IntbConfAbcLevlC) Return ChildConfigIn objects filtered by the IntbConfAbcLevlC column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevld(string $IntbConfAbcLevlD) Return ChildConfigIn objects filtered by the IntbConfAbcLevlD column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevle(string $IntbConfAbcLevlE) Return ChildConfigIn objects filtered by the IntbConfAbcLevlE column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevlf(string $IntbConfAbcLevlF) Return ChildConfigIn objects filtered by the IntbConfAbcLevlF column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevlg(string $IntbConfAbcLevlG) Return ChildConfigIn objects filtered by the IntbConfAbcLevlG column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevlh(string $IntbConfAbcLevlH) Return ChildConfigIn objects filtered by the IntbConfAbcLevlH column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevli(string $IntbConfAbcLevlI) Return ChildConfigIn objects filtered by the IntbConfAbcLevlI column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabclevlj(string $IntbConfAbcLevlJ) Return ChildConfigIn objects filtered by the IntbConfAbcLevlJ column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuseforeignx(string $IntbConfUseForeignX) Return ChildConfigIn objects filtered by the IntbConfUseForeignX column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusenafta(string $IntbConfUseNafta) Return ChildConfigIn objects filtered by the IntbConfUseNafta column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnaftaprefcode(string $IntbConfNaftaPrefCode) Return ChildConfigIn objects filtered by the IntbConfNaftaPrefCode column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnaftaproducer(string $IntbConfNaftaProducer) Return ChildConfigIn objects filtered by the IntbConfNaftaProducer column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnaftadoccode(string $IntbConfNaftaDocCode) Return ChildConfigIn objects filtered by the IntbConfNaftaDocCode column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfphyscurrwksh(string $IntbConfPhysCurrWksh) Return ChildConfigIn objects filtered by the IntbConfPhysCurrWksh column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconf20or30(int $IntbConf20Or30) Return ChildConfigIn objects filtered by the IntbConf20Or30 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdisporigcnt(string $IntbConfDispOrigCnt) Return ChildConfigIn objects filtered by the IntbConfDispOrigCnt column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdispgl(string $IntbConfDispGl) Return ChildConfigIn objects filtered by the IntbConfDispGl column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdispref(string $IntbConfDispRef) Return ChildConfigIn objects filtered by the IntbConfDispRef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdispcost(string $IntbConfDispCost) Return ChildConfigIn objects filtered by the IntbConfDispCost column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfprtval(string $IntbConfPrtVal) Return ChildConfigIn objects filtered by the IntbConfPrtVal column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfprtgl(string $IntbConfPrtGl) Return ChildConfigIn objects filtered by the IntbConfPrtGl column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfglacct(string $IntbConfGlAcct) Return ChildConfigIn objects filtered by the IntbConfGlAcct column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfref(string $IntbConfRef) Return ChildConfigIn objects filtered by the IntbConfRef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcosttype(string $IntbConfCostType) Return ChildConfigIn objects filtered by the IntbConfCostType column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnormalonly(string $IntbConfNormalOnly) Return ChildConfigIn objects filtered by the IntbConfNormalOnly column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusewhsedef(string $IntbConfUseWhseDef) Return ChildConfigIn objects filtered by the IntbConfUseWhseDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse01(string $IntbCon2DfltWhse01) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse01 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse02(string $IntbCon2DfltWhse02) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse02 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse03(string $IntbCon2DfltWhse03) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse03 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse04(string $IntbCon2DfltWhse04) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse04 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse05(string $IntbCon2DfltWhse05) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse05 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse06(string $IntbCon2DfltWhse06) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse06 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse07(string $IntbCon2DfltWhse07) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse07 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse08(string $IntbCon2DfltWhse08) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse08 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse09(string $IntbCon2DfltWhse09) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse09 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltwhse10(string $IntbCon2DfltWhse10) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse10 column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfbindef(string $IntbConfBinDef) Return ChildConfigIn objects filtered by the IntbConfBinDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcycldef(string $IntbConfCyclDef) Return ChildConfigIn objects filtered by the IntbConfCyclDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfstatdef(string $IntbConfStatDef) Return ChildConfigIn objects filtered by the IntbConfStatDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfabcdef(string $IntbConfAbcDef) Return ChildConfigIn objects filtered by the IntbConfAbcDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfspecordrdef(string $IntbConfSpecOrdrDef) Return ChildConfigIn objects filtered by the IntbConfSpecOrdrDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfordrpntdef(string $IntbConfOrdrPntDef) Return ChildConfigIn objects filtered by the IntbConfOrdrPntDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfmaxdef(string $IntbConfMaxDef) Return ChildConfigIn objects filtered by the IntbConfMaxDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfordrqtydef(string $IntbConfOrdrQtyDef) Return ChildConfigIn objects filtered by the IntbConfOrdrQtyDef column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconftrcptallowcmpl(string $IntbConfTrcptAllowCmpl) Return ChildConfigIn objects filtered by the IntbConfTrcptAllowCmpl column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconftrecmmtstock(string $IntbConfTreCmmtStock) Return ChildConfigIn objects filtered by the IntbConfTreCmmtStock column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusefrtin(string $IntbConfUseFrtIn) Return ChildConfigIn objects filtered by the IntbConfUseFrtIn column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfeachoruom(string $IntbConfEachOrUom) Return ChildConfigIn objects filtered by the IntbConfEachOrUom column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfneglotcorr(string $IntbConfNegLotCorr) Return ChildConfigIn objects filtered by the IntbConfNegLotCorr column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconftrnsglacct(string $IntbConfTrnsGlAcct) Return ChildConfigIn objects filtered by the IntbConfTrnsGlAcct column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconftrnsprotstock(string $IntbConfTrnsProtStock) Return ChildConfigIn objects filtered by the IntbConfTrnsProtStock column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnumericitem(string $IntbConfNumericItem) Return ChildConfigIn objects filtered by the IntbConfNumericItem column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfitemdigits(int $IntbConfItemDigits) Return ChildConfigIn objects filtered by the IntbConfItemDigits column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfsinglewhse(string $IntbConfSingleWhse) Return ChildConfigIn objects filtered by the IntbConfSingleWhse column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupdusepct(string $IntbConfUpdUsePct) Return ChildConfigIn objects filtered by the IntbConfUpdUsePct column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupdpric(string $IntbConfUpdPric) Return ChildConfigIn objects filtered by the IntbConfUpdPric column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupdstdcost(string $IntbConfUpdStdCost) Return ChildConfigIn objects filtered by the IntbConfUpdStdCost column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupdxrefcost(string $IntbConfUpdXrefCost) Return ChildConfigIn objects filtered by the IntbConfUpdXrefCost column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfiqpaupddate(string $IntbConfIqpaUpdDate) Return ChildConfigIn objects filtered by the IntbConfIqpaUpdDate column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfupcxrefoptn(string $IntbConfUpcXrefOptn) Return ChildConfigIn objects filtered by the IntbConfUpcXrefOptn column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfresqyn(string $IntbConfResqYN) Return ChildConfigIn objects filtered by the IntbConfResqYN column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconftranviewlib(string $IntbConfTranViewLIB) Return ChildConfigIn objects filtered by the IntbConfTranViewLIB column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfresvcost(string $IntbConfResvCost) Return ChildConfigIn objects filtered by the IntbConfResvCost column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2tranzerorqst(string $IntbCon2TranZeroRqst) Return ChildConfigIn objects filtered by the IntbCon2TranZeroRqst column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfmonendadjdate(string $IntbConfMonEndAdjDate) Return ChildConfigIn objects filtered by the IntbConfMonEndAdjDate column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfmonendtrndate(string $IntbConfMonEndTrnDate) Return ChildConfigIn objects filtered by the IntbConfMonEndTrnDate column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfmonendlogdate(string $IntbConfMonEndLogDate) Return ChildConfigIn objects filtered by the IntbConfMonEndLogDate column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdstatproc(string $IntbConfDStatProc) Return ChildConfigIn objects filtered by the IntbConfDStatProc column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfstancostupd(string $IntbConfStanCostUpd) Return ChildConfigIn objects filtered by the IntbConfStanCostUpd column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconflastcost(string $IntbConfLastCost) Return ChildConfigIn objects filtered by the IntbConfLastCost column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusesorgpct(string $IntbConfUseSOrGPct) Return ChildConfigIn objects filtered by the IntbConfUseSOrGPct column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfaddonstan(string $IntbConfAddOnStan) Return ChildConfigIn objects filtered by the IntbConfAddOnStan column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfstdcosterror(string $IntbConfStdCostError) Return ChildConfigIn objects filtered by the IntbConfStdCostError column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfavgcurrfive(string $IntbConfAvgCurrFive) Return ChildConfigIn objects filtered by the IntbConfAvgCurrFive column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusecntrlbin(string $IntbConfUseCntrlBin) Return ChildConfigIn objects filtered by the IntbConfUseCntrlBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfnbrbinareas(int $IntbConfNbrBinAreas) Return ChildConfigIn objects filtered by the IntbConfNbrBinAreas column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusemultbin(string $IntbConfUseMultBin) Return ChildConfigIn objects filtered by the IntbConfUseMultBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdfltwhsebin(string $IntbConfDfltWhseBin) Return ChildConfigIn objects filtered by the IntbConfDfltWhseBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdfltbin(string $IntbConfDfltBin) Return ChildConfigIn objects filtered by the IntbConfDfltBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfctryitemlot(string $IntbConfCtryItemLot) Return ChildConfigIn objects filtered by the IntbConfCtryItemLot column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuseshipbin(string $IntbConfUseShipBin) Return ChildConfigIn objects filtered by the IntbConfUseShipBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2prtbinrlabel(string $IntbCon2PrtBinrLabel) Return ChildConfigIn objects filtered by the IntbCon2PrtBinrLabel column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2itemlookup(string $IntbCon2ItemLookup) Return ChildConfigIn objects filtered by the IntbCon2ItemLookup column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfincldcti(string $IntbConfIncldCti) Return ChildConfigIn objects filtered by the IntbConfIncldCti column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcertimage(string $IntbConfCertImage) Return ChildConfigIn objects filtered by the IntbConfCertImage column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdrawimage(string $IntbConfDrawImage) Return ChildConfigIn objects filtered by the IntbConfDrawImage column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfconfirmimage(string $IntbConfConfirmImage) Return ChildConfigIn objects filtered by the IntbConfConfirmImage column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2productimage(string $IntbCon2ProductImage) Return ChildConfigIn objects filtered by the IntbCon2ProductImage column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefpick(string $IntbConfDefPick) Return ChildConfigIn objects filtered by the IntbConfDefPick column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefpack(string $IntbConfDefPack) Return ChildConfigIn objects filtered by the IntbConfDefPack column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefinvc(string $IntbConfDefInvc) Return ChildConfigIn objects filtered by the IntbConfDefInvc column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefack(string $IntbConfDefAck) Return ChildConfigIn objects filtered by the IntbConfDefAck column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefquot(string $IntbConfDefQuot) Return ChildConfigIn objects filtered by the IntbConfDefQuot column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefpo(string $IntbConfDefPo) Return ChildConfigIn objects filtered by the IntbConfDefPo column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdeftrans(string $IntbConfDefTrans) Return ChildConfigIn objects filtered by the IntbConfDefTrans column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfadjglcogs(string $IntbConfAdjGlCogs) Return ChildConfigIn objects filtered by the IntbConfAdjGlCogs column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2dfltadjglacct(string $IntbCon2DfltAdjGlAcct) Return ChildConfigIn objects filtered by the IntbCon2DfltAdjGlAcct column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfadjcostbase(string $IntbConfAdjCostBase) Return ChildConfigIn objects filtered by the IntbConfAdjCostBase column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdfltadjtbin(string $IntbConfDfltAdjtBin) Return ChildConfigIn objects filtered by the IntbConfDfltAdjtBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfadjtbin(string $IntbConfAdjtBin) Return ChildConfigIn objects filtered by the IntbConfAdjtBin column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcstockseq(string $IntbConfCStockSeq) Return ChildConfigIn objects filtered by the IntbConfCStockSeq column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcstockhistday(int $IntbConfCStockHistDay) Return ChildConfigIn objects filtered by the IntbConfCStockHistDay column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcstockformat(string $IntbConfCStockFormat) Return ChildConfigIn objects filtered by the IntbConfCStockFormat column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcstkexportitem(string $IntbConfCstkExportItem) Return ChildConfigIn objects filtered by the IntbConfCstkExportItem column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfcstkpdmcontract(string $IntbConfCstkPdmContract) Return ChildConfigIn objects filtered by the IntbConfCstkPdmContract column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2importseq(string $IntbCon2ImportSeq) Return ChildConfigIn objects filtered by the IntbCon2ImportSeq column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfstopitemchg(int $IntbConfStopItemChg) Return ChildConfigIn objects filtered by the IntbConfStopItemChg column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfaddtomxrfe(string $IntbConfAddToMxrfe) Return ChildConfigIn objects filtered by the IntbConfAddToMxrfe column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfmxrfevendid(string $IntbConfMxrfeVendId) Return ChildConfigIn objects filtered by the IntbConfMxrfeVendId column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2newidlabellist(string $IntbCon2NewIdLabelList) Return ChildConfigIn objects filtered by the IntbCon2NewIdLabelList column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfuseformat(string $IntbConfUseFormat) Return ChildConfigIn objects filtered by the IntbConfUseFormat column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfdefformat(string $IntbConfDefFormat) Return ChildConfigIn objects filtered by the IntbConfDefFormat column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfseqshortitem(string $IntbConfSeqShortItem) Return ChildConfigIn objects filtered by the IntbConfSeqShortItem column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfshortitemlen(int $IntbConfShortItemLen) Return ChildConfigIn objects filtered by the IntbConfShortItemLen column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfusescale(string $IntbConfUseScale) Return ChildConfigIn objects filtered by the IntbConfUseScale column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfstorewght(string $IntbConfStoreWght) Return ChildConfigIn objects filtered by the IntbConfStoreWght column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfvalidasstcode(string $IntbConfValidAsstCode) Return ChildConfigIn objects filtered by the IntbConfValidAsstCode column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbconfwhitegoods(string $IntbConfWhiteGoods) Return ChildConfigIn objects filtered by the IntbConfWhiteGoods column
 * @method     ChildConfigIn[]|ObjectCollection findByIntbcon2transcustid(string $IntbCon2TransCustId) Return ChildConfigIn objects filtered by the IntbCon2TransCustId column
 * @method     ChildConfigIn[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigIn objects filtered by the DateUpdtd column
 * @method     ChildConfigIn[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigIn objects filtered by the TimeUpdtd column
 * @method     ChildConfigIn[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigIn objects filtered by the dummy column
 * @method     ChildConfigIn[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigInQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigInQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigIn', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigInQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigInQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigInQuery) {
            return $criteria;
        }
        $query = new ChildConfigInQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildConfigIn|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigInTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigInTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildConfigIn A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbConfKey, IntbConfGlIfac, IntbConfUseIw, IntbConfLifoFifo, IntbConfGoNeg, IntbConfUseLots, IntbConfNbrUppr, IntbConfDescUppr, IntbConfUseDesc2, IntbConfUseUpcCode, IntbConfUpcEanCntrl, IntbConfUpcGenNbr, IntbCon2AllowDupUpc, IntbConfXrefNoSpace, IntbConfUsePricGrup, IntbConfUseCommGrup, IntbConfUseWarrDays, IntbConfStanBaseDef, IntbConfGrupDef, IntbConfPricGrupDef, IntbConfCommGrupDef, IntbConfTypeDef, IntbConfPricUseItem, IntbConfCommUseItem, IntbConfUomSaleDef, IntbConfUomPurDef, IntbConfSviaDef, IntbConfCustxrefOrUse, IntbConfHeadGetDef, IntbConfItemGetDef, IntbConfGetDispOhAval, IntbConfUserCode1Labl, IntbConfUserCode1Ver, IntbConfUserCode2Labl, IntbConfUserCode2Ver, IntbConfItemLine, IntbConfItemCols, IntbConfHeadLine, IntbConfHeadCols, IntbConfDetLine, IntbConfDetCols, IntbConfMinMaxZero, IntbConfMinRec, IntbConfAtBelowMin, IntbConfOneWhse, IntbConfYtdMth, IntbConfUseGramsLtr, IntbConfAbcByWhse, IntbConfAbcNbrMths, IntbConfAbcBaseCode, IntbConfAbcLevlA, IntbConfAbcLevlB, IntbConfAbcLevlC, IntbConfAbcLevlD, IntbConfAbcLevlE, IntbConfAbcLevlF, IntbConfAbcLevlG, IntbConfAbcLevlH, IntbConfAbcLevlI, IntbConfAbcLevlJ, IntbConfUseForeignX, IntbConfUseNafta, IntbConfNaftaPrefCode, IntbConfNaftaProducer, IntbConfNaftaDocCode, IntbConfPhysCurrWksh, IntbConf20Or30, IntbConfDispOrigCnt, IntbConfDispGl, IntbConfDispRef, IntbConfDispCost, IntbConfPrtVal, IntbConfPrtGl, IntbConfGlAcct, IntbConfRef, IntbConfCostType, IntbConfNormalOnly, IntbConfUseWhseDef, IntbCon2DfltWhse01, IntbCon2DfltWhse02, IntbCon2DfltWhse03, IntbCon2DfltWhse04, IntbCon2DfltWhse05, IntbCon2DfltWhse06, IntbCon2DfltWhse07, IntbCon2DfltWhse08, IntbCon2DfltWhse09, IntbCon2DfltWhse10, IntbConfBinDef, IntbConfCyclDef, IntbConfStatDef, IntbConfAbcDef, IntbConfSpecOrdrDef, IntbConfOrdrPntDef, IntbConfMaxDef, IntbConfOrdrQtyDef, IntbConfTrcptAllowCmpl, IntbConfTreCmmtStock, IntbConfUseFrtIn, IntbConfEachOrUom, IntbConfNegLotCorr, IntbConfTrnsGlAcct, IntbConfTrnsProtStock, IntbConfNumericItem, IntbConfItemDigits, IntbConfSingleWhse, IntbConfUpdUsePct, IntbConfUpdPric, IntbConfUpdStdCost, IntbConfUpdXrefCost, IntbConfIqpaUpdDate, IntbConfUpcXrefOptn, IntbConfResqYN, IntbConfTranViewLIB, IntbConfResvCost, IntbCon2TranZeroRqst, IntbConfMonEndAdjDate, IntbConfMonEndTrnDate, IntbConfMonEndLogDate, IntbConfDStatProc, IntbConfStanCostUpd, IntbConfLastCost, IntbConfUseSOrGPct, IntbConfAddOnStan, IntbConfStdCostError, IntbConfAvgCurrFive, IntbConfUseCntrlBin, IntbConfNbrBinAreas, IntbConfUseMultBin, IntbConfDfltWhseBin, IntbConfDfltBin, IntbConfCtryItemLot, IntbConfUseShipBin, IntbCon2PrtBinrLabel, IntbCon2ItemLookup, IntbConfIncldCti, IntbConfCertImage, IntbConfDrawImage, IntbConfConfirmImage, IntbCon2ProductImage, IntbConfDefPick, IntbConfDefPack, IntbConfDefInvc, IntbConfDefAck, IntbConfDefQuot, IntbConfDefPo, IntbConfDefTrans, IntbConfAdjGlCogs, IntbCon2DfltAdjGlAcct, IntbConfAdjCostBase, IntbConfDfltAdjtBin, IntbConfAdjtBin, IntbConfCStockSeq, IntbConfCStockHistDay, IntbConfCStockFormat, IntbConfCstkExportItem, IntbConfCstkPdmContract, IntbCon2ImportSeq, IntbConfStopItemChg, IntbConfAddToMxrfe, IntbConfMxrfeVendId, IntbCon2NewIdLabelList, IntbConfUseFormat, IntbConfDefFormat, IntbConfSeqShortItem, IntbConfShortItemLen, IntbConfUseScale, IntbConfStoreWght, IntbConfValidAsstCode, IntbConfWhiteGoods, IntbCon2TransCustId, DateUpdtd, TimeUpdtd, dummy FROM in_config WHERE IntbConfKey = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildConfigIn $obj */
            $obj = new ChildConfigIn();
            $obj->hydrate($row);
            ConfigInTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildConfigIn|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfkey(1234); // WHERE IntbConfKey = 1234
     * $query->filterByIntbconfkey(array(12, 34)); // WHERE IntbConfKey IN (12, 34)
     * $query->filterByIntbconfkey(array('min' => 12)); // WHERE IntbConfKey > 12
     * </code>
     *
     * @param     mixed $intbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfkey($intbconfkey = null, $comparison = null)
    {
        if (is_array($intbconfkey)) {
            $useMinMax = false;
            if (isset($intbconfkey['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $intbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfkey['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $intbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $intbconfkey, $comparison);
    }

    /**
     * Filter the query on the IntbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfglifac('fooValue');   // WHERE IntbConfGlIfac = 'fooValue'
     * $query->filterByIntbconfglifac('%fooValue%', Criteria::LIKE); // WHERE IntbConfGlIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfglifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfglifac($intbconfglifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGLIFAC, $intbconfglifac, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseIw column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseiw('fooValue');   // WHERE IntbConfUseIw = 'fooValue'
     * $query->filterByIntbconfuseiw('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseIw LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuseiw The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuseiw($intbconfuseiw = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseiw)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEIW, $intbconfuseiw, $comparison);
    }

    /**
     * Filter the query on the IntbConfLifoFifo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconflifofifo('fooValue');   // WHERE IntbConfLifoFifo = 'fooValue'
     * $query->filterByIntbconflifofifo('%fooValue%', Criteria::LIKE); // WHERE IntbConfLifoFifo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconflifofifo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconflifofifo($intbconflifofifo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconflifofifo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFLIFOFIFO, $intbconflifofifo, $comparison);
    }

    /**
     * Filter the query on the IntbConfGoNeg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfgoneg('fooValue');   // WHERE IntbConfGoNeg = 'fooValue'
     * $query->filterByIntbconfgoneg('%fooValue%', Criteria::LIKE); // WHERE IntbConfGoNeg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfgoneg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfgoneg($intbconfgoneg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfgoneg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGONEG, $intbconfgoneg, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseLots column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuselots('fooValue');   // WHERE IntbConfUseLots = 'fooValue'
     * $query->filterByIntbconfuselots('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseLots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuselots The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuselots($intbconfuselots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuselots)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSELOTS, $intbconfuselots, $comparison);
    }

    /**
     * Filter the query on the IntbConfNbrUppr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnbruppr('fooValue');   // WHERE IntbConfNbrUppr = 'fooValue'
     * $query->filterByIntbconfnbruppr('%fooValue%', Criteria::LIKE); // WHERE IntbConfNbrUppr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfnbruppr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnbruppr($intbconfnbruppr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnbruppr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNBRUPPR, $intbconfnbruppr, $comparison);
    }

    /**
     * Filter the query on the IntbConfDescUppr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdescuppr('fooValue');   // WHERE IntbConfDescUppr = 'fooValue'
     * $query->filterByIntbconfdescuppr('%fooValue%', Criteria::LIKE); // WHERE IntbConfDescUppr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdescuppr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdescuppr($intbconfdescuppr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdescuppr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDESCUPPR, $intbconfdescuppr, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusedesc2('fooValue');   // WHERE IntbConfUseDesc2 = 'fooValue'
     * $query->filterByIntbconfusedesc2('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusedesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusedesc2($intbconfusedesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusedesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEDESC2, $intbconfusedesc2, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseUpcCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseupccode('fooValue');   // WHERE IntbConfUseUpcCode = 'fooValue'
     * $query->filterByIntbconfuseupccode('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseUpcCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuseupccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuseupccode($intbconfuseupccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseupccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEUPCCODE, $intbconfuseupccode, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpcEanCntrl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupceancntrl('fooValue');   // WHERE IntbConfUpcEanCntrl = 'fooValue'
     * $query->filterByIntbconfupceancntrl('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpcEanCntrl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfupceancntrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupceancntrl($intbconfupceancntrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupceancntrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL, $intbconfupceancntrl, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpcGenNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupcgennbr(1234); // WHERE IntbConfUpcGenNbr = 1234
     * $query->filterByIntbconfupcgennbr(array(12, 34)); // WHERE IntbConfUpcGenNbr IN (12, 34)
     * $query->filterByIntbconfupcgennbr(array('min' => 12)); // WHERE IntbConfUpcGenNbr > 12
     * </code>
     *
     * @param     mixed $intbconfupcgennbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupcgennbr($intbconfupcgennbr = null, $comparison = null)
    {
        if (is_array($intbconfupcgennbr)) {
            $useMinMax = false;
            if (isset($intbconfupcgennbr['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCGENNBR, $intbconfupcgennbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfupcgennbr['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCGENNBR, $intbconfupcgennbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCGENNBR, $intbconfupcgennbr, $comparison);
    }

    /**
     * Filter the query on the IntbCon2AllowDupUpc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2allowdupupc('fooValue');   // WHERE IntbCon2AllowDupUpc = 'fooValue'
     * $query->filterByIntbcon2allowdupupc('%fooValue%', Criteria::LIKE); // WHERE IntbCon2AllowDupUpc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2allowdupupc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2allowdupupc($intbcon2allowdupupc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2allowdupupc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC, $intbcon2allowdupupc, $comparison);
    }

    /**
     * Filter the query on the IntbConfXrefNoSpace column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfxrefnospace('fooValue');   // WHERE IntbConfXrefNoSpace = 'fooValue'
     * $query->filterByIntbconfxrefnospace('%fooValue%', Criteria::LIKE); // WHERE IntbConfXrefNoSpace LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfxrefnospace The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfxrefnospace($intbconfxrefnospace = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfxrefnospace)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFXREFNOSPACE, $intbconfxrefnospace, $comparison);
    }

    /**
     * Filter the query on the IntbConfUsePricGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusepricgrup('fooValue');   // WHERE IntbConfUsePricGrup = 'fooValue'
     * $query->filterByIntbconfusepricgrup('%fooValue%', Criteria::LIKE); // WHERE IntbConfUsePricGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusepricgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusepricgrup($intbconfusepricgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusepricgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP, $intbconfusepricgrup, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseCommGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusecommgrup('fooValue');   // WHERE IntbConfUseCommGrup = 'fooValue'
     * $query->filterByIntbconfusecommgrup('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseCommGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusecommgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusecommgrup($intbconfusecommgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusecommgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP, $intbconfusecommgrup, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseWarrDays column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusewarrdays('fooValue');   // WHERE IntbConfUseWarrDays = 'fooValue'
     * $query->filterByIntbconfusewarrdays('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseWarrDays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusewarrdays The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusewarrdays($intbconfusewarrdays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusewarrdays)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS, $intbconfusewarrdays, $comparison);
    }

    /**
     * Filter the query on the IntbConfStanBaseDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstanbasedef('fooValue');   // WHERE IntbConfStanBaseDef = 'fooValue'
     * $query->filterByIntbconfstanbasedef('%fooValue%', Criteria::LIKE); // WHERE IntbConfStanBaseDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfstanbasedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfstanbasedef($intbconfstanbasedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstanbasedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTANBASEDEF, $intbconfstanbasedef, $comparison);
    }

    /**
     * Filter the query on the IntbConfGrupDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfgrupdef('fooValue');   // WHERE IntbConfGrupDef = 'fooValue'
     * $query->filterByIntbconfgrupdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfGrupDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfgrupdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfgrupdef($intbconfgrupdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfgrupdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGRUPDEF, $intbconfgrupdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfPricGrupDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfpricgrupdef('fooValue');   // WHERE IntbConfPricGrupDef = 'fooValue'
     * $query->filterByIntbconfpricgrupdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfPricGrupDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfpricgrupdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfpricgrupdef($intbconfpricgrupdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfpricgrupdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF, $intbconfpricgrupdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfCommGrupDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcommgrupdef('fooValue');   // WHERE IntbConfCommGrupDef = 'fooValue'
     * $query->filterByIntbconfcommgrupdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfCommGrupDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcommgrupdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcommgrupdef($intbconfcommgrupdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcommgrupdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF, $intbconfcommgrupdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfTypeDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftypedef('fooValue');   // WHERE IntbConfTypeDef = 'fooValue'
     * $query->filterByIntbconftypedef('%fooValue%', Criteria::LIKE); // WHERE IntbConfTypeDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconftypedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconftypedef($intbconftypedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftypedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTYPEDEF, $intbconftypedef, $comparison);
    }

    /**
     * Filter the query on the IntbConfPricUseItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfpricuseitem('fooValue');   // WHERE IntbConfPricUseItem = 'fooValue'
     * $query->filterByIntbconfpricuseitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfPricUseItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfpricuseitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfpricuseitem($intbconfpricuseitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfpricuseitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRICUSEITEM, $intbconfpricuseitem, $comparison);
    }

    /**
     * Filter the query on the IntbConfCommUseItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcommuseitem('fooValue');   // WHERE IntbConfCommUseItem = 'fooValue'
     * $query->filterByIntbconfcommuseitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfCommUseItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcommuseitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcommuseitem($intbconfcommuseitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcommuseitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM, $intbconfcommuseitem, $comparison);
    }

    /**
     * Filter the query on the IntbConfUomSaleDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuomsaledef('fooValue');   // WHERE IntbConfUomSaleDef = 'fooValue'
     * $query->filterByIntbconfuomsaledef('%fooValue%', Criteria::LIKE); // WHERE IntbConfUomSaleDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuomsaledef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuomsaledef($intbconfuomsaledef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuomsaledef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUOMSALEDEF, $intbconfuomsaledef, $comparison);
    }

    /**
     * Filter the query on the IntbConfUomPurDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuompurdef('fooValue');   // WHERE IntbConfUomPurDef = 'fooValue'
     * $query->filterByIntbconfuompurdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfUomPurDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuompurdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuompurdef($intbconfuompurdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuompurdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUOMPURDEF, $intbconfuompurdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfSviaDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfsviadef('fooValue');   // WHERE IntbConfSviaDef = 'fooValue'
     * $query->filterByIntbconfsviadef('%fooValue%', Criteria::LIKE); // WHERE IntbConfSviaDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfsviadef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfsviadef($intbconfsviadef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfsviadef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSVIADEF, $intbconfsviadef, $comparison);
    }

    /**
     * Filter the query on the IntbConfCustxrefOrUse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcustxreforuse('fooValue');   // WHERE IntbConfCustxrefOrUse = 'fooValue'
     * $query->filterByIntbconfcustxreforuse('%fooValue%', Criteria::LIKE); // WHERE IntbConfCustxrefOrUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcustxreforuse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcustxreforuse($intbconfcustxreforuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcustxreforuse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE, $intbconfcustxreforuse, $comparison);
    }

    /**
     * Filter the query on the IntbConfHeadGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfheadgetdef(1234); // WHERE IntbConfHeadGetDef = 1234
     * $query->filterByIntbconfheadgetdef(array(12, 34)); // WHERE IntbConfHeadGetDef IN (12, 34)
     * $query->filterByIntbconfheadgetdef(array('min' => 12)); // WHERE IntbConfHeadGetDef > 12
     * </code>
     *
     * @param     mixed $intbconfheadgetdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfheadgetdef($intbconfheadgetdef = null, $comparison = null)
    {
        if (is_array($intbconfheadgetdef)) {
            $useMinMax = false;
            if (isset($intbconfheadgetdef['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADGETDEF, $intbconfheadgetdef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfheadgetdef['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADGETDEF, $intbconfheadgetdef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADGETDEF, $intbconfheadgetdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfItemGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfitemgetdef(1234); // WHERE IntbConfItemGetDef = 1234
     * $query->filterByIntbconfitemgetdef(array(12, 34)); // WHERE IntbConfItemGetDef IN (12, 34)
     * $query->filterByIntbconfitemgetdef(array('min' => 12)); // WHERE IntbConfItemGetDef > 12
     * </code>
     *
     * @param     mixed $intbconfitemgetdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfitemgetdef($intbconfitemgetdef = null, $comparison = null)
    {
        if (is_array($intbconfitemgetdef)) {
            $useMinMax = false;
            if (isset($intbconfitemgetdef['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMGETDEF, $intbconfitemgetdef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfitemgetdef['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMGETDEF, $intbconfitemgetdef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMGETDEF, $intbconfitemgetdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfGetDispOhAval column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfgetdispohaval('fooValue');   // WHERE IntbConfGetDispOhAval = 'fooValue'
     * $query->filterByIntbconfgetdispohaval('%fooValue%', Criteria::LIKE); // WHERE IntbConfGetDispOhAval LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfgetdispohaval The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfgetdispohaval($intbconfgetdispohaval = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfgetdispohaval)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL, $intbconfgetdispohaval, $comparison);
    }

    /**
     * Filter the query on the IntbConfUserCode1Labl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode1labl('fooValue');   // WHERE IntbConfUserCode1Labl = 'fooValue'
     * $query->filterByIntbconfusercode1labl('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode1Labl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusercode1labl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusercode1labl($intbconfusercode1labl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode1labl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL, $intbconfusercode1labl, $comparison);
    }

    /**
     * Filter the query on the IntbConfUserCode1Ver column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode1ver('fooValue');   // WHERE IntbConfUserCode1Ver = 'fooValue'
     * $query->filterByIntbconfusercode1ver('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode1Ver LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusercode1ver The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusercode1ver($intbconfusercode1ver = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode1ver)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE1VER, $intbconfusercode1ver, $comparison);
    }

    /**
     * Filter the query on the IntbConfUserCode2Labl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode2labl('fooValue');   // WHERE IntbConfUserCode2Labl = 'fooValue'
     * $query->filterByIntbconfusercode2labl('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode2Labl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusercode2labl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusercode2labl($intbconfusercode2labl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode2labl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL, $intbconfusercode2labl, $comparison);
    }

    /**
     * Filter the query on the IntbConfUserCode2Ver column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode2ver('fooValue');   // WHERE IntbConfUserCode2Ver = 'fooValue'
     * $query->filterByIntbconfusercode2ver('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode2Ver LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusercode2ver The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusercode2ver($intbconfusercode2ver = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode2ver)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE2VER, $intbconfusercode2ver, $comparison);
    }

    /**
     * Filter the query on the IntbConfItemLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfitemline(1234); // WHERE IntbConfItemLine = 1234
     * $query->filterByIntbconfitemline(array(12, 34)); // WHERE IntbConfItemLine IN (12, 34)
     * $query->filterByIntbconfitemline(array('min' => 12)); // WHERE IntbConfItemLine > 12
     * </code>
     *
     * @param     mixed $intbconfitemline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfitemline($intbconfitemline = null, $comparison = null)
    {
        if (is_array($intbconfitemline)) {
            $useMinMax = false;
            if (isset($intbconfitemline['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMLINE, $intbconfitemline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfitemline['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMLINE, $intbconfitemline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMLINE, $intbconfitemline, $comparison);
    }

    /**
     * Filter the query on the IntbConfItemCols column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfitemcols(1234); // WHERE IntbConfItemCols = 1234
     * $query->filterByIntbconfitemcols(array(12, 34)); // WHERE IntbConfItemCols IN (12, 34)
     * $query->filterByIntbconfitemcols(array('min' => 12)); // WHERE IntbConfItemCols > 12
     * </code>
     *
     * @param     mixed $intbconfitemcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfitemcols($intbconfitemcols = null, $comparison = null)
    {
        if (is_array($intbconfitemcols)) {
            $useMinMax = false;
            if (isset($intbconfitemcols['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMCOLS, $intbconfitemcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfitemcols['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMCOLS, $intbconfitemcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMCOLS, $intbconfitemcols, $comparison);
    }

    /**
     * Filter the query on the IntbConfHeadLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfheadline(1234); // WHERE IntbConfHeadLine = 1234
     * $query->filterByIntbconfheadline(array(12, 34)); // WHERE IntbConfHeadLine IN (12, 34)
     * $query->filterByIntbconfheadline(array('min' => 12)); // WHERE IntbConfHeadLine > 12
     * </code>
     *
     * @param     mixed $intbconfheadline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfheadline($intbconfheadline = null, $comparison = null)
    {
        if (is_array($intbconfheadline)) {
            $useMinMax = false;
            if (isset($intbconfheadline['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADLINE, $intbconfheadline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfheadline['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADLINE, $intbconfheadline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADLINE, $intbconfheadline, $comparison);
    }

    /**
     * Filter the query on the IntbConfHeadCols column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfheadcols(1234); // WHERE IntbConfHeadCols = 1234
     * $query->filterByIntbconfheadcols(array(12, 34)); // WHERE IntbConfHeadCols IN (12, 34)
     * $query->filterByIntbconfheadcols(array('min' => 12)); // WHERE IntbConfHeadCols > 12
     * </code>
     *
     * @param     mixed $intbconfheadcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfheadcols($intbconfheadcols = null, $comparison = null)
    {
        if (is_array($intbconfheadcols)) {
            $useMinMax = false;
            if (isset($intbconfheadcols['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADCOLS, $intbconfheadcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfheadcols['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADCOLS, $intbconfheadcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADCOLS, $intbconfheadcols, $comparison);
    }

    /**
     * Filter the query on the IntbConfDetLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdetline(1234); // WHERE IntbConfDetLine = 1234
     * $query->filterByIntbconfdetline(array(12, 34)); // WHERE IntbConfDetLine IN (12, 34)
     * $query->filterByIntbconfdetline(array('min' => 12)); // WHERE IntbConfDetLine > 12
     * </code>
     *
     * @param     mixed $intbconfdetline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdetline($intbconfdetline = null, $comparison = null)
    {
        if (is_array($intbconfdetline)) {
            $useMinMax = false;
            if (isset($intbconfdetline['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETLINE, $intbconfdetline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfdetline['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETLINE, $intbconfdetline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETLINE, $intbconfdetline, $comparison);
    }

    /**
     * Filter the query on the IntbConfDetCols column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdetcols(1234); // WHERE IntbConfDetCols = 1234
     * $query->filterByIntbconfdetcols(array(12, 34)); // WHERE IntbConfDetCols IN (12, 34)
     * $query->filterByIntbconfdetcols(array('min' => 12)); // WHERE IntbConfDetCols > 12
     * </code>
     *
     * @param     mixed $intbconfdetcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdetcols($intbconfdetcols = null, $comparison = null)
    {
        if (is_array($intbconfdetcols)) {
            $useMinMax = false;
            if (isset($intbconfdetcols['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETCOLS, $intbconfdetcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfdetcols['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETCOLS, $intbconfdetcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETCOLS, $intbconfdetcols, $comparison);
    }

    /**
     * Filter the query on the IntbConfMinMaxZero column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfminmaxzero('fooValue');   // WHERE IntbConfMinMaxZero = 'fooValue'
     * $query->filterByIntbconfminmaxzero('%fooValue%', Criteria::LIKE); // WHERE IntbConfMinMaxZero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfminmaxzero The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfminmaxzero($intbconfminmaxzero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfminmaxzero)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMINMAXZERO, $intbconfminmaxzero, $comparison);
    }

    /**
     * Filter the query on the IntbConfMinRec column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfminrec('fooValue');   // WHERE IntbConfMinRec = 'fooValue'
     * $query->filterByIntbconfminrec('%fooValue%', Criteria::LIKE); // WHERE IntbConfMinRec LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfminrec The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfminrec($intbconfminrec = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfminrec)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMINREC, $intbconfminrec, $comparison);
    }

    /**
     * Filter the query on the IntbConfAtBelowMin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfatbelowmin('fooValue');   // WHERE IntbConfAtBelowMin = 'fooValue'
     * $query->filterByIntbconfatbelowmin('%fooValue%', Criteria::LIKE); // WHERE IntbConfAtBelowMin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfatbelowmin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfatbelowmin($intbconfatbelowmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfatbelowmin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFATBELOWMIN, $intbconfatbelowmin, $comparison);
    }

    /**
     * Filter the query on the IntbConfOneWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfonewhse('fooValue');   // WHERE IntbConfOneWhse = 'fooValue'
     * $query->filterByIntbconfonewhse('%fooValue%', Criteria::LIKE); // WHERE IntbConfOneWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfonewhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfonewhse($intbconfonewhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfonewhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFONEWHSE, $intbconfonewhse, $comparison);
    }

    /**
     * Filter the query on the IntbConfYtdMth column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfytdmth(1234); // WHERE IntbConfYtdMth = 1234
     * $query->filterByIntbconfytdmth(array(12, 34)); // WHERE IntbConfYtdMth IN (12, 34)
     * $query->filterByIntbconfytdmth(array('min' => 12)); // WHERE IntbConfYtdMth > 12
     * </code>
     *
     * @param     mixed $intbconfytdmth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfytdmth($intbconfytdmth = null, $comparison = null)
    {
        if (is_array($intbconfytdmth)) {
            $useMinMax = false;
            if (isset($intbconfytdmth['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFYTDMTH, $intbconfytdmth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfytdmth['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFYTDMTH, $intbconfytdmth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFYTDMTH, $intbconfytdmth, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseGramsLtr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusegramsltr('fooValue');   // WHERE IntbConfUseGramsLtr = 'fooValue'
     * $query->filterByIntbconfusegramsltr('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseGramsLtr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusegramsltr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusegramsltr($intbconfusegramsltr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusegramsltr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR, $intbconfusegramsltr, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcByWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcbywhse('fooValue');   // WHERE IntbConfAbcByWhse = 'fooValue'
     * $query->filterByIntbconfabcbywhse('%fooValue%', Criteria::LIKE); // WHERE IntbConfAbcByWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfabcbywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabcbywhse($intbconfabcbywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfabcbywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCBYWHSE, $intbconfabcbywhse, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcNbrMths column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcnbrmths(1234); // WHERE IntbConfAbcNbrMths = 1234
     * $query->filterByIntbconfabcnbrmths(array(12, 34)); // WHERE IntbConfAbcNbrMths IN (12, 34)
     * $query->filterByIntbconfabcnbrmths(array('min' => 12)); // WHERE IntbConfAbcNbrMths > 12
     * </code>
     *
     * @param     mixed $intbconfabcnbrmths The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabcnbrmths($intbconfabcnbrmths = null, $comparison = null)
    {
        if (is_array($intbconfabcnbrmths)) {
            $useMinMax = false;
            if (isset($intbconfabcnbrmths['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCNBRMTHS, $intbconfabcnbrmths['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabcnbrmths['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCNBRMTHS, $intbconfabcnbrmths['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCNBRMTHS, $intbconfabcnbrmths, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcBaseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcbasecode('fooValue');   // WHERE IntbConfAbcBaseCode = 'fooValue'
     * $query->filterByIntbconfabcbasecode('%fooValue%', Criteria::LIKE); // WHERE IntbConfAbcBaseCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfabcbasecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabcbasecode($intbconfabcbasecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfabcbasecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCBASECODE, $intbconfabcbasecode, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlA column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevla(1234); // WHERE IntbConfAbcLevlA = 1234
     * $query->filterByIntbconfabclevla(array(12, 34)); // WHERE IntbConfAbcLevlA IN (12, 34)
     * $query->filterByIntbconfabclevla(array('min' => 12)); // WHERE IntbConfAbcLevlA > 12
     * </code>
     *
     * @param     mixed $intbconfabclevla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevla($intbconfabclevla = null, $comparison = null)
    {
        if (is_array($intbconfabclevla)) {
            $useMinMax = false;
            if (isset($intbconfabclevla['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLA, $intbconfabclevla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevla['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLA, $intbconfabclevla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLA, $intbconfabclevla, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlB column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevlb(1234); // WHERE IntbConfAbcLevlB = 1234
     * $query->filterByIntbconfabclevlb(array(12, 34)); // WHERE IntbConfAbcLevlB IN (12, 34)
     * $query->filterByIntbconfabclevlb(array('min' => 12)); // WHERE IntbConfAbcLevlB > 12
     * </code>
     *
     * @param     mixed $intbconfabclevlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevlb($intbconfabclevlb = null, $comparison = null)
    {
        if (is_array($intbconfabclevlb)) {
            $useMinMax = false;
            if (isset($intbconfabclevlb['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLB, $intbconfabclevlb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevlb['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLB, $intbconfabclevlb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLB, $intbconfabclevlb, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlC column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevlc(1234); // WHERE IntbConfAbcLevlC = 1234
     * $query->filterByIntbconfabclevlc(array(12, 34)); // WHERE IntbConfAbcLevlC IN (12, 34)
     * $query->filterByIntbconfabclevlc(array('min' => 12)); // WHERE IntbConfAbcLevlC > 12
     * </code>
     *
     * @param     mixed $intbconfabclevlc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevlc($intbconfabclevlc = null, $comparison = null)
    {
        if (is_array($intbconfabclevlc)) {
            $useMinMax = false;
            if (isset($intbconfabclevlc['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLC, $intbconfabclevlc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevlc['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLC, $intbconfabclevlc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLC, $intbconfabclevlc, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlD column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevld(1234); // WHERE IntbConfAbcLevlD = 1234
     * $query->filterByIntbconfabclevld(array(12, 34)); // WHERE IntbConfAbcLevlD IN (12, 34)
     * $query->filterByIntbconfabclevld(array('min' => 12)); // WHERE IntbConfAbcLevlD > 12
     * </code>
     *
     * @param     mixed $intbconfabclevld The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevld($intbconfabclevld = null, $comparison = null)
    {
        if (is_array($intbconfabclevld)) {
            $useMinMax = false;
            if (isset($intbconfabclevld['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLD, $intbconfabclevld['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevld['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLD, $intbconfabclevld['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLD, $intbconfabclevld, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlE column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevle(1234); // WHERE IntbConfAbcLevlE = 1234
     * $query->filterByIntbconfabclevle(array(12, 34)); // WHERE IntbConfAbcLevlE IN (12, 34)
     * $query->filterByIntbconfabclevle(array('min' => 12)); // WHERE IntbConfAbcLevlE > 12
     * </code>
     *
     * @param     mixed $intbconfabclevle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevle($intbconfabclevle = null, $comparison = null)
    {
        if (is_array($intbconfabclevle)) {
            $useMinMax = false;
            if (isset($intbconfabclevle['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLE, $intbconfabclevle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevle['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLE, $intbconfabclevle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLE, $intbconfabclevle, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlF column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevlf(1234); // WHERE IntbConfAbcLevlF = 1234
     * $query->filterByIntbconfabclevlf(array(12, 34)); // WHERE IntbConfAbcLevlF IN (12, 34)
     * $query->filterByIntbconfabclevlf(array('min' => 12)); // WHERE IntbConfAbcLevlF > 12
     * </code>
     *
     * @param     mixed $intbconfabclevlf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevlf($intbconfabclevlf = null, $comparison = null)
    {
        if (is_array($intbconfabclevlf)) {
            $useMinMax = false;
            if (isset($intbconfabclevlf['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLF, $intbconfabclevlf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevlf['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLF, $intbconfabclevlf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLF, $intbconfabclevlf, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlG column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevlg(1234); // WHERE IntbConfAbcLevlG = 1234
     * $query->filterByIntbconfabclevlg(array(12, 34)); // WHERE IntbConfAbcLevlG IN (12, 34)
     * $query->filterByIntbconfabclevlg(array('min' => 12)); // WHERE IntbConfAbcLevlG > 12
     * </code>
     *
     * @param     mixed $intbconfabclevlg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevlg($intbconfabclevlg = null, $comparison = null)
    {
        if (is_array($intbconfabclevlg)) {
            $useMinMax = false;
            if (isset($intbconfabclevlg['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLG, $intbconfabclevlg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevlg['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLG, $intbconfabclevlg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLG, $intbconfabclevlg, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlH column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevlh(1234); // WHERE IntbConfAbcLevlH = 1234
     * $query->filterByIntbconfabclevlh(array(12, 34)); // WHERE IntbConfAbcLevlH IN (12, 34)
     * $query->filterByIntbconfabclevlh(array('min' => 12)); // WHERE IntbConfAbcLevlH > 12
     * </code>
     *
     * @param     mixed $intbconfabclevlh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevlh($intbconfabclevlh = null, $comparison = null)
    {
        if (is_array($intbconfabclevlh)) {
            $useMinMax = false;
            if (isset($intbconfabclevlh['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLH, $intbconfabclevlh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevlh['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLH, $intbconfabclevlh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLH, $intbconfabclevlh, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlI column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevli(1234); // WHERE IntbConfAbcLevlI = 1234
     * $query->filterByIntbconfabclevli(array(12, 34)); // WHERE IntbConfAbcLevlI IN (12, 34)
     * $query->filterByIntbconfabclevli(array('min' => 12)); // WHERE IntbConfAbcLevlI > 12
     * </code>
     *
     * @param     mixed $intbconfabclevli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevli($intbconfabclevli = null, $comparison = null)
    {
        if (is_array($intbconfabclevli)) {
            $useMinMax = false;
            if (isset($intbconfabclevli['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLI, $intbconfabclevli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevli['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLI, $intbconfabclevli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLI, $intbconfabclevli, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcLevlJ column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabclevlj(1234); // WHERE IntbConfAbcLevlJ = 1234
     * $query->filterByIntbconfabclevlj(array(12, 34)); // WHERE IntbConfAbcLevlJ IN (12, 34)
     * $query->filterByIntbconfabclevlj(array('min' => 12)); // WHERE IntbConfAbcLevlJ > 12
     * </code>
     *
     * @param     mixed $intbconfabclevlj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabclevlj($intbconfabclevlj = null, $comparison = null)
    {
        if (is_array($intbconfabclevlj)) {
            $useMinMax = false;
            if (isset($intbconfabclevlj['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLJ, $intbconfabclevlj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfabclevlj['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLJ, $intbconfabclevlj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLJ, $intbconfabclevlj, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseForeignX column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseforeignx('fooValue');   // WHERE IntbConfUseForeignX = 'fooValue'
     * $query->filterByIntbconfuseforeignx('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseForeignX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuseforeignx The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuseforeignx($intbconfuseforeignx = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseforeignx)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX, $intbconfuseforeignx, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseNafta column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusenafta('fooValue');   // WHERE IntbConfUseNafta = 'fooValue'
     * $query->filterByIntbconfusenafta('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseNafta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusenafta The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusenafta($intbconfusenafta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusenafta)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSENAFTA, $intbconfusenafta, $comparison);
    }

    /**
     * Filter the query on the IntbConfNaftaPrefCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnaftaprefcode('fooValue');   // WHERE IntbConfNaftaPrefCode = 'fooValue'
     * $query->filterByIntbconfnaftaprefcode('%fooValue%', Criteria::LIKE); // WHERE IntbConfNaftaPrefCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfnaftaprefcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnaftaprefcode($intbconfnaftaprefcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnaftaprefcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE, $intbconfnaftaprefcode, $comparison);
    }

    /**
     * Filter the query on the IntbConfNaftaProducer column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnaftaproducer('fooValue');   // WHERE IntbConfNaftaProducer = 'fooValue'
     * $query->filterByIntbconfnaftaproducer('%fooValue%', Criteria::LIKE); // WHERE IntbConfNaftaProducer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfnaftaproducer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnaftaproducer($intbconfnaftaproducer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnaftaproducer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER, $intbconfnaftaproducer, $comparison);
    }

    /**
     * Filter the query on the IntbConfNaftaDocCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnaftadoccode('fooValue');   // WHERE IntbConfNaftaDocCode = 'fooValue'
     * $query->filterByIntbconfnaftadoccode('%fooValue%', Criteria::LIKE); // WHERE IntbConfNaftaDocCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfnaftadoccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnaftadoccode($intbconfnaftadoccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnaftadoccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE, $intbconfnaftadoccode, $comparison);
    }

    /**
     * Filter the query on the IntbConfPhysCurrWksh column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfphyscurrwksh('fooValue');   // WHERE IntbConfPhysCurrWksh = 'fooValue'
     * $query->filterByIntbconfphyscurrwksh('%fooValue%', Criteria::LIKE); // WHERE IntbConfPhysCurrWksh LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfphyscurrwksh The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfphyscurrwksh($intbconfphyscurrwksh = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfphyscurrwksh)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH, $intbconfphyscurrwksh, $comparison);
    }

    /**
     * Filter the query on the IntbConf20Or30 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconf20or30(1234); // WHERE IntbConf20Or30 = 1234
     * $query->filterByIntbconf20or30(array(12, 34)); // WHERE IntbConf20Or30 IN (12, 34)
     * $query->filterByIntbconf20or30(array('min' => 12)); // WHERE IntbConf20Or30 > 12
     * </code>
     *
     * @param     mixed $intbconf20or30 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconf20or30($intbconf20or30 = null, $comparison = null)
    {
        if (is_array($intbconf20or30)) {
            $useMinMax = false;
            if (isset($intbconf20or30['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONF20OR30, $intbconf20or30['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconf20or30['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONF20OR30, $intbconf20or30['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONF20OR30, $intbconf20or30, $comparison);
    }

    /**
     * Filter the query on the IntbConfDispOrigCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdisporigcnt('fooValue');   // WHERE IntbConfDispOrigCnt = 'fooValue'
     * $query->filterByIntbconfdisporigcnt('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispOrigCnt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdisporigcnt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdisporigcnt($intbconfdisporigcnt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdisporigcnt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPORIGCNT, $intbconfdisporigcnt, $comparison);
    }

    /**
     * Filter the query on the IntbConfDispGl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdispgl('fooValue');   // WHERE IntbConfDispGl = 'fooValue'
     * $query->filterByIntbconfdispgl('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdispgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdispgl($intbconfdispgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdispgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPGL, $intbconfdispgl, $comparison);
    }

    /**
     * Filter the query on the IntbConfDispRef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdispref('fooValue');   // WHERE IntbConfDispRef = 'fooValue'
     * $query->filterByIntbconfdispref('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdispref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdispref($intbconfdispref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdispref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPREF, $intbconfdispref, $comparison);
    }

    /**
     * Filter the query on the IntbConfDispCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdispcost('fooValue');   // WHERE IntbConfDispCost = 'fooValue'
     * $query->filterByIntbconfdispcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdispcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdispcost($intbconfdispcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdispcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPCOST, $intbconfdispcost, $comparison);
    }

    /**
     * Filter the query on the IntbConfPrtVal column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfprtval('fooValue');   // WHERE IntbConfPrtVal = 'fooValue'
     * $query->filterByIntbconfprtval('%fooValue%', Criteria::LIKE); // WHERE IntbConfPrtVal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfprtval The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfprtval($intbconfprtval = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfprtval)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRTVAL, $intbconfprtval, $comparison);
    }

    /**
     * Filter the query on the IntbConfPrtGl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfprtgl('fooValue');   // WHERE IntbConfPrtGl = 'fooValue'
     * $query->filterByIntbconfprtgl('%fooValue%', Criteria::LIKE); // WHERE IntbConfPrtGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfprtgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfprtgl($intbconfprtgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfprtgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRTGL, $intbconfprtgl, $comparison);
    }

    /**
     * Filter the query on the IntbConfGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfglacct('fooValue');   // WHERE IntbConfGlAcct = 'fooValue'
     * $query->filterByIntbconfglacct('%fooValue%', Criteria::LIKE); // WHERE IntbConfGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfglacct($intbconfglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGLACCT, $intbconfglacct, $comparison);
    }

    /**
     * Filter the query on the IntbConfRef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfref('fooValue');   // WHERE IntbConfRef = 'fooValue'
     * $query->filterByIntbconfref('%fooValue%', Criteria::LIKE); // WHERE IntbConfRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfref($intbconfref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFREF, $intbconfref, $comparison);
    }

    /**
     * Filter the query on the IntbConfCostType column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcosttype('fooValue');   // WHERE IntbConfCostType = 'fooValue'
     * $query->filterByIntbconfcosttype('%fooValue%', Criteria::LIKE); // WHERE IntbConfCostType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcosttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcosttype($intbconfcosttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcosttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCOSTTYPE, $intbconfcosttype, $comparison);
    }

    /**
     * Filter the query on the IntbConfNormalOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnormalonly('fooValue');   // WHERE IntbConfNormalOnly = 'fooValue'
     * $query->filterByIntbconfnormalonly('%fooValue%', Criteria::LIKE); // WHERE IntbConfNormalOnly LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfnormalonly The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnormalonly($intbconfnormalonly = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnormalonly)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNORMALONLY, $intbconfnormalonly, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseWhseDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusewhsedef('fooValue');   // WHERE IntbConfUseWhseDef = 'fooValue'
     * $query->filterByIntbconfusewhsedef('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseWhseDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusewhsedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusewhsedef($intbconfusewhsedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusewhsedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF, $intbconfusewhsedef, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse01 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse01('fooValue');   // WHERE IntbCon2DfltWhse01 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse01('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse01 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse01 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse01($intbcon2dfltwhse01 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse01)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE01, $intbcon2dfltwhse01, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse02 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse02('fooValue');   // WHERE IntbCon2DfltWhse02 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse02('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse02 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse02 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse02($intbcon2dfltwhse02 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse02)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE02, $intbcon2dfltwhse02, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse03 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse03('fooValue');   // WHERE IntbCon2DfltWhse03 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse03('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse03 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse03 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse03($intbcon2dfltwhse03 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse03)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE03, $intbcon2dfltwhse03, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse04 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse04('fooValue');   // WHERE IntbCon2DfltWhse04 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse04('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse04 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse04 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse04($intbcon2dfltwhse04 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse04)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE04, $intbcon2dfltwhse04, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse05 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse05('fooValue');   // WHERE IntbCon2DfltWhse05 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse05('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse05 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse05 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse05($intbcon2dfltwhse05 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse05)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE05, $intbcon2dfltwhse05, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse06 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse06('fooValue');   // WHERE IntbCon2DfltWhse06 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse06('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse06 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse06 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse06($intbcon2dfltwhse06 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse06)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE06, $intbcon2dfltwhse06, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse07 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse07('fooValue');   // WHERE IntbCon2DfltWhse07 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse07('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse07 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse07 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse07($intbcon2dfltwhse07 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse07)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE07, $intbcon2dfltwhse07, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse08 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse08('fooValue');   // WHERE IntbCon2DfltWhse08 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse08('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse08 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse08 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse08($intbcon2dfltwhse08 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse08)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE08, $intbcon2dfltwhse08, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse09 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse09('fooValue');   // WHERE IntbCon2DfltWhse09 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse09('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse09 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse09 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse09($intbcon2dfltwhse09 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse09)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE09, $intbcon2dfltwhse09, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltWhse10 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse10('fooValue');   // WHERE IntbCon2DfltWhse10 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse10('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltwhse10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse10($intbcon2dfltwhse10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE10, $intbcon2dfltwhse10, $comparison);
    }

    /**
     * Filter the query on the IntbConfBinDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfbindef('fooValue');   // WHERE IntbConfBinDef = 'fooValue'
     * $query->filterByIntbconfbindef('%fooValue%', Criteria::LIKE); // WHERE IntbConfBinDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfbindef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfbindef($intbconfbindef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfbindef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFBINDEF, $intbconfbindef, $comparison);
    }

    /**
     * Filter the query on the IntbConfCyclDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcycldef('fooValue');   // WHERE IntbConfCyclDef = 'fooValue'
     * $query->filterByIntbconfcycldef('%fooValue%', Criteria::LIKE); // WHERE IntbConfCyclDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcycldef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcycldef($intbconfcycldef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcycldef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCYCLDEF, $intbconfcycldef, $comparison);
    }

    /**
     * Filter the query on the IntbConfStatDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstatdef('fooValue');   // WHERE IntbConfStatDef = 'fooValue'
     * $query->filterByIntbconfstatdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfStatDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfstatdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfstatdef($intbconfstatdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstatdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTATDEF, $intbconfstatdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfAbcDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcdef('fooValue');   // WHERE IntbConfAbcDef = 'fooValue'
     * $query->filterByIntbconfabcdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfAbcDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfabcdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfabcdef($intbconfabcdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfabcdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCDEF, $intbconfabcdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfSpecOrdrDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfspecordrdef('fooValue');   // WHERE IntbConfSpecOrdrDef = 'fooValue'
     * $query->filterByIntbconfspecordrdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfSpecOrdrDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfspecordrdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfspecordrdef($intbconfspecordrdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfspecordrdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSPECORDRDEF, $intbconfspecordrdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfOrdrPntDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfordrpntdef(1234); // WHERE IntbConfOrdrPntDef = 1234
     * $query->filterByIntbconfordrpntdef(array(12, 34)); // WHERE IntbConfOrdrPntDef IN (12, 34)
     * $query->filterByIntbconfordrpntdef(array('min' => 12)); // WHERE IntbConfOrdrPntDef > 12
     * </code>
     *
     * @param     mixed $intbconfordrpntdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfordrpntdef($intbconfordrpntdef = null, $comparison = null)
    {
        if (is_array($intbconfordrpntdef)) {
            $useMinMax = false;
            if (isset($intbconfordrpntdef['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRPNTDEF, $intbconfordrpntdef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfordrpntdef['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRPNTDEF, $intbconfordrpntdef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRPNTDEF, $intbconfordrpntdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfMaxDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmaxdef(1234); // WHERE IntbConfMaxDef = 1234
     * $query->filterByIntbconfmaxdef(array(12, 34)); // WHERE IntbConfMaxDef IN (12, 34)
     * $query->filterByIntbconfmaxdef(array('min' => 12)); // WHERE IntbConfMaxDef > 12
     * </code>
     *
     * @param     mixed $intbconfmaxdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfmaxdef($intbconfmaxdef = null, $comparison = null)
    {
        if (is_array($intbconfmaxdef)) {
            $useMinMax = false;
            if (isset($intbconfmaxdef['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMAXDEF, $intbconfmaxdef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfmaxdef['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMAXDEF, $intbconfmaxdef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMAXDEF, $intbconfmaxdef, $comparison);
    }

    /**
     * Filter the query on the IntbConfOrdrQtyDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfordrqtydef(1234); // WHERE IntbConfOrdrQtyDef = 1234
     * $query->filterByIntbconfordrqtydef(array(12, 34)); // WHERE IntbConfOrdrQtyDef IN (12, 34)
     * $query->filterByIntbconfordrqtydef(array('min' => 12)); // WHERE IntbConfOrdrQtyDef > 12
     * </code>
     *
     * @param     mixed $intbconfordrqtydef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfordrqtydef($intbconfordrqtydef = null, $comparison = null)
    {
        if (is_array($intbconfordrqtydef)) {
            $useMinMax = false;
            if (isset($intbconfordrqtydef['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRQTYDEF, $intbconfordrqtydef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfordrqtydef['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRQTYDEF, $intbconfordrqtydef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRQTYDEF, $intbconfordrqtydef, $comparison);
    }

    /**
     * Filter the query on the IntbConfTrcptAllowCmpl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrcptallowcmpl('fooValue');   // WHERE IntbConfTrcptAllowCmpl = 'fooValue'
     * $query->filterByIntbconftrcptallowcmpl('%fooValue%', Criteria::LIKE); // WHERE IntbConfTrcptAllowCmpl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconftrcptallowcmpl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconftrcptallowcmpl($intbconftrcptallowcmpl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftrcptallowcmpl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL, $intbconftrcptallowcmpl, $comparison);
    }

    /**
     * Filter the query on the IntbConfTreCmmtStock column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrecmmtstock('fooValue');   // WHERE IntbConfTreCmmtStock = 'fooValue'
     * $query->filterByIntbconftrecmmtstock('%fooValue%', Criteria::LIKE); // WHERE IntbConfTreCmmtStock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconftrecmmtstock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconftrecmmtstock($intbconftrecmmtstock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftrecmmtstock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK, $intbconftrecmmtstock, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusefrtin('fooValue');   // WHERE IntbConfUseFrtIn = 'fooValue'
     * $query->filterByIntbconfusefrtin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseFrtIn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusefrtin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusefrtin($intbconfusefrtin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusefrtin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEFRTIN, $intbconfusefrtin, $comparison);
    }

    /**
     * Filter the query on the IntbConfEachOrUom column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfeachoruom('fooValue');   // WHERE IntbConfEachOrUom = 'fooValue'
     * $query->filterByIntbconfeachoruom('%fooValue%', Criteria::LIKE); // WHERE IntbConfEachOrUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfeachoruom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfeachoruom($intbconfeachoruom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfeachoruom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFEACHORUOM, $intbconfeachoruom, $comparison);
    }

    /**
     * Filter the query on the IntbConfNegLotCorr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfneglotcorr('fooValue');   // WHERE IntbConfNegLotCorr = 'fooValue'
     * $query->filterByIntbconfneglotcorr('%fooValue%', Criteria::LIKE); // WHERE IntbConfNegLotCorr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfneglotcorr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfneglotcorr($intbconfneglotcorr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfneglotcorr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNEGLOTCORR, $intbconfneglotcorr, $comparison);
    }

    /**
     * Filter the query on the IntbConfTrnsGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrnsglacct('fooValue');   // WHERE IntbConfTrnsGlAcct = 'fooValue'
     * $query->filterByIntbconftrnsglacct('%fooValue%', Criteria::LIKE); // WHERE IntbConfTrnsGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconftrnsglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconftrnsglacct($intbconftrnsglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftrnsglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRNSGLACCT, $intbconftrnsglacct, $comparison);
    }

    /**
     * Filter the query on the IntbConfTrnsProtStock column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrnsprotstock(1234); // WHERE IntbConfTrnsProtStock = 1234
     * $query->filterByIntbconftrnsprotstock(array(12, 34)); // WHERE IntbConfTrnsProtStock IN (12, 34)
     * $query->filterByIntbconftrnsprotstock(array('min' => 12)); // WHERE IntbConfTrnsProtStock > 12
     * </code>
     *
     * @param     mixed $intbconftrnsprotstock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconftrnsprotstock($intbconftrnsprotstock = null, $comparison = null)
    {
        if (is_array($intbconftrnsprotstock)) {
            $useMinMax = false;
            if (isset($intbconftrnsprotstock['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, $intbconftrnsprotstock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconftrnsprotstock['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, $intbconftrnsprotstock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, $intbconftrnsprotstock, $comparison);
    }

    /**
     * Filter the query on the IntbConfNumericItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnumericitem('fooValue');   // WHERE IntbConfNumericItem = 'fooValue'
     * $query->filterByIntbconfnumericitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfNumericItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfnumericitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnumericitem($intbconfnumericitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnumericitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNUMERICITEM, $intbconfnumericitem, $comparison);
    }

    /**
     * Filter the query on the IntbConfItemDigits column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfitemdigits(1234); // WHERE IntbConfItemDigits = 1234
     * $query->filterByIntbconfitemdigits(array(12, 34)); // WHERE IntbConfItemDigits IN (12, 34)
     * $query->filterByIntbconfitemdigits(array('min' => 12)); // WHERE IntbConfItemDigits > 12
     * </code>
     *
     * @param     mixed $intbconfitemdigits The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfitemdigits($intbconfitemdigits = null, $comparison = null)
    {
        if (is_array($intbconfitemdigits)) {
            $useMinMax = false;
            if (isset($intbconfitemdigits['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMDIGITS, $intbconfitemdigits['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfitemdigits['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMDIGITS, $intbconfitemdigits['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMDIGITS, $intbconfitemdigits, $comparison);
    }

    /**
     * Filter the query on the IntbConfSingleWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfsinglewhse('fooValue');   // WHERE IntbConfSingleWhse = 'fooValue'
     * $query->filterByIntbconfsinglewhse('%fooValue%', Criteria::LIKE); // WHERE IntbConfSingleWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfsinglewhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfsinglewhse($intbconfsinglewhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfsinglewhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSINGLEWHSE, $intbconfsinglewhse, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpdUsePct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdusepct('fooValue');   // WHERE IntbConfUpdUsePct = 'fooValue'
     * $query->filterByIntbconfupdusepct('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdUsePct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfupdusepct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupdusepct($intbconfupdusepct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdusepct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDUSEPCT, $intbconfupdusepct, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpdPric column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdpric('fooValue');   // WHERE IntbConfUpdPric = 'fooValue'
     * $query->filterByIntbconfupdpric('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdPric LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfupdpric The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupdpric($intbconfupdpric = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdpric)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDPRIC, $intbconfupdpric, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpdStdCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdstdcost('fooValue');   // WHERE IntbConfUpdStdCost = 'fooValue'
     * $query->filterByIntbconfupdstdcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdStdCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfupdstdcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupdstdcost($intbconfupdstdcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdstdcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDSTDCOST, $intbconfupdstdcost, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpdXrefCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdxrefcost('fooValue');   // WHERE IntbConfUpdXrefCost = 'fooValue'
     * $query->filterByIntbconfupdxrefcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdXrefCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfupdxrefcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupdxrefcost($intbconfupdxrefcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdxrefcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDXREFCOST, $intbconfupdxrefcost, $comparison);
    }

    /**
     * Filter the query on the IntbConfIqpaUpdDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfiqpaupddate('fooValue');   // WHERE IntbConfIqpaUpdDate = 'fooValue'
     * $query->filterByIntbconfiqpaupddate('%fooValue%', Criteria::LIKE); // WHERE IntbConfIqpaUpdDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfiqpaupddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfiqpaupddate($intbconfiqpaupddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfiqpaupddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE, $intbconfiqpaupddate, $comparison);
    }

    /**
     * Filter the query on the IntbConfUpcXrefOptn column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupcxrefoptn('fooValue');   // WHERE IntbConfUpcXrefOptn = 'fooValue'
     * $query->filterByIntbconfupcxrefoptn('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpcXrefOptn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfupcxrefoptn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfupcxrefoptn($intbconfupcxrefoptn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupcxrefoptn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN, $intbconfupcxrefoptn, $comparison);
    }

    /**
     * Filter the query on the IntbConfResqYN column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfresqyn('fooValue');   // WHERE IntbConfResqYN = 'fooValue'
     * $query->filterByIntbconfresqyn('%fooValue%', Criteria::LIKE); // WHERE IntbConfResqYN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfresqyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfresqyn($intbconfresqyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfresqyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFRESQYN, $intbconfresqyn, $comparison);
    }

    /**
     * Filter the query on the IntbConfTranViewLIB column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftranviewlib('fooValue');   // WHERE IntbConfTranViewLIB = 'fooValue'
     * $query->filterByIntbconftranviewlib('%fooValue%', Criteria::LIKE); // WHERE IntbConfTranViewLIB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconftranviewlib The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconftranviewlib($intbconftranviewlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftranviewlib)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRANVIEWLIB, $intbconftranviewlib, $comparison);
    }

    /**
     * Filter the query on the IntbConfResvCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfresvcost('fooValue');   // WHERE IntbConfResvCost = 'fooValue'
     * $query->filterByIntbconfresvcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfResvCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfresvcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfresvcost($intbconfresvcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfresvcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFRESVCOST, $intbconfresvcost, $comparison);
    }

    /**
     * Filter the query on the IntbCon2TranZeroRqst column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2tranzerorqst('fooValue');   // WHERE IntbCon2TranZeroRqst = 'fooValue'
     * $query->filterByIntbcon2tranzerorqst('%fooValue%', Criteria::LIKE); // WHERE IntbCon2TranZeroRqst LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2tranzerorqst The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2tranzerorqst($intbcon2tranzerorqst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2tranzerorqst)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2TRANZERORQST, $intbcon2tranzerorqst, $comparison);
    }

    /**
     * Filter the query on the IntbConfMonEndAdjDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmonendadjdate('fooValue');   // WHERE IntbConfMonEndAdjDate = 'fooValue'
     * $query->filterByIntbconfmonendadjdate('%fooValue%', Criteria::LIKE); // WHERE IntbConfMonEndAdjDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfmonendadjdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfmonendadjdate($intbconfmonendadjdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmonendadjdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMONENDADJDATE, $intbconfmonendadjdate, $comparison);
    }

    /**
     * Filter the query on the IntbConfMonEndTrnDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmonendtrndate('fooValue');   // WHERE IntbConfMonEndTrnDate = 'fooValue'
     * $query->filterByIntbconfmonendtrndate('%fooValue%', Criteria::LIKE); // WHERE IntbConfMonEndTrnDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfmonendtrndate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfmonendtrndate($intbconfmonendtrndate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmonendtrndate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE, $intbconfmonendtrndate, $comparison);
    }

    /**
     * Filter the query on the IntbConfMonEndLogDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmonendlogdate('fooValue');   // WHERE IntbConfMonEndLogDate = 'fooValue'
     * $query->filterByIntbconfmonendlogdate('%fooValue%', Criteria::LIKE); // WHERE IntbConfMonEndLogDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfmonendlogdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfmonendlogdate($intbconfmonendlogdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmonendlogdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE, $intbconfmonendlogdate, $comparison);
    }

    /**
     * Filter the query on the IntbConfDStatProc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdstatproc('fooValue');   // WHERE IntbConfDStatProc = 'fooValue'
     * $query->filterByIntbconfdstatproc('%fooValue%', Criteria::LIKE); // WHERE IntbConfDStatProc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdstatproc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdstatproc($intbconfdstatproc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdstatproc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDSTATPROC, $intbconfdstatproc, $comparison);
    }

    /**
     * Filter the query on the IntbConfStanCostUpd column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstancostupd('fooValue');   // WHERE IntbConfStanCostUpd = 'fooValue'
     * $query->filterByIntbconfstancostupd('%fooValue%', Criteria::LIKE); // WHERE IntbConfStanCostUpd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfstancostupd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfstancostupd($intbconfstancostupd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstancostupd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD, $intbconfstancostupd, $comparison);
    }

    /**
     * Filter the query on the IntbConfLastCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconflastcost('fooValue');   // WHERE IntbConfLastCost = 'fooValue'
     * $query->filterByIntbconflastcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfLastCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconflastcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconflastcost($intbconflastcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconflastcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFLASTCOST, $intbconflastcost, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseSOrGPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusesorgpct('fooValue');   // WHERE IntbConfUseSOrGPct = 'fooValue'
     * $query->filterByIntbconfusesorgpct('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseSOrGPct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusesorgpct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusesorgpct($intbconfusesorgpct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusesorgpct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSESORGPCT, $intbconfusesorgpct, $comparison);
    }

    /**
     * Filter the query on the IntbConfAddOnStan column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfaddonstan(1234); // WHERE IntbConfAddOnStan = 1234
     * $query->filterByIntbconfaddonstan(array(12, 34)); // WHERE IntbConfAddOnStan IN (12, 34)
     * $query->filterByIntbconfaddonstan(array('min' => 12)); // WHERE IntbConfAddOnStan > 12
     * </code>
     *
     * @param     mixed $intbconfaddonstan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfaddonstan($intbconfaddonstan = null, $comparison = null)
    {
        if (is_array($intbconfaddonstan)) {
            $useMinMax = false;
            if (isset($intbconfaddonstan['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADDONSTAN, $intbconfaddonstan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfaddonstan['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADDONSTAN, $intbconfaddonstan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADDONSTAN, $intbconfaddonstan, $comparison);
    }

    /**
     * Filter the query on the IntbConfStdCostError column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstdcosterror('fooValue');   // WHERE IntbConfStdCostError = 'fooValue'
     * $query->filterByIntbconfstdcosterror('%fooValue%', Criteria::LIKE); // WHERE IntbConfStdCostError LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfstdcosterror The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfstdcosterror($intbconfstdcosterror = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstdcosterror)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR, $intbconfstdcosterror, $comparison);
    }

    /**
     * Filter the query on the IntbConfAvgCurrFive column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfavgcurrfive('fooValue');   // WHERE IntbConfAvgCurrFive = 'fooValue'
     * $query->filterByIntbconfavgcurrfive('%fooValue%', Criteria::LIKE); // WHERE IntbConfAvgCurrFive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfavgcurrfive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfavgcurrfive($intbconfavgcurrfive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfavgcurrfive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE, $intbconfavgcurrfive, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseCntrlBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusecntrlbin('fooValue');   // WHERE IntbConfUseCntrlBin = 'fooValue'
     * $query->filterByIntbconfusecntrlbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseCntrlBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusecntrlbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusecntrlbin($intbconfusecntrlbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusecntrlbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN, $intbconfusecntrlbin, $comparison);
    }

    /**
     * Filter the query on the IntbConfNbrBinAreas column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnbrbinareas(1234); // WHERE IntbConfNbrBinAreas = 1234
     * $query->filterByIntbconfnbrbinareas(array(12, 34)); // WHERE IntbConfNbrBinAreas IN (12, 34)
     * $query->filterByIntbconfnbrbinareas(array('min' => 12)); // WHERE IntbConfNbrBinAreas > 12
     * </code>
     *
     * @param     mixed $intbconfnbrbinareas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfnbrbinareas($intbconfnbrbinareas = null, $comparison = null)
    {
        if (is_array($intbconfnbrbinareas)) {
            $useMinMax = false;
            if (isset($intbconfnbrbinareas['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNBRBINAREAS, $intbconfnbrbinareas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfnbrbinareas['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNBRBINAREAS, $intbconfnbrbinareas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNBRBINAREAS, $intbconfnbrbinareas, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseMultBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusemultbin('fooValue');   // WHERE IntbConfUseMultBin = 'fooValue'
     * $query->filterByIntbconfusemultbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseMultBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusemultbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusemultbin($intbconfusemultbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusemultbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEMULTBIN, $intbconfusemultbin, $comparison);
    }

    /**
     * Filter the query on the IntbConfDfltWhseBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdfltwhsebin('fooValue');   // WHERE IntbConfDfltWhseBin = 'fooValue'
     * $query->filterByIntbconfdfltwhsebin('%fooValue%', Criteria::LIKE); // WHERE IntbConfDfltWhseBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdfltwhsebin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdfltwhsebin($intbconfdfltwhsebin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdfltwhsebin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN, $intbconfdfltwhsebin, $comparison);
    }

    /**
     * Filter the query on the IntbConfDfltBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdfltbin('fooValue');   // WHERE IntbConfDfltBin = 'fooValue'
     * $query->filterByIntbconfdfltbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfDfltBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdfltbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdfltbin($intbconfdfltbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdfltbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDFLTBIN, $intbconfdfltbin, $comparison);
    }

    /**
     * Filter the query on the IntbConfCtryItemLot column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfctryitemlot('fooValue');   // WHERE IntbConfCtryItemLot = 'fooValue'
     * $query->filterByIntbconfctryitemlot('%fooValue%', Criteria::LIKE); // WHERE IntbConfCtryItemLot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfctryitemlot The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfctryitemlot($intbconfctryitemlot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfctryitemlot)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT, $intbconfctryitemlot, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseShipBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseshipbin('fooValue');   // WHERE IntbConfUseShipBin = 'fooValue'
     * $query->filterByIntbconfuseshipbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseShipBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuseshipbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuseshipbin($intbconfuseshipbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseshipbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSESHIPBIN, $intbconfuseshipbin, $comparison);
    }

    /**
     * Filter the query on the IntbCon2PrtBinrLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2prtbinrlabel('fooValue');   // WHERE IntbCon2PrtBinrLabel = 'fooValue'
     * $query->filterByIntbcon2prtbinrlabel('%fooValue%', Criteria::LIKE); // WHERE IntbCon2PrtBinrLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2prtbinrlabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2prtbinrlabel($intbcon2prtbinrlabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2prtbinrlabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL, $intbcon2prtbinrlabel, $comparison);
    }

    /**
     * Filter the query on the IntbCon2ItemLookup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2itemlookup('fooValue');   // WHERE IntbCon2ItemLookup = 'fooValue'
     * $query->filterByIntbcon2itemlookup('%fooValue%', Criteria::LIKE); // WHERE IntbCon2ItemLookup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2itemlookup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2itemlookup($intbcon2itemlookup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2itemlookup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP, $intbcon2itemlookup, $comparison);
    }

    /**
     * Filter the query on the IntbConfIncldCti column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfincldcti('fooValue');   // WHERE IntbConfIncldCti = 'fooValue'
     * $query->filterByIntbconfincldcti('%fooValue%', Criteria::LIKE); // WHERE IntbConfIncldCti LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfincldcti The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfincldcti($intbconfincldcti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfincldcti)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFINCLDCTI, $intbconfincldcti, $comparison);
    }

    /**
     * Filter the query on the IntbConfCertImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcertimage('fooValue');   // WHERE IntbConfCertImage = 'fooValue'
     * $query->filterByIntbconfcertimage('%fooValue%', Criteria::LIKE); // WHERE IntbConfCertImage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcertimage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcertimage($intbconfcertimage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcertimage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCERTIMAGE, $intbconfcertimage, $comparison);
    }

    /**
     * Filter the query on the IntbConfDrawImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdrawimage('fooValue');   // WHERE IntbConfDrawImage = 'fooValue'
     * $query->filterByIntbconfdrawimage('%fooValue%', Criteria::LIKE); // WHERE IntbConfDrawImage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdrawimage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdrawimage($intbconfdrawimage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdrawimage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDRAWIMAGE, $intbconfdrawimage, $comparison);
    }

    /**
     * Filter the query on the IntbConfConfirmImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfconfirmimage('fooValue');   // WHERE IntbConfConfirmImage = 'fooValue'
     * $query->filterByIntbconfconfirmimage('%fooValue%', Criteria::LIKE); // WHERE IntbConfConfirmImage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfconfirmimage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfconfirmimage($intbconfconfirmimage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfconfirmimage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE, $intbconfconfirmimage, $comparison);
    }

    /**
     * Filter the query on the IntbCon2ProductImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2productimage('fooValue');   // WHERE IntbCon2ProductImage = 'fooValue'
     * $query->filterByIntbcon2productimage('%fooValue%', Criteria::LIKE); // WHERE IntbCon2ProductImage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2productimage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2productimage($intbcon2productimage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2productimage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE, $intbcon2productimage, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefPick column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefpick('fooValue');   // WHERE IntbConfDefPick = 'fooValue'
     * $query->filterByIntbconfdefpick('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefpick($intbconfdefpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFPICK, $intbconfdefpick, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefPack column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefpack('fooValue');   // WHERE IntbConfDefPack = 'fooValue'
     * $query->filterByIntbconfdefpack('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefPack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefpack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefpack($intbconfdefpack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefpack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFPACK, $intbconfdefpack, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefinvc('fooValue');   // WHERE IntbConfDefInvc = 'fooValue'
     * $query->filterByIntbconfdefinvc('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefInvc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefinvc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefinvc($intbconfdefinvc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefinvc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFINVC, $intbconfdefinvc, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefAck column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefack('fooValue');   // WHERE IntbConfDefAck = 'fooValue'
     * $query->filterByIntbconfdefack('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefAck LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefack($intbconfdefack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFACK, $intbconfdefack, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefQuot column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefquot('fooValue');   // WHERE IntbConfDefQuot = 'fooValue'
     * $query->filterByIntbconfdefquot('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefQuot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefquot The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefquot($intbconfdefquot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefquot)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFQUOT, $intbconfdefquot, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefPo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefpo('fooValue');   // WHERE IntbConfDefPo = 'fooValue'
     * $query->filterByIntbconfdefpo('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefpo($intbconfdefpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFPO, $intbconfdefpo, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefTrans column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdeftrans('fooValue');   // WHERE IntbConfDefTrans = 'fooValue'
     * $query->filterByIntbconfdeftrans('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefTrans LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdeftrans The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdeftrans($intbconfdeftrans = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdeftrans)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFTRANS, $intbconfdeftrans, $comparison);
    }

    /**
     * Filter the query on the IntbConfAdjGlCogs column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfadjglcogs('fooValue');   // WHERE IntbConfAdjGlCogs = 'fooValue'
     * $query->filterByIntbconfadjglcogs('%fooValue%', Criteria::LIKE); // WHERE IntbConfAdjGlCogs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfadjglcogs The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfadjglcogs($intbconfadjglcogs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfadjglcogs)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADJGLCOGS, $intbconfadjglcogs, $comparison);
    }

    /**
     * Filter the query on the IntbCon2DfltAdjGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltadjglacct('fooValue');   // WHERE IntbCon2DfltAdjGlAcct = 'fooValue'
     * $query->filterByIntbcon2dfltadjglacct('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltAdjGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2dfltadjglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2dfltadjglacct($intbcon2dfltadjglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltadjglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT, $intbcon2dfltadjglacct, $comparison);
    }

    /**
     * Filter the query on the IntbConfAdjCostBase column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfadjcostbase('fooValue');   // WHERE IntbConfAdjCostBase = 'fooValue'
     * $query->filterByIntbconfadjcostbase('%fooValue%', Criteria::LIKE); // WHERE IntbConfAdjCostBase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfadjcostbase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfadjcostbase($intbconfadjcostbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfadjcostbase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADJCOSTBASE, $intbconfadjcostbase, $comparison);
    }

    /**
     * Filter the query on the IntbConfDfltAdjtBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdfltadjtbin('fooValue');   // WHERE IntbConfDfltAdjtBin = 'fooValue'
     * $query->filterByIntbconfdfltadjtbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfDfltAdjtBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdfltadjtbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdfltadjtbin($intbconfdfltadjtbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdfltadjtbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN, $intbconfdfltadjtbin, $comparison);
    }

    /**
     * Filter the query on the IntbConfAdjtBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfadjtbin('fooValue');   // WHERE IntbConfAdjtBin = 'fooValue'
     * $query->filterByIntbconfadjtbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfAdjtBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfadjtbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfadjtbin($intbconfadjtbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfadjtbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADJTBIN, $intbconfadjtbin, $comparison);
    }

    /**
     * Filter the query on the IntbConfCStockSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstockseq('fooValue');   // WHERE IntbConfCStockSeq = 'fooValue'
     * $query->filterByIntbconfcstockseq('%fooValue%', Criteria::LIKE); // WHERE IntbConfCStockSeq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcstockseq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcstockseq($intbconfcstockseq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstockseq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ, $intbconfcstockseq, $comparison);
    }

    /**
     * Filter the query on the IntbConfCStockHistDay column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstockhistday(1234); // WHERE IntbConfCStockHistDay = 1234
     * $query->filterByIntbconfcstockhistday(array(12, 34)); // WHERE IntbConfCStockHistDay IN (12, 34)
     * $query->filterByIntbconfcstockhistday(array('min' => 12)); // WHERE IntbConfCStockHistDay > 12
     * </code>
     *
     * @param     mixed $intbconfcstockhistday The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcstockhistday($intbconfcstockhistday = null, $comparison = null)
    {
        if (is_array($intbconfcstockhistday)) {
            $useMinMax = false;
            if (isset($intbconfcstockhistday['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, $intbconfcstockhistday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfcstockhistday['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, $intbconfcstockhistday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, $intbconfcstockhistday, $comparison);
    }

    /**
     * Filter the query on the IntbConfCStockFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstockformat('fooValue');   // WHERE IntbConfCStockFormat = 'fooValue'
     * $query->filterByIntbconfcstockformat('%fooValue%', Criteria::LIKE); // WHERE IntbConfCStockFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcstockformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcstockformat($intbconfcstockformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstockformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT, $intbconfcstockformat, $comparison);
    }

    /**
     * Filter the query on the IntbConfCstkExportItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstkexportitem('fooValue');   // WHERE IntbConfCstkExportItem = 'fooValue'
     * $query->filterByIntbconfcstkexportitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfCstkExportItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcstkexportitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcstkexportitem($intbconfcstkexportitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstkexportitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM, $intbconfcstkexportitem, $comparison);
    }

    /**
     * Filter the query on the IntbConfCstkPdmContract column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstkpdmcontract('fooValue');   // WHERE IntbConfCstkPdmContract = 'fooValue'
     * $query->filterByIntbconfcstkpdmcontract('%fooValue%', Criteria::LIKE); // WHERE IntbConfCstkPdmContract LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfcstkpdmcontract The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfcstkpdmcontract($intbconfcstkpdmcontract = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstkpdmcontract)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT, $intbconfcstkpdmcontract, $comparison);
    }

    /**
     * Filter the query on the IntbCon2ImportSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2importseq('fooValue');   // WHERE IntbCon2ImportSeq = 'fooValue'
     * $query->filterByIntbcon2importseq('%fooValue%', Criteria::LIKE); // WHERE IntbCon2ImportSeq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2importseq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2importseq($intbcon2importseq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2importseq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2IMPORTSEQ, $intbcon2importseq, $comparison);
    }

    /**
     * Filter the query on the IntbConfStopItemChg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstopitemchg(1234); // WHERE IntbConfStopItemChg = 1234
     * $query->filterByIntbconfstopitemchg(array(12, 34)); // WHERE IntbConfStopItemChg IN (12, 34)
     * $query->filterByIntbconfstopitemchg(array('min' => 12)); // WHERE IntbConfStopItemChg > 12
     * </code>
     *
     * @param     mixed $intbconfstopitemchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfstopitemchg($intbconfstopitemchg = null, $comparison = null)
    {
        if (is_array($intbconfstopitemchg)) {
            $useMinMax = false;
            if (isset($intbconfstopitemchg['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, $intbconfstopitemchg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfstopitemchg['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, $intbconfstopitemchg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, $intbconfstopitemchg, $comparison);
    }

    /**
     * Filter the query on the IntbConfAddToMxrfe column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfaddtomxrfe('fooValue');   // WHERE IntbConfAddToMxrfe = 'fooValue'
     * $query->filterByIntbconfaddtomxrfe('%fooValue%', Criteria::LIKE); // WHERE IntbConfAddToMxrfe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfaddtomxrfe The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfaddtomxrfe($intbconfaddtomxrfe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfaddtomxrfe)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADDTOMXRFE, $intbconfaddtomxrfe, $comparison);
    }

    /**
     * Filter the query on the IntbConfMxrfeVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmxrfevendid('fooValue');   // WHERE IntbConfMxrfeVendId = 'fooValue'
     * $query->filterByIntbconfmxrfevendid('%fooValue%', Criteria::LIKE); // WHERE IntbConfMxrfeVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfmxrfevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfmxrfevendid($intbconfmxrfevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmxrfevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMXRFEVENDID, $intbconfmxrfevendid, $comparison);
    }

    /**
     * Filter the query on the IntbCon2NewIdLabelList column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2newidlabellist('fooValue');   // WHERE IntbCon2NewIdLabelList = 'fooValue'
     * $query->filterByIntbcon2newidlabellist('%fooValue%', Criteria::LIKE); // WHERE IntbCon2NewIdLabelList LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2newidlabellist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2newidlabellist($intbcon2newidlabellist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2newidlabellist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST, $intbcon2newidlabellist, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseformat('fooValue');   // WHERE IntbConfUseFormat = 'fooValue'
     * $query->filterByIntbconfuseformat('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfuseformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfuseformat($intbconfuseformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEFORMAT, $intbconfuseformat, $comparison);
    }

    /**
     * Filter the query on the IntbConfDefFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefformat('fooValue');   // WHERE IntbConfDefFormat = 'fooValue'
     * $query->filterByIntbconfdefformat('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfdefformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfdefformat($intbconfdefformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFFORMAT, $intbconfdefformat, $comparison);
    }

    /**
     * Filter the query on the IntbConfSeqShortItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfseqshortitem('fooValue');   // WHERE IntbConfSeqShortItem = 'fooValue'
     * $query->filterByIntbconfseqshortitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfSeqShortItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfseqshortitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfseqshortitem($intbconfseqshortitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfseqshortitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM, $intbconfseqshortitem, $comparison);
    }

    /**
     * Filter the query on the IntbConfShortItemLen column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfshortitemlen(1234); // WHERE IntbConfShortItemLen = 1234
     * $query->filterByIntbconfshortitemlen(array(12, 34)); // WHERE IntbConfShortItemLen IN (12, 34)
     * $query->filterByIntbconfshortitemlen(array('min' => 12)); // WHERE IntbConfShortItemLen > 12
     * </code>
     *
     * @param     mixed $intbconfshortitemlen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfshortitemlen($intbconfshortitemlen = null, $comparison = null)
    {
        if (is_array($intbconfshortitemlen)) {
            $useMinMax = false;
            if (isset($intbconfshortitemlen['min'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, $intbconfshortitemlen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbconfshortitemlen['max'])) {
                $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, $intbconfshortitemlen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, $intbconfshortitemlen, $comparison);
    }

    /**
     * Filter the query on the IntbConfUseScale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusescale('fooValue');   // WHERE IntbConfUseScale = 'fooValue'
     * $query->filterByIntbconfusescale('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseScale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfusescale The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfusescale($intbconfusescale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusescale)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSESCALE, $intbconfusescale, $comparison);
    }

    /**
     * Filter the query on the IntbConfStoreWght column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstorewght('fooValue');   // WHERE IntbConfStoreWght = 'fooValue'
     * $query->filterByIntbconfstorewght('%fooValue%', Criteria::LIKE); // WHERE IntbConfStoreWght LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfstorewght The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfstorewght($intbconfstorewght = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstorewght)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTOREWGHT, $intbconfstorewght, $comparison);
    }

    /**
     * Filter the query on the IntbConfValidAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfvalidasstcode('fooValue');   // WHERE IntbConfValidAsstCode = 'fooValue'
     * $query->filterByIntbconfvalidasstcode('%fooValue%', Criteria::LIKE); // WHERE IntbConfValidAsstCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfvalidasstcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfvalidasstcode($intbconfvalidasstcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfvalidasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE, $intbconfvalidasstcode, $comparison);
    }

    /**
     * Filter the query on the IntbConfWhiteGoods column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfwhitegoods('fooValue');   // WHERE IntbConfWhiteGoods = 'fooValue'
     * $query->filterByIntbconfwhitegoods('%fooValue%', Criteria::LIKE); // WHERE IntbConfWhiteGoods LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbconfwhitegoods The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbconfwhitegoods($intbconfwhitegoods = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfwhitegoods)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFWHITEGOODS, $intbconfwhitegoods, $comparison);
    }

    /**
     * Filter the query on the IntbCon2TransCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2transcustid('fooValue');   // WHERE IntbCon2TransCustId = 'fooValue'
     * $query->filterByIntbcon2transcustid('%fooValue%', Criteria::LIKE); // WHERE IntbCon2TransCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcon2transcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByIntbcon2transcustid($intbcon2transcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2transcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2TRANSCUSTID, $intbcon2transcustid, $comparison);
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigInTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigIn $configIn Object to remove from the list of results
     *
     * @return $this|ChildConfigInQuery The current query, for fluid interface
     */
    public function prune($configIn = null)
    {
        if ($configIn) {
            $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $configIn->getIntbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the in_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigInTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigInTableMap::clearInstancePool();
            ConfigInTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigInTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigInTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigInTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigInTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigInQuery
