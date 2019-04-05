<?php

namespace Base;

use \SoDetail as ChildSoDetail;
use \SoDetailQuery as ChildSoDetailQuery;
use \Exception;
use \PDO;
use Map\SoDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_detail' table.
 *
 *
 *
 * @method     ChildSoDetailQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSoDetailQuery orderByOedtline($order = Criteria::ASC) Order by the OedtLine column
 * @method     ChildSoDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSoDetailQuery orderByOedtdesc($order = Criteria::ASC) Order by the OedtDesc column
 * @method     ChildSoDetailQuery orderByOedtdesc2($order = Criteria::ASC) Order by the OedtDesc2 column
 * @method     ChildSoDetailQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildSoDetailQuery orderByOedtrqstdate($order = Criteria::ASC) Order by the OedtRqstDate column
 * @method     ChildSoDetailQuery orderByOedtcancdate($order = Criteria::ASC) Order by the OedtCancDate column
 * @method     ChildSoDetailQuery orderByOedtshipdate($order = Criteria::ASC) Order by the OedtShipDate column
 * @method     ChildSoDetailQuery orderByOedtspecordr($order = Criteria::ASC) Order by the OedtSpecOrdr column
 * @method     ChildSoDetailQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
 * @method     ChildSoDetailQuery orderByOedtqtyord($order = Criteria::ASC) Order by the OedtQtyOrd column
 * @method     ChildSoDetailQuery orderByOedtqtyship($order = Criteria::ASC) Order by the OedtQtyShip column
 * @method     ChildSoDetailQuery orderByOedtqtyshiptot($order = Criteria::ASC) Order by the OedtQtyShipTot column
 * @method     ChildSoDetailQuery orderByOedtqtybord($order = Criteria::ASC) Order by the OedtQtyBord column
 * @method     ChildSoDetailQuery orderByOedtpric($order = Criteria::ASC) Order by the OedtPric column
 * @method     ChildSoDetailQuery orderByOedtcost($order = Criteria::ASC) Order by the OedtCost column
 * @method     ChildSoDetailQuery orderByOedttaxpcttot($order = Criteria::ASC) Order by the OedtTaxPctTot column
 * @method     ChildSoDetailQuery orderByOedtprictot($order = Criteria::ASC) Order by the OedtPricTot column
 * @method     ChildSoDetailQuery orderByOedtcosttot($order = Criteria::ASC) Order by the OedtCostTot column
 * @method     ChildSoDetailQuery orderByOedtspcommpct($order = Criteria::ASC) Order by the OedtSpCommPct column
 * @method     ChildSoDetailQuery orderByOedtbrkncaseqty($order = Criteria::ASC) Order by the OedtBrknCaseQty column
 * @method     ChildSoDetailQuery orderByOedtbin($order = Criteria::ASC) Order by the OedtBin column
 * @method     ChildSoDetailQuery orderByOedtpersonalcd($order = Criteria::ASC) Order by the OedtPersonalCd column
 * @method     ChildSoDetailQuery orderByOedtacdisc1($order = Criteria::ASC) Order by the OedtAcDisc1 column
 * @method     ChildSoDetailQuery orderByOedtacdisc2($order = Criteria::ASC) Order by the OedtAcDisc2 column
 * @method     ChildSoDetailQuery orderByOedtacdisc3($order = Criteria::ASC) Order by the OedtAcDisc3 column
 * @method     ChildSoDetailQuery orderByOedtacdisc4($order = Criteria::ASC) Order by the OedtAcDisc4 column
 * @method     ChildSoDetailQuery orderByOedtlmwipnbr($order = Criteria::ASC) Order by the OedtLmWipNbr column
 * @method     ChildSoDetailQuery orderByOedtcorepric($order = Criteria::ASC) Order by the OedtCorePric column
 * @method     ChildSoDetailQuery orderByOedtasstcode($order = Criteria::ASC) Order by the OedtAsstCode column
 * @method     ChildSoDetailQuery orderByOedtasstqty($order = Criteria::ASC) Order by the OedtAsstQty column
 * @method     ChildSoDetailQuery orderByOedtlistpric($order = Criteria::ASC) Order by the OedtListPric column
 * @method     ChildSoDetailQuery orderByOedtstancost($order = Criteria::ASC) Order by the OedtStanCost column
 * @method     ChildSoDetailQuery orderByOedtvenditemjob($order = Criteria::ASC) Order by the OedtVendItemJob column
 * @method     ChildSoDetailQuery orderByOedtnsvendid($order = Criteria::ASC) Order by the OedtNsVendId column
 * @method     ChildSoDetailQuery orderByOedtnsitemgrup($order = Criteria::ASC) Order by the OedtNsItemGrup column
 * @method     ChildSoDetailQuery orderByOedtusecode($order = Criteria::ASC) Order by the OedtUseCode column
 * @method     ChildSoDetailQuery orderByOedtnsshipfromid($order = Criteria::ASC) Order by the OedtNsShipFromId column
 * @method     ChildSoDetailQuery orderByOedtasstovrd($order = Criteria::ASC) Order by the OedtAsstOvrd column
 * @method     ChildSoDetailQuery orderByOedtpricovrd($order = Criteria::ASC) Order by the OedtPricOvrd column
 * @method     ChildSoDetailQuery orderByOedtpickflag($order = Criteria::ASC) Order by the OedtPickFlag column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode1($order = Criteria::ASC) Order by the OedtMstrTaxCode1 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct1($order = Criteria::ASC) Order by the OedtMstrTaxPct1 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode2($order = Criteria::ASC) Order by the OedtMstrTaxCode2 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct2($order = Criteria::ASC) Order by the OedtMstrTaxPct2 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode3($order = Criteria::ASC) Order by the OedtMstrTaxCode3 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct3($order = Criteria::ASC) Order by the OedtMstrTaxPct3 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode4($order = Criteria::ASC) Order by the OedtMstrTaxCode4 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct4($order = Criteria::ASC) Order by the OedtMstrTaxPct4 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode5($order = Criteria::ASC) Order by the OedtMstrTaxCode5 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct5($order = Criteria::ASC) Order by the OedtMstrTaxPct5 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode6($order = Criteria::ASC) Order by the OedtMstrTaxCode6 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct6($order = Criteria::ASC) Order by the OedtMstrTaxPct6 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode7($order = Criteria::ASC) Order by the OedtMstrTaxCode7 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct7($order = Criteria::ASC) Order by the OedtMstrTaxPct7 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode8($order = Criteria::ASC) Order by the OedtMstrTaxCode8 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct8($order = Criteria::ASC) Order by the OedtMstrTaxPct8 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxcode9($order = Criteria::ASC) Order by the OedtMstrTaxCode9 column
 * @method     ChildSoDetailQuery orderByOedtmstrtaxpct9($order = Criteria::ASC) Order by the OedtMstrTaxPct9 column
 * @method     ChildSoDetailQuery orderByOedtbinarea($order = Criteria::ASC) Order by the OedtBinArea column
 * @method     ChildSoDetailQuery orderByOedtsplitline($order = Criteria::ASC) Order by the OedtSplitLine column
 * @method     ChildSoDetailQuery orderByOedtlostreas($order = Criteria::ASC) Order by the OedtLostReas column
 * @method     ChildSoDetailQuery orderByOedtorigline($order = Criteria::ASC) Order by the OedtOrigLine column
 * @method     ChildSoDetailQuery orderByOedtcustcrssref($order = Criteria::ASC) Order by the OedtCustCrssRef column
 * @method     ChildSoDetailQuery orderByOedtuom($order = Criteria::ASC) Order by the OedtUom column
 * @method     ChildSoDetailQuery orderByOedtshipflag($order = Criteria::ASC) Order by the OedtShipFlag column
 * @method     ChildSoDetailQuery orderByOedtkitflag($order = Criteria::ASC) Order by the OedtKitFlag column
 * @method     ChildSoDetailQuery orderByOedtkititemnbr($order = Criteria::ASC) Order by the OedtKitItemNbr column
 * @method     ChildSoDetailQuery orderByOedtbfcost($order = Criteria::ASC) Order by the OedtBfCost column
 * @method     ChildSoDetailQuery orderByOedtbfmsgcode($order = Criteria::ASC) Order by the OedtBfMsgCode column
 * @method     ChildSoDetailQuery orderByOedtbfcosttot($order = Criteria::ASC) Order by the OedtBfCostTot column
 * @method     ChildSoDetailQuery orderByOedtlmbulkpric($order = Criteria::ASC) Order by the OedtLmBulkPric column
 * @method     ChildSoDetailQuery orderByOedtlmmtrxpkgpric($order = Criteria::ASC) Order by the OedtLmMtrxPkgPric column
 * @method     ChildSoDetailQuery orderByOedtlmmtrxbulkpric($order = Criteria::ASC) Order by the OedtLmMtrxBulkPric column
 * @method     ChildSoDetailQuery orderByOedtlmcontractpric($order = Criteria::ASC) Order by the OedtLmContractPric column
 * @method     ChildSoDetailQuery orderByOedtwght($order = Criteria::ASC) Order by the OedtWght column
 * @method     ChildSoDetailQuery orderByOedtordras($order = Criteria::ASC) Order by the OedtOrdrAs column
 * @method     ChildSoDetailQuery orderByOedtpodetlinenbr($order = Criteria::ASC) Order by the OedtPoDetLineNbr column
 * @method     ChildSoDetailQuery orderByOedtqtytoship($order = Criteria::ASC) Order by the OedtQtyToShip column
 * @method     ChildSoDetailQuery orderByOedtponbr($order = Criteria::ASC) Order by the OedtPoNbr column
 * @method     ChildSoDetailQuery orderByOedtporef($order = Criteria::ASC) Order by the OedtPoRef column
 * @method     ChildSoDetailQuery orderByOedtfrtin($order = Criteria::ASC) Order by the OedtFrtIn column
 * @method     ChildSoDetailQuery orderByOedtfrtinentered($order = Criteria::ASC) Order by the OedtFrtInEntered column
 * @method     ChildSoDetailQuery orderByOedtprodcmplt($order = Criteria::ASC) Order by the OedtProdCmplt column
 * @method     ChildSoDetailQuery orderByOedterflag($order = Criteria::ASC) Order by the OedtErFlag column
 * @method     ChildSoDetailQuery orderByOedtorigitem($order = Criteria::ASC) Order by the OedtOrigItem column
 * @method     ChildSoDetailQuery orderByOedtsubflag($order = Criteria::ASC) Order by the OedtSubFlag column
 * @method     ChildSoDetailQuery orderByOedtediincomingseq($order = Criteria::ASC) Order by the OedtEdiIncomingSeq column
 * @method     ChildSoDetailQuery orderByOedtspordpoline($order = Criteria::ASC) Order by the OedtSpordPoLine column
 * @method     ChildSoDetailQuery orderByOedtcatlgid($order = Criteria::ASC) Order by the OedtCatlgId column
 * @method     ChildSoDetailQuery orderByOedtdesigncd($order = Criteria::ASC) Order by the OedtDesignCd column
 * @method     ChildSoDetailQuery orderByOedtdiscpct($order = Criteria::ASC) Order by the OedtDiscPct column
 * @method     ChildSoDetailQuery orderByOedttaxamt($order = Criteria::ASC) Order by the OedtTaxAmt column
 * @method     ChildSoDetailQuery orderByOedtxusage($order = Criteria::ASC) Order by the OedtXUsage column
 * @method     ChildSoDetailQuery orderByOedtrqtslock($order = Criteria::ASC) Order by the OedtRqtsLock column
 * @method     ChildSoDetailQuery orderByOedtfreshfrozen($order = Criteria::ASC) Order by the OedtFreshFrozen column
 * @method     ChildSoDetailQuery orderByOedtcoreflag($order = Criteria::ASC) Order by the OedtCoreFlag column
 * @method     ChildSoDetailQuery orderByOedtnssalesacct($order = Criteria::ASC) Order by the OedtNsSalesAcct column
 * @method     ChildSoDetailQuery orderByOedtcertreqd($order = Criteria::ASC) Order by the OedtCertReqd column
 * @method     ChildSoDetailQuery orderByOedtaddonsales($order = Criteria::ASC) Order by the OedtAddOnSales column
 * @method     ChildSoDetailQuery orderByOedtbordflag($order = Criteria::ASC) Order by the OedtBordFlag column
 * @method     ChildSoDetailQuery orderByOedttempgrove($order = Criteria::ASC) Order by the OedtTempGrove column
 * @method     ChildSoDetailQuery orderByOedtgrovedisc($order = Criteria::ASC) Order by the OedtGroveDisc column
 * @method     ChildSoDetailQuery orderByOedtoffinvc($order = Criteria::ASC) Order by the OedtOffInvc column
 * @method     ChildSoDetailQuery orderByInititemgrup($order = Criteria::ASC) Order by the InitItemGrup column
 * @method     ChildSoDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildSoDetailQuery orderByOedtacct($order = Criteria::ASC) Order by the OedtAcct column
 * @method     ChildSoDetailQuery orderByOedtloadtot($order = Criteria::ASC) Order by the OedtLoadTot column
 * @method     ChildSoDetailQuery orderByOedtpickedqty($order = Criteria::ASC) Order by the OedtPickedQty column
 * @method     ChildSoDetailQuery orderByOedtwiorigqty($order = Criteria::ASC) Order by the OedtWiOrigQty column
 * @method     ChildSoDetailQuery orderByOedtmargintot($order = Criteria::ASC) Order by the OedtMarginTot column
 * @method     ChildSoDetailQuery orderByOedtcorecost($order = Criteria::ASC) Order by the OedtCoreCost column
 * @method     ChildSoDetailQuery orderByOedtitemref($order = Criteria::ASC) Order by the OedtItemRef column
 * @method     ChildSoDetailQuery orderByOedtsac02returncode($order = Criteria::ASC) Order by the OedtSac02ReturnCode column
 * @method     ChildSoDetailQuery orderByOedtwgtaxcode($order = Criteria::ASC) Order by the OedtWgTaxCode column
 * @method     ChildSoDetailQuery orderByOedtwgprice($order = Criteria::ASC) Order by the OedtWgPrice column
 * @method     ChildSoDetailQuery orderByOedtwgtot($order = Criteria::ASC) Order by the OedtWgTot column
 * @method     ChildSoDetailQuery orderByOedtcntrqty($order = Criteria::ASC) Order by the OedtCntrQty column
 * @method     ChildSoDetailQuery orderByOedtconfirmcode($order = Criteria::ASC) Order by the OedtConfirmCode column
 * @method     ChildSoDetailQuery orderByOedtpicked($order = Criteria::ASC) Order by the OedtPicked column
 * @method     ChildSoDetailQuery orderByOedtorigrqstdate($order = Criteria::ASC) Order by the OedtOrigRqstDate column
 * @method     ChildSoDetailQuery orderByOedtfablock($order = Criteria::ASC) Order by the OedtFabLock column
 * @method     ChildSoDetailQuery orderByOedtlabelprinted($order = Criteria::ASC) Order by the OedtLabelPrinted column
 * @method     ChildSoDetailQuery orderByOedtquoteid($order = Criteria::ASC) Order by the OedtQuoteId column
 * @method     ChildSoDetailQuery orderByOedtinvprinted($order = Criteria::ASC) Order by the OedtInvPrinted column
 * @method     ChildSoDetailQuery orderByOedtstockcheck($order = Criteria::ASC) Order by the OedtStockCheck column
 * @method     ChildSoDetailQuery orderByOedtshouldwesplit($order = Criteria::ASC) Order by the OedtShouldWeSplit column
 * @method     ChildSoDetailQuery orderByOedtcofcreqd($order = Criteria::ASC) Order by the OedtCofcReqd column
 * @method     ChildSoDetailQuery orderByOedtackcode($order = Criteria::ASC) Order by the OedtAckCode column
 * @method     ChildSoDetailQuery orderByOedtwibordnbr($order = Criteria::ASC) Order by the OedtWiBordNbr column
 * @method     ChildSoDetailQuery orderByOedtcerthistordr($order = Criteria::ASC) Order by the OedtCertHistOrdr column
 * @method     ChildSoDetailQuery orderByOedtcerthistline($order = Criteria::ASC) Order by the OedtCertHistLine column
 * @method     ChildSoDetailQuery orderByOedtordrdasitemid($order = Criteria::ASC) Order by the OedtOrdrdAsItemId column
 * @method     ChildSoDetailQuery orderByOedtwibatch1nbr($order = Criteria::ASC) Order by the OedtWiBatch1Nbr column
 * @method     ChildSoDetailQuery orderByOedtwibatch1qty($order = Criteria::ASC) Order by the OedtWiBatch1Qty column
 * @method     ChildSoDetailQuery orderByOedtwibatch1stat($order = Criteria::ASC) Order by the OedtWiBatch1Stat column
 * @method     ChildSoDetailQuery orderByOedtrganbr($order = Criteria::ASC) Order by the OedtRgaNbr column
 * @method     ChildSoDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoDetailQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSoDetailQuery groupByOedtline() Group by the OedtLine column
 * @method     ChildSoDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSoDetailQuery groupByOedtdesc() Group by the OedtDesc column
 * @method     ChildSoDetailQuery groupByOedtdesc2() Group by the OedtDesc2 column
 * @method     ChildSoDetailQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildSoDetailQuery groupByOedtrqstdate() Group by the OedtRqstDate column
 * @method     ChildSoDetailQuery groupByOedtcancdate() Group by the OedtCancDate column
 * @method     ChildSoDetailQuery groupByOedtshipdate() Group by the OedtShipDate column
 * @method     ChildSoDetailQuery groupByOedtspecordr() Group by the OedtSpecOrdr column
 * @method     ChildSoDetailQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
 * @method     ChildSoDetailQuery groupByOedtqtyord() Group by the OedtQtyOrd column
 * @method     ChildSoDetailQuery groupByOedtqtyship() Group by the OedtQtyShip column
 * @method     ChildSoDetailQuery groupByOedtqtyshiptot() Group by the OedtQtyShipTot column
 * @method     ChildSoDetailQuery groupByOedtqtybord() Group by the OedtQtyBord column
 * @method     ChildSoDetailQuery groupByOedtpric() Group by the OedtPric column
 * @method     ChildSoDetailQuery groupByOedtcost() Group by the OedtCost column
 * @method     ChildSoDetailQuery groupByOedttaxpcttot() Group by the OedtTaxPctTot column
 * @method     ChildSoDetailQuery groupByOedtprictot() Group by the OedtPricTot column
 * @method     ChildSoDetailQuery groupByOedtcosttot() Group by the OedtCostTot column
 * @method     ChildSoDetailQuery groupByOedtspcommpct() Group by the OedtSpCommPct column
 * @method     ChildSoDetailQuery groupByOedtbrkncaseqty() Group by the OedtBrknCaseQty column
 * @method     ChildSoDetailQuery groupByOedtbin() Group by the OedtBin column
 * @method     ChildSoDetailQuery groupByOedtpersonalcd() Group by the OedtPersonalCd column
 * @method     ChildSoDetailQuery groupByOedtacdisc1() Group by the OedtAcDisc1 column
 * @method     ChildSoDetailQuery groupByOedtacdisc2() Group by the OedtAcDisc2 column
 * @method     ChildSoDetailQuery groupByOedtacdisc3() Group by the OedtAcDisc3 column
 * @method     ChildSoDetailQuery groupByOedtacdisc4() Group by the OedtAcDisc4 column
 * @method     ChildSoDetailQuery groupByOedtlmwipnbr() Group by the OedtLmWipNbr column
 * @method     ChildSoDetailQuery groupByOedtcorepric() Group by the OedtCorePric column
 * @method     ChildSoDetailQuery groupByOedtasstcode() Group by the OedtAsstCode column
 * @method     ChildSoDetailQuery groupByOedtasstqty() Group by the OedtAsstQty column
 * @method     ChildSoDetailQuery groupByOedtlistpric() Group by the OedtListPric column
 * @method     ChildSoDetailQuery groupByOedtstancost() Group by the OedtStanCost column
 * @method     ChildSoDetailQuery groupByOedtvenditemjob() Group by the OedtVendItemJob column
 * @method     ChildSoDetailQuery groupByOedtnsvendid() Group by the OedtNsVendId column
 * @method     ChildSoDetailQuery groupByOedtnsitemgrup() Group by the OedtNsItemGrup column
 * @method     ChildSoDetailQuery groupByOedtusecode() Group by the OedtUseCode column
 * @method     ChildSoDetailQuery groupByOedtnsshipfromid() Group by the OedtNsShipFromId column
 * @method     ChildSoDetailQuery groupByOedtasstovrd() Group by the OedtAsstOvrd column
 * @method     ChildSoDetailQuery groupByOedtpricovrd() Group by the OedtPricOvrd column
 * @method     ChildSoDetailQuery groupByOedtpickflag() Group by the OedtPickFlag column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode1() Group by the OedtMstrTaxCode1 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct1() Group by the OedtMstrTaxPct1 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode2() Group by the OedtMstrTaxCode2 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct2() Group by the OedtMstrTaxPct2 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode3() Group by the OedtMstrTaxCode3 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct3() Group by the OedtMstrTaxPct3 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode4() Group by the OedtMstrTaxCode4 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct4() Group by the OedtMstrTaxPct4 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode5() Group by the OedtMstrTaxCode5 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct5() Group by the OedtMstrTaxPct5 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode6() Group by the OedtMstrTaxCode6 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct6() Group by the OedtMstrTaxPct6 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode7() Group by the OedtMstrTaxCode7 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct7() Group by the OedtMstrTaxPct7 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode8() Group by the OedtMstrTaxCode8 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct8() Group by the OedtMstrTaxPct8 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxcode9() Group by the OedtMstrTaxCode9 column
 * @method     ChildSoDetailQuery groupByOedtmstrtaxpct9() Group by the OedtMstrTaxPct9 column
 * @method     ChildSoDetailQuery groupByOedtbinarea() Group by the OedtBinArea column
 * @method     ChildSoDetailQuery groupByOedtsplitline() Group by the OedtSplitLine column
 * @method     ChildSoDetailQuery groupByOedtlostreas() Group by the OedtLostReas column
 * @method     ChildSoDetailQuery groupByOedtorigline() Group by the OedtOrigLine column
 * @method     ChildSoDetailQuery groupByOedtcustcrssref() Group by the OedtCustCrssRef column
 * @method     ChildSoDetailQuery groupByOedtuom() Group by the OedtUom column
 * @method     ChildSoDetailQuery groupByOedtshipflag() Group by the OedtShipFlag column
 * @method     ChildSoDetailQuery groupByOedtkitflag() Group by the OedtKitFlag column
 * @method     ChildSoDetailQuery groupByOedtkititemnbr() Group by the OedtKitItemNbr column
 * @method     ChildSoDetailQuery groupByOedtbfcost() Group by the OedtBfCost column
 * @method     ChildSoDetailQuery groupByOedtbfmsgcode() Group by the OedtBfMsgCode column
 * @method     ChildSoDetailQuery groupByOedtbfcosttot() Group by the OedtBfCostTot column
 * @method     ChildSoDetailQuery groupByOedtlmbulkpric() Group by the OedtLmBulkPric column
 * @method     ChildSoDetailQuery groupByOedtlmmtrxpkgpric() Group by the OedtLmMtrxPkgPric column
 * @method     ChildSoDetailQuery groupByOedtlmmtrxbulkpric() Group by the OedtLmMtrxBulkPric column
 * @method     ChildSoDetailQuery groupByOedtlmcontractpric() Group by the OedtLmContractPric column
 * @method     ChildSoDetailQuery groupByOedtwght() Group by the OedtWght column
 * @method     ChildSoDetailQuery groupByOedtordras() Group by the OedtOrdrAs column
 * @method     ChildSoDetailQuery groupByOedtpodetlinenbr() Group by the OedtPoDetLineNbr column
 * @method     ChildSoDetailQuery groupByOedtqtytoship() Group by the OedtQtyToShip column
 * @method     ChildSoDetailQuery groupByOedtponbr() Group by the OedtPoNbr column
 * @method     ChildSoDetailQuery groupByOedtporef() Group by the OedtPoRef column
 * @method     ChildSoDetailQuery groupByOedtfrtin() Group by the OedtFrtIn column
 * @method     ChildSoDetailQuery groupByOedtfrtinentered() Group by the OedtFrtInEntered column
 * @method     ChildSoDetailQuery groupByOedtprodcmplt() Group by the OedtProdCmplt column
 * @method     ChildSoDetailQuery groupByOedterflag() Group by the OedtErFlag column
 * @method     ChildSoDetailQuery groupByOedtorigitem() Group by the OedtOrigItem column
 * @method     ChildSoDetailQuery groupByOedtsubflag() Group by the OedtSubFlag column
 * @method     ChildSoDetailQuery groupByOedtediincomingseq() Group by the OedtEdiIncomingSeq column
 * @method     ChildSoDetailQuery groupByOedtspordpoline() Group by the OedtSpordPoLine column
 * @method     ChildSoDetailQuery groupByOedtcatlgid() Group by the OedtCatlgId column
 * @method     ChildSoDetailQuery groupByOedtdesigncd() Group by the OedtDesignCd column
 * @method     ChildSoDetailQuery groupByOedtdiscpct() Group by the OedtDiscPct column
 * @method     ChildSoDetailQuery groupByOedttaxamt() Group by the OedtTaxAmt column
 * @method     ChildSoDetailQuery groupByOedtxusage() Group by the OedtXUsage column
 * @method     ChildSoDetailQuery groupByOedtrqtslock() Group by the OedtRqtsLock column
 * @method     ChildSoDetailQuery groupByOedtfreshfrozen() Group by the OedtFreshFrozen column
 * @method     ChildSoDetailQuery groupByOedtcoreflag() Group by the OedtCoreFlag column
 * @method     ChildSoDetailQuery groupByOedtnssalesacct() Group by the OedtNsSalesAcct column
 * @method     ChildSoDetailQuery groupByOedtcertreqd() Group by the OedtCertReqd column
 * @method     ChildSoDetailQuery groupByOedtaddonsales() Group by the OedtAddOnSales column
 * @method     ChildSoDetailQuery groupByOedtbordflag() Group by the OedtBordFlag column
 * @method     ChildSoDetailQuery groupByOedttempgrove() Group by the OedtTempGrove column
 * @method     ChildSoDetailQuery groupByOedtgrovedisc() Group by the OedtGroveDisc column
 * @method     ChildSoDetailQuery groupByOedtoffinvc() Group by the OedtOffInvc column
 * @method     ChildSoDetailQuery groupByInititemgrup() Group by the InitItemGrup column
 * @method     ChildSoDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildSoDetailQuery groupByOedtacct() Group by the OedtAcct column
 * @method     ChildSoDetailQuery groupByOedtloadtot() Group by the OedtLoadTot column
 * @method     ChildSoDetailQuery groupByOedtpickedqty() Group by the OedtPickedQty column
 * @method     ChildSoDetailQuery groupByOedtwiorigqty() Group by the OedtWiOrigQty column
 * @method     ChildSoDetailQuery groupByOedtmargintot() Group by the OedtMarginTot column
 * @method     ChildSoDetailQuery groupByOedtcorecost() Group by the OedtCoreCost column
 * @method     ChildSoDetailQuery groupByOedtitemref() Group by the OedtItemRef column
 * @method     ChildSoDetailQuery groupByOedtsac02returncode() Group by the OedtSac02ReturnCode column
 * @method     ChildSoDetailQuery groupByOedtwgtaxcode() Group by the OedtWgTaxCode column
 * @method     ChildSoDetailQuery groupByOedtwgprice() Group by the OedtWgPrice column
 * @method     ChildSoDetailQuery groupByOedtwgtot() Group by the OedtWgTot column
 * @method     ChildSoDetailQuery groupByOedtcntrqty() Group by the OedtCntrQty column
 * @method     ChildSoDetailQuery groupByOedtconfirmcode() Group by the OedtConfirmCode column
 * @method     ChildSoDetailQuery groupByOedtpicked() Group by the OedtPicked column
 * @method     ChildSoDetailQuery groupByOedtorigrqstdate() Group by the OedtOrigRqstDate column
 * @method     ChildSoDetailQuery groupByOedtfablock() Group by the OedtFabLock column
 * @method     ChildSoDetailQuery groupByOedtlabelprinted() Group by the OedtLabelPrinted column
 * @method     ChildSoDetailQuery groupByOedtquoteid() Group by the OedtQuoteId column
 * @method     ChildSoDetailQuery groupByOedtinvprinted() Group by the OedtInvPrinted column
 * @method     ChildSoDetailQuery groupByOedtstockcheck() Group by the OedtStockCheck column
 * @method     ChildSoDetailQuery groupByOedtshouldwesplit() Group by the OedtShouldWeSplit column
 * @method     ChildSoDetailQuery groupByOedtcofcreqd() Group by the OedtCofcReqd column
 * @method     ChildSoDetailQuery groupByOedtackcode() Group by the OedtAckCode column
 * @method     ChildSoDetailQuery groupByOedtwibordnbr() Group by the OedtWiBordNbr column
 * @method     ChildSoDetailQuery groupByOedtcerthistordr() Group by the OedtCertHistOrdr column
 * @method     ChildSoDetailQuery groupByOedtcerthistline() Group by the OedtCertHistLine column
 * @method     ChildSoDetailQuery groupByOedtordrdasitemid() Group by the OedtOrdrdAsItemId column
 * @method     ChildSoDetailQuery groupByOedtwibatch1nbr() Group by the OedtWiBatch1Nbr column
 * @method     ChildSoDetailQuery groupByOedtwibatch1qty() Group by the OedtWiBatch1Qty column
 * @method     ChildSoDetailQuery groupByOedtwibatch1stat() Group by the OedtWiBatch1Stat column
 * @method     ChildSoDetailQuery groupByOedtrganbr() Group by the OedtRgaNbr column
 * @method     ChildSoDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoDetail findOne(ConnectionInterface $con = null) Return the first ChildSoDetail matching the query
 * @method     ChildSoDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoDetail matching the query, or a new ChildSoDetail object populated from the query conditions when no match is found
 *
 * @method     ChildSoDetail findOneByOehdnbr(string $OehdNbr) Return the first ChildSoDetail filtered by the OehdNbr column
 * @method     ChildSoDetail findOneByOedtline(int $OedtLine) Return the first ChildSoDetail filtered by the OedtLine column
 * @method     ChildSoDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildSoDetail filtered by the InitItemNbr column
 * @method     ChildSoDetail findOneByOedtdesc(string $OedtDesc) Return the first ChildSoDetail filtered by the OedtDesc column
 * @method     ChildSoDetail findOneByOedtdesc2(string $OedtDesc2) Return the first ChildSoDetail filtered by the OedtDesc2 column
 * @method     ChildSoDetail findOneByIntbwhse(string $IntbWhse) Return the first ChildSoDetail filtered by the IntbWhse column
 * @method     ChildSoDetail findOneByOedtrqstdate(string $OedtRqstDate) Return the first ChildSoDetail filtered by the OedtRqstDate column
 * @method     ChildSoDetail findOneByOedtcancdate(string $OedtCancDate) Return the first ChildSoDetail filtered by the OedtCancDate column
 * @method     ChildSoDetail findOneByOedtshipdate(string $OedtShipDate) Return the first ChildSoDetail filtered by the OedtShipDate column
 * @method     ChildSoDetail findOneByOedtspecordr(string $OedtSpecOrdr) Return the first ChildSoDetail filtered by the OedtSpecOrdr column
 * @method     ChildSoDetail findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildSoDetail filtered by the ArtbMtaxCode column
 * @method     ChildSoDetail findOneByOedtqtyord(string $OedtQtyOrd) Return the first ChildSoDetail filtered by the OedtQtyOrd column
 * @method     ChildSoDetail findOneByOedtqtyship(string $OedtQtyShip) Return the first ChildSoDetail filtered by the OedtQtyShip column
 * @method     ChildSoDetail findOneByOedtqtyshiptot(string $OedtQtyShipTot) Return the first ChildSoDetail filtered by the OedtQtyShipTot column
 * @method     ChildSoDetail findOneByOedtqtybord(string $OedtQtyBord) Return the first ChildSoDetail filtered by the OedtQtyBord column
 * @method     ChildSoDetail findOneByOedtpric(string $OedtPric) Return the first ChildSoDetail filtered by the OedtPric column
 * @method     ChildSoDetail findOneByOedtcost(string $OedtCost) Return the first ChildSoDetail filtered by the OedtCost column
 * @method     ChildSoDetail findOneByOedttaxpcttot(string $OedtTaxPctTot) Return the first ChildSoDetail filtered by the OedtTaxPctTot column
 * @method     ChildSoDetail findOneByOedtprictot(string $OedtPricTot) Return the first ChildSoDetail filtered by the OedtPricTot column
 * @method     ChildSoDetail findOneByOedtcosttot(string $OedtCostTot) Return the first ChildSoDetail filtered by the OedtCostTot column
 * @method     ChildSoDetail findOneByOedtspcommpct(string $OedtSpCommPct) Return the first ChildSoDetail filtered by the OedtSpCommPct column
 * @method     ChildSoDetail findOneByOedtbrkncaseqty(int $OedtBrknCaseQty) Return the first ChildSoDetail filtered by the OedtBrknCaseQty column
 * @method     ChildSoDetail findOneByOedtbin(string $OedtBin) Return the first ChildSoDetail filtered by the OedtBin column
 * @method     ChildSoDetail findOneByOedtpersonalcd(string $OedtPersonalCd) Return the first ChildSoDetail filtered by the OedtPersonalCd column
 * @method     ChildSoDetail findOneByOedtacdisc1(string $OedtAcDisc1) Return the first ChildSoDetail filtered by the OedtAcDisc1 column
 * @method     ChildSoDetail findOneByOedtacdisc2(string $OedtAcDisc2) Return the first ChildSoDetail filtered by the OedtAcDisc2 column
 * @method     ChildSoDetail findOneByOedtacdisc3(string $OedtAcDisc3) Return the first ChildSoDetail filtered by the OedtAcDisc3 column
 * @method     ChildSoDetail findOneByOedtacdisc4(string $OedtAcDisc4) Return the first ChildSoDetail filtered by the OedtAcDisc4 column
 * @method     ChildSoDetail findOneByOedtlmwipnbr(string $OedtLmWipNbr) Return the first ChildSoDetail filtered by the OedtLmWipNbr column
 * @method     ChildSoDetail findOneByOedtcorepric(string $OedtCorePric) Return the first ChildSoDetail filtered by the OedtCorePric column
 * @method     ChildSoDetail findOneByOedtasstcode(string $OedtAsstCode) Return the first ChildSoDetail filtered by the OedtAsstCode column
 * @method     ChildSoDetail findOneByOedtasstqty(string $OedtAsstQty) Return the first ChildSoDetail filtered by the OedtAsstQty column
 * @method     ChildSoDetail findOneByOedtlistpric(string $OedtListPric) Return the first ChildSoDetail filtered by the OedtListPric column
 * @method     ChildSoDetail findOneByOedtstancost(string $OedtStanCost) Return the first ChildSoDetail filtered by the OedtStanCost column
 * @method     ChildSoDetail findOneByOedtvenditemjob(string $OedtVendItemJob) Return the first ChildSoDetail filtered by the OedtVendItemJob column
 * @method     ChildSoDetail findOneByOedtnsvendid(string $OedtNsVendId) Return the first ChildSoDetail filtered by the OedtNsVendId column
 * @method     ChildSoDetail findOneByOedtnsitemgrup(string $OedtNsItemGrup) Return the first ChildSoDetail filtered by the OedtNsItemGrup column
 * @method     ChildSoDetail findOneByOedtusecode(string $OedtUseCode) Return the first ChildSoDetail filtered by the OedtUseCode column
 * @method     ChildSoDetail findOneByOedtnsshipfromid(string $OedtNsShipFromId) Return the first ChildSoDetail filtered by the OedtNsShipFromId column
 * @method     ChildSoDetail findOneByOedtasstovrd(string $OedtAsstOvrd) Return the first ChildSoDetail filtered by the OedtAsstOvrd column
 * @method     ChildSoDetail findOneByOedtpricovrd(string $OedtPricOvrd) Return the first ChildSoDetail filtered by the OedtPricOvrd column
 * @method     ChildSoDetail findOneByOedtpickflag(string $OedtPickFlag) Return the first ChildSoDetail filtered by the OedtPickFlag column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode1(string $OedtMstrTaxCode1) Return the first ChildSoDetail filtered by the OedtMstrTaxCode1 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct1(string $OedtMstrTaxPct1) Return the first ChildSoDetail filtered by the OedtMstrTaxPct1 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode2(string $OedtMstrTaxCode2) Return the first ChildSoDetail filtered by the OedtMstrTaxCode2 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct2(string $OedtMstrTaxPct2) Return the first ChildSoDetail filtered by the OedtMstrTaxPct2 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode3(string $OedtMstrTaxCode3) Return the first ChildSoDetail filtered by the OedtMstrTaxCode3 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct3(string $OedtMstrTaxPct3) Return the first ChildSoDetail filtered by the OedtMstrTaxPct3 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode4(string $OedtMstrTaxCode4) Return the first ChildSoDetail filtered by the OedtMstrTaxCode4 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct4(string $OedtMstrTaxPct4) Return the first ChildSoDetail filtered by the OedtMstrTaxPct4 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode5(string $OedtMstrTaxCode5) Return the first ChildSoDetail filtered by the OedtMstrTaxCode5 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct5(string $OedtMstrTaxPct5) Return the first ChildSoDetail filtered by the OedtMstrTaxPct5 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode6(string $OedtMstrTaxCode6) Return the first ChildSoDetail filtered by the OedtMstrTaxCode6 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct6(string $OedtMstrTaxPct6) Return the first ChildSoDetail filtered by the OedtMstrTaxPct6 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode7(string $OedtMstrTaxCode7) Return the first ChildSoDetail filtered by the OedtMstrTaxCode7 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct7(string $OedtMstrTaxPct7) Return the first ChildSoDetail filtered by the OedtMstrTaxPct7 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode8(string $OedtMstrTaxCode8) Return the first ChildSoDetail filtered by the OedtMstrTaxCode8 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct8(string $OedtMstrTaxPct8) Return the first ChildSoDetail filtered by the OedtMstrTaxPct8 column
 * @method     ChildSoDetail findOneByOedtmstrtaxcode9(string $OedtMstrTaxCode9) Return the first ChildSoDetail filtered by the OedtMstrTaxCode9 column
 * @method     ChildSoDetail findOneByOedtmstrtaxpct9(string $OedtMstrTaxPct9) Return the first ChildSoDetail filtered by the OedtMstrTaxPct9 column
 * @method     ChildSoDetail findOneByOedtbinarea(string $OedtBinArea) Return the first ChildSoDetail filtered by the OedtBinArea column
 * @method     ChildSoDetail findOneByOedtsplitline(string $OedtSplitLine) Return the first ChildSoDetail filtered by the OedtSplitLine column
 * @method     ChildSoDetail findOneByOedtlostreas(string $OedtLostReas) Return the first ChildSoDetail filtered by the OedtLostReas column
 * @method     ChildSoDetail findOneByOedtorigline(int $OedtOrigLine) Return the first ChildSoDetail filtered by the OedtOrigLine column
 * @method     ChildSoDetail findOneByOedtcustcrssref(string $OedtCustCrssRef) Return the first ChildSoDetail filtered by the OedtCustCrssRef column
 * @method     ChildSoDetail findOneByOedtuom(string $OedtUom) Return the first ChildSoDetail filtered by the OedtUom column
 * @method     ChildSoDetail findOneByOedtshipflag(string $OedtShipFlag) Return the first ChildSoDetail filtered by the OedtShipFlag column
 * @method     ChildSoDetail findOneByOedtkitflag(string $OedtKitFlag) Return the first ChildSoDetail filtered by the OedtKitFlag column
 * @method     ChildSoDetail findOneByOedtkititemnbr(string $OedtKitItemNbr) Return the first ChildSoDetail filtered by the OedtKitItemNbr column
 * @method     ChildSoDetail findOneByOedtbfcost(string $OedtBfCost) Return the first ChildSoDetail filtered by the OedtBfCost column
 * @method     ChildSoDetail findOneByOedtbfmsgcode(string $OedtBfMsgCode) Return the first ChildSoDetail filtered by the OedtBfMsgCode column
 * @method     ChildSoDetail findOneByOedtbfcosttot(string $OedtBfCostTot) Return the first ChildSoDetail filtered by the OedtBfCostTot column
 * @method     ChildSoDetail findOneByOedtlmbulkpric(string $OedtLmBulkPric) Return the first ChildSoDetail filtered by the OedtLmBulkPric column
 * @method     ChildSoDetail findOneByOedtlmmtrxpkgpric(string $OedtLmMtrxPkgPric) Return the first ChildSoDetail filtered by the OedtLmMtrxPkgPric column
 * @method     ChildSoDetail findOneByOedtlmmtrxbulkpric(string $OedtLmMtrxBulkPric) Return the first ChildSoDetail filtered by the OedtLmMtrxBulkPric column
 * @method     ChildSoDetail findOneByOedtlmcontractpric(string $OedtLmContractPric) Return the first ChildSoDetail filtered by the OedtLmContractPric column
 * @method     ChildSoDetail findOneByOedtwght(string $OedtWght) Return the first ChildSoDetail filtered by the OedtWght column
 * @method     ChildSoDetail findOneByOedtordras(string $OedtOrdrAs) Return the first ChildSoDetail filtered by the OedtOrdrAs column
 * @method     ChildSoDetail findOneByOedtpodetlinenbr(int $OedtPoDetLineNbr) Return the first ChildSoDetail filtered by the OedtPoDetLineNbr column
 * @method     ChildSoDetail findOneByOedtqtytoship(string $OedtQtyToShip) Return the first ChildSoDetail filtered by the OedtQtyToShip column
 * @method     ChildSoDetail findOneByOedtponbr(string $OedtPoNbr) Return the first ChildSoDetail filtered by the OedtPoNbr column
 * @method     ChildSoDetail findOneByOedtporef(string $OedtPoRef) Return the first ChildSoDetail filtered by the OedtPoRef column
 * @method     ChildSoDetail findOneByOedtfrtin(string $OedtFrtIn) Return the first ChildSoDetail filtered by the OedtFrtIn column
 * @method     ChildSoDetail findOneByOedtfrtinentered(string $OedtFrtInEntered) Return the first ChildSoDetail filtered by the OedtFrtInEntered column
 * @method     ChildSoDetail findOneByOedtprodcmplt(string $OedtProdCmplt) Return the first ChildSoDetail filtered by the OedtProdCmplt column
 * @method     ChildSoDetail findOneByOedterflag(string $OedtErFlag) Return the first ChildSoDetail filtered by the OedtErFlag column
 * @method     ChildSoDetail findOneByOedtorigitem(string $OedtOrigItem) Return the first ChildSoDetail filtered by the OedtOrigItem column
 * @method     ChildSoDetail findOneByOedtsubflag(string $OedtSubFlag) Return the first ChildSoDetail filtered by the OedtSubFlag column
 * @method     ChildSoDetail findOneByOedtediincomingseq(int $OedtEdiIncomingSeq) Return the first ChildSoDetail filtered by the OedtEdiIncomingSeq column
 * @method     ChildSoDetail findOneByOedtspordpoline(int $OedtSpordPoLine) Return the first ChildSoDetail filtered by the OedtSpordPoLine column
 * @method     ChildSoDetail findOneByOedtcatlgid(string $OedtCatlgId) Return the first ChildSoDetail filtered by the OedtCatlgId column
 * @method     ChildSoDetail findOneByOedtdesigncd(string $OedtDesignCd) Return the first ChildSoDetail filtered by the OedtDesignCd column
 * @method     ChildSoDetail findOneByOedtdiscpct(string $OedtDiscPct) Return the first ChildSoDetail filtered by the OedtDiscPct column
 * @method     ChildSoDetail findOneByOedttaxamt(string $OedtTaxAmt) Return the first ChildSoDetail filtered by the OedtTaxAmt column
 * @method     ChildSoDetail findOneByOedtxusage(string $OedtXUsage) Return the first ChildSoDetail filtered by the OedtXUsage column
 * @method     ChildSoDetail findOneByOedtrqtslock(string $OedtRqtsLock) Return the first ChildSoDetail filtered by the OedtRqtsLock column
 * @method     ChildSoDetail findOneByOedtfreshfrozen(string $OedtFreshFrozen) Return the first ChildSoDetail filtered by the OedtFreshFrozen column
 * @method     ChildSoDetail findOneByOedtcoreflag(string $OedtCoreFlag) Return the first ChildSoDetail filtered by the OedtCoreFlag column
 * @method     ChildSoDetail findOneByOedtnssalesacct(string $OedtNsSalesAcct) Return the first ChildSoDetail filtered by the OedtNsSalesAcct column
 * @method     ChildSoDetail findOneByOedtcertreqd(string $OedtCertReqd) Return the first ChildSoDetail filtered by the OedtCertReqd column
 * @method     ChildSoDetail findOneByOedtaddonsales(string $OedtAddOnSales) Return the first ChildSoDetail filtered by the OedtAddOnSales column
 * @method     ChildSoDetail findOneByOedtbordflag(string $OedtBordFlag) Return the first ChildSoDetail filtered by the OedtBordFlag column
 * @method     ChildSoDetail findOneByOedttempgrove(string $OedtTempGrove) Return the first ChildSoDetail filtered by the OedtTempGrove column
 * @method     ChildSoDetail findOneByOedtgrovedisc(string $OedtGroveDisc) Return the first ChildSoDetail filtered by the OedtGroveDisc column
 * @method     ChildSoDetail findOneByOedtoffinvc(string $OedtOffInvc) Return the first ChildSoDetail filtered by the OedtOffInvc column
 * @method     ChildSoDetail findOneByInititemgrup(string $InitItemGrup) Return the first ChildSoDetail filtered by the InitItemGrup column
 * @method     ChildSoDetail findOneByApvevendid(string $ApveVendId) Return the first ChildSoDetail filtered by the ApveVendId column
 * @method     ChildSoDetail findOneByOedtacct(string $OedtAcct) Return the first ChildSoDetail filtered by the OedtAcct column
 * @method     ChildSoDetail findOneByOedtloadtot(string $OedtLoadTot) Return the first ChildSoDetail filtered by the OedtLoadTot column
 * @method     ChildSoDetail findOneByOedtpickedqty(string $OedtPickedQty) Return the first ChildSoDetail filtered by the OedtPickedQty column
 * @method     ChildSoDetail findOneByOedtwiorigqty(string $OedtWiOrigQty) Return the first ChildSoDetail filtered by the OedtWiOrigQty column
 * @method     ChildSoDetail findOneByOedtmargintot(string $OedtMarginTot) Return the first ChildSoDetail filtered by the OedtMarginTot column
 * @method     ChildSoDetail findOneByOedtcorecost(string $OedtCoreCost) Return the first ChildSoDetail filtered by the OedtCoreCost column
 * @method     ChildSoDetail findOneByOedtitemref(string $OedtItemRef) Return the first ChildSoDetail filtered by the OedtItemRef column
 * @method     ChildSoDetail findOneByOedtsac02returncode(string $OedtSac02ReturnCode) Return the first ChildSoDetail filtered by the OedtSac02ReturnCode column
 * @method     ChildSoDetail findOneByOedtwgtaxcode(string $OedtWgTaxCode) Return the first ChildSoDetail filtered by the OedtWgTaxCode column
 * @method     ChildSoDetail findOneByOedtwgprice(string $OedtWgPrice) Return the first ChildSoDetail filtered by the OedtWgPrice column
 * @method     ChildSoDetail findOneByOedtwgtot(string $OedtWgTot) Return the first ChildSoDetail filtered by the OedtWgTot column
 * @method     ChildSoDetail findOneByOedtcntrqty(int $OedtCntrQty) Return the first ChildSoDetail filtered by the OedtCntrQty column
 * @method     ChildSoDetail findOneByOedtconfirmcode(string $OedtConfirmCode) Return the first ChildSoDetail filtered by the OedtConfirmCode column
 * @method     ChildSoDetail findOneByOedtpicked(string $OedtPicked) Return the first ChildSoDetail filtered by the OedtPicked column
 * @method     ChildSoDetail findOneByOedtorigrqstdate(string $OedtOrigRqstDate) Return the first ChildSoDetail filtered by the OedtOrigRqstDate column
 * @method     ChildSoDetail findOneByOedtfablock(string $OedtFabLock) Return the first ChildSoDetail filtered by the OedtFabLock column
 * @method     ChildSoDetail findOneByOedtlabelprinted(string $OedtLabelPrinted) Return the first ChildSoDetail filtered by the OedtLabelPrinted column
 * @method     ChildSoDetail findOneByOedtquoteid(string $OedtQuoteId) Return the first ChildSoDetail filtered by the OedtQuoteId column
 * @method     ChildSoDetail findOneByOedtinvprinted(string $OedtInvPrinted) Return the first ChildSoDetail filtered by the OedtInvPrinted column
 * @method     ChildSoDetail findOneByOedtstockcheck(string $OedtStockCheck) Return the first ChildSoDetail filtered by the OedtStockCheck column
 * @method     ChildSoDetail findOneByOedtshouldwesplit(string $OedtShouldWeSplit) Return the first ChildSoDetail filtered by the OedtShouldWeSplit column
 * @method     ChildSoDetail findOneByOedtcofcreqd(string $OedtCofcReqd) Return the first ChildSoDetail filtered by the OedtCofcReqd column
 * @method     ChildSoDetail findOneByOedtackcode(string $OedtAckCode) Return the first ChildSoDetail filtered by the OedtAckCode column
 * @method     ChildSoDetail findOneByOedtwibordnbr(string $OedtWiBordNbr) Return the first ChildSoDetail filtered by the OedtWiBordNbr column
 * @method     ChildSoDetail findOneByOedtcerthistordr(string $OedtCertHistOrdr) Return the first ChildSoDetail filtered by the OedtCertHistOrdr column
 * @method     ChildSoDetail findOneByOedtcerthistline(string $OedtCertHistLine) Return the first ChildSoDetail filtered by the OedtCertHistLine column
 * @method     ChildSoDetail findOneByOedtordrdasitemid(string $OedtOrdrdAsItemId) Return the first ChildSoDetail filtered by the OedtOrdrdAsItemId column
 * @method     ChildSoDetail findOneByOedtwibatch1nbr(int $OedtWiBatch1Nbr) Return the first ChildSoDetail filtered by the OedtWiBatch1Nbr column
 * @method     ChildSoDetail findOneByOedtwibatch1qty(string $OedtWiBatch1Qty) Return the first ChildSoDetail filtered by the OedtWiBatch1Qty column
 * @method     ChildSoDetail findOneByOedtwibatch1stat(string $OedtWiBatch1Stat) Return the first ChildSoDetail filtered by the OedtWiBatch1Stat column
 * @method     ChildSoDetail findOneByOedtrganbr(int $OedtRgaNbr) Return the first ChildSoDetail filtered by the OedtRgaNbr column
 * @method     ChildSoDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoDetail filtered by the DateUpdtd column
 * @method     ChildSoDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoDetail filtered by the TimeUpdtd column
 * @method     ChildSoDetail findOneByDummy(string $dummy) Return the first ChildSoDetail filtered by the dummy column *

 * @method     ChildSoDetail requirePk($key, ConnectionInterface $con = null) Return the ChildSoDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOne(ConnectionInterface $con = null) Return the first ChildSoDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoDetail requireOneByOehdnbr(string $OehdNbr) Return the first ChildSoDetail filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtline(int $OedtLine) Return the first ChildSoDetail filtered by the OedtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSoDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtdesc(string $OedtDesc) Return the first ChildSoDetail filtered by the OedtDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtdesc2(string $OedtDesc2) Return the first ChildSoDetail filtered by the OedtDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByIntbwhse(string $IntbWhse) Return the first ChildSoDetail filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtrqstdate(string $OedtRqstDate) Return the first ChildSoDetail filtered by the OedtRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcancdate(string $OedtCancDate) Return the first ChildSoDetail filtered by the OedtCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtshipdate(string $OedtShipDate) Return the first ChildSoDetail filtered by the OedtShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtspecordr(string $OedtSpecOrdr) Return the first ChildSoDetail filtered by the OedtSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildSoDetail filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtqtyord(string $OedtQtyOrd) Return the first ChildSoDetail filtered by the OedtQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtqtyship(string $OedtQtyShip) Return the first ChildSoDetail filtered by the OedtQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtqtyshiptot(string $OedtQtyShipTot) Return the first ChildSoDetail filtered by the OedtQtyShipTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtqtybord(string $OedtQtyBord) Return the first ChildSoDetail filtered by the OedtQtyBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpric(string $OedtPric) Return the first ChildSoDetail filtered by the OedtPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcost(string $OedtCost) Return the first ChildSoDetail filtered by the OedtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedttaxpcttot(string $OedtTaxPctTot) Return the first ChildSoDetail filtered by the OedtTaxPctTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtprictot(string $OedtPricTot) Return the first ChildSoDetail filtered by the OedtPricTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcosttot(string $OedtCostTot) Return the first ChildSoDetail filtered by the OedtCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtspcommpct(string $OedtSpCommPct) Return the first ChildSoDetail filtered by the OedtSpCommPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbrkncaseqty(int $OedtBrknCaseQty) Return the first ChildSoDetail filtered by the OedtBrknCaseQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbin(string $OedtBin) Return the first ChildSoDetail filtered by the OedtBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpersonalcd(string $OedtPersonalCd) Return the first ChildSoDetail filtered by the OedtPersonalCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtacdisc1(string $OedtAcDisc1) Return the first ChildSoDetail filtered by the OedtAcDisc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtacdisc2(string $OedtAcDisc2) Return the first ChildSoDetail filtered by the OedtAcDisc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtacdisc3(string $OedtAcDisc3) Return the first ChildSoDetail filtered by the OedtAcDisc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtacdisc4(string $OedtAcDisc4) Return the first ChildSoDetail filtered by the OedtAcDisc4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlmwipnbr(string $OedtLmWipNbr) Return the first ChildSoDetail filtered by the OedtLmWipNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcorepric(string $OedtCorePric) Return the first ChildSoDetail filtered by the OedtCorePric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtasstcode(string $OedtAsstCode) Return the first ChildSoDetail filtered by the OedtAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtasstqty(string $OedtAsstQty) Return the first ChildSoDetail filtered by the OedtAsstQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlistpric(string $OedtListPric) Return the first ChildSoDetail filtered by the OedtListPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtstancost(string $OedtStanCost) Return the first ChildSoDetail filtered by the OedtStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtvenditemjob(string $OedtVendItemJob) Return the first ChildSoDetail filtered by the OedtVendItemJob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtnsvendid(string $OedtNsVendId) Return the first ChildSoDetail filtered by the OedtNsVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtnsitemgrup(string $OedtNsItemGrup) Return the first ChildSoDetail filtered by the OedtNsItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtusecode(string $OedtUseCode) Return the first ChildSoDetail filtered by the OedtUseCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtnsshipfromid(string $OedtNsShipFromId) Return the first ChildSoDetail filtered by the OedtNsShipFromId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtasstovrd(string $OedtAsstOvrd) Return the first ChildSoDetail filtered by the OedtAsstOvrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpricovrd(string $OedtPricOvrd) Return the first ChildSoDetail filtered by the OedtPricOvrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpickflag(string $OedtPickFlag) Return the first ChildSoDetail filtered by the OedtPickFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode1(string $OedtMstrTaxCode1) Return the first ChildSoDetail filtered by the OedtMstrTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct1(string $OedtMstrTaxPct1) Return the first ChildSoDetail filtered by the OedtMstrTaxPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode2(string $OedtMstrTaxCode2) Return the first ChildSoDetail filtered by the OedtMstrTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct2(string $OedtMstrTaxPct2) Return the first ChildSoDetail filtered by the OedtMstrTaxPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode3(string $OedtMstrTaxCode3) Return the first ChildSoDetail filtered by the OedtMstrTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct3(string $OedtMstrTaxPct3) Return the first ChildSoDetail filtered by the OedtMstrTaxPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode4(string $OedtMstrTaxCode4) Return the first ChildSoDetail filtered by the OedtMstrTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct4(string $OedtMstrTaxPct4) Return the first ChildSoDetail filtered by the OedtMstrTaxPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode5(string $OedtMstrTaxCode5) Return the first ChildSoDetail filtered by the OedtMstrTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct5(string $OedtMstrTaxPct5) Return the first ChildSoDetail filtered by the OedtMstrTaxPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode6(string $OedtMstrTaxCode6) Return the first ChildSoDetail filtered by the OedtMstrTaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct6(string $OedtMstrTaxPct6) Return the first ChildSoDetail filtered by the OedtMstrTaxPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode7(string $OedtMstrTaxCode7) Return the first ChildSoDetail filtered by the OedtMstrTaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct7(string $OedtMstrTaxPct7) Return the first ChildSoDetail filtered by the OedtMstrTaxPct7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode8(string $OedtMstrTaxCode8) Return the first ChildSoDetail filtered by the OedtMstrTaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct8(string $OedtMstrTaxPct8) Return the first ChildSoDetail filtered by the OedtMstrTaxPct8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxcode9(string $OedtMstrTaxCode9) Return the first ChildSoDetail filtered by the OedtMstrTaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmstrtaxpct9(string $OedtMstrTaxPct9) Return the first ChildSoDetail filtered by the OedtMstrTaxPct9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbinarea(string $OedtBinArea) Return the first ChildSoDetail filtered by the OedtBinArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtsplitline(string $OedtSplitLine) Return the first ChildSoDetail filtered by the OedtSplitLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlostreas(string $OedtLostReas) Return the first ChildSoDetail filtered by the OedtLostReas column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtorigline(int $OedtOrigLine) Return the first ChildSoDetail filtered by the OedtOrigLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcustcrssref(string $OedtCustCrssRef) Return the first ChildSoDetail filtered by the OedtCustCrssRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtuom(string $OedtUom) Return the first ChildSoDetail filtered by the OedtUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtshipflag(string $OedtShipFlag) Return the first ChildSoDetail filtered by the OedtShipFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtkitflag(string $OedtKitFlag) Return the first ChildSoDetail filtered by the OedtKitFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtkititemnbr(string $OedtKitItemNbr) Return the first ChildSoDetail filtered by the OedtKitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbfcost(string $OedtBfCost) Return the first ChildSoDetail filtered by the OedtBfCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbfmsgcode(string $OedtBfMsgCode) Return the first ChildSoDetail filtered by the OedtBfMsgCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbfcosttot(string $OedtBfCostTot) Return the first ChildSoDetail filtered by the OedtBfCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlmbulkpric(string $OedtLmBulkPric) Return the first ChildSoDetail filtered by the OedtLmBulkPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlmmtrxpkgpric(string $OedtLmMtrxPkgPric) Return the first ChildSoDetail filtered by the OedtLmMtrxPkgPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlmmtrxbulkpric(string $OedtLmMtrxBulkPric) Return the first ChildSoDetail filtered by the OedtLmMtrxBulkPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlmcontractpric(string $OedtLmContractPric) Return the first ChildSoDetail filtered by the OedtLmContractPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwght(string $OedtWght) Return the first ChildSoDetail filtered by the OedtWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtordras(string $OedtOrdrAs) Return the first ChildSoDetail filtered by the OedtOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpodetlinenbr(int $OedtPoDetLineNbr) Return the first ChildSoDetail filtered by the OedtPoDetLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtqtytoship(string $OedtQtyToShip) Return the first ChildSoDetail filtered by the OedtQtyToShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtponbr(string $OedtPoNbr) Return the first ChildSoDetail filtered by the OedtPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtporef(string $OedtPoRef) Return the first ChildSoDetail filtered by the OedtPoRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtfrtin(string $OedtFrtIn) Return the first ChildSoDetail filtered by the OedtFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtfrtinentered(string $OedtFrtInEntered) Return the first ChildSoDetail filtered by the OedtFrtInEntered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtprodcmplt(string $OedtProdCmplt) Return the first ChildSoDetail filtered by the OedtProdCmplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedterflag(string $OedtErFlag) Return the first ChildSoDetail filtered by the OedtErFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtorigitem(string $OedtOrigItem) Return the first ChildSoDetail filtered by the OedtOrigItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtsubflag(string $OedtSubFlag) Return the first ChildSoDetail filtered by the OedtSubFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtediincomingseq(int $OedtEdiIncomingSeq) Return the first ChildSoDetail filtered by the OedtEdiIncomingSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtspordpoline(int $OedtSpordPoLine) Return the first ChildSoDetail filtered by the OedtSpordPoLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcatlgid(string $OedtCatlgId) Return the first ChildSoDetail filtered by the OedtCatlgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtdesigncd(string $OedtDesignCd) Return the first ChildSoDetail filtered by the OedtDesignCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtdiscpct(string $OedtDiscPct) Return the first ChildSoDetail filtered by the OedtDiscPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedttaxamt(string $OedtTaxAmt) Return the first ChildSoDetail filtered by the OedtTaxAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtxusage(string $OedtXUsage) Return the first ChildSoDetail filtered by the OedtXUsage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtrqtslock(string $OedtRqtsLock) Return the first ChildSoDetail filtered by the OedtRqtsLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtfreshfrozen(string $OedtFreshFrozen) Return the first ChildSoDetail filtered by the OedtFreshFrozen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcoreflag(string $OedtCoreFlag) Return the first ChildSoDetail filtered by the OedtCoreFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtnssalesacct(string $OedtNsSalesAcct) Return the first ChildSoDetail filtered by the OedtNsSalesAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcertreqd(string $OedtCertReqd) Return the first ChildSoDetail filtered by the OedtCertReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtaddonsales(string $OedtAddOnSales) Return the first ChildSoDetail filtered by the OedtAddOnSales column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtbordflag(string $OedtBordFlag) Return the first ChildSoDetail filtered by the OedtBordFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedttempgrove(string $OedtTempGrove) Return the first ChildSoDetail filtered by the OedtTempGrove column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtgrovedisc(string $OedtGroveDisc) Return the first ChildSoDetail filtered by the OedtGroveDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtoffinvc(string $OedtOffInvc) Return the first ChildSoDetail filtered by the OedtOffInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByInititemgrup(string $InitItemGrup) Return the first ChildSoDetail filtered by the InitItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildSoDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtacct(string $OedtAcct) Return the first ChildSoDetail filtered by the OedtAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtloadtot(string $OedtLoadTot) Return the first ChildSoDetail filtered by the OedtLoadTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpickedqty(string $OedtPickedQty) Return the first ChildSoDetail filtered by the OedtPickedQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwiorigqty(string $OedtWiOrigQty) Return the first ChildSoDetail filtered by the OedtWiOrigQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtmargintot(string $OedtMarginTot) Return the first ChildSoDetail filtered by the OedtMarginTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcorecost(string $OedtCoreCost) Return the first ChildSoDetail filtered by the OedtCoreCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtitemref(string $OedtItemRef) Return the first ChildSoDetail filtered by the OedtItemRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtsac02returncode(string $OedtSac02ReturnCode) Return the first ChildSoDetail filtered by the OedtSac02ReturnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwgtaxcode(string $OedtWgTaxCode) Return the first ChildSoDetail filtered by the OedtWgTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwgprice(string $OedtWgPrice) Return the first ChildSoDetail filtered by the OedtWgPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwgtot(string $OedtWgTot) Return the first ChildSoDetail filtered by the OedtWgTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcntrqty(int $OedtCntrQty) Return the first ChildSoDetail filtered by the OedtCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtconfirmcode(string $OedtConfirmCode) Return the first ChildSoDetail filtered by the OedtConfirmCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtpicked(string $OedtPicked) Return the first ChildSoDetail filtered by the OedtPicked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtorigrqstdate(string $OedtOrigRqstDate) Return the first ChildSoDetail filtered by the OedtOrigRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtfablock(string $OedtFabLock) Return the first ChildSoDetail filtered by the OedtFabLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtlabelprinted(string $OedtLabelPrinted) Return the first ChildSoDetail filtered by the OedtLabelPrinted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtquoteid(string $OedtQuoteId) Return the first ChildSoDetail filtered by the OedtQuoteId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtinvprinted(string $OedtInvPrinted) Return the first ChildSoDetail filtered by the OedtInvPrinted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtstockcheck(string $OedtStockCheck) Return the first ChildSoDetail filtered by the OedtStockCheck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtshouldwesplit(string $OedtShouldWeSplit) Return the first ChildSoDetail filtered by the OedtShouldWeSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcofcreqd(string $OedtCofcReqd) Return the first ChildSoDetail filtered by the OedtCofcReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtackcode(string $OedtAckCode) Return the first ChildSoDetail filtered by the OedtAckCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwibordnbr(string $OedtWiBordNbr) Return the first ChildSoDetail filtered by the OedtWiBordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcerthistordr(string $OedtCertHistOrdr) Return the first ChildSoDetail filtered by the OedtCertHistOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtcerthistline(string $OedtCertHistLine) Return the first ChildSoDetail filtered by the OedtCertHistLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtordrdasitemid(string $OedtOrdrdAsItemId) Return the first ChildSoDetail filtered by the OedtOrdrdAsItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwibatch1nbr(int $OedtWiBatch1Nbr) Return the first ChildSoDetail filtered by the OedtWiBatch1Nbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwibatch1qty(string $OedtWiBatch1Qty) Return the first ChildSoDetail filtered by the OedtWiBatch1Qty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtwibatch1stat(string $OedtWiBatch1Stat) Return the first ChildSoDetail filtered by the OedtWiBatch1Stat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByOedtrganbr(int $OedtRgaNbr) Return the first ChildSoDetail filtered by the OedtRgaNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoDetail requireOneByDummy(string $dummy) Return the first ChildSoDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoDetail objects based on current ModelCriteria
 * @method     ChildSoDetail[]|ObjectCollection findByOehdnbr(string $OehdNbr) Return ChildSoDetail objects filtered by the OehdNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtline(int $OedtLine) Return ChildSoDetail objects filtered by the OedtLine column
 * @method     ChildSoDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildSoDetail objects filtered by the InitItemNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtdesc(string $OedtDesc) Return ChildSoDetail objects filtered by the OedtDesc column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtdesc2(string $OedtDesc2) Return ChildSoDetail objects filtered by the OedtDesc2 column
 * @method     ChildSoDetail[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildSoDetail objects filtered by the IntbWhse column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtrqstdate(string $OedtRqstDate) Return ChildSoDetail objects filtered by the OedtRqstDate column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcancdate(string $OedtCancDate) Return ChildSoDetail objects filtered by the OedtCancDate column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtshipdate(string $OedtShipDate) Return ChildSoDetail objects filtered by the OedtShipDate column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtspecordr(string $OedtSpecOrdr) Return ChildSoDetail objects filtered by the OedtSpecOrdr column
 * @method     ChildSoDetail[]|ObjectCollection findByArtbmtaxcode(string $ArtbMtaxCode) Return ChildSoDetail objects filtered by the ArtbMtaxCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtqtyord(string $OedtQtyOrd) Return ChildSoDetail objects filtered by the OedtQtyOrd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtqtyship(string $OedtQtyShip) Return ChildSoDetail objects filtered by the OedtQtyShip column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtqtyshiptot(string $OedtQtyShipTot) Return ChildSoDetail objects filtered by the OedtQtyShipTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtqtybord(string $OedtQtyBord) Return ChildSoDetail objects filtered by the OedtQtyBord column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpric(string $OedtPric) Return ChildSoDetail objects filtered by the OedtPric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcost(string $OedtCost) Return ChildSoDetail objects filtered by the OedtCost column
 * @method     ChildSoDetail[]|ObjectCollection findByOedttaxpcttot(string $OedtTaxPctTot) Return ChildSoDetail objects filtered by the OedtTaxPctTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtprictot(string $OedtPricTot) Return ChildSoDetail objects filtered by the OedtPricTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcosttot(string $OedtCostTot) Return ChildSoDetail objects filtered by the OedtCostTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtspcommpct(string $OedtSpCommPct) Return ChildSoDetail objects filtered by the OedtSpCommPct column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbrkncaseqty(int $OedtBrknCaseQty) Return ChildSoDetail objects filtered by the OedtBrknCaseQty column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbin(string $OedtBin) Return ChildSoDetail objects filtered by the OedtBin column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpersonalcd(string $OedtPersonalCd) Return ChildSoDetail objects filtered by the OedtPersonalCd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtacdisc1(string $OedtAcDisc1) Return ChildSoDetail objects filtered by the OedtAcDisc1 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtacdisc2(string $OedtAcDisc2) Return ChildSoDetail objects filtered by the OedtAcDisc2 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtacdisc3(string $OedtAcDisc3) Return ChildSoDetail objects filtered by the OedtAcDisc3 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtacdisc4(string $OedtAcDisc4) Return ChildSoDetail objects filtered by the OedtAcDisc4 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlmwipnbr(string $OedtLmWipNbr) Return ChildSoDetail objects filtered by the OedtLmWipNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcorepric(string $OedtCorePric) Return ChildSoDetail objects filtered by the OedtCorePric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtasstcode(string $OedtAsstCode) Return ChildSoDetail objects filtered by the OedtAsstCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtasstqty(string $OedtAsstQty) Return ChildSoDetail objects filtered by the OedtAsstQty column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlistpric(string $OedtListPric) Return ChildSoDetail objects filtered by the OedtListPric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtstancost(string $OedtStanCost) Return ChildSoDetail objects filtered by the OedtStanCost column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtvenditemjob(string $OedtVendItemJob) Return ChildSoDetail objects filtered by the OedtVendItemJob column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtnsvendid(string $OedtNsVendId) Return ChildSoDetail objects filtered by the OedtNsVendId column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtnsitemgrup(string $OedtNsItemGrup) Return ChildSoDetail objects filtered by the OedtNsItemGrup column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtusecode(string $OedtUseCode) Return ChildSoDetail objects filtered by the OedtUseCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtnsshipfromid(string $OedtNsShipFromId) Return ChildSoDetail objects filtered by the OedtNsShipFromId column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtasstovrd(string $OedtAsstOvrd) Return ChildSoDetail objects filtered by the OedtAsstOvrd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpricovrd(string $OedtPricOvrd) Return ChildSoDetail objects filtered by the OedtPricOvrd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpickflag(string $OedtPickFlag) Return ChildSoDetail objects filtered by the OedtPickFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode1(string $OedtMstrTaxCode1) Return ChildSoDetail objects filtered by the OedtMstrTaxCode1 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct1(string $OedtMstrTaxPct1) Return ChildSoDetail objects filtered by the OedtMstrTaxPct1 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode2(string $OedtMstrTaxCode2) Return ChildSoDetail objects filtered by the OedtMstrTaxCode2 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct2(string $OedtMstrTaxPct2) Return ChildSoDetail objects filtered by the OedtMstrTaxPct2 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode3(string $OedtMstrTaxCode3) Return ChildSoDetail objects filtered by the OedtMstrTaxCode3 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct3(string $OedtMstrTaxPct3) Return ChildSoDetail objects filtered by the OedtMstrTaxPct3 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode4(string $OedtMstrTaxCode4) Return ChildSoDetail objects filtered by the OedtMstrTaxCode4 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct4(string $OedtMstrTaxPct4) Return ChildSoDetail objects filtered by the OedtMstrTaxPct4 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode5(string $OedtMstrTaxCode5) Return ChildSoDetail objects filtered by the OedtMstrTaxCode5 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct5(string $OedtMstrTaxPct5) Return ChildSoDetail objects filtered by the OedtMstrTaxPct5 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode6(string $OedtMstrTaxCode6) Return ChildSoDetail objects filtered by the OedtMstrTaxCode6 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct6(string $OedtMstrTaxPct6) Return ChildSoDetail objects filtered by the OedtMstrTaxPct6 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode7(string $OedtMstrTaxCode7) Return ChildSoDetail objects filtered by the OedtMstrTaxCode7 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct7(string $OedtMstrTaxPct7) Return ChildSoDetail objects filtered by the OedtMstrTaxPct7 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode8(string $OedtMstrTaxCode8) Return ChildSoDetail objects filtered by the OedtMstrTaxCode8 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct8(string $OedtMstrTaxPct8) Return ChildSoDetail objects filtered by the OedtMstrTaxPct8 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxcode9(string $OedtMstrTaxCode9) Return ChildSoDetail objects filtered by the OedtMstrTaxCode9 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmstrtaxpct9(string $OedtMstrTaxPct9) Return ChildSoDetail objects filtered by the OedtMstrTaxPct9 column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbinarea(string $OedtBinArea) Return ChildSoDetail objects filtered by the OedtBinArea column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtsplitline(string $OedtSplitLine) Return ChildSoDetail objects filtered by the OedtSplitLine column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlostreas(string $OedtLostReas) Return ChildSoDetail objects filtered by the OedtLostReas column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtorigline(int $OedtOrigLine) Return ChildSoDetail objects filtered by the OedtOrigLine column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcustcrssref(string $OedtCustCrssRef) Return ChildSoDetail objects filtered by the OedtCustCrssRef column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtuom(string $OedtUom) Return ChildSoDetail objects filtered by the OedtUom column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtshipflag(string $OedtShipFlag) Return ChildSoDetail objects filtered by the OedtShipFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtkitflag(string $OedtKitFlag) Return ChildSoDetail objects filtered by the OedtKitFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtkititemnbr(string $OedtKitItemNbr) Return ChildSoDetail objects filtered by the OedtKitItemNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbfcost(string $OedtBfCost) Return ChildSoDetail objects filtered by the OedtBfCost column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbfmsgcode(string $OedtBfMsgCode) Return ChildSoDetail objects filtered by the OedtBfMsgCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbfcosttot(string $OedtBfCostTot) Return ChildSoDetail objects filtered by the OedtBfCostTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlmbulkpric(string $OedtLmBulkPric) Return ChildSoDetail objects filtered by the OedtLmBulkPric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlmmtrxpkgpric(string $OedtLmMtrxPkgPric) Return ChildSoDetail objects filtered by the OedtLmMtrxPkgPric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlmmtrxbulkpric(string $OedtLmMtrxBulkPric) Return ChildSoDetail objects filtered by the OedtLmMtrxBulkPric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlmcontractpric(string $OedtLmContractPric) Return ChildSoDetail objects filtered by the OedtLmContractPric column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwght(string $OedtWght) Return ChildSoDetail objects filtered by the OedtWght column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtordras(string $OedtOrdrAs) Return ChildSoDetail objects filtered by the OedtOrdrAs column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpodetlinenbr(int $OedtPoDetLineNbr) Return ChildSoDetail objects filtered by the OedtPoDetLineNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtqtytoship(string $OedtQtyToShip) Return ChildSoDetail objects filtered by the OedtQtyToShip column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtponbr(string $OedtPoNbr) Return ChildSoDetail objects filtered by the OedtPoNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtporef(string $OedtPoRef) Return ChildSoDetail objects filtered by the OedtPoRef column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtfrtin(string $OedtFrtIn) Return ChildSoDetail objects filtered by the OedtFrtIn column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtfrtinentered(string $OedtFrtInEntered) Return ChildSoDetail objects filtered by the OedtFrtInEntered column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtprodcmplt(string $OedtProdCmplt) Return ChildSoDetail objects filtered by the OedtProdCmplt column
 * @method     ChildSoDetail[]|ObjectCollection findByOedterflag(string $OedtErFlag) Return ChildSoDetail objects filtered by the OedtErFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtorigitem(string $OedtOrigItem) Return ChildSoDetail objects filtered by the OedtOrigItem column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtsubflag(string $OedtSubFlag) Return ChildSoDetail objects filtered by the OedtSubFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtediincomingseq(int $OedtEdiIncomingSeq) Return ChildSoDetail objects filtered by the OedtEdiIncomingSeq column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtspordpoline(int $OedtSpordPoLine) Return ChildSoDetail objects filtered by the OedtSpordPoLine column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcatlgid(string $OedtCatlgId) Return ChildSoDetail objects filtered by the OedtCatlgId column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtdesigncd(string $OedtDesignCd) Return ChildSoDetail objects filtered by the OedtDesignCd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtdiscpct(string $OedtDiscPct) Return ChildSoDetail objects filtered by the OedtDiscPct column
 * @method     ChildSoDetail[]|ObjectCollection findByOedttaxamt(string $OedtTaxAmt) Return ChildSoDetail objects filtered by the OedtTaxAmt column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtxusage(string $OedtXUsage) Return ChildSoDetail objects filtered by the OedtXUsage column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtrqtslock(string $OedtRqtsLock) Return ChildSoDetail objects filtered by the OedtRqtsLock column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtfreshfrozen(string $OedtFreshFrozen) Return ChildSoDetail objects filtered by the OedtFreshFrozen column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcoreflag(string $OedtCoreFlag) Return ChildSoDetail objects filtered by the OedtCoreFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtnssalesacct(string $OedtNsSalesAcct) Return ChildSoDetail objects filtered by the OedtNsSalesAcct column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcertreqd(string $OedtCertReqd) Return ChildSoDetail objects filtered by the OedtCertReqd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtaddonsales(string $OedtAddOnSales) Return ChildSoDetail objects filtered by the OedtAddOnSales column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtbordflag(string $OedtBordFlag) Return ChildSoDetail objects filtered by the OedtBordFlag column
 * @method     ChildSoDetail[]|ObjectCollection findByOedttempgrove(string $OedtTempGrove) Return ChildSoDetail objects filtered by the OedtTempGrove column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtgrovedisc(string $OedtGroveDisc) Return ChildSoDetail objects filtered by the OedtGroveDisc column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtoffinvc(string $OedtOffInvc) Return ChildSoDetail objects filtered by the OedtOffInvc column
 * @method     ChildSoDetail[]|ObjectCollection findByInititemgrup(string $InitItemGrup) Return ChildSoDetail objects filtered by the InitItemGrup column
 * @method     ChildSoDetail[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildSoDetail objects filtered by the ApveVendId column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtacct(string $OedtAcct) Return ChildSoDetail objects filtered by the OedtAcct column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtloadtot(string $OedtLoadTot) Return ChildSoDetail objects filtered by the OedtLoadTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpickedqty(string $OedtPickedQty) Return ChildSoDetail objects filtered by the OedtPickedQty column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwiorigqty(string $OedtWiOrigQty) Return ChildSoDetail objects filtered by the OedtWiOrigQty column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtmargintot(string $OedtMarginTot) Return ChildSoDetail objects filtered by the OedtMarginTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcorecost(string $OedtCoreCost) Return ChildSoDetail objects filtered by the OedtCoreCost column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtitemref(string $OedtItemRef) Return ChildSoDetail objects filtered by the OedtItemRef column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtsac02returncode(string $OedtSac02ReturnCode) Return ChildSoDetail objects filtered by the OedtSac02ReturnCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwgtaxcode(string $OedtWgTaxCode) Return ChildSoDetail objects filtered by the OedtWgTaxCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwgprice(string $OedtWgPrice) Return ChildSoDetail objects filtered by the OedtWgPrice column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwgtot(string $OedtWgTot) Return ChildSoDetail objects filtered by the OedtWgTot column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcntrqty(int $OedtCntrQty) Return ChildSoDetail objects filtered by the OedtCntrQty column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtconfirmcode(string $OedtConfirmCode) Return ChildSoDetail objects filtered by the OedtConfirmCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtpicked(string $OedtPicked) Return ChildSoDetail objects filtered by the OedtPicked column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtorigrqstdate(string $OedtOrigRqstDate) Return ChildSoDetail objects filtered by the OedtOrigRqstDate column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtfablock(string $OedtFabLock) Return ChildSoDetail objects filtered by the OedtFabLock column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtlabelprinted(string $OedtLabelPrinted) Return ChildSoDetail objects filtered by the OedtLabelPrinted column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtquoteid(string $OedtQuoteId) Return ChildSoDetail objects filtered by the OedtQuoteId column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtinvprinted(string $OedtInvPrinted) Return ChildSoDetail objects filtered by the OedtInvPrinted column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtstockcheck(string $OedtStockCheck) Return ChildSoDetail objects filtered by the OedtStockCheck column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtshouldwesplit(string $OedtShouldWeSplit) Return ChildSoDetail objects filtered by the OedtShouldWeSplit column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcofcreqd(string $OedtCofcReqd) Return ChildSoDetail objects filtered by the OedtCofcReqd column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtackcode(string $OedtAckCode) Return ChildSoDetail objects filtered by the OedtAckCode column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwibordnbr(string $OedtWiBordNbr) Return ChildSoDetail objects filtered by the OedtWiBordNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcerthistordr(string $OedtCertHistOrdr) Return ChildSoDetail objects filtered by the OedtCertHistOrdr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtcerthistline(string $OedtCertHistLine) Return ChildSoDetail objects filtered by the OedtCertHistLine column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtordrdasitemid(string $OedtOrdrdAsItemId) Return ChildSoDetail objects filtered by the OedtOrdrdAsItemId column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwibatch1nbr(int $OedtWiBatch1Nbr) Return ChildSoDetail objects filtered by the OedtWiBatch1Nbr column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwibatch1qty(string $OedtWiBatch1Qty) Return ChildSoDetail objects filtered by the OedtWiBatch1Qty column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtwibatch1stat(string $OedtWiBatch1Stat) Return ChildSoDetail objects filtered by the OedtWiBatch1Stat column
 * @method     ChildSoDetail[]|ObjectCollection findByOedtrganbr(int $OedtRgaNbr) Return ChildSoDetail objects filtered by the OedtRgaNbr column
 * @method     ChildSoDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoDetail objects filtered by the DateUpdtd column
 * @method     ChildSoDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoDetail objects filtered by the TimeUpdtd column
 * @method     ChildSoDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildSoDetail objects filtered by the dummy column
 * @method     ChildSoDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoDetailQuery) {
            return $criteria;
        }
        $query = new ChildSoDetailQuery();
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
     * @return ChildSoDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSoDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OedtLine, InitItemNbr, OedtDesc, OedtDesc2, IntbWhse, OedtRqstDate, OedtCancDate, OedtShipDate, OedtSpecOrdr, ArtbMtaxCode, OedtQtyOrd, OedtQtyShip, OedtQtyShipTot, OedtQtyBord, OedtPric, OedtCost, OedtTaxPctTot, OedtPricTot, OedtCostTot, OedtSpCommPct, OedtBrknCaseQty, OedtBin, OedtPersonalCd, OedtAcDisc1, OedtAcDisc2, OedtAcDisc3, OedtAcDisc4, OedtLmWipNbr, OedtCorePric, OedtAsstCode, OedtAsstQty, OedtListPric, OedtStanCost, OedtVendItemJob, OedtNsVendId, OedtNsItemGrup, OedtUseCode, OedtNsShipFromId, OedtAsstOvrd, OedtPricOvrd, OedtPickFlag, OedtMstrTaxCode1, OedtMstrTaxPct1, OedtMstrTaxCode2, OedtMstrTaxPct2, OedtMstrTaxCode3, OedtMstrTaxPct3, OedtMstrTaxCode4, OedtMstrTaxPct4, OedtMstrTaxCode5, OedtMstrTaxPct5, OedtMstrTaxCode6, OedtMstrTaxPct6, OedtMstrTaxCode7, OedtMstrTaxPct7, OedtMstrTaxCode8, OedtMstrTaxPct8, OedtMstrTaxCode9, OedtMstrTaxPct9, OedtBinArea, OedtSplitLine, OedtLostReas, OedtOrigLine, OedtCustCrssRef, OedtUom, OedtShipFlag, OedtKitFlag, OedtKitItemNbr, OedtBfCost, OedtBfMsgCode, OedtBfCostTot, OedtLmBulkPric, OedtLmMtrxPkgPric, OedtLmMtrxBulkPric, OedtLmContractPric, OedtWght, OedtOrdrAs, OedtPoDetLineNbr, OedtQtyToShip, OedtPoNbr, OedtPoRef, OedtFrtIn, OedtFrtInEntered, OedtProdCmplt, OedtErFlag, OedtOrigItem, OedtSubFlag, OedtEdiIncomingSeq, OedtSpordPoLine, OedtCatlgId, OedtDesignCd, OedtDiscPct, OedtTaxAmt, OedtXUsage, OedtRqtsLock, OedtFreshFrozen, OedtCoreFlag, OedtNsSalesAcct, OedtCertReqd, OedtAddOnSales, OedtBordFlag, OedtTempGrove, OedtGroveDisc, OedtOffInvc, InitItemGrup, ApveVendId, OedtAcct, OedtLoadTot, OedtPickedQty, OedtWiOrigQty, OedtMarginTot, OedtCoreCost, OedtItemRef, OedtSac02ReturnCode, OedtWgTaxCode, OedtWgPrice, OedtWgTot, OedtCntrQty, OedtConfirmCode, OedtPicked, OedtOrigRqstDate, OedtFabLock, OedtLabelPrinted, OedtQuoteId, OedtInvPrinted, OedtStockCheck, OedtShouldWeSplit, OedtCofcReqd, OedtAckCode, OedtWiBordNbr, OedtCertHistOrdr, OedtCertHistLine, OedtOrdrdAsItemId, OedtWiBatch1Nbr, OedtWiBatch1Qty, OedtWiBatch1Stat, OedtRgaNbr, DateUpdtd, TimeUpdtd, dummy FROM so_detail WHERE OehdNbr = :p0 AND OedtLine = :p1';
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
            /** @var ChildSoDetail $obj */
            $obj = new ChildSoDetail();
            $obj->hydrate($row);
            SoDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSoDetail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SoDetailTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SoDetailTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SoDetailTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SoDetailTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
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
     * $query->filterByOehdnbr('fooValue');   // WHERE OehdNbr = 'fooValue'
     * $query->filterByOehdnbr('%fooValue%', Criteria::LIKE); // WHERE OehdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEHDNBR, $oehdnbr, $comparison);
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
     * @param     mixed $oedtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtline($oedtline = null, $comparison = null)
    {
        if (is_array($oedtline)) {
            $useMinMax = false;
            if (isset($oedtline['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLINE, $oedtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtline['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLINE, $oedtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLINE, $oedtline, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the OedtDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdesc('fooValue');   // WHERE OedtDesc = 'fooValue'
     * $query->filterByOedtdesc('%fooValue%', Criteria::LIKE); // WHERE OedtDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtdesc($oedtdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTDESC, $oedtdesc, $comparison);
    }

    /**
     * Filter the query on the OedtDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdesc2('fooValue');   // WHERE OedtDesc2 = 'fooValue'
     * $query->filterByOedtdesc2('%fooValue%', Criteria::LIKE); // WHERE OedtDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtdesc2($oedtdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTDESC2, $oedtdesc2, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the OedtRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtrqstdate('fooValue');   // WHERE OedtRqstDate = 'fooValue'
     * $query->filterByOedtrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedtRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtrqstdate($oedtrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTRQSTDATE, $oedtrqstdate, $comparison);
    }

    /**
     * Filter the query on the OedtCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcancdate('fooValue');   // WHERE OedtCancDate = 'fooValue'
     * $query->filterByOedtcancdate('%fooValue%', Criteria::LIKE); // WHERE OedtCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcancdate($oedtcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCANCDATE, $oedtcancdate, $comparison);
    }

    /**
     * Filter the query on the OedtShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtshipdate('fooValue');   // WHERE OedtShipDate = 'fooValue'
     * $query->filterByOedtshipdate('%fooValue%', Criteria::LIKE); // WHERE OedtShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtshipdate($oedtshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSHIPDATE, $oedtshipdate, $comparison);
    }

    /**
     * Filter the query on the OedtSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtspecordr('fooValue');   // WHERE OedtSpecOrdr = 'fooValue'
     * $query->filterByOedtspecordr('%fooValue%', Criteria::LIKE); // WHERE OedtSpecOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtspecordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtspecordr($oedtspecordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPECORDR, $oedtspecordr, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);
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
     * @param     mixed $oedtqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtqtyord($oedtqtyord = null, $comparison = null)
    {
        if (is_array($oedtqtyord)) {
            $useMinMax = false;
            if (isset($oedtqtyord['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYORD, $oedtqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtyord['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYORD, $oedtqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYORD, $oedtqtyord, $comparison);
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
     * @param     mixed $oedtqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtqtyship($oedtqtyship = null, $comparison = null)
    {
        if (is_array($oedtqtyship)) {
            $useMinMax = false;
            if (isset($oedtqtyship['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYSHIP, $oedtqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtyship['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYSHIP, $oedtqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYSHIP, $oedtqtyship, $comparison);
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
     * @param     mixed $oedtqtyshiptot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtqtyshiptot($oedtqtyshiptot = null, $comparison = null)
    {
        if (is_array($oedtqtyshiptot)) {
            $useMinMax = false;
            if (isset($oedtqtyshiptot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYSHIPTOT, $oedtqtyshiptot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtyshiptot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYSHIPTOT, $oedtqtyshiptot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYSHIPTOT, $oedtqtyshiptot, $comparison);
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
     * @param     mixed $oedtqtybord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtqtybord($oedtqtybord = null, $comparison = null)
    {
        if (is_array($oedtqtybord)) {
            $useMinMax = false;
            if (isset($oedtqtybord['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYBORD, $oedtqtybord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtybord['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYBORD, $oedtqtybord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYBORD, $oedtqtybord, $comparison);
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
     * @param     mixed $oedtpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpric($oedtpric = null, $comparison = null)
    {
        if (is_array($oedtpric)) {
            $useMinMax = false;
            if (isset($oedtpric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRIC, $oedtpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtpric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRIC, $oedtpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRIC, $oedtpric, $comparison);
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
     * @param     mixed $oedtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcost($oedtcost = null, $comparison = null)
    {
        if (is_array($oedtcost)) {
            $useMinMax = false;
            if (isset($oedtcost['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOST, $oedtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcost['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOST, $oedtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOST, $oedtcost, $comparison);
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
     * @param     mixed $oedttaxpcttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedttaxpcttot($oedttaxpcttot = null, $comparison = null)
    {
        if (is_array($oedttaxpcttot)) {
            $useMinMax = false;
            if (isset($oedttaxpcttot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTTAXPCTTOT, $oedttaxpcttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedttaxpcttot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTTAXPCTTOT, $oedttaxpcttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTTAXPCTTOT, $oedttaxpcttot, $comparison);
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
     * @param     mixed $oedtprictot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtprictot($oedtprictot = null, $comparison = null)
    {
        if (is_array($oedtprictot)) {
            $useMinMax = false;
            if (isset($oedtprictot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRICTOT, $oedtprictot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtprictot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRICTOT, $oedtprictot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRICTOT, $oedtprictot, $comparison);
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
     * @param     mixed $oedtcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcosttot($oedtcosttot = null, $comparison = null)
    {
        if (is_array($oedtcosttot)) {
            $useMinMax = false;
            if (isset($oedtcosttot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOSTTOT, $oedtcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcosttot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOSTTOT, $oedtcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOSTTOT, $oedtcosttot, $comparison);
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
     * @param     mixed $oedtspcommpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtspcommpct($oedtspcommpct = null, $comparison = null)
    {
        if (is_array($oedtspcommpct)) {
            $useMinMax = false;
            if (isset($oedtspcommpct['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPCOMMPCT, $oedtspcommpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtspcommpct['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPCOMMPCT, $oedtspcommpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPCOMMPCT, $oedtspcommpct, $comparison);
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
     * @param     mixed $oedtbrkncaseqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbrkncaseqty($oedtbrkncaseqty = null, $comparison = null)
    {
        if (is_array($oedtbrkncaseqty)) {
            $useMinMax = false;
            if (isset($oedtbrkncaseqty['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTBRKNCASEQTY, $oedtbrkncaseqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtbrkncaseqty['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTBRKNCASEQTY, $oedtbrkncaseqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBRKNCASEQTY, $oedtbrkncaseqty, $comparison);
    }

    /**
     * Filter the query on the OedtBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbin('fooValue');   // WHERE OedtBin = 'fooValue'
     * $query->filterByOedtbin('%fooValue%', Criteria::LIKE); // WHERE OedtBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbin($oedtbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBIN, $oedtbin, $comparison);
    }

    /**
     * Filter the query on the OedtPersonalCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpersonalcd('fooValue');   // WHERE OedtPersonalCd = 'fooValue'
     * $query->filterByOedtpersonalcd('%fooValue%', Criteria::LIKE); // WHERE OedtPersonalCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtpersonalcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpersonalcd($oedtpersonalcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpersonalcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPERSONALCD, $oedtpersonalcd, $comparison);
    }

    /**
     * Filter the query on the OedtAcDisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc1('fooValue');   // WHERE OedtAcDisc1 = 'fooValue'
     * $query->filterByOedtacdisc1('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtacdisc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtacdisc1($oedtacdisc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTACDISC1, $oedtacdisc1, $comparison);
    }

    /**
     * Filter the query on the OedtAcDisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc2('fooValue');   // WHERE OedtAcDisc2 = 'fooValue'
     * $query->filterByOedtacdisc2('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtacdisc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtacdisc2($oedtacdisc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTACDISC2, $oedtacdisc2, $comparison);
    }

    /**
     * Filter the query on the OedtAcDisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc3('fooValue');   // WHERE OedtAcDisc3 = 'fooValue'
     * $query->filterByOedtacdisc3('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtacdisc3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtacdisc3($oedtacdisc3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTACDISC3, $oedtacdisc3, $comparison);
    }

    /**
     * Filter the query on the OedtAcDisc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacdisc4('fooValue');   // WHERE OedtAcDisc4 = 'fooValue'
     * $query->filterByOedtacdisc4('%fooValue%', Criteria::LIKE); // WHERE OedtAcDisc4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtacdisc4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtacdisc4($oedtacdisc4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTACDISC4, $oedtacdisc4, $comparison);
    }

    /**
     * Filter the query on the OedtLmWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlmwipnbr('fooValue');   // WHERE OedtLmWipNbr = 'fooValue'
     * $query->filterByOedtlmwipnbr('%fooValue%', Criteria::LIKE); // WHERE OedtLmWipNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtlmwipnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlmwipnbr($oedtlmwipnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtlmwipnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMWIPNBR, $oedtlmwipnbr, $comparison);
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
     * @param     mixed $oedtcorepric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcorepric($oedtcorepric = null, $comparison = null)
    {
        if (is_array($oedtcorepric)) {
            $useMinMax = false;
            if (isset($oedtcorepric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOREPRIC, $oedtcorepric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcorepric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOREPRIC, $oedtcorepric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOREPRIC, $oedtcorepric, $comparison);
    }

    /**
     * Filter the query on the OedtAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtasstcode('fooValue');   // WHERE OedtAsstCode = 'fooValue'
     * $query->filterByOedtasstcode('%fooValue%', Criteria::LIKE); // WHERE OedtAsstCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtasstcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtasstcode($oedtasstcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTASSTCODE, $oedtasstcode, $comparison);
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
     * @param     mixed $oedtasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtasstqty($oedtasstqty = null, $comparison = null)
    {
        if (is_array($oedtasstqty)) {
            $useMinMax = false;
            if (isset($oedtasstqty['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTASSTQTY, $oedtasstqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtasstqty['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTASSTQTY, $oedtasstqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTASSTQTY, $oedtasstqty, $comparison);
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
     * @param     mixed $oedtlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlistpric($oedtlistpric = null, $comparison = null)
    {
        if (is_array($oedtlistpric)) {
            $useMinMax = false;
            if (isset($oedtlistpric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLISTPRIC, $oedtlistpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlistpric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLISTPRIC, $oedtlistpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLISTPRIC, $oedtlistpric, $comparison);
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
     * @param     mixed $oedtstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtstancost($oedtstancost = null, $comparison = null)
    {
        if (is_array($oedtstancost)) {
            $useMinMax = false;
            if (isset($oedtstancost['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTSTANCOST, $oedtstancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtstancost['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTSTANCOST, $oedtstancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSTANCOST, $oedtstancost, $comparison);
    }

    /**
     * Filter the query on the OedtVendItemJob column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtvenditemjob('fooValue');   // WHERE OedtVendItemJob = 'fooValue'
     * $query->filterByOedtvenditemjob('%fooValue%', Criteria::LIKE); // WHERE OedtVendItemJob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtvenditemjob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtvenditemjob($oedtvenditemjob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtvenditemjob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTVENDITEMJOB, $oedtvenditemjob, $comparison);
    }

    /**
     * Filter the query on the OedtNsVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnsvendid('fooValue');   // WHERE OedtNsVendId = 'fooValue'
     * $query->filterByOedtnsvendid('%fooValue%', Criteria::LIKE); // WHERE OedtNsVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtnsvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtnsvendid($oedtnsvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnsvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTNSVENDID, $oedtnsvendid, $comparison);
    }

    /**
     * Filter the query on the OedtNsItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnsitemgrup('fooValue');   // WHERE OedtNsItemGrup = 'fooValue'
     * $query->filterByOedtnsitemgrup('%fooValue%', Criteria::LIKE); // WHERE OedtNsItemGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtnsitemgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtnsitemgrup($oedtnsitemgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnsitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTNSITEMGRUP, $oedtnsitemgrup, $comparison);
    }

    /**
     * Filter the query on the OedtUseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtusecode('fooValue');   // WHERE OedtUseCode = 'fooValue'
     * $query->filterByOedtusecode('%fooValue%', Criteria::LIKE); // WHERE OedtUseCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtusecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtusecode($oedtusecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtusecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTUSECODE, $oedtusecode, $comparison);
    }

    /**
     * Filter the query on the OedtNsShipFromId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnsshipfromid('fooValue');   // WHERE OedtNsShipFromId = 'fooValue'
     * $query->filterByOedtnsshipfromid('%fooValue%', Criteria::LIKE); // WHERE OedtNsShipFromId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtnsshipfromid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtnsshipfromid($oedtnsshipfromid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnsshipfromid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTNSSHIPFROMID, $oedtnsshipfromid, $comparison);
    }

    /**
     * Filter the query on the OedtAsstOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtasstovrd('fooValue');   // WHERE OedtAsstOvrd = 'fooValue'
     * $query->filterByOedtasstovrd('%fooValue%', Criteria::LIKE); // WHERE OedtAsstOvrd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtasstovrd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtasstovrd($oedtasstovrd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtasstovrd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTASSTOVRD, $oedtasstovrd, $comparison);
    }

    /**
     * Filter the query on the OedtPricOvrd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpricovrd('fooValue');   // WHERE OedtPricOvrd = 'fooValue'
     * $query->filterByOedtpricovrd('%fooValue%', Criteria::LIKE); // WHERE OedtPricOvrd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtpricovrd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpricovrd($oedtpricovrd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpricovrd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRICOVRD, $oedtpricovrd, $comparison);
    }

    /**
     * Filter the query on the OedtPickFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpickflag('fooValue');   // WHERE OedtPickFlag = 'fooValue'
     * $query->filterByOedtpickflag('%fooValue%', Criteria::LIKE); // WHERE OedtPickFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtpickflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpickflag($oedtpickflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpickflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPICKFLAG, $oedtpickflag, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode1('fooValue');   // WHERE OedtMstrTaxCode1 = 'fooValue'
     * $query->filterByOedtmstrtaxcode1('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode1($oedtmstrtaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE1, $oedtmstrtaxcode1, $comparison);
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
     * @param     mixed $oedtmstrtaxpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct1($oedtmstrtaxpct1 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct1)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct1['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT1, $oedtmstrtaxpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct1['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT1, $oedtmstrtaxpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT1, $oedtmstrtaxpct1, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode2('fooValue');   // WHERE OedtMstrTaxCode2 = 'fooValue'
     * $query->filterByOedtmstrtaxcode2('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode2($oedtmstrtaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE2, $oedtmstrtaxcode2, $comparison);
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
     * @param     mixed $oedtmstrtaxpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct2($oedtmstrtaxpct2 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct2)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct2['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT2, $oedtmstrtaxpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct2['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT2, $oedtmstrtaxpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT2, $oedtmstrtaxpct2, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode3('fooValue');   // WHERE OedtMstrTaxCode3 = 'fooValue'
     * $query->filterByOedtmstrtaxcode3('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode3($oedtmstrtaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE3, $oedtmstrtaxcode3, $comparison);
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
     * @param     mixed $oedtmstrtaxpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct3($oedtmstrtaxpct3 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct3)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct3['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT3, $oedtmstrtaxpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct3['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT3, $oedtmstrtaxpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT3, $oedtmstrtaxpct3, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode4('fooValue');   // WHERE OedtMstrTaxCode4 = 'fooValue'
     * $query->filterByOedtmstrtaxcode4('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode4($oedtmstrtaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE4, $oedtmstrtaxcode4, $comparison);
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
     * @param     mixed $oedtmstrtaxpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct4($oedtmstrtaxpct4 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct4)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct4['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT4, $oedtmstrtaxpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct4['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT4, $oedtmstrtaxpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT4, $oedtmstrtaxpct4, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode5('fooValue');   // WHERE OedtMstrTaxCode5 = 'fooValue'
     * $query->filterByOedtmstrtaxcode5('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode5($oedtmstrtaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE5, $oedtmstrtaxcode5, $comparison);
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
     * @param     mixed $oedtmstrtaxpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct5($oedtmstrtaxpct5 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct5)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct5['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT5, $oedtmstrtaxpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct5['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT5, $oedtmstrtaxpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT5, $oedtmstrtaxpct5, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode6('fooValue');   // WHERE OedtMstrTaxCode6 = 'fooValue'
     * $query->filterByOedtmstrtaxcode6('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode6($oedtmstrtaxcode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE6, $oedtmstrtaxcode6, $comparison);
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
     * @param     mixed $oedtmstrtaxpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct6($oedtmstrtaxpct6 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct6)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct6['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT6, $oedtmstrtaxpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct6['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT6, $oedtmstrtaxpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT6, $oedtmstrtaxpct6, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode7('fooValue');   // WHERE OedtMstrTaxCode7 = 'fooValue'
     * $query->filterByOedtmstrtaxcode7('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode7($oedtmstrtaxcode7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE7, $oedtmstrtaxcode7, $comparison);
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
     * @param     mixed $oedtmstrtaxpct7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct7($oedtmstrtaxpct7 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct7)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct7['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT7, $oedtmstrtaxpct7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct7['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT7, $oedtmstrtaxpct7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT7, $oedtmstrtaxpct7, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode8('fooValue');   // WHERE OedtMstrTaxCode8 = 'fooValue'
     * $query->filterByOedtmstrtaxcode8('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode8($oedtmstrtaxcode8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE8, $oedtmstrtaxcode8, $comparison);
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
     * @param     mixed $oedtmstrtaxpct8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct8($oedtmstrtaxpct8 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct8)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct8['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT8, $oedtmstrtaxpct8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct8['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT8, $oedtmstrtaxpct8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT8, $oedtmstrtaxpct8, $comparison);
    }

    /**
     * Filter the query on the OedtMstrTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtmstrtaxcode9('fooValue');   // WHERE OedtMstrTaxCode9 = 'fooValue'
     * $query->filterByOedtmstrtaxcode9('%fooValue%', Criteria::LIKE); // WHERE OedtMstrTaxCode9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtmstrtaxcode9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxcode9($oedtmstrtaxcode9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtmstrtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXCODE9, $oedtmstrtaxcode9, $comparison);
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
     * @param     mixed $oedtmstrtaxpct9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmstrtaxpct9($oedtmstrtaxpct9 = null, $comparison = null)
    {
        if (is_array($oedtmstrtaxpct9)) {
            $useMinMax = false;
            if (isset($oedtmstrtaxpct9['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT9, $oedtmstrtaxpct9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmstrtaxpct9['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT9, $oedtmstrtaxpct9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMSTRTAXPCT9, $oedtmstrtaxpct9, $comparison);
    }

    /**
     * Filter the query on the OedtBinArea column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbinarea('fooValue');   // WHERE OedtBinArea = 'fooValue'
     * $query->filterByOedtbinarea('%fooValue%', Criteria::LIKE); // WHERE OedtBinArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtbinarea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbinarea($oedtbinarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbinarea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBINAREA, $oedtbinarea, $comparison);
    }

    /**
     * Filter the query on the OedtSplitLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtsplitline('fooValue');   // WHERE OedtSplitLine = 'fooValue'
     * $query->filterByOedtsplitline('%fooValue%', Criteria::LIKE); // WHERE OedtSplitLine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtsplitline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtsplitline($oedtsplitline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtsplitline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPLITLINE, $oedtsplitline, $comparison);
    }

    /**
     * Filter the query on the OedtLostReas column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlostreas('fooValue');   // WHERE OedtLostReas = 'fooValue'
     * $query->filterByOedtlostreas('%fooValue%', Criteria::LIKE); // WHERE OedtLostReas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtlostreas The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlostreas($oedtlostreas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtlostreas)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLOSTREAS, $oedtlostreas, $comparison);
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
     * @param     mixed $oedtorigline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtorigline($oedtorigline = null, $comparison = null)
    {
        if (is_array($oedtorigline)) {
            $useMinMax = false;
            if (isset($oedtorigline['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTORIGLINE, $oedtorigline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtorigline['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTORIGLINE, $oedtorigline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTORIGLINE, $oedtorigline, $comparison);
    }

    /**
     * Filter the query on the OedtCustCrssRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcustcrssref('fooValue');   // WHERE OedtCustCrssRef = 'fooValue'
     * $query->filterByOedtcustcrssref('%fooValue%', Criteria::LIKE); // WHERE OedtCustCrssRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcustcrssref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcustcrssref($oedtcustcrssref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcustcrssref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCUSTCRSSREF, $oedtcustcrssref, $comparison);
    }

    /**
     * Filter the query on the OedtUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtuom('fooValue');   // WHERE OedtUom = 'fooValue'
     * $query->filterByOedtuom('%fooValue%', Criteria::LIKE); // WHERE OedtUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtuom($oedtuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTUOM, $oedtuom, $comparison);
    }

    /**
     * Filter the query on the OedtShipFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtshipflag('fooValue');   // WHERE OedtShipFlag = 'fooValue'
     * $query->filterByOedtshipflag('%fooValue%', Criteria::LIKE); // WHERE OedtShipFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtshipflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtshipflag($oedtshipflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtshipflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSHIPFLAG, $oedtshipflag, $comparison);
    }

    /**
     * Filter the query on the OedtKitFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtkitflag('fooValue');   // WHERE OedtKitFlag = 'fooValue'
     * $query->filterByOedtkitflag('%fooValue%', Criteria::LIKE); // WHERE OedtKitFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtkitflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtkitflag($oedtkitflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtkitflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTKITFLAG, $oedtkitflag, $comparison);
    }

    /**
     * Filter the query on the OedtKitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtkititemnbr('fooValue');   // WHERE OedtKitItemNbr = 'fooValue'
     * $query->filterByOedtkititemnbr('%fooValue%', Criteria::LIKE); // WHERE OedtKitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtkititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtkititemnbr($oedtkititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtkititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTKITITEMNBR, $oedtkititemnbr, $comparison);
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
     * @param     mixed $oedtbfcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbfcost($oedtbfcost = null, $comparison = null)
    {
        if (is_array($oedtbfcost)) {
            $useMinMax = false;
            if (isset($oedtbfcost['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFCOST, $oedtbfcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtbfcost['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFCOST, $oedtbfcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFCOST, $oedtbfcost, $comparison);
    }

    /**
     * Filter the query on the OedtBfMsgCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbfmsgcode('fooValue');   // WHERE OedtBfMsgCode = 'fooValue'
     * $query->filterByOedtbfmsgcode('%fooValue%', Criteria::LIKE); // WHERE OedtBfMsgCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtbfmsgcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbfmsgcode($oedtbfmsgcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbfmsgcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFMSGCODE, $oedtbfmsgcode, $comparison);
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
     * @param     mixed $oedtbfcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbfcosttot($oedtbfcosttot = null, $comparison = null)
    {
        if (is_array($oedtbfcosttot)) {
            $useMinMax = false;
            if (isset($oedtbfcosttot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFCOSTTOT, $oedtbfcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtbfcosttot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFCOSTTOT, $oedtbfcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBFCOSTTOT, $oedtbfcosttot, $comparison);
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
     * @param     mixed $oedtlmbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlmbulkpric($oedtlmbulkpric = null, $comparison = null)
    {
        if (is_array($oedtlmbulkpric)) {
            $useMinMax = false;
            if (isset($oedtlmbulkpric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMBULKPRIC, $oedtlmbulkpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmbulkpric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMBULKPRIC, $oedtlmbulkpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMBULKPRIC, $oedtlmbulkpric, $comparison);
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
     * @param     mixed $oedtlmmtrxpkgpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlmmtrxpkgpric($oedtlmmtrxpkgpric = null, $comparison = null)
    {
        if (is_array($oedtlmmtrxpkgpric)) {
            $useMinMax = false;
            if (isset($oedtlmmtrxpkgpric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMMTRXPKGPRIC, $oedtlmmtrxpkgpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmmtrxpkgpric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMMTRXPKGPRIC, $oedtlmmtrxpkgpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMMTRXPKGPRIC, $oedtlmmtrxpkgpric, $comparison);
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
     * @param     mixed $oedtlmmtrxbulkpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlmmtrxbulkpric($oedtlmmtrxbulkpric = null, $comparison = null)
    {
        if (is_array($oedtlmmtrxbulkpric)) {
            $useMinMax = false;
            if (isset($oedtlmmtrxbulkpric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMMTRXBULKPRIC, $oedtlmmtrxbulkpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmmtrxbulkpric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMMTRXBULKPRIC, $oedtlmmtrxbulkpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMMTRXBULKPRIC, $oedtlmmtrxbulkpric, $comparison);
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
     * @param     mixed $oedtlmcontractpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlmcontractpric($oedtlmcontractpric = null, $comparison = null)
    {
        if (is_array($oedtlmcontractpric)) {
            $useMinMax = false;
            if (isset($oedtlmcontractpric['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMCONTRACTPRIC, $oedtlmcontractpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtlmcontractpric['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMCONTRACTPRIC, $oedtlmcontractpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLMCONTRACTPRIC, $oedtlmcontractpric, $comparison);
    }

    /**
     * Filter the query on the OedtWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwght(1234); // WHERE OedtWght = 1234
     * $query->filterByOedtwght(array(12, 34)); // WHERE OedtWght IN (12, 34)
     * $query->filterByOedtwght(array('min' => 12)); // WHERE OedtWght > 12
     * </code>
     *
     * @param     mixed $oedtwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwght($oedtwght = null, $comparison = null)
    {
        if (is_array($oedtwght)) {
            $useMinMax = false;
            if (isset($oedtwght['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGHT, $oedtwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwght['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGHT, $oedtwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGHT, $oedtwght, $comparison);
    }

    /**
     * Filter the query on the OedtOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtordras('fooValue');   // WHERE OedtOrdrAs = 'fooValue'
     * $query->filterByOedtordras('%fooValue%', Criteria::LIKE); // WHERE OedtOrdrAs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtordras The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtordras($oedtordras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtordras)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTORDRAS, $oedtordras, $comparison);
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
     * @param     mixed $oedtpodetlinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpodetlinenbr($oedtpodetlinenbr = null, $comparison = null)
    {
        if (is_array($oedtpodetlinenbr)) {
            $useMinMax = false;
            if (isset($oedtpodetlinenbr['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPODETLINENBR, $oedtpodetlinenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtpodetlinenbr['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPODETLINENBR, $oedtpodetlinenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPODETLINENBR, $oedtpodetlinenbr, $comparison);
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
     * @param     mixed $oedtqtytoship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtqtytoship($oedtqtytoship = null, $comparison = null)
    {
        if (is_array($oedtqtytoship)) {
            $useMinMax = false;
            if (isset($oedtqtytoship['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYTOSHIP, $oedtqtytoship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtqtytoship['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYTOSHIP, $oedtqtytoship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTQTYTOSHIP, $oedtqtytoship, $comparison);
    }

    /**
     * Filter the query on the OedtPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtponbr('fooValue');   // WHERE OedtPoNbr = 'fooValue'
     * $query->filterByOedtponbr('%fooValue%', Criteria::LIKE); // WHERE OedtPoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtponbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtponbr($oedtponbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtponbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPONBR, $oedtponbr, $comparison);
    }

    /**
     * Filter the query on the OedtPoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtporef('fooValue');   // WHERE OedtPoRef = 'fooValue'
     * $query->filterByOedtporef('%fooValue%', Criteria::LIKE); // WHERE OedtPoRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtporef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtporef($oedtporef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtporef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPOREF, $oedtporef, $comparison);
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
     * @param     mixed $oedtfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtfrtin($oedtfrtin = null, $comparison = null)
    {
        if (is_array($oedtfrtin)) {
            $useMinMax = false;
            if (isset($oedtfrtin['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTFRTIN, $oedtfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtfrtin['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTFRTIN, $oedtfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTFRTIN, $oedtfrtin, $comparison);
    }

    /**
     * Filter the query on the OedtFrtInEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfrtinentered('fooValue');   // WHERE OedtFrtInEntered = 'fooValue'
     * $query->filterByOedtfrtinentered('%fooValue%', Criteria::LIKE); // WHERE OedtFrtInEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtfrtinentered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtfrtinentered($oedtfrtinentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtfrtinentered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTFRTINENTERED, $oedtfrtinentered, $comparison);
    }

    /**
     * Filter the query on the OedtProdCmplt column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtprodcmplt('fooValue');   // WHERE OedtProdCmplt = 'fooValue'
     * $query->filterByOedtprodcmplt('%fooValue%', Criteria::LIKE); // WHERE OedtProdCmplt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtprodcmplt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtprodcmplt($oedtprodcmplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtprodcmplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPRODCMPLT, $oedtprodcmplt, $comparison);
    }

    /**
     * Filter the query on the OedtErFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedterflag('fooValue');   // WHERE OedtErFlag = 'fooValue'
     * $query->filterByOedterflag('%fooValue%', Criteria::LIKE); // WHERE OedtErFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedterflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedterflag($oedterflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedterflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTERFLAG, $oedterflag, $comparison);
    }

    /**
     * Filter the query on the OedtOrigItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtorigitem('fooValue');   // WHERE OedtOrigItem = 'fooValue'
     * $query->filterByOedtorigitem('%fooValue%', Criteria::LIKE); // WHERE OedtOrigItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtorigitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtorigitem($oedtorigitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtorigitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTORIGITEM, $oedtorigitem, $comparison);
    }

    /**
     * Filter the query on the OedtSubFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtsubflag('fooValue');   // WHERE OedtSubFlag = 'fooValue'
     * $query->filterByOedtsubflag('%fooValue%', Criteria::LIKE); // WHERE OedtSubFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtsubflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtsubflag($oedtsubflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtsubflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSUBFLAG, $oedtsubflag, $comparison);
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
     * @param     mixed $oedtediincomingseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtediincomingseq($oedtediincomingseq = null, $comparison = null)
    {
        if (is_array($oedtediincomingseq)) {
            $useMinMax = false;
            if (isset($oedtediincomingseq['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $oedtediincomingseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtediincomingseq['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $oedtediincomingseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $oedtediincomingseq, $comparison);
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
     * @param     mixed $oedtspordpoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtspordpoline($oedtspordpoline = null, $comparison = null)
    {
        if (is_array($oedtspordpoline)) {
            $useMinMax = false;
            if (isset($oedtspordpoline['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPORDPOLINE, $oedtspordpoline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtspordpoline['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPORDPOLINE, $oedtspordpoline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSPORDPOLINE, $oedtspordpoline, $comparison);
    }

    /**
     * Filter the query on the OedtCatlgId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcatlgid('fooValue');   // WHERE OedtCatlgId = 'fooValue'
     * $query->filterByOedtcatlgid('%fooValue%', Criteria::LIKE); // WHERE OedtCatlgId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcatlgid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcatlgid($oedtcatlgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcatlgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCATLGID, $oedtcatlgid, $comparison);
    }

    /**
     * Filter the query on the OedtDesignCd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtdesigncd('fooValue');   // WHERE OedtDesignCd = 'fooValue'
     * $query->filterByOedtdesigncd('%fooValue%', Criteria::LIKE); // WHERE OedtDesignCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtdesigncd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtdesigncd($oedtdesigncd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtdesigncd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTDESIGNCD, $oedtdesigncd, $comparison);
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
     * @param     mixed $oedtdiscpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtdiscpct($oedtdiscpct = null, $comparison = null)
    {
        if (is_array($oedtdiscpct)) {
            $useMinMax = false;
            if (isset($oedtdiscpct['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTDISCPCT, $oedtdiscpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtdiscpct['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTDISCPCT, $oedtdiscpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTDISCPCT, $oedtdiscpct, $comparison);
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
     * @param     mixed $oedttaxamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedttaxamt($oedttaxamt = null, $comparison = null)
    {
        if (is_array($oedttaxamt)) {
            $useMinMax = false;
            if (isset($oedttaxamt['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTTAXAMT, $oedttaxamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedttaxamt['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTTAXAMT, $oedttaxamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTTAXAMT, $oedttaxamt, $comparison);
    }

    /**
     * Filter the query on the OedtXUsage column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtxusage('fooValue');   // WHERE OedtXUsage = 'fooValue'
     * $query->filterByOedtxusage('%fooValue%', Criteria::LIKE); // WHERE OedtXUsage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtxusage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtxusage($oedtxusage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtxusage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTXUSAGE, $oedtxusage, $comparison);
    }

    /**
     * Filter the query on the OedtRqtsLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtrqtslock('fooValue');   // WHERE OedtRqtsLock = 'fooValue'
     * $query->filterByOedtrqtslock('%fooValue%', Criteria::LIKE); // WHERE OedtRqtsLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtrqtslock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtrqtslock($oedtrqtslock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtrqtslock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTRQTSLOCK, $oedtrqtslock, $comparison);
    }

    /**
     * Filter the query on the OedtFreshFrozen column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfreshfrozen('fooValue');   // WHERE OedtFreshFrozen = 'fooValue'
     * $query->filterByOedtfreshfrozen('%fooValue%', Criteria::LIKE); // WHERE OedtFreshFrozen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtfreshfrozen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtfreshfrozen($oedtfreshfrozen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtfreshfrozen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTFRESHFROZEN, $oedtfreshfrozen, $comparison);
    }

    /**
     * Filter the query on the OedtCoreFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcoreflag('fooValue');   // WHERE OedtCoreFlag = 'fooValue'
     * $query->filterByOedtcoreflag('%fooValue%', Criteria::LIKE); // WHERE OedtCoreFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcoreflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcoreflag($oedtcoreflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcoreflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOREFLAG, $oedtcoreflag, $comparison);
    }

    /**
     * Filter the query on the OedtNsSalesAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtnssalesacct('fooValue');   // WHERE OedtNsSalesAcct = 'fooValue'
     * $query->filterByOedtnssalesacct('%fooValue%', Criteria::LIKE); // WHERE OedtNsSalesAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtnssalesacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtnssalesacct($oedtnssalesacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtnssalesacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTNSSALESACCT, $oedtnssalesacct, $comparison);
    }

    /**
     * Filter the query on the OedtCertReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcertreqd('fooValue');   // WHERE OedtCertReqd = 'fooValue'
     * $query->filterByOedtcertreqd('%fooValue%', Criteria::LIKE); // WHERE OedtCertReqd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcertreqd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcertreqd($oedtcertreqd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcertreqd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCERTREQD, $oedtcertreqd, $comparison);
    }

    /**
     * Filter the query on the OedtAddOnSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtaddonsales('fooValue');   // WHERE OedtAddOnSales = 'fooValue'
     * $query->filterByOedtaddonsales('%fooValue%', Criteria::LIKE); // WHERE OedtAddOnSales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtaddonsales The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtaddonsales($oedtaddonsales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtaddonsales)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTADDONSALES, $oedtaddonsales, $comparison);
    }

    /**
     * Filter the query on the OedtBordFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtbordflag('fooValue');   // WHERE OedtBordFlag = 'fooValue'
     * $query->filterByOedtbordflag('%fooValue%', Criteria::LIKE); // WHERE OedtBordFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtbordflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtbordflag($oedtbordflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtbordflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTBORDFLAG, $oedtbordflag, $comparison);
    }

    /**
     * Filter the query on the OedtTempGrove column
     *
     * Example usage:
     * <code>
     * $query->filterByOedttempgrove('fooValue');   // WHERE OedtTempGrove = 'fooValue'
     * $query->filterByOedttempgrove('%fooValue%', Criteria::LIKE); // WHERE OedtTempGrove LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedttempgrove The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedttempgrove($oedttempgrove = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedttempgrove)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTTEMPGROVE, $oedttempgrove, $comparison);
    }

    /**
     * Filter the query on the OedtGroveDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtgrovedisc('fooValue');   // WHERE OedtGroveDisc = 'fooValue'
     * $query->filterByOedtgrovedisc('%fooValue%', Criteria::LIKE); // WHERE OedtGroveDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtgrovedisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtgrovedisc($oedtgrovedisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtgrovedisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTGROVEDISC, $oedtgrovedisc, $comparison);
    }

    /**
     * Filter the query on the OedtOffInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtoffinvc('fooValue');   // WHERE OedtOffInvc = 'fooValue'
     * $query->filterByOedtoffinvc('%fooValue%', Criteria::LIKE); // WHERE OedtOffInvc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtoffinvc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtoffinvc($oedtoffinvc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtoffinvc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTOFFINVC, $oedtoffinvc, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByInititemgrup($inititemgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_INITITEMGRUP, $inititemgrup, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the OedtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtacct('fooValue');   // WHERE OedtAcct = 'fooValue'
     * $query->filterByOedtacct('%fooValue%', Criteria::LIKE); // WHERE OedtAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtacct($oedtacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTACCT, $oedtacct, $comparison);
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
     * @param     mixed $oedtloadtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtloadtot($oedtloadtot = null, $comparison = null)
    {
        if (is_array($oedtloadtot)) {
            $useMinMax = false;
            if (isset($oedtloadtot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLOADTOT, $oedtloadtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtloadtot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTLOADTOT, $oedtloadtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLOADTOT, $oedtloadtot, $comparison);
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
     * @param     mixed $oedtpickedqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpickedqty($oedtpickedqty = null, $comparison = null)
    {
        if (is_array($oedtpickedqty)) {
            $useMinMax = false;
            if (isset($oedtpickedqty['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPICKEDQTY, $oedtpickedqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtpickedqty['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTPICKEDQTY, $oedtpickedqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPICKEDQTY, $oedtpickedqty, $comparison);
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
     * @param     mixed $oedtwiorigqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwiorigqty($oedtwiorigqty = null, $comparison = null)
    {
        if (is_array($oedtwiorigqty)) {
            $useMinMax = false;
            if (isset($oedtwiorigqty['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIORIGQTY, $oedtwiorigqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwiorigqty['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIORIGQTY, $oedtwiorigqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIORIGQTY, $oedtwiorigqty, $comparison);
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
     * @param     mixed $oedtmargintot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtmargintot($oedtmargintot = null, $comparison = null)
    {
        if (is_array($oedtmargintot)) {
            $useMinMax = false;
            if (isset($oedtmargintot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMARGINTOT, $oedtmargintot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtmargintot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTMARGINTOT, $oedtmargintot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTMARGINTOT, $oedtmargintot, $comparison);
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
     * @param     mixed $oedtcorecost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcorecost($oedtcorecost = null, $comparison = null)
    {
        if (is_array($oedtcorecost)) {
            $useMinMax = false;
            if (isset($oedtcorecost['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCORECOST, $oedtcorecost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcorecost['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCORECOST, $oedtcorecost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCORECOST, $oedtcorecost, $comparison);
    }

    /**
     * Filter the query on the OedtItemRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtitemref('fooValue');   // WHERE OedtItemRef = 'fooValue'
     * $query->filterByOedtitemref('%fooValue%', Criteria::LIKE); // WHERE OedtItemRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtitemref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtitemref($oedtitemref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtitemref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTITEMREF, $oedtitemref, $comparison);
    }

    /**
     * Filter the query on the OedtSac02ReturnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtsac02returncode('fooValue');   // WHERE OedtSac02ReturnCode = 'fooValue'
     * $query->filterByOedtsac02returncode('%fooValue%', Criteria::LIKE); // WHERE OedtSac02ReturnCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtsac02returncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtsac02returncode($oedtsac02returncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtsac02returncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSAC02RETURNCODE, $oedtsac02returncode, $comparison);
    }

    /**
     * Filter the query on the OedtWgTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwgtaxcode('fooValue');   // WHERE OedtWgTaxCode = 'fooValue'
     * $query->filterByOedtwgtaxcode('%fooValue%', Criteria::LIKE); // WHERE OedtWgTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtwgtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwgtaxcode($oedtwgtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtwgtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGTAXCODE, $oedtwgtaxcode, $comparison);
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
     * @param     mixed $oedtwgprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwgprice($oedtwgprice = null, $comparison = null)
    {
        if (is_array($oedtwgprice)) {
            $useMinMax = false;
            if (isset($oedtwgprice['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGPRICE, $oedtwgprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwgprice['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGPRICE, $oedtwgprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGPRICE, $oedtwgprice, $comparison);
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
     * @param     mixed $oedtwgtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwgtot($oedtwgtot = null, $comparison = null)
    {
        if (is_array($oedtwgtot)) {
            $useMinMax = false;
            if (isset($oedtwgtot['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGTOT, $oedtwgtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwgtot['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGTOT, $oedtwgtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWGTOT, $oedtwgtot, $comparison);
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
     * @param     mixed $oedtcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcntrqty($oedtcntrqty = null, $comparison = null)
    {
        if (is_array($oedtcntrqty)) {
            $useMinMax = false;
            if (isset($oedtcntrqty['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCNTRQTY, $oedtcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtcntrqty['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTCNTRQTY, $oedtcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCNTRQTY, $oedtcntrqty, $comparison);
    }

    /**
     * Filter the query on the OedtConfirmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtconfirmcode('fooValue');   // WHERE OedtConfirmCode = 'fooValue'
     * $query->filterByOedtconfirmcode('%fooValue%', Criteria::LIKE); // WHERE OedtConfirmCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtconfirmcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtconfirmcode($oedtconfirmcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtconfirmcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCONFIRMCODE, $oedtconfirmcode, $comparison);
    }

    /**
     * Filter the query on the OedtPicked column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtpicked('fooValue');   // WHERE OedtPicked = 'fooValue'
     * $query->filterByOedtpicked('%fooValue%', Criteria::LIKE); // WHERE OedtPicked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtpicked The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtpicked($oedtpicked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtpicked)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTPICKED, $oedtpicked, $comparison);
    }

    /**
     * Filter the query on the OedtOrigRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtorigrqstdate('fooValue');   // WHERE OedtOrigRqstDate = 'fooValue'
     * $query->filterByOedtorigrqstdate('%fooValue%', Criteria::LIKE); // WHERE OedtOrigRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtorigrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtorigrqstdate($oedtorigrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtorigrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTORIGRQSTDATE, $oedtorigrqstdate, $comparison);
    }

    /**
     * Filter the query on the OedtFabLock column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtfablock('fooValue');   // WHERE OedtFabLock = 'fooValue'
     * $query->filterByOedtfablock('%fooValue%', Criteria::LIKE); // WHERE OedtFabLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtfablock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtfablock($oedtfablock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtfablock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTFABLOCK, $oedtfablock, $comparison);
    }

    /**
     * Filter the query on the OedtLabelPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtlabelprinted('fooValue');   // WHERE OedtLabelPrinted = 'fooValue'
     * $query->filterByOedtlabelprinted('%fooValue%', Criteria::LIKE); // WHERE OedtLabelPrinted LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtlabelprinted The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtlabelprinted($oedtlabelprinted = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtlabelprinted)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTLABELPRINTED, $oedtlabelprinted, $comparison);
    }

    /**
     * Filter the query on the OedtQuoteId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtquoteid('fooValue');   // WHERE OedtQuoteId = 'fooValue'
     * $query->filterByOedtquoteid('%fooValue%', Criteria::LIKE); // WHERE OedtQuoteId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtquoteid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtquoteid($oedtquoteid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtquoteid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTQUOTEID, $oedtquoteid, $comparison);
    }

    /**
     * Filter the query on the OedtInvPrinted column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtinvprinted('fooValue');   // WHERE OedtInvPrinted = 'fooValue'
     * $query->filterByOedtinvprinted('%fooValue%', Criteria::LIKE); // WHERE OedtInvPrinted LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtinvprinted The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtinvprinted($oedtinvprinted = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtinvprinted)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTINVPRINTED, $oedtinvprinted, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtstockcheck($oedtstockcheck = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtstockcheck)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSTOCKCHECK, $oedtstockcheck, $comparison);
    }

    /**
     * Filter the query on the OedtShouldWeSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtshouldwesplit('fooValue');   // WHERE OedtShouldWeSplit = 'fooValue'
     * $query->filterByOedtshouldwesplit('%fooValue%', Criteria::LIKE); // WHERE OedtShouldWeSplit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtshouldwesplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtshouldwesplit($oedtshouldwesplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtshouldwesplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTSHOULDWESPLIT, $oedtshouldwesplit, $comparison);
    }

    /**
     * Filter the query on the OedtCofcReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcofcreqd('fooValue');   // WHERE OedtCofcReqd = 'fooValue'
     * $query->filterByOedtcofcreqd('%fooValue%', Criteria::LIKE); // WHERE OedtCofcReqd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcofcreqd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcofcreqd($oedtcofcreqd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcofcreqd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCOFCREQD, $oedtcofcreqd, $comparison);
    }

    /**
     * Filter the query on the OedtAckCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtackcode('fooValue');   // WHERE OedtAckCode = 'fooValue'
     * $query->filterByOedtackcode('%fooValue%', Criteria::LIKE); // WHERE OedtAckCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtackcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtackcode($oedtackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTACKCODE, $oedtackcode, $comparison);
    }

    /**
     * Filter the query on the OedtWiBordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwibordnbr('fooValue');   // WHERE OedtWiBordNbr = 'fooValue'
     * $query->filterByOedtwibordnbr('%fooValue%', Criteria::LIKE); // WHERE OedtWiBordNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtwibordnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwibordnbr($oedtwibordnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtwibordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBORDNBR, $oedtwibordnbr, $comparison);
    }

    /**
     * Filter the query on the OedtCertHistOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcerthistordr('fooValue');   // WHERE OedtCertHistOrdr = 'fooValue'
     * $query->filterByOedtcerthistordr('%fooValue%', Criteria::LIKE); // WHERE OedtCertHistOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcerthistordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcerthistordr($oedtcerthistordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcerthistordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCERTHISTORDR, $oedtcerthistordr, $comparison);
    }

    /**
     * Filter the query on the OedtCertHistLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtcerthistline('fooValue');   // WHERE OedtCertHistLine = 'fooValue'
     * $query->filterByOedtcerthistline('%fooValue%', Criteria::LIKE); // WHERE OedtCertHistLine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtcerthistline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtcerthistline($oedtcerthistline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtcerthistline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTCERTHISTLINE, $oedtcerthistline, $comparison);
    }

    /**
     * Filter the query on the OedtOrdrdAsItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtordrdasitemid('fooValue');   // WHERE OedtOrdrdAsItemId = 'fooValue'
     * $query->filterByOedtordrdasitemid('%fooValue%', Criteria::LIKE); // WHERE OedtOrdrdAsItemId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtordrdasitemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtordrdasitemid($oedtordrdasitemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtordrdasitemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTORDRDASITEMID, $oedtordrdasitemid, $comparison);
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
     * @param     mixed $oedtwibatch1nbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwibatch1nbr($oedtwibatch1nbr = null, $comparison = null)
    {
        if (is_array($oedtwibatch1nbr)) {
            $useMinMax = false;
            if (isset($oedtwibatch1nbr['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1NBR, $oedtwibatch1nbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwibatch1nbr['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1NBR, $oedtwibatch1nbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1NBR, $oedtwibatch1nbr, $comparison);
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
     * @param     mixed $oedtwibatch1qty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwibatch1qty($oedtwibatch1qty = null, $comparison = null)
    {
        if (is_array($oedtwibatch1qty)) {
            $useMinMax = false;
            if (isset($oedtwibatch1qty['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1QTY, $oedtwibatch1qty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtwibatch1qty['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1QTY, $oedtwibatch1qty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1QTY, $oedtwibatch1qty, $comparison);
    }

    /**
     * Filter the query on the OedtWiBatch1Stat column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtwibatch1stat('fooValue');   // WHERE OedtWiBatch1Stat = 'fooValue'
     * $query->filterByOedtwibatch1stat('%fooValue%', Criteria::LIKE); // WHERE OedtWiBatch1Stat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oedtwibatch1stat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtwibatch1stat($oedtwibatch1stat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oedtwibatch1stat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTWIBATCH1STAT, $oedtwibatch1stat, $comparison);
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
     * @param     mixed $oedtrganbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByOedtrganbr($oedtrganbr = null, $comparison = null)
    {
        if (is_array($oedtrganbr)) {
            $useMinMax = false;
            if (isset($oedtrganbr['min'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTRGANBR, $oedtrganbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtrganbr['max'])) {
                $this->addUsingAlias(SoDetailTableMap::COL_OEDTRGANBR, $oedtrganbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_OEDTRGANBR, $oedtrganbr, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSoDetail $soDetail Object to remove from the list of results
     *
     * @return $this|ChildSoDetailQuery The current query, for fluid interface
     */
    public function prune($soDetail = null)
    {
        if ($soDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SoDetailTableMap::COL_OEHDNBR), $soDetail->getOehdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SoDetailTableMap::COL_OEDTLINE), $soDetail->getOedtline(), Criteria::NOT_EQUAL);
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
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoDetailTableMap::clearInstancePool();
            SoDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoDetailQuery
