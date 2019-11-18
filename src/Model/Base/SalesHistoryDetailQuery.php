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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_det_hist' table.
 *
 *
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
 * @method     ChildSalesHistoryDetailQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
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
 * @method     ChildSalesHistoryDetailQuery orderByOedhwght($order = Criteria::ASC) Order by the OedhWght column
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
 * @method     ChildSalesHistoryDetailQuery orderByOedtstockcheck($order = Criteria::ASC) Order by the OedtStockCheck column
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
 * @method     ChildSalesHistoryDetailQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
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
 * @method     ChildSalesHistoryDetailQuery groupByOedhwght() Group by the OedhWght column
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
 * @method     ChildSalesHistoryDetailQuery groupByOedtstockcheck() Group by the OedtStockCheck column
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
 * @method     \SalesHistoryQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesHistoryDetail findOne(ConnectionInterface $con = null) Return the first ChildSalesHistoryDetail matching the query
 * @method     ChildSalesHistoryDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesHistoryDetail matching the query, or a new ChildSalesHistoryDetail object populated from the query conditions when no match is found
 *
 * @method     ChildSalesHistoryDetail findOneByOehhnbr(string $OehhNbr) Return the first ChildSalesHistoryDetail filtered by the OehhNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhline(int $OedhLine) Return the first ChildSalesHistoryDetail filtered by the OedhLine column
 * @method     ChildSalesHistoryDetail findOneByOedhyear(string $OedhYear) Return the first ChildSalesHistoryDetail filtered by the OedhYear column
 * @method     ChildSalesHistoryDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesHistoryDetail filtered by the InitItemNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhdesc(string $OedhDesc) Return the first ChildSalesHistoryDetail filtered by the OedhDesc column
 * @method     ChildSalesHistoryDetail findOneByOedhdesc2(string $OedhDesc2) Return the first ChildSalesHistoryDetail filtered by the OedhDesc2 column
 * @method     ChildSalesHistoryDetail findOneByIntbwhse(string $IntbWhse) Return the first ChildSalesHistoryDetail filtered by the IntbWhse column
 * @method     ChildSalesHistoryDetail findOneByOedhrqstdate(string $OedhRqstDate) Return the first ChildSalesHistoryDetail filtered by the OedhRqstDate column
 * @method     ChildSalesHistoryDetail findOneByOedhcancdate(string $OedhCancDate) Return the first ChildSalesHistoryDetail filtered by the OedhCancDate column
 * @method     ChildSalesHistoryDetail findOneByOedhshipdate(string $OedhShipDate) Return the first ChildSalesHistoryDetail filtered by the OedhShipDate column
 * @method     ChildSalesHistoryDetail findOneByOedhspecordr(string $OedhSpecOrdr) Return the first ChildSalesHistoryDetail filtered by the OedhSpecOrdr column
 * @method     ChildSalesHistoryDetail findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildSalesHistoryDetail filtered by the ArtbMtaxCode column
 * @method     ChildSalesHistoryDetail findOneByOedhqtyord(string $OedhQtyOrd) Return the first ChildSalesHistoryDetail filtered by the OedhQtyOrd column
 * @method     ChildSalesHistoryDetail findOneByOedhqtyship(string $OedhQtyShip) Return the first ChildSalesHistoryDetail filtered by the OedhQtyShip column
 * @method     ChildSalesHistoryDetail findOneByOedhqtyshiptot(string $OedhQtyShipTot) Return the first ChildSalesHistoryDetail filtered by the OedhQtyShipTot column
 * @method     ChildSalesHistoryDetail findOneByOedhqtybord(string $OedhQtyBord) Return the first ChildSalesHistoryDetail filtered by the OedhQtyBord column
 * @method     ChildSalesHistoryDetail findOneByOedhpric(string $OedhPric) Return the first ChildSalesHistoryDetail filtered by the OedhPric column
 * @method     ChildSalesHistoryDetail findOneByOedhcost(string $OedhCost) Return the first ChildSalesHistoryDetail filtered by the OedhCost column
 * @method     ChildSalesHistoryDetail findOneByOedhtaxpcttot(string $OedhTaxPctTot) Return the first ChildSalesHistoryDetail filtered by the OedhTaxPctTot column
 * @method     ChildSalesHistoryDetail findOneByOedhprictot(string $OedhPricTot) Return the first ChildSalesHistoryDetail filtered by the OedhPricTot column
 * @method     ChildSalesHistoryDetail findOneByOedhcosttot(string $OedhCostTot) Return the first ChildSalesHistoryDetail filtered by the OedhCostTot column
 * @method     ChildSalesHistoryDetail findOneByOedhspcommpct(string $OedhSpCommPct) Return the first ChildSalesHistoryDetail filtered by the OedhSpCommPct column
 * @method     ChildSalesHistoryDetail findOneByOedhbrkncaseqty(int $OedhBrknCaseQty) Return the first ChildSalesHistoryDetail filtered by the OedhBrknCaseQty column
 * @method     ChildSalesHistoryDetail findOneByOedhbin(string $OedhBin) Return the first ChildSalesHistoryDetail filtered by the OedhBin column
 * @method     ChildSalesHistoryDetail findOneByOedhpersonalcd(string $OedhPersonalCd) Return the first ChildSalesHistoryDetail filtered by the OedhPersonalCd column
 * @method     ChildSalesHistoryDetail findOneByOedhacdisc1(string $OedhAcDisc1) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc1 column
 * @method     ChildSalesHistoryDetail findOneByOedhacdisc2(string $OedhAcDisc2) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc2 column
 * @method     ChildSalesHistoryDetail findOneByOedhacdisc3(string $OedhAcDisc3) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc3 column
 * @method     ChildSalesHistoryDetail findOneByOedhacdisc4(string $OedhAcDisc4) Return the first ChildSalesHistoryDetail filtered by the OedhAcDisc4 column
 * @method     ChildSalesHistoryDetail findOneByOedhlmwipnbr(string $OedhLmWipNbr) Return the first ChildSalesHistoryDetail filtered by the OedhLmWipNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhcorepric(string $OedhCorePric) Return the first ChildSalesHistoryDetail filtered by the OedhCorePric column
 * @method     ChildSalesHistoryDetail findOneByOedhasstcode(string $OedhAsstCode) Return the first ChildSalesHistoryDetail filtered by the OedhAsstCode column
 * @method     ChildSalesHistoryDetail findOneByOedhasstqty(string $OedhAsstQty) Return the first ChildSalesHistoryDetail filtered by the OedhAsstQty column
 * @method     ChildSalesHistoryDetail findOneByOedhlistpric(string $OedhListPric) Return the first ChildSalesHistoryDetail filtered by the OedhListPric column
 * @method     ChildSalesHistoryDetail findOneByOedhstancost(string $OedhStanCost) Return the first ChildSalesHistoryDetail filtered by the OedhStanCost column
 * @method     ChildSalesHistoryDetail findOneByOedhvenditemjob(string $OedhVendItemJob) Return the first ChildSalesHistoryDetail filtered by the OedhVendItemJob column
 * @method     ChildSalesHistoryDetail findOneByOedhnsvendid(string $OedhNsVendId) Return the first ChildSalesHistoryDetail filtered by the OedhNsVendId column
 * @method     ChildSalesHistoryDetail findOneByOedhnsitemgrup(string $OedhNsItemGrup) Return the first ChildSalesHistoryDetail filtered by the OedhNsItemGrup column
 * @method     ChildSalesHistoryDetail findOneByOedhusecode(string $OedhUseCode) Return the first ChildSalesHistoryDetail filtered by the OedhUseCode column
 * @method     ChildSalesHistoryDetail findOneByOedhnsshipfromid(string $OedhNsShipFromId) Return the first ChildSalesHistoryDetail filtered by the OedhNsShipFromId column
 * @method     ChildSalesHistoryDetail findOneByOedhasstovrd(string $OedhAsstOvrd) Return the first ChildSalesHistoryDetail filtered by the OedhAsstOvrd column
 * @method     ChildSalesHistoryDetail findOneByOedhpricovrd(string $OedhPricOvrd) Return the first ChildSalesHistoryDetail filtered by the OedhPricOvrd column
 * @method     ChildSalesHistoryDetail findOneByOedhpickflag(string $OedhPickFlag) Return the first ChildSalesHistoryDetail filtered by the OedhPickFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode1(string $OedhMstrTaxCode1) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode1 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct1(string $OedhMstrTaxPct1) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct1 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode2(string $OedhMstrTaxCode2) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode2 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct2(string $OedhMstrTaxPct2) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct2 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode3(string $OedhMstrTaxCode3) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode3 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct3(string $OedhMstrTaxPct3) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct3 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode4(string $OedhMstrTaxCode4) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode4 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct4(string $OedhMstrTaxPct4) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct4 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode5(string $OedhMstrTaxCode5) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode5 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct5(string $OedhMstrTaxPct5) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct5 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode6(string $OedhMstrTaxCode6) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode6 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct6(string $OedhMstrTaxPct6) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct6 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode7(string $OedhMstrTaxCode7) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode7 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct7(string $OedhMstrTaxPct7) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct7 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode8(string $OedhMstrTaxCode8) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode8 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct8(string $OedhMstrTaxPct8) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct8 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxcode9(string $OedhMstrTaxCode9) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxCode9 column
 * @method     ChildSalesHistoryDetail findOneByOedhmstrtaxpct9(string $OedhMstrTaxPct9) Return the first ChildSalesHistoryDetail filtered by the OedhMstrTaxPct9 column
 * @method     ChildSalesHistoryDetail findOneByOedhbinarea(string $OedhBinArea) Return the first ChildSalesHistoryDetail filtered by the OedhBinArea column
 * @method     ChildSalesHistoryDetail findOneByOedhsplitline(string $OedhSplitLine) Return the first ChildSalesHistoryDetail filtered by the OedhSplitLine column
 * @method     ChildSalesHistoryDetail findOneByOedhlostreas(string $OedhLostReas) Return the first ChildSalesHistoryDetail filtered by the OedhLostReas column
 * @method     ChildSalesHistoryDetail findOneByOedhorigline(int $OedhOrigLine) Return the first ChildSalesHistoryDetail filtered by the OedhOrigLine column
 * @method     ChildSalesHistoryDetail findOneByOedhcustcrssref(string $OedhCustCrssRef) Return the first ChildSalesHistoryDetail filtered by the OedhCustCrssRef column
 * @method     ChildSalesHistoryDetail findOneByOedhuom(string $OedhUom) Return the first ChildSalesHistoryDetail filtered by the OedhUom column
 * @method     ChildSalesHistoryDetail findOneByOedhshipflag(string $OedhShipFlag) Return the first ChildSalesHistoryDetail filtered by the OedhShipFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhkitflag(string $OedhKitFlag) Return the first ChildSalesHistoryDetail filtered by the OedhKitFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhkititemnbr(string $OedhKitItemNbr) Return the first ChildSalesHistoryDetail filtered by the OedhKitItemNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhbfcost(string $OedhBfCost) Return the first ChildSalesHistoryDetail filtered by the OedhBfCost column
 * @method     ChildSalesHistoryDetail findOneByOedhbfmsgcode(string $OedhBfMsgCode) Return the first ChildSalesHistoryDetail filtered by the OedhBfMsgCode column
 * @method     ChildSalesHistoryDetail findOneByOedhbfcosttot(string $OedhBfCostTot) Return the first ChildSalesHistoryDetail filtered by the OedhBfCostTot column
 * @method     ChildSalesHistoryDetail findOneByOedhlmbulkpric(string $OedhLmBulkPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmBulkPric column
 * @method     ChildSalesHistoryDetail findOneByOedhlmmtrxpkgpric(string $OedhLmMtrxPkgPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmMtrxPkgPric column
 * @method     ChildSalesHistoryDetail findOneByOedhlmmtrxbulkpric(string $OedhLmMtrxBulkPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmMtrxBulkPric column
 * @method     ChildSalesHistoryDetail findOneByOedhlmcontractpric(string $OedhLmContractPric) Return the first ChildSalesHistoryDetail filtered by the OedhLmContractPric column
 * @method     ChildSalesHistoryDetail findOneByOedhwght(string $OedhWght) Return the first ChildSalesHistoryDetail filtered by the OedhWght column
 * @method     ChildSalesHistoryDetail findOneByOedhordras(string $OedhOrdrAs) Return the first ChildSalesHistoryDetail filtered by the OedhOrdrAs column
 * @method     ChildSalesHistoryDetail findOneByOedhpodetlinenbr(int $OedhPoDetLineNbr) Return the first ChildSalesHistoryDetail filtered by the OedhPoDetLineNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhqtytoship(string $OedhQtyToShip) Return the first ChildSalesHistoryDetail filtered by the OedhQtyToShip column
 * @method     ChildSalesHistoryDetail findOneByOedhponbr(string $OedhPoNbr) Return the first ChildSalesHistoryDetail filtered by the OedhPoNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhporef(string $OedhPoRef) Return the first ChildSalesHistoryDetail filtered by the OedhPoRef column
 * @method     ChildSalesHistoryDetail findOneByOedhfrtin(string $OedhFrtIn) Return the first ChildSalesHistoryDetail filtered by the OedhFrtIn column
 * @method     ChildSalesHistoryDetail findOneByOedhfrtinentered(string $OedhFrtInEntered) Return the first ChildSalesHistoryDetail filtered by the OedhFrtInEntered column
 * @method     ChildSalesHistoryDetail findOneByOedhprodcmplt(string $OedhProdCmplt) Return the first ChildSalesHistoryDetail filtered by the OedhProdCmplt column
 * @method     ChildSalesHistoryDetail findOneByOedherflag(string $OedhErFlag) Return the first ChildSalesHistoryDetail filtered by the OedhErFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhorigitem(string $OedhOrigItem) Return the first ChildSalesHistoryDetail filtered by the OedhOrigItem column
 * @method     ChildSalesHistoryDetail findOneByOedhsubflag(string $OedhSubFlag) Return the first ChildSalesHistoryDetail filtered by the OedhSubFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhediincomingseq(int $OedhEdiIncomingSeq) Return the first ChildSalesHistoryDetail filtered by the OedhEdiIncomingSeq column
 * @method     ChildSalesHistoryDetail findOneByOedhspordpoline(int $OedhSpordPoLine) Return the first ChildSalesHistoryDetail filtered by the OedhSpordPoLine column
 * @method     ChildSalesHistoryDetail findOneByOedhcatlgid(string $OedhCatlgId) Return the first ChildSalesHistoryDetail filtered by the OedhCatlgId column
 * @method     ChildSalesHistoryDetail findOneByOedhdesigncd(string $OedhDesignCd) Return the first ChildSalesHistoryDetail filtered by the OedhDesignCd column
 * @method     ChildSalesHistoryDetail findOneByOedhdiscpct(string $OedhDiscPct) Return the first ChildSalesHistoryDetail filtered by the OedhDiscPct column
 * @method     ChildSalesHistoryDetail findOneByOedhtaxamt(string $OedhTaxAmt) Return the first ChildSalesHistoryDetail filtered by the OedhTaxAmt column
 * @method     ChildSalesHistoryDetail findOneByOedhxusage(string $OedhXUsage) Return the first ChildSalesHistoryDetail filtered by the OedhXUsage column
 * @method     ChildSalesHistoryDetail findOneByOedhrqtslock(string $OedhRqtsLock) Return the first ChildSalesHistoryDetail filtered by the OedhRqtsLock column
 * @method     ChildSalesHistoryDetail findOneByOedhfreshfrozen(string $OedhFreshFrozen) Return the first ChildSalesHistoryDetail filtered by the OedhFreshFrozen column
 * @method     ChildSalesHistoryDetail findOneByOedhcoreflag(string $OedhCoreFlag) Return the first ChildSalesHistoryDetail filtered by the OedhCoreFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhnssalesacct(string $OedhNsSalesAcct) Return the first ChildSalesHistoryDetail filtered by the OedhNsSalesAcct column
 * @method     ChildSalesHistoryDetail findOneByOedhcertreqd(string $OedhCertReqd) Return the first ChildSalesHistoryDetail filtered by the OedhCertReqd column
 * @method     ChildSalesHistoryDetail findOneByOedhaddonsales(string $OedhAddOnSales) Return the first ChildSalesHistoryDetail filtered by the OedhAddOnSales column
 * @method     ChildSalesHistoryDetail findOneByOedhbordflag(string $OedhBordFlag) Return the first ChildSalesHistoryDetail filtered by the OedhBordFlag column
 * @method     ChildSalesHistoryDetail findOneByOedhtempgrove(string $OedhTempGrove) Return the first ChildSalesHistoryDetail filtered by the OedhTempGrove column
 * @method     ChildSalesHistoryDetail findOneByOedhgrovedisc(string $OedhGroveDisc) Return the first ChildSalesHistoryDetail filtered by the OedhGroveDisc column
 * @method     ChildSalesHistoryDetail findOneByOedhoffinvc(string $OedhOffInvc) Return the first ChildSalesHistoryDetail filtered by the OedhOffInvc column
 * @method     ChildSalesHistoryDetail findOneByInititemgrup(string $InitItemGrup) Return the first ChildSalesHistoryDetail filtered by the InitItemGrup column
 * @method     ChildSalesHistoryDetail findOneByApvevendid(string $ApveVendId) Return the first ChildSalesHistoryDetail filtered by the ApveVendId column
 * @method     ChildSalesHistoryDetail findOneByOedhacct(string $OedhAcct) Return the first ChildSalesHistoryDetail filtered by the OedhAcct column
 * @method     ChildSalesHistoryDetail findOneByOedhloadtot(string $OedhLoadTot) Return the first ChildSalesHistoryDetail filtered by the OedhLoadTot column
 * @method     ChildSalesHistoryDetail findOneByOedhpickedqty(string $OedhPickedQty) Return the first ChildSalesHistoryDetail filtered by the OedhPickedQty column
 * @method     ChildSalesHistoryDetail findOneByOedhwiorigqty(string $OedhWiOrigQty) Return the first ChildSalesHistoryDetail filtered by the OedhWiOrigQty column
 * @method     ChildSalesHistoryDetail findOneByOedhmargintot(string $OedhMarginTot) Return the first ChildSalesHistoryDetail filtered by the OedhMarginTot column
 * @method     ChildSalesHistoryDetail findOneByOedhcorecost(string $OedhCoreCost) Return the first ChildSalesHistoryDetail filtered by the OedhCoreCost column
 * @method     ChildSalesHistoryDetail findOneByOedhitemref(string $OedhItemRef) Return the first ChildSalesHistoryDetail filtered by the OedhItemRef column
 * @method     ChildSalesHistoryDetail findOneByOedhsac02returncode(string $OedhSac02ReturnCode) Return the first ChildSalesHistoryDetail filtered by the OedhSac02ReturnCode column
 * @method     ChildSalesHistoryDetail findOneByOedhwgtaxcode(string $OedhWgTaxCode) Return the first ChildSalesHistoryDetail filtered by the OedhWgTaxCode column
 * @method     ChildSalesHistoryDetail findOneByOedhwgprice(string $OedhWgPrice) Return the first ChildSalesHistoryDetail filtered by the OedhWgPrice column
 * @method     ChildSalesHistoryDetail findOneByOedhwgtot(string $OedhWgTot) Return the first ChildSalesHistoryDetail filtered by the OedhWgTot column
 * @method     ChildSalesHistoryDetail findOneByOedhcntrqty(int $OedhCntrQty) Return the first ChildSalesHistoryDetail filtered by the OedhCntrQty column
 * @method     ChildSalesHistoryDetail findOneByOedhconfirmcode(string $OedhConfirmCode) Return the first ChildSalesHistoryDetail filtered by the OedhConfirmCode column
 * @method     ChildSalesHistoryDetail findOneByOedhpicked(string $OedhPicked) Return the first ChildSalesHistoryDetail filtered by the OedhPicked column
 * @method     ChildSalesHistoryDetail findOneByOedhorigrqstdate(string $OedhOrigRqstDate) Return the first ChildSalesHistoryDetail filtered by the OedhOrigRqstDate column
 * @method     ChildSalesHistoryDetail findOneByOedhfablock(string $OedhFabLock) Return the first ChildSalesHistoryDetail filtered by the OedhFabLock column
 * @method     ChildSalesHistoryDetail findOneByOedhlabelprinted(string $OedhLabelPrinted) Return the first ChildSalesHistoryDetail filtered by the OedhLabelPrinted column
 * @method     ChildSalesHistoryDetail findOneByOedhquoteid(string $OedhQuoteId) Return the first ChildSalesHistoryDetail filtered by the OedhQuoteId column
 * @method     ChildSalesHistoryDetail findOneByOedhinvprinted(string $OedhInvPrinted) Return the first ChildSalesHistoryDetail filtered by the OedhInvPrinted column
 * @method     ChildSalesHistoryDetail findOneByOedtstockcheck(string $OedtStockCheck) Return the first ChildSalesHistoryDetail filtered by the OedtStockCheck column
 * @method     ChildSalesHistoryDetail findOneByOedhshouldwesplit(string $OedhShouldWeSplit) Return the first ChildSalesHistoryDetail filtered by the OedhShouldWeSplit column
 * @method     ChildSalesHistoryDetail findOneByOedhcofcreqd(string $OedhCofcReqd) Return the first ChildSalesHistoryDetail filtered by the OedhCofcReqd column
 * @method     ChildSalesHistoryDetail findOneByOedhackcode(string $OedhAckCode) Return the first ChildSalesHistoryDetail filtered by the OedhAckCode column
 * @method     ChildSalesHistoryDetail findOneByOedhwibordnbr(string $OedhWiBordNbr) Return the first ChildSalesHistoryDetail filtered by the OedhWiBordNbr column
 * @method     ChildSalesHistoryDetail findOneByOedhcerthistordr(string $OedhCertHistOrdr) Return the first ChildSalesHistoryDetail filtered by the OedhCertHistOrdr column
 * @method     ChildSalesHistoryDetail findOneByOedhcerthistline(string $OedhCertHistLine) Return the first ChildSalesHistoryDetail filtered by the OedhCertHistLine column
 * @method     ChildSalesHistoryDetail findOneByOedhordrdasitemid(string $OedhOrdrdAsItemId) Return the first ChildSalesHistoryDetail filtered by the OedhOrdrdAsItemId column
 * @method     ChildSalesHistoryDetail findOneByOedhwibatch1nbr(int $OedhWiBatch1Nbr) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Nbr column
 * @method     ChildSalesHistoryDetail findOneByOedhwibatch1qty(string $OedhWiBatch1Qty) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Qty column
 * @method     ChildSalesHistoryDetail findOneByOedhwibatch1stat(string $OedhWiBatch1Stat) Return the first ChildSalesHistoryDetail filtered by the OedhWiBatch1Stat column
 * @method     ChildSalesHistoryDetail findOneByOedhrganbr(int $OedhRgaNbr) Return the first ChildSalesHistoryDetail filtered by the OedhRgaNbr column
 * @method     ChildSalesHistoryDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistoryDetail filtered by the DateUpdtd column
 * @method     ChildSalesHistoryDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistoryDetail filtered by the TimeUpdtd column
 * @method     ChildSalesHistoryDetail findOneByDummy(string $dummy) Return the first ChildSalesHistoryDetail filtered by the dummy column *

 * @method     ChildSalesHistoryDetail requirePk($key, ConnectionInterface $con = null) Return the ChildSalesHistoryDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOne(ConnectionInterface $con = null) Return the first ChildSalesHistoryDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistoryDetail requireOneByOehhnbr(string $OehhNbr) Return the first ChildSalesHistoryDetail filtered by the OehhNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildSalesHistoryDetail requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildSalesHistoryDetail filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildSalesHistoryDetail requireOneByOedhwght(string $OedhWght) Return the first ChildSalesHistoryDetail filtered by the OedhWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildSalesHistoryDetail requireOneByOedtstockcheck(string $OedtStockCheck) Return the first ChildSalesHistoryDetail filtered by the OedtStockCheck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildSalesHistoryDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistoryDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistoryDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryDetail requireOneByDummy(string $dummy) Return the first ChildSalesHistoryDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistoryDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesHistoryDetail objects based on current ModelCriteria
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOehhnbr(string $OehhNbr) Return ChildSalesHistoryDetail objects filtered by the OehhNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhline(int $OedhLine) Return ChildSalesHistoryDetail objects filtered by the OedhLine column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhyear(string $OedhYear) Return ChildSalesHistoryDetail objects filtered by the OedhYear column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildSalesHistoryDetail objects filtered by the InitItemNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhdesc(string $OedhDesc) Return ChildSalesHistoryDetail objects filtered by the OedhDesc column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhdesc2(string $OedhDesc2) Return ChildSalesHistoryDetail objects filtered by the OedhDesc2 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildSalesHistoryDetail objects filtered by the IntbWhse column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhrqstdate(string $OedhRqstDate) Return ChildSalesHistoryDetail objects filtered by the OedhRqstDate column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcancdate(string $OedhCancDate) Return ChildSalesHistoryDetail objects filtered by the OedhCancDate column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhshipdate(string $OedhShipDate) Return ChildSalesHistoryDetail objects filtered by the OedhShipDate column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhspecordr(string $OedhSpecOrdr) Return ChildSalesHistoryDetail objects filtered by the OedhSpecOrdr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByArtbmtaxcode(string $ArtbMtaxCode) Return ChildSalesHistoryDetail objects filtered by the ArtbMtaxCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhqtyord(string $OedhQtyOrd) Return ChildSalesHistoryDetail objects filtered by the OedhQtyOrd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhqtyship(string $OedhQtyShip) Return ChildSalesHistoryDetail objects filtered by the OedhQtyShip column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhqtyshiptot(string $OedhQtyShipTot) Return ChildSalesHistoryDetail objects filtered by the OedhQtyShipTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhqtybord(string $OedhQtyBord) Return ChildSalesHistoryDetail objects filtered by the OedhQtyBord column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpric(string $OedhPric) Return ChildSalesHistoryDetail objects filtered by the OedhPric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcost(string $OedhCost) Return ChildSalesHistoryDetail objects filtered by the OedhCost column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhtaxpcttot(string $OedhTaxPctTot) Return ChildSalesHistoryDetail objects filtered by the OedhTaxPctTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhprictot(string $OedhPricTot) Return ChildSalesHistoryDetail objects filtered by the OedhPricTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcosttot(string $OedhCostTot) Return ChildSalesHistoryDetail objects filtered by the OedhCostTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhspcommpct(string $OedhSpCommPct) Return ChildSalesHistoryDetail objects filtered by the OedhSpCommPct column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbrkncaseqty(int $OedhBrknCaseQty) Return ChildSalesHistoryDetail objects filtered by the OedhBrknCaseQty column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbin(string $OedhBin) Return ChildSalesHistoryDetail objects filtered by the OedhBin column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpersonalcd(string $OedhPersonalCd) Return ChildSalesHistoryDetail objects filtered by the OedhPersonalCd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhacdisc1(string $OedhAcDisc1) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc1 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhacdisc2(string $OedhAcDisc2) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc2 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhacdisc3(string $OedhAcDisc3) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc3 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhacdisc4(string $OedhAcDisc4) Return ChildSalesHistoryDetail objects filtered by the OedhAcDisc4 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlmwipnbr(string $OedhLmWipNbr) Return ChildSalesHistoryDetail objects filtered by the OedhLmWipNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcorepric(string $OedhCorePric) Return ChildSalesHistoryDetail objects filtered by the OedhCorePric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhasstcode(string $OedhAsstCode) Return ChildSalesHistoryDetail objects filtered by the OedhAsstCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhasstqty(string $OedhAsstQty) Return ChildSalesHistoryDetail objects filtered by the OedhAsstQty column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlistpric(string $OedhListPric) Return ChildSalesHistoryDetail objects filtered by the OedhListPric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhstancost(string $OedhStanCost) Return ChildSalesHistoryDetail objects filtered by the OedhStanCost column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhvenditemjob(string $OedhVendItemJob) Return ChildSalesHistoryDetail objects filtered by the OedhVendItemJob column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhnsvendid(string $OedhNsVendId) Return ChildSalesHistoryDetail objects filtered by the OedhNsVendId column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhnsitemgrup(string $OedhNsItemGrup) Return ChildSalesHistoryDetail objects filtered by the OedhNsItemGrup column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhusecode(string $OedhUseCode) Return ChildSalesHistoryDetail objects filtered by the OedhUseCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhnsshipfromid(string $OedhNsShipFromId) Return ChildSalesHistoryDetail objects filtered by the OedhNsShipFromId column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhasstovrd(string $OedhAsstOvrd) Return ChildSalesHistoryDetail objects filtered by the OedhAsstOvrd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpricovrd(string $OedhPricOvrd) Return ChildSalesHistoryDetail objects filtered by the OedhPricOvrd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpickflag(string $OedhPickFlag) Return ChildSalesHistoryDetail objects filtered by the OedhPickFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode1(string $OedhMstrTaxCode1) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode1 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct1(string $OedhMstrTaxPct1) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct1 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode2(string $OedhMstrTaxCode2) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode2 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct2(string $OedhMstrTaxPct2) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct2 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode3(string $OedhMstrTaxCode3) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode3 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct3(string $OedhMstrTaxPct3) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct3 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode4(string $OedhMstrTaxCode4) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode4 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct4(string $OedhMstrTaxPct4) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct4 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode5(string $OedhMstrTaxCode5) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode5 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct5(string $OedhMstrTaxPct5) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct5 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode6(string $OedhMstrTaxCode6) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode6 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct6(string $OedhMstrTaxPct6) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct6 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode7(string $OedhMstrTaxCode7) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode7 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct7(string $OedhMstrTaxPct7) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct7 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode8(string $OedhMstrTaxCode8) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode8 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct8(string $OedhMstrTaxPct8) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct8 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxcode9(string $OedhMstrTaxCode9) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxCode9 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmstrtaxpct9(string $OedhMstrTaxPct9) Return ChildSalesHistoryDetail objects filtered by the OedhMstrTaxPct9 column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbinarea(string $OedhBinArea) Return ChildSalesHistoryDetail objects filtered by the OedhBinArea column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhsplitline(string $OedhSplitLine) Return ChildSalesHistoryDetail objects filtered by the OedhSplitLine column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlostreas(string $OedhLostReas) Return ChildSalesHistoryDetail objects filtered by the OedhLostReas column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhorigline(int $OedhOrigLine) Return ChildSalesHistoryDetail objects filtered by the OedhOrigLine column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcustcrssref(string $OedhCustCrssRef) Return ChildSalesHistoryDetail objects filtered by the OedhCustCrssRef column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhuom(string $OedhUom) Return ChildSalesHistoryDetail objects filtered by the OedhUom column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhshipflag(string $OedhShipFlag) Return ChildSalesHistoryDetail objects filtered by the OedhShipFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhkitflag(string $OedhKitFlag) Return ChildSalesHistoryDetail objects filtered by the OedhKitFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhkititemnbr(string $OedhKitItemNbr) Return ChildSalesHistoryDetail objects filtered by the OedhKitItemNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbfcost(string $OedhBfCost) Return ChildSalesHistoryDetail objects filtered by the OedhBfCost column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbfmsgcode(string $OedhBfMsgCode) Return ChildSalesHistoryDetail objects filtered by the OedhBfMsgCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbfcosttot(string $OedhBfCostTot) Return ChildSalesHistoryDetail objects filtered by the OedhBfCostTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlmbulkpric(string $OedhLmBulkPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmBulkPric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlmmtrxpkgpric(string $OedhLmMtrxPkgPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmMtrxPkgPric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlmmtrxbulkpric(string $OedhLmMtrxBulkPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmMtrxBulkPric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlmcontractpric(string $OedhLmContractPric) Return ChildSalesHistoryDetail objects filtered by the OedhLmContractPric column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwght(string $OedhWght) Return ChildSalesHistoryDetail objects filtered by the OedhWght column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhordras(string $OedhOrdrAs) Return ChildSalesHistoryDetail objects filtered by the OedhOrdrAs column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpodetlinenbr(int $OedhPoDetLineNbr) Return ChildSalesHistoryDetail objects filtered by the OedhPoDetLineNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhqtytoship(string $OedhQtyToShip) Return ChildSalesHistoryDetail objects filtered by the OedhQtyToShip column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhponbr(string $OedhPoNbr) Return ChildSalesHistoryDetail objects filtered by the OedhPoNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhporef(string $OedhPoRef) Return ChildSalesHistoryDetail objects filtered by the OedhPoRef column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhfrtin(string $OedhFrtIn) Return ChildSalesHistoryDetail objects filtered by the OedhFrtIn column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhfrtinentered(string $OedhFrtInEntered) Return ChildSalesHistoryDetail objects filtered by the OedhFrtInEntered column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhprodcmplt(string $OedhProdCmplt) Return ChildSalesHistoryDetail objects filtered by the OedhProdCmplt column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedherflag(string $OedhErFlag) Return ChildSalesHistoryDetail objects filtered by the OedhErFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhorigitem(string $OedhOrigItem) Return ChildSalesHistoryDetail objects filtered by the OedhOrigItem column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhsubflag(string $OedhSubFlag) Return ChildSalesHistoryDetail objects filtered by the OedhSubFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhediincomingseq(int $OedhEdiIncomingSeq) Return ChildSalesHistoryDetail objects filtered by the OedhEdiIncomingSeq column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhspordpoline(int $OedhSpordPoLine) Return ChildSalesHistoryDetail objects filtered by the OedhSpordPoLine column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcatlgid(string $OedhCatlgId) Return ChildSalesHistoryDetail objects filtered by the OedhCatlgId column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhdesigncd(string $OedhDesignCd) Return ChildSalesHistoryDetail objects filtered by the OedhDesignCd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhdiscpct(string $OedhDiscPct) Return ChildSalesHistoryDetail objects filtered by the OedhDiscPct column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhtaxamt(string $OedhTaxAmt) Return ChildSalesHistoryDetail objects filtered by the OedhTaxAmt column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhxusage(string $OedhXUsage) Return ChildSalesHistoryDetail objects filtered by the OedhXUsage column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhrqtslock(string $OedhRqtsLock) Return ChildSalesHistoryDetail objects filtered by the OedhRqtsLock column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhfreshfrozen(string $OedhFreshFrozen) Return ChildSalesHistoryDetail objects filtered by the OedhFreshFrozen column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcoreflag(string $OedhCoreFlag) Return ChildSalesHistoryDetail objects filtered by the OedhCoreFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhnssalesacct(string $OedhNsSalesAcct) Return ChildSalesHistoryDetail objects filtered by the OedhNsSalesAcct column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcertreqd(string $OedhCertReqd) Return ChildSalesHistoryDetail objects filtered by the OedhCertReqd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhaddonsales(string $OedhAddOnSales) Return ChildSalesHistoryDetail objects filtered by the OedhAddOnSales column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhbordflag(string $OedhBordFlag) Return ChildSalesHistoryDetail objects filtered by the OedhBordFlag column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhtempgrove(string $OedhTempGrove) Return ChildSalesHistoryDetail objects filtered by the OedhTempGrove column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhgrovedisc(string $OedhGroveDisc) Return ChildSalesHistoryDetail objects filtered by the OedhGroveDisc column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhoffinvc(string $OedhOffInvc) Return ChildSalesHistoryDetail objects filtered by the OedhOffInvc column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByInititemgrup(string $InitItemGrup) Return ChildSalesHistoryDetail objects filtered by the InitItemGrup column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildSalesHistoryDetail objects filtered by the ApveVendId column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhacct(string $OedhAcct) Return ChildSalesHistoryDetail objects filtered by the OedhAcct column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhloadtot(string $OedhLoadTot) Return ChildSalesHistoryDetail objects filtered by the OedhLoadTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpickedqty(string $OedhPickedQty) Return ChildSalesHistoryDetail objects filtered by the OedhPickedQty column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwiorigqty(string $OedhWiOrigQty) Return ChildSalesHistoryDetail objects filtered by the OedhWiOrigQty column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhmargintot(string $OedhMarginTot) Return ChildSalesHistoryDetail objects filtered by the OedhMarginTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcorecost(string $OedhCoreCost) Return ChildSalesHistoryDetail objects filtered by the OedhCoreCost column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhitemref(string $OedhItemRef) Return ChildSalesHistoryDetail objects filtered by the OedhItemRef column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhsac02returncode(string $OedhSac02ReturnCode) Return ChildSalesHistoryDetail objects filtered by the OedhSac02ReturnCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwgtaxcode(string $OedhWgTaxCode) Return ChildSalesHistoryDetail objects filtered by the OedhWgTaxCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwgprice(string $OedhWgPrice) Return ChildSalesHistoryDetail objects filtered by the OedhWgPrice column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwgtot(string $OedhWgTot) Return ChildSalesHistoryDetail objects filtered by the OedhWgTot column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcntrqty(int $OedhCntrQty) Return ChildSalesHistoryDetail objects filtered by the OedhCntrQty column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhconfirmcode(string $OedhConfirmCode) Return ChildSalesHistoryDetail objects filtered by the OedhConfirmCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhpicked(string $OedhPicked) Return ChildSalesHistoryDetail objects filtered by the OedhPicked column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhorigrqstdate(string $OedhOrigRqstDate) Return ChildSalesHistoryDetail objects filtered by the OedhOrigRqstDate column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhfablock(string $OedhFabLock) Return ChildSalesHistoryDetail objects filtered by the OedhFabLock column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhlabelprinted(string $OedhLabelPrinted) Return ChildSalesHistoryDetail objects filtered by the OedhLabelPrinted column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhquoteid(string $OedhQuoteId) Return ChildSalesHistoryDetail objects filtered by the OedhQuoteId column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhinvprinted(string $OedhInvPrinted) Return ChildSalesHistoryDetail objects filtered by the OedhInvPrinted column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedtstockcheck(string $OedtStockCheck) Return ChildSalesHistoryDetail objects filtered by the OedtStockCheck column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhshouldwesplit(string $OedhShouldWeSplit) Return ChildSalesHistoryDetail objects filtered by the OedhShouldWeSplit column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcofcreqd(string $OedhCofcReqd) Return ChildSalesHistoryDetail objects filtered by the OedhCofcReqd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhackcode(string $OedhAckCode) Return ChildSalesHistoryDetail objects filtered by the OedhAckCode column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwibordnbr(string $OedhWiBordNbr) Return ChildSalesHistoryDetail objects filtered by the OedhWiBordNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcerthistordr(string $OedhCertHistOrdr) Return ChildSalesHistoryDetail objects filtered by the OedhCertHistOrdr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhcerthistline(string $OedhCertHistLine) Return ChildSalesHistoryDetail objects filtered by the OedhCertHistLine column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhordrdasitemid(string $OedhOrdrdAsItemId) Return ChildSalesHistoryDetail objects filtered by the OedhOrdrdAsItemId column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwibatch1nbr(int $OedhWiBatch1Nbr) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Nbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwibatch1qty(string $OedhWiBatch1Qty) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Qty column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhwibatch1stat(string $OedhWiBatch1Stat) Return ChildSalesHistoryDetail objects filtered by the OedhWiBatch1Stat column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByOedhrganbr(int $OedhRgaNbr) Return ChildSalesHistoryDetail objects filtered by the OedhRgaNbr column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesHistoryDetail objects filtered by the DateUpdtd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesHistoryDetail objects filtered by the TimeUpdtd column
 * @method     ChildSalesHistoryDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesHistoryDetail objects filtered by the dummy column
 * @method     ChildSalesHistoryDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesHistoryDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesHistoryDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesHistoryDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesHistoryDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesHistoryDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSalesHistoryDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehhNbr, OedhLine, OedhYear, InitItemNbr, OedhDesc, OedhDesc2, IntbWhse, OedhRqstDate, OedhCancDate, OedhShipDate, OedhSpecOrdr, ArtbMtaxCode, OedhQtyOrd, OedhQtyShip, OedhQtyShipTot, OedhQtyBord, OedhPric, OedhCost, OedhTaxPctTot, OedhPricTot, OedhCostTot, OedhSpCommPct, OedhBrknCaseQty, OedhBin, OedhPersonalCd, OedhAcDisc1, OedhAcDisc2, OedhAcDisc3, OedhAcDisc4, OedhLmWipNbr, OedhCorePric, OedhAsstCode, OedhAsstQty, OedhListPric, OedhStanCost, OedhVendItemJob, OedhNsVendId, OedhNsItemGrup, OedhUseCode, OedhNsShipFromId, OedhAsstOvrd, OedhPricOvrd, OedhPickFlag, OedhMstrTaxCode1, OedhMstrTaxPct1, OedhMstrTaxCode2, OedhMstrTaxPct2, OedhMstrTaxCode3, OedhMstrTaxPct3, OedhMstrTaxCode4, OedhMstrTaxPct4, OedhMstrTaxCode5, OedhMstrTaxPct5, OedhMstrTaxCode6, OedhMstrTaxPct6, OedhMstrTaxCode7, OedhMstrTaxPct7, OedhMstrTaxCode8, OedhMstrTaxPct8, OedhMstrTaxCode9, OedhMstrTaxPct9, OedhBinArea, OedhSplitLine, OedhLostReas, OedhOrigLine, OedhCustCrssRef, OedhUom, OedhShipFlag, OedhKitFlag, OedhKitItemNbr, OedhBfCost, OedhBfMsgCode, OedhBfCostTot, OedhLmBulkPric, OedhLmMtrxPkgPric, OedhLmMtrxBulkPric, OedhLmContractPric, OedhWght, OedhOrdrAs, OedhPoDetLineNbr, OedhQtyToShip, OedhPoNbr, OedhPoRef, OedhFrtIn, OedhFrtInEntered, OedhProdCmplt, OedhErFlag, OedhOrigItem, OedhSubFlag, OedhEdiIncomingSeq, OedhSpordPoLine, OedhCatlgId, OedhDesignCd, OedhDiscPct, OedhTaxAmt, OedhXUsage, OedhRqtsLock, OedhFreshFrozen, OedhCoreFlag, OedhNsSalesAcct, OedhCertReqd, OedhAddOnSales, OedhBordFlag, OedhTempGrove, OedhGroveDisc, OedhOffInvc, InitItemGrup, ApveVendId, OedhAcct, OedhLoadTot, OedhPickedQty, OedhWiOrigQty, OedhMarginTot, OedhCoreCost, OedhItemRef, OedhSac02ReturnCode, OedhWgTaxCode, OedhWgPrice, OedhWgTot, OedhCntrQty, OedhConfirmCode, OedhPicked, OedhOrigRqstDate, OedhFabLock, OedhLabelPrinted, OedhQuoteId, OedhInvPrinted, OedtStockCheck, OedhShouldWeSplit, OedhCofcReqd, OedhAckCode, OedhWiBordNbr, OedhCertHistOrdr, OedhCertHistLine, OedhOrdrdAsItemId, OedhWiBatch1Nbr, OedhWiBatch1Qty, OedhWiBatch1Stat, OedhRgaNbr, DateUpdtd, TimeUpdtd, dummy FROM so_det_hist WHERE OehhNbr = :p0 AND OedhLine = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
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
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
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
     * $query->filterByOehhnbr('fooValue');   // WHERE OehhNbr = 'fooValue'
     * $query->filterByOehhnbr('%fooValue%', Criteria::LIKE); // WHERE OehhNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $oehhnbr, $comparison);
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
     * @param     mixed $oedhline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhline($oedhline = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLINE, $oedhline, $comparison);
    }

    /**
     * Filter the query on the OedhYear column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhyear('fooValue');   // WHERE OedhYear = 'fooValue'
     * $query->filterByOedhyear('%fooValue%', Criteria::LIKE); // WHERE OedhYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhyear The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhyear($oedhyear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhyear)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHYEAR, $oedhyear, $comparison);
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the OedhDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdesc('fooValue');   // WHERE OedhDesc = 'fooValue'
     * $query->filterByOedhdesc('%fooValue%', Criteria::LIKE); // WHERE OedhDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhdesc($oedhdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDESC, $oedhdesc, $comparison);
    }

    /**
     * Filter the query on the OedhDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdesc2('fooValue');   // WHERE OedhDesc2 = 'fooValue'
     * $query->filterByOedhdesc2('%fooValue%', Criteria::LIKE); // WHERE OedhDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhdesc2($oedhdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDESC2, $oedhdesc2, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the OedhRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhrqstdate('fooValue');   // WHERE OedhRqstDate = 'fooValue'
     * $query->filterByOedhrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedhRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhrqstdate($oedhrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRQSTDATE, $oedhrqstdate, $comparison);
    }

    /**
     * Filter the query on the OedhCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcancdate('fooValue');   // WHERE OedhCancDate = 'fooValue'
     * $query->filterByOedhcancdate('%fooValue%', Criteria::LIKE); // WHERE OedhCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcancdate($oedhcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCANCDATE, $oedhcancdate, $comparison);
    }

    /**
     * Filter the query on the OedhShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhshipdate('fooValue');   // WHERE OedhShipDate = 'fooValue'
     * $query->filterByOedhshipdate('%fooValue%', Criteria::LIKE); // WHERE OedhShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhshipdate($oedhshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSHIPDATE, $oedhshipdate, $comparison);
    }

    /**
     * Filter the query on the OedhSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhspecordr('fooValue');   // WHERE OedhSpecOrdr = 'fooValue'
     * $query->filterByOedhspecordr('%fooValue%', Criteria::LIKE); // WHERE OedhSpecOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhspecordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhspecordr($oedhspecordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPECORDR, $oedhspecordr, $comparison);
    }

    /**
     * Filter the query on the ArtbMtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxcode('fooValue');   // WHERE ArtbMtaxCode = 'fooValue'
     * $query->filterByArtbmtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbmtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);
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
     * @param     mixed $oedhqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhqtyord($oedhqtyord = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYORD, $oedhqtyord, $comparison);
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
     * @param     mixed $oedhqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhqtyship($oedhqtyship = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP, $oedhqtyship, $comparison);
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
     * @param     mixed $oedhqtyshiptot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhqtyshiptot($oedhqtyshiptot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT, $oedhqtyshiptot, $comparison);
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
     * @param     mixed $oedhqtybord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhqtybord($oedhqtybord = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYBORD, $oedhqtybord, $comparison);
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
     * @param     mixed $oedhpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpric($oedhpric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRIC, $oedhpric, $comparison);
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
     * @param     mixed $oedhcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcost($oedhcost = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOST, $oedhcost, $comparison);
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
     * @param     mixed $oedhtaxpcttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhtaxpcttot($oedhtaxpcttot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT, $oedhtaxpcttot, $comparison);
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
     * @param     mixed $oedhprictot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhprictot($oedhprictot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRICTOT, $oedhprictot, $comparison);
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
     * @param     mixed $oedhcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcosttot($oedhcosttot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT, $oedhcosttot, $comparison);
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
     * @param     mixed $oedhspcommpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhspcommpct($oedhspcommpct = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT, $oedhspcommpct, $comparison);
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
     * @param     mixed $oedhbrkncaseqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbrkncaseqty($oedhbrkncaseqty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY, $oedhbrkncaseqty, $comparison);
    }

    /**
     * Filter the query on the OedhBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbin('fooValue');   // WHERE OedhBin = 'fooValue'
     * $query->filterByOedhbin('%fooValue%', Criteria::LIKE); // WHERE OedhBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbin($oedhbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBIN, $oedhbin, $comparison);
    }

    /**
     * Filter the query on the OedhPersonalCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpersonalcd('fooValue');   // WHERE OedhPersonalCd = 'fooValue'
     * $query->filterByOedhpersonalcd('%fooValue%', Criteria::LIKE); // WHERE OedhPersonalCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhpersonalcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpersonalcd($oedhpersonalcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpersonalcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPERSONALCD, $oedhpersonalcd, $comparison);
    }

    /**
     * Filter the query on the OedhAcDisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc1('fooValue');   // WHERE OedhAcDisc1 = 'fooValue'
     * $query->filterByOedhacdisc1('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhacdisc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhacdisc1($oedhacdisc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC1, $oedhacdisc1, $comparison);
    }

    /**
     * Filter the query on the OedhAcDisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc2('fooValue');   // WHERE OedhAcDisc2 = 'fooValue'
     * $query->filterByOedhacdisc2('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhacdisc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhacdisc2($oedhacdisc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC2, $oedhacdisc2, $comparison);
    }

    /**
     * Filter the query on the OedhAcDisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc3('fooValue');   // WHERE OedhAcDisc3 = 'fooValue'
     * $query->filterByOedhacdisc3('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhacdisc3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhacdisc3($oedhacdisc3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC3, $oedhacdisc3, $comparison);
    }

    /**
     * Filter the query on the OedhAcDisc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacdisc4('fooValue');   // WHERE OedhAcDisc4 = 'fooValue'
     * $query->filterByOedhacdisc4('%fooValue%', Criteria::LIKE); // WHERE OedhAcDisc4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhacdisc4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhacdisc4($oedhacdisc4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACDISC4, $oedhacdisc4, $comparison);
    }

    /**
     * Filter the query on the OedhLmWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlmwipnbr('fooValue');   // WHERE OedhLmWipNbr = 'fooValue'
     * $query->filterByOedhlmwipnbr('%fooValue%', Criteria::LIKE); // WHERE OedhLmWipNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhlmwipnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlmwipnbr($oedhlmwipnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhlmwipnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR, $oedhlmwipnbr, $comparison);
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
     * @param     mixed $oedhcorepric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcorepric($oedhcorepric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC, $oedhcorepric, $comparison);
    }

    /**
     * Filter the query on the OedhAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhasstcode('fooValue');   // WHERE OedhAsstCode = 'fooValue'
     * $query->filterByOedhasstcode('%fooValue%', Criteria::LIKE); // WHERE OedhAsstCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhasstcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhasstcode($oedhasstcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTCODE, $oedhasstcode, $comparison);
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
     * @param     mixed $oedhasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhasstqty($oedhasstqty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTQTY, $oedhasstqty, $comparison);
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
     * @param     mixed $oedhlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlistpric($oedhlistpric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC, $oedhlistpric, $comparison);
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
     * @param     mixed $oedhstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhstancost($oedhstancost = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSTANCOST, $oedhstancost, $comparison);
    }

    /**
     * Filter the query on the OedhVendItemJob column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhvenditemjob('fooValue');   // WHERE OedhVendItemJob = 'fooValue'
     * $query->filterByOedhvenditemjob('%fooValue%', Criteria::LIKE); // WHERE OedhVendItemJob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhvenditemjob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhvenditemjob($oedhvenditemjob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhvenditemjob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB, $oedhvenditemjob, $comparison);
    }

    /**
     * Filter the query on the OedhNsVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnsvendid('fooValue');   // WHERE OedhNsVendId = 'fooValue'
     * $query->filterByOedhnsvendid('%fooValue%', Criteria::LIKE); // WHERE OedhNsVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhnsvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhnsvendid($oedhnsvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnsvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSVENDID, $oedhnsvendid, $comparison);
    }

    /**
     * Filter the query on the OedhNsItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnsitemgrup('fooValue');   // WHERE OedhNsItemGrup = 'fooValue'
     * $query->filterByOedhnsitemgrup('%fooValue%', Criteria::LIKE); // WHERE OedhNsItemGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhnsitemgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhnsitemgrup($oedhnsitemgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnsitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP, $oedhnsitemgrup, $comparison);
    }

    /**
     * Filter the query on the OedhUseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhusecode('fooValue');   // WHERE OedhUseCode = 'fooValue'
     * $query->filterByOedhusecode('%fooValue%', Criteria::LIKE); // WHERE OedhUseCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhusecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhusecode($oedhusecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhusecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHUSECODE, $oedhusecode, $comparison);
    }

    /**
     * Filter the query on the OedhNsShipFromId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnsshipfromid('fooValue');   // WHERE OedhNsShipFromId = 'fooValue'
     * $query->filterByOedhnsshipfromid('%fooValue%', Criteria::LIKE); // WHERE OedhNsShipFromId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhnsshipfromid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhnsshipfromid($oedhnsshipfromid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnsshipfromid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID, $oedhnsshipfromid, $comparison);
    }

    /**
     * Filter the query on the OedhAsstOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhasstovrd('fooValue');   // WHERE OedhAsstOvrd = 'fooValue'
     * $query->filterByOedhasstovrd('%fooValue%', Criteria::LIKE); // WHERE OedhAsstOvrd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhasstovrd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhasstovrd($oedhasstovrd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhasstovrd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHASSTOVRD, $oedhasstovrd, $comparison);
    }

    /**
     * Filter the query on the OedhPricOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpricovrd('fooValue');   // WHERE OedhPricOvrd = 'fooValue'
     * $query->filterByOedhpricovrd('%fooValue%', Criteria::LIKE); // WHERE OedhPricOvrd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhpricovrd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpricovrd($oedhpricovrd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpricovrd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRICOVRD, $oedhpricovrd, $comparison);
    }

    /**
     * Filter the query on the OedhPickFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpickflag('fooValue');   // WHERE OedhPickFlag = 'fooValue'
     * $query->filterByOedhpickflag('%fooValue%', Criteria::LIKE); // WHERE OedhPickFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhpickflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpickflag($oedhpickflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpickflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKFLAG, $oedhpickflag, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode1('fooValue');   // WHERE OedhMstrTaxCode1 = 'fooValue'
     * $query->filterByOedhmstrtaxcode1('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode1($oedhmstrtaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1, $oedhmstrtaxcode1, $comparison);
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
     * @param     mixed $oedhmstrtaxpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct1($oedhmstrtaxpct1 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1, $oedhmstrtaxpct1, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode2('fooValue');   // WHERE OedhMstrTaxCode2 = 'fooValue'
     * $query->filterByOedhmstrtaxcode2('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode2($oedhmstrtaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2, $oedhmstrtaxcode2, $comparison);
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
     * @param     mixed $oedhmstrtaxpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct2($oedhmstrtaxpct2 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2, $oedhmstrtaxpct2, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode3('fooValue');   // WHERE OedhMstrTaxCode3 = 'fooValue'
     * $query->filterByOedhmstrtaxcode3('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode3($oedhmstrtaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3, $oedhmstrtaxcode3, $comparison);
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
     * @param     mixed $oedhmstrtaxpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct3($oedhmstrtaxpct3 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3, $oedhmstrtaxpct3, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode4('fooValue');   // WHERE OedhMstrTaxCode4 = 'fooValue'
     * $query->filterByOedhmstrtaxcode4('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode4($oedhmstrtaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4, $oedhmstrtaxcode4, $comparison);
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
     * @param     mixed $oedhmstrtaxpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct4($oedhmstrtaxpct4 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4, $oedhmstrtaxpct4, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode5('fooValue');   // WHERE OedhMstrTaxCode5 = 'fooValue'
     * $query->filterByOedhmstrtaxcode5('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode5($oedhmstrtaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5, $oedhmstrtaxcode5, $comparison);
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
     * @param     mixed $oedhmstrtaxpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct5($oedhmstrtaxpct5 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5, $oedhmstrtaxpct5, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode6('fooValue');   // WHERE OedhMstrTaxCode6 = 'fooValue'
     * $query->filterByOedhmstrtaxcode6('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode6($oedhmstrtaxcode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6, $oedhmstrtaxcode6, $comparison);
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
     * @param     mixed $oedhmstrtaxpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct6($oedhmstrtaxpct6 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6, $oedhmstrtaxpct6, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode7('fooValue');   // WHERE OedhMstrTaxCode7 = 'fooValue'
     * $query->filterByOedhmstrtaxcode7('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode7($oedhmstrtaxcode7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7, $oedhmstrtaxcode7, $comparison);
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
     * @param     mixed $oedhmstrtaxpct7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct7($oedhmstrtaxpct7 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7, $oedhmstrtaxpct7, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode8('fooValue');   // WHERE OedhMstrTaxCode8 = 'fooValue'
     * $query->filterByOedhmstrtaxcode8('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode8($oedhmstrtaxcode8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8, $oedhmstrtaxcode8, $comparison);
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
     * @param     mixed $oedhmstrtaxpct8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct8($oedhmstrtaxpct8 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8, $oedhmstrtaxpct8, $comparison);
    }

    /**
     * Filter the query on the OedhMstrTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhmstrtaxcode9('fooValue');   // WHERE OedhMstrTaxCode9 = 'fooValue'
     * $query->filterByOedhmstrtaxcode9('%fooValue%', Criteria::LIKE); // WHERE OedhMstrTaxCode9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhmstrtaxcode9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxcode9($oedhmstrtaxcode9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhmstrtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9, $oedhmstrtaxcode9, $comparison);
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
     * @param     mixed $oedhmstrtaxpct9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmstrtaxpct9($oedhmstrtaxpct9 = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9, $oedhmstrtaxpct9, $comparison);
    }

    /**
     * Filter the query on the OedhBinArea column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbinarea('fooValue');   // WHERE OedhBinArea = 'fooValue'
     * $query->filterByOedhbinarea('%fooValue%', Criteria::LIKE); // WHERE OedhBinArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhbinarea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbinarea($oedhbinarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbinarea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBINAREA, $oedhbinarea, $comparison);
    }

    /**
     * Filter the query on the OedhSplitLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhsplitline('fooValue');   // WHERE OedhSplitLine = 'fooValue'
     * $query->filterByOedhsplitline('%fooValue%', Criteria::LIKE); // WHERE OedhSplitLine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhsplitline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhsplitline($oedhsplitline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhsplitline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPLITLINE, $oedhsplitline, $comparison);
    }

    /**
     * Filter the query on the OedhLostReas column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlostreas('fooValue');   // WHERE OedhLostReas = 'fooValue'
     * $query->filterByOedhlostreas('%fooValue%', Criteria::LIKE); // WHERE OedhLostReas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhlostreas The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlostreas($oedhlostreas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhlostreas)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLOSTREAS, $oedhlostreas, $comparison);
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
     * @param     mixed $oedhorigline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhorigline($oedhorigline = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGLINE, $oedhorigline, $comparison);
    }

    /**
     * Filter the query on the OedhCustCrssRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcustcrssref('fooValue');   // WHERE OedhCustCrssRef = 'fooValue'
     * $query->filterByOedhcustcrssref('%fooValue%', Criteria::LIKE); // WHERE OedhCustCrssRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcustcrssref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcustcrssref($oedhcustcrssref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcustcrssref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF, $oedhcustcrssref, $comparison);
    }

    /**
     * Filter the query on the OedhUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhuom('fooValue');   // WHERE OedhUom = 'fooValue'
     * $query->filterByOedhuom('%fooValue%', Criteria::LIKE); // WHERE OedhUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhuom($oedhuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHUOM, $oedhuom, $comparison);
    }

    /**
     * Filter the query on the OedhShipFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhshipflag('fooValue');   // WHERE OedhShipFlag = 'fooValue'
     * $query->filterByOedhshipflag('%fooValue%', Criteria::LIKE); // WHERE OedhShipFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhshipflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhshipflag($oedhshipflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhshipflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG, $oedhshipflag, $comparison);
    }

    /**
     * Filter the query on the OedhKitFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhkitflag('fooValue');   // WHERE OedhKitFlag = 'fooValue'
     * $query->filterByOedhkitflag('%fooValue%', Criteria::LIKE); // WHERE OedhKitFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhkitflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhkitflag($oedhkitflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhkitflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHKITFLAG, $oedhkitflag, $comparison);
    }

    /**
     * Filter the query on the OedhKitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhkititemnbr('fooValue');   // WHERE OedhKitItemNbr = 'fooValue'
     * $query->filterByOedhkititemnbr('%fooValue%', Criteria::LIKE); // WHERE OedhKitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhkititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhkititemnbr($oedhkititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhkititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR, $oedhkititemnbr, $comparison);
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
     * @param     mixed $oedhbfcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbfcost($oedhbfcost = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOST, $oedhbfcost, $comparison);
    }

    /**
     * Filter the query on the OedhBfMsgCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbfmsgcode('fooValue');   // WHERE OedhBfMsgCode = 'fooValue'
     * $query->filterByOedhbfmsgcode('%fooValue%', Criteria::LIKE); // WHERE OedhBfMsgCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhbfmsgcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbfmsgcode($oedhbfmsgcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbfmsgcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE, $oedhbfmsgcode, $comparison);
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
     * @param     mixed $oedhbfcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbfcosttot($oedhbfcosttot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT, $oedhbfcosttot, $comparison);
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
     * @param     mixed $oedhlmbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlmbulkpric($oedhlmbulkpric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC, $oedhlmbulkpric, $comparison);
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
     * @param     mixed $oedhlmmtrxpkgpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlmmtrxpkgpric($oedhlmmtrxpkgpric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC, $oedhlmmtrxpkgpric, $comparison);
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
     * @param     mixed $oedhlmmtrxbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlmmtrxbulkpric($oedhlmmtrxbulkpric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC, $oedhlmmtrxbulkpric, $comparison);
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
     * @param     mixed $oedhlmcontractpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlmcontractpric($oedhlmcontractpric = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC, $oedhlmcontractpric, $comparison);
    }

    /**
     * Filter the query on the OedhWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwght(1234); // WHERE OedhWght = 1234
     * $query->filterByOedhwght(array(12, 34)); // WHERE OedhWght IN (12, 34)
     * $query->filterByOedhwght(array('min' => 12)); // WHERE OedhWght > 12
     * </code>
     *
     * @param     mixed $oedhwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwght($oedhwght = null, $comparison = null)
    {
        if (is_array($oedhwght)) {
            $useMinMax = false;
            if (isset($oedhwght['min'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGHT, $oedhwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhwght['max'])) {
                $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGHT, $oedhwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGHT, $oedhwght, $comparison);
    }

    /**
     * Filter the query on the OedhOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhordras('fooValue');   // WHERE OedhOrdrAs = 'fooValue'
     * $query->filterByOedhordras('%fooValue%', Criteria::LIKE); // WHERE OedhOrdrAs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhordras The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhordras($oedhordras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhordras)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORDRAS, $oedhordras, $comparison);
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
     * @param     mixed $oedhpodetlinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpodetlinenbr($oedhpodetlinenbr = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR, $oedhpodetlinenbr, $comparison);
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
     * @param     mixed $oedhqtytoship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhqtytoship($oedhqtytoship = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP, $oedhqtytoship, $comparison);
    }

    /**
     * Filter the query on the OedhPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhponbr('fooValue');   // WHERE OedhPoNbr = 'fooValue'
     * $query->filterByOedhponbr('%fooValue%', Criteria::LIKE); // WHERE OedhPoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhponbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhponbr($oedhponbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhponbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPONBR, $oedhponbr, $comparison);
    }

    /**
     * Filter the query on the OedhPoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhporef('fooValue');   // WHERE OedhPoRef = 'fooValue'
     * $query->filterByOedhporef('%fooValue%', Criteria::LIKE); // WHERE OedhPoRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhporef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhporef($oedhporef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhporef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPOREF, $oedhporef, $comparison);
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
     * @param     mixed $oedhfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhfrtin($oedhfrtin = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRTIN, $oedhfrtin, $comparison);
    }

    /**
     * Filter the query on the OedhFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfrtinentered('fooValue');   // WHERE OedhFrtInEntered = 'fooValue'
     * $query->filterByOedhfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OedhFrtInEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhfrtinentered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhfrtinentered($oedhfrtinentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED, $oedhfrtinentered, $comparison);
    }

    /**
     * Filter the query on the OedhProdCmplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhprodcmplt('fooValue');   // WHERE OedhProdCmplt = 'fooValue'
     * $query->filterByOedhprodcmplt('%fooValue%', Criteria::LIKE); // WHERE OedhProdCmplt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhprodcmplt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhprodcmplt($oedhprodcmplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhprodcmplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT, $oedhprodcmplt, $comparison);
    }

    /**
     * Filter the query on the OedhErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedherflag('fooValue');   // WHERE OedhErFlag = 'fooValue'
     * $query->filterByOedherflag('%fooValue%', Criteria::LIKE); // WHERE OedhErFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedherflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedherflag($oedherflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedherflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHERFLAG, $oedherflag, $comparison);
    }

    /**
     * Filter the query on the OedhOrigItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhorigitem('fooValue');   // WHERE OedhOrigItem = 'fooValue'
     * $query->filterByOedhorigitem('%fooValue%', Criteria::LIKE); // WHERE OedhOrigItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhorigitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhorigitem($oedhorigitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhorigitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGITEM, $oedhorigitem, $comparison);
    }

    /**
     * Filter the query on the OedhSubFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhsubflag('fooValue');   // WHERE OedhSubFlag = 'fooValue'
     * $query->filterByOedhsubflag('%fooValue%', Criteria::LIKE); // WHERE OedhSubFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhsubflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhsubflag($oedhsubflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhsubflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSUBFLAG, $oedhsubflag, $comparison);
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
     * @param     mixed $oedhediincomingseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhediincomingseq($oedhediincomingseq = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ, $oedhediincomingseq, $comparison);
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
     * @param     mixed $oedhspordpoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhspordpoline($oedhspordpoline = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE, $oedhspordpoline, $comparison);
    }

    /**
     * Filter the query on the OedhCatlgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcatlgid('fooValue');   // WHERE OedhCatlgId = 'fooValue'
     * $query->filterByOedhcatlgid('%fooValue%', Criteria::LIKE); // WHERE OedhCatlgId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcatlgid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcatlgid($oedhcatlgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcatlgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCATLGID, $oedhcatlgid, $comparison);
    }

    /**
     * Filter the query on the OedhDesignCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhdesigncd('fooValue');   // WHERE OedhDesignCd = 'fooValue'
     * $query->filterByOedhdesigncd('%fooValue%', Criteria::LIKE); // WHERE OedhDesignCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhdesigncd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhdesigncd($oedhdesigncd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhdesigncd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDESIGNCD, $oedhdesigncd, $comparison);
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
     * @param     mixed $oedhdiscpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhdiscpct($oedhdiscpct = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHDISCPCT, $oedhdiscpct, $comparison);
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
     * @param     mixed $oedhtaxamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhtaxamt($oedhtaxamt = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTAXAMT, $oedhtaxamt, $comparison);
    }

    /**
     * Filter the query on the OedhXUsage column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhxusage('fooValue');   // WHERE OedhXUsage = 'fooValue'
     * $query->filterByOedhxusage('%fooValue%', Criteria::LIKE); // WHERE OedhXUsage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhxusage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhxusage($oedhxusage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhxusage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHXUSAGE, $oedhxusage, $comparison);
    }

    /**
     * Filter the query on the OedhRqtsLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhrqtslock('fooValue');   // WHERE OedhRqtsLock = 'fooValue'
     * $query->filterByOedhrqtslock('%fooValue%', Criteria::LIKE); // WHERE OedhRqtsLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhrqtslock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhrqtslock($oedhrqtslock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhrqtslock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK, $oedhrqtslock, $comparison);
    }

    /**
     * Filter the query on the OedhFreshFrozen column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfreshfrozen('fooValue');   // WHERE OedhFreshFrozen = 'fooValue'
     * $query->filterByOedhfreshfrozen('%fooValue%', Criteria::LIKE); // WHERE OedhFreshFrozen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhfreshfrozen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhfreshfrozen($oedhfreshfrozen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhfreshfrozen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN, $oedhfreshfrozen, $comparison);
    }

    /**
     * Filter the query on the OedhCoreFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcoreflag('fooValue');   // WHERE OedhCoreFlag = 'fooValue'
     * $query->filterByOedhcoreflag('%fooValue%', Criteria::LIKE); // WHERE OedhCoreFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcoreflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcoreflag($oedhcoreflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcoreflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOREFLAG, $oedhcoreflag, $comparison);
    }

    /**
     * Filter the query on the OedhNsSalesAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhnssalesacct('fooValue');   // WHERE OedhNsSalesAcct = 'fooValue'
     * $query->filterByOedhnssalesacct('%fooValue%', Criteria::LIKE); // WHERE OedhNsSalesAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhnssalesacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhnssalesacct($oedhnssalesacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhnssalesacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT, $oedhnssalesacct, $comparison);
    }

    /**
     * Filter the query on the OedhCertReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcertreqd('fooValue');   // WHERE OedhCertReqd = 'fooValue'
     * $query->filterByOedhcertreqd('%fooValue%', Criteria::LIKE); // WHERE OedhCertReqd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcertreqd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcertreqd($oedhcertreqd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcertreqd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCERTREQD, $oedhcertreqd, $comparison);
    }

    /**
     * Filter the query on the OedhAddOnSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhaddonsales('fooValue');   // WHERE OedhAddOnSales = 'fooValue'
     * $query->filterByOedhaddonsales('%fooValue%', Criteria::LIKE); // WHERE OedhAddOnSales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhaddonsales The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhaddonsales($oedhaddonsales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhaddonsales)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHADDONSALES, $oedhaddonsales, $comparison);
    }

    /**
     * Filter the query on the OedhBordFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhbordflag('fooValue');   // WHERE OedhBordFlag = 'fooValue'
     * $query->filterByOedhbordflag('%fooValue%', Criteria::LIKE); // WHERE OedhBordFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhbordflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhbordflag($oedhbordflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhbordflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHBORDFLAG, $oedhbordflag, $comparison);
    }

    /**
     * Filter the query on the OedhTempGrove column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhtempgrove('fooValue');   // WHERE OedhTempGrove = 'fooValue'
     * $query->filterByOedhtempgrove('%fooValue%', Criteria::LIKE); // WHERE OedhTempGrove LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhtempgrove The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhtempgrove($oedhtempgrove = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhtempgrove)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE, $oedhtempgrove, $comparison);
    }

    /**
     * Filter the query on the OedhGroveDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhgrovedisc('fooValue');   // WHERE OedhGroveDisc = 'fooValue'
     * $query->filterByOedhgrovedisc('%fooValue%', Criteria::LIKE); // WHERE OedhGroveDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhgrovedisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhgrovedisc($oedhgrovedisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhgrovedisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHGROVEDISC, $oedhgrovedisc, $comparison);
    }

    /**
     * Filter the query on the OedhOffInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhoffinvc('fooValue');   // WHERE OedhOffInvc = 'fooValue'
     * $query->filterByOedhoffinvc('%fooValue%', Criteria::LIKE); // WHERE OedhOffInvc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhoffinvc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhoffinvc($oedhoffinvc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhoffinvc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHOFFINVC, $oedhoffinvc, $comparison);
    }

    /**
     * Filter the query on the InitItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemgrup('fooValue');   // WHERE InitItemGrup = 'fooValue'
     * $query->filterByInititemgrup('%fooValue%', Criteria::LIKE); // WHERE InitItemGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByInititemgrup($inititemgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_INITITEMGRUP, $inititemgrup, $comparison);
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the OedhAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhacct('fooValue');   // WHERE OedhAcct = 'fooValue'
     * $query->filterByOedhacct('%fooValue%', Criteria::LIKE); // WHERE OedhAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhacct($oedhacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACCT, $oedhacct, $comparison);
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
     * @param     mixed $oedhloadtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhloadtot($oedhloadtot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLOADTOT, $oedhloadtot, $comparison);
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
     * @param     mixed $oedhpickedqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpickedqty($oedhpickedqty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY, $oedhpickedqty, $comparison);
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
     * @param     mixed $oedhwiorigqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwiorigqty($oedhwiorigqty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY, $oedhwiorigqty, $comparison);
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
     * @param     mixed $oedhmargintot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhmargintot($oedhmargintot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT, $oedhmargintot, $comparison);
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
     * @param     mixed $oedhcorecost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcorecost($oedhcorecost = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCORECOST, $oedhcorecost, $comparison);
    }

    /**
     * Filter the query on the OedhItemRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhitemref('fooValue');   // WHERE OedhItemRef = 'fooValue'
     * $query->filterByOedhitemref('%fooValue%', Criteria::LIKE); // WHERE OedhItemRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhitemref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhitemref($oedhitemref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhitemref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHITEMREF, $oedhitemref, $comparison);
    }

    /**
     * Filter the query on the OedhSac02ReturnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhsac02returncode('fooValue');   // WHERE OedhSac02ReturnCode = 'fooValue'
     * $query->filterByOedhsac02returncode('%fooValue%', Criteria::LIKE); // WHERE OedhSac02ReturnCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhsac02returncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhsac02returncode($oedhsac02returncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhsac02returncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE, $oedhsac02returncode, $comparison);
    }

    /**
     * Filter the query on the OedhWgTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwgtaxcode('fooValue');   // WHERE OedhWgTaxCode = 'fooValue'
     * $query->filterByOedhwgtaxcode('%fooValue%', Criteria::LIKE); // WHERE OedhWgTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhwgtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwgtaxcode($oedhwgtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhwgtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE, $oedhwgtaxcode, $comparison);
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
     * @param     mixed $oedhwgprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwgprice($oedhwgprice = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGPRICE, $oedhwgprice, $comparison);
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
     * @param     mixed $oedhwgtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwgtot($oedhwgtot = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWGTOT, $oedhwgtot, $comparison);
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
     * @param     mixed $oedhcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcntrqty($oedhcntrqty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY, $oedhcntrqty, $comparison);
    }

    /**
     * Filter the query on the OedhConfirmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhconfirmcode('fooValue');   // WHERE OedhConfirmCode = 'fooValue'
     * $query->filterByOedhconfirmcode('%fooValue%', Criteria::LIKE); // WHERE OedhConfirmCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhconfirmcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhconfirmcode($oedhconfirmcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhconfirmcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE, $oedhconfirmcode, $comparison);
    }

    /**
     * Filter the query on the OedhPicked column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhpicked('fooValue');   // WHERE OedhPicked = 'fooValue'
     * $query->filterByOedhpicked('%fooValue%', Criteria::LIKE); // WHERE OedhPicked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhpicked The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhpicked($oedhpicked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhpicked)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHPICKED, $oedhpicked, $comparison);
    }

    /**
     * Filter the query on the OedhOrigRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhorigrqstdate('fooValue');   // WHERE OedhOrigRqstDate = 'fooValue'
     * $query->filterByOedhorigrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedhOrigRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhorigrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhorigrqstdate($oedhorigrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhorigrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE, $oedhorigrqstdate, $comparison);
    }

    /**
     * Filter the query on the OedhFabLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhfablock('fooValue');   // WHERE OedhFabLock = 'fooValue'
     * $query->filterByOedhfablock('%fooValue%', Criteria::LIKE); // WHERE OedhFabLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhfablock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhfablock($oedhfablock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhfablock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHFABLOCK, $oedhfablock, $comparison);
    }

    /**
     * Filter the query on the OedhLabelPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhlabelprinted('fooValue');   // WHERE OedhLabelPrinted = 'fooValue'
     * $query->filterByOedhlabelprinted('%fooValue%', Criteria::LIKE); // WHERE OedhLabelPrinted LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhlabelprinted The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhlabelprinted($oedhlabelprinted = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhlabelprinted)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED, $oedhlabelprinted, $comparison);
    }

    /**
     * Filter the query on the OedhQuoteId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhquoteid('fooValue');   // WHERE OedhQuoteId = 'fooValue'
     * $query->filterByOedhquoteid('%fooValue%', Criteria::LIKE); // WHERE OedhQuoteId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhquoteid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhquoteid($oedhquoteid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhquoteid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHQUOTEID, $oedhquoteid, $comparison);
    }

    /**
     * Filter the query on the OedhInvPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhinvprinted('fooValue');   // WHERE OedhInvPrinted = 'fooValue'
     * $query->filterByOedhinvprinted('%fooValue%', Criteria::LIKE); // WHERE OedhInvPrinted LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhinvprinted The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhinvprinted($oedhinvprinted = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhinvprinted)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHINVPRINTED, $oedhinvprinted, $comparison);
    }

    /**
     * Filter the query on the OedtStockCheck column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtstockcheck('fooValue');   // WHERE OedtStockCheck = 'fooValue'
     * $query->filterByOedtstockcheck('%fooValue%', Criteria::LIKE); // WHERE OedtStockCheck LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtstockcheck The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedtstockcheck($oedtstockcheck = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtstockcheck)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDTSTOCKCHECK, $oedtstockcheck, $comparison);
    }

    /**
     * Filter the query on the OedhShouldWeSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhshouldwesplit('fooValue');   // WHERE OedhShouldWeSplit = 'fooValue'
     * $query->filterByOedhshouldwesplit('%fooValue%', Criteria::LIKE); // WHERE OedhShouldWeSplit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhshouldwesplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhshouldwesplit($oedhshouldwesplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhshouldwesplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT, $oedhshouldwesplit, $comparison);
    }

    /**
     * Filter the query on the OedhCofcReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcofcreqd('fooValue');   // WHERE OedhCofcReqd = 'fooValue'
     * $query->filterByOedhcofcreqd('%fooValue%', Criteria::LIKE); // WHERE OedhCofcReqd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcofcreqd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcofcreqd($oedhcofcreqd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcofcreqd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCOFCREQD, $oedhcofcreqd, $comparison);
    }

    /**
     * Filter the query on the OedhAckCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhackcode('fooValue');   // WHERE OedhAckCode = 'fooValue'
     * $query->filterByOedhackcode('%fooValue%', Criteria::LIKE); // WHERE OedhAckCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhackcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhackcode($oedhackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHACKCODE, $oedhackcode, $comparison);
    }

    /**
     * Filter the query on the OedhWiBordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwibordnbr('fooValue');   // WHERE OedhWiBordNbr = 'fooValue'
     * $query->filterByOedhwibordnbr('%fooValue%', Criteria::LIKE); // WHERE OedhWiBordNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhwibordnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwibordnbr($oedhwibordnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhwibordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR, $oedhwibordnbr, $comparison);
    }

    /**
     * Filter the query on the OedhCertHistOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcerthistordr('fooValue');   // WHERE OedhCertHistOrdr = 'fooValue'
     * $query->filterByOedhcerthistordr('%fooValue%', Criteria::LIKE); // WHERE OedhCertHistOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcerthistordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcerthistordr($oedhcerthistordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcerthistordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR, $oedhcerthistordr, $comparison);
    }

    /**
     * Filter the query on the OedhCertHistLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhcerthistline('fooValue');   // WHERE OedhCertHistLine = 'fooValue'
     * $query->filterByOedhcerthistline('%fooValue%', Criteria::LIKE); // WHERE OedhCertHistLine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhcerthistline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhcerthistline($oedhcerthistline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhcerthistline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE, $oedhcerthistline, $comparison);
    }

    /**
     * Filter the query on the OedhOrdrdAsItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhordrdasitemid('fooValue');   // WHERE OedhOrdrdAsItemId = 'fooValue'
     * $query->filterByOedhordrdasitemid('%fooValue%', Criteria::LIKE); // WHERE OedhOrdrdAsItemId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhordrdasitemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhordrdasitemid($oedhordrdasitemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhordrdasitemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID, $oedhordrdasitemid, $comparison);
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
     * @param     mixed $oedhwibatch1nbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwibatch1nbr($oedhwibatch1nbr = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR, $oedhwibatch1nbr, $comparison);
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
     * @param     mixed $oedhwibatch1qty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwibatch1qty($oedhwibatch1qty = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY, $oedhwibatch1qty, $comparison);
    }

    /**
     * Filter the query on the OedhWiBatch1Stat column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhwibatch1stat('fooValue');   // WHERE OedhWiBatch1Stat = 'fooValue'
     * $query->filterByOedhwibatch1stat('%fooValue%', Criteria::LIKE); // WHERE OedhWiBatch1Stat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedhwibatch1stat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhwibatch1stat($oedhwibatch1stat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedhwibatch1stat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT, $oedhwibatch1stat, $comparison);
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
     * @param     mixed $oedhrganbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByOedhrganbr($oedhrganbr = null, $comparison = null)
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

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_OEDHRGANBR, $oedhrganbr, $comparison);
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
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \SalesHistory object
     *
     * @param \SalesHistory|ObjectCollection $salesHistory The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            return $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $salesHistory->getOehhnbr(), $comparison);
        } elseif ($salesHistory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesHistoryDetailTableMap::COL_OEHHNBR, $salesHistory->toKeyValue('PrimaryKey', 'Oehhnbr'), $comparison);
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
     */
    public function joinSalesHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildSalesHistoryDetail $salesHistoryDetail Object to remove from the list of results
     *
     * @return $this|ChildSalesHistoryDetailQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // SalesHistoryDetailQuery
