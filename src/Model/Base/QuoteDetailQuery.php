<?php

namespace Base;

use \QuoteDetail as ChildQuoteDetail;
use \QuoteDetailQuery as ChildQuoteDetailQuery;
use \Exception;
use \PDO;
use Map\QuoteDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `quote_detail` table.
 *
 * @method     ChildQuoteDetailQuery orderByQthdid($order = Criteria::ASC) Order by the QthdId column
 * @method     ChildQuoteDetailQuery orderByQtdtline($order = Criteria::ASC) Order by the QtdtLine column
 * @method     ChildQuoteDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildQuoteDetailQuery orderByQtdtdesc($order = Criteria::ASC) Order by the QtdtDesc column
 * @method     ChildQuoteDetailQuery orderByQtdtdesc2($order = Criteria::ASC) Order by the QtdtDesc2 column
 * @method     ChildQuoteDetailQuery orderByQtdtcustcrssref($order = Criteria::ASC) Order by the QtdtCustCrssRef column
 * @method     ChildQuoteDetailQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildQuoteDetailQuery orderByQtdtrqstdate($order = Criteria::ASC) Order by the QtdtRqstDate column
 * @method     ChildQuoteDetailQuery orderByQtdtspecordr($order = Criteria::ASC) Order by the QtdtSpecOrdr column
 * @method     ChildQuoteDetailQuery orderByArtbctaxcode($order = Criteria::ASC) Order by the ArtbCtaxCode column
 * @method     ChildQuoteDetailQuery orderByQtdtqtyord($order = Criteria::ASC) Order by the QtdtQtyOrd column
 * @method     ChildQuoteDetailQuery orderByQtdtpric($order = Criteria::ASC) Order by the QtdtPric column
 * @method     ChildQuoteDetailQuery orderByQtdtcost($order = Criteria::ASC) Order by the QtdtCost column
 * @method     ChildQuoteDetailQuery orderByQtdttaxpcttot($order = Criteria::ASC) Order by the QtdtTaxPctTot column
 * @method     ChildQuoteDetailQuery orderByQtdtprictot($order = Criteria::ASC) Order by the QtdtPricTot column
 * @method     ChildQuoteDetailQuery orderByQtdtcosttot($order = Criteria::ASC) Order by the QtdtCostTot column
 * @method     ChildQuoteDetailQuery orderByQtdtwghttot($order = Criteria::ASC) Order by the QtdtWghtTot column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode1($order = Criteria::ASC) Order by the QtdtMstrTaxCode1 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct1($order = Criteria::ASC) Order by the QtdtMstrTaxPct1 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode2($order = Criteria::ASC) Order by the QtdtMstrTaxCode2 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct2($order = Criteria::ASC) Order by the QtdtMstrTaxPct2 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode3($order = Criteria::ASC) Order by the QtdtMstrTaxCode3 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct3($order = Criteria::ASC) Order by the QtdtMstrTaxPct3 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode4($order = Criteria::ASC) Order by the QtdtMstrTaxCode4 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct4($order = Criteria::ASC) Order by the QtdtMstrTaxPct4 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode5($order = Criteria::ASC) Order by the QtdtMstrTaxCode5 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct5($order = Criteria::ASC) Order by the QtdtMstrTaxPct5 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode6($order = Criteria::ASC) Order by the QtdtMstrTaxCode6 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct6($order = Criteria::ASC) Order by the QtdtMstrTaxPct6 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode7($order = Criteria::ASC) Order by the QtdtMstrTaxCode7 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct7($order = Criteria::ASC) Order by the QtdtMstrTaxPct7 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode8($order = Criteria::ASC) Order by the QtdtMstrTaxCode8 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct8($order = Criteria::ASC) Order by the QtdtMstrTaxPct8 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxcode9($order = Criteria::ASC) Order by the QtdtMstrTaxCode9 column
 * @method     ChildQuoteDetailQuery orderByQtdtmstrtaxpct9($order = Criteria::ASC) Order by the QtdtMstrTaxPct9 column
 * @method     ChildQuoteDetailQuery orderByIntbuomsale($order = Criteria::ASC) Order by the IntbUomSale column
 * @method     ChildQuoteDetailQuery orderByIntbuompur($order = Criteria::ASC) Order by the IntbUomPur column
 * @method     ChildQuoteDetailQuery orderByQtdtquotind1($order = Criteria::ASC) Order by the QtdtQuotInd1 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotunit1($order = Criteria::ASC) Order by the QtdtQuotUnit1 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotpric1($order = Criteria::ASC) Order by the QtdtQuotPric1 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotcost1($order = Criteria::ASC) Order by the QtdtQuotCost1 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotmkupmarg1($order = Criteria::ASC) Order by the QtdtQuotMkupMarg1 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotind2($order = Criteria::ASC) Order by the QtdtQuotInd2 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotunit2($order = Criteria::ASC) Order by the QtdtQuotUnit2 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotpric2($order = Criteria::ASC) Order by the QtdtQuotPric2 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotcost2($order = Criteria::ASC) Order by the QtdtQuotCost2 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotmkupmarg2($order = Criteria::ASC) Order by the QtdtQuotMkupMarg2 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotind3($order = Criteria::ASC) Order by the QtdtQuotInd3 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotunit3($order = Criteria::ASC) Order by the QtdtQuotUnit3 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotpric3($order = Criteria::ASC) Order by the QtdtQuotPric3 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotcost3($order = Criteria::ASC) Order by the QtdtQuotCost3 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotmkupmarg3($order = Criteria::ASC) Order by the QtdtQuotMkupMarg3 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotind4($order = Criteria::ASC) Order by the QtdtQuotInd4 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotunit4($order = Criteria::ASC) Order by the QtdtQuotUnit4 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotpric4($order = Criteria::ASC) Order by the QtdtQuotPric4 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotcost4($order = Criteria::ASC) Order by the QtdtQuotCost4 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotmkupmarg4($order = Criteria::ASC) Order by the QtdtQuotMkupMarg4 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotind5($order = Criteria::ASC) Order by the QtdtQuotInd5 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotunit5($order = Criteria::ASC) Order by the QtdtQuotUnit5 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotpric5($order = Criteria::ASC) Order by the QtdtQuotPric5 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotcost5($order = Criteria::ASC) Order by the QtdtQuotCost5 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotmkupmarg5($order = Criteria::ASC) Order by the QtdtQuotMkupMarg5 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotind6($order = Criteria::ASC) Order by the QtdtQuotInd6 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotunit6($order = Criteria::ASC) Order by the QtdtQuotUnit6 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotpric6($order = Criteria::ASC) Order by the QtdtQuotPric6 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotcost6($order = Criteria::ASC) Order by the QtdtQuotCost6 column
 * @method     ChildQuoteDetailQuery orderByQtdtquotmkupmarg6($order = Criteria::ASC) Order by the QtdtQuotMkupMarg6 column
 * @method     ChildQuoteDetailQuery orderByQtdtasstcode($order = Criteria::ASC) Order by the QtdtAsstCode column
 * @method     ChildQuoteDetailQuery orderByQtdtasstqty($order = Criteria::ASC) Order by the QtdtAsstQty column
 * @method     ChildQuoteDetailQuery orderByQtdtlistpric($order = Criteria::ASC) Order by the QtdtListPric column
 * @method     ChildQuoteDetailQuery orderByQtdtstancost($order = Criteria::ASC) Order by the QtdtStanCost column
 * @method     ChildQuoteDetailQuery orderByQtdtvenditemjob($order = Criteria::ASC) Order by the QtdtVendItemJob column
 * @method     ChildQuoteDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildQuoteDetailQuery orderByQtdtnsitemgrup($order = Criteria::ASC) Order by the QtdtNsItemGrup column
 * @method     ChildQuoteDetailQuery orderByQtdtusecode($order = Criteria::ASC) Order by the QtdtUseCode column
 * @method     ChildQuoteDetailQuery orderByQtdtpickflag($order = Criteria::ASC) Order by the QtdtPickFlag column
 * @method     ChildQuoteDetailQuery orderByQtdtstatus($order = Criteria::ASC) Order by the QtdtStatus column
 * @method     ChildQuoteDetailQuery orderByOetblsslcode($order = Criteria::ASC) Order by the OetbLsslCode column
 * @method     ChildQuoteDetailQuery orderByQtdtlostdate($order = Criteria::ASC) Order by the QtdtLostDate column
 * @method     ChildQuoteDetailQuery orderByQtdtlostposted($order = Criteria::ASC) Order by the QtdtLostPosted column
 * @method     ChildQuoteDetailQuery orderByQtdtleaddays($order = Criteria::ASC) Order by the QtdtLeadDays column
 * @method     ChildQuoteDetailQuery orderByQtdtordrdiscpct($order = Criteria::ASC) Order by the QtdtOrdrDiscPct column
 * @method     ChildQuoteDetailQuery orderByQtdtquotdiscpct1($order = Criteria::ASC) Order by the QtdtQuotDiscPct1 column
 * @method     ChildQuoteDetailQuery orderByQtdtmtrcreqd($order = Criteria::ASC) Order by the QtdtMtrcReqd column
 * @method     ChildQuoteDetailQuery orderByQtdtcofcreqd($order = Criteria::ASC) Order by the QtdtCofcReqd column
 * @method     ChildQuoteDetailQuery orderByQtdtmnfrid($order = Criteria::ASC) Order by the QtdtMnfrId column
 * @method     ChildQuoteDetailQuery orderByQtdtmnfritemid($order = Criteria::ASC) Order by the QtdtMnfrItemId column
 * @method     ChildQuoteDetailQuery orderByQtdtlmordrnbr($order = Criteria::ASC) Order by the QtdtLmOrdrNbr column
 * @method     ChildQuoteDetailQuery orderByQtdtlmordrdate($order = Criteria::ASC) Order by the QtdtLmOrdrDate column
 * @method     ChildQuoteDetailQuery orderByQtdtspecitemcode($order = Criteria::ASC) Order by the QtdtSpecItemCode column
 * @method     ChildQuoteDetailQuery orderByQtdtacsalepgm($order = Criteria::ASC) Order by the QtdtAcSalePgm column
 * @method     ChildQuoteDetailQuery orderByQtdtnsvendshipfr($order = Criteria::ASC) Order by the QtdtNsVendShipfr column
 * @method     ChildQuoteDetailQuery orderByQtdtprntmnfrnote($order = Criteria::ASC) Order by the QtdtPrntMnfrNote column
 * @method     ChildQuoteDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildQuoteDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildQuoteDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildQuoteDetailQuery groupByQthdid() Group by the QthdId column
 * @method     ChildQuoteDetailQuery groupByQtdtline() Group by the QtdtLine column
 * @method     ChildQuoteDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildQuoteDetailQuery groupByQtdtdesc() Group by the QtdtDesc column
 * @method     ChildQuoteDetailQuery groupByQtdtdesc2() Group by the QtdtDesc2 column
 * @method     ChildQuoteDetailQuery groupByQtdtcustcrssref() Group by the QtdtCustCrssRef column
 * @method     ChildQuoteDetailQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildQuoteDetailQuery groupByQtdtrqstdate() Group by the QtdtRqstDate column
 * @method     ChildQuoteDetailQuery groupByQtdtspecordr() Group by the QtdtSpecOrdr column
 * @method     ChildQuoteDetailQuery groupByArtbctaxcode() Group by the ArtbCtaxCode column
 * @method     ChildQuoteDetailQuery groupByQtdtqtyord() Group by the QtdtQtyOrd column
 * @method     ChildQuoteDetailQuery groupByQtdtpric() Group by the QtdtPric column
 * @method     ChildQuoteDetailQuery groupByQtdtcost() Group by the QtdtCost column
 * @method     ChildQuoteDetailQuery groupByQtdttaxpcttot() Group by the QtdtTaxPctTot column
 * @method     ChildQuoteDetailQuery groupByQtdtprictot() Group by the QtdtPricTot column
 * @method     ChildQuoteDetailQuery groupByQtdtcosttot() Group by the QtdtCostTot column
 * @method     ChildQuoteDetailQuery groupByQtdtwghttot() Group by the QtdtWghtTot column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode1() Group by the QtdtMstrTaxCode1 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct1() Group by the QtdtMstrTaxPct1 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode2() Group by the QtdtMstrTaxCode2 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct2() Group by the QtdtMstrTaxPct2 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode3() Group by the QtdtMstrTaxCode3 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct3() Group by the QtdtMstrTaxPct3 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode4() Group by the QtdtMstrTaxCode4 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct4() Group by the QtdtMstrTaxPct4 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode5() Group by the QtdtMstrTaxCode5 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct5() Group by the QtdtMstrTaxPct5 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode6() Group by the QtdtMstrTaxCode6 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct6() Group by the QtdtMstrTaxPct6 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode7() Group by the QtdtMstrTaxCode7 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct7() Group by the QtdtMstrTaxPct7 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode8() Group by the QtdtMstrTaxCode8 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct8() Group by the QtdtMstrTaxPct8 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxcode9() Group by the QtdtMstrTaxCode9 column
 * @method     ChildQuoteDetailQuery groupByQtdtmstrtaxpct9() Group by the QtdtMstrTaxPct9 column
 * @method     ChildQuoteDetailQuery groupByIntbuomsale() Group by the IntbUomSale column
 * @method     ChildQuoteDetailQuery groupByIntbuompur() Group by the IntbUomPur column
 * @method     ChildQuoteDetailQuery groupByQtdtquotind1() Group by the QtdtQuotInd1 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotunit1() Group by the QtdtQuotUnit1 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotpric1() Group by the QtdtQuotPric1 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotcost1() Group by the QtdtQuotCost1 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotmkupmarg1() Group by the QtdtQuotMkupMarg1 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotind2() Group by the QtdtQuotInd2 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotunit2() Group by the QtdtQuotUnit2 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotpric2() Group by the QtdtQuotPric2 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotcost2() Group by the QtdtQuotCost2 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotmkupmarg2() Group by the QtdtQuotMkupMarg2 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotind3() Group by the QtdtQuotInd3 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotunit3() Group by the QtdtQuotUnit3 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotpric3() Group by the QtdtQuotPric3 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotcost3() Group by the QtdtQuotCost3 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotmkupmarg3() Group by the QtdtQuotMkupMarg3 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotind4() Group by the QtdtQuotInd4 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotunit4() Group by the QtdtQuotUnit4 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotpric4() Group by the QtdtQuotPric4 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotcost4() Group by the QtdtQuotCost4 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotmkupmarg4() Group by the QtdtQuotMkupMarg4 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotind5() Group by the QtdtQuotInd5 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotunit5() Group by the QtdtQuotUnit5 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotpric5() Group by the QtdtQuotPric5 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotcost5() Group by the QtdtQuotCost5 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotmkupmarg5() Group by the QtdtQuotMkupMarg5 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotind6() Group by the QtdtQuotInd6 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotunit6() Group by the QtdtQuotUnit6 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotpric6() Group by the QtdtQuotPric6 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotcost6() Group by the QtdtQuotCost6 column
 * @method     ChildQuoteDetailQuery groupByQtdtquotmkupmarg6() Group by the QtdtQuotMkupMarg6 column
 * @method     ChildQuoteDetailQuery groupByQtdtasstcode() Group by the QtdtAsstCode column
 * @method     ChildQuoteDetailQuery groupByQtdtasstqty() Group by the QtdtAsstQty column
 * @method     ChildQuoteDetailQuery groupByQtdtlistpric() Group by the QtdtListPric column
 * @method     ChildQuoteDetailQuery groupByQtdtstancost() Group by the QtdtStanCost column
 * @method     ChildQuoteDetailQuery groupByQtdtvenditemjob() Group by the QtdtVendItemJob column
 * @method     ChildQuoteDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildQuoteDetailQuery groupByQtdtnsitemgrup() Group by the QtdtNsItemGrup column
 * @method     ChildQuoteDetailQuery groupByQtdtusecode() Group by the QtdtUseCode column
 * @method     ChildQuoteDetailQuery groupByQtdtpickflag() Group by the QtdtPickFlag column
 * @method     ChildQuoteDetailQuery groupByQtdtstatus() Group by the QtdtStatus column
 * @method     ChildQuoteDetailQuery groupByOetblsslcode() Group by the OetbLsslCode column
 * @method     ChildQuoteDetailQuery groupByQtdtlostdate() Group by the QtdtLostDate column
 * @method     ChildQuoteDetailQuery groupByQtdtlostposted() Group by the QtdtLostPosted column
 * @method     ChildQuoteDetailQuery groupByQtdtleaddays() Group by the QtdtLeadDays column
 * @method     ChildQuoteDetailQuery groupByQtdtordrdiscpct() Group by the QtdtOrdrDiscPct column
 * @method     ChildQuoteDetailQuery groupByQtdtquotdiscpct1() Group by the QtdtQuotDiscPct1 column
 * @method     ChildQuoteDetailQuery groupByQtdtmtrcreqd() Group by the QtdtMtrcReqd column
 * @method     ChildQuoteDetailQuery groupByQtdtcofcreqd() Group by the QtdtCofcReqd column
 * @method     ChildQuoteDetailQuery groupByQtdtmnfrid() Group by the QtdtMnfrId column
 * @method     ChildQuoteDetailQuery groupByQtdtmnfritemid() Group by the QtdtMnfrItemId column
 * @method     ChildQuoteDetailQuery groupByQtdtlmordrnbr() Group by the QtdtLmOrdrNbr column
 * @method     ChildQuoteDetailQuery groupByQtdtlmordrdate() Group by the QtdtLmOrdrDate column
 * @method     ChildQuoteDetailQuery groupByQtdtspecitemcode() Group by the QtdtSpecItemCode column
 * @method     ChildQuoteDetailQuery groupByQtdtacsalepgm() Group by the QtdtAcSalePgm column
 * @method     ChildQuoteDetailQuery groupByQtdtnsvendshipfr() Group by the QtdtNsVendShipfr column
 * @method     ChildQuoteDetailQuery groupByQtdtprntmnfrnote() Group by the QtdtPrntMnfrNote column
 * @method     ChildQuoteDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildQuoteDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildQuoteDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildQuoteDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildQuoteDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildQuoteDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildQuoteDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildQuoteDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildQuoteDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildQuoteDetailQuery leftJoinQuote($relationAlias = null) Adds a LEFT JOIN clause to the query using the Quote relation
 * @method     ChildQuoteDetailQuery rightJoinQuote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Quote relation
 * @method     ChildQuoteDetailQuery innerJoinQuote($relationAlias = null) Adds a INNER JOIN clause to the query using the Quote relation
 *
 * @method     ChildQuoteDetailQuery joinWithQuote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Quote relation
 *
 * @method     ChildQuoteDetailQuery leftJoinWithQuote() Adds a LEFT JOIN clause and with to the query using the Quote relation
 * @method     ChildQuoteDetailQuery rightJoinWithQuote() Adds a RIGHT JOIN clause and with to the query using the Quote relation
 * @method     ChildQuoteDetailQuery innerJoinWithQuote() Adds a INNER JOIN clause and with to the query using the Quote relation
 *
 * @method     \QuoteQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildQuoteDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildQuoteDetail matching the query
 * @method     ChildQuoteDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildQuoteDetail matching the query, or a new ChildQuoteDetail object populated from the query conditions when no match is found
 *
 * @method     ChildQuoteDetail|null findOneByQthdid(string $QthdId) Return the first ChildQuoteDetail filtered by the QthdId column
 * @method     ChildQuoteDetail|null findOneByQtdtline(int $QtdtLine) Return the first ChildQuoteDetail filtered by the QtdtLine column
 * @method     ChildQuoteDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildQuoteDetail filtered by the InitItemNbr column
 * @method     ChildQuoteDetail|null findOneByQtdtdesc(string $QtdtDesc) Return the first ChildQuoteDetail filtered by the QtdtDesc column
 * @method     ChildQuoteDetail|null findOneByQtdtdesc2(string $QtdtDesc2) Return the first ChildQuoteDetail filtered by the QtdtDesc2 column
 * @method     ChildQuoteDetail|null findOneByQtdtcustcrssref(string $QtdtCustCrssRef) Return the first ChildQuoteDetail filtered by the QtdtCustCrssRef column
 * @method     ChildQuoteDetail|null findOneByIntbwhse(string $IntbWhse) Return the first ChildQuoteDetail filtered by the IntbWhse column
 * @method     ChildQuoteDetail|null findOneByQtdtrqstdate(string $QtdtRqstDate) Return the first ChildQuoteDetail filtered by the QtdtRqstDate column
 * @method     ChildQuoteDetail|null findOneByQtdtspecordr(string $QtdtSpecOrdr) Return the first ChildQuoteDetail filtered by the QtdtSpecOrdr column
 * @method     ChildQuoteDetail|null findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildQuoteDetail filtered by the ArtbCtaxCode column
 * @method     ChildQuoteDetail|null findOneByQtdtqtyord(string $QtdtQtyOrd) Return the first ChildQuoteDetail filtered by the QtdtQtyOrd column
 * @method     ChildQuoteDetail|null findOneByQtdtpric(string $QtdtPric) Return the first ChildQuoteDetail filtered by the QtdtPric column
 * @method     ChildQuoteDetail|null findOneByQtdtcost(string $QtdtCost) Return the first ChildQuoteDetail filtered by the QtdtCost column
 * @method     ChildQuoteDetail|null findOneByQtdttaxpcttot(string $QtdtTaxPctTot) Return the first ChildQuoteDetail filtered by the QtdtTaxPctTot column
 * @method     ChildQuoteDetail|null findOneByQtdtprictot(string $QtdtPricTot) Return the first ChildQuoteDetail filtered by the QtdtPricTot column
 * @method     ChildQuoteDetail|null findOneByQtdtcosttot(string $QtdtCostTot) Return the first ChildQuoteDetail filtered by the QtdtCostTot column
 * @method     ChildQuoteDetail|null findOneByQtdtwghttot(string $QtdtWghtTot) Return the first ChildQuoteDetail filtered by the QtdtWghtTot column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode1(string $QtdtMstrTaxCode1) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode1 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct1(string $QtdtMstrTaxPct1) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct1 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode2(string $QtdtMstrTaxCode2) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode2 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct2(string $QtdtMstrTaxPct2) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct2 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode3(string $QtdtMstrTaxCode3) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode3 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct3(string $QtdtMstrTaxPct3) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct3 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode4(string $QtdtMstrTaxCode4) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode4 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct4(string $QtdtMstrTaxPct4) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct4 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode5(string $QtdtMstrTaxCode5) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode5 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct5(string $QtdtMstrTaxPct5) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct5 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode6(string $QtdtMstrTaxCode6) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode6 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct6(string $QtdtMstrTaxPct6) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct6 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode7(string $QtdtMstrTaxCode7) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode7 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct7(string $QtdtMstrTaxPct7) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct7 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode8(string $QtdtMstrTaxCode8) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode8 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct8(string $QtdtMstrTaxPct8) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct8 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxcode9(string $QtdtMstrTaxCode9) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode9 column
 * @method     ChildQuoteDetail|null findOneByQtdtmstrtaxpct9(string $QtdtMstrTaxPct9) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct9 column
 * @method     ChildQuoteDetail|null findOneByIntbuomsale(string $IntbUomSale) Return the first ChildQuoteDetail filtered by the IntbUomSale column
 * @method     ChildQuoteDetail|null findOneByIntbuompur(string $IntbUomPur) Return the first ChildQuoteDetail filtered by the IntbUomPur column
 * @method     ChildQuoteDetail|null findOneByQtdtquotind1(string $QtdtQuotInd1) Return the first ChildQuoteDetail filtered by the QtdtQuotInd1 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotunit1(int $QtdtQuotUnit1) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit1 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotpric1(string $QtdtQuotPric1) Return the first ChildQuoteDetail filtered by the QtdtQuotPric1 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotcost1(string $QtdtQuotCost1) Return the first ChildQuoteDetail filtered by the QtdtQuotCost1 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotmkupmarg1(string $QtdtQuotMkupMarg1) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg1 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotind2(string $QtdtQuotInd2) Return the first ChildQuoteDetail filtered by the QtdtQuotInd2 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotunit2(int $QtdtQuotUnit2) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit2 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotpric2(string $QtdtQuotPric2) Return the first ChildQuoteDetail filtered by the QtdtQuotPric2 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotcost2(string $QtdtQuotCost2) Return the first ChildQuoteDetail filtered by the QtdtQuotCost2 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotmkupmarg2(string $QtdtQuotMkupMarg2) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg2 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotind3(string $QtdtQuotInd3) Return the first ChildQuoteDetail filtered by the QtdtQuotInd3 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotunit3(int $QtdtQuotUnit3) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit3 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotpric3(string $QtdtQuotPric3) Return the first ChildQuoteDetail filtered by the QtdtQuotPric3 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotcost3(string $QtdtQuotCost3) Return the first ChildQuoteDetail filtered by the QtdtQuotCost3 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotmkupmarg3(string $QtdtQuotMkupMarg3) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg3 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotind4(string $QtdtQuotInd4) Return the first ChildQuoteDetail filtered by the QtdtQuotInd4 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotunit4(int $QtdtQuotUnit4) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit4 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotpric4(string $QtdtQuotPric4) Return the first ChildQuoteDetail filtered by the QtdtQuotPric4 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotcost4(string $QtdtQuotCost4) Return the first ChildQuoteDetail filtered by the QtdtQuotCost4 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotmkupmarg4(string $QtdtQuotMkupMarg4) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg4 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotind5(string $QtdtQuotInd5) Return the first ChildQuoteDetail filtered by the QtdtQuotInd5 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotunit5(int $QtdtQuotUnit5) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit5 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotpric5(string $QtdtQuotPric5) Return the first ChildQuoteDetail filtered by the QtdtQuotPric5 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotcost5(string $QtdtQuotCost5) Return the first ChildQuoteDetail filtered by the QtdtQuotCost5 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotmkupmarg5(string $QtdtQuotMkupMarg5) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg5 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotind6(string $QtdtQuotInd6) Return the first ChildQuoteDetail filtered by the QtdtQuotInd6 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotunit6(int $QtdtQuotUnit6) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit6 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotpric6(string $QtdtQuotPric6) Return the first ChildQuoteDetail filtered by the QtdtQuotPric6 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotcost6(string $QtdtQuotCost6) Return the first ChildQuoteDetail filtered by the QtdtQuotCost6 column
 * @method     ChildQuoteDetail|null findOneByQtdtquotmkupmarg6(string $QtdtQuotMkupMarg6) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg6 column
 * @method     ChildQuoteDetail|null findOneByQtdtasstcode(string $QtdtAsstCode) Return the first ChildQuoteDetail filtered by the QtdtAsstCode column
 * @method     ChildQuoteDetail|null findOneByQtdtasstqty(string $QtdtAsstQty) Return the first ChildQuoteDetail filtered by the QtdtAsstQty column
 * @method     ChildQuoteDetail|null findOneByQtdtlistpric(string $QtdtListPric) Return the first ChildQuoteDetail filtered by the QtdtListPric column
 * @method     ChildQuoteDetail|null findOneByQtdtstancost(string $QtdtStanCost) Return the first ChildQuoteDetail filtered by the QtdtStanCost column
 * @method     ChildQuoteDetail|null findOneByQtdtvenditemjob(string $QtdtVendItemJob) Return the first ChildQuoteDetail filtered by the QtdtVendItemJob column
 * @method     ChildQuoteDetail|null findOneByApvevendid(string $ApveVendId) Return the first ChildQuoteDetail filtered by the ApveVendId column
 * @method     ChildQuoteDetail|null findOneByQtdtnsitemgrup(string $QtdtNsItemGrup) Return the first ChildQuoteDetail filtered by the QtdtNsItemGrup column
 * @method     ChildQuoteDetail|null findOneByQtdtusecode(string $QtdtUseCode) Return the first ChildQuoteDetail filtered by the QtdtUseCode column
 * @method     ChildQuoteDetail|null findOneByQtdtpickflag(string $QtdtPickFlag) Return the first ChildQuoteDetail filtered by the QtdtPickFlag column
 * @method     ChildQuoteDetail|null findOneByQtdtstatus(string $QtdtStatus) Return the first ChildQuoteDetail filtered by the QtdtStatus column
 * @method     ChildQuoteDetail|null findOneByOetblsslcode(string $OetbLsslCode) Return the first ChildQuoteDetail filtered by the OetbLsslCode column
 * @method     ChildQuoteDetail|null findOneByQtdtlostdate(string $QtdtLostDate) Return the first ChildQuoteDetail filtered by the QtdtLostDate column
 * @method     ChildQuoteDetail|null findOneByQtdtlostposted(string $QtdtLostPosted) Return the first ChildQuoteDetail filtered by the QtdtLostPosted column
 * @method     ChildQuoteDetail|null findOneByQtdtleaddays(int $QtdtLeadDays) Return the first ChildQuoteDetail filtered by the QtdtLeadDays column
 * @method     ChildQuoteDetail|null findOneByQtdtordrdiscpct(string $QtdtOrdrDiscPct) Return the first ChildQuoteDetail filtered by the QtdtOrdrDiscPct column
 * @method     ChildQuoteDetail|null findOneByQtdtquotdiscpct1(string $QtdtQuotDiscPct1) Return the first ChildQuoteDetail filtered by the QtdtQuotDiscPct1 column
 * @method     ChildQuoteDetail|null findOneByQtdtmtrcreqd(string $QtdtMtrcReqd) Return the first ChildQuoteDetail filtered by the QtdtMtrcReqd column
 * @method     ChildQuoteDetail|null findOneByQtdtcofcreqd(string $QtdtCofcReqd) Return the first ChildQuoteDetail filtered by the QtdtCofcReqd column
 * @method     ChildQuoteDetail|null findOneByQtdtmnfrid(string $QtdtMnfrId) Return the first ChildQuoteDetail filtered by the QtdtMnfrId column
 * @method     ChildQuoteDetail|null findOneByQtdtmnfritemid(string $QtdtMnfrItemId) Return the first ChildQuoteDetail filtered by the QtdtMnfrItemId column
 * @method     ChildQuoteDetail|null findOneByQtdtlmordrnbr(string $QtdtLmOrdrNbr) Return the first ChildQuoteDetail filtered by the QtdtLmOrdrNbr column
 * @method     ChildQuoteDetail|null findOneByQtdtlmordrdate(string $QtdtLmOrdrDate) Return the first ChildQuoteDetail filtered by the QtdtLmOrdrDate column
 * @method     ChildQuoteDetail|null findOneByQtdtspecitemcode(string $QtdtSpecItemCode) Return the first ChildQuoteDetail filtered by the QtdtSpecItemCode column
 * @method     ChildQuoteDetail|null findOneByQtdtacsalepgm(string $QtdtAcSalePgm) Return the first ChildQuoteDetail filtered by the QtdtAcSalePgm column
 * @method     ChildQuoteDetail|null findOneByQtdtnsvendshipfr(string $QtdtNsVendShipfr) Return the first ChildQuoteDetail filtered by the QtdtNsVendShipfr column
 * @method     ChildQuoteDetail|null findOneByQtdtprntmnfrnote(string $QtdtPrntMnfrNote) Return the first ChildQuoteDetail filtered by the QtdtPrntMnfrNote column
 * @method     ChildQuoteDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildQuoteDetail filtered by the DateUpdtd column
 * @method     ChildQuoteDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildQuoteDetail filtered by the TimeUpdtd column
 * @method     ChildQuoteDetail|null findOneByDummy(string $dummy) Return the first ChildQuoteDetail filtered by the dummy column
 *
 * @method     ChildQuoteDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildQuoteDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOne(?ConnectionInterface $con = null) Return the first ChildQuoteDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuoteDetail requireOneByQthdid(string $QthdId) Return the first ChildQuoteDetail filtered by the QthdId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtline(int $QtdtLine) Return the first ChildQuoteDetail filtered by the QtdtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildQuoteDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtdesc(string $QtdtDesc) Return the first ChildQuoteDetail filtered by the QtdtDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtdesc2(string $QtdtDesc2) Return the first ChildQuoteDetail filtered by the QtdtDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtcustcrssref(string $QtdtCustCrssRef) Return the first ChildQuoteDetail filtered by the QtdtCustCrssRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByIntbwhse(string $IntbWhse) Return the first ChildQuoteDetail filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtrqstdate(string $QtdtRqstDate) Return the first ChildQuoteDetail filtered by the QtdtRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtspecordr(string $QtdtSpecOrdr) Return the first ChildQuoteDetail filtered by the QtdtSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildQuoteDetail filtered by the ArtbCtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtqtyord(string $QtdtQtyOrd) Return the first ChildQuoteDetail filtered by the QtdtQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtpric(string $QtdtPric) Return the first ChildQuoteDetail filtered by the QtdtPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtcost(string $QtdtCost) Return the first ChildQuoteDetail filtered by the QtdtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdttaxpcttot(string $QtdtTaxPctTot) Return the first ChildQuoteDetail filtered by the QtdtTaxPctTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtprictot(string $QtdtPricTot) Return the first ChildQuoteDetail filtered by the QtdtPricTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtcosttot(string $QtdtCostTot) Return the first ChildQuoteDetail filtered by the QtdtCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtwghttot(string $QtdtWghtTot) Return the first ChildQuoteDetail filtered by the QtdtWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode1(string $QtdtMstrTaxCode1) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct1(string $QtdtMstrTaxPct1) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode2(string $QtdtMstrTaxCode2) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct2(string $QtdtMstrTaxPct2) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode3(string $QtdtMstrTaxCode3) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct3(string $QtdtMstrTaxPct3) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode4(string $QtdtMstrTaxCode4) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct4(string $QtdtMstrTaxPct4) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode5(string $QtdtMstrTaxCode5) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct5(string $QtdtMstrTaxPct5) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode6(string $QtdtMstrTaxCode6) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct6(string $QtdtMstrTaxPct6) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode7(string $QtdtMstrTaxCode7) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct7(string $QtdtMstrTaxPct7) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode8(string $QtdtMstrTaxCode8) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct8(string $QtdtMstrTaxPct8) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxcode9(string $QtdtMstrTaxCode9) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmstrtaxpct9(string $QtdtMstrTaxPct9) Return the first ChildQuoteDetail filtered by the QtdtMstrTaxPct9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByIntbuomsale(string $IntbUomSale) Return the first ChildQuoteDetail filtered by the IntbUomSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByIntbuompur(string $IntbUomPur) Return the first ChildQuoteDetail filtered by the IntbUomPur column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotind1(string $QtdtQuotInd1) Return the first ChildQuoteDetail filtered by the QtdtQuotInd1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotunit1(int $QtdtQuotUnit1) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotpric1(string $QtdtQuotPric1) Return the first ChildQuoteDetail filtered by the QtdtQuotPric1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotcost1(string $QtdtQuotCost1) Return the first ChildQuoteDetail filtered by the QtdtQuotCost1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotmkupmarg1(string $QtdtQuotMkupMarg1) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotind2(string $QtdtQuotInd2) Return the first ChildQuoteDetail filtered by the QtdtQuotInd2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotunit2(int $QtdtQuotUnit2) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotpric2(string $QtdtQuotPric2) Return the first ChildQuoteDetail filtered by the QtdtQuotPric2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotcost2(string $QtdtQuotCost2) Return the first ChildQuoteDetail filtered by the QtdtQuotCost2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotmkupmarg2(string $QtdtQuotMkupMarg2) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotind3(string $QtdtQuotInd3) Return the first ChildQuoteDetail filtered by the QtdtQuotInd3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotunit3(int $QtdtQuotUnit3) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotpric3(string $QtdtQuotPric3) Return the first ChildQuoteDetail filtered by the QtdtQuotPric3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotcost3(string $QtdtQuotCost3) Return the first ChildQuoteDetail filtered by the QtdtQuotCost3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotmkupmarg3(string $QtdtQuotMkupMarg3) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotind4(string $QtdtQuotInd4) Return the first ChildQuoteDetail filtered by the QtdtQuotInd4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotunit4(int $QtdtQuotUnit4) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotpric4(string $QtdtQuotPric4) Return the first ChildQuoteDetail filtered by the QtdtQuotPric4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotcost4(string $QtdtQuotCost4) Return the first ChildQuoteDetail filtered by the QtdtQuotCost4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotmkupmarg4(string $QtdtQuotMkupMarg4) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotind5(string $QtdtQuotInd5) Return the first ChildQuoteDetail filtered by the QtdtQuotInd5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotunit5(int $QtdtQuotUnit5) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotpric5(string $QtdtQuotPric5) Return the first ChildQuoteDetail filtered by the QtdtQuotPric5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotcost5(string $QtdtQuotCost5) Return the first ChildQuoteDetail filtered by the QtdtQuotCost5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotmkupmarg5(string $QtdtQuotMkupMarg5) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotind6(string $QtdtQuotInd6) Return the first ChildQuoteDetail filtered by the QtdtQuotInd6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotunit6(int $QtdtQuotUnit6) Return the first ChildQuoteDetail filtered by the QtdtQuotUnit6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotpric6(string $QtdtQuotPric6) Return the first ChildQuoteDetail filtered by the QtdtQuotPric6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotcost6(string $QtdtQuotCost6) Return the first ChildQuoteDetail filtered by the QtdtQuotCost6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotmkupmarg6(string $QtdtQuotMkupMarg6) Return the first ChildQuoteDetail filtered by the QtdtQuotMkupMarg6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtasstcode(string $QtdtAsstCode) Return the first ChildQuoteDetail filtered by the QtdtAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtasstqty(string $QtdtAsstQty) Return the first ChildQuoteDetail filtered by the QtdtAsstQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtlistpric(string $QtdtListPric) Return the first ChildQuoteDetail filtered by the QtdtListPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtstancost(string $QtdtStanCost) Return the first ChildQuoteDetail filtered by the QtdtStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtvenditemjob(string $QtdtVendItemJob) Return the first ChildQuoteDetail filtered by the QtdtVendItemJob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildQuoteDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtnsitemgrup(string $QtdtNsItemGrup) Return the first ChildQuoteDetail filtered by the QtdtNsItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtusecode(string $QtdtUseCode) Return the first ChildQuoteDetail filtered by the QtdtUseCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtpickflag(string $QtdtPickFlag) Return the first ChildQuoteDetail filtered by the QtdtPickFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtstatus(string $QtdtStatus) Return the first ChildQuoteDetail filtered by the QtdtStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByOetblsslcode(string $OetbLsslCode) Return the first ChildQuoteDetail filtered by the OetbLsslCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtlostdate(string $QtdtLostDate) Return the first ChildQuoteDetail filtered by the QtdtLostDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtlostposted(string $QtdtLostPosted) Return the first ChildQuoteDetail filtered by the QtdtLostPosted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtleaddays(int $QtdtLeadDays) Return the first ChildQuoteDetail filtered by the QtdtLeadDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtordrdiscpct(string $QtdtOrdrDiscPct) Return the first ChildQuoteDetail filtered by the QtdtOrdrDiscPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtquotdiscpct1(string $QtdtQuotDiscPct1) Return the first ChildQuoteDetail filtered by the QtdtQuotDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmtrcreqd(string $QtdtMtrcReqd) Return the first ChildQuoteDetail filtered by the QtdtMtrcReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtcofcreqd(string $QtdtCofcReqd) Return the first ChildQuoteDetail filtered by the QtdtCofcReqd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmnfrid(string $QtdtMnfrId) Return the first ChildQuoteDetail filtered by the QtdtMnfrId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtmnfritemid(string $QtdtMnfrItemId) Return the first ChildQuoteDetail filtered by the QtdtMnfrItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtlmordrnbr(string $QtdtLmOrdrNbr) Return the first ChildQuoteDetail filtered by the QtdtLmOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtlmordrdate(string $QtdtLmOrdrDate) Return the first ChildQuoteDetail filtered by the QtdtLmOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtspecitemcode(string $QtdtSpecItemCode) Return the first ChildQuoteDetail filtered by the QtdtSpecItemCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtacsalepgm(string $QtdtAcSalePgm) Return the first ChildQuoteDetail filtered by the QtdtAcSalePgm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtnsvendshipfr(string $QtdtNsVendShipfr) Return the first ChildQuoteDetail filtered by the QtdtNsVendShipfr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQtdtprntmnfrnote(string $QtdtPrntMnfrNote) Return the first ChildQuoteDetail filtered by the QtdtPrntMnfrNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildQuoteDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildQuoteDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDummy(string $dummy) Return the first ChildQuoteDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuoteDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildQuoteDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> find(?ConnectionInterface $con = null) Return ChildQuoteDetail objects based on current ModelCriteria
 *
 * @method     ChildQuoteDetail[]|Collection findByQthdid(string|array<string> $QthdId) Return ChildQuoteDetail objects filtered by the QthdId column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQthdid(string|array<string> $QthdId) Return ChildQuoteDetail objects filtered by the QthdId column
 * @method     ChildQuoteDetail[]|Collection findByQtdtline(int|array<int> $QtdtLine) Return ChildQuoteDetail objects filtered by the QtdtLine column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtline(int|array<int> $QtdtLine) Return ChildQuoteDetail objects filtered by the QtdtLine column
 * @method     ChildQuoteDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildQuoteDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildQuoteDetail objects filtered by the InitItemNbr column
 * @method     ChildQuoteDetail[]|Collection findByQtdtdesc(string|array<string> $QtdtDesc) Return ChildQuoteDetail objects filtered by the QtdtDesc column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtdesc(string|array<string> $QtdtDesc) Return ChildQuoteDetail objects filtered by the QtdtDesc column
 * @method     ChildQuoteDetail[]|Collection findByQtdtdesc2(string|array<string> $QtdtDesc2) Return ChildQuoteDetail objects filtered by the QtdtDesc2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtdesc2(string|array<string> $QtdtDesc2) Return ChildQuoteDetail objects filtered by the QtdtDesc2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtcustcrssref(string|array<string> $QtdtCustCrssRef) Return ChildQuoteDetail objects filtered by the QtdtCustCrssRef column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtcustcrssref(string|array<string> $QtdtCustCrssRef) Return ChildQuoteDetail objects filtered by the QtdtCustCrssRef column
 * @method     ChildQuoteDetail[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildQuoteDetail objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByIntbwhse(string|array<string> $IntbWhse) Return ChildQuoteDetail objects filtered by the IntbWhse column
 * @method     ChildQuoteDetail[]|Collection findByQtdtrqstdate(string|array<string> $QtdtRqstDate) Return ChildQuoteDetail objects filtered by the QtdtRqstDate column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtrqstdate(string|array<string> $QtdtRqstDate) Return ChildQuoteDetail objects filtered by the QtdtRqstDate column
 * @method     ChildQuoteDetail[]|Collection findByQtdtspecordr(string|array<string> $QtdtSpecOrdr) Return ChildQuoteDetail objects filtered by the QtdtSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtspecordr(string|array<string> $QtdtSpecOrdr) Return ChildQuoteDetail objects filtered by the QtdtSpecOrdr column
 * @method     ChildQuoteDetail[]|Collection findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildQuoteDetail objects filtered by the ArtbCtaxCode column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildQuoteDetail objects filtered by the ArtbCtaxCode column
 * @method     ChildQuoteDetail[]|Collection findByQtdtqtyord(string|array<string> $QtdtQtyOrd) Return ChildQuoteDetail objects filtered by the QtdtQtyOrd column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtqtyord(string|array<string> $QtdtQtyOrd) Return ChildQuoteDetail objects filtered by the QtdtQtyOrd column
 * @method     ChildQuoteDetail[]|Collection findByQtdtpric(string|array<string> $QtdtPric) Return ChildQuoteDetail objects filtered by the QtdtPric column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtpric(string|array<string> $QtdtPric) Return ChildQuoteDetail objects filtered by the QtdtPric column
 * @method     ChildQuoteDetail[]|Collection findByQtdtcost(string|array<string> $QtdtCost) Return ChildQuoteDetail objects filtered by the QtdtCost column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtcost(string|array<string> $QtdtCost) Return ChildQuoteDetail objects filtered by the QtdtCost column
 * @method     ChildQuoteDetail[]|Collection findByQtdttaxpcttot(string|array<string> $QtdtTaxPctTot) Return ChildQuoteDetail objects filtered by the QtdtTaxPctTot column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdttaxpcttot(string|array<string> $QtdtTaxPctTot) Return ChildQuoteDetail objects filtered by the QtdtTaxPctTot column
 * @method     ChildQuoteDetail[]|Collection findByQtdtprictot(string|array<string> $QtdtPricTot) Return ChildQuoteDetail objects filtered by the QtdtPricTot column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtprictot(string|array<string> $QtdtPricTot) Return ChildQuoteDetail objects filtered by the QtdtPricTot column
 * @method     ChildQuoteDetail[]|Collection findByQtdtcosttot(string|array<string> $QtdtCostTot) Return ChildQuoteDetail objects filtered by the QtdtCostTot column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtcosttot(string|array<string> $QtdtCostTot) Return ChildQuoteDetail objects filtered by the QtdtCostTot column
 * @method     ChildQuoteDetail[]|Collection findByQtdtwghttot(string|array<string> $QtdtWghtTot) Return ChildQuoteDetail objects filtered by the QtdtWghtTot column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtwghttot(string|array<string> $QtdtWghtTot) Return ChildQuoteDetail objects filtered by the QtdtWghtTot column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode1(string|array<string> $QtdtMstrTaxCode1) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode1(string|array<string> $QtdtMstrTaxCode1) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct1(string|array<string> $QtdtMstrTaxPct1) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct1(string|array<string> $QtdtMstrTaxPct1) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode2(string|array<string> $QtdtMstrTaxCode2) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode2(string|array<string> $QtdtMstrTaxCode2) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct2(string|array<string> $QtdtMstrTaxPct2) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct2(string|array<string> $QtdtMstrTaxPct2) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode3(string|array<string> $QtdtMstrTaxCode3) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode3(string|array<string> $QtdtMstrTaxCode3) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct3(string|array<string> $QtdtMstrTaxPct3) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct3(string|array<string> $QtdtMstrTaxPct3) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode4(string|array<string> $QtdtMstrTaxCode4) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode4(string|array<string> $QtdtMstrTaxCode4) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct4(string|array<string> $QtdtMstrTaxPct4) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct4(string|array<string> $QtdtMstrTaxPct4) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode5(string|array<string> $QtdtMstrTaxCode5) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode5(string|array<string> $QtdtMstrTaxCode5) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct5(string|array<string> $QtdtMstrTaxPct5) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct5(string|array<string> $QtdtMstrTaxPct5) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode6(string|array<string> $QtdtMstrTaxCode6) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode6(string|array<string> $QtdtMstrTaxCode6) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct6(string|array<string> $QtdtMstrTaxPct6) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct6(string|array<string> $QtdtMstrTaxPct6) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode7(string|array<string> $QtdtMstrTaxCode7) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode7 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode7(string|array<string> $QtdtMstrTaxCode7) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode7 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct7(string|array<string> $QtdtMstrTaxPct7) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct7 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct7(string|array<string> $QtdtMstrTaxPct7) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct7 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode8(string|array<string> $QtdtMstrTaxCode8) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode8 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode8(string|array<string> $QtdtMstrTaxCode8) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode8 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct8(string|array<string> $QtdtMstrTaxPct8) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct8 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct8(string|array<string> $QtdtMstrTaxPct8) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct8 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxcode9(string|array<string> $QtdtMstrTaxCode9) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode9 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxcode9(string|array<string> $QtdtMstrTaxCode9) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxCode9 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmstrtaxpct9(string|array<string> $QtdtMstrTaxPct9) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct9 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmstrtaxpct9(string|array<string> $QtdtMstrTaxPct9) Return ChildQuoteDetail objects filtered by the QtdtMstrTaxPct9 column
 * @method     ChildQuoteDetail[]|Collection findByIntbuomsale(string|array<string> $IntbUomSale) Return ChildQuoteDetail objects filtered by the IntbUomSale column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByIntbuomsale(string|array<string> $IntbUomSale) Return ChildQuoteDetail objects filtered by the IntbUomSale column
 * @method     ChildQuoteDetail[]|Collection findByIntbuompur(string|array<string> $IntbUomPur) Return ChildQuoteDetail objects filtered by the IntbUomPur column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByIntbuompur(string|array<string> $IntbUomPur) Return ChildQuoteDetail objects filtered by the IntbUomPur column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotind1(string|array<string> $QtdtQuotInd1) Return ChildQuoteDetail objects filtered by the QtdtQuotInd1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotind1(string|array<string> $QtdtQuotInd1) Return ChildQuoteDetail objects filtered by the QtdtQuotInd1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotunit1(int|array<int> $QtdtQuotUnit1) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotunit1(int|array<int> $QtdtQuotUnit1) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotpric1(string|array<string> $QtdtQuotPric1) Return ChildQuoteDetail objects filtered by the QtdtQuotPric1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotpric1(string|array<string> $QtdtQuotPric1) Return ChildQuoteDetail objects filtered by the QtdtQuotPric1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotcost1(string|array<string> $QtdtQuotCost1) Return ChildQuoteDetail objects filtered by the QtdtQuotCost1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotcost1(string|array<string> $QtdtQuotCost1) Return ChildQuoteDetail objects filtered by the QtdtQuotCost1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotmkupmarg1(string|array<string> $QtdtQuotMkupMarg1) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotmkupmarg1(string|array<string> $QtdtQuotMkupMarg1) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotind2(string|array<string> $QtdtQuotInd2) Return ChildQuoteDetail objects filtered by the QtdtQuotInd2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotind2(string|array<string> $QtdtQuotInd2) Return ChildQuoteDetail objects filtered by the QtdtQuotInd2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotunit2(int|array<int> $QtdtQuotUnit2) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotunit2(int|array<int> $QtdtQuotUnit2) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotpric2(string|array<string> $QtdtQuotPric2) Return ChildQuoteDetail objects filtered by the QtdtQuotPric2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotpric2(string|array<string> $QtdtQuotPric2) Return ChildQuoteDetail objects filtered by the QtdtQuotPric2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotcost2(string|array<string> $QtdtQuotCost2) Return ChildQuoteDetail objects filtered by the QtdtQuotCost2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotcost2(string|array<string> $QtdtQuotCost2) Return ChildQuoteDetail objects filtered by the QtdtQuotCost2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotmkupmarg2(string|array<string> $QtdtQuotMkupMarg2) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg2 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotmkupmarg2(string|array<string> $QtdtQuotMkupMarg2) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg2 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotind3(string|array<string> $QtdtQuotInd3) Return ChildQuoteDetail objects filtered by the QtdtQuotInd3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotind3(string|array<string> $QtdtQuotInd3) Return ChildQuoteDetail objects filtered by the QtdtQuotInd3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotunit3(int|array<int> $QtdtQuotUnit3) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotunit3(int|array<int> $QtdtQuotUnit3) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotpric3(string|array<string> $QtdtQuotPric3) Return ChildQuoteDetail objects filtered by the QtdtQuotPric3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotpric3(string|array<string> $QtdtQuotPric3) Return ChildQuoteDetail objects filtered by the QtdtQuotPric3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotcost3(string|array<string> $QtdtQuotCost3) Return ChildQuoteDetail objects filtered by the QtdtQuotCost3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotcost3(string|array<string> $QtdtQuotCost3) Return ChildQuoteDetail objects filtered by the QtdtQuotCost3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotmkupmarg3(string|array<string> $QtdtQuotMkupMarg3) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg3 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotmkupmarg3(string|array<string> $QtdtQuotMkupMarg3) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg3 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotind4(string|array<string> $QtdtQuotInd4) Return ChildQuoteDetail objects filtered by the QtdtQuotInd4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotind4(string|array<string> $QtdtQuotInd4) Return ChildQuoteDetail objects filtered by the QtdtQuotInd4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotunit4(int|array<int> $QtdtQuotUnit4) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotunit4(int|array<int> $QtdtQuotUnit4) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotpric4(string|array<string> $QtdtQuotPric4) Return ChildQuoteDetail objects filtered by the QtdtQuotPric4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotpric4(string|array<string> $QtdtQuotPric4) Return ChildQuoteDetail objects filtered by the QtdtQuotPric4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotcost4(string|array<string> $QtdtQuotCost4) Return ChildQuoteDetail objects filtered by the QtdtQuotCost4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotcost4(string|array<string> $QtdtQuotCost4) Return ChildQuoteDetail objects filtered by the QtdtQuotCost4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotmkupmarg4(string|array<string> $QtdtQuotMkupMarg4) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg4 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotmkupmarg4(string|array<string> $QtdtQuotMkupMarg4) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg4 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotind5(string|array<string> $QtdtQuotInd5) Return ChildQuoteDetail objects filtered by the QtdtQuotInd5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotind5(string|array<string> $QtdtQuotInd5) Return ChildQuoteDetail objects filtered by the QtdtQuotInd5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotunit5(int|array<int> $QtdtQuotUnit5) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotunit5(int|array<int> $QtdtQuotUnit5) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotpric5(string|array<string> $QtdtQuotPric5) Return ChildQuoteDetail objects filtered by the QtdtQuotPric5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotpric5(string|array<string> $QtdtQuotPric5) Return ChildQuoteDetail objects filtered by the QtdtQuotPric5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotcost5(string|array<string> $QtdtQuotCost5) Return ChildQuoteDetail objects filtered by the QtdtQuotCost5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotcost5(string|array<string> $QtdtQuotCost5) Return ChildQuoteDetail objects filtered by the QtdtQuotCost5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotmkupmarg5(string|array<string> $QtdtQuotMkupMarg5) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg5 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotmkupmarg5(string|array<string> $QtdtQuotMkupMarg5) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg5 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotind6(string|array<string> $QtdtQuotInd6) Return ChildQuoteDetail objects filtered by the QtdtQuotInd6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotind6(string|array<string> $QtdtQuotInd6) Return ChildQuoteDetail objects filtered by the QtdtQuotInd6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotunit6(int|array<int> $QtdtQuotUnit6) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotunit6(int|array<int> $QtdtQuotUnit6) Return ChildQuoteDetail objects filtered by the QtdtQuotUnit6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotpric6(string|array<string> $QtdtQuotPric6) Return ChildQuoteDetail objects filtered by the QtdtQuotPric6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotpric6(string|array<string> $QtdtQuotPric6) Return ChildQuoteDetail objects filtered by the QtdtQuotPric6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotcost6(string|array<string> $QtdtQuotCost6) Return ChildQuoteDetail objects filtered by the QtdtQuotCost6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotcost6(string|array<string> $QtdtQuotCost6) Return ChildQuoteDetail objects filtered by the QtdtQuotCost6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotmkupmarg6(string|array<string> $QtdtQuotMkupMarg6) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg6 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotmkupmarg6(string|array<string> $QtdtQuotMkupMarg6) Return ChildQuoteDetail objects filtered by the QtdtQuotMkupMarg6 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtasstcode(string|array<string> $QtdtAsstCode) Return ChildQuoteDetail objects filtered by the QtdtAsstCode column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtasstcode(string|array<string> $QtdtAsstCode) Return ChildQuoteDetail objects filtered by the QtdtAsstCode column
 * @method     ChildQuoteDetail[]|Collection findByQtdtasstqty(string|array<string> $QtdtAsstQty) Return ChildQuoteDetail objects filtered by the QtdtAsstQty column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtasstqty(string|array<string> $QtdtAsstQty) Return ChildQuoteDetail objects filtered by the QtdtAsstQty column
 * @method     ChildQuoteDetail[]|Collection findByQtdtlistpric(string|array<string> $QtdtListPric) Return ChildQuoteDetail objects filtered by the QtdtListPric column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtlistpric(string|array<string> $QtdtListPric) Return ChildQuoteDetail objects filtered by the QtdtListPric column
 * @method     ChildQuoteDetail[]|Collection findByQtdtstancost(string|array<string> $QtdtStanCost) Return ChildQuoteDetail objects filtered by the QtdtStanCost column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtstancost(string|array<string> $QtdtStanCost) Return ChildQuoteDetail objects filtered by the QtdtStanCost column
 * @method     ChildQuoteDetail[]|Collection findByQtdtvenditemjob(string|array<string> $QtdtVendItemJob) Return ChildQuoteDetail objects filtered by the QtdtVendItemJob column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtvenditemjob(string|array<string> $QtdtVendItemJob) Return ChildQuoteDetail objects filtered by the QtdtVendItemJob column
 * @method     ChildQuoteDetail[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildQuoteDetail objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByApvevendid(string|array<string> $ApveVendId) Return ChildQuoteDetail objects filtered by the ApveVendId column
 * @method     ChildQuoteDetail[]|Collection findByQtdtnsitemgrup(string|array<string> $QtdtNsItemGrup) Return ChildQuoteDetail objects filtered by the QtdtNsItemGrup column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtnsitemgrup(string|array<string> $QtdtNsItemGrup) Return ChildQuoteDetail objects filtered by the QtdtNsItemGrup column
 * @method     ChildQuoteDetail[]|Collection findByQtdtusecode(string|array<string> $QtdtUseCode) Return ChildQuoteDetail objects filtered by the QtdtUseCode column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtusecode(string|array<string> $QtdtUseCode) Return ChildQuoteDetail objects filtered by the QtdtUseCode column
 * @method     ChildQuoteDetail[]|Collection findByQtdtpickflag(string|array<string> $QtdtPickFlag) Return ChildQuoteDetail objects filtered by the QtdtPickFlag column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtpickflag(string|array<string> $QtdtPickFlag) Return ChildQuoteDetail objects filtered by the QtdtPickFlag column
 * @method     ChildQuoteDetail[]|Collection findByQtdtstatus(string|array<string> $QtdtStatus) Return ChildQuoteDetail objects filtered by the QtdtStatus column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtstatus(string|array<string> $QtdtStatus) Return ChildQuoteDetail objects filtered by the QtdtStatus column
 * @method     ChildQuoteDetail[]|Collection findByOetblsslcode(string|array<string> $OetbLsslCode) Return ChildQuoteDetail objects filtered by the OetbLsslCode column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByOetblsslcode(string|array<string> $OetbLsslCode) Return ChildQuoteDetail objects filtered by the OetbLsslCode column
 * @method     ChildQuoteDetail[]|Collection findByQtdtlostdate(string|array<string> $QtdtLostDate) Return ChildQuoteDetail objects filtered by the QtdtLostDate column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtlostdate(string|array<string> $QtdtLostDate) Return ChildQuoteDetail objects filtered by the QtdtLostDate column
 * @method     ChildQuoteDetail[]|Collection findByQtdtlostposted(string|array<string> $QtdtLostPosted) Return ChildQuoteDetail objects filtered by the QtdtLostPosted column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtlostposted(string|array<string> $QtdtLostPosted) Return ChildQuoteDetail objects filtered by the QtdtLostPosted column
 * @method     ChildQuoteDetail[]|Collection findByQtdtleaddays(int|array<int> $QtdtLeadDays) Return ChildQuoteDetail objects filtered by the QtdtLeadDays column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtleaddays(int|array<int> $QtdtLeadDays) Return ChildQuoteDetail objects filtered by the QtdtLeadDays column
 * @method     ChildQuoteDetail[]|Collection findByQtdtordrdiscpct(string|array<string> $QtdtOrdrDiscPct) Return ChildQuoteDetail objects filtered by the QtdtOrdrDiscPct column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtordrdiscpct(string|array<string> $QtdtOrdrDiscPct) Return ChildQuoteDetail objects filtered by the QtdtOrdrDiscPct column
 * @method     ChildQuoteDetail[]|Collection findByQtdtquotdiscpct1(string|array<string> $QtdtQuotDiscPct1) Return ChildQuoteDetail objects filtered by the QtdtQuotDiscPct1 column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtquotdiscpct1(string|array<string> $QtdtQuotDiscPct1) Return ChildQuoteDetail objects filtered by the QtdtQuotDiscPct1 column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmtrcreqd(string|array<string> $QtdtMtrcReqd) Return ChildQuoteDetail objects filtered by the QtdtMtrcReqd column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmtrcreqd(string|array<string> $QtdtMtrcReqd) Return ChildQuoteDetail objects filtered by the QtdtMtrcReqd column
 * @method     ChildQuoteDetail[]|Collection findByQtdtcofcreqd(string|array<string> $QtdtCofcReqd) Return ChildQuoteDetail objects filtered by the QtdtCofcReqd column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtcofcreqd(string|array<string> $QtdtCofcReqd) Return ChildQuoteDetail objects filtered by the QtdtCofcReqd column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmnfrid(string|array<string> $QtdtMnfrId) Return ChildQuoteDetail objects filtered by the QtdtMnfrId column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmnfrid(string|array<string> $QtdtMnfrId) Return ChildQuoteDetail objects filtered by the QtdtMnfrId column
 * @method     ChildQuoteDetail[]|Collection findByQtdtmnfritemid(string|array<string> $QtdtMnfrItemId) Return ChildQuoteDetail objects filtered by the QtdtMnfrItemId column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtmnfritemid(string|array<string> $QtdtMnfrItemId) Return ChildQuoteDetail objects filtered by the QtdtMnfrItemId column
 * @method     ChildQuoteDetail[]|Collection findByQtdtlmordrnbr(string|array<string> $QtdtLmOrdrNbr) Return ChildQuoteDetail objects filtered by the QtdtLmOrdrNbr column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtlmordrnbr(string|array<string> $QtdtLmOrdrNbr) Return ChildQuoteDetail objects filtered by the QtdtLmOrdrNbr column
 * @method     ChildQuoteDetail[]|Collection findByQtdtlmordrdate(string|array<string> $QtdtLmOrdrDate) Return ChildQuoteDetail objects filtered by the QtdtLmOrdrDate column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtlmordrdate(string|array<string> $QtdtLmOrdrDate) Return ChildQuoteDetail objects filtered by the QtdtLmOrdrDate column
 * @method     ChildQuoteDetail[]|Collection findByQtdtspecitemcode(string|array<string> $QtdtSpecItemCode) Return ChildQuoteDetail objects filtered by the QtdtSpecItemCode column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtspecitemcode(string|array<string> $QtdtSpecItemCode) Return ChildQuoteDetail objects filtered by the QtdtSpecItemCode column
 * @method     ChildQuoteDetail[]|Collection findByQtdtacsalepgm(string|array<string> $QtdtAcSalePgm) Return ChildQuoteDetail objects filtered by the QtdtAcSalePgm column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtacsalepgm(string|array<string> $QtdtAcSalePgm) Return ChildQuoteDetail objects filtered by the QtdtAcSalePgm column
 * @method     ChildQuoteDetail[]|Collection findByQtdtnsvendshipfr(string|array<string> $QtdtNsVendShipfr) Return ChildQuoteDetail objects filtered by the QtdtNsVendShipfr column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtnsvendshipfr(string|array<string> $QtdtNsVendShipfr) Return ChildQuoteDetail objects filtered by the QtdtNsVendShipfr column
 * @method     ChildQuoteDetail[]|Collection findByQtdtprntmnfrnote(string|array<string> $QtdtPrntMnfrNote) Return ChildQuoteDetail objects filtered by the QtdtPrntMnfrNote column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByQtdtprntmnfrnote(string|array<string> $QtdtPrntMnfrNote) Return ChildQuoteDetail objects filtered by the QtdtPrntMnfrNote column
 * @method     ChildQuoteDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildQuoteDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildQuoteDetail objects filtered by the DateUpdtd column
 * @method     ChildQuoteDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildQuoteDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildQuoteDetail objects filtered by the TimeUpdtd column
 * @method     ChildQuoteDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildQuoteDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildQuoteDetail> findByDummy(string|array<string> $dummy) Return ChildQuoteDetail objects filtered by the dummy column
 *
 * @method     ChildQuoteDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildQuoteDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class QuoteDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\QuoteDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\QuoteDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildQuoteDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildQuoteDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildQuoteDetailQuery) {
            return $criteria;
        }
        $query = new ChildQuoteDetailQuery();
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
     * @param array[$QthdId, $QtdtLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildQuoteDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = QuoteDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildQuoteDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QthdId, QtdtLine, InitItemNbr, QtdtDesc, QtdtDesc2, QtdtCustCrssRef, IntbWhse, QtdtRqstDate, QtdtSpecOrdr, ArtbCtaxCode, QtdtQtyOrd, QtdtPric, QtdtCost, QtdtTaxPctTot, QtdtPricTot, QtdtCostTot, QtdtWghtTot, QtdtMstrTaxCode1, QtdtMstrTaxPct1, QtdtMstrTaxCode2, QtdtMstrTaxPct2, QtdtMstrTaxCode3, QtdtMstrTaxPct3, QtdtMstrTaxCode4, QtdtMstrTaxPct4, QtdtMstrTaxCode5, QtdtMstrTaxPct5, QtdtMstrTaxCode6, QtdtMstrTaxPct6, QtdtMstrTaxCode7, QtdtMstrTaxPct7, QtdtMstrTaxCode8, QtdtMstrTaxPct8, QtdtMstrTaxCode9, QtdtMstrTaxPct9, IntbUomSale, IntbUomPur, QtdtQuotInd1, QtdtQuotUnit1, QtdtQuotPric1, QtdtQuotCost1, QtdtQuotMkupMarg1, QtdtQuotInd2, QtdtQuotUnit2, QtdtQuotPric2, QtdtQuotCost2, QtdtQuotMkupMarg2, QtdtQuotInd3, QtdtQuotUnit3, QtdtQuotPric3, QtdtQuotCost3, QtdtQuotMkupMarg3, QtdtQuotInd4, QtdtQuotUnit4, QtdtQuotPric4, QtdtQuotCost4, QtdtQuotMkupMarg4, QtdtQuotInd5, QtdtQuotUnit5, QtdtQuotPric5, QtdtQuotCost5, QtdtQuotMkupMarg5, QtdtQuotInd6, QtdtQuotUnit6, QtdtQuotPric6, QtdtQuotCost6, QtdtQuotMkupMarg6, QtdtAsstCode, QtdtAsstQty, QtdtListPric, QtdtStanCost, QtdtVendItemJob, ApveVendId, QtdtNsItemGrup, QtdtUseCode, QtdtPickFlag, QtdtStatus, OetbLsslCode, QtdtLostDate, QtdtLostPosted, QtdtLeadDays, QtdtOrdrDiscPct, QtdtQuotDiscPct1, QtdtMtrcReqd, QtdtCofcReqd, QtdtMnfrId, QtdtMnfrItemId, QtdtLmOrdrNbr, QtdtLmOrdrDate, QtdtSpecItemCode, QtdtAcSalePgm, QtdtNsVendShipfr, QtdtPrntMnfrNote, DateUpdtd, TimeUpdtd, dummy FROM quote_detail WHERE QthdId = :p0 AND QtdtLine = :p1';
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
            /** @var ChildQuoteDetail $obj */
            $obj = new ChildQuoteDetail();
            $obj->hydrate($row);
            QuoteDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildQuoteDetail|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(QuoteDetailTableMap::COL_QTHDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLINE, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(QuoteDetailTableMap::COL_QTHDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(QuoteDetailTableMap::COL_QTDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the QthdId column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdid('fooValue');   // WHERE QthdId = 'fooValue'
     * $query->filterByQthdid('%fooValue%', Criteria::LIKE); // WHERE QthdId LIKE '%fooValue%'
     * $query->filterByQthdid(['foo', 'bar']); // WHERE QthdId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qthdid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQthdid($qthdid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTHDID, $qthdid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtline(1234); // WHERE QtdtLine = 1234
     * $query->filterByQtdtline(array(12, 34)); // WHERE QtdtLine IN (12, 34)
     * $query->filterByQtdtline(array('min' => 12)); // WHERE QtdtLine > 12
     * </code>
     *
     * @param mixed $qtdtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtline($qtdtline = null, ?string $comparison = null)
    {
        if (is_array($qtdtline)) {
            $useMinMax = false;
            if (isset($qtdtline['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLINE, $qtdtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtline['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLINE, $qtdtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLINE, $qtdtline, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtdesc('fooValue');   // WHERE QtdtDesc = 'fooValue'
     * $query->filterByQtdtdesc('%fooValue%', Criteria::LIKE); // WHERE QtdtDesc LIKE '%fooValue%'
     * $query->filterByQtdtdesc(['foo', 'bar']); // WHERE QtdtDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtdesc($qtdtdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTDESC, $qtdtdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtdesc2('fooValue');   // WHERE QtdtDesc2 = 'fooValue'
     * $query->filterByQtdtdesc2('%fooValue%', Criteria::LIKE); // WHERE QtdtDesc2 LIKE '%fooValue%'
     * $query->filterByQtdtdesc2(['foo', 'bar']); // WHERE QtdtDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtdesc2($qtdtdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTDESC2, $qtdtdesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtCustCrssRef column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtcustcrssref('fooValue');   // WHERE QtdtCustCrssRef = 'fooValue'
     * $query->filterByQtdtcustcrssref('%fooValue%', Criteria::LIKE); // WHERE QtdtCustCrssRef LIKE '%fooValue%'
     * $query->filterByQtdtcustcrssref(['foo', 'bar']); // WHERE QtdtCustCrssRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtcustcrssref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtcustcrssref($qtdtcustcrssref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtcustcrssref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCUSTCRSSREF, $qtdtcustcrssref, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtrqstdate('fooValue');   // WHERE QtdtRqstDate = 'fooValue'
     * $query->filterByQtdtrqstdate('%fooValue%', Criteria::LIKE); // WHERE QtdtRqstDate LIKE '%fooValue%'
     * $query->filterByQtdtrqstdate(['foo', 'bar']); // WHERE QtdtRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtrqstdate($qtdtrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTRQSTDATE, $qtdtrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtspecordr('fooValue');   // WHERE QtdtSpecOrdr = 'fooValue'
     * $query->filterByQtdtspecordr('%fooValue%', Criteria::LIKE); // WHERE QtdtSpecOrdr LIKE '%fooValue%'
     * $query->filterByQtdtspecordr(['foo', 'bar']); // WHERE QtdtSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtspecordr($qtdtspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTSPECORDR, $qtdtspecordr, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQtyOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtqtyord(1234); // WHERE QtdtQtyOrd = 1234
     * $query->filterByQtdtqtyord(array(12, 34)); // WHERE QtdtQtyOrd IN (12, 34)
     * $query->filterByQtdtqtyord(array('min' => 12)); // WHERE QtdtQtyOrd > 12
     * </code>
     *
     * @param mixed $qtdtqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtqtyord($qtdtqtyord = null, ?string $comparison = null)
    {
        if (is_array($qtdtqtyord)) {
            $useMinMax = false;
            if (isset($qtdtqtyord['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQTYORD, $qtdtqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtqtyord['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQTYORD, $qtdtqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQTYORD, $qtdtqtyord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtPric column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtpric(1234); // WHERE QtdtPric = 1234
     * $query->filterByQtdtpric(array(12, 34)); // WHERE QtdtPric IN (12, 34)
     * $query->filterByQtdtpric(array('min' => 12)); // WHERE QtdtPric > 12
     * </code>
     *
     * @param mixed $qtdtpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtpric($qtdtpric = null, ?string $comparison = null)
    {
        if (is_array($qtdtpric)) {
            $useMinMax = false;
            if (isset($qtdtpric['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRIC, $qtdtpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtpric['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRIC, $qtdtpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRIC, $qtdtpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtcost(1234); // WHERE QtdtCost = 1234
     * $query->filterByQtdtcost(array(12, 34)); // WHERE QtdtCost IN (12, 34)
     * $query->filterByQtdtcost(array('min' => 12)); // WHERE QtdtCost > 12
     * </code>
     *
     * @param mixed $qtdtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtcost($qtdtcost = null, ?string $comparison = null)
    {
        if (is_array($qtdtcost)) {
            $useMinMax = false;
            if (isset($qtdtcost['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOST, $qtdtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtcost['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOST, $qtdtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOST, $qtdtcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtTaxPctTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdttaxpcttot(1234); // WHERE QtdtTaxPctTot = 1234
     * $query->filterByQtdttaxpcttot(array(12, 34)); // WHERE QtdtTaxPctTot IN (12, 34)
     * $query->filterByQtdttaxpcttot(array('min' => 12)); // WHERE QtdtTaxPctTot > 12
     * </code>
     *
     * @param mixed $qtdttaxpcttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdttaxpcttot($qtdttaxpcttot = null, ?string $comparison = null)
    {
        if (is_array($qtdttaxpcttot)) {
            $useMinMax = false;
            if (isset($qtdttaxpcttot['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTTAXPCTTOT, $qtdttaxpcttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdttaxpcttot['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTTAXPCTTOT, $qtdttaxpcttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTTAXPCTTOT, $qtdttaxpcttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtPricTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtprictot(1234); // WHERE QtdtPricTot = 1234
     * $query->filterByQtdtprictot(array(12, 34)); // WHERE QtdtPricTot IN (12, 34)
     * $query->filterByQtdtprictot(array('min' => 12)); // WHERE QtdtPricTot > 12
     * </code>
     *
     * @param mixed $qtdtprictot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtprictot($qtdtprictot = null, ?string $comparison = null)
    {
        if (is_array($qtdtprictot)) {
            $useMinMax = false;
            if (isset($qtdtprictot['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRICTOT, $qtdtprictot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtprictot['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRICTOT, $qtdtprictot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRICTOT, $qtdtprictot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtcosttot(1234); // WHERE QtdtCostTot = 1234
     * $query->filterByQtdtcosttot(array(12, 34)); // WHERE QtdtCostTot IN (12, 34)
     * $query->filterByQtdtcosttot(array('min' => 12)); // WHERE QtdtCostTot > 12
     * </code>
     *
     * @param mixed $qtdtcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtcosttot($qtdtcosttot = null, ?string $comparison = null)
    {
        if (is_array($qtdtcosttot)) {
            $useMinMax = false;
            if (isset($qtdtcosttot['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOSTTOT, $qtdtcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtcosttot['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOSTTOT, $qtdtcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOSTTOT, $qtdtcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtwghttot(1234); // WHERE QtdtWghtTot = 1234
     * $query->filterByQtdtwghttot(array(12, 34)); // WHERE QtdtWghtTot IN (12, 34)
     * $query->filterByQtdtwghttot(array('min' => 12)); // WHERE QtdtWghtTot > 12
     * </code>
     *
     * @param mixed $qtdtwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtwghttot($qtdtwghttot = null, ?string $comparison = null)
    {
        if (is_array($qtdtwghttot)) {
            $useMinMax = false;
            if (isset($qtdtwghttot['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTWGHTTOT, $qtdtwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtwghttot['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTWGHTTOT, $qtdtwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTWGHTTOT, $qtdtwghttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode1('fooValue');   // WHERE QtdtMstrTaxCode1 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode1('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode1 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode1(['foo', 'bar']); // WHERE QtdtMstrTaxCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode1($qtdtmstrtaxcode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1, $qtdtmstrtaxcode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct1(1234); // WHERE QtdtMstrTaxPct1 = 1234
     * $query->filterByQtdtmstrtaxpct1(array(12, 34)); // WHERE QtdtMstrTaxPct1 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct1(array('min' => 12)); // WHERE QtdtMstrTaxPct1 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct1($qtdtmstrtaxpct1 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct1)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct1['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1, $qtdtmstrtaxpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct1['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1, $qtdtmstrtaxpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1, $qtdtmstrtaxpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode2('fooValue');   // WHERE QtdtMstrTaxCode2 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode2('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode2 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode2(['foo', 'bar']); // WHERE QtdtMstrTaxCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode2($qtdtmstrtaxcode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2, $qtdtmstrtaxcode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct2(1234); // WHERE QtdtMstrTaxPct2 = 1234
     * $query->filterByQtdtmstrtaxpct2(array(12, 34)); // WHERE QtdtMstrTaxPct2 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct2(array('min' => 12)); // WHERE QtdtMstrTaxPct2 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct2($qtdtmstrtaxpct2 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct2)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct2['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2, $qtdtmstrtaxpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct2['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2, $qtdtmstrtaxpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2, $qtdtmstrtaxpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode3('fooValue');   // WHERE QtdtMstrTaxCode3 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode3('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode3 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode3(['foo', 'bar']); // WHERE QtdtMstrTaxCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode3($qtdtmstrtaxcode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3, $qtdtmstrtaxcode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct3(1234); // WHERE QtdtMstrTaxPct3 = 1234
     * $query->filterByQtdtmstrtaxpct3(array(12, 34)); // WHERE QtdtMstrTaxPct3 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct3(array('min' => 12)); // WHERE QtdtMstrTaxPct3 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct3($qtdtmstrtaxpct3 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct3)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct3['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3, $qtdtmstrtaxpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct3['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3, $qtdtmstrtaxpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3, $qtdtmstrtaxpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode4('fooValue');   // WHERE QtdtMstrTaxCode4 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode4('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode4 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode4(['foo', 'bar']); // WHERE QtdtMstrTaxCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode4($qtdtmstrtaxcode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4, $qtdtmstrtaxcode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct4(1234); // WHERE QtdtMstrTaxPct4 = 1234
     * $query->filterByQtdtmstrtaxpct4(array(12, 34)); // WHERE QtdtMstrTaxPct4 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct4(array('min' => 12)); // WHERE QtdtMstrTaxPct4 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct4($qtdtmstrtaxpct4 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct4)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct4['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4, $qtdtmstrtaxpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct4['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4, $qtdtmstrtaxpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4, $qtdtmstrtaxpct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode5('fooValue');   // WHERE QtdtMstrTaxCode5 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode5('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode5 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode5(['foo', 'bar']); // WHERE QtdtMstrTaxCode5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode5($qtdtmstrtaxcode5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5, $qtdtmstrtaxcode5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct5(1234); // WHERE QtdtMstrTaxPct5 = 1234
     * $query->filterByQtdtmstrtaxpct5(array(12, 34)); // WHERE QtdtMstrTaxPct5 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct5(array('min' => 12)); // WHERE QtdtMstrTaxPct5 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct5($qtdtmstrtaxpct5 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct5)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct5['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5, $qtdtmstrtaxpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct5['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5, $qtdtmstrtaxpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5, $qtdtmstrtaxpct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode6('fooValue');   // WHERE QtdtMstrTaxCode6 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode6('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode6 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode6(['foo', 'bar']); // WHERE QtdtMstrTaxCode6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode6($qtdtmstrtaxcode6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6, $qtdtmstrtaxcode6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct6(1234); // WHERE QtdtMstrTaxPct6 = 1234
     * $query->filterByQtdtmstrtaxpct6(array(12, 34)); // WHERE QtdtMstrTaxPct6 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct6(array('min' => 12)); // WHERE QtdtMstrTaxPct6 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct6($qtdtmstrtaxpct6 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct6)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct6['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6, $qtdtmstrtaxpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct6['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6, $qtdtmstrtaxpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6, $qtdtmstrtaxpct6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode7('fooValue');   // WHERE QtdtMstrTaxCode7 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode7('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode7 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode7(['foo', 'bar']); // WHERE QtdtMstrTaxCode7 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode7 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode7($qtdtmstrtaxcode7 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7, $qtdtmstrtaxcode7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct7 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct7(1234); // WHERE QtdtMstrTaxPct7 = 1234
     * $query->filterByQtdtmstrtaxpct7(array(12, 34)); // WHERE QtdtMstrTaxPct7 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct7(array('min' => 12)); // WHERE QtdtMstrTaxPct7 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct7($qtdtmstrtaxpct7 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct7)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct7['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7, $qtdtmstrtaxpct7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct7['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7, $qtdtmstrtaxpct7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7, $qtdtmstrtaxpct7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode8('fooValue');   // WHERE QtdtMstrTaxCode8 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode8('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode8 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode8(['foo', 'bar']); // WHERE QtdtMstrTaxCode8 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode8 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode8($qtdtmstrtaxcode8 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8, $qtdtmstrtaxcode8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct8 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct8(1234); // WHERE QtdtMstrTaxPct8 = 1234
     * $query->filterByQtdtmstrtaxpct8(array(12, 34)); // WHERE QtdtMstrTaxPct8 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct8(array('min' => 12)); // WHERE QtdtMstrTaxPct8 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct8($qtdtmstrtaxpct8 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct8)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct8['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8, $qtdtmstrtaxpct8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct8['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8, $qtdtmstrtaxpct8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8, $qtdtmstrtaxpct8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxcode9('fooValue');   // WHERE QtdtMstrTaxCode9 = 'fooValue'
     * $query->filterByQtdtmstrtaxcode9('%fooValue%', Criteria::LIKE); // WHERE QtdtMstrTaxCode9 LIKE '%fooValue%'
     * $query->filterByQtdtmstrtaxcode9(['foo', 'bar']); // WHERE QtdtMstrTaxCode9 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmstrtaxcode9 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxcode9($qtdtmstrtaxcode9 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmstrtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9, $qtdtmstrtaxcode9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMstrTaxPct9 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmstrtaxpct9(1234); // WHERE QtdtMstrTaxPct9 = 1234
     * $query->filterByQtdtmstrtaxpct9(array(12, 34)); // WHERE QtdtMstrTaxPct9 IN (12, 34)
     * $query->filterByQtdtmstrtaxpct9(array('min' => 12)); // WHERE QtdtMstrTaxPct9 > 12
     * </code>
     *
     * @param mixed $qtdtmstrtaxpct9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmstrtaxpct9($qtdtmstrtaxpct9 = null, ?string $comparison = null)
    {
        if (is_array($qtdtmstrtaxpct9)) {
            $useMinMax = false;
            if (isset($qtdtmstrtaxpct9['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9, $qtdtmstrtaxpct9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtmstrtaxpct9['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9, $qtdtmstrtaxpct9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9, $qtdtmstrtaxpct9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomSale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomsale('fooValue');   // WHERE IntbUomSale = 'fooValue'
     * $query->filterByIntbuomsale('%fooValue%', Criteria::LIKE); // WHERE IntbUomSale LIKE '%fooValue%'
     * $query->filterByIntbuomsale(['foo', 'bar']); // WHERE IntbUomSale IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuomsale The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomPur column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompur('fooValue');   // WHERE IntbUomPur = 'fooValue'
     * $query->filterByIntbuompur('%fooValue%', Criteria::LIKE); // WHERE IntbUomPur LIKE '%fooValue%'
     * $query->filterByIntbuompur(['foo', 'bar']); // WHERE IntbUomPur IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuompur The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotInd1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotind1('fooValue');   // WHERE QtdtQuotInd1 = 'fooValue'
     * $query->filterByQtdtquotind1('%fooValue%', Criteria::LIKE); // WHERE QtdtQuotInd1 LIKE '%fooValue%'
     * $query->filterByQtdtquotind1(['foo', 'bar']); // WHERE QtdtQuotInd1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtquotind1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotind1($qtdtquotind1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtquotind1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTIND1, $qtdtquotind1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotUnit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotunit1(1234); // WHERE QtdtQuotUnit1 = 1234
     * $query->filterByQtdtquotunit1(array(12, 34)); // WHERE QtdtQuotUnit1 IN (12, 34)
     * $query->filterByQtdtquotunit1(array('min' => 12)); // WHERE QtdtQuotUnit1 > 12
     * </code>
     *
     * @param mixed $qtdtquotunit1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotunit1($qtdtquotunit1 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotunit1)) {
            $useMinMax = false;
            if (isset($qtdtquotunit1['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT1, $qtdtquotunit1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotunit1['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT1, $qtdtquotunit1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT1, $qtdtquotunit1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotPric1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotpric1(1234); // WHERE QtdtQuotPric1 = 1234
     * $query->filterByQtdtquotpric1(array(12, 34)); // WHERE QtdtQuotPric1 IN (12, 34)
     * $query->filterByQtdtquotpric1(array('min' => 12)); // WHERE QtdtQuotPric1 > 12
     * </code>
     *
     * @param mixed $qtdtquotpric1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotpric1($qtdtquotpric1 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotpric1)) {
            $useMinMax = false;
            if (isset($qtdtquotpric1['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC1, $qtdtquotpric1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotpric1['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC1, $qtdtquotpric1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC1, $qtdtquotpric1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotCost1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotcost1(1234); // WHERE QtdtQuotCost1 = 1234
     * $query->filterByQtdtquotcost1(array(12, 34)); // WHERE QtdtQuotCost1 IN (12, 34)
     * $query->filterByQtdtquotcost1(array('min' => 12)); // WHERE QtdtQuotCost1 > 12
     * </code>
     *
     * @param mixed $qtdtquotcost1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotcost1($qtdtquotcost1 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotcost1)) {
            $useMinMax = false;
            if (isset($qtdtquotcost1['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST1, $qtdtquotcost1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotcost1['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST1, $qtdtquotcost1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST1, $qtdtquotcost1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotMkupMarg1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotmkupmarg1(1234); // WHERE QtdtQuotMkupMarg1 = 1234
     * $query->filterByQtdtquotmkupmarg1(array(12, 34)); // WHERE QtdtQuotMkupMarg1 IN (12, 34)
     * $query->filterByQtdtquotmkupmarg1(array('min' => 12)); // WHERE QtdtQuotMkupMarg1 > 12
     * </code>
     *
     * @param mixed $qtdtquotmkupmarg1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotmkupmarg1($qtdtquotmkupmarg1 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotmkupmarg1)) {
            $useMinMax = false;
            if (isset($qtdtquotmkupmarg1['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1, $qtdtquotmkupmarg1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotmkupmarg1['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1, $qtdtquotmkupmarg1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1, $qtdtquotmkupmarg1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotInd2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotind2('fooValue');   // WHERE QtdtQuotInd2 = 'fooValue'
     * $query->filterByQtdtquotind2('%fooValue%', Criteria::LIKE); // WHERE QtdtQuotInd2 LIKE '%fooValue%'
     * $query->filterByQtdtquotind2(['foo', 'bar']); // WHERE QtdtQuotInd2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtquotind2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotind2($qtdtquotind2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtquotind2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTIND2, $qtdtquotind2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotUnit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotunit2(1234); // WHERE QtdtQuotUnit2 = 1234
     * $query->filterByQtdtquotunit2(array(12, 34)); // WHERE QtdtQuotUnit2 IN (12, 34)
     * $query->filterByQtdtquotunit2(array('min' => 12)); // WHERE QtdtQuotUnit2 > 12
     * </code>
     *
     * @param mixed $qtdtquotunit2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotunit2($qtdtquotunit2 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotunit2)) {
            $useMinMax = false;
            if (isset($qtdtquotunit2['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT2, $qtdtquotunit2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotunit2['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT2, $qtdtquotunit2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT2, $qtdtquotunit2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotPric2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotpric2(1234); // WHERE QtdtQuotPric2 = 1234
     * $query->filterByQtdtquotpric2(array(12, 34)); // WHERE QtdtQuotPric2 IN (12, 34)
     * $query->filterByQtdtquotpric2(array('min' => 12)); // WHERE QtdtQuotPric2 > 12
     * </code>
     *
     * @param mixed $qtdtquotpric2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotpric2($qtdtquotpric2 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotpric2)) {
            $useMinMax = false;
            if (isset($qtdtquotpric2['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC2, $qtdtquotpric2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotpric2['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC2, $qtdtquotpric2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC2, $qtdtquotpric2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotCost2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotcost2(1234); // WHERE QtdtQuotCost2 = 1234
     * $query->filterByQtdtquotcost2(array(12, 34)); // WHERE QtdtQuotCost2 IN (12, 34)
     * $query->filterByQtdtquotcost2(array('min' => 12)); // WHERE QtdtQuotCost2 > 12
     * </code>
     *
     * @param mixed $qtdtquotcost2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotcost2($qtdtquotcost2 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotcost2)) {
            $useMinMax = false;
            if (isset($qtdtquotcost2['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST2, $qtdtquotcost2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotcost2['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST2, $qtdtquotcost2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST2, $qtdtquotcost2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotMkupMarg2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotmkupmarg2(1234); // WHERE QtdtQuotMkupMarg2 = 1234
     * $query->filterByQtdtquotmkupmarg2(array(12, 34)); // WHERE QtdtQuotMkupMarg2 IN (12, 34)
     * $query->filterByQtdtquotmkupmarg2(array('min' => 12)); // WHERE QtdtQuotMkupMarg2 > 12
     * </code>
     *
     * @param mixed $qtdtquotmkupmarg2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotmkupmarg2($qtdtquotmkupmarg2 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotmkupmarg2)) {
            $useMinMax = false;
            if (isset($qtdtquotmkupmarg2['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2, $qtdtquotmkupmarg2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotmkupmarg2['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2, $qtdtquotmkupmarg2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2, $qtdtquotmkupmarg2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotInd3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotind3('fooValue');   // WHERE QtdtQuotInd3 = 'fooValue'
     * $query->filterByQtdtquotind3('%fooValue%', Criteria::LIKE); // WHERE QtdtQuotInd3 LIKE '%fooValue%'
     * $query->filterByQtdtquotind3(['foo', 'bar']); // WHERE QtdtQuotInd3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtquotind3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotind3($qtdtquotind3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtquotind3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTIND3, $qtdtquotind3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotUnit3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotunit3(1234); // WHERE QtdtQuotUnit3 = 1234
     * $query->filterByQtdtquotunit3(array(12, 34)); // WHERE QtdtQuotUnit3 IN (12, 34)
     * $query->filterByQtdtquotunit3(array('min' => 12)); // WHERE QtdtQuotUnit3 > 12
     * </code>
     *
     * @param mixed $qtdtquotunit3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotunit3($qtdtquotunit3 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotunit3)) {
            $useMinMax = false;
            if (isset($qtdtquotunit3['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT3, $qtdtquotunit3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotunit3['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT3, $qtdtquotunit3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT3, $qtdtquotunit3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotPric3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotpric3(1234); // WHERE QtdtQuotPric3 = 1234
     * $query->filterByQtdtquotpric3(array(12, 34)); // WHERE QtdtQuotPric3 IN (12, 34)
     * $query->filterByQtdtquotpric3(array('min' => 12)); // WHERE QtdtQuotPric3 > 12
     * </code>
     *
     * @param mixed $qtdtquotpric3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotpric3($qtdtquotpric3 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotpric3)) {
            $useMinMax = false;
            if (isset($qtdtquotpric3['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC3, $qtdtquotpric3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotpric3['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC3, $qtdtquotpric3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC3, $qtdtquotpric3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotCost3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotcost3(1234); // WHERE QtdtQuotCost3 = 1234
     * $query->filterByQtdtquotcost3(array(12, 34)); // WHERE QtdtQuotCost3 IN (12, 34)
     * $query->filterByQtdtquotcost3(array('min' => 12)); // WHERE QtdtQuotCost3 > 12
     * </code>
     *
     * @param mixed $qtdtquotcost3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotcost3($qtdtquotcost3 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotcost3)) {
            $useMinMax = false;
            if (isset($qtdtquotcost3['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST3, $qtdtquotcost3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotcost3['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST3, $qtdtquotcost3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST3, $qtdtquotcost3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotMkupMarg3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotmkupmarg3(1234); // WHERE QtdtQuotMkupMarg3 = 1234
     * $query->filterByQtdtquotmkupmarg3(array(12, 34)); // WHERE QtdtQuotMkupMarg3 IN (12, 34)
     * $query->filterByQtdtquotmkupmarg3(array('min' => 12)); // WHERE QtdtQuotMkupMarg3 > 12
     * </code>
     *
     * @param mixed $qtdtquotmkupmarg3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotmkupmarg3($qtdtquotmkupmarg3 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotmkupmarg3)) {
            $useMinMax = false;
            if (isset($qtdtquotmkupmarg3['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3, $qtdtquotmkupmarg3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotmkupmarg3['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3, $qtdtquotmkupmarg3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3, $qtdtquotmkupmarg3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotInd4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotind4('fooValue');   // WHERE QtdtQuotInd4 = 'fooValue'
     * $query->filterByQtdtquotind4('%fooValue%', Criteria::LIKE); // WHERE QtdtQuotInd4 LIKE '%fooValue%'
     * $query->filterByQtdtquotind4(['foo', 'bar']); // WHERE QtdtQuotInd4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtquotind4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotind4($qtdtquotind4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtquotind4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTIND4, $qtdtquotind4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotUnit4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotunit4(1234); // WHERE QtdtQuotUnit4 = 1234
     * $query->filterByQtdtquotunit4(array(12, 34)); // WHERE QtdtQuotUnit4 IN (12, 34)
     * $query->filterByQtdtquotunit4(array('min' => 12)); // WHERE QtdtQuotUnit4 > 12
     * </code>
     *
     * @param mixed $qtdtquotunit4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotunit4($qtdtquotunit4 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotunit4)) {
            $useMinMax = false;
            if (isset($qtdtquotunit4['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT4, $qtdtquotunit4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotunit4['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT4, $qtdtquotunit4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT4, $qtdtquotunit4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotPric4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotpric4(1234); // WHERE QtdtQuotPric4 = 1234
     * $query->filterByQtdtquotpric4(array(12, 34)); // WHERE QtdtQuotPric4 IN (12, 34)
     * $query->filterByQtdtquotpric4(array('min' => 12)); // WHERE QtdtQuotPric4 > 12
     * </code>
     *
     * @param mixed $qtdtquotpric4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotpric4($qtdtquotpric4 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotpric4)) {
            $useMinMax = false;
            if (isset($qtdtquotpric4['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC4, $qtdtquotpric4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotpric4['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC4, $qtdtquotpric4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC4, $qtdtquotpric4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotCost4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotcost4(1234); // WHERE QtdtQuotCost4 = 1234
     * $query->filterByQtdtquotcost4(array(12, 34)); // WHERE QtdtQuotCost4 IN (12, 34)
     * $query->filterByQtdtquotcost4(array('min' => 12)); // WHERE QtdtQuotCost4 > 12
     * </code>
     *
     * @param mixed $qtdtquotcost4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotcost4($qtdtquotcost4 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotcost4)) {
            $useMinMax = false;
            if (isset($qtdtquotcost4['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST4, $qtdtquotcost4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotcost4['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST4, $qtdtquotcost4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST4, $qtdtquotcost4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotMkupMarg4 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotmkupmarg4(1234); // WHERE QtdtQuotMkupMarg4 = 1234
     * $query->filterByQtdtquotmkupmarg4(array(12, 34)); // WHERE QtdtQuotMkupMarg4 IN (12, 34)
     * $query->filterByQtdtquotmkupmarg4(array('min' => 12)); // WHERE QtdtQuotMkupMarg4 > 12
     * </code>
     *
     * @param mixed $qtdtquotmkupmarg4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotmkupmarg4($qtdtquotmkupmarg4 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotmkupmarg4)) {
            $useMinMax = false;
            if (isset($qtdtquotmkupmarg4['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4, $qtdtquotmkupmarg4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotmkupmarg4['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4, $qtdtquotmkupmarg4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4, $qtdtquotmkupmarg4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotInd5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotind5('fooValue');   // WHERE QtdtQuotInd5 = 'fooValue'
     * $query->filterByQtdtquotind5('%fooValue%', Criteria::LIKE); // WHERE QtdtQuotInd5 LIKE '%fooValue%'
     * $query->filterByQtdtquotind5(['foo', 'bar']); // WHERE QtdtQuotInd5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtquotind5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotind5($qtdtquotind5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtquotind5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTIND5, $qtdtquotind5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotUnit5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotunit5(1234); // WHERE QtdtQuotUnit5 = 1234
     * $query->filterByQtdtquotunit5(array(12, 34)); // WHERE QtdtQuotUnit5 IN (12, 34)
     * $query->filterByQtdtquotunit5(array('min' => 12)); // WHERE QtdtQuotUnit5 > 12
     * </code>
     *
     * @param mixed $qtdtquotunit5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotunit5($qtdtquotunit5 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotunit5)) {
            $useMinMax = false;
            if (isset($qtdtquotunit5['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT5, $qtdtquotunit5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotunit5['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT5, $qtdtquotunit5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT5, $qtdtquotunit5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotPric5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotpric5(1234); // WHERE QtdtQuotPric5 = 1234
     * $query->filterByQtdtquotpric5(array(12, 34)); // WHERE QtdtQuotPric5 IN (12, 34)
     * $query->filterByQtdtquotpric5(array('min' => 12)); // WHERE QtdtQuotPric5 > 12
     * </code>
     *
     * @param mixed $qtdtquotpric5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotpric5($qtdtquotpric5 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotpric5)) {
            $useMinMax = false;
            if (isset($qtdtquotpric5['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC5, $qtdtquotpric5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotpric5['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC5, $qtdtquotpric5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC5, $qtdtquotpric5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotCost5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotcost5(1234); // WHERE QtdtQuotCost5 = 1234
     * $query->filterByQtdtquotcost5(array(12, 34)); // WHERE QtdtQuotCost5 IN (12, 34)
     * $query->filterByQtdtquotcost5(array('min' => 12)); // WHERE QtdtQuotCost5 > 12
     * </code>
     *
     * @param mixed $qtdtquotcost5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotcost5($qtdtquotcost5 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotcost5)) {
            $useMinMax = false;
            if (isset($qtdtquotcost5['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST5, $qtdtquotcost5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotcost5['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST5, $qtdtquotcost5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST5, $qtdtquotcost5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotMkupMarg5 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotmkupmarg5(1234); // WHERE QtdtQuotMkupMarg5 = 1234
     * $query->filterByQtdtquotmkupmarg5(array(12, 34)); // WHERE QtdtQuotMkupMarg5 IN (12, 34)
     * $query->filterByQtdtquotmkupmarg5(array('min' => 12)); // WHERE QtdtQuotMkupMarg5 > 12
     * </code>
     *
     * @param mixed $qtdtquotmkupmarg5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotmkupmarg5($qtdtquotmkupmarg5 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotmkupmarg5)) {
            $useMinMax = false;
            if (isset($qtdtquotmkupmarg5['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5, $qtdtquotmkupmarg5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotmkupmarg5['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5, $qtdtquotmkupmarg5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5, $qtdtquotmkupmarg5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotInd6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotind6('fooValue');   // WHERE QtdtQuotInd6 = 'fooValue'
     * $query->filterByQtdtquotind6('%fooValue%', Criteria::LIKE); // WHERE QtdtQuotInd6 LIKE '%fooValue%'
     * $query->filterByQtdtquotind6(['foo', 'bar']); // WHERE QtdtQuotInd6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtquotind6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotind6($qtdtquotind6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtquotind6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTIND6, $qtdtquotind6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotUnit6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotunit6(1234); // WHERE QtdtQuotUnit6 = 1234
     * $query->filterByQtdtquotunit6(array(12, 34)); // WHERE QtdtQuotUnit6 IN (12, 34)
     * $query->filterByQtdtquotunit6(array('min' => 12)); // WHERE QtdtQuotUnit6 > 12
     * </code>
     *
     * @param mixed $qtdtquotunit6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotunit6($qtdtquotunit6 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotunit6)) {
            $useMinMax = false;
            if (isset($qtdtquotunit6['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT6, $qtdtquotunit6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotunit6['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT6, $qtdtquotunit6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTUNIT6, $qtdtquotunit6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotPric6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotpric6(1234); // WHERE QtdtQuotPric6 = 1234
     * $query->filterByQtdtquotpric6(array(12, 34)); // WHERE QtdtQuotPric6 IN (12, 34)
     * $query->filterByQtdtquotpric6(array('min' => 12)); // WHERE QtdtQuotPric6 > 12
     * </code>
     *
     * @param mixed $qtdtquotpric6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotpric6($qtdtquotpric6 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotpric6)) {
            $useMinMax = false;
            if (isset($qtdtquotpric6['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC6, $qtdtquotpric6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotpric6['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC6, $qtdtquotpric6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTPRIC6, $qtdtquotpric6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotCost6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotcost6(1234); // WHERE QtdtQuotCost6 = 1234
     * $query->filterByQtdtquotcost6(array(12, 34)); // WHERE QtdtQuotCost6 IN (12, 34)
     * $query->filterByQtdtquotcost6(array('min' => 12)); // WHERE QtdtQuotCost6 > 12
     * </code>
     *
     * @param mixed $qtdtquotcost6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotcost6($qtdtquotcost6 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotcost6)) {
            $useMinMax = false;
            if (isset($qtdtquotcost6['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST6, $qtdtquotcost6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotcost6['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST6, $qtdtquotcost6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTCOST6, $qtdtquotcost6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotMkupMarg6 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotmkupmarg6(1234); // WHERE QtdtQuotMkupMarg6 = 1234
     * $query->filterByQtdtquotmkupmarg6(array(12, 34)); // WHERE QtdtQuotMkupMarg6 IN (12, 34)
     * $query->filterByQtdtquotmkupmarg6(array('min' => 12)); // WHERE QtdtQuotMkupMarg6 > 12
     * </code>
     *
     * @param mixed $qtdtquotmkupmarg6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotmkupmarg6($qtdtquotmkupmarg6 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotmkupmarg6)) {
            $useMinMax = false;
            if (isset($qtdtquotmkupmarg6['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6, $qtdtquotmkupmarg6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotmkupmarg6['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6, $qtdtquotmkupmarg6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6, $qtdtquotmkupmarg6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtasstcode('fooValue');   // WHERE QtdtAsstCode = 'fooValue'
     * $query->filterByQtdtasstcode('%fooValue%', Criteria::LIKE); // WHERE QtdtAsstCode LIKE '%fooValue%'
     * $query->filterByQtdtasstcode(['foo', 'bar']); // WHERE QtdtAsstCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtasstcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtasstcode($qtdtasstcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTASSTCODE, $qtdtasstcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtAsstQty column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtasstqty(1234); // WHERE QtdtAsstQty = 1234
     * $query->filterByQtdtasstqty(array(12, 34)); // WHERE QtdtAsstQty IN (12, 34)
     * $query->filterByQtdtasstqty(array('min' => 12)); // WHERE QtdtAsstQty > 12
     * </code>
     *
     * @param mixed $qtdtasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtasstqty($qtdtasstqty = null, ?string $comparison = null)
    {
        if (is_array($qtdtasstqty)) {
            $useMinMax = false;
            if (isset($qtdtasstqty['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTASSTQTY, $qtdtasstqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtasstqty['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTASSTQTY, $qtdtasstqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTASSTQTY, $qtdtasstqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtListPric column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtlistpric(1234); // WHERE QtdtListPric = 1234
     * $query->filterByQtdtlistpric(array(12, 34)); // WHERE QtdtListPric IN (12, 34)
     * $query->filterByQtdtlistpric(array('min' => 12)); // WHERE QtdtListPric > 12
     * </code>
     *
     * @param mixed $qtdtlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtlistpric($qtdtlistpric = null, ?string $comparison = null)
    {
        if (is_array($qtdtlistpric)) {
            $useMinMax = false;
            if (isset($qtdtlistpric['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLISTPRIC, $qtdtlistpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtlistpric['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLISTPRIC, $qtdtlistpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLISTPRIC, $qtdtlistpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtstancost(1234); // WHERE QtdtStanCost = 1234
     * $query->filterByQtdtstancost(array(12, 34)); // WHERE QtdtStanCost IN (12, 34)
     * $query->filterByQtdtstancost(array('min' => 12)); // WHERE QtdtStanCost > 12
     * </code>
     *
     * @param mixed $qtdtstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtstancost($qtdtstancost = null, ?string $comparison = null)
    {
        if (is_array($qtdtstancost)) {
            $useMinMax = false;
            if (isset($qtdtstancost['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTSTANCOST, $qtdtstancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtstancost['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTSTANCOST, $qtdtstancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTSTANCOST, $qtdtstancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtVendItemJob column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtvenditemjob('fooValue');   // WHERE QtdtVendItemJob = 'fooValue'
     * $query->filterByQtdtvenditemjob('%fooValue%', Criteria::LIKE); // WHERE QtdtVendItemJob LIKE '%fooValue%'
     * $query->filterByQtdtvenditemjob(['foo', 'bar']); // WHERE QtdtVendItemJob IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtvenditemjob The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtvenditemjob($qtdtvenditemjob = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtvenditemjob)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTVENDITEMJOB, $qtdtvenditemjob, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtNsItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtnsitemgrup('fooValue');   // WHERE QtdtNsItemGrup = 'fooValue'
     * $query->filterByQtdtnsitemgrup('%fooValue%', Criteria::LIKE); // WHERE QtdtNsItemGrup LIKE '%fooValue%'
     * $query->filterByQtdtnsitemgrup(['foo', 'bar']); // WHERE QtdtNsItemGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtnsitemgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtnsitemgrup($qtdtnsitemgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtnsitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTNSITEMGRUP, $qtdtnsitemgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtUseCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtusecode('fooValue');   // WHERE QtdtUseCode = 'fooValue'
     * $query->filterByQtdtusecode('%fooValue%', Criteria::LIKE); // WHERE QtdtUseCode LIKE '%fooValue%'
     * $query->filterByQtdtusecode(['foo', 'bar']); // WHERE QtdtUseCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtusecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtusecode($qtdtusecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtusecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTUSECODE, $qtdtusecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtPickFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtpickflag('fooValue');   // WHERE QtdtPickFlag = 'fooValue'
     * $query->filterByQtdtpickflag('%fooValue%', Criteria::LIKE); // WHERE QtdtPickFlag LIKE '%fooValue%'
     * $query->filterByQtdtpickflag(['foo', 'bar']); // WHERE QtdtPickFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtpickflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtpickflag($qtdtpickflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtpickflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPICKFLAG, $qtdtpickflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtstatus('fooValue');   // WHERE QtdtStatus = 'fooValue'
     * $query->filterByQtdtstatus('%fooValue%', Criteria::LIKE); // WHERE QtdtStatus LIKE '%fooValue%'
     * $query->filterByQtdtstatus(['foo', 'bar']); // WHERE QtdtStatus IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtstatus The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtstatus($qtdtstatus = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtstatus)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTSTATUS, $qtdtstatus, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbLsslCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetblsslcode('fooValue');   // WHERE OetbLsslCode = 'fooValue'
     * $query->filterByOetblsslcode('%fooValue%', Criteria::LIKE); // WHERE OetbLsslCode LIKE '%fooValue%'
     * $query->filterByOetblsslcode(['foo', 'bar']); // WHERE OetbLsslCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetblsslcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetblsslcode($oetblsslcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetblsslcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_OETBLSSLCODE, $oetblsslcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtLostDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtlostdate('fooValue');   // WHERE QtdtLostDate = 'fooValue'
     * $query->filterByQtdtlostdate('%fooValue%', Criteria::LIKE); // WHERE QtdtLostDate LIKE '%fooValue%'
     * $query->filterByQtdtlostdate(['foo', 'bar']); // WHERE QtdtLostDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtlostdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtlostdate($qtdtlostdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtlostdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLOSTDATE, $qtdtlostdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtLostPosted column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtlostposted('fooValue');   // WHERE QtdtLostPosted = 'fooValue'
     * $query->filterByQtdtlostposted('%fooValue%', Criteria::LIKE); // WHERE QtdtLostPosted LIKE '%fooValue%'
     * $query->filterByQtdtlostposted(['foo', 'bar']); // WHERE QtdtLostPosted IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtlostposted The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtlostposted($qtdtlostposted = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtlostposted)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLOSTPOSTED, $qtdtlostposted, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtLeadDays column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtleaddays(1234); // WHERE QtdtLeadDays = 1234
     * $query->filterByQtdtleaddays(array(12, 34)); // WHERE QtdtLeadDays IN (12, 34)
     * $query->filterByQtdtleaddays(array('min' => 12)); // WHERE QtdtLeadDays > 12
     * </code>
     *
     * @param mixed $qtdtleaddays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtleaddays($qtdtleaddays = null, ?string $comparison = null)
    {
        if (is_array($qtdtleaddays)) {
            $useMinMax = false;
            if (isset($qtdtleaddays['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLEADDAYS, $qtdtleaddays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtleaddays['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLEADDAYS, $qtdtleaddays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLEADDAYS, $qtdtleaddays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtOrdrDiscPct column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtordrdiscpct(1234); // WHERE QtdtOrdrDiscPct = 1234
     * $query->filterByQtdtordrdiscpct(array(12, 34)); // WHERE QtdtOrdrDiscPct IN (12, 34)
     * $query->filterByQtdtordrdiscpct(array('min' => 12)); // WHERE QtdtOrdrDiscPct > 12
     * </code>
     *
     * @param mixed $qtdtordrdiscpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtordrdiscpct($qtdtordrdiscpct = null, ?string $comparison = null)
    {
        if (is_array($qtdtordrdiscpct)) {
            $useMinMax = false;
            if (isset($qtdtordrdiscpct['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTORDRDISCPCT, $qtdtordrdiscpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtordrdiscpct['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTORDRDISCPCT, $qtdtordrdiscpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTORDRDISCPCT, $qtdtordrdiscpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtQuotDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtquotdiscpct1(1234); // WHERE QtdtQuotDiscPct1 = 1234
     * $query->filterByQtdtquotdiscpct1(array(12, 34)); // WHERE QtdtQuotDiscPct1 IN (12, 34)
     * $query->filterByQtdtquotdiscpct1(array('min' => 12)); // WHERE QtdtQuotDiscPct1 > 12
     * </code>
     *
     * @param mixed $qtdtquotdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtquotdiscpct1($qtdtquotdiscpct1 = null, ?string $comparison = null)
    {
        if (is_array($qtdtquotdiscpct1)) {
            $useMinMax = false;
            if (isset($qtdtquotdiscpct1['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1, $qtdtquotdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtquotdiscpct1['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1, $qtdtquotdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1, $qtdtquotdiscpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMtrcReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmtrcreqd('fooValue');   // WHERE QtdtMtrcReqd = 'fooValue'
     * $query->filterByQtdtmtrcreqd('%fooValue%', Criteria::LIKE); // WHERE QtdtMtrcReqd LIKE '%fooValue%'
     * $query->filterByQtdtmtrcreqd(['foo', 'bar']); // WHERE QtdtMtrcReqd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmtrcreqd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmtrcreqd($qtdtmtrcreqd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmtrcreqd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMTRCREQD, $qtdtmtrcreqd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtCofcReqd column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtcofcreqd('fooValue');   // WHERE QtdtCofcReqd = 'fooValue'
     * $query->filterByQtdtcofcreqd('%fooValue%', Criteria::LIKE); // WHERE QtdtCofcReqd LIKE '%fooValue%'
     * $query->filterByQtdtcofcreqd(['foo', 'bar']); // WHERE QtdtCofcReqd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtcofcreqd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtcofcreqd($qtdtcofcreqd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtcofcreqd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTCOFCREQD, $qtdtcofcreqd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMnfrId column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmnfrid('fooValue');   // WHERE QtdtMnfrId = 'fooValue'
     * $query->filterByQtdtmnfrid('%fooValue%', Criteria::LIKE); // WHERE QtdtMnfrId LIKE '%fooValue%'
     * $query->filterByQtdtmnfrid(['foo', 'bar']); // WHERE QtdtMnfrId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmnfrid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmnfrid($qtdtmnfrid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmnfrid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMNFRID, $qtdtmnfrid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtMnfrItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtmnfritemid('fooValue');   // WHERE QtdtMnfrItemId = 'fooValue'
     * $query->filterByQtdtmnfritemid('%fooValue%', Criteria::LIKE); // WHERE QtdtMnfrItemId LIKE '%fooValue%'
     * $query->filterByQtdtmnfritemid(['foo', 'bar']); // WHERE QtdtMnfrItemId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtmnfritemid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtmnfritemid($qtdtmnfritemid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtmnfritemid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTMNFRITEMID, $qtdtmnfritemid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtLmOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtlmordrnbr('fooValue');   // WHERE QtdtLmOrdrNbr = 'fooValue'
     * $query->filterByQtdtlmordrnbr('%fooValue%', Criteria::LIKE); // WHERE QtdtLmOrdrNbr LIKE '%fooValue%'
     * $query->filterByQtdtlmordrnbr(['foo', 'bar']); // WHERE QtdtLmOrdrNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtlmordrnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtlmordrnbr($qtdtlmordrnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtlmordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLMORDRNBR, $qtdtlmordrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtLmOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtlmordrdate('fooValue');   // WHERE QtdtLmOrdrDate = 'fooValue'
     * $query->filterByQtdtlmordrdate('%fooValue%', Criteria::LIKE); // WHERE QtdtLmOrdrDate LIKE '%fooValue%'
     * $query->filterByQtdtlmordrdate(['foo', 'bar']); // WHERE QtdtLmOrdrDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtlmordrdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtlmordrdate($qtdtlmordrdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtlmordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTLMORDRDATE, $qtdtlmordrdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtSpecItemCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtspecitemcode('fooValue');   // WHERE QtdtSpecItemCode = 'fooValue'
     * $query->filterByQtdtspecitemcode('%fooValue%', Criteria::LIKE); // WHERE QtdtSpecItemCode LIKE '%fooValue%'
     * $query->filterByQtdtspecitemcode(['foo', 'bar']); // WHERE QtdtSpecItemCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtspecitemcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtspecitemcode($qtdtspecitemcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtspecitemcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTSPECITEMCODE, $qtdtspecitemcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtAcSalePgm column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtacsalepgm('fooValue');   // WHERE QtdtAcSalePgm = 'fooValue'
     * $query->filterByQtdtacsalepgm('%fooValue%', Criteria::LIKE); // WHERE QtdtAcSalePgm LIKE '%fooValue%'
     * $query->filterByQtdtacsalepgm(['foo', 'bar']); // WHERE QtdtAcSalePgm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtacsalepgm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtacsalepgm($qtdtacsalepgm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtacsalepgm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTACSALEPGM, $qtdtacsalepgm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtNsVendShipfr column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtnsvendshipfr('fooValue');   // WHERE QtdtNsVendShipfr = 'fooValue'
     * $query->filterByQtdtnsvendshipfr('%fooValue%', Criteria::LIKE); // WHERE QtdtNsVendShipfr LIKE '%fooValue%'
     * $query->filterByQtdtnsvendshipfr(['foo', 'bar']); // WHERE QtdtNsVendShipfr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtnsvendshipfr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtnsvendshipfr($qtdtnsvendshipfr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtnsvendshipfr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR, $qtdtnsvendshipfr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtdtPrntMnfrNote column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtprntmnfrnote('fooValue');   // WHERE QtdtPrntMnfrNote = 'fooValue'
     * $query->filterByQtdtprntmnfrnote('%fooValue%', Criteria::LIKE); // WHERE QtdtPrntMnfrNote LIKE '%fooValue%'
     * $query->filterByQtdtprntmnfrnote(['foo', 'bar']); // WHERE QtdtPrntMnfrNote IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtdtprntmnfrnote The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtdtprntmnfrnote($qtdtprntmnfrnote = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtdtprntmnfrnote)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE, $qtdtprntmnfrnote, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(QuoteDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Quote object
     *
     * @param \Quote|ObjectCollection $quote The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuote($quote, ?string $comparison = null)
    {
        if ($quote instanceof \Quote) {
            return $this
                ->addUsingAlias(QuoteDetailTableMap::COL_QTHDID, $quote->getQthdid(), $comparison);
        } elseif ($quote instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(QuoteDetailTableMap::COL_QTHDID, $quote->toKeyValue('PrimaryKey', 'Qthdid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByQuote() only accepts arguments of type \Quote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Quote relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinQuote(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Quote');

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
            $this->addJoinObject($join, 'Quote');
        }

        return $this;
    }

    /**
     * Use the Quote relation Quote object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \QuoteQuery A secondary query class using the current class as primary query
     */
    public function useQuoteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinQuote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Quote', '\QuoteQuery');
    }

    /**
     * Use the Quote relation Quote object
     *
     * @param callable(\QuoteQuery):\QuoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withQuoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useQuoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Quote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \QuoteQuery The inner query object of the EXISTS statement
     */
    public function useQuoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \QuoteQuery */
        $q = $this->useExistsQuery('Quote', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Quote table for a NOT EXISTS query.
     *
     * @see useQuoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \QuoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useQuoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \QuoteQuery */
        $q = $this->useExistsQuery('Quote', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Quote table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \QuoteQuery The inner query object of the IN statement
     */
    public function useInQuoteQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \QuoteQuery */
        $q = $this->useInQuery('Quote', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Quote table for a NOT IN query.
     *
     * @see useQuoteInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \QuoteQuery The inner query object of the NOT IN statement
     */
    public function useNotInQuoteQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \QuoteQuery */
        $q = $this->useInQuery('Quote', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildQuoteDetail $quoteDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($quoteDetail = null)
    {
        if ($quoteDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(QuoteDetailTableMap::COL_QTHDID), $quoteDetail->getQthdid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(QuoteDetailTableMap::COL_QTDTLINE), $quoteDetail->getQtdtline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the quote_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QuoteDetailTableMap::clearInstancePool();
            QuoteDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(QuoteDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            QuoteDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            QuoteDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
