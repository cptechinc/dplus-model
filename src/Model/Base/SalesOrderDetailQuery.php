<?php

namespace Base;

use \SalesOrderDetail as ChildSalesOrderDetail;
use \SalesOrderDetailQuery as ChildSalesOrderDetailQuery;
use \Exception;
use \PDO;
use Map\SalesOrderDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_detail` table.
 *
 * @method     ChildSalesOrderDetailQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtline($order = Criteria::ASC) Order by the OedtLine column
 * @method     ChildSalesOrderDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtdesc($order = Criteria::ASC) Order by the OedtDesc column
 * @method     ChildSalesOrderDetailQuery orderByOedtdesc2($order = Criteria::ASC) Order by the OedtDesc2 column
 * @method     ChildSalesOrderDetailQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSalesOrderDetailQuery orderByOedtrqstdate($order = Criteria::ASC) Order by the OedtRqstDate column
 * @method     ChildSalesOrderDetailQuery orderByOedtcancdate($order = Criteria::ASC) Order by the OedtCancDate column
 * @method     ChildSalesOrderDetailQuery orderByOedtshipdate($order = Criteria::ASC) Order by the OedtShipDate column
 * @method     ChildSalesOrderDetailQuery orderByOedtspecordr($order = Criteria::ASC) Order by the OedtSpecOrdr column
 * @method     ChildSalesOrderDetailQuery orderByArtbctaxcode($order = Criteria::ASC) Order by the ArtbCtaxCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtqtyord($order = Criteria::ASC) Order by the OedtQtyOrd column
 * @method     ChildSalesOrderDetailQuery orderByOedtqtyship($order = Criteria::ASC) Order by the OedtQtyShip column
 * @method     ChildSalesOrderDetailQuery orderByOedtqtyshiptot($order = Criteria::ASC) Order by the OedtQtyShipTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtqtybord($order = Criteria::ASC) Order by the OedtQtyBord column
 * @method     ChildSalesOrderDetailQuery orderByOedtpric($order = Criteria::ASC) Order by the OedtPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtcost($order = Criteria::ASC) Order by the OedtCost column
 * @method     ChildSalesOrderDetailQuery orderByOedttaxpcttot($order = Criteria::ASC) Order by the OedtTaxPctTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtprictot($order = Criteria::ASC) Order by the OedtPricTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtcosttot($order = Criteria::ASC) Order by the OedtCostTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtspcommpct($order = Criteria::ASC) Order by the OedtSpCommPct column
 * @method     ChildSalesOrderDetailQuery orderByOedtbrkncaseqty($order = Criteria::ASC) Order by the OedtBrknCaseQty column
 * @method     ChildSalesOrderDetailQuery orderByOedtbin($order = Criteria::ASC) Order by the OedtBin column
 * @method     ChildSalesOrderDetailQuery orderByOedtpersonalcd($order = Criteria::ASC) Order by the OedtPersonalCd column
 * @method     ChildSalesOrderDetailQuery orderByOedtacdisc1($order = Criteria::ASC) Order by the OedtAcDisc1 column
 * @method     ChildSalesOrderDetailQuery orderByOedtacdisc2($order = Criteria::ASC) Order by the OedtAcDisc2 column
 * @method     ChildSalesOrderDetailQuery orderByOedtacdisc3($order = Criteria::ASC) Order by the OedtAcDisc3 column
 * @method     ChildSalesOrderDetailQuery orderByOedtacdisc4($order = Criteria::ASC) Order by the OedtAcDisc4 column
 * @method     ChildSalesOrderDetailQuery orderByOedtlmwipnbr($order = Criteria::ASC) Order by the OedtLmWipNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtcorepric($order = Criteria::ASC) Order by the OedtCorePric column
 * @method     ChildSalesOrderDetailQuery orderByOedtasstcode($order = Criteria::ASC) Order by the OedtAsstCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtasstqty($order = Criteria::ASC) Order by the OedtAsstQty column
 * @method     ChildSalesOrderDetailQuery orderByOedtlistpric($order = Criteria::ASC) Order by the OedtListPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtstancost($order = Criteria::ASC) Order by the OedtStanCost column
 * @method     ChildSalesOrderDetailQuery orderByOedtvenditemjob($order = Criteria::ASC) Order by the OedtVendItemJob column
 * @method     ChildSalesOrderDetailQuery orderByOedtnsvendid($order = Criteria::ASC) Order by the OedtNsVendId column
 * @method     ChildSalesOrderDetailQuery orderByOedtnsitemgrup($order = Criteria::ASC) Order by the OedtNsItemGrup column
 * @method     ChildSalesOrderDetailQuery orderByOedtusecode($order = Criteria::ASC) Order by the OedtUseCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtnsshipfromid($order = Criteria::ASC) Order by the OedtNsShipFromId column
 * @method     ChildSalesOrderDetailQuery orderByOedtasstovrd($order = Criteria::ASC) Order by the OedtAsstOvrd column
 * @method     ChildSalesOrderDetailQuery orderByOedtpricovrd($order = Criteria::ASC) Order by the OedtPricOvrd column
 * @method     ChildSalesOrderDetailQuery orderByOedtpickflag($order = Criteria::ASC) Order by the OedtPickFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode1($order = Criteria::ASC) Order by the OedtMstrTaxCode1 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct1($order = Criteria::ASC) Order by the OedtMstrTaxPct1 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode2($order = Criteria::ASC) Order by the OedtMstrTaxCode2 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct2($order = Criteria::ASC) Order by the OedtMstrTaxPct2 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode3($order = Criteria::ASC) Order by the OedtMstrTaxCode3 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct3($order = Criteria::ASC) Order by the OedtMstrTaxPct3 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode4($order = Criteria::ASC) Order by the OedtMstrTaxCode4 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct4($order = Criteria::ASC) Order by the OedtMstrTaxPct4 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode5($order = Criteria::ASC) Order by the OedtMstrTaxCode5 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct5($order = Criteria::ASC) Order by the OedtMstrTaxPct5 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode6($order = Criteria::ASC) Order by the OedtMstrTaxCode6 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct6($order = Criteria::ASC) Order by the OedtMstrTaxPct6 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode7($order = Criteria::ASC) Order by the OedtMstrTaxCode7 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct7($order = Criteria::ASC) Order by the OedtMstrTaxPct7 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode8($order = Criteria::ASC) Order by the OedtMstrTaxCode8 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct8($order = Criteria::ASC) Order by the OedtMstrTaxPct8 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxcode9($order = Criteria::ASC) Order by the OedtMstrTaxCode9 column
 * @method     ChildSalesOrderDetailQuery orderByOedtmstrtaxpct9($order = Criteria::ASC) Order by the OedtMstrTaxPct9 column
 * @method     ChildSalesOrderDetailQuery orderByOedtbinarea($order = Criteria::ASC) Order by the OedtBinArea column
 * @method     ChildSalesOrderDetailQuery orderByOedtsplitline($order = Criteria::ASC) Order by the OedtSplitLine column
 * @method     ChildSalesOrderDetailQuery orderByOedtlostreas($order = Criteria::ASC) Order by the OedtLostReas column
 * @method     ChildSalesOrderDetailQuery orderByOedtorigline($order = Criteria::ASC) Order by the OedtOrigLine column
 * @method     ChildSalesOrderDetailQuery orderByOedtcustcrssref($order = Criteria::ASC) Order by the OedtCustCrssRef column
 * @method     ChildSalesOrderDetailQuery orderByOedtuom($order = Criteria::ASC) Order by the OedtUom column
 * @method     ChildSalesOrderDetailQuery orderByOedtshipflag($order = Criteria::ASC) Order by the OedtShipFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedtkitflag($order = Criteria::ASC) Order by the OedtKitFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedtkititemnbr($order = Criteria::ASC) Order by the OedtKitItemNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtbfcost($order = Criteria::ASC) Order by the OedtBfCost column
 * @method     ChildSalesOrderDetailQuery orderByOedtbfmsgcode($order = Criteria::ASC) Order by the OedtBfMsgCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtbfcosttot($order = Criteria::ASC) Order by the OedtBfCostTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtlmbulkpric($order = Criteria::ASC) Order by the OedtLmBulkPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtlmmtrxpkgpric($order = Criteria::ASC) Order by the OedtLmMtrxPkgPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtlmmtrxbulkpric($order = Criteria::ASC) Order by the OedtLmMtrxBulkPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtlmcontractpric($order = Criteria::ASC) Order by the OedtLmContractPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtwghttot($order = Criteria::ASC) Order by the OedtWghtTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtordras($order = Criteria::ASC) Order by the OedtOrdrAs column
 * @method     ChildSalesOrderDetailQuery orderByOedtpodetlinenbr($order = Criteria::ASC) Order by the OedtPoDetLineNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtqtytoship($order = Criteria::ASC) Order by the OedtQtyToShip column
 * @method     ChildSalesOrderDetailQuery orderByOedtponbr($order = Criteria::ASC) Order by the OedtPoNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtporef($order = Criteria::ASC) Order by the OedtPoRef column
 * @method     ChildSalesOrderDetailQuery orderByOedtfrtin($order = Criteria::ASC) Order by the OedtFrtIn column
 * @method     ChildSalesOrderDetailQuery orderByOedtfrtinentered($order = Criteria::ASC) Order by the OedtFrtInEntered column
 * @method     ChildSalesOrderDetailQuery orderByOedtprodcmplt($order = Criteria::ASC) Order by the OedtProdCmplt column
 * @method     ChildSalesOrderDetailQuery orderByOedterflag($order = Criteria::ASC) Order by the OedtErFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedtorigitem($order = Criteria::ASC) Order by the OedtOrigItem column
 * @method     ChildSalesOrderDetailQuery orderByOedtsubflag($order = Criteria::ASC) Order by the OedtSubFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedtediincomingseq($order = Criteria::ASC) Order by the OedtEdiIncomingSeq column
 * @method     ChildSalesOrderDetailQuery orderByOedtspordpoline($order = Criteria::ASC) Order by the OedtSpordPoLine column
 * @method     ChildSalesOrderDetailQuery orderByOedtcatlgid($order = Criteria::ASC) Order by the OedtCatlgId column
 * @method     ChildSalesOrderDetailQuery orderByOedtdesigncd($order = Criteria::ASC) Order by the OedtDesignCd column
 * @method     ChildSalesOrderDetailQuery orderByOedtdiscpct($order = Criteria::ASC) Order by the OedtDiscPct column
 * @method     ChildSalesOrderDetailQuery orderByOedttaxamt($order = Criteria::ASC) Order by the OedtTaxAmt column
 * @method     ChildSalesOrderDetailQuery orderByOedtxusage($order = Criteria::ASC) Order by the OedtXUsage column
 * @method     ChildSalesOrderDetailQuery orderByOedtrqtslock($order = Criteria::ASC) Order by the OedtRqtsLock column
 * @method     ChildSalesOrderDetailQuery orderByOedtfreshfrozen($order = Criteria::ASC) Order by the OedtFreshFrozen column
 * @method     ChildSalesOrderDetailQuery orderByOedtcoreflag($order = Criteria::ASC) Order by the OedtCoreFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedtnssalesacct($order = Criteria::ASC) Order by the OedtNsSalesAcct column
 * @method     ChildSalesOrderDetailQuery orderByOedtcertreqd($order = Criteria::ASC) Order by the OedtCertReqd column
 * @method     ChildSalesOrderDetailQuery orderByOedtaddonsales($order = Criteria::ASC) Order by the OedtAddOnSales column
 * @method     ChildSalesOrderDetailQuery orderByOedtbordflag($order = Criteria::ASC) Order by the OedtBordFlag column
 * @method     ChildSalesOrderDetailQuery orderByOedttempgrove($order = Criteria::ASC) Order by the OedtTempGrove column
 * @method     ChildSalesOrderDetailQuery orderByOedtgrovedisc($order = Criteria::ASC) Order by the OedtGroveDisc column
 * @method     ChildSalesOrderDetailQuery orderByOedtoffinvc($order = Criteria::ASC) Order by the OedtOffInvc column
 * @method     ChildSalesOrderDetailQuery orderByInititemgrup($order = Criteria::ASC) Order by the InitItemGrup column
 * @method     ChildSalesOrderDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildSalesOrderDetailQuery orderByOedtacct($order = Criteria::ASC) Order by the OedtAcct column
 * @method     ChildSalesOrderDetailQuery orderByOedtloadtot($order = Criteria::ASC) Order by the OedtLoadTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtpickedqty($order = Criteria::ASC) Order by the OedtPickedQty column
 * @method     ChildSalesOrderDetailQuery orderByOedtwiorigqty($order = Criteria::ASC) Order by the OedtWiOrigQty column
 * @method     ChildSalesOrderDetailQuery orderByOedtmargintot($order = Criteria::ASC) Order by the OedtMarginTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtcorecost($order = Criteria::ASC) Order by the OedtCoreCost column
 * @method     ChildSalesOrderDetailQuery orderByOedtitemref($order = Criteria::ASC) Order by the OedtItemRef column
 * @method     ChildSalesOrderDetailQuery orderByOedtsac02returncode($order = Criteria::ASC) Order by the OedtSac02ReturnCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtwgtaxcode($order = Criteria::ASC) Order by the OedtWgTaxCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtwgprice($order = Criteria::ASC) Order by the OedtWgPrice column
 * @method     ChildSalesOrderDetailQuery orderByOedtwgtot($order = Criteria::ASC) Order by the OedtWgTot column
 * @method     ChildSalesOrderDetailQuery orderByOedtcntrqty($order = Criteria::ASC) Order by the OedtCntrQty column
 * @method     ChildSalesOrderDetailQuery orderByOedtconfirmcode($order = Criteria::ASC) Order by the OedtConfirmCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtpicked($order = Criteria::ASC) Order by the OedtPicked column
 * @method     ChildSalesOrderDetailQuery orderByOedtorigrqstdate($order = Criteria::ASC) Order by the OedtOrigRqstDate column
 * @method     ChildSalesOrderDetailQuery orderByOedtfablock($order = Criteria::ASC) Order by the OedtFabLock column
 * @method     ChildSalesOrderDetailQuery orderByOedtlabelprinted($order = Criteria::ASC) Order by the OedtLabelPrinted column
 * @method     ChildSalesOrderDetailQuery orderByOedtquoteid($order = Criteria::ASC) Order by the OedtQuoteId column
 * @method     ChildSalesOrderDetailQuery orderByOedtinvprinted($order = Criteria::ASC) Order by the OedtInvPrinted column
 * @method     ChildSalesOrderDetailQuery orderByOedtstockcheck($order = Criteria::ASC) Order by the OedtStockCheck column
 * @method     ChildSalesOrderDetailQuery orderByOedtshouldwesplit($order = Criteria::ASC) Order by the OedtShouldWeSplit column
 * @method     ChildSalesOrderDetailQuery orderByOedtcofcreqd($order = Criteria::ASC) Order by the OedtCofcReqd column
 * @method     ChildSalesOrderDetailQuery orderByOedtackcode($order = Criteria::ASC) Order by the OedtAckCode column
 * @method     ChildSalesOrderDetailQuery orderByOedtwibordnbr($order = Criteria::ASC) Order by the OedtWiBordNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtcerthistordr($order = Criteria::ASC) Order by the OedtCertHistOrdr column
 * @method     ChildSalesOrderDetailQuery orderByOedtcerthistline($order = Criteria::ASC) Order by the OedtCertHistLine column
 * @method     ChildSalesOrderDetailQuery orderByOedtordrdasitemid($order = Criteria::ASC) Order by the OedtOrdrdAsItemId column
 * @method     ChildSalesOrderDetailQuery orderByOedtwibatch1nbr($order = Criteria::ASC) Order by the OedtWiBatch1Nbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtwibatch1qty($order = Criteria::ASC) Order by the OedtWiBatch1Qty column
 * @method     ChildSalesOrderDetailQuery orderByOedtwibatch1stat($order = Criteria::ASC) Order by the OedtWiBatch1Stat column
 * @method     ChildSalesOrderDetailQuery orderByOedtrganbr($order = Criteria::ASC) Order by the OedtRgaNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtorigpric($order = Criteria::ASC) Order by the OedtOrigPric column
 * @method     ChildSalesOrderDetailQuery orderByOedtreflinenbr($order = Criteria::ASC) Order by the OedtRefLineNbr column
 * @method     ChildSalesOrderDetailQuery orderByOedtbinlocn($order = Criteria::ASC) Order by the OedtBinLocn column
 * @method     ChildSalesOrderDetailQuery orderByOedtacsuplywhse($order = Criteria::ASC) Order by the OedtAcSuplyWhse column
 * @method     ChildSalesOrderDetailQuery orderByOedtacpricdate($order = Criteria::ASC) Order by the OedtAcPricDate column
 * @method     ChildSalesOrderDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesOrderDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesOrderDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderDetailQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtline() Group by the OedtLine column
 * @method     ChildSalesOrderDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtdesc() Group by the OedtDesc column
 * @method     ChildSalesOrderDetailQuery groupByOedtdesc2() Group by the OedtDesc2 column
 * @method     ChildSalesOrderDetailQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSalesOrderDetailQuery groupByOedtrqstdate() Group by the OedtRqstDate column
 * @method     ChildSalesOrderDetailQuery groupByOedtcancdate() Group by the OedtCancDate column
 * @method     ChildSalesOrderDetailQuery groupByOedtshipdate() Group by the OedtShipDate column
 * @method     ChildSalesOrderDetailQuery groupByOedtspecordr() Group by the OedtSpecOrdr column
 * @method     ChildSalesOrderDetailQuery groupByArtbctaxcode() Group by the ArtbCtaxCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtqtyord() Group by the OedtQtyOrd column
 * @method     ChildSalesOrderDetailQuery groupByOedtqtyship() Group by the OedtQtyShip column
 * @method     ChildSalesOrderDetailQuery groupByOedtqtyshiptot() Group by the OedtQtyShipTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtqtybord() Group by the OedtQtyBord column
 * @method     ChildSalesOrderDetailQuery groupByOedtpric() Group by the OedtPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtcost() Group by the OedtCost column
 * @method     ChildSalesOrderDetailQuery groupByOedttaxpcttot() Group by the OedtTaxPctTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtprictot() Group by the OedtPricTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtcosttot() Group by the OedtCostTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtspcommpct() Group by the OedtSpCommPct column
 * @method     ChildSalesOrderDetailQuery groupByOedtbrkncaseqty() Group by the OedtBrknCaseQty column
 * @method     ChildSalesOrderDetailQuery groupByOedtbin() Group by the OedtBin column
 * @method     ChildSalesOrderDetailQuery groupByOedtpersonalcd() Group by the OedtPersonalCd column
 * @method     ChildSalesOrderDetailQuery groupByOedtacdisc1() Group by the OedtAcDisc1 column
 * @method     ChildSalesOrderDetailQuery groupByOedtacdisc2() Group by the OedtAcDisc2 column
 * @method     ChildSalesOrderDetailQuery groupByOedtacdisc3() Group by the OedtAcDisc3 column
 * @method     ChildSalesOrderDetailQuery groupByOedtacdisc4() Group by the OedtAcDisc4 column
 * @method     ChildSalesOrderDetailQuery groupByOedtlmwipnbr() Group by the OedtLmWipNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtcorepric() Group by the OedtCorePric column
 * @method     ChildSalesOrderDetailQuery groupByOedtasstcode() Group by the OedtAsstCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtasstqty() Group by the OedtAsstQty column
 * @method     ChildSalesOrderDetailQuery groupByOedtlistpric() Group by the OedtListPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtstancost() Group by the OedtStanCost column
 * @method     ChildSalesOrderDetailQuery groupByOedtvenditemjob() Group by the OedtVendItemJob column
 * @method     ChildSalesOrderDetailQuery groupByOedtnsvendid() Group by the OedtNsVendId column
 * @method     ChildSalesOrderDetailQuery groupByOedtnsitemgrup() Group by the OedtNsItemGrup column
 * @method     ChildSalesOrderDetailQuery groupByOedtusecode() Group by the OedtUseCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtnsshipfromid() Group by the OedtNsShipFromId column
 * @method     ChildSalesOrderDetailQuery groupByOedtasstovrd() Group by the OedtAsstOvrd column
 * @method     ChildSalesOrderDetailQuery groupByOedtpricovrd() Group by the OedtPricOvrd column
 * @method     ChildSalesOrderDetailQuery groupByOedtpickflag() Group by the OedtPickFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode1() Group by the OedtMstrTaxCode1 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct1() Group by the OedtMstrTaxPct1 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode2() Group by the OedtMstrTaxCode2 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct2() Group by the OedtMstrTaxPct2 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode3() Group by the OedtMstrTaxCode3 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct3() Group by the OedtMstrTaxPct3 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode4() Group by the OedtMstrTaxCode4 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct4() Group by the OedtMstrTaxPct4 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode5() Group by the OedtMstrTaxCode5 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct5() Group by the OedtMstrTaxPct5 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode6() Group by the OedtMstrTaxCode6 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct6() Group by the OedtMstrTaxPct6 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode7() Group by the OedtMstrTaxCode7 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct7() Group by the OedtMstrTaxPct7 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode8() Group by the OedtMstrTaxCode8 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct8() Group by the OedtMstrTaxPct8 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxcode9() Group by the OedtMstrTaxCode9 column
 * @method     ChildSalesOrderDetailQuery groupByOedtmstrtaxpct9() Group by the OedtMstrTaxPct9 column
 * @method     ChildSalesOrderDetailQuery groupByOedtbinarea() Group by the OedtBinArea column
 * @method     ChildSalesOrderDetailQuery groupByOedtsplitline() Group by the OedtSplitLine column
 * @method     ChildSalesOrderDetailQuery groupByOedtlostreas() Group by the OedtLostReas column
 * @method     ChildSalesOrderDetailQuery groupByOedtorigline() Group by the OedtOrigLine column
 * @method     ChildSalesOrderDetailQuery groupByOedtcustcrssref() Group by the OedtCustCrssRef column
 * @method     ChildSalesOrderDetailQuery groupByOedtuom() Group by the OedtUom column
 * @method     ChildSalesOrderDetailQuery groupByOedtshipflag() Group by the OedtShipFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedtkitflag() Group by the OedtKitFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedtkititemnbr() Group by the OedtKitItemNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtbfcost() Group by the OedtBfCost column
 * @method     ChildSalesOrderDetailQuery groupByOedtbfmsgcode() Group by the OedtBfMsgCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtbfcosttot() Group by the OedtBfCostTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtlmbulkpric() Group by the OedtLmBulkPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtlmmtrxpkgpric() Group by the OedtLmMtrxPkgPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtlmmtrxbulkpric() Group by the OedtLmMtrxBulkPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtlmcontractpric() Group by the OedtLmContractPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtwghttot() Group by the OedtWghtTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtordras() Group by the OedtOrdrAs column
 * @method     ChildSalesOrderDetailQuery groupByOedtpodetlinenbr() Group by the OedtPoDetLineNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtqtytoship() Group by the OedtQtyToShip column
 * @method     ChildSalesOrderDetailQuery groupByOedtponbr() Group by the OedtPoNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtporef() Group by the OedtPoRef column
 * @method     ChildSalesOrderDetailQuery groupByOedtfrtin() Group by the OedtFrtIn column
 * @method     ChildSalesOrderDetailQuery groupByOedtfrtinentered() Group by the OedtFrtInEntered column
 * @method     ChildSalesOrderDetailQuery groupByOedtprodcmplt() Group by the OedtProdCmplt column
 * @method     ChildSalesOrderDetailQuery groupByOedterflag() Group by the OedtErFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedtorigitem() Group by the OedtOrigItem column
 * @method     ChildSalesOrderDetailQuery groupByOedtsubflag() Group by the OedtSubFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedtediincomingseq() Group by the OedtEdiIncomingSeq column
 * @method     ChildSalesOrderDetailQuery groupByOedtspordpoline() Group by the OedtSpordPoLine column
 * @method     ChildSalesOrderDetailQuery groupByOedtcatlgid() Group by the OedtCatlgId column
 * @method     ChildSalesOrderDetailQuery groupByOedtdesigncd() Group by the OedtDesignCd column
 * @method     ChildSalesOrderDetailQuery groupByOedtdiscpct() Group by the OedtDiscPct column
 * @method     ChildSalesOrderDetailQuery groupByOedttaxamt() Group by the OedtTaxAmt column
 * @method     ChildSalesOrderDetailQuery groupByOedtxusage() Group by the OedtXUsage column
 * @method     ChildSalesOrderDetailQuery groupByOedtrqtslock() Group by the OedtRqtsLock column
 * @method     ChildSalesOrderDetailQuery groupByOedtfreshfrozen() Group by the OedtFreshFrozen column
 * @method     ChildSalesOrderDetailQuery groupByOedtcoreflag() Group by the OedtCoreFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedtnssalesacct() Group by the OedtNsSalesAcct column
 * @method     ChildSalesOrderDetailQuery groupByOedtcertreqd() Group by the OedtCertReqd column
 * @method     ChildSalesOrderDetailQuery groupByOedtaddonsales() Group by the OedtAddOnSales column
 * @method     ChildSalesOrderDetailQuery groupByOedtbordflag() Group by the OedtBordFlag column
 * @method     ChildSalesOrderDetailQuery groupByOedttempgrove() Group by the OedtTempGrove column
 * @method     ChildSalesOrderDetailQuery groupByOedtgrovedisc() Group by the OedtGroveDisc column
 * @method     ChildSalesOrderDetailQuery groupByOedtoffinvc() Group by the OedtOffInvc column
 * @method     ChildSalesOrderDetailQuery groupByInititemgrup() Group by the InitItemGrup column
 * @method     ChildSalesOrderDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildSalesOrderDetailQuery groupByOedtacct() Group by the OedtAcct column
 * @method     ChildSalesOrderDetailQuery groupByOedtloadtot() Group by the OedtLoadTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtpickedqty() Group by the OedtPickedQty column
 * @method     ChildSalesOrderDetailQuery groupByOedtwiorigqty() Group by the OedtWiOrigQty column
 * @method     ChildSalesOrderDetailQuery groupByOedtmargintot() Group by the OedtMarginTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtcorecost() Group by the OedtCoreCost column
 * @method     ChildSalesOrderDetailQuery groupByOedtitemref() Group by the OedtItemRef column
 * @method     ChildSalesOrderDetailQuery groupByOedtsac02returncode() Group by the OedtSac02ReturnCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtwgtaxcode() Group by the OedtWgTaxCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtwgprice() Group by the OedtWgPrice column
 * @method     ChildSalesOrderDetailQuery groupByOedtwgtot() Group by the OedtWgTot column
 * @method     ChildSalesOrderDetailQuery groupByOedtcntrqty() Group by the OedtCntrQty column
 * @method     ChildSalesOrderDetailQuery groupByOedtconfirmcode() Group by the OedtConfirmCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtpicked() Group by the OedtPicked column
 * @method     ChildSalesOrderDetailQuery groupByOedtorigrqstdate() Group by the OedtOrigRqstDate column
 * @method     ChildSalesOrderDetailQuery groupByOedtfablock() Group by the OedtFabLock column
 * @method     ChildSalesOrderDetailQuery groupByOedtlabelprinted() Group by the OedtLabelPrinted column
 * @method     ChildSalesOrderDetailQuery groupByOedtquoteid() Group by the OedtQuoteId column
 * @method     ChildSalesOrderDetailQuery groupByOedtinvprinted() Group by the OedtInvPrinted column
 * @method     ChildSalesOrderDetailQuery groupByOedtstockcheck() Group by the OedtStockCheck column
 * @method     ChildSalesOrderDetailQuery groupByOedtshouldwesplit() Group by the OedtShouldWeSplit column
 * @method     ChildSalesOrderDetailQuery groupByOedtcofcreqd() Group by the OedtCofcReqd column
 * @method     ChildSalesOrderDetailQuery groupByOedtackcode() Group by the OedtAckCode column
 * @method     ChildSalesOrderDetailQuery groupByOedtwibordnbr() Group by the OedtWiBordNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtcerthistordr() Group by the OedtCertHistOrdr column
 * @method     ChildSalesOrderDetailQuery groupByOedtcerthistline() Group by the OedtCertHistLine column
 * @method     ChildSalesOrderDetailQuery groupByOedtordrdasitemid() Group by the OedtOrdrdAsItemId column
 * @method     ChildSalesOrderDetailQuery groupByOedtwibatch1nbr() Group by the OedtWiBatch1Nbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtwibatch1qty() Group by the OedtWiBatch1Qty column
 * @method     ChildSalesOrderDetailQuery groupByOedtwibatch1stat() Group by the OedtWiBatch1Stat column
 * @method     ChildSalesOrderDetailQuery groupByOedtrganbr() Group by the OedtRgaNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtorigpric() Group by the OedtOrigPric column
 * @method     ChildSalesOrderDetailQuery groupByOedtreflinenbr() Group by the OedtRefLineNbr column
 * @method     ChildSalesOrderDetailQuery groupByOedtbinlocn() Group by the OedtBinLocn column
 * @method     ChildSalesOrderDetailQuery groupByOedtacsuplywhse() Group by the OedtAcSuplyWhse column
 * @method     ChildSalesOrderDetailQuery groupByOedtacpricdate() Group by the OedtAcPricDate column
 * @method     ChildSalesOrderDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesOrderDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesOrderDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderDetailQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSalesOrderDetailQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSalesOrderDetailQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderDetailQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSalesOrderDetailQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSalesOrderDetailQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesOrderDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinSalesOrderLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderDetailQuery rightJoinSalesOrderLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderDetailQuery innerJoinSalesOrderLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery joinWithSalesOrderLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinWithSalesOrderLotserial() Adds a LEFT JOIN clause and with to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderDetailQuery rightJoinWithSalesOrderLotserial() Adds a RIGHT JOIN clause and with to the query using the SalesOrderLotserial relation
 * @method     ChildSalesOrderDetailQuery innerJoinWithSalesOrderLotserial() Adds a INNER JOIN clause and with to the query using the SalesOrderLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinSoAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderDetailQuery rightJoinSoAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderDetailQuery innerJoinSoAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery joinWithSoAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinWithSoAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderDetailQuery rightJoinWithSoAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildSalesOrderDetailQuery innerJoinWithSoAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinSoPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildSalesOrderDetailQuery rightJoinSoPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildSalesOrderDetailQuery innerJoinSoPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoPickedLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery joinWithSoPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoPickedLotserial relation
 *
 * @method     ChildSalesOrderDetailQuery leftJoinWithSoPickedLotserial() Adds a LEFT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildSalesOrderDetailQuery rightJoinWithSoPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildSalesOrderDetailQuery innerJoinWithSoPickedLotserial() Adds a INNER JOIN clause and with to the query using the SoPickedLotserial relation
 *
 * @method     \SalesOrderQuery|\ItemMasterItemQuery|\SalesOrderLotserialQuery|\SoAllocatedLotserialQuery|\SoPickedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesOrderDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildSalesOrderDetail matching the query
 * @method     ChildSalesOrderDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSalesOrderDetail matching the query, or a new ChildSalesOrderDetail object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderDetail|null findOneByOehdnbr(int $OehdNbr) Return the first ChildSalesOrderDetail filtered by the OehdNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtline(int $OedtLine) Return the first ChildSalesOrderDetail filtered by the OedtLine column
 * @method     ChildSalesOrderDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesOrderDetail filtered by the InitItemNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtdesc(string $OedtDesc) Return the first ChildSalesOrderDetail filtered by the OedtDesc column
 * @method     ChildSalesOrderDetail|null findOneByOedtdesc2(string $OedtDesc2) Return the first ChildSalesOrderDetail filtered by the OedtDesc2 column
 * @method     ChildSalesOrderDetail|null findOneByIntbwhse(string $IntbWhse) Return the first ChildSalesOrderDetail filtered by the IntbWhse column
 * @method     ChildSalesOrderDetail|null findOneByOedtrqstdate(string $OedtRqstDate) Return the first ChildSalesOrderDetail filtered by the OedtRqstDate column
 * @method     ChildSalesOrderDetail|null findOneByOedtcancdate(string $OedtCancDate) Return the first ChildSalesOrderDetail filtered by the OedtCancDate column
 * @method     ChildSalesOrderDetail|null findOneByOedtshipdate(string $OedtShipDate) Return the first ChildSalesOrderDetail filtered by the OedtShipDate column
 * @method     ChildSalesOrderDetail|null findOneByOedtspecordr(string $OedtSpecOrdr) Return the first ChildSalesOrderDetail filtered by the OedtSpecOrdr column
 * @method     ChildSalesOrderDetail|null findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildSalesOrderDetail filtered by the ArtbCtaxCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtqtyord(string $OedtQtyOrd) Return the first ChildSalesOrderDetail filtered by the OedtQtyOrd column
 * @method     ChildSalesOrderDetail|null findOneByOedtqtyship(string $OedtQtyShip) Return the first ChildSalesOrderDetail filtered by the OedtQtyShip column
 * @method     ChildSalesOrderDetail|null findOneByOedtqtyshiptot(string $OedtQtyShipTot) Return the first ChildSalesOrderDetail filtered by the OedtQtyShipTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtqtybord(string $OedtQtyBord) Return the first ChildSalesOrderDetail filtered by the OedtQtyBord column
 * @method     ChildSalesOrderDetail|null findOneByOedtpric(string $OedtPric) Return the first ChildSalesOrderDetail filtered by the OedtPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtcost(string $OedtCost) Return the first ChildSalesOrderDetail filtered by the OedtCost column
 * @method     ChildSalesOrderDetail|null findOneByOedttaxpcttot(string $OedtTaxPctTot) Return the first ChildSalesOrderDetail filtered by the OedtTaxPctTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtprictot(string $OedtPricTot) Return the first ChildSalesOrderDetail filtered by the OedtPricTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtcosttot(string $OedtCostTot) Return the first ChildSalesOrderDetail filtered by the OedtCostTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtspcommpct(string $OedtSpCommPct) Return the first ChildSalesOrderDetail filtered by the OedtSpCommPct column
 * @method     ChildSalesOrderDetail|null findOneByOedtbrkncaseqty(int $OedtBrknCaseQty) Return the first ChildSalesOrderDetail filtered by the OedtBrknCaseQty column
 * @method     ChildSalesOrderDetail|null findOneByOedtbin(string $OedtBin) Return the first ChildSalesOrderDetail filtered by the OedtBin column
 * @method     ChildSalesOrderDetail|null findOneByOedtpersonalcd(string $OedtPersonalCd) Return the first ChildSalesOrderDetail filtered by the OedtPersonalCd column
 * @method     ChildSalesOrderDetail|null findOneByOedtacdisc1(string $OedtAcDisc1) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc1 column
 * @method     ChildSalesOrderDetail|null findOneByOedtacdisc2(string $OedtAcDisc2) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc2 column
 * @method     ChildSalesOrderDetail|null findOneByOedtacdisc3(string $OedtAcDisc3) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc3 column
 * @method     ChildSalesOrderDetail|null findOneByOedtacdisc4(string $OedtAcDisc4) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc4 column
 * @method     ChildSalesOrderDetail|null findOneByOedtlmwipnbr(string $OedtLmWipNbr) Return the first ChildSalesOrderDetail filtered by the OedtLmWipNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtcorepric(string $OedtCorePric) Return the first ChildSalesOrderDetail filtered by the OedtCorePric column
 * @method     ChildSalesOrderDetail|null findOneByOedtasstcode(string $OedtAsstCode) Return the first ChildSalesOrderDetail filtered by the OedtAsstCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtasstqty(string $OedtAsstQty) Return the first ChildSalesOrderDetail filtered by the OedtAsstQty column
 * @method     ChildSalesOrderDetail|null findOneByOedtlistpric(string $OedtListPric) Return the first ChildSalesOrderDetail filtered by the OedtListPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtstancost(string $OedtStanCost) Return the first ChildSalesOrderDetail filtered by the OedtStanCost column
 * @method     ChildSalesOrderDetail|null findOneByOedtvenditemjob(string $OedtVendItemJob) Return the first ChildSalesOrderDetail filtered by the OedtVendItemJob column
 * @method     ChildSalesOrderDetail|null findOneByOedtnsvendid(string $OedtNsVendId) Return the first ChildSalesOrderDetail filtered by the OedtNsVendId column
 * @method     ChildSalesOrderDetail|null findOneByOedtnsitemgrup(string $OedtNsItemGrup) Return the first ChildSalesOrderDetail filtered by the OedtNsItemGrup column
 * @method     ChildSalesOrderDetail|null findOneByOedtusecode(string $OedtUseCode) Return the first ChildSalesOrderDetail filtered by the OedtUseCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtnsshipfromid(string $OedtNsShipFromId) Return the first ChildSalesOrderDetail filtered by the OedtNsShipFromId column
 * @method     ChildSalesOrderDetail|null findOneByOedtasstovrd(string $OedtAsstOvrd) Return the first ChildSalesOrderDetail filtered by the OedtAsstOvrd column
 * @method     ChildSalesOrderDetail|null findOneByOedtpricovrd(string $OedtPricOvrd) Return the first ChildSalesOrderDetail filtered by the OedtPricOvrd column
 * @method     ChildSalesOrderDetail|null findOneByOedtpickflag(string $OedtPickFlag) Return the first ChildSalesOrderDetail filtered by the OedtPickFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode1(string $OedtMstrTaxCode1) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode1 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct1(string $OedtMstrTaxPct1) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct1 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode2(string $OedtMstrTaxCode2) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode2 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct2(string $OedtMstrTaxPct2) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct2 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode3(string $OedtMstrTaxCode3) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode3 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct3(string $OedtMstrTaxPct3) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct3 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode4(string $OedtMstrTaxCode4) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode4 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct4(string $OedtMstrTaxPct4) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct4 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode5(string $OedtMstrTaxCode5) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode5 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct5(string $OedtMstrTaxPct5) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct5 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode6(string $OedtMstrTaxCode6) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode6 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct6(string $OedtMstrTaxPct6) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct6 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode7(string $OedtMstrTaxCode7) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode7 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct7(string $OedtMstrTaxPct7) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct7 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode8(string $OedtMstrTaxCode8) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode8 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct8(string $OedtMstrTaxPct8) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct8 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxcode9(string $OedtMstrTaxCode9) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode9 column
 * @method     ChildSalesOrderDetail|null findOneByOedtmstrtaxpct9(string $OedtMstrTaxPct9) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct9 column
 * @method     ChildSalesOrderDetail|null findOneByOedtbinarea(string $OedtBinArea) Return the first ChildSalesOrderDetail filtered by the OedtBinArea column
 * @method     ChildSalesOrderDetail|null findOneByOedtsplitline(string $OedtSplitLine) Return the first ChildSalesOrderDetail filtered by the OedtSplitLine column
 * @method     ChildSalesOrderDetail|null findOneByOedtlostreas(string $OedtLostReas) Return the first ChildSalesOrderDetail filtered by the OedtLostReas column
 * @method     ChildSalesOrderDetail|null findOneByOedtorigline(int $OedtOrigLine) Return the first ChildSalesOrderDetail filtered by the OedtOrigLine column
 * @method     ChildSalesOrderDetail|null findOneByOedtcustcrssref(string $OedtCustCrssRef) Return the first ChildSalesOrderDetail filtered by the OedtCustCrssRef column
 * @method     ChildSalesOrderDetail|null findOneByOedtuom(string $OedtUom) Return the first ChildSalesOrderDetail filtered by the OedtUom column
 * @method     ChildSalesOrderDetail|null findOneByOedtshipflag(string $OedtShipFlag) Return the first ChildSalesOrderDetail filtered by the OedtShipFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedtkitflag(string $OedtKitFlag) Return the first ChildSalesOrderDetail filtered by the OedtKitFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedtkititemnbr(string $OedtKitItemNbr) Return the first ChildSalesOrderDetail filtered by the OedtKitItemNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtbfcost(string $OedtBfCost) Return the first ChildSalesOrderDetail filtered by the OedtBfCost column
 * @method     ChildSalesOrderDetail|null findOneByOedtbfmsgcode(string $OedtBfMsgCode) Return the first ChildSalesOrderDetail filtered by the OedtBfMsgCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtbfcosttot(string $OedtBfCostTot) Return the first ChildSalesOrderDetail filtered by the OedtBfCostTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtlmbulkpric(string $OedtLmBulkPric) Return the first ChildSalesOrderDetail filtered by the OedtLmBulkPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtlmmtrxpkgpric(string $OedtLmMtrxPkgPric) Return the first ChildSalesOrderDetail filtered by the OedtLmMtrxPkgPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtlmmtrxbulkpric(string $OedtLmMtrxBulkPric) Return the first ChildSalesOrderDetail filtered by the OedtLmMtrxBulkPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtlmcontractpric(string $OedtLmContractPric) Return the first ChildSalesOrderDetail filtered by the OedtLmContractPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtwghttot(string $OedtWghtTot) Return the first ChildSalesOrderDetail filtered by the OedtWghtTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtordras(string $OedtOrdrAs) Return the first ChildSalesOrderDetail filtered by the OedtOrdrAs column
 * @method     ChildSalesOrderDetail|null findOneByOedtpodetlinenbr(int $OedtPoDetLineNbr) Return the first ChildSalesOrderDetail filtered by the OedtPoDetLineNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtqtytoship(string $OedtQtyToShip) Return the first ChildSalesOrderDetail filtered by the OedtQtyToShip column
 * @method     ChildSalesOrderDetail|null findOneByOedtponbr(string $OedtPoNbr) Return the first ChildSalesOrderDetail filtered by the OedtPoNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtporef(string $OedtPoRef) Return the first ChildSalesOrderDetail filtered by the OedtPoRef column
 * @method     ChildSalesOrderDetail|null findOneByOedtfrtin(string $OedtFrtIn) Return the first ChildSalesOrderDetail filtered by the OedtFrtIn column
 * @method     ChildSalesOrderDetail|null findOneByOedtfrtinentered(string $OedtFrtInEntered) Return the first ChildSalesOrderDetail filtered by the OedtFrtInEntered column
 * @method     ChildSalesOrderDetail|null findOneByOedtprodcmplt(string $OedtProdCmplt) Return the first ChildSalesOrderDetail filtered by the OedtProdCmplt column
 * @method     ChildSalesOrderDetail|null findOneByOedterflag(string $OedtErFlag) Return the first ChildSalesOrderDetail filtered by the OedtErFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedtorigitem(string $OedtOrigItem) Return the first ChildSalesOrderDetail filtered by the OedtOrigItem column
 * @method     ChildSalesOrderDetail|null findOneByOedtsubflag(string $OedtSubFlag) Return the first ChildSalesOrderDetail filtered by the OedtSubFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedtediincomingseq(int $OedtEdiIncomingSeq) Return the first ChildSalesOrderDetail filtered by the OedtEdiIncomingSeq column
 * @method     ChildSalesOrderDetail|null findOneByOedtspordpoline(int $OedtSpordPoLine) Return the first ChildSalesOrderDetail filtered by the OedtSpordPoLine column
 * @method     ChildSalesOrderDetail|null findOneByOedtcatlgid(string $OedtCatlgId) Return the first ChildSalesOrderDetail filtered by the OedtCatlgId column
 * @method     ChildSalesOrderDetail|null findOneByOedtdesigncd(string $OedtDesignCd) Return the first ChildSalesOrderDetail filtered by the OedtDesignCd column
 * @method     ChildSalesOrderDetail|null findOneByOedtdiscpct(string $OedtDiscPct) Return the first ChildSalesOrderDetail filtered by the OedtDiscPct column
 * @method     ChildSalesOrderDetail|null findOneByOedttaxamt(string $OedtTaxAmt) Return the first ChildSalesOrderDetail filtered by the OedtTaxAmt column
 * @method     ChildSalesOrderDetail|null findOneByOedtxusage(string $OedtXUsage) Return the first ChildSalesOrderDetail filtered by the OedtXUsage column
 * @method     ChildSalesOrderDetail|null findOneByOedtrqtslock(string $OedtRqtsLock) Return the first ChildSalesOrderDetail filtered by the OedtRqtsLock column
 * @method     ChildSalesOrderDetail|null findOneByOedtfreshfrozen(string $OedtFreshFrozen) Return the first ChildSalesOrderDetail filtered by the OedtFreshFrozen column
 * @method     ChildSalesOrderDetail|null findOneByOedtcoreflag(string $OedtCoreFlag) Return the first ChildSalesOrderDetail filtered by the OedtCoreFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedtnssalesacct(string $OedtNsSalesAcct) Return the first ChildSalesOrderDetail filtered by the OedtNsSalesAcct column
 * @method     ChildSalesOrderDetail|null findOneByOedtcertreqd(string $OedtCertReqd) Return the first ChildSalesOrderDetail filtered by the OedtCertReqd column
 * @method     ChildSalesOrderDetail|null findOneByOedtaddonsales(string $OedtAddOnSales) Return the first ChildSalesOrderDetail filtered by the OedtAddOnSales column
 * @method     ChildSalesOrderDetail|null findOneByOedtbordflag(string $OedtBordFlag) Return the first ChildSalesOrderDetail filtered by the OedtBordFlag column
 * @method     ChildSalesOrderDetail|null findOneByOedttempgrove(string $OedtTempGrove) Return the first ChildSalesOrderDetail filtered by the OedtTempGrove column
 * @method     ChildSalesOrderDetail|null findOneByOedtgrovedisc(string $OedtGroveDisc) Return the first ChildSalesOrderDetail filtered by the OedtGroveDisc column
 * @method     ChildSalesOrderDetail|null findOneByOedtoffinvc(string $OedtOffInvc) Return the first ChildSalesOrderDetail filtered by the OedtOffInvc column
 * @method     ChildSalesOrderDetail|null findOneByInititemgrup(string $InitItemGrup) Return the first ChildSalesOrderDetail filtered by the InitItemGrup column
 * @method     ChildSalesOrderDetail|null findOneByApvevendid(string $ApveVendId) Return the first ChildSalesOrderDetail filtered by the ApveVendId column
 * @method     ChildSalesOrderDetail|null findOneByOedtacct(string $OedtAcct) Return the first ChildSalesOrderDetail filtered by the OedtAcct column
 * @method     ChildSalesOrderDetail|null findOneByOedtloadtot(string $OedtLoadTot) Return the first ChildSalesOrderDetail filtered by the OedtLoadTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtpickedqty(string $OedtPickedQty) Return the first ChildSalesOrderDetail filtered by the OedtPickedQty column
 * @method     ChildSalesOrderDetail|null findOneByOedtwiorigqty(string $OedtWiOrigQty) Return the first ChildSalesOrderDetail filtered by the OedtWiOrigQty column
 * @method     ChildSalesOrderDetail|null findOneByOedtmargintot(string $OedtMarginTot) Return the first ChildSalesOrderDetail filtered by the OedtMarginTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtcorecost(string $OedtCoreCost) Return the first ChildSalesOrderDetail filtered by the OedtCoreCost column
 * @method     ChildSalesOrderDetail|null findOneByOedtitemref(string $OedtItemRef) Return the first ChildSalesOrderDetail filtered by the OedtItemRef column
 * @method     ChildSalesOrderDetail|null findOneByOedtsac02returncode(string $OedtSac02ReturnCode) Return the first ChildSalesOrderDetail filtered by the OedtSac02ReturnCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtwgtaxcode(string $OedtWgTaxCode) Return the first ChildSalesOrderDetail filtered by the OedtWgTaxCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtwgprice(string $OedtWgPrice) Return the first ChildSalesOrderDetail filtered by the OedtWgPrice column
 * @method     ChildSalesOrderDetail|null findOneByOedtwgtot(string $OedtWgTot) Return the first ChildSalesOrderDetail filtered by the OedtWgTot column
 * @method     ChildSalesOrderDetail|null findOneByOedtcntrqty(int $OedtCntrQty) Return the first ChildSalesOrderDetail filtered by the OedtCntrQty column
 * @method     ChildSalesOrderDetail|null findOneByOedtconfirmcode(string $OedtConfirmCode) Return the first ChildSalesOrderDetail filtered by the OedtConfirmCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtpicked(string $OedtPicked) Return the first ChildSalesOrderDetail filtered by the OedtPicked column
 * @method     ChildSalesOrderDetail|null findOneByOedtorigrqstdate(string $OedtOrigRqstDate) Return the first ChildSalesOrderDetail filtered by the OedtOrigRqstDate column
 * @method     ChildSalesOrderDetail|null findOneByOedtfablock(string $OedtFabLock) Return the first ChildSalesOrderDetail filtered by the OedtFabLock column
 * @method     ChildSalesOrderDetail|null findOneByOedtlabelprinted(string $OedtLabelPrinted) Return the first ChildSalesOrderDetail filtered by the OedtLabelPrinted column
 * @method     ChildSalesOrderDetail|null findOneByOedtquoteid(string $OedtQuoteId) Return the first ChildSalesOrderDetail filtered by the OedtQuoteId column
 * @method     ChildSalesOrderDetail|null findOneByOedtinvprinted(string $OedtInvPrinted) Return the first ChildSalesOrderDetail filtered by the OedtInvPrinted column
 * @method     ChildSalesOrderDetail|null findOneByOedtstockcheck(string $OedtStockCheck) Return the first ChildSalesOrderDetail filtered by the OedtStockCheck column
 * @method     ChildSalesOrderDetail|null findOneByOedtshouldwesplit(string $OedtShouldWeSplit) Return the first ChildSalesOrderDetail filtered by the OedtShouldWeSplit column
 * @method     ChildSalesOrderDetail|null findOneByOedtcofcreqd(string $OedtCofcReqd) Return the first ChildSalesOrderDetail filtered by the OedtCofcReqd column
 * @method     ChildSalesOrderDetail|null findOneByOedtackcode(string $OedtAckCode) Return the first ChildSalesOrderDetail filtered by the OedtAckCode column
 * @method     ChildSalesOrderDetail|null findOneByOedtwibordnbr(string $OedtWiBordNbr) Return the first ChildSalesOrderDetail filtered by the OedtWiBordNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtcerthistordr(string $OedtCertHistOrdr) Return the first ChildSalesOrderDetail filtered by the OedtCertHistOrdr column
 * @method     ChildSalesOrderDetail|null findOneByOedtcerthistline(string $OedtCertHistLine) Return the first ChildSalesOrderDetail filtered by the OedtCertHistLine column
 * @method     ChildSalesOrderDetail|null findOneByOedtordrdasitemid(string $OedtOrdrdAsItemId) Return the first ChildSalesOrderDetail filtered by the OedtOrdrdAsItemId column
 * @method     ChildSalesOrderDetail|null findOneByOedtwibatch1nbr(int $OedtWiBatch1Nbr) Return the first ChildSalesOrderDetail filtered by the OedtWiBatch1Nbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtwibatch1qty(string $OedtWiBatch1Qty) Return the first ChildSalesOrderDetail filtered by the OedtWiBatch1Qty column
 * @method     ChildSalesOrderDetail|null findOneByOedtwibatch1stat(string $OedtWiBatch1Stat) Return the first ChildSalesOrderDetail filtered by the OedtWiBatch1Stat column
 * @method     ChildSalesOrderDetail|null findOneByOedtrganbr(int $OedtRgaNbr) Return the first ChildSalesOrderDetail filtered by the OedtRgaNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtorigpric(string $OedtOrigPric) Return the first ChildSalesOrderDetail filtered by the OedtOrigPric column
 * @method     ChildSalesOrderDetail|null findOneByOedtreflinenbr(int $OedtRefLineNbr) Return the first ChildSalesOrderDetail filtered by the OedtRefLineNbr column
 * @method     ChildSalesOrderDetail|null findOneByOedtbinlocn(string $OedtBinLocn) Return the first ChildSalesOrderDetail filtered by the OedtBinLocn column
 * @method     ChildSalesOrderDetail|null findOneByOedtacsuplywhse(string $OedtAcSuplyWhse) Return the first ChildSalesOrderDetail filtered by the OedtAcSuplyWhse column
 * @method     ChildSalesOrderDetail|null findOneByOedtacpricdate(string $OedtAcPricDate) Return the first ChildSalesOrderDetail filtered by the OedtAcPricDate column
 * @method     ChildSalesOrderDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderDetail filtered by the DateUpdtd column
 * @method     ChildSalesOrderDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderDetail filtered by the TimeUpdtd column
 * @method     ChildSalesOrderDetail|null findOneByDummy(string $dummy) Return the first ChildSalesOrderDetail filtered by the dummy column
 *
 * @method     ChildSalesOrderDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildSalesOrderDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOne(?ConnectionInterface $con = null) Return the first ChildSalesOrderDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderDetail requireOneByOehdnbr(int $OehdNbr) Return the first ChildSalesOrderDetail filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtline(int $OedtLine) Return the first ChildSalesOrderDetail filtered by the OedtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesOrderDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtdesc(string $OedtDesc) Return the first ChildSalesOrderDetail filtered by the OedtDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtdesc2(string $OedtDesc2) Return the first ChildSalesOrderDetail filtered by the OedtDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByIntbwhse(string $IntbWhse) Return the first ChildSalesOrderDetail filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtrqstdate(string $OedtRqstDate) Return the first ChildSalesOrderDetail filtered by the OedtRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcancdate(string $OedtCancDate) Return the first ChildSalesOrderDetail filtered by the OedtCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtshipdate(string $OedtShipDate) Return the first ChildSalesOrderDetail filtered by the OedtShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtspecordr(string $OedtSpecOrdr) Return the first ChildSalesOrderDetail filtered by the OedtSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildSalesOrderDetail filtered by the ArtbCtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtqtyord(string $OedtQtyOrd) Return the first ChildSalesOrderDetail filtered by the OedtQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtqtyship(string $OedtQtyShip) Return the first ChildSalesOrderDetail filtered by the OedtQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtqtyshiptot(string $OedtQtyShipTot) Return the first ChildSalesOrderDetail filtered by the OedtQtyShipTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtqtybord(string $OedtQtyBord) Return the first ChildSalesOrderDetail filtered by the OedtQtyBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpric(string $OedtPric) Return the first ChildSalesOrderDetail filtered by the OedtPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcost(string $OedtCost) Return the first ChildSalesOrderDetail filtered by the OedtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedttaxpcttot(string $OedtTaxPctTot) Return the first ChildSalesOrderDetail filtered by the OedtTaxPctTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtprictot(string $OedtPricTot) Return the first ChildSalesOrderDetail filtered by the OedtPricTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcosttot(string $OedtCostTot) Return the first ChildSalesOrderDetail filtered by the OedtCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtspcommpct(string $OedtSpCommPct) Return the first ChildSalesOrderDetail filtered by the OedtSpCommPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbrkncaseqty(int $OedtBrknCaseQty) Return the first ChildSalesOrderDetail filtered by the OedtBrknCaseQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbin(string $OedtBin) Return the first ChildSalesOrderDetail filtered by the OedtBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpersonalcd(string $OedtPersonalCd) Return the first ChildSalesOrderDetail filtered by the OedtPersonalCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacdisc1(string $OedtAcDisc1) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacdisc2(string $OedtAcDisc2) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacdisc3(string $OedtAcDisc3) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacdisc4(string $OedtAcDisc4) Return the first ChildSalesOrderDetail filtered by the OedtAcDisc4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlmwipnbr(string $OedtLmWipNbr) Return the first ChildSalesOrderDetail filtered by the OedtLmWipNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcorepric(string $OedtCorePric) Return the first ChildSalesOrderDetail filtered by the OedtCorePric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtasstcode(string $OedtAsstCode) Return the first ChildSalesOrderDetail filtered by the OedtAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtasstqty(string $OedtAsstQty) Return the first ChildSalesOrderDetail filtered by the OedtAsstQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlistpric(string $OedtListPric) Return the first ChildSalesOrderDetail filtered by the OedtListPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtstancost(string $OedtStanCost) Return the first ChildSalesOrderDetail filtered by the OedtStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtvenditemjob(string $OedtVendItemJob) Return the first ChildSalesOrderDetail filtered by the OedtVendItemJob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtnsvendid(string $OedtNsVendId) Return the first ChildSalesOrderDetail filtered by the OedtNsVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtnsitemgrup(string $OedtNsItemGrup) Return the first ChildSalesOrderDetail filtered by the OedtNsItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtusecode(string $OedtUseCode) Return the first ChildSalesOrderDetail filtered by the OedtUseCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtnsshipfromid(string $OedtNsShipFromId) Return the first ChildSalesOrderDetail filtered by the OedtNsShipFromId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtasstovrd(string $OedtAsstOvrd) Return the first ChildSalesOrderDetail filtered by the OedtAsstOvrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpricovrd(string $OedtPricOvrd) Return the first ChildSalesOrderDetail filtered by the OedtPricOvrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpickflag(string $OedtPickFlag) Return the first ChildSalesOrderDetail filtered by the OedtPickFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode1(string $OedtMstrTaxCode1) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct1(string $OedtMstrTaxPct1) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode2(string $OedtMstrTaxCode2) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct2(string $OedtMstrTaxPct2) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode3(string $OedtMstrTaxCode3) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct3(string $OedtMstrTaxPct3) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode4(string $OedtMstrTaxCode4) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct4(string $OedtMstrTaxPct4) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode5(string $OedtMstrTaxCode5) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct5(string $OedtMstrTaxPct5) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode6(string $OedtMstrTaxCode6) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct6(string $OedtMstrTaxPct6) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode7(string $OedtMstrTaxCode7) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct7(string $OedtMstrTaxPct7) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode8(string $OedtMstrTaxCode8) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct8(string $OedtMstrTaxPct8) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxcode9(string $OedtMstrTaxCode9) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmstrtaxpct9(string $OedtMstrTaxPct9) Return the first ChildSalesOrderDetail filtered by the OedtMstrTaxPct9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbinarea(string $OedtBinArea) Return the first ChildSalesOrderDetail filtered by the OedtBinArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtsplitline(string $OedtSplitLine) Return the first ChildSalesOrderDetail filtered by the OedtSplitLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlostreas(string $OedtLostReas) Return the first ChildSalesOrderDetail filtered by the OedtLostReas column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtorigline(int $OedtOrigLine) Return the first ChildSalesOrderDetail filtered by the OedtOrigLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcustcrssref(string $OedtCustCrssRef) Return the first ChildSalesOrderDetail filtered by the OedtCustCrssRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtuom(string $OedtUom) Return the first ChildSalesOrderDetail filtered by the OedtUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtshipflag(string $OedtShipFlag) Return the first ChildSalesOrderDetail filtered by the OedtShipFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtkitflag(string $OedtKitFlag) Return the first ChildSalesOrderDetail filtered by the OedtKitFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtkititemnbr(string $OedtKitItemNbr) Return the first ChildSalesOrderDetail filtered by the OedtKitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbfcost(string $OedtBfCost) Return the first ChildSalesOrderDetail filtered by the OedtBfCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbfmsgcode(string $OedtBfMsgCode) Return the first ChildSalesOrderDetail filtered by the OedtBfMsgCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbfcosttot(string $OedtBfCostTot) Return the first ChildSalesOrderDetail filtered by the OedtBfCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlmbulkpric(string $OedtLmBulkPric) Return the first ChildSalesOrderDetail filtered by the OedtLmBulkPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlmmtrxpkgpric(string $OedtLmMtrxPkgPric) Return the first ChildSalesOrderDetail filtered by the OedtLmMtrxPkgPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlmmtrxbulkpric(string $OedtLmMtrxBulkPric) Return the first ChildSalesOrderDetail filtered by the OedtLmMtrxBulkPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlmcontractpric(string $OedtLmContractPric) Return the first ChildSalesOrderDetail filtered by the OedtLmContractPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwghttot(string $OedtWghtTot) Return the first ChildSalesOrderDetail filtered by the OedtWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtordras(string $OedtOrdrAs) Return the first ChildSalesOrderDetail filtered by the OedtOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpodetlinenbr(int $OedtPoDetLineNbr) Return the first ChildSalesOrderDetail filtered by the OedtPoDetLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtqtytoship(string $OedtQtyToShip) Return the first ChildSalesOrderDetail filtered by the OedtQtyToShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtponbr(string $OedtPoNbr) Return the first ChildSalesOrderDetail filtered by the OedtPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtporef(string $OedtPoRef) Return the first ChildSalesOrderDetail filtered by the OedtPoRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtfrtin(string $OedtFrtIn) Return the first ChildSalesOrderDetail filtered by the OedtFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtfrtinentered(string $OedtFrtInEntered) Return the first ChildSalesOrderDetail filtered by the OedtFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtprodcmplt(string $OedtProdCmplt) Return the first ChildSalesOrderDetail filtered by the OedtProdCmplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedterflag(string $OedtErFlag) Return the first ChildSalesOrderDetail filtered by the OedtErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtorigitem(string $OedtOrigItem) Return the first ChildSalesOrderDetail filtered by the OedtOrigItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtsubflag(string $OedtSubFlag) Return the first ChildSalesOrderDetail filtered by the OedtSubFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtediincomingseq(int $OedtEdiIncomingSeq) Return the first ChildSalesOrderDetail filtered by the OedtEdiIncomingSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtspordpoline(int $OedtSpordPoLine) Return the first ChildSalesOrderDetail filtered by the OedtSpordPoLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcatlgid(string $OedtCatlgId) Return the first ChildSalesOrderDetail filtered by the OedtCatlgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtdesigncd(string $OedtDesignCd) Return the first ChildSalesOrderDetail filtered by the OedtDesignCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtdiscpct(string $OedtDiscPct) Return the first ChildSalesOrderDetail filtered by the OedtDiscPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedttaxamt(string $OedtTaxAmt) Return the first ChildSalesOrderDetail filtered by the OedtTaxAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtxusage(string $OedtXUsage) Return the first ChildSalesOrderDetail filtered by the OedtXUsage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtrqtslock(string $OedtRqtsLock) Return the first ChildSalesOrderDetail filtered by the OedtRqtsLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtfreshfrozen(string $OedtFreshFrozen) Return the first ChildSalesOrderDetail filtered by the OedtFreshFrozen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcoreflag(string $OedtCoreFlag) Return the first ChildSalesOrderDetail filtered by the OedtCoreFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtnssalesacct(string $OedtNsSalesAcct) Return the first ChildSalesOrderDetail filtered by the OedtNsSalesAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcertreqd(string $OedtCertReqd) Return the first ChildSalesOrderDetail filtered by the OedtCertReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtaddonsales(string $OedtAddOnSales) Return the first ChildSalesOrderDetail filtered by the OedtAddOnSales column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbordflag(string $OedtBordFlag) Return the first ChildSalesOrderDetail filtered by the OedtBordFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedttempgrove(string $OedtTempGrove) Return the first ChildSalesOrderDetail filtered by the OedtTempGrove column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtgrovedisc(string $OedtGroveDisc) Return the first ChildSalesOrderDetail filtered by the OedtGroveDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtoffinvc(string $OedtOffInvc) Return the first ChildSalesOrderDetail filtered by the OedtOffInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByInititemgrup(string $InitItemGrup) Return the first ChildSalesOrderDetail filtered by the InitItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildSalesOrderDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacct(string $OedtAcct) Return the first ChildSalesOrderDetail filtered by the OedtAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtloadtot(string $OedtLoadTot) Return the first ChildSalesOrderDetail filtered by the OedtLoadTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpickedqty(string $OedtPickedQty) Return the first ChildSalesOrderDetail filtered by the OedtPickedQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwiorigqty(string $OedtWiOrigQty) Return the first ChildSalesOrderDetail filtered by the OedtWiOrigQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtmargintot(string $OedtMarginTot) Return the first ChildSalesOrderDetail filtered by the OedtMarginTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcorecost(string $OedtCoreCost) Return the first ChildSalesOrderDetail filtered by the OedtCoreCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtitemref(string $OedtItemRef) Return the first ChildSalesOrderDetail filtered by the OedtItemRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtsac02returncode(string $OedtSac02ReturnCode) Return the first ChildSalesOrderDetail filtered by the OedtSac02ReturnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwgtaxcode(string $OedtWgTaxCode) Return the first ChildSalesOrderDetail filtered by the OedtWgTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwgprice(string $OedtWgPrice) Return the first ChildSalesOrderDetail filtered by the OedtWgPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwgtot(string $OedtWgTot) Return the first ChildSalesOrderDetail filtered by the OedtWgTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcntrqty(int $OedtCntrQty) Return the first ChildSalesOrderDetail filtered by the OedtCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtconfirmcode(string $OedtConfirmCode) Return the first ChildSalesOrderDetail filtered by the OedtConfirmCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtpicked(string $OedtPicked) Return the first ChildSalesOrderDetail filtered by the OedtPicked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtorigrqstdate(string $OedtOrigRqstDate) Return the first ChildSalesOrderDetail filtered by the OedtOrigRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtfablock(string $OedtFabLock) Return the first ChildSalesOrderDetail filtered by the OedtFabLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtlabelprinted(string $OedtLabelPrinted) Return the first ChildSalesOrderDetail filtered by the OedtLabelPrinted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtquoteid(string $OedtQuoteId) Return the first ChildSalesOrderDetail filtered by the OedtQuoteId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtinvprinted(string $OedtInvPrinted) Return the first ChildSalesOrderDetail filtered by the OedtInvPrinted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtstockcheck(string $OedtStockCheck) Return the first ChildSalesOrderDetail filtered by the OedtStockCheck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtshouldwesplit(string $OedtShouldWeSplit) Return the first ChildSalesOrderDetail filtered by the OedtShouldWeSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcofcreqd(string $OedtCofcReqd) Return the first ChildSalesOrderDetail filtered by the OedtCofcReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtackcode(string $OedtAckCode) Return the first ChildSalesOrderDetail filtered by the OedtAckCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwibordnbr(string $OedtWiBordNbr) Return the first ChildSalesOrderDetail filtered by the OedtWiBordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcerthistordr(string $OedtCertHistOrdr) Return the first ChildSalesOrderDetail filtered by the OedtCertHistOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtcerthistline(string $OedtCertHistLine) Return the first ChildSalesOrderDetail filtered by the OedtCertHistLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtordrdasitemid(string $OedtOrdrdAsItemId) Return the first ChildSalesOrderDetail filtered by the OedtOrdrdAsItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwibatch1nbr(int $OedtWiBatch1Nbr) Return the first ChildSalesOrderDetail filtered by the OedtWiBatch1Nbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwibatch1qty(string $OedtWiBatch1Qty) Return the first ChildSalesOrderDetail filtered by the OedtWiBatch1Qty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtwibatch1stat(string $OedtWiBatch1Stat) Return the first ChildSalesOrderDetail filtered by the OedtWiBatch1Stat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtrganbr(int $OedtRgaNbr) Return the first ChildSalesOrderDetail filtered by the OedtRgaNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtorigpric(string $OedtOrigPric) Return the first ChildSalesOrderDetail filtered by the OedtOrigPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtreflinenbr(int $OedtRefLineNbr) Return the first ChildSalesOrderDetail filtered by the OedtRefLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtbinlocn(string $OedtBinLocn) Return the first ChildSalesOrderDetail filtered by the OedtBinLocn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacsuplywhse(string $OedtAcSuplyWhse) Return the first ChildSalesOrderDetail filtered by the OedtAcSuplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByOedtacpricdate(string $OedtAcPricDate) Return the first ChildSalesOrderDetail filtered by the OedtAcPricDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderDetail requireOneByDummy(string $dummy) Return the first ChildSalesOrderDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildSalesOrderDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> find(?ConnectionInterface $con = null) Return ChildSalesOrderDetail objects based on current ModelCriteria
 *
 * @method     ChildSalesOrderDetail[]|Collection findByOehdnbr(int|array<int> $OehdNbr) Return ChildSalesOrderDetail objects filtered by the OehdNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOehdnbr(int|array<int> $OehdNbr) Return ChildSalesOrderDetail objects filtered by the OehdNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtline(int|array<int> $OedtLine) Return ChildSalesOrderDetail objects filtered by the OedtLine column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtline(int|array<int> $OedtLine) Return ChildSalesOrderDetail objects filtered by the OedtLine column
 * @method     ChildSalesOrderDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesOrderDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesOrderDetail objects filtered by the InitItemNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtdesc(string|array<string> $OedtDesc) Return ChildSalesOrderDetail objects filtered by the OedtDesc column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtdesc(string|array<string> $OedtDesc) Return ChildSalesOrderDetail objects filtered by the OedtDesc column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtdesc2(string|array<string> $OedtDesc2) Return ChildSalesOrderDetail objects filtered by the OedtDesc2 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtdesc2(string|array<string> $OedtDesc2) Return ChildSalesOrderDetail objects filtered by the OedtDesc2 column
 * @method     ChildSalesOrderDetail[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildSalesOrderDetail objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByIntbwhse(string|array<string> $IntbWhse) Return ChildSalesOrderDetail objects filtered by the IntbWhse column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtrqstdate(string|array<string> $OedtRqstDate) Return ChildSalesOrderDetail objects filtered by the OedtRqstDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtrqstdate(string|array<string> $OedtRqstDate) Return ChildSalesOrderDetail objects filtered by the OedtRqstDate column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcancdate(string|array<string> $OedtCancDate) Return ChildSalesOrderDetail objects filtered by the OedtCancDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcancdate(string|array<string> $OedtCancDate) Return ChildSalesOrderDetail objects filtered by the OedtCancDate column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtshipdate(string|array<string> $OedtShipDate) Return ChildSalesOrderDetail objects filtered by the OedtShipDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtshipdate(string|array<string> $OedtShipDate) Return ChildSalesOrderDetail objects filtered by the OedtShipDate column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtspecordr(string|array<string> $OedtSpecOrdr) Return ChildSalesOrderDetail objects filtered by the OedtSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtspecordr(string|array<string> $OedtSpecOrdr) Return ChildSalesOrderDetail objects filtered by the OedtSpecOrdr column
 * @method     ChildSalesOrderDetail[]|Collection findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildSalesOrderDetail objects filtered by the ArtbCtaxCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildSalesOrderDetail objects filtered by the ArtbCtaxCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtqtyord(string|array<string> $OedtQtyOrd) Return ChildSalesOrderDetail objects filtered by the OedtQtyOrd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtqtyord(string|array<string> $OedtQtyOrd) Return ChildSalesOrderDetail objects filtered by the OedtQtyOrd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtqtyship(string|array<string> $OedtQtyShip) Return ChildSalesOrderDetail objects filtered by the OedtQtyShip column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtqtyship(string|array<string> $OedtQtyShip) Return ChildSalesOrderDetail objects filtered by the OedtQtyShip column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtqtyshiptot(string|array<string> $OedtQtyShipTot) Return ChildSalesOrderDetail objects filtered by the OedtQtyShipTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtqtyshiptot(string|array<string> $OedtQtyShipTot) Return ChildSalesOrderDetail objects filtered by the OedtQtyShipTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtqtybord(string|array<string> $OedtQtyBord) Return ChildSalesOrderDetail objects filtered by the OedtQtyBord column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtqtybord(string|array<string> $OedtQtyBord) Return ChildSalesOrderDetail objects filtered by the OedtQtyBord column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpric(string|array<string> $OedtPric) Return ChildSalesOrderDetail objects filtered by the OedtPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpric(string|array<string> $OedtPric) Return ChildSalesOrderDetail objects filtered by the OedtPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcost(string|array<string> $OedtCost) Return ChildSalesOrderDetail objects filtered by the OedtCost column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcost(string|array<string> $OedtCost) Return ChildSalesOrderDetail objects filtered by the OedtCost column
 * @method     ChildSalesOrderDetail[]|Collection findByOedttaxpcttot(string|array<string> $OedtTaxPctTot) Return ChildSalesOrderDetail objects filtered by the OedtTaxPctTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedttaxpcttot(string|array<string> $OedtTaxPctTot) Return ChildSalesOrderDetail objects filtered by the OedtTaxPctTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtprictot(string|array<string> $OedtPricTot) Return ChildSalesOrderDetail objects filtered by the OedtPricTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtprictot(string|array<string> $OedtPricTot) Return ChildSalesOrderDetail objects filtered by the OedtPricTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcosttot(string|array<string> $OedtCostTot) Return ChildSalesOrderDetail objects filtered by the OedtCostTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcosttot(string|array<string> $OedtCostTot) Return ChildSalesOrderDetail objects filtered by the OedtCostTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtspcommpct(string|array<string> $OedtSpCommPct) Return ChildSalesOrderDetail objects filtered by the OedtSpCommPct column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtspcommpct(string|array<string> $OedtSpCommPct) Return ChildSalesOrderDetail objects filtered by the OedtSpCommPct column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbrkncaseqty(int|array<int> $OedtBrknCaseQty) Return ChildSalesOrderDetail objects filtered by the OedtBrknCaseQty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbrkncaseqty(int|array<int> $OedtBrknCaseQty) Return ChildSalesOrderDetail objects filtered by the OedtBrknCaseQty column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbin(string|array<string> $OedtBin) Return ChildSalesOrderDetail objects filtered by the OedtBin column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbin(string|array<string> $OedtBin) Return ChildSalesOrderDetail objects filtered by the OedtBin column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpersonalcd(string|array<string> $OedtPersonalCd) Return ChildSalesOrderDetail objects filtered by the OedtPersonalCd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpersonalcd(string|array<string> $OedtPersonalCd) Return ChildSalesOrderDetail objects filtered by the OedtPersonalCd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacdisc1(string|array<string> $OedtAcDisc1) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc1 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacdisc1(string|array<string> $OedtAcDisc1) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc1 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacdisc2(string|array<string> $OedtAcDisc2) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc2 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacdisc2(string|array<string> $OedtAcDisc2) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc2 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacdisc3(string|array<string> $OedtAcDisc3) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc3 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacdisc3(string|array<string> $OedtAcDisc3) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc3 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacdisc4(string|array<string> $OedtAcDisc4) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc4 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacdisc4(string|array<string> $OedtAcDisc4) Return ChildSalesOrderDetail objects filtered by the OedtAcDisc4 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlmwipnbr(string|array<string> $OedtLmWipNbr) Return ChildSalesOrderDetail objects filtered by the OedtLmWipNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlmwipnbr(string|array<string> $OedtLmWipNbr) Return ChildSalesOrderDetail objects filtered by the OedtLmWipNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcorepric(string|array<string> $OedtCorePric) Return ChildSalesOrderDetail objects filtered by the OedtCorePric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcorepric(string|array<string> $OedtCorePric) Return ChildSalesOrderDetail objects filtered by the OedtCorePric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtasstcode(string|array<string> $OedtAsstCode) Return ChildSalesOrderDetail objects filtered by the OedtAsstCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtasstcode(string|array<string> $OedtAsstCode) Return ChildSalesOrderDetail objects filtered by the OedtAsstCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtasstqty(string|array<string> $OedtAsstQty) Return ChildSalesOrderDetail objects filtered by the OedtAsstQty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtasstqty(string|array<string> $OedtAsstQty) Return ChildSalesOrderDetail objects filtered by the OedtAsstQty column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlistpric(string|array<string> $OedtListPric) Return ChildSalesOrderDetail objects filtered by the OedtListPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlistpric(string|array<string> $OedtListPric) Return ChildSalesOrderDetail objects filtered by the OedtListPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtstancost(string|array<string> $OedtStanCost) Return ChildSalesOrderDetail objects filtered by the OedtStanCost column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtstancost(string|array<string> $OedtStanCost) Return ChildSalesOrderDetail objects filtered by the OedtStanCost column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtvenditemjob(string|array<string> $OedtVendItemJob) Return ChildSalesOrderDetail objects filtered by the OedtVendItemJob column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtvenditemjob(string|array<string> $OedtVendItemJob) Return ChildSalesOrderDetail objects filtered by the OedtVendItemJob column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtnsvendid(string|array<string> $OedtNsVendId) Return ChildSalesOrderDetail objects filtered by the OedtNsVendId column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtnsvendid(string|array<string> $OedtNsVendId) Return ChildSalesOrderDetail objects filtered by the OedtNsVendId column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtnsitemgrup(string|array<string> $OedtNsItemGrup) Return ChildSalesOrderDetail objects filtered by the OedtNsItemGrup column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtnsitemgrup(string|array<string> $OedtNsItemGrup) Return ChildSalesOrderDetail objects filtered by the OedtNsItemGrup column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtusecode(string|array<string> $OedtUseCode) Return ChildSalesOrderDetail objects filtered by the OedtUseCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtusecode(string|array<string> $OedtUseCode) Return ChildSalesOrderDetail objects filtered by the OedtUseCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtnsshipfromid(string|array<string> $OedtNsShipFromId) Return ChildSalesOrderDetail objects filtered by the OedtNsShipFromId column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtnsshipfromid(string|array<string> $OedtNsShipFromId) Return ChildSalesOrderDetail objects filtered by the OedtNsShipFromId column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtasstovrd(string|array<string> $OedtAsstOvrd) Return ChildSalesOrderDetail objects filtered by the OedtAsstOvrd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtasstovrd(string|array<string> $OedtAsstOvrd) Return ChildSalesOrderDetail objects filtered by the OedtAsstOvrd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpricovrd(string|array<string> $OedtPricOvrd) Return ChildSalesOrderDetail objects filtered by the OedtPricOvrd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpricovrd(string|array<string> $OedtPricOvrd) Return ChildSalesOrderDetail objects filtered by the OedtPricOvrd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpickflag(string|array<string> $OedtPickFlag) Return ChildSalesOrderDetail objects filtered by the OedtPickFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpickflag(string|array<string> $OedtPickFlag) Return ChildSalesOrderDetail objects filtered by the OedtPickFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode1(string|array<string> $OedtMstrTaxCode1) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode1 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode1(string|array<string> $OedtMstrTaxCode1) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode1 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct1(string|array<string> $OedtMstrTaxPct1) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct1 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct1(string|array<string> $OedtMstrTaxPct1) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct1 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode2(string|array<string> $OedtMstrTaxCode2) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode2 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode2(string|array<string> $OedtMstrTaxCode2) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode2 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct2(string|array<string> $OedtMstrTaxPct2) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct2 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct2(string|array<string> $OedtMstrTaxPct2) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct2 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode3(string|array<string> $OedtMstrTaxCode3) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode3 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode3(string|array<string> $OedtMstrTaxCode3) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode3 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct3(string|array<string> $OedtMstrTaxPct3) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct3 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct3(string|array<string> $OedtMstrTaxPct3) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct3 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode4(string|array<string> $OedtMstrTaxCode4) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode4 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode4(string|array<string> $OedtMstrTaxCode4) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode4 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct4(string|array<string> $OedtMstrTaxPct4) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct4 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct4(string|array<string> $OedtMstrTaxPct4) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct4 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode5(string|array<string> $OedtMstrTaxCode5) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode5 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode5(string|array<string> $OedtMstrTaxCode5) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode5 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct5(string|array<string> $OedtMstrTaxPct5) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct5 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct5(string|array<string> $OedtMstrTaxPct5) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct5 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode6(string|array<string> $OedtMstrTaxCode6) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode6 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode6(string|array<string> $OedtMstrTaxCode6) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode6 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct6(string|array<string> $OedtMstrTaxPct6) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct6 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct6(string|array<string> $OedtMstrTaxPct6) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct6 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode7(string|array<string> $OedtMstrTaxCode7) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode7 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode7(string|array<string> $OedtMstrTaxCode7) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode7 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct7(string|array<string> $OedtMstrTaxPct7) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct7 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct7(string|array<string> $OedtMstrTaxPct7) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct7 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode8(string|array<string> $OedtMstrTaxCode8) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode8 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode8(string|array<string> $OedtMstrTaxCode8) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode8 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct8(string|array<string> $OedtMstrTaxPct8) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct8 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct8(string|array<string> $OedtMstrTaxPct8) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct8 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxcode9(string|array<string> $OedtMstrTaxCode9) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode9 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxcode9(string|array<string> $OedtMstrTaxCode9) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxCode9 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmstrtaxpct9(string|array<string> $OedtMstrTaxPct9) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct9 column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmstrtaxpct9(string|array<string> $OedtMstrTaxPct9) Return ChildSalesOrderDetail objects filtered by the OedtMstrTaxPct9 column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbinarea(string|array<string> $OedtBinArea) Return ChildSalesOrderDetail objects filtered by the OedtBinArea column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbinarea(string|array<string> $OedtBinArea) Return ChildSalesOrderDetail objects filtered by the OedtBinArea column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtsplitline(string|array<string> $OedtSplitLine) Return ChildSalesOrderDetail objects filtered by the OedtSplitLine column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtsplitline(string|array<string> $OedtSplitLine) Return ChildSalesOrderDetail objects filtered by the OedtSplitLine column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlostreas(string|array<string> $OedtLostReas) Return ChildSalesOrderDetail objects filtered by the OedtLostReas column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlostreas(string|array<string> $OedtLostReas) Return ChildSalesOrderDetail objects filtered by the OedtLostReas column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtorigline(int|array<int> $OedtOrigLine) Return ChildSalesOrderDetail objects filtered by the OedtOrigLine column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtorigline(int|array<int> $OedtOrigLine) Return ChildSalesOrderDetail objects filtered by the OedtOrigLine column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcustcrssref(string|array<string> $OedtCustCrssRef) Return ChildSalesOrderDetail objects filtered by the OedtCustCrssRef column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcustcrssref(string|array<string> $OedtCustCrssRef) Return ChildSalesOrderDetail objects filtered by the OedtCustCrssRef column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtuom(string|array<string> $OedtUom) Return ChildSalesOrderDetail objects filtered by the OedtUom column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtuom(string|array<string> $OedtUom) Return ChildSalesOrderDetail objects filtered by the OedtUom column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtshipflag(string|array<string> $OedtShipFlag) Return ChildSalesOrderDetail objects filtered by the OedtShipFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtshipflag(string|array<string> $OedtShipFlag) Return ChildSalesOrderDetail objects filtered by the OedtShipFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtkitflag(string|array<string> $OedtKitFlag) Return ChildSalesOrderDetail objects filtered by the OedtKitFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtkitflag(string|array<string> $OedtKitFlag) Return ChildSalesOrderDetail objects filtered by the OedtKitFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtkititemnbr(string|array<string> $OedtKitItemNbr) Return ChildSalesOrderDetail objects filtered by the OedtKitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtkititemnbr(string|array<string> $OedtKitItemNbr) Return ChildSalesOrderDetail objects filtered by the OedtKitItemNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbfcost(string|array<string> $OedtBfCost) Return ChildSalesOrderDetail objects filtered by the OedtBfCost column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbfcost(string|array<string> $OedtBfCost) Return ChildSalesOrderDetail objects filtered by the OedtBfCost column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbfmsgcode(string|array<string> $OedtBfMsgCode) Return ChildSalesOrderDetail objects filtered by the OedtBfMsgCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbfmsgcode(string|array<string> $OedtBfMsgCode) Return ChildSalesOrderDetail objects filtered by the OedtBfMsgCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbfcosttot(string|array<string> $OedtBfCostTot) Return ChildSalesOrderDetail objects filtered by the OedtBfCostTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbfcosttot(string|array<string> $OedtBfCostTot) Return ChildSalesOrderDetail objects filtered by the OedtBfCostTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlmbulkpric(string|array<string> $OedtLmBulkPric) Return ChildSalesOrderDetail objects filtered by the OedtLmBulkPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlmbulkpric(string|array<string> $OedtLmBulkPric) Return ChildSalesOrderDetail objects filtered by the OedtLmBulkPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlmmtrxpkgpric(string|array<string> $OedtLmMtrxPkgPric) Return ChildSalesOrderDetail objects filtered by the OedtLmMtrxPkgPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlmmtrxpkgpric(string|array<string> $OedtLmMtrxPkgPric) Return ChildSalesOrderDetail objects filtered by the OedtLmMtrxPkgPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlmmtrxbulkpric(string|array<string> $OedtLmMtrxBulkPric) Return ChildSalesOrderDetail objects filtered by the OedtLmMtrxBulkPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlmmtrxbulkpric(string|array<string> $OedtLmMtrxBulkPric) Return ChildSalesOrderDetail objects filtered by the OedtLmMtrxBulkPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlmcontractpric(string|array<string> $OedtLmContractPric) Return ChildSalesOrderDetail objects filtered by the OedtLmContractPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlmcontractpric(string|array<string> $OedtLmContractPric) Return ChildSalesOrderDetail objects filtered by the OedtLmContractPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwghttot(string|array<string> $OedtWghtTot) Return ChildSalesOrderDetail objects filtered by the OedtWghtTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwghttot(string|array<string> $OedtWghtTot) Return ChildSalesOrderDetail objects filtered by the OedtWghtTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtordras(string|array<string> $OedtOrdrAs) Return ChildSalesOrderDetail objects filtered by the OedtOrdrAs column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtordras(string|array<string> $OedtOrdrAs) Return ChildSalesOrderDetail objects filtered by the OedtOrdrAs column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpodetlinenbr(int|array<int> $OedtPoDetLineNbr) Return ChildSalesOrderDetail objects filtered by the OedtPoDetLineNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpodetlinenbr(int|array<int> $OedtPoDetLineNbr) Return ChildSalesOrderDetail objects filtered by the OedtPoDetLineNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtqtytoship(string|array<string> $OedtQtyToShip) Return ChildSalesOrderDetail objects filtered by the OedtQtyToShip column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtqtytoship(string|array<string> $OedtQtyToShip) Return ChildSalesOrderDetail objects filtered by the OedtQtyToShip column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtponbr(string|array<string> $OedtPoNbr) Return ChildSalesOrderDetail objects filtered by the OedtPoNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtponbr(string|array<string> $OedtPoNbr) Return ChildSalesOrderDetail objects filtered by the OedtPoNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtporef(string|array<string> $OedtPoRef) Return ChildSalesOrderDetail objects filtered by the OedtPoRef column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtporef(string|array<string> $OedtPoRef) Return ChildSalesOrderDetail objects filtered by the OedtPoRef column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtfrtin(string|array<string> $OedtFrtIn) Return ChildSalesOrderDetail objects filtered by the OedtFrtIn column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtfrtin(string|array<string> $OedtFrtIn) Return ChildSalesOrderDetail objects filtered by the OedtFrtIn column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtfrtinentered(string|array<string> $OedtFrtInEntered) Return ChildSalesOrderDetail objects filtered by the OedtFrtInEntered column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtfrtinentered(string|array<string> $OedtFrtInEntered) Return ChildSalesOrderDetail objects filtered by the OedtFrtInEntered column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtprodcmplt(string|array<string> $OedtProdCmplt) Return ChildSalesOrderDetail objects filtered by the OedtProdCmplt column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtprodcmplt(string|array<string> $OedtProdCmplt) Return ChildSalesOrderDetail objects filtered by the OedtProdCmplt column
 * @method     ChildSalesOrderDetail[]|Collection findByOedterflag(string|array<string> $OedtErFlag) Return ChildSalesOrderDetail objects filtered by the OedtErFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedterflag(string|array<string> $OedtErFlag) Return ChildSalesOrderDetail objects filtered by the OedtErFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtorigitem(string|array<string> $OedtOrigItem) Return ChildSalesOrderDetail objects filtered by the OedtOrigItem column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtorigitem(string|array<string> $OedtOrigItem) Return ChildSalesOrderDetail objects filtered by the OedtOrigItem column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtsubflag(string|array<string> $OedtSubFlag) Return ChildSalesOrderDetail objects filtered by the OedtSubFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtsubflag(string|array<string> $OedtSubFlag) Return ChildSalesOrderDetail objects filtered by the OedtSubFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtediincomingseq(int|array<int> $OedtEdiIncomingSeq) Return ChildSalesOrderDetail objects filtered by the OedtEdiIncomingSeq column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtediincomingseq(int|array<int> $OedtEdiIncomingSeq) Return ChildSalesOrderDetail objects filtered by the OedtEdiIncomingSeq column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtspordpoline(int|array<int> $OedtSpordPoLine) Return ChildSalesOrderDetail objects filtered by the OedtSpordPoLine column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtspordpoline(int|array<int> $OedtSpordPoLine) Return ChildSalesOrderDetail objects filtered by the OedtSpordPoLine column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcatlgid(string|array<string> $OedtCatlgId) Return ChildSalesOrderDetail objects filtered by the OedtCatlgId column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcatlgid(string|array<string> $OedtCatlgId) Return ChildSalesOrderDetail objects filtered by the OedtCatlgId column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtdesigncd(string|array<string> $OedtDesignCd) Return ChildSalesOrderDetail objects filtered by the OedtDesignCd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtdesigncd(string|array<string> $OedtDesignCd) Return ChildSalesOrderDetail objects filtered by the OedtDesignCd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtdiscpct(string|array<string> $OedtDiscPct) Return ChildSalesOrderDetail objects filtered by the OedtDiscPct column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtdiscpct(string|array<string> $OedtDiscPct) Return ChildSalesOrderDetail objects filtered by the OedtDiscPct column
 * @method     ChildSalesOrderDetail[]|Collection findByOedttaxamt(string|array<string> $OedtTaxAmt) Return ChildSalesOrderDetail objects filtered by the OedtTaxAmt column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedttaxamt(string|array<string> $OedtTaxAmt) Return ChildSalesOrderDetail objects filtered by the OedtTaxAmt column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtxusage(string|array<string> $OedtXUsage) Return ChildSalesOrderDetail objects filtered by the OedtXUsage column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtxusage(string|array<string> $OedtXUsage) Return ChildSalesOrderDetail objects filtered by the OedtXUsage column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtrqtslock(string|array<string> $OedtRqtsLock) Return ChildSalesOrderDetail objects filtered by the OedtRqtsLock column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtrqtslock(string|array<string> $OedtRqtsLock) Return ChildSalesOrderDetail objects filtered by the OedtRqtsLock column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtfreshfrozen(string|array<string> $OedtFreshFrozen) Return ChildSalesOrderDetail objects filtered by the OedtFreshFrozen column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtfreshfrozen(string|array<string> $OedtFreshFrozen) Return ChildSalesOrderDetail objects filtered by the OedtFreshFrozen column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcoreflag(string|array<string> $OedtCoreFlag) Return ChildSalesOrderDetail objects filtered by the OedtCoreFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcoreflag(string|array<string> $OedtCoreFlag) Return ChildSalesOrderDetail objects filtered by the OedtCoreFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtnssalesacct(string|array<string> $OedtNsSalesAcct) Return ChildSalesOrderDetail objects filtered by the OedtNsSalesAcct column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtnssalesacct(string|array<string> $OedtNsSalesAcct) Return ChildSalesOrderDetail objects filtered by the OedtNsSalesAcct column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcertreqd(string|array<string> $OedtCertReqd) Return ChildSalesOrderDetail objects filtered by the OedtCertReqd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcertreqd(string|array<string> $OedtCertReqd) Return ChildSalesOrderDetail objects filtered by the OedtCertReqd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtaddonsales(string|array<string> $OedtAddOnSales) Return ChildSalesOrderDetail objects filtered by the OedtAddOnSales column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtaddonsales(string|array<string> $OedtAddOnSales) Return ChildSalesOrderDetail objects filtered by the OedtAddOnSales column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbordflag(string|array<string> $OedtBordFlag) Return ChildSalesOrderDetail objects filtered by the OedtBordFlag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbordflag(string|array<string> $OedtBordFlag) Return ChildSalesOrderDetail objects filtered by the OedtBordFlag column
 * @method     ChildSalesOrderDetail[]|Collection findByOedttempgrove(string|array<string> $OedtTempGrove) Return ChildSalesOrderDetail objects filtered by the OedtTempGrove column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedttempgrove(string|array<string> $OedtTempGrove) Return ChildSalesOrderDetail objects filtered by the OedtTempGrove column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtgrovedisc(string|array<string> $OedtGroveDisc) Return ChildSalesOrderDetail objects filtered by the OedtGroveDisc column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtgrovedisc(string|array<string> $OedtGroveDisc) Return ChildSalesOrderDetail objects filtered by the OedtGroveDisc column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtoffinvc(string|array<string> $OedtOffInvc) Return ChildSalesOrderDetail objects filtered by the OedtOffInvc column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtoffinvc(string|array<string> $OedtOffInvc) Return ChildSalesOrderDetail objects filtered by the OedtOffInvc column
 * @method     ChildSalesOrderDetail[]|Collection findByInititemgrup(string|array<string> $InitItemGrup) Return ChildSalesOrderDetail objects filtered by the InitItemGrup column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByInititemgrup(string|array<string> $InitItemGrup) Return ChildSalesOrderDetail objects filtered by the InitItemGrup column
 * @method     ChildSalesOrderDetail[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildSalesOrderDetail objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByApvevendid(string|array<string> $ApveVendId) Return ChildSalesOrderDetail objects filtered by the ApveVendId column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacct(string|array<string> $OedtAcct) Return ChildSalesOrderDetail objects filtered by the OedtAcct column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacct(string|array<string> $OedtAcct) Return ChildSalesOrderDetail objects filtered by the OedtAcct column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtloadtot(string|array<string> $OedtLoadTot) Return ChildSalesOrderDetail objects filtered by the OedtLoadTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtloadtot(string|array<string> $OedtLoadTot) Return ChildSalesOrderDetail objects filtered by the OedtLoadTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpickedqty(string|array<string> $OedtPickedQty) Return ChildSalesOrderDetail objects filtered by the OedtPickedQty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpickedqty(string|array<string> $OedtPickedQty) Return ChildSalesOrderDetail objects filtered by the OedtPickedQty column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwiorigqty(string|array<string> $OedtWiOrigQty) Return ChildSalesOrderDetail objects filtered by the OedtWiOrigQty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwiorigqty(string|array<string> $OedtWiOrigQty) Return ChildSalesOrderDetail objects filtered by the OedtWiOrigQty column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtmargintot(string|array<string> $OedtMarginTot) Return ChildSalesOrderDetail objects filtered by the OedtMarginTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtmargintot(string|array<string> $OedtMarginTot) Return ChildSalesOrderDetail objects filtered by the OedtMarginTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcorecost(string|array<string> $OedtCoreCost) Return ChildSalesOrderDetail objects filtered by the OedtCoreCost column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcorecost(string|array<string> $OedtCoreCost) Return ChildSalesOrderDetail objects filtered by the OedtCoreCost column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtitemref(string|array<string> $OedtItemRef) Return ChildSalesOrderDetail objects filtered by the OedtItemRef column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtitemref(string|array<string> $OedtItemRef) Return ChildSalesOrderDetail objects filtered by the OedtItemRef column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtsac02returncode(string|array<string> $OedtSac02ReturnCode) Return ChildSalesOrderDetail objects filtered by the OedtSac02ReturnCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtsac02returncode(string|array<string> $OedtSac02ReturnCode) Return ChildSalesOrderDetail objects filtered by the OedtSac02ReturnCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwgtaxcode(string|array<string> $OedtWgTaxCode) Return ChildSalesOrderDetail objects filtered by the OedtWgTaxCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwgtaxcode(string|array<string> $OedtWgTaxCode) Return ChildSalesOrderDetail objects filtered by the OedtWgTaxCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwgprice(string|array<string> $OedtWgPrice) Return ChildSalesOrderDetail objects filtered by the OedtWgPrice column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwgprice(string|array<string> $OedtWgPrice) Return ChildSalesOrderDetail objects filtered by the OedtWgPrice column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwgtot(string|array<string> $OedtWgTot) Return ChildSalesOrderDetail objects filtered by the OedtWgTot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwgtot(string|array<string> $OedtWgTot) Return ChildSalesOrderDetail objects filtered by the OedtWgTot column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcntrqty(int|array<int> $OedtCntrQty) Return ChildSalesOrderDetail objects filtered by the OedtCntrQty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcntrqty(int|array<int> $OedtCntrQty) Return ChildSalesOrderDetail objects filtered by the OedtCntrQty column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtconfirmcode(string|array<string> $OedtConfirmCode) Return ChildSalesOrderDetail objects filtered by the OedtConfirmCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtconfirmcode(string|array<string> $OedtConfirmCode) Return ChildSalesOrderDetail objects filtered by the OedtConfirmCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtpicked(string|array<string> $OedtPicked) Return ChildSalesOrderDetail objects filtered by the OedtPicked column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtpicked(string|array<string> $OedtPicked) Return ChildSalesOrderDetail objects filtered by the OedtPicked column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtorigrqstdate(string|array<string> $OedtOrigRqstDate) Return ChildSalesOrderDetail objects filtered by the OedtOrigRqstDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtorigrqstdate(string|array<string> $OedtOrigRqstDate) Return ChildSalesOrderDetail objects filtered by the OedtOrigRqstDate column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtfablock(string|array<string> $OedtFabLock) Return ChildSalesOrderDetail objects filtered by the OedtFabLock column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtfablock(string|array<string> $OedtFabLock) Return ChildSalesOrderDetail objects filtered by the OedtFabLock column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtlabelprinted(string|array<string> $OedtLabelPrinted) Return ChildSalesOrderDetail objects filtered by the OedtLabelPrinted column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtlabelprinted(string|array<string> $OedtLabelPrinted) Return ChildSalesOrderDetail objects filtered by the OedtLabelPrinted column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtquoteid(string|array<string> $OedtQuoteId) Return ChildSalesOrderDetail objects filtered by the OedtQuoteId column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtquoteid(string|array<string> $OedtQuoteId) Return ChildSalesOrderDetail objects filtered by the OedtQuoteId column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtinvprinted(string|array<string> $OedtInvPrinted) Return ChildSalesOrderDetail objects filtered by the OedtInvPrinted column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtinvprinted(string|array<string> $OedtInvPrinted) Return ChildSalesOrderDetail objects filtered by the OedtInvPrinted column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtstockcheck(string|array<string> $OedtStockCheck) Return ChildSalesOrderDetail objects filtered by the OedtStockCheck column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtstockcheck(string|array<string> $OedtStockCheck) Return ChildSalesOrderDetail objects filtered by the OedtStockCheck column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtshouldwesplit(string|array<string> $OedtShouldWeSplit) Return ChildSalesOrderDetail objects filtered by the OedtShouldWeSplit column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtshouldwesplit(string|array<string> $OedtShouldWeSplit) Return ChildSalesOrderDetail objects filtered by the OedtShouldWeSplit column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcofcreqd(string|array<string> $OedtCofcReqd) Return ChildSalesOrderDetail objects filtered by the OedtCofcReqd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcofcreqd(string|array<string> $OedtCofcReqd) Return ChildSalesOrderDetail objects filtered by the OedtCofcReqd column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtackcode(string|array<string> $OedtAckCode) Return ChildSalesOrderDetail objects filtered by the OedtAckCode column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtackcode(string|array<string> $OedtAckCode) Return ChildSalesOrderDetail objects filtered by the OedtAckCode column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwibordnbr(string|array<string> $OedtWiBordNbr) Return ChildSalesOrderDetail objects filtered by the OedtWiBordNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwibordnbr(string|array<string> $OedtWiBordNbr) Return ChildSalesOrderDetail objects filtered by the OedtWiBordNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcerthistordr(string|array<string> $OedtCertHistOrdr) Return ChildSalesOrderDetail objects filtered by the OedtCertHistOrdr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcerthistordr(string|array<string> $OedtCertHistOrdr) Return ChildSalesOrderDetail objects filtered by the OedtCertHistOrdr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtcerthistline(string|array<string> $OedtCertHistLine) Return ChildSalesOrderDetail objects filtered by the OedtCertHistLine column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtcerthistline(string|array<string> $OedtCertHistLine) Return ChildSalesOrderDetail objects filtered by the OedtCertHistLine column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtordrdasitemid(string|array<string> $OedtOrdrdAsItemId) Return ChildSalesOrderDetail objects filtered by the OedtOrdrdAsItemId column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtordrdasitemid(string|array<string> $OedtOrdrdAsItemId) Return ChildSalesOrderDetail objects filtered by the OedtOrdrdAsItemId column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwibatch1nbr(int|array<int> $OedtWiBatch1Nbr) Return ChildSalesOrderDetail objects filtered by the OedtWiBatch1Nbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwibatch1nbr(int|array<int> $OedtWiBatch1Nbr) Return ChildSalesOrderDetail objects filtered by the OedtWiBatch1Nbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwibatch1qty(string|array<string> $OedtWiBatch1Qty) Return ChildSalesOrderDetail objects filtered by the OedtWiBatch1Qty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwibatch1qty(string|array<string> $OedtWiBatch1Qty) Return ChildSalesOrderDetail objects filtered by the OedtWiBatch1Qty column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtwibatch1stat(string|array<string> $OedtWiBatch1Stat) Return ChildSalesOrderDetail objects filtered by the OedtWiBatch1Stat column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtwibatch1stat(string|array<string> $OedtWiBatch1Stat) Return ChildSalesOrderDetail objects filtered by the OedtWiBatch1Stat column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtrganbr(int|array<int> $OedtRgaNbr) Return ChildSalesOrderDetail objects filtered by the OedtRgaNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtrganbr(int|array<int> $OedtRgaNbr) Return ChildSalesOrderDetail objects filtered by the OedtRgaNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtorigpric(string|array<string> $OedtOrigPric) Return ChildSalesOrderDetail objects filtered by the OedtOrigPric column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtorigpric(string|array<string> $OedtOrigPric) Return ChildSalesOrderDetail objects filtered by the OedtOrigPric column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtreflinenbr(int|array<int> $OedtRefLineNbr) Return ChildSalesOrderDetail objects filtered by the OedtRefLineNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtreflinenbr(int|array<int> $OedtRefLineNbr) Return ChildSalesOrderDetail objects filtered by the OedtRefLineNbr column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtbinlocn(string|array<string> $OedtBinLocn) Return ChildSalesOrderDetail objects filtered by the OedtBinLocn column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtbinlocn(string|array<string> $OedtBinLocn) Return ChildSalesOrderDetail objects filtered by the OedtBinLocn column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacsuplywhse(string|array<string> $OedtAcSuplyWhse) Return ChildSalesOrderDetail objects filtered by the OedtAcSuplyWhse column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacsuplywhse(string|array<string> $OedtAcSuplyWhse) Return ChildSalesOrderDetail objects filtered by the OedtAcSuplyWhse column
 * @method     ChildSalesOrderDetail[]|Collection findByOedtacpricdate(string|array<string> $OedtAcPricDate) Return ChildSalesOrderDetail objects filtered by the OedtAcPricDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByOedtacpricdate(string|array<string> $OedtAcPricDate) Return ChildSalesOrderDetail objects filtered by the OedtAcPricDate column
 * @method     ChildSalesOrderDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesOrderDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesOrderDetail objects filtered by the DateUpdtd column
 * @method     ChildSalesOrderDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesOrderDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesOrderDetail objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrderDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildSalesOrderDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSalesOrderDetail> findByDummy(string|array<string> $dummy) Return ChildSalesOrderDetail objects filtered by the dummy column
 *
 * @method     ChildSalesOrderDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSalesOrderDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SalesOrderDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSalesOrderDetailQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderDetailQuery();
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
     * @param array[$OehdNbr, $OedtLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesOrderDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSalesOrderDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OedtLine, InitItemNbr, OedtDesc, OedtDesc2, IntbWhse, OedtRqstDate, OedtCancDate, OedtShipDate, OedtSpecOrdr, ArtbCtaxCode, OedtQtyOrd, OedtQtyShip, OedtQtyShipTot, OedtQtyBord, OedtPric, OedtCost, OedtTaxPctTot, OedtPricTot, OedtCostTot, OedtSpCommPct, OedtBrknCaseQty, OedtBin, OedtPersonalCd, OedtAcDisc1, OedtAcDisc2, OedtAcDisc3, OedtAcDisc4, OedtLmWipNbr, OedtCorePric, OedtAsstCode, OedtAsstQty, OedtListPric, OedtStanCost, OedtVendItemJob, OedtNsVendId, OedtNsItemGrup, OedtUseCode, OedtNsShipFromId, OedtAsstOvrd, OedtPricOvrd, OedtPickFlag, OedtMstrTaxCode1, OedtMstrTaxPct1, OedtMstrTaxCode2, OedtMstrTaxPct2, OedtMstrTaxCode3, OedtMstrTaxPct3, OedtMstrTaxCode4, OedtMstrTaxPct4, OedtMstrTaxCode5, OedtMstrTaxPct5, OedtMstrTaxCode6, OedtMstrTaxPct6, OedtMstrTaxCode7, OedtMstrTaxPct7, OedtMstrTaxCode8, OedtMstrTaxPct8, OedtMstrTaxCode9, OedtMstrTaxPct9, OedtBinArea, OedtSplitLine, OedtLostReas, OedtOrigLine, OedtCustCrssRef, OedtUom, OedtShipFlag, OedtKitFlag, OedtKitItemNbr, OedtBfCost, OedtBfMsgCode, OedtBfCostTot, OedtLmBulkPric, OedtLmMtrxPkgPric, OedtLmMtrxBulkPric, OedtLmContractPric, OedtWghtTot, OedtOrdrAs, OedtPoDetLineNbr, OedtQtyToShip, OedtPoNbr, OedtPoRef, OedtFrtIn, OedtFrtInEntered, OedtProdCmplt, OedtErFlag, OedtOrigItem, OedtSubFlag, OedtEdiIncomingSeq, OedtSpordPoLine, OedtCatlgId, OedtDesignCd, OedtDiscPct, OedtTaxAmt, OedtXUsage, OedtRqtsLock, OedtFreshFrozen, OedtCoreFlag, OedtNsSalesAcct, OedtCertReqd, OedtAddOnSales, OedtBordFlag, OedtTempGrove, OedtGroveDisc, OedtOffInvc, InitItemGrup, ApveVendId, OedtAcct, OedtLoadTot, OedtPickedQty, OedtWiOrigQty, OedtMarginTot, OedtCoreCost, OedtItemRef, OedtSac02ReturnCode, OedtWgTaxCode, OedtWgPrice, OedtWgTot, OedtCntrQty, OedtConfirmCode, OedtPicked, OedtOrigRqstDate, OedtFabLock, OedtLabelPrinted, OedtQuoteId, OedtInvPrinted, OedtStockCheck, OedtShouldWeSplit, OedtCofcReqd, OedtAckCode, OedtWiBordNbr, OedtCertHistOrdr, OedtCertHistLine, OedtOrdrdAsItemId, OedtWiBatch1Nbr, OedtWiBatch1Qty, OedtWiBatch1Stat, OedtRgaNbr, OedtOrigPric, OedtRefLineNbr, OedtBinLocn, OedtAcSuplyWhse, OedtAcPricDate, DateUpdtd, TimeUpdtd, dummy FROM so_detail WHERE OehdNbr = :p0 AND OedtLine = :p1';
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
            /** @var ChildSalesOrderDetail $obj */
            $obj = new ChildSalesOrderDetail();
            $obj->hydrate($row);
            SalesOrderDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSalesOrderDetail|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(SalesOrderDetailTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesOrderDetailTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr(1234); // WHERE OehdNbr = 1234
     * $query->filterByOehdnbr(array(12, 34)); // WHERE OehdNbr IN (12, 34)
     * $query->filterByOehdnbr(array('min' => 12)); // WHERE OehdNbr > 12
     * </code>
     *
     * @see       filterBySalesOrder()
     *
     * @param mixed $oehdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, ?string $comparison = null)
    {
        if (is_array($oehdnbr)) {
            $useMinMax = false;
            if (isset($oehdnbr['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $oehdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnbr['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $oehdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $oehdnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtline(1234); // WHERE OedtLine = 1234
     * $query->filterByOedtline(array(12, 34)); // WHERE OedtLine IN (12, 34)
     * $query->filterByOedtline(array('min' => 12)); // WHERE OedtLine > 12
     * </code>
     *
     * @param mixed $oedtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtline($oedtline = null, ?string $comparison = null)
    {
        if (is_array($oedtline)) {
            $useMinMax = false;
            if (isset($oedtline['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $oedtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtline['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $oedtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $oedtline, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdesc('fooValue');   // WHERE OedtDesc = 'fooValue'
     * $query->filterByOedtdesc('%fooValue%', Criteria::LIKE); // WHERE OedtDesc LIKE '%fooValue%'
     * $query->filterByOedtdesc(['foo', 'bar']); // WHERE OedtDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtdesc($oedtdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTDESC, $oedtdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdesc2('fooValue');   // WHERE OedtDesc2 = 'fooValue'
     * $query->filterByOedtdesc2('%fooValue%', Criteria::LIKE); // WHERE OedtDesc2 LIKE '%fooValue%'
     * $query->filterByOedtdesc2(['foo', 'bar']); // WHERE OedtDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtdesc2($oedtdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTDESC2, $oedtdesc2, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtrqstdate('fooValue');   // WHERE OedtRqstDate = 'fooValue'
     * $query->filterByOedtrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedtRqstDate LIKE '%fooValue%'
     * $query->filterByOedtrqstdate(['foo', 'bar']); // WHERE OedtRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtrqstdate($oedtrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTRQSTDATE, $oedtrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcancdate('fooValue');   // WHERE OedtCancDate = 'fooValue'
     * $query->filterByOedtcancdate('%fooValue%', Criteria::LIKE); // WHERE OedtCancDate LIKE '%fooValue%'
     * $query->filterByOedtcancdate(['foo', 'bar']); // WHERE OedtCancDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcancdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcancdate($oedtcancdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCANCDATE, $oedtcancdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtshipdate('fooValue');   // WHERE OedtShipDate = 'fooValue'
     * $query->filterByOedtshipdate('%fooValue%', Criteria::LIKE); // WHERE OedtShipDate LIKE '%fooValue%'
     * $query->filterByOedtshipdate(['foo', 'bar']); // WHERE OedtShipDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtshipdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtshipdate($oedtshipdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSHIPDATE, $oedtshipdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtspecordr('fooValue');   // WHERE OedtSpecOrdr = 'fooValue'
     * $query->filterByOedtspecordr('%fooValue%', Criteria::LIKE); // WHERE OedtSpecOrdr LIKE '%fooValue%'
     * $query->filterByOedtspecordr(['foo', 'bar']); // WHERE OedtSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtspecordr($oedtspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPECORDR, $oedtspecordr, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtQtyOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtqtyord(1234); // WHERE OedtQtyOrd = 1234
     * $query->filterByOedtqtyord(array(12, 34)); // WHERE OedtQtyOrd IN (12, 34)
     * $query->filterByOedtqtyord(array('min' => 12)); // WHERE OedtQtyOrd > 12
     * </code>
     *
     * @param mixed $oedtqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtqtyord($oedtqtyord = null, ?string $comparison = null)
    {
        if (is_array($oedtqtyord)) {
            $useMinMax = false;
            if (isset($oedtqtyord['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYORD, $oedtqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtyord['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYORD, $oedtqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYORD, $oedtqtyord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtqtyship(1234); // WHERE OedtQtyShip = 1234
     * $query->filterByOedtqtyship(array(12, 34)); // WHERE OedtQtyShip IN (12, 34)
     * $query->filterByOedtqtyship(array('min' => 12)); // WHERE OedtQtyShip > 12
     * </code>
     *
     * @param mixed $oedtqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtqtyship($oedtqtyship = null, ?string $comparison = null)
    {
        if (is_array($oedtqtyship)) {
            $useMinMax = false;
            if (isset($oedtqtyship['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYSHIP, $oedtqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtyship['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYSHIP, $oedtqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYSHIP, $oedtqtyship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtQtyShipTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtqtyshiptot(1234); // WHERE OedtQtyShipTot = 1234
     * $query->filterByOedtqtyshiptot(array(12, 34)); // WHERE OedtQtyShipTot IN (12, 34)
     * $query->filterByOedtqtyshiptot(array('min' => 12)); // WHERE OedtQtyShipTot > 12
     * </code>
     *
     * @param mixed $oedtqtyshiptot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtqtyshiptot($oedtqtyshiptot = null, ?string $comparison = null)
    {
        if (is_array($oedtqtyshiptot)) {
            $useMinMax = false;
            if (isset($oedtqtyshiptot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT, $oedtqtyshiptot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtyshiptot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT, $oedtqtyshiptot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYSHIPTOT, $oedtqtyshiptot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtQtyBord column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtqtybord(1234); // WHERE OedtQtyBord = 1234
     * $query->filterByOedtqtybord(array(12, 34)); // WHERE OedtQtyBord IN (12, 34)
     * $query->filterByOedtqtybord(array('min' => 12)); // WHERE OedtQtyBord > 12
     * </code>
     *
     * @param mixed $oedtqtybord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtqtybord($oedtqtybord = null, ?string $comparison = null)
    {
        if (is_array($oedtqtybord)) {
            $useMinMax = false;
            if (isset($oedtqtybord['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYBORD, $oedtqtybord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtybord['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYBORD, $oedtqtybord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYBORD, $oedtqtybord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpric(1234); // WHERE OedtPric = 1234
     * $query->filterByOedtpric(array(12, 34)); // WHERE OedtPric IN (12, 34)
     * $query->filterByOedtpric(array('min' => 12)); // WHERE OedtPric > 12
     * </code>
     *
     * @param mixed $oedtpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpric($oedtpric = null, ?string $comparison = null)
    {
        if (is_array($oedtpric)) {
            $useMinMax = false;
            if (isset($oedtpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRIC, $oedtpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRIC, $oedtpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRIC, $oedtpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcost(1234); // WHERE OedtCost = 1234
     * $query->filterByOedtcost(array(12, 34)); // WHERE OedtCost IN (12, 34)
     * $query->filterByOedtcost(array('min' => 12)); // WHERE OedtCost > 12
     * </code>
     *
     * @param mixed $oedtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcost($oedtcost = null, ?string $comparison = null)
    {
        if (is_array($oedtcost)) {
            $useMinMax = false;
            if (isset($oedtcost['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOST, $oedtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcost['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOST, $oedtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOST, $oedtcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtTaxPctTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedttaxpcttot(1234); // WHERE OedtTaxPctTot = 1234
     * $query->filterByOedttaxpcttot(array(12, 34)); // WHERE OedtTaxPctTot IN (12, 34)
     * $query->filterByOedttaxpcttot(array('min' => 12)); // WHERE OedtTaxPctTot > 12
     * </code>
     *
     * @param mixed $oedttaxpcttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedttaxpcttot($oedttaxpcttot = null, ?string $comparison = null)
    {
        if (is_array($oedttaxpcttot)) {
            $useMinMax = false;
            if (isset($oedttaxpcttot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT, $oedttaxpcttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedttaxpcttot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT, $oedttaxpcttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTAXPCTTOT, $oedttaxpcttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPricTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtprictot(1234); // WHERE OedtPricTot = 1234
     * $query->filterByOedtprictot(array(12, 34)); // WHERE OedtPricTot IN (12, 34)
     * $query->filterByOedtprictot(array('min' => 12)); // WHERE OedtPricTot > 12
     * </code>
     *
     * @param mixed $oedtprictot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtprictot($oedtprictot = null, ?string $comparison = null)
    {
        if (is_array($oedtprictot)) {
            $useMinMax = false;
            if (isset($oedtprictot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRICTOT, $oedtprictot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtprictot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRICTOT, $oedtprictot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRICTOT, $oedtprictot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcosttot(1234); // WHERE OedtCostTot = 1234
     * $query->filterByOedtcosttot(array(12, 34)); // WHERE OedtCostTot IN (12, 34)
     * $query->filterByOedtcosttot(array('min' => 12)); // WHERE OedtCostTot > 12
     * </code>
     *
     * @param mixed $oedtcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcosttot($oedtcosttot = null, ?string $comparison = null)
    {
        if (is_array($oedtcosttot)) {
            $useMinMax = false;
            if (isset($oedtcosttot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOSTTOT, $oedtcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcosttot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOSTTOT, $oedtcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOSTTOT, $oedtcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtSpCommPct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtspcommpct(1234); // WHERE OedtSpCommPct = 1234
     * $query->filterByOedtspcommpct(array(12, 34)); // WHERE OedtSpCommPct IN (12, 34)
     * $query->filterByOedtspcommpct(array('min' => 12)); // WHERE OedtSpCommPct > 12
     * </code>
     *
     * @param mixed $oedtspcommpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtspcommpct($oedtspcommpct = null, ?string $comparison = null)
    {
        if (is_array($oedtspcommpct)) {
            $useMinMax = false;
            if (isset($oedtspcommpct['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT, $oedtspcommpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtspcommpct['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT, $oedtspcommpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPCOMMPCT, $oedtspcommpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBrknCaseQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbrkncaseqty(1234); // WHERE OedtBrknCaseQty = 1234
     * $query->filterByOedtbrkncaseqty(array(12, 34)); // WHERE OedtBrknCaseQty IN (12, 34)
     * $query->filterByOedtbrkncaseqty(array('min' => 12)); // WHERE OedtBrknCaseQty > 12
     * </code>
     *
     * @param mixed $oedtbrkncaseqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbrkncaseqty($oedtbrkncaseqty = null, ?string $comparison = null)
    {
        if (is_array($oedtbrkncaseqty)) {
            $useMinMax = false;
            if (isset($oedtbrkncaseqty['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY, $oedtbrkncaseqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtbrkncaseqty['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY, $oedtbrkncaseqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBRKNCASEQTY, $oedtbrkncaseqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbin('fooValue');   // WHERE OedtBin = 'fooValue'
     * $query->filterByOedtbin('%fooValue%', Criteria::LIKE); // WHERE OedtBin LIKE '%fooValue%'
     * $query->filterByOedtbin(['foo', 'bar']); // WHERE OedtBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbin($oedtbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBIN, $oedtbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPersonalCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpersonalcd('fooValue');   // WHERE OedtPersonalCd = 'fooValue'
     * $query->filterByOedtpersonalcd('%fooValue%', Criteria::LIKE); // WHERE OedtPersonalCd LIKE '%fooValue%'
     * $query->filterByOedtpersonalcd(['foo', 'bar']); // WHERE OedtPersonalCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtpersonalcd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpersonalcd($oedtpersonalcd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpersonalcd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPERSONALCD, $oedtpersonalcd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcDisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc1('fooValue');   // WHERE OedtAcDisc1 = 'fooValue'
     * $query->filterByOedtacdisc1('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc1 LIKE '%fooValue%'
     * $query->filterByOedtacdisc1(['foo', 'bar']); // WHERE OedtAcDisc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacdisc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacdisc1($oedtacdisc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACDISC1, $oedtacdisc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcDisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc2('fooValue');   // WHERE OedtAcDisc2 = 'fooValue'
     * $query->filterByOedtacdisc2('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc2 LIKE '%fooValue%'
     * $query->filterByOedtacdisc2(['foo', 'bar']); // WHERE OedtAcDisc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacdisc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacdisc2($oedtacdisc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACDISC2, $oedtacdisc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcDisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc3('fooValue');   // WHERE OedtAcDisc3 = 'fooValue'
     * $query->filterByOedtacdisc3('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc3 LIKE '%fooValue%'
     * $query->filterByOedtacdisc3(['foo', 'bar']); // WHERE OedtAcDisc3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacdisc3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacdisc3($oedtacdisc3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACDISC3, $oedtacdisc3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcDisc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc4('fooValue');   // WHERE OedtAcDisc4 = 'fooValue'
     * $query->filterByOedtacdisc4('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc4 LIKE '%fooValue%'
     * $query->filterByOedtacdisc4(['foo', 'bar']); // WHERE OedtAcDisc4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacdisc4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacdisc4($oedtacdisc4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACDISC4, $oedtacdisc4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLmWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlmwipnbr('fooValue');   // WHERE OedtLmWipNbr = 'fooValue'
     * $query->filterByOedtlmwipnbr('%fooValue%', Criteria::LIKE); // WHERE OedtLmWipNbr LIKE '%fooValue%'
     * $query->filterByOedtlmwipnbr(['foo', 'bar']); // WHERE OedtLmWipNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtlmwipnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlmwipnbr($oedtlmwipnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtlmwipnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMWIPNBR, $oedtlmwipnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCorePric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcorepric(1234); // WHERE OedtCorePric = 1234
     * $query->filterByOedtcorepric(array(12, 34)); // WHERE OedtCorePric IN (12, 34)
     * $query->filterByOedtcorepric(array('min' => 12)); // WHERE OedtCorePric > 12
     * </code>
     *
     * @param mixed $oedtcorepric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcorepric($oedtcorepric = null, ?string $comparison = null)
    {
        if (is_array($oedtcorepric)) {
            $useMinMax = false;
            if (isset($oedtcorepric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOREPRIC, $oedtcorepric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcorepric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOREPRIC, $oedtcorepric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOREPRIC, $oedtcorepric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtasstcode('fooValue');   // WHERE OedtAsstCode = 'fooValue'
     * $query->filterByOedtasstcode('%fooValue%', Criteria::LIKE); // WHERE OedtAsstCode LIKE '%fooValue%'
     * $query->filterByOedtasstcode(['foo', 'bar']); // WHERE OedtAsstCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtasstcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtasstcode($oedtasstcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTASSTCODE, $oedtasstcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAsstQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtasstqty(1234); // WHERE OedtAsstQty = 1234
     * $query->filterByOedtasstqty(array(12, 34)); // WHERE OedtAsstQty IN (12, 34)
     * $query->filterByOedtasstqty(array('min' => 12)); // WHERE OedtAsstQty > 12
     * </code>
     *
     * @param mixed $oedtasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtasstqty($oedtasstqty = null, ?string $comparison = null)
    {
        if (is_array($oedtasstqty)) {
            $useMinMax = false;
            if (isset($oedtasstqty['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTASSTQTY, $oedtasstqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtasstqty['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTASSTQTY, $oedtasstqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTASSTQTY, $oedtasstqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtListPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlistpric(1234); // WHERE OedtListPric = 1234
     * $query->filterByOedtlistpric(array(12, 34)); // WHERE OedtListPric IN (12, 34)
     * $query->filterByOedtlistpric(array('min' => 12)); // WHERE OedtListPric > 12
     * </code>
     *
     * @param mixed $oedtlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlistpric($oedtlistpric = null, ?string $comparison = null)
    {
        if (is_array($oedtlistpric)) {
            $useMinMax = false;
            if (isset($oedtlistpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLISTPRIC, $oedtlistpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlistpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLISTPRIC, $oedtlistpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLISTPRIC, $oedtlistpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtstancost(1234); // WHERE OedtStanCost = 1234
     * $query->filterByOedtstancost(array(12, 34)); // WHERE OedtStanCost IN (12, 34)
     * $query->filterByOedtstancost(array('min' => 12)); // WHERE OedtStanCost > 12
     * </code>
     *
     * @param mixed $oedtstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtstancost($oedtstancost = null, ?string $comparison = null)
    {
        if (is_array($oedtstancost)) {
            $useMinMax = false;
            if (isset($oedtstancost['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSTANCOST, $oedtstancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtstancost['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSTANCOST, $oedtstancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSTANCOST, $oedtstancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtVendItemJob column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtvenditemjob('fooValue');   // WHERE OedtVendItemJob = 'fooValue'
     * $query->filterByOedtvenditemjob('%fooValue%', Criteria::LIKE); // WHERE OedtVendItemJob LIKE '%fooValue%'
     * $query->filterByOedtvenditemjob(['foo', 'bar']); // WHERE OedtVendItemJob IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtvenditemjob The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtvenditemjob($oedtvenditemjob = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtvenditemjob)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTVENDITEMJOB, $oedtvenditemjob, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtNsVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnsvendid('fooValue');   // WHERE OedtNsVendId = 'fooValue'
     * $query->filterByOedtnsvendid('%fooValue%', Criteria::LIKE); // WHERE OedtNsVendId LIKE '%fooValue%'
     * $query->filterByOedtnsvendid(['foo', 'bar']); // WHERE OedtNsVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtnsvendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtnsvendid($oedtnsvendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnsvendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTNSVENDID, $oedtnsvendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtNsItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnsitemgrup('fooValue');   // WHERE OedtNsItemGrup = 'fooValue'
     * $query->filterByOedtnsitemgrup('%fooValue%', Criteria::LIKE); // WHERE OedtNsItemGrup LIKE '%fooValue%'
     * $query->filterByOedtnsitemgrup(['foo', 'bar']); // WHERE OedtNsItemGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtnsitemgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtnsitemgrup($oedtnsitemgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnsitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTNSITEMGRUP, $oedtnsitemgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtUseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtusecode('fooValue');   // WHERE OedtUseCode = 'fooValue'
     * $query->filterByOedtusecode('%fooValue%', Criteria::LIKE); // WHERE OedtUseCode LIKE '%fooValue%'
     * $query->filterByOedtusecode(['foo', 'bar']); // WHERE OedtUseCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtusecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtusecode($oedtusecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtusecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTUSECODE, $oedtusecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtNsShipFromId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnsshipfromid('fooValue');   // WHERE OedtNsShipFromId = 'fooValue'
     * $query->filterByOedtnsshipfromid('%fooValue%', Criteria::LIKE); // WHERE OedtNsShipFromId LIKE '%fooValue%'
     * $query->filterByOedtnsshipfromid(['foo', 'bar']); // WHERE OedtNsShipFromId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtnsshipfromid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtnsshipfromid($oedtnsshipfromid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnsshipfromid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTNSSHIPFROMID, $oedtnsshipfromid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAsstOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtasstovrd('fooValue');   // WHERE OedtAsstOvrd = 'fooValue'
     * $query->filterByOedtasstovrd('%fooValue%', Criteria::LIKE); // WHERE OedtAsstOvrd LIKE '%fooValue%'
     * $query->filterByOedtasstovrd(['foo', 'bar']); // WHERE OedtAsstOvrd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtasstovrd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtasstovrd($oedtasstovrd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtasstovrd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTASSTOVRD, $oedtasstovrd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPricOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpricovrd('fooValue');   // WHERE OedtPricOvrd = 'fooValue'
     * $query->filterByOedtpricovrd('%fooValue%', Criteria::LIKE); // WHERE OedtPricOvrd LIKE '%fooValue%'
     * $query->filterByOedtpricovrd(['foo', 'bar']); // WHERE OedtPricOvrd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtpricovrd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpricovrd($oedtpricovrd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpricovrd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRICOVRD, $oedtpricovrd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPickFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpickflag('fooValue');   // WHERE OedtPickFlag = 'fooValue'
     * $query->filterByOedtpickflag('%fooValue%', Criteria::LIKE); // WHERE OedtPickFlag LIKE '%fooValue%'
     * $query->filterByOedtpickflag(['foo', 'bar']); // WHERE OedtPickFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtpickflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpickflag($oedtpickflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpickflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPICKFLAG, $oedtpickflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode1('fooValue');   // WHERE OedtMstrTaxCode1 = 'fooValue'
     * $query->filterByOedtmstrtaxcode1('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode1 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode1(['foo', 'bar']); // WHERE OedtMstrTaxCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode1($oedtmstrtaxcode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE1, $oedtmstrtaxcode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct1(1234); // WHERE OedtMstrTaxPct1 = 1234
     * $query->filterByOedtmstrtaxpct1(array(12, 34)); // WHERE OedtMstrTaxPct1 IN (12, 34)
     * $query->filterByOedtmstrtaxpct1(array('min' => 12)); // WHERE OedtMstrTaxPct1 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct1($oedtmstrtaxpct1 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct1)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct1['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1, $oedtmstrtaxpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct1['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1, $oedtmstrtaxpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT1, $oedtmstrtaxpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode2('fooValue');   // WHERE OedtMstrTaxCode2 = 'fooValue'
     * $query->filterByOedtmstrtaxcode2('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode2 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode2(['foo', 'bar']); // WHERE OedtMstrTaxCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode2($oedtmstrtaxcode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE2, $oedtmstrtaxcode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct2(1234); // WHERE OedtMstrTaxPct2 = 1234
     * $query->filterByOedtmstrtaxpct2(array(12, 34)); // WHERE OedtMstrTaxPct2 IN (12, 34)
     * $query->filterByOedtmstrtaxpct2(array('min' => 12)); // WHERE OedtMstrTaxPct2 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct2($oedtmstrtaxpct2 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct2)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct2['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2, $oedtmstrtaxpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct2['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2, $oedtmstrtaxpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT2, $oedtmstrtaxpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode3('fooValue');   // WHERE OedtMstrTaxCode3 = 'fooValue'
     * $query->filterByOedtmstrtaxcode3('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode3 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode3(['foo', 'bar']); // WHERE OedtMstrTaxCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode3($oedtmstrtaxcode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE3, $oedtmstrtaxcode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct3(1234); // WHERE OedtMstrTaxPct3 = 1234
     * $query->filterByOedtmstrtaxpct3(array(12, 34)); // WHERE OedtMstrTaxPct3 IN (12, 34)
     * $query->filterByOedtmstrtaxpct3(array('min' => 12)); // WHERE OedtMstrTaxPct3 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct3($oedtmstrtaxpct3 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct3)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct3['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3, $oedtmstrtaxpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct3['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3, $oedtmstrtaxpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT3, $oedtmstrtaxpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode4('fooValue');   // WHERE OedtMstrTaxCode4 = 'fooValue'
     * $query->filterByOedtmstrtaxcode4('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode4 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode4(['foo', 'bar']); // WHERE OedtMstrTaxCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode4($oedtmstrtaxcode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE4, $oedtmstrtaxcode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct4(1234); // WHERE OedtMstrTaxPct4 = 1234
     * $query->filterByOedtmstrtaxpct4(array(12, 34)); // WHERE OedtMstrTaxPct4 IN (12, 34)
     * $query->filterByOedtmstrtaxpct4(array('min' => 12)); // WHERE OedtMstrTaxPct4 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct4($oedtmstrtaxpct4 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct4)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct4['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4, $oedtmstrtaxpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct4['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4, $oedtmstrtaxpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT4, $oedtmstrtaxpct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode5('fooValue');   // WHERE OedtMstrTaxCode5 = 'fooValue'
     * $query->filterByOedtmstrtaxcode5('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode5 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode5(['foo', 'bar']); // WHERE OedtMstrTaxCode5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode5($oedtmstrtaxcode5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE5, $oedtmstrtaxcode5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct5(1234); // WHERE OedtMstrTaxPct5 = 1234
     * $query->filterByOedtmstrtaxpct5(array(12, 34)); // WHERE OedtMstrTaxPct5 IN (12, 34)
     * $query->filterByOedtmstrtaxpct5(array('min' => 12)); // WHERE OedtMstrTaxPct5 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct5($oedtmstrtaxpct5 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct5)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct5['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5, $oedtmstrtaxpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct5['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5, $oedtmstrtaxpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT5, $oedtmstrtaxpct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode6('fooValue');   // WHERE OedtMstrTaxCode6 = 'fooValue'
     * $query->filterByOedtmstrtaxcode6('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode6 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode6(['foo', 'bar']); // WHERE OedtMstrTaxCode6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode6($oedtmstrtaxcode6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE6, $oedtmstrtaxcode6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct6(1234); // WHERE OedtMstrTaxPct6 = 1234
     * $query->filterByOedtmstrtaxpct6(array(12, 34)); // WHERE OedtMstrTaxPct6 IN (12, 34)
     * $query->filterByOedtmstrtaxpct6(array('min' => 12)); // WHERE OedtMstrTaxPct6 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct6($oedtmstrtaxpct6 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct6)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct6['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6, $oedtmstrtaxpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct6['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6, $oedtmstrtaxpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT6, $oedtmstrtaxpct6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode7('fooValue');   // WHERE OedtMstrTaxCode7 = 'fooValue'
     * $query->filterByOedtmstrtaxcode7('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode7 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode7(['foo', 'bar']); // WHERE OedtMstrTaxCode7 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode7 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode7($oedtmstrtaxcode7 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE7, $oedtmstrtaxcode7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct7(1234); // WHERE OedtMstrTaxPct7 = 1234
     * $query->filterByOedtmstrtaxpct7(array(12, 34)); // WHERE OedtMstrTaxPct7 IN (12, 34)
     * $query->filterByOedtmstrtaxpct7(array('min' => 12)); // WHERE OedtMstrTaxPct7 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct7($oedtmstrtaxpct7 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct7)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct7['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7, $oedtmstrtaxpct7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct7['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7, $oedtmstrtaxpct7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT7, $oedtmstrtaxpct7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode8('fooValue');   // WHERE OedtMstrTaxCode8 = 'fooValue'
     * $query->filterByOedtmstrtaxcode8('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode8 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode8(['foo', 'bar']); // WHERE OedtMstrTaxCode8 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode8 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode8($oedtmstrtaxcode8 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE8, $oedtmstrtaxcode8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct8(1234); // WHERE OedtMstrTaxPct8 = 1234
     * $query->filterByOedtmstrtaxpct8(array(12, 34)); // WHERE OedtMstrTaxPct8 IN (12, 34)
     * $query->filterByOedtmstrtaxpct8(array('min' => 12)); // WHERE OedtMstrTaxPct8 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct8($oedtmstrtaxpct8 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct8)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct8['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8, $oedtmstrtaxpct8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct8['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8, $oedtmstrtaxpct8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT8, $oedtmstrtaxpct8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode9('fooValue');   // WHERE OedtMstrTaxCode9 = 'fooValue'
     * $query->filterByOedtmstrtaxcode9('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode9 LIKE '%fooValue%'
     * $query->filterByOedtmstrtaxcode9(['foo', 'bar']); // WHERE OedtMstrTaxCode9 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtmstrtaxcode9 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode9($oedtmstrtaxcode9 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXCODE9, $oedtmstrtaxcode9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMstrTaxPct9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxpct9(1234); // WHERE OedtMstrTaxPct9 = 1234
     * $query->filterByOedtmstrtaxpct9(array(12, 34)); // WHERE OedtMstrTaxPct9 IN (12, 34)
     * $query->filterByOedtmstrtaxpct9(array('min' => 12)); // WHERE OedtMstrTaxPct9 > 12
     * </code>
     *
     * @param mixed $oedtmstrtaxpct9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct9($oedtmstrtaxpct9 = null, ?string $comparison = null)
    {
        if (is_array($oedtmstrtaxpct9)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct9['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9, $oedtmstrtaxpct9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct9['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9, $oedtmstrtaxpct9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMSTRTAXPCT9, $oedtmstrtaxpct9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBinArea column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbinarea('fooValue');   // WHERE OedtBinArea = 'fooValue'
     * $query->filterByOedtbinarea('%fooValue%', Criteria::LIKE); // WHERE OedtBinArea LIKE '%fooValue%'
     * $query->filterByOedtbinarea(['foo', 'bar']); // WHERE OedtBinArea IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtbinarea The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbinarea($oedtbinarea = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbinarea)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBINAREA, $oedtbinarea, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtSplitLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtsplitline('fooValue');   // WHERE OedtSplitLine = 'fooValue'
     * $query->filterByOedtsplitline('%fooValue%', Criteria::LIKE); // WHERE OedtSplitLine LIKE '%fooValue%'
     * $query->filterByOedtsplitline(['foo', 'bar']); // WHERE OedtSplitLine IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtsplitline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtsplitline($oedtsplitline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtsplitline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPLITLINE, $oedtsplitline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLostReas column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlostreas('fooValue');   // WHERE OedtLostReas = 'fooValue'
     * $query->filterByOedtlostreas('%fooValue%', Criteria::LIKE); // WHERE OedtLostReas LIKE '%fooValue%'
     * $query->filterByOedtlostreas(['foo', 'bar']); // WHERE OedtLostReas IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtlostreas The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlostreas($oedtlostreas = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtlostreas)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLOSTREAS, $oedtlostreas, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOrigLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtorigline(1234); // WHERE OedtOrigLine = 1234
     * $query->filterByOedtorigline(array(12, 34)); // WHERE OedtOrigLine IN (12, 34)
     * $query->filterByOedtorigline(array('min' => 12)); // WHERE OedtOrigLine > 12
     * </code>
     *
     * @param mixed $oedtorigline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtorigline($oedtorigline = null, ?string $comparison = null)
    {
        if (is_array($oedtorigline)) {
            $useMinMax = false;
            if (isset($oedtorigline['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGLINE, $oedtorigline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtorigline['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGLINE, $oedtorigline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGLINE, $oedtorigline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCustCrssRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcustcrssref('fooValue');   // WHERE OedtCustCrssRef = 'fooValue'
     * $query->filterByOedtcustcrssref('%fooValue%', Criteria::LIKE); // WHERE OedtCustCrssRef LIKE '%fooValue%'
     * $query->filterByOedtcustcrssref(['foo', 'bar']); // WHERE OedtCustCrssRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcustcrssref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcustcrssref($oedtcustcrssref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcustcrssref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCUSTCRSSREF, $oedtcustcrssref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtuom('fooValue');   // WHERE OedtUom = 'fooValue'
     * $query->filterByOedtuom('%fooValue%', Criteria::LIKE); // WHERE OedtUom LIKE '%fooValue%'
     * $query->filterByOedtuom(['foo', 'bar']); // WHERE OedtUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtuom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtuom($oedtuom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtuom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTUOM, $oedtuom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtShipFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtshipflag('fooValue');   // WHERE OedtShipFlag = 'fooValue'
     * $query->filterByOedtshipflag('%fooValue%', Criteria::LIKE); // WHERE OedtShipFlag LIKE '%fooValue%'
     * $query->filterByOedtshipflag(['foo', 'bar']); // WHERE OedtShipFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtshipflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtshipflag($oedtshipflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtshipflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSHIPFLAG, $oedtshipflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtKitFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtkitflag('fooValue');   // WHERE OedtKitFlag = 'fooValue'
     * $query->filterByOedtkitflag('%fooValue%', Criteria::LIKE); // WHERE OedtKitFlag LIKE '%fooValue%'
     * $query->filterByOedtkitflag(['foo', 'bar']); // WHERE OedtKitFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtkitflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtkitflag($oedtkitflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtkitflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTKITFLAG, $oedtkitflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtKitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtkititemnbr('fooValue');   // WHERE OedtKitItemNbr = 'fooValue'
     * $query->filterByOedtkititemnbr('%fooValue%', Criteria::LIKE); // WHERE OedtKitItemNbr LIKE '%fooValue%'
     * $query->filterByOedtkititemnbr(['foo', 'bar']); // WHERE OedtKitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtkititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtkititemnbr($oedtkititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtkititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTKITITEMNBR, $oedtkititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBfCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbfcost(1234); // WHERE OedtBfCost = 1234
     * $query->filterByOedtbfcost(array(12, 34)); // WHERE OedtBfCost IN (12, 34)
     * $query->filterByOedtbfcost(array('min' => 12)); // WHERE OedtBfCost > 12
     * </code>
     *
     * @param mixed $oedtbfcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbfcost($oedtbfcost = null, ?string $comparison = null)
    {
        if (is_array($oedtbfcost)) {
            $useMinMax = false;
            if (isset($oedtbfcost['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFCOST, $oedtbfcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtbfcost['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFCOST, $oedtbfcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFCOST, $oedtbfcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBfMsgCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbfmsgcode('fooValue');   // WHERE OedtBfMsgCode = 'fooValue'
     * $query->filterByOedtbfmsgcode('%fooValue%', Criteria::LIKE); // WHERE OedtBfMsgCode LIKE '%fooValue%'
     * $query->filterByOedtbfmsgcode(['foo', 'bar']); // WHERE OedtBfMsgCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtbfmsgcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbfmsgcode($oedtbfmsgcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbfmsgcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFMSGCODE, $oedtbfmsgcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBfCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbfcosttot(1234); // WHERE OedtBfCostTot = 1234
     * $query->filterByOedtbfcosttot(array(12, 34)); // WHERE OedtBfCostTot IN (12, 34)
     * $query->filterByOedtbfcosttot(array('min' => 12)); // WHERE OedtBfCostTot > 12
     * </code>
     *
     * @param mixed $oedtbfcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbfcosttot($oedtbfcosttot = null, ?string $comparison = null)
    {
        if (is_array($oedtbfcosttot)) {
            $useMinMax = false;
            if (isset($oedtbfcosttot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT, $oedtbfcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtbfcosttot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT, $oedtbfcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBFCOSTTOT, $oedtbfcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLmBulkPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlmbulkpric(1234); // WHERE OedtLmBulkPric = 1234
     * $query->filterByOedtlmbulkpric(array(12, 34)); // WHERE OedtLmBulkPric IN (12, 34)
     * $query->filterByOedtlmbulkpric(array('min' => 12)); // WHERE OedtLmBulkPric > 12
     * </code>
     *
     * @param mixed $oedtlmbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlmbulkpric($oedtlmbulkpric = null, ?string $comparison = null)
    {
        if (is_array($oedtlmbulkpric)) {
            $useMinMax = false;
            if (isset($oedtlmbulkpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC, $oedtlmbulkpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmbulkpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC, $oedtlmbulkpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMBULKPRIC, $oedtlmbulkpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLmMtrxPkgPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlmmtrxpkgpric(1234); // WHERE OedtLmMtrxPkgPric = 1234
     * $query->filterByOedtlmmtrxpkgpric(array(12, 34)); // WHERE OedtLmMtrxPkgPric IN (12, 34)
     * $query->filterByOedtlmmtrxpkgpric(array('min' => 12)); // WHERE OedtLmMtrxPkgPric > 12
     * </code>
     *
     * @param mixed $oedtlmmtrxpkgpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlmmtrxpkgpric($oedtlmmtrxpkgpric = null, ?string $comparison = null)
    {
        if (is_array($oedtlmmtrxpkgpric)) {
            $useMinMax = false;
            if (isset($oedtlmmtrxpkgpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC, $oedtlmmtrxpkgpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmmtrxpkgpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC, $oedtlmmtrxpkgpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMMTRXPKGPRIC, $oedtlmmtrxpkgpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLmMtrxBulkPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlmmtrxbulkpric(1234); // WHERE OedtLmMtrxBulkPric = 1234
     * $query->filterByOedtlmmtrxbulkpric(array(12, 34)); // WHERE OedtLmMtrxBulkPric IN (12, 34)
     * $query->filterByOedtlmmtrxbulkpric(array('min' => 12)); // WHERE OedtLmMtrxBulkPric > 12
     * </code>
     *
     * @param mixed $oedtlmmtrxbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlmmtrxbulkpric($oedtlmmtrxbulkpric = null, ?string $comparison = null)
    {
        if (is_array($oedtlmmtrxbulkpric)) {
            $useMinMax = false;
            if (isset($oedtlmmtrxbulkpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC, $oedtlmmtrxbulkpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmmtrxbulkpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC, $oedtlmmtrxbulkpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMMTRXBULKPRIC, $oedtlmmtrxbulkpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLmContractPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlmcontractpric(1234); // WHERE OedtLmContractPric = 1234
     * $query->filterByOedtlmcontractpric(array(12, 34)); // WHERE OedtLmContractPric IN (12, 34)
     * $query->filterByOedtlmcontractpric(array('min' => 12)); // WHERE OedtLmContractPric > 12
     * </code>
     *
     * @param mixed $oedtlmcontractpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlmcontractpric($oedtlmcontractpric = null, ?string $comparison = null)
    {
        if (is_array($oedtlmcontractpric)) {
            $useMinMax = false;
            if (isset($oedtlmcontractpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC, $oedtlmcontractpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmcontractpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC, $oedtlmcontractpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLMCONTRACTPRIC, $oedtlmcontractpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwghttot(1234); // WHERE OedtWghtTot = 1234
     * $query->filterByOedtwghttot(array(12, 34)); // WHERE OedtWghtTot IN (12, 34)
     * $query->filterByOedtwghttot(array('min' => 12)); // WHERE OedtWghtTot > 12
     * </code>
     *
     * @param mixed $oedtwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwghttot($oedtwghttot = null, ?string $comparison = null)
    {
        if (is_array($oedtwghttot)) {
            $useMinMax = false;
            if (isset($oedtwghttot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGHTTOT, $oedtwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwghttot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGHTTOT, $oedtwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGHTTOT, $oedtwghttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtordras('fooValue');   // WHERE OedtOrdrAs = 'fooValue'
     * $query->filterByOedtordras('%fooValue%', Criteria::LIKE); // WHERE OedtOrdrAs LIKE '%fooValue%'
     * $query->filterByOedtordras(['foo', 'bar']); // WHERE OedtOrdrAs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtordras The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtordras($oedtordras = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtordras)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORDRAS, $oedtordras, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPoDetLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpodetlinenbr(1234); // WHERE OedtPoDetLineNbr = 1234
     * $query->filterByOedtpodetlinenbr(array(12, 34)); // WHERE OedtPoDetLineNbr IN (12, 34)
     * $query->filterByOedtpodetlinenbr(array('min' => 12)); // WHERE OedtPoDetLineNbr > 12
     * </code>
     *
     * @param mixed $oedtpodetlinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpodetlinenbr($oedtpodetlinenbr = null, ?string $comparison = null)
    {
        if (is_array($oedtpodetlinenbr)) {
            $useMinMax = false;
            if (isset($oedtpodetlinenbr['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPODETLINENBR, $oedtpodetlinenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtpodetlinenbr['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPODETLINENBR, $oedtpodetlinenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPODETLINENBR, $oedtpodetlinenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtqtytoship(1234); // WHERE OedtQtyToShip = 1234
     * $query->filterByOedtqtytoship(array(12, 34)); // WHERE OedtQtyToShip IN (12, 34)
     * $query->filterByOedtqtytoship(array('min' => 12)); // WHERE OedtQtyToShip > 12
     * </code>
     *
     * @param mixed $oedtqtytoship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtqtytoship($oedtqtytoship = null, ?string $comparison = null)
    {
        if (is_array($oedtqtytoship)) {
            $useMinMax = false;
            if (isset($oedtqtytoship['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP, $oedtqtytoship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtytoship['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP, $oedtqtytoship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQTYTOSHIP, $oedtqtytoship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtponbr('fooValue');   // WHERE OedtPoNbr = 'fooValue'
     * $query->filterByOedtponbr('%fooValue%', Criteria::LIKE); // WHERE OedtPoNbr LIKE '%fooValue%'
     * $query->filterByOedtponbr(['foo', 'bar']); // WHERE OedtPoNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtponbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtponbr($oedtponbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtponbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPONBR, $oedtponbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtporef('fooValue');   // WHERE OedtPoRef = 'fooValue'
     * $query->filterByOedtporef('%fooValue%', Criteria::LIKE); // WHERE OedtPoRef LIKE '%fooValue%'
     * $query->filterByOedtporef(['foo', 'bar']); // WHERE OedtPoRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtporef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtporef($oedtporef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtporef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPOREF, $oedtporef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfrtin(1234); // WHERE OedtFrtIn = 1234
     * $query->filterByOedtfrtin(array(12, 34)); // WHERE OedtFrtIn IN (12, 34)
     * $query->filterByOedtfrtin(array('min' => 12)); // WHERE OedtFrtIn > 12
     * </code>
     *
     * @param mixed $oedtfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtfrtin($oedtfrtin = null, ?string $comparison = null)
    {
        if (is_array($oedtfrtin)) {
            $useMinMax = false;
            if (isset($oedtfrtin['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTFRTIN, $oedtfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtfrtin['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTFRTIN, $oedtfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTFRTIN, $oedtfrtin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfrtinentered('fooValue');   // WHERE OedtFrtInEntered = 'fooValue'
     * $query->filterByOedtfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OedtFrtInEntered LIKE '%fooValue%'
     * $query->filterByOedtfrtinentered(['foo', 'bar']); // WHERE OedtFrtInEntered IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtfrtinentered The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtfrtinentered($oedtfrtinentered = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTFRTINENTERED, $oedtfrtinentered, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtProdCmplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtprodcmplt('fooValue');   // WHERE OedtProdCmplt = 'fooValue'
     * $query->filterByOedtprodcmplt('%fooValue%', Criteria::LIKE); // WHERE OedtProdCmplt LIKE '%fooValue%'
     * $query->filterByOedtprodcmplt(['foo', 'bar']); // WHERE OedtProdCmplt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtprodcmplt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtprodcmplt($oedtprodcmplt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtprodcmplt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPRODCMPLT, $oedtprodcmplt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedterflag('fooValue');   // WHERE OedtErFlag = 'fooValue'
     * $query->filterByOedterflag('%fooValue%', Criteria::LIKE); // WHERE OedtErFlag LIKE '%fooValue%'
     * $query->filterByOedterflag(['foo', 'bar']); // WHERE OedtErFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedterflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedterflag($oedterflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedterflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTERFLAG, $oedterflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOrigItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtorigitem('fooValue');   // WHERE OedtOrigItem = 'fooValue'
     * $query->filterByOedtorigitem('%fooValue%', Criteria::LIKE); // WHERE OedtOrigItem LIKE '%fooValue%'
     * $query->filterByOedtorigitem(['foo', 'bar']); // WHERE OedtOrigItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtorigitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtorigitem($oedtorigitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtorigitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGITEM, $oedtorigitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtSubFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtsubflag('fooValue');   // WHERE OedtSubFlag = 'fooValue'
     * $query->filterByOedtsubflag('%fooValue%', Criteria::LIKE); // WHERE OedtSubFlag LIKE '%fooValue%'
     * $query->filterByOedtsubflag(['foo', 'bar']); // WHERE OedtSubFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtsubflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtsubflag($oedtsubflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtsubflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSUBFLAG, $oedtsubflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtEdiIncomingSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtediincomingseq(1234); // WHERE OedtEdiIncomingSeq = 1234
     * $query->filterByOedtediincomingseq(array(12, 34)); // WHERE OedtEdiIncomingSeq IN (12, 34)
     * $query->filterByOedtediincomingseq(array('min' => 12)); // WHERE OedtEdiIncomingSeq > 12
     * </code>
     *
     * @param mixed $oedtediincomingseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtediincomingseq($oedtediincomingseq = null, ?string $comparison = null)
    {
        if (is_array($oedtediincomingseq)) {
            $useMinMax = false;
            if (isset($oedtediincomingseq['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $oedtediincomingseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtediincomingseq['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $oedtediincomingseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $oedtediincomingseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtSpordPoLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtspordpoline(1234); // WHERE OedtSpordPoLine = 1234
     * $query->filterByOedtspordpoline(array(12, 34)); // WHERE OedtSpordPoLine IN (12, 34)
     * $query->filterByOedtspordpoline(array('min' => 12)); // WHERE OedtSpordPoLine > 12
     * </code>
     *
     * @param mixed $oedtspordpoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtspordpoline($oedtspordpoline = null, ?string $comparison = null)
    {
        if (is_array($oedtspordpoline)) {
            $useMinMax = false;
            if (isset($oedtspordpoline['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE, $oedtspordpoline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtspordpoline['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE, $oedtspordpoline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSPORDPOLINE, $oedtspordpoline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCatlgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcatlgid('fooValue');   // WHERE OedtCatlgId = 'fooValue'
     * $query->filterByOedtcatlgid('%fooValue%', Criteria::LIKE); // WHERE OedtCatlgId LIKE '%fooValue%'
     * $query->filterByOedtcatlgid(['foo', 'bar']); // WHERE OedtCatlgId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcatlgid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcatlgid($oedtcatlgid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcatlgid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCATLGID, $oedtcatlgid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtDesignCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdesigncd('fooValue');   // WHERE OedtDesignCd = 'fooValue'
     * $query->filterByOedtdesigncd('%fooValue%', Criteria::LIKE); // WHERE OedtDesignCd LIKE '%fooValue%'
     * $query->filterByOedtdesigncd(['foo', 'bar']); // WHERE OedtDesignCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtdesigncd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtdesigncd($oedtdesigncd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtdesigncd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTDESIGNCD, $oedtdesigncd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtDiscPct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdiscpct(1234); // WHERE OedtDiscPct = 1234
     * $query->filterByOedtdiscpct(array(12, 34)); // WHERE OedtDiscPct IN (12, 34)
     * $query->filterByOedtdiscpct(array('min' => 12)); // WHERE OedtDiscPct > 12
     * </code>
     *
     * @param mixed $oedtdiscpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtdiscpct($oedtdiscpct = null, ?string $comparison = null)
    {
        if (is_array($oedtdiscpct)) {
            $useMinMax = false;
            if (isset($oedtdiscpct['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTDISCPCT, $oedtdiscpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtdiscpct['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTDISCPCT, $oedtdiscpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTDISCPCT, $oedtdiscpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtTaxAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOedttaxamt(1234); // WHERE OedtTaxAmt = 1234
     * $query->filterByOedttaxamt(array(12, 34)); // WHERE OedtTaxAmt IN (12, 34)
     * $query->filterByOedttaxamt(array('min' => 12)); // WHERE OedtTaxAmt > 12
     * </code>
     *
     * @param mixed $oedttaxamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedttaxamt($oedttaxamt = null, ?string $comparison = null)
    {
        if (is_array($oedttaxamt)) {
            $useMinMax = false;
            if (isset($oedttaxamt['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTAXAMT, $oedttaxamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedttaxamt['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTAXAMT, $oedttaxamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTAXAMT, $oedttaxamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtXUsage column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtxusage('fooValue');   // WHERE OedtXUsage = 'fooValue'
     * $query->filterByOedtxusage('%fooValue%', Criteria::LIKE); // WHERE OedtXUsage LIKE '%fooValue%'
     * $query->filterByOedtxusage(['foo', 'bar']); // WHERE OedtXUsage IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtxusage The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtxusage($oedtxusage = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtxusage)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTXUSAGE, $oedtxusage, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtRqtsLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtrqtslock('fooValue');   // WHERE OedtRqtsLock = 'fooValue'
     * $query->filterByOedtrqtslock('%fooValue%', Criteria::LIKE); // WHERE OedtRqtsLock LIKE '%fooValue%'
     * $query->filterByOedtrqtslock(['foo', 'bar']); // WHERE OedtRqtsLock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtrqtslock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtrqtslock($oedtrqtslock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtrqtslock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTRQTSLOCK, $oedtrqtslock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtFreshFrozen column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfreshfrozen('fooValue');   // WHERE OedtFreshFrozen = 'fooValue'
     * $query->filterByOedtfreshfrozen('%fooValue%', Criteria::LIKE); // WHERE OedtFreshFrozen LIKE '%fooValue%'
     * $query->filterByOedtfreshfrozen(['foo', 'bar']); // WHERE OedtFreshFrozen IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtfreshfrozen The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtfreshfrozen($oedtfreshfrozen = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtfreshfrozen)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTFRESHFROZEN, $oedtfreshfrozen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCoreFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcoreflag('fooValue');   // WHERE OedtCoreFlag = 'fooValue'
     * $query->filterByOedtcoreflag('%fooValue%', Criteria::LIKE); // WHERE OedtCoreFlag LIKE '%fooValue%'
     * $query->filterByOedtcoreflag(['foo', 'bar']); // WHERE OedtCoreFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcoreflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcoreflag($oedtcoreflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcoreflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOREFLAG, $oedtcoreflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtNsSalesAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnssalesacct('fooValue');   // WHERE OedtNsSalesAcct = 'fooValue'
     * $query->filterByOedtnssalesacct('%fooValue%', Criteria::LIKE); // WHERE OedtNsSalesAcct LIKE '%fooValue%'
     * $query->filterByOedtnssalesacct(['foo', 'bar']); // WHERE OedtNsSalesAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtnssalesacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtnssalesacct($oedtnssalesacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnssalesacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTNSSALESACCT, $oedtnssalesacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCertReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcertreqd('fooValue');   // WHERE OedtCertReqd = 'fooValue'
     * $query->filterByOedtcertreqd('%fooValue%', Criteria::LIKE); // WHERE OedtCertReqd LIKE '%fooValue%'
     * $query->filterByOedtcertreqd(['foo', 'bar']); // WHERE OedtCertReqd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcertreqd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcertreqd($oedtcertreqd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcertreqd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCERTREQD, $oedtcertreqd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAddOnSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtaddonsales('fooValue');   // WHERE OedtAddOnSales = 'fooValue'
     * $query->filterByOedtaddonsales('%fooValue%', Criteria::LIKE); // WHERE OedtAddOnSales LIKE '%fooValue%'
     * $query->filterByOedtaddonsales(['foo', 'bar']); // WHERE OedtAddOnSales IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtaddonsales The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtaddonsales($oedtaddonsales = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtaddonsales)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTADDONSALES, $oedtaddonsales, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBordFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbordflag('fooValue');   // WHERE OedtBordFlag = 'fooValue'
     * $query->filterByOedtbordflag('%fooValue%', Criteria::LIKE); // WHERE OedtBordFlag LIKE '%fooValue%'
     * $query->filterByOedtbordflag(['foo', 'bar']); // WHERE OedtBordFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtbordflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbordflag($oedtbordflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbordflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBORDFLAG, $oedtbordflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtTempGrove column
     *
     * Example usage:
     * <code>
     * $query->filterByOedttempgrove('fooValue');   // WHERE OedtTempGrove = 'fooValue'
     * $query->filterByOedttempgrove('%fooValue%', Criteria::LIKE); // WHERE OedtTempGrove LIKE '%fooValue%'
     * $query->filterByOedttempgrove(['foo', 'bar']); // WHERE OedtTempGrove IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedttempgrove The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedttempgrove($oedttempgrove = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedttempgrove)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTTEMPGROVE, $oedttempgrove, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtGroveDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtgrovedisc('fooValue');   // WHERE OedtGroveDisc = 'fooValue'
     * $query->filterByOedtgrovedisc('%fooValue%', Criteria::LIKE); // WHERE OedtGroveDisc LIKE '%fooValue%'
     * $query->filterByOedtgrovedisc(['foo', 'bar']); // WHERE OedtGroveDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtgrovedisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtgrovedisc($oedtgrovedisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtgrovedisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTGROVEDISC, $oedtgrovedisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOffInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtoffinvc('fooValue');   // WHERE OedtOffInvc = 'fooValue'
     * $query->filterByOedtoffinvc('%fooValue%', Criteria::LIKE); // WHERE OedtOffInvc LIKE '%fooValue%'
     * $query->filterByOedtoffinvc(['foo', 'bar']); // WHERE OedtOffInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtoffinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtoffinvc($oedtoffinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtoffinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTOFFINVC, $oedtoffinvc, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_INITITEMGRUP, $inititemgrup, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacct('fooValue');   // WHERE OedtAcct = 'fooValue'
     * $query->filterByOedtacct('%fooValue%', Criteria::LIKE); // WHERE OedtAcct LIKE '%fooValue%'
     * $query->filterByOedtacct(['foo', 'bar']); // WHERE OedtAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacct($oedtacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACCT, $oedtacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLoadTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtloadtot(1234); // WHERE OedtLoadTot = 1234
     * $query->filterByOedtloadtot(array(12, 34)); // WHERE OedtLoadTot IN (12, 34)
     * $query->filterByOedtloadtot(array('min' => 12)); // WHERE OedtLoadTot > 12
     * </code>
     *
     * @param mixed $oedtloadtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtloadtot($oedtloadtot = null, ?string $comparison = null)
    {
        if (is_array($oedtloadtot)) {
            $useMinMax = false;
            if (isset($oedtloadtot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLOADTOT, $oedtloadtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtloadtot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLOADTOT, $oedtloadtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLOADTOT, $oedtloadtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPickedQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpickedqty(1234); // WHERE OedtPickedQty = 1234
     * $query->filterByOedtpickedqty(array(12, 34)); // WHERE OedtPickedQty IN (12, 34)
     * $query->filterByOedtpickedqty(array('min' => 12)); // WHERE OedtPickedQty > 12
     * </code>
     *
     * @param mixed $oedtpickedqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpickedqty($oedtpickedqty = null, ?string $comparison = null)
    {
        if (is_array($oedtpickedqty)) {
            $useMinMax = false;
            if (isset($oedtpickedqty['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPICKEDQTY, $oedtpickedqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtpickedqty['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPICKEDQTY, $oedtpickedqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPICKEDQTY, $oedtpickedqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWiOrigQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwiorigqty(1234); // WHERE OedtWiOrigQty = 1234
     * $query->filterByOedtwiorigqty(array(12, 34)); // WHERE OedtWiOrigQty IN (12, 34)
     * $query->filterByOedtwiorigqty(array('min' => 12)); // WHERE OedtWiOrigQty > 12
     * </code>
     *
     * @param mixed $oedtwiorigqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwiorigqty($oedtwiorigqty = null, ?string $comparison = null)
    {
        if (is_array($oedtwiorigqty)) {
            $useMinMax = false;
            if (isset($oedtwiorigqty['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIORIGQTY, $oedtwiorigqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwiorigqty['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIORIGQTY, $oedtwiorigqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIORIGQTY, $oedtwiorigqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtMarginTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmargintot(1234); // WHERE OedtMarginTot = 1234
     * $query->filterByOedtmargintot(array(12, 34)); // WHERE OedtMarginTot IN (12, 34)
     * $query->filterByOedtmargintot(array('min' => 12)); // WHERE OedtMarginTot > 12
     * </code>
     *
     * @param mixed $oedtmargintot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtmargintot($oedtmargintot = null, ?string $comparison = null)
    {
        if (is_array($oedtmargintot)) {
            $useMinMax = false;
            if (isset($oedtmargintot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMARGINTOT, $oedtmargintot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmargintot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMARGINTOT, $oedtmargintot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTMARGINTOT, $oedtmargintot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCoreCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcorecost(1234); // WHERE OedtCoreCost = 1234
     * $query->filterByOedtcorecost(array(12, 34)); // WHERE OedtCoreCost IN (12, 34)
     * $query->filterByOedtcorecost(array('min' => 12)); // WHERE OedtCoreCost > 12
     * </code>
     *
     * @param mixed $oedtcorecost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcorecost($oedtcorecost = null, ?string $comparison = null)
    {
        if (is_array($oedtcorecost)) {
            $useMinMax = false;
            if (isset($oedtcorecost['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCORECOST, $oedtcorecost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcorecost['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCORECOST, $oedtcorecost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCORECOST, $oedtcorecost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtItemRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtitemref('fooValue');   // WHERE OedtItemRef = 'fooValue'
     * $query->filterByOedtitemref('%fooValue%', Criteria::LIKE); // WHERE OedtItemRef LIKE '%fooValue%'
     * $query->filterByOedtitemref(['foo', 'bar']); // WHERE OedtItemRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtitemref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtitemref($oedtitemref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtitemref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTITEMREF, $oedtitemref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtSac02ReturnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtsac02returncode('fooValue');   // WHERE OedtSac02ReturnCode = 'fooValue'
     * $query->filterByOedtsac02returncode('%fooValue%', Criteria::LIKE); // WHERE OedtSac02ReturnCode LIKE '%fooValue%'
     * $query->filterByOedtsac02returncode(['foo', 'bar']); // WHERE OedtSac02ReturnCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtsac02returncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtsac02returncode($oedtsac02returncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtsac02returncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSAC02RETURNCODE, $oedtsac02returncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWgTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwgtaxcode('fooValue');   // WHERE OedtWgTaxCode = 'fooValue'
     * $query->filterByOedtwgtaxcode('%fooValue%', Criteria::LIKE); // WHERE OedtWgTaxCode LIKE '%fooValue%'
     * $query->filterByOedtwgtaxcode(['foo', 'bar']); // WHERE OedtWgTaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtwgtaxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwgtaxcode($oedtwgtaxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtwgtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGTAXCODE, $oedtwgtaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWgPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwgprice(1234); // WHERE OedtWgPrice = 1234
     * $query->filterByOedtwgprice(array(12, 34)); // WHERE OedtWgPrice IN (12, 34)
     * $query->filterByOedtwgprice(array('min' => 12)); // WHERE OedtWgPrice > 12
     * </code>
     *
     * @param mixed $oedtwgprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwgprice($oedtwgprice = null, ?string $comparison = null)
    {
        if (is_array($oedtwgprice)) {
            $useMinMax = false;
            if (isset($oedtwgprice['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGPRICE, $oedtwgprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwgprice['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGPRICE, $oedtwgprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGPRICE, $oedtwgprice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWgTot column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwgtot(1234); // WHERE OedtWgTot = 1234
     * $query->filterByOedtwgtot(array(12, 34)); // WHERE OedtWgTot IN (12, 34)
     * $query->filterByOedtwgtot(array('min' => 12)); // WHERE OedtWgTot > 12
     * </code>
     *
     * @param mixed $oedtwgtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwgtot($oedtwgtot = null, ?string $comparison = null)
    {
        if (is_array($oedtwgtot)) {
            $useMinMax = false;
            if (isset($oedtwgtot['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGTOT, $oedtwgtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwgtot['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGTOT, $oedtwgtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWGTOT, $oedtwgtot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcntrqty(1234); // WHERE OedtCntrQty = 1234
     * $query->filterByOedtcntrqty(array(12, 34)); // WHERE OedtCntrQty IN (12, 34)
     * $query->filterByOedtcntrqty(array('min' => 12)); // WHERE OedtCntrQty > 12
     * </code>
     *
     * @param mixed $oedtcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcntrqty($oedtcntrqty = null, ?string $comparison = null)
    {
        if (is_array($oedtcntrqty)) {
            $useMinMax = false;
            if (isset($oedtcntrqty['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCNTRQTY, $oedtcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcntrqty['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCNTRQTY, $oedtcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCNTRQTY, $oedtcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtConfirmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtconfirmcode('fooValue');   // WHERE OedtConfirmCode = 'fooValue'
     * $query->filterByOedtconfirmcode('%fooValue%', Criteria::LIKE); // WHERE OedtConfirmCode LIKE '%fooValue%'
     * $query->filterByOedtconfirmcode(['foo', 'bar']); // WHERE OedtConfirmCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtconfirmcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtconfirmcode($oedtconfirmcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtconfirmcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCONFIRMCODE, $oedtconfirmcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtPicked column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpicked('fooValue');   // WHERE OedtPicked = 'fooValue'
     * $query->filterByOedtpicked('%fooValue%', Criteria::LIKE); // WHERE OedtPicked LIKE '%fooValue%'
     * $query->filterByOedtpicked(['foo', 'bar']); // WHERE OedtPicked IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtpicked The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtpicked($oedtpicked = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpicked)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTPICKED, $oedtpicked, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOrigRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtorigrqstdate('fooValue');   // WHERE OedtOrigRqstDate = 'fooValue'
     * $query->filterByOedtorigrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedtOrigRqstDate LIKE '%fooValue%'
     * $query->filterByOedtorigrqstdate(['foo', 'bar']); // WHERE OedtOrigRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtorigrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtorigrqstdate($oedtorigrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtorigrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGRQSTDATE, $oedtorigrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtFabLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfablock('fooValue');   // WHERE OedtFabLock = 'fooValue'
     * $query->filterByOedtfablock('%fooValue%', Criteria::LIKE); // WHERE OedtFabLock LIKE '%fooValue%'
     * $query->filterByOedtfablock(['foo', 'bar']); // WHERE OedtFabLock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtfablock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtfablock($oedtfablock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtfablock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTFABLOCK, $oedtfablock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLabelPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlabelprinted('fooValue');   // WHERE OedtLabelPrinted = 'fooValue'
     * $query->filterByOedtlabelprinted('%fooValue%', Criteria::LIKE); // WHERE OedtLabelPrinted LIKE '%fooValue%'
     * $query->filterByOedtlabelprinted(['foo', 'bar']); // WHERE OedtLabelPrinted IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtlabelprinted The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtlabelprinted($oedtlabelprinted = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtlabelprinted)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLABELPRINTED, $oedtlabelprinted, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtQuoteId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtquoteid('fooValue');   // WHERE OedtQuoteId = 'fooValue'
     * $query->filterByOedtquoteid('%fooValue%', Criteria::LIKE); // WHERE OedtQuoteId LIKE '%fooValue%'
     * $query->filterByOedtquoteid(['foo', 'bar']); // WHERE OedtQuoteId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtquoteid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtquoteid($oedtquoteid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtquoteid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTQUOTEID, $oedtquoteid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtInvPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtinvprinted('fooValue');   // WHERE OedtInvPrinted = 'fooValue'
     * $query->filterByOedtinvprinted('%fooValue%', Criteria::LIKE); // WHERE OedtInvPrinted LIKE '%fooValue%'
     * $query->filterByOedtinvprinted(['foo', 'bar']); // WHERE OedtInvPrinted IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtinvprinted The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtinvprinted($oedtinvprinted = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtinvprinted)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTINVPRINTED, $oedtinvprinted, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtStockCheck column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtstockcheck('fooValue');   // WHERE OedtStockCheck = 'fooValue'
     * $query->filterByOedtstockcheck('%fooValue%', Criteria::LIKE); // WHERE OedtStockCheck LIKE '%fooValue%'
     * $query->filterByOedtstockcheck(['foo', 'bar']); // WHERE OedtStockCheck IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtstockcheck The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtstockcheck($oedtstockcheck = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtstockcheck)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSTOCKCHECK, $oedtstockcheck, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtShouldWeSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtshouldwesplit('fooValue');   // WHERE OedtShouldWeSplit = 'fooValue'
     * $query->filterByOedtshouldwesplit('%fooValue%', Criteria::LIKE); // WHERE OedtShouldWeSplit LIKE '%fooValue%'
     * $query->filterByOedtshouldwesplit(['foo', 'bar']); // WHERE OedtShouldWeSplit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtshouldwesplit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtshouldwesplit($oedtshouldwesplit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtshouldwesplit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTSHOULDWESPLIT, $oedtshouldwesplit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCofcReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcofcreqd('fooValue');   // WHERE OedtCofcReqd = 'fooValue'
     * $query->filterByOedtcofcreqd('%fooValue%', Criteria::LIKE); // WHERE OedtCofcReqd LIKE '%fooValue%'
     * $query->filterByOedtcofcreqd(['foo', 'bar']); // WHERE OedtCofcReqd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcofcreqd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcofcreqd($oedtcofcreqd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcofcreqd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCOFCREQD, $oedtcofcreqd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAckCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtackcode('fooValue');   // WHERE OedtAckCode = 'fooValue'
     * $query->filterByOedtackcode('%fooValue%', Criteria::LIKE); // WHERE OedtAckCode LIKE '%fooValue%'
     * $query->filterByOedtackcode(['foo', 'bar']); // WHERE OedtAckCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtackcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtackcode($oedtackcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtackcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACKCODE, $oedtackcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWiBordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwibordnbr('fooValue');   // WHERE OedtWiBordNbr = 'fooValue'
     * $query->filterByOedtwibordnbr('%fooValue%', Criteria::LIKE); // WHERE OedtWiBordNbr LIKE '%fooValue%'
     * $query->filterByOedtwibordnbr(['foo', 'bar']); // WHERE OedtWiBordNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtwibordnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwibordnbr($oedtwibordnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtwibordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBORDNBR, $oedtwibordnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCertHistOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcerthistordr('fooValue');   // WHERE OedtCertHistOrdr = 'fooValue'
     * $query->filterByOedtcerthistordr('%fooValue%', Criteria::LIKE); // WHERE OedtCertHistOrdr LIKE '%fooValue%'
     * $query->filterByOedtcerthistordr(['foo', 'bar']); // WHERE OedtCertHistOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcerthistordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcerthistordr($oedtcerthistordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcerthistordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCERTHISTORDR, $oedtcerthistordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtCertHistLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcerthistline('fooValue');   // WHERE OedtCertHistLine = 'fooValue'
     * $query->filterByOedtcerthistline('%fooValue%', Criteria::LIKE); // WHERE OedtCertHistLine LIKE '%fooValue%'
     * $query->filterByOedtcerthistline(['foo', 'bar']); // WHERE OedtCertHistLine IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtcerthistline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtcerthistline($oedtcerthistline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcerthistline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTCERTHISTLINE, $oedtcerthistline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOrdrdAsItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtordrdasitemid('fooValue');   // WHERE OedtOrdrdAsItemId = 'fooValue'
     * $query->filterByOedtordrdasitemid('%fooValue%', Criteria::LIKE); // WHERE OedtOrdrdAsItemId LIKE '%fooValue%'
     * $query->filterByOedtordrdasitemid(['foo', 'bar']); // WHERE OedtOrdrdAsItemId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtordrdasitemid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtordrdasitemid($oedtordrdasitemid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtordrdasitemid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORDRDASITEMID, $oedtordrdasitemid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWiBatch1Nbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwibatch1nbr(1234); // WHERE OedtWiBatch1Nbr = 1234
     * $query->filterByOedtwibatch1nbr(array(12, 34)); // WHERE OedtWiBatch1Nbr IN (12, 34)
     * $query->filterByOedtwibatch1nbr(array('min' => 12)); // WHERE OedtWiBatch1Nbr > 12
     * </code>
     *
     * @param mixed $oedtwibatch1nbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwibatch1nbr($oedtwibatch1nbr = null, ?string $comparison = null)
    {
        if (is_array($oedtwibatch1nbr)) {
            $useMinMax = false;
            if (isset($oedtwibatch1nbr['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR, $oedtwibatch1nbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwibatch1nbr['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR, $oedtwibatch1nbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1NBR, $oedtwibatch1nbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWiBatch1Qty column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwibatch1qty(1234); // WHERE OedtWiBatch1Qty = 1234
     * $query->filterByOedtwibatch1qty(array(12, 34)); // WHERE OedtWiBatch1Qty IN (12, 34)
     * $query->filterByOedtwibatch1qty(array('min' => 12)); // WHERE OedtWiBatch1Qty > 12
     * </code>
     *
     * @param mixed $oedtwibatch1qty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwibatch1qty($oedtwibatch1qty = null, ?string $comparison = null)
    {
        if (is_array($oedtwibatch1qty)) {
            $useMinMax = false;
            if (isset($oedtwibatch1qty['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY, $oedtwibatch1qty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwibatch1qty['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY, $oedtwibatch1qty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1QTY, $oedtwibatch1qty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtWiBatch1Stat column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwibatch1stat('fooValue');   // WHERE OedtWiBatch1Stat = 'fooValue'
     * $query->filterByOedtwibatch1stat('%fooValue%', Criteria::LIKE); // WHERE OedtWiBatch1Stat LIKE '%fooValue%'
     * $query->filterByOedtwibatch1stat(['foo', 'bar']); // WHERE OedtWiBatch1Stat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtwibatch1stat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtwibatch1stat($oedtwibatch1stat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtwibatch1stat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTWIBATCH1STAT, $oedtwibatch1stat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtRgaNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtrganbr(1234); // WHERE OedtRgaNbr = 1234
     * $query->filterByOedtrganbr(array(12, 34)); // WHERE OedtRgaNbr IN (12, 34)
     * $query->filterByOedtrganbr(array('min' => 12)); // WHERE OedtRgaNbr > 12
     * </code>
     *
     * @param mixed $oedtrganbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtrganbr($oedtrganbr = null, ?string $comparison = null)
    {
        if (is_array($oedtrganbr)) {
            $useMinMax = false;
            if (isset($oedtrganbr['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTRGANBR, $oedtrganbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtrganbr['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTRGANBR, $oedtrganbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTRGANBR, $oedtrganbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtOrigPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtorigpric(1234); // WHERE OedtOrigPric = 1234
     * $query->filterByOedtorigpric(array(12, 34)); // WHERE OedtOrigPric IN (12, 34)
     * $query->filterByOedtorigpric(array('min' => 12)); // WHERE OedtOrigPric > 12
     * </code>
     *
     * @param mixed $oedtorigpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtorigpric($oedtorigpric = null, ?string $comparison = null)
    {
        if (is_array($oedtorigpric)) {
            $useMinMax = false;
            if (isset($oedtorigpric['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGPRIC, $oedtorigpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtorigpric['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGPRIC, $oedtorigpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTORIGPRIC, $oedtorigpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtRefLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtreflinenbr(1234); // WHERE OedtRefLineNbr = 1234
     * $query->filterByOedtreflinenbr(array(12, 34)); // WHERE OedtRefLineNbr IN (12, 34)
     * $query->filterByOedtreflinenbr(array('min' => 12)); // WHERE OedtRefLineNbr > 12
     * </code>
     *
     * @param mixed $oedtreflinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtreflinenbr($oedtreflinenbr = null, ?string $comparison = null)
    {
        if (is_array($oedtreflinenbr)) {
            $useMinMax = false;
            if (isset($oedtreflinenbr['min'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTREFLINENBR, $oedtreflinenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtreflinenbr['max'])) {
                $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTREFLINENBR, $oedtreflinenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTREFLINENBR, $oedtreflinenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtBinLocn column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbinlocn('fooValue');   // WHERE OedtBinLocn = 'fooValue'
     * $query->filterByOedtbinlocn('%fooValue%', Criteria::LIKE); // WHERE OedtBinLocn LIKE '%fooValue%'
     * $query->filterByOedtbinlocn(['foo', 'bar']); // WHERE OedtBinLocn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtbinlocn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtbinlocn($oedtbinlocn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbinlocn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTBINLOCN, $oedtbinlocn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcSuplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacsuplywhse('fooValue');   // WHERE OedtAcSuplyWhse = 'fooValue'
     * $query->filterByOedtacsuplywhse('%fooValue%', Criteria::LIKE); // WHERE OedtAcSuplyWhse LIKE '%fooValue%'
     * $query->filterByOedtacsuplywhse(['foo', 'bar']); // WHERE OedtAcSuplyWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacsuplywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacsuplywhse($oedtacsuplywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacsuplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACSUPLYWHSE, $oedtacsuplywhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtAcPricDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacpricdate('fooValue');   // WHERE OedtAcPricDate = 'fooValue'
     * $query->filterByOedtacpricdate('%fooValue%', Criteria::LIKE); // WHERE OedtAcPricDate LIKE '%fooValue%'
     * $query->filterByOedtacpricdate(['foo', 'bar']); // WHERE OedtAcPricDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oedtacpricdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtacpricdate($oedtacpricdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacpricdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTACPRICDATE, $oedtacpricdate, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SalesOrderDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \SalesOrder object
     *
     * @param \SalesOrder|ObjectCollection $salesOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, ?string $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            return $this
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $salesOrder->getOehdnbr(), $comparison);
        } elseif ($salesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $salesOrder->toKeyValue('PrimaryKey', 'Oehdnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrder');

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
            $this->addJoinObject($join, 'SalesOrder');
        }

        return $this;
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrder', '\SalesOrderQuery');
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @param callable(\SalesOrderQuery):\SalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT EXISTS query.
     *
     * @see useSalesOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderQuery The inner query object of the IN statement
     */
    public function useInSalesOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT IN query.
     *
     * @see useSalesOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(SalesOrderDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesOrderDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Filter the query by a related \SalesOrderLotserial object
     *
     * @param \SalesOrderLotserial|ObjectCollection $salesOrderLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrderLotserial($salesOrderLotserial, ?string $comparison = null)
    {
        if ($salesOrderLotserial instanceof \SalesOrderLotserial) {
            $this
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $salesOrderLotserial->getOehdnbr(), $comparison)
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $salesOrderLotserial->getOedtline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesOrderLotserial() only accepts arguments of type \SalesOrderLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrderLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderLotserial');

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
            $this->addJoinObject($join, 'SalesOrderLotserial');
        }

        return $this;
    }

    /**
     * Use the SalesOrderLotserial relation SalesOrderLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderLotserial', '\SalesOrderLotserialQuery');
    }

    /**
     * Use the SalesOrderLotserial relation SalesOrderLotserial object
     *
     * @param callable(\SalesOrderLotserialQuery):\SalesOrderLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrderLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useExistsQuery('SalesOrderLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrderLotserial table for a NOT EXISTS query.
     *
     * @see useSalesOrderLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useExistsQuery('SalesOrderLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrderLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderLotserialQuery The inner query object of the IN statement
     */
    public function useInSalesOrderLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useInQuery('SalesOrderLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrderLotserial table for a NOT IN query.
     *
     * @see useSalesOrderLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useInQuery('SalesOrderLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoAllocatedLotserial object
     *
     * @param \SoAllocatedLotserial|ObjectCollection $soAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoAllocatedLotserial($soAllocatedLotserial, ?string $comparison = null)
    {
        if ($soAllocatedLotserial instanceof \SoAllocatedLotserial) {
            $this
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $soAllocatedLotserial->getOehdnbr(), $comparison)
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $soAllocatedLotserial->getOedtline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySoAllocatedLotserial() only accepts arguments of type \SoAllocatedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoAllocatedLotserial');

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
            $this->addJoinObject($join, 'SoAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoAllocatedLotserial', '\SoAllocatedLotserialQuery');
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @param callable(\SoAllocatedLotserialQuery):\SoAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSoAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useExistsQuery('SoAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useSoAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useExistsQuery('SoAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInSoAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useInQuery('SoAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for a NOT IN query.
     *
     * @see useSoAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useInQuery('SoAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoPickedLotserial object
     *
     * @param \SoPickedLotserial|ObjectCollection $soPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoPickedLotserial($soPickedLotserial, ?string $comparison = null)
    {
        if ($soPickedLotserial instanceof \SoPickedLotserial) {
            $this
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEHDNBR, $soPickedLotserial->getOehdnbr(), $comparison)
                ->addUsingAlias(SalesOrderDetailTableMap::COL_OEDTLINE, $soPickedLotserial->getOedtline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySoPickedLotserial() only accepts arguments of type \SoPickedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoPickedLotserial');

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
            $this->addJoinObject($join, 'SoPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoPickedLotserial', '\SoPickedLotserialQuery');
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @param callable(\SoPickedLotserialQuery):\SoPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSoPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useExistsQuery('SoPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for a NOT EXISTS query.
     *
     * @see useSoPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useExistsQuery('SoPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInSoPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useInQuery('SoPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for a NOT IN query.
     *
     * @see useSoPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useInQuery('SoPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSalesOrderDetail $salesOrderDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($salesOrderDetail = null)
    {
        if ($salesOrderDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesOrderDetailTableMap::COL_OEHDNBR), $salesOrderDetail->getOehdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesOrderDetailTableMap::COL_OEDTLINE), $salesOrderDetail->getOedtline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderDetailTableMap::clearInstancePool();
            SalesOrderDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
