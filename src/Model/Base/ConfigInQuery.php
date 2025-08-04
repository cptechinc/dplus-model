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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `in_config` table.
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
 * @method     ChildConfigInQuery orderByIntbconfmultilotref($order = Criteria::ASC) Order by the IntbConfMultiLotRef column
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
 * @method     ChildConfigInQuery groupByIntbconfmultilotref() Group by the IntbConfMultiLotRef column
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
 * @method     ChildConfigIn|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigIn matching the query
 * @method     ChildConfigIn findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigIn matching the query, or a new ChildConfigIn object populated from the query conditions when no match is found
 *
 * @method     ChildConfigIn|null findOneByIntbconfkey(int $IntbConfKey) Return the first ChildConfigIn filtered by the IntbConfKey column
 * @method     ChildConfigIn|null findOneByIntbconfglifac(string $IntbConfGlIfac) Return the first ChildConfigIn filtered by the IntbConfGlIfac column
 * @method     ChildConfigIn|null findOneByIntbconfuseiw(string $IntbConfUseIw) Return the first ChildConfigIn filtered by the IntbConfUseIw column
 * @method     ChildConfigIn|null findOneByIntbconflifofifo(string $IntbConfLifoFifo) Return the first ChildConfigIn filtered by the IntbConfLifoFifo column
 * @method     ChildConfigIn|null findOneByIntbconfgoneg(string $IntbConfGoNeg) Return the first ChildConfigIn filtered by the IntbConfGoNeg column
 * @method     ChildConfigIn|null findOneByIntbconfuselots(string $IntbConfUseLots) Return the first ChildConfigIn filtered by the IntbConfUseLots column
 * @method     ChildConfigIn|null findOneByIntbconfnbruppr(string $IntbConfNbrUppr) Return the first ChildConfigIn filtered by the IntbConfNbrUppr column
 * @method     ChildConfigIn|null findOneByIntbconfdescuppr(string $IntbConfDescUppr) Return the first ChildConfigIn filtered by the IntbConfDescUppr column
 * @method     ChildConfigIn|null findOneByIntbconfusedesc2(string $IntbConfUseDesc2) Return the first ChildConfigIn filtered by the IntbConfUseDesc2 column
 * @method     ChildConfigIn|null findOneByIntbconfuseupccode(string $IntbConfUseUpcCode) Return the first ChildConfigIn filtered by the IntbConfUseUpcCode column
 * @method     ChildConfigIn|null findOneByIntbconfupceancntrl(string $IntbConfUpcEanCntrl) Return the first ChildConfigIn filtered by the IntbConfUpcEanCntrl column
 * @method     ChildConfigIn|null findOneByIntbconfupcgennbr(int $IntbConfUpcGenNbr) Return the first ChildConfigIn filtered by the IntbConfUpcGenNbr column
 * @method     ChildConfigIn|null findOneByIntbcon2allowdupupc(string $IntbCon2AllowDupUpc) Return the first ChildConfigIn filtered by the IntbCon2AllowDupUpc column
 * @method     ChildConfigIn|null findOneByIntbconfxrefnospace(string $IntbConfXrefNoSpace) Return the first ChildConfigIn filtered by the IntbConfXrefNoSpace column
 * @method     ChildConfigIn|null findOneByIntbconfusepricgrup(string $IntbConfUsePricGrup) Return the first ChildConfigIn filtered by the IntbConfUsePricGrup column
 * @method     ChildConfigIn|null findOneByIntbconfusecommgrup(string $IntbConfUseCommGrup) Return the first ChildConfigIn filtered by the IntbConfUseCommGrup column
 * @method     ChildConfigIn|null findOneByIntbconfusewarrdays(string $IntbConfUseWarrDays) Return the first ChildConfigIn filtered by the IntbConfUseWarrDays column
 * @method     ChildConfigIn|null findOneByIntbconfstanbasedef(string $IntbConfStanBaseDef) Return the first ChildConfigIn filtered by the IntbConfStanBaseDef column
 * @method     ChildConfigIn|null findOneByIntbconfgrupdef(string $IntbConfGrupDef) Return the first ChildConfigIn filtered by the IntbConfGrupDef column
 * @method     ChildConfigIn|null findOneByIntbconfpricgrupdef(string $IntbConfPricGrupDef) Return the first ChildConfigIn filtered by the IntbConfPricGrupDef column
 * @method     ChildConfigIn|null findOneByIntbconfcommgrupdef(string $IntbConfCommGrupDef) Return the first ChildConfigIn filtered by the IntbConfCommGrupDef column
 * @method     ChildConfigIn|null findOneByIntbconftypedef(string $IntbConfTypeDef) Return the first ChildConfigIn filtered by the IntbConfTypeDef column
 * @method     ChildConfigIn|null findOneByIntbconfmultilotref(string $IntbConfMultiLotRef) Return the first ChildConfigIn filtered by the IntbConfMultiLotRef column
 * @method     ChildConfigIn|null findOneByIntbconfpricuseitem(string $IntbConfPricUseItem) Return the first ChildConfigIn filtered by the IntbConfPricUseItem column
 * @method     ChildConfigIn|null findOneByIntbconfcommuseitem(string $IntbConfCommUseItem) Return the first ChildConfigIn filtered by the IntbConfCommUseItem column
 * @method     ChildConfigIn|null findOneByIntbconfuomsaledef(string $IntbConfUomSaleDef) Return the first ChildConfigIn filtered by the IntbConfUomSaleDef column
 * @method     ChildConfigIn|null findOneByIntbconfuompurdef(string $IntbConfUomPurDef) Return the first ChildConfigIn filtered by the IntbConfUomPurDef column
 * @method     ChildConfigIn|null findOneByIntbconfsviadef(string $IntbConfSviaDef) Return the first ChildConfigIn filtered by the IntbConfSviaDef column
 * @method     ChildConfigIn|null findOneByIntbconfcustxreforuse(string $IntbConfCustxrefOrUse) Return the first ChildConfigIn filtered by the IntbConfCustxrefOrUse column
 * @method     ChildConfigIn|null findOneByIntbconfheadgetdef(int $IntbConfHeadGetDef) Return the first ChildConfigIn filtered by the IntbConfHeadGetDef column
 * @method     ChildConfigIn|null findOneByIntbconfitemgetdef(int $IntbConfItemGetDef) Return the first ChildConfigIn filtered by the IntbConfItemGetDef column
 * @method     ChildConfigIn|null findOneByIntbconfgetdispohaval(string $IntbConfGetDispOhAval) Return the first ChildConfigIn filtered by the IntbConfGetDispOhAval column
 * @method     ChildConfigIn|null findOneByIntbconfusercode1labl(string $IntbConfUserCode1Labl) Return the first ChildConfigIn filtered by the IntbConfUserCode1Labl column
 * @method     ChildConfigIn|null findOneByIntbconfusercode1ver(string $IntbConfUserCode1Ver) Return the first ChildConfigIn filtered by the IntbConfUserCode1Ver column
 * @method     ChildConfigIn|null findOneByIntbconfusercode2labl(string $IntbConfUserCode2Labl) Return the first ChildConfigIn filtered by the IntbConfUserCode2Labl column
 * @method     ChildConfigIn|null findOneByIntbconfusercode2ver(string $IntbConfUserCode2Ver) Return the first ChildConfigIn filtered by the IntbConfUserCode2Ver column
 * @method     ChildConfigIn|null findOneByIntbconfitemline(int $IntbConfItemLine) Return the first ChildConfigIn filtered by the IntbConfItemLine column
 * @method     ChildConfigIn|null findOneByIntbconfitemcols(int $IntbConfItemCols) Return the first ChildConfigIn filtered by the IntbConfItemCols column
 * @method     ChildConfigIn|null findOneByIntbconfheadline(int $IntbConfHeadLine) Return the first ChildConfigIn filtered by the IntbConfHeadLine column
 * @method     ChildConfigIn|null findOneByIntbconfheadcols(int $IntbConfHeadCols) Return the first ChildConfigIn filtered by the IntbConfHeadCols column
 * @method     ChildConfigIn|null findOneByIntbconfdetline(int $IntbConfDetLine) Return the first ChildConfigIn filtered by the IntbConfDetLine column
 * @method     ChildConfigIn|null findOneByIntbconfdetcols(int $IntbConfDetCols) Return the first ChildConfigIn filtered by the IntbConfDetCols column
 * @method     ChildConfigIn|null findOneByIntbconfminmaxzero(string $IntbConfMinMaxZero) Return the first ChildConfigIn filtered by the IntbConfMinMaxZero column
 * @method     ChildConfigIn|null findOneByIntbconfminrec(string $IntbConfMinRec) Return the first ChildConfigIn filtered by the IntbConfMinRec column
 * @method     ChildConfigIn|null findOneByIntbconfatbelowmin(string $IntbConfAtBelowMin) Return the first ChildConfigIn filtered by the IntbConfAtBelowMin column
 * @method     ChildConfigIn|null findOneByIntbconfonewhse(string $IntbConfOneWhse) Return the first ChildConfigIn filtered by the IntbConfOneWhse column
 * @method     ChildConfigIn|null findOneByIntbconfytdmth(int $IntbConfYtdMth) Return the first ChildConfigIn filtered by the IntbConfYtdMth column
 * @method     ChildConfigIn|null findOneByIntbconfusegramsltr(string $IntbConfUseGramsLtr) Return the first ChildConfigIn filtered by the IntbConfUseGramsLtr column
 * @method     ChildConfigIn|null findOneByIntbconfabcbywhse(string $IntbConfAbcByWhse) Return the first ChildConfigIn filtered by the IntbConfAbcByWhse column
 * @method     ChildConfigIn|null findOneByIntbconfabcnbrmths(int $IntbConfAbcNbrMths) Return the first ChildConfigIn filtered by the IntbConfAbcNbrMths column
 * @method     ChildConfigIn|null findOneByIntbconfabcbasecode(string $IntbConfAbcBaseCode) Return the first ChildConfigIn filtered by the IntbConfAbcBaseCode column
 * @method     ChildConfigIn|null findOneByIntbconfabclevla(string $IntbConfAbcLevlA) Return the first ChildConfigIn filtered by the IntbConfAbcLevlA column
 * @method     ChildConfigIn|null findOneByIntbconfabclevlb(string $IntbConfAbcLevlB) Return the first ChildConfigIn filtered by the IntbConfAbcLevlB column
 * @method     ChildConfigIn|null findOneByIntbconfabclevlc(string $IntbConfAbcLevlC) Return the first ChildConfigIn filtered by the IntbConfAbcLevlC column
 * @method     ChildConfigIn|null findOneByIntbconfabclevld(string $IntbConfAbcLevlD) Return the first ChildConfigIn filtered by the IntbConfAbcLevlD column
 * @method     ChildConfigIn|null findOneByIntbconfabclevle(string $IntbConfAbcLevlE) Return the first ChildConfigIn filtered by the IntbConfAbcLevlE column
 * @method     ChildConfigIn|null findOneByIntbconfabclevlf(string $IntbConfAbcLevlF) Return the first ChildConfigIn filtered by the IntbConfAbcLevlF column
 * @method     ChildConfigIn|null findOneByIntbconfabclevlg(string $IntbConfAbcLevlG) Return the first ChildConfigIn filtered by the IntbConfAbcLevlG column
 * @method     ChildConfigIn|null findOneByIntbconfabclevlh(string $IntbConfAbcLevlH) Return the first ChildConfigIn filtered by the IntbConfAbcLevlH column
 * @method     ChildConfigIn|null findOneByIntbconfabclevli(string $IntbConfAbcLevlI) Return the first ChildConfigIn filtered by the IntbConfAbcLevlI column
 * @method     ChildConfigIn|null findOneByIntbconfabclevlj(string $IntbConfAbcLevlJ) Return the first ChildConfigIn filtered by the IntbConfAbcLevlJ column
 * @method     ChildConfigIn|null findOneByIntbconfuseforeignx(string $IntbConfUseForeignX) Return the first ChildConfigIn filtered by the IntbConfUseForeignX column
 * @method     ChildConfigIn|null findOneByIntbconfusenafta(string $IntbConfUseNafta) Return the first ChildConfigIn filtered by the IntbConfUseNafta column
 * @method     ChildConfigIn|null findOneByIntbconfnaftaprefcode(string $IntbConfNaftaPrefCode) Return the first ChildConfigIn filtered by the IntbConfNaftaPrefCode column
 * @method     ChildConfigIn|null findOneByIntbconfnaftaproducer(string $IntbConfNaftaProducer) Return the first ChildConfigIn filtered by the IntbConfNaftaProducer column
 * @method     ChildConfigIn|null findOneByIntbconfnaftadoccode(string $IntbConfNaftaDocCode) Return the first ChildConfigIn filtered by the IntbConfNaftaDocCode column
 * @method     ChildConfigIn|null findOneByIntbconfphyscurrwksh(string $IntbConfPhysCurrWksh) Return the first ChildConfigIn filtered by the IntbConfPhysCurrWksh column
 * @method     ChildConfigIn|null findOneByIntbconf20or30(int $IntbConf20Or30) Return the first ChildConfigIn filtered by the IntbConf20Or30 column
 * @method     ChildConfigIn|null findOneByIntbconfdisporigcnt(string $IntbConfDispOrigCnt) Return the first ChildConfigIn filtered by the IntbConfDispOrigCnt column
 * @method     ChildConfigIn|null findOneByIntbconfdispgl(string $IntbConfDispGl) Return the first ChildConfigIn filtered by the IntbConfDispGl column
 * @method     ChildConfigIn|null findOneByIntbconfdispref(string $IntbConfDispRef) Return the first ChildConfigIn filtered by the IntbConfDispRef column
 * @method     ChildConfigIn|null findOneByIntbconfdispcost(string $IntbConfDispCost) Return the first ChildConfigIn filtered by the IntbConfDispCost column
 * @method     ChildConfigIn|null findOneByIntbconfprtval(string $IntbConfPrtVal) Return the first ChildConfigIn filtered by the IntbConfPrtVal column
 * @method     ChildConfigIn|null findOneByIntbconfprtgl(string $IntbConfPrtGl) Return the first ChildConfigIn filtered by the IntbConfPrtGl column
 * @method     ChildConfigIn|null findOneByIntbconfglacct(string $IntbConfGlAcct) Return the first ChildConfigIn filtered by the IntbConfGlAcct column
 * @method     ChildConfigIn|null findOneByIntbconfref(string $IntbConfRef) Return the first ChildConfigIn filtered by the IntbConfRef column
 * @method     ChildConfigIn|null findOneByIntbconfcosttype(string $IntbConfCostType) Return the first ChildConfigIn filtered by the IntbConfCostType column
 * @method     ChildConfigIn|null findOneByIntbconfnormalonly(string $IntbConfNormalOnly) Return the first ChildConfigIn filtered by the IntbConfNormalOnly column
 * @method     ChildConfigIn|null findOneByIntbconfusewhsedef(string $IntbConfUseWhseDef) Return the first ChildConfigIn filtered by the IntbConfUseWhseDef column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse01(string $IntbCon2DfltWhse01) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse01 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse02(string $IntbCon2DfltWhse02) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse02 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse03(string $IntbCon2DfltWhse03) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse03 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse04(string $IntbCon2DfltWhse04) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse04 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse05(string $IntbCon2DfltWhse05) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse05 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse06(string $IntbCon2DfltWhse06) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse06 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse07(string $IntbCon2DfltWhse07) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse07 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse08(string $IntbCon2DfltWhse08) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse08 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse09(string $IntbCon2DfltWhse09) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse09 column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltwhse10(string $IntbCon2DfltWhse10) Return the first ChildConfigIn filtered by the IntbCon2DfltWhse10 column
 * @method     ChildConfigIn|null findOneByIntbconfbindef(string $IntbConfBinDef) Return the first ChildConfigIn filtered by the IntbConfBinDef column
 * @method     ChildConfigIn|null findOneByIntbconfcycldef(string $IntbConfCyclDef) Return the first ChildConfigIn filtered by the IntbConfCyclDef column
 * @method     ChildConfigIn|null findOneByIntbconfstatdef(string $IntbConfStatDef) Return the first ChildConfigIn filtered by the IntbConfStatDef column
 * @method     ChildConfigIn|null findOneByIntbconfabcdef(string $IntbConfAbcDef) Return the first ChildConfigIn filtered by the IntbConfAbcDef column
 * @method     ChildConfigIn|null findOneByIntbconfspecordrdef(string $IntbConfSpecOrdrDef) Return the first ChildConfigIn filtered by the IntbConfSpecOrdrDef column
 * @method     ChildConfigIn|null findOneByIntbconfordrpntdef(string $IntbConfOrdrPntDef) Return the first ChildConfigIn filtered by the IntbConfOrdrPntDef column
 * @method     ChildConfigIn|null findOneByIntbconfmaxdef(string $IntbConfMaxDef) Return the first ChildConfigIn filtered by the IntbConfMaxDef column
 * @method     ChildConfigIn|null findOneByIntbconfordrqtydef(string $IntbConfOrdrQtyDef) Return the first ChildConfigIn filtered by the IntbConfOrdrQtyDef column
 * @method     ChildConfigIn|null findOneByIntbconftrcptallowcmpl(string $IntbConfTrcptAllowCmpl) Return the first ChildConfigIn filtered by the IntbConfTrcptAllowCmpl column
 * @method     ChildConfigIn|null findOneByIntbconftrecmmtstock(string $IntbConfTreCmmtStock) Return the first ChildConfigIn filtered by the IntbConfTreCmmtStock column
 * @method     ChildConfigIn|null findOneByIntbconfusefrtin(string $IntbConfUseFrtIn) Return the first ChildConfigIn filtered by the IntbConfUseFrtIn column
 * @method     ChildConfigIn|null findOneByIntbconfeachoruom(string $IntbConfEachOrUom) Return the first ChildConfigIn filtered by the IntbConfEachOrUom column
 * @method     ChildConfigIn|null findOneByIntbconfneglotcorr(string $IntbConfNegLotCorr) Return the first ChildConfigIn filtered by the IntbConfNegLotCorr column
 * @method     ChildConfigIn|null findOneByIntbconftrnsglacct(string $IntbConfTrnsGlAcct) Return the first ChildConfigIn filtered by the IntbConfTrnsGlAcct column
 * @method     ChildConfigIn|null findOneByIntbconftrnsprotstock(string $IntbConfTrnsProtStock) Return the first ChildConfigIn filtered by the IntbConfTrnsProtStock column
 * @method     ChildConfigIn|null findOneByIntbconfnumericitem(string $IntbConfNumericItem) Return the first ChildConfigIn filtered by the IntbConfNumericItem column
 * @method     ChildConfigIn|null findOneByIntbconfitemdigits(int $IntbConfItemDigits) Return the first ChildConfigIn filtered by the IntbConfItemDigits column
 * @method     ChildConfigIn|null findOneByIntbconfsinglewhse(string $IntbConfSingleWhse) Return the first ChildConfigIn filtered by the IntbConfSingleWhse column
 * @method     ChildConfigIn|null findOneByIntbconfupdusepct(string $IntbConfUpdUsePct) Return the first ChildConfigIn filtered by the IntbConfUpdUsePct column
 * @method     ChildConfigIn|null findOneByIntbconfupdpric(string $IntbConfUpdPric) Return the first ChildConfigIn filtered by the IntbConfUpdPric column
 * @method     ChildConfigIn|null findOneByIntbconfupdstdcost(string $IntbConfUpdStdCost) Return the first ChildConfigIn filtered by the IntbConfUpdStdCost column
 * @method     ChildConfigIn|null findOneByIntbconfupdxrefcost(string $IntbConfUpdXrefCost) Return the first ChildConfigIn filtered by the IntbConfUpdXrefCost column
 * @method     ChildConfigIn|null findOneByIntbconfiqpaupddate(string $IntbConfIqpaUpdDate) Return the first ChildConfigIn filtered by the IntbConfIqpaUpdDate column
 * @method     ChildConfigIn|null findOneByIntbconfupcxrefoptn(string $IntbConfUpcXrefOptn) Return the first ChildConfigIn filtered by the IntbConfUpcXrefOptn column
 * @method     ChildConfigIn|null findOneByIntbconftranviewlib(string $IntbConfTranViewLIB) Return the first ChildConfigIn filtered by the IntbConfTranViewLIB column
 * @method     ChildConfigIn|null findOneByIntbconfresvcost(string $IntbConfResvCost) Return the first ChildConfigIn filtered by the IntbConfResvCost column
 * @method     ChildConfigIn|null findOneByIntbcon2tranzerorqst(string $IntbCon2TranZeroRqst) Return the first ChildConfigIn filtered by the IntbCon2TranZeroRqst column
 * @method     ChildConfigIn|null findOneByIntbconfmonendadjdate(string $IntbConfMonEndAdjDate) Return the first ChildConfigIn filtered by the IntbConfMonEndAdjDate column
 * @method     ChildConfigIn|null findOneByIntbconfmonendtrndate(string $IntbConfMonEndTrnDate) Return the first ChildConfigIn filtered by the IntbConfMonEndTrnDate column
 * @method     ChildConfigIn|null findOneByIntbconfmonendlogdate(string $IntbConfMonEndLogDate) Return the first ChildConfigIn filtered by the IntbConfMonEndLogDate column
 * @method     ChildConfigIn|null findOneByIntbconfdstatproc(string $IntbConfDStatProc) Return the first ChildConfigIn filtered by the IntbConfDStatProc column
 * @method     ChildConfigIn|null findOneByIntbconfstancostupd(string $IntbConfStanCostUpd) Return the first ChildConfigIn filtered by the IntbConfStanCostUpd column
 * @method     ChildConfigIn|null findOneByIntbconflastcost(string $IntbConfLastCost) Return the first ChildConfigIn filtered by the IntbConfLastCost column
 * @method     ChildConfigIn|null findOneByIntbconfusesorgpct(string $IntbConfUseSOrGPct) Return the first ChildConfigIn filtered by the IntbConfUseSOrGPct column
 * @method     ChildConfigIn|null findOneByIntbconfaddonstan(string $IntbConfAddOnStan) Return the first ChildConfigIn filtered by the IntbConfAddOnStan column
 * @method     ChildConfigIn|null findOneByIntbconfstdcosterror(string $IntbConfStdCostError) Return the first ChildConfigIn filtered by the IntbConfStdCostError column
 * @method     ChildConfigIn|null findOneByIntbconfavgcurrfive(string $IntbConfAvgCurrFive) Return the first ChildConfigIn filtered by the IntbConfAvgCurrFive column
 * @method     ChildConfigIn|null findOneByIntbconfusecntrlbin(string $IntbConfUseCntrlBin) Return the first ChildConfigIn filtered by the IntbConfUseCntrlBin column
 * @method     ChildConfigIn|null findOneByIntbconfnbrbinareas(int $IntbConfNbrBinAreas) Return the first ChildConfigIn filtered by the IntbConfNbrBinAreas column
 * @method     ChildConfigIn|null findOneByIntbconfusemultbin(string $IntbConfUseMultBin) Return the first ChildConfigIn filtered by the IntbConfUseMultBin column
 * @method     ChildConfigIn|null findOneByIntbconfdfltwhsebin(string $IntbConfDfltWhseBin) Return the first ChildConfigIn filtered by the IntbConfDfltWhseBin column
 * @method     ChildConfigIn|null findOneByIntbconfdfltbin(string $IntbConfDfltBin) Return the first ChildConfigIn filtered by the IntbConfDfltBin column
 * @method     ChildConfigIn|null findOneByIntbconfctryitemlot(string $IntbConfCtryItemLot) Return the first ChildConfigIn filtered by the IntbConfCtryItemLot column
 * @method     ChildConfigIn|null findOneByIntbconfuseshipbin(string $IntbConfUseShipBin) Return the first ChildConfigIn filtered by the IntbConfUseShipBin column
 * @method     ChildConfigIn|null findOneByIntbcon2prtbinrlabel(string $IntbCon2PrtBinrLabel) Return the first ChildConfigIn filtered by the IntbCon2PrtBinrLabel column
 * @method     ChildConfigIn|null findOneByIntbcon2itemlookup(string $IntbCon2ItemLookup) Return the first ChildConfigIn filtered by the IntbCon2ItemLookup column
 * @method     ChildConfigIn|null findOneByIntbconfincldcti(string $IntbConfIncldCti) Return the first ChildConfigIn filtered by the IntbConfIncldCti column
 * @method     ChildConfigIn|null findOneByIntbconfcertimage(string $IntbConfCertImage) Return the first ChildConfigIn filtered by the IntbConfCertImage column
 * @method     ChildConfigIn|null findOneByIntbconfdrawimage(string $IntbConfDrawImage) Return the first ChildConfigIn filtered by the IntbConfDrawImage column
 * @method     ChildConfigIn|null findOneByIntbconfconfirmimage(string $IntbConfConfirmImage) Return the first ChildConfigIn filtered by the IntbConfConfirmImage column
 * @method     ChildConfigIn|null findOneByIntbcon2productimage(string $IntbCon2ProductImage) Return the first ChildConfigIn filtered by the IntbCon2ProductImage column
 * @method     ChildConfigIn|null findOneByIntbconfdefpick(string $IntbConfDefPick) Return the first ChildConfigIn filtered by the IntbConfDefPick column
 * @method     ChildConfigIn|null findOneByIntbconfdefpack(string $IntbConfDefPack) Return the first ChildConfigIn filtered by the IntbConfDefPack column
 * @method     ChildConfigIn|null findOneByIntbconfdefinvc(string $IntbConfDefInvc) Return the first ChildConfigIn filtered by the IntbConfDefInvc column
 * @method     ChildConfigIn|null findOneByIntbconfdefack(string $IntbConfDefAck) Return the first ChildConfigIn filtered by the IntbConfDefAck column
 * @method     ChildConfigIn|null findOneByIntbconfdefquot(string $IntbConfDefQuot) Return the first ChildConfigIn filtered by the IntbConfDefQuot column
 * @method     ChildConfigIn|null findOneByIntbconfdefpo(string $IntbConfDefPo) Return the first ChildConfigIn filtered by the IntbConfDefPo column
 * @method     ChildConfigIn|null findOneByIntbconfdeftrans(string $IntbConfDefTrans) Return the first ChildConfigIn filtered by the IntbConfDefTrans column
 * @method     ChildConfigIn|null findOneByIntbconfadjglcogs(string $IntbConfAdjGlCogs) Return the first ChildConfigIn filtered by the IntbConfAdjGlCogs column
 * @method     ChildConfigIn|null findOneByIntbcon2dfltadjglacct(string $IntbCon2DfltAdjGlAcct) Return the first ChildConfigIn filtered by the IntbCon2DfltAdjGlAcct column
 * @method     ChildConfigIn|null findOneByIntbconfadjcostbase(string $IntbConfAdjCostBase) Return the first ChildConfigIn filtered by the IntbConfAdjCostBase column
 * @method     ChildConfigIn|null findOneByIntbconfdfltadjtbin(string $IntbConfDfltAdjtBin) Return the first ChildConfigIn filtered by the IntbConfDfltAdjtBin column
 * @method     ChildConfigIn|null findOneByIntbconfadjtbin(string $IntbConfAdjtBin) Return the first ChildConfigIn filtered by the IntbConfAdjtBin column
 * @method     ChildConfigIn|null findOneByIntbconfcstockseq(string $IntbConfCStockSeq) Return the first ChildConfigIn filtered by the IntbConfCStockSeq column
 * @method     ChildConfigIn|null findOneByIntbconfcstockhistday(int $IntbConfCStockHistDay) Return the first ChildConfigIn filtered by the IntbConfCStockHistDay column
 * @method     ChildConfigIn|null findOneByIntbconfcstockformat(string $IntbConfCStockFormat) Return the first ChildConfigIn filtered by the IntbConfCStockFormat column
 * @method     ChildConfigIn|null findOneByIntbconfcstkexportitem(string $IntbConfCstkExportItem) Return the first ChildConfigIn filtered by the IntbConfCstkExportItem column
 * @method     ChildConfigIn|null findOneByIntbconfcstkpdmcontract(string $IntbConfCstkPdmContract) Return the first ChildConfigIn filtered by the IntbConfCstkPdmContract column
 * @method     ChildConfigIn|null findOneByIntbcon2importseq(string $IntbCon2ImportSeq) Return the first ChildConfigIn filtered by the IntbCon2ImportSeq column
 * @method     ChildConfigIn|null findOneByIntbconfstopitemchg(int $IntbConfStopItemChg) Return the first ChildConfigIn filtered by the IntbConfStopItemChg column
 * @method     ChildConfigIn|null findOneByIntbconfaddtomxrfe(string $IntbConfAddToMxrfe) Return the first ChildConfigIn filtered by the IntbConfAddToMxrfe column
 * @method     ChildConfigIn|null findOneByIntbconfmxrfevendid(string $IntbConfMxrfeVendId) Return the first ChildConfigIn filtered by the IntbConfMxrfeVendId column
 * @method     ChildConfigIn|null findOneByIntbcon2newidlabellist(string $IntbCon2NewIdLabelList) Return the first ChildConfigIn filtered by the IntbCon2NewIdLabelList column
 * @method     ChildConfigIn|null findOneByIntbconfuseformat(string $IntbConfUseFormat) Return the first ChildConfigIn filtered by the IntbConfUseFormat column
 * @method     ChildConfigIn|null findOneByIntbconfdefformat(string $IntbConfDefFormat) Return the first ChildConfigIn filtered by the IntbConfDefFormat column
 * @method     ChildConfigIn|null findOneByIntbconfseqshortitem(string $IntbConfSeqShortItem) Return the first ChildConfigIn filtered by the IntbConfSeqShortItem column
 * @method     ChildConfigIn|null findOneByIntbconfshortitemlen(int $IntbConfShortItemLen) Return the first ChildConfigIn filtered by the IntbConfShortItemLen column
 * @method     ChildConfigIn|null findOneByIntbconfusescale(string $IntbConfUseScale) Return the first ChildConfigIn filtered by the IntbConfUseScale column
 * @method     ChildConfigIn|null findOneByIntbconfstorewght(string $IntbConfStoreWght) Return the first ChildConfigIn filtered by the IntbConfStoreWght column
 * @method     ChildConfigIn|null findOneByIntbconfvalidasstcode(string $IntbConfValidAsstCode) Return the first ChildConfigIn filtered by the IntbConfValidAsstCode column
 * @method     ChildConfigIn|null findOneByIntbconfwhitegoods(string $IntbConfWhiteGoods) Return the first ChildConfigIn filtered by the IntbConfWhiteGoods column
 * @method     ChildConfigIn|null findOneByIntbcon2transcustid(string $IntbCon2TransCustId) Return the first ChildConfigIn filtered by the IntbCon2TransCustId column
 * @method     ChildConfigIn|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIn filtered by the DateUpdtd column
 * @method     ChildConfigIn|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIn filtered by the TimeUpdtd column
 * @method     ChildConfigIn|null findOneByDummy(string $dummy) Return the first ChildConfigIn filtered by the dummy column
 *
 * @method     ChildConfigIn requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigIn by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIn requireOne(?ConnectionInterface $con = null) Return the first ChildConfigIn matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigIn requireOneByIntbconfmultilotref(string $IntbConfMultiLotRef) Return the first ChildConfigIn filtered by the IntbConfMultiLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigIn[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigIn objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigIn> find(?ConnectionInterface $con = null) Return ChildConfigIn objects based on current ModelCriteria
 *
 * @method     ChildConfigIn[]|Collection findByIntbconfkey(int|array<int> $IntbConfKey) Return ChildConfigIn objects filtered by the IntbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfkey(int|array<int> $IntbConfKey) Return ChildConfigIn objects filtered by the IntbConfKey column
 * @method     ChildConfigIn[]|Collection findByIntbconfglifac(string|array<string> $IntbConfGlIfac) Return ChildConfigIn objects filtered by the IntbConfGlIfac column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfglifac(string|array<string> $IntbConfGlIfac) Return ChildConfigIn objects filtered by the IntbConfGlIfac column
 * @method     ChildConfigIn[]|Collection findByIntbconfuseiw(string|array<string> $IntbConfUseIw) Return ChildConfigIn objects filtered by the IntbConfUseIw column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuseiw(string|array<string> $IntbConfUseIw) Return ChildConfigIn objects filtered by the IntbConfUseIw column
 * @method     ChildConfigIn[]|Collection findByIntbconflifofifo(string|array<string> $IntbConfLifoFifo) Return ChildConfigIn objects filtered by the IntbConfLifoFifo column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconflifofifo(string|array<string> $IntbConfLifoFifo) Return ChildConfigIn objects filtered by the IntbConfLifoFifo column
 * @method     ChildConfigIn[]|Collection findByIntbconfgoneg(string|array<string> $IntbConfGoNeg) Return ChildConfigIn objects filtered by the IntbConfGoNeg column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfgoneg(string|array<string> $IntbConfGoNeg) Return ChildConfigIn objects filtered by the IntbConfGoNeg column
 * @method     ChildConfigIn[]|Collection findByIntbconfuselots(string|array<string> $IntbConfUseLots) Return ChildConfigIn objects filtered by the IntbConfUseLots column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuselots(string|array<string> $IntbConfUseLots) Return ChildConfigIn objects filtered by the IntbConfUseLots column
 * @method     ChildConfigIn[]|Collection findByIntbconfnbruppr(string|array<string> $IntbConfNbrUppr) Return ChildConfigIn objects filtered by the IntbConfNbrUppr column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnbruppr(string|array<string> $IntbConfNbrUppr) Return ChildConfigIn objects filtered by the IntbConfNbrUppr column
 * @method     ChildConfigIn[]|Collection findByIntbconfdescuppr(string|array<string> $IntbConfDescUppr) Return ChildConfigIn objects filtered by the IntbConfDescUppr column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdescuppr(string|array<string> $IntbConfDescUppr) Return ChildConfigIn objects filtered by the IntbConfDescUppr column
 * @method     ChildConfigIn[]|Collection findByIntbconfusedesc2(string|array<string> $IntbConfUseDesc2) Return ChildConfigIn objects filtered by the IntbConfUseDesc2 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusedesc2(string|array<string> $IntbConfUseDesc2) Return ChildConfigIn objects filtered by the IntbConfUseDesc2 column
 * @method     ChildConfigIn[]|Collection findByIntbconfuseupccode(string|array<string> $IntbConfUseUpcCode) Return ChildConfigIn objects filtered by the IntbConfUseUpcCode column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuseupccode(string|array<string> $IntbConfUseUpcCode) Return ChildConfigIn objects filtered by the IntbConfUseUpcCode column
 * @method     ChildConfigIn[]|Collection findByIntbconfupceancntrl(string|array<string> $IntbConfUpcEanCntrl) Return ChildConfigIn objects filtered by the IntbConfUpcEanCntrl column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupceancntrl(string|array<string> $IntbConfUpcEanCntrl) Return ChildConfigIn objects filtered by the IntbConfUpcEanCntrl column
 * @method     ChildConfigIn[]|Collection findByIntbconfupcgennbr(int|array<int> $IntbConfUpcGenNbr) Return ChildConfigIn objects filtered by the IntbConfUpcGenNbr column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupcgennbr(int|array<int> $IntbConfUpcGenNbr) Return ChildConfigIn objects filtered by the IntbConfUpcGenNbr column
 * @method     ChildConfigIn[]|Collection findByIntbcon2allowdupupc(string|array<string> $IntbCon2AllowDupUpc) Return ChildConfigIn objects filtered by the IntbCon2AllowDupUpc column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2allowdupupc(string|array<string> $IntbCon2AllowDupUpc) Return ChildConfigIn objects filtered by the IntbCon2AllowDupUpc column
 * @method     ChildConfigIn[]|Collection findByIntbconfxrefnospace(string|array<string> $IntbConfXrefNoSpace) Return ChildConfigIn objects filtered by the IntbConfXrefNoSpace column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfxrefnospace(string|array<string> $IntbConfXrefNoSpace) Return ChildConfigIn objects filtered by the IntbConfXrefNoSpace column
 * @method     ChildConfigIn[]|Collection findByIntbconfusepricgrup(string|array<string> $IntbConfUsePricGrup) Return ChildConfigIn objects filtered by the IntbConfUsePricGrup column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusepricgrup(string|array<string> $IntbConfUsePricGrup) Return ChildConfigIn objects filtered by the IntbConfUsePricGrup column
 * @method     ChildConfigIn[]|Collection findByIntbconfusecommgrup(string|array<string> $IntbConfUseCommGrup) Return ChildConfigIn objects filtered by the IntbConfUseCommGrup column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusecommgrup(string|array<string> $IntbConfUseCommGrup) Return ChildConfigIn objects filtered by the IntbConfUseCommGrup column
 * @method     ChildConfigIn[]|Collection findByIntbconfusewarrdays(string|array<string> $IntbConfUseWarrDays) Return ChildConfigIn objects filtered by the IntbConfUseWarrDays column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusewarrdays(string|array<string> $IntbConfUseWarrDays) Return ChildConfigIn objects filtered by the IntbConfUseWarrDays column
 * @method     ChildConfigIn[]|Collection findByIntbconfstanbasedef(string|array<string> $IntbConfStanBaseDef) Return ChildConfigIn objects filtered by the IntbConfStanBaseDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfstanbasedef(string|array<string> $IntbConfStanBaseDef) Return ChildConfigIn objects filtered by the IntbConfStanBaseDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfgrupdef(string|array<string> $IntbConfGrupDef) Return ChildConfigIn objects filtered by the IntbConfGrupDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfgrupdef(string|array<string> $IntbConfGrupDef) Return ChildConfigIn objects filtered by the IntbConfGrupDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfpricgrupdef(string|array<string> $IntbConfPricGrupDef) Return ChildConfigIn objects filtered by the IntbConfPricGrupDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfpricgrupdef(string|array<string> $IntbConfPricGrupDef) Return ChildConfigIn objects filtered by the IntbConfPricGrupDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfcommgrupdef(string|array<string> $IntbConfCommGrupDef) Return ChildConfigIn objects filtered by the IntbConfCommGrupDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcommgrupdef(string|array<string> $IntbConfCommGrupDef) Return ChildConfigIn objects filtered by the IntbConfCommGrupDef column
 * @method     ChildConfigIn[]|Collection findByIntbconftypedef(string|array<string> $IntbConfTypeDef) Return ChildConfigIn objects filtered by the IntbConfTypeDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconftypedef(string|array<string> $IntbConfTypeDef) Return ChildConfigIn objects filtered by the IntbConfTypeDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfmultilotref(string|array<string> $IntbConfMultiLotRef) Return ChildConfigIn objects filtered by the IntbConfMultiLotRef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfmultilotref(string|array<string> $IntbConfMultiLotRef) Return ChildConfigIn objects filtered by the IntbConfMultiLotRef column
 * @method     ChildConfigIn[]|Collection findByIntbconfpricuseitem(string|array<string> $IntbConfPricUseItem) Return ChildConfigIn objects filtered by the IntbConfPricUseItem column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfpricuseitem(string|array<string> $IntbConfPricUseItem) Return ChildConfigIn objects filtered by the IntbConfPricUseItem column
 * @method     ChildConfigIn[]|Collection findByIntbconfcommuseitem(string|array<string> $IntbConfCommUseItem) Return ChildConfigIn objects filtered by the IntbConfCommUseItem column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcommuseitem(string|array<string> $IntbConfCommUseItem) Return ChildConfigIn objects filtered by the IntbConfCommUseItem column
 * @method     ChildConfigIn[]|Collection findByIntbconfuomsaledef(string|array<string> $IntbConfUomSaleDef) Return ChildConfigIn objects filtered by the IntbConfUomSaleDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuomsaledef(string|array<string> $IntbConfUomSaleDef) Return ChildConfigIn objects filtered by the IntbConfUomSaleDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfuompurdef(string|array<string> $IntbConfUomPurDef) Return ChildConfigIn objects filtered by the IntbConfUomPurDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuompurdef(string|array<string> $IntbConfUomPurDef) Return ChildConfigIn objects filtered by the IntbConfUomPurDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfsviadef(string|array<string> $IntbConfSviaDef) Return ChildConfigIn objects filtered by the IntbConfSviaDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfsviadef(string|array<string> $IntbConfSviaDef) Return ChildConfigIn objects filtered by the IntbConfSviaDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfcustxreforuse(string|array<string> $IntbConfCustxrefOrUse) Return ChildConfigIn objects filtered by the IntbConfCustxrefOrUse column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcustxreforuse(string|array<string> $IntbConfCustxrefOrUse) Return ChildConfigIn objects filtered by the IntbConfCustxrefOrUse column
 * @method     ChildConfigIn[]|Collection findByIntbconfheadgetdef(int|array<int> $IntbConfHeadGetDef) Return ChildConfigIn objects filtered by the IntbConfHeadGetDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfheadgetdef(int|array<int> $IntbConfHeadGetDef) Return ChildConfigIn objects filtered by the IntbConfHeadGetDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfitemgetdef(int|array<int> $IntbConfItemGetDef) Return ChildConfigIn objects filtered by the IntbConfItemGetDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfitemgetdef(int|array<int> $IntbConfItemGetDef) Return ChildConfigIn objects filtered by the IntbConfItemGetDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfgetdispohaval(string|array<string> $IntbConfGetDispOhAval) Return ChildConfigIn objects filtered by the IntbConfGetDispOhAval column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfgetdispohaval(string|array<string> $IntbConfGetDispOhAval) Return ChildConfigIn objects filtered by the IntbConfGetDispOhAval column
 * @method     ChildConfigIn[]|Collection findByIntbconfusercode1labl(string|array<string> $IntbConfUserCode1Labl) Return ChildConfigIn objects filtered by the IntbConfUserCode1Labl column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusercode1labl(string|array<string> $IntbConfUserCode1Labl) Return ChildConfigIn objects filtered by the IntbConfUserCode1Labl column
 * @method     ChildConfigIn[]|Collection findByIntbconfusercode1ver(string|array<string> $IntbConfUserCode1Ver) Return ChildConfigIn objects filtered by the IntbConfUserCode1Ver column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusercode1ver(string|array<string> $IntbConfUserCode1Ver) Return ChildConfigIn objects filtered by the IntbConfUserCode1Ver column
 * @method     ChildConfigIn[]|Collection findByIntbconfusercode2labl(string|array<string> $IntbConfUserCode2Labl) Return ChildConfigIn objects filtered by the IntbConfUserCode2Labl column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusercode2labl(string|array<string> $IntbConfUserCode2Labl) Return ChildConfigIn objects filtered by the IntbConfUserCode2Labl column
 * @method     ChildConfigIn[]|Collection findByIntbconfusercode2ver(string|array<string> $IntbConfUserCode2Ver) Return ChildConfigIn objects filtered by the IntbConfUserCode2Ver column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusercode2ver(string|array<string> $IntbConfUserCode2Ver) Return ChildConfigIn objects filtered by the IntbConfUserCode2Ver column
 * @method     ChildConfigIn[]|Collection findByIntbconfitemline(int|array<int> $IntbConfItemLine) Return ChildConfigIn objects filtered by the IntbConfItemLine column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfitemline(int|array<int> $IntbConfItemLine) Return ChildConfigIn objects filtered by the IntbConfItemLine column
 * @method     ChildConfigIn[]|Collection findByIntbconfitemcols(int|array<int> $IntbConfItemCols) Return ChildConfigIn objects filtered by the IntbConfItemCols column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfitemcols(int|array<int> $IntbConfItemCols) Return ChildConfigIn objects filtered by the IntbConfItemCols column
 * @method     ChildConfigIn[]|Collection findByIntbconfheadline(int|array<int> $IntbConfHeadLine) Return ChildConfigIn objects filtered by the IntbConfHeadLine column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfheadline(int|array<int> $IntbConfHeadLine) Return ChildConfigIn objects filtered by the IntbConfHeadLine column
 * @method     ChildConfigIn[]|Collection findByIntbconfheadcols(int|array<int> $IntbConfHeadCols) Return ChildConfigIn objects filtered by the IntbConfHeadCols column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfheadcols(int|array<int> $IntbConfHeadCols) Return ChildConfigIn objects filtered by the IntbConfHeadCols column
 * @method     ChildConfigIn[]|Collection findByIntbconfdetline(int|array<int> $IntbConfDetLine) Return ChildConfigIn objects filtered by the IntbConfDetLine column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdetline(int|array<int> $IntbConfDetLine) Return ChildConfigIn objects filtered by the IntbConfDetLine column
 * @method     ChildConfigIn[]|Collection findByIntbconfdetcols(int|array<int> $IntbConfDetCols) Return ChildConfigIn objects filtered by the IntbConfDetCols column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdetcols(int|array<int> $IntbConfDetCols) Return ChildConfigIn objects filtered by the IntbConfDetCols column
 * @method     ChildConfigIn[]|Collection findByIntbconfminmaxzero(string|array<string> $IntbConfMinMaxZero) Return ChildConfigIn objects filtered by the IntbConfMinMaxZero column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfminmaxzero(string|array<string> $IntbConfMinMaxZero) Return ChildConfigIn objects filtered by the IntbConfMinMaxZero column
 * @method     ChildConfigIn[]|Collection findByIntbconfminrec(string|array<string> $IntbConfMinRec) Return ChildConfigIn objects filtered by the IntbConfMinRec column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfminrec(string|array<string> $IntbConfMinRec) Return ChildConfigIn objects filtered by the IntbConfMinRec column
 * @method     ChildConfigIn[]|Collection findByIntbconfatbelowmin(string|array<string> $IntbConfAtBelowMin) Return ChildConfigIn objects filtered by the IntbConfAtBelowMin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfatbelowmin(string|array<string> $IntbConfAtBelowMin) Return ChildConfigIn objects filtered by the IntbConfAtBelowMin column
 * @method     ChildConfigIn[]|Collection findByIntbconfonewhse(string|array<string> $IntbConfOneWhse) Return ChildConfigIn objects filtered by the IntbConfOneWhse column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfonewhse(string|array<string> $IntbConfOneWhse) Return ChildConfigIn objects filtered by the IntbConfOneWhse column
 * @method     ChildConfigIn[]|Collection findByIntbconfytdmth(int|array<int> $IntbConfYtdMth) Return ChildConfigIn objects filtered by the IntbConfYtdMth column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfytdmth(int|array<int> $IntbConfYtdMth) Return ChildConfigIn objects filtered by the IntbConfYtdMth column
 * @method     ChildConfigIn[]|Collection findByIntbconfusegramsltr(string|array<string> $IntbConfUseGramsLtr) Return ChildConfigIn objects filtered by the IntbConfUseGramsLtr column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusegramsltr(string|array<string> $IntbConfUseGramsLtr) Return ChildConfigIn objects filtered by the IntbConfUseGramsLtr column
 * @method     ChildConfigIn[]|Collection findByIntbconfabcbywhse(string|array<string> $IntbConfAbcByWhse) Return ChildConfigIn objects filtered by the IntbConfAbcByWhse column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabcbywhse(string|array<string> $IntbConfAbcByWhse) Return ChildConfigIn objects filtered by the IntbConfAbcByWhse column
 * @method     ChildConfigIn[]|Collection findByIntbconfabcnbrmths(int|array<int> $IntbConfAbcNbrMths) Return ChildConfigIn objects filtered by the IntbConfAbcNbrMths column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabcnbrmths(int|array<int> $IntbConfAbcNbrMths) Return ChildConfigIn objects filtered by the IntbConfAbcNbrMths column
 * @method     ChildConfigIn[]|Collection findByIntbconfabcbasecode(string|array<string> $IntbConfAbcBaseCode) Return ChildConfigIn objects filtered by the IntbConfAbcBaseCode column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabcbasecode(string|array<string> $IntbConfAbcBaseCode) Return ChildConfigIn objects filtered by the IntbConfAbcBaseCode column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevla(string|array<string> $IntbConfAbcLevlA) Return ChildConfigIn objects filtered by the IntbConfAbcLevlA column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevla(string|array<string> $IntbConfAbcLevlA) Return ChildConfigIn objects filtered by the IntbConfAbcLevlA column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevlb(string|array<string> $IntbConfAbcLevlB) Return ChildConfigIn objects filtered by the IntbConfAbcLevlB column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevlb(string|array<string> $IntbConfAbcLevlB) Return ChildConfigIn objects filtered by the IntbConfAbcLevlB column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevlc(string|array<string> $IntbConfAbcLevlC) Return ChildConfigIn objects filtered by the IntbConfAbcLevlC column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevlc(string|array<string> $IntbConfAbcLevlC) Return ChildConfigIn objects filtered by the IntbConfAbcLevlC column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevld(string|array<string> $IntbConfAbcLevlD) Return ChildConfigIn objects filtered by the IntbConfAbcLevlD column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevld(string|array<string> $IntbConfAbcLevlD) Return ChildConfigIn objects filtered by the IntbConfAbcLevlD column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevle(string|array<string> $IntbConfAbcLevlE) Return ChildConfigIn objects filtered by the IntbConfAbcLevlE column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevle(string|array<string> $IntbConfAbcLevlE) Return ChildConfigIn objects filtered by the IntbConfAbcLevlE column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevlf(string|array<string> $IntbConfAbcLevlF) Return ChildConfigIn objects filtered by the IntbConfAbcLevlF column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevlf(string|array<string> $IntbConfAbcLevlF) Return ChildConfigIn objects filtered by the IntbConfAbcLevlF column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevlg(string|array<string> $IntbConfAbcLevlG) Return ChildConfigIn objects filtered by the IntbConfAbcLevlG column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevlg(string|array<string> $IntbConfAbcLevlG) Return ChildConfigIn objects filtered by the IntbConfAbcLevlG column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevlh(string|array<string> $IntbConfAbcLevlH) Return ChildConfigIn objects filtered by the IntbConfAbcLevlH column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevlh(string|array<string> $IntbConfAbcLevlH) Return ChildConfigIn objects filtered by the IntbConfAbcLevlH column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevli(string|array<string> $IntbConfAbcLevlI) Return ChildConfigIn objects filtered by the IntbConfAbcLevlI column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevli(string|array<string> $IntbConfAbcLevlI) Return ChildConfigIn objects filtered by the IntbConfAbcLevlI column
 * @method     ChildConfigIn[]|Collection findByIntbconfabclevlj(string|array<string> $IntbConfAbcLevlJ) Return ChildConfigIn objects filtered by the IntbConfAbcLevlJ column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabclevlj(string|array<string> $IntbConfAbcLevlJ) Return ChildConfigIn objects filtered by the IntbConfAbcLevlJ column
 * @method     ChildConfigIn[]|Collection findByIntbconfuseforeignx(string|array<string> $IntbConfUseForeignX) Return ChildConfigIn objects filtered by the IntbConfUseForeignX column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuseforeignx(string|array<string> $IntbConfUseForeignX) Return ChildConfigIn objects filtered by the IntbConfUseForeignX column
 * @method     ChildConfigIn[]|Collection findByIntbconfusenafta(string|array<string> $IntbConfUseNafta) Return ChildConfigIn objects filtered by the IntbConfUseNafta column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusenafta(string|array<string> $IntbConfUseNafta) Return ChildConfigIn objects filtered by the IntbConfUseNafta column
 * @method     ChildConfigIn[]|Collection findByIntbconfnaftaprefcode(string|array<string> $IntbConfNaftaPrefCode) Return ChildConfigIn objects filtered by the IntbConfNaftaPrefCode column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnaftaprefcode(string|array<string> $IntbConfNaftaPrefCode) Return ChildConfigIn objects filtered by the IntbConfNaftaPrefCode column
 * @method     ChildConfigIn[]|Collection findByIntbconfnaftaproducer(string|array<string> $IntbConfNaftaProducer) Return ChildConfigIn objects filtered by the IntbConfNaftaProducer column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnaftaproducer(string|array<string> $IntbConfNaftaProducer) Return ChildConfigIn objects filtered by the IntbConfNaftaProducer column
 * @method     ChildConfigIn[]|Collection findByIntbconfnaftadoccode(string|array<string> $IntbConfNaftaDocCode) Return ChildConfigIn objects filtered by the IntbConfNaftaDocCode column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnaftadoccode(string|array<string> $IntbConfNaftaDocCode) Return ChildConfigIn objects filtered by the IntbConfNaftaDocCode column
 * @method     ChildConfigIn[]|Collection findByIntbconfphyscurrwksh(string|array<string> $IntbConfPhysCurrWksh) Return ChildConfigIn objects filtered by the IntbConfPhysCurrWksh column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfphyscurrwksh(string|array<string> $IntbConfPhysCurrWksh) Return ChildConfigIn objects filtered by the IntbConfPhysCurrWksh column
 * @method     ChildConfigIn[]|Collection findByIntbconf20or30(int|array<int> $IntbConf20Or30) Return ChildConfigIn objects filtered by the IntbConf20Or30 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconf20or30(int|array<int> $IntbConf20Or30) Return ChildConfigIn objects filtered by the IntbConf20Or30 column
 * @method     ChildConfigIn[]|Collection findByIntbconfdisporigcnt(string|array<string> $IntbConfDispOrigCnt) Return ChildConfigIn objects filtered by the IntbConfDispOrigCnt column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdisporigcnt(string|array<string> $IntbConfDispOrigCnt) Return ChildConfigIn objects filtered by the IntbConfDispOrigCnt column
 * @method     ChildConfigIn[]|Collection findByIntbconfdispgl(string|array<string> $IntbConfDispGl) Return ChildConfigIn objects filtered by the IntbConfDispGl column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdispgl(string|array<string> $IntbConfDispGl) Return ChildConfigIn objects filtered by the IntbConfDispGl column
 * @method     ChildConfigIn[]|Collection findByIntbconfdispref(string|array<string> $IntbConfDispRef) Return ChildConfigIn objects filtered by the IntbConfDispRef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdispref(string|array<string> $IntbConfDispRef) Return ChildConfigIn objects filtered by the IntbConfDispRef column
 * @method     ChildConfigIn[]|Collection findByIntbconfdispcost(string|array<string> $IntbConfDispCost) Return ChildConfigIn objects filtered by the IntbConfDispCost column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdispcost(string|array<string> $IntbConfDispCost) Return ChildConfigIn objects filtered by the IntbConfDispCost column
 * @method     ChildConfigIn[]|Collection findByIntbconfprtval(string|array<string> $IntbConfPrtVal) Return ChildConfigIn objects filtered by the IntbConfPrtVal column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfprtval(string|array<string> $IntbConfPrtVal) Return ChildConfigIn objects filtered by the IntbConfPrtVal column
 * @method     ChildConfigIn[]|Collection findByIntbconfprtgl(string|array<string> $IntbConfPrtGl) Return ChildConfigIn objects filtered by the IntbConfPrtGl column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfprtgl(string|array<string> $IntbConfPrtGl) Return ChildConfigIn objects filtered by the IntbConfPrtGl column
 * @method     ChildConfigIn[]|Collection findByIntbconfglacct(string|array<string> $IntbConfGlAcct) Return ChildConfigIn objects filtered by the IntbConfGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfglacct(string|array<string> $IntbConfGlAcct) Return ChildConfigIn objects filtered by the IntbConfGlAcct column
 * @method     ChildConfigIn[]|Collection findByIntbconfref(string|array<string> $IntbConfRef) Return ChildConfigIn objects filtered by the IntbConfRef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfref(string|array<string> $IntbConfRef) Return ChildConfigIn objects filtered by the IntbConfRef column
 * @method     ChildConfigIn[]|Collection findByIntbconfcosttype(string|array<string> $IntbConfCostType) Return ChildConfigIn objects filtered by the IntbConfCostType column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcosttype(string|array<string> $IntbConfCostType) Return ChildConfigIn objects filtered by the IntbConfCostType column
 * @method     ChildConfigIn[]|Collection findByIntbconfnormalonly(string|array<string> $IntbConfNormalOnly) Return ChildConfigIn objects filtered by the IntbConfNormalOnly column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnormalonly(string|array<string> $IntbConfNormalOnly) Return ChildConfigIn objects filtered by the IntbConfNormalOnly column
 * @method     ChildConfigIn[]|Collection findByIntbconfusewhsedef(string|array<string> $IntbConfUseWhseDef) Return ChildConfigIn objects filtered by the IntbConfUseWhseDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusewhsedef(string|array<string> $IntbConfUseWhseDef) Return ChildConfigIn objects filtered by the IntbConfUseWhseDef column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse01(string|array<string> $IntbCon2DfltWhse01) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse01 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse01(string|array<string> $IntbCon2DfltWhse01) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse01 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse02(string|array<string> $IntbCon2DfltWhse02) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse02 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse02(string|array<string> $IntbCon2DfltWhse02) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse02 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse03(string|array<string> $IntbCon2DfltWhse03) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse03 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse03(string|array<string> $IntbCon2DfltWhse03) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse03 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse04(string|array<string> $IntbCon2DfltWhse04) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse04 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse04(string|array<string> $IntbCon2DfltWhse04) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse04 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse05(string|array<string> $IntbCon2DfltWhse05) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse05 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse05(string|array<string> $IntbCon2DfltWhse05) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse05 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse06(string|array<string> $IntbCon2DfltWhse06) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse06 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse06(string|array<string> $IntbCon2DfltWhse06) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse06 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse07(string|array<string> $IntbCon2DfltWhse07) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse07 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse07(string|array<string> $IntbCon2DfltWhse07) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse07 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse08(string|array<string> $IntbCon2DfltWhse08) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse08 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse08(string|array<string> $IntbCon2DfltWhse08) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse08 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse09(string|array<string> $IntbCon2DfltWhse09) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse09 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse09(string|array<string> $IntbCon2DfltWhse09) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse09 column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltwhse10(string|array<string> $IntbCon2DfltWhse10) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse10 column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltwhse10(string|array<string> $IntbCon2DfltWhse10) Return ChildConfigIn objects filtered by the IntbCon2DfltWhse10 column
 * @method     ChildConfigIn[]|Collection findByIntbconfbindef(string|array<string> $IntbConfBinDef) Return ChildConfigIn objects filtered by the IntbConfBinDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfbindef(string|array<string> $IntbConfBinDef) Return ChildConfigIn objects filtered by the IntbConfBinDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfcycldef(string|array<string> $IntbConfCyclDef) Return ChildConfigIn objects filtered by the IntbConfCyclDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcycldef(string|array<string> $IntbConfCyclDef) Return ChildConfigIn objects filtered by the IntbConfCyclDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfstatdef(string|array<string> $IntbConfStatDef) Return ChildConfigIn objects filtered by the IntbConfStatDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfstatdef(string|array<string> $IntbConfStatDef) Return ChildConfigIn objects filtered by the IntbConfStatDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfabcdef(string|array<string> $IntbConfAbcDef) Return ChildConfigIn objects filtered by the IntbConfAbcDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfabcdef(string|array<string> $IntbConfAbcDef) Return ChildConfigIn objects filtered by the IntbConfAbcDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfspecordrdef(string|array<string> $IntbConfSpecOrdrDef) Return ChildConfigIn objects filtered by the IntbConfSpecOrdrDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfspecordrdef(string|array<string> $IntbConfSpecOrdrDef) Return ChildConfigIn objects filtered by the IntbConfSpecOrdrDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfordrpntdef(string|array<string> $IntbConfOrdrPntDef) Return ChildConfigIn objects filtered by the IntbConfOrdrPntDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfordrpntdef(string|array<string> $IntbConfOrdrPntDef) Return ChildConfigIn objects filtered by the IntbConfOrdrPntDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfmaxdef(string|array<string> $IntbConfMaxDef) Return ChildConfigIn objects filtered by the IntbConfMaxDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfmaxdef(string|array<string> $IntbConfMaxDef) Return ChildConfigIn objects filtered by the IntbConfMaxDef column
 * @method     ChildConfigIn[]|Collection findByIntbconfordrqtydef(string|array<string> $IntbConfOrdrQtyDef) Return ChildConfigIn objects filtered by the IntbConfOrdrQtyDef column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfordrqtydef(string|array<string> $IntbConfOrdrQtyDef) Return ChildConfigIn objects filtered by the IntbConfOrdrQtyDef column
 * @method     ChildConfigIn[]|Collection findByIntbconftrcptallowcmpl(string|array<string> $IntbConfTrcptAllowCmpl) Return ChildConfigIn objects filtered by the IntbConfTrcptAllowCmpl column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconftrcptallowcmpl(string|array<string> $IntbConfTrcptAllowCmpl) Return ChildConfigIn objects filtered by the IntbConfTrcptAllowCmpl column
 * @method     ChildConfigIn[]|Collection findByIntbconftrecmmtstock(string|array<string> $IntbConfTreCmmtStock) Return ChildConfigIn objects filtered by the IntbConfTreCmmtStock column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconftrecmmtstock(string|array<string> $IntbConfTreCmmtStock) Return ChildConfigIn objects filtered by the IntbConfTreCmmtStock column
 * @method     ChildConfigIn[]|Collection findByIntbconfusefrtin(string|array<string> $IntbConfUseFrtIn) Return ChildConfigIn objects filtered by the IntbConfUseFrtIn column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusefrtin(string|array<string> $IntbConfUseFrtIn) Return ChildConfigIn objects filtered by the IntbConfUseFrtIn column
 * @method     ChildConfigIn[]|Collection findByIntbconfeachoruom(string|array<string> $IntbConfEachOrUom) Return ChildConfigIn objects filtered by the IntbConfEachOrUom column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfeachoruom(string|array<string> $IntbConfEachOrUom) Return ChildConfigIn objects filtered by the IntbConfEachOrUom column
 * @method     ChildConfigIn[]|Collection findByIntbconfneglotcorr(string|array<string> $IntbConfNegLotCorr) Return ChildConfigIn objects filtered by the IntbConfNegLotCorr column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfneglotcorr(string|array<string> $IntbConfNegLotCorr) Return ChildConfigIn objects filtered by the IntbConfNegLotCorr column
 * @method     ChildConfigIn[]|Collection findByIntbconftrnsglacct(string|array<string> $IntbConfTrnsGlAcct) Return ChildConfigIn objects filtered by the IntbConfTrnsGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconftrnsglacct(string|array<string> $IntbConfTrnsGlAcct) Return ChildConfigIn objects filtered by the IntbConfTrnsGlAcct column
 * @method     ChildConfigIn[]|Collection findByIntbconftrnsprotstock(string|array<string> $IntbConfTrnsProtStock) Return ChildConfigIn objects filtered by the IntbConfTrnsProtStock column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconftrnsprotstock(string|array<string> $IntbConfTrnsProtStock) Return ChildConfigIn objects filtered by the IntbConfTrnsProtStock column
 * @method     ChildConfigIn[]|Collection findByIntbconfnumericitem(string|array<string> $IntbConfNumericItem) Return ChildConfigIn objects filtered by the IntbConfNumericItem column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnumericitem(string|array<string> $IntbConfNumericItem) Return ChildConfigIn objects filtered by the IntbConfNumericItem column
 * @method     ChildConfigIn[]|Collection findByIntbconfitemdigits(int|array<int> $IntbConfItemDigits) Return ChildConfigIn objects filtered by the IntbConfItemDigits column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfitemdigits(int|array<int> $IntbConfItemDigits) Return ChildConfigIn objects filtered by the IntbConfItemDigits column
 * @method     ChildConfigIn[]|Collection findByIntbconfsinglewhse(string|array<string> $IntbConfSingleWhse) Return ChildConfigIn objects filtered by the IntbConfSingleWhse column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfsinglewhse(string|array<string> $IntbConfSingleWhse) Return ChildConfigIn objects filtered by the IntbConfSingleWhse column
 * @method     ChildConfigIn[]|Collection findByIntbconfupdusepct(string|array<string> $IntbConfUpdUsePct) Return ChildConfigIn objects filtered by the IntbConfUpdUsePct column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupdusepct(string|array<string> $IntbConfUpdUsePct) Return ChildConfigIn objects filtered by the IntbConfUpdUsePct column
 * @method     ChildConfigIn[]|Collection findByIntbconfupdpric(string|array<string> $IntbConfUpdPric) Return ChildConfigIn objects filtered by the IntbConfUpdPric column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupdpric(string|array<string> $IntbConfUpdPric) Return ChildConfigIn objects filtered by the IntbConfUpdPric column
 * @method     ChildConfigIn[]|Collection findByIntbconfupdstdcost(string|array<string> $IntbConfUpdStdCost) Return ChildConfigIn objects filtered by the IntbConfUpdStdCost column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupdstdcost(string|array<string> $IntbConfUpdStdCost) Return ChildConfigIn objects filtered by the IntbConfUpdStdCost column
 * @method     ChildConfigIn[]|Collection findByIntbconfupdxrefcost(string|array<string> $IntbConfUpdXrefCost) Return ChildConfigIn objects filtered by the IntbConfUpdXrefCost column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupdxrefcost(string|array<string> $IntbConfUpdXrefCost) Return ChildConfigIn objects filtered by the IntbConfUpdXrefCost column
 * @method     ChildConfigIn[]|Collection findByIntbconfiqpaupddate(string|array<string> $IntbConfIqpaUpdDate) Return ChildConfigIn objects filtered by the IntbConfIqpaUpdDate column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfiqpaupddate(string|array<string> $IntbConfIqpaUpdDate) Return ChildConfigIn objects filtered by the IntbConfIqpaUpdDate column
 * @method     ChildConfigIn[]|Collection findByIntbconfupcxrefoptn(string|array<string> $IntbConfUpcXrefOptn) Return ChildConfigIn objects filtered by the IntbConfUpcXrefOptn column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfupcxrefoptn(string|array<string> $IntbConfUpcXrefOptn) Return ChildConfigIn objects filtered by the IntbConfUpcXrefOptn column
 * @method     ChildConfigIn[]|Collection findByIntbconftranviewlib(string|array<string> $IntbConfTranViewLIB) Return ChildConfigIn objects filtered by the IntbConfTranViewLIB column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconftranviewlib(string|array<string> $IntbConfTranViewLIB) Return ChildConfigIn objects filtered by the IntbConfTranViewLIB column
 * @method     ChildConfigIn[]|Collection findByIntbconfresvcost(string|array<string> $IntbConfResvCost) Return ChildConfigIn objects filtered by the IntbConfResvCost column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfresvcost(string|array<string> $IntbConfResvCost) Return ChildConfigIn objects filtered by the IntbConfResvCost column
 * @method     ChildConfigIn[]|Collection findByIntbcon2tranzerorqst(string|array<string> $IntbCon2TranZeroRqst) Return ChildConfigIn objects filtered by the IntbCon2TranZeroRqst column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2tranzerorqst(string|array<string> $IntbCon2TranZeroRqst) Return ChildConfigIn objects filtered by the IntbCon2TranZeroRqst column
 * @method     ChildConfigIn[]|Collection findByIntbconfmonendadjdate(string|array<string> $IntbConfMonEndAdjDate) Return ChildConfigIn objects filtered by the IntbConfMonEndAdjDate column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfmonendadjdate(string|array<string> $IntbConfMonEndAdjDate) Return ChildConfigIn objects filtered by the IntbConfMonEndAdjDate column
 * @method     ChildConfigIn[]|Collection findByIntbconfmonendtrndate(string|array<string> $IntbConfMonEndTrnDate) Return ChildConfigIn objects filtered by the IntbConfMonEndTrnDate column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfmonendtrndate(string|array<string> $IntbConfMonEndTrnDate) Return ChildConfigIn objects filtered by the IntbConfMonEndTrnDate column
 * @method     ChildConfigIn[]|Collection findByIntbconfmonendlogdate(string|array<string> $IntbConfMonEndLogDate) Return ChildConfigIn objects filtered by the IntbConfMonEndLogDate column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfmonendlogdate(string|array<string> $IntbConfMonEndLogDate) Return ChildConfigIn objects filtered by the IntbConfMonEndLogDate column
 * @method     ChildConfigIn[]|Collection findByIntbconfdstatproc(string|array<string> $IntbConfDStatProc) Return ChildConfigIn objects filtered by the IntbConfDStatProc column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdstatproc(string|array<string> $IntbConfDStatProc) Return ChildConfigIn objects filtered by the IntbConfDStatProc column
 * @method     ChildConfigIn[]|Collection findByIntbconfstancostupd(string|array<string> $IntbConfStanCostUpd) Return ChildConfigIn objects filtered by the IntbConfStanCostUpd column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfstancostupd(string|array<string> $IntbConfStanCostUpd) Return ChildConfigIn objects filtered by the IntbConfStanCostUpd column
 * @method     ChildConfigIn[]|Collection findByIntbconflastcost(string|array<string> $IntbConfLastCost) Return ChildConfigIn objects filtered by the IntbConfLastCost column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconflastcost(string|array<string> $IntbConfLastCost) Return ChildConfigIn objects filtered by the IntbConfLastCost column
 * @method     ChildConfigIn[]|Collection findByIntbconfusesorgpct(string|array<string> $IntbConfUseSOrGPct) Return ChildConfigIn objects filtered by the IntbConfUseSOrGPct column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusesorgpct(string|array<string> $IntbConfUseSOrGPct) Return ChildConfigIn objects filtered by the IntbConfUseSOrGPct column
 * @method     ChildConfigIn[]|Collection findByIntbconfaddonstan(string|array<string> $IntbConfAddOnStan) Return ChildConfigIn objects filtered by the IntbConfAddOnStan column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfaddonstan(string|array<string> $IntbConfAddOnStan) Return ChildConfigIn objects filtered by the IntbConfAddOnStan column
 * @method     ChildConfigIn[]|Collection findByIntbconfstdcosterror(string|array<string> $IntbConfStdCostError) Return ChildConfigIn objects filtered by the IntbConfStdCostError column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfstdcosterror(string|array<string> $IntbConfStdCostError) Return ChildConfigIn objects filtered by the IntbConfStdCostError column
 * @method     ChildConfigIn[]|Collection findByIntbconfavgcurrfive(string|array<string> $IntbConfAvgCurrFive) Return ChildConfigIn objects filtered by the IntbConfAvgCurrFive column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfavgcurrfive(string|array<string> $IntbConfAvgCurrFive) Return ChildConfigIn objects filtered by the IntbConfAvgCurrFive column
 * @method     ChildConfigIn[]|Collection findByIntbconfusecntrlbin(string|array<string> $IntbConfUseCntrlBin) Return ChildConfigIn objects filtered by the IntbConfUseCntrlBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusecntrlbin(string|array<string> $IntbConfUseCntrlBin) Return ChildConfigIn objects filtered by the IntbConfUseCntrlBin column
 * @method     ChildConfigIn[]|Collection findByIntbconfnbrbinareas(int|array<int> $IntbConfNbrBinAreas) Return ChildConfigIn objects filtered by the IntbConfNbrBinAreas column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfnbrbinareas(int|array<int> $IntbConfNbrBinAreas) Return ChildConfigIn objects filtered by the IntbConfNbrBinAreas column
 * @method     ChildConfigIn[]|Collection findByIntbconfusemultbin(string|array<string> $IntbConfUseMultBin) Return ChildConfigIn objects filtered by the IntbConfUseMultBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusemultbin(string|array<string> $IntbConfUseMultBin) Return ChildConfigIn objects filtered by the IntbConfUseMultBin column
 * @method     ChildConfigIn[]|Collection findByIntbconfdfltwhsebin(string|array<string> $IntbConfDfltWhseBin) Return ChildConfigIn objects filtered by the IntbConfDfltWhseBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdfltwhsebin(string|array<string> $IntbConfDfltWhseBin) Return ChildConfigIn objects filtered by the IntbConfDfltWhseBin column
 * @method     ChildConfigIn[]|Collection findByIntbconfdfltbin(string|array<string> $IntbConfDfltBin) Return ChildConfigIn objects filtered by the IntbConfDfltBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdfltbin(string|array<string> $IntbConfDfltBin) Return ChildConfigIn objects filtered by the IntbConfDfltBin column
 * @method     ChildConfigIn[]|Collection findByIntbconfctryitemlot(string|array<string> $IntbConfCtryItemLot) Return ChildConfigIn objects filtered by the IntbConfCtryItemLot column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfctryitemlot(string|array<string> $IntbConfCtryItemLot) Return ChildConfigIn objects filtered by the IntbConfCtryItemLot column
 * @method     ChildConfigIn[]|Collection findByIntbconfuseshipbin(string|array<string> $IntbConfUseShipBin) Return ChildConfigIn objects filtered by the IntbConfUseShipBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuseshipbin(string|array<string> $IntbConfUseShipBin) Return ChildConfigIn objects filtered by the IntbConfUseShipBin column
 * @method     ChildConfigIn[]|Collection findByIntbcon2prtbinrlabel(string|array<string> $IntbCon2PrtBinrLabel) Return ChildConfigIn objects filtered by the IntbCon2PrtBinrLabel column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2prtbinrlabel(string|array<string> $IntbCon2PrtBinrLabel) Return ChildConfigIn objects filtered by the IntbCon2PrtBinrLabel column
 * @method     ChildConfigIn[]|Collection findByIntbcon2itemlookup(string|array<string> $IntbCon2ItemLookup) Return ChildConfigIn objects filtered by the IntbCon2ItemLookup column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2itemlookup(string|array<string> $IntbCon2ItemLookup) Return ChildConfigIn objects filtered by the IntbCon2ItemLookup column
 * @method     ChildConfigIn[]|Collection findByIntbconfincldcti(string|array<string> $IntbConfIncldCti) Return ChildConfigIn objects filtered by the IntbConfIncldCti column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfincldcti(string|array<string> $IntbConfIncldCti) Return ChildConfigIn objects filtered by the IntbConfIncldCti column
 * @method     ChildConfigIn[]|Collection findByIntbconfcertimage(string|array<string> $IntbConfCertImage) Return ChildConfigIn objects filtered by the IntbConfCertImage column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcertimage(string|array<string> $IntbConfCertImage) Return ChildConfigIn objects filtered by the IntbConfCertImage column
 * @method     ChildConfigIn[]|Collection findByIntbconfdrawimage(string|array<string> $IntbConfDrawImage) Return ChildConfigIn objects filtered by the IntbConfDrawImage column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdrawimage(string|array<string> $IntbConfDrawImage) Return ChildConfigIn objects filtered by the IntbConfDrawImage column
 * @method     ChildConfigIn[]|Collection findByIntbconfconfirmimage(string|array<string> $IntbConfConfirmImage) Return ChildConfigIn objects filtered by the IntbConfConfirmImage column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfconfirmimage(string|array<string> $IntbConfConfirmImage) Return ChildConfigIn objects filtered by the IntbConfConfirmImage column
 * @method     ChildConfigIn[]|Collection findByIntbcon2productimage(string|array<string> $IntbCon2ProductImage) Return ChildConfigIn objects filtered by the IntbCon2ProductImage column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2productimage(string|array<string> $IntbCon2ProductImage) Return ChildConfigIn objects filtered by the IntbCon2ProductImage column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefpick(string|array<string> $IntbConfDefPick) Return ChildConfigIn objects filtered by the IntbConfDefPick column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefpick(string|array<string> $IntbConfDefPick) Return ChildConfigIn objects filtered by the IntbConfDefPick column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefpack(string|array<string> $IntbConfDefPack) Return ChildConfigIn objects filtered by the IntbConfDefPack column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefpack(string|array<string> $IntbConfDefPack) Return ChildConfigIn objects filtered by the IntbConfDefPack column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefinvc(string|array<string> $IntbConfDefInvc) Return ChildConfigIn objects filtered by the IntbConfDefInvc column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefinvc(string|array<string> $IntbConfDefInvc) Return ChildConfigIn objects filtered by the IntbConfDefInvc column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefack(string|array<string> $IntbConfDefAck) Return ChildConfigIn objects filtered by the IntbConfDefAck column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefack(string|array<string> $IntbConfDefAck) Return ChildConfigIn objects filtered by the IntbConfDefAck column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefquot(string|array<string> $IntbConfDefQuot) Return ChildConfigIn objects filtered by the IntbConfDefQuot column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefquot(string|array<string> $IntbConfDefQuot) Return ChildConfigIn objects filtered by the IntbConfDefQuot column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefpo(string|array<string> $IntbConfDefPo) Return ChildConfigIn objects filtered by the IntbConfDefPo column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefpo(string|array<string> $IntbConfDefPo) Return ChildConfigIn objects filtered by the IntbConfDefPo column
 * @method     ChildConfigIn[]|Collection findByIntbconfdeftrans(string|array<string> $IntbConfDefTrans) Return ChildConfigIn objects filtered by the IntbConfDefTrans column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdeftrans(string|array<string> $IntbConfDefTrans) Return ChildConfigIn objects filtered by the IntbConfDefTrans column
 * @method     ChildConfigIn[]|Collection findByIntbconfadjglcogs(string|array<string> $IntbConfAdjGlCogs) Return ChildConfigIn objects filtered by the IntbConfAdjGlCogs column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfadjglcogs(string|array<string> $IntbConfAdjGlCogs) Return ChildConfigIn objects filtered by the IntbConfAdjGlCogs column
 * @method     ChildConfigIn[]|Collection findByIntbcon2dfltadjglacct(string|array<string> $IntbCon2DfltAdjGlAcct) Return ChildConfigIn objects filtered by the IntbCon2DfltAdjGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2dfltadjglacct(string|array<string> $IntbCon2DfltAdjGlAcct) Return ChildConfigIn objects filtered by the IntbCon2DfltAdjGlAcct column
 * @method     ChildConfigIn[]|Collection findByIntbconfadjcostbase(string|array<string> $IntbConfAdjCostBase) Return ChildConfigIn objects filtered by the IntbConfAdjCostBase column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfadjcostbase(string|array<string> $IntbConfAdjCostBase) Return ChildConfigIn objects filtered by the IntbConfAdjCostBase column
 * @method     ChildConfigIn[]|Collection findByIntbconfdfltadjtbin(string|array<string> $IntbConfDfltAdjtBin) Return ChildConfigIn objects filtered by the IntbConfDfltAdjtBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdfltadjtbin(string|array<string> $IntbConfDfltAdjtBin) Return ChildConfigIn objects filtered by the IntbConfDfltAdjtBin column
 * @method     ChildConfigIn[]|Collection findByIntbconfadjtbin(string|array<string> $IntbConfAdjtBin) Return ChildConfigIn objects filtered by the IntbConfAdjtBin column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfadjtbin(string|array<string> $IntbConfAdjtBin) Return ChildConfigIn objects filtered by the IntbConfAdjtBin column
 * @method     ChildConfigIn[]|Collection findByIntbconfcstockseq(string|array<string> $IntbConfCStockSeq) Return ChildConfigIn objects filtered by the IntbConfCStockSeq column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcstockseq(string|array<string> $IntbConfCStockSeq) Return ChildConfigIn objects filtered by the IntbConfCStockSeq column
 * @method     ChildConfigIn[]|Collection findByIntbconfcstockhistday(int|array<int> $IntbConfCStockHistDay) Return ChildConfigIn objects filtered by the IntbConfCStockHistDay column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcstockhistday(int|array<int> $IntbConfCStockHistDay) Return ChildConfigIn objects filtered by the IntbConfCStockHistDay column
 * @method     ChildConfigIn[]|Collection findByIntbconfcstockformat(string|array<string> $IntbConfCStockFormat) Return ChildConfigIn objects filtered by the IntbConfCStockFormat column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcstockformat(string|array<string> $IntbConfCStockFormat) Return ChildConfigIn objects filtered by the IntbConfCStockFormat column
 * @method     ChildConfigIn[]|Collection findByIntbconfcstkexportitem(string|array<string> $IntbConfCstkExportItem) Return ChildConfigIn objects filtered by the IntbConfCstkExportItem column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcstkexportitem(string|array<string> $IntbConfCstkExportItem) Return ChildConfigIn objects filtered by the IntbConfCstkExportItem column
 * @method     ChildConfigIn[]|Collection findByIntbconfcstkpdmcontract(string|array<string> $IntbConfCstkPdmContract) Return ChildConfigIn objects filtered by the IntbConfCstkPdmContract column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfcstkpdmcontract(string|array<string> $IntbConfCstkPdmContract) Return ChildConfigIn objects filtered by the IntbConfCstkPdmContract column
 * @method     ChildConfigIn[]|Collection findByIntbcon2importseq(string|array<string> $IntbCon2ImportSeq) Return ChildConfigIn objects filtered by the IntbCon2ImportSeq column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2importseq(string|array<string> $IntbCon2ImportSeq) Return ChildConfigIn objects filtered by the IntbCon2ImportSeq column
 * @method     ChildConfigIn[]|Collection findByIntbconfstopitemchg(int|array<int> $IntbConfStopItemChg) Return ChildConfigIn objects filtered by the IntbConfStopItemChg column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfstopitemchg(int|array<int> $IntbConfStopItemChg) Return ChildConfigIn objects filtered by the IntbConfStopItemChg column
 * @method     ChildConfigIn[]|Collection findByIntbconfaddtomxrfe(string|array<string> $IntbConfAddToMxrfe) Return ChildConfigIn objects filtered by the IntbConfAddToMxrfe column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfaddtomxrfe(string|array<string> $IntbConfAddToMxrfe) Return ChildConfigIn objects filtered by the IntbConfAddToMxrfe column
 * @method     ChildConfigIn[]|Collection findByIntbconfmxrfevendid(string|array<string> $IntbConfMxrfeVendId) Return ChildConfigIn objects filtered by the IntbConfMxrfeVendId column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfmxrfevendid(string|array<string> $IntbConfMxrfeVendId) Return ChildConfigIn objects filtered by the IntbConfMxrfeVendId column
 * @method     ChildConfigIn[]|Collection findByIntbcon2newidlabellist(string|array<string> $IntbCon2NewIdLabelList) Return ChildConfigIn objects filtered by the IntbCon2NewIdLabelList column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2newidlabellist(string|array<string> $IntbCon2NewIdLabelList) Return ChildConfigIn objects filtered by the IntbCon2NewIdLabelList column
 * @method     ChildConfigIn[]|Collection findByIntbconfuseformat(string|array<string> $IntbConfUseFormat) Return ChildConfigIn objects filtered by the IntbConfUseFormat column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfuseformat(string|array<string> $IntbConfUseFormat) Return ChildConfigIn objects filtered by the IntbConfUseFormat column
 * @method     ChildConfigIn[]|Collection findByIntbconfdefformat(string|array<string> $IntbConfDefFormat) Return ChildConfigIn objects filtered by the IntbConfDefFormat column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfdefformat(string|array<string> $IntbConfDefFormat) Return ChildConfigIn objects filtered by the IntbConfDefFormat column
 * @method     ChildConfigIn[]|Collection findByIntbconfseqshortitem(string|array<string> $IntbConfSeqShortItem) Return ChildConfigIn objects filtered by the IntbConfSeqShortItem column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfseqshortitem(string|array<string> $IntbConfSeqShortItem) Return ChildConfigIn objects filtered by the IntbConfSeqShortItem column
 * @method     ChildConfigIn[]|Collection findByIntbconfshortitemlen(int|array<int> $IntbConfShortItemLen) Return ChildConfigIn objects filtered by the IntbConfShortItemLen column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfshortitemlen(int|array<int> $IntbConfShortItemLen) Return ChildConfigIn objects filtered by the IntbConfShortItemLen column
 * @method     ChildConfigIn[]|Collection findByIntbconfusescale(string|array<string> $IntbConfUseScale) Return ChildConfigIn objects filtered by the IntbConfUseScale column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfusescale(string|array<string> $IntbConfUseScale) Return ChildConfigIn objects filtered by the IntbConfUseScale column
 * @method     ChildConfigIn[]|Collection findByIntbconfstorewght(string|array<string> $IntbConfStoreWght) Return ChildConfigIn objects filtered by the IntbConfStoreWght column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfstorewght(string|array<string> $IntbConfStoreWght) Return ChildConfigIn objects filtered by the IntbConfStoreWght column
 * @method     ChildConfigIn[]|Collection findByIntbconfvalidasstcode(string|array<string> $IntbConfValidAsstCode) Return ChildConfigIn objects filtered by the IntbConfValidAsstCode column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfvalidasstcode(string|array<string> $IntbConfValidAsstCode) Return ChildConfigIn objects filtered by the IntbConfValidAsstCode column
 * @method     ChildConfigIn[]|Collection findByIntbconfwhitegoods(string|array<string> $IntbConfWhiteGoods) Return ChildConfigIn objects filtered by the IntbConfWhiteGoods column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbconfwhitegoods(string|array<string> $IntbConfWhiteGoods) Return ChildConfigIn objects filtered by the IntbConfWhiteGoods column
 * @method     ChildConfigIn[]|Collection findByIntbcon2transcustid(string|array<string> $IntbCon2TransCustId) Return ChildConfigIn objects filtered by the IntbCon2TransCustId column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByIntbcon2transcustid(string|array<string> $IntbCon2TransCustId) Return ChildConfigIn objects filtered by the IntbCon2TransCustId column
 * @method     ChildConfigIn[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigIn objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigIn objects filtered by the DateUpdtd column
 * @method     ChildConfigIn[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigIn objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigIn objects filtered by the TimeUpdtd column
 * @method     ChildConfigIn[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigIn objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigIn> findByDummy(string|array<string> $dummy) Return ChildConfigIn objects filtered by the dummy column
 *
 * @method     ChildConfigIn[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigIn> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigInQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigInQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigIn', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigInQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigInQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildConfigIn A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbConfKey, IntbConfGlIfac, IntbConfUseIw, IntbConfLifoFifo, IntbConfGoNeg, IntbConfUseLots, IntbConfNbrUppr, IntbConfDescUppr, IntbConfUseDesc2, IntbConfUseUpcCode, IntbConfUpcEanCntrl, IntbConfUpcGenNbr, IntbCon2AllowDupUpc, IntbConfXrefNoSpace, IntbConfUsePricGrup, IntbConfUseCommGrup, IntbConfUseWarrDays, IntbConfStanBaseDef, IntbConfGrupDef, IntbConfPricGrupDef, IntbConfCommGrupDef, IntbConfTypeDef, IntbConfMultiLotRef, IntbConfPricUseItem, IntbConfCommUseItem, IntbConfUomSaleDef, IntbConfUomPurDef, IntbConfSviaDef, IntbConfCustxrefOrUse, IntbConfHeadGetDef, IntbConfItemGetDef, IntbConfGetDispOhAval, IntbConfUserCode1Labl, IntbConfUserCode1Ver, IntbConfUserCode2Labl, IntbConfUserCode2Ver, IntbConfItemLine, IntbConfItemCols, IntbConfHeadLine, IntbConfHeadCols, IntbConfDetLine, IntbConfDetCols, IntbConfMinMaxZero, IntbConfMinRec, IntbConfAtBelowMin, IntbConfOneWhse, IntbConfYtdMth, IntbConfUseGramsLtr, IntbConfAbcByWhse, IntbConfAbcNbrMths, IntbConfAbcBaseCode, IntbConfAbcLevlA, IntbConfAbcLevlB, IntbConfAbcLevlC, IntbConfAbcLevlD, IntbConfAbcLevlE, IntbConfAbcLevlF, IntbConfAbcLevlG, IntbConfAbcLevlH, IntbConfAbcLevlI, IntbConfAbcLevlJ, IntbConfUseForeignX, IntbConfUseNafta, IntbConfNaftaPrefCode, IntbConfNaftaProducer, IntbConfNaftaDocCode, IntbConfPhysCurrWksh, IntbConf20Or30, IntbConfDispOrigCnt, IntbConfDispGl, IntbConfDispRef, IntbConfDispCost, IntbConfPrtVal, IntbConfPrtGl, IntbConfGlAcct, IntbConfRef, IntbConfCostType, IntbConfNormalOnly, IntbConfUseWhseDef, IntbCon2DfltWhse01, IntbCon2DfltWhse02, IntbCon2DfltWhse03, IntbCon2DfltWhse04, IntbCon2DfltWhse05, IntbCon2DfltWhse06, IntbCon2DfltWhse07, IntbCon2DfltWhse08, IntbCon2DfltWhse09, IntbCon2DfltWhse10, IntbConfBinDef, IntbConfCyclDef, IntbConfStatDef, IntbConfAbcDef, IntbConfSpecOrdrDef, IntbConfOrdrPntDef, IntbConfMaxDef, IntbConfOrdrQtyDef, IntbConfTrcptAllowCmpl, IntbConfTreCmmtStock, IntbConfUseFrtIn, IntbConfEachOrUom, IntbConfNegLotCorr, IntbConfTrnsGlAcct, IntbConfTrnsProtStock, IntbConfNumericItem, IntbConfItemDigits, IntbConfSingleWhse, IntbConfUpdUsePct, IntbConfUpdPric, IntbConfUpdStdCost, IntbConfUpdXrefCost, IntbConfIqpaUpdDate, IntbConfUpcXrefOptn, IntbConfTranViewLIB, IntbConfResvCost, IntbCon2TranZeroRqst, IntbConfMonEndAdjDate, IntbConfMonEndTrnDate, IntbConfMonEndLogDate, IntbConfDStatProc, IntbConfStanCostUpd, IntbConfLastCost, IntbConfUseSOrGPct, IntbConfAddOnStan, IntbConfStdCostError, IntbConfAvgCurrFive, IntbConfUseCntrlBin, IntbConfNbrBinAreas, IntbConfUseMultBin, IntbConfDfltWhseBin, IntbConfDfltBin, IntbConfCtryItemLot, IntbConfUseShipBin, IntbCon2PrtBinrLabel, IntbCon2ItemLookup, IntbConfIncldCti, IntbConfCertImage, IntbConfDrawImage, IntbConfConfirmImage, IntbCon2ProductImage, IntbConfDefPick, IntbConfDefPack, IntbConfDefInvc, IntbConfDefAck, IntbConfDefQuot, IntbConfDefPo, IntbConfDefTrans, IntbConfAdjGlCogs, IntbCon2DfltAdjGlAcct, IntbConfAdjCostBase, IntbConfDfltAdjtBin, IntbConfAdjtBin, IntbConfCStockSeq, IntbConfCStockHistDay, IntbConfCStockFormat, IntbConfCstkExportItem, IntbConfCstkPdmContract, IntbCon2ImportSeq, IntbConfStopItemChg, IntbConfAddToMxrfe, IntbConfMxrfeVendId, IntbCon2NewIdLabelList, IntbConfUseFormat, IntbConfDefFormat, IntbConfSeqShortItem, IntbConfShortItemLen, IntbConfUseScale, IntbConfStoreWght, IntbConfValidAsstCode, IntbConfWhiteGoods, IntbCon2TransCustId, DateUpdtd, TimeUpdtd, dummy FROM in_config WHERE IntbConfKey = :p0';
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $keys, Criteria::IN);

        return $this;
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
     * @param mixed $intbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfkey($intbconfkey = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFKEY, $intbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfglifac('fooValue');   // WHERE IntbConfGlIfac = 'fooValue'
     * $query->filterByIntbconfglifac('%fooValue%', Criteria::LIKE); // WHERE IntbConfGlIfac LIKE '%fooValue%'
     * $query->filterByIntbconfglifac(['foo', 'bar']); // WHERE IntbConfGlIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfglifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfglifac($intbconfglifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGLIFAC, $intbconfglifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseIw column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseiw('fooValue');   // WHERE IntbConfUseIw = 'fooValue'
     * $query->filterByIntbconfuseiw('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseIw LIKE '%fooValue%'
     * $query->filterByIntbconfuseiw(['foo', 'bar']); // WHERE IntbConfUseIw IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuseiw The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuseiw($intbconfuseiw = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseiw)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEIW, $intbconfuseiw, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfLifoFifo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconflifofifo('fooValue');   // WHERE IntbConfLifoFifo = 'fooValue'
     * $query->filterByIntbconflifofifo('%fooValue%', Criteria::LIKE); // WHERE IntbConfLifoFifo LIKE '%fooValue%'
     * $query->filterByIntbconflifofifo(['foo', 'bar']); // WHERE IntbConfLifoFifo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconflifofifo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconflifofifo($intbconflifofifo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconflifofifo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFLIFOFIFO, $intbconflifofifo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfGoNeg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfgoneg('fooValue');   // WHERE IntbConfGoNeg = 'fooValue'
     * $query->filterByIntbconfgoneg('%fooValue%', Criteria::LIKE); // WHERE IntbConfGoNeg LIKE '%fooValue%'
     * $query->filterByIntbconfgoneg(['foo', 'bar']); // WHERE IntbConfGoNeg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfgoneg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfgoneg($intbconfgoneg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfgoneg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGONEG, $intbconfgoneg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseLots column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuselots('fooValue');   // WHERE IntbConfUseLots = 'fooValue'
     * $query->filterByIntbconfuselots('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseLots LIKE '%fooValue%'
     * $query->filterByIntbconfuselots(['foo', 'bar']); // WHERE IntbConfUseLots IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuselots The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuselots($intbconfuselots = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuselots)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSELOTS, $intbconfuselots, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNbrUppr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnbruppr('fooValue');   // WHERE IntbConfNbrUppr = 'fooValue'
     * $query->filterByIntbconfnbruppr('%fooValue%', Criteria::LIKE); // WHERE IntbConfNbrUppr LIKE '%fooValue%'
     * $query->filterByIntbconfnbruppr(['foo', 'bar']); // WHERE IntbConfNbrUppr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfnbruppr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnbruppr($intbconfnbruppr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnbruppr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNBRUPPR, $intbconfnbruppr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDescUppr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdescuppr('fooValue');   // WHERE IntbConfDescUppr = 'fooValue'
     * $query->filterByIntbconfdescuppr('%fooValue%', Criteria::LIKE); // WHERE IntbConfDescUppr LIKE '%fooValue%'
     * $query->filterByIntbconfdescuppr(['foo', 'bar']); // WHERE IntbConfDescUppr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdescuppr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdescuppr($intbconfdescuppr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdescuppr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDESCUPPR, $intbconfdescuppr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusedesc2('fooValue');   // WHERE IntbConfUseDesc2 = 'fooValue'
     * $query->filterByIntbconfusedesc2('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseDesc2 LIKE '%fooValue%'
     * $query->filterByIntbconfusedesc2(['foo', 'bar']); // WHERE IntbConfUseDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusedesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusedesc2($intbconfusedesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusedesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEDESC2, $intbconfusedesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseUpcCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseupccode('fooValue');   // WHERE IntbConfUseUpcCode = 'fooValue'
     * $query->filterByIntbconfuseupccode('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseUpcCode LIKE '%fooValue%'
     * $query->filterByIntbconfuseupccode(['foo', 'bar']); // WHERE IntbConfUseUpcCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuseupccode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuseupccode($intbconfuseupccode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseupccode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEUPCCODE, $intbconfuseupccode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUpcEanCntrl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupceancntrl('fooValue');   // WHERE IntbConfUpcEanCntrl = 'fooValue'
     * $query->filterByIntbconfupceancntrl('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpcEanCntrl LIKE '%fooValue%'
     * $query->filterByIntbconfupceancntrl(['foo', 'bar']); // WHERE IntbConfUpcEanCntrl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfupceancntrl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupceancntrl($intbconfupceancntrl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupceancntrl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL, $intbconfupceancntrl, $comparison);

        return $this;
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
     * @param mixed $intbconfupcgennbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupcgennbr($intbconfupcgennbr = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCGENNBR, $intbconfupcgennbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2AllowDupUpc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2allowdupupc('fooValue');   // WHERE IntbCon2AllowDupUpc = 'fooValue'
     * $query->filterByIntbcon2allowdupupc('%fooValue%', Criteria::LIKE); // WHERE IntbCon2AllowDupUpc LIKE '%fooValue%'
     * $query->filterByIntbcon2allowdupupc(['foo', 'bar']); // WHERE IntbCon2AllowDupUpc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2allowdupupc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2allowdupupc($intbcon2allowdupupc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2allowdupupc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC, $intbcon2allowdupupc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfXrefNoSpace column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfxrefnospace('fooValue');   // WHERE IntbConfXrefNoSpace = 'fooValue'
     * $query->filterByIntbconfxrefnospace('%fooValue%', Criteria::LIKE); // WHERE IntbConfXrefNoSpace LIKE '%fooValue%'
     * $query->filterByIntbconfxrefnospace(['foo', 'bar']); // WHERE IntbConfXrefNoSpace IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfxrefnospace The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfxrefnospace($intbconfxrefnospace = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfxrefnospace)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFXREFNOSPACE, $intbconfxrefnospace, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUsePricGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusepricgrup('fooValue');   // WHERE IntbConfUsePricGrup = 'fooValue'
     * $query->filterByIntbconfusepricgrup('%fooValue%', Criteria::LIKE); // WHERE IntbConfUsePricGrup LIKE '%fooValue%'
     * $query->filterByIntbconfusepricgrup(['foo', 'bar']); // WHERE IntbConfUsePricGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusepricgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusepricgrup($intbconfusepricgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusepricgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP, $intbconfusepricgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseCommGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusecommgrup('fooValue');   // WHERE IntbConfUseCommGrup = 'fooValue'
     * $query->filterByIntbconfusecommgrup('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseCommGrup LIKE '%fooValue%'
     * $query->filterByIntbconfusecommgrup(['foo', 'bar']); // WHERE IntbConfUseCommGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusecommgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusecommgrup($intbconfusecommgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusecommgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP, $intbconfusecommgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseWarrDays column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusewarrdays('fooValue');   // WHERE IntbConfUseWarrDays = 'fooValue'
     * $query->filterByIntbconfusewarrdays('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseWarrDays LIKE '%fooValue%'
     * $query->filterByIntbconfusewarrdays(['foo', 'bar']); // WHERE IntbConfUseWarrDays IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusewarrdays The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusewarrdays($intbconfusewarrdays = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusewarrdays)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS, $intbconfusewarrdays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfStanBaseDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstanbasedef('fooValue');   // WHERE IntbConfStanBaseDef = 'fooValue'
     * $query->filterByIntbconfstanbasedef('%fooValue%', Criteria::LIKE); // WHERE IntbConfStanBaseDef LIKE '%fooValue%'
     * $query->filterByIntbconfstanbasedef(['foo', 'bar']); // WHERE IntbConfStanBaseDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfstanbasedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfstanbasedef($intbconfstanbasedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstanbasedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTANBASEDEF, $intbconfstanbasedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfGrupDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfgrupdef('fooValue');   // WHERE IntbConfGrupDef = 'fooValue'
     * $query->filterByIntbconfgrupdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfGrupDef LIKE '%fooValue%'
     * $query->filterByIntbconfgrupdef(['foo', 'bar']); // WHERE IntbConfGrupDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfgrupdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfgrupdef($intbconfgrupdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfgrupdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGRUPDEF, $intbconfgrupdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfPricGrupDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfpricgrupdef('fooValue');   // WHERE IntbConfPricGrupDef = 'fooValue'
     * $query->filterByIntbconfpricgrupdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfPricGrupDef LIKE '%fooValue%'
     * $query->filterByIntbconfpricgrupdef(['foo', 'bar']); // WHERE IntbConfPricGrupDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfpricgrupdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfpricgrupdef($intbconfpricgrupdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfpricgrupdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF, $intbconfpricgrupdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCommGrupDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcommgrupdef('fooValue');   // WHERE IntbConfCommGrupDef = 'fooValue'
     * $query->filterByIntbconfcommgrupdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfCommGrupDef LIKE '%fooValue%'
     * $query->filterByIntbconfcommgrupdef(['foo', 'bar']); // WHERE IntbConfCommGrupDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcommgrupdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcommgrupdef($intbconfcommgrupdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcommgrupdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF, $intbconfcommgrupdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfTypeDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftypedef('fooValue');   // WHERE IntbConfTypeDef = 'fooValue'
     * $query->filterByIntbconftypedef('%fooValue%', Criteria::LIKE); // WHERE IntbConfTypeDef LIKE '%fooValue%'
     * $query->filterByIntbconftypedef(['foo', 'bar']); // WHERE IntbConfTypeDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconftypedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconftypedef($intbconftypedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftypedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTYPEDEF, $intbconftypedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMultiLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmultilotref('fooValue');   // WHERE IntbConfMultiLotRef = 'fooValue'
     * $query->filterByIntbconfmultilotref('%fooValue%', Criteria::LIKE); // WHERE IntbConfMultiLotRef LIKE '%fooValue%'
     * $query->filterByIntbconfmultilotref(['foo', 'bar']); // WHERE IntbConfMultiLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfmultilotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfmultilotref($intbconfmultilotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmultilotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMULTILOTREF, $intbconfmultilotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfPricUseItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfpricuseitem('fooValue');   // WHERE IntbConfPricUseItem = 'fooValue'
     * $query->filterByIntbconfpricuseitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfPricUseItem LIKE '%fooValue%'
     * $query->filterByIntbconfpricuseitem(['foo', 'bar']); // WHERE IntbConfPricUseItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfpricuseitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfpricuseitem($intbconfpricuseitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfpricuseitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRICUSEITEM, $intbconfpricuseitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCommUseItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcommuseitem('fooValue');   // WHERE IntbConfCommUseItem = 'fooValue'
     * $query->filterByIntbconfcommuseitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfCommUseItem LIKE '%fooValue%'
     * $query->filterByIntbconfcommuseitem(['foo', 'bar']); // WHERE IntbConfCommUseItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcommuseitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcommuseitem($intbconfcommuseitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcommuseitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM, $intbconfcommuseitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUomSaleDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuomsaledef('fooValue');   // WHERE IntbConfUomSaleDef = 'fooValue'
     * $query->filterByIntbconfuomsaledef('%fooValue%', Criteria::LIKE); // WHERE IntbConfUomSaleDef LIKE '%fooValue%'
     * $query->filterByIntbconfuomsaledef(['foo', 'bar']); // WHERE IntbConfUomSaleDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuomsaledef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuomsaledef($intbconfuomsaledef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuomsaledef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUOMSALEDEF, $intbconfuomsaledef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUomPurDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuompurdef('fooValue');   // WHERE IntbConfUomPurDef = 'fooValue'
     * $query->filterByIntbconfuompurdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfUomPurDef LIKE '%fooValue%'
     * $query->filterByIntbconfuompurdef(['foo', 'bar']); // WHERE IntbConfUomPurDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuompurdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuompurdef($intbconfuompurdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuompurdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUOMPURDEF, $intbconfuompurdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfSviaDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfsviadef('fooValue');   // WHERE IntbConfSviaDef = 'fooValue'
     * $query->filterByIntbconfsviadef('%fooValue%', Criteria::LIKE); // WHERE IntbConfSviaDef LIKE '%fooValue%'
     * $query->filterByIntbconfsviadef(['foo', 'bar']); // WHERE IntbConfSviaDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfsviadef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfsviadef($intbconfsviadef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfsviadef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSVIADEF, $intbconfsviadef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCustxrefOrUse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcustxreforuse('fooValue');   // WHERE IntbConfCustxrefOrUse = 'fooValue'
     * $query->filterByIntbconfcustxreforuse('%fooValue%', Criteria::LIKE); // WHERE IntbConfCustxrefOrUse LIKE '%fooValue%'
     * $query->filterByIntbconfcustxreforuse(['foo', 'bar']); // WHERE IntbConfCustxrefOrUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcustxreforuse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcustxreforuse($intbconfcustxreforuse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcustxreforuse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE, $intbconfcustxreforuse, $comparison);

        return $this;
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
     * @param mixed $intbconfheadgetdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfheadgetdef($intbconfheadgetdef = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADGETDEF, $intbconfheadgetdef, $comparison);

        return $this;
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
     * @param mixed $intbconfitemgetdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfitemgetdef($intbconfitemgetdef = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMGETDEF, $intbconfitemgetdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfGetDispOhAval column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfgetdispohaval('fooValue');   // WHERE IntbConfGetDispOhAval = 'fooValue'
     * $query->filterByIntbconfgetdispohaval('%fooValue%', Criteria::LIKE); // WHERE IntbConfGetDispOhAval LIKE '%fooValue%'
     * $query->filterByIntbconfgetdispohaval(['foo', 'bar']); // WHERE IntbConfGetDispOhAval IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfgetdispohaval The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfgetdispohaval($intbconfgetdispohaval = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfgetdispohaval)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL, $intbconfgetdispohaval, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUserCode1Labl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode1labl('fooValue');   // WHERE IntbConfUserCode1Labl = 'fooValue'
     * $query->filterByIntbconfusercode1labl('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode1Labl LIKE '%fooValue%'
     * $query->filterByIntbconfusercode1labl(['foo', 'bar']); // WHERE IntbConfUserCode1Labl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusercode1labl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusercode1labl($intbconfusercode1labl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode1labl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL, $intbconfusercode1labl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUserCode1Ver column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode1ver('fooValue');   // WHERE IntbConfUserCode1Ver = 'fooValue'
     * $query->filterByIntbconfusercode1ver('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode1Ver LIKE '%fooValue%'
     * $query->filterByIntbconfusercode1ver(['foo', 'bar']); // WHERE IntbConfUserCode1Ver IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusercode1ver The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusercode1ver($intbconfusercode1ver = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode1ver)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE1VER, $intbconfusercode1ver, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUserCode2Labl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode2labl('fooValue');   // WHERE IntbConfUserCode2Labl = 'fooValue'
     * $query->filterByIntbconfusercode2labl('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode2Labl LIKE '%fooValue%'
     * $query->filterByIntbconfusercode2labl(['foo', 'bar']); // WHERE IntbConfUserCode2Labl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusercode2labl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusercode2labl($intbconfusercode2labl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode2labl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL, $intbconfusercode2labl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUserCode2Ver column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusercode2ver('fooValue');   // WHERE IntbConfUserCode2Ver = 'fooValue'
     * $query->filterByIntbconfusercode2ver('%fooValue%', Criteria::LIKE); // WHERE IntbConfUserCode2Ver LIKE '%fooValue%'
     * $query->filterByIntbconfusercode2ver(['foo', 'bar']); // WHERE IntbConfUserCode2Ver IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusercode2ver The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusercode2ver($intbconfusercode2ver = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusercode2ver)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSERCODE2VER, $intbconfusercode2ver, $comparison);

        return $this;
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
     * @param mixed $intbconfitemline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfitemline($intbconfitemline = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMLINE, $intbconfitemline, $comparison);

        return $this;
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
     * @param mixed $intbconfitemcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfitemcols($intbconfitemcols = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMCOLS, $intbconfitemcols, $comparison);

        return $this;
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
     * @param mixed $intbconfheadline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfheadline($intbconfheadline = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADLINE, $intbconfheadline, $comparison);

        return $this;
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
     * @param mixed $intbconfheadcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfheadcols($intbconfheadcols = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFHEADCOLS, $intbconfheadcols, $comparison);

        return $this;
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
     * @param mixed $intbconfdetline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdetline($intbconfdetline = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETLINE, $intbconfdetline, $comparison);

        return $this;
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
     * @param mixed $intbconfdetcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdetcols($intbconfdetcols = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDETCOLS, $intbconfdetcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMinMaxZero column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfminmaxzero('fooValue');   // WHERE IntbConfMinMaxZero = 'fooValue'
     * $query->filterByIntbconfminmaxzero('%fooValue%', Criteria::LIKE); // WHERE IntbConfMinMaxZero LIKE '%fooValue%'
     * $query->filterByIntbconfminmaxzero(['foo', 'bar']); // WHERE IntbConfMinMaxZero IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfminmaxzero The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfminmaxzero($intbconfminmaxzero = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfminmaxzero)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMINMAXZERO, $intbconfminmaxzero, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMinRec column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfminrec('fooValue');   // WHERE IntbConfMinRec = 'fooValue'
     * $query->filterByIntbconfminrec('%fooValue%', Criteria::LIKE); // WHERE IntbConfMinRec LIKE '%fooValue%'
     * $query->filterByIntbconfminrec(['foo', 'bar']); // WHERE IntbConfMinRec IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfminrec The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfminrec($intbconfminrec = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfminrec)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMINREC, $intbconfminrec, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAtBelowMin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfatbelowmin('fooValue');   // WHERE IntbConfAtBelowMin = 'fooValue'
     * $query->filterByIntbconfatbelowmin('%fooValue%', Criteria::LIKE); // WHERE IntbConfAtBelowMin LIKE '%fooValue%'
     * $query->filterByIntbconfatbelowmin(['foo', 'bar']); // WHERE IntbConfAtBelowMin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfatbelowmin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfatbelowmin($intbconfatbelowmin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfatbelowmin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFATBELOWMIN, $intbconfatbelowmin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfOneWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfonewhse('fooValue');   // WHERE IntbConfOneWhse = 'fooValue'
     * $query->filterByIntbconfonewhse('%fooValue%', Criteria::LIKE); // WHERE IntbConfOneWhse LIKE '%fooValue%'
     * $query->filterByIntbconfonewhse(['foo', 'bar']); // WHERE IntbConfOneWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfonewhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfonewhse($intbconfonewhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfonewhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFONEWHSE, $intbconfonewhse, $comparison);

        return $this;
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
     * @param mixed $intbconfytdmth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfytdmth($intbconfytdmth = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFYTDMTH, $intbconfytdmth, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseGramsLtr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusegramsltr('fooValue');   // WHERE IntbConfUseGramsLtr = 'fooValue'
     * $query->filterByIntbconfusegramsltr('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseGramsLtr LIKE '%fooValue%'
     * $query->filterByIntbconfusegramsltr(['foo', 'bar']); // WHERE IntbConfUseGramsLtr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusegramsltr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusegramsltr($intbconfusegramsltr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusegramsltr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR, $intbconfusegramsltr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAbcByWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcbywhse('fooValue');   // WHERE IntbConfAbcByWhse = 'fooValue'
     * $query->filterByIntbconfabcbywhse('%fooValue%', Criteria::LIKE); // WHERE IntbConfAbcByWhse LIKE '%fooValue%'
     * $query->filterByIntbconfabcbywhse(['foo', 'bar']); // WHERE IntbConfAbcByWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfabcbywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabcbywhse($intbconfabcbywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfabcbywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCBYWHSE, $intbconfabcbywhse, $comparison);

        return $this;
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
     * @param mixed $intbconfabcnbrmths The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabcnbrmths($intbconfabcnbrmths = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCNBRMTHS, $intbconfabcnbrmths, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAbcBaseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcbasecode('fooValue');   // WHERE IntbConfAbcBaseCode = 'fooValue'
     * $query->filterByIntbconfabcbasecode('%fooValue%', Criteria::LIKE); // WHERE IntbConfAbcBaseCode LIKE '%fooValue%'
     * $query->filterByIntbconfabcbasecode(['foo', 'bar']); // WHERE IntbConfAbcBaseCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfabcbasecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabcbasecode($intbconfabcbasecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfabcbasecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCBASECODE, $intbconfabcbasecode, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevla($intbconfabclevla = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLA, $intbconfabclevla, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevlb($intbconfabclevlb = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLB, $intbconfabclevlb, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevlc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevlc($intbconfabclevlc = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLC, $intbconfabclevlc, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevld The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevld($intbconfabclevld = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLD, $intbconfabclevld, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevle($intbconfabclevle = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLE, $intbconfabclevle, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevlf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevlf($intbconfabclevlf = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLF, $intbconfabclevlf, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevlg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevlg($intbconfabclevlg = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLG, $intbconfabclevlg, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevlh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevlh($intbconfabclevlh = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLH, $intbconfabclevlh, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevli($intbconfabclevli = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLI, $intbconfabclevli, $comparison);

        return $this;
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
     * @param mixed $intbconfabclevlj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabclevlj($intbconfabclevlj = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCLEVLJ, $intbconfabclevlj, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseForeignX column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseforeignx('fooValue');   // WHERE IntbConfUseForeignX = 'fooValue'
     * $query->filterByIntbconfuseforeignx('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseForeignX LIKE '%fooValue%'
     * $query->filterByIntbconfuseforeignx(['foo', 'bar']); // WHERE IntbConfUseForeignX IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuseforeignx The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuseforeignx($intbconfuseforeignx = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseforeignx)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX, $intbconfuseforeignx, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseNafta column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusenafta('fooValue');   // WHERE IntbConfUseNafta = 'fooValue'
     * $query->filterByIntbconfusenafta('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseNafta LIKE '%fooValue%'
     * $query->filterByIntbconfusenafta(['foo', 'bar']); // WHERE IntbConfUseNafta IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusenafta The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusenafta($intbconfusenafta = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusenafta)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSENAFTA, $intbconfusenafta, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNaftaPrefCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnaftaprefcode('fooValue');   // WHERE IntbConfNaftaPrefCode = 'fooValue'
     * $query->filterByIntbconfnaftaprefcode('%fooValue%', Criteria::LIKE); // WHERE IntbConfNaftaPrefCode LIKE '%fooValue%'
     * $query->filterByIntbconfnaftaprefcode(['foo', 'bar']); // WHERE IntbConfNaftaPrefCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfnaftaprefcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnaftaprefcode($intbconfnaftaprefcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnaftaprefcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE, $intbconfnaftaprefcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNaftaProducer column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnaftaproducer('fooValue');   // WHERE IntbConfNaftaProducer = 'fooValue'
     * $query->filterByIntbconfnaftaproducer('%fooValue%', Criteria::LIKE); // WHERE IntbConfNaftaProducer LIKE '%fooValue%'
     * $query->filterByIntbconfnaftaproducer(['foo', 'bar']); // WHERE IntbConfNaftaProducer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfnaftaproducer The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnaftaproducer($intbconfnaftaproducer = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnaftaproducer)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER, $intbconfnaftaproducer, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNaftaDocCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnaftadoccode('fooValue');   // WHERE IntbConfNaftaDocCode = 'fooValue'
     * $query->filterByIntbconfnaftadoccode('%fooValue%', Criteria::LIKE); // WHERE IntbConfNaftaDocCode LIKE '%fooValue%'
     * $query->filterByIntbconfnaftadoccode(['foo', 'bar']); // WHERE IntbConfNaftaDocCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfnaftadoccode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnaftadoccode($intbconfnaftadoccode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnaftadoccode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE, $intbconfnaftadoccode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfPhysCurrWksh column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfphyscurrwksh('fooValue');   // WHERE IntbConfPhysCurrWksh = 'fooValue'
     * $query->filterByIntbconfphyscurrwksh('%fooValue%', Criteria::LIKE); // WHERE IntbConfPhysCurrWksh LIKE '%fooValue%'
     * $query->filterByIntbconfphyscurrwksh(['foo', 'bar']); // WHERE IntbConfPhysCurrWksh IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfphyscurrwksh The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfphyscurrwksh($intbconfphyscurrwksh = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfphyscurrwksh)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH, $intbconfphyscurrwksh, $comparison);

        return $this;
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
     * @param mixed $intbconf20or30 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconf20or30($intbconf20or30 = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONF20OR30, $intbconf20or30, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDispOrigCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdisporigcnt('fooValue');   // WHERE IntbConfDispOrigCnt = 'fooValue'
     * $query->filterByIntbconfdisporigcnt('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispOrigCnt LIKE '%fooValue%'
     * $query->filterByIntbconfdisporigcnt(['foo', 'bar']); // WHERE IntbConfDispOrigCnt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdisporigcnt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdisporigcnt($intbconfdisporigcnt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdisporigcnt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPORIGCNT, $intbconfdisporigcnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDispGl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdispgl('fooValue');   // WHERE IntbConfDispGl = 'fooValue'
     * $query->filterByIntbconfdispgl('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispGl LIKE '%fooValue%'
     * $query->filterByIntbconfdispgl(['foo', 'bar']); // WHERE IntbConfDispGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdispgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdispgl($intbconfdispgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdispgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPGL, $intbconfdispgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDispRef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdispref('fooValue');   // WHERE IntbConfDispRef = 'fooValue'
     * $query->filterByIntbconfdispref('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispRef LIKE '%fooValue%'
     * $query->filterByIntbconfdispref(['foo', 'bar']); // WHERE IntbConfDispRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdispref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdispref($intbconfdispref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdispref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPREF, $intbconfdispref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDispCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdispcost('fooValue');   // WHERE IntbConfDispCost = 'fooValue'
     * $query->filterByIntbconfdispcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfDispCost LIKE '%fooValue%'
     * $query->filterByIntbconfdispcost(['foo', 'bar']); // WHERE IntbConfDispCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdispcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdispcost($intbconfdispcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdispcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDISPCOST, $intbconfdispcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfPrtVal column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfprtval('fooValue');   // WHERE IntbConfPrtVal = 'fooValue'
     * $query->filterByIntbconfprtval('%fooValue%', Criteria::LIKE); // WHERE IntbConfPrtVal LIKE '%fooValue%'
     * $query->filterByIntbconfprtval(['foo', 'bar']); // WHERE IntbConfPrtVal IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfprtval The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfprtval($intbconfprtval = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfprtval)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRTVAL, $intbconfprtval, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfPrtGl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfprtgl('fooValue');   // WHERE IntbConfPrtGl = 'fooValue'
     * $query->filterByIntbconfprtgl('%fooValue%', Criteria::LIKE); // WHERE IntbConfPrtGl LIKE '%fooValue%'
     * $query->filterByIntbconfprtgl(['foo', 'bar']); // WHERE IntbConfPrtGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfprtgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfprtgl($intbconfprtgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfprtgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFPRTGL, $intbconfprtgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfglacct('fooValue');   // WHERE IntbConfGlAcct = 'fooValue'
     * $query->filterByIntbconfglacct('%fooValue%', Criteria::LIKE); // WHERE IntbConfGlAcct LIKE '%fooValue%'
     * $query->filterByIntbconfglacct(['foo', 'bar']); // WHERE IntbConfGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfglacct($intbconfglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFGLACCT, $intbconfglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfRef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfref('fooValue');   // WHERE IntbConfRef = 'fooValue'
     * $query->filterByIntbconfref('%fooValue%', Criteria::LIKE); // WHERE IntbConfRef LIKE '%fooValue%'
     * $query->filterByIntbconfref(['foo', 'bar']); // WHERE IntbConfRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfref($intbconfref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFREF, $intbconfref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCostType column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcosttype('fooValue');   // WHERE IntbConfCostType = 'fooValue'
     * $query->filterByIntbconfcosttype('%fooValue%', Criteria::LIKE); // WHERE IntbConfCostType LIKE '%fooValue%'
     * $query->filterByIntbconfcosttype(['foo', 'bar']); // WHERE IntbConfCostType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcosttype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcosttype($intbconfcosttype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcosttype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCOSTTYPE, $intbconfcosttype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNormalOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnormalonly('fooValue');   // WHERE IntbConfNormalOnly = 'fooValue'
     * $query->filterByIntbconfnormalonly('%fooValue%', Criteria::LIKE); // WHERE IntbConfNormalOnly LIKE '%fooValue%'
     * $query->filterByIntbconfnormalonly(['foo', 'bar']); // WHERE IntbConfNormalOnly IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfnormalonly The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnormalonly($intbconfnormalonly = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnormalonly)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNORMALONLY, $intbconfnormalonly, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseWhseDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusewhsedef('fooValue');   // WHERE IntbConfUseWhseDef = 'fooValue'
     * $query->filterByIntbconfusewhsedef('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseWhseDef LIKE '%fooValue%'
     * $query->filterByIntbconfusewhsedef(['foo', 'bar']); // WHERE IntbConfUseWhseDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusewhsedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusewhsedef($intbconfusewhsedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusewhsedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF, $intbconfusewhsedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse01 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse01('fooValue');   // WHERE IntbCon2DfltWhse01 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse01('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse01 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse01(['foo', 'bar']); // WHERE IntbCon2DfltWhse01 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse01 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse01($intbcon2dfltwhse01 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse01)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE01, $intbcon2dfltwhse01, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse02 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse02('fooValue');   // WHERE IntbCon2DfltWhse02 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse02('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse02 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse02(['foo', 'bar']); // WHERE IntbCon2DfltWhse02 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse02 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse02($intbcon2dfltwhse02 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse02)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE02, $intbcon2dfltwhse02, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse03 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse03('fooValue');   // WHERE IntbCon2DfltWhse03 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse03('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse03 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse03(['foo', 'bar']); // WHERE IntbCon2DfltWhse03 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse03 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse03($intbcon2dfltwhse03 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse03)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE03, $intbcon2dfltwhse03, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse04 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse04('fooValue');   // WHERE IntbCon2DfltWhse04 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse04('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse04 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse04(['foo', 'bar']); // WHERE IntbCon2DfltWhse04 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse04 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse04($intbcon2dfltwhse04 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse04)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE04, $intbcon2dfltwhse04, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse05 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse05('fooValue');   // WHERE IntbCon2DfltWhse05 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse05('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse05 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse05(['foo', 'bar']); // WHERE IntbCon2DfltWhse05 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse05 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse05($intbcon2dfltwhse05 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse05)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE05, $intbcon2dfltwhse05, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse06 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse06('fooValue');   // WHERE IntbCon2DfltWhse06 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse06('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse06 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse06(['foo', 'bar']); // WHERE IntbCon2DfltWhse06 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse06 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse06($intbcon2dfltwhse06 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse06)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE06, $intbcon2dfltwhse06, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse07 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse07('fooValue');   // WHERE IntbCon2DfltWhse07 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse07('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse07 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse07(['foo', 'bar']); // WHERE IntbCon2DfltWhse07 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse07 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse07($intbcon2dfltwhse07 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse07)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE07, $intbcon2dfltwhse07, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse08 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse08('fooValue');   // WHERE IntbCon2DfltWhse08 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse08('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse08 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse08(['foo', 'bar']); // WHERE IntbCon2DfltWhse08 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse08 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse08($intbcon2dfltwhse08 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse08)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE08, $intbcon2dfltwhse08, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse09 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse09('fooValue');   // WHERE IntbCon2DfltWhse09 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse09('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse09 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse09(['foo', 'bar']); // WHERE IntbCon2DfltWhse09 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse09 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse09($intbcon2dfltwhse09 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse09)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE09, $intbcon2dfltwhse09, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltWhse10 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltwhse10('fooValue');   // WHERE IntbCon2DfltWhse10 = 'fooValue'
     * $query->filterByIntbcon2dfltwhse10('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltWhse10 LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltwhse10(['foo', 'bar']); // WHERE IntbCon2DfltWhse10 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltwhse10 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltwhse10($intbcon2dfltwhse10 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltwhse10)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTWHSE10, $intbcon2dfltwhse10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfBinDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfbindef('fooValue');   // WHERE IntbConfBinDef = 'fooValue'
     * $query->filterByIntbconfbindef('%fooValue%', Criteria::LIKE); // WHERE IntbConfBinDef LIKE '%fooValue%'
     * $query->filterByIntbconfbindef(['foo', 'bar']); // WHERE IntbConfBinDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfbindef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfbindef($intbconfbindef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfbindef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFBINDEF, $intbconfbindef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCyclDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcycldef('fooValue');   // WHERE IntbConfCyclDef = 'fooValue'
     * $query->filterByIntbconfcycldef('%fooValue%', Criteria::LIKE); // WHERE IntbConfCyclDef LIKE '%fooValue%'
     * $query->filterByIntbconfcycldef(['foo', 'bar']); // WHERE IntbConfCyclDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcycldef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcycldef($intbconfcycldef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcycldef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCYCLDEF, $intbconfcycldef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfStatDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstatdef('fooValue');   // WHERE IntbConfStatDef = 'fooValue'
     * $query->filterByIntbconfstatdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfStatDef LIKE '%fooValue%'
     * $query->filterByIntbconfstatdef(['foo', 'bar']); // WHERE IntbConfStatDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfstatdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfstatdef($intbconfstatdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstatdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTATDEF, $intbconfstatdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAbcDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfabcdef('fooValue');   // WHERE IntbConfAbcDef = 'fooValue'
     * $query->filterByIntbconfabcdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfAbcDef LIKE '%fooValue%'
     * $query->filterByIntbconfabcdef(['foo', 'bar']); // WHERE IntbConfAbcDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfabcdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfabcdef($intbconfabcdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfabcdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFABCDEF, $intbconfabcdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfSpecOrdrDef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfspecordrdef('fooValue');   // WHERE IntbConfSpecOrdrDef = 'fooValue'
     * $query->filterByIntbconfspecordrdef('%fooValue%', Criteria::LIKE); // WHERE IntbConfSpecOrdrDef LIKE '%fooValue%'
     * $query->filterByIntbconfspecordrdef(['foo', 'bar']); // WHERE IntbConfSpecOrdrDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfspecordrdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfspecordrdef($intbconfspecordrdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfspecordrdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSPECORDRDEF, $intbconfspecordrdef, $comparison);

        return $this;
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
     * @param mixed $intbconfordrpntdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfordrpntdef($intbconfordrpntdef = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRPNTDEF, $intbconfordrpntdef, $comparison);

        return $this;
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
     * @param mixed $intbconfmaxdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfmaxdef($intbconfmaxdef = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMAXDEF, $intbconfmaxdef, $comparison);

        return $this;
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
     * @param mixed $intbconfordrqtydef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfordrqtydef($intbconfordrqtydef = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFORDRQTYDEF, $intbconfordrqtydef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfTrcptAllowCmpl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrcptallowcmpl('fooValue');   // WHERE IntbConfTrcptAllowCmpl = 'fooValue'
     * $query->filterByIntbconftrcptallowcmpl('%fooValue%', Criteria::LIKE); // WHERE IntbConfTrcptAllowCmpl LIKE '%fooValue%'
     * $query->filterByIntbconftrcptallowcmpl(['foo', 'bar']); // WHERE IntbConfTrcptAllowCmpl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconftrcptallowcmpl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconftrcptallowcmpl($intbconftrcptallowcmpl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftrcptallowcmpl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL, $intbconftrcptallowcmpl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfTreCmmtStock column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrecmmtstock('fooValue');   // WHERE IntbConfTreCmmtStock = 'fooValue'
     * $query->filterByIntbconftrecmmtstock('%fooValue%', Criteria::LIKE); // WHERE IntbConfTreCmmtStock LIKE '%fooValue%'
     * $query->filterByIntbconftrecmmtstock(['foo', 'bar']); // WHERE IntbConfTreCmmtStock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconftrecmmtstock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconftrecmmtstock($intbconftrecmmtstock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftrecmmtstock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK, $intbconftrecmmtstock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusefrtin('fooValue');   // WHERE IntbConfUseFrtIn = 'fooValue'
     * $query->filterByIntbconfusefrtin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseFrtIn LIKE '%fooValue%'
     * $query->filterByIntbconfusefrtin(['foo', 'bar']); // WHERE IntbConfUseFrtIn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusefrtin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusefrtin($intbconfusefrtin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusefrtin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEFRTIN, $intbconfusefrtin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfEachOrUom column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfeachoruom('fooValue');   // WHERE IntbConfEachOrUom = 'fooValue'
     * $query->filterByIntbconfeachoruom('%fooValue%', Criteria::LIKE); // WHERE IntbConfEachOrUom LIKE '%fooValue%'
     * $query->filterByIntbconfeachoruom(['foo', 'bar']); // WHERE IntbConfEachOrUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfeachoruom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfeachoruom($intbconfeachoruom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfeachoruom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFEACHORUOM, $intbconfeachoruom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNegLotCorr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfneglotcorr('fooValue');   // WHERE IntbConfNegLotCorr = 'fooValue'
     * $query->filterByIntbconfneglotcorr('%fooValue%', Criteria::LIKE); // WHERE IntbConfNegLotCorr LIKE '%fooValue%'
     * $query->filterByIntbconfneglotcorr(['foo', 'bar']); // WHERE IntbConfNegLotCorr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfneglotcorr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfneglotcorr($intbconfneglotcorr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfneglotcorr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNEGLOTCORR, $intbconfneglotcorr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfTrnsGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftrnsglacct('fooValue');   // WHERE IntbConfTrnsGlAcct = 'fooValue'
     * $query->filterByIntbconftrnsglacct('%fooValue%', Criteria::LIKE); // WHERE IntbConfTrnsGlAcct LIKE '%fooValue%'
     * $query->filterByIntbconftrnsglacct(['foo', 'bar']); // WHERE IntbConfTrnsGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconftrnsglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconftrnsglacct($intbconftrnsglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftrnsglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRNSGLACCT, $intbconftrnsglacct, $comparison);

        return $this;
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
     * @param mixed $intbconftrnsprotstock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconftrnsprotstock($intbconftrnsprotstock = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, $intbconftrnsprotstock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfNumericItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfnumericitem('fooValue');   // WHERE IntbConfNumericItem = 'fooValue'
     * $query->filterByIntbconfnumericitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfNumericItem LIKE '%fooValue%'
     * $query->filterByIntbconfnumericitem(['foo', 'bar']); // WHERE IntbConfNumericItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfnumericitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnumericitem($intbconfnumericitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfnumericitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNUMERICITEM, $intbconfnumericitem, $comparison);

        return $this;
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
     * @param mixed $intbconfitemdigits The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfitemdigits($intbconfitemdigits = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFITEMDIGITS, $intbconfitemdigits, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfSingleWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfsinglewhse('fooValue');   // WHERE IntbConfSingleWhse = 'fooValue'
     * $query->filterByIntbconfsinglewhse('%fooValue%', Criteria::LIKE); // WHERE IntbConfSingleWhse LIKE '%fooValue%'
     * $query->filterByIntbconfsinglewhse(['foo', 'bar']); // WHERE IntbConfSingleWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfsinglewhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfsinglewhse($intbconfsinglewhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfsinglewhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSINGLEWHSE, $intbconfsinglewhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUpdUsePct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdusepct('fooValue');   // WHERE IntbConfUpdUsePct = 'fooValue'
     * $query->filterByIntbconfupdusepct('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdUsePct LIKE '%fooValue%'
     * $query->filterByIntbconfupdusepct(['foo', 'bar']); // WHERE IntbConfUpdUsePct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfupdusepct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupdusepct($intbconfupdusepct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdusepct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDUSEPCT, $intbconfupdusepct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUpdPric column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdpric('fooValue');   // WHERE IntbConfUpdPric = 'fooValue'
     * $query->filterByIntbconfupdpric('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdPric LIKE '%fooValue%'
     * $query->filterByIntbconfupdpric(['foo', 'bar']); // WHERE IntbConfUpdPric IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfupdpric The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupdpric($intbconfupdpric = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdpric)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDPRIC, $intbconfupdpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUpdStdCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdstdcost('fooValue');   // WHERE IntbConfUpdStdCost = 'fooValue'
     * $query->filterByIntbconfupdstdcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdStdCost LIKE '%fooValue%'
     * $query->filterByIntbconfupdstdcost(['foo', 'bar']); // WHERE IntbConfUpdStdCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfupdstdcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupdstdcost($intbconfupdstdcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdstdcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDSTDCOST, $intbconfupdstdcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUpdXrefCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupdxrefcost('fooValue');   // WHERE IntbConfUpdXrefCost = 'fooValue'
     * $query->filterByIntbconfupdxrefcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpdXrefCost LIKE '%fooValue%'
     * $query->filterByIntbconfupdxrefcost(['foo', 'bar']); // WHERE IntbConfUpdXrefCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfupdxrefcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupdxrefcost($intbconfupdxrefcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupdxrefcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPDXREFCOST, $intbconfupdxrefcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfIqpaUpdDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfiqpaupddate('fooValue');   // WHERE IntbConfIqpaUpdDate = 'fooValue'
     * $query->filterByIntbconfiqpaupddate('%fooValue%', Criteria::LIKE); // WHERE IntbConfIqpaUpdDate LIKE '%fooValue%'
     * $query->filterByIntbconfiqpaupddate(['foo', 'bar']); // WHERE IntbConfIqpaUpdDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfiqpaupddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfiqpaupddate($intbconfiqpaupddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfiqpaupddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE, $intbconfiqpaupddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUpcXrefOptn column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfupcxrefoptn('fooValue');   // WHERE IntbConfUpcXrefOptn = 'fooValue'
     * $query->filterByIntbconfupcxrefoptn('%fooValue%', Criteria::LIKE); // WHERE IntbConfUpcXrefOptn LIKE '%fooValue%'
     * $query->filterByIntbconfupcxrefoptn(['foo', 'bar']); // WHERE IntbConfUpcXrefOptn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfupcxrefoptn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfupcxrefoptn($intbconfupcxrefoptn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfupcxrefoptn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN, $intbconfupcxrefoptn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfTranViewLIB column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconftranviewlib('fooValue');   // WHERE IntbConfTranViewLIB = 'fooValue'
     * $query->filterByIntbconftranviewlib('%fooValue%', Criteria::LIKE); // WHERE IntbConfTranViewLIB LIKE '%fooValue%'
     * $query->filterByIntbconftranviewlib(['foo', 'bar']); // WHERE IntbConfTranViewLIB IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconftranviewlib The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconftranviewlib($intbconftranviewlib = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconftranviewlib)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFTRANVIEWLIB, $intbconftranviewlib, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfResvCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfresvcost('fooValue');   // WHERE IntbConfResvCost = 'fooValue'
     * $query->filterByIntbconfresvcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfResvCost LIKE '%fooValue%'
     * $query->filterByIntbconfresvcost(['foo', 'bar']); // WHERE IntbConfResvCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfresvcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfresvcost($intbconfresvcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfresvcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFRESVCOST, $intbconfresvcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2TranZeroRqst column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2tranzerorqst('fooValue');   // WHERE IntbCon2TranZeroRqst = 'fooValue'
     * $query->filterByIntbcon2tranzerorqst('%fooValue%', Criteria::LIKE); // WHERE IntbCon2TranZeroRqst LIKE '%fooValue%'
     * $query->filterByIntbcon2tranzerorqst(['foo', 'bar']); // WHERE IntbCon2TranZeroRqst IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2tranzerorqst The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2tranzerorqst($intbcon2tranzerorqst = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2tranzerorqst)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2TRANZERORQST, $intbcon2tranzerorqst, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMonEndAdjDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmonendadjdate('fooValue');   // WHERE IntbConfMonEndAdjDate = 'fooValue'
     * $query->filterByIntbconfmonendadjdate('%fooValue%', Criteria::LIKE); // WHERE IntbConfMonEndAdjDate LIKE '%fooValue%'
     * $query->filterByIntbconfmonendadjdate(['foo', 'bar']); // WHERE IntbConfMonEndAdjDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfmonendadjdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfmonendadjdate($intbconfmonendadjdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmonendadjdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMONENDADJDATE, $intbconfmonendadjdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMonEndTrnDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmonendtrndate('fooValue');   // WHERE IntbConfMonEndTrnDate = 'fooValue'
     * $query->filterByIntbconfmonendtrndate('%fooValue%', Criteria::LIKE); // WHERE IntbConfMonEndTrnDate LIKE '%fooValue%'
     * $query->filterByIntbconfmonendtrndate(['foo', 'bar']); // WHERE IntbConfMonEndTrnDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfmonendtrndate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfmonendtrndate($intbconfmonendtrndate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmonendtrndate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE, $intbconfmonendtrndate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMonEndLogDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmonendlogdate('fooValue');   // WHERE IntbConfMonEndLogDate = 'fooValue'
     * $query->filterByIntbconfmonendlogdate('%fooValue%', Criteria::LIKE); // WHERE IntbConfMonEndLogDate LIKE '%fooValue%'
     * $query->filterByIntbconfmonendlogdate(['foo', 'bar']); // WHERE IntbConfMonEndLogDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfmonendlogdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfmonendlogdate($intbconfmonendlogdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmonendlogdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE, $intbconfmonendlogdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDStatProc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdstatproc('fooValue');   // WHERE IntbConfDStatProc = 'fooValue'
     * $query->filterByIntbconfdstatproc('%fooValue%', Criteria::LIKE); // WHERE IntbConfDStatProc LIKE '%fooValue%'
     * $query->filterByIntbconfdstatproc(['foo', 'bar']); // WHERE IntbConfDStatProc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdstatproc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdstatproc($intbconfdstatproc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdstatproc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDSTATPROC, $intbconfdstatproc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfStanCostUpd column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstancostupd('fooValue');   // WHERE IntbConfStanCostUpd = 'fooValue'
     * $query->filterByIntbconfstancostupd('%fooValue%', Criteria::LIKE); // WHERE IntbConfStanCostUpd LIKE '%fooValue%'
     * $query->filterByIntbconfstancostupd(['foo', 'bar']); // WHERE IntbConfStanCostUpd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfstancostupd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfstancostupd($intbconfstancostupd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstancostupd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD, $intbconfstancostupd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfLastCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconflastcost('fooValue');   // WHERE IntbConfLastCost = 'fooValue'
     * $query->filterByIntbconflastcost('%fooValue%', Criteria::LIKE); // WHERE IntbConfLastCost LIKE '%fooValue%'
     * $query->filterByIntbconflastcost(['foo', 'bar']); // WHERE IntbConfLastCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconflastcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconflastcost($intbconflastcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconflastcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFLASTCOST, $intbconflastcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseSOrGPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusesorgpct('fooValue');   // WHERE IntbConfUseSOrGPct = 'fooValue'
     * $query->filterByIntbconfusesorgpct('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseSOrGPct LIKE '%fooValue%'
     * $query->filterByIntbconfusesorgpct(['foo', 'bar']); // WHERE IntbConfUseSOrGPct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusesorgpct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusesorgpct($intbconfusesorgpct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusesorgpct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSESORGPCT, $intbconfusesorgpct, $comparison);

        return $this;
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
     * @param mixed $intbconfaddonstan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfaddonstan($intbconfaddonstan = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADDONSTAN, $intbconfaddonstan, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfStdCostError column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstdcosterror('fooValue');   // WHERE IntbConfStdCostError = 'fooValue'
     * $query->filterByIntbconfstdcosterror('%fooValue%', Criteria::LIKE); // WHERE IntbConfStdCostError LIKE '%fooValue%'
     * $query->filterByIntbconfstdcosterror(['foo', 'bar']); // WHERE IntbConfStdCostError IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfstdcosterror The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfstdcosterror($intbconfstdcosterror = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstdcosterror)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR, $intbconfstdcosterror, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAvgCurrFive column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfavgcurrfive('fooValue');   // WHERE IntbConfAvgCurrFive = 'fooValue'
     * $query->filterByIntbconfavgcurrfive('%fooValue%', Criteria::LIKE); // WHERE IntbConfAvgCurrFive LIKE '%fooValue%'
     * $query->filterByIntbconfavgcurrfive(['foo', 'bar']); // WHERE IntbConfAvgCurrFive IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfavgcurrfive The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfavgcurrfive($intbconfavgcurrfive = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfavgcurrfive)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE, $intbconfavgcurrfive, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseCntrlBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusecntrlbin('fooValue');   // WHERE IntbConfUseCntrlBin = 'fooValue'
     * $query->filterByIntbconfusecntrlbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseCntrlBin LIKE '%fooValue%'
     * $query->filterByIntbconfusecntrlbin(['foo', 'bar']); // WHERE IntbConfUseCntrlBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusecntrlbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusecntrlbin($intbconfusecntrlbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusecntrlbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN, $intbconfusecntrlbin, $comparison);

        return $this;
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
     * @param mixed $intbconfnbrbinareas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfnbrbinareas($intbconfnbrbinareas = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFNBRBINAREAS, $intbconfnbrbinareas, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseMultBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusemultbin('fooValue');   // WHERE IntbConfUseMultBin = 'fooValue'
     * $query->filterByIntbconfusemultbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseMultBin LIKE '%fooValue%'
     * $query->filterByIntbconfusemultbin(['foo', 'bar']); // WHERE IntbConfUseMultBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusemultbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusemultbin($intbconfusemultbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusemultbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEMULTBIN, $intbconfusemultbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDfltWhseBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdfltwhsebin('fooValue');   // WHERE IntbConfDfltWhseBin = 'fooValue'
     * $query->filterByIntbconfdfltwhsebin('%fooValue%', Criteria::LIKE); // WHERE IntbConfDfltWhseBin LIKE '%fooValue%'
     * $query->filterByIntbconfdfltwhsebin(['foo', 'bar']); // WHERE IntbConfDfltWhseBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdfltwhsebin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdfltwhsebin($intbconfdfltwhsebin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdfltwhsebin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN, $intbconfdfltwhsebin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDfltBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdfltbin('fooValue');   // WHERE IntbConfDfltBin = 'fooValue'
     * $query->filterByIntbconfdfltbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfDfltBin LIKE '%fooValue%'
     * $query->filterByIntbconfdfltbin(['foo', 'bar']); // WHERE IntbConfDfltBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdfltbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdfltbin($intbconfdfltbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdfltbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDFLTBIN, $intbconfdfltbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCtryItemLot column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfctryitemlot('fooValue');   // WHERE IntbConfCtryItemLot = 'fooValue'
     * $query->filterByIntbconfctryitemlot('%fooValue%', Criteria::LIKE); // WHERE IntbConfCtryItemLot LIKE '%fooValue%'
     * $query->filterByIntbconfctryitemlot(['foo', 'bar']); // WHERE IntbConfCtryItemLot IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfctryitemlot The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfctryitemlot($intbconfctryitemlot = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfctryitemlot)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT, $intbconfctryitemlot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseShipBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseshipbin('fooValue');   // WHERE IntbConfUseShipBin = 'fooValue'
     * $query->filterByIntbconfuseshipbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseShipBin LIKE '%fooValue%'
     * $query->filterByIntbconfuseshipbin(['foo', 'bar']); // WHERE IntbConfUseShipBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuseshipbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuseshipbin($intbconfuseshipbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseshipbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSESHIPBIN, $intbconfuseshipbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2PrtBinrLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2prtbinrlabel('fooValue');   // WHERE IntbCon2PrtBinrLabel = 'fooValue'
     * $query->filterByIntbcon2prtbinrlabel('%fooValue%', Criteria::LIKE); // WHERE IntbCon2PrtBinrLabel LIKE '%fooValue%'
     * $query->filterByIntbcon2prtbinrlabel(['foo', 'bar']); // WHERE IntbCon2PrtBinrLabel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2prtbinrlabel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2prtbinrlabel($intbcon2prtbinrlabel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2prtbinrlabel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL, $intbcon2prtbinrlabel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2ItemLookup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2itemlookup('fooValue');   // WHERE IntbCon2ItemLookup = 'fooValue'
     * $query->filterByIntbcon2itemlookup('%fooValue%', Criteria::LIKE); // WHERE IntbCon2ItemLookup LIKE '%fooValue%'
     * $query->filterByIntbcon2itemlookup(['foo', 'bar']); // WHERE IntbCon2ItemLookup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2itemlookup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2itemlookup($intbcon2itemlookup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2itemlookup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP, $intbcon2itemlookup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfIncldCti column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfincldcti('fooValue');   // WHERE IntbConfIncldCti = 'fooValue'
     * $query->filterByIntbconfincldcti('%fooValue%', Criteria::LIKE); // WHERE IntbConfIncldCti LIKE '%fooValue%'
     * $query->filterByIntbconfincldcti(['foo', 'bar']); // WHERE IntbConfIncldCti IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfincldcti The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfincldcti($intbconfincldcti = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfincldcti)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFINCLDCTI, $intbconfincldcti, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCertImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcertimage('fooValue');   // WHERE IntbConfCertImage = 'fooValue'
     * $query->filterByIntbconfcertimage('%fooValue%', Criteria::LIKE); // WHERE IntbConfCertImage LIKE '%fooValue%'
     * $query->filterByIntbconfcertimage(['foo', 'bar']); // WHERE IntbConfCertImage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcertimage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcertimage($intbconfcertimage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcertimage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCERTIMAGE, $intbconfcertimage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDrawImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdrawimage('fooValue');   // WHERE IntbConfDrawImage = 'fooValue'
     * $query->filterByIntbconfdrawimage('%fooValue%', Criteria::LIKE); // WHERE IntbConfDrawImage LIKE '%fooValue%'
     * $query->filterByIntbconfdrawimage(['foo', 'bar']); // WHERE IntbConfDrawImage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdrawimage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdrawimage($intbconfdrawimage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdrawimage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDRAWIMAGE, $intbconfdrawimage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfConfirmImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfconfirmimage('fooValue');   // WHERE IntbConfConfirmImage = 'fooValue'
     * $query->filterByIntbconfconfirmimage('%fooValue%', Criteria::LIKE); // WHERE IntbConfConfirmImage LIKE '%fooValue%'
     * $query->filterByIntbconfconfirmimage(['foo', 'bar']); // WHERE IntbConfConfirmImage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfconfirmimage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfconfirmimage($intbconfconfirmimage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfconfirmimage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE, $intbconfconfirmimage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2ProductImage column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2productimage('fooValue');   // WHERE IntbCon2ProductImage = 'fooValue'
     * $query->filterByIntbcon2productimage('%fooValue%', Criteria::LIKE); // WHERE IntbCon2ProductImage LIKE '%fooValue%'
     * $query->filterByIntbcon2productimage(['foo', 'bar']); // WHERE IntbCon2ProductImage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2productimage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2productimage($intbcon2productimage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2productimage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE, $intbcon2productimage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefPick column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefpick('fooValue');   // WHERE IntbConfDefPick = 'fooValue'
     * $query->filterByIntbconfdefpick('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefPick LIKE '%fooValue%'
     * $query->filterByIntbconfdefpick(['foo', 'bar']); // WHERE IntbConfDefPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefpick($intbconfdefpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFPICK, $intbconfdefpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefPack column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefpack('fooValue');   // WHERE IntbConfDefPack = 'fooValue'
     * $query->filterByIntbconfdefpack('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefPack LIKE '%fooValue%'
     * $query->filterByIntbconfdefpack(['foo', 'bar']); // WHERE IntbConfDefPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefpack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefpack($intbconfdefpack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefpack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFPACK, $intbconfdefpack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefinvc('fooValue');   // WHERE IntbConfDefInvc = 'fooValue'
     * $query->filterByIntbconfdefinvc('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefInvc LIKE '%fooValue%'
     * $query->filterByIntbconfdefinvc(['foo', 'bar']); // WHERE IntbConfDefInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefinvc($intbconfdefinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFINVC, $intbconfdefinvc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefAck column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefack('fooValue');   // WHERE IntbConfDefAck = 'fooValue'
     * $query->filterByIntbconfdefack('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefAck LIKE '%fooValue%'
     * $query->filterByIntbconfdefack(['foo', 'bar']); // WHERE IntbConfDefAck IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefack($intbconfdefack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFACK, $intbconfdefack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefQuot column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefquot('fooValue');   // WHERE IntbConfDefQuot = 'fooValue'
     * $query->filterByIntbconfdefquot('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefQuot LIKE '%fooValue%'
     * $query->filterByIntbconfdefquot(['foo', 'bar']); // WHERE IntbConfDefQuot IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefquot The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefquot($intbconfdefquot = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefquot)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFQUOT, $intbconfdefquot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefPo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefpo('fooValue');   // WHERE IntbConfDefPo = 'fooValue'
     * $query->filterByIntbconfdefpo('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefPo LIKE '%fooValue%'
     * $query->filterByIntbconfdefpo(['foo', 'bar']); // WHERE IntbConfDefPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefpo($intbconfdefpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFPO, $intbconfdefpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefTrans column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdeftrans('fooValue');   // WHERE IntbConfDefTrans = 'fooValue'
     * $query->filterByIntbconfdeftrans('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefTrans LIKE '%fooValue%'
     * $query->filterByIntbconfdeftrans(['foo', 'bar']); // WHERE IntbConfDefTrans IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdeftrans The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdeftrans($intbconfdeftrans = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdeftrans)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFTRANS, $intbconfdeftrans, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAdjGlCogs column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfadjglcogs('fooValue');   // WHERE IntbConfAdjGlCogs = 'fooValue'
     * $query->filterByIntbconfadjglcogs('%fooValue%', Criteria::LIKE); // WHERE IntbConfAdjGlCogs LIKE '%fooValue%'
     * $query->filterByIntbconfadjglcogs(['foo', 'bar']); // WHERE IntbConfAdjGlCogs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfadjglcogs The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfadjglcogs($intbconfadjglcogs = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfadjglcogs)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADJGLCOGS, $intbconfadjglcogs, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2DfltAdjGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2dfltadjglacct('fooValue');   // WHERE IntbCon2DfltAdjGlAcct = 'fooValue'
     * $query->filterByIntbcon2dfltadjglacct('%fooValue%', Criteria::LIKE); // WHERE IntbCon2DfltAdjGlAcct LIKE '%fooValue%'
     * $query->filterByIntbcon2dfltadjglacct(['foo', 'bar']); // WHERE IntbCon2DfltAdjGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2dfltadjglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2dfltadjglacct($intbcon2dfltadjglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2dfltadjglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT, $intbcon2dfltadjglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAdjCostBase column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfadjcostbase('fooValue');   // WHERE IntbConfAdjCostBase = 'fooValue'
     * $query->filterByIntbconfadjcostbase('%fooValue%', Criteria::LIKE); // WHERE IntbConfAdjCostBase LIKE '%fooValue%'
     * $query->filterByIntbconfadjcostbase(['foo', 'bar']); // WHERE IntbConfAdjCostBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfadjcostbase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfadjcostbase($intbconfadjcostbase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfadjcostbase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADJCOSTBASE, $intbconfadjcostbase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDfltAdjtBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdfltadjtbin('fooValue');   // WHERE IntbConfDfltAdjtBin = 'fooValue'
     * $query->filterByIntbconfdfltadjtbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfDfltAdjtBin LIKE '%fooValue%'
     * $query->filterByIntbconfdfltadjtbin(['foo', 'bar']); // WHERE IntbConfDfltAdjtBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdfltadjtbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdfltadjtbin($intbconfdfltadjtbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdfltadjtbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN, $intbconfdfltadjtbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAdjtBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfadjtbin('fooValue');   // WHERE IntbConfAdjtBin = 'fooValue'
     * $query->filterByIntbconfadjtbin('%fooValue%', Criteria::LIKE); // WHERE IntbConfAdjtBin LIKE '%fooValue%'
     * $query->filterByIntbconfadjtbin(['foo', 'bar']); // WHERE IntbConfAdjtBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfadjtbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfadjtbin($intbconfadjtbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfadjtbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADJTBIN, $intbconfadjtbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCStockSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstockseq('fooValue');   // WHERE IntbConfCStockSeq = 'fooValue'
     * $query->filterByIntbconfcstockseq('%fooValue%', Criteria::LIKE); // WHERE IntbConfCStockSeq LIKE '%fooValue%'
     * $query->filterByIntbconfcstockseq(['foo', 'bar']); // WHERE IntbConfCStockSeq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcstockseq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcstockseq($intbconfcstockseq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstockseq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ, $intbconfcstockseq, $comparison);

        return $this;
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
     * @param mixed $intbconfcstockhistday The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcstockhistday($intbconfcstockhistday = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, $intbconfcstockhistday, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCStockFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstockformat('fooValue');   // WHERE IntbConfCStockFormat = 'fooValue'
     * $query->filterByIntbconfcstockformat('%fooValue%', Criteria::LIKE); // WHERE IntbConfCStockFormat LIKE '%fooValue%'
     * $query->filterByIntbconfcstockformat(['foo', 'bar']); // WHERE IntbConfCStockFormat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcstockformat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcstockformat($intbconfcstockformat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstockformat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT, $intbconfcstockformat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCstkExportItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstkexportitem('fooValue');   // WHERE IntbConfCstkExportItem = 'fooValue'
     * $query->filterByIntbconfcstkexportitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfCstkExportItem LIKE '%fooValue%'
     * $query->filterByIntbconfcstkexportitem(['foo', 'bar']); // WHERE IntbConfCstkExportItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcstkexportitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcstkexportitem($intbconfcstkexportitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstkexportitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM, $intbconfcstkexportitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfCstkPdmContract column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfcstkpdmcontract('fooValue');   // WHERE IntbConfCstkPdmContract = 'fooValue'
     * $query->filterByIntbconfcstkpdmcontract('%fooValue%', Criteria::LIKE); // WHERE IntbConfCstkPdmContract LIKE '%fooValue%'
     * $query->filterByIntbconfcstkpdmcontract(['foo', 'bar']); // WHERE IntbConfCstkPdmContract IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfcstkpdmcontract The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfcstkpdmcontract($intbconfcstkpdmcontract = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfcstkpdmcontract)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT, $intbconfcstkpdmcontract, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2ImportSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2importseq('fooValue');   // WHERE IntbCon2ImportSeq = 'fooValue'
     * $query->filterByIntbcon2importseq('%fooValue%', Criteria::LIKE); // WHERE IntbCon2ImportSeq LIKE '%fooValue%'
     * $query->filterByIntbcon2importseq(['foo', 'bar']); // WHERE IntbCon2ImportSeq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2importseq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2importseq($intbcon2importseq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2importseq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2IMPORTSEQ, $intbcon2importseq, $comparison);

        return $this;
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
     * @param mixed $intbconfstopitemchg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfstopitemchg($intbconfstopitemchg = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, $intbconfstopitemchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfAddToMxrfe column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfaddtomxrfe('fooValue');   // WHERE IntbConfAddToMxrfe = 'fooValue'
     * $query->filterByIntbconfaddtomxrfe('%fooValue%', Criteria::LIKE); // WHERE IntbConfAddToMxrfe LIKE '%fooValue%'
     * $query->filterByIntbconfaddtomxrfe(['foo', 'bar']); // WHERE IntbConfAddToMxrfe IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfaddtomxrfe The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfaddtomxrfe($intbconfaddtomxrfe = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfaddtomxrfe)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFADDTOMXRFE, $intbconfaddtomxrfe, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfMxrfeVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfmxrfevendid('fooValue');   // WHERE IntbConfMxrfeVendId = 'fooValue'
     * $query->filterByIntbconfmxrfevendid('%fooValue%', Criteria::LIKE); // WHERE IntbConfMxrfeVendId LIKE '%fooValue%'
     * $query->filterByIntbconfmxrfevendid(['foo', 'bar']); // WHERE IntbConfMxrfeVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfmxrfevendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfmxrfevendid($intbconfmxrfevendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfmxrfevendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFMXRFEVENDID, $intbconfmxrfevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2NewIdLabelList column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2newidlabellist('fooValue');   // WHERE IntbCon2NewIdLabelList = 'fooValue'
     * $query->filterByIntbcon2newidlabellist('%fooValue%', Criteria::LIKE); // WHERE IntbCon2NewIdLabelList LIKE '%fooValue%'
     * $query->filterByIntbcon2newidlabellist(['foo', 'bar']); // WHERE IntbCon2NewIdLabelList IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2newidlabellist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2newidlabellist($intbcon2newidlabellist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2newidlabellist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST, $intbcon2newidlabellist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfuseformat('fooValue');   // WHERE IntbConfUseFormat = 'fooValue'
     * $query->filterByIntbconfuseformat('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseFormat LIKE '%fooValue%'
     * $query->filterByIntbconfuseformat(['foo', 'bar']); // WHERE IntbConfUseFormat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfuseformat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfuseformat($intbconfuseformat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfuseformat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSEFORMAT, $intbconfuseformat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfDefFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfdefformat('fooValue');   // WHERE IntbConfDefFormat = 'fooValue'
     * $query->filterByIntbconfdefformat('%fooValue%', Criteria::LIKE); // WHERE IntbConfDefFormat LIKE '%fooValue%'
     * $query->filterByIntbconfdefformat(['foo', 'bar']); // WHERE IntbConfDefFormat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfdefformat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfdefformat($intbconfdefformat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfdefformat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFDEFFORMAT, $intbconfdefformat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfSeqShortItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfseqshortitem('fooValue');   // WHERE IntbConfSeqShortItem = 'fooValue'
     * $query->filterByIntbconfseqshortitem('%fooValue%', Criteria::LIKE); // WHERE IntbConfSeqShortItem LIKE '%fooValue%'
     * $query->filterByIntbconfseqshortitem(['foo', 'bar']); // WHERE IntbConfSeqShortItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfseqshortitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfseqshortitem($intbconfseqshortitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfseqshortitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM, $intbconfseqshortitem, $comparison);

        return $this;
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
     * @param mixed $intbconfshortitemlen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfshortitemlen($intbconfshortitemlen = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, $intbconfshortitemlen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfUseScale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfusescale('fooValue');   // WHERE IntbConfUseScale = 'fooValue'
     * $query->filterByIntbconfusescale('%fooValue%', Criteria::LIKE); // WHERE IntbConfUseScale LIKE '%fooValue%'
     * $query->filterByIntbconfusescale(['foo', 'bar']); // WHERE IntbConfUseScale IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfusescale The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfusescale($intbconfusescale = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfusescale)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFUSESCALE, $intbconfusescale, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfStoreWght column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfstorewght('fooValue');   // WHERE IntbConfStoreWght = 'fooValue'
     * $query->filterByIntbconfstorewght('%fooValue%', Criteria::LIKE); // WHERE IntbConfStoreWght LIKE '%fooValue%'
     * $query->filterByIntbconfstorewght(['foo', 'bar']); // WHERE IntbConfStoreWght IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfstorewght The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfstorewght($intbconfstorewght = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfstorewght)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFSTOREWGHT, $intbconfstorewght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfValidAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfvalidasstcode('fooValue');   // WHERE IntbConfValidAsstCode = 'fooValue'
     * $query->filterByIntbconfvalidasstcode('%fooValue%', Criteria::LIKE); // WHERE IntbConfValidAsstCode LIKE '%fooValue%'
     * $query->filterByIntbconfvalidasstcode(['foo', 'bar']); // WHERE IntbConfValidAsstCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfvalidasstcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfvalidasstcode($intbconfvalidasstcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfvalidasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE, $intbconfvalidasstcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbConfWhiteGoods column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbconfwhitegoods('fooValue');   // WHERE IntbConfWhiteGoods = 'fooValue'
     * $query->filterByIntbconfwhitegoods('%fooValue%', Criteria::LIKE); // WHERE IntbConfWhiteGoods LIKE '%fooValue%'
     * $query->filterByIntbconfwhitegoods(['foo', 'bar']); // WHERE IntbConfWhiteGoods IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbconfwhitegoods The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbconfwhitegoods($intbconfwhitegoods = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbconfwhitegoods)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCONFWHITEGOODS, $intbconfwhitegoods, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCon2TransCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcon2transcustid('fooValue');   // WHERE IntbCon2TransCustId = 'fooValue'
     * $query->filterByIntbcon2transcustid('%fooValue%', Criteria::LIKE); // WHERE IntbCon2TransCustId LIKE '%fooValue%'
     * $query->filterByIntbcon2transcustid(['foo', 'bar']); // WHERE IntbCon2TransCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcon2transcustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcon2transcustid($intbcon2transcustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcon2transcustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_INTBCON2TRANSCUSTID, $intbcon2transcustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigInTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigIn $configIn Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
