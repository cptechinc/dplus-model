<?php

namespace Base;

use \ConfigPo as ChildConfigPo;
use \ConfigPoQuery as ChildConfigPoQuery;
use \Exception;
use \PDO;
use Map\ConfigPoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `po_config` table.
 *
 * @method     ChildConfigPoQuery orderByPotbconfkey($order = Criteria::ASC) Order by the PotbConfKey column
 * @method     ChildConfigPoQuery orderByPotbconfsortpo($order = Criteria::ASC) Order by the PotbConfSortPo column
 * @method     ChildConfigPoQuery orderByPotbconfcancorrshpdate($order = Criteria::ASC) Order by the PotbConfCancOrRshpDate column
 * @method     ChildConfigPoQuery orderByPotbconfackoretadate($order = Criteria::ASC) Order by the PotbConfAckOrEtaDate column
 * @method     ChildConfigPoQuery orderByPotbconfeditshipdate($order = Criteria::ASC) Order by the PotbConfEditShipDate column
 * @method     ChildConfigPoQuery orderByPotbconfeditexptdate($order = Criteria::ASC) Order by the PotbConfEditExptDate column
 * @method     ChildConfigPoQuery orderByPotbconfeditcancdate($order = Criteria::ASC) Order by the PotbConfEditCancDate column
 * @method     ChildConfigPoQuery orderByPotbconfeditackdate($order = Criteria::ASC) Order by the PotbConfEditAckDate column
 * @method     ChildConfigPoQuery orderByPotbconfexptdatedef($order = Criteria::ASC) Order by the PotbConfExptDateDef column
 * @method     ChildConfigPoQuery orderByPotbconfheadgetdef($order = Criteria::ASC) Order by the PotbConfHeadGetDef column
 * @method     ChildConfigPoQuery orderByPotbconfreseq($order = Criteria::ASC) Order by the PotbConfReseq column
 * @method     ChildConfigPoQuery orderByPotbconfforcevxref($order = Criteria::ASC) Order by the PotbConfForceVxref column
 * @method     ChildConfigPoQuery orderByPotbconfqtydue($order = Criteria::ASC) Order by the PotbConfQtyDue column
 * @method     ChildConfigPoQuery orderByPotbconfwarndup($order = Criteria::ASC) Order by the PotbConfWarnDup column
 * @method     ChildConfigPoQuery orderByPotbconfforceporef($order = Criteria::ASC) Order by the PotbConfForcePoRef column
 * @method     ChildConfigPoQuery orderByPotbconfdestwhse($order = Criteria::ASC) Order by the PotbConfDestWhse column
 * @method     ChildConfigPoQuery orderByPotbconfeditpoitemnotes($order = Criteria::ASC) Order by the PotbConfEditPoItemNotes column
 * @method     ChildConfigPoQuery orderByPotbconfloadpovxmnotes($order = Criteria::ASC) Order by the PotbConfLoadPoVxmNotes column
 * @method     ChildConfigPoQuery orderByPotbconfepoupdlastcost($order = Criteria::ASC) Order by the PotbConfEpoUpdLastCost column
 * @method     ChildConfigPoQuery orderByPotbconfrecall($order = Criteria::ASC) Order by the PotbConfRecAll column
 * @method     ChildConfigPoQuery orderByPotbconfrecallask($order = Criteria::ASC) Order by the PotbConfRecAllAsk column
 * @method     ChildConfigPoQuery orderByPotbconfreceivecost($order = Criteria::ASC) Order by the PotbConfReceiveCost column
 * @method     ChildConfigPoQuery orderByPotbconfprocvari($order = Criteria::ASC) Order by the PotbConfProcVari column
 * @method     ChildConfigPoQuery orderByPotbconfcostrcvryacct($order = Criteria::ASC) Order by the PotbConfCostRcvryAcct column
 * @method     ChildConfigPoQuery orderByPotbconfinvtyvariacct($order = Criteria::ASC) Order by the PotbConfInvtyVariAcct column
 * @method     ChildConfigPoQuery orderByPotbconfallowchgcost($order = Criteria::ASC) Order by the PotbConfAllowChgCost column
 * @method     ChildConfigPoQuery orderByPotbconfwarnrcptqty($order = Criteria::ASC) Order by the PotbConfWarnRcptQty column
 * @method     ChildConfigPoQuery orderByPotbconferdispdate($order = Criteria::ASC) Order by the PotbConfErDispDate column
 * @method     ChildConfigPoQuery orderByPotbconfprovidelpo($order = Criteria::ASC) Order by the PotbConfProvideLpo column
 * @method     ChildConfigPoQuery orderByPotbconfwarndiffwhse($order = Criteria::ASC) Order by the PotbConfWarnDiffWhse column
 * @method     ChildConfigPoQuery orderByPotbconfallocrcvd($order = Criteria::ASC) Order by the PotbConfAllocRcvd column
 * @method     ChildConfigPoQuery orderByPotbconfaskclose($order = Criteria::ASC) Order by the PotbConfAskClose column
 * @method     ChildConfigPoQuery orderByPotbconferadd2po($order = Criteria::ASC) Order by the PotbConfErAdd2Po column
 * @method     ChildConfigPoQuery orderByPotbconftariffglacct($order = Criteria::ASC) Order by the PotbConfTariffGlAcct column
 * @method     ChildConfigPoQuery orderByPotbconfshopglacct($order = Criteria::ASC) Order by the PotbConfShopGlAcct column
 * @method     ChildConfigPoQuery orderByPotbconfshoprate($order = Criteria::ASC) Order by the PotbConfShopRate column
 * @method     ChildConfigPoQuery orderByPotbconfuseprime($order = Criteria::ASC) Order by the PotbConfUsePrime column
 * @method     ChildConfigPoQuery orderByPotbconfusewatch($order = Criteria::ASC) Order by the PotbConfUseWatch column
 * @method     ChildConfigPoQuery orderByPotbconfprtpowsugg($order = Criteria::ASC) Order by the PotbConfPrtPowSugg column
 * @method     ChildConfigPoQuery orderByPotbconfpowslctyes($order = Criteria::ASC) Order by the PotbConfPowSlctYes column
 * @method     ChildConfigPoQuery orderByPotbconfpowgvendrpt($order = Criteria::ASC) Order by the PotbConfPowgVendRpt column
 * @method     ChildConfigPoQuery orderByPotbconfpowgwipstatus($order = Criteria::ASC) Order by the PotbConfPowgWipStatus column
 * @method     ChildConfigPoQuery orderByPotbconfpowgwipautogen($order = Criteria::ASC) Order by the PotbConfPowgWipAutoGen column
 * @method     ChildConfigPoQuery orderByPotbconfbuyercontrol($order = Criteria::ASC) Order by the PotbConfBuyerControl column
 * @method     ChildConfigPoQuery orderByPotbconfpowgoqmethod($order = Criteria::ASC) Order by the PotbConfPowgOqMethod column
 * @method     ChildConfigPoQuery orderByPotbconffxpo($order = Criteria::ASC) Order by the PotbConfFxPo column
 * @method     ChildConfigPoQuery orderByPotbconffxinv($order = Criteria::ASC) Order by the PotbConfFxInv column
 * @method     ChildConfigPoQuery orderByPotbconfupdatevendcost($order = Criteria::ASC) Order by the PotbConfUpDateVendCost column
 * @method     ChildConfigPoQuery orderByPotbconfaskupdate($order = Criteria::ASC) Order by the PotbConfAskUpDate column
 * @method     ChildConfigPoQuery orderByPotbconfvxmroundpos($order = Criteria::ASC) Order by the PotbConfVxmRoundPos column
 * @method     ChildConfigPoQuery orderByPotbconfxrefmaint($order = Criteria::ASC) Order by the PotbConfXrefMaint column
 * @method     ChildConfigPoQuery orderByPotbconfuseidopts($order = Criteria::ASC) Order by the PotbConfUseIdOpts column
 * @method     ChildConfigPoQuery orderByPotbconfsrchvxmfirst($order = Criteria::ASC) Order by the PotbConfSrchVxmFirst column
 * @method     ChildConfigPoQuery orderByPotbconfopenlineonly($order = Criteria::ASC) Order by the PotbConfOpenLineOnly column
 * @method     ChildConfigPoQuery orderByPotbconfitemdesc($order = Criteria::ASC) Order by the PotbConfItemDesc column
 * @method     ChildConfigPoQuery orderByPotbconfopenbalonly($order = Criteria::ASC) Order by the PotbConfOpenBalOnly column
 * @method     ChildConfigPoQuery orderByPotbconfprtwhsedtl($order = Criteria::ASC) Order by the PotbConfPrtWhseDtl column
 * @method     ChildConfigPoQuery orderByPotbconfautorcpt($order = Criteria::ASC) Order by the PotbConfAutoRcpt column
 * @method     ChildConfigPoQuery orderByPotbconfdispitemcost($order = Criteria::ASC) Order by the PotbConfDispItemCost column
 * @method     ChildConfigPoQuery orderByPotbconfdispcaseqty($order = Criteria::ASC) Order by the PotbConfDispCaseQty column
 * @method     ChildConfigPoQuery orderByPotbconfonetwoline($order = Criteria::ASC) Order by the PotbConfOneTwoLine column
 * @method     ChildConfigPoQuery orderByPotbconfuseordras($order = Criteria::ASC) Order by the PotbConfUseOrdrAs column
 * @method     ChildConfigPoQuery orderByPotbconfaprvvendonly($order = Criteria::ASC) Order by the PotbConfAprvVendOnly column
 * @method     ChildConfigPoQuery orderByPotbconfusefab($order = Criteria::ASC) Order by the PotbConfUseFab column
 * @method     ChildConfigPoQuery orderByPotbconfshowitem($order = Criteria::ASC) Order by the PotbConfShowItem column
 * @method     ChildConfigPoQuery orderByPotbconfscrapacct($order = Criteria::ASC) Order by the PotbConfScrapAcct column
 * @method     ChildConfigPoQuery orderByPotbconfscrapvaripct($order = Criteria::ASC) Order by the PotbConfScrapVariPct column
 * @method     ChildConfigPoQuery orderByPotbconflifofifo($order = Criteria::ASC) Order by the PotbConfLifoFifo column
 * @method     ChildConfigPoQuery orderByPotbconffabbomorkit($order = Criteria::ASC) Order by the PotbConfFabBomOrKit column
 * @method     ChildConfigPoQuery orderByPotbconfallocepoer($order = Criteria::ASC) Order by the PotbConfAllocEpoEr column
 * @method     ChildConfigPoQuery orderByPotbconffabprealloc($order = Criteria::ASC) Order by the PotbConfFabPrealloc column
 * @method     ChildConfigPoQuery orderByPotbconfforcefabepo($order = Criteria::ASC) Order by the PotbConfForceFabEpo column
 * @method     ChildConfigPoQuery orderByPotbconfpreviewcomplist($order = Criteria::ASC) Order by the PotbConfPreviewCompList column
 * @method     ChildConfigPoQuery orderByPotbconfnegcompusage($order = Criteria::ASC) Order by the PotbConfNegCompUsage column
 * @method     ChildConfigPoQuery orderByPotbconfautoselectcomp($order = Criteria::ASC) Order by the PotbConfAutoSelectComp column
 * @method     ChildConfigPoQuery orderByPotbconfbinfromvendor($order = Criteria::ASC) Order by the PotbConfBinFromVendor column
 * @method     ChildConfigPoQuery orderByPotbconfdfltstckcd($order = Criteria::ASC) Order by the PotbConfDfltStckCd column
 * @method     ChildConfigPoQuery orderByPotbconfuseremain($order = Criteria::ASC) Order by the PotbConfUseRemain column
 * @method     ChildConfigPoQuery orderByPotbconfsamecompcost($order = Criteria::ASC) Order by the PotbConfSameCompCost column
 * @method     ChildConfigPoQuery orderByPotbconfpasscode($order = Criteria::ASC) Order by the PotbConfPassCode column
 * @method     ChildConfigPoQuery orderByPotbconfuselandcost($order = Criteria::ASC) Order by the PotbConfUseLandCost column
 * @method     ChildConfigPoQuery orderByPotbconfbaselandamtqty($order = Criteria::ASC) Order by the PotbConfBaseLandAmtQty column
 * @method     ChildConfigPoQuery orderByPotbconfwarnlandiner($order = Criteria::ASC) Order by the PotbConfWarnLandInEr column
 * @method     ChildConfigPoQuery orderByPotbconflandamtmultwght($order = Criteria::ASC) Order by the PotbConfLandAmtMultWght column
 * @method     ChildConfigPoQuery orderByPotbconflanderedit($order = Criteria::ASC) Order by the PotbConfLandErEdit column
 * @method     ChildConfigPoQuery orderByPotbconfhistcmplfab($order = Criteria::ASC) Order by the PotbConfHistCmplFab column
 * @method     ChildConfigPoQuery orderByPotbconflandglacct($order = Criteria::ASC) Order by the PotbConfLandGlAcct column
 * @method     ChildConfigPoQuery orderByPotblandmpfglacct($order = Criteria::ASC) Order by the PotbLandMpfGlAcct column
 * @method     ChildConfigPoQuery orderByPotblandhmfglacct($order = Criteria::ASC) Order by the PotbLandHmfGlAcct column
 * @method     ChildConfigPoQuery orderByPotblanddsetglacct($order = Criteria::ASC) Order by the PotbLandDsetGlAcct column
 * @method     ChildConfigPoQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigPoQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigPoQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigPoQuery groupByPotbconfkey() Group by the PotbConfKey column
 * @method     ChildConfigPoQuery groupByPotbconfsortpo() Group by the PotbConfSortPo column
 * @method     ChildConfigPoQuery groupByPotbconfcancorrshpdate() Group by the PotbConfCancOrRshpDate column
 * @method     ChildConfigPoQuery groupByPotbconfackoretadate() Group by the PotbConfAckOrEtaDate column
 * @method     ChildConfigPoQuery groupByPotbconfeditshipdate() Group by the PotbConfEditShipDate column
 * @method     ChildConfigPoQuery groupByPotbconfeditexptdate() Group by the PotbConfEditExptDate column
 * @method     ChildConfigPoQuery groupByPotbconfeditcancdate() Group by the PotbConfEditCancDate column
 * @method     ChildConfigPoQuery groupByPotbconfeditackdate() Group by the PotbConfEditAckDate column
 * @method     ChildConfigPoQuery groupByPotbconfexptdatedef() Group by the PotbConfExptDateDef column
 * @method     ChildConfigPoQuery groupByPotbconfheadgetdef() Group by the PotbConfHeadGetDef column
 * @method     ChildConfigPoQuery groupByPotbconfreseq() Group by the PotbConfReseq column
 * @method     ChildConfigPoQuery groupByPotbconfforcevxref() Group by the PotbConfForceVxref column
 * @method     ChildConfigPoQuery groupByPotbconfqtydue() Group by the PotbConfQtyDue column
 * @method     ChildConfigPoQuery groupByPotbconfwarndup() Group by the PotbConfWarnDup column
 * @method     ChildConfigPoQuery groupByPotbconfforceporef() Group by the PotbConfForcePoRef column
 * @method     ChildConfigPoQuery groupByPotbconfdestwhse() Group by the PotbConfDestWhse column
 * @method     ChildConfigPoQuery groupByPotbconfeditpoitemnotes() Group by the PotbConfEditPoItemNotes column
 * @method     ChildConfigPoQuery groupByPotbconfloadpovxmnotes() Group by the PotbConfLoadPoVxmNotes column
 * @method     ChildConfigPoQuery groupByPotbconfepoupdlastcost() Group by the PotbConfEpoUpdLastCost column
 * @method     ChildConfigPoQuery groupByPotbconfrecall() Group by the PotbConfRecAll column
 * @method     ChildConfigPoQuery groupByPotbconfrecallask() Group by the PotbConfRecAllAsk column
 * @method     ChildConfigPoQuery groupByPotbconfreceivecost() Group by the PotbConfReceiveCost column
 * @method     ChildConfigPoQuery groupByPotbconfprocvari() Group by the PotbConfProcVari column
 * @method     ChildConfigPoQuery groupByPotbconfcostrcvryacct() Group by the PotbConfCostRcvryAcct column
 * @method     ChildConfigPoQuery groupByPotbconfinvtyvariacct() Group by the PotbConfInvtyVariAcct column
 * @method     ChildConfigPoQuery groupByPotbconfallowchgcost() Group by the PotbConfAllowChgCost column
 * @method     ChildConfigPoQuery groupByPotbconfwarnrcptqty() Group by the PotbConfWarnRcptQty column
 * @method     ChildConfigPoQuery groupByPotbconferdispdate() Group by the PotbConfErDispDate column
 * @method     ChildConfigPoQuery groupByPotbconfprovidelpo() Group by the PotbConfProvideLpo column
 * @method     ChildConfigPoQuery groupByPotbconfwarndiffwhse() Group by the PotbConfWarnDiffWhse column
 * @method     ChildConfigPoQuery groupByPotbconfallocrcvd() Group by the PotbConfAllocRcvd column
 * @method     ChildConfigPoQuery groupByPotbconfaskclose() Group by the PotbConfAskClose column
 * @method     ChildConfigPoQuery groupByPotbconferadd2po() Group by the PotbConfErAdd2Po column
 * @method     ChildConfigPoQuery groupByPotbconftariffglacct() Group by the PotbConfTariffGlAcct column
 * @method     ChildConfigPoQuery groupByPotbconfshopglacct() Group by the PotbConfShopGlAcct column
 * @method     ChildConfigPoQuery groupByPotbconfshoprate() Group by the PotbConfShopRate column
 * @method     ChildConfigPoQuery groupByPotbconfuseprime() Group by the PotbConfUsePrime column
 * @method     ChildConfigPoQuery groupByPotbconfusewatch() Group by the PotbConfUseWatch column
 * @method     ChildConfigPoQuery groupByPotbconfprtpowsugg() Group by the PotbConfPrtPowSugg column
 * @method     ChildConfigPoQuery groupByPotbconfpowslctyes() Group by the PotbConfPowSlctYes column
 * @method     ChildConfigPoQuery groupByPotbconfpowgvendrpt() Group by the PotbConfPowgVendRpt column
 * @method     ChildConfigPoQuery groupByPotbconfpowgwipstatus() Group by the PotbConfPowgWipStatus column
 * @method     ChildConfigPoQuery groupByPotbconfpowgwipautogen() Group by the PotbConfPowgWipAutoGen column
 * @method     ChildConfigPoQuery groupByPotbconfbuyercontrol() Group by the PotbConfBuyerControl column
 * @method     ChildConfigPoQuery groupByPotbconfpowgoqmethod() Group by the PotbConfPowgOqMethod column
 * @method     ChildConfigPoQuery groupByPotbconffxpo() Group by the PotbConfFxPo column
 * @method     ChildConfigPoQuery groupByPotbconffxinv() Group by the PotbConfFxInv column
 * @method     ChildConfigPoQuery groupByPotbconfupdatevendcost() Group by the PotbConfUpDateVendCost column
 * @method     ChildConfigPoQuery groupByPotbconfaskupdate() Group by the PotbConfAskUpDate column
 * @method     ChildConfigPoQuery groupByPotbconfvxmroundpos() Group by the PotbConfVxmRoundPos column
 * @method     ChildConfigPoQuery groupByPotbconfxrefmaint() Group by the PotbConfXrefMaint column
 * @method     ChildConfigPoQuery groupByPotbconfuseidopts() Group by the PotbConfUseIdOpts column
 * @method     ChildConfigPoQuery groupByPotbconfsrchvxmfirst() Group by the PotbConfSrchVxmFirst column
 * @method     ChildConfigPoQuery groupByPotbconfopenlineonly() Group by the PotbConfOpenLineOnly column
 * @method     ChildConfigPoQuery groupByPotbconfitemdesc() Group by the PotbConfItemDesc column
 * @method     ChildConfigPoQuery groupByPotbconfopenbalonly() Group by the PotbConfOpenBalOnly column
 * @method     ChildConfigPoQuery groupByPotbconfprtwhsedtl() Group by the PotbConfPrtWhseDtl column
 * @method     ChildConfigPoQuery groupByPotbconfautorcpt() Group by the PotbConfAutoRcpt column
 * @method     ChildConfigPoQuery groupByPotbconfdispitemcost() Group by the PotbConfDispItemCost column
 * @method     ChildConfigPoQuery groupByPotbconfdispcaseqty() Group by the PotbConfDispCaseQty column
 * @method     ChildConfigPoQuery groupByPotbconfonetwoline() Group by the PotbConfOneTwoLine column
 * @method     ChildConfigPoQuery groupByPotbconfuseordras() Group by the PotbConfUseOrdrAs column
 * @method     ChildConfigPoQuery groupByPotbconfaprvvendonly() Group by the PotbConfAprvVendOnly column
 * @method     ChildConfigPoQuery groupByPotbconfusefab() Group by the PotbConfUseFab column
 * @method     ChildConfigPoQuery groupByPotbconfshowitem() Group by the PotbConfShowItem column
 * @method     ChildConfigPoQuery groupByPotbconfscrapacct() Group by the PotbConfScrapAcct column
 * @method     ChildConfigPoQuery groupByPotbconfscrapvaripct() Group by the PotbConfScrapVariPct column
 * @method     ChildConfigPoQuery groupByPotbconflifofifo() Group by the PotbConfLifoFifo column
 * @method     ChildConfigPoQuery groupByPotbconffabbomorkit() Group by the PotbConfFabBomOrKit column
 * @method     ChildConfigPoQuery groupByPotbconfallocepoer() Group by the PotbConfAllocEpoEr column
 * @method     ChildConfigPoQuery groupByPotbconffabprealloc() Group by the PotbConfFabPrealloc column
 * @method     ChildConfigPoQuery groupByPotbconfforcefabepo() Group by the PotbConfForceFabEpo column
 * @method     ChildConfigPoQuery groupByPotbconfpreviewcomplist() Group by the PotbConfPreviewCompList column
 * @method     ChildConfigPoQuery groupByPotbconfnegcompusage() Group by the PotbConfNegCompUsage column
 * @method     ChildConfigPoQuery groupByPotbconfautoselectcomp() Group by the PotbConfAutoSelectComp column
 * @method     ChildConfigPoQuery groupByPotbconfbinfromvendor() Group by the PotbConfBinFromVendor column
 * @method     ChildConfigPoQuery groupByPotbconfdfltstckcd() Group by the PotbConfDfltStckCd column
 * @method     ChildConfigPoQuery groupByPotbconfuseremain() Group by the PotbConfUseRemain column
 * @method     ChildConfigPoQuery groupByPotbconfsamecompcost() Group by the PotbConfSameCompCost column
 * @method     ChildConfigPoQuery groupByPotbconfpasscode() Group by the PotbConfPassCode column
 * @method     ChildConfigPoQuery groupByPotbconfuselandcost() Group by the PotbConfUseLandCost column
 * @method     ChildConfigPoQuery groupByPotbconfbaselandamtqty() Group by the PotbConfBaseLandAmtQty column
 * @method     ChildConfigPoQuery groupByPotbconfwarnlandiner() Group by the PotbConfWarnLandInEr column
 * @method     ChildConfigPoQuery groupByPotbconflandamtmultwght() Group by the PotbConfLandAmtMultWght column
 * @method     ChildConfigPoQuery groupByPotbconflanderedit() Group by the PotbConfLandErEdit column
 * @method     ChildConfigPoQuery groupByPotbconfhistcmplfab() Group by the PotbConfHistCmplFab column
 * @method     ChildConfigPoQuery groupByPotbconflandglacct() Group by the PotbConfLandGlAcct column
 * @method     ChildConfigPoQuery groupByPotblandmpfglacct() Group by the PotbLandMpfGlAcct column
 * @method     ChildConfigPoQuery groupByPotblandhmfglacct() Group by the PotbLandHmfGlAcct column
 * @method     ChildConfigPoQuery groupByPotblanddsetglacct() Group by the PotbLandDsetGlAcct column
 * @method     ChildConfigPoQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigPoQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigPoQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigPoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigPoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigPoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigPoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigPoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigPoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigPo|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigPo matching the query
 * @method     ChildConfigPo findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigPo matching the query, or a new ChildConfigPo object populated from the query conditions when no match is found
 *
 * @method     ChildConfigPo|null findOneByPotbconfkey(int $PotbConfKey) Return the first ChildConfigPo filtered by the PotbConfKey column
 * @method     ChildConfigPo|null findOneByPotbconfsortpo(string $PotbConfSortPo) Return the first ChildConfigPo filtered by the PotbConfSortPo column
 * @method     ChildConfigPo|null findOneByPotbconfcancorrshpdate(string $PotbConfCancOrRshpDate) Return the first ChildConfigPo filtered by the PotbConfCancOrRshpDate column
 * @method     ChildConfigPo|null findOneByPotbconfackoretadate(string $PotbConfAckOrEtaDate) Return the first ChildConfigPo filtered by the PotbConfAckOrEtaDate column
 * @method     ChildConfigPo|null findOneByPotbconfeditshipdate(string $PotbConfEditShipDate) Return the first ChildConfigPo filtered by the PotbConfEditShipDate column
 * @method     ChildConfigPo|null findOneByPotbconfeditexptdate(string $PotbConfEditExptDate) Return the first ChildConfigPo filtered by the PotbConfEditExptDate column
 * @method     ChildConfigPo|null findOneByPotbconfeditcancdate(string $PotbConfEditCancDate) Return the first ChildConfigPo filtered by the PotbConfEditCancDate column
 * @method     ChildConfigPo|null findOneByPotbconfeditackdate(string $PotbConfEditAckDate) Return the first ChildConfigPo filtered by the PotbConfEditAckDate column
 * @method     ChildConfigPo|null findOneByPotbconfexptdatedef(string $PotbConfExptDateDef) Return the first ChildConfigPo filtered by the PotbConfExptDateDef column
 * @method     ChildConfigPo|null findOneByPotbconfheadgetdef(int $PotbConfHeadGetDef) Return the first ChildConfigPo filtered by the PotbConfHeadGetDef column
 * @method     ChildConfigPo|null findOneByPotbconfreseq(string $PotbConfReseq) Return the first ChildConfigPo filtered by the PotbConfReseq column
 * @method     ChildConfigPo|null findOneByPotbconfforcevxref(string $PotbConfForceVxref) Return the first ChildConfigPo filtered by the PotbConfForceVxref column
 * @method     ChildConfigPo|null findOneByPotbconfqtydue(string $PotbConfQtyDue) Return the first ChildConfigPo filtered by the PotbConfQtyDue column
 * @method     ChildConfigPo|null findOneByPotbconfwarndup(string $PotbConfWarnDup) Return the first ChildConfigPo filtered by the PotbConfWarnDup column
 * @method     ChildConfigPo|null findOneByPotbconfforceporef(string $PotbConfForcePoRef) Return the first ChildConfigPo filtered by the PotbConfForcePoRef column
 * @method     ChildConfigPo|null findOneByPotbconfdestwhse(string $PotbConfDestWhse) Return the first ChildConfigPo filtered by the PotbConfDestWhse column
 * @method     ChildConfigPo|null findOneByPotbconfeditpoitemnotes(string $PotbConfEditPoItemNotes) Return the first ChildConfigPo filtered by the PotbConfEditPoItemNotes column
 * @method     ChildConfigPo|null findOneByPotbconfloadpovxmnotes(string $PotbConfLoadPoVxmNotes) Return the first ChildConfigPo filtered by the PotbConfLoadPoVxmNotes column
 * @method     ChildConfigPo|null findOneByPotbconfepoupdlastcost(string $PotbConfEpoUpdLastCost) Return the first ChildConfigPo filtered by the PotbConfEpoUpdLastCost column
 * @method     ChildConfigPo|null findOneByPotbconfrecall(string $PotbConfRecAll) Return the first ChildConfigPo filtered by the PotbConfRecAll column
 * @method     ChildConfigPo|null findOneByPotbconfrecallask(string $PotbConfRecAllAsk) Return the first ChildConfigPo filtered by the PotbConfRecAllAsk column
 * @method     ChildConfigPo|null findOneByPotbconfreceivecost(string $PotbConfReceiveCost) Return the first ChildConfigPo filtered by the PotbConfReceiveCost column
 * @method     ChildConfigPo|null findOneByPotbconfprocvari(string $PotbConfProcVari) Return the first ChildConfigPo filtered by the PotbConfProcVari column
 * @method     ChildConfigPo|null findOneByPotbconfcostrcvryacct(string $PotbConfCostRcvryAcct) Return the first ChildConfigPo filtered by the PotbConfCostRcvryAcct column
 * @method     ChildConfigPo|null findOneByPotbconfinvtyvariacct(string $PotbConfInvtyVariAcct) Return the first ChildConfigPo filtered by the PotbConfInvtyVariAcct column
 * @method     ChildConfigPo|null findOneByPotbconfallowchgcost(string $PotbConfAllowChgCost) Return the first ChildConfigPo filtered by the PotbConfAllowChgCost column
 * @method     ChildConfigPo|null findOneByPotbconfwarnrcptqty(string $PotbConfWarnRcptQty) Return the first ChildConfigPo filtered by the PotbConfWarnRcptQty column
 * @method     ChildConfigPo|null findOneByPotbconferdispdate(string $PotbConfErDispDate) Return the first ChildConfigPo filtered by the PotbConfErDispDate column
 * @method     ChildConfigPo|null findOneByPotbconfprovidelpo(string $PotbConfProvideLpo) Return the first ChildConfigPo filtered by the PotbConfProvideLpo column
 * @method     ChildConfigPo|null findOneByPotbconfwarndiffwhse(string $PotbConfWarnDiffWhse) Return the first ChildConfigPo filtered by the PotbConfWarnDiffWhse column
 * @method     ChildConfigPo|null findOneByPotbconfallocrcvd(string $PotbConfAllocRcvd) Return the first ChildConfigPo filtered by the PotbConfAllocRcvd column
 * @method     ChildConfigPo|null findOneByPotbconfaskclose(string $PotbConfAskClose) Return the first ChildConfigPo filtered by the PotbConfAskClose column
 * @method     ChildConfigPo|null findOneByPotbconferadd2po(string $PotbConfErAdd2Po) Return the first ChildConfigPo filtered by the PotbConfErAdd2Po column
 * @method     ChildConfigPo|null findOneByPotbconftariffglacct(string $PotbConfTariffGlAcct) Return the first ChildConfigPo filtered by the PotbConfTariffGlAcct column
 * @method     ChildConfigPo|null findOneByPotbconfshopglacct(string $PotbConfShopGlAcct) Return the first ChildConfigPo filtered by the PotbConfShopGlAcct column
 * @method     ChildConfigPo|null findOneByPotbconfshoprate(string $PotbConfShopRate) Return the first ChildConfigPo filtered by the PotbConfShopRate column
 * @method     ChildConfigPo|null findOneByPotbconfuseprime(string $PotbConfUsePrime) Return the first ChildConfigPo filtered by the PotbConfUsePrime column
 * @method     ChildConfigPo|null findOneByPotbconfusewatch(string $PotbConfUseWatch) Return the first ChildConfigPo filtered by the PotbConfUseWatch column
 * @method     ChildConfigPo|null findOneByPotbconfprtpowsugg(string $PotbConfPrtPowSugg) Return the first ChildConfigPo filtered by the PotbConfPrtPowSugg column
 * @method     ChildConfigPo|null findOneByPotbconfpowslctyes(string $PotbConfPowSlctYes) Return the first ChildConfigPo filtered by the PotbConfPowSlctYes column
 * @method     ChildConfigPo|null findOneByPotbconfpowgvendrpt(string $PotbConfPowgVendRpt) Return the first ChildConfigPo filtered by the PotbConfPowgVendRpt column
 * @method     ChildConfigPo|null findOneByPotbconfpowgwipstatus(string $PotbConfPowgWipStatus) Return the first ChildConfigPo filtered by the PotbConfPowgWipStatus column
 * @method     ChildConfigPo|null findOneByPotbconfpowgwipautogen(string $PotbConfPowgWipAutoGen) Return the first ChildConfigPo filtered by the PotbConfPowgWipAutoGen column
 * @method     ChildConfigPo|null findOneByPotbconfbuyercontrol(string $PotbConfBuyerControl) Return the first ChildConfigPo filtered by the PotbConfBuyerControl column
 * @method     ChildConfigPo|null findOneByPotbconfpowgoqmethod(int $PotbConfPowgOqMethod) Return the first ChildConfigPo filtered by the PotbConfPowgOqMethod column
 * @method     ChildConfigPo|null findOneByPotbconffxpo(string $PotbConfFxPo) Return the first ChildConfigPo filtered by the PotbConfFxPo column
 * @method     ChildConfigPo|null findOneByPotbconffxinv(string $PotbConfFxInv) Return the first ChildConfigPo filtered by the PotbConfFxInv column
 * @method     ChildConfigPo|null findOneByPotbconfupdatevendcost(string $PotbConfUpDateVendCost) Return the first ChildConfigPo filtered by the PotbConfUpDateVendCost column
 * @method     ChildConfigPo|null findOneByPotbconfaskupdate(string $PotbConfAskUpDate) Return the first ChildConfigPo filtered by the PotbConfAskUpDate column
 * @method     ChildConfigPo|null findOneByPotbconfvxmroundpos(int $PotbConfVxmRoundPos) Return the first ChildConfigPo filtered by the PotbConfVxmRoundPos column
 * @method     ChildConfigPo|null findOneByPotbconfxrefmaint(string $PotbConfXrefMaint) Return the first ChildConfigPo filtered by the PotbConfXrefMaint column
 * @method     ChildConfigPo|null findOneByPotbconfuseidopts(string $PotbConfUseIdOpts) Return the first ChildConfigPo filtered by the PotbConfUseIdOpts column
 * @method     ChildConfigPo|null findOneByPotbconfsrchvxmfirst(string $PotbConfSrchVxmFirst) Return the first ChildConfigPo filtered by the PotbConfSrchVxmFirst column
 * @method     ChildConfigPo|null findOneByPotbconfopenlineonly(string $PotbConfOpenLineOnly) Return the first ChildConfigPo filtered by the PotbConfOpenLineOnly column
 * @method     ChildConfigPo|null findOneByPotbconfitemdesc(string $PotbConfItemDesc) Return the first ChildConfigPo filtered by the PotbConfItemDesc column
 * @method     ChildConfigPo|null findOneByPotbconfopenbalonly(string $PotbConfOpenBalOnly) Return the first ChildConfigPo filtered by the PotbConfOpenBalOnly column
 * @method     ChildConfigPo|null findOneByPotbconfprtwhsedtl(string $PotbConfPrtWhseDtl) Return the first ChildConfigPo filtered by the PotbConfPrtWhseDtl column
 * @method     ChildConfigPo|null findOneByPotbconfautorcpt(string $PotbConfAutoRcpt) Return the first ChildConfigPo filtered by the PotbConfAutoRcpt column
 * @method     ChildConfigPo|null findOneByPotbconfdispitemcost(string $PotbConfDispItemCost) Return the first ChildConfigPo filtered by the PotbConfDispItemCost column
 * @method     ChildConfigPo|null findOneByPotbconfdispcaseqty(string $PotbConfDispCaseQty) Return the first ChildConfigPo filtered by the PotbConfDispCaseQty column
 * @method     ChildConfigPo|null findOneByPotbconfonetwoline(int $PotbConfOneTwoLine) Return the first ChildConfigPo filtered by the PotbConfOneTwoLine column
 * @method     ChildConfigPo|null findOneByPotbconfuseordras(string $PotbConfUseOrdrAs) Return the first ChildConfigPo filtered by the PotbConfUseOrdrAs column
 * @method     ChildConfigPo|null findOneByPotbconfaprvvendonly(string $PotbConfAprvVendOnly) Return the first ChildConfigPo filtered by the PotbConfAprvVendOnly column
 * @method     ChildConfigPo|null findOneByPotbconfusefab(string $PotbConfUseFab) Return the first ChildConfigPo filtered by the PotbConfUseFab column
 * @method     ChildConfigPo|null findOneByPotbconfshowitem(string $PotbConfShowItem) Return the first ChildConfigPo filtered by the PotbConfShowItem column
 * @method     ChildConfigPo|null findOneByPotbconfscrapacct(string $PotbConfScrapAcct) Return the first ChildConfigPo filtered by the PotbConfScrapAcct column
 * @method     ChildConfigPo|null findOneByPotbconfscrapvaripct(string $PotbConfScrapVariPct) Return the first ChildConfigPo filtered by the PotbConfScrapVariPct column
 * @method     ChildConfigPo|null findOneByPotbconflifofifo(string $PotbConfLifoFifo) Return the first ChildConfigPo filtered by the PotbConfLifoFifo column
 * @method     ChildConfigPo|null findOneByPotbconffabbomorkit(string $PotbConfFabBomOrKit) Return the first ChildConfigPo filtered by the PotbConfFabBomOrKit column
 * @method     ChildConfigPo|null findOneByPotbconfallocepoer(string $PotbConfAllocEpoEr) Return the first ChildConfigPo filtered by the PotbConfAllocEpoEr column
 * @method     ChildConfigPo|null findOneByPotbconffabprealloc(string $PotbConfFabPrealloc) Return the first ChildConfigPo filtered by the PotbConfFabPrealloc column
 * @method     ChildConfigPo|null findOneByPotbconfforcefabepo(string $PotbConfForceFabEpo) Return the first ChildConfigPo filtered by the PotbConfForceFabEpo column
 * @method     ChildConfigPo|null findOneByPotbconfpreviewcomplist(string $PotbConfPreviewCompList) Return the first ChildConfigPo filtered by the PotbConfPreviewCompList column
 * @method     ChildConfigPo|null findOneByPotbconfnegcompusage(string $PotbConfNegCompUsage) Return the first ChildConfigPo filtered by the PotbConfNegCompUsage column
 * @method     ChildConfigPo|null findOneByPotbconfautoselectcomp(string $PotbConfAutoSelectComp) Return the first ChildConfigPo filtered by the PotbConfAutoSelectComp column
 * @method     ChildConfigPo|null findOneByPotbconfbinfromvendor(string $PotbConfBinFromVendor) Return the first ChildConfigPo filtered by the PotbConfBinFromVendor column
 * @method     ChildConfigPo|null findOneByPotbconfdfltstckcd(string $PotbConfDfltStckCd) Return the first ChildConfigPo filtered by the PotbConfDfltStckCd column
 * @method     ChildConfigPo|null findOneByPotbconfuseremain(string $PotbConfUseRemain) Return the first ChildConfigPo filtered by the PotbConfUseRemain column
 * @method     ChildConfigPo|null findOneByPotbconfsamecompcost(string $PotbConfSameCompCost) Return the first ChildConfigPo filtered by the PotbConfSameCompCost column
 * @method     ChildConfigPo|null findOneByPotbconfpasscode(string $PotbConfPassCode) Return the first ChildConfigPo filtered by the PotbConfPassCode column
 * @method     ChildConfigPo|null findOneByPotbconfuselandcost(string $PotbConfUseLandCost) Return the first ChildConfigPo filtered by the PotbConfUseLandCost column
 * @method     ChildConfigPo|null findOneByPotbconfbaselandamtqty(string $PotbConfBaseLandAmtQty) Return the first ChildConfigPo filtered by the PotbConfBaseLandAmtQty column
 * @method     ChildConfigPo|null findOneByPotbconfwarnlandiner(string $PotbConfWarnLandInEr) Return the first ChildConfigPo filtered by the PotbConfWarnLandInEr column
 * @method     ChildConfigPo|null findOneByPotbconflandamtmultwght(string $PotbConfLandAmtMultWght) Return the first ChildConfigPo filtered by the PotbConfLandAmtMultWght column
 * @method     ChildConfigPo|null findOneByPotbconflanderedit(string $PotbConfLandErEdit) Return the first ChildConfigPo filtered by the PotbConfLandErEdit column
 * @method     ChildConfigPo|null findOneByPotbconfhistcmplfab(string $PotbConfHistCmplFab) Return the first ChildConfigPo filtered by the PotbConfHistCmplFab column
 * @method     ChildConfigPo|null findOneByPotbconflandglacct(string $PotbConfLandGlAcct) Return the first ChildConfigPo filtered by the PotbConfLandGlAcct column
 * @method     ChildConfigPo|null findOneByPotblandmpfglacct(string $PotbLandMpfGlAcct) Return the first ChildConfigPo filtered by the PotbLandMpfGlAcct column
 * @method     ChildConfigPo|null findOneByPotblandhmfglacct(string $PotbLandHmfGlAcct) Return the first ChildConfigPo filtered by the PotbLandHmfGlAcct column
 * @method     ChildConfigPo|null findOneByPotblanddsetglacct(string $PotbLandDsetGlAcct) Return the first ChildConfigPo filtered by the PotbLandDsetGlAcct column
 * @method     ChildConfigPo|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigPo filtered by the DateUpdtd column
 * @method     ChildConfigPo|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigPo filtered by the TimeUpdtd column
 * @method     ChildConfigPo|null findOneByDummy(string $dummy) Return the first ChildConfigPo filtered by the dummy column
 *
 * @method     ChildConfigPo requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigPo by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOne(?ConnectionInterface $con = null) Return the first ChildConfigPo matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigPo requireOneByPotbconfkey(int $PotbConfKey) Return the first ChildConfigPo filtered by the PotbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfsortpo(string $PotbConfSortPo) Return the first ChildConfigPo filtered by the PotbConfSortPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfcancorrshpdate(string $PotbConfCancOrRshpDate) Return the first ChildConfigPo filtered by the PotbConfCancOrRshpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfackoretadate(string $PotbConfAckOrEtaDate) Return the first ChildConfigPo filtered by the PotbConfAckOrEtaDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfeditshipdate(string $PotbConfEditShipDate) Return the first ChildConfigPo filtered by the PotbConfEditShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfeditexptdate(string $PotbConfEditExptDate) Return the first ChildConfigPo filtered by the PotbConfEditExptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfeditcancdate(string $PotbConfEditCancDate) Return the first ChildConfigPo filtered by the PotbConfEditCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfeditackdate(string $PotbConfEditAckDate) Return the first ChildConfigPo filtered by the PotbConfEditAckDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfexptdatedef(string $PotbConfExptDateDef) Return the first ChildConfigPo filtered by the PotbConfExptDateDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfheadgetdef(int $PotbConfHeadGetDef) Return the first ChildConfigPo filtered by the PotbConfHeadGetDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfreseq(string $PotbConfReseq) Return the first ChildConfigPo filtered by the PotbConfReseq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfforcevxref(string $PotbConfForceVxref) Return the first ChildConfigPo filtered by the PotbConfForceVxref column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfqtydue(string $PotbConfQtyDue) Return the first ChildConfigPo filtered by the PotbConfQtyDue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfwarndup(string $PotbConfWarnDup) Return the first ChildConfigPo filtered by the PotbConfWarnDup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfforceporef(string $PotbConfForcePoRef) Return the first ChildConfigPo filtered by the PotbConfForcePoRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfdestwhse(string $PotbConfDestWhse) Return the first ChildConfigPo filtered by the PotbConfDestWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfeditpoitemnotes(string $PotbConfEditPoItemNotes) Return the first ChildConfigPo filtered by the PotbConfEditPoItemNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfloadpovxmnotes(string $PotbConfLoadPoVxmNotes) Return the first ChildConfigPo filtered by the PotbConfLoadPoVxmNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfepoupdlastcost(string $PotbConfEpoUpdLastCost) Return the first ChildConfigPo filtered by the PotbConfEpoUpdLastCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfrecall(string $PotbConfRecAll) Return the first ChildConfigPo filtered by the PotbConfRecAll column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfrecallask(string $PotbConfRecAllAsk) Return the first ChildConfigPo filtered by the PotbConfRecAllAsk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfreceivecost(string $PotbConfReceiveCost) Return the first ChildConfigPo filtered by the PotbConfReceiveCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfprocvari(string $PotbConfProcVari) Return the first ChildConfigPo filtered by the PotbConfProcVari column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfcostrcvryacct(string $PotbConfCostRcvryAcct) Return the first ChildConfigPo filtered by the PotbConfCostRcvryAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfinvtyvariacct(string $PotbConfInvtyVariAcct) Return the first ChildConfigPo filtered by the PotbConfInvtyVariAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfallowchgcost(string $PotbConfAllowChgCost) Return the first ChildConfigPo filtered by the PotbConfAllowChgCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfwarnrcptqty(string $PotbConfWarnRcptQty) Return the first ChildConfigPo filtered by the PotbConfWarnRcptQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconferdispdate(string $PotbConfErDispDate) Return the first ChildConfigPo filtered by the PotbConfErDispDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfprovidelpo(string $PotbConfProvideLpo) Return the first ChildConfigPo filtered by the PotbConfProvideLpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfwarndiffwhse(string $PotbConfWarnDiffWhse) Return the first ChildConfigPo filtered by the PotbConfWarnDiffWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfallocrcvd(string $PotbConfAllocRcvd) Return the first ChildConfigPo filtered by the PotbConfAllocRcvd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfaskclose(string $PotbConfAskClose) Return the first ChildConfigPo filtered by the PotbConfAskClose column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconferadd2po(string $PotbConfErAdd2Po) Return the first ChildConfigPo filtered by the PotbConfErAdd2Po column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconftariffglacct(string $PotbConfTariffGlAcct) Return the first ChildConfigPo filtered by the PotbConfTariffGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfshopglacct(string $PotbConfShopGlAcct) Return the first ChildConfigPo filtered by the PotbConfShopGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfshoprate(string $PotbConfShopRate) Return the first ChildConfigPo filtered by the PotbConfShopRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfuseprime(string $PotbConfUsePrime) Return the first ChildConfigPo filtered by the PotbConfUsePrime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfusewatch(string $PotbConfUseWatch) Return the first ChildConfigPo filtered by the PotbConfUseWatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfprtpowsugg(string $PotbConfPrtPowSugg) Return the first ChildConfigPo filtered by the PotbConfPrtPowSugg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpowslctyes(string $PotbConfPowSlctYes) Return the first ChildConfigPo filtered by the PotbConfPowSlctYes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpowgvendrpt(string $PotbConfPowgVendRpt) Return the first ChildConfigPo filtered by the PotbConfPowgVendRpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpowgwipstatus(string $PotbConfPowgWipStatus) Return the first ChildConfigPo filtered by the PotbConfPowgWipStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpowgwipautogen(string $PotbConfPowgWipAutoGen) Return the first ChildConfigPo filtered by the PotbConfPowgWipAutoGen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfbuyercontrol(string $PotbConfBuyerControl) Return the first ChildConfigPo filtered by the PotbConfBuyerControl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpowgoqmethod(int $PotbConfPowgOqMethod) Return the first ChildConfigPo filtered by the PotbConfPowgOqMethod column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconffxpo(string $PotbConfFxPo) Return the first ChildConfigPo filtered by the PotbConfFxPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconffxinv(string $PotbConfFxInv) Return the first ChildConfigPo filtered by the PotbConfFxInv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfupdatevendcost(string $PotbConfUpDateVendCost) Return the first ChildConfigPo filtered by the PotbConfUpDateVendCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfaskupdate(string $PotbConfAskUpDate) Return the first ChildConfigPo filtered by the PotbConfAskUpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfvxmroundpos(int $PotbConfVxmRoundPos) Return the first ChildConfigPo filtered by the PotbConfVxmRoundPos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfxrefmaint(string $PotbConfXrefMaint) Return the first ChildConfigPo filtered by the PotbConfXrefMaint column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfuseidopts(string $PotbConfUseIdOpts) Return the first ChildConfigPo filtered by the PotbConfUseIdOpts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfsrchvxmfirst(string $PotbConfSrchVxmFirst) Return the first ChildConfigPo filtered by the PotbConfSrchVxmFirst column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfopenlineonly(string $PotbConfOpenLineOnly) Return the first ChildConfigPo filtered by the PotbConfOpenLineOnly column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfitemdesc(string $PotbConfItemDesc) Return the first ChildConfigPo filtered by the PotbConfItemDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfopenbalonly(string $PotbConfOpenBalOnly) Return the first ChildConfigPo filtered by the PotbConfOpenBalOnly column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfprtwhsedtl(string $PotbConfPrtWhseDtl) Return the first ChildConfigPo filtered by the PotbConfPrtWhseDtl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfautorcpt(string $PotbConfAutoRcpt) Return the first ChildConfigPo filtered by the PotbConfAutoRcpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfdispitemcost(string $PotbConfDispItemCost) Return the first ChildConfigPo filtered by the PotbConfDispItemCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfdispcaseqty(string $PotbConfDispCaseQty) Return the first ChildConfigPo filtered by the PotbConfDispCaseQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfonetwoline(int $PotbConfOneTwoLine) Return the first ChildConfigPo filtered by the PotbConfOneTwoLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfuseordras(string $PotbConfUseOrdrAs) Return the first ChildConfigPo filtered by the PotbConfUseOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfaprvvendonly(string $PotbConfAprvVendOnly) Return the first ChildConfigPo filtered by the PotbConfAprvVendOnly column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfusefab(string $PotbConfUseFab) Return the first ChildConfigPo filtered by the PotbConfUseFab column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfshowitem(string $PotbConfShowItem) Return the first ChildConfigPo filtered by the PotbConfShowItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfscrapacct(string $PotbConfScrapAcct) Return the first ChildConfigPo filtered by the PotbConfScrapAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfscrapvaripct(string $PotbConfScrapVariPct) Return the first ChildConfigPo filtered by the PotbConfScrapVariPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconflifofifo(string $PotbConfLifoFifo) Return the first ChildConfigPo filtered by the PotbConfLifoFifo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconffabbomorkit(string $PotbConfFabBomOrKit) Return the first ChildConfigPo filtered by the PotbConfFabBomOrKit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfallocepoer(string $PotbConfAllocEpoEr) Return the first ChildConfigPo filtered by the PotbConfAllocEpoEr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconffabprealloc(string $PotbConfFabPrealloc) Return the first ChildConfigPo filtered by the PotbConfFabPrealloc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfforcefabepo(string $PotbConfForceFabEpo) Return the first ChildConfigPo filtered by the PotbConfForceFabEpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpreviewcomplist(string $PotbConfPreviewCompList) Return the first ChildConfigPo filtered by the PotbConfPreviewCompList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfnegcompusage(string $PotbConfNegCompUsage) Return the first ChildConfigPo filtered by the PotbConfNegCompUsage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfautoselectcomp(string $PotbConfAutoSelectComp) Return the first ChildConfigPo filtered by the PotbConfAutoSelectComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfbinfromvendor(string $PotbConfBinFromVendor) Return the first ChildConfigPo filtered by the PotbConfBinFromVendor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfdfltstckcd(string $PotbConfDfltStckCd) Return the first ChildConfigPo filtered by the PotbConfDfltStckCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfuseremain(string $PotbConfUseRemain) Return the first ChildConfigPo filtered by the PotbConfUseRemain column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfsamecompcost(string $PotbConfSameCompCost) Return the first ChildConfigPo filtered by the PotbConfSameCompCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfpasscode(string $PotbConfPassCode) Return the first ChildConfigPo filtered by the PotbConfPassCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfuselandcost(string $PotbConfUseLandCost) Return the first ChildConfigPo filtered by the PotbConfUseLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfbaselandamtqty(string $PotbConfBaseLandAmtQty) Return the first ChildConfigPo filtered by the PotbConfBaseLandAmtQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfwarnlandiner(string $PotbConfWarnLandInEr) Return the first ChildConfigPo filtered by the PotbConfWarnLandInEr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconflandamtmultwght(string $PotbConfLandAmtMultWght) Return the first ChildConfigPo filtered by the PotbConfLandAmtMultWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconflanderedit(string $PotbConfLandErEdit) Return the first ChildConfigPo filtered by the PotbConfLandErEdit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconfhistcmplfab(string $PotbConfHistCmplFab) Return the first ChildConfigPo filtered by the PotbConfHistCmplFab column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotbconflandglacct(string $PotbConfLandGlAcct) Return the first ChildConfigPo filtered by the PotbConfLandGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotblandmpfglacct(string $PotbLandMpfGlAcct) Return the first ChildConfigPo filtered by the PotbLandMpfGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotblandhmfglacct(string $PotbLandHmfGlAcct) Return the first ChildConfigPo filtered by the PotbLandHmfGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByPotblanddsetglacct(string $PotbLandDsetGlAcct) Return the first ChildConfigPo filtered by the PotbLandDsetGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigPo filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigPo filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPo requireOneByDummy(string $dummy) Return the first ChildConfigPo filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigPo[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigPo objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigPo> find(?ConnectionInterface $con = null) Return ChildConfigPo objects based on current ModelCriteria
 *
 * @method     ChildConfigPo[]|Collection findByPotbconfkey(int|array<int> $PotbConfKey) Return ChildConfigPo objects filtered by the PotbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfkey(int|array<int> $PotbConfKey) Return ChildConfigPo objects filtered by the PotbConfKey column
 * @method     ChildConfigPo[]|Collection findByPotbconfsortpo(string|array<string> $PotbConfSortPo) Return ChildConfigPo objects filtered by the PotbConfSortPo column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfsortpo(string|array<string> $PotbConfSortPo) Return ChildConfigPo objects filtered by the PotbConfSortPo column
 * @method     ChildConfigPo[]|Collection findByPotbconfcancorrshpdate(string|array<string> $PotbConfCancOrRshpDate) Return ChildConfigPo objects filtered by the PotbConfCancOrRshpDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfcancorrshpdate(string|array<string> $PotbConfCancOrRshpDate) Return ChildConfigPo objects filtered by the PotbConfCancOrRshpDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfackoretadate(string|array<string> $PotbConfAckOrEtaDate) Return ChildConfigPo objects filtered by the PotbConfAckOrEtaDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfackoretadate(string|array<string> $PotbConfAckOrEtaDate) Return ChildConfigPo objects filtered by the PotbConfAckOrEtaDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfeditshipdate(string|array<string> $PotbConfEditShipDate) Return ChildConfigPo objects filtered by the PotbConfEditShipDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfeditshipdate(string|array<string> $PotbConfEditShipDate) Return ChildConfigPo objects filtered by the PotbConfEditShipDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfeditexptdate(string|array<string> $PotbConfEditExptDate) Return ChildConfigPo objects filtered by the PotbConfEditExptDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfeditexptdate(string|array<string> $PotbConfEditExptDate) Return ChildConfigPo objects filtered by the PotbConfEditExptDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfeditcancdate(string|array<string> $PotbConfEditCancDate) Return ChildConfigPo objects filtered by the PotbConfEditCancDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfeditcancdate(string|array<string> $PotbConfEditCancDate) Return ChildConfigPo objects filtered by the PotbConfEditCancDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfeditackdate(string|array<string> $PotbConfEditAckDate) Return ChildConfigPo objects filtered by the PotbConfEditAckDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfeditackdate(string|array<string> $PotbConfEditAckDate) Return ChildConfigPo objects filtered by the PotbConfEditAckDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfexptdatedef(string|array<string> $PotbConfExptDateDef) Return ChildConfigPo objects filtered by the PotbConfExptDateDef column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfexptdatedef(string|array<string> $PotbConfExptDateDef) Return ChildConfigPo objects filtered by the PotbConfExptDateDef column
 * @method     ChildConfigPo[]|Collection findByPotbconfheadgetdef(int|array<int> $PotbConfHeadGetDef) Return ChildConfigPo objects filtered by the PotbConfHeadGetDef column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfheadgetdef(int|array<int> $PotbConfHeadGetDef) Return ChildConfigPo objects filtered by the PotbConfHeadGetDef column
 * @method     ChildConfigPo[]|Collection findByPotbconfreseq(string|array<string> $PotbConfReseq) Return ChildConfigPo objects filtered by the PotbConfReseq column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfreseq(string|array<string> $PotbConfReseq) Return ChildConfigPo objects filtered by the PotbConfReseq column
 * @method     ChildConfigPo[]|Collection findByPotbconfforcevxref(string|array<string> $PotbConfForceVxref) Return ChildConfigPo objects filtered by the PotbConfForceVxref column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfforcevxref(string|array<string> $PotbConfForceVxref) Return ChildConfigPo objects filtered by the PotbConfForceVxref column
 * @method     ChildConfigPo[]|Collection findByPotbconfqtydue(string|array<string> $PotbConfQtyDue) Return ChildConfigPo objects filtered by the PotbConfQtyDue column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfqtydue(string|array<string> $PotbConfQtyDue) Return ChildConfigPo objects filtered by the PotbConfQtyDue column
 * @method     ChildConfigPo[]|Collection findByPotbconfwarndup(string|array<string> $PotbConfWarnDup) Return ChildConfigPo objects filtered by the PotbConfWarnDup column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfwarndup(string|array<string> $PotbConfWarnDup) Return ChildConfigPo objects filtered by the PotbConfWarnDup column
 * @method     ChildConfigPo[]|Collection findByPotbconfforceporef(string|array<string> $PotbConfForcePoRef) Return ChildConfigPo objects filtered by the PotbConfForcePoRef column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfforceporef(string|array<string> $PotbConfForcePoRef) Return ChildConfigPo objects filtered by the PotbConfForcePoRef column
 * @method     ChildConfigPo[]|Collection findByPotbconfdestwhse(string|array<string> $PotbConfDestWhse) Return ChildConfigPo objects filtered by the PotbConfDestWhse column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfdestwhse(string|array<string> $PotbConfDestWhse) Return ChildConfigPo objects filtered by the PotbConfDestWhse column
 * @method     ChildConfigPo[]|Collection findByPotbconfeditpoitemnotes(string|array<string> $PotbConfEditPoItemNotes) Return ChildConfigPo objects filtered by the PotbConfEditPoItemNotes column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfeditpoitemnotes(string|array<string> $PotbConfEditPoItemNotes) Return ChildConfigPo objects filtered by the PotbConfEditPoItemNotes column
 * @method     ChildConfigPo[]|Collection findByPotbconfloadpovxmnotes(string|array<string> $PotbConfLoadPoVxmNotes) Return ChildConfigPo objects filtered by the PotbConfLoadPoVxmNotes column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfloadpovxmnotes(string|array<string> $PotbConfLoadPoVxmNotes) Return ChildConfigPo objects filtered by the PotbConfLoadPoVxmNotes column
 * @method     ChildConfigPo[]|Collection findByPotbconfepoupdlastcost(string|array<string> $PotbConfEpoUpdLastCost) Return ChildConfigPo objects filtered by the PotbConfEpoUpdLastCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfepoupdlastcost(string|array<string> $PotbConfEpoUpdLastCost) Return ChildConfigPo objects filtered by the PotbConfEpoUpdLastCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfrecall(string|array<string> $PotbConfRecAll) Return ChildConfigPo objects filtered by the PotbConfRecAll column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfrecall(string|array<string> $PotbConfRecAll) Return ChildConfigPo objects filtered by the PotbConfRecAll column
 * @method     ChildConfigPo[]|Collection findByPotbconfrecallask(string|array<string> $PotbConfRecAllAsk) Return ChildConfigPo objects filtered by the PotbConfRecAllAsk column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfrecallask(string|array<string> $PotbConfRecAllAsk) Return ChildConfigPo objects filtered by the PotbConfRecAllAsk column
 * @method     ChildConfigPo[]|Collection findByPotbconfreceivecost(string|array<string> $PotbConfReceiveCost) Return ChildConfigPo objects filtered by the PotbConfReceiveCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfreceivecost(string|array<string> $PotbConfReceiveCost) Return ChildConfigPo objects filtered by the PotbConfReceiveCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfprocvari(string|array<string> $PotbConfProcVari) Return ChildConfigPo objects filtered by the PotbConfProcVari column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfprocvari(string|array<string> $PotbConfProcVari) Return ChildConfigPo objects filtered by the PotbConfProcVari column
 * @method     ChildConfigPo[]|Collection findByPotbconfcostrcvryacct(string|array<string> $PotbConfCostRcvryAcct) Return ChildConfigPo objects filtered by the PotbConfCostRcvryAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfcostrcvryacct(string|array<string> $PotbConfCostRcvryAcct) Return ChildConfigPo objects filtered by the PotbConfCostRcvryAcct column
 * @method     ChildConfigPo[]|Collection findByPotbconfinvtyvariacct(string|array<string> $PotbConfInvtyVariAcct) Return ChildConfigPo objects filtered by the PotbConfInvtyVariAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfinvtyvariacct(string|array<string> $PotbConfInvtyVariAcct) Return ChildConfigPo objects filtered by the PotbConfInvtyVariAcct column
 * @method     ChildConfigPo[]|Collection findByPotbconfallowchgcost(string|array<string> $PotbConfAllowChgCost) Return ChildConfigPo objects filtered by the PotbConfAllowChgCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfallowchgcost(string|array<string> $PotbConfAllowChgCost) Return ChildConfigPo objects filtered by the PotbConfAllowChgCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfwarnrcptqty(string|array<string> $PotbConfWarnRcptQty) Return ChildConfigPo objects filtered by the PotbConfWarnRcptQty column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfwarnrcptqty(string|array<string> $PotbConfWarnRcptQty) Return ChildConfigPo objects filtered by the PotbConfWarnRcptQty column
 * @method     ChildConfigPo[]|Collection findByPotbconferdispdate(string|array<string> $PotbConfErDispDate) Return ChildConfigPo objects filtered by the PotbConfErDispDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconferdispdate(string|array<string> $PotbConfErDispDate) Return ChildConfigPo objects filtered by the PotbConfErDispDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfprovidelpo(string|array<string> $PotbConfProvideLpo) Return ChildConfigPo objects filtered by the PotbConfProvideLpo column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfprovidelpo(string|array<string> $PotbConfProvideLpo) Return ChildConfigPo objects filtered by the PotbConfProvideLpo column
 * @method     ChildConfigPo[]|Collection findByPotbconfwarndiffwhse(string|array<string> $PotbConfWarnDiffWhse) Return ChildConfigPo objects filtered by the PotbConfWarnDiffWhse column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfwarndiffwhse(string|array<string> $PotbConfWarnDiffWhse) Return ChildConfigPo objects filtered by the PotbConfWarnDiffWhse column
 * @method     ChildConfigPo[]|Collection findByPotbconfallocrcvd(string|array<string> $PotbConfAllocRcvd) Return ChildConfigPo objects filtered by the PotbConfAllocRcvd column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfallocrcvd(string|array<string> $PotbConfAllocRcvd) Return ChildConfigPo objects filtered by the PotbConfAllocRcvd column
 * @method     ChildConfigPo[]|Collection findByPotbconfaskclose(string|array<string> $PotbConfAskClose) Return ChildConfigPo objects filtered by the PotbConfAskClose column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfaskclose(string|array<string> $PotbConfAskClose) Return ChildConfigPo objects filtered by the PotbConfAskClose column
 * @method     ChildConfigPo[]|Collection findByPotbconferadd2po(string|array<string> $PotbConfErAdd2Po) Return ChildConfigPo objects filtered by the PotbConfErAdd2Po column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconferadd2po(string|array<string> $PotbConfErAdd2Po) Return ChildConfigPo objects filtered by the PotbConfErAdd2Po column
 * @method     ChildConfigPo[]|Collection findByPotbconftariffglacct(string|array<string> $PotbConfTariffGlAcct) Return ChildConfigPo objects filtered by the PotbConfTariffGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconftariffglacct(string|array<string> $PotbConfTariffGlAcct) Return ChildConfigPo objects filtered by the PotbConfTariffGlAcct column
 * @method     ChildConfigPo[]|Collection findByPotbconfshopglacct(string|array<string> $PotbConfShopGlAcct) Return ChildConfigPo objects filtered by the PotbConfShopGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfshopglacct(string|array<string> $PotbConfShopGlAcct) Return ChildConfigPo objects filtered by the PotbConfShopGlAcct column
 * @method     ChildConfigPo[]|Collection findByPotbconfshoprate(string|array<string> $PotbConfShopRate) Return ChildConfigPo objects filtered by the PotbConfShopRate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfshoprate(string|array<string> $PotbConfShopRate) Return ChildConfigPo objects filtered by the PotbConfShopRate column
 * @method     ChildConfigPo[]|Collection findByPotbconfuseprime(string|array<string> $PotbConfUsePrime) Return ChildConfigPo objects filtered by the PotbConfUsePrime column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfuseprime(string|array<string> $PotbConfUsePrime) Return ChildConfigPo objects filtered by the PotbConfUsePrime column
 * @method     ChildConfigPo[]|Collection findByPotbconfusewatch(string|array<string> $PotbConfUseWatch) Return ChildConfigPo objects filtered by the PotbConfUseWatch column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfusewatch(string|array<string> $PotbConfUseWatch) Return ChildConfigPo objects filtered by the PotbConfUseWatch column
 * @method     ChildConfigPo[]|Collection findByPotbconfprtpowsugg(string|array<string> $PotbConfPrtPowSugg) Return ChildConfigPo objects filtered by the PotbConfPrtPowSugg column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfprtpowsugg(string|array<string> $PotbConfPrtPowSugg) Return ChildConfigPo objects filtered by the PotbConfPrtPowSugg column
 * @method     ChildConfigPo[]|Collection findByPotbconfpowslctyes(string|array<string> $PotbConfPowSlctYes) Return ChildConfigPo objects filtered by the PotbConfPowSlctYes column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpowslctyes(string|array<string> $PotbConfPowSlctYes) Return ChildConfigPo objects filtered by the PotbConfPowSlctYes column
 * @method     ChildConfigPo[]|Collection findByPotbconfpowgvendrpt(string|array<string> $PotbConfPowgVendRpt) Return ChildConfigPo objects filtered by the PotbConfPowgVendRpt column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpowgvendrpt(string|array<string> $PotbConfPowgVendRpt) Return ChildConfigPo objects filtered by the PotbConfPowgVendRpt column
 * @method     ChildConfigPo[]|Collection findByPotbconfpowgwipstatus(string|array<string> $PotbConfPowgWipStatus) Return ChildConfigPo objects filtered by the PotbConfPowgWipStatus column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpowgwipstatus(string|array<string> $PotbConfPowgWipStatus) Return ChildConfigPo objects filtered by the PotbConfPowgWipStatus column
 * @method     ChildConfigPo[]|Collection findByPotbconfpowgwipautogen(string|array<string> $PotbConfPowgWipAutoGen) Return ChildConfigPo objects filtered by the PotbConfPowgWipAutoGen column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpowgwipautogen(string|array<string> $PotbConfPowgWipAutoGen) Return ChildConfigPo objects filtered by the PotbConfPowgWipAutoGen column
 * @method     ChildConfigPo[]|Collection findByPotbconfbuyercontrol(string|array<string> $PotbConfBuyerControl) Return ChildConfigPo objects filtered by the PotbConfBuyerControl column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfbuyercontrol(string|array<string> $PotbConfBuyerControl) Return ChildConfigPo objects filtered by the PotbConfBuyerControl column
 * @method     ChildConfigPo[]|Collection findByPotbconfpowgoqmethod(int|array<int> $PotbConfPowgOqMethod) Return ChildConfigPo objects filtered by the PotbConfPowgOqMethod column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpowgoqmethod(int|array<int> $PotbConfPowgOqMethod) Return ChildConfigPo objects filtered by the PotbConfPowgOqMethod column
 * @method     ChildConfigPo[]|Collection findByPotbconffxpo(string|array<string> $PotbConfFxPo) Return ChildConfigPo objects filtered by the PotbConfFxPo column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconffxpo(string|array<string> $PotbConfFxPo) Return ChildConfigPo objects filtered by the PotbConfFxPo column
 * @method     ChildConfigPo[]|Collection findByPotbconffxinv(string|array<string> $PotbConfFxInv) Return ChildConfigPo objects filtered by the PotbConfFxInv column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconffxinv(string|array<string> $PotbConfFxInv) Return ChildConfigPo objects filtered by the PotbConfFxInv column
 * @method     ChildConfigPo[]|Collection findByPotbconfupdatevendcost(string|array<string> $PotbConfUpDateVendCost) Return ChildConfigPo objects filtered by the PotbConfUpDateVendCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfupdatevendcost(string|array<string> $PotbConfUpDateVendCost) Return ChildConfigPo objects filtered by the PotbConfUpDateVendCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfaskupdate(string|array<string> $PotbConfAskUpDate) Return ChildConfigPo objects filtered by the PotbConfAskUpDate column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfaskupdate(string|array<string> $PotbConfAskUpDate) Return ChildConfigPo objects filtered by the PotbConfAskUpDate column
 * @method     ChildConfigPo[]|Collection findByPotbconfvxmroundpos(int|array<int> $PotbConfVxmRoundPos) Return ChildConfigPo objects filtered by the PotbConfVxmRoundPos column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfvxmroundpos(int|array<int> $PotbConfVxmRoundPos) Return ChildConfigPo objects filtered by the PotbConfVxmRoundPos column
 * @method     ChildConfigPo[]|Collection findByPotbconfxrefmaint(string|array<string> $PotbConfXrefMaint) Return ChildConfigPo objects filtered by the PotbConfXrefMaint column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfxrefmaint(string|array<string> $PotbConfXrefMaint) Return ChildConfigPo objects filtered by the PotbConfXrefMaint column
 * @method     ChildConfigPo[]|Collection findByPotbconfuseidopts(string|array<string> $PotbConfUseIdOpts) Return ChildConfigPo objects filtered by the PotbConfUseIdOpts column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfuseidopts(string|array<string> $PotbConfUseIdOpts) Return ChildConfigPo objects filtered by the PotbConfUseIdOpts column
 * @method     ChildConfigPo[]|Collection findByPotbconfsrchvxmfirst(string|array<string> $PotbConfSrchVxmFirst) Return ChildConfigPo objects filtered by the PotbConfSrchVxmFirst column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfsrchvxmfirst(string|array<string> $PotbConfSrchVxmFirst) Return ChildConfigPo objects filtered by the PotbConfSrchVxmFirst column
 * @method     ChildConfigPo[]|Collection findByPotbconfopenlineonly(string|array<string> $PotbConfOpenLineOnly) Return ChildConfigPo objects filtered by the PotbConfOpenLineOnly column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfopenlineonly(string|array<string> $PotbConfOpenLineOnly) Return ChildConfigPo objects filtered by the PotbConfOpenLineOnly column
 * @method     ChildConfigPo[]|Collection findByPotbconfitemdesc(string|array<string> $PotbConfItemDesc) Return ChildConfigPo objects filtered by the PotbConfItemDesc column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfitemdesc(string|array<string> $PotbConfItemDesc) Return ChildConfigPo objects filtered by the PotbConfItemDesc column
 * @method     ChildConfigPo[]|Collection findByPotbconfopenbalonly(string|array<string> $PotbConfOpenBalOnly) Return ChildConfigPo objects filtered by the PotbConfOpenBalOnly column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfopenbalonly(string|array<string> $PotbConfOpenBalOnly) Return ChildConfigPo objects filtered by the PotbConfOpenBalOnly column
 * @method     ChildConfigPo[]|Collection findByPotbconfprtwhsedtl(string|array<string> $PotbConfPrtWhseDtl) Return ChildConfigPo objects filtered by the PotbConfPrtWhseDtl column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfprtwhsedtl(string|array<string> $PotbConfPrtWhseDtl) Return ChildConfigPo objects filtered by the PotbConfPrtWhseDtl column
 * @method     ChildConfigPo[]|Collection findByPotbconfautorcpt(string|array<string> $PotbConfAutoRcpt) Return ChildConfigPo objects filtered by the PotbConfAutoRcpt column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfautorcpt(string|array<string> $PotbConfAutoRcpt) Return ChildConfigPo objects filtered by the PotbConfAutoRcpt column
 * @method     ChildConfigPo[]|Collection findByPotbconfdispitemcost(string|array<string> $PotbConfDispItemCost) Return ChildConfigPo objects filtered by the PotbConfDispItemCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfdispitemcost(string|array<string> $PotbConfDispItemCost) Return ChildConfigPo objects filtered by the PotbConfDispItemCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfdispcaseqty(string|array<string> $PotbConfDispCaseQty) Return ChildConfigPo objects filtered by the PotbConfDispCaseQty column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfdispcaseqty(string|array<string> $PotbConfDispCaseQty) Return ChildConfigPo objects filtered by the PotbConfDispCaseQty column
 * @method     ChildConfigPo[]|Collection findByPotbconfonetwoline(int|array<int> $PotbConfOneTwoLine) Return ChildConfigPo objects filtered by the PotbConfOneTwoLine column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfonetwoline(int|array<int> $PotbConfOneTwoLine) Return ChildConfigPo objects filtered by the PotbConfOneTwoLine column
 * @method     ChildConfigPo[]|Collection findByPotbconfuseordras(string|array<string> $PotbConfUseOrdrAs) Return ChildConfigPo objects filtered by the PotbConfUseOrdrAs column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfuseordras(string|array<string> $PotbConfUseOrdrAs) Return ChildConfigPo objects filtered by the PotbConfUseOrdrAs column
 * @method     ChildConfigPo[]|Collection findByPotbconfaprvvendonly(string|array<string> $PotbConfAprvVendOnly) Return ChildConfigPo objects filtered by the PotbConfAprvVendOnly column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfaprvvendonly(string|array<string> $PotbConfAprvVendOnly) Return ChildConfigPo objects filtered by the PotbConfAprvVendOnly column
 * @method     ChildConfigPo[]|Collection findByPotbconfusefab(string|array<string> $PotbConfUseFab) Return ChildConfigPo objects filtered by the PotbConfUseFab column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfusefab(string|array<string> $PotbConfUseFab) Return ChildConfigPo objects filtered by the PotbConfUseFab column
 * @method     ChildConfigPo[]|Collection findByPotbconfshowitem(string|array<string> $PotbConfShowItem) Return ChildConfigPo objects filtered by the PotbConfShowItem column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfshowitem(string|array<string> $PotbConfShowItem) Return ChildConfigPo objects filtered by the PotbConfShowItem column
 * @method     ChildConfigPo[]|Collection findByPotbconfscrapacct(string|array<string> $PotbConfScrapAcct) Return ChildConfigPo objects filtered by the PotbConfScrapAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfscrapacct(string|array<string> $PotbConfScrapAcct) Return ChildConfigPo objects filtered by the PotbConfScrapAcct column
 * @method     ChildConfigPo[]|Collection findByPotbconfscrapvaripct(string|array<string> $PotbConfScrapVariPct) Return ChildConfigPo objects filtered by the PotbConfScrapVariPct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfscrapvaripct(string|array<string> $PotbConfScrapVariPct) Return ChildConfigPo objects filtered by the PotbConfScrapVariPct column
 * @method     ChildConfigPo[]|Collection findByPotbconflifofifo(string|array<string> $PotbConfLifoFifo) Return ChildConfigPo objects filtered by the PotbConfLifoFifo column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconflifofifo(string|array<string> $PotbConfLifoFifo) Return ChildConfigPo objects filtered by the PotbConfLifoFifo column
 * @method     ChildConfigPo[]|Collection findByPotbconffabbomorkit(string|array<string> $PotbConfFabBomOrKit) Return ChildConfigPo objects filtered by the PotbConfFabBomOrKit column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconffabbomorkit(string|array<string> $PotbConfFabBomOrKit) Return ChildConfigPo objects filtered by the PotbConfFabBomOrKit column
 * @method     ChildConfigPo[]|Collection findByPotbconfallocepoer(string|array<string> $PotbConfAllocEpoEr) Return ChildConfigPo objects filtered by the PotbConfAllocEpoEr column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfallocepoer(string|array<string> $PotbConfAllocEpoEr) Return ChildConfigPo objects filtered by the PotbConfAllocEpoEr column
 * @method     ChildConfigPo[]|Collection findByPotbconffabprealloc(string|array<string> $PotbConfFabPrealloc) Return ChildConfigPo objects filtered by the PotbConfFabPrealloc column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconffabprealloc(string|array<string> $PotbConfFabPrealloc) Return ChildConfigPo objects filtered by the PotbConfFabPrealloc column
 * @method     ChildConfigPo[]|Collection findByPotbconfforcefabepo(string|array<string> $PotbConfForceFabEpo) Return ChildConfigPo objects filtered by the PotbConfForceFabEpo column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfforcefabepo(string|array<string> $PotbConfForceFabEpo) Return ChildConfigPo objects filtered by the PotbConfForceFabEpo column
 * @method     ChildConfigPo[]|Collection findByPotbconfpreviewcomplist(string|array<string> $PotbConfPreviewCompList) Return ChildConfigPo objects filtered by the PotbConfPreviewCompList column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpreviewcomplist(string|array<string> $PotbConfPreviewCompList) Return ChildConfigPo objects filtered by the PotbConfPreviewCompList column
 * @method     ChildConfigPo[]|Collection findByPotbconfnegcompusage(string|array<string> $PotbConfNegCompUsage) Return ChildConfigPo objects filtered by the PotbConfNegCompUsage column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfnegcompusage(string|array<string> $PotbConfNegCompUsage) Return ChildConfigPo objects filtered by the PotbConfNegCompUsage column
 * @method     ChildConfigPo[]|Collection findByPotbconfautoselectcomp(string|array<string> $PotbConfAutoSelectComp) Return ChildConfigPo objects filtered by the PotbConfAutoSelectComp column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfautoselectcomp(string|array<string> $PotbConfAutoSelectComp) Return ChildConfigPo objects filtered by the PotbConfAutoSelectComp column
 * @method     ChildConfigPo[]|Collection findByPotbconfbinfromvendor(string|array<string> $PotbConfBinFromVendor) Return ChildConfigPo objects filtered by the PotbConfBinFromVendor column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfbinfromvendor(string|array<string> $PotbConfBinFromVendor) Return ChildConfigPo objects filtered by the PotbConfBinFromVendor column
 * @method     ChildConfigPo[]|Collection findByPotbconfdfltstckcd(string|array<string> $PotbConfDfltStckCd) Return ChildConfigPo objects filtered by the PotbConfDfltStckCd column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfdfltstckcd(string|array<string> $PotbConfDfltStckCd) Return ChildConfigPo objects filtered by the PotbConfDfltStckCd column
 * @method     ChildConfigPo[]|Collection findByPotbconfuseremain(string|array<string> $PotbConfUseRemain) Return ChildConfigPo objects filtered by the PotbConfUseRemain column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfuseremain(string|array<string> $PotbConfUseRemain) Return ChildConfigPo objects filtered by the PotbConfUseRemain column
 * @method     ChildConfigPo[]|Collection findByPotbconfsamecompcost(string|array<string> $PotbConfSameCompCost) Return ChildConfigPo objects filtered by the PotbConfSameCompCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfsamecompcost(string|array<string> $PotbConfSameCompCost) Return ChildConfigPo objects filtered by the PotbConfSameCompCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfpasscode(string|array<string> $PotbConfPassCode) Return ChildConfigPo objects filtered by the PotbConfPassCode column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfpasscode(string|array<string> $PotbConfPassCode) Return ChildConfigPo objects filtered by the PotbConfPassCode column
 * @method     ChildConfigPo[]|Collection findByPotbconfuselandcost(string|array<string> $PotbConfUseLandCost) Return ChildConfigPo objects filtered by the PotbConfUseLandCost column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfuselandcost(string|array<string> $PotbConfUseLandCost) Return ChildConfigPo objects filtered by the PotbConfUseLandCost column
 * @method     ChildConfigPo[]|Collection findByPotbconfbaselandamtqty(string|array<string> $PotbConfBaseLandAmtQty) Return ChildConfigPo objects filtered by the PotbConfBaseLandAmtQty column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfbaselandamtqty(string|array<string> $PotbConfBaseLandAmtQty) Return ChildConfigPo objects filtered by the PotbConfBaseLandAmtQty column
 * @method     ChildConfigPo[]|Collection findByPotbconfwarnlandiner(string|array<string> $PotbConfWarnLandInEr) Return ChildConfigPo objects filtered by the PotbConfWarnLandInEr column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfwarnlandiner(string|array<string> $PotbConfWarnLandInEr) Return ChildConfigPo objects filtered by the PotbConfWarnLandInEr column
 * @method     ChildConfigPo[]|Collection findByPotbconflandamtmultwght(string|array<string> $PotbConfLandAmtMultWght) Return ChildConfigPo objects filtered by the PotbConfLandAmtMultWght column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconflandamtmultwght(string|array<string> $PotbConfLandAmtMultWght) Return ChildConfigPo objects filtered by the PotbConfLandAmtMultWght column
 * @method     ChildConfigPo[]|Collection findByPotbconflanderedit(string|array<string> $PotbConfLandErEdit) Return ChildConfigPo objects filtered by the PotbConfLandErEdit column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconflanderedit(string|array<string> $PotbConfLandErEdit) Return ChildConfigPo objects filtered by the PotbConfLandErEdit column
 * @method     ChildConfigPo[]|Collection findByPotbconfhistcmplfab(string|array<string> $PotbConfHistCmplFab) Return ChildConfigPo objects filtered by the PotbConfHistCmplFab column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconfhistcmplfab(string|array<string> $PotbConfHistCmplFab) Return ChildConfigPo objects filtered by the PotbConfHistCmplFab column
 * @method     ChildConfigPo[]|Collection findByPotbconflandglacct(string|array<string> $PotbConfLandGlAcct) Return ChildConfigPo objects filtered by the PotbConfLandGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotbconflandglacct(string|array<string> $PotbConfLandGlAcct) Return ChildConfigPo objects filtered by the PotbConfLandGlAcct column
 * @method     ChildConfigPo[]|Collection findByPotblandmpfglacct(string|array<string> $PotbLandMpfGlAcct) Return ChildConfigPo objects filtered by the PotbLandMpfGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotblandmpfglacct(string|array<string> $PotbLandMpfGlAcct) Return ChildConfigPo objects filtered by the PotbLandMpfGlAcct column
 * @method     ChildConfigPo[]|Collection findByPotblandhmfglacct(string|array<string> $PotbLandHmfGlAcct) Return ChildConfigPo objects filtered by the PotbLandHmfGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotblandhmfglacct(string|array<string> $PotbLandHmfGlAcct) Return ChildConfigPo objects filtered by the PotbLandHmfGlAcct column
 * @method     ChildConfigPo[]|Collection findByPotblanddsetglacct(string|array<string> $PotbLandDsetGlAcct) Return ChildConfigPo objects filtered by the PotbLandDsetGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByPotblanddsetglacct(string|array<string> $PotbLandDsetGlAcct) Return ChildConfigPo objects filtered by the PotbLandDsetGlAcct column
 * @method     ChildConfigPo[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigPo objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigPo objects filtered by the DateUpdtd column
 * @method     ChildConfigPo[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigPo objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigPo objects filtered by the TimeUpdtd column
 * @method     ChildConfigPo[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigPo objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigPo> findByDummy(string|array<string> $dummy) Return ChildConfigPo objects filtered by the dummy column
 *
 * @method     ChildConfigPo[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigPo> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigPoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigPoQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigPo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigPoQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigPoQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildConfigPoQuery) {
            return $criteria;
        }
        $query = new ChildConfigPoQuery();
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
     * @return ChildConfigPo|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigPoTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigPo A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PotbConfKey, PotbConfSortPo, PotbConfCancOrRshpDate, PotbConfAckOrEtaDate, PotbConfEditShipDate, PotbConfEditExptDate, PotbConfEditCancDate, PotbConfEditAckDate, PotbConfExptDateDef, PotbConfHeadGetDef, PotbConfReseq, PotbConfForceVxref, PotbConfQtyDue, PotbConfWarnDup, PotbConfForcePoRef, PotbConfDestWhse, PotbConfEditPoItemNotes, PotbConfLoadPoVxmNotes, PotbConfEpoUpdLastCost, PotbConfRecAll, PotbConfRecAllAsk, PotbConfReceiveCost, PotbConfProcVari, PotbConfCostRcvryAcct, PotbConfInvtyVariAcct, PotbConfAllowChgCost, PotbConfWarnRcptQty, PotbConfErDispDate, PotbConfProvideLpo, PotbConfWarnDiffWhse, PotbConfAllocRcvd, PotbConfAskClose, PotbConfErAdd2Po, PotbConfTariffGlAcct, PotbConfShopGlAcct, PotbConfShopRate, PotbConfUsePrime, PotbConfUseWatch, PotbConfPrtPowSugg, PotbConfPowSlctYes, PotbConfPowgVendRpt, PotbConfPowgWipStatus, PotbConfPowgWipAutoGen, PotbConfBuyerControl, PotbConfPowgOqMethod, PotbConfFxPo, PotbConfFxInv, PotbConfUpDateVendCost, PotbConfAskUpDate, PotbConfVxmRoundPos, PotbConfXrefMaint, PotbConfUseIdOpts, PotbConfSrchVxmFirst, PotbConfOpenLineOnly, PotbConfItemDesc, PotbConfOpenBalOnly, PotbConfPrtWhseDtl, PotbConfAutoRcpt, PotbConfDispItemCost, PotbConfDispCaseQty, PotbConfOneTwoLine, PotbConfUseOrdrAs, PotbConfAprvVendOnly, PotbConfUseFab, PotbConfShowItem, PotbConfScrapAcct, PotbConfScrapVariPct, PotbConfLifoFifo, PotbConfFabBomOrKit, PotbConfAllocEpoEr, PotbConfFabPrealloc, PotbConfForceFabEpo, PotbConfPreviewCompList, PotbConfNegCompUsage, PotbConfAutoSelectComp, PotbConfBinFromVendor, PotbConfDfltStckCd, PotbConfUseRemain, PotbConfSameCompCost, PotbConfPassCode, PotbConfUseLandCost, PotbConfBaseLandAmtQty, PotbConfWarnLandInEr, PotbConfLandAmtMultWght, PotbConfLandErEdit, PotbConfHistCmplFab, PotbConfLandGlAcct, PotbLandMpfGlAcct, PotbLandHmfGlAcct, PotbLandDsetGlAcct, DateUpdtd, TimeUpdtd, dummy FROM po_config WHERE PotbConfKey = :p0';
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
            /** @var ChildConfigPo $obj */
            $obj = new ChildConfigPo();
            $obj->hydrate($row);
            ConfigPoTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigPo|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFKEY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the PotbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfkey(1234); // WHERE PotbConfKey = 1234
     * $query->filterByPotbconfkey(array(12, 34)); // WHERE PotbConfKey IN (12, 34)
     * $query->filterByPotbconfkey(array('min' => 12)); // WHERE PotbConfKey > 12
     * </code>
     *
     * @param mixed $potbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfkey($potbconfkey = null, ?string $comparison = null)
    {
        if (is_array($potbconfkey)) {
            $useMinMax = false;
            if (isset($potbconfkey['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFKEY, $potbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfkey['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFKEY, $potbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFKEY, $potbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfSortPo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfsortpo('fooValue');   // WHERE PotbConfSortPo = 'fooValue'
     * $query->filterByPotbconfsortpo('%fooValue%', Criteria::LIKE); // WHERE PotbConfSortPo LIKE '%fooValue%'
     * $query->filterByPotbconfsortpo(['foo', 'bar']); // WHERE PotbConfSortPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfsortpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfsortpo($potbconfsortpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfsortpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSORTPO, $potbconfsortpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfCancOrRshpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfcancorrshpdate('fooValue');   // WHERE PotbConfCancOrRshpDate = 'fooValue'
     * $query->filterByPotbconfcancorrshpdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfCancOrRshpDate LIKE '%fooValue%'
     * $query->filterByPotbconfcancorrshpdate(['foo', 'bar']); // WHERE PotbConfCancOrRshpDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfcancorrshpdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfcancorrshpdate($potbconfcancorrshpdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfcancorrshpdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFCANCORRSHPDATE, $potbconfcancorrshpdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAckOrEtaDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfackoretadate('fooValue');   // WHERE PotbConfAckOrEtaDate = 'fooValue'
     * $query->filterByPotbconfackoretadate('%fooValue%', Criteria::LIKE); // WHERE PotbConfAckOrEtaDate LIKE '%fooValue%'
     * $query->filterByPotbconfackoretadate(['foo', 'bar']); // WHERE PotbConfAckOrEtaDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfackoretadate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfackoretadate($potbconfackoretadate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfackoretadate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFACKORETADATE, $potbconfackoretadate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfEditShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfeditshipdate('fooValue');   // WHERE PotbConfEditShipDate = 'fooValue'
     * $query->filterByPotbconfeditshipdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfEditShipDate LIKE '%fooValue%'
     * $query->filterByPotbconfeditshipdate(['foo', 'bar']); // WHERE PotbConfEditShipDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfeditshipdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfeditshipdate($potbconfeditshipdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfeditshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEDITSHIPDATE, $potbconfeditshipdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfEditExptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfeditexptdate('fooValue');   // WHERE PotbConfEditExptDate = 'fooValue'
     * $query->filterByPotbconfeditexptdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfEditExptDate LIKE '%fooValue%'
     * $query->filterByPotbconfeditexptdate(['foo', 'bar']); // WHERE PotbConfEditExptDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfeditexptdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfeditexptdate($potbconfeditexptdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfeditexptdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEDITEXPTDATE, $potbconfeditexptdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfEditCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfeditcancdate('fooValue');   // WHERE PotbConfEditCancDate = 'fooValue'
     * $query->filterByPotbconfeditcancdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfEditCancDate LIKE '%fooValue%'
     * $query->filterByPotbconfeditcancdate(['foo', 'bar']); // WHERE PotbConfEditCancDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfeditcancdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfeditcancdate($potbconfeditcancdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfeditcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEDITCANCDATE, $potbconfeditcancdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfEditAckDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfeditackdate('fooValue');   // WHERE PotbConfEditAckDate = 'fooValue'
     * $query->filterByPotbconfeditackdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfEditAckDate LIKE '%fooValue%'
     * $query->filterByPotbconfeditackdate(['foo', 'bar']); // WHERE PotbConfEditAckDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfeditackdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfeditackdate($potbconfeditackdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfeditackdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEDITACKDATE, $potbconfeditackdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfExptDateDef column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfexptdatedef('fooValue');   // WHERE PotbConfExptDateDef = 'fooValue'
     * $query->filterByPotbconfexptdatedef('%fooValue%', Criteria::LIKE); // WHERE PotbConfExptDateDef LIKE '%fooValue%'
     * $query->filterByPotbconfexptdatedef(['foo', 'bar']); // WHERE PotbConfExptDateDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfexptdatedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfexptdatedef($potbconfexptdatedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfexptdatedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEXPTDATEDEF, $potbconfexptdatedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfHeadGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfheadgetdef(1234); // WHERE PotbConfHeadGetDef = 1234
     * $query->filterByPotbconfheadgetdef(array(12, 34)); // WHERE PotbConfHeadGetDef IN (12, 34)
     * $query->filterByPotbconfheadgetdef(array('min' => 12)); // WHERE PotbConfHeadGetDef > 12
     * </code>
     *
     * @param mixed $potbconfheadgetdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfheadgetdef($potbconfheadgetdef = null, ?string $comparison = null)
    {
        if (is_array($potbconfheadgetdef)) {
            $useMinMax = false;
            if (isset($potbconfheadgetdef['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFHEADGETDEF, $potbconfheadgetdef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfheadgetdef['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFHEADGETDEF, $potbconfheadgetdef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFHEADGETDEF, $potbconfheadgetdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfReseq column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfreseq('fooValue');   // WHERE PotbConfReseq = 'fooValue'
     * $query->filterByPotbconfreseq('%fooValue%', Criteria::LIKE); // WHERE PotbConfReseq LIKE '%fooValue%'
     * $query->filterByPotbconfreseq(['foo', 'bar']); // WHERE PotbConfReseq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfreseq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfreseq($potbconfreseq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfreseq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFRESEQ, $potbconfreseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfForceVxref column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfforcevxref('fooValue');   // WHERE PotbConfForceVxref = 'fooValue'
     * $query->filterByPotbconfforcevxref('%fooValue%', Criteria::LIKE); // WHERE PotbConfForceVxref LIKE '%fooValue%'
     * $query->filterByPotbconfforcevxref(['foo', 'bar']); // WHERE PotbConfForceVxref IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfforcevxref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfforcevxref($potbconfforcevxref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfforcevxref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFORCEVXREF, $potbconfforcevxref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfQtyDue column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfqtydue('fooValue');   // WHERE PotbConfQtyDue = 'fooValue'
     * $query->filterByPotbconfqtydue('%fooValue%', Criteria::LIKE); // WHERE PotbConfQtyDue LIKE '%fooValue%'
     * $query->filterByPotbconfqtydue(['foo', 'bar']); // WHERE PotbConfQtyDue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfqtydue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfqtydue($potbconfqtydue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfqtydue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFQTYDUE, $potbconfqtydue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfWarnDup column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfwarndup('fooValue');   // WHERE PotbConfWarnDup = 'fooValue'
     * $query->filterByPotbconfwarndup('%fooValue%', Criteria::LIKE); // WHERE PotbConfWarnDup LIKE '%fooValue%'
     * $query->filterByPotbconfwarndup(['foo', 'bar']); // WHERE PotbConfWarnDup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfwarndup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfwarndup($potbconfwarndup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfwarndup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFWARNDUP, $potbconfwarndup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfForcePoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfforceporef('fooValue');   // WHERE PotbConfForcePoRef = 'fooValue'
     * $query->filterByPotbconfforceporef('%fooValue%', Criteria::LIKE); // WHERE PotbConfForcePoRef LIKE '%fooValue%'
     * $query->filterByPotbconfforceporef(['foo', 'bar']); // WHERE PotbConfForcePoRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfforceporef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfforceporef($potbconfforceporef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfforceporef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFORCEPOREF, $potbconfforceporef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfDestWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfdestwhse('fooValue');   // WHERE PotbConfDestWhse = 'fooValue'
     * $query->filterByPotbconfdestwhse('%fooValue%', Criteria::LIKE); // WHERE PotbConfDestWhse LIKE '%fooValue%'
     * $query->filterByPotbconfdestwhse(['foo', 'bar']); // WHERE PotbConfDestWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfdestwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfdestwhse($potbconfdestwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfdestwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFDESTWHSE, $potbconfdestwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfEditPoItemNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfeditpoitemnotes('fooValue');   // WHERE PotbConfEditPoItemNotes = 'fooValue'
     * $query->filterByPotbconfeditpoitemnotes('%fooValue%', Criteria::LIKE); // WHERE PotbConfEditPoItemNotes LIKE '%fooValue%'
     * $query->filterByPotbconfeditpoitemnotes(['foo', 'bar']); // WHERE PotbConfEditPoItemNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfeditpoitemnotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfeditpoitemnotes($potbconfeditpoitemnotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfeditpoitemnotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEDITPOITEMNOTES, $potbconfeditpoitemnotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfLoadPoVxmNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfloadpovxmnotes('fooValue');   // WHERE PotbConfLoadPoVxmNotes = 'fooValue'
     * $query->filterByPotbconfloadpovxmnotes('%fooValue%', Criteria::LIKE); // WHERE PotbConfLoadPoVxmNotes LIKE '%fooValue%'
     * $query->filterByPotbconfloadpovxmnotes(['foo', 'bar']); // WHERE PotbConfLoadPoVxmNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfloadpovxmnotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfloadpovxmnotes($potbconfloadpovxmnotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfloadpovxmnotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFLOADPOVXMNOTES, $potbconfloadpovxmnotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfEpoUpdLastCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfepoupdlastcost('fooValue');   // WHERE PotbConfEpoUpdLastCost = 'fooValue'
     * $query->filterByPotbconfepoupdlastcost('%fooValue%', Criteria::LIKE); // WHERE PotbConfEpoUpdLastCost LIKE '%fooValue%'
     * $query->filterByPotbconfepoupdlastcost(['foo', 'bar']); // WHERE PotbConfEpoUpdLastCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfepoupdlastcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfepoupdlastcost($potbconfepoupdlastcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfepoupdlastcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFEPOUPDLASTCOST, $potbconfepoupdlastcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfRecAll column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfrecall('fooValue');   // WHERE PotbConfRecAll = 'fooValue'
     * $query->filterByPotbconfrecall('%fooValue%', Criteria::LIKE); // WHERE PotbConfRecAll LIKE '%fooValue%'
     * $query->filterByPotbconfrecall(['foo', 'bar']); // WHERE PotbConfRecAll IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfrecall The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfrecall($potbconfrecall = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfrecall)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFRECALL, $potbconfrecall, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfRecAllAsk column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfrecallask('fooValue');   // WHERE PotbConfRecAllAsk = 'fooValue'
     * $query->filterByPotbconfrecallask('%fooValue%', Criteria::LIKE); // WHERE PotbConfRecAllAsk LIKE '%fooValue%'
     * $query->filterByPotbconfrecallask(['foo', 'bar']); // WHERE PotbConfRecAllAsk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfrecallask The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfrecallask($potbconfrecallask = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfrecallask)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFRECALLASK, $potbconfrecallask, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfReceiveCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfreceivecost('fooValue');   // WHERE PotbConfReceiveCost = 'fooValue'
     * $query->filterByPotbconfreceivecost('%fooValue%', Criteria::LIKE); // WHERE PotbConfReceiveCost LIKE '%fooValue%'
     * $query->filterByPotbconfreceivecost(['foo', 'bar']); // WHERE PotbConfReceiveCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfreceivecost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfreceivecost($potbconfreceivecost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfreceivecost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFRECEIVECOST, $potbconfreceivecost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfProcVari column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfprocvari('fooValue');   // WHERE PotbConfProcVari = 'fooValue'
     * $query->filterByPotbconfprocvari('%fooValue%', Criteria::LIKE); // WHERE PotbConfProcVari LIKE '%fooValue%'
     * $query->filterByPotbconfprocvari(['foo', 'bar']); // WHERE PotbConfProcVari IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfprocvari The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfprocvari($potbconfprocvari = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfprocvari)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPROCVARI, $potbconfprocvari, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfCostRcvryAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfcostrcvryacct('fooValue');   // WHERE PotbConfCostRcvryAcct = 'fooValue'
     * $query->filterByPotbconfcostrcvryacct('%fooValue%', Criteria::LIKE); // WHERE PotbConfCostRcvryAcct LIKE '%fooValue%'
     * $query->filterByPotbconfcostrcvryacct(['foo', 'bar']); // WHERE PotbConfCostRcvryAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfcostrcvryacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfcostrcvryacct($potbconfcostrcvryacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfcostrcvryacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFCOSTRCVRYACCT, $potbconfcostrcvryacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfInvtyVariAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfinvtyvariacct('fooValue');   // WHERE PotbConfInvtyVariAcct = 'fooValue'
     * $query->filterByPotbconfinvtyvariacct('%fooValue%', Criteria::LIKE); // WHERE PotbConfInvtyVariAcct LIKE '%fooValue%'
     * $query->filterByPotbconfinvtyvariacct(['foo', 'bar']); // WHERE PotbConfInvtyVariAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfinvtyvariacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfinvtyvariacct($potbconfinvtyvariacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfinvtyvariacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFINVTYVARIACCT, $potbconfinvtyvariacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAllowChgCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfallowchgcost('fooValue');   // WHERE PotbConfAllowChgCost = 'fooValue'
     * $query->filterByPotbconfallowchgcost('%fooValue%', Criteria::LIKE); // WHERE PotbConfAllowChgCost LIKE '%fooValue%'
     * $query->filterByPotbconfallowchgcost(['foo', 'bar']); // WHERE PotbConfAllowChgCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfallowchgcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfallowchgcost($potbconfallowchgcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfallowchgcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFALLOWCHGCOST, $potbconfallowchgcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfWarnRcptQty column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfwarnrcptqty('fooValue');   // WHERE PotbConfWarnRcptQty = 'fooValue'
     * $query->filterByPotbconfwarnrcptqty('%fooValue%', Criteria::LIKE); // WHERE PotbConfWarnRcptQty LIKE '%fooValue%'
     * $query->filterByPotbconfwarnrcptqty(['foo', 'bar']); // WHERE PotbConfWarnRcptQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfwarnrcptqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfwarnrcptqty($potbconfwarnrcptqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfwarnrcptqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFWARNRCPTQTY, $potbconfwarnrcptqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfErDispDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconferdispdate('fooValue');   // WHERE PotbConfErDispDate = 'fooValue'
     * $query->filterByPotbconferdispdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfErDispDate LIKE '%fooValue%'
     * $query->filterByPotbconferdispdate(['foo', 'bar']); // WHERE PotbConfErDispDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconferdispdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconferdispdate($potbconferdispdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconferdispdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFERDISPDATE, $potbconferdispdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfProvideLpo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfprovidelpo('fooValue');   // WHERE PotbConfProvideLpo = 'fooValue'
     * $query->filterByPotbconfprovidelpo('%fooValue%', Criteria::LIKE); // WHERE PotbConfProvideLpo LIKE '%fooValue%'
     * $query->filterByPotbconfprovidelpo(['foo', 'bar']); // WHERE PotbConfProvideLpo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfprovidelpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfprovidelpo($potbconfprovidelpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfprovidelpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPROVIDELPO, $potbconfprovidelpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfWarnDiffWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfwarndiffwhse('fooValue');   // WHERE PotbConfWarnDiffWhse = 'fooValue'
     * $query->filterByPotbconfwarndiffwhse('%fooValue%', Criteria::LIKE); // WHERE PotbConfWarnDiffWhse LIKE '%fooValue%'
     * $query->filterByPotbconfwarndiffwhse(['foo', 'bar']); // WHERE PotbConfWarnDiffWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfwarndiffwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfwarndiffwhse($potbconfwarndiffwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfwarndiffwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFWARNDIFFWHSE, $potbconfwarndiffwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAllocRcvd column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfallocrcvd('fooValue');   // WHERE PotbConfAllocRcvd = 'fooValue'
     * $query->filterByPotbconfallocrcvd('%fooValue%', Criteria::LIKE); // WHERE PotbConfAllocRcvd LIKE '%fooValue%'
     * $query->filterByPotbconfallocrcvd(['foo', 'bar']); // WHERE PotbConfAllocRcvd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfallocrcvd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfallocrcvd($potbconfallocrcvd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfallocrcvd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFALLOCRCVD, $potbconfallocrcvd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAskClose column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfaskclose('fooValue');   // WHERE PotbConfAskClose = 'fooValue'
     * $query->filterByPotbconfaskclose('%fooValue%', Criteria::LIKE); // WHERE PotbConfAskClose LIKE '%fooValue%'
     * $query->filterByPotbconfaskclose(['foo', 'bar']); // WHERE PotbConfAskClose IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfaskclose The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfaskclose($potbconfaskclose = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfaskclose)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFASKCLOSE, $potbconfaskclose, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfErAdd2Po column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconferadd2po('fooValue');   // WHERE PotbConfErAdd2Po = 'fooValue'
     * $query->filterByPotbconferadd2po('%fooValue%', Criteria::LIKE); // WHERE PotbConfErAdd2Po LIKE '%fooValue%'
     * $query->filterByPotbconferadd2po(['foo', 'bar']); // WHERE PotbConfErAdd2Po IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconferadd2po The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconferadd2po($potbconferadd2po = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconferadd2po)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFERADD2PO, $potbconferadd2po, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfTariffGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconftariffglacct('fooValue');   // WHERE PotbConfTariffGlAcct = 'fooValue'
     * $query->filterByPotbconftariffglacct('%fooValue%', Criteria::LIKE); // WHERE PotbConfTariffGlAcct LIKE '%fooValue%'
     * $query->filterByPotbconftariffglacct(['foo', 'bar']); // WHERE PotbConfTariffGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconftariffglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconftariffglacct($potbconftariffglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconftariffglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFTARIFFGLACCT, $potbconftariffglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfShopGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfshopglacct('fooValue');   // WHERE PotbConfShopGlAcct = 'fooValue'
     * $query->filterByPotbconfshopglacct('%fooValue%', Criteria::LIKE); // WHERE PotbConfShopGlAcct LIKE '%fooValue%'
     * $query->filterByPotbconfshopglacct(['foo', 'bar']); // WHERE PotbConfShopGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfshopglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfshopglacct($potbconfshopglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfshopglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSHOPGLACCT, $potbconfshopglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfShopRate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfshoprate(1234); // WHERE PotbConfShopRate = 1234
     * $query->filterByPotbconfshoprate(array(12, 34)); // WHERE PotbConfShopRate IN (12, 34)
     * $query->filterByPotbconfshoprate(array('min' => 12)); // WHERE PotbConfShopRate > 12
     * </code>
     *
     * @param mixed $potbconfshoprate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfshoprate($potbconfshoprate = null, ?string $comparison = null)
    {
        if (is_array($potbconfshoprate)) {
            $useMinMax = false;
            if (isset($potbconfshoprate['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSHOPRATE, $potbconfshoprate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfshoprate['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSHOPRATE, $potbconfshoprate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSHOPRATE, $potbconfshoprate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUsePrime column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfuseprime('fooValue');   // WHERE PotbConfUsePrime = 'fooValue'
     * $query->filterByPotbconfuseprime('%fooValue%', Criteria::LIKE); // WHERE PotbConfUsePrime LIKE '%fooValue%'
     * $query->filterByPotbconfuseprime(['foo', 'bar']); // WHERE PotbConfUsePrime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfuseprime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfuseprime($potbconfuseprime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfuseprime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSEPRIME, $potbconfuseprime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUseWatch column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfusewatch('fooValue');   // WHERE PotbConfUseWatch = 'fooValue'
     * $query->filterByPotbconfusewatch('%fooValue%', Criteria::LIKE); // WHERE PotbConfUseWatch LIKE '%fooValue%'
     * $query->filterByPotbconfusewatch(['foo', 'bar']); // WHERE PotbConfUseWatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfusewatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfusewatch($potbconfusewatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfusewatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSEWATCH, $potbconfusewatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPrtPowSugg column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfprtpowsugg('fooValue');   // WHERE PotbConfPrtPowSugg = 'fooValue'
     * $query->filterByPotbconfprtpowsugg('%fooValue%', Criteria::LIKE); // WHERE PotbConfPrtPowSugg LIKE '%fooValue%'
     * $query->filterByPotbconfprtpowsugg(['foo', 'bar']); // WHERE PotbConfPrtPowSugg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfprtpowsugg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfprtpowsugg($potbconfprtpowsugg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfprtpowsugg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPRTPOWSUGG, $potbconfprtpowsugg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPowSlctYes column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpowslctyes('fooValue');   // WHERE PotbConfPowSlctYes = 'fooValue'
     * $query->filterByPotbconfpowslctyes('%fooValue%', Criteria::LIKE); // WHERE PotbConfPowSlctYes LIKE '%fooValue%'
     * $query->filterByPotbconfpowslctyes(['foo', 'bar']); // WHERE PotbConfPowSlctYes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfpowslctyes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpowslctyes($potbconfpowslctyes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfpowslctyes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWSLCTYES, $potbconfpowslctyes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPowgVendRpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpowgvendrpt('fooValue');   // WHERE PotbConfPowgVendRpt = 'fooValue'
     * $query->filterByPotbconfpowgvendrpt('%fooValue%', Criteria::LIKE); // WHERE PotbConfPowgVendRpt LIKE '%fooValue%'
     * $query->filterByPotbconfpowgvendrpt(['foo', 'bar']); // WHERE PotbConfPowgVendRpt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfpowgvendrpt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpowgvendrpt($potbconfpowgvendrpt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfpowgvendrpt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWGVENDRPT, $potbconfpowgvendrpt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPowgWipStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpowgwipstatus('fooValue');   // WHERE PotbConfPowgWipStatus = 'fooValue'
     * $query->filterByPotbconfpowgwipstatus('%fooValue%', Criteria::LIKE); // WHERE PotbConfPowgWipStatus LIKE '%fooValue%'
     * $query->filterByPotbconfpowgwipstatus(['foo', 'bar']); // WHERE PotbConfPowgWipStatus IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfpowgwipstatus The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpowgwipstatus($potbconfpowgwipstatus = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfpowgwipstatus)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWGWIPSTATUS, $potbconfpowgwipstatus, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPowgWipAutoGen column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpowgwipautogen('fooValue');   // WHERE PotbConfPowgWipAutoGen = 'fooValue'
     * $query->filterByPotbconfpowgwipautogen('%fooValue%', Criteria::LIKE); // WHERE PotbConfPowgWipAutoGen LIKE '%fooValue%'
     * $query->filterByPotbconfpowgwipautogen(['foo', 'bar']); // WHERE PotbConfPowgWipAutoGen IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfpowgwipautogen The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpowgwipautogen($potbconfpowgwipautogen = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfpowgwipautogen)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWGWIPAUTOGEN, $potbconfpowgwipautogen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfBuyerControl column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfbuyercontrol('fooValue');   // WHERE PotbConfBuyerControl = 'fooValue'
     * $query->filterByPotbconfbuyercontrol('%fooValue%', Criteria::LIKE); // WHERE PotbConfBuyerControl LIKE '%fooValue%'
     * $query->filterByPotbconfbuyercontrol(['foo', 'bar']); // WHERE PotbConfBuyerControl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfbuyercontrol The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfbuyercontrol($potbconfbuyercontrol = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfbuyercontrol)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFBUYERCONTROL, $potbconfbuyercontrol, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPowgOqMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpowgoqmethod(1234); // WHERE PotbConfPowgOqMethod = 1234
     * $query->filterByPotbconfpowgoqmethod(array(12, 34)); // WHERE PotbConfPowgOqMethod IN (12, 34)
     * $query->filterByPotbconfpowgoqmethod(array('min' => 12)); // WHERE PotbConfPowgOqMethod > 12
     * </code>
     *
     * @param mixed $potbconfpowgoqmethod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpowgoqmethod($potbconfpowgoqmethod = null, ?string $comparison = null)
    {
        if (is_array($potbconfpowgoqmethod)) {
            $useMinMax = false;
            if (isset($potbconfpowgoqmethod['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD, $potbconfpowgoqmethod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfpowgoqmethod['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD, $potbconfpowgoqmethod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPOWGOQMETHOD, $potbconfpowgoqmethod, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfFxPo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconffxpo('fooValue');   // WHERE PotbConfFxPo = 'fooValue'
     * $query->filterByPotbconffxpo('%fooValue%', Criteria::LIKE); // WHERE PotbConfFxPo LIKE '%fooValue%'
     * $query->filterByPotbconffxpo(['foo', 'bar']); // WHERE PotbConfFxPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconffxpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconffxpo($potbconffxpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconffxpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFXPO, $potbconffxpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfFxInv column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconffxinv('fooValue');   // WHERE PotbConfFxInv = 'fooValue'
     * $query->filterByPotbconffxinv('%fooValue%', Criteria::LIKE); // WHERE PotbConfFxInv LIKE '%fooValue%'
     * $query->filterByPotbconffxinv(['foo', 'bar']); // WHERE PotbConfFxInv IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconffxinv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconffxinv($potbconffxinv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconffxinv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFXINV, $potbconffxinv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUpDateVendCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfupdatevendcost('fooValue');   // WHERE PotbConfUpDateVendCost = 'fooValue'
     * $query->filterByPotbconfupdatevendcost('%fooValue%', Criteria::LIKE); // WHERE PotbConfUpDateVendCost LIKE '%fooValue%'
     * $query->filterByPotbconfupdatevendcost(['foo', 'bar']); // WHERE PotbConfUpDateVendCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfupdatevendcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfupdatevendcost($potbconfupdatevendcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfupdatevendcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUPDATEVENDCOST, $potbconfupdatevendcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAskUpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfaskupdate('fooValue');   // WHERE PotbConfAskUpDate = 'fooValue'
     * $query->filterByPotbconfaskupdate('%fooValue%', Criteria::LIKE); // WHERE PotbConfAskUpDate LIKE '%fooValue%'
     * $query->filterByPotbconfaskupdate(['foo', 'bar']); // WHERE PotbConfAskUpDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfaskupdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfaskupdate($potbconfaskupdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfaskupdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFASKUPDATE, $potbconfaskupdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfVxmRoundPos column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfvxmroundpos(1234); // WHERE PotbConfVxmRoundPos = 1234
     * $query->filterByPotbconfvxmroundpos(array(12, 34)); // WHERE PotbConfVxmRoundPos IN (12, 34)
     * $query->filterByPotbconfvxmroundpos(array('min' => 12)); // WHERE PotbConfVxmRoundPos > 12
     * </code>
     *
     * @param mixed $potbconfvxmroundpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfvxmroundpos($potbconfvxmroundpos = null, ?string $comparison = null)
    {
        if (is_array($potbconfvxmroundpos)) {
            $useMinMax = false;
            if (isset($potbconfvxmroundpos['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS, $potbconfvxmroundpos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfvxmroundpos['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS, $potbconfvxmroundpos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFVXMROUNDPOS, $potbconfvxmroundpos, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfXrefMaint column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfxrefmaint('fooValue');   // WHERE PotbConfXrefMaint = 'fooValue'
     * $query->filterByPotbconfxrefmaint('%fooValue%', Criteria::LIKE); // WHERE PotbConfXrefMaint LIKE '%fooValue%'
     * $query->filterByPotbconfxrefmaint(['foo', 'bar']); // WHERE PotbConfXrefMaint IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfxrefmaint The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfxrefmaint($potbconfxrefmaint = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfxrefmaint)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFXREFMAINT, $potbconfxrefmaint, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUseIdOpts column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfuseidopts('fooValue');   // WHERE PotbConfUseIdOpts = 'fooValue'
     * $query->filterByPotbconfuseidopts('%fooValue%', Criteria::LIKE); // WHERE PotbConfUseIdOpts LIKE '%fooValue%'
     * $query->filterByPotbconfuseidopts(['foo', 'bar']); // WHERE PotbConfUseIdOpts IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfuseidopts The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfuseidopts($potbconfuseidopts = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfuseidopts)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSEIDOPTS, $potbconfuseidopts, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfSrchVxmFirst column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfsrchvxmfirst('fooValue');   // WHERE PotbConfSrchVxmFirst = 'fooValue'
     * $query->filterByPotbconfsrchvxmfirst('%fooValue%', Criteria::LIKE); // WHERE PotbConfSrchVxmFirst LIKE '%fooValue%'
     * $query->filterByPotbconfsrchvxmfirst(['foo', 'bar']); // WHERE PotbConfSrchVxmFirst IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfsrchvxmfirst The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfsrchvxmfirst($potbconfsrchvxmfirst = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfsrchvxmfirst)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSRCHVXMFIRST, $potbconfsrchvxmfirst, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfOpenLineOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfopenlineonly('fooValue');   // WHERE PotbConfOpenLineOnly = 'fooValue'
     * $query->filterByPotbconfopenlineonly('%fooValue%', Criteria::LIKE); // WHERE PotbConfOpenLineOnly LIKE '%fooValue%'
     * $query->filterByPotbconfopenlineonly(['foo', 'bar']); // WHERE PotbConfOpenLineOnly IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfopenlineonly The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfopenlineonly($potbconfopenlineonly = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfopenlineonly)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFOPENLINEONLY, $potbconfopenlineonly, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfItemDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfitemdesc('fooValue');   // WHERE PotbConfItemDesc = 'fooValue'
     * $query->filterByPotbconfitemdesc('%fooValue%', Criteria::LIKE); // WHERE PotbConfItemDesc LIKE '%fooValue%'
     * $query->filterByPotbconfitemdesc(['foo', 'bar']); // WHERE PotbConfItemDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfitemdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfitemdesc($potbconfitemdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfitemdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFITEMDESC, $potbconfitemdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfOpenBalOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfopenbalonly('fooValue');   // WHERE PotbConfOpenBalOnly = 'fooValue'
     * $query->filterByPotbconfopenbalonly('%fooValue%', Criteria::LIKE); // WHERE PotbConfOpenBalOnly LIKE '%fooValue%'
     * $query->filterByPotbconfopenbalonly(['foo', 'bar']); // WHERE PotbConfOpenBalOnly IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfopenbalonly The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfopenbalonly($potbconfopenbalonly = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfopenbalonly)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFOPENBALONLY, $potbconfopenbalonly, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPrtWhseDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfprtwhsedtl('fooValue');   // WHERE PotbConfPrtWhseDtl = 'fooValue'
     * $query->filterByPotbconfprtwhsedtl('%fooValue%', Criteria::LIKE); // WHERE PotbConfPrtWhseDtl LIKE '%fooValue%'
     * $query->filterByPotbconfprtwhsedtl(['foo', 'bar']); // WHERE PotbConfPrtWhseDtl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfprtwhsedtl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfprtwhsedtl($potbconfprtwhsedtl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfprtwhsedtl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPRTWHSEDTL, $potbconfprtwhsedtl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAutoRcpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfautorcpt('fooValue');   // WHERE PotbConfAutoRcpt = 'fooValue'
     * $query->filterByPotbconfautorcpt('%fooValue%', Criteria::LIKE); // WHERE PotbConfAutoRcpt LIKE '%fooValue%'
     * $query->filterByPotbconfautorcpt(['foo', 'bar']); // WHERE PotbConfAutoRcpt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfautorcpt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfautorcpt($potbconfautorcpt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfautorcpt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFAUTORCPT, $potbconfautorcpt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfDispItemCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfdispitemcost('fooValue');   // WHERE PotbConfDispItemCost = 'fooValue'
     * $query->filterByPotbconfdispitemcost('%fooValue%', Criteria::LIKE); // WHERE PotbConfDispItemCost LIKE '%fooValue%'
     * $query->filterByPotbconfdispitemcost(['foo', 'bar']); // WHERE PotbConfDispItemCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfdispitemcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfdispitemcost($potbconfdispitemcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfdispitemcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFDISPITEMCOST, $potbconfdispitemcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfDispCaseQty column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfdispcaseqty('fooValue');   // WHERE PotbConfDispCaseQty = 'fooValue'
     * $query->filterByPotbconfdispcaseqty('%fooValue%', Criteria::LIKE); // WHERE PotbConfDispCaseQty LIKE '%fooValue%'
     * $query->filterByPotbconfdispcaseqty(['foo', 'bar']); // WHERE PotbConfDispCaseQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfdispcaseqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfdispcaseqty($potbconfdispcaseqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfdispcaseqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFDISPCASEQTY, $potbconfdispcaseqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfOneTwoLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfonetwoline(1234); // WHERE PotbConfOneTwoLine = 1234
     * $query->filterByPotbconfonetwoline(array(12, 34)); // WHERE PotbConfOneTwoLine IN (12, 34)
     * $query->filterByPotbconfonetwoline(array('min' => 12)); // WHERE PotbConfOneTwoLine > 12
     * </code>
     *
     * @param mixed $potbconfonetwoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfonetwoline($potbconfonetwoline = null, ?string $comparison = null)
    {
        if (is_array($potbconfonetwoline)) {
            $useMinMax = false;
            if (isset($potbconfonetwoline['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFONETWOLINE, $potbconfonetwoline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfonetwoline['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFONETWOLINE, $potbconfonetwoline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFONETWOLINE, $potbconfonetwoline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUseOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfuseordras('fooValue');   // WHERE PotbConfUseOrdrAs = 'fooValue'
     * $query->filterByPotbconfuseordras('%fooValue%', Criteria::LIKE); // WHERE PotbConfUseOrdrAs LIKE '%fooValue%'
     * $query->filterByPotbconfuseordras(['foo', 'bar']); // WHERE PotbConfUseOrdrAs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfuseordras The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfuseordras($potbconfuseordras = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfuseordras)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSEORDRAS, $potbconfuseordras, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAprvVendOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfaprvvendonly('fooValue');   // WHERE PotbConfAprvVendOnly = 'fooValue'
     * $query->filterByPotbconfaprvvendonly('%fooValue%', Criteria::LIKE); // WHERE PotbConfAprvVendOnly LIKE '%fooValue%'
     * $query->filterByPotbconfaprvvendonly(['foo', 'bar']); // WHERE PotbConfAprvVendOnly IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfaprvvendonly The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfaprvvendonly($potbconfaprvvendonly = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfaprvvendonly)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFAPRVVENDONLY, $potbconfaprvvendonly, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUseFab column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfusefab('fooValue');   // WHERE PotbConfUseFab = 'fooValue'
     * $query->filterByPotbconfusefab('%fooValue%', Criteria::LIKE); // WHERE PotbConfUseFab LIKE '%fooValue%'
     * $query->filterByPotbconfusefab(['foo', 'bar']); // WHERE PotbConfUseFab IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfusefab The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfusefab($potbconfusefab = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfusefab)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSEFAB, $potbconfusefab, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfShowItem column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfshowitem('fooValue');   // WHERE PotbConfShowItem = 'fooValue'
     * $query->filterByPotbconfshowitem('%fooValue%', Criteria::LIKE); // WHERE PotbConfShowItem LIKE '%fooValue%'
     * $query->filterByPotbconfshowitem(['foo', 'bar']); // WHERE PotbConfShowItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfshowitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfshowitem($potbconfshowitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfshowitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSHOWITEM, $potbconfshowitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfScrapAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfscrapacct('fooValue');   // WHERE PotbConfScrapAcct = 'fooValue'
     * $query->filterByPotbconfscrapacct('%fooValue%', Criteria::LIKE); // WHERE PotbConfScrapAcct LIKE '%fooValue%'
     * $query->filterByPotbconfscrapacct(['foo', 'bar']); // WHERE PotbConfScrapAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfscrapacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfscrapacct($potbconfscrapacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfscrapacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSCRAPACCT, $potbconfscrapacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfScrapVariPct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfscrapvaripct(1234); // WHERE PotbConfScrapVariPct = 1234
     * $query->filterByPotbconfscrapvaripct(array(12, 34)); // WHERE PotbConfScrapVariPct IN (12, 34)
     * $query->filterByPotbconfscrapvaripct(array('min' => 12)); // WHERE PotbConfScrapVariPct > 12
     * </code>
     *
     * @param mixed $potbconfscrapvaripct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfscrapvaripct($potbconfscrapvaripct = null, ?string $comparison = null)
    {
        if (is_array($potbconfscrapvaripct)) {
            $useMinMax = false;
            if (isset($potbconfscrapvaripct['min'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT, $potbconfscrapvaripct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potbconfscrapvaripct['max'])) {
                $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT, $potbconfscrapvaripct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSCRAPVARIPCT, $potbconfscrapvaripct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfLifoFifo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconflifofifo('fooValue');   // WHERE PotbConfLifoFifo = 'fooValue'
     * $query->filterByPotbconflifofifo('%fooValue%', Criteria::LIKE); // WHERE PotbConfLifoFifo LIKE '%fooValue%'
     * $query->filterByPotbconflifofifo(['foo', 'bar']); // WHERE PotbConfLifoFifo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconflifofifo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconflifofifo($potbconflifofifo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconflifofifo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFLIFOFIFO, $potbconflifofifo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfFabBomOrKit column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconffabbomorkit('fooValue');   // WHERE PotbConfFabBomOrKit = 'fooValue'
     * $query->filterByPotbconffabbomorkit('%fooValue%', Criteria::LIKE); // WHERE PotbConfFabBomOrKit LIKE '%fooValue%'
     * $query->filterByPotbconffabbomorkit(['foo', 'bar']); // WHERE PotbConfFabBomOrKit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconffabbomorkit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconffabbomorkit($potbconffabbomorkit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconffabbomorkit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFABBOMORKIT, $potbconffabbomorkit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAllocEpoEr column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfallocepoer('fooValue');   // WHERE PotbConfAllocEpoEr = 'fooValue'
     * $query->filterByPotbconfallocepoer('%fooValue%', Criteria::LIKE); // WHERE PotbConfAllocEpoEr LIKE '%fooValue%'
     * $query->filterByPotbconfallocepoer(['foo', 'bar']); // WHERE PotbConfAllocEpoEr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfallocepoer The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfallocepoer($potbconfallocepoer = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfallocepoer)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFALLOCEPOER, $potbconfallocepoer, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfFabPrealloc column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconffabprealloc('fooValue');   // WHERE PotbConfFabPrealloc = 'fooValue'
     * $query->filterByPotbconffabprealloc('%fooValue%', Criteria::LIKE); // WHERE PotbConfFabPrealloc LIKE '%fooValue%'
     * $query->filterByPotbconffabprealloc(['foo', 'bar']); // WHERE PotbConfFabPrealloc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconffabprealloc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconffabprealloc($potbconffabprealloc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconffabprealloc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFABPREALLOC, $potbconffabprealloc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfForceFabEpo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfforcefabepo('fooValue');   // WHERE PotbConfForceFabEpo = 'fooValue'
     * $query->filterByPotbconfforcefabepo('%fooValue%', Criteria::LIKE); // WHERE PotbConfForceFabEpo LIKE '%fooValue%'
     * $query->filterByPotbconfforcefabepo(['foo', 'bar']); // WHERE PotbConfForceFabEpo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfforcefabepo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfforcefabepo($potbconfforcefabepo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfforcefabepo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFFORCEFABEPO, $potbconfforcefabepo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPreviewCompList column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpreviewcomplist('fooValue');   // WHERE PotbConfPreviewCompList = 'fooValue'
     * $query->filterByPotbconfpreviewcomplist('%fooValue%', Criteria::LIKE); // WHERE PotbConfPreviewCompList LIKE '%fooValue%'
     * $query->filterByPotbconfpreviewcomplist(['foo', 'bar']); // WHERE PotbConfPreviewCompList IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfpreviewcomplist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpreviewcomplist($potbconfpreviewcomplist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfpreviewcomplist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPREVIEWCOMPLIST, $potbconfpreviewcomplist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfNegCompUsage column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfnegcompusage('fooValue');   // WHERE PotbConfNegCompUsage = 'fooValue'
     * $query->filterByPotbconfnegcompusage('%fooValue%', Criteria::LIKE); // WHERE PotbConfNegCompUsage LIKE '%fooValue%'
     * $query->filterByPotbconfnegcompusage(['foo', 'bar']); // WHERE PotbConfNegCompUsage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfnegcompusage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfnegcompusage($potbconfnegcompusage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfnegcompusage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFNEGCOMPUSAGE, $potbconfnegcompusage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfAutoSelectComp column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfautoselectcomp('fooValue');   // WHERE PotbConfAutoSelectComp = 'fooValue'
     * $query->filterByPotbconfautoselectcomp('%fooValue%', Criteria::LIKE); // WHERE PotbConfAutoSelectComp LIKE '%fooValue%'
     * $query->filterByPotbconfautoselectcomp(['foo', 'bar']); // WHERE PotbConfAutoSelectComp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfautoselectcomp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfautoselectcomp($potbconfautoselectcomp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfautoselectcomp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFAUTOSELECTCOMP, $potbconfautoselectcomp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfBinFromVendor column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfbinfromvendor('fooValue');   // WHERE PotbConfBinFromVendor = 'fooValue'
     * $query->filterByPotbconfbinfromvendor('%fooValue%', Criteria::LIKE); // WHERE PotbConfBinFromVendor LIKE '%fooValue%'
     * $query->filterByPotbconfbinfromvendor(['foo', 'bar']); // WHERE PotbConfBinFromVendor IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfbinfromvendor The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfbinfromvendor($potbconfbinfromvendor = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfbinfromvendor)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFBINFROMVENDOR, $potbconfbinfromvendor, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfDfltStckCd column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfdfltstckcd('fooValue');   // WHERE PotbConfDfltStckCd = 'fooValue'
     * $query->filterByPotbconfdfltstckcd('%fooValue%', Criteria::LIKE); // WHERE PotbConfDfltStckCd LIKE '%fooValue%'
     * $query->filterByPotbconfdfltstckcd(['foo', 'bar']); // WHERE PotbConfDfltStckCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfdfltstckcd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfdfltstckcd($potbconfdfltstckcd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfdfltstckcd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFDFLTSTCKCD, $potbconfdfltstckcd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUseRemain column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfuseremain('fooValue');   // WHERE PotbConfUseRemain = 'fooValue'
     * $query->filterByPotbconfuseremain('%fooValue%', Criteria::LIKE); // WHERE PotbConfUseRemain LIKE '%fooValue%'
     * $query->filterByPotbconfuseremain(['foo', 'bar']); // WHERE PotbConfUseRemain IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfuseremain The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfuseremain($potbconfuseremain = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfuseremain)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSEREMAIN, $potbconfuseremain, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfSameCompCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfsamecompcost('fooValue');   // WHERE PotbConfSameCompCost = 'fooValue'
     * $query->filterByPotbconfsamecompcost('%fooValue%', Criteria::LIKE); // WHERE PotbConfSameCompCost LIKE '%fooValue%'
     * $query->filterByPotbconfsamecompcost(['foo', 'bar']); // WHERE PotbConfSameCompCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfsamecompcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfsamecompcost($potbconfsamecompcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfsamecompcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFSAMECOMPCOST, $potbconfsamecompcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfPassCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfpasscode('fooValue');   // WHERE PotbConfPassCode = 'fooValue'
     * $query->filterByPotbconfpasscode('%fooValue%', Criteria::LIKE); // WHERE PotbConfPassCode LIKE '%fooValue%'
     * $query->filterByPotbconfpasscode(['foo', 'bar']); // WHERE PotbConfPassCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfpasscode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfpasscode($potbconfpasscode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfpasscode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFPASSCODE, $potbconfpasscode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfUseLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfuselandcost('fooValue');   // WHERE PotbConfUseLandCost = 'fooValue'
     * $query->filterByPotbconfuselandcost('%fooValue%', Criteria::LIKE); // WHERE PotbConfUseLandCost LIKE '%fooValue%'
     * $query->filterByPotbconfuselandcost(['foo', 'bar']); // WHERE PotbConfUseLandCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfuselandcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfuselandcost($potbconfuselandcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfuselandcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFUSELANDCOST, $potbconfuselandcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfBaseLandAmtQty column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfbaselandamtqty('fooValue');   // WHERE PotbConfBaseLandAmtQty = 'fooValue'
     * $query->filterByPotbconfbaselandamtqty('%fooValue%', Criteria::LIKE); // WHERE PotbConfBaseLandAmtQty LIKE '%fooValue%'
     * $query->filterByPotbconfbaselandamtqty(['foo', 'bar']); // WHERE PotbConfBaseLandAmtQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfbaselandamtqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfbaselandamtqty($potbconfbaselandamtqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfbaselandamtqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFBASELANDAMTQTY, $potbconfbaselandamtqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfWarnLandInEr column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfwarnlandiner('fooValue');   // WHERE PotbConfWarnLandInEr = 'fooValue'
     * $query->filterByPotbconfwarnlandiner('%fooValue%', Criteria::LIKE); // WHERE PotbConfWarnLandInEr LIKE '%fooValue%'
     * $query->filterByPotbconfwarnlandiner(['foo', 'bar']); // WHERE PotbConfWarnLandInEr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfwarnlandiner The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfwarnlandiner($potbconfwarnlandiner = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfwarnlandiner)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFWARNLANDINER, $potbconfwarnlandiner, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfLandAmtMultWght column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconflandamtmultwght('fooValue');   // WHERE PotbConfLandAmtMultWght = 'fooValue'
     * $query->filterByPotbconflandamtmultwght('%fooValue%', Criteria::LIKE); // WHERE PotbConfLandAmtMultWght LIKE '%fooValue%'
     * $query->filterByPotbconflandamtmultwght(['foo', 'bar']); // WHERE PotbConfLandAmtMultWght IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconflandamtmultwght The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconflandamtmultwght($potbconflandamtmultwght = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconflandamtmultwght)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFLANDAMTMULTWGHT, $potbconflandamtmultwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfLandErEdit column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconflanderedit('fooValue');   // WHERE PotbConfLandErEdit = 'fooValue'
     * $query->filterByPotbconflanderedit('%fooValue%', Criteria::LIKE); // WHERE PotbConfLandErEdit LIKE '%fooValue%'
     * $query->filterByPotbconflanderedit(['foo', 'bar']); // WHERE PotbConfLandErEdit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconflanderedit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconflanderedit($potbconflanderedit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconflanderedit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFLANDEREDIT, $potbconflanderedit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfHistCmplFab column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconfhistcmplfab('fooValue');   // WHERE PotbConfHistCmplFab = 'fooValue'
     * $query->filterByPotbconfhistcmplfab('%fooValue%', Criteria::LIKE); // WHERE PotbConfHistCmplFab LIKE '%fooValue%'
     * $query->filterByPotbconfhistcmplfab(['foo', 'bar']); // WHERE PotbConfHistCmplFab IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconfhistcmplfab The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconfhistcmplfab($potbconfhistcmplfab = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconfhistcmplfab)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFHISTCMPLFAB, $potbconfhistcmplfab, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbConfLandGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbconflandglacct('fooValue');   // WHERE PotbConfLandGlAcct = 'fooValue'
     * $query->filterByPotbconflandglacct('%fooValue%', Criteria::LIKE); // WHERE PotbConfLandGlAcct LIKE '%fooValue%'
     * $query->filterByPotbconflandglacct(['foo', 'bar']); // WHERE PotbConfLandGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbconflandglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbconflandglacct($potbconflandglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbconflandglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFLANDGLACCT, $potbconflandglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbLandMpfGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotblandmpfglacct('fooValue');   // WHERE PotbLandMpfGlAcct = 'fooValue'
     * $query->filterByPotblandmpfglacct('%fooValue%', Criteria::LIKE); // WHERE PotbLandMpfGlAcct LIKE '%fooValue%'
     * $query->filterByPotblandmpfglacct(['foo', 'bar']); // WHERE PotbLandMpfGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potblandmpfglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotblandmpfglacct($potblandmpfglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potblandmpfglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBLANDMPFGLACCT, $potblandmpfglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbLandHmfGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotblandhmfglacct('fooValue');   // WHERE PotbLandHmfGlAcct = 'fooValue'
     * $query->filterByPotblandhmfglacct('%fooValue%', Criteria::LIKE); // WHERE PotbLandHmfGlAcct LIKE '%fooValue%'
     * $query->filterByPotblandhmfglacct(['foo', 'bar']); // WHERE PotbLandHmfGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potblandhmfglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotblandhmfglacct($potblandhmfglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potblandhmfglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBLANDHMFGLACCT, $potblandhmfglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbLandDsetGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotblanddsetglacct('fooValue');   // WHERE PotbLandDsetGlAcct = 'fooValue'
     * $query->filterByPotblanddsetglacct('%fooValue%', Criteria::LIKE); // WHERE PotbLandDsetGlAcct LIKE '%fooValue%'
     * $query->filterByPotblanddsetglacct(['foo', 'bar']); // WHERE PotbLandDsetGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potblanddsetglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotblanddsetglacct($potblanddsetglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potblanddsetglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPoTableMap::COL_POTBLANDDSETGLACCT, $potblanddsetglacct, $comparison);

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

        $this->addUsingAlias(ConfigPoTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigPoTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigPoTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigPo $configPo Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($configPo = null)
    {
        if ($configPo) {
            $this->addUsingAlias(ConfigPoTableMap::COL_POTBCONFKEY, $configPo->getPotbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigPoTableMap::clearInstancePool();
            ConfigPoTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigPoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigPoTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigPoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
