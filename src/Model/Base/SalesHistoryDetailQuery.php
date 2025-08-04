<?php

namespace Base;

use \SalesHistoryDetail as ChildSalesHistoryDetail;
use \SalesHistoryDetailQuery as ChildSalesHistoryDetailQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_det_hist` table.
 *
 * @method     ChildSalesHistoryDetailQuery orderByOehhnbr($order = Criteria::ASC) Order by the OehhNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhline($order = Criteria::ASC) Order by the OedhLine column
 * @method     ChildSalesHistoryDetailQuery orderByOedhyear($order = Criteria::ASC) Order by the OedhYear column
 * @method     ChildSalesHistoryDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhdesc($order = Criteria::ASC) Order by the OedhDesc column
 * @method     ChildSalesHistoryDetailQuery orderByOedhdesc2($order = Criteria::ASC) Order by the OedhDesc2 column
 * @method     ChildSalesHistoryDetailQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSalesHistoryDetailQuery orderByOedhrqstdate($order = Criteria::ASC) Order by the OedhRqstDate column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcancdate($order = Criteria::ASC) Order by the OedhCancDate column
 * @method     ChildSalesHistoryDetailQuery orderByOedhshipdate($order = Criteria::ASC) Order by the OedhShipDate column
 * @method     ChildSalesHistoryDetailQuery orderByOedhspecordr($order = Criteria::ASC) Order by the OedhSpecOrdr column
 * @method     ChildSalesHistoryDetailQuery orderByArtbctaxcode($order = Criteria::ASC) Order by the ArtbCtaxCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhqtyord($order = Criteria::ASC) Order by the OedhQtyOrd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhqtyship($order = Criteria::ASC) Order by the OedhQtyShip column
 * @method     ChildSalesHistoryDetailQuery orderByOedhqtyshiptot($order = Criteria::ASC) Order by the OedhQtyShipTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhqtybord($order = Criteria::ASC) Order by the OedhQtyBord column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpric($order = Criteria::ASC) Order by the OedhPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcost($order = Criteria::ASC) Order by the OedhCost column
 * @method     ChildSalesHistoryDetailQuery orderByOedhtaxpcttot($order = Criteria::ASC) Order by the OedhTaxPctTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhprictot($order = Criteria::ASC) Order by the OedhPricTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcosttot($order = Criteria::ASC) Order by the OedhCostTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhspcommpct($order = Criteria::ASC) Order by the OedhSpCommPct column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbrkncaseqty($order = Criteria::ASC) Order by the OedhBrknCaseQty column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbin($order = Criteria::ASC) Order by the OedhBin column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpersonalcd($order = Criteria::ASC) Order by the OedhPersonalCd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacdisc1($order = Criteria::ASC) Order by the OedhAcDisc1 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacdisc2($order = Criteria::ASC) Order by the OedhAcDisc2 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacdisc3($order = Criteria::ASC) Order by the OedhAcDisc3 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacdisc4($order = Criteria::ASC) Order by the OedhAcDisc4 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlmwipnbr($order = Criteria::ASC) Order by the OedhLmWipNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcorepric($order = Criteria::ASC) Order by the OedhCorePric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhasstcode($order = Criteria::ASC) Order by the OedhAsstCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhasstqty($order = Criteria::ASC) Order by the OedhAsstQty column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlistpric($order = Criteria::ASC) Order by the OedhListPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhstancost($order = Criteria::ASC) Order by the OedhStanCost column
 * @method     ChildSalesHistoryDetailQuery orderByOedhvenditemjob($order = Criteria::ASC) Order by the OedhVendItemJob column
 * @method     ChildSalesHistoryDetailQuery orderByOedhnsvendid($order = Criteria::ASC) Order by the OedhNsVendId column
 * @method     ChildSalesHistoryDetailQuery orderByOedhnsitemgrup($order = Criteria::ASC) Order by the OedhNsItemGrup column
 * @method     ChildSalesHistoryDetailQuery orderByOedhusecode($order = Criteria::ASC) Order by the OedhUseCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhnsshipfromid($order = Criteria::ASC) Order by the OedhNsShipFromId column
 * @method     ChildSalesHistoryDetailQuery orderByOedhasstovrd($order = Criteria::ASC) Order by the OedhAsstOvrd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpricovrd($order = Criteria::ASC) Order by the OedhPricOvrd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpickflag($order = Criteria::ASC) Order by the OedhPickFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode1($order = Criteria::ASC) Order by the OedhMstrTaxCode1 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct1($order = Criteria::ASC) Order by the OedhMstrTaxPct1 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode2($order = Criteria::ASC) Order by the OedhMstrTaxCode2 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct2($order = Criteria::ASC) Order by the OedhMstrTaxPct2 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode3($order = Criteria::ASC) Order by the OedhMstrTaxCode3 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct3($order = Criteria::ASC) Order by the OedhMstrTaxPct3 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode4($order = Criteria::ASC) Order by the OedhMstrTaxCode4 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct4($order = Criteria::ASC) Order by the OedhMstrTaxPct4 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode5($order = Criteria::ASC) Order by the OedhMstrTaxCode5 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct5($order = Criteria::ASC) Order by the OedhMstrTaxPct5 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode6($order = Criteria::ASC) Order by the OedhMstrTaxCode6 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct6($order = Criteria::ASC) Order by the OedhMstrTaxPct6 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode7($order = Criteria::ASC) Order by the OedhMstrTaxCode7 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct7($order = Criteria::ASC) Order by the OedhMstrTaxPct7 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode8($order = Criteria::ASC) Order by the OedhMstrTaxCode8 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct8($order = Criteria::ASC) Order by the OedhMstrTaxPct8 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxcode9($order = Criteria::ASC) Order by the OedhMstrTaxCode9 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmstrtaxpct9($order = Criteria::ASC) Order by the OedhMstrTaxPct9 column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbinarea($order = Criteria::ASC) Order by the OedhBinArea column
 * @method     ChildSalesHistoryDetailQuery orderByOedhsplitline($order = Criteria::ASC) Order by the OedhSplitLine column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlostreas($order = Criteria::ASC) Order by the OedhLostReas column
 * @method     ChildSalesHistoryDetailQuery orderByOedhorigline($order = Criteria::ASC) Order by the OedhOrigLine column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcustcrssref($order = Criteria::ASC) Order by the OedhCustCrssRef column
 * @method     ChildSalesHistoryDetailQuery orderByOedhuom($order = Criteria::ASC) Order by the OedhUom column
 * @method     ChildSalesHistoryDetailQuery orderByOedhshipflag($order = Criteria::ASC) Order by the OedhShipFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhkitflag($order = Criteria::ASC) Order by the OedhKitFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhkititemnbr($order = Criteria::ASC) Order by the OedhKitItemNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbfcost($order = Criteria::ASC) Order by the OedhBfCost column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbfmsgcode($order = Criteria::ASC) Order by the OedhBfMsgCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbfcosttot($order = Criteria::ASC) Order by the OedhBfCostTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlmbulkpric($order = Criteria::ASC) Order by the OedhLmBulkPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlmmtrxpkgpric($order = Criteria::ASC) Order by the OedhLmMtrxPkgPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlmmtrxbulkpric($order = Criteria::ASC) Order by the OedhLmMtrxBulkPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlmcontractpric($order = Criteria::ASC) Order by the OedhLmContractPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwghttot($order = Criteria::ASC) Order by the OedhWghtTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhordras($order = Criteria::ASC) Order by the OedhOrdrAs column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpodetlinenbr($order = Criteria::ASC) Order by the OedhPoDetLineNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhqtytoship($order = Criteria::ASC) Order by the OedhQtyToShip column
 * @method     ChildSalesHistoryDetailQuery orderByOedhponbr($order = Criteria::ASC) Order by the OedhPoNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhporef($order = Criteria::ASC) Order by the OedhPoRef column
 * @method     ChildSalesHistoryDetailQuery orderByOedhfrtin($order = Criteria::ASC) Order by the OedhFrtIn column
 * @method     ChildSalesHistoryDetailQuery orderByOedhfrtinentered($order = Criteria::ASC) Order by the OedhFrtInEntered column
 * @method     ChildSalesHistoryDetailQuery orderByOedhprodcmplt($order = Criteria::ASC) Order by the OedhProdCmplt column
 * @method     ChildSalesHistoryDetailQuery orderByOedherflag($order = Criteria::ASC) Order by the OedhErFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhorigitem($order = Criteria::ASC) Order by the OedhOrigItem column
 * @method     ChildSalesHistoryDetailQuery orderByOedhsubflag($order = Criteria::ASC) Order by the OedhSubFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhediincomingseq($order = Criteria::ASC) Order by the OedhEdiIncomingSeq column
 * @method     ChildSalesHistoryDetailQuery orderByOedhspordpoline($order = Criteria::ASC) Order by the OedhSpordPoLine column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcatlgid($order = Criteria::ASC) Order by the OedhCatlgId column
 * @method     ChildSalesHistoryDetailQuery orderByOedhdesigncd($order = Criteria::ASC) Order by the OedhDesignCd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhdiscpct($order = Criteria::ASC) Order by the OedhDiscPct column
 * @method     ChildSalesHistoryDetailQuery orderByOedhtaxamt($order = Criteria::ASC) Order by the OedhTaxAmt column
 * @method     ChildSalesHistoryDetailQuery orderByOedhxusage($order = Criteria::ASC) Order by the OedhXUsage column
 * @method     ChildSalesHistoryDetailQuery orderByOedhrqtslock($order = Criteria::ASC) Order by the OedhRqtsLock column
 * @method     ChildSalesHistoryDetailQuery orderByOedhfreshfrozen($order = Criteria::ASC) Order by the OedhFreshFrozen column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcoreflag($order = Criteria::ASC) Order by the OedhCoreFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhnssalesacct($order = Criteria::ASC) Order by the OedhNsSalesAcct column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcertreqd($order = Criteria::ASC) Order by the OedhCertReqd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhaddonsales($order = Criteria::ASC) Order by the OedhAddOnSales column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbordflag($order = Criteria::ASC) Order by the OedhBordFlag column
 * @method     ChildSalesHistoryDetailQuery orderByOedhtempgrove($order = Criteria::ASC) Order by the OedhTempGrove column
 * @method     ChildSalesHistoryDetailQuery orderByOedhgrovedisc($order = Criteria::ASC) Order by the OedhGroveDisc column
 * @method     ChildSalesHistoryDetailQuery orderByOedhoffinvc($order = Criteria::ASC) Order by the OedhOffInvc column
 * @method     ChildSalesHistoryDetailQuery orderByInititemgrup($order = Criteria::ASC) Order by the InitItemGrup column
 * @method     ChildSalesHistoryDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacct($order = Criteria::ASC) Order by the OedhAcct column
 * @method     ChildSalesHistoryDetailQuery orderByOedhloadtot($order = Criteria::ASC) Order by the OedhLoadTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpickedqty($order = Criteria::ASC) Order by the OedhPickedQty column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwiorigqty($order = Criteria::ASC) Order by the OedhWiOrigQty column
 * @method     ChildSalesHistoryDetailQuery orderByOedhmargintot($order = Criteria::ASC) Order by the OedhMarginTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcorecost($order = Criteria::ASC) Order by the OedhCoreCost column
 * @method     ChildSalesHistoryDetailQuery orderByOedhitemref($order = Criteria::ASC) Order by the OedhItemRef column
 * @method     ChildSalesHistoryDetailQuery orderByOedhsac02returncode($order = Criteria::ASC) Order by the OedhSac02ReturnCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwgtaxcode($order = Criteria::ASC) Order by the OedhWgTaxCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwgprice($order = Criteria::ASC) Order by the OedhWgPrice column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwgtot($order = Criteria::ASC) Order by the OedhWgTot column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcntrqty($order = Criteria::ASC) Order by the OedhCntrQty column
 * @method     ChildSalesHistoryDetailQuery orderByOedhconfirmcode($order = Criteria::ASC) Order by the OedhConfirmCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhpicked($order = Criteria::ASC) Order by the OedhPicked column
 * @method     ChildSalesHistoryDetailQuery orderByOedhorigrqstdate($order = Criteria::ASC) Order by the OedhOrigRqstDate column
 * @method     ChildSalesHistoryDetailQuery orderByOedhfablock($order = Criteria::ASC) Order by the OedhFabLock column
 * @method     ChildSalesHistoryDetailQuery orderByOedhlabelprinted($order = Criteria::ASC) Order by the OedhLabelPrinted column
 * @method     ChildSalesHistoryDetailQuery orderByOedhquoteid($order = Criteria::ASC) Order by the OedhQuoteId column
 * @method     ChildSalesHistoryDetailQuery orderByOedhinvprinted($order = Criteria::ASC) Order by the OedhInvPrinted column
 * @method     ChildSalesHistoryDetailQuery orderByOedhstockcheck($order = Criteria::ASC) Order by the OedhStockCheck column
 * @method     ChildSalesHistoryDetailQuery orderByOedhshouldwesplit($order = Criteria::ASC) Order by the OedhShouldWeSplit column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcofcreqd($order = Criteria::ASC) Order by the OedhCofcReqd column
 * @method     ChildSalesHistoryDetailQuery orderByOedhackcode($order = Criteria::ASC) Order by the OedhAckCode column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwibordnbr($order = Criteria::ASC) Order by the OedhWiBordNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcerthistordr($order = Criteria::ASC) Order by the OedhCertHistOrdr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhcerthistline($order = Criteria::ASC) Order by the OedhCertHistLine column
 * @method     ChildSalesHistoryDetailQuery orderByOedhordrdasitemid($order = Criteria::ASC) Order by the OedhOrdrdAsItemId column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwibatch1nbr($order = Criteria::ASC) Order by the OedhWiBatch1Nbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwibatch1qty($order = Criteria::ASC) Order by the OedhWiBatch1Qty column
 * @method     ChildSalesHistoryDetailQuery orderByOedhwibatch1stat($order = Criteria::ASC) Order by the OedhWiBatch1Stat column
 * @method     ChildSalesHistoryDetailQuery orderByOedhrganbr($order = Criteria::ASC) Order by the OedhRgaNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhorigpric($order = Criteria::ASC) Order by the OedhOrigPric column
 * @method     ChildSalesHistoryDetailQuery orderByOedhreflinenbr($order = Criteria::ASC) Order by the OedhRefLineNbr column
 * @method     ChildSalesHistoryDetailQuery orderByOedhbinlocn($order = Criteria::ASC) Order by the OedhBinLocn column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacsuplywhse($order = Criteria::ASC) Order by the OedhAcSuplyWhse column
 * @method     ChildSalesHistoryDetailQuery orderByOedhacpricdate($order = Criteria::ASC) Order by the OedhAcPricDate column
 * @method     ChildSalesHistoryDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesHistoryDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesHistoryDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesHistoryDetailQuery groupByOehhnbr() Group by the OehhNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhline() Group by the OedhLine column
 * @method     ChildSalesHistoryDetailQuery groupByOedhyear() Group by the OedhYear column
 * @method     ChildSalesHistoryDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhdesc() Group by the OedhDesc column
 * @method     ChildSalesHistoryDetailQuery groupByOedhdesc2() Group by the OedhDesc2 column
 * @method     ChildSalesHistoryDetailQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSalesHistoryDetailQuery groupByOedhrqstdate() Group by the OedhRqstDate column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcancdate() Group by the OedhCancDate column
 * @method     ChildSalesHistoryDetailQuery groupByOedhshipdate() Group by the OedhShipDate column
 * @method     ChildSalesHistoryDetailQuery groupByOedhspecordr() Group by the OedhSpecOrdr column
 * @method     ChildSalesHistoryDetailQuery groupByArtbctaxcode() Group by the ArtbCtaxCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhqtyord() Group by the OedhQtyOrd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhqtyship() Group by the OedhQtyShip column
 * @method     ChildSalesHistoryDetailQuery groupByOedhqtyshiptot() Group by the OedhQtyShipTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhqtybord() Group by the OedhQtyBord column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpric() Group by the OedhPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcost() Group by the OedhCost column
 * @method     ChildSalesHistoryDetailQuery groupByOedhtaxpcttot() Group by the OedhTaxPctTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhprictot() Group by the OedhPricTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcosttot() Group by the OedhCostTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhspcommpct() Group by the OedhSpCommPct column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbrkncaseqty() Group by the OedhBrknCaseQty column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbin() Group by the OedhBin column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpersonalcd() Group by the OedhPersonalCd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacdisc1() Group by the OedhAcDisc1 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacdisc2() Group by the OedhAcDisc2 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacdisc3() Group by the OedhAcDisc3 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacdisc4() Group by the OedhAcDisc4 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlmwipnbr() Group by the OedhLmWipNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcorepric() Group by the OedhCorePric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhasstcode() Group by the OedhAsstCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhasstqty() Group by the OedhAsstQty column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlistpric() Group by the OedhListPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhstancost() Group by the OedhStanCost column
 * @method     ChildSalesHistoryDetailQuery groupByOedhvenditemjob() Group by the OedhVendItemJob column
 * @method     ChildSalesHistoryDetailQuery groupByOedhnsvendid() Group by the OedhNsVendId column
 * @method     ChildSalesHistoryDetailQuery groupByOedhnsitemgrup() Group by the OedhNsItemGrup column
 * @method     ChildSalesHistoryDetailQuery groupByOedhusecode() Group by the OedhUseCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhnsshipfromid() Group by the OedhNsShipFromId column
 * @method     ChildSalesHistoryDetailQuery groupByOedhasstovrd() Group by the OedhAsstOvrd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpricovrd() Group by the OedhPricOvrd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpickflag() Group by the OedhPickFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode1() Group by the OedhMstrTaxCode1 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct1() Group by the OedhMstrTaxPct1 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode2() Group by the OedhMstrTaxCode2 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct2() Group by the OedhMstrTaxPct2 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode3() Group by the OedhMstrTaxCode3 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct3() Group by the OedhMstrTaxPct3 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode4() Group by the OedhMstrTaxCode4 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct4() Group by the OedhMstrTaxPct4 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode5() Group by the OedhMstrTaxCode5 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct5() Group by the OedhMstrTaxPct5 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode6() Group by the OedhMstrTaxCode6 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct6() Group by the OedhMstrTaxPct6 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode7() Group by the OedhMstrTaxCode7 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct7() Group by the OedhMstrTaxPct7 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode8() Group by the OedhMstrTaxCode8 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct8() Group by the OedhMstrTaxPct8 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxcode9() Group by the OedhMstrTaxCode9 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmstrtaxpct9() Group by the OedhMstrTaxPct9 column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbinarea() Group by the OedhBinArea column
 * @method     ChildSalesHistoryDetailQuery groupByOedhsplitline() Group by the OedhSplitLine column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlostreas() Group by the OedhLostReas column
 * @method     ChildSalesHistoryDetailQuery groupByOedhorigline() Group by the OedhOrigLine column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcustcrssref() Group by the OedhCustCrssRef column
 * @method     ChildSalesHistoryDetailQuery groupByOedhuom() Group by the OedhUom column
 * @method     ChildSalesHistoryDetailQuery groupByOedhshipflag() Group by the OedhShipFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhkitflag() Group by the OedhKitFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhkititemnbr() Group by the OedhKitItemNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbfcost() Group by the OedhBfCost column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbfmsgcode() Group by the OedhBfMsgCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbfcosttot() Group by the OedhBfCostTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlmbulkpric() Group by the OedhLmBulkPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlmmtrxpkgpric() Group by the OedhLmMtrxPkgPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlmmtrxbulkpric() Group by the OedhLmMtrxBulkPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlmcontractpric() Group by the OedhLmContractPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwghttot() Group by the OedhWghtTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhordras() Group by the OedhOrdrAs column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpodetlinenbr() Group by the OedhPoDetLineNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhqtytoship() Group by the OedhQtyToShip column
 * @method     ChildSalesHistoryDetailQuery groupByOedhponbr() Group by the OedhPoNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhporef() Group by the OedhPoRef column
 * @method     ChildSalesHistoryDetailQuery groupByOedhfrtin() Group by the OedhFrtIn column
 * @method     ChildSalesHistoryDetailQuery groupByOedhfrtinentered() Group by the OedhFrtInEntered column
 * @method     ChildSalesHistoryDetailQuery groupByOedhprodcmplt() Group by the OedhProdCmplt column
 * @method     ChildSalesHistoryDetailQuery groupByOedherflag() Group by the OedhErFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhorigitem() Group by the OedhOrigItem column
 * @method     ChildSalesHistoryDetailQuery groupByOedhsubflag() Group by the OedhSubFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhediincomingseq() Group by the OedhEdiIncomingSeq column
 * @method     ChildSalesHistoryDetailQuery groupByOedhspordpoline() Group by the OedhSpordPoLine column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcatlgid() Group by the OedhCatlgId column
 * @method     ChildSalesHistoryDetailQuery groupByOedhdesigncd() Group by the OedhDesignCd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhdiscpct() Group by the OedhDiscPct column
 * @method     ChildSalesHistoryDetailQuery groupByOedhtaxamt() Group by the OedhTaxAmt column
 * @method     ChildSalesHistoryDetailQuery groupByOedhxusage() Group by the OedhXUsage column
 * @method     ChildSalesHistoryDetailQuery groupByOedhrqtslock() Group by the OedhRqtsLock column
 * @method     ChildSalesHistoryDetailQuery groupByOedhfreshfrozen() Group by the OedhFreshFrozen column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcoreflag() Group by the OedhCoreFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhnssalesacct() Group by the OedhNsSalesAcct column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcertreqd() Group by the OedhCertReqd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhaddonsales() Group by the OedhAddOnSales column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbordflag() Group by the OedhBordFlag column
 * @method     ChildSalesHistoryDetailQuery groupByOedhtempgrove() Group by the OedhTempGrove column
 * @method     ChildSalesHistoryDetailQuery groupByOedhgrovedisc() Group by the OedhGroveDisc column
 * @method     ChildSalesHistoryDetailQuery groupByOedhoffinvc() Group by the OedhOffInvc column
 * @method     ChildSalesHistoryDetailQuery groupByInititemgrup() Group by the InitItemGrup column
 * @method     ChildSalesHistoryDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacct() Group by the OedhAcct column
 * @method     ChildSalesHistoryDetailQuery groupByOedhloadtot() Group by the OedhLoadTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpickedqty() Group by the OedhPickedQty column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwiorigqty() Group by the OedhWiOrigQty column
 * @method     ChildSalesHistoryDetailQuery groupByOedhmargintot() Group by the OedhMarginTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcorecost() Group by the OedhCoreCost column
 * @method     ChildSalesHistoryDetailQuery groupByOedhitemref() Group by the OedhItemRef column
 * @method     ChildSalesHistoryDetailQuery groupByOedhsac02returncode() Group by the OedhSac02ReturnCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwgtaxcode() Group by the OedhWgTaxCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwgprice() Group by the OedhWgPrice column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwgtot() Group by the OedhWgTot column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcntrqty() Group by the OedhCntrQty column
 * @method     ChildSalesHistoryDetailQuery groupByOedhconfirmcode() Group by the OedhConfirmCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhpicked() Group by the OedhPicked column
 * @method     ChildSalesHistoryDetailQuery groupByOedhorigrqstdate() Group by the OedhOrigRqstDate column
 * @method     ChildSalesHistoryDetailQuery groupByOedhfablock() Group by the OedhFabLock column
 * @method     ChildSalesHistoryDetailQuery groupByOedhlabelprinted() Group by the OedhLabelPrinted column
 * @method     ChildSalesHistoryDetailQuery groupByOedhquoteid() Group by the OedhQuoteId column
 * @method     ChildSalesHistoryDetailQuery groupByOedhinvprinted() Group by the OedhInvPrinted column
 * @method     ChildSalesHistoryDetailQuery groupByOedhstockcheck() Group by the OedhStockCheck column
 * @method     ChildSalesHistoryDetailQuery groupByOedhshouldwesplit() Group by the OedhShouldWeSplit column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcofcreqd() Group by the OedhCofcReqd column
 * @method     ChildSalesHistoryDetailQuery groupByOedhackcode() Group by the OedhAckCode column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwibordnbr() Group by the OedhWiBordNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcerthistordr() Group by the OedhCertHistOrdr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhcerthistline() Group by the OedhCertHistLine column
 * @method     ChildSalesHistoryDetailQuery groupByOedhordrdasitemid() Group by the OedhOrdrdAsItemId column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwibatch1nbr() Group by the OedhWiBatch1Nbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwibatch1qty() Group by the OedhWiBatch1Qty column
 * @method     ChildSalesHistoryDetailQuery groupByOedhwibatch1stat() Group by the OedhWiBatch1Stat column
 * @method     ChildSalesHistoryDetailQuery groupByOedhrganbr() Group by the OedhRgaNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhorigpric() Group by the OedhOrigPric column
 * @method     ChildSalesHistoryDetailQuery groupByOedhreflinenbr() Group by the OedhRefLineNbr column
 * @method     ChildSalesHistoryDetailQuery groupByOedhbinlocn() Group by the OedhBinLocn column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacsuplywhse() Group by the OedhAcSuplyWhse column
 * @method     ChildSalesHistoryDetailQuery groupByOedhacpricdate() Group by the OedhAcPricDate column
 * @method     ChildSalesHistoryDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesHistoryDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesHistoryDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesHistoryDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesHistoryDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesHistoryDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesHistoryDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesHistoryDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinSalesHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistory relation
 * @method     ChildSalesHistoryDetailQuery rightJoinSalesHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistory relation
 * @method     ChildSalesHistoryDetailQuery innerJoinSalesHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistory relation
 *
 * @method     ChildSalesHistoryDetailQuery joinWithSalesHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistory relation
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinWithSalesHistory() Adds a LEFT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildSalesHistoryDetailQuery rightJoinWithSalesHistory() Adds a RIGHT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildSalesHistoryDetailQuery innerJoinWithSalesHistory() Adds a INNER JOIN clause and with to the query using the SalesHistory relation
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesHistoryDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinSalesHistoryLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryDetailQuery rightJoinSalesHistoryLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryDetailQuery innerJoinSalesHistoryLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildSalesHistoryDetailQuery joinWithSalesHistoryLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildSalesHistoryDetailQuery leftJoinWithSalesHistoryLotserial() Adds a LEFT JOIN clause and with to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryDetailQuery rightJoinWithSalesHistoryLotserial() Adds a RIGHT JOIN clause and with to the query using the SalesHistoryLotserial relation
 * @method     ChildSalesHistoryDetailQuery innerJoinWithSalesHistoryLotserial() Adds a INNER JOIN clause and with to the query using the SalesHistoryLotserial relation
 *
 * @method     \SalesHistoryQuery|\ItemMasterItemQuery|\SalesHistoryLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesHistoryDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildSalesHistoryDetail matching the query
 * @method     ChildSalesHistoryDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSalesHistoryDetail matching the query, or a new ChildSalesHistoryDetail object populated from the query conditions when no match is found
 *
 * @method     ChildSalesHistoryDetail|null findOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistoryDetail filtered by the OehhNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhline(int $OedhLine) Return the first ChildSalesHistoryDetail filtered by the OedhLine column
 * @method     ChildSalesHistoryDetail|null findOneByOedhyear(string $OedhYear) Return the first ChildSalesHistoryDetail filtered by the OedhYear column
 * @method     ChildSalesHistoryDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesHistoryDetail filtered by the InitItemNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhdesc(string $OedhDesc) Return the first ChildSalesHistoryDetail filtered by the OedhDesc column
 * @method     ChildSalesHistoryDetail|null findOneByOedhdesc2(string $OedhDesc2) Return the first ChildSalesHistoryDetail filtered by the OedhDesc2 column
 * @method     ChildSalesHistoryDetail|null findOneByIntbwhse(string $IntbWhse) Return the first ChildSalesHistoryDetail filtered by the IntbWhse column
 * @method     ChildSalesHistoryDetail|null findOneByOedhrqstdate(string $OedhRqstDate) Return the first ChildSalesHistoryDetail filtered by the OedhRqstDate column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcancdate(string $OedhCancDate) Return the first ChildSalesHistoryDetail filtered by the OedhCancDate column
 * @method     ChildSalesHistoryDetail|null findOneByOedhshipdate(string $OedhShipDate) Return the first ChildSalesHistoryDetail filtered by the OedhShipDate column
 * @method     ChildSalesHistoryDetail|null findOneByOedhspecordr(string $OedhSpecOrdr) Return the first ChildSalesHistoryDetail filtered by the OedhSpecOrdr column
 * @method     ChildSalesHistoryDetail|null findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildSalesHistoryDetail filtered by the ArtbCtaxCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhqtyord(string $OedhQtyOrd) Return the first ChildSalesHistoryDetail filtered by the OedhQtyOrd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhqtyship(string $OedhQtyShip) Return the first ChildSalesHistoryDetail filtered by the OedhQtyShip column
 * @method     ChildSalesHistoryDetail|null findOneByOedhqtyshiptot(string $OedhQtyShipTot) Return the first ChildSalesHistoryDetail filtered by the OedhQtyShipTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhqtybord(string $OedhQtyBord) Return the first ChildSalesHistoryDetail filtered by the OedhQtyBord column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpric(string $OedhPric) Return the first ChildSalesHistoryDetail filtered by the OedhPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcost(string $OedhCost) Return the first ChildSalesHistoryDetail filtered by the OedhCost column
 * @method     ChildSalesHistoryDetail|null findOneByOedhtaxpcttot(string $OedhTaxPctTot) Return the first ChildSalesHistoryDetail filtered by the OedhTaxPctTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhprictot(string $OedhPricTot) Return the first ChildSalesHistoryDetail filtered by the OedhPricTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcosttot(string $OedhCostTot) Return the first ChildSalesHistoryDetail filtered by the OedhCostTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhspcommpct(string $OedhSpCommPct) Return the first ChildSalesHistoryDetail filtered by the OedhSpCommPct column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbrkncaseqty(int $OedhBrknCaseQty) Return the first ChildSalesHistoryDetail filtered by the OedhBrknCaseQty column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbin(string $OedhBin) Return the first ChildSalesHistoryDetail filtered by the OedhBin column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpersonalcd(string $OedhPersonalCd) Return the first ChildSalesHistoryDetail filtered by the OedhPersonalCd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacdisc1(string $OedhAcDisc1) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc1 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacdisc2(string $OedhAcDisc2) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc2 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacdisc3(string $OedhAcDisc3) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc3 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacdisc4(string $OedhAcDisc4) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc4 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlmwipnbr(string $OedhLmWipNbr) Return the first ChildSalesHistoryDetail filtered by the OedhLmWipNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcorepric(string $OedhCorePric) Return the first ChildSalesHistoryDetail filtered by the OedhCorePric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhasstcode(string $OedhAsstCode) Return the first ChildSalesHistoryDetail filtered by the OedhAsstCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhasstqty(string $OedhAsstQty) Return the first ChildSalesHistoryDetail filtered by the OedhAsstQty column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlistpric(string $OedhListPric) Return the first ChildSalesHistoryDetail filtered by the OedhListPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhstancost(string $OedhStanCost) Return the first ChildSalesHistoryDetail filtered by the OedhStanCost column
 * @method     ChildSalesHistoryDetail|null findOneByOedhvenditemjob(string $OedhVendItemJob) Return the first ChildSalesHistoryDetail filtered by the OedhVendItemJob column
 * @method     ChildSalesHistoryDetail|null findOneByOedhnsvendid(string $OedhNsVendId) Return the first ChildSalesHistoryDetail filtered by the OedhNsVendId column
 * @method     ChildSalesHistoryDetail|null findOneByOedhnsitemgrup(string $OedhNsItemGrup) Return the first ChildSalesHistoryDetail filtered by the OedhNsItemGrup column
 * @method     ChildSalesHistoryDetail|null findOneByOedhusecode(string $OedhUseCode) Return the first ChildSalesHistoryDetail filtered by the OedhUseCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhnsshipfromid(string $OedhNsShipFromId) Return the first ChildSalesHistoryDetail filtered by the OedhNsShipFromId column
 * @method     ChildSalesHistoryDetail|null findOneByOedhasstovrd(string $OedhAsstOvrd) Return the first ChildSalesHistoryDetail filtered by the OedhAsstOvrd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpricovrd(string $OedhPricOvrd) Return the first ChildSalesHistoryDetail filtered by the OedhPricOvrd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpickflag(string $OedhPickFlag) Return the first ChildSalesHistoryDetail filtered by the OedhPickFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode1(string $OedhMstrTaxCode1) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode1 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct1(string $OedhMstrTaxPct1) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct1 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode2(string $OedhMstrTaxCode2) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode2 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct2(string $OedhMstrTaxPct2) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct2 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode3(string $OedhMstrTaxCode3) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode3 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct3(string $OedhMstrTaxPct3) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct3 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode4(string $OedhMstrTaxCode4) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode4 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct4(string $OedhMstrTaxPct4) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct4 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode5(string $OedhMstrTaxCode5) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode5 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct5(string $OedhMstrTaxPct5) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct5 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode6(string $OedhMstrTaxCode6) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode6 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct6(string $OedhMstrTaxPct6) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct6 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode7(string $OedhMstrTaxCode7) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode7 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct7(string $OedhMstrTaxPct7) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct7 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode8(string $OedhMstrTaxCode8) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode8 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct8(string $OedhMstrTaxPct8) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct8 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxcode9(string $OedhMstrTaxCode9) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode9 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmstrtaxpct9(string $OedhMstrTaxPct9) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct9 column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbinarea(string $OedhBinArea) Return the first ChildSalesHistoryDetail filtered by the OedhBinArea column
 * @method     ChildSalesHistoryDetail|null findOneByOedhsplitline(string $OedhSplitLine) Return the first ChildSalesHistoryDetail filtered by the OedhSplitLine column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlostreas(string $OedhLostReas) Return the first ChildSalesHistoryDetail filtered by the OedhLostReas column
 * @method     ChildSalesHistoryDetail|null findOneByOedhorigline(int $OedhOrigLine) Return the first ChildSalesHistoryDetail filtered by the OedhOrigLine column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcustcrssref(string $OedhCustCrssRef) Return the first ChildSalesHistoryDetail filtered by the OedhCustCrssRef column
 * @method     ChildSalesHistoryDetail|null findOneByOedhuom(string $OedhUom) Return the first ChildSalesHistoryDetail filtered by the OedhUom column
 * @method     ChildSalesHistoryDetail|null findOneByOedhshipflag(string $OedhShipFlag) Return the first ChildSalesHistoryDetail filtered by the OedhShipFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhkitflag(string $OedhKitFlag) Return the first ChildSalesHistoryDetail filtered by the OedhKitFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhkititemnbr(string $OedhKitItemNbr) Return the first ChildSalesHistoryDetail filtered by the OedhKitItemNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbfcost(string $OedhBfCost) Return the first ChildSalesHistoryDetail filtered by the OedhBfCost column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbfmsgcode(string $OedhBfMsgCode) Return the first ChildSalesHistoryDetail filtered by the OedhBfMsgCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbfcosttot(string $OedhBfCostTot) Return the first ChildSalesHistoryDetail filtered by the OedhBfCostTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlmbulkpric(string $OedhLmBulkPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmBulkPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlmmtrxpkgpric(string $OedhLmMtrxPkgPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmMtrxPkgPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlmmtrxbulkpric(string $OedhLmMtrxBulkPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmMtrxBulkPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlmcontractpric(string $OedhLmContractPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmContractPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwghttot(string $OedhWghtTot) Return the first ChildSalesHistoryDetail filtered by the OedhWghtTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhordras(string $OedhOrdrAs) Return the first ChildSalesHistoryDetail filtered by the OedhOrdrAs column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpodetlinenbr(int $OedhPoDetLineNbr) Return the first ChildSalesHistoryDetail filtered by the OedhPoDetLineNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhqtytoship(string $OedhQtyToShip) Return the first ChildSalesHistoryDetail filtered by the OedhQtyToShip column
 * @method     ChildSalesHistoryDetail|null findOneByOedhponbr(string $OedhPoNbr) Return the first ChildSalesHistoryDetail filtered by the OedhPoNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhporef(string $OedhPoRef) Return the first ChildSalesHistoryDetail filtered by the OedhPoRef column
 * @method     ChildSalesHistoryDetail|null findOneByOedhfrtin(string $OedhFrtIn) Return the first ChildSalesHistoryDetail filtered by the OedhFrtIn column
 * @method     ChildSalesHistoryDetail|null findOneByOedhfrtinentered(string $OedhFrtInEntered) Return the first ChildSalesHistoryDetail filtered by the OedhFrtInEntered column
 * @method     ChildSalesHistoryDetail|null findOneByOedhprodcmplt(string $OedhProdCmplt) Return the first ChildSalesHistoryDetail filtered by the OedhProdCmplt column
 * @method     ChildSalesHistoryDetail|null findOneByOedherflag(string $OedhErFlag) Return the first ChildSalesHistoryDetail filtered by the OedhErFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhorigitem(string $OedhOrigItem) Return the first ChildSalesHistoryDetail filtered by the OedhOrigItem column
 * @method     ChildSalesHistoryDetail|null findOneByOedhsubflag(string $OedhSubFlag) Return the first ChildSalesHistoryDetail filtered by the OedhSubFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhediincomingseq(int $OedhEdiIncomingSeq) Return the first ChildSalesHistoryDetail filtered by the OedhEdiIncomingSeq column
 * @method     ChildSalesHistoryDetail|null findOneByOedhspordpoline(int $OedhSpordPoLine) Return the first ChildSalesHistoryDetail filtered by the OedhSpordPoLine column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcatlgid(string $OedhCatlgId) Return the first ChildSalesHistoryDetail filtered by the OedhCatlgId column
 * @method     ChildSalesHistoryDetail|null findOneByOedhdesigncd(string $OedhDesignCd) Return the first ChildSalesHistoryDetail filtered by the OedhDesignCd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhdiscpct(string $OedhDiscPct) Return the first ChildSalesHistoryDetail filtered by the OedhDiscPct column
 * @method     ChildSalesHistoryDetail|null findOneByOedhtaxamt(string $OedhTaxAmt) Return the first ChildSalesHistoryDetail filtered by the OedhTaxAmt column
 * @method     ChildSalesHistoryDetail|null findOneByOedhxusage(string $OedhXUsage) Return the first ChildSalesHistoryDetail filtered by the OedhXUsage column
 * @method     ChildSalesHistoryDetail|null findOneByOedhrqtslock(string $OedhRqtsLock) Return the first ChildSalesHistoryDetail filtered by the OedhRqtsLock column
 * @method     ChildSalesHistoryDetail|null findOneByOedhfreshfrozen(string $OedhFreshFrozen) Return the first ChildSalesHistoryDetail filtered by the OedhFreshFrozen column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcoreflag(string $OedhCoreFlag) Return the first ChildSalesHistoryDetail filtered by the OedhCoreFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhnssalesacct(string $OedhNsSalesAcct) Return the first ChildSalesHistoryDetail filtered by the OedhNsSalesAcct column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcertreqd(string $OedhCertReqd) Return the first ChildSalesHistoryDetail filtered by the OedhCertReqd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhaddonsales(string $OedhAddOnSales) Return the first ChildSalesHistoryDetail filtered by the OedhAddOnSales column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbordflag(string $OedhBordFlag) Return the first ChildSalesHistoryDetail filtered by the OedhBordFlag column
 * @method     ChildSalesHistoryDetail|null findOneByOedhtempgrove(string $OedhTempGrove) Return the first ChildSalesHistoryDetail filtered by the OedhTempGrove column
 * @method     ChildSalesHistoryDetail|null findOneByOedhgrovedisc(string $OedhGroveDisc) Return the first ChildSalesHistoryDetail filtered by the OedhGroveDisc column
 * @method     ChildSalesHistoryDetail|null findOneByOedhoffinvc(string $OedhOffInvc) Return the first ChildSalesHistoryDetail filtered by the OedhOffInvc column
 * @method     ChildSalesHistoryDetail|null findOneByInititemgrup(string $InitItemGrup) Return the first ChildSalesHistoryDetail filtered by the InitItemGrup column
 * @method     ChildSalesHistoryDetail|null findOneByApvevendid(string $ApveVendId) Return the first ChildSalesHistoryDetail filtered by the ApveVendId column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacct(string $OedhAcct) Return the first ChildSalesHistoryDetail filtered by the OedhAcct column
 * @method     ChildSalesHistoryDetail|null findOneByOedhloadtot(string $OedhLoadTot) Return the first ChildSalesHistoryDetail filtered by the OedhLoadTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpickedqty(string $OedhPickedQty) Return the first ChildSalesHistoryDetail filtered by the OedhPickedQty column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwiorigqty(string $OedhWiOrigQty) Return the first ChildSalesHistoryDetail filtered by the OedhWiOrigQty column
 * @method     ChildSalesHistoryDetail|null findOneByOedhmargintot(string $OedhMarginTot) Return the first ChildSalesHistoryDetail filtered by the OedhMarginTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcorecost(string $OedhCoreCost) Return the first ChildSalesHistoryDetail filtered by the OedhCoreCost column
 * @method     ChildSalesHistoryDetail|null findOneByOedhitemref(string $OedhItemRef) Return the first ChildSalesHistoryDetail filtered by the OedhItemRef column
 * @method     ChildSalesHistoryDetail|null findOneByOedhsac02returncode(string $OedhSac02ReturnCode) Return the first ChildSalesHistoryDetail filtered by the OedhSac02ReturnCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwgtaxcode(string $OedhWgTaxCode) Return the first ChildSalesHistoryDetail filtered by the OedhWgTaxCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwgprice(string $OedhWgPrice) Return the first ChildSalesHistoryDetail filtered by the OedhWgPrice column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwgtot(string $OedhWgTot) Return the first ChildSalesHistoryDetail filtered by the OedhWgTot column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcntrqty(int $OedhCntrQty) Return the first ChildSalesHistoryDetail filtered by the OedhCntrQty column
 * @method     ChildSalesHistoryDetail|null findOneByOedhconfirmcode(string $OedhConfirmCode) Return the first ChildSalesHistoryDetail filtered by the OedhConfirmCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhpicked(string $OedhPicked) Return the first ChildSalesHistoryDetail filtered by the OedhPicked column
 * @method     ChildSalesHistoryDetail|null findOneByOedhorigrqstdate(string $OedhOrigRqstDate) Return the first ChildSalesHistoryDetail filtered by the OedhOrigRqstDate column
 * @method     ChildSalesHistoryDetail|null findOneByOedhfablock(string $OedhFabLock) Return the first ChildSalesHistoryDetail filtered by the OedhFabLock column
 * @method     ChildSalesHistoryDetail|null findOneByOedhlabelprinted(string $OedhLabelPrinted) Return the first ChildSalesHistoryDetail filtered by the OedhLabelPrinted column
 * @method     ChildSalesHistoryDetail|null findOneByOedhquoteid(string $OedhQuoteId) Return the first ChildSalesHistoryDetail filtered by the OedhQuoteId column
 * @method     ChildSalesHistoryDetail|null findOneByOedhinvprinted(string $OedhInvPrinted) Return the first ChildSalesHistoryDetail filtered by the OedhInvPrinted column
 * @method     ChildSalesHistoryDetail|null findOneByOedhstockcheck(string $OedhStockCheck) Return the first ChildSalesHistoryDetail filtered by the OedhStockCheck column
 * @method     ChildSalesHistoryDetail|null findOneByOedhshouldwesplit(string $OedhShouldWeSplit) Return the first ChildSalesHistoryDetail filtered by the OedhShouldWeSplit column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcofcreqd(string $OedhCofcReqd) Return the first ChildSalesHistoryDetail filtered by the OedhCofcReqd column
 * @method     ChildSalesHistoryDetail|null findOneByOedhackcode(string $OedhAckCode) Return the first ChildSalesHistoryDetail filtered by the OedhAckCode column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwibordnbr(string $OedhWiBordNbr) Return the first ChildSalesHistoryDetail filtered by the OedhWiBordNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcerthistordr(string $OedhCertHistOrdr) Return the first ChildSalesHistoryDetail filtered by the OedhCertHistOrdr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhcerthistline(string $OedhCertHistLine) Return the first ChildSalesHistoryDetail filtered by the OedhCertHistLine column
 * @method     ChildSalesHistoryDetail|null findOneByOedhordrdasitemid(string $OedhOrdrdAsItemId) Return the first ChildSalesHistoryDetail filtered by the OedhOrdrdAsItemId column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwibatch1nbr(int $OedhWiBatch1Nbr) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Nbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwibatch1qty(string $OedhWiBatch1Qty) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Qty column
 * @method     ChildSalesHistoryDetail|null findOneByOedhwibatch1stat(string $OedhWiBatch1Stat) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Stat column
 * @method     ChildSalesHistoryDetail|null findOneByOedhrganbr(int $OedhRgaNbr) Return the first ChildSalesHistoryDetail filtered by the OedhRgaNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhorigpric(string $OedhOrigPric) Return the first ChildSalesHistoryDetail filtered by the OedhOrigPric column
 * @method     ChildSalesHistoryDetail|null findOneByOedhreflinenbr(int $OedhRefLineNbr) Return the first ChildSalesHistoryDetail filtered by the OedhRefLineNbr column
 * @method     ChildSalesHistoryDetail|null findOneByOedhbinlocn(string $OedhBinLocn) Return the first ChildSalesHistoryDetail filtered by the OedhBinLocn column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacsuplywhse(string $OedhAcSuplyWhse) Return the first ChildSalesHistoryDetail filtered by the OedhAcSuplyWhse column
 * @method     ChildSalesHistoryDetail|null findOneByOedhacpricdate(string $OedhAcPricDate) Return the first ChildSalesHistoryDetail filtered by the OedhAcPricDate column
 * @method     ChildSalesHistoryDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistoryDetail filtered by the DateUpdtd column
 * @method     ChildSalesHistoryDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistoryDetail filtered by the TimeUpdtd column
 * @method     ChildSalesHistoryDetail|null findOneByDummy(string $dummy) Return the first ChildSalesHistoryDetail filtered by the dummy column
 *
 * @method     ChildSalesHistoryDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildSalesHistoryDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOne(?ConnectionInterface $con = null) Return the first ChildSalesHistoryDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistoryDetail requireOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistoryDetail filtered by the OehhNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhline(int $OedhLine) Return the first ChildSalesHistoryDetail filtered by the OedhLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhyear(string $OedhYear) Return the first ChildSalesHistoryDetail filtered by the OedhYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesHistoryDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhdesc(string $OedhDesc) Return the first ChildSalesHistoryDetail filtered by the OedhDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhdesc2(string $OedhDesc2) Return the first ChildSalesHistoryDetail filtered by the OedhDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByIntbwhse(string $IntbWhse) Return the first ChildSalesHistoryDetail filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhrqstdate(string $OedhRqstDate) Return the first ChildSalesHistoryDetail filtered by the OedhRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcancdate(string $OedhCancDate) Return the first ChildSalesHistoryDetail filtered by the OedhCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhshipdate(string $OedhShipDate) Return the first ChildSalesHistoryDetail filtered by the OedhShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhspecordr(string $OedhSpecOrdr) Return the first ChildSalesHistoryDetail filtered by the OedhSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildSalesHistoryDetail filtered by the ArtbCtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhqtyord(string $OedhQtyOrd) Return the first ChildSalesHistoryDetail filtered by the OedhQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhqtyship(string $OedhQtyShip) Return the first ChildSalesHistoryDetail filtered by the OedhQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhqtyshiptot(string $OedhQtyShipTot) Return the first ChildSalesHistoryDetail filtered by the OedhQtyShipTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhqtybord(string $OedhQtyBord) Return the first ChildSalesHistoryDetail filtered by the OedhQtyBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpric(string $OedhPric) Return the first ChildSalesHistoryDetail filtered by the OedhPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcost(string $OedhCost) Return the first ChildSalesHistoryDetail filtered by the OedhCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhtaxpcttot(string $OedhTaxPctTot) Return the first ChildSalesHistoryDetail filtered by the OedhTaxPctTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhprictot(string $OedhPricTot) Return the first ChildSalesHistoryDetail filtered by the OedhPricTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcosttot(string $OedhCostTot) Return the first ChildSalesHistoryDetail filtered by the OedhCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhspcommpct(string $OedhSpCommPct) Return the first ChildSalesHistoryDetail filtered by the OedhSpCommPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbrkncaseqty(int $OedhBrknCaseQty) Return the first ChildSalesHistoryDetail filtered by the OedhBrknCaseQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbin(string $OedhBin) Return the first ChildSalesHistoryDetail filtered by the OedhBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpersonalcd(string $OedhPersonalCd) Return the first ChildSalesHistoryDetail filtered by the OedhPersonalCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacdisc1(string $OedhAcDisc1) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacdisc2(string $OedhAcDisc2) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacdisc3(string $OedhAcDisc3) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacdisc4(string $OedhAcDisc4) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlmwipnbr(string $OedhLmWipNbr) Return the first ChildSalesHistoryDetail filtered by the OedhLmWipNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcorepric(string $OedhCorePric) Return the first ChildSalesHistoryDetail filtered by the OedhCorePric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhasstcode(string $OedhAsstCode) Return the first ChildSalesHistoryDetail filtered by the OedhAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhasstqty(string $OedhAsstQty) Return the first ChildSalesHistoryDetail filtered by the OedhAsstQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlistpric(string $OedhListPric) Return the first ChildSalesHistoryDetail filtered by the OedhListPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhstancost(string $OedhStanCost) Return the first ChildSalesHistoryDetail filtered by the OedhStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhvenditemjob(string $OedhVendItemJob) Return the first ChildSalesHistoryDetail filtered by the OedhVendItemJob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhnsvendid(string $OedhNsVendId) Return the first ChildSalesHistoryDetail filtered by the OedhNsVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhnsitemgrup(string $OedhNsItemGrup) Return the first ChildSalesHistoryDetail filtered by the OedhNsItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhusecode(string $OedhUseCode) Return the first ChildSalesHistoryDetail filtered by the OedhUseCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhnsshipfromid(string $OedhNsShipFromId) Return the first ChildSalesHistoryDetail filtered by the OedhNsShipFromId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhasstovrd(string $OedhAsstOvrd) Return the first ChildSalesHistoryDetail filtered by the OedhAsstOvrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpricovrd(string $OedhPricOvrd) Return the first ChildSalesHistoryDetail filtered by the OedhPricOvrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpickflag(string $OedhPickFlag) Return the first ChildSalesHistoryDetail filtered by the OedhPickFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode1(string $OedhMstrTaxCode1) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct1(string $OedhMstrTaxPct1) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode2(string $OedhMstrTaxCode2) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct2(string $OedhMstrTaxPct2) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode3(string $OedhMstrTaxCode3) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct3(string $OedhMstrTaxPct3) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode4(string $OedhMstrTaxCode4) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct4(string $OedhMstrTaxPct4) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode5(string $OedhMstrTaxCode5) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct5(string $OedhMstrTaxPct5) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode6(string $OedhMstrTaxCode6) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct6(string $OedhMstrTaxPct6) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode7(string $OedhMstrTaxCode7) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct7(string $OedhMstrTaxPct7) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode8(string $OedhMstrTaxCode8) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct8(string $OedhMstrTaxPct8) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxcode9(string $OedhMstrTaxCode9) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmstrtaxpct9(string $OedhMstrTaxPct9) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbinarea(string $OedhBinArea) Return the first ChildSalesHistoryDetail filtered by the OedhBinArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhsplitline(string $OedhSplitLine) Return the first ChildSalesHistoryDetail filtered by the OedhSplitLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlostreas(string $OedhLostReas) Return the first ChildSalesHistoryDetail filtered by the OedhLostReas column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhorigline(int $OedhOrigLine) Return the first ChildSalesHistoryDetail filtered by the OedhOrigLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcustcrssref(string $OedhCustCrssRef) Return the first ChildSalesHistoryDetail filtered by the OedhCustCrssRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhuom(string $OedhUom) Return the first ChildSalesHistoryDetail filtered by the OedhUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhshipflag(string $OedhShipFlag) Return the first ChildSalesHistoryDetail filtered by the OedhShipFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhkitflag(string $OedhKitFlag) Return the first ChildSalesHistoryDetail filtered by the OedhKitFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhkititemnbr(string $OedhKitItemNbr) Return the first ChildSalesHistoryDetail filtered by the OedhKitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbfcost(string $OedhBfCost) Return the first ChildSalesHistoryDetail filtered by the OedhBfCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbfmsgcode(string $OedhBfMsgCode) Return the first ChildSalesHistoryDetail filtered by the OedhBfMsgCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbfcosttot(string $OedhBfCostTot) Return the first ChildSalesHistoryDetail filtered by the OedhBfCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlmbulkpric(string $OedhLmBulkPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmBulkPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlmmtrxpkgpric(string $OedhLmMtrxPkgPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmMtrxPkgPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlmmtrxbulkpric(string $OedhLmMtrxBulkPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmMtrxBulkPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlmcontractpric(string $OedhLmContractPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmContractPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwghttot(string $OedhWghtTot) Return the first ChildSalesHistoryDetail filtered by the OedhWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhordras(string $OedhOrdrAs) Return the first ChildSalesHistoryDetail filtered by the OedhOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpodetlinenbr(int $OedhPoDetLineNbr) Return the first ChildSalesHistoryDetail filtered by the OedhPoDetLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhqtytoship(string $OedhQtyToShip) Return the first ChildSalesHistoryDetail filtered by the OedhQtyToShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhponbr(string $OedhPoNbr) Return the first ChildSalesHistoryDetail filtered by the OedhPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhporef(string $OedhPoRef) Return the first ChildSalesHistoryDetail filtered by the OedhPoRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhfrtin(string $OedhFrtIn) Return the first ChildSalesHistoryDetail filtered by the OedhFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhfrtinentered(string $OedhFrtInEntered) Return the first ChildSalesHistoryDetail filtered by the OedhFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhprodcmplt(string $OedhProdCmplt) Return the first ChildSalesHistoryDetail filtered by the OedhProdCmplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedherflag(string $OedhErFlag) Return the first ChildSalesHistoryDetail filtered by the OedhErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhorigitem(string $OedhOrigItem) Return the first ChildSalesHistoryDetail filtered by the OedhOrigItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhsubflag(string $OedhSubFlag) Return the first ChildSalesHistoryDetail filtered by the OedhSubFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhediincomingseq(int $OedhEdiIncomingSeq) Return the first ChildSalesHistoryDetail filtered by the OedhEdiIncomingSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhspordpoline(int $OedhSpordPoLine) Return the first ChildSalesHistoryDetail filtered by the OedhSpordPoLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcatlgid(string $OedhCatlgId) Return the first ChildSalesHistoryDetail filtered by the OedhCatlgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhdesigncd(string $OedhDesignCd) Return the first ChildSalesHistoryDetail filtered by the OedhDesignCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhdiscpct(string $OedhDiscPct) Return the first ChildSalesHistoryDetail filtered by the OedhDiscPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhtaxamt(string $OedhTaxAmt) Return the first ChildSalesHistoryDetail filtered by the OedhTaxAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhxusage(string $OedhXUsage) Return the first ChildSalesHistoryDetail filtered by the OedhXUsage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhrqtslock(string $OedhRqtsLock) Return the first ChildSalesHistoryDetail filtered by the OedhRqtsLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhfreshfrozen(string $OedhFreshFrozen) Return the first ChildSalesHistoryDetail filtered by the OedhFreshFrozen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcoreflag(string $OedhCoreFlag) Return the first ChildSalesHistoryDetail filtered by the OedhCoreFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhnssalesacct(string $OedhNsSalesAcct) Return the first ChildSalesHistoryDetail filtered by the OedhNsSalesAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcertreqd(string $OedhCertReqd) Return the first ChildSalesHistoryDetail filtered by the OedhCertReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhaddonsales(string $OedhAddOnSales) Return the first ChildSalesHistoryDetail filtered by the OedhAddOnSales column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbordflag(string $OedhBordFlag) Return the first ChildSalesHistoryDetail filtered by the OedhBordFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhtempgrove(string $OedhTempGrove) Return the first ChildSalesHistoryDetail filtered by the OedhTempGrove column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhgrovedisc(string $OedhGroveDisc) Return the first ChildSalesHistoryDetail filtered by the OedhGroveDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhoffinvc(string $OedhOffInvc) Return the first ChildSalesHistoryDetail filtered by the OedhOffInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByInititemgrup(string $InitItemGrup) Return the first ChildSalesHistoryDetail filtered by the InitItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildSalesHistoryDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacct(string $OedhAcct) Return the first ChildSalesHistoryDetail filtered by the OedhAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhloadtot(string $OedhLoadTot) Return the first ChildSalesHistoryDetail filtered by the OedhLoadTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpickedqty(string $OedhPickedQty) Return the first ChildSalesHistoryDetail filtered by the OedhPickedQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwiorigqty(string $OedhWiOrigQty) Return the first ChildSalesHistoryDetail filtered by the OedhWiOrigQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhmargintot(string $OedhMarginTot) Return the first ChildSalesHistoryDetail filtered by the OedhMarginTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcorecost(string $OedhCoreCost) Return the first ChildSalesHistoryDetail filtered by the OedhCoreCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhitemref(string $OedhItemRef) Return the first ChildSalesHistoryDetail filtered by the OedhItemRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhsac02returncode(string $OedhSac02ReturnCode) Return the first ChildSalesHistoryDetail filtered by the OedhSac02ReturnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwgtaxcode(string $OedhWgTaxCode) Return the first ChildSalesHistoryDetail filtered by the OedhWgTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwgprice(string $OedhWgPrice) Return the first ChildSalesHistoryDetail filtered by the OedhWgPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwgtot(string $OedhWgTot) Return the first ChildSalesHistoryDetail filtered by the OedhWgTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcntrqty(int $OedhCntrQty) Return the first ChildSalesHistoryDetail filtered by the OedhCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhconfirmcode(string $OedhConfirmCode) Return the first ChildSalesHistoryDetail filtered by the OedhConfirmCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhpicked(string $OedhPicked) Return the first ChildSalesHistoryDetail filtered by the OedhPicked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhorigrqstdate(string $OedhOrigRqstDate) Return the first ChildSalesHistoryDetail filtered by the OedhOrigRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhfablock(string $OedhFabLock) Return the first ChildSalesHistoryDetail filtered by the OedhFabLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhlabelprinted(string $OedhLabelPrinted) Return the first ChildSalesHistoryDetail filtered by the OedhLabelPrinted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhquoteid(string $OedhQuoteId) Return the first ChildSalesHistoryDetail filtered by the OedhQuoteId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhinvprinted(string $OedhInvPrinted) Return the first ChildSalesHistoryDetail filtered by the OedhInvPrinted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhstockcheck(string $OedhStockCheck) Return the first ChildSalesHistoryDetail filtered by the OedhStockCheck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhshouldwesplit(string $OedhShouldWeSplit) Return the first ChildSalesHistoryDetail filtered by the OedhShouldWeSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcofcreqd(string $OedhCofcReqd) Return the first ChildSalesHistoryDetail filtered by the OedhCofcReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhackcode(string $OedhAckCode) Return the first ChildSalesHistoryDetail filtered by the OedhAckCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwibordnbr(string $OedhWiBordNbr) Return the first ChildSalesHistoryDetail filtered by the OedhWiBordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcerthistordr(string $OedhCertHistOrdr) Return the first ChildSalesHistoryDetail filtered by the OedhCertHistOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhcerthistline(string $OedhCertHistLine) Return the first ChildSalesHistoryDetail filtered by the OedhCertHistLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhordrdasitemid(string $OedhOrdrdAsItemId) Return the first ChildSalesHistoryDetail filtered by the OedhOrdrdAsItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwibatch1nbr(int $OedhWiBatch1Nbr) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Nbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwibatch1qty(string $OedhWiBatch1Qty) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Qty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhwibatch1stat(string $OedhWiBatch1Stat) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Stat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhrganbr(int $OedhRgaNbr) Return the first ChildSalesHistoryDetail filtered by the OedhRgaNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhorigpric(string $OedhOrigPric) Return the first ChildSalesHistoryDetail filtered by the OedhOrigPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhreflinenbr(int $OedhRefLineNbr) Return the first ChildSalesHistoryDetail filtered by the OedhRefLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhbinlocn(string $OedhBinLocn) Return the first ChildSalesHistoryDetail filtered by the OedhBinLocn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacsuplywhse(string $OedhAcSuplyWhse) Return the first ChildSalesHistoryDetail filtered by the OedhAcSuplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByOedhacpricdate(string $OedhAcPricDate) Return the first ChildSalesHistoryDetail filtered by the OedhAcPricDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistoryDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistoryDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByDummy(string $dummy) Return the first ChildSalesHistoryDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistoryDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildSalesHistoryDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> find(?ConnectionInterface $con = null) Return ChildSalesHistoryDetail objects based on current ModelCriteria
 *
 * @method     ChildSalesHistoryDetail[]|Collection findByOehhnbr(int|array<int> $OehhNbr) Return ChildSalesHistoryDetail objects filtered by the OehhNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOehhnbr(int|array<int> $OehhNbr) Return ChildSalesHistoryDetail objects filtered by the OehhNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhline(int|array<int> $OedhLine) Return ChildSalesHistoryDetail objects filtered by the OedhLine column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhline(int|array<int> $OedhLine) Return ChildSalesHistoryDetail objects filtered by the OedhLine column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhyear(string|array<string> $OedhYear) Return ChildSalesHistoryDetail objects filtered by the OedhYear column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhyear(string|array<string> $OedhYear) Return ChildSalesHistoryDetail objects filtered by the OedhYear column
 * @method     ChildSalesHistoryDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesHistoryDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesHistoryDetail objects filtered by the InitItemNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhdesc(string|array<string> $OedhDesc) Return ChildSalesHistoryDetail objects filtered by the OedhDesc column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhdesc(string|array<string> $OedhDesc) Return ChildSalesHistoryDetail objects filtered by the OedhDesc column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhdesc2(string|array<string> $OedhDesc2) Return ChildSalesHistoryDetail objects filtered by the OedhDesc2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhdesc2(string|array<string> $OedhDesc2) Return ChildSalesHistoryDetail objects filtered by the OedhDesc2 column
 * @method     ChildSalesHistoryDetail[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildSalesHistoryDetail objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByIntbwhse(string|array<string> $IntbWhse) Return ChildSalesHistoryDetail objects filtered by the IntbWhse column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhrqstdate(string|array<string> $OedhRqstDate) Return ChildSalesHistoryDetail objects filtered by the OedhRqstDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhrqstdate(string|array<string> $OedhRqstDate) Return ChildSalesHistoryDetail objects filtered by the OedhRqstDate column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcancdate(string|array<string> $OedhCancDate) Return ChildSalesHistoryDetail objects filtered by the OedhCancDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcancdate(string|array<string> $OedhCancDate) Return ChildSalesHistoryDetail objects filtered by the OedhCancDate column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhshipdate(string|array<string> $OedhShipDate) Return ChildSalesHistoryDetail objects filtered by the OedhShipDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhshipdate(string|array<string> $OedhShipDate) Return ChildSalesHistoryDetail objects filtered by the OedhShipDate column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhspecordr(string|array<string> $OedhSpecOrdr) Return ChildSalesHistoryDetail objects filtered by the OedhSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhspecordr(string|array<string> $OedhSpecOrdr) Return ChildSalesHistoryDetail objects filtered by the OedhSpecOrdr column
 * @method     ChildSalesHistoryDetail[]|Collection findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildSalesHistoryDetail objects filtered by the ArtbCtaxCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildSalesHistoryDetail objects filtered by the ArtbCtaxCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhqtyord(string|array<string> $OedhQtyOrd) Return ChildSalesHistoryDetail objects filtered by the OedhQtyOrd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhqtyord(string|array<string> $OedhQtyOrd) Return ChildSalesHistoryDetail objects filtered by the OedhQtyOrd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhqtyship(string|array<string> $OedhQtyShip) Return ChildSalesHistoryDetail objects filtered by the OedhQtyShip column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhqtyship(string|array<string> $OedhQtyShip) Return ChildSalesHistoryDetail objects filtered by the OedhQtyShip column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhqtyshiptot(string|array<string> $OedhQtyShipTot) Return ChildSalesHistoryDetail objects filtered by the OedhQtyShipTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhqtyshiptot(string|array<string> $OedhQtyShipTot) Return ChildSalesHistoryDetail objects filtered by the OedhQtyShipTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhqtybord(string|array<string> $OedhQtyBord) Return ChildSalesHistoryDetail objects filtered by the OedhQtyBord column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhqtybord(string|array<string> $OedhQtyBord) Return ChildSalesHistoryDetail objects filtered by the OedhQtyBord column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpric(string|array<string> $OedhPric) Return ChildSalesHistoryDetail objects filtered by the OedhPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpric(string|array<string> $OedhPric) Return ChildSalesHistoryDetail objects filtered by the OedhPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcost(string|array<string> $OedhCost) Return ChildSalesHistoryDetail objects filtered by the OedhCost column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcost(string|array<string> $OedhCost) Return ChildSalesHistoryDetail objects filtered by the OedhCost column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhtaxpcttot(string|array<string> $OedhTaxPctTot) Return ChildSalesHistoryDetail objects filtered by the OedhTaxPctTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhtaxpcttot(string|array<string> $OedhTaxPctTot) Return ChildSalesHistoryDetail objects filtered by the OedhTaxPctTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhprictot(string|array<string> $OedhPricTot) Return ChildSalesHistoryDetail objects filtered by the OedhPricTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhprictot(string|array<string> $OedhPricTot) Return ChildSalesHistoryDetail objects filtered by the OedhPricTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcosttot(string|array<string> $OedhCostTot) Return ChildSalesHistoryDetail objects filtered by the OedhCostTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcosttot(string|array<string> $OedhCostTot) Return ChildSalesHistoryDetail objects filtered by the OedhCostTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhspcommpct(string|array<string> $OedhSpCommPct) Return ChildSalesHistoryDetail objects filtered by the OedhSpCommPct column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhspcommpct(string|array<string> $OedhSpCommPct) Return ChildSalesHistoryDetail objects filtered by the OedhSpCommPct column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbrkncaseqty(int|array<int> $OedhBrknCaseQty) Return ChildSalesHistoryDetail objects filtered by the OedhBrknCaseQty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbrkncaseqty(int|array<int> $OedhBrknCaseQty) Return ChildSalesHistoryDetail objects filtered by the OedhBrknCaseQty column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbin(string|array<string> $OedhBin) Return ChildSalesHistoryDetail objects filtered by the OedhBin column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbin(string|array<string> $OedhBin) Return ChildSalesHistoryDetail objects filtered by the OedhBin column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpersonalcd(string|array<string> $OedhPersonalCd) Return ChildSalesHistoryDetail objects filtered by the OedhPersonalCd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpersonalcd(string|array<string> $OedhPersonalCd) Return ChildSalesHistoryDetail objects filtered by the OedhPersonalCd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacdisc1(string|array<string> $OedhAcDisc1) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacdisc1(string|array<string> $OedhAcDisc1) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc1 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacdisc2(string|array<string> $OedhAcDisc2) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacdisc2(string|array<string> $OedhAcDisc2) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc2 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacdisc3(string|array<string> $OedhAcDisc3) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacdisc3(string|array<string> $OedhAcDisc3) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc3 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacdisc4(string|array<string> $OedhAcDisc4) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacdisc4(string|array<string> $OedhAcDisc4) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc4 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlmwipnbr(string|array<string> $OedhLmWipNbr) Return ChildSalesHistoryDetail objects filtered by the OedhLmWipNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlmwipnbr(string|array<string> $OedhLmWipNbr) Return ChildSalesHistoryDetail objects filtered by the OedhLmWipNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcorepric(string|array<string> $OedhCorePric) Return ChildSalesHistoryDetail objects filtered by the OedhCorePric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcorepric(string|array<string> $OedhCorePric) Return ChildSalesHistoryDetail objects filtered by the OedhCorePric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhasstcode(string|array<string> $OedhAsstCode) Return ChildSalesHistoryDetail objects filtered by the OedhAsstCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhasstcode(string|array<string> $OedhAsstCode) Return ChildSalesHistoryDetail objects filtered by the OedhAsstCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhasstqty(string|array<string> $OedhAsstQty) Return ChildSalesHistoryDetail objects filtered by the OedhAsstQty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhasstqty(string|array<string> $OedhAsstQty) Return ChildSalesHistoryDetail objects filtered by the OedhAsstQty column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlistpric(string|array<string> $OedhListPric) Return ChildSalesHistoryDetail objects filtered by the OedhListPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlistpric(string|array<string> $OedhListPric) Return ChildSalesHistoryDetail objects filtered by the OedhListPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhstancost(string|array<string> $OedhStanCost) Return ChildSalesHistoryDetail objects filtered by the OedhStanCost column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhstancost(string|array<string> $OedhStanCost) Return ChildSalesHistoryDetail objects filtered by the OedhStanCost column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhvenditemjob(string|array<string> $OedhVendItemJob) Return ChildSalesHistoryDetail objects filtered by the OedhVendItemJob column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhvenditemjob(string|array<string> $OedhVendItemJob) Return ChildSalesHistoryDetail objects filtered by the OedhVendItemJob column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhnsvendid(string|array<string> $OedhNsVendId) Return ChildSalesHistoryDetail objects filtered by the OedhNsVendId column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhnsvendid(string|array<string> $OedhNsVendId) Return ChildSalesHistoryDetail objects filtered by the OedhNsVendId column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhnsitemgrup(string|array<string> $OedhNsItemGrup) Return ChildSalesHistoryDetail objects filtered by the OedhNsItemGrup column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhnsitemgrup(string|array<string> $OedhNsItemGrup) Return ChildSalesHistoryDetail objects filtered by the OedhNsItemGrup column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhusecode(string|array<string> $OedhUseCode) Return ChildSalesHistoryDetail objects filtered by the OedhUseCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhusecode(string|array<string> $OedhUseCode) Return ChildSalesHistoryDetail objects filtered by the OedhUseCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhnsshipfromid(string|array<string> $OedhNsShipFromId) Return ChildSalesHistoryDetail objects filtered by the OedhNsShipFromId column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhnsshipfromid(string|array<string> $OedhNsShipFromId) Return ChildSalesHistoryDetail objects filtered by the OedhNsShipFromId column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhasstovrd(string|array<string> $OedhAsstOvrd) Return ChildSalesHistoryDetail objects filtered by the OedhAsstOvrd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhasstovrd(string|array<string> $OedhAsstOvrd) Return ChildSalesHistoryDetail objects filtered by the OedhAsstOvrd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpricovrd(string|array<string> $OedhPricOvrd) Return ChildSalesHistoryDetail objects filtered by the OedhPricOvrd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpricovrd(string|array<string> $OedhPricOvrd) Return ChildSalesHistoryDetail objects filtered by the OedhPricOvrd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpickflag(string|array<string> $OedhPickFlag) Return ChildSalesHistoryDetail objects filtered by the OedhPickFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpickflag(string|array<string> $OedhPickFlag) Return ChildSalesHistoryDetail objects filtered by the OedhPickFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode1(string|array<string> $OedhMstrTaxCode1) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode1(string|array<string> $OedhMstrTaxCode1) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode1 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct1(string|array<string> $OedhMstrTaxPct1) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct1 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct1(string|array<string> $OedhMstrTaxPct1) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct1 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode2(string|array<string> $OedhMstrTaxCode2) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode2(string|array<string> $OedhMstrTaxCode2) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode2 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct2(string|array<string> $OedhMstrTaxPct2) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct2 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct2(string|array<string> $OedhMstrTaxPct2) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct2 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode3(string|array<string> $OedhMstrTaxCode3) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode3(string|array<string> $OedhMstrTaxCode3) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode3 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct3(string|array<string> $OedhMstrTaxPct3) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct3 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct3(string|array<string> $OedhMstrTaxPct3) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct3 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode4(string|array<string> $OedhMstrTaxCode4) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode4(string|array<string> $OedhMstrTaxCode4) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode4 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct4(string|array<string> $OedhMstrTaxPct4) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct4 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct4(string|array<string> $OedhMstrTaxPct4) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct4 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode5(string|array<string> $OedhMstrTaxCode5) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode5(string|array<string> $OedhMstrTaxCode5) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode5 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct5(string|array<string> $OedhMstrTaxPct5) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct5 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct5(string|array<string> $OedhMstrTaxPct5) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct5 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode6(string|array<string> $OedhMstrTaxCode6) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode6(string|array<string> $OedhMstrTaxCode6) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode6 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct6(string|array<string> $OedhMstrTaxPct6) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct6 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct6(string|array<string> $OedhMstrTaxPct6) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct6 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode7(string|array<string> $OedhMstrTaxCode7) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode7 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode7(string|array<string> $OedhMstrTaxCode7) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode7 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct7(string|array<string> $OedhMstrTaxPct7) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct7 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct7(string|array<string> $OedhMstrTaxPct7) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct7 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode8(string|array<string> $OedhMstrTaxCode8) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode8 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode8(string|array<string> $OedhMstrTaxCode8) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode8 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct8(string|array<string> $OedhMstrTaxPct8) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct8 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct8(string|array<string> $OedhMstrTaxPct8) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct8 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxcode9(string|array<string> $OedhMstrTaxCode9) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode9 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxcode9(string|array<string> $OedhMstrTaxCode9) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode9 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmstrtaxpct9(string|array<string> $OedhMstrTaxPct9) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct9 column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmstrtaxpct9(string|array<string> $OedhMstrTaxPct9) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct9 column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbinarea(string|array<string> $OedhBinArea) Return ChildSalesHistoryDetail objects filtered by the OedhBinArea column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbinarea(string|array<string> $OedhBinArea) Return ChildSalesHistoryDetail objects filtered by the OedhBinArea column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhsplitline(string|array<string> $OedhSplitLine) Return ChildSalesHistoryDetail objects filtered by the OedhSplitLine column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhsplitline(string|array<string> $OedhSplitLine) Return ChildSalesHistoryDetail objects filtered by the OedhSplitLine column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlostreas(string|array<string> $OedhLostReas) Return ChildSalesHistoryDetail objects filtered by the OedhLostReas column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlostreas(string|array<string> $OedhLostReas) Return ChildSalesHistoryDetail objects filtered by the OedhLostReas column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhorigline(int|array<int> $OedhOrigLine) Return ChildSalesHistoryDetail objects filtered by the OedhOrigLine column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhorigline(int|array<int> $OedhOrigLine) Return ChildSalesHistoryDetail objects filtered by the OedhOrigLine column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcustcrssref(string|array<string> $OedhCustCrssRef) Return ChildSalesHistoryDetail objects filtered by the OedhCustCrssRef column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcustcrssref(string|array<string> $OedhCustCrssRef) Return ChildSalesHistoryDetail objects filtered by the OedhCustCrssRef column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhuom(string|array<string> $OedhUom) Return ChildSalesHistoryDetail objects filtered by the OedhUom column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhuom(string|array<string> $OedhUom) Return ChildSalesHistoryDetail objects filtered by the OedhUom column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhshipflag(string|array<string> $OedhShipFlag) Return ChildSalesHistoryDetail objects filtered by the OedhShipFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhshipflag(string|array<string> $OedhShipFlag) Return ChildSalesHistoryDetail objects filtered by the OedhShipFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhkitflag(string|array<string> $OedhKitFlag) Return ChildSalesHistoryDetail objects filtered by the OedhKitFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhkitflag(string|array<string> $OedhKitFlag) Return ChildSalesHistoryDetail objects filtered by the OedhKitFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhkititemnbr(string|array<string> $OedhKitItemNbr) Return ChildSalesHistoryDetail objects filtered by the OedhKitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhkititemnbr(string|array<string> $OedhKitItemNbr) Return ChildSalesHistoryDetail objects filtered by the OedhKitItemNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbfcost(string|array<string> $OedhBfCost) Return ChildSalesHistoryDetail objects filtered by the OedhBfCost column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbfcost(string|array<string> $OedhBfCost) Return ChildSalesHistoryDetail objects filtered by the OedhBfCost column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbfmsgcode(string|array<string> $OedhBfMsgCode) Return ChildSalesHistoryDetail objects filtered by the OedhBfMsgCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbfmsgcode(string|array<string> $OedhBfMsgCode) Return ChildSalesHistoryDetail objects filtered by the OedhBfMsgCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbfcosttot(string|array<string> $OedhBfCostTot) Return ChildSalesHistoryDetail objects filtered by the OedhBfCostTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbfcosttot(string|array<string> $OedhBfCostTot) Return ChildSalesHistoryDetail objects filtered by the OedhBfCostTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlmbulkpric(string|array<string> $OedhLmBulkPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmBulkPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlmbulkpric(string|array<string> $OedhLmBulkPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmBulkPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlmmtrxpkgpric(string|array<string> $OedhLmMtrxPkgPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmMtrxPkgPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlmmtrxpkgpric(string|array<string> $OedhLmMtrxPkgPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmMtrxPkgPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlmmtrxbulkpric(string|array<string> $OedhLmMtrxBulkPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmMtrxBulkPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlmmtrxbulkpric(string|array<string> $OedhLmMtrxBulkPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmMtrxBulkPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlmcontractpric(string|array<string> $OedhLmContractPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmContractPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlmcontractpric(string|array<string> $OedhLmContractPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmContractPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwghttot(string|array<string> $OedhWghtTot) Return ChildSalesHistoryDetail objects filtered by the OedhWghtTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwghttot(string|array<string> $OedhWghtTot) Return ChildSalesHistoryDetail objects filtered by the OedhWghtTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhordras(string|array<string> $OedhOrdrAs) Return ChildSalesHistoryDetail objects filtered by the OedhOrdrAs column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhordras(string|array<string> $OedhOrdrAs) Return ChildSalesHistoryDetail objects filtered by the OedhOrdrAs column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpodetlinenbr(int|array<int> $OedhPoDetLineNbr) Return ChildSalesHistoryDetail objects filtered by the OedhPoDetLineNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpodetlinenbr(int|array<int> $OedhPoDetLineNbr) Return ChildSalesHistoryDetail objects filtered by the OedhPoDetLineNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhqtytoship(string|array<string> $OedhQtyToShip) Return ChildSalesHistoryDetail objects filtered by the OedhQtyToShip column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhqtytoship(string|array<string> $OedhQtyToShip) Return ChildSalesHistoryDetail objects filtered by the OedhQtyToShip column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhponbr(string|array<string> $OedhPoNbr) Return ChildSalesHistoryDetail objects filtered by the OedhPoNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhponbr(string|array<string> $OedhPoNbr) Return ChildSalesHistoryDetail objects filtered by the OedhPoNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhporef(string|array<string> $OedhPoRef) Return ChildSalesHistoryDetail objects filtered by the OedhPoRef column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhporef(string|array<string> $OedhPoRef) Return ChildSalesHistoryDetail objects filtered by the OedhPoRef column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhfrtin(string|array<string> $OedhFrtIn) Return ChildSalesHistoryDetail objects filtered by the OedhFrtIn column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhfrtin(string|array<string> $OedhFrtIn) Return ChildSalesHistoryDetail objects filtered by the OedhFrtIn column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhfrtinentered(string|array<string> $OedhFrtInEntered) Return ChildSalesHistoryDetail objects filtered by the OedhFrtInEntered column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhfrtinentered(string|array<string> $OedhFrtInEntered) Return ChildSalesHistoryDetail objects filtered by the OedhFrtInEntered column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhprodcmplt(string|array<string> $OedhProdCmplt) Return ChildSalesHistoryDetail objects filtered by the OedhProdCmplt column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhprodcmplt(string|array<string> $OedhProdCmplt) Return ChildSalesHistoryDetail objects filtered by the OedhProdCmplt column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedherflag(string|array<string> $OedhErFlag) Return ChildSalesHistoryDetail objects filtered by the OedhErFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedherflag(string|array<string> $OedhErFlag) Return ChildSalesHistoryDetail objects filtered by the OedhErFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhorigitem(string|array<string> $OedhOrigItem) Return ChildSalesHistoryDetail objects filtered by the OedhOrigItem column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhorigitem(string|array<string> $OedhOrigItem) Return ChildSalesHistoryDetail objects filtered by the OedhOrigItem column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhsubflag(string|array<string> $OedhSubFlag) Return ChildSalesHistoryDetail objects filtered by the OedhSubFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhsubflag(string|array<string> $OedhSubFlag) Return ChildSalesHistoryDetail objects filtered by the OedhSubFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhediincomingseq(int|array<int> $OedhEdiIncomingSeq) Return ChildSalesHistoryDetail objects filtered by the OedhEdiIncomingSeq column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhediincomingseq(int|array<int> $OedhEdiIncomingSeq) Return ChildSalesHistoryDetail objects filtered by the OedhEdiIncomingSeq column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhspordpoline(int|array<int> $OedhSpordPoLine) Return ChildSalesHistoryDetail objects filtered by the OedhSpordPoLine column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhspordpoline(int|array<int> $OedhSpordPoLine) Return ChildSalesHistoryDetail objects filtered by the OedhSpordPoLine column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcatlgid(string|array<string> $OedhCatlgId) Return ChildSalesHistoryDetail objects filtered by the OedhCatlgId column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcatlgid(string|array<string> $OedhCatlgId) Return ChildSalesHistoryDetail objects filtered by the OedhCatlgId column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhdesigncd(string|array<string> $OedhDesignCd) Return ChildSalesHistoryDetail objects filtered by the OedhDesignCd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhdesigncd(string|array<string> $OedhDesignCd) Return ChildSalesHistoryDetail objects filtered by the OedhDesignCd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhdiscpct(string|array<string> $OedhDiscPct) Return ChildSalesHistoryDetail objects filtered by the OedhDiscPct column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhdiscpct(string|array<string> $OedhDiscPct) Return ChildSalesHistoryDetail objects filtered by the OedhDiscPct column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhtaxamt(string|array<string> $OedhTaxAmt) Return ChildSalesHistoryDetail objects filtered by the OedhTaxAmt column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhtaxamt(string|array<string> $OedhTaxAmt) Return ChildSalesHistoryDetail objects filtered by the OedhTaxAmt column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhxusage(string|array<string> $OedhXUsage) Return ChildSalesHistoryDetail objects filtered by the OedhXUsage column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhxusage(string|array<string> $OedhXUsage) Return ChildSalesHistoryDetail objects filtered by the OedhXUsage column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhrqtslock(string|array<string> $OedhRqtsLock) Return ChildSalesHistoryDetail objects filtered by the OedhRqtsLock column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhrqtslock(string|array<string> $OedhRqtsLock) Return ChildSalesHistoryDetail objects filtered by the OedhRqtsLock column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhfreshfrozen(string|array<string> $OedhFreshFrozen) Return ChildSalesHistoryDetail objects filtered by the OedhFreshFrozen column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhfreshfrozen(string|array<string> $OedhFreshFrozen) Return ChildSalesHistoryDetail objects filtered by the OedhFreshFrozen column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcoreflag(string|array<string> $OedhCoreFlag) Return ChildSalesHistoryDetail objects filtered by the OedhCoreFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcoreflag(string|array<string> $OedhCoreFlag) Return ChildSalesHistoryDetail objects filtered by the OedhCoreFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhnssalesacct(string|array<string> $OedhNsSalesAcct) Return ChildSalesHistoryDetail objects filtered by the OedhNsSalesAcct column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhnssalesacct(string|array<string> $OedhNsSalesAcct) Return ChildSalesHistoryDetail objects filtered by the OedhNsSalesAcct column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcertreqd(string|array<string> $OedhCertReqd) Return ChildSalesHistoryDetail objects filtered by the OedhCertReqd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcertreqd(string|array<string> $OedhCertReqd) Return ChildSalesHistoryDetail objects filtered by the OedhCertReqd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhaddonsales(string|array<string> $OedhAddOnSales) Return ChildSalesHistoryDetail objects filtered by the OedhAddOnSales column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhaddonsales(string|array<string> $OedhAddOnSales) Return ChildSalesHistoryDetail objects filtered by the OedhAddOnSales column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbordflag(string|array<string> $OedhBordFlag) Return ChildSalesHistoryDetail objects filtered by the OedhBordFlag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbordflag(string|array<string> $OedhBordFlag) Return ChildSalesHistoryDetail objects filtered by the OedhBordFlag column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhtempgrove(string|array<string> $OedhTempGrove) Return ChildSalesHistoryDetail objects filtered by the OedhTempGrove column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhtempgrove(string|array<string> $OedhTempGrove) Return ChildSalesHistoryDetail objects filtered by the OedhTempGrove column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhgrovedisc(string|array<string> $OedhGroveDisc) Return ChildSalesHistoryDetail objects filtered by the OedhGroveDisc column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhgrovedisc(string|array<string> $OedhGroveDisc) Return ChildSalesHistoryDetail objects filtered by the OedhGroveDisc column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhoffinvc(string|array<string> $OedhOffInvc) Return ChildSalesHistoryDetail objects filtered by the OedhOffInvc column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhoffinvc(string|array<string> $OedhOffInvc) Return ChildSalesHistoryDetail objects filtered by the OedhOffInvc column
 * @method     ChildSalesHistoryDetail[]|Collection findByInititemgrup(string|array<string> $InitItemGrup) Return ChildSalesHistoryDetail objects filtered by the InitItemGrup column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByInititemgrup(string|array<string> $InitItemGrup) Return ChildSalesHistoryDetail objects filtered by the InitItemGrup column
 * @method     ChildSalesHistoryDetail[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildSalesHistoryDetail objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByApvevendid(string|array<string> $ApveVendId) Return ChildSalesHistoryDetail objects filtered by the ApveVendId column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacct(string|array<string> $OedhAcct) Return ChildSalesHistoryDetail objects filtered by the OedhAcct column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacct(string|array<string> $OedhAcct) Return ChildSalesHistoryDetail objects filtered by the OedhAcct column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhloadtot(string|array<string> $OedhLoadTot) Return ChildSalesHistoryDetail objects filtered by the OedhLoadTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhloadtot(string|array<string> $OedhLoadTot) Return ChildSalesHistoryDetail objects filtered by the OedhLoadTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpickedqty(string|array<string> $OedhPickedQty) Return ChildSalesHistoryDetail objects filtered by the OedhPickedQty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpickedqty(string|array<string> $OedhPickedQty) Return ChildSalesHistoryDetail objects filtered by the OedhPickedQty column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwiorigqty(string|array<string> $OedhWiOrigQty) Return ChildSalesHistoryDetail objects filtered by the OedhWiOrigQty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwiorigqty(string|array<string> $OedhWiOrigQty) Return ChildSalesHistoryDetail objects filtered by the OedhWiOrigQty column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhmargintot(string|array<string> $OedhMarginTot) Return ChildSalesHistoryDetail objects filtered by the OedhMarginTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhmargintot(string|array<string> $OedhMarginTot) Return ChildSalesHistoryDetail objects filtered by the OedhMarginTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcorecost(string|array<string> $OedhCoreCost) Return ChildSalesHistoryDetail objects filtered by the OedhCoreCost column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcorecost(string|array<string> $OedhCoreCost) Return ChildSalesHistoryDetail objects filtered by the OedhCoreCost column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhitemref(string|array<string> $OedhItemRef) Return ChildSalesHistoryDetail objects filtered by the OedhItemRef column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhitemref(string|array<string> $OedhItemRef) Return ChildSalesHistoryDetail objects filtered by the OedhItemRef column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhsac02returncode(string|array<string> $OedhSac02ReturnCode) Return ChildSalesHistoryDetail objects filtered by the OedhSac02ReturnCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhsac02returncode(string|array<string> $OedhSac02ReturnCode) Return ChildSalesHistoryDetail objects filtered by the OedhSac02ReturnCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwgtaxcode(string|array<string> $OedhWgTaxCode) Return ChildSalesHistoryDetail objects filtered by the OedhWgTaxCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwgtaxcode(string|array<string> $OedhWgTaxCode) Return ChildSalesHistoryDetail objects filtered by the OedhWgTaxCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwgprice(string|array<string> $OedhWgPrice) Return ChildSalesHistoryDetail objects filtered by the OedhWgPrice column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwgprice(string|array<string> $OedhWgPrice) Return ChildSalesHistoryDetail objects filtered by the OedhWgPrice column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwgtot(string|array<string> $OedhWgTot) Return ChildSalesHistoryDetail objects filtered by the OedhWgTot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwgtot(string|array<string> $OedhWgTot) Return ChildSalesHistoryDetail objects filtered by the OedhWgTot column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcntrqty(int|array<int> $OedhCntrQty) Return ChildSalesHistoryDetail objects filtered by the OedhCntrQty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcntrqty(int|array<int> $OedhCntrQty) Return ChildSalesHistoryDetail objects filtered by the OedhCntrQty column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhconfirmcode(string|array<string> $OedhConfirmCode) Return ChildSalesHistoryDetail objects filtered by the OedhConfirmCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhconfirmcode(string|array<string> $OedhConfirmCode) Return ChildSalesHistoryDetail objects filtered by the OedhConfirmCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhpicked(string|array<string> $OedhPicked) Return ChildSalesHistoryDetail objects filtered by the OedhPicked column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhpicked(string|array<string> $OedhPicked) Return ChildSalesHistoryDetail objects filtered by the OedhPicked column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhorigrqstdate(string|array<string> $OedhOrigRqstDate) Return ChildSalesHistoryDetail objects filtered by the OedhOrigRqstDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhorigrqstdate(string|array<string> $OedhOrigRqstDate) Return ChildSalesHistoryDetail objects filtered by the OedhOrigRqstDate column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhfablock(string|array<string> $OedhFabLock) Return ChildSalesHistoryDetail objects filtered by the OedhFabLock column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhfablock(string|array<string> $OedhFabLock) Return ChildSalesHistoryDetail objects filtered by the OedhFabLock column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhlabelprinted(string|array<string> $OedhLabelPrinted) Return ChildSalesHistoryDetail objects filtered by the OedhLabelPrinted column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhlabelprinted(string|array<string> $OedhLabelPrinted) Return ChildSalesHistoryDetail objects filtered by the OedhLabelPrinted column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhquoteid(string|array<string> $OedhQuoteId) Return ChildSalesHistoryDetail objects filtered by the OedhQuoteId column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhquoteid(string|array<string> $OedhQuoteId) Return ChildSalesHistoryDetail objects filtered by the OedhQuoteId column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhinvprinted(string|array<string> $OedhInvPrinted) Return ChildSalesHistoryDetail objects filtered by the OedhInvPrinted column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhinvprinted(string|array<string> $OedhInvPrinted) Return ChildSalesHistoryDetail objects filtered by the OedhInvPrinted column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhstockcheck(string|array<string> $OedhStockCheck) Return ChildSalesHistoryDetail objects filtered by the OedhStockCheck column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhstockcheck(string|array<string> $OedhStockCheck) Return ChildSalesHistoryDetail objects filtered by the OedhStockCheck column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhshouldwesplit(string|array<string> $OedhShouldWeSplit) Return ChildSalesHistoryDetail objects filtered by the OedhShouldWeSplit column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhshouldwesplit(string|array<string> $OedhShouldWeSplit) Return ChildSalesHistoryDetail objects filtered by the OedhShouldWeSplit column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcofcreqd(string|array<string> $OedhCofcReqd) Return ChildSalesHistoryDetail objects filtered by the OedhCofcReqd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcofcreqd(string|array<string> $OedhCofcReqd) Return ChildSalesHistoryDetail objects filtered by the OedhCofcReqd column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhackcode(string|array<string> $OedhAckCode) Return ChildSalesHistoryDetail objects filtered by the OedhAckCode column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhackcode(string|array<string> $OedhAckCode) Return ChildSalesHistoryDetail objects filtered by the OedhAckCode column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwibordnbr(string|array<string> $OedhWiBordNbr) Return ChildSalesHistoryDetail objects filtered by the OedhWiBordNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwibordnbr(string|array<string> $OedhWiBordNbr) Return ChildSalesHistoryDetail objects filtered by the OedhWiBordNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcerthistordr(string|array<string> $OedhCertHistOrdr) Return ChildSalesHistoryDetail objects filtered by the OedhCertHistOrdr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcerthistordr(string|array<string> $OedhCertHistOrdr) Return ChildSalesHistoryDetail objects filtered by the OedhCertHistOrdr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhcerthistline(string|array<string> $OedhCertHistLine) Return ChildSalesHistoryDetail objects filtered by the OedhCertHistLine column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhcerthistline(string|array<string> $OedhCertHistLine) Return ChildSalesHistoryDetail objects filtered by the OedhCertHistLine column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhordrdasitemid(string|array<string> $OedhOrdrdAsItemId) Return ChildSalesHistoryDetail objects filtered by the OedhOrdrdAsItemId column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhordrdasitemid(string|array<string> $OedhOrdrdAsItemId) Return ChildSalesHistoryDetail objects filtered by the OedhOrdrdAsItemId column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwibatch1nbr(int|array<int> $OedhWiBatch1Nbr) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Nbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwibatch1nbr(int|array<int> $OedhWiBatch1Nbr) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Nbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwibatch1qty(string|array<string> $OedhWiBatch1Qty) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Qty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwibatch1qty(string|array<string> $OedhWiBatch1Qty) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Qty column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhwibatch1stat(string|array<string> $OedhWiBatch1Stat) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Stat column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhwibatch1stat(string|array<string> $OedhWiBatch1Stat) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Stat column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhrganbr(int|array<int> $OedhRgaNbr) Return ChildSalesHistoryDetail objects filtered by the OedhRgaNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhrganbr(int|array<int> $OedhRgaNbr) Return ChildSalesHistoryDetail objects filtered by the OedhRgaNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhorigpric(string|array<string> $OedhOrigPric) Return ChildSalesHistoryDetail objects filtered by the OedhOrigPric column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhorigpric(string|array<string> $OedhOrigPric) Return ChildSalesHistoryDetail objects filtered by the OedhOrigPric column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhreflinenbr(int|array<int> $OedhRefLineNbr) Return ChildSalesHistoryDetail objects filtered by the OedhRefLineNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhreflinenbr(int|array<int> $OedhRefLineNbr) Return ChildSalesHistoryDetail objects filtered by the OedhRefLineNbr column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhbinlocn(string|array<string> $OedhBinLocn) Return ChildSalesHistoryDetail objects filtered by the OedhBinLocn column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhbinlocn(string|array<string> $OedhBinLocn) Return ChildSalesHistoryDetail objects filtered by the OedhBinLocn column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacsuplywhse(string|array<string> $OedhAcSuplyWhse) Return ChildSalesHistoryDetail objects filtered by the OedhAcSuplyWhse column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacsuplywhse(string|array<string> $OedhAcSuplyWhse) Return ChildSalesHistoryDetail objects filtered by the OedhAcSuplyWhse column
 * @method     ChildSalesHistoryDetail[]|Collection findByOedhacpricdate(string|array<string> $OedhAcPricDate) Return ChildSalesHistoryDetail objects filtered by the OedhAcPricDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByOedhacpricdate(string|array<string> $OedhAcPricDate) Return ChildSalesHistoryDetail objects filtered by the OedhAcPricDate column
 * @method     ChildSalesHistoryDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesHistoryDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesHistoryDetail objects filtered by the DateUpdtd column
 * @method     ChildSalesHistoryDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesHistoryDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesHistoryDetail objects filtered by the TimeUpdtd column
 * @method     ChildSalesHistoryDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildSalesHistoryDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryDetail> findByDummy(string|array<string> $dummy) Return ChildSalesHistoryDetail objects filtered by the dummy column
 *
 * @method     ChildSalesHistoryDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSalesHistoryDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SalesHistoryDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesHistoryDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesHistoryDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesHistoryDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesHistoryDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSalesHistoryDetailQuery) {
            return $criteria;
        }
        $query = new ChildSalesHistoryDetailQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$OehhNbr, $OedhLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesHistoryDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesHistoryDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSalesHistoryDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehhNbr, OedhLine, OedhYear, InitItemNbr, OedhDesc, OedhDesc2, IntbWhse, OedhRqstDate, OedhCancDate, OedhShipDate, OedhSpecOrdr, ArtbCtaxCode, OedhQtyOrd, OedhQtyShip, OedhQtyShipTot, OedhQtyBord, OedhPric, OedhCost, OedhTaxPctTot, OedhPricTot, OedhCostTot, OedhSpCommPct, OedhBrknCaseQty, OedhBin, OedhPersonalCd, OedhAcDisc1, OedhAcDisc2, OedhAcDisc3, OedhAcDisc4, OedhLmWipNbr, OedhCorePric, OedhAsstCode, OedhAsstQty, OedhListPric, OedhStanCost, OedhVendItemJob, OedhNsVendId, OedhNsItemGrup, OedhUseCode, OedhNsShipFromId, OedhAsstOvrd, OedhPricOvrd, OedhPickFlag, OedhMstrTaxCode1, OedhMstrTaxPct1, OedhMstrTaxCode2, OedhMstrTaxPct2, OedhMstrTaxCode3, OedhMstrTaxPct3, OedhMstrTaxCode4, OedhMstrTaxPct4, OedhMstrTaxCode5, OedhMstrTaxPct5, OedhMstrTaxCode6, OedhMstrTaxPct6, OedhMstrTaxCode7, OedhMstrTaxPct7, OedhMstrTaxCode8, OedhMstrTaxPct8, OedhMstrTaxCode9, OedhMstrTaxPct9, OedhBinArea, OedhSplitLine, OedhLostReas, OedhOrigLine, OedhCustCrssRef, OedhUom, OedhShipFlag, OedhKitFlag, OedhKitItemNbr, OedhBfCost, OedhBfMsgCode, OedhBfCostTot, OedhLmBulkPric, OedhLmMtrxPkgPric, OedhLmMtrxBulkPric, OedhLmContractPric, OedhWghtTot, OedhOrdrAs, OedhPoDetLineNbr, OedhQtyToShip, OedhPoNbr, OedhPoRef, OedhFrtIn, OedhFrtInEntered, OedhProdCmplt, OedhErFlag, OedhOrigItem, OedhSubFlag, OedhEdiIncomingSeq, OedhSpordPoLine, OedhCatlgId, OedhDesignCd, OedhDiscPct, OedhTaxAmt, OedhXUsage, OedhRqtsLock, OedhFreshFrozen, OedhCoreFlag, OedhNsSalesAcct, OedhCertReqd, OedhAddOnSales, OedhBordFlag, OedhTempGrove, OedhGroveDisc, OedhOffInvc, InitItemGrup, ApveVendId, OedhAcct, OedhLoadTot, OedhPickedQty, OedhWiOrigQty, OedhMarginTot, OedhCoreCost, OedhItemRef, OedhSac02ReturnCode, OedhWgTaxCode, OedhWgPrice, OedhWgTot, OedhCntrQty, OedhConfirmCode, OedhPicked, OedhOrigRqstDate, OedhFabLock, OedhLabelPrinted, OedhQuoteId, OedhInvPrinted, OedhStockCheck, OedhShouldWeSplit, OedhCofcReqd, OedhAckCode, OedhWiBordNbr, OedhCertHistOrdr, OedhCertHistLine, OedhOrdrdAsItemId, OedhWiBatch1Nbr, OedhWiBatch1Qty, OedhWiBatch1Stat, OedhRgaNbr, OedhOrigPric, OedhRefLineNbr, OedhBinLocn, OedhAcSuplyWhse, OedhAcPricDate, DateUpdtd, TimeUpdtd, dummy FROM so_det_hist WHERE OehhNbr = :p0 AND OedhLine = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesHistoryDetail $obj */
            $obj = new ChildSalesHistoryDetail();
            $obj->hydrate($row);
            SalesHistoryDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSalesHistoryDetail|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLINE, $key[1], Criteria::EQUAL);

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
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SalesHistoryDetailTableMap::COL_OEHHNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesHistoryDetailTableMap::COL_OEDHLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OehhNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhnbr(1234); // WHERE OehhNbr = 1234
     * $query->filterByOehhnbr(array(12, 34)); // WHERE OehhNbr IN (12, 34)
     * $query->filterByOehhnbr(array('min' => 12)); // WHERE OehhNbr > 12
     * </code>
     *
     * @see       filterBySalesHistory()
     *
     * @param mixed $oehhnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, ?string $comparison = null)
    {
        if (is_array($oehhnbr)) {
            $useMinMax = false;
            if (isset($oehhnbr['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $oehhnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhnbr['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $oehhnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $oehhnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhline(1234); // WHERE OedhLine = 1234
     * $query->filterByOedhline(array(12, 34)); // WHERE OedhLine IN (12, 34)
     * $query->filterByOedhline(array('min' => 12)); // WHERE OedhLine > 12
     * </code>
     *
     * @param mixed $oedhline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhline($oedhline = null, ?string $comparison = null)
    {
        if (is_array($oedhline)) {
            $useMinMax = false;
            if (isset($oedhline['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLINE, $oedhline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhline['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLINE, $oedhline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLINE, $oedhline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhYear column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhyear('fooValue');   // WHERE OedhYear = 'fooValue'
     * $query->filterByOedhyear('%fooValue%', Criteria::LIKE); // WHERE OedhYear LIKE '%fooValue%'
     * $query->filterByOedhyear(['foo', 'bar']); // WHERE OedhYear IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhyear The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhyear($oedhyear = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhyear)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHYEAR, $oedhyear, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdesc('fooValue');   // WHERE OedhDesc = 'fooValue'
     * $query->filterByOedhdesc('%fooValue%', Criteria::LIKE); // WHERE OedhDesc LIKE '%fooValue%'
     * $query->filterByOedhdesc(['foo', 'bar']); // WHERE OedhDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhdesc($oedhdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDESC, $oedhdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdesc2('fooValue');   // WHERE OedhDesc2 = 'fooValue'
     * $query->filterByOedhdesc2('%fooValue%', Criteria::LIKE); // WHERE OedhDesc2 LIKE '%fooValue%'
     * $query->filterByOedhdesc2(['foo', 'bar']); // WHERE OedhDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhdesc2($oedhdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDESC2, $oedhdesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * $query->filterByIntbwhse(['foo', 'bar']); // WHERE IntbWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhrqstdate('fooValue');   // WHERE OedhRqstDate = 'fooValue'
     * $query->filterByOedhrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedhRqstDate LIKE '%fooValue%'
     * $query->filterByOedhrqstdate(['foo', 'bar']); // WHERE OedhRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhrqstdate($oedhrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRQSTDATE, $oedhrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcancdate('fooValue');   // WHERE OedhCancDate = 'fooValue'
     * $query->filterByOedhcancdate('%fooValue%', Criteria::LIKE); // WHERE OedhCancDate LIKE '%fooValue%'
     * $query->filterByOedhcancdate(['foo', 'bar']); // WHERE OedhCancDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcancdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcancdate($oedhcancdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCANCDATE, $oedhcancdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhshipdate('fooValue');   // WHERE OedhShipDate = 'fooValue'
     * $query->filterByOedhshipdate('%fooValue%', Criteria::LIKE); // WHERE OedhShipDate LIKE '%fooValue%'
     * $query->filterByOedhshipdate(['foo', 'bar']); // WHERE OedhShipDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhshipdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhshipdate($oedhshipdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSHIPDATE, $oedhshipdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhspecordr('fooValue');   // WHERE OedhSpecOrdr = 'fooValue'
     * $query->filterByOedhspecordr('%fooValue%', Criteria::LIKE); // WHERE OedhSpecOrdr LIKE '%fooValue%'
     * $query->filterByOedhspecordr(['foo', 'bar']); // WHERE OedhSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhspecordr($oedhspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPECORDR, $oedhspecordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode('fooValue');   // WHERE ArtbCtaxCode = 'fooValue'
     * $query->filterByArtbctaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode LIKE '%fooValue%'
     * $query->filterByArtbctaxcode(['foo', 'bar']); // WHERE ArtbCtaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode($artbctaxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhQtyOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhqtyord(1234); // WHERE OedhQtyOrd = 1234
     * $query->filterByOedhqtyord(array(12, 34)); // WHERE OedhQtyOrd IN (12, 34)
     * $query->filterByOedhqtyord(array('min' => 12)); // WHERE OedhQtyOrd > 12
     * </code>
     *
     * @param mixed $oedhqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhqtyord($oedhqtyord = null, ?string $comparison = null)
    {
        if (is_array($oedhqtyord)) {
            $useMinMax = false;
            if (isset($oedhqtyord['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYORD, $oedhqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhqtyord['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYORD, $oedhqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYORD, $oedhqtyord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhqtyship(1234); // WHERE OedhQtyShip = 1234
     * $query->filterByOedhqtyship(array(12, 34)); // WHERE OedhQtyShip IN (12, 34)
     * $query->filterByOedhqtyship(array('min' => 12)); // WHERE OedhQtyShip > 12
     * </code>
     *
     * @param mixed $oedhqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhqtyship($oedhqtyship = null, ?string $comparison = null)
    {
        if (is_array($oedhqtyship)) {
            $useMinMax = false;
            if (isset($oedhqtyship['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP, $oedhqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhqtyship['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP, $oedhqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP, $oedhqtyship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhQtyShipTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhqtyshiptot(1234); // WHERE OedhQtyShipTot = 1234
     * $query->filterByOedhqtyshiptot(array(12, 34)); // WHERE OedhQtyShipTot IN (12, 34)
     * $query->filterByOedhqtyshiptot(array('min' => 12)); // WHERE OedhQtyShipTot > 12
     * </code>
     *
     * @param mixed $oedhqtyshiptot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhqtyshiptot($oedhqtyshiptot = null, ?string $comparison = null)
    {
        if (is_array($oedhqtyshiptot)) {
            $useMinMax = false;
            if (isset($oedhqtyshiptot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT, $oedhqtyshiptot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhqtyshiptot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT, $oedhqtyshiptot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT, $oedhqtyshiptot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhQtyBord column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhqtybord(1234); // WHERE OedhQtyBord = 1234
     * $query->filterByOedhqtybord(array(12, 34)); // WHERE OedhQtyBord IN (12, 34)
     * $query->filterByOedhqtybord(array('min' => 12)); // WHERE OedhQtyBord > 12
     * </code>
     *
     * @param mixed $oedhqtybord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhqtybord($oedhqtybord = null, ?string $comparison = null)
    {
        if (is_array($oedhqtybord)) {
            $useMinMax = false;
            if (isset($oedhqtybord['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYBORD, $oedhqtybord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhqtybord['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYBORD, $oedhqtybord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYBORD, $oedhqtybord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpric(1234); // WHERE OedhPric = 1234
     * $query->filterByOedhpric(array(12, 34)); // WHERE OedhPric IN (12, 34)
     * $query->filterByOedhpric(array('min' => 12)); // WHERE OedhPric > 12
     * </code>
     *
     * @param mixed $oedhpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpric($oedhpric = null, ?string $comparison = null)
    {
        if (is_array($oedhpric)) {
            $useMinMax = false;
            if (isset($oedhpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRIC, $oedhpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRIC, $oedhpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRIC, $oedhpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcost(1234); // WHERE OedhCost = 1234
     * $query->filterByOedhcost(array(12, 34)); // WHERE OedhCost IN (12, 34)
     * $query->filterByOedhcost(array('min' => 12)); // WHERE OedhCost > 12
     * </code>
     *
     * @param mixed $oedhcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcost($oedhcost = null, ?string $comparison = null)
    {
        if (is_array($oedhcost)) {
            $useMinMax = false;
            if (isset($oedhcost['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOST, $oedhcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhcost['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOST, $oedhcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOST, $oedhcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhTaxPctTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhtaxpcttot(1234); // WHERE OedhTaxPctTot = 1234
     * $query->filterByOedhtaxpcttot(array(12, 34)); // WHERE OedhTaxPctTot IN (12, 34)
     * $query->filterByOedhtaxpcttot(array('min' => 12)); // WHERE OedhTaxPctTot > 12
     * </code>
     *
     * @param mixed $oedhtaxpcttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhtaxpcttot($oedhtaxpcttot = null, ?string $comparison = null)
    {
        if (is_array($oedhtaxpcttot)) {
            $useMinMax = false;
            if (isset($oedhtaxpcttot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT, $oedhtaxpcttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhtaxpcttot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT, $oedhtaxpcttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT, $oedhtaxpcttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPricTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhprictot(1234); // WHERE OedhPricTot = 1234
     * $query->filterByOedhprictot(array(12, 34)); // WHERE OedhPricTot IN (12, 34)
     * $query->filterByOedhprictot(array('min' => 12)); // WHERE OedhPricTot > 12
     * </code>
     *
     * @param mixed $oedhprictot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhprictot($oedhprictot = null, ?string $comparison = null)
    {
        if (is_array($oedhprictot)) {
            $useMinMax = false;
            if (isset($oedhprictot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRICTOT, $oedhprictot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhprictot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRICTOT, $oedhprictot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRICTOT, $oedhprictot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcosttot(1234); // WHERE OedhCostTot = 1234
     * $query->filterByOedhcosttot(array(12, 34)); // WHERE OedhCostTot IN (12, 34)
     * $query->filterByOedhcosttot(array('min' => 12)); // WHERE OedhCostTot > 12
     * </code>
     *
     * @param mixed $oedhcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcosttot($oedhcosttot = null, ?string $comparison = null)
    {
        if (is_array($oedhcosttot)) {
            $useMinMax = false;
            if (isset($oedhcosttot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT, $oedhcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhcosttot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT, $oedhcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT, $oedhcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhSpCommPct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhspcommpct(1234); // WHERE OedhSpCommPct = 1234
     * $query->filterByOedhspcommpct(array(12, 34)); // WHERE OedhSpCommPct IN (12, 34)
     * $query->filterByOedhspcommpct(array('min' => 12)); // WHERE OedhSpCommPct > 12
     * </code>
     *
     * @param mixed $oedhspcommpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhspcommpct($oedhspcommpct = null, ?string $comparison = null)
    {
        if (is_array($oedhspcommpct)) {
            $useMinMax = false;
            if (isset($oedhspcommpct['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT, $oedhspcommpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhspcommpct['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT, $oedhspcommpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT, $oedhspcommpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBrknCaseQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbrkncaseqty(1234); // WHERE OedhBrknCaseQty = 1234
     * $query->filterByOedhbrkncaseqty(array(12, 34)); // WHERE OedhBrknCaseQty IN (12, 34)
     * $query->filterByOedhbrkncaseqty(array('min' => 12)); // WHERE OedhBrknCaseQty > 12
     * </code>
     *
     * @param mixed $oedhbrkncaseqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbrkncaseqty($oedhbrkncaseqty = null, ?string $comparison = null)
    {
        if (is_array($oedhbrkncaseqty)) {
            $useMinMax = false;
            if (isset($oedhbrkncaseqty['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY, $oedhbrkncaseqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhbrkncaseqty['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY, $oedhbrkncaseqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY, $oedhbrkncaseqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbin('fooValue');   // WHERE OedhBin = 'fooValue'
     * $query->filterByOedhbin('%fooValue%', Criteria::LIKE); // WHERE OedhBin LIKE '%fooValue%'
     * $query->filterByOedhbin(['foo', 'bar']); // WHERE OedhBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbin($oedhbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBIN, $oedhbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPersonalCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpersonalcd('fooValue');   // WHERE OedhPersonalCd = 'fooValue'
     * $query->filterByOedhpersonalcd('%fooValue%', Criteria::LIKE); // WHERE OedhPersonalCd LIKE '%fooValue%'
     * $query->filterByOedhpersonalcd(['foo', 'bar']); // WHERE OedhPersonalCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhpersonalcd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpersonalcd($oedhpersonalcd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpersonalcd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPERSONALCD, $oedhpersonalcd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcDisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc1('fooValue');   // WHERE OedhAcDisc1 = 'fooValue'
     * $query->filterByOedhacdisc1('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc1 LIKE '%fooValue%'
     * $query->filterByOedhacdisc1(['foo', 'bar']); // WHERE OedhAcDisc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacdisc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacdisc1($oedhacdisc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC1, $oedhacdisc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcDisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc2('fooValue');   // WHERE OedhAcDisc2 = 'fooValue'
     * $query->filterByOedhacdisc2('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc2 LIKE '%fooValue%'
     * $query->filterByOedhacdisc2(['foo', 'bar']); // WHERE OedhAcDisc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacdisc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacdisc2($oedhacdisc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC2, $oedhacdisc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcDisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc3('fooValue');   // WHERE OedhAcDisc3 = 'fooValue'
     * $query->filterByOedhacdisc3('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc3 LIKE '%fooValue%'
     * $query->filterByOedhacdisc3(['foo', 'bar']); // WHERE OedhAcDisc3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacdisc3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacdisc3($oedhacdisc3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC3, $oedhacdisc3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcDisc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc4('fooValue');   // WHERE OedhAcDisc4 = 'fooValue'
     * $query->filterByOedhacdisc4('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc4 LIKE '%fooValue%'
     * $query->filterByOedhacdisc4(['foo', 'bar']); // WHERE OedhAcDisc4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacdisc4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacdisc4($oedhacdisc4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC4, $oedhacdisc4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLmWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlmwipnbr('fooValue');   // WHERE OedhLmWipNbr = 'fooValue'
     * $query->filterByOedhlmwipnbr('%fooValue%', Criteria::LIKE); // WHERE OedhLmWipNbr LIKE '%fooValue%'
     * $query->filterByOedhlmwipnbr(['foo', 'bar']); // WHERE OedhLmWipNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhlmwipnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlmwipnbr($oedhlmwipnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhlmwipnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR, $oedhlmwipnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCorePric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcorepric(1234); // WHERE OedhCorePric = 1234
     * $query->filterByOedhcorepric(array(12, 34)); // WHERE OedhCorePric IN (12, 34)
     * $query->filterByOedhcorepric(array('min' => 12)); // WHERE OedhCorePric > 12
     * </code>
     *
     * @param mixed $oedhcorepric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcorepric($oedhcorepric = null, ?string $comparison = null)
    {
        if (is_array($oedhcorepric)) {
            $useMinMax = false;
            if (isset($oedhcorepric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC, $oedhcorepric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhcorepric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC, $oedhcorepric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC, $oedhcorepric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhasstcode('fooValue');   // WHERE OedhAsstCode = 'fooValue'
     * $query->filterByOedhasstcode('%fooValue%', Criteria::LIKE); // WHERE OedhAsstCode LIKE '%fooValue%'
     * $query->filterByOedhasstcode(['foo', 'bar']); // WHERE OedhAsstCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhasstcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhasstcode($oedhasstcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTCODE, $oedhasstcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAsstQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhasstqty(1234); // WHERE OedhAsstQty = 1234
     * $query->filterByOedhasstqty(array(12, 34)); // WHERE OedhAsstQty IN (12, 34)
     * $query->filterByOedhasstqty(array('min' => 12)); // WHERE OedhAsstQty > 12
     * </code>
     *
     * @param mixed $oedhasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhasstqty($oedhasstqty = null, ?string $comparison = null)
    {
        if (is_array($oedhasstqty)) {
            $useMinMax = false;
            if (isset($oedhasstqty['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTQTY, $oedhasstqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhasstqty['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTQTY, $oedhasstqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTQTY, $oedhasstqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhListPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlistpric(1234); // WHERE OedhListPric = 1234
     * $query->filterByOedhlistpric(array(12, 34)); // WHERE OedhListPric IN (12, 34)
     * $query->filterByOedhlistpric(array('min' => 12)); // WHERE OedhListPric > 12
     * </code>
     *
     * @param mixed $oedhlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlistpric($oedhlistpric = null, ?string $comparison = null)
    {
        if (is_array($oedhlistpric)) {
            $useMinMax = false;
            if (isset($oedhlistpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC, $oedhlistpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhlistpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC, $oedhlistpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC, $oedhlistpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhstancost(1234); // WHERE OedhStanCost = 1234
     * $query->filterByOedhstancost(array(12, 34)); // WHERE OedhStanCost IN (12, 34)
     * $query->filterByOedhstancost(array('min' => 12)); // WHERE OedhStanCost > 12
     * </code>
     *
     * @param mixed $oedhstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhstancost($oedhstancost = null, ?string $comparison = null)
    {
        if (is_array($oedhstancost)) {
            $useMinMax = false;
            if (isset($oedhstancost['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSTANCOST, $oedhstancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhstancost['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSTANCOST, $oedhstancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSTANCOST, $oedhstancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhVendItemJob column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhvenditemjob('fooValue');   // WHERE OedhVendItemJob = 'fooValue'
     * $query->filterByOedhvenditemjob('%fooValue%', Criteria::LIKE); // WHERE OedhVendItemJob LIKE '%fooValue%'
     * $query->filterByOedhvenditemjob(['foo', 'bar']); // WHERE OedhVendItemJob IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhvenditemjob The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhvenditemjob($oedhvenditemjob = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhvenditemjob)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB, $oedhvenditemjob, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhNsVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnsvendid('fooValue');   // WHERE OedhNsVendId = 'fooValue'
     * $query->filterByOedhnsvendid('%fooValue%', Criteria::LIKE); // WHERE OedhNsVendId LIKE '%fooValue%'
     * $query->filterByOedhnsvendid(['foo', 'bar']); // WHERE OedhNsVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhnsvendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhnsvendid($oedhnsvendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnsvendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSVENDID, $oedhnsvendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhNsItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnsitemgrup('fooValue');   // WHERE OedhNsItemGrup = 'fooValue'
     * $query->filterByOedhnsitemgrup('%fooValue%', Criteria::LIKE); // WHERE OedhNsItemGrup LIKE '%fooValue%'
     * $query->filterByOedhnsitemgrup(['foo', 'bar']); // WHERE OedhNsItemGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhnsitemgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhnsitemgrup($oedhnsitemgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnsitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP, $oedhnsitemgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhUseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhusecode('fooValue');   // WHERE OedhUseCode = 'fooValue'
     * $query->filterByOedhusecode('%fooValue%', Criteria::LIKE); // WHERE OedhUseCode LIKE '%fooValue%'
     * $query->filterByOedhusecode(['foo', 'bar']); // WHERE OedhUseCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhusecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhusecode($oedhusecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhusecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHUSECODE, $oedhusecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhNsShipFromId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnsshipfromid('fooValue');   // WHERE OedhNsShipFromId = 'fooValue'
     * $query->filterByOedhnsshipfromid('%fooValue%', Criteria::LIKE); // WHERE OedhNsShipFromId LIKE '%fooValue%'
     * $query->filterByOedhnsshipfromid(['foo', 'bar']); // WHERE OedhNsShipFromId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhnsshipfromid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhnsshipfromid($oedhnsshipfromid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnsshipfromid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID, $oedhnsshipfromid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAsstOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhasstovrd('fooValue');   // WHERE OedhAsstOvrd = 'fooValue'
     * $query->filterByOedhasstovrd('%fooValue%', Criteria::LIKE); // WHERE OedhAsstOvrd LIKE '%fooValue%'
     * $query->filterByOedhasstovrd(['foo', 'bar']); // WHERE OedhAsstOvrd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhasstovrd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhasstovrd($oedhasstovrd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhasstovrd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTOVRD, $oedhasstovrd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPricOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpricovrd('fooValue');   // WHERE OedhPricOvrd = 'fooValue'
     * $query->filterByOedhpricovrd('%fooValue%', Criteria::LIKE); // WHERE OedhPricOvrd LIKE '%fooValue%'
     * $query->filterByOedhpricovrd(['foo', 'bar']); // WHERE OedhPricOvrd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhpricovrd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpricovrd($oedhpricovrd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpricovrd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRICOVRD, $oedhpricovrd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPickFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpickflag('fooValue');   // WHERE OedhPickFlag = 'fooValue'
     * $query->filterByOedhpickflag('%fooValue%', Criteria::LIKE); // WHERE OedhPickFlag LIKE '%fooValue%'
     * $query->filterByOedhpickflag(['foo', 'bar']); // WHERE OedhPickFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhpickflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpickflag($oedhpickflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpickflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKFLAG, $oedhpickflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode1('fooValue');   // WHERE OedhMstrTaxCode1 = 'fooValue'
     * $query->filterByOedhmstrtaxcode1('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode1 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode1(['foo', 'bar']); // WHERE OedhMstrTaxCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode1($oedhmstrtaxcode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1, $oedhmstrtaxcode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct1(1234); // WHERE OedhMstrTaxPct1 = 1234
     * $query->filterByOedhmstrtaxpct1(array(12, 34)); // WHERE OedhMstrTaxPct1 IN (12, 34)
     * $query->filterByOedhmstrtaxpct1(array('min' => 12)); // WHERE OedhMstrTaxPct1 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct1($oedhmstrtaxpct1 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct1)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct1['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1, $oedhmstrtaxpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct1['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1, $oedhmstrtaxpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1, $oedhmstrtaxpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode2('fooValue');   // WHERE OedhMstrTaxCode2 = 'fooValue'
     * $query->filterByOedhmstrtaxcode2('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode2 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode2(['foo', 'bar']); // WHERE OedhMstrTaxCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode2($oedhmstrtaxcode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2, $oedhmstrtaxcode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct2(1234); // WHERE OedhMstrTaxPct2 = 1234
     * $query->filterByOedhmstrtaxpct2(array(12, 34)); // WHERE OedhMstrTaxPct2 IN (12, 34)
     * $query->filterByOedhmstrtaxpct2(array('min' => 12)); // WHERE OedhMstrTaxPct2 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct2($oedhmstrtaxpct2 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct2)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct2['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2, $oedhmstrtaxpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct2['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2, $oedhmstrtaxpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2, $oedhmstrtaxpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode3('fooValue');   // WHERE OedhMstrTaxCode3 = 'fooValue'
     * $query->filterByOedhmstrtaxcode3('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode3 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode3(['foo', 'bar']); // WHERE OedhMstrTaxCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode3($oedhmstrtaxcode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3, $oedhmstrtaxcode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct3(1234); // WHERE OedhMstrTaxPct3 = 1234
     * $query->filterByOedhmstrtaxpct3(array(12, 34)); // WHERE OedhMstrTaxPct3 IN (12, 34)
     * $query->filterByOedhmstrtaxpct3(array('min' => 12)); // WHERE OedhMstrTaxPct3 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct3($oedhmstrtaxpct3 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct3)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct3['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3, $oedhmstrtaxpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct3['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3, $oedhmstrtaxpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3, $oedhmstrtaxpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode4('fooValue');   // WHERE OedhMstrTaxCode4 = 'fooValue'
     * $query->filterByOedhmstrtaxcode4('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode4 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode4(['foo', 'bar']); // WHERE OedhMstrTaxCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode4($oedhmstrtaxcode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4, $oedhmstrtaxcode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct4(1234); // WHERE OedhMstrTaxPct4 = 1234
     * $query->filterByOedhmstrtaxpct4(array(12, 34)); // WHERE OedhMstrTaxPct4 IN (12, 34)
     * $query->filterByOedhmstrtaxpct4(array('min' => 12)); // WHERE OedhMstrTaxPct4 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct4($oedhmstrtaxpct4 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct4)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct4['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4, $oedhmstrtaxpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct4['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4, $oedhmstrtaxpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4, $oedhmstrtaxpct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode5('fooValue');   // WHERE OedhMstrTaxCode5 = 'fooValue'
     * $query->filterByOedhmstrtaxcode5('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode5 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode5(['foo', 'bar']); // WHERE OedhMstrTaxCode5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode5($oedhmstrtaxcode5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5, $oedhmstrtaxcode5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct5(1234); // WHERE OedhMstrTaxPct5 = 1234
     * $query->filterByOedhmstrtaxpct5(array(12, 34)); // WHERE OedhMstrTaxPct5 IN (12, 34)
     * $query->filterByOedhmstrtaxpct5(array('min' => 12)); // WHERE OedhMstrTaxPct5 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct5($oedhmstrtaxpct5 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct5)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct5['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5, $oedhmstrtaxpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct5['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5, $oedhmstrtaxpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5, $oedhmstrtaxpct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode6('fooValue');   // WHERE OedhMstrTaxCode6 = 'fooValue'
     * $query->filterByOedhmstrtaxcode6('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode6 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode6(['foo', 'bar']); // WHERE OedhMstrTaxCode6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode6($oedhmstrtaxcode6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6, $oedhmstrtaxcode6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct6(1234); // WHERE OedhMstrTaxPct6 = 1234
     * $query->filterByOedhmstrtaxpct6(array(12, 34)); // WHERE OedhMstrTaxPct6 IN (12, 34)
     * $query->filterByOedhmstrtaxpct6(array('min' => 12)); // WHERE OedhMstrTaxPct6 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct6($oedhmstrtaxpct6 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct6)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct6['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6, $oedhmstrtaxpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct6['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6, $oedhmstrtaxpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6, $oedhmstrtaxpct6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode7('fooValue');   // WHERE OedhMstrTaxCode7 = 'fooValue'
     * $query->filterByOedhmstrtaxcode7('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode7 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode7(['foo', 'bar']); // WHERE OedhMstrTaxCode7 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode7 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode7($oedhmstrtaxcode7 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7, $oedhmstrtaxcode7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct7(1234); // WHERE OedhMstrTaxPct7 = 1234
     * $query->filterByOedhmstrtaxpct7(array(12, 34)); // WHERE OedhMstrTaxPct7 IN (12, 34)
     * $query->filterByOedhmstrtaxpct7(array('min' => 12)); // WHERE OedhMstrTaxPct7 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct7($oedhmstrtaxpct7 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct7)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct7['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7, $oedhmstrtaxpct7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct7['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7, $oedhmstrtaxpct7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7, $oedhmstrtaxpct7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode8('fooValue');   // WHERE OedhMstrTaxCode8 = 'fooValue'
     * $query->filterByOedhmstrtaxcode8('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode8 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode8(['foo', 'bar']); // WHERE OedhMstrTaxCode8 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode8 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode8($oedhmstrtaxcode8 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8, $oedhmstrtaxcode8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct8(1234); // WHERE OedhMstrTaxPct8 = 1234
     * $query->filterByOedhmstrtaxpct8(array(12, 34)); // WHERE OedhMstrTaxPct8 IN (12, 34)
     * $query->filterByOedhmstrtaxpct8(array('min' => 12)); // WHERE OedhMstrTaxPct8 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct8($oedhmstrtaxpct8 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct8)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct8['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8, $oedhmstrtaxpct8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct8['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8, $oedhmstrtaxpct8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8, $oedhmstrtaxpct8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode9('fooValue');   // WHERE OedhMstrTaxCode9 = 'fooValue'
     * $query->filterByOedhmstrtaxcode9('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode9 LIKE '%fooValue%'
     * $query->filterByOedhmstrtaxcode9(['foo', 'bar']); // WHERE OedhMstrTaxCode9 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhmstrtaxcode9 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode9($oedhmstrtaxcode9 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9, $oedhmstrtaxcode9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMstrTaxPct9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxpct9(1234); // WHERE OedhMstrTaxPct9 = 1234
     * $query->filterByOedhmstrtaxpct9(array(12, 34)); // WHERE OedhMstrTaxPct9 IN (12, 34)
     * $query->filterByOedhmstrtaxpct9(array('min' => 12)); // WHERE OedhMstrTaxPct9 > 12
     * </code>
     *
     * @param mixed $oedhmstrtaxpct9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct9($oedhmstrtaxpct9 = null, ?string $comparison = null)
    {
        if (is_array($oedhmstrtaxpct9)) {
            $useMinMax = false;
            if (isset($oedhmstrtaxpct9['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9, $oedhmstrtaxpct9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmstrtaxpct9['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9, $oedhmstrtaxpct9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9, $oedhmstrtaxpct9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBinArea column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbinarea('fooValue');   // WHERE OedhBinArea = 'fooValue'
     * $query->filterByOedhbinarea('%fooValue%', Criteria::LIKE); // WHERE OedhBinArea LIKE '%fooValue%'
     * $query->filterByOedhbinarea(['foo', 'bar']); // WHERE OedhBinArea IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhbinarea The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbinarea($oedhbinarea = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbinarea)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBINAREA, $oedhbinarea, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhSplitLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhsplitline('fooValue');   // WHERE OedhSplitLine = 'fooValue'
     * $query->filterByOedhsplitline('%fooValue%', Criteria::LIKE); // WHERE OedhSplitLine LIKE '%fooValue%'
     * $query->filterByOedhsplitline(['foo', 'bar']); // WHERE OedhSplitLine IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhsplitline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhsplitline($oedhsplitline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhsplitline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPLITLINE, $oedhsplitline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLostReas column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlostreas('fooValue');   // WHERE OedhLostReas = 'fooValue'
     * $query->filterByOedhlostreas('%fooValue%', Criteria::LIKE); // WHERE OedhLostReas LIKE '%fooValue%'
     * $query->filterByOedhlostreas(['foo', 'bar']); // WHERE OedhLostReas IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhlostreas The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlostreas($oedhlostreas = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhlostreas)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLOSTREAS, $oedhlostreas, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOrigLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhorigline(1234); // WHERE OedhOrigLine = 1234
     * $query->filterByOedhorigline(array(12, 34)); // WHERE OedhOrigLine IN (12, 34)
     * $query->filterByOedhorigline(array('min' => 12)); // WHERE OedhOrigLine > 12
     * </code>
     *
     * @param mixed $oedhorigline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhorigline($oedhorigline = null, ?string $comparison = null)
    {
        if (is_array($oedhorigline)) {
            $useMinMax = false;
            if (isset($oedhorigline['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGLINE, $oedhorigline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhorigline['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGLINE, $oedhorigline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGLINE, $oedhorigline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCustCrssRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcustcrssref('fooValue');   // WHERE OedhCustCrssRef = 'fooValue'
     * $query->filterByOedhcustcrssref('%fooValue%', Criteria::LIKE); // WHERE OedhCustCrssRef LIKE '%fooValue%'
     * $query->filterByOedhcustcrssref(['foo', 'bar']); // WHERE OedhCustCrssRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcustcrssref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcustcrssref($oedhcustcrssref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcustcrssref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF, $oedhcustcrssref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhuom('fooValue');   // WHERE OedhUom = 'fooValue'
     * $query->filterByOedhuom('%fooValue%', Criteria::LIKE); // WHERE OedhUom LIKE '%fooValue%'
     * $query->filterByOedhuom(['foo', 'bar']); // WHERE OedhUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhuom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhuom($oedhuom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhuom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHUOM, $oedhuom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhShipFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhshipflag('fooValue');   // WHERE OedhShipFlag = 'fooValue'
     * $query->filterByOedhshipflag('%fooValue%', Criteria::LIKE); // WHERE OedhShipFlag LIKE '%fooValue%'
     * $query->filterByOedhshipflag(['foo', 'bar']); // WHERE OedhShipFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhshipflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhshipflag($oedhshipflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhshipflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG, $oedhshipflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhKitFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhkitflag('fooValue');   // WHERE OedhKitFlag = 'fooValue'
     * $query->filterByOedhkitflag('%fooValue%', Criteria::LIKE); // WHERE OedhKitFlag LIKE '%fooValue%'
     * $query->filterByOedhkitflag(['foo', 'bar']); // WHERE OedhKitFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhkitflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhkitflag($oedhkitflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhkitflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHKITFLAG, $oedhkitflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhKitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhkititemnbr('fooValue');   // WHERE OedhKitItemNbr = 'fooValue'
     * $query->filterByOedhkititemnbr('%fooValue%', Criteria::LIKE); // WHERE OedhKitItemNbr LIKE '%fooValue%'
     * $query->filterByOedhkititemnbr(['foo', 'bar']); // WHERE OedhKitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhkititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhkititemnbr($oedhkititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhkititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR, $oedhkititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBfCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbfcost(1234); // WHERE OedhBfCost = 1234
     * $query->filterByOedhbfcost(array(12, 34)); // WHERE OedhBfCost IN (12, 34)
     * $query->filterByOedhbfcost(array('min' => 12)); // WHERE OedhBfCost > 12
     * </code>
     *
     * @param mixed $oedhbfcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbfcost($oedhbfcost = null, ?string $comparison = null)
    {
        if (is_array($oedhbfcost)) {
            $useMinMax = false;
            if (isset($oedhbfcost['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOST, $oedhbfcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhbfcost['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOST, $oedhbfcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOST, $oedhbfcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBfMsgCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbfmsgcode('fooValue');   // WHERE OedhBfMsgCode = 'fooValue'
     * $query->filterByOedhbfmsgcode('%fooValue%', Criteria::LIKE); // WHERE OedhBfMsgCode LIKE '%fooValue%'
     * $query->filterByOedhbfmsgcode(['foo', 'bar']); // WHERE OedhBfMsgCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhbfmsgcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbfmsgcode($oedhbfmsgcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbfmsgcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE, $oedhbfmsgcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBfCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbfcosttot(1234); // WHERE OedhBfCostTot = 1234
     * $query->filterByOedhbfcosttot(array(12, 34)); // WHERE OedhBfCostTot IN (12, 34)
     * $query->filterByOedhbfcosttot(array('min' => 12)); // WHERE OedhBfCostTot > 12
     * </code>
     *
     * @param mixed $oedhbfcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbfcosttot($oedhbfcosttot = null, ?string $comparison = null)
    {
        if (is_array($oedhbfcosttot)) {
            $useMinMax = false;
            if (isset($oedhbfcosttot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT, $oedhbfcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhbfcosttot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT, $oedhbfcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT, $oedhbfcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLmBulkPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlmbulkpric(1234); // WHERE OedhLmBulkPric = 1234
     * $query->filterByOedhlmbulkpric(array(12, 34)); // WHERE OedhLmBulkPric IN (12, 34)
     * $query->filterByOedhlmbulkpric(array('min' => 12)); // WHERE OedhLmBulkPric > 12
     * </code>
     *
     * @param mixed $oedhlmbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlmbulkpric($oedhlmbulkpric = null, ?string $comparison = null)
    {
        if (is_array($oedhlmbulkpric)) {
            $useMinMax = false;
            if (isset($oedhlmbulkpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC, $oedhlmbulkpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhlmbulkpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC, $oedhlmbulkpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC, $oedhlmbulkpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLmMtrxPkgPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlmmtrxpkgpric(1234); // WHERE OedhLmMtrxPkgPric = 1234
     * $query->filterByOedhlmmtrxpkgpric(array(12, 34)); // WHERE OedhLmMtrxPkgPric IN (12, 34)
     * $query->filterByOedhlmmtrxpkgpric(array('min' => 12)); // WHERE OedhLmMtrxPkgPric > 12
     * </code>
     *
     * @param mixed $oedhlmmtrxpkgpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlmmtrxpkgpric($oedhlmmtrxpkgpric = null, ?string $comparison = null)
    {
        if (is_array($oedhlmmtrxpkgpric)) {
            $useMinMax = false;
            if (isset($oedhlmmtrxpkgpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC, $oedhlmmtrxpkgpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhlmmtrxpkgpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC, $oedhlmmtrxpkgpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC, $oedhlmmtrxpkgpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLmMtrxBulkPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlmmtrxbulkpric(1234); // WHERE OedhLmMtrxBulkPric = 1234
     * $query->filterByOedhlmmtrxbulkpric(array(12, 34)); // WHERE OedhLmMtrxBulkPric IN (12, 34)
     * $query->filterByOedhlmmtrxbulkpric(array('min' => 12)); // WHERE OedhLmMtrxBulkPric > 12
     * </code>
     *
     * @param mixed $oedhlmmtrxbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlmmtrxbulkpric($oedhlmmtrxbulkpric = null, ?string $comparison = null)
    {
        if (is_array($oedhlmmtrxbulkpric)) {
            $useMinMax = false;
            if (isset($oedhlmmtrxbulkpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC, $oedhlmmtrxbulkpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhlmmtrxbulkpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC, $oedhlmmtrxbulkpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC, $oedhlmmtrxbulkpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLmContractPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlmcontractpric(1234); // WHERE OedhLmContractPric = 1234
     * $query->filterByOedhlmcontractpric(array(12, 34)); // WHERE OedhLmContractPric IN (12, 34)
     * $query->filterByOedhlmcontractpric(array('min' => 12)); // WHERE OedhLmContractPric > 12
     * </code>
     *
     * @param mixed $oedhlmcontractpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlmcontractpric($oedhlmcontractpric = null, ?string $comparison = null)
    {
        if (is_array($oedhlmcontractpric)) {
            $useMinMax = false;
            if (isset($oedhlmcontractpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC, $oedhlmcontractpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhlmcontractpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC, $oedhlmcontractpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC, $oedhlmcontractpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwghttot(1234); // WHERE OedhWghtTot = 1234
     * $query->filterByOedhwghttot(array(12, 34)); // WHERE OedhWghtTot IN (12, 34)
     * $query->filterByOedhwghttot(array('min' => 12)); // WHERE OedhWghtTot > 12
     * </code>
     *
     * @param mixed $oedhwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwghttot($oedhwghttot = null, ?string $comparison = null)
    {
        if (is_array($oedhwghttot)) {
            $useMinMax = false;
            if (isset($oedhwghttot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT, $oedhwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwghttot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT, $oedhwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT, $oedhwghttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhordras('fooValue');   // WHERE OedhOrdrAs = 'fooValue'
     * $query->filterByOedhordras('%fooValue%', Criteria::LIKE); // WHERE OedhOrdrAs LIKE '%fooValue%'
     * $query->filterByOedhordras(['foo', 'bar']); // WHERE OedhOrdrAs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhordras The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhordras($oedhordras = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhordras)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORDRAS, $oedhordras, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPoDetLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpodetlinenbr(1234); // WHERE OedhPoDetLineNbr = 1234
     * $query->filterByOedhpodetlinenbr(array(12, 34)); // WHERE OedhPoDetLineNbr IN (12, 34)
     * $query->filterByOedhpodetlinenbr(array('min' => 12)); // WHERE OedhPoDetLineNbr > 12
     * </code>
     *
     * @param mixed $oedhpodetlinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpodetlinenbr($oedhpodetlinenbr = null, ?string $comparison = null)
    {
        if (is_array($oedhpodetlinenbr)) {
            $useMinMax = false;
            if (isset($oedhpodetlinenbr['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR, $oedhpodetlinenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhpodetlinenbr['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR, $oedhpodetlinenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR, $oedhpodetlinenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhqtytoship(1234); // WHERE OedhQtyToShip = 1234
     * $query->filterByOedhqtytoship(array(12, 34)); // WHERE OedhQtyToShip IN (12, 34)
     * $query->filterByOedhqtytoship(array('min' => 12)); // WHERE OedhQtyToShip > 12
     * </code>
     *
     * @param mixed $oedhqtytoship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhqtytoship($oedhqtytoship = null, ?string $comparison = null)
    {
        if (is_array($oedhqtytoship)) {
            $useMinMax = false;
            if (isset($oedhqtytoship['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP, $oedhqtytoship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhqtytoship['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP, $oedhqtytoship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP, $oedhqtytoship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhponbr('fooValue');   // WHERE OedhPoNbr = 'fooValue'
     * $query->filterByOedhponbr('%fooValue%', Criteria::LIKE); // WHERE OedhPoNbr LIKE '%fooValue%'
     * $query->filterByOedhponbr(['foo', 'bar']); // WHERE OedhPoNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhponbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhponbr($oedhponbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhponbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPONBR, $oedhponbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhporef('fooValue');   // WHERE OedhPoRef = 'fooValue'
     * $query->filterByOedhporef('%fooValue%', Criteria::LIKE); // WHERE OedhPoRef LIKE '%fooValue%'
     * $query->filterByOedhporef(['foo', 'bar']); // WHERE OedhPoRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhporef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhporef($oedhporef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhporef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPOREF, $oedhporef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfrtin(1234); // WHERE OedhFrtIn = 1234
     * $query->filterByOedhfrtin(array(12, 34)); // WHERE OedhFrtIn IN (12, 34)
     * $query->filterByOedhfrtin(array('min' => 12)); // WHERE OedhFrtIn > 12
     * </code>
     *
     * @param mixed $oedhfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhfrtin($oedhfrtin = null, ?string $comparison = null)
    {
        if (is_array($oedhfrtin)) {
            $useMinMax = false;
            if (isset($oedhfrtin['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRTIN, $oedhfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhfrtin['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRTIN, $oedhfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRTIN, $oedhfrtin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfrtinentered('fooValue');   // WHERE OedhFrtInEntered = 'fooValue'
     * $query->filterByOedhfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OedhFrtInEntered LIKE '%fooValue%'
     * $query->filterByOedhfrtinentered(['foo', 'bar']); // WHERE OedhFrtInEntered IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhfrtinentered The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhfrtinentered($oedhfrtinentered = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED, $oedhfrtinentered, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhProdCmplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhprodcmplt('fooValue');   // WHERE OedhProdCmplt = 'fooValue'
     * $query->filterByOedhprodcmplt('%fooValue%', Criteria::LIKE); // WHERE OedhProdCmplt LIKE '%fooValue%'
     * $query->filterByOedhprodcmplt(['foo', 'bar']); // WHERE OedhProdCmplt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhprodcmplt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhprodcmplt($oedhprodcmplt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhprodcmplt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT, $oedhprodcmplt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedherflag('fooValue');   // WHERE OedhErFlag = 'fooValue'
     * $query->filterByOedherflag('%fooValue%', Criteria::LIKE); // WHERE OedhErFlag LIKE '%fooValue%'
     * $query->filterByOedherflag(['foo', 'bar']); // WHERE OedhErFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedherflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedherflag($oedherflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedherflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHERFLAG, $oedherflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOrigItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhorigitem('fooValue');   // WHERE OedhOrigItem = 'fooValue'
     * $query->filterByOedhorigitem('%fooValue%', Criteria::LIKE); // WHERE OedhOrigItem LIKE '%fooValue%'
     * $query->filterByOedhorigitem(['foo', 'bar']); // WHERE OedhOrigItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhorigitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhorigitem($oedhorigitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhorigitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGITEM, $oedhorigitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhSubFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhsubflag('fooValue');   // WHERE OedhSubFlag = 'fooValue'
     * $query->filterByOedhsubflag('%fooValue%', Criteria::LIKE); // WHERE OedhSubFlag LIKE '%fooValue%'
     * $query->filterByOedhsubflag(['foo', 'bar']); // WHERE OedhSubFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhsubflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhsubflag($oedhsubflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhsubflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSUBFLAG, $oedhsubflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhEdiIncomingSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhediincomingseq(1234); // WHERE OedhEdiIncomingSeq = 1234
     * $query->filterByOedhediincomingseq(array(12, 34)); // WHERE OedhEdiIncomingSeq IN (12, 34)
     * $query->filterByOedhediincomingseq(array('min' => 12)); // WHERE OedhEdiIncomingSeq > 12
     * </code>
     *
     * @param mixed $oedhediincomingseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhediincomingseq($oedhediincomingseq = null, ?string $comparison = null)
    {
        if (is_array($oedhediincomingseq)) {
            $useMinMax = false;
            if (isset($oedhediincomingseq['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ, $oedhediincomingseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhediincomingseq['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ, $oedhediincomingseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ, $oedhediincomingseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhSpordPoLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhspordpoline(1234); // WHERE OedhSpordPoLine = 1234
     * $query->filterByOedhspordpoline(array(12, 34)); // WHERE OedhSpordPoLine IN (12, 34)
     * $query->filterByOedhspordpoline(array('min' => 12)); // WHERE OedhSpordPoLine > 12
     * </code>
     *
     * @param mixed $oedhspordpoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhspordpoline($oedhspordpoline = null, ?string $comparison = null)
    {
        if (is_array($oedhspordpoline)) {
            $useMinMax = false;
            if (isset($oedhspordpoline['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE, $oedhspordpoline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhspordpoline['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE, $oedhspordpoline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE, $oedhspordpoline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCatlgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcatlgid('fooValue');   // WHERE OedhCatlgId = 'fooValue'
     * $query->filterByOedhcatlgid('%fooValue%', Criteria::LIKE); // WHERE OedhCatlgId LIKE '%fooValue%'
     * $query->filterByOedhcatlgid(['foo', 'bar']); // WHERE OedhCatlgId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcatlgid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcatlgid($oedhcatlgid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcatlgid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCATLGID, $oedhcatlgid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhDesignCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdesigncd('fooValue');   // WHERE OedhDesignCd = 'fooValue'
     * $query->filterByOedhdesigncd('%fooValue%', Criteria::LIKE); // WHERE OedhDesignCd LIKE '%fooValue%'
     * $query->filterByOedhdesigncd(['foo', 'bar']); // WHERE OedhDesignCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhdesigncd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhdesigncd($oedhdesigncd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhdesigncd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDESIGNCD, $oedhdesigncd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhDiscPct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdiscpct(1234); // WHERE OedhDiscPct = 1234
     * $query->filterByOedhdiscpct(array(12, 34)); // WHERE OedhDiscPct IN (12, 34)
     * $query->filterByOedhdiscpct(array('min' => 12)); // WHERE OedhDiscPct > 12
     * </code>
     *
     * @param mixed $oedhdiscpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhdiscpct($oedhdiscpct = null, ?string $comparison = null)
    {
        if (is_array($oedhdiscpct)) {
            $useMinMax = false;
            if (isset($oedhdiscpct['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDISCPCT, $oedhdiscpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhdiscpct['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDISCPCT, $oedhdiscpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDISCPCT, $oedhdiscpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhTaxAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhtaxamt(1234); // WHERE OedhTaxAmt = 1234
     * $query->filterByOedhtaxamt(array(12, 34)); // WHERE OedhTaxAmt IN (12, 34)
     * $query->filterByOedhtaxamt(array('min' => 12)); // WHERE OedhTaxAmt > 12
     * </code>
     *
     * @param mixed $oedhtaxamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhtaxamt($oedhtaxamt = null, ?string $comparison = null)
    {
        if (is_array($oedhtaxamt)) {
            $useMinMax = false;
            if (isset($oedhtaxamt['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXAMT, $oedhtaxamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhtaxamt['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXAMT, $oedhtaxamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXAMT, $oedhtaxamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhXUsage column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhxusage('fooValue');   // WHERE OedhXUsage = 'fooValue'
     * $query->filterByOedhxusage('%fooValue%', Criteria::LIKE); // WHERE OedhXUsage LIKE '%fooValue%'
     * $query->filterByOedhxusage(['foo', 'bar']); // WHERE OedhXUsage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhxusage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhxusage($oedhxusage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhxusage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHXUSAGE, $oedhxusage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhRqtsLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhrqtslock('fooValue');   // WHERE OedhRqtsLock = 'fooValue'
     * $query->filterByOedhrqtslock('%fooValue%', Criteria::LIKE); // WHERE OedhRqtsLock LIKE '%fooValue%'
     * $query->filterByOedhrqtslock(['foo', 'bar']); // WHERE OedhRqtsLock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhrqtslock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhrqtslock($oedhrqtslock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhrqtslock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK, $oedhrqtslock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhFreshFrozen column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfreshfrozen('fooValue');   // WHERE OedhFreshFrozen = 'fooValue'
     * $query->filterByOedhfreshfrozen('%fooValue%', Criteria::LIKE); // WHERE OedhFreshFrozen LIKE '%fooValue%'
     * $query->filterByOedhfreshfrozen(['foo', 'bar']); // WHERE OedhFreshFrozen IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhfreshfrozen The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhfreshfrozen($oedhfreshfrozen = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhfreshfrozen)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN, $oedhfreshfrozen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCoreFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcoreflag('fooValue');   // WHERE OedhCoreFlag = 'fooValue'
     * $query->filterByOedhcoreflag('%fooValue%', Criteria::LIKE); // WHERE OedhCoreFlag LIKE '%fooValue%'
     * $query->filterByOedhcoreflag(['foo', 'bar']); // WHERE OedhCoreFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcoreflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcoreflag($oedhcoreflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcoreflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOREFLAG, $oedhcoreflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhNsSalesAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnssalesacct('fooValue');   // WHERE OedhNsSalesAcct = 'fooValue'
     * $query->filterByOedhnssalesacct('%fooValue%', Criteria::LIKE); // WHERE OedhNsSalesAcct LIKE '%fooValue%'
     * $query->filterByOedhnssalesacct(['foo', 'bar']); // WHERE OedhNsSalesAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhnssalesacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhnssalesacct($oedhnssalesacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnssalesacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT, $oedhnssalesacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCertReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcertreqd('fooValue');   // WHERE OedhCertReqd = 'fooValue'
     * $query->filterByOedhcertreqd('%fooValue%', Criteria::LIKE); // WHERE OedhCertReqd LIKE '%fooValue%'
     * $query->filterByOedhcertreqd(['foo', 'bar']); // WHERE OedhCertReqd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcertreqd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcertreqd($oedhcertreqd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcertreqd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCERTREQD, $oedhcertreqd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAddOnSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhaddonsales('fooValue');   // WHERE OedhAddOnSales = 'fooValue'
     * $query->filterByOedhaddonsales('%fooValue%', Criteria::LIKE); // WHERE OedhAddOnSales LIKE '%fooValue%'
     * $query->filterByOedhaddonsales(['foo', 'bar']); // WHERE OedhAddOnSales IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhaddonsales The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhaddonsales($oedhaddonsales = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhaddonsales)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHADDONSALES, $oedhaddonsales, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBordFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbordflag('fooValue');   // WHERE OedhBordFlag = 'fooValue'
     * $query->filterByOedhbordflag('%fooValue%', Criteria::LIKE); // WHERE OedhBordFlag LIKE '%fooValue%'
     * $query->filterByOedhbordflag(['foo', 'bar']); // WHERE OedhBordFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhbordflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbordflag($oedhbordflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbordflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBORDFLAG, $oedhbordflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhTempGrove column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhtempgrove('fooValue');   // WHERE OedhTempGrove = 'fooValue'
     * $query->filterByOedhtempgrove('%fooValue%', Criteria::LIKE); // WHERE OedhTempGrove LIKE '%fooValue%'
     * $query->filterByOedhtempgrove(['foo', 'bar']); // WHERE OedhTempGrove IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhtempgrove The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhtempgrove($oedhtempgrove = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhtempgrove)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE, $oedhtempgrove, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhGroveDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhgrovedisc('fooValue');   // WHERE OedhGroveDisc = 'fooValue'
     * $query->filterByOedhgrovedisc('%fooValue%', Criteria::LIKE); // WHERE OedhGroveDisc LIKE '%fooValue%'
     * $query->filterByOedhgrovedisc(['foo', 'bar']); // WHERE OedhGroveDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhgrovedisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhgrovedisc($oedhgrovedisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhgrovedisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHGROVEDISC, $oedhgrovedisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOffInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhoffinvc('fooValue');   // WHERE OedhOffInvc = 'fooValue'
     * $query->filterByOedhoffinvc('%fooValue%', Criteria::LIKE); // WHERE OedhOffInvc LIKE '%fooValue%'
     * $query->filterByOedhoffinvc(['foo', 'bar']); // WHERE OedhOffInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhoffinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhoffinvc($oedhoffinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhoffinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHOFFINVC, $oedhoffinvc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemgrup('fooValue');   // WHERE InitItemGrup = 'fooValue'
     * $query->filterByInititemgrup('%fooValue%', Criteria::LIKE); // WHERE InitItemGrup LIKE '%fooValue%'
     * $query->filterByInititemgrup(['foo', 'bar']); // WHERE InitItemGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemgrup($inititemgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_INITITEMGRUP, $inititemgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * $query->filterByApvevendid(['foo', 'bar']); // WHERE ApveVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apvevendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacct('fooValue');   // WHERE OedhAcct = 'fooValue'
     * $query->filterByOedhacct('%fooValue%', Criteria::LIKE); // WHERE OedhAcct LIKE '%fooValue%'
     * $query->filterByOedhacct(['foo', 'bar']); // WHERE OedhAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacct($oedhacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACCT, $oedhacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLoadTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhloadtot(1234); // WHERE OedhLoadTot = 1234
     * $query->filterByOedhloadtot(array(12, 34)); // WHERE OedhLoadTot IN (12, 34)
     * $query->filterByOedhloadtot(array('min' => 12)); // WHERE OedhLoadTot > 12
     * </code>
     *
     * @param mixed $oedhloadtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhloadtot($oedhloadtot = null, ?string $comparison = null)
    {
        if (is_array($oedhloadtot)) {
            $useMinMax = false;
            if (isset($oedhloadtot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLOADTOT, $oedhloadtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhloadtot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLOADTOT, $oedhloadtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLOADTOT, $oedhloadtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPickedQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpickedqty(1234); // WHERE OedhPickedQty = 1234
     * $query->filterByOedhpickedqty(array(12, 34)); // WHERE OedhPickedQty IN (12, 34)
     * $query->filterByOedhpickedqty(array('min' => 12)); // WHERE OedhPickedQty > 12
     * </code>
     *
     * @param mixed $oedhpickedqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpickedqty($oedhpickedqty = null, ?string $comparison = null)
    {
        if (is_array($oedhpickedqty)) {
            $useMinMax = false;
            if (isset($oedhpickedqty['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY, $oedhpickedqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhpickedqty['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY, $oedhpickedqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY, $oedhpickedqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWiOrigQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwiorigqty(1234); // WHERE OedhWiOrigQty = 1234
     * $query->filterByOedhwiorigqty(array(12, 34)); // WHERE OedhWiOrigQty IN (12, 34)
     * $query->filterByOedhwiorigqty(array('min' => 12)); // WHERE OedhWiOrigQty > 12
     * </code>
     *
     * @param mixed $oedhwiorigqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwiorigqty($oedhwiorigqty = null, ?string $comparison = null)
    {
        if (is_array($oedhwiorigqty)) {
            $useMinMax = false;
            if (isset($oedhwiorigqty['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY, $oedhwiorigqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwiorigqty['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY, $oedhwiorigqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY, $oedhwiorigqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhMarginTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmargintot(1234); // WHERE OedhMarginTot = 1234
     * $query->filterByOedhmargintot(array(12, 34)); // WHERE OedhMarginTot IN (12, 34)
     * $query->filterByOedhmargintot(array('min' => 12)); // WHERE OedhMarginTot > 12
     * </code>
     *
     * @param mixed $oedhmargintot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhmargintot($oedhmargintot = null, ?string $comparison = null)
    {
        if (is_array($oedhmargintot)) {
            $useMinMax = false;
            if (isset($oedhmargintot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT, $oedhmargintot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhmargintot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT, $oedhmargintot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT, $oedhmargintot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCoreCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcorecost(1234); // WHERE OedhCoreCost = 1234
     * $query->filterByOedhcorecost(array(12, 34)); // WHERE OedhCoreCost IN (12, 34)
     * $query->filterByOedhcorecost(array('min' => 12)); // WHERE OedhCoreCost > 12
     * </code>
     *
     * @param mixed $oedhcorecost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcorecost($oedhcorecost = null, ?string $comparison = null)
    {
        if (is_array($oedhcorecost)) {
            $useMinMax = false;
            if (isset($oedhcorecost['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCORECOST, $oedhcorecost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhcorecost['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCORECOST, $oedhcorecost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCORECOST, $oedhcorecost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhItemRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhitemref('fooValue');   // WHERE OedhItemRef = 'fooValue'
     * $query->filterByOedhitemref('%fooValue%', Criteria::LIKE); // WHERE OedhItemRef LIKE '%fooValue%'
     * $query->filterByOedhitemref(['foo', 'bar']); // WHERE OedhItemRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhitemref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhitemref($oedhitemref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhitemref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHITEMREF, $oedhitemref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhSac02ReturnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhsac02returncode('fooValue');   // WHERE OedhSac02ReturnCode = 'fooValue'
     * $query->filterByOedhsac02returncode('%fooValue%', Criteria::LIKE); // WHERE OedhSac02ReturnCode LIKE '%fooValue%'
     * $query->filterByOedhsac02returncode(['foo', 'bar']); // WHERE OedhSac02ReturnCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhsac02returncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhsac02returncode($oedhsac02returncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhsac02returncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE, $oedhsac02returncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWgTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwgtaxcode('fooValue');   // WHERE OedhWgTaxCode = 'fooValue'
     * $query->filterByOedhwgtaxcode('%fooValue%', Criteria::LIKE); // WHERE OedhWgTaxCode LIKE '%fooValue%'
     * $query->filterByOedhwgtaxcode(['foo', 'bar']); // WHERE OedhWgTaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhwgtaxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwgtaxcode($oedhwgtaxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhwgtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE, $oedhwgtaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWgPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwgprice(1234); // WHERE OedhWgPrice = 1234
     * $query->filterByOedhwgprice(array(12, 34)); // WHERE OedhWgPrice IN (12, 34)
     * $query->filterByOedhwgprice(array('min' => 12)); // WHERE OedhWgPrice > 12
     * </code>
     *
     * @param mixed $oedhwgprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwgprice($oedhwgprice = null, ?string $comparison = null)
    {
        if (is_array($oedhwgprice)) {
            $useMinMax = false;
            if (isset($oedhwgprice['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGPRICE, $oedhwgprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwgprice['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGPRICE, $oedhwgprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGPRICE, $oedhwgprice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWgTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwgtot(1234); // WHERE OedhWgTot = 1234
     * $query->filterByOedhwgtot(array(12, 34)); // WHERE OedhWgTot IN (12, 34)
     * $query->filterByOedhwgtot(array('min' => 12)); // WHERE OedhWgTot > 12
     * </code>
     *
     * @param mixed $oedhwgtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwgtot($oedhwgtot = null, ?string $comparison = null)
    {
        if (is_array($oedhwgtot)) {
            $useMinMax = false;
            if (isset($oedhwgtot['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGTOT, $oedhwgtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwgtot['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGTOT, $oedhwgtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGTOT, $oedhwgtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcntrqty(1234); // WHERE OedhCntrQty = 1234
     * $query->filterByOedhcntrqty(array(12, 34)); // WHERE OedhCntrQty IN (12, 34)
     * $query->filterByOedhcntrqty(array('min' => 12)); // WHERE OedhCntrQty > 12
     * </code>
     *
     * @param mixed $oedhcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcntrqty($oedhcntrqty = null, ?string $comparison = null)
    {
        if (is_array($oedhcntrqty)) {
            $useMinMax = false;
            if (isset($oedhcntrqty['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY, $oedhcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhcntrqty['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY, $oedhcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY, $oedhcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhConfirmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhconfirmcode('fooValue');   // WHERE OedhConfirmCode = 'fooValue'
     * $query->filterByOedhconfirmcode('%fooValue%', Criteria::LIKE); // WHERE OedhConfirmCode LIKE '%fooValue%'
     * $query->filterByOedhconfirmcode(['foo', 'bar']); // WHERE OedhConfirmCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhconfirmcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhconfirmcode($oedhconfirmcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhconfirmcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE, $oedhconfirmcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhPicked column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpicked('fooValue');   // WHERE OedhPicked = 'fooValue'
     * $query->filterByOedhpicked('%fooValue%', Criteria::LIKE); // WHERE OedhPicked LIKE '%fooValue%'
     * $query->filterByOedhpicked(['foo', 'bar']); // WHERE OedhPicked IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhpicked The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhpicked($oedhpicked = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpicked)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKED, $oedhpicked, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOrigRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhorigrqstdate('fooValue');   // WHERE OedhOrigRqstDate = 'fooValue'
     * $query->filterByOedhorigrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedhOrigRqstDate LIKE '%fooValue%'
     * $query->filterByOedhorigrqstdate(['foo', 'bar']); // WHERE OedhOrigRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhorigrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhorigrqstdate($oedhorigrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhorigrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE, $oedhorigrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhFabLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfablock('fooValue');   // WHERE OedhFabLock = 'fooValue'
     * $query->filterByOedhfablock('%fooValue%', Criteria::LIKE); // WHERE OedhFabLock LIKE '%fooValue%'
     * $query->filterByOedhfablock(['foo', 'bar']); // WHERE OedhFabLock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhfablock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhfablock($oedhfablock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhfablock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFABLOCK, $oedhfablock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLabelPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlabelprinted('fooValue');   // WHERE OedhLabelPrinted = 'fooValue'
     * $query->filterByOedhlabelprinted('%fooValue%', Criteria::LIKE); // WHERE OedhLabelPrinted LIKE '%fooValue%'
     * $query->filterByOedhlabelprinted(['foo', 'bar']); // WHERE OedhLabelPrinted IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhlabelprinted The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhlabelprinted($oedhlabelprinted = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhlabelprinted)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED, $oedhlabelprinted, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhQuoteId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhquoteid('fooValue');   // WHERE OedhQuoteId = 'fooValue'
     * $query->filterByOedhquoteid('%fooValue%', Criteria::LIKE); // WHERE OedhQuoteId LIKE '%fooValue%'
     * $query->filterByOedhquoteid(['foo', 'bar']); // WHERE OedhQuoteId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhquoteid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhquoteid($oedhquoteid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhquoteid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQUOTEID, $oedhquoteid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhInvPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhinvprinted('fooValue');   // WHERE OedhInvPrinted = 'fooValue'
     * $query->filterByOedhinvprinted('%fooValue%', Criteria::LIKE); // WHERE OedhInvPrinted LIKE '%fooValue%'
     * $query->filterByOedhinvprinted(['foo', 'bar']); // WHERE OedhInvPrinted IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhinvprinted The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhinvprinted($oedhinvprinted = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhinvprinted)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHINVPRINTED, $oedhinvprinted, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhStockCheck column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhstockcheck('fooValue');   // WHERE OedhStockCheck = 'fooValue'
     * $query->filterByOedhstockcheck('%fooValue%', Criteria::LIKE); // WHERE OedhStockCheck LIKE '%fooValue%'
     * $query->filterByOedhstockcheck(['foo', 'bar']); // WHERE OedhStockCheck IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhstockcheck The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhstockcheck($oedhstockcheck = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhstockcheck)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSTOCKCHECK, $oedhstockcheck, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhShouldWeSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhshouldwesplit('fooValue');   // WHERE OedhShouldWeSplit = 'fooValue'
     * $query->filterByOedhshouldwesplit('%fooValue%', Criteria::LIKE); // WHERE OedhShouldWeSplit LIKE '%fooValue%'
     * $query->filterByOedhshouldwesplit(['foo', 'bar']); // WHERE OedhShouldWeSplit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhshouldwesplit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhshouldwesplit($oedhshouldwesplit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhshouldwesplit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT, $oedhshouldwesplit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCofcReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcofcreqd('fooValue');   // WHERE OedhCofcReqd = 'fooValue'
     * $query->filterByOedhcofcreqd('%fooValue%', Criteria::LIKE); // WHERE OedhCofcReqd LIKE '%fooValue%'
     * $query->filterByOedhcofcreqd(['foo', 'bar']); // WHERE OedhCofcReqd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcofcreqd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcofcreqd($oedhcofcreqd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcofcreqd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOFCREQD, $oedhcofcreqd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAckCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhackcode('fooValue');   // WHERE OedhAckCode = 'fooValue'
     * $query->filterByOedhackcode('%fooValue%', Criteria::LIKE); // WHERE OedhAckCode LIKE '%fooValue%'
     * $query->filterByOedhackcode(['foo', 'bar']); // WHERE OedhAckCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhackcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhackcode($oedhackcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhackcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACKCODE, $oedhackcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWiBordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwibordnbr('fooValue');   // WHERE OedhWiBordNbr = 'fooValue'
     * $query->filterByOedhwibordnbr('%fooValue%', Criteria::LIKE); // WHERE OedhWiBordNbr LIKE '%fooValue%'
     * $query->filterByOedhwibordnbr(['foo', 'bar']); // WHERE OedhWiBordNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhwibordnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwibordnbr($oedhwibordnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhwibordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR, $oedhwibordnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCertHistOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcerthistordr('fooValue');   // WHERE OedhCertHistOrdr = 'fooValue'
     * $query->filterByOedhcerthistordr('%fooValue%', Criteria::LIKE); // WHERE OedhCertHistOrdr LIKE '%fooValue%'
     * $query->filterByOedhcerthistordr(['foo', 'bar']); // WHERE OedhCertHistOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcerthistordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcerthistordr($oedhcerthistordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcerthistordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR, $oedhcerthistordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhCertHistLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcerthistline('fooValue');   // WHERE OedhCertHistLine = 'fooValue'
     * $query->filterByOedhcerthistline('%fooValue%', Criteria::LIKE); // WHERE OedhCertHistLine LIKE '%fooValue%'
     * $query->filterByOedhcerthistline(['foo', 'bar']); // WHERE OedhCertHistLine IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhcerthistline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhcerthistline($oedhcerthistline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcerthistline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE, $oedhcerthistline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOrdrdAsItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhordrdasitemid('fooValue');   // WHERE OedhOrdrdAsItemId = 'fooValue'
     * $query->filterByOedhordrdasitemid('%fooValue%', Criteria::LIKE); // WHERE OedhOrdrdAsItemId LIKE '%fooValue%'
     * $query->filterByOedhordrdasitemid(['foo', 'bar']); // WHERE OedhOrdrdAsItemId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhordrdasitemid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhordrdasitemid($oedhordrdasitemid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhordrdasitemid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID, $oedhordrdasitemid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWiBatch1Nbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwibatch1nbr(1234); // WHERE OedhWiBatch1Nbr = 1234
     * $query->filterByOedhwibatch1nbr(array(12, 34)); // WHERE OedhWiBatch1Nbr IN (12, 34)
     * $query->filterByOedhwibatch1nbr(array('min' => 12)); // WHERE OedhWiBatch1Nbr > 12
     * </code>
     *
     * @param mixed $oedhwibatch1nbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwibatch1nbr($oedhwibatch1nbr = null, ?string $comparison = null)
    {
        if (is_array($oedhwibatch1nbr)) {
            $useMinMax = false;
            if (isset($oedhwibatch1nbr['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR, $oedhwibatch1nbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwibatch1nbr['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR, $oedhwibatch1nbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR, $oedhwibatch1nbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWiBatch1Qty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwibatch1qty(1234); // WHERE OedhWiBatch1Qty = 1234
     * $query->filterByOedhwibatch1qty(array(12, 34)); // WHERE OedhWiBatch1Qty IN (12, 34)
     * $query->filterByOedhwibatch1qty(array('min' => 12)); // WHERE OedhWiBatch1Qty > 12
     * </code>
     *
     * @param mixed $oedhwibatch1qty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwibatch1qty($oedhwibatch1qty = null, ?string $comparison = null)
    {
        if (is_array($oedhwibatch1qty)) {
            $useMinMax = false;
            if (isset($oedhwibatch1qty['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY, $oedhwibatch1qty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwibatch1qty['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY, $oedhwibatch1qty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY, $oedhwibatch1qty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhWiBatch1Stat column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwibatch1stat('fooValue');   // WHERE OedhWiBatch1Stat = 'fooValue'
     * $query->filterByOedhwibatch1stat('%fooValue%', Criteria::LIKE); // WHERE OedhWiBatch1Stat LIKE '%fooValue%'
     * $query->filterByOedhwibatch1stat(['foo', 'bar']); // WHERE OedhWiBatch1Stat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhwibatch1stat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhwibatch1stat($oedhwibatch1stat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhwibatch1stat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT, $oedhwibatch1stat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhRgaNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhrganbr(1234); // WHERE OedhRgaNbr = 1234
     * $query->filterByOedhrganbr(array(12, 34)); // WHERE OedhRgaNbr IN (12, 34)
     * $query->filterByOedhrganbr(array('min' => 12)); // WHERE OedhRgaNbr > 12
     * </code>
     *
     * @param mixed $oedhrganbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhrganbr($oedhrganbr = null, ?string $comparison = null)
    {
        if (is_array($oedhrganbr)) {
            $useMinMax = false;
            if (isset($oedhrganbr['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRGANBR, $oedhrganbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhrganbr['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRGANBR, $oedhrganbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRGANBR, $oedhrganbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhOrigPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhorigpric(1234); // WHERE OedhOrigPric = 1234
     * $query->filterByOedhorigpric(array(12, 34)); // WHERE OedhOrigPric IN (12, 34)
     * $query->filterByOedhorigpric(array('min' => 12)); // WHERE OedhOrigPric > 12
     * </code>
     *
     * @param mixed $oedhorigpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhorigpric($oedhorigpric = null, ?string $comparison = null)
    {
        if (is_array($oedhorigpric)) {
            $useMinMax = false;
            if (isset($oedhorigpric['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC, $oedhorigpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhorigpric['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC, $oedhorigpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC, $oedhorigpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhRefLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhreflinenbr(1234); // WHERE OedhRefLineNbr = 1234
     * $query->filterByOedhreflinenbr(array(12, 34)); // WHERE OedhRefLineNbr IN (12, 34)
     * $query->filterByOedhreflinenbr(array('min' => 12)); // WHERE OedhRefLineNbr > 12
     * </code>
     *
     * @param mixed $oedhreflinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhreflinenbr($oedhreflinenbr = null, ?string $comparison = null)
    {
        if (is_array($oedhreflinenbr)) {
            $useMinMax = false;
            if (isset($oedhreflinenbr['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR, $oedhreflinenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhreflinenbr['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR, $oedhreflinenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR, $oedhreflinenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhBinLocn column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbinlocn('fooValue');   // WHERE OedhBinLocn = 'fooValue'
     * $query->filterByOedhbinlocn('%fooValue%', Criteria::LIKE); // WHERE OedhBinLocn LIKE '%fooValue%'
     * $query->filterByOedhbinlocn(['foo', 'bar']); // WHERE OedhBinLocn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhbinlocn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhbinlocn($oedhbinlocn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbinlocn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBINLOCN, $oedhbinlocn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcSuplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacsuplywhse('fooValue');   // WHERE OedhAcSuplyWhse = 'fooValue'
     * $query->filterByOedhacsuplywhse('%fooValue%', Criteria::LIKE); // WHERE OedhAcSuplyWhse LIKE '%fooValue%'
     * $query->filterByOedhacsuplywhse(['foo', 'bar']); // WHERE OedhAcSuplyWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacsuplywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacsuplywhse($oedhacsuplywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacsuplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE, $oedhacsuplywhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhAcPricDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacpricdate('fooValue');   // WHERE OedhAcPricDate = 'fooValue'
     * $query->filterByOedhacpricdate('%fooValue%', Criteria::LIKE); // WHERE OedhAcPricDate LIKE '%fooValue%'
     * $query->filterByOedhacpricdate(['foo', 'bar']); // WHERE OedhAcPricDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedhacpricdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhacpricdate($oedhacpricdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacpricdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACPRICDATE, $oedhacpricdate, $comparison);

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

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SalesHistoryDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \SalesHistory object
     *
     * @param \SalesHistory|ObjectCollection $salesHistory The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, ?string $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            return $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $salesHistory->getOehhnbr(), $comparison);
        } elseif ($salesHistory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $salesHistory->toKeyValue('PrimaryKey', 'Oehhnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesHistory');
        }

        return $this;
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistory', '\SalesHistoryQuery');
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @param callable(\SalesHistoryQuery):\SalesHistoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT EXISTS query.
     *
     * @see useSalesHistoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT IN query.
     *
     * @see useSalesHistoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistoryLotserial object
     *
     * @param \SalesHistoryLotserial|ObjectCollection $salesHistoryLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistoryLotserial($salesHistoryLotserial, ?string $comparison = null)
    {
        if ($salesHistoryLotserial instanceof \SalesHistoryLotserial) {
            $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $salesHistoryLotserial->getOehhnbr(), $comparison)
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLINE, $salesHistoryLotserial->getOedhline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesHistoryLotserial() only accepts arguments of type \SalesHistoryLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistoryLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistoryLotserial');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesHistoryLotserial');
        }

        return $this;
    }

    /**
     * Use the SalesHistoryLotserial relation SalesHistoryLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistoryLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistoryLotserial', '\SalesHistoryLotserialQuery');
    }

    /**
     * Use the SalesHistoryLotserial relation SalesHistoryLotserial object
     *
     * @param callable(\SalesHistoryLotserialQuery):\SalesHistoryLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useExistsQuery('SalesHistoryLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for a NOT EXISTS query.
     *
     * @see useSalesHistoryLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useExistsQuery('SalesHistoryLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useInQuery('SalesHistoryLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for a NOT IN query.
     *
     * @see useSalesHistoryLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useInQuery('SalesHistoryLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSalesHistoryDetail $salesHistoryDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($salesHistoryDetail = null)
    {
        if ($salesHistoryDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesHistoryDetailTableMap::COL_OEHHNBR), $salesHistoryDetail->getOehhnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesHistoryDetailTableMap::COL_OEDHLINE), $salesHistoryDetail->getOedhline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_det_hist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesHistoryDetailTableMap::clearInstancePool();
            SalesHistoryDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesHistoryDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesHistoryDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesHistoryDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
